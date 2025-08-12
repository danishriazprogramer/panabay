<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marktplaats',
                    'info'  => 'Beheer Marktplaats',

                    'module-info' => [
                        'title'       => 'Module Informatie',
                        'info'        => 'Geeft informatie over de applicatieversie.',
                        'app-version' => 'Applicatieversie: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Admin Commissiepercentage',
                        'description'                  => 'Beheer de algemene instellingen van de marktplaats, zoals status, commissie, enz.',
                        'lines-in-street-address'      => 'Lijnen in Straatadres',
                        'lines-in-street-address-info' => 'Stel het aantal lijnen in het straatadres in. Standaard is één regel.',
                        'status'                       => 'Status',
                        'title'                        => 'Algemeen',
                    ],

                    'product' => [
                        'approval-required'         => 'Goedkeuring Vereist',
                        'description'               => 'Beheer de productinstellingen van de marktplaats, zoals goedkeuringen, vlaggen, enz.',
                        'enable-flag'               => 'Vlag Inschakelen',
                        'seller-can-assign-product' => 'Verkoper kan product toewijzen',
                        'seller-can-create-product' => 'Verkoper kan product aanmaken',
                        'show-progress-bar'         => 'Voortgangsbalk weergeven',
                        'title'                     => 'Product',
                    ],

                    'seller' => [
                        'approval-required'           => 'Goedkeuring vereist',
                        'can-cancel-order'            => 'Kan bestelling annuleren',
                        'can-create-invoice'          => 'Kan factuur aanmaken',
                        'can-create-shipment'         => 'Kan zending aanmaken',
                        'description'                 => 'Beheer de verkopersinstellingen van de marktplaats zoals goedkeuringen, vlaggen, enz.',
                        'enable-flag'                 => 'Vlag inschakelen',
                        'enable-minimum-order-amount' => 'Minimumbestelbedrag inschakelen',
                        'enable-seller-flag'          => 'Verkopersvlag inschakelen',
                        'red-flag-limit'              => 'Limiet voor rode vlag',
                        'red-flag-limit-info'         => 'Als de verkoper deze limiet overschrijdt, wordt de rode vlag weergegeven op het verkopersprofiel.',
                        'show-red-flag'               => 'Toon rode vlag op profiel als limiet wordt overschreden',
                        'title'                       => 'Verkoper',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Limiet Aantal',
                        'description' => 'Beheer de uitgelichte verkopers van de marktplaats.',
                        'status'      => 'Status',
                        'title'       => 'Uitgelichte Verkopers',

                        'popularity-criteria' => [
                            'all'              => 'Alle',
                            'maximum-orders'   => 'Maximale Bestellingen',
                            'maximum-products' => 'Maximale Producten',
                            'maximum-rating'   => 'Maximale beoordeling',
                            'maximum-sale'     => 'Maximale Verkoop',
                            'title'            => 'Populariteitscriteria',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Banner Knop Titel',
                        'banner-description'  => 'Banner Beschrijving',
                        'banner-image'        => 'Banner Afbeelding',
                        'banner-title'        => 'Banner Titel',
                        'business-hour'       => 'Openingstijden',
                        'community-count'     => 'Gemeenschap Telling',
                        'description'         => 'Pas de startpagina van de marktplaats aan door pictogrammen, banners en beschrijvingen toe te voegen voor een frisse uitstraling.',
                        'feature-box1-desc'   => 'Functie Doos 1 Omschrijving',
                        'feature-box1-icon'   => 'Functie Doos 1 Icoon',
                        'feature-box1-title'  => 'Functie Doos 1 Titel',
                        'feature-box2-desc'   => 'Functie Doos 2 Omschrijving',
                        'feature-box2-icon'   => 'Functie Doos 2 Icoon',
                        'feature-box2-title'  => 'Functie Doos 2 Titel',
                        'feature-box3-desc'   => 'Functie Doos 3 Omschrijving',
                        'feature-box3-icon'   => 'Functie Doos 3 Icoon',
                        'feature-box3-title'  => 'Functie Doos 3 Titel',
                        'feature-box4-desc'   => 'Functie Doos 4 Omschrijving',
                        'feature-box4-icon'   => 'Functie Doos 4 Icoon',
                        'feature-box4-title'  => 'Functie Doos 4 Titel',
                        'feature-description' => 'Functie Omschrijving',
                        'feature-image'       => 'Functie Afbeelding',
                        'feature-title'       => 'Functie Titel',
                        'journey-description' => 'Reis Omschrijving',
                        'journey-image'       => 'Reis Afbeelding',
                        'journey-step1-desc'  => 'Reis Stap 1 Omschrijving',
                        'journey-step1-icon'  => 'Reis Stap 1 Icoon',
                        'journey-step1-title' => 'Reis Stap 1 Titel',
                        'journey-step2-desc'  => 'Reis Stap 2 Omschrijving',
                        'journey-step2-icon'  => 'Reis Stap 2 Icoon',
                        'journey-step2-title' => 'Reis Stap 2 Titel',
                        'journey-step3-desc'  => 'Reis Stap 3 Omschrijving',
                        'journey-step3-icon'  => 'Reis Stap 3 Icoon',
                        'journey-step3-title' => 'Reis Stap 3 Titel',
                        'journey-step4-desc'  => 'Reis Stap 4 Omschrijving',
                        'journey-step4-icon'  => 'Reis Stap 4 Icoon',
                        'journey-step4-title' => 'Reis Stap 4 Titel',
                        'journey-step5-desc'  => 'Reis Stap 5 Omschrijving',
                        'journey-step5-icon'  => 'Reis Stap 5 Icoon',
                        'journey-step5-title' => 'Reis Stap 5 Titel',
                        'journey-title'       => 'Reis Titel',
                        'payment-duration'    => 'Betaling Duur',
                        'serviceable-pincode' => 'Servicebare Postcode',
                        'title'               => 'Landing Pagina',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Product toewijzen',
            'communications'    => 'Communicatie',
            'create'            => 'Aanmaken',
            'delete'            => 'Verwijderen',
            'edit'              => 'Bewerken',
            'flag-reasons'      => 'Rapporteerredenen',
            'inventory-sources' => 'Voorraadbronnen',
            'orders'            => 'Bestellingen',
            'pay'               => 'Betalen',
            'payment-request'   => 'Betalingsverzoek',
            'product-reviews'   => 'Productbeoordelingen',
            'products'          => 'Producten',
            'reviews'           => 'Verkoperbeoordelingen',
            'seller-categories' => 'Verkopercategorieën',
            'sellers'           => 'Verkopers',
            'title'             => 'Marktplaats',
            'transactions'      => 'Transacties',
            'view'              => 'Bekijken',
        ],

        'menu' => [
            'communications'    => 'Communicatie',
            'flag-reasons'      => 'Redenen voor Markering',
            'inventory-sources' => 'Voorraadbronnen',
            'orders'            => 'Bestellingen',
            'payment-requests'  => 'Betalingsverzoeken',
            'product-reviews'   => 'Productrecensies',
            'products'          => 'Producten',
            'seller-categories' => 'Verkoperscategorieën',
            'seller-reviews'    => 'Verkopersrecensies',
            'sellers'           => 'Verkopers',
            'title'             => 'Marktplaats',
            'transactions'      => 'Transacties',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Verkopers toevoegen',
                'delete-failed'      => 'Verwijderen van verkoper mislukt!',
                'delete-success'     => 'Verkoper succesvol verwijderd.',
                'incomplete-profile' => 'De verkoper heeft een onvolledig profiel!',
                'login-message'      => 'Je bent ingelogd als :seller_name',
                'pending-orders'     => 'De verkoper heeft enkele lopende bestellingen',
                'title'              => 'Verkopers',
                'update-success'     => 'Verkoper succesvol bijgewerkt!',

                'datagrid' => [
                    'add-product'     => 'Toevoegen',
                    'approved'        => 'Goedgekeurd',
                    'assign-product'  => 'Product toewijzen',
                    'created-at'      => 'Gemaakt op',
                    'delete'          => 'Verwijderen',
                    'disapproved'     => 'Afgekeurd',
                    'edit'            => 'Bewerken',
                    'email'           => 'E-mail',
                    'flags'           => 'Vlaggen',
                    'id'              => 'ID',
                    'login-as-seller' => 'Inloggen als verkoper',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Naam verkoper',
                    'shop-url'        => 'Winkel URL',
                    'status'          => 'Status',
                    'suspended'       => 'Gepauseerd',
                    'total-flags'     => 'Totaal aantal vlaggen: :count',
                    'update-status'   => 'Status bijwerken',
                ],

                'create'  => [
                    'address'        => 'Adres',
                    'city'           => 'Stad',
                    'country'        => 'Land',
                    'email'          => 'E-mail',
                    'name'           => 'Naam',
                    'phone'          => 'Telefoonnummer',
                    'postcode'       => 'Postcode',
                    'save-btn'       => 'Opslaan',
                    'select'         => 'Selecteren',
                    'shop-title'     => 'Winkelnaam',
                    'shop-url'       => 'Winkel URL',
                    'state'          => 'Provincie',
                    'street-address' => 'Straatadres',
                    'success'        => 'Verkoper succesvol aangemaakt.',
                    'title'          => 'Verkoper aanmaken',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Verkoper Vlaggen',

                    'datagrid' => [
                        'id'             => 'Id',
                        'customer-name'  => 'Klantnaam',
                        'customer-email' => 'Klant e-mail',
                        'date'           => 'Datum',
                        'reason'         => 'Reden',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Terug',
                'image-placeholder' => 'Productafbeelding',
                'no-result'         => 'Geen resultaten gevonden!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Producten zoeken',
            ],

            'assign-product' => [
                'already-selling'     => 'De verkoper verkoopt dit product al',
                'assign-successfully' => 'Product succesvol toegewezen aan de verkoper.',
                'back-btn'            => 'Terug',
                'condition'           => 'Conditie',
                'description'         => 'Beschrijving',
                'new'                 => 'Nieuw',
                'old'                 => 'Oud',
                'price'               => 'Prijs',
                'product-not-allowed' => 'De verkoper mag geen producten van type :type verkopen.',
                'quantities'          => 'Hoeveelheden',
                'save-btn'            => 'Opslaan',
                'select-condition'    => 'Selecteer conditie',
                'title'               => 'Product Toewijzen',

                'seller-details' => [
                    'additional-info' => 'Aanvullende informatie',
                    'approved'        => 'Goedgekeurd',
                    'disapproved'     => 'Afgekeurd',
                    'no-of-products'  => 'Aantal producten',
                    'status'          => 'Status',
                    'suspended'       => 'Gepauzeerd',
                    'title'           => 'Details van de verkoper',
                ],

                'product-details' => [
                    'active'            => 'Actief',
                    'disable'           => 'Uitschakelen',
                    'title'             => 'Productdetails',
                    'image-placeholder' => 'Productafbeelding',
                ],

                'images' => [
                    'info'  => 'De afbeeldingsresolutie moet zijn zoals 609px X 560px',
                    'title' => 'Afbeeldingen',
                ],

                'videos' => [
                    'error' => 'De video mag niet groter zijn dan :max kilobytes. Kies alstublieft een kleiner bestand.',
                    'info'  => 'De maximale grootte van de video moet zijn zoals :size',
                    'title' => 'Video\'s',
                ],

                'configurable' => [
                    'delete-btn'        => 'Verwijderen',
                    'edit-btn'          => 'Bewerken',
                    'image-placeholder' => 'Productafbeelding',
                    'qty'               => 'Aantal - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Varianten',

                    'edit' => [
                        'images'     => 'Afbeeldingen',
                        'price'      => 'Prijs',
                        'quantities' => 'Hoeveelheden',
                        'save-btn'   => 'Opslaan',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Link toevoegen',
                        'delete-btn'  => 'Verwijderen',
                        'edit-btn'    => 'Bewerken',
                        'empty-info'  => 'Om een link onderweg te maken.',
                        'empty-title' => 'Link toevoegen',
                        'file'        => 'Bestand : ',
                        'info'        => 'Het producttype "Downloadbaar" maakt het mogelijk om digitale producten te verkopen, zoals e-books, softwaretoepassingen, muziek, games, enz.',
                        'sample-file' => 'Voorbeeldbestand : ',
                        'sample-url'  => 'Voorbeeld-URL : ',
                        'title'       => 'Downloadbare links',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Download toegestaan',
                            'file'        => 'Bestand',
                            'file-type'   => 'Bestandstype',
                            'name'        => 'Titel',
                            'price'       => 'Prijs',
                            'sample'      => 'Voorbeeld',
                            'sample-type' => 'Voorbeeldtype',
                            'save-btn'    => 'Opslaan',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Voorbeeld toevoegen',
                        'delete-btn'  => 'Verwijderen',
                        'edit-btn'    => 'Bewerken',
                        'empty-info'  => 'Om een voorbeeld onderweg te maken.',
                        'empty-title' => 'Voorbeeld toevoegen',
                        'file'        => 'Bestand : ',
                        'info'        => 'Het producttype "Downloadbaar" maakt het mogelijk om digitale producten te verkopen, zoals e-books, softwaretoepassingen, muziek, games, enz.',
                        'title'       => 'Downloadbare voorbeelden',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'        => 'Bestand',
                            'file-type'   => 'Bestandstype',
                            'name'        => 'Titel',
                            'save-btn'    => 'Opslaan',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Terug',
                'suspended'      => 'Gepauseerd',
                'title'          => 'Verkoper bewerken',
                'update-btn'     => 'Verkoper bijwerken',
                'update-success' => 'Verkoper succesvol bijgewerkt.',

                'shop' => [
                    'address'          => 'Adres',
                    'city'             => 'Stad',
                    'country'          => 'Land',
                    'description'      => 'Beschrijving',
                    'email'            => 'E-mail',
                    'name'             => 'Naam',
                    'phone-number'     => 'Telefoonnummer',
                    'postcode'         => 'Postcode',
                    'select'           => 'Selecteer',
                    'shop-title'       => 'Winkelnaam',
                    'state'            => 'Provincie',
                    'street-address'   => 'Straatadres',
                    'title'            => 'Winkeldetails',
                    'url'              => 'Winkel URL',
                ],

                'profile' => [
                    'banner'         => 'Profielbanner',
                    'banner-size'    => 'Bannergrootte moet zijn zoals 300px X 200px',
                    'logo'           => 'Profiellogo',
                    'logo-size'      => 'Logogrootte moet zijn zoals 125px X 125px',
                    'social-links'   => ':name Link',
                    'title'          => 'Profielgegevens',
                ],

                'allowed-product' => [
                    'title' => 'Toegestane producten',
                ],

                'minimum-order-amount' => [
                    'title' => 'Minimale bestelhoeveelheid',
                ],

                'google-analytics-id' => [
                    'title' => 'Google Analytics-id',
                ],

                'commission' => [
                    'percentage' => 'Percentage',
                    'status'     => 'Status',
                    'title'      => 'Verkoperscommissie',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta-omschrijving',
                    'meta-keyword'     => 'Meta-trefwoorden',
                    'meta-title'       => 'Meta-titel',
                    'title'            => 'Meta-informatie',
                ],

                'policy' => [
                    'privacy'  => 'Privacybeleid',
                    'return'   => 'Retourbeleid',
                    'shipping' => 'Verzendbeleid',
                    'title'    => 'Beleid',
                ],

                'channels' => [
                    'title' => 'Kanaal',
                ],

                'users' => [
                    'email' => 'E-mail',
                    'id'    => 'ID',
                    'name'  => 'Naam',
                    'phone' => 'Telefoon',
                    'title' => 'Gebruikers',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Producten Toevoegen',
                'delete-success' => 'Product succesvol verwijderd.',
                'title'          => 'Producten',
                'update-success' => 'Product succesvol bijgewerkt.',

                'datagrid' => [
                    'approved'       => 'Goedgekeurd',
                    'delete'         => 'Verwijderen',
                    'disapproved'    => 'Afgekeurd',
                    'flags'          => 'Vlaggen',
                    'id'             => 'ID',
                    'is-owner'       => 'Is Eigenaar',
                    'no'             => 'Nee',
                    'out-of-stock'   => 'Uit voorraad',
                    'price'          => 'Prijs',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Productnaam',
                    'product-number' => 'Productnummer',
                    'product-type'   => 'Producttype',
                    'quantity'       => 'Hoeveelheid',
                    'seller-name'    => 'Verkopersnaam',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'total-flags'    => 'Totaal aantal vlaggen: :count',
                    'total-quantity' => ':quantity Beschikbaar',
                    'update-status'  => 'Status bijwerken',
                    'yes'            => 'Ja',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Product Vlaggen',

                    'datagrid' => [
                        'customer-email' => 'Klant Email',
                        'customer-name'  => 'Klantnaam',
                        'date'           => 'Datum',
                        'id'             => 'ID',
                        'reason'         => 'Reden',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Details van de beoordeling',
                'title'          => 'Productbeoordelingen',

                'datagrid' => [
                    'approved'      => 'Goedgekeurd',
                    'comment'       => 'Reactie',
                    'customer-name' => 'Naam van klant',
                    'date'          => 'Datum',
                    'disapproved'   => 'Afgekeurd',
                    'id'            => 'ID',
                    'images'        => 'Afbeeldingen',
                    'pending'       => 'In afwachting',
                    'product'       => 'Product',
                    'product-name'  => 'Productnaam',
                    'rating'        => 'Beoordeling',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Winkelnaam',
                    'status'        => 'Status',
                    'title'         => 'Titel',
                    'update-status' => 'Bijwerkingsstatus',
                    'view'          => 'Bekijken',
                ],
            ],

            'update-success' => 'Productrecensies succesvol bijgewerkt',
            'delete-success' => 'Productrecensies succesvol verwijderd.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Verkopersbeoordelingen',

                'datagrid' => [
                    'approved'            => 'Goedgekeurd',
                    'comment'             => 'Opmerking',
                    'customer-name'       => 'Klantnaam',
                    'date'                => 'Datum',
                    'delete'              => 'Verwijderen',
                    'disapproved'         => 'Afgekeurd',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Verkopersbeoordelingen succesvol verwijderd.',
                    'mass-update-success' => 'Verkopersbeoordelingen succesvol bijgewerkt.',
                    'pending'             => 'In afwachting',
                    'rating'              => 'Beoordeling',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Beoordelingstitel',
                    'seller-name'         => 'Naam verkoper',
                    'shop-title'          => 'Winkelnaam',
                    'status'              => 'Status',
                    'update-status'       => 'Status bijwerken',
                ],
            ],

            'delete-success' => 'Verkopersbeoordeling succesvol verwijderd.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Bestellingen',

                'datagrid' => [
                    'canceled'        => 'Geannuleerd',
                    'closed'          => 'Gesloten',
                    'commission'      => 'Commissie',
                    'completed'       => 'Voltooid',
                    'customer'        => 'Klant',
                    'date'            => 'Datum',
                    'discount'        => 'Korting',
                    'email'           => 'E-mail',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Bruto Bedrag',
                    'id'              => 'ID',
                    'items'           => 'Items',
                    'location'        => 'Locatie',
                    'order-id'        => 'Bestelling ID - #:id',
                    'payment'         => 'Betaling',
                    'pending'         => 'In behandeling',
                    'pending-payment' => 'In afwachting van betaling',
                    'processing'      => 'Verwerking',
                    'seller'          => 'Verkoper',
                    'seller-earn'     => 'Verdienste',
                    'shipment'        => 'Verzending',
                    'shop'            => 'Winkel',
                    'status'          => 'Status',
                    'view'            => 'Bekijk',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transacties',

                'datagrid' => [
                    'base-total'     => 'Basis Totaal',
                    'comment'        => 'Opmerking',
                    'customer-name'  => 'Klantnaam',
                    'id'             => 'ID',
                    'seller-id'      => 'Verkoper ID',
                    'seller-name'    => 'Verkopersnaam',
                    'transaction-id' => 'Transactie ID',
                    'view'           => 'Bekijken',
                ],
            ],

            'view' => [
                'commission'        => 'Commissie',
                'created-on'        => 'aangemaakt op :datum,',
                'name'              => 'Naam',
                'payment-method'    => ':methode Betaling',
                'price'             => 'Prijs',
                'qty'               => 'Aantal',
                'seller-total'      => 'Verkoper Totaal',
                'shipping-handling' => 'Verzending en Verwerking',
                'subtotal'          => 'Subtotaal',
                'tax'               => 'Belasting',
                'title'             => 'Transacties #:transaction_id',
                'total'             => 'Totaal',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Reden Aanmaken',
                'delete-success'      => 'Markeer Reden succesvol verwijderd.',
                'mass-delete-success' => 'Markeer Redenen succesvol verwijderd.',
                'mass-update-success' => 'Markeer Redenen succesvol bijgewerkt.',
                'title'               => 'Markeer Redenen',

                'datagrid' => [
                    'delete'        => 'Verwijderen',
                    'edit'          => 'Bewerken',
                    'id'            => 'Id',
                    'name'          => 'Naam',
                    'update-status' => 'Status Bijwerken',

                    'status' => [
                        'active'  => 'Actief',
                        'disable' => 'Uitschakelen',
                        'title'   => 'Status',
                    ],

                    'type' => [
                        'product' => 'Product',
                        'seller'  => 'Verkoper',
                        'title'   => 'Type',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Beheerder',
                'back-btn' => 'Terug',
                'general'  => 'Algemeen',
                'label'    => 'Label',
                'product'  => 'Product',
                'save-btn' => 'Reden Opslaan',
                'seller'   => 'Verkoper',
                'status'   => 'Status',
                'title'    => 'Reden Aanmaken',
                'type'     => 'Type',
            ],

            'edit' => [
                'admin'    => 'Beheerder',
                'back-btn' => 'Terug',
                'general'  => 'Algemeen',
                'label'    => 'Label',
                'product'  => 'Product',
                'save-btn' => 'Reden Opslaan',
                'seller'   => 'Verkoper',
                'status'   => 'Status',
                'title'    => 'Reden Bewerken',
                'type'     => 'Type',
            ],

            'create-success' => 'Markeer Reden succesvol aangemaakt.',
            'update-success' => 'Markeer Reden succesvol bijgewerkt.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Categorie toewijzen',
                'create-success' => 'Categorie succesvol toegewezen.',
                'delete-failed'  => 'Verwijderen van categorie mislukt!',
                'delete-success' => 'Categorie Succesvol Verwijderd.',
                'title'          => 'Verkoper Categorieën',
                'update-success' => 'Categorie Succesvol Bijgewerkt.',

                'datagrid' => [
                    'delete' => 'Verwijderen',
                    'edit'   => 'Bewerken',
                    'id'     => 'ID',
                    'name'   => 'Naam',
                ],
            ],

            'create' => [
                'back-btn'      => 'Terug',
                'save-btn'      => 'Categorie Opslaan',
                'select-seller' => 'Selecteer Verkoper',
                'seller'        => 'Verkoper',
                'title'         => 'Categorie toewijzen',
            ],

            'edit' => [
                'back-btn'   => 'Terug',
                'seller'     => 'Verkoper',
                'title'      => 'Categorie Bewerken',
                'update-btn' => 'Categorie Bijwerken',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Opmerking',
                'no-amount-remaining'  => 'Geen bedrag meer te betalen!',
                'order-not-found'      => 'Bestelling Niet Gevonden!',
                'pay-btn'              => 'Nu Betalen',
                'pay-to-seller'        => 'Betaling aan Verkoper',
                'payment-success'      => 'Betaling aan verkoper is succesvol!',
                'something-went-wrong' => 'Er is iets misgegaan!',
                'title'                => 'Betalingsverzoek',

                'datagrid' => [
                    'already-paid'          => 'Al Betaald',
                    'canceled'              => 'Geannuleerd',
                    'closed'                => 'Gesloten',
                    'completed'             => 'Voltooid',
                    'customer-name'         => 'Naam van klant',
                    'date'                  => 'Datum',
                    'email'                 => 'E-mail',
                    'fraud'                 => 'Fraude',
                    'gross-amt'             => 'Bruto bedrag',
                    'id'                    => 'Bestelnummer',
                    'invoice-pending'       => 'Factuur in afwachting',
                    'order-canceled'        => 'Bestelling Geannuleerd',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Betalen',
                    'pending'               => 'In afwachting',
                    'pending-payment'       => 'In afwachting van betaling',
                    'processing'            => 'Verwerken',
                    'refunded'              => 'Terugbetaald',
                    'remaining-total'       => 'Resterend Totaal',
                    'request-payment'       => 'Betaling Aanvragen',
                    'seller'                => 'Verkoper',
                    'seller-total-invoiced' => 'Verkoper Totaal Gefactureerd',
                    'shop'                  => 'Winkel',
                    'status'                => 'Status',
                    'total-paid'            => 'Totaal Betaald',
                    'view'                  => 'Bekijken',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Verkoper Blokkeren',
                'block-success'        => 'Verkoper succesvol geblokkeerd!',
                'chat-history-cleared' => 'Chatgeschiedenis succesvol gewist!',
                'clear-chat-history'   => 'Chatgeschiedenis Wissen',
                'exit'                 => 'Afsluiten',
                'message-failed'       => 'Bericht verzenden mislukt!',
                'message-sent'         => 'Bericht succesvol verzonden!',
                'no-message'           => 'Geen bericht gevonden!',
                'search'               => 'Zoeken',
                'search-message'       => 'Zoek bericht',
                'seller-blocked'       => 'U heeft deze verkoper geblokkeerd. U kunt geen bericht naar deze verkoper sturen.',
                'sellers'              => 'Verkopers',
                'title'                => 'Communicatie',
                'type-message'         => 'Typ hier uw bericht...',
                'unblock-seller'       => 'Verkoper Deblokkeren',
                'unblock-success'      => 'Verkoper succesvol gedeblokkeerd!',
                'welcome-message'      => 'Welkom bij de Marketplace Communicatie!',

                'filters' => [
                    'all-messages'      => 'Alle berichten',
                    'prev-fifteen-days' => 'Vorige 15 dagen',
                    'prev-seven-days'   => 'Vorige 7 dagen',
                    'prev-six-months'   => 'Vorige 6 maanden',
                    'prev-thirty-days'  => 'Vorige 30 dagen',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Voorraadbronnen',

                'datagrid' => [
                    'active'      => 'Actief',
                    'code'        => 'Code',
                    'id'          => 'Id',
                    'inactive'    => 'Inactief',
                    'name'        => 'Naam',
                    'seller-name' => 'Verkoper Naam',
                    'shop-title'  => 'Winkeltitel',
                    'status'      => 'Status',
                ],

                'view' => [
                    'active'         => 'Actief',
                    'address'        => 'Bronadres',
                    'city'           => 'Stad',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contactgegevens',
                    'contact-name'   => 'Naam',
                    'contact-number' => 'Contactnummer',
                    'country'        => 'Land',
                    'description'    => 'Beschrijving',
                    'general-info'   => 'Algemene Informatie',
                    'inactive'       => 'Inactief',
                    'latitude'       => 'Breedtegraad',
                    'longitude'      => 'Lengtegraad',
                    'name'           => 'Naam',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Prioriteit',
                    'seller-info'    => 'Verkoper Informatie',
                    'seller-name'    => 'Verkoper Naam',
                    'settings'       => 'Instellingen',
                    'shop-title'     => 'Winkeltitel',
                    'state'          => 'Provincie',
                    'street'         => 'Straat',
                    'title'          => 'Voorraadbron #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Installeer het Marketplace-pakket.',
            'migrate'     => 'Alle tabellen naar de database migreren (dit kan even duren)...',
            'seed'        => 'Gegevens worden in de database ingevoerd...',
            'publish'     => 'Publiceren van assets en configuraties...',
            'cache'       => 'Cache wordt gewist...',
            'finish'      => 'Marketplace-pakket succesvol geïnstalleerd.',
        ],

        'version' => [
            'description' => 'Geeft de huidige versie van het Marketplace-pakket weer.',
            'comment'     => 'Marketplace-versie: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Beste :customer_name',
        'dear-admin'  => 'Beste Beheerder',
        'dear-seller' => 'Beste verkoper',

        'seller' => [
            'registration' => [
                'date'        => 'Registratiedatum:',
                'description' => 'We zijn verheugd u te informeren over een nieuwe verkopersregistratie op ons platform. Neem even de tijd om de verkoper welkom te heten op ons platform.',
                'details'     => 'Hier zijn de details:',
                'email'       => 'E-mailadres:',
                'greeting'    => 'Ik hoop dat dit bericht u goed bereikt.',
                'name'        => 'Verkopersnaam:',
                'shop'        => 'Winkel-URL:',
                'subject'     => 'Nieuwe Verkoper Registratie',
            ],

            'forgot-password' => [
                'description'    => 'U ontvangt deze e-mail omdat we een verzoek hebben ontvangen om het wachtwoord van uw account opnieuw in te stellen.',
                'greeting'       => 'Wachtwoord vergeten!',
                'reset-password' => 'Wachtwoord opnieuw instellen',
                'subject'        => 'E-mail voor het opnieuw instellen van het wachtwoord',
            ],

            'welcome' => [
                'description' => 'Welkom aan boord! We zijn verheugd u in de familie te verwelkomen. Uw aanwezigheid als verkoper voegt immense waarde toe aan ons platform, en we kijken uit naar een succesvolle samenwerking.',
                'greeting'    => 'Welkom en bedankt voor uw registratie bij ons!',
                'subject'     => 'Verkopers Welkomstbericht',
            ],

            'approval' => [
                'approved'    => 'Uw verzoek om verkoper te worden is goedgekeurd.',
                'disapproved' => 'Uw verzoek om verkoper te worden is afgewezen.',
                'greeting'    => 'Welkom en bedankt voor uw registratie bij ons!',
                'subject'     => 'Goedkeuringsbericht voor Verkoper',
            ],

            'update' => [
                'description' => 'Uw profiel is succesvol bijgewerkt.',
                'greeting'    => 'Ik hoop dat dit bericht u goed bereikt.',
                'subject'     => 'Melding van Bijwerken Verkopersprofiel',
            ],

            'good-bye' => [
                'description' => 'Het was een genoegen om met u samen te werken, en ik ben oprecht dankbaar voor uw professionaliteit, toewijding en de hoge kwaliteit van uw producten/diensten. Uw inzet voor klanttevredenheid is niet onopgemerkt gebleven en is een sleutelfactor geweest in onze positieve ervaring.',
                'greeting'    => 'Ik vertrouw erop dat dit bericht u goed bereikt.',
                'subject'     => 'Afscheidsbericht Verkoper',
            ],

            'product-approval' => [
                'approved'    => 'Je product :name is goedgekeurd.',
                'disapproved' => 'Je product :name is afgekeurd.',
                'greeting'    => 'Welkom en bedankt voor je registratie bij ons!',
                'subject'     => 'Kennisgeving van Goedkeuring van Verkopersproduct',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Je hebt een nieuwe bestelling :order_id geplaatst op :created_at',
                    'subject'  => 'Bevestiging nieuwe bestelling',
                    'summary'  => 'Samenvatting van de bestelling',
                    'title'    => 'Bestelbevestiging!',
                ],

                'canceled' => [
                    'greeting' => 'Bestelling :order_id is geannuleerd',
                    'subject'  => 'Bevestiging van orderannulering',
                    'summary'  => 'Overzicht van de bestelling',
                    'title'    => 'Bestelling geannuleerd!',
                ],

                'billing-address'   => 'Factuuradres',
                'contact'           => 'Contact',
                'discount'          => 'Korting',
                'grand-total'       => 'Totaalbedrag',
                'name'              => 'Naam',
                'payment'           => 'Betaling',
                'price'             => 'Prijs',
                'qty'               => 'Aantal',
                'shipping'          => 'Verzending',
                'shipping-address'  => 'Verzendadres',
                'shipping-handling' => 'Verzend- en verwerkingskosten',
                'sku'               => 'SKU',
                'subtotal'          => 'Subtotaal',
                'tax'               => 'Belasting',
            ],

            'payment-request' => [
                'greeting'  => 'Ik hoop dat dit bericht je goed bereikt.',
                'paid'      => 'Hoi.. Je hebt betaling ontvangen voor bestelling :order_id.',
                'requested' => 'Verkoper :seller_name wordt verzocht om betaling van bestelling :order_id.',
                'subject'   => 'Kennisgeving van verzoek om betaling van verkoper',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-mail:- :email',
            'greeting' => 'Ik hoop dat dit bericht je goed bereikt.',
            'info'     => 'Hallo, :name heeft een vraag voor je. Bekijk vriendelijk de details hieronder.',
            'query'    => 'Vraag: :query',
            'subject'  => 'Verkoper Contactmelding',
            'topic'    => 'Onderwerp: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Hallo, ":name" heeft een probleem gemeld met het product ":product_name" van verkoper ":seller_name". Gelieve de onderstaande details te bekijken.',
            'greeting'   => 'Ik hoop dat dit bericht u in goede gezondheid bereikt.',
            'reason'     => 'Reden:- :reason',
            'seller-msg' => 'Hallo, ":name" heeft een probleem met uw product ":product_name" gemeld. Gelieve de onderstaande details te bekijken.',
            'subject'    => 'Productrapportmelding',
        ],

        'report-seller' => [
            'admin-msg'  => 'Hallo, :name heeft een probleem gemeld tegen :seller_name. Bekijk de details hieronder.',
            'greeting'   => 'Ik hoop dat dit bericht je goed bereikt.',
            'reason'     => 'Reden: :reason',
            'seller-msg' => 'Hallo, :name heeft een probleem gemeld met betrekking tot jou. Bekijk de details hieronder.',
            'subject'    => 'Verkoper Rapportmelding',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Maak een Velocity-verkopersaccount aan',
            'banner-description'  => 'Velocity kan een geweldig platform zijn om uw producten te verkopen aan nieuwe bedrijven in India. Door deze tips te volgen, kunt u uzelf opstellen voor succes als Velocity-verkoper!',
            'banner-btn-title'    => 'Open Winkel',
            'feature-title'       => 'Waarom houden verkopers ervan om op Velocity te verkopen?',
            'feature-description' => 'Verkopers houden van high-velocity platforms omdat ze de potentie bieden voor verhoogde verkopen, betere blootstelling en een efficiënte verkoopervaring die kan bijdragen aan zakelijke groei en succes.',
            'feature-box1-title'  => 'Verhoogde Verkoopkansen',
            'feature-box1-desc'   => 'Verkopers houden van high-velocity platforms omdat ze de potentie bieden voor verhoogde verkopen, betere blootstelling en een efficiënte verkoopervaring die kan bijdragen aan zakelijke groei en succes.',
            'feature-box2-title'  => 'Snellere Omzet',
            'feature-box2-desc'   => 'Producten verkopen doorgaans sneller op high-velocity platforms, wat leidt tot snellere voorraadomzet en inkomsten voor verkopers.',
            'feature-box3-title'  => 'Verbeterde Zichtbaarheid',
            'feature-box3-desc'   => 'Deze platforms bieden grotere zichtbaarheid en blootstelling voor verkopersproducten, wat resulteert in meer weergaven en potentiële verkopen.',
            'feature-box4-title'  => 'Efficiëntie en Gemak',
            'feature-box4-desc'   => 'High-velocity platforms hebben vaak gestroomlijnde processen en tools die het verkopen efficiënter maken, waardoor verkopers tijd en moeite besparen bij het beheren van hun online bedrijven.',
            'journey-title'       => 'Begin uw reis op Velocity',
            'journey-description' => 'Begin met verkopen aan grote klanten over de hele wereld, dag en nacht.',
            'journey-step1-title' => 'Word Verkoper',
            'journey-step1-desc'  => 'Stel uw winkel in met alle basisinformatie.',
            'journey-step2-title' => 'Producten Vermelden',
            'journey-step2-desc'  => 'Vermeld de producten in de winkel zodat de klant ze kan bekijken en kopen.',
            'journey-step3-title' => 'Ontvang Bestelling',
            'journey-step3-desc'  => 'Ontvang bestellingen van een breed scala aan klanten over de hele wereld.',
            'journey-step4-title' => 'Productlevering',
            'journey-step4-desc'  => 'Zodra het product is geleverd en de betaling is ontvangen.',
            'journey-step5-title' => 'Betaling',
            'journey-step5-desc'  => 'Betalingsverzoek, ontvang betaling na aftrek van de commissie.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Beschadigd product',
            'damaged-product-sold'      => 'Beschadigd product verkocht door verkoper',
            'duplicate-product'         => 'Duplicaat product',
            'duplicate-product-sold'    => 'Duplicaat product verkocht door verkoper',
            'missing-product-parts'     => 'Ontbrekende productonderdelen',
            'over-price-product'        => 'Overgeprijsd product',
            'over-price-product-sold'   => 'Overgeprijsd product verkocht door verkoper',
            'poor-product-quality'      => 'Slechte productkwaliteit',
            'poor-product-quality-sold' => 'Slechte kwaliteit product verkocht door verkoper',
            'receive-wrong-product'     => 'Verkeerd product ontvangen',
            'wrong-product-sold'        => 'Verkeerd product verkocht door verkoper',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Downloaden',
                    'export'     => 'Exporteren',
                    'no-records' => 'Niets om te exporteren',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Startpagina',
                    'logout'     => 'Uitloggen',
                    'my-profile' => 'Mijn profiel',
                    'visit-shop' => 'Winkel bezoeken',

                    'mega-search' => [
                        'customers'                       => 'Klanten',
                        'explore-all-customers'           => 'Verken alle klanten',
                        'explore-all-matching-customers'  => 'Verken alle klanten die overeenkomen met “:query” (:count)',
                        'explore-all-matching-orders'     => 'Verken alle bestellingen die overeenkomen met “:query” (:count)',
                        'explore-all-matching-products'   => 'Verken alle producten die overeenkomen met “:query” (:count)',
                        'explore-all-orders'              => 'Verken alle bestellingen',
                        'explore-all-products'            => 'Verken alle producten',
                        'orders'                          => 'Bestellingen',
                        'products'                        => 'Producten',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'Mega Zoeken',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Inklappen',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Afbeelding toevoegen',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Alleen afbeeldingsbestanden (.jpeg, .jpg, .png, ..) zijn toegestaan.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Video toevoegen',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Alleen videobestanden (.mp4, .mov, .ogg ..) zijn toegestaan.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Document toevoegen',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Alleen documentbestanden (:types ..) zijn toegestaan.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Voorzijde',
                    'next'       => 'Volgende',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Grootte',
                    'text'       => 'Tekst',
                    'use-cases'  => 'Gebruikssituaties',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Boekingen',
            'communication'     => 'Communicatie',
            'customers'         => 'Klanten',
            'dashboard'         => 'Dashboard',
            'extensions'        => 'Extensies',
            'general'           => 'Algemeen',
            'inventory-sources' => 'Voorraadbronnen',
            'manage-profile'    => 'Profiel Beheren',
            'orders'            => 'Bestellingen',
            'product-reviews'   => 'Productbeoordelingen',
            'products'          => 'Producten',
            'reporting'         => 'Rapportage',
            'roles'             => 'Rollen',
            'sales'             => 'Verkopen',
            'seller-reviews'    => 'Verkopersbeoordelingen',
            'settings'          => 'Instellingen',
            'transaction'       => 'Transacties',
            'users'             => 'Gebruikers',
        ],

        'acl' => [
            'assign'            => 'Toewijzen',
            'bookings'          => 'Boekingen',
            'cancel'            => 'Annuleren',
            'communication'     => 'Communicatie',
            'create'            => 'Aanmaken',
            'customers'         => 'Klanten',
            'dashboard'         => 'Dashboard',
            'delete'            => 'Verwijderen',
            'edit'              => 'Bewerken',
            'extensions'        => 'Extensies',
            'general'           => 'Algemeen',
            'inventory-sources' => 'Voorraadbronnen',
            'invoice'           => 'Factuur',
            'orders'            => 'Bestellingen',
            'payment-request'   => 'Betalingsverzoek',
            'print'             => 'Afdrukken',
            'print-invoice'     => 'Factuur afdrukken',
            'product-reviews'   => 'Productbeoordelingen',
            'products'          => 'Producten',
            'reporting'         => 'Rapportage',
            'sales'             => 'Verkoop',
            'seller-reviews'    => 'Verkopersbeoordelingen',
            'settings'          => 'Instellingen',
            'shipment'          => 'Verzending',
            'transactions'      => 'Transacties',
            'view'              => 'Bekijken',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Nieuw Product Toevoegen',
            'assign'            => 'Toewijzen',
            'bookings'          => 'Boekingen',
            'communication'     => 'Communicatie',
            'create'            => 'Aanmaken',
            'customers'         => 'Klanten',
            'dashboard'         => 'Dashboard',
            'edit'              => 'Bewerken',
            'extensions'        => 'Extensies',
            'general'           => 'Algemeen',
            'inventory-sources' => 'Voorraadbronnen',
            'manage-profile'    => 'Profiel Beheren',
            'orders'            => 'Bestellingen',
            'product-reviews'   => 'Productbeoordelingen',
            'products'          => 'Producten',
            'reporting'         => 'Rapportage',
            'roles'             => 'Rollen',
            'sales'             => 'Verkopen',
            'seller-reviews'    => 'Verkopersbeoordelingen',
            'settings'          => 'Instellingen',
            'title'             => 'Profiel',
            'transaction'       => 'Transacties',
            'users'             => 'Gebruikers',
            'view'              => 'Bekijken',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Inloggen',
            'create-your-account' => 'Maak je account aan',
            'email'               => 'E-mail',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (Geregistreerd in India). Alle rechten voorbehouden.',
            'forgot-pass'         => 'Wachtwoord vergeten?',
            'form-login-text'     => 'Als je een account hebt, log dan in met je e-mailadres.',
            'invalid-credentials' => 'Controleer je gegevens en probeer opnieuw.',
            'new-seller'          => 'Nieuwe verkoper?',
            'not-approved'        => 'Je activatie wacht op goedkeuring van de beheerder',
            'page-title'          => 'Verkoper Login',
            'password'            => 'Wachtwoord',
            'show-password'       => 'Wachtwoord tonen',
            'suspended-message'   => 'Je account is gepauseerd. Neem contact op met de beheerder voor vragen.',
            'title'               => 'Inloggen',
        ],

        'signup' => [
            'account-exists'   => 'Heb je al een account?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Registreren',
            'confirm-pass'     => 'Wachtwoord bevestigen',
            'email'            => 'E-mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Geregistreerd in India). Alle rechten voorbehouden.',
            'form-signup-text' => 'Als je nieuw bent in onze winkel, zijn we blij je als lid te hebben.',
            'name'             => 'Naam',
            'page-title'       => 'Word verkoper',
            'password'         => 'Wachtwoord',
            'sign-in-button'   => 'Inloggen',
            'success'          => 'Account succesvol aangemaakt.',
            'url'              => 'Winkel URL',
        ],

        'forgot-password' => [
            'already-sent'         => 'We hebben de link voor het opnieuw instellen van je wachtwoord al per e-mail verzonden.',
            'back'                 => 'Terug naar inloggen?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-mail',
            'email-not-exist'      => 'We kunnen geen gebruiker vinden met dat e-mailadres.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (Geregistreerd in India). Alle rechten voorbehouden.',
            'forgot-password-text' => 'Als je je wachtwoord bent vergeten, herstel het door je e-mailadres in te voeren.',
            'page-title'           => 'Wachtwoord vergeten?',
            'reset-link-sent'      => 'We hebben je resetwachtwoordlink per e-mail verzonden.',
            'sign-in-button'       => 'Inloggen',
            'submit'               => 'Wachtwoord opnieuw instellen',
            'title'                => 'Wachtwoord herstellen',
        ],

        'reset-password' => [
            'back-link-title'  => 'Terug naar inloggen',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Wachtwoord bevestigen',
            'email'            => 'Geregistreerd e-mailadres',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Geregistreerd in India). Alle rechten voorbehouden.',
            'password'         => 'Wachtwoord',
            'submit-btn-title' => 'Wachtwoord opnieuw instellen',
            'title'            => 'Wachtwoord opnieuw instellen',
        ],

        'dashboard' => [
            'add-product'           => 'Product toevoegen',
            'avg-order-sell'        => 'Gemiddelde bestelling verkopen',
            'category-info'         => 'Geen categorie gevonden voor geselecteerde periode',
            'complete-profile-link' => 'Voltooi je profiel &rarr;',
            'completed-orders'      => 'Voltooid (:count)',
            'customer-info'         => 'Geen klant gevonden voor geselecteerde periode',
            'date-range'            => 'Datumreeks',
            'empty-threshold'       => 'Lege drempel',
            'empty-threshold-desc'  => 'Er zijn geen producten beschikbaar',
            'end-date'              => 'Einddatum',
            'hi-comment'            => 'Bekijk snel wat er gaande is in je winkel.',
            'hi-seller'             => 'Hallo! :seller_name',
            'month'                 => 'Deze maand',
            'no-category'           => 'Geen gegevens beschikbaar',
            'no-customer'           => 'Geen gegevens beschikbaar',
            'no-record-available'   => 'Geen gegevens beschikbaar.',
            'order-count'           => ':total Bestellingen',
            'overall-details'       => 'Algemene details',
            'pending-orders'        => 'In behandeling (:count)',
            'per-unit'              => ':price/Unit',
            'processing-orders'     => 'Verwerking (:count)',
            'product-info'          => 'Voeg onderweg gerelateerde producten toe',
            'profile-score'         => 'Profielscore',
            'profile-score-desc'    => 'Maximaliseer uw zichtbaarheid door uw profielinformatie volledig te houden.',
            'qty-stock'             => ':qty op voorraad',
            'refunded-orders'       => 'Terugbetaald (:count)',
            'remaining-payout'      => 'Resterende uitbetaling',
            'start-date'            => 'Startdatum',
            'stock-threshold'       => 'Voorraaddrempel',
            'title'                 => 'Dashboard',
            'today'                 => 'Vandaag',
            'top-categories'        => 'Topcategorieën',
            'top-customers'         => 'Klant met de meeste verkopen',
            'top-products'          => 'Meest verkochte producten',
            'total-customers'       => 'Totale klanten',
            'total-orders'          => 'Totale bestellingen',
            'total-payout'          => 'Totale uitbetaling',
            'total-sale'            => 'Totale verkoop: :total',
            'total-sales'           => 'Totale omzet',
            'view-all-btn'          => 'Alles bekijken',
            'visitor-count'         => 'Bezoekers - :count',
            'week'                  => 'Deze week',
            'year'                  => 'Dit jaar',
        ],

        'orders' => [
            'index' => [
                'title' => 'Bestellingen',

                'datagrid' => [
                    'canceled'        => 'Geannuleerd',
                    'closed'          => 'Gesloten',
                    'commission'      => 'Commissie',
                    'completed'       => 'Voltooid',
                    'customer'        => 'Klant',
                    'date'            => 'Datum',
                    'discount'        => 'Korting',
                    'email'           => 'E-mail',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Brutobedrag',
                    'id'              => 'Id',
                    'invoice-pending' => 'Factuur in behandeling',
                    'items'           => 'Items',
                    'location'        => 'Locatie',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Betaald',
                    'payment'         => 'Betaling',
                    'payment-request' => 'Betalingsverzoek',
                    'pending'         => 'In afwachting',
                    'pending-payment' => 'Betaling in behandeling',
                    'processing'      => 'Verwerking',
                    'refunded'        => 'Terugbetaald',
                    'requested'       => 'Aangevraagd',
                    'seller-earn'     => 'Verkoper Verdien',
                    'shipment'        => 'Verzending',
                    'status'          => 'Status',
                    'transaction'     => 'Transactie',
                    'view'            => 'Bekijk',
                ],

                'payment-req-success'  => 'Uw betalingsverzoek is succesvol ingediend',
                'something-went-wrong' => 'Er is iets misgegaan!',
            ],

            'view' => [
                'admin-commission'           => 'Administratieve commissie',
                'billing-address'            => 'Factuuradres',
                'by-customer'                => 'Door klant - :name',
                'cancel-btn'                 => 'Annuleren',
                'cancel-confirm-msg'         => 'Weet u zeker dat u deze bestelling wilt annuleren?',
                'cancel-error-msg'           => 'De bestelling kan niet worden geannuleerd',
                'cancel-success-msg'         => 'De bestelling is geannuleerd',
                'canceled'                   => 'Geannuleerd',
                'closed'                     => 'Gesloten',
                'completed'                  => 'Voltooid',
                'discount'                   => 'Korting',
                'fraud'                      => 'Fraude',
                'grand-total'                => 'Totaalbedrag',
                'info'                       => 'Informatie',
                'item-canceled'              => 'Geannuleerd (:qty_canceled)',
                'item-invoice'               => 'Gefactureerd (:qty_invoiced)',
                'item-ordered'               => 'Besteld (:qty_ordered)',
                'item-refunded'              => 'Terugbetaald (:qty_refunded)',
                'item-shipped'               => 'Verzonden (:qty_shipped)',
                'item-status'                => 'Item Status',
                'payment-method'             => 'Betalingsmethode',
                'pending'                    => 'In afwachting',
                'pending_payment'            => 'Betaling in behandeling',
                'permission-error'           => 'U hebt geen toestemming om de bestelling te annuleren',
                'place-on'                   => 'Plaats op : :date',
                'price'                      => 'Prijs',
                'price-excl-tax'             => 'Prijs (excl. btw)',
                'price-incl-tax'             => 'Prijs (incl. btw)',
                'processing'                 => 'Verwerking',
                'product'                    => 'Product',
                'shipping-address'           => 'Verzendadres',
                'shipping-handling'          => 'Verzending en behandeling',
                'shipping-handling-excl-tax' => 'Verzending & Handling (Excl. BTW)',
                'shipping-handling-incl-tax' => 'Verzending & Handling (Incl. BTW)',
                'shipping-method'            => 'Verzendmethode',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Subtotaal',
                'sub-total-excl-tax'         => 'Subtotaal (Excl. BTW)',
                'sub-total-incl-tax'         => 'Subtotaal (Incl. BTW)',
                'tax'                        => 'Belasting',
                'tax-amount'                 => 'Belastingbedrag',
                'tax-percent'                => 'Belastingpercentage',
                'title'                      => 'Bestelling #:order_id',
                'total'                      => 'Totaal',
                'total-due'                  => 'Totaal verschuldigd',
                'total-paid'                 => 'Totaal betaald',
                'total-refunded'             => 'Totaal terugbetaald',
                'total-seller-amt'           => 'Totaal verkopersbedrag',

                'invoices' => [
                    'bank-details'               => 'Bankgegevens',
                    'bill-to'                    => 'Factuur aan',
                    'contact'                    => 'Contact',
                    'contact-number'             => 'Contactnummer',
                    'created-on'                 => 'aangemaakt op: :date_time',
                    'date'                       => 'Factuurdatum',
                    'discount'                   => 'Korting',
                    'excl-tax'                   => 'Excl. BTW:',
                    'grand-total'                => 'Eindtotaal',
                    'individual-invoice'         => 'Factuur #:invoice_id',
                    'invoice'                    => 'Factuur',
                    'invoice-id'                 => 'Factuur ID',
                    'name'                       => 'Naam',
                    'order-date'                 => 'Besteldatum',
                    'order-id'                   => 'Bestelnummer',
                    'payment-method'             => 'Betalingsmethode',
                    'payment-terms'              => 'Betalingsvoorwaarden',
                    'price'                      => 'Prijs',
                    'print'                      => 'Afdrukken',
                    'product-name'               => 'Productnaam',
                    'qty'                        => 'Aantal',
                    'ship-to'                    => 'Verzenden naar',
                    'shipping-handling'          => 'Verzending & Verwerking',
                    'shipping-handling-excl-tax' => 'Verzending & Verwerking (Excl. BTW)',
                    'shipping-handling-incl-tax' => 'Verzending & Verwerking (Incl. BTW)',
                    'shipping-method'            => 'Verzendmethode',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotaal',
                    'sub-total-excl-tax'         => 'Subtotaal (Excl. BTW)',
                    'sub-total-incl-tax'         => 'Subtotaal (Incl. BTW)',
                    'tax'                        => 'Belasting',
                    'tax-amount'                 => 'Belastingbedrag',
                    'title'                      => 'Facturen',
                    'vat-number'                 => 'BTW-nummer',
                ],

                'shipments' => [
                    'carrier-title'       => 'Vervoerderstitel',
                    'created-on'          => 'gemaakt op :date_time',
                    'individual-shipment' => 'Verzendingen #:track_number',
                    'inventory-source'    => 'Inventarisbron',
                    'name'                => 'Naam',
                    'qty'                 => 'Aantal',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Verzendingen',
                    'tracking-number'     => 'Volgnummer',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Aanpassingskosten',
                    'adjustment-refund'          => 'Aanpassing Terugbetaling',
                    'created-on'                 => 'gemaakt op :date_time',
                    'discount'                   => 'Korting',
                    'grand-total'                => 'Eindtotaal',
                    'individual-refund'          => 'Terugbetaling #:refund_id',
                    'no-result-found'            => 'We konden geen records vinden.',
                    'price'                      => 'Prijs',
                    'product-name'               => 'Naam',
                    'qty'                        => 'Aantal',
                    'shipping-handling'          => 'Verzend- en Verwerkingskosten',
                    'shipping-handling-excl-tax' => 'Verzending & Handling (Excl. BTW)',
                    'shipping-handling-incl-tax' => 'Verzending & Handling (Incl. BTW)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Subtotaal (Excl. BTW)',
                    'sub-total-incl-tax'         => 'Subtotaal (Incl. BTW)',
                    'subtotal'                   => 'Subtotaal',
                    'tax'                        => 'Belasting',
                    'tax-amount'                 => 'Belastingbedrag',
                    'title'                      => 'Terugbetalingen',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Factuur',
                'invoice-success'  => 'Factuur succesvol aangemaakt',
                'permission-error' => 'U hebt geen toestemming om een factuur voor de bestelling te maken',
                'price'            => 'Prijs',
                'product-name'     => 'Productnaam',
                'qty'              => 'Aantal',
                'qty-error'        => 'De gevraagde hoeveelheid is niet beschikbaar',
                'sub-total'        => 'Factuur <br> Subtotaal',
                'title'            => 'Maak Factuur',
                'total'            => 'Totaal',
            ],

            'shipments' => [
                'avl-qty'          => 'Beschikbaar - :qty Aantal',
                'carrier-title'    => 'Vervoerderstitel',
                'create-btn'       => 'Verzenden',
                'ordered-qty'      => 'Bestelde hoeveelheid',
                'permission-error' => 'U hebt geen toestemming om een verzending te maken',
                'product-name'     => 'Productnaam',
                'qty'              => 'Aantal',
                'qty-error'        => 'De gevraagde hoeveelheid is niet beschikbaar',
                'shipment-success' => 'Verzending succesvol aangemaakt',
                'shipped-qty'      => 'Verzonden hoeveelheid',
                'sku'              => 'SKU - :sku',
                'source'           => 'Bron van bestelde producten',
                'title'            => 'Maak Verzending',
                'tracking-id'      => 'Volgnummer',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Aanmaakdatum',
                    'from'         => 'Van',
                    'id'           => 'ID',
                    'order-id'     => 'Bestelnummer',
                    'qty'          => 'Aantal',
                    'to'           => 'Tot',
                    'view'         => 'Bekijken',
                ],

                'title'    => 'Boekingen',
            ],

            'calendar' => [
                'booking-date'     => 'Boekingsdatum',
                'booking-details'  => 'Boekingsdetails',
                'canceled'         => 'Geannuleerd',
                'closed'           => 'Gesloten',
                'done'             => 'Voltooid',
                'order-id'         => 'Bestelnummer',
                'pending'          => 'In afwachting',
                'price'            => 'Prijs',
                'status'           => 'Status',
                'time-slot'        => 'Tijdslot:',
                'view-details'     => 'Details bekijken',
            ],

            'title' => 'Boekingsproducten',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Resterende uitbetaling',
                'title'                  => 'Transacties',
                'total-payout'           => 'Totale uitbetaling',
                'total-seller-sale'      => 'Totale verkoop (Verkoper)',
                'total-admin-commission' => 'Totale commissie (Beheerder)',
                'total-sale-invoiced'    => 'Totale verkoop (Gefactureerd)',

                'datagrid' => [
                    'comment'        => 'Opmerking',
                    'id'             => 'Id',
                    'total'          => 'Totaal',
                    'transaction-id' => 'Transactie Id',
                ],
            ],

            'view' => [
                'commission'        => 'Commissie',
                'created-on'        => 'aangemaakt op :date,',
                'date'              => 'Datum',
                'id'                => 'Transactie Id',
                'method'            => 'Methode',
                'name'              => 'Naam',
                'payment-method'    => ':method Betaling',
                'price'             => 'Prijs',
                'print'             => 'Printen',
                'qty'               => 'Aantal',
                'seller-total'      => 'Totale Verkoper',
                'shipping-handling' => 'Verzending & Verwerking',
                'subtotal'          => 'Subtotaal',
                'tax'               => 'Belasting',
                'title'             => 'Transactie',
                'total'             => 'Totaal',
                'transaction-id'    => 'Transactienummer: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Voeg nieuw product toe',
                'title'           => 'Producten',

                'datagrid' => [
                    'active'         => 'Actief',
                    'approved'       => 'Goedgekeurd',
                    'category'       => 'Categorie',
                    'delete'         => 'Verwijderen',
                    'disable'        => 'Uitschakelen',
                    'disapproved'    => 'Afgekeurd',
                    'edit'           => 'Bewerken',
                    'id'             => 'ID',
                    'image'          => 'Afbeelding',
                    'is-approved'    => 'Goedgekeurd',
                    'name'           => 'Naam',
                    'out-of-stock'   => 'Uit voorraad',
                    'price'          => 'Prijs',
                    'product-number' => 'Productnummer',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'stock'          => 'Voorraad',
                    'total-quantity' => ':quantity Beschikbaar',
                    'type'           => 'Type',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Attribuutfamilie',
                'back'                      => 'Terug',
                'continue'                  => 'Doorgaan',
                'create-new-product'        => 'Maak Nieuwe Producten',
                'create-your-new-product'   => 'Als het product niet bestaat, maak dan je eigen nieuwe product',
                'disable-product-message'   => 'De beheerder heeft de functionaliteit om producten te maken of toe te wijzen uitgeschakeld.',
                'image-placeholder'         => 'Jouw Afbeelding',
                'no-result'                 => 'Geen resultaat',
                'not-allowed'               => 'U mag geen product aanmaken',
                'or'                        => 'Of',
                'product-type'              => 'Producttype',
                'search-product'            => 'Zoek producten',
                'sell-admin-product-prices' => 'Verkoop adminproducten tegen jouw prijzen.',
                'sell-as-yours'             => 'Verkoop als de jouwe',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Je kunt een product op twee manieren toevoegen, ofwel vanuit het adminproduct of je eigen product maken.',
                'title'                     => 'Voeg Nieuw Product Toe',
                'update-profile'            => 'Werk uw profielgegevens bij',
            ],

            'edit' => [
                'back-btn'      => 'Terug',
                'preview'       => 'Voorbeeld',
                'remove'        => 'Verwijderen',
                'save-btn'      => 'Product Opslaan',
                'title'         => 'Bewerk Product',
                'channels'      => 'Kanalen',
                'progress-info' => 'Verhoog de aantrekkingskracht van uw product en maak een blijvende indruk op klanten door ervoor te zorgen dat alle productdetails compleet en nauwkeurig zijn!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Groepsprijs toevoegen',
                        'all-groups'                => 'Alle groepen',
                        'create-btn'                => 'Nieuwe toevoegen',
                        'discount-group-price-info' => 'Voor :qty Hoeveelheid met een korting van :price',
                        'edit-btn'                  => 'Bewerk',
                        'empty-info'                => 'Speciale prijzen voor klanten die behoren tot een specifieke groep.',
                        'fixed-group-price-info'    => 'Voor :qty Hoeveelheid tegen een vaste prijs van :price',
                        'title'                     => 'Klantengroep Prijs',

                        'create' => [
                            'all-groups'     => 'Alle groepen',
                            'create-title'   => 'Klantengroep Prijs Toevoegen',
                            'customer-group' => 'Klantengroep',
                            'delete-btn'     => 'Verwijderen',
                            'discount'       => 'Korting',
                            'fixed'          => 'Vast',
                            'price'          => 'Prijs',
                            'price-type'     => 'Prijs Type',
                            'qty'            => 'Hoeveelheid',
                            'save-btn'       => 'Opslaan',
                            'update-title'   => 'Klantengroep Prijs Bijwerken',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'In afwachting van bestelde hoeveelheid: :qty',
                    'pending-ordered-qty-info' => 'De in afwachting van bestelde hoeveelheid wordt afgetrokken van de respectievelijke voorraadbron na de verzending. In geval van annulering zal de in afwachting van bestelde hoeveelheid weer beschikbaar zijn voor verkoop.',
                    'title'                    => 'Voorraden',
                ],

                'categories' => [
                    'title' => 'Categorieën',
                ],

                'images' => [
                    'info'  => 'De afbeeldingsresolutie moet zijn zoals 609px X 560px',
                    'title' => 'Afbeeldingen',
                ],

                'videos' => [
                    'error' => 'De video mag niet groter zijn dan :max kilobytes. Kies alstublieft een kleiner bestand.',
                    'info'  => 'De maximale grootte van de video moet zijn zoals :size',
                    'title' => 'Video\'s',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Voeg onderweg gerelateerde producten toe.',
                        'info'       => 'Naast het product dat de klant bekijkt, worden ook gerelateerde producten weergegeven.',
                        'title'      => 'Gerelateerde Producten',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Voeg onderweg extra verkoopproducten toe.',
                        'info'       => 'De klant krijgt upsell-producten te zien, die dienen als een premium of kwaliteitsalternatief voor het product dat ze momenteel bekijken.',
                        'title'      => 'Upsell-producten',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Voeg onderweg cross-selling-producten toe.',
                        'info'       => 'Naast de winkelwagen vind je deze "impulsieve" producten die worden gepositioneerd als cross-sell om de items die al aan je winkelwagen zijn toegevoegd aan te vullen.',
                        'title'      => 'Cross-sell-producten',
                    ],

                    'add-btn'           => 'Product Toevoegen',
                    'delete'            => 'Verwijderen',
                    'empty-info'        => 'Om :type producten snel toe te voegen.',
                    'empty-title'       => 'Product Toevoegen',
                    'image-placeholder' => 'Product Afbeelding',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Optie toevoegen',
                            'empty-info'        => 'Om snel aanpasbare opties te creëren.',
                            'empty-title'       => 'Optie toevoegen',
                            'info'              => 'Dit zal het eenvoudige product aanpassen.',
                            'title'             => 'Aanpasbaar item',

                            'update-create' => [
                                'is-required'               => 'Is verplicht',
                                'max-characters'            => 'Max. aantal tekens',
                                'name'                      => 'Titel',
                                'no'                        => 'Nee',
                                'price'                     => 'Prijs',
                                'save-btn'                  => 'Opslaan',
                                'supported-file-extensions' => 'Ondersteunde bestandsextensies',
                                'title'                     => 'Optie',
                                'type'                      => 'Type',
                                'yes'                       => 'Ja',
                            ],

                            'option' => [
                                'add-btn'     => 'Optie toevoegen',
                                'delete'      => 'Verwijderen',
                                'delete-btn'  => 'Verwijderen',
                                'edit-btn'    => 'Bewerken',
                                'empty-info'  => 'Om snel verschillende productcombinaties te creëren.',
                                'empty-title' => 'Optie toevoegen',

                                'types' => [
                                    'text' => [
                                        'title' => 'Tekst',
                                    ],

                                    'textarea' => [
                                        'title' => 'Tekstvak',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Selectievakje',
                                    ],

                                    'radio' => [
                                        'title' => 'Radio',
                                    ],

                                    'select' => [
                                        'title' => 'Selecteren',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Multiselect',
                                    ],

                                    'date' => [
                                        'title' => 'Datum',
                                    ],

                                    'datetime' => [
                                        'title' => 'Datum en tijd',
                                    ],

                                    'time' => [
                                        'title' => 'Tijd',
                                    ],

                                    'file' => [
                                        'title' => 'Bestand',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Label',
                                        'price'    => 'Prijs',
                                        'save-btn' => 'Opslaan',
                                        'title'    => 'Optie',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Het product is al gekoppeld aan een configureerbaar, gegroepeerd of gebundeld product.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Variant Toevoegen',
                        'delete-btn'        => 'Verwijderen',
                        'edit-btn'          => 'Bewerken',
                        'empty-info'        => 'Om verschillende combinaties van producten snel te maken.',
                        'empty-title'       => 'Variant Toevoegen',
                        'image-placeholder' => 'Product Afbeelding',
                        'info'              => 'Variant producten zijn afhankelijk van alle mogelijke combinaties van kenmerken.',
                        'qty'               => ':qty Hoeveelheid',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Varianten',

                        'create'  => [
                            'description'            => 'Beschrijving',
                            'name'                   => 'Naam',
                            'save-btn'               => 'Toevoegen',
                            'title'                  => 'Variant Toevoegen',
                            'variant-already-exists' => 'Deze variant bestaat al',
                        ],

                        'edit' => [
                            'disabled'        => 'Uitgeschakeld',
                            'edit-info'       => 'Als u gedetailleerde productinformatie wilt bijwerken, ga dan naar de',
                            'edit-link-title' => 'Productdetails Pagina',
                            'enabled'         => 'Ingeschakeld',
                            'images'          => 'Afbeeldingen',
                            'name'            => 'Naam',
                            'price'           => 'Prijs',
                            'quantities'      => 'Hoeveelheden',
                            'save-btn'        => 'Opslaan',
                            'sku'             => 'SKU',
                            'status'          => 'Status',
                            'title'           => 'Product',
                            'weight'          => 'Gewicht',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Afbeeldingen toevoegen',
                            'apply-to-all-btn'    => 'Toepassen op alles',
                            'apply-to-all-sku'    => 'Pas een prijs toe op alle SKU\'s.',
                            'edit-inventories'    => 'Voorraad bewerken',
                            'edit-prices'         => 'Prijzen bewerken',
                            'price'               => 'Prijs',
                            'remove-images'       => 'Verwijder afbeeldingen',
                            'remove-variants'     => 'Verwijder varianten',
                            'select-action'       => 'Actie selecteren',
                            'select-variants'     => 'Selecteer varianten',
                            'edit-name'           => 'Bewerk naam',
                            'name'                => 'Naam',
                            'edit-sku'            => 'Bewerk SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Bewerk gewicht',
                            'weight'              => 'Gewicht',
                            'edit-status'         => 'Bewerk status',
                            'status'              => 'Status',
                            'apply-to-all-name'   => 'Pas een naam toe op alle varianten.',
                            'apply-to-all-weight' => 'Pas een gewicht toe op alle varianten.',
                            'apply-to-all-status' => 'Pas een status toe op alle varianten.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Product Toevoegen',
                        'default-qty'       => 'Standaard Hoeveelheid',
                        'delete'            => 'Verwijderen',
                        'empty-info'        => 'Om verschillende combinaties van producten snel te maken.',
                        'empty-title'       => 'Product Toevoegen',
                        'image-placeholder' => 'Product Afbeelding',
                        'info'              => 'Een gegroepeerd product bestaat uit op zichzelf staande items die als een set worden gepresenteerd, waardoor variaties of coördinatie per seizoen of thema mogelijk zijn. Elk product kan afzonderlijk worden gekocht of als onderdeel van de groep.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Gegroepeerde Producten',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Optie Toevoegen',
                        'empty-info'        => 'Om bundelopties snel te maken.',
                        'empty-title'       => 'Optie Toevoegen',
                        'image-placeholder' => 'Product Afbeelding',
                        'info'              => 'Een bundelproduct is een pakket van meerdere items of diensten die samen worden verkocht tegen een speciale prijs, waardoor waarde en gemak voor klanten worden geboden.',
                        'title'             => 'Bundelopties',

                        'update-create' => [
                            'checkbox'    => 'Aankruisvak',
                            'is-required' => 'Is Vereist',
                            'multiselect' => 'Multiselect',
                            'name'        => 'Titel',
                            'no'          => 'Nee',
                            'radio'       => 'Radioknop',
                            'save-btn'    => 'Opslaan',
                            'select'      => 'Selecteer',
                            'title'       => 'Optie',
                            'type'        => 'Type',
                            'yes'         => 'Ja',
                        ],

                        'option' => [
                            'add-btn'     => 'Product Toevoegen',
                            'default-qty' => 'Standaard Hoeveelheid',
                            'delete'      => 'Verwijderen',
                            'delete-btn'  => 'Verwijderen',
                            'edit-btn'    => 'Bewerken',
                            'empty-info'  => 'Om verschillende combinaties van producten snel te maken.',
                            'empty-title' => 'Product Toevoegen',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Stel het standaardproduct in met een selectievakje',
                                    'title' => 'Aankruisvak',
                                ],

                                'multiselect' => [
                                    'info'  => 'Stel het standaardproduct in met een selectievakje',
                                    'title' => 'Multiselect',
                                ],

                                'radio' => [
                                    'info'  => 'Stel het standaardproduct in met een radioknop',
                                    'title' => 'Radioknop',
                                ],

                                'select' => [
                                    'info'  => 'Stel het standaardproduct in met een radioknop',
                                    'title' => 'Selecteer',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Beschikbaar Vanaf',
                        'available-to'   => 'Beschikbaar Tot',
                        'location'       => 'Locatie',
                        'qty'            => 'Aantal',
                        'title'          => 'Boekingstype',

                        'available-every-week' => [
                            'no'    => 'Nee',
                            'title' => 'Elke Week Beschikbaar',
                            'yes'   => 'Ja',
                        ],

                        'appointment' => [
                            'break-duration'         => 'Pauzeduur tussen Tijden (Minuten)',
                            'slot-duration'          => 'Tijdsduur (Minuten)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde Tijd Voor Alle Dagen',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Toevoegen',
                            'break-duration'   => 'Pauzeduur tussen Tijden (Minuten)',
                            'close'            => 'Sluiten',
                            'description'      => 'Boekingsinformatie',
                            'description-info' => 'De tijdsduur wordt aangemaakt en weergegeven volgens de slots. Deze zal uniek zijn voor alle slots en zichtbaar zijn in de etalage.',
                            'edit'             => 'Bewerken',
                            'many'             => 'Meerdere Boekingen Voor Eén Dag',
                            'one'              => 'Eén Boeking Voor Meerdere Dagen',
                            'open'             => 'Open',
                            'slot-add'         => 'Tijden Toevoegen',
                            'slot-duration'    => 'Tijdsduur (Minuten)',
                            'slot-title'       => 'Tijden Tijdsduur',
                            'title'            => 'Standaard',
                            'unavailable'      => 'Niet Beschikbaar',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Tijden Toevoegen',
                                    'close'      => 'Sluiten',
                                    'day'        => 'Dag',
                                    'edit-title' => 'Tijden Bewerken',
                                    'friday'     => 'Vrijdag',
                                    'from'       => 'Van',
                                    'from-day'   => 'Van Dag',
                                    'from-time'  => 'Van Tijd',
                                    'monday'     => 'Maandag',
                                    'open'       => 'Open',
                                    'saturday'   => 'Zaterdag',
                                    'save'       => 'Opslaan',
                                    'select'     => 'Selecteren',
                                    'status'     => 'Status',
                                    'sunday'     => 'Zondag',
                                    'thursday'   => 'Donderdag',
                                    'to'         => 'Tot',
                                    'to-day'     => 'Tot Dag',
                                    'to-time'    => 'Tot Tijd',
                                    'tuesday'    => 'Dinsdag',
                                    'wednesday'  => 'Woensdag',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Tickets Toevoegen',
                            'delete'             => 'Verwijderen',
                            'description'        => 'Beschrijving',
                            'description-info'   => 'Er zijn geen tickets beschikbaar.',
                            'edit'               => 'Bewerken',
                            'name'               => 'Naam',
                            'price'              => 'Prijs',
                            'qty'                => 'Aantal',
                            'special-price'      => 'Speciale Prijs',
                            'special-price-from' => 'Speciale Prijs Vanaf',
                            'special-price-to'   => 'Speciale Prijs Tot',
                            'title'              => 'Tickets',
                            'valid-from'         => 'Geldig Vanaf',
                            'valid-until'        => 'Geldig Tot',

                            'modal'              => [
                                'edit' => 'Tickets Bewerken',
                                'save' => 'Opslaan',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Tickets Toevoegen',
                            ],

                            'slots'   => [
                                'add'         => 'Tijden Toevoegen',
                                'description' => 'Beschikbare Tijden met Tijdsduur.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'Dagelijks',
                            'daily-hourly' => 'Beide (Dagelijks en Uurlijks)',
                            'daily-price'  => 'Dagelijkse Prijs',
                            'hourly'       => 'Uurlijks',
                            'hourly-price' => 'Uurprijs',
                            'title'        => 'Verhuurtype',

                            'same-slot-for-all-days' => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde Tijd Voor Alle Dagen',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Tijden Toevoegen',
                            'description-info' => 'De tijdsduur wordt aangemaakt en weergegeven volgens de slots. Deze zal uniek zijn voor alle slots en zichtbaar zijn in de etalage.',
                            'save'             => 'Opslaan',
                            'title'            => 'Tijden Tijdsduur',
                            'unavailable'      => 'Niet Beschikbaar',

                            'action'           => [
                                'add' => 'Toevoegen',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Vrijdag',
                                    'from'       => 'Van',
                                    'monday'     => 'Maandag',
                                    'saturday'   => 'Zaterdag',
                                    'sunday'     => 'Zondag',
                                    'thursday'   => 'Donderdag',
                                    'to'         => 'Tot',
                                    'tuesday'    => 'Dinsdag',
                                    'wednesday'  => 'Woensdag',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Pauzeduur tussen Tijden (Minuten)',
                            'guest-capacity'            => 'Gastcapaciteit',
                            'guest-limit'               => 'Gastlimiet Per Tafel',
                            'prevent-scheduling-before' => 'Voorkom Planning Voor',
                            'slot-duration'             => 'Tijdsduur (Minuten)',

                            'charged-per'               => [
                                'guest'  => 'Gast',
                                'table'  => 'Tafel',
                                'title'  => 'In rekening gebracht per',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Nee',
                                'title' => 'Zelfde Tijd Voor Alle Dagen',
                                'yes'   => 'Ja',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Afspraak Boeking',
                            'default'     => 'Standaard Boeking',
                            'event'       => 'Evenement Boeking',
                            'many'        => 'Veel',
                            'one'         => 'Eén',
                            'rental'      => 'Verhuur Boeking',
                            'table'       => 'Tafel Boeking',
                            'title'       => 'Type',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Link Toevoegen',
                            'delete-btn'  => 'Verwijderen',
                            'edit-btn'    => 'Bewerken',
                            'empty-info'  => 'Om snel een link te maken.',
                            'empty-title' => 'Link Toevoegen',
                            'file'        => 'Bestand: ',
                            'info'        => 'Het type downloadbaar product maakt het mogelijk digitale producten te verkopen, zoals e-books, softwaretoepassingen, muziek, games, enz.',
                            'sample-file' => 'Voorbeeldbestand: ',
                            'sample-url'  => 'Voorbeeld-URL: ',
                            'title'       => 'Downloadbare Links',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'downloads'   => 'Downloaden Toegestaan',
                                'file'        => 'Bestand',
                                'file-type'   => 'Bestandstype',
                                'name'        => 'Titel',
                                'price'       => 'Prijs',
                                'sample'      => 'Voorbeeld',
                                'sample-type' => 'Voorbeeldtype',
                                'save-btn'    => 'Opslaan',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Voorbeeld Toevoegen',
                            'delete-btn'  => 'Verwijderen',
                            'edit-btn'    => 'Bewerken',
                            'empty-info'  => 'Om snel een voorbeeld te maken.',
                            'empty-title' => 'Voorbeeld Toevoegen',
                            'file'        => 'Bestand: ',
                            'info'        => 'Het type downloadbaar product maakt het mogelijk digitale producten te verkopen, zoals e-books, softwaretoepassingen, muziek, games, enz.',
                            'title'       => 'Downloadbare Voorbeelden',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'file'      => 'Bestand',
                                'file-type' => 'Bestandstype',
                                'name'      => 'Titel',
                                'save-btn'  => 'Opslaan',
                                'title'     => 'Link',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Product succesvol aangemaakt',
            'delete-failed'            => 'Verwijderen van product mislukt',
            'delete-success'           => 'Product succesvol verwijderd',
            'product-type-not-allowed' => 'Je mag geen producten van het type :type verkopen',
            'saved-inventory-message'  => 'Product succesvol opgeslagen',
            'update-success'           => 'Product succesvol bijgewerkt',

            'assign' => [
                'already-selling'     => 'Je verkoopt dit product al',
                'back-btn'            => 'Terug',
                'condition'           => 'Staat',
                'create-success'      => 'Product succesvol toegewezen aan de verkoper',
                'description'         => 'Beschrijving',
                'image-size'          => 'De resolutie van de afbeelding moet 609px X 560px zijn',
                'images'              => 'Afbeeldingen',
                'new'                 => 'Nieuw',
                'not-allowed'         => 'U mag dit product niet toewijzen',
                'old'                 => 'Oud',
                'price'               => 'Prijs',
                'product-not-allowed' => 'Je mag geen :type product verkopen',
                'quantities'          => 'Hoeveelheden',
                'save-btn'            => 'Opslaan',
                'title'               => 'Product Toewijzen',
                'update-success'      => 'Toegewezen product succesvol bijgewerkt',

                'product-details' => [
                    'active'            => 'Actief',
                    'approved'          => 'Goedgekeurd',
                    'disable'           => 'Uitschakelen',
                    'disapproved'       => 'Afgekeurd',
                    'image-placeholder' => 'Productafbeelding',
                    'title'             => 'Productdetails',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Product Reviews',

                'datagrid' => [
                    'approved'      => 'Approved',
                    'customer'      => 'Customer',
                    'date'          => 'Date',
                    'description'   => 'Description',
                    'email'         => 'Email',
                    'pending'       => 'Pending',
                    'product'       => 'Product',
                    'rating'        => 'Rating',
                    'status'        => 'Status',
                    'title'         => 'Title',
                    'unapproved'    => 'Unapproved',
                    'update-status' => 'Bijwerkingsstatus',
                ],
            ],

            'update-success' => 'Productrecensies succesvol bijgewerkt',
            'delete-success' => 'Productrecensies succesvol verwijderd.',
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
                'title'    => 'Profiel Beheren',
                'edit-btn' => 'Profiel Bewerken',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Naam',
                    'phone'      => 'Telefoonnummer',
                    'shop-slug'  => 'Winkel Slug',
                    'shop-title' => 'Winkeltitel',
                    'title'      => 'Algemene Informatie',
                ],

                'about-store' => [
                    'title' => 'Over Winkel',
                ],

                'meta' => [
                    'meta-description' => 'Meta Beschrijving',
                    'meta-keywords'    => 'Meta Trefwoorden',
                    'meta-title'       => 'Meta Titel',
                    'title'            => 'Meta Beschrijving',
                ],

                'policy' => [
                    'privacy'  => 'Privacybeleid',
                    'return'   => 'Retourbeleid',
                    'shipping' => 'Verzendbeleid',
                    'title'    => 'Beleid',
                ],

                'address' => [
                    'city'     => 'Stad',
                    'country'  => 'Land',
                    'postcode' => 'Postcode',
                    'state'    => 'Provincie',
                    'title'    => 'Winkeladres',
                    'address'  => 'Adres',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Sociale Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimale Bestelhoeveelheid',
                ],

                'google-analytics' => [
                    'id'    => 'Analytics ID',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Beheerderscommissie',
                    'admin-commission-value' => 'Beheerderscommissie :rate% van het totale gefactureerde bedrag',
                    'allowed-categories'     => 'Toegestane Categorieën',
                    'no-categories'          => 'Geen Categorieën Beschikbaar',
                    'allowed-product-types'  => 'Toegestane Producttypen',
                    'no-product-types'       => 'Geen Producttypen Beschikbaar',
                    'payment-methods'        => 'Betalingsmethoden',
                    'no-payment-methods'     => 'Geen Betalingsmethoden Beschikbaar',
                    'shipping-methods'       => 'Verzendmethoden',
                    'no-shipping-methods'    => 'Geen Verzendmethoden Beschikbaar',
                    'title'                  => 'Winkelinformatie',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Upload banner in verhouding 13:3, hoogte 375 Veilige zone 375x250 Midden op mobiel',
                'delete-banner'       => 'Banner Verwijderen',
                'delete-logo'         => 'Logo Verwijderen',
                'logo'                => 'Logo',
                'logo-description'    => 'Upload logo in verhouding 1:1',
                'save-btn'            => 'Profiel Opslaan',
                'title'               => 'Profiel Beheren',
                'upload-new-banner'   => 'Nieuwe Banner Uploaden',
                'upload-new-logo'     => 'Nieuw Logo Uploaden',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Naam',
                    'phone'      => 'Telefoonnummer',
                    'shop-slug'  => 'Winkel Slug',
                    'shop-title' => 'Winkeltitel',
                    'title'      => 'Algemene Informatie',
                ],

                'about-store' => [
                    'title' => 'Over Winkel',
                ],

                'meta' => [
                    'meta-description' => 'Meta Beschrijving',
                    'meta-keywords'    => 'Meta Trefwoorden',
                    'meta-title'       => 'Meta Titel',
                    'title'            => 'Meta Beschrijving',
                ],

                'policy' => [
                    'privacy'  => 'Privacybeleid',
                    'return'   => 'Retourbeleid',
                    'shipping' => 'Verzendbeleid',
                    'title'    => 'Beleid',
                ],

                'address' => [
                    'city'           => 'Stad',
                    'country'        => 'Land',
                    'postcode'       => 'Postcode',
                    'state'          => 'Provincie',
                    'title'          => 'Winkeladres',
                    'select-country' => 'Selecteer Land',
                    'select-state'   => 'Selecteer Provincie',
                    'street-address' => 'Straatadres',
                    'address'        => 'Adres',
                ],

                'social' => [
                    'link'  => ':name Link',
                    'title' => 'Sociale Links',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimale Bestelhoeveelheid',
                ],

                'google-analytics' => [
                    'id'    => 'Google Analytics ID',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Uw profiel is succesvol bijgewerkt',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Seller Reviews',

                'datagrid' => [
                    'approved'    => 'Approved',
                    'customer'    => 'Customer',
                    'date'        => 'Date',
                    'description' => 'Description',
                    'disapproved' => 'Afgekeurd',
                    'email'       => 'Email',
                    'pending'     => 'Pending',
                    'rating'      => 'Rating',
                    'status'      => 'Status',
                    'title'       => 'Titel',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Opslaan',
                    'title'              => 'Algemeen',
                    'unmatched-password' => 'Huidig wachtwoord komt niet overeen',
                    'update-success'     => 'Algemene instellingen succesvol bijgewerkt',

                    'regional-setting' => [
                        'currency'      => 'Valuta',
                        'locale'        => 'Landinstelling',
                        'select-locale' => 'Selecteer landinstelling',
                        'title'         => 'Regionale instellingen',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Bevestig wachtwoord',
                        'current-password' => 'Huidig wachtwoord',
                        'new-password'     => 'Nieuw wachtwoord',
                        'title'            => 'Wachtwoordinstellingen',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Rol Aanmaken',
                    'title'      => 'Rollen',

                    'datagrid' => [
                        'all'             => 'Alle',
                        'custom'          => 'Aangepast',
                        'delete'          => 'Verwijderen',
                        'edit'            => 'Bewerken',
                        'id'              => 'ID',
                        'name'            => 'Naam',
                        'permission-type' => 'Type Toestemming',
                    ],
                ],

                'create' => [
                    'access-control' => 'Toegangsbeheer',
                    'all'            => 'Alle',
                    'back-btn'       => 'Terug',
                    'custom'         => 'Aangepast',
                    'description'    => 'Beschrijving',
                    'general'        => 'Algemeen',
                    'name'           => 'Naam',
                    'permissions'    => 'Toestemmingen',
                    'save-btn'       => 'Rol Opslaan',
                    'title'          => 'Rol Aanmaken',
                ],

                'edit' => [
                    'access-control' => 'Toegangsbeheer',
                    'all'            => 'Alle',
                    'back-btn'       => 'Terug',
                    'custom'         => 'Aangepast',
                    'description'    => 'Beschrijving',
                    'general'        => 'Algemeen',
                    'name'           => 'Naam',
                    'permissions'    => 'Toestemmingen',
                    'save-btn'       => 'Rol Opslaan',
                    'title'          => 'Rol Bewerken',
                ],

                'being-used'        => 'De rol wordt gebruikt door een verkoper',
                'create-success'    => 'Rol succesvol aangemaakt',
                'delete-failed'     => 'Rol verwijderen mislukt',
                'delete-success'    => 'Rol succesvol verwijderd',
                'last-delete-error' => 'Er is minstens één rol vereist',
                'update-success'    => 'Rol succesvol bijgewerkt',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Gebruiker Aanmaken',
                    'create-title'     => 'Gebruiker Aanmaken',
                    'edit-title'       => 'Bewerk Gebruiker',
                    'email'            => 'E-mail',
                    'name'             => 'Naam',
                    'phone-number'     => 'Telefoonnummer',
                    'role'             => 'Rol',
                    'save-btn'         => 'Gebruiker Opslaan',
                    'select-role'      => 'Selecteer Rol',
                    'password'         => 'Wachtwoord',
                    'confirm-password' => 'Bevestig Wachtwoord',
                    'status'           => 'Status',
                    'title'            => 'Gebruikers',
                    'create-success'   => 'Gebruiker succesvol aangemaakt',
                    'update-success'   => 'Gebruiker succesvol bijgewerkt',
                    'delete-success'   => 'Gebruiker succesvol verwijderd',
                    'delete-failed'    => 'Verwijderen van gebruiker mislukt',

                    'datagrid' => [
                        'delete'     => 'Verwijderen',
                        'edit'       => 'Bewerken',
                        'email'      => 'E-mail',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Naam',
                        'permission' => 'Toestemming',
                        'phone'      => 'Telefoon',

                        'status' => [
                            'title' => 'Status',

                            'options' => [
                                'active'    => 'Actief',
                                'suspended' => 'Geschorst',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Voorraadbron aanmaken',
                    'title'      => 'Voorraadbronnen',

                    'datagrid' => [
                        'active'   => 'Actief',
                        'code'     => 'Code',
                        'delete'   => 'Verwijderen',
                        'edit'     => 'Bewerken',
                        'id'       => 'ID',
                        'inactive' => 'Inactief',
                        'name'     => 'Naam',
                        'priority' => 'Prioriteit',
                        'status'   => 'Status',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Voorraadbron Toevoegen',
                    'address'        => 'Bronadres',
                    'back-btn'       => 'Terug',
                    'city'           => 'Stad',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contactinformatie',
                    'contact-name'   => 'Naam',
                    'contact-number' => 'Contactnummer',
                    'country'        => 'Land',
                    'description'    => 'Omschrijving',
                    'general'        => 'Algemeen',
                    'latitude'       => 'Breedtegraad',
                    'longitude'      => 'Lengtegraad',
                    'name'           => 'Naam',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Prioriteit',
                    'save-btn'       => 'Voorraadbronnen Opslaan',
                    'select-country' => 'Selecteer Land',
                    'select-state'   => 'Selecteer Provincie',
                    'settings'       => 'Instellingen',
                    'state'          => 'Provincie',
                    'status'         => 'Status',
                    'street'         => 'Straat',
                    'title'          => 'Voorraadbronnen',
                ],

                'edit' => [
                    'back-btn'       => 'Terug',
                    'city'           => 'Stad',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Contactinformatie',
                    'contact-name'   => 'Naam',
                    'contact-number' => 'Contactnummer',
                    'country'        => 'Land',
                    'description'    => 'Omschrijving',
                    'general'        => 'Algemeen',
                    'latitude'       => 'Breedtegraad',
                    'longitude'      => 'Lengtegraad',
                    'name'           => 'Naam',
                    'postcode'       => 'Postcode',
                    'priority'       => 'Prioriteit',
                    'save-btn'       => 'Voorraadbronnen Opslaan',
                    'select-country' => 'Selecteer Land',
                    'select-state'   => 'Selecteer Provincie',
                    'settings'       => 'Instellingen',
                    'source-address' => 'Bronadres',
                    'state'          => 'Provincie',
                    'status'         => 'Status',
                    'street'         => 'Straat',
                    'title'          => 'Voorraadbronnen Bewerken',
                ],

                'create-success'    => 'Voorraadbron succesvol aangemaakt',
                'delete-failed'     => 'Verwijderen van voorraadbronnen mislukt',
                'delete-success'    => 'Voorraadbronnen succesvol verwijderd',
                'last-delete-error' => 'Laatste voorraadbronnen kunnen niet worden verwijderd',
                'update-success'    => 'Voorraadbronnen succesvol bijgewerkt',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Beheerder',
                'blocked-message'     => 'Je bent geblokkeerd door de beheerder',
                'message-failed'      => 'Bericht verzenden mislukt',
                'message-placeholder' => 'Typ hier uw bericht...',
                'message-sent'        => 'Bericht succesvol verzonden',
                'no-message'          => 'Geen bericht gevonden',
                'search-message'      => 'Zoek bericht...',
                'title'               => 'Communicatie',

                'filters' => [
                    'all-messages'      => 'Alle berichten',
                    'prev-fifteen-days' => 'Afgelopen 15 dagen',
                    'prev-seven-days'   => 'Afgelopen 7 dagen',
                    'prev-six-months'   => 'Afgelopen 6 maanden',
                    'prev-thirty-days'  => 'Afgelopen 30 dagen',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Verlaten winkelwagens',
                    'abandoned-products'            => 'Verlaten producten',
                    'abandoned-rate'                => 'Verlatingspercentage',
                    'abandoned-revenue'             => 'Verlaten omzet',
                    'added-to-cart'                 => 'Toegevoegd aan winkelwagen',
                    'added-to-cart-info'            => 'Alleen :progress bezoekers hebben producten aan de winkelwagen toegevoegd',
                    'all-channels'                  => 'Alle kanalen',
                    'average-order-value-over-time' => 'Gemiddelde bestelwaarde in de tijd',
                    'average-sales'                 => 'Gemiddelde bestelwaarde',
                    'commission'                    => 'Commissie',
                    'commission-over-time'          => 'Commissie over tijd',
                    'count'                         => 'Aantal',
                    'end-date'                      => 'Einddatum',
                    'id'                            => 'ID',
                    'interval'                      => 'Interval',
                    'name'                          => 'Naam',
                    'orders'                        => 'Bestellingen',
                    'orders-over-time'              => 'Bestellingen in de loop der tijd',
                    'payment-method'                => 'Betalingsmethode',
                    'product-views'                 => 'Productweergaven',
                    'product-views-info'            => 'Alleen :progress bezoekers bekijken producten',
                    'purchase-funnel'               => 'Aankoopfunnel',
                    'purchased'                     => 'Gekocht',
                    'purchased-info'                => 'Alleen :progress bezoekers doen aankopen',
                    'refunds'                       => 'Terugbetalingen',
                    'refunds-over-time'             => 'Terugbetalingen in de loop der tijd',
                    'sales-over-time'               => 'Verkopen in de loop der tijd',
                    'start-date'                    => 'Startdatum',
                    'tax-collected'                 => 'Verzamelde belasting',
                    'tax-collected-over-time'       => 'Verzamelde belasting in de loop der tijd',
                    'title'                         => 'Verkopen',
                    'top-payment-methods'           => 'Top betalingsmethoden',
                    'top-tax-categories'            => 'Top belastingcategorieën',
                    'total'                         => 'Totaal',
                    'total-commission-paid'         => 'Totaal betaalde commissie',
                    'total-orders'                  => 'Totaal bestellingen',
                    'total-sales'                   => 'Totaal verkopen',
                    'total-visits'                  => 'Totaal bezoeken',
                    'total-visits-info'             => 'Totaal aantal bezoekers op de winkel',
                    'view-details'                  => 'Details weergeven',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Alle kanalen',
                    'count'                       => 'Aantal',
                    'customers'                   => 'Klanten',
                    'customers-over-time'         => 'Klanten in de loop der tijd',
                    'customers-traffic'           => 'Klantenverkeer',
                    'customers-with-most-orders'  => 'Klanten met de meeste bestellingen',
                    'customers-with-most-reviews' => 'Klanten met de meeste beoordelingen',
                    'customers-with-most-sales'   => 'Klanten met de meeste verkopen',
                    'email'                       => 'E-mail',
                    'end-date'                    => 'Einddatum',
                    'id'                          => 'ID',
                    'interval'                    => 'Interval',
                    'name'                        => 'Naam',
                    'orders'                      => 'Bestellingen',
                    'reviews'                     => 'Beoordelingen',
                    'start-date'                  => 'Startdatum',
                    'title'                       => 'Klanten',
                    'top-customer-groups'         => 'Top klantengroepen',
                    'total'                       => 'Totaal',
                    'total-customers'             => 'Totaal klanten',
                    'total-visitors'              => 'Totaal bezoekers',
                    'traffic-over-week'           => 'Verkeer over de week',
                    'unique-visitors'             => 'Unieke bezoekers',
                    'view-details'                => 'Details weergeven',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Alle kanalen',
                    'channel'                          => 'Kanaal',
                    'end-date'                         => 'Einddatum',
                    'id'                               => 'ID',
                    'interval'                         => 'Interval',
                    'locale'                           => 'Regio',
                    'name'                             => 'Naam',
                    'orders'                           => 'Bestellingen',
                    'price'                            => 'Prijs',
                    'products-added-over-time'         => 'Producten toegevoegd in de loop der tijd',
                    'products-with-most-reviews'       => 'Producten met de meeste beoordelingen',
                    'products-with-most-visits'        => 'Producten met de meeste bezoeken',
                    'quantities'                       => 'Aantallen',
                    'quantities-sold-over-time'        => 'Verkochte aantallen in de loop der tijd',
                    'revenue'                          => 'Omzet',
                    'reviews'                          => 'Beoordelingen',
                    'start-date'                       => 'Startdatum',
                    'title'                            => 'Producten',
                    'top-selling-products-by-quantity' => 'Top verkopende producten op basis van aantallen',
                    'top-selling-products-by-revenue'  => 'Top verkopende producten op basis van omzet',
                    'total'                            => 'Totaal',
                    'total-products-added-to-wishlist' => 'Producten toegevoegd aan verlanglijst',
                    'total-sold-quantities'            => 'Totaal aantal verkochte producten',
                    'view-details'                     => 'Details weergeven',
                    'visits'                           => 'Bezoeken',
                ],
            ],

            'view' => [
                'all-channels'  => 'Alle kanalen',
                'day'           => 'Dag',
                'end-date'      => 'Einddatum',
                'export-csv'    => 'Exporteer CSV',
                'export-xls'    => 'Exporteer XLS',
                'month'         => 'Maand',
                'not-available' => 'Geen gegevens beschikbaar.',
                'start-date'    => 'Startdatum',
                'year'          => 'Jaar',
            ],

            'empty' => [
                'info'  => 'Geen gegevens beschikbaar voor geselecteerd tijdsinterval',
                'title' => 'Geen gegevens beschikbaar',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Uitgeschakeld',
                'enabled'   => 'Ingeschakeld',
                'info'      => 'Bouw, beheer en schaal je online winkel met de aanpasbare e-commerce extensies van Bagisto.',
                'no-result' => 'Geen extensies beschikbaar.',
                'title'     => 'Extensies',

                'filters' => [
                    'all-extensions' => 'Alle extensies',
                    'bulk_upload'    => 'Bulk upload',
                    'gdpr'           => 'AVG',
                    'marketplace'    => 'Marktplaats',
                    'payment'        => 'Betaling',
                    'pos'            => 'Kassasysteem',
                    'shipping'       => 'Verzending',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Verkoperslogo',
                'switch-to-store' => 'Overschakelen naar winkelbeheer',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Het minimumbestelhoeveelheid voor :shop_title is',
                'product-not-available' => 'Product is niet beschikbaar',
                'sold-by'               => 'Verkocht door',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Dagen* Betaling',
                'deals-in'            => 'Deals In',
                'featured-seller'     => 'Onze Aanbevolen Verkopers',
                'online-business'     => 'Online Bedrijf',
                'reviews'             => ':count Recensies',
                'seller-community'    => 'Verkopersgemeenschap',
                'serviceable-pincode' => 'Dienstbare Pincode',
                'start-selling'       => 'Begin met verkopen aan grote klanten over de hele wereld, dag en nacht.',
                'step'                => 'Stap :count',
                'visit-shop'          => 'Bezoek Winkel',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Voeg toe aan winkelwagen',
            'delivery-info' => 'Hier komt de bezorginformatie',
            'hide'          => 'Verbergen',
            'more-info'     => 'Meer informatie',
            'seller-count'  => ':count andere verkoper verkoopt hetzelfde product',
            'seller-info'   => 'Verkopersinformatie',
            'sold-by'       => 'Verkocht door',
            'top-selling'   => 'Bestverkopend',

            'flag' => [
                'alert'              => 'Waarschuwing',
                'already-reported'   => 'U heeft dit product al gerapporteerd',
                'create-success'     => 'Product succesvol gerapporteerd',
                'guest-alert'        => 'U moet inloggen om dit product te rapporteren',
                'not-allowed'        => 'U kunt dit product niet rapporteren zonder een bestelling te plaatsen',
                'other-reason'       => 'Andere reden',
                'reason'             => 'Reden',
                'reason-placeholder' => 'Gelieve de reden te specificeren',
                'report-product'     => 'Product rapporteren',
                'select-reason'      => 'Selecteer een reden',
                'submit-btn'         => 'Indienen',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Verkoper is nog niet goedgekeurd',
                'products-count'  => 'Producten (:count)',
                'reviews-count'   => 'Beoordelingen (:count)',
                'search-text'     => 'Zoek naar producten',

                'about' => [
                    'title'           => 'Over',
                    'about-us'        => 'Over ons',
                    'shipping-policy' => 'Verzendbeleid',
                    'privacy-policy'  => 'Privacybeleid',
                    'return-policy'   => 'Retourbeleid',
                ],

                'contact-form' => [
                    'title'          => 'Contact',
                    'name'           => 'Naam',
                    'email'          => 'E-mail',
                    'subject'        => 'Onderwerp',
                    'query'          => 'Vraag',
                    'submit-btn'     => 'Verzenden',
                    'create-success' => 'Uw vraag is succesvol verzonden',
                ],

                'share' => [
                    'title'     => 'Delen',
                    'share-on'  => 'Delen op',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Waarschuwing',
                    'already-reported'   => 'U heeft deze verkoper al gemeld',
                    'create-success'     => 'Verkoper succesvol gemeld',
                    'guest-alert'        => 'U moet inloggen om de verkoper te melden',
                    'not-allowed'        => 'U kunt deze verkoper niet melden zonder een bestelling te plaatsen',
                    'other-reason'       => 'Andere reden',
                    'reason'             => 'Reden',
                    'reason-placeholder' => 'Specificeer de reden',
                    'select-reason'      => 'Selecteer reden',
                    'submit-btn'         => 'Verzenden',
                    'title'              => 'Meld probleem',
                ],

                'reviews' => [
                    'alert'            => 'Waarschuwing',
                    'already-reviewed' => 'Je hebt deze verkoper al beoordeeld',
                    'comment'          => 'Opmerking',
                    'create-success'   => 'Verkoper succesvol beoordeeld',
                    'customer-review'  => ':count Klantbeoordeling',
                    'customer-reviews' => 'Klantbeoordelingen',
                    'guest-alert'      => 'Je moet inloggen om de verkoper te melden',
                    'rating'           => 'Beoordeling',
                    'review-by'        => 'Beoordeling door',
                    'submit-btn'       => 'Verstuur',
                    'title'            => 'Titel',
                    'view-all'         => 'Alle beoordelingen bekijken',
                    'write-review'     => 'Schrijf een beoordeling',
                ],

                'products' => [
                    'no-result' => 'Geen producten beschikbaar',
                    'show'      => 'Toon',

                    'sort-by' => [
                        'title' => 'Sorteren op',

                        'options' => [
                            'cheapest-first'  => 'Goedkoopste eerst',
                            'expensive-first' => 'Duurste eerst',
                            'from-a-z'        => 'Van A-Z',
                            'from-z-a'        => 'Van Z-A',
                            'latest-first'    => 'Nieuwste eerst',
                            'oldest-first'    => 'Oudste eerst',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Alles wissen',
                        'filter'      => 'Filter',
                        'filters'     => 'Filters:',
                        'price-range' => 'Prijsklasse',
                        'sort'        => 'Sorteren',
                    ],
                ],
            ],
        ],
    ],
];
