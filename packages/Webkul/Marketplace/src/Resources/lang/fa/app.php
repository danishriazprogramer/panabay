<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'بازار',
                    'info'  => 'مدیریت بازار',

                    'module-info' => [
                        'title'       => 'اطلاعات ماژول',
                        'info'        => 'اطلاعات مربوط به نسخه برنامه را ارائه می‌دهد.',
                        'app-version' => 'نسخه برنامه: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'درصد کمیسیون مدیر',
                        'description'                  => 'مدیریت تنظیمات کلی بازار مانند وضعیت، کمیسیون و غیره.',
                        'lines-in-street-address'      => 'خطوط در آدرس خیابان',
                        'lines-in-street-address-info' => 'تعداد خطوط در آدرس خیابان را تنظیم کنید. پیش‌فرض یک خط است.',
                        'status'                       => 'وضعیت',
                        'title'                        => 'عمومی',
                    ],

                    'product' => [
                        'approval-required'         => 'نیاز به تأیید',
                        'description'               => 'مدیریت تنظیمات محصولات بازار مانند تأییدها، پرچم‌ها و غیره.',
                        'enable-flag'               => 'فعال کردن پرچم',
                        'seller-can-assign-product' => 'فروشنده می‌تواند محصول اختصاص دهد',
                        'seller-can-create-product' => 'فروشنده می‌تواند محصول ایجاد کند',
                        'show-progress-bar'         => 'نمایش نوار پیشرفت',
                        'title'                     => 'محصول',
                    ],

                    'seller' => [
                        'approval-required'           => 'نیاز به تایید',
                        'can-cancel-order'            => 'قابلیت لغو سفارش',
                        'can-create-invoice'          => 'قابلیت ایجاد فاکتور',
                        'can-create-shipment'         => 'قابلیت ایجاد حمل و نقل',
                        'description'                 => 'مدیریت تنظیمات فروشنده در بازار مانند تایید، پرچم‌ها و غیره.',
                        'enable-flag'                 => 'فعال کردن پرچم',
                        'enable-minimum-order-amount' => 'فعال کردن حداقل مبلغ سفارش',
                        'enable-seller-flag'          => 'فعال کردن پرچم فروشنده',
                        'red-flag-limit'              => 'حد پرچم قرمز',
                        'red-flag-limit-info'         => 'اگر فروشنده از این حد بیشتر شود، پرچم قرمز در پروفایل فروشنده نمایش داده می‌شود.',
                        'show-red-flag'               => 'نمایش پرچم قرمز در پروفایل در صورت عبور از حد',
                        'title'                       => 'فروشنده',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'تعداد محدود',
                        'description' => 'مدیریت فروشندگان برجسته بازار.',
                        'status'      => 'وضعیت',
                        'title'       => 'فروشندگان برجسته',

                        'popularity-criteria' => [
                            'all'              => 'همه',
                            'maximum-orders'   => 'حداکثر سفارشات',
                            'maximum-products' => 'حداکثر محصولات',
                            'maximum-rating'   => 'حداکثر امتیاز',
                            'maximum-sale'     => 'حداکثر فروش',
                            'title'            => 'معیارهای محبوبیت',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'عنوان دکمه بنر',
                        'banner-description'  => 'توضیحات بنر',
                        'banner-image'        => 'تصویر بنر',
                        'banner-title'        => 'عنوان بنر',
                        'business-hour'       => 'ساعات کسب و کار',
                        'community-count'     => 'تعداد اجتماعی',
                        'description'         => 'صفحه نخست بازار را با افزودن آیکون، بنر و توضیحات برای یک نگاه تازه، سفارشی کنید.',
                        'feature-box1-desc'   => 'توضیحات جعبه ویژگی 1',
                        'feature-box1-icon'   => 'آیکن جعبه ویژگی 1',
                        'feature-box1-title'  => 'عنوان جعبه ویژگی 1',
                        'feature-box2-desc'   => 'توضیحات جعبه ویژگی 2',
                        'feature-box2-icon'   => 'آیکن جعبه ویژگی 2',
                        'feature-box2-title'  => 'عنوان جعبه ویژگی 2',
                        'feature-box3-desc'   => 'توضیحات جعبه ویژگی 3',
                        'feature-box3-icon'   => 'آیکن جعبه ویژگی 3',
                        'feature-box3-title'  => 'عنوان جعبه ویژگی 3',
                        'feature-box4-desc'   => 'توضیحات جعبه ویژگی 4',
                        'feature-box4-icon'   => 'آیکن جعبه ویژگی 4',
                        'feature-box4-title'  => 'عنوان جعبه ویژگی 4',
                        'feature-description' => 'توضیحات ویژگی',
                        'feature-image'       => 'تصویر ویژگی',
                        'feature-title'       => 'عنوان ویژگی',
                        'journey-description' => 'توضیحات مسیر',
                        'journey-image'       => 'تصویر مسیر',
                        'journey-step1-desc'  => 'توضیحات گام 1 مسیر',
                        'journey-step1-icon'  => 'آیکن گام 1 مسیر',
                        'journey-step1-title' => 'عنوان گام 1 مسیر',
                        'journey-step2-desc'  => 'توضیحات گام 2 مسیر',
                        'journey-step2-icon'  => 'آیکن گام 2 مسیر',
                        'journey-step2-title' => 'عنوان گام 2 مسیر',
                        'journey-step3-desc'  => 'توضیحات گام 3 مسیر',
                        'journey-step3-icon'  => 'آیکن گام 3 مسیر',
                        'journey-step3-title' => 'عنوان گام 3 مسیر',
                        'journey-step4-desc'  => 'توضیحات گام 4 مسیر',
                        'journey-step4-icon'  => 'آیکن گام 4 مسیر',
                        'journey-step4-title' => 'عنوان گام 4 مسیر',
                        'journey-step5-desc'  => 'توضیحات گام 5 مسیر',
                        'journey-step5-icon'  => 'آیکن گام 5 مسیر',
                        'journey-step5-title' => 'عنوان گام 5 مسیر',
                        'journey-title'       => 'عنوان مسیر',
                        'payment-duration'    => 'مدت زمان پرداخت',
                        'serviceable-pincode' => 'کدپستی قابل خدمت',
                        'title'               => 'صفحه نخست',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'اختصاص محصول',
            'communications'    => 'ارتباطات',
            'create'            => 'ایجاد',
            'delete'            => 'حذف',
            'edit'              => 'ویرایش',
            'flag-reasons'      => 'دلایل گزارش',
            'inventory-sources' => 'منابع موجودی',
            'orders'            => 'سفارشات',
            'pay'               => 'پرداخت',
            'payment-request'   => 'درخواست پرداخت',
            'product-reviews'   => 'نقد و بررسی محصولات',
            'products'          => 'محصولات',
            'reviews'           => 'نقد و بررسی فروشنده',
            'seller-categories' => 'دسته‌بندی‌های فروشنده',
            'sellers'           => 'فروشندگان',
            'title'             => 'بازار',
            'transactions'      => 'تراکنش‌ها',
            'view'              => 'مشاهده',
        ],

        'menu' => [
            'communications'    => 'ارتباطات',
            'flag-reasons'      => 'دلایل پرچم',
            'inventory-sources' => 'منابع موجودی',
            'orders'            => 'سفارش‌ها',
            'payment-requests'  => 'درخواست‌های پرداخت',
            'product-reviews'   => 'نظرات محصول',
            'products'          => 'محصولات',
            'seller-categories' => 'دسته‌بندی‌های فروشنده',
            'seller-reviews'    => 'نظرات فروشنده',
            'sellers'           => 'فروشندگان',
            'title'             => 'مارکت‌پلیس',
            'transactions'      => 'تراکنش‌ها',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'افزودن فروشنده',
                'delete-failed'      => 'حذف فروشنده با شکست مواجه شد!',
                'delete-success'     => 'فروشنده با موفقیت حذف شد.',
                'incomplete-profile' => 'فروشنده پروفایل ناقصی دارد!',
                'login-message'      => 'شما به عنوان :seller_name وارد شده‌اید',
                'pending-orders'     => 'فروشنده چند سفارش در انتظار دارد',
                'title'              => 'فروشندگان',
                'update-success'     => 'فروشنده با موفقیت به‌روزرسانی شد.',

                'datagrid' => [
                    'add-product'     => 'تخصیص',
                    'approved'        => 'تأیید شده',
                    'assign-product'  => 'تخصیص محصول',
                    'created-at'      => 'ساخته شده در',
                    'delete'          => 'حذف',
                    'disapproved'     => 'تأیید نشده',
                    'edit'            => 'ویرایش',
                    'email'           => 'ایمیل',
                    'flags'           => 'پرچم‌ها',
                    'id'              => 'شناسه',
                    'login-as-seller' => 'ورود به عنوان فروشنده',
                    'seller-id'       => 'شناسه - :seller_id',
                    'seller-name'     => 'نام فروشنده',
                    'shop-url'        => 'آدرس فروشگاه',
                    'status'          => 'وضعیت',
                    'suspended'       => 'تعلیق شده',
                    'total-flags'     => 'مجموع پرچم‌ها: :count',
                    'update-status'   => 'به‌روزرسانی وضعیت',
                ],

                'create'  => [
                    'address'        => 'آدرس',
                    'city'           => 'شهر',
                    'country'        => 'کشور',
                    'email'          => 'ایمیل',
                    'name'           => 'نام',
                    'phone'          => 'شماره تلفن',
                    'postcode'       => 'کد پستی',
                    'save-btn'       => 'ذخیره',
                    'select'         => 'انتخاب',
                    'shop-title'     => 'عنوان فروشگاه',
                    'shop-url'       => 'آدرس فروشگاه',
                    'state'          => 'استان',
                    'street-address' => 'آدرس خیابان',
                    'success'        => 'فروشنده با موفقیت ایجاد شد.',
                    'title'          => 'ایجاد فروشنده',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'پرچم‌های فروشنده',

                    'datagrid' => [
                        'id'             => 'شناسه',
                        'customer-name'  => 'نام مشتری',
                        'customer-email' => 'ایمیل مشتری',
                        'date'           => 'تاریخ',
                        'reason'         => 'دلیل',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'بازگشت',
                'image-placeholder' => 'تصویر محصول',
                'no-result'         => 'نتیجه‌ای یافت نشد!',
                'sku'               => 'SKU - :sku',
                'title'             => 'جستجوی محصولات',
            ],

            'assign-product' => [
                'already-selling'     => 'فروشنده قبلاً این محصول را می‌فروشد',
                'assign-successfully' => 'محصول با موفقیت به فروشنده اختصاص یافت.',
                'back-btn'            => 'بازگشت',
                'condition'           => 'شرایط',
                'description'         => 'توضیحات',
                'new'                 => 'جدید',
                'old'                 => 'قدیمی',
                'price'               => 'قیمت',
                'product-not-allowed' => 'فروشنده اجازه فروش محصول نوع :type را ندارد.',
                'quantities'          => 'مقادیر',
                'save-btn'            => 'ذخیره',
                'select-condition'    => 'شرایط را انتخاب کنید',
                'title'               => 'اختصاص محصول',

                'seller-details' => [
                    'additional-info' => 'اطلاعات اضافی',
                    'approved'        => 'تایید شده',
                    'disapproved'     => 'رد شده',
                    'no-of-products'  => 'تعداد محصولات',
                    'status'          => 'وضعیت',
                    'suspended'       => 'تعلیق شده',
                    'title'           => 'جزئیات فروشنده',
                ],

                'product-details' => [
                    'active'            => 'فعال',
                    'disable'           => 'غیرفعال',
                    'title'             => 'جزئیات محصول',
                    'image-placeholder' => 'تصویر محصول',
                ],

                'images' => [
                    'info'  => 'رزولوشن تصویر باید مانند 609x560 پیکسل باشد.',
                    'title' => 'تصاویر',
                ],

                'videos' => [
                    'error' => 'ویدیو نباید بیشتر از :max کیلوبایت باشد. لطفاً یک فایل کوچکتر انتخاب کنید.',
                    'info'  => 'حداکثر اندازه ویدیو باید مانند :size باشد.',
                    'title' => 'ویدیوها',
                ],

                'configurable' => [
                    'delete-btn'        => 'حذف',
                    'edit-btn'          => 'ویرایش',
                    'image-placeholder' => 'تصویر محصول',
                    'qty'               => 'تعداد - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'تغییرات',

                    'edit' => [
                        'images'     => 'تصاویر',
                        'price'      => 'قیمت',
                        'quantities' => 'تعداد',
                        'save-btn'   => 'ذخیره',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'اضافه کردن لینک',
                        'delete-btn'  => 'حذف',
                        'edit-btn'    => 'ویرایش',
                        'empty-info'  => 'برای ایجاد لینک روی‌همین‌جا.',
                        'empty-title' => 'اضافه کردن لینک',
                        'file'        => 'فایل : ',
                        'info'        => 'نوع محصول قابل دانلود امکان فروش محصولات دیجیتالی مانند کتاب‌های الکترونیکی، نرم‌افزارها، موسیقی، بازی‌ها و غیره را فراهم می‌کند.',
                        'sample-file' => 'فایل نمونه : ',
                        'sample-url'  => 'آدرس نمونه : ',
                        'title'       => 'لینک‌های قابل دانلود',
                        'url'         => 'آدرس وب : ',

                        'update-create' => [
                            'downloads'   => 'دانلود مجاز',
                            'file'        => 'فایل',
                            'file-type'   => 'نوع فایل',
                            'name'        => 'عنوان',
                            'price'       => 'قیمت',
                            'sample'      => 'نمونه',
                            'sample-type' => 'نوع نمونه',
                            'save-btn'    => 'ذخیره',
                            'title'       => 'لینک',
                            'url'         => 'آدرس وب',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'اضافه کردن نمونه',
                        'delete-btn'  => 'حذف',
                        'edit-btn'    => 'ویرایش',
                        'empty-info'  => 'برای ایجاد نمونه روی‌همین‌جا.',
                        'empty-title' => 'اضافه کردن نمونه',
                        'file'        => 'فایل : ',
                        'info'        => 'نوع محصول قابل دانلود امکان فروش محصولات دیجیتالی مانند کتاب‌های الکترونیکی، نرم‌افزارها، موسیقی، بازی‌ها و غیره را فراهم می‌کند.',
                        'title'       => 'نمونه‌های قابل دانلود',
                        'url'         => 'آدرس وب : ',

                        'update-create' => [
                            'file'        => 'فایل',
                            'file-type'   => 'نوع فایل',
                            'name'        => 'عنوان',
                            'save-btn'    => 'ذخیره',
                            'title'       => 'لینک',
                            'url'         => 'آدرس وب',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'بازگشت',
                'suspended'      => 'تعلیق شده',
                'title'          => 'ویرایش فروشنده',
                'update-btn'     => 'به‌روزرسانی فروشنده',
                'update-success' => 'فروشنده با موفقیت به‌روزرسانی شد.',

                'shop' => [
                    'address'          => 'آدرس',
                    'city'             => 'شهر',
                    'country'          => 'کشور',
                    'description'      => 'توضیحات',
                    'email'            => 'ایمیل',
                    'name'             => 'نام',
                    'phone-number'     => 'شماره تلفن',
                    'postcode'         => 'کد پستی',
                    'select'           => 'انتخاب',
                    'shop-title'       => 'عنوان فروشگاه',
                    'state'            => 'استان',
                    'street-address'   => 'آدرس خیابان',
                    'title'            => 'جزئیات فروشگاه',
                    'url'              => 'آدرس فروشگاه',
                ],

                'profile' => [
                    'banner'         => 'بنر پروفایل',
                    'banner-size'    => 'اندازه بنر باید 300px X 200px باشد',
                    'logo'           => 'لوگو پروفایل',
                    'logo-size'      => 'اندازه لوگو باید 125px X 125px باشد',
                    'social-links'   => ':name لینک',
                    'title'          => 'جزئیات پروفایل',
                ],

                'allowed-product' => [
                    'title'  => 'محصولات مجاز',
                ],

                'minimum-order-amount' => [
                    'title'  => 'حداقل میزان سفارش',
                ],

                'google-analytics-id' => [
                    'title'  => 'شناسه Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'درصد',
                    'status'     => 'وضعیت',
                    'title'      => 'کمیسیون فروشنده',
                ],

                'meta-info' => [
                    'meta-description' => 'توضیحات متا',
                    'meta-keyword'     => 'کلمات کلیدی متا',
                    'meta-title'       => 'عنوان متا',
                    'title'            => 'اطلاعات متا',
                ],

                'policy' => [
                    'privacy'  => 'سیاست حفظ حریم خصوصی',
                    'return'   => 'سیاست بازگشت',
                    'shipping' => 'سیاست حمل و نقل',
                    'title'    => 'قوانین',
                ],

                'channels' => [
                    'title' => 'کانال',
                ],

                'users' => [
                    'email' => 'ایمیل',
                    'id'    => 'شناسه',
                    'name'  => 'نام',
                    'phone' => 'تلفن',
                    'title' => 'کاربران',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'افزودن محصولات',
                'delete-success' => 'محصول با موفقیت حذف شد.',
                'title'          => 'محصولات',
                'update-success' => 'محصول با موفقیت به‌روزرسانی شد.',

                'datagrid' => [
                    'approved'       => 'تایید شده',
                    'delete'         => 'حذف',
                    'disapproved'    => 'تایید نشده',
                    'flags'          => 'پرچم‌ها',
                    'id'             => 'شناسه',
                    'is-owner'       => 'صاحب مالک است',
                    'no'             => 'خیر',
                    'out-of-stock'   => 'تمام شده',
                    'price'          => 'قیمت',
                    'product-id'     => 'شناسه محصول - :product_id',
                    'product-name'   => 'نام محصول',
                    'product-number' => 'شماره محصول',
                    'product-type'   => 'نوع محصول',
                    'quantity'       => 'تعداد',
                    'seller-name'    => 'نام فروشنده',
                    'sku'            => 'کد محصول',
                    'status'         => 'وضعیت',
                    'total-flags'    => 'مجموع پرچم‌ها: :count',
                    'total-quantity' => ':quantity موجود',
                    'update-status'  => 'به‌روزرسانی وضعیت',
                    'yes'            => 'بله',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'پرچم‌های محصول',

                    'datagrid' => [
                        'customer-email' => 'ایمیل مشتری',
                        'customer-name'  => 'نام مشتری',
                        'date'           => 'تاریخ',
                        'id'             => 'شناسه',
                        'reason'         => 'دلیل',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'جزئیات نقد',
                'title'          => 'نقد و بررسی محصولات',

                'datagrid' => [
                    'approved'      => 'تایید شده',
                    'comment'       => 'نظر',
                    'customer-name' => 'نام مشتری',
                    'date'          => 'تاریخ',
                    'disapproved'   => 'تایید نشده',
                    'id'            => 'شناسه',
                    'images'        => 'تصاویر',
                    'pending'       => 'در انتظار',
                    'product'       => 'محصول',
                    'product-name'  => 'نام محصول',
                    'rating'        => 'رتبه',
                    'review-id'     => 'شناسه نقد - :review_id',
                    'shop-title'    => 'عنوان فروشگاه',
                    'status'        => 'وضعیت',
                    'title'         => 'عنوان',
                    'update-status' => 'وضعیت به‌روزرسانی',
                    'view'          => 'مشاهده',
                ],
            ],

            'update-success' => 'با موفقیت بروزرسانی شدند بررسی‌های محصول',
            'delete-success' => 'بررسی‌های محصول با موفقیت حذف شد.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'بررسی‌های فروشنده',

                'datagrid' => [
                    'approved'            => 'تأیید شده',
                    'comment'             => 'نظر',
                    'customer-name'       => 'نام مشتری',
                    'date'                => 'تاریخ',
                    'delete'              => 'حذف',
                    'disapproved'         => 'رد شده',
                    'id'                  => 'شناسه',
                    'mass-delete-success' => 'بررسی‌های فروشنده با موفقیت حذف شدند.',
                    'mass-update-success' => 'بررسی‌های فروشنده با موفقیت به‌روزرسانی شدند.',
                    'pending'             => 'در انتظار',
                    'rating'              => 'امتیاز',
                    'review-id'           => 'شناسه - :review_id',
                    'review-title'        => 'عنوان بررسی',
                    'seller-name'         => 'نام فروشنده',
                    'shop-title'          => 'عنوان فروشگاه',
                    'status'              => 'وضعیت',
                    'update-status'       => 'به‌روزرسانی وضعیت',
                ],
            ],

            'delete-success' => 'بررسی فروشنده با موفقیت حذف شد.',
        ],

        'orders' => [
            'index' => [
                'title' => 'سفارشات',

                'datagrid' => [
                    'canceled'        => 'لغو شده',
                    'closed'          => 'بسته شده',
                    'commission'      => 'کمیسیون',
                    'completed'       => 'تکمیل شده',
                    'customer'        => 'مشتری',
                    'date'            => 'تاریخ',
                    'discount'        => 'تخفیف',
                    'email'           => 'ایمیل',
                    'fraud'           => 'تقلب',
                    'gross-amt'       => 'مبلغ خالص',
                    'id'              => 'شناسه',
                    'items'           => 'موارد',
                    'location'        => 'مکان',
                    'order-id'        => 'شناسه سفارش - #:id',
                    'payment'         => 'پرداخت',
                    'pending'         => 'در انتظار',
                    'pending-payment' => 'پرداخت در انتظار',
                    'processing'      => 'در حال پردازش',
                    'seller'          => 'فروشنده',
                    'seller-earn'     => 'کسب درآمد',
                    'shipment'        => 'حمل و نقل',
                    'shop'            => 'فروشگاه',
                    'status'          => 'وضعیت',
                    'view'            => 'مشاهده',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'تراکنش‌ها',

                'datagrid' => [
                    'base-total'     => 'جمع کل پایه',
                    'comment'        => 'نظر',
                    'customer-name'  => 'نام مشتری',
                    'id'             => 'شناسه',
                    'seller-id'      => 'شناسه فروشنده',
                    'seller-name'    => 'نام فروشنده',
                    'transaction-id' => 'شناسه تراکنش',
                    'view'           => 'مشاهده',
                ],
            ],

            'view' => [
                'commission'        => 'کمیسیون',
                'created-on'        => 'ایجاد شده در :date',
                'name'              => 'نام',
                'payment-method'    => 'پرداخت :method',
                'price'             => 'قیمت',
                'qty'               => 'تعداد',
                'seller-total'      => 'مجموع فروشنده',
                'shipping-handling' => 'ارسال و کنترل',
                'subtotal'          => 'جمع جزئی',
                'tax'               => 'مالیات',
                'title'             => 'تراکنش‌ها #:transaction_id',
                'total'             => 'مجموع',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'ایجاد دلیل',
                'delete-success'      => 'دلیل پرچم با موفقیت حذف شد.',
                'mass-delete-success' => 'دلایل پرچم با موفقیت حذف شدند.',
                'mass-update-success' => 'دلایل پرچم با موفقیت به‌روزرسانی شدند.',
                'title'               => 'دلایل پرچم',

                'datagrid' => [
                    'delete'        => 'حذف',
                    'edit'          => 'ویرایش',
                    'id'            => 'شناسه',
                    'name'          => 'نام',
                    'update-status' => 'به‌روزرسانی وضعیت',

                    'status' => [
                        'active'  => 'فعال',
                        'disable' => 'غیرفعال',
                        'title'   => 'وضعیت',
                    ],

                    'type' => [
                        'product' => 'محصول',
                        'seller'  => 'فروشنده',
                        'title'   => 'نوع',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'مدیر',
                'back-btn' => 'بازگشت',
                'general'  => 'عمومی',
                'label'    => 'برچسب',
                'product'  => 'محصول',
                'save-btn' => 'ذخیره دلیل',
                'seller'   => 'فروشنده',
                'status'   => 'وضعیت',
                'title'    => 'ایجاد دلیل',
                'type'     => 'نوع',
            ],

            'edit' => [
                'admin'    => 'مدیر',
                'back-btn' => 'بازگشت',
                'general'  => 'عمومی',
                'label'    => 'برچسب',
                'product'  => 'محصول',
                'save-btn' => 'ذخیره دلیل',
                'seller'   => 'فروشنده',
                'status'   => 'وضعیت',
                'title'    => 'ویرایش دلیل',
                'type'     => 'نوع',
            ],

            'create-success' => 'دلیل پرچم با موفقیت ایجاد شد.',
            'update-success' => 'دلیل پرچم با موفقیت به‌روزرسانی شد.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'تعیین دسته‌بندی',
                'create-success' => 'دسته‌بندی با موفقیت تعیین شد.',
                'delete-failed'  => 'حذف دسته‌بندی ناموفق بود!',
                'delete-success' => 'دسته‌بندی با موفقیت حذف شد.',
                'title'          => 'دسته‌بندی‌های فروشنده',
                'update-success' => 'دسته‌بندی با موفقیت به‌روزرسانی شد.',

                'datagrid' => [
                    'delete' => 'حذف',
                    'edit'   => 'ویرایش',
                    'id'     => 'شناسه',
                    'name'   => 'نام',
                ],
            ],

            'create' => [
                'back-btn'      => 'بازگشت',
                'save-btn'      => 'ذخیره دسته‌بندی',
                'select-seller' => 'انتخاب فروشنده',
                'seller'        => 'فروشنده',
                'title'         => 'تعیین دسته‌بندی',
            ],

            'edit' => [
                'back-btn'   => 'بازگشت',
                'seller'     => 'فروشنده',
                'title'      => 'ویرایش دسته‌بندی',
                'update-btn' => 'به‌روزرسانی دسته‌بندی',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'نظر',
                'no-amount-remaining'  => 'مبلغی برای پرداخت باقی نمانده است!',
                'order-not-found'      => 'سفارش پیدا نشد!',
                'pay-btn'              => 'پرداخت حالا',
                'pay-to-seller'        => 'پرداخت به فروشنده',
                'payment-success'      => 'پرداخت به فروشنده با موفقیت انجام شد!',
                'something-went-wrong' => 'خطا رخ داده است!',
                'title'                => 'درخواست پرداخت',

                'datagrid' => [
                    'already-paid'          => 'قبلاً پرداخت شده',
                    'canceled'              => 'لغو شده',
                    'closed'                => 'بسته شده',
                    'completed'             => 'تکمیل شده',
                    'customer-name'         => 'نام مشتری',
                    'date'                  => 'تاریخ',
                    'email'                 => 'ایمیل',
                    'fraud'                 => 'تقلب',
                    'gross-amt'             => 'مبلغ ناخالص',
                    'id'                    => 'شناسه سفارش',
                    'invoice-pending'       => 'درخواست فاکتور',
                    'order-canceled'        => 'سفارش لغو شد',
                    'order-id'              => 'شناسه #:id',
                    'pay'                   => 'پرداخت',
                    'pending'               => 'در انتظار',
                    'pending-payment'       => 'در انتظار پرداخت',
                    'processing'            => 'در حال پردازش',
                    'refunded'              => 'بازپرداخت شده',
                    'remaining-total'       => 'مجموع باقی‌مانده',
                    'request-payment'       => 'درخواست پرداخت',
                    'seller'                => 'فروشنده',
                    'seller-total-invoiced' => 'مجموع فروشنده فاکتور شده',
                    'shop'                  => 'فروشگاه',
                    'status'                => 'وضعیت',
                    'total-paid'            => 'مجموع پرداختی',
                    'view'                  => 'مشاهده',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'مسدود کردن فروشنده',
                'block-success'        => 'فروشنده با موفقیت مسدود شد!',
                'chat-history-cleared' => 'تاریخچه چت با موفقیت پاک شد!',
                'clear-chat-history'   => 'پاک کردن تاریخچه چت',
                'exit'                 => 'خروج',
                'message-failed'       => 'ارسال پیام ناموفق بود!',
                'message-sent'         => 'پیام با موفقیت ارسال شد!',
                'no-message'           => 'هیچ پیامی یافت نشد!',
                'search'               => 'جستجو',
                'search-message'       => 'جستجوی پیام',
                'seller-blocked'       => 'شما این فروشنده را مسدود کرده‌اید. نمی‌توانید به این فروشنده پیام ارسال کنید.',
                'sellers'              => 'فروشندگان',
                'title'                => 'ارتباطات',
                'type-message'         => 'پیام خود را اینجا تایپ کنید...',
                'unblock-seller'       => 'رفع مسدودی فروشنده',
                'unblock-success'      => 'فروشنده با موفقیت رفع مسدودی شد!',
                'welcome-message'      => 'به ارتباطات بازار خوش آمدید!',

                'filters' => [
                    'all-messages'      => 'همه پیام‌ها',
                    'prev-fifteen-days' => '۱۵ روز گذشته',
                    'prev-seven-days'   => '۷ روز گذشته',
                    'prev-six-months'   => '۶ ماه گذشته',
                    'prev-thirty-days'  => '۳۰ روز گذشته',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'منابع موجودی',

                'datagrid' => [
                    'active'      => 'فعال',
                    'code'        => 'کد',
                    'id'          => 'شناسه',
                    'inactive'    => 'غیرفعال',
                    'name'        => 'نام',
                    'seller-name' => 'نام فروشنده',
                    'shop-title'  => 'عنوان فروشگاه',
                    'status'      => 'وضعیت',
                ],

                'view' => [
                    'active'         => 'فعال',
                    'address'        => 'آدرس منبع',
                    'city'           => 'شهر',
                    'code'           => 'کد',
                    'contact-email'  => 'ایمیل',
                    'contact-fax'    => 'فکس',
                    'contact-info'   => 'اطلاعات تماس',
                    'contact-name'   => 'نام',
                    'contact-number' => 'شماره تماس',
                    'country'        => 'کشور',
                    'description'    => 'توضیحات',
                    'general-info'   => 'اطلاعات عمومی',
                    'inactive'       => 'غیرفعال',
                    'latitude'       => 'عرض جغرافیایی',
                    'longitude'      => 'طول جغرافیایی',
                    'name'           => 'نام',
                    'postcode'       => 'کد پستی',
                    'priority'       => 'اولویت',
                    'seller-info'    => 'اطلاعات فروشنده',
                    'seller-name'    => 'نام فروشنده',
                    'settings'       => 'تنظیمات',
                    'shop-title'     => 'عنوان فروشگاه',
                    'state'          => 'استان',
                    'street'         => 'خیابان',
                    'title'          => 'منبع موجودی #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'نصب بسته Marketplace.',
            'migrate'     => 'در حال مهاجرت تمام جداول به پایگاه داده (مدتی طول می‌کشد)...',
            'seed'        => 'در حال افزودن داده‌ها به پایگاه داده...',
            'publish'     => 'در حال انتشار منابع و پیکربندی‌ها...',
            'cache'       => 'در حال پاک کردن کش...',
            'finish'      => 'بسته Marketplace با موفقیت نصب شد.',
        ],

        'version' => [
            'description' => 'نسخه فعلی بسته Marketplace را نشان می‌دهد.',
            'comment'     => 'نسخه Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'عزیز :customer_name',
        'dear-admin'  => 'عزیز مدیر',
        'dear-seller' => 'عزیز فروشنده',

        'seller' => [
            'registration' => [
                'date'        => 'تاریخ ثبت نام:',
                'description' => 'با خوشحالی به شما اطلاع می‌دهیم که یک ثبت نام فروشنده جدید در پلتفرم ما انجام شده است. لطفاً یک لحظه وقت بگیرید تا به فروشنده به پلتفرم ما خوش آمد بگویید.',
                'details'     => 'جزئیات در زیر آمده است:',
                'email'       => 'آدرس ایمیل:',
                'greeting'    => 'امیدوارم این پیام شما را در خوبی بیابد.',
                'name'        => 'نام فروشنده:',
                'shop'        => 'آدرس فروشگاه:',
                'subject'     => 'ثبت نام فروشنده جدید',
            ],

            'forgot-password' => [
                'description'    => 'این ایمیل را دریافت می‌کنید زیرا ما درخواست بازنشانی رمز عبور برای حساب شما دریافت کرده‌ایم.',
                'greeting'       => 'رمز عبور را فراموش کرده‌ام!',
                'reset-password' => 'بازنشانی رمز عبور',
                'subject'        => 'ایمیل بازنشانی رمز عبور',
            ],

            'welcome' => [
                'description' => 'به شما خوش آمد می‌گوییم! ما خوشحالیم که شما به عنوان یک فروشنده به خانواده ما پیوسته‌اید. حضور شما به عنوان یک فروشنده ارزش زیادی به پلتفرم ما افزوده است، و ما با اشتیاق منتظر یک همکاری موفق هستیم.',
                'greeting'    => 'خوش آمدید و از ثبت نام شما متشکریم!',
                'subject'     => 'اطلاعیه خوش آمدگویی فروشنده',
            ],

            'approval' => [
                'approved'    => 'درخواست شما برای تبدیل به فروشنده تأیید شده است.',
                'disapproved' => 'درخواست شما برای تبدیل به فروشنده رد شده است.',
                'greeting'    => 'خوش آمدید و از ثبت نام شما متشکریم!',
                'subject'     => 'اطلاعیه تأیید فروشنده',
            ],

            'update' => [
                'description' => 'پروفایل شما با موفقیت به‌روزرسانی شده است.',
                'greeting'    => 'امیدوارم این پیام شما را در خوبی بیابد.',
                'subject'     => 'اطلاعیه به‌روزرسانی پروفایل فروشنده',
            ],

            'good-bye' => [
                'description' => 'کار با شما لذت بخش بوده است و من واقعاً از حرفه‌ای بودن، اختصاص و کیفیت بالای محصولات/خدمات شما سپاسگزارم. تعهد شما به اطمینان از رضایت مشتری ملحوظ بوده و این یکی از عوامل کلیدی تجربه مثبت ما بوده است.',
                'greeting'    => 'امیدوارم این پیام شما را در خوبی بیابد.',
                'subject'     => 'اطلاعیه خداحافظی فروشنده',
            ],

            'product-approval' => [
                'approved'    => 'محصول شما :name تأیید شده است.',
                'disapproved' => 'محصول شما :name رد شده است.',
                'greeting'    => 'خوش آمدید و از ثبت‌نام شما متشکریم!',
                'subject'     => 'اطلاعیه تأیید محصول فروشنده',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'شما سفارش جدیدی با شناسه :order_id در تاریخ :created_at دارید',
                    'subject'  => 'تأیید سفارش جدید',
                    'summary'  => 'خلاصه سفارش',
                    'title'    => 'تأیید سفارش!',
                ],

                'canceled' => [
                    'greeting' => 'سفارش :order_id لغو شده است',
                    'subject'  => 'تأیید لغو سفارش',
                    'summary'  => 'خلاصه سفارش',
                    'title'    => 'لغو سفارش!',
                ],

                'billing-address'   => 'آدرس صورتحساب',
                'contact'           => 'تماس',
                'discount'          => 'تخفیف',
                'grand-total'       => 'مجموع کل',
                'name'              => 'نام',
                'payment'           => 'پرداخت',
                'price'             => 'قیمت',
                'qty'               => 'تعداد',
                'shipping'          => 'ارسال',
                'shipping-address'  => 'آدرس ارسال',
                'shipping-handling' => 'هزینه ارسال و بسته‌بندی',
                'sku'               => 'شناسه کالا',
                'subtotal'          => 'جمع کل بخشی',
                'tax'               => 'مالیات',
            ],

            'payment-request' => [
                'greeting'  => 'امیدوارم این پیام شما را خوب بیابد.',
                'paid'      => 'سلام.. شما پرداخت برای سفارش :order_id دریافت کرده‌اید.',
                'requested' => 'فروشنده :seller_name برای پرداخت سفارش :order_id درخواست شده است.',
                'subject'   => 'اطلاعیه درخواست پرداخت فروشنده',
            ],
        ],

        'contact-seller' => [
            'email'    => 'ایمیل:- :email',
            'greeting' => 'امیدوارم این پیام شما را خوب بیابد.',
            'info'     => 'سلام، :name یک سوال برای شما دارد. لطفا جزئیات زیر را بررسی کنید.',
            'query'    => 'سوال: :query',
            'subject'  => 'اطلاعیه تماس فروشنده',
            'topic'    => 'موضوع: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'سلام، ":name" مشکلی را در مورد محصول فروشنده ":seller_name" محصول ":product_name" گزارش کرده است. لطفاً جزئیات زیر را بررسی کنید.',
            'greeting'   => 'امیدوارم این پیام شما را در سلامتی کامل بیابد.',
            'reason'     => 'دلیل:- :reason',
            'seller-msg' => 'سلام، ":name" مشکلی را در مورد محصول شما ":product_name" گزارش کرده است. لطفاً جزئیات زیر را بررسی کنید.',
            'subject'    => 'اطلاعیه گزارش محصول',
        ],

        'report-seller' => [
            'admin-msg'  => 'سلام، :name یک مشکل در مورد :seller_name گزارش داده است. لطفا جزئیات زیر را بررسی کنید.',
            'greeting'   => 'امیدوارم این پیام شما را خوب بیابد.',
            'reason'     => 'دلیل: :reason',
            'seller-msg' => 'سلام، :name یک مشکل در مورد شما گزارش داده است. لطفا جزئیات زیر را بررسی کنید.',
            'subject'    => 'اطلاعیه گزارش فروشنده',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'ایجاد حساب فروشنده Velocity',
            'banner-description'  => 'Velocity می‌تواند یک پلتفرم عالی برای فروش محصولات شما به کسب‌وکارهای جدید در هند باشد. با دنبال کردن این نکات، می‌توانید خود را برای موفقیت به عنوان یک فروشنده Velocity آماده کنید!',
            'banner-btn-title'    => 'باز کردن فروشگاه',
            'feature-title'       => 'چرا فروشندگان دوست دارند در Velocity بفروشند؟',
            'feature-description' => 'فروشندگان پلتفرم‌های با سرعت بالا را دوست دارند زیرا این پلتفرم‌ها امکان فروش بیشتر، نمایش بهتر و تجربه فروش کارآمدتری را فراهم می‌کنند که می‌تواند به رشد و موفقیت کسب‌وکار کمک کند.',
            'feature-box1-title'  => 'فرصت‌های فروش بیشتر',
            'feature-box1-desc'   => 'فروشندگان پلتفرم‌های با سرعت بالا را دوست دارند زیرا این پلتفرم‌ها امکان فروش بیشتر، نمایش بهتر و تجربه فروش کارآمدتری را فراهم می‌کنند که می‌تواند به رشد و موفقیت کسب‌وکار کمک کند.',
            'feature-box2-title'  => 'چرخش سریع‌تر',
            'feature-box2-desc'   => 'محصولات در پلتفرم‌های با سرعت بالا سریع‌تر به فروش می‌رسند، که منجر به چرخش سریع‌تر موجودی و تولید درآمد برای فروشندگان می‌شود.',
            'feature-box3-title'  => 'نمایش بیشتر',
            'feature-box3-desc'   => 'این پلتفرم‌ها نمایش و نمایش بیشتری برای محصولات فروشنده فراهم می‌کنند، که منجر به بازدیدها و فروش‌های بیشتری می‌شود.',
            'feature-box4-title'  => 'کارایی و راحتی',
            'feature-box4-desc'   => 'پلتفرم‌های با سرعت بالا اغلب دارای فرآیندها و ابزارهای ساده‌تری هستند که فروش را کارآمدتر می‌کنند و به فروشندگان در مدیریت کسب‌وکار آنلاین خود زمان و تلاش صرفه‌جویی می‌کنند.',
            'journey-title'       => 'سفر خود را در Velocity شروع کنید',
            'journey-description' => 'با مشتریان بزرگ در سراسر جهان، شبانه روز فروش کنید.',
            'journey-step1-title' => 'فروشنده شوید',
            'journey-step1-desc'  => 'فروشگاه خود را با تمام اطلاعات پایه راه‌اندازی کنید.',
            'journey-step2-title' => 'لیست محصولات',
            'journey-step2-desc'  => 'محصولات را در فروشگاه برای مشاهده و خرید مشتریان لیست کنید.',
            'journey-step3-title' => 'دریافت سفارش',
            'journey-step3-desc'  => 'سفارشات را از طیف گسترده‌ای از مشتریان در سراسر جهان دریافت کنید.',
            'journey-step4-title' => 'تحویل محصول',
            'journey-step4-desc'  => 'پس از تحویل محصول و دریافت پرداخت',
            'journey-step5-title' => 'پرداخت',
            'journey-step5-desc'  => 'درخواست پرداخت، دریافت پرداخت پس از کسر کمیسیون.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'محصول آسیب‌دیده',
            'damaged-product-sold'      => 'محصول آسیب‌دیده فروخته شده توسط فروشنده',
            'duplicate-product'         => 'محصول تکراری',
            'duplicate-product-sold'    => 'محصول تکراری فروخته شده توسط فروشنده',
            'missing-product-parts'     => 'قسمت‌های محصول مفقود شده',
            'over-price-product'        => 'محصول گران‌قیمت',
            'over-price-product-sold'   => 'محصول گران‌قیمت فروخته شده توسط فروشنده',
            'poor-product-quality'      => 'کیفیت پایین محصول',
            'poor-product-quality-sold' => 'کیفیت پایین محصول فروخته شده توسط فروشنده',
            'receive-wrong-product'     => 'دریافت محصول اشتباه',
            'wrong-product-sold'        => 'محصول اشتباه فروخته شده توسط فروشنده',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'دانلود',
                    'export'     => 'صادرات',
                    'no-records' => 'چیزی برای صادر کردن وجود ندارد',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'صفحه اصلی',
                    'logout'     => 'خروج',
                    'my-profile' => 'پروفایل من',
                    'visit-shop' => 'بازدید از فروشگاه',

                    'mega-search' => [
                        'customers'                       => 'مشتریان',
                        'explore-all-customers'           => 'کاوش در تمام مشتریان',
                        'explore-all-matching-customers'  => 'کاوش در تمام مشتریان مطابق با “:query” (:count)',
                        'explore-all-matching-orders'     => 'کاوش در تمام سفارش‌ها مطابق با “:query” (:count)',
                        'explore-all-matching-products'   => 'کاوش در تمام محصولات مطابق با “:query” (:count)',
                        'explore-all-orders'              => 'کاوش در تمام سفارش‌ها',
                        'explore-all-products'            => 'کاوش در تمام محصولات',
                        'orders'                          => 'سفارش‌ها',
                        'products'                        => 'محصولات',
                        'sku'                             => 'شناسه SKU: :sku',
                        'title'                           => 'جستجوی مگا',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'جمع کردن',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'افزودن تصویر',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'فقط فایل‌های تصویر (.jpeg, .jpg, .png, ..) مجاز هستند.',
                ],

                'videos' => [
                    'add-video-btn'     => 'افزودن ویدئو',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'فقط فایل‌های ویدئویی (.mp4, .mov, .ogg ..) مجاز هستند.',
                ],

                'documents' => [
                    'add-document-btn'  => 'افزودن سند',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'فقط فایل‌های اسناد (:types ..) مجاز هستند.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'جلو',
                    'next'       => 'بعدی',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'پاورپوینت',
                    'size'       => 'اندازه',
                    'text'       => 'متن',
                    'use-cases'  => 'موارد استفاده',
                    'word'       => 'Word',
                    'zoom'       => 'بزرگ‌نمایی',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'رزروها',
            'communication'     => 'ارتباطات',
            'customers'         => 'مشتریان',
            'dashboard'         => 'داشبورد',
            'extensions'        => 'افزونه‌ها',
            'general'           => 'عمومی',
            'inventory-sources' => 'منابع موجودی',
            'manage-profile'    => 'مدیریت پروفایل',
            'orders'            => 'سفارشات',
            'product-reviews'   => 'نقد و بررسی محصولات',
            'products'          => 'محصولات',
            'reporting'         => 'گزارش‌دهی',
            'roles'             => 'نقش‌ها',
            'sales'             => 'فروش',
            'seller-reviews'    => 'نقد و بررسی فروشنده',
            'settings'          => 'تنظیمات',
            'transaction'       => 'تراکنش',
            'users'             => 'کاربران',
        ],

        'acl' => [
            'assign'            => 'اختصاص دادن',
            'bookings'          => 'رزروها',
            'cancel'            => 'لغو',
            'communication'     => 'ارتباطات',
            'create'            => 'ایجاد کردن',
            'customers'         => 'مشتریان',
            'dashboard'         => 'داشبورد',
            'delete'            => 'حذف',
            'edit'              => 'ویرایش',
            'extensions'        => 'افزونه‌ها',
            'general'           => 'عمومی',
            'inventory-sources' => 'منابع موجودی',
            'invoice'           => 'فاکتور',
            'orders'            => 'سفارشات',
            'payment-request'   => 'درخواست پرداخت',
            'print'             => 'چاپ',
            'print-invoice'     => 'چاپ فاکتور',
            'product-reviews'   => 'بررسی محصولات',
            'products'          => 'محصولات',
            'reporting'         => 'گزارش‌دهی',
            'sales'             => 'فروش',
            'seller-reviews'    => 'نقد فروشنده',
            'settings'          => 'تنظیمات',
            'shipment'          => 'حمل و نقل',
            'transactions'      => 'تراکنش‌ها',
            'view'              => 'مشاهده',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'افزودن محصول جدید',
            'assign'            => 'اختصاص',
            'bookings'          => 'رزروها',
            'communication'     => 'ارتباطات',
            'create'            => 'ایجاد',
            'customers'         => 'مشتریان',
            'dashboard'         => 'داشبورد',
            'edit'              => 'ویرایش',
            'extensions'        => 'افزونه‌ها',
            'general'           => 'عمومی',
            'inventory-sources' => 'منابع موجودی',
            'manage-profile'    => 'مدیریت پروفایل',
            'orders'            => 'سفارشات',
            'product-reviews'   => 'نقد و بررسی محصولات',
            'products'          => 'محصولات',
            'reporting'         => 'گزارش‌دهی',
            'roles'             => 'نقش‌ها',
            'sales'             => 'فروش',
            'seller-reviews'    => 'نقد و بررسی فروشنده',
            'settings'          => 'تنظیمات',
            'title'             => 'پروفایل',
            'transaction'       => 'تراکنش',
            'users'             => 'کاربران',
            'view'              => 'مشاهده',
        ],

        'login' => [
            'bagisto'             => 'باگیستو',
            'button-title'        => 'ورود',
            'create-your-account' => 'حساب کاربری خود را بسازید',
            'email'               => 'ایمیل',
            'footer'              => '© حق کپی‌رایت 2010 - :current_year، نرم‌افزار وب‌کول (ثبت‌شده در هند). همه حقوق محفوظ است.',
            'forgot-pass'         => 'رمز عبور را فراموش کرده‌اید؟',
            'form-login-text'     => 'اگر حساب کاربری دارید، با آدرس ایمیل خود وارد شوید.',
            'invalid-credentials' => 'لطفاً اعتبارنامه‌های خود را بررسی کرده و دوباره تلاش کنید.',
            'new-seller'          => 'فروشنده جدید؟',
            'not-approved'        => 'درخواست فعال‌سازی شما در انتظار تأیید ادمین است',
            'page-title'          => 'ورود فروشنده',
            'password'            => 'رمز عبور',
            'show-password'       => 'نمایش رمز عبور',
            'suspended-message'   => 'حساب شما تعلیق شده است. برای هرگونه سوال با مدیر تماس بگیرید.',
            'title'               => 'ورود',
        ],

        'signup' => [
            'account-exists'   => 'قبلاً حساب کاربری دارید؟',
            'bagisto'          => 'باگیستو',
            'button-title'     => 'ثبت نام',
            'confirm-pass'     => 'تأیید رمز عبور',
            'email'            => 'ایمیل',
            'footer'           => '© حق کپی‌رایت 2010 - :current_year، نرم‌افزار وب‌کول (ثبت‌شده در هند). همه حقوق محفوظ است.',
            'form-signup-text' => 'اگر برای اولین بار به فروشگاه ما می‌آیید، خوشحال می‌شویم که شما را به عنوان عضو خوش‌آمد می‌گوئیم.',
            'name'             => 'نام',
            'page-title'       => 'تبدیل به فروشنده',
            'password'         => 'رمز عبور',
            'sign-in-button'   => 'ورود',
            'success'          => 'حساب با موفقیت ایجاد شد.',
            'url'              => 'آدرس فروشگاه',
        ],

        'forgot-password' => [
            'already-sent'         => 'ما قبلاً لینک بازنشانی رمز عبور را به ایمیل شما ارسال کرده‌ایم.',
            'back'                 => 'بازگشت به ورود؟',
            'bagisto'              => 'باگیستو',
            'email'                => 'ایمیل',
            'email-not-exist'      => 'ما نمی‌توانیم کاربری با آن آدرس ایمیل پیدا کنیم.',
            'footer'               => '© حق کپی‌رایت 2010 - :current_year، نرم‌افزار وب‌کول (ثبت‌شده در هند). همه حقوق محفوظ است.',
            'forgot-password-text' => 'اگر رمز عبور خود را فراموش کرده‌اید، آن را با وارد کردن آدرس ایمیل خود بازیابی کنید.',
            'page-title'           => 'رمز عبور خود را فراموش کرده‌اید؟',
            'reset-link-sent'      => 'ما لینک بازیابی رمز عبور شما را ارسال کردیم.',
            'sign-in-button'       => 'ورود',
            'submit'               => 'بازنشانی رمز عبور',
            'title'                => 'بازیابی رمز عبور',
        ],

        'reset-password' => [
            'back-link-title'  => 'بازگشت به ورود',
            'bagisto'          => 'باگیستو',
            'confirm-password' => 'تأیید رمز عبور',
            'email'            => 'ایمیل ثبت‌شده',
            'footer'           => '© حق کپی‌رایت 2010 - :current_year، نرم‌افزار وب‌کول (ثبت‌شده در هند). همه حقوق محفوظ است.',
            'password'         => 'رمز عبور',
            'submit-btn-title' => 'بازنشانی رمز عبور',
            'title'            => 'بازنشانی رمز عبور',
        ],

        'dashboard' => [
            'add-product'           => 'افزودن محصول',
            'avg-order-sell'        => 'میانگین فروش هر سفارش',
            'category-info'         => 'هیچ دسته‌ای برای بازه زمانی انتخاب شده یافت نشد',
            'complete-profile-link' => 'پروفایل خود را تکمیل کنید &rarr;',
            'completed-orders'      => 'تکمیل شده (:count)',
            'customer-info'         => 'هیچ مشتری برای بازه زمانی انتخاب شده یافت نشد',
            'date-range'            => 'بازه زمانی',
            'empty-threshold'       => 'حد نصاب خالی',
            'empty-threshold-desc'  => 'هیچ محصولی موجود نیست',
            'end-date'              => 'تاریخ پایان',
            'hi-comment'            => 'سریعاً نگاهی به وضعیت فروشگاهتان بیندازید.',
            'hi-seller'             => 'سلام! :seller_name',
            'month'                 => 'این ماه',
            'no-category'           => 'هیچ داده‌ای موجود نیست',
            'no-customer'           => 'هیچ داده‌ای موجود نیست',
            'no-record-available'   => 'هیچ رکوردی موجود نیست.',
            'order-count'           => ':total سفارش',
            'overall-details'       => 'جزئیات کلی',
            'pending-orders'        => 'در انتظار (:count)',
            'per-unit'              => ':price/واحد',
            'processing-orders'     => 'در حال پردازش (:count)',
            'product-info'          => 'افزودن محصولات مرتبط در حین حرکت',
            'profile-score'         => 'امتیاز پروفایل',
            'profile-score-desc'    => 'با کامل نگه داشتن اطلاعات پروفایل خود، دید خود را به حداکثر برسانید.',
            'qty-stock'             => ':qty موجودی',
            'refunded-orders'       => 'بازگشتی (:count)',
            'remaining-payout'      => 'مانده پرداختی',
            'start-date'            => 'تاریخ شروع',
            'stock-threshold'       => 'حد نصاب موجودی',
            'title'                 => 'داشبورد',
            'today'                 => 'امروز',
            'top-categories'        => 'برترین دسته‌ها',
            'top-customers'         => 'مشتری با بیشترین فروش',
            'top-products'          => 'محصولات پرفروش',
            'total-customers'       => 'کل مشتریان',
            'total-orders'          => 'کل سفارشات',
            'total-payout'          => 'کل پرداختی',
            'total-sale'            => 'فروش کل: :total',
            'total-sales'           => 'مجموع فروش',
            'view-all-btn'          => 'مشاهده همه',
            'visitor-count'         => 'تعداد بازدیدکننده - :count',
            'week'                  => 'این هفته',
            'year'                  => 'امسال',
        ],

        'orders' => [
            'index' => [
                'title' => 'سفارشات',

                'datagrid' => [
                    'canceled'        => 'لغو شده',
                    'closed'          => 'بسته شده',
                    'commission'      => 'کمیسیون',
                    'completed'       => 'تکمیل شده',
                    'customer'        => 'مشتری',
                    'date'            => 'تاریخ',
                    'discount'        => 'تخفیف',
                    'email'           => 'ایمیل',
                    'fraud'           => 'تقلب',
                    'gross-amt'       => 'مبلغ خالص',
                    'id'              => 'شناسه',
                    'invoice-pending' => 'فاکتور در انتظار',
                    'items'           => 'محصولات',
                    'location'        => 'مکان',
                    'order-id'        => 'شناسه - #:id',
                    'paid'            => 'پرداخت شده',
                    'payment'         => 'پرداخت',
                    'payment-request' => 'درخواست پرداخت',
                    'pending'         => 'در انتظار',
                    'pending-payment' => 'در انتظار پرداخت',
                    'processing'      => 'در حال پردازش',
                    'refunded'        => 'بازپرداخت شده',
                    'requested'       => 'درخواست شده',
                    'seller-earn'     => 'درآمد فروشنده',
                    'shipment'        => 'حمل و نقل',
                    'status'          => 'وضعیت',
                    'transaction'     => 'تراکنش',
                    'view'            => 'مشاهده',
                ],

                'payment-req-success'  => 'درخواست پرداخت شما با موفقیت ثبت شده است',
                'something-went-wrong' => 'مشکلی پیش آمد! لطفاً دوباره تلاش کنید.',
            ],

            'view' => [
                'admin-commission'           => 'کمیسیون مدیر',
                'billing-address'            => 'آدرس صورتحساب',
                'by-customer'                => 'توسط مشتری - :name',
                'cancel-btn'                 => 'لغو',
                'cancel-confirm-msg'         => 'آیا از لغو این سفارش اطمینان دارید؟',
                'cancel-error-msg'           => 'سفارش قابل لغو نیست',
                'cancel-success-msg'         => 'سفارش با موفقیت لغو شد',
                'canceled'                   => 'لغو شده',
                'closed'                     => 'بسته شده',
                'completed'                  => 'تکمیل شده',
                'discount'                   => 'تخفیف',
                'fraud'                      => 'تقلب',
                'grand-total'                => 'جمع کل نهایی',
                'info'                       => 'اطلاعات',
                'item-canceled'              => 'تعداد لغو شده (:qty_canceled)',
                'item-invoice'               => 'تعداد صورتحساب (:qty_invoiced)',
                'item-ordered'               => 'تعداد سفارش داده شده (:qty_ordered)',
                'item-refunded'              => 'تعداد بازپرداخت شده (:qty_refunded)',
                'item-shipped'               => 'تعداد ارسال شده (:qty_shipped)',
                'item-status'                => 'وضعیت محصول',
                'payment-method'             => 'روش پرداخت',
                'pending'                    => 'در انتظار',
                'pending_payment'            => 'در انتظار پرداخت',
                'permission-error'           => 'شما اجازه لغو سفارش را ندارید',
                'place-on'                   => 'ثبت در تاریخ : :date',
                'price'                      => 'قیمت',
                'price-excl-tax'             => 'قیمت (بدون مالیات)',
                'price-incl-tax'             => 'قیمت (با مالیات)',
                'processing'                 => 'در حال پردازش',
                'product'                    => 'محصول',
                'shipping-address'           => 'آدرس حمل و نقل',
                'shipping-handling'          => 'هزینه حمل و نقل',
                'shipping-handling-excl-tax' => 'هزینه ارسال و بسته‌بندی (بدون مالیات)',
                'shipping-handling-incl-tax' => 'هزینه ارسال و بسته‌بندی (با مالیات)',
                'shipping-method'            => 'روش حمل و نقل',
                'sku'                        => 'شناسه SKU - :sku',
                'sub-total'                  => 'جمع جزئیات',
                'sub-total-excl-tax'         => 'جمع کل (بدون مالیات)',
                'sub-total-incl-tax'         => 'جمع کل (با مالیات)',
                'tax'                        => 'مالیات',
                'tax-amount'                 => 'مبلغ مالیات',
                'tax-percent'                => 'درصد مالیات',
                'title'                      => 'سفارش #:order_id',
                'total'                      => 'جمع کل',
                'total-due'                  => 'مجموع مبلغ باقیمانده',
                'total-paid'                 => 'مجموع پرداختی',
                'total-refunded'             => 'مجموع بازپرداختی',
                'total-seller-amt'           => 'مجموع مبلغ فروشنده',

                'invoices' => [
                    'bank-details'               => 'جزئیات بانکی',
                    'bill-to'                    => 'صورتحساب به',
                    'contact'                    => 'تماس',
                    'contact-number'             => 'شماره تماس',
                    'created-on'                 => 'ایجاد شده در: :date_time',
                    'date'                       => 'تاریخ فاکتور',
                    'discount'                   => 'تخفیف',
                    'excl-tax'                   => 'بدون مالیات:',
                    'grand-total'                => 'جمع کل',
                    'individual-invoice'         => 'فاکتور #:invoice_id',
                    'invoice'                    => 'فاکتور',
                    'invoice-id'                 => 'شناسه فاکتور',
                    'name'                       => 'نام',
                    'order-date'                 => 'تاریخ سفارش',
                    'order-id'                   => 'شناسه سفارش',
                    'payment-method'             => 'روش پرداخت',
                    'payment-terms'              => 'شرایط پرداخت',
                    'price'                      => 'قیمت',
                    'print'                      => 'چاپ',
                    'product-name'               => 'نام محصول',
                    'qty'                        => 'تعداد',
                    'ship-to'                    => 'ارسال به',
                    'shipping-handling'          => 'حمل و نقل و بسته‌بندی',
                    'shipping-handling-excl-tax' => 'حمل و نقل و بسته‌بندی (بدون مالیات)',
                    'shipping-handling-incl-tax' => 'حمل و نقل و بسته‌بندی (با مالیات)',
                    'shipping-method'            => 'روش حمل و نقل',
                    'sku'                        => 'شناسه SKU - :sku',
                    'subtotal'                   => 'جمع جزئی',
                    'sub-total-excl-tax'         => 'جمع کل (بدون مالیات)',
                    'sub-total-incl-tax'         => 'جمع کل (با مالیات)',
                    'tax'                        => 'مالیات',
                    'tax-amount'                 => 'مبلغ مالیات',
                    'title'                      => 'فاکتورها',
                    'vat-number'                 => 'شماره مالیات بر ارزش افزوده',
                ],

                'shipments' => [
                    'carrier-title'       => 'عنوان حامل',
                    'created-on'          => 'ایجاد شده در تاریخ :date_time',
                    'individual-shipment' => 'حمل و نقل #:track_number',
                    'inventory-source'    => 'منبع موجودی',
                    'name'                => 'نام',
                    'qty'                 => 'تعداد',
                    'sku'                 => 'شناسه SKU - :sku',
                    'title'               => 'حمل و نقل',
                    'tracking-number'     => 'شماره پیگیری',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'هزینه تنظیمی',
                    'adjustment-refund'          => 'بازپرداخت تنظیمی',
                    'created-on'                 => 'ایجاد شده در تاریخ :date_time',
                    'discount'                   => 'تخفیف',
                    'grand-total'                => 'مجموع کل',
                    'individual-refund'          => 'بازپرداخت #:refund_id',
                    'no-result-found'            => 'ما هیچ رکوردی پیدا نکردیم.',
                    'price'                      => 'قیمت',
                    'product-name'               => 'نام',
                    'qty'                        => 'تعداد',
                    'shipping-handling'          => 'هزینه ارسال و بسته‌بندی',
                    'shipping-handling-excl-tax' => 'هزینه ارسال و بسته‌بندی (بدون مالیات)',
                    'shipping-handling-incl-tax' => 'هزینه ارسال و بسته‌بندی (با مالیات)',
                    'sku'                        => 'شناسه SKU - :sku',
                    'sub-total-excl-tax'         => 'جمع کل (بدون مالیات)',
                    'sub-total-incl-tax'         => 'جمع کل (با مالیات)',
                    'subtotal'                   => 'جمع جزئی',
                    'tax'                        => 'مالیات',
                    'tax-amount'                 => 'مبلغ مالیات',
                    'title'                      => 'بازپرداخت‌ها',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'فاکتور',
                'invoice-success'  => 'فاکتور با موفقیت ایجاد شد',
                'permission-error' => 'شما اجازه ایجاد فاکتور سفارش را ندارید',
                'price'            => 'قیمت',
                'product-name'     => 'نام محصول',
                'qty'              => 'تعداد',
                'qty-error'        => 'تعداد درخواستی در دسترس نیست',
                'sub-total'        => 'جمع جزئیات',
                'title'            => 'ایجاد فاکتور',
                'total'            => 'جمع کل',
            ],

            'shipments' => [
                'avl-qty'          => 'موجود - :qty تعداد',
                'carrier-title'    => 'عنوان حامل',
                'create-btn'       => 'حمل و نقل',
                'ordered-qty'      => 'تعداد سفارش داده شده',
                'permission-error' => 'شما اجازه ایجاد حمل و نقل سفارش را ندارید',
                'product-name'     => 'نام محصول',
                'qty'              => 'تعداد',
                'qty-error'        => 'تعداد درخواستی در دسترس نیست',
                'shipment-success' => 'حمل و نقل با موفقیت ایجاد شد',
                'shipped-qty'      => 'تعداد ارسال شده',
                'sku'              => 'شناسه SKU - :sku',
                'source'           => 'منبع محصول سفارش داده شده',
                'title'            => 'ایجاد حمل و نقل',
                'tracking-id'      => 'شناسه پیگیری',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'تاریخ ایجاد',
                    'from'         => 'از',
                    'id'           => 'شناسه',
                    'order-id'     => 'شناسه سفارش',
                    'qty'          => 'تعداد',
                    'to'           => 'تا',
                    'view'         => 'مشاهده',
                ],

                'title'    => 'رزروها',
            ],

            'calendar' => [
                'booking-date'     => 'تاریخ رزرو',
                'booking-details'  => 'جزئیات رزرو',
                'canceled'         => 'لغو شده',
                'closed'           => 'بسته شده',
                'done'             => 'انجام شده',
                'order-id'         => 'شناسه سفارش',
                'pending'          => 'در انتظار',
                'price'            => 'قیمت',
                'status'           => 'وضعیت',
                'time-slot'        => 'بازه زمانی:',
                'view-details'     => 'مشاهده جزئیات',
            ],

            'title' => 'محصولات رزرو',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'مانده پرداخت',
                'title'                  => 'تراکنش‌ها',
                'total-payout'           => 'مجموع پرداخت',
                'total-seller-sale'      => 'کل فروش (فروشنده)',
                'total-admin-commission' => 'کل کمیسیون (مدیر)',
                'total-sale-invoiced'    => 'کل فروش (صورتحساب)',

                'datagrid' => [
                    'comment'          => 'نظر',
                    'id'               => 'شناسه',
                    'total'            => 'مجموع',
                    'transaction-id'   => 'شناسه تراکنش',
                ],
            ],

            'view' => [
                'commission'        => 'کمیسیون',
                'created-on'        => 'ایجاد شده در :date',
                'date'              => 'تاریخ',
                'id'                => 'شناسه تراکنش',
                'method'            => 'روش',
                'name'              => 'نام',
                'payment-method'    => ':method پرداخت',
                'price'             => 'قیمت',
                'print'             => 'چاپ',
                'qty'               => 'تعداد',
                'seller-total'      => 'مجموع فروشنده',
                'shipping-handling' => 'هزینه حمل و نقل',
                'subtotal'          => 'جمع کل جزئیات',
                'tax'               => 'مالیات',
                'title'             => 'تراکنش',
                'total'             => 'جمع',
                'transaction-id'    => 'شماره تراکنش: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'افزودن محصول جدید',
                'title'             => 'محصولات',

                'datagrid' => [
                    'active'         => 'فعال',
                    'approved'       => 'تأیید شده',
                    'category'       => 'دسته بندی',
                    'delete'         => 'حذف',
                    'disable'        => 'غیرفعال',
                    'disapproved'    => 'تایید نشده',
                    'edit'           => 'ویرایش',
                    'id'             => 'شناسه',
                    'image'          => 'تصویر',
                    'is-approved'    => 'تأیید شده',
                    'name'           => 'نام',
                    'out-of-stock'   => 'تمام شده',
                    'price'          => 'قیمت',
                    'product-number' => 'شماره محصول',
                    'product_id'     => 'شناسه - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'وضعیت',
                    'stock'          => 'موجودی',
                    'total-quantity' => ':quantity موجود',
                    'type'           => 'نوع',
                ],
            ],

            'create' => [
                'attribute-family'          => 'فامیل صفات',
                'back'                      => 'بازگشت',
                'continue'                  => 'ادامه',
                'create-new-product'        => 'ایجاد محصول جدید',
                'create-your-new-product'   => 'اگر محصول وجود ندارد، محصول جدید خود را ایجاد کنید',
                'disable-product-message'   => 'مدیر قابلیت ایجاد یا اختصاص محصولات را غیرفعال کرده است.',
                'image-placeholder'         => 'تصویر شما',
                'no-result'                 => 'نتیجه ای یافت نشد',
                'not-allowed'               => 'شما مجاز به ایجاد محصول نیستید',
                'or'                        => 'یا',
                'product-type'              => 'نوع محصول',
                'search-product'            => 'جستجوی محصولات',
                'sell-admin-product-prices' => 'فروش محصول مدیر با قیمت شما.',
                'sell-as-yours'             => 'فروش به عنوان محصول شما',
                'sku'                       => 'SKU',
                'sub-title'                 => 'شما می‌توانید محصول را به دو روش اضافه کنید، یا از محصولات موجود مدیریت محصول خود استفاده کنید یا محصول جدید خود را ایجاد کنید.',
                'title'                     => 'افزودن محصول جدید',
                'update-profile'            => 'لطفاً جزئیات پروفایل خود را به‌روز کنید',
            ],

            'edit' => [
                'back-btn'      => 'بازگشت',
                'preview'       => 'پیش‌نمایش',
                'remove'        => 'حذف',
                'save-btn'      => 'ذخیره محصول',
                'title'         => 'ویرایش محصول',
                'channels'      => 'کانال‌ها',
                'progress-info' => 'جذابیت محصول خود را افزایش دهید و با اطمینان از کامل و دقیق بودن تمام جزئیات محصول، تأثیر ماندگاری بر مشتریان بگذارید!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'افزودن قیمت گروهی',
                        'all-groups'                => 'تمام گروه‌ها',
                        'create-btn'                => 'افزودن جدید',
                        'discount-group-price-info' => 'برای :qty تعداد با تخفیف :price',
                        'edit-btn'                  => 'ویرایش',
                        'empty-info'                => 'قیمت‌گذاری ویژه برای مشتریان تعلق گرفته به گروه‌های خاص.',
                        'fixed-group-price-info'    => 'برای تعداد :qty با قیمت ثابت :price',
                        'title'                     => 'قیمت گروه مشتری',

                        'create' => [
                            'all-groups'     => 'تمام گروه‌ها',
                            'create-title'   => 'ایجاد قیمت گروه مشتری',
                            'customer-group' => 'گروه مشتری',
                            'delete-btn'     => 'حذف',
                            'discount'       => 'تخفیف',
                            'fixed'          => 'ثابت',
                            'price'          => 'قیمت',
                            'price-type'     => 'نوع قیمت',
                            'qty'            => 'تعداد',
                            'save-btn'       => 'ذخیره',
                            'update-title'   => 'بروزرسانی قیمت گروه مشتری',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'موجودی در حال انتظار برای تعداد سفارشی: :qty',
                    'pending-ordered-qty-info' => 'تعداد در حال انتظار برای تعداد محصول سفارشی پس از ارسال از منبع موجودی مربوطه کم می‌شود. در صورت لغو، تعداد در حال انتظار برای فروش در دسترس خواهد بود.',
                    'title'                    => 'موجودی‌ها',
                ],

                'categories' => [
                    'title' => 'دسته‌بندی‌ها',
                ],

                'images' => [
                    'info'  => 'رزولوشن تصویر باید مانند 609x560 پیکسل باشد.',
                    'title' => 'تصاویر',
                ],

                'videos' => [
                    'error' => 'ویدیو نباید بیشتر از :max کیلوبایت باشد. لطفاً یک فایل کوچکتر انتخاب کنید.',
                    'info'  => 'حداکثر اندازه ویدیو باید مانند :size باشد.',
                    'title' => 'ویدیوها',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'محصولات مرتبط را به طور پویا اضافه کنید.',
                        'info'       => 'علاوه بر محصول مشتری مشاهده‌کننده، محصولات مرتبط به او ارائه می‌شود.',
                        'title'      => 'محصولات مرتبط',
                    ],

                    'up-sells' => [
                        'empty-info' => 'محصولات فروش بالا را به طور پویا اضافه کنید.',
                        'info'       => 'مشتری محصولات فروش بالا را مشاهده می‌کند که به عنوان جایگزین پرمیوم یا با کیفیت‌تری برای محصولی که در حال مشاهده است عرضه می‌شود.',
                        'title'      => 'محصولات فروش بالا',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'محصولات فروش متقابل را به طور پویا اضافه کنید.',
                        'info'       => 'نزدیک به سبد خرید، شما محصولات خرید سریع متمم را به عنوان محصولات فروش متقابل می‌یابید تا به تکمیل مواردی که از پیش به سبد خرید خود اضافه شده‌اند کمک کند.',
                        'title'      => 'محصولات فروش متقابل',
                    ],

                    'add-btn'           => 'افزودن محصول',
                    'delete'            => 'حذف',
                    'empty-info'        => 'برای افزودن محصولات :type به طور پویا.',
                    'empty-title'       => 'افزودن محصول',
                    'image-placeholder' => 'تصویر محصول',
                    'sku'               => 'شناسه SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'افزودن گزینه',
                            'empty-info'        => 'برای ایجاد گزینه‌های سفارشی‌سازی به سرعت.',
                            'empty-title'       => 'افزودن گزینه',
                            'info'              => 'این محصول ساده را سفارشی می‌کند.',
                            'title'             => 'آیتم قابل سفارشی‌سازی',

                            'update-create' => [
                                'is-required'               => 'الزامی است',
                                'max-characters'            => 'حداکثر کاراکتر',
                                'name'                      => 'عنوان',
                                'no'                        => 'خیر',
                                'price'                     => 'قیمت',
                                'save-btn'                  => 'ذخیره',
                                'supported-file-extensions' => 'پسوند فایل‌های پشتیبانی‌شده',
                                'title'                     => 'گزینه',
                                'type'                      => 'نوع',
                                'yes'                       => 'بله',
                            ],

                            'option' => [
                                'add-btn'     => 'افزودن گزینه',
                                'delete'      => 'حذف',
                                'delete-btn'  => 'حذف',
                                'edit-btn'    => 'ویرایش',
                                'empty-info'  => 'برای ایجاد ترکیب‌های مختلف محصول به سرعت.',
                                'empty-title' => 'افزودن گزینه',

                                'types' => [
                                    'text' => [
                                        'title' => 'متن',
                                    ],

                                    'textarea' => [
                                        'title' => 'منطقه متن',
                                    ],

                                    'checkbox' => [
                                        'title' => 'چک‌باکس',
                                    ],

                                    'radio' => [
                                        'title' => 'رادیو',
                                    ],

                                    'select' => [
                                        'title' => 'انتخاب',
                                    ],

                                    'multiselect' => [
                                        'title' => 'چند انتخابی',
                                    ],

                                    'date' => [
                                        'title' => 'تاریخ',
                                    ],

                                    'datetime' => [
                                        'title' => 'تاریخ و زمان',
                                    ],

                                    'time' => [
                                        'title' => 'زمان',
                                    ],

                                    'file' => [
                                        'title' => 'فایل',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'برچسب',
                                        'price'    => 'قیمت',
                                        'save-btn' => 'ذخیره',
                                        'title'    => 'گزینه',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'محصول قبلاً با یک محصول پیکربندی‌شده، گروهی یا بسته‌ای مرتبط است.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'افزودن نسخه',
                        'delete-btn'        => 'حذف',
                        'edit-btn'          => 'ویرایش',
                        'empty-info'        => 'برای ایجاد ترکیب‌های مختلف محصول به طور پویا.',
                        'empty-title'       => 'افزودن نسخه',
                        'image-placeholder' => 'تصویر محصول',
                        'info'              => 'محصولات تغییریافته بر اساس تمام ترکیب‌های ممکن ویژگی‌ها تولید می‌شوند.',
                        'qty'               => ':qty تعداد',
                        'sku'               => 'شناسه SKU - :sku',
                        'title'             => 'تغییریافته‌ها',

                        'create'  => [
                            'description'            => 'توضیحات',
                            'name'                   => 'نام',
                            'save-btn'               => 'افزودن',
                            'title'                  => 'افزودن نسخه',
                            'variant-already-exists' => 'این نسخه از پیش وجود دارد',
                        ],

                        'edit' => [
                            'disabled'         => 'غیرفعال',
                            'edit-info'        => 'اگر می‌خواهید اطلاعات محصول را به‌طور دقیق بروزرسانی کنید، به صفحه جزئیات محصول بروید',
                            'edit-link-title'  => 'صفحه جزئیات محصول',
                            'enabled'          => 'فعال',
                            'images'           => 'تصاویر',
                            'name'             => 'نام',
                            'price'            => 'قیمت',
                            'quantities'       => 'تعداد',
                            'save-btn'         => 'ذخیره',
                            'sku'              => 'شناسه SKU',
                            'status'           => 'وضعیت',
                            'title'            => 'محصول',
                            'weight'           => 'وزن',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'اضافه کردن تصاویر',
                            'apply-to-all-btn'    => 'اعمال به همه',
                            'apply-to-all-sku'    => 'اعمال قیمت به همه SKU.',
                            'edit-inventories'    => 'ویرایش موجودی‌ها',
                            'edit-prices'         => 'ویرایش قیمت‌ها',
                            'price'               => 'قیمت',
                            'remove-images'       => 'حذف تصاویر',
                            'remove-variants'     => 'حذف واریانت‌ها',
                            'select-action'       => 'انتخاب اقدام',
                            'select-variants'     => 'انتخاب واریانت‌ها',
                            'edit-name'           => 'ویرایش نام',
                            'name'                => 'نام',
                            'edit-sku'            => 'ویرایش SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'ویرایش وزن',
                            'weight'              => 'وزن',
                            'edit-status'         => 'ویرایش وضعیت',
                            'status'              => 'وضعیت',
                            'apply-to-all-name'   => 'اعمال یک نام به همه واریانت‌ها.',
                            'apply-to-all-weight' => 'اعمال یک وزن به همه واریانت‌ها.',
                            'apply-to-all-status' => 'اعمال یک وضعیت به همه واریانت‌ها.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'افزودن محصول',
                        'default-qty'       => 'تعداد پیش‌فرض',
                        'delete'            => 'حذف',
                        'empty-info'        => 'برای ایجاد ترکیب‌های مختلف محصول به طور پویا.',
                        'empty-title'       => 'افزودن محصول',
                        'image-placeholder' => 'تصویر محصول',
                        'info'              => 'محصول گروهی شامل موارد مستقلی است که به عنوان یک مجموعه ارائه می‌شود، که امکان تغییرات یا هماهنگی بر اساس فصل یا موضوع را فراهم می‌کند. هر محصول می‌تواند به صورت مستقل یا به عنوان قسمتی از گروه خریداری شود.',
                        'sku'               => 'شناسه SKU - :sku',
                        'title'             => 'محصولات گروهی',
                    ],

                    'bundle' => [
                        'add-btn'           => 'افزودن گزینه',
                        'empty-info'        => 'برای ایجاد گزینه‌های بسته به طور پویا.',
                        'empty-title'       => 'افزودن گزینه',
                        'image-placeholder' => 'تصویر محصول',
                        'info'              => 'محصول بسته یک بسته از موارد یا خدمات چندگانه است که به عنوان یک واحد به قیمت ویژه عرضه می‌شود و به مشتریان ارزش و سهولت فراهم می‌کند.',
                        'title'             => 'آیتم‌های بسته',

                        'update-create' => [
                            'checkbox'    => 'چک باکس',
                            'is-required' => 'الزامی است',
                            'multiselect' => 'چندانتخابی',
                            'name'        => 'عنوان',
                            'no'          => 'خیر',
                            'radio'       => 'رادیو',
                            'save-btn'    => 'ذخیره',
                            'select'      => 'انتخاب',
                            'title'       => 'گزینه',
                            'type'        => 'نوع',
                            'yes'         => 'بله',
                        ],

                        'option' => [
                            'add-btn'     => 'افزودن محصول',
                            'default-qty' => 'تعداد پیش‌فرض',
                            'delete'      => 'حذف',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'ویرایش',
                            'empty-info'  => 'برای ایجاد ترکیب‌های مختلف محصول به طور پویا.',
                            'empty-title' => 'افزودن محصول',
                            'sku'         => 'شناسه SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'محصول پیش‌فرض را با استفاده از چک باکس تعیین کنید',
                                    'title' => 'چک باکس',
                                ],

                                'multiselect' => [
                                    'info'  => 'محصول پیش‌فرض را با استفاده از دکمه چک باکس تعیین کنید',
                                    'title' => 'چندانتخابی',
                                ],

                                'radio' => [
                                    'info'  => 'محصول پیش‌فرض را با استفاده از دکمه رادیو تعیین کنید',
                                    'title' => 'رادیو',
                                ],

                                'select' => [
                                    'info'  => 'محصول پیش‌فرض را با استفاده از دکمه رادیو تعیین کنید',
                                    'title' => 'انتخاب',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'در دسترس از',
                        'available-to'   => 'در دسترس تا',
                        'location'       => 'موقعیت',
                        'qty'            => 'تعداد',
                        'title'          => 'نوع رزرو',

                        'available-every-week' => [
                            'no'    => 'خیر',
                            'title' => 'در دسترس هر هفته',
                            'yes'   => 'بله',
                        ],

                        'appointment' => [
                            'break-duration' => 'مدت زمان استراحت بین اسلات‌ها (دقیقه)',
                            'slot-duration'  => 'مدت زمان اسلات (دقیقه)',

                            'same-slot-for-all-days' => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای همه روزها',
                                'yes'   => 'بله',
                            ],
                        ],

                        'default' => [
                            'add'              => 'افزودن',
                            'break-duration'   => 'مدت زمان استراحت بین اسلات‌ها (دقیقه)',
                            'close'            => 'بستن',
                            'description'      => 'اطلاعات رزرو',
                            'description-info' => 'مدت زمان بر اساس اسلات‌ها ایجاد و نمایش داده خواهد شد. این مدت زمان در تمام اسلات‌ها منحصر به فرد خواهد بود و در فروشگاه قابل مشاهده خواهد بود.',
                            'edit'             => 'ویرایش',
                            'many'             => 'چندین رزرو برای یک روز',
                            'one'              => 'یک رزرو برای چندین روز',
                            'open'             => 'باز کردن',
                            'slot-add'         => 'افزودن اسلات‌ها',
                            'slot-duration'    => 'مدت زمان اسلات (دقیقه)',
                            'slot-title'       => 'مدت زمان اسلات‌ها',
                            'title'            => 'پیش‌فرض',
                            'unavailable'      => 'غیر قابل دسترس',

                            'modal' => [
                                'slot' => [
                                    'add-title'  => 'افزودن اسلات‌ها',
                                    'close'      => 'بستن',
                                    'day'        => 'روز',
                                    'edit-title' => 'ویرایش اسلات‌ها',
                                    'friday'     => 'جمعه',
                                    'from'       => 'از',
                                    'from-day'   => 'از روز',
                                    'from-time'  => 'از زمان',
                                    'monday'     => 'دوشنبه',
                                    'open'       => 'باز کردن',
                                    'saturday'   => 'شنبه',
                                    'save'       => 'ذخیره',
                                    'select'     => 'انتخاب',
                                    'status'     => 'وضعیت',
                                    'sunday'     => 'یکشنبه',
                                    'thursday'   => 'پنجشنبه',
                                    'to'         => 'تا',
                                    'to-day'     => 'تا روز',
                                    'to-time'    => 'تا زمان',
                                    'tuesday'    => 'سه‌شنبه',
                                    'wednesday'  => 'چهارشنبه',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'افزودن بلیط‌ها',
                            'delete'             => 'حذف',
                            'description'        => 'توضیحات',
                            'description-info'   => 'بلیطی موجود نیست.',
                            'edit'               => 'ویرایش',
                            'name'               => 'نام',
                            'price'              => 'قیمت',
                            'qty'                => 'تعداد',
                            'special-price'      => 'قیمت ویژه',
                            'special-price-from' => 'قیمت ویژه از',
                            'special-price-to'   => 'قیمت ویژه تا',
                            'title'              => 'بلیط‌ها',
                            'valid-from'         => 'معتبر از',
                            'valid-until'        => 'معتبر تا',

                            'modal'              => [
                                'edit' => 'ویرایش بلیط‌ها',
                                'save' => 'ذخیره',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'افزودن بلیط‌ها',
                            ],

                            'slots'   => [
                                'add'         => 'افزودن اسلات‌ها',
                                'description' => 'اسلات‌های موجود با مدت زمان.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'بر اساس روزانه',
                            'daily-hourly' => 'هر دو (روزانه و ساعتی)',
                            'daily-price'  => 'قیمت روزانه',
                            'hourly'       => 'بر اساس ساعتی',
                            'hourly-price' => 'قیمت ساعتی',
                            'title'        => 'نوع اجاره',

                            'same-slot-for-all-days' => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای همه روزها',
                                'yes'   => 'بله',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'افزودن اسلات‌ها',
                            'description-info' => 'مدت زمان بر اساس اسلات‌ها ایجاد و نمایش داده خواهد شد. این مدت زمان در تمام اسلات‌ها منحصر به فرد خواهد بود و در فروشگاه قابل مشاهده خواهد بود.',
                            'save'             => 'ذخیره',
                            'title'            => 'مدت زمان اسلات‌ها',
                            'unavailable'      => 'غیر قابل دسترس',

                            'action'           => [
                                'add' => 'افزودن',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'جمعه',
                                    'from'       => 'از',
                                    'monday'     => 'دوشنبه',
                                    'saturday'   => 'شنبه',
                                    'sunday'     => 'یکشنبه',
                                    'thursday'   => 'پنجشنبه',
                                    'to'         => 'تا',
                                    'tuesday'    => 'سه‌شنبه',
                                    'wednesday'  => 'چهارشنبه',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'مدت زمان استراحت بین اسلات‌ها (دقیقه)',
                            'guest-capacity'            => 'ظرفیت مهمان',
                            'guest-limit'               => 'محدودیت مهمان در هر میز',
                            'prevent-scheduling-before' => 'جلوگیری از برنامه‌ریزی قبل از',
                            'slot-duration'             => 'مدت زمان اسلات (دقیقه)',

                            'charged-per' => [
                                'guest'  => 'مهمان',
                                'table'  => 'میز',
                                'title'  => 'شارژ بر اساس',
                            ],

                            'same-slot-for-all-days' => [
                                'no'    => 'خیر',
                                'title' => 'همان اسلات برای همه روزها',
                                'yes'   => 'بله',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'رزرو وقت ملاقات',
                            'default'     => 'رزرو پیش‌فرض',
                            'event'       => 'رزرو رویداد',
                            'many'        => 'چندین',
                            'one'         => 'یک',
                            'rental'      => 'رزرو اجاره',
                            'table'       => 'رزرو میز',
                            'title'       => 'نوع',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'افزودن لینک',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'ویرایش',
                            'empty-info'  => 'برای ایجاد لینک به طور پویا.',
                            'empty-title' => 'افزودن لینک',
                            'file'        => 'فایل : ',
                            'info'        => 'نوع محصول قابل دانلود اجازه فروش محصولات دیجیتالی را مانند کتاب‌های الکترونیکی، برنامه‌های نرم‌افزاری، موسیقی، بازی‌ها و غیره فراهم می‌کند.',
                            'sample-file' => 'فایل نمونه : ',
                            'sample-url'  => 'آدرس نمونه : ',
                            'title'       => 'لینک‌های قابل دانلود',
                            'url'         => 'آدرس اینترنتی : ',

                            'update-create' => [
                                'downloads'   => 'دانلود مجاز است',
                                'file'        => 'فایل',
                                'file-type'   => 'نوع فایل',
                                'name'        => 'عنوان',
                                'price'       => 'قیمت',
                                'sample'      => 'نمونه',
                                'sample-type' => 'نوع نمونه',
                                'save-btn'    => 'ذخیره',
                                'title'       => 'لینک',
                                'url'         => 'آدرس اینترنتی : ',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'افزودن نمونه',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'ویرایش',
                            'empty-info'  => 'برای ایجاد نمونه به طور پویا.',
                            'empty-title' => 'افزودن نمونه',
                            'file'        => 'فایل : ',
                            'info'        => 'نوع محصول قابل دانلود اجازه فروش محصولات دیجیتالی را مانند کتاب‌های الکترونیکی، برنامه‌های نرم‌افزاری، موسیقی، بازی‌ها و غیره فراهم می‌کند.',
                            'title'       => 'نمونه‌های قابل دانلود',
                            'url'         => 'آدرس اینترنتی : ',

                            'update-create' => [
                                'file'        => 'فایل',
                                'file-type'   => 'نوع فایل',
                                'name'        => 'عنوان',
                                'save-btn'    => 'ذخیره',
                                'title'       => 'لینک',
                                'url'         => 'آدرس اینترنتی : ',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'محصول با موفقیت ایجاد شد',
            'delete-failed'            => 'حذف محصول با شکست مواجه شد',
            'delete-success'           => 'محصول با موفقیت حذف شد',
            'product-type-not-allowed' => 'شما مجاز به فروش محصول :type نیستید',
            'saved-inventory-message'  => 'محصول با موفقیت ذخیره شد',
            'update-success'           => 'محصول با موفقیت به‌روزرسانی شد',

            'assign' => [
                'already-selling'     => 'شما قبلاً این محصول را می‌فروشید',
                'back-btn'            => 'بازگشت',
                'condition'           => 'شرایط',
                'create-success'      => 'محصول با موفقیت به فروشنده اختصاص یافت',
                'description'         => 'توضیحات',
                'image-size'          => 'وضوح تصویر باید 609px X 560px باشد',
                'images'              => 'تصاویر',
                'new'                 => 'جدید',
                'not-allowed'         => 'شما مجاز به اختصاص این محصول نیستید',
                'old'                 => 'قدیمی',
                'price'               => 'قیمت',
                'product-not-allowed' => 'شما اجازه فروش محصول از نوع :type را ندارید',
                'quantities'          => 'مقادیر',
                'save-btn'            => 'ذخیره',
                'title'               => 'اختصاص محصول',
                'update-success'      => 'محصول اختصاص داده شده با موفقیت به‌روزرسانی شد',

                'product-details' => [
                    'active'            => 'فعال',
                    'approved'          => 'تایید شده',
                    'disable'           => 'غیرفعال کردن',
                    'disapproved'       => 'رد شده',
                    'image-placeholder' => 'تصویر محصول',
                    'title'             => 'جزئیات محصول',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'نقد و بررسی محصولات',

                'datagrid' => [
                    'approved'      => 'تایید شده',
                    'customer'      => 'مشتری',
                    'date'          => 'تاریخ',
                    'description'   => 'توضیحات',
                    'email'         => 'ایمیل',
                    'pending'       => 'در انتظار',
                    'product'       => 'محصول',
                    'rating'        => 'رتبه‌بندی',
                    'status'        => 'وضعیت',
                    'title'         => 'عنوان',
                    'unapproved'    => 'تایید نشده',
                    'update-status' => 'وضعیت به‌روزرسانی',
                ],
            ],

            'update-success' => 'با موفقیت بروزرسانی شدند بررسی‌های محصول',
            'delete-success' => 'بررسی‌های محصول با موفقیت حذف شد.',
        ],

        'customers' => [
            'index' => [
                'title' => 'مشتریان',

                'datagrid' => [
                    'active'      => 'فعال',
                    'customer'    => 'مشتری',
                    'email'       => 'ایمیل',
                    'gender'      => 'جنسیت',
                    'group'       => 'گروه',
                    'inactive'    => 'غیرفعال',
                    'order-count' => 'تعداد سفارشات',
                    'revenue'     => 'درآمد',
                    'status'      => 'وضعیت',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'مدیریت پروفایل',
                'edit-btn' => 'ویرایش پروفایل',

                'general' => [
                    'email'      => 'ایمیل',
                    'name'       => 'نام',
                    'phone'      => 'شماره تلفن',
                    'shop-slug'  => 'شناسه فروشگاه',
                    'shop-title' => 'عنوان فروشگاه',
                    'title'      => 'اطلاعات عمومی',
                ],

                'about-store' => [
                    'title' => 'درباره فروشگاه',
                ],

                'meta' => [
                    'meta-description' => 'توضیحات متا',
                    'meta-keywords'    => 'کلمات کلیدی متا',
                    'meta-title'       => 'عنوان متا',
                    'title'            => 'توضیحات متا',
                ],

                'policy' => [
                    'privacy'  => 'سیاست حفظ حریم خصوصی',
                    'return'   => 'سیاست بازگشت',
                    'shipping' => 'سیاست حمل و نقل',
                    'title'    => 'قوانین',
                ],

                'address' => [
                    'city'     => 'شهر',
                    'country'  => 'کشور',
                    'postcode' => 'کد پستی',
                    'state'    => 'استان',
                    'title'    => 'آدرس فروشگاه',
                    'address'  => 'آدرس',
                ],

                'social' => [
                    'link'  => 'لینک :name',
                    'title' => 'لینک‌های اجتماعی',
                ],

                'minimum-order-amount' => [
                    'title'  => 'حداقل مبلغ سفارش',
                ],

                'google-analytics' => [
                    'id'    => 'شناسه Google Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'کمیسیون مدیر',
                    'admin-commission-value' => 'کمیسیون مدیر :rate% از کل مبلغ فاکتور شده',
                    'allowed-categories'     => 'دسته‌بندی‌های مجاز',
                    'no-categories'          => 'هیچ دسته‌بندی موجود نیست',
                    'allowed-product-types'  => 'نوع محصول مجاز',
                    'no-product-types'       => 'هیچ نوع محصولی موجود نیست',
                    'payment-methods'        => 'روش‌های پرداخت',
                    'no-payment-methods'     => 'هیچ روش پرداختی موجود نیست',
                    'shipping-methods'       => 'روش‌های حمل و نقل',
                    'no-shipping-methods'    => 'هیچ روش حمل و نقلی موجود نیست',
                    'title'                  => 'اطلاعات فروشگاه',
                ],
            ],

            'edit' => [
                'banner'              => 'بنر',
                'banner-description'  => 'بنر را با نسبت 13:3 آپلود کنید، ارتفاع 375، ناحیه امن 375x250 مرکز در موبایل',
                'delete-banner'       => 'حذف بنر',
                'delete-logo'         => 'حذف لوگو',
                'logo'                => 'لوگو',
                'logo-description'    => 'لوگو را با نسبت 1:1 آپلود کنید',
                'save-btn'            => 'ذخیره پروفایل',
                'title'               => 'مدیریت پروفایل',
                'upload-new-banner'   => 'آپلود بنر جدید',
                'upload-new-logo'     => 'آپلود لوگوی جدید',

                'general' => [
                    'email'      => 'ایمیل',
                    'name'       => 'نام',
                    'phone'      => 'شماره تلفن',
                    'shop-slug'  => 'شناسه فروشگاه',
                    'shop-title' => 'عنوان فروشگاه',
                    'title'      => 'اطلاعات عمومی',
                ],

                'about-store' => [
                    'title' => 'درباره فروشگاه',
                ],

                'meta' => [
                    'meta-description' => 'توضیحات متا',
                    'meta-keywords'    => 'کلمات کلیدی متا',
                    'meta-title'       => 'عنوان متا',
                    'title'            => 'توضیحات متا',
                ],

                'policy' => [
                    'privacy'  => 'سیاست حفظ حریم خصوصی',
                    'return'   => 'سیاست بازگشت',
                    'shipping' => 'سیاست حمل و نقل',
                    'title'    => 'قوانین',
                ],

                'address' => [
                    'city'           => 'شهر',
                    'country'        => 'کشور',
                    'postcode'       => 'کد پستی',
                    'state'          => 'استان',
                    'title'          => 'آدرس فروشگاه',
                    'select-country' => 'انتخاب کشور',
                    'select-state'   => 'انتخاب استان',
                    'street-address' => 'آدرس خیابان',
                    'address'        => 'آدرس',
                ],

                'social' => [
                    'link'  => 'لینک :name',
                    'title' => 'لینک‌های اجتماعی',
                ],

                'minimum-order-amount' => [
                    'title'  => 'حداقل مبلغ سفارش',
                ],

                'google-analytics' => [
                    'id'    => 'شناسه Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'پروفایل شما با موفقیت به‌روزرسانی شد',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'نظرات مشتریان درباره فروشنده',

                'datagrid' => [
                    'approved'    => 'تایید شده',
                    'customer'    => 'مشتری',
                    'date'        => 'تاریخ',
                    'description' => 'توضیحات',
                    'disapproved' => 'تایید نشده',
                    'email'       => 'ایمیل',
                    'pending'     => 'در انتظار',
                    'rating'      => 'رتبه‌بندی',
                    'status'      => 'وضعیت',
                    'title'       => 'عنوان',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'ذخیره',
                    'title'              => 'عمومی',
                    'unmatched-password' => 'رمز عبور فعلی مطابقت ندارد',
                    'update-success'     => 'تنظیمات عمومی با موفقیت به‌روزرسانی شد',

                    'regional-setting' => [
                        'currency'      => 'واحد پول',
                        'locale'        => 'محلی',
                        'select-locale' => 'انتخاب محلی',
                        'title'         => 'تنظیمات منطقه‌ای',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'تأیید رمز عبور',
                        'current-password' => 'رمز عبور فعلی',
                        'new-password'     => 'رمز عبور جدید',
                        'title'            => 'تنظیمات رمز عبور',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'ایجاد نقش',
                    'title'      => 'نقش‌ها',

                    'datagrid' => [
                        'all'             => 'همه',
                        'custom'          => 'سفارشی',
                        'delete'          => 'حذف',
                        'edit'            => 'ویرایش',
                        'id'              => 'شناسه',
                        'name'            => 'نام',
                        'permission-type' => 'نوع دسترسی',
                    ],
                ],

                'create' => [
                    'access-control' => 'کنترل دسترسی',
                    'all'            => 'همه',
                    'back-btn'       => 'بازگشت',
                    'custom'         => 'سفارشی',
                    'description'    => 'توضیحات',
                    'general'        => 'عمومی',
                    'name'           => 'نام',
                    'permissions'    => 'دسترسی‌ها',
                    'save-btn'       => 'ذخیره نقش',
                    'title'          => 'ایجاد نقش',
                ],

                'edit' => [
                    'access-control' => 'کنترل دسترسی',
                    'all'            => 'همه',
                    'back-btn'       => 'بازگشت',
                    'custom'         => 'سفارشی',
                    'description'    => 'توضیحات',
                    'general'        => 'عمومی',
                    'name'           => 'نام',
                    'permissions'    => 'دسترسی‌ها',
                    'save-btn'       => 'ذخیره نقش',
                    'title'          => 'ویرایش نقش',
                ],

                'being-used'        => 'نقش توسط برخی فروشندگان استفاده می‌شود',
                'create-success'    => 'نقش با موفقیت ایجاد شد',
                'delete-failed'     => 'حذف نقش ناموفق بود',
                'delete-success'    => 'نقش با موفقیت حذف شد',
                'last-delete-error' => 'حداقل یک نقش باید وجود داشته باشد',
                'update-success'    => 'نقش با موفقیت به‌روزرسانی شد',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'ایجاد کاربر',
                    'create-title'     => 'ایجاد کاربر',
                    'edit-title'       => 'ویرایش کاربر',
                    'email'            => 'ایمیل',
                    'name'             => 'نام',
                    'phone-number'     => 'شماره تلفن',
                    'role'             => 'نقش',
                    'save-btn'         => 'ذخیره کاربر',
                    'select-role'      => 'انتخاب نقش',
                    'password'         => 'رمز عبور',
                    'confirm-password' => 'تأیید رمز عبور',
                    'status'           => 'وضعیت',
                    'title'            => 'کاربران',
                    'create-success'   => 'کاربر با موفقیت ایجاد شد',
                    'update-success'   => 'کاربر با موفقیت به‌روز شد',
                    'delete-success'   => 'کاربر با موفقیت حذف شد',
                    'delete-failed'    => 'حذف کاربر ناموفق بود',

                    'datagrid' => [
                        'delete'     => 'حذف',
                        'edit'       => 'ویرایش',
                        'email'      => 'ایمیل',
                        'id'         => 'شناسه',
                        'id-value'   => 'شناسه - :id',
                        'name'       => 'نام',
                        'permission' => 'دسترسی',
                        'phone'      => 'تلفن',

                        'status' => [
                            'title' => 'وضعیت',

                            'options' => [
                                'active'    => 'فعال',
                                'suspended' => 'معلق',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'ایجاد منبع موجودی',
                    'title'      => 'منابع موجودی',

                    'datagrid' => [
                        'active'   => 'فعال',
                        'code'     => 'کد',
                        'delete'   => 'حذف',
                        'edit'     => 'ویرایش',
                        'id'       => 'شناسه',
                        'inactive' => 'غیرفعال',
                        'name'     => 'نام',
                        'priority' => 'اولویت',
                        'status'   => 'وضعیت',
                    ],
                ],

                'create' => [
                    'add-title'      => 'افزودن منبع موجودی',
                    'address'        => 'آدرس منبع',
                    'back-btn'       => 'بازگشت',
                    'city'           => 'شهر',
                    'code'           => 'کد',
                    'contact-email'  => 'ایمیل',
                    'contact-fax'    => 'فکس',
                    'contact-info'   => 'اطلاعات تماس',
                    'contact-name'   => 'نام',
                    'contact-number' => 'شماره تماس',
                    'country'        => 'کشور',
                    'description'    => 'توضیحات',
                    'general'        => 'عمومی',
                    'latitude'       => 'عرض جغرافیایی',
                    'longitude'      => 'طول جغرافیایی',
                    'name'           => 'نام',
                    'postcode'       => 'کد پستی',
                    'priority'       => 'اولویت',
                    'save-btn'       => 'ذخیره منابع موجودی',
                    'select-country' => 'انتخاب کشور',
                    'select-state'   => 'انتخاب استان',
                    'settings'       => 'تنظیمات',
                    'state'          => 'استان',
                    'status'         => 'وضعیت',
                    'street'         => 'خیابان',
                    'title'          => 'منابع موجودی',
                ],

                'edit' => [
                    'back-btn'       => 'بازگشت',
                    'city'           => 'شهر',
                    'code'           => 'کد',
                    'contact-email'  => 'ایمیل',
                    'contact-fax'    => 'فکس',
                    'contact-info'   => 'اطلاعات تماس',
                    'contact-name'   => 'نام',
                    'contact-number' => 'شماره تماس',
                    'country'        => 'کشور',
                    'description'    => 'توضیحات',
                    'general'        => 'عمومی',
                    'latitude'       => 'عرض جغرافیایی',
                    'longitude'      => 'طول جغرافیایی',
                    'name'           => 'نام',
                    'postcode'       => 'کد پستی',
                    'priority'       => 'اولویت',
                    'save-btn'       => 'ذخیره منابع موجودی',
                    'select-country' => 'انتخاب کشور',
                    'select-state'   => 'انتخاب استان',
                    'settings'       => 'تنظیمات',
                    'source-address' => 'آدرس منبع',
                    'state'          => 'استان',
                    'status'         => 'وضعیت',
                    'street'         => 'خیابان',
                    'title'          => 'ویرایش منابع موجودی',
                ],

                'create-success'    => 'منبع موجودی با موفقیت ایجاد شد.',
                'delete-failed'     => 'حذف منابع موجودی با شکست مواجه شد.',
                'delete-success'    => 'منابع موجودی با موفقیت حذف شد.',
                'last-delete-error' => 'آخرین منابع موجودی قابل حذف شدن نیستند.',
                'update-success'    => 'منابع موجودی با موفقیت به‌روزرسانی شدند.',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'مدیر',
                'blocked-message'     => 'شما توسط مدیر مسدود شده‌اید',
                'message-failed'      => 'ارسال پیام ناموفق بود',
                'message-placeholder' => 'پیام خود را اینجا تایپ کنید...',
                'message-sent'        => 'پیام با موفقیت ارسال شد',
                'no-message'          => 'هیچ پیامی یافت نشد',
                'search-message'      => 'جستجوی پیام...',
                'title'               => 'ارتباطات',

                'filters' => [
                    'all-messages'      => 'تمام پیام‌ها',
                    'prev-fifteen-days' => '۱۵ روز گذشته',
                    'prev-seven-days'   => '۷ روز گذشته',
                    'prev-six-months'   => '۶ ماه گذشته',
                    'prev-thirty-days'  => '۳۰ روز گذشته',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'سبد خرید ترک شده',
                    'abandoned-products'            => 'محصولات ترک شده',
                    'abandoned-rate'                => 'نرخ ترک',
                    'abandoned-revenue'             => 'درآمد ترک شده',
                    'added-to-cart'                 => 'افزوده شده به سبد خرید',
                    'added-to-cart-info'            => 'تنها :progress بازدیدکننده محصولات را به سبد خرید اضافه کرده‌اند',
                    'all-channels'                  => 'همه کانال‌ها',
                    'average-order-value-over-time' => 'میانگین ارزش سفارش در طول زمان',
                    'average-sales'                 => 'میانگین ارزش سفارش',
                    'commission'                    => 'کمیسیون',
                    'commission-over-time'          => 'کمیسیون در طول زمان',
                    'count'                         => 'تعداد',
                    'end-date'                      => 'تاریخ پایان',
                    'id'                            => 'شناسه',
                    'interval'                      => 'فاصله زمانی',
                    'name'                          => 'نام',
                    'orders'                        => 'سفارش‌ها',
                    'orders-over-time'              => 'سفارش‌ها در طول زمان',
                    'payment-method'                => 'روش پرداخت',
                    'product-views'                 => 'نمایش محصولات',
                    'product-views-info'            => 'تنها :progress بازدیدکننده محصولات را مشاهده کرده‌اند',
                    'purchase-funnel'               => 'مسیر خرید',
                    'purchased'                     => 'خریداری شده',
                    'purchased-info'                => 'تنها :progress بازدیدکننده خرید می‌کنند',
                    'refunds'                       => 'بازپرداخت',
                    'refunds-over-time'             => 'بازپرداخت‌ها در طول زمان',
                    'sales-over-time'               => 'فروش در طول زمان',
                    'start-date'                    => 'تاریخ شروع',
                    'tax-collected'                 => 'مالیات جمع‌آوری شده',
                    'tax-collected-over-time'       => 'مالیات جمع‌آوری شده در طول زمان',
                    'title'                         => 'فروش',
                    'top-payment-methods'           => 'برترین روش‌های پرداخت',
                    'top-tax-categories'            => 'برترین دسته‌های مالیاتی',
                    'total'                         => 'مجموع',
                    'total-commission-paid'         => 'کل کمیسیون پرداخت‌شده',
                    'total-orders'                  => 'مجموع سفارش‌ها',
                    'total-sales'                   => 'مجموع فروش',
                    'total-visits'                  => 'مجموع بازدیدها',
                    'total-visits-info'             => 'مجموع بازدیدکنندگان در فروشگاه',
                    'view-details'                  => 'مشاهده جزئیات',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'همه کانال‌ها',
                    'count'                       => 'تعداد',
                    'customers'                   => 'مشتریان',
                    'customers-over-time'         => 'مشتریان در طول زمان',
                    'customers-traffic'           => 'ترافیک مشتریان',
                    'customers-with-most-orders'  => 'مشتریان با بیشترین سفارشات',
                    'customers-with-most-reviews' => 'مشتریان با بیشترین بررسی‌ها',
                    'customers-with-most-sales'   => 'مشتریان با بیشترین فروش',
                    'email'                       => 'ایمیل',
                    'end-date'                    => 'تاریخ پایان',
                    'id'                          => 'شناسه',
                    'interval'                    => 'فاصله زمانی',
                    'name'                        => 'نام',
                    'orders'                      => 'سفارش‌ها',
                    'reviews'                     => 'بررسی‌ها',
                    'start-date'                  => 'تاریخ شروع',
                    'title'                       => 'مشتریان',
                    'top-customer-groups'         => 'برترین گروه‌های مشتری',
                    'total'                       => 'مجموع',
                    'total-customers'             => 'مجموع مشتریان',
                    'total-visitors'              => 'مجموع بازدیدکنندگان',
                    'traffic-over-week'           => 'ترافیک در طول هفته',
                    'unique-visitors'             => 'بازدیدکنندگان یکتا',
                    'view-details'                => 'مشاهده جزئیات',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'همه کانال‌ها',
                    'channel'                          => 'کانال',
                    'end-date'                         => 'تاریخ پایان',
                    'id'                               => 'شناسه',
                    'interval'                         => 'فاصله زمانی',
                    'locale'                           => 'محلی',
                    'name'                             => 'نام',
                    'orders'                           => 'سفارش‌ها',
                    'price'                            => 'قیمت',
                    'products-added-over-time'         => 'محصولات افزوده شده در طول زمان',
                    'products-with-most-reviews'       => 'محصولات با بیشترین بررسی‌ها',
                    'products-with-most-visits'        => 'محصولات با بیشترین بازدیدها',
                    'quantities'                       => 'مقادیر',
                    'quantities-sold-over-time'        => 'مقادیر فروخته شده در طول زمان',
                    'revenue'                          => 'درآمد',
                    'reviews'                          => 'بررسی‌ها',
                    'start-date'                       => 'تاریخ شروع',
                    'title'                            => 'محصولات',
                    'top-selling-products-by-quantity' => 'برترین محصولات بر اساس تعداد',
                    'top-selling-products-by-revenue'  => 'برترین محصولات بر اساس درآمد',
                    'total'                            => 'مجموع',
                    'total-products-added-to-wishlist' => 'محصولات افزوده شده به لیست دلخواه',
                    'total-sold-quantities'            => 'مقادیر محصولات فروخته شده',
                    'view-details'                     => 'مشاهده جزئیات',
                    'visits'                           => 'بازدیدها',
                ],
            ],

            'view' => [
                'all-channels'  => 'همه کانال‌ها',
                'day'           => 'روز',
                'end-date'      => 'تاریخ پایان',
                'export-csv'    => 'خروجی CSV',
                'export-xls'    => 'خروجی XLS',
                'month'         => 'ماه',
                'not-available' => 'رکوردی موجود نیست.',
                'start-date'    => 'تاریخ شروع',
                'year'          => 'سال',
            ],

            'empty' => [
                'info'  => 'داده‌ای برای بازه زمانی انتخاب شده موجود نیست',
                'title' => 'داده‌ای موجود نیست',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'غیرفعال',
                'enabled'   => 'فعال',
                'info'      => 'فروشگاه آنلاین خود را با افزونه‌های قابل تنظیم Bagisto بسازید، مدیریت و گسترش دهید.',
                'no-result' => 'هیچ افزونه‌ای در اینجا موجود نیست.',
                'title'     => 'افزونه‌ها',

                'filters' => [
                    'all-extensions' => 'همه افزونه‌ها',
                    'bulk_upload'    => 'آپلود دسته‌ای',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'بازار',
                    'payment'        => 'پرداخت',
                    'pos'            => 'POS',
                    'shipping'       => 'ارسال',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'لوگوی فروشنده',
                'switch-to-store' => 'تغییر به مدیریت فروشگاه',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'حداقل مبلغ سفارش برای :shop_title برابر است با',
                'product-not-available' => 'محصول در دسترس نیست',
                'sold-by'               => 'فروخته شده توسط',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'پرداخت در :days روز',
                'deals-in'            => 'معاملات در',
                'featured-seller'     => 'فروشندگان برجسته ما',
                'online-business'     => 'کسب و کار آنلاین',
                'reviews'             => ':count نقد و بررسی‌ها',
                'seller-community'    => 'جامعه فروشندگان',
                'serviceable-pincode' => 'کدپستی خدمات‌پذیر',
                'start-selling'       => 'شروع به فروش با مشتریان بزرگ در سراسر جهان، شبانه روز.',
                'step'                => 'مرحله :count',
                'visit-shop'          => 'از فروشگاه دیدن کنید',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'افزودن به سبد خرید',
            'delivery-info' => 'اطلاعات تحویل در اینجا ظاهر می‌شود',
            'hide'          => 'پنهان کردن',
            'more-info'     => 'اطلاعات بیشتر',
            'seller-count'  => ':count فروشنده دیگر همین محصول را فروخته‌اند',
            'seller-info'   => 'اطلاعات فروشنده',
            'sold-by'       => 'فروخته شده توسط',
            'top-selling'   => 'پرفروش ترین',

            'flag' => [
                'alert'              => 'هشدار',
                'already-reported'   => 'شما قبلاً این محصول را گزارش کرده‌اید',
                'create-success'     => 'محصول با موفقیت گزارش شد',
                'guest-alert'        => 'برای گزارش این محصول باید وارد شوید',
                'not-allowed'        => 'بدون ثبت سفارش نمی‌توانید این محصول را گزارش کنید',
                'other-reason'       => 'دلیل دیگر',
                'reason'             => 'دلیل',
                'reason-placeholder' => 'لطفاً دلیل را مشخص کنید',
                'report-product'     => 'گزارش محصول',
                'select-reason'      => 'انتخاب دلیل',
                'submit-btn'         => 'ارسال',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'فروشنده هنوز تأیید نشده است',
                'products-count'  => 'محصولات (:count)',
                'reviews-count'   => 'نظرات (:count)',
                'search-text'     => 'جستجو برای محصولات',

                'about' => [
                    'title'           => 'درباره',
                    'about-us'        => 'درباره ما',
                    'shipping-policy' => 'سیاست حمل و نقل',
                    'privacy-policy'  => 'سیاست حفظ حریم خصوصی',
                    'return-policy'   => 'سیاست بازگشت',
                ],

                'contact-form' => [
                    'title'          => 'تماس',
                    'name'           => 'نام',
                    'email'          => 'ایمیل',
                    'subject'        => 'موضوع',
                    'query'          => 'پرسش',
                    'submit-btn'     => 'ارسال',
                    'create-success' => 'پرسش شما با موفقیت ارسال شد',
                ],

                'share' => [
                    'title'     => 'اشتراک گذاری',
                    'share-on'  => 'اشتراک گذاری در',
                    'facebook'  => 'فیسبوک',
                    'linkedin'  => 'لینکدین',
                    'twitter'   => 'توییتر',
                    'pinterest' => 'پینترست',
                ],

                'report-form' => [
                    'alert'              => 'هشدار',
                    'already-reported'   => 'شما قبلاً این فروشنده را گزارش کرده‌اید',
                    'create-success'     => 'فروشنده با موفقیت گزارش شد',
                    'guest-alert'        => 'برای گزارش فروشنده باید وارد شوید',
                    'not-allowed'        => 'بدون ثبت سفارش نمی‌توانید این فروشنده را گزارش کنید',
                    'other-reason'       => 'دلیل دیگر',
                    'reason'             => 'دلیل',
                    'reason-placeholder' => 'لطفاً دلیل را مشخص کنید',
                    'select-reason'      => 'انتخاب دلیل',
                    'submit-btn'         => 'ارسال',
                    'title'              => 'گزارش مشکل',
                ],

                'reviews' => [
                    'alert'            => 'هشدار',
                    'already-reviewed' => 'شما قبلاً این فروشنده را ارزیابی کرده‌اید',
                    'comment'          => 'نظر',
                    'create-success'   => 'فروشنده با موفقیت ارزیابی شد',
                    'customer-review'  => ':count بررسی مشتری',
                    'customer-reviews' => 'بررسی‌های مشتریان',
                    'guest-alert'      => 'برای گزارش فروشنده باید وارد شوید',
                    'rating'           => 'امتیاز',
                    'review-by'        => 'بررسی توسط',
                    'submit-btn'       => 'ارسال',
                    'title'            => 'عنوان',
                    'view-all'         => 'مشاهده همه بررسی‌ها',
                    'write-review'     => 'نوشتن بررسی',
                ],

                'products' => [
                    'no-result' => 'هیچ محصولی در اینجا موجود نیست',
                    'show'      => 'نمایش',

                    'sort-by' => [
                        'title' => 'مرتب‌سازی بر اساس',

                        'options' => [
                            'cheapest-first'  => 'ارزان‌ترین اول',
                            'expensive-first' => 'گران‌ترین اول',
                            'from-a-z'        => 'از A-Z',
                            'from-z-a'        => 'از Z-A',
                            'latest-first'    => 'جدیدترین اول',
                            'oldest-first'    => 'قدیمی‌ترین اول',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'پاک کردن همه',
                        'filter'      => 'فیلتر',
                        'filters'     => 'فیلترها:',
                        'price-range' => 'محدوده قیمت',
                        'sort'        => 'مرتب‌سازی',
                    ],
                ],
            ],
        ],
    ],
];
