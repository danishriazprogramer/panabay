<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marketplace',
                    'info'  => 'Manage Marketplace',

                    'module-info' => [
                        'title'       => 'Module Information',
                        'info'        => 'Provides the information related to application version.',
                        'app-version' => 'Application Version:- v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Admin Commission Percentage',
                        'description'                  => 'Manage the general settings of the Marketplace like status, commission, etc.',
                        'lines-in-street-address'      => 'Lines in Street Address',
                        'lines-in-street-address-info' => 'Set the number of lines in street address. Default is one lines.',
                        'status'                       => 'Status',
                        'title'                        => 'General',
                    ],

                    'product' => [
                        'approval-required'         => 'Approval Required',
                        'description'               => 'Manage the product settings of the Marketplace like approval, flags, etc.',
                        'enable-flag'               => 'Enable Flag',
                        'seller-can-assign-product' => 'Seller Can Assign Product',
                        'seller-can-create-product' => 'Seller Can Create Product',
                        'show-progress-bar'         => 'Show Progress Bar',
                        'title'                     => 'Product',
                    ],

                    'seller' => [
                        'approval-required'           => 'Approval Required',
                        'can-cancel-order'            => 'Can Cancel Order',
                        'can-create-invoice'          => 'Can Create Invoice',
                        'can-create-shipment'         => 'Can Create Shipment',
                        'description'                 => 'Manage the seller settings of the Marketplace like approval, flags, etc.',
                        'enable-flag'                 => 'Enable Flag',
                        'enable-minimum-order-amount' => 'Enable Minimum Order Amount',
                        'enable-seller-flag'          => 'Enable Seller Flag',
                        'red-flag-limit'              => 'Red Flag Limit',
                        'red-flag-limit-info'         => 'If the seller gets more than this limit, then the red flag will be shown on the seller profile.',
                        'show-red-flag'               => 'Show red flag on profile if limit exceeds',
                        'title'                       => 'Seller',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Limit Count',
                        'description' => 'Manage the featured sellers of the Marketplace.',
                        'status'      => 'Status',
                        'title'       => 'Featured Sellers',

                        'popularity-criteria' => [
                            'all'              => 'All',
                            'maximum-orders'   => 'Maximum Orders',
                            'maximum-products' => 'Maximum Products',
                            'maximum-rating'   => 'Maximum Rating',
                            'maximum-sale'     => 'Maximum Sale',
                            'title'            => 'Popularity Criteria',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Banner Button Title',
                        'banner-description'  => 'Banner Description',
                        'banner-image'        => 'Banner Image',
                        'banner-title'        => 'Banner Title',
                        'business-hour'       => 'Business Hour',
                        'community-count'     => 'Community Count',
                        'description'         => 'Customize the landing page of the Marketplace, by adding icons, Banner, and Descriptions for a fresh look',
                        'feature-box1-desc'   => 'Feature Box 1 Description',
                        'feature-box1-icon'   => 'Feature Box 1 Icon',
                        'feature-box1-title'  => 'Feature Box 1 Title',
                        'feature-box2-desc'   => 'Feature Box 2 Description',
                        'feature-box2-icon'   => 'Feature Box 2 Icon',
                        'feature-box2-title'  => 'Feature Box 2 Title',
                        'feature-box3-desc'   => 'Feature Box 3 Description',
                        'feature-box3-icon'   => 'Feature Box 3 Icon',
                        'feature-box3-title'  => 'Feature Box 3 Title',
                        'feature-box4-desc'   => 'Feature Box 4 Description',
                        'feature-box4-icon'   => 'Feature Box 4 Icon',
                        'feature-box4-title'  => 'Feature Box 4 Title',
                        'feature-description' => 'Feature Description',
                        'feature-image'       => 'Feature Image',
                        'feature-title'       => 'Feature Title',
                        'journey-description' => 'Journey Description',
                        'journey-image'       => 'Journey Image',
                        'journey-step1-desc'  => 'Journey Step 1 Description',
                        'journey-step1-icon'  => 'Journey Step 1 Icon',
                        'journey-step1-title' => 'Journey Step 1 Title',
                        'journey-step2-desc'  => 'Journey Step 2 Description',
                        'journey-step2-icon'  => 'Journey Step 2 Icon',
                        'journey-step2-title' => 'Journey Step 2 Title',
                        'journey-step3-desc'  => 'Journey Step 3 Description',
                        'journey-step3-icon'  => 'Journey Step 3 Icon',
                        'journey-step3-title' => 'Journey Step 3 Title',
                        'journey-step4-desc'  => 'Journey Step 4 Description',
                        'journey-step4-icon'  => 'Journey Step 4 Icon',
                        'journey-step4-title' => 'Journey Step 4 Title',
                        'journey-step5-desc'  => 'Journey Step 5 Description',
                        'journey-step5-icon'  => 'Journey Step 5 Icon',
                        'journey-step5-title' => 'Journey Step 5 Title',
                        'journey-title'       => 'Journey Title',
                        'payment-duration'    => 'Payment Duration',
                        'serviceable-pincode' => 'Serviceable Pincode',
                        'title'               => 'Landing Page',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Assign Product',
            'communications'    => 'Communications',
            'create'            => 'Create',
            'delete'            => 'Delete',
            'edit'              => 'Edit',
            'flag-reasons'      => 'Flag Reasons',
            'inventory-sources' => 'Inventory Sources',
            'orders'            => 'Orders',
            'pay'               => 'Pay',
            'payment-request'   => 'Payment Request',
            'product-reviews'   => 'Product Reviews',
            'products'          => 'Products',
            'reviews'           => 'Seller Reviews',
            'seller-categories' => 'Seller Categories',
            'sellers'           => 'Sellers',
            'title'             => 'Marketplace',
            'transactions'      => 'Transactions',
            'view'              => 'View',
        ],

        'menu' => [
            'communications'    => 'Communications',
            'flag-reasons'      => 'Flag Reasons',
            'inventory-sources' => 'Inventory Sources',
            'orders'            => 'Orders',
            'payment-requests'  => 'Payment Requests',
            'product-reviews'   => 'Product Reviews',
            'products'          => 'Products',
            'seller-categories' => 'Seller Categories',
            'seller-reviews'    => 'Seller Reviews',
            'sellers'           => 'Sellers',
            'title'             => 'Marketplace',
            'transactions'      => 'Transactions',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Add Sellers',
                'delete-failed'      => 'Seller deletion failed!',
                'delete-success'     => 'Seller deleted successfully.',
                'incomplete-profile' => 'Seller has incomplete profile!',
                'login-message'      => 'You are logged in as :seller_name',
                'pending-orders'     => 'Seller has some pending orders',
                'title'              => 'Sellers',
                'update-success'     => 'Seller updated successfully!',

                'datagrid' => [
                    'add-product'     => 'Assign',
                    'approved'        => 'Approved',
                    'assign-product'  => 'Assign Product',
                    'created-at'      => 'Created At',
                    'delete'          => 'Delete',
                    'disapproved'     => 'Disapproved',
                    'edit'            => 'Edit',
                    'email'           => 'Email',
                    'flags'           => 'Flags',
                    'id'              => 'Id',
                    'login-as-seller' => 'Login as Seller',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Seller Name',
                    'shop-url'        => 'Shop URL',
                    'status'          => 'Status',
                    'suspended'       => 'Suspended',
                    'total-flags'     => 'Total Flags: :count',
                    'update-status'   => 'Update Status',
                ],

                'create'  => [
                    'address'        => 'Address',
                    'street-address' => 'Street Address',
                    'city'           => 'City',
                    'country'        => 'Country',
                    'email'          => 'Email',
                    'name'           => 'Name',
                    'phone'          => 'Phone Number',
                    'postcode'       => 'Postcode',
                    'save-btn'       => 'Save',
                    'select'         => 'Select',
                    'shop-title'     => 'Shop Title',
                    'shop-url'       => 'Shop Url',
                    'state'          => 'State',
                    'success'        => 'Seller Created Successfully.',
                    'title'          => 'Create Seller',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Seller Flags',

                    'datagrid' => [
                        'customer-email' => 'Customer Email',
                        'customer-name'  => 'Customer Name',
                        'date'           => 'Date',
                        'id'             => 'Id',
                        'reason'         => 'Reason',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Back',
                'image-placeholder' => 'Product Image',
                'no-result'         => 'No result found!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Search Products',
            ],

            'assign-product' => [
                'already-selling'     => 'Seller is already selling this product',
                'assign-successfully' => 'Product assigned successfully to the seller.',
                'back-btn'            => 'Back',
                'condition'           => 'Condition',
                'description'         => 'Description',
                'new'                 => 'New',
                'old'                 => 'Old',
                'price'               => 'Price',
                'product-not-allowed' => 'Seller is not allowed to sell :type product.',
                'quantities'          => 'Quantities',
                'save-btn'            => 'Save',
                'select-condition'    => 'Select Condition',
                'title'               => 'Assign Product',

                'seller-details' => [
                    'additional-info' => 'Additional Information',
                    'approved'        => 'Approved',
                    'disapproved'     => 'Disapproved',
                    'no-of-products'  => 'No. of Products',
                    'status'          => 'Status',
                    'suspended'       => 'Suspended',
                    'title'           => 'Seller Details',
                ],

                'product-details' => [
                    'active'            => 'Active',
                    'disable'           => 'Disable',
                    'title'             => 'Product Details',
                    'image-placeholder' => 'Product Image',
                ],

                'images' => [
                    'info'  => 'Image resolution should be like 609px X 560px',
                    'title' => 'Images',
                ],

                'videos' => [
                    'error' => 'The video may not be greater than :max kilobytes. Please choose a smaller file.',
                    'info'  => 'Maximum video size should be like :size',
                    'title' => 'Videos',
                ],

                'configurable' => [
                    'delete-btn'        => 'Delete',
                    'edit-btn'          => 'Edit',
                    'image-placeholder' => 'Product Image',
                    'qty'               => 'Qty - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Variations',

                    'edit' => [
                        'images'     => 'Images',
                        'price'      => 'Price',
                        'quantities' => 'Quantities',
                        'save-btn'   => 'Save',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Add Link',
                        'delete-btn'  => 'Delete',
                        'edit-btn'    => 'Edit',
                        'empty-info'  => 'To create link on a go.',
                        'empty-title' => 'Add Link',
                        'file'        => 'File : ',
                        'info'        => 'Downloadable product type allows to sell digital products, such as eBooks, software applications, music, games, etc.',
                        'sample-file' => 'Sample File : ',
                        'sample-url'  => 'Sample URL : ',
                        'title'       => 'Downloadable Links',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Download Allowed',
                            'file'        => 'File',
                            'file-type'   => 'File Type',
                            'name'        => 'Title',
                            'price'       => 'Price',
                            'sample'      => 'Sample',
                            'sample-type' => 'Sample Type',
                            'save-btn'    => 'Save',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Add Sample',
                        'delete-btn'  => 'Delete',
                        'edit-btn'    => 'Edit',
                        'empty-info'  => 'To create sample on a go.',
                        'empty-title' => 'Add Sample',
                        'file'        => 'File : ',
                        'info'        => 'Downloadable product type allows to sell digital products, such as eBooks, software applications, music, games, etc.',
                        'title'       => 'Downloadable Samples',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'        => 'File',
                            'file-type'   => 'File Type',
                            'name'        => 'Title',
                            'save-btn'    => 'Save',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Back',
                'title'          => 'Edit Seller',
                'update-btn'     => 'Update Seller',
                'suspended'      => 'Suspended',
                'update-success' => 'Seller Updated Successfully.',

                'shop' => [
                    'address'          => 'Address',
                    'street-address'   => 'Street Address',
                    'city'             => 'City',
                    'country'          => 'Country',
                    'description'      => 'Description',
                    'email'            => 'Email',
                    'name'             => 'Name',
                    'phone-number'     => 'Phone Number',
                    'postcode'         => 'Postcode',
                    'select'           => 'Select',
                    'shop-title'       => 'Shop Title',
                    'state'            => 'State',
                    'title'            => 'Shop Details',
                    'url'              => 'Shop url',
                ],

                'profile' => [
                    'banner'         => 'Profile Banner',
                    'banner-size'    => 'Banner size should be like 300px X 200px',
                    'logo'           => 'Profile Logo',
                    'logo-size'      => 'Logo size should be like 125px X 125px',
                    'social-links'   => ':name Link',
                    'title'          => 'Profile Details',
                ],

                'allowed-product' => [
                    'title'  => 'Allowed Product',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimum Order Amount',
                ],

                'google-analytics-id' => [
                    'title'  => 'Google Analytics Id',
                ],

                'commission' => [
                    'percentage' => 'Percentage',
                    'status'     => 'Status',
                    'title'      => 'Seller Commission',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Description',
                    'meta-keyword'     => 'Meta Keyword',
                    'meta-title'       => 'Meta Title',
                    'title'            => 'Meta Information',
                ],

                'policy' => [
                    'privacy'  => 'Privacy Policy',
                    'return'   => 'Return Policy',
                    'shipping' => 'Shipping Policy',
                    'title'    => 'Policies',
                ],

                'channels' => [
                    'title' => 'Channel',
                ],

                'users' => [
                    'email' => 'Email',
                    'id'    => 'Id',
                    'name'  => 'Name',
                    'phone' => 'Phone',
                    'title' => 'Users',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Add Products',
                'delete-success' => 'Product Deleted successfully.',
                'title'          => 'Products',
                'update-success' => 'Product Updated successfully.',

                'datagrid' => [
                    'approved'       => 'Approved',
                    'delete'         => 'Delete',
                    'disapproved'    => 'Disapproved',
                    'flags'          => 'Flags',
                    'id'             => 'Id',
                    'is-owner'       => 'Is Owner',
                    'no'             => 'No',
                    'out-of-stock'   => 'Out Of Stock',
                    'price'          => 'Price',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Product Name',
                    'product-number' => 'Product Number',
                    'product-type'   => 'Product Type',
                    'quantity'       => 'Quantity',
                    'seller-name'    => 'Seller Name',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'total-flags'    => 'Total Flags: :count',
                    'total-quantity' => ':quantity Available',
                    'update-status'  => 'Update Status',
                    'yes'            => 'Yes',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Product Flags',

                    'datagrid' => [
                        'customer-email' => 'Customer Email',
                        'customer-name'  => 'Customer Name',
                        'date'           => 'Date',
                        'id'             => 'Id',
                        'reason'         => 'Reason',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Review Details',
                'title'          => 'Product Reviews',

                'datagrid' => [
                    'approved'      => 'Approved',
                    'comment'       => 'Comment',
                    'customer-name' => 'Customer Name',
                    'date'          => 'Date',
                    'disapproved'   => 'Disapproved',
                    'id'            => 'Id',
                    'images'        => 'Images',
                    'pending'       => 'Pending',
                    'product'       => 'Product',
                    'product-name'  => 'Product Name',
                    'rating'        => 'Rating',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Shop Title',
                    'status'        => 'Status',
                    'title'         => 'Title',
                    'view'          => 'View',
                    'update-status' => 'Update Status',
                ],
            ],

            'update-success' => 'Product reviews updated successfully.',
            'delete-success' => 'Product reviews deleted successfully.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Seller Reviews',

                'datagrid' => [
                    'approved'            => 'Approved',
                    'comment'             => 'comment',
                    'customer-name'       => 'Customer Name',
                    'date'                => 'Date',
                    'delete'              => 'Delete',
                    'disapproved'         => 'Disapproved',
                    'id'                  => 'Id',
                    'mass-delete-success' => 'Seller reviews deleted successfully.',
                    'mass-update-success' => 'Seller reviews updated successfully.',
                    'pending'             => 'Pending',
                    'rating'              => 'Rating',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Review Title',
                    'seller-name'         => 'Seller Name',
                    'shop-title'          => 'Shop Title',
                    'status'              => 'Status',
                    'update-status'       => 'Update Status',
                ],
            ],

            'delete-success' => 'Seller review deleted successfully.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Orders',

                'datagrid' => [
                    'canceled'        => 'Canceled',
                    'closed'          => 'Closed',
                    'commission'      => 'Commission',
                    'completed'       => 'Completed',
                    'customer'        => 'Customer',
                    'date'            => 'Date',
                    'discount'        => 'Discount',
                    'email'           => 'Email',
                    'fraud'           => 'Fraud',
                    'gross-amt'       => 'Gross Amt.',
                    'id'              => 'Id',
                    'items'           => 'Items',
                    'location'        => 'Location',
                    'order-id'        => 'ID - #:id',
                    'payment'         => 'Payment',
                    'pending'         => 'Pending',
                    'pending-payment' => 'Pending Payment',
                    'processing'      => 'Processing',
                    'seller'          => 'Seller',
                    'seller-earn'     => 'Earn',
                    'shipment'        => 'Shipment',
                    'shop'            => 'Shop',
                    'status'          => 'Status',
                    'view'            => 'View',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transactions',

                'datagrid' => [
                    'base-total'     => 'Base Total',
                    'comment'        => 'Comment',
                    'customer-name'  => 'Customer Name',
                    'id'             => 'Id',
                    'seller-id'      => 'Seller Id',
                    'seller-name'    => 'Seller Name',
                    'transaction-id' => 'Transaction Id',
                    'view'           => 'View',
                ],
            ],

            'view' => [
                'commission'        => 'Commission',
                'created-on'        => 'created on :date,',
                'name'              => 'Name',
                'payment-method'    => ':method Payment',
                'price'             => 'Price',
                'qty'               => 'Qty',
                'seller-total'      => 'Seller Total',
                'shipping-handling' => 'Shipping & Handling',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Tax',
                'title'             => 'Transactions #:transaction_id',
                'total'             => 'Total',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Create Reason',
                'delete-success'      => 'Flag Reason deleted successfully.',
                'mass-delete-success' => 'Flag Reasons deleted successfully.',
                'mass-update-success' => 'Flag Reasons updated successfully.',
                'title'               => 'Flag Reasons',

                'datagrid' => [
                    'delete'        => 'Delete',
                    'edit'          => 'Edit',
                    'id'            => 'Id',
                    'name'          => 'Name',
                    'update-status' => 'Update Status',

                    'status' => [
                        'active'  => 'Active',
                        'disable' => 'Disable',
                        'title'   => 'Status',
                    ],

                    'type' => [
                        'product' => 'Product',
                        'seller'  => 'Seller',
                        'title'   => 'Type',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Back',
                'general'  => 'General',
                'label'    => 'Label',
                'product'  => 'Product',
                'save-btn' => 'Save Reason',
                'seller'   => 'Seller',
                'status'   => 'Status',
                'title'    => 'Create Reason',
                'type'     => 'Type',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Back',
                'general'  => 'General',
                'label'    => 'Label',
                'product'  => 'Product',
                'save-btn' => 'Save Reason',
                'seller'   => 'Seller',
                'status'   => 'Status',
                'title'    => 'Edit Reason',
                'type'     => 'Type',
            ],

            'create-success' => 'Flag Reason created successfully.',
            'update-success' => 'Flag Reason updated successfully.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Assign Category',
                'create-success' => 'Category assigned Successfully.',
                'delete-failed'  => 'Seller flag Reason deletion failed!',
                'delete-success' => 'Category Deleted Successfully.',
                'title'          => 'Seller Categories',
                'update-success' => 'Category Updated Successfully.',

                'datagrid' => [
                    'delete' => 'Delete',
                    'edit'   => 'Edit',
                    'id'     => 'Id',
                    'name'   => 'Name',
                ],
            ],

            'create' => [
                'back-btn'      => 'Back',
                'save-btn'      => 'Save Category',
                'select-seller' => 'Select Seller',
                'seller'        => 'Seller',
                'title'         => 'Assign Category',
            ],

            'edit' => [
                'back-btn'   => 'Back',
                'seller'     => 'Seller',
                'title'      => 'Edit Category',
                'update-btn' => 'Update Category',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Comment',
                'no-amount-remaining'  => 'No amount remaining to pay!',
                'order-not-found'      => 'Order Not Found!',
                'pay-btn'              => 'Pay Now',
                'pay-to-seller'        => 'Payment to Seller',
                'payment-success'      => 'Seller is Paid successfully!',
                'something-went-wrong' => 'Something Went Wrong!',
                'title'                => 'Payment Request',

                'datagrid' => [
                    'already-paid'          => 'Already Paid',
                    'canceled'              => 'Canceled',
                    'closed'                => 'Closed',
                    'completed'             => 'Completed',
                    'customer-name'         => 'Customer Name',
                    'date'                  => 'Date',
                    'email'                 => 'Email',
                    'fraud'                 => 'Fraud',
                    'gross-amt'             => 'Gross Amt.',
                    'id'                    => 'Order Id',
                    'invoice-pending'       => 'Invoice Pending',
                    'order-canceled'        => 'Order Canceled',
                    'order-id'              => 'Id #:id',
                    'pay'                   => 'Pay',
                    'pending'               => 'Pending',
                    'pending-payment'       => 'Pending Payment',
                    'processing'            => 'Processing',
                    'refunded'              => 'Refunded',
                    'remaining-total'       => 'Remaining Total',
                    'request-payment'       => 'Request Payment',
                    'seller'                => 'Seller',
                    'seller-total-invoiced' => 'Seller Total Invoiced',
                    'shop'                  => 'Shop',
                    'status'                => 'Status',
                    'total-paid'            => 'Total Paid',
                    'view'                  => 'View',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Block Seller',
                'block-success'        => 'Seller Blocked Successfully!',
                'chat-history-cleared' => 'Chat History Cleared Successfully!',
                'clear-chat-history'   => 'Clear Chat History',
                'exit'                 => 'Exit',
                'message-failed'       => 'Message sending failed!',
                'message-sent'         => 'Message sent successfully!',
                'no-message'           => 'No Message Found!',
                'search'               => 'Search',
                'search-message'       => 'Search Message',
                'seller-blocked'       => 'You have blocked this seller. You can\'t send message to this seller.',
                'sellers'              => 'Sellers',
                'title'                => 'Communications',
                'type-message'         => 'Type your message Here...',
                'unblock-seller'       => 'Unblock Seller',
                'unblock-success'      => 'Seller Unblocked Successfully!',
                'welcome-message'      => 'Welcome to the Marketplace Communication!',

                'filters' => [
                    'all-messages'      => 'All Messages',
                    'prev-fifteen-days' => 'Previous 15 Days',
                    'prev-seven-days'   => 'Previous 7 Days',
                    'prev-six-months'   => 'Previous 6 Months',
                    'prev-thirty-days'  => 'Previous 30 Days',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Inventory Sources',

                'datagrid' => [
                    'active'      => 'Active',
                    'code'        => 'Code',
                    'id'          => 'Id',
                    'inactive'    => 'Inactive',
                    'name'        => 'Name',
                    'seller-name' => 'Seller Name',
                    'shop-title'  => 'Shop Title',
                    'status'      => 'Status',
                ],

                'view' => [
                    'active'         => 'Active',
                    'address'        => 'Source Address',
                    'city'           => 'City',
                    'code'           => 'Code',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contact Information',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Contact Number',
                    'country'        => 'Country',
                    'description'    => 'Description',
                    'general-info'   => 'General Information',
                    'inactive'       => 'Inactive',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Name',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Priority',
                    'seller-info'    => 'Seller Information',
                    'seller-name'    => 'Seller Name',
                    'settings'       => 'Settings',
                    'shop-title'     => 'Shop Title',
                    'state'          => 'State',
                    'street'         => 'Street',
                    'title'          => 'Inventory Source #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Install the Marketplace package.',
            'migrate'     => 'Migrating all tables into database (will take a while)...',
            'seed'        => 'Seeding data into database...',
            'publish'     => 'Publishing assets and configurations...',
            'cache'       => 'Clearing cache...',
            'finish'      => 'Marketplace package installed successfully.',
        ],

        'version' => [
            'description' => 'Displays the current version of the Marketplace package.',
            'comment'     => 'Marketplace Version: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Dear :customer_name',
        'dear-admin'  => 'Dear Admin',
        'dear-seller' => 'Dear Seller',

        'seller' => [
            'registration' => [
                'date'        => 'Registration Date:',
                'description' => 'We\'re thrilled to inform you about a new seller registration on our platform. Please take a moment to welcome seller to our platform.',
                'details'     => 'Here are the details:',
                'email'       => 'Email Address:',
                'greeting'    => 'I hope this message finds you well.',
                'name'        => 'Seller Name:',
                'shop'        => 'Shop URL:',
                'subject'     => 'New Seller Registration',
            ],

            'forgot-password' => [
                'description'    => 'You are receiving this email because we received a password reset request for your account.',
                'greeting'       => 'Forgot Password!',
                'reset-password' => 'Reset Password',
                'subject'        => 'Reset Password Email',
            ],

            'welcome' => [
                'description' => 'Welcome aboard! We are thrilled to have you join the family. Your presence as a seller adds immense value to our platform, and we look forward to a successful partnership.',
                'greeting'    => 'Welcome and thank you for registering with us!',
                'subject'     => 'Seller Welcome Notification',
            ],

            'approval' => [
                'approved'    => 'your request to become a seller has been accepted.',
                'disapproved' => 'your request to become a seller has been rejected.',
                'greeting'    => 'Welcome and thank you for registering with us!',
                'subject'     => 'Seller Approval Notification',
            ],

            'update' => [
                'description' => 'your profile has been successfully updated.',
                'greeting'    => 'I hope this message finds you well.',
                'subject'     => 'Seller Profile Update Notification',
            ],

            'good-bye' => [
                'description' => 'Working with you has been a pleasure, and I am truly thankful for your professionalism, dedication, and the high quality of your products/services. Your commitment to ensuring customer satisfaction has not gone unnoticed, and it has been a key factor in our positive experience.',
                'greeting'    => 'I trust this message finds you well.',
                'subject'     => 'Seller Good Bye Notification',
            ],

            'product-approval' => [
                'approved'    => 'Your product :name has been approved.',
                'disapproved' => 'Your product :name has been disapproved.',
                'greeting'    => 'Welcome and thank you for registering with us!',
                'subject'     => 'Seller Product Approval Notification',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'You have a new Order :order_id placed on :created_at',
                    'subject'  => 'New Order Confirmation',
                    'summary'  => 'Summary of Order',
                    'title'    => 'Order Confirmation!',
                ],

                'canceled' => [
                    'greeting' => 'Order :order_id has been canceled',
                    'subject'  => 'Order Cancellation Confirmation',
                    'summary'  => 'Summary of Order',
                    'title'    => 'Order Cancellation!',
                ],

                'billing-address'   => 'Billing Address',
                'contact'           => 'Contact',
                'discount'          => 'Discount',
                'grand-total'       => 'Grand Total',
                'name'              => 'Name',
                'payment'           => 'Payment',
                'price'             => 'Price',
                'qty'               => 'Qty',
                'shipping'          => 'Shipping',
                'shipping-address'  => 'Shipping Address',
                'shipping-handling' => 'Shipping Handling',
                'sku'               => 'SKU',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Tax',
            ],

            'payment-request' => [
                'greeting'  => 'I trust this message finds you well.',
                'paid'      => 'Hi.. You received payment for the order :order_id.',
                'requested' => 'Seller :seller_name is requested for the payment of order :order_id.',
                'subject'   => 'Seller Payment Request Notification',
            ],
        ],

        'contact-seller' => [
            'email'    => 'Email:- :email',
            'greeting' => 'I hope this message finds you well.',
            'info'     => 'Hello, :name has a question for you. Kindly review the details below.',
            'query'    => 'Query:- :query',
            'subject'  => 'Seller Contact Notification',
            'topic'    => 'Subject:- :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Hello, ":name" has reported an issue against seller ":seller_name" product ":product_name". Kindly review the details below.',
            'greeting'   => 'I trust this message finds you well.',
            'reason'     => 'Reason:- :reason',
            'seller-msg' => 'Hello, ":name" has reported an issue concerning your product ":product_name". Please review the details below.',
            'subject'    => 'Product Report Notification',
        ],

        'report-seller' => [
            'admin-msg'  => 'Hello, :name has reported an issue against :seller_name. Kindly review the details below.',
            'greeting'   => 'I trust this message finds you well.',
            'reason'     => 'Reason:- :reason',
            'seller-msg' => 'Hello, :name has reported an issue concerning you. Please review the details below.',
            'subject'    => 'Seller Report Notification',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Create a Velocity seller account',
            'banner-description'  => 'Velocity can be a great platform for selling your products to new-age businesses in India. By following these tips, you can set yourself up for success as a Velocity seller!',
            'banner-btn-title'    => 'Open Store',
            'feature-title'       => 'Why do sellers love to sell on velocity?',
            'feature-description' => 'sellers love high-velocity platforms because they offer the potential for increased sales, better exposure, and an efficient selling experience that can contribute to business growth and success.',
            'feature-box1-title'  => 'Increased Sales Opportunities',
            'feature-box1-desc'   => 'sellers love high-velocity platforms because they offer the potential for increased sales, better exposure, and an efficient selling experience that can contribute to business growth and success.',
            'feature-box2-title'  => 'Faster Turnaround',
            'feature-box2-desc'   => 'Products tend to sell more quickly on high-velocity platforms, leading to faster inventory turnover and revenue generation for sellers.',
            'feature-box3-title'  => 'Enhanced Visibility',
            'feature-box3-desc'   => 'These platforms offer greater visibility and exposure for seller products, resulting in more views and potential sales.',
            'feature-box4-title'  => 'Efficiency and Convenience',
            'feature-box4-desc'   => 'High-velocity platforms often have streamlined processes and tools that make selling more efficient, saving sellers time and effort in managing their online businesses.',
            'journey-title'       => 'Start your journey on velocity',
            'journey-description' => 'Start selling with large customers around the world, round the clock.',
            'journey-step1-title' => 'Become Seller',
            'journey-step1-desc'  => 'Setup your store, with all the basic information.',
            'journey-step2-title' => 'List Products',
            'journey-step2-desc'  => 'List the products in store for the customer to view and purchase.',
            'journey-step3-title' => 'Receive Order',
            'journey-step3-desc'  => 'Receive orders from a wide range of customers around the world.',
            'journey-step4-title' => 'Product Delivery',
            'journey-step4-desc'  => 'Once the product is delivered and payment received',
            'journey-step5-title' => 'Payment',
            'journey-step5-desc'  => 'Payment request, get payment after the commission cut.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Damaged product',
            'damaged-product-sold'      => 'Damaged product sold by seller',
            'duplicate-product'         => 'Duplicate product',
            'duplicate-product-sold'    => 'Duplicate product sold by seller',
            'missing-product-parts'     => 'Missing product parts',
            'over-price-product'        => 'Over price product',
            'over-price-product-sold'   => 'Over price product sold by seller',
            'poor-product-quality'      => 'Poor product quality',
            'poor-product-quality-sold' => 'Poor product quality sold by seller',
            'receive-wrong-product'     => 'Receive wrong product',
            'wrong-product-sold'        => 'Wrong product sold by seller',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Download',
                    'export'     => 'Export',
                    'no-records' => 'Nothing to export',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Home Page',
                    'logout'     => 'Logout',
                    'my-profile' => 'My Profile',
                    'visit-shop' => 'Visit Shop',

                    'mega-search' => [
                        'customers'                      => 'Customers',
                        'explore-all-customers'          => 'Explore all customers',
                        'explore-all-matching-customers' => 'Explore all customers matching “:query” (:count)',
                        'explore-all-matching-orders'    => 'Explore all Orders matching “:query” (:count)',
                        'explore-all-matching-products'  => 'Explore all products matching “:query” (:count)',
                        'explore-all-orders'             => 'Explore all Orders',
                        'explore-all-products'           => 'Explore all products',
                        'orders'                         => 'Orders',
                        'products'                       => 'Products',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'Mega Search',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Collapse',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Add Image',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Only images files (.jpeg, .jpg, .png, ..) are allowed.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Add Video',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Only videos files (.mp4, .mov, .ogg ..) are allowed.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Add Document',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Only document files (:types ..) are allowed.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Front',
                    'next'       => 'Next',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'Powerpoint',
                    'size'       => 'Size',
                    'text'       => 'Text',
                    'use-cases'  => 'Use Cases',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Bookings',
            'communication'     => 'Communication',
            'customers'         => 'Customers',
            'dashboard'         => 'Dashboard',
            'extensions'        => 'Extensions',
            'general'           => 'General',
            'inventory-sources' => 'Inventory Sources',
            'manage-profile'    => 'Manage Profile',
            'orders'            => 'Orders',
            'product-reviews'   => 'Product Reviews',
            'products'          => 'Products',
            'reporting'         => 'Reporting',
            'roles'             => 'Roles',
            'sales'             => 'Sales',
            'seller-reviews'    => 'Seller Reviews',
            'settings'          => 'Settings',
            'transaction'       => 'Transaction',
            'users'             => 'Users',
        ],

        'acl' => [
            'assign'            => 'Assign',
            'bookings'          => 'Bookings',
            'cancel'            => 'Cancel',
            'communication'     => 'Communication',
            'create'            => 'Create',
            'customers'         => 'Customers',
            'dashboard'         => 'Dashboard',
            'delete'            => 'Delete',
            'edit'              => 'Edit',
            'extensions'        => 'Extensions',
            'general'           => 'General',
            'inventory-sources' => 'Inventory Sources',
            'invoice'           => 'Invoice',
            'orders'            => 'Orders',
            'payment-request'   => 'Payment Request',
            'print'             => 'Print',
            'print-invoice'     => 'Print Invoice',
            'product-reviews'   => 'Product Reviews',
            'products'          => 'Products',
            'reporting'         => 'Reporting',
            'sales'             => 'Sales',
            'seller-reviews'    => 'Seller Reviews',
            'settings'          => 'Settings',
            'shipment'          => 'Shipment',
            'transactions'      => 'Transactions',
            'view'              => 'View',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Add New Product',
            'assign'            => 'Assign',
            'bookings'          => 'Bookings',
            'communication'     => 'Communication',
            'create'            => 'Create',
            'customers'         => 'Customers',
            'dashboard'         => 'Dashboard',
            'edit'              => 'Edit',
            'extensions'        => 'Extensions',
            'general'           => 'General',
            'inventory-sources' => 'Inventory Sources',
            'manage-profile'    => 'Manage Profile',
            'orders'            => 'Orders',
            'product-reviews'   => 'Product Reviews',
            'products'          => 'Products',
            'reporting'         => 'Reporting',
            'roles'             => 'Roles',
            'sales'             => 'Sales',
            'seller-reviews'    => 'Seller Reviews',
            'settings'          => 'Settings',
            'title'             => 'Profile',
            'transaction'       => 'Transaction',
            'users'             => 'Users',
            'view'              => 'View',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Sign In',
            'create-your-account' => 'Create your account',
            'email'               => 'Email',
            'footer'              => '© Copyright :current_year, Panaby. All rights reserved.',
            'forgot-pass'         => 'Forgot Password?',
            'form-login-text'     => 'If you have an account, sign in with your email address.',
            'invalid-credentials' => 'Please check your credentials and try again.',
            'new-seller'          => 'New seller?',
            'not-approved'        => 'Your activation seeks admin approval',
            'page-title'          => 'Seller Login',
            'password'            => 'Password',
            'show-password'       => 'Show Password',
            'suspended-message'   => 'Your account has been suspended. Contact to admin for any query.',
            'title'               => 'Sign In',
        ],

        'signup' => [
            'account-exists'   => 'Already have an account ?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Register',
            'confirm-pass'     => 'Confirm Password',
            'email'            => 'Email',
            'footer'           => '© Copyright :current_year, Panaby. All rights reserved.',
            'form-signup-text' => 'If you are new to our store, we glad to have you as member.',
            'name'             => 'Name',
            'page-title'       => 'Become Seller',
            'password'         => 'Password',
            'sign-in-button'   => 'Sign In',
            'success'          => 'Account created successfully.',
            'url'              => 'Shop Url',
        ],

        'forgot-password' => [
            'already-sent'         => 'We have already e-mailed your password reset link.',
            'back'                 => 'Back to sign In ?',
            'bagisto'              => 'Bagisto',
            'email'                => 'Email',
            'email-not-exist'      => 'We cannot find a user with that email address.',
            'footer'               => '© Copyright :current_year, Panaby. All rights reserved.',
            'forgot-password-text' => 'If you forgot your password, recover it by entering your email address.',
            'page-title'           => 'Forgot your password ?',
            'reset-link-sent'      => 'We have e-mailed your reset password link.',
            'sign-in-button'       => 'Sign In',
            'submit'               => 'Reset Password',
            'title'                => 'Recover Password',
        ],

        'reset-password' => [
            'back-link-title'  => 'Back to Sign In',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Confirm Password',
            'email'            => 'Registered Email',
            'footer'           => '© Copyright :current_year, Panaby. All rights reserved.',
            'password'         => 'Password',
            'submit-btn-title' => 'Reset Password',
            'title'            => 'Reset Password',
        ],

        'dashboard' => [
            'add-product'           => 'Add Product',
            'avg-order-sell'        => 'Average Order Sell',
            'category-info'         => 'No category found for a selected interval',
            'complete-profile-link' => 'Complete Your Profile &rarr;',
            'completed-orders'      => 'Completed (:count)',
            'customer-info'         => 'No customer found for a selected interval',
            'date-range'            => 'Date Range',
            'empty-threshold'       => 'Empty Threshold',
            'empty-threshold-desc'  => 'There is no product available',
            'end-date'              => 'End Date',
            'hi-comment'            => 'Quickly review what\'s going on in your store.',
            'hi-seller'             => 'Hi! :seller_name',
            'month'                 => 'This Month',
            'no-category'           => 'No Data Available',
            'no-customer'           => 'No Data Available',
            'no-record-available'   => 'No Records Available.',
            'order-count'           => ':total Orders',
            'overall-details'       => 'OverAll Details',
            'pending-orders'        => 'Pending (:count)',
            'per-unit'              => ':price/Unit',
            'processing-orders'     => 'Processing (:count)',
            'product-info'          => 'Add related products on the go',
            'profile-score'         => 'Profile Score',
            'profile-score-desc'    => 'Maximize your visibility by keeping your profile information complete.',
            'qty-stock'             => ':qty stock',
            'refunded-orders'       => 'Refunded (:count)',
            'remaining-payout'      => 'Remaining Payout',
            'start-date'            => 'Start Date',
            'stock-threshold'       => 'Stock Threshold',
            'title'                 => 'Dashboard',
            'today'                 => 'Today',
            'top-categories'        => 'Top Categories',
            'top-customers'         => 'Customer with most sales',
            'top-products'          => 'Top Selling Products',
            'total-customers'       => 'Total Customers',
            'total-orders'          => 'Total Orders',
            'total-payout'          => 'Total Payout',
            'total-sale'            => ':total Sale',
            'total-sales'           => 'Total Sales',
            'view-all-btn'          => 'View All',
            'visitor-count'         => 'Visitor - :count',
            'week'                  => 'This Week',
            'year'                  => 'This Year',
        ],

        'orders' => [
            'index' => [
                'title' => 'Orders',

                'datagrid' => [
                    'canceled'        => 'Canceled',
                    'closed'          => 'Closed',
                    'commission'      => 'Commission',
                    'completed'       => 'Completed',
                    'customer'        => 'Customer',
                    'date'            => 'Date',
                    'discount'        => 'Discount',
                    'email'           => 'Email',
                    'fraud'           => 'Fraud',
                    'gross-amt'       => 'Gross Amt.',
                    'id'              => 'Id',
                    'invoice-pending' => 'Invoice Pending',
                    'items'           => 'Items',
                    'location'        => 'Location',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Paid',
                    'payment'         => 'Payment',
                    'payment-request' => 'Payment Request',
                    'pending'         => 'Pending',
                    'pending-payment' => 'Pending Payment',
                    'processing'      => 'Processing',
                    'refunded'        => 'Refunded',
                    'requested'       => 'Requested',
                    'seller-earn'     => 'Seller Earn',
                    'shipment'        => 'Shipment',
                    'status'          => 'Status',
                    'transaction'     => 'Transaction',
                    'view'            => 'View',
                ],

                'payment-req-success'  => 'Your payment request is submitted successfully',
                'something-went-wrong' => 'Something Went Wrong!',
            ],

            'view' => [
                'admin-commission'           => 'Admin Commission',
                'billing-address'            => 'Billing Address',
                'by-customer'                => 'By Customer - :name',
                'cancel-btn'                 => 'Cancel',
                'cancel-confirm-msg'         => 'Are you sure you want to cancel this order ?',
                'cancel-error-msg'           => 'Order can not be canceled',
                'cancel-success-msg'         => 'Order has been canceled',
                'canceled'                   => 'Canceled',
                'closed'                     => 'Closed',
                'completed'                  => 'Completed',
                'discount'                   => 'Discount',
                'fraud'                      => 'Fraud',
                'grand-total'                => 'Grand Total',
                'info'                       => 'Information',
                'item-canceled'              => 'Canceled (:qty_canceled)',
                'item-invoice'               => 'Invoiced (:qty_invoiced)',
                'item-ordered'               => 'Ordered (:qty_ordered)',
                'item-refunded'              => 'Refunded (:qty_refunded)',
                'item-shipped'               => 'shipped (:qty_shipped)',
                'item-status'                => 'Item Status',
                'payment-method'             => 'Payment Method',
                'pending'                    => 'Pending',
                'pending_payment'            => 'Pending Payment',
                'permission-error'           => 'You do not have permission to cancel the order',
                'place-on'                   => 'Place On : :date',
                'price'                      => 'Price',
                'price-excl-tax'             => 'Price (Excl. Tax)',
                'price-incl-tax'             => 'Price (Incl. Tax)',
                'processing'                 => 'Processing',
                'product'                    => 'Product',
                'shipping-address'           => 'Shipping Address',
                'shipping-handling'          => 'Shipping & Handling',
                'shipping-handling-excl-tax' => 'Shipping & Handling (Excl. Tax)',
                'shipping-handling-incl-tax' => 'Shipping & Handling (Incl. Tax)',
                'shipping-method'            => 'Shipment Method',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Sub Total',
                'sub-total-excl-tax'         => 'Sub Total (Excl. Tax)',
                'sub-total-incl-tax'         => 'Sub Total (Incl. Tax)',
                'tax'                        => 'Tax',
                'tax-amount'                 => 'Tax Amount',
                'tax-percent'                => 'Tax Percent',
                'title'                      => 'Order #:order_id',
                'total'                      => 'Total',
                'total-due'                  => 'Total Due',
                'total-paid'                 => 'Total Paid',
                'total-refunded'             => 'Total Refunded',
                'total-seller-amt'           => 'Total Seller Amount',

                'invoices' => [
                    'bank-details'               => 'Bank Details',
                    'bill-to'                    => 'Bill to',
                    'contact'                    => 'Contact',
                    'contact-number'             => 'Contact Number',
                    'created-on'                 => 'created on: :date_time',
                    'date'                       => 'Invoice Date',
                    'discount'                   => 'Discount',
                    'excl-tax'                   => 'Excl. Tax:',
                    'grand-total'                => 'Grand Total',
                    'individual-invoice'         => 'Invoice #:invoice_id',
                    'invoice'                    => 'Invoice',
                    'invoice-id'                 => 'Invoice ID',
                    'name'                       => 'Name',
                    'order-date'                 => 'Order Date',
                    'order-id'                   => 'Order ID',
                    'payment-method'             => 'Payment Method',
                    'payment-terms'              => 'Payment Terms',
                    'price'                      => 'Price',
                    'print'                      => 'Print',
                    'product-name'               => 'Product Name',
                    'qty'                        => 'Qty',
                    'ship-to'                    => 'Ship to',
                    'shipping-handling'          => 'Shipping & Handling',
                    'shipping-handling-excl-tax' => 'Shipping & Handling (Excl. Tax)',
                    'shipping-handling-incl-tax' => 'Shipping & Handling (Incl. Tax)',
                    'shipping-method'            => 'Shipping Method',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotal',
                    'sub-total-excl-tax'         => 'Sub Total (Excl. Tax)',
                    'sub-total-incl-tax'         => 'Sub Total (Incl. Tax)',
                    'tax'                        => 'Tax',
                    'tax-amount'                 => 'Tax Amount',
                    'title'                      => 'Invoices',
                    'vat-number'                 => 'Vat Number',
                ],

                'shipments' => [
                    'carrier-title'       => 'Carrier Title',
                    'created-on'          => 'created on :date_time',
                    'individual-shipment' => 'Shipments #:track_number',
                    'inventory-source'    => 'Inventory Source',
                    'name'                => 'Name',
                    'qty'                 => 'Qty',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Shipments',
                    'tracking-number'     => 'Tracking Number',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Adjustment Fee',
                    'adjustment-refund'          => 'Adjustment Refund',
                    'created-on'                 => 'created on :date_time',
                    'discount'                   => 'Discount',
                    'grand-total'                => 'Grand Total',
                    'individual-refund'          => 'Refund #:refund_id',
                    'no-result-found'            => 'We could not find any records.',
                    'price'                      => 'Price',
                    'product-name'               => 'Name',
                    'qty'                        => 'Qty',
                    'shipping-handling'          => 'Shipping & Handling',
                    'shipping-handling-excl-tax' => 'Shipping & Handling (Excl. Tax)',
                    'shipping-handling-incl-tax' => 'Shipping & Handling (Incl. Tax)',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotal',
                    'sub-total-excl-tax'         => 'Sub Total (Excl. Tax)',
                    'sub-total-incl-tax'         => 'Sub Total (Incl. Tax)',
                    'tax'                        => 'Tax',
                    'tax-amount'                 => 'Tax Amount',
                    'title'                      => 'Refunds',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Invoice',
                'invoice-success'  => 'Invoice created successfully',
                'permission-error' => 'You do not have permission to create order invoice',
                'price'            => 'Price',
                'product-name'     => 'Product Name',
                'qty'              => 'Qty',
                'qty-error'        => 'Requested quantity is not available',
                'sub-total'        => 'Invoice <br> Subtotal',
                'title'            => 'Create Invoice',
                'total'            => 'Total',
            ],

            'shipments' => [
                'avl-qty'          => 'Avail.- :qty Qty',
                'carrier-title'    => 'Carrier Title',
                'create-btn'       => 'Ship',
                'ordered-qty'      => 'Ordered Qty',
                'permission-error' => 'You do not have permission to create shipment',
                'product-name'     => 'Product Name',
                'qty'              => 'Qty',
                'qty-error'        => 'Requested quantity is not available',
                'shipment-success' => 'Shipment created successfully',
                'shipped-qty'      => 'Shipped Qty',
                'sku'              => 'SKU - :sku',
                'source'           => 'Product Ordered Source',
                'title'            => 'Create Shipment',
                'tracking-id'      => 'Tracking ID',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Created Date',
                    'from'         => 'From',
                    'id'           => 'ID',
                    'order-id'     => 'Order ID',
                    'qty'          => 'QTY',
                    'to'           => 'To',
                    'view'         => 'View',
                ],

                'title'    => 'Bookings',
            ],

            'calendar' => [
                'booking-date'     => 'Booking Date',
                'booking-details'  => 'Booking Details',
                'canceled'         => 'Canceled',
                'closed'           => 'Closed',
                'done'             => 'Done',
                'order-id'         => 'Order Id',
                'pending'          => 'Pending',
                'price'            => 'Price',
                'status'           => 'Status',
                'time-slot'        => 'Time Slot:',
                'view-details'     => 'View Details',
            ],

            'title' => 'Bookings Product',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Remaining Payout',
                'title'                  => 'Transactions',
                'total-payout'           => 'Total Payout',
                'total-seller-sale'      => 'Total Sale (Seller)',
                'total-admin-commission' => 'Total Commission (Admin)',
                'total-sale-invoiced'    => 'Total Sale (Invoiced)',

                'datagrid' => [
                    'comment'          => 'Comment',
                    'id'               => 'Id',
                    'total'            => 'Total',
                    'transaction-id'   => 'Transaction Id',
                ],
            ],

            'view' => [
                'commission'        => 'Commission',
                'created-on'        => 'created on :date,',
                'date'              => 'Date',
                'id'                => 'Transaction Id',
                'method'            => 'Method',
                'name'              => 'Name',
                'payment-method'    => ':method Payment',
                'price'             => 'Price',
                'print'             => 'Print',
                'qty'               => 'Qty',
                'seller-total'      => 'Seller Total',
                'shipping-handling' => 'Shipping & Handling',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Tax',
                'title'             => 'Transaction',
                'total'             => 'Total',
                'transaction-id'    => 'Transaction #:transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'Add New Product',
                'title'             => 'Products',

                'datagrid' => [
                    'active'         => 'Active',
                    'approved'       => 'Approved',
                    'category'       => 'Category',
                    'delete'         => 'Delete',
                    'disable'        => 'Disable',
                    'disapproved'    => 'Disapproved',
                    'edit'           => 'Edit',
                    'id'             => 'ID',
                    'image'          => 'Image',
                    'is-approved'    => 'Is Approved',
                    'name'           => 'Name',
                    'out-of-stock'   => 'Out Of Stock',
                    'price'          => 'Price',
                    'product-number' => 'Product Number',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'stock'          => 'Stock',
                    'total-quantity' => ':quantity Available',
                    'type'           => 'Type',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Attribute Family',
                'back'                      => 'Back',
                'continue'                  => 'Continue',
                'create-new-product'        => 'Create New Products',
                'create-your-new-product'   => "If product doesn't exist, create your new product",
                'disable-product-message'   => 'Admin disabled the functionality for create or assign products.',
                'image-placeholder'         => 'Your Image',
                'no-result'                 => 'No Result',
                'not-allowed'               => 'You are not allowed to create product',
                'or'                        => 'Or',
                'product-type'              => 'Product Type',
                'search-product'            => 'Search Products',
                'sell-admin-product-prices' => 'Sell admin product at your prices.',
                'sell-as-yours'             => 'Sell as Yours',
                'sku'                       => 'SKU',
                'sub-title'                 => 'You can add product in 2 ways, either from admin product or create your own.',
                'title'                     => 'Add New Product',
                'update-profile'            => 'Please update your profile details',
            ],

            'edit' => [
                'remove'        => 'Remove',
                'save-btn'      => 'Save Product',
                'back-btn'      => 'Back',
                'preview'       => 'Preview',
                'title'         => 'Edit Product',
                'channels'      => 'Channels',
                'progress-info' => 'Enhance your product\'s appeal and leave a lasting impression on customers by ensuring all product details are complete and accurate!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Add Group Price',
                        'all-groups'                => 'All Groups',
                        'create-btn'                => 'Add New',
                        'discount-group-price-info' => 'For :qty Qty at discount of :price',
                        'edit-btn'                  => 'Edit',
                        'empty-info'                => 'Special pricing for customers belonging to a specific group.',
                        'fixed-group-price-info'    => 'For :qty Qty at fixed price of :price',
                        'title'                     => 'Customer Group Price',

                        'create' => [
                            'all-groups'     => 'All Groups',
                            'create-title'   => 'Create Customer Group Price',
                            'customer-group' => 'Customer Group',
                            'delete-btn'     => 'Delete',
                            'discount'       => 'Discount',
                            'fixed'          => 'Fixed',
                            'price'          => 'Price',
                            'price-type'     => 'Price Type',
                            'qty'            => 'Qty',
                            'save-btn'       => 'Save',
                            'update-title'   => 'Update Customer Group Price',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Pending Ordered Qty: :qty',
                    'pending-ordered-qty-info' => 'Pending Ordered quantity will be deducted from the respective inventory source after the shipment. In case of cancellation pending quantity will be available for sale.',
                    'title'                    => 'Inventories',
                ],

                'categories' => [
                    'title' => 'Categories',
                ],

                'images' => [
                    'info'  => 'Image resolution should be like 609px X 560px',
                    'title' => 'Images',
                ],

                'videos' => [
                    'error' => 'The video may not be greater than :max kilobytes. Please choose a smaller file.',
                    'info'  => 'Maximum video size should be like :size',
                    'title' => 'Videos',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Add related products on the go.',
                        'info'       => 'In addition to the product the customer is viewing, they are presented with related products.',
                        'title'      => 'Related Products',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Add up sells products on the go.',
                        'info'       => 'The customer is presented with an up-sell products, which serves as a premium or higher-quality alternative to the product they are currently viewing.',
                        'title'      => 'Up-Sell Products',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Add cross sells products on the go.',
                        'info'       => 'Adjacent to the shopping cart, you\'ll find these \"impulse-buy\" products positioned as cross-sells to complement the items already added to your cart.',
                        'title'      => 'Cross-Sell Products',
                    ],

                    'add-btn'           => 'Add Product',
                    'delete'            => 'Delete',
                    'empty-info'        => 'To add :type products on a go.',
                    'empty-title'       => 'Add Product',
                    'image-placeholder' => 'Product Image',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Add Option',
                            'empty-info'        => 'To create customizable options on a go.',
                            'empty-title'       => 'Add Option',
                            'info'              => 'This will customize the simple product.',
                            'title'             => 'Customizable Item',

                            'update-create' => [
                                'is-required'               => 'Is Required',
                                'max-characters'            => 'Max Characters',
                                'name'                      => 'Title',
                                'no'                        => 'No',
                                'price'                     => 'Price',
                                'save-btn'                  => 'Save',
                                'supported-file-extensions' => 'Supported File Extensions',
                                'title'                     => 'Option',
                                'type'                      => 'Type',
                                'yes'                       => 'Yes',
                            ],

                            'option' => [
                                'add-btn'     => 'Add Option',
                                'delete'      => 'Delete',
                                'delete-btn'  => 'Delete',
                                'edit-btn'    => 'Edit',
                                'empty-info'  => 'To create various combination of product on a go.',
                                'empty-title' => 'Add Option',

                                'types' => [
                                    'text' => [
                                        'title' => 'Text',
                                    ],

                                    'textarea' => [
                                        'title' => 'Textarea',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Checkbox',
                                    ],

                                    'radio' => [
                                        'title' => 'Radio',
                                    ],

                                    'select' => [
                                        'title' => 'Select',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Multiselect',
                                    ],

                                    'date' => [
                                        'title' => 'Date',
                                    ],

                                    'datetime' => [
                                        'title' => 'Datetime',
                                    ],

                                    'time' => [
                                        'title' => 'Time',
                                    ],

                                    'file' => [
                                        'title' => 'File',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Label',
                                        'price'    => 'Price',
                                        'save-btn' => 'Save',
                                        'title'    => 'Option',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'The product is already associated with a configurable, grouped, or bundle product.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Add Variant',
                        'delete-btn'        => 'Delete',
                        'edit-btn'          => 'Edit',
                        'empty-info'        => 'To create various combination of product on a go.',
                        'empty-title'       => 'Add Variant',
                        'image-placeholder' => 'Product Image',
                        'info'              => 'Variation products are depend on all possible combination of attribute.',
                        'qty'               => ':qty Qty',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Variations',

                        'create'  => [
                            'description'            => 'Description',
                            'name'                   => 'Name',
                            'save-btn'               => 'Add',
                            'title'                  => 'Add Variant',
                            'variant-already-exists' => 'This variant already exists',
                        ],

                        'edit' => [
                            'disabled'        => 'Disabled',
                            'edit-info'       => 'If you want to update product information in detail, then go to the',
                            'edit-link-title' => 'Product Details Page',
                            'enabled'         => 'Enabled',
                            'images'          => 'Images',
                            'name'            => 'Name',
                            'price'           => 'Price',
                            'quantities'      => 'Quantities',
                            'save-btn'        => 'Save',
                            'sku'             => 'SKU',
                            'status'          => 'Status',
                            'title'           => 'Product',
                            'weight'          => 'Weight',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Add Images',
                            'apply-to-all-btn'    => 'Apply to All',
                            'apply-to-all-sku'    => 'Apply a price to all SKU.',
                            'edit-inventories'    => 'Edit Inventories',
                            'edit-prices'         => 'Edit Prices',
                            'price'               => 'Price',
                            'remove-images'       => 'Remove Images',
                            'remove-variants'     => 'Remove Variants',
                            'select-action'       => 'Select Action',
                            'select-variants'     => 'Select Variants',
                            'edit-name'           => 'Edit Name',
                            'name'                => 'Name',
                            'edit-sku'            => 'Edit SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Edit Weight',
                            'weight'              => 'Weight',
                            'edit-status'         => 'Edit Status',
                            'status'              => 'Status',
                            'apply-to-all-name'   => 'Apply a name to all variants.',
                            'apply-to-all-weight' => 'Apply a weight to all variants.',
                            'apply-to-all-status' => 'Apply a status to all variants.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Add Product',
                        'default-qty'       => 'Default Qty',
                        'delete'            => 'Delete',
                        'empty-info'        => 'To create various combination of product on a go.',
                        'empty-title'       => 'Add Product',
                        'image-placeholder' => 'Product Image',
                        'info'              => 'A grouped product comprises standalone items presented as a set, allowing variations or coordination by season or theme. Each product can be bought individually or as part of the group.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Group Products',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Add Option',
                        'empty-info'        => 'To create bundle options on a go.',
                        'empty-title'       => 'Add Option',
                        'image-placeholder' => 'Product Image',
                        'info'              => 'A bundle product is a package of multiple items or services sold together at a special price, providing value and convenience to customers.',
                        'title'             => 'Bundle Items',

                        'update-create' => [
                            'checkbox'    => 'Checkbox',
                            'is-required' => 'Is Required',
                            'multiselect' => 'Multiselect',
                            'name'        => 'Title',
                            'no'          => 'No',
                            'radio'       => 'Radio',
                            'save-btn'    => 'Save',
                            'select'      => 'Select',
                            'title'       => 'Option',
                            'type'        => 'Type',
                            'yes'         => 'Yes',
                        ],

                        'option' => [
                            'add-btn'     => 'Add Product',
                            'default-qty' => 'Default Qty',
                            'delete'      => 'Delete',
                            'delete-btn'  => 'Delete',
                            'edit-btn'    => 'Edit',
                            'empty-info'  => 'To create various combination of product on a go.',
                            'empty-title' => 'Add Product',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Set default product using checkbox',
                                    'title' => 'Checkbox',
                                ],

                                'multiselect' => [
                                    'info'  => 'Set default product using checkbox button',
                                    'title' => 'Multiselect',
                                ],

                                'radio' => [
                                    'info'  => 'Set default product using radio button',
                                    'title' => 'Radio',
                                ],

                                'select' => [
                                    'info'  => 'Set default product using radio button',
                                    'title' => 'Select',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Available From',
                        'available-to'   => 'Available To',
                        'location'       => 'Location',
                        'qty'            => 'Qty',
                        'title'          => 'Booking Type',

                        'available-every-week' => [
                            'no'    => 'No',
                            'title' => 'Available Every Week',
                            'yes'   => 'Yes',
                        ],

                        'appointment' => [
                            'break-duration' => 'Break Time b/w Slots (Mins)',
                            'slot-duration'  => 'Slot Duration (Mins)',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Add',
                            'break-duration'   => 'Break Time b/w Slots (Mins)',
                            'close'            => 'Close',
                            'description'      => 'Booking Information',
                            'description-info' => 'According to slots the time duration will be created and visible. And The time duration will be created and displayed according to the slots. It will be unique across all slots and visible on the storefront.',
                            'edit'             => 'Edit',
                            'many'             => 'Many Bookings For One Days',
                            'one'              => 'One Booking For Many Days',
                            'open'             => 'Open',
                            'slot-add'         => 'Add Slots',
                            'slot-duration'    => 'Slot Duration (Mins)',
                            'slot-title'       => 'Slots Time Duration',
                            'title'            => 'Default',
                            'unavailable'      => 'Unavailable',

                            'modal' => [
                                'slot' => [
                                    'add-title'  => 'Add Slots',
                                    'close'      => 'Close',
                                    'day'        => 'Day',
                                    'edit-title' => 'Edit Slots',
                                    'friday'     => 'Friday',
                                    'from'       => 'From',
                                    'from-day'   => 'From Day',
                                    'from-time'  => 'From Time',
                                    'monday'     => 'Monday',
                                    'open'       => 'Open',
                                    'saturday'   => 'Saturday',
                                    'save'       => 'Save',
                                    'select'     => 'Select',
                                    'status'     => 'Status',
                                    'sunday'     => 'Sunday',
                                    'thursday'   => 'Thursday',
                                    'to'         => 'To',
                                    'to-day'     => 'To Day',
                                    'to-time'    => 'To Time',
                                    'tuesday'    => 'Tuesday',
                                    'wednesday'  => 'Wednesday',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Add Tickets',
                            'delete'             => 'Delete',
                            'description'        => 'Description',
                            'description-info'   => 'There is no tickets available.',
                            'edit'               => 'Edit',
                            'name'               => 'Name',
                            'price'              => 'Price',
                            'qty'                => 'Quantity',
                            'special-price'      => 'Special Price',
                            'special-price-from' => 'Special Price From',
                            'special-price-to'   => 'Special Price To',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Valid From',
                            'valid-until'        => 'Valid Until',

                            'modal' => [
                                'edit' => 'Edit Tickets',
                                'save' => 'Save',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Add Tickets',
                            ],

                            'slots'   => [
                                'add'         => 'Add Slots',
                                'description' => 'Available Slots with time Duration.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'Daily Basis',
                            'daily-hourly' => 'Both (Daily and Hourly Basis)',
                            'daily-price'  => 'Daily Price',
                            'hourly'       => 'Hourly Basis',
                            'hourly-price' => 'Hourly Price',
                            'title'        => 'Renting Type',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Add Slots',
                            'description-info' => 'According to slots the time duration will be created and visible. And The time duration will be created and displayed according to the slots. It will be unique across all slots and visible on the storefront.',
                            'save'             => 'Save',
                            'title'            => 'Slots Time Duration',
                            'unavailable'      => 'Unavailable',

                            'action' => [
                                'add' => 'Add',
                            ],

                            'modal' => [
                                'slot' => [
                                    'friday'    => 'Friday',
                                    'from'      => 'From',
                                    'monday'    => 'Monday',
                                    'saturday'  => 'Saturday',
                                    'sunday'    => 'Sunday',
                                    'thursday'  => 'Thursday',
                                    'to'        => 'To',
                                    'tuesday'   => 'Tuesday',
                                    'wednesday' => 'Wednesday',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Break Time b/w Slots (Mins)',
                            'guest-capacity'            => 'Guest Capacity',
                            'guest-limit'               => 'Guest Limit Per Table',
                            'prevent-scheduling-before' => 'Prevent Scheduling Before',
                            'slot-duration'             => 'Slot Duration (Mins)',

                            'charged-per'               => [
                                'guest'  => 'Guest',
                                'table'  => 'Table',
                                'title'  => 'Charged Per',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'No',
                                'title' => 'Same Slot For All days',
                                'yes'   => 'Yes',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Appointment Booking',
                            'default'     => 'Default Booking',
                            'event'       => 'Event Booking',
                            'many'        => 'Many',
                            'one'         => 'One',
                            'rental'      => 'Rental Booking',
                            'table'       => 'Table Booking',
                            'title'       => 'Type',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Add Link',
                            'delete-btn'  => 'Delete',
                            'edit-btn'    => 'Edit',
                            'empty-info'  => 'To create link on a go.',
                            'empty-title' => 'Add Link',
                            'file'        => 'File : ',
                            'info'        => 'Downloadable product type allows to sell digital products, such as eBooks, software applications, music, games, etc.',
                            'sample-file' => 'Sample File : ',
                            'sample-url'  => 'Sample URL : ',
                            'title'       => 'Downloadable Links',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'Download Allowed',
                                'file'        => 'File',
                                'file-type'   => 'File Type',
                                'name'        => 'Title',
                                'price'       => 'Price',
                                'sample'      => 'Sample',
                                'sample-type' => 'Sample Type',
                                'save-btn'    => 'Save',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Add Sample',
                            'delete-btn'  => 'Delete',
                            'edit-btn'    => 'Edit',
                            'empty-info'  => 'To create sample on a go.',
                            'empty-title' => 'Add Sample',
                            'file'        => 'File : ',
                            'info'        => 'Downloadable product type allows to sell digital products, such as eBooks, software applications, music, games, etc.',
                            'title'       => 'Downloadable Samples',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'File',
                                'file-type' => 'File Type',
                                'name'      => 'Title',
                                'save-btn'  => 'Save',
                                'title'     => 'Link',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Product created successfully',
            'delete-failed'            => 'Product deletion Failed',
            'delete-success'           => 'Product deleted successfully',
            'product-type-not-allowed' => 'You are not allowed to sell :type product',
            'saved-inventory-message'  => 'Product saved successfully',
            'update-success'           => 'Product updated successfully',

            'assign' => [
                'already-selling'     => 'You are already selling this product',
                'back-btn'            => 'Back',
                'condition'           => 'Condition',
                'create-success'      => 'Product assigned successfully to the seller',
                'description'         => 'Description',
                'image-size'          => 'Image resolution should be like 609px X 560px',
                'images'              => 'Images',
                'new'                 => 'New',
                'not-allowed'         => 'You are not allowed to assign this product',
                'old'                 => 'Old',
                'price'               => 'Price',
                'product-not-allowed' => 'You are not allowed to sell :type product',
                'quantities'          => 'Quantities',
                'save-btn'            => 'Save',
                'title'               => 'Assign Product',
                'update-success'      => 'Assigned product updated successfully',

                'product-details' => [
                    'active'            => 'Active',
                    'approved'          => 'Approved',
                    'disable'           => 'Disable',
                    'disapproved'       => 'Disapproved',
                    'image-placeholder' => 'Product Image',
                    'title'             => 'Product Details',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Products Reviews',

                'datagrid' => [
                    'approved'      => 'Approved',
                    'customer'      => 'Customer',
                    'date'          => 'Date',
                    'description'   => 'Description',
                    'disapproved'   => 'Disapproved',
                    'email'         => 'Email',
                    'pending'       => 'Pending',
                    'product'       => 'Product',
                    'rating'        => 'Rating',
                    'status'        => 'Status',
                    'title'         => 'Title',
                    'update-status' => 'Update Status',
                ],
            ],

            'update-success' => 'Product reviews updated successfully.',
            'delete-success' => 'Product reviews deleted successfully.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Customers',

                'datagrid' => [
                    'active'      => 'Active',
                    'customer'    => 'Customer',
                    'email'       => 'Email',
                    'gender'      => 'Gender',
                    'group'       => 'Group',
                    'inactive'    => 'Inactive',
                    'order-count' => 'Order Count',
                    'revenue'     => 'Revenue',
                    'status'      => 'Status',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Manage Profile',
                'edit-btn' => 'Edit Profile',

                'general' => [
                    'email'      => 'Email',
                    'name'       => 'Name',
                    'phone'      => 'Phone Number',
                    'shop-slug'  => 'Shop Slug',
                    'shop-title' => 'Shop Title',
                    'title'      => 'General Information',
                ],

                'about-store' => [
                    'title' => 'About Store',
                ],

                'meta' => [
                    'meta-description' => 'Meta Description',
                    'meta-keywords'    => 'Meta Keywords',
                    'meta-title'       => 'Meta Title',
                    'title'            => 'Meta Description',
                ],

                'policy' => [
                    'privacy'  => 'Privacy Policy',
                    'return'   => 'Return Policy',
                    'shipping' => 'Shipping Policy',
                    'title'    => 'Policies',
                ],

                'address' => [
                    'city'     => 'City',
                    'country'  => 'Country',
                    'postcode' => 'Postcode',
                    'state'    => 'State',
                    'title'    => 'Store Address',
                    'address'  => 'Address',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Social Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimum Order Amount',
                ],

                'google-analytics' => [
                    'id'    => 'Analytics ID',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Admin Commission',
                    'admin-commission-value' => 'Admin Commission :rate% of total Invoiced Amount',
                    'allowed-categories'     => 'Allowed Categories',
                    'no-categories'          => 'No Categories Available',
                    'allowed-product-types'  => 'Allowed Product Type',
                    'no-product-types'       => 'No Product Type Available',
                    'payment-methods'        => 'Payment Methods',
                    'no-payment-methods'     => 'No Payment Methods Available',
                    'shipping-methods'       => 'Shipping Methods',
                    'no-shipping-methods'    => 'No Shipping Methods Available',
                    'title'                  => 'Shop Information',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Upload banner in ratio of 13:3, height 375 Safe area 375x250 Centre on mobile',
                'delete-banner'       => 'Delete Banner',
                'delete-logo'         => 'Delete Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Upload logo in ratio of 1:1',
                'save-btn'            => 'Save Profile',
                'title'               => 'Manage Profile',
                'upload-new-banner'   => 'Upload New Banner',
                'upload-new-logo'     => 'Upload New Logo',

                'general' => [
                    'email'      => 'Email',
                    'name'       => 'Name',
                    'phone'      => 'Phone Number',
                    'shop-slug'  => 'Shop Slug',
                    'shop-title' => 'Shop Title',
                    'title'      => 'General Information',
                ],

                'about-store' => [
                    'title' => 'About Store',
                ],

                'meta' => [
                    'meta-description' => 'Meta Description',
                    'meta-keywords'    => 'Meta keywords',
                    'meta-title'       => 'Meta Title',
                    'title'            => 'Meta Description',
                ],

                'policy' => [
                    'privacy'  => 'Privacy Policy',
                    'return'   => 'Return Policy',
                    'shipping' => 'Shipping Policy',
                    'title'    => 'Policies',
                ],

                'address' => [
                    'city'           => 'City',
                    'country'        => 'Country',
                    'postcode'       => 'Postcode',
                    'state'          => 'State',
                    'title'          => 'Store Address',
                    'select-country' => 'Select Country',
                    'select-state'   => 'Select State',
                    'street-address' => 'Street Address',
                    'address'        => 'Address',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Social Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimum Order Amount',
                ],

                'google-analytics' => [
                    'id'    => 'Google Analytics Id',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Your Profile is updated successfully',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Seller Reviews',

                'datagrid' => [
                    'approved'    => 'Approved',
                    'customer'    => 'Customer',
                    'date'        => 'Date',
                    'description' => 'Description',
                    'disapproved' => 'Disapproved',
                    'email'       => 'Email',
                    'pending'     => 'Pending',
                    'rating'      => 'Rating',
                    'status'      => 'Status',
                    'title'       => 'Title',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Save',
                    'title'              => 'General',
                    'unmatched-password' => 'Current password does not match',
                    'update-success'     => 'General settings updated successfully',

                    'regional-setting' => [
                        'currency'      => 'Currency',
                        'locale'        => 'Locale',
                        'select-locale' => 'Select Locale',
                        'title'         => 'Regional Settings',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Confirm Password',
                        'current-password' => 'Current Password',
                        'new-password'     => 'New Password',
                        'title'            => 'Password Settings',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Create Role',
                    'title'      => 'Roles',

                    'datagrid' => [
                        'all'             => 'All',
                        'custom'          => 'Custom',
                        'delete'          => 'Delete',
                        'edit'            => 'Edit',
                        'id'              => 'Id',
                        'name'            => 'Name',
                        'permission-type' => 'Permission Type',
                    ],
                ],

                'create' => [
                    'access-control' => 'Access Control',
                    'all'            => 'All',
                    'back-btn'       => 'Back',
                    'custom'         => 'Custom',
                    'description'    => 'Description',
                    'general'        => 'General',
                    'name'           => 'Name',
                    'permissions'    => 'Permissions',
                    'save-btn'       => 'Save Role',
                    'title'          => 'Create Role',
                ],

                'edit' => [
                    'access-control' => 'Access Control',
                    'all'            => 'All',
                    'back-btn'       => 'Back',
                    'custom'         => 'Custom',
                    'description'    => 'Description',
                    'general'        => 'General',
                    'name'           => 'Name',
                    'permissions'    => 'Permissions',
                    'save-btn'       => 'Save Role',
                    'title'          => 'Edit Role',
                ],

                'being-used'        => 'Role is being used by some seller',
                'create-success'    => 'Role is created successfully',
                'delete-failed'     => 'Role deletion Failed',
                'delete-success'    => 'Role is deleted successfully',
                'last-delete-error' => 'At least one role is required',
                'update-success'    => 'Role is updated successfully',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Create User',
                    'create-title'     => 'Create User',
                    'edit-title'       => 'Edit User',
                    'email'            => 'Email',
                    'name'             => 'Name',
                    'phone-number'     => 'Phone Number',
                    'role'             => 'Role',
                    'save-btn'         => 'Save User',
                    'select-role'      => 'Select Role',
                    'password'         => 'Password',
                    'confirm-password' => 'Confirm Password',
                    'status'           => 'Status',
                    'title'            => 'Users',
                    'create-success'   => 'User created successfully',
                    'update-success'   => 'User updated successfully',
                    'delete-success'   => 'User deleted successfully',
                    'delete-failed'    => 'User deletion Failed',

                    'datagrid' => [
                        'delete'     => 'Delete',
                        'edit'       => 'Edit',
                        'email'      => 'Email',
                        'id'         => 'Id',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Name',
                        'permission' => 'Permission',
                        'phone'      => 'Phone',

                        'status' => [
                            'title' => 'Status',

                            'options' => [
                                'active'    => 'Active',
                                'suspended' => 'Suspended',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Create Inventory Source',
                    'title'      => 'Inventory Sources',

                    'datagrid' => [
                        'active'   => 'Active',
                        'code'     => 'Code',
                        'delete'   => 'Delete',
                        'edit'     => 'Edit',
                        'id'       => 'ID',
                        'inactive' => 'Inactive',
                        'name'     => 'Name',
                        'priority' => 'Priority',
                        'status'   => 'Status',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Add Inventory Source',
                    'address'        => 'Source Address',
                    'back-btn'       => 'Back',
                    'city'           => 'City',
                    'code'           => 'Code',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contact Information',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Contact Number',
                    'country'        => 'Country',
                    'description'    => 'Description',
                    'general'        => 'General',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Name',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Priority',
                    'save-btn'       => 'Save Inventory Sources',
                    'select-country' => 'Select Country',
                    'select-state'   => 'Select State',
                    'settings'       => 'Settings',
                    'state'          => 'State',
                    'status'         => 'Status',
                    'street'         => 'Street',
                    'title'          => 'Inventory Sources',
                ],

                'edit' => [
                    'back-btn'       => 'Back',
                    'city'           => 'City',
                    'code'           => 'Code',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contact Information',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Contact Number',
                    'country'        => 'Country',
                    'description'    => 'Description',
                    'general'        => 'General',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Name',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Priority',
                    'save-btn'       => 'Save Inventory Sources',
                    'select-country' => 'Select Country',
                    'select-state'   => 'Select State',
                    'settings'       => 'Settings',
                    'source-address' => 'Source Address',
                    'state'          => 'State',
                    'status'         => 'Status',
                    'street'         => 'Street',
                    'title'          => 'Edit Inventory Sources',
                ],

                'create-success'    => 'Inventory Source Created Successfully',
                'delete-failed'     => 'Inventory Sources Delete Failed',
                'delete-success'    => 'Inventory Sources Deleted Successfully',
                'last-delete-error' => 'Last Inventory Sources Can Not Deleted',
                'update-success'    => 'Inventory Sources Updated Successfully',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Admin',
                'blocked-message'     => 'You are blocked by admin',
                'message-failed'      => 'Message sending failed',
                'message-placeholder' => 'Type your message here...',
                'message-sent'        => 'Message sent successfully',
                'no-message'          => 'No Message Found',
                'search-message'      => 'Search Message...',
                'title'               => 'Communication',

                'filters' => [
                    'all-messages'      => 'All Messages',
                    'prev-fifteen-days' => 'Previous 15 Days',
                    'prev-seven-days'   => 'Previous 7 Days',
                    'prev-six-months'   => 'Previous 6 Months',
                    'prev-thirty-days'  => 'Previous 30 Days',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Abandoned Carts',
                    'abandoned-products'            => 'Abandoned Products',
                    'abandoned-rate'                => 'Abandoned Rate',
                    'abandoned-revenue'             => 'Abandoned Revenue',
                    'added-to-cart'                 => 'Added to Cart',
                    'added-to-cart-info'            => 'Only :progress visitors added products to cart',
                    'all-channels'                  => 'All Channels',
                    'average-order-value-over-time' => 'Average Order Value Over Time',
                    'average-sales'                 => 'Average Order Value',
                    'commission'                    => 'Commission',
                    'commission-over-time'          => 'Commission Over Time',
                    'count'                         => 'Count',
                    'end-date'                      => 'End Date',
                    'id'                            => 'Id',
                    'interval'                      => 'Interval',
                    'name'                          => 'Name',
                    'orders'                        => 'Orders',
                    'orders-over-time'              => 'Orders Over Time',
                    'payment-method'                => 'Payment Method',
                    'product-views'                 => 'Product Views',
                    'product-views-info'            => 'Only :progress visitors view products',
                    'purchase-funnel'               => 'Purchase Funnel',
                    'purchased'                     => 'Purchased',
                    'purchased-info'                => 'Only :progress visitors do the purchasing',
                    'refunds'                       => 'Refunds',
                    'refunds-over-time'             => 'Refunds Over Time',
                    'sales-over-time'               => 'Sales Over Time',
                    'start-date'                    => 'Start Date',
                    'tax-collected'                 => 'Tax Collected',
                    'tax-collected-over-time'       => 'Tax Collected Over Time',
                    'title'                         => 'Sales',
                    'top-payment-methods'           => 'Top Payment Methods',
                    'top-tax-categories'            => 'Top Tax Categories',
                    'total'                         => 'Total',
                    'total-commission-paid'         => 'Total Commission Paid',
                    'total-orders'                  => 'Total Orders',
                    'total-sales'                   => 'Total Sales',
                    'total-visits'                  => 'Total visits',
                    'total-visits-info'             => 'Total visitors on store',
                    'view-details'                  => 'View Details',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'All Channels',
                    'count'                       => 'Count',
                    'customers'                   => 'Customers',
                    'customers-over-time'         => 'Customers Over Time',
                    'customers-traffic'           => 'Customers Traffic',
                    'customers-with-most-orders'  => 'Customers With Most Orders',
                    'customers-with-most-reviews' => 'Customers With Most Reviews',
                    'customers-with-most-sales'   => 'Customers With Most Sales',
                    'email'                       => 'Email',
                    'end-date'                    => 'End Date',
                    'id'                          => 'Id',
                    'interval'                    => 'Interval',
                    'name'                        => 'Name',
                    'orders'                      => 'Orders',
                    'reviews'                     => 'Reviews',
                    'start-date'                  => 'Start Date',
                    'title'                       => 'Customers',
                    'top-customer-groups'         => 'Top Customer Groups',
                    'total'                       => 'Total',
                    'total-customers'             => 'Total Customers',
                    'total-visitors'              => 'Total Visitors',
                    'traffic-over-week'           => 'Traffic Over Week',
                    'unique-visitors'             => 'Unique Visitors',
                    'view-details'                => 'View Details',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'All Channels',
                    'channel'                          => 'Channel',
                    'end-date'                         => 'End Date',
                    'id'                               => 'Id',
                    'interval'                         => 'Interval',
                    'locale'                           => 'Locale',
                    'name'                             => 'Name',
                    'orders'                           => 'Orders',
                    'price'                            => 'Price',
                    'products-added-over-time'         => 'Products Added Over Time',
                    'products-with-most-reviews'       => 'Products With Most Reviews',
                    'products-with-most-visits'        => 'Products With Most Visits',
                    'quantities'                       => 'Quantities',
                    'quantities-sold-over-time'        => 'Quantities Sold Over Time',
                    'revenue'                          => 'Revenue',
                    'reviews'                          => 'Reviews',
                    'start-date'                       => 'Start Date',
                    'title'                            => 'Products',
                    'top-selling-products-by-quantity' => 'Top Selling Products By Quantity',
                    'top-selling-products-by-revenue'  => 'Top Selling Products By Revenue',
                    'total'                            => 'Total',
                    'total-products-added-to-wishlist' => 'Products Added To Wishlist',
                    'total-sold-quantities'            => 'Sold Products Quantity',
                    'view-details'                     => 'View Details',
                    'visits'                           => 'Visits',
                ],
            ],

            'view' => [
                'all-channels'  => 'All Channels',
                'day'           => 'Day',
                'end-date'      => 'End Date',
                'export-csv'    => 'Export CSV',
                'export-xls'    => 'Export XLS',
                'month'         => 'Month',
                'not-available' => 'No Records Available.',
                'start-date'    => 'Start Date',
                'year'          => 'Year',
            ],

            'empty' => [
                'info'  => 'No data available for selected interval',
                'title' => 'No Data Available',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Disabled',
                'enabled'   => 'Enabled',
                'info'      => 'Build, manage, and scale your online store with Bagisto’s customizable eCommerce extensions.',
                'no-result' => 'No extensions available here.',
                'title'     => 'Extensions',

                'filters' => [
                    'all-extensions' => 'All Extensions',
                    'bulk_upload'    => 'Bulk Upload',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'Marketplace',
                    'payment'        => 'Payment',
                    'pos'            => 'POS',
                    'shipping'       => 'Shipping',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Seller Logo',
                'switch-to-store' => 'Switch to manage store',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Minimum order amount for :shop_title is',
                'product-not-available' => 'Product is not available',
                'sold-by'               => 'Sold By',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Days* Payment',
                'deals-in'            => 'Deals In',
                'featured-seller'     => 'Our Featured Sellers',
                'online-business'     => 'Online Business',
                'reviews'             => ':count Reviews',
                'seller-community'    => 'Seller Community',
                'serviceable-pincode' => 'Serviceable Pincode',
                'start-selling'       => 'Start selling with large customer around the world, round the clock.',
                'step'                => 'Step :count',
                'visit-shop'          => 'Visit Shop',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Add to Cart',
            'delivery-info' => 'Delivery Information comes here',
            'hide'          => 'Hide',
            'more-info'     => 'More Information',
            'seller-count'  => ':count more seller selling same product',
            'seller-info'   => 'Seller Information',
            'sold-by'       => 'Sold By',
            'top-selling'   => 'Top Selling',

            'flag' => [
                'alert'              => 'Alert',
                'already-reported'   => 'You have already reported this product',
                'create-success'     => 'Product Reported successfully',
                'guest-alert'        => 'You need to login to report this product',
                'not-allowed'        => 'You cannot report this product without placing an order',
                'other-reason'       => 'Other Reason',
                'reason'             => 'Reason',
                'reason-placeholder' => 'Please specify the reason',
                'report-product'     => 'Report Product',
                'select-reason'      => 'Select Reason',
                'submit-btn'         => 'Submit',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Seller is not approved yet',
                'products-count'  => 'Products (:count)',
                'reviews-count'   => 'Reviews (:count)',
                'search-text'     => 'Search for Products',

                'about' => [
                    'title'           => 'About',
                    'about-us'        => 'About Us',
                    'shipping-policy' => 'Shipping Policy',
                    'privacy-policy'  => 'Privacy Policy',
                    'return-policy'   => 'Return Policy',
                ],

                'contact-form' => [
                    'title'          => 'Contact',
                    'name'           => 'Name',
                    'email'          => 'Email',
                    'subject'        => 'Subject',
                    'query'          => 'Query',
                    'submit-btn'     => 'Submit',
                    'create-success' => 'Your query has been submitted successfully',
                ],

                'share' => [
                    'title'     => 'Share',
                    'share-on'  => 'Share On',
                    'facebook'  => 'facebook',
                    'linkedin'  => 'linked in',
                    'twitter'   => 'twitter',
                    'pinterest' => 'pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Alert',
                    'already-reported'   => 'You have already reported this seller',
                    'create-success'     => 'Seller reported successfully',
                    'guest-alert'        => 'You need to login to report the seller.',
                    'not-allowed'        => 'You cannot report this seller without placing an order',
                    'other-reason'       => 'Other Reason',
                    'reason'             => 'Reason',
                    'reason-placeholder' => 'Please specify the reason',
                    'select-reason'      => 'Select Reason',
                    'submit-btn'         => 'Submit',
                    'title'              => 'Report Issue',
                ],

                'reviews' => [
                    'alert'            => 'Alert',
                    'already-reviewed' => 'You have already reviewed this seller',
                    'comment'          => 'Comment',
                    'create-success'   => 'Seller Reviewed successfully',
                    'customer-review'  => ':count Customer Review',
                    'customer-reviews' => 'Customer Reviews',
                    'guest-alert'      => 'You need to login to report the seller',
                    'rating'           => 'Rating',
                    'review-by'        => 'Review By',
                    'submit-btn'       => 'Submit',
                    'title'            => 'Title',
                    'view-all'         => 'View All Reviews',
                    'write-review'     => 'Write a Review',
                ],

                'products' => [
                    'no-result' => 'No products available here',
                    'show'      => 'Show',

                    'sort-by' => [
                        'title' => 'Sort By',

                        'options' => [
                            'cheapest-first'  => 'Cheapest First',
                            'expensive-first' => 'Expensive First',
                            'from-a-z'        => 'From A-Z',
                            'from-z-a'        => 'From Z-A',
                            'latest-first'    => 'Newest First',
                            'oldest-first'    => 'Oldest First',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Clear All',
                        'filter'      => 'Filter',
                        'filters'     => 'Filters:',
                        'price-range' => 'Price Range',
                        'sort'        => 'Sort',
                    ],
                ],
            ],
        ],
    ],
];
