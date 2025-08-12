<?php

namespace Webkul\Marketplace\Http\Controllers\Seller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Webkul\Core\Traits\PDFHandler;
use Webkul\Marketplace\DataGrids\Seller\TransactionDataGrid;
use Webkul\Marketplace\Helpers\Reporting\Sale as SaleHelper;
use Webkul\Marketplace\Repositories\TransactionRepository;

class TransactionController extends Controller
{
    use PDFHandler;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected SaleHelper $saleHelper,
        protected TransactionRepository $transactionRepository
    ) {}

    /**
     * Array of functions to be used for different types of reports.
     *
     * @var array
     */
    protected $typeFunctions = [
        'total_sale'        => 'getTotalSales',
        'total_payout'      => 'getTotalPayout',
        'remaining_payout'  => 'getRemainingPayout',
        'total_seller_sale' => 'getTotalSellerSales',
        'total_commission'  => 'getTotalCommissionPaid',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $request->query->add([
            'start' => today()->subDays(30)->format('Y-m-d'),
            'end'   => today()->addDay()->format('Y-m-d'),
        ]);

        if ($request->ajax()) {
            return datagrid(TransactionDataGrid::class)->process();
        }

        $statistics = collect($this->typeFunctions)->mapWithKeys(fn ($function, $key) => [
            $key => $this->saleHelper->$function(
                seller()->user(),
                $request->input('start'),
                $request->input('end')
            ),
        ]);

        return view('marketplace::seller.transactions.index')
            ->with([
                'statistics' => $statistics,
            ]);
    }

    /**
     * Show the view for the specified resource.
     *
     * @return Response
     */
    public function view(int $id)
    {
        $transaction = $this->transactionRepository->with('order')->findOneWhere([
            'id'                    => $id,
            'marketplace_seller_id' => seller()->id(),
        ]);

        return view('marketplace::seller.transactions.view', compact('transaction'));
    }

    /**
     * Print and download the for the specified resource.
     *
     * @return Response
     */
    public function print(int $id)
    {
        $transaction = $this->transactionRepository->with('order')->findOneWhere([
            'id'                    => $id,
            'marketplace_seller_id' => seller()->id(),
        ]);

        return $this->downloadPDF(
            view('marketplace::seller.transactions.pdf', compact('transaction'))->render(),
            'transaction-'.$transaction->created_at->format('d-m-Y')
        );
    }
}
