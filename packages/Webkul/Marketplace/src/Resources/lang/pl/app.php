<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Rynek',
                    'info'  => 'Zarządzaj Rynkiem',

                    'module-info' => [
                        'title'       => 'Informacje o Module',
                        'info'        => 'Zapewnia informacje o wersji aplikacji.',
                        'app-version' => 'Wersja aplikacji: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Prowizja Administratora',
                        'description'                  => 'Zarządzaj ogólnymi ustawieniami rynku, takimi jak status, prowizje, itd.',
                        'lines-in-street-address'      => 'Linie w Adresie Ulicznym',
                        'lines-in-street-address-info' => 'Ustaw liczbę linii w adresie ulicznym. Domyślnie jedna linia.',
                        'status'                       => 'Status',
                        'title'                        => 'Ogólne',
                    ],

                    'product' => [
                        'approval-required'         => 'Wymagana Akceptacja',
                        'description'               => 'Zarządzaj ustawieniami produktów na rynku, takimi jak akceptacje, flagi, itd.',
                        'enable-flag'               => 'Włącz Flagę',
                        'seller-can-assign-product' => 'Sprzedawca Może Przypisać Produkt',
                        'seller-can-create-product' => 'Sprzedawca Może Utworzyć Produkt',
                        'show-progress-bar'         => 'Pokaż pasek postępu',
                        'title'                     => 'Produkt',
                    ],

                    'seller' => [
                        'approval-required'           => 'Wymagana zgoda',
                        'can-cancel-order'            => 'Może anulować zamówienie',
                        'can-create-invoice'          => 'Może wystawić fakturę',
                        'can-create-shipment'         => 'Może utworzyć wysyłkę',
                        'description'                 => 'Zarządzaj ustawieniami sprzedawcy na rynku, takimi jak zatwierdzenia, flagi itp.',
                        'enable-flag'                 => 'Włącz flagę',
                        'enable-minimum-order-amount' => 'Włącz minimalną kwotę zamówienia',
                        'enable-seller-flag'          => 'Włącz flagę sprzedawcy',
                        'red-flag-limit'              => 'Limit czerwonej flagi',
                        'red-flag-limit-info'         => 'Jeśli sprzedawca przekroczy ten limit, na jego profilu pojawi się czerwona flaga.',
                        'show-red-flag'               => 'Pokaż czerwoną flagę na profilu, jeśli limit zostanie przekroczony',
                        'title'                       => 'Sprzedawca',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Limit Ilości',
                        'description' => 'Zarządzaj wyróżnionymi sprzedawcami na rynku.',
                        'status'      => 'Status',
                        'title'       => 'Wyróżnieni Sprzedawcy',

                        'popularity-criteria' => [
                            'all'              => 'Wszystko',
                            'maximum-orders'   => 'Maksymalna Liczba Zamówień',
                            'maximum-products' => 'Maksymalna Liczba Produktów',
                            'maximum-rating'   => 'Maksymalna ocena',
                            'maximum-sale'     => 'Maksymalna Sprzedaż',
                            'title'            => 'Kryteria Popularności',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Tytuł przycisku banera',
                        'banner-description'  => 'Opis banera',
                        'banner-image'        => 'Obraz banera',
                        'banner-title'        => 'Tytuł banera',
                        'business-hour'       => 'Godziny otwarcia',
                        'community-count'     => 'Liczba społeczności',
                        'description'         => 'Dostosuj stronę docelową Marketplace, dodając ikony, banery i opisy dla świeżego wyglądu.',
                        'feature-box1-desc'   => 'Opis funkcji 1',
                        'feature-box1-icon'   => 'Ikona funkcji 1',
                        'feature-box1-title'  => 'Tytuł funkcji 1',
                        'feature-box2-desc'   => 'Opis funkcji 2',
                        'feature-box2-icon'   => 'Ikona funkcji 2',
                        'feature-box2-title'  => 'Tytuł funkcji 2',
                        'feature-box3-desc'   => 'Opis funkcji 3',
                        'feature-box3-icon'   => 'Ikona funkcji 3',
                        'feature-box3-title'  => 'Tytuł funkcji 3',
                        'feature-box4-desc'   => 'Opis funkcji 4',
                        'feature-box4-icon'   => 'Ikona funkcji 4',
                        'feature-box4-title'  => 'Tytuł funkcji 4',
                        'feature-description' => 'Opis funkcji',
                        'feature-image'       => 'Obraz funkcji',
                        'feature-title'       => 'Tytuł funkcji',
                        'journey-description' => 'Opis podróży',
                        'journey-image'       => 'Obraz podróży',
                        'journey-step1-desc'  => 'Opis kroku podróży 1',
                        'journey-step1-icon'  => 'Ikona kroku podróży 1',
                        'journey-step1-title' => 'Tytuł kroku podróży 1',
                        'journey-step2-desc'  => 'Opis kroku podróży 2',
                        'journey-step2-icon'  => 'Ikona kroku podróży 2',
                        'journey-step2-title' => 'Tytuł kroku podróży 2',
                        'journey-step3-desc'  => 'Opis kroku podróży 3',
                        'journey-step3-icon'  => 'Ikona kroku podróży 3',
                        'journey-step3-title' => 'Tytuł kroku podróży 3',
                        'journey-step4-desc'  => 'Opis kroku podróży 4',
                        'journey-step4-icon'  => 'Ikona kroku podróży 4',
                        'journey-step4-title' => 'Tytuł kroku podróży 4',
                        'journey-step5-desc'  => 'Opis kroku podróży 5',
                        'journey-step5-icon'  => 'Ikona kroku podróży 5',
                        'journey-step5-title' => 'Tytuł kroku podróży 5',
                        'journey-title'       => 'Tytuł podróży',
                        'payment-duration'    => 'Czas płatności',
                        'serviceable-pincode' => 'Obsługiwany kod pocztowy',
                        'title'               => 'Strona docelowa',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Przypisz produkt',
            'communications'    => 'Komunikacja',
            'create'            => 'Utwórz',
            'delete'            => 'Usuń',
            'edit'              => 'Edytuj',
            'flag-reasons'      => 'Powody zgłoszenia',
            'inventory-sources' => 'Źródła Zapasów',
            'orders'            => 'Zamówienia',
            'pay'               => 'Zapłać',
            'payment-request'   => 'Prośba o płatność',
            'product-reviews'   => 'Recenzje produktów',
            'products'          => 'Produkty',
            'reviews'           => 'Recenzje sprzedawców',
            'seller-categories' => 'Kategorie sprzedawców',
            'sellers'           => 'Sprzedawcy',
            'title'             => 'Rynek',
            'transactions'      => 'Transakcje',
            'view'              => 'Wyświetl',
        ],

        'menu' => [
            'communications'    => 'Komunikacja',
            'flag-reasons'      => 'Powody Oznaczania',
            'inventory-sources' => 'Źródła Zapasów',
            'orders'            => 'Zamówienia',
            'payment-requests'  => 'Żądania Płatności',
            'product-reviews'   => 'Recenzje Produktów',
            'products'          => 'Produkty',
            'seller-categories' => 'Kategorie sprzedawców',
            'seller-reviews'    => 'Recenzje Sprzedawcy',
            'sellers'           => 'Sprzedawcy',
            'title'             => 'Rynek',
            'transactions'      => 'Transakcje',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Dodaj Sprzedawców',
                'delete-failed'      => 'Usuwanie sprzedawcy nie powiodło się!',
                'delete-success'     => 'Sprzedawca pomyślnie usunięty.',
                'incomplete-profile' => 'Sprzedawca ma niekompletny profil!',
                'login-message'      => 'Zalogowano jako :seller_name',
                'pending-orders'     => 'Sprzedawca ma kilka zamówień oczekujących',
                'title'              => 'Sprzedawcy',
                'update-success'     => 'Sprzedawca pomyślnie zaktualizowany!',

                'datagrid' => [
                    'add-product'     => 'Dodaj',
                    'approved'        => 'Zatwierdzony',
                    'assign-product'  => 'Przypisz produkt',
                    'created-at'      => 'Utworzono',
                    'delete'          => 'Usuń',
                    'disapproved'     => 'Odrzucony',
                    'edit'            => 'Edytuj',
                    'email'           => 'E-mail',
                    'flags'           => 'Flagi',
                    'id'              => 'ID',
                    'login-as-seller' => 'Zaloguj się jako sprzedawca',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Nazwa sprzedawcy',
                    'shop-url'        => 'URL sklepu',
                    'status'          => 'Status',
                    'suspended'       => 'Zawieszony',
                    'total-flags'     => 'Liczba flag: :count',
                    'update-status'   => 'Zaktualizuj status',
                ],

                'create'  => [
                    'address'        => 'Adres',
                    'city'           => 'Miasto',
                    'country'        => 'Kraj',
                    'email'          => 'E-mail',
                    'name'           => 'Imię',
                    'phone'          => 'Numer telefonu',
                    'postcode'       => 'Kod pocztowy',
                    'save-btn'       => 'Zapisz',
                    'select'         => 'Wybierz',
                    'shop-title'     => 'Tytuł sklepu',
                    'shop-url'       => 'Adres URL sklepu',
                    'state'          => 'Stan',
                    'street-address' => 'Adres ulicy',
                    'success'        => 'Sprzedawca pomyślnie utworzony.',
                    'title'          => 'Utwórz sprzedawcę',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Flagi sprzedawcy',

                    'datagrid' => [
                        'id'             => 'Identyfikator',
                        'customer-name'  => 'Nazwa klienta',
                        'customer-email' => 'E-mail klienta',
                        'date'           => 'Data',
                        'reason'         => 'Powód',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Powrót',
                'image-placeholder' => 'Zdjęcie Produktu',
                'no-result'         => 'Nie znaleziono wyników!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Wyszukaj Produkty',
            ],

            'assign-product' => [
                'already-selling'     => 'Sprzedawca już sprzedaje ten produkt',
                'assign-successfully' => 'Produkt został pomyślnie przypisany do sprzedawcy.',
                'back-btn'            => 'Wróć',
                'condition'           => 'Stan',
                'description'         => 'Opis',
                'new'                 => 'Nowy',
                'old'                 => 'Stary',
                'price'               => 'Cena',
                'product-not-allowed' => 'Sprzedawcy nie wolno sprzedawać produktów typu :type.',
                'quantities'          => 'Ilości',
                'save-btn'            => 'Zapisz',
                'select-condition'    => 'Wybierz stan',
                'title'               => 'Przypisz Produkt',

                'seller-details' => [
                    'additional-info' => 'Dodatkowe informacje',
                    'approved'        => 'Zatwierdzony',
                    'disapproved'     => 'Odrzucony',
                    'no-of-products'  => 'Liczba produktów',
                    'status'          => 'Status',
                    'suspended'       => 'Zawieszony',
                    'title'           => 'Szczegóły sprzedawcy',
                ],

                'product-details' => [
                    'active'            => 'Aktywny',
                    'disable'           => 'Wyłącz',
                    'title'             => 'Szczegóły produktu',
                    'image-placeholder' => 'Zdjęcie produktu',
                ],

                'images' => [
                    'info'  => 'Rozmiar obrazu powinien wynosić około 609px X 560px',
                    'title' => 'Obrazy',
                ],

                'videos' => [
                    'error' => 'Wideo nie może być większe niż :max kilobajtów. Proszę wybrać mniejszy plik.',
                    'info'  => 'Maksymalny rozmiar filmu powinien wynosić około :size',
                    'title' => 'Filmy',
                ],

                'configurable' => [
                    'delete-btn'        => 'Usuń',
                    'edit-btn'          => 'Edytuj',
                    'image-placeholder' => 'Zdjęcie Produktu',
                    'qty'               => 'Ilość - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Warianty',

                    'edit' => [
                        'images'     => 'Zdjęcia',
                        'price'      => 'Cena',
                        'quantities' => 'Ilości',
                        'save-btn'   => 'Zapisz',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Dodaj Link',
                        'delete-btn'  => 'Usuń',
                        'edit-btn'    => 'Edytuj',
                        'empty-info'  => 'Aby stworzyć link w locie.',
                        'empty-title' => 'Dodaj Link',
                        'file'        => 'Plik : ',
                        'info'        => 'Typ produktu do pobrania pozwala na sprzedaż produktów cyfrowych, takich jak e-booki, aplikacje, muzyka, gry itp.',
                        'sample-file' => 'Plik Próbny : ',
                        'sample-url'  => 'URL Próbny : ',
                        'title'       => 'Linki Do Pobrania',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Pobieranie Dozwolone',
                            'file'        => 'Plik',
                            'file-type'   => 'Typ Pliku',
                            'name'        => 'Tytuł',
                            'price'       => 'Cena',
                            'sample'      => 'Próbka',
                            'sample-type' => 'Typ Próbki',
                            'save-btn'    => 'Zapisz',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Dodaj Próbkę',
                        'delete-btn'  => 'Usuń',
                        'edit-btn'    => 'Edytuj',
                        'empty-info'  => 'Aby stworzyć próbkę w locie.',
                        'empty-title' => 'Dodaj Próbkę',
                        'file'        => 'Plik : ',
                        'info'        => 'Typ produktu do pobrania pozwala na sprzedaż produktów cyfrowych, takich jak e-booki, aplikacje, muzyka, gry itp.',
                        'title'       => 'Próbki Do Pobrania',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'Plik',
                            'file-type' => 'Typ Pliku',
                            'name'      => 'Tytuł',
                            'save-btn'  => 'Zapisz',
                            'title'     => 'Link',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Powrót',
                'suspended'      => 'Zawieszony',
                'title'          => 'Edytuj Sprzedawcę',
                'update-btn'     => 'Aktualizuj Sprzedawcę',
                'update-success' => 'Sprzedawca Zaktualizowany Pomyślnie.',

                'shop' => [
                    'address'          => 'Adres',
                    'city'             => 'Miasto',
                    'country'          => 'Kraj',
                    'description'      => 'Opis',
                    'email'            => 'E-mail',
                    'name'             => 'Imię',
                    'phone-number'     => 'Numer telefonu',
                    'postcode'         => 'Kod pocztowy',
                    'select'           => 'Wybór',
                    'shop-title'       => 'Tytuł sklepu',
                    'state'            => 'Województwo',
                    'street-address'   => 'Adres ulicy',
                    'title'            => 'Szczegóły sklepu',
                    'url'              => 'URL sklepu',
                ],

                'profile' => [
                    'banner'       => 'Baner Profilu',
                    'banner-size'  => 'Rozmiar banera powinien wynosić 300px X 200px',
                    'logo'         => 'Logo Profilu',
                    'logo-size'    => 'Rozmiar logo powinien wynosić 125px X 125px',
                    'social-links' => ':name Link',
                    'title'        => 'Szczegóły Profilu',
                ],

                'allowed-product' => [
                    'title' => 'Dozwolone Produkty',
                ],

                'minimum-order-amount' => [
                    'title' => 'Minimalna Kwota Zamówienia',
                ],

                'google-analytics-id' => [
                    'title' => 'ID Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Procent',
                    'status'     => 'Status',
                    'title'      => 'Prowizja Sprzedawcy',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Opis',
                    'meta-keyword'     => 'Meta Słowa Kluczowe',
                    'meta-title'       => 'Meta Tytuł',
                    'title'            => 'Informacje Meta',
                ],

                'policy' => [
                    'privacy'  => 'Polityka Prywatności',
                    'return'   => 'Polityka Zwrotów',
                    'shipping' => 'Polityka Wysyłki',
                    'title'    => 'Polityki',
                ],

                'channels' => [
                    'title' => 'Kanał',
                ],

                'users' => [
                    'email' => 'Email',
                    'id'    => 'ID',
                    'name'  => 'Nazwa',
                    'phone' => 'Telefon',
                    'title' => 'Użytkownicy',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Dodaj Produkty',
                'delete-success' => 'Produkt usunięty pomyślnie.',
                'title'          => 'Produkty',
                'update-success' => 'Produkt zaktualizowany pomyślnie.',

                'datagrid' => [
                    'approved'       => 'Zatwierdzono',
                    'delete'         => 'Usuń',
                    'disapproved'    => 'Odrzucono',
                    'flags'          => 'Flagi',
                    'id'             => 'ID',
                    'is-owner'       => 'Jest Właścicielem',
                    'no'             => 'Nie',
                    'out-of-stock'   => 'Niedostępne',
                    'price'          => 'Cena',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Nazwa Produktu',
                    'product-number' => 'Numer Produktu',
                    'product-type'   => 'Typ Produktu',
                    'quantity'       => 'Ilość',
                    'seller-name'    => 'Nazwa Sprzedawcy',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'total-flags'    => 'Liczba Flag: :count',
                    'total-quantity' => ':quantity Dostępne',
                    'update-status'  => 'Zaktualizuj status',
                    'yes'            => 'Tak',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Flagi Produktów',

                    'datagrid' => [
                        'customer-email' => 'Email Klienta',
                        'customer-name'  => 'Nazwa Klienta',
                        'date'           => 'Data',
                        'id'             => 'ID',
                        'reason'         => 'Powód',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Szczegóły Recenzji',
                'title'          => 'Recenzje Produktów',

                'datagrid' => [
                    'approved'      => 'Zatwierdzone',
                    'comment'       => 'Komentarz',
                    'customer-name' => 'Nazwa Klienta',
                    'date'          => 'Data',
                    'disapproved'   => 'Odrzucone',
                    'id'            => 'Id',
                    'images'        => 'Zdjęcia',
                    'pending'       => 'Oczekujące',
                    'product'       => 'Produkt',
                    'product-name'  => 'Nazwa Produktu',
                    'rating'        => 'Ocena',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Nazwa Sklepu',
                    'status'        => 'Status',
                    'title'         => 'Tytuł',
                    'update-status' => 'Status aktualizacji',
                    'view'          => 'Zobacz',
                ],
            ],

            'update-success' => 'Recenzje produktów zostały pomyślnie zaktualizowane',
            'delete-success' => 'Recenzje produktów zostały pomyślnie usunięte.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Opinie Sprzedawcy',

                'datagrid' => [
                    'approved'            => 'Zatwierdzony',
                    'comment'             => 'Komentarz',
                    'customer-name'       => 'Nazwa klienta',
                    'date'                => 'Data',
                    'delete'              => 'Usuń',
                    'disapproved'         => 'Odrzucony',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Opinie sprzedawcy zostały pomyślnie usunięte.',
                    'mass-update-success' => 'Opinie sprzedawcy zostały pomyślnie zaktualizowane.',
                    'pending'             => 'Oczekujący',
                    'rating'              => 'Ocena',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Tytuł opinii',
                    'seller-name'         => 'Nazwa sprzedawcy',
                    'shop-title'          => 'Nazwa sklepu',
                    'status'              => 'Status',
                    'update-status'       => 'Zaktualizuj status',
                ],
            ],

            'delete-success' => 'Opinia sprzedawcy została pomyślnie usunięta.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Zamówienia',

                'datagrid' => [
                    'canceled'        => 'Anulowane',
                    'closed'          => 'Zamknięte',
                    'commission'      => 'Prowizja',
                    'completed'       => 'Zakończone',
                    'customer'        => 'Klient',
                    'date'            => 'Data',
                    'discount'        => 'Rabat',
                    'email'           => 'E-mail',
                    'fraud'           => 'Oszustwo',
                    'gross-amt'       => 'Kwota brutto',
                    'id'              => 'ID',
                    'items'           => 'Produkty',
                    'location'        => 'Lokalizacja',
                    'order-id'        => 'ID zamówienia - #:id',
                    'payment'         => 'Płatność',
                    'pending'         => 'Oczekujące',
                    'pending-payment' => 'Oczekuje na płatność',
                    'processing'      => 'Przetwarzanie',
                    'seller'          => 'Sprzedawca',
                    'seller-earn'     => 'Zarobki',
                    'shipment'        => 'Dostawa',
                    'shop'            => 'Sklep',
                    'status'          => 'Status',
                    'view'            => 'Pokaż',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transakcje',

                'datagrid' => [
                    'base-total'     => 'Suma Bazowa',
                    'comment'        => 'Komentarz',
                    'customer-name'  => 'Nazwa Klienta',
                    'id'             => 'Id',
                    'seller-id'      => 'Id Sprzedawcy',
                    'seller-name'    => 'Nazwa Sprzedawcy',
                    'transaction-id' => 'Id Transakcji',
                    'view'           => 'Podgląd',
                ],
            ],

            'view' => [
                'commission'        => 'Prowizja',
                'created-on'        => 'utworzono dnia :date,',
                'name'              => 'Nazwa',
                'payment-method'    => 'Płatność: :method',
                'price'             => 'Cena',
                'qty'               => 'Ilość',
                'seller-total'      => 'Suma Sprzedawcy',
                'shipping-handling' => 'Wysyłka i Obsługa',
                'subtotal'          => 'Suma Częściowa',
                'tax'               => 'Podatek',
                'title'             => 'Transakcje #:transaction_id',
                'total'             => 'Suma Razem',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Utwórz Powód',
                'delete-success'      => 'Powód oznaczenia został pomyślnie usunięty.',
                'mass-delete-success' => 'Powody oznaczenia zostały pomyślnie usunięte.',
                'mass-update-success' => 'Powody oznaczenia zostały pomyślnie zaktualizowane.',
                'title'               => 'Powody Oznaczenia',

                'datagrid' => [
                    'delete'        => 'Usuń',
                    'edit'          => 'Edytuj',
                    'id'            => 'Id',
                    'name'          => 'Nazwa',
                    'update-status' => 'Zaktualizuj Status',

                    'status' => [
                        'active'  => 'Aktywny',
                        'disable' => 'Wyłącz',
                        'title'   => 'Status',
                    ],

                    'type' => [
                        'product' => 'Produkt',
                        'seller'  => 'Sprzedawca',
                        'title'   => 'Typ',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Wstecz',
                'general'  => 'Ogólne',
                'label'    => 'Etykieta',
                'product'  => 'Produkt',
                'save-btn' => 'Zapisz Powód',
                'seller'   => 'Sprzedawca',
                'status'   => 'Status',
                'title'    => 'Utwórz Powód',
                'type'     => 'Typ',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Wstecz',
                'general'  => 'Ogólne',
                'label'    => 'Etykieta',
                'product'  => 'Produkt',
                'save-btn' => 'Zapisz Powód',
                'seller'   => 'Sprzedawca',
                'status'   => 'Status',
                'title'    => 'Edytuj Powód',
                'type'     => 'Typ',
            ],

            'create-success' => 'Powód oznaczenia został pomyślnie utworzony.',
            'update-success' => 'Powód oznaczenia został pomyślnie zaktualizowany.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Przypisz kategorię',
                'create-success' => 'Kategoria została pomyślnie przypisana.',
                'delete-failed'  => 'Usunięcie kategorii nie powiodło się!',
                'delete-success' => 'Kategoria usunięta pomyślnie.',
                'title'          => 'Kategorie Sprzedawców',
                'update-success' => 'Kategoria zaktualizowana pomyślnie.',

                'datagrid' => [
                    'delete' => 'Usuń',
                    'edit'   => 'Edytuj',
                    'id'     => 'Id',
                    'name'   => 'Nazwa',
                ],
            ],

            'create' => [
                'back-btn'      => 'Wstecz',
                'save-btn'      => 'Zapisz Kategorię',
                'select-seller' => 'Wybierz Sprzedawcę',
                'seller'        => 'Sprzedawca',
                'title'         => 'Przypisz kategorię',
            ],

            'edit' => [
                'back-btn'   => 'Wstecz',
                'seller'     => 'Sprzedawca',
                'title'      => 'Edytuj Kategorię',
                'update-btn' => 'Aktualizuj Kategorię',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Komentarz',
                'no-amount-remaining'  => 'Brak pozostałej kwoty do zapłaty!',
                'order-not-found'      => 'Zamówienie Nie Znalezione!',
                'pay-btn'              => 'Zapłać Teraz',
                'pay-to-seller'        => 'Płatność dla Sprzedawcy',
                'payment-success'      => 'Płatność dla sprzedawcy udana!',
                'something-went-wrong' => 'Coś Poszło Nie Tak!',
                'title'                => 'Żądanie Płatności',

                'datagrid' => [
                    'already-paid'          => 'Już Zapłacone',
                    'canceled'              => 'Anulowane',
                    'closed'                => 'Zamknięte',
                    'completed'             => 'Zakończone',
                    'customer-name'         => 'Nazwa Klienta',
                    'date'                  => 'Data',
                    'email'                 => 'E-mail',
                    'fraud'                 => 'Oszustwo',
                    'gross-amt'             => 'Kwota brutto',
                    'id'                    => 'Identyfikator zamówienia',
                    'invoice-pending'       => 'Oczekujące na Fakturę',
                    'order-canceled'        => 'Zamówienie Anulowane',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Zapłać',
                    'pending'               => 'Oczekujące',
                    'pending_payment'       => 'Oczekujące na Płatność',
                    'processing'            => 'Przetwarzanie',
                    'refunded'              => 'Zwrócone',
                    'remaining-total'       => 'Pozostała Kwota',
                    'request-payment'       => 'Wniosek o Płatność',
                    'seller'                => 'Sprzedawca',
                    'seller-total-invoiced' => 'Suma Faktur Sprzedawcy',
                    'shop'                  => 'Sklep',
                    'status'                => 'Status',
                    'total-paid'            => 'Łącznie Zapłacone',
                    'view'                  => 'Podgląd',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Zablokuj Sprzedawcę',
                'block-success'        => 'Sprzedawca został pomyślnie zablokowany!',
                'chat-history-cleared' => 'Historia czatu została pomyślnie wyczyszczona!',
                'clear-chat-history'   => 'Wyczyść Historię Czatów',
                'exit'                 => 'Wyjście',
                'message-failed'       => 'Wysłanie wiadomości nie powiodło się!',
                'message-sent'         => 'Wiadomość została pomyślnie wysłana!',
                'no-message'           => 'Nie znaleziono wiadomości!',
                'search'               => 'Szukaj',
                'search-message'       => 'Szukaj wiadomości',
                'seller-blocked'       => 'Zablokowałeś tego sprzedawcę. Nie możesz wysłać wiadomości do tego sprzedawcy.',
                'sellers'              => 'Sprzedawcy',
                'title'                => 'Komunikacja',
                'type-message'         => 'Wpisz swoją wiadomość tutaj...',
                'unblock-seller'       => 'Odblokuj Sprzedawcę',
                'unblock-success'      => 'Sprzedawca został pomyślnie odblokowany!',
                'welcome-message'      => 'Witamy w komunikacji na Marketplace!',

                'filters' => [
                    'all-messages'      => 'Wszystkie wiadomości',
                    'prev-fifteen-days' => 'Poprzednie 15 dni',
                    'prev-seven-days'   => 'Poprzednie 7 dni',
                    'prev-six-months'   => 'Poprzednie 6 miesięcy',
                    'prev-thirty-days'  => 'Poprzednie 30 dni',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Źródła Inwentarza',

                'datagrid' => [
                    'active'      => 'Aktywny',
                    'code'        => 'Kod',
                    'id'          => 'Id',
                    'inactive'    => 'Nieaktywny',
                    'name'        => 'Nazwa',
                    'seller-name' => 'Nazwa Sprzedawcy',
                    'shop-title'  => 'Tytuł Sklepu',
                    'status'      => 'Status',
                ],

                'view' => [
                    'active'         => 'Aktywny',
                    'address'        => 'Adres Źródła',
                    'city'           => 'Miasto',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Faks',
                    'contact-info'   => 'Informacje Kontaktowe',
                    'contact-name'   => 'Nazwa',
                    'contact-number' => 'Numer Kontaktowy',
                    'country'        => 'Kraj',
                    'description'    => 'Opis',
                    'general-info'   => 'Informacje Ogólne',
                    'inactive'       => 'Nieaktywny',
                    'latitude'       => 'Szerokość geograficzna',
                    'longitude'      => 'Długość geograficzna',
                    'name'           => 'Nazwa',
                    'postcode'       => 'Kod Pocztowy',
                    'priority'       => 'Priorytet',
                    'seller-info'    => 'Informacje o Sprzedawcy',
                    'seller-name'    => 'Nazwa Sprzedawcy',
                    'settings'       => 'Ustawienia',
                    'shop-title'     => 'Tytuł Sklepu',
                    'state'          => 'Województwo',
                    'street'         => 'Ulica',
                    'title'          => 'Źródło Inwentarza #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Zainstaluj pakiet Marketplace.',
            'migrate'     => 'Migrowanie wszystkich tabel do bazy danych (może to chwilę potrwać)...',
            'seed'        => 'Wprowadzanie danych do bazy danych...',
            'publish'     => 'Publikowanie zasobów i konfiguracji...',
            'cache'       => 'Czyszczenie pamięci podręcznej...',
            'finish'      => 'Pakiet Marketplace został pomyślnie zainstalowany.',
        ],

        'version' => [
            'description' => 'Wyświetla aktualną wersję pakietu Marketplace.',
            'comment'     => 'Wersja Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Szanowny/a :customer_name',
        'dear-admin'  => 'Szanowny/a Administratorze',
        'dear-seller' => 'Szanowny sprzedawco',

        'seller' => [
            'registration' => [
                'date'        => 'Data Rejestracji:',
                'description' => 'Z przyjemnością informujemy o nowej rejestracji sprzedawcy na naszej platformie. Proszę poświęcić chwilę, aby powitać sprzedawcę na naszej platformie.',
                'details'     => 'Oto szczegóły:',
                'email'       => 'Adres E-mail:',
                'greeting'    => 'Mam nadzieję, że ta wiadomość do Ciebie dotrze w dobrym stanie.',
                'name'        => 'Nazwa Sprzedawcy:',
                'shop'        => 'URL Sklepu:',
                'subject'     => 'Nowa Rejestracja Sprzedawcy',
            ],

            'forgot-password' => [
                'description'    => 'Otrzymujesz tę wiadomość e-mail, ponieważ otrzymaliśmy prośbę o zresetowanie hasła do Twojego konta.',
                'greeting'       => 'Zapomniałeś hasła!',
                'reset-password' => 'Zresetuj hasło',
                'subject'        => 'E-mail z resetem hasła',
            ],

            'welcome' => [
                'description' => 'Witamy na pokładzie! Cieszymy się, że dołączyłeś do rodziny. Twoja obecność jako sprzedawcy dodaje ogromną wartość naszej platformie, i z niecierpliwością oczekujemy udanej współpracy.',
                'greeting'    => 'Witamy i dziękujemy za rejestrację!',
                'subject'     => 'Powiadomienie o Powitaniu Sprzedawcy',
            ],

            'approval' => [
                'approved'    => 'Twoja prośba o zostanie sprzedawcą została zaakceptowana.',
                'disapproved' => 'Twoja prośba o zostanie sprzedawcą została odrzucona.',
                'greeting'    => 'Witamy i dziękujemy za rejestrację!',
                'subject'     => 'Powiadomienie o Zatwierdzeniu Sprzedawcy',
            ],

            'update' => [
                'description' => 'Twój profil został pomyślnie zaktualizowany.',
                'greeting'    => 'Mam nadzieję, że ta wiadomość do Ciebie dotrze w dobrym stanie.',
                'subject'     => 'Powiadomienie o Aktualizacji Profilu Sprzedawcy',
            ],

            'good-bye' => [
                'description' => 'Praca z Tobą była przyjemnością, i jestem naprawdę wdzięczny za Twoją profesjonalizm, zaangażowanie i wysoką jakość Twoich produktów/usług. Twoje zaangażowanie w zapewnienie satysfakcji klienta nie poszło na próżno, i było kluczowym czynnikiem naszego pozytywnego doświadczenia.',
                'greeting'    => 'Mam nadzieję, że ta wiadomość do Ciebie dotrze w dobrym stanie.',
                'subject'     => 'Powiadomienie o Pożegnaniu Sprzedawcy',
            ],

            'product-approval' => [
                'approved'    => 'Twój produkt :name został zatwierdzony.',
                'disapproved' => 'Twój produkt :name został odrzucony.',
                'greeting'    => 'Witamy i dziękujemy za rejestrację u nas!',
                'subject'     => 'Powiadomienie o Zatwierdzeniu Produktu przez Sprzedawcę',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Masz nowe zamówienie :order_id złożone :created_at',
                    'subject'  => 'Potwierdzenie Nowego Zamówienia',
                    'summary'  => 'Podsumowanie Zamówienia',
                    'title'    => 'Potwierdzenie Zamówienia!',
                ],

                'canceled' => [
                    'greeting' => 'Zamówienie :order_id zostało anulowane',
                    'subject'  => 'Potwierdzenie anulowania zamówienia',
                    'summary'  => 'Podsumowanie zamówienia',
                    'title'    => 'Zamówienie anulowane!',
                ],

                'billing-address'   => 'Adres rozliczeniowy',
                'contact'           => 'Kontakt',
                'discount'          => 'Rabat',
                'grand-total'       => 'Razem',
                'name'              => 'Imię',
                'payment'           => 'Płatność',
                'price'             => 'Cena',
                'qty'               => 'Ilość',
                'shipping'          => 'Dostawa',
                'shipping-address'  => 'Adres dostawy',
                'shipping-handling' => 'Obsługa i wysyłka',
                'sku'               => 'SKU',
                'subtotal'          => 'Suma częściowa',
                'tax'               => 'Podatek',
            ],

            'payment-request' => [
                'greeting'  => 'Mam nadzieję, że ta wiadomość do Ciebie dotarła w dobrym stanie.',
                'paid'      => 'Cześć.. Otrzymałeś płatność za zamówienie :order_id.',
                'requested' => 'Sprzedawca :seller_name jest proszony o zapłatę za zamówienie :order_id.',
                'subject'   => 'Powiadomienie o żądaniu płatności od sprzedawcy',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-mail:- :email',
            'greeting' => 'Mam nadzieję, że ta wiadomość do Ciebie dotrze.',
            'info'     => 'Witaj, :name ma do Ciebie pytanie. Proszę przejrzyj poniższe szczegóły.',
            'query'    => 'Pytanie: :query',
            'subject'  => 'Powiadomienie o kontakcie z sprzedawcą',
            'topic'    => 'Temat: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Witaj, ":name" zgłosił problem z produktem ":product_name" sprzedawcy ":seller_name". Proszę zapoznać się ze szczegółami poniżej.',
            'greeting'   => 'Mam nadzieję, że ta wiadomość zastanie Cię w dobrym zdrowiu.',
            'reason'     => 'Powód:- :reason',
            'seller-msg' => 'Witaj, ":name" zgłosił problem z Twoim produktem ":product_name". Proszę zapoznać się ze szczegółami poniżej.',
            'subject'    => 'Powiadomienie o zgłoszeniu produktu',
        ],

        'report-seller' => [
            'admin-msg'  => 'Witaj, :name zgłosił problem dotyczący :seller_name. Proszę przejrzyj poniższe szczegóły.',
            'greeting'   => 'Mam nadzieję, że ta wiadomość do Ciebie dotrze.',
            'reason'     => 'Powód: :reason',
            'seller-msg' => 'Witaj, :name zgłosił problem dotyczący Ciebie. Proszę przejrzyj poniższe szczegóły.',
            'subject'    => 'Powiadomienie o zgłoszeniu sprzedawcy',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Utwórz konto sprzedawcy Velocity',
            'banner-description'  => 'Velocity może być świetną platformą do sprzedaży Twoich produktów nowoczesnym firmom w Indiach. Postępując zgodnie z tymi wskazówkami, możesz przygotować się na sukces jako sprzedawca Velocity!',
            'banner-btn-title'    => 'Otwórz sklep',
            'feature-title'       => 'Dlaczego sprzedawcy uwielbiają sprzedawać na Velocity?',
            'feature-description' => 'Sprzedawcy uwielbiają platformy o wysokiej prędkości, ponieważ oferują one potencjał zwiększonej sprzedaży, lepszą ekspozycję i efektywne doświadczenie sprzedaży, które może przyczynić się do rozwoju i sukcesu biznesu.',
            'feature-box1-title'  => 'Zwiększone możliwości sprzedaży',
            'feature-box1-desc'   => 'Sprzedawcy uwielbiają platformy o wysokiej prędkości, ponieważ oferują one potencjał zwiększonej sprzedaży, lepszą ekspozycję i efektywne doświadczenie sprzedaży, które może przyczynić się do rozwoju i sukcesu biznesu.',
            'feature-box2-title'  => 'Szybszy obrót',
            'feature-box2-desc'   => 'Produkty sprzedają się szybciej na platformach o wysokiej prędkości, co prowadzi do szybszego obrotu zapasami i generowania przychodów dla sprzedawców.',
            'feature-box3-title'  => 'Zwiększona widoczność',
            'feature-box3-desc'   => 'Te platformy oferują większą widoczność i ekspozycję produktów sprzedawców, co skutkuje większą liczbą wyświetleń i potencjalnych sprzedaży.',
            'feature-box4-title'  => 'Efektywność i wygoda',
            'feature-box4-desc'   => 'Platformy o wysokiej prędkości często mają usprawnione procesy i narzędzia, które sprawiają, że sprzedaż jest bardziej efektywna, oszczędzając sprzedawcom czas i wysiłek w zarządzaniu ich biznesem online.',
            'journey-title'       => 'Rozpocznij swoją podróż na Velocity',
            'journey-description' => 'Zacznij sprzedawać dużym klientom na całym świecie, przez całą dobę.',
            'journey-step1-title' => 'Zostań sprzedawcą',
            'journey-step1-desc'  => 'Skonfiguruj swój sklep, podając wszystkie podstawowe informacje.',
            'journey-step2-title' => 'Wymień produkty',
            'journey-step2-desc'  => 'Wymień produkty w sklepie, aby klienci mogli je przeglądać i kupować.',
            'journey-step3-title' => 'Otrzymaj zamówienie',
            'journey-step3-desc'  => 'Otrzymuj zamówienia od szerokiej gamy klientów na całym świecie.',
            'journey-step4-title' => 'Dostawa produktu',
            'journey-step4-desc'  => 'Po dostarczeniu produktu i otrzymaniu płatności',
            'journey-step5-title' => 'Płatność',
            'journey-step5-desc'  => 'Żądanie płatności, otrzymaj płatność po potrąceniu prowizji.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Uszkodzony produkt',
            'damaged-product-sold'      => 'Uszkodzony produkt sprzedany przez sprzedawcę',
            'duplicate-product'         => 'Duplikat produktu',
            'duplicate-product-sold'    => 'Duplikat produktu sprzedany przez sprzedawcę',
            'missing-product-parts'     => 'Brakujące części produktu',
            'over-price-product'        => 'Przepłacony produkt',
            'over-price-product-sold'   => 'Przepłacony produkt sprzedany przez sprzedawcę',
            'poor-product-quality'      => 'Słaba jakość produktu',
            'poor-product-quality-sold' => 'Słabej jakości produkt sprzedany przez sprzedawcę',
            'receive-wrong-product'     => 'Otrzymano niewłaściwy produkt',
            'wrong-product-sold'        => 'Niewłaściwy produkt sprzedany przez sprzedawcę',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Pobierz',
                    'export'     => 'Eksportuj',
                    'no-records' => 'Brak danych do eksportu',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Strona główna',
                    'logout'     => 'Wyloguj się',
                    'my-profile' => 'Mój profil',
                    'visit-shop' => 'Odwiedź sklep',

                    'mega-search' => [
                        'customers'                       => 'Klienci',
                        'explore-all-customers'           => 'Przeglądaj wszystkich klientów',
                        'explore-all-matching-customers'  => 'Przeglądaj wszystkich klientów pasujących do “:query” (:count)',
                        'explore-all-matching-orders'     => 'Przeglądaj wszystkie zamówienia pasujące do “:query” (:count)',
                        'explore-all-matching-products'   => 'Przeglądaj wszystkie produkty pasujące do “:query” (:count)',
                        'explore-all-orders'              => 'Przeglądaj wszystkie zamówienia',
                        'explore-all-products'            => 'Przeglądaj wszystkie produkty',
                        'orders'                          => 'Zamówienia',
                        'products'                        => 'Produkty',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'Mega Wyszukiwanie',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Zwiń',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Dodaj obraz',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Dozwolone są tylko pliki obrazów (.jpeg, .jpg, .png, ..).',
                ],

                'videos' => [
                    'add-video-btn'     => 'Dodaj wideo',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Dozwolone są tylko pliki wideo (.mp4, .mov, .ogg ..).',
                ],

                'documents' => [
                    'add-document-btn'  => 'Dodaj dokument',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Dozwolone są tylko pliki dokumentów (:types ..).',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Przód',
                    'next'       => 'Następny',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Rozmiar',
                    'text'       => 'Tekst',
                    'use-cases'  => 'Przypadki użycia',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'communication'     => 'Komunikacja',
            'bookings'          => 'Rezerwacje',
            'customers'         => 'Klienci',
            'dashboard'         => 'Panel główny',
            'extensions'        => 'Rozszerzenia',
            'general'           => 'Ogólne',
            'inventory-sources' => 'Źródła Zapasów',
            'manage-profile'    => 'Zarządzaj Profilem',
            'orders'            => 'Zamówienia',
            'product-reviews'   => 'Recenzje Produktów',
            'products'          => 'Produkty',
            'reporting'         => 'Raportowanie',
            'roles'             => 'Role',
            'sales'             => 'Sprzedaż',
            'seller-reviews'    => 'Recenzje Sprzedawcy',
            'settings'          => 'Ustawienia',
            'transaction'       => 'Transakcje',
            'users'             => 'Użytkownicy',
        ],

        'acl' => [
            'assign'            => 'Przypisz',
            'bookings'          => 'Rezerwacje',
            'cancel'            => 'Anuluj',
            'communication'     => 'Komunikacja',
            'create'            => 'Utwórz',
            'customers'         => 'Klienci',
            'dashboard'         => 'Panel główny',
            'delete'            => 'Usuń',
            'edit'              => 'Edytuj',
            'extensions'        => 'Rozszerzenia',
            'general'           => 'Ogólne',
            'inventory-sources' => 'Źródła Zapasów',
            'invoice'           => 'Faktura',
            'orders'            => 'Zamówienia',
            'payment-request'   => 'Żądanie płatności',
            'print'             => 'Drukuj',
            'print-invoice'     => 'Drukuj fakturę',
            'product-reviews'   => 'Opinie o produktach',
            'products'          => 'Produkty',
            'reporting'         => 'Raportowanie',
            'sales'             => 'Sprzedaż',
            'seller-reviews'    => 'Opinie sprzedawców',
            'settings'          => 'Ustawienia',
            'shipment'          => 'Wysyłka',
            'transactions'      => 'Transakcje',
            'view'              => 'Zobacz',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Dodaj Nowy Produkt',
            'assign'            => 'Przypisz',
            'bookings'          => 'Rezerwacje',
            'communication'     => 'Komunikacja',
            'create'            => 'Utwórz',
            'customers'         => 'Klienci',
            'dashboard'         => 'Panel główny',
            'edit'              => 'Edytuj',
            'extensions'        => 'Rozszerzenia',
            'general'           => 'Ogólne',
            'inventory-sources' => 'Źródła Zapasów',
            'manage-profile'    => 'Zarządzaj Profilem',
            'orders'            => 'Zamówienia',
            'product-reviews'   => 'Recenzje Produktów',
            'products'          => 'Produkty',
            'reporting'         => 'Raportowanie',
            'roles'             => 'Role',
            'sales'             => 'Sprzedaż',
            'seller-reviews'    => 'Recenzje Sprzedawcy',
            'settings'          => 'Ustawienia',
            'title'             => 'Profil',
            'transaction'       => 'Transakcje',
            'users'             => 'Użytkownicy',
            'view'              => 'Wyświetl',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Zaloguj się',
            'create-your-account' => 'Utwórz swoje konto',
            'email'               => 'E-mail',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (Zarejestrowane w Indiach). Wszystkie prawa zastrzeżone.',
            'forgot-pass'         => 'Zapomniałeś hasła?',
            'form-login-text'     => 'Jeśli masz konto, zaloguj się za pomocą swojego adresu e-mail.',
            'invalid-credentials' => 'Sprawdź swoje dane logowania i spróbuj ponownie.',
            'new-seller'          => 'Nowy sprzedawca?',
            'not-approved'        => 'Twoja aktywacja oczekuje na zatwierdzenie administratora',
            'page-title'          => 'Logowanie sprzedawcy',
            'password'            => 'Hasło',
            'show-password'       => 'Pokaż hasło',
            'suspended-message'   => 'Twoje konto zostało zawieszone. Skontaktuj się z administratorem w celu uzyskania informacji.',
            'title'               => 'Zaloguj się',
        ],

        'signup' => [
            'account-exists'   => 'Masz już konto?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Zarejestruj się',
            'confirm-pass'     => 'Potwierdź hasło',
            'email'            => 'E-mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Zarejestrowane w Indiach). Wszystkie prawa zastrzeżone.',
            'form-signup-text' => 'Jeśli jesteś nowy w naszym sklepie, cieszymy się, że możemy Cię mieć jako członka.',
            'name'             => 'Imię',
            'page-title'       => 'Zostań sprzedawcą',
            'password'         => 'Hasło',
            'sign-in-button'   => 'Zaloguj się',
            'success'          => 'Konto utworzone pomyślnie.',
            'url'              => 'URL sklepu',
        ],

        'forgot-password' => [
            'already-sent'         => 'Wysłaliśmy już link do zresetowania hasła na Twój adres e-mail.',
            'back'                 => 'Powrót do logowania?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-mail',
            'email-not-exist'      => 'Nie możemy znaleźć użytkownika z tym adresem e-mail.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (Zarejestrowane w Indiach). Wszystkie prawa zastrzeżone.',
            'forgot-password-text' => 'Jeśli zapomniałeś hasła, odzyskaj je, wpisując swój adres e-mail.',
            'page-title'           => 'Zapomniałeś hasła?',
            'reset-link-sent'      => 'Wysłaliśmy link do resetowania hasła na Twój adres e-mail.',
            'sign-in-button'       => 'Zaloguj się',
            'submit'               => 'Zresetuj hasło',
            'title'                => 'Przywróć hasło',
        ],

        'reset-password' => [
            'back-link-title'  => 'Powrót do logowania',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Potwierdź hasło',
            'email'            => 'Zarejestrowany adres e-mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Zarejestrowane w Indiach). Wszystkie prawa zastrzeżone.',
            'password'         => 'Hasło',
            'submit-btn-title' => 'Zresetuj hasło',
            'title'            => 'Zresetuj hasło',
        ],

        'dashboard' => [
            'add-product'           => 'Dodaj produkt',
            'avg-order-sell'        => 'Średnia sprzedaż zamówienia',
            'category-info'         => 'Nie znaleziono kategorii w wybranym okresie',
            'complete-profile-link' => 'Uzupełnij swój profil &rarr;',
            'completed-orders'      => 'Zakończone (:count)',
            'customer-info'         => 'Nie znaleziono klienta w wybranym okresie',
            'date-range'            => 'Zakres dat',
            'empty-threshold'       => 'Pusty próg',
            'empty-threshold-desc'  => 'Brak dostępnych produktów',
            'end-date'              => 'Data końcowa',
            'hi-comment'            => 'Szybko przejrzyj, co się dzieje w Twoim sklepie.',
            'hi-seller'             => 'Cześć! :seller_name',
            'month'                 => 'W tym miesiącu',
            'no-category'           => 'Brak dostępnych danych',
            'no-customer'           => 'Brak dostępnych danych',
            'no-record-available'   => 'Brak dostępnych rekordów.',
            'order-count'           => ':total Zamówienia',
            'overall-details'       => 'Ogólne informacje',
            'pending-orders'        => 'Oczekujące (:count)',
            'per-unit'              => ':price/Zestaw',
            'processing-orders'     => 'Przetwarzanie (:count)',
            'product-info'          => 'Dodaj powiązane produkty w trakcie ruchu',
            'profile-score'         => 'Wynik profilu',
            'profile-score-desc'    => 'Zmaksymalizuj swoją widoczność, utrzymując pełne informacje o profilu.',
            'qty-stock'             => ':qty w magazynie',
            'refunded-orders'       => 'Zwrócone (:count)',
            'remaining-payout'      => 'Pozostała wypłata',
            'start-date'            => 'Data początkowa',
            'stock-threshold'       => 'Próg zapasów',
            'title'                 => 'Panel główny',
            'today'                 => 'Dzisiaj',
            'top-categories'        => 'Najlepsze kategorie',
            'top-customers'         => 'Klient z największą liczbą sprzedaży',
            'top-products'          => 'Najlepiej sprzedające się produkty',
            'total-customers'       => 'Całkowita liczba klientów',
            'total-orders'          => 'Całkowita liczba zamówień',
            'total-payout'          => 'Całkowita wypłata',
            'total-sale'            => 'Całkowita sprzedaż: :total',
            'total-sales'           => 'Całkowita sprzedaż',
            'view-all-btn'          => 'Wyświetl wszystko',
            'visitor-count'         => 'Odwiedzający - :count',
            'week'                  => 'W tym tygodniu',
            'year'                  => 'W tym roku',
        ],

        'orders' => [
            'index' => [
                'title' => 'Zamówienia',

                'datagrid' => [
                    'canceled'        => 'Anulowane',
                    'closed'          => 'Zamknięte',
                    'commission'      => 'Prowizja',
                    'completed'       => 'Zakończone',
                    'customer'        => 'Klient',
                    'date'            => 'Data',
                    'discount'        => 'Rabat',
                    'email'           => 'Email',
                    'fraud'           => 'Oszustwo',
                    'gross-amt'       => 'Kwota brutto',
                    'id'              => 'Id',
                    'invoice-pending' => 'Faktura oczekująca',
                    'items'           => 'Przedmioty',
                    'location'        => 'Lokalizacja',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Zapłacone',
                    'payment'         => 'Płatność',
                    'payment-request' => 'Żądanie płatności',
                    'pending'         => 'Oczekujące',
                    'pending-payment' => 'Oczekująca płatność',
                    'processing'      => 'Przetwarzanie',
                    'refunded'        => 'Zwrócone',
                    'requested'       => 'Żądane',
                    'seller-earn'     => 'Zarobek sprzedawcy',
                    'shipment'        => 'Wysyłka',
                    'status'          => 'Status',
                    'transaction'     => 'Transakcja',
                    'view'            => 'Zobacz',
                ],

                'payment-req-success'  => 'Twoje żądanie płatności zostało pomyślnie złożone',
                'something-went-wrong' => 'Coś poszło nie tak!',
            ],

            'view' => [
                'admin-commission'           => 'Prowizja administratora',
                'billing-address'            => 'Adres rozliczeniowy',
                'by-customer'                => 'Przez klienta - :name',
                'cancel-btn'                 => 'Anuluj',
                'cancel-confirm-msg'         => 'Czy na pewno chcesz anulować to zamówienie?',
                'cancel-error-msg'           => 'Nie można anulować zamówienia',
                'cancel-success-msg'         => 'Zamówienie zostało anulowane',
                'canceled'                   => 'Anulowane',
                'closed'                     => 'Zamknięte',
                'completed'                  => 'Zakończone',
                'discount'                   => 'Rabat',
                'fraud'                      => 'Oszustwo',
                'grand-total'                => 'Suma końcowa',
                'info'                       => 'Informacje',
                'item-canceled'              => 'Anulowane (:qty_canceled)',
                'item-invoice'               => 'Fakturowane (:qty_invoiced)',
                'item-ordered'               => 'Zamówione (:qty_ordered)',
                'item-refunded'              => 'Zwrócone (:qty_refunded)',
                'item-shipped'               => 'Wysłane (:qty_shipped)',
                'item-status'                => 'Status przedmiotu',
                'payment-method'             => 'Metoda płatności',
                'pending'                    => 'Oczekujące',
                'pending_payment'            => 'Oczekująca płatność',
                'permission-error'           => 'Nie masz uprawnień do anulowania zamówienia',
                'place-on'                   => 'Zamówione dnia : :date',
                'price'                      => 'Cena',
                'price-excl-tax'             => 'Cena (bez VAT)',
                'price-incl-tax'             => 'Cena (z VAT)',
                'processing'                 => 'Przetwarzanie',
                'product'                    => 'Produkt',
                'shipping-address'           => 'Adres dostawy',
                'shipping-handling'          => 'Wysyłka i obsługa',
                'shipping-method'            => 'Metoda dostawy',
                'shipping-handling-excl-tax' => 'Wysyłka i obsługa (bez VAT)',
                'shipping-handling-incl-tax' => 'Wysyłka i obsługa (z VAT)',
                'sub-total-excl-tax'         => 'Suma częściowa (bez VAT)',
                'sub-total-incl-tax'         => 'Suma częściowa (z VAT)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Suma częściowa',
                'tax'                        => 'Podatek',
                'tax-amount'                 => 'Kwota podatku',
                'tax-percent'                => 'Procent podatku',
                'title'                      => 'Zamówienie #:order_id',
                'total'                      => 'Łącznie',
                'total-due'                  => 'Łącznie do zapłaty',
                'total-paid'                 => 'Łącznie opłacone',
                'total-refunded'             => 'Łącznie zwrócone',
                'total-seller-amt'           => 'Łączna kwota sprzedawcy',

                'invoices' => [
                    'bank-details'               => 'Dane bankowe',
                    'bill-to'                    => 'Faktura dla',
                    'contact'                    => 'Kontakt',
                    'contact-number'             => 'Numer kontaktowy',
                    'created-on'                 => 'utworzono dnia: :date_time',
                    'date'                       => 'Data faktury',
                    'discount'                   => 'Rabat',
                    'excl-tax'                   => 'Bez VAT:',
                    'grand-total'                => 'Suma całkowita',
                    'individual-invoice'         => 'Faktura #:invoice_id',
                    'invoice'                    => 'Faktura',
                    'invoice-id'                 => 'ID faktury',
                    'name'                       => 'Nazwa',
                    'order-date'                 => 'Data zamówienia',
                    'order-id'                   => 'ID zamówienia',
                    'payment-method'             => 'Metoda płatności',
                    'payment-terms'              => 'Warunki płatności',
                    'price'                      => 'Cena',
                    'print'                      => 'Drukuj',
                    'product-name'               => 'Nazwa produktu',
                    'qty'                        => 'Ilość',
                    'ship-to'                    => 'Wysyłka do',
                    'shipping-handling'          => 'Wysyłka i obsługa',
                    'shipping-handling-excl-tax' => 'Wysyłka i obsługa (bez VAT)',
                    'shipping-handling-incl-tax' => 'Wysyłka i obsługa (z VAT)',
                    'shipping-method'            => 'Metoda wysyłki',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Suma częściowa',
                    'sub-total-excl-tax'         => 'Suma częściowa (bez VAT)',
                    'sub-total-incl-tax'         => 'Suma częściowa (z VAT)',
                    'tax'                        => 'Podatek',
                    'tax-amount'                 => 'Kwota podatku',
                    'title'                      => 'Faktury',
                    'vat-number'                 => 'Numer VAT',
                ],

                'shipments' => [
                    'carrier-title'       => 'Nazwa przewoźnika',
                    'created-on'          => 'utworzono :date_time',
                    'individual-shipment' => 'Wysyłka #:track_number',
                    'inventory-source'    => 'Źródło inwentarza',
                    'name'                => 'Nazwa',
                    'qty'                 => 'Ilość',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Wysyłki',
                    'tracking-number'     => 'Numer śledzenia',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Opłata korekty',
                    'adjustment-refund'          => 'Zwrot korekty',
                    'created-on'                 => 'utworzono :date_time',
                    'discount'                   => 'Rabat',
                    'grand-total'                => 'Suma ogólna',
                    'individual-refund'          => 'Zwrot #:refund_id',
                    'no-result-found'            => 'Nie znaleziono żadnych rekordów.',
                    'price'                      => 'Cena',
                    'product-name'               => 'Nazwa produktu',
                    'qty'                        => 'Ilość',
                    'shipping-handling'          => 'Dostawa i obsługa',
                    'shipping-handling-excl-tax' => 'Wysyłka i obsługa (bez VAT)',
                    'shipping-handling-incl-tax' => 'Wysyłka i obsługa (z VAT)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Suma częściowa (bez VAT)',
                    'sub-total-incl-tax'         => 'Suma częściowa (z VAT)',
                    'subtotal'                   => 'Suma częściowa',
                    'tax'                        => 'Podatek',
                    'tax-amount'                 => 'Kwota podatku',
                    'title'                      => 'Zwroty',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Faktura',
                'invoice-success'  => 'Faktura została pomyślnie utworzona',
                'permission-error' => 'Nie masz uprawnień do tworzenia faktury zamówienia',
                'price'            => 'Cena',
                'product-name'     => 'Nazwa produktu',
                'qty'              => 'Ilość',
                'qty-error'        => 'Żądana ilość nie jest dostępna',
                'sub-total'        => 'Faktura <br> Suma częściowa',
                'title'            => 'Utwórz fakturę',
                'total'            => 'Łącznie',
            ],

            'shipments' => [
                'avl-qty'          => 'Dostępne: :qty Ilość',
                'carrier-title'    => 'Nazwa przewoźnika',
                'create-btn'       => 'Wysyłka',
                'ordered-qty'      => 'Zamówiona ilość',
                'permission-error' => 'Nie masz uprawnień do tworzenia przesyłki',
                'product-name'     => 'Nazwa produktu',
                'qty'              => 'Ilość',
                'qty-error'        => 'Żądana ilość nie jest dostępna',
                'shipment-success' => 'Przesyłka została pomyślnie utworzona',
                'shipped-qty'      => 'Wysłana ilość',
                'sku'              => 'SKU - :sku',
                'source'           => 'Źródło zamówionego produktu',
                'title'            => 'Utwórz przesyłkę',
                'tracking-id'      => 'Numer śledzenia',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Data utworzenia',
                    'from'         => 'Od',
                    'id'           => 'ID',
                    'order-id'     => 'ID zamówienia',
                    'qty'          => 'Ilość',
                    'to'           => 'Do',
                    'view'         => 'Zobacz',
                ],

                'title'    => 'Rezerwacje',
            ],

            'calendar' => [
                'booking-date'     => 'Data rezerwacji',
                'booking-details'  => 'Szczegóły rezerwacji',
                'canceled'         => 'Anulowane',
                'closed'           => 'Zamknięte',
                'done'             => 'Zakończone',
                'order-id'         => 'ID zamówienia',
                'pending'          => 'Oczekujące',
                'price'            => 'Cena',
                'status'           => 'Status',
                'time-slot'        => 'Przedział czasowy:',
                'view-details'     => 'Zobacz szczegóły',
            ],

            'title' => 'Produkty rezerwacyjne',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Pozostała wypłata',
                'title'                  => 'Transakcje',
                'total-payout'           => 'Całkowita wypłata',
                'total-seller-sale'      => 'Całkowita sprzedaż (Sprzedawca)',
                'total-admin-commission' => 'Całkowita prowizja (Admin)',
                'total-sale-invoiced'    => 'Całkowita sprzedaż (Faktury)',

                'datagrid' => [
                    'comment'        => 'Komentarz',
                    'id'             => 'Id',
                    'total'          => 'Razem',
                    'transaction-id' => 'Identyfikator transakcji',
                ],
            ],

            'view' => [
                'commission'        => 'Prowizja',
                'created-on'        => 'utworzone dnia :date',
                'date'              => 'Data',
                'id'                => 'Identyfikator transakcji',
                'method'            => 'Metoda',
                'name'              => 'Nazwa',
                'payment-method'    => 'Płatność za pomocą :method',
                'price'             => 'Cena',
                'print'             => 'Drukuj',
                'qty'               => 'Ilość',
                'seller-total'      => 'Całkowita kwota dla sprzedawcy',
                'shipping-handling' => 'Dostawa i obsługa',
                'subtotal'          => 'Suma częściowa',
                'tax'               => 'Podatek',
                'title'             => 'Transakcja',
                'total'             => 'Suma',
                'transaction-id'    => 'Numer transakcji: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Dodaj nowy produkt',
                'title'           => 'Produkty',

                'datagrid' => [
                    'active'         => 'Aktywny',
                    'approved'       => 'Zatwierdzone',
                    'category'       => 'Kategoria',
                    'delete'         => 'Usuń',
                    'disable'        => 'Wyłącz',
                    'disapproved'    => 'Odrzucone',
                    'edit'           => 'Edytuj',
                    'id'             => 'ID',
                    'image'          => 'Obraz',
                    'is-approved'    => 'jest zatwierdzone',
                    'name'           => 'Nazwa',
                    'out-of-stock'   => 'Niedostępne',
                    'price'          => 'Cena',
                    'product-number' => 'Numer produktu',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'stock'          => 'Zapas',
                    'total-quantity' => ':quantity Dostępne',
                    'type'           => 'Typ',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Rodzina atrybutów',
                'back'                      => 'Powrót',
                'continue'                  => 'Kontynuuj',
                'create-new-product'        => 'Utwórz nowe produkty',
                'create-your-new-product'   => 'Jeśli produkt nie istnieje, utwórz swój nowy produkt',
                'disable-product-message'   => 'Administrator wyłączył funkcjonalność tworzenia lub przypisywania produktów.',
                'image-placeholder'         => 'Twój obraz',
                'no-result'                 => 'Brak wyników',
                'not-allowed'               => 'Nie masz uprawnień do tworzenia produktu',
                'or'                        => 'Lub',
                'product-type'              => 'Typ produktu',
                'search-product'            => 'Wyszukaj produkty',
                'sell-admin-product-prices' => 'Sprzedaj produkt administratora w swoich cenach.',
                'sell-as-yours'             => 'Sprzedaj jako swój',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Możesz dodać produkt na dwa sposoby, albo z produktu administratora, albo utwórz swój własny.',
                'title'                     => 'Dodaj nowy produkt',
                'update-profile'            => 'Proszę zaktualizować dane profilu',
            ],

            'edit' => [
                'back-btn'      => 'Wstecz',
                'preview'       => 'Podgląd',
                'remove'        => 'Usuń',
                'save-btn'      => 'Zapisz produkt',
                'title'         => 'Edytuj produkt',
                'channels'      => 'Kanały',
                'progress-info' => 'Zwiększ atrakcyjność swojego produktu i pozostaw trwałe wrażenie na klientach, upewniając się, że wszystkie szczegóły produktu są kompletne i dokładne!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Dodaj cenę dla grupy',
                        'all-groups'                => 'Wszystkie grupy',
                        'create-btn'                => 'Dodaj nową',
                        'discount-group-price-info' => 'Dla ilości :qty w cenie obniżonej o :price',
                        'edit-btn'                  => 'Edytuj',
                        'empty-info'                => 'Specjalne ceny dla klientów należących do określonej grupy.',
                        'fixed-group-price-info'    => 'Dla :qty sztuk w stałej cenie :price',
                        'title'                     => 'Cena dla grupy klientów',

                        'create' => [
                            'all-groups'     => 'Wszystkie grupy',
                            'create-title'   => 'Utwórz cenę dla grupy klientów',
                            'customer-group' => 'Grupa klientów',
                            'delete-btn'     => 'Usuń',
                            'discount'       => 'Rabat',
                            'fixed'          => 'Stała',
                            'price'          => 'Cena',
                            'price-type'     => 'Typ ceny',
                            'qty'            => 'Ilość',
                            'save-btn'       => 'Zapisz',
                            'update-title'   => 'Aktualizuj cenę dla grupy klientów',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Oczekująca ilość zamówiona: :qty',
                    'pending-ordered-qty-info' => 'Oczekująca ilość zamówienia zostanie odjęta z odpowiedniego źródła magazynu po wysyłce. W przypadku anulowania zamówienia oczekująca ilość będzie dostępna do sprzedaży.',
                    'title'                    => 'Zasoby magazynowe',
                ],

                'categories' => [
                    'title' => 'Kategorie',
                ],

                'images' => [
                    'info'  => 'Rozmiar obrazu powinien wynosić około 609px X 560px',
                    'title' => 'Obrazy',
                ],

                'videos' => [
                    'error' => 'Wideo nie może być większe niż :max kilobajtów. Proszę wybrać mniejszy plik.',
                    'info'  => 'Maksymalny rozmiar filmu powinien wynosić około :size',
                    'title' => 'Filmy',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Dodaj powiązane produkty w locie.',
                        'info'       => 'Oprócz produktu, który ogląda klient, prezentowane są mu powiązane produkty.',
                        'title'      => 'Powiązane produkty',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Dodaj produkty do sprzedaży w locie.',
                        'info'       => 'Klientowi prezentowane są produkty do sprzedaży krzyżowej, które stanowią alternatywę o wyższej jakości lub jakości premium w stosunku do produktu, który aktualnie ogląda.',
                        'title'      => 'Produkty do sprzedaży krzyżowej',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Dodaj produkty cross-sell w locie.',
                        'info'       => 'Obok koszyka zakupów znajdziesz te produkty typu "impuls zakupowy", które są pozycjonowane jako produkty do sprzedaży krzyżowej, aby uzupełnić towary już dodane do koszyka.',
                        'title'      => 'Produkty do sprzedaży krzyżowej',
                    ],

                    'add-btn'           => 'Dodaj produkt',
                    'delete'            => 'Usuń',
                    'empty-info'        => 'Aby dodać produkty :type, wystarczy to zrobić.',
                    'empty-title'       => 'Dodaj produkt',
                    'image-placeholder' => 'Obraz produktu',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Dodaj opcję',
                            'empty-info'        => 'Aby szybko utworzyć opcje konfigurowalne.',
                            'empty-title'       => 'Dodaj opcję',
                            'info'              => 'To dostosuje prosty produkt.',
                            'title'             => 'Element konfigurowalny',

                            'update-create' => [
                                'is-required'               => 'Wymagane',
                                'max-characters'            => 'Maksymalna liczba znaków',
                                'name'                      => 'Tytuł',
                                'no'                        => 'Nie',
                                'price'                     => 'Cena',
                                'save-btn'                  => 'Zapisz',
                                'supported-file-extensions' => 'Obsługiwane rozszerzenia plików',
                                'title'                     => 'Opcja',
                                'type'                      => 'Typ',
                                'yes'                       => 'Tak',
                            ],

                            'option' => [
                                'add-btn'     => 'Dodaj opcję',
                                'delete'      => 'Usuń',
                                'delete-btn'  => 'Usuń',
                                'edit-btn'    => 'Edytuj',
                                'empty-info'  => 'Aby szybko utworzyć różne kombinacje produktów.',
                                'empty-title' => 'Dodaj opcję',

                                'types' => [
                                    'text' => [
                                        'title' => 'Tekst',
                                    ],

                                    'textarea' => [
                                        'title' => 'Obszar tekstu',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Pole wyboru',
                                    ],

                                    'radio' => [
                                        'title' => 'Radio',
                                    ],

                                    'select' => [
                                        'title' => 'Wybierz',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Wielokrotny wybór',
                                    ],

                                    'date' => [
                                        'title' => 'Data',
                                    ],

                                    'datetime' => [
                                        'title' => 'Data i czas',
                                    ],

                                    'time' => [
                                        'title' => 'Czas',
                                    ],

                                    'file' => [
                                        'title' => 'Plik',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Etykieta',
                                        'price'    => 'Cena',
                                        'save-btn' => 'Zapisz',
                                        'title'    => 'Opcja',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Produkt jest już powiązany z produktem konfigurowalnym, zgrupowanym lub zestawem.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Dodaj wariant',
                        'delete-btn'        => 'Usuń',
                        'edit-btn'          => 'Edytuj',
                        'empty-info'        => 'Aby tworzyć różne kombinacje produktów, wystarczy to zrobić.',
                        'empty-title'       => 'Dodaj wariant',
                        'image-placeholder' => 'Obraz produktu',
                        'info'              => 'Produkty wariantowe zależą od wszystkich możliwych kombinacji atrybutów.',
                        'qty'               => ':qty szt.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Warianty',

                        'create'  => [
                            'description'            => 'Opis',
                            'name'                   => 'Nazwa',
                            'save-btn'               => 'Dodaj',
                            'title'                  => 'Dodaj wariant',
                            'variant-already-exists' => 'Ten wariant już istnieje',
                        ],

                        'edit' => [
                            'disabled'        => 'Wyłączony',
                            'edit-info'       => 'Jeśli chcesz zaktualizować szczegółowe informacje o produkcie, przejdź do',
                            'edit-link-title' => 'Strona szczegółów produktu',
                            'enabled'         => 'Włączony',
                            'images'          => 'Zdjęcia',
                            'name'            => 'Nazwa',
                            'price'           => 'Cena',
                            'quantities'      => 'Ilość',
                            'save-btn'        => 'Zapisz',
                            'sku'             => 'SKU',
                            'status'          => 'Status',
                            'title'           => 'Produkt',
                            'weight'          => 'Waga',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Dodaj obrazy',
                            'apply-to-all-btn'    => 'Zastosuj do wszystkich',
                            'apply-to-all-sku'    => 'Zastosuj cenę do wszystkich SKU.',
                            'edit-inventories'    => 'Edytuj zapasy',
                            'edit-prices'         => 'Edytuj ceny',
                            'price'               => 'Cena',
                            'remove-images'       => 'Usuń obrazy',
                            'remove-variants'     => 'Usuń warianty',
                            'select-action'       => 'Wybierz akcję',
                            'select-variants'     => 'Wybierz warianty',
                            'edit-name'           => 'Edytuj nazwę',
                            'name'                => 'Nazwa',
                            'edit-sku'            => 'Edytuj SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Edytuj wagę',
                            'weight'              => 'Waga',
                            'edit-status'         => 'Edytuj status',
                            'status'              => 'Status',
                            'apply-to-all-name'   => 'Zastosuj nazwę do wszystkich wariantów.',
                            'apply-to-all-weight' => 'Zastosuj wagę do wszystkich wariantów.',
                            'apply-to-all-status' => 'Zastosuj status do wszystkich wariantów.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Dodaj produkt',
                        'default-qty'       => 'Domyślna ilość',
                        'delete'            => 'Usuń',
                        'empty-info'        => 'Aby tworzyć różne kombinacje produktów, wystarczy to zrobić.',
                        'empty-title'       => 'Dodaj produkt',
                        'image-placeholder' => 'Obraz produktu',
                        'info'              => 'Produkt grupowy składa się z samodzielnych pozycji prezentowanych jako zestaw, umożliwiający zmiany lub koordynację ze względu na sezon lub motyw. Każdy produkt można kupić indywidualnie lub jako część grupy.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Produkty grupowe',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Dodaj opcję',
                        'empty-info'        => 'Aby tworzyć opcje pakietu, wystarczy to zrobić.',
                        'empty-title'       => 'Dodaj opcję',
                        'image-placeholder' => 'Obraz produktu',
                        'info'              => 'Produkt wiązany to zestaw wielu produktów lub usług sprzedawanych razem w specjalnej cenie, zapewniający wartość i wygodę klientom.',
                        'title'             => 'Pozycje pakietu',

                        'update-create' => [
                            'checkbox'    => 'Pole wyboru',
                            'is-required' => 'Wymagane',
                            'multiselect' => 'Wielokrotny wybór',
                            'name'        => 'Tytuł',
                            'no'          => 'Nie',
                            'radio'       => 'Przycisk wyboru',
                            'save-btn'    => 'Zapisz',
                            'select'      => 'Wybór',
                            'title'       => 'Opcja',
                            'type'        => 'Typ',
                            'yes'         => 'Tak',
                        ],

                        'option' => [
                            'add-btn'     => 'Dodaj produkt',
                            'default-qty' => 'Domyślna ilość',
                            'delete'      => 'Usuń',
                            'delete-btn'  => 'Usuń',
                            'edit-btn'    => 'Edytuj',
                            'empty-info'  => 'Aby tworzyć różne kombinacje produktów, wystarczy to zrobić.',
                            'empty-title' => 'Dodaj produkt',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Ustaw domyślny produkt za pomocą pola wyboru',
                                    'title' => 'Pole wyboru',
                                ],

                                'multiselect' => [
                                    'info'  => 'Ustaw domyślny produkt za pomocą przycisku wyboru wielokrotnego',
                                    'title' => 'Wielokrotny wybór',
                                ],

                                'radio' => [
                                    'info'  => 'Ustaw domyślny produkt za pomocą przycisku wyboru',
                                    'title' => 'Przycisk wyboru',
                                ],

                                'select' => [
                                    'info'  => 'Ustaw domyślny produkt za pomocą przycisku wyboru',
                                    'title' => 'Wybór',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Dostępne od',
                        'available-to'   => 'Dostępne do',
                        'location'       => 'Lokalizacja',
                        'qty'            => 'Ilość',
                        'title'          => 'Typ rezerwacji',

                        'available-every-week' => [
                            'no'    => 'Nie',
                            'title' => 'Dostępne co tydzień',
                            'yes'   => 'Tak',
                        ],

                        'appointment' => [
                            'break-duration' => 'Czas przerwy między slotami (minuty)',
                            'slot-duration'  => 'Czas trwania slotu (minuty)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nie',
                                'title' => 'Ten sam slot na wszystkie dni',
                                'yes'   => 'Tak',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Dodaj',
                            'break-duration'   => 'Czas przerwy między slotami (minuty)',
                            'close'            => 'Zamknij',
                            'description'      => 'Informacje o rezerwacji',
                            'description-info' => 'Czas trwania zostanie utworzony i wyświetlony zgodnie ze slotami. Będzie unikalny dla wszystkich slotów i widoczny na witrynie sklepowej',
                            'edit'             => 'Edytuj',
                            'many'             => 'Wiele rezerwacji na jeden dzień',
                            'one'              => 'Jedna rezerwacja na wiele dni',
                            'open'             => 'Otwórz',
                            'slot-add'         => 'Dodaj sloty',
                            'slot-duration'    => 'Czas trwania slotu (minuty)',
                            'slot-title'       => 'Czas trwania slotów',
                            'title'            => 'Domyślny',
                            'unavailable'      => 'Niedostępne',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Dodaj sloty',
                                    'close'      => 'Zamknij',
                                    'day'        => 'Dzień',
                                    'edit-title' => 'Edytuj sloty',
                                    'friday'     => 'Piątek',
                                    'from'       => 'Od',
                                    'from-day'   => 'Od dnia',
                                    'from-time'  => 'Od godziny',
                                    'monday'     => 'Poniedziałek',
                                    'open'       => 'Otwórz',
                                    'saturday'   => 'Sobota',
                                    'save'       => 'Zapisz',
                                    'select'     => 'Wybierz',
                                    'status'     => 'Status',
                                    'sunday'     => 'Niedziela',
                                    'thursday'   => 'Czwartek',
                                    'to'         => 'Do',
                                    'to-day'     => 'Do dnia',
                                    'to-time'    => 'Do godziny',
                                    'tuesday'    => 'Wtorek',
                                    'wednesday'  => 'Środa',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Dodaj bilety',
                            'delete'             => 'Usuń',
                            'description'        => 'Opis',
                            'description-info'   => 'Brak dostępnych biletów.',
                            'edit'               => 'Edytuj',
                            'name'               => 'Nazwa',
                            'price'              => 'Cena',
                            'qty'                => 'Ilość',
                            'special-price'      => 'Cena specjalna',
                            'special-price-from' => 'Cena specjalna od',
                            'special-price-to'   => 'Cena specjalna do',
                            'title'              => 'Bilety',
                            'valid-from'         => 'Ważne od',
                            'valid-until'        => 'Ważne do',

                            'modal'              => [
                                'edit' => 'Edytuj bilety',
                                'save' => 'Zapisz',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Dodaj bilety',
                            ],

                            'slots'   => [
                                'add'         => 'Dodaj sloty',
                                'description' => 'Dostępne sloty z czasem trwania.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Na dzień',
                            'daily-hourly'           => 'Oba (na dzień i na godzinę)',
                            'daily-price'            => 'Cena dzienna',
                            'hourly'                 => 'Na godzinę',
                            'hourly-price'           => 'Cena godzinowa',
                            'title'                  => 'Typ wynajmu',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nie',
                                'title' => 'Ten sam slot na wszystkie dni',
                                'yes'   => 'Tak',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Dodaj sloty',
                            'description-info' => 'Czas trwania zostanie utworzony i wyświetlony zgodnie ze slotami. Będzie unikalny dla wszystkich slotów i widoczny na witrynie sklepowej',
                            'save'             => 'Zapisz',
                            'title'            => 'Czas trwania slotów',
                            'unavailable'      => 'Niedostępne',

                            'action'           => [
                                'add' => 'Dodaj',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Piątek',
                                    'from'       => 'Od',
                                    'monday'     => 'Poniedziałek',
                                    'saturday'   => 'Sobota',
                                    'sunday'     => 'Niedziela',
                                    'thursday'   => 'Czwartek',
                                    'to'         => 'Do',
                                    'tuesday'    => 'Wtorek',
                                    'wednesday'  => 'Środa',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Czas przerwy między slotami (minuty)',
                            'guest-capacity'            => 'Pojemność gości',
                            'guest-limit'               => 'Limit gości na stół',
                            'prevent-scheduling-before' => 'Zapobiegaj planowaniu przed',
                            'slot-duration'             => 'Czas trwania slotu (minuty)',

                            'charged-per'               => [
                                'guest'  => 'Gość',
                                'table'  => 'Stół',
                                'title'  => 'Opłata za',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Nie',
                                'title' => 'Ten sam slot na wszystkie dni',
                                'yes'   => 'Tak',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Rezerwacja wizyty',
                            'default'     => 'Domyślna rezerwacja',
                            'event'       => 'Rezerwacja wydarzenia',
                            'many'        => 'Wiele',
                            'one'         => 'Jedna',
                            'rental'      => 'Rezerwacja wynajmu',
                            'table'       => 'Rezerwacja stołu',
                            'title'       => 'Typ',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Dodaj odnośnik',
                            'delete-btn'  => 'Usuń',
                            'edit-btn'    => 'Edytuj',
                            'empty-info'  => 'Aby utworzyć odnośnik w locie.',
                            'empty-title' => 'Dodaj odnośnik',
                            'file'        => 'Plik: ',
                            'info'        => 'Typ produktu do pobrania umożliwia sprzedaż produktów cyfrowych, takich jak e-booki, aplikacje komputerowe, muzyka, gry itp.',
                            'sample-file' => 'Plik próbki: ',
                            'sample-url'  => 'Adres URL próbki: ',
                            'title'       => 'Odnośniki do pobrania',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'downloads'   => 'Dozwolone pobieranie',
                                'file'        => 'Plik',
                                'file-type'   => 'Typ pliku',
                                'name'        => 'Tytuł',
                                'price'       => 'Cena',
                                'sample'      => 'Próbka',
                                'sample-type' => 'Typ próbki',
                                'save-btn'    => 'Zapisz',
                                'title'       => 'Odnośnik',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Dodaj próbkę',
                            'delete-btn'  => 'Usuń',
                            'edit-btn'    => 'Edytuj',
                            'empty-info'  => 'Aby utworzyć próbkę w locie.',
                            'empty-title' => 'Dodaj próbkę',
                            'file'        => 'Plik: ',
                            'info'        => 'Typ produktu do pobrania umożliwia sprzedaż produktów cyfrowych, takich jak e-booki, aplikacje komputerowe, muzyka, gry itp.',
                            'title'       => 'Próbki do pobrania',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'file'      => 'Plik',
                                'file-type' => 'Typ pliku',
                                'name'      => 'Tytuł',
                                'save-btn'  => 'Zapisz',
                                'title'     => 'Odnośnik',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Produkt został pomyślnie utworzony',
            'delete-failed'            => 'Nie udało się usunąć produktu',
            'delete-success'           => 'Produkt został pomyślnie usunięty',
            'product-type-not-allowed' => 'Nie masz uprawnień do sprzedaży produktu typu: :type',
            'saved-inventory-message'  => 'Produkt został pomyślnie zapisany',
            'update-success'           => 'Produkt został pomyślnie zaktualizowany',

            'assign' => [
                'already-selling'     => 'Już sprzedajesz ten produkt',
                'back-btn'            => 'Wstecz',
                'condition'           => 'Stan',
                'create-success'      => 'Produkt został pomyślnie przypisany do sprzedawcy',
                'description'         => 'Opis',
                'image-size'          => 'Rozdzielczość obrazu powinna wynosić 609px X 560px',
                'images'              => 'Obrazy',
                'new'                 => 'Nowy',
                'not-allowed'         => 'Nie masz uprawnień do przypisania tego produktu',
                'old'                 => 'Stary',
                'price'               => 'Cena',
                'product-not-allowed' => 'Nie masz uprawnień do sprzedaży produktu typu :type',
                'quantities'          => 'Ilości',
                'save-btn'            => 'Zapisz',
                'title'               => 'Przypisz Produkt',
                'update-success'      => 'Przypisany produkt został pomyślnie zaktualizowany',

                'product-details' => [
                    'active'            => 'Aktywny',
                    'approved'          => 'Zatwierdzony',
                    'disable'           => 'Wyłącz',
                    'disapproved'       => 'Odrzucony',
                    'image-placeholder' => 'Zdjęcie produktu',
                    'title'             => 'Szczegóły produktu',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Recenzje produktów',

                'datagrid' => [
                    'approved'      => 'Zatwierdzone',
                    'customer'      => 'Klient',
                    'date'          => 'Data',
                    'description'   => 'Opis',
                    'email'         => 'E-mail',
                    'pending'       => 'Oczekujące',
                    'product'       => 'Produkt',
                    'rating'        => 'Ocena',
                    'status'        => 'Status',
                    'title'         => 'Tytuł',
                    'unapproved'    => 'Niezaakceptowane',
                    'update-status' => 'Status aktualizacji',
                ],
            ],

            'update-success' => 'Recenzje produktów zostały pomyślnie zaktualizowane',
            'delete-success' => 'Recenzje produktów zostały pomyślnie usunięte.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Klienci',

                'datagrid' => [
                    'active'      => 'Aktywny',
                    'customer'    => 'Klient',
                    'email'       => 'E-mail',
                    'gender'      => 'Płeć',
                    'group'       => 'Grupa',
                    'inactive'    => 'Nieaktywny',
                    'order-count' => 'Liczba zamówień',
                    'revenue'     => 'Dochód',
                    'status'      => 'Status',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Zarządzaj Profilem',
                'edit-btn' => 'Edytuj Profil',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Imię',
                    'phone'      => 'Numer Telefonu',
                    'shop-slug'  => 'Slug Sklepu',
                    'shop-title' => 'Tytuł Sklepu',
                    'title'      => 'Informacje Ogólne',
                ],

                'about-store' => [
                    'title' => 'O Sklepie',
                ],

                'meta' => [
                    'meta-description' => 'Opis Meta',
                    'meta-keywords'    => 'Słowa Kluczowe Meta',
                    'meta-title'       => 'Tytuł Meta',
                    'title'            => 'Opis Meta',
                ],

                'policy' => [
                    'privacy'  => 'Polityka Prywatności',
                    'return'   => 'Polityka Zwrotów',
                    'shipping' => 'Polityka Wysyłki',
                    'title'    => 'Polityki',
                ],

                'address' => [
                    'city'     => 'Miasto',
                    'country'  => 'Kraj',
                    'postcode' => 'Kod Pocztowy',
                    'state'    => 'Stan',
                    'title'    => 'Adres Sklepu',
                    'address'  => 'Adres',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Linki Społecznościowe',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimalna Kwota Zamówienia',
                ],

                'google-analytics' => [
                    'id'    => 'ID Google Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Prowizja Administratora',
                    'admin-commission-value' => 'Prowizja Administratora :rate% od całkowitej kwoty faktury',
                    'allowed-categories'     => 'Dozwolone Kategorie',
                    'no-categories'          => 'Brak Dostępnych Kategorii',
                    'allowed-product-types'  => 'Dozwolone Typy Produktów',
                    'no-product-types'       => 'Brak Dostępnych Typów Produktów',
                    'payment-methods'        => 'Metody Płatności',
                    'no-payment-methods'     => 'Brak Dostępnych Metod Płatności',
                    'shipping-methods'       => 'Metody Wysyłki',
                    'no-shipping-methods'    => 'Brak Dostępnych Metod Wysyłki',
                    'title'                  => 'Informacje o Sklepie',
                ],
            ],

            'edit' => [
                'banner'              => 'Baner',
                'banner-description'  => 'Prześlij baner w proporcji 13:3, wysokość 375, bezpieczny obszar 375x250, środek na urządzeniach mobilnych',
                'delete-banner'       => 'Usuń Baner',
                'delete-logo'         => 'Usuń Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Prześlij logo w proporcji 1:1',
                'save-btn'            => 'Zapisz Profil',
                'title'               => 'Zarządzaj Profilem',
                'upload-new-banner'   => 'Prześlij Nowy Baner',
                'upload-new-logo'     => 'Prześlij Nowe Logo',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Imię',
                    'phone'      => 'Numer Telefonu',
                    'shop-slug'  => 'Slug Sklepu',
                    'shop-title' => 'Tytuł Sklepu',
                    'title'      => 'Informacje Ogólne',
                ],

                'about-store' => [
                    'title' => 'O Sklepie',
                ],

                'meta' => [
                    'meta-description' => 'Opis Meta',
                    'meta-keywords'    => 'Słowa Kluczowe Meta',
                    'meta-title'       => 'Tytuł Meta',
                    'title'            => 'Opis Meta',
                ],

                'policy' => [
                    'privacy'  => 'Polityka Prywatności',
                    'return'   => 'Polityka Zwrotów',
                    'shipping' => 'Polityka Wysyłki',
                    'title'    => 'Polityki',
                ],

                'address' => [
                    'city'           => 'Miasto',
                    'country'        => 'Kraj',
                    'postcode'       => 'Kod Pocztowy',
                    'state'          => 'Stan',
                    'title'          => 'Adres Sklepu',
                    'select-country' => 'Wybierz Kraj',
                    'select-state'   => 'Wybierz Stan',
                    'street-address' => 'Adres Ulicy',
                    'address'        => 'Adres',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Linki Społecznościowe',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimalna Kwota Zamówienia',
                ],

                'google-analytics' => [
                    'id'    => 'ID Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Twój Profil został pomyślnie zaktualizowany',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Recenzje sprzedawcy',

                'datagrid' => [
                    'approved'    => 'Zatwierdzone',
                    'customer'    => 'Klient',
                    'date'        => 'Data',
                    'description' => 'Opis',
                    'disapproved' => 'Odrzucone',
                    'email'       => 'E-mail',
                    'pending'     => 'Oczekujące',
                    'rating'      => 'Ocena',
                    'status'      => 'Status',
                    'title'       => 'Tytuł',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Zapisz',
                    'title'              => 'Ogólne',
                    'unmatched-password' => 'Bieżące hasło nie pasuje',
                    'update-success'     => 'Ustawienia ogólne zostały pomyślnie zaktualizowane',

                    'regional-setting' => [
                        'currency'      => 'Waluta',
                        'locale'        => 'Język',
                        'select-locale' => 'Wybierz język',
                        'title'         => 'Ustawienia regionalne',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Potwierdź hasło',
                        'current-password' => 'Bieżące hasło',
                        'new-password'     => 'Nowe hasło',
                        'title'            => 'Ustawienia hasła',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Utwórz Rolę',
                    'title'      => 'Role',

                    'datagrid' => [
                        'all'             => 'Wszystko',
                        'custom'          => 'Niestandardowe',
                        'delete'          => 'Usuń',
                        'edit'            => 'Edytuj',
                        'id'              => 'ID',
                        'name'            => 'Nazwa',
                        'permission-type' => 'Typ Uprawnienia',
                    ],
                ],

                'create' => [
                    'access-control' => 'Kontrola Dostępu',
                    'all'            => 'Wszystko',
                    'back-btn'       => 'Wstecz',
                    'custom'         => 'Niestandardowe',
                    'description'    => 'Opis',
                    'general'        => 'Ogólne',
                    'name'           => 'Nazwa',
                    'permissions'    => 'Uprawnienia',
                    'save-btn'       => 'Zapisz Rolę',
                    'title'          => 'Utwórz Rolę',
                ],

                'edit' => [
                    'access-control' => 'Kontrola Dostępu',
                    'all'            => 'Wszystko',
                    'back-btn'       => 'Wstecz',
                    'custom'         => 'Niestandardowe',
                    'description'    => 'Opis',
                    'general'        => 'Ogólne',
                    'name'           => 'Nazwa',
                    'permissions'    => 'Uprawnienia',
                    'save-btn'       => 'Zapisz Rolę',
                    'title'          => 'Edytuj Rolę',
                ],

                'being-used'        => 'Rola jest używana przez sprzedawcę',
                'create-success'    => 'Rola została pomyślnie utworzona',
                'delete-failed'     => 'Usunięcie roli nie powiodło się',
                'delete-success'    => 'Rola została pomyślnie usunięta',
                'last-delete-error' => 'Wymagana jest co najmniej jedna rola',
                'update-success'    => 'Rola została pomyślnie zaktualizowana',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Utwórz Użytkownika',
                    'create-title'     => 'Utwórz Użytkownika',
                    'edit-title'       => 'Edytuj Użytkownika',
                    'email'            => 'E-mail',
                    'name'             => 'Nazwa',
                    'phone-number'     => 'Numer Telefonu',
                    'role'             => 'Rola',
                    'save-btn'         => 'Zapisz Użytkownika',
                    'select-role'      => 'Wybierz Rolę',
                    'password'         => 'Hasło',
                    'confirm-password' => 'Potwierdź Hasło',
                    'status'           => 'Status',
                    'title'            => 'Użytkownicy',
                    'create-success'   => 'Użytkownik został pomyślnie utworzony',
                    'update-success'   => 'Użytkownik został pomyślnie zaktualizowany',
                    'delete-success'   => 'Użytkownik został pomyślnie usunięty',
                    'delete-failed'    => 'Usunięcie użytkownika nie powiodło się',

                    'datagrid' => [
                        'delete'     => 'Usuń',
                        'edit'       => 'Edytuj',
                        'email'      => 'Email',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Imię',
                        'permission' => 'Uprawnienia',
                        'phone'      => 'Telefon',

                        'status' => [
                            'title' => 'Status',

                            'options' => [
                                'active'    => 'Aktywny',
                                'suspended' => 'Zawieszony',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Utwórz źródło inwentarza',
                    'title'      => 'Źródła Inwentarza',

                    'datagrid' => [
                        'active'   => 'Aktywne',
                        'code'     => 'Kod',
                        'delete'   => 'Usuń',
                        'edit'     => 'Edytuj',
                        'id'       => 'ID',
                        'inactive' => 'Nieaktywne',
                        'name'     => 'Nazwa',
                        'priority' => 'Priorytet',
                        'status'   => 'Status',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Dodaj Źródło Inwentarza',
                    'address'        => 'Adres źródła',
                    'back-btn'       => 'Wróć',
                    'city'           => 'Miasto',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informacje kontaktowe',
                    'contact-name'   => 'Imię',
                    'contact-number' => 'Numer kontaktowy',
                    'country'        => 'Kraj',
                    'description'    => 'Opis',
                    'general'        => 'Ogólne',
                    'latitude'       => 'Szerokość geograficzna',
                    'longitude'      => 'Długość geograficzna',
                    'name'           => 'Nazwa',
                    'postcode'       => 'Kod pocztowy',
                    'priority'       => 'Priorytet',
                    'save-btn'       => 'Zapisz Źródło Inwentarza',
                    'select-country' => 'Wybierz kraj',
                    'select-state'   => 'Wybierz stan',
                    'settings'       => 'Ustawienia',
                    'state'          => 'Stan',
                    'status'         => 'Status',
                    'street'         => 'Ulica',
                    'title'          => 'Źródła Inwentarza',
                ],

                'edit' => [
                    'back-btn'       => 'Wróć',
                    'city'           => 'Miasto',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informacje kontaktowe',
                    'contact-name'   => 'Imię',
                    'contact-number' => 'Numer kontaktowy',
                    'country'        => 'Kraj',
                    'description'    => 'Opis',
                    'general'        => 'Ogólne',
                    'latitude'       => 'Szerokość geograficzna',
                    'longitude'      => 'Długość geograficzna',
                    'name'           => 'Nazwa',
                    'postcode'       => 'Kod pocztowy',
                    'priority'       => 'Priorytet',
                    'save-btn'       => 'Zapisz Źródło Inwentarza',
                    'select-country' => 'Wybierz kraj',
                    'select-state'   => 'Wybierz stan',
                    'settings'       => 'Ustawienia',
                    'source-address' => 'Adres źródła',
                    'state'          => 'Stan',
                    'status'         => 'Status',
                    'street'         => 'Ulica',
                    'title'          => 'Edytuj Źródła Inwentarza',
                ],

                'create-success'    => 'Źródło Inwentarza utworzone pomyślnie',
                'delete-failed'     => 'Usuwanie Źródła Inwentarza nie powiodło się',
                'delete-success'    => 'Źródło Inwentarza usunięte pomyślnie',
                'last-delete-error' => 'Ostatnie Źródło Inwentarza nie może być usunięte',
                'update-success'    => 'Źródła Inwentarza zaktualizowane pomyślnie',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Administrator',
                'blocked-message'     => 'Zostałeś zablokowany przez administratora',
                'message-failed'      => 'Nie udało się wysłać wiadomości',
                'message-placeholder' => 'Wpisz tutaj swoją wiadomość...',
                'message-sent'        => 'Wiadomość wysłana pomyślnie',
                'no-message'          => 'Nie znaleziono wiadomości',
                'search-message'      => 'Szukaj wiadomości...',
                'title'               => 'Komunikacja',

                'filters' => [
                    'all-messages'      => 'Wszystkie wiadomości',
                    'prev-fifteen-days' => 'Ostatnie 15 dni',
                    'prev-seven-days'   => 'Ostatnie 7 dni',
                    'prev-six-months'   => 'Ostatnie 6 miesięcy',
                    'prev-thirty-days'  => 'Ostatnie 30 dni',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Porzucone koszyki',
                    'abandoned-products'            => 'Porzucone produkty',
                    'abandoned-rate'                => 'Wskaźnik porzucenia',
                    'abandoned-revenue'             => 'Przychód z porzuceń',
                    'added-to-cart'                 => 'Dodane do koszyka',
                    'added-to-cart-info'            => 'Tylko :progress odwiedzających dodało produkty do koszyka',
                    'all-channels'                  => 'Wszystkie kanały',
                    'average-order-value-over-time' => 'Średnia wartość zamówienia w czasie',
                    'average-sales'                 => 'Średnia wartość zamówienia',
                    'commission'                    => 'Prowizja',
                    'commission-over-time'          => 'Prowizja w czasie',
                    'count'                         => 'Liczba',
                    'end-date'                      => 'Data zakończenia',
                    'id'                            => 'ID',
                    'interval'                      => 'Okres',
                    'name'                          => 'Nazwa',
                    'orders'                        => 'Zamówienia',
                    'orders-over-time'              => 'Zamówienia w czasie',
                    'payment-method'                => 'Metoda płatności',
                    'product-views'                 => 'Wyświetlenia produktów',
                    'product-views-info'            => 'Tylko :progress odwiedzających przegląda produkty',
                    'purchase-funnel'               => 'Lejek zakupowy',
                    'purchased'                     => 'Kupione',
                    'purchased-info'                => 'Tylko :progress odwiedzających dokonało zakupów',
                    'refunds'                       => 'Zwroty',
                    'refunds-over-time'             => 'Zwroty w czasie',
                    'sales-over-time'               => 'Sprzedaż w czasie',
                    'start-date'                    => 'Data rozpoczęcia',
                    'tax-collected'                 => 'Opłaty podatkowe',
                    'tax-collected-over-time'       => 'Opłaty podatkowe w czasie',
                    'title'                         => 'Sprzedaż',
                    'top-payment-methods'           => 'Najpopularniejsze metody płatności',
                    'top-tax-categories'            => 'Najpopularniejsze kategorie podatkowe',
                    'total'                         => 'Razem',
                    'total-commission-paid'         => 'Całkowita zapłacona prowizja',
                    'total-orders'                  => 'Łącznie zamówień',
                    'total-sales'                   => 'Łącznie sprzedaży',
                    'total-visits'                  => 'Liczba odwiedzin',
                    'total-visits-info'             => 'Liczba odwiedzających w sklepie',
                    'view-details'                  => 'Zobacz szczegóły',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Wszystkie kanały',
                    'count'                       => 'Liczba',
                    'customers'                   => 'Klienci',
                    'customers-over-time'         => 'Klienci w czasie',
                    'customers-traffic'           => 'Ruch klientów',
                    'customers-with-most-orders'  => 'Klienci z największą liczbą zamówień',
                    'customers-with-most-reviews' => 'Klienci z największą liczbą opinii',
                    'customers-with-most-sales'   => 'Klienci z największą liczbą sprzedaży',
                    'email'                       => 'E-mail',
                    'end-date'                    => 'Data zakończenia',
                    'id'                          => 'ID',
                    'interval'                    => 'Okres',
                    'name'                        => 'Nazwa',
                    'orders'                      => 'Zamówienia',
                    'reviews'                     => 'Opinie',
                    'start-date'                  => 'Data rozpoczęcia',
                    'title'                       => 'Klienci',
                    'top-customer-groups'         => 'Najpopularniejsze grupy klientów',
                    'total'                       => 'Razem',
                    'total-customers'             => 'Łącznie klientów',
                    'total-visitors'              => 'Liczba odwiedzających',
                    'traffic-over-week'           => 'Ruch przez tydzień',
                    'unique-visitors'             => 'Unikalni odwiedzający',
                    'view-details'                => 'Zobacz szczegóły',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Wszystkie kanały',
                    'channel'                          => 'Kanał',
                    'end-date'                         => 'Data zakończenia',
                    'id'                               => 'ID',
                    'interval'                         => 'Okres',
                    'locale'                           => 'Lokalizacja',
                    'name'                             => 'Nazwa',
                    'orders'                           => 'Zamówienia',
                    'price'                            => 'Cena',
                    'products-added-over-time'         => 'Produkty dodane w czasie',
                    'products-with-most-reviews'       => 'Produkty z największą liczbą opinii',
                    'products-with-most-visits'        => 'Produkty z największą liczbą odwiedzin',
                    'quantities'                       => 'Ilości',
                    'quantities-sold-over-time'        => 'Ilości sprzedane w czasie',
                    'revenue'                          => 'Przychód',
                    'reviews'                          => 'Opinie',
                    'start-date'                       => 'Data rozpoczęcia',
                    'title'                            => 'Produkty',
                    'top-selling-products-by-quantity' => 'Najpopularniejsze produkty pod względem ilości',
                    'top-selling-products-by-revenue'  => 'Najpopularniejsze produkty pod względem przychodu',
                    'total'                            => 'Razem',
                    'total-products-added-to-wishlist' => 'Produkty dodane do listy życzeń',
                    'total-sold-quantities'            => 'Łączna liczba sprzedanych produktów',
                    'view-details'                     => 'Zobacz szczegóły',
                    'visits'                           => 'Odwiedzania',
                ],
            ],

            'view' => [
                'all-channels'  => 'Wszystkie kanały',
                'day'           => 'Dzień',
                'end-date'      => 'Data zakończenia',
                'export-csv'    => 'Eksportuj do formatu CSV',
                'export-xls'    => 'Eksportuj do formatu XLS',
                'month'         => 'Miesiąc',
                'not-available' => 'Brak dostępnych rekordów.',
                'start-date'    => 'Data rozpoczęcia',
                'year'          => 'Rok',
            ],

            'empty' => [
                'info'  => 'Brak danych dla wybranego okresu',
                'title' => 'Brak dostępnych danych',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Wyłączone',
                'enabled'   => 'Włączone',
                'info'      => 'Twórz, zarządzaj i rozwijaj swój sklep internetowy dzięki konfigurowalnym rozszerzeniom eCommerce od Bagisto.',
                'no-result' => 'Brak dostępnych rozszerzeń.',
                'title'     => 'Rozszerzenia',

                'filters' => [
                    'all-extensions' => 'Wszystkie rozszerzenia',
                    'bulk_upload'    => 'Masowe przesyłanie',
                    'gdpr'           => 'RODO',
                    'marketplace'    => 'Marketplace',
                    'payment'        => 'Płatność',
                    'pos'            => 'POS',
                    'shipping'       => 'Wysyłka',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Logo sprzedawcy',
                'switch-to-store' => 'Przełącz na zarządzanie sklepem',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Minimalna kwota zamówienia dla :shop_title to',
                'product-not-available' => 'Produkt jest niedostępny',
                'sold-by'               => 'Sprzedane przez',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Dni* Płatności',
                'deals-in'            => 'Oferty w',
                'featured-seller'     => 'Nasi Wyróżnieni Sprzedawcy',
                'online-business'     => 'Biznes Online',
                'reviews'             => ':count Recenzje',
                'seller-community'    => 'Społeczność Sprzedawców',
                'serviceable-pincode' => 'Obsługiwany Kod pocztowy',
                'start-selling'       => 'Rozpocznij sprzedaż dla dużego klienta na całym świecie, przez całą dobę.',
                'step'                => 'Krok :count',
                'visit-shop'          => 'Odwiedź sklep',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Dodaj do koszyka',
            'delivery-info' => 'Informacje o dostawie znajdują się tutaj',
            'hide'          => 'Ukryj',
            'more-info'     => 'Więcej Informacji',
            'seller-count'  => ':count więcej sprzedawców sprzedaje ten sam produkt',
            'seller-info'   => 'Informacje o sprzedawcy',
            'sold-by'       => 'Sprzedawane przez',
            'top-selling'   => 'Najlepiej sprzedający się',

            'flag' => [
                'alert'              => 'Ostrzeżenie',
                'already-reported'   => 'Już zgłosiłeś ten produkt',
                'create-success'     => 'Produkt zgłoszony pomyślnie',
                'guest-alert'        => 'Musisz się zalogować, aby zgłosić ten produkt',
                'not-allowed'        => 'Nie możesz zgłosić tego produktu bez złożenia zamówienia',
                'other-reason'       => 'Inny powód',
                'reason'             => 'Powód',
                'reason-placeholder' => 'Proszę podać powód',
                'report-product'     => 'Zgłoś produkt',
                'select-reason'      => 'Wybierz powód',
                'submit-btn'         => 'Zatwierdź',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Sprzedawca nie został jeszcze zatwierdzony',
                'products-count'  => 'Produkty (:count)',
                'reviews-count'   => 'Opinie (:count)',
                'search-text'     => 'Szukaj produktów',

                'about' => [
                    'title'           => 'O nas',
                    'about-us'        => 'O nas',
                    'shipping-policy' => 'Polityka wysyłki',
                    'privacy-policy'  => 'Polityka prywatności',
                    'return-policy'   => 'Polityka zwrotów',
                ],

                'contact-form' => [
                    'title'          => 'Kontakt',
                    'name'           => 'Imię',
                    'email'          => 'Email',
                    'subject'        => 'Temat',
                    'query'          => 'Zapytanie',
                    'submit-btn'     => 'Wyślij',
                    'create-success' => 'Twoje zapytanie zostało pomyślnie przesłane',
                ],

                'share' => [
                    'title'     => 'Udostępnij',
                    'share-on'  => 'Udostępnij na',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Ostrzeżenie',
                    'already-reported'   => 'Już zgłosiłeś tego sprzedawcę',
                    'create-success'     => 'Sprzedawca został pomyślnie zgłoszony',
                    'guest-alert'        => 'Musisz się zalogować, aby zgłosić sprzedawcę',
                    'not-allowed'        => 'Nie możesz zgłosić tego sprzedawcy bez złożenia zamówienia',
                    'other-reason'       => 'Inny powód',
                    'reason'             => 'Powód',
                    'reason-placeholder' => 'Podaj powód',
                    'select-reason'      => 'Wybierz powód',
                    'submit-btn'         => 'Wyślij',
                    'title'              => 'Zgłoś problem',
                ],

                'reviews' => [
                    'alert'            => 'Ostrzeżenie',
                    'already-reviewed' => 'Już oceniłeś tego sprzedawcę',
                    'comment'          => 'Komentarz',
                    'create-success'   => 'Sprzedawca oceniony pomyślnie',
                    'customer-review'  => ':count Ocena klienta',
                    'customer-reviews' => 'Opinie klientów',
                    'guest-alert'      => 'Musisz się zalogować, aby zgłosić sprzedawcę',
                    'rating'           => 'Ocena',
                    'review-by'        => 'Ocena przez',
                    'submit-btn'       => 'Wyślij',
                    'title'            => 'Tytuł',
                    'view-all'         => 'Zobacz wszystkie recenzje',
                    'write-review'     => 'Napisz recenzję',
                ],

                'products' => [
                    'no-result' => 'Brak dostępnych produktów',
                    'show'      => 'Pokaż',

                    'sort-by' => [
                        'title' => 'Sortuj według',

                        'options' => [
                            'cheapest-first'  => 'Najtańsze najpierw',
                            'expensive-first' => 'Najdroższe najpierw',
                            'from-a-z'        => 'Od A do Z',
                            'from-z-a'        => 'Od Z do A',
                            'latest-first'    => 'Najnowsze najpierw',
                            'oldest-first'    => 'Najstarsze najpierw',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Wyczyść wszystko',
                        'filter'      => 'Filtruj',
                        'filters'     => 'Filtry:',
                        'price-range' => 'Zakres cen',
                        'sort'        => 'Sortuj',
                    ],
                ],
            ],
        ],
    ],
];
