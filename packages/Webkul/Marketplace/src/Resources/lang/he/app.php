<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'שוק',
                    'info'  => 'ניהול שוק',

                    'module-info' => [
                        'title'       => 'מידע על מודול',
                        'info'        => 'מספק מידע הקשור לגרסת האפליקציה.',
                        'app-version' => 'גרסת אפליקציה: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'אחוז עמלת מנהל',
                        'description'                  => 'ניהול הגדרות כלליות של השוק כמו מצב, עמלה וכדומה.',
                        'lines-in-street-address'      => 'שורות בכתובת הרחוב',
                        'lines-in-street-address-info' => 'הגדר את מספר השורות בכתובת הרחוב. ברירת המחדל היא שורה אחת.',
                        'status'                       => 'סטטוס',
                        'title'                        => 'כללי',
                    ],

                    'product' => [
                        'approval-required'         => 'נדרש אישור',
                        'description'               => 'ניהול הגדרות מוצרים של השוק כמו אישורים, דגלים וכדומה.',
                        'enable-flag'               => 'הפעל דגל',
                        'seller-can-assign-product' => 'המוכר יכול להקצות מוצר',
                        'seller-can-create-product' => 'המוכר יכול ליצור מוצר',
                        'show-progress-bar'         => 'הצג סרגל התקדמות',
                        'title'                     => 'מוצר',
                    ],

                    'seller' => [
                        'approval-required'           => 'נדרשת אישור',
                        'can-cancel-order'            => 'יכול לבטל הזמנה',
                        'can-create-invoice'          => 'יכול ליצור חשבונית',
                        'can-create-shipment'         => 'יכול ליצור משלוח',
                        'description'                 => 'נהל את הגדרות המוכר בשוק כגון אישור, דגלים וכו’.',
                        'enable-flag'                 => 'אפשר דגל',
                        'enable-minimum-order-amount' => 'אפשר סכום הזמנה מינימלי',
                        'enable-seller-flag'          => 'אפשר דגל למוכר',
                        'red-flag-limit'              => 'מגבלת דגל אדום',
                        'red-flag-limit-info'         => 'אם המוכר עובר מגבלה זו, דגל אדום יופיע בפרופיל המוכר.',
                        'show-red-flag'               => 'הצג דגל אדום בפרופיל אם המגבלה נחרגת',
                        'title'                       => 'מוכר',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'מספר מוגבל',
                        'description' => 'נהל את המוכרים המובילים בשוק.',
                        'status'      => 'סטטוס',
                        'title'       => 'מוכרים מובילים',

                        'popularity-criteria' => [
                            'all'              => 'הכל',
                            'maximum-orders'   => 'הזמנות מקסימליות',
                            'maximum-products' => 'מוצרים מקסימליים',
                            'maximum-rating'   => 'דירוג מקסימלי',
                            'maximum-sale'     => 'מכירה מקסימלית',
                            'title'            => 'קריטריוני פופולריות',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'כותרת לחצן הבאנר',
                        'banner-description'  => 'תיאור הבאנר',
                        'banner-image'        => 'תמונת הבאנר',
                        'banner-title'        => 'כותרת הבאנר',
                        'business-hour'       => 'שעות עסקים',
                        'community-count'     => 'סך הקהילה',
                        'description'         => 'התאם אישית את דף הנחיתה של השוק על ידי הוספת סמלים, באנר ותיאורים למראה חדש.',
                        'feature-box1-desc'   => 'תיאור תיק התכונה 1',
                        'feature-box1-icon'   => 'אייקון תיק התכונה 1',
                        'feature-box1-title'  => 'כותרת תיק התכונה 1',
                        'feature-box2-desc'   => 'תיאור תיק התכונה 2',
                        'feature-box2-icon'   => 'אייקון תיק התכונה 2',
                        'feature-box2-title'  => 'כותרת תיק התכונה 2',
                        'feature-box3-desc'   => 'תיאור תיק התכונה 3',
                        'feature-box3-icon'   => 'אייקון תיק התכונה 3',
                        'feature-box3-title'  => 'כותרת תיק התכונה 3',
                        'feature-box4-desc'   => 'תיאור תיק התכונה 4',
                        'feature-box4-icon'   => 'אייקון תיק התכונה 4',
                        'feature-box4-title'  => 'כותרת תיק התכונה 4',
                        'feature-description' => 'תיאור התכונה',
                        'feature-image'       => 'תמונת התכונה',
                        'feature-title'       => 'כותרת התכונה',
                        'journey-description' => 'תיאור המסע',
                        'journey-image'       => 'תמונת המסע',
                        'journey-step1-desc'  => 'תיאור שלב 1 במסע',
                        'journey-step1-icon'  => 'אייקון שלב 1 במסע',
                        'journey-step1-title' => 'כותרת שלב 1 במסע',
                        'journey-step2-desc'  => 'תיאור שלב 2 במסע',
                        'journey-step2-icon'  => 'אייקון שלב 2 במסע',
                        'journey-step2-title' => 'כותרת שלב 2 במסע',
                        'journey-step3-desc'  => 'תיאור שלב 3 במסע',
                        'journey-step3-icon'  => 'אייקון שלב 3 במסע',
                        'journey-step3-title' => 'כותרת שלב 3 במסע',
                        'journey-step4-desc'  => 'תיאור שלב 4 במסע',
                        'journey-step4-icon'  => 'אייקון שלב 4 במסע',
                        'journey-step4-title' => 'כותרת שלב 4 במסע',
                        'journey-step5-desc'  => 'תיאור שלב 5 במסע',
                        'journey-step5-icon'  => 'אייקון שלב 5 במסע',
                        'journey-step5-title' => 'כותרת שלב 5 במסע',
                        'journey-title'       => 'כותרת המסע',
                        'payment-duration'    => 'משך התשלום',
                        'serviceable-pincode' => 'מיקוד שירות',
                        'title'               => 'דף נחיתה',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'שייך מוצר',
            'communications'    => 'תקשורת',
            'create'            => 'צור',
            'delete'            => 'מחק',
            'edit'              => 'ערוך',
            'flag-reasons'      => 'סיבות לדיווח',
            'inventory-sources' => 'מקורות מלאי',
            'orders'            => 'הזמנות',
            'pay'               => 'שלם',
            'payment-request'   => 'בקשת תשלום',
            'product-reviews'   => 'ביקורות מוצרים',
            'products'          => 'מוצרים',
            'reviews'           => 'ביקורות מוכר',
            'seller-categories' => 'קטגוריות מוכר',
            'sellers'           => 'מוכרים',
            'title'             => 'שוק',
            'transactions'      => 'עסקאות',
            'view'              => 'צפה',
        ],

        'menu' => [
            'communications'    => 'תקשורת',
            'flag-reasons'      => 'סיבות דג נורא',
            'inventory-sources' => 'מקורות מלאי',
            'orders'            => 'הזמנות',
            'payment-requests'  => 'בקשות תשלום',
            'product-reviews'   => 'ביקורות על המוצר',
            'products'          => 'מוצרים',
            'seller-categories' => 'קטגוריות מוכרים',
            'seller-reviews'    => 'ביקורות על המוכר',
            'sellers'           => 'מוכרים',
            'title'             => 'שוק פלטפורמה',
            'transactions'      => 'עסקאות',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'הוסף מוכרים',
                'delete-failed'      => 'נכשלה מחיקת המוכר!',
                'delete-success'     => 'המוכר נמחק בהצלחה.',
                'incomplete-profile' => 'למוכר יש פרופיל לא מלא!',
                'login-message'      => 'התחברת כ-:seller_name',
                'pending-orders'     => 'המוכר יש לו הזמנות ממתינות',
                'title'              => 'מוכרים',
                'update-success'     => 'המוכר עודכן בהצלחה!',

                'datagrid' => [
                    'add-product'     => 'הוספה',
                    'approved'        => 'אושר',
                    'assign-product'  => 'הקצאת מוצר',
                    'created-at'      => 'נוצר בתאריך',
                    'delete'          => 'מחיקה',
                    'disapproved'     => 'לא אושר',
                    'edit'            => 'עריכה',
                    'email'           => 'אימייל',
                    'flags'           => 'דגימות',
                    'id'              => 'מזהה',
                    'login-as-seller' => 'התחבר כמוכר',
                    'seller-id'       => 'מזהה - :seller_id',
                    'seller-name'     => 'שם המוכר',
                    'shop-url'        => 'כתובת החנות',
                    'status'          => 'סטטוס',
                    'suspended'       => 'מושהה',
                    'total-flags'     => 'סה"כ דגימות: :count',
                    'update-status'   => 'עדכן מצב',
                ],

                'create'  => [
                    'address'        => 'כתובת',
                    'city'           => 'עיר',
                    'country'        => 'מדינה',
                    'email'          => 'אימייל',
                    'name'           => 'שם',
                    'phone'          => 'מספר טלפון',
                    'postcode'       => 'מיקוד',
                    'save-btn'       => 'שמור',
                    'select'         => 'בחר',
                    'shop-title'     => 'כותרת החנות',
                    'shop-url'       => 'כתובת החנות',
                    'state'          => 'מדינה',
                    'street-address' => 'כתובת רחוב',
                    'success'        => 'המוכר נוצר בהצלחה.',
                    'title'          => 'צור מוכר',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'דגלי מוכר',

                    'datagrid' => [
                        'id'             => 'מזהה',
                        'customer-name'  => 'שם הלקוח',
                        'customer-email' => 'אימייל הלקוח',
                        'date'           => 'תאריך',
                        'reason'         => 'סיבה',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'חזור',
                'image-placeholder' => 'תמונת המוצר',
                'no-result'         => 'לא נמצאו תוצאות!',
                'sku'               => 'SKU - :sku',
                'title'             => 'חפש מוצרים',
            ],

            'assign-product' => [
                'already-selling'     => 'המוכר כבר מוכר מוצר זה',
                'assign-successfully' => 'המוצר הוקצה בהצלחה למוכר.',
                'back-btn'            => 'חזור',
                'condition'           => 'מצב',
                'description'         => 'תיאור',
                'new'                 => 'חדש',
                'old'                 => 'ישן',
                'price'               => 'מחיר',
                'product-not-allowed' => 'למוכר אסור למכור מוצר מסוג :type.',
                'quantities'          => 'כמויות',
                'save-btn'            => 'שמור',
                'select-condition'    => 'בחר מצב',
                'title'               => 'הקצאת מוצר',

                'seller-details' => [
                    'additional-info' => 'מידע נוסף',
                    'approved'        => 'מאושר',
                    'disapproved'     => 'לא מאושר',
                    'no-of-products'  => 'מספר מוצרים',
                    'status'          => 'סטטוס',
                    'suspended'       => 'מושהה',
                    'title'           => 'פרטי המוכר',
                ],

                'product-details' => [
                    'active'            => 'פעיל',
                    'disable'           => 'השבת',
                    'title'             => 'פרטי המוצר',
                    'image-placeholder' => 'תמונת מוצר',
                ],

                'images' => [
                    'info'  => 'רזולוציה של התמונה צריכה להיות כמו 609px X 560px',
                    'title' => 'תמונות',
                ],

                'videos' => [
                    'error' => 'הוידאו לא יכול להיות גדול מ-:max קילובייט. בחר קובץ קטן יותר בבקשה.',
                    'info'  => 'גודל הווידאו המרבי צריך להיות כמו :size',
                    'title' => 'וידאו',
                ],

                'configurable' => [
                    'delete-btn'        => 'מחק',
                    'edit-btn'          => 'ערוך',
                    'image-placeholder' => 'תמונת המוצר',
                    'qty'               => 'כמות - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'הגדרות',

                    'edit' => [
                        'images'     => 'תמונות',
                        'price'      => 'מחיר',
                        'quantities' => 'כמויות',
                        'save-btn'   => 'שמור',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'הוסף קישור',
                        'delete-btn'  => 'מחק',
                        'edit-btn'    => 'ערוך',
                        'empty-info'  => 'כדי ליצור קישור במהיר.',
                        'empty-title' => 'הוסף קישור',
                        'file'        => 'קובץ : ',
                        'info'        => 'סוג המוצר הניתן להורדה מאפשר למכור מוצרים דיגיטליים כמו ספרים אלקטרוניים, יישומי תוכנה, מוזיקה, משחקים ועוד.',
                        'sample-file' => 'קובץ לדוגמה : ',
                        'sample-url'  => 'כתובת אתר לדוגמה:',
                        'title'       => 'קישורים להורדה',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'הורדות מותרות',
                            'file'        => 'קובץ',
                            'file-type'   => 'סוג הקובץ',
                            'name'        => 'כותרת',
                            'price'       => 'מחיר',
                            'sample'      => 'דוגמה',
                            'sample-type' => 'סוג הדוגמה',
                            'save-btn'    => 'שמור',
                            'title'       => 'קישור',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'הוסף דוגמה',
                        'delete-btn'  => 'מחק',
                        'edit-btn'    => 'ערוך',
                        'empty-info'  => 'כדי ליצור דוגמה במהיר.',
                        'empty-title' => 'הוסף דוגמה',
                        'file'        => 'קובץ : ',
                        'info'        => 'סוג המוצר הניתן להורדה מאפשר למכור מוצרים דיגיטליים כמו ספרים אלקטרוניים, יישומי תוכנה, מוזיקה, משחקים ועוד.',
                        'title'       => 'דוגמאות להורדה',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'קובץ',
                            'file-type' => 'סוג הקובץ',
                            'name'      => 'כותרת',
                            'save-btn'  => 'שמור',
                            'title'     => 'קישור',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'חזור',
                'suspended'      => 'מושהה',
                'title'          => 'עריכת מוכר',
                'update-btn'     => 'עדכן מוכר',
                'update-success' => 'המוכר עודכן בהצלחה.',

                'shop' => [
                    'address'          => 'כתובת',
                    'city'             => 'עיר',
                    'country'          => 'מדינה',
                    'description'      => 'תיאור',
                    'email'            => 'דוא"ל',
                    'name'             => 'שם',
                    'phone-number'     => 'מספר טלפון',
                    'postcode'         => 'מיקוד',
                    'select'           => 'בחירה',
                    'shop-title'       => 'כותרת החנות',
                    'state'            => 'מדינה',
                    'street-address'   => 'כתובת רחוב',
                    'title'            => 'פרטי החנות',
                    'url'              => 'כתובת החנות',
                ],

                'profile' => [
                    'banner'       => 'באנר הפרופיל',
                    'banner-size'  => 'גודל הבאנר צריך להיות כמו 300 פיקסלים על 200 פיקסלים',
                    'logo'         => 'לוגו הפרופיל',
                    'logo-size'    => 'גודל הלוגו צריך להיות כמו 125 פיקסלים על 125 פיקסלים',
                    'social-links' => ':name קישור',
                    'title'        => 'פרטי הפרופיל',
                ],

                'allowed-product' => [
                    'title'  => 'מוצרים מורשים',
                ],

                'minimum-order-amount' => [
                    'title'  => 'סכום הזמנה מינימלי',
                ],

                'google-analytics-id' => [
                    'title'  => 'מזהה Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'אחוז',
                    'status'     => 'סטטוס',
                    'title'      => 'עמלת המוכר',
                ],

                'meta-info' => [
                    'meta-description' => 'תיאור מטא',
                    'meta-keyword'     => 'מילות מפתח מטא',
                    'meta-title'       => 'כותרת מטא',
                    'title'            => 'מידע מטא',
                ],

                'policy' => [
                    'privacy'  => 'מדיניות פרטיות',
                    'return'   => 'מדיניות החזר',
                    'shipping' => 'מדיניות משלוח',
                    'title'    => 'מדיניות',
                ],

                'channels' => [
                    'title' => 'ערוץ',
                ],
            ],

            'users' => [
                'email' => 'דוא"ל',
                'id'    => 'מזהה',
                'name'  => 'שם',
                'phone' => 'טלפון',
                'title' => 'משתמשים',
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'הוסף מוצרים',
                'delete-success' => 'המוצר נמחק בהצלחה.',
                'title'          => 'מוצרים',
                'update-success' => 'המוצר עודכן בהצלחה.',

                'datagrid' => [
                    'approved'       => 'אושר',
                    'delete'         => 'מחק',
                    'disapproved'    => 'לא אושר',
                    'flags'          => 'דגימות',
                    'id'             => 'מזהה',
                    'is-owner'       => 'האם הבעלים',
                    'no'             => 'לא',
                    'out-of-stock'   => 'אזל מהמלאי',
                    'price'          => 'מחיר',
                    'product-id'     => 'מזהה מוצר - :product_id',
                    'product-name'   => 'שם המוצר',
                    'product-number' => 'מספר מוצר',
                    'product-type'   => 'סוג מוצר',
                    'quantity'       => 'כמות',
                    'seller-name'    => 'שם המוכר',
                    'sku'            => 'SKU',
                    'status'         => 'סטטוס',
                    'total-flags'    => 'סה"כ דגימות: :count',
                    'total-quantity' => ':quantity זמין',
                    'update-status'  => 'עדכן מצב',
                    'yes'            => 'כן',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'דגלי מוצר',

                    'datagrid' => [
                        'customer-email' => 'אימייל לקוח',
                        'customer-name'  => 'שם לקוח',
                        'date'           => 'תאריך',
                        'id'             => 'מזהה',
                        'reason'         => 'סיבה',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'פרטי הביקורת',
                'title'          => 'ביקורות על המוצרים',

                'datagrid' => [
                    'approved'      => 'אושר',
                    'comment'       => 'תגובה',
                    'customer-name' => 'שם הלקוח',
                    'date'          => 'תאריך',
                    'disapproved'   => 'לא אושר',
                    'id'            => 'מזהה',
                    'images'        => 'תמונות',
                    'pending'       => 'ממתין',
                    'product'       => 'מוצר',
                    'product-name'  => 'שם המוצר',
                    'rating'        => 'דירוג',
                    'review-id'     => 'מזהה ביקורת - :review_id',
                    'shop-title'    => 'שם החנות',
                    'status'        => 'סטטוס',
                    'title'         => 'כותרת',
                    'update-status' => 'מצב עדכון',
                    'view'          => 'צפה',
                ],
            ],

            'update-success' => 'ביקורות המוצר עודכנו בהצלחה',
            'delete-success' => 'ביקורות על מוצרים נמחקו בהצלחה.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'ביקורות מוכרים',

                'datagrid' => [
                    'approved'            => 'מאושר',
                    'comment'             => 'תגובה',
                    'customer-name'       => 'שם הלקוח',
                    'date'                => 'תאריך',
                    'delete'              => 'מחק',
                    'disapproved'         => 'לא מאושר',
                    'id'                  => 'מזהה',
                    'mass-delete-success' => 'ביקורות מוכרים נמחקו בהצלחה.',
                    'mass-update-success' => 'ביקורות מוכרים עודכנו בהצלחה.',
                    'pending'             => 'ממתין',
                    'rating'              => 'דירוג',
                    'review-id'           => 'מזהה - :review_id',
                    'review-title'        => 'כותרת הביקורת',
                    'seller-name'         => 'שם המוכר',
                    'shop-title'          => 'כותרת החנות',
                    'status'              => 'מצב',
                    'update-status'       => 'עדכן מצב',
                ],
            ],

            'delete-success' => 'ביקורת מוכר נמחקה בהצלחה.',
        ],

        'orders' => [
            'index' => [
                'title' => 'הזמנות',

                'datagrid' => [
                    'canceled'        => 'בוטל',
                    'closed'          => 'סגור',
                    'commission'      => 'עמלה',
                    'completed'       => 'הושלם',
                    'customer'        => 'לקוח',
                    'date'            => 'תאריך',
                    'discount'        => 'הנחה',
                    'email'           => 'דוא"ל',
                    'fraud'           => 'הונאה',
                    'gross-amt'       => 'סכום גולמי',
                    'id'              => 'מזהה',
                    'items'           => 'פריטים',
                    'location'        => 'מיקום',
                    'order-id'        => 'מספר הזמנה - #:id',
                    'payment'         => 'תשלום',
                    'pending'         => 'ממתין',
                    'pending-payment' => 'המתנה לתשלום',
                    'processing'      => 'מעבד',
                    'seller'          => 'מוכר',
                    'seller-earn'     => 'רווח',
                    'shipment'        => 'משלוח',
                    'shop'            => 'חנות',
                    'status'          => 'סטטוס',
                    'view'            => 'הצג',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'עסקאות',

                'datagrid' => [
                    'base-total'     => 'סכום בסיסי',
                    'comment'        => 'הערה',
                    'customer-name'  => 'שם הלקוח',
                    'id'             => 'מזהה',
                    'seller-id'      => 'מזהה המוכר',
                    'seller-name'    => 'שם המוכר',
                    'transaction-id' => 'מזהה עסקה',
                    'view'           => 'צפה',
                ],
            ],

            'view' => [
                'commission'        => 'עמלה',
                'created-on'        => 'נוצר בתאריך :date,',
                'name'              => 'שם',
                'payment-method'    => ':method תשלום',
                'price'             => 'מחיר',
                'qty'               => 'כמות',
                'seller-total'      => 'סכום המוכר',
                'shipping-handling' => 'משלוח וטיפול',
                'subtotal'          => 'סיכום חלקי',
                'tax'               => 'מס',
                'title'             => 'עסקאות #:transaction_id',
                'total'             => 'סכום',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'צור סיבה',
                'delete-success'      => 'סיבת הדגל נמחקה בהצלחה.',
                'mass-delete-success' => 'סיבות הדגל נמחקו בהצלחה.',
                'mass-update-success' => 'סיבות הדגל עודכנו בהצלחה.',
                'title'               => 'סיבות דגל',

                'datagrid' => [
                    'delete'        => 'מחק',
                    'edit'          => 'ערוך',
                    'id'            => 'מזהה',
                    'name'          => 'שם',
                    'update-status' => 'עדכן סטטוס',

                    'status' => [
                        'active'  => 'פעיל',
                        'disable' => 'מושבת',
                        'title'   => 'סטטוס',
                    ],

                    'type' => [
                        'product' => 'מוצר',
                        'seller'  => 'מוכר',
                        'title'   => 'סוג',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'מנהל',
                'back-btn' => 'חזור',
                'general'  => 'כללי',
                'label'    => 'תווית',
                'product'  => 'מוצר',
                'save-btn' => 'שמור סיבה',
                'seller'   => 'מוכר',
                'status'   => 'סטטוס',
                'title'    => 'צור סיבה',
                'type'     => 'סוג',
            ],

            'edit' => [
                'admin'    => 'מנהל',
                'back-btn' => 'חזור',
                'general'  => 'כללי',
                'label'    => 'תווית',
                'product'  => 'מוצר',
                'save-btn' => 'שמור סיבה',
                'seller'   => 'מוכר',
                'status'   => 'סטטוס',
                'title'    => 'ערוך סיבה',
                'type'     => 'סוג',
            ],

            'create-success' => 'סיבת הדגל נוצרה בהצלחה.',
            'update-success' => 'סיבת הדגל עודכנה בהצלחה.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'הקצה קטגוריה',
                'create-success' => 'קטגוריה הוקצתה בהצלחה.',
                'delete-failed'  => 'מחיקת קטגוריה נכשלה!',
                'delete-success' => 'קטגוריה נמחקה בהצלחה.',
                'title'          => 'קטגוריות מוכר',
                'update-success' => 'קטגוריה עודכנה בהצלחה.',

                'datagrid' => [
                    'delete' => 'מחק',
                    'edit'   => 'ערוך',
                    'id'     => 'מזהה',
                    'name'   => 'שם',
                ],
            ],

            'create' => [
                'back-btn'      => 'חזור',
                'save-btn'      => 'שמור קטגוריה',
                'select-seller' => 'בחר מוכר',
                'seller'        => 'מוכר',
                'title'         => 'הקצה קטגוריה',
            ],

            'edit' => [
                'back-btn'   => 'חזור',
                'seller'     => 'מוכר',
                'title'      => 'ערוך קטגוריה',
                'update-btn' => 'עדכן קטגוריה',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'הערה',
                'no-amount-remaining'  => 'אין סכום שנותר לתשלום!',
                'order-not-found'      => 'ההזמנה לא נמצאה!',
                'pay-btn'              => 'שלם עכשיו',
                'pay-to-seller'        => 'תשלום למוכר',
                'payment-success'      => 'המוכר שולם בהצלחה!',
                'something-went-wrong' => 'משהו השתבש!',
                'title'                => 'בקשת תשלום',

                'datagrid' => [
                    'already-paid'          => 'כבר שולם',
                    'canceled'              => 'בוטל',
                    'closed'                => 'סגור',
                    'completed'             => 'הושלם',
                    'customer-name'         => 'שם הלקוח',
                    'date'                  => 'תאריך',
                    'email'                 => 'אימייל',
                    'fraud'                 => 'הונאה',
                    'gross-amt'             => 'סכום גולמי',
                    'id'                    => 'מספר הזמנה',
                    'invoice-pending'       => 'חשבונית ממתינה',
                    'order-canceled'        => 'הזמנה בוטלה',
                    'order-id'              => 'מזהה #:id',
                    'pay'                   => 'שלם',
                    'pending'               => 'ממתין',
                    'pending-payment'       => 'ממתין לתשלום',
                    'processing'            => 'מעבד',
                    'refunded'              => 'הוחזר',
                    'remaining-total'       => 'סכום נותר',
                    'request-payment'       => 'בקשת תשלום',
                    'seller'                => 'מוכר',
                    'seller-total-invoiced' => 'סכום המוכר',
                    'shop'                  => 'חנות',
                    'status'                => 'סטטוס',
                    'total-paid'            => 'סכום ששולם',
                    'view'                  => 'צפה',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'חסום מוכר',
                'block-success'        => 'המוכר נחסם בהצלחה!',
                'chat-history-cleared' => 'היסטוריית הצ\'אט נוקתה בהצלחה!',
                'clear-chat-history'   => 'נקה היסטוריית צ\'אט',
                'exit'                 => 'יציאה',
                'message-failed'       => 'שליחת ההודעה נכשלה!',
                'message-sent'         => 'ההודעה נשלחה בהצלחה!',
                'no-message'           => 'לא נמצאה הודעה!',
                'search'               => 'חפש',
                'search-message'       => 'חפש הודעה',
                'seller-blocked'       => 'חסמת את המוכר הזה. אינך יכול לשלוח הודעה למוכר זה.',
                'sellers'              => 'מוכרים',
                'title'                => 'תקשורת',
                'type-message'         => 'הקלד את הודעתך כאן...',
                'unblock-seller'       => 'בטל חסימת מוכר',
                'unblock-success'      => 'המוכר הוסר מחסימה בהצלחה!',
                'welcome-message'      => 'ברוך הבא לתקשורת השוק!',

                'filters' => [
                    'all-messages'      => 'כל ההודעות',
                    'prev-fifteen-days' => '15 הימים האחרונים',
                    'prev-seven-days'   => '7 הימים האחרונים',
                    'prev-six-months'   => '6 החודשים האחרונים',
                    'prev-thirty-days'  => '30 הימים האחרונים',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'מקורות מלאי',

                'datagrid' => [
                    'active'      => 'פעיל',
                    'code'        => 'קוד',
                    'id'          => 'מזהה',
                    'inactive'    => 'לא פעיל',
                    'name'        => 'שם',
                    'seller-name' => 'שם המוכר',
                    'shop-title'  => 'כותרת החנות',
                    'status'      => 'סטטוס',
                ],

                'view' => [
                    'active'         => 'פעיל',
                    'address'        => 'כתובת המקור',
                    'city'           => 'עיר',
                    'code'           => 'קוד',
                    'contact-email'  => 'אימייל',
                    'contact-fax'    => 'פקס',
                    'contact-info'   => 'פרטי התקשרות',
                    'contact-name'   => 'שם',
                    'contact-number' => 'מספר טלפון',
                    'country'        => 'מדינה',
                    'description'    => 'תיאור',
                    'general-info'   => 'מידע כללי',
                    'inactive'       => 'לא פעיל',
                    'latitude'       => 'קו רוחב',
                    'longitude'      => 'קו אורך',
                    'name'           => 'שם',
                    'postcode'       => 'מיקוד',
                    'priority'       => 'עדיפות',
                    'seller-info'    => 'פרטי המוכר',
                    'seller-name'    => 'שם המוכר',
                    'settings'       => 'הגדרות',
                    'shop-title'     => 'כותרת החנות',
                    'state'          => 'מדינה/מחוז',
                    'street'         => 'רחוב',
                    'title'          => 'מקור מלאי #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'התקן את חבילת השוק.',
            'migrate'     => 'מעביר את כל הטבלאות למסד הנתונים (זה ייקח זמן)...',
            'seed'        => 'מכניס נתונים למסד הנתונים...',
            'publish'     => 'מפרסם נכסים וקונפיגורציות...',
            'cache'       => 'מנקה את המטמון...',
            'finish'      => 'חבילת השוק הותקנה בהצלחה.',
        ],

        'version' => [
            'description' => 'מציג את הגרסה הנוכחית של חבילת השוק.',
            'comment'     => 'גרסת שוק: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'יקר/ה :customer_name',
        'dear-admin'  => 'יקר/ה מנהל/ת',
        'dear-seller' => 'יקר המוכר',

        'seller' => [
            'registration' => [
                'date'        => 'תאריך הרישום:',
                'description' => 'אנו שמחים להודיע לך על רישום סוחר חדש בפלטפורמה שלנו. אנא הקדש רגע לברך את הסוחר החדש שלנו.',
                'details'     => 'פרטים:',
                'email'       => 'כתובת הדוא"ל:',
                'greeting'    => 'מקווים שההודעה מושגת אותך בכוח.',
                'name'        => 'שם הסוחר:',
                'shop'        => 'קישור לחנות:',
                'subject'     => 'רישום סוחר חדש',
            ],

            'forgot-password' => [
                'description'    => 'אתה מקבל את הדוא"ל הזה מכיוון שקיבלנו בקשה לאיפוס סיסמה עבור החשבון שלך.',
                'greeting'       => 'שכחת סיסמה!',
                'reset-password' => 'איפוס סיסמה',
                'subject'        => 'דוא"ל לאיפוס סיסמה',
            ],

            'welcome' => [
                'description' => 'ברוך הבא! אנו מתרגשים להציע לך בית חדש. המותג שלך מוסיף ערך עצום לפלטפורמה שלנו, ואנו מצפים לשותפות מוצלחת ומתמידה איתך.',
                'greeting'    => 'ברוך הבא ותודה על הרישום שלך אצלנו!',
                'subject'     => 'הודעת ברכה לסוחר החדש',
            ],

            'approval' => [
                'approved'    => 'בקשתך להפוך למוכר אושרה.',
                'disapproved' => 'בקשתך להפוך למוכר נדחתה.',
                'greeting'    => 'ברוך הבא ותודה על הרישום שלך אצלנו!',
                'subject'     => 'הודעת אישור לסוחר',
            ],

            'update' => [
                'description' => 'הפרופיל שלך עודכן בהצלחה.',
                'greeting'    => 'מקווים שההודעה מושגת אותך בכוח.',
                'subject'     => 'הודעת עדכון פרופיל לסוחר',
            ],

            'good-bye' => [
                'description' => 'עבוד עמך הייתה תענוג, ואנו מודים לך על המקצועיות, ההקדשה ואיכות המוצרים/שירותים שלך. המחויבות שלך לדאוג לשביעות רצונו של הלקוח לא נעלמה, והייתה גורם מרכזי לחוויית הלקוח החיובית שלנו.',
                'greeting'    => 'מאמינים שההודעה מושגת אותך בכוח.',
                'subject'     => 'הודעת פרידה מסוחר',
            ],

            'product-approval' => [
                'approved'    => 'המוצר שלך :name אושר.',
                'disapproved' => 'המוצר שלך :name לא אושר.',
                'greeting'    => 'ברוך הבא ותודה שנרשמת אצלנו!',
                'subject'     => 'הודעת אישור מוצר של המוכר',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'יש לך הזמנה חדשה :order_id שהוזמנה בתאריך :created_at',
                    'subject'  => 'אישור הזמנה חדשה',
                    'summary'  => 'סיכום ההזמנה',
                    'title'    => 'אישור הזמנה!',
                ],

                'canceled' => [
                    'greeting' => 'ההזמנה :order_id בוטלה',
                    'subject'  => 'אישור ביטול הזמנה',
                    'summary'  => 'סיכום ההזמנה',
                    'title'    => 'הזמנה בוטלה!',
                ],

                'billing-address'   => 'כתובת לחיוב',
                'contact'           => 'יצירת קשר',
                'discount'          => 'הנחה',
                'grand-total'       => 'סכום כולל',
                'name'              => 'שם',
                'payment'           => 'תשלום',
                'price'             => 'מחיר',
                'qty'               => 'כמות',
                'shipping'          => 'משלוח',
                'shipping-address'  => 'כתובת למשלוח',
                'shipping-handling' => 'עמלת משלוח וטיפול',
                'sku'               => 'קוד מוצר',
                'subtotal'          => 'סכום חלקי',
                'tax'               => 'מס',
            ],

            'payment-request' => [
                'greeting'  => 'אני מאמין שהודעה זו מוצאת אותך בסדר.',
                'paid'      => 'היי.. קיבלת תשלום עבור הזמנה :order_id.',
                'requested' => 'המוכר :seller_name נדרש לתשלום עבור הזמנה :order_id.',
                'subject'   => 'הודעת בקשת תשלום למוכר',
            ],
        ],

        'contact-seller' => [
            'email'    => 'אימייל:- :email',
            'greeting' => 'אני מאמין שהודעה זו מוצאת אותך בסדר.',
            'info'     => 'שלום, :name יש לו שאלה אליך. בבקשה בדוק את הפרטים למטה.',
            'query'    => 'שאילתה: :query',
            'subject'  => 'הודעת יצירת קשר ממוכר',
            'topic'    => 'נושא: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'שלום, ":name" דיווח על בעיה במוצר ":product_name" של המוכר ":seller_name". נא בדוק את הפרטים למטה.',
            'greeting'   => 'מקווה שההודעה הזו מוצאת אותך בטוב.',
            'reason'     => 'סיבה:- :reason',
            'seller-msg' => 'שלום, ":name" דיווח על בעיה במוצר שלך ":product_name". נא בדוק את הפרטים למטה.',
            'subject'    => 'התראה על דיווח מוצר',
        ],

        'report-seller' => [
            'admin-msg'  => 'שלום, :name דיווח על בעיה נגד :seller_name. בבקשה בדוק את הפרטים למטה.',
            'greeting'   => 'אני בטוח שההודעה הזו מוצאת אותך בסדר.',
            'reason'     => 'סיבה: :reason',
            'seller-msg' => 'שלום, :name דיווח על בעיה הקשורה אליך. אנא בדוק את הפרטים למטה.',
            'subject'    => 'הודעת דיווח ממוכר',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'צור חשבון מוכר Velocity',
            'banner-description'  => 'Velocity יכולה להיות פלטפורמה נהדרת למכירת המוצרים שלך לעסקים חדשים בהודו. על ידי ביצוע הטיפים האלה, תוכל להצליח כמוכר Velocity!',
            'banner-btn-title'    => 'פתח חנות',
            'feature-title'       => 'למה מוכרים אוהבים למכור ב-Velocity?',
            'feature-description' => 'מוכרים אוהבים פלטפורמות מהירות כי הן מציעות פוטנציאל למכירות מוגברות, חשיפה טובה יותר וחווית מכירה יעילה שיכולה לתרום לצמיחת העסק והצלחה.',
            'feature-box1-title'  => 'הזדמנויות מכירה מוגברות',
            'feature-box1-desc'   => 'מוכרים אוהבים פלטפורמות מהירות כי הן מציעות פוטנציאל למכירות מוגברות, חשיפה טובה יותר וחווית מכירה יעילה שיכולה לתרום לצמיחת העסק והצלחה.',
            'feature-box2-title'  => 'זמן תגובה מהיר יותר',
            'feature-box2-desc'   => 'מוצרים נוטים להימכר מהר יותר בפלטפורמות מהירות, מה שמוביל להחלפת מלאי מהירה יותר והכנסות למוכרים.',
            'feature-box3-title'  => 'נראות מוגברת',
            'feature-box3-desc'   => 'פלטפורמות אלו מציעות נראות וחשיפה גדולות יותר למוצרי המוכר, מה שמוביל ליותר צפיות ומכירות פוטנציאליות.',
            'feature-box4-title'  => 'יעילות ונוחות',
            'feature-box4-desc'   => 'פלטפורמות מהירות לעיתים קרובות כוללות תהליכים וכלים יעילים שהופכים את המכירה ליותר יעילה, חוסכים למוכרים זמן ומאמץ בניהול העסקים המקוונים שלהם.',
            'journey-title'       => 'התחל את המסע שלך ב-Velocity',
            'journey-description' => 'התחל למכור עם לקוחות גדולים מכל רחבי העולם, כל שעה ביממה.',
            'journey-step1-title' => 'הפוך למוכר',
            'journey-step1-desc'  => 'הגדר את החנות שלך, עם כל המידע הבסיסי.',
            'journey-step2-title' => 'רשום מוצרים',
            'journey-step2-desc'  => 'רשום את המוצרים בחנות כדי שהלקוח יוכל לצפות ולרכוש.',
            'journey-step3-title' => 'קבל הזמנה',
            'journey-step3-desc'  => 'קבל הזמנות ממגוון רחב של לקוחות מכל רחבי העולם.',
            'journey-step4-title' => 'משלוח מוצר',
            'journey-step4-desc'  => 'לאחר שהמוצר נמסר והתשלום התקבל',
            'journey-step5-title' => 'תשלום',
            'journey-step5-desc'  => 'בקשת תשלום, קבל תשלום לאחר ניכוי העמלה.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'מוצר פגום',
            'damaged-product-sold'      => 'מוצר פגום שנמכר על ידי המוכר',
            'duplicate-product'         => 'מוצר כפול',
            'duplicate-product-sold'    => 'מוצר כפול שנמכר על ידי המוכר',
            'missing-product-parts'     => 'חלקים חסרים במוצר',
            'over-price-product'        => 'מוצר יקר מדי',
            'over-price-product-sold'   => 'מוצר יקר מדי שנמכר על ידי המוכר',
            'poor-product-quality'      => 'איכות מוצר ירודה',
            'poor-product-quality-sold' => 'איכות ירודה נמכרה על ידי המוכר',
            'receive-wrong-product'     => 'קבלת מוצר שגוי',
            'wrong-product-sold'        => 'מוצר שגוי שנמכר על ידי המוכר',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'הורד',
                    'export'     => 'ייצוא',
                    'no-records' => 'אין מה לייצא',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'עמוד הבית',
                    'logout'     => 'התנתקות',
                    'my-profile' => 'הפרופיל שלי',
                    'visit-shop' => 'בקר בחנות',

                    'mega-search' => [
                        'customers'                      => 'לקוחות',
                        'explore-all-customers'          => 'חקור את כל הלקוחות',
                        'explore-all-matching-customers' => 'חקור את כל הלקוחות שתואמים את “:query” (:count)',
                        'explore-all-matching-orders'    => 'חקור את כל ההזמנות שתואמות את “:query” (:count)',
                        'explore-all-matching-products'  => 'חקור את כל המוצרים שתואמים את “:query” (:count)',
                        'explore-all-orders'             => 'חקור את כל ההזמנות',
                        'explore-all-products'           => 'חקור את כל המוצרים',
                        'orders'                         => 'הזמנות',
                        'products'                       => 'מוצרים',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'חיפוש מגה',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'כווץ',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'הוסף תמונה',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'רק קבצי תמונה (.jpeg, .jpg, .png, ..) מותרים.',
                ],

                'videos' => [
                    'add-video-btn'     => 'הוסף וידאו',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'רק קבצי וידאו (.mp4, .mov, .ogg ..) מותרים.',
                ],

                'documents' => [
                    'add-document-btn'  => 'הוסף מסמך',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'רק קבצי מסמכים (:types ..) מותרים.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'קדמי',
                    'next'       => 'הבא',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'גודל',
                    'text'       => 'טקסט',
                    'use-cases'  => 'מקרי שימוש',
                    'word'       => 'Word',
                    'zoom'       => 'זום',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'הזמנות',
            'communication'     => 'תקשורת',
            'customers'         => 'לקוחות',
            'dashboard'         => 'לוח בקרה',
            'extensions'        => 'תוספים',
            'general'           => 'כללי',
            'inventory-sources' => 'מקורות מלאי',
            'manage-profile'    => 'ניהול פרופיל',
            'orders'            => 'הזמנות',
            'product-reviews'   => 'ביקורות מוצרים',
            'products'          => 'מוצרים',
            'reporting'         => 'דיווח',
            'roles'             => 'תפקידים',
            'sales'             => 'מכירות',
            'seller-reviews'    => 'ביקורות מוכרים',
            'settings'          => 'הגדרות',
            'transaction'       => 'עסקאות',
            'users'             => 'משתמשים',
        ],

        'acl' => [
            'assign'            => 'הקצאה',
            'bookings'          => 'הזמנות',
            'cancel'            => 'ביטול',
            'communication'     => 'תקשורת',
            'create'            => 'יצירה',
            'customers'         => 'לקוחות',
            'dashboard'         => 'לוח בקרה',
            'delete'            => 'מחיקה',
            'edit'              => 'עריכה',
            'extensions'        => 'תוספים',
            'general'           => 'כללי',
            'inventory-sources' => 'מקורות מלאי',
            'invoice'           => 'חשבונית',
            'orders'            => 'הזמנות',
            'payment-request'   => 'בקשת תשלום',
            'print'             => 'הדפסה',
            'print-invoice'     => 'הדפס חשבונית',
            'product-reviews'   => 'ביקורות מוצר',
            'products'          => 'מוצרים',
            'reporting'         => 'דיווח',
            'sales'             => 'מכירות',
            'seller-reviews'    => 'ביקורות מוכרים',
            'settings'          => 'הגדרות',
            'shipment'          => 'משלוח',
            'transactions'      => 'עסקאות',
            'view'              => 'תצוגה',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'הוסף מוצר חדש',
            'assign'            => 'הקצה',
            'bookings'          => 'הזמנות',
            'communication'     => 'תקשורת',
            'create'            => 'צור',
            'customers'         => 'לקוחות',
            'dashboard'         => 'לוח בקרה',
            'edit'              => 'ערוך',
            'extensions'        => 'תוספים',
            'general'           => 'כללי',
            'inventory-sources' => 'מקורות מלאי',
            'manage-profile'    => 'ניהול פרופיל',
            'orders'            => 'הזמנות',
            'product-reviews'   => 'ביקורות מוצרים',
            'products'          => 'מוצרים',
            'reporting'         => 'דיווח',
            'roles'             => 'תפקידים',
            'sales'             => 'מכירות',
            'seller-reviews'    => 'ביקורות מוכרים',
            'settings'          => 'הגדרות',
            'title'             => 'פרופיל',
            'transaction'       => 'עסקאות',
            'users'             => 'משתמשים',
            'view'              => 'צפה',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'כניסה',
            'create-your-account' => 'צור את החשבון שלך',
            'email'               => 'אימייל',
            'footer'              => '© זכויות יוצרים 2010 - :current_year, Webkul Software (רשום בהודו). כל הזכויות שמורות.',
            'forgot-pass'         => 'שכחת סיסמה?',
            'form-login-text'     => 'אם יש לך חשבון, התחבר עם כתובת האימייל שלך.',
            'invalid-credentials' => 'בבקשה בדוק את הפרטים שלך ונסה שוב.',
            'new-seller'          => 'מוכר חדש?',
            'not-approved'        => 'ההפעלה שלך מחכה לאישור מנהל',
            'page-title'          => 'כניסת מוכר',
            'password'            => 'סיסמה',
            'show-password'       => 'הצג סיסמה',
            'suspended-message'   => 'החשבון שלך הוקפא. צור קשר עם המנהל לכל שאלה.',
            'title'               => 'כניסה',
        ],

        'signup' => [
            'account-exists'   => 'כבר יש לך חשבון?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'הרשם',
            'confirm-pass'     => 'אימות סיסמה',
            'email'            => 'אימייל',
            'footer'           => '© זכויות יוצרים 2010 - :current_year, Webkul Software (רשום בהודו). כל הזכויות שמורות.',
            'form-signup-text' => 'אם אתה חדש בחנות שלנו, אנו שמחים לשלב אותך כחבר.',
            'name'             => 'שם',
            'page-title'       => 'הפוך למוכר',
            'password'         => 'סיסמה',
            'sign-in-button'   => 'כניסה',
            'success'          => 'החשבון נוצר בהצלחה.',
            'url'              => 'כתובת החנות',
        ],

        'forgot-password' => [
            'already-sent'         => 'כבר שלחנו את הקישור לאיפוס הסיסמה לכתובת הדוא"ל שלך.',
            'back'                 => 'חזרה להתחברות?',
            'bagisto'              => 'Bagisto',
            'email'                => 'אימייל',
            'email-not-exist'      => 'לא ניתן למצוא משתמש עם כתובת האימייל הזו.',
            'footer'               => '© זכויות יוצרים 2010 - :current_year, Webkul Software (רשום בהודו). כל הזכויות שמורות.',
            'forgot-password-text' => 'אם שכחת את הסיסמה שלך, שחזור אותה על ידי הזנת כתובת האימייל שלך.',
            'page-title'           => 'שכחת סיסמה?',
            'reset-link-sent'      => 'שלחנו לך לינק לאיפוס הסיסמה שלך באימייל.',
            'sign-in-button'       => 'כניסה',
            'submit'               => 'איפוס סיסמה',
            'title'                => 'שחזור סיסמה',
        ],

        'reset-password' => [
            'back-link-title'  => 'חזור להתחברות',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'אימות סיסמה',
            'email'            => 'אימייל רשום',
            'footer'           => '© זכויות יוצרים 2010 - :current_year, Webkul Software (רשום בהודו). כל הזכויות שמורות.',
            'password'         => 'סיסמה',
            'submit-btn-title' => 'איפוס סיסמה',
            'title'            => 'איפוס סיסמה',
        ],

        'dashboard' => [
            'add-product'           => 'הוסף מוצר',
            'avg-order-sell'        => 'ממוצע מכירה להזמנה',
            'category-info'         => 'לא נמצאה קטגוריה לטווח הזמן שנבחר',
            'complete-profile-link' => 'השלם את הפרופיל שלך &rarr;',
            'completed-orders'      => 'הזמנות שהושלמו (:count)',
            'customer-info'         => 'לא נמצאו לקוחות לטווח זמן נבחר',
            'date-range'            => 'טווח תאריכים',
            'empty-threshold'       => 'סף ריק',
            'empty-threshold-desc'  => 'אין מוצרים זמינים',
            'end-date'              => 'תאריך סיום',
            'hi-comment'            => 'בדוק מה קורה בחנות שלך.',
            'hi-seller'             => 'שלום! :seller_name',
            'month'                 => 'החודש',
            'no-category'           => 'אין נתונים זמינים',
            'no-customer'           => 'אין נתונים זמינים',
            'no-record-available'   => 'אין רשומות זמינות.',
            'order-count'           => ':total הזמנות',
            'overall-details'       => 'פרטים כלליים',
            'pending-orders'        => 'הזמנות בהמתנה (:count)',
            'per-unit'              => ':price/יחידה',
            'processing-orders'     => 'הזמנות בעיבוד (:count)',
            'product-info'          => 'הוסף מוצרים קשורים במהלך',
            'profile-score'         => 'ציון פרופיל',
            'profile-score-desc'    => 'מקסם את הנראות שלך על ידי שמירה על פרטי הפרופיל שלך מלאים.',
            'qty-stock'             => ':qty במלאי',
            'refunded-orders'       => 'הזמנות שהוחזרו (:count)',
            'remaining-payout'      => 'התשלום הנותר',
            'start-date'            => 'תאריך התחלה',
            'stock-threshold'       => 'סף מלאי',
            'title'                 => 'לוח בקרה',
            'today'                 => 'היום',
            'top-categories'        => 'קטגוריות מובילות',
            'top-customers'         => 'לקוח עם הכי הרבה מכירות',
            'top-products'          => 'המוצרים הנמכרים ביותר',
            'total-customers'       => 'סך כל הלקוחות',
            'total-orders'          => 'סך כל ההזמנות',
            'total-payout'          => 'סך כל התשלומים',
            'total-sale'            => 'סה"כ מכירות: :total',
            'total-sales'           => 'סך כל המכירות',
            'view-all-btn'          => 'הצג הכול',
            'visitor-count'         => 'מבקרים - :count',
            'week'                  => 'השבוע',
            'year'                  => 'השנה',
        ],

        'orders' => [
            'index' => [
                'title' => 'הזמנות',

                'datagrid' => [
                    'canceled'        => 'בוטל',
                    'closed'          => 'סגור',
                    'commission'      => 'עמלה',
                    'completed'       => 'הושלם',
                    'customer'        => 'לקוח',
                    'date'            => 'תאריך',
                    'discount'        => 'הנחה',
                    'email'           => 'אימייל',
                    'fraud'           => 'הופקע',
                    'gross-amt'       => 'סכום גולמי',
                    'id'              => 'מזהה',
                    'invoice-pending' => 'המתנה לחשבונית',
                    'items'           => 'פרטים',
                    'location'        => 'מיקום',
                    'order-id'        => 'מזהה - #:id',
                    'paid'            => 'שולם',
                    'payment'         => 'תשלום',
                    'payment-request' => 'בקשת תשלום',
                    'pending'         => 'ממתין',
                    'pending-payment' => 'ממתין לתשלום',
                    'processing'      => 'בעיבוד',
                    'refunded'        => 'הוחזר',
                    'requested'       => 'בהמתנה',
                    'seller-earn'     => 'רווח למוכר',
                    'shipment'        => 'משלוח',
                    'status'          => 'סטטוס',
                    'transaction'     => 'עסקה',
                    'view'            => 'צפה',
                ],

                'payment-req-success'  => 'בקשת התשלום שלך נשלחה בהצלחה',
                'something-went-wrong' => 'משהו השתבש!',
            ],

            'view' => [
                'admin-commission'           => 'עמלת מנהל',
                'billing-address'            => 'כתובת לחיוב',
                'by-customer'                => 'על ידי לקוח - :name',
                'cancel-btn'                 => 'ביטול',
                'cancel-confirm-msg'         => 'האם אתה בטוח שאתה רוצה לבטל את ההזמנה הזו?',
                'cancel-error-msg'           => 'לא ניתן לבטל את ההזמנה',
                'cancel-success-msg'         => 'ההזמנה בוטלה בהצלחה',
                'canceled'                   => 'בוטל',
                'closed'                     => 'סגור',
                'completed'                  => 'הושלם',
                'discount'                   => 'הנחה',
                'fraud'                      => 'הופקע',
                'grand-total'                => 'סכום כולל',
                'info'                       => 'מידע',
                'item-canceled'              => 'בוטל (:qty_canceled)',
                'item-invoice'               => 'חשבונית (:qty_invoiced)',
                'item-ordered'               => 'הוזמן (:qty_ordered)',
                'item-refunded'              => 'הוחזר (:qty_refunded)',
                'item-shipped'               => 'נשלח (:qty_shipped)',
                'item-status'                => 'סטטוס מוצר',
                'payment-method'             => 'אמצעי תשלום',
                'pending'                    => 'ממתין',
                'pending_payment'            => 'ממתין לתשלום',
                'permission-error'           => 'אין לך הרשאה לבטל את ההזמנה',
                'place-on'                   => 'מוצג ב- :date',
                'price'                      => 'מחיר',
                'price-excl-tax'             => 'מחיר (ללא מע״מ)',
                'price-incl-tax'             => 'מחיר (כולל מע״מ)',
                'processing'                 => 'בעיבוד',
                'product'                    => 'מוצר',
                'shipping-address'           => 'כתובת למשלוח',
                'shipping-handling'          => 'משלוח וטיפול',
                'shipping-handling-excl-tax' => 'משלוח וטיפול (ללא מס)',
                'shipping-handling-incl-tax' => 'משלוח וטיפול (עם מס)',
                'shipping-method'            => 'אמצעי משלוח',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'סכום ביניים',
                'sub-total-excl-tax'         => 'סכום חלקי (ללא מס)',
                'sub-total-incl-tax'         => 'סכום חלקי (עם מס)',
                'tax'                        => 'מס',
                'tax-amount'                 => 'סכום מס',
                'tax-percent'                => 'אחוז מס',
                'title'                      => 'הזמנה #:order_id',
                'total'                      => 'סך הכל',
                'total-due'                  => 'סכום כולל לתשלום',
                'total-paid'                 => 'סך הכל ששולם',
                'total-refunded'             => 'סכום כולל שהוחזר',
                'total-seller-amt'           => 'סכום כולל למוכר',

                'invoices' => [
                    'bank-details'               => 'פרטי בנק',
                    'bill-to'                    => 'לחיוב',
                    'contact'                    => 'איש קשר',
                    'contact-number'             => 'מספר איש קשר',
                    'created-on'                 => 'נוצר בתאריך: :date_time',
                    'date'                       => 'תאריך חשבונית',
                    'discount'                   => 'הנחה',
                    'excl-tax'                   => 'ללא מע"מ:',
                    'grand-total'                => 'סכום כולל',
                    'individual-invoice'         => 'חשבונית #:invoice_id',
                    'invoice'                    => 'חשבונית',
                    'invoice-id'                 => 'מזהה חשבונית',
                    'name'                       => 'שם',
                    'order-date'                 => 'תאריך הזמנה',
                    'order-id'                   => 'מזהה הזמנה',
                    'payment-method'             => 'אמצעי תשלום',
                    'payment-terms'              => 'תנאי תשלום',
                    'price'                      => 'מחיר',
                    'print'                      => 'הדפס',
                    'product-name'               => 'שם המוצר',
                    'qty'                        => 'כמות',
                    'ship-to'                    => 'למשלוח',
                    'shipping-handling'          => 'משלוח וטיפול',
                    'shipping-handling-excl-tax' => 'משלוח וטיפול (ללא מע"מ)',
                    'shipping-handling-incl-tax' => 'משלוח וטיפול (כולל מע"מ)',
                    'shipping-method'            => 'אמצעי משלוח',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'סכום ביניים',
                    'sub-total-excl-tax'         => 'סכום ביניים (ללא מע"מ)',
                    'sub-total-incl-tax'         => 'סכום ביניים (כולל מע"מ)',
                    'tax'                        => 'מע"מ',
                    'tax-amount'                 => 'סכום המע"מ',
                    'title'                      => 'חשבוניות',
                    'vat-number'                 => 'מספר מע"מ',
                ],

                'shipments' => [
                    'carrier-title'       => 'שם המוביל',
                    'created-on'          => 'נוצר ב- :date_time',
                    'individual-shipment' => 'משלוח #:track_number',
                    'inventory-source'    => 'מקור מלאי',
                    'name'                => 'שם',
                    'qty'                 => 'כמות',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'משלוחים',
                    'tracking-number'     => 'מספר מעקב',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'עמלת התאמה',
                    'adjustment-refund'          => 'החזר התאמה',
                    'created-on'                 => 'נוצר ב- :date_time',
                    'discount'                   => 'הנחה',
                    'grand-total'                => 'סכום כולל',
                    'individual-refund'          => 'החזר #:refund_id',
                    'no-result-found'            => 'לא נמצאו רשומות.',
                    'price'                      => 'מחיר',
                    'product-name'               => 'שם המוצר',
                    'qty'                        => 'כמות',
                    'shipping-handling'          => 'משלוח וטיפול',
                    'shipping-handling-excl-tax' => 'משלוח וטיפול (ללא מס)',
                    'shipping-handling-incl-tax' => 'משלוח וטיפול (עם מס)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'סכום חלקי (ללא מס)',
                    'sub-total-incl-tax'         => 'סכום חלקי (עם מס)',
                    'subtotal'                   => 'סכום חלקי',
                    'tax'                        => 'מע"מ',
                    'tax-amount'                 => 'סכום המע"מ',
                    'title'                      => 'החזרים',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'חשבונית',
                'invoice-success'  => 'חשבונית נוצרה בהצלחה',
                'permission-error' => 'אין לך הרשאה ליצירת חשבונית להזמנה',
                'price'            => 'מחיר',
                'product-name'     => 'שם המוצר',
                'qty'              => 'כמות',
                'qty-error'        => 'הכמות המבוקשת אינה זמינה',
                'sub-total'        => 'סכום ביניים',
                'title'            => 'יצירת חשבונית',
                'total'            => 'סכום',
            ],

            'shipments' => [
                'avl-qty'          => 'כמות זמינה - :qty Qty',
                'carrier-title'    => 'שם המוביל',
                'create-btn'       => 'שלח',
                'ordered-qty'      => 'כמות הוזמנה',
                'permission-error' => 'אין לך הרשאה ליצירת משלוח להזמנה',
                'product-name'     => 'שם המוצר',
                'qty'              => 'כמות',
                'qty-error'        => 'הכמות המבוקשת אינה זמינה',
                'shipment-success' => 'משלוח נוצר בהצלחה',
                'shipped-qty'      => 'כמות משולחת',
                'sku'              => 'SKU - :sku',
                'source'           => 'מקור ההזמנה',
                'title'            => 'יצירת משלוח',
                'tracking-id'      => 'מספר מעקב',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'תאריך יצירה',
                    'from'         => 'מ',
                    'id'           => 'מזהה',
                    'order-id'     => 'מספר הזמנה',
                    'qty'          => 'כמות',
                    'to'           => 'עד',
                    'view'         => 'צפה',
                ],

                'title'    => 'הזמנות',
            ],

            'calendar' => [
                'booking-date'     => 'תאריך הזמנה',
                'booking-details'  => 'פרטי הזמנה',
                'canceled'         => 'בוטל',
                'closed'           => 'סגור',
                'done'             => 'בוצע',
                'order-id'         => 'מספר הזמנה',
                'pending'          => 'ממתין',
                'price'            => 'מחיר',
                'status'           => 'סטטוס',
                'time-slot'        => 'משבצת זמן:',
                'view-details'     => 'צפה בפרטים',
            ],

            'title' => 'מוצרי הזמנות',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'תשלומים נותרים',
                'title'                  => 'עסקאות',
                'total-payout'           => 'סה"כ תשלומים',
                'total-seller-sale'      => 'סה"כ מכירות (מוכר)',
                'total-admin-commission' => 'סה"כ עמלה (מנהל)',
                'total-sale-invoiced'    => 'סה"כ מכירות (בחשבונית)',

                'datagrid' => [
                    'comment'        => 'הערה',
                    'id'             => 'מזהה',
                    'total'          => 'סה"כ',
                    'transaction-id' => 'מזהה עסקה',
                ],
            ],

            'view' => [
                'commission'        => 'עמלה',
                'created-on'        => 'נוצר בתאריך :date',
                'date'              => 'תאריך',
                'id'                => 'מזהה עסקה',
                'method'            => 'אמצעי',
                'name'              => 'שם',
                'payment-method'    => 'תשלום באמצעות :method',
                'price'             => 'מחיר',
                'print'             => 'הדפס',
                'qty'               => 'כמות',
                'seller-total'      => 'סה"כ למוכר',
                'shipping-handling' => 'משלוח וטיפול',
                'subtotal'          => 'סה"כ ביניים',
                'tax'               => 'מס',
                'title'             => 'עסקה',
                'total'             => 'סה״כ',
                'transaction-id'    => 'מספר עסקה: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'הוסף מוצר חדש',
                'title'           => 'מוצרים',

                'datagrid' => [
                    'active'         => 'פעיל',
                    'approved'       => 'אושר',
                    'category'       => 'קטגוריה',
                    'delete'         => 'מחק',
                    'disable'        => 'להשבית',
                    'disapproved'    => 'לא מאושר',
                    'edit'           => 'ערוך',
                    'id'             => 'מזהה',
                    'image'          => 'תמונה',
                    'is-approved'    => 'אושר',
                    'name'           => 'שם',
                    'out-of-stock'   => 'אזל מהמלאי',
                    'price'          => 'מחיר',
                    'product-number' => 'מספר מוצר',
                    'product_id'     => 'מזהה - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'סטטוס',
                    'stock'          => 'מלאי',
                    'total-quantity' => ':quantity זמין',
                    'type'           => 'סוג',
                ],
            ],

            'create' => [
                'attribute-family'          => 'קבוצת מאפיינים',
                'back'                      => 'חזור',
                'continue'                  => 'המשך',
                'create-new-product'        => 'צור מוצר חדש',
                'create-your-new-product'   => 'אם המוצר אינו קיים, ייצר את המוצר החדש שלך',
                'disable-product-message'   => 'המנהל השבית את הפונקציה ליצירה או הקצאת מוצרים.',
                'image-placeholder'         => 'התמונה שלך',
                'no-result'                 => 'אין תוצאה',
                'not-allowed'               => 'אינך מורשה ליצור מוצר',
                'or'                        => 'או',
                'product-type'              => 'סוג המוצר',
                'search-product'            => 'חפש מוצרים',
                'sell-admin-product-prices' => 'מכור מוצר מנהל במחירים שלך.',
                'sell-as-yours'             => 'מכור כשלך',
                'sku'                       => 'SKU',
                'sub-title'                 => 'ניתן להוסיף מוצר בשני דרכים, או ממוצר המנהל או ליצור מוצר משלך.',
                'title'                     => 'הוסף מוצר חדש',
                'update-profile'            => 'אנא עדכן את פרטי הפרופיל שלך',
            ],

            'edit' => [
                'back-btn'      => 'חזרה',
                'preview'       => 'תצוגה מקדימה',
                'remove'        => 'הסר',
                'save-btn'      => 'שמור מוצר',
                'title'         => 'ערוך מוצר',
                'channels'      => 'ערוך מוצר',
                'progress-info' => 'שפר את האטרקטיביות של המוצר שלך והשאר רושם מתמשך על הלקוחות על ידי הקפדה שכל פרטי המוצר יהיו מלאים ומדויקים!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'הוסף מחיר קבוצתי',
                        'all-groups'                => 'כל הקבוצות',
                        'create-btn'                => 'הוסף חדש',
                        'discount-group-price-info' => 'עבור כמות :price בהנחה של :qty',
                        'edit-btn'                  => 'ערוך',
                        'empty-info'                => 'מחיר מיוחד ללקוחות שנמצאים בקבוצה ספציפית.',
                        'fixed-group-price-info'    => 'עבור :qty יחידות במחיר קבוע של :price',
                        'title'                     => 'מחיר לקבוצת לקוחות',

                        'create' => [
                            'all-groups'     => 'כל הקבוצות',
                            'create-title'   => 'צור מחיר לקבוצת לקוחות',
                            'customer-group' => 'קבוצת לקוח',
                            'delete-btn'     => 'מחק',
                            'discount'       => 'הנחה',
                            'fixed'          => 'קבוע',
                            'price'          => 'מחיר',
                            'price-type'     => 'סוג מחיר',
                            'qty'            => 'כמות',
                            'save-btn'       => 'שמור',
                            'update-title'   => 'עדכן מחיר לקבוצת לקוחות',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'כמות ממתינה להזמנה: :qty',
                    'pending-ordered-qty-info' => 'כמות הממתינה להזמנה תוחתם ממקור המלאי הרלוונטי לאחר השילוח. במקרה של ביטול, הכמות הממתינה תהיה זמינה למכירה מחדש.',
                    'title'                    => 'מלאי',
                ],

                'categories' => [
                    'title' => 'קטגוריות',
                ],

                'images' => [
                    'info'  => 'רזולוציה של התמונה צריכה להיות כמו 609px X 560px',
                    'title' => 'תמונות',
                ],

                'videos' => [
                    'error' => 'הוידאו לא יכול להיות גדול מ-:max קילובייט. בחר קובץ קטן יותר בבקשה.',
                    'info'  => 'גודל הווידאו המרבי צריך להיות כמו :size',
                    'title' => 'וידאו',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'הוסף מוצרים קשורים בדרך.',
                        'info'       => 'בנוסף למוצר שהלקוח רואה, הוא מצוגף למוצרים קשורים.',
                        'title'      => 'מוצרים קשורים',
                    ],

                    'up-sells' => [
                        'empty-info' => 'הוסף מוצרי מכירות נוספים בדרך.',
                        'info'       => 'הלקוח מצוגף למוצרים מומלצים שמהם יכול לבחור כדי לשדרג את הרכישה שלו.',
                        'title'      => 'מוצרים מומלצים',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'הוסף מוצרי מכירות חוצות בדרך.',
                        'info'       => 'ליד הסל האופטימלי מופיעים מוצרים מומלצים שניתן להוסיף לסל כדי לשדרג את הקנייה שלך.',
                        'title'      => 'מוצרים מומלצים בקנייה',
                    ],

                    'add-btn'           => 'הוסף מוצר',
                    'delete'            => 'מחק',
                    'empty-info'        => 'כדי להוסיף מוצרים מסוג :type ברגע.',
                    'empty-title'       => 'הוסף מוצר',
                    'image-placeholder' => 'תמונת המוצר',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'הוסף אפשרות',
                            'empty-info'        => 'ליצירת אפשרויות מותאמות אישית במהירות.',
                            'empty-title'       => 'הוסף אפשרות',
                            'info'              => 'זה יתאים אישית את המוצר הפשוט.',
                            'title'             => 'פריט ניתן להתאמה אישית',

                            'update-create' => [
                                'is-required'               => 'נדרש',
                                'max-characters'            => 'מקסימום תווים',
                                'name'                      => 'כותרת',
                                'no'                        => 'לא',
                                'price'                     => 'מחיר',
                                'save-btn'                  => 'שמור',
                                'supported-file-extensions' => 'סיומות קבצים נתמכות',
                                'title'                     => 'אפשרות',
                                'type'                      => 'סוג',
                                'yes'                       => 'כן',
                            ],

                            'option' => [
                                'add-btn'     => 'הוסף אפשרות',
                                'delete'      => 'מחק',
                                'delete-btn'  => 'מחק',
                                'edit-btn'    => 'ערוך',
                                'empty-info'  => 'ליצירת שילובים שונים של מוצרים במהירות.',
                                'empty-title' => 'הוסף אפשרות',

                                'types' => [
                                    'text' => [
                                        'title' => 'טקסט',
                                    ],

                                    'textarea' => [
                                        'title' => 'אזור טקסט',
                                    ],

                                    'checkbox' => [
                                        'title' => 'תיבת סימון',
                                    ],

                                    'radio' => [
                                        'title' => 'רדיו',
                                    ],

                                    'select' => [
                                        'title' => 'בחר',
                                    ],

                                    'multiselect' => [
                                        'title' => 'רב-בחירה',
                                    ],

                                    'date' => [
                                        'title' => 'תאריך',
                                    ],

                                    'datetime' => [
                                        'title' => 'תאריך ושעה',
                                    ],

                                    'time' => [
                                        'title' => 'זמן',
                                    ],

                                    'file' => [
                                        'title' => 'קובץ',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'תווית',
                                        'price'    => 'מחיר',
                                        'save-btn' => 'שמור',
                                        'title'    => 'אפשרות',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'המוצר כבר מקושר למוצר ניתן להתאמה, מקובץ או בחבילה.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'הוסף נציג',
                        'delete-btn'        => 'מחק',
                        'edit-btn'          => 'ערוך',
                        'empty-info'        => 'כדי ליצור שילובים שונים של מוצר בצעדה.',
                        'empty-title'       => 'הוסף נציג',
                        'image-placeholder' => 'תמונת המוצר',
                        'info'              => 'מוצרי השוניות תלויים בכל השילובים האפשריים של המאפיינים.',
                        'qty'               => ':qty יחידות',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'שוניות',

                        'create'  => [
                            'description'            => 'תיאור',
                            'name'                   => 'שם',
                            'save-btn'               => 'הוסף',
                            'title'                  => 'הוסף נציג',
                            'variant-already-exists' => 'נציג זה כבר קיים',
                        ],

                        'edit' => [
                            'disabled'        => 'מושבת',
                            'edit-info'       => 'אם ברצונך לעדכן את מידע המוצר בפרטיות, עבור לדף',
                            'edit-link-title' => 'דף פרטי המוצר',
                            'enabled'         => 'מופעל',
                            'images'          => 'תמונות',
                            'name'            => 'שם',
                            'price'           => 'מחיר',
                            'quantities'      => 'כמויות',
                            'save-btn'        => 'שמור',
                            'sku'             => 'SKU',
                            'status'          => 'סטטוס',
                            'title'           => 'מוצר',
                            'weight'          => 'משקל',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'הוסף תמונות',
                            'apply-to-all-btn'    => 'החל על כולם',
                            'apply-to-all-sku'    => 'החל מחיר לכל ה-SKU.',
                            'edit-inventories'    => 'ערוך מלאי',
                            'edit-prices'         => 'ערוך מחירים',
                            'price'               => 'מחיר',
                            'remove-images'       => 'הסר תמונות',
                            'remove-variants'     => 'הסר וריאנטים',
                            'select-action'       => 'בחר פעולה',
                            'select-variants'     => 'בחר וריאנטים',
                            'edit-name'           => 'ערוך שם',
                            'name'                => 'שם',
                            'edit-sku'            => 'ערוך SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'ערוך משקל',
                            'weight'              => 'משקל',
                            'edit-status'         => 'ערוך מצב',
                            'status'              => 'מצב',
                            'apply-to-all-name'   => 'החל שם על כל הווריאנטים.',
                            'apply-to-all-weight' => 'החל משקל על כל הווריאנטים.',
                            'apply-to-all-status' => 'החל מצב על כל הווריאנטים.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'הוסף מוצר',
                        'default-qty'       => 'כמות ברירת מחדל',
                        'delete'            => 'מחק',
                        'empty-info'        => 'כדי ליצור שילובים שונים של מוצר בצעדה.',
                        'empty-title'       => 'הוסף מוצר',
                        'image-placeholder' => 'תמונת המוצר',
                        'info'              => 'מוצר מקובץ משמים לעצמו מוצרים עצמאיים המוצגים כקבוצה, מאפשרים שונות או תיאום לפי עונה או נושא. כל מוצר ניתן לרכוש באופן עצמאי או כחלק מהקבוצה.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'מוצרים בקבוצה',
                    ],

                    'bundle' => [
                        'add-btn'           => 'הוסף אפשרות',
                        'empty-info'        => 'כדי ליצור אפשרויות אריזה בצעדה.',
                        'empty-title'       => 'הוסף אפשרות',
                        'image-placeholder' => 'תמונת המוצר',
                        'info'              => 'מוצר אריזת חבילה הוא חבילת מספר פריטים או שירותים מרובים המתנהלים יחד במחיר מיוחד, המספקים ערך ונוחות ללקוחות.',
                        'title'             => 'פרטי אריזה',

                        'update-create' => [
                            'checkbox'    => 'תיבת סימון',
                            'is-required' => 'חובה',
                            'multiselect' => 'בחירה מרובה',
                            'name'        => 'כותרת',
                            'no'          => 'לא',
                            'radio'       => 'רדיו',
                            'save-btn'    => 'שמור',
                            'select'      => 'בחירה',
                            'title'       => 'אפשרויות',
                            'type'        => 'סוג',
                            'yes'         => 'כן',
                        ],

                        'option' => [
                            'add-btn'     => 'הוסף מוצר',
                            'default-qty' => 'כמות ברירת מחדל',
                            'delete'      => 'מחק',
                            'delete-btn'  => 'מחק',
                            'edit-btn'    => 'ערוך',
                            'empty-info'  => 'כדי ליצור שילובים שונים של מוצר בצעדה.',
                            'empty-title' => 'הוסף מוצר',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'הגדר מוצר ברירת מחדל באמצעות תיבת סימון',
                                    'title' => 'תיבת סימון',
                                ],

                                'multiselect' => [
                                    'info'  => 'הגדר מוצר ברירת מחדל באמצעות לחצן תיבת הסימון',
                                    'title' => 'בחירה מרובה',
                                ],

                                'radio' => [
                                    'info'  => 'הגדר מוצר ברירת מחדל באמצעות לחצן רדיו',
                                    'title' => 'רדיו',
                                ],

                                'select' => [
                                    'info'  => 'הגדר מוצר ברירת מחדל באמצעות בחירה',
                                    'title' => 'בחירה',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'זמין מ',
                        'available-to'   => 'זמין עד',
                        'location'       => 'מיקום',
                        'qty'            => 'כמות',
                        'title'          => 'סוג הזמנה',

                        'available-every-week' => [
                            'no'    => 'לא',
                            'title' => 'זמין כל שבוע',
                            'yes'   => 'כן',
                        ],

                        'appointment' => [
                            'break-duration'         => 'זמן הפסקה בין משבצות (דקות)',
                            'slot-duration'          => 'משך משבצת (דקות)',

                            'same-slot-for-all-days' => [
                                'no'    => 'לא',
                                'title' => 'אותה משבצת לכל הימים',
                                'yes'   => 'כן',
                            ],
                        ],

                        'default' => [
                            'add'              => 'הוסף',
                            'break-duration'   => 'זמן הפסקה בין משבצות (דקות)',
                            'close'            => 'סגור',
                            'description'      => 'מידע על הזמנה',
                            'description-info' => 'משך הזמן ייווצר ויוצג בהתאם לחריצים. הוא יהיה ייחודי לכל החריצים וייראה בחזית החנות.',
                            'edit'             => 'ערוך',
                            'many'             => 'הזמנות רבות ליום אחד',
                            'one'              => 'הזמנה אחת לימים רבים',
                            'open'             => 'פתח',
                            'slot-add'         => 'הוסף משבצות',
                            'slot-duration'    => 'משך משבצת (דקות)',
                            'slot-title'       => 'משך זמן משבצות',
                            'title'            => 'ברירת מחדל',
                            'unavailable'      => 'לא זמין',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'הוסף משבצות',
                                    'close'      => 'סגור',
                                    'day'        => 'יום',
                                    'edit-title' => 'ערוך משבצות',
                                    'friday'     => 'שישי',
                                    'from'       => 'מ',
                                    'from-day'   => 'מיום',
                                    'from-time'  => 'משעה',
                                    'monday'     => 'שני',
                                    'open'       => 'פתח',
                                    'saturday'   => 'שבת',
                                    'save'       => 'שמור',
                                    'select'     => 'בחר',
                                    'status'     => 'סטטוס',
                                    'sunday'     => 'ראשון',
                                    'thursday'   => 'חמישי',
                                    'to'         => 'עד',
                                    'to-day'     => 'עד יום',
                                    'to-time'    => 'עד שעה',
                                    'tuesday'    => 'שלישי',
                                    'wednesday'  => 'רביעי',
                                    'week'       => ':יום',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'הוסף כרטיסים',
                            'delete'             => 'מחק',
                            'description'        => 'תיאור',
                            'description-info'   => 'אין כרטיסים זמינים.',
                            'edit'               => 'ערוך',
                            'name'               => 'שם',
                            'price'              => 'מחיר',
                            'qty'                => 'כמות',
                            'special-price'      => 'מחיר מיוחד',
                            'special-price-from' => 'מחיר מיוחד מ',
                            'special-price-to'   => 'מחיר מיוחד עד',
                            'title'              => 'כרטיסים',
                            'valid-from'         => 'תקף מ',
                            'valid-until'        => 'תקף עד',

                            'modal'              => [
                                'edit' => 'ערוך כרטיסים',
                                'save' => 'שמור',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'הוסף כרטיסים',
                            ],

                            'slots'   => [
                                'add'         => 'הוסף משבצות',
                                'description' => 'משבצות זמינות עם משך זמן.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'על בסיס יומי',
                            'daily-hourly' => 'שניהם (יומי ושעתי)',
                            'daily-price'  => 'מחיר יומי',
                            'hourly'       => 'על בסיס שעתי',
                            'hourly-price' => 'מחיר שעתי',
                            'title'        => 'סוג השכרה',

                            'same-slot-for-all-days' => [
                                'no'    => 'לא',
                                'title' => 'אותה משבצת לכל הימים',
                                'yes'   => 'כן',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'הוסף משבצות',
                            'description-info' => 'משך הזמן ייווצר ויוצג בהתאם לחריצים. הוא יהיה ייחודי לכל החריצים וייראה בחזית החנות.',
                            'save'             => 'שמור',
                            'title'            => 'משך זמן משבצות',
                            'unavailable'      => 'לא זמין',

                            'action'           => [
                                'add' => 'הוסף',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'שישי',
                                    'from'       => 'מ',
                                    'monday'     => 'שני',
                                    'saturday'   => 'שבת',
                                    'sunday'     => 'ראשון',
                                    'thursday'   => 'חמישי',
                                    'to'         => 'עד',
                                    'tuesday'    => 'שלישי',
                                    'wednesday'  => 'רביעי',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'זמן הפסקה בין משבצות (דקות)',
                            'guest-capacity'            => 'קיבולת אורחים',
                            'guest-limit'               => 'מגבלת אורחים לשולחן',
                            'prevent-scheduling-before' => 'מניעת תזמון לפני',
                            'slot-duration'             => 'משך משבצת (דקות)',

                            'charged-per'               => [
                                'guest'  => 'אורח',
                                'table'  => 'שולחן',
                                'title'  => 'מחויב לפי',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'לא',
                                'title' => 'אותה משבצת לכל הימים',
                                'yes'   => 'כן',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'הזמנת פגישה',
                            'default'     => 'הזמנה ברירת מחדל',
                            'event'       => 'הזמנת אירוע',
                            'many'        => 'רבים',
                            'one'         => 'אחד',
                            'rental'      => 'הזמנת השכרה',
                            'table'       => 'הזמנת שולחן',
                            'title'       => 'סוג',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'הוסף קישור',
                            'delete-btn'  => 'מחק',
                            'edit-btn'    => 'ערוך',
                            'empty-info'  => 'כדי ליצור קישור בצעדה.',
                            'empty-title' => 'הוסף קישור',
                            'file'        => 'קובץ: ',
                            'info'        => 'סוג המוצר הניתן להוריד מאפשר למכור מוצרים דיגיטליים, כמו ספרים אלקטרוניים, יישומי תוכנה, מוזיקה, משחקים ועוד.',
                            'sample-file' => 'קובץ לדוגמה: ',
                            'sample-url'  => 'כתובת לדוגמה: ',
                            'title'       => 'קישורים להורדה',
                            'url'         => 'כתובת אינטרנט: ',

                            'update-create' => [
                                'downloads'   => 'הורדה מותרת',
                                'file'        => 'קובץ',
                                'file-type'   => 'סוג הקובץ',
                                'name'        => 'כותרת',
                                'price'       => 'מחיר',
                                'sample'      => 'דוגמה',
                                'sample-type' => 'סוג הדוגמה',
                                'save-btn'    => 'שמור',
                                'title'       => 'קישור',
                                'url'         => 'כתובת אינטרנט',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'הוסף דוגמה',
                            'delete-btn'  => 'מחק',
                            'edit-btn'    => 'ערוך',
                            'empty-info'  => 'כדי ליצור דוגמה בצעדה.',
                            'empty-title' => 'הוסף דוגמה',
                            'file'        => 'קובץ: ',
                            'info'        => 'סוג המוצר הניתן להוריד מאפשר למכור מוצרים דיגיטליים, כמו ספרים אלקטרוניים, יישומי תוכנה, מוזיקה, משחקים ועוד.',
                            'title'       => 'דוגמות להורדה',
                            'url'         => 'כתובת אינטרנט: ',

                            'update-create' => [
                                'file'      => 'קובץ',
                                'file-type' => 'סוג הקובץ',
                                'name'      => 'כותרת',
                                'save-btn'  => 'שמור',
                                'title'     => 'קישור',
                                'url'       => 'כתובת אינטרנט',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'המוצר נוצר בהצלחה',
            'delete-failed'            => 'נכשלה מחיקת המוצר',
            'delete-success'           => 'המוצר נמחק בהצלחה',
            'product-type-not-allowed' => 'אינך מורשה למכור מוצרי סוג :type',
            'saved-inventory-message'  => 'המוצר נשמר בהצלחה',
            'update-success'           => 'המוצר עודכן בהצלחה',

            'assign' => [
                'already-selling'     => 'אתה כבר מוכר את המוצר הזה',
                'back-btn'            => 'חזרה',
                'condition'           => 'מצב',
                'create-success'      => 'המוצר הוקצה בהצלחה למוכר',
                'description'         => 'תיאור',
                'image-size'          => 'רזולוציית התמונה צריכה להיות 609px X 560px',
                'images'              => 'תמונות',
                'new'                 => 'חדש',
                'not-allowed'         => 'אינך מורשה לשייך מוצר זה',
                'old'                 => 'ישן',
                'price'               => 'מחיר',
                'product-not-allowed' => 'אין לך הרשאה למכור מוצר מסוג :type',
                'quantities'          => 'כמויות',
                'save-btn'            => 'שמור',
                'title'               => 'הקצה מוצר',
                'update-success'      => 'המוצר שהוקצה עודכן בהצלחה',

                'product-details' => [
                    'active'            => 'פעיל',
                    'approved'          => 'מאושר',
                    'disable'           => 'השבת',
                    'disapproved'       => 'לא מאושר',
                    'image-placeholder' => 'תמונת מוצר',
                    'title'             => 'פרטי מוצר',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'ביקורות על מוצרים',

                'datagrid' => [
                    'approved'      => 'אושר',
                    'customer'      => 'לקוח',
                    'date'          => 'תאריך',
                    'description'   => 'תיאור',
                    'email'         => 'אימייל',
                    'pending'       => 'ממתין לאישור',
                    'product'       => 'מוצר',
                    'rating'        => 'דירוג',
                    'status'        => 'סטטוס',
                    'title'         => 'כותרת',
                    'unapproved'    => 'לא אושר',
                    'update-status' => 'מצב עדכון',
                ],
            ],

            'update-success' => 'ביקורות המוצר עודכנו בהצלחה',
            'delete-success' => 'ביקורות על מוצרים נמחקו בהצלחה.',
        ],

        'customers' => [
            'index' => [
                'title' => 'לקוחות',

                'datagrid' => [
                    'active'      => 'פעיל',
                    'customer'    => 'לקוח',
                    'email'       => 'אימייל',
                    'gender'      => 'מגדר',
                    'group'       => 'קבוצה',
                    'inactive'    => 'לא פעיל',
                    'order-count' => 'ספירת הזמנות',
                    'revenue'     => 'הכנסה',
                    'status'      => 'סטטוס',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'ניהול פרופיל',
                'edit-btn' => 'ערוך פרופיל',

                'general' => [
                    'email'      => 'אימייל',
                    'name'       => 'שם',
                    'phone'      => 'מספר טלפון',
                    'shop-slug'  => 'כתובת חנות',
                    'shop-title' => 'כותרת חנות',
                    'title'      => 'מידע כללי',
                ],

                'about-store' => [
                    'title' => 'אודות החנות',
                ],

                'meta' => [
                    'meta-description' => 'תיאור מטא',
                    'meta-keywords'    => 'מילות מפתח מטא',
                    'meta-title'       => 'כותרת מטא',
                    'title'            => 'תיאור מטא',
                ],

                'policy' => [
                    'privacy'  => 'מדיניות פרטיות',
                    'return'   => 'מדיניות החזרות',
                    'shipping' => 'מדיניות משלוחים',
                    'title'    => 'מדיניות',
                ],

                'address' => [
                    'city'     => 'עיר',
                    'country'  => 'מדינה',
                    'postcode' => 'מיקוד',
                    'state'    => 'מדינה',
                    'title'    => 'כתובת חנות',
                    'address'  => 'כתובת',
                ],

                'social' => [
                    'link'  => 'קישור :name',
                    'title' => 'קישורים חברתיים',
                ],

                'minimum-order-amount' => [
                    'title'  => 'סכום הזמנה מינימלי',
                ],

                'google-analytics' => [
                    'id'    => 'מזהה Google Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'עמלת מנהל',
                    'admin-commission-value' => 'עמלת מנהל :rate% מסכום החשבונית הכולל',
                    'allowed-categories'     => 'קטגוריות מותרות',
                    'no-categories'          => 'אין קטגוריות זמינות',
                    'allowed-product-types'  => 'סוגי מוצרים מותרים',
                    'no-product-types'       => 'אין סוגי מוצרים זמינים',
                    'payment-methods'        => 'שיטות תשלום',
                    'no-payment-methods'     => 'אין שיטות תשלום זמינות',
                    'shipping-methods'       => 'שיטות משלוח',
                    'no-shipping-methods'    => 'אין שיטות משלוח זמינות',
                    'title'                  => 'מידע על החנות',
                ],
            ],

            'edit' => [
                'banner'              => 'באנר',
                'banner-description'  => 'העלה באנר ביחס של 13:3, גובה 375 אזור בטוח 375x250 מרכז במובייל',
                'delete-banner'       => 'מחק באנר',
                'delete-logo'         => 'מחק לוגו',
                'logo'                => 'לוגו',
                'logo-description'    => 'העלה לוגו ביחס של 1:1',
                'save-btn'            => 'שמור פרופיל',
                'title'               => 'ניהול פרופיל',
                'upload-new-banner'   => 'העלה באנר חדש',
                'upload-new-logo'     => 'העלה לוגו חדש',

                'general' => [
                    'email'      => 'אימייל',
                    'name'       => 'שם',
                    'phone'      => 'מספר טלפון',
                    'shop-slug'  => 'כתובת חנות',
                    'shop-title' => 'כותרת חנות',
                    'title'      => 'מידע כללי',
                ],

                'about-store' => [
                    'title' => 'אודות החנות',
                ],

                'meta' => [
                    'meta-description' => 'תיאור מטא',
                    'meta-keywords'    => 'מילות מפתח מטא',
                    'meta-title'       => 'כותרת מטא',
                    'title'            => 'תיאור מטא',
                ],

                'policy' => [
                    'privacy'  => 'מדיניות פרטיות',
                    'return'   => 'מדיניות החזרות',
                    'shipping' => 'מדיניות משלוחים',
                    'title'    => 'מדיניות',
                ],

                'address' => [
                    'city'           => 'עיר',
                    'country'        => 'מדינה',
                    'postcode'       => 'מיקוד',
                    'state'          => 'מדינה',
                    'title'          => 'כתובת חנות',
                    'select-country' => 'בחר מדינה',
                    'select-state'   => 'בחר מדינה',
                    'street-address' => 'כתובת רחוב',
                    'address'        => 'כתובת',
                ],

                'social' => [
                    'link'  => 'קישור :name',
                    'title' => 'קישורים חברתיים',
                ],

                'minimum-order-amount' => [
                    'title'  => 'סכום הזמנה מינימלי',
                ],

                'google-analytics' => [
                    'id'    => 'מזהה Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'הפרופיל שלך עודכן בהצלחה',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'ביקורות על המוכר',

                'datagrid' => [
                    'approved'    => 'אושר',
                    'customer'    => 'לקוח',
                    'date'        => 'תאריך',
                    'description' => 'תיאור',
                    'disapproved' => 'לא מאושר',
                    'email'       => 'אימייל',
                    'pending'     => 'ממתין לאישור',
                    'rating'      => 'דירוג',
                    'status'      => 'סטטוס',
                    'title'       => 'כותרת',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'שמור',
                    'title'              => 'כללי',
                    'unmatched-password' => 'הסיסמה הנוכחית אינה תואמת',
                    'update-success'     => 'ההגדרות הכלליות עודכנו בהצלחה',

                    'regional-setting' => [
                        'currency'      => 'מטבע',
                        'locale'        => 'אזור',
                        'select-locale' => 'בחר אזור',
                        'title'         => 'הגדרות אזוריות',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'אשר סיסמה',
                        'current-password' => 'סיסמה נוכחית',
                        'new-password'     => 'סיסמה חדשה',
                        'title'            => 'הגדרות סיסמה',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'צור תפקיד',
                    'title'      => 'תפקידים',

                    'datagrid' => [
                        'all'             => 'הכל',
                        'custom'          => 'מותאם אישית',
                        'delete'          => 'מחק',
                        'edit'            => 'ערוך',
                        'id'              => 'מזהה',
                        'name'            => 'שם',
                        'permission-type' => 'סוג הרשאה',
                    ],
                ],

                'create' => [
                    'access-control' => 'בקרת גישה',
                    'all'            => 'הכל',
                    'back-btn'       => 'חזרה',
                    'custom'         => 'מותאם אישית',
                    'description'    => 'תיאור',
                    'general'        => 'כללי',
                    'name'           => 'שם',
                    'permissions'    => 'הרשאות',
                    'save-btn'       => 'שמור תפקיד',
                    'title'          => 'צור תפקיד',
                ],

                'edit' => [
                    'access-control' => 'בקרת גישה',
                    'all'            => 'הכל',
                    'back-btn'       => 'חזרה',
                    'custom'         => 'מותאם אישית',
                    'description'    => 'תיאור',
                    'general'        => 'כללי',
                    'name'           => 'שם',
                    'permissions'    => 'הרשאות',
                    'save-btn'       => 'שמור תפקיד',
                    'title'          => 'ערוך תפקיד',
                ],

                'being-used'        => 'התפקיד נמצא בשימוש על ידי מוכר',
                'create-success'    => 'התפקיד נוצר בהצלחה',
                'delete-failed'     => 'מחיקת התפקיד נכשלה',
                'delete-success'    => 'התפקיד נמחק בהצלחה',
                'last-delete-error' => 'נדרש לפחות תפקיד אחד',
                'update-success'    => 'התפקיד עודכן בהצלחה',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'צור משתמש',
                    'create-title'     => 'צור משתמש',
                    'edit-title'       => 'ערוך משתמש',
                    'email'            => 'אימייל',
                    'name'             => 'שם',
                    'phone-number'     => 'מספר טלפון',
                    'role'             => 'תפקיד',
                    'save-btn'         => 'שמור משתמש',
                    'select-role'      => 'בחר תפקיד',
                    'password'         => 'סיסמה',
                    'confirm-password' => 'אשר סיסמה',
                    'status'           => 'סטטוס',
                    'title'            => 'משתמשים',
                    'create-success'   => 'המשתמש נוצר בהצלחה',
                    'update-success'   => 'המשתמש עודכן בהצלחה',
                    'delete-success'   => 'המשתמש נמחק בהצלחה',
                    'delete-failed'    => 'מחיקת המשתמש נכשלה',

                    'datagrid' => [
                        'delete'     => 'מחק',
                        'edit'       => 'ערוך',
                        'email'      => 'דוא"ל',
                        'id'         => 'מזהה',
                        'id-value'   => 'מזהה - :id',
                        'name'       => 'שם',
                        'permission' => 'הרשאה',
                        'phone'      => 'טלפון',

                        'status' => [
                            'title' => 'סטטוס',

                            'options' => [
                                'active'    => 'פעיל',
                                'suspended' => 'מושהה',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'צור מקור אחסון',
                    'title'      => 'מקורות מלאי',

                    'datagrid' => [
                        'active'   => 'פעיל',
                        'code'     => 'קוד',
                        'delete'   => 'מחק',
                        'edit'     => 'ערוך',
                        'id'       => 'מזהה',
                        'inactive' => 'לא פעיל',
                        'name'     => 'שם',
                        'priority' => 'עדיפות',
                        'status'   => 'סטטוס',
                    ],
                ],

                'create' => [
                    'add-title'      => 'הוסף מקור מלאי',
                    'address'        => 'כתובת מקור',
                    'back-btn'       => 'חזור',
                    'city'           => 'עיר',
                    'code'           => 'קוד',
                    'contact-email'  => 'אימייל',
                    'contact-fax'    => 'פקס',
                    'contact-info'   => 'פרטי יצירת קשר',
                    'contact-name'   => 'שם',
                    'contact-number' => 'מספר טלפון',
                    'country'        => 'מדינה',
                    'description'    => 'תיאור',
                    'general'        => 'כללי',
                    'latitude'       => 'קו רוחב',
                    'longitude'      => 'קו אורך',
                    'name'           => 'שם',
                    'postcode'       => 'מיקוד',
                    'priority'       => 'עדיפות',
                    'save-btn'       => 'שמור מקורות מלאי',
                    'select-country' => 'בחר מדינה',
                    'select-state'   => 'בחר מדינה',
                    'settings'       => 'הגדרות',
                    'state'          => 'מדינה',
                    'status'         => 'סטטוס',
                    'street'         => 'רחוב',
                    'title'          => 'מקורות מלאי',
                ],

                'edit' => [
                    'back-btn'       => 'חזור',
                    'city'           => 'עיר',
                    'code'           => 'קוד',
                    'contact-email'  => 'אימייל',
                    'contact-fax'    => 'פקס',
                    'contact-info'   => 'פרטי יצירת קשר',
                    'contact-name'   => 'שם',
                    'contact-number' => 'מספר טלפון',
                    'country'        => 'מדינה',
                    'description'    => 'תיאור',
                    'general'        => 'כללי',
                    'latitude'       => 'קו רוחב',
                    'longitude'      => 'קו אורך',
                    'name'           => 'שם',
                    'postcode'       => 'מיקוד',
                    'priority'       => 'עדיפות',
                    'save-btn'       => 'שמור מקורות מלאי',
                    'select-country' => 'בחר מדינה',
                    'select-state'   => 'בחר מדינה',
                    'settings'       => 'הגדרות',
                    'source-address' => 'כתובת מקור',
                    'state'          => 'מדינה',
                    'status'         => 'סטטוס',
                    'street'         => 'רחוב',
                    'title'          => 'ערוך מקורות מלאי',
                ],

                'create-success'    => 'מקור מלאי נוצר בהצלחה',
                'delete-failed'     => 'מחיקת מקורות מלאי נכשלה',
                'delete-success'    => 'מקורות מלאי נמחקו בהצלחה',
                'last-delete-error' => 'לא ניתן למחוק את המקורות האחרונים',
                'update-success'    => 'מקורות מלאי עודכנו בהצלחה',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'מנהל',
                'blocked-message'     => 'אתה נחסמת על ידי המנהל',
                'message-failed'      => 'שליחת ההודעה נכשלה',
                'message-placeholder' => 'הקלד את הודעתך כאן...',
                'message-sent'        => 'הודעה נשלחה בהצלחה',
                'no-message'          => 'לא נמצאה הודעה',
                'search-message'      => 'חפש הודעה...',
                'title'               => 'תקשורת',

                'filters' => [
                    'all-messages'      => 'כל ההודעות',
                    'prev-fifteen-days' => '15 הימים האחרונים',
                    'prev-seven-days'   => '7 הימים האחרונים',
                    'prev-six-months'   => '6 החודשים האחרונים',
                    'prev-thirty-days'  => '30 הימים האחרונים',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'עגלות נטושות',
                    'abandoned-products'            => 'מוצרים נטושים',
                    'abandoned-rate'                => 'שיעור נטישה',
                    'abandoned-revenue'             => 'רווח נטוש',
                    'added-to-cart'                 => 'נוסף לעגלה',
                    'added-to-cart-info'            => 'רק :progress מבקרים הוסיפו מוצרים לעגלה',
                    'all-channels'                  => 'כל הערוצים',
                    'average-order-value-over-time' => 'ערך הזמנה ממוצע במהלך הזמן',
                    'average-sales'                 => 'ערך הזמנה ממוצע',
                    'commission'                    => 'עמלה',
                    'commission-over-time'          => 'עמלה לאורך זמן',
                    'count'                         => 'מספר',
                    'end-date'                      => 'תאריך סיום',
                    'id'                            => 'מזהה',
                    'interval'                      => 'מרווח זמן',
                    'name'                          => 'שם',
                    'orders'                        => 'הזמנות',
                    'orders-over-time'              => 'הזמנות לפי זמן',
                    'payment-method'                => 'אמצעי תשלום',
                    'product-views'                 => 'צפיות במוצרים',
                    'product-views-info'            => 'רק :progress מבקרים צופים במוצרים',
                    'purchase-funnel'               => 'משפך רכישה',
                    'purchased'                     => 'נרכש',
                    'purchased-info'                => 'רק :progress מבקרים ביצעו רכישות',
                    'refunds'                       => 'החזרים',
                    'refunds-over-time'             => 'החזרים לפי זמן',
                    'sales-over-time'               => 'מכירות לפי זמן',
                    'start-date'                    => 'תאריך התחלה',
                    'tax-collected'                 => 'אוסף מס',
                    'tax-collected-over-time'       => 'אוסף מס לפי זמן',
                    'title'                         => 'מכירות',
                    'top-payment-methods'           => 'שיטות תשלום מובילות',
                    'top-tax-categories'            => 'קטגוריות מס מובילות',
                    'total'                         => 'סה"כ',
                    'total-commission-paid'         => 'סך כל העמלות ששולמו',
                    'total-orders'                  => 'סה"כ הזמנות',
                    'total-sales'                   => 'סה"כ מכירות',
                    'total-visits'                  => 'סה"כ ביקורים',
                    'total-visits-info'             => 'סה"כ מבקרים בחנות',
                    'view-details'                  => 'הצג פרטים',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'כל הערוצים',
                    'count'                       => 'כמות',
                    'customers'                   => 'לקוחות',
                    'customers-over-time'         => 'לקוחות לפי זמן',
                    'customers-traffic'           => 'תנועת לקוחות',
                    'customers-with-most-orders'  => 'לקוחות עם הכי הרבה הזמנות',
                    'customers-with-most-reviews' => 'לקוחות עם הכי הרבה ביקורות',
                    'customers-with-most-sales'   => 'לקוחות עם הכי הרבה מכירות',
                    'email'                       => 'אימייל',
                    'end-date'                    => 'תאריך סיום',
                    'id'                          => 'מזהה',
                    'interval'                    => 'מרווח זמן',
                    'name'                        => 'שם',
                    'orders'                      => 'הזמנות',
                    'reviews'                     => 'ביקורות',
                    'start-date'                  => 'תאריך התחלה',
                    'title'                       => 'לקוחות',
                    'top-customer-groups'         => 'קבוצות לקוחות מובילות',
                    'total'                       => 'סה"כ',
                    'total-customers'             => 'סה"כ לקוחות',
                    'total-visitors'              => 'סה"כ מבקרים',
                    'traffic-over-week'           => 'תנועה במשך השבוע',
                    'unique-visitors'             => 'מבקרים ייחודיים',
                    'view-details'                => 'הצג פרטים',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'כל הערוצים',
                    'channel'                          => 'ערוץ',
                    'end-date'                         => 'תאריך סיום',
                    'id'                               => 'מזהה',
                    'interval'                         => 'מרווח זמן',
                    'locale'                           => 'אזור',
                    'name'                             => 'שם',
                    'orders'                           => 'הזמנות',
                    'price'                            => 'מחיר',
                    'products-added-over-time'         => 'מוצרים הוספו לאורך זמן',
                    'products-with-most-reviews'       => 'מוצרים עם הכי הרבה ביקורות',
                    'products-with-most-visits'        => 'מוצרים עם הכי הרבה ביקורים',
                    'quantities'                       => 'כמויות',
                    'quantities-sold-over-time'        => 'כמויות שנמכרו לאורך זמן',
                    'revenue'                          => 'הכנסות',
                    'reviews'                          => 'ביקורות',
                    'start-date'                       => 'תאריך התחלה',
                    'title'                            => 'מוצרים',
                    'top-selling-products-by-quantity' => 'המוצרים הנמכרים בכמויות הגבוהות ביותר',
                    'top-selling-products-by-revenue'  => 'המוצרים הנמכרים בהכנסה הגבוהה ביותר',
                    'total'                            => 'סך הכל',
                    'total-products-added-to-wishlist' => 'סה"כ מוצרים התווספו לרשימת משאלות',
                    'total-sold-quantities'            => 'סה"כ יחידות שנמכרו',
                    'view-details'                     => 'צפה בפרטים',
                    'visits'                           => 'ביקורים',
                ],
            ],

            'view' => [
                'all-channels'  => 'כל הערוצים',
                'day'           => 'יום',
                'end-date'      => 'תאריך סיום',
                'export-csv'    => 'ייצוא ל־CSV',
                'export-xls'    => 'ייצוא ל־XLS',
                'month'         => 'חודש',
                'not-available' => 'אין רשומות זמינות.',
                'start-date'    => 'תאריך התחלה',
                'year'          => 'שנה',
            ],

            'empty' => [
                'info'  => 'אין נתונים זמינים עבור הטווח הנבחר',
                'title' => 'אין נתונים זמינים',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'מושבת',
                'enabled'   => 'מופעל',
                'info'      => 'בנה, נהל והרחב את החנות שלך באינטרנט עם התוספים הניתנים להתאמה אישית של Bagisto.',
                'no-result' => 'אין תוספים זמינים כאן.',
                'title'     => 'תוספים',

                'filters' => [
                    'all-extensions' => 'כל התוספים',
                    'bulk_upload'    => 'העלאה מרוכזת',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'שוק',
                    'payment'        => 'תשלום',
                    'pos'            => 'POS',
                    'shipping'       => 'משלוח',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'לוגו המוכר',
                'switch-to-store' => 'עבור לניהול החנות',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'סכום ההזמנה המינימלית עבור :shop_title הוא',
                'product-not-available' => 'המוצר אינו זמין',
                'sold-by'               => 'נמכר על ידי',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'תשלום בימים*',
                'deals-in'            => 'עוסק ב',
                'featured-seller'     => 'המוכרים המובילים שלנו',
                'online-business'     => 'עסק באינטרנט',
                'reviews'             => ':count ביקורות:',
                'seller-community'    => 'קהילת מוכרים',
                'serviceable-pincode' => 'מיקוד שירות',
                'start-selling'       => 'התחל למכור עם לקוחות גדולים מכל רחבי העולם, כל שעה ביממה.',
                'step'                => 'שלב :count',
                'visit-shop'          => 'בקר בחנות',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'הוסף לעגלה',
            'delivery-info' => 'מידע אודות משלוח מופיע כאן',
            'hide'          => 'הסתר',
            'more-info'     => 'מידע נוסף',
            'seller-count'  => ':count מוכרים נוספים מוכרים את אותו המוצר',
            'seller-info'   => 'מידע על המוכר',
            'sold-by'       => 'נמכר על ידי',
            'top-selling'   => 'מכירה מובילה',

            'flag' => [
                'alert'              => 'התראה',
                'already-reported'   => 'כבר דיווחת על מוצר זה',
                'create-success'     => 'המוצר דווח בהצלחה',
                'guest-alert'        => 'עליך להתחבר כדי לדווח על מוצר זה',
                'not-allowed'        => 'אינך יכול לדווח על מוצר זה ללא ביצוע הזמנה',
                'other-reason'       => 'סיבה אחרת',
                'reason'             => 'סיבה',
                'reason-placeholder' => 'אנא ציין את הסיבה',
                'report-product'     => 'דווח על מוצר',
                'select-reason'      => 'בחר סיבה',
                'submit-btn'         => 'שלח',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'המוכר עדיין לא אושר',
                'products-count'  => 'מוצרים (:count)',
                'reviews-count'   => 'ביקורות (:count)',
                'search-text'     => 'חפש מוצרים',

                'about' => [
                    'title'           => 'אודות',
                    'about-us'        => 'עלינו',
                    'shipping-policy' => 'מדיניות משלוחים',
                    'privacy-policy'  => 'מדיניות פרטיות',
                    'return-policy'   => 'מדיניות החזרות',
                ],

                'contact-form' => [
                    'title'          => 'צור קשר',
                    'name'           => 'שם',
                    'email'          => 'אימייל',
                    'subject'        => 'נושא',
                    'query'          => 'שאלה',
                    'submit-btn'     => 'שלח',
                    'create-success' => 'שאלתך נשלחה בהצלחה',
                ],

                'share' => [
                    'title'     => 'שתף',
                    'share-on'  => 'שתף ב',
                    'facebook'  => 'פייסבוק',
                    'linkedin'  => 'לינקדאין',
                    'twitter'   => 'טוויטר',
                    'pinterest' => 'פינטרסט',
                ],

                'report-form' => [
                    'alert'              => 'התראה',
                    'already-reported'   => 'כבר דיווחת על מוכר זה',
                    'create-success'     => 'המוכר דווח בהצלחה',
                    'guest-alert'        => 'עליך להתחבר כדי לדווח על המוכר',
                    'not-allowed'        => 'אינך יכול לדווח על מוכר זה ללא ביצוע הזמנה',
                    'other-reason'       => 'סיבה אחרת',
                    'reason'             => 'סיבה',
                    'reason-placeholder' => 'אנא ציין את הסיבה',
                    'select-reason'      => 'בחר סיבה',
                    'submit-btn'         => 'שלח',
                    'title'              => 'דווח על בעיה',
                ],

                'reviews' => [
                    'alert'            => 'התראה',
                    'already-reviewed' => 'כבר ביקרת את המוכר הזה',
                    'comment'          => 'הערה',
                    'create-success'   => 'הביקורת על המוכר הושלמה בהצלחה',
                    'customer-review'  => ':count חוות דעת של לקוחות',
                    'customer-reviews' => 'חוות דעת של לקוחות',
                    'guest-alert'      => 'עליך להיכנס כדי לדווח על המוכר',
                    'rating'           => 'דירוג',
                    'review-by'        => 'ביקורת על ידי',
                    'submit-btn'       => 'שלח',
                    'title'            => 'כותרת',
                    'view-all'         => 'הצג את כל הביקורות',
                    'write-review'     => 'כתוב ביקורת',
                ],

                'products' => [
                    'no-result' => 'אין מוצרים זמינים כאן',
                    'show'      => 'הצג',

                    'sort-by' => [
                        'title' => 'מיין לפי',

                        'options' => [
                            'cheapest-first'  => 'הזול ביותר תחילה',
                            'expensive-first' => 'היקר ביותר תחילה',
                            'from-a-z'        => 'מ-א׳ עד ת׳',
                            'from-z-a'        => 'מ-ת׳ עד א׳',
                            'latest-first'    => 'החדשים ביותר תחילה',
                            'oldest-first'    => 'הוותיקים ביותר תחילה',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'נקה הכל',
                        'filter'      => 'סנן',
                        'filters'     => 'מסננים:',
                        'price-range' => 'טווח מחירים',
                        'sort'        => 'מיין',
                    ],
                ],
            ],
        ],
    ],
];
