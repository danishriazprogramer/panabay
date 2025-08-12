<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marché',
                    'info'  => 'Gérer le marché',

                    'module-info' => [
                        'title'       => 'Informations sur le module',
                        'info'        => 'Fournit des informations relatives à la version de l’application.',
                        'app-version' => 'Version de l’application : v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Pourcentage de commission administrateur',
                        'description'                  => 'Gérez les paramètres généraux du marché, tels que le statut, la commission, etc.',
                        'lines-in-street-address'      => 'Lignes dans l’adresse de rue',
                        'lines-in-street-address-info' => 'Définissez le nombre de lignes dans l’adresse de rue. Par défaut, une ligne.',
                        'status'                       => 'Statut',
                        'title'                        => 'Général',
                    ],

                    'product' => [
                        'approval-required'         => 'Approbation requise',
                        'description'               => 'Gérez les paramètres de produit du marché tels que les approbations, les drapeaux, etc.',
                        'enable-flag'               => 'Activer le drapeau',
                        'seller-can-assign-product' => 'Le vendeur peut attribuer un produit',
                        'seller-can-create-product' => 'Le vendeur peut créer un produit',
                        'show-progress-bar'         => 'Afficher la barre de progression',
                        'title'                     => 'Produit',
                    ],

                    'seller' => [
                        'approval-required'           => 'Approbation requise',
                        'can-cancel-order'            => 'Peut annuler la commande',
                        'can-create-invoice'          => 'Peut créer une facture',
                        'can-create-shipment'         => 'Peut créer un envoi',
                        'description'                 => 'Gérez les paramètres du vendeur du marché comme l’approbation, les drapeaux, etc.',
                        'enable-flag'                 => 'Activer le drapeau',
                        'enable-minimum-order-amount' => 'Activer le montant minimum de commande',
                        'enable-seller-flag'          => 'Activer le drapeau du vendeur',
                        'red-flag-limit'              => 'Limite de drapeau rouge',
                        'red-flag-limit-info'         => 'Si le vendeur dépasse cette limite, le drapeau rouge apparaîtra sur le profil du vendeur.',
                        'show-red-flag'               => 'Afficher le drapeau rouge sur le profil si la limite est dépassée',
                        'title'                       => 'Vendeur',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Nombre Limite',
                        'description' => 'Gérez les vendeurs en vedette du marché.',
                        'status'      => 'Statut',
                        'title'       => 'Vendeurs en Vedette',

                        'popularity-criteria' => [
                            'all'              => 'Tous',
                            'maximum-orders'   => 'Commandes Maximales',
                            'maximum-products' => 'Produits Maximaux',
                            'maximum-rating'   => 'Note maximale',
                            'maximum-sale'     => 'Vente Maximale',
                            'title'            => 'Critères de Popularité',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Titre du bouton de la bannière',
                        'banner-description'  => 'Description de la bannière',
                        'banner-image'        => 'Image de la bannière',
                        'banner-title'        => 'Titre de la bannière',
                        'business-hour'       => 'Heures d\'ouverture',
                        'community-count'     => 'Nombre de communauté',
                        'description'         => 'Personnalisez la page d\'accueil du marché en ajoutant des icônes, une bannière et des description pour un look frais.',
                        'feature-box1-desc'   => 'Description de la boîte de fonctionnalité 1',
                        'feature-box1-icon'   => 'Icône de la boîte de fonctionnalité 1',
                        'feature-box1-title'  => 'Titre de la boîte de fonctionnalité 1',
                        'feature-box2-desc'   => 'Description de la boîte de fonctionnalité 2',
                        'feature-box2-icon'   => 'Icône de la boîte de fonctionnalité 2',
                        'feature-box2-title'  => 'Titre de la boîte de fonctionnalité 2',
                        'feature-box3-desc'   => 'Description de la boîte de fonctionnalité 3',
                        'feature-box3-icon'   => 'Icône de la boîte de fonctionnalité 3',
                        'feature-box3-title'  => 'Titre de la boîte de fonctionnalité 3',
                        'feature-box4-desc'   => 'Description de la boîte de fonctionnalité 4',
                        'feature-box4-icon'   => 'Icône de la boîte de fonctionnalité 4',
                        'feature-box4-title'  => 'Titre de la boîte de fonctionnalité 4',
                        'feature-description' => 'Description de la fonctionnalité',
                        'feature-image'       => 'Image de la fonctionnalité',
                        'feature-title'       => 'Titre de la fonctionnalité',
                        'journey-description' => 'Description du parcours',
                        'journey-image'       => 'Image du parcours',
                        'journey-step1-desc'  => 'Description de l\'étape 1 du parcours',
                        'journey-step1-icon'  => 'Icône de l\'étape 1 du parcours',
                        'journey-step1-title' => 'Titre de l\'étape 1 du parcours',
                        'journey-step2-desc'  => 'Description de l\'étape 2 du parcours',
                        'journey-step2-icon'  => 'Icône de l\'étape 2 du parcours',
                        'journey-step2-title' => 'Titre de l\'étape 2 du parcours',
                        'journey-step3-desc'  => 'Description de l\'étape 3 du parcours',
                        'journey-step3-icon'  => 'Icône de l\'étape 3 du parcours',
                        'journey-step3-title' => 'Titre de l\'étape 3 du parcours',
                        'journey-step4-desc'  => 'Description de l\'étape 4 du parcours',
                        'journey-step4-icon'  => 'Icône de l\'étape 4 du parcours',
                        'journey-step4-title' => 'Titre de l\'étape 4 du parcours',
                        'journey-step5-desc'  => 'Description de l\'étape 5 du parcours',
                        'journey-step5-icon'  => 'Icône de l\'étape 5 du parcours',
                        'journey-step5-title' => 'Titre de l\'étape 5 du parcours',
                        'journey-title'       => 'Titre du parcours',
                        'payment-duration'    => 'Durée de paiement',
                        'serviceable-pincode' => 'Code postal desservi',
                        'title'               => 'Page d\'atterrissage',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Attribuer un produit',
            'communications'    => 'Communications',
            'create'            => 'Créer',
            'delete'            => 'Supprimer',
            'edit'              => 'Modifier',
            'flag-reasons'      => 'Raisons de signalement',
            'inventory-sources' => 'Sources d’inventaire',
            'orders'            => 'Commandes',
            'pay'               => 'Payer',
            'payment-request'   => 'Demande de paiement',
            'product-reviews'   => 'Avis sur les produits',
            'products'          => 'Produits',
            'reviews'           => 'Avis des vendeurs',
            'seller-categories' => 'Catégories des vendeurs',
            'sellers'           => 'Vendeurs',
            'title'             => 'Marché',
            'transactions'      => 'Transactions',
            'view'              => 'Voir',
        ],

        'menu' => [
            'communications'    => 'Communications',
            'flag-reasons'      => 'Raisons de Signalement',
            'inventory-sources' => 'Sources d’inventaire',
            'orders'            => 'Commandes',
            'payment-requests'  => 'Demandes de paiement',
            'product-reviews'   => 'Avis sur le produit',
            'products'          => 'Produits',
            'seller-categories' => 'Catégories de vendeurs',
            'seller-reviews'    => 'Avis sur le vendeur',
            'sellers'           => 'Vendeurs',
            'title'             => 'Place de marché',
            'transactions'      => 'Transactions',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Ajouter des vendeurs',
                'delete-failed'      => 'Échec de la suppression du vendeur !',
                'delete-success'     => 'Vendeur supprimé avec succès.',
                'incomplete-profile' => 'Le vendeur a un profil incomplet !',
                'login-message'      => 'Vous êtes connecté en tant que :seller_name',
                'pending-orders'     => 'Le vendeur a des commandes en attente',
                'title'              => 'Vendeurs',
                'update-success'     => 'Vendeur mis à jour avec succès !',

                'datagrid' => [
                    'add-product'     => 'Ajouter',
                    'approved'        => 'Approuvé',
                    'assign-product'  => 'Attribuer un produit',
                    'created-at'      => 'Créé le',
                    'delete'          => 'Supprimer',
                    'disapproved'     => 'Désapprouvé',
                    'edit'            => 'Modifier',
                    'email'           => 'E-mail',
                    'flags'           => 'Drapeaux',
                    'id'              => 'ID',
                    'login-as-seller' => 'Se connecter en tant que vendeur',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Nom du vendeur',
                    'shop-url'        => 'URL du magasin',
                    'status'          => 'Statut',
                    'suspended'       => 'Suspendu',
                    'total-flags'     => 'Nombre total de drapeaux : :count',
                    'update-status'   => 'Mettre à jour le statut',
                ],

                'create'  => [
                    'address'        => 'Adresse',
                    'city'           => 'Ville',
                    'country'        => 'Pays',
                    'email'          => 'E-mail',
                    'name'           => 'Nom',
                    'phone'          => 'Numéro de téléphone',
                    'postcode'       => 'Code postal',
                    'save-btn'       => 'Enregistrer',
                    'select'         => 'Sélectionner',
                    'shop-title'     => 'Titre du magasin',
                    'shop-url'       => 'URL du magasin',
                    'state'          => 'État',
                    'street-address' => 'Adresse de rue',
                    'success'        => 'Vendeur créé avec succès.',
                    'title'          => 'Créer un vendeur',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Drapeaux du vendeur',

                    'datagrid' => [
                        'id'             => 'Identifiant',
                        'customer-name'  => 'Nom du client',
                        'customer-email' => 'Email du client',
                        'date'           => 'Date',
                        'reason'         => 'Raison',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Retour',
                'image-placeholder' => 'Image du produit',
                'no-result'         => 'Aucun résultat trouvé !',
                'sku'               => 'SKU - :sku',
                'title'             => 'Rechercher des produits',
            ],

            'assign-product' => [
                'already-selling'     => 'Le vendeur vend déjà ce produit',
                'assign-successfully' => 'Produit attribué avec succès au vendeur.',
                'back-btn'            => 'Retour',
                'condition'           => 'Condition',
                'description'         => 'Description',
                'new'                 => 'Nouveau',
                'old'                 => 'Ancien',
                'price'               => 'Prix',
                'product-not-allowed' => 'Le vendeur n\'est pas autorisé à vendre des produits de type :type.',
                'quantities'          => 'Quantités',
                'save-btn'            => 'Sauvegarder',
                'select-condition'    => 'Sélectionnez la condition',
                'title'               => 'Attribuer un produit',

                'seller-details' => [
                    'additional-info' => 'Informations supplémentaires',
                    'approved'        => 'Approuvé',
                    'disapproved'     => 'Désapprouvé',
                    'no-of-products'  => 'Nombre de produits',
                    'status'          => 'Statut',
                    'suspended'       => 'Suspendu',
                    'title'           => 'Détails du vendeur',
                ],

                'product-details' => [
                    'active'            => 'Actif',
                    'disable'           => 'Désactiver',
                    'title'             => 'Détails du produit',
                    'image-placeholder' => 'Image du produit',
                ],

                'images' => [
                    'info'  => "La résolution de l'image doit être de l'ordre de 609x560 pixels.",
                    'title' => 'Images',
                ],

                'videos' => [
                    'error' => 'La vidéo ne peut pas dépasser :max kilo-octets. Veuillez choisir un fichier plus petit.',
                    'info'  => 'La taille maximale de la vidéo doit être d\'environ :size',
                    'title' => 'Vidéos',
                ],

                'configurable' => [
                    'delete-btn'        => 'Supprimer',
                    'edit-btn'          => 'Modifier',
                    'image-placeholder' => 'Image du produit',
                    'qty'               => 'Qté - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Variations',

                    'edit' => [
                        'images'     => 'Images',
                        'price'      => 'Prix',
                        'quantities' => 'Quantités',
                        'save-btn'   => 'Enregistrer',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Ajouter un lien',
                        'delete-btn'  => 'Supprimer',
                        'edit-btn'    => 'Modifier',
                        'empty-info'  => 'Pour créer un lien en déplacement.',
                        'empty-title' => 'Ajouter un lien',
                        'file'        => 'Fichier : ',
                        'info'        => 'Le type de produit téléchargeable permet de vendre des produits numériques, tels que des livres électroniques, des applications logicielles, de la musique, des jeux, etc.',
                        'sample-file' => 'Fichier d\'exemple : ',
                        'sample-url'  => 'URL d\'exemple : ',
                        'title'       => 'Liens téléchargeables',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Téléchargement autorisé',
                            'file'        => 'Fichier',
                            'file-type'   => 'Type de fichier',
                            'name'        => 'Titre',
                            'price'       => 'Prix',
                            'sample'      => 'Échantillon',
                            'sample-type' => 'Type d\'échantillon',
                            'save-btn'    => 'Enregistrer',
                            'title'       => 'Lien',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Ajouter un échantillon',
                        'delete-btn'  => 'Supprimer',
                        'edit-btn'    => 'Modifier',
                        'empty-info'  => 'Pour créer un échantillon en déplacement.',
                        'empty-title' => 'Ajouter un échantillon',
                        'file'        => 'Fichier : ',
                        'info'        => 'Le type de produit téléchargeable permet de vendre des produits numériques, tels que des livres électroniques, des applications logicielles, de la musique, des jeux, etc.',
                        'title'       => 'Échantillons téléchargeables',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'        => 'Fichier',
                            'file-type'   => 'Type de fichier',
                            'name'        => 'Titre',
                            'save-btn'    => 'Enregistrer',
                            'title'       => 'Lien',
                            'url'         => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Retour',
                'suspended'      => 'Suspendu',
                'title'          => 'Modifier le vendeur',
                'update-btn'     => 'Mettre à jour le vendeur',
                'update-success' => 'Vendeur mis à jour avec succès.',

                'shop' => [
                    'address'          => 'Adresse',
                    'city'             => 'Ville',
                    'country'          => 'Pays',
                    'description'      => 'Description',
                    'email'            => 'E-mail',
                    'name'             => 'Nom',
                    'phone-number'     => 'Numéro de téléphone',
                    'postcode'         => 'Code postal',
                    'select'           => 'Sélectionner',
                    'shop-title'       => 'Titre du magasin',
                    'state'            => 'État',
                    'street-address'   => 'Adresse de rue',
                    'title'            => 'Détails du magasin',
                    'url'              => 'URL du magasin',
                ],

                'profile' => [
                    'banner'       => 'Bannière du profil',
                    'banner-size'  => 'La taille de la bannière doit être de 300px X 200px',
                    'logo'         => 'Logo du profil',
                    'logo-size'    => 'La taille du logo doit être de 125px X 125px',
                    'social-links' => ':name Lien',
                    'title'        => 'Détails du profil',
                ],

                'allowed-product' => [
                    'title'  => 'Produit autorisé',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Montant minimum de la commande',
                ],

                'google-analytics-id' => [
                    'title'  => 'ID Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Pourcentage',
                    'status'     => 'Statut',
                    'title'      => 'Commission du vendeur',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Description',
                    'meta-keyword'     => 'Meta Keyword',
                    'meta-title'       => 'Meta Title',
                    'title'            => 'Informations méta',
                ],

                'policy' => [
                    'privacy'  => 'Politique de confidentialité',
                    'return'   => 'Politique de retour',
                    'shipping' => 'Politique d\'expédition',
                    'title'    => 'Politiques',
                ],

                'channels' => [
                    'title' => 'Canal',
                ],

                'users' => [
                    'email' => 'Email',
                    'id'    => 'ID',
                    'name'  => 'Nom',
                    'phone' => 'Téléphone',
                    'title' => 'Utilisateurs',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Ajouter des produits',
                'delete-success' => 'Produit supprimé avec succès.',
                'title'          => 'Produits',
                'update-success' => 'Produit mis à jour avec succès.',

                'datagrid' => [
                    'approved'       => 'Approuvé',
                    'delete'         => 'Supprimer',
                    'disapproved'    => 'Désapprouvé',
                    'flags'          => 'Drapeaux',
                    'id'             => 'ID',
                    'is-owner'       => 'Est le propriétaire',
                    'no'             => 'Non',
                    'out-of-stock'   => 'En rupture de stock',
                    'price'          => 'Prix',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Nom du produit',
                    'product-number' => 'Numéro de produit',
                    'product-type'   => 'Type de produit',
                    'quantity'       => 'Quantité',
                    'seller-name'    => 'Nom du vendeur',
                    'sku'            => 'SKU',
                    'status'         => 'Statut',
                    'total-flags'    => 'Total des drapeaux : :count',
                    'total-quantity' => ':quantity Disponible',
                    'update-status'  => 'Mettre à jour le statut',
                    'yes'            => 'Oui',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Drapeaux du Produit',

                    'datagrid' => [
                        'customer-email' => 'Email du Client',
                        'customer-name'  => 'Nom du Client',
                        'date'           => 'Date',
                        'id'             => 'Identifiant',
                        'reason'         => 'Raison',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Détails de l\'avis',
                'title'          => 'Avis sur les produits',

                'datagrid' => [
                    'approved'      => 'Approuvé',
                    'comment'       => 'Commentaire',
                    'customer-name' => 'Nom du client',
                    'date'          => 'Date',
                    'disapproved'   => 'Désapprouvé',
                    'id'            => 'ID',
                    'images'        => 'Images',
                    'pending'       => 'En attente',
                    'product'       => 'Produit',
                    'product-name'  => 'Nom du produit',
                    'rating'        => 'Évaluation',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Titre de la boutique',
                    'status'        => 'Statut',
                    'title'         => 'Titre',
                    'update-status' => 'État de la mise à jour',
                    'view'          => 'Voir',
                ],
            ],

            'update-success' => 'Les avis sur le produit ont été mis à jour avec succès',
            'delete-success' => 'Les avis sur les produits ont été supprimés avec succès.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Avis sur le vendeur',

                'datagrid' => [
                    'approved'            => 'Approuvé',
                    'comment'             => 'Commentaire',
                    'customer-name'       => 'Nom du client',
                    'date'                => 'Date',
                    'delete'              => 'Supprimer',
                    'disapproved'         => 'Désapprouvé',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Avis sur le vendeur supprimés avec succès.',
                    'mass-update-success' => 'Avis sur le vendeur mis à jour avec succès.',
                    'pending'             => 'En attente',
                    'rating'              => 'Note',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Titre de l\'avis',
                    'seller-name'         => 'Nom du vendeur',
                    'shop-title'          => 'Titre de la boutique',
                    'status'              => 'Statut',
                    'update-status'       => 'Mettre à jour le statut',
                ],
            ],

            'delete-success' => 'Avis sur le vendeur supprimé avec succès.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Commandes',

                'datagrid' => [
                    'canceled'        => 'Annulé',
                    'closed'          => 'Fermé',
                    'commission'      => 'Commission',
                    'completed'       => 'Terminé',
                    'customer'        => 'Client',
                    'date'            => 'Date',
                    'discount'        => 'Remise',
                    'email'           => 'E-mail',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Montant brut',
                    'id'              => 'ID',
                    'items'           => 'Articles',
                    'location'        => 'Emplacement',
                    'order-id'        => 'ID de commande - #:id',
                    'payment'         => 'Paiement',
                    'pending'         => 'En attente',
                    'pending-payment' => 'Paiement en attente',
                    'processing'      => 'En cours de traitement',
                    'seller'          => 'Vendeur',
                    'seller-earn'     => 'Gagner',
                    'shipment'        => 'Expédition',
                    'shop'            => 'Boutique',
                    'status'          => 'Statut',
                    'view'            => 'Voir',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transactions',

                'datagrid' => [
                    'base-total'     => 'Total de base',
                    'comment'        => 'Commentaire',
                    'customer-name'  => 'Nom du client',
                    'id'             => 'Id',
                    'seller-id'      => 'ID du vendeur',
                    'seller-name'    => 'Nom du vendeur',
                    'transaction-id' => 'ID de transaction',
                    'view'           => 'Voir',
                ],
            ],

            'view' => [
                'commission'        => 'Commission',
                'created-on'        => 'créé le :date,',
                'name'              => 'Nom',
                'payment-method'    => 'Paiement par :method',
                'price'             => 'Prix',
                'qty'               => 'Quantité',
                'seller-total'      => 'Total du vendeur',
                'shipping-handling' => 'Expédition et manutention',
                'subtotal'          => 'Sous-total',
                'tax'               => 'Taxe',
                'title'             => 'Transactions #:transaction_id',
                'total'             => 'Total',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Créer une raison',
                'delete-success'      => 'Raison de signalement supprimée avec succès.',
                'mass-delete-success' => 'Raisons de signalement supprimées avec succès.',
                'mass-update-success' => 'Raisons de signalement mises à jour avec succès.',
                'title'               => 'Raisons de signalement',

                'datagrid' => [
                    'delete'        => 'Supprimer',
                    'edit'          => 'Modifier',
                    'id'            => 'Id',
                    'name'          => 'Nom',
                    'update-status' => 'Mettre à jour le statut',

                    'status' => [
                        'active'  => 'Actif',
                        'disable' => 'Désactiver',
                        'title'   => 'Statut',
                    ],

                    'type' => [
                        'product' => 'Produit',
                        'seller'  => 'Vendeur',
                        'title'   => 'Type',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Retour',
                'general'  => 'Général',
                'label'    => 'Étiquette',
                'product'  => 'Produit',
                'save-btn' => 'Enregistrer la raison',
                'seller'   => 'Vendeur',
                'status'   => 'Statut',
                'title'    => 'Créer une raison',
                'type'     => 'Type',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Retour',
                'general'  => 'Général',
                'label'    => 'Étiquette',
                'product'  => 'Produit',
                'save-btn' => 'Enregistrer la raison',
                'seller'   => 'Vendeur',
                'status'   => 'Statut',
                'title'    => 'Modifier la raison',
                'type'     => 'Type',
            ],

            'create-success' => 'Raison de signalement créée avec succès.',
            'update-success' => 'Raison de signalement mise à jour avec succès.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Attribuer une catégorie',
                'create-success' => 'Catégorie attribuée avec succès.',
                'delete-failed'  => 'Échec de la suppression de la raison du drapeau du vendeur!',
                'delete-success' => 'Catégorie supprimée avec succès.',
                'title'          => 'Catégories de Vendeur',
                'update-success' => 'Catégorie mise à jour avec succès.',

                'datagrid' => [
                    'delete' => 'Supprimer',
                    'edit'   => 'Modifier',
                    'id'     => 'Id',
                    'name'   => 'Nom',
                ],
            ],

            'create' => [
                'back-btn'      => 'Retour',
                'save-btn'      => 'Enregistrer la catégorie',
                'select-seller' => 'Sélectionner le vendeur',
                'seller'        => 'Vendeur',
                'title'         => 'Attribuer une catégorie',
            ],

            'edit' => [
                'back-btn'   => 'Retour',
                'seller'     => 'Vendeur',
                'title'      => 'Modifier la catégorie',
                'update-btn' => 'Mettre à jour la catégorie',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Commentaire',
                'no-amount-remaining'  => 'Aucun montant restant à payer !',
                'order-not-found'      => 'Commande non trouvée !',
                'pay-btn'              => 'Payer maintenant',
                'pay-to-seller'        => 'Paiement au vendeur',
                'payment-success'      => 'Le vendeur est payé avec succès !',
                'something-went-wrong' => 'Quelque chose s\'est mal passé !',
                'title'                => 'Demande de paiement',

                'datagrid' => [
                    'already-paid'          => 'Déjà payé',
                    'canceled'              => 'Annulé',
                    'closed'                => 'Fermé',
                    'completed'             => 'Terminé',
                    'customer-name'         => 'Nom du client',
                    'date'                  => 'Date',
                    'email'                 => 'E-mail',
                    'fraud'                 => 'Fraude',
                    'gross-amt'             => 'Montant brut',
                    'id'                    => 'Identifiant de commande',
                    'invoice-pending'       => 'Facture en attente',
                    'order-canceled'        => 'Commande annulée',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Payer',
                    'pending'               => 'En attente',
                    'pending-payment'       => 'Paiement en attente',
                    'processing'            => 'En cours de traitement',
                    'refunded'              => 'Remboursé',
                    'remaining-total'       => 'Total restant',
                    'request-payment'       => 'Demander un paiement',
                    'seller'                => 'Vendeur',
                    'seller-total-invoiced' => 'Total facturé au vendeur',
                    'shop'                  => 'Boutique',
                    'status'                => 'Statut',
                    'total-paid'            => 'Total payé',
                    'view'                  => 'Voir',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Bloquer le vendeur',
                'block-success'        => 'Vendeur bloqué avec succès!',
                'chat-history-cleared' => 'Historique de chat effacé avec succès!',
                'clear-chat-history'   => 'Effacer l\'historique du chat',
                'exit'                 => 'Sortir',
                'message-failed'       => 'Échec de l\'envoi du message!',
                'message-sent'         => 'Message envoyé avec succès!',
                'no-message'           => 'Aucun message trouvé!',
                'search'               => 'Rechercher',
                'search-message'       => 'Rechercher un message',
                'seller-blocked'       => 'Vous avez bloqué ce vendeur. Vous ne pouvez pas envoyer de message à ce vendeur.',
                'sellers'              => 'Vendeurs',
                'title'                => 'Communications',
                'type-message'         => 'Tapez votre message ici...',
                'unblock-seller'       => 'Débloquer le vendeur',
                'unblock-success'      => 'Vendeur débloqué avec succès!',
                'welcome-message'      => 'Bienvenue dans la communication du Marketplace!',

                'filters' => [
                    'all-messages'      => 'Tous les messages',
                    'prev-fifteen-days' => '15 derniers jours',
                    'prev-seven-days'   => '7 derniers jours',
                    'prev-six-months'   => '6 derniers mois',
                    'prev-thirty-days'  => '30 derniers jours',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Sources d\'inventaire',

                'datagrid' => [
                    'active'      => 'Actif',
                    'code'        => 'Code',
                    'id'          => 'ID',
                    'inactive'    => 'Inactif',
                    'name'        => 'Nom',
                    'seller-name' => 'Nom du vendeur',
                    'shop-title'  => 'Titre de la boutique',
                    'status'      => 'Statut',
                ],

                'view' => [
                    'active'         => 'Actif',
                    'address'        => 'Adresse de la source',
                    'city'           => 'Ville',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informations de contact',
                    'contact-name'   => 'Nom',
                    'contact-number' => 'Numéro de contact',
                    'country'        => 'Pays',
                    'description'    => 'Description',
                    'general-info'   => 'Informations générales',
                    'inactive'       => 'Inactif',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nom',
                    'postcode'       => 'Code postal',
                    'priority'       => 'Priorité',
                    'seller-info'    => 'Informations du vendeur',
                    'seller-name'    => 'Nom du vendeur',
                    'settings'       => 'Paramètres',
                    'shop-title'     => 'Titre de la boutique',
                    'state'          => 'État',
                    'street'         => 'Rue',
                    'title'          => 'Source d\'inventaire #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Installer le package Marketplace.',
            'migrate'     => 'Migration de toutes les tables dans la base de données (cela prendra un moment)...',
            'seed'        => 'Insertion des données dans la base de données...',
            'publish'     => 'Publication des assets et configurations...',
            'cache'       => 'Vidage du cache...',
            'finish'      => 'Le package Marketplace a été installé avec succès.',
        ],

        'version' => [
            'description' => 'Affiche la version actuelle du package Marketplace.',
            'comment'     => 'Version de Marketplace : :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Cher/Chère :customer_name',
        'dear-admin'  => 'Cher/Chère Administrateur/Administratrice',
        'dear-seller' => 'Cher vendeur',

        'seller' => [
            'registration' => [
                'date'        => 'Date d\'inscription :',
                'description' => 'Nous sommes ravis de vous informer d\'une nouvelle inscription de vendeur sur notre plateforme. Veuillez prendre un moment pour souhaiter la bienvenue au vendeur sur notre plateforme.',
                'details'     => 'Voici les détails :',
                'email'       => 'Adresse E-mail :',
                'greeting'    => 'J\'espère que ce message vous trouve en bonne santé.',
                'name'        => 'Nom du Vendeur :',
                'shop'        => 'URL de la Boutique :',
                'subject'     => 'Nouvelle Inscription de Vendeur',
            ],

            'forgot-password' => [
                'description'    => 'Vous recevez cet e-mail car nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.',
                'greeting'       => 'Mot de passe oublié !',
                'reset-password' => 'Réinitialiser le mot de passe',
                'subject'        => 'E-mail de réinitialisation du mot de passe',
            ],

            'welcome' => [
                'description' => 'Bienvenue à bord ! Nous sommes ravis de vous accueillir dans la famille. Votre présence en tant que vendeur ajoute une immense valeur à notre plateforme, et nous sommes impatients de construire un partenariat réussi.',
                'greeting'    => 'Bienvenue et merci de vous être inscrit chez nous !',
                'subject'     => 'Notification de Bienvenue au Vendeur',
            ],

            'approval' => [
                'approved'    => 'Votre demande pour devenir vendeur a été acceptée.',
                'disapproved' => 'Votre demande pour devenir vendeur a été rejetée.',
                'greeting'    => 'Bienvenue et merci de vous être inscrit chez nous !',
                'subject'     => 'Notification d\'Approbation du Vendeur',
            ],

            'update' => [
                'description' => 'Votre profil a été mis à jour avec succès.',
                'greeting'    => 'J\'espère que ce message vous trouve en bonne santé.',
                'subject'     => 'Notification de Mise à Jour du Profil du Vendeur',
            ],

            'good-bye' => [
                'description' => 'Travailler avec vous a été un plaisir, et je vous suis vraiment reconnaissant pour votre professionnalisme, votre dévouement et la haute qualité de vos produits/services. Votre engagement à assurer la satisfaction du client n\'est pas passé inaperçu, et il a été un facteur clé de notre expérience positive.',
                'greeting'    => 'J\'espère que ce message vous trouve en bonne santé.',
                'subject'     => 'Notification de Départ du Vendeur',
            ],

            'product-approval' => [
                'approved'    => 'Votre produit :name a été approuvé.',
                'disapproved' => 'Votre produit :name a été désapprouvé.',
                'greeting'    => 'Bienvenue et merci de vous être inscrit chez nous!',
                'subject'     => 'Notification d\'approbation du produit du vendeur',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Vous avez une nouvelle commande :order_id passée le :created_at',
                    'subject'  => 'Confirmation de Nouvelle Commande',
                    'summary'  => 'Résumé de la Commande',
                    'title'    => 'Confirmation de Commande!',
                ],

                'canceled' => [
                    'greeting' => 'La commande :order_id a été annulée',
                    'subject'  => 'Confirmation d’annulation de commande',
                    'summary'  => 'Résumé de la commande',
                    'title'    => 'Commande annulée !',
                ],

                'billing-address'   => 'Adresse de Facturation',
                'contact'           => 'Contact',
                'discount'          => 'Réduction',
                'grand-total'       => 'Total Général',
                'name'              => 'Nom',
                'payment'           => 'Paiement',
                'price'             => 'Prix',
                'qty'               => 'Quantité',
                'shipping'          => 'Livraison',
                'shipping-address'  => 'Adresse de Livraison',
                'shipping-handling' => 'Frais de Livraison et Manipulation',
                'sku'               => 'Code article',
                'subtotal'          => 'Sous-total',
                'tax'               => 'Taxe',
            ],

            'payment-request' => [
                'greeting'  => 'J\'espère que ce message vous trouve bien.',
                'paid'      => 'Salut.. Vous avez reçu le paiement pour la commande :order_id.',
                'requested' => 'Le vendeur :seller_name est demandé pour le paiement de la commande :order_id.',
                'subject'   => 'Notification de demande de paiement du vendeur',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-mail:- :email',
            'greeting' => 'J\'espère que ce message vous trouve bien.',
            'info'     => 'Bonjour, :name a une question pour vous. Veuillez vérifier les détails ci-dessous.',
            'query'    => 'Requête: :query',
            'subject'  => 'Notification de contact du vendeur',
            'topic'    => 'Sujet: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Bonjour, ":name" a signalé un problème concernant le produit ":product_name" du vendeur ":seller_name". Veuillez examiner les détails ci-dessous.',
            'greeting'   => 'J\'espère que ce message vous trouve en bonne santé.',
            'reason'     => 'Raison:- :reason',
            'seller-msg' => 'Bonjour, ":name" a signalé un problème concernant votre produit ":product_name". Veuillez examiner les détails ci-dessous.',
            'subject'    => 'Notification de rapport de produit',
        ],

        'report-seller' => [
            'admin-msg'  => 'Bonjour, :name a signalé un problème contre :seller_name. Veuillez vérifier les détails ci-dessous.',
            'greeting'   => 'Je fais confiance à ce que ce message vous trouve bien.',
            'reason'     => 'Raison: :reason',
            'seller-msg' => 'Bonjour, :name a signalé un problème vous concernant. Veuillez vérifier les détails ci-dessous.',
            'subject'    => 'Notification de rapport du vendeur',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Créer un compte vendeur Velocity',
            'banner-description'  => 'Velocity peut être une excellente plateforme pour vendre vos produits aux entreprises de nouvelle génération en Inde. En suivant ces conseils, vous pouvez vous préparer au succès en tant que vendeur Velocity!',
            'banner-btn-title'    => 'Ouvrir une boutique',
            'feature-title'       => 'Pourquoi les vendeurs aiment vendre sur Velocity?',
            'feature-description' => 'Les vendeurs aiment les plateformes à haute vélocité car elles offrent le potentiel d\'augmenter les ventes, une meilleure exposition et une expérience de vente efficace qui peut contribuer à la croissance et au succès de l\'entreprise.',
            'feature-box1-title'  => 'Opportunités de ventes accrues',
            'feature-box1-desc'   => 'Les vendeurs aiment les plateformes à haute vélocité car elles offrent le potentiel d\'augmenter les ventes, une meilleure exposition et une expérience de vente efficace qui peut contribuer à la croissance et au succès de l\'entreprise.',
            'feature-box2-title'  => 'Délai d\'exécution plus rapide',
            'feature-box2-desc'   => 'Les produits ont tendance à se vendre plus rapidement sur les plateformes à haute vélocité, ce qui entraîne un renouvellement plus rapide des stocks et une génération de revenus pour les vendeurs.',
            'feature-box3-title'  => 'Visibilité accrue',
            'feature-box3-desc'   => 'Ces plateformes offrent une plus grande visibilité et exposition aux produits des vendeurs, ce qui se traduit par plus de vues et de ventes potentielles.',
            'feature-box4-title'  => 'Efficacité et commodité',
            'feature-box4-desc'   => 'Les plateformes à haute vélocité ont souvent des processus et des outils rationalisés qui rendent la vente plus efficace, permettant aux vendeurs de gagner du temps et des efforts dans la gestion de leurs entreprises en ligne.',
            'journey-title'       => 'Commencez votre voyage sur Velocity',
            'journey-description' => 'Commencez à vendre avec de grands clients du monde entier, 24 heures sur 24.',
            'journey-step1-title' => 'Devenir vendeur',
            'journey-step1-desc'  => 'Configurez votre boutique avec toutes les informations de base.',
            'journey-step2-title' => 'Lister les produits',
            'journey-step2-desc'  => 'Listez les produits dans la boutique pour que les clients puissent les voir et les acheter.',
            'journey-step3-title' => 'Recevoir des commandes',
            'journey-step3-desc'  => 'Recevez des commandes d\'une large gamme de clients du monde entier.',
            'journey-step4-title' => 'Livraison du produit',
            'journey-step4-desc'  => 'Une fois le produit livré et le paiement reçu.',
            'journey-step5-title' => 'Paiement',
            'journey-step5-desc'  => 'Demande de paiement, recevez le paiement après la déduction de la commission.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Produit endommagé',
            'damaged-product-sold'      => 'Produit endommagé vendu par le vendeur',
            'duplicate-product'         => 'Produit en double',
            'duplicate-product-sold'    => 'Produit en double vendu par le vendeur',
            'missing-product-parts'     => 'Pièces du produit manquantes',
            'over-price-product'        => 'Produit surévalué',
            'over-price-product-sold'   => 'Produit surévalué vendu par le vendeur',
            'poor-product-quality'      => 'Qualité du produit médiocre',
            'poor-product-quality-sold' => 'Qualité médiocre vendue par le vendeur',
            'receive-wrong-product'     => 'Réception d’un mauvais produit',
            'wrong-product-sold'        => 'Mauvais produit vendu par le vendeur',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Télécharger',
                    'export'     => 'Exporter',
                    'no-records' => 'Rien à exporter',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Page d\'accueil',
                    'logout'     => 'Se déconnecter',
                    'my-profile' => 'Mon profil',
                    'visit-shop' => 'Visiter la boutique',

                    'mega-search' => [
                        'customers'                       => 'Clients',
                        'explore-all-customers'           => 'Explorer tous les clients',
                        'explore-all-matching-customers'  => 'Explorer tous les clients correspondant à “:query” (:count)',
                        'explore-all-matching-orders'     => 'Explorer toutes les commandes correspondant à “:query” (:count)',
                        'explore-all-matching-products'   => 'Explorer tous les produits correspondant à “:query” (:count)',
                        'explore-all-orders'              => 'Explorer toutes les commandes',
                        'explore-all-products'            => 'Explorer tous les produits',
                        'orders'                          => 'Commandes',
                        'products'                        => 'Produits',
                        'sku'                             => 'SKU : :sku',
                        'title'                           => 'Méga Recherche',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Réduire',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Ajouter une image',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Seuls les fichiers image (.jpeg, .jpg, .png, ..) sont autorisés.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Ajouter une vidéo',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Seuls les fichiers vidéo (.mp4, .mov, .ogg ..) sont autorisés.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Ajouter un document',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Seuls les fichiers documents (:types ..) sont autorisés.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Avant',
                    'next'       => 'Suivant',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Taille',
                    'text'       => 'Texte',
                    'use-cases'  => 'Cas d\'utilisation',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Réservations',
            'communication'     => 'Communication',
            'customers'         => 'Clients',
            'dashboard'         => 'Tableau de bord',
            'extensions'        => 'Extensions',
            'general'           => 'Général',
            'inventory-sources' => 'Sources d’inventaire',
            'manage-profile'    => 'Gérer le profil',
            'orders'            => 'Commandes',
            'product-reviews'   => 'Avis sur les produits',
            'products'          => 'Produits',
            'reporting'         => 'Rapports',
            'roles'             => 'Rôles',
            'sales'             => 'Ventes',
            'seller-reviews'    => 'Avis sur les vendeurs',
            'settings'          => 'Paramètres',
            'transaction'       => 'Transactions',
            'users'             => 'Utilisateurs',
        ],

        'acl' => [
            'assign'            => 'Attribuer',
            'bookings'          => 'Réservations',
            'cancel'            => 'Annuler',
            'communication'     => 'Communication',
            'create'            => 'Créer',
            'customers'         => 'Clients',
            'dashboard'         => 'Tableau de bord',
            'delete'            => 'Supprimer',
            'edit'              => 'Modifier',
            'extensions'        => 'Extensions',
            'general'           => 'Général',
            'inventory-sources' => 'Sources d’inventaire',
            'invoice'           => 'Facture',
            'orders'            => 'Commandes',
            'payment-request'   => 'Demande de paiement',
            'print'             => 'Imprimer',
            'print-invoice'     => 'Imprimer la facture',
            'product-reviews'   => 'Avis sur les produits',
            'products'          => 'Produits',
            'reporting'         => 'Rapports',
            'sales'             => 'Ventes',
            'seller-reviews'    => 'Avis des vendeurs',
            'settings'          => 'Paramètres',
            'shipment'          => 'Expédition',
            'transactions'      => 'Transactions',
            'view'              => 'Voir',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Ajouter un nouveau produit',
            'assign'            => 'Attribuer',
            'bookings'          => 'Réservations',
            'communication'     => 'Communication',
            'create'            => 'Créer',
            'customers'         => 'Clients',
            'dashboard'         => 'Tableau de bord',
            'edit'              => 'Modifier',
            'extensions'        => 'Extensions',
            'general'           => 'Général',
            'inventory-sources' => 'Sources d’inventaire',
            'manage-profile'    => 'Gérer le profil',
            'orders'            => 'Commandes',
            'product-reviews'   => 'Avis sur les produits',
            'products'          => 'Produits',
            'reporting'         => 'Rapports',
            'roles'             => 'Rôles',
            'sales'             => 'Ventes',
            'seller-reviews'    => 'Avis sur les vendeurs',
            'settings'          => 'Paramètres',
            'title'             => 'Profil',
            'transaction'       => 'Transactions',
            'users'             => 'Utilisateurs',
            'view'              => 'Voir',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Se connecter',
            'create-your-account' => 'Créez votre compte',
            'email'               => 'E-mail',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (enregistré en Inde). Tous droits réservés.',
            'forgot-pass'         => 'Mot de passe oublié?',
            'form-login-text'     => 'Si vous avez un compte, connectez-vous avec votre adresse e-mail.',
            'invalid-credentials' => 'Veuillez vérifier vos identifiants et réessayer.',
            'new-seller'          => 'Nouveau vendeur ?',
            'not-approved'        => 'Votre activation nécessite l\'approbation de l\'administrateur',
            'page-title'          => 'Connexion vendeur',
            'password'            => 'Mot de passe',
            'show-password'       => 'Afficher le mot de passe',
            'suspended-message'   => 'Votre compte a été suspendu. Contactez l\'administrateur pour toute question.',
            'title'               => 'Se connecter',
        ],

        'signup' => [
            'account-exists'   => 'Vous avez déjà un compte ?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'S\'inscrire',
            'confirm-pass'     => 'Confirmer le mot de passe',
            'email'            => 'E-mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (enregistré en Inde). Tous droits réservés.',
            'form-signup-text' => 'Si vous êtes nouveau dans notre magasin, nous sommes heureux de vous avoir en tant que membre.',
            'name'             => 'Nom',
            'page-title'       => 'Devenir vendeur',
            'password'         => 'Mot de passe',
            'sign-in-button'   => 'Se connecter',
            'success'          => 'Compte créé avec succès.',
            'url'              => 'URL de la boutique',
        ],

        'forgot-password' => [
            'already-sent'         => 'Nous avons déjà envoyé le lien de réinitialisation du mot de passe par e-mail.',
            'back'                 => 'Retour à la connexion ?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-mail',
            'email-not-exist'      => 'Nous ne pouvons pas trouver d\'utilisateur avec cette adresse e-mail.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (enregistré en Inde). Tous droits réservés.',
            'forgot-password-text' => 'Si vous avez oublié votre mot de passe, récupérez-le en entrant votre adresse e-mail.',
            'page-title'           => 'Mot de passe oublié ?',
            'reset-link-sent'      => 'Nous avons envoyé par e-mail le lien de réinitialisation de votre mot de passe.',
            'sign-in-button'       => 'Se connecter',
            'submit'               => 'Réinitialiser le mot de passe',
            'title'                => 'Récupérer le mot de passe',
        ],

        'reset-password' => [
            'back-link-title'  => 'Retour à la connexion',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Confirmer le mot de passe',
            'email'            => 'E-mail enregistré',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (enregistré en Inde). Tous droits réservés.',
            'password'         => 'Mot de passe',
            'submit-btn-title' => 'Réinitialiser le mot de passe',
            'title'            => 'Réinitialiser le mot de passe',
        ],

        'dashboard' => [
            'add-product'           => 'Ajouter un produit',
            'avg-order-sell'        => 'Vente moyenne par commande',
            'category-info'         => 'Aucune catégorie trouvée pour la période sélectionnée',
            'complete-profile-link' => 'Complétez votre profil &rarr;',
            'completed-orders'      => 'Terminées (:count)',
            'customer-info'         => 'Aucun client trouvé pour la période sélectionnée',
            'date-range'            => 'Plage de dates',
            'empty-threshold'       => 'Seuil vide',
            'empty-threshold-desc'  => 'Aucun produit disponible',
            'end-date'              => 'Date de fin',
            'hi-comment'            => 'Examinez rapidement ce qui se passe dans votre magasin.',
            'hi-seller'             => 'Salut ! :seller_name',
            'month'                 => 'Ce mois-ci',
            'no-category'           => 'Aucune donnée disponible',
            'no-customer'           => 'Aucune donnée disponible',
            'no-record-available'   => 'Aucun enregistrement disponible.',
            'order-count'           => ':total Commandes',
            'overall-details'       => 'Détails généraux',
            'pending-orders'        => 'En attente (:count)',
            'per-unit'              => ':price/Unité',
            'processing-orders'     => 'En cours (:count)',
            'product-info'          => 'Ajoutez des produits associés en déplacement',
            'profile-score'         => 'Score de profil',
            'profile-score-desc'    => 'Maximisez votre visibilité en gardant les informations de votre profil complètes.',
            'qty-stock'             => ':qty en stock',
            'refunded-orders'       => 'Remboursées (:count)',
            'remaining-payout'      => 'Paiement restant',
            'start-date'            => 'Date de début',
            'stock-threshold'       => 'Seuil de stock',
            'title'                 => 'Tableau de bord',
            'today'                 => 'Aujourd\'hui',
            'top-categories'        => 'Meilleures catégories',
            'top-customers'         => 'Client avec le plus de ventes',
            'top-products'          => 'Produits les plus vendus',
            'total-customers'       => 'Total des clients',
            'total-orders'          => 'Total des commandes',
            'total-payout'          => 'Total des paiements',
            'total-sale'            => 'Vente totale :total',
            'total-sales'           => 'Ventes totales',
            'view-all-btn'          => 'Tout voir',
            'visitor-count'         => 'Visiteurs - :count',
            'week'                  => 'Cette semaine',
            'year'                  => 'Cette année',
        ],

        'orders' => [
            'index' => [
                'title' => 'Commandes',

                'datagrid' => [
                    'canceled'        => 'Annulé',
                    'closed'          => 'Fermé',
                    'commission'      => 'Commission',
                    'completed'       => 'Terminé',
                    'customer'        => 'Client',
                    'date'            => 'Date',
                    'discount'        => 'Remise',
                    'email'           => 'Email',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Montant brut',
                    'id'              => 'Id',
                    'invoice-pending' => 'Facture en attente',
                    'items'           => 'Articles',
                    'location'        => 'Emplacement',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Payé',
                    'payment'         => 'Paiement',
                    'payment-request' => 'Demande de paiement',
                    'pending'         => 'En attente',
                    'pending-payment' => 'Paiement en attente',
                    'processing'      => 'Traitement',
                    'refunded'        => 'Remboursé',
                    'requested'       => 'Demandé',
                    'seller-earn'     => 'Gain du vendeur',
                    'shipment'        => 'Expédition',
                    'status'          => 'Statut',
                    'transaction'     => 'Transaction',
                    'view'            => 'Voir',
                ],

                'payment-req-success'  => 'Votre demande de paiement a été soumise avec succès',
                'something-went-wrong' => 'Quelque chose s\'est mal passé !',
            ],

            'view' => [
                'admin-commission'           => 'Commission de l\'administrateur',
                'billing-address'            => 'Adresse de facturation',
                'by-customer'                => 'Par le client - :name',
                'cancel-btn'                 => 'Annuler',
                'cancel-confirm-msg'         => 'Êtes-vous sûr de vouloir annuler cette commande ?',
                'cancel-error-msg'           => 'La commande ne peut pas être annulée',
                'cancel-success-msg'         => 'La commande a été annulée',
                'canceled'                   => 'Annulé',
                'closed'                     => 'Fermé',
                'completed'                  => 'Terminé',
                'discount'                   => 'Remise',
                'fraud'                      => 'Fraude',
                'grand-total'                => 'Total général',
                'info'                       => 'Information',
                'item-canceled'              => 'Annulé (:qty_canceled)',
                'item-invoice'               => 'Facturé (:qty_invoiced)',
                'item-ordered'               => 'Commandé (:qty_ordered)',
                'item-refunded'              => 'Remboursé (:qty_refunded)',
                'item-shipped'               => 'Expédié (:qty_shipped)',
                'item-status'                => 'Statut de l\'article',
                'payment-method'             => 'Méthode de paiement',
                'pending'                    => 'En attente',
                'pending_payment'            => 'Paiement en attente',
                'permission-error'           => 'Vous n\'avez pas la permission d\'annuler la commande',
                'place-on'                   => 'Placé le : :date',
                'price'                      => 'Prix',
                'price-excl-tax'             => 'Prix (hors taxes)',
                'price-incl-tax'             => 'Prix (toutes taxes comprises)',
                'processing'                 => 'Traitement',
                'product'                    => 'Produit',
                'shipping-address'           => 'Adresse de livraison',
                'shipping-handling'          => 'Expédition et manutention',
                'shipping-method'            => 'Méthode d\'expédition',
                'shipping-handling-excl-tax' => 'Expédition et manutention (Hors taxe)',
                'shipping-handling-incl-tax' => 'Expédition et manutention (Avec taxe)',
                'sub-total-excl-tax'         => 'Sous-total (Hors taxe)',
                'sub-total-incl-tax'         => 'Sous-total (Avec taxe)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Sous-total',
                'tax'                        => 'Taxe',
                'tax-amount'                 => 'Montant de la taxe',
                'tax-percent'                => 'Pourcentage de taxe',
                'title'                      => 'Commande #:order_id',
                'total'                      => 'Total',
                'total-due'                  => 'Total dû',
                'total-paid'                 => 'Total payé',
                'total-refunded'             => 'Total remboursé',
                'total-seller-amt'           => 'Montant total du vendeur',

                'invoices' => [
                    'bank-details'               => 'Coordonnées bancaires',
                    'bill-to'                    => 'Facturer à',
                    'contact'                    => 'Contact',
                    'contact-number'             => 'Numéro de contact',
                    'created-on'                 => 'créé le : :date_time',
                    'date'                       => 'Date de la facture',
                    'discount'                   => 'Remise',
                    'excl-tax'                   => 'Hors taxes :',
                    'grand-total'                => 'Total général',
                    'individual-invoice'         => 'Facture #:invoice_id',
                    'invoice'                    => 'Facture',
                    'invoice-id'                 => 'ID de la facture',
                    'name'                       => 'Nom',
                    'order-date'                 => 'Date de commande',
                    'order-id'                   => 'ID de commande',
                    'payment-method'             => 'Méthode de paiement',
                    'payment-terms'              => 'Conditions de paiement',
                    'price'                      => 'Prix',
                    'print'                      => 'Imprimer',
                    'product-name'               => 'Nom du produit',
                    'qty'                        => 'Qté',
                    'ship-to'                    => 'Expédier à',
                    'shipping-handling'          => 'Expédition et manutention',
                    'shipping-handling-excl-tax' => 'Expédition et manutention (Hors taxes)',
                    'shipping-handling-incl-tax' => 'Expédition et manutention (Toutes taxes comprises)',
                    'shipping-method'            => 'Méthode d\'expédition',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Sous-total',
                    'sub-total-excl-tax'         => 'Sous-total (Hors taxes)',
                    'sub-total-incl-tax'         => 'Sous-total (Toutes taxes comprises)',
                    'tax'                        => 'Taxe',
                    'tax-amount'                 => 'Montant de la taxe',
                    'title'                      => 'Factures',
                    'vat-number'                 => 'Numéro de TVA',
                ],

                'shipments' => [
                    'carrier-title'       => 'Titre du transporteur',
                    'created-on'          => 'créée le :date_time',
                    'individual-shipment' => 'Expéditions #:track_number',
                    'inventory-source'    => 'Source d\'inventaire',
                    'name'                => 'Nom',
                    'qty'                 => 'Qté',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Expéditions',
                    'tracking-number'     => 'Numéro de suivi',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Frais d\'ajustement',
                    'adjustment-refund'          => 'Remboursement d\'ajustement',
                    'created-on'                 => 'créée le :date_time',
                    'discount'                   => 'Remise',
                    'grand-total'                => 'Total',
                    'individual-refund'          => 'Remboursement n°: refund_id',
                    'no-result-found'            => 'Aucun enregistrement trouvé.',
                    'price'                      => 'Prix',
                    'product-name'               => 'Nom',
                    'qty'                        => 'Qté',
                    'shipping-handling'          => 'Livraison et manutention',
                    'shipping-handling-excl-tax' => 'Expédition et manutention (Hors taxe)',
                    'shipping-handling-incl-tax' => 'Expédition et manutention (Avec taxe)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Sous-total (Hors taxe)',
                    'sub-total-incl-tax'         => 'Sous-total (Avec taxe)',
                    'subtotal'                   => 'Sous-total',
                    'tax'                        => 'Taxe',
                    'tax-amount'                 => 'Montant de la taxe',
                    'title'                      => 'Remboursements',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Facture',
                'invoice-success'  => 'Facture créée avec succès',
                'permission-error' => 'Vous n\'avez pas la permission de créer une facture de commande',
                'price'            => 'Prix',
                'product-name'     => 'Nom du produit',
                'qty'              => 'Qté',
                'qty-error'        => 'La quantité demandée n\'est pas disponible',
                'sub-total'        => 'Facture <br> Sous-total',
                'title'            => 'Créer une facture',
                'total'            => 'Total',
            ],

            'shipments' => [
                'avl-qty'          => 'Dispo. - :qty Qté',
                'carrier-title'    => 'Titre du transporteur',
                'create-btn'       => 'Expédier',
                'ordered-qty'      => 'Quantité commandée',
                'permission-error' => 'Vous n\'avez pas la permission de créer une expédition',
                'product-name'     => 'Nom du produit',
                'qty'              => 'Qté',
                'qty-error'        => 'La quantité demandée n\'est pas disponible',
                'shipment-success' => 'Expédition créée avec succès',
                'shipped-qty'      => 'Quantité expédiée',
                'sku'              => 'SKU - :sku',
                'source'           => 'Source de commande de produit',
                'title'            => 'Créer une expédition',
                'tracking-id'      => 'ID de suivi',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Date de création',
                    'from'         => 'De',
                    'id'           => 'ID',
                    'order-id'     => 'ID de commande',
                    'qty'          => 'Quantité',
                    'to'           => 'À',
                    'view'         => 'Voir',
                ],

                'title'    => 'Réservations',
            ],

            'calendar' => [
                'booking-date'     => 'Date de réservation',
                'booking-details'  => 'Détails de la réservation',
                'canceled'         => 'Annulé',
                'closed'           => 'Fermé',
                'done'             => 'Terminé',
                'order-id'         => 'ID de commande',
                'pending'          => 'En attente',
                'price'            => 'Prix',
                'status'           => 'Statut',
                'time-slot'        => 'Créneau horaire:',
                'view-details'     => 'Voir les détails',
            ],

            'title' => 'Produits réservés',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Solde des paiements',
                'title'                  => 'Transactions',
                'total-payout'           => 'Total des paiements',
                'total-seller-sale'      => 'Vente totale (Vendeur)',
                'total-admin-commission' => 'Commission totale (Admin)',
                'total-sale-invoiced'    => 'Vente totale (Facturée)',

                'datagrid' => [
                    'comment'          => 'Commentaire',
                    'id'               => 'Id',
                    'total'            => 'Total',
                    'transaction-id'   => 'ID de transaction',
                ],
            ],

            'view' => [
                'commission'        => 'Commission',
                'created-on'        => 'créé le :date,',
                'date'              => 'Date',
                'id'                => 'ID de transaction',
                'method'            => 'Méthode',
                'name'              => 'Nom',
                'payment-method'    => 'Paiement par :method',
                'price'             => 'Prix',
                'print'             => 'Imprimer',
                'qty'               => 'Qté',
                'seller-total'      => 'Total du vendeur',
                'shipping-handling' => 'Expédition et manutention',
                'subtotal'          => 'Sous-total',
                'tax'               => 'Taxe',
                'title'             => 'Transaction',
                'total'             => 'Total',
                'transaction-id'    => 'Transaction n° :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Ajouter un nouveau produit',
                'title'           => 'Produits',

                'datagrid' => [
                    'active'         => 'Actif',
                    'approved'       => 'Approuvé',
                    'category'       => 'Catégorie',
                    'delete'         => 'Supprimer',
                    'disable'        => 'Désactiver',
                    'disapproved'    => 'Désapprouvé',
                    'edit'           => 'Éditer',
                    'id'             => 'ID',
                    'image'          => 'Image',
                    'is-approved'    => 'Approuvé',
                    'name'           => 'Nom',
                    'out-of-stock'   => 'En rupture de stock',
                    'price'          => 'Prix',
                    'product-number' => 'Numéro de produit',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Statut',
                    'stock'          => 'Stock',
                    'total-quantity' => ':quantity Disponible',
                    'type'           => 'Type',
                ],
            ],

            'create' => [
                'attribute-family'          => "Famille d'attributs",
                'back'                      => 'Retour',
                'continue'                  => 'Continuer',
                'create-new-product'        => 'Créer de nouveaux produits',
                'create-your-new-product'   => "Si le produit n'existe pas, créez votre nouveau produit",
                'disable-product-message'   => 'L\'administrateur a désactivé la fonctionnalité pour créer ou attribuer des produits.',
                'image-placeholder'         => 'Votre image',
                'no-result'                 => 'Aucun résultat',
                'not-allowed'               => 'Vous n\'êtes pas autorisé à créer un produit',
                'or'                        => 'Ou',
                'product-type'              => 'Type de produit',
                'search-product'            => 'Rechercher des produits',
                'sell-admin-product-prices' => 'Vendre des produits administrateurs à vos prix.',
                'sell-as-yours'             => 'Vendre comme le vôtre',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Vous pouvez ajouter un produit de 2 manières, soit depuis le produit administrateur, soit en créant le vôtre.',
                'title'                     => 'Ajouter un nouveau produit',
                'update-profile'            => 'Veuillez mettre à jour les détails de votre profil',
            ],

            'edit' => [
                'back-btn'      => 'Retour',
                'preview'       => 'Aperçu',
                'remove'        => 'Supprimer',
                'save-btn'      => 'Enregistrer le produit',
                'title'         => 'Modifier le produit',
                'channels'      => 'Canaux',
                'progress-info' => 'Améliorez l’attrait de votre produit et laissez une impression durable sur vos clients en vous assurant que tous les détails du produit sont complets et précis !',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Ajouter un prix de groupe',
                        'all-groups'                => 'Tous les groupes',
                        'create-btn'                => 'Ajouter un nouveau',
                        'discount-group-price-info' => 'Pour :qty quantité à un rabais de :price',
                        'edit-btn'                  => 'Modifier',
                        'empty-info'                => 'Tarification spéciale pour les clients appartenant à un groupe spécifique.',
                        'fixed-group-price-info'    => 'Pour :qty quantité à un prix fixe de :price',
                        'title'                     => 'Prix de groupe client',

                        'create' => [
                            'all-groups'     => 'Tous les groupes',
                            'create-title'   => 'Créer un prix de groupe client',
                            'customer-group' => 'Groupe client',
                            'delete-btn'     => 'Supprimer',
                            'discount'       => 'Remise',
                            'fixed'          => 'Fixe',
                            'price'          => 'Prix',
                            'price-type'     => 'Type de prix',
                            'qty'            => 'Quantité',
                            'save-btn'       => 'Enregistrer',
                            'update-title'   => 'Mettre à jour le prix de groupe client',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Quantité commandée en attente : :qty',
                    'pending-ordered-qty-info' => 'La quantité en attente de commande sera déduite de la source d\'inventaire respective après l\'expédition. En cas d\'annulation, la quantité en attente sera disponible à la vente.',
                    'title'                    => 'Inventaires',
                ],

                'categories' => [
                    'title' => 'Catégories',
                ],

                'images' => [
                    'info'  => "La résolution de l'image doit être de l'ordre de 609x560 pixels.",
                    'title' => 'Images',
                ],

                'videos' => [
                    'error' => 'La vidéo ne peut pas dépasser :max kilo-octets. Veuillez choisir un fichier plus petit.',
                    'info'  => 'La taille maximale de la vidéo doit être d\'environ :size',
                    'title' => 'Vidéos',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Ajoutez des produits connexes en un clin d\'œil.',
                        'info'       => 'En plus du produit que le client consulte, des produits connexes lui sont présentés.',
                        'title'      => 'Produits connexes',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Ajoutez des produits de vente supérieure en un clin d\'œil.',
                        'info'       => 'Le client se voit proposer des produits de vente supérieure, qui servent d\'alternative premium ou de meilleure qualité au produit qu\'il consulte actuellement.',
                        'title'      => 'Produits de vente supérieure',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Ajoutez des produits de vente croisée en un clin d\'œil.',
                        'info'       => 'À côté du panier d\'achat, vous trouverez ces produits "achat impulsif" positionnés en tant que produits de vente croisée pour compléter les articles déjà ajoutés à votre panier.',
                        'title'      => 'Produits de vente croisée',
                    ],

                    'add-btn'           => 'Ajouter un produit',
                    'delete'            => 'Supprimer',
                    'empty-info'        => 'Pour ajouter des produits de type :type en un clin d\'œil.',
                    'empty-title'       => 'Ajouter un produit',
                    'image-placeholder' => 'Image du produit',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Ajouter une option',
                            'empty-info'        => 'Pour créer des options personnalisables rapidement.',
                            'empty-title'       => 'Ajouter une option',
                            'info'              => 'Cela personnalisera le produit simple.',
                            'title'             => 'Article personnalisable',

                            'update-create' => [
                                'is-required'               => 'Est requis',
                                'max-characters'            => 'Nombre maximum de caractères',
                                'name'                      => 'Titre',
                                'no'                        => 'Non',
                                'price'                     => 'Prix',
                                'save-btn'                  => 'Enregistrer',
                                'supported-file-extensions' => 'Extensions de fichier prises en charge',
                                'title'                     => 'Option',
                                'type'                      => 'Type',
                                'yes'                       => 'Oui',
                            ],

                            'option' => [
                                'add-btn'     => 'Ajouter une option',
                                'delete'      => 'Supprimer',
                                'delete-btn'  => 'Supprimer',
                                'edit-btn'    => 'Modifier',
                                'empty-info'  => 'Pour créer diverses combinaisons de produits rapidement.',
                                'empty-title' => 'Ajouter une option',

                                'types' => [
                                    'text' => [
                                        'title' => 'Texte',
                                    ],

                                    'textarea' => [
                                        'title' => 'Zone de texte',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Case à cocher',
                                    ],

                                    'radio' => [
                                        'title' => 'Bouton radio',
                                    ],

                                    'select' => [
                                        'title' => 'Sélectionner',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Sélection multiple',
                                    ],

                                    'date' => [
                                        'title' => 'Date',
                                    ],

                                    'datetime' => [
                                        'title' => 'Date et heure',
                                    ],

                                    'time' => [
                                        'title' => 'Heure',
                                    ],

                                    'file' => [
                                        'title' => 'Fichier',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Étiquette',
                                        'price'    => 'Prix',
                                        'save-btn' => 'Enregistrer',
                                        'title'    => 'Option',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Le produit est déjà associé à un produit configurable, groupé ou en pack.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Ajouter une variante',
                        'delete-btn'        => 'Supprimer',
                        'edit-btn'          => 'Modifier',
                        'empty-info'        => 'Pour créer diverses combinaisons de produits en un clin d\'œil.',
                        'empty-title'       => 'Ajouter une variante',
                        'image-placeholder' => 'Image du produit',
                        'info'              => 'Les produits de variation dépendent de toutes les combinaisons possibles d\'attributs.',
                        'qty'               => ':qty quantité',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Variantes',

                        'create'  => [
                            'description'            => 'Description',
                            'name'                   => 'Nom',
                            'save-btn'               => 'Ajouter',
                            'title'                  => 'Ajouter une variante',
                            'variant-already-exists' => 'Cette variante existe déjà',
                        ],

                        'edit' => [
                            'disabled'        => 'Désactivé',
                            'edit-info'       => 'Si vous souhaitez mettre à jour les informations détaillées du produit, rendez-vous sur la',
                            'edit-link-title' => 'Page de détails du produit',
                            'enabled'         => 'Activé',
                            'images'          => 'Images',
                            'name'            => 'Nom',
                            'price'           => 'Prix',
                            'quantities'      => 'Quantités',
                            'save-btn'        => 'Enregistrer',
                            'sku'             => 'SKU',
                            'status'          => 'Statut',
                            'title'           => 'Produit',
                            'weight'          => 'Poids',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Ajouter des images',
                            'apply-to-all-btn'    => 'Appliquer à tout',
                            'apply-to-all-sku'    => 'Appliquer un prix à tous les SKU.',
                            'edit-inventories'    => 'Modifier les inventaires',
                            'edit-prices'         => 'Modifier les prix',
                            'price'               => 'Prix',
                            'remove-images'       => 'Supprimer les images',
                            'remove-variants'     => 'Supprimer les variantes',
                            'select-action'       => 'Sélectionner l\'action',
                            'select-variants'     => 'Sélectionner les variantes',
                            'edit-name'           => 'Modifier le nom',
                            'name'                => 'Nom',
                            'edit-sku'            => 'Modifier le SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Modifier le poids',
                            'weight'              => 'Poids',
                            'edit-status'         => 'Modifier le statut',
                            'status'              => 'Statut',
                            'apply-to-all-name'   => 'Appliquer un nom à toutes les variantes.',
                            'apply-to-all-weight' => 'Appliquer un poids à toutes les variantes.',
                            'apply-to-all-status' => 'Appliquer un statut à toutes les variantes.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Ajouter un produit',
                        'default-qty'       => 'Quantité par défaut',
                        'delete'            => 'Supprimer',
                        'empty-info'        => 'Pour créer diverses combinaisons de produits en un clin d\'œil.',
                        'empty-title'       => 'Ajouter un produit',
                        'image-placeholder' => 'Image du produit',
                        'info'              => 'Un produit groupé comprend des articles autonomes présentés sous forme d\'ensemble, permettant des variations ou une coordination par saison ou par thème. Chaque produit peut être acheté individuellement ou en tant que partie du groupe.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Produits groupés',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Ajouter une option',
                        'empty-info'        => 'Pour créer des options de bundle en un clin d\'œil.',
                        'empty-title'       => 'Ajouter une option',
                        'image-placeholder' => 'Image du produit',
                        'info'              => 'Un produit bundle est un ensemble de plusieurs articles ou services vendus ensemble à un prix spécial, offrant une valeur et une commodité aux clients.',
                        'title'             => 'Articles de bundle',

                        'update-create' => [
                            'checkbox'    => 'Case à cocher',
                            'is-required' => 'Obligatoire',
                            'multiselect' => 'Sélection multiple',
                            'name'        => 'Titre',
                            'no'          => 'Non',
                            'radio'       => 'Radio',
                            'save-btn'    => 'Enregistrer',
                            'select'      => 'Sélectionner',
                            'title'       => 'Option',
                            'type'        => 'Type',
                            'yes'         => 'Oui',
                        ],

                        'option' => [
                            'add-btn'     => 'Ajouter un produit',
                            'default-qty' => 'Quantité par défaut',
                            'delete'      => 'Supprimer',
                            'delete-btn'  => 'Supprimer',
                            'edit-btn'    => 'Modifier',
                            'empty-info'  => 'Pour créer diverses combinaisons de produits en un clin d\'œil.',
                            'empty-title' => 'Ajouter un produit',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Définissez le produit par défaut à l\'aide de la case à cocher',
                                    'title' => 'Case à cocher',
                                ],

                                'multiselect' => [
                                    'info'  => 'Définissez le produit par défaut à l\'aide du bouton de case à cocher',
                                    'title' => 'Sélection multiple',
                                ],

                                'radio' => [
                                    'info'  => 'Définissez le produit par défaut à l\'aide du bouton radio',
                                    'title' => 'Radio',
                                ],

                                'select' => [
                                    'info'  => 'Définissez le produit par défaut à l\'aide du bouton radio',
                                    'title' => 'Sélectionner',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Disponible à partir de',
                        'available-to'   => 'Disponible jusqu\'à',
                        'location'       => 'Emplacement',
                        'qty'            => 'Quantité',
                        'title'          => 'Type de réservation',

                        'available-every-week' => [
                            'no'    => 'Non',
                            'title' => 'Disponible chaque semaine',
                            'yes'   => 'Oui',
                        ],

                        'appointment' => [
                            'break-duration' => 'Temps de pause entre les créneaux (minutes)',
                            'slot-duration'  => 'Durée du créneau (minutes)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Non',
                                'title' => 'Même créneau pour tous les jours',
                                'yes'   => 'Oui',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Ajouter',
                            'break-duration'   => 'Temps de pause entre les créneaux (minutes)',
                            'close'            => 'Fermer',
                            'description'      => 'Informations sur la réservation',
                            'description-info' => 'La durée sera créée et affichée en fonction des créneaux. Elle sera unique à travers tous les créneaux et visible sur la vitrine du magasin',
                            'edit'             => 'Modifier',
                            'many'             => 'Plusieurs réservations pour un jour',
                            'one'              => 'Une réservation pour plusieurs jours',
                            'open'             => 'Ouvrir',
                            'slot-add'         => 'Ajouter des créneaux',
                            'slot-duration'    => 'Durée du créneau (minutes)',
                            'slot-title'       => 'Durée des créneaux',
                            'title'            => 'Par défaut',
                            'unavailable'      => 'Indisponible',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Ajouter des créneaux',
                                    'close'      => 'Fermer',
                                    'day'        => 'Jour',
                                    'edit-title' => 'Modifier les créneaux',
                                    'friday'     => 'Vendredi',
                                    'from'       => 'De',
                                    'from-day'   => 'Du jour',
                                    'from-time'  => 'De l\'heure',
                                    'monday'     => 'Lundi',
                                    'open'       => 'Ouvrir',
                                    'saturday'   => 'Samedi',
                                    'save'       => 'Enregistrer',
                                    'select'     => 'Sélectionner',
                                    'status'     => 'Statut',
                                    'sunday'     => 'Dimanche',
                                    'thursday'   => 'Jeudi',
                                    'to'         => 'À',
                                    'to-day'     => 'Au jour',
                                    'to-time'    => 'À l\'heure',
                                    'tuesday'    => 'Mardi',
                                    'wednesday'  => 'Mercredi',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Ajouter des billets',
                            'delete'             => 'Supprimer',
                            'description'        => 'Description',
                            'description-info'   => 'Aucun billet disponible.',
                            'edit'               => 'Modifier',
                            'name'               => 'Nom',
                            'price'              => 'Prix',
                            'qty'                => 'Quantité',
                            'special-price'      => 'Prix spécial',
                            'special-price-from' => 'Prix spécial à partir de',
                            'special-price-to'   => 'Prix spécial jusqu\'à',
                            'title'              => 'Billets',
                            'valid-from'         => 'Valide à partir de',
                            'valid-until'        => 'Valide jusqu\'à',

                            'modal'              => [
                                'edit' => 'Modifier les billets',
                                'save' => 'Enregistrer',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Ajouter des billets',
                            ],

                            'slots'   => [
                                'add'         => 'Ajouter des créneaux',
                                'description' => 'Créneaux disponibles avec durée.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Base quotidienne',
                            'daily-hourly'           => 'Les deux (quotidienne et horaire)',
                            'daily-price'            => 'Prix quotidien',
                            'hourly'                 => 'Base horaire',
                            'hourly-price'           => 'Prix horaire',
                            'title'                  => 'Type de location',

                            'same-slot-for-all-days' => [
                                'no'    => 'Non',
                                'title' => 'Même créneau pour tous les jours',
                                'yes'   => 'Oui',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Ajouter des créneaux',
                            'description-info' => 'La durée sera créée et affichée en fonction des créneaux. Elle sera unique à travers tous les créneaux et visible sur la vitrine du magasin',
                            'save'             => 'Enregistrer',
                            'title'            => 'Durée des créneaux',
                            'unavailable'      => 'Indisponible',

                            'action'           => [
                                'add' => 'Ajouter',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Vendredi',
                                    'from'       => 'De',
                                    'monday'     => 'Lundi',
                                    'saturday'   => 'Samedi',
                                    'sunday'     => 'Dimanche',
                                    'thursday'   => 'Jeudi',
                                    'to'         => 'À',
                                    'tuesday'    => 'Mardi',
                                    'wednesday'  => 'Mercredi',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Temps de pause entre les créneaux (minutes)',
                            'guest-capacity'            => 'Capacité d\'invités',
                            'guest-limit'               => 'Limite d\'invités par table',
                            'prevent-scheduling-before' => 'Empêcher la planification avant',
                            'slot-duration'             => 'Durée du créneau (minutes)',

                            'charged-per'               => [
                                'guest'  => 'Invité',
                                'table'  => 'Table',
                                'title'  => 'Facturé par',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Non',
                                'title' => 'Même créneau pour tous les jours',
                                'yes'   => 'Oui',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Réservation de rendez-vous',
                            'default'     => 'Réservation par défaut',
                            'event'       => 'Réservation d\'événement',
                            'many'        => 'Plusieurs',
                            'one'         => 'Un',
                            'rental'      => 'Réservation de location',
                            'table'       => 'Réservation de table',
                            'title'       => 'Type',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Ajouter un lien',
                            'delete-btn'  => 'Supprimer',
                            'edit-btn'    => 'Modifier',
                            'empty-info'  => 'Pour créer un lien en un clin d\'œil.',
                            'empty-title' => 'Ajouter un lien',
                            'file'        => 'Fichier : ',
                            'info'        => 'Le type de produit téléchargeable permet de vendre des produits numériques tels que des livres électroniques, des applications logicielles, de la musique, des jeux, etc.',
                            'sample-file' => 'Fichier d\'exemple : ',
                            'sample-url'  => 'URL de l\'exemple : ',
                            'title'       => 'Liens téléchargeables',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'Téléchargement autorisé',
                                'file'        => 'Fichier',
                                'file-type'   => 'Type de fichier',
                                'name'        => 'Titre',
                                'price'       => 'Prix',
                                'sample'      => 'Échantillon',
                                'sample-type' => 'Type d\'échantillon',
                                'save-btn'    => 'Enregistrer',
                                'title'       => 'Lien',
                                'url'         => 'URL : ',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Ajouter un échantillon',
                            'delete-btn'  => 'Supprimer',
                            'edit-btn'    => 'Modifier',
                            'empty-info'  => 'Pour créer un échantillon en un clin d\'œil.',
                            'empty-title' => 'Ajouter un échantillon',
                            'file'        => 'Fichier : ',
                            'info'        => 'Le type de produit téléchargeable permet de vendre des produits numériques tels que des livres électroniques, des applications logicielles, de la musique, des jeux, etc.',
                            'title'       => 'Échantillons téléchargeables',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'Fichier',
                                'file-type' => 'Type de fichier',
                                'name'      => 'Titre',
                                'save-btn'  => 'Enregistrer',
                                'title'     => 'Lien',
                                'url'       => 'URL : ',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Produit créé avec succès',
            'delete-failed'            => 'Échec de la suppression du produit',
            'delete-success'           => 'Produit supprimé avec succès',
            'product-type-not-allowed' => 'Vous n\'êtes pas autorisé à vendre un produit de type :type',
            'saved-inventory-message'  => 'Produit enregistré avec succès',
            'update-success'           => 'Produit mis à jour avec succès',

            'assign' => [
                'already-selling'     => 'Vous vendez déjà ce produit',
                'back-btn'            => 'Retour',
                'condition'           => 'État',
                'create-success'      => 'Produit assigné avec succès au vendeur',
                'description'         => 'Description',
                'image-size'          => 'La résolution de l\'image doit être de 609px X 560px',
                'images'              => 'Images',
                'new'                 => 'Nouveau',
                'not-allowed'         => 'Vous n\'êtes pas autorisé à attribuer ce produit',
                'old'                 => 'Ancien',
                'price'               => 'Prix',
                'product-not-allowed' => 'Vous n\'êtes pas autorisé à vendre un produit de type :type',
                'quantities'          => 'Quantités',
                'save-btn'            => 'Enregistrer',
                'title'               => 'Attribuer un produit',
                'update-success'      => 'Produit attribué mis à jour avec succès',

                'product-details' => [
                    'active'            => 'Actif',
                    'approved'          => 'Approuvé',
                    'disable'           => 'Désactiver',
                    'disapproved'       => 'Désapprouvé',
                    'image-placeholder' => 'Image du produit',
                    'title'             => 'Détails du produit',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Avis sur les produits',

                'datagrid' => [
                    'approved'      => 'Approuvé',
                    'customer'      => 'Client',
                    'date'          => 'Date',
                    'description'   => 'Description',
                    'email'         => 'E-mail',
                    'pending'       => 'En attente',
                    'product'       => 'Produit',
                    'rating'        => 'Évaluation',
                    'status'        => 'Statut',
                    'title'         => 'Titre',
                    'unapproved'    => 'Non approuvé',
                    'update-status' => 'État de la mise à jour',
                ],
            ],

            'update-success' => 'Les avis sur le produit ont été mis à jour avec succès',
            'delete-success' => 'Les avis sur les produits ont été supprimés avec succès.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Clients',

                'datagrid' => [
                    'active'      => 'Actif',
                    'customer'    => 'Client',
                    'email'       => 'E-mail',
                    'gender'      => 'Genre',
                    'group'       => 'Groupe',
                    'inactive'    => 'Inactif',
                    'order-count' => 'Nombre de commandes',
                    'revenue'     => 'Revenu',
                    'status'      => 'Statut',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Gérer le Profil',
                'edit-btn' => 'Modifier le Profil',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Nom',
                    'phone'      => 'Numéro de Téléphone',
                    'shop-slug'  => 'Slug de la Boutique',
                    'shop-title' => 'Titre de la Boutique',
                    'title'      => 'Informations Générales',
                ],

                'about-store' => [
                    'title' => 'À propos de la Boutique',
                ],

                'meta' => [
                    'meta-description' => 'Meta Description',
                    'meta-keywords'    => 'Meta Mots-clés',
                    'meta-title'       => 'Meta Titre',
                    'title'            => 'Meta Description',
                ],

                'policy' => [
                    'privacy'  => 'Politique de Confidentialité',
                    'return'   => 'Politique de Retour',
                    'shipping' => 'Politique d\'Expédition',
                    'title'    => 'Politiques',
                ],

                'address' => [
                    'city'     => 'Ville',
                    'country'  => 'Pays',
                    'postcode' => 'Code Postal',
                    'state'    => 'État',
                    'title'    => 'Adresse de la Boutique',
                    'address'  => 'Adresse',
                ],

                'social' => [
                    'link'  => 'Lien :name',
                    'title' => 'Liens Sociaux',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Montant Minimum de Commande',
                ],

                'google-analytics' => [
                    'id'    => 'ID Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Commission de l\'Administrateur',
                    'admin-commission-value' => 'Commission de l\'Administrateur :rate% du montant total facturé',
                    'allowed-categories'     => 'Catégories Autorisées',
                    'no-categories'          => 'Aucune Catégorie Disponible',
                    'allowed-product-types'  => 'Types de Produits Autorisés',
                    'no-product-types'       => 'Aucun Type de Produit Disponible',
                    'payment-methods'        => 'Méthodes de Paiement',
                    'no-payment-methods'     => 'Aucune Méthode de Paiement Disponible',
                    'shipping-methods'       => 'Méthodes d\'Expédition',
                    'no-shipping-methods'    => 'Aucune Méthode d\'Expédition Disponible',
                    'title'                  => 'Informations sur la Boutique',
                ],
            ],

            'edit' => [
                'banner'              => 'Bannière',
                'banner-description'  => 'Téléchargez une bannière au ratio 13:3, hauteur 375 Zone sûre 375x250 Centre sur mobile',
                'delete-banner'       => 'Supprimer la Bannière',
                'delete-logo'         => 'Supprimer le Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Téléchargez un logo au ratio 1:1',
                'save-btn'            => 'Enregistrer le Profil',
                'title'               => 'Gérer le Profil',
                'upload-new-banner'   => 'Télécharger une Nouvelle Bannière',
                'upload-new-logo'     => 'Télécharger un Nouveau Logo',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Nom',
                    'phone'      => 'Numéro de Téléphone',
                    'shop-slug'  => 'Slug de la Boutique',
                    'shop-title' => 'Titre de la Boutique',
                    'title'      => 'Informations Générales',
                ],

                'about-store' => [
                    'title' => 'À propos de la Boutique',
                ],

                'meta' => [
                    'meta-description' => 'Meta Description',
                    'meta-keywords'    => 'Meta Mots-clés',
                    'meta-title'       => 'Meta Titre',
                    'title'            => 'Meta Description',
                ],

                'policy' => [
                    'privacy'  => 'Politique de Confidentialité',
                    'return'   => 'Politique de Retour',
                    'shipping' => 'Politique d\'Expédition',
                    'title'    => 'Politiques',
                ],

                'address' => [
                    'city'           => 'Ville',
                    'country'        => 'Pays',
                    'postcode'       => 'Code Postal',
                    'state'          => 'État',
                    'title'          => 'Adresse de la Boutique',
                    'select-country' => 'Sélectionnez un Pays',
                    'select-state'   => 'Sélectionnez un État',
                    'street-address' => 'Adresse de Rue',
                    'address'        => 'Adresse',
                ],

                'social' => [
                    'link'  => 'Lien :name',
                    'title' => 'Liens Sociaux',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Montant Minimum de Commande',
                ],

                'google-analytics' => [
                    'id'    => 'ID Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Votre Profil a été mis à jour avec succès',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Avis sur le vendeur',

                'datagrid' => [
                    'approved'    => 'Approuvé',
                    'customer'    => 'Client',
                    'date'        => 'Date',
                    'description' => 'Description',
                    'disapproved' => 'Désapprouvé',
                    'email'       => 'E-mail',
                    'pending'     => 'En attente',
                    'rating'      => 'Évaluation',
                    'status'      => 'Statut',
                    'title'       => 'Titre',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Sauvegarder',
                    'title'              => 'Général',
                    'unmatched-password' => 'Le mot de passe actuel ne correspond pas',
                    'update-success'     => 'Paramètres généraux mis à jour avec succès',

                    'regional-setting' => [
                        'currency'      => 'Devise',
                        'locale'        => 'Locale',
                        'select-locale' => 'Sélectionnez la langue',
                        'title'         => 'Paramètres régionaux',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Confirmer le mot de passe',
                        'current-password' => 'Mot de passe actuel',
                        'new-password'     => 'Nouveau mot de passe',
                        'title'            => 'Paramètres de mot de passe',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Créer un Rôle',
                    'title'      => 'Rôles',

                    'datagrid' => [
                        'all'             => 'Tous',
                        'custom'          => 'Personnalisé',
                        'delete'          => 'Supprimer',
                        'edit'            => 'Éditer',
                        'id'              => 'Id',
                        'name'            => 'Nom',
                        'permission-type' => 'Type d’autorisation',
                    ],
                ],

                'create' => [
                    'access-control' => 'Contrôle d’Accès',
                    'all'            => 'Tous',
                    'back-btn'       => 'Retour',
                    'custom'         => 'Personnalisé',
                    'description'    => 'Description',
                    'general'        => 'Général',
                    'name'           => 'Nom',
                    'permissions'    => 'Autorisations',
                    'save-btn'       => 'Enregistrer le Rôle',
                    'title'          => 'Créer un Rôle',
                ],

                'edit' => [
                    'access-control' => 'Contrôle d’Accès',
                    'all'            => 'Tous',
                    'back-btn'       => 'Retour',
                    'custom'         => 'Personnalisé',
                    'description'    => 'Description',
                    'general'        => 'Général',
                    'name'           => 'Nom',
                    'permissions'    => 'Autorisations',
                    'save-btn'       => 'Enregistrer le Rôle',
                    'title'          => 'Éditer un Rôle',
                ],

                'being-used'        => 'Le rôle est utilisé par un vendeur',
                'create-success'    => 'Rôle créé avec succès',
                'delete-failed'     => 'Échec de la suppression du rôle',
                'delete-success'    => 'Rôle supprimé avec succès',
                'last-delete-error' => 'Au moins un rôle est requis',
                'update-success'    => 'Rôle mis à jour avec succès',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Créer un Utilisateur',
                    'create-title'     => 'Créer un Utilisateur',
                    'edit-title'       => 'Modifier l\'Utilisateur',
                    'email'            => 'E-mail',
                    'name'             => 'Nom',
                    'phone-number'     => 'Numéro de Téléphone',
                    'role'             => 'Rôle',
                    'save-btn'         => 'Enregistrer l\'Utilisateur',
                    'select-role'      => 'Sélectionner un Rôle',
                    'password'         => 'Mot de passe',
                    'confirm-password' => 'Confirmer le Mot de Passe',
                    'status'           => 'Statut',
                    'title'            => 'Utilisateurs',
                    'create-success'   => 'Utilisateur créé avec succès',
                    'update-success'   => 'Utilisateur mis à jour avec succès',
                    'delete-success'   => 'Utilisateur supprimé avec succès',
                    'delete-failed'    => 'Échec de la suppression de l’utilisateur',

                    'datagrid' => [
                        'delete'     => 'Supprimer',
                        'edit'       => 'Modifier',
                        'email'      => 'Email',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Nom',
                        'permission' => 'Permission',
                        'phone'      => 'Téléphone',

                        'status' => [
                            'title' => 'Statut',

                            'options' => [
                                'active'    => 'Actif',
                                'suspended' => 'Suspendu',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Créer une source d\'inventaire',
                    'title'      => 'Sources d’inventaire',

                    'datagrid' => [
                        'active'   => 'Actif',
                        'code'     => 'Code',
                        'delete'   => 'Supprimer',
                        'edit'     => 'Modifier',
                        'id'       => 'ID',
                        'inactive' => 'Inactif',
                        'name'     => 'Nom',
                        'priority' => 'Priorité',
                        'status'   => 'Statut',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Ajouter une source d’inventaire',
                    'address'        => 'Adresse de la source',
                    'back-btn'       => 'Retour',
                    'city'           => 'Ville',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informations de contact',
                    'contact-name'   => 'Nom',
                    'contact-number' => 'Numéro de contact',
                    'country'        => 'Pays',
                    'description'    => 'Description',
                    'general'        => 'Général',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nom',
                    'postcode'       => 'Code postal',
                    'priority'       => 'Priorité',
                    'save-btn'       => 'Enregistrer les sources d’inventaire',
                    'select-country' => 'Sélectionner un pays',
                    'select-state'   => 'Sélectionner un État',
                    'settings'       => 'Paramètres',
                    'state'          => 'État',
                    'status'         => 'Statut',
                    'street'         => 'Rue',
                    'title'          => 'Sources d’inventaire',
                ],

                'edit' => [
                    'back-btn'       => 'Retour',
                    'city'           => 'Ville',
                    'code'           => 'Code',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informations de contact',
                    'contact-name'   => 'Nom',
                    'contact-number' => 'Numéro de contact',
                    'country'        => 'Pays',
                    'description'    => 'Description',
                    'general'        => 'Général',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nom',
                    'postcode'       => 'Code postal',
                    'priority'       => 'Priorité',
                    'save-btn'       => 'Enregistrer les sources d’inventaire',
                    'select-country' => 'Sélectionner un pays',
                    'select-state'   => 'Sélectionner un État',
                    'settings'       => 'Paramètres',
                    'source-address' => 'Adresse de la source',
                    'state'          => 'État',
                    'status'         => 'Statut',
                    'street'         => 'Rue',
                    'title'          => 'Modifier les sources d’inventaire',
                ],

                'create-success'    => 'Source d’inventaire créée avec succès',
                'delete-failed'     => 'Échec de la suppression des sources d’inventaire',
                'delete-success'    => 'Sources d’inventaire supprimées avec succès',
                'last-delete-error' => 'Impossible de supprimer la dernière source d’inventaire',
                'update-success'    => 'Sources d’inventaire mises à jour avec succès',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Administrateur',
                'blocked-message'     => 'Vous avez été bloqué par un administrateur',
                'message-failed'      => 'Échec de l’envoi du message',
                'message-placeholder' => 'Tapez votre message ici...',
                'message-sent'        => 'Message envoyé avec succès',
                'no-message'          => 'Aucun message trouvé',
                'search-message'      => 'Rechercher un message...',
                'title'               => 'Communication',

                'filters' => [
                    'all-messages'      => 'Tous les messages',
                    'prev-fifteen-days' => '15 derniers jours',
                    'prev-seven-days'   => '7 derniers jours',
                    'prev-six-months'   => '6 derniers mois',
                    'prev-thirty-days'  => '30 derniers jours',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Paniers abandonnés',
                    'abandoned-products'            => 'Produits abandonnés',
                    'abandoned-rate'                => 'Taux d\'abandon',
                    'abandoned-revenue'             => 'Revenu abandonné',
                    'added-to-cart'                 => 'Ajouté au panier',
                    'added-to-cart-info'            => 'Seuls :progress visiteurs ont ajouté des produits au panier',
                    'all-channels'                  => 'Tous les canaux',
                    'average-order-value-over-time' => 'Valeur moyenne de la commande dans le temps',
                    'average-sales'                 => 'Valeur moyenne de la commande',
                    'commission'                    => 'Commission',
                    'commission-over-time'          => 'Commission au fil du temps',
                    'count'                         => 'Nombre',
                    'end-date'                      => 'Date de fin',
                    'id'                            => 'ID',
                    'interval'                      => 'Intervalle',
                    'name'                          => 'Nom',
                    'orders'                        => 'Commandes',
                    'orders-over-time'              => 'Commandes dans le temps',
                    'payment-method'                => 'Moyen de paiement',
                    'product-views'                 => 'Vues de produits',
                    'product-views-info'            => 'Seuls :progress visiteurs consultent des produits',
                    'purchase-funnel'               => 'Entonnoir d\'achat',
                    'purchased'                     => 'Achats',
                    'purchased-info'                => 'Seuls :progress visiteurs effectuent des achats',
                    'refunds'                       => 'Remboursements',
                    'refunds-over-time'             => 'Remboursements dans le temps',
                    'sales-over-time'               => 'Ventes dans le temps',
                    'start-date'                    => 'Date de début',
                    'tax-collected'                 => 'Taxes collectées',
                    'tax-collected-over-time'       => 'Taxes collectées dans le temps',
                    'title'                         => 'Ventes',
                    'top-payment-methods'           => 'Meilleurs moyens de paiement',
                    'top-tax-categories'            => 'Meilleures catégories fiscales',
                    'total'                         => 'Total',
                    'total-commission-paid'         => 'Commission totale payée',
                    'total-orders'                  => 'Total des commandes',
                    'total-sales'                   => 'Total des ventes',
                    'total-visits'                  => 'Total des visites',
                    'total-visits-info'             => 'Total des visiteurs sur le site',
                    'view-details'                  => 'Voir les détails',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Tous les canaux',
                    'count'                       => 'Nombre',
                    'customers'                   => 'Clients',
                    'customers-over-time'         => 'Clients dans le temps',
                    'customers-traffic'           => 'Trafic des clients',
                    'customers-with-most-orders'  => 'Clients avec le plus de commandes',
                    'customers-with-most-reviews' => 'Clients avec le plus d\'avis',
                    'customers-with-most-sales'   => 'Clients avec le plus de ventes',
                    'email'                       => 'E-mail',
                    'end-date'                    => 'Date de fin',
                    'id'                          => 'ID',
                    'interval'                    => 'Intervalle',
                    'name'                        => 'Nom',
                    'orders'                      => 'Commandes',
                    'reviews'                     => 'Avis',
                    'start-date'                  => 'Date de début',
                    'title'                       => 'Clients',
                    'top-customer-groups'         => 'Meilleurs groupes de clients',
                    'total'                       => 'Total',
                    'total-customers'             => 'Total des clients',
                    'total-visitors'              => 'Total des visiteurs',
                    'traffic-over-week'           => 'Trafic sur la semaine',
                    'unique-visitors'             => 'Visiteurs uniques',
                    'view-details'                => 'Voir les détails',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Tous les canaux',
                    'channel'                          => 'Canal',
                    'end-date'                         => 'Date de fin',
                    'id'                               => 'ID',
                    'interval'                         => 'Intervalle',
                    'locale'                           => 'Locale',
                    'name'                             => 'Nom',
                    'orders'                           => 'Commandes',
                    'price'                            => 'Prix',
                    'products-added-over-time'         => 'Produits ajoutés dans le temps',
                    'products-with-most-reviews'       => 'Produits avec le plus d\'avis',
                    'products-with-most-visits'        => 'Produits avec le plus de visites',
                    'quantities'                       => 'Quantités',
                    'quantities-sold-over-time'        => 'Quantités vendues dans le temps',
                    'revenue'                          => 'Revenu',
                    'reviews'                          => 'Avis',
                    'start-date'                       => 'Date de début',
                    'title'                            => 'Produits',
                    'top-selling-products-by-quantity' => 'Meilleurs produits vendus par quantité',
                    'top-selling-products-by-revenue'  => 'Meilleurs produits vendus par revenu',
                    'total'                            => 'Total',
                    'total-products-added-to-wishlist' => 'Produits ajoutés à la liste de souhaits',
                    'total-sold-quantities'            => 'Quantités de produits vendues',
                    'view-details'                     => 'Voir les détails',
                    'visits'                           => 'Visites',
                ],
            ],

            'view' => [
                'all-channels'  => 'Tous les canaux',
                'day'           => 'Jour',
                'end-date'      => 'Date de fin',
                'export-csv'    => 'Exporter en CSV',
                'export-xls'    => 'Exporter en XLS',
                'month'         => 'Mois',
                'not-available' => 'Aucun enregistrement disponible.',
                'start-date'    => 'Date de début',
                'year'          => 'Année',
            ],

            'empty' => [
                'info'  => 'Aucune donnée disponible pour la période sélectionnée',
                'title' => 'Aucune donnée disponible',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Désactivé',
                'enabled'   => 'Activé',
                'info'      => 'Créez, gérez et développez votre boutique en ligne avec les extensions eCommerce personnalisables de Bagisto.',
                'no-result' => 'Aucune extension disponible ici.',
                'title'     => 'Extensions',

                'filters' => [
                    'all-extensions' => 'Toutes les extensions',
                    'bulk_upload'    => 'Téléversement en masse',
                    'gdpr'           => 'RGPD',
                    'marketplace'    => 'Marché',
                    'payment'        => 'Paiement',
                    'pos'            => 'PDV',
                    'shipping'       => 'Expédition',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Logo du vendeur',
                'switch-to-store' => 'Passer à la gestion de la boutique',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'Le montant minimum de commande pour :shop_title est',
                'product-not-available' => 'Le produit n’est pas disponible',
                'sold-by'               => 'Vendu par',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Paiement en :days jours',
                'deals-in'            => 'Transactions en',
                'featured-seller'     => 'Nos vendeurs en vedette',
                'online-business'     => 'Commerce en ligne',
                'reviews'             => ':count Avis',
                'seller-community'    => 'Communauté de vendeurs',
                'serviceable-pincode' => 'Code postal serviceable',
                'start-selling'       => 'Commencez à vendre avec de grands clients du monde entier, 24 heures sur 24.',
                'step'                => 'Étape :count',
                'visit-shop'          => 'Visitez la boutique',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Ajouter au panier',
            'delivery-info' => 'Les informations de livraison se trouvent ici',
            'hide'          => 'Masquer',
            'more-info'     => 'Plus d\'informations',
            'seller-count'  => ':count autres vendeurs vendent le même produit',
            'seller-info'   => 'Informations sur le vendeur',
            'sold-by'       => 'Vendu par',
            'top-selling'   => 'Meilleure vente',

            'flag' => [
                'alert'              => 'Alerte',
                'already-reported'   => 'Vous avez déjà signalé ce produit',
                'create-success'     => 'Produit signalé avec succès',
                'guest-alert'        => 'Vous devez vous connecter pour signaler ce produit',
                'not-allowed'        => 'Vous ne pouvez pas signaler ce produit sans passer commande',
                'other-reason'       => 'Autre raison',
                'reason'             => 'Raison',
                'reason-placeholder' => 'Veuillez préciser la raison',
                'report-product'     => 'Signaler un produit',
                'select-reason'      => 'Sélectionnez une raison',
                'submit-btn'         => 'Soumettre',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Le vendeur n\'est pas encore approuvé',
                'products-count'  => 'Produits (:count)',
                'reviews-count'   => 'Avis (:count)',
                'search-text'     => 'Rechercher des produits',

                'about' => [
                    'title'           => 'À propos',
                    'about-us'        => 'À propos de nous',
                    'shipping-policy' => 'Politique d\'expédition',
                    'privacy-policy'  => 'Politique de confidentialité',
                    'return-policy'   => 'Politique de retour',
                ],

                'contact-form' => [
                    'title'          => 'Contact',
                    'name'           => 'Nom',
                    'email'          => 'E-mail',
                    'subject'        => 'Sujet',
                    'query'          => 'Demande',
                    'submit-btn'     => 'Envoyer',
                    'create-success' => 'Votre demande a été envoyée avec succès',
                ],

                'share' => [
                    'title'     => 'Partager',
                    'share-on'  => 'Partager sur',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Alerte',
                    'already-reported'   => 'Vous avez déjà signalé ce vendeur',
                    'create-success'     => 'Vendeur signalé avec succès',
                    'guest-alert'        => 'Vous devez vous connecter pour signaler ce vendeur',
                    'not-allowed'        => 'Vous ne pouvez pas signaler ce vendeur sans avoir passé une commande',
                    'other-reason'       => 'Autre raison',
                    'reason'             => 'Raison',
                    'reason-placeholder' => 'Veuillez préciser la raison',
                    'select-reason'      => 'Sélectionner une raison',
                    'submit-btn'         => 'Soumettre',
                    'title'              => 'Signaler un problème',
                ],

                'reviews' => [
                    'alert'            => 'Alerte',
                    'already-reviewed' => 'Vous avez déjà évalué ce vendeur',
                    'comment'          => 'Commentaire',
                    'create-success'   => 'Vendeur évalué avec succès',
                    'customer-review'  => ':count Avis client',
                    'customer-reviews' => 'Avis des clients',
                    'guest-alert'      => 'Vous devez vous connecter pour signaler le vendeur',
                    'rating'           => 'Évaluation',
                    'review-by'        => 'Évaluation par',
                    'submit-btn'       => 'Soumettre',
                    'title'            => 'Titre',
                    'view-all'         => 'Voir toutes les évaluations',
                    'write-review'     => 'Écrire un avis',
                ],

                'products' => [
                    'no-result' => 'Aucun produit disponible ici',
                    'show'      => 'Afficher',

                    'sort-by' => [
                        'title' => 'Trier par',

                        'options' => [
                            'cheapest-first'  => 'Les moins chers en premier',
                            'expensive-first' => 'Les plus chers en premier',
                            'from-a-z'        => 'De A à Z',
                            'from-z-a'        => 'De Z à A',
                            'latest-first'    => 'Les plus récents en premier',
                            'oldest-first'    => 'Les plus anciens en premier',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Tout effacer',
                        'filter'      => 'Filtrer',
                        'filters'     => 'Filtres :',
                        'price-range' => 'Plage de prix',
                        'sort'        => 'Trier',
                    ],
                ],
            ],
        ],
    ],
];
