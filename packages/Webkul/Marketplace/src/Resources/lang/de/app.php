<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marktplatz',
                    'info'  => 'Marktplatz verwalten',

                    'module-info' => [
                        'title'       => 'Modul-Informationen',
                        'info'        => 'Bietet Informationen zur Anwendungsversion.',
                        'app-version' => 'Anwendungsversion: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Verwaltungsprovisionssatz',
                        'description'                  => 'Verwalten Sie die allgemeinen Einstellungen des Marktplatzes wie Status, Provision usw.',
                        'lines-in-street-address'      => 'Zeilen in der Straßenadresse',
                        'lines-in-street-address-info' => 'Geben Sie die Anzahl der Zeilen in der Straßenadresse an. Standard ist eine Zeile.',
                        'status'                       => 'Status',
                        'title'                        => 'Allgemein',
                    ],

                    'product' => [
                        'approval-required'         => 'Genehmigung erforderlich',
                        'description'               => 'Verwalten Sie die Produkteinstellungen des Marktplatzes wie Genehmigungen, Flags usw.',
                        'enable-flag'               => 'Flag aktivieren',
                        'seller-can-assign-product' => 'Verkäufer kann Produkt zuweisen',
                        'seller-can-create-product' => 'Verkäufer kann Produkt erstellen',
                        'show-progress-bar'         => 'Fortschrittsbalken anzeigen',
                        'title'                     => 'Produkt',
                    ],

                    'seller' => [
                        'approval-required'           => 'Genehmigung erforderlich',
                        'can-cancel-order'            => 'Kann Bestellung stornieren',
                        'can-create-invoice'          => 'Kann Rechnung erstellen',
                        'can-create-shipment'         => 'Kann Sendung erstellen',
                        'description'                 => 'Verwalten Sie die Verkäufer-Einstellungen des Marktplatzes wie Genehmigung, Flags usw.',
                        'enable-flag'                 => 'Flag aktivieren',
                        'enable-minimum-order-amount' => 'Mindestbestellmenge aktivieren',
                        'enable-seller-flag'          => 'Verkäufer-Flag aktivieren',
                        'red-flag-limit'              => 'Grenzwert für rote Flagge',
                        'red-flag-limit-info'         => 'Wenn der Verkäufer diesen Grenzwert überschreitet, wird die rote Flagge im Verkäuferprofil angezeigt.',
                        'show-red-flag'               => 'Zeigen Sie eine rote Flagge im Profil an, wenn der Grenzwert überschritten wird',
                        'title'                       => 'Verkäufer',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Grenzwert',
                        'description' => 'Verwalten Sie die empfohlenen Verkäufer des Marktplatzes.',
                        'status'      => 'Status',
                        'title'       => 'Empfohlene Verkäufer',

                        'popularity-criteria' => [
                            'all'              => 'Alle',
                            'maximum-orders'   => 'Maximale Bestellungen',
                            'maximum-products' => 'Maximale Produkte',
                            'maximum-rating'   => 'Maximale Bewertung',
                            'maximum-sale'     => 'Maximaler Verkauf',
                            'title'            => 'Beliebtheitskriterien',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Banner-Schaltflächentitel',
                        'banner-description'  => 'Banner-Beschreibung',
                        'banner-image'        => 'Banner-Bild',
                        'banner-title'        => 'Banner-Titel',
                        'business-hour'       => 'Geschäftszeiten',
                        'community-count'     => 'Community-Zähler',
                        'description'         => 'Passen Sie die Startseite des Marktplatzes an, indem Sie Symbole, Banner und Beschreibungen für einen frischen Look hinzufügen.',
                        'feature-box1-desc'   => 'Funktionsbox 1 Beschreibung',
                        'feature-box1-icon'   => 'Funktionsbox 1 Symbol',
                        'feature-box1-title'  => 'Funktionsbox 1 Überschrift',
                        'feature-box2-desc'   => 'Funktionsbox 2 Beschreibung',
                        'feature-box2-icon'   => 'Funktionsbox 2 Symbol',
                        'feature-box2-title'  => 'Funktionsbox 2 Überschrift',
                        'feature-box3-desc'   => 'Funktionsbox 3 Beschreibung',
                        'feature-box3-icon'   => 'Funktionsbox 3 Symbol',
                        'feature-box3-title'  => 'Funktionsbox 3 Überschrift',
                        'feature-box4-desc'   => 'Funktionsbox 4 Beschreibung',
                        'feature-box4-icon'   => 'Funktionsbox 4 Symbol',
                        'feature-box4-title'  => 'Funktionsbox 4 Überschrift',
                        'feature-description' => 'Funktionsbeschreibung',
                        'feature-image'       => 'Funktionsbild',
                        'feature-title'       => 'Funktionsüberschrift',
                        'journey-description' => 'Reisebeschreibung',
                        'journey-image'       => 'Reisebild',
                        'journey-step1-desc'  => 'Reiseschritt 1 Beschreibung',
                        'journey-step1-icon'  => 'Reiseschritt 1 Symbol',
                        'journey-step1-title' => 'Reiseschritt 1 Überschrift',
                        'journey-step2-desc'  => 'Reiseschritt 2 Beschreibung',
                        'journey-step2-icon'  => 'Reiseschritt 2 Symbol',
                        'journey-step2-title' => 'Reiseschritt 2 Überschrift',
                        'journey-step3-desc'  => 'Reiseschritt 3 Beschreibung',
                        'journey-step3-icon'  => 'Reiseschritt 3 Symbol',
                        'journey-step3-title' => 'Reiseschritt 3 Überschrift',
                        'journey-step4-desc'  => 'Reiseschritt 4 Beschreibung',
                        'journey-step4-icon'  => 'Reiseschritt 4 Symbol',
                        'journey-step4-title' => 'Reiseschritt 4 Überschrift',
                        'journey-step5-desc'  => 'Reiseschritt 5 Beschreibung',
                        'journey-step5-icon'  => 'Reiseschritt 5 Symbol',
                        'journey-step5-title' => 'Reiseschritt 5 Überschrift',
                        'journey-title'       => 'Reiseüberschrift',
                        'payment-duration'    => 'Zahlungsdauer',
                        'serviceable-pincode' => 'Dienstleistungsfähiger Postleitzahl',
                        'title'               => 'Landingpage',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Produkt zuweisen',
            'communications'    => 'Kommunikation',
            'create'            => 'Erstellen',
            'delete'            => 'Löschen',
            'edit'              => 'Bearbeiten',
            'flag-reasons'      => 'Meldegründe',
            'inventory-sources' => 'Inventarquellen',
            'orders'            => 'Bestellungen',
            'pay'               => 'Bezahlen',
            'payment-request'   => 'Zahlungsanfrage',
            'product-reviews'   => 'Produktbewertungen',
            'products'          => 'Produkte',
            'reviews'           => 'Verkäuferbewertungen',
            'seller-categories' => 'Verkäuferkategorien',
            'sellers'           => 'Verkäufer',
            'title'             => 'Marktplatz',
            'transactions'      => 'Transaktionen',
            'view'              => 'Ansehen',
        ],

        'menu' => [
            'communications'    => 'Kommunikation',
            'flag-reasons'      => 'Flag-Gründe',
            'inventory-sources' => 'Inventarquellen',
            'orders'            => 'Bestellungen',
            'payment-requests'  => 'Zahlungsanfragen',
            'product-reviews'   => 'Produktbewertungen',
            'products'          => 'Produkte',
            'seller-categories' => 'Verkäuferkategorien',
            'seller-reviews'    => 'Verkäuferbewertungen',
            'sellers'           => 'Verkäufer',
            'title'             => 'Marktplatz',
            'transactions'      => 'Transaktionen',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Verkäufer hinzufügen',
                'delete-failed'      => 'Löschen des Verkäufers fehlgeschlagen!',
                'delete-success'     => 'Verkäufer erfolgreich gelöscht.',
                'incomplete-profile' => 'Der Verkäufer hat ein unvollständiges Profil!',
                'login-message'      => 'Sie sind als :seller_name angemeldet',
                'pending-orders'     => 'Der Verkäufer hat einige ausstehende Bestellungen',
                'title'              => 'Verkäufer',
                'update-success'     => 'Verkäufer erfolgreich aktualisiert!',

                'datagrid' => [
                    'add-product'     => 'Hinzufügen',
                    'approved'        => 'Genehmigt',
                    'assign-product'  => 'Produkt zuweisen',
                    'created-at'      => 'Erstellt am',
                    'delete'          => 'Löschen',
                    'disapproved'     => 'Abgelehnt',
                    'edit'            => 'Bearbeiten',
                    'email'           => 'E-Mail',
                    'flags'           => 'Fahnen',
                    'id'              => 'ID',
                    'login-as-seller' => 'Als Verkäufer anmelden',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Verkäufername',
                    'shop-url'        => 'Shop-URL',
                    'status'          => 'Status',
                    'suspended'       => 'Ausgesetzt',
                    'total-flags'     => 'Gesamtanzahl der Fahnen: :count',
                    'update-status'   => 'Status aktualisieren',
                ],

                'create'  => [
                    'address'        => 'Adresse',
                    'street-address' => 'Straßenadresse',
                    'city'           => 'Stadt',
                    'country'        => 'Land',
                    'email'          => 'E-Mail',
                    'name'           => 'Name',
                    'phone'          => 'Telefonnummer',
                    'postcode'       => 'Postleitzahl',
                    'save-btn'       => 'Speichern',
                    'select'         => 'Auswählen',
                    'shop-title'     => 'Shop-Titel',
                    'shop-url'       => 'Shop-URL',
                    'state'          => 'Bundesland',
                    'success'        => 'Verkäufer erfolgreich erstellt.',
                    'title'          => 'Verkäufer erstellen',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Verkäufer-Flags',

                    'datagrid' => [
                        'id'             => 'Id',
                        'customer-name'  => 'Kundenname',
                        'customer-email' => 'Kunden-E-Mail',
                        'date'           => 'Datum',
                        'reason'         => 'Grund',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Zurück',
                'image-placeholder' => 'Produktbild',
                'no-result'         => 'Kein Ergebnis gefunden!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Produkte suchen',
            ],

            'assign-product' => [
                'already-selling'     => 'Der Verkäufer verkauft dieses Produkt bereits',
                'assign-successfully' => 'Produkt erfolgreich dem Verkäufer zugewiesen.',
                'back-btn'            => 'Zurück',
                'condition'           => 'Zustand',
                'description'         => 'Beschreibung',
                'new'                 => 'Neu',
                'old'                 => 'Alt',
                'price'               => 'Preis',
                'product-not-allowed' => 'Der Verkäufer darf kein :type Produkt verkaufen.',
                'quantities'          => 'Mengen',
                'save-btn'            => 'Speichern',
                'select-condition'    => 'Zustand auswählen',
                'title'               => 'Produkt zuweisen',

                'seller-details' => [
                    'additional-info' => 'Zusätzliche Informationen',
                    'approved'        => 'Genehmigt',
                    'disapproved'     => 'Abgelehnt',
                    'no-of-products'  => 'Anzahl der Produkte',
                    'status'          => 'Status',
                    'suspended'       => 'Ausgesetzt',
                    'title'           => 'Verkäuferdetails',
                ],

                'product-details' => [
                    'active'            => 'Aktiv',
                    'disable'           => 'Deaktivieren',
                    'title'             => 'Produktdetails',
                    'image-placeholder' => 'Produktbild',
                ],

                'images' => [
                    'info'  => 'Die Bildauflösung sollte etwa 609px x 560px betragen',
                    'title' => 'Bilder',
                ],

                'videos' => [
                    'error' => 'Das Video darf nicht größer als :max Kilobyte sein. Bitte wählen Sie eine kleinere Datei.',
                    'info'  => 'Die maximale Video-Größe sollte etwa :size betragen',
                    'title' => 'Videos',
                ],

                'configurable' => [
                    'delete-btn'        => 'Löschen',
                    'edit-btn'          => 'Bearbeiten',
                    'image-placeholder' => 'Produktbild',
                    'qty'               => 'Menge - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Varianten',

                    'edit' => [
                        'images'     => 'Bilder',
                        'price'      => 'Preis',
                        'quantities' => 'Mengen',
                        'save-btn'   => 'Speichern',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Link hinzufügen',
                        'delete-btn'  => 'Löschen',
                        'edit-btn'    => 'Bearbeiten',
                        'empty-info'  => 'Um unterwegs einen Link zu erstellen.',
                        'empty-title' => 'Link hinzufügen',
                        'file'        => 'Datei : ',
                        'info'        => 'Der Downloadable-Produkttyp ermöglicht den Verkauf digitaler Produkte wie eBooks, Softwareanwendungen, Musik, Spiele usw.',
                        'sample-file' => 'Beispiel-Datei : ',
                        'sample-url'  => 'Beispiel-URL : ',
                        'title'       => 'Downloadbare Links',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Download erlaubt',
                            'file'        => 'Datei',
                            'file-type'   => 'Dateityp',
                            'name'        => 'Titel',
                            'price'       => 'Preis',
                            'sample'      => 'Beispiel',
                            'sample-type' => 'Beispieltyp',
                            'save-btn'    => 'Speichern',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Beispiel hinzufügen',
                        'delete-btn'  => 'Löschen',
                        'edit-btn'    => 'Bearbeiten',
                        'empty-info'  => 'Um unterwegs ein Beispiel zu erstellen.',
                        'empty-title' => 'Beispiel hinzufügen',
                        'file'        => 'Datei : ',
                        'info'        => 'Der Downloadable-Produkttyp ermöglicht den Verkauf digitaler Produkte wie eBooks, Softwareanwendungen, Musik, Spiele usw.',
                        'title'       => 'Downloadbare Beispiele',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'Datei',
                            'file-type' => 'Dateityp',
                            'name'      => 'Titel',
                            'save-btn'  => 'Speichern',
                            'title'     => 'Link',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Zurück',
                'suspended'      => 'Ausgesetzt',
                'title'          => 'Verkäufer bearbeiten',
                'update-btn'     => 'Verkäufer aktualisieren',
                'update-success' => 'Verkäufer erfolgreich aktualisiert.',

                'shop' => [
                    'address'          => 'Adresse',
                    'street-address'   => 'Straßenadresse',
                    'city'             => 'Stadt',
                    'country'          => 'Land',
                    'description'      => 'Beschreibung',
                    'email'            => 'E-Mail',
                    'name'             => 'Name',
                    'phone-number'     => 'Telefonnummer',
                    'postcode'         => 'Postleitzahl',
                    'select'           => 'Auswählen',
                    'shop-title'       => 'Geschäftstitel',
                    'state'            => 'Bundesland',
                    'title'            => 'Geschäftsdetails',
                    'url'              => 'Geschäfts-URL',
                ],

                'profile' => [
                    'banner'       => 'Profilbanner',
                    'banner-size'  => 'Die Größe des Banners sollte 300px x 200px sein',
                    'logo'         => 'Profil-Logo',
                    'logo-size'    => 'Die Größe des Logos sollte 125px x 125px sein',
                    'social-links' => ':name Link',
                    'title'        => 'Profil-Details',
                ],

                'allowed-product' => [
                    'title'  => 'Erlaubte Produkte',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Mindestbestellmenge',
                ],

                'google-analytics-id' => [
                    'title'  => 'Google Analytics-ID',
                ],

                'commission' => [
                    'percentage' => 'Prozentsatz',
                    'status'     => 'Status',
                    'title'      => 'Verkäuferprovision',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta-Beschreibung',
                    'meta-keyword'     => 'Meta-Schlüsselwort',
                    'meta-title'       => 'Meta-Titel',
                    'title'            => 'Meta-Informationen',
                ],

                'policy' => [
                    'privacy'  => 'Datenschutzrichtlinie',
                    'return'   => 'Rückgaberichtlinie',
                    'shipping' => 'Versandrichtlinie',
                    'title'    => 'Richtlinien',
                ],

                'channels' => [
                    'title' => 'Kanal',
                ],

                'users' => [
                    'email' => 'E-Mail',
                    'id'    => 'ID',
                    'name'  => 'Name',
                    'phone' => 'Telefon',
                    'title' => 'Benutzer',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Produkte hinzufügen',
                'delete-success' => 'Produkt erfolgreich gelöscht.',
                'title'          => 'Produkte',
                'update-success' => 'Produkt erfolgreich aktualisiert.',

                'datagrid' => [
                    'approved'       => 'Genehmigt',
                    'delete'         => 'Löschen',
                    'disapproved'    => 'Abgelehnt',
                    'flags'          => 'Flaggen',
                    'id'             => 'ID',
                    'is-owner'       => 'Ist Eigentümer',
                    'no'             => 'Nein',
                    'out-of-stock'   => 'Ausverkauft',
                    'price'          => 'Preis',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Produktname',
                    'product-number' => 'Produktnummer',
                    'product-type'   => 'Produkttyp',
                    'quantity'       => 'Menge',
                    'seller-name'    => 'Verkäufername',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'total-flags'    => 'Gesamtanzahl der Flaggen: :count',
                    'total-quantity' => ':quantity verfügbar',
                    'update-status'  => 'Status aktualisieren',
                    'yes'            => 'Ja',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Produktkennzeichen',

                    'datagrid' => [
                        'customer-email' => 'Kunden-E-Mail',
                        'customer-name'  => 'Kundenname',
                        'date'           => 'Datum',
                        'id'             => 'ID',
                        'reason'         => 'Grund',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Bewertungsdetails',
                'title'          => 'Produktbewertungen',

                'datagrid' => [
                    'approved'      => 'Genehmigt',
                    'comment'       => 'Kommentar',
                    'customer-name' => 'Kundenname',
                    'date'          => 'Datum',
                    'disapproved'   => 'Abgelehnt',
                    'id'            => 'ID',
                    'images'        => 'Bilder',
                    'pending'       => 'Ausstehend',
                    'product'       => 'Produkt',
                    'product-name'  => 'Produktname',
                    'rating'        => 'Bewertung',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Shop-Titel',
                    'status'        => 'Status',
                    'title'         => 'Titel',
                    'update-status' => 'Aktualisierungsstatus',
                    'view'          => 'Ansehen',
                ],
            ],

            'update-success' => 'Produktbewertungen erfolgreich aktualisiert',
            'delete-success' => 'Produktbewertungen wurden erfolgreich gelöscht.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Verkäuferbewertungen',

                'datagrid' => [
                    'approved'            => 'Genehmigt',
                    'comment'             => 'Kommentar',
                    'customer-name'       => 'Kundenname',
                    'date'                => 'Datum',
                    'delete'              => 'Löschen',
                    'disapproved'         => 'Abgelehnt',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Verkäuferbewertungen erfolgreich gelöscht.',
                    'mass-update-success' => 'Verkäuferbewertungen erfolgreich aktualisiert.',
                    'pending'             => 'Ausstehend',
                    'rating'              => 'Bewertung',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Bewertungstitel',
                    'seller-name'         => 'Verkäufername',
                    'shop-title'          => 'Shop-Titel',
                    'status'              => 'Status',
                    'update-status'       => 'Status aktualisieren',
                ],
            ],

            'delete-success' => 'Verkäuferbewertung erfolgreich gelöscht.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Bestellungen',

                'datagrid' => [
                    'canceled'        => 'Abgebrochen',
                    'closed'          => 'Geschlossen',
                    'commission'      => 'Provision',
                    'completed'       => 'Abgeschlossen',
                    'customer'        => 'Kunde',
                    'date'            => 'Datum',
                    'discount'        => 'Rabatt',
                    'email'           => 'E-Mail',
                    'fraud'           => 'Betrug',
                    'gross-amt'       => 'Bruttobetrag',
                    'id'              => 'ID',
                    'items'           => 'Artikel',
                    'location'        => 'Ort',
                    'order-id'        => 'Bestell-ID - #:id',
                    'payment'         => 'Zahlung',
                    'pending'         => 'Ausstehend',
                    'pending-payment' => 'Ausstehende Zahlung',
                    'processing'      => 'Bearbeitung',
                    'seller'          => 'Verkäufer',
                    'seller-earn'     => 'Verdienst',
                    'shipment'        => 'Versand',
                    'shop'            => 'Geschäft',
                    'status'          => 'Status',
                    'view'            => 'Anzeigen',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transaktionen',

                'datagrid' => [
                    'base-total'     => 'Basisgesamtsumme',
                    'comment'        => 'Kommentar',
                    'customer-name'  => 'Kundenname',
                    'id'             => 'ID',
                    'seller-id'      => 'Verkäufer-ID',
                    'seller-name'    => 'Verkäufername',
                    'transaction-id' => 'Transaktions-ID',
                    'view'           => 'Ansehen',
                ],
            ],

            'view' => [
                'commission'        => 'Provision',
                'created-on'        => 'erstellt am :date,',
                'name'              => 'Name',
                'payment-method'    => ':method Zahlung',
                'price'             => 'Preis',
                'qty'               => 'Menge',
                'seller-total'      => 'Verkäufer Gesamt',
                'shipping-handling' => 'Versand & Bearbeitung',
                'subtotal'          => 'Zwischensumme',
                'tax'               => 'Steuer',
                'title'             => 'Transaktionen #:transaction_id',
                'total'             => 'Gesamt',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Grund erstellen',
                'delete-success'      => 'Meldegrund erfolgreich gelöscht.',
                'mass-delete-success' => 'Meldegründe erfolgreich gelöscht.',
                'mass-update-success' => 'Meldegründe erfolgreich aktualisiert.',
                'title'               => 'Meldegründe',

                'datagrid' => [
                    'delete'        => 'Löschen',
                    'edit'          => 'Bearbeiten',
                    'id'            => 'ID',
                    'name'          => 'Name',
                    'update-status' => 'Status aktualisieren',

                    'status' => [
                        'active'  => 'Aktiv',
                        'disable' => 'Deaktivieren',
                        'title'   => 'Status',
                    ],

                    'type' => [
                        'product' => 'Produkt',
                        'seller'  => 'Verkäufer',
                        'title'   => 'Typ',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Zurück',
                'general'  => 'Allgemein',
                'label'    => 'Bezeichnung',
                'product'  => 'Produkt',
                'save-btn' => 'Grund speichern',
                'seller'   => 'Verkäufer',
                'status'   => 'Status',
                'title'    => 'Grund erstellen',
                'type'     => 'Typ',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Zurück',
                'general'  => 'Allgemein',
                'label'    => 'Bezeichnung',
                'product'  => 'Produkt',
                'save-btn' => 'Grund speichern',
                'seller'   => 'Verkäufer',
                'status'   => 'Status',
                'title'    => 'Grund bearbeiten',
                'type'     => 'Typ',
            ],

            'create-success' => 'Meldegrund erfolgreich erstellt.',
            'update-success' => 'Meldegrund erfolgreich aktualisiert.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Kategorie zuweisen',
                'create-success' => 'Kategorie erfolgreich zugewiesen.',
                'delete-failed'  => 'Löschen der Kategorie fehlgeschlagen!',
                'delete-success' => 'Kategorie erfolgreich gelöscht.',
                'title'          => 'Verkäuferkategorien',
                'update-success' => 'Kategorie erfolgreich aktualisiert.',

                'datagrid' => [
                    'delete' => 'Löschen',
                    'edit'   => 'Bearbeiten',
                    'id'     => 'ID',
                    'name'   => 'Name',
                ],
            ],

            'create' => [
                'back-btn'      => 'Zurück',
                'save-btn'      => 'Kategorie speichern',
                'select-seller' => 'Verkäufer auswählen',
                'seller'        => 'Verkäufer',
                'title'         => 'Kategorie zuweisen',
            ],

            'edit' => [
                'back-btn'   => 'Zurück',
                'seller'     => 'Verkäufer',
                'title'      => 'Kategorie bearbeiten',
                'update-btn' => 'Kategorie aktualisieren',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Kommentar',
                'no-amount-remaining'  => 'Kein Betrag mehr zu zahlen!',
                'order-not-found'      => 'Bestellung nicht gefunden!',
                'pay-btn'              => 'Jetzt bezahlen',
                'pay-to-seller'        => 'Zahlung an Verkäufer',
                'payment-success'      => 'Zahlung an Verkäufer erfolgreich durchgeführt!',
                'something-went-wrong' => 'Etwas ist schiefgegangen!',
                'title'                => 'Zahlungsanforderung',

                'datagrid' => [
                    'already-paid'          => 'Bereits bezahlt',
                    'canceled'              => 'Abgebrochen',
                    'closed'                => 'Geschlossen',
                    'completed'             => 'Abgeschlossen',
                    'customer-name'         => 'Kundenname',
                    'date'                  => 'Datum',
                    'email'                 => 'E-Mail',
                    'fraud'                 => 'Betrug',
                    'gross-amt'             => 'Bruttobetrag',
                    'id'                    => 'Bestellnummer',
                    'invoice-pending'       => 'Rechnung ausstehend',
                    'order-canceled'        => 'Bestellung abgebrochen',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Bezahlen',
                    'pending'               => 'Ausstehend',
                    'pending-payment'       => 'Ausstehende Zahlung',
                    'processing'            => 'Verarbeitung',
                    'refunded'              => 'Rückerstattet',
                    'remaining-total'       => 'Verbleibender Gesamtbetrag',
                    'request-payment'       => 'Zahlungsanforderung',
                    'seller'                => 'Verkäufer',
                    'seller-total-invoiced' => 'Verkäufer Gesamt in Rechnung gestellt',
                    'shop'                  => 'Geschäft',
                    'status'                => 'Status',
                    'total-paid'            => 'Gesamt bezahlt',
                    'view'                  => 'Ansehen',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Verkäufer blockieren',
                'block-success'        => 'Verkäufer erfolgreich blockiert!',
                'chat-history-cleared' => 'Chatverlauf erfolgreich gelöscht!',
                'clear-chat-history'   => 'Chatverlauf löschen',
                'exit'                 => 'Beenden',
                'message-failed'       => 'Nachricht senden fehlgeschlagen!',
                'message-sent'         => 'Nachricht erfolgreich gesendet!',
                'no-message'           => 'Keine Nachricht gefunden!',
                'search'               => 'Suche',
                'search-message'       => 'Nachricht suchen',
                'seller-blocked'       => 'Sie haben diesen Verkäufer blockiert. Sie können diesem Verkäufer keine Nachricht senden.',
                'sellers'              => 'Verkäufer',
                'title'                => 'Kommunikation',
                'type-message'         => 'Geben Sie hier Ihre Nachricht ein...',
                'unblock-seller'       => 'Verkäufer entsperren',
                'unblock-success'      => 'Verkäufer erfolgreich entsperrt!',
                'welcome-message'      => 'Willkommen bei der Marktplatz-Kommunikation!',

                'filters' => [
                    'all-messages'      => 'Alle Nachrichten',
                    'prev-fifteen-days' => 'Letzte 15 Tage',
                    'prev-seven-days'   => 'Letzte 7 Tage',
                    'prev-six-months'   => 'Letzte 6 Monate',
                    'prev-thirty-days'  => 'Letzte 30 Tage',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Inventarquellen',

                'datagrid' => [
                    'active'      => 'Aktiv',
                    'code'        => 'Code',
                    'id'          => 'ID',
                    'inactive'    => 'Inaktiv',
                    'name'        => 'Name',
                    'seller-name' => 'Verkäufername',
                    'shop-title'  => 'Ladentitel',
                    'status'      => 'Status',
                ],

                'view' => [
                    'active'         => 'Aktiv',
                    'address'        => 'Quellenadresse',
                    'city'           => 'Stadt',
                    'code'           => 'Code',
                    'contact-email'  => 'E-Mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Kontaktinformationen',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Telefonnummer',
                    'country'        => 'Land',
                    'description'    => 'Beschreibung',
                    'general-info'   => 'Allgemeine Informationen',
                    'inactive'       => 'Inaktiv',
                    'latitude'       => 'Breitengrad',
                    'longitude'      => 'Längengrad',
                    'name'           => 'Name',
                    'postcode'       => 'Postleitzahl',
                    'priority'       => 'Priorität',
                    'seller-info'    => 'Verkäuferinformationen',
                    'seller-name'    => 'Verkäufername',
                    'settings'       => 'Einstellungen',
                    'shop-title'     => 'Ladentitel',
                    'state'          => 'Bundesland',
                    'street'         => 'Straße',
                    'title'          => 'Inventarquelle #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Installieren Sie das Marketplace-Paket.',
            'migrate'     => 'Alle Tabellen in die Datenbank migrieren (dauert eine Weile)...',
            'seed'        => 'Daten in die Datenbank einfügen...',
            'publish'     => 'Assets und Konfigurationen werden veröffentlicht...',
            'cache'       => 'Cache wird geleert...',
            'finish'      => 'Marketplace-Paket erfolgreich installiert.',
        ],

        'version' => [
            'description' => 'Zeigt die aktuelle Version des Marketplace-Pakets an.',
            'comment'     => 'Marketplace-Version: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Liebe:r :customer_name',
        'dear-admin'  => 'Liebe:r Administrator',
        'dear-seller' => 'Lieber Verkäufer',

        'seller' => [
            'registration' => [
                'date'        => 'Registrierungsdatum:',
                'description' => 'Wir freuen uns, Ihnen mitteilen zu können, dass sich ein neuer Händler auf unserer Plattform registriert hat. Bitte nehmen Sie sich einen Moment Zeit, um den Händler auf unserer Plattform willkommen zu heißen.',
                'details'     => 'Hier sind die Details:',
                'email'       => 'E-Mail-Adresse:',
                'greeting'    => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
                'name'        => 'Händlername:',
                'shop'        => 'Shop-URL:',
                'subject'     => 'Neue Händlerregistrierung',
            ],

            'forgot-password' => [
                'description'    => 'Sie erhalten diese E-Mail, weil wir eine Anfrage zum Zurücksetzen des Passworts für Ihr Konto erhalten haben.',
                'greeting'       => 'Passwort vergessen!',
                'reset-password' => 'Passwort zurücksetzen',
                'subject'        => 'E-Mail zum Zurücksetzen des Passworts',
            ],

            'welcome' => [
                'description' => 'Herzlich willkommen! Wir freuen uns, Sie in der Familie begrüßen zu dürfen. Ihre Präsenz als Verkäufer/in fügt unserer Plattform einen immensen Wert hinzu, und wir freuen uns auf eine erfolgreiche Partnerschaft.',
                'greeting'    => 'Willkommen und vielen Dank für Ihre Registrierung bei uns!',
                'subject'     => 'Benachrichtigung zur Händlerbegrüßung',
            ],

            'approval' => [
                'approved'    => 'Ihr Antrag, Verkäufer zu werden, wurde genehmigt.',
                'disapproved' => 'Ihr Antrag, Verkäufer zu werden, wurde abgelehnt.',
                'greeting'    => 'Willkommen und vielen Dank für Ihre Registrierung bei uns!',
                'subject'     => 'Benachrichtigung zur Händlerfreigabe',
            ],

            'update' => [
                'description' => 'Ihr Profil wurde erfolgreich aktualisiert.',
                'greeting'    => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
                'subject'     => 'Benachrichtigung zur Aktualisierung des Händlerprofils',
            ],

            'good-bye' => [
                'description' => 'Die Zusammenarbeit mit Ihnen war eine Freude, und ich bin Ihnen wirklich dankbar für Ihre Professionalität, Hingabe und die hohe Qualität Ihrer Produkte/Dienstleistungen. Ihr Engagement für die Kundenzufriedenheit ist nicht unbeachtet geblieben und war ein entscheidender Faktor für unsere positive Erfahrung.',
                'greeting'    => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
                'subject'     => 'Benachrichtigung zum Abschied des Händlers',
            ],

            'product-approval' => [
                'approved'    => 'Ihr Produkt :name wurde genehmigt.',
                'disapproved' => 'Ihr Produkt :name wurde abgelehnt.',
                'greeting'    => 'Willkommen und vielen Dank für die Registrierung bei uns!',
                'subject'     => 'Benachrichtigung zur Genehmigung von Verkäuferprodukten',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Sie haben eine neue Bestellung :order_id am :created_at aufgegeben',
                    'subject'  => 'Neue Bestellbestätigung',
                    'summary'  => 'Zusammenfassung der Bestellung',
                    'title'    => 'Bestellbestätigung!',
                ],

                'canceled' => [
                    'greeting' => 'Bestellung :order_id wurde storniert',
                    'subject'  => 'Bestellungsstornierungsbestätigung',
                    'summary'  => 'Bestellübersicht',
                    'title'    => 'Bestellung storniert!',
                ],

                'billing-address'   => 'Rechnungsadresse',
                'contact'           => 'Kontakt',
                'discount'          => 'Rabatt',
                'grand-total'       => 'Gesamtsumme',
                'name'              => 'Name',
                'payment'           => 'Zahlung',
                'price'             => 'Preis',
                'qty'               => 'Menge',
                'shipping'          => 'Versand',
                'shipping-address'  => 'Lieferadresse',
                'shipping-handling' => 'Versand und Bearbeitung',
                'sku'               => 'Artikelnummer',
                'subtotal'          => 'Zwischensumme',
                'tax'               => 'Steuern',
            ],

            'payment-request' => [
                'greeting'  => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
                'paid'      => 'Hallo.. Sie haben Zahlung für die Bestellung :order_id erhalten.',
                'requested' => 'Verkäufer :seller_name wird um die Zahlung der Bestellung :order_id gebeten.',
                'subject'   => 'Benachrichtigung zur Zahlungsaufforderung des Verkäufers',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-Mail:- :email',
            'greeting' => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
            'info'     => 'Hallo, :name hat eine Frage an Sie. Bitte überprüfen Sie die Details unten.',
            'query'    => 'Anfrage: :query',
            'subject'  => 'Benachrichtigung über Verkäuferkontakt',
            'topic'    => 'Betreff: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Hallo, ":name" hat ein Problem mit dem Produkt ":product_name" des Verkäufers ":seller_name" gemeldet. Bitte überprüfen Sie die Details unten.',
            'greeting'   => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
            'reason'     => 'Grund:- :reason',
            'seller-msg' => 'Hallo, ":name" hat ein Problem mit Ihrem Produkt ":product_name" gemeldet. Bitte überprüfen Sie die Details unten.',
            'subject'    => 'Produktbericht Benachrichtigung',
        ],

        'report-seller' => [
            'admin-msg'  => 'Hallo, :name hat ein Problem gegen :seller_name gemeldet. Bitte überprüfen Sie die Details unten.',
            'greeting'   => 'Ich hoffe, diese Nachricht erreicht Sie wohlauf.',
            'reason'     => 'Grund: :reason',
            'seller-msg' => 'Hallo, :name hat ein Problem gemeldet, das Sie betrifft. Bitte überprüfen Sie die Details unten.',
            'subject'    => 'Benachrichtigung über Verkäuferbericht',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Erstellen Sie ein Velocity-Verkäuferkonto',
            'banner-description'  => 'Velocity kann eine großartige Plattform sein, um Ihre Produkte an moderne Unternehmen in Indien zu verkaufen. Mit diesen Tipps können Sie sich als Velocity-Verkäufer erfolgreich positionieren!',
            'banner-btn-title'    => 'Shop eröffnen',
            'feature-title'       => 'Warum lieben Verkäufer es, auf Velocity zu verkaufen?',
            'feature-description' => 'Verkäufer lieben hochfrequente Plattformen, weil sie das Potenzial für erhöhte Verkäufe, bessere Sichtbarkeit und ein effizientes Verkaufserlebnis bieten, das zum Geschäftswachstum und Erfolg beitragen kann.',
            'feature-box1-title'  => 'Erhöhte Verkaufschancen',
            'feature-box1-desc'   => 'Verkäufer lieben hochfrequente Plattformen, weil sie das Potenzial für erhöhte Verkäufe, bessere Sichtbarkeit und ein effizientes Verkaufserlebnis bieten, das zum Geschäftswachstum und Erfolg beitragen kann.',
            'feature-box2-title'  => 'Schnellere Abwicklung',
            'feature-box2-desc'   => 'Produkte neigen dazu, sich auf hochfrequenten Plattformen schneller zu verkaufen, was zu einem schnelleren Lagerumschlag und Umsatzgenerierung für Verkäufer führt.',
            'feature-box3-title'  => 'Erhöhte Sichtbarkeit',
            'feature-box3-desc'   => 'Diese Plattformen bieten eine größere Sichtbarkeit und Exposition für Verkäuferprodukte, was zu mehr Ansichten und potenziellen Verkäufen führt.',
            'feature-box4-title'  => 'Effizienz und Bequemlichkeit',
            'feature-box4-desc'   => 'Hochfrequente Plattformen haben oft optimierte Prozesse und Werkzeuge, die das Verkaufen effizienter machen und den Verkäufern Zeit und Mühe bei der Verwaltung ihrer Online-Geschäfte sparen.',
            'journey-title'       => 'Beginnen Sie Ihre Reise auf Velocity',
            'journey-description' => 'Beginnen Sie mit dem Verkauf an große Kunden weltweit, rund um die Uhr.',
            'journey-step1-title' => 'Verkäufer werden',
            'journey-step1-desc'  => 'Richten Sie Ihren Shop mit allen grundlegenden Informationen ein.',
            'journey-step2-title' => 'Produkte auflisten',
            'journey-step2-desc'  => 'Listen Sie die Produkte im Shop auf, damit Kunden sie ansehen und kaufen können.',
            'journey-step3-title' => 'Bestellung erhalten',
            'journey-step3-desc'  => 'Erhalten Sie Bestellungen von einer Vielzahl von Kunden weltweit.',
            'journey-step4-title' => 'Produktlieferung',
            'journey-step4-desc'  => 'Sobald das Produkt geliefert und die Zahlung erhalten wurde.',
            'journey-step5-title' => 'Zahlung',
            'journey-step5-desc'  => 'Zahlungsanforderung, erhalten Sie die Zahlung nach Abzug der Provision.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Beschädigtes Produkt',
            'damaged-product-sold'      => 'Beschädigtes Produkt, verkauft vom Verkäufer',
            'duplicate-product'         => 'Doppeltes Produkt',
            'duplicate-product-sold'    => 'Doppeltes Produkt, verkauft vom Verkäufer',
            'missing-product-parts'     => 'Fehlende Produktteile',
            'over-price-product'        => 'Überteuertes Produkt',
            'over-price-product-sold'   => 'Überteuertes Produkt, verkauft vom Verkäufer',
            'poor-product-quality'      => 'Schlechte Produktqualität',
            'poor-product-quality-sold' => 'Schlechte Produktqualität, verkauft vom Verkäufer',
            'receive-wrong-product'     => 'Falsches Produkt erhalten',
            'wrong-product-sold'        => 'Falsches Produkt, verkauft vom Verkäufer',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Herunterladen',
                    'export'     => 'Exportieren',
                    'no-records' => 'Nichts zum Exportieren',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Startseite',
                    'logout'     => 'Abmelden',
                    'my-profile' => 'Mein Profil',
                    'visit-shop' => 'Shop besuchen',

                    'mega-search' => [
                        'customers'                      => 'Kunden',
                        'explore-all-customers'          => 'Alle Kunden erkunden',
                        'explore-all-matching-customers' => 'Alle Kunden erkunden, die zu “:query” passen (:count)',
                        'explore-all-matching-orders'    => 'Alle Bestellungen erkunden, die zu “:query” passen (:count)',
                        'explore-all-matching-products'  => 'Alle Produkte erkunden, die zu “:query” passen (:count)',
                        'explore-all-orders'             => 'Alle Bestellungen erkunden',
                        'explore-all-products'           => 'Alle Produkte erkunden',
                        'orders'                         => 'Bestellungen',
                        'products'                       => 'Produkte',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'Mega-Suche',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Einklappen',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Bild hinzufügen',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Nur Bilddateien (.jpeg, .jpg, .png, ..) sind erlaubt.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Video hinzufügen',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Nur Videodateien (.mp4, .mov, .ogg ..) sind erlaubt.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Dokument hinzufügen',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Nur Dokumentdateien (:types ..) sind erlaubt.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Vorne',
                    'next'       => 'Weiter',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Größe',
                    'text'       => 'Text',
                    'use-cases'  => 'Anwendungsfälle',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Buchungen',
            'communication'     => 'Kommunikation',
            'customers'         => 'Kunden',
            'dashboard'         => 'Dashboard',
            'extensions'        => 'Erweiterungen',
            'general'           => 'Allgemein',
            'inventory-sources' => 'Inventarquellen',
            'manage-profile'    => 'Profil verwalten',
            'orders'            => 'Bestellungen',
            'product-reviews'   => 'Produktbewertungen',
            'products'          => 'Produkte',
            'reporting'         => 'Berichterstattung',
            'roles'             => 'Rollen',
            'sales'             => 'Verkäufe',
            'seller-reviews'    => 'Verkäuferbewertungen',
            'settings'          => 'Einstellungen',
            'transaction'       => 'Transaktionen',
            'users'             => 'Benutzer',
        ],

        'acl' => [
            'assign'            => 'Zuweisen',
            'bookings'          => 'Buchungen',
            'cancel'            => 'Abbrechen',
            'communication'     => 'Kommunikation',
            'create'            => 'Erstellen',
            'customers'         => 'Kunden',
            'dashboard'         => 'Dashboard',
            'delete'            => 'Löschen',
            'edit'              => 'Bearbeiten',
            'extensions'        => 'Erweiterungen',
            'general'           => 'Allgemein',
            'inventory-sources' => 'Inventarquellen',
            'invoice'           => 'Rechnung',
            'orders'            => 'Bestellungen',
            'payment-request'   => 'Zahlungsanforderung',
            'print'             => 'Drucken',
            'print-invoice'     => 'Rechnung drucken',
            'product-reviews'   => 'Produktbewertungen',
            'products'          => 'Produkte',
            'reporting'         => 'Berichterstattung',
            'sales'             => 'Verkäufe',
            'seller-reviews'    => 'Verkäuferbewertungen',
            'settings'          => 'Einstellungen',
            'shipment'          => 'Versand',
            'transactions'      => 'Transaktionen',
            'view'              => 'Ansehen',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Neues Produkt hinzufügen',
            'assign'            => 'Zuweisen',
            'bookings'          => 'Buchungen',
            'communication'     => 'Kommunikation',
            'create'            => 'Erstellen',
            'customers'         => 'Kunden',
            'dashboard'         => 'Dashboard',
            'edit'              => 'Bearbeiten',
            'extensions'        => 'Erweiterungen',
            'general'           => 'Allgemein',
            'inventory-sources' => 'Inventarquellen',
            'manage-profile'    => 'Profil verwalten',
            'orders'            => 'Bestellungen',
            'product-reviews'   => 'Produktbewertungen',
            'products'          => 'Produkte',
            'reporting'         => 'Berichterstattung',
            'roles'             => 'Rollen',
            'sales'             => 'Verkäufe',
            'seller-reviews'    => 'Verkäuferbewertungen',
            'settings'          => 'Einstellungen',
            'title'             => 'Profil',
            'transaction'       => 'Transaktionen',
            'users'             => 'Benutzer',
            'view'              => 'Ansehen',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Anmelden',
            'create-your-account' => 'Erstellen Sie Ihr Konto',
            'email'               => 'E-Mail',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (registriert in Indien). Alle Rechte vorbehalten.',
            'forgot-pass'         => 'Passwort vergessen?',
            'form-login-text'     => 'Wenn Sie bereits ein Konto haben, melden Sie sich mit Ihrer E-Mail-Adresse an.',
            'invalid-credentials' => 'Bitte überprüfen Sie Ihre Anmeldedaten und versuchen Sie es erneut.',
            'new-seller'          => 'Neuer Verkäufer?',
            'not-approved'        => 'Ihre Aktivierung erfordert die Genehmigung des Administrators',
            'page-title'          => 'Verkäuferanmeldung',
            'password'            => 'Passwort',
            'show-password'       => 'Passwort anzeigen',
            'suspended-message'   => 'Ihr Konto wurde gesperrt. Bitte kontaktieren Sie den Administrator bei Fragen.',
            'title'               => 'Anmelden',
        ],

        'signup' => [
            'account-exists'   => 'Sie haben bereits ein Konto?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Registrieren',
            'confirm-pass'     => 'Passwort bestätigen',
            'email'            => 'E-Mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (registriert in Indien). Alle Rechte vorbehalten.',
            'form-signup-text' => 'Wenn Sie neu in unserem Geschäft sind, freuen wir uns, Sie als Mitglied begrüßen zu dürfen.',
            'name'             => 'Name',
            'page-title'       => 'Verkäufer werden',
            'password'         => 'Passwort',
            'sign-in-button'   => 'Anmelden',
            'success'          => 'Konto erfolgreich erstellt.',
            'url'              => 'Shop-URL',
        ],

        'forgot-password' => [
            'already-sent'         => 'Wir haben den Link zum Zurücksetzen des Passworts bereits per E-Mail gesendet.',
            'back'                 => 'Zurück zur Anmeldung?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-Mail',
            'email-not-exist'      => 'Wir können keinen Benutzer mit dieser E-Mail-Adresse finden.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (registriert in Indien). Alle Rechte vorbehalten.',
            'forgot-password-text' => 'Wenn Sie Ihr Passwort vergessen haben, stellen Sie es wieder her, indem Sie Ihre E-Mail-Adresse eingeben.',
            'page-title'           => 'Passwort vergessen?',
            'reset-link-sent'      => 'Wir haben Ihnen den Link zum Zurücksetzen des Passworts per E-Mail gesendet.',
            'sign-in-button'       => 'Anmelden',
            'submit'               => 'Passwort zurücksetzen',
            'title'                => 'Passwort wiederherstellen',
        ],

        'reset-password' => [
            'back-link-title'  => 'Zurück zur Anmeldung',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Passwort bestätigen',
            'email'            => 'Registrierte E-Mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (registriert in Indien). Alle Rechte vorbehalten.',
            'password'         => 'Passwort',
            'submit-btn-title' => 'Passwort zurücksetzen',
            'title'            => 'Passwort zurücksetzen',
        ],

        'dashboard' => [
            'add-product'           => 'Produkt hinzufügen',
            'avg-order-sell'        => 'Durchschnittlicher Bestellverkauf',
            'category-info'         => 'Keine Kategorie für den ausgewählten Zeitraum gefunden',
            'complete-profile-link' => 'Vervollständigen Sie Ihr Profil &rarr;',
            'completed-orders'      => 'Abgeschlossen (:count)',
            'customer-info'         => 'Kein Kunde für den ausgewählten Zeitraum gefunden',
            'date-range'            => 'Datumsbereich',
            'empty-threshold'       => 'Leere Grenze',
            'empty-threshold-desc'  => 'Es sind keine Produkte verfügbar',
            'end-date'              => 'Enddatum',
            'hi-comment'            => 'Überprüfen Sie schnell, was in Ihrem Geschäft los ist.',
            'hi-seller'             => 'Hallo! :seller_name',
            'month'                 => 'Dieser Monat',
            'no-category'           => 'Keine Daten verfügbar',
            'no-customer'           => 'Keine Daten verfügbar',
            'no-record-available'   => 'Keine Datensätze verfügbar.',
            'order-count'           => ':total Bestellungen',
            'overall-details'       => 'Gesamtdetails',
            'pending-orders'        => 'Ausstehend (:count)',
            'per-unit'              => ':price/Pro Einheit',
            'processing-orders'     => 'In Bearbeitung (:count)',
            'product-info'          => 'Fügen Sie unterwegs verwandte Produkte hinzu',
            'profile-score'         => 'Profilpunktzahl',
            'profile-score-desc'    => 'Maximieren Sie Ihre Sichtbarkeit, indem Sie Ihre Profilinformationen vollständig halten.',
            'qty-stock'             => ':qty auf Lager',
            'refunded-orders'       => 'Rückerstattet (:count)',
            'remaining-payout'      => 'Verbleibende Auszahlung',
            'start-date'            => 'Startdatum',
            'stock-threshold'       => 'Bestandsgrenze',
            'title'                 => 'Dashboard',
            'today'                 => 'Heute',
            'top-categories'        => 'Top-Kategorien',
            'top-customers'         => 'Kunden mit den meisten Verkäufen',
            'top-products'          => 'Meistverkaufte Produkte',
            'total-customers'       => 'Gesamtkunden',
            'total-orders'          => 'Gesamtbestellungen',
            'total-payout'          => 'Gesamtauszahlung',
            'total-sale'            => 'Gesamtverkauf: :total',
            'total-sales'           => 'Gesamtumsatz',
            'view-all-btn'          => 'Alle anzeigen',
            'visitor-count'         => 'Besucher - :count',
            'week'                  => 'Diese Woche',
            'year'                  => 'Dieses Jahr',
        ],

        'orders' => [
            'index' => [
                'title' => 'Bestellungen',

                'datagrid' => [
                    'canceled'        => 'Abgebrochen',
                    'closed'          => 'Geschlossen',
                    'commission'      => 'Provision',
                    'completed'       => 'Abgeschlossen',
                    'customer'        => 'Kunde',
                    'date'            => 'Datum',
                    'discount'        => 'Rabatt',
                    'email'           => 'E-Mail',
                    'fraud'           => 'Betrug',
                    'gross-amt'       => 'Bruttobetrag',
                    'id'              => 'Id',
                    'invoice-pending' => 'Rechnung ausstehend',
                    'items'           => 'Artikel',
                    'location'        => 'Ort',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Bezahlt',
                    'payment'         => 'Zahlung',
                    'payment-request' => 'Zahlungsanforderung',
                    'pending'         => 'Ausstehend',
                    'pending-payment' => 'Ausstehende Zahlung',
                    'processing'      => 'Verarbeitung',
                    'refunded'        => 'Erstattet',
                    'requested'       => 'Angefordert',
                    'seller-earn'     => 'Verkäufer Verdienst',
                    'shipment'        => 'Versand',
                    'status'          => 'Status',
                    'transaction'     => 'Transaktion',
                    'view'            => 'Ansicht',
                ],

                'payment-req-success'  => 'Ihre Zahlungsanforderung wurde erfolgreich eingereicht',
                'something-went-wrong' => 'Etwas ist schiefgelaufen!',
            ],

            'view' => [
                'admin-commission'           => 'Admin-Provision',
                'billing-address'            => 'Rechnungsadresse',
                'by-customer'                => 'Von Kunde - :name',
                'cancel-btn'                 => 'Abbrechen',
                'cancel-confirm-msg'         => 'Sind Sie sicher, dass Sie diese Bestellung stornieren möchten?',
                'cancel-error-msg'           => 'Die Bestellung kann nicht storniert werden',
                'cancel-success-msg'         => 'Die Bestellung wurde storniert',
                'canceled'                   => 'Abgebrochen',
                'closed'                     => 'Geschlossen',
                'completed'                  => 'Abgeschlossen',
                'discount'                   => 'Rabatt',
                'fraud'                      => 'Betrug',
                'grand-total'                => 'Gesamtsumme',
                'info'                       => 'Information',
                'item-canceled'              => 'Abgebrochen (:qty_canceled)',
                'item-invoice'               => 'In Rechnung gestellt (:qty_invoiced)',
                'item-ordered'               => 'Bestellt (:qty_ordered)',
                'item-refunded'              => 'Erstattet (:qty_refunded)',
                'item-shipped'               => 'Versandt (:qty_shipped)',
                'item-status'                => 'Artikelstatus',
                'payment-method'             => 'Zahlungsmethode',
                'pending'                    => 'Ausstehend',
                'pending_payment'            => 'Ausstehende Zahlung',
                'permission-error'           => 'Sie haben keine Berechtigung, die Bestellung zu stornieren',
                'place-on'                   => 'Platziert am: :date',
                'price'                      => 'Preis',
                'price-excl-tax'             => 'Preis (ohne MwSt.)',
                'price-incl-tax'             => 'Preis (inkl. MwSt.)',
                'processing'                 => 'Verarbeitung',
                'product'                    => 'Produkt',
                'shipping-address'           => 'Lieferadresse',
                'shipping-handling'          => 'Versand & Bearbeitung',
                'shipping-method'            => 'Versandmethode',
                'shipping-handling-excl-tax' => 'Versand & Handling (Ohne MwSt.)',
                'shipping-handling-incl-tax' => 'Versand & Handling (Mit MwSt.)',
                'sub-total-excl-tax'         => 'Zwischensumme (Ohne MwSt.)',
                'sub-total-incl-tax'         => 'Zwischensumme (Mit MwSt.)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Zwischensumme',
                'tax'                        => 'Steuer',
                'tax-amount'                 => 'Steuersumme',
                'tax-percent'                => 'Steuersatz',
                'title'                      => 'Bestellung #:order_id',
                'total'                      => 'Gesamt',
                'total-due'                  => 'Gesamt ausstehend',
                'total-paid'                 => 'Gesamt bezahlt',
                'total-refunded'             => 'Gesamt erstattet',
                'total-seller-amt'           => 'Gesamtverkäuferbetrag',

                'invoices' => [
                    'bank-details'               => 'Bankdaten',
                    'bill-to'                    => 'Rechnung an',
                    'contact'                    => 'Kontakt',
                    'contact-number'             => 'Kontaktnummer',
                    'created-on'                 => 'erstellt am: :date_time',
                    'date'                       => 'Rechnungsdatum',
                    'discount'                   => 'Rabatt',
                    'excl-tax'                   => 'Ohne Steuer:',
                    'grand-total'                => 'Gesamtsumme',
                    'individual-invoice'         => 'Rechnung #:invoice_id',
                    'invoice'                    => 'Rechnung',
                    'invoice-id'                 => 'Rechnungs-ID',
                    'name'                       => 'Name',
                    'order-date'                 => 'Bestelldatum',
                    'order-id'                   => 'Bestell-ID',
                    'payment-method'             => 'Zahlungsmethode',
                    'payment-terms'              => 'Zahlungsbedingungen',
                    'price'                      => 'Preis',
                    'print'                      => 'Drucken',
                    'product-name'               => 'Produktname',
                    'qty'                        => 'Menge',
                    'ship-to'                    => 'Lieferadresse',
                    'shipping-handling'          => 'Versand & Bearbeitung',
                    'shipping-handling-excl-tax' => 'Versand & Bearbeitung (Ohne Steuer)',
                    'shipping-handling-incl-tax' => 'Versand & Bearbeitung (Mit Steuer)',
                    'shipping-method'            => 'Versandmethode',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Zwischensumme',
                    'sub-total-excl-tax'         => 'Zwischensumme (Ohne Steuer)',
                    'sub-total-incl-tax'         => 'Zwischensumme (Mit Steuer)',
                    'tax'                        => 'Steuer',
                    'tax-amount'                 => 'Steuerbetrag',
                    'title'                      => 'Rechnungen',
                    'vat-number'                 => 'Umsatzsteuer-Identifikationsnummer',
                ],

                'shipments' => [
                    'carrier-title'       => 'Versandunternehmen',
                    'created-on'          => 'erstellt am: :date_time',
                    'individual-shipment' => 'Sendungen #:track_number',
                    'inventory-source'    => 'Bestellte Produktquelle',
                    'name'                => 'Name',
                    'qty'                 => 'Menge',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Sendungen',
                    'tracking-number'     => 'Sendungsnummer',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Anpassungsgebühr',
                    'adjustment-refund'          => 'Anpassungsrückerstattung',
                    'created-on'                 => 'erstellt am: :date_time',
                    'discount'                   => 'Rabatt',
                    'grand-total'                => 'Gesamtsumme',
                    'individual-refund'          => 'Rückerstattung #:refund_id',
                    'no-result-found'            => 'Wir konnten keine Aufzeichnungen finden.',
                    'price'                      => 'Preis',
                    'product-name'               => 'Name',
                    'qty'                        => 'Menge',
                    'shipping-handling'          => 'Versand & Bearbeitung',
                    'shipping-handling-excl-tax' => 'Versand & Bearbeitung (ohne Steuer)',
                    'shipping-handling-incl-tax' => 'Versand & Bearbeitung (inkl. Steuer)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Zwischensumme (ohne Steuer)',
                    'sub-total-incl-tax'         => 'Zwischensumme (inkl. Steuer)',
                    'subtotal'                   => 'Zwischensumme',
                    'tax'                        => 'Steuer',
                    'tax-amount'                 => 'Steuerbetrag',
                    'title'                      => 'Rückerstattungen',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Rechnung',
                'invoice-success'  => 'Rechnung erfolgreich erstellt',
                'permission-error' => 'Sie haben keine Berechtigung, eine Bestellrechnung zu erstellen',
                'price'            => 'Preis',
                'product-name'     => 'Produktname',
                'qty'              => 'Menge',
                'qty-error'        => 'Die angeforderte Menge ist nicht verfügbar',
                'sub-total'        => 'Rechnung <br> Zwischensumme',
                'title'            => 'Rechnung erstellen',
                'total'            => 'Gesamt',
            ],

            'shipments' => [
                'avl-qty'          => 'Verfügbar: :qty Menge',
                'carrier-title'    => 'Versandunternehmen',
                'create-btn'       => 'Senden',
                'ordered-qty'      => 'Bestellte Menge',
                'permission-error' => 'Sie haben keine Berechtigung, eine Sendung zu erstellen',
                'product-name'     => 'Produktname',
                'qty'              => 'Menge',
                'qty-error'        => 'Die angeforderte Menge ist nicht verfügbar',
                'shipment-success' => 'Sendung erfolgreich erstellt',
                'shipped-qty'      => 'Versandte Menge',
                'sku'              => 'SKU - :sku',
                'source'           => 'Bestellte Produktquelle',
                'title'            => 'Sendung erstellen',
                'tracking-id'      => 'Sendungsnummer',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Erstellungsdatum',
                    'from'         => 'Von',
                    'id'           => 'ID',
                    'order-id'     => 'Bestellnummer',
                    'qty'          => 'Menge',
                    'to'           => 'Bis',
                    'view'         => 'Ansehen',
                ],

                'title'    => 'Buchungen',
            ],

            'calendar' => [
                'booking-date'     => 'Buchungsdatum',
                'booking-details'  => 'Buchungsdetails',
                'canceled'         => 'Storniert',
                'closed'           => 'Geschlossen',
                'done'             => 'Erledigt',
                'order-id'         => 'Bestellnummer',
                'pending'          => 'Ausstehend',
                'price'            => 'Preis',
                'status'           => 'Status',
                'time-slot'        => 'Zeitfenster:',
                'view-details'     => 'Details anzeigen',
            ],

            'title' => 'Buchungsprodukte',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Verbleibende Auszahlung',
                'title'                  => 'Transaktionen',
                'total-payout'           => 'Gesamtauszahlung',
                'total-seller-sale'      => 'Gesamtverkauf (Verkäufer)',
                'total-admin-commission' => 'Gesamtprovision (Admin)',
                'total-sale-invoiced'    => 'Gesamtverkauf (In Rechnung gestellt)',

                'datagrid' => [
                    'comment'          => 'Kommentar',
                    'id'               => 'ID',
                    'total'            => 'Gesamt',
                    'transaction-id'   => 'Transaktions-ID',
                ],
            ],

            'view' => [
                'commission'        => 'Provision',
                'created-on'        => 'erstellt am :date,',
                'date'              => 'Datum',
                'id'                => 'Transaktions-ID',
                'method'            => 'Methode',
                'name'              => 'Name',
                'payment-method'    => ':method Zahlung',
                'price'             => 'Preis',
                'print'             => 'Drucken',
                'qty'               => 'Menge',
                'seller-total'      => 'Verkäufer Gesamt',
                'shipping-handling' => 'Versand & Bearbeitung',
                'subtotal'          => 'Zwischensumme',
                'tax'               => 'Steuer',
                'title'             => 'Transaktion',
                'total'             => 'Gesamt',
                'transaction-id'    => 'Transaktionsnummer: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'Neues Produkt hinzufügen',
                'title'             => 'Produkte',

                'datagrid' => [
                    'active'         => 'Aktiv',
                    'approved'       => 'Genehmigt',
                    'category'       => 'Kategorie',
                    'delete'         => 'Löschen',
                    'disable'        => 'Deaktivieren',
                    'disapproved'    => 'Abgelehnt',
                    'edit'           => 'Bearbeiten',
                    'id'             => 'ID',
                    'image'          => 'Bild',
                    'is-approved'    => 'Genehmigt',
                    'name'           => 'Name',
                    'out-of-stock'   => 'Ausverkauft',
                    'price'          => 'Preis',
                    'product-number' => 'Produktnummer',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'stock'          => 'Bestand',
                    'total-quantity' => ':quantity verfügbar',
                    'type'           => 'Typ',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Attributfamilie',
                'back'                      => 'Zurück',
                'continue'                  => 'Weiter',
                'create-new-product'        => 'Neues Produkt erstellen',
                'create-your-new-product'   => 'Wenn das Produkt nicht existiert, erstellen Sie Ihr neues Produkt',
                'disable-product-message'   => 'Der Administrator hat die Funktion zum Erstellen oder Zuweisen von Produkten deaktiviert.',
                'image-placeholder'         => 'Ihr Bild',
                'no-result'                 => 'Kein Ergebnis',
                'not-allowed'               => 'Sie dürfen kein Produkt erstellen',
                'or'                        => 'Oder',
                'product-type'              => 'Produkttyp',
                'search-product'            => 'Produkte suchen',
                'sell-admin-product-prices' => 'Verkaufen Sie Admin-Produkte zu Ihren Preisen.',
                'sell-as-yours'             => 'Als Ihr Produkt verkaufen',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Sie können ein Produkt auf 2 Arten hinzufügen, entweder über das Admin-Produkt oder erstellen Sie Ihr eigenes.',
                'title'                     => 'Neues Produkt hinzufügen',
                'update-profile'            => 'Bitte aktualisieren Sie Ihre Profildetails',
            ],

            'edit' => [
                'back-btn'      => 'Zurück',
                'preview'       => 'Vorschau',
                'remove'        => 'Entfernen',
                'save-btn'      => 'Produkt speichern',
                'title'         => 'Produkt bearbeiten',
                'channels'      => 'Kanäle',
                'progress-info' => 'Steigern Sie die Attraktivität Ihres Produkts und hinterlassen Sie einen bleibenden Eindruck bei Ihren Kunden, indem Sie sicherstellen, dass alle Produktdetails vollständig und korrekt sind!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Gruppenpreis hinzufügen',
                        'all-groups'                => 'Alle Gruppen',
                        'create-btn'                => 'Neu hinzufügen',
                        'discount-group-price-info' => 'Für :price Rabatt ab :qty Stück',
                        'edit-btn'                  => 'Bearbeiten',
                        'empty-info'                => 'Sonderpreise für Kunden in einer bestimmten Gruppe.',
                        'fixed-group-price-info'    => 'Für :qty Stück zum Festpreis von :price',
                        'title'                     => 'Kundengruppenpreis',

                        'create' => [
                            'all-groups'     => 'Alle Gruppen',
                            'create-title'   => 'Kundengruppenpreis erstellen',
                            'customer-group' => 'Kundengruppe',
                            'delete-btn'     => 'Löschen',
                            'discount'       => 'Rabatt',
                            'fixed'          => 'Festpreis',
                            'price'          => 'Preis',
                            'price-type'     => 'Preistyp',
                            'qty'            => 'Menge',
                            'save-btn'       => 'Speichern',
                            'update-title'   => 'Kundengruppenpreis aktualisieren',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Ausstehende Bestellmenge: :qty',
                    'pending-ordered-qty-info' => 'Die ausstehende Bestellmenge wird nach dem Versand von der jeweiligen Lagerquelle abgezogen. Im Falle einer Stornierung steht die ausstehende Menge zum Verkauf zur Verfügung.',
                    'title'                    => 'Bestände',
                ],

                'categories' => [
                    'title' => 'Kategorien',
                ],

                'images' => [
                    'info'  => 'Die Bildauflösung sollte etwa 609px x 560px betragen',
                    'title' => 'Bilder',
                ],

                'videos' => [
                    'error' => 'Das Video darf nicht größer als :max Kilobyte sein. Bitte wählen Sie eine kleinere Datei.',
                    'info'  => 'Die maximale Video-Größe sollte etwa :size betragen',
                    'title' => 'Videos',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Fügen Sie verwandte Produkte hinzu.',
                        'info'       => 'Zusätzlich zum vom Kunden angesehenen Produkt werden ihm verwandte Produkte angezeigt.',
                        'title'      => 'Verwandte Produkte',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Fügen Sie Upsell-Produkte hinzu.',
                        'info'       => 'Dem Kunden werden Upsell-Produkte angezeigt, die als Premium- oder qualitativ hochwertige Alternative zum derzeit angesehenen Produkt dienen.',
                        'title'      => 'Upsell-Produkte',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Fügen Sie Cross-Sell-Produkte hinzu.',
                        'info'       => 'In der Nähe des Einkaufswagens finden Sie diese "Impulskauf"-Produkte, die als Cross-Sell-Produkte positioniert sind, um die bereits in den Warenkorb gelegten Artikel zu ergänzen.',
                        'title'      => 'Cross-Sell-Produkte',
                    ],

                    'add-btn'           => 'Produkt hinzufügen',
                    'delete'            => 'Löschen',
                    'empty-info'        => 'Um :type Produkte hinzuzufügen.',
                    'empty-title'       => 'Produkt hinzufügen',
                    'image-placeholder' => 'Produktbild',
                    'sku'               => 'Artikelnummer - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Option hinzufügen',
                            'empty-info'        => 'Um anpassbare Optionen sofort zu erstellen.',
                            'empty-title'       => 'Option hinzufügen',
                            'info'              => 'Dies wird das einfache Produkt anpassen.',
                            'title'             => 'Anpassbarer Artikel',

                            'update-create' => [
                                'is-required'               => 'Erforderlich',
                                'max-characters'            => 'Maximale Zeichen',
                                'name'                      => 'Titel',
                                'no'                        => 'Nein',
                                'price'                     => 'Preis',
                                'save-btn'                  => 'Speichern',
                                'supported-file-extensions' => 'Unterstützte Dateierweiterungen',
                                'title'                     => 'Option',
                                'type'                      => 'Typ',
                                'yes'                       => 'Ja',
                            ],

                            'option' => [
                                'add-btn'     => 'Option hinzufügen',
                                'delete'      => 'Löschen',
                                'delete-btn'  => 'Löschen',
                                'edit-btn'    => 'Bearbeiten',
                                'empty-info'  => 'Um verschiedene Produktkombinationen sofort zu erstellen.',
                                'empty-title' => 'Option hinzufügen',

                                'types' => [
                                    'text' => [
                                        'title' => 'Text',
                                    ],

                                    'textarea' => [
                                        'title' => 'Textbereich',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Kontrollkästchen',
                                    ],

                                    'radio' => [
                                        'title' => 'Radio',
                                    ],

                                    'select' => [
                                        'title' => 'Auswählen',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Mehrfachauswahl',
                                    ],

                                    'date' => [
                                        'title' => 'Datum',
                                    ],

                                    'datetime' => [
                                        'title' => 'Datum und Uhrzeit',
                                    ],

                                    'time' => [
                                        'title' => 'Zeit',
                                    ],

                                    'file' => [
                                        'title' => 'Datei',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Beschriftung',
                                        'price'    => 'Preis',
                                        'save-btn' => 'Speichern',
                                        'title'    => 'Option',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Das Produkt ist bereits mit einem konfigurierbaren, gruppierten oder gebündelten Produkt verknüpft.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Variante hinzufügen',
                        'delete-btn'        => 'Löschen',
                        'edit-btn'          => 'Bearbeiten',
                        'empty-info'        => 'Um verschiedene Kombinationen von Produkten zu erstellen.',
                        'empty-title'       => 'Variante hinzufügen',
                        'image-placeholder' => ':qty Stück',
                        'info'              => 'Variantenprodukte basieren auf allen möglichen Kombinationen von Attributen.',
                        'qty'               => ':qty Stück',
                        'sku'               => 'Artikelnummer - :sku',
                        'title'             => 'Varianten',

                        'create'  => [
                            'description'            => 'Beschreibung',
                            'name'                   => 'Name',
                            'save-btn'               => 'Hinzufügen',
                            'title'                  => 'Variante hinzufügen',
                            'variant-already-exists' => 'Diese Variante existiert bereits',
                        ],

                        'edit' => [
                            'disabled'         => 'Deaktiviert',
                            'edit-info'        => 'Wenn Sie detaillierte Produktinformationen aktualisieren möchten, gehen Sie zur',
                            'edit-link-title'  => 'Produktdetailseite',
                            'enabled'          => 'Aktiviert',
                            'images'           => 'Bilder',
                            'name'             => 'Name',
                            'price'            => 'Preis',
                            'quantities'       => 'Mengen',
                            'save-btn'         => 'Speichern',
                            'sku'              => 'Artikelnummer',
                            'status'           => 'Status',
                            'title'            => 'Produkt',
                            'weight'           => 'Gewicht',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Bilder hinzufügen',
                            'apply-to-all-btn'    => 'Auf alle anwenden',
                            'apply-to-all-sku'    => 'Preis auf alle SKU anwenden.',
                            'edit-inventories'    => 'Bestände bearbeiten',
                            'edit-prices'         => 'Preise bearbeiten',
                            'price'               => 'Preis',
                            'remove-images'       => 'Bilder entfernen',
                            'remove-variants'     => 'Varianten entfernen',
                            'select-action'       => 'Aktion auswählen',
                            'select-variants'     => 'Varianten auswählen',
                            'edit-name'           => 'Name bearbeiten',
                            'name'                => 'Name',
                            'edit-sku'            => 'SKU bearbeiten',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Gewicht bearbeiten',
                            'weight'              => 'Gewicht',
                            'edit-status'         => 'Status bearbeiten',
                            'status'              => 'Status',
                            'apply-to-all-name'   => 'Name auf alle Varianten anwenden.',
                            'apply-to-all-weight' => 'Gewicht auf alle Varianten anwenden.',
                            'apply-to-all-status' => 'Status auf alle Varianten anwenden.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Produkt hinzufügen',
                        'default-qty'       => 'Standardmenge',
                        'delete'            => 'Löschen',
                        'empty-info'        => 'Um verschiedene Kombinationen von Produkten zu erstellen.',
                        'empty-title'       => 'Produkt hinzufügen',
                        'image-placeholder' => 'Produktbild',
                        'info'              => 'Ein Gruppenprodukt besteht aus eigenständigen Artikeln, die als Set präsentiert werden und Variationen oder Koordination nach Saison oder Thema ermöglichen. Jedes Produkt kann einzeln oder als Teil der Gruppe gekauft werden.',
                        'sku'               => 'Artikelnummer - :sku',
                        'title'             => 'Gruppenprodukte',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Option hinzufügen',
                        'empty-info'        => 'Um Bündeloptionen zu erstellen.',
                        'empty-title'       => 'Option hinzufügen',
                        'image-placeholder' => 'Produktbild',
                        'info'              => 'Ein Bündelprodukt ist eine Packung mehrerer Artikel oder Dienstleistungen, die zusammen zu einem Sonderpreis verkauft werden und den Kunden Wert und Bequemlichkeit bieten.',
                        'title'             => 'Bündelartikel',

                        'update-create' => [
                            'checkbox'    => 'Checkbox',
                            'is-required' => 'Erforderlich',
                            'multiselect' => 'Multiselect',
                            'name'        => 'Titel',
                            'no'          => 'Nein',
                            'radio'       => 'Radio',
                            'save-btn'    => 'Speichern',
                            'select'      => 'Auswählen',
                            'title'       => 'Option',
                            'type'        => 'Typ',
                            'yes'         => 'Ja',
                        ],

                        'option' => [
                            'add-btn'     => 'Produkt hinzufügen',
                            'default-qty' => 'Standardmenge',
                            'delete'      => 'Löschen',
                            'delete-btn'  => 'Löschen',
                            'edit-btn'    => 'Bearbeiten',
                            'empty-info'  => 'Um verschiedene Kombinationen von Produkten zu erstellen.',
                            'empty-title' => 'Produkt hinzufügen',
                            'sku'         => 'Artikelnummer - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Setzen Sie das Standardprodukt mit einem Kontrollkästchen.',
                                    'title' => 'Checkbox',
                                ],

                                'multiselect' => [
                                    'info'  => 'Setzen Sie das Standardprodukt mit einem Kontrollkästchen-Button.',
                                    'title' => 'Multiselect',
                                ],

                                'radio' => [
                                    'info'  => 'Setzen Sie das Standardprodukt mit einem Optionsfeld.',
                                    'title' => 'Radio',
                                ],

                                'select' => [
                                    'info'  => 'Setzen Sie das Standardprodukt mit einem Dropdown-Menü.',
                                    'title' => 'Auswählen',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Verfügbar ab',
                        'available-to'   => 'Verfügbar bis',
                        'location'       => 'Ort',
                        'qty'            => 'Menge',
                        'title'          => 'Buchungstyp',

                        'available-every-week' => [
                            'no'    => 'Nein',
                            'title' => 'Jede Woche verfügbar',
                            'yes'   => 'Ja',
                        ],

                        'appointment' => [
                            'break-duration'         => 'Pausenzeit zwischen Slots (Minuten)',
                            'slot-duration'          => 'Slot-Dauer (Minuten)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nein',
                                'title' => 'Gleicher Slot für alle Tage',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Hinzufügen',
                            'break-duration'   => 'Pausenzeit zwischen Slots (Minuten)',
                            'close'            => 'Schließen',
                            'description'      => 'Buchungsinformationen',
                            'description-info' => 'Die Zeitdauer wird gemäß den Slots erstellt und angezeigt. Sie wird über alle Slots hinweg einzigartig sein und im Storefront sichtbar sein.',
                            'edit'             => 'Bearbeiten',
                            'many'             => 'Viele Buchungen für einen Tag',
                            'one'              => 'Eine Buchung für viele Tage',
                            'open'             => 'Öffnen',
                            'slot-add'         => 'Slots hinzufügen',
                            'slot-duration'    => 'Slot-Dauer (Minuten)',
                            'slot-title'       => 'Slots Zeitdauer',
                            'title'            => 'Standard',
                            'unavailable'      => 'Nicht verfügbar',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Slots hinzufügen',
                                    'close'      => 'Schließen',
                                    'day'        => 'Tag',
                                    'edit-title' => 'Slots bearbeiten',
                                    'friday'     => 'Freitag',
                                    'from'       => 'Von',
                                    'from-day'   => 'Von Tag',
                                    'from-time'  => 'Von Zeit',
                                    'monday'     => 'Montag',
                                    'open'       => 'Öffnen',
                                    'saturday'   => 'Samstag',
                                    'save'       => 'Speichern',
                                    'select'     => 'Auswählen',
                                    'status'     => 'Status',
                                    'sunday'     => 'Sonntag',
                                    'thursday'   => 'Donnerstag',
                                    'to'         => 'Bis',
                                    'to-day'     => 'Bis Tag',
                                    'to-time'    => 'Bis Zeit',
                                    'tuesday'    => 'Dienstag',
                                    'wednesday'  => 'Mittwoch',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Tickets hinzufügen',
                            'delete'             => 'Löschen',
                            'description'        => 'Beschreibung',
                            'description-info'   => 'Es sind keine Tickets verfügbar.',
                            'edit'               => 'Bearbeiten',
                            'name'               => 'Name',
                            'price'              => 'Preis',
                            'qty'                => 'Menge',
                            'special-price'      => 'Sonderpreis',
                            'special-price-from' => 'Sonderpreis ab',
                            'special-price-to'   => 'Sonderpreis bis',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Gültig ab',
                            'valid-until'        => 'Gültig bis',

                            'modal'              => [
                                'edit' => 'Tickets bearbeiten',
                                'save' => 'Speichern',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Tickets hinzufügen',
                            ],

                            'slots'   => [
                                'add'         => 'Slots hinzufügen',
                                'description' => 'Verfügbare Slots mit Zeitdauer.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'Täglich',
                            'daily-hourly' => 'Sowohl täglich als auch stündlich',
                            'daily-price'  => 'Tagespreis',
                            'hourly'       => 'Stündlich',
                            'hourly-price' => 'Stundenpreis',
                            'title'        => 'Miettyp',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nein',
                                'title' => 'Gleicher Slot für alle Tage',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Slots hinzufügen',
                            'description-info' => 'Die Zeitdauer wird gemäß den Slots erstellt und angezeigt. Sie wird über alle Slots hinweg einzigartig sein und im Storefront sichtbar sein.',
                            'save'             => 'Speichern',
                            'title'            => 'Slots Zeitdauer',
                            'unavailable'      => 'Nicht verfügbar',

                            'action'           => [
                                'add' => 'Hinzufügen',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Freitag',
                                    'from'       => 'Von',
                                    'monday'     => 'Montag',
                                    'saturday'   => 'Samstag',
                                    'sunday'     => 'Sonntag',
                                    'thursday'   => 'Donnerstag',
                                    'to'         => 'Bis',
                                    'tuesday'    => 'Dienstag',
                                    'wednesday'  => 'Mittwoch',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Pausenzeit zwischen Slots (Minuten)',
                            'guest-capacity'            => 'Gästekapazität',
                            'guest-limit'               => 'Gästelimit pro Tisch',
                            'prevent-scheduling-before' => 'Verhindern Sie die Planung vor',
                            'slot-duration'             => 'Slot-Dauer (Minuten)',

                            'charged-per'               => [
                                'guest'  => 'Gast',
                                'table'  => 'Tisch',
                                'title'  => 'Berechnet pro',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Nein',
                                'title' => 'Gleicher Slot für alle Tage',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Terminbuchung',
                            'default'     => 'Standardbuchung',
                            'event'       => 'Eventbuchung',
                            'many'        => 'Viele',
                            'one'         => 'Eins',
                            'rental'      => 'Mietbuchung',
                            'table'       => 'Tischbuchung',
                            'title'       => 'Typ',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Link hinzufügen',
                            'delete-btn'  => 'Löschen',
                            'edit-btn'    => 'Bearbeiten',
                            'empty-info'  => 'Um einen Link hinzuzufügen.',
                            'empty-title' => 'Link hinzufügen',
                            'file'        => 'Datei: ',
                            'info'        => 'Der Typ "Herunterladbares Produkt" ermöglicht den Verkauf von digitalen Produkten wie eBooks, Softwareanwendungen, Musik, Spielen usw.',
                            'sample-file' => 'Beispiel-Datei: ',
                            'sample-url'  => 'Beispiel-URL: ',
                            'title'       => 'Herunterladbare Links',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'downloads'   => 'Download erlaubt',
                                'file'        => 'Datei',
                                'file-type'   => 'Dateityp',
                                'name'        => 'Titel',
                                'price'       => 'Preis',
                                'sample'      => 'Beispiel',
                                'sample-type' => 'Beispieltyp',
                                'save-btn'    => 'Speichern',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Beispiel hinzufügen',
                            'delete-btn'  => 'Löschen',
                            'edit-btn'    => 'Bearbeiten',
                            'empty-info'  => 'Um ein Beispiel hinzuzufügen.',
                            'empty-title' => 'Beispiel hinzufügen',
                            'file'        => 'Datei: ',
                            'info'        => 'Der Typ "Herunterladbares Produkt" ermöglicht den Verkauf von digitalen Produkten wie eBooks, Softwareanwendungen, Musik, Spielen usw.',
                            'title'       => 'Herunterladbare Beispiele',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'file'        => 'Datei',
                                'file-type'   => 'Dateityp',
                                'name'        => 'Titel',
                                'save-btn'    => 'Speichern',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Produkt erfolgreich erstellt',
            'delete-failed'            => 'Löschen des Produkts fehlgeschlagen',
            'delete-success'           => 'Produkt erfolgreich gelöscht',
            'product-type-not-allowed' => 'Sie dürfen keine Produkte vom Typ ":type" verkaufen',
            'saved-inventory-message'  => 'Produkt erfolgreich gespeichert',
            'update-success'           => 'Produkt erfolgreich aktualisiert',

            'assign' => [
                'already-selling'     => 'Sie verkaufen dieses Produkt bereits',
                'back-btn'            => 'Zurück',
                'condition'           => 'Zustand',
                'create-success'      => 'Produkt wurde dem Verkäufer erfolgreich zugewiesen',
                'description'         => 'Beschreibung',
                'image-size'          => 'Die Bildauflösung sollte 609px X 560px betragen',
                'images'              => 'Bilder',
                'new'                 => 'Neu',
                'not-allowed'         => 'Sie dürfen dieses Produkt nicht zuweisen',
                'old'                 => 'Alt',
                'price'               => 'Preis',
                'product-not-allowed' => 'Sie dürfen kein Produkt vom Typ :type verkaufen',
                'quantities'          => 'Mengen',
                'save-btn'            => 'Speichern',
                'title'               => 'Produkt zuweisen',
                'update-success'      => 'Zugewiesenes Produkt erfolgreich aktualisiert',

                'product-details' => [
                    'active'            => 'Aktiv',
                    'approved'          => 'Genehmigt',
                    'disable'           => 'Deaktivieren',
                    'disapproved'       => 'Abgelehnt',
                    'image-placeholder' => 'Produktbild',
                    'title'             => 'Produktdetails',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Produktbewertungen',

                'datagrid' => [
                    'approved'      => 'Genehmigt',
                    'customer'      => 'Kunde',
                    'date'          => 'Datum',
                    'description'   => 'Beschreibung',
                    'email'         => 'E-Mail',
                    'pending'       => 'Ausstehend',
                    'product'       => 'Produkt',
                    'rating'        => 'Bewertung',
                    'status'        => 'Status',
                    'title'         => 'Titel',
                    'unapproved'    => 'Nicht genehmigt',
                    'update-status' => 'Aktualisierungsstatus',
                ],
            ],

            'update-success' => 'Produktbewertungen erfolgreich aktualisiert',
            'delete-success' => 'Produktbewertungen wurden erfolgreich gelöscht.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Kunden',

                'datagrid' => [
                    'active'      => 'Aktiv',
                    'customer'    => 'Kunde',
                    'email'       => 'E-Mail',
                    'gender'      => 'Geschlecht',
                    'group'       => 'Gruppe',
                    'inactive'    => 'Inaktiv',
                    'order-count' => 'Bestellanzahl',
                    'revenue'     => 'Umsatz',
                    'status'      => 'Status',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Profil verwalten',
                'edit-btn' => 'Profil bearbeiten',

                'general' => [
                    'email'      => 'E-Mail',
                    'name'       => 'Name',
                    'phone'      => 'Telefonnummer',
                    'shop-slug'  => 'Shop-Slug',
                    'shop-title' => 'Shop-Titel',
                    'title'      => 'Allgemeine Informationen',
                ],

                'about-store' => [
                    'title' => 'Über den Shop',
                ],

                'meta' => [
                    'meta-description' => 'Meta-Beschreibung',
                    'meta-keywords'    => 'Meta-Schlüsselwörter',
                    'meta-title'       => 'Meta-Titel',
                    'title'            => 'Meta-Beschreibung',
                ],

                'policy' => [
                    'privacy'  => 'Datenschutzrichtlinie',
                    'return'   => 'Rückgaberichtlinie',
                    'shipping' => 'Versandrichtlinie',
                    'title'    => 'Richtlinien',
                ],

                'address' => [
                    'city'     => 'Stadt',
                    'country'  => 'Land',
                    'postcode' => 'Postleitzahl',
                    'state'    => 'Bundesland',
                    'title'    => 'Shop-Adresse',
                    'address'  => 'Adresse',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Soziale Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Mindestbestellmenge',
                ],

                'google-analytics' => [
                    'id'    => 'Analytics-ID',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Admin-Provision',
                    'admin-commission-value' => 'Admin-Provision :rate% des gesamten Rechnungsbetrags',
                    'allowed-categories'     => 'Erlaubte Kategorien',
                    'no-categories'          => 'Keine Kategorien verfügbar',
                    'allowed-product-types'  => 'Erlaubte Produkttypen',
                    'no-product-types'       => 'Keine Produkttypen verfügbar',
                    'payment-methods'        => 'Zahlungsmethoden',
                    'no-payment-methods'     => 'Keine Zahlungsmethoden verfügbar',
                    'shipping-methods'       => 'Versandmethoden',
                    'no-shipping-methods'    => 'Keine Versandmethoden verfügbar',
                    'title'                  => 'Shop-Informationen',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Banner im Verhältnis 13:3 hochladen, Höhe 375, sicherer Bereich 375x250, zentriert auf Mobilgeräten',
                'delete-banner'       => 'Banner löschen',
                'delete-logo'         => 'Logo löschen',
                'logo'                => 'Logo',
                'logo-description'    => 'Logo im Verhältnis 1:1 hochladen',
                'save-btn'            => 'Profil speichern',
                'title'               => 'Profil verwalten',
                'upload-new-banner'   => 'Neues Banner hochladen',
                'upload-new-logo'     => 'Neues Logo hochladen',

                'general' => [
                    'email'      => 'E-Mail',
                    'name'       => 'Name',
                    'phone'      => 'Telefonnummer',
                    'shop-slug'  => 'Shop-Slug',
                    'shop-title' => 'Shop-Titel',
                    'title'      => 'Allgemeine Informationen',
                ],

                'about-store' => [
                    'title' => 'Über den Shop',
                ],

                'meta' => [
                    'meta-description' => 'Meta-Beschreibung',
                    'meta-keywords'    => 'Meta-Schlüsselwörter',
                    'meta-title'       => 'Meta-Titel',
                    'title'            => 'Meta-Beschreibung',
                ],

                'policy' => [
                    'privacy'  => 'Datenschutzrichtlinie',
                    'return'   => 'Rückgaberichtlinie',
                    'shipping' => 'Versandrichtlinie',
                    'title'    => 'Richtlinien',
                ],

                'address' => [
                    'city'           => 'Stadt',
                    'country'        => 'Land',
                    'postcode'       => 'Postleitzahl',
                    'state'          => 'Bundesland',
                    'title'          => 'Shop-Adresse',
                    'select-country' => 'Land auswählen',
                    'select-state'   => 'Bundesland auswählen',
                    'street-address' => 'Straßenadresse',
                    'address'        => 'Adresse',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Soziale Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Mindestbestellmenge',
                ],

                'google-analytics' => [
                    'id'    => 'Google Analytics-ID',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Ihr Profil wurde erfolgreich aktualisiert',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Verkäuferbewertungen',

                'datagrid' => [
                    'approved'    => 'Genehmigt',
                    'customer'    => 'Kunde',
                    'date'        => 'Datum',
                    'description' => 'Beschreibung',
                    'disapproved' => 'Abgelehnt',
                    'email'       => 'E-Mail',
                    'pending'     => 'Ausstehend',
                    'rating'      => 'Bewertung',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Speichern',
                    'title'              => 'Allgemein',
                    'unmatched-password' => 'Das aktuelle Passwort stimmt nicht überein',
                    'update-success'     => 'Allgemeine Einstellungen erfolgreich aktualisiert',

                    'regional-setting' => [
                        'currency'      => 'Währung',
                        'locale'        => 'Standort',
                        'select-locale' => 'Standort auswählen',
                        'title'         => 'Regionale Einstellungen',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Passwort bestätigen',
                        'current-password' => 'Aktuelles Passwort',
                        'new-password'     => 'Neues Passwort',
                        'title'            => 'Passworteinstellungen',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Rolle erstellen',
                    'title'      => 'Rollen',

                    'datagrid' => [
                        'all'             => 'Alle',
                        'custom'          => 'Benutzerdefiniert',
                        'delete'          => 'Löschen',
                        'edit'            => 'Bearbeiten',
                        'id'              => 'Id',
                        'name'            => 'Name',
                        'permission-type' => 'Berechtigungstyp',
                    ],
                ],

                'create' => [
                    'access-control' => 'Zugriffskontrolle',
                    'all'            => 'Alle',
                    'back-btn'       => 'Zurück',
                    'custom'         => 'Benutzerdefiniert',
                    'description'    => 'Beschreibung',
                    'general'        => 'Allgemein',
                    'name'           => 'Name',
                    'permissions'    => 'Berechtigungen',
                    'save-btn'       => 'Rolle speichern',
                    'title'          => 'Rolle erstellen',
                ],

                'edit' => [
                    'access-control' => 'Zugriffskontrolle',
                    'all'            => 'Alle',
                    'back-btn'       => 'Zurück',
                    'custom'         => 'Benutzerdefiniert',
                    'description'    => 'Beschreibung',
                    'general'        => 'Allgemein',
                    'name'           => 'Name',
                    'permissions'    => 'Berechtigungen',
                    'save-btn'       => 'Rolle speichern',
                    'title'          => 'Rolle bearbeiten',
                ],

                'being-used'        => 'Rolle wird von einem Verkäufer verwendet',
                'create-success'    => 'Rolle erfolgreich erstellt',
                'delete-failed'     => 'Rollenlöschung fehlgeschlagen',
                'delete-success'    => 'Rolle erfolgreich gelöscht',
                'last-delete-error' => 'Mindestens eine Rolle ist erforderlich',
                'update-success'    => 'Rolle erfolgreich aktualisiert',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Benutzer erstellen',
                    'create-title'     => 'Benutzer erstellen',
                    'edit-title'       => 'Benutzer bearbeiten',
                    'email'            => 'E-Mail',
                    'name'             => 'Name',
                    'phone-number'     => 'Telefonnummer',
                    'role'             => 'Rolle',
                    'save-btn'         => 'Benutzer speichern',
                    'select-role'      => 'Rolle auswählen',
                    'password'         => 'Passwort',
                    'confirm-password' => 'Passwort bestätigen',
                    'status'           => 'Status',
                    'title'            => 'Benutzer',
                    'create-success'   => 'Benutzer erfolgreich erstellt',
                    'update-success'   => 'Benutzer erfolgreich aktualisiert',
                    'delete-success'   => 'Benutzer erfolgreich gelöscht',
                    'delete-failed'    => 'Löschen des Benutzers fehlgeschlagen',

                    'datagrid' => [
                        'delete'     => 'Löschen',
                        'edit'       => 'Bearbeiten',
                        'email'      => 'E-Mail',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Name',
                        'permission' => 'Berechtigung',
                        'phone'      => 'Telefon',

                        'status' => [
                            'title' => 'Status',

                            'options' => [
                                'active'    => 'Aktiv',
                                'suspended' => 'Gesperrt',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Inventarquelle erstellen',
                    'title'      => 'Lagerorte',

                    'datagrid' => [
                        'active'   => 'Aktiv',
                        'code'     => 'Code',
                        'delete'   => 'Löschen',
                        'edit'     => 'Bearbeiten',
                        'id'       => 'ID',
                        'inactive' => 'Inaktiv',
                        'name'     => 'Name',
                        'priority' => 'Priorität',
                        'status'   => 'Status',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Lagerort hinzufügen',
                    'address'        => 'Lagerortadresse',
                    'back-btn'       => 'Zurück',
                    'city'           => 'Stadt',
                    'code'           => 'Code',
                    'contact-email'  => 'E-Mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Kontaktinformationen',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Kontakttelefon',
                    'country'        => 'Land',
                    'description'    => 'Beschreibung',
                    'general'        => 'Allgemein',
                    'latitude'       => 'Breitengrad',
                    'longitude'      => 'Längengrad',
                    'name'           => 'Name',
                    'postcode'       => 'Postleitzahl',
                    'priority'       => 'Priorität',
                    'save-btn'       => 'Lagerorte speichern',
                    'select-country' => 'Land auswählen',
                    'select-state'   => 'Bundesland auswählen',
                    'settings'       => 'Einstellungen',
                    'state'          => 'Bundesland',
                    'status'         => 'Status',
                    'street'         => 'Straße',
                    'title'          => 'Lagerorte',
                ],

                'edit' => [
                    'back-btn'       => 'Zurück',
                    'city'           => 'Stadt',
                    'code'           => 'Code',
                    'contact-email'  => 'E-Mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Kontaktinformationen',
                    'contact-name'   => 'Name',
                    'contact-number' => 'Kontakttelefon',
                    'country'        => 'Land',
                    'description'    => 'Beschreibung',
                    'general'        => 'Allgemein',
                    'latitude'       => 'Breitengrad',
                    'longitude'      => 'Längengrad',
                    'name'           => 'Name',
                    'postcode'       => 'Postleitzahl',
                    'priority'       => 'Priorität',
                    'save-btn'       => 'Lagerorte speichern',
                    'select-country' => 'Land auswählen',
                    'select-state'   => 'Bundesland auswählen',
                    'settings'       => 'Einstellungen',
                    'source-address' => 'Lagerortadresse',
                    'state'          => 'Bundesland',
                    'status'         => 'Status',
                    'street'         => 'Straße',
                    'title'          => 'Lagerorte bearbeiten',
                ],

                'create-success'    => 'Lagerort erfolgreich erstellt',
                'delete-failed'     => 'Lagerorte löschen fehlgeschlagen',
                'delete-success'    => 'Lagerorte erfolgreich gelöscht',
                'last-delete-error' => 'Der letzte Lagerort kann nicht gelöscht werden',
                'update-success'    => 'Lagerorte erfolgreich aktualisiert',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Administrator',
                'blocked-message'     => 'Sie wurden von einem Administrator blockiert',
                'message-failed'      => 'Nachricht senden fehlgeschlagen',
                'message-placeholder' => 'Geben Sie Ihre Nachricht hier ein...',
                'message-sent'        => 'Nachricht erfolgreich gesendet',
                'no-message'          => 'Keine Nachricht gefunden',
                'search-message'      => 'Nachricht suchen...',
                'title'               => 'Kommunikation',

                'filters' => [
                    'all-messages'      => 'Alle Nachrichten',
                    'prev-fifteen-days' => 'Letzte 15 Tage',
                    'prev-seven-days'   => 'Letzte 7 Tage',
                    'prev-six-months'   => 'Letzte 6 Monate',
                    'prev-thirty-days'  => 'Letzte 30 Tage',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Verlassene Warenkörbe',
                    'abandoned-products'            => 'Verlassene Produkte',
                    'abandoned-rate'                => 'Abbruchrate',
                    'abandoned-revenue'             => 'Abgebrochene Einnahmen',
                    'added-to-cart'                 => 'Zum Warenkorb hinzugefügt',
                    'added-to-cart-info'            => 'Nur :progress Besucher haben Produkte zum Warenkorb hinzugefügt',
                    'all-channels'                  => 'Alle Kanäle',
                    'average-order-value-over-time' => 'Durchschnittlicher Bestellwert im Laufe der Zeit',
                    'average-sales'                 => 'Durchschnittlicher Bestellwert',
                    'commission'                    => 'Provision',
                    'commission-over-time'          => 'Provision über die Zeit',
                    'count'                         => 'Anzahl',
                    'end-date'                      => 'Enddatum',
                    'id'                            => 'ID',
                    'interval'                      => 'Intervall',
                    'name'                          => 'Name',
                    'orders'                        => 'Bestellungen',
                    'orders-over-time'              => 'Bestellungen im Laufe der Zeit',
                    'payment-method'                => 'Zahlungsmethode',
                    'product-views'                 => 'Produktansichten',
                    'product-views-info'            => 'Nur :progress Besucher betrachten Produkte',
                    'purchase-funnel'               => 'Kauftrichter',
                    'purchased'                     => 'Gekauft',
                    'purchased-info'                => 'Nur :progress Besucher tätigen den Kauf',
                    'refunds'                       => 'Rückerstattungen',
                    'refunds-over-time'             => 'Rückerstattungen im Laufe der Zeit',
                    'sales-over-time'               => 'Umsatz im Laufe der Zeit',
                    'start-date'                    => 'Startdatum',
                    'tax-collected'                 => 'Steuern gesammelt',
                    'tax-collected-over-time'       => 'Steuern im Laufe der Zeit gesammelt',
                    'title'                         => 'Verkäufe',
                    'top-payment-methods'           => 'Top-Zahlungsmethoden',
                    'top-tax-categories'            => 'Top-Steuerkategorien',
                    'total'                         => 'Gesamt',
                    'total-commission-paid'         => 'Gesamte gezahlte Provision',
                    'total-orders'                  => 'Gesamtbestellungen',
                    'total-sales'                   => 'Gesamtumsatz',
                    'total-visits'                  => 'Gesamtbesuche',
                    'total-visits-info'             => 'Gesamtbesucher im Geschäft',
                    'view-details'                  => 'Details anzeigen',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Alle Kanäle',
                    'count'                       => 'Anzahl',
                    'customers'                   => 'Kunden',
                    'customers-over-time'         => 'Kunden im Laufe der Zeit',
                    'customers-traffic'           => 'Kundentraffic',
                    'customers-with-most-orders'  => 'Kunden mit den meisten Bestellungen',
                    'customers-with-most-reviews' => 'Kunden mit den meisten Bewertungen',
                    'customers-with-most-sales'   => 'Kunden mit den meisten Verkäufen',
                    'email'                       => 'E-Mail',
                    'end-date'                    => 'Enddatum',
                    'id'                          => 'ID',
                    'interval'                    => 'Intervall',
                    'name'                        => 'Name',
                    'orders'                      => 'Bestellungen',
                    'reviews'                     => 'Bewertungen',
                    'start-date'                  => 'Startdatum',
                    'title'                       => 'Kunden',
                    'top-customer-groups'         => 'Top-Kundengruppen',
                    'total'                       => 'Gesamt',
                    'total-customers'             => 'Gesamtkunden',
                    'total-visitors'              => 'Gesamtbesucher',
                    'traffic-over-week'           => 'Traffic über die Woche',
                    'unique-visitors'             => 'Eindeutige Besucher',
                    'view-details'                => 'Details anzeigen',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Alle Kanäle',
                    'channel'                          => 'Kanal',
                    'end-date'                         => 'Enddatum',
                    'id'                               => 'ID',
                    'interval'                         => 'Intervall',
                    'locale'                           => 'Standort',
                    'name'                             => 'Name',
                    'orders'                           => 'Bestellungen',
                    'price'                            => 'Preis',
                    'products-added-over-time'         => 'Produkte im Laufe der Zeit hinzugefügt',
                    'products-with-most-reviews'       => 'Produkte mit den meisten Bewertungen',
                    'products-with-most-visits'        => 'Produkte mit den meisten Besuchen',
                    'quantities'                       => 'Mengen',
                    'quantities-sold-over-time'        => 'Mengen im Laufe der Zeit verkauft',
                    'revenue'                          => 'Einnahmen',
                    'reviews'                          => 'Bewertungen',
                    'start-date'                       => 'Startdatum',
                    'title'                            => 'Produkte',
                    'top-selling-products-by-quantity' => 'Top-Verkaufsprodukte nach Menge',
                    'top-selling-products-by-revenue'  => 'Top-Verkaufsprodukte nach Einnahmen',
                    'total'                            => 'Gesamt',
                    'total-products-added-to-wishlist' => 'Produkte zur Wunschliste hinzugefügt',
                    'total-sold-quantities'            => 'Verkaufte Produktmenge',
                    'view-details'                     => 'Details anzeigen',
                    'visits'                           => 'Besuche',
                ],
            ],

            'view' => [
                'all-channels'  => 'Alle Kanäle',
                'day'           => 'Tag',
                'end-date'      => 'Enddatum',
                'export-csv'    => 'CSV exportieren',
                'export-xls'    => 'XLS exportieren',
                'month'         => 'Monat',
                'not-available' => 'Keine Datensätze verfügbar.',
                'start-date'    => 'Startdatum',
                'year'          => 'Jahr',
            ],

            'empty' => [
                'info'  => 'Keine Daten für den ausgewählten Zeitraum verfügbar',
                'title' => 'Keine Daten verfügbar',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Deaktiviert',
                'enabled'   => 'Aktiviert',
                'info'      => 'Erstellen, verwalten und skalieren Sie Ihren Online-Shop mit den anpassbaren E-Commerce-Erweiterungen von Bagisto.',
                'no-result' => 'Keine Erweiterungen verfügbar.',
                'title'     => 'Erweiterungen',

                'filters' => [
                    'all-extensions' => 'Alle Erweiterungen',
                    'bulk_upload'    => 'Massen-Upload',
                    'gdpr'           => 'DSGVO',
                    'marketplace'    => 'Marktplatz',
                    'payment'        => 'Zahlung',
                    'pos'            => 'POS',
                    'shipping'       => 'Versand',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Verkäuferlogo',
                'switch-to-store' => 'Zum Verwalten des Geschäfts wechseln',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Der Mindestbestellbetrag für :shop_title beträgt',
                'product-not-available' => 'Produkt ist nicht verfügbar',
                'sold-by'               => 'Verkauft von',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => ':days Tage Zahlung',
                'deals-in'            => 'Deals In',
                'featured-seller'     => 'Unsere Top-Verkäufer',
                'online-business'     => 'Online-Geschäft',
                'reviews'             => ':count Bewertungen',
                'seller-community'    => 'Verkäufergemeinschaft',
                'serviceable-pincode' => 'Bedienbarer Postleitzahl',
                'start-selling'       => 'Beginnen Sie mit dem Verkauf an große Kunden weltweit, rund um die Uhr.',
                'step'                => 'Schritt :count',
                'visit-shop'          => 'Besuchen Sie den Shop',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'In den Warenkorb legen',
            'delivery-info' => 'Lieferinformationen werden hier angezeigt',
            'hide'          => 'Verbergen',
            'more-info'     => 'Weitere Informationen',
            'seller-count'  => ':count weitere Verkäufer verkaufen dasselbe Produkt',
            'seller-info'   => 'Verkäuferinformationen',
            'sold-by'       => 'Verkauft von',
            'top-selling'   => 'Top-Verkauf',

            'flag' => [
                'alert'              => 'Alarm',
                'already-reported'   => 'Sie haben dieses Produkt bereits gemeldet',
                'create-success'     => 'Produkt erfolgreich gemeldet',
                'guest-alert'        => 'Sie müssen sich einloggen, um dieses Produkt zu melden',
                'not-allowed'        => 'Sie können dieses Produkt nicht melden, ohne eine Bestellung aufzugeben',
                'other-reason'       => 'Anderer Grund',
                'reason'             => 'Grund',
                'reason-placeholder' => 'Bitte geben Sie den Grund an',
                'report-product'     => 'Produkt melden',
                'select-reason'      => 'Grund auswählen',
                'submit-btn'         => 'Einreichen',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Verkäufer ist noch nicht genehmigt',
                'products-count'  => 'Produkte (:count)',
                'reviews-count'   => 'Bewertungen (:count)',
                'search-text'     => 'Nach Produkten suchen',

                'about' => [
                    'title'           => 'Über',
                    'about-us'        => 'Über uns',
                    'shipping-policy' => 'Versandrichtlinie',
                    'privacy-policy'  => 'Datenschutzrichtlinie',
                    'return-policy'   => 'Rückgaberichtlinie',
                ],

                'contact-form' => [
                    'title'          => 'Kontakt',
                    'name'           => 'Name',
                    'email'          => 'E-Mail',
                    'subject'        => 'Betreff',
                    'query'          => 'Anfrage',
                    'submit-btn'     => 'Absenden',
                    'create-success' => 'Ihre Anfrage wurde erfolgreich übermittelt',
                ],

                'share' => [
                    'title'     => 'Teilen',
                    'share-on'  => 'Teilen auf',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Alarm',
                    'already-reported'   => 'Sie haben diesen Verkäufer bereits gemeldet',
                    'create-success'     => 'Verkäufer erfolgreich gemeldet',
                    'guest-alert'        => 'Sie müssen sich anmelden, um den Verkäufer zu melden',
                    'not-allowed'        => 'Sie können diesen Verkäufer nicht melden, ohne eine Bestellung aufzugeben',
                    'other-reason'       => 'Anderer Grund',
                    'reason'             => 'Grund',
                    'reason-placeholder' => 'Bitte geben Sie den Grund an',
                    'select-reason'      => 'Grund auswählen',
                    'submit-btn'         => 'Absenden',
                    'title'              => 'Problem melden',
                ],

                'reviews' => [
                    'alert'            => 'Alarm',
                    'already-reviewed' => 'Sie haben diesen Verkäufer bereits bewertet',
                    'comment'          => 'Kommentar',
                    'create-success'   => 'Verkäufer erfolgreich bewertet',
                    'customer-review'  => ':count Kundenbewertung',
                    'customer-reviews' => 'Kundenbewertungen',
                    'guest-alert'      => 'Sie müssen sich anmelden, um den Verkäufer zu melden',
                    'rating'           => 'Bewertung',
                    'review-by'        => 'Bewertung von',
                    'submit-btn'       => 'Absenden',
                    'title'            => 'Titel',
                    'view-all'         => 'Alle Bewertungen anzeigen',
                    'write-review'     => 'Eine Bewertung schreiben',
                ],

                'products' => [
                    'no-result' => 'Hier sind keine Produkte verfügbar',
                    'show'      => 'Anzeigen',

                    'sort-by' => [
                        'title' => 'Sortieren nach',

                        'options' => [
                            'cheapest-first'  => 'Günstigste zuerst',
                            'expensive-first' => 'Teuerste zuerst',
                            'from-a-z'        => 'Von A-Z',
                            'from-z-a'        => 'Von Z-A',
                            'latest-first'    => 'Neueste zuerst',
                            'oldest-first'    => 'Älteste zuerst',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Alle löschen',
                        'filter'      => 'Filtern',
                        'filters'     => 'Filter:',
                        'price-range' => 'Preisspanne',
                        'sort'        => 'Sortieren',
                    ],
                ],
            ],
        ],
    ],
];
