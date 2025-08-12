<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'মার্কেটপ্লেস',
                    'info'  => 'মার্কেটপ্লেস পরিচালনা করুন',

                    'module-info' => [
                        'title'       => 'মডিউল তথ্য',
                        'info'        => 'অ্যাপ্লিকেশনের সংস্করণ সম্পর্কিত তথ্য প্রদান করে।',
                        'app-version' => 'অ্যাপ্লিকেশন সংস্করণ: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'অ্যাডমিন কমিশন শতাংশ',
                        'description'                  => 'মার্কেটপ্লেসের সাধারণ সেটিংস যেমন স্ট্যাটাস, কমিশন ইত্যাদি পরিচালনা করুন।',
                        'lines-in-street-address'      => 'স্ট্রিট ঠিকানার লাইন সংখ্যা',
                        'lines-in-street-address-info' => 'স্ট্রিট ঠিকানায় লাইন সংখ্যা নির্ধারণ করুন। ডিফল্ট একটি লাইন।',
                        'status'                       => 'স্ট্যাটাস',
                        'title'                        => 'সাধারণ',
                    ],

                    'product' => [
                        'approval-required'         => 'অনুমোদন প্রয়োজন',
                        'description'               => 'মার্কেটপ্লেসের পণ্যের সেটিংস যেমন অনুমোদন, ফ্ল্যাগ ইত্যাদি পরিচালনা করুন।',
                        'enable-flag'               => 'ফ্ল্যাগ সক্রিয় করুন',
                        'seller-can-assign-product' => 'বিক্রেতা পণ্য নিয়োগ করতে পারে',
                        'seller-can-create-product' => 'বিক্রেতা পণ্য তৈরি করতে পারে',
                        'show-progress-bar'         => 'প্রগতি বার দেখান',
                        'title'                     => 'পণ্য',
                    ],

                    'seller' => [
                        'approval-required'           => 'অনুমোদন প্রয়োজন',
                        'can-cancel-order'            => 'অর্ডার বাতিল করতে পারেন',
                        'can-create-invoice'          => 'চালান তৈরি করতে পারেন',
                        'can-create-shipment'         => 'শিপমেন্ট তৈরি করতে পারেন',
                        'description'                 => 'মার্কেটপ্লেসের বিক্রেতার সেটিংস পরিচালনা করুন যেমন অনুমোদন, ফ্ল্যাগ ইত্যাদি।',
                        'enable-flag'                 => 'ফ্ল্যাগ সক্রিয় করুন',
                        'enable-minimum-order-amount' => 'ন্যূনতম অর্ডারের পরিমাণ সক্রিয় করুন',
                        'enable-seller-flag'          => 'বিক্রেতার ফ্ল্যাগ সক্রিয় করুন',
                        'red-flag-limit'              => 'লাল ফ্ল্যাগ সীমা',
                        'red-flag-limit-info'         => 'যদি বিক্রেতা এই সীমার চেয়ে বেশি পায়, তাহলে বিক্রেতার প্রোফাইলে লাল ফ্ল্যাগ দেখানো হবে।',
                        'show-red-flag'               => 'যদি সীমা অতিক্রম করে তবে প্রোফাইলে লাল ফ্ল্যাগ দেখান',
                        'title'                       => 'বিক্রেতা',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'সীমা গণনা',
                        'description' => 'মার্কেটপ্লেসের বৈশিষ্ট্যযুক্ত বিক্রেতাদের পরিচালনা করুন।',
                        'status'      => 'স্থিতি',
                        'title'       => 'বৈশিষ্ট্যযুক্ত বিক্রেতা',

                        'popularity-criteria' => [
                            'all'              => 'সব',
                            'maximum-orders'   => 'সর্বাধিক অর্ডার',
                            'maximum-products' => 'সর্বাধিক পণ্য',
                            'maximum-rating'   => 'সর্বোচ্চ রেটিং',
                            'maximum-sale'     => 'সর্বাধিক বিক্রয়',
                            'title'            => 'জনপ্রিয়তার মানদণ্ড',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'ব্যানার বোতাম শিরোনাম',
                        'banner-description'  => 'ব্যানার বিবরণ',
                        'banner-image'        => 'ব্যানার চিত্র',
                        'banner-title'        => 'ব্যানার শিরোনাম',
                        'business-hour'       => 'ব্যবসায়ের ঘড়ি',
                        'community-count'     => 'সম্প্রদায়ের সংখ্যা',
                        'description'         => 'মার্কেটপ্লেসের ল্যান্ডিং পেজটি কাস্টমাইজ করুন, আইকন, ব্যানার এবং বর্ণনা যোগ করে একটি তাজা দৃষ্টিকোণে।',
                        'feature-box1-desc'   => 'বৈশিষ্ট্য বক্স 1 বিবরণ',
                        'feature-box1-icon'   => 'বৈশিষ্ট্য বক্স 1 আইকন',
                        'feature-box1-title'  => 'বৈশিষ্ট্য বক্স 1 শিরোনাম',
                        'feature-box2-desc'   => 'বৈশিষ্ট্য বক্স 2 বিবরণ',
                        'feature-box2-icon'   => 'বৈশিষ্ট্য বক্স 2 আইকন',
                        'feature-box2-title'  => 'বৈশিষ্ট্য বক্স 2 শিরোনাম',
                        'feature-box3-desc'   => 'বৈশিষ্ট্য বক্স 3 বিবরণ',
                        'feature-box3-icon'   => 'বৈশিষ্ট্য বক্স 3 আইকন',
                        'feature-box3-title'  => 'বৈশিষ্ট্য বক্স 3 শিরোনাম',
                        'feature-box4-desc'   => 'বৈশিষ্ট্য বক্স 4 বিবরণ',
                        'feature-box4-icon'   => 'বৈশিষ্ট্য বক্স 4 আইকন',
                        'feature-box4-title'  => 'বৈশিষ্ট্য বক্স 4 শিরোনাম',
                        'feature-description' => 'বৈশিষ্ট্য বিবরণ',
                        'feature-image'       => 'বৈশিষ্ট্য চিত্র',
                        'feature-title'       => 'বৈশিষ্ট্য শিরোনাম',
                        'journey-description' => 'ভ্রমণ বিবরণ',
                        'journey-image'       => 'ভ্রমণ চিত্র',
                        'journey-step1-desc'  => 'ভ্রমণ পদক্ষেপ 1 বিবরণ',
                        'journey-step1-icon'  => 'ভ্রমণ পদক্ষেপ 1 আইকন',
                        'journey-step1-title' => 'ভ্রমণ পদক্ষেপ 1 শিরোনাম',
                        'journey-step2-desc'  => 'ভ্রমণ পদক্ষেপ 2 বিবরণ',
                        'journey-step2-icon'  => 'ভ্রমণ পদক্ষেপ 2 আইকন',
                        'journey-step2-title' => 'ভ্রমণ পদক্ষেপ 2 শিরোনাম',
                        'journey-step3-desc'  => 'ভ্রমণ পদক্ষেপ 3 বিবরণ',
                        'journey-step3-icon'  => 'ভ্রমণ পদক্ষেপ 3 আইকন',
                        'journey-step3-title' => 'ভ্রমণ পদক্ষেপ 3 শিরোনাম',
                        'journey-step4-desc'  => 'ভ্রমণ পদক্ষেপ 4 বিবরণ',
                        'journey-step4-icon'  => 'ভ্রমণ পদক্ষেপ 4 আইকন',
                        'journey-step4-title' => 'ভ্রমণ পদক্ষেপ 4 শিরোনাম',
                        'journey-step5-desc'  => 'ভ্রমণ পদক্ষেপ 5 বিবরণ',
                        'journey-step5-icon'  => 'ভ্রমণ পদক্ষেপ 5 আইকন',
                        'journey-step5-title' => 'ভ্রমণ পদক্ষেপ 5 শিরোনাম',
                        'journey-title'       => 'ভ্রমণ শিরোনাম',
                        'payment-duration'    => 'পেমেন্ট সময়কাল',
                        'serviceable-pincode' => 'সেবা প্রাপ্ত পিনকোড',
                        'title'               => 'ল্যান্ডিং পেজ',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'পণ্য বরাদ্দ',
            'communications'    => 'যোগাযোগ',
            'create'            => 'তৈরি করুন',
            'delete'            => 'মুছে ফেলুন',
            'edit'              => 'সম্পাদনা',
            'flag-reasons'      => 'অভিযোগের কারণ',
            'inventory-sources' => 'ইনভেন্টরি উত্স',
            'orders'            => 'অর্ডার',
            'pay'               => 'পেমেন্ট',
            'payment-request'   => 'পেমেন্ট অনুরোধ',
            'product-reviews'   => 'পণ্য পর্যালোচনা',
            'products'          => 'পণ্যসমূহ',
            'reviews'           => 'বিক্রেতা পর্যালোচনা',
            'seller-categories' => 'বিক্রেতার বিভাগ',
            'sellers'           => 'বিক্রেতাগণ',
            'title'             => 'মার্কেটপ্লেস',
            'transactions'      => 'লেনদেন',
            'view'              => 'দেখুন',
        ],

        'menu' => [
            'communications'    => 'যোগাযোগ',
            'flag-reasons'      => 'পতাকা কারণ',
            'inventory-sources' => 'ইনভেন্টরি উত্স',
            'orders'            => 'অর্ডারসমূহ',
            'payment-requests'  => 'পেমেন্ট অনুরোধসমূহ',
            'product-reviews'   => 'পণ্য পর্যালোচনা',
            'products'          => 'পণ্যসমূহ',
            'seller-categories' => 'বিক্রেতা বিভাগসমূহ',
            'seller-reviews'    => 'বিক্রেতা পর্যালোচনা',
            'sellers'           => 'বিক্রেতাদের',
            'title'             => 'মার্কেটপ্লেস',
            'transactions'      => 'লেনদেনসমূহ',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'বিক্রেতা যোগ করুন',
                'delete-failed'      => 'বিক্রেতা মুছে ফেলা ব্যর্থ হয়েছে!',
                'delete-success'     => 'বিক্রেতা সফলভাবে মুছে ফেলা হয়েছে।',
                'incomplete-profile' => 'বিক্রেতার প্রোফাইল অসম্পূর্ণ!',
                'login-message'      => ':seller_name হিসেবে আপনি লগইন করেছেন',
                'pending-orders'     => 'বিক্রেতার কিছু বিচারধীন অর্ডার রয়েছে',
                'title'              => 'বিক্রেতাদের',
                'update-success'     => 'বিক্রেতা সফলভাবে আপডেট হয়েছে!',

                'datagrid' => [
                    'add-product'     => 'অর্পণ করুন',
                    'approved'        => 'অনুমোদিত',
                    'assign-product'  => 'পণ্য অর্পণ করুন',
                    'created-at'      => 'তৈরি হয়েছে',
                    'delete'          => 'মুছে ফেলুন',
                    'disapproved'     => 'অননুমোদিত',
                    'edit'            => 'সম্পাদনা করুন',
                    'email'           => 'ইমেইল',
                    'flags'           => 'পতাকা',
                    'id'              => 'আইডি',
                    'login-as-seller' => 'বিক্রেতা হিসেবে লগইন করুন',
                    'seller-id'       => 'আইডি - :seller_id',
                    'seller-name'     => 'বিক্রেতার নাম',
                    'shop-url'        => 'দোকানের ইউআরএল',
                    'status'          => 'অবস্থা',
                    'suspended'       => 'স্থগিত',
                    'total-flags'     => 'মোট পতাকা: :count',
                    'update-status'   => 'স্থিতি আপডেট করুন',
                ],

                'create'  => [
                    'address'        => 'ঠিকানা',
                    'street-address' => 'রাস্তার ঠিকানা',
                    'city'           => 'শহর',
                    'country'        => 'দেশ',
                    'email'          => 'ইমেল',
                    'name'           => 'নাম',
                    'phone'          => 'ফোন নম্বর',
                    'postcode'       => 'পোস্টকোড',
                    'save-btn'       => 'সংরক্ষণ',
                    'select'         => 'নির্বাচন',
                    'shop-title'     => 'দোকানের শিরোনাম',
                    'shop-url'       => 'দোকান URL',
                    'state'          => 'রাজ্য',
                    'success'        => 'বিক্রেতা সফলভাবে তৈরি হয়েছে।',
                    'title'          => 'বিক্রেতা তৈরি করুন',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'বিক্রেতার পতাকা',

                    'datagrid' => [
                        'id'             => 'আইডি',
                        'customer-name'  => 'গ্রাহকের নাম',
                        'customer-email' => 'গ্রাহকের ইমেল',
                        'date'           => 'তারিখ',
                        'reason'         => 'কারণ',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'পিছনে',
                'image-placeholder' => 'পণ্যের ছবি',
                'no-result'         => 'কোনো ফলাফল পাওয়া যায়নি!',
                'sku'               => 'SKU - :sku',
                'title'             => 'পণ্য অনুসন্ধান করুন',
            ],

            'assign-product' => [
                'already-selling'     => 'বিক্রেতা ইতিমধ্যেই এই পণ্য বিক্রি করছেন',
                'assign-successfully' => 'পণ্য সফলভাবে বিক্রেতার কাছে অর্পিত হয়েছে।',
                'back-btn'            => 'পেছনে',
                'condition'           => 'অবস্থা',
                'description'         => 'বর্ণনা',
                'new'                 => 'নতুন',
                'old'                 => 'পুরানো',
                'price'               => 'মূল্য',
                'product-not-allowed' => 'বিক্রেতা :type পণ্য বিক্রি করার অনুমতি নেই।',
                'quantities'          => 'পরিমাণ',
                'save-btn'            => 'সংরক্ষণ',
                'select-condition'    => 'অবস্থা নির্বাচন করুন',
                'title'               => 'পণ্য বরাদ্দ',

                'seller-details' => [
                    'additional-info' => 'অতিরিক্ত তথ্য',
                    'approved'        => 'অনুমোদিত',
                    'disapproved'     => 'অননুমোদিত',
                    'no-of-products'  => 'পণ্যের সংখ্যা',
                    'status'          => 'অবস্থা',
                    'suspended'       => 'স্থগিত',
                    'title'           => 'বিক্রেতার বিবরণ',
                ],

                'product-details' => [
                    'active'            => 'সক্রিয়',
                    'disable'           => 'নিষ্ক্রিয়',
                    'title'             => 'পণ্যের বিবরণ',
                    'image-placeholder' => 'পণ্যের ছবি',
                ],

                'images' => [
                    'info'  => 'চিত্রের নির্দিষ্ট ক্ষমতা হতে হবে 609px X 560px এর মত।',
                    'title' => 'চিত্রসমূহ',
                ],

                'videos' => [
                    'error' => 'ভিডিওটি :max কিলোবাইটের বৃহত্তর হতে পারে না। দয়া করে একটি ছোট ফাইল চয়ন করুন।',
                    'info'  => 'সর্বাধিক ভিডিও আকার হতে হবে :size এর মত।',
                    'title' => 'ভিডিওসমূহ',
                ],

                'configurable' => [
                    'delete-btn'        => 'মুছুন',
                    'edit-btn'          => 'সম্পাদনা করুন',
                    'image-placeholder' => 'পণ্যের ছবি',
                    'qty'               => 'পরিমাণ - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'পরিবর্তনশীল',

                    'edit' => [
                        'images'     => 'ছবিসমূহ',
                        'price'      => 'মূল্য',
                        'quantities' => 'পরিমাণ',
                        'save-btn'   => 'সংরক্ষণ করুন',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'লিঙ্ক যোগ করুন',
                        'delete-btn'  => 'মুছুন',
                        'edit-btn'    => 'সম্পাদনা করুন',
                        'empty-info'  => 'একটি নতুন লিঙ্ক তৈরি করতে।',
                        'empty-title' => 'লিঙ্ক যোগ করুন',
                        'file'        => 'ফাইল : ',
                        'info'        => 'ডাউনলোডযোগ্য পণ্যের ধরন অনুমোদপ্রাপ্ত করে ডিজিটাল পণ্য বিক্রি করতে, যেমন ই-বুক, সফটওয়্যার অ্যাপ্লিকেশন, সঙ্গীত, খেলা, ইত্যাদি।',
                        'sample-file' => 'নমুনা ফাইল : ',
                        'sample-url'  => 'নমুনা URL : ',
                        'title'       => 'ডাউনলোডযোগ্য লিঙ্কসমূহ',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'ডাউনলোড অনুমোদিত',
                            'file'        => 'ফাইল',
                            'file-type'   => 'ফাইল ধরন',
                            'name'        => 'শিরোনাম',
                            'price'       => 'মূল্য',
                            'sample'      => 'নমুনা',
                            'sample-type' => 'নমুনা ধরন',
                            'save-btn'    => 'সংরক্ষণ করুন',
                            'title'       => 'লিঙ্ক',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'নমুনা যোগ করুন',
                        'delete-btn'  => 'মুছুন',
                        'edit-btn'    => 'সম্পাদনা করুন',
                        'empty-info'  => 'একটি নতুন নমুনা তৈরি করতে।',
                        'empty-title' => 'নমুনা যোগ করুন',
                        'file'        => 'ফাইল : ',
                        'info'        => 'ডাউনলোডযোগ্য পণ্যের ধরন অনুমোদপ্রাপ্ত করে ডিজিটাল পণ্য বিক্রি করতে, যেমন ই-বুক, সফটওয়্যার অ্যাপ্লিকেশন, সঙ্গীত, খেলা, ইত্যাদি।',
                        'title'       => 'ডাউনলোডযোগ্য নমুনাসমূহ',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'ফাইল',
                            'file-type' => 'ফাইল ধরন',
                            'name'      => 'শিরোনাম',
                            'save-btn'  => 'সংরক্ষণ করুন',
                            'title'     => 'লিঙ্ক',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'পিছনে',
                'suspended'      => 'স্থগিত',
                'title'          => 'বিক্রেতা সম্পাদনা করুন',
                'update-btn'     => 'বিক্রেতা আপডেট করুন',
                'update-success' => 'বিক্রেতা সফলভাবে আপডেট হয়েছে।',

                'shop' => [
                    'address'          => 'ঠিকানা',
                    'street-address'   => 'রাস্তার ঠিকানা',
                    'city'             => 'শহর',
                    'country'          => 'দেশ',
                    'description'      => 'বিবরণ',
                    'email'            => 'ইমেইল',
                    'name'             => 'নাম',
                    'phone-number'     => 'ফোন নম্বর',
                    'postcode'         => 'পোস্টকোড',
                    'select'           => 'সিলেক্ট',
                    'shop-title'       => 'দোকানের শিরোনাম',
                    'state'            => 'রাজ্য',
                    'title'            => 'দোকানের বিবরণ',
                    'url'              => 'দোকানের ইউআরএল',
                ],

                'profile' => [
                    'banner'       => 'প্রোফাইল ব্যানার',
                    'banner-size'  => 'ব্যানার সাইজ হতে হবে 300px X 200px মত',
                    'logo'         => 'প্রোফাইল লোগো',
                    'logo-size'    => 'লোগো সাইজ হতে হবে 125px X 125px মত',
                    'social-links' => ':name লিঙ্ক',
                    'title'        => 'প্রোফাইল বিবরণ',
                ],

                'allowed-product' => [
                    'title'  => 'অনুমোদিত পণ্য',
                ],

                'minimum-order-amount' => [
                    'title'  => 'সর্বনিম্ন অর্ডার পরিমাণ',
                ],

                'google-analytics-id' => [
                    'title'  => 'গুগল অ্যানালিটিক্স আইডি',
                ],

                'commission' => [
                    'percentage' => 'শতাংশ',
                    'status'     => 'স্থিতি',
                    'title'      => 'বিক্রেতা কমিশন',
                ],

                'meta-info' => [
                    'meta-description' => 'মেটা বিবরণ',
                    'meta-keyword'     => 'মেটা কীওয়ার্ড',
                    'meta-title'       => 'মেটা শিরোনাম',
                    'title'            => 'মেটা তথ্য',
                ],

                'policy' => [
                    'privacy'  => 'গোপনীয়তা নীতি',
                    'return'   => 'ফেরত নীতি',
                    'shipping' => 'শিপিং নীতি',
                    'title'    => 'নীতি',
                ],

                'channels' => [
                    'title' => 'চ্যানেল',
                ],

                'users' => [
                    'email' => 'ইমেইল',
                    'id'    => 'আইডি',
                    'name'  => 'নাম',
                    'phone' => 'ফোন',
                    'title' => 'ব্যবহারকারীরা',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'পণ্য যোগ করুন',
                'delete-success' => 'পণ্য সফলভাবে মুছে ফেলা হয়েছে।',
                'title'          => 'পণ্যসমূহ',
                'update-success' => 'পণ্য সফলভাবে আপডেট হয়েছে।',

                'datagrid' => [
                    'approved'       => 'অনুমোদিত',
                    'delete'         => 'মুছুন',
                    'disapproved'    => 'অসমর্থিত',
                    'flags'          => 'পতাকা',
                    'id'             => 'আইডি',
                    'is-owner'       => 'মালিক',
                    'no'             => 'না',
                    'out-of-stock'   => 'স্টক শেষ',
                    'price'          => 'মূল্য',
                    'product-id'     => 'পণ্য আইডি - :product_id',
                    'product-name'   => 'পণ্যের নাম',
                    'product-number' => 'পণ্য নম্বর',
                    'product-type'   => 'পণ্য প্রকার',
                    'quantity'       => 'পরিমাণ',
                    'seller-name'    => 'বিক্রেতা নাম',
                    'sku'            => 'SKU',
                    'status'         => 'স্থিতি',
                    'total-flags'    => 'মোট পতাকা: :count',
                    'total-quantity' => ':quantity উপলব্ধ',
                    'update-status'  => 'স্থিতি আপডেট করুন',
                    'yes'            => 'হ্যাঁ',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'পণ্যের পতাকা',

                    'datagrid' => [
                        'customer-email' => 'গ্রাহকের ইমেইল',
                        'customer-name'  => 'গ্রাহকের নাম',
                        'date'           => 'তারিখ',
                        'id'             => 'আইডি',
                        'reason'         => 'কারণ',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'পর্যালোচনা বিবরণ',
                'title'          => 'পণ্য পর্যালোচনা',

                'datagrid' => [
                    'approved'      => 'অনুমোদিত',
                    'comment'       => 'মন্তব্য',
                    'customer-name' => 'গ্রাহকের নাম',
                    'date'          => 'তারিখ',
                    'disapproved'   => 'অননুমোদিত',
                    'id'            => 'আইডি',
                    'images'        => 'চিত্র',
                    'pending'       => 'মুলতুবি',
                    'product'       => 'পণ্য',
                    'product-name'  => 'পণ্যের নাম',
                    'rating'        => 'রেটিং',
                    'review-id'     => 'আইডি - :review_id',
                    'shop-title'    => 'দোকানের শিরোনাম',
                    'status'        => 'স্থিতি',
                    'title'         => 'শিরোনাম',
                    'update-status' => 'আপডেট অবস্থা',
                    'view'          => 'দেখুন',
                ],
            ],

            'update-success' => 'পণ্য পর্যালোচনা সফলভাবে আপডেট হয়েছে',
            'delete-success' => 'পণ্য পর্যালোচনা সফলভাবে মুছে ফেলা হয়েছে।',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'বিক্রেতার পর্যালোচনা',

                'datagrid' => [
                    'approved'            => 'অনুমোদিত',
                    'comment'             => 'মন্তব্য',
                    'customer-name'       => 'গ্রাহকের নাম',
                    'date'                => 'তারিখ',
                    'delete'              => 'মুছে ফেলুন',
                    'disapproved'         => 'অননুমোদিত',
                    'id'                  => 'আইডি',
                    'mass-delete-success' => 'বিক্রেতার পর্যালোচনা সফলভাবে মুছে ফেলা হয়েছে।',
                    'mass-update-success' => 'বিক্রেতার পর্যালোচনা সফলভাবে আপডেট হয়েছে।',
                    'pending'             => 'অপেক্ষমাণ',
                    'rating'              => 'রেটিং',
                    'review-id'           => 'আইডি - :review_id',
                    'review-title'        => 'পর্যালোচনার শিরোনাম',
                    'seller-name'         => 'বিক্রেতার নাম',
                    'shop-title'          => 'দোকানের শিরোনাম',
                    'status'              => 'স্থিতি',
                    'update-status'       => 'স্থিতি আপডেট করুন',
                ],
            ],

            'delete-success' => 'বিক্রেতার পর্যালোচনা সফলভাবে মুছে ফেলা হয়েছে।',
        ],

        'orders' => [
            'index' => [
                'title' => 'অর্ডারসমূহ',

                'datagrid' => [
                    'canceled'        => 'বাতিল',
                    'closed'          => 'বন্ধ',
                    'commission'      => 'কমিশন',
                    'completed'       => 'সম্পন্ন',
                    'customer'        => 'গ্রাহক',
                    'date'            => 'তারিখ',
                    'discount'        => 'ডিসকাউন্ট',
                    'email'           => 'ইমেইল',
                    'fraud'           => 'প্রতারণা',
                    'gross-amt'       => 'মোট পরিমাণ',
                    'id'              => 'আইডি',
                    'items'           => 'আইটেমস',
                    'location'        => 'অবস্থান',
                    'order-id'        => 'আইডি - #:id',
                    'payment'         => 'পেমেন্ট',
                    'pending'         => 'মুলতুভাগ',
                    'pending-payment' => 'মুলতুভাগ পেমেন্ট',
                    'processing'      => 'প্রক্রিয়াধীন',
                    'seller'          => 'বিক্রেতা',
                    'seller-earn'     => 'আয়',
                    'shipment'        => 'শিপমেন্ট',
                    'shop'            => 'দোকান',
                    'status'          => 'অবস্থা',
                    'view'            => 'দেখুন',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'লেনদেনসমূহ',

                'datagrid' => [
                    'base-total'     => 'বেস মোট',
                    'comment'        => 'মন্তব্য',
                    'customer-name'  => 'গ্রাহকের নাম',
                    'id'             => 'আইডি',
                    'seller-id'      => 'বিক্রেতা আইডি',
                    'seller-name'    => 'বিক্রেতা নাম',
                    'transaction-id' => 'লেনদেন আইডি',
                    'view'           => 'দেখুন',
                ],
            ],

            'view' => [
                'commission'        => 'কমিশন',
                'created-on'        => ':date এ তৈরি হয়েছে,',
                'name'              => 'নাম',
                'payment-method'    => ':method পরিশোধ',
                'price'             => 'মূল্য',
                'qty'               => 'পরিমাণ',
                'seller-total'      => 'বিক্রেতা মোট',
                'shipping-handling' => 'শিপিং এবং হ্যান্ডলিং',
                'subtotal'          => 'সাবটোটাল',
                'tax'               => 'কর',
                'title'             => 'লেনদেন #:transaction_id',
                'total'             => 'মোট',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'কারণ তৈরি করুন',
                'delete-success'      => 'পতাকা কারণ সফলভাবে মুছে ফেলা হয়েছে।',
                'mass-delete-success' => 'পতাকা কারণগুলি সফলভাবে মুছে ফেলা হয়েছে।',
                'mass-update-success' => 'পতাকা কারণগুলি সফলভাবে আপডেট হয়েছে।',
                'title'               => 'পতাকা কারণগুলি',

                'datagrid' => [
                    'delete'        => 'মুছুন',
                    'edit'          => 'সম্পাদনা করুন',
                    'id'            => 'আইডি',
                    'name'          => 'নাম',
                    'update-status' => 'স্থিতি আপডেট করুন',

                    'status' => [
                        'active'  => 'সক্রিয়',
                        'disable' => 'নিষ্ক্রিয়',
                        'title'   => 'স্থিতি',
                    ],

                    'type' => [
                        'product' => 'পণ্য',
                        'seller'  => 'বিক্রেতা',
                        'title'   => 'ধরণ',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'অ্যাডমিন',
                'back-btn' => 'পিছনে',
                'general'  => 'সাধারণ',
                'label'    => 'লেবেল',
                'product'  => 'পণ্য',
                'save-btn' => 'কারণ সংরক্ষণ করুন',
                'seller'   => 'বিক্রেতা',
                'status'   => 'স্থিতি',
                'title'    => 'কারণ তৈরি করুন',
                'type'     => 'ধরণ',
            ],

            'edit' => [
                'admin'    => 'অ্যাডমিন',
                'back-btn' => 'পিছনে',
                'general'  => 'সাধারণ',
                'label'    => 'লেবেল',
                'product'  => 'পণ্য',
                'save-btn' => 'কারণ সংরক্ষণ করুন',
                'seller'   => 'বিক্রেতা',
                'status'   => 'স্থিতি',
                'title'    => 'কারণ সম্পাদনা করুন',
                'type'     => 'ধরণ',
            ],

            'create-success' => 'পতাকা কারণ সফলভাবে তৈরি হয়েছে।',
            'update-success' => 'পতাকা কারণ সফলভাবে আপডেট হয়েছে।',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'বিভাগ নির্ধারণ করুন',
                'create-success' => 'বিভাগ সফলভাবে নির্ধারণ করা হয়েছে।',
                'delete-failed'  => 'বিক্রেতা পতাকা কারণ মুছে ফেলা যায়নি!',
                'delete-success' => 'বিভাগটি সফলভাবে মুছে ফেলা হয়েছে।',
                'title'          => 'বিক্রেতা ক্যাটেগরিস',
                'update-success' => 'বিভাগটি সফলভাবে আপডেট হয়েছে।',

                'datagrid' => [
                    'delete' => 'মুছুন',
                    'edit'   => 'সম্পাদনা',
                    'id'     => 'আইডি',
                    'name'   => 'নাম',
                ],
            ],

            'create' => [
                'back-btn'      => 'পিছনে যান',
                'save-btn'      => 'বিভাগ সংরক্ষণ করুন',
                'select-seller' => 'বিক্রেতা নির্বাচন করুন',
                'seller'        => 'বিক্রেতা',
                'title'         => 'বিভাগ নির্ধারণ করুন',
            ],

            'edit' => [
                'back-btn'   => 'পিছনে যান',
                'seller'     => 'বিক্রেতা',
                'title'      => 'বিভাগ সম্পাদনা করুন',
                'update-btn' => 'বিভাগ আপডেট করুন',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'মন্তব্য',
                'no-amount-remaining'  => 'পরিশোধের জন্য কোনো পরিমাণ অবশিষ্ট নেই!',
                'order-not-found'      => 'অর্ডার পাওয়া যায়নি!',
                'pay-btn'              => 'এখন পরিশোধ করুন',
                'pay-to-seller'        => 'বিক্রেতার কাছে পেমেন্ট',
                'payment-success'      => 'বিক্রেতার পেমেন্ট সফলভাবে হয়েছে!',
                'something-went-wrong' => 'কিছু ভুল হয়েছে!',
                'title'                => 'পেমেন্ট অনুরোধ',

                'datagrid' => [
                    'already-paid'          => 'ইতিমধ্যে পরিশোধ করা হয়েছে',
                    'canceled'              => 'বাতিল করা হয়েছে',
                    'closed'                => 'বন্ধ হয়েছে',
                    'completed'             => 'সম্পন্ন',
                    'customer-name'         => 'গ্রাহকের নাম',
                    'date'                  => 'তারিখ',
                    'email'                 => 'ইমেইল',
                    'fraud'                 => 'প্রতারণা',
                    'gross-amt'             => 'মোট পরিমাণ',
                    'id'                    => 'অর্ডার আইডি',
                    'invoice-pending'       => 'চালান মুলতুবি',
                    'order-canceled'        => 'অর্ডার বাতিল হয়েছে',
                    'order-id'              => 'আইডি #:id',
                    'pay'                   => 'পরিশোধ করুন',
                    'pending'               => 'মুলতুবি',
                    'pending-payment'       => 'মুলতুবি পরিশোধ',
                    'processing'            => 'প্রসেসিং',
                    'refunded'              => 'ফেরত দেয়া হয়েছে',
                    'remaining-total'       => 'মুলতুবি মোট',
                    'request-payment'       => 'পেমেন্ট অনুরোধ',
                    'seller'                => 'বিক্রেতা',
                    'seller-total-invoiced' => 'বিক্রেতা মোট চালান',
                    'shop'                  => 'দোকান',
                    'status'                => 'স্থিতি',
                    'total-paid'            => 'মোট পরিশোধিত',
                    'view'                  => 'দেখুন',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'বিক্রেতাকে ব্লক করুন',
                'block-success'        => 'বিক্রেতা সফলভাবে ব্লক করা হয়েছে!',
                'chat-history-cleared' => 'চ্যাট ইতিহাস সফলভাবে পরিষ্কার করা হয়েছে!',
                'clear-chat-history'   => 'চ্যাট ইতিহাস পরিষ্কার করুন',
                'exit'                 => 'প্রস্থান',
                'message-failed'       => 'বার্তা পাঠাতে ব্যর্থ হয়েছে!',
                'message-sent'         => 'বার্তা সফলভাবে পাঠানো হয়েছে!',
                'no-message'           => 'কোন বার্তা পাওয়া যায়নি!',
                'search'               => 'অনুসন্ধান',
                'search-message'       => 'বার্তা অনুসন্ধান করুন',
                'seller-blocked'       => 'আপনি এই বিক্রেতাকে ব্লক করেছেন। আপনি এই বিক্রেতাকে বার্তা পাঠাতে পারবেন না।',
                'sellers'              => 'বিক্রেতারা',
                'title'                => 'যোগাযোগ',
                'type-message'         => 'আপনার বার্তা এখানে টাইপ করুন...',
                'unblock-seller'       => 'বিক্রেতাকে আনব্লক করুন',
                'unblock-success'      => 'বিক্রেতা সফলভাবে আনব্লক করা হয়েছে!',
                'welcome-message'      => 'মার্কেটপ্লেস যোগাযোগে স্বাগতম!',

                'filters' => [
                    'all-messages'      => 'সব বার্তা',
                    'prev-fifteen-days' => 'গত ১৫ দিন',
                    'prev-seven-days'   => 'গত ৭ দিন',
                    'prev-six-months'   => 'গত ৬ মাস',
                    'prev-thirty-days'  => 'গত ৩০ দিন',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'ইনভেন্টরি উত্স',

                'datagrid' => [
                    'active'      => 'সক্রিয়',
                    'code'        => 'কোড',
                    'id'          => 'আইডি',
                    'inactive'    => 'নিষ্ক্রিয়',
                    'name'        => 'নাম',
                    'seller-name' => 'বিক্রেতার নাম',
                    'shop-title'  => 'দোকানের শিরোনাম',
                    'status'      => 'স্ট্যাটাস',
                ],

                'view' => [
                    'active'         => 'সক্রিয়',
                    'address'        => 'উত্স ঠিকানা',
                    'city'           => 'শহর',
                    'code'           => 'কোড',
                    'contact-email'  => 'ইমেইল',
                    'contact-fax'    => 'ফ্যাক্স',
                    'contact-info'   => 'যোগাযোগের তথ্য',
                    'contact-name'   => 'নাম',
                    'contact-number' => 'যোগাযোগ নম্বর',
                    'country'        => 'দেশ',
                    'description'    => 'বর্ণনা',
                    'general-info'   => 'সাধারণ তথ্য',
                    'inactive'       => 'নিষ্ক্রিয়',
                    'latitude'       => 'অক্ষাংশ',
                    'longitude'      => 'দ্রাঘিমাংশ',
                    'name'           => 'নাম',
                    'postcode'       => 'পোস্টকোড',
                    'priority'       => 'অগ্রাধিকার',
                    'seller-info'    => 'বিক্রেতার তথ্য',
                    'seller-name'    => 'বিক্রেতার নাম',
                    'settings'       => 'সেটিংস',
                    'shop-title'     => 'দোকানের শিরোনাম',
                    'state'          => 'রাজ্য',
                    'street'         => 'রাস্তা',
                    'title'          => 'ইনভেন্টরি উত্স #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'মার্কেটপ্লেস প্যাকেজ ইনস্টল করুন।',
            'migrate'     => 'সব টেবিল ডাটাবেসে স্থানান্তরিত হচ্ছে (কিছুটা সময় লাগবে)...',
            'seed'        => 'ডাটাবেসে তথ্য প্রবেশ করানো হচ্ছে...',
            'publish'     => 'অ্যাসেট এবং কনফিগারেশন প্রকাশ করা হচ্ছে...',
            'cache'       => 'ক্যাশ পরিষ্কার করা হচ্ছে...',
            'finish'      => 'মার্কেটপ্লেস প্যাকেজ সফলভাবে ইনস্টল হয়েছে।',
        ],

        'version' => [
            'description' => 'মার্কেটপ্লেস প্যাকেজের বর্তমান সংস্করণ প্রদর্শন করুন।',
            'comment'     => 'মার্কেটপ্লেস সংস্করণ: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'প্রিয় :customer_name',
        'dear-admin'  => 'প্রিয় অ্যাডমিন',
        'dear-seller' => 'প্রিয় বিক্রেতা',

        'seller' => [
            'registration' => [
                'date'        => 'নিবন্ধনের তারিখ:',
                'description' => 'আমরা আপনাকে এই প্ল্যাটফর্মে একটি নতুন বিক্রেতা নিবন্ধনের সম্মতি জানাতে খুশি। দয়া করে একটু সময় নিন এবং আমাদের প্ল্যাটফর্মে বিক্রেতাকে স্বাগত জানাতে।',
                'details'     => 'এখানে বিস্তারিত:',
                'email'       => 'ইমেল ঠিকানা:',
                'greeting'    => 'আশা করি এই বার্তা আপনাকে ভালো পাচ্ছে।',
                'name'        => 'বিক্রেতার নাম:',
                'shop'        => 'শপ URL:',
                'subject'     => 'নতুন বিক্রেতা নিবন্ধন',
            ],

            'forgot-password' => [
                'description'    => 'আপনি এই ইমেলটি পাচ্ছেন কারণ আমরা আপনার অ্যাকাউন্টের জন্য একটি পাসওয়ার্ড রিসেট অনুরোধ পেয়েছি।',
                'greeting'       => 'পাসওয়ার্ড ভুলে গেছেন!',
                'reset-password' => 'পাসওয়ার্ড রিসেট',
                'subject'        => 'পাসওয়ার্ড রিসেট ইমেল',
            ],

            'welcome' => [
                'description' => 'স্বাগতম! আমরা আপনাকে পরিবারে যোগদান করতে অত্যন্ত উৎসাহী। আপনার ভূমিকা একটি বিক্রেতা হিসেবে আমাদের প্ল্যাটফর্মে অমূল্য মান যোগ করে এনেছে, এবং আমরা একটি সফল ভার্তির্ক সহযোগিতা দেখতে অক্ষুণ্ণভাবে দেখা করছি।',
                'greeting'    => 'আপনাকে স্বাগত এবং আমাদের সাথে নিবন্ধিত হওয়ার জন্য আপনাকে ধন্যবাদ!',
                'subject'     => 'বিক্রেতা স্বাগত বিজ্ঞপ্তি',
            ],

            'approval' => [
                'approved'    => 'আপনার বিক্রেতা হওয়ার অনুরোধটি গৃহীত হয়েছে।',
                'disapproved' => 'আপনার বিক্রেতা হওয়ার অনুরোধটি প্রত্যাখ্যান করা হয়েছে।',
                'greeting'    => 'আপনাকে স্বাগত এবং আমাদের সাথে নিবন্ধিত হওয়ার জন্য আপনাকে ধন্যবাদ!',
                'subject'     => 'বিক্রেতা অনুমোদন বিজ্ঞপ্তি',
            ],

            'update' => [
                'description' => 'আপনার প্রোফাইলটি সফলভাবে আপডেট হয়েছে।',
                'greeting'    => 'আশা করি এই বার্তা আপনাকে ভালো পাচ্ছে।',
                'subject'     => 'বিক্রেতা প্রোফাইল আপডেট বিজ্ঞপ্তি',
            ],

            'good-bye' => [
                'description' => 'আপনার সাথে কাজ করা হোলো একটি আনন্দ, এবং আমি আপনার পেশাদারতা, দেওয়ানগি এবং আপনার পণ্য/সেবার উচ্চ মানের জন্য সত্কার্যপূর্ণ ধন্যবাদ জানাতে সত্ত্বর। আপনার গ্রাহক সন্তুষ্টতা নিশ্চিত করার জন্য আপনার প্রতিবাদ অগমনীয় ছিল, এবং এটি আমাদের সুপরিচিত অভিজ্ঞানে একটি গুরুত্বপূর্ণ উপায় ছিল।',
                'greeting'    => 'আশা করি এই বার্তা আপনাকে ভালো পাচ্ছে।',
                'subject'     => 'বিক্রেতা বিদায় বিজ্ঞপ্তি',
            ],

            'product-approval' => [
                'approved'    => 'আপনার পণ্য :name অনুমোদিত হয়েছে।',
                'disapproved' => 'আপনার পণ্য :name অননুমোদিত হয়েছে।',
                'greeting'    => 'আমাদের সাথে নিবন্ধন করার জন্য আপনাকে স্বাগত এবং ধন্যবাদ!',
                'subject'     => 'বিক্রেতা পণ্য অনুমোদন বিজ্ঞপ্তি',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'আপনার নতুন অর্ডার :order_id এর জন্য :created_at এ প্লেস হয়েছে',
                    'subject'  => 'নতুন অর্ডার নিশ্চিতকরণ',
                    'summary'  => 'অর্ডার সংক্ষেপ',
                    'title'    => 'অর্ডার নিশ্চিতকরণ!',
                ],

                'canceled' => [
                    'greeting' => ':order_id অর্ডারটি বাতিল করা হয়েছে',
                    'subject'  => 'অর্ডার বাতিলের নিশ্চিতকরণ',
                    'summary'  => 'অর্ডারের সারসংক্ষেপ',
                    'title'    => 'অর্ডার বাতিল!',
                ],

                'billing-address'   => 'বিলিং ঠিকানা',
                'contact'           => 'যোগাযোগ',
                'discount'          => 'ডিসকাউন্ট',
                'grand-total'       => 'মোট মূল্য',
                'name'              => 'নাম',
                'payment'           => 'পেমেন্ট',
                'price'             => 'মূল্য',
                'qty'               => 'পরিমাণ',
                'shipping'          => 'শিপিং',
                'shipping-address'  => 'শিপিং ঠিকানা',
                'shipping-handling' => 'শিপিং হ্যান্ডলিং',
                'sku'               => 'এসকেইউ',
                'subtotal'          => 'সাবটোটাল',
                'tax'               => 'কর',
            ],

            'payment-request' => [
                'greeting'  => 'আশা করি এই বার্তা আপনাকে ভালো ভাবে পাচ্ছে।',
                'paid'      => 'হায়.. আপনি অর্ডার :order_id এর জন্য পেমেন্ট পেয়েছেন।',
                'requested' => 'বিক্রেতা :seller_name কে অর্ডার :order_id এর জন্য পেমেন্টের জন্য অনুরোধ করা হয়েছে।',
                'subject'   => 'বিক্রেতা পেমেন্ট অনুরোধ বিজ্ঞপ্তি',
            ],
        ],

        'contact-seller' => [
            'email'    => 'ইমেইল:- :email',
            'greeting' => 'আশা করি এই মেসেজটি আপনাকে ভালোই পৌঁছে।',
            'info'     => 'হ্যালো, :name একটি প্রশ্ন করছেন। দয়া করে নীচের বিশদগুলি পরীক্ষা করুন।',
            'query'    => 'প্রশ্ন: :query',
            'subject'  => 'বিক্রেতার যোগাযোগ বিজ্ঞপ্তি',
            'topic'    => 'বিষয়: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'হ্যালো, ":name" বিক্রেতা ":seller_name" এর পণ্য ":product_name" সম্পর্কে একটি সমস্যা রিপোর্ট করেছেন। অনুগ্রহ করে নিচের বিবরণটি পর্যালোচনা করুন।',
            'greeting'   => 'আশা করি আপনি ভালো আছেন।',
            'reason'     => 'কারণ:- :reason',
            'seller-msg' => 'হ্যালো, ":name" আপনার পণ্য ":product_name" সম্পর্কে একটি সমস্যা রিপোর্ট করেছেন। অনুগ্রহ করে নিচের বিবরণটি পর্যালোচনা করুন।',
            'subject'    => 'পণ্য রিপোর্ট বিজ্ঞপ্তি',
        ],

        'report-seller' => [
            'admin-msg'  => 'হ্যালো, :name :seller_name এর বিরুদ্ধে একটি সমস্যা রিপোর্ট করেছেন। দয়া করে নীচের বিশদগুলি পরীক্ষা করুন।',
            'greeting'   => 'আমি আশা করি যে এই মেসেজটি আপনাকে ভালোই পৌঁছে।',
            'reason'     => 'কারণ: :reason',
            'seller-msg' => 'হ্যালো, :name আপনার সাথে সম্পর্কিত একটি সমস্যা রিপোর্ট করেছেন। দয়া করে নীচের বিশদগুলি পরীক্ষা করুন।',
            'subject'    => 'বিক্রেতার রিপোর্ট বিজ্ঞপ্তি',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'একটি ভেলোসিটি বিক্রেতা অ্যাকাউন্ট তৈরি করুন',
            'banner-description'  => 'ভেলোসিটি আপনার পণ্যগুলি ভারতের নতুন যুগের ব্যবসায় বিক্রি করার জন্য একটি দুর্দান্ত প্ল্যাটফর্ম হতে পারে। এই টিপসগুলি অনুসরণ করে, আপনি নিজেকে একটি ভেলোসিটি বিক্রেতা হিসাবে সফলতার জন্য প্রস্তুত করতে পারেন!',
            'banner-btn-title'    => 'দোকান খুলুন',
            'feature-title'       => 'বিক্রেতারা কেন ভেলোসিটিতে বিক্রি করতে ভালোবাসেন?',
            'feature-description' => 'বিক্রেতারা উচ্চ-ভেলোসিটি প্ল্যাটফর্মগুলি পছন্দ করেন কারণ তারা বিক্রয় বৃদ্ধি, ভাল প্রদর্শন এবং একটি কার্যকর বিক্রয় অভিজ্ঞতার সম্ভাবনা প্রদান করে যা ব্যবসায়িক বৃদ্ধি এবং সফলতায় অবদান রাখতে পারে।',
            'feature-box1-title'  => 'বিক্রয় সুযোগ বৃদ্ধি',
            'feature-box1-desc'   => 'বিক্রেতারা উচ্চ-ভেলোসিটি প্ল্যাটফর্মগুলি পছন্দ করেন কারণ তারা বিক্রয় বৃদ্ধি, ভাল প্রদর্শন এবং একটি কার্যকর বিক্রয় অভিজ্ঞতার সম্ভাবনা প্রদান করে যা ব্যবসায়িক বৃদ্ধি এবং সফলতায় অবদান রাখতে পারে।',
            'feature-box2-title'  => 'দ্রুত টার্নঅ্যারাউন্ড',
            'feature-box2-desc'   => 'উচ্চ-ভেলোসিটি প্ল্যাটফর্মগুলিতে পণ্যগুলি দ্রুত বিক্রি হয়, যা বিক্রেতাদের জন্য দ্রুত ইনভেন্টরি টার্নওভার এবং রাজস্ব উৎপাদনের দিকে নিয়ে যায়।',
            'feature-box3-title'  => 'বর্ধিত দৃশ্যমানতা',
            'feature-box3-desc'   => 'এই প্ল্যাটফর্মগুলি বিক্রেতার পণ্যের জন্য বৃহত্তর দৃশ্যমানতা এবং প্রদর্শন প্রদান করে, যার ফলে আরও বেশি দর্শন এবং সম্ভাব্য বিক্রয় হয়।',
            'feature-box4-title'  => 'দক্ষতা এবং সুবিধা',
            'feature-box4-desc'   => 'উচ্চ-ভেলোসিটি প্ল্যাটফর্মগুলিতে প্রায়শই স্ট্রিমলাইন করা প্রক্রিয়া এবং সরঞ্জাম থাকে যা বিক্রয়কে আরও দক্ষ করে তোলে, বিক্রেতাদের তাদের অনলাইন ব্যবসা পরিচালনায় সময় এবং প্রচেষ্টা সাশ্রয় করে।',
            'journey-title'       => 'ভেলোসিটিতে আপনার যাত্রা শুরু করুন',
            'journey-description' => 'বিশ্বজুড়ে বড় গ্রাহকদের সাথে বিক্রি শুরু করুন, সময় অবধি সর্বক্ষণ।',
            'journey-step1-title' => 'বিক্রেতা হন',
            'journey-step1-desc'  => 'আপনার দোকান সেটআপ করুন, সমস্ত মৌলিক তথ্য সহ।',
            'journey-step2-title' => 'পণ্য তালিকাভুক্ত করুন',
            'journey-step2-desc'  => 'গ্রাহকরা দেখার এবং কেনার জন্য দোকানে পণ্য তালিকাভুক্ত করুন।',
            'journey-step3-title' => 'অর্ডার গ্রহণ করুন',
            'journey-step3-desc'  => 'বিশ্বজুড়ে বিভিন্ন গ্রাহকদের কাছ থেকে অর্ডার গ্রহণ করুন।',
            'journey-step4-title' => 'পণ্য ডেলিভারি',
            'journey-step4-desc'  => 'একবার পণ্যটি ডেলিভারির পর এবং পেমেন্ট প্রাপ্তির পর',
            'journey-step5-title' => 'পেমেন্ট',
            'journey-step5-desc'  => 'পেমেন্ট অনুরোধ, কমিশন কাটার পর পেমেন্ট পান।',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'ক্ষতিগ্রস্ত পণ্য',
            'damaged-product-sold'      => 'বিক্রেতার দ্বারা বিক্রিত ক্ষতিগ্রস্ত পণ্য',
            'duplicate-product'         => 'নকল পণ্য',
            'duplicate-product-sold'    => 'বিক্রেতার দ্বারা বিক্রিত নকল পণ্য',
            'missing-product-parts'     => 'পণ্যের অংশ অনুপস্থিত',
            'over-price-product'        => 'মূল্য অতিরিক্ত পণ্য',
            'over-price-product-sold'   => 'বিক্রেতার দ্বারা বিক্রিত মূল্য অতিরিক্ত পণ্য',
            'poor-product-quality'      => 'খারাপ পণ্যের গুণমান',
            'poor-product-quality-sold' => 'বিক্রেতার দ্বারা বিক্রিত খারাপ পণ্যের গুণমান',
            'receive-wrong-product'     => 'ভুল পণ্য গ্রহণ',
            'wrong-product-sold'        => 'বিক্রেতার দ্বারা বিক্রিত ভুল পণ্য',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'ডাউনলোড',
                    'export'     => 'রপ্তানি',
                    'no-records' => 'রপ্তানির জন্য কিছুই নেই',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'হোম পেজ',
                    'logout'     => 'লগ আউট',
                    'my-profile' => 'আমার প্রোফাইল',
                    'visit-shop' => 'দোকান দেখুন',

                    'mega-search' => [
                        'customers'                       => 'ক্রেতাগণ',
                        'explore-all-customers'           => 'সব ক্রেতাগণ অন্বেষণ করুন',
                        'explore-all-matching-customers'  => '“:query” (:count) এর সময় সব ক্রেতাগণ অন্বেষণ করুন',
                        'explore-all-matching-orders'     => '“:query” (:count) এর সময় সব অর্ডার অন্বেষণ করুন',
                        'explore-all-matching-products'   => '“:query” (:count) এর সময় সব পণ্য অন্বেষণ করুন',
                        'explore-all-orders'              => 'সব অর্ডার অন্বেষণ করুন',
                        'explore-all-products'            => 'সব পণ্য অন্বেষণ করুন',
                        'orders'                          => 'অর্ডারগুলি',
                        'products'                        => 'পণ্যগুলি',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'মেগা সার্চ',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'সঙ্কোচন করুন',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'ছবি যোগ করুন',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'শুধুমাত্র চিত্র ফাইলগুলি (.jpeg, .jpg, .png, ..) অনুমোদিত।',
                ],

                'videos' => [
                    'add-video-btn'     => 'ভিডিও যোগ করুন',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'শুধুমাত্র ভিডিও ফাইলগুলি (.mp4, .mov, .ogg ..) অনুমোদিত।',
                ],

                'documents' => [
                    'add-document-btn'  => 'ডকুমেন্ট যোগ করুন',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'শুধুমাত্র ডকুমেন্ট ফাইলগুলি (:types ..) অনুমোদিত।',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'সামনে',
                    'next'       => 'পরবর্তী',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'পাওয়ারপয়েন্ট',
                    'size'       => 'আকার',
                    'text'       => 'টেক্সট',
                    'use-cases'  => 'ব্যবহারের ক্ষেত্রে',
                    'word'       => 'Word',
                    'zoom'       => 'জুম',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'বুকিং',
            'communication'     => 'যোগাযোগ',
            'customers'         => 'গ্রাহকগণ',
            'dashboard'         => 'ড্যাশবোর্ড',
            'extensions'        => 'এক্সটেনশন',
            'general'           => 'সাধারণ',
            'inventory-sources' => 'ইনভেন্টরি উত্স',
            'manage-profile'    => 'প্রোফাইল পরিচালনা করুন',
            'orders'            => 'অর্ডারসমূহ',
            'product-reviews'   => 'পণ্য পর্যালোচনা',
            'products'          => 'পণ্যসমূহ',
            'reporting'         => 'রিপোর্টিং',
            'roles'             => 'ভূমিকা',
            'sales'             => 'বিক্রয়',
            'seller-reviews'    => 'বিক্রেতা পর্যালোচনা',
            'settings'          => 'সেটিংস',
            'transaction'       => 'লেনদেন',
            'users'             => 'ব্যবহারকারীরা',
        ],

        'acl' => [
            'assign'            => 'বরাদ্দ',
            'bookings'          => 'বুকিং',
            'cancel'            => 'বাতিল',
            'communication'     => 'যোগাযোগ',
            'create'            => 'তৈরি করুন',
            'customers'         => 'গ্রাহকরা',
            'dashboard'         => 'ড্যাশবোর্ড',
            'delete'            => 'মুছুন',
            'edit'              => 'সম্পাদনা',
            'extensions'        => 'এক্সটেনশন',
            'general'           => 'সাধারণ',
            'inventory-sources' => 'ইনভেন্টরি উত্স',
            'invoice'           => 'চালান',
            'orders'            => 'অর্ডার',
            'payment-request'   => 'পেমেন্ট অনুরোধ',
            'print'             => 'প্রিন্ট',
            'print-invoice'     => 'চালান প্রিন্ট করুন',
            'product-reviews'   => 'পণ্য পর্যালোচনা',
            'products'          => 'পণ্য',
            'reporting'         => 'রিপোর্টিং',
            'sales'             => 'বিক্রয়',
            'seller-reviews'    => 'বিক্রেতার পর্যালোচনা',
            'settings'          => 'সেটিংস',
            'shipment'          => 'পাঠানো',
            'transactions'      => 'লেনদেন',
            'view'              => 'দেখুন',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'নতুন পণ্য যোগ করুন',
            'assign'            => 'বরাদ্দ',
            'bookings'          => 'বুকিং',
            'communication'     => 'যোগাযোগ',
            'create'            => 'তৈরি করুন',
            'customers'         => 'গ্রাহকগণ',
            'dashboard'         => 'ড্যাশবোর্ড',
            'edit'              => 'সম্পাদনা',
            'extensions'        => 'এক্সটেনশন',
            'general'           => 'সাধারণ',
            'inventory-sources' => 'ইনভেন্টরি উত্স',
            'manage-profile'    => 'প্রোফাইল পরিচালনা করুন',
            'orders'            => 'অর্ডারসমূহ',
            'product-reviews'   => 'পণ্য পর্যালোচনা',
            'products'          => 'পণ্যসমূহ',
            'reporting'         => 'রিপোর্টিং',
            'roles'             => 'ভূমিকা',
            'sales'             => 'বিক্রয়',
            'seller-reviews'    => 'বিক্রেতা পর্যালোচনা',
            'settings'          => 'সেটিংস',
            'title'             => 'প্রোফাইল',
            'transaction'       => 'লেনদেন',
            'users'             => 'ব্যবহারকারীরা',
            'view'              => 'দেখুন',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'সাইন ইন করুন',
            'create-your-account' => 'আপনার অ্যাকাউন্ট তৈরি করুন',
            'email'               => 'ইমেইল',
            'footer'              => '© কপিরাইট 2010 - :current_year, Webkul Software (ভারতে নিবন্ধিত)। সমস্ত অধিকার সংরক্ষিত।',
            'forgot-pass'         => 'পাসওয়ার্ড ভুলে গেছেন?',
            'form-login-text'     => 'আপনার একটি অ্যাকাউন্ট থাকলে, আপনার ইমেল ঠিকানা দিয়ে সাইন ইন করুন।',
            'invalid-credentials' => 'দয়া করে আপনার শংসাপত্র চেক করুন এবং আবার চেষ্টা করুন।',
            'new-seller'          => 'নতুন বিক্রেতা?',
            'not-approved'        => 'আপনার সক্রিয়করণ প্রশাসকের অনুমোদন প্রয়োজন',
            'page-title'          => 'বিক্রেতা লগইন',
            'password'            => 'পাসওয়ার্ড',
            'show-password'       => 'পাসওয়ার্ড দেখুন',
            'suspended-message'   => 'আপনার অ্যাকাউন্ট স্থগিত করা হয়েছে। যে কোনও প্রশ্নের জন্য প্রশাসকের সাথে যোগাযোগ করুন।',
            'title'               => 'সাইন ইন',
        ],

        'signup' => [
            'account-exists'   => 'ইতিমধ্যে একটি অ্যাকাউন্ট আছে?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'রেজিস্টার',
            'confirm-pass'     => 'পাসওয়ার্ড নিশ্চিত করুন',
            'email'            => 'ইমেইল',
            'footer'           => '© কপিরাইট 2010 - :current_year, Webkul Software (ভারতে নিবন্ধিত)। সমস্ত অধিকার সংরক্ষিত।',
            'form-signup-text' => 'আমাদের স্টোরে নতুন হলে, আমরা আপনাকে সদস্য হিসেবে দেখতে খুশি।',
            'name'             => 'নাম',
            'page-title'       => 'একটি বিক্রেতা হোন',
            'password'         => 'পাসওয়ার্ড',
            'sign-in-button'   => 'সাইন ইন',
            'success'          => 'অ্যাকাউন্ট সফলভাবে তৈরি হয়েছে।',
            'url'              => 'দোকান Url',
        ],

        'forgot-password' => [
            'already-sent'         => 'আমরা ইতিমধ্যেই আপনার পাসওয়ার্ড রিসেট লিংক ইমেইল করেছি।',
            'back'                 => 'সাইন ইনে ফিরে যান?',
            'bagisto'              => 'Bagisto',
            'email'                => 'ইমেইল',
            'email-not-exist'      => 'আমরা ঐতিহ্যবাহী ইমেইল ঠিকানা সহ ব্যবহারকারী খুঁজতে পারব না।',
            'footer'               => '© কপিরাইট 2010 - :current_year, Webkul Software (ভারতে নিবন্ধিত)। সমস্ত অধিকার সংরক্ষিত।',
            'forgot-password-text' => 'আপনি যদি আপনার পাসওয়ার্ড ভুলে গেছেন, তবে আপনি এটি পুনরুদ্ধার করতে আপনার ইমেইল ঠিকানা দিয়ে।',
            'page-title'           => 'আপনি পাসওয়ার্ড ভুলে গেছেন?',
            'reset-link-sent'      => 'আমরা আপনার পুনরায় পাসওয়ার্ড পুনরুদ্ধার লিঙ্কটি ইমেইল করেছি।',
            'sign-in-button'       => 'সাইন ইন',
            'submit'               => 'পাসওয়ার্ড রিসেট করুন',
            'title'                => 'পাসওয়ার্ড পুনরুদ্ধার করুন',
        ],

        'reset-password' => [
            'back-link-title'  => 'সাইন ইনে ফিরে যান',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'পাসওয়ার্ড নিশ্চিত করুন',
            'email'            => 'নিবন্ধিত ইমেইল',
            'footer'           => '© কপিরাইট 2010 - :current_year, Webkul Software (ভারতে নিবন্ধিত)। সমস্ত অধিকার সংরক্ষিত।',
            'password'         => 'পাসওয়ার্ড',
            'submit-btn-title' => 'পাসওয়ার্ড রিসেট করুন',
            'title'            => 'পাসওয়ার্ড রিসেট করুন',
        ],

        'dashboard' => [
            'add-product'           => 'পণ্য যোগ করুন',
            'avg-order-sell'        => 'গড় অর্ডার বিক্রি',
            'category-info'         => 'নির্বাচিত সময় খন্ডের জন্য কোনও বিভাগ পাওয়া যায়নি',
            'complete-profile-link' => 'আপনার প্রোফাইল সম্পূর্ণ করুন &rarr;',
            'completed-orders'      => 'সম্পন্ন (:count)',
            'customer-info'         => 'নির্বাচিত সময় খন্ডের জন্য কোনও গ্রাহক পাওয়া যায়নি',
            'date-range'            => 'তারিখের পরিসীমা',
            'empty-threshold'       => 'খালি সীমা',
            'empty-threshold-desc'  => 'কোনও পণ্য পাওয়া যায়নি',
            'end-date'              => 'শেষ তারিখ',
            'hi-comment'            => 'দ্রুত দেখুন কী কি চলছে আপনার দোকানে।',
            'hi-seller'             => 'হাই! :seller_name',
            'month'                 => 'এই মাস',
            'no-category'           => 'কোনও ডেটা পাওয়া যায়নি',
            'no-customer'           => 'কোনও ডেটা পাওয়া যায়নি',
            'no-record-available'   => 'রেকর্ড পাওয়া যায়নি।',
            'order-count'           => ':মোট অর্ডার',
            'overall-details'       => 'সর্বমোট বিবরণ',
            'pending-orders'        => 'মুলতুলিত (:count)',
            'per-unit'              => ':price/ইউনিট',
            'processing-orders'     => 'প্রস্তুতি হচ্ছে (:count)',
            'product-info'          => 'চলো সম্পর্কিত পণ্য যোগ করা যায়',
            'profile-score'         => 'প্রোফাইল স্কোর',
            'profile-score-desc'    => 'আপনার প্রোফাইল তথ্য সম্পূর্ণ রাখার মাধ্যমে আপনার দৃশ্যমানতা সর্বাধিক করুন।',
            'qty-stock'             => ':qty স্টকে',
            'refunded-orders'       => 'ফেরত দেওয়া (:count)',
            'remaining-payout'      => 'অবশিষ্ট পরিশোধ',
            'start-date'            => 'শুরুর তারিখ',
            'stock-threshold'       => 'স্টক সীমানা',
            'title'                 => 'ড্যাশবোর্ড',
            'today'                 => 'আজ',
            'top-categories'        => 'শীর্ষ বিভাগগুলি',
            'top-customers'         => 'সর্বাধিক বিক্রয়কারী গ্রাহক',
            'top-products'          => 'সর্বাধিক বিক্রিত পণ্য',
            'total-customers'       => 'মোট গ্রাহক',
            'total-orders'          => 'মোট অর্ডার',
            'total-payout'          => 'মোট পরিশোধ',
            'total-sale'            => ':মোট বিক্রয়',
            'total-sales'           => 'মোট বিক্রয়',
            'view-all-btn'          => 'সব দেখুন',
            'visitor-count'         => 'দর্শক - :count',
            'week'                  => 'এই সপ্তাহ',
            'year'                  => 'এই বছর',
        ],

        'orders' => [
            'index' => [
                'title' => 'অর্ডারস',

                'datagrid' => [
                    'canceled'        => 'বাতিলকৃত',
                    'closed'          => 'বন্ধ',
                    'commission'      => 'কমিশন',
                    'completed'       => 'সম্পন্ন',
                    'customer'        => 'গ্রাহক',
                    'date'            => 'তারিখ',
                    'discount'        => 'ডিসকাউন্ট',
                    'email'           => 'ইমেইল',
                    'fraud'           => 'প্রতারণা',
                    'gross-amt'       => 'মোট পরিমাণ',
                    'id'              => 'আইডি',
                    'invoice-pending' => 'ইনভয়েস মুলতুলিত',
                    'items'           => 'আইটেমস',
                    'location'        => 'অবস্থান',
                    'order-id'        => 'আইডি - #:id',
                    'paid'            => 'পেইড',
                    'payment'         => 'পেমেন্ট',
                    'payment-request' => 'পেমেন্ট অনুরোধ',
                    'pending'         => 'মুলতুলিত',
                    'pending-payment' => 'মুলতুলিত পেমেন্ট',
                    'processing'      => 'প্রসেসিং',
                    'refunded'        => 'ফেরত দেওয়া',
                    'requested'       => 'অনুরোধ করা',
                    'seller-earn'     => 'বিক্রেতা উপার্জন',
                    'shipment'        => 'শিপমেন্ট',
                    'status'          => 'স্থিতি',
                    'transaction'     => 'লেনদেন',
                    'view'            => 'দেখুন',
                ],

                'payment-req-success'  => 'আপনার পেমেন্ট অনুরোধটি সফলভাবে জমা দেওয়া হয়েছে',
                'something-went-wrong' => 'কিছু ভুল হয়েছে!',
            ],

            'view' => [
                'admin-commission'           => 'অ্যাডমিন কমিশন',
                'billing-address'            => 'বিলিং ঠিকানা',
                'by-customer'                => 'গ্রাহক - :name দ্বারা',
                'cancel-btn'                 => 'বাতিল করুন',
                'cancel-confirm-msg'         => 'আপনি কি নিশ্চিত যে আপনি এই অর্ডারটি বাতিল করতে চান?',
                'cancel-error-msg'           => 'অর্ডারটি বাতিল করা যাবে না',
                'cancel-success-msg'         => 'অর্ডারটি সফলভাবে বাতিল হয়েছে',
                'canceled'                   => 'বাতিলকৃত',
                'closed'                     => 'বন্ধ',
                'completed'                  => 'সম্পন্ন',
                'discount'                   => 'ডিসকাউন্ট',
                'fraud'                      => 'প্রতারণা',
                'grand-total'                => 'মহামোট',
                'info'                       => 'তথ্য',
                'item-canceled'              => 'বাতিলকৃত (:qty_canceled)',
                'item-invoice'               => 'চালান (:qty_invoiced)',
                'item-ordered'               => 'অর্ডার করা (:qty_ordered)',
                'item-refunded'              => 'ফেরত দেওয়া (:qty_refunded)',
                'item-shipped'               => 'প্রেরিত (:qty_shipped)',
                'item-status'                => 'আইটেম স্থিতি',
                'payment-method'             => 'পেমেন্ট পদ্ধতি',
                'pending'                    => 'মুলতুলিত',
                'pending_payment'            => 'মুলতুলিত পেমেন্ট',
                'permission-error'           => 'আপনি অর্ডারটি বাতিল করতে অনুমতি পাচ্ছেন না',
                'place-on'                   => ':date এ অনুমোদন হয়েছে',
                'price'                      => 'মূল্য',
                'price-excl-tax'             => 'মূল্য (ট্যাক্স ছাড়া)',
                'price-incl-tax'             => 'মূল্য (ট্যাক্সসহ)',
                'processing'                 => 'প্রসেসিং',
                'product'                    => 'পণ্য',
                'shipping-address'           => 'শিপিং ঠিকানা',
                'shipping-handling'          => 'শিপিং এবং হ্যান্ডলিং',
                'shipping-method'            => 'শিপমেন্ট পদ্ধতি',
                'shipping-handling-excl-tax' => 'শিপিং ও হ্যান্ডলিং (কর ব্যতীত)',
                'shipping-handling-incl-tax' => 'শিপিং ও হ্যান্ডলিং (করসহ)',
                'sub-total-excl-tax'         => 'সাব টোটাল (কর ব্যতীত)',
                'sub-total-incl-tax'         => 'সাব টোটাল (করসহ)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'সাব মোট',
                'tax'                        => 'কর',
                'tax-amount'                 => 'কর পরিমাণ',
                'tax-percent'                => 'কর শতাংশ',
                'title'                      => 'অর্ডার #:order_id',
                'total'                      => 'মোট',
                'total-due'                  => 'মোট বাকি',
                'total-paid'                 => 'মোট পেইড',
                'total-refunded'             => 'মোট ফেরত দেওয়া',
                'total-seller-amt'           => 'মোট বিক্রেতা পরিমাণ',

                'invoices' => [
                    'bank-details'               => 'ব্যাংক বিবরণ',
                    'bill-to'                    => 'বিল টু',
                    'contact'                    => 'যোগাযোগ',
                    'contact-number'             => 'যোগাযোগ নম্বর',
                    'created-on'                 => 'তৈরি হয়েছে: :date_time',
                    'date'                       => 'চালানের তারিখ',
                    'discount'                   => 'ডিসকাউন্ট',
                    'excl-tax'                   => 'কর ব্যতীত:',
                    'grand-total'                => 'মোট মূল্য',
                    'individual-invoice'         => 'চালান #:invoice_id',
                    'invoice'                    => 'চালান',
                    'invoice-id'                 => 'চালান আইডি',
                    'name'                       => 'নাম',
                    'order-date'                 => 'অর্ডারের তারিখ',
                    'order-id'                   => 'অর্ডার আইডি',
                    'payment-method'             => 'পেমেন্ট পদ্ধতি',
                    'payment-terms'              => 'পেমেন্ট শর্তাবলী',
                    'price'                      => 'মূল্য',
                    'print'                      => 'প্রিন্ট',
                    'product-name'               => 'পণ্যের নাম',
                    'qty'                        => 'পরিমাণ',
                    'ship-to'                    => 'শিপ টু',
                    'shipping-handling'          => 'শিপিং এবং হ্যান্ডলিং',
                    'shipping-handling-excl-tax' => 'শিপিং এবং হ্যান্ডলিং (কর ব্যতীত)',
                    'shipping-handling-incl-tax' => 'শিপিং এবং হ্যান্ডলিং (করসহ)',
                    'shipping-method'            => 'শিপিং পদ্ধতি',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'উপমোট',
                    'sub-total-excl-tax'         => 'উপমোট (কর ব্যতীত)',
                    'sub-total-incl-tax'         => 'উপমোট (করসহ)',
                    'tax'                        => 'কর',
                    'tax-amount'                 => 'কর পরিমাণ',
                    'title'                      => 'চালানসমূহ',
                    'vat-number'                 => 'ভ্যাট নম্বর',
                ],

                'shipments' => [
                    'carrier-title'       => 'ক্যারিয়ার শিরোনাম',
                    'created-on'          => ':date_time এ তৈরি',
                    'individual-shipment' => 'শিপমেন্ট #:track_number',
                    'inventory-source'    => 'ইনভেন্টরি সোর্স',
                    'name'                => 'নাম',
                    'qty'                 => 'পরিমাণ',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'শিপমেন্টসমূহ',
                    'tracking-number'     => 'ট্র্যাকিং নাম্বার',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'সারাংশ ফি',
                    'adjustment-refund'          => 'সারাংশ ফেরত',
                    'created-on'                 => ':date_time এ তৈরি',
                    'discount'                   => 'ডিসকাউন্ট',
                    'grand-total'                => 'সর্বমোট',
                    'individual-refund'          => 'ফেরত #:refund_id',
                    'no-result-found'            => 'আমরা কোনও রেকর্ড খুঁজে পেতে পারি নি।',
                    'price'                      => 'মূল্য',
                    'product-name'               => 'নাম',
                    'qty'                        => 'পরিমাণ',
                    'shipping-handling'          => 'শিপিং এবং হ্যান্ডলিং',
                    'shipping-handling-excl-tax' => 'শিপিং ও হ্যান্ডলিং (কর ব্যতীত)',
                    'shipping-handling-incl-tax' => 'শিপিং ও হ্যান্ডলিং (করসহ)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'আনুপাতিক মোট (কর ব্যতীত)',
                    'sub-total-incl-tax'         => 'আনুপাতিক মোট (করসহ)',
                    'subtotal'                   => 'উপমোট',
                    'tax'                        => 'ট্যাক্স',
                    'tax-amount'                 => 'ট্যাক্স পরিমাণ',
                    'title'                      => 'ফেরতগুলি',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'ইনভয়েস',
                'invoice-success'  => 'চালান সফলভাবে তৈরি হয়েছে',
                'permission-error' => 'আপনি অর্ডারের ইনভয়েস তৈরি করতে অনুমতি পাচ্ছেন না',
                'price'            => 'মূল্য',
                'product-name'     => 'পণ্যের নাম',
                'qty'              => 'পরিমাণ',
                'qty-error'        => 'অনুরোধিত পরিমাণ পাওয়া যাচ্ছে না',
                'sub-total'        => 'ইনভয়েস <br> সাব মোট',
                'title'            => 'চালান তৈরি করুন',
                'total'            => 'মোট',
            ],

            'shipments' => [
                'avl-qty'          => 'উপলব্ধ - :qty পরিমাণ',
                'carrier-title'    => 'ক্যারিয়ার টাইটেল',
                'create-btn'       => 'শিপ করুন',
                'ordered-qty'      => 'অর্ডারকৃত পরিমাণ',
                'permission-error' => 'আপনি শিপমেন্ট তৈরি করার অনুমতি আছে না',
                'product-name'     => 'পণ্যের নাম',
                'qty'              => 'পরিমাণ',
                'qty-error'        => 'অনুরোধিত পরিমাণ উপলব্ধ নয়',
                'shipment-success' => 'শিপমেন্ট সফলভাবে তৈরি হয়েছে',
                'shipped-qty'      => 'শিপকৃত পরিমাণ',
                'sku'              => 'এসকেইউ - :sku',
                'source'           => 'পণ্য অর্ডার সোর্স',
                'title'            => 'শিপমেন্ট তৈরি করুন',
                'tracking-id'      => 'ট্র্যাকিং আইডি',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'তৈরির তারিখ',
                    'from'         => 'থেকে',
                    'id'           => 'আইডি',
                    'order-id'     => 'অর্ডার আইডি',
                    'qty'          => 'পরিমাণ',
                    'to'           => 'পর্যন্ত',
                    'view'         => 'দেখুন',
                ],

                'title'    => 'বুকিংস',
            ],

            'calendar' => [
                'booking-date'     => 'বুকিং তারিখ',
                'booking-details'  => 'বুকিং বিবরণ',
                'canceled'         => 'বাতিল',
                'closed'           => 'বন্ধ',
                'done'             => 'সম্পন্ন',
                'order-id'         => 'অর্ডার আইডি',
                'pending'          => 'মুলতুবি',
                'price'            => 'মূল্য',
                'status'           => 'স্থিতি',
                'time-slot'        => 'সময় স্লট:',
                'view-details'     => 'বিস্তারিত দেখুন',
            ],

            'title' => 'বুকিং পণ্য',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'অবশিষ্ট পেআউট',
                'title'                  => 'লেনদেন',
                'total-payout'           => 'মোট পেআউট',
                'total-seller-sale'      => 'মোট বিক্রয় (বিক্রেতা)',
                'total-admin-commission' => 'মোট কমিশন (অ্যাডমিন)',
                'total-sale-invoiced'    => 'মোট বিক্রয় (চালান প্রদত্ত)',

                'datagrid' => [
                    'comment'        => 'মন্তব্য',
                    'id'             => 'আইডি',
                    'total'          => 'মোট',
                    'transaction-id' => 'লেনদেন আইডি',
                ],
            ],

            'view' => [
                'commission'        => 'কমিশন',
                'created-on'        => 'তৈরি হয়েছিল :date এ,',
                'date'              => 'তারিখ',
                'id'                => 'লেনদেন আইডি',
                'method'            => 'পদ্ধতি',
                'name'              => 'নাম',
                'payment-method'    => ':method পেমেন্ট',
                'price'             => 'মূল্য',
                'print'             => 'মুদ্রণ',
                'qty'               => 'পরিমাণ',
                'seller-total'      => 'বিক্রেতা মোট',
                'shipping-handling' => 'শিপিং ও হ্যান্ডলিং',
                'subtotal'          => 'উপমোট',
                'tax'               => 'কর',
                'title'             => 'লেনদেন',
                'total'             => 'মোট',
                'transaction-id'    => 'লেনদেন নম্বর: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'নতুন পণ্য যোগ করুন',
                'title'             => 'পণ্যসমূহ',

                'datagrid' => [
                    'active'         => 'সক্রিয়',
                    'approved'       => 'অনুমোদিত',
                    'category'       => 'বিভাগ',
                    'delete'         => 'মুছুন',
                    'disable'        => 'অক্ষম',
                    'disapproved'    => 'অননুমোদিত নয়',
                    'edit'           => 'সম্পাদনা',
                    'id'             => 'আইডি',
                    'image'          => 'চিত্র',
                    'is-approved'    => 'অনুমোদিত',
                    'name'           => 'নাম',
                    'out-of-stock'   => 'স্টক শেষ',
                    'price'          => 'মূল্য',
                    'product-number' => 'পণ্য নম্বর',
                    'product_id'     => 'আইডি - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'স্থিতি',
                    'stock'          => 'স্টক',
                    'total-quantity' => ':quantity উপলব্ধ',
                    'type'           => 'প্রকার',
                ],
            ],

            'create' => [
                'attribute-family'          => 'গুণগুলির পরিবার',
                'back'                      => 'পিছনে',
                'continue'                  => 'চালিয়ে যান',
                'create-new-product'        => 'নতুন পণ্য তৈরি করুন',
                'create-your-new-product'   => 'যদি পণ্যটি অস্তিত্বে না থাকে, আপনি আপনার নতুন পণ্য তৈরি করতে পারেন',
                'disable-product-message'   => 'প্রশাসক পণ্য তৈরি বা নির্ধারণের ফাংশনালিটি নিষ্ক্রিয় করেছেন।',
                'image-placeholder'         => 'আপনার চিত্র',
                'no-result'                 => 'কোনো ফলাফল পাওয়া যায়নি',
                'not-allowed'               => 'আপনার পণ্য তৈরি করার অনুমতি নেই',
                'or'                        => 'অথবা',
                'product-type'              => 'পণ্যের প্রকার',
                'search-product'            => 'পণ্য অনুসন্ধান করুন',
                'sell-admin-product-prices' => 'এডমিন পণ্যটি আপনার মূল্যে বিক্রয় করুন।',
                'sell-as-yours'             => 'আপনার হিসেবে বিক্রয় করুন',
                'sku'                       => 'SKU',
                'sub-title'                 => 'আপনি 2 ভাবে পণ্য যোগ করতে পারেন, অথবা এডমিন পণ্য থেকে বা আপনার নিজের তৈরি করতে।',
                'title'                     => 'নতুন পণ্য যোগ করুন',
                'update-profile'            => 'আপনার প্রোফাইল বিশদগুলি আপডেট করুন।',
            ],

            'edit' => [
                'back-btn'      => 'ফিরে যান',
                'preview'       => 'প্রিভিউ',
                'remove'        => 'সরান',
                'save-btn'      => 'পণ্য সংরক্ষণ করুন',
                'title'         => 'পণ্য সম্পাদনা',
                'channels'      => 'চ্যানেলসমূহ',
                'progress-info' => 'আপনার পণ্যের আকর্ষণ বাড়ান এবং নিশ্চিত করুন যে সমস্ত পণ্যের বিবরণ সম্পূর্ণ এবং সঠিক, গ্রাহকদের উপর একটি স্থায়ী প্রভাব ফেলুন!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'গ্রুপ মূল্য যোগ করুন',
                        'all-groups'                => 'সমস্ত গোষ্ঠী',
                        'create-btn'                => 'নতুন যোগ করুন',
                        'discount-group-price-info' => ':qty পরিমাণের জন্য :price মূল্যে ছাড়',
                        'edit-btn'                  => 'সম্পাদনা',
                        'empty-info'                => 'একটি নির্দিষ্ট গোষ্ঠীতে অন্যান্য গ্রাহকদের জন্য বিশেষ মূল্যনির্ধারণ।',
                        'fixed-group-price-info'    => ':qty পরিমাণের জন্য নির্ধারিত মূল্য :price',
                        'title'                     => 'গ্রাহক গোষ্ঠী মূল্য',

                        'create' => [
                            'all-groups'     => 'সমস্ত গোষ্ঠী',
                            'create-title'   => 'গ্রাহক গোষ্ঠী মূল্য তৈরি করুন',
                            'customer-group' => 'গ্রাহক গোষ্ঠী',
                            'delete-btn'     => 'মুছুন',
                            'discount'       => 'ছাড়',
                            'fixed'          => 'নির্ধারিত',
                            'price'          => 'মূল্য',
                            'price-type'     => 'মূল্য প্রকার',
                            'qty'            => 'পরিমাণ',
                            'save-btn'       => 'সংরক্ষণ করুন',
                            'update-title'   => 'গ্রাহক গোষ্ঠী মূল্য আপডেট করুন',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'মুলতুবি অর্ডারকৃত পরিমাণ: :qty',
                    'pending-ordered-qty-info' => 'শিপমেন্ট পরে মুলতুবি অর্ডারকৃত পরিমাণটি প্রস্তুত তালিকা থেকে কমানো হবে। যদি বাতিল করা হয় তবে মুলতুবি পরিমাণটি বিক্রয়ের জন্য উপলব্ধ থাকবে।',
                    'title'                    => 'মূলযাদি',
                ],

                'categories' => [
                    'title' => 'বিভাগসমূহ',
                ],

                'images' => [
                    'info'  => 'চিত্রের নির্দিষ্ট ক্ষমতা হতে হবে 609px X 560px এর মত।',
                    'title' => 'চিত্রসমূহ',
                ],

                'videos' => [
                    'error' => 'ভিডিওটি :max কিলোবাইটের বৃহত্তর হতে পারে না। দয়া করে একটি ছোট ফাইল চয়ন করুন।',
                    'info'  => 'সর্বাধিক ভিডিও আকার হতে হবে :size এর মত।',
                    'title' => 'ভিডিওসমূহ',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'এখানে সংশ্লিষ্ট পণ্য যোগ করুন।',
                        'info'       => 'গ্রাহকটি যে পণ্যটি দেখছে, তার পাশাপাশি সংবাদ দেওয়া হয়ে থাকে।',
                        'title'      => 'সংশ্লিষ্ট পণ্যসমূহ',
                    ],

                    'up-sells' => [
                        'empty-info' => 'এখানে আপ সেল পণ্য যোগ করুন।',
                        'info'       => 'গ্রাহকটির কাছে একটি আপ-সেল পণ্য দেওয়া হয়, যা বর্তমানে তার দেখছে পণ্যের একটি মৌল্যবার্ধিত বা উচ্চ মানের বিকল্প হিসেবে কাজ করে।',
                        'title'      => 'আপ-সেল পণ্যসমূহ',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'এখানে ক্রস-সেল পণ্য যোগ করুন।',
                        'info'       => 'শপিং কার্টের পাশাপাশি, এই "ইম্পাল্স-ক্রয়" পণ্যগুলি দেখা যাবে এবং তাদের কার্টে ইতিমধ্যে যোগ করা পণ্যগুলির সাথে সম্পূরক হিসেবে অবস্থান করা হবে।',
                        'title'      => 'ক্রস-সেল পণ্যসমূহ',
                    ],

                    'add-btn'           => 'পণ্য যোগ করুন',
                    'delete'            => 'মুছুন',
                    'empty-info'        => ':type পণ্যগুলি একবারে যোগ করতে।',
                    'empty-title'       => 'পণ্য যোগ করুন',
                    'image-placeholder' => 'পণ্যের চিত্র',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'অপশন যোগ করুন',
                            'empty-info'        => 'চটজলদি কাস্টমাইজযোগ্য অপশন তৈরি করতে।',
                            'empty-title'       => 'অপশন যোগ করুন',
                            'info'              => 'এটি সাধারণ প্রোডাক্ট কাস্টমাইজ করবে।',
                            'title'             => 'কাস্টমাইজযোগ্য আইটেম',

                            'update-create' => [
                                'is-required'               => 'প্রয়োজনীয়',
                                'max-characters'            => 'সর্বোচ্চ অক্ষর',
                                'name'                      => 'শিরোনাম',
                                'no'                        => 'না',
                                'price'                     => 'মূল্য',
                                'save-btn'                  => 'সংরক্ষণ করুন',
                                'supported-file-extensions' => 'সমর্থিত ফাইল এক্সটেনশনসমূহ',
                                'title'                     => 'অপশন',
                                'type'                      => 'প্রকার',
                                'yes'                       => 'হ্যাঁ',
                            ],

                            'option' => [
                                'add-btn'     => 'অপশন যোগ করুন',
                                'delete'      => 'মুছে ফেলুন',
                                'delete-btn'  => 'মুছে ফেলুন',
                                'edit-btn'    => 'সম্পাদনা করুন',
                                'empty-info'  => 'চটজলদি বিভিন্ন ধরনের প্রোডাক্ট তৈরি করতে।',
                                'empty-title' => 'অপশন যোগ করুন',

                                'types' => [
                                    'text' => [
                                        'title' => 'টেক্সট',
                                    ],

                                    'textarea' => [
                                        'title' => 'টেক্সটএরিয়া',
                                    ],

                                    'checkbox' => [
                                        'title' => 'চেকবক্স',
                                    ],

                                    'radio' => [
                                        'title' => 'রেডিও',
                                    ],

                                    'select' => [
                                        'title' => 'সিলেক্ট',
                                    ],

                                    'multiselect' => [
                                        'title' => 'মাল্টিসিলেক্ট',
                                    ],

                                    'date' => [
                                        'title' => 'তারিখ',
                                    ],

                                    'datetime' => [
                                        'title' => 'তারিখ ও সময়',
                                    ],

                                    'time' => [
                                        'title' => 'সময়',
                                    ],

                                    'file' => [
                                        'title' => 'ফাইল',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'লেবেল',
                                        'price'    => 'মূল্য',
                                        'save-btn' => 'সংরক্ষণ করুন',
                                        'title'    => 'অপশন',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'প্রোডাক্ট ইতিমধ্যেই কনফিগারেবল, গ্রুপড, বা বান্ডল প্রোডাক্টের সাথে যুক্ত রয়েছে।',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'ভ্যারিয়েন্ট যোগ করুন',
                        'delete-btn'        => 'মুছুন',
                        'edit-btn'          => 'সম্পাদনা',
                        'empty-info'        => 'যেসব প্রোডাক্টের বিভিন্ন সম্ভাব্য সমন্বয় তৈরি করতে।',
                        'empty-title'       => 'ভ্যারিয়েন্ট যোগ করুন',
                        'image-placeholder' => 'পণ্য চিত্র',
                        'info'              => 'ভেরিয়েশন পণ্যগুলি সমস্ত সম্ভাব্য গুণগুলির সমন্বয়ে নির্ভর করে।',
                        'qty'               => ':qty পরিমাণ',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'পরিবর্তনশীল',

                        'create'  => [
                            'description'            => 'বিবরণ',
                            'name'                   => 'নাম',
                            'save-btn'               => 'যোগ করুন',
                            'title'                  => 'ভ্যারিয়েন্ট যোগ করুন',
                            'variant-already-exists' => 'এই ভ্যারিয়েন্টটি ইতিমধ্যে বিদ্যমান',
                        ],

                        'edit' => [
                            'disabled'        => 'অক্ষম',
                            'edit-info'       => 'আপনি যদি প্রোডাক্ট তথ্য বিস্তারিতভাবে আপডেট করতে চান, তবে যান:',
                            'edit-link-title' => 'প্রোডাক্ট বিবরণ পৃষ্ঠা',
                            'enabled'         => 'সক্ষম',
                            'images'          => 'চিত্র',
                            'name'            => 'নাম',
                            'price'           => 'মূল্য',
                            'quantities'      => 'পরিমাণ',
                            'save-btn'        => 'সংরক্ষণ করুন',
                            'sku'             => 'SKU',
                            'status'          => 'অবস্থা',
                            'title'           => 'প্রোডাক্ট',
                            'weight'          => 'ওজন',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'চিত্র যোগ করুন',
                            'apply-to-all-btn'    => 'সবগুলিতে প্রয়োগ করুন',
                            'apply-to-all-sku'    => 'সব SKU-তে একটি মূল্য প্রয়োগ করুন।',
                            'edit-inventories'    => 'মজুদ সম্পাদনা করুন',
                            'edit-prices'         => 'মূল্য সম্পাদনা করুন',
                            'price'               => 'মূল্য',
                            'remove-images'       => 'চিত্র মুছুন',
                            'remove-variants'     => 'ভেরিয়েন্ট মুছুন',
                            'select-action'       => 'ক্রিয়া নির্বাচন করুন',
                            'select-variants'     => 'ভেরিয়েন্ট নির্বাচন করুন',
                            'edit-name'           => 'নাম সম্পাদনা করুন',
                            'name'                => 'নাম',
                            'edit-sku'            => 'SKU সম্পাদনা করুন',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'ওজন সম্পাদনা করুন',
                            'weight'              => 'ওজন',
                            'edit-status'         => 'অবস্থা সম্পাদনা করুন',
                            'status'              => 'অবস্থা',
                            'apply-to-all-name'   => 'সব ভেরিয়েন্টে একটি নাম প্রয়োগ করুন।',
                            'apply-to-all-weight' => 'সব ভেরিয়েন্টে একটি ওজন প্রয়োগ করুন।',
                            'apply-to-all-status' => 'সব ভেরিয়েন্টে একটি অবস্থা প্রয়োগ করুন।',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'পণ্য যোগ করুন',
                        'default-qty'       => 'ডিফল্ট পরিমাণ',
                        'delete'            => 'মুছুন',
                        'empty-info'        => 'যেসব প্রোডাক্টের বিভিন্ন সম্ভাব্য সমন্বয় তৈরি করতে।',
                        'empty-title'       => 'পণ্য যোগ করুন',
                        'image-placeholder' => 'পণ্য চিত্র',
                        'info'              => 'একটি গোষ্ঠীকৃত পণ্য একটি সেট হিসেবে প্রদর্শিত স্থানীয় আইটেম তৈরি করে, যার মাধ্যমে পরিবর্তন বা সীজন বা থিমের অনুভূতির মাধ্যমে ভিন্নতা বা সমন্বয় হতে পারে। প্রতিটি পণ্যটি এককভাবে অথবা গোষ্ঠীর অংশ হিসেবে ক্রয় করা যাবে।',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'গোষ্ঠীকৃত পণ্যসমূহ',
                    ],

                    'bundle' => [
                        'add-btn'           => 'অপশন যোগ করুন',
                        'empty-info'        => 'একটি বান্ডল অপশন তৈরি করতে।',
                        'empty-title'       => 'অপশন যোগ করুন',
                        'image-placeholder' => 'পণ্য চিত্র',
                        'info'              => 'একটি বান্ডল পণ্য হলো একই সাথে বেশি আইটেম বা সেবা একসাথে একটি বিশেষ মূল্যে বিক্রয় হয়, গ্রাহকদের জন্য মান এবং সুবিধা সরবরাহ করে।',
                        'title'             => 'বান্ডল আইটেমস',

                        'update-create' => [
                            'checkbox'    => 'চেকবক্স',
                            'is-required' => 'প্রয়োজন',
                            'multiselect' => 'মাল্টিসিলেক্ট',
                            'name'        => 'শিরোনাম',
                            'no'          => 'না',
                            'radio'       => 'রেডিও',
                            'save-btn'    => 'সংরক্ষণ করুন',
                            'select'      => 'সিলেক্ট',
                            'title'       => 'অপশন',
                            'type'        => 'ধরণ',
                            'yes'         => 'হ্যাঁ',
                        ],

                        'option' => [
                            'add-btn'     => 'পণ্য যোগ করুন',
                            'default-qty' => 'ডিফল্ট পরিমাণ',
                            'delete'      => 'মুছুন',
                            'delete-btn'  => 'মুছুন',
                            'edit-btn'    => 'সম্পাদনা',
                            'empty-info'  => 'একটি বান্ডল পণ্য তৈরি করতে।',
                            'empty-title' => 'পণ্য যোগ করুন',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'চেকবক্স ব্যবহার করে ডিফল্ট পণ্য সেট করুন',
                                    'title' => 'চেকবক্স',
                                ],

                                'multiselect' => [
                                    'info'  => 'চেকবক্স বোতাম ব্যবহার করে ডিফল্ট পণ্য সেট করুন',
                                    'title' => 'মাল্টিসিলেক্ট',
                                ],

                                'radio' => [
                                    'info'  => 'রেডিও বোতাম ব্যবহার করে ডিফল্ট পণ্য সেট করুন',
                                    'title' => 'রেডিও',
                                ],

                                'select' => [
                                    'info'  => 'রেডিও বোতাম ব্যবহার করে ডিফল্ট পণ্য সেট করুন',
                                    'title' => 'সিলেক্ট',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'উপলব্ধ শুরু',
                        'available-to'   => 'উপলব্ধ শেষ',
                        'location'       => 'অবস্থান',
                        'qty'            => 'পরিমাণ',
                        'title'          => 'বুকিং প্রকার',

                        'available-every-week' => [
                            'no'    => 'না',
                            'title' => 'প্রতি সপ্তাহে উপলব্ধ',
                            'yes'   => 'হ্যাঁ',
                        ],

                        'appointment' => [
                            'break-duration'         => 'বিরতির সময় (মিনিট)',
                            'slot-duration'          => 'স্লট সময়কাল (মিনিট)',

                            'same-slot-for-all-days' => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],
                        ],

                        'default' => [
                            'add'              => 'যোগ করুন',
                            'break-duration'   => 'বিরতির সময় (মিনিট)',
                            'close'            => 'বন্ধ করুন',
                            'description'      => 'বুকিং তথ্য',
                            'description-info' => 'স্লট অনুসারে সময়ের স্থিতিকাল তৈরি এবং প্রদর্শিত হবে। সময়ের স্থিতিকাল সমস্ত স্লটের মধ্যে অনন্য হবে এবং স্টোরফ্রন্টে দৃশ্যমান থাকবে।',
                            'edit'             => 'সম্পাদনা করুন',
                            'many'             => 'এক দিনে অনেক বুকিং',
                            'one'              => 'অনেক দিনে এক বুকিং',
                            'open'             => 'খুলুন',
                            'slot-add'         => 'স্লট যোগ করুন',
                            'slot-duration'    => 'স্লট সময়কাল (মিনিট)',
                            'slot-title'       => 'স্লট সময়কাল',
                            'title'            => 'ডিফল্ট',
                            'unavailable'      => 'উপলব্ধ নয়',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'স্লট যোগ করুন',
                                    'close'      => 'বন্ধ করুন',
                                    'day'        => 'দিন',
                                    'edit-title' => 'স্লট সম্পাদনা করুন',
                                    'friday'     => 'শুক্রবার',
                                    'from'       => 'থেকে',
                                    'from-day'   => 'দিন থেকে',
                                    'from-time'  => 'সময় থেকে',
                                    'monday'     => 'সোমবার',
                                    'open'       => 'খুলুন',
                                    'saturday'   => 'শনিবার',
                                    'save'       => 'সংরক্ষণ করুন',
                                    'select'     => 'নির্বাচন করুন',
                                    'status'     => 'স্থিতি',
                                    'sunday'     => 'রবিবার',
                                    'thursday'   => 'বৃহস্পতিবার',
                                    'to'         => 'পর্যন্ত',
                                    'to-day'     => 'দিন পর্যন্ত',
                                    'to-time'    => 'সময় পর্যন্ত',
                                    'tuesday'    => 'মঙ্গলবার',
                                    'wednesday'  => 'বুধবার',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'টিকিট যোগ করুন',
                            'delete'             => 'মুছে ফেলুন',
                            'description'        => 'বর্ণনা',
                            'description-info'   => 'কোন টিকিট উপলব্ধ নেই।',
                            'edit'               => 'সম্পাদনা করুন',
                            'name'               => 'নাম',
                            'price'              => 'মূল্য',
                            'qty'                => 'পরিমাণ',
                            'special-price'      => 'বিশেষ মূল্য',
                            'special-price-from' => 'বিশেষ মূল্য শুরু',
                            'special-price-to'   => 'বিশেষ মূল্য শেষ',
                            'title'              => 'টিকিট',
                            'valid-from'         => 'বৈধ শুরু',
                            'valid-until'        => 'বৈধ শেষ',

                            'modal'              => [
                                'edit' => 'টিকিট সম্পাদনা করুন',
                                'save' => 'সংরক্ষণ করুন',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'টিকিট যোগ করুন',
                            ],

                            'slots'   => [
                                'add'         => 'স্লট যোগ করুন',
                                'description' => 'উপলব্ধ স্লট সময়কাল সহ।',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'দৈনিক ভিত্তিতে',
                            'daily-hourly' => 'উভয় (দৈনিক এবং ঘণ্টা ভিত্তিতে)',
                            'daily-price'  => 'দৈনিক মূল্য',
                            'hourly'       => 'ঘণ্টা ভিত্তিতে',
                            'hourly-price' => 'ঘণ্টা মূল্য',
                            'title'        => 'ভাড়া প্রকার',

                            'same-slot-for-all-days' => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'স্লট যোগ করুন',
                            'description-info' => 'স্লট অনুসারে সময়ের স্থিতিকাল তৈরি এবং প্রদর্শিত হবে। সময়ের স্থিতিকাল সমস্ত স্লটের মধ্যে অনন্য হবে এবং স্টোরফ্রন্টে দৃশ্যমান থাকবে।',
                            'save'             => 'সংরক্ষণ করুন',
                            'title'            => 'স্লট সময়কাল',
                            'unavailable'      => 'উপলব্ধ নয়',

                            'action'           => [
                                'add' => 'যোগ করুন',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'শুক্রবার',
                                    'from'       => 'থেকে',
                                    'monday'     => 'সোমবার',
                                    'saturday'   => 'শনিবার',
                                    'sunday'     => 'রবিবার',
                                    'thursday'   => 'বৃহস্পতিবার',
                                    'to'         => 'পর্যন্ত',
                                    'tuesday'    => 'মঙ্গলবার',
                                    'wednesday'  => 'বুধবার',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'বিরতির সময় (মিনিট)',
                            'guest-capacity'            => 'অতিথি ক্ষমতা',
                            'guest-limit'               => 'প্রতি টেবিলে অতিথি সীমা',
                            'prevent-scheduling-before' => 'পূর্বে সময়সূচী প্রতিরোধ করুন',
                            'slot-duration'             => 'স্লট সময়কাল (মিনিট)',

                            'charged-per'               => [
                                'guest'  => 'অতিথি',
                                'table'  => 'টেবিল',
                                'title'  => 'প্রতি চার্জ',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'না',
                                'title' => 'সব দিনের জন্য একই স্লট',
                                'yes'   => 'হ্যাঁ',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'অ্যাপয়েন্টমেন্ট বুকিং',
                            'default'     => 'ডিফল্ট বুকিং',
                            'event'       => 'ইভেন্ট বুকিং',
                            'many'        => 'অনেক',
                            'one'         => 'এক',
                            'rental'      => 'ভাড়া বুকিং',
                            'table'       => 'টেবিল বুকিং',
                            'title'       => 'প্রকার',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'লিংক যোগ করুন',
                            'delete-btn'  => 'মুছুন',
                            'edit-btn'    => 'সম্পাদনা',
                            'empty-info'  => 'একটি লিংক তৈরি করতে।',
                            'empty-title' => 'লিংক যোগ করুন',
                            'file'        => 'ফাইল : ',
                            'info'        => 'ডাউনলোডযোগ্য পণ্যের ধরণটি ডিজিটাল পণ্য, যেমন ইবুক, সফটওয়্যার অ্যাপ্লিকেশন, সঙ্গীত, খেলা, ইত্যাদি বিক্রয় করতে অনুমতি দেয়।',
                            'sample-file' => 'স্যাম্পল ফাইল : ',
                            'sample-url'  => 'স্যাম্পল URL : ',
                            'title'       => 'ডাউনলোডযোগ্য লিংকস',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'ডাউনলোড অনুমোদিত',
                                'file'        => 'ফাইল',
                                'file-type'   => 'ফাইল টাইপ',
                                'name'        => 'শিরোনাম',
                                'price'       => 'মূল্য',
                                'sample'      => 'স্যাম্পল',
                                'sample-type' => 'স্যাম্পল টাইপ',
                                'save-btn'    => 'সংরক্ষণ করুন',
                                'title'       => 'লিংক',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'স্যাম্পল যোগ করুন',
                            'delete-btn'  => 'মুছুন',
                            'edit-btn'    => 'সম্পাদনা',
                            'empty-info'  => 'একটি স্যাম্পল তৈরি করতে।',
                            'empty-title' => 'স্যাম্পল যোগ করুন',
                            'file'        => 'ফাইল : ',
                            'info'        => 'ডাউনলোডযোগ্য পণ্যের ধরণটি ডিজিটাল পণ্য, যেমন ইবুক, সফটওয়্যার অ্যাপ্লিকেশন, সঙ্গীত, খেলা, ইত্যাদি বিক্রয় করতে অনুমতি দেয়।',
                            'title'       => 'ডাউনলোডযোগ্য স্যাম্পলস',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'        => 'ফাইল',
                                'file-type'   => 'ফাইল টাইপ',
                                'name'        => 'শিরোনাম',
                                'save-btn'    => 'সংরক্ষণ করুন',
                                'title'       => 'লিংক',
                                'url'         => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'পণ্যটি সফলভাবে তৈরি হয়েছে',
            'delete-failed'            => 'পণ্য মোছার প্রক্রিয়া ব্যর্থ হয়েছে',
            'delete-success'           => 'পণ্যটি সফলভাবে মোছা হয়েছে',
            'product-type-not-allowed' => 'আপনি অনুমতি পাইনি :type পণ্য বিক্রি করতে',
            'saved-inventory-message'  => 'পণ্যটি সফলভাবে সংরক্ষণ করা হয়েছে',
            'update-success'           => 'পণ্যটি সফলভাবে আপডেট হয়েছে',

            'assign' => [
                'already-selling'     => 'আপনি ইতিমধ্যে এই পণ্যটি বিক্রি করছেন',
                'back-btn'            => 'ফিরে যান',
                'condition'           => 'অবস্থা',
                'create-success'      => 'পণ্য সফলভাবে বিক্রেতার কাছে নির্ধারণ করা হয়েছে',
                'description'         => 'বর্ণনা',
                'image-size'          => 'ছবির রেজোলিউশন 609px X 560px হওয়া উচিত',
                'images'              => 'ছবি',
                'new'                 => 'নতুন',
                'not-allowed'         => 'আপনার এই পণ্য বরাদ্দ করার অনুমতি নেই',
                'old'                 => 'পুরানো',
                'price'               => 'মূল্য',
                'product-not-allowed' => 'আপনি :type ধরণের পণ্য বিক্রির অনুমতি পাচ্ছেন না',
                'quantities'          => 'পরিমাণ',
                'save-btn'            => 'সংরক্ষণ করুন',
                'title'               => 'পণ্য নির্ধারণ করুন',
                'update-success'      => 'নির্ধারিত পণ্য সফলভাবে আপডেট হয়েছে',

                'product-details' => [
                    'active'            => 'সক্রিয়',
                    'approved'          => 'অনুমোদিত',
                    'disable'           => 'নিষ্ক্রিয় করুন',
                    'disapproved'       => 'অননুমোদিত',
                    'image-placeholder' => 'পণ্যের ছবি',
                    'title'             => 'পণ্যের বিবরণ',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'পণ্যের পর্যালোচনা',

                'datagrid' => [
                    'approved'      => 'অনুমোদিত',
                    'customer'      => 'গ্রাহক',
                    'date'          => 'তারিখ',
                    'description'   => 'বিবরণ',
                    'email'         => 'ইমেইল',
                    'pending'       => 'মুলতুবি',
                    'product'       => 'পণ্য',
                    'rating'        => 'রেটিং',
                    'status'        => 'স্থিতি',
                    'title'         => 'শিরোনাম',
                    'unapproved'    => 'অননুমোদিত',
                    'update-status' => 'আপডেট অবস্থা',
                ],
            ],

            'update-success' => 'পণ্য পর্যালোচনা সফলভাবে আপডেট হয়েছে',
            'delete-success' => 'পণ্য পর্যালোচনা সফলভাবে মুছে ফেলা হয়েছে।',
        ],

        'customers' => [
            'index' => [
                'title' => 'গ্রাহকগণ',

                'datagrid' => [
                    'active'      => 'সক্রিয়',
                    'customer'    => 'গ্রাহক',
                    'email'       => 'ইমেইল',
                    'gender'      => 'লিঙ্গ',
                    'group'       => 'গ্রুপ',
                    'inactive'    => 'নিষ্ক্রিয়',
                    'order-count' => 'অর্ডার সংখ্যা',
                    'revenue'     => 'আয়',
                    'status'      => 'স্থিতি',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'প্রোফাইল পরিচালনা করুন',
                'edit-btn' => 'প্রোফাইল সম্পাদনা করুন',

                'general' => [
                    'email'      => 'ইমেইল',
                    'name'       => 'নাম',
                    'phone'      => 'ফোন নম্বর',
                    'shop-slug'  => 'দোকানের স্লাগ',
                    'shop-title' => 'দোকানের শিরোনাম',
                    'title'      => 'সাধারণ তথ্য',
                ],

                'about-store' => [
                    'title' => 'দোকান সম্পর্কে',
                ],

                'meta' => [
                    'meta-description' => 'মেটা বিবরণ',
                    'meta-keywords'    => 'মেটা কীওয়ার্ড',
                    'meta-title'       => 'মেটা শিরোনাম',
                    'title'            => 'মেটা বিবরণ',
                ],

                'policy' => [
                    'privacy'  => 'গোপনীয়তা নীতি',
                    'return'   => 'রিটার্ন নীতি',
                    'shipping' => 'শিপিং নীতি',
                    'title'    => 'নীতিমালা',
                ],

                'address' => [
                    'city'     => 'শহর',
                    'country'  => 'দেশ',
                    'postcode' => 'পোস্টকোড',
                    'state'    => 'রাজ্য',
                    'title'    => 'দোকানের ঠিকানা',
                    'address'  => 'ঠিকানা',
                ],

                'social' => [
                    'link'  => ':name লিংক',
                    'title' => 'সামাজিক লিংকসমূহ',
                ],

                'minimum-order-amount' => [
                    'title'  => 'ন্যূনতম অর্ডার পরিমাণ',
                ],

                'google-analytics' => [
                    'id'    => 'অ্যানালিটিক্স আইডি',
                    'title' => 'গুগল অ্যানালিটিক্স',
                ],

                'shop-information' => [
                    'admin-commission'       => 'অ্যাডমিন কমিশন',
                    'admin-commission-value' => 'মোট ইনভয়েসের :rate% অ্যাডমিন কমিশন',
                    'allowed-categories'     => 'অনুমোদিত ক্যাটেগরি',
                    'no-categories'          => 'কোনো ক্যাটেগরি নেই',
                    'allowed-product-types'  => 'অনুমোদিত পণ্যের ধরণ',
                    'no-product-types'       => 'কোনো পণ্যের ধরণ নেই',
                    'payment-methods'        => 'পেমেন্ট পদ্ধতি',
                    'no-payment-methods'     => 'কোনো পেমেন্ট পদ্ধতি নেই',
                    'shipping-methods'       => 'শিপিং পদ্ধতি',
                    'no-shipping-methods'    => 'কোনো শিপিং পদ্ধতি নেই',
                    'title'                  => 'দোকানের তথ্য',
                ],
            ],

            'edit' => [
                'banner'              => 'ব্যানার',
                'banner-description'  => '13:3 অনুপাতে ব্যানার আপলোড করুন, উচ্চতা 375, নিরাপদ এলাকা 375x250, মোবাইলে কেন্দ্রীভূত',
                'delete-banner'       => 'ব্যানার মুছুন',
                'delete-logo'         => 'লোগো মুছুন',
                'logo'                => 'লোগো',
                'logo-description'    => '1:1 অনুপাতে লোগো আপলোড করুন',
                'save-btn'            => 'প্রোফাইল সংরক্ষণ করুন',
                'title'               => 'প্রোফাইল পরিচালনা করুন',
                'upload-new-banner'   => 'নতুন ব্যানার আপলোড করুন',
                'upload-new-logo'     => 'নতুন লোগো আপলোড করুন',

                'general' => [
                    'email'      => 'ইমেইল',
                    'name'       => 'নাম',
                    'phone'      => 'ফোন নম্বর',
                    'shop-slug'  => 'দোকানের স্লাগ',
                    'shop-title' => 'দোকানের শিরোনাম',
                    'title'      => 'সাধারণ তথ্য',
                ],

                'about-store' => [
                    'title' => 'দোকান সম্পর্কে',
                ],

                'meta' => [
                    'meta-description' => 'মেটা বিবরণ',
                    'meta-keywords'    => 'মেটা কীওয়ার্ড',
                    'meta-title'       => 'মেটা শিরোনাম',
                    'title'            => 'মেটা বিবরণ',
                ],

                'policy' => [
                    'privacy'  => 'গোপনীয়তা নীতি',
                    'return'   => 'রিটার্ন নীতি',
                    'shipping' => 'শিপিং নীতি',
                    'title'    => 'নীতিমালা',
                ],

                'address' => [
                    'city'           => 'শহর',
                    'country'        => 'দেশ',
                    'postcode'       => 'পোস্টকোড',
                    'state'          => 'রাজ্য',
                    'title'          => 'দোকানের ঠিকানা',
                    'select-country' => 'দেশ নির্বাচন করুন',
                    'select-state'   => 'রাজ্য নির্বাচন করুন',
                    'street-address' => 'রাস্তার ঠিকানা',
                    'address'        => 'ঠিকানা',
                ],

                'social' => [
                    'link'  => ':name লিংক',
                    'title' => 'সামাজিক লিংকসমূহ',
                ],

                'minimum-order-amount' => [
                    'title'  => 'ন্যূনতম অর্ডার পরিমাণ',
                ],

                'google-analytics' => [
                    'id'    => 'গুগল অ্যানালিটিক্স আইডি',
                    'title' => 'গুগল অ্যানালিটিক্স',
                ],
            ],

            'update-success' => 'আপনার প্রোফাইল সফলভাবে হালনাগাদ হয়েছে',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'বিক্রেতা পর্যালোচনা',

                'datagrid' => [
                    'approved'    => 'অনুমোদিত',
                    'customer'    => 'গ্রাহক',
                    'date'        => 'তারিখ',
                    'description' => 'বিবরণ',
                    'disapproved' => 'অননুমোদিত নয়',
                    'email'       => 'ইমেইল',
                    'pending'     => 'মুলতুবি',
                    'rating'      => 'রেটিং',
                    'status'      => 'স্থিতি',
                    'title'       => 'শিরোনাম',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'সংরক্ষণ করুন',
                    'title'              => 'সাধারণ',
                    'unmatched-password' => 'বর্তমান পাসওয়ার্ড মিলছে না',
                    'update-success'     => 'সাধারণ সেটিংস সফলভাবে আপডেট হয়েছে',

                    'regional-setting' => [
                        'currency'      => 'মুদ্রা',
                        'locale'        => 'লোকেল',
                        'select-locale' => 'লোকেল নির্বাচন করুন',
                        'title'         => 'আঞ্চলিক সেটিংস',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'পাসওয়ার্ড নিশ্চিত করুন',
                        'current-password' => 'বর্তমান পাসওয়ার্ড',
                        'new-password'     => 'নতুন পাসওয়ার্ড',
                        'title'            => 'পাসওয়ার্ড সেটিংস',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'ভূমিকা তৈরি করুন',
                    'title'      => 'ভূমিকা',

                    'datagrid' => [
                        'all'             => 'সব',
                        'custom'          => 'কাস্টম',
                        'delete'          => 'মুছুন',
                        'edit'            => 'সম্পাদনা করুন',
                        'id'              => 'আইডি',
                        'name'            => 'নাম',
                        'permission-type' => 'অনুমতি প্রকার',
                    ],
                ],

                'create' => [
                    'access-control' => 'অ্যাক্সেস নিয়ন্ত্রণ',
                    'all'            => 'সব',
                    'back-btn'       => 'ফিরে যান',
                    'custom'         => 'কাস্টম',
                    'description'    => 'বিবরণ',
                    'general'        => 'সাধারণ',
                    'name'           => 'নাম',
                    'permissions'    => 'অনুমতিসমূহ',
                    'save-btn'       => 'ভূমিকা সংরক্ষণ করুন',
                    'title'          => 'ভূমিকা তৈরি করুন',
                ],

                'edit' => [
                    'access-control' => 'অ্যাক্সেস নিয়ন্ত্রণ',
                    'all'            => 'সব',
                    'back-btn'       => 'ফিরে যান',
                    'custom'         => 'কাস্টম',
                    'description'    => 'বিবরণ',
                    'general'        => 'সাধারণ',
                    'name'           => 'নাম',
                    'permissions'    => 'অনুমতিসমূহ',
                    'save-btn'       => 'ভূমিকা সংরক্ষণ করুন',
                    'title'          => 'ভূমিকা সম্পাদনা করুন',
                ],

                'being-used'        => 'ভূমিকা কিছু বিক্রেতা দ্বারা ব্যবহৃত হচ্ছে',
                'create-success'    => 'ভূমিকা সফলভাবে তৈরি হয়েছে',
                'delete-failed'     => 'ভূমিকা মোছা ব্যর্থ হয়েছে',
                'delete-success'    => 'ভূমিকা সফলভাবে মোছা হয়েছে',
                'last-delete-error' => 'অন্তত একটি ভূমিকা প্রয়োজন',
                'update-success'    => 'ভূমিকা সফলভাবে আপডেট হয়েছে',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'ইউজার তৈরি করুন',
                    'create-title'     => 'ইউজার তৈরি করুন',
                    'edit-title'       => 'ইউজার সম্পাদনা করুন',
                    'email'            => 'ইমেইল',
                    'name'             => 'নাম',
                    'phone-number'     => 'ফোন নম্বর',
                    'role'             => 'ভূমিকা',
                    'save-btn'         => 'ইউজার সংরক্ষণ করুন',
                    'select-role'      => 'ভূমিকা নির্বাচন করুন',
                    'password'         => 'পাসওয়ার্ড',
                    'confirm-password' => 'পাসওয়ার্ড নিশ্চিত করুন',
                    'status'           => 'অবস্থা',
                    'title'            => 'ব্যবহারকারীরা',
                    'create-success'   => 'ব্যবহারকারী সফলভাবে তৈরি হয়েছে',
                    'update-success'   => 'ব্যবহারকারী সফলভাবে আপডেট হয়েছে',
                    'delete-success'   => 'ব্যবহারকারী সফলভাবে মুছে ফেলা হয়েছে',
                    'delete-failed'    => 'ব্যবহারকারী মোছা ব্যর্থ হয়েছে',

                    'datagrid' => [
                        'delete'     => 'মুছুন',
                        'edit'       => 'সম্পাদনা করুন',
                        'email'      => 'ইমেইল',
                        'id'         => 'আইডি',
                        'id-value'   => 'আইডি - :id',
                        'name'       => 'নাম',
                        'permission' => 'অনুমতি',
                        'phone'      => 'ফোন',

                        'status' => [
                            'title' => 'অবস্থা',

                            'options' => [
                                'active'    => 'সক্রিয়',
                                'suspended' => 'স্থগিত',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'ইনভেন্টরি সোর্স তৈরি করুন',
                    'title'      => 'ইনভেন্টরি উৎস',

                    'datagrid' => [
                        'active'   => 'সক্রিয়',
                        'code'     => 'কোড',
                        'delete'   => 'মুছে ফেলুন',
                        'edit'     => 'সম্পাদনা',
                        'id'       => 'আইডি',
                        'inactive' => 'নিষ্ক্রিয়',
                        'name'     => 'নাম',
                        'priority' => 'অগ্রাধিকার',
                        'status'   => 'স্থিতি',
                    ],
                ],

                'create' => [
                    'add-title'      => 'ইনভেন্টরি উৎস যুক্ত করুন',
                    'address'        => 'উৎসের ঠিকানা',
                    'back-btn'       => 'পেছনে যান',
                    'city'           => 'শহর',
                    'code'           => 'কোড',
                    'contact-email'  => 'ইমেইল',
                    'contact-fax'    => 'ফ্যাক্স',
                    'contact-info'   => 'যোগাযোগের তথ্য',
                    'contact-name'   => 'নাম',
                    'contact-number' => 'যোগাযোগ নম্বর',
                    'country'        => 'দেশ',
                    'description'    => 'বর্ণনা',
                    'general'        => 'সাধারণ',
                    'latitude'       => 'অক্ষাংশ',
                    'longitude'      => 'দ্রাঘিমাংশ',
                    'name'           => 'নাম',
                    'postcode'       => 'পোস্টকোড',
                    'priority'       => 'অগ্রাধিকার',
                    'save-btn'       => 'ইনভেন্টরি উৎস সংরক্ষণ করুন',
                    'select-country' => 'দেশ নির্বাচন করুন',
                    'select-state'   => 'রাজ্য নির্বাচন করুন',
                    'settings'       => 'সেটিংস',
                    'state'          => 'রাজ্য',
                    'status'         => 'স্থিতি',
                    'street'         => 'রাস্তা',
                    'title'          => 'ইনভেন্টরি উৎস',
                ],

                'edit' => [
                    'back-btn'       => 'পেছনে যান',
                    'city'           => 'শহর',
                    'code'           => 'কোড',
                    'contact-email'  => 'ইমেইল',
                    'contact-fax'    => 'ফ্যাক্স',
                    'contact-info'   => 'যোগাযোগের তথ্য',
                    'contact-name'   => 'নাম',
                    'contact-number' => 'যোগাযোগ নম্বর',
                    'country'        => 'দেশ',
                    'description'    => 'বর্ণনা',
                    'general'        => 'সাধারণ',
                    'latitude'       => 'অক্ষাংশ',
                    'longitude'      => 'দ্রাঘিমাংশ',
                    'name'           => 'নাম',
                    'postcode'       => 'পোস্টকোড',
                    'priority'       => 'অগ্রাধিকার',
                    'save-btn'       => 'ইনভেন্টরি উৎস সংরক্ষণ করুন',
                    'select-country' => 'দেশ নির্বাচন করুন',
                    'select-state'   => 'রাজ্য নির্বাচন করুন',
                    'settings'       => 'সেটিংস',
                    'source-address' => 'উৎসের ঠিকানা',
                    'state'          => 'রাজ্য',
                    'status'         => 'স্থিতি',
                    'street'         => 'রাস্তা',
                    'title'          => 'ইনভেন্টরি উৎস সম্পাদনা করুন',
                ],

                'create-success'    => 'ইনভেন্টরি উৎস সফলভাবে তৈরি হয়েছে',
                'delete-failed'     => 'ইনভেন্টরি উৎস মুছে ফেলা ব্যর্থ হয়েছে',
                'delete-success'    => 'ইনভেন্টরি উৎস সফলভাবে মুছে ফেলা হয়েছে',
                'last-delete-error' => 'শেষ ইনভেন্টরি উৎস মুছে ফেলা যায় না',
                'update-success'    => 'ইনভেন্টরি উৎস সফলভাবে আপডেট হয়েছে',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'অ্যাডমিন',
                'blocked-message'     => 'আপনাকে প্রশাসকের দ্বারা ব্লক করা হয়েছে',
                'message-failed'      => 'বার্তা পাঠাতে ব্যর্থ হয়েছে',
                'message-placeholder' => 'আপনার বার্তা এখানে লিখুন...',
                'message-sent'        => 'বার্তা সফলভাবে পাঠানো হয়েছে',
                'no-message'          => 'কোন বার্তা পাওয়া যায়নি',
                'search-message'      => 'বার্তা অনুসন্ধান করুন...',
                'title'               => 'যোগাযোগ',

                'filters' => [
                    'all-messages'      => 'সমস্ত বার্তা',
                    'prev-fifteen-days' => 'গত ১৫ দিন',
                    'prev-seven-days'   => 'গত ৭ দিন',
                    'prev-six-months'   => 'গত ৬ মাস',
                    'prev-thirty-days'  => 'গত ৩০ দিন',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'বাতিল কার্ট',
                    'abandoned-products'            => 'বাতিল পণ্য',
                    'abandoned-rate'                => 'বাতিল হার',
                    'abandoned-revenue'             => 'বাতিল আয়',
                    'added-to-cart'                 => 'কার্টে যোগ করা হয়েছে',
                    'added-to-cart-info'            => 'কেবল :progress দর্শকগণ পণ্য কার্টে যোগ করেছেন',
                    'all-channels'                  => 'সমস্ত চ্যানেল',
                    'average-order-value-over-time' => 'সময়ের সাথে গড় অর্ডারের মান',
                    'average-sales'                 => 'গড় অর্ডারের মান',
                    'commission'                    => 'কমিশন',
                    'commission-over-time'          => 'সময়ের সাথে কমিশন',
                    'count'                         => 'সংখ্যা',
                    'end-date'                      => 'শেষ তারিখ',
                    'id'                            => 'আইডি',
                    'interval'                      => 'ব্যবধান',
                    'name'                          => 'নাম',
                    'orders'                        => 'অর্ডার',
                    'orders-over-time'              => 'সময়ের সাথে অর্ডার',
                    'payment-method'                => 'পেমেন্ট পদ্ধতি',
                    'product-views'                 => 'পণ্য দেখা',
                    'product-views-info'            => 'কেবল :progress দর্শকগণ পণ্য দেখেছেন',
                    'purchase-funnel'               => 'ক্রয় ফানেল',
                    'purchased'                     => 'ক্রয় করা হয়েছে',
                    'purchased-info'                => 'কেবল :progress দর্শকগণ ক্রয় করেছেন',
                    'refunds'                       => 'ফেরত',
                    'refunds-over-time'             => 'সময়ের সাথে ফেরত',
                    'sales-over-time'               => 'সময়ের সাথে বিপণি',
                    'start-date'                    => 'শুরুর তারিখ',
                    'tax-collected'                 => 'কর সংগ্রহণ',
                    'tax-collected-over-time'       => 'সময়ের সাথে কর সংগ্রহণ',
                    'title'                         => 'বিপণি',
                    'top-payment-methods'           => 'শীর্ষ পেমেন্ট পদ্ধতি',
                    'top-tax-categories'            => 'শীর্ষ কর বিভাগ',
                    'total'                         => 'মোট',
                    'total-commission-paid'         => 'মোট পরিশোধিত কমিশন',
                    'total-orders'                  => 'মোট অর্ডার',
                    'total-sales'                   => 'মোট বিপণি',
                    'total-visits'                  => 'মোট দর্শন',
                    'total-visits-info'             => 'দোকানে মোট দর্শক',
                    'view-details'                  => 'বিস্তারিত দেখুন',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'সমস্ত চ্যানেল',
                    'count'                       => 'সংখ্যা',
                    'customers'                   => 'গ্রাহক',
                    'customers-over-time'         => 'সময়ের সাথে গ্রাহক',
                    'customers-traffic'           => 'গ্রাহক যাতায়াত',
                    'customers-with-most-orders'  => 'সবচেয়ে বেশি অর্ডার দেন গ্রাহক',
                    'customers-with-most-reviews' => 'সবচেয়ে বেশি পর্যালোচনা দেন গ্রাহক',
                    'customers-with-most-sales'   => 'সবচেয়ে বেশি বিপণি করে গ্রাহক',
                    'email'                       => 'ইমেইল',
                    'end-date'                    => 'শেষ তারিখ',
                    'id'                          => 'আইডি',
                    'interval'                    => 'ব্যবধান',
                    'name'                        => 'নাম',
                    'orders'                      => 'অর্ডার',
                    'reviews'                     => 'পর্যালোচনা',
                    'start-date'                  => 'শুরুর তারিখ',
                    'title'                       => 'গ্রাহক',
                    'top-customer-groups'         => 'শীর্ষ গ্রাহক গোষ্ঠী',
                    'total'                       => 'মোট',
                    'total-customers'             => 'মোট গ্রাহক',
                    'total-visitors'              => 'মোট দর্শক',
                    'traffic-over-week'           => 'সপ্তাহে যাতায়াত',
                    'unique-visitors'             => 'অনন্য দর্শক',
                    'view-details'                => 'বিস্তারিত দেখুন',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'সমস্ত চ্যানেল',
                    'channel'                          => 'চ্যানেল',
                    'end-date'                         => 'শেষ তারিখ',
                    'id'                               => 'আইডি',
                    'interval'                         => 'ব্যবধান',
                    'locale'                           => 'স্থানীয়',
                    'name'                             => 'নাম',
                    'orders'                           => 'অর্ডার',
                    'price'                            => 'মূল্য',
                    'products-added-over-time'         => 'সময়ের সাথে যোগ করা পণ্য',
                    'products-with-most-reviews'       => 'সবচেয়ে বেশি পর্যালোচনা প্রাপ্ত পণ্য',
                    'products-with-most-visits'        => 'সবচেয়ে বেশি দর্শন প্রাপ্ত পণ্য',
                    'quantities'                       => 'পরিমাণ',
                    'quantities-sold-over-time'        => 'সময়ের সাথে বিক্রিত পরিমাণ',
                    'revenue'                          => 'আয়',
                    'reviews'                          => 'পর্যালোচনা',
                    'start-date'                       => 'শুরুর তারিখ',
                    'title'                            => 'পণ্য',
                    'top-selling-products-by-quantity' => 'পরিমাণ দ্বারা শীর্ষ বিক্রিত পণ্য',
                    'top-selling-products-by-revenue'  => 'আয় দ্বারা শীর্ষ বিক্রিত পণ্য',
                    'total'                            => 'মোট',
                    'total-products-added-to-wishlist' => 'ইচ্ছাশীলা তালিকায় যোগ করা পণ্য',
                    'total-sold-quantities'            => 'বিক্রিত পণ্যের পরিমাণ',
                    'view-details'                     => 'বিস্তারিত দেখুন',
                    'visits'                           => 'দর্শন',
                ],
            ],

            'view' => [
                'all-channels'  => 'সমস্ত চ্যানেল',
                'day'           => 'দিন',
                'end-date'      => 'শেষ তারিখ',
                'export-csv'    => 'CSV রপ্যার্ট করুন',
                'export-xls'    => 'XLS রপ্যার্ট করুন',
                'month'         => 'মাস',
                'not-available' => 'রেকর্ড উপলব্ধ নেই।',
                'start-date'    => 'শুরুর তারিখ',
                'year'          => 'বছর',
            ],

            'empty' => [
                'info'  => 'নির্বাচিত সময়সীমার জন্য কোন ডেটা উপলব্ধ নেই',
                'title' => 'কোন ডেটা উপলব্ধ নয়',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'অক্ষম',
                'enabled'   => 'সক্রিয়',
                'info'      => 'Bagisto-র কাস্টমাইজযোগ্য ই-কমার্স এক্সটেনশনের মাধ্যমে আপনার অনলাইন স্টোর তৈরি, পরিচালনা এবং স্কেল করুন।',
                'no-result' => 'এখানে কোনো এক্সটেনশন নেই।',
                'title'     => 'এক্সটেনশন',

                'filters' => [
                    'all-extensions' => 'সব এক্সটেনশন',
                    'bulk_upload'    => 'বাল্ক আপলোড',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'মার্কেটপ্লেস',
                    'payment'        => 'পেমেন্ট',
                    'pos'            => 'POS',
                    'shipping'       => 'শিপিং',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'বিক্রেতার লোগো',
                'switch-to-store' => 'দোকান পরিচালনা করতে স্যুইচ করুন',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => ':shop_title এর জন্য সর্বনিম্ন অর্ডার পরিমাণ হল',
                'product-not-available' => 'পণ্যটি উপলব্ধ নয়',
                'sold-by'               => 'বিক্রিত দ্বারা',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => ':days দিনের মধ্যে পরিশোধ',
                'deals-in'            => 'ডিলস ইন',
                'featured-seller'     => 'আমাদের বৈশিষ্ট্যযুক্ত বিক্রেতাদের',
                'online-business'     => 'অনলাইন ব্যবসায়',
                'reviews'             => ':count পর্যালোচনাসমূহ',
                'seller-community'    => 'বিক্রেতা সম্প্রদায়',
                'serviceable-pincode' => 'সেবা প্রদান যোগ্য পিনকোড',
                'start-selling'       => 'বিশ্বভরে সার্ক কার্যক্ষম গ্রাহকের সাথে বিক্রি শুরু করুন, সময় অবধি সর্বক্ষণ।',
                'step'                => 'পদক্ষেপ :count',
                'visit-shop'          => 'দোকানে যান',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'কার্টে যোগ করুন',
            'delivery-info' => 'ডেলিভারি তথ্য এখানে আসবে',
            'hide'          => 'লুকান',
            'more-info'     => 'আরও তথ্য',
            'seller-count'  => ':count টির বেশি বিক্রেতা একই পণ্য বিক্রি করছে',
            'seller-info'   => 'বিক্রেতা তথ্য',
            'sold-by'       => 'বিক্রি করে',
            'top-selling'   => 'শীর্ষ বিক্রয়',

            'flag' => [
                'alert'              => 'সতর্কতা',
                'already-reported'   => 'আপনি ইতিমধ্যেই এই পণ্যটি রিপোর্ট করেছেন',
                'create-success'     => 'পণ্যটি সফলভাবে রিপোর্ট করা হয়েছে',
                'guest-alert'        => 'এই পণ্যটি রিপোর্ট করতে লগইন করতে হবে',
                'not-allowed'        => 'অর্ডার না করলে এই পণ্যটি রিপোর্ট করা যাবে না',
                'other-reason'       => 'অন্যান্য কারণ',
                'reason'             => 'কারণ',
                'reason-placeholder' => 'কারণটি নির্দিষ্ট করুন',
                'report-product'     => 'পণ্য রিপোর্ট করুন',
                'select-reason'      => 'কারণ নির্বাচন করুন',
                'submit-btn'         => 'জমা দিন',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'বিক্রেতাকে এখনও অনুমোদিত করা হয়নি',
                'products-count'  => 'পণ্যসমূহ (:count)',
                'reviews-count'   => 'রিভিউ (:count)',
                'search-text'     => 'পণ্য অনুসন্ধান করুন',

                'about' => [
                    'title'           => 'সম্পর্কে',
                    'about-us'        => 'আমাদের সম্পর্কে',
                    'shipping-policy' => 'শিপিং পলিসি',
                    'privacy-policy'  => 'প্রাইভেসি পলিসি',
                    'return-policy'   => 'রিটার্ন পলিসি',
                ],

                'contact-form' => [
                    'title'          => 'যোগাযোগ',
                    'name'           => 'নাম',
                    'email'          => 'ইমেইল',
                    'subject'        => 'বিষয়',
                    'query'          => 'প্রশ্ন',
                    'submit-btn'     => 'জমা দিন',
                    'create-success' => 'আপনার প্রশ্ন সফলভাবে জমা হয়েছে',
                ],

                'share' => [
                    'title'     => 'শেয়ার',
                    'share-on'  => 'শেয়ার করুন',
                    'facebook'  => 'ফেসবুক',
                    'linkedin'  => 'লিঙ্কডইন',
                    'twitter'   => 'টুইটার',
                    'pinterest' => 'পিন্টারেস্ট',
                ],

                'report-form' => [
                    'alert'              => 'সতর্কতা',
                    'already-reported'   => 'আপনি ইতিমধ্যেই এই বিক্রেতাকে রিপোর্ট করেছেন',
                    'create-success'     => 'বিক্রেতাকে সফলভাবে রিপোর্ট করা হয়েছে',
                    'guest-alert'        => 'বিক্রেতাকে রিপোর্ট করতে আপনাকে লগইন করতে হবে',
                    'not-allowed'        => 'অর্ডার না করে বিক্রেতাকে রিপোর্ট করা যাবে না',
                    'other-reason'       => 'অন্যান্য কারণ',
                    'reason'             => 'কারণ',
                    'reason-placeholder' => 'কারণটি উল্লেখ করুন',
                    'select-reason'      => 'কারণ নির্বাচন করুন',
                    'submit-btn'         => 'জমা দিন',
                    'title'              => 'সমস্যা রিপোর্ট করুন',
                ],

                'reviews' => [
                    'alert'            => 'সতর্কতা',
                    'already-reviewed' => 'আপনি ইতিমধ্যে এই বিক্রেতার পর্যালোচনা করেছেন',
                    'comment'          => 'মন্তব্য',
                    'create-success'   => 'বিক্রেতা সফলভাবে পর্যালোচনা হয়েছে',
                    'customer-review'  => ':count কাস্টমার রিভিউ',
                    'customer-reviews' => 'কাস্টমার রিভিউ',
                    'guest-alert'      => 'আপনাকে বিক্রেতাকে রিপোর্ট করতে লগইন করতে হবে',
                    'rating'           => 'রেটিং',
                    'review-by'        => 'রিভিউ দ্বারা',
                    'submit-btn'       => 'জমা দিন',
                    'title'            => 'শিরোনাম',
                    'view-all'         => 'সমস্ত রিভিউ দেখুন',
                    'write-review'     => 'একটি রিভিউ লিখুন',
                ],

                'products' => [
                    'no-result' => 'এখানে কোনো পণ্য নেই',
                    'show'      => 'প্রদর্শন করুন',

                    'sort-by' => [
                        'title' => 'ক্রমানুসারে সাজান',

                        'options' => [
                            'cheapest-first'  => 'সবচেয়ে সস্তা আগে',
                            'expensive-first' => 'সবচেয়ে দামি আগে',
                            'from-a-z'        => 'এ-জেড থেকে',
                            'from-z-a'        => 'জেড-এ থেকে',
                            'latest-first'    => 'সর্বশেষ প্রথমে',
                            'oldest-first'    => 'প্রাচীনতম প্রথমে',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'সব পরিষ্কার করুন',
                        'filter'      => 'ফিল্টার',
                        'filters'     => 'ফিল্টারসমূহ:',
                        'price-range' => 'মূল্য পরিসীমা',
                        'sort'        => 'বাছাই করুন',
                    ],
                ],
            ],
        ],
    ],
];
