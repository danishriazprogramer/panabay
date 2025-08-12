<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => '市场',
                    'info'  => '管理市场',

                    'module-info' => [
                        'title'       => '模块信息',
                        'info'        => '提供应用版本的信息。',
                        'app-version' => '应用版本：v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => '管理员佣金百分比',
                        'description'                  => '管理市场的一般设置，例如状态、佣金等。',
                        'lines-in-street-address'      => '街道地址行数',
                        'lines-in-street-address-info' => '设置地址行数。默认是一行。',
                        'status'                       => '状态',
                        'title'                        => '常规',
                    ],

                    'product' => [
                        'approval-required'         => '需要审批',
                        'description'               => '管理市场产品设置，例如审批、标志等。',
                        'enable-flag'               => '启用标志',
                        'seller-can-assign-product' => '卖家可以分配产品',
                        'seller-can-create-product' => '卖家可以创建产品',
                        'show-progress-bar'         => '显示进度条',
                        'title'                     => '产品',
                    ],

                    'seller' => [
                        'approval-required'           => '需要批准',
                        'can-cancel-order'            => '可以取消订单',
                        'can-create-invoice'          => '可以创建发票',
                        'can-create-shipment'         => '可以创建发货',
                        'description'                 => '管理市场卖家的设置，如审批、标志等。',
                        'enable-flag'                 => '启用标志',
                        'enable-minimum-order-amount' => '启用最低订单金额',
                        'enable-seller-flag'          => '启用卖家标志',
                        'red-flag-limit'              => '红旗限制',
                        'red-flag-limit-info'         => '如果卖家超过此限制，将在卖家资料中显示红旗。',
                        'show-red-flag'               => '如果超出限制，在资料中显示红旗',
                        'title'                       => '卖家',
                    ],

                    'featured-sellers' => [
                        'limit-count' => '限制数量',
                        'description' => '管理市场的特色卖家。',
                        'status'      => '状态',
                        'title'       => '特色卖家',

                        'popularity-criteria' => [
                            'all'              => '全部',
                            'maximum-orders'   => '最大订单数',
                            'maximum-products' => '最大产品数',
                            'maximum-rating'   => '最高评分',
                            'maximum-sale'     => '最大销售额',
                            'title'            => '人气标准',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => '横幅按钮标题',
                        'banner-description'  => '横幅描述',
                        'banner-image'        => '横幅图像',
                        'banner-title'        => '横幅标题',
                        'business-hour'       => '营业时间',
                        'community-count'     => '社区人数',
                        'description'         => '通过添加图标、横幅和描述，定制市场的登录页面，使其焕然一新。',
                        'feature-box1-desc'   => '特色框 1 描述',
                        'feature-box1-icon'   => '特色框 1 图标',
                        'feature-box1-title'  => '特色框 1 标题',
                        'feature-box2-desc'   => '特色框 2 描述',
                        'feature-box2-icon'   => '特色框 2 图标',
                        'feature-box2-title'  => '特色框 2 标题',
                        'feature-box3-desc'   => '特色框 3 描述',
                        'feature-box3-icon'   => '特色框 3 图标',
                        'feature-box3-title'  => '特色框 3 标题',
                        'feature-box4-desc'   => '特色框 4 描述',
                        'feature-box4-icon'   => '特色框 4 图标',
                        'feature-box4-title'  => '特色框 4 标题',
                        'feature-description' => '特色描述',
                        'feature-image'       => '特色图片',
                        'feature-title'       => '特色标题',
                        'journey-description' => '旅程描述',
                        'journey-image'       => '旅程图片',
                        'journey-step1-desc'  => '旅程步骤 1 描述',
                        'journey-step1-icon'  => '旅程步骤 1 图标',
                        'journey-step1-title' => '旅程步骤 1 标题',
                        'journey-step2-desc'  => '旅程步骤 2 描述',
                        'journey-step2-icon'  => '旅程步骤 2 图标',
                        'journey-step2-title' => '旅程步骤 2 标题',
                        'journey-step3-desc'  => '旅程步骤 3 描述',
                        'journey-step3-icon'  => '旅程步骤 3 图标',
                        'journey-step3-title' => '旅程步骤 3 标题',
                        'journey-step4-desc'  => '旅程步骤 4 描述',
                        'journey-step4-icon'  => '旅程步骤 4 图标',
                        'journey-step4-title' => '旅程步骤 4 标题',
                        'journey-step5-desc'  => '旅程步骤 5 描述',
                        'journey-step5-icon'  => '旅程步骤 5 图标',
                        'journey-step5-title' => '旅程步骤 5 标题',
                        'journey-title'       => '旅程标题',
                        'payment-duration'    => '付款时长',
                        'serviceable-pincode' => '服务邮政编码',
                        'title'               => '着陆页面',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => '分配产品',
            'communications'    => '通信',
            'create'            => '创建',
            'delete'            => '删除',
            'edit'              => '编辑',
            'flag-reasons'      => '标记原因',
            'inventory-sources' => '库存来源',
            'orders'            => '订单',
            'pay'               => '支付',
            'payment-request'   => '支付请求',
            'product-reviews'   => '产品评论',
            'products'          => '产品',
            'reviews'           => '卖家评论',
            'seller-categories' => '卖家类别',
            'sellers'           => '卖家',
            'title'             => '市场',
            'transactions'      => '交易',
            'view'              => '查看',
        ],

        'menu' => [
            'communications'    => '通信',
            'flag-reasons'      => '标记原因',
            'inventory-sources' => '库存来源',
            'orders'            => '订单',
            'payment-requests'  => '付款请求',
            'product-reviews'   => '产品评论',
            'products'          => '产品',
            'seller-categories' => '卖家类别',
            'seller-reviews'    => '卖家评论',
            'sellers'           => '卖家',
            'title'             => '市场',
            'transactions'      => '交易',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => '添加卖家',
                'delete-failed'      => '卖家删除失败！',
                'delete-success'     => '卖家删除成功。',
                'incomplete-profile' => '卖家的个人资料不完整！',
                'login-message'      => '您已以 :seller_name 的身份登录',
                'pending-orders'     => '卖家有一些待处理的订单',
                'title'              => '卖家',
                'update-success'     => '卖家更新成功！',

                'datagrid' => [
                    'add-product'     => '添加',
                    'approved'        => '已批准',
                    'assign-product'  => '分配产品',
                    'created-at'      => '创建时间',
                    'delete'          => '删除',
                    'disapproved'     => '未批准',
                    'edit'            => '编辑',
                    'email'           => '电子邮件',
                    'flags'           => '标志',
                    'id'              => '编号',
                    'login-as-seller' => '以卖家身份登录',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => '卖家名称',
                    'shop-url'        => '店铺网址',
                    'status'          => '状态',
                    'suspended'       => '已暂停',
                    'total-flags'     => '总标志数：:count',
                    'update-status'   => '更新状态',
                ],

                'create'  => [
                    'address'        => '地址',
                    'city'           => '城市',
                    'country'        => '国家',
                    'email'          => '电子邮件',
                    'name'           => '姓名',
                    'phone'          => '电话号码',
                    'postcode'       => '邮编',
                    'save-btn'       => '保存',
                    'select'         => '选择',
                    'shop-title'     => '商店标题',
                    'shop-url'       => '商店网址',
                    'state'          => '州',
                    'street-address' => '街道地址',
                    'success'        => '成功创建卖家。',
                    'title'          => '创建卖家',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => '卖家旗帜',

                    'datagrid' => [
                        'id'             => '标识',
                        'customer-name'  => '客户姓名',
                        'customer-email' => '客户邮箱',
                        'date'           => '日期',
                        'reason'         => '原因',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => '返回',
                'image-placeholder' => '产品图片',
                'no-result'         => '未找到结果！',
                'sku'               => 'SKU - :sku',
                'title'             => '搜索产品',
            ],

            'assign-product' => [
                'already-selling'     => '卖家已经在出售此产品',
                'assign-successfully' => '产品已成功分配给卖家。',
                'back-btn'            => '返回',
                'condition'           => '条件',
                'description'         => '描述',
                'new'                 => '新的',
                'old'                 => '旧的',
                'price'               => '价格',
                'product-not-allowed' => '卖家不允许出售 :type 类型的产品。',
                'quantities'          => '数量',
                'save-btn'            => '保存',
                'select-condition'    => '选择条件',
                'title'               => '分配产品',

                'seller-details' => [
                    'additional-info' => '附加信息',
                    'approved'        => '已批准',
                    'disapproved'     => '未批准',
                    'no-of-products'  => '产品数量',
                    'status'          => '状态',
                    'suspended'       => '已暂停',
                    'title'           => '卖家详情',
                ],

                'product-details' => [
                    'active'            => '活动的',
                    'disable'           => '禁用',
                    'title'             => '产品详情',
                    'image-placeholder' => '产品图片',
                ],

                'images' => [
                    'info'  => '图像分辨率应为 609 像素 X 560 像素',
                    'title' => '图片',
                ],

                'videos' => [
                    'error' => '视频大小不得超过:max千字节。请选择一个较小的文件。',
                    'info'  => '最大视频尺寸应为 :size',
                    'title' => '视频',
                ],

                'configurable' => [
                    'delete-btn'        => '删除',
                    'edit-btn'          => '编辑',
                    'image-placeholder' => '产品图片',
                    'qty'               => '数量 - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => '变体',

                    'edit' => [
                        'images'     => '图片',
                        'price'      => '价格',
                        'quantities' => '数量',
                        'save-btn'   => '保存',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => '添加链接',
                        'delete-btn'  => '删除',
                        'edit-btn'    => '编辑',
                        'empty-info'  => '随时创建链接。',
                        'empty-title' => '添加链接',
                        'file'        => '文件：',
                        'info'        => '可下载的产品类型允许销售数字产品，例如电子书，软件应用程序，音乐，游戏等。',
                        'sample-file' => '示例文件：',
                        'sample-url'  => '示例网址：',
                        'title'       => '可下载链接',
                        'url'         => '网址：',

                        'update-create' => [
                            'downloads'   => '允许下载',
                            'file'        => '文件',
                            'file-type'   => '文件类型',
                            'name'        => '标题',
                            'price'       => '价格',
                            'sample'      => '示例',
                            'sample-type' => '示例类型',
                            'save-btn'    => '保存',
                            'title'       => '链接',
                            'url'         => '网址',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => '添加示例',
                        'delete-btn'  => '删除',
                        'edit-btn'    => '编辑',
                        'empty-info'  => '随时创建示例。',
                        'empty-title' => '添加示例',
                        'file'        => '文件：',
                        'info'        => '可下载的产品类型允许销售数字产品，例如电子书，软件应用程序，音乐，游戏等。',
                        'title'       => '可下载示例',
                        'url'         => '网址：',

                        'update-create' => [
                            'file'      => '文件',
                            'file-type' => '文件类型',
                            'name'      => '标题',
                            'save-btn'  => '保存',
                            'title'     => '链接',
                            'url'       => '网址',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => '返回',
                'suspended'      => '已暂停',
                'title'          => '编辑卖家',
                'update-btn'     => '更新卖家',
                'update-success' => '卖家更新成功。',

                'shop' => [
                    'address'          => '地址',
                    'city'             => '城市',
                    'country'          => '国家',
                    'description'      => '描述',
                    'email'            => '电子邮件',
                    'name'             => '姓名',
                    'phone-number'     => '电话号码',
                    'postcode'         => '邮政编码',
                    'select'           => '选择',
                    'shop-title'       => '商店标题',
                    'state'            => '省/州',
                    'street-address'   => '街道地址',
                    'title'            => '商店详情',
                    'url'              => '商店网址',
                ],

                'profile' => [
                    'banner'       => '个人资料横幅',
                    'banner-size'  => '横幅大小应为 300px X 200px',
                    'logo'         => '个人资料徽标',
                    'logo-size'    => '徽标大小应为 125px X 125px',
                    'social-links' => ':name 链接',
                    'title'        => '个人资料详情',
                ],

                'allowed-product' => [
                    'title' => '允许销售产品',
                ],

                'minimum-order-amount' => [
                    'title' => '最低订单金额',
                ],

                'google-analytics-id' => [
                    'title' => 'Google Analytics Id',
                ],

                'commission' => [
                    'percentage' => '百分比',
                    'status'     => '状态',
                    'title'      => '卖家佣金',
                ],

                'meta-info' => [
                    'meta-description' => '元描述',
                    'meta-keyword'     => '元关键词',
                    'meta-title'       => '元标题',
                    'title'            => '元信息',
                ],

                'policy' => [
                    'privacy'  => '隐私政策',
                    'return'   => '退货政策',
                    'shipping' => '运输政策',
                    'title'    => '政策',
                ],

                'channels' => [
                    'title' => '频道',
                ],

                'users' => [
                    'email' => '电子邮件',
                    'id'    => '编号',
                    'name'  => '姓名',
                    'phone' => '电话',
                    'title' => '用户',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => '添加产品',
                'delete-success' => '产品成功删除。',
                'title'          => '产品',
                'update-success' => '产品成功更新。',

                'datagrid' => [
                    'approved'       => '已批准',
                    'delete'         => '删除',
                    'disapproved'    => '未批准',
                    'flags'          => '标志',
                    'id'             => '编号',
                    'is-owner'       => '是否所有者',
                    'no'             => '否',
                    'out-of-stock'   => '缺货',
                    'price'          => '价格',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => '产品名称',
                    'product-number' => '产品编号',
                    'product-type'   => '产品类型',
                    'quantity'       => '数量',
                    'seller-name'    => '卖家姓名',
                    'sku'            => 'SKU',
                    'status'         => '状态',
                    'total-flags'    => '总标志数：:count',
                    'total-quantity' => ':quantity 可用',
                    'update-status'  => '更新状态',
                    'yes'            => '是',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => '产品标志',

                    'datagrid' => [
                        'customer-email' => '客户邮箱',
                        'customer-name'  => '客户姓名',
                        'date'           => '日期',
                        'id'             => '编号',
                        'reason'         => '原因',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => '评论详情',
                'title'          => '产品评论',

                'datagrid' => [
                    'approved'      => '已批准',
                    'comment'       => '评论',
                    'customer-name' => '客户姓名',
                    'date'          => '日期',
                    'disapproved'   => '不批准',
                    'id'            => '编号',
                    'images'        => '图片',
                    'pending'       => '待定',
                    'product'       => '产品',
                    'product-name'  => '产品名称',
                    'rating'        => '评分',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => '店铺标题',
                    'status'        => '状态',
                    'title'         => '标题',
                    'update-status' => '更新状态',
                    'view'          => '查看',
                ],
            ],

            'update-success' => '产品评论已成功更新',
            'delete-success' => '产品评论已成功删除。',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => '卖家评论',

                'datagrid' => [
                    'approved'            => '已批准',
                    'comment'             => '评论',
                    'customer-name'       => '客户姓名',
                    'date'                => '日期',
                    'delete'              => '删除',
                    'disapproved'         => '未批准',
                    'id'                  => '编号',
                    'mass-delete-success' => '卖家评论删除成功。',
                    'mass-update-success' => '卖家评论更新成功。',
                    'pending'             => '待处理',
                    'rating'              => '评分',
                    'review-id'           => '编号 - :review_id',
                    'review-title'        => '评论标题',
                    'seller-name'         => '卖家姓名',
                    'shop-title'          => '店铺名称',
                    'status'              => '状态',
                    'update-status'       => '更新状态',
                ],
            ],

            'delete-success' => '卖家评论删除成功。',
        ],

        'orders' => [
            'index' => [
                'title' => '订单',

                'datagrid' => [
                    'canceled'        => '已取消',
                    'closed'          => '已关闭',
                    'commission'      => '佣金',
                    'completed'       => '已完成',
                    'customer'        => '客户',
                    'date'            => '日期',
                    'discount'        => '折扣',
                    'email'           => '电子邮件',
                    'fraud'           => '欺诈',
                    'gross-amt'       => '总金额',
                    'id'              => '编号',
                    'items'           => '商品',
                    'location'        => '位置',
                    'order-id'        => '订单ID - #:id',
                    'payment'         => '支付',
                    'pending'         => '待处理',
                    'pending-payment' => '待支付',
                    'processing'      => '处理中',
                    'seller'          => '卖家',
                    'seller-earn'     => '收益',
                    'shipment'        => '发货',
                    'shop'            => '商店',
                    'status'          => '状态',
                    'view'            => '查看',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => '交易',

                'datagrid' => [
                    'base-total'     => '基础总额',
                    'comment'        => '备注',
                    'customer-name'  => '客户姓名',
                    'id'             => '编号',
                    'seller-id'      => '卖家编号',
                    'seller-name'    => '卖家姓名',
                    'transaction-id' => '交易编号',
                    'view'           => '查看',
                ],
            ],

            'view' => [
                'commission'        => '佣金',
                'created-on'        => '创建于 :date，',
                'name'              => '姓名',
                'payment-method'    => ':method 付款',
                'price'             => '价格',
                'qty'               => '数量',
                'seller-total'      => '卖家总额',
                'shipping-handling' => '运输和处理',
                'subtotal'          => '小计',
                'tax'               => '税费',
                'title'             => '交易 #:transaction_id',
                'total'             => '总计',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => '创建原因',
                'delete-success'      => '标记原因删除成功。',
                'mass-delete-success' => '标记原因批量删除成功。',
                'mass-update-success' => '标记原因批量更新成功。',
                'title'               => '标记原因',

                'datagrid' => [
                    'delete'        => '删除',
                    'edit'          => '编辑',
                    'id'            => '编号',
                    'name'          => '名称',
                    'update-status' => '更新状态',

                    'status' => [
                        'active'  => '启用',
                        'disable' => '禁用',
                        'title'   => '状态',
                    ],

                    'type' => [
                        'product' => '产品',
                        'seller'  => '卖家',
                        'title'   => '类型',
                    ],
                ],
            ],

            'create' => [
                'admin'    => '管理员',
                'back-btn' => '返回',
                'general'  => '常规',
                'label'    => '标签',
                'product'  => '产品',
                'save-btn' => '保存原因',
                'seller'   => '卖家',
                'status'   => '状态',
                'title'    => '创建原因',
                'type'     => '类型',
            ],

            'edit' => [
                'admin'    => '管理员',
                'back-btn' => '返回',
                'general'  => '常规',
                'label'    => '标签',
                'product'  => '产品',
                'save-btn' => '保存原因',
                'seller'   => '卖家',
                'status'   => '状态',
                'title'    => '编辑原因',
                'type'     => '类型',
            ],

            'create-success' => '标记原因创建成功。',
            'update-success' => '标记原因更新成功。',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => '分配分类',
                'create-success' => '分类分配成功。',
                'delete-failed'  => '分类删除失败！',
                'delete-success' => '分类删除成功。',
                'title'          => '卖家类别',
                'update-success' => '分类更新成功。',

                'datagrid' => [
                    'delete' => '删除',
                    'edit'   => '编辑',
                    'id'     => '编号',
                    'name'   => '名称',
                ],
            ],

            'create' => [
                'back-btn'      => '返回',
                'save-btn'      => '保存分类',
                'select-seller' => '选择卖家',
                'seller'        => '卖家',
                'title'         => '分配分类',
            ],

            'edit' => [
                'back-btn'   => '返回',
                'seller'     => '卖家',
                'title'      => '编辑分类',
                'update-btn' => '更新分类',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => '备注',
                'no-amount-remaining'  => '没有剩余金额需要支付！',
                'order-not-found'      => '订单未找到！',
                'pay-btn'              => '立即支付',
                'pay-to-seller'        => '付款给卖家',
                'payment-success'      => '卖家已成功支付！',
                'something-went-wrong' => '出现了一些问题！',
                'title'                => '付款请求',

                'datagrid' => [
                    'already-paid'          => '已支付',
                    'canceled'              => '已取消',
                    'closed'                => '已关闭',
                    'completed'             => '已完成',
                    'customer-name'         => '客户姓名',
                    'date'                  => '日期',
                    'email'                 => '电子邮件',
                    'fraud'                 => '欺诈',
                    'gross-amt'             => '总金额',
                    'id'                    => '订单号',
                    'invoice-pending'       => '发票待处理',
                    'order-canceled'        => '订单已取消',
                    'order-id'              => 'ID #:id',
                    'pay'                   => '支付',
                    'pending'               => '等待中',
                    'pending-payment'       => '等待付款',
                    'processing'            => '处理中',
                    'refunded'              => '已退款',
                    'remaining-total'       => '剩余总额',
                    'request-payment'       => '请求付款',
                    'seller'                => '卖家',
                    'seller-total-invoiced' => '卖家总计发票',
                    'shop'                  => '商店',
                    'status'                => '状态',
                    'total-paid'            => '总计支付',
                    'view'                  => '查看',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => '屏蔽卖家',
                'block-success'        => '卖家屏蔽成功！',
                'chat-history-cleared' => '聊天记录清除成功！',
                'clear-chat-history'   => '清除聊天记录',
                'exit'                 => '退出',
                'message-failed'       => '消息发送失败！',
                'message-sent'         => '消息发送成功！',
                'no-message'           => '未找到消息！',
                'search'               => '搜索',
                'search-message'       => '搜索消息',
                'seller-blocked'       => '您已屏蔽此卖家。您不能向此卖家发送消息。',
                'sellers'              => '卖家',
                'title'                => '通讯',
                'type-message'         => '在此输入您的消息...',
                'unblock-seller'       => '取消屏蔽卖家',
                'unblock-success'      => '卖家取消屏蔽成功！',
                'welcome-message'      => '欢迎来到市场通讯！',

                'filters' => [
                    'all-messages'      => '所有消息',
                    'prev-fifteen-days' => '过去15天',
                    'prev-seven-days'   => '过去7天',
                    'prev-six-months'   => '过去6个月',
                    'prev-thirty-days'  => '过去30天',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => '库存来源',

                'datagrid' => [
                    'active'      => '活跃',
                    'code'        => '代码',
                    'id'          => 'ID',
                    'inactive'    => '非活跃',
                    'name'        => '名称',
                    'seller-name' => '卖家名称',
                    'shop-title'  => '店铺名称',
                    'status'      => '状态',
                ],

                'view' => [
                    'active'         => '活跃',
                    'address'        => '来源地址',
                    'city'           => '城市',
                    'code'           => '代码',
                    'contact-email'  => '电子邮件',
                    'contact-fax'    => '传真',
                    'contact-info'   => '联系信息',
                    'contact-name'   => '联系人姓名',
                    'contact-number' => '联系电话',
                    'country'        => '国家',
                    'description'    => '描述',
                    'general-info'   => '基本信息',
                    'inactive'       => '非活跃',
                    'latitude'       => '纬度',
                    'longitude'      => '经度',
                    'name'           => '名称',
                    'postcode'       => '邮政编码',
                    'priority'       => '优先级',
                    'seller-info'    => '卖家信息',
                    'seller-name'    => '卖家名称',
                    'settings'       => '设置',
                    'shop-title'     => '店铺名称',
                    'state'          => '省/州',
                    'street'         => '街道',
                    'title'          => '库存来源 #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => '安装市场包。',
            'migrate'     => '将所有表迁移到数据库中（需要一些时间）...',
            'seed'        => '向数据库插入数据...',
            'publish'     => '发布资源和配置...',
            'cache'       => '清除缓存...',
            'finish'      => '市场包已成功安装。',
        ],

        'version' => [
            'description' => '显示市场包的当前版本。',
            'comment'     => '市场版本: :version',
        ],
    ],

    'emails' => [
        'dear'        => '亲爱的 :customer_name',
        'dear-admin'  => '尊敬的管理员',
        'dear-seller' => '尊敬的卖家',

        'seller' => [
            'registration' => [
                'date'        => '注册日期:',
                'description' => '我们很高兴地通知您，有一个新卖家在我们的平台上注册。请抽出一点时间，欢迎新卖家加入我们的平台。',
                'details'     => '以下是详细信息:',
                'email'       => '电子邮件地址:',
                'greeting'    => '希望这条消息能够找到您。',
                'name'        => '卖家姓名:',
                'shop'        => '店铺网址:',
                'subject'     => '新卖家注册',
            ],

            'forgot-password' => [
                'description'    => '您收到此电子邮件是因为我们收到了有关您帐户的密码重置请求。',
                'greeting'       => '忘记密码！',
                'reset-password' => '重置密码',
                'subject'        => '密码重置电子邮件',
            ],

            'welcome' => [
                'description' => '欢迎来到我们的大家庭！我们很高兴您作为卖家的加入为我们的平台增添了巨大的价值，期待着成功的合作。',
                'greeting'    => '欢迎并感谢您注册！',
                'subject'     => '卖家欢迎通知',
            ],

            'approval' => [
                'approved'    => '您成为卖家的请求已经被批准。',
                'disapproved' => '您成为卖家的请求已被拒绝。',
                'greeting'    => '欢迎并感谢您注册！',
                'subject'     => '卖家批准通知',
            ],

            'update' => [
                'description' => '您的个人资料已成功更新。',
                'greeting'    => '希望这条消息能够找到您。',
                'subject'     => '卖家资料更新通知',
            ],

            'good-bye' => [
                'description' => '与您共事是一种愉悦，我真诚感谢您的专业精神、奉献精神以及您的产品/服务的高质量。您确保客户满意的承诺并未被忽视，这是我们积极经历的关键因素。',
                'greeting'    => '相信这条消息能够找到您。',
                'subject'     => '卖家告别通知',
            ],

            'product-approval' => [
                'approved'    => '您的产品 :name 已经获得批准。',
                'disapproved' => '您的产品 :name 未获批准。',
                'greeting'    => '欢迎并感谢您在我们这里注册！',
                'subject'     => '卖家产品批准通知',
            ],

            'orders' => [
                'created' => [
                    'greeting' => '您有一个新订单：订单号为 :order_id，下单时间为 :created_at',
                    'subject'  => '新订单确认',
                    'summary'  => '订单摘要',
                    'title'    => '订单确认！',
                ],

                'canceled' => [
                    'greeting' => '订单 :order_id 已被取消',
                    'subject'  => '订单取消确认',
                    'summary'  => '订单摘要',
                    'title'    => '订单已取消！',
                ],

                'billing-address'   => '账单地址',
                'contact'           => '联系方式',
                'discount'          => '折扣',
                'grand-total'       => '总计',
                'name'              => '姓名',
                'payment'           => '支付',
                'price'             => '价格',
                'qty'               => '数量',
                'shipping'          => '运输',
                'shipping-address'  => '送货地址',
                'shipping-handling' => '运输与处理',
                'sku'               => 'SKU编号',
                'subtotal'          => '小计',
                'tax'               => '税费',
            ],

            'payment-request' => [
                'greeting'  => '希望这条消息能找到你。',
                'paid'      => '嗨.. 您已收到订单 :order_id 的付款。',
                'requested' => '卖家 :seller_name 被要求支付订单 :order_id。',
                'subject'   => '卖家付款请求通知',
            ],
        ],

        'contact-seller' => [
            'email'    => '电子邮件:- :email',
            'greeting' => '希望这条消息能够找到您。',
            'info'     => '你好，:name 有一个问题想要向您咨询。请查看下面的详细信息。',
            'query'    => '查询：- :query',
            'subject'  => '卖家联系通知',
            'topic'    => '主题：- :subject',
        ],

        'report-product' => [
            'admin-msg'  => '您好，":name" 已报告卖家 ":seller_name" 的产品 ":product_name" 存在问题。请查看以下详细信息。',
            'greeting'   => '希望此消息让您一切安好。',
            'reason'     => '原因:- :reason',
            'seller-msg' => '您好，":name" 已报告您的产品 ":product_name" 存在问题。请查看以下详细信息。',
            'subject'    => '产品报告通知',
        ],

        'report-seller' => [
            'admin-msg'  => '你好，:name 举报了关于 :seller_name 的问题。请查看下面的详细信息。',
            'greeting'   => '我相信这条消息能够找到您。',
            'reason'     => '原因：- :reason',
            'seller-msg' => '你好，:name 报告了与您有关的问题。请查看下面的详细信息。',
            'subject'    => '卖家举报通知',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => '创建 Velocity 卖家账户',
            'banner-description'  => 'Velocity 是一个极好的平台，能够将您的产品销售给印度的新兴企业。通过以下建议，您可以成功地成为 Velocity 的卖家！',
            'banner-btn-title'    => '开店',
            'feature-title'       => '为什么卖家喜欢在 Velocity 上销售？',
            'feature-description' => '卖家喜欢高效平台，因为它们能带来更多的销售机会、更高的曝光率，以及可以促进业务增长和成功的高效销售体验。',
            'feature-box1-title'  => '增加销售机会',
            'feature-box1-desc'   => '卖家喜欢高效平台，因为它们能提供增加销售、更高曝光率的潜力，并提供高效的销售体验。',
            'feature-box2-title'  => '更快的周转',
            'feature-box2-desc'   => '在高效平台上，产品销售速度更快，从而加快库存周转并为卖家创造收入。',
            'feature-box3-title'  => '增强的可见性',
            'feature-box3-desc'   => '这些平台为卖家的产品提供更高的可见性和曝光率，从而获得更多的浏览量和潜在销售。',
            'feature-box4-title'  => '效率与便捷',
            'feature-box4-desc'   => '高效平台通常具有简化的流程和工具，使销售更高效，为卖家在管理在线业务时节省时间和精力。',
            'journey-title'       => '开始您的 Velocity 旅程',
            'journey-description' => '与世界各地的大客户全天候销售。',
            'journey-step1-title' => '成为卖家',
            'journey-step1-desc'  => '设置您的商店，包括所有基本信息。',
            'journey-step2-title' => '列出产品',
            'journey-step2-desc'  => '在商店中列出产品，供客户查看和购买。',
            'journey-step3-title' => '接收订单',
            'journey-step3-desc'  => '从世界各地的广大客户接收订单。',
            'journey-step4-title' => '产品交付',
            'journey-step4-desc'  => '产品交付并收到付款后。',
            'journey-step5-title' => '付款',
            'journey-step5-desc'  => '请求付款，在扣除佣金后收到付款。',
        ],

        'flag-reasons' => [
            'damaged-product'           => '损坏的产品',
            'damaged-product-sold'      => '卖家出售的损坏产品',
            'duplicate-product'         => '重复产品',
            'duplicate-product-sold'    => '卖家出售的重复产品',
            'missing-product-parts'     => '产品部件丢失',
            'over-price-product'        => '高价产品',
            'over-price-product-sold'   => '卖家出售的高价产品',
            'poor-product-quality'      => '产品质量差',
            'poor-product-quality-sold' => '卖家出售的质量差的产品',
            'receive-wrong-product'     => '收到错误的产品',
            'wrong-product-sold'        => '卖家出售的错误产品',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => '下载',
                    'export'     => '导出',
                    'no-records' => '没有可导出的内容',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => '主页',
                    'logout'     => '登出',
                    'my-profile' => '我的个人资料',
                    'visit-shop' => '访问商店',

                    'mega-search' => [
                        'customers'                       => '客户',
                        'explore-all-customers'           => '浏览所有客户',
                        'explore-all-matching-customers'  => '浏览所有与“:query” (:count) 匹配的客户',
                        'explore-all-matching-orders'     => '浏览所有与“:query” (:count) 匹配的订单',
                        'explore-all-matching-products'   => '浏览所有与“:query” (:count) 匹配的产品',
                        'explore-all-orders'              => '浏览所有订单',
                        'explore-all-products'            => '浏览所有产品',
                        'orders'                          => '订单',
                        'products'                        => '产品',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => '超级搜索',
                    ],
                ],

                'sidebar' => [
                    'collapse' => '折叠',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => '添加图片',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => '仅允许图片文件 (.jpeg, .jpg, .png, ..)。',
                ],

                'videos' => [
                    'add-video-btn'     => '添加视频',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => '仅允许视频文件 (.mp4, .mov, .ogg ..)。',
                ],

                'documents' => [
                    'add-document-btn'  => '添加文档',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => '仅允许文档文件 (:types ..)。',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => '前',
                    'next'       => '下一步',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PPT',
                    'size'       => '大小',
                    'text'       => '文本',
                    'use-cases'  => '用例',
                    'word'       => 'Word',
                    'zoom'       => '缩放',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => '预订',
            'communication'     => '通讯',
            'customers'         => '客户',
            'dashboard'         => '仪表板',
            'extensions'        => '扩展程序',
            'general'           => '常规',
            'inventory-sources' => '库存来源',
            'manage-profile'    => '管理个人资料',
            'orders'            => '订单',
            'product-reviews'   => '产品评论',
            'products'          => '产品',
            'reporting'         => '报告',
            'roles'             => '角色',
            'sales'             => '销售',
            'seller-reviews'    => '卖家评论',
            'settings'          => '设置',
            'transaction'       => '交易',
            'users'             => '用户',
        ],

        'acl' => [
            'assign'            => '分配',
            'bookings'          => '预订',
            'cancel'            => '取消',
            'communication'     => '通讯',
            'create'            => '创建',
            'customers'         => '客户',
            'dashboard'         => '仪表板',
            'delete'            => '删除',
            'edit'              => '编辑',
            'extensions'        => '扩展程序',
            'general'           => '通用',
            'inventory-sources' => '库存来源',
            'invoice'           => '发票',
            'orders'            => '订单',
            'payment-request'   => '付款请求',
            'print'             => '打印',
            'print-invoice'     => '打印发票',
            'product-reviews'   => '产品评论',
            'products'          => '产品',
            'reporting'         => '报告',
            'sales'             => '销售',
            'seller-reviews'    => '卖家评论',
            'settings'          => '设置',
            'shipment'          => '发货',
            'transactions'      => '交易',
            'view'              => '查看',
        ],

        'breadcrumb' => [
            'add-new-product'   => '添加新产品',
            'assign'            => '分配',
            'bookings'          => '预订',
            'communication'     => '通讯',
            'create'            => '创建',
            'customers'         => '客户',
            'dashboard'         => '仪表板',
            'edit'              => '编辑',
            'extensions'        => '扩展程序',
            'general'           => '常规',
            'inventory-sources' => '库存来源',
            'manage-profile'    => '管理个人资料',
            'orders'            => '订单',
            'product-reviews'   => '产品评论',
            'products'          => '产品',
            'reporting'         => '报告',
            'roles'             => '角色',
            'sales'             => '销售',
            'seller-reviews'    => '卖家评论',
            'settings'          => '设置',
            'title'             => '个人资料',
            'transaction'       => '交易',
            'users'             => '用户',
            'view'              => '查看',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => '登录',
            'create-your-account' => '创建您的帐户',
            'email'               => '电子邮件',
            'footer'              => '© 版权所有 2010 - :current_year, Webkul Software（印度注册）。保留所有权利。',
            'forgot-pass'         => '忘记密码？',
            'form-login-text'     => '如果您有帐户，请使用您的电子邮件地址登录。',
            'invalid-credentials' => '请检查您的凭据并重试。',
            'new-seller'          => '新卖家？',
            'not-approved'        => '您的激活正在等待管理员批准',
            'page-title'          => '卖家登录',
            'password'            => '密码',
            'show-password'       => '显示密码',
            'suspended-message'   => '您的账户已被暂停。请联系管理员以获取更多信息。',
            'title'               => '登录',
        ],

        'signup' => [
            'account-exists'   => '已经有帐户了吗？',
            'bagisto'          => 'Bagisto',
            'button-title'     => '注册',
            'confirm-pass'     => '确认密码',
            'email'            => '电子邮件',
            'footer'           => '© 版权所有 2010 - :current_year, Webkul Software（印度注册）。保留所有权利。',
            'form-signup-text' => '如果您是我们商店的新用户，我们很高兴将您作为会员。',
            'name'             => '姓名',
            'page-title'       => '成为卖家',
            'password'         => '密码',
            'sign-in-button'   => '登录',
            'success'          => '帐户创建成功。',
            'url'              => '商店网址',
        ],

        'forgot-password' => [
            'already-sent'         => '我们已经将密码重置链接发送到您的邮箱。',
            'back'                 => '返回登录？',
            'bagisto'              => 'Bagisto',
            'email'                => '电子邮件',
            'email-not-exist'      => '我们找不到使用该电子邮件地址的用户。',
            'footer'               => '© 版权所有 2010 - :current_year, Webkul Software（印度注册）。保留所有权利。',
            'forgot-password-text' => '如果您忘记了密码，请通过输入您的电子邮件地址恢复它。',
            'page-title'           => '忘记密码？',
            'reset-link-sent'      => '我们已经通过电子邮件发送了您的重置密码链接。',
            'sign-in-button'       => '登录',
            'submit'               => '重置密码',
            'title'                => '找回密码',
        ],

        'reset-password' => [
            'back-link-title'  => '返回登录',
            'bagisto'          => 'Bagisto',
            'confirm-password' => '确认密码',
            'email'            => '注册电子邮件',
            'footer'           => '© 版权所有 2010 - :current_year, Webkul Software（印度注册）。保留所有权利。',
            'password'         => '密码',
            'submit-btn-title' => '重置密码',
            'title'            => '重置密码',
        ],

        'dashboard' => [
            'add-product'           => '添加产品',
            'avg-order-sell'        => '平均订单销售额',
            'category-info'         => '在所选时间段内未找到类别',
            'complete-profile-link' => '完成您的个人资料 &rarr;',
            'completed-orders'      => '已完成 (:count)',
            'customer-info'         => '在所选时间段内未找到客户',
            'date-range'            => '日期范围',
            'empty-threshold'       => '空阈值',
            'empty-threshold-desc'  => '没有可用产品',
            'end-date'              => '结束日期',
            'hi-comment'            => '快速查看您的店铺正在发生的情况。',
            'hi-seller'             => '嗨！:seller_name',
            'month'                 => '本月',
            'no-category'           => '没有可用数据',
            'no-customer'           => '没有可用数据',
            'no-record-available'   => '没有可用记录。',
            'order-count'           => ':total 订单',
            'overall-details'       => '总体详情',
            'pending-orders'        => '待处理 (:count)',
            'per-unit'              => ':price/单位',
            'processing-orders'     => '处理中 (:count)',
            'product-info'          => '在路上添加相关产品',
            'profile-score'         => '个人资料评分',
            'profile-score-desc'    => '通过保持您的个人资料信息完整来最大化您的可见性。',
            'qty-stock'             => ':qty 库存',
            'refunded-orders'       => '已退款 (:count)',
            'remaining-payout'      => '剩余支付',
            'start-date'            => '开始日期',
            'stock-threshold'       => '库存阈值',
            'title'                 => '仪表板',
            'today'                 => '今天',
            'top-categories'        => '热门类别',
            'top-customers'         => '销售最多的客户',
            'top-products'          => '最畅销的产品',
            'total-customers'       => '总客户数',
            'total-orders'          => '总订单数',
            'total-payout'          => '总支付',
            'total-sale'            => '总销售额：:total',
            'total-sales'           => '总销售额',
            'view-all-btn'          => '查看全部',
            'visitor-count'         => '访客 - :count',
            'week'                  => '本周',
            'year'                  => '今年',
        ],

        'orders' => [
            'index' => [
                'title' => '订单',

                'datagrid' => [
                    'canceled'        => '已取消',
                    'closed'          => '已关闭',
                    'commission'      => '佣金',
                    'completed'       => '已完成',
                    'customer'        => '客户',
                    'date'            => '日期',
                    'discount'        => '折扣',
                    'email'           => '邮箱',
                    'fraud'           => '欺诈',
                    'gross-amt'       => '总金额',
                    'id'              => '编号',
                    'invoice-pending' => '发票待处理',
                    'items'           => '商品',
                    'location'        => '位置',
                    'order-id'        => 'ID - #:id',
                    'paid'            => '已支付',
                    'payment'         => '支付',
                    'payment-request' => '支付请求',
                    'pending'         => '待处理',
                    'pending-payment' => '待支付',
                    'processing'      => '处理中',
                    'refunded'        => '已退款',
                    'requested'       => '已请求',
                    'seller-earn'     => '卖家收入',
                    'shipment'        => '发货',
                    'status'          => '状态',
                    'transaction'     => '交易',
                    'view'            => '查看',
                ],

                'payment-req-success'  => '您的支付请求已成功提交',
                'something-went-wrong' => '出现错误，请稍后再试',
            ],

            'view' => [
                'admin-commission'           => '管理员佣金',
                'billing-address'            => '账单地址',
                'by-customer'                => '由客户 - :name',
                'cancel-btn'                 => '取消',
                'cancel-confirm-msg'         => '确定要取消此订单吗？',
                'cancel-error-msg'           => '订单无法取消',
                'cancel-success-msg'         => '订单已取消',
                'canceled'                   => '已取消',
                'closed'                     => '已关闭',
                'completed'                  => '已完成',
                'discount'                   => '折扣',
                'fraud'                      => '欺诈',
                'grand-total'                => '总额',
                'info'                       => '信息',
                'item-canceled'              => '已取消 (:qty_canceled)',
                'item-invoice'               => '已开票 (:qty_invoiced)',
                'item-ordered'               => '已订购 (:qty_ordered)',
                'item-refunded'              => '已退款 (:qty_refunded)',
                'item-shipped'               => '已发货 (:qty_shipped)',
                'item-status'                => '商品状态',
                'payment-method'             => '支付方式',
                'pending'                    => '待处理',
                'pending-payment'            => '待支付',
                'permission-error'           => '您没有取消订单的权限',
                'place-on'                   => '下单于：:date',
                'price'                      => '价格',
                'price-excl-tax'             => '价格（不含税）',
                'price-incl-tax'             => '价格（含税）',
                'processing'                 => '处理中',
                'product'                    => '商品',
                'shipping-address'           => '送货地址',
                'shipping-handling'          => '运费与手续费',
                'shipping-handling-excl-tax' => '运费及手续费（不含税）',
                'shipping-handling-incl-tax' => '运费及手续费（含税）',
                'shipping-method'            => '运输方式',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => '小计',
                'sub-total-excl-tax'         => '小计（不含税）',
                'sub-total-incl-tax'         => '小计（含税）',
                'tax'                        => '税金',
                'tax-amount'                 => '税金',
                'tax-percent'                => '税率',
                'title'                      => '订单 #:order_id',
                'total'                      => '总计',
                'total-due'                  => '待支付总额',
                'total-paid'                 => '已支付总额',
                'total-refunded'             => '已退款总额',
                'total-seller-amt'           => '卖家总额',

                'invoices' => [
                    'bank-details'               => '银行详细信息',
                    'bill-to'                    => '账单寄送至',
                    'contact'                    => '联系人',
                    'contact-number'             => '联系电话',
                    'created-on'                 => '创建于：:date_time',
                    'date'                       => '发票日期',
                    'discount'                   => '折扣',
                    'excl-tax'                   => '不含税：',
                    'grand-total'                => '总计',
                    'individual-invoice'         => '发票编号：:invoice_id',
                    'invoice'                    => '发票',
                    'invoice-id'                 => '发票编号',
                    'name'                       => '姓名',
                    'order-date'                 => '订单日期',
                    'order-id'                   => '订单编号',
                    'payment-method'             => '支付方式',
                    'payment-terms'              => '付款条款',
                    'price'                      => '价格',
                    'print'                      => '打印',
                    'product-name'               => '产品名称',
                    'qty'                        => '数量',
                    'ship-to'                    => '送货至',
                    'shipping-handling'          => '运费与手续费',
                    'shipping-handling-excl-tax' => '运费与手续费（不含税）',
                    'shipping-handling-incl-tax' => '运费与手续费（含税）',
                    'shipping-method'            => '运输方式',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => '小计',
                    'sub-total-excl-tax'         => '小计（不含税）',
                    'sub-total-incl-tax'         => '小计（含税）',
                    'tax'                        => '税金',
                    'tax-amount'                 => '税额',
                    'title'                      => '发票',
                    'vat-number'                 => '增值税号',
                ],

                'shipments' => [
                    'carrier-title'       => '承运商标题',
                    'created-on'          => '创建于 :date_time',
                    'individual-shipment' => '发货单 #:track_number',
                    'inventory-source'    => '库存来源',
                    'name'                => '名称',
                    'qty'                 => '数量',
                    'sku'                 => 'SKU - :sku',
                    'title'               => '发货',
                    'tracking-number'     => '跟踪编号',
                ],

                'refunds' => [
                    'adjustment-fee'             => '调整费用',
                    'adjustment-refund'          => '调整退款',
                    'created-on'                 => '创建于 :date_time',
                    'discount'                   => '折扣',
                    'grand-total'                => '总金额',
                    'individual-refund'          => '退款 #:refund_id',
                    'no-result-found'            => '未找到任何记录',
                    'price'                      => '价格',
                    'product-name'               => '产品名称',
                    'qty'                        => '数量',
                    'shipping-handling'          => '运输与处理',
                    'shipping-handling-excl-tax' => '运费及手续费（不含税）',
                    'shipping-handling-incl-tax' => '运费及手续费（含税）',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => '小计（不含税）',
                    'sub-total-incl-tax'         => '小计（含税）',
                    'subtotal'                   => '小计',
                    'tax'                        => '税金',
                    'tax-amount'                 => '税额',
                    'title'                      => '退款',
                ],
            ],

            'invoices' => [
                'create-btn'       => '创建发票',
                'invoice-success'  => '发票创建成功',
                'permission-error' => '您没有创建订单发票的权限',
                'price'            => '价格',
                'product-name'     => '商品名称',
                'qty'              => '数量',
                'qty-error'        => '所请求的数量不可用',
                'sub-total'        => '发票<br>小计',
                'title'            => '创建发票',
                'total'            => '总计',
            ],

            'shipments' => [
                'avl-qty'          => '可用 - :qty 数量',
                'carrier-title'    => '承运商标题',
                'create-btn'       => '发货',
                'ordered-qty'      => '已订购数量',
                'permission-error' => '您没有创建发货单的权限',
                'product-name'     => '商品名称',
                'qty'              => '数量',
                'qty-error'        => '所请求的数量不可用',
                'shipment-success' => '发货单创建成功',
                'shipped-qty'      => '已发货数量',
                'sku'              => 'SKU - :sku',
                'source'           => '产品订单来源',
                'title'            => '创建发货单',
                'tracking-id'      => '跟踪号',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => '创建日期',
                    'from'         => '从',
                    'id'           => 'ID',
                    'order-id'     => '订单ID',
                    'qty'          => '数量',
                    'to'           => '至',
                    'view'         => '查看',
                ],

                'title'    => '预订',
            ],

            'calendar' => [
                'booking-date'     => '预订日期',
                'booking-details'  => '预订详情',
                'canceled'         => '已取消',
                'closed'           => '已关闭',
                'done'             => '已完成',
                'order-id'         => '订单ID',
                'pending'          => '待处理',
                'price'            => '价格',
                'status'           => '状态',
                'time-slot'        => '时间段：',
                'view-details'     => '查看详情',
            ],

            'title' => '预订产品',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => '剩余支付',
                'title'                  => '交易',
                'total-payout'           => '总支付',
                'total-seller-sale'      => '总销售额（卖家）',
                'total-admin-commission' => '总佣金（管理员）',
                'total-sale-invoiced'    => '总销售额（已开票）',

                'datagrid' => [
                    'comment'        => '评论',
                    'id'             => '编号',
                    'total'          => '总计',
                    'transaction-id' => '交易 ID',
                ],
            ],

            'view' => [
                'commission'        => '佣金',
                'created-on'        => '创建于 :date',
                'date'              => '日期',
                'id'                => '交易 ID',
                'method'            => '付款方式',
                'name'              => '姓名',
                'payment-method'    => ':method 付款',
                'price'             => '价格',
                'print'             => '打印',
                'qty'               => '数量',
                'seller-total'      => '卖家总计',
                'shipping-handling' => '运输和处理',
                'subtotal'          => '小计',
                'tax'               => '税',
                'title'             => '交易',
                'total'             => '总计',
                'transaction-id'    => '交易编号：:transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => '添加新产品',
                'title'           => '产品',

                'datagrid' => [
                    'active'         => '启用',
                    'approved'       => '已批准',
                    'category'       => '类别',
                    'delete'         => '删除',
                    'disable'        => '禁用',
                    'disapproved'    => '未批准',
                    'edit'           => '编辑',
                    'id'             => '编号',
                    'image'          => '图片',
                    'is-approved'    => '已批准',
                    'name'           => '名称',
                    'out-of-stock'   => '缺货',
                    'price'          => '价格',
                    'product-number' => '产品编号',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => '状态',
                    'stock'          => '库存',
                    'total-quantity' => ':quantity 可用',
                    'type'           => '类型',
                ],
            ],

            'create' => [
                'attribute-family'          => '属性家族',
                'back'                      => '返回',
                'continue'                  => '继续',
                'create-new-product'        => '创建新产品',
                'create-your-new-product'   => '如果产品不存在，请创建您的新产品',
                'disable-product-message'   => '管理员禁用了创建或分配产品的功能。',
                'image-placeholder'         => '您的图片',
                'no-result'                 => '没有结果',
                'not-allowed'               => '製品を作成する権限がありません',
                'or'                        => '或',
                'product-type'              => '产品类型',
                'search-product'            => '搜索产品',
                'sell-admin-product-prices' => '以您的价格出售管理员产品。',
                'sell-as-yours'             => '作为您的产品销售',
                'sku'                       => 'SKU',
                'sub-title'                 => '您可以以2种方式添加产品，要么从管理员产品中出售，要么创建自己的产品。',
                'title'                     => '添加新产品',
                'update-profile'            => '请更新您的个人资料详情',
            ],

            'edit' => [
                'back-btn'      => '返回',
                'preview'       => '预览',
                'remove'        => '删除',
                'save-btn'      => '保存产品',
                'title'         => '编辑产品',
                'channels'      => '渠道',
                'progress-info' => '提升产品吸引力，确保所有产品详情完整准确，给客户留下深刻印象！',

                'price' => [
                    'group' => [
                        'add-group-price'           => '添加组价格',
                        'all-groups'                => '所有群组',
                        'create-btn'                => '添加新的',
                        'discount-group-price-info' => '对于 :qty 个数量，折扣价格为 :price',
                        'edit-btn'                  => '编辑',
                        'empty-info'                => '针对属于特定组的客户的特殊定价。',
                        'fixed-group-price-info'    => '对于 :qty 个数量，固定价格为 :price',
                        'title'                     => '客户组价格',

                        'create' => [
                            'all-groups'     => '所有群组',
                            'create-title'   => '创建客户组价格',
                            'customer-group' => '客户组',
                            'delete-btn'     => '删除',
                            'discount'       => '折扣',
                            'fixed'          => '固定',
                            'price'          => '价格',
                            'price-type'     => '价格类型',
                            'qty'            => '数量',
                            'save-btn'       => '保存',
                            'update-title'   => '更新客户组价格',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => '待发货数量: :qty',
                    'pending-ordered-qty-info' => '待发货数量将在发货后从相应的库存来源中扣减。在取消的情况下，待处理数量将可供销售。',
                    'title'                    => '库存',
                ],

                'categories' => [
                    'title' => '分类',
                ],

                'images' => [
                    'info'  => '图像分辨率应为 609 像素 X 560 像素',
                    'title' => '图片',
                ],

                'videos' => [
                    'error' => '视频大小不得超过:max千字节。请选择一个较小的文件。',
                    'info'  => '最大视频尺寸应为 :size',
                    'title' => '视频',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => '在路上添加相关产品。',
                        'info'       => '除了客户当前查看的产品外，他们还会看到相关产品。',
                        'title'      => '相关产品',
                    ],

                    'up-sells' => [
                        'empty-info' => '在路上添加额外的销售产品。',
                        'info'       => '客户将看到上卖产品，这些产品是当前查看的产品的高级或更高质量的替代品。',
                        'title'      => '上卖产品',
                    ],

                    'cross-sells' => [
                        'empty-info' => '在路上添加交叉销售产品。',
                        'info'       => '在购物车旁边，您将找到这些“冲动购买”产品，它们被定位为与已经添加到购物车的商品相补充的交叉销售产品。',
                        'title'      => '交叉销售产品',
                    ],

                    'add-btn'           => '添加产品',
                    'delete'            => '删除',
                    'empty-info'        => '随时添加 :type 产品。',
                    'empty-title'       => '添加产品',
                    'image-placeholder' => '产品图片',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => '添加选项',
                            'empty-info'        => '快速创建可定制选项。',
                            'empty-title'       => '添加选项',
                            'info'              => '这将定制简单的产品。',
                            'title'             => '可定制项目',

                            'update-create' => [
                                'is-required'               => '是否必填',
                                'max-characters'            => '最大字符数',
                                'name'                      => '标题',
                                'no'                        => '否',
                                'price'                     => '价格',
                                'save-btn'                  => '保存',
                                'supported-file-extensions' => '支持的文件扩展名',
                                'title'                     => '选项',
                                'type'                      => '类型',
                                'yes'                       => '是',
                            ],

                            'option' => [
                                'add-btn'     => '添加选项',
                                'delete'      => '删除',
                                'delete-btn'  => '删除',
                                'edit-btn'    => '编辑',
                                'empty-info'  => '快速创建不同产品组合。',
                                'empty-title' => '添加选项',

                                'types' => [
                                    'text' => [
                                        'title' => '文本',
                                    ],

                                    'textarea' => [
                                        'title' => '文本区域',
                                    ],

                                    'checkbox' => [
                                        'title' => '复选框',
                                    ],

                                    'radio' => [
                                        'title' => '单选框',
                                    ],

                                    'select' => [
                                        'title' => '选择',
                                    ],

                                    'multiselect' => [
                                        'title' => '多选',
                                    ],

                                    'date' => [
                                        'title' => '日期',
                                    ],

                                    'datetime' => [
                                        'title' => '日期和时间',
                                    ],

                                    'time' => [
                                        'title' => '时间',
                                    ],

                                    'file' => [
                                        'title' => '文件',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => '标签',
                                        'price'    => '价格',
                                        'save-btn' => '保存',
                                        'title'    => '选项',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => '产品已关联到配置、组或捆绑产品。',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => '添加变体',
                        'delete-btn'        => '删除',
                        'edit-btn'          => '编辑',
                        'empty-info'        => '随时创建产品的各种组合。',
                        'empty-title'       => '添加变体',
                        'image-placeholder' => '产品图片',
                        'info'              => '变体产品取决于所有可能的属性组合。',
                        'qty'               => ':qty 个',
                        'sku'               => 'SKU - :sku',
                        'title'             => '变体',

                        'create'  => [
                            'description'            => '描述',
                            'name'                   => '名称',
                            'save-btn'               => '添加',
                            'title'                  => '添加变体',
                            'variant-already-exists' => '此变体已存在',
                        ],

                        'edit' => [
                            'disabled'        => '禁用',
                            'edit-info'       => '如果您想详细更新产品信息，请转至',
                            'edit-link-title' => '产品详细信息页面',
                            'enabled'         => '启用',
                            'images'          => '图片',
                            'name'            => '名称',
                            'price'           => '价格',
                            'quantities'      => '数量',
                            'save-btn'        => '保存',
                            'sku'             => 'SKU',
                            'status'          => '状态',
                            'title'           => '产品',
                            'weight'          => '重量',
                        ],

                        'mass-edit' => [
                            'add-images'          => '添加图片',
                            'apply-to-all-btn'    => '应用到所有',
                            'apply-to-all-sku'    => '应用价格到所有SKU。',
                            'edit-inventories'    => '编辑库存',
                            'edit-prices'         => '编辑价格',
                            'price'               => '价格',
                            'remove-images'       => '移除图片',
                            'remove-variants'     => '移除变体',
                            'select-action'       => '选择操作',
                            'select-variants'     => '选择变体',
                            'edit-name'           => '编辑名称',
                            'name'                => '名称',
                            'edit-sku'            => '编辑SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => '编辑重量',
                            'weight'              => '重量',
                            'edit-status'         => '编辑状态',
                            'status'              => '状态',
                            'apply-to-all-name'   => '将名称应用于所有变体。',
                            'apply-to-all-weight' => '将重量应用于所有变体。',
                            'apply-to-all-status' => '将状态应用于所有变体。',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => '添加产品',
                        'default-qty'       => '默认数量',
                        'delete'            => '删除',
                        'empty-info'        => '随时创建产品的各种组合。',
                        'empty-title'       => '添加产品',
                        'image-placeholder' => '产品图片',
                        'info'              => '分组产品包括独立销售的项目，作为一个集合呈现，允许按季节或主题进行变化或协调。每个产品可以单独购买，也可以作为该组的一部分购买。',
                        'sku'               => 'SKU - :sku',
                        'title'             => '组合产品',
                    ],

                    'bundle' => [
                        'add-btn'           => '添加选项',
                        'empty-info'        => '随时创建捆绑选项。',
                        'empty-title'       => '添加选项',
                        'image-placeholder' => '产品图片',
                        'info'              => '捆绑产品是一组多个项目或服务，以特价一起销售，为客户提供价值和便利。',
                        'title'             => '捆绑项目',

                        'update-create' => [
                            'checkbox'    => '复选框',
                            'is-required' => '必填',
                            'multiselect' => '多选框',
                            'name'        => '标题',
                            'no'          => '否',
                            'radio'       => '单选按钮',
                            'save-btn'    => '保存',
                            'select'      => '选择',
                            'title'       => '选项',
                            'type'        => '类型',
                            'yes'         => '是',
                        ],

                        'option' => [
                            'add-btn'     => '添加产品',
                            'default-qty' => '默认数量',
                            'delete'      => '删除',
                            'delete-btn'  => '删除',
                            'edit-btn'    => '编辑',
                            'empty-info'  => '随时创建产品的各种组合。',
                            'empty-title' => '添加产品',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => '使用复选框设置默认产品',
                                    'title' => '复选框',
                                ],

                                'multiselect' => [
                                    'info'  => '使用复选框按钮设置默认产品',
                                    'title' => '多选框',
                                ],

                                'radio' => [
                                    'info'  => '使用单选按钮设置默认产品',
                                    'title' => '单选按钮',
                                ],

                                'select' => [
                                    'info'  => '使用单选按钮设置默认产品',
                                    'title' => '选择',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => '可用起始日期',
                        'available-to'   => '可用结束日期',
                        'location'       => '位置',
                        'qty'            => '数量',
                        'title'          => '预订类型',

                        'available-every-week' => [
                            'no'    => '否',
                            'title' => '每周可用',
                            'yes'   => '是',
                        ],

                        'appointment' => [
                            'break-duration' => '每个时段之间的休息时间（分钟）',
                            'slot-duration'  => '时段持续时间（分钟）',

                            'same-slot-for-all-days' => [
                                'no'    => '否',
                                'title' => '所有天数相同的时段',
                                'yes'   => '是',
                            ],
                        ],

                        'default' => [
                            'add'              => '添加',
                            'break-duration'   => '每个时段之间的休息时间（分钟）',
                            'close'            => '关闭',
                            'description'      => '预订信息',
                            'description-info' => '时间持续时间将根据时段创建并显示。它将在所有时段中是唯一的，并在商店前台可见。',
                            'edit'             => '编辑',
                            'many'             => '一天多次预订',
                            'one'              => '多天一次预订',
                            'open'             => '打开',
                            'slot-add'         => '添加时段',
                            'slot-duration'    => '时段持续时间（分钟）',
                            'slot-title'       => '时段时间持续时间',
                            'title'            => '默认',
                            'unavailable'      => '不可用',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => '添加时段',
                                    'close'      => '关闭',
                                    'day'        => '天',
                                    'edit-title' => '编辑时段',
                                    'friday'     => '星期五',
                                    'from'       => '从',
                                    'from-day'   => '从天',
                                    'from-time'  => '从时间',
                                    'monday'     => '星期一',
                                    'open'       => '打开',
                                    'saturday'   => '星期六',
                                    'save'       => '保存',
                                    'select'     => '选择',
                                    'status'     => '状态',
                                    'sunday'     => '星期天',
                                    'thursday'   => '星期四',
                                    'to'         => '到',
                                    'to-day'     => '到天',
                                    'to-time'    => '到时间',
                                    'tuesday'    => '星期二',
                                    'wednesday'  => '星期三',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => '添加票',
                            'delete'             => '删除',
                            'description'        => '描述',
                            'description-info'   => '没有可用的票。',
                            'edit'               => '编辑',
                            'name'               => '名称',
                            'price'              => '价格',
                            'qty'                => '数量',
                            'special-price'      => '特价',
                            'special-price-from' => '特价起始日期',
                            'special-price-to'   => '特价结束日期',
                            'title'              => '票',
                            'valid-from'         => '有效起始日期',
                            'valid-until'        => '有效结束日期',

                            'modal'              => [
                                'edit' => '编辑票',
                                'save' => '保存',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => '添加票',
                            ],

                            'slots'   => [
                                'add'         => '添加时段',
                                'description' => '可用时段和时间持续时间。',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => '按天计费',
                            'daily-hourly'           => '按天和按小时计费',
                            'daily-price'            => '每日价格',
                            'hourly'                 => '按小时计费',
                            'hourly-price'           => '每小时价格',
                            'title'                  => '租赁类型',

                            'same-slot-for-all-days' => [
                                'no'    => '否',
                                'title' => '所有天数相同的时段',
                                'yes'   => '是',
                            ],
                        ],

                        'slots' => [
                            'add'              => '添加时段',
                            'description-info' => '时间持续时间将根据时段创建并显示。它将在所有时段中是唯一的，并在商店前台可见。',
                            'save'             => '保存',
                            'title'            => '时段时间持续时间',
                            'unavailable'      => '不可用',

                            'action'           => [
                                'add' => '添加',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => '星期五',
                                    'from'       => '从',
                                    'monday'     => '星期一',
                                    'saturday'   => '星期六',
                                    'sunday'     => '星期天',
                                    'thursday'   => '星期四',
                                    'to'         => '到',
                                    'tuesday'    => '星期二',
                                    'wednesday'  => '星期三',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => '每个时段之间的休息时间（分钟）',
                            'guest-capacity'            => '客人容量',
                            'guest-limit'               => '每桌客人限制',
                            'prevent-scheduling-before' => '防止提前安排',
                            'slot-duration'             => '时段持续时间（分钟）',

                            'charged-per'               => [
                                'guest'  => '客人',
                                'table'  => '桌子',
                                'title'  => '按每个收费',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => '否',
                                'title' => '所有天数相同的时段',
                                'yes'   => '是',
                            ],
                        ],

                        'type' => [
                            'appointment' => '预约预订',
                            'default'     => '默认预订',
                            'event'       => '活动预订',
                            'many'        => '多个',
                            'one'         => '一个',
                            'rental'      => '租赁预订',
                            'table'       => '桌子预订',
                            'title'       => '类型',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => '添加链接',
                            'delete-btn'  => '删除',
                            'edit-btn'    => '编辑',
                            'empty-info'  => '随时创建链接。',
                            'empty-title' => '添加链接',
                            'file'        => '文件：',
                            'info'        => '可下载产品类型允许销售数字产品，如电子书，软件应用程序，音乐，游戏等。',
                            'sample-file' => '示例文件：',
                            'sample-url'  => '示例网址：',
                            'title'       => '可下载链接',
                            'url'         => '网址：',

                            'update-create' => [
                                'downloads'   => '允许下载',
                                'file'        => '文件',
                                'file-type'   => '文件类型',
                                'name'        => '标题',
                                'price'       => '价格',
                                'sample'      => '示例',
                                'sample-type' => '示例类型',
                                'save-btn'    => '保存',
                                'title'       => '链接',
                                'url'         => '网址',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => '添加示例',
                            'delete-btn'  => '删除',
                            'edit-btn'    => '编辑',
                            'empty-info'  => '随时创建示例。',
                            'empty-title' => '添加示例',
                            'file'        => '文件：',
                            'info'        => '可下载产品类型允许销售数字产品，如电子书，软件应用程序，音乐，游戏等。',
                            'title'       => '可下载示例',
                            'url'         => '网址：',

                            'update-create' => [
                                'file'      => '文件',
                                'file-type' => '文件类型',
                                'name'      => '标题',
                                'save-btn'  => '保存',
                                'title'     => '链接',
                                'url'       => '网址',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => '产品创建成功',
            'delete-failed'            => '产品删除失败',
            'delete-success'           => '产品删除成功',
            'product-type-not-allowed' => '您无权出售:type产品',
            'saved-inventory-message'  => '产品保存成功',
            'update-success'           => '产品更新成功',

            'assign' => [
                'already-selling'     => '您已经在销售此产品',
                'back-btn'            => '返回',
                'condition'           => '状态',
                'create-success'      => '产品成功分配给卖家',
                'description'         => '描述',
                'image-size'          => '图像分辨率应为 609px X 560px',
                'images'              => '图片',
                'new'                 => '新',
                'not-allowed'         => '您无权分配此产品',
                'old'                 => '旧',
                'price'               => '价格',
                'product-not-allowed' => '您无权销售 :type 类型的产品',
                'quantities'          => '数量',
                'save-btn'            => '保存',
                'title'               => '分配产品',
                'update-success'      => '分配的产品更新成功',

                'product-details' => [
                    'active'            => '活跃',
                    'approved'          => '已批准',
                    'disable'           => '禁用',
                    'disapproved'       => '未批准',
                    'image-placeholder' => '产品图片',
                    'title'             => '产品详情',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => '产品评论',

                'datagrid' => [
                    'approved'      => '已批准',
                    'customer'      => '客户',
                    'date'          => '日期',
                    'description'   => '描述',
                    'email'         => '电子邮件',
                    'pending'       => '待定',
                    'product'       => '产品',
                    'rating'        => '评分',
                    'status'        => '状态',
                    'title'         => '标题',
                    'unapproved'    => '未批准',
                    'update-status' => '更新状态',
                ],
            ],

            'update-success' => '产品评论已成功更新',
            'delete-success' => '产品评论已成功删除。',
        ],

        'customers' => [
            'index' => [
                'title' => '顾客',

                'datagrid' => [
                    'active'      => '活跃',
                    'customer'    => '顾客',
                    'email'       => '电子邮件',
                    'gender'      => '性别',
                    'group'       => '组',
                    'inactive'    => '非活跃',
                    'order-count' => '订单数量',
                    'revenue'     => '收入',
                    'status'      => '状态',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => '管理个人资料',
                'edit-btn' => '编辑个人资料',

                'general' => [
                    'email'      => '电子邮件',
                    'name'       => '姓名',
                    'phone'      => '电话号码',
                    'shop-slug'  => '商店别名',
                    'shop-title' => '商店标题',
                    'title'      => '基本信息',
                ],

                'about-store' => [
                    'title' => '关于商店',
                ],

                'meta' => [
                    'meta-description' => '元描述',
                    'meta-keywords'    => '元关键词',
                    'meta-title'       => '元标题',
                    'title'            => '元描述',
                ],

                'policy' => [
                    'privacy'  => '隐私政策',
                    'return'   => '退货政策',
                    'shipping' => '运输政策',
                    'title'    => '政策',
                ],

                'address' => [
                    'city'     => '城市',
                    'country'  => '国家',
                    'postcode' => '邮政编码',
                    'state'    => '州/省',
                    'title'    => '商店地址',
                    'address'  => '地址',
                ],

                'social' => [
                    'link'  => ':name 链接',
                    'title' => '社交链接',
                ],

                'minimum-order-amount' => [
                    'title'  => '最低订单金额',
                ],

                'google-analytics' => [
                    'id'    => '分析 ID',
                    'title' => 'Google 分析',
                ],

                'shop-information' => [
                    'admin-commission'       => '管理员佣金',
                    'admin-commission-value' => '管理员佣金 :rate% 的总发票金额',
                    'allowed-categories'     => '允许的类别',
                    'no-categories'          => '没有可用类别',
                    'allowed-product-types'  => '允许的产品类型',
                    'no-product-types'       => '没有可用的产品类型',
                    'payment-methods'        => '支付方式',
                    'no-payment-methods'     => '没有可用的支付方式',
                    'shipping-methods'       => '运输方式',
                    'no-shipping-methods'    => '没有可用的运输方式',
                    'title'                  => '商店信息',
                ],
            ],

            'edit' => [
                'banner'              => '横幅',
                'banner-description'  => '上传比例为 13:3 的横幅，高度 375，安全区域 375x250，移动端居中',
                'delete-banner'       => '删除横幅',
                'delete-logo'         => '删除徽标',
                'logo'                => '徽标',
                'logo-description'    => '上传比例为 1:1 的徽标',
                'save-btn'            => '保存个人资料',
                'title'               => '管理个人资料',
                'upload-new-banner'   => '上传新横幅',
                'upload-new-logo'     => '上传新徽标',

                'general' => [
                    'email'      => '电子邮件',
                    'name'       => '姓名',
                    'phone'      => '电话号码',
                    'shop-slug'  => '商店别名',
                    'shop-title' => '商店标题',
                    'title'      => '基本信息',
                ],

                'about-store' => [
                    'title' => '关于商店',
                ],

                'meta' => [
                    'meta-description' => '元描述',
                    'meta-keywords'    => '元关键词',
                    'meta-title'       => '元标题',
                    'title'            => '元描述',
                ],

                'policy' => [
                    'privacy'  => '隐私政策',
                    'return'   => '退货政策',
                    'shipping' => '运输政策',
                    'title'    => '政策',
                ],

                'address' => [
                    'city'           => '城市',
                    'country'        => '国家',
                    'postcode'       => '邮政编码',
                    'state'          => '州/省',
                    'title'          => '商店地址',
                    'select-country' => '选择国家',
                    'select-state'   => '选择州/省',
                    'street-address' => '街道地址',
                    'address'        => '地址',
                ],

                'social' => [
                    'link'  => ':name 链接',
                    'title' => '社交链接',
                ],

                'minimum-order-amount' => [
                    'title'  => '最低订单金额',
                ],

                'google-analytics' => [
                    'id'    => 'Google 分析 ID',
                    'title' => 'Google 分析',
                ],
            ],

            'update-success' => '您的个人资料已成功更新',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => '卖家评价',

                'datagrid' => [
                    'approved'    => '已批准',
                    'customer'    => '顾客',
                    'date'        => '日期',
                    'description' => '描述',
                    'disapproved' => '未批准',
                    'email'       => '电子邮件',
                    'pending'     => '待处理',
                    'rating'      => '评分',
                    'status'      => '状态',
                    'title'       => '标题',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => '保存',
                    'title'              => '常规',
                    'unmatched-password' => '当前密码不匹配',
                    'update-success'     => '常规设置已成功更新',

                    'regional-setting' => [
                        'currency'      => '货币',
                        'locale'        => '语言环境',
                        'select-locale' => '选择语言环境',
                        'title'         => '区域设置',
                    ],

                    'password-setting' => [
                        'confirm-password' => '确认密码',
                        'current-password' => '当前密码',
                        'new-password'     => '新密码',
                        'title'            => '密码设置',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => '创建角色',
                    'title'      => '角色',

                    'datagrid' => [
                        'all'             => '全部',
                        'custom'          => '自定义',
                        'delete'          => '删除',
                        'edit'            => '编辑',
                        'id'              => '编号',
                        'name'            => '名称',
                        'permission-type' => '权限类型',
                    ],
                ],

                'create' => [
                    'access-control' => '访问控制',
                    'all'            => '全部',
                    'back-btn'       => '返回',
                    'custom'         => '自定义',
                    'description'    => '描述',
                    'general'        => '通用',
                    'name'           => '名称',
                    'permissions'    => '权限',
                    'save-btn'       => '保存角色',
                    'title'          => '创建角色',
                ],

                'edit' => [
                    'access-control' => '访问控制',
                    'all'            => '全部',
                    'back-btn'       => '返回',
                    'custom'         => '自定义',
                    'description'    => '描述',
                    'general'        => '通用',
                    'name'           => '名称',
                    'permissions'    => '权限',
                    'save-btn'       => '保存角色',
                    'title'          => '编辑角色',
                ],

                'being-used'        => '该角色正在被一些卖家使用',
                'create-success'    => '角色创建成功',
                'delete-failed'     => '角色删除失败',
                'delete-success'    => '角色删除成功',
                'last-delete-error' => '至少需要一个角色',
                'update-success'    => '角色更新成功',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => '创建用户',
                    'create-title'     => '创建用户',
                    'edit-title'       => '编辑用户',
                    'email'            => '电子邮件',
                    'name'             => '姓名',
                    'phone-number'     => '电话号码',
                    'role'             => '角色',
                    'save-btn'         => '保存用户',
                    'select-role'      => '选择角色',
                    'password'         => '密码',
                    'confirm-password' => '确认密码',
                    'status'           => '状态',
                    'title'            => '用户',
                    'create-success'   => '用户创建成功',
                    'update-success'   => '用户更新成功',
                    'delete-success'   => '用户删除成功',
                    'delete-failed'    => '用户删除失败',

                    'datagrid' => [
                        'delete'     => '删除',
                        'edit'       => '编辑',
                        'email'      => '电子邮件',
                        'id'         => '编号',
                        'id-value'   => '编号 - :id',
                        'name'       => '姓名',
                        'permission' => '权限',
                        'phone'      => '电话',

                        'status' => [
                            'title' => '状态',

                            'options' => [
                                'active'    => '活跃',
                                'suspended' => '已暂停',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => '创建库存源',
                    'title'      => '库存来源',

                    'datagrid' => [
                        'active'   => '激活',
                        'code'     => '代码',
                        'delete'   => '删除',
                        'edit'     => '编辑',
                        'id'       => 'ID',
                        'inactive' => '未激活',
                        'name'     => '名称',
                        'priority' => '优先级',
                        'status'   => '状态',
                    ],
                ],

                'create' => [
                    'add-title'      => '添加库存来源',
                    'address'        => '来源地址',
                    'back-btn'       => '返回',
                    'city'           => '城市',
                    'code'           => '代码',
                    'contact-email'  => '电子邮件',
                    'contact-fax'    => '传真',
                    'contact-info'   => '联系信息',
                    'contact-name'   => '名称',
                    'contact-number' => '联系电话',
                    'country'        => '国家',
                    'description'    => '描述',
                    'general'        => '常规',
                    'latitude'       => '纬度',
                    'longitude'      => '经度',
                    'name'           => '名称',
                    'postcode'       => '邮政编码',
                    'priority'       => '优先级',
                    'save-btn'       => '保存库存来源',
                    'select-country' => '选择国家',
                    'select-state'   => '选择州/省',
                    'settings'       => '设置',
                    'state'          => '州/省',
                    'status'         => '状态',
                    'street'         => '街道',
                    'title'          => '库存来源',
                ],

                'edit' => [
                    'back-btn'       => '返回',
                    'city'           => '城市',
                    'code'           => '代码',
                    'contact-email'  => '电子邮件',
                    'contact-fax'    => '传真',
                    'contact-info'   => '联系信息',
                    'contact-name'   => '名称',
                    'contact-number' => '联系电话',
                    'country'        => '国家',
                    'description'    => '描述',
                    'general'        => '常规',
                    'latitude'       => '纬度',
                    'longitude'      => '经度',
                    'name'           => '名称',
                    'postcode'       => '邮政编码',
                    'priority'       => '优先级',
                    'save-btn'       => '保存库存来源',
                    'select-country' => '选择国家',
                    'select-state'   => '选择州/省',
                    'settings'       => '设置',
                    'source-address' => '来源地址',
                    'state'          => '州/省',
                    'status'         => '状态',
                    'street'         => '街道',
                    'title'          => '编辑库存来源',
                ],

                'create-success'    => '库存来源创建成功',
                'delete-failed'     => '库存来源删除失败',
                'delete-success'    => '库存来源删除成功',
                'last-delete-error' => '至少需要一个库存来源',
                'update-success'    => '库存来源更新成功',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => '管理员',
                'blocked-message'     => '您已被管理员屏蔽',
                'message-failed'      => '消息发送失败',
                'message-placeholder' => '在此输入您的消息...',
                'message-sent'        => '消息发送成功',
                'no-message'          => '未找到消息',
                'search-message'      => '搜索消息...',
                'title'               => '通讯',

                'filters' => [
                    'all-messages'      => '所有消息',
                    'prev-fifteen-days' => '过去15天',
                    'prev-seven-days'   => '过去7天',
                    'prev-six-months'   => '过去6个月',
                    'prev-thirty-days'  => '过去30天',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => '被遗弃的购物车',
                    'abandoned-products'            => '被遗弃的商品',
                    'abandoned-rate'                => '被遗弃率',
                    'abandoned-revenue'             => '被遗弃的收入',
                    'added-to-cart'                 => '已添加到购物车',
                    'added-to-cart-info'            => '仅 :progress 位访客将产品添加到购物车',
                    'all-channels'                  => '所有渠道',
                    'average-order-value-over-time' => '随时间的平均订单价值',
                    'average-sales'                 => '平均订单价值',
                    'commission'                    => '佣金',
                    'commission-over-time'          => '随时间变化的佣金',
                    'count'                         => '数量',
                    'end-date'                      => '结束日期',
                    'id'                            => 'ID',
                    'interval'                      => '间隔',
                    'name'                          => '名称',
                    'orders'                        => '订单',
                    'orders-over-time'              => '随时间的订单数',
                    'payment-method'                => '付款方式',
                    'product-views'                 => '商品浏览次数',
                    'product-views-info'            => '仅 :progress 位访客查看商品',
                    'purchase-funnel'               => '购买漏斗',
                    'purchased'                     => '已购买',
                    'purchased-info'                => '仅 :progress 位访客进行购买',
                    'refunds'                       => '退款',
                    'refunds-over-time'             => '随时间的退款',
                    'sales-over-time'               => '随时间的销售',
                    'start-date'                    => '开始日期',
                    'tax-collected'                 => '税金收入',
                    'tax-collected-over-time'       => '随时间的税金收入',
                    'title'                         => '销售',
                    'top-payment-methods'           => '热门付款方式',
                    'top-tax-categories'            => '热门税收类别',
                    'total'                         => '总计',
                    'total-commission-paid'         => '支付的总佣金',
                    'total-orders'                  => '总订单数',
                    'total-sales'                   => '总销售额',
                    'total-visits'                  => '总访问量',
                    'total-visits-info'             => '商店的总访客数',
                    'view-details'                  => '查看详情',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => '所有渠道',
                    'count'                       => '数量',
                    'customers'                   => '客户',
                    'customers-over-time'         => '随时间的客户数',
                    'customers-traffic'           => '客户流量',
                    'customers-with-most-orders'  => '最多订单的客户',
                    'customers-with-most-reviews' => '最多评价的客户',
                    'customers-with-most-sales'   => '最多销售的客户',
                    'email'                       => '电子邮件',
                    'end-date'                    => '结束日期',
                    'id'                          => 'ID',
                    'interval'                    => '间隔',
                    'name'                        => '名称',
                    'orders'                      => '订单',
                    'reviews'                     => '评价',
                    'start-date'                  => '开始日期',
                    'title'                       => '客户',
                    'top-customer-groups'         => '热门客户群',
                    'total'                       => '总计',
                    'total-customers'             => '总客户数',
                    'total-visitors'              => '总访客数',
                    'traffic-over-week'           => '一周内的流量',
                    'unique-visitors'             => '独立访客',
                    'view-details'                => '查看详情',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => '所有渠道',
                    'channel'                          => '频道',
                    'end-date'                         => '结束日期',
                    'id'                               => 'ID',
                    'interval'                         => '间隔',
                    'locale'                           => '区域',
                    'name'                             => '名称',
                    'orders'                           => '订单',
                    'price'                            => '价格',
                    'products-added-over-time'         => '随时间的新增商品',
                    'products-with-most-reviews'       => '最多评价的商品',
                    'products-with-most-visits'        => '最多访问的商品',
                    'quantities'                       => '数量',
                    'quantities-sold-over-time'        => '随时间的销售数量',
                    'revenue'                          => '收入',
                    'reviews'                          => '评价',
                    'start-date'                       => '开始日期',
                    'title'                            => '商品',
                    'top-selling-products-by-quantity' => '按数量销售最多的商品',
                    'top-selling-products-by-revenue'  => '按收入销售最多的商品',
                    'total'                            => '总计',
                    'total-products-added-to-wishlist' => '已添加到愿望清单的商品',
                    'total-sold-quantities'            => '已售商品数量',
                    'view-details'                     => '查看详情',
                    'visits'                           => '访问次数',
                ],
            ],

            'view' => [
                'all-channels'  => '所有渠道',
                'day'           => '日',
                'end-date'      => '结束日期',
                'export-csv'    => '导出CSV',
                'export-xls'    => '导出XLS',
                'month'         => '月',
                'not-available' => '没有可用的记录。',
                'start-date'    => '开始日期',
                'year'          => '年',
            ],

            'empty' => [
                'info'  => '所选时间段内暂无数据',
                'title' => '暂无数据',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => '已禁用',
                'enabled'   => '已启用',
                'info'      => '通过 Bagisto 的可定制电商扩展功能，构建、管理和扩展您的在线商店。',
                'no-result' => '这里没有可用的扩展。',
                'title'     => '扩展',

                'filters' => [
                    'all-extensions' => '所有扩展',
                    'bulk_upload'    => '批量上传',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => '市场',
                    'payment'        => '支付',
                    'pos'            => 'POS',
                    'shipping'       => '配送',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => '卖家标志',
                'switch-to-store' => '切换到管理店铺',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => ':shop_title 的最小订单金额是',
                'product-not-available' => '产品不可用',
                'sold-by'               => '销售者',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => '天*付款',
                'deals-in'            => '交易中',
                'featured-seller'     => '我们的推荐卖家',
                'online-business'     => '在线业务',
                'reviews'             => ':count 评论：',
                'seller-community'    => '卖家社区',
                'serviceable-pincode' => '服务邮政编码',
                'start-selling'       => '与全球大客户合作，全天候开始销售。',
                'step'                => '步骤 :count',
                'visit-shop'          => '参观商店',
            ],
        ],

        'products' => [
            'add-to-cart'   => '添加到购物车',
            'delivery-info' => '此处显示交付信息',
            'hide'          => '隐藏',
            'more-info'     => '更多信息',
            'seller-count'  => ':count 个卖家正在销售相同的产品',
            'seller-info'   => '卖家信息',
            'sold-by'       => '由...销售',
            'top-selling'   => '畅销商品',

            'flag' => [
                'alert'              => '警告',
                'already-reported'   => '您已經報告過此產品',
                'create-success'     => '產品報告成功',
                'guest-alert'        => '您需要登錄才能報告此產品',
                'not-allowed'        => '未下訂單，無法報告此產品',
                'other-reason'       => '其他原因',
                'reason'             => '原因',
                'reason-placeholder' => '請具體說明原因',
                'report-product'     => '報告產品',
                'select-reason'      => '選擇原因',
                'submit-btn'         => '提交',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => '卖家尚未批准',
                'products-count'  => '商品 (:count)',
                'reviews-count'   => '评论 (:count)',
                'search-text'     => '搜索商品',

                'about' => [
                    'title'           => '关于我们',
                    'about-us'        => '关于我们',
                    'shipping-policy' => '运输政策',
                    'privacy-policy'  => '隐私政策',
                    'return-policy'   => '退货政策',
                ],

                'contact-form' => [
                    'title'          => '联系我们',
                    'name'           => '姓名',
                    'email'          => '电子邮件',
                    'subject'        => '主题',
                    'query'          => '查询',
                    'submit-btn'     => '提交',
                    'create-success' => '您的查询已成功提交',
                ],

                'share' => [
                    'title'     => '分享',
                    'share-on'  => '分享到',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => '警告',
                    'already-reported'   => '您已举报该卖家',
                    'create-success'     => '卖家举报成功',
                    'guest-alert'        => '您需要登录才能举报卖家',
                    'not-allowed'        => '没有订单无法举报卖家',
                    'other-reason'       => '其他原因',
                    'reason'             => '原因',
                    'reason-placeholder' => '请说明原因',
                    'select-reason'      => '选择原因',
                    'submit-btn'         => '提交',
                    'title'              => '举报问题',
                ],

                'reviews' => [
                    'alert'            => '警告',
                    'already-reviewed' => '您已经评价了该卖家',
                    'comment'          => '评论',
                    'create-success'   => '卖家已成功评论',
                    'customer-review'  => ':count 客户评论',
                    'customer-reviews' => '客户评论',
                    'guest-alert'      => '您需要登录才能举报卖家',
                    'rating'           => '评分',
                    'review-by'        => '评论者',
                    'submit-btn'       => '提交',
                    'title'            => '标题',
                    'view-all'         => '查看所有评论',
                    'write-review'     => '写评论',
                ],

                'products' => [
                    'no-result' => '没有找到商品',
                    'show'      => '显示',

                    'sort-by' => [
                        'title' => '排序方式',

                        'options' => [
                            'cheapest-first'  => '价格从低到高',
                            'expensive-first' => '价格从高到低',
                            'from-a-z'        => '从A到Z',
                            'from-z-a'        => '从Z到A',
                            'latest-first'    => '最新优先',
                            'oldest-first'    => '最旧优先',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => '清除所有',
                        'filter'      => '筛选',
                        'filters'     => '筛选条件:',
                        'price-range' => '价格范围',
                        'sort'        => '排序',
                    ],
                ],
            ],
        ],
    ],
];
