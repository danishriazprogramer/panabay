<?php

namespace Webkul\Marketplace\Http\Controllers\Seller\Settings;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Webkul\Core\Repositories\LocaleRepository;
use Webkul\Marketplace\Http\Controllers\Seller\Controller;
use Webkul\Marketplace\Repositories\SellerRepository;

class GeneralController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        protected LocaleRepository $localeRepository,
        protected SellerRepository $sellerRepository
    ) {}

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('marketplace::seller.settings.general.index')
            ->with([
                'locales' => $this->localeRepository->pluck('name', 'code'),
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): RedirectResponse
    {
        $seller = auth()->guard('seller')->user();

        $data = $request->validate([
            'locale'                    => ['required'],
            'new_password'              => ['confirmed', 'min:6', 'required_with:current_password'],
            'new_password_confirmation' => ['required_with:new_password'],
            'current_password'          => ['required_with:new_password'],
        ]);

        if (! empty($data['current_password'])) {
            if (Hash::check($data['current_password'], $seller->password)) {
                $data['password'] = Hash::make($data['new_password']);
            } else {
                return back()->withWarning(trans('marketplace::app.seller.settings.general.index.unmatched-password'));
            }
        }

        Event::dispatch('marketplace.seller.update.before', $seller->id);

        $this->sellerRepository->where('id', $seller->id)->update(Arr::only($data, [
            'locale',
            'password',
        ]));

        Event::dispatch('marketplace.seller.update.after', $seller->refresh());

        return back()->withSuccess(trans('marketplace::app.seller.settings.general.index.update-success'));
    }
}
