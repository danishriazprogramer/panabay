<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'マーケットプレイス',
                    'info'  => 'マーケットプレイスを管理する',

                    'module-info' => [
                        'title'       => 'モジュール情報',
                        'info'        => 'アプリケーションのバージョンに関する情報を提供します。',
                        'app-version' => 'アプリケーションバージョン：v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => '管理者手数料率',
                        'description'                  => 'マーケットプレイスの一般設定（ステータス、手数料など）を管理します。',
                        'lines-in-street-address'      => '住所の行数',
                        'lines-in-street-address-info' => '住所の行数を設定します。デフォルトは1行です。',
                        'status'                       => 'ステータス',
                        'title'                        => '一般',
                    ],

                    'product' => [
                        'approval-required'         => '承認が必要',
                        'description'               => 'マーケットプレイスの商品設定（承認、フラグなど）を管理します。',
                        'enable-flag'               => 'フラグを有効にする',
                        'seller-can-assign-product' => '販売者が商品を割り当て可能',
                        'seller-can-create-product' => '販売者が商品を作成可能',
                        'show-progress-bar'         => '進行バーを表示',
                        'title'                     => '商品',
                    ],

                    'seller' => [
                        'approval-required'           => '承認が必要',
                        'can-cancel-order'            => '注文をキャンセルできます',
                        'can-create-invoice'          => '請求書を作成できます',
                        'can-create-shipment'         => '配送を作成できます',
                        'description'                 => 'マーケットプレイスの出品者設定（承認、フラグなど）を管理します。',
                        'enable-flag'                 => 'フラグを有効にする',
                        'enable-minimum-order-amount' => '最小注文金額を有効にする',
                        'enable-seller-flag'          => '出品者フラグを有効にする',
                        'red-flag-limit'              => 'レッドフラグ制限',
                        'red-flag-limit-info'         => '出品者がこの制限を超えると、出品者のプロフィールに赤いフラグが表示されます。',
                        'show-red-flag'               => '制限を超えた場合、プロフィールに赤いフラグを表示する',
                        'title'                       => '出品者',
                    ],

                    'featured-sellers' => [
                        'limit-count' => '制限数',
                        'description' => 'マーケットプレイスの注目の販売者を管理します。',
                        'status'      => 'ステータス',
                        'title'       => '注目の販売者',

                        'popularity-criteria' => [
                            'all'              => 'すべて',
                            'maximum-orders'   => '最大注文数',
                            'maximum-products' => '最大製品数',
                            'maximum-rating'   => '最大評価',
                            'maximum-sale'     => '最大売上高',
                            'title'            => '人気基準',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'バナーボタンのタイトル',
                        'banner-description'  => 'バナーの説明',
                        'banner-image'        => 'バナー画像',
                        'banner-title'        => 'バナータイトル',
                        'business-hour'       => '営業時間',
                        'community-count'     => 'コミュニティの数',
                        'description'         => 'マーケットプレイスのランディングページをカスタマイズして、アイコン、バナー、および新しい外観のための説明を追加します。',
                        'feature-box1-desc'   => '特徴ボックス1の説明',
                        'feature-box1-icon'   => '特徴ボックス1のアイコン',
                        'feature-box1-title'  => '特徴ボックス1のタイトル',
                        'feature-box2-desc'   => '特徴ボックス2の説明',
                        'feature-box2-icon'   => '特徴ボックス2のアイコン',
                        'feature-box2-title'  => '特徴ボックス2のタイトル',
                        'feature-box3-desc'   => '特徴ボックス3の説明',
                        'feature-box3-icon'   => '特徴ボックス3のアイコン',
                        'feature-box3-title'  => '特徴ボックス3のタイトル',
                        'feature-box4-desc'   => '特徴ボックス4の説明',
                        'feature-box4-icon'   => '特徴ボックス4のアイコン',
                        'feature-box4-title'  => '特徴ボックス4のタイトル',
                        'feature-description' => '特徴の説明',
                        'feature-image'       => '特徴の画像',
                        'feature-title'       => '特徴のタイトル',
                        'journey-description' => 'ジャーニーの説明',
                        'journey-image'       => 'ジャーニーの画像',
                        'journey-step1-desc'  => 'ジャーニーのステップ1の説明',
                        'journey-step1-icon'  => 'ジャーニーのステップ1のアイコン',
                        'journey-step1-title' => 'ジャーニーのステップ1のタイトル',
                        'journey-step2-desc'  => 'ジャーニーのステップ2の説明',
                        'journey-step2-icon'  => 'ジャーニーのステップ2のアイコン',
                        'journey-step2-title' => 'ジャーニーのステップ2のタイトル',
                        'journey-step3-desc'  => 'ジャーニーのステップ3の説明',
                        'journey-step3-icon'  => 'ジャーニーのステップ3のアイコン',
                        'journey-step3-title' => 'ジャーニーのステップ3のタイトル',
                        'journey-step4-desc'  => 'ジャーニーのステップ4の説明',
                        'journey-step4-icon'  => 'ジャーニーのステップ4のアイコン',
                        'journey-step4-title' => 'ジャーニーのステップ4のタイトル',
                        'journey-step5-desc'  => 'ジャーニーのステップ5の説明',
                        'journey-step5-icon'  => 'ジャーニーのステップ5のアイコン',
                        'journey-step5-title' => 'ジャーニーのステップ5のタイトル',
                        'journey-title'       => 'ジャーニーのタイトル',
                        'payment-duration'    => '支払い期間',
                        'serviceable-pincode' => 'サービス可能な郵便番号',
                        'title'               => 'ランディングページ',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => '商品を割り当てる',
            'communications'    => '通信',
            'create'            => '作成',
            'delete'            => '削除',
            'edit'              => '編集',
            'flag-reasons'      => '報告理由',
            'inventory-sources' => '在庫ソース',
            'orders'            => '注文',
            'pay'               => '支払う',
            'payment-request'   => '支払いリクエスト',
            'product-reviews'   => '商品のレビュー',
            'products'          => '商品',
            'reviews'           => '出品者のレビュー',
            'seller-categories' => '出品者カテゴリ',
            'sellers'           => '出品者',
            'title'             => 'マーケットプレイス',
            'transactions'      => '取引',
            'view'              => '表示',
        ],

        'menu' => [
            'communications'    => '通信',
            'flag-reasons'      => 'フラグの理由',
            'inventory-sources' => '在庫ソース',
            'orders'            => '注文',
            'payment-requests'  => '支払いリクエスト',
            'product-reviews'   => '商品のレビュー',
            'products'          => '商品',
            'seller-categories' => '販売者カテゴリ',
            'seller-reviews'    => '売り手のレビュー',
            'sellers'           => '売り手',
            'title'             => 'マーケットプレイス',
            'transactions'      => '取引',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => '売り手を追加',
                'delete-failed'      => '売り手の削除に失敗しました！',
                'delete-success'     => '売り手が正常に削除されました。',
                'incomplete-profile' => '販売者のプロフィールが不完全です！',
                'login-message'      => ':seller_name としてログインしています',
                'pending-orders'     => '売り手にはいくつかの保留中の注文があります',
                'title'              => '売り手',
                'update-success'     => '売り手が正常に更新されました！',

                'datagrid' => [
                    'add-product'     => '追加',
                    'approved'        => '承認済み',
                    'assign-product'  => '商品を割り当てる',
                    'created-at'      => '作成日時',
                    'delete'          => '削除',
                    'disapproved'     => '非承認',
                    'edit'            => '編集',
                    'email'           => 'メールアドレス',
                    'flags'           => 'フラグ',
                    'id'              => 'ID',
                    'login-as-seller' => '販売者としてログイン',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => '販売者名',
                    'shop-url'        => 'ショップのURL',
                    'status'          => 'ステータス',
                    'suspended'       => '停止中',
                    'total-flags'     => '総フラグ数: :count',
                    'update-status'   => 'ステータスを更新',
                ],

                'create'  => [
                    'address'        => '住所',
                    'city'           => '市町村',
                    'country'        => '国',
                    'email'          => 'メール',
                    'name'           => '名前',
                    'phone'          => '電話番号',
                    'postcode'       => '郵便番号',
                    'save-btn'       => '保存',
                    'select'         => '選択',
                    'shop-title'     => '店舗タイトル',
                    'shop-url'       => '店舗URL',
                    'state'          => '都道府県',
                    'street-address' => '通りの住所',
                    'success'        => '売り手が正常に作成されました。',
                    'title'          => '売り手を作成',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => '販売者のフラグ',

                    'datagrid' => [
                        'id'             => 'ID',
                        'customer-name'  => '顧客名',
                        'customer-email' => '顧客のメール',
                        'date'           => '日付',
                        'reason'         => '理由',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => '戻る',
                'image-placeholder' => '商品画像',
                'no-result'         => '結果が見つかりませんでした！',
                'sku'               => 'SKU - :sku',
                'title'             => '商品の検索',
            ],

            'assign-product' => [
                'already-selling'     => '販売者はすでにこの商品を販売しています',
                'assign-successfully' => '商品が販売者に正常に割り当てられました。',
                'back-btn'            => '戻る',
                'condition'           => '状態',
                'description'         => '説明',
                'new'                 => '新品',
                'old'                 => '中古',
                'price'               => '価格',
                'product-not-allowed' => '販売者は:typeタイプの商品を販売することは許可されていません。',
                'quantities'          => '数量',
                'save-btn'            => '保存',
                'select-condition'    => '状態を選択',
                'title'               => '商品を割り当てる',

                'seller-details' => [
                    'additional-info' => '追加情報',
                    'approved'        => '承認済み',
                    'disapproved'     => '却下',
                    'no-of-products'  => '商品の数',
                    'status'          => 'ステータス',
                    'suspended'       => '停止中',
                    'title'           => '販売者の詳細',
                ],

                'product-details' => [
                    'active'            => 'アクティブ',
                    'disable'           => '無効にする',
                    'title'             => '商品の詳細',
                    'image-placeholder' => '商品の画像',
                ],

                'images' => [
                    'info'  => '画像の解像度は 609px x 560px のようにする必要があります。',
                    'title' => '画像',
                ],

                'videos' => [
                    'error' => ':max キロバイトを超えるビデオはアップロードできません。より小さいファイルを選択してください。',
                    'info'  => '最大ビデオサイズは :size となります',
                    'title' => 'ビデオ',
                ],

                'configurable' => [
                    'delete-btn'        => '削除',
                    'edit-btn'          => '編集',
                    'image-placeholder' => '商品画像',
                    'qty'               => '数量 - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'バリエーション',

                    'edit' => [
                        'images'     => '画像',
                        'price'      => '価格',
                        'quantities' => '数量',
                        'save-btn'   => '保存',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'リンクを追加',
                        'delete-btn'  => '削除',
                        'edit-btn'    => '編集',
                        'empty-info'  => 'すぐにリンクを作成するには。',
                        'empty-title' => 'リンクを追加',
                        'file'        => 'ファイル : ',
                        'info'        => 'ダウンロード可能な商品タイプは、eBook、ソフトウェアアプリケーション、音楽、ゲームなどのデジタル商品を販売できるようにします。',
                        'sample-file' => 'サンプルファイル : ',
                        'sample-url'  => 'サンプルURL : ',
                        'title'       => 'ダウンロード可能なリンク',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'ダウンロードが許可されています',
                            'file'        => 'ファイル',
                            'file-type'   => 'ファイルのタイプ',
                            'name'        => 'タイトル',
                            'price'       => '価格',
                            'sample'      => 'サンプル',
                            'sample-type' => 'サンプルのタイプ',
                            'save-btn'    => '保存',
                            'title'       => 'リンク',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'サンプルを追加',
                        'delete-btn'  => '削除',
                        'edit-btn'    => '編集',
                        'empty-info'  => 'すぐにサンプルを作成するには。',
                        'empty-title' => 'サンプルを追加',
                        'file'        => 'ファイル : ',
                        'info'        => 'ダウンロード可能な商品タイプは、eBook、ソフトウェアアプリケーション、音楽、ゲームなどのデジタル商品を販売できるようにします。',
                        'title'       => 'ダウンロード可能なサンプル',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'ファイル',
                            'file-type' => 'ファイルのタイプ',
                            'name'      => 'タイトル',
                            'save-btn'  => '保存',
                            'title'     => 'リンク',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => '戻る',
                'suspended'      => '停止中',
                'title'          => '売り手を編集',
                'update-btn'     => '売り手を更新',
                'update-success' => '売り手が正常に更新されました。',

                'shop' => [
                    'address'          => '住所',
                    'city'             => '市町村',
                    'country'          => '国',
                    'description'      => '説明',
                    'email'            => 'メールアドレス',
                    'name'             => '名前',
                    'phone-number'     => '電話番号',
                    'postcode'         => '郵便番号',
                    'select'           => '選択',
                    'shop-title'       => 'ショップのタイトル',
                    'state'            => '都道府県',
                    'street-address'   => '通りの住所',
                    'title'            => 'ショップの詳細',
                    'url'              => 'ショップのURL',
                ],

                'profile' => [
                    'banner'       => 'プロフィールのバナー',
                    'banner-size'  => 'バナーのサイズは 300px X 200px にする必要があります',
                    'logo'         => 'プロフィールのロゴ',
                    'logo-size'    => 'ロゴのサイズは 125px X 125px にする必要があります',
                    'social-links' => ':name リンク',
                    'title'        => 'プロフィールの詳細',
                ],

                'allowed-product' => [
                    'title' => '許可された商品',
                ],

                'minimum-order-amount' => [
                    'title' => '最小注文金額',
                ],

                'google-analytics-id' => [
                    'title' => 'Google Analytics ID',
                ],

                'commission' => [
                    'percentage' => 'パーセンテージ',
                    'status'     => 'ステータス',
                    'title'      => '売り手手数料',
                ],

                'meta-info' => [
                    'meta-description' => 'メタ説明',
                    'meta-keyword'     => 'メタキーワード',
                    'meta-title'       => 'メタタイトル',
                    'title'            => 'メタ情報',
                ],

                'policy' => [
                    'privacy'  => 'プライバシーポリシー',
                    'return'   => '返品ポリシー',
                    'shipping' => '配送ポリシー',
                    'title'    => 'ポリシー',
                ],

                'channels' => [
                    'title' => 'チャンネル',
                ],

                'users' => [
                    'email' => 'メールアドレス',
                    'id'    => 'ID',
                    'name'  => '名前',
                    'phone' => '電話番号',
                    'title' => 'ユーザー',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => '商品を追加',
                'delete-success' => '商品が正常に削除されました。',
                'title'          => '商品',
                'update-success' => '商品が正常に更新されました。',

                'datagrid' => [
                    'approved'       => '承認済み',
                    'delete'         => '削除',
                    'disapproved'    => '非承認',
                    'flags'          => 'フラグ',
                    'id'             => 'ID',
                    'is-owner'       => '所有者',
                    'no'             => 'いいえ',
                    'out-of-stock'   => '在庫切れ',
                    'price'          => '価格',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => '商品名',
                    'product-number' => '商品番号',
                    'product-type'   => '商品タイプ',
                    'quantity'       => '数量',
                    'seller-name'    => '売り手名',
                    'sku'            => 'SKU',
                    'status'         => 'ステータス',
                    'total-flags'    => '総フラグ数: :count',
                    'total-quantity' => ':quantity 利用可能',
                    'update-status'  => 'ステータスを更新',
                    'yes'            => 'はい',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => '商品フラグ',

                    'datagrid' => [
                        'customer-email' => '顧客のメールアドレス',
                        'customer-name'  => '顧客名',
                        'date'           => '日付',
                        'id'             => 'ID',
                        'reason'         => '理由',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'レビューの詳細',
                'title'          => '商品レビュー',

                'datagrid' => [
                    'approved'      => '承認済み',
                    'comment'       => 'コメント',
                    'customer-name' => '顧客名',
                    'date'          => '日付',
                    'disapproved'   => '非承認',
                    'id'            => 'ID',
                    'images'        => '画像',
                    'pending'       => '保留中',
                    'product'       => '商品',
                    'product-name'  => '商品名',
                    'rating'        => '評価',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'ショップタイトル',
                    'status'        => 'ステータス',
                    'title'         => 'タイトル',
                    'update-status' => '更新ステータス',
                    'view'          => '表示',
                ],
            ],

            'update-success' => '製品レビューが正常に更新されました',
            'delete-success' => '商品レビューが正常に削除されました。',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => '販売者レビュー',

                'datagrid' => [
                    'approved'            => '承認済み',
                    'comment'             => 'コメント',
                    'customer-name'       => '顧客名',
                    'date'                => '日付',
                    'delete'              => '削除',
                    'disapproved'         => '未承認',
                    'id'                  => 'ID',
                    'mass-delete-success' => '販売者のレビューが正常に削除されました。',
                    'mass-update-success' => '販売者のレビューが正常に更新されました。',
                    'pending'             => '保留中',
                    'rating'              => '評価',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'レビュータイトル',
                    'seller-name'         => '販売者名',
                    'shop-title'          => '店舗名',
                    'status'              => 'ステータス',
                    'update-status'       => 'ステータスを更新',
                ],
            ],

            'delete-success' => '販売者のレビューが正常に削除されました。',
        ],

        'orders' => [
            'index' => [
                'title' => '注文',

                'datagrid' => [
                    'canceled'        => 'キャンセル',
                    'closed'          => 'クローズド',
                    'commission'      => '手数料',
                    'completed'       => '完了',
                    'customer'        => '顧客',
                    'date'            => '日付',
                    'discount'        => '割引',
                    'email'           => 'メール',
                    'fraud'           => '詐欺',
                    'gross-amt'       => '総額',
                    'id'              => 'ID',
                    'items'           => 'アイテム',
                    'location'        => '場所',
                    'order-id'        => '注文ID - #:id',
                    'payment'         => '支払い',
                    'pending'         => '保留中',
                    'pending-payment' => '支払い保留',
                    'processing'      => '処理中',
                    'seller'          => '販売者',
                    'seller-earn'     => '収益',
                    'shipment'        => '出荷',
                    'shop'            => 'ショップ',
                    'status'          => 'ステータス',
                    'view'            => '表示',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => '取引',

                'datagrid' => [
                    'base-total'     => '基本合計',
                    'comment'        => 'コメント',
                    'customer-name'  => '顧客名',
                    'id'             => 'ID',
                    'seller-id'      => '売り手ID',
                    'seller-name'    => '売り手名',
                    'transaction-id' => '取引ID',
                    'view'           => '表示',
                ],
            ],

            'view' => [
                'commission'        => '手数料',
                'created-on'        => ':date に作成されました',
                'name'              => '名前',
                'payment-method'    => ':method での支払い',
                'price'             => '価格',
                'qty'               => '数量',
                'seller-total'      => '売り手合計',
                'shipping-handling' => '送料および手数料',
                'subtotal'          => '小計',
                'tax'               => '税金',
                'title'             => '取引 #:transaction_id',
                'total'             => '合計',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => '理由を作成',
                'delete-success'      => 'フラグの理由が正常に削除されました。',
                'mass-delete-success' => 'フラグの理由が正常に一括削除されました。',
                'mass-update-success' => 'フラグの理由が正常に一括更新されました。',
                'title'               => 'フラグの理由',

                'datagrid' => [
                    'delete'        => '削除',
                    'edit'          => '編集',
                    'id'            => 'ID',
                    'name'          => '名前',
                    'update-status' => 'ステータスを更新',

                    'status' => [
                        'active'  => 'アクティブ',
                        'disable' => '無効',
                        'title'   => 'ステータス',
                    ],

                    'type' => [
                        'product' => '商品',
                        'seller'  => '売り手',
                        'title'   => 'タイプ',
                    ],
                ],
            ],

            'create' => [
                'admin'    => '管理者',
                'back-btn' => '戻る',
                'general'  => '一般',
                'label'    => 'ラベル',
                'product'  => '商品',
                'save-btn' => '理由を保存',
                'seller'   => '売り手',
                'status'   => 'ステータス',
                'title'    => '理由を作成',
                'type'     => 'タイプ',
            ],

            'edit' => [
                'admin'    => '管理者',
                'back-btn' => '戻る',
                'general'  => '一般',
                'label'    => 'ラベル',
                'product'  => '商品',
                'save-btn' => '理由を保存',
                'seller'   => '売り手',
                'status'   => 'ステータス',
                'title'    => '理由を編集',
                'type'     => 'タイプ',
            ],

            'create-success' => 'フラグの理由が正常に作成されました。',
            'update-success' => 'フラグの理由が正常に更新されました。',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'カテゴリーを割り当てる',
                'create-success' => 'カテゴリーが正常に割り当てられました。',
                'delete-failed'  => 'カテゴリの削除に失敗しました。',
                'delete-success' => 'カテゴリが正常に削除されました。',
                'title'          => '売り手のカテゴリー',
                'update-success' => 'カテゴリが正常に更新されました。',

                'datagrid' => [
                    'delete' => '削除',
                    'edit'   => '編集',
                    'id'     => 'ID',
                    'name'   => '名前',
                ],
            ],

            'create' => [
                'back-btn'      => '戻る',
                'save-btn'      => 'カテゴリを保存',
                'select-seller' => '売り手を選択',
                'seller'        => '売り手',
                'title'         => 'カテゴリーを割り当てる',
            ],

            'edit' => [
                'back-btn'   => '戻る',
                'seller'     => '売り手',
                'title'      => 'カテゴリを編集',
                'update-btn' => 'カテゴリを更新',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'コメント',
                'no-amount-remaining'  => '支払うべき金額は残っていません！',
                'order-not-found'      => '注文が見つかりません！',
                'pay-btn'              => '今すぐ支払う',
                'pay-to-seller'        => '売り手への支払い',
                'payment-success'      => '売り手への支払いが正常に完了しました！',
                'something-went-wrong' => '何かがうまくいかなかった！',
                'title'                => '支払いリクエスト',

                'datagrid' => [
                    'already-paid'          => 'すでに支払い済み',
                    'canceled'              => 'キャンセル済み',
                    'closed'                => 'クローズ',
                    'completed'             => '完了',
                    'customer-name'         => '顧客名',
                    'date'                  => '日付',
                    'email'                 => 'メールアドレス',
                    'fraud'                 => '詐欺',
                    'gross-amt'             => '総額',
                    'id'                    => '注文ID',
                    'invoice-pending'       => '請求書保留中',
                    'order-canceled'        => '注文キャンセル',
                    'order-id'              => 'ID #:id',
                    'pay'                   => '支払う',
                    'pending'               => '保留中',
                    'pending_payment'       => '支払い保留中',
                    'processing'            => '処理中',
                    'refunded'              => '払い戻し済み',
                    'remaining-total'       => '残りの合計',
                    'request-payment'       => '支払いリクエスト',
                    'seller'                => '販売者',
                    'seller-total-invoiced' => '売り手合計請求済み',
                    'shop'                  => 'ショップ',
                    'status'                => 'ステータス',
                    'total-paid'            => '合計支払い済み',
                    'view'                  => '表示',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => '販売者をブロック',
                'block-success'        => '販売者が正常にブロックされました！',
                'chat-history-cleared' => 'チャット履歴が正常にクリアされました！',
                'clear-chat-history'   => 'チャット履歴をクリア',
                'exit'                 => '終了',
                'message-failed'       => 'メッセージの送信に失敗しました！',
                'message-sent'         => 'メッセージが正常に送信されました！',
                'no-message'           => 'メッセージが見つかりません！',
                'search'               => '検索',
                'search-message'       => 'メッセージを検索',
                'seller-blocked'       => 'この販売者をブロックしました。この販売者にメッセージを送信できません。',
                'sellers'              => '販売者',
                'title'                => '通信',
                'type-message'         => 'ここにメッセージを入力してください...',
                'unblock-seller'       => '販売者のブロックを解除',
                'unblock-success'      => '販売者のブロックが正常に解除されました！',
                'welcome-message'      => 'マーケットプレイス通信へようこそ！',

                'filters' => [
                    'all-messages'      => 'すべてのメッセージ',
                    'prev-fifteen-days' => '過去15日間',
                    'prev-seven-days'   => '過去7日間',
                    'prev-six-months'   => '過去6か月間',
                    'prev-thirty-days'  => '過去30日間',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => '在庫ソース',

                'datagrid' => [
                    'active'      => 'アクティブ',
                    'code'        => 'コード',
                    'id'          => 'ID',
                    'inactive'    => '非アクティブ',
                    'name'        => '名前',
                    'seller-name' => '販売者名',
                    'shop-title'  => 'ショップタイトル',
                    'status'      => 'ステータス',
                ],

                'view' => [
                    'active'         => 'アクティブ',
                    'address'        => 'ソース住所',
                    'city'           => '市区町村',
                    'code'           => 'コード',
                    'contact-email'  => 'メール',
                    'contact-fax'    => 'ファックス',
                    'contact-info'   => '連絡情報',
                    'contact-name'   => '名前',
                    'contact-number' => '連絡先番号',
                    'country'        => '国',
                    'description'    => '説明',
                    'general-info'   => '一般情報',
                    'inactive'       => '非アクティブ',
                    'latitude'       => '緯度',
                    'longitude'      => '経度',
                    'name'           => '名前',
                    'postcode'       => '郵便番号',
                    'priority'       => '優先度',
                    'seller-info'    => '販売者情報',
                    'seller-name'    => '販売者名',
                    'settings'       => '設定',
                    'shop-title'     => 'ショップタイトル',
                    'state'          => '州',
                    'street'         => '通り',
                    'title'          => '在庫ソース #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'マーケットプレイスパッケージをインストールします。',
            'migrate'     => 'すべてのテーブルをデータベースに移行中（時間がかかる場合があります）...',
            'seed'        => 'データをデータベースに挿入中...',
            'publish'     => 'アセットと設定を公開中...',
            'cache'       => 'キャッシュをクリア中...',
            'finish'      => 'マーケットプレイスパッケージが正常にインストールされました。',
        ],

        'version' => [
            'description' => 'マーケットプレイスパッケージの現在のバージョンを表示します。',
            'comment'     => 'マーケットプレイスのバージョン: :version',
        ],
    ],

    'emails' => [
        'dear'        => '親愛なる :customer_name さん',
        'dear-admin'  => '尊敬する管理者様',
        'dear-seller' => '貴重な売り手',

        'seller' => [
            'registration' => [
                'date'        => '登録日:',
                'description' => 'お知らせいたします。当プラットフォームに新規売り手が登録しました。ぜひとも新規売り手を歓迎していただけると嬉しいです。',
                'details'     => '詳細は以下の通りです:',
                'email'       => 'メールアドレス:',
                'greeting'    => 'このメッセージがお元気で届きますように。',
                'name'        => '売り手名:',
                'shop'        => 'ショップURL:',
                'subject'     => '新規売り手登録',
            ],

            'forgot-password' => [
                'description'    => 'アカウントのパスワードリセットリクエストを受け取ったため、このメールを受け取っています。',
                'greeting'       => 'パスワードをお忘れですか！',
                'reset-password' => 'パスワードをリセット',
                'subject'        => 'パスワードリセットメール',
            ],

            'welcome' => [
                'description' => 'ようこそお越しくださいました！弊社ファミリーにご参加いただき光栄です。貴重な売り手としての存在が当プラットフォームに多大な価値をもたらし、成功を共に期待しています。',
                'greeting'    => 'ご登録ありがとうございました！',
                'subject'     => '売り手歓迎通知',
            ],

            'approval' => [
                'approved'    => '販売者になるためのリクエストが承認されました。',
                'disapproved' => '販売者になるためのリクエストが拒否されました。',
                'greeting'    => 'ご登録ありがとうございました！',
                'subject'     => '売り手承認通知',
            ],

            'update' => [
                'description' => 'プロフィールが正常に更新されました。',
                'greeting'    => 'このメッセージがお元気で届きますように。',
                'subject'     => '売り手プロフィール更新通知',
            ],

            'good-bye' => [
                'description' => 'お取引させていただき、誠にありがとうございました。プロの対応、尽力、製品・サービスの高品質に感謝申し上げます。お客様の満足度を確保するための貴重なご尽力は見逃せず、弊社の良い経験において重要な要素となりました。',
                'greeting'    => 'このメッセージがお元気で届きますように。',
                'subject'     => '売り手送別通知',
            ],

            'product-approval' => [
                'approved'    => '製品 :name は承認されました。',
                'disapproved' => '製品 :name は非承認となりました。',
                'greeting'    => 'ようこそ、そして当社に登録いただきありがとうございます！',
                'subject'     => '販売者製品承認通知',
            ],

            'orders' => [
                'created' => [
                    'greeting' => '新しい注文があります：注文IDは :order_id 、:created_at に注文されました',
                    'subject'  => '新しい注文確認',
                    'summary'  => '注文の概要',
                    'title'    => '注文確認！',
                ],

                'canceled' => [
                    'greeting' => '注文 :order_id はキャンセルされました',
                    'subject'  => '注文キャンセルの確認',
                    'summary'  => '注文の概要',
                    'title'    => '注文がキャンセルされました！',
                ],

                'billing-address'   => '請求先住所',
                'contact'           => '連絡先',
                'discount'          => '割引',
                'grand-total'       => '総計',
                'name'              => '名前',
                'payment'           => '支払い',
                'price'             => '価格',
                'qty'               => '数量',
                'shipping'          => '配送',
                'shipping-address'  => '配送先住所',
                'shipping-handling' => '送料および取扱料',
                'sku'               => 'SKU',
                'subtotal'          => '小計',
                'tax'               => '税金',
            ],

            'payment-request' => [
                'greeting'  => 'このメッセージがお元気で届いていることを願っています。',
                'paid'      => 'こんにちは.. 注文 :order_id に対する支払いがありました。',
                'requested' => '売り手 :seller_name は注文 :order_id の支払いを依頼されています。',
                'subject'   => '売り手支払い依頼通知',
            ],
        ],

        'contact-seller' => [
            'email'    => 'メール:- :email',
            'greeting' => 'お元気であることを願っております。',
            'info'     => 'こんにちは、:name から質問があります。以下の詳細をご確認ください。',
            'query'    => '質問：:query',
            'subject'  => '出品者への連絡通知',
            'topic'    => '件名：:subject',
        ],

        'report-product' => [
            'admin-msg'  => 'こんにちは、":name" が販売者 ":seller_name" の製品 ":product_name" に関する問題を報告しました。以下の詳細を確認してください。',
            'greeting'   => 'このメッセージがお元気で届くことを願っています。',
            'reason'     => '理由:- :reason',
            'seller-msg' => 'こんにちは、":name" があなたの製品 ":product_name" に関する問題を報告しました。以下の詳細を確認してください。',
            'subject'    => '製品報告通知',
        ],

        'report-seller' => [
            'admin-msg'  => 'こんにちは、:name が:seller_name に対する問題を報告しました。以下の詳細をご確認ください。',
            'greeting'   => 'お元気であることを願っております。',
            'reason'     => '理由：:reason',
            'seller-msg' => 'こんにちは、:name があなたに関する問題を報告しました。以下の詳細をご確認ください。',
            'subject'    => '出品者への報告通知',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Velocityセラーアカウントを作成',
            'banner-description'  => 'Velocityは、インドの新時代のビジネスに製品を販売するための素晴らしいプラットフォームです。これらのヒントに従うことで、Velocityセラーとして成功するための準備が整います！',
            'banner-btn-title'    => 'ストアを開く',
            'feature-title'       => 'なぜセラーはVelocityでの販売を愛するのか？',
            'feature-description' => 'セラーは、高速プラットフォームが提供する増加した販売機会、より良い露出、効率的な販売体験を愛し、それがビジネスの成長と成功に貢献する可能性があるためです。',
            'feature-box1-title'  => '販売機会の増加',
            'feature-box1-desc'   => 'セラーは、高速プラットフォームが提供する増加した販売機会、より良い露出、効率的な販売体験を愛し、それがビジネスの成長と成功に貢献する可能性があるためです。',
            'feature-box2-title'  => '迅速なターンアラウンド',
            'feature-box2-desc'   => '高速プラットフォームでは製品がより迅速に販売される傾向があり、在庫の回転率と収益の生成が速くなります。',
            'feature-box3-title'  => '視認性の向上',
            'feature-box3-desc'   => 'これらのプラットフォームは、セラー製品の視認性と露出を高め、より多くのビューと潜在的な販売をもたらします。',
            'feature-box4-title'  => '効率と利便性',
            'feature-box4-desc'   => '高速プラットフォームには、販売をより効率的にするための合理化されたプロセスとツールがあり、セラーがオンラインビジネスを管理する際の時間と労力を節約します。',
            'journey-title'       => 'Velocityでの旅を始めましょう',
            'journey-description' => '世界中の大規模な顧客と、一日中販売を始めましょう。',
            'journey-step1-title' => 'セラーになる',
            'journey-step1-desc'  => '基本情報を入力してストアを設定します。',
            'journey-step2-title' => '製品をリストする',
            'journey-step2-desc'  => '顧客が閲覧して購入できるように、ストアに製品をリストします。',
            'journey-step3-title' => '注文を受け取る',
            'journey-step3-desc'  => '世界中の幅広い顧客から注文を受け取ります。',
            'journey-step4-title' => '製品の配送',
            'journey-step4-desc'  => '製品が配送され、支払いが受け取られた後',
            'journey-step5-title' => '支払い',
            'journey-step5-desc'  => '支払いリクエスト、手数料を差し引いた後に支払いを受け取ります。',
        ],

        'flag-reasons' => [
            'damaged-product'           => '損傷した製品',
            'damaged-product-sold'      => '販売者によって販売された損傷した製品',
            'duplicate-product'         => '重複した製品',
            'duplicate-product-sold'    => '販売者によって販売された重複した製品',
            'missing-product-parts'     => '製品の部品が不足している',
            'over-price-product'        => '価格が高すぎる製品',
            'over-price-product-sold'   => '販売者によって販売された価格が高すぎる製品',
            'poor-product-quality'      => '製品の品質が悪い',
            'poor-product-quality-sold' => '販売者によって販売された品質が悪い製品',
            'receive-wrong-product'     => '間違った製品を受け取る',
            'wrong-product-sold'        => '販売者によって販売された間違った製品',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'ダウンロード',
                    'export'     => 'エクスポート',
                    'no-records' => 'エクスポートするものがありません',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'ホームページ',
                    'logout'     => 'ログアウト',
                    'my-profile' => 'マイプロフィール',
                    'visit-shop' => 'ショップを訪れる',

                    'mega-search' => [
                        'customers'                      => '顧客',
                        'explore-all-customers'          => 'すべての顧客を探索',
                        'explore-all-matching-customers' => '“:query” (:count) に一致するすべての顧客を探索',
                        'explore-all-matching-orders'    => '“:query” (:count) に一致するすべての注文を探索',
                        'explore-all-matching-products'  => '“:query” (:count) に一致するすべての製品を探索',
                        'explore-all-orders'             => 'すべての注文を探索',
                        'explore-all-products'           => 'すべての製品を探索',
                        'orders'                         => '注文',
                        'products'                       => '製品',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'メガサーチ',
                    ],
                ],

                'sidebar' => [
                    'collapse' => '折り畳む',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => '画像を追加',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => '画像ファイル (.jpeg, .jpg, .png, ..) のみ許可されています。',
                ],

                'videos' => [
                    'add-video-btn'     => 'ビデオを追加',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'ビデオファイル (.mp4, .mov, .ogg ..) のみ許可されています。',
                ],

                'documents' => [
                    'add-document-btn'  => 'ドキュメントを追加',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'ドキュメントファイル (:types ..) のみ許可されています。',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'エクセル',
                    'front'      => 'フロント',
                    'next'       => '次',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'パワーポイント',
                    'size'       => 'サイズ',
                    'text'       => 'テキスト',
                    'use-cases'  => 'ユースケース',
                    'word'       => 'ワード',
                    'zoom'       => 'ズーム',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => '予約',
            'communication'     => '通信',
            'customers'         => '顧客',
            'dashboard'         => 'ダッシュボード',
            'extensions'        => '拡張機能',
            'general'           => '一般',
            'inventory-sources' => '在庫ソース',
            'manage-profile'    => 'プロフィール管理',
            'orders'            => '注文',
            'product-reviews'   => '商品レビュー',
            'products'          => '商品',
            'reporting'         => 'レポート',
            'roles'             => '役割',
            'sales'             => '売上',
            'seller-reviews'    => '販売者レビュー',
            'settings'          => '設定',
            'transaction'       => '取引',
            'users'             => 'ユーザー',
        ],

        'acl' => [
            'assign'            => '割り当て',
            'bookings'          => '予約',
            'cancel'            => 'キャンセル',
            'communication'     => 'コミュニケーション',
            'create'            => '作成',
            'customers'         => '顧客',
            'dashboard'         => 'ダッシュボード',
            'delete'            => '削除',
            'edit'              => '編集',
            'extensions'        => '拡張機能',
            'general'           => '一般',
            'inventory-sources' => '在庫ソース',
            'invoice'           => '請求書',
            'orders'            => '注文',
            'payment-request'   => '支払いリクエスト',
            'print'             => '印刷',
            'print-invoice'     => '請求書を印刷',
            'product-reviews'   => '製品レビュー',
            'products'          => '製品',
            'reporting'         => 'レポート',
            'sales'             => '販売',
            'seller-reviews'    => '売り手レビュー',
            'settings'          => '設定',
            'shipment'          => '出荷',
            'transactions'      => '取引',
            'view'              => '表示',
        ],

        'breadcrumb' => [
            'add-new-product'   => '新しい商品を追加',
            'assign'            => '割り当て',
            'bookings'          => '予約',
            'communication'     => '通信',
            'create'            => '作成',
            'customers'         => '顧客',
            'dashboard'         => 'ダッシュボード',
            'edit'              => '編集',
            'extensions'        => '拡張機能',
            'general'           => '一般',
            'inventory-sources' => '在庫ソース',
            'manage-profile'    => 'プロフィール管理',
            'orders'            => '注文',
            'product-reviews'   => '商品レビュー',
            'products'          => '商品',
            'reporting'         => 'レポート',
            'roles'             => '役割',
            'sales'             => '売上',
            'seller-reviews'    => '販売者レビュー',
            'settings'          => '設定',
            'title'             => 'プロフィール',
            'transaction'       => '取引',
            'users'             => 'ユーザー',
            'view'              => '表示',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'ログイン',
            'create-your-account' => 'アカウントを作成',
            'email'               => 'メールアドレス',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software（インドに登録済み）。全著作権所有。',
            'forgot-pass'         => 'パスワードをお忘れですか？',
            'form-login-text'     => 'アカウントをお持ちの場合、メールアドレスでサインインしてください。',
            'invalid-credentials' => '資格情報を確認してもう一度やり直してください。',
            'new-seller'          => '新しいセラー？',
            'not-approved'        => 'あなたのアクティベーションは管理者の承認を待っています',
            'page-title'          => 'セラーログイン',
            'password'            => 'パスワード',
            'show-password'       => 'パスワードを表示',
            'suspended-message'   => 'あなたのアカウントは停止されました。質問がある場合は管理者に連絡してください。',
            'title'               => 'ログイン',
        ],

        'signup' => [
            'account-exists'   => 'すでにアカウントをお持ちですか？',
            'bagisto'          => 'Bagisto',
            'button-title'     => '登録',
            'confirm-pass'     => 'パスワードの確認',
            'email'            => 'メールアドレス',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software（インドに登録済み）。全著作権所有。',
            'form-signup-text' => '当ストアが初めての場合、お客様をメンバーとしてお迎えできることを嬉しく思います。',
            'name'             => '名前',
            'page-title'       => 'セラーになる',
            'password'         => 'パスワード',
            'sign-in-button'   => 'ログイン',
            'success'          => 'アカウントが正常に作成されました。',
            'url'              => 'ショップURL',
        ],

        'forgot-password' => [
            'already-sent'         => 'パスワードリセット用のリンクはすでにメールで送信しました。',
            'back'                 => 'サインインに戻る？',
            'bagisto'              => 'Bagisto',
            'email'                => 'メールアドレス',
            'email-not-exist'      => 'そのメールアドレスを持つユーザーは見つかりません。',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software（インドに登録済み）。全著作権所有。',
            'forgot-password-text' => 'パスワードを忘れた場合は、メールアドレスを入力して回復してください。',
            'page-title'           => 'パスワードを忘れましたか？',
            'reset-link-sent'      => 'リセットパスワードのリンクをメールでお送りしました。',
            'sign-in-button'       => 'ログイン',
            'submit'               => 'パスワードをリセット',
            'title'                => 'パスワードを回復',
        ],

        'reset-password' => [
            'back-link-title'  => 'サインインに戻る',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'パスワードの確認',
            'email'            => '登録メールアドレス',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software（インドに登録済み）。全著作権所有。',
            'password'         => 'パスワード',
            'submit-btn-title' => 'パスワードをリセット',
            'title'            => 'パスワードをリセット',
        ],

        'dashboard' => [
            'add-product'           => '製品を追加',
            'avg-order-sell'        => '平均注文販売',
            'category-info'         => '選択した期間のためにカテゴリが見つかりませんでした',
            'complete-profile-link' => 'プロフィールを完成させる &rarr;',
            'completed-orders'      => '完了済み (:count)',
            'customer-info'         => '選択した期間のために顧客が見つかりませんでした',
            'date-range'            => '日付の範囲',
            'empty-threshold'       => '空のしきい値',
            'empty-threshold-desc'  => '利用可能な製品はありません',
            'end-date'              => '終了日',
            'hi-comment'            => 'ストアでの進行状況を素早く確認してください。',
            'hi-seller'             => 'こんにちは！ :seller_name',
            'month'                 => '今月',
            'no-category'           => 'データはありません',
            'no-customer'           => 'データはありません',
            'no-record-available'   => '利用可能なレコードはありません。',
            'order-count'           => ':total 注文',
            'overall-details'       => '全体の詳細',
            'pending-orders'        => '保留中 (:count)',
            'per-unit'              => ':price/ユニット',
            'processing-orders'     => '処理中 (:count)',
            'product-info'          => '移動中に関連する製品を追加します',
            'profile-score'         => 'プロフィールスコア',
            'profile-score-desc'    => 'プロフィール情報を完全に保つことで、視認性を最大限に高めましょう。',
            'qty-stock'             => ':qty 在庫',
            'refunded-orders'       => '払い戻し済み (:count)',
            'remaining-payout'      => '残りの支払額',
            'start-date'            => '開始日',
            'stock-threshold'       => '在庫のしきい値',
            'title'                 => 'ダッシュボード',
            'today'                 => '今日',
            'top-categories'        => 'トップカテゴリ',
            'top-customers'         => '最も売上の多い顧客',
            'top-products'          => '最も売れている商品',
            'total-customers'       => '総顧客数',
            'total-orders'          => '総注文数',
            'total-payout'          => '総支払額',
            'total-sale'            => '総売上高 :total',
            'total-sales'           => '総売上高',
            'view-all-btn'          => 'すべて表示',
            'visitor-count'         => '訪問者 - :count',
            'week'                  => '今週',
            'year'                  => '今年',
        ],

        'orders' => [
            'index' => [
                'title' => '注文',

                'datagrid' => [
                    'canceled'        => 'キャンセル',
                    'closed'          => 'クローズド',
                    'commission'      => '手数料',
                    'completed'       => '完了',
                    'customer'        => '顧客',
                    'date'            => '日付',
                    'discount'        => '割引',
                    'email'           => 'Eメール',
                    'fraud'           => '詐欺',
                    'gross-amt'       => '総額',
                    'id'              => 'Id',
                    'invoice-pending' => '請求書保留中',
                    'items'           => 'アイテム',
                    'location'        => '場所',
                    'order-id'        => 'ID - #:id',
                    'paid'            => '支払済み',
                    'payment'         => '支払い',
                    'payment-request' => '支払いリクエスト',
                    'pending'         => '保留中',
                    'pending-payment' => '支払い保留',
                    'processing'      => '処理中',
                    'refunded'        => '払い戻し済み',
                    'requested'       => 'リクエスト済み',
                    'seller-earn'     => '売り手の収益',
                    'shipment'        => '発送',
                    'status'          => 'ステータス',
                    'transaction'     => '取引',
                    'view'            => '表示',
                ],

                'payment-req-success'  => '支払いリクエストは正常に送信されました',
                'something-went-wrong' => '何かがうまくいきませんでした！',
            ],

            'view' => [
                'admin-commission'           => '管理者手数料',
                'billing-address'            => '請求先住所',
                'by-customer'                => '顧客 - :nameによる',
                'cancel-btn'                 => 'キャンセル',
                'cancel-confirm-msg'         => 'この注文をキャンセルしてもよろしいですか？',
                'cancel-error-msg'           => '注文はキャンセルできません',
                'cancel-success-msg'         => '注文はキャンセルされました',
                'canceled'                   => 'キャンセル',
                'closed'                     => 'クローズド',
                'completed'                  => '完了',
                'discount'                   => '割引',
                'fraud'                      => '詐欺',
                'grand-total'                => '総額',
                'info'                       => '情報',
                'item-canceled'              => 'キャンセル済み (:qty_canceled)',
                'item-invoice'               => '請求書 (:qty_invoiced)',
                'item-ordered'               => '注文済み (:qty_ordered)',
                'item-refunded'              => '払い戻し済み (:qty_refunded)',
                'item-shipped'               => '発送済み (:qty_shipped)',
                'item-status'                => 'アイテムのステータス',
                'payment-method'             => '支払い方法',
                'pending'                    => '保留中',
                'pending_payment'            => '支払い保留',
                'permission-error'           => '注文をキャンセルする権限がありません',
                'place-on'                   => ':dateに注文',
                'price'                      => '価格',
                'price-excl-tax'             => '価格（税込みなし）',
                'price-incl-tax'             => '価格（税込み）',
                'processing'                 => '処理中',
                'product'                    => '製品',
                'shipping-address'           => '配送先住所',
                'shipping-handling'          => '送料と取扱手数料',
                'shipping-handling-excl-tax' => '送料と手数料（税抜）',
                'shipping-handling-incl-tax' => '送料と手数料（税込）',
                'shipping-method'            => '配送方法',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => '小計',
                'sub-total-excl-tax'         => '小計（税抜）',
                'sub-total-incl-tax'         => '小計（税込）',
                'tax'                        => '税金',
                'tax-amount'                 => '税額',
                'tax-percent'                => '税率',
                'title'                      => '注文 #:order_id',
                'total'                      => '合計',
                'total-due'                  => '総額',
                'total-paid'                 => '総支払額',
                'total-refunded'             => '総払い戻し額',
                'total-seller-amt'           => '売り手の総額',

                'invoices' => [
                    'bank-details'               => '銀行詳細',
                    'bill-to'                    => '請求先',
                    'contact'                    => '連絡先',
                    'contact-number'             => '連絡先番号',
                    'created-on'                 => '作成日: :date_time',
                    'date'                       => '請求書日付',
                    'discount'                   => '割引',
                    'excl-tax'                   => '税抜:',
                    'grand-total'                => '総計',
                    'individual-invoice'         => '請求書 #:invoice_id',
                    'invoice'                    => '請求書',
                    'invoice-id'                 => '請求書ID',
                    'name'                       => '名前',
                    'order-date'                 => '注文日',
                    'order-id'                   => '注文ID',
                    'payment-method'             => '支払い方法',
                    'payment-terms'              => '支払い条件',
                    'price'                      => '価格',
                    'print'                      => '印刷',
                    'product-name'               => '商品名',
                    'qty'                        => '数量',
                    'ship-to'                    => '配送先',
                    'shipping-handling'          => '送料および手数料',
                    'shipping-handling-excl-tax' => '送料および手数料（税抜）',
                    'shipping-handling-incl-tax' => '送料および手数料（税込）',
                    'shipping-method'            => '配送方法',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => '小計',
                    'sub-total-excl-tax'         => '小計（税抜）',
                    'sub-total-incl-tax'         => '小計（税込）',
                    'tax'                        => '税金',
                    'tax-amount'                 => '税額',
                    'title'                      => '請求書',
                    'vat-number'                 => 'VAT番号',
                ],

                'shipments' => [
                    'carrier-title'       => 'キャリアタイトル',
                    'created-on'          => ':date_timeに作成',
                    'individual-shipment' => '発送番号 #:track_number',
                    'inventory-source'    => '在庫ソース',
                    'name'                => '名前',
                    'qty'                 => '数量',
                    'sku'                 => 'SKU - :sku',
                    'title'               => '発送',
                    'tracking-number'     => '追跡番号',
                ],

                'refunds' => [
                    'adjustment-fee'             => '調整手数料',
                    'adjustment-refund'          => '調整返金',
                    'created-on'                 => ':date_timeに作成',
                    'discount'                   => '割引',
                    'grand-total'                => '総合計',
                    'individual-refund'          => '返金 #:refund_id',
                    'no-result-found'            => 'レコードが見つかりませんでした。',
                    'price'                      => '価格',
                    'product-name'               => '商品名',
                    'qty'                        => '数量',
                    'shipping-handling'          => '送料と取り扱い料',
                    'shipping-handling-excl-tax' => '送料と手数料（税抜）',
                    'shipping-handling-incl-tax' => '送料と手数料（税込）',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => '小計（税抜）',
                    'sub-total-incl-tax'         => '小計（税込）',
                    'subtotal'                   => '小計',
                    'tax'                        => '税金',
                    'tax-amount'                 => '税額',
                    'title'                      => '返金',
                ],
            ],

            'invoices' => [
                'create-btn'       => '請求書',
                'invoice-success'  => '請求書は正常に作成されました',
                'permission-error' => '注文請求書を作成する権限がありません',
                'price'            => '価格',
                'product-name'     => '製品名',
                'qty'              => '数量',
                'qty-error'        => '要求された数量は利用できません',
                'sub-total'        => '請求書<br>小計',
                'title'            => '請求書の作成',
                'total'            => '合計',
            ],

            'shipments' => [
                'avl-qty'          => '利用可能 - :qty 数量',
                'carrier-title'    => 'キャリアタイトル',
                'create-btn'       => '発送',
                'ordered-qty'      => '注文数量',
                'permission-error' => '出荷を作成する権限がありません',
                'product-name'     => '製品名',
                'qty'              => '数量',
                'qty-error'        => '要求された数量は利用できません',
                'shipment-success' => '発送は正常に作成されました',
                'shipped-qty'      => '発送数量',
                'sku'              => 'SKU - :sku',
                'source'           => '製品注文元',
                'title'            => '出荷の作成',
                'tracking-id'      => '追跡ID',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => '作成日',
                    'from'         => '開始',
                    'id'           => 'ID',
                    'order-id'     => '注文ID',
                    'qty'          => '数量',
                    'to'           => '終了',
                    'view'         => '表示',
                ],

                'title'    => '予約',
            ],

            'calendar' => [
                'booking-date'     => '予約日',
                'booking-details'  => '予約詳細',
                'canceled'         => 'キャンセル済み',
                'closed'           => '終了',
                'done'             => '完了',
                'order-id'         => '注文ID',
                'pending'          => '保留中',
                'price'            => '価格',
                'status'           => 'ステータス',
                'time-slot'        => '時間枠:',
                'view-details'     => '詳細を見る',
            ],

            'title' => '予約商品',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => '残りの支払額',
                'title'                  => '取引',
                'total-payout'           => '総支払額',
                'total-seller-sale'      => '総売上高（販売者）',
                'total-admin-commission' => '総手数料（管理者）',
                'total-sale-invoiced'    => '総売上高（請求書）',

                'datagrid' => [
                    'comment'        => 'コメント',
                    'id'             => 'ID',
                    'total'          => '合計',
                    'transaction-id' => '取引ID',
                ],
            ],

            'view' => [
                'commission'        => '手数料',
                'created-on'        => ':date に作成',
                'date'              => '日付',
                'id'                => '取引ID',
                'method'            => '支払い方法',
                'name'              => '名前',
                'payment-method'    => ':method での支払い',
                'price'             => '価格',
                'print'             => '印刷',
                'qty'               => '数量',
                'seller-total'      => '販売者合計',
                'shipping-handling' => '送料および取り扱い',
                'subtotal'          => '小計',
                'tax'               => '税金',
                'title'             => '取引',
                'total'             => '合計',
                'transaction-id'    => '取引番号: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => '新しい製品を追加',
                'title'           => '製品',

                'datagrid' => [
                    'active'         => 'アクティブ',
                    'approved'       => '承認済み',
                    'category'       => 'カテゴリ',
                    'delete'         => '削除',
                    'disable'        => '無効',
                    'disapproved'    => '非承認',
                    'edit'           => '編集',
                    'id'             => 'ID',
                    'image'          => '画像',
                    'is-approved'    => '承認されています',
                    'name'           => '名前',
                    'out-of-stock'   => '在庫切れ',
                    'price'          => '価格',
                    'product-number' => '製品番号',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'ステータス',
                    'stock'          => '在庫',
                    'total-quantity' => ':quantity 利用可能',
                    'type'           => 'タイプ',
                ],
            ],

            'create' => [
                'attribute-family'          => '属性ファミリ',
                'back'                      => '戻る',
                'continue'                  => '続ける',
                'create-new-product'        => '新しい製品を作成',
                'create-your-new-product'   => '製品が存在しない場合は、新しい製品を作成してください。',
                'disable-product-message'   => '管理者が商品を作成または割り当てる機能を無効にしました。',
                'image-placeholder'         => 'あなたの画像',
                'no-result'                 => '結果なし',
                'not-allowed'               => '商品を作成する権限がありません',
                'or'                        => 'または',
                'product-type'              => '製品タイプ',
                'search-product'            => '製品を検索',
                'sell-admin-product-prices' => '管理製品をあなたの価格で販売します。',
                'sell-as-yours'             => 'あなたの製品として販売',
                'sku'                       => 'SKU',
                'sub-title'                 => '2つの方法で製品を追加できます。管理製品から販売または独自の製品を作成します。',
                'title'                     => '新しい製品を追加',
                'update-profile'            => 'プロフィールの詳細を更新してください',
            ],

            'edit' => [
                'back-btn'      => '戻る',
                'preview'       => 'プレビュー',
                'remove'        => '削除',
                'save-btn'      => '製品を保存',
                'title'         => '製品を編集',
                'channels'      => 'チャネル',
                'progress-info' => '商品の魅力を高め、すべての製品情報が完全かつ正確であることを確認して、顧客に永続的な印象を与えましょう!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'グループ価格を追加',
                        'all-groups'                => 'すべてのグループ',
                        'create-btn'                => '新規追加',
                        'discount-group-price-info' => ':price の割引価格で :qty 個の数量に対して',
                        'edit-btn'                  => '編集',
                        'empty-info'                => '特定のグループに所属する顧客のための特別価格',
                        'fixed-group-price-info'    => ':price の固定価格で :qty 個の数量に対して',
                        'title'                     => '顧客グループ価格',

                        'create' => [
                            'all-groups'     => 'すべてのグループ',
                            'create-title'   => '顧客グループ価格を作成',
                            'customer-group' => '顧客グループ',
                            'delete-btn'     => '削除',
                            'discount'       => '割引',
                            'fixed'          => '固定',
                            'price'          => '価格',
                            'price-type'     => '価格タイプ',
                            'qty'            => '数量',
                            'save-btn'       => '保存',
                            'update-title'   => '顧客グループ価格を更新',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => '保留中の注文数量: :qty',
                    'pending-ordered-qty-info' => '出荷後、対応する在庫ソースから保留中の注文数量が差し引かれます。キャンセルの場合、保留中の数量は販売可能になります。',
                    'title'                    => '在庫',
                ],

                'categories' => [
                    'title' => 'カテゴリー',
                ],

                'images' => [
                    'info'  => '画像の解像度は 609px x 560px のようにする必要があります。',
                    'title' => '画像',
                ],

                'videos' => [
                    'error' => ':max キロバイトを超えるビデオはアップロードできません。より小さいファイルを選択してください。',
                    'info'  => '最大ビデオサイズは :size となります',
                    'title' => 'ビデオ',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => '移動中に関連する製品を追加します。',
                        'info'       => 'お客様が表示中の製品に加えて、関連製品が表示されます。',
                        'title'      => '関連製品',
                    ],

                    'up-sells' => [
                        'empty-info' => '移動中に追加の販売商品を追加します。',
                        'info'       => 'お客様には、現在表示している製品のプレミアムまたは高品質の代替製品として機能するアップセル製品が提示されます。',
                        'title'      => 'アップセル製品',
                    ],

                    'cross-sells' => [
                        'empty-info' => '移動中にクロスセル商品を追加します。',
                        'info'       => 'ショッピングカートの隣には、「インパルス購入」商品として配置されるクロスセル製品が表示され、すでにカートに追加された商品を補完します。',
                        'title'      => 'クロスセル製品',
                    ],

                    'add-btn'           => '製品を追加',
                    'delete'            => '削除',
                    'empty-info'        => ':type 製品を追加するには。',
                    'empty-title'       => '製品を追加',
                    'image-placeholder' => '製品画像',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'オプションを追加',
                            'empty-info'        => 'カスタマイズ可能なオプションをすぐに作成できます。',
                            'empty-title'       => 'オプションを追加',
                            'info'              => 'これにより、シンプルな製品がカスタマイズされます。',
                            'title'             => 'カスタマイズ可能なアイテム',

                            'update-create' => [
                                'is-required'               => '必須',
                                'max-characters'            => '最大文字数',
                                'name'                      => 'タイトル',
                                'no'                        => 'いいえ',
                                'price'                     => '価格',
                                'save-btn'                  => '保存',
                                'supported-file-extensions' => 'サポートされているファイル拡張子',
                                'title'                     => 'オプション',
                                'type'                      => 'タイプ',
                                'yes'                       => 'はい',
                            ],

                            'option' => [
                                'add-btn'     => 'オプションを追加',
                                'delete'      => '削除',
                                'delete-btn'  => '削除',
                                'edit-btn'    => '編集',
                                'empty-info'  => 'さまざまな製品の組み合わせをすぐに作成できます。',
                                'empty-title' => 'オプションを追加',

                                'types' => [
                                    'text' => [
                                        'title' => 'テキスト',
                                    ],

                                    'textarea' => [
                                        'title' => 'テキストエリア',
                                    ],

                                    'checkbox' => [
                                        'title' => 'チェックボックス',
                                    ],

                                    'radio' => [
                                        'title' => 'ラジオボタン',
                                    ],

                                    'select' => [
                                        'title' => '選択',
                                    ],

                                    'multiselect' => [
                                        'title' => 'マルチセレクト',
                                    ],

                                    'date' => [
                                        'title' => '日付',
                                    ],

                                    'datetime' => [
                                        'title' => '日付と時刻',
                                    ],

                                    'time' => [
                                        'title' => '時間',
                                    ],

                                    'file' => [
                                        'title' => 'ファイル',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'ラベル',
                                        'price'    => '価格',
                                        'save-btn' => '保存',
                                        'title'    => 'オプション',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'この製品は既にコンフィギュラブル、グループ、またはバンドル製品に関連付けられています。',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'バリエーションを追加',
                        'delete-btn'        => '削除',
                        'edit-btn'          => '編集',
                        'empty-info'        => '製品のさまざまな組み合わせをすぐに作成するには。',
                        'empty-title'       => 'バリエーションを追加',
                        'image-placeholder' => '製品画像',
                        'info'              => 'バリエーション製品は、属性のすべての可能な組み合わせに依存しています。',
                        'qty'               => ':qty 個',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'バリエーション',

                        'create'  => [
                            'description'            => '説明',
                            'name'                   => '名前',
                            'save-btn'               => '追加',
                            'title'                  => 'バリエーションを追加',
                            'variant-already-exists' => 'このバリエーションはすでに存在します',
                        ],

                        'edit' => [
                            'disabled'        => '無効',
                            'edit-info'       => '製品情報を詳細に更新する場合は、次の',
                            'edit-link-title' => '製品詳細ページ',
                            'enabled'         => '有効',
                            'images'          => '画像',
                            'name'            => '名前',
                            'price'           => '価格',
                            'quantities'      => '数量',
                            'save-btn'        => '保存',
                            'sku'             => 'SKU',
                            'status'          => 'ステータス',
                            'title'           => '製品',
                            'weight'          => '重さ',
                        ],

                        'mass-edit' => [
                            'add-images'          => '画像を追加',
                            'apply-to-all-btn'    => 'すべてに適用',
                            'apply-to-all-sku'    => 'すべてのSKUに価格を適用。',
                            'edit-inventories'    => '在庫を編集',
                            'edit-prices'         => '価格を編集',
                            'price'               => '価格',
                            'remove-images'       => '画像を削除',
                            'remove-variants'     => 'バリアントを削除',
                            'select-action'       => 'アクションを選択',
                            'select-variants'     => 'バリアントを選択',
                            'edit-name'           => '名前を編集',
                            'name'                => '名前',
                            'edit-sku'            => 'SKUを編集',
                            'sku'                 => 'SKU',
                            'edit-weight'         => '重量を編集',
                            'weight'              => '重量',
                            'edit-status'         => '状態を編集',
                            'status'              => '状態',
                            'apply-to-all-name'   => 'すべてのバリアントに名前を適用。',
                            'apply-to-all-weight' => 'すべてのバリアントに重量を適用。',
                            'apply-to-all-status' => 'すべてのバリアントに状態を適用。',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => '製品を追加',
                        'default-qty'       => 'デフォルト数量',
                        'delete'            => '削除',
                        'empty-info'        => 'さまざまな製品の組み合わせをすぐに作成するには。',
                        'empty-title'       => '製品を追加',
                        'image-placeholder' => '製品画像',
                        'info'              => 'グループ化された製品は、セットとして表示されるスタンドアロンのアイテムから構成され、シーズンやテーマによる変更や調整が可能です。各製品は個別に購入するか、グループの一部として購入できます。',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'グループ化された製品',
                    ],

                    'bundle' => [
                        'add-btn'           => 'オプションを追加',
                        'empty-info'        => 'バンドルオプションをすぐに作成するには。',
                        'empty-title'       => 'オプションを追加',
                        'image-placeholder' => '製品画像',
                        'info'              => 'バンドル製品は、複数のアイテムまたはサービスが特別価格で一緒に販売されるパッケージで、顧客にとって価値と便益を提供します。',
                        'title'             => 'バンドルアイテム',

                        'update-create' => [
                            'checkbox'    => 'チェックボックス',
                            'is-required' => '必須',
                            'multiselect' => 'マルチセレクト',
                            'name'        => 'タイトル',
                            'no'          => 'いいえ',
                            'radio'       => 'ラジオ',
                            'save-btn'    => '保存',
                            'select'      => '選択',
                            'title'       => 'オプション',
                            'type'        => 'タイプ',
                            'yes'         => 'はい',
                        ],

                        'option' => [
                            'add-btn'     => '製品を追加',
                            'default-qty' => 'デフォルト数量',
                            'delete'      => '削除',
                            'delete-btn'  => '削除',
                            'edit-btn'    => '編集',
                            'empty-info'  => 'さまざまな製品の組み合わせをすぐに作成するには。',
                            'empty-title' => '製品を追加',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'チェックボックスを使用してデフォルトの製品を設定します。',
                                    'title' => 'チェックボックス',
                                ],

                                'multiselect' => [
                                    'info'  => 'チェックボックスボタンを使用してデフォルトの製品を設定します。',
                                    'title' => 'マルチセレクト',
                                ],

                                'radio' => [
                                    'info'  => 'ラジオボタンを使用してデフォルトの製品を設定します。',
                                    'title' => 'ラジオ',
                                ],

                                'select' => [
                                    'info'  => 'ラジオボタンを使用してデフォルトの製品を設定します。',
                                    'title' => '選択',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => '利用可能開始日',
                        'available-to'   => '利用可能終了日',
                        'location'       => '場所',
                        'qty'            => '数量',
                        'title'          => '予約タイプ',

                        'available-every-week' => [
                            'no'    => 'いいえ',
                            'title' => '毎週利用可能',
                            'yes'   => 'はい',
                        ],

                        'appointment' => [
                            'break-duration' => 'スロット間の休憩時間（分）',
                            'slot-duration'  => 'スロットの期間（分）',

                            'same-slot-for-all-days' => [
                                'no'    => 'いいえ',
                                'title' => 'すべての日に同じスロット',
                                'yes'   => 'はい',
                            ],
                        ],

                        'default' => [
                            'add'              => '追加',
                            'break-duration'   => 'スロット間の休憩時間（分）',
                            'close'            => '閉じる',
                            'description'      => '予約情報',
                            'description-info' => 'スロットに応じて時間の長さが作成され、表示されます。時間の長さはすべてのスロットで一意であり、ストアフロントに表示されます。',
                            'edit'             => '編集',
                            'many'             => '1日に複数の予約',
                            'one'              => '複数日に1つの予約',
                            'open'             => '開く',
                            'slot-add'         => 'スロットを追加',
                            'slot-duration'    => 'スロットの期間（分）',
                            'slot-title'       => 'スロットの時間期間',
                            'title'            => 'デフォルト',
                            'unavailable'      => '利用不可',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'スロットを追加',
                                    'close'      => '閉じる',
                                    'day'        => '日',
                                    'edit-title' => 'スロットを編集',
                                    'friday'     => '金曜日',
                                    'from'       => '開始',
                                    'from-day'   => '開始日',
                                    'from-time'  => '開始時間',
                                    'monday'     => '月曜日',
                                    'open'       => '開く',
                                    'saturday'   => '土曜日',
                                    'save'       => '保存',
                                    'select'     => '選択',
                                    'status'     => 'ステータス',
                                    'sunday'     => '日曜日',
                                    'thursday'   => '木曜日',
                                    'to'         => '終了',
                                    'to-day'     => '終了日',
                                    'to-time'    => '終了時間',
                                    'tuesday'    => '火曜日',
                                    'wednesday'  => '水曜日',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'チケットを追加',
                            'delete'             => '削除',
                            'description'        => '説明',
                            'description-info'   => 'チケットは利用できません。',
                            'edit'               => '編集',
                            'name'               => '名前',
                            'price'              => '価格',
                            'qty'                => '数量',
                            'special-price'      => '特別価格',
                            'special-price-from' => '特別価格開始日',
                            'special-price-to'   => '特別価格終了日',
                            'title'              => 'チケット',
                            'valid-from'         => '有効開始日',
                            'valid-until'        => '有効終了日',

                            'modal'              => [
                                'edit' => 'チケットを編集',
                                'save' => '保存',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'チケットを追加',
                            ],

                            'slots'   => [
                                'add'         => 'スロットを追加',
                                'description' => '利用可能なスロットと時間の期間。',
                            ],
                        ],

                        'rental' => [
                            'daily'        => '日単位',
                            'daily-hourly' => '日単位と時間単位の両方',
                            'daily-price'  => '日単位の価格',
                            'hourly'       => '時間単位',
                            'hourly-price' => '時間単位の価格',
                            'title'        => 'レンタルタイプ',

                            'same-slot-for-all-days' => [
                                'no'    => 'いいえ',
                                'title' => 'すべての日に同じスロット',
                                'yes'   => 'はい',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'スロットを追加',
                            'description-info' => 'スロットに応じて時間の長さが作成され、表示されます。時間の長さはすべてのスロットで一意であり、ストアフロントに表示されます。',
                            'save'             => '保存',
                            'title'            => 'スロットの時間期間',
                            'unavailable'      => '利用不可',

                            'action'           => [
                                'add' => '追加',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => '金曜日',
                                    'from'       => '開始',
                                    'monday'     => '月曜日',
                                    'saturday'   => '土曜日',
                                    'sunday'     => '日曜日',
                                    'thursday'   => '木曜日',
                                    'to'         => '終了',
                                    'tuesday'    => '火曜日',
                                    'wednesday'  => '水曜日',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'スロット間の休憩時間（分）',
                            'guest-capacity'            => 'ゲスト収容人数',
                            'guest-limit'               => 'テーブルごとのゲスト制限',
                            'prevent-scheduling-before' => 'スケジュールを防ぐ',
                            'slot-duration'             => 'スロットの期間（分）',

                            'charged-per'               => [
                                'guest'  => 'ゲスト',
                                'table'  => 'テーブル',
                                'title'  => '課金単位',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'いいえ',
                                'title' => 'すべての日に同じスロット',
                                'yes'   => 'はい',
                            ],
                        ],

                        'type' => [
                            'appointment' => '予約',
                            'default'     => 'デフォルト予約',
                            'event'       => 'イベント予約',
                            'many'        => '複数',
                            'one'         => '1つ',
                            'rental'      => 'レンタル予約',
                            'table'       => 'テーブル予約',
                            'title'       => 'タイプ',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'リンクを追加',
                            'delete-btn'  => '削除',
                            'edit-btn'    => '編集',
                            'empty-info'  => 'すぐにリンクを作成するには。',
                            'empty-title' => 'リンクを追加',
                            'file'        => 'ファイル：',
                            'info'        => 'ダウンロード可能な製品タイプは、電子書籍、ソフトウェアアプリケーション、音楽、ゲームなどのデジタル製品を販売できます。',
                            'sample-file' => 'サンプルファイル：',
                            'sample-url'  => 'サンプルURL：',
                            'title'       => 'ダウンロード可能なリンク',
                            'url'         => 'URL：',

                            'update-create' => [
                                'downloads'   => 'ダウンロード許可',
                                'file'        => 'ファイル',
                                'file-type'   => 'ファイルタイプ',
                                'name'        => 'タイトル',
                                'price'       => '価格',
                                'sample'      => 'サンプル',
                                'sample-type' => 'サンプルタイプ',
                                'save-btn'    => '保存',
                                'title'       => 'リンク',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'サンプルを追加',
                            'delete-btn'  => '削除',
                            'edit-btn'    => '編集',
                            'empty-info'  => 'すぐにサンプルを作成するには。',
                            'empty-title' => 'サンプルを追加',
                            'file'        => 'ファイル：',
                            'info'        => 'ダウンロード可能な製品タイプは、電子書籍、ソフトウェアアプリケーション、音楽、ゲームなどのデジタル製品を販売できます。',
                            'title'       => 'ダウンロード可能なサンプル',
                            'url'         => 'URL：',

                            'update-create' => [
                                'file'      => 'ファイル',
                                'file-type' => 'ファイルタイプ',
                                'name'      => 'タイトル',
                                'save-btn'  => '保存',
                                'title'     => 'リンク',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => '製品が正常に作成されました',
            'delete-failed'            => '製品の削除に失敗しました',
            'delete-success'           => '製品が正常に削除されました',
            'product-type-not-allowed' => ':type 製品の販売は許可されていません',
            'saved-inventory-message'  => '製品は正常に保存されました',
            'update-success'           => '製品が正常に更新されました',

            'assign' => [
                'already-selling'     => 'この商品はすでに販売しています',
                'back-btn'            => '戻る',
                'condition'           => '状態',
                'create-success'      => '商品が出品者に正常に割り当てられました',
                'description'         => '説明',
                'image-size'          => '画像解像度は609px X 560pxである必要があります',
                'images'              => '画像',
                'new'                 => '新しい',
                'not-allowed'         => 'この商品を割り当てる権限がありません',
                'old'                 => '古い',
                'price'               => '価格',
                'product-not-allowed' => ':type タイプの商品を販売することは許可されていません',
                'quantities'          => '数量',
                'save-btn'            => '保存',
                'title'               => '商品を割り当てる',
                'update-success'      => '割り当てられた商品が正常に更新されました',

                'product-details' => [
                    'active'            => 'アクティブ',
                    'approved'          => '承認済み',
                    'disable'           => '無効化',
                    'disapproved'       => '却下されました',
                    'image-placeholder' => '商品の画像',
                    'title'             => '商品詳細',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title'          => '製品のレビュー',

                'datagrid' => [
                    'approved'      => '承認済み',
                    'customer'      => '顧客',
                    'date'          => '日付',
                    'description'   => '説明',
                    'email'         => 'メール',
                    'pending'       => '保留中',
                    'product'       => '製品',
                    'rating'        => '評価',
                    'status'        => 'ステータス',
                    'title'         => 'タイトル',
                    'unapproved'    => '未承認',
                    'update-status' => '更新ステータス',
                ],
            ],

            'update-success' => '製品レビューが正常に更新されました',
            'delete-success' => '商品レビューが正常に削除されました。',
        ],

        'customers' => [
            'index' => [
                'title' => '顧客',

                'datagrid' => [
                    'active'      => 'アクティブ',
                    'customer'    => '顧客',
                    'email'       => 'メール',
                    'gender'      => '性別',
                    'group'       => 'グループ',
                    'inactive'    => '非アクティブ',
                    'order-count' => '注文数',
                    'revenue'     => '収益',
                    'status'      => 'ステータス',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'プロフィール管理',
                'edit-btn' => 'プロフィールを編集',

                'general' => [
                    'email'      => 'メール',
                    'name'       => '名前',
                    'phone'      => '電話番号',
                    'shop-slug'  => 'ショップスラッグ',
                    'shop-title' => 'ショップタイトル',
                    'title'      => '一般情報',
                ],

                'about-store' => [
                    'title' => 'ストアについて',
                ],

                'meta' => [
                    'meta-description' => 'メタ説明',
                    'meta-keywords'    => 'メタキーワード',
                    'meta-title'       => 'メタタイトル',
                    'title'            => 'メタ説明',
                ],

                'policy' => [
                    'privacy'  => 'プライバシーポリシー',
                    'return'   => '返品ポリシー',
                    'shipping' => '配送ポリシー',
                    'title'    => 'ポリシー',
                ],

                'address' => [
                    'city'     => '市区町村',
                    'country'  => '国',
                    'postcode' => '郵便番号',
                    'state'    => '州',
                    'title'    => 'ストア住所',
                    'address'  => '住所',
                ],

                'social' => [
                    'link'  => ':name リンク',
                    'title' => 'ソーシャルリンク',
                ],

                'minimum-order-amount' => [
                    'title'  => '最小注文金額',
                ],

                'google-analytics' => [
                    'id'    => 'アナリティクスID',
                    'title' => 'Googleアナリティクス',
                ],

                'shop-information' => [
                    'admin-commission'       => '管理者手数料',
                    'admin-commission-value' => '管理者手数料 :rate% の請求額合計',
                    'allowed-categories'     => '許可されたカテゴリ',
                    'no-categories'          => '利用可能なカテゴリはありません',
                    'allowed-product-types'  => '許可された製品タイプ',
                    'no-product-types'       => '利用可能な製品タイプはありません',
                    'payment-methods'        => '支払い方法',
                    'no-payment-methods'     => '利用可能な支払い方法はありません',
                    'shipping-methods'       => '配送方法',
                    'no-shipping-methods'    => '利用可能な配送方法はありません',
                    'title'                  => 'ショップ情報',
                ],
            ],

            'edit' => [
                'banner'              => 'バナー',
                'banner-description'  => 'バナーを13:3の比率でアップロード、高さ375、安全領域375x250、モバイルの中央',
                'delete-banner'       => 'バナーを削除',
                'delete-logo'         => 'ロゴを削除',
                'logo'                => 'ロゴ',
                'logo-description'    => 'ロゴを1:1の比率でアップロード',
                'save-btn'            => 'プロフィールを保存',
                'title'               => 'プロフィール管理',
                'upload-new-banner'   => '新しいバナーをアップロード',
                'upload-new-logo'     => '新しいロゴをアップロード',

                'general' => [
                    'email'      => 'メール',
                    'name'       => '名前',
                    'phone'      => '電話番号',
                    'shop-slug'  => 'ショップスラッグ',
                    'shop-title' => 'ショップタイトル',
                    'title'      => '一般情報',
                ],

                'about-store' => [
                    'title' => 'ストアについて',
                ],

                'meta' => [
                    'meta-description' => 'メタ説明',
                    'meta-keywords'    => 'メタキーワード',
                    'meta-title'       => 'メタタイトル',
                    'title'            => 'メタ説明',
                ],

                'policy' => [
                    'privacy'  => 'プライバシーポリシー',
                    'return'   => '返品ポリシー',
                    'shipping' => '配送ポリシー',
                    'title'    => 'ポリシー',
                ],

                'address' => [
                    'city'           => '市区町村',
                    'country'        => '国',
                    'postcode'       => '郵便番号',
                    'state'          => '州',
                    'title'          => 'ストア住所',
                    'select-country' => '国を選択',
                    'select-state'   => '州を選択',
                    'street-address' => '通りの住所',
                    'address'        => '住所',
                ],

                'social' => [
                    'link'  => ':name リンク',
                    'title' => 'ソーシャルリンク',
                ],

                'minimum-order-amount' => [
                    'title'  => '最小注文金額',
                ],

                'google-analytics' => [
                    'id'    => 'GoogleアナリティクスID',
                    'title' => 'Googleアナリティクス',
                ],
            ],

            'update-success' => 'プロフィールが正常に更新されました',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'セラーレビュー',

                'datagrid' => [
                    'approved'    => '承認済み',
                    'customer'    => '顧客',
                    'date'        => '日付',
                    'description' => '説明',
                    'disapproved' => '非承認',
                    'email'       => 'メール',
                    'pending'     => '保留中',
                    'rating'      => '評価',
                    'status'      => 'ステータス',
                    'title'       => 'タイトル',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => '保存',
                    'title'              => '一般',
                    'unmatched-password' => '現在のパスワードが一致しません',
                    'update-success'     => '一般設定が正常に更新されました',

                    'regional-setting' => [
                        'currency'      => '通貨',
                        'locale'        => 'ロケール',
                        'select-locale' => 'ロケールを選択',
                        'title'         => '地域設定',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'パスワードの確認',
                        'current-password' => '現在のパスワード',
                        'new-password'     => '新しいパスワード',
                        'title'            => 'パスワード設定',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => '役割を作成',
                    'title'      => '役割',

                    'datagrid' => [
                        'all'             => 'すべて',
                        'custom'          => 'カスタム',
                        'delete'          => '削除',
                        'edit'            => '編集',
                        'id'              => 'ID',
                        'name'            => '名前',
                        'permission-type' => '権限タイプ',
                    ],
                ],

                'create' => [
                    'access-control' => 'アクセス制御',
                    'all'            => 'すべて',
                    'back-btn'       => '戻る',
                    'custom'         => 'カスタム',
                    'description'    => '説明',
                    'general'        => '一般',
                    'name'           => '名前',
                    'permissions'    => '権限',
                    'save-btn'       => '役割を保存',
                    'title'          => '役割を作成',
                ],

                'edit' => [
                    'access-control' => 'アクセス制御',
                    'all'            => 'すべて',
                    'back-btn'       => '戻る',
                    'custom'         => 'カスタム',
                    'description'    => '説明',
                    'general'        => '一般',
                    'name'           => '名前',
                    'permissions'    => '権限',
                    'save-btn'       => '役割を保存',
                    'title'          => '役割を編集',
                ],

                'being-used'        => '役割は一部の売り手によって使用されています',
                'create-success'    => '役割が正常に作成されました',
                'delete-failed'     => '役割の削除に失敗しました',
                'delete-success'    => '役割が正常に削除されました',
                'last-delete-error' => '少なくとも1つの役割が必要です',
                'update-success'    => '役割が正常に更新されました',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'ユーザーを作成',
                    'create-title'     => 'ユーザーを作成',
                    'edit-title'       => 'ユーザーを編集',
                    'email'            => 'メール',
                    'name'             => '名前',
                    'phone-number'     => '電話番号',
                    'role'             => '役割',
                    'save-btn'         => 'ユーザーを保存',
                    'select-role'      => '役割を選択',
                    'password'         => 'パスワード',
                    'confirm-password' => 'パスワードを確認',
                    'status'           => 'ステータス',
                    'title'            => 'ユーザー',
                    'create-success'   => 'ユーザーが正常に作成されました',
                    'update-success'   => 'ユーザーが正常に更新されました',
                    'delete-success'   => 'ユーザーが正常に削除されました',
                    'delete-failed'    => 'ユーザーの削除に失敗しました',

                    'datagrid' => [
                        'delete'     => '削除',
                        'edit'       => '編集',
                        'email'      => 'メール',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => '名前',
                        'permission' => '許可',
                        'phone'      => '電話',

                        'status' => [
                            'title' => 'ステータス',

                            'options' => [
                                'active'    => 'アクティブ',
                                'suspended' => '一時停止',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => '在庫ソースを作成する',
                    'title'      => '在庫ソース',

                    'datagrid' => [
                        'active'   => 'アクティブ',
                        'code'     => 'コード',
                        'delete'   => '削除',
                        'edit'     => '編集',
                        'id'       => 'ID',
                        'inactive' => '非アクティブ',
                        'name'     => '名前',
                        'priority' => '優先度',
                        'status'   => 'ステータス',
                    ],
                ],

                'create' => [
                    'add-title'      => '在庫ソースを追加',
                    'address'        => 'ソース住所',
                    'back-btn'       => '戻る',
                    'city'           => '市区町村',
                    'code'           => 'コード',
                    'contact-email'  => 'メール',
                    'contact-fax'    => 'FAX',
                    'contact-info'   => '連絡先情報',
                    'contact-name'   => '名前',
                    'contact-number' => '連絡先番号',
                    'country'        => '国',
                    'description'    => '説明',
                    'general'        => '一般',
                    'latitude'       => '緯度',
                    'longitude'      => '経度',
                    'name'           => '名前',
                    'postcode'       => '郵便番号',
                    'priority'       => '優先度',
                    'save-btn'       => '在庫ソースを保存',
                    'select-country' => '国を選択',
                    'select-state'   => '都道府県を選択',
                    'settings'       => '設定',
                    'state'          => '都道府県',
                    'status'         => 'ステータス',
                    'street'         => '番地',
                    'title'          => '在庫ソース',
                ],

                'edit' => [
                    'back-btn'       => '戻る',
                    'city'           => '市区町村',
                    'code'           => 'コード',
                    'contact-email'  => 'メール',
                    'contact-fax'    => 'FAX',
                    'contact-info'   => '連絡先情報',
                    'contact-name'   => '名前',
                    'contact-number' => '連絡先番号',
                    'country'        => '国',
                    'description'    => '説明',
                    'general'        => '一般',
                    'latitude'       => '緯度',
                    'longitude'      => '経度',
                    'name'           => '名前',
                    'postcode'       => '郵便番号',
                    'priority'       => '優先度',
                    'save-btn'       => '在庫ソースを保存',
                    'select-country' => '国を選択',
                    'select-state'   => '都道府県を選択',
                    'settings'       => '設定',
                    'source-address' => 'ソース住所',
                    'state'          => '都道府県',
                    'status'         => 'ステータス',
                    'street'         => '番地',
                    'title'          => '在庫ソースを編集',
                ],

                'create-success'    => '在庫ソースが正常に作成されました',
                'delete-failed'     => '在庫ソースの削除に失敗しました',
                'delete-success'    => '在庫ソースが正常に削除されました',
                'last-delete-error' => '最後の在庫ソースは削除できません',
                'update-success'    => '在庫ソースが正常に更新されました',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => '管理者',
                'blocked-message'     => '管理者によってブロックされました',
                'message-failed'      => 'メッセージの送信に失敗しました',
                'message-placeholder' => 'ここにメッセージを入力してください...',
                'message-sent'        => 'メッセージが正常に送信されました',
                'no-message'          => 'メッセージが見つかりません',
                'search-message'      => 'メッセージを検索...',
                'title'               => 'コミュニケーション',

                'filters' => [
                    'all-messages'      => 'すべてのメッセージ',
                    'prev-fifteen-days' => '過去15日間',
                    'prev-seven-days'   => '過去7日間',
                    'prev-six-months'   => '過去6か月間',
                    'prev-thirty-days'  => '過去30日間',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => '放棄されたカート',
                    'abandoned-products'            => '放棄された商品',
                    'abandoned-rate'                => '放棄率',
                    'abandoned-revenue'             => '放棄された売上',
                    'added-to-cart'                 => 'カートに追加',
                    'added-to-cart-info'            => '進捗中の訪問者のみがカートに商品を追加',
                    'all-channels'                  => 'すべてのチャンネル',
                    'average-order-value-over-time' => '平均注文金額の推移',
                    'average-sales'                 => '平均注文金額',
                    'commission'                    => '手数料',
                    'commission-over-time'          => '経過時間の手数料',
                    'count'                         => 'カウント',
                    'end-date'                      => '終了日',
                    'id'                            => 'ID',
                    'interval'                      => 'インターバル',
                    'name'                          => '名前',
                    'orders'                        => '注文',
                    'orders-over-time'              => '注文の推移',
                    'payment-method'                => '支払い方法',
                    'product-views'                 => '商品閲覧数',
                    'product-views-info'            => '進捗中の訪問者のみが商品を閲覧',
                    'purchase-funnel'               => '購入ファネル',
                    'purchased'                     => '購入済み',
                    'purchased-info'                => '進捗中の訪問者のみが購入',
                    'refunds'                       => '払い戻し',
                    'refunds-over-time'             => '払い戻しの推移',
                    'sales-over-time'               => '売上の推移',
                    'start-date'                    => '開始日',
                    'tax-collected'                 => '税金収集',
                    'tax-collected-over-time'       => '税金収集の推移',
                    'title'                         => '売上',
                    'top-payment-methods'           => 'トップ支払い方法',
                    'top-tax-categories'            => 'トップ税カテゴリー',
                    'total'                         => '合計',
                    'total-commission-paid'         => '支払われた総手数料',
                    'total-orders'                  => '合計注文数',
                    'total-sales'                   => '合計売上',
                    'total-visits'                  => '合計訪問数',
                    'total-visits-info'             => '店舗の合計訪問者数',
                    'view-details'                  => '詳細を表示',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'すべてのチャンネル',
                    'count'                       => 'カウント',
                    'customers'                   => '顧客',
                    'customers-over-time'         => '顧客の推移',
                    'customers-traffic'           => '顧客トラフィック',
                    'customers-with-most-orders'  => '最も多くの注文をした顧客',
                    'customers-with-most-reviews' => '最も多くのレビューをした顧客',
                    'customers-with-most-sales'   => '最も多くの売上をした顧客',
                    'email'                       => 'メールアドレス',
                    'end-date'                    => '終了日',
                    'id'                          => 'ID',
                    'interval'                    => 'インターバル',
                    'name'                        => '名前',
                    'orders'                      => '注文',
                    'reviews'                     => 'レビュー',
                    'start-date'                  => '開始日',
                    'title'                       => '顧客',
                    'top-customer-groups'         => 'トップ顧客グループ',
                    'total'                       => '合計',
                    'total-customers'             => '合計顧客数',
                    'total-visitors'              => '合計訪問者',
                    'traffic-over-week'           => '週のトラフィック',
                    'unique-visitors'             => 'ユニーク訪問者',
                    'view-details'                => '詳細を表示',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'すべてのチャンネル',
                    'channel'                          => 'チャンネル',
                    'end-date'                         => '終了日',
                    'id'                               => 'ID',
                    'interval'                         => 'インターバル',
                    'locale'                           => 'ロケール',
                    'name'                             => '名前',
                    'orders'                           => '注文',
                    'price'                            => '価格',
                    'products-added-over-time'         => '時間別商品追加数',
                    'products-with-most-reviews'       => '最多レビュー商品',
                    'products-with-most-visits'        => '最多訪問商品',
                    'quantities'                       => '数量',
                    'quantities-sold-over-time'        => '時間別販売数量',
                    'revenue'                          => '売上',
                    'reviews'                          => 'レビュー',
                    'start-date'                       => '開始日',
                    'title'                            => '商品',
                    'top-selling-products-by-quantity' => '数量別最売商品',
                    'top-selling-products-by-revenue'  => '売上別最売商品',
                    'total'                            => '合計',
                    'total-products-added-to-wishlist' => 'ウィッシュリストへの商品追加数',
                    'total-sold-quantities'            => '販売済商品数量',
                    'view-details'                     => '詳細を表示',
                    'visits'                           => 'アクセス数',
                ],
            ],

            'view' => [
                'all-channels'  => 'すべてのチャンネル',
                'day'           => '日',
                'end-date'      => '終了日',
                'export-csv'    => 'CSVエクスポート',
                'export-xls'    => 'XLSエクスポート',
                'month'         => '月',
                'not-available' => '利用可能なレコードはありません。',
                'start-date'    => '開始日',
                'year'          => '年',
            ],

            'empty' => [
                'info'  => '選択した期間のデータはありません',
                'title' => 'データは利用できません',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => '無効',
                'enabled'   => '有効',
                'info'      => 'Bagisto のカスタマイズ可能な e コマース拡張機能でオンラインストアを構築、管理、拡張しましょう。',
                'no-result' => '利用可能な拡張機能はありません。',
                'title'     => '拡張機能',

                'filters' => [
                    'all-extensions' => 'すべての拡張機能',
                    'bulk_upload'    => '一括アップロード',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'マーケットプレイス',
                    'payment'        => '支払い',
                    'pos'            => 'POS',
                    'shipping'       => '配送',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => '販売者ロゴ',
                'switch-to-store' => 'ストア管理に切り替える',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => ':shop_title の最小注文額は',
                'product-not-available' => '製品は利用できません',
                'sold-by'               => '販売者',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => '支払い日数*',
                'deals-in'            => '取引先',
                'featured-seller'     => 'おすすめの販売者',
                'online-business'     => 'オンラインビジネス',
                'reviews'             => ':count レビュー',
                'seller-community'    => '販売者コミュニティ',
                'serviceable-pincode' => '利用可能な郵便番号',
                'start-selling'       => '世界中の大規模な顧客と、一日中販売を始めましょう。',
                'step'                => 'ステップ :count',
                'visit-shop'          => 'ショップに行く',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'カートに追加',
            'delivery-info' => 'ここに配送情報が表示されます',
            'hide'          => '非表示',
            'more-info'     => '詳細情報',
            'seller-count'  => ':count 人以上の売り手が同じ商品を販売しています',
            'seller-info'   => '売り手情報',
            'sold-by'       => '販売元',
            'top-selling'   => 'トップセリング',

            'flag' => [
                'alert'              => '警告',
                'already-reported'   => 'この製品はすでに報告されています',
                'create-success'     => '製品が正常に報告されました',
                'guest-alert'        => 'この製品を報告するにはログインが必要です',
                'not-allowed'        => '注文をせずにこの製品を報告することはできません',
                'other-reason'       => 'その他の理由',
                'reason'             => '理由',
                'reason-placeholder' => '理由を指定してください',
                'report-product'     => '製品を報告する',
                'select-reason'      => '理由を選択',
                'submit-btn'         => '送信',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => '販売者はまだ承認されていません',
                'products-count'  => '商品 (:count)',
                'reviews-count'   => 'レビュー (:count)',
                'search-text'     => '商品を検索する',

                'about' => [
                    'title'           => '概要',
                    'about-us'        => '私たちについて',
                    'shipping-policy' => '配送ポリシー',
                    'privacy-policy'  => 'プライバシーポリシー',
                    'return-policy'   => '返品ポリシー',
                ],

                'contact-form' => [
                    'title'          => 'お問い合わせ',
                    'name'           => '名前',
                    'email'          => 'メールアドレス',
                    'subject'        => '件名',
                    'query'          => 'お問い合わせ内容',
                    'submit-btn'     => '送信',
                    'create-success' => 'お問い合わせが正常に送信されました',
                ],

                'share' => [
                    'title'     => 'シェア',
                    'share-on'  => '共有先',
                    'facebook'  => 'フェイスブック',
                    'linkedin'  => 'リンクトイン',
                    'twitter'   => 'ツイッター',
                    'pinterest' => 'ピンタレスト',
                ],

                'report-form' => [
                    'alert'              => '警告',
                    'already-reported'   => 'この販売者はすでに報告されています',
                    'create-success'     => '販売者の報告が正常に送信されました',
                    'guest-alert'        => '報告するにはログインが必要です',
                    'not-allowed'        => '注文なしで販売者を報告することはできません',
                    'other-reason'       => 'その他の理由',
                    'reason'             => '理由',
                    'reason-placeholder' => '理由を具体的に記入してください',
                    'select-reason'      => '理由を選択',
                    'submit-btn'         => '送信',
                    'title'              => '問題を報告',
                ],

                'reviews' => [
                    'alert'            => '警告',
                    'already-reviewed' => 'あなたはすでにこの販売者をレビューしました',
                    'comment'          => 'コメント',
                    'create-success'   => '販売者が正常にレビューされました',
                    'customer-review'  => ':count 顧客レビュー',
                    'customer-reviews' => '顧客レビュー',
                    'guest-alert'      => '販売者を報告するにはログインする必要があります',
                    'rating'           => '評価',
                    'review-by'        => 'レビューによる',
                    'submit-btn'       => '送信',
                    'title'            => 'タイトル',
                    'view-all'         => 'すべてのレビューを見る',
                    'write-review'     => 'レビューを書く',
                ],

                'products' => [
                    'no-result' => 'ここには利用可能な商品がありません',
                    'show'      => '表示',

                    'sort-by' => [
                        'title' => '並べ替え',

                        'options' => [
                            'cheapest-first'  => '安い順',
                            'expensive-first' => '高い順',
                            'from-a-z'        => 'A-Z順',
                            'from-z-a'        => 'Z-A順',
                            'latest-first'    => '最新順',
                            'oldest-first'    => '古い順',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'すべてクリア',
                        'filter'      => 'フィルター',
                        'filters'     => 'フィルター:',
                        'price-range' => '価格範囲',
                        'sort'        => '並べ替え',
                    ],
                ],
            ],
        ],
    ],
];
