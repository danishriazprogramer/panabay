<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'المتجر',
                    'info'  => 'إدارة المتجر',

                    'module-info' => [
                        'title'       => 'معلومات الوحدة',
                        'info'        => 'يوفر معلومات تتعلق بإصدار التطبيق.',
                        'app-version' => 'إصدار التطبيق: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'نسبة عمولة المشرف',
                        'description'                  => 'إدارة الإعدادات العامة للمتجر مثل الحالة، العمولة، إلخ.',
                        'lines-in-street-address'      => 'الخطوط في عنوان الشارع',
                        'lines-in-street-address-info' => 'تحديد عدد الخطوط في عنوان الشارع. الافتراضي هو خط واحد.',
                        'status'                       => 'الحالة',
                        'title'                        => 'عام',
                    ],

                    'product' => [
                        'approval-required'         => 'تتطلب الموافقة',
                        'description'               => 'إدارة إعدادات المنتجات في المتجر مثل الموافقات، العلامات، إلخ.',
                        'enable-flag'               => 'تمكين العلم',
                        'seller-can-assign-product' => 'البائع يمكنه تعيين المنتج',
                        'seller-can-create-product' => 'البائع يمكنه إنشاء المنتج',
                        'show-progress-bar'         => 'عرض شريط التقدم',
                        'title'                     => 'المنتج',
                    ],

                    'seller' => [
                        'approval-required'           => 'الموافقة مطلوبة',
                        'can-cancel-order'            => 'يمكن إلغاء الطلب',
                        'can-create-invoice'          => 'يمكن إنشاء فاتورة',
                        'can-create-shipment'         => 'يمكن إنشاء شحنة',
                        'description'                 => 'إدارة إعدادات البائع في السوق مثل الموافقة، العلامات، إلخ.',
                        'enable-flag'                 => 'تفعيل العلامة',
                        'enable-minimum-order-amount' => 'تفعيل الحد الأدنى للطلب',
                        'enable-seller-flag'          => 'تفعيل علامة البائع',
                        'red-flag-limit'              => 'حد العلامة الحمراء',
                        'red-flag-limit-info'         => 'إذا حصل البائع على أكثر من هذا الحد، ستظهر العلامة الحمراء على الملف الشخصي للبائع.',
                        'show-red-flag'               => 'عرض العلامة الحمراء على الملف الشخصي إذا تجاوز الحد',
                        'title'                       => 'البائع',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'حد الأقصى',
                        'description' => 'إدارة البائعين المميزين في السوق.',
                        'status'      => 'الحالة',
                        'title'       => 'البائعون المميزون',

                        'popularity-criteria' => [
                            'all'              => 'الكل',
                            'maximum-orders'   => 'الحد الأقصى للطلبات',
                            'maximum-products' => 'الحد الأقصى للمنتجات',
                            'maximum-rating'   => 'التقييم الأقصى',
                            'maximum-sale'     => 'الحد الأقصى للمبيعات',
                            'title'            => 'معايير الشعبية',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'عنوان زر البانر',
                        'banner-description'  => 'وصف البانر',
                        'banner-image'        => 'صورة البانر',
                        'banner-title'        => 'عنوان البانر',
                        'business-hour'       => 'ساعات العمل',
                        'community-count'     => 'عدد المجتمع',
                        'description'         => 'تخصيص صفحة الهبوط للسوق، عن طريق إضافة أيقونات وشعار ووصف لمظهر جديد.',
                        'feature-box1-desc'   => 'وصف صندوق الميزة 1',
                        'feature-box1-icon'   => 'رمز صندوق الميزة 1',
                        'feature-box1-title'  => 'عنوان صندوق الميزة 1',
                        'feature-box2-desc'   => 'وصف صندوق الميزة 2',
                        'feature-box2-icon'   => 'رمز صندوق الميزة 2',
                        'feature-box2-title'  => 'عنوان صندوق الميزة 2',
                        'feature-box3-desc'   => 'وصف صندوق الميزة 3',
                        'feature-box3-icon'   => 'رمز صندوق الميزة 3',
                        'feature-box3-title'  => 'عنوان صندوق الميزة 3',
                        'feature-box4-desc'   => 'وصف صندوق الميزة 4',
                        'feature-box4-icon'   => 'رمز صندوق الميزة 4',
                        'feature-box4-title'  => 'عنوان صندوق الميزة 4',
                        'feature-description' => 'وصف الميزة',
                        'feature-image'       => 'صورة الميزة',
                        'feature-title'       => 'عنوان الميزة',
                        'journey-description' => 'وصف الرحلة',
                        'journey-image'       => 'صورة الرحلة',
                        'journey-step1-desc'  => 'وصف خطوة الرحلة 1',
                        'journey-step1-icon'  => 'رمز خطوة الرحلة 1',
                        'journey-step1-title' => 'عنوان خطوة الرحلة 1',
                        'journey-step2-desc'  => 'وصف خطوة الرحلة 2',
                        'journey-step2-icon'  => 'رمز خطوة الرحلة 2',
                        'journey-step2-title' => 'عنوان خطوة الرحلة 2',
                        'journey-step3-desc'  => 'وصف خطوة الرحلة 3',
                        'journey-step3-icon'  => 'رمز خطوة الرحلة 3',
                        'journey-step3-title' => 'عنوان خطوة الرحلة 3',
                        'journey-step4-desc'  => 'وصف خطوة الرحلة 4',
                        'journey-step4-icon'  => 'رمز خطوة الرحلة 4',
                        'journey-step4-title' => 'عنوان خطوة الرحلة 4',
                        'journey-step5-desc'  => 'وصف خطوة الرحلة 5',
                        'journey-step5-icon'  => 'رمز خطوة الرحلة 5',
                        'journey-step5-title' => 'عنوان خطوة الرحلة 5',
                        'journey-title'       => 'عنوان الرحلة',
                        'payment-duration'    => 'مدة الدفع',
                        'serviceable-pincode' => 'الرمز البريدي القابل للخدمة',
                        'title'               => 'صفحة الهبوط',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'تعيين المنتج',
            'communications'    => 'الاتصالات',
            'create'            => 'إنشاء',
            'delete'            => 'حذف',
            'edit'              => 'تعديل',
            'flag-reasons'      => 'أسباب الإبلاغ',
            'inventory-sources' => 'مصادر المخزون',
            'orders'            => 'الطلبات',
            'pay'               => 'دفع',
            'payment-request'   => 'طلب الدفع',
            'product-reviews'   => 'مراجعات المنتجات',
            'products'          => 'المنتجات',
            'reviews'           => 'مراجعات البائع',
            'seller-categories' => 'فئات البائع',
            'sellers'           => 'البائعون',
            'title'             => 'السوق',
            'transactions'      => 'المعاملات',
            'view'              => 'عرض',
        ],

        'menu' => [
            'communications'    => 'الاتصالات',
            'flag-reasons'      => 'أسباب العلامة',
            'inventory-sources' => 'مصادر المخزون',
            'orders'            => 'الطلبات',
            'payment-requests'  => 'طلبات الدفع',
            'product-reviews'   => 'تقييمات المنتج',
            'products'          => 'المنتجات',
            'seller-categories' => 'فئات البائعين',
            'seller-reviews'    => 'تقييمات البائع',
            'sellers'           => 'البائعين',
            'title'             => 'السوق',
            'transactions'      => 'المعاملات',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'إضافة بائعين',
                'delete-failed'      => 'فشل حذف البائع!',
                'delete-success'     => 'تم حذف البائع بنجاح.',
                'incomplete-profile' => 'البائع لديه ملف شخصي غير مكتمل!',
                'login-message'      => 'لقد تم تسجيل دخولك باسم :seller_name',
                'pending-orders'     => 'البائع لديه بعض الطلبات الغير مكتملة',
                'title'              => 'البائعون',
                'update-success'     => 'تم تحديث البائع بنجاح!',

                'datagrid' => [
                    'add-product'     => 'تعيين',
                    'approved'        => 'تمت الموافقة عليه',
                    'assign-product'  => 'تعيين المنتج',
                    'created-at'      => 'تم الإنشاء في',
                    'delete'          => 'حذف',
                    'disapproved'     => 'تم رفضه',
                    'edit'            => 'تحرير',
                    'email'           => 'البريد الإلكتروني',
                    'flags'           => 'العلامات',
                    'id'              => 'المعرف',
                    'login-as-seller' => 'تسجيل الدخول كبائع',
                    'seller-id'       => 'المعرف - :seller_id',
                    'seller-name'     => 'اسم البائع',
                    'shop-url'        => 'رابط المتجر',
                    'status'          => 'الحالة',
                    'suspended'       => 'مُعلق',
                    'total-flags'     => 'إجمالي العلامات: :count',
                    'update-status'   => 'تحديث الحالة',
                ],

                'create'  => [
                    'address'        => 'العنوان',
                    'street-address' => 'عنوان الشارع',
                    'city'           => 'المدينة',
                    'country'        => 'البلد',
                    'email'          => 'البريد الإلكتروني',
                    'name'           => 'الاسم',
                    'phone'          => 'رقم الهاتف',
                    'postcode'       => 'الرمز البريدي',
                    'save-btn'       => 'حفظ',
                    'select'         => 'اختيار',
                    'shop-title'     => 'عنوان المتجر',
                    'shop-url'       => 'رابط المتجر',
                    'state'          => 'الولاية',
                    'success'        => 'تم إنشاء البائع بنجاح.',
                    'title'          => 'إنشاء بائع',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'أعلام البائعين',

                    'datagrid' => [
                        'id'             => 'معرف',
                        'customer-name'  => 'اسم العميل',
                        'customer-email' => 'البريد الإلكتروني للعميل',
                        'date'           => 'تاريخ',
                        'reason'         => 'السبب',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'رجوع',
                'image-placeholder' => 'صورة المنتج',
                'no-result'         => 'لم يتم العثور على نتائج!',
                'sku'               => 'SKU - :sku',
                'title'             => 'البحث عن المنتجات',
            ],

            'assign-product' => [
                'already-selling'     => 'البائع يبيع هذا المنتج بالفعل',
                'assign-successfully' => 'تم تعيين المنتج للبائع بنجاح.',
                'back-btn'            => 'رجوع',
                'condition'           => 'الحالة',
                'description'         => 'الوصف',
                'new'                 => 'جديد',
                'old'                 => 'قديم',
                'price'               => 'السعر',
                'product-not-allowed' => 'البائع غير مسموح له ببيع منتج من نوع :type.',
                'quantities'          => 'الكميات',
                'save-btn'            => 'حفظ',
                'select-condition'    => 'اختر الحالة',
                'title'               => 'تعيين المنتج',

                'seller-details' => [
                    'additional-info' => 'معلومات إضافية',
                    'approved'        => 'معتمد',
                    'disapproved'     => 'غير معتمد',
                    'no-of-products'  => 'عدد المنتجات',
                    'status'          => 'الحالة',
                    'suspended'       => 'معلق',
                    'title'           => 'تفاصيل البائع',
                ],

                'product-details' => [
                    'active'            => 'نشط',
                    'disable'           => 'تعطيل',
                    'title'             => 'تفاصيل المنتج',
                    'image-placeholder' => 'صورة المنتج',
                ],

                'images' => [
                    'info'  => 'يجب أن تكون دقة الصورة مثل 609 بكسل × 560 بكسل',
                    'title' => 'الصور',
                ],

                'videos' => [
                    'error' => 'تحذير: قد لا يكون حجم الفيديو أكبر من :max كيلوبايت. يرجى اختيار ملف أصغر.',
                    'info'  => 'يجب أن يكون حجم الفيديو الأقصى مثل :size',
                    'title' => 'الفيديوهات',
                ],

                'configurable' => [
                    'delete-btn'        => 'حذف',
                    'edit-btn'          => 'تحرير',
                    'image-placeholder' => 'صورة المنتج',
                    'qty'               => 'الكمية - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'التغييرات',

                    'edit' => [
                        'images'     => 'الصور',
                        'price'      => 'السعر',
                        'quantities' => 'الكميات',
                        'save-btn'   => 'حفظ',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'إضافة رابط',
                        'delete-btn'  => 'حذف',
                        'edit-btn'    => 'تحرير',
                        'empty-info'  => 'لإنشاء رابط على الفور.',
                        'empty-title' => 'إضافة رابط',
                        'file'        => 'ملف : ',
                        'info'        => 'يتيح نوع المنتج قابل للتنزيل بيع المنتجات الرقمية، مثل الكتب الإلكترونية، تطبيقات البرمجيات، الموسيقى، الألعاب، وما إلى ذلك.',
                        'sample-file' => 'ملف عينة : ',
                        'sample-url'  => 'عنوان URL للعينة : ',
                        'title'       => 'روابط قابلة للتنزيل',
                        'url'         => 'عنوان URL : ',

                        'update-create' => [
                            'downloads'   => 'التنزيل مسموح به',
                            'file'        => 'ملف',
                            'file-type'   => 'نوع الملف',
                            'name'        => 'العنوان',
                            'price'       => 'السعر',
                            'sample'      => 'العينة',
                            'sample-type' => 'نوع العينة',
                            'save-btn'    => 'حفظ',
                            'title'       => 'الرابط',
                            'url'         => 'عنوان URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'إضافة عينة',
                        'delete-btn'  => 'حذف',
                        'edit-btn'    => 'تحرير',
                        'empty-info'  => 'لإنشاء عينة على الفور.',
                        'empty-title' => 'إضافة عينة',
                        'file'        => 'ملف : ',
                        'info'        => 'يتيح نوع المنتج قابل للتنزيل بيع المنتجات الرقمية، مثل الكتب الإلكترونية، تطبيقات البرمجيات، الموسيقى، الألعاب، وما إلى ذلك.',
                        'title'       => 'عينات قابلة للتنزيل',
                        'url'         => 'عنوان URL : ',

                        'update-create' => [
                            'file'      => 'ملف',
                            'file-type' => 'نوع الملف',
                            'name'      => 'العنوان',
                            'save-btn'  => 'حفظ',
                            'title'     => 'الرابط',
                            'url'       => 'عنوان URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'رجوع',
                'suspended'      => 'مُعلق',
                'title'          => 'تحرير البائع',
                'update-btn'     => 'تحديث البائع',
                'update-success' => 'تم تحديث البائع بنجاح.',

                'shop' => [
                    'address'          => 'العنوان',
                    'street-address'   => 'عنوان الشارع',
                    'city'             => 'المدينة',
                    'country'          => 'الدولة',
                    'description'      => 'الوصف',
                    'email'            => 'البريد الإلكتروني',
                    'name'             => 'الاسم',
                    'phone-number'     => 'رقم الهاتف',
                    'postcode'         => 'الرمز البريدي',
                    'select'           => 'تحديد',
                    'shop-title'       => 'عنوان المتجر',
                    'state'            => 'الولاية',
                    'title'            => 'تفاصيل المتجر',
                    'url'              => 'رابط المتجر',
                ],

                'profile' => [
                    'banner'       => 'فلاش الملف الشخصي',
                    'banner-size'  => 'يجب أن يكون حجم الفلاش كما يلي: 300 بكسل × 200 بكسل',
                    'logo'         => 'شعار الملف الشخصي',
                    'logo-size'    => 'يجب أن يكون حجم الشعار كما يلي: 125 بكسل × 125 بكسل',
                    'social-links' => ':name رابط',
                    'title'        => 'تفاصيل الملف الشخصي',
                ],

                'allowed-product' => [
                    'title'  => 'المنتجات المسموح بها',
                ],

                'minimum-order-amount' => [
                    'title'  => 'الحد الأدنى لمبلغ الطلب',
                ],

                'google-analytics-id' => [
                    'title'  => 'معرف Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'النسبة المئوية',
                    'status'     => 'الحالة',
                    'title'      => 'عمولة البائع',
                ],

                'meta-info' => [
                    'meta-description' => 'وصف الوسائط',
                    'meta-keyword'     => 'الكلمات الرئيسية للوسائط',
                    'meta-title'       => 'عنوان الوسائط',
                    'title'            => 'معلومات الوسائط',
                ],

                'policy' => [
                    'privacy'  => 'سياسة الخصوصية',
                    'return'   => 'سياسة الإرجاع',
                    'shipping' => 'سياسة الشحن',
                    'title'    => 'السياسات',
                ],

                'channels' => [
                    'title' => 'القناة',
                ],

                'users' => [
                    'email' => 'البريد الإلكتروني',
                    'id'    => 'المعرف',
                    'name'  => 'الاسم',
                    'phone' => 'رقم الهاتف',
                    'title' => 'المستخدمون',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'إضافة منتجات',
                'delete-success' => 'تم حذف المنتج بنجاح.',
                'title'          => 'المنتجات',
                'update-success' => 'تم تحديث المنتج بنجاح.',

                'datagrid' => [
                    'approved'       => 'تمت الموافقة',
                    'delete'         => 'حذف',
                    'disapproved'    => 'تم رفضه',
                    'flags'          => 'العلامات',
                    'id'             => 'المعرف',
                    'is-owner'       => 'هو المالك',
                    'no'             => 'لا',
                    'out-of-stock'   => 'إنتهى من المخزن',
                    'price'          => 'السعر',
                    'product-id'     => 'المعرف - :product_id',
                    'product-name'   => 'اسم المنتج',
                    'product-number' => 'رقم المنتج',
                    'product-type'   => 'نوع المنتج',
                    'quantity'       => 'الكمية',
                    'seller-name'    => 'اسم البائع',
                    'sku'            => 'رمز SKU',
                    'status'         => 'الحالة',
                    'total-flags'    => 'إجمالي العلامات: :count',
                    'total-quantity' => ':quantity متاحة',
                    'update-status'  => 'تحديث الحالة',
                    'yes'            => 'نعم',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'أعلام المنتج',

                    'datagrid' => [
                        'customer-email' => 'البريد الإلكتروني للعميل',
                        'customer-name'  => 'اسم العميل',
                        'date'           => 'التاريخ',
                        'id'             => 'المعرف',
                        'reason'         => 'السبب',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'تفاصيل التقييم',
                'title'          => 'تقييمات المنتج',

                'datagrid' => [
                    'approved'      => 'تمت الموافقة',
                    'comment'       => 'التعليق',
                    'customer-name' => 'اسم العميل',
                    'date'          => 'التاريخ',
                    'disapproved'   => 'تم رفضه',
                    'id'            => 'المعرف',
                    'images'        => 'الصور',
                    'pending'       => 'قيد الانتظار',
                    'product'       => 'المنتج',
                    'product-name'  => 'اسم المنتج',
                    'rating'        => 'التقييم',
                    'review-id'     => 'المعرف - :review_id',
                    'shop-title'    => 'عنوان المتجر',
                    'status'        => 'الحالة',
                    'title'         => 'العنوان',
                    'update-status' => 'تحديث الحالة',
                    'view'          => 'عرض',
                ],

                'update-success' => 'تم تحديث تقييمات المنتج بنجاح.',
                'delete-success' => 'تم حذف تقييمات المنتج بنجاح.',
            ],
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'مراجعات البائع',

                'datagrid' => [
                    'approved'            => 'معتمد',
                    'comment'             => 'تعليق',
                    'customer-name'       => 'اسم العميل',
                    'date'                => 'التاريخ',
                    'delete'              => 'حذف',
                    'disapproved'         => 'مرفوض',
                    'id'                  => 'المعرف',
                    'mass-delete-success' => 'تم حذف مراجعات البائع بنجاح.',
                    'mass-update-success' => 'تم تحديث مراجعات البائع بنجاح.',
                    'pending'             => 'قيد الانتظار',
                    'rating'              => 'التقييم',
                    'review-id'           => 'المعرف - :review_id',
                    'review-title'        => 'عنوان المراجعة',
                    'seller-name'         => 'اسم البائع',
                    'shop-title'          => 'عنوان المتجر',
                    'status'              => 'الحالة',
                    'update-status'       => 'تحديث الحالة',
                ],
            ],

            'delete-success' => 'تم حذف مراجعة البائع بنجاح.',
        ],

        'orders' => [
            'index' => [
                'title' => 'الطلبات',

                'datagrid' => [
                    'canceled'        => 'تم الإلغاء',
                    'closed'          => 'مغلق',
                    'commission'      => 'العمولة',
                    'completed'       => 'تم الانتهاء',
                    'customer'        => 'العميل',
                    'date'            => 'تاريخ',
                    'discount'        => 'الخصم',
                    'email'           => 'البريد الإلكتروني',
                    'fraud'           => 'احتيال',
                    'gross-amt'       => 'المبلغ الإجمالي',
                    'id'              => 'المعرف',
                    'items'           => 'العناصر',
                    'location'        => 'الموقع',
                    'order-id'        => 'المعرّف - #:id',
                    'payment'         => 'الدفع',
                    'pending'         => 'قيد الانتظار',
                    'pending-payment' => 'الدفع قيد الانتظار',
                    'processing'      => 'قيد المعالجة',
                    'seller'          => 'البائع',
                    'seller-earn'     => 'الأرباح',
                    'shipment'        => 'الشحن',
                    'shop'            => 'المتجر',
                    'status'          => 'الحالة',
                    'view'            => 'عرض',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title'   => 'المعاملات',

                'datagrid' => [
                    'base-total'     => 'الإجمالي الأساسي',
                    'comment'        => 'التعليق',
                    'customer-name'  => 'اسم العميل',
                    'id'             => 'المعرف',
                    'seller-id'      => 'معرف البائع',
                    'seller-name'    => 'اسم البائع',
                    'transaction-id' => 'معرف المعاملة',
                    'view'           => 'عرض',
                ],
            ],

            'view' => [
                'commission'        => 'العمولة',
                'created-on'        => 'تم الإنشاء في :date',
                'name'              => 'الاسم',
                'payment-method'    => 'طريقة الدفع: :method',
                'price'             => 'السعر',
                'qty'               => 'الكمية',
                'seller-total'      => 'إجمالي البائع',
                'shipping-handling' => 'الشحن والتوصيل',
                'subtotal'          => 'المجموع الفرعي',
                'tax'               => 'الضريبة',
                'title'             => 'المعاملات #:transaction_id',
                'total'             => 'الإجمالي',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'إنشاء سبب',
                'delete-success'      => 'تم حذف سبب العلامة بنجاح.',
                'mass-delete-success' => 'تم حذف أسباب العلامة بنجاح.',
                'mass-update-success' => 'تم تحديث أسباب العلامة بنجاح.',
                'title'               => 'أسباب العلامة',

                'datagrid' => [
                    'delete'        => 'حذف',
                    'edit'          => 'تحرير',
                    'id'            => 'المعرف',
                    'name'          => 'الاسم',
                    'update-status' => 'تحديث الحالة',

                    'status' => [
                        'active'  => 'نشط',
                        'disable' => 'معطل',
                        'title'   => 'الحالة',
                    ],

                    'type' => [
                        'product' => 'المنتج',
                        'seller'  => 'البائع',
                        'title'   => 'النوع',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'المسؤول',
                'back-btn' => 'رجوع',
                'general'  => 'عام',
                'label'    => 'التسمية',
                'product'  => 'المنتج',
                'save-btn' => 'حفظ السبب',
                'seller'   => 'البائع',
                'status'   => 'الحالة',
                'title'    => 'إنشاء سبب',
                'type'     => 'النوع',
            ],

            'edit' => [
                'admin'    => 'المسؤول',
                'back-btn' => 'رجوع',
                'general'  => 'عام',
                'label'    => 'التسمية',
                'product'  => 'المنتج',
                'save-btn' => 'حفظ السبب',
                'seller'   => 'البائع',
                'status'   => 'الحالة',
                'title'    => 'تحرير السبب',
                'type'     => 'النوع',
            ],

            'create-success' => 'تم إنشاء سبب العلامة بنجاح.',
            'update-success' => 'تم تحديث سبب العلامة بنجاح.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'تعيين الفئة',
                'create-success' => 'تم تعيين الفئة بنجاح.',
                'delete-failed'  => 'فشل حذف التصنيف!',
                'delete-success' => 'تم حذف التصنيف بنجاح.',
                'title'          => 'فئات البائعين',
                'update-success' => 'تم تحديث التصنيف بنجاح.',

                'datagrid' => [
                    'delete' => 'حذف',
                    'edit'   => 'تحرير',
                    'id'     => 'المعرف',
                    'name'   => 'الاسم',
                ],
            ],

            'create' => [
                'back-btn'      => 'رجوع',
                'save-btn'      => 'حفظ التصنيف',
                'select-seller' => 'اختيار البائع',
                'seller'        => 'البائع',
                'title'         => 'تعيين الفئة',
            ],

            'edit' => [
                'back-btn'   => 'رجوع',
                'seller'     => 'البائع',
                'title'      => 'تحديث التصنيف',
                'update-btn' => 'تحديث التصنيف',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'التعليق',
                'no-amount-remaining'  => 'لا يوجد مبلغ متبقٍ للدفع!',
                'order-not-found'      => 'الطلب غير موجود!',
                'pay-btn'              => 'ادفع الآن',
                'pay-to-seller'        => 'الدفع للبائع',
                'payment-success'      => 'تم دفع البائع بنجاح!',
                'something-went-wrong' => 'حدث خطأ ما!',
                'title'                => 'طلب الدفع',

                'datagrid' => [
                    'already-paid'          => 'تم الدفع بالفعل',
                    'canceled'              => 'تم الإلغاء',
                    'closed'                => 'مغلق',
                    'completed'             => 'تم التنفيذ',
                    'customer-name'         => 'اسم العميل',
                    'date'                  => 'تاريخ',
                    'email'                 => 'البريد الإلكتروني',
                    'fraud'                 => 'احتيال',
                    'gross-amt'             => 'المبلغ الإجمالي',
                    'id'                    => 'معرف الطلب',
                    'invoice-pending'       => 'فاتورة قيد الانتظار',
                    'order-canceled'        => 'تم إلغاء الطلب',
                    'order-id'              => 'الهوية #:id',
                    'pay'                   => 'دفع',
                    'pending'               => 'قيد الانتظار',
                    'pending-payment'       => 'قيد الدفع',
                    'processing'            => 'قيد التنفيذ',
                    'refunded'              => 'تمت إعادة المبلغ',
                    'remaining-total'       => 'الإجمالي المتبقي',
                    'request-payment'       => 'طلب الدفع',
                    'seller'                => 'البائع',
                    'seller-total-invoiced' => 'إجمالي البائع المفوتر',
                    'shop'                  => 'المتجر',
                    'status'                => 'الحالة',
                    'total-paid'            => 'الإجمالي المدفوع',
                    'view'                  => 'عرض',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'حظر البائع',
                'block-success'        => 'تم حظر البائع بنجاح!',
                'chat-history-cleared' => 'تم مسح سجل الدردشة بنجاح!',
                'clear-chat-history'   => 'مسح سجل الدردشة',
                'exit'                 => 'خروج',
                'message-failed'       => 'فشل في إرسال الرسالة!',
                'message-sent'         => 'تم إرسال الرسالة بنجاح!',
                'no-message'           => 'لم يتم العثور على رسائل!',
                'search'               => 'بحث',
                'search-message'       => 'بحث عن رسالة',
                'seller-blocked'       => 'لقد قمت بحظر هذا البائع. لا يمكنك إرسال رسالة إلى هذا البائع.',
                'sellers'              => 'البائعون',
                'title'                => 'الاتصالات',
                'type-message'         => 'اكتب رسالتك هنا...',
                'unblock-seller'       => 'إلغاء حظر البائع',
                'unblock-success'      => 'تم إلغاء حظر البائع بنجاح!',
                'welcome-message'      => 'مرحبًا بك في اتصالات السوق!',

                'filters' => [
                    'all-messages'      => 'جميع الرسائل',
                    'prev-fifteen-days' => 'الخمسة عشر يومًا الماضية',
                    'prev-seven-days'   => 'السبعة أيام الماضية',
                    'prev-six-months'   => 'الأشهر الستة الماضية',
                    'prev-thirty-days'  => 'الأيام الثلاثين الماضية',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'مصادر المخزون',

                'datagrid' => [
                    'active'      => 'نشط',
                    'code'        => 'الكود',
                    'id'          => 'المعرف',
                    'inactive'    => 'غير نشط',
                    'name'        => 'الاسم',
                    'seller-name' => 'اسم البائع',
                    'shop-title'  => 'عنوان المتجر',
                    'status'      => 'الحالة',
                ],

                'view' => [
                    'active'         => 'نشط',
                    'address'        => 'عنوان المصدر',
                    'city'           => 'المدينة',
                    'code'           => 'الكود',
                    'contact-email'  => 'البريد الإلكتروني',
                    'contact-fax'    => 'الفاكس',
                    'contact-info'   => 'معلومات الاتصال',
                    'contact-name'   => 'الاسم',
                    'contact-number' => 'رقم الاتصال',
                    'country'        => 'الدولة',
                    'description'    => 'الوصف',
                    'general-info'   => 'المعلومات العامة',
                    'inactive'       => 'غير نشط',
                    'latitude'       => 'خط العرض',
                    'longitude'      => 'خط الطول',
                    'name'           => 'الاسم',
                    'postcode'       => 'الرمز البريدي',
                    'priority'       => 'الأولوية',
                    'seller-info'    => 'معلومات البائع',
                    'seller-name'    => 'اسم البائع',
                    'settings'       => 'الإعدادات',
                    'shop-title'     => 'عنوان المتجر',
                    'state'          => 'الولاية',
                    'street'         => 'الشارع',
                    'title'          => 'مصدر المخزون #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'تثبيت حزمة السوق.',
            'migrate'     => 'جاري ترحيل جميع الجداول إلى قاعدة البيانات (قد يستغرق بعض الوقت)...',
            'seed'        => 'جاري إدخال البيانات في قاعدة البيانات...',
            'publish'     => 'جاري نشر الأصول والتكوينات...',
            'cache'       => 'جاري مسح ذاكرة التخزين المؤقت...',
            'finish'      => 'تم تثبيت حزمة السوق بنجاح.',
        ],

        'version' => [
            'description' => 'يعرض الإصدار الحالي من حزمة السوق.',
            'comment'     => 'إصدار السوق: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'عزيزي :customer_name',
        'dear-admin'  => 'عزيزي المشرف',
        'dear-seller' => 'عزيزي البائع',

        'seller' => [
            'registration' => [
                'date'        => 'تاريخ التسجيل:',
                'description' => 'نحن متحمسون لإبلاغك بتسجيل بائع جديد على منصتنا. يرجى أن تأخذ لحظة لترحيب البائع بمنصتنا.',
                'details'     => 'فيما يلي التفاصيل:',
                'email'       => 'عنوان البريد الإلكتروني:',
                'greeting'    => 'آمل أن تكون هذه الرسالة وجدتك بحال جيدة.',
                'name'        => 'اسم البائع:',
                'shop'        => 'رابط المتجر:',
                'subject'     => 'تسجيل بائع جديد',
            ],

            'forgot-password' => [
                'description'    => 'تتلقى هذا البريد الإلكتروني لأننا تلقينا طلبًا لإعادة تعيين كلمة المرور الخاصة بحسابك.',
                'greeting'       => 'نسيت كلمة المرور!',
                'reset-password' => 'إعادة تعيين كلمة المرور',
                'subject'        => 'بريد إلكتروني لإعادة تعيين كلمة المرور',
            ],

            'welcome' => [
                'description' => 'مرحبًا بك! نحن متحمسون لاستضافتك ضمن عائلتنا. تسجيلك كبائع يضيف قيمة هائلة لمنصتنا، ونتطلع إلى شراكة ناجحة معك.',
                'greeting'    => 'مرحبًا وشكرًا لتسجيلك معنا!',
                'subject'     => 'إشعار الترحيب بالبائع',
            ],

            'approval' => [
                'approved'    => 'تم قبول طلبك لتصبح بائعًا.',
                'disapproved' => 'تم رفض طلبك لتصبح بائعًا.',
                'greeting'    => 'مرحبًا وشكرًا لتسجيلك معنا!',
                'subject'     => 'إشعار الموافقة على البائع',
            ],

            'update' => [
                'description' => 'تم تحديث ملفك بنجاح.',
                'greeting'    => 'آمل أن تكون هذه الرسالة وجدتك بحال جيدة.',
                'subject'     => 'إشعار تحديث ملف البائع',
            ],

            'good-bye' => [
                'description' => 'كان العمل معك ممتعًا، وأنا حقًا ممتن لاحترافيتك وتفانيك، وجودة منتجات/خدماتك العالية. لقد لفت انتباهنا التزامك بضمان رضا العملاء، وكانت هذه عاملًا رئيسيًا في تجربتنا الإيجابية.',
                'greeting'    => 'آمل أن تكون هذه الرسالة وجدتك بحال جيدة.',
                'subject'     => 'إشعار وداع البائع',
            ],

            'product-approval' => [
                'approved'    => 'تمت الموافقة على منتجك :name.',
                'disapproved' => 'تم رفض منتجك :name.',
                'greeting'    => 'مرحبًا وشكرًا لتسجيلك معنا!',
                'subject'     => 'إشعار موافقة المنتج من البائع',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'لديك طلب جديد :order_id تم وضعه في :created_at',
                    'subject'  => 'تأكيد طلب جديد',
                    'summary'  => 'ملخص الطلب',
                    'title'    => 'تأكيد الطلب!',
                ],

                'canceled' => [
                    'greeting' => 'تم إلغاء الطلب :order_id',
                    'subject'  => 'تأكيد إلغاء الطلب',
                    'summary'  => 'ملخص الطلب',
                    'title'    => 'تم إلغاء الطلب!',
                ],

                'billing-address'   => 'عنوان الفواتير',
                'contact'           => 'الاتصال',
                'discount'          => 'الخصم',
                'grand-total'       => 'المجموع الكلي',
                'name'              => 'الاسم',
                'payment'           => 'الدفع',
                'price'             => 'السعر',
                'qty'               => 'الكمية',
                'shipping'          => 'الشحن',
                'shipping-address'  => 'عنوان الشحن',
                'shipping-handling' => 'تكلفة الشحن والتسليم',
                'sku'               => 'الرمز',
                'subtotal'          => 'المجموع الفرعي',
                'tax'               => 'الضريبة',
            ],

            'payment-request' => [
                'greeting'  => 'آمل أن تجد هذه الرسالة تجدها في حالة جيدة.',
                'paid'      => 'مرحبًا.. لقد تلقيت الدفعة للطلب :order_id.',
                'requested' => 'البائع :seller_name مطلوب دفع طلب :order_id.',
                'subject'   => 'إشعار بطلب دفع البائع',
            ],
        ],

        'contact-seller' => [
            'email'    => 'البريد الإلكتروني:- :email',
            'greeting' => 'آمل أن تكون بخير.',
            'info'     => 'مرحبًا، :name لديه سؤال لك. يرجى مراجعة التفاصيل أدناه.',
            'query'    => 'الاستعلام: :query',
            'subject'  => 'إشعار الاتصال بالبائع',
            'topic'    => 'الموضوع: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'مرحبًا، ":name" أبلغ عن مشكلة بخصوص منتج البائع ":seller_name" المنتج ":product_name". يرجى مراجعة التفاصيل أدناه.',
            'greeting'   => 'آمل أن تكون هذه الرسالة قد وصلتك وأنت بخير.',
            'reason'     => 'السبب:- :reason',
            'seller-msg' => 'مرحبًا، ":name" أبلغ عن مشكلة تتعلق بمنتجك ":product_name". يرجى مراجعة التفاصيل أدناه.',
            'subject'    => 'إشعار تقرير المنتج',
        ],

        'report-seller' => [
            'admin-msg'  => 'مرحبًا، :name قد قدم بلاغًا ضد :seller_name. يرجى مراجعة التفاصيل أدناه.',
            'greeting'   => 'آمل أن يجد هذا الرسالة بك في حالة جيدة.',
            'reason'     => 'السبب: :reason',
            'seller-msg' => 'مرحبًا، :name قد قدم بلاغًا بشأن مشكلة تخصك. يرجى مراجعة التفاصيل أدناه.',
            'subject'    => 'إشعار بلاغ البائع',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'إنشاء حساب بائع في فيلوسيتي',
            'banner-description'  => 'يمكن أن تكون فيلوسيتي منصة رائعة لبيع منتجاتك للشركات الحديثة في الهند. باتباع هذه النصائح، يمكنك إعداد نفسك للنجاح كبائع في فيلوسيتي!',
            'banner-btn-title'    => 'افتح المتجر',
            'feature-title'       => 'لماذا يحب البائعون البيع على فيلوسيتي؟',
            'feature-description' => 'يحب البائعون المنصات عالية السرعة لأنها توفر إمكانية زيادة المبيعات، والتعرض الأفضل، وتجربة بيع فعالة يمكن أن تساهم في نمو الأعمال والنجاح.',
            'feature-box1-title'  => 'فرص مبيعات متزايدة',
            'feature-box1-desc'   => 'يحب البائعون المنصات عالية السرعة لأنها توفر إمكانية زيادة المبيعات، والتعرض الأفضل، وتجربة بيع فعالة يمكن أن تساهم في نمو الأعمال والنجاح.',
            'feature-box2-title'  => 'تحول أسرع',
            'feature-box2-desc'   => 'تميل المنتجات إلى البيع بسرعة أكبر على المنصات عالية السرعة، مما يؤدي إلى دوران أسرع للمخزون وتوليد الإيرادات للبائعين.',
            'feature-box3-title'  => 'رؤية محسنة',
            'feature-box3-desc'   => 'تقدم هذه المنصات رؤية أكبر وتعرضًا أفضل لمنتجات البائعين، مما يؤدي إلى المزيد من المشاهدات والمبيعات المحتملة.',
            'feature-box4-title'  => 'الكفاءة والراحة',
            'feature-box4-desc'   => 'غالبًا ما تحتوي المنصات عالية السرعة على عمليات وأدوات مبسطة تجعل البيع أكثر كفاءة، مما يوفر للبائعين الوقت والجهد في إدارة أعمالهم عبر الإنترنت.',
            'journey-title'       => 'ابدأ رحلتك على فيلوسيتي',
            'journey-description' => 'ابدأ البيع مع عملاء كبار حول العالم، على مدار الساعة.',
            'journey-step1-title' => 'كن بائعًا',
            'journey-step1-desc'  => 'قم بإعداد متجرك، مع جميع المعلومات الأساسية.',
            'journey-step2-title' => 'قائمة المنتجات',
            'journey-step2-desc'  => 'أضف المنتجات في المتجر ليتمكن العملاء من مشاهدتها وشرائها.',
            'journey-step3-title' => 'استلام الطلب',
            'journey-step3-desc'  => 'استلم الطلبات من مجموعة واسعة من العملاء حول العالم.',
            'journey-step4-title' => 'تسليم المنتج',
            'journey-step4-desc'  => 'بمجرد تسليم المنتج واستلام الدفع',
            'journey-step5-title' => 'الدفع',
            'journey-step5-desc'  => 'طلب الدفع، احصل على الدفع بعد خصم العمولة.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'منتج تالف',
            'damaged-product-sold'      => 'تم بيع منتج تالف من قبل البائع',
            'duplicate-product'         => 'منتج مكرر',
            'duplicate-product-sold'    => 'تم بيع منتج مكرر من قبل البائع',
            'missing-product-parts'     => 'أجزاء المنتج مفقودة',
            'over-price-product'        => 'منتج بسعر مبالغ فيه',
            'over-price-product-sold'   => 'تم بيع منتج بسعر مبالغ فيه من قبل البائع',
            'poor-product-quality'      => 'جودة المنتج سيئة',
            'poor-product-quality-sold' => 'تم بيع منتج بجودة سيئة من قبل البائع',
            'receive-wrong-product'     => 'تلقي منتج خاطئ',
            'wrong-product-sold'        => 'تم بيع منتج خاطئ من قبل البائع',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'تحميل',
                    'export'     => 'تصدير',
                    'no-records' => 'لا يوجد شيء للتصدير',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'الصفحة الرئيسية',
                    'logout'     => 'تسجيل الخروج',
                    'my-profile' => 'ملفي الشخصي',
                    'visit-shop' => 'زيارة المتجر',

                    'mega-search' => [
                        'customers'                       => 'العملاء',
                        'explore-all-customers'           => 'استكشاف جميع العملاء',
                        'explore-all-matching-customers'  => 'استكشاف جميع العملاء المطابقين لـ “:query” (:count)',
                        'explore-all-matching-orders'     => 'استكشاف جميع الطلبات المطابقة لـ “:query” (:count)',
                        'explore-all-matching-products'   => 'استكشاف جميع المنتجات المطابقة لـ “:query” (:count)',
                        'explore-all-orders'              => 'استكشاف جميع الطلبات',
                        'explore-all-products'            => 'استكشاف جميع المنتجات',
                        'orders'                          => 'الطلبات',
                        'products'                        => 'المنتجات',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'بحث ميجا',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'طي',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'إضافة صورة',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'فقط ملفات الصور (.jpeg, .jpg, .png, ..) مسموح بها.',
                ],

                'videos' => [
                    'add-video-btn'     => 'إضافة فيديو',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'فقط ملفات الفيديو (.mp4, .mov, .ogg ..) مسموح بها.',
                ],

                'documents' => [
                    'add-document-btn'  => 'إضافة مستند',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'فقط ملفات المستندات (:types ..) مسموح بها.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'أمام',
                    'next'       => 'التالي',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'Powerpoint',
                    'size'       => 'الحجم',
                    'text'       => 'النص',
                    'use-cases'  => 'حالات الاستخدام',
                    'word'       => 'Word',
                    'zoom'       => 'تكبير',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'الحجوزات',
            'communication'     => 'الاتصالات',
            'customers'         => 'العملاء',
            'dashboard'         => 'لوحة التحكم',
            'extensions'        => 'الإضافات',
            'general'           => 'عام',
            'inventory-sources' => 'مصادر المخزون',
            'manage-profile'    => 'إدارة الملف الشخصي',
            'orders'            => 'الطلبات',
            'product-reviews'   => 'تقييمات المنتجات',
            'products'          => 'المنتجات',
            'reporting'         => 'التقارير',
            'roles'             => 'الأدوار',
            'sales'             => 'المبيعات',
            'seller-reviews'    => 'تقييمات البائع',
            'settings'          => 'الإعدادات',
            'transaction'       => 'المعاملات',
            'users'             => 'المستخدمين',
        ],

        'acl' => [
            'assign'            => 'تعيين',
            'bookings'          => 'الحجوزات',
            'cancel'            => 'إلغاء',
            'communication'     => 'الاتصالات',
            'create'            => 'إنشاء',
            'customers'         => 'العملاء',
            'dashboard'         => 'لوحة القيادة',
            'delete'            => 'حذف',
            'edit'              => 'تعديل',
            'extensions'        => 'الإضافات',
            'general'           => 'عام',
            'inventory-sources' => 'مصادر المخزون',
            'invoice'           => 'فاتورة',
            'orders'            => 'الطلبات',
            'payment-request'   => 'طلب دفع',
            'print'             => 'طباعة',
            'print-invoice'     => 'طباعة الفاتورة',
            'product-reviews'   => 'مراجعات المنتج',
            'products'          => 'المنتجات',
            'reporting'         => 'التقارير',
            'sales'             => 'المبيعات',
            'seller-reviews'    => 'مراجعات البائع',
            'settings'          => 'الإعدادات',
            'shipment'          => 'الشحن',
            'transactions'      => 'المعاملات',
            'view'              => 'عرض',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'إضافة منتج جديد',
            'assign'            => 'تعيين',
            'bookings'          => 'الحجوزات',
            'communication'     => 'الاتصالات',
            'create'            => 'إنشاء',
            'customers'         => 'العملاء',
            'dashboard'         => 'لوحة التحكم',
            'edit'              => 'تعديل',
            'extensions'        => 'الإضافات',
            'general'           => 'عام',
            'inventory-sources' => 'مصادر المخزون',
            'manage-profile'    => 'إدارة الملف الشخصي',
            'orders'            => 'الطلبات',
            'product-reviews'   => 'تقييمات المنتجات',
            'products'          => 'المنتجات',
            'reporting'         => 'التقارير',
            'roles'             => 'الأدوار',
            'sales'             => 'المبيعات',
            'seller-reviews'    => 'تقييمات البائع',
            'settings'          => 'الإعدادات',
            'title'             => 'الملف الشخصي',
            'transaction'       => 'المعاملات',
            'users'             => 'المستخدمين',
            'view'              => 'عرض',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'تسجيل الدخول',
            'create-your-account' => 'أنشئ حسابك',
            'email'               => 'البريد الإلكتروني',
            'footer'              => '© حقوق النشر 2010 - :current_year، Webkul Software (مسجلة في الهند). كل الحقوق محفوظة.',
            'forgot-pass'         => 'نسيت كلمة المرور؟',
            'form-login-text'     => 'إذا كان لديك حساب، قم بتسجيل الدخول باستخدام عنوان بريدك الإلكتروني.',
            'invalid-credentials' => 'الرجاء التحقق من بيانات الاعتماد الخاصة بك والمحاولة مرة أخرى.',
            'new-seller'          => 'بائع جديد؟',
            'not-approved'        => 'تحتاج تنشيطك إلى موافقة المسؤول',
            'page-title'          => 'تسجيل دخول البائع',
            'password'            => 'كلمة المرور',
            'show-password'       => 'إظهار كلمة المرور',
            'suspended-message'   => 'تم تعليق حسابك. اتصل بالمسؤول لأي استفسار.',
            'title'               => 'تسجيل الدخول',
        ],

        'signup' => [
            'account-exists'   => 'لديك حساب بالفعل؟',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'تسجيل',
            'confirm-pass'     => 'تأكيد كلمة المرور',
            'email'            => 'البريد الإلكتروني',
            'footer'           => '© حقوق النشر 2010 - :current_year، Webkul Software (مسجلة في الهند). كل الحقوق محفوظة.',
            'form-signup-text' => 'إذا كنت جديدًا في متجرنا، فنحن سعداء بانضمامك كعضو.',
            'name'             => 'الاسم',
            'page-title'       => 'كن بائعًا',
            'password'         => 'كلمة المرور',
            'sign-in-button'   => 'تسجيل الدخول',
            'success'          => 'تم إنشاء الحساب بنجاح.',
            'url'              => 'رابط المتجر',
        ],

        'forgot-password' => [
            'already-sent'         => 'لقد أرسلنا بالفعل رابط إعادة تعيين كلمة المرور إلى بريدك الإلكتروني.',
            'back'                 => 'العودة لتسجيل الدخول؟',
            'bagisto'              => 'Bagisto',
            'email'                => 'البريد الإلكتروني',
            'email-not-exist'      => 'لا يمكننا العثور على مستخدم بهذا البريد الإلكتروني.',
            'footer'               => '© حقوق النشر 2010 - :current_year، Webkul Software (مسجلة في الهند). كل الحقوق محفوظة.',
            'forgot-password-text' => 'إذا نسيت كلمة المرور الخاصة بك، استعادتها عن طريق إدخال عنوان بريدك الإلكتروني.',
            'page-title'           => 'هل نسيت كلمة المرور؟',
            'reset-link-sent'      => 'لقد قمنا بإرسال رابط إعادة تعيين كلمة المرور إلى بريدك الإلكتروني.',
            'sign-in-button'       => 'تسجيل الدخول',
            'submit'               => 'إعادة تعيين كلمة المرور',
            'title'                => 'استرجاع كلمة المرور',
        ],

        'reset-password' => [
            'back-link-title'  => 'العودة لتسجيل الدخول',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'تأكيد كلمة المرور',
            'email'            => 'البريد الإلكتروني المسجل',
            'footer'           => '© حقوق النشر 2010 - :current_year، Webkul Software (مسجلة في الهند). كل الحقوق محفوظة.',
            'password'         => 'كلمة المرور',
            'submit-btn-title' => 'إعادة تعيين كلمة المرور',
            'title'            => 'إعادة تعيين كلمة المرور',
        ],

        'dashboard' => [
            'add-product'           => 'إضافة منتج',
            'avg-order-sell'        => 'متوسط مبيعات الطلب',
            'category-info'         => 'لم يتم العثور على فئة في الفترة المحددة',
            'complete-profile-link' => 'أكمل ملفك الشخصي &rarr;',
            'completed-orders'      => 'الطلبات المكتملة (:count)',
            'customer-info'         => 'لم يتم العثور على عميل في الفترة المحددة',
            'date-range'            => 'نطاق التاريخ',
            'empty-threshold'       => 'حد الفارغ',
            'empty-threshold-desc'  => 'لا يوجد منتج متاح',
            'end-date'              => 'تاريخ الانتهاء',
            'hi-comment'            => 'قم بمراجعة بسرعة ما يحدث في متجرك.',
            'hi-seller'             => 'مرحبًا! :seller_name',
            'month'                 => 'هذا الشهر',
            'no-category'           => 'لا توجد بيانات متاحة',
            'no-customer'           => 'لا توجد بيانات متاحة',
            'no-record-available'   => 'لا توجد سجلات متاحة.',
            'order-count'           => 'عدد الطلبات: :total',
            'overall-details'       => 'تفاصيل شاملة',
            'pending-orders'        => 'الطلبات المعلقة (:count)',
            'per-unit'              => ':price/الوحدة',
            'processing-orders'     => 'الطلبات قيد التنفيذ (:count)',
            'product-info'          => 'إضافة منتجات ذات صلة أثناء التنقل',
            'profile-score'         => 'درجة الملف الشخصي',
            'profile-score-desc'    => 'قم بزيادة ظهورك إلى أقصى حد من خلال إبقاء معلومات ملفك الشخصي مكتملة.',
            'qty-stock'             => ':qty في المخزون',
            'refunded-orders'       => 'الطلبات المستردة (:count)',
            'remaining-payout'      => 'المبلغ المتبقي للدفع',
            'start-date'            => 'تاريخ البداية',
            'stock-threshold'       => 'حد المخزون',
            'title'                 => 'لوحة التحكم',
            'today'                 => 'اليوم',
            'top-categories'        => 'أفضل الفئات',
            'top-customers'         => 'العملاء الأكثر مبيعًا',
            'top-products'          => 'المنتجات الأكثر مبيعًا',
            'total-customers'       => 'إجمالي العملاء',
            'total-orders'          => 'إجمالي الطلبات',
            'total-payout'          => 'إجمالي الدفع',
            'total-sale'            => 'المبيعات الإجمالية: :total',
            'total-sales'           => 'إجمالي المبيعات',
            'view-all-btn'          => 'عرض الكل',
            'visitor-count'         => 'عدد الزوار - :count',
            'week'                  => 'هذا الأسبوع',
            'year'                  => 'هذا العام',
        ],

        'orders' => [
            'index' => [
                'title' => 'الطلبات',

                'datagrid' => [
                    'canceled'        => 'ملغي',
                    'closed'          => 'مغلق',
                    'commission'      => 'العمولة',
                    'completed'       => 'مكتمل',
                    'customer'        => 'العميل',
                    'date'            => 'التاريخ',
                    'discount'        => 'التخفيض',
                    'email'           => 'البريد الإلكتروني',
                    'fraud'           => 'احتيال',
                    'gross-amt'       => 'المبلغ الإجمالي',
                    'id'              => 'المعرف',
                    'invoice-pending' => 'فاتورة في انتظار الدفع',
                    'items'           => 'العناصر',
                    'location'        => 'الموقع',
                    'order-id'        => 'رقم الطلب - #:id',
                    'paid'            => 'تم الدفع',
                    'payment'         => 'الدفع',
                    'payment-request' => 'طلب الدفع',
                    'pending'         => 'قيد الانتظار',
                    'pending-payment' => 'في انتظار الدفع',
                    'processing'      => 'تحت المعالجة',
                    'refunded'        => 'مرتجع',
                    'requested'       => 'مطلوب',
                    'seller-earn'     => 'أرباح البائع',
                    'shipment'        => 'الشحن',
                    'status'          => 'الحالة',
                    'transaction'     => 'المعاملة',
                    'view'            => 'عرض',
                ],

                'payment-req-success'  => 'تم إرسال طلب الدفع بنجاح',
                'something-went-wrong' => 'حدث خطأ ما!',
            ],

            'view' => [
                'admin-commission'           => 'عمولة الإدارة',
                'billing-address'            => 'عنوان الفوترة',
                'by-customer'                => 'من قبل العميل - :name',
                'cancel-btn'                 => 'إلغاء',
                'cancel-confirm-msg'         => 'هل أنت متأكد أنك تريد إلغاء هذا الطلب؟',
                'cancel-error-msg'           => 'لا يمكن إلغاء الطلب',
                'cancel-success-msg'         => 'تم إلغاء الطلب بنجاح',
                'canceled'                   => 'ملغي',
                'closed'                     => 'مغلق',
                'completed'                  => 'مكتمل',
                'discount'                   => 'التخفيض',
                'fraud'                      => 'احتيال',
                'grand-total'                => 'الإجمالي الكلي',
                'info'                       => 'المعلومات',
                'item-canceled'              => 'تم الإلغاء (:qty_canceled)',
                'item-invoice'               => 'تم الفوترة (:qty_invoiced)',
                'item-ordered'               => 'تم الطلب (:qty_ordered)',
                'item-refunded'              => 'تمت إعادة المبلغ (:qty_refunded)',
                'item-shipped'               => 'تم الشحن (:qty_shipped)',
                'item-status'                => 'حالة العنصر',
                'payment-method'             => 'طريقة الدفع',
                'pending'                    => 'قيد الانتظار',
                'pending_payment'            => 'في انتظار الدفع',
                'permission-error'           => 'ليس لديك إذن لإلغاء الطلب',
                'place-on'                   => 'تم الطلب في : :date',
                'price'                      => 'السعر',
                'price-excl-tax'             => 'السعر (بدون ضريبة)',
                'price-incl-tax'             => 'السعر (شامل الضريبة)',
                'processing'                 => 'تحت المعالجة',
                'product'                    => 'المنتج',
                'shipping-address'           => 'عنوان الشحن',
                'shipping-handling'          => 'الشحن والتسليم',
                'shipping-handling-excl-tax' => 'الشحن والتعامل (بلا ضريبة)',
                'shipping-handling-incl-tax' => 'الشحن والتعامل (مع ضريبة)',
                'shipping-method'            => 'طريقة الشحن',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'الإجمالي الفرعي',
                'sub-total-excl-tax'         => 'المجموع الفرعي (بلا ضريبة)',
                'sub-total-incl-tax'         => 'المجموع الفرعي (مع ضريبة)',
                'tax'                        => 'الضريبة',
                'tax-amount'                 => 'مبلغ الضريبة',
                'tax-percent'                => 'نسبة الضريبة',
                'title'                      => 'الطلب #:order_id',
                'total'                      => 'الإجمالي',
                'total-due'                  => 'المجموع المستحق',
                'total-paid'                 => 'المجموع المدفوع',
                'total-refunded'             => 'المجموع المرتجع',
                'total-seller-amt'           => 'إجمالي مبلغ البائع',

                'invoices' => [
                    'bank-details'               => 'تفاصيل البنك',
                    'bill-to'                    => 'فاتورة إلى',
                    'contact'                    => 'الاتصال',
                    'contact-number'             => 'رقم الاتصال',
                    'created-on'                 => 'تم الإنشاء في: :date_time',
                    'date'                       => 'تاريخ الفاتورة',
                    'discount'                   => 'الخصم',
                    'excl-tax'                   => 'بدون الضريبة:',
                    'grand-total'                => 'الإجمالي الكلي',
                    'individual-invoice'         => 'فاتورة #:invoice_id',
                    'invoice'                    => 'فاتورة',
                    'invoice-id'                 => 'معرف الفاتورة',
                    'name'                       => 'الاسم',
                    'order-date'                 => 'تاريخ الطلب',
                    'order-id'                   => 'معرف الطلب',
                    'payment-method'             => 'طريقة الدفع',
                    'payment-terms'              => 'شروط الدفع',
                    'price'                      => 'السعر',
                    'print'                      => 'طباعة',
                    'product-name'               => 'اسم المنتج',
                    'qty'                        => 'الكمية',
                    'ship-to'                    => 'الشحن إلى',
                    'shipping-handling'          => 'الشحن والتوصيل',
                    'shipping-handling-excl-tax' => 'الشحن والتوصيل (بدون الضريبة)',
                    'shipping-handling-incl-tax' => 'الشحن والتوصيل (مع الضريبة)',
                    'shipping-method'            => 'طريقة الشحن',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'الإجمالي الفرعي',
                    'sub-total-excl-tax'         => 'الإجمالي الفرعي (بدون الضريبة)',
                    'sub-total-incl-tax'         => 'الإجمالي الفرعي (مع الضريبة)',
                    'tax'                        => 'الضريبة',
                    'tax-amount'                 => 'مبلغ الضريبة',
                    'title'                      => 'الفواتير',
                    'vat-number'                 => 'رقم الضريبة',
                ],

                'shipments' => [
                    'carrier-title'       => 'عنوان الناقل',
                    'created-on'          => 'تم الإنشاء في :date_time',
                    'individual-shipment' => 'الشحنات #:track_number',
                    'inventory-source'    => 'مصدر المخزون',
                    'name'                => 'الاسم',
                    'qty'                 => 'الكمية',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'الشحنات',
                    'tracking-number'     => 'رقم التتبع',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'رسوم التعديل',
                    'adjustment-refund'          => 'استرداد التعديل',
                    'created-on'                 => 'تم الإنشاء في :date_time',
                    'discount'                   => 'الخصم',
                    'grand-total'                => 'الإجمالي الكلي',
                    'individual-refund'          => 'استرداد #:refund_id',
                    'no-result-found'            => 'لم نتمكن من العثور على أي سجلات.',
                    'price'                      => 'السعر',
                    'product-name'               => 'الاسم',
                    'qty'                        => 'الكمية',
                    'shipping-handling'          => 'الشحن والمعالجة',
                    'shipping-handling-excl-tax' => 'الشحن والتعامل (باستثناء الضرائب)',
                    'shipping-handling-incl-tax' => 'الشحن والتعامل (بما في ذلك الضرائب)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'المجموع الفرعي (باستثناء الضرائب)',
                    'sub-total-incl-tax'         => 'المجموع الفرعي (بما في ذلك الضرائب)',
                    'subtotal'                   => 'الإجمالي الفرعي',
                    'tax'                        => 'الضريبة',
                    'tax-amount'                 => 'مبلغ الضريبة',
                    'title'                      => 'المستردات',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'الفاتورة',
                'invoice-success'  => 'تم إنشاء الفاتورة بنجاح',
                'permission-error' => 'ليس لديك إذن لإنشاء فاتورة الطلب',
                'price'            => 'السعر',
                'product-name'     => 'اسم المنتج',
                'qty'              => 'الكمية',
                'qty-error'        => 'الكمية المطلوبة غير متاحة',
                'sub-total'        => 'الإجمالي الفرعي',
                'title'            => 'إنشاء فاتورة',
                'total'            => 'الإجمالي',
            ],

            'shipments' => [
                'avl-qty'          => 'الكمية المتاحة - :qty Qty',
                'carrier-title'    => 'عنوان الناقل',
                'create-btn'       => 'شحن',
                'ordered-qty'      => 'الكمية المطلوبة',
                'permission-error' => 'ليس لديك إذن لإنشاء شحنة',
                'product-name'     => 'اسم المنتج',
                'qty'              => 'الكمية',
                'qty-error'        => 'الكمية المطلوبة غير متاحة',
                'shipment-success' => 'تم إنشاء الشحنة بنجاح',
                'shipped-qty'      => 'الكمية المشحونة',
                'sku'              => 'SKU - :sku',
                'source'           => 'مصدر الطلب المطلوب',
                'title'            => 'إنشاء شحنة',
                'tracking-id'      => 'رقم التتبع',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'تاريخ الإنشاء',
                    'from'         => 'من',
                    'id'           => 'المعرف',
                    'order-id'     => 'رقم الطلب',
                    'qty'          => 'الكمية',
                    'to'           => 'إلى',
                    'view'         => 'عرض',
                ],

                'title'    => 'الحجوزات',
            ],

            'calendar' => [
                'booking-date'     => 'تاريخ الحجز',
                'booking-details'  => 'تفاصيل الحجز',
                'canceled'         => 'ملغى',
                'closed'           => 'مغلق',
                'done'             => 'تم',
                'order-id'         => 'رقم الطلب',
                'pending'          => 'قيد الانتظار',
                'price'            => 'السعر',
                'status'           => 'الحالة',
                'time-slot'        => 'الفترة الزمنية:',
                'view-details'     => 'عرض التفاصيل',
            ],

            'title' => 'منتجات الحجز',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'المبلغ المتبقي',
                'title'                  => 'المعاملات',
                'total-payout'           => 'إجمالي المدفوعات',
                'total-seller-sale'      => 'إجمالي المبيعات (البائع)',
                'total-admin-commission' => 'إجمالي العمولة (الإدارة)',
                'total-sale-invoiced'    => 'إجمالي المبيعات (فاتورة)',

                'datagrid' => [
                    'comment'          => 'تعليق',
                    'id'               => 'المعرف',
                    'total'            => 'الإجمالي',
                    'transaction-id'   => 'معرف المعاملة',
                ],
            ],

            'view' => [
                'commission'        => 'العمولة',
                'created-on'        => 'تم إنشاءها في :date،',
                'date'              => 'التاريخ',
                'id'                => 'معرف المعاملة',
                'method'            => 'الطريقة',
                'name'              => 'الاسم',
                'payment-method'    => ':method الدفع',
                'price'             => 'السعر',
                'print'             => 'طباعة',
                'qty'               => 'الكمية',
                'seller-total'      => 'إجمالي البائع',
                'shipping-handling' => 'الشحن والتسليم',
                'subtotal'          => 'الإجمالي الفرعي',
                'tax'               => 'الضريبة',
                'title'             => 'المعاملة',
                'total'             => 'الإجمالي',
                'transaction-id'    => 'رقم المعاملة :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'إضافة منتج جديد',
                'title'           => 'المنتجات',

                'datagrid' => [
                    'active'         => 'نشط',
                    'approved'       => 'تم الموافقة عليه',
                    'category'       => 'الفئة',
                    'delete'         => 'حذف',
                    'disable'        => 'تعطيل',
                    'disapproved'    => 'غير مُعتمد',
                    'edit'           => 'تحرير',
                    'id'             => 'الرقم',
                    'image'          => 'الصورة',
                    'is-approved'    => 'معتمد',
                    'name'           => 'الاسم',
                    'out-of-stock'   => 'إنتهى من المخزن',
                    'price'          => 'السعر',
                    'product-number' => 'رقم المنتج',
                    'product_id'     => 'الرقم - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'الحالة',
                    'stock'          => 'المخزون',
                    'total-quantity' => ':quantity متاحة',
                    'type'           => 'النوع',
                ],
            ],

            'create' => [
                'attribute-family'          => 'عائلة السمات',
                'back'                      => 'رجوع',
                'continue'                  => 'متابعة',
                'create-new-product'        => 'إنشاء منتج جديد',
                'create-your-new-product'   => 'إذا لم يكن المنتج موجودًا، قم بإنشاء منتج جديد',
                'disable-product-message'   => 'قام المسؤول بتعطيل وظيفة إنشاء أو تعيين المنتجات.',
                'image-placeholder'         => 'صورتك',
                'no-result'                 => 'لا توجد نتائج',
                'not-allowed'               => 'غير مسموح لك بإنشاء منتج',
                'or'                        => 'أو',
                'product-type'              => 'نوع المنتج',
                'search-product'            => 'البحث عن المنتجات',
                'sell-admin-product-prices' => 'بيع المنتج الإداري بأسعارك.',
                'sell-as-yours'             => 'بيع كملك',
                'sku'                       => 'SKU',
                'sub-title'                 => 'يمكنك إضافة منتج بطريقتين، إما من المنتج الإداري أو إنشاء منتج جديد.',
                'title'                     => 'إضافة منتج جديد',
                'update-profile'            => 'يرجى تحديث تفاصيل ملفك الشخصي',
            ],

            'edit' => [
                'back-btn'      => 'عودة',
                'preview'       => 'معاينة',
                'remove'        => 'إزالة',
                'save-btn'      => 'حفظ المنتج',
                'title'         => 'تحرير المنتج',
                'channels'      => 'القنوات',
                'progress-info' => 'عزز جاذبية منتجك واترك انطباعًا دائمًا لدى العملاء من خلال التأكد من أن جميع تفاصيل المنتج مكتملة ودقيقة!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'إضافة سعر للمجموعة',
                        'all-groups'                => 'جميع المجموعات',
                        'create-btn'                => 'إضافة جديدة',
                        'discount-group-price-info' => 'لـ :qty الكمية بتخفيض :price',
                        'edit-btn'                  => 'تحرير',
                        'empty-info'                => 'تسعير خاص للعملاء الذين ينتمون إلى مجموعة معينة.',
                        'fixed-group-price-info'    => 'لـ :qty الكمية بسعر ثابت :price',
                        'title'                     => 'سعر مجموعة العملاء',

                        'create' => [
                            'all-groups'     => 'جميع المجموعات',
                            'create-title'   => 'إنشاء سعر مجموعة العملاء',
                            'customer-group' => 'مجموعة العملاء',
                            'delete-btn'     => 'حذف',
                            'discount'       => 'التخفيض',
                            'fixed'          => 'ثابت',
                            'price'          => 'السعر',
                            'price-type'     => 'نوع السعر',
                            'qty'            => 'الكمية',
                            'save-btn'       => 'حفظ',
                            'update-title'   => 'تحديث سعر مجموعة العملاء',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'الكمية المطلوبة المعلقة: :qty',
                    'pending-ordered-qty-info' => 'سيتم خصم الكمية المطلوبة المعلقة من مصدر المخزون المعني بعد الشحن. في حالة الإلغاء، ستكون الكمية المعلقة متاحة للبيع.',
                    'title'                    => 'المخزون',
                ],

                'categories' => [
                    'title' => 'الفئات',
                ],

                'images' => [
                    'info'  => 'يجب أن تكون دقة الصورة مثل 609 بكسل × 560 بكسل',
                    'title' => 'الصور',
                ],

                'videos' => [
                    'error' => 'تحذير: قد لا يكون حجم الفيديو أكبر من :max كيلوبايت. يرجى اختيار ملف أصغر.',
                    'info'  => 'يجب أن يكون حجم الفيديو الأقصى مثل :size',
                    'title' => 'الفيديوهات',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'إضافة منتجات ذات صلة أثناء التصفح.',
                        'info'       => 'بالإضافة إلى المنتج الذي يعرضه العميل، يتم تقديم منتجات ذات صلة لزيادة الاهتمام.',
                        'title'      => 'منتجات ذات صلة',
                    ],

                    'up-sells' => [
                        'empty-info' => 'إضافة منتجات مقترحة للزيادة في المبيعات.',
                        'info'       => 'يتم عرض منتجات البيع المتقدمة للعميل كبديل مميز أو ذو جودة أعلى للمنتج الذي يعرضه حاليًا.',
                        'title'      => 'منتجات البيع المتقدمة',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'إضافة منتجات مقترحة لزيادة في المبيعات.',
                        'info'       => 'بجوار عربة التسوق، ستجد هذه المنتجات المقترحة للبيع لتكملة العناصر التي تمت إضافتها بالفعل إلى عربة التسوق.',
                        'title'      => 'منتجات البيع المتقدمة',
                    ],

                    'add-btn'           => 'إضافة منتج',
                    'delete'            => 'حذف',
                    'empty-info'        => 'لإضافة منتجات من النوع :type أثناء التصفح.',
                    'empty-title'       => 'إضافة منتج',
                    'image-placeholder' => 'صورة المنتج',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'إضافة خيار',
                            'empty-info'        => 'لإنشاء خيارات قابلة للتخصيص بسهولة.',
                            'empty-title'       => 'إضافة خيار',
                            'info'              => 'سيقوم هذا بتخصيص المنتج البسيط.',
                            'title'             => 'عنصر قابل للتخصيص',

                            'update-create' => [
                                'is-required'               => 'مطلوب',
                                'max-characters'            => 'الحد الأقصى للأحرف',
                                'name'                      => 'العنوان',
                                'no'                        => 'لا',
                                'price'                     => 'السعر',
                                'save-btn'                  => 'حفظ',
                                'supported-file-extensions' => 'الامتدادات المدعومة للملفات',
                                'title'                     => 'خيار',
                                'type'                      => 'النوع',
                                'yes'                       => 'نعم',
                            ],

                            'option' => [
                                'add-btn'     => 'إضافة خيار',
                                'delete'      => 'حذف',
                                'delete-btn'  => 'حذف',
                                'edit-btn'    => 'تعديل',
                                'empty-info'  => 'لإنشاء مجموعة متنوعة من المنتجات بسهولة.',
                                'empty-title' => 'إضافة خيار',

                                'types' => [
                                    'text' => [
                                        'title' => 'نص',
                                    ],

                                    'textarea' => [
                                        'title' => 'منطقة نص',
                                    ],

                                    'checkbox' => [
                                        'title' => 'مربع اختيار',
                                    ],

                                    'radio' => [
                                        'title' => 'زر اختيار',
                                    ],

                                    'select' => [
                                        'title' => 'قائمة اختيار',
                                    ],

                                    'multiselect' => [
                                        'title' => 'قائمة متعددة',
                                    ],

                                    'date' => [
                                        'title' => 'تاريخ',
                                    ],

                                    'datetime' => [
                                        'title' => 'تاريخ ووقت',
                                    ],

                                    'time' => [
                                        'title' => 'وقت',
                                    ],

                                    'file' => [
                                        'title' => 'ملف',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'التسمية',
                                        'price'    => 'السعر',
                                        'save-btn' => 'حفظ',
                                        'title'    => 'خيار',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'المنتج مرتبط بالفعل بمنتج قابل للتكوين أو مجموعة أو حزمة.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'إضافة متغير',
                        'delete-btn'        => 'حذف',
                        'edit-btn'          => 'تحرير',
                        'empty-info'        => 'لإنشاء مجموعة متنوعة من المنتجات على الفور.',
                        'empty-title'       => 'إضافة متغير',
                        'image-placeholder' => 'صورة المنتج',
                        'info'              => 'تعتمد منتجات التبديل على جميع التركيبات الممكنة للسمات.',
                        'qty'               => ':qty الكمية',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'التغييرات',

                        'create'  => [
                            'description'            => 'الوصف',
                            'name'                   => 'الاسم',
                            'save-btn'               => 'إضافة',
                            'title'                  => 'إضافة متغير',
                            'variant-already-exists' => 'هذا المتغير موجود بالفعل',
                        ],

                        'edit' => [
                            'disabled'         => 'معطل',
                            'edit-info'        => 'إذا كنت ترغب في تحديث معلومات المنتج بشكل مفصل، انتقل إلى',
                            'edit-link-title'  => 'صفحة تفاصيل المنتج',
                            'enabled'          => 'ممكّن',
                            'images'           => 'الصور',
                            'name'             => 'الاسم',
                            'price'            => 'السعر',
                            'quantities'       => 'الكميات',
                            'save-btn'         => 'حفظ',
                            'sku'              => 'SKU',
                            'status'           => 'الحالة',
                            'title'            => 'المنتج',
                            'weight'           => 'الوزن',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'إضافة صور',
                            'apply-to-all-btn'    => 'تطبيق على الكل',
                            'apply-to-all-sku'    => 'تطبيق سعر على جميع الـ SKU.',
                            'edit-inventories'    => 'تحرير المخزون',
                            'edit-prices'         => 'تحرير الأسعار',
                            'price'               => 'السعر',
                            'remove-images'       => 'إزالة الصور',
                            'remove-variants'     => 'إزالة الأصناف',
                            'select-action'       => 'اختر الإجراء',
                            'select-variants'     => 'اختر الأصناف',
                            'edit-name'           => 'تحرير الاسم',
                            'name'                => 'الاسم',
                            'edit-sku'            => 'تحرير SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'تحرير الوزن',
                            'weight'              => 'الوزن',
                            'edit-status'         => 'تحرير الحالة',
                            'status'              => 'الحالة',
                            'apply-to-all-name'   => 'تطبيق اسم على جميع الأصناف.',
                            'apply-to-all-weight' => 'تطبيق وزن على جميع الأصناف.',
                            'apply-to-all-status' => 'تطبيق حالة على جميع الأصناف.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'إضافة منتج',
                        'default-qty'       => 'الكمية الافتراضية',
                        'delete'            => 'حذف',
                        'empty-info'        => 'لإنشاء مجموعة متنوعة من المنتجات على الفور.',
                        'empty-title'       => 'إضافة منتج',
                        'image-placeholder' => 'صورة المنتج',
                        'info'              => 'يتألف المنتج المجمع من عناصر مستقلة يتم تقديمها كمجموعة، مما يسمح بالتنوع أو التنسيق حسب الموسم أو الموضوع. يمكن شراء كل منتج على حدة أو كجزء من المجموعة.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'منتجات المجموعة',
                    ],

                    'bundle' => [
                        'add-btn'           => 'إضافة خيار',
                        'empty-info'        => 'لإنشاء خيارات حزمة على الفور.',
                        'empty-title'       => 'إضافة خيار',
                        'image-placeholder' => 'صورة المنتج',
                        'info'              => 'المنتج المجمع هو حزمة من عدة عناصر أو خدمات تُباع معًا بسعر خاص، مما يوفر قيمة وراحة للعملاء.',
                        'title'             => 'عناصر الحزمة',

                        'update-create' => [
                            'checkbox'    => 'خانة الاختيار',
                            'is-required' => 'مطلوب',
                            'multiselect' => 'اختيار متعدد',
                            'name'        => 'العنوان',
                            'no'          => 'لا',
                            'radio'       => 'زر الراديو',
                            'save-btn'    => 'حفظ',
                            'select'      => 'تحديد',
                            'title'       => 'خيار',
                            'type'        => 'النوع',
                            'yes'         => 'نعم',
                        ],

                        'option' => [
                            'add-btn'     => 'إضافة منتج',
                            'default-qty' => 'الكمية الافتراضية',
                            'delete'      => 'حذف',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'تحرير',
                            'empty-info'  => 'لإنشاء مجموعات متنوعة من المنتجات على الفور.',
                            'empty-title' => 'إضافة منتج',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'تعيين المنتج الافتراضي باستخدام خانة الاختيار',
                                    'title' => 'خانة الاختيار',
                                ],

                                'multiselect' => [
                                    'info'  => 'تعيين المنتج الافتراضي باستخدام زر الاختيار المتعدد',
                                    'title' => 'اختيار متعدد',
                                ],

                                'radio' => [
                                    'info'  => 'تعيين المنتج الافتراضي باستخدام زر الراديو',
                                    'title' => 'زر الراديو',
                                ],

                                'select' => [
                                    'info'  => 'تعيين المنتج الافتراضي باستخدام زر الراديو',
                                    'title' => 'تحديد',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'متاح من',
                        'available-to'   => 'متاح حتى',
                        'location'       => 'الموقع',
                        'qty'            => 'الكمية',
                        'title'          => 'نوع الحجز',

                        'available-every-week' => [
                            'no'    => 'لا',
                            'title' => 'متاح كل أسبوع',
                            'yes'   => 'نعم',
                        ],

                        'appointment' => [
                            'break-duration'         => 'مدة الاستراحة بين الفترات (بالدقائق)',
                            'slot-duration'          => 'مدة الفترة (بالدقائق)',

                            'same-slot-for-all-days' => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],
                        ],

                        'default' => [
                            'add'              => 'إضافة',
                            'break-duration'   => 'مدة الاستراحة بين الفترات (بالدقائق)',
                            'close'            => 'إغلاق',
                            'description'      => 'معلومات الحجز',
                            'description-info' => 'وفقًا للفتحات الزمنية، سيتم إنشاء المدة الزمنية وعرضها. ستكون المدة الزمنية فريدة عبر جميع الفتحات وستكون مرئية على الواجهة الأمامية.',
                            'edit'             => 'تحرير',
                            'many'             => 'العديد من الحجوزات ليوم واحد',
                            'one'              => 'حجز واحد لعدة أيام',
                            'open'             => 'فتح',
                            'slot-add'         => 'إضافة فترات',
                            'slot-duration'    => 'مدة الفترة (بالدقائق)',
                            'slot-title'       => 'مدة الفترات الزمنية',
                            'title'            => 'افتراضي',
                            'unavailable'      => 'غير متاح',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'إضافة فترات',
                                    'close'      => 'إغلاق',
                                    'day'        => 'اليوم',
                                    'edit-title' => 'تحرير الفترات',
                                    'friday'     => 'الجمعة',
                                    'from'       => 'من',
                                    'from-day'   => 'من اليوم',
                                    'from-time'  => 'من الوقت',
                                    'monday'     => 'الاثنين',
                                    'open'       => 'فتح',
                                    'saturday'   => 'السبت',
                                    'save'       => 'حفظ',
                                    'select'     => 'اختر',
                                    'status'     => 'الحالة',
                                    'sunday'     => 'الأحد',
                                    'thursday'   => 'الخميس',
                                    'to'         => 'إلى',
                                    'to-day'     => 'إلى اليوم',
                                    'to-time'    => 'إلى الوقت',
                                    'tuesday'    => 'الثلاثاء',
                                    'wednesday'  => 'الأربعاء',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'إضافة تذاكر',
                            'delete'             => 'حذف',
                            'description'        => 'الوصف',
                            'description-info'   => 'لا توجد تذاكر متاحة.',
                            'edit'               => 'تحرير',
                            'name'               => 'الاسم',
                            'price'              => 'السعر',
                            'qty'                => 'الكمية',
                            'special-price'      => 'السعر الخاص',
                            'special-price-from' => 'السعر الخاص من',
                            'special-price-to'   => 'السعر الخاص حتى',
                            'title'              => 'التذاكر',
                            'valid-from'         => 'صالح من',
                            'valid-until'        => 'صالح حتى',

                            'modal'              => [
                                'edit' => 'تحرير التذاكر',
                                'save' => 'حفظ',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'إضافة تذاكر',
                            ],

                            'slots'   => [
                                'add'         => 'إضافة فترات',
                                'description' => 'الفترات المتاحة مع مدة الوقت.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'على أساس يومي',
                            'daily-hourly'           => 'كلاهما (يومي وساعي)',
                            'daily-price'            => 'السعر اليومي',
                            'hourly'                 => 'على أساس ساعي',
                            'hourly-price'           => 'السعر الساعي',
                            'title'                  => 'نوع الإيجار',

                            'same-slot-for-all-days' => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'إضافة فترات',
                            'description-info' => 'وفقًا للفتحات الزمنية، سيتم إنشاء المدة الزمنية وعرضها. ستكون المدة الزمنية فريدة عبر جميع الفتحات وستكون مرئية على الواجهة الأمامية.',
                            'save'             => 'حفظ',
                            'title'            => 'مدة الفترات الزمنية',
                            'unavailable'      => 'غير متاح',

                            'action' => [
                                'add' => 'إضافة',
                            ],

                            'modal' => [
                                'slot' => [
                                    'friday'     => 'الجمعة',
                                    'from'       => 'من',
                                    'monday'     => 'الاثنين',
                                    'saturday'   => 'السبت',
                                    'sunday'     => 'الأحد',
                                    'thursday'   => 'الخميس',
                                    'to'         => 'إلى',
                                    'tuesday'    => 'الثلاثاء',
                                    'wednesday'  => 'الأربعاء',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'مدة الاستراحة بين الفترات (بالدقائق)',
                            'guest-capacity'            => 'سعة الضيوف',
                            'guest-limit'               => 'حد الضيوف لكل طاولة',
                            'prevent-scheduling-before' => 'منع الجدولة قبل',
                            'slot-duration'             => 'مدة الفترة (بالدقائق)',

                            'charged-per'               => [
                                'guest'  => 'ضيف',
                                'table'  => 'طاولة',
                                'title'  => 'محسوب لكل',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'حجز موعد',
                            'default'     => 'حجز افتراضي',
                            'event'       => 'حجز حدث',
                            'many'        => 'العديد',
                            'one'         => 'واحد',
                            'rental'      => 'حجز إيجار',
                            'table'       => 'حجز طاولة',
                            'title'       => 'النوع',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'إضافة رابط',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'تحرير',
                            'empty-info'  => 'لإنشاء روابط على الفور.',
                            'empty-title' => 'إضافة رابط',
                            'file'        => 'ملف : ',
                            'info'        => 'يتيح نوع المنتج القابل للتنزيل بيع المنتجات الرقمية مثل الكتب الإلكترونية وتطبيقات البرمجيات والموسيقى والألعاب، إلخ.',
                            'sample-file' => 'ملف عينة : ',
                            'sample-url'  => 'رابط عينة : ',
                            'title'       => 'روابط قابلة للتنزيل',
                            'url'         => 'رابط : ',

                            'update-create' => [
                                'downloads'   => 'التنزيل المسموح به',
                                'file'        => 'ملف',
                                'file-type'   => 'نوع الملف',
                                'name'        => 'العنوان',
                                'price'       => 'السعر',
                                'sample'      => 'عينة',
                                'sample-type' => 'نوع العينة',
                                'save-btn'    => 'حفظ',
                                'title'       => 'رابط',
                                'url'         => 'رابط',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'إضافة عينة',
                            'delete-btn'  => 'حذف',
                            'edit-btn'    => 'تحرير',
                            'empty-info'  => 'لإنشاء عينات على الفور.',
                            'empty-title' => 'إضافة عينة',
                            'file'        => 'ملف : ',
                            'info'        => 'يتيح نوع المنتج القابل للتنزيل بيع المنتجات الرقمية مثل الكتب الإلكترونية وتطبيقات البرمجيات والموسيقى والألعاب، إلخ.',
                            'title'       => 'عينات قابلة للتنزيل',
                            'url'         => 'رابط : ',

                            'update-create' => [
                                'file'        => 'ملف',
                                'file-type'   => 'نوع الملف',
                                'name'        => 'العنوان',
                                'save-btn'    => 'حفظ',
                                'title'       => 'رابط',
                                'url'         => 'رابط',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'تم إنشاء المنتج بنجاح',
            'delete-failed'            => 'فشل حذف المنتج',
            'delete-success'           => 'تم حذف المنتج بنجاح',
            'product-type-not-allowed' => 'غير مسموح لك ببيع منتج من النوع :type',
            'saved-inventory-message'  => 'تم حفظ المنتج بنجاح',
            'update-success'           => 'تم تحديث المنتج بنجاح',

            'assign' => [
                'already-selling'     => 'أنت تبيع هذا المنتج بالفعل',
                'back-btn'            => 'رجوع',
                'condition'           => 'الحالة',
                'create-success'      => 'تم تعيين المنتج للبائع بنجاح',
                'description'         => 'الوصف',
                'image-size'          => 'يجب أن تكون دقة الصورة 609px X 560px',
                'images'              => 'الصور',
                'new'                 => 'جديد',
                'not-allowed'         => 'غير مسموح لك بتعيين هذا المنتج',
                'old'                 => 'قديم',
                'price'               => 'السعر',
                'product-not-allowed' => 'غير مسموح لك ببيع منتج من النوع :type',
                'quantities'          => 'الكميات',
                'save-btn'            => 'حفظ',
                'title'               => 'تعيين المنتج',
                'update-success'      => 'تم تحديث المنتج المعين بنجاح',

                'product-details' => [
                    'active'            => 'نشط',
                    'approved'          => 'موافق عليه',
                    'disable'           => 'تعطيل',
                    'disapproved'       => 'مرفوض',
                    'image-placeholder' => 'صورة المنتج',
                    'title'             => 'تفاصيل المنتج',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'تقييمات المنتجات',

                'datagrid' => [
                    'approved'      => 'موافق عليه',
                    'customer'      => 'العميل',
                    'date'          => 'التاريخ',
                    'description'   => 'الوصف',
                    'email'         => 'البريد الإلكتروني',
                    'pending'       => 'قيد الانتظار',
                    'product'       => 'المنتج',
                    'rating'        => 'التقييم',
                    'status'        => 'الحالة',
                    'title'         => 'العنوان',
                    'unapproved'    => 'غير موافق عليه',
                    'update-status' => 'تحديث الحالة',
                ],
            ],

            'update-success' => 'تم تحديث تقييمات المنتج بنجاح.',
            'delete-success' => 'تم حذف تقييمات المنتج بنجاح.',
        ],

        'customers' => [
            'index' => [
                'title' => 'العملاء',

                'datagrid' => [
                    'active'      => 'نشط',
                    'customer'    => 'العميل',
                    'email'       => 'البريد الإلكتروني',
                    'gender'      => 'الجنس',
                    'group'       => 'المجموعة',
                    'inactive'    => 'غير نشط',
                    'order-count' => 'عدد الطلبيات',
                    'revenue'     => 'الإيرادات',
                    'status'      => 'الحالة',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'إدارة الملف الشخصي',
                'edit-btn' => 'تعديل الملف الشخصي',

                'general' => [
                    'email'      => 'البريد الإلكتروني',
                    'name'       => 'الاسم',
                    'phone'      => 'رقم الهاتف',
                    'shop-slug'  => 'عنوان المتجر',
                    'shop-title' => 'عنوان المتجر',
                    'title'      => 'معلومات عامة',
                ],

                'about-store' => [
                    'title' => 'حول المتجر',
                ],

                'meta' => [
                    'meta-description' => 'وصف الميتا',
                    'meta-keywords'    => 'كلمات الميتا المفتاحية',
                    'meta-title'       => 'عنوان الميتا',
                    'title'            => 'وصف الميتا',
                ],

                'policy' => [
                    'privacy'  => 'سياسة الخصوصية',
                    'return'   => 'سياسة الإرجاع',
                    'shipping' => 'سياسة الشحن',
                    'title'    => 'السياسات',
                ],

                'address' => [
                    'city'     => 'المدينة',
                    'country'  => 'الدولة',
                    'postcode' => 'الرمز البريدي',
                    'state'    => 'الولاية',
                    'title'    => 'عنوان المتجر',
                    'address'  => 'العنوان',
                ],

                'social' => [
                    'link'  => 'رابط :name',
                    'title' => 'روابط التواصل الاجتماعي',
                ],

                'minimum-order-amount' => [
                    'title'  => 'الحد الأدنى للطلب',
                ],

                'google-analytics' => [
                    'id'    => 'معرف التحليلات',
                    'title' => 'تحليلات Google',
                ],

                'shop-information' => [
                    'admin-commission'       => 'عمولة المشرف',
                    'admin-commission-value' => 'عمولة المشرف :rate٪ من المبلغ الإجمالي للفاتورة',
                    'allowed-categories'     => 'الفئات المسموح بها',
                    'no-categories'          => 'لا توجد فئات متاحة',
                    'allowed-product-types'  => 'أنواع المنتجات المسموح بها',
                    'no-product-types'       => 'لا توجد أنواع منتجات متاحة',
                    'payment-methods'        => 'طرق الدفع',
                    'no-payment-methods'     => 'لا توجد طرق دفع متاحة',
                    'shipping-methods'       => 'طرق الشحن',
                    'no-shipping-methods'    => 'لا توجد طرق شحن متاحة',
                    'title'                  => 'معلومات المتجر',
                ],
            ],

            'edit' => [
                'banner'              => 'راية',
                'banner-description'  => 'حمّل راية بنسبة 13:3، الارتفاع 375، المنطقة الآمنة 375x250، مركز على الجوال',
                'delete-banner'       => 'حذف الراية',
                'delete-logo'         => 'حذف الشعار',
                'logo'                => 'الشعار',
                'logo-description'    => 'حمّل الشعار بنسبة 1:1',
                'save-btn'            => 'حفظ الملف الشخصي',
                'title'               => 'إدارة الملف الشخصي',
                'upload-new-banner'   => 'رفع راية جديدة',
                'upload-new-logo'     => 'رفع شعار جديد',

                'general' => [
                    'email'      => 'البريد الإلكتروني',
                    'name'       => 'الاسم',
                    'phone'      => 'رقم الهاتف',
                    'shop-slug'  => 'عنوان المتجر',
                    'shop-title' => 'عنوان المتجر',
                    'title'      => 'معلومات عامة',
                ],

                'about-store' => [
                    'title' => 'حول المتجر',
                ],

                'meta' => [
                    'meta-description' => 'وصف الميتا',
                    'meta-keywords'    => 'كلمات الميتا المفتاحية',
                    'meta-title'       => 'عنوان الميتا',
                    'title'            => 'وصف الميتا',
                ],

                'policy' => [
                    'privacy'  => 'سياسة الخصوصية',
                    'return'   => 'سياسة الإرجاع',
                    'shipping' => 'سياسة الشحن',
                    'title'    => 'السياسات',
                ],

                'address' => [
                    'city'           => 'المدينة',
                    'country'        => 'الدولة',
                    'postcode'       => 'الرمز البريدي',
                    'state'          => 'الولاية',
                    'title'          => 'عنوان المتجر',
                    'select-country' => 'اختر الدولة',
                    'select-state'   => 'اختر الولاية',
                    'street-address' => 'عنوان الشارع',
                    'address'        => 'العنوان',
                ],

                'social' => [
                    'link'  => 'رابط :name',
                    'title' => 'روابط التواصل الاجتماعي',
                ],

                'minimum-order-amount' => [
                    'title'  => 'الحد الأدنى للطلب',
                ],

                'google-analytics' => [
                    'id'    => 'معرف Google Analytics',
                    'title' => 'تحليلات Google',
                ],
            ],

            'update-success' => 'تم تحديث ملفك الشخصي بنجاح',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'تقييمات البائع',

                'datagrid' => [
                    'approved'    => 'موافق عليه',
                    'customer'    => 'العميل',
                    'date'        => 'التاريخ',
                    'description' => 'الوصف',
                    'disapproved' => 'غير مُعتمد',
                    'email'       => 'البريد الإلكتروني',
                    'pending'     => 'قيد الانتظار',
                    'rating'      => 'التقييم',
                    'status'      => 'الحالة',
                    'title'       => 'العنوان',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'حفظ',
                    'title'              => 'عام',
                    'unmatched-password' => 'كلمة المرور الحالية غير متطابقة',
                    'update-success'     => 'تم تحديث الإعدادات العامة بنجاح',

                    'regional-setting' => [
                        'currency'      => 'العملة',
                        'locale'        => 'الإعداد الإقليمي',
                        'select-locale' => 'اختر الإعداد الإقليمي',
                        'title'         => 'الإعدادات الإقليمية',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'تأكيد كلمة المرور',
                        'current-password' => 'كلمة المرور الحالية',
                        'new-password'     => 'كلمة المرور الجديدة',
                        'title'            => 'إعدادات كلمة المرور',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'إنشاء دور',
                    'title'      => 'الأدوار',

                    'datagrid' => [
                        'all'             => 'الكل',
                        'custom'          => 'مخصص',
                        'delete'          => 'حذف',
                        'edit'            => 'تعديل',
                        'id'              => 'الرقم التعريفي',
                        'name'            => 'الاسم',
                        'permission-type' => 'نوع الإذن',
                    ],
                ],

                'create' => [
                    'access-control' => 'التحكم بالوصول',
                    'all'            => 'الكل',
                    'back-btn'       => 'رجوع',
                    'custom'         => 'مخصص',
                    'description'    => 'الوصف',
                    'general'        => 'عام',
                    'name'           => 'الاسم',
                    'permissions'    => 'الصلاحيات',
                    'save-btn'       => 'حفظ الدور',
                    'title'          => 'إنشاء دور',
                ],

                'edit' => [
                    'access-control' => 'التحكم بالوصول',
                    'all'            => 'الكل',
                    'back-btn'       => 'رجوع',
                    'custom'         => 'مخصص',
                    'description'    => 'الوصف',
                    'general'        => 'عام',
                    'name'           => 'الاسم',
                    'permissions'    => 'الصلاحيات',
                    'save-btn'       => 'حفظ الدور',
                    'title'          => 'تعديل الدور',
                ],

                'being-used'        => 'الدور مستخدم من قبل بعض البائعين',
                'create-success'    => 'تم إنشاء الدور بنجاح',
                'delete-failed'     => 'فشل حذف الدور',
                'delete-success'    => 'تم حذف الدور بنجاح',
                'last-delete-error' => 'يجب أن يكون هناك على الأقل دور واحد',
                'update-success'    => 'تم تحديث الدور بنجاح',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'إنشاء مستخدم',
                    'create-title'     => 'إنشاء مستخدم',
                    'edit-title'       => 'تعديل المستخدم',
                    'email'            => 'البريد الإلكتروني',
                    'name'             => 'الاسم',
                    'phone-number'     => 'رقم الهاتف',
                    'role'             => 'الدور',
                    'save-btn'         => 'حفظ المستخدم',
                    'select-role'      => 'اختر الدور',
                    'password'         => 'كلمة المرور',
                    'confirm-password' => 'تأكيد كلمة المرور',
                    'status'           => 'الحالة',
                    'title'            => 'المستخدمون',
                    'create-success'   => 'تم إنشاء المستخدم بنجاح',
                    'update-success'   => 'تم تحديث المستخدم بنجاح',
                    'delete-success'   => 'تم حذف المستخدم بنجاح',
                    'delete-failed'    => 'فشل حذف المستخدم',

                    'datagrid' => [
                        'delete'     => 'حذف',
                        'edit'       => 'تعديل',
                        'email'      => 'البريد الإلكتروني',
                        'id'         => 'الرقم التعريفي',
                        'id-value'   => 'ID - :id',
                        'name'       => 'الاسم',
                        'permission' => 'الصلاحية',
                        'phone'      => 'الهاتف',

                        'status' => [
                            'title' => 'الحالة',

                            'options' => [
                                'active'    => 'نشط',
                                'suspended' => 'معلق',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'إنشاء مصدر المخزون',
                    'title'      => 'مصادر المخزون',

                    'datagrid' => [
                        'active'   => 'نشط',
                        'code'     => 'الكود',
                        'delete'   => 'حذف',
                        'edit'     => 'تعديل',
                        'id'       => 'المعرف',
                        'inactive' => 'غير نشط',
                        'name'     => 'الاسم',
                        'priority' => 'الأولوية',
                        'status'   => 'الحالة',
                    ],
                ],

                'create' => [
                    'add-title'      => 'إضافة مصدر المخزون',
                    'address'        => 'عنوان المصدر',
                    'back-btn'       => 'عودة',
                    'city'           => 'المدينة',
                    'code'           => 'الكود',
                    'contact-email'  => 'البريد الإلكتروني',
                    'contact-fax'    => 'الفاكس',
                    'contact-info'   => 'معلومات الاتصال',
                    'contact-name'   => 'الاسم',
                    'contact-number' => 'رقم الاتصال',
                    'country'        => 'البلد',
                    'description'    => 'الوصف',
                    'general'        => 'عام',
                    'latitude'       => 'خط العرض',
                    'longitude'      => 'خط الطول',
                    'name'           => 'الاسم',
                    'postcode'       => 'الرمز البريدي',
                    'priority'       => 'الأولوية',
                    'save-btn'       => 'حفظ مصدر المخزون',
                    'select-country' => 'اختر البلد',
                    'select-state'   => 'اختر الولاية',
                    'settings'       => 'الإعدادات',
                    'state'          => 'الولاية',
                    'status'         => 'الحالة',
                    'street'         => 'الشارع',
                    'title'          => 'مصادر المخزون',
                ],

                'edit' => [
                    'back-btn'       => 'عودة',
                    'city'           => 'المدينة',
                    'code'           => 'الكود',
                    'contact-email'  => 'البريد الإلكتروني',
                    'contact-fax'    => 'الفاكس',
                    'contact-info'   => 'معلومات الاتصال',
                    'contact-name'   => 'الاسم',
                    'contact-number' => 'رقم الاتصال',
                    'country'        => 'البلد',
                    'description'    => 'الوصف',
                    'general'        => 'عام',
                    'latitude'       => 'خط العرض',
                    'longitude'      => 'خط الطول',
                    'name'           => 'الاسم',
                    'postcode'       => 'الرمز البريدي',
                    'priority'       => 'الأولوية',
                    'save-btn'       => 'حفظ مصادر المخزون',
                    'select-country' => 'اختر البلد',
                    'select-state'   => 'اختر الولاية',
                    'settings'       => 'الإعدادات',
                    'source-address' => 'عنوان المصدر',
                    'state'          => 'الولاية',
                    'status'         => 'الحالة',
                    'street'         => 'الشارع',
                    'title'          => 'تعديل مصادر المخزون',
                ],

                'create-success'    => 'تم إنشاء مصدر المخزون بنجاح.',
                'delete-failed'     => 'فشل حذف مصادر المخزون.',
                'delete-success'    => 'تم حذف مصادر المخزون بنجاح.',
                'last-delete-error' => 'لا يمكن حذف مصادر المخزون الأخيرة.',
                'update-success'    => 'تم تحديث مصادر المخزون بنجاح.',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'المسؤول',
                'blocked-message'     => 'لقد تم حظرك من قبل الإدارة',
                'message-failed'      => 'فشل في إرسال الرسالة',
                'message-placeholder' => 'اكتب رسالتك هنا...',
                'message-sent'        => 'تم إرسال الرسالة بنجاح',
                'no-message'          => 'لم يتم العثور على رسائل',
                'search-message'      => 'ابحث عن رسالة...',
                'title'               => 'التواصل',

                'filters' => [
                    'all-messages'      => 'جميع الرسائل',
                    'prev-fifteen-days' => 'الخمسة عشر يومًا السابقة',
                    'prev-seven-days'   => 'الأيام السبعة السابقة',
                    'prev-six-months'   => 'الأشهر الستة السابقة',
                    'prev-thirty-days'  => 'الأيام الثلاثون السابقة',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'العربة المهجورة',
                    'abandoned-products'            => 'المنتجات المهجورة',
                    'abandoned-rate'                => 'معدل الهجرة',
                    'abandoned-revenue'             => 'الإيرادات المهجورة',
                    'added-to-cart'                 => 'تمت الإضافة إلى العربة',
                    'added-to-cart-info'            => 'فقط :progress الزائرين قاموا بإضافة منتجات إلى العربة',
                    'all-channels'                  => 'جميع القنوات',
                    'average-order-value-over-time' => 'القيمة المتوسطة للطلب مع مرور الوقت',
                    'average-sales'                 => 'القيمة المتوسطة للطلب',
                    'commission'                    => 'العمولة',
                    'commission-over-time'          => 'العمولة مع مرور الوقت',
                    'count'                         => 'العدد',
                    'end-date'                      => 'تاريخ الانتهاء',
                    'id'                            => 'المعرف',
                    'interval'                      => 'الفاصل الزمني',
                    'name'                          => 'الاسم',
                    'orders'                        => 'الطلبات',
                    'orders-over-time'              => 'الطلبات مع مرور الوقت',
                    'payment-method'                => 'طريقة الدفع',
                    'product-views'                 => 'مشاهدة المنتجات',
                    'product-views-info'            => 'فقط :progress الزائرين قاموا بمشاهدة المنتجات',
                    'purchase-funnel'               => 'ممر الشراء',
                    'purchased'                     => 'تم الشراء',
                    'purchased-info'                => 'فقط :progress الزائرين قاموا بالشراء',
                    'refunds'                       => 'مرتجعات',
                    'refunds-over-time'             => 'المرتجعات مع مرور الوقت',
                    'sales-over-time'               => 'المبيعات مع مرور الوقت',
                    'start-date'                    => 'تاريخ البدء',
                    'tax-collected'                 => 'جمع الضرائب',
                    'tax-collected-over-time'       => 'جمع الضرائب مع مرور الوقت',
                    'title'                         => 'المبيعات',
                    'top-payment-methods'           => 'أفضل طرق الدفع',
                    'top-tax-categories'            => 'أفضل فئات الضرائب',
                    'total'                         => 'الإجمالي',
                    'total-commission-paid'         => 'إجمالي العمولة المدفوعة',
                    'total-orders'                  => 'إجمالي الطلبات',
                    'total-sales'                   => 'إجمالي المبيعات',
                    'total-visits'                  => 'إجمالي الزيارات',
                    'total-visits-info'             => 'إجمالي الزائرين في المتجر',
                    'view-details'                  => 'عرض التفاصيل',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'جميع القنوات',
                    'count'                       => 'العدد',
                    'customers'                   => 'العملاء',
                    'customers-over-time'         => 'العملاء مع مرور الوقت',
                    'customers-traffic'           => 'حركة العملاء',
                    'customers-with-most-orders'  => 'العملاء بأكبر عدد من الطلبات',
                    'customers-with-most-reviews' => 'العملاء بأكبر عدد من التقييمات',
                    'customers-with-most-sales'   => 'العملاء بأكبر عدد من المبيعات',
                    'email'                       => 'البريد الإلكتروني',
                    'end-date'                    => 'تاريخ الانتهاء',
                    'id'                          => 'المعرف',
                    'interval'                    => 'الفاصل الزمني',
                    'name'                        => 'الاسم',
                    'orders'                      => 'الطلبات',
                    'reviews'                     => 'التقييمات',
                    'start-date'                  => 'تاريخ البدء',
                    'title'                       => 'العملاء',
                    'top-customer-groups'         => 'أفضل مجموعات العملاء',
                    'total'                       => 'الإجمالي',
                    'total-customers'             => 'إجمالي العملاء',
                    'total-visitors'              => 'إجمالي الزوار',
                    'traffic-over-week'           => 'حركة المرور على مدار الأسبوع',
                    'unique-visitors'             => 'زوار فريدين',
                    'view-details'                => 'عرض التفاصيل',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'جميع القنوات',
                    'channel'                          => 'قناة',
                    'end-date'                         => 'تاريخ الانتهاء',
                    'id'                               => 'المعرف',
                    'interval'                         => 'الفاصل الزمني',
                    'locale'                           => 'محلي',
                    'name'                             => 'الاسم',
                    'orders'                           => 'الطلبات',
                    'price'                            => 'السعر',
                    'products-added-over-time'         => 'المنتجات المضافة مع مرور الوقت',
                    'products-with-most-reviews'       => 'المنتجات بأكبر عدد من التقييمات',
                    'products-with-most-visits'        => 'المنتجات بأكبر عدد من الزيارات',
                    'quantities'                       => 'الكميات',
                    'quantities-sold-over-time'        => 'الكميات المباعة مع مرور الوقت',
                    'revenue'                          => 'الإيرادات',
                    'reviews'                          => 'التقييمات',
                    'start-date'                       => 'تاريخ البدء',
                    'title'                            => 'المنتجات',
                    'top-selling-products-by-quantity' => 'أفضل منتجات مباعة حسب الكمية',
                    'top-selling-products-by-revenue'  => 'أفضل منتجات مباعة حسب الإيرادات',
                    'total'                            => 'الإجمالي',
                    'total-products-added-to-wishlist' => 'المنتجات المضافة إلى قائمة الرغبات',
                    'total-sold-quantities'            => 'كمية المنتجات المباعة',
                    'view-details'                     => 'عرض التفاصيل',
                    'visits'                           => 'الزيارات',
                ],
            ],

            'view' => [
                'all-channels'  => 'جميع القنوات',
                'day'           => 'يوم',
                'end-date'      => 'تاريخ الانتهاء',
                'export-csv'    => 'تصدير كملف CSV',
                'export-xls'    => 'تصدير كملف XLS',
                'month'         => 'شهر',
                'not-available' => 'غير متاح أي سجلات.',
                'start-date'    => 'تاريخ البدء',
                'year'          => 'سنة',
            ],

            'empty' => [
                'info'  => 'لا توجد بيانات متاحة للفترة المحددة',
                'title' => 'لا توجد بيانات متاحة',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'معطل',
                'enabled'   => 'مفعل',
                'info'      => 'قم ببناء وإدارة وتوسيع متجرك الإلكتروني باستخدام إضافات Bagisto القابلة للتخصيص.',
                'no-result' => 'لا توجد إضافات متاحة هنا.',
                'title'     => 'الإضافات',

                'filters' => [
                    'all-extensions' => 'جميع الإضافات',
                    'bulk_upload'    => 'التحميل الجماعي',
                    'gdpr'           => 'اللائحة العامة لحماية البيانات',
                    'marketplace'    => 'السوق',
                    'payment'        => 'الدفع',
                    'pos'            => 'نقطة البيع',
                    'shipping'       => 'الشحن',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'شعار البائع',
                'switch-to-store' => 'التبديل لإدارة المتجر',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'الحد الأدنى لمبلغ الطلب في :shop_title هو',
                'product-not-available' => 'المنتج غير متوفر',
                'sold-by'               => 'مباع بواسطة',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'الدفع في :days يوم',
                'deals-in'            => 'تعامل في',
                'featured-seller'     => 'بائعون مميزون لدينا',
                'online-business'     => 'الأعمال عبر الإنترنت',
                'reviews'             => ':count التقييمات',
                'seller-community'    => 'مجتمع البائعين',
                'serviceable-pincode' => 'الرمز البريدي القابل للخدمة',
                'start-selling'       => 'ابدأ البيع مع عملاء كبار حول العالم، على مدار الساعة.',
                'step'                => 'الخطوة :count',
                'visit-shop'          => 'قم بزيارة المتجر',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'أضف إلى السلة',
            'delivery-info' => 'تأتي معلومات التسليم هنا',
            'hide'          => 'إخفاء',
            'more-info'     => 'مزيد من المعلومات',
            'seller-count'  => ':count بائع إضافي يبيعون نفس المنتج',
            'seller-info'   => 'معلومات البائع',
            'sold-by'       => 'تباع من قبل',
            'top-selling'   => 'أعلى مبيعًا',

            'flag' => [
                'alert'              => 'تنبيه',
                'already-reported'   => 'لقد قمت بالإبلاغ عن هذا المنتج بالفعل',
                'create-success'     => 'تم الإبلاغ عن المنتج بنجاح',
                'guest-alert'        => 'تحتاج إلى تسجيل الدخول للإبلاغ عن هذا المنتج',
                'not-allowed'        => 'لا يمكنك الإبلاغ عن هذا المنتج دون تقديم طلب',
                'other-reason'       => 'سبب آخر',
                'reason'             => 'السبب',
                'reason-placeholder' => 'يرجى تحديد السبب',
                'report-product'     => 'الإبلاغ عن المنتج',
                'select-reason'      => 'اختر السبب',
                'submit-btn'         => 'إرسال',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'البائع لم يتم الموافقة عليه بعد',
                'products-count'  => 'المنتجات (:count)',
                'reviews-count'   => 'المراجعات (:count)',
                'search-text'     => 'ابحث عن المنتجات',

                'about' => [
                    'title'           => 'حول',
                    'about-us'        => 'معلومات عنا',
                    'shipping-policy' => 'سياسة الشحن',
                    'privacy-policy'  => 'سياسة الخصوصية',
                    'return-policy'   => 'سياسة الإرجاع',
                ],

                'contact-form' => [
                    'title'          => 'اتصل',
                    'name'           => 'الاسم',
                    'email'          => 'البريد الإلكتروني',
                    'subject'        => 'الموضوع',
                    'query'          => 'الاستفسار',
                    'submit-btn'     => 'إرسال',
                    'create-success' => 'تم إرسال استفسارك بنجاح',
                ],

                'share' => [
                    'title'     => 'شارك',
                    'share-on'  => 'شارك على',
                    'facebook'  => 'فيسبوك',
                    'linkedin'  => 'لينكد إن',
                    'twitter'   => 'تويتر',
                    'pinterest' => 'بينتيريست',
                ],

                'report-form' => [
                    'alert'              => 'تنبيه',
                    'already-reported'   => 'لقد قمت بالإبلاغ عن هذا البائع مسبقاً',
                    'create-success'     => 'تم الإبلاغ عن البائع بنجاح',
                    'guest-alert'        => 'تحتاج إلى تسجيل الدخول للإبلاغ عن البائع',
                    'not-allowed'        => 'لا يمكنك الإبلاغ عن هذا البائع دون تقديم طلب',
                    'other-reason'       => 'سبب آخر',
                    'reason'             => 'السبب',
                    'reason-placeholder' => 'يرجى تحديد السبب',
                    'select-reason'      => 'اختر السبب',
                    'submit-btn'         => 'إرسال',
                    'title'              => 'الإبلاغ عن مشكلة',
                ],

                'reviews' => [
                    'alert'            => 'تنبيه',
                    'already-reviewed' => 'لقد قمت بمراجعة هذا البائع بالفعل',
                    'comment'          => 'تعليق',
                    'create-success'   => 'تم تقييم البائع بنجاح',
                    'customer-review'  => ':count تقييم من العملاء',
                    'customer-reviews' => 'آراء العملاء',
                    'guest-alert'      => 'يجب عليك تسجيل الدخول للإبلاغ عن البائع',
                    'rating'           => 'التقييم',
                    'review-by'        => 'التقييم من قبل',
                    'submit-btn'       => 'إرسال',
                    'title'            => 'العنوان',
                    'view-all'         => 'عرض جميع التقييمات',
                    'write-review'     => 'اكتب تقييمًا',
                ],

                'products' => [
                    'no-result' => 'لا توجد منتجات هنا',
                    'show'      => 'عرض',

                    'sort-by' => [
                        'title' => 'الترتيب حسب',

                        'options' => [
                            'cheapest-first'  => 'الأرخص أولاً',
                            'expensive-first' => 'الأغلى أولاً',
                            'from-a-z'        => 'من أ-ي',
                            'from-z-a'        => 'من ي-أ',
                            'latest-first'    => 'الأحدث أولاً',
                            'oldest-first'    => 'الأقدم أولاً',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'إزالة الكل',
                        'filter'      => 'تصفية',
                        'filters'     => 'فلاتر:',
                        'price-range' => 'نطاق السعر',
                        'sort'        => 'ترتيب',
                    ],
                ],
            ],
        ],
    ],
];
