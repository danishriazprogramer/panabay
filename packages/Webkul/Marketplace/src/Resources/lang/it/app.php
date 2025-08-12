<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marketplace',
                    'info'  => 'Gestisci Marketplace',

                    'module-info' => [
                        'title'       => 'Informazioni sul modulo',
                        'info'        => 'Fornisce informazioni relative alla versione dell\'applicazione.',
                        'app-version' => 'Versione applicazione: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Percentuale di Commissione Amministratore',
                        'description'                  => 'Gestisci le impostazioni generali del marketplace come stato, commissioni, ecc.',
                        'lines-in-street-address'      => 'Linee nell\'indirizzo stradale',
                        'lines-in-street-address-info' => 'Imposta il numero di linee nell\'indirizzo stradale. Predefinito è una linea.',
                        'status'                       => 'Stato',
                        'title'                        => 'Generale',
                    ],

                    'product' => [
                        'approval-required'         => 'Approvazione Necessaria',
                        'description'               => 'Gestisci le impostazioni dei prodotti del marketplace come approvazioni, flag, ecc.',
                        'enable-flag'               => 'Abilita Flag',
                        'seller-can-assign-product' => 'Il venditore può assegnare un prodotto',
                        'seller-can-create-product' => 'Il venditore può creare un prodotto',
                        'show-progress-bar'         => 'Mostra barra di progresso',
                        'title'                     => 'Prodotto',
                    ],

                    'seller' => [
                        'approval-required'           => 'Approvazione richiesta',
                        'can-cancel-order'            => 'Può annullare l’ordine',
                        'can-create-invoice'          => 'Può creare una fattura',
                        'can-create-shipment'         => 'Può creare una spedizione',
                        'description'                 => 'Gestisci le impostazioni del venditore del marketplace come approvazioni, flag, ecc.',
                        'enable-flag'                 => 'Abilita flag',
                        'enable-minimum-order-amount' => 'Abilita importo minimo ordine',
                        'enable-seller-flag'          => 'Abilita flag del venditore',
                        'red-flag-limit'              => 'Limite bandiera rossa',
                        'red-flag-limit-info'         => 'Se il venditore supera questo limite, la bandiera rossa sarà mostrata nel profilo del venditore.',
                        'show-red-flag'               => 'Mostra bandiera rossa sul profilo se il limite viene superato',
                        'title'                       => 'Venditore',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Conteggio Limite',
                        'description' => 'Gestisci i venditori in evidenza del mercato.',
                        'status'      => 'Stato',
                        'title'       => 'Venditori in Evidenza',

                        'popularity-criteria' => [
                            'all'              => 'Tutti',
                            'maximum-orders'   => 'Ordini Massimi',
                            'maximum-products' => 'Prodotti Massimi',
                            'maximum-rating'   => 'Valutazione massima',
                            'maximum-sale'     => 'Vendita Massima',
                            'title'            => 'Criteri di Popolarità',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Titolo del pulsante del banner',
                        'banner-description'  => 'Descrizione del banner',
                        'banner-image'        => 'Immagine del banner',
                        'banner-title'        => 'Titolo del banner',
                        'business-hour'       => 'Orario Commerciale',
                        'community-count'     => 'Conteggio della Comunità',
                        'description'         => 'Personalizza la pagina di destinazione del Marketplace, aggiungendo icone, banner e descrizioni per un look fresco.',
                        'feature-box1-desc'   => 'Descrizione della Casella della Caratteristica 1',
                        'feature-box1-icon'   => 'Icona della Casella della Caratteristica 1',
                        'feature-box1-title'  => 'Titolo della Casella della Caratteristica 1',
                        'feature-box2-desc'   => 'Descrizione della Casella della Caratteristica 2',
                        'feature-box2-icon'   => 'Icona della Casella della Caratteristica 2',
                        'feature-box2-title'  => 'Titolo della Casella della Caratteristica 2',
                        'feature-box3-desc'   => 'Descrizione della Casella della Caratteristica 3',
                        'feature-box3-icon'   => 'Icona della Casella della Caratteristica 3',
                        'feature-box3-title'  => 'Titolo della Casella della Caratteristica 3',
                        'feature-box4-desc'   => 'Descrizione della Casella della Caratteristica 4',
                        'feature-box4-icon'   => 'Icona della Casella della Caratteristica 4',
                        'feature-box4-title'  => 'Titolo della Casella della Caratteristica 4',
                        'feature-description' => 'Descrizione della Caratteristica',
                        'feature-image'       => 'Immagine della Caratteristica',
                        'feature-title'       => 'Titolo della Caratteristica',
                        'journey-description' => 'Descrizione del Percorso',
                        'journey-image'       => 'Immagine del Percorso',
                        'journey-step1-desc'  => 'Descrizione del Passo 1 del Percorso',
                        'journey-step1-icon'  => 'Icona del Passo 1 del Percorso',
                        'journey-step1-title' => 'Titolo del Passo 1 del Percorso',
                        'journey-step2-desc'  => 'Descrizione del Passo 2 del Percorso',
                        'journey-step2-icon'  => 'Icona del Passo 2 del Percorso',
                        'journey-step2-title' => 'Titolo del Passo 2 del Percorso',
                        'journey-step3-desc'  => 'Descrizione del Passo 3 del Percorso',
                        'journey-step3-icon'  => 'Icona del Passo 3 del Percorso',
                        'journey-step3-title' => 'Titolo del Passo 3 del Percorso',
                        'journey-step4-desc'  => 'Descrizione del Passo 4 del Percorso',
                        'journey-step4-icon'  => 'Icona del Passo 4 del Percorso',
                        'journey-step4-title' => 'Titolo del Passo 4 del Percorso',
                        'journey-step5-desc'  => 'Descrizione del Passo 5 del Percorso',
                        'journey-step5-icon'  => 'Icona del Passo 5 del Percorso',
                        'journey-step5-title' => 'Titolo del Passo 5 del Percorso',
                        'journey-title'       => 'Titolo del Percorso',
                        'payment-duration'    => 'Durata del Pagamento',
                        'serviceable-pincode' => 'Codice Postale Servibile',
                        'title'               => 'Pagina di Atterraggio',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Assegna Prodotto',
            'communications'    => 'Comunicazioni',
            'create'            => 'Crea',
            'delete'            => 'Elimina',
            'edit'              => 'Modifica',
            'flag-reasons'      => 'Motivi di segnalazione',
            'inventory-sources' => 'Fonti di Inventario',
            'orders'            => 'Ordini',
            'pay'               => 'Paga',
            'payment-request'   => 'Richiesta di pagamento',
            'product-reviews'   => 'Recensioni dei prodotti',
            'products'          => 'Prodotti',
            'reviews'           => 'Recensioni dei venditori',
            'seller-categories' => 'Categorie dei venditori',
            'sellers'           => 'Venditori',
            'title'             => 'Mercato',
            'transactions'      => 'Transazioni',
            'view'              => 'Visualizza',
        ],

        'menu' => [
            'communications'    => 'Comunicazioni',
            'flag-reasons'      => 'Motivi di Segnalazione',
            'inventory-sources' => 'Fonti di Inventario',
            'orders'            => 'Ordini',
            'payment-requests'  => 'Richieste di Pagamento',
            'product-reviews'   => 'Recensioni Prodotto',
            'products'          => 'Prodotti',
            'seller-categories' => 'Categorie venditori',
            'seller-reviews'    => 'Recensioni Venditore',
            'sellers'           => 'Venditori',
            'title'             => 'Mercato',
            'transactions'      => 'Transazioni',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Aggiungi Venditori',
                'delete-failed'      => 'Eliminazione del venditore fallita!',
                'delete-success'     => 'Venditore eliminato con successo.',
                'incomplete-profile' => 'Il venditore ha un profilo incompleto!',
                'login-message'      => 'Hai effettuato l’accesso come :seller_name',
                'pending-orders'     => 'Il venditore ha alcuni ordini in sospeso',
                'title'              => 'Venditori',
                'update-success'     => 'Venditore aggiornato con successo!',

                'datagrid' => [
                    'add-product'     => 'Aggiungi',
                    'approved'        => 'Approvato',
                    'assign-product'  => 'Assegna prodotto',
                    'created-at'      => 'Creato il',
                    'delete'          => 'Elimina',
                    'disapproved'     => 'Non approvato',
                    'edit'            => 'Modifica',
                    'email'           => 'Email',
                    'flags'           => 'Bandiere',
                    'id'              => 'ID',
                    'login-as-seller' => 'Accedi come venditore',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Nome del venditore',
                    'shop-url'        => 'URL del negozio',
                    'status'          => 'Stato',
                    'suspended'       => 'Sospeso',
                    'total-flags'     => 'Totale bandiere: :count',
                    'update-status'   => 'Aggiorna Stato',
                ],

                'create'  => [
                    'address'        => 'Indirizzo',
                    'city'           => 'Città',
                    'country'        => 'Paese',
                    'email'          => 'E-mail',
                    'name'           => 'Nome',
                    'phone'          => 'Numero di telefono',
                    'postcode'       => 'Codice postale',
                    'save-btn'       => 'Salva',
                    'select'         => 'Seleziona',
                    'shop-title'     => 'Titolo del negozio',
                    'shop-url'       => 'URL del negozio',
                    'state'          => 'Stato',
                    'street-address' => 'Indirizzo della strada',
                    'success'        => 'Venditore creato con successo.',
                    'title'          => 'Crea venditore',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Flag dei venditori',

                    'datagrid' => [
                        'id'             => 'Id',
                        'customer-name'  => 'Nome cliente',
                        'customer-email' => 'Email cliente',
                        'date'           => 'Data',
                        'reason'         => 'Motivo',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Indietro',
                'image-placeholder' => 'Immagine Prodotto',
                'no-result'         => 'Nessun risultato trovato!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Cerca Prodotti',
            ],

            'assign-product' => [
                'already-selling'     => 'Il venditore sta già vendendo questo prodotto',
                'assign-successfully' => 'Prodotto assegnato con successo al venditore.',
                'back-btn'            => 'Indietro',
                'condition'           => 'Condizione',
                'description'         => 'Descrizione',
                'new'                 => 'Nuovo',
                'old'                 => 'Vecchio',
                'price'               => 'Prezzo',
                'product-not-allowed' => 'Il venditore non è autorizzato a vendere prodotti di tipo :type.',
                'quantities'          => 'Quantità',
                'save-btn'            => 'Salva',
                'select-condition'    => 'Seleziona condizione',
                'title'               => 'Assegna Prodotto',

                'seller-details' => [
                    'additional-info' => 'Informazioni aggiuntive',
                    'approved'        => 'Approvato',
                    'disapproved'     => 'Non approvato',
                    'no-of-products'  => 'Numero di prodotti',
                    'status'          => 'Stato',
                    'suspended'       => 'Sospeso',
                    'title'           => 'Dettagli del venditore',
                ],

                'product-details' => [
                    'active'            => 'Attivo',
                    'disable'           => 'Disabilita',
                    'title'             => 'Dettagli prodotto',
                    'image-placeholder' => 'Immagine del prodotto',
                ],

                'images' => [
                    'info'  => 'La risoluzione dell\'immagine dovrebbe essere di 609px X 560px',
                    'title' => 'Immagini',
                ],

                'videos' => [
                    'error' => 'Il video non può essere maggiore di :max kilobyte. Si prega di scegliere un file più piccolo.',
                    'info'  => 'La dimensione massima del video dovrebbe essere di :size',
                    'title' => 'Video',
                ],

                'configurable' => [
                    'delete-btn'        => 'Elimina',
                    'edit-btn'          => 'Modifica',
                    'image-placeholder' => 'Immagine Prodotto',
                    'qty'               => 'Qta - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Variazioni',

                    'edit' => [
                        'images'     => 'Immagini',
                        'price'      => 'Prezzo',
                        'quantities' => 'Quantità',
                        'save-btn'   => 'Salva',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Aggiungi Link',
                        'delete-btn'  => 'Elimina',
                        'edit-btn'    => 'Modifica',
                        'empty-info'  => 'Per creare un link in movimento.',
                        'empty-title' => 'Aggiungi Link',
                        'file'        => 'File : ',
                        'info'        => 'Il tipo di prodotto scaricabile consente di vendere prodotti digitali come eBook, applicazioni software, musica, giochi, ecc.',
                        'sample-file' => 'File di Esempio : ',
                        'sample-url'  => 'URL di Esempio : ',
                        'title'       => 'Link Scaricabili',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Download Consentiti',
                            'file'        => 'File',
                            'file-type'   => 'Tipo di File',
                            'name'        => 'Titolo',
                            'price'       => 'Prezzo',
                            'sample'      => 'Campione',
                            'sample-type' => 'Tipo di Campione',
                            'save-btn'    => 'Salva',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Aggiungi Campione',
                        'delete-btn'  => 'Elimina',
                        'edit-btn'    => 'Modifica',
                        'empty-info'  => 'Per creare un campione in movimento.',
                        'empty-title' => 'Aggiungi Campione',
                        'file'        => 'File : ',
                        'info'        => 'Il tipo di prodotto scaricabile consente di vendere prodotti digitali come eBook, applicazioni software, musica, giochi, ecc.',
                        'title'       => 'Campioni Scaricabili',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'File',
                            'file-type' => 'Tipo di File',
                            'name'      => 'Titolo',
                            'save-btn'  => 'Salva',
                            'title'     => 'Link',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Indietro',
                'suspended'      => 'Sospeso',
                'title'          => 'Modifica Venditore',
                'update-btn'     => 'Aggiorna Venditore',
                'update-success' => 'Venditore aggiornato con successo.',

                'shop' => [
                    'address'          => 'Indirizzo',
                    'city'             => 'Città',
                    'country'          => 'Paese',
                    'description'      => 'Descrizione',
                    'email'            => 'Email',
                    'name'             => 'Nome',
                    'phone-number'     => 'Numero di telefono',
                    'postcode'         => 'Codice postale',
                    'select'           => 'Seleziona',
                    'shop-title'       => 'Titolo del negozio',
                    'state'            => 'Stato',
                    'street-address'   => 'Indirizzo della strada',
                    'title'            => 'Dettagli del negozio',
                    'url'              => 'URL del negozio',
                ],

                'profile' => [
                    'banner'       => 'Banner Profilo',
                    'banner-size'  => 'Le dimensioni del banner dovrebbero essere come 300px X 200px',
                    'logo'         => 'Logo Profilo',
                    'logo-size'    => 'Le dimensioni del logo dovrebbero essere come 125px X 125px',
                    'social-links' => 'Link :name',
                    'title'        => 'Dettagli Profilo',
                ],

                'allowed-product' => [
                    'title'  => 'Prodotto Consentito',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Importo Minimo Ordine',
                ],

                'google-analytics-id' => [
                    'title'  => 'ID Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Percentuale',
                    'status'     => 'Stato',
                    'title'      => 'Commissione Venditore',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Descrizione',
                    'meta-keyword'     => 'Meta Parole Chiave',
                    'meta-title'       => 'Meta Titolo',
                    'title'            => 'Informazioni Meta',
                ],

                'policy' => [
                    'privacy'  => 'Politica sulla Privacy',
                    'return'   => 'Politica di Reso',
                    'shipping' => 'Politica di Spedizione',
                    'title'    => 'Politiche',
                ],

                'channels' => [
                    'title' => 'Canale',
                ],

                'users' => [
                    'email' => 'Email',
                    'id'    => 'ID',
                    'name'  => 'Nome',
                    'phone' => 'Telefono',
                    'title' => 'Utenti',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Aggiungi Prodotti',
                'delete-success' => 'Prodotto eliminato con successo.',
                'title'          => 'Prodotti',
                'update-success' => 'Prodotto aggiornato con successo.',

                'datagrid' => [
                    'approved'       => 'Approvato',
                    'delete'         => 'Elimina',
                    'disapproved'    => 'Non approvato',
                    'flags'          => 'Bandiere',
                    'id'             => 'ID',
                    'is-owner'       => 'È Proprietario',
                    'no'             => 'No',
                    'out-of-stock'   => 'Esaurito',
                    'price'          => 'Prezzo',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Nome Prodotto',
                    'product-number' => 'Numero Prodotto',
                    'product-type'   => 'Tipo Prodotto',
                    'quantity'       => 'Quantità',
                    'seller-name'    => 'Nome Venditore',
                    'sku'            => 'SKU',
                    'status'         => 'Stato',
                    'total-flags'    => 'Totale Bandiere: :count',
                    'total-quantity' => ':quantity Disponibile',
                    'update-status'  => 'Aggiorna Stato',
                    'yes'            => 'Sì',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Bandiere del Prodotto',

                    'datagrid' => [
                        'customer-email' => 'Email del Cliente',
                        'customer-name'  => 'Nome del Cliente',
                        'date'           => 'Data',
                        'id'             => 'ID',
                        'reason'         => 'Motivo',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Dettagli Recensione',
                'title'          => 'Recensioni del Prodotto',

                'datagrid' => [
                    'approved'      => 'Approvato',
                    'comment'       => 'Commento',
                    'customer-name' => 'Nome Cliente',
                    'date'          => 'Data',
                    'disapproved'   => 'Non Approvato',
                    'id'            => 'Id',
                    'images'        => 'Immagini',
                    'pending'       => 'In Attesa',
                    'product'       => 'Prodotto',
                    'product-name'  => 'Nome Prodotto',
                    'rating'        => 'Valutazione',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Titolo Negozio',
                    'status'        => 'Stato',
                    'title'         => 'Titolo',
                    'update-status' => 'Stato dell\'aggiornamento',
                    'view'          => 'Visualizza',
                ],
            ],

            'update-success' => 'Recensioni del prodotto aggiornate con successo',
            'delete-success' => 'Recensioni prodotto eliminate con successo.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Recensioni Venditore',

                'datagrid' => [
                    'approved'            => 'Approvato',
                    'comment'             => 'Commento',
                    'customer-name'       => 'Nome Cliente',
                    'date'                => 'Data',
                    'delete'              => 'Elimina',
                    'disapproved'         => 'Disapprovato',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Recensioni venditore eliminate con successo.',
                    'mass-update-success' => 'Recensioni venditore aggiornate con successo.',
                    'pending'             => 'In attesa',
                    'rating'              => 'Valutazione',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Titolo Recensione',
                    'seller-name'         => 'Nome Venditore',
                    'shop-title'          => 'Titolo Negozio',
                    'status'              => 'Stato',
                    'update-status'       => 'Aggiorna Stato',
                ],
            ],

            'delete-success' => 'Recensione venditore eliminata con successo.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Ordini',

                'datagrid' => [
                    'canceled'        => 'Annullato',
                    'closed'          => 'Chiuso',
                    'commission'      => 'Commissione',
                    'completed'       => 'Completato',
                    'customer'        => 'Cliente',
                    'date'            => 'Data',
                    'discount'        => 'Sconto',
                    'email'           => 'Email',
                    'fraud'           => 'Frode',
                    'gross-amt'       => 'Importo Lordo',
                    'id'              => 'ID',
                    'items'           => 'Articoli',
                    'location'        => 'Posizione',
                    'order-id'        => 'ID Ordine - #:id',
                    'payment'         => 'Pagamento',
                    'pending'         => 'In attesa',
                    'pending-payment' => 'Pagamento in sospeso',
                    'processing'      => 'Elaborazione',
                    'seller'          => 'Venditore',
                    'seller-earn'     => 'Guadagno',
                    'shipment'        => 'Spedizione',
                    'shop'            => 'Negozio',
                    'status'          => 'Stato',
                    'view'            => 'Visualizza',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transazioni',

                'datagrid' => [
                    'base-total'     => 'Totale Base',
                    'comment'        => 'Commento',
                    'customer-name'  => 'Nome Cliente',
                    'id'             => 'ID',
                    'seller-id'      => 'ID Venditore',
                    'seller-name'    => 'Nome Venditore',
                    'transaction-id' => 'ID Transazione',
                    'view'           => 'Visualizza',
                ],
            ],

            'view' => [
                'commission'        => 'Commissione',
                'created-on'        => 'creato il :date,',
                'name'              => 'Nome',
                'payment-method'    => 'Pagamento con :method',
                'price'             => 'Prezzo',
                'qty'               => 'Quantità',
                'seller-total'      => 'Totale Venditore',
                'shipping-handling' => 'Spedizione e Gestione',
                'subtotal'          => 'Subtotale',
                'tax'               => 'Imposta',
                'title'             => 'Transazioni #:transaction_id',
                'total'             => 'Totale',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Crea Motivo',
                'delete-success'      => 'Motivo di Segnalazione eliminato con successo.',
                'mass-delete-success' => 'Motivi di Segnalazione eliminati con successo.',
                'mass-update-success' => 'Motivi di Segnalazione aggiornati con successo.',
                'title'               => 'Motivi di Segnalazione',

                'datagrid' => [
                    'delete'        => 'Elimina',
                    'edit'          => 'Modifica',
                    'id'            => 'Id',
                    'name'          => 'Nome',
                    'update-status' => 'Aggiorna Stato',

                    'status' => [
                        'active'  => 'Attivo',
                        'disable' => 'Disabilitato',
                        'title'   => 'Stato',
                    ],

                    'type' => [
                        'product' => 'Prodotto',
                        'seller'  => 'Venditore',
                        'title'   => 'Tipo',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Indietro',
                'general'  => 'Generale',
                'label'    => 'Etichetta',
                'product'  => 'Prodotto',
                'save-btn' => 'Salva Motivo',
                'seller'   => 'Venditore',
                'status'   => 'Stato',
                'title'    => 'Crea Motivo',
                'type'     => 'Tipo',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Indietro',
                'general'  => 'Generale',
                'label'    => 'Etichetta',
                'product'  => 'Prodotto',
                'save-btn' => 'Salva Motivo',
                'seller'   => 'Venditore',
                'status'   => 'Stato',
                'title'    => 'Modifica Motivo',
                'type'     => 'Tipo',
            ],

            'create-success' => 'Motivo di Segnalazione creato con successo.',
            'update-success' => 'Motivo di Segnalazione aggiornato con successo.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Assegna categoria',
                'create-success' => 'Categoria assegnata con successo.',
                'delete-failed'  => 'Eliminazione Categoria fallita!',
                'delete-success' => 'Categoria Eliminata con Successo.',
                'title'          => 'Categorie Venditore',
                'update-success' => 'Categoria Aggiornata con Successo.',

                'datagrid' => [
                    'delete' => 'Elimina',
                    'edit'   => 'Modifica',
                    'id'     => 'Id',
                    'name'   => 'Nome',
                ],
            ],

            'create' => [
                'back-btn'      => 'Indietro',
                'save-btn'      => 'Salva Categoria',
                'select-seller' => 'Seleziona Venditore',
                'seller'        => 'Venditore',
                'title'         => 'Assegna categoria',
            ],

            'edit' => [
                'back-btn'   => 'Indietro',
                'seller'     => 'Venditore',
                'title'      => 'Modifica Categoria',
                'update-btn' => 'Aggiorna Categoria',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Commento',
                'no-amount-remaining'  => 'Nessun importo rimanente da pagare!',
                'order-not-found'      => 'Ordine non Trovato!',
                'pay-btn'              => 'Paga Ora',
                'pay-to-seller'        => 'Pagamento al Venditore',
                'payment-success'      => 'Pagamento al Venditore effettuato con successo!',
                'something-went-wrong' => 'Qualcosa è andato storto!',
                'title'                => 'Richiesta Pagamento',

                'datagrid' => [
                    'already-paid'          => 'Già Pagato',
                    'canceled'              => 'Annullato',
                    'closed'                => 'Chiuso',
                    'completed'             => 'Completato',
                    'customer-name'         => 'Nome Cliente',
                    'date'                  => 'Data',
                    'email'                 => 'Email',
                    'fraud'                 => 'Frode',
                    'gross-amt'             => 'Importo lordo',
                    'id'                    => 'ID ordine',
                    'invoice-pending'       => 'Fattura in Sospeso',
                    'order-canceled'        => 'Ordine Annullato',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Paga',
                    'pending'               => 'In Attesa',
                    'pending_payment'       => 'Pagamento in Sospeso',
                    'processing'            => 'In Elaborazione',
                    'refunded'              => 'Rimborsato',
                    'remaining-total'       => 'Totale Residuo',
                    'request-payment'       => 'Richiesta Pagamento',
                    'seller'                => 'Venditore',
                    'seller-total-invoiced' => 'Totale Venditore Fatturato',
                    'shop'                  => 'Negozio',
                    'status'                => 'Stato',
                    'total-paid'            => 'Totale Pagato',
                    'view'                  => 'Visualizza',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Blocca Venditore',
                'block-success'        => 'Venditore bloccato con successo!',
                'chat-history-cleared' => 'Cronologia chat cancellata con successo!',
                'clear-chat-history'   => 'Cancella cronologia chat',
                'exit'                 => 'Esci',
                'message-failed'       => 'Invio del messaggio fallito!',
                'message-sent'         => 'Messaggio inviato con successo!',
                'no-message'           => 'Nessun messaggio trovato!',
                'search'               => 'Cerca',
                'search-message'       => 'Cerca messaggio',
                'seller-blocked'       => 'Hai bloccato questo venditore. Non puoi inviare messaggi a questo venditore.',
                'sellers'              => 'Venditori',
                'title'                => 'Comunicazioni',
                'type-message'         => 'Scrivi il tuo messaggio qui...',
                'unblock-seller'       => 'Sblocca Venditore',
                'unblock-success'      => 'Venditore sbloccato con successo!',
                'welcome-message'      => 'Benvenuto nella comunicazione del Marketplace!',

                'filters' => [
                    'all-messages'      => 'Tutti i messaggi',
                    'prev-fifteen-days' => 'Ultimi 15 giorni',
                    'prev-seven-days'   => 'Ultimi 7 giorni',
                    'prev-six-months'   => 'Ultimi 6 mesi',
                    'prev-thirty-days'  => 'Ultimi 30 giorni',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Fonti di Inventario',

                'datagrid' => [
                    'active'      => 'Attivo',
                    'code'        => 'Codice',
                    'id'          => 'Id',
                    'inactive'    => 'Inattivo',
                    'name'        => 'Nome',
                    'seller-name' => 'Nome Venditore',
                    'shop-title'  => 'Titolo Negozio',
                    'status'      => 'Stato',
                ],

                'view' => [
                    'active'         => 'Attivo',
                    'address'        => 'Indirizzo Fonte',
                    'city'           => 'Città',
                    'code'           => 'Codice',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informazioni Contatto',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Numero di Contatto',
                    'country'        => 'Paese',
                    'description'    => 'Descrizione',
                    'general-info'   => 'Informazioni Generali',
                    'inactive'       => 'Inattivo',
                    'latitude'       => 'Latitudine',
                    'longitude'      => 'Longitudine',
                    'name'           => 'Nome',
                    'postcode'       => 'CAP',
                    'priority'       => 'Priorità',
                    'seller-info'    => 'Informazioni Venditore',
                    'seller-name'    => 'Nome Venditore',
                    'settings'       => 'Impostazioni',
                    'shop-title'     => 'Titolo Negozio',
                    'state'          => 'Stato',
                    'street'         => 'Via',
                    'title'          => 'Fonte di Inventario #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Installa il pacchetto Marketplace.',
            'migrate'     => 'Migrazione di tutte le tabelle nel database (ci vorrà un po’ di tempo)...',
            'seed'        => 'Inserimento dati nel database...',
            'publish'     => 'Pubblicazione di risorse e configurazioni...',
            'cache'       => 'Pulizia della cache...',
            'finish'      => 'Pacchetto Marketplace installato con successo.',
        ],

        'version' => [
            'description' => 'Mostra la versione attuale del pacchetto Marketplace.',
            'comment'     => 'Versione Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Caro/a :customer_name',
        'dear-admin'  => 'Gentile Amministratore',
        'dear-seller' => 'Caro venditore',

        'seller' => [
            'registration' => [
                'date'        => 'Data Registrazione:',
                'description' => 'Siamo entusiasti di informarti di una nuova registrazione venditore sulla nostra piattaforma. Ti preghiamo di prenderti un momento per dare il benvenuto al venditore sulla nostra piattaforma.',
                'details'     => 'Ecco i dettagli:',
                'email'       => 'Indirizzo Email:',
                'greeting'    => 'Spero che questo messaggio ti trovi bene.',
                'name'        => 'Nome Venditore:',
                'shop'        => 'URL Negozio:',
                'subject'     => 'Nuova Registrazione Venditore',
            ],

            'forgot-password' => [
                'description'    => 'Ricevi questa email perché abbiamo ricevuto una richiesta di reimpostazione della password per il tuo account.',
                'greeting'       => 'Password dimenticata!',
                'reset-password' => 'Reimposta password',
                'subject'        => 'Email di reimpostazione password',
            ],

            'welcome' => [
                'description' => 'Benvenuto a bordo! Siamo entusiasti di averti nella famiglia. La tua presenza come venditore aggiunge un immenso valore alla nostra piattaforma e ci aspettiamo una partnership di successo.',
                'greeting'    => 'Benvenuto e grazie per esserti registrato!',
                'subject'     => 'Notifica di Benvenuto Venditore',
            ],

            'approval' => [
                'approved'    => 'La tua richiesta di diventare venditore è stata accettata.',
                'disapproved' => 'La tua richiesta di diventare venditore è stata respinta.',
                'greeting'    => 'Benvenuto e grazie per esserti registrato!',
                'subject'     => 'Notifica di Approvazione Venditore',
            ],

            'update' => [
                'description' => 'Il tuo profilo è stato aggiornato con successo.',
                'greeting'    => 'Spero che questo messaggio ti trovi bene.',
                'subject'     => 'Notifica di Aggiornamento Profilo Venditore',
            ],

            'good-bye' => [
                'description' => 'Lavorare con te è stato un piacere, e sono veramente grato per la tua professionalità, dedizione e l\'alta qualità dei tuoi prodotti/servizi. Il tuo impegno nel garantire la soddisfazione del cliente non è passato inosservato ed è stato un fattore chiave nella nostra esperienza positiva.',
                'greeting'    => 'Confido che questo messaggio ti trovi bene.',
                'subject'     => 'Notifica di Addio Venditore',
            ],

            'product-approval' => [
                'approved'    => 'Il tuo prodotto :name è stato approvato.',
                'disapproved' => 'Il tuo prodotto :name è stato respinto.',
                'greeting'    => 'Benvenuto e grazie per esserti registrato con noi!',
                'subject'     => 'Notifica di Approvazione Prodotto Venditore',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Hai un nuovo ordine :order_id effettuato il :created_at',
                    'subject'  => 'Conferma Nuovo Ordine',
                    'summary'  => 'Riepilogo dell\'Ordine',
                    'title'    => 'Conferma Ordine!',
                ],

                'canceled' => [
                    'greeting' => 'L’ordine :order_id è stato annullato',
                    'subject'  => 'Conferma di annullamento dell’ordine',
                    'summary'  => 'Riepilogo dell’ordine',
                    'title'    => 'Ordine annullato!',
                ],

                'billing-address'   => 'Indirizzo di Fatturazione',
                'contact'           => 'Contatto',
                'discount'          => 'Sconto',
                'grand-total'       => 'Totale Finale',
                'name'              => 'Nome',
                'payment'           => 'Pagamento',
                'price'             => 'Prezzo',
                'qty'               => 'Quantità',
                'shipping'          => 'Spedizione',
                'shipping-address'  => 'Indirizzo di Spedizione',
                'shipping-handling' => 'Spedizione e Gestione',
                'sku'               => 'SKU',
                'subtotal'          => 'Subtotale',
                'tax'               => 'Tassa',
            ],

            'payment-request' => [
                'greeting'  => 'Spero che questo messaggio ti trovi bene.',
                'paid'      => 'Ciao.. Hai ricevuto il pagamento per l\'ordine :order_id.',
                'requested' => 'Il venditore :seller_name è richiesto per il pagamento dell\'ordine :order_id.',
                'subject'   => 'Notifica di richiesta di pagamento del venditore',
            ],
        ],

        'contact-seller' => [
            'email'    => 'Email:- :email',
            'greeting' => 'Spero che questo messaggio ti trovi bene.',
            'info'     => 'Ciao, :name ha una domanda per te. Per favore, verifica i dettagli qui sotto.',
            'query'    => 'Domanda: :query',
            'subject'  => 'Notifica di contatto con il venditore',
            'topic'    => 'Oggetto: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Ciao, ":name" ha segnalato un problema relativo al prodotto ":product_name" del venditore ":seller_name". Si prega di esaminare i dettagli di seguito.',
            'greeting'   => 'Spero che questo messaggio ti trovi bene.',
            'reason'     => 'Motivo:- :reason',
            'seller-msg' => 'Ciao, ":name" ha segnalato un problema relativo al tuo prodotto ":product_name". Si prega di esaminare i dettagli di seguito.',
            'subject'    => 'Notifica di segnalazione prodotto',
        ],

        'report-seller' => [
            'admin-msg'  => 'Ciao, :name ha segnalato un problema riguardante :seller_name. Per favore, verifica i dettagli qui sotto.',
            'greeting'   => 'Spero che questo messaggio ti trovi bene.',
            'reason'     => 'Motivo: :reason',
            'seller-msg' => 'Ciao, :name ha segnalato un problema che ti riguarda. Per favore, verifica i dettagli qui sotto.',
            'subject'    => 'Notifica di segnalazione del venditore',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Crea un account venditore Velocity',
            'banner-description'  => 'Velocity può essere una grande piattaforma per vendere i tuoi prodotti a nuove aziende in India. Seguendo questi suggerimenti, puoi prepararti al successo come venditore Velocity!',
            'banner-btn-title'    => 'Apri Negozio',
            'feature-title'       => 'Perché i venditori amano vendere su Velocity?',
            'feature-description' => 'I venditori amano le piattaforme ad alta velocità perché offrono il potenziale per aumentare le vendite, una migliore esposizione e un\'esperienza di vendita efficiente che può contribuire alla crescita e al successo dell\'azienda.',
            'feature-box1-title'  => 'Opportunità di Vendita Aumentate',
            'feature-box1-desc'   => 'I venditori amano le piattaforme ad alta velocità perché offrono il potenziale per aumentare le vendite, una migliore esposizione e un\'esperienza di vendita efficiente che può contribuire alla crescita e al successo dell\'azienda.',
            'feature-box2-title'  => 'Tempi di Risposta Più Rapidi',
            'feature-box2-desc'   => 'I prodotti tendono a vendere più rapidamente sulle piattaforme ad alta velocità, portando a un turnover dell\'inventario più veloce e alla generazione di entrate per i venditori.',
            'feature-box3-title'  => 'Visibilità Aumentata',
            'feature-box3-desc'   => 'Queste piattaforme offrono maggiore visibilità ed esposizione per i prodotti dei venditori, risultando in più visualizzazioni e potenziali vendite.',
            'feature-box4-title'  => 'Efficienza e Convenienza',
            'feature-box4-desc'   => 'Le piattaforme ad alta velocità spesso hanno processi e strumenti semplificati che rendono la vendita più efficiente, risparmiando tempo e fatica ai venditori nella gestione delle loro attività online.',
            'journey-title'       => 'Inizia il tuo viaggio su Velocity',
            'journey-description' => 'Inizia a vendere con grandi clienti in tutto il mondo, 24 ore su 24.',
            'journey-step1-title' => 'Diventa Venditore',
            'journey-step1-desc'  => 'Configura il tuo negozio, con tutte le informazioni di base.',
            'journey-step2-title' => 'Elenca Prodotti',
            'journey-step2-desc'  => 'Elenca i prodotti nel negozio per la visualizzazione e l\'acquisto da parte dei clienti.',
            'journey-step3-title' => 'Ricevi Ordine',
            'journey-step3-desc'  => 'Ricevi ordini da una vasta gamma di clienti in tutto il mondo.',
            'journey-step4-title' => 'Consegna del Prodotto',
            'journey-step4-desc'  => 'Una volta che il prodotto è stato consegnato e il pagamento ricevuto.',
            'journey-step5-title' => 'Pagamento',
            'journey-step5-desc'  => 'Richiesta di pagamento, ricevi il pagamento dopo la detrazione della commissione.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Prodotto danneggiato',
            'damaged-product-sold'      => 'Prodotto danneggiato venduto dal venditore',
            'duplicate-product'         => 'Prodotto duplicato',
            'duplicate-product-sold'    => 'Prodotto duplicato venduto dal venditore',
            'missing-product-parts'     => 'Parti del prodotto mancanti',
            'over-price-product'        => 'Prodotto sovrapprezzato',
            'over-price-product-sold'   => 'Prodotto sovrapprezzato venduto dal venditore',
            'poor-product-quality'      => 'Qualità del prodotto scadente',
            'poor-product-quality-sold' => 'Prodotto di qualità scadente venduto dal venditore',
            'receive-wrong-product'     => 'Ricevere il prodotto sbagliato',
            'wrong-product-sold'        => 'Prodotto sbagliato venduto dal venditore',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Scarica',
                    'export'     => 'Esporta',
                    'no-records' => 'Niente da esportare',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Pagina principale',
                    'logout'     => 'Esci',
                    'my-profile' => 'Il mio profilo',
                    'visit-shop' => 'Visita il negozio',

                    'mega-search' => [
                        'customers'                       => 'Clienti',
                        'explore-all-customers'           => 'Esplora tutti i clienti',
                        'explore-all-matching-customers'  => 'Esplora tutti i clienti che corrispondono a “:query” (:count)',
                        'explore-all-matching-orders'     => 'Esplora tutti gli ordini che corrispondono a “:query” (:count)',
                        'explore-all-matching-products'   => 'Esplora tutti i prodotti che corrispondono a “:query” (:count)',
                        'explore-all-orders'              => 'Esplora tutti gli ordini',
                        'explore-all-products'            => 'Esplora tutti i prodotti',
                        'orders'                          => 'Ordini',
                        'products'                        => 'Prodotti',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'Ricerca Mega',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Riduci',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Aggiungi immagine',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Sono consentiti solo file di immagine (.jpeg, .jpg, .png, ..).',
                ],

                'videos' => [
                    'add-video-btn'     => 'Aggiungi video',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Sono consentiti solo file video (.mp4, .mov, .ogg ..).',
                ],

                'documents' => [
                    'add-document-btn'  => 'Aggiungi documento',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Sono consentiti solo file di documenti (:types ..).',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Fronte',
                    'next'       => 'Prossimo',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Dimensione',
                    'text'       => 'Testo',
                    'use-cases'  => 'Casi d\'uso',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Prenotazioni',
            'communication'     => 'Comunicazione',
            'customers'         => 'Clienti',
            'dashboard'         => 'Dashboard',
            'extensions'        => 'Estensioni',
            'general'           => 'Generale',
            'inventory-sources' => 'Fonti di Inventario',
            'manage-profile'    => 'Gestisci Profilo',
            'orders'            => 'Ordini',
            'product-reviews'   => 'Recensioni Prodotti',
            'products'          => 'Prodotti',
            'reporting'         => 'Reportistica',
            'roles'             => 'Ruoli',
            'sales'             => 'Vendite',
            'seller-reviews'    => 'Recensioni Venditore',
            'settings'          => 'Impostazioni',
            'transaction'       => 'Transazione',
            'users'             => 'Utenti',
        ],

        'acl' => [
            'assign'            => 'Assegna',
            'bookings'          => 'Prenotazioni',
            'cancel'            => 'Annulla',
            'communication'     => 'Comunicazione',
            'create'            => 'Crea',
            'customers'         => 'Clienti',
            'dashboard'         => 'Cruscotto',
            'delete'            => 'Elimina',
            'edit'              => 'Modifica',
            'extensions'        => 'Estensioni',
            'general'           => 'Generale',
            'inventory-sources' => 'Fonti di Inventario',
            'invoice'           => 'Fattura',
            'orders'            => 'Ordini',
            'payment-request'   => 'Richiesta di pagamento',
            'print'             => 'Stampa',
            'print-invoice'     => 'Stampa fattura',
            'product-reviews'   => 'Recensioni dei prodotti',
            'products'          => 'Prodotti',
            'reporting'         => 'Reportistica',
            'sales'             => 'Vendite',
            'seller-reviews'    => 'Recensioni venditori',
            'settings'          => 'Impostazioni',
            'shipment'          => 'Spedizione',
            'transactions'      => 'Transazioni',
            'view'              => 'Visualizza',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Aggiungi Nuovo Prodotto',
            'assign'            => 'Assegna',
            'bookings'          => 'Prenotazioni',
            'communication'     => 'Comunicazione',
            'create'            => 'Crea',
            'customers'         => 'Clienti',
            'dashboard'         => 'Dashboard',
            'edit'              => 'Modifica',
            'extensions'        => 'Estensioni',
            'general'           => 'Generale',
            'inventory-sources' => 'Fonti di Inventario',
            'manage-profile'    => 'Gestisci Profilo',
            'orders'            => 'Ordini',
            'product-reviews'   => 'Recensioni Prodotti',
            'products'          => 'Prodotti',
            'reporting'         => 'Reportistica',
            'roles'             => 'Ruoli',
            'sales'             => 'Vendite',
            'seller-reviews'    => 'Recensioni Venditore',
            'settings'          => 'Impostazioni',
            'title'             => 'Profilo',
            'transaction'       => 'Transazione',
            'users'             => 'Utenti',
            'view'              => 'Visualizza',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Accedi',
            'create-your-account' => 'Crea il tuo account',
            'email'               => 'Email',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (Registrato in India). Tutti i diritti riservati.',
            'forgot-pass'         => 'Password dimenticata?',
            'form-login-text'     => 'Se hai un account, accedi con il tuo indirizzo email.',
            'invalid-credentials' => 'Controlla le tue credenziali e riprova.',
            'new-seller'          => 'Nuovo venditore?',
            'not-approved'        => 'La tua attivazione richiede l\'approvazione dell\'amministratore',
            'page-title'          => 'Accesso venditore',
            'password'            => 'Password',
            'show-password'       => 'Mostra password',
            'suspended-message'   => 'Il tuo account è stato sospeso. Contatta l\'amministratore per qualsiasi domanda.',
            'title'               => 'Accedi',
        ],

        'signup' => [
            'account-exists'   => 'Hai già un account?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Registrati',
            'confirm-pass'     => 'Conferma Password',
            'email'            => 'Email',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Registrato in India). Tutti i diritti riservati.',
            'form-signup-text' => 'Se sei nuovo nel nostro negozio, siamo felici di averti come membro.',
            'name'             => 'Nome',
            'page-title'       => 'Diventa venditore',
            'password'         => 'Password',
            'sign-in-button'   => 'Accedi',
            'success'          => 'Account creato con successo.',
            'url'              => 'URL del Negozio',
        ],

        'forgot-password' => [
            'already-sent'         => 'Abbiamo già inviato il link per reimpostare la password al tuo indirizzo email.',
            'back'                 => 'Torna al login?',
            'bagisto'              => 'Bagisto',
            'email'                => 'Email',
            'email-not-exist'      => 'Impossibile trovare un utente con questo indirizzo email.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (Registrato in India). Tutti i diritti riservati.',
            'forgot-password-text' => 'Se hai dimenticato la tua password, recuperala inserendo il tuo indirizzo email.',
            'page-title'           => 'Hai dimenticato la password?',
            'reset-link-sent'      => 'Abbiamo inviato il link per reimpostare la password via e-mail.',
            'sign-in-button'       => 'Accedi',
            'submit'               => 'Reimposta Password',
            'title'                => 'Recupera Password',
        ],

        'reset-password' => [
            'back-link-title'  => 'Torna al login',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Conferma Password',
            'email'            => 'Email registrata',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Registrato in India). Tutti i diritti riservati.',
            'password'         => 'Password',
            'submit-btn-title' => 'Reimposta Password',
            'title'            => 'Reimposta Password',
        ],

        'dashboard' => [
            'add-product'           => 'Aggiungi Prodotto',
            'avg-order-sell'        => 'Vendita Media per Ordine',
            'category-info'         => 'Nessuna categoria trovata per l\'intervallo selezionato',
            'complete-profile-link' => 'Completa il tuo profilo &rarr;',
            'completed-orders'      => 'Completati (:count)',
            'customer-info'         => 'Nessun cliente trovato per l\'intervallo selezionato',
            'date-range'            => 'Intervallo di date',
            'empty-threshold'       => 'Soglia vuota',
            'empty-threshold-desc'  => 'Non ci sono prodotti disponibili',
            'end-date'              => 'Data di Fine',
            'hi-comment'            => 'Controlla rapidamente cosa sta succedendo nel tuo negozio.',
            'hi-seller'             => 'Ciao! :seller_name',
            'month'                 => 'Questo Mese',
            'no-category'           => 'Nessun dato disponibile',
            'no-customer'           => 'Nessun dato disponibile',
            'no-record-available'   => 'Nessun record disponibile.',
            'order-count'           => ':total Ordini',
            'overall-details'       => 'Dettagli Totali',
            'pending-orders'        => 'In Sospeso (:count)',
            'per-unit'              => ':price/Unità',
            'processing-orders'     => 'In Elaborazione (:count)',
            'product-info'          => 'Aggiungi prodotti correlati in movimento',
            'profile-score'         => 'Punteggio del profilo',
            'profile-score-desc'    => 'Massimizza la tua visibilità mantenendo complete le informazioni del tuo profilo.',
            'qty-stock'             => ':qty in stock',
            'refunded-orders'       => 'Rimborsati (:count)',
            'remaining-payout'      => 'Pagamento Residuo',
            'start-date'            => 'Data di Inizio',
            'stock-threshold'       => 'Soglia di stock',
            'title'                 => 'Dashboard',
            'today'                 => 'Oggi',
            'top-categories'        => 'Top Categorie',
            'top-customers'         => 'Cliente con il maggior numero di vendite',
            'top-products'          => 'Prodotti più venduti',
            'total-customers'       => 'Totale Clienti',
            'total-orders'          => 'Totale Ordini',
            'total-payout'          => 'Pagamento Totale',
            'total-sale'            => 'Vendita totale: :total',
            'total-sales'           => 'Vendite Totali',
            'view-all-btn'          => 'Visualizza tutto',
            'visitor-count'         => 'Visitatori - :count',
            'week'                  => 'Questa Settimana',
            'year'                  => 'Questo Anno',
        ],

        'orders' => [
            'index' => [
                'title' => 'Ordini',

                'datagrid' => [
                    'canceled'        => 'Annullato',
                    'closed'          => 'Chiuso',
                    'commission'      => 'Commissione',
                    'completed'       => 'Completato',
                    'customer'        => 'Cliente',
                    'date'            => 'Data',
                    'discount'        => 'Sconto',
                    'email'           => 'Email',
                    'fraud'           => 'Frode',
                    'gross-amt'       => 'Importo Lordo',
                    'id'              => 'Id',
                    'invoice-pending' => 'Fattura in Attesa',
                    'items'           => 'Prodotti',
                    'location'        => 'Posizione',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Pagato',
                    'payment'         => 'Pagamento',
                    'payment-request' => 'Richiesta di Pagamento',
                    'pending'         => 'In Attesa',
                    'pending-payment' => 'Pagamento in Attesa',
                    'processing'      => 'In Elaborazione',
                    'refunded'        => 'Rimborsato',
                    'requested'       => 'Richiesto',
                    'seller-earn'     => 'Guadagno Venditore',
                    'shipment'        => 'Spedizione',
                    'status'          => 'Stato',
                    'transaction'     => 'Transazione',
                    'view'            => 'Visualizza',
                ],

                'payment-req-success'  => 'La tua richiesta di pagamento è stata inviata con successo',
                'something-went-wrong' => 'Qualcosa è andato storto!',
            ],

            'view' => [
                'admin-commission'           => 'Commissione Amministratore',
                'billing-address'            => 'Indirizzo di Fatturazione',
                'by-customer'                => 'Da Cliente - :name',
                'cancel-btn'                 => 'Annulla',
                'cancel-confirm-msg'         => 'Sei sicuro di voler annullare questo ordine?',
                'cancel-error-msg'           => 'Impossibile annullare l\'ordine',
                'cancel-success-msg'         => 'L\'ordine è stato annullato',
                'canceled'                   => 'Annullato',
                'closed'                     => 'Chiuso',
                'completed'                  => 'Completato',
                'discount'                   => 'Sconto',
                'fraud'                      => 'Frode',
                'grand-total'                => 'Totale Generale',
                'info'                       => 'Informazioni',
                'item-canceled'              => 'Annullati (:qty_canceled)',
                'item-invoice'               => 'Fatturati (:qty_invoiced)',
                'item-ordered'               => 'Ordinati (:qty_ordered)',
                'item-refunded'              => 'Rimborsati (:qty_refunded)',
                'item-shipped'               => 'Spediti (:qty_shipped)',
                'item-status'                => 'Stato Prodotto',
                'payment-method'             => 'Metodo di Pagamento',
                'pending'                    => 'In Attesa',
                'pending_payment'            => 'Pagamento in Attesa',
                'permission-error'           => 'Non hai il permesso per annullare l\'ordine',
                'place-on'                   => 'Effettuato il :date',
                'price'                      => 'Prezzo',
                'price-excl-tax'             => 'Prezzo (escluso tasse)',
                'price-incl-tax'             => 'Prezzo (incluso tasse)',
                'processing'                 => 'In Elaborazione',
                'product'                    => 'Prodotto',
                'shipping-address'           => 'Indirizzo di Spedizione',
                'shipping-handling'          => 'Spedizione e Gestione',
                'shipping-handling-excl-tax' => 'Spedizione e gestione (Escl. IVA)',
                'shipping-handling-incl-tax' => 'Spedizione e gestione (Inclusa IVA)',
                'shipping-method'            => 'Metodo di Spedizione',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Subtotale',
                'sub-total-excl-tax'         => 'Subtotale (Escl. IVA)',
                'sub-total-incl-tax'         => 'Subtotale (Inclusa IVA)',
                'tax'                        => 'Tasse',
                'tax-amount'                 => 'Importo Tasse',
                'tax-percent'                => 'Percentuale Tasse',
                'title'                      => 'Ordine #:order_id',
                'total'                      => 'Totale',
                'total-due'                  => 'Totale Dovuto',
                'total-paid'                 => 'Totale Pagato',
                'total-refunded'             => 'Totale Rimborsato',
                'total-seller-amt'           => 'Totale Importo Venditore',

                'invoices' => [
                    'bank-details'               => 'Dettagli Bancari',
                    'bill-to'                    => 'Fatturato a',
                    'contact'                    => 'Contatto',
                    'contact-number'             => 'Numero di Contatto',
                    'created-on'                 => 'creato il: :date_time',
                    'date'                       => 'Data Fattura',
                    'discount'                   => 'Sconto',
                    'excl-tax'                   => 'Escl. IVA:',
                    'grand-total'                => 'Totale Generale',
                    'individual-invoice'         => 'Fattura #:invoice_id',
                    'invoice'                    => 'Fattura',
                    'invoice-id'                 => 'ID Fattura',
                    'name'                       => 'Nome',
                    'order-date'                 => 'Data Ordine',
                    'order-id'                   => 'ID Ordine',
                    'payment-method'             => 'Metodo di Pagamento',
                    'payment-terms'              => 'Termini di Pagamento',
                    'price'                      => 'Prezzo',
                    'print'                      => 'Stampa',
                    'product-name'               => 'Nome Prodotto',
                    'qty'                        => 'Qtà',
                    'ship-to'                    => 'Spedito a',
                    'shipping-handling'          => 'Spedizione & Gestione',
                    'shipping-handling-excl-tax' => 'Spedizione & Gestione (Escl. IVA)',
                    'shipping-handling-incl-tax' => 'Spedizione & Gestione (Incl. IVA)',
                    'shipping-method'            => 'Metodo di Spedizione',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotale',
                    'sub-total-excl-tax'         => 'Subtotale (Escl. IVA)',
                    'sub-total-incl-tax'         => 'Subtotale (Incl. IVA)',
                    'tax'                        => 'Tassa',
                    'tax-amount'                 => 'Importo Tassa',
                    'title'                      => 'Fatture',
                    'vat-number'                 => 'Numero Partita IVA',
                ],

                'shipments' => [
                    'carrier-title'       => 'Titolo Corriere',
                    'created-on'          => 'creata il :date_time',
                    'individual-shipment' => 'Spedizioni #:track_number',
                    'inventory-source'    => 'Origine Inventario',
                    'name'                => 'Nome',
                    'qty'                 => 'Qtà',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Spedizioni',
                    'tracking-number'     => 'Numero di Tracciamento',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Tariffa di Aggiustamento',
                    'adjustment-refund'          => 'Rimborso Aggiustamento',
                    'created-on'                 => 'creata il :date_time',
                    'discount'                   => 'Sconto',
                    'grand-total'                => 'Totale Generale',
                    'individual-refund'          => 'Rimborso #:refund_id',
                    'no-result-found'            => 'Non abbiamo trovato alcun record.',
                    'price'                      => 'Prezzo',
                    'product-name'               => 'Nome Prodotto',
                    'qty'                        => 'Qtà',
                    'shipping-handling'          => 'Spedizione & Gestione',
                    'shipping-handling-excl-tax' => 'Spedizione e gestione (Escl. IVA)',
                    'shipping-handling-incl-tax' => 'Spedizione e gestione (Inclusa IVA)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Subtotale (Escl. IVA)',
                    'sub-total-incl-tax'         => 'Subtotale (Inclusa IVA)',
                    'subtotal'                   => 'Subtotale',
                    'tax'                        => 'Tassa',
                    'tax-amount'                 => 'Importo Tassa',
                    'title'                      => 'Rimborsi',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Fattura',
                'invoice-success'  => 'Fattura creata con successo',
                'permission-error' => 'Non hai il permesso di creare una fattura per l\'ordine',
                'price'            => 'Prezzo',
                'product-name'     => 'Nome Prodotto',
                'qty'              => 'Qtà',
                'qty-error'        => 'La quantità richiesta non è disponibile',
                'sub-total'        => 'Fattura <br> Subtotale',
                'title'            => 'Crea Fattura',
                'total'            => 'Totale',
            ],

            'shipments' => [
                'avl-qty'          => 'Disp. - :qty Qtà',
                'carrier-title'    => 'Titolo Corriere',
                'create-btn'       => 'Spedisci',
                'ordered-qty'      => 'Qtà Ordinata',
                'permission-error' => 'Non hai il permesso di creare una spedizione',
                'product-name'     => 'Nome Prodotto',
                'qty'              => 'Qtà',
                'qty-error'        => 'La quantità richiesta non è disponibile',
                'shipment-success' => 'Spedizione creata con successo',
                'shipped-qty'      => 'Qtà Spedita',
                'sku'              => 'SKU - :sku',
                'source'           => 'Origine del Prodotto Ordinato',
                'title'            => 'Crea Spedizione',
                'tracking-id'      => 'ID Tracciamento',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Data di Creazione',
                    'from'         => 'Da',
                    'id'           => 'ID',
                    'order-id'     => 'ID Ordine',
                    'qty'          => 'QTA',
                    'to'           => 'A',
                    'view'         => 'Visualizza',
                ],

                'title'    => 'Prenotazioni',
            ],

            'calendar' => [
                'booking-date'     => 'Data di Prenotazione',
                'booking-details'  => 'Dettagli Prenotazione',
                'canceled'         => 'Annullato',
                'closed'           => 'Chiuso',
                'done'             => 'Fatto',
                'order-id'         => 'ID Ordine',
                'pending'          => 'In Attesa',
                'price'            => 'Prezzo',
                'status'           => 'Stato',
                'time-slot'        => 'Fascia Oraria:',
                'view-details'     => 'Visualizza Dettagli',
            ],

            'title' => 'Prodotti Prenotati',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Pagamento Residuo',
                'title'                  => 'Transazioni',
                'total-payout'           => 'Pagamento Totale',
                'total-seller-sale'      => 'Vendita Totale (Venditore)',
                'total-admin-commission' => 'Commissione Totale (Admin)',
                'total-sale-invoiced'    => 'Vendita Totale (Fatturata)',

                'datagrid' => [
                    'comment'          => 'Commento',
                    'id'               => 'Id',
                    'total'            => 'Totale',
                    'transaction-id'   => 'ID Transazione',
                ],
            ],

            'view' => [
                'commission'        => 'Commissione',
                'created-on'        => 'creato il :date,',
                'date'              => 'Data',
                'id'                => 'ID Transazione',
                'method'            => 'Metodo',
                'name'              => 'Nome',
                'payment-method'    => 'Pagamento con :method',
                'price'             => 'Prezzo',
                'print'             => 'Stampa',
                'qty'               => 'Qtà',
                'seller-total'      => 'Totale Venditore',
                'shipping-handling' => 'Spedizione e Gestione',
                'subtotal'          => 'Subtotale',
                'tax'               => 'Tasse',
                'title'             => 'Transazione',
                'total'             => 'Totale',
                'transaction-id'    => 'Numero transazione: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'Aggiungi Nuovo Prodotto',
                'title'             => 'Prodotti',

                'datagrid' => [
                    'active'         => 'Attivo',
                    'approved'       => 'Approvato',
                    'category'       => 'Categoria',
                    'delete'         => 'Elimina',
                    'disable'        => 'Disabilitato',
                    'disapproved'    => 'Non approvato',
                    'edit'           => 'Modifica',
                    'id'             => 'ID',
                    'image'          => 'Immagine',
                    'is-approved'    => 'Approvato',
                    'name'           => 'Nome',
                    'out-of-stock'   => 'Esaurito',
                    'price'          => 'Prezzo',
                    'product-number' => 'Numero Prodotto',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Stato',
                    'stock'          => 'Stock',
                    'total-quantity' => ':quantity Disponibile',
                    'type'           => 'Tipo',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Famiglia di Attributi',
                'back'                      => 'Indietro',
                'continue'                  => 'Continua',
                'create-new-product'        => 'Crea Nuovi Prodotti',
                'create-your-new-product'   => 'Se il prodotto non esiste, crea il tuo nuovo prodotto',
                'disable-product-message'   => 'L\'amministratore ha disabilitato la funzionalità per creare o assegnare prodotti.',
                'image-placeholder'         => 'La Tua Immagine',
                'no-result'                 => 'Nessun Risultato',
                'not-allowed'               => 'Non sei autorizzato a creare un prodotto',
                'or'                        => 'Oppure',
                'product-type'              => 'Tipo di Prodotto',
                'search-product'            => 'Cerca Prodotti',
                'sell-admin-product-prices' => 'Vendi i prodotti dell\'amministratore ai tuoi prezzi.',
                'sell-as-yours'             => 'Vendi come tuo',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Puoi aggiungere un prodotto in 2 modi, o dal prodotto dell\'amministratore o creare il tuo.',
                'title'                     => 'Aggiungi Nuovo Prodotto',
                'update-profile'            => 'Si prega di aggiornare i dettagli del profilo',
            ],

            'edit' => [
                'back-btn'      => 'Indietro',
                'preview'       => 'Anteprima',
                'remove'        => 'Rimuovi',
                'save-btn'      => 'Salva Prodotto',
                'title'         => 'Modifica Prodotto',
                'channels'      => 'Canali',
                'progress-info' => 'Migliora l’appeal del tuo prodotto e lascia un’impressione duratura sui clienti assicurandoti che tutti i dettagli del prodotto siano completi e accurati!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Aggiungi Prezzo Gruppo',
                        'all-groups'                => 'Tutti i gruppi',
                        'create-btn'                => 'Aggiungi Nuovo',
                        'discount-group-price-info' => 'Per :qty Qtà con sconto di :price',
                        'edit-btn'                  => 'Modifica',
                        'empty-info'                => 'Prezzi speciali per clienti appartenenti a un gruppo specifico.',
                        'fixed-group-price-info'    => 'Per :qty Qtà a prezzo fisso di :price',
                        'title'                     => 'Prezzo per Gruppo Clienti',

                        'create' => [
                            'all-groups'     => 'Tutti i gruppi',
                            'create-title'   => 'Crea Prezzo Gruppo Clienti',
                            'customer-group' => 'Gruppo Clienti',
                            'delete-btn'     => 'Elimina',
                            'discount'       => 'Sconto',
                            'fixed'          => 'Fisso',
                            'price'          => 'Prezzo',
                            'price-type'     => 'Tipo di Prezzo',
                            'qty'            => 'Qtà',
                            'save-btn'       => 'Salva',
                            'update-title'   => 'Aggiorna Prezzo Gruppo Clienti',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Qtà Ordinata in Sospeso: :qty',
                    'pending-ordered-qty-info' => 'La quantità ordinata in sospeso sarà detratta dalla rispettiva fonte di inventario dopo la spedizione. In caso di annullamento, la quantità in sospeso sarà disponibile per la vendita.',
                    'title'                    => 'Inventario',
                ],

                'categories' => [
                    'title' => 'Categorie',
                ],

                'images' => [
                    'info'  => 'La risoluzione dell\'immagine dovrebbe essere di 609px X 560px',
                    'title' => 'Immagini',
                ],

                'videos' => [
                    'error' => 'Il video non può essere maggiore di :max kilobyte. Si prega di scegliere un file più piccolo.',
                    'info'  => 'La dimensione massima del video dovrebbe essere di :size',
                    'title' => 'Video',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Aggiungi prodotti correlati mentre sei in viaggio.',
                        'info'       => 'Oltre al prodotto che il cliente sta visualizzando, vengono presentati prodotti correlati.',
                        'title'      => 'Prodotti Correlati',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Aggiungi prodotti di vendita aggiuntiva mentre sei in movimento.',
                        'info'       => 'Al cliente vengono presentati prodotti upsell, che fungono da alternativa premium o di qualità superiore al prodotto che stanno visualizzando.',
                        'title'      => 'Prodotti Upsell',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Aggiungi prodotti di cross-selling mentre sei in movimento.',
                        'info'       => 'Accanto al carrello della spesa, troverai questi prodotti "acquisto d\'impulso" posizionati come cross-sell per completare gli articoli già aggiunti al tuo carrello.',
                        'title'      => 'Prodotti Cross-Sell',
                    ],

                    'add-btn'           => 'Aggiungi Prodotto',
                    'delete'            => 'Elimina',
                    'empty-info'        => 'Per aggiungere prodotti :type in un colpo solo.',
                    'empty-title'       => 'Aggiungi Prodotto',
                    'image-placeholder' => 'Immagine Prodotto',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Aggiungi opzione',
                            'empty-info'        => 'Per creare opzioni personalizzabili rapidamente.',
                            'empty-title'       => 'Aggiungi opzione',
                            'info'              => 'Questo personalizzerà il prodotto semplice.',
                            'title'             => 'Articolo personalizzabile',

                            'update-create' => [
                                'is-required'               => 'È richiesto',
                                'max-characters'            => 'Caratteri Massimi',
                                'name'                      => 'Titolo',
                                'no'                        => 'No',
                                'price'                     => 'Prezzo',
                                'save-btn'                  => 'Salva',
                                'supported-file-extensions' => 'Estensioni file supportate',
                                'title'                     => 'Opzione',
                                'type'                      => 'Tipo',
                                'yes'                       => 'Sì',
                            ],

                            'option' => [
                                'add-btn'     => 'Aggiungi opzione',
                                'delete'      => 'Elimina',
                                'delete-btn'  => 'Elimina',
                                'edit-btn'    => 'Modifica',
                                'empty-info'  => 'Per creare varie combinazioni di prodotto rapidamente.',
                                'empty-title' => 'Aggiungi opzione',

                                'types' => [
                                    'text' => [
                                        'title' => 'Testo',
                                    ],

                                    'textarea' => [
                                        'title' => 'Area di testo',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Casella di controllo',
                                    ],

                                    'radio' => [
                                        'title' => 'Radio',
                                    ],

                                    'select' => [
                                        'title' => 'Seleziona',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Selezione multipla',
                                    ],

                                    'date' => [
                                        'title' => 'Data',
                                    ],

                                    'datetime' => [
                                        'title' => 'Data e ora',
                                    ],

                                    'time' => [
                                        'title' => 'Ora',
                                    ],

                                    'file' => [
                                        'title' => 'File',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Etichetta',
                                        'price'    => 'Prezzo',
                                        'save-btn' => 'Salva',
                                        'title'    => 'Opzione',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Il prodotto è già associato a un prodotto configurabile, raggruppato o in bundle.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Aggiungi Variante',
                        'delete-btn'        => 'Elimina',
                        'edit-btn'          => 'Modifica',
                        'empty-info'        => 'Per creare varie combinazioni di prodotti rapidamente.',
                        'empty-title'       => 'Aggiungi Variante',
                        'image-placeholder' => 'Immagine Prodotto',
                        'info'              => 'I prodotti con variazioni dipendono da tutte le possibili combinazioni degli attributi.',
                        'qty'               => ':qty Qtà',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Varianti',

                        'create'  => [
                            'description'            => 'Descrizione',
                            'name'                   => 'Nome',
                            'save-btn'               => 'Aggiungi',
                            'title'                  => 'Aggiungi Variante',
                            'variant-already-exists' => 'Questa variante esiste già',
                        ],

                        'edit' => [
                            'disabled'        => 'Disabilitato',
                            'edit-info'       => 'Se desideri aggiornare le informazioni dettagliate del prodotto, vai alla',
                            'edit-link-title' => 'Pagina Dettagli Prodotto',
                            'enabled'         => 'Abilitato',
                            'images'          => 'Immagini',
                            'name'            => 'Nome',
                            'price'           => 'Prezzo',
                            'quantities'      => 'Quantità',
                            'save-btn'        => 'Salva',
                            'sku'             => 'SKU',
                            'status'          => 'Stato',
                            'title'           => 'Prodotto',
                            'weight'          => 'Peso',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Aggiungi immagini',
                            'apply-to-all-btn'    => 'Applica a tutti',
                            'apply-to-all-sku'    => 'Applica un prezzo a tutti gli SKU.',
                            'edit-inventories'    => 'Modifica inventari',
                            'edit-prices'         => 'Modifica prezzi',
                            'price'               => 'Prezzo',
                            'remove-images'       => 'Rimuovi immagini',
                            'remove-variants'     => 'Rimuovi varianti',
                            'select-action'       => 'Seleziona azione',
                            'select-variants'     => 'Seleziona varianti',
                            'edit-name'           => 'Modifica nome',
                            'name'                => 'Nome',
                            'edit-sku'            => 'Modifica SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Modifica peso',
                            'weight'              => 'Peso',
                            'edit-status'         => 'Modifica stato',
                            'status'              => 'Stato',
                            'apply-to-all-name'   => 'Applica un nome a tutte le varianti.',
                            'apply-to-all-weight' => 'Applica un peso a tutte le varianti.',
                            'apply-to-all-status' => 'Applica uno stato a tutte le varianti.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Aggiungi Prodotto',
                        'default-qty'       => 'Qtà Predefinita',
                        'delete'            => 'Elimina',
                        'empty-info'        => 'Per creare varie combinazioni di prodotti rapidamente.',
                        'empty-title'       => 'Aggiungi Prodotto',
                        'image-placeholder' => 'Immagine Prodotto',
                        'info'              => 'Un prodotto raggruppato è composto da articoli autonomi presentati come un set, consentendo variazioni o coordinamenti per stagione o tema. Ogni prodotto può essere acquistato singolarmente o come parte del gruppo.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Prodotti Raggruppati',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Aggiungi Opzione',
                        'empty-info'        => 'Per creare opzioni bundle rapidamente.',
                        'empty-title'       => 'Aggiungi Opzione',
                        'image-placeholder' => 'Immagine Prodotto',
                        'info'              => 'Un prodotto bundle è un pacchetto di articoli o servizi multipli venduti insieme a un prezzo speciale, offrendo valore e comodità ai clienti.',
                        'title'             => 'Elementi del Bundle',

                        'update-create' => [
                            'checkbox'    => 'Casella di Controllo',
                            'is-required' => 'Obbligatorio',
                            'multiselect' => 'Selezione Multipla',
                            'name'        => 'Titolo',
                            'no'          => 'No',
                            'radio'       => 'Radio',
                            'save-btn'    => 'Salva',
                            'select'      => 'Seleziona',
                            'title'       => 'Opzione',
                            'type'        => 'Tipo',
                            'yes'         => 'Sì',
                        ],

                        'option' => [
                            'add-btn'     => 'Aggiungi Prodotto',
                            'default-qty' => 'Qtà Predefinita',
                            'delete'      => 'Elimina',
                            'delete-btn'  => 'Elimina',
                            'edit-btn'    => 'Modifica',
                            'empty-info'  => 'Per creare varie combinazioni di prodotti rapidamente.',
                            'empty-title' => 'Aggiungi Prodotto',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Imposta il prodotto predefinito usando la casella di controllo',
                                    'title' => 'Casella di Controllo',
                                ],

                                'multiselect' => [
                                    'info'  => 'Imposta il prodotto predefinito usando il pulsante di selezione multipla',
                                    'title' => 'Selezione Multipla',
                                ],

                                'radio' => [
                                    'info'  => 'Imposta il prodotto predefinito usando il pulsante di opzione',
                                    'title' => 'Radio',
                                ],

                                'select' => [
                                    'info'  => 'Imposta il prodotto predefinito usando il pulsante di selezione',
                                    'title' => 'Selezione',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Disponibile Da',
                        'available-to'   => 'Disponibile Fino',
                        'location'       => 'Posizione',
                        'qty'            => 'Quantità',
                        'title'          => 'Tipo di Prenotazione',

                        'available-every-week' => [
                            'no'    => 'No',
                            'title' => 'Disponibile Ogni Settimana',
                            'yes'   => 'Sì',
                        ],

                        'appointment' => [
                            'break-duration'         => 'Durata della Pausa tra gli Slot (Minuti)',
                            'slot-duration'          => 'Durata dello Slot (Minuti)',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Stesso Slot per Tutti i Giorni',
                                'yes'   => 'Sì',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Aggiungi',
                            'break-duration'   => 'Durata della Pausa tra gli Slot (Minuti)',
                            'close'            => 'Chiudi',
                            'description'      => 'Informazioni sulla Prenotazione',
                            'description-info' => 'La durata verrà creata e visualizzata in base agli slot. Sarà unica per tutti gli slot e visibile nella vetrina del negozio.',
                            'edit'             => 'Modifica',
                            'many'             => 'Molte Prenotazioni per un Giorno',
                            'one'              => 'Una Prenotazione per Molti Giorni',
                            'open'             => 'Apri',
                            'slot-add'         => 'Aggiungi Slot',
                            'slot-duration'    => 'Durata dello Slot (Minuti)',
                            'slot-title'       => 'Durata del Tempo degli Slot',
                            'title'            => 'Predefinito',
                            'unavailable'      => 'Non Disponibile',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Aggiungi Slot',
                                    'close'      => 'Chiudi',
                                    'day'        => 'Giorno',
                                    'edit-title' => 'Modifica Slot',
                                    'friday'     => 'Venerdì',
                                    'from'       => 'Da',
                                    'from-day'   => 'Dal Giorno',
                                    'from-time'  => 'Dall\'Ora',
                                    'monday'     => 'Lunedì',
                                    'open'       => 'Apri',
                                    'saturday'   => 'Sabato',
                                    'save'       => 'Salva',
                                    'select'     => 'Seleziona',
                                    'status'     => 'Stato',
                                    'sunday'     => 'Domenica',
                                    'thursday'   => 'Giovedì',
                                    'to'         => 'A',
                                    'to-day'     => 'Al Giorno',
                                    'to-time'    => 'All\'Ora',
                                    'tuesday'    => 'Martedì',
                                    'wednesday'  => 'Mercoledì',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Aggiungi Biglietti',
                            'delete'             => 'Elimina',
                            'description'        => 'Descrizione',
                            'description-info'   => 'Non ci sono biglietti disponibili.',
                            'edit'               => 'Modifica',
                            'name'               => 'Nome',
                            'price'              => 'Prezzo',
                            'qty'                => 'Quantità',
                            'special-price'      => 'Prezzo Speciale',
                            'special-price-from' => 'Prezzo Speciale Da',
                            'special-price-to'   => 'Prezzo Speciale Fino',
                            'title'              => 'Biglietti',
                            'valid-from'         => 'Valido Da',
                            'valid-until'        => 'Valido Fino',

                            'modal'              => [
                                'edit' => 'Modifica Biglietti',
                                'save' => 'Salva',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Aggiungi Biglietti',
                            ],

                            'slots'   => [
                                'add'         => 'Aggiungi Slot',
                                'description' => 'Slot Disponibili con Durata del Tempo.',
                            ],
                        ],

                        'rental' => [
                            'daily'        => 'Base Giornaliera',
                            'daily-hourly' => 'Entrambi (Base Giornaliera e Oraria)',
                            'daily-price'  => 'Prezzo Giornaliero',
                            'hourly'       => 'Base Oraria',
                            'hourly-price' => 'Prezzo Orario',
                            'title'        => 'Tipo di Noleggio',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Stesso Slot per Tutti i Giorni',
                                'yes'   => 'Sì',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Aggiungi Slot',
                            'description-info' => 'La durata verrà creata e visualizzata in base agli slot. Sarà unica per tutti gli slot e visibile nella vetrina del negozio.',
                            'save'             => 'Salva',
                            'title'            => 'Durata del Tempo degli Slot',
                            'unavailable'      => 'Non Disponibile',

                            'action' => [
                                'add' => 'Aggiungi',
                            ],

                            'modal' => [
                                'slot' => [
                                    'friday'     => 'Venerdì',
                                    'from'       => 'Da',
                                    'monday'     => 'Lunedì',
                                    'saturday'   => 'Sabato',
                                    'sunday'     => 'Domenica',
                                    'thursday'   => 'Giovedì',
                                    'to'         => 'A',
                                    'tuesday'    => 'Martedì',
                                    'wednesday'  => 'Mercoledì',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Durata della Pausa tra gli Slot (Minuti)',
                            'guest-capacity'            => 'Capacità Ospiti',
                            'guest-limit'               => 'Limite Ospiti per Tavolo',
                            'prevent-scheduling-before' => 'Impedisci Pianificazione Prima',
                            'slot-duration'             => 'Durata dello Slot (Minuti)',

                            'charged-per' => [
                                'guest'  => 'Ospite',
                                'table'  => 'Tavolo',
                                'title'  => 'Addebitato Per',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'No',
                                'title' => 'Stesso Slot per Tutti i Giorni',
                                'yes'   => 'Sì',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Prenotazione Appuntamento',
                            'default'     => 'Prenotazione Predefinita',
                            'event'       => 'Prenotazione Evento',
                            'many'        => 'Molti',
                            'one'         => 'Uno',
                            'rental'      => 'Prenotazione Noleggio',
                            'table'       => 'Prenotazione Tavolo',
                            'title'       => 'Tipo',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Aggiungi Link',
                            'delete-btn'  => 'Elimina',
                            'edit-btn'    => 'Modifica',
                            'empty-info'  => 'Per creare link rapidamente.',
                            'empty-title' => 'Aggiungi Link',
                            'file'        => 'File : ',
                            'info'        => 'Il tipo di prodotto scaricabile consente di vendere prodotti digitali, come eBook, applicazioni software, musica, giochi, ecc.',
                            'sample-file' => 'File Esempio : ',
                            'sample-url'  => 'URL Esempio : ',
                            'title'       => 'Link Scaricabili',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'Download Consentiti',
                                'file'        => 'File',
                                'file-type'   => 'Tipo di File',
                                'name'        => 'Titolo',
                                'price'       => 'Prezzo',
                                'sample'      => 'Esempio',
                                'sample-type' => 'Tipo Esempio',
                                'save-btn'    => 'Salva',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Aggiungi Esempio',
                            'delete-btn'  => 'Elimina',
                            'edit-btn'    => 'Modifica',
                            'empty-info'  => 'Per creare campioni rapidamente.',
                            'empty-title' => 'Aggiungi Esempio',
                            'file'        => 'File : ',
                            'info'        => 'Il tipo di prodotto scaricabile consente di vendere prodotti digitali, come eBook, applicazioni software, musica, giochi, ecc.',
                            'title'       => 'Campioni Scaricabili',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'File',
                                'file-type' => 'Tipo di File',
                                'name'      => 'Titolo',
                                'save-btn'  => 'Salva',
                                'title'     => 'Link',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Prodotto creato con successo',
            'delete-failed'            => 'Eliminazione del prodotto non riuscita',
            'delete-success'           => 'Prodotto eliminato con successo',
            'product-type-not-allowed' => 'Non sei autorizzato a vendere prodotti di tipo :type',
            'saved-inventory-message'  => 'Prodotto salvato con successo',
            'update-success'           => 'Prodotto aggiornato con successo',

            'assign' => [
                'already-selling'     => 'Stai già vendendo questo prodotto',
                'back-btn'            => 'Indietro',
                'condition'           => 'Condizione',
                'create-success'      => 'Prodotto assegnato con successo al venditore',
                'description'         => 'Descrizione',
                'image-size'          => 'La risoluzione dell\'immagine deve essere 609px X 560px',
                'images'              => 'Immagini',
                'new'                 => 'Nuovo',
                'not-allowed'         => 'Non sei autorizzato ad assegnare questo prodotto',
                'old'                 => 'Vecchio',
                'price'               => 'Prezzo',
                'product-not-allowed' => 'Non ti è permesso vendere un prodotto di tipo :type',
                'quantities'          => 'Quantità',
                'save-btn'            => 'Salva',
                'title'               => 'Assegna Prodotto',
                'update-success'      => 'Prodotto assegnato aggiornato con successo',

                'product-details' => [
                    'active'            => 'Attivo',
                    'approved'          => 'Approvato',
                    'disable'           => 'Disabilita',
                    'disapproved'       => 'Non approvato',
                    'image-placeholder' => 'Immagine del prodotto',
                    'title'             => 'Dettagli del prodotto',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Recensioni Prodotti',

                'datagrid' => [
                    'approved'      => 'Approvato',
                    'customer'      => 'Cliente',
                    'date'          => 'Data',
                    'description'   => 'Descrizione',
                    'email'         => 'Email',
                    'pending'       => 'In attesa',
                    'product'       => 'Prodotto',
                    'rating'        => 'Valutazione',
                    'status'        => 'Stato',
                    'title'         => 'Titolo',
                    'unapproved'    => 'Non approvato',
                    'update-status' => 'Stato dell\'aggiornamento',
                ],
            ],

            'update-success' => 'Recensioni del prodotto aggiornate con successo',
            'delete-success' => 'Recensioni prodotto eliminate con successo.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Clienti',

                'datagrid' => [
                    'active'      => 'Attivo',
                    'customer'    => 'Cliente',
                    'email'       => 'Email',
                    'gender'      => 'Genere',
                    'group'       => 'Gruppo',
                    'inactive'    => 'Inattivo',
                    'order-count' => 'Numero Ordini',
                    'revenue'     => 'Ricavo',
                    'status'      => 'Stato',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Gestisci Profilo',
                'edit-btn' => 'Modifica Profilo',

                'general' => [
                    'email'      => 'Email',
                    'name'       => 'Nome',
                    'phone'      => 'Numero di Telefono',
                    'shop-slug'  => 'Slug del Negozio',
                    'shop-title' => 'Titolo del Negozio',
                    'title'      => 'Informazioni Generali',
                ],

                'about-store' => [
                    'title' => 'Informazioni sul Negozio',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descrizione',
                    'meta-keywords'    => 'Meta Parole Chiave',
                    'meta-title'       => 'Meta Titolo',
                    'title'            => 'Meta Descrizione',
                ],

                'policy' => [
                    'privacy'  => 'Politica sulla Privacy',
                    'return'   => 'Politica di Reso',
                    'shipping' => 'Politica di Spedizione',
                    'title'    => 'Politiche',
                ],

                'address' => [
                    'city'     => 'Città',
                    'country'  => 'Paese',
                    'postcode' => 'CAP',
                    'state'    => 'Stato',
                    'title'    => 'Indirizzo del Negozio',
                    'address'  => 'Indirizzo',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Link Social',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Importo Minimo Ordine',
                ],

                'google-analytics' => [
                    'id'    => 'ID Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Commissione Amministratore',
                    'admin-commission-value' => 'Commissione Amministratore :rate% dell\'importo totale fatturato',
                    'allowed-categories'     => 'Categorie Consentite',
                    'no-categories'          => 'Nessuna Categoria Disponibile',
                    'allowed-product-types'  => 'Tipi di Prodotto Consentiti',
                    'no-product-types'       => 'Nessun Tipo di Prodotto Disponibile',
                    'payment-methods'        => 'Metodi di Pagamento',
                    'no-payment-methods'     => 'Nessun Metodo di Pagamento Disponibile',
                    'shipping-methods'       => 'Metodi di Spedizione',
                    'no-shipping-methods'    => 'Nessun Metodo di Spedizione Disponibile',
                    'title'                  => 'Informazioni sul Negozio',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Carica un banner con rapporto 13:3, altezza 375 Area sicura 375x250 Centro su mobile',
                'delete-banner'       => 'Elimina Banner',
                'delete-logo'         => 'Elimina Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Carica un logo con rapporto 1:1',
                'save-btn'            => 'Salva Profilo',
                'title'               => 'Gestisci Profilo',
                'upload-new-banner'   => 'Carica Nuovo Banner',
                'upload-new-logo'     => 'Carica Nuovo Logo',

                'general' => [
                    'email'      => 'Email',
                    'name'       => 'Nome',
                    'phone'      => 'Numero di Telefono',
                    'shop-slug'  => 'Slug del Negozio',
                    'shop-title' => 'Titolo del Negozio',
                    'title'      => 'Informazioni Generali',
                ],

                'about-store' => [
                    'title' => 'Informazioni sul Negozio',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descrizione',
                    'meta-keywords'    => 'Meta Parole Chiave',
                    'meta-title'       => 'Meta Titolo',
                    'title'            => 'Meta Descrizione',
                ],

                'policy' => [
                    'privacy'  => 'Politica sulla Privacy',
                    'return'   => 'Politica di Reso',
                    'shipping' => 'Politica di Spedizione',
                    'title'    => 'Politiche',
                ],

                'address' => [
                    'city'           => 'Città',
                    'country'        => 'Paese',
                    'postcode'       => 'CAP',
                    'state'          => 'Stato',
                    'title'          => 'Indirizzo del Negozio',
                    'select-country' => 'Seleziona Paese',
                    'select-state'   => 'Seleziona Stato',
                    'street-address' => 'Indirizzo Stradale',
                    'address'        => 'Indirizzo',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Link Social',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Importo Minimo Ordine',
                ],

                'google-analytics' => [
                    'id'    => 'ID Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Il tuo profilo è stato aggiornato con successo',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Recensioni Venditore',

                'datagrid' => [
                    'approved'    => 'Approvato',
                    'customer'    => 'Cliente',
                    'date'        => 'Data',
                    'description' => 'Descrizione',
                    'disapproved' => 'Non approvato',
                    'email'       => 'Email',
                    'pending'     => 'In attesa',
                    'rating'      => 'Valutazione',
                    'status'      => 'Stato',
                    'title'       => 'Titolo',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Salva',
                    'title'              => 'Generale',
                    'unmatched-password' => 'La password attuale non corrisponde',
                    'update-success'     => 'Impostazioni generali aggiornate con successo',

                    'regional-setting' => [
                        'currency'      => 'Valuta',
                        'locale'        => 'Locale',
                        'select-locale' => 'Seleziona locale',
                        'title'         => 'Impostazioni regionali',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Conferma password',
                        'current-password' => 'Password attuale',
                        'new-password'     => 'Nuova password',
                        'title'            => 'Impostazioni password',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Crea Ruolo',
                    'title'      => 'Ruoli',

                    'datagrid' => [
                        'all'             => 'Tutti',
                        'custom'          => 'Personalizzato',
                        'delete'          => 'Elimina',
                        'edit'            => 'Modifica',
                        'id'              => 'ID',
                        'name'            => 'Nome',
                        'permission-type' => 'Tipo di Permesso',
                    ],
                ],

                'create' => [
                    'access-control' => 'Controllo Accessi',
                    'all'            => 'Tutti',
                    'back-btn'       => 'Indietro',
                    'custom'         => 'Personalizzato',
                    'description'    => 'Descrizione',
                    'general'        => 'Generale',
                    'name'           => 'Nome',
                    'permissions'    => 'Permessi',
                    'save-btn'       => 'Salva Ruolo',
                    'title'          => 'Crea Ruolo',
                ],

                'edit' => [
                    'access-control' => 'Controllo Accessi',
                    'all'            => 'Tutti',
                    'back-btn'       => 'Indietro',
                    'custom'         => 'Personalizzato',
                    'description'    => 'Descrizione',
                    'general'        => 'Generale',
                    'name'           => 'Nome',
                    'permissions'    => 'Permessi',
                    'save-btn'       => 'Salva Ruolo',
                    'title'          => 'Modifica Ruolo',
                ],

                'being-used'        => 'Il ruolo è utilizzato da alcuni venditori',
                'create-success'    => 'Ruolo creato con successo',
                'delete-failed'     => 'Eliminazione del ruolo fallita',
                'delete-success'    => 'Ruolo eliminato con successo',
                'last-delete-error' => 'È richiesto almeno un ruolo',
                'update-success'    => 'Ruolo aggiornato con successo',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Crea Utente',
                    'create-title'     => 'Crea Utente',
                    'edit-title'       => 'Modifica Utente',
                    'email'            => 'Email',
                    'name'             => 'Nome',
                    'phone-number'     => 'Numero di Telefono',
                    'role'             => 'Ruolo',
                    'save-btn'         => 'Salva Utente',
                    'select-role'      => 'Seleziona Ruolo',
                    'password'         => 'Password',
                    'confirm-password' => 'Conferma Password',
                    'status'           => 'Stato',
                    'title'            => 'Utenti',
                    'create-success'   => 'Utente creato con successo',
                    'update-success'   => 'Utente aggiornato con successo',
                    'delete-success'   => 'Utente eliminato con successo',
                    'delete-failed'    => 'Eliminazione utente non riuscita',

                    'datagrid' => [
                        'delete'     => 'Elimina',
                        'edit'       => 'Modifica',
                        'email'      => 'Email',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Nome',
                        'permission' => 'Permesso',
                        'phone'      => 'Telefono',

                        'status' => [
                            'title' => 'Stato',

                            'options' => [
                                'active'    => 'Attivo',
                                'suspended' => 'Sospeso',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index'  => [
                    'create-btn' => 'Crea fonte inventario',
                    'title'      => 'Sorgenti di Inventario',

                    'datagrid' => [
                        'active'   => 'Attivo',
                        'code'     => 'Codice',
                        'delete'   => 'Elimina',
                        'edit'     => 'Modifica',
                        'id'       => 'ID',
                        'inactive' => 'Inattivo',
                        'name'     => 'Nome',
                        'priority' => 'Priorità',
                        'status'   => 'Stato',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Aggiungi Sorgente di Inventario',
                    'address'        => 'Indirizzo della Sorgente',
                    'back-btn'       => 'Indietro',
                    'city'           => 'Città',
                    'code'           => 'Codice',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informazioni di Contatto',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Numero di Contatto',
                    'country'        => 'Paese',
                    'description'    => 'Descrizione',
                    'general'        => 'Generale',
                    'latitude'       => 'Latitudine',
                    'longitude'      => 'Longitudine',
                    'name'           => 'Nome',
                    'postcode'       => 'CAP',
                    'priority'       => 'Priorità',
                    'save-btn'       => 'Salva Sorgenti di Inventario',
                    'select-country' => 'Seleziona Paese',
                    'select-state'   => 'Seleziona Stato',
                    'settings'       => 'Impostazioni',
                    'state'          => 'Stato',
                    'status'         => 'Stato',
                    'street'         => 'Via',
                    'title'          => 'Sorgenti di Inventario',
                ],

                'edit' => [
                    'back-btn'       => 'Indietro',
                    'city'           => 'Città',
                    'code'           => 'Codice',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informazioni di Contatto',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Numero di Contatto',
                    'country'        => 'Paese',
                    'description'    => 'Descrizione',
                    'general'        => 'Generale',
                    'latitude'       => 'Latitudine',
                    'longitude'      => 'Longitudine',
                    'name'           => 'Nome',
                    'postcode'       => 'CAP',
                    'priority'       => 'Priorità',
                    'save-btn'       => 'Salva Sorgenti di Inventario',
                    'select-country' => 'Seleziona Paese',
                    'select-state'   => 'Seleziona Stato',
                    'settings'       => 'Impostazioni',
                    'source-address' => 'Indirizzo della Sorgente',
                    'state'          => 'Stato',
                    'status'         => 'Stato',
                    'street'         => 'Via',
                    'title'          => 'Modifica Sorgenti di Inventario',
                ],

                'create-success'    => 'Sorgente di Inventario Creata con Successo',
                'delete-failed'     => 'Eliminazione delle Sorgenti di Inventario Fallita',
                'delete-success'    => 'Sorgenti di Inventario Eliminate con Successo',
                'last-delete-error' => 'Impossibile Eliminare l\'Ultima Sorgente di Inventario',
                'update-success'    => 'Sorgenti di Inventario Aggiornate con Successo',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Amministratore',
                'blocked-message'     => 'Sei stato bloccato dall\'amministratore',
                'message-failed'      => 'Invio del messaggio fallito',
                'message-placeholder' => 'Scrivi il tuo messaggio qui...',
                'message-sent'        => 'Messaggio inviato con successo',
                'no-message'          => 'Nessun messaggio trovato',
                'search-message'      => 'Cerca messaggio...',
                'title'               => 'Comunicazione',

                'filters' => [
                    'all-messages'      => 'Tutti i messaggi',
                    'prev-fifteen-days' => 'Ultimi 15 giorni',
                    'prev-seven-days'   => 'Ultimi 7 giorni',
                    'prev-six-months'   => 'Ultimi 6 mesi',
                    'prev-thirty-days'  => 'Ultimi 30 giorni',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Carrelli Abbandonati',
                    'abandoned-products'            => 'Prodotti Abbandonati',
                    'abandoned-rate'                => 'Tasso di Abbandono',
                    'abandoned-revenue'             => 'Ricavo Abbandonato',
                    'added-to-cart'                 => 'Aggiunto al Carrello',
                    'added-to-cart-info'            => 'Solo :progress visitatori hanno aggiunto prodotti al carrello',
                    'all-channels'                  => 'Tutti i Canali',
                    'average-order-value-over-time' => 'Valore Medio Ordine Nel Tempo',
                    'average-sales'                 => 'Valore Medio Ordine',
                    'commission'                    => 'Commissione',
                    'commission-over-time'          => 'Commissione nel tempo',
                    'count'                         => 'Conteggio',
                    'end-date'                      => 'Data di Fine',
                    'id'                            => 'Id',
                    'interval'                      => 'Intervallo',
                    'name'                          => 'Nome',
                    'orders'                        => 'Ordini',
                    'orders-over-time'              => 'Ordini Nel Tempo',
                    'payment-method'                => 'Metodo di Pagamento',
                    'product-views'                 => 'Visualizzazioni Prodotto',
                    'product-views-info'            => 'Solo :progress visitatori hanno visualizzato i prodotti',
                    'purchase-funnel'               => 'Tunnel di Acquisto',
                    'purchased'                     => 'Acquistati',
                    'purchased-info'                => 'Solo :progress visitatori hanno effettuato acquisti',
                    'refunds'                       => 'Rimborsi',
                    'refunds-over-time'             => 'Rimborsi Nel Tempo',
                    'sales-over-time'               => 'Vendite Nel Tempo',
                    'start-date'                    => 'Data di Inizio',
                    'tax-collected'                 => 'Tasse Riscosse',
                    'tax-collected-over-time'       => 'Tasse Riscosse Nel Tempo',
                    'title'                         => 'Vendite',
                    'top-payment-methods'           => 'Principali Metodi di Pagamento',
                    'top-tax-categories'            => 'Principali Categorie Fiscali',
                    'total'                         => 'Totale',
                    'total-commission-paid'         => 'Totale commissioni pagate',
                    'total-orders'                  => 'Totale Ordini',
                    'total-sales'                   => 'Totale Vendite',
                    'total-visits'                  => 'Totale visite',
                    'total-visits-info'             => 'Totale visitatori sullo store',
                    'view-details'                  => 'Visualizza Dettagli',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Tutti i Canali',
                    'count'                       => 'Conteggio',
                    'customers'                   => 'Clienti',
                    'customers-over-time'         => 'Clienti Nel Tempo',
                    'customers-traffic'           => 'Traffico Clienti',
                    'customers-with-most-orders'  => 'Clienti Con Più Ordini',
                    'customers-with-most-reviews' => 'Clienti Con Più Recensioni',
                    'customers-with-most-sales'   => 'Clienti Con Più Vendite',
                    'email'                       => 'Email',
                    'end-date'                    => 'Data di Fine',
                    'id'                          => 'Id',
                    'interval'                    => 'Intervallo',
                    'name'                        => 'Nome',
                    'orders'                      => 'Ordini',
                    'reviews'                     => 'Recensioni',
                    'start-date'                  => 'Data di Inizio',
                    'title'                       => 'Clienti',
                    'top-customer-groups'         => 'Principali Gruppi di Clienti',
                    'total'                       => 'Totale',
                    'total-customers'             => 'Totale Clienti',
                    'total-visitors'              => 'Totale Visitatori',
                    'traffic-over-week'           => 'Traffico Settimanale',
                    'unique-visitors'             => 'Visitatori Unici',
                    'view-details'                => 'Visualizza Dettagli',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Tutti i Canali',
                    'channel'                          => 'Canale',
                    'end-date'                         => 'Data di Fine',
                    'id'                               => 'Id',
                    'interval'                         => 'Intervallo',
                    'locale'                           => 'Località',
                    'name'                             => 'Nome',
                    'orders'                           => 'Ordini',
                    'price'                            => 'Prezzo',
                    'products-added-over-time'         => 'Prodotti Aggiunti Nel Tempo',
                    'products-with-most-reviews'       => 'Prodotti Con Più Recensioni',
                    'products-with-most-visits'        => 'Prodotti Con Più Visite',
                    'quantities'                       => 'Quantità',
                    'quantities-sold-over-time'        => 'Quantità Vendute Nel Tempo',
                    'revenue'                          => 'Ricavo',
                    'reviews'                          => 'Recensioni',
                    'start-date'                       => 'Data di Inizio',
                    'title'                            => 'Prodotti',
                    'top-selling-products-by-quantity' => 'Prodotti Più Venduti per Quantità',
                    'top-selling-products-by-revenue'  => 'Prodotti Più Venduti per Ricavo',
                    'total'                            => 'Totale',
                    'total-products-added-to-wishlist' => 'Totale Prodotti Aggiunti alla Lista dei Desideri',
                    'total-sold-quantities'            => 'Totale Quantità Vendute',
                    'view-details'                     => 'Visualizza Dettagli',
                    'visits'                           => 'Visite',
                ],
            ],

            'view' => [
                'all-channels'  => 'Tutti i Canali',
                'day'           => 'Giorno',
                'end-date'      => 'Data di Fine',
                'export-csv'    => 'Esporta CSV',
                'export-xls'    => 'Esporta XLS',
                'month'         => 'Mese',
                'not-available' => 'Nessun Record Disponibile.',
                'start-date'    => 'Data di Inizio',
                'year'          => 'Anno',
            ],

            'empty' => [
                'info'  => 'Nessun dato disponibile per l\'intervallo selezionato',
                'title' => 'Nessun Dato Disponibile',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Disabilitato',
                'enabled'   => 'Abilitato',
                'info'      => 'Crea, gestisci e amplia il tuo negozio online con le estensioni eCommerce personalizzabili di Bagisto.',
                'no-result' => 'Nessuna estensione disponibile.',
                'title'     => 'Estensioni',

                'filters' => [
                    'all-extensions' => 'Tutte le estensioni',
                    'bulk_upload'    => 'Caricamento massivo',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'Marketplace',
                    'payment'        => 'Pagamento',
                    'pos'            => 'POS',
                    'shipping'       => 'Spedizione',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Logo del venditore',
                'switch-to-store' => 'Passa a gestire il negozio',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'L\'importo minimo dell\'ordine per :shop_title è',
                'product-not-available' => 'Il prodotto non è disponibile',
                'sold-by'               => 'Venduto da',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Pagamento in giorni*',
                'deals-in'            => 'Affari in',
                'featured-seller'     => 'I nostri venditori in evidenza',
                'online-business'     => 'Attività online',
                'reviews'             => ':count Recensioni:',
                'seller-community'    => 'Comunità dei venditori',
                'serviceable-pincode' => 'Codice PIN servibile',
                'start-selling'       => 'Inizia a vendere con un vasto pubblico in tutto il mondo, 24 ore su 24.',
                'step'                => 'Passo :count',
                'visit-shop'          => 'Visita il negozio',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Aggiungi al Carrello',
            'delivery-info' => 'Le informazioni sulla consegna sono qui',
            'hide'          => 'Nascondi',
            'more-info'     => 'Ulteriori Informazioni',
            'seller-count'  => ':count altri venditori stanno vendendo lo stesso prodotto',
            'seller-info'   => 'Informazioni sul Venditore',
            'sold-by'       => 'Venduto Da',
            'top-selling'   => 'Miglior vendita',

            'flag' => [
                'alert'              => 'Avviso',
                'already-reported'   => 'Hai già segnalato questo prodotto',
                'create-success'     => 'Prodotto segnalato con successo',
                'guest-alert'        => 'Devi effettuare il login per segnalare questo prodotto',
                'not-allowed'        => 'Non puoi segnalare questo prodotto senza aver effettuato un ordine',
                'other-reason'       => 'Altro motivo',
                'reason'             => 'Motivo',
                'reason-placeholder' => 'Si prega di specificare il motivo',
                'report-product'     => 'Segnala prodotto',
                'select-reason'      => 'Seleziona il motivo',
                'submit-btn'         => 'Invia',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Il venditore non è ancora approvato',
                'products-count'  => 'Prodotti (:count)',
                'reviews-count'   => 'Recensioni (:count)',
                'search-text'     => 'Cerca Prodotti',

                'about' => [
                    'title'           => 'Informazioni',
                    'about-us'        => 'Chi siamo',
                    'shipping-policy' => 'Politica di spedizione',
                    'privacy-policy'  => 'Politica sulla privacy',
                    'return-policy'   => 'Politica di reso',
                ],

                'contact-form' => [
                    'title'          => 'Contatto',
                    'name'           => 'Nome',
                    'email'          => 'Email',
                    'subject'        => 'Oggetto',
                    'query'          => 'Richiesta',
                    'submit-btn'     => 'Invia',
                    'create-success' => 'La tua richiesta è stata inviata con successo',
                ],

                'share' => [
                    'title'     => 'Condividi',
                    'share-on'  => 'Condividi su',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Avviso',
                    'already-reported'   => 'Hai già segnalato questo venditore',
                    'create-success'     => 'Venditore segnalato con successo',
                    'guest-alert'        => 'Devi accedere per segnalare il venditore',
                    'not-allowed'        => 'Non puoi segnalare questo venditore senza aver effettuato un ordine',
                    'other-reason'       => 'Altro motivo',
                    'reason'             => 'Motivo',
                    'reason-placeholder' => 'Si prega di specificare il motivo',
                    'select-reason'      => 'Seleziona motivo',
                    'submit-btn'         => 'Invia',
                    'title'              => 'Segnala problema',
                ],

                'reviews' => [
                    'alert'            => 'Avviso',
                    'already-reviewed' => 'Hai già recensito questo venditore',
                    'comment'          => 'Commento',
                    'create-success'   => 'Venditore recensito con successo',
                    'customer-review'  => ':count Recensione cliente',
                    'customer-reviews' => 'Recensioni dei clienti',
                    'guest-alert'      => 'Devi accedere per segnalare il venditore',
                    'rating'           => 'Valutazione',
                    'review-by'        => 'Recensione di',
                    'submit-btn'       => 'Invia',
                    'title'            => 'Titolo',
                    'view-all'         => 'Visualizza tutte le recensioni',
                    'write-review'     => 'Scrivi una recensione',
                ],

                'products' => [
                    'no-result' => 'Nessun prodotto disponibile qui',
                    'show'      => 'Mostra',

                    'sort-by' => [
                        'title' => 'Ordina per',

                        'options' => [
                            'cheapest-first'  => 'Più economici prima',
                            'expensive-first' => 'Più costosi prima',
                            'from-a-z'        => 'Da A a Z',
                            'from-z-a'        => 'Da Z a A',
                            'latest-first'    => 'I più recenti prima',
                            'oldest-first'    => 'I più vecchi prima',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Cancella tutto',
                        'filter'      => 'Filtro',
                        'filters'     => 'Filtri:',
                        'price-range' => 'Fascia di prezzo',
                        'sort'        => 'Ordina',
                    ],
                ],
            ],
        ],
    ],
];
