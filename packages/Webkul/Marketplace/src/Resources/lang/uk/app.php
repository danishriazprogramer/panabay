<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Ринок',
                    'info'  => 'Управління Ринком',

                    'module-info' => [
                        'title'       => 'Інформація про Модуль',
                        'info'        => 'Надає інформацію про версію додатку.',
                        'app-version' => 'Версія додатку: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Відсоток комісії адміністратора',
                        'description'                  => 'Управляйте загальними налаштуваннями ринку.',
                        'lines-in-street-address'      => 'Кількість рядків у вуличній адресі',
                        'lines-in-street-address-info' => 'Вкажіть кількість рядків. За замовчуванням одна.',
                        'status'                       => 'Статус',
                        'title'                        => 'Загальне',
                    ],

                    'product' => [
                        'approval-required'         => 'Потрібне схвалення',
                        'description'               => 'Управляйте налаштуваннями товарів.',
                        'enable-flag'               => 'Активувати прапор',
                        'seller-can-assign-product' => 'Продавець може призначити товар',
                        'seller-can-create-product' => 'Продавець може створити товар',
                        'show-progress-bar'         => 'Показати індикатор прогресу',
                        'title'                     => 'Товар',
                    ],

                    'seller' => [
                        'approval-required'           => 'Потрібне схвалення',
                        'can-cancel-order'            => 'Може скасувати замовлення',
                        'can-create-invoice'          => 'Може створити рахунок',
                        'can-create-shipment'         => 'Може створити відправлення',
                        'description'                 => 'Керуйте налаштуваннями продавця на ринку, такими як схвалення, прапори тощо.',
                        'enable-flag'                 => 'Увімкнути прапор',
                        'enable-minimum-order-amount' => 'Увімкнути мінімальну суму замовлення',
                        'enable-seller-flag'          => 'Увімкнути прапор продавця',
                        'red-flag-limit'              => 'Ліміт червоного прапора',
                        'red-flag-limit-info'         => 'Якщо продавець перевищить цей ліміт, на його профілі з’явиться червоний прапор.',
                        'show-red-flag'               => 'Показувати червоний прапор у профілі, якщо ліміт перевищено',
                        'title'                       => 'Продавець',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Обмежена Кількість',
                        'description' => 'Керуйте найкращими продавцями на ринку.',
                        'status'      => 'Статус',
                        'title'       => 'Популярні Продавці',

                        'popularity-criteria' => [
                            'all'              => 'Усі',
                            'maximum-orders'   => 'Максимальні Замовлення',
                            'maximum-products' => 'Максимальні Товари',
                            'maximum-rating'   => 'Максимальний рейтинг',
                            'maximum-sale'     => 'Максимальний Продаж',
                            'title'            => 'Критерії Популярності',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Заголовок кнопки банера',
                        'banner-description'  => 'Опис банера',
                        'banner-image'        => 'Зображення банера',
                        'banner-title'        => 'Заголовок банера',
                        'business-hour'       => 'Години роботи',
                        'community-count'     => 'Кількість учасників спільноти',
                        'description'         => 'Customise the landing page of the Marketplace by adding icons, banners, and descriptions for a fresh look.',
                        'feature-box1-desc'   => 'Опис блоку особливості 1',
                        'feature-box1-icon'   => 'Іконка блоку особливості 1',
                        'feature-box1-title'  => 'Заголовок блоку особливості 1',
                        'feature-box2-desc'   => 'Опис блоку особливості 2',
                        'feature-box2-icon'   => 'Іконка блоку особливості 2',
                        'feature-box2-title'  => 'Заголовок блоку особливості 2',
                        'feature-box3-desc'   => 'Опис блоку особливості 3',
                        'feature-box3-icon'   => 'Іконка блоку особливості 3',
                        'feature-box3-title'  => 'Заголовок блоку особливості 3',
                        'feature-box4-desc'   => 'Опис блоку особливості 4',
                        'feature-box4-icon'   => 'Іконка блоку особливості 4',
                        'feature-box4-title'  => 'Заголовок блоку особливості 4',
                        'feature-description' => 'Опис особливості',
                        'feature-image'       => 'Зображення особливості',
                        'feature-title'       => 'Заголовок особливості',
                        'journey-description' => 'Опис подорожі',
                        'journey-image'       => 'Зображення подорожі',
                        'journey-step1-desc'  => 'Опис кроку подорожі 1',
                        'journey-step1-icon'  => 'Іконка кроку подорожі 1',
                        'journey-step1-title' => 'Заголовок кроку подорожі 1',
                        'journey-step2-desc'  => 'Опис кроку подорожі 2',
                        'journey-step2-icon'  => 'Іконка кроку подорожі 2',
                        'journey-step2-title' => 'Заголовок кроку подорожі 2',
                        'journey-step3-desc'  => 'Опис кроку подорожі 3',
                        'journey-step3-icon'  => 'Іконка кроку подорожі 3',
                        'journey-step3-title' => 'Заголовок кроку подорожі 3',
                        'journey-step4-desc'  => 'Опис кроку подорожі 4',
                        'journey-step4-icon'  => 'Іконка кроку подорожі 4',
                        'journey-step4-title' => 'Заголовок кроку подорожі 4',
                        'journey-step5-desc'  => 'Опис кроку подорожі 5',
                        'journey-step5-icon'  => 'Іконка кроку подорожі 5',
                        'journey-step5-title' => 'Заголовок кроку подорожі 5',
                        'journey-title'       => 'Заголовок подорожі',
                        'payment-duration'    => 'Тривалість оплати',
                        'serviceable-pincode' => 'Обслуговується поштовий індекс',
                        'title'               => 'Посадочна сторінка',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Призначити товар',
            'communications'    => 'Комунікації',
            'create'            => 'Створити',
            'delete'            => 'Видалити',
            'edit'              => 'Редагувати',
            'flag-reasons'      => 'Причини скарги',
            'inventory-sources' => 'Джерела Інвентарю',
            'orders'            => 'Замовлення',
            'pay'               => 'Сплатити',
            'payment-request'   => 'Запит на оплату',
            'product-reviews'   => 'Відгуки про товари',
            'products'          => 'Продукти',
            'reviews'           => 'Відгуки продавців',
            'seller-categories' => 'Категорії продавців',
            'sellers'           => 'Продавці',
            'title'             => 'Маркетплейс',
            'transactions'      => 'Транзакції',
            'view'              => 'Переглянути',
        ],

        'menu' => [
            'communications'    => 'Комунікації',
            'flag-reasons'      => 'Причини Прапорців',
            'inventory-sources' => 'Джерела Інвентарю',
            'orders'            => 'Замовлення',
            'payment-requests'  => 'Запити на Оплату',
            'product-reviews'   => 'Відгуки Про Товар',
            'products'          => 'Товари',
            'seller-categories' => 'Категорії продавців',
            'seller-reviews'    => 'Відгуки Продавця',
            'sellers'           => 'Продавці',
            'title'             => 'Майданчик',
            'transactions'      => 'Транзакції',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Додати Продавця',
                'delete-failed'      => 'Видалення продавця не вдалося!',
                'delete-success'     => 'Продавця успішно видалено.',
                'incomplete-profile' => 'У продавця неповний профіль!',
                'login-message'      => 'Ви увійшли як :seller_name',
                'pending-orders'     => 'У продавця є деякі очікуючі замовлення',
                'title'              => 'Продавці',
                'update-success'     => 'Продавця успішно оновлено!',

                'datagrid' => [
                    'add-product'     => 'Додати',
                    'approved'        => 'Затверджено',
                    'assign-product'  => 'Призначити продукт',
                    'created-at'      => 'Створено',
                    'delete'          => 'Видалити',
                    'disapproved'     => 'Не затверджено',
                    'edit'            => 'Редагувати',
                    'email'           => 'Електронна пошта',
                    'flags'           => 'Прапорці',
                    'id'              => 'Ідентифікатор',
                    'login-as-seller' => 'Увійти як продавець',
                    'seller-id'       => 'Ідентифікатор - :seller_id',
                    'seller-name'     => 'Ім\'я продавця',
                    'shop-url'        => 'URL магазину',
                    'status'          => 'Статус',
                    'suspended'       => 'Призупинено',
                    'total-flags'     => 'Загальна кількість прапорців: :count',
                    'update-status'   => 'Оновити статус',
                ],

                'create'  => [
                    'address'        => 'Адреса',
                    'city'           => 'Місто',
                    'country'        => 'Країна',
                    'email'          => 'Електронна пошта',
                    'name'           => 'Ім\'я',
                    'phone'          => 'Номер телефону',
                    'postcode'       => 'Поштовий індекс',
                    'save-btn'       => 'Зберегти',
                    'select'         => 'Вибрати',
                    'shop-title'     => 'Назва магазину',
                    'shop-url'       => 'URL магазину',
                    'state'          => 'Штат',
                    'street-address' => 'Вулиця',
                    'success'        => 'Продавець успішно створений.',
                    'title'          => 'Створити продавця',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Прапори продавця',

                    'datagrid' => [
                        'id'             => 'Ідентифікатор',
                        'customer-name'  => 'Ім’я клієнта',
                        'customer-email' => 'Електронна пошта клієнта',
                        'date'           => 'Дата',
                        'reason'         => 'Причина',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Назад',
                'image-placeholder' => 'Зображення Товару',
                'no-result'         => 'Результати не знайдено!',
                'sku'               => 'Артикул - :sku',
                'title'             => 'Пошук Товарів',
            ],

            'assign-product' => [
                'already-selling'     => 'Продавець вже продає цей товар',
                'assign-successfully' => 'Товар успішно призначено продавцю.',
                'back-btn'            => 'Назад',
                'condition'           => 'Стан',
                'description'         => 'Опис',
                'new'                 => 'Новий',
                'old'                 => 'Старий',
                'price'               => 'Ціна',
                'product-not-allowed' => 'Продавцю заборонено продавати товари типу :type.',
                'quantities'          => 'Кількості',
                'save-btn'            => 'Зберегти',
                'select-condition'    => 'Виберіть стан',
                'title'               => 'Призначити товар',

                'seller-details' => [
                    'additional-info' => 'Додаткова інформація',
                    'approved'        => 'Затверджено',
                    'disapproved'     => 'Відхилено',
                    'no-of-products'  => 'Кількість товарів',
                    'status'          => 'Статус',
                    'suspended'       => 'Призупинено',
                    'title'           => 'Деталі продавця',
                ],

                'product-details' => [
                    'active'            => 'Активний',
                    'disable'           => 'Деактивувати',
                    'title'             => 'Деталі товару',
                    'image-placeholder' => 'Зображення товару',
                ],

                'images' => [
                    'info'  => 'Роздільна здатність зображення повинна бути приблизно 609px X 560px',
                    'title' => 'Зображення',
                ],

                'videos' => [
                    'error' => 'Відео не може бути більше ніж :max кілобайт. Будь ласка, виберіть менший файл.',
                    'info'  => 'Максимальний розмір відео повинен бути приблизно :size',
                    'title' => 'Відео',
                ],

                'configurable' => [
                    'delete-btn'        => 'Видалити',
                    'edit-btn'          => 'Редагувати',
                    'image-placeholder' => 'Зображення Товару',
                    'qty'               => 'Кількість - :qty',
                    'sku'               => 'Артикул - :sku',
                    'title'             => 'Варіації',

                    'edit' => [
                        'images'     => 'Зображення',
                        'price'      => 'Ціна',
                        'quantities' => 'Кількості',
                        'save-btn'   => 'Зберегти',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Додати Посилання',
                        'delete-btn'  => 'Видалити',
                        'edit-btn'    => 'Редагувати',
                        'empty-info'  => 'Щоб створити посилання, натисніть тут.',
                        'empty-title' => 'Додати Посилання',
                        'file'        => 'Файл : ',
                        'info'        => 'Тип товару для завантаження дозволяє продавати цифрові товари, такі як електронні книги, програмні застосунки, музику, ігри і т.д.',
                        'sample-file' => 'Файл для зразка : ',
                        'sample-url'  => 'URL для зразка : ',
                        'title'       => 'Посилання для Завантаження',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Завантаження Дозволено',
                            'file'        => 'Файл',
                            'file-type'   => 'Тип Файлу',
                            'name'        => 'Заголовок',
                            'price'       => 'Ціна',
                            'sample'      => 'Зразок',
                            'sample-type' => 'Тип Зразка',
                            'save-btn'    => 'Зберегти',
                            'title'       => 'Посилання',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Додати Зразок',
                        'delete-btn'  => 'Видалити',
                        'edit-btn'    => 'Редагувати',
                        'empty-info'  => 'Щоб створити зразок, натисніть тут.',
                        'empty-title' => 'Додати Зразок',
                        'file'        => 'Файл : ',
                        'info'        => 'Тип товару для завантаження дозволяє продавати цифрові товари, такі як електронні книги, програмні застосунки, музику, ігри і т.д.',
                        'title'       => 'Зразки для Завантаження',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'Файл',
                            'file-type' => 'Тип Файлу',
                            'name'      => 'Заголовок',
                            'save-btn'  => 'Зберегти',
                            'title'     => 'Посилання',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Назад',
                'suspended'      => 'Призупинено',
                'title'          => 'Редагувати Продавця',
                'update-btn'     => 'Оновити Продавця',
                'update-success' => 'Продавця успішно оновлено.',

                'shop' => [
                    'address'          => 'Адреса',
                    'street-address'   => 'Вулиця',
                    'city'             => 'Місто',
                    'country'          => 'Країна',
                    'description'      => 'Опис',
                    'email'            => 'Електронна пошта',
                    'name'             => 'Ім\'я',
                    'phone-number'     => 'Номер телефону',
                    'postcode'         => 'Поштовий індекс',
                    'select'           => 'Вибір',
                    'shop-title'       => 'Назва магазину',
                    'state'            => 'Область',
                    'title'            => 'Деталі магазину',
                    'url'              => 'URL магазину',
                ],

                'profile' => [
                    'banner'       => 'Банер Профілю',
                    'banner-size'  => 'Розмір банера повинен бути близько 300px X 200px',
                    'logo'         => 'Логотип Профілю',
                    'logo-size'    => 'Розмір логотипу повинен бути близько 125px X 125px',
                    'social-links' => ':name Посилання',
                    'title'        => 'Деталі Профілю',
                ],

                'allowed-product' => [
                    'title' => 'Дозволені Товари',
                ],

                'minimum-order-amount' => [
                    'title' => 'Мінімальна Сума Замовлення',
                ],

                'google-analytics-id' => [
                    'title' => 'Ідентифікатор Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Відсоток',
                    'status'     => 'Статус',
                    'title'      => 'Комісія Продавця',
                ],

                'meta-info' => [
                    'meta-description' => 'Мета Опис',
                    'meta-keyword'     => 'Мета Ключові слова',
                    'meta-title'       => 'Мета Заголовок',
                    'title'            => 'Мета Інформація',
                ],

                'policy' => [
                    'privacy'  => 'Політика Конфіденційності',
                    'return'   => 'Політика Повернення',
                    'shipping' => 'Політика Доставки',
                    'title'    => 'Політики',
                ],

                'channels' => [
                    'title' => 'Канал',
                ],

                'users' => [
                    'email' => 'Електронна пошта',
                    'id'    => 'ID',
                    'name'  => 'Ім’я',
                    'phone' => 'Телефон',
                    'title' => 'Користувачі',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Додати Товари',
                'delete-success' => 'Товар успішно видалено.',
                'title'          => 'Товари',
                'update-success' => 'Товар успішно оновлено.',

                'datagrid' => [
                    'approved'       => 'Затверджено',
                    'delete'         => 'Видалити',
                    'disapproved'    => 'Не затверджено',
                    'flags'          => 'Прапорці',
                    'id'             => 'ID',
                    'is-owner'       => 'Власник',
                    'no'             => 'Ні',
                    'out-of-stock'   => 'Немає в наявності',
                    'price'          => 'Ціна',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Назва Товару',
                    'product-number' => 'Номер Товару',
                    'product-type'   => 'Тип Товару',
                    'quantity'       => 'Кількість',
                    'seller-name'    => 'Ім\'я Продавця',
                    'sku'            => 'SKU',
                    'status'         => 'Статус',
                    'total-flags'    => 'Загальна кількість прапорців: :count',
                    'total-quantity' => ':quantity Доступно',
                    'update-status'  => 'Оновити статус',
                    'yes'            => 'Так',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Прапори Продуктів',

                    'datagrid' => [
                        'customer-email' => 'Електронна пошта клієнта',
                        'customer-name'  => 'Ім\'я клієнта',
                        'date'           => 'Дата',
                        'id'             => 'ID',
                        'reason'         => 'Причина',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Деталі відгуку',
                'title'          => 'Відгуки про товари',

                'datagrid' => [
                    'approved'      => 'Затверджено',
                    'comment'       => 'Коментар',
                    'customer-name' => 'Ім\'я Клієнта',
                    'date'          => 'Дата',
                    'disapproved'   => 'Відхилено',
                    'id'            => 'Ідентифікатор',
                    'images'        => 'Зображення',
                    'pending'       => 'Очікує на розгляд',
                    'product'       => 'Товар',
                    'product-name'  => 'Назва Товару',
                    'rating'        => 'Рейтинг',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Назва Магазину',
                    'status'        => 'Статус',
                    'title'         => 'Заголовок',
                    'update-status' => 'Статус оновлення',
                    'view'          => 'Переглянути',
                ],
            ],

            'update-success' => 'Відгуки про продукт успішно оновлено',
            'delete-success' => 'Огляди продуктів успішно видалено.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Відгуки про продавців',

                'datagrid' => [
                    'approved'            => 'Схвалено',
                    'comment'             => 'Коментар',
                    'customer-name'       => 'Ім\'я клієнта',
                    'date'                => 'Дата',
                    'delete'              => 'Видалити',
                    'disapproved'         => 'Відхилено',
                    'id'                  => 'Ідентифікатор',
                    'mass-delete-success' => 'Відгуки про продавців успішно видалені.',
                    'mass-update-success' => 'Відгуки про продавців успішно оновлені.',
                    'pending'             => 'Очікує на розгляд',
                    'rating'              => 'Рейтинг',
                    'review-id'           => 'Ідентифікатор - :review_id',
                    'review-title'        => 'Назва відгуку',
                    'seller-name'         => 'Ім\'я продавця',
                    'shop-title'          => 'Назва магазину',
                    'status'              => 'Статус',
                    'update-status'       => 'Оновити статус',
                ],
            ],

            'delete-success' => 'Відгук про продавця успішно видалено.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Замовлення',

                'datagrid' => [
                    'canceled'        => 'Скасовано',
                    'closed'          => 'Закрито',
                    'commission'      => 'Комісія',
                    'completed'       => 'Завершено',
                    'customer'        => 'Клієнт',
                    'date'            => 'Дата',
                    'discount'        => 'Знижка',
                    'email'           => 'Електронна пошта',
                    'fraud'           => 'Шахрайство',
                    'gross-amt'       => 'Загальна сума',
                    'id'              => 'ID',
                    'items'           => 'Товари',
                    'location'        => 'Місце розташування',
                    'order-id'        => 'ID Замовлення - #:id',
                    'payment'         => 'Оплата',
                    'pending'         => 'В очікуванні',
                    'pending-payment' => 'Очікує оплати',
                    'processing'      => 'Обробка',
                    'seller'          => 'Продавець',
                    'seller-earn'     => 'Заробіток',
                    'shipment'        => 'Відправлення',
                    'shop'            => 'Магазин',
                    'status'          => 'Статус',
                    'view'            => 'Перегляд',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Транзакції',

                'datagrid' => [
                    'base-total'     => 'Базова Сума',
                    'comment'        => 'Коментар',
                    'customer-name'  => 'Ім\'я Клієнта',
                    'id'             => 'Ідентифікатор',
                    'seller-id'      => 'Ідентифікатор Продавця',
                    'seller-name'    => 'Ім\'я Продавця',
                    'transaction-id' => 'Ідентифікатор Транзакції',
                    'view'           => 'Переглянути',
                ],
            ],

            'view' => [
                'commission'        => 'Комісія',
                'created-on'        => 'створено :date,',
                'name'              => 'Ім\'я',
                'payment-method'    => 'Оплата за допомогою :method',
                'price'             => 'Ціна',
                'qty'               => 'Кількість',
                'seller-total'      => 'Сума для Продавця',
                'shipping-handling' => 'Доставка та Обробка',
                'subtotal'          => 'Проміжна Сума',
                'tax'               => 'Податок',
                'title'             => 'Транзакції #:transaction_id',
                'total'             => 'Загальна Сума',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Створити Причину',
                'delete-success'      => 'Причину Прапорця успішно видалено.',
                'mass-delete-success' => 'Причини Прапорців успішно видалено.',
                'mass-update-success' => 'Причини Прапорців успішно оновлено.',
                'title'               => 'Причини Прапорців',

                'datagrid' => [
                    'delete'        => 'Видалити',
                    'edit'          => 'Редагувати',
                    'id'            => 'Ідентифікатор',
                    'name'          => 'Назва',
                    'update-status' => 'Оновити Статус',

                    'status' => [
                        'active'  => 'Активний',
                        'disable' => 'Вимкнено',
                        'title'   => 'Статус',
                    ],

                    'type' => [
                        'product' => 'Продукт',
                        'seller'  => 'Продавець',
                        'title'   => 'Тип',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Адміністратор',
                'back-btn' => 'Назад',
                'general'  => 'Загальні',
                'label'    => 'Мітка',
                'product'  => 'Продукт',
                'save-btn' => 'Зберегти Причину',
                'seller'   => 'Продавець',
                'status'   => 'Статус',
                'title'    => 'Створити Причину',
                'type'     => 'Тип',
            ],

            'edit' => [
                'admin'    => 'Адміністратор',
                'back-btn' => 'Назад',
                'general'  => 'Загальні',
                'label'    => 'Мітка',
                'product'  => 'Продукт',
                'save-btn' => 'Зберегти Причину',
                'seller'   => 'Продавець',
                'status'   => 'Статус',
                'title'    => 'Редагувати Причину',
                'type'     => 'Тип',
            ],

            'create-success' => 'Причину Прапорця успішно створено.',
            'update-success' => 'Причину Прапорця успішно оновлено.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Призначити категорію',
                'create-success' => 'Категорію успішно призначено.',
                'delete-failed'  => 'Видалення категорії не вдалося!',
                'delete-success' => 'Категорію видалено успішно.',
                'title'          => 'Категорії продавців',
                'update-success' => 'Категорію оновлено успішно.',

                'datagrid' => [
                    'delete' => 'Видалити',
                    'edit'   => 'Редагувати',
                    'id'     => 'Ідентифікатор',
                    'name'   => 'Назва',
                ],
            ],

            'create' => [
                'back-btn'      => 'Назад',
                'save-btn'      => 'Зберегти Категорію',
                'select-seller' => 'Виберіть Продавця',
                'seller'        => 'Продавець',
                'title'         => 'Призначити категорію',
            ],

            'edit' => [
                'back-btn'   => 'Назад',
                'seller'     => 'Продавець',
                'title'      => 'Редагувати Категорію',
                'update-btn' => 'Оновити Категорію',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Коментар',
                'no-amount-remaining'  => 'Не залишилося суми для оплати!',
                'order-not-found'      => 'Замовлення не знайдено!',
                'pay-btn'              => 'Оплатити зараз',
                'pay-to-seller'        => 'Оплата Продавцю',
                'payment-success'      => 'Оплата Продавцю успішна!',
                'something-went-wrong' => 'Щось пішло не так!',
                'title'                => 'Запит на Оплату',

                'datagrid' => [
                    'already-paid'          => 'Вже Оплачено',
                    'canceled'              => 'Відмінено',
                    'closed'                => 'Закрито',
                    'completed'             => 'Завершено',
                    'customer-name'         => 'Ім\'я Клієнта',
                    'date'                  => 'Дата',
                    'email'                 => 'Електронна пошта',
                    'fraud'                 => 'Шахрайство',
                    'gross-amt'             => 'Загальна сума',
                    'id'                    => 'Ідентифікатор замовлення',
                    'invoice-pending'       => 'Очікування Рахунку',
                    'order-canceled'        => 'Замовлення Скасовано',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Оплатити',
                    'pending'               => 'В очікуванні',
                    'pending-payment'       => 'Очікує на оплату',
                    'processing'            => 'Обробка',
                    'refunded'              => 'Повернуто',
                    'remaining-total'       => 'Залишкова Сума',
                    'request-payment'       => 'Запит на Оплату',
                    'seller'                => 'Продавець',
                    'seller-total-invoiced' => 'Всього для Продавця',
                    'shop'                  => 'Магазин',
                    'status'                => 'Статус',
                    'total-paid'            => 'Загальна Оплачена Сума',
                    'view'                  => 'Переглянути',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Заблокувати продавця',
                'block-success'        => 'Продавця успішно заблоковано!',
                'chat-history-cleared' => 'Історію чату успішно очищено!',
                'clear-chat-history'   => 'Очистити історію чату',
                'exit'                 => 'Вийти',
                'message-failed'       => 'Не вдалося надіслати повідомлення!',
                'message-sent'         => 'Повідомлення успішно надіслано!',
                'no-message'           => 'Повідомлень не знайдено!',
                'search'               => 'Пошук',
                'search-message'       => 'Шукати повідомлення',
                'seller-blocked'       => 'Ви заблокували цього продавця. Ви не можете надіслати повідомлення цьому продавцю.',
                'sellers'              => 'Продавці',
                'title'                => 'Комунікації',
                'type-message'         => 'Введіть ваше повідомлення тут...',
                'unblock-seller'       => 'Розблокувати продавця',
                'unblock-success'      => 'Продавця успішно розблоковано!',
                'welcome-message'      => 'Ласкаво просимо до комунікацій на Marketplace!',

                'filters' => [
                    'all-messages'      => 'Усі повідомлення',
                    'prev-fifteen-days' => 'Останні 15 днів',
                    'prev-seven-days'   => 'Останні 7 днів',
                    'prev-six-months'   => 'Останні 6 місяців',
                    'prev-thirty-days'  => 'Останні 30 днів',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Джерела Інвентарю',

                'datagrid' => [
                    'active'      => 'Активний',
                    'code'        => 'Код',
                    'id'          => 'ID',
                    'inactive'    => 'Неактивний',
                    'name'        => 'Назва',
                    'seller-name' => 'Ім’я Продавця',
                    'shop-title'  => 'Назва Магазину',
                    'status'      => 'Статус',
                ],

                'view' => [
                    'active'         => 'Активний',
                    'address'        => 'Адреса Джерела',
                    'city'           => 'Місто',
                    'code'           => 'Код',
                    'contact-email'  => 'Електронна пошта',
                    'contact-fax'    => 'Факс',
                    'contact-info'   => 'Контактна Інформація',
                    'contact-name'   => 'Ім’я',
                    'contact-number' => 'Контактний Номер',
                    'country'        => 'Країна',
                    'description'    => 'Опис',
                    'general-info'   => 'Загальна Інформація',
                    'inactive'       => 'Неактивний',
                    'latitude'       => 'Широта',
                    'longitude'      => 'Довгота',
                    'name'           => 'Назва',
                    'postcode'       => 'Поштовий Індекс',
                    'priority'       => 'Пріоритет',
                    'seller-info'    => 'Інформація про Продавця',
                    'seller-name'    => 'Ім’я Продавця',
                    'settings'       => 'Налаштування',
                    'shop-title'     => 'Назва Магазину',
                    'state'          => 'Регіон',
                    'street'         => 'Вулиця',
                    'title'          => 'Джерело Інвентарю #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Встановіть пакет Marketplace.',
            'migrate'     => 'Міграція всіх таблиць у базу даних (це може зайняти деякий час)...',
            'seed'        => 'Вставка даних у базу даних...',
            'publish'     => 'Публікація ресурсів і конфігурацій...',
            'cache'       => 'Очищення кешу...',
            'finish'      => 'Пакет Marketplace успішно встановлено.',
        ],

        'version' => [
            'description' => 'Відображає поточну версію пакету Marketplace.',
            'comment'     => 'Версія Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Шановний/шановна :customer_name',
        'dear-admin'  => 'Шановний/шановна Адміністратор',
        'dear-seller' => 'Шановний продавець',

        'seller' => [
            'registration' => [
                'date'        => 'Дата Реєстрації:',
                'description' => 'Ми раді повідомити вас про нову реєстрацію продавця на нашій платформі. Будь ласка, приділіть хвилину, щоб вітати продавця на нашій платформі.',
                'details'     => 'Ось деталі:',
                'email'       => 'Електронна адреса:',
                'greeting'    => 'Сподіваюся, це повідомлення знайде вас у гарному стані.',
                'name'        => 'Ім\'я Продавця:',
                'shop'        => 'URL Магазину:',
                'subject'     => 'Нова Реєстрація Продавця',
            ],

            'forgot-password' => [
                'description'    => 'Ви отримуєте цей лист, оскільки ми отримали запит на скидання пароля для вашого облікового запису.',
                'greeting'       => 'Забули пароль!',
                'reset-password' => 'Скинути пароль',
                'subject'        => 'Лист із скиданням пароля',
            ],

            'welcome' => [
                'description' => 'Ласкаво просимо на борт! Ми в захваті вас вітати в нашій родині. Ваша присутність як продавця додає велику цінність нашій платформі, і ми очікуємо успішного партнерства.',
                'greeting'    => 'Ласкаво просимо і дякуємо за реєстрацію!',
                'subject'     => 'Повідомлення Про Вітання Продавця',
            ],

            'approval' => [
                'approved'    => 'Ваш запит на статус продавця схвалено.',
                'disapproved' => 'Ваш запит на статус продавця відхилено.',
                'greeting'    => 'Ласкаво просимо і дякуємо за реєстрацію!',
                'subject'     => 'Повідомлення Про Затвердження Продавця',
            ],

            'update' => [
                'description' => 'Ваш профіль успішно оновлено.',
                'greeting'    => 'Сподіваюся, це повідомлення знайде вас у гарному стані.',
                'subject'     => 'Повідомлення Про Оновлення Профілю Продавця',
            ],

            'good-bye' => [
                'description' => 'Працювати з вами було задоволенням, і я щиро вам вдячний за вашу професіоналізм, відданість та високу якість ваших продуктів/послуг. Ваша готовність до забезпечення задоволення клієнтів не залишалася непоміченою, і це було ключовим чинником нашого позитивного досвіду.',
                'greeting'    => 'Сподіваюся, це повідомлення знайде вас у гарному стані.',
                'subject'     => 'Повідомлення Про Прощання Продавця',
            ],

            'product-approval' => [
                'approved'    => 'Ваш товар :name схвалено.',
                'disapproved' => 'Ваш товар :name відхилено.',
                'greeting'    => 'Ласкаво просимо та дякуємо за реєстрацію у нас!',
                'subject'     => 'Сповіщення про Затвердження Товару Продавця',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'У вас нове замовлення :order_id розміщено :created_at',
                    'subject'  => 'Підтвердження нового замовлення',
                    'summary'  => 'Сумарна інформація про замовлення',
                    'title'    => 'Підтвердження замовлення!',
                ],

                'canceled' => [
                    'greeting' => 'Замовлення :order_id було скасовано',
                    'subject'  => 'Підтвердження скасування замовлення',
                    'summary'  => 'Підсумок замовлення',
                    'title'    => 'Замовлення скасовано!',
                ],

                'billing-address'   => 'Адреса для оплати',
                'contact'           => 'Контакт',
                'discount'          => 'Знижка',
                'grand-total'       => 'Загальна сума',
                'name'              => 'Ім\'я',
                'payment'           => 'Оплата',
                'price'             => 'Ціна',
                'qty'               => 'Кількість',
                'shipping'          => 'Доставка',
                'shipping-address'  => 'Адреса доставки',
                'shipping-handling' => 'Доставка та обробка',
                'sku'               => 'Артикул',
                'subtotal'          => 'Підсумок',
                'tax'               => 'Податок',
            ],

            'payment-request' => [
                'greeting'  => 'Сподіваюся, це повідомлення знаходить вас у гарному стані.',
                'paid'      => 'Привіт.. Ви отримали оплату за замовлення :order_id.',
                'requested' => 'Продавець :seller_name звертається із запитом оплати для замовлення :order_id.',
                'subject'   => 'Сповіщення про запит на оплату від продавця',
            ],
        ],

        'contact-seller' => [
            'email'    => 'Електронна пошта:- :email',
            'greeting' => 'Сподіваюся, це повідомлення знайде вас у гарному стані.',
            'info'     => 'Привіт, у :name є питання до вас. Будь ласка, перегляньте деталі нижче.',
            'query'    => 'Запитання: :query',
            'subject'  => 'Повідомлення про контакт з продавцем',
            'topic'    => 'Тема: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Привіт, ":name" повідомив про проблему з товаром ":product_name" продавця ":seller_name". Будь ласка, перегляньте деталі нижче.',
            'greeting'   => 'Сподіваюся, це повідомлення знайде вас у доброму здоров’ї.',
            'reason'     => 'Причина:- :reason',
            'seller-msg' => 'Привіт, ":name" повідомив про проблему з вашим товаром ":product_name". Будь ласка, перегляньте деталі нижче.',
            'subject'    => 'Сповіщення про звіт про товар',
        ],

        'report-seller' => [
            'admin-msg'  => 'Привіт, :name подав скаргу стосовно :seller_name. Будь ласка, перегляньте деталі нижче.',
            'greeting'   => 'Сподіваюся, це повідомлення знайде вас у гарному стані.',
            'reason'     => 'Причина: :reason',
            'seller-msg' => 'Привіт, :name подав скаргу стосовно вас. Будь ласка, перегляньте деталі нижче.',
            'subject'    => 'Повідомлення про звіт продавця',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Створіть обліковий запис продавця Velocity',
            'banner-description'  => 'Velocity може бути чудовою платформою для продажу ваших товарів сучасним підприємствам в Індії. Дотримуючись цих порад, ви зможете досягти успіху як продавець Velocity!',
            'banner-btn-title'    => 'Відкрити Магазин',
            'feature-title'       => 'Чому продавці люблять продавати на Velocity?',
            'feature-description' => 'Продавці люблять платформи з високою швидкістю, оскільки вони пропонують потенціал для збільшення продажів, кращу видимість і ефективний досвід продажів, що сприяє зростанню та успіху бізнесу.',
            'feature-box1-title'  => 'Збільшення Можливостей Продажу',
            'feature-box1-desc'   => 'Продавці цінують платформи з високою швидкістю за потенціал збільшення продажів, кращу видимість та ефективність.',
            'feature-box2-title'  => 'Швидший Оборот',
            'feature-box2-desc'   => 'Продукти швидше продаються на таких платформах, що забезпечує швидкий обіг запасів та дохід.',
            'feature-box3-title'  => 'Покращена Видимість',
            'feature-box3-desc'   => 'Ці платформи забезпечують вищу видимість та експозицію товарів продавця, що збільшує кількість переглядів та потенційних продажів.',
            'feature-box4-title'  => 'Ефективність і Зручність',
            'feature-box4-desc'   => 'Платформи з високою швидкістю мають оптимізовані процеси та інструменти, які роблять продажі більш ефективними, заощаджуючи час і зусилля продавців.',
            'journey-title'       => 'Розпочніть свою подорож з Velocity',
            'journey-description' => 'Почніть продавати великим клієнтам по всьому світу цілодобово.',
            'journey-step1-title' => 'Станьте Продавцем',
            'journey-step1-desc'  => 'Налаштуйте свій магазин із усією базовою інформацією.',
            'journey-step2-title' => 'Список Товарів',
            'journey-step2-desc'  => 'Додайте товари до магазину, щоб клієнти могли їх переглядати та купувати.',
            'journey-step3-title' => 'Отримайте Замовлення',
            'journey-step3-desc'  => 'Отримуйте замовлення від широкого кола клієнтів по всьому світу.',
            'journey-step4-title' => 'Доставка Товару',
            'journey-step4-desc'  => 'Після доставки товару та отримання оплати.',
            'journey-step5-title' => 'Оплата',
            'journey-step5-desc'  => 'Запитуйте оплату та отримуйте її після відрахування комісії.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Пошкоджений товар',
            'damaged-product-sold'      => 'Пошкоджений товар, проданий продавцем',
            'duplicate-product'         => 'Дубль товару',
            'duplicate-product-sold'    => 'Дубль товару, проданий продавцем',
            'missing-product-parts'     => 'Відсутні частини товару',
            'over-price-product'        => 'Товар із завищеною ціною',
            'over-price-product-sold'   => 'Товар із завищеною ціною, проданий продавцем',
            'poor-product-quality'      => 'Погана якість товару',
            'poor-product-quality-sold' => 'Погана якість товару, проданого продавцем',
            'receive-wrong-product'     => 'Отриманий неправильний товар',
            'wrong-product-sold'        => 'Неправильний товар, проданий продавцем',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Завантажити',
                    'export'     => 'Експортувати',
                    'no-records' => 'Нічого експортувати',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Головна сторінка',
                    'logout'     => 'Вийти',
                    'my-profile' => 'Мій профіль',
                    'visit-shop' => 'Відвідати магазин',

                    'mega-search' => [
                        'customers'                      => 'Клієнти',
                        'explore-all-customers'          => 'Досліджуйте всіх клієнтів',
                        'explore-all-matching-customers' => 'Досліджуйте всіх клієнтів, які відповідають “:query” (:count)',
                        'explore-all-matching-orders'    => 'Досліджуйте всі замовлення, які відповідають “:query” (:count)',
                        'explore-all-matching-products'  => 'Досліджуйте всі товари, які відповідають “:query” (:count)',
                        'explore-all-orders'             => 'Досліджуйте всі замовлення',
                        'explore-all-products'           => 'Досліджуйте всі товари',
                        'orders'                         => 'Замовлення',
                        'products'                       => 'Товари',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'Мега Пошук',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Згорнути',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Додати зображення',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Дозволено лише файли зображень (.jpeg, .jpg, .png, ..).',
                ],

                'videos' => [
                    'add-video-btn'     => 'Додати відео',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Дозволено лише відеофайли (.mp4, .mov, .ogg ..).',
                ],

                'documents' => [
                    'add-document-btn'  => 'Додати документ',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Дозволено лише файли документів (:types ..).',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Перед',
                    'next'       => 'Наступний',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Розмір',
                    'text'       => 'Текст',
                    'use-cases'  => 'Випадки використання',
                    'word'       => 'Word',
                    'zoom'       => 'Збільшити',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Бронювання',
            'communication'     => 'Комунікація',
            'customers'         => 'Клієнти',
            'dashboard'         => 'Панель інструментів',
            'extensions'        => 'Розширення',
            'general'           => 'Загальні',
            'inventory-sources' => 'Джерела Інвентарю',
            'manage-profile'    => 'Керування профілем',
            'orders'            => 'Замовлення',
            'product-reviews'   => 'Відгуки про товари',
            'products'          => 'Товари',
            'reporting'         => 'Звіти',
            'roles'             => 'Ролі',
            'sales'             => 'Продажі',
            'seller-reviews'    => 'Відгуки про продавців',
            'settings'          => 'Налаштування',
            'transaction'       => 'Транзакції',
            'users'             => 'Користувачі',
        ],

        'acl' => [
            'assign'            => 'Призначити',
            'bookings'          => 'Бронювання',
            'cancel'            => 'Скасувати',
            'communication'     => 'Спілкування',
            'create'            => 'Створити',
            'customers'         => 'Клієнти',
            'dashboard'         => 'Панель управління',
            'delete'            => 'Видалити',
            'edit'              => 'Редагувати',
            'extensions'        => 'Розширення',
            'general'           => 'Загальні',
            'inventory-sources' => 'Джерела Інвентарю',
            'invoice'           => 'Рахунок',
            'orders'            => 'Замовлення',
            'payment-request'   => 'Запит на оплату',
            'print'             => 'Друк',
            'print-invoice'     => 'Роздрукувати рахунок',
            'product-reviews'   => 'Відгуки про продукти',
            'products'          => 'Продукти',
            'reporting'         => 'Звітування',
            'sales'             => 'Продажі',
            'seller-reviews'    => 'Відгуки продавців',
            'settings'          => 'Налаштування',
            'shipment'          => 'Доставка',
            'transactions'      => 'Транзакції',
            'view'              => 'Перегляд',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Додати новий товар',
            'assign'            => 'Призначити',
            'bookings'          => 'Бронювання',
            'communication'     => 'Комунікація',
            'create'            => 'Створити',
            'customers'         => 'Клієнти',
            'dashboard'         => 'Панель інструментів',
            'edit'              => 'Редагувати',
            'extensions'        => 'Розширення',
            'general'           => 'Загальні',
            'inventory-sources' => 'Джерела Інвентарю',
            'manage-profile'    => 'Керування профілем',
            'orders'            => 'Замовлення',
            'product-reviews'   => 'Відгуки про товари',
            'products'          => 'Товари',
            'reporting'         => 'Звіти',
            'roles'             => 'Ролі',
            'sales'             => 'Продажі',
            'seller-reviews'    => 'Відгуки про продавців',
            'settings'          => 'Налаштування',
            'title'             => 'Профіль',
            'transaction'       => 'Транзакції',
            'users'             => 'Користувачі',
            'view'              => 'Перегляд',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Увійти',
            'create-your-account' => 'Створити свій обліковий запис',
            'email'               => 'Електронна пошта',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (зареєстрована в Індії). Всі права захищені.',
            'forgot-pass'         => 'Забули пароль?',
            'form-login-text'     => 'Якщо у вас є обліковий запис, увійдіть за допомогою своєї електронної адреси.',
            'invalid-credentials' => 'Перевірте свої дані та спробуйте знову.',
            'new-seller'          => 'Новий продавець?',
            'not-approved'        => 'Ваша активація очікує на затвердження від адміністратора',
            'page-title'          => 'Вхід продавця',
            'password'            => 'Пароль',
            'show-password'       => 'Показати пароль',
            'suspended-message'   => 'Ваш акаунт призупинено. Зверніться до адміністратора для отримання додаткової інформації.',
            'title'               => 'Увійти',
        ],

        'signup' => [
            'account-exists'   => 'Вже є обліковий запис?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Зареєструватися',
            'confirm-pass'     => 'Підтвердіть пароль',
            'email'            => 'Електронна пошта',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (зареєстрована в Індії). Всі права захищені.',
            'form-signup-text' => 'Якщо ви новачок в нашому магазині, ми раді вас вітати як учасника.',
            'name'             => 'Ім\'я',
            'page-title'       => 'Стати продавцем',
            'password'         => 'Пароль',
            'sign-in-button'   => 'Увійти',
            'success'          => 'Обліковий запис успішно створено.',
            'url'              => 'URL магазину',
        ],

        'forgot-password' => [
            'already-sent'         => 'Ми вже надіслали посилання для скидання пароля на вашу електронну адресу.',
            'back'                 => 'Повернутися до входу?',
            'bagisto'              => 'Bagisto',
            'email'                => 'Електронна пошта',
            'email-not-exist'      => 'Ми не можемо знайти користувача з такою адресою електронної пошти.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (зареєстрована в Індії). Всі права захищені.',
            'forgot-password-text' => 'Якщо ви забули пароль, відновіть його, введенням своєї адреси електронної пошти.',
            'page-title'           => 'Забули свій пароль?',
            'reset-link-sent'      => 'Ми відправили вам ланку для скидання пароля на електронну пошту.',
            'sign-in-button'       => 'Увійти',
            'submit'               => 'Скинути пароль',
            'title'                => 'Відновлення паролю',
        ],

        'reset-password' => [
            'back-link-title'  => 'Повернутися до входу',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Підтвердіть пароль',
            'email'            => 'Зареєстрована електронна пошта',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (зареєстрована в Індії). Всі права захищені.',
            'password'         => 'Пароль',
            'submit-btn-title' => 'Скинути пароль',
            'title'            => 'Скидання пароля',
        ],

        'dashboard' => [
            'add-product'           => 'Додати продукт',
            'avg-order-sell'        => 'Середній обсяг замовлення',
            'category-info'         => 'Категорії не знайдені за вибраний період',
            'complete-profile-link' => 'Заповніть свій профіль &rarr;',
            'completed-orders'      => 'Завершено (:count)',
            'customer-info'         => 'Клієнти не знайдені за вибраний період',
            'date-range'            => 'Діапазон дат',
            'empty-threshold'       => 'Поріг порожній',
            'empty-threshold-desc'  => 'Немає доступних продуктів',
            'end-date'              => 'Дата закінчення',
            'hi-comment'            => 'Швидкий огляд подій у вашому магазині.',
            'hi-seller'             => 'Привіт! :seller_name',
            'month'                 => 'Цей місяць',
            'no-category'           => 'Немає доступних даних',
            'no-customer'           => 'Немає доступних даних',
            'no-record-available'   => 'Немає доступних записів.',
            'order-count'           => ':total Замовлень',
            'overall-details'       => 'Загальні деталі',
            'pending-orders'        => 'На розгляді (:count)',
            'per-unit'              => ':price/Одиниця',
            'processing-orders'     => 'Обробляється (:count)',
            'product-info'          => 'Додавайте пов\'язані продукти на ходу',
            'profile-score'         => 'Оцінка профілю',
            'profile-score-desc'    => 'Максимізуйте свою видимість, підтримуючи повну інформацію профілю.',
            'qty-stock'             => ':qty на складі',
            'refunded-orders'       => 'Повернено (:count)',
            'remaining-payout'      => 'Залишкова виплата',
            'start-date'            => 'Дата початку',
            'stock-threshold'       => 'Поріг запасів',
            'title'                 => 'Панель інструментів',
            'today'                 => 'Сьогодні',
            'top-categories'        => 'Топ категорії',
            'top-customers'         => 'Клієнт з найбільшою кількістю продажів',
            'top-products'          => 'Найпопулярніші товари',
            'total-customers'       => 'Загальна кількість клієнтів',
            'total-orders'          => 'Загальна кількість замовлень',
            'total-payout'          => 'Загальна виплата',
            'total-sale'            => 'Загальна продаж: :total',
            'total-sales'           => 'Загальний оборот',
            'view-all-btn'          => 'Переглянути все',
            'visitor-count'         => 'Відвідувачі - :count',
            'week'                  => 'Цей тиждень',
            'year'                  => 'Цей рік',
        ],

        'orders' => [
            'index' => [
                'title' => 'Замовлення',

                'datagrid' => [
                    'canceled'        => 'Скасовано',
                    'closed'          => 'Закрито',
                    'commission'      => 'Комісія',
                    'completed'       => 'Завершено',
                    'customer'        => 'Клієнт',
                    'date'            => 'Дата',
                    'discount'        => 'Знижка',
                    'email'           => 'Електронна пошта',
                    'fraud'           => 'Шахрайство',
                    'gross-amt'       => 'Загальна сума',
                    'id'              => 'Ідентифікатор',
                    'invoice-pending' => 'Виставлення рахунка в очікуванні',
                    'items'           => 'Товари',
                    'location'        => 'Місце розташування',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Сплачено',
                    'payment'         => 'Оплата',
                    'payment-request' => 'Запит на оплату',
                    'pending'         => 'Очікує',
                    'pending-payment' => 'Очікує оплати',
                    'processing'      => 'Обробка',
                    'refunded'        => 'Повернено',
                    'requested'       => 'Запитано',
                    'seller-earn'     => 'Дохід продавця',
                    'shipment'        => 'Доставка',
                    'status'          => 'Статус',
                    'transaction'     => 'Транзакція',
                    'view'            => 'Перегляд',
                ],

                'payment-req-success'  => 'Ваш запит на оплату успішно подано',
                'something-went-wrong' => 'Щось пішло не так!',
            ],

            'view' => [
                'admin-commission'           => 'Комісія адміністратора',
                'billing-address'            => 'Платіжна адреса',
                'by-customer'                => 'Клієнт: :name',
                'cancel-btn'                 => 'Скасувати',
                'cancel-confirm-msg'         => 'Ви впевнені, що хочете скасувати це замовлення?',
                'cancel-error-msg'           => 'Замовлення не може бути скасовано',
                'cancel-success-msg'         => 'Замовлення скасовано',
                'canceled'                   => 'Скасовано',
                'closed'                     => 'Закрито',
                'completed'                  => 'Завершено',
                'discount'                   => 'Знижка',
                'fraud'                      => 'Шахрайство',
                'grand-total'                => 'Загальна сума',
                'info'                       => 'Інформація',
                'item-canceled'              => 'Скасовано (:qty_canceled)',
                'item-invoice'               => 'Виставлено рахунків (:qty_invoiced)',
                'item-ordered'               => 'Замовлено (:qty_ordered)',
                'item-refunded'              => 'Повернено (:qty_refunded)',
                'item-shipped'               => 'Відправлено (:qty_shipped)',
                'item-status'                => 'Статус товару',
                'payment-method'             => 'Спосіб оплати',
                'pending'                    => 'Очікує',
                'pending_payment'            => 'Очікує оплати',
                'permission-error'           => 'У вас немає дозволу на скасування замовлення',
                'place-on'                   => 'Дата замовлення: :date',
                'price'                      => 'Ціна',
                'price-excl-tax'             => 'Ціна (без ПДВ)',
                'price-incl-tax'             => 'Ціна (з ПДВ)',
                'processing'                 => 'Обробка',
                'product'                    => 'Продукт',
                'shipping-address'           => 'Адреса доставки',
                'shipping-handling'          => 'Доставка та обробка',
                'shipping-method'            => 'Спосіб доставки',
                'shipping-handling-excl-tax' => 'Доставка та обробка (без податку)',
                'shipping-handling-incl-tax' => 'Доставка та обробка (з податком)',
                'sub-total-excl-tax'         => 'Проміжний підсумок (без податку)',
                'sub-total-incl-tax'         => 'Проміжний підсумок (з податком)',
                'sku'                        => 'Артикул - :sku',
                'sub-total'                  => 'Підсумок',
                'tax'                        => 'Податок',
                'tax-amount'                 => 'Сума податку',
                'tax-percent'                => 'Відсоток податку',
                'title'                      => 'Замовлення #:order_id',
                'total'                      => 'Всього',
                'total-due'                  => 'Загальна сума до оплати',
                'total-paid'                 => 'Сплачено всього',
                'total-refunded'             => 'Всього повернено',
                'total-seller-amt'           => 'Загальна сума для продавця',

                'invoices' => [
                    'bank-details'               => 'Банківські реквізити',
                    'bill-to'                    => 'Рахунок для',
                    'contact'                    => 'Контакт',
                    'contact-number'             => 'Контактний номер',
                    'created-on'                 => 'створено: :date_time',
                    'date'                       => 'Дата рахунку',
                    'discount'                   => 'Знижка',
                    'excl-tax'                   => 'Без ПДВ:',
                    'grand-total'                => 'Загальна сума',
                    'individual-invoice'         => 'Рахунок #:invoice_id',
                    'invoice'                    => 'Рахунок',
                    'invoice-id'                 => 'ID рахунку',
                    'name'                       => 'Ім\'я',
                    'order-date'                 => 'Дата замовлення',
                    'order-id'                   => 'ID замовлення',
                    'payment-method'             => 'Спосіб оплати',
                    'payment-terms'              => 'Умови оплати',
                    'price'                      => 'Ціна',
                    'print'                      => 'Друк',
                    'product-name'               => 'Назва продукту',
                    'qty'                        => 'Кількість',
                    'ship-to'                    => 'Доставка до',
                    'shipping-handling'          => 'Доставка та обробка',
                    'shipping-handling-excl-tax' => 'Доставка та обробка (без ПДВ)',
                    'shipping-handling-incl-tax' => 'Доставка та обробка (з ПДВ)',
                    'shipping-method'            => 'Спосіб доставки',
                    'sku'                        => 'Артикул - :sku',
                    'subtotal'                   => 'Проміжна сума',
                    'sub-total-excl-tax'         => 'Проміжна сума (без ПДВ)',
                    'sub-total-incl-tax'         => 'Проміжна сума (з ПДВ)',
                    'tax'                        => 'Податок',
                    'tax-amount'                 => 'Сума податку',
                    'title'                      => 'Рахунки',
                    'vat-number'                 => 'Номер ПДВ',
                ],

                'shipments' => [
                    'carrier-title'       => 'Назва перевізника',
                    'created-on'          => 'створено :date_time',
                    'individual-shipment' => 'Відвантаження #:track_number',
                    'inventory-source'    => 'Джерело інвентаризації',
                    'name'                => 'Ім\'я',
                    'qty'                 => 'Кількість',
                    'sku'                 => 'Артикул - :sku',
                    'title'               => 'Відвантаження',
                    'tracking-number'     => 'Номер відстеження',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Сбор за корректировку',
                    'adjustment-refund'          => 'Возврат корректировки',
                    'created-on'                 => 'створено :date_time',
                    'discount'                   => 'Скидка',
                    'grand-total'                => 'Общая сумма',
                    'individual-refund'          => 'Возврат #:refund_id',
                    'no-result-found'            => 'Мы не смогли найти записей.',
                    'price'                      => 'Цена',
                    'product-name'               => 'Название',
                    'qty'                        => 'Количество',
                    'shipping-handling'          => 'Доставка и обработка',
                    'shipping-handling-excl-tax' => 'Доставка та обробка (без податку)',
                    'shipping-handling-incl-tax' => 'Доставка та обробка (з податком)',
                    'sku'                        => 'Артикул - :sku',
                    'sub-total-excl-tax'         => 'Проміжний підсумок (без податку)',
                    'sub-total-incl-tax'         => 'Проміжний підсумок (з податком)',
                    'subtotal'                   => 'Промежуточный итог',
                    'tax'                        => 'Налог',
                    'tax-amount'                 => 'Сумма налога',
                    'title'                      => 'Возвраты',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Рахунок',
                'invoice-success'  => 'Рахунок створено успішно',
                'permission-error' => 'У вас немає дозволу створювати рахунок за замовленням',
                'price'            => 'Ціна',
                'product-name'     => 'Назва Продукту',
                'qty'              => 'Кількість',
                'qty-error'        => 'Запитана кількість недоступна',
                'sub-total'        => 'Рахунок <br> Підсумок',
                'title'            => 'Створити Рахунок',
                'total'            => 'Всього',
            ],

            'shipments' => [
                'avl-qty'          => 'Доступно- :qty Кількість',
                'carrier-title'    => 'Назва Перевізника',
                'create-btn'       => 'Відвантажити',
                'ordered-qty'      => 'Замовлено Кількість',
                'permission-error' => 'У вас немає дозволу створювати відвантаження',
                'product-name'     => 'Назва Продукту',
                'qty'              => 'Кількість',
                'qty-error'        => 'Запитана кількість недоступна',
                'shipment-success' => 'Відвантаження створено успішно',
                'shipped-qty'      => 'Відвантажено Кількість',
                'sku'              => 'Артикул - :sku',
                'source'           => 'Джерело Замовленого Продукту',
                'title'            => 'Створити Відвантаження',
                'tracking-id'      => 'Ідентифікатор Відстеження',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Дата створення',
                    'from'         => 'З',
                    'id'           => 'ID',
                    'order-id'     => 'Номер замовлення',
                    'qty'          => 'Кількість',
                    'to'           => 'До',
                    'view'         => 'Перегляд',
                ],

                'title'    => 'Бронювання',
            ],

            'calendar' => [
                'booking-date'     => 'Дата бронювання',
                'booking-details'  => 'Деталі бронювання',
                'canceled'         => 'Скасовано',
                'closed'           => 'Закрито',
                'done'             => 'Виконано',
                'order-id'         => 'Номер замовлення',
                'pending'          => 'В очікуванні',
                'price'            => 'Ціна',
                'status'           => 'Статус',
                'time-slot'        => 'Часовий слот:',
                'view-details'     => 'Переглянути деталі',
            ],

            'title' => 'Продукт бронювання',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Залишкова виплата',
                'title'                  => 'Транзакції',
                'total-payout'           => 'Загальна виплата',
                'total-seller-sale'      => 'Загальний продаж (Продавець)',
                'total-admin-commission' => 'Загальна комісія (Адміністратор)',
                'total-sale-invoiced'    => 'Загальний продаж (Виставлено рахунок)',

                'datagrid' => [
                    'comment'        => 'Коментар',
                    'id'             => 'Ідентифікатор',
                    'total'          => 'Загальний',
                    'transaction-id' => 'Ідентифікатор Транзакції',
                ],
            ],

            'view' => [
                'commission'        => 'Комісія',
                'created-on'        => 'створено :date,',
                'date'              => 'Дата',
                'id'                => 'Ідентифікатор Транзакції',
                'method'            => 'Метод',
                'name'              => 'Ім\'я',
                'payment-method'    => 'Оплата за допомогою :method',
                'price'             => 'Ціна',
                'print'             => 'Друк',
                'qty'               => 'Кількість',
                'seller-total'      => 'Загальна сума для Продавця',
                'shipping-handling' => 'Доставка та обробка',
                'subtotal'          => 'Проміжний підсумок',
                'tax'               => 'Податок',
                'title'             => 'Транзакція',
                'total'             => 'Разом',
                'transaction-id'    => '№ транзакції: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Додати новий товар',
                'title'           => 'Товари',

                'datagrid' => [
                    'active'         => 'Активний',
                    'approved'       => 'Схвалено',
                    'category'       => 'категорія',
                    'delete'         => 'Видалити',
                    'disable'        => 'Вимкнено',
                    'disapproved'    => 'Непогоджений',
                    'edit'           => 'Редагувати',
                    'id'             => 'ID',
                    'image'          => 'Зображення',
                    'is-approved'    => 'Схвалено',
                    'name'           => 'Назва',
                    'out-of-stock'   => 'Немає в наявності',
                    'price'          => 'Ціна',
                    'product-number' => 'Номер Товару',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'Артикул',
                    'status'         => 'статус',
                    'stock'          => 'Запас',
                    'total-quantity' => ':quantity Доступно',
                    'type'           => 'Тип',
                ],
            ],

            'create' => [
                'attribute-family'          => "Сім'я атрибутів",
                'back'                      => 'Назад',
                'continue'                  => 'Продовжити',
                'create-new-product'        => 'Створити нові товари',
                'create-your-new-product'   => 'Якщо товару не існує, створіть свій новий товар',
                'disable-product-message'   => 'Адміністратор відключив функціональність створення або призначення продуктів.',
                'image-placeholder'         => 'Ваше зображення',
                'no-result'                 => 'Немає результатів',
                'not-allowed'               => 'Вам не дозволено створювати продукт',
                'or'                        => 'Або',
                'product-type'              => 'Тип товару',
                'search-product'            => 'Пошук товарів',
                'sell-admin-product-prices' => 'Продавайте товари адміністратора за своїми цінами.',
                'sell-as-yours'             => 'Продати як свій',
                'sku'                       => 'Артикул (SKU)',
                'sub-title'                 => 'Ви можете додати товар двома способами: або з адміністративного продукту, або створити власний.',
                'title'                     => 'Додати новий товар',
                'update-profile'            => 'Будь ласка, оновіть дані свого профілю',
            ],

            'edit' => [
                'back-btn'      => 'Назад',
                'preview'       => 'Попередній перегляд',
                'remove'        => 'Видалити',
                'save-btn'      => 'Зберегти товар',
                'title'         => 'Редагувати товар',
                'channels'      => 'Канали',
                'progress-info' => 'Підвищте привабливість вашого продукту та залиште незабутнє враження на клієнтів, переконавшись, що всі деталі продукту є повними та точними!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Додати ціну для групи',
                        'all-groups'                => 'Всі групи',
                        'create-btn'                => 'Додати новий',
                        'discount-group-price-info' => 'Для :qty штук зі знижкою :price',
                        'edit-btn'                  => 'Редагувати',
                        'empty-info'                => 'Спеціальні ціни для покупців, які належать до певної групи.',
                        'fixed-group-price-info'    => 'Для :qty штук за фіксованою ціною :price',
                        'title'                     => 'Ціни для груп покупців',

                        'create' => [
                            'all-groups'     => 'Всі групи',
                            'create-title'   => 'Створити ціну для групи покупців',
                            'customer-group' => 'Група покупців',
                            'delete-btn'     => 'Видалити',
                            'discount'       => 'Знижка',
                            'fixed'          => 'Фіксована',
                            'price'          => 'Ціна',
                            'price-type'     => 'Тип ціни',
                            'qty'            => 'Кількість',
                            'save-btn'       => 'Зберегти',
                            'update-title'   => 'Оновити ціну для групи покупців',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Очікувана кількість замовлення: :qty',
                    'pending-ordered-qty-info' => 'Після відвантаження, очікувана кількість замовлення буде списана з відповідного джерела інвентаризації. У разі скасування, очікувана кількість стане доступною для продажу.',
                    'title'                    => 'Інвентаризація',
                ],

                'categories' => [
                    'title' => 'Категорії',
                ],

                'images' => [
                    'info'  => 'Роздільна здатність зображення повинна бути приблизно 609px X 560px',
                    'title' => 'Зображення',
                ],

                'videos' => [
                    'error' => 'Відео не може бути більше ніж :max кілобайт. Будь ласка, виберіть менший файл.',
                    'info'  => 'Максимальний розмір відео повинен бути приблизно :size',
                    'title' => 'Відео',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Додайте пов\'язані продукти в дорозі.',
                        'info'       => 'Покупцеві, який переглядає товар, також пропонуються пов’язані товари.',
                        'title'      => 'Пов’язані товари',
                    ],

                    'up-sells' => [
                        'empty-info' => ' Додайте додаткові товари для продажу в дорозі.',
                        'info'       => 'Покупцю пропонують товари для збільшення продажів, які є преміум або вищої якості, ніж товар, який він переглядає.',
                        'title'      => 'Товари для збільшення продажів',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Додайте товари з перекреслого продажу в дорозі.',
                        'info'       => 'Поруч із кошиком, ви знайдете ці "імпульсні" товари, розташовані як перекресні продажі, щоб доповнити товари, які вже додані до вашого кошика.',
                        'title'      => 'Товари для перекресних продажів',
                    ],

                    'add-btn'           => 'Додати товар',
                    'delete'            => 'Видалити',
                    'empty-info'        => 'Додати товари типу :type на ходу.',
                    'empty-title'       => 'Додати товар',
                    'image-placeholder' => 'Зображення товару',
                    'sku'               => 'Артикул - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Додати опцію',
                            'empty-info'        => 'Для створення налаштовуваних опцій швидко.',
                            'empty-title'       => 'Додати опцію',
                            'info'              => 'Це дозволить налаштувати простий продукт.',
                            'title'             => 'Налаштовуваний елемент',

                            'update-create' => [
                                'is-required'               => 'Необхідно',
                                'max-characters'            => 'Максимальна кількість символів',
                                'name'                      => 'Назва',
                                'no'                        => 'Ні',
                                'price'                     => 'Ціна',
                                'save-btn'                  => 'Зберегти',
                                'supported-file-extensions' => 'Підтримувані розширення файлів',
                                'title'                     => 'Опція',
                                'type'                      => 'Тип',
                                'yes'                       => 'Так',
                            ],

                            'option' => [
                                'add-btn'     => 'Додати опцію',
                                'delete'      => 'Видалити',
                                'delete-btn'  => 'Видалити',
                                'edit-btn'    => 'Редагувати',
                                'empty-info'  => 'Для створення різних комбінацій продуктів.',
                                'empty-title' => 'Додати опцію',

                                'types' => [
                                    'text' => [
                                        'title' => 'Текст',
                                    ],

                                    'textarea' => [
                                        'title' => 'Текстова область',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Чекбокс',
                                    ],

                                    'radio' => [
                                        'title' => 'Радіо',
                                    ],

                                    'select' => [
                                        'title' => 'Вибір',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Мультивибір',
                                    ],

                                    'date' => [
                                        'title' => 'Дата',
                                    ],

                                    'datetime' => [
                                        'title' => 'Дата і час',
                                    ],

                                    'time' => [
                                        'title' => 'Час',
                                    ],

                                    'file' => [
                                        'title' => 'Файл',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Мітка',
                                        'price'    => 'Ціна',
                                        'save-btn' => 'Зберегти',
                                        'title'    => 'Опція',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Цей продукт вже асоційований з іншим налаштовуваним продуктом.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Додати варіант',
                        'delete-btn'        => 'Видалити',
                        'edit-btn'          => 'Редагувати',
                        'empty-info'        => 'Створити різні комбінації товару на ходу.',
                        'empty-title'       => 'Додати варіант',
                        'image-placeholder' => 'Зображення товару',
                        'info'              => 'Варіаційні товари залежать від всіх можливих комбінацій атрибутів.',
                        'qty'               => ':qty шт.',
                        'sku'               => 'Артикул - :sku',
                        'title'             => 'Варіації',

                        'create' => [
                            'description'            => 'Опис',
                            'name'                   => 'Назва',
                            'save-btn'               => 'Додати',
                            'title'                  => 'Додати варіант',
                            'variant-already-exists' => 'Цей варіант вже існує',
                        ],

                        'edit' => [
                            'disabled'        => 'Вимкнено',
                            'edit-info'       => 'Якщо ви хочете оновити інформацію про товар докладніше, перейдіть на сторінку',
                            'edit-link-title' => 'Сторінка деталей товару',
                            'enabled'         => 'Увімкнено',
                            'images'          => 'Зображення',
                            'name'            => 'Назва',
                            'price'           => 'Ціна',
                            'quantities'      => 'Кількість',
                            'save-btn'        => 'Зберегти',
                            'sku'             => 'Артикул',
                            'status'          => 'Статус',
                            'title'           => 'Товар',
                            'weight'          => 'Вага',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Додати зображення',
                            'apply-to-all-btn'    => 'Застосувати до всіх',
                            'apply-to-all-sku'    => 'Застосувати ціну до всіх SKU.',
                            'edit-inventories'    => 'Редагувати запаси',
                            'edit-prices'         => 'Редагувати ціни',
                            'price'               => 'Ціна',
                            'remove-images'       => 'Видалити зображення',
                            'remove-variants'     => 'Видалити варіанти',
                            'select-action'       => 'Виберіть дію',
                            'select-variants'     => 'Виберіть варіанти',
                            'edit-name'           => 'Редагувати назву',
                            'name'                => 'Назва',
                            'edit-sku'            => 'Редагувати SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Редагувати вагу',
                            'weight'              => 'Вага',
                            'edit-status'         => 'Редагувати статус',
                            'status'              => 'Статус',
                            'apply-to-all-name'   => 'Застосувати назву до всіх варіантів.',
                            'apply-to-all-weight' => 'Застосувати вагу до всіх варіантів.',
                            'apply-to-all-status' => 'Застосувати статус до всіх варіантів.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Додати товар',
                        'default-qty'       => 'Кількість за замовчуванням',
                        'delete'            => 'Видалити',
                        'empty-info'        => 'Створити різні комбінації товару на ходу.',
                        'empty-title'       => 'Додати товар',
                        'image-placeholder' => 'Зображення товару',
                        'info'              => 'Груповий товар включає самостійні товари, представлені як набір, що дозволяє варіювати або координувати за сезоном або темою. Кожен товар можна купити окремо або в комплекті.',
                        'sku'               => 'Артикул - :sku',
                        'title'             => 'Групові товари',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Додати опцію',
                        'empty-info'        => 'Створити опції пакету на ходу.',
                        'empty-title'       => 'Додати опцію',
                        'image-placeholder' => 'Зображення товару',
                        'info'              => 'Пакетний товар - це пакет декількох товарів або послуг, продаваних разом за спеціальною ціною, що надає вартість і зручність покупцям.',
                        'title'             => 'Елементи пакету',

                        'update-create' => [
                            'checkbox'    => 'Прапорець',
                            'is-required' => 'Обов’язково',
                            'multiselect' => 'Мультиселект',
                            'name'        => 'Назва',
                            'no'          => 'Ні',
                            'radio'       => 'Радіо',
                            'save-btn'    => 'Зберегти',
                            'select'      => 'Вибір',
                            'title'       => 'Опція',
                            'type'        => 'Тип',
                            'yes'         => 'Так',
                        ],

                        'option' => [
                            'add-btn'     => 'Додати товар',
                            'default-qty' => 'Кількість за замовчуванням',
                            'delete'      => 'Видалити',
                            'delete-btn'  => 'Видалити',
                            'edit-btn'    => 'Редагувати',
                            'empty-info'  => 'Створити різні комбінації товару на ходу.',
                            'empty-title' => 'Додати товар',
                            'sku'         => 'Артикул - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Встановити товар за замовчуванням за допомогою прапорця',
                                    'title' => 'Прапорець',
                                ],

                                'multiselect' => [
                                    'info'  => 'Встановити товар за замовчуванням за допомогою кнопки прапорця',
                                    'title' => 'Мультиселект',
                                ],

                                'radio' => [
                                    'info'  => 'Встановити товар за замовчуванням за допомогою кнопки радіо',
                                    'title' => 'Радіо',
                                ],

                                'select' => [
                                    'info'  => 'Встановити товар за замовчуванням за допомогою вибіркової кнопки',
                                    'title' => 'Вибір',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Доступно з',
                        'available-to'   => 'Доступно до',
                        'location'       => 'Місцезнаходження',
                        'qty'            => 'Кількість',
                        'title'          => 'Тип бронювання',

                        'available-every-week' => [
                            'no'    => 'Ні',
                            'title' => 'Доступно щотижня',
                            'yes'   => 'Так',
                        ],

                        'appointment' => [
                            'break-duration' => 'Час перерви між слотами (хв)',
                            'slot-duration'  => 'Тривалість слота (хв)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Ні',
                                'title' => 'Один і той самий слот для всіх днів',
                                'yes'   => 'Так',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Додати',
                            'break-duration'   => 'Час перерви між слотами (хв)',
                            'close'            => 'Закрити',
                            'description'      => 'Інформація про бронювання',
                            'description-info' => 'Тривалість часу буде створена і відображена відповідно до слотів. Вона буде унікальною для всіх слотів і видимою на вітрині магазину',
                            'edit'             => 'Редагувати',
                            'many'             => 'Багато бронювань на один день',
                            'one'              => 'Одне бронювання на багато днів',
                            'open'             => 'Відкрити',
                            'slot-add'         => 'Додати слоти',
                            'slot-duration'    => 'Тривалість слота (хв)',
                            'slot-title'       => 'Тривалість часу слотів',
                            'title'            => 'За замовчуванням',
                            'unavailable'      => 'Недоступно',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Додати слоти',
                                    'close'      => 'Закрити',
                                    'day'        => 'День',
                                    'edit-title' => 'Редагувати слоти',
                                    'friday'     => 'П\'ятниця',
                                    'from'       => 'З',
                                    'from-day'   => 'З дня',
                                    'from-time'  => 'З часу',
                                    'monday'     => 'Понеділок',
                                    'open'       => 'Відкрити',
                                    'saturday'   => 'Субота',
                                    'save'       => 'Зберегти',
                                    'select'     => 'Вибрати',
                                    'status'     => 'Статус',
                                    'sunday'     => 'Неділя',
                                    'thursday'   => 'Четвер',
                                    'to'         => 'До',
                                    'to-day'     => 'До дня',
                                    'to-time'    => 'До часу',
                                    'tuesday'    => 'Вівторок',
                                    'wednesday'  => 'Середа',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Додати квитки',
                            'delete'             => 'Видалити',
                            'description'        => 'Опис',
                            'description-info'   => 'Квитки недоступні.',
                            'edit'               => 'Редагувати',
                            'name'               => 'Назва',
                            'price'              => 'Ціна',
                            'qty'                => 'Кількість',
                            'special-price'      => 'Спеціальна ціна',
                            'special-price-from' => 'Спеціальна ціна з',
                            'special-price-to'   => 'Спеціальна ціна до',
                            'title'              => 'Квитки',
                            'valid-from'         => 'Дійсно з',
                            'valid-until'        => 'Дійсно до',

                            'modal'              => [
                                'edit' => 'Редагувати квитки',
                                'save' => 'Зберегти',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Додати квитки',
                            ],

                            'slots'   => [
                                'add'         => 'Додати слоти',
                                'description' => 'Доступні слоти з тривалістю часу.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Щоденна основа',
                            'daily-hourly'           => 'Обидва (щоденна та погодинна основа)',
                            'daily-price'            => 'Щоденна ціна',
                            'hourly'                 => 'Погодинна основа',
                            'hourly-price'           => 'Погодинна ціна',
                            'title'                  => 'Тип оренди',

                            'same-slot-for-all-days' => [
                                'no'    => 'Ні',
                                'title' => 'Один і той самий слот для всіх днів',
                                'yes'   => 'Так',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Додати слоти',
                            'description-info' => 'Тривалість часу буде створена і відображена відповідно до слотів. Вона буде унікальною для всіх слотів і видимою на вітрині магазину',
                            'save'             => 'Зберегти',
                            'title'            => 'Тривалість часу слотів',
                            'unavailable'      => 'Недоступно',

                            'action'           => [
                                'add' => 'Додати',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'П\'ятниця',
                                    'from'       => 'З',
                                    'monday'     => 'Понеділок',
                                    'saturday'   => 'Субота',
                                    'sunday'     => 'Неділя',
                                    'thursday'   => 'Четвер',
                                    'to'         => 'До',
                                    'tuesday'    => 'Вівторок',
                                    'wednesday'  => 'Середа',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Час перерви між слотами (хв)',
                            'guest-capacity'            => 'Місткість гостей',
                            'guest-limit'               => 'Ліміт гостей за столом',
                            'prevent-scheduling-before' => 'Запобігти плануванню до',
                            'slot-duration'             => 'Тривалість слота (хв)',

                            'charged-per'               => [
                                'guest'  => 'Гість',
                                'table'  => 'Стіл',
                                'title'  => 'Заряджено за',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Ні',
                                'title' => 'Один і той самий слот для всіх днів',
                                'yes'   => 'Так',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Бронювання зустрічі',
                            'default'     => 'Бронювання за замовчуванням',
                            'event'       => 'Бронювання події',
                            'many'        => 'Багато',
                            'one'         => 'Один',
                            'rental'      => 'Бронювання оренди',
                            'table'       => 'Бронювання столу',
                            'title'       => 'Тип',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Додати посилання',
                            'delete-btn'  => 'Видалити',
                            'edit-btn'    => 'Редагувати',
                            'empty-info'  => 'Створити посилання на ходу.',
                            'empty-title' => 'Додати посилання',
                            'file'        => 'Файл : ',
                            'info'        => 'Тип продукту для завантаження дозволяє продавати цифрові товари, такі як електронні книги, програми, музику, ігри тощо.',
                            'sample-file' => 'Зразок файлу : ',
                            'sample-url'  => 'Зразок URL : ',
                            'title'       => 'Посилання для завантаження',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'Завантаження дозволено',
                                'file'        => 'Файл',
                                'file-type'   => 'Тип файлу',
                                'name'        => 'Заголовок',
                                'price'       => 'Ціна',
                                'sample'      => 'Зразок',
                                'sample-type' => 'Тип зразка',
                                'save-btn'    => 'Зберегти',
                                'title'       => 'Посилання',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Додати зразок',
                            'delete-btn'  => 'Видалити',
                            'edit-btn'    => 'Редагувати',
                            'empty-info'  => 'Створити зразок на ходу.',
                            'empty-title' => 'Додати зразок',
                            'file'        => 'Файл : ',
                            'info'        => 'Тип продукту для завантаження дозволяє продавати цифрові товари, такі як електронні книги, програми, музику, ігри тощо.',
                            'title'       => 'Зразки для завантаження',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'Файл',
                                'file-type' => 'Тип файлу',
                                'name'      => 'Заголовок',
                                'save-btn'  => 'Зберегти',
                                'title'     => 'Посилання',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Товар успішно створений',
            'delete-failed'            => 'Не вдалося видалити товар',
            'delete-success'           => 'Товар успішно видалений',
            'product-type-not-allowed' => 'Вам не дозволено продавати товар типу :type',
            'saved-inventory-message'  => 'Товар успішно збережено',
            'update-success'           => 'Товар успішно оновлено',

            'assign' => [
                'already-selling'     => 'Ви вже продаєте цей продукт',
                'back-btn'            => 'Назад',
                'condition'           => 'Стан',
                'create-success'      => 'Продукт успішно призначено продавцеві',
                'description'         => 'Опис',
                'image-size'          => 'Роздільна здатність зображення має бути 609px X 560px',
                'images'              => 'Зображення',
                'new'                 => 'Новий',
                'not-allowed'         => 'Вам не дозволено призначати цей продукт',
                'old'                 => 'Старий',
                'price'               => 'Ціна',
                'product-not-allowed' => 'Вам не дозволено продавати продукт типу :type',
                'quantities'          => 'Кількості',
                'save-btn'            => 'Зберегти',
                'title'               => 'Призначити продукт',
                'update-success'      => 'Призначений продукт успішно оновлено',

                'product-details' => [
                    'active'            => 'Активний',
                    'approved'          => 'Схвалено',
                    'disable'           => 'Вимкнути',
                    'disapproved'       => 'Відхилено',
                    'image-placeholder' => 'Зображення продукту',
                    'title'             => 'Деталі продукту',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Відгуки про товари',

                'datagrid' => [
                    'approved'      => 'Схвалено',
                    'customer'      => 'Покупець',
                    'date'          => 'Дата',
                    'description'   => 'Опис',
                    'email'         => 'Електронна пошта',
                    'pending'       => 'Очікує на схвалення',
                    'product'       => 'Товар',
                    'rating'        => 'Рейтинг',
                    'status'        => 'Статус',
                    'title'         => 'Назва',
                    'unapproved'    => 'Не схвалено',
                    'update-status' => 'Статус оновлення',
                ],
            ],

            'update-success' => 'Відгуки про продукт успішно оновлено',
            'delete-success' => 'Огляди продуктів успішно видалено.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Покупці',

                'datagrid' => [
                    'active'      => 'Активний',
                    'customer'    => 'Покупець',
                    'email'       => 'Електронна пошта',
                    'gender'      => 'Стать',
                    'group'       => 'Група',
                    'inactive'    => 'Неактивний',
                    'order-count' => 'Кількість замовлень',
                    'revenue'     => 'Дохід',
                    'status'      => 'Статус',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Керування профілем',
                'edit-btn' => 'Редагувати профіль',

                'general' => [
                    'email'      => 'Електронна пошта',
                    'name'       => 'Ім\'я',
                    'phone'      => 'Номер телефону',
                    'shop-slug'  => 'URL магазину',
                    'shop-title' => 'Назва магазину',
                    'title'      => 'Загальна інформація',
                ],

                'about-store' => [
                    'title' => 'Про магазин',
                ],

                'meta' => [
                    'meta-description' => 'Мета опис',
                    'meta-keywords'    => 'Мета ключові слова',
                    'meta-title'       => 'Мета заголовок',
                    'title'            => 'Мета опис',
                ],

                'policy' => [
                    'privacy'  => 'Політика конфіденційності',
                    'return'   => 'Політика повернення',
                    'shipping' => 'Політика доставки',
                    'title'    => 'Політики',
                ],

                'address' => [
                    'city'     => 'Місто',
                    'country'  => 'Країна',
                    'postcode' => 'Поштовий індекс',
                    'state'    => 'Область',
                    'title'    => 'Адреса магазину',
                    'address'  => 'Адреса',
                ],

                'social' => [
                    'link'  => 'Посилання :name',
                    'title' => 'Соціальні посилання',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Мінімальна сума замовлення',
                ],

                'google-analytics' => [
                    'id'    => 'Ідентифікатор Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Комісія адміністратора',
                    'admin-commission-value' => 'Комісія адміністратора :rate% від загальної суми рахунку',
                    'allowed-categories'     => 'Дозволені категорії',
                    'no-categories'          => 'Категорії недоступні',
                    'allowed-product-types'  => 'Дозволені типи товарів',
                    'no-product-types'       => 'Типи товарів недоступні',
                    'payment-methods'        => 'Методи оплати',
                    'no-payment-methods'     => 'Методи оплати недоступні',
                    'shipping-methods'       => 'Методи доставки',
                    'no-shipping-methods'    => 'Методи доставки недоступні',
                    'title'                  => 'Інформація про магазин',
                ],
            ],

            'edit' => [
                'banner'              => 'Банер',
                'banner-description'  => 'Завантажте банер у співвідношенні 13:3, висота 375, безпечна зона 375x250, центр на мобільному',
                'delete-banner'       => 'Видалити банер',
                'delete-logo'         => 'Видалити логотип',
                'logo'                => 'Логотип',
                'logo-description'    => 'Завантажте логотип у співвідношенні 1:1',
                'save-btn'            => 'Зберегти профіль',
                'title'               => 'Керування профілем',
                'upload-new-banner'   => 'Завантажити новий банер',
                'upload-new-logo'     => 'Завантажити новий логотип',

                'general' => [
                    'email'      => 'Електронна пошта',
                    'name'       => 'Ім\'я',
                    'phone'      => 'Номер телефону',
                    'shop-slug'  => 'URL магазину',
                    'shop-title' => 'Назва магазину',
                    'title'      => 'Загальна інформація',
                ],

                'about-store' => [
                    'title' => 'Про магазин',
                ],

                'meta' => [
                    'meta-description' => 'Мета опис',
                    'meta-keywords'    => 'Мета ключові слова',
                    'meta-title'       => 'Мета заголовок',
                    'title'            => 'Мета опис',
                ],

                'policy' => [
                    'privacy'  => 'Політика конфіденційності',
                    'return'   => 'Політика повернення',
                    'shipping' => 'Політика доставки',
                    'title'    => 'Політики',
                ],

                'address' => [
                    'city'           => 'Місто',
                    'country'        => 'Країна',
                    'postcode'       => 'Поштовий індекс',
                    'state'          => 'Область',
                    'title'          => 'Адреса магазину',
                    'select-country' => 'Виберіть країну',
                    'select-state'   => 'Виберіть область',
                    'street-address' => 'Вулиця',
                    'address'        => 'Адреса',
                ],

                'social' => [
                    'link'  => 'Посилання :name',
                    'title' => 'Соціальні посилання',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Мінімальна сума замовлення',
                ],

                'google-analytics' => [
                    'id'    => 'Ідентифікатор Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Ваш профіль успішно оновлено',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Відгуки про продавця',

                'datagrid' => [
                    'approved'    => 'Схвалено',
                    'customer'    => 'Клієнт',
                    'date'        => 'Дата',
                    'description' => 'Опис',
                    'disapproved' => 'Непогоджений',
                    'email'       => 'Електронна пошта',
                    'pending'     => 'В очікуванні',
                    'rating'      => 'Рейтинг',
                    'status'      => 'Статус',
                    'title'       => 'Заголовок',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Зберегти',
                    'title'              => 'Загальні',
                    'unmatched-password' => 'Поточний пароль не збігається',
                    'update-success'     => 'Загальні налаштування успішно оновлено',

                    'regional-setting' => [
                        'currency'      => 'Валюта',
                        'locale'        => 'Локаль',
                        'select-locale' => 'Виберіть локаль',
                        'title'         => 'Регіональні налаштування',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Підтвердити пароль',
                        'current-password' => 'Поточний пароль',
                        'new-password'     => 'Новий пароль',
                        'title'            => 'Налаштування паролю',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Створити Роль',
                    'title'      => 'Ролі',

                    'datagrid' => [
                        'all'             => 'Усі',
                        'custom'          => 'Нестандартний',
                        'delete'          => 'Видалити',
                        'edit'            => 'Редагувати',
                        'id'              => 'ID',
                        'name'            => 'Ім\'я',
                        'permission-type' => 'Тип Дозволу',
                    ],
                ],

                'create' => [
                    'access-control' => 'Контроль Доступу',
                    'all'            => 'Усі',
                    'back-btn'       => 'Назад',
                    'custom'         => 'Нестандартний',
                    'description'    => 'Опис',
                    'general'        => 'Загальні',
                    'name'           => 'Ім\'я',
                    'permissions'    => 'Дозволи',
                    'save-btn'       => 'Зберегти Роль',
                    'title'          => 'Створити Роль',
                ],

                'edit' => [
                    'access-control' => 'Контроль Доступу',
                    'all'            => 'Усі',
                    'back-btn'       => 'Назад',
                    'custom'         => 'Нестандартний',
                    'description'    => 'Опис',
                    'general'        => 'Загальні',
                    'name'           => 'Ім\'я',
                    'permissions'    => 'Дозволи',
                    'save-btn'       => 'Зберегти Роль',
                    'title'          => 'Редагувати Роль',
                ],

                'being-used'        => 'Роль використовується деякими продавцями',
                'create-success'    => 'Роль успішно створена',
                'delete-failed'     => 'Не вдалося видалити роль',
                'delete-success'    => 'Роль успішно видалена',
                'last-delete-error' => 'Необхідна щонайменше одна роль',
                'update-success'    => 'Роль успішно оновлена',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Створити Користувача',
                    'create-title'     => 'Створити Користувача',
                    'edit-title'       => 'Редагувати Користувача',
                    'email'            => 'Електронна пошта',
                    'name'             => 'Ім\'я',
                    'phone-number'     => 'Номер телефону',
                    'role'             => 'Роль',
                    'save-btn'         => 'Зберегти Користувача',
                    'select-role'      => 'Виберіть Роль',
                    'password'         => 'Пароль',
                    'confirm-password' => 'Підтвердження Пароля',
                    'status'           => 'Статус',
                    'title'            => 'Користувачі',
                    'create-success'   => 'Користувача успішно створено',
                    'update-success'   => 'Користувача успішно оновлено',
                    'delete-success'   => 'Користувача успішно видалено',
                    'delete-failed'    => 'Не вдалося видалити користувача',

                    'datagrid' => [
                        'delete'     => 'Видалити',
                        'edit'       => 'Редагувати',
                        'email'      => 'Електронна пошта',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Ім\'я',
                        'permission' => 'Дозвіл',
                        'phone'      => 'Телефон',

                        'status' => [
                            'title' => 'Статус',

                            'options' => [
                                'active'    => 'Активний',
                                'suspended' => 'Призупинений',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index'  => [
                    'create-btn' => 'Створити джерело інвентаризації',
                    'title'      => 'Джерела інвентаризації',

                    'datagrid' => [
                        'active'   => 'Активне',
                        'code'     => 'Код',
                        'delete'   => 'Видалити',
                        'edit'     => 'Редагувати',
                        'id'       => 'ID',
                        'inactive' => 'Неактивне',
                        'name'     => 'Назва',
                        'priority' => 'Пріоритет',
                        'status'   => 'Статус',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Додати джерело інвентаризації',
                    'address'        => 'Адреса джерела',
                    'back-btn'       => 'Назад',
                    'city'           => 'Місто',
                    'code'           => 'Код',
                    'contact-email'  => 'Електронна пошта',
                    'contact-fax'    => 'Факс',
                    'contact-info'   => 'Контактна інформація',
                    'contact-name'   => 'Ім я',
                    'contact-number' => 'Контактний номер',
                    'country'        => 'Країна',
                    'description'    => 'Опис',
                    'general'        => 'Загальне',
                    'latitude'       => 'Широта',
                    'longitude'      => 'Довгота',
                    'name'           => 'Назва',
                    'postcode'       => 'Поштовий індекс',
                    'priority'       => 'Пріоритет',
                    'save-btn'       => 'Зберегти Джерело інвентаризації',
                    'select-country' => 'Виберіть країну',
                    'select-state'   => 'Виберіть область',
                    'settings'       => 'Налаштування',
                    'state'          => 'Область',
                    'status'         => 'Статус',
                    'street'         => 'Вулиця',
                    'title'          => 'Джерела інвентаризації',
                ],

                'edit' => [
                    'back-btn'       => 'Назад',
                    'city'           => 'Місто',
                    'code'           => 'Код',
                    'contact-email'  => 'Електронна пошта',
                    'contact-fax'    => 'Факс',
                    'contact-info'   => 'Контактна інформація',
                    'contact-name'   => 'Ім я',
                    'contact-number' => 'Контактний номер',
                    'country'        => 'Країна',
                    'description'    => 'Опис',
                    'general'        => 'Загальне',
                    'latitude'       => 'Широта',
                    'longitude'      => 'Довгота',
                    'name'           => 'Назва',
                    'postcode'       => 'Поштовий індекс',
                    'priority'       => 'Пріоритет',
                    'save-btn'       => 'Зберегти Джерело інвентаризації',
                    'select-country' => 'Виберіть країну',
                    'select-state'   => 'Виберіть область',
                    'settings'       => 'Налаштування',
                    'source-address' => 'Адреса джерела',
                    'state'          => 'Область',
                    'status'         => 'Статус',
                    'street'         => 'Вулиця',
                    'title'          => 'Редагувати Джерела інвентаризації',
                ],

                'create-success'    => 'Джерело інвентаризації створено успішно',
                'delete-failed'     => 'Не вдалося видалити джерела інвентаризації',
                'delete-success'    => 'Джерела інвентаризації видалено успішно',
                'last-delete-error' => 'Останнє джерело інвентаризації не може бути видалено',
                'update-success'    => 'Джерела інвентаризації успішно оновлено',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Адміністратор',
                'blocked-message'     => 'Вас заблокував адміністратор',
                'message-failed'      => 'Не вдалося надіслати повідомлення',
                'message-placeholder' => 'Введіть ваше повідомлення тут...',
                'message-sent'        => 'Повідомлення успішно надіслано',
                'no-message'          => 'Повідомлення не знайдено',
                'search-message'      => 'Шукати повідомлення...',
                'title'               => 'Комунікація',

                'filters' => [
                    'all-messages'      => 'Усі повідомлення',
                    'prev-fifteen-days' => 'Останні 15 днів',
                    'prev-seven-days'   => 'Останні 7 днів',
                    'prev-six-months'   => 'Останні 6 місяців',
                    'prev-thirty-days'  => 'Останні 30 днів',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Залишені кошики',
                    'abandoned-products'            => 'Залишені товари',
                    'abandoned-rate'                => 'Відсоток залишених',
                    'abandoned-revenue'             => 'Дохід від залишених товарів',
                    'added-to-cart'                 => 'Додано в кошик',
                    'added-to-cart-info'            => 'Лише :progress відвідувачів додали товари в кошик',
                    'all-channels'                  => 'Усі канали',
                    'average-order-value-over-time' => 'Середній обсяг замовлення відносно часу',
                    'average-sales'                 => 'Середній обсяг замовлення',
                    'commission'                    => 'Комісія',
                    'commission-over-time'          => 'Комісія з часом',
                    'count'                         => 'Кількість',
                    'end-date'                      => 'Дата закінчення',
                    'id'                            => 'Ідентифікатор',
                    'interval'                      => 'Інтервал',
                    'name'                          => 'Назва',
                    'orders'                        => 'Замовлення',
                    'orders-over-time'              => 'Замовлення відносно часу',
                    'payment-method'                => 'Спосіб оплати',
                    'product-views'                 => 'Перегляди товарів',
                    'product-views-info'            => 'Лише :progress відвідувачів переглядають товари',
                    'purchase-funnel'               => 'Воронка покупок',
                    'purchased'                     => 'Куплено',
                    'purchased-info'                => 'Лише :progress відвідувачів здійснили покупку',
                    'refunds'                       => 'Повернення коштів',
                    'refunds-over-time'             => 'Повернення коштів відносно часу',
                    'sales-over-time'               => 'Продажі відносно часу',
                    'start-date'                    => 'Дата початку',
                    'tax-collected'                 => 'Податок',
                    'tax-collected-over-time'       => 'Податок відносно часу',
                    'title'                         => 'Продажі',
                    'top-payment-methods'           => 'Топові способи оплати',
                    'top-tax-categories'            => 'Топові категорії податків',
                    'total'                         => 'Усього',
                    'total-commission-paid'         => 'Загальна виплачена комісія',
                    'total-orders'                  => 'Загальна кількість замовлень',
                    'total-sales'                   => 'Загальний обсяг продажів',
                    'total-visits'                  => 'Загальна кількість відвідувань',
                    'total-visits-info'             => 'Загальна кількість відвідувачів в магазині',
                    'view-details'                  => 'Переглянути деталі',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Усі канали',
                    'count'                       => 'Кількість',
                    'customers'                   => 'Клієнти',
                    'customers-over-time'         => 'Клієнти відносно часу',
                    'customers-traffic'           => 'Трафік клієнтів',
                    'customers-with-most-orders'  => 'Клієнти з найбільшою кількістю замовлень',
                    'customers-with-most-reviews' => 'Клієнти з найбільшою кількістю відгуків',
                    'customers-with-most-sales'   => 'Клієнти з найбільшою кількістю продажів',
                    'email'                       => 'Електронна пошта',
                    'end-date'                    => 'Дата закінчення',
                    'id'                          => 'Ідентифікатор',
                    'interval'                    => 'Інтервал',
                    'name'                        => 'Назва',
                    'orders'                      => 'Замовлення',
                    'reviews'                     => 'Відгуки',
                    'start-date'                  => 'Дата початку',
                    'title'                       => 'Клієнти',
                    'top-customer-groups'         => 'Топові групи клієнтів',
                    'total'                       => 'Усього',
                    'total-customers'             => 'Загальна кількість клієнтів',
                    'total-visitors'              => 'Загальна кількість відвідувачів',
                    'traffic-over-week'           => 'Трафік протягом тижня',
                    'unique-visitors'             => 'Унікальні відвідувачі',
                    'view-details'                => 'Переглянути деталі',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Усі канали',
                    'channel'                          => 'Канал',
                    'end-date'                         => 'Дата закінчення',
                    'id'                               => 'Ідентифікатор',
                    'interval'                         => 'Інтервал',
                    'locale'                           => 'Мова',
                    'name'                             => 'Назва',
                    'orders'                           => 'Замовлення',
                    'price'                            => 'Ціна',
                    'products-added-over-time'         => 'Товари, додані з часом',
                    'products-with-most-reviews'       => 'Товари з найбільшою кількістю відгуків',
                    'products-with-most-visits'        => 'Товари з найбільшою кількістю відвідувань',
                    'quantities'                       => 'Кількість',
                    'quantities-sold-over-time'        => 'Кількість проданих товарів відносно часу',
                    'revenue'                          => 'Дохід',
                    'reviews'                          => 'Відгуки',
                    'start-date'                       => 'Дата початку',
                    'title'                            => 'Товари',
                    'top-selling-products-by-quantity' => 'Топові товари за кількістю',
                    'top-selling-products-by-revenue'  => 'Топові товари за доходом',
                    'total'                            => 'Усього',
                    'total-products-added-to-wishlist' => 'Товари, додані в список бажань',
                    'total-sold-quantities'            => 'Загальна кількість проданих товарів',
                    'view-details'                     => 'Переглянути деталі',
                    'visits'                           => 'Відвідувань',
                ],
            ],

            'view' => [
                'all-channels'  => 'Усі канали',
                'day'           => 'День',
                'end-date'      => 'Дата закінчення',
                'export-csv'    => 'Експорт у форматі CSV',
                'export-xls'    => 'Експорт у форматі XLS',
                'month'         => 'Місяць',
                'not-available' => 'Немає доступних записів.',
                'start-date'    => 'Дата початку',
                'year'          => 'Рік',
            ],

            'empty' => [
                'info'  => 'Для обраного інтервалу немає даних',
                'title' => 'Дані недоступні',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Вимкнено',
                'enabled'   => 'Увімкнено',
                'info'      => 'Створюйте, керуйте та масштабуйте свій інтернет-магазин за допомогою налаштовуваних розширень Bagisto.',
                'no-result' => 'Тут немає доступних розширень.',
                'title'     => 'Розширення',

                'filters' => [
                    'all-extensions' => 'Усі розширення',
                    'bulk_upload'    => 'Масове завантаження',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'Маркетплейс',
                    'payment'        => 'Оплата',
                    'pos'            => 'POS',
                    'shipping'       => 'Доставка',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Логотип продавця',
                'switch-to-store' => 'Перейти до управління магазином',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Мінімальна сума замовлення для :shop_title становить',
                'product-not-available' => 'Продукт недоступний',
                'sold-by'               => 'Продано',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Дні* оплати',
                'deals-in'            => 'Угоди в',
                'featured-seller'     => 'Наші Рекомендовані Продавці',
                'online-business'     => 'Онлайн-бізнес',
                'reviews'             => ':count Відгуки',
                'seller-community'    => 'Спільнота продавців',
                'serviceable-pincode' => 'Службовий поштовий індекс',
                'start-selling'       => 'Почніть продавати великим клієнтам по всьому світу, цілодобово.',
                'step'                => 'Крок :count',
                'visit-shop'          => 'Відвідайте магазин',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Додати в кошик',
            'delivery-info' => 'Тут розміщена інформація про доставку',
            'hide'          => 'Сховати',
            'more-info'     => 'Додаткова інформація',
            'seller-count'  => ':count ще продавець продає цей самий продукт',
            'seller-info'   => 'Інформація про Продавця',
            'sold-by'       => 'Продається від',
            'top-selling'   => '热销商品',

            'flag' => [
                'alert'              => 'Попередження',
                'already-reported'   => 'Ви вже повідомили про цей продукт',
                'create-success'     => 'Продукт успішно повідомлено',
                'guest-alert'        => 'Вам потрібно увійти, щоб повідомити про цей продукт',
                'not-allowed'        => 'Ви не можете повідомити про цей продукт без замовлення',
                'other-reason'       => 'Інша причина',
                'reason'             => 'Причина',
                'reason-placeholder' => 'Будь ласка, вкажіть причину',
                'report-product'     => 'Повідомити про продукт',
                'select-reason'      => 'Виберіть причину',
                'submit-btn'         => 'Відправити',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Продавця ще не затверджено',
                'products-count'  => 'Товари (:count)',
                'reviews-count'   => 'Відгуки (:count)',
                'search-text'     => 'Пошук товарів',

                'about' => [
                    'title'           => 'Про нас',
                    'about-us'        => 'Про нас',
                    'shipping-policy' => 'Політика доставки',
                    'privacy-policy'  => 'Політика конфіденційності',
                    'return-policy'   => 'Політика повернення',
                ],

                'contact-form' => [
                    'title'          => 'Контакти',
                    'name'           => 'Ім’я',
                    'email'          => 'Електронна пошта',
                    'subject'        => 'Тема',
                    'query'          => 'Запит',
                    'submit-btn'     => 'Надіслати',
                    'create-success' => 'Ваш запит успішно надіслано',
                ],

                'share' => [
                    'title'     => 'Поділитися',
                    'share-on'  => 'Поділитися на',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Попередження',
                    'already-reported'   => 'Ви вже повідомили про цього продавця',
                    'create-success'     => 'Продавця успішно повідомлено',
                    'guest-alert'        => 'Увійдіть у систему, щоб повідомити про продавця',
                    'not-allowed'        => 'Ви не можете повідомити про продавця без замовлення',
                    'other-reason'       => 'Інша причина',
                    'reason'             => 'Причина',
                    'reason-placeholder' => 'Вкажіть причину',
                    'select-reason'      => 'Виберіть причину',
                    'submit-btn'         => 'Надіслати',
                    'title'              => 'Повідомити про проблему',
                ],

                'reviews' => [
                    'alert'            => 'Попередження',
                    'already-reviewed' => 'Ви вже оцінили цього продавця',
                    'comment'          => 'Коментар',
                    'create-success'   => 'Продавець успішно оцінений',
                    'customer-review'  => ':count Відгук від клієнта',
                    'customer-reviews' => 'Відгуки клієнтів',
                    'guest-alert'      => 'Вам потрібно увійти, щоб повідомити про продавця',
                    'rating'           => 'Оцінка',
                    'review-by'        => 'Відгук від',
                    'submit-btn'       => 'Відправити',
                    'title'            => 'Заголовок',
                    'view-all'         => 'Переглянути всі відгуки',
                    'write-review'     => 'Написати відгук',
                ],

                'products' => [
                    'no-result' => 'Товари відсутні',
                    'show'      => 'Показати',

                    'sort-by' => [
                        'title' => 'Сортувати за',

                        'options' => [
                            'cheapest-first'  => 'Спочатку дешеві',
                            'expensive-first' => 'Спочатку дорогі',
                            'from-a-z'        => 'Від А до Я',
                            'from-z-a'        => 'Від Я до А',
                            'latest-first'    => 'Спочатку нові',
                            'oldest-first'    => 'Спочатку старі',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Очистити все',
                        'filter'      => 'Фільтр',
                        'filters'     => 'Фільтри:',
                        'price-range' => 'Ціновий діапазон',
                        'sort'        => 'Сортувати',
                    ],
                ],
            ],
        ],
    ],
];
