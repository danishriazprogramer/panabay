<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'मार्केटप्लेस',
                    'info'  => 'मार्केटप्लेस प्रबंधित करें',

                    'module-info' => [
                        'title'       => 'मॉड्यूल जानकारी',
                        'info'        => 'एप्लिकेशन संस्करण से संबंधित जानकारी प्रदान करता है।',
                        'app-version' => 'एप्लिकेशन संस्करण: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'एडमिन कमीशन प्रतिशत',
                        'description'                  => 'मार्केटप्लेस की सामान्य सेटिंग्स जैसे स्थिति, कमीशन, आदि प्रबंधित करें।',
                        'lines-in-street-address'      => 'सड़क पते में लाइनें',
                        'lines-in-street-address-info' => 'सड़क पते में लाइनों की संख्या सेट करें। डिफ़ॉल्ट रूप से एक लाइन।',
                        'status'                       => 'स्थिति',
                        'title'                        => 'सामान्य',
                    ],

                    'product' => [
                        'approval-required'         => 'अनुमोदन आवश्यक',
                        'description'               => 'मार्केटप्लेस उत्पाद सेटिंग्स जैसे अनुमोदन, झंडे आदि को प्रबंधित करें।',
                        'enable-flag'               => 'झंडा सक्षम करें',
                        'seller-can-assign-product' => 'विक्रेता उत्पाद असाइन कर सकता है',
                        'seller-can-create-product' => 'विक्रेता उत्पाद बना सकता है',
                        'show-progress-bar'         => 'प्रगति बार दिखाएं',
                        'title'                     => 'उत्पाद',
                    ],

                    'seller' => [
                        'approval-required'           => 'अनुमोदन आवश्यक',
                        'can-cancel-order'            => 'आदेश रद्द कर सकता है',
                        'can-create-invoice'          => 'चालान बना सकता है',
                        'can-create-shipment'         => 'शिपमेंट बना सकता है',
                        'description'                 => 'बाजार के विक्रेता सेटिंग्स जैसे अनुमोदन, फ्लैग आदि प्रबंधित करें।',
                        'enable-flag'                 => 'फ्लैग सक्षम करें',
                        'enable-minimum-order-amount' => 'न्यूनतम आदेश राशि सक्षम करें',
                        'enable-seller-flag'          => 'विक्रेता फ्लैग सक्षम करें',
                        'red-flag-limit'              => 'लाल झंडा सीमा',
                        'red-flag-limit-info'         => 'यदि विक्रेता इस सीमा से अधिक प्राप्त करता है, तो विक्रेता प्रोफ़ाइल पर लाल झंडा दिखेगा।',
                        'show-red-flag'               => 'यदि सीमा पार हो जाती है तो प्रोफ़ाइल पर लाल झंडा दिखाएं',
                        'title'                       => 'विक्रेता',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'सीमा गणना',
                        'description' => 'मार्केटप्लेस के विशेष विक्रेताओं को प्रबंधित करें।',
                        'status'      => 'स्थिति',
                        'title'       => 'विशेष विक्रेता',

                        'popularity-criteria' => [
                            'all'              => 'सभी',
                            'maximum-orders'   => 'अधिकतम आदेश',
                            'maximum-products' => 'अधिकतम उत्पाद',
                            'maximum-rating'   => 'अधिकतम रेटिंग',
                            'maximum-sale'     => 'अधिकतम बिक्री',
                            'title'            => 'लोकप्रियता मानदंड',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'बैनर बटन शीर्षक',
                        'banner-description'  => 'बैनर विवरण',
                        'banner-image'        => 'बैनर चित्र',
                        'banner-title'        => 'बैनर शीर्षक',
                        'business-hour'       => 'व्यापारिक घंटा',
                        'community-count'     => 'समुदाय की संख्या',
                        'description'         => 'मार्केटप्लेस के लैंडिंग पेज को अनुकूलित करें, आइकन, बैनर, और ताजगी के लिए विवरण जोड़कर।',
                        'feature-box1-desc'   => 'विशेषता बॉक्स 1 विवरण',
                        'feature-box1-icon'   => 'विशेषता बॉक्स 1 आइकन',
                        'feature-box1-title'  => 'विशेषता बॉक्स 1 शीर्षक',
                        'feature-box2-desc'   => 'विशेषता बॉक्स 2 विवरण',
                        'feature-box2-icon'   => 'विशेषता बॉक्स 2 आइकन',
                        'feature-box2-title'  => 'विशेषता बॉक्स 2 शीर्षक',
                        'feature-box3-desc'   => 'विशेषता बॉक्स 3 विवरण',
                        'feature-box3-icon'   => 'विशेषता बॉक्स 3 आइकन',
                        'feature-box3-title'  => 'विशेषता बॉक्स 3 शीर्षक',
                        'feature-box4-desc'   => 'विशेषता बॉक्स 4 विवरण',
                        'feature-box4-icon'   => 'विशेषता बॉक्स 4 आइकन',
                        'feature-box4-title'  => 'विशेषता बॉक्स 4 शीर्षक',
                        'feature-description' => 'विशेषता का विवरण',
                        'feature-image'       => 'विशेषता की छवि',
                        'feature-title'       => 'विशेषता का शीर्षक',
                        'journey-description' => 'यात्रा का विवरण',
                        'journey-image'       => 'यात्रा की छवि',
                        'journey-step1-desc'  => 'यात्रा कदम 1 विवरण',
                        'journey-step1-icon'  => 'यात्रा कदम 1 आइकन',
                        'journey-step1-title' => 'यात्रा कदम 1 शीर्षक',
                        'journey-step2-desc'  => 'यात्रा कदम 2 विवरण',
                        'journey-step2-icon'  => 'यात्रा कदम 2 आइकन',
                        'journey-step2-title' => 'यात्रा कदम 2 शीर्षक',
                        'journey-step3-desc'  => 'यात्रा कदम 3 विवरण',
                        'journey-step3-icon'  => 'यात्रा कदम 3 आइकन',
                        'journey-step3-title' => 'यात्रा कदम 3 शीर्षक',
                        'journey-step4-desc'  => 'यात्रा कदम 4 विवरण',
                        'journey-step4-icon'  => 'यात्रा कदम 4 आइकन',
                        'journey-step4-title' => 'यात्रा कदम 4 शीर्षक',
                        'journey-step5-desc'  => 'यात्रा कदम 5 विवरण',
                        'journey-step5-icon'  => 'यात्रा कदम 5 आइकन',
                        'journey-step5-title' => 'यात्रा कदम 5 शीर्षक',
                        'journey-title'       => 'यात्रा का शीर्षक',
                        'payment-duration'    => 'भुगतान की अवधि',
                        'serviceable-pincode' => 'सेवायोज्य पिनकोड',
                        'title'               => 'लैंडिंग पेज',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'उत्पाद असाइन करें',
            'communications'    => 'संचार',
            'create'            => 'बनाएँ',
            'delete'            => 'हटाएँ',
            'edit'              => 'संपादित करें',
            'flag-reasons'      => 'फ्लैग के कारण',
            'inventory-sources' => 'इन्वेंटरी स्रोत',
            'orders'            => 'ऑर्डर',
            'pay'               => 'भुगतान करें',
            'payment-request'   => 'भुगतान अनुरोध',
            'product-reviews'   => 'उत्पाद समीक्षाएँ',
            'products'          => 'उत्पाद',
            'reviews'           => 'विक्रेता समीक्षाएँ',
            'seller-categories' => 'विक्रेता श्रेणियाँ',
            'sellers'           => 'विक्रेता',
            'title'             => 'बाज़ार',
            'transactions'      => 'लेन-देन',
            'view'              => 'देखें',
        ],

        'menu' => [
            'communications'    => 'संचार',
            'flag-reasons'      => 'ध्वज के कारण',
            'inventory-sources' => 'इन्वेंटरी स्रोत',
            'orders'            => 'आदेश',
            'payment-requests'  => 'भुगतान अनुरोध',
            'product-reviews'   => 'उत्पाद समीक्षा',
            'products'          => 'उत्पाद',
            'seller-categories' => 'विक्रेता श्रेणियाँ',
            'seller-reviews'    => 'विक्रेता समीक्षा',
            'sellers'           => 'विक्रेताओं',
            'title'             => 'बाजार',
            'transactions'      => 'लेन-देन',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'विक्रेता जोड़ें',
                'delete-failed'      => 'विक्रेता हटाने में विफल रहा!',
                'delete-success'     => 'विक्रेता सफलतापूर्वक हटा दिया गया।',
                'incomplete-profile' => 'विक्रेता की प्रोफ़ाइल अधूरी है!',
                'login-message'      => 'आप :seller_name के रूप में लॉग इन हैं',
                'pending-orders'     => 'विक्रेता के पास कुछ पेंडिंग आदेश हैं',
                'title'              => 'विक्रेताओं',
                'update-success'     => 'विक्रेता सफलतापूर्वक अपडेट किया गया!',

                'datagrid' => [
                    'add-product'     => 'असाइन करें',
                    'approved'        => 'मंजूर',
                    'assign-product'  => 'माल असाइन करें',
                    'created-at'      => 'बनाया गया',
                    'delete'          => 'हटाएं',
                    'disapproved'     => 'अमंजूर',
                    'edit'            => 'संपादित करें',
                    'email'           => 'ईमेल',
                    'flags'           => 'ध्वज',
                    'id'              => 'आईडी',
                    'login-as-seller' => 'विक्रेता के रूप में लॉग इन करें',
                    'seller-id'       => 'आईडी - :seller_id',
                    'seller-name'     => 'विक्रेता का नाम',
                    'shop-url'        => 'दुकान का यूआरएल',
                    'status'          => 'स्थिति',
                    'suspended'       => 'निलंबित',
                    'total-flags'     => 'कुल ध्वज: :count',
                    'update-status'   => 'स्थिति अपडेट करें',
                ],

                'create'  => [
                    'address'        => 'पता',
                    'street-address' => 'सड़क का पता',
                    'city'           => 'शहर',
                    'country'        => 'देश',
                    'email'          => 'ईमेल',
                    'name'           => 'नाम',
                    'phone'          => 'फ़ोन नंबर',
                    'postcode'       => 'पिन कोड',
                    'save-btn'       => 'सहेजें',
                    'select'         => 'चुनें',
                    'shop-title'     => 'दुकान का शीर्षक',
                    'shop-url'       => 'दुकान URL',
                    'state'          => 'राज्य',
                    'success'        => 'विक्रेता सफलतापूर्वक बनाया गया।',
                    'title'          => 'विक्रेता बनाएं',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'विक्रेता ध्वज',

                    'datagrid' => [
                        'id'             => 'आईडी',
                        'customer-name'  => 'ग्राहक का नाम',
                        'customer-email' => 'ग्राहक ईमेल',
                        'date'           => 'तारीख',
                        'reason'         => 'कारण',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'वापस',
                'image-placeholder' => 'उत्पाद छवि',
                'no-result'         => 'कोई परिणाम नहीं मिला!',
                'sku'               => 'एसकेयू - :sku',
                'title'             => 'उत्पाद खोजें',
            ],

            'assign-product' => [
                'already-selling'     => 'विक्रेता पहले से ही इस उत्पाद को बेच रहा है',
                'assign-successfully' => 'उत्पाद को सफलतापूर्वक विक्रेता को सौंपा गया।',
                'back-btn'            => 'वापस',
                'condition'           => 'स्थिति',
                'description'         => 'विवरण',
                'new'                 => 'नया',
                'old'                 => 'पुराना',
                'price'               => 'मूल्य',
                'product-not-allowed' => 'विक्रेता को :type प्रकार का उत्पाद बेचने की अनुमति नहीं है।',
                'quantities'          => 'मात्राएँ',
                'save-btn'            => 'सहेजें',
                'select-condition'    => 'स्थिति चुनें',
                'title'               => 'उत्पाद सौंपें',

                'seller-details' => [
                    'additional-info' => 'अतिरिक्त जानकारी',
                    'approved'        => 'स्वीकृत',
                    'disapproved'     => 'अस्वीकृत',
                    'no-of-products'  => 'उत्पादों की संख्या',
                    'status'          => 'स्थिति',
                    'suspended'       => 'निलंबित',
                    'title'           => 'विक्रेता का विवरण',
                ],

                'product-details' => [
                    'active'            => 'सक्रिय',
                    'disable'           => 'निष्क्रिय',
                    'title'             => 'उत्पाद विवरण',
                    'image-placeholder' => 'उत्पाद की छवि',
                ],

                'images' => [
                    'info'  => 'छवि का निर्धारण 609px X 560px की तरह होना चाहिए',
                    'title' => 'छवियाँ',
                ],

                'videos' => [
                    'error' => 'वीडियो :max किलोबाइट से अधिक नहीं हो सकता। कृपया एक छोटा फ़ाइल चुनें।',
                    'info'  => 'अधिकतम वीडियो आकार का होना चाहिए :size की तरह',
                    'title' => 'वीडियो',
                ],

                'configurable' => [
                    'delete-btn'        => 'हटाएं',
                    'edit-btn'          => 'संपादित करें',
                    'image-placeholder' => 'उत्पाद छवि',
                    'qty'               => 'मात्रा - :qty',
                    'sku'               => 'एसकेयू - :sku',
                    'title'             => 'रूपांतरण',

                    'edit' => [
                        'images'     => 'छवियाँ',
                        'price'      => 'मूल्य',
                        'quantities' => 'मात्रा',
                        'save-btn'   => 'सहेजें',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'लिंक जोड़ें',
                        'delete-btn'  => 'हटाएं',
                        'edit-btn'    => 'संपादित करें',
                        'empty-info'  => 'जल्दी से लिंक बनाने के लिए।',
                        'empty-title' => 'लिंक जोड़ें',
                        'file'        => 'फ़ाइल : ',
                        'info'        => 'डाउनलोडेबल उत्पाद प्रकार की अनुमति देता है कि डिजिटल उत्पाद बेचा जा सके, जैसे कि ईबुक्स, सॉफ़्टवेयर एप्लिकेशन्स, संगीत, गेम्स, आदि।',
                        'sample-file' => 'सैंपल फ़ाइल : ',
                        'sample-url'  => 'सैंपल URL : ',
                        'title'       => 'डाउनलोडेबल लिंक्स',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'डाउनलोड की अनुमति',
                            'file'        => 'फ़ाइल',
                            'file-type'   => 'फ़ाइल प्रकार',
                            'name'        => 'शीर्षक',
                            'price'       => 'मूल्य',
                            'sample'      => 'सैंपल',
                            'sample-type' => 'सैंपल प्रकार',
                            'save-btn'    => 'सहेजें',
                            'title'       => 'लिंक',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'सैंपल जोड़ें',
                        'delete-btn'  => 'हटाएं',
                        'edit-btn'    => 'संपादित करें',
                        'empty-info'  => 'जानिए एक बार में सैंपल बनाने के लिए।',
                        'empty-title' => 'सैंपल जोड़ें',
                        'file'        => 'फ़ाइल : ',
                        'info'        => 'डाउनलोड करने योग्य उत्पाद प्रकार डिजिटल उत्पादों को बेचने की अनुमति देता है, जैसे कि ई-बुक्स, सॉफ़्टवेयर एप्लिकेशन्स, संगीत, खेल, आदि।',
                        'title'       => 'डाउनलोडयोग्य सैंपल्स',
                        'url'         => 'यूआरएल : ',

                        'update-create' => [
                            'file'      => 'फ़ाइल',
                            'file-type' => 'फ़ाइल प्रकार',
                            'name'      => 'शीर्षक',
                            'save-btn'  => 'सहेजें',
                            'title'     => 'लिंक',
                            'url'       => 'यूआरएल',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'पीछे जाएं',
                'suspended'      => 'निलंबित',
                'title'          => 'विक्रेता संपादित करें',
                'update-btn'     => 'विक्रेता को अपडेट करें',
                'update-success' => 'विक्रेता सफलतापूर्वक अपडेट किया गया।',

                'shop' => [
                    'address'          => 'पता',
                    'street-address'   => 'सड़क का पता',
                    'city'             => 'शहर',
                    'country'          => 'देश',
                    'description'      => 'विवरण',
                    'email'            => 'ईमेल',
                    'name'             => 'नाम',
                    'phone-number'     => 'फ़ोन नंबर',
                    'postcode'         => 'पिनकोड',
                    'select'           => 'सेलेक्ट',
                    'shop-title'       => 'दुकान का शीर्षक',
                    'state'            => 'राज्य',
                    'title'            => 'दुकान का विवरण',
                    'url'              => 'दुकान का यूआरएल',
                ],

                'profile' => [
                    'banner'       => 'प्रोफ़ाइल बैनर',
                    'banner-size'  => 'बैनर का आकार 300px X 200px की तरह होना चाहिए',
                    'logo'         => 'प्रोफ़ाइल लोगो',
                    'logo-size'    => 'लोगो का आकार 125px X 125px की तरह होना चाहिए',
                    'social-links' => ':name लिंक',
                    'title'        => 'प्रोफ़ाइल विवरण',
                ],

                'allowed-product' => [
                    'title' => 'अनुमति प्राप्त उत्पाद',
                ],

                'minimum-order-amount' => [
                    'title' => 'न्यूनतम आदेश मात्रा',
                ],

                'google-analytics-id' => [
                    'title' => 'Google विश्लेषिकी आईडी',
                ],

                'commission' => [
                    'percentage' => 'प्रतिशत',
                    'status'     => 'स्थिति',
                    'title'      => 'विक्रेता कमीशन',
                ],

                'meta-info' => [
                    'meta-description' => 'मेटा विवरण',
                    'meta-keyword'     => 'मेटा कीवर्ड',
                    'meta-title'       => 'मेटा शीर्षक',
                    'title'            => 'मेटा जानकारी',
                ],

                'policy' => [
                    'privacy'  => 'गोपनीयता नीति',
                    'return'   => 'वापसी नीति',
                    'shipping' => 'शिपिंग नीति',
                    'title'    => 'नीतियां',
                ],

                'channels' => [
                    'title' => 'चैनल',
                ],

                'users' => [
                    'email' => 'ईमेल',
                    'id'    => 'आईडी',
                    'name'  => 'नाम',
                    'phone' => 'फ़ोन',
                    'title' => 'उपयोगकर्ता',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'उत्पाद जोड़ें',
                'delete-success' => 'उत्पाद सफलतापूर्वक हटाया गया।',
                'title'          => 'उत्पाद',
                'update-success' => 'उत्पाद सफलतापूर्वक अपडेट किया गया।',

                'datagrid' => [
                    'approved'       => 'मान्यता प्राप्त',
                    'delete'         => 'हटाएं',
                    'disapproved'    => 'अस्वीकृत',
                    'flags'          => 'ध्वज',
                    'id'             => 'आईडी',
                    'is-owner'       => 'मालिक है',
                    'no'             => 'नहीं',
                    'out-of-stock'   => 'स्टॉक समाप्त',
                    'price'          => 'मूल्य',
                    'product-id'     => 'आईडी - :product_id',
                    'product-name'   => 'उत्पाद का नाम',
                    'product-number' => 'उत्पाद संख्या',
                    'product-type'   => 'उत्पाद प्रकार',
                    'quantity'       => 'मात्रा',
                    'seller-name'    => 'विक्रेता का नाम',
                    'sku'            => 'एसकेयू',
                    'status'         => 'स्थिति',
                    'total-flags'    => 'कुल ध्वज: :count',
                    'total-quantity' => ':quantity उपलब्ध',
                    'update-status'  => 'स्थिति अपडेट करें',
                    'yes'            => 'हाँ',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'उत्पाद के झंडे',

                    'datagrid' => [
                        'customer-email' => 'ग्राहक ईमेल',
                        'customer-name'  => 'ग्राहक का नाम',
                        'date'           => 'तारीख',
                        'id'             => 'पहचान',
                        'reason'         => 'कारण',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'समीक्षा विवरण',
                'title'          => 'उत्पाद समीक्षा',

                'datagrid' => [
                    'approved'      => 'मंजूर',
                    'comment'       => 'टिप्पणी',
                    'customer-name' => 'ग्राहक का नाम',
                    'date'          => 'तारीख',
                    'disapproved'   => 'अस्वीकृत',
                    'id'            => 'आईडी',
                    'images'        => 'छवियाँ',
                    'pending'       => 'अपूर्ण',
                    'product'       => 'उत्पाद',
                    'product-name'  => 'उत्पाद का नाम',
                    'rating'        => 'रेटिंग',
                    'review-id'     => 'आईडी - :review_id',
                    'shop-title'    => 'दुकान का शीर्षक',
                    'status'        => 'स्थिति',
                    'title'         => 'शीर्षक',
                    'update-status' => 'अपडेट स्थिति',
                    'view'          => 'देखें',
                ],
            ],

            'update-success' => 'उत्पाद समीक्षाएँ सफलतापूर्वक अपडेट की गईं',
            'delete-success' => 'उत्पाद समीक्षाएँ सफलतापूर्वक हटा दी गईं।',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'विक्रेता समीक्षाएं',

                'datagrid' => [
                    'approved'            => 'स्वीकृत',
                    'comment'             => 'टिप्पणी',
                    'customer-name'       => 'ग्राहक का नाम',
                    'date'                => 'तारीख',
                    'delete'              => 'हटाएं',
                    'disapproved'         => 'अस्वीकृत',
                    'id'                  => 'आईडी',
                    'mass-delete-success' => 'विक्रेता समीक्षाएं सफलतापूर्वक हटाई गईं।',
                    'mass-update-success' => 'विक्रेता समीक्षाएं सफलतापूर्वक अपडेट की गईं।',
                    'pending'             => 'लंबित',
                    'rating'              => 'रेटिंग',
                    'review-id'           => 'आईडी - :review_id',
                    'review-title'        => 'समीक्षा शीर्षक',
                    'seller-name'         => 'विक्रेता का नाम',
                    'shop-title'          => 'दुकान का शीर्षक',
                    'status'              => 'स्थिति',
                    'update-status'       => 'स्थिति अपडेट करें',
                ],
            ],

            'delete-success' => 'विक्रेता समीक्षा सफलतापूर्वक हटा दी गई।',
        ],

        'orders' => [
            'index' => [
                'title' => 'आदेश',

                'datagrid' => [
                    'canceled'        => 'रद्द',
                    'closed'          => 'बंद',
                    'commission'      => 'कमीशन',
                    'completed'       => 'पूर्ण',
                    'customer'        => 'ग्राहक',
                    'date'            => 'तारीख',
                    'discount'        => 'डिस्काउंट',
                    'email'           => 'ईमेल',
                    'fraud'           => 'धोखाधड़ी',
                    'gross-amt'       => 'कुल मान',
                    'id'              => 'आईडी',
                    'items'           => 'आइटम्स',
                    'location'        => 'स्थान',
                    'order-id'        => 'आदेश आईडी - #:id',
                    'payment'         => 'भुगतान',
                    'pending'         => 'लंबित',
                    'pending-payment' => 'लंबित भुगतान',
                    'processing'      => 'प्रोसेसिंग',
                    'seller'          => 'बेचने वाला',
                    'seller-earn'     => 'कमाई',
                    'shipment'        => 'भेजवाने की स्थिति',
                    'shop'            => 'दुकान',
                    'status'          => 'स्थिति',
                    'view'            => 'देखें',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'लेन-देन',

                'datagrid' => [
                    'base-total'     => 'मौलिक कुल',
                    'comment'        => 'टिप्पणी',
                    'customer-name'  => 'ग्राहक का नाम',
                    'id'             => 'आईडी',
                    'seller-id'      => 'विक्रेता आईडी',
                    'seller-name'    => 'विक्रेता का नाम',
                    'transaction-id' => 'लेन-देन आईडी',
                    'view'           => 'देखें',
                ],
            ],

            'view' => [
                'commission'        => 'कमीशन',
                'created-on'        => 'पर बनाया गया है :date',
                'name'              => 'नाम',
                'payment-method'    => ':method भुगतान',
                'price'             => 'मूल्य',
                'qty'               => 'मात्रा',
                'seller-total'      => 'विक्रेता कुल',
                'shipping-handling' => 'शिपिंग और हैंडलिंग',
                'subtotal'          => 'उपकुल',
                'tax'               => 'कर',
                'title'             => 'लेन-देन #:transaction_id',
                'total'             => 'कुल',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'कारण बनाएं',
                'delete-success'      => 'ध्वज कारण सफलतापूर्वक हटाया गया।',
                'mass-delete-success' => 'ध्वज कारण सफलतापूर्वक हटाए गए।',
                'mass-update-success' => 'ध्वज कारण सफलतापूर्वक अपडेट किए गए।',
                'title'               => 'ध्वज कारण',

                'datagrid' => [
                    'delete'        => 'हटाएं',
                    'edit'          => 'संपादित करें',
                    'id'            => 'आईडी',
                    'name'          => 'नाम',
                    'update-status' => 'स्थिति अपडेट करें',

                    'status' => [
                        'active'  => 'सक्रिय',
                        'disable' => 'निष्क्रिय',
                        'title'   => 'स्थिति',
                    ],

                    'type' => [
                        'product' => 'उत्पाद',
                        'seller'  => 'विक्रेता',
                        'title'   => 'प्रकार',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'प्रशासक',
                'back-btn' => 'वापस',
                'general'  => 'सामान्य',
                'label'    => 'लेबल',
                'product'  => 'उत्पाद',
                'save-btn' => 'कारण सहेजें',
                'seller'   => 'विक्रेता',
                'status'   => 'स्थिति',
                'title'    => 'कारण बनाएं',
                'type'     => 'प्रकार',
            ],

            'edit' => [
                'admin'    => 'प्रशासक',
                'back-btn' => 'वापस',
                'general'  => 'सामान्य',
                'label'    => 'लेबल',
                'product'  => 'उत्पाद',
                'save-btn' => 'कारण सहेजें',
                'seller'   => 'विक्रेता',
                'status'   => 'स्थिति',
                'title'    => 'कारण संपादित करें',
                'type'     => 'प्रकार',
            ],

            'create-success' => 'ध्वज कारण सफलतापूर्वक बनाया गया।',
            'update-success' => 'ध्वज कारण सफलतापूर्वक अपडेट किया गया।',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'श्रेणी सौंपें',
                'create-success' => 'श्रेणी सफलतापूर्वक सौंप दी गई।',
                'delete-failed'  => 'श्रेणी हटाना विफल रहा है!',
                'delete-success' => 'श्रेणी सफलतापूर्वक हटाई गई है।',
                'title'          => 'विक्रेता श्रेणियाँ',
                'update-success' => 'श्रेणी सफलतापूर्वक अपडेट की गई है।',

                'datagrid' => [
                    'delete' => 'हटाएं',
                    'edit'   => 'संपादित करें',
                    'id'     => 'आईडी',
                    'name'   => 'नाम',
                ],
            ],

            'create' => [
                'back-btn'      => 'पीछे जाएं',
                'save-btn'      => 'श्रेणी सहेजें',
                'select-seller' => 'विक्रेता चुनें',
                'seller'        => 'विक्रेता',
                'title'         => 'श्रेणी सौंपें',
            ],

            'edit' => [
                'back-btn'   => 'पीछे जाएं',
                'seller'     => 'विक्रेता',
                'title'      => 'श्रेणी संपादित करें',
                'update-btn' => 'श्रेणी अपडेट करें',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'टिप्पणी',
                'no-amount-remaining'  => 'भुगतान के लिए कोई राशि शेष नहीं है!',
                'order-not-found'      => 'ऑर्डर नहीं मिला!',
                'pay-btn'              => 'अब भुगतान करें',
                'pay-to-seller'        => 'विक्रेता को भुगतान करें',
                'payment-success'      => 'विक्रेता को सफलतापूर्वक भुगतान किया गया है!',
                'something-went-wrong' => 'कुछ गड़बड़ हो गई है!',
                'title'                => 'भुगतान अनुरोध',

                'datagrid' => [
                    'already-paid'          => 'पहले ही भुगतान किया गया है',
                    'canceled'              => 'रद्द',
                    'closed'                => 'बंद',
                    'completed'             => 'पूर्ण',
                    'customer-name'         => 'ग्राहक का नाम',
                    'date'                  => 'तारीख',
                    'email'                 => 'ईमेल',
                    'fraud'                 => 'धोखाधड़ी',
                    'gross-amt'             => 'कुल राशि',
                    'id'                    => 'ऑर्डर आईडी',
                    'invoice-pending'       => 'चालान अपूर्ण',
                    'order-canceled'        => 'ऑर्डर रद्द हो गया है',
                    'order-id'              => 'आईडी #:id',
                    'pay'                   => 'भुगतान करें',
                    'pending'               => 'अपूर्ण',
                    'pending-payment'       => 'अपूर्ण भुगतान',
                    'processing'            => 'प्रोसेसिंग',
                    'refunded'              => 'वापसी की गई',
                    'remaining-total'       => 'शेष कुल',
                    'request-payment'       => 'भुगतान का अनुरोध',
                    'seller'                => 'विक्रेता',
                    'seller-total-invoiced' => 'विक्रेता कुल चालानित',
                    'shop'                  => 'दुकान',
                    'status'                => 'स्थिति',
                    'total-paid'            => 'कुल भुगतान',
                    'view'                  => 'देखें',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'विक्रेता को ब्लॉक करें',
                'block-success'        => 'विक्रेता सफलतापूर्वक ब्लॉक किया गया!',
                'chat-history-cleared' => 'चैट इतिहास सफलतापूर्वक साफ़ किया गया!',
                'clear-chat-history'   => 'चैट इतिहास साफ़ करें',
                'exit'                 => 'बाहर निकलें',
                'message-failed'       => 'संदेश भेजना विफल हुआ!',
                'message-sent'         => 'संदेश सफलतापूर्वक भेजा गया!',
                'no-message'           => 'कोई संदेश नहीं मिला!',
                'search'               => 'खोजें',
                'search-message'       => 'संदेश खोजें',
                'seller-blocked'       => 'आपने इस विक्रेता को ब्लॉक कर दिया है। आप इस विक्रेता को संदेश नहीं भेज सकते।',
                'sellers'              => 'विक्रेता',
                'title'                => 'संचार',
                'type-message'         => 'अपना संदेश यहां लिखें...',
                'unblock-seller'       => 'विक्रेता को अनब्लॉक करें',
                'unblock-success'      => 'विक्रेता सफलतापूर्वक अनब्लॉक किया गया!',
                'welcome-message'      => 'मार्केटप्लेस संचार में आपका स्वागत है!',

                'filters' => [
                    'all-messages'      => 'सभी संदेश',
                    'prev-fifteen-days' => 'पिछले 15 दिन',
                    'prev-seven-days'   => 'पिछले 7 दिन',
                    'prev-six-months'   => 'पिछले 6 महीने',
                    'prev-thirty-days'  => 'पिछले 30 दिन',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'इन्वेंटरी स्रोत',

                'datagrid' => [
                    'active'      => 'सक्रिय',
                    'code'        => 'कोड',
                    'id'          => 'आईडी',
                    'inactive'    => 'निष्क्रिय',
                    'name'        => 'नाम',
                    'seller-name' => 'विक्रेता का नाम',
                    'shop-title'  => 'दुकान का शीर्षक',
                    'status'      => 'स्थिति',
                ],

                'view' => [
                    'active'         => 'सक्रिय',
                    'address'        => 'स्रोत पता',
                    'city'           => 'शहर',
                    'code'           => 'कोड',
                    'contact-email'  => 'ईमेल',
                    'contact-fax'    => 'फैक्स',
                    'contact-info'   => 'संपर्क जानकारी',
                    'contact-name'   => 'नाम',
                    'contact-number' => 'संपर्क नंबर',
                    'country'        => 'देश',
                    'description'    => 'विवरण',
                    'general-info'   => 'सामान्य जानकारी',
                    'inactive'       => 'निष्क्रिय',
                    'latitude'       => 'अक्षांश',
                    'longitude'      => 'देशांतर',
                    'name'           => 'नाम',
                    'postcode'       => 'पिन कोड',
                    'priority'       => 'प्राथमिकता',
                    'seller-info'    => 'विक्रेता जानकारी',
                    'seller-name'    => 'विक्रेता का नाम',
                    'settings'       => 'सेटिंग्स',
                    'shop-title'     => 'दुकान का शीर्षक',
                    'state'          => 'राज्य',
                    'street'         => 'सड़क',
                    'title'          => 'इन्वेंटरी स्रोत #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'मार्केटप्लेस पैकेज स्थापित करें।',
            'migrate'     => 'सभी टेबल्स को डेटाबेस में माइग्रेट किया जा रहा है (इसमें कुछ समय लगेगा)...',
            'seed'        => 'डेटाबेस में डेटा जोड़ा जा रहा है...',
            'publish'     => 'एसेट्स और कॉन्फ़िगरेशन प्रकाशित किए जा रहे हैं...',
            'cache'       => 'कैश साफ़ किया जा रहा है...',
            'finish'      => 'मार्केटप्लेस पैकेज सफलतापूर्वक स्थापित किया गया।',
        ],

        'version' => [
            'description' => 'मार्केटप्लेस पैकेज का वर्तमान संस्करण दिखाएँ।',
            'comment'     => 'मार्केटप्लेस संस्करण: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'प्रिय :customer_name',
        'dear-admin'  => 'प्रिय प्रशासक',
        'dear-seller' => 'प्रिय विक्रेता',

        'seller' => [
            'registration' => [
                'date'        => 'पंजीकरण तिथि:',
                'description' => 'हम आपको सूचित करने के लिए उत्सुक हैं कि हमारे प्लेटफ़ॉर्म पर एक नए विक्रेता का पंजीकरण हुआ है। कृपया एक पल निकालें और हमारे प्लेटफ़ॉर्म में विक्रेता का स्वागत करें।',
                'details'     => 'यहाँ विवरण हैं:',
                'email'       => 'ईमेल पता:',
                'greeting'    => 'आशा है कि यह संदेश आपको अच्छे स्वास्थ्य में पहुंचेगा।',
                'name'        => 'विक्रेता का नाम:',
                'shop'        => 'दुकान URL:',
                'subject'     => 'नया विक्रेता पंजीकरण',
            ],

            'forgot-password' => [
                'description'    => 'आप इस ईमेल को प्राप्त कर रहे हैं क्योंकि हमने आपके खाते के लिए पासवर्ड रीसेट करने का अनुरोध प्राप्त किया है।',
                'greeting'       => 'पासवर्ड भूल गए हैं!',
                'reset-password' => 'पासवर्ड रीसेट',
                'subject'        => 'पासवर्ड रीसेट ईमेल',
            ],

            'welcome' => [
                'description' => 'स्वागत है! हम आपको परिवार में शामिल होने के लिए बहुत उत्साहित हैं। आपका विक्रेता के रूप में मौजूद होना हमारे प्लेटफ़ॉर्म में बहुत महत्वपूर्ण है, और हम एक सफल साझेदारी की ओर तेजी से बढ़ रहे हैं।',
                'greeting'    => 'स्वागत है और हम आपके पंजीकरण के लिए धन्यवादी हैं!',
                'subject'     => 'विक्रेता स्वागत सूचना',
            ],

            'approval' => [
                'approved'    => 'आपका विक्रेता बनने का अनुरोध स्वीकृत किया गया है।',
                'disapproved' => 'आपका विक्रेता बनने का अनुरोध निरस्त किया गया है।',
                'greeting'    => 'स्वागत है और हम आपके पंजीकरण के लिए धन्यवादी हैं!',
                'subject'     => 'विक्रेता स्वीकृति सूचना',
            ],

            'update' => [
                'description' => 'आपका प्रोफाइल सफलता पूर्वक अपडेट हो गया है।',
                'greeting'    => 'आशा है कि यह संदेश आपको अच्छे स्वास्थ्य में पहुंचेगा।',
                'subject'     => 'विक्रेता प्रोफाइल अपडेट सूचना',
            ],

            'good-bye' => [
                'description' => 'आपके साथ काम करना एक आनंद रहा है, और मैं आपके पेशेवरता, समर्पण और आपके उत्कृष्ट उत्पाद/सेवाओं की उच्च गुणवत्ता के लिए सचमुच कृतज्ञ हूं। आपका ग्राहक संतुष्टि सुनिश्चित करने के लिए आपका समर्पण नजर में आया है, और यह हमारे सकारात्मक अनुभव के एक कुंजीय कारक रहा है।',
                'greeting'    => 'मुझे आशा है कि यह संदेश आपको अच्छे स्वास्थ्य में पहुंचेगा।',
                'subject'     => 'विक्रेता विदाई सूचना',
            ],

            'product-approval' => [
                'approved'    => 'आपका उत्पाद :name स्वीकृत हो गया है।',
                'disapproved' => 'आपका उत्पाद :name अस्वीकृत हो गया है।',
                'greeting'    => 'स्वागत है और हमारे साथ पंजीकृत होने के लिए आपका धन्यवाद!',
                'subject'     => 'विक्रेता उत्पाद स्वीकृति सूचना',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'आपका नया ऑर्डर :order_id :created_at को प्लेस किया गया है',
                    'subject'  => 'नया ऑर्डर पुष्टि',
                    'summary'  => 'ऑर्डर का संक्षेप',
                    'title'    => 'ऑर्डर पुष्टि!',
                ],

                'canceled' => [
                    'greeting' => 'ऑर्डर :order_id रद्द कर दिया गया है',
                    'subject'  => 'ऑर्डर रद्दीकरण की पुष्टि',
                    'summary'  => 'ऑर्डर का सारांश',
                    'title'    => 'ऑर्डर रद्द!',
                ],

                'billing-address'   => 'बिलिंग पता',
                'contact'           => 'संपर्क',
                'discount'          => 'डिस्काउंट',
                'grand-total'       => 'कुल योग',
                'name'              => 'नाम',
                'payment'           => 'भुगतान',
                'price'             => 'मूल्य',
                'qty'               => 'मात्रा',
                'shipping'          => 'शिपिंग',
                'shipping-address'  => 'शिपिंग पता',
                'shipping-handling' => 'शिपिंग हैंडलिंग',
                'sku'               => 'एसकेयू',
                'subtotal'          => 'उप-योग',
                'tax'               => 'कर',
            ],

            'payment-request' => [
                'greeting'  => 'मुझे आशा है कि यह संदेश आपको ठीक मिले।',
                'paid'      => 'हाय.. आपने आदेश :order_id के लिए भुगतान प्राप्त किया है।',
                'requested' => 'विक्रेता :seller_name से आदेश :order_id के लिए भुगतान के लिए अनुरोध किया गया है।',
                'subject'   => 'विक्रेता भुगतान अनुरोध सूचना',
            ],
        ],

        'contact-seller' => [
            'email'    => 'ईमेल:- :email',
            'greeting' => 'आशा है कि यह संदेश आपको ठीक मिले।',
            'info'     => 'नमस्ते, :name के पास आपके लिए एक सवाल है। कृपया नीचे दिए गए विवरण की समीक्षा करें।',
            'query'    => 'पूछताछ: :query',
            'subject'  => 'विक्रेता संपर्क सूचना',
            'topic'    => 'विषय: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'नमस्ते, ":name" ने विक्रेता ":seller_name" के उत्पाद ":product_name" के खिलाफ एक समस्या की सूचना दी है। कृपया नीचे दिए गए विवरण की समीक्षा करें।',
            'greeting'   => 'आशा है कि यह संदेश आपको अच्छे स्वास्थ्य में मिले।',
            'reason'     => 'कारण:- :reason',
            'seller-msg' => 'नमस्ते, ":name" ने आपके उत्पाद ":product_name" के बारे में एक समस्या की सूचना दी है। कृपया नीचे दिए गए विवरण की समीक्षा करें।',
            'subject'    => 'उत्पाद रिपोर्ट अधिसूचना',
        ],

        'report-seller' => [
            'admin-msg'  => 'नमस्ते, :name ने :seller_name के खिलाफ एक समस्या की सूचना दी है। कृपया नीचे दिए गए विवरण की समीक्षा करें।',
            'greeting'   => 'मैं आशा करता हूँ कि यह संदेश आपको ठीक मिलेगा।',
            'reason'     => 'कारण: :reason',
            'seller-msg' => 'नमस्ते, :name ने आपके खिलाफ एक समस्या की सूचना दी है। कृपया नीचे दिए गए विवरण की समीक्षा करें।',
            'subject'    => 'विक्रेता रिपोर्ट सूचना',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'वेलोसिटी विक्रेता खाता बनाएं',
            'banner-description'  => 'वेलोसिटी भारत में नए युग के व्यवसायों को अपने उत्पाद बेचने के लिए एक शानदार मंच हो सकता है। इन युक्तियों का पालन करके, आप वेलोसिटी विक्रेता के रूप में सफलता के लिए खुद को स्थापित कर सकते हैं!',
            'banner-btn-title'    => 'स्टोर खोलें',
            'feature-title'       => 'विक्रेताओं को वेलोसिटी पर बेचने से क्यों प्यार है?',
            'feature-description' => 'विक्रेताओं को उच्च-वेलोसिटी प्लेटफार्मों से प्यार है क्योंकि वे बढ़ी हुई बिक्री, बेहतर प्रदर्शन और एक कुशल बिक्री अनुभव की संभावना प्रदान करते हैं जो व्यापार वृद्धि और सफलता में योगदान कर सकते हैं।',
            'feature-box1-title'  => 'बढ़ी हुई बिक्री के अवसर',
            'feature-box1-desc'   => 'विक्रेताओं को उच्च-वेलोसिटी प्लेटफार्मों से प्यार है क्योंकि वे बढ़ी हुई बिक्री, बेहतर प्रदर्शन और एक कुशल बिक्री अनुभव की संभावना प्रदान करते हैं जो व्यापार वृद्धि और सफलता में योगदान कर सकते हैं।',
            'feature-box2-title'  => 'तेजी से बदलाव',
            'feature-box2-desc'   => 'उत्पाद उच्च-वेलोसिटी प्लेटफार्मों पर अधिक तेजी से बिकते हैं, जिससे विक्रेताओं के लिए तेजी से इन्वेंटरी टर्नओवर और राजस्व उत्पन्न होता है।',
            'feature-box3-title'  => 'बढ़ी हुई दृश्यता',
            'feature-box3-desc'   => 'ये प्लेटफार्म विक्रेता उत्पादों के लिए अधिक दृश्यता और प्रदर्शन प्रदान करते हैं, जिससे अधिक दृश्य और संभावित बिक्री होती है।',
            'feature-box4-title'  => 'कुशलता और सुविधा',
            'feature-box4-desc'   => 'उच्च-वेलोसिटी प्लेटफार्मों में अक्सर सुव्यवस्थित प्रक्रियाएं और उपकरण होते हैं जो बिक्री को अधिक कुशल बनाते हैं, विक्रेताओं को उनके ऑनलाइन व्यवसायों का प्रबंधन करने में समय और प्रयास बचाते हैं।',
            'journey-title'       => 'वेलोसिटी पर अपनी यात्रा शुरू करें',
            'journey-description' => 'दुनिया भर में बड़े ग्राहकों के साथ, चौबीसों घंटे बेचने की यात्रा शुरू करें।',
            'journey-step1-title' => 'विक्रेता बनें',
            'journey-step1-desc'  => 'अपने स्टोर को सभी बुनियादी जानकारी के साथ सेटअप करें।',
            'journey-step2-title' => 'उत्पाद सूचीबद्ध करें',
            'journey-step2-desc'  => 'ग्राहक को देखने और खरीदने के लिए स्टोर में उत्पादों को सूचीबद्ध करें।',
            'journey-step3-title' => 'ऑर्डर प्राप्त करें',
            'journey-step3-desc'  => 'दुनिया भर के विभिन्न ग्राहकों से ऑर्डर प्राप्त करें।',
            'journey-step4-title' => 'उत्पाद वितरण',
            'journey-step4-desc'  => 'एक बार उत्पाद वितरित हो जाने और भुगतान प्राप्त हो जाने के बाद',
            'journey-step5-title' => 'भुगतान',
            'journey-step5-desc'  => 'भुगतान अनुरोध, कमीशन कटौती के बाद भुगतान प्राप्त करें।',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'क्षतिग्रस्त उत्पाद',
            'damaged-product-sold'      => 'क्षतिग्रस्त उत्पाद विक्रेता द्वारा बेचा गया',
            'duplicate-product'         => 'डुप्लीकेट उत्पाद',
            'duplicate-product-sold'    => 'डुप्लीकेट उत्पाद विक्रेता द्वारा बेचा गया',
            'missing-product-parts'     => 'उत्पाद के हिस्से गायब हैं',
            'over-price-product'        => 'अधिक कीमत वाला उत्पाद',
            'over-price-product-sold'   => 'अधिक कीमत वाला उत्पाद विक्रेता द्वारा बेचा गया',
            'poor-product-quality'      => 'खराब उत्पाद गुणवत्ता',
            'poor-product-quality-sold' => 'खराब गुणवत्ता वाला उत्पाद विक्रेता द्वारा बेचा गया',
            'receive-wrong-product'     => 'गलत उत्पाद प्राप्त करें',
            'wrong-product-sold'        => 'गलत उत्पाद विक्रेता द्वारा बेचा गया',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'डाउनलोड करें',
                    'export'     => 'निर्यात',
                    'no-records' => 'निर्यात करने के लिए कुछ नहीं',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'होम पेज',
                    'logout'     => 'लॉग आउट',
                    'my-profile' => 'मेरी प्रोफ़ाइल',
                    'visit-shop' => 'दुकान देखें',

                    'mega-search' => [
                        'customers'                      => 'ग्राहक',
                        'explore-all-customers'          => 'सभी ग्राहकों का अन्वेषण करें',
                        'explore-all-matching-customers' => '“:query” (:count) से मेलने वाले सभी ग्राहकों का अन्वेषण करें',
                        'explore-all-matching-orders'    => '“:query” (:count) से मेलने वाले सभी आदेशों का अन्वेषण करें',
                        'explore-all-matching-products'  => '“:query” (:count) से मेलने वाले सभी उत्पादों का अन्वेषण करें',
                        'explore-all-orders'             => 'सभी आदेशों का अन्वेषण करें',
                        'explore-all-products'           => 'सभी उत्पादों का अन्वेषण करें',
                        'orders'                         => 'आदेश',
                        'products'                       => 'उत्पाद',
                        'sku'                            => 'एसकेयू: :sku',
                        'title'                          => 'मेगा खोज',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'संकुचित करें',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'चित्र जोड़ें',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'केवल छवि फाइलें (.jpeg, .jpg, .png, ..) अनुमत हैं।',
                ],

                'videos' => [
                    'add-video-btn'     => 'वीडियो जोड़ें',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'केवल वीडियो फाइलें (.mp4, .mov, .ogg ..) अनुमत हैं।',
                ],

                'documents' => [
                    'add-document-btn'  => 'दस्तावेज़ जोड़ें',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'केवल दस्तावेज़ फाइलें (:types ..) अनुमत हैं।',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'एक्सेल',
                    'front'      => 'सामने',
                    'next'       => 'अगला',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'पावरपॉइंट',
                    'size'       => 'आकार',
                    'text'       => 'पाठ',
                    'use-cases'  => 'उपयोग मामले',
                    'word'       => 'वर्ड',
                    'zoom'       => 'ज़ूम',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'बुकिंग्स',
            'communication'     => 'संचार',
            'customers'         => 'ग्राहक',
            'dashboard'         => 'डैशबोर्ड',
            'extensions'        => 'एक्सटेंशन्स',
            'general'           => 'सामान्य',
            'inventory-sources' => 'इन्वेंटरी स्रोत',
            'manage-profile'    => 'प्रोफ़ाइल प्रबंधित करें',
            'orders'            => 'आदेश',
            'product-reviews'   => 'उत्पाद समीक्षाएँ',
            'products'          => 'उत्पाद',
            'reporting'         => 'रिपोर्टिंग',
            'roles'             => 'भूमिकाएँ',
            'sales'             => 'बिक्री',
            'seller-reviews'    => 'विक्रेता समीक्षाएँ',
            'settings'          => 'सेटिंग्स',
            'transaction'       => 'लेन-देन',
            'users'             => 'उपयोगकर्ता',
        ],

        'acl' => [
            'assign'            => 'आवंटित करें',
            'bookings'          => 'बुकिंग्स',
            'cancel'            => 'रद्द करें',
            'communication'     => 'संचार',
            'create'            => 'बनाएँ',
            'customers'         => 'ग्राहक',
            'dashboard'         => 'डैशबोर्ड',
            'delete'            => 'हटाएँ',
            'edit'              => 'संपादित करें',
            'extensions'        => 'एक्सटेंशन्स',
            'general'           => 'सामान्य',
            'inventory-sources' => 'इन्वेंटरी स्रोत',
            'invoice'           => 'चालान',
            'orders'            => 'आदेश',
            'payment-request'   => 'भुगतान अनुरोध',
            'print'             => 'प्रिंट',
            'print-invoice'     => 'चालान प्रिंट करें',
            'product-reviews'   => 'उत्पाद समीक्षा',
            'products'          => 'उत्पाद',
            'reporting'         => 'रिपोर्टिंग',
            'sales'             => 'बिक्री',
            'seller-reviews'    => 'विक्रेता समीक्षा',
            'settings'          => 'सेटिंग्स',
            'shipment'          => 'शिपमेंट',
            'transactions'      => 'लेन-देन',
            'view'              => 'देखें',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'नया उत्पाद जोड़ें',
            'assign'            => 'असाइन करें',
            'bookings'          => 'बुकिंग्स',
            'communication'     => 'संचार',
            'create'            => 'बनाएँ',
            'customers'         => 'ग्राहक',
            'dashboard'         => 'डैशबोर्ड',
            'edit'              => 'संपादित करें',
            'extensions'        => 'एक्सटेंशन्स',
            'general'           => 'सामान्य',
            'inventory-sources' => 'इन्वेंटरी स्रोत',
            'manage-profile'    => 'प्रोफ़ाइल प्रबंधित करें',
            'orders'            => 'आदेश',
            'product-reviews'   => 'उत्पाद समीक्षाएँ',
            'products'          => 'उत्पाद',
            'reporting'         => 'रिपोर्टिंग',
            'roles'             => 'भूमिकाएँ',
            'sales'             => 'बिक्री',
            'seller-reviews'    => 'विक्रेता समीक्षाएँ',
            'settings'          => 'सेटिंग्स',
            'title'             => 'प्रोफ़ाइल',
            'transaction'       => 'लेन-देन',
            'users'             => 'उपयोगकर्ता',
            'view'              => 'देखें',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'साइन इन करें',
            'create-your-account' => 'अपना खाता बनाएं',
            'email'               => 'ईमेल',
            'footer'              => '© कॉपीराइट 2010 - :current_year, वेबकुल सॉफ्टवेयर (भारत में पंजीकृत)। सभी अधिकार सुरक्षित हैं।',
            'forgot-pass'         => 'पासवर्ड भूल गए?',
            'form-login-text'     => 'यदि आपका खाता है, तो अपने ईमेल पते के साथ साइन इन करें।',
            'invalid-credentials' => 'कृपया अपनी प्रमाणपत्रों की जाँच करें और पुनः प्रयास करें।',
            'new-seller'          => 'नया विक्रेता?',
            'not-approved'        => 'आपकी सक्रियण की प्रमुख मंजूरी की प्रतीक्षा कर रही है',
            'page-title'          => 'विक्रेता लॉगिन',
            'password'            => 'पासवर्ड',
            'show-password'       => 'पासवर्ड दिखाएं',
            'suspended-message'   => 'आपका खाता निलंबित कर दिया गया है। किसी भी प्रश्न के लिए व्यवस्थापक से संपर्क करें।',
            'title'               => 'साइन इन करें',
        ],

        'signup' => [
            'account-exists'   => 'पहले से ही खाता है?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'रजिस्टर करें',
            'confirm-pass'     => 'पासवर्ड की पुष्टि करें',
            'email'            => 'ईमेल',
            'footer'           => '© कॉपीराइट 2010 - :current_year, वेबकुल सॉफ्टवेयर (भारत में पंजीकृत)। सभी अधिकार सुरक्षित हैं।',
            'form-signup-text' => 'आपका स्टोर नए हैं, तो हम आपको सदस्य के रूप में देखकर खुश हैं।',
            'name'             => 'नाम',
            'page-title'       => 'विक्रेता बनें',
            'password'         => 'पासवर्ड',
            'sign-in-button'   => 'साइन इन करें',
            'success'          => 'खाता सफलतापूर्वक बनाया गया है।',
            'url'              => 'शॉप URL',
        ],

        'forgot-password' => [
            'already-sent'         => 'हम पहले ही आपका पासवर्ड रीसेट लिंक ईमेल कर चुके हैं।',
            'back'                 => 'साइन इन पर वापस जाएं?',
            'bagisto'              => 'Bagisto',
            'email'                => 'ईमेल',
            'email-not-exist'      => 'उस ईमेल पते के साथ हम एक उपयोगकर्ता नहीं पा सकते हैं।',
            'footer'               => '© कॉपीराइट 2010 - :current_year, वेबकुल सॉफ्टवेयर (भारत में पंजीकृत)। सभी अधिकार सुरक्षित हैं।',
            'forgot-password-text' => 'अगर आपने अपना पासवर्ड भूल गए हैं, तो अपना ईमेल पता दर्ज करके इसे पुनः प्राप्त करें।',
            'page-title'           => 'अपना पासवर्ड भूल गए हैं?',
            'reset-link-sent'      => 'हमने आपके पासवर्ड रीसेट लिंक को ईमेल कर दिया है।',
            'sign-in-button'       => 'साइन इन करें',
            'submit'               => 'पासवर्ड रीसेट करें',
            'title'                => 'पासवर्ड पुनर्प्राप्त करें',
        ],

        'reset-password' => [
            'back-link-title'  => 'साइन इन पर वापस जाएं',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'पासवर्ड की पुष्टि करें',
            'email'            => 'पंजीकृत ईमेल',
            'footer'           => '© कॉपीराइट 2010 - :current_year, वेबकुल सॉफ्टवेयर (भारत में पंजीकृत)। सभी अधिकार सुरक्षित हैं।',
            'password'         => 'पासवर्ड',
            'submit-btn-title' => 'पासवर्ड रीसेट करें',
            'title'            => 'पासवर्ड रीसेट करें',
        ],

        'dashboard' => [
            'add-product'           => 'उत्पाद जोड़ें',
            'avg-order-sell'        => 'औसत आदेश बिक्री',
            'category-info'         => 'चयनित अंतराल के लिए कोई श्रेणी नहीं मिली',
            'complete-profile-link' => 'अपनी प्रोफ़ाइल पूरी करें &rarr;',
            'completed-orders'      => 'पूर्ण (:count)',
            'customer-info'         => 'चयनित अंतराल के लिए कोई ग्राहक नहीं मिला',
            'date-range'            => 'तिथि सीमा',
            'empty-threshold'       => 'खाली सीमा',
            'empty-threshold-desc'  => 'कोई उत्पाद उपलब्ध नहीं है',
            'end-date'              => 'समाप्ति तिथि',
            'hi-comment'            => 'तेजी से देखें कि आपके स्टोर में क्या हो रहा है।',
            'hi-seller'             => 'नमस्ते! :seller_name',
            'month'                 => 'इस महीने',
            'no-category'           => 'कोई डेटा उपलब्ध नहीं है',
            'no-customer'           => 'कोई डेटा उपलब्ध नहीं है',
            'no-record-available'   => 'कोई रिकॉर्ड उपलब्ध नहीं है।',
            'order-count'           => ':total ऑर्डर',
            'overall-details'       => 'कुल विवरण',
            'pending-orders'        => 'विचाराधीन (:count)',
            'per-unit'              => ':price/इकाई',
            'processing-orders'     => 'प्रोसेसिंग (:count)',
            'product-info'          => 'चलते फिरते संबंधित उत्पाद जोड़ें',
            'profile-score'         => 'प्रोफ़ाइल स्कोर',
            'profile-score-desc'    => 'अपनी प्रोफ़ाइल जानकारी को पूर्ण रखकर अपनी दृश्यता को अधिकतम करें।',
            'qty-stock'             => ':qty स्टॉक',
            'refunded-orders'       => 'वापसी किए गए (:count)',
            'remaining-payout'      => 'शेष पेआउट',
            'start-date'            => 'प्रारंभ तिथि',
            'stock-threshold'       => 'स्टॉक सीमा',
            'title'                 => 'डैशबोर्ड',
            'today'                 => 'आज',
            'top-categories'        => 'शीर्ष श्रेणियाँ',
            'top-customers'         => 'सबसे अधिक बिक्री वाला ग्राहक',
            'top-products'          => 'सर्वाधिक बिकने वाले उत्पाद',
            'total-customers'       => 'कुल ग्राहक',
            'total-orders'          => 'कुल आदेश',
            'total-payout'          => 'कुल पेआउट',
            'total-sale'            => 'कुल बिक्री :total',
            'total-sales'           => 'कुल बिक्री',
            'view-all-btn'          => 'सभी देखें',
            'visitor-count'         => 'आगंतुक - :count',
            'week'                  => 'इस सप्ताह',
            'year'                  => 'इस साल',
        ],

        'orders' => [
            'index' => [
                'title' => 'आदेश',

                'datagrid' => [
                    'canceled'        => 'रद्द',
                    'closed'          => 'बंद',
                    'commission'      => 'कमीशन',
                    'completed'       => 'पूर्ण',
                    'customer'        => 'ग्राहक',
                    'date'            => 'तिथि',
                    'discount'        => 'छूट',
                    'email'           => 'ईमेल',
                    'fraud'           => 'धोखाधड़ी',
                    'gross-amt'       => 'कुल मान',
                    'id'              => 'आईडी',
                    'invoice-pending' => 'चालान पैंडिंग',
                    'items'           => 'आइटम्स',
                    'location'        => 'स्थान',
                    'order-id'        => 'आईडी - #:id',
                    'paid'            => 'भुगतान किया गया',
                    'payment'         => 'भुगतान',
                    'payment-request' => 'भुगतान अनुरोध',
                    'pending'         => 'विचाराधीन',
                    'pending-payment' => 'विचाराधीन भुगतान',
                    'processing'      => 'प्रोसेसिंग',
                    'refunded'        => 'वापसी की गई',
                    'requested'       => 'अनुरोधित',
                    'seller-earn'     => 'विक्रेता कमाई',
                    'shipment'        => 'शिपमेंट',
                    'status'          => 'स्थिति',
                    'transaction'     => 'लेन-देन',
                    'view'            => 'देखें',
                ],

                'payment-req-success'  => 'आपका भुगतान अनुरोध सफलता पूर्वक सबमिट किया गया है',
                'something-went-wrong' => 'कुछ गड़बड़ हो गई है',
            ],

            'view' => [
                'admin-commission'           => 'एडमिन कमीशन',
                'billing-address'            => 'बिलिंग पता',
                'by-customer'                => 'ग्राहक द्वारा - :name',
                'cancel-btn'                 => 'रद्द करें',
                'cancel-confirm-msg'         => 'क्या आप इस आदेश को रद्द करना चाहते हैं?',
                'cancel-error-msg'           => 'आदेश को रद्द नहीं किया जा सकता',
                'cancel-success-msg'         => 'आदेश रद्द कर दिया गया है',
                'canceled'                   => 'रद्द',
                'closed'                     => 'बंद',
                'completed'                  => 'पूर्ण',
                'discount'                   => 'छूट',
                'fraud'                      => 'धोखाधड़ी',
                'grand-total'                => 'कुल योग',
                'info'                       => 'जानकारी',
                'item-canceled'              => 'रद्द (:qty_canceled)',
                'item-invoice'               => 'चालान (:qty_invoiced)',
                'item-ordered'               => 'मांगी गई (:qty_ordered)',
                'item-refunded'              => 'वापसी की गई (:qty_refunded)',
                'item-shipped'               => 'भेज दिया गया (:qty_shipped)',
                'item-status'                => 'आइटम की स्थिति',
                'payment-method'             => 'भुगतान विधि',
                'pending'                    => 'विचाराधीन',
                'pending_payment'            => 'विचाराधीन भुगतान',
                'permission-error'           => 'आपको आदेश को रद्द करने की अनुमति नहीं है',
                'place-on'                   => ':date को प्लेस करें',
                'price'                      => 'मूल्य',
                'price-excl-tax'             => 'मूल्य (कर रहित)',
                'price-incl-tax'             => 'मूल्य (कर सहित)',
                'processing'                 => 'प्रोसेसिंग',
                'product'                    => 'उत्पाद',
                'shipping-address'           => 'शिपिंग पता',
                'shipping-handling'          => 'शिपिंग और हैंडलिंग',
                'shipping-method'            => 'शिपिंग विधि',
                'shipping-handling-excl-tax' => 'शिपिंग और हैंडलिंग (कर को छोड़कर)',
                'shipping-handling-incl-tax' => 'शिपिंग और हैंडलिंग (कर सहित)',
                'sub-total-excl-tax'         => 'उप-टोटल (कर को छोड़कर)',
                'sub-total-incl-tax'         => 'उप-टोटल (कर सहित)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'उप-योग',
                'tax'                        => 'कर',
                'tax-amount'                 => 'कर मान',
                'tax-percent'                => 'कर प्रतिशत',
                'title'                      => 'आदेश #:order_id',
                'total'                      => 'कुल',
                'total-due'                  => 'कुल बकाया',
                'total-paid'                 => 'कुल भुगतान',
                'total-refunded'             => 'कुल वापसी',
                'total-seller-amt'           => 'कुल विक्रेता राशि',

                'invoices' => [
                    'bank-details'               => 'बैंक विवरण',
                    'bill-to'                    => 'बिल प्राप्तकर्ता',
                    'contact'                    => 'संपर्क',
                    'contact-number'             => 'संपर्क नंबर',
                    'created-on'                 => 'निर्माण तिथि: :date_time',
                    'date'                       => 'चालान तिथि',
                    'discount'                   => 'छूट',
                    'excl-tax'                   => 'कर रहित:',
                    'grand-total'                => 'कुल योग',
                    'individual-invoice'         => 'चालान #:invoice_id',
                    'invoice'                    => 'चालान',
                    'invoice-id'                 => 'चालान आईडी',
                    'name'                       => 'नाम',
                    'order-date'                 => 'आदेश तिथि',
                    'order-id'                   => 'आदेश आईडी',
                    'payment-method'             => 'भुगतान विधि',
                    'payment-terms'              => 'भुगतान की शर्तें',
                    'price'                      => 'मूल्य',
                    'print'                      => 'प्रिंट',
                    'product-name'               => 'उत्पाद का नाम',
                    'qty'                        => 'मात्रा',
                    'ship-to'                    => 'शिपिंग प्राप्तकर्ता',
                    'shipping-handling'          => 'शिपिंग और हैंडलिंग',
                    'shipping-handling-excl-tax' => 'शिपिंग और हैंडलिंग (कर रहित)',
                    'shipping-handling-incl-tax' => 'शिपिंग और हैंडलिंग (कर सहित)',
                    'shipping-method'            => 'शिपिंग विधि',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'उप-योग',
                    'sub-total-excl-tax'         => 'उप-योग (कर रहित)',
                    'sub-total-incl-tax'         => 'उप-योग (कर सहित)',
                    'tax'                        => 'कर',
                    'tax-amount'                 => 'कर राशि',
                    'title'                      => 'चालान',
                    'vat-number'                 => 'वैट नंबर',
                ],

                'shipments' => [
                    'carrier-title'       => 'कैरियर शीर्षक',
                    'created-on'          => ':date_time को बनाया गया',
                    'individual-shipment' => 'शिपमेंट #:track_number',
                    'inventory-source'    => 'इन्वेंटरी स्रोत',
                    'name'                => 'नाम',
                    'qty'                 => 'मात्रा',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'शिपमेंट बनाएं',
                    'tracking-number'     => 'ट्रैकिंग नंबर',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'समायोजन शुल्क',
                    'adjustment-refund'          => 'समायोजन रिफंड',
                    'created-on'                 => ':date_time को बनाया गया',
                    'discount'                   => 'डिस्काउंट',
                    'grand-total'                => 'कुल योग',
                    'individual-refund'          => 'रिफंड #:refund_id',
                    'no-result-found'            => 'हम कोई रिकॉर्ड नहीं पा सके।',
                    'price'                      => 'मूल्य',
                    'product-name'               => 'नाम',
                    'qty'                        => 'मात्रा',
                    'shipping-handling'          => 'शिपिंग और हैंडलिंग',
                    'shipping-handling-excl-tax' => 'शिपिंग और हैंडलिंग (कर को छोड़कर)',
                    'shipping-handling-incl-tax' => 'शिपिंग और हैंडलिंग (कर सहित)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'उप-टोटल (कर को छोड़कर)',
                    'sub-total-incl-tax'         => 'उप-टोटल (कर सहित)',
                    'subtotal'                   => 'उप-योग',
                    'tax'                        => 'कर',
                    'tax-amount'                 => 'कर राशि',
                    'title'                      => 'रिफंड',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'चालान',
                'invoice-success'  => 'चालान सफलता पूर्वक बनाया गया है',
                'permission-error' => 'आपको आदेश चालान बनाने की अनुमति नहीं है',
                'price'            => 'मूल्य',
                'product-name'     => 'उत्पाद का नाम',
                'qty'              => 'मात्रा',
                'qty-error'        => 'अनुरोधित मात्रा उपलब्ध नहीं है',
                'sub-total'        => 'चालान <br> उप-योग',
                'title'            => 'चालान बनाएं',
                'total'            => 'कुल',
            ],

            'shipments' => [
                'avl-qty'          => 'उपलब्ध - :qty मात्रा',
                'carrier-title'    => 'कैरियर शीर्षक',
                'create-btn'       => 'शिपमेंट',
                'ordered-qty'      => 'मांगी गई मात्रा',
                'permission-error' => 'आपको शिपमेंट बनाने की अनुमति नहीं है',
                'product-name'     => 'उत्पाद का नाम',
                'qty'              => 'मात्रा',
                'qty-error'        => 'अनुरोधित मात्रा उपलब्ध नहीं है',
                'shipment-success' => 'शिपमेंट सफलता पूर्वक बनाई गई है',
                'shipped-qty'      => 'भेजी गई मात्रा',
                'sku'              => 'SKU - :sku',
                'source'           => 'उत्पाद मांगा गया स्रोत',
                'title'            => 'शिपमेंट बनाएं',
                'tracking-id'      => 'ट्रैकिंग आईडी',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'निर्माण तिथि',
                    'from'         => 'से',
                    'id'           => 'आईडी',
                    'order-id'     => 'आदेश आईडी',
                    'qty'          => 'मात्रा',
                    'to'           => 'तक',
                    'view'         => 'देखें',
                ],

                'title'    => 'बुकिंग',
            ],

            'calendar' => [
                'booking-date'     => 'बुकिंग तिथि',
                'booking-details'  => 'बुकिंग विवरण',
                'canceled'         => 'रद्द',
                'closed'           => 'बंद',
                'done'             => 'पूर्ण',
                'order-id'         => 'आदेश आईडी',
                'pending'          => 'लंबित',
                'price'            => 'मूल्य',
                'status'           => 'स्थिति',
                'time-slot'        => 'समय स्लॉट:',
                'view-details'     => 'विवरण देखें',
            ],

            'title' => 'बुकिंग उत्पाद',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'शेष पेआउट',
                'title'                  => 'लेन-देन',
                'total-payout'           => 'कुल पेआउट',
                'total-seller-sale'      => 'कुल बिक्री (विक्रेता)',
                'total-admin-commission' => 'कुल कमीशन (व्यवस्थापक)',
                'total-sale-invoiced'    => 'कुल बिक्री (चालानित)',

                'datagrid' => [
                    'comment'        => 'टिप्पणी',
                    'id'             => 'आईडी',
                    'total'          => 'कुल',
                    'transaction-id' => 'लेन-देन आईडी',
                ],
            ],

            'view' => [
                'commission'        => 'कमीशन',
                'created-on'        => ':date को बनाया गया,',
                'date'              => 'तिथि',
                'id'                => 'लेन-देन आईडी',
                'method'            => 'विधि',
                'name'              => 'नाम',
                'payment-method'    => ':method भुगतान',
                'price'             => 'मूल्य',
                'print'             => 'प्रिंट',
                'qty'               => 'मात्रा',
                'seller-total'      => 'विक्रेता कुल',
                'shipping-handling' => 'शिपिंग और हैंडलिंग',
                'subtotal'          => 'उप-योग',
                'tax'               => 'कर',
                'title'             => 'लेन-देन',
                'total'             => 'कुल',
                'transaction-id'    => 'लेन-देन संख्या: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'नया उत्पाद जोड़ें',
                'title'           => 'उत्पाद',

                'datagrid' => [
                    'active'         => 'सक्रिय',
                    'approved'       => 'मंजूर',
                    'category'       => 'श्रेणी',
                    'delete'         => 'हटाएँ',
                    'disable'        => 'निष्क्रिय',
                    'disapproved'    => 'अस्वीकृत',
                    'edit'           => 'संपादित करें',
                    'id'             => 'आईडी',
                    'image'          => 'छवि',
                    'is-approved'    => 'मंजूर',
                    'name'           => 'नाम',
                    'out-of-stock'   => 'स्टॉक समाप्त',
                    'price'          => 'मूल्य',
                    'product-number' => 'उत्पाद संख्या',
                    'product_id'     => 'आईडी - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'स्थिति',
                    'stock'          => 'स्टॉक',
                    'total-quantity' => ':quantity उपलब्ध',
                    'type'           => 'प्रकार',
                ],
            ],

            'create' => [
                'attribute-family'          => 'गुण-परिवार',
                'back'                      => 'पीछे जाएं',
                'continue'                  => 'जारी रखें',
                'create-new-product'        => 'नए उत्पाद बनाएं',
                'create-your-new-product'   => 'यदि उत्पाद मौजूद नहीं है, तो अपना नया उत्पाद बनाएं',
                'disable-product-message'   => 'व्यवस्थापक ने उत्पाद बनाने या सौंपने की कार्यक्षमता को अक्षम कर दिया है।',
                'image-placeholder'         => 'आपकी छवि',
                'no-result'                 => 'कोई परिणाम नहीं',
                'not-allowed'               => 'आपको उत्पाद बनाने की अनुमति नहीं है',
                'or'                        => 'या',
                'product-type'              => 'उत्पाद प्रकार',
                'search-product'            => 'उत्पाद खोजें',
                'sell-admin-product-prices' => 'व्यवस्थापक उत्पाद को अपने मूल्यों पर बेचें।',
                'sell-as-yours'             => 'अपने रूप में बेचें',
                'sku'                       => 'SKU',
                'sub-title'                 => 'आप उत्पाद को 2 तरीकों से जोड़ सकते हैं, या तो व्यवस्थापक उत्पाद से या अपना उत्पाद बना सकते हैं।',
                'title'                     => 'नया उत्पाद जोड़ें',
                'update-profile'            => 'कृपया अपना प्रोफ़ाइल विवरण अपडेट करें',
            ],

            'edit' => [
                'back-btn'      => 'वापस',
                'preview'       => 'पूर्वावलोकन',
                'remove'        => 'हटाएं',
                'save-btn'      => 'उत्पाद सहेजें',
                'title'         => 'उत्पाद संपादित करें',
                'channels'      => 'चैनल',
                'progress-info' => 'अपने उत्पाद की अपील को बढ़ाएं और यह सुनिश्चित करके ग्राहकों पर एक स्थायी छाप छोड़ें कि सभी उत्पाद विवरण पूर्ण और सटीक हैं!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'समूह मूल्य जोड़ें',
                        'all-groups'                => 'सभी समूह',
                        'create-btn'                => 'नया जोड़ें',
                        'discount-group-price-info' => 'मूल्य पर :qty मात्र के लिए :price की छूट',
                        'edit-btn'                  => 'संपादित करें',
                        'empty-info'                => 'विशेष मूल्यवान ग्राहकों के लिए विशिष्ट मूल्यनिर्धारण।',
                        'fixed-group-price-info'    => 'मूल्य :qty मात्र के लिए स्थिर मूल्य पर :price',
                        'title'                     => 'ग्राहक समूह मूल्य',

                        'create' => [
                            'all-groups'     => 'सभी समूह',
                            'create-title'   => 'ग्राहक समूह मूल्य बनाएं',
                            'customer-group' => 'ग्राहक समूह',
                            'delete-btn'     => 'हटाएं',
                            'discount'       => 'छूट',
                            'fixed'          => 'स्थिर',
                            'price'          => 'मूल्य',
                            'price-type'     => 'मूल्य प्रकार',
                            'qty'            => 'मात्रा',
                            'save-btn'       => 'सहेजें',
                            'update-title'   => 'ग्राहक समूह मूल्य अपडेट करें',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'बकाया आदेशित मात्रा: :qty',
                    'pending-ordered-qty-info' => 'प्रेषण के बाद संबंधित इन्वेंटरी स्रोत से बकाया आदेशित मात्रा कटेगी। रद्दीकरण के मामले में बकाया मात्रा बिक्री के लिए उपलब्ध रहेगी।',
                    'title'                    => 'इन्वेंटरी',
                ],

                'categories' => [
                    'title' => 'श्रेणियाँ',
                ],

                'images' => [
                    'info'  => 'छवि का निर्धारण 609px X 560px की तरह होना चाहिए',
                    'title' => 'छवियाँ',
                ],

                'videos' => [
                    'error' => 'वीडियो :max किलोबाइट से अधिक नहीं हो सकता। कृपया एक छोटा फ़ाइल चुनें।',
                    'info'  => 'अधिकतम वीडियो आकार का होना चाहिए :size की तरह',
                    'title' => 'वीडियो',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'यात्रा के दौरान संबंधित उत्पाद जोड़ें।',
                        'info'       => 'ग्राहक जिस उत्पाद को देख रहा है, उसके अलावा उन्हें जुड़े हुए उत्पाद प्रस्तुत किए जाते हैं।',
                        'title'      => 'जुड़े उत्पाद',
                    ],

                    'up-sells' => [
                        'empty-info' => 'यात्रा के दौरान अधिक बेचने के उत्पाद जोड़ें।',
                        'info'       => 'ग्राहक को उप-बेचने वाले उत्पाद प्रस्तुत किए जाते हैं, जो उनके द्वारा वर्तमान में देखे जाने वाले उत्पाद का एक प्रीमियम या उच्च गुणवत्ता का विकल्प के रूप में कार्य करता है।',
                        'title'      => 'उप-बेचने वाले उत्पाद',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'यात्रा के दौरान क्रॉस-सेल प्रोडक्ट्स जोड़ें।',
                        'info'       => 'शॉपिंग कार्ट के पास, आपको आपके कार्ट में पहले से ही जोड़ी गई आइटम्स को पूरक करने के लिए क्रॉस-सेल्स के रूप में स्थित इन "इम्पल्स-खरीददार" उत्पादों का पता चलेगा।',
                        'title'      => 'क्रॉस-सेल्स उत्पाद',
                    ],

                    'add-btn'           => 'उत्पाद जोड़ें',
                    'delete'            => 'हटाएं',
                    'empty-info'        => 'क्रिया के लिए :type उत्पाद जोड़ने के लिए।',
                    'empty-title'       => 'उत्पाद जोड़ें',
                    'image-placeholder' => 'उत्पाद छवि',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'विकल्प जोड़ें',
                            'empty-info'        => 'त्वरित रूप से अनुकूलन विकल्प बनाने के लिए।',
                            'empty-title'       => 'विकल्प जोड़ें',
                            'info'              => 'यह साधारण उत्पाद को अनुकूलित करेगा।',
                            'title'             => 'अनुकूलन योग्य आइटम',

                            'update-create' => [
                                'is-required'               => 'आवश्यक है',
                                'max-characters'            => 'अधिकतम वर्ण',
                                'name'                      => 'शीर्षक',
                                'no'                        => 'नहीं',
                                'price'                     => 'मूल्य',
                                'save-btn'                  => 'सहेजें',
                                'supported-file-extensions' => 'समर्थित फ़ाइल एक्सटेंशन्स',
                                'title'                     => 'विकल्प',
                                'type'                      => 'प्रकार',
                                'yes'                       => 'हाँ',
                            ],

                            'option' => [
                                'add-btn'     => 'विकल्प जोड़ें',
                                'delete'      => 'हटाएं',
                                'delete-btn'  => 'हटाएं',
                                'edit-btn'    => 'संपादित करें',
                                'empty-info'  => 'त्वरित रूप से विभिन्न उत्पाद संयोजन बनाने के लिए।',
                                'empty-title' => 'विकल्प जोड़ें',

                                'types' => [
                                    'text' => [
                                        'title' => 'पाठ',
                                    ],

                                    'textarea' => [
                                        'title' => 'पाठ क्षेत्र',
                                    ],

                                    'checkbox' => [
                                        'title' => 'चेकबॉक्स',
                                    ],

                                    'radio' => [
                                        'title' => 'रेडियो',
                                    ],

                                    'select' => [
                                        'title' => 'चयन करें',
                                    ],

                                    'multiselect' => [
                                        'title' => 'मल्टीसेलेक्ट',
                                    ],

                                    'date' => [
                                        'title' => 'तारीख',
                                    ],

                                    'datetime' => [
                                        'title' => 'तारीख और समय',
                                    ],

                                    'time' => [
                                        'title' => 'समय',
                                    ],

                                    'file' => [
                                        'title' => 'फ़ाइल',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'लेबल',
                                        'price'    => 'मूल्य',
                                        'save-btn' => 'सहेजें',
                                        'title'    => 'विकल्प',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'यह उत्पाद पहले से ही एक कॉन्फिगरेबल, ग्रुप्ड या बंडल उत्पाद के साथ जुड़ा हुआ है।',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'वेरिएंट जोड़ें',
                        'delete-btn'        => 'हटाएं',
                        'edit-btn'          => 'संपादित करें',
                        'empty-info'        => 'विभिन्न उत्पाद की विभिन्न संयोजना बनाने के लिए।',
                        'empty-title'       => 'वेरिएंट जोड़ें',
                        'image-placeholder' => 'उत्पाद छवि',
                        'info'              => 'विविधता उत्पाद विशेषता के सभी संभावित संयोजनों पर निर्भर करते हैं।',
                        'qty'               => ':qty मात्रा',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'वेरिएशन',

                        'create'  => [
                            'description'            => 'विवरण',
                            'name'                   => 'नाम',
                            'save-btn'               => 'जोड़ें',
                            'title'                  => 'वेरिएंट जोड़ें',
                            'variant-already-exists' => 'यह वेरिएंट पहले से मौजूद है',
                        ],

                        'edit' => [
                            'disabled'        => 'अक्षम',
                            'edit-info'       => 'यदि आप उत्पाद जानकारी को विस्तार से अपडेट करना चाहते हैं, तो जाएं',
                            'edit-link-title' => 'उत्पाद विवरण पृष्ठ',
                            'enabled'         => 'सक्रिय',
                            'images'          => 'चित्र',
                            'name'            => 'नाम',
                            'price'           => 'मूल्य',
                            'quantities'      => 'मात्राएँ',
                            'save-btn'        => 'सहेजें',
                            'sku'             => 'SKU',
                            'status'          => 'स्थिति',
                            'title'           => 'उत्पाद',
                            'weight'          => 'वजन',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'चित्र जोड़ें',
                            'apply-to-all-btn'    => 'सभी पर लागू करें',
                            'apply-to-all-sku'    => 'सभी SKU पर मूल्य लागू करें।',
                            'edit-inventories'    => 'इन्वेंटरी संपादित करें',
                            'edit-prices'         => 'मूल्य संपादित करें',
                            'price'               => 'मूल्य',
                            'remove-images'       => 'चित्र हटाएं',
                            'remove-variants'     => 'वेरिएंट्स हटाएं',
                            'select-action'       => 'क्रिया चुनें',
                            'select-variants'     => 'वेरिएंट्स चुनें',
                            'edit-name'           => 'नाम संपादित करें',
                            'name'                => 'नाम',
                            'edit-sku'            => 'SKU संपादित करें',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'वजन संपादित करें',
                            'weight'              => 'वजन',
                            'edit-status'         => 'स्थिति संपादित करें',
                            'status'              => 'स्थिति',
                            'apply-to-all-name'   => 'सभी वेरिएंट्स पर नाम लागू करें।',
                            'apply-to-all-weight' => 'सभी वेरिएंट्स पर वजन लागू करें।',
                            'apply-to-all-status' => 'सभी वेरिएंट्स पर स्थिति लागू करें।',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'उत्पाद जोड़ें',
                        'default-qty'       => 'डिफ़ॉल्ट मात्रा',
                        'delete'            => 'हटाएं',
                        'empty-info'        => 'विभिन्न उत्पाद की विभिन्न संयोजना बनाने के लिए।',
                        'empty-title'       => 'उत्पाद जोड़ें',
                        'image-placeholder' => 'उत्पाद छवि',
                        'info'              => 'समूहित उत्पाद एक सेट के रूप में प्रस्तुत स्वतंत्र आइटमों से मिलकर बनते हैं, जो मौसम या थीम के अनुसार विविधताओं या समन्वय की अनुमति देते हैं। प्रत्येक उत्पाद को व्यक्तिगत रूप से खरीदा जा सकता है या समूह का हिस्सा बना सकता है।',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'समूहित उत्पाद',
                    ],

                    'bundle' => [
                        'add-btn'           => 'विकल्प जोड़ें',
                        'empty-info'        => 'चयन के विभिन्न विकल्प बनाने के लिए।',
                        'empty-title'       => 'विकल्प जोड़ें',
                        'image-placeholder' => 'उत्पाद छवि',
                        'info'              => 'एक बंडल उत्पाद कई आइटमों या सेवाओं की एक साथ एक विशेष मूल्य पर पैकेज है, ग्राहकों को मूल्य और सुविधा प्रदान करते हैं।',
                        'title'             => 'बंडल आइटम',

                        'update-create' => [
                            'checkbox'    => 'चेकबॉक्स',
                            'is-required' => 'आवश्यक है',
                            'multiselect' => 'मल्टीसेलेक्ट',
                            'name'        => 'शीर्षक',
                            'no'          => 'नहीं',
                            'radio'       => 'रेडियो',
                            'save-btn'    => 'सहेजें',
                            'select'      => 'सेलेक्ट',
                            'title'       => 'विकल्प',
                            'type'        => 'प्रकार',
                            'yes'         => 'हाँ',
                        ],

                        'option' => [
                            'add-btn'     => 'उत्पाद जोड़ें',
                            'default-qty' => 'डिफ़ॉल्ट मात्रा',
                            'delete'      => 'हटाएं',
                            'delete-btn'  => 'हटाएं',
                            'edit-btn'    => 'संपादित करें',
                            'empty-info'  => 'चयन के विभिन्न संयोजन उत्पाद बनाने के लिए।',
                            'empty-title' => 'उत्पाद जोड़ें',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'चेकबॉक्स का उपयोग करके डिफ़ॉल्ट उत्पाद सेट करें',
                                    'title' => 'चेकबॉक्स',
                                ],

                                'multiselect' => [
                                    'info'  => 'चेकबॉक्स बटन का उपयोग करके डिफ़ॉल्ट उत्पाद सेट करें',
                                    'title' => 'मल्टीसेलेक्ट',
                                ],

                                'radio' => [
                                    'info'  => 'रेडियो बटन का उपयोग करके डिफ़ॉल्ट उत्पाद सेट करें',
                                    'title' => 'रेडियो',
                                ],

                                'select' => [
                                    'info'  => 'रेडियो बटन का उपयोग करके डिफ़ॉल्ट उत्पाद सेट करें',
                                    'title' => 'सेलेक्ट',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'उपलब्धता प्रारंभ',
                        'available-to'   => 'उपलब्धता समाप्त',
                        'location'       => 'स्थान',
                        'qty'            => 'मात्रा',
                        'title'          => 'बुकिंग प्रकार',

                        'available-every-week' => [
                            'no'    => 'नहीं',
                            'title' => 'हर सप्ताह उपलब्ध',
                            'yes'   => 'हाँ',
                        ],

                        'appointment' => [
                            'break-duration'         => 'स्लॉट्स के बीच ब्रेक समय (मिनट)',
                            'slot-duration'          => 'स्लॉट अवधि (मिनट)',

                            'same-slot-for-all-days' => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],
                        ],

                        'default' => [
                            'add'              => 'जोड़ें',
                            'break-duration'   => 'स्लॉट्स के बीच ब्रेक समय (मिनट)',
                            'close'            => 'बंद करें',
                            'description'      => 'बुकिंग जानकारी',
                            'description-info' => 'स्लॉट के अनुसार समय अवधि बनाई जाएगी और प्रदर्शित की जाएगी। यह सभी स्लॉट्स में अद्वितीय होगी और स्टोरफ्रंट पर दिखाई देगी।',
                            'edit'             => 'संपादित करें',
                            'many'             => 'एक दिन के लिए कई बुकिंग',
                            'one'              => 'कई दिनों के लिए एक बुकिंग',
                            'open'             => 'खोलें',
                            'slot-add'         => 'स्लॉट्स जोड़ें',
                            'slot-duration'    => 'स्लॉट अवधि (मिनट)',
                            'slot-title'       => 'स्लॉट्स समय अवधि',
                            'title'            => 'डिफ़ॉल्ट',
                            'unavailable'      => 'अनुपलब्ध',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'स्लॉट्स जोड़ें',
                                    'close'      => 'बंद करें',
                                    'day'        => 'दिन',
                                    'edit-title' => 'स्लॉट्स संपादित करें',
                                    'friday'     => 'शुक्रवार',
                                    'from'       => 'से',
                                    'from-day'   => 'दिन से',
                                    'from-time'  => 'समय से',
                                    'monday'     => 'सोमवार',
                                    'open'       => 'खोलें',
                                    'saturday'   => 'शनिवार',
                                    'save'       => 'सहेजें',
                                    'select'     => 'चुनें',
                                    'status'     => 'स्थिति',
                                    'sunday'     => 'रविवार',
                                    'thursday'   => 'गुरुवार',
                                    'to'         => 'तक',
                                    'to-day'     => 'दिन तक',
                                    'to-time'    => 'समय तक',
                                    'tuesday'    => 'मंगलवार',
                                    'wednesday'  => 'बुधवार',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'टिकट जोड़ें',
                            'delete'             => 'हटाएं',
                            'description'        => 'विवरण',
                            'description-info'   => 'कोई टिकट उपलब्ध नहीं है।',
                            'edit'               => 'संपादित करें',
                            'name'               => 'नाम',
                            'price'              => 'मूल्य',
                            'qty'                => 'मात्रा',
                            'special-price'      => 'विशेष मूल्य',
                            'special-price-from' => 'विशेष मूल्य से',
                            'special-price-to'   => 'विशेष मूल्य तक',
                            'title'              => 'टिकट',
                            'valid-from'         => 'से मान्य',
                            'valid-until'        => 'तक मान्य',

                            'modal'              => [
                                'edit' => 'टिकट संपादित करें',
                                'save' => 'सहेजें',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'टिकट जोड़ें',
                            ],

                            'slots'   => [
                                'add'         => 'स्लॉट्स जोड़ें',
                                'description' => 'समय अवधि के साथ उपलब्ध स्लॉट्स।',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'दैनिक आधार',
                            'daily-hourly' => 'दोनों (दैनिक और घंटा आधार)',
                            'daily-price'  => 'दैनिक मूल्य',
                            'hourly'       => 'घंटा आधार',
                            'hourly-price' => 'घंटा मूल्य',
                            'title'        => 'किराए का प्रकार',

                            'same-slot-for-all-days' => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'स्लॉट्स जोड़ें',
                            'description-info' => 'स्लॉट के अनुसार समय अवधि बनाई जाएगी और प्रदर्शित की जाएगी। यह सभी स्लॉट्स में अद्वितीय होगी और स्टोरफ्रंट पर दिखाई देगी।',
                            'save'             => 'सहेजें',
                            'title'            => 'स्लॉट्स समय अवधि',
                            'unavailable'      => 'अनुपलब्ध',

                            'action'           => [
                                'add' => 'जोड़ें',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'शुक्रवार',
                                    'from'       => 'से',
                                    'monday'     => 'सोमवार',
                                    'saturday'   => 'शनिवार',
                                    'sunday'     => 'रविवार',
                                    'thursday'   => 'गुरुवार',
                                    'to'         => 'तक',
                                    'tuesday'    => 'मंगलवार',
                                    'wednesday'  => 'बुधवार',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'स्लॉट्स के बीच ब्रेक समय (मिनट)',
                            'guest-capacity'            => 'अतिथि क्षमता',
                            'guest-limit'               => 'प्रति टेबल अतिथि सीमा',
                            'prevent-scheduling-before' => 'पहले से शेड्यूलिंग रोकें',
                            'slot-duration'             => 'स्लॉट अवधि (मिनट)',

                            'charged-per'               => [
                                'guest'  => 'अतिथि',
                                'table'  => 'टेबल',
                                'title'  => 'प्रति चार्ज',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'नहीं',
                                'title' => 'सभी दिनों के लिए समान स्लॉट',
                                'yes'   => 'हाँ',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'नियुक्ति बुकिंग',
                            'default'     => 'डिफ़ॉल्ट बुकिंग',
                            'event'       => 'इवेंट बुकिंग',
                            'many'        => 'कई',
                            'one'         => 'एक',
                            'rental'      => 'किराए की बुकिंग',
                            'table'       => 'टेबल बुकिंग',
                            'title'       => 'प्रकार',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'लिंक जोड़ें',
                            'delete-btn'  => 'हटाएं',
                            'edit-btn'    => 'संपादित करें',
                            'empty-info'  => 'जाने पर लिंक बनाने के लिए।',
                            'empty-title' => 'लिंक जोड़ें',
                            'file'        => 'फ़ाइल : ',
                            'info'        => 'डाउनलोडयोग्य उत्पाद प्रकार डिजिटल उत्पाद, जैसे कि ई-बुक्स, सॉफ़्टवेयर अनुप्रयोग, संगीत, खेल, आदि बेचने की अनुमति देता है।',
                            'sample-file' => 'नमूना फ़ाइल : ',
                            'sample-url'  => 'नमूना URL : ',
                            'title'       => 'डाउनलोडयोग्य लिंक',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'डाउनलोड अनुमत',
                                'file'        => 'फ़ाइल',
                                'file-type'   => 'फ़ाइल प्रकार',
                                'name'        => 'शीर्षक',
                                'price'       => 'मूल्य',
                                'sample'      => 'नमूना',
                                'sample-type' => 'नमूना प्रकार',
                                'save-btn'    => 'सहेजें',
                                'title'       => 'लिंक',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'नमूना जोड़ें',
                            'delete-btn'  => 'हटाएं',
                            'edit-btn'    => 'संपादित करें',
                            'empty-info'  => 'जाने पर नमूना बनाने के लिए।',
                            'empty-title' => 'नमूना जोड़ें',
                            'file'        => 'फ़ाइल : ',
                            'info'        => 'डाउनलोडयोग्य उत्पाद प्रकार डिजिटल उत्पाद, जैसे कि ई-बुक्स, सॉफ़्टवेयर अनुप्रयोग, संगीत, खेल, आदि बेचने की अनुमति देता है।',
                            'title'       => 'डाउनलोडयोग्य नमूने',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'फ़ाइल',
                                'file-type' => 'फ़ाइल प्रकार',
                                'name'      => 'शीर्षक',
                                'save-btn'  => 'सहेजें',
                                'title'     => 'लिंक',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'उत्पाद सफलतापूर्वक बनाया गया',
            'delete-failed'            => 'उत्पाद हटाने में विफल रहा',
            'delete-success'           => 'उत्पाद सफलतापूर्वक हटाया गया',
            'product-type-not-allowed' => 'आपको :type उत्पाद बेचने की अनुमति नहीं है',
            'saved-inventory-message'  => 'उत्पाद सफलतापूर्वक सहेजा गया',
            'update-success'           => 'उत्पाद सफलतापूर्वक अपडेट किया गया',

            'assign' => [
                'already-selling'     => 'आप पहले से ही यह उत्पाद बेच रहे हैं',
                'back-btn'            => 'वापस',
                'condition'           => 'स्थिति',
                'create-success'      => 'उत्पाद को विक्रेता के लिए सफलतापूर्वक असाइन किया गया',
                'description'         => 'विवरण',
                'image-size'          => 'छवि का रिज़ॉल्यूशन 609px X 560px होना चाहिए',
                'images'              => 'छवियाँ',
                'new'                 => 'नया',
                'not-allowed'         => 'आपको इस उत्पाद को सौंपने की अनुमति नहीं है',
                'old'                 => 'पुराना',
                'price'               => 'कीमत',
                'product-not-allowed' => 'आपको :type प्रकार का उत्पाद बेचने की अनुमति नहीं है',
                'quantities'          => 'मात्रा',
                'save-btn'            => 'सहेजें',
                'title'               => 'उत्पाद असाइन करें',
                'update-success'      => 'असाइन किया गया उत्पाद सफलतापूर्वक अपडेट किया गया',

                'product-details' => [
                    'active'            => 'सक्रिय',
                    'approved'          => 'स्वीकृत',
                    'disable'           => 'अक्षम करें',
                    'disapproved'       => 'अस्वीकृत',
                    'image-placeholder' => 'उत्पाद छवि',
                    'title'             => 'उत्पाद विवरण',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title'          => 'उत्पाद समीक्षाएँ',

                'datagrid' => [
                    'approved'      => 'मंजूर',
                    'customer'      => 'ग्राहक',
                    'date'          => 'तारीख',
                    'description'   => 'विवरण',
                    'email'         => 'ईमेल',
                    'pending'       => 'अपूर्ण',
                    'product'       => 'उत्पाद',
                    'rating'        => 'रेटिंग',
                    'status'        => 'स्थिति',
                    'title'         => 'शीर्षक',
                    'unapproved'    => 'अमंजूर',
                    'update-status' => 'अपडेट स्थिति',
                ],
            ],

            'update-success' => 'उत्पाद समीक्षाएँ सफलतापूर्वक अपडेट की गईं',
            'delete-success' => 'उत्पाद समीक्षाएँ सफलतापूर्वक हटा दी गईं।',
        ],

        'customers' => [
            'index' => [
                'title' => 'ग्राहक',

                'datagrid' => [
                    'active'      => 'सक्रिय',
                    'customer'    => 'ग्राहक',
                    'email'       => 'ईमेल',
                    'gender'      => 'लिंग',
                    'group'       => 'समूह',
                    'inactive'    => 'निष्क्रिय',
                    'order-count' => 'आदेश गणना',
                    'revenue'     => 'राजस्व',
                    'status'      => 'स्थिति',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'प्रोफ़ाइल प्रबंधित करें',
                'edit-btn' => 'प्रोफ़ाइल संपादित करें',

                'general' => [
                    'email'      => 'ईमेल',
                    'name'       => 'नाम',
                    'phone'      => 'फ़ोन नंबर',
                    'shop-slug'  => 'दुकान स्लग',
                    'shop-title' => 'दुकान शीर्षक',
                    'title'      => 'सामान्य जानकारी',
                ],

                'about-store' => [
                    'title' => 'दुकान के बारे में',
                ],

                'meta' => [
                    'meta-description' => 'मेटा विवरण',
                    'meta-keywords'    => 'मेटा कीवर्ड्स',
                    'meta-title'       => 'मेटा शीर्षक',
                    'title'            => 'मेटा विवरण',
                ],

                'policy' => [
                    'privacy'  => 'गोपनीयता नीति',
                    'return'   => 'वापसी नीति',
                    'shipping' => 'शिपिंग नीति',
                    'title'    => 'नीतियां',
                ],

                'address' => [
                    'city'     => 'शहर',
                    'country'  => 'देश',
                    'postcode' => 'पिनकोड',
                    'state'    => 'राज्य',
                    'title'    => 'दुकान का पता',
                    'address'  => 'पता',
                ],

                'social' => [
                    'link'  => ':name लिंक',
                    'title' => 'सोशल लिंक',
                ],

                'minimum-order-amount' => [
                    'title'  => 'न्यूनतम आदेश राशि',
                ],

                'google-analytics' => [
                    'id'    => 'एनालिटिक्स आईडी',
                    'title' => 'गूगल एनालिटिक्स',
                ],

                'shop-information' => [
                    'admin-commission'       => 'एडमिन कमीशन',
                    'admin-commission-value' => 'एडमिन कमीशन :rate% कुल चालान राशि का',
                    'allowed-categories'     => 'अनुमत श्रेणियां',
                    'no-categories'          => 'कोई श्रेणियां उपलब्ध नहीं हैं',
                    'allowed-product-types'  => 'अनुमत उत्पाद प्रकार',
                    'no-product-types'       => 'कोई उत्पाद प्रकार उपलब्ध नहीं हैं',
                    'payment-methods'        => 'भुगतान विधियां',
                    'no-payment-methods'     => 'कोई भुगतान विधियां उपलब्ध नहीं हैं',
                    'shipping-methods'       => 'शिपिंग विधियां',
                    'no-shipping-methods'    => 'कोई शिपिंग विधियां उपलब्ध नहीं हैं',
                    'title'                  => 'दुकान की जानकारी',
                ],
            ],

            'edit' => [
                'banner'              => 'बैनर',
                'banner-description'  => '13:3 के अनुपात में बैनर अपलोड करें, ऊंचाई 375 सुरक्षित क्षेत्र 375x250 मोबाइल पर केंद्रित',
                'delete-banner'       => 'बैनर हटाएं',
                'delete-logo'         => 'लोगो हटाएं',
                'logo'                => 'लोगो',
                'logo-description'    => '1:1 के अनुपात में लोगो अपलोड करें',
                'save-btn'            => 'प्रोफ़ाइल सहेजें',
                'title'               => 'प्रोफ़ाइल प्रबंधित करें',
                'upload-new-banner'   => 'नया बैनर अपलोड करें',
                'upload-new-logo'     => 'नया लोगो अपलोड करें',

                'general' => [
                    'email'      => 'ईमेल',
                    'name'       => 'नाम',
                    'phone'      => 'फ़ोन नंबर',
                    'shop-slug'  => 'दुकान स्लग',
                    'shop-title' => 'दुकान शीर्षक',
                    'title'      => 'सामान्य जानकारी',
                ],

                'about-store' => [
                    'title' => 'दुकान के बारे में',
                ],

                'meta' => [
                    'meta-description' => 'मेटा विवरण',
                    'meta-keywords'    => 'मेटा कीवर्ड्स',
                    'meta-title'       => 'मेटा शीर्षक',
                    'title'            => 'मेटा विवरण',
                ],

                'policy' => [
                    'privacy'  => 'गोपनीयता नीति',
                    'return'   => 'वापसी नीति',
                    'shipping' => 'शिपिंग नीति',
                    'title'    => 'नीतियां',
                ],

                'address' => [
                    'city'           => 'शहर',
                    'country'        => 'देश',
                    'postcode'       => 'पिनकोड',
                    'state'          => 'राज्य',
                    'title'          => 'दुकान का पता',
                    'select-country' => 'देश चुनें',
                    'select-state'   => 'राज्य चुनें',
                    'street-address' => 'सड़क का पता',
                    'address'        => 'पता',
                ],

                'social' => [
                    'link'  => ':name लिंक',
                    'title' => 'सोशल लिंक',
                ],

                'minimum-order-amount' => [
                    'title'  => 'न्यूनतम आदेश राशि',
                ],

                'google-analytics' => [
                    'id'    => 'गूगल एनालिटिक्स आईडी',
                    'title' => 'गूगल एनालिटिक्स',
                ],
            ],

            'update-success' => 'आपकी प्रोफ़ाइल सफलतापूर्वक अपडेट हो गई है',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'विक्रेता समीक्षाएँ',

                'datagrid' => [
                    'approved'    => 'मंजूर',
                    'customer'    => 'ग्राहक',
                    'date'        => 'तारीख',
                    'description' => 'विवरण',
                    'disapproved' => 'अस्वीकृत',
                    'email'       => 'ईमेल',
                    'pending'     => 'अपूर्ण',
                    'rating'      => 'रेटिंग',
                    'status'      => 'स्थिति',
                    'title'       => 'शीर्षक',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'सहेजें',
                    'title'              => 'सामान्य',
                    'unmatched-password' => 'वर्तमान पासवर्ड मेल नहीं खाता है',
                    'update-success'     => 'सामान्य सेटिंग्स सफलतापूर्वक अपडेट की गईं',

                    'regional-setting' => [
                        'currency'      => 'मुद्रा',
                        'locale'        => 'स्थान',
                        'select-locale' => 'स्थान चुनें',
                        'title'         => 'क्षेत्रीय सेटिंग्स',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'पासवर्ड की पुष्टि करें',
                        'current-password' => 'वर्तमान पासवर्ड',
                        'new-password'     => 'नया पासवर्ड',
                        'title'            => 'पासवर्ड सेटिंग्स',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'भूमिका बनाएं',
                    'title'      => 'भूमिकाएँ',

                    'datagrid' => [
                        'all'             => 'सभी',
                        'custom'          => 'कस्टम',
                        'delete'          => 'हटाएं',
                        'edit'            => 'संपादित करें',
                        'id'              => 'आईडी',
                        'name'            => 'नाम',
                        'permission-type' => 'अनुमति प्रकार',
                    ],
                ],

                'create' => [
                    'access-control' => 'प्रवेश नियंत्रण',
                    'all'            => 'सभी',
                    'back-btn'       => 'वापस',
                    'custom'         => 'कस्टम',
                    'description'    => 'विवरण',
                    'general'        => 'सामान्य',
                    'name'           => 'नाम',
                    'permissions'    => 'अनुमतियाँ',
                    'save-btn'       => 'भूमिका सहेजें',
                    'title'          => 'भूमिका बनाएं',
                ],

                'edit' => [
                    'access-control' => 'प्रवेश नियंत्रण',
                    'all'            => 'सभी',
                    'back-btn'       => 'वापस',
                    'custom'         => 'कस्टम',
                    'description'    => 'विवरण',
                    'general'        => 'सामान्य',
                    'name'           => 'नाम',
                    'permissions'    => 'अनुमतियाँ',
                    'save-btn'       => 'भूमिका सहेजें',
                    'title'          => 'भूमिका संपादित करें',
                ],

                'being-used'        => 'भूमिका कुछ विक्रेताओं द्वारा उपयोग में है',
                'create-success'    => 'भूमिका सफलतापूर्वक बनाई गई',
                'delete-failed'     => 'भूमिका हटाने में विफल',
                'delete-success'    => 'भूमिका सफलतापूर्वक हटाई गई',
                'last-delete-error' => 'कम से कम एक भूमिका होनी चाहिए',
                'update-success'    => 'भूमिका सफलतापूर्वक अपडेट की गई',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'उपयोगकर्ता बनाएँ',
                    'create-title'     => 'उपयोगकर्ता बनाएँ',
                    'edit-title'       => 'उपयोगकर्ता संपादित करें',
                    'email'            => 'ईमेल',
                    'name'             => 'नाम',
                    'phone-number'     => 'फ़ोन नंबर',
                    'role'             => 'भूमिका',
                    'save-btn'         => 'उपयोगकर्ता सहेजें',
                    'select-role'      => 'भूमिका चुनें',
                    'password'         => 'पासवर्ड',
                    'confirm-password' => 'पासवर्ड की पुष्टि करें',
                    'status'           => 'स्थिति',
                    'title'            => 'उपयोगकर्ता',
                    'create-success'   => 'उपयोगकर्ता सफलतापूर्वक बनाया गया',
                    'update-success'   => 'उपयोगकर्ता सफलतापूर्वक अपडेट किया गया',
                    'delete-success'   => 'उपयोगकर्ता सफलतापूर्वक हटाया गया',
                    'delete-failed'    => 'उपयोगकर्ता को हटाने में विफल',

                    'datagrid' => [
                        'delete'     => 'हटाएँ',
                        'edit'       => 'संपादित करें',
                        'email'      => 'ईमेल',
                        'id'         => 'आईडी',
                        'id-value'   => 'आईडी - :id',
                        'name'       => 'नाम',
                        'permission' => 'अनुमति',
                        'phone'      => 'फ़ोन',

                        'status' => [
                            'title' => 'स्थिति',

                            'options' => [
                                'active'    => 'सक्रिय',
                                'suspended' => 'निलंबित',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'इन्वेंटरी स्रोत बनाएं',
                    'title'      => 'स्टॉक स्रोत',

                    'datagrid' => [
                        'active'   => 'सक्रिय',
                        'code'     => 'कोड',
                        'delete'   => 'हटाएं',
                        'edit'     => 'संपादित करें',
                        'id'       => 'आईडी',
                        'inactive' => 'निष्क्रिय',
                        'name'     => 'नाम',
                        'priority' => 'प्राथमिकता',
                        'status'   => 'स्थिति',
                    ],
                ],

                'create' => [
                    'add-title'      => 'स्टॉक स्रोत जोड़ें',
                    'address'        => 'स्रोत पता',
                    'back-btn'       => 'पीछे जाएं',
                    'city'           => 'शहर',
                    'code'           => 'कोड',
                    'contact-email'  => 'ईमेल',
                    'contact-fax'    => 'फैक्स',
                    'contact-info'   => 'संपर्क जानकारी',
                    'contact-name'   => 'नाम',
                    'contact-number' => 'संपर्क नंबर',
                    'country'        => 'देश',
                    'description'    => 'विवरण',
                    'general'        => 'सामान्य',
                    'latitude'       => 'अक्षांश',
                    'longitude'      => 'देशांतर',
                    'name'           => 'नाम',
                    'postcode'       => 'पिनकोड',
                    'priority'       => 'प्राथमिकता',
                    'save-btn'       => 'स्टॉक स्रोत सहेजें',
                    'select-country' => 'देश चुनें',
                    'select-state'   => 'राज्य चुनें',
                    'settings'       => 'सेटिंग्स',
                    'state'          => 'राज्य',
                    'status'         => 'स्थिति',
                    'street'         => 'सड़क',
                    'title'          => 'स्टॉक स्रोत',
                ],

                'edit' => [
                    'back-btn'       => 'पीछे जाएं',
                    'city'           => 'शहर',
                    'code'           => 'कोड',
                    'contact-email'  => 'ईमेल',
                    'contact-fax'    => 'फैक्स',
                    'contact-info'   => 'संपर्क जानकारी',
                    'contact-name'   => 'नाम',
                    'contact-number' => 'संपर्क नंबर',
                    'country'        => 'देश',
                    'description'    => 'विवरण',
                    'general'        => 'सामान्य',
                    'latitude'       => 'अक्षांश',
                    'longitude'      => 'देशांतर',
                    'name'           => 'नाम',
                    'postcode'       => 'पिनकोड',
                    'priority'       => 'प्राथमिकता',
                    'save-btn'       => 'स्टॉक स्रोत सहेजें',
                    'select-country' => 'देश चुनें',
                    'select-state'   => 'राज्य चुनें',
                    'settings'       => 'सेटिंग्स',
                    'source-address' => 'स्रोत पता',
                    'state'          => 'राज्य',
                    'status'         => 'स्थिति',
                    'street'         => 'सड़क',
                    'title'          => 'स्टॉक स्रोत संपादित करें',
                ],

                'create-success'    => 'स्टॉक स्रोत सफलतापूर्वक बनाया गया',
                'delete-failed'     => 'स्टॉक स्रोत हटाने में विफल हुआ',
                'delete-success'    => 'स्टॉक स्रोत सफलतापूर्वक हटाए गए',
                'last-delete-error' => 'कम से कम एक स्टॉक स्रोत को हटाना आवश्यक है',
                'update-success'    => 'स्टॉक स्रोत सफलतापूर्वक अपडेट किया गया',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'प्रशासक',
                'blocked-message'     => 'आपको प्रशासक द्वारा अवरुद्ध कर दिया गया है',
                'message-failed'      => 'संदेश भेजना विफल हुआ',
                'message-placeholder' => 'अपना संदेश यहां लिखें...',
                'message-sent'        => 'संदेश सफलतापूर्वक भेजा गया',
                'no-message'          => 'कोई संदेश नहीं मिला',
                'search-message'      => 'संदेश खोजें...',
                'title'               => 'संचार',

                'filters' => [
                    'all-messages'      => 'सभी संदेश',
                    'prev-fifteen-days' => 'पिछले 15 दिन',
                    'prev-seven-days'   => 'पिछले 7 दिन',
                    'prev-six-months'   => 'पिछले 6 महीने',
                    'prev-thirty-days'  => 'पिछले 30 दिन',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'छोड़े गए कार्ट',
                    'abandoned-products'            => 'छोड़े गए उत्पाद',
                    'abandoned-rate'                => 'छोड़े गए दर',
                    'abandoned-revenue'             => 'छोड़े गए राजस्व',
                    'added-to-cart'                 => 'कार्ट में जोड़ा गया',
                    'added-to-cart-info'            => 'केवल :progress दर्शकों ने उत्पाद कार्ट में जोड़े',
                    'all-channels'                  => 'सभी चैनल',
                    'average-order-value-over-time' => 'समय के साथ औसत आदेश मूल्य',
                    'average-sales'                 => 'औसत आदेश मूल्य',
                    'commission'                    => 'कमीशन',
                    'commission-over-time'          => 'समय के साथ कमीशन',
                    'count'                         => 'गणना',
                    'end-date'                      => 'समाप्ति तिथि',
                    'id'                            => 'आईडी',
                    'interval'                      => 'अंतराल',
                    'name'                          => 'नाम',
                    'orders'                        => 'आदेश',
                    'orders-over-time'              => 'समय के साथ आदेश',
                    'payment-method'                => 'भुगतान विधि',
                    'product-views'                 => 'उत्पाद दृश्य',
                    'product-views-info'            => 'केवल :progress दर्शक उत्पाद देखते हैं',
                    'purchase-funnel'               => 'खरीददारी कनाल',
                    'purchased'                     => 'खरीदा गया',
                    'purchased-info'                => 'केवल :progress दर्शक खरीदारी करते हैं',
                    'refunds'                       => 'वापसी',
                    'refunds-over-time'             => 'समय के साथ वापसी',
                    'sales-over-time'               => 'समय के साथ बिक्री',
                    'start-date'                    => 'प्रारंभ तिथि',
                    'tax-collected'                 => 'कर संग्रहित',
                    'tax-collected-over-time'       => 'समय के साथ कर संग्रहित',
                    'title'                         => 'बिक्री',
                    'top-payment-methods'           => 'शीर्ष भुगतान विधियाँ',
                    'top-tax-categories'            => 'शीर्ष कर श्रेणियाँ',
                    'total'                         => 'कुल',
                    'total-commission-paid'         => 'कुल भुगतान किया गया कमीशन',
                    'total-orders'                  => 'कुल आदेश',
                    'total-sales'                   => 'कुल बिक्री',
                    'total-visits'                  => 'कुल दौरा',
                    'total-visits-info'             => 'कुल दुकान पर दर्शक',
                    'view-details'                  => 'विवरण देखें',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'सभी चैनल',
                    'count'                       => 'गणना',
                    'customers'                   => 'ग्राहक',
                    'customers-over-time'         => 'समय के साथ ग्राहक',
                    'customers-traffic'           => 'ग्राहक यातायात',
                    'customers-with-most-orders'  => 'सबसे अधिक आदेश वाले ग्राहक',
                    'customers-with-most-reviews' => 'सबसे अधिक समीक्षाएँ वाले ग्राहक',
                    'customers-with-most-sales'   => 'सबसे अधिक बिक्री वाले ग्राहक',
                    'email'                       => 'ईमेल',
                    'end-date'                    => 'समाप्ति तिथि',
                    'id'                          => 'आईडी',
                    'interval'                    => 'अंतराल',
                    'name'                        => 'नाम',
                    'orders'                      => 'आदेश',
                    'reviews'                     => 'समीक्षाएँ',
                    'start-date'                  => 'प्रारंभ तिथि',
                    'title'                       => 'ग्राहक',
                    'top-customer-groups'         => 'शीर्ष ग्राहक समूह',
                    'total'                       => 'कुल',
                    'total-customers'             => 'कुल ग्राहक',
                    'total-visitors'              => 'कुल दर्शक',
                    'traffic-over-week'           => 'सप्ताह के यातायात',
                    'unique-visitors'             => 'अद्वितीय दर्शक',
                    'view-details'                => 'विवरण देखें',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'सभी चैनल',
                    'channel'                          => 'चैनल',
                    'end-date'                         => 'समापन तिथि',
                    'id'                               => 'आईडी',
                    'interval'                         => 'अंतराल',
                    'locale'                           => 'स्थानीय',
                    'name'                             => 'नाम',
                    'orders'                           => 'आदेश',
                    'price'                            => 'मूल्य',
                    'products-added-over-time'         => 'समय के साथ जोड़े गए उत्पाद',
                    'products-with-most-reviews'       => 'सबसे अधिक समीक्षाएँ वाले उत्पाद',
                    'products-with-most-visits'        => 'सबसे अधिक दौरे वाले उत्पाद',
                    'quantities'                       => 'मात्रा',
                    'quantities-sold-over-time'        => 'समय के साथ बेची गई मात्रा',
                    'revenue'                          => 'राजस्व',
                    'reviews'                          => 'समीक्षाएँ',
                    'start-date'                       => 'प्रारंभ तिथि',
                    'title'                            => 'उत्पाद',
                    'top-selling-products-by-quantity' => 'मात्रा के हिसाब से सबसे अधिक बेचे गए उत्पाद',
                    'top-selling-products-by-revenue'  => 'राजस्व के हिसाब से सबसे अधिक बेचे गए उत्पाद',
                    'total'                            => 'कुल',
                    'total-products-added-to-wishlist' => 'कुल सोच समग्र में जोड़े गए उत्पाद',
                    'total-sold-quantities'            => 'कुल बेची गई मात्रा',
                    'view-details'                     => 'विवरण देखें',
                    'visits'                           => 'यात्राएँ',
                ],
            ],

            'view' => [
                'all-channels'  => 'सभी चैनल',
                'day'           => 'दिन',
                'end-date'      => 'समापन तिथि',
                'export-csv'    => 'CSV पर्याप्त',
                'export-xls'    => 'XLS पर्याप्त',
                'month'         => 'महीना',
                'not-available' => 'कोई रिकॉर्ड उपलब्ध नहीं है।',
                'start-date'    => 'प्रारंभ तिथि',
                'year'          => 'साल',
            ],

            'empty' => [
                'info'  => 'चयनित अंतराल के लिए कोई डेटा उपलब्ध नहीं है',
                'title' => 'कोई डेटा उपलब्ध नहीं है',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'अक्षम',
                'enabled'   => 'सक्रिय',
                'info'      => 'Bagisto के अनुकूलन योग्य ईकॉमर्स एक्सटेंशनों के साथ अपना ऑनलाइन स्टोर बनाएं, प्रबंधित करें और स्केल करें।',
                'no-result' => 'यहां कोई एक्सटेंशन उपलब्ध नहीं है।',
                'title'     => 'एक्सटेंशन',

                'filters' => [
                    'all-extensions' => 'सभी एक्सटेंशन',
                    'bulk_upload'    => 'बल्क अपलोड',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'मार्केटप्लेस',
                    'payment'        => 'भुगतान',
                    'pos'            => 'पीओएस',
                    'shipping'       => 'शिपिंग',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'विक्रेता का लोगो',
                'switch-to-store' => 'स्टोर प्रबंधन के लिए स्विच करें',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => ':shop_title के लिए न्यूनतम आदेश राशि है',
                'product-not-available' => 'उत्पाद उपलब्ध नहीं है',
                'sold-by'               => 'द्वारा बेचा गया',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'दिन* भुगतान',
                'deals-in'            => 'सौदों में',
                'featured-seller'     => 'हमारे विशेष विक्रेता',
                'online-business'     => 'ऑनलाइन व्यापार',
                'reviews'             => ':count समीक्षा:',
                'seller-community'    => 'विक्रेता समुदाय',
                'serviceable-pincode' => 'सेवायोज्य पिनकोड',
                'start-selling'       => 'बड़े ग्राहकों के साथ, दुनियाभर में, पूरे दिन का समय में बेचना शुरू करें।',
                'step'                => 'कदम :count',
                'visit-shop'          => 'दुकान पर जाएँ',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'कार्ट में डालें',
            'delivery-info' => 'डिलीवरी जानकारी यहां आती है',
            'hide'          => 'छुपाएं',
            'more-info'     => 'और जानकारी',
            'seller-count'  => ':count और विक्रेता इसी उत्पाद को बेच रहे हैं',
            'seller-info'   => 'विक्रेता जानकारी',
            'sold-by'       => 'द्वारा बिक्री किया गया',
            'top-selling'   => 'शीर्ष बिक्री',

            'flag' => [
                'alert'              => 'चेतावनी',
                'already-reported'   => 'आपने पहले ही इस उत्पाद की रिपोर्ट कर दी है',
                'create-success'     => 'उत्पाद सफलतापूर्वक रिपोर्ट किया गया',
                'guest-alert'        => 'इस उत्पाद की रिपोर्ट करने के लिए आपको लॉगिन करना होगा',
                'not-allowed'        => 'बिना ऑर्डर किए आप इस उत्पाद की रिपोर्ट नहीं कर सकते',
                'other-reason'       => 'अन्य कारण',
                'reason'             => 'कारण',
                'reason-placeholder' => 'कृपया कारण निर्दिष्ट करें',
                'report-product'     => 'उत्पाद रिपोर्ट करें',
                'select-reason'      => 'कारण चुनें',
                'submit-btn'         => 'जमा करें',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'विक्रेता अभी तक अनुमोदित नहीं है',
                'products-count'  => 'उत्पाद (:count)',
                'reviews-count'   => 'समीक्षाएँ (:count)',
                'search-text'     => 'उत्पादों की खोज करें',

                'about' => [
                    'title'           => 'के बारे में',
                    'about-us'        => 'हमारे बारे में',
                    'shipping-policy' => 'शिपिंग नीति',
                    'privacy-policy'  => 'गोपनीयता नीति',
                    'return-policy'   => 'वापसी नीति',
                ],

                'contact-form' => [
                    'title'          => 'संपर्क करें',
                    'name'           => 'नाम',
                    'email'          => 'ईमेल',
                    'subject'        => 'विषय',
                    'query'          => 'प्रश्न',
                    'submit-btn'     => 'जमा करें',
                    'create-success' => 'आपका प्रश्न सफलतापूर्वक सबमिट हो गया है',
                ],

                'share' => [
                    'title'     => 'साझा करें',
                    'share-on'  => 'पर साझा करें',
                    'facebook'  => 'फेसबुक',
                    'linkedin'  => 'लिंक्डइन',
                    'twitter'   => 'ट्विटर',
                    'pinterest' => 'पिनटेरेस्ट',
                ],

                'report-form' => [
                    'alert'              => 'चेतावनी',
                    'already-reported'   => 'आप पहले ही इस विक्रेता की रिपोर्ट कर चुके हैं',
                    'create-success'     => 'विक्रेता की रिपोर्ट सफलतापूर्वक सबमिट हो गई है',
                    'guest-alert'        => 'रिपोर्ट सबमिट करने के लिए आपको लॉगिन करना होगा',
                    'not-allowed'        => 'बिना ऑर्डर के आप विक्रेता की रिपोर्ट नहीं कर सकते',
                    'other-reason'       => 'अन्य कारण',
                    'reason'             => 'कारण',
                    'reason-placeholder' => 'कृपया कारण बताएं',
                    'select-reason'      => 'कारण चुनें',
                    'submit-btn'         => 'जमा करें',
                    'title'              => 'समस्या की रिपोर्ट करें',
                ],

                'reviews' => [
                    'alert'            => 'चेतावनी',
                    'already-reviewed' => 'आपने पहले ही इस विक्रेता की समीक्षा की है',
                    'comment'          => 'टिप्पणी',
                    'create-success'   => 'विक्रेता सफलतापूर्वक समीक्षा किया गया',
                    'customer-review'  => ':count ग्राहक समीक्षा',
                    'customer-reviews' => 'ग्राहक समीक्षाएं',
                    'guest-alert'      => 'विक्रेता की रिपोर्ट करने के लिए आपको लॉगिन करना होगा',
                    'rating'           => 'रेटिंग',
                    'review-by'        => 'समीक्षा द्वारा',
                    'submit-btn'       => 'सबमिट करें',
                    'title'            => 'शीर्षक',
                    'view-all'         => 'सभी समीक्षाएं देखें',
                    'write-review'     => 'समीक्षा लिखें',
                ],

                'products' => [
                    'no-result' => 'यहां कोई उत्पाद उपलब्ध नहीं है',
                    'show'      => 'दिखाएँ',

                    'sort-by' => [
                        'title' => 'क्रमबद्ध करें',

                        'options' => [
                            'cheapest-first'  => 'सबसे सस्ता पहले',
                            'expensive-first' => 'सबसे महंगा पहले',
                            'from-a-z'        => 'ए से जेड तक',
                            'from-z-a'        => 'जेड से ए तक',
                            'latest-first'    => 'सबसे नया पहले',
                            'oldest-first'    => 'सबसे पुराना पहले',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'सभी साफ़ करें',
                        'filter'      => 'फिल्टर करें',
                        'filters'     => 'फ़िल्टर:',
                        'price-range' => 'मूल्य सीमा',
                        'sort'        => 'क्रमबद्ध करें',
                    ],
                ],
            ],
        ],
    ],
];
