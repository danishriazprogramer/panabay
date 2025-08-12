<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Pazar Yeri',
                    'info'  => 'Pazar Yerini Yönetin',

                    'module-info' => [
                        'title'       => 'Modül Bilgileri',
                        'info'        => 'Uygulama sürümüyle ilgili bilgileri sağlar.',
                        'app-version' => 'Uygulama Sürümü: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Yönetici Komisyon Yüzdesi',
                        'description'                  => 'Pazar yerinin genel ayarlarını yönetin.',
                        'lines-in-street-address'      => 'Adres Satır Sayısı',
                        'lines-in-street-address-info' => 'Adres satır sayısını belirleyin. Varsayılan bir satırdır.',
                        'status'                       => 'Durum',
                        'title'                        => 'Genel',
                    ],

                    'product' => [
                        'approval-required'         => 'Onay Gerekli',
                        'description'               => 'Pazar yeri ürün ayarlarını yönetin.',
                        'enable-flag'               => 'Bayrak Etkinleştir',
                        'seller-can-assign-product' => 'Satıcı Ürün Atayabilir',
                        'seller-can-create-product' => 'Satıcı Ürün Oluşturabilir',
                        'show-progress-bar'         => 'İlerleme Çubuğunu Göster',
                        'title'                     => 'Ürün',
                    ],

                    'seller' => [
                        'approval-required'           => 'Onay Gerekiyor',
                        'can-cancel-order'            => 'Siparişi İptal Edebilir',
                        'can-create-invoice'          => 'Fatura Oluşturabilir',
                        'can-create-shipment'         => 'Sevkiyat Oluşturabilir',
                        'description'                 => 'Pazar yeri satıcı ayarlarını onay, bayraklar vb. gibi yönetin.',
                        'enable-flag'                 => 'Bayrağı Etkinleştir',
                        'enable-minimum-order-amount' => 'Minimum Sipariş Tutarını Etkinleştir',
                        'enable-seller-flag'          => 'Satıcı Bayrağını Etkinleştir',
                        'red-flag-limit'              => 'Kırmızı Bayrak Limiti',
                        'red-flag-limit-info'         => 'Satıcı bu limiti aşarsa, satıcı profiline kırmızı bayrak eklenir.',
                        'show-red-flag'               => 'Limit aşılırsa profilde kırmızı bayrağı göster',
                        'title'                       => 'Satıcı',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Sınır Sayısı',
                        'description' => 'Pazar yerinin öne çıkan satıcılarını yönetin.',
                        'status'      => 'Durum',
                        'title'       => 'Öne Çıkan Satıcılar',

                        'popularity-criteria' => [
                            'all'              => 'Hepsi',
                            'maximum-orders'   => 'Maksimum Siparişler',
                            'maximum-products' => 'Maksimum Ürünler',
                            'maximum-rating'   => 'Maksimum Derecelendirme',
                            'maximum-sale'     => 'Maksimum Satış',
                            'title'            => 'Popülerlik Kriterleri',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Banner Düğme Başlığı',
                        'banner-description'  => 'Banner Açıklama',
                        'banner-image'        => 'Banner Görseli',
                        'banner-title'        => 'Banner Başlık',
                        'business-hour'       => 'İş Saati',
                        'community-count'     => 'Topluluk Sayısı',
                        'description'         => 'Pazar yerinin ana sayfasını, yeni bir görünüm için simgeler, afişler ve açıklamalar ekleyerek özelleştirin.',
                        'feature-box1-desc'   => 'Özellik Kutusu 1 Açıklaması',
                        'feature-box1-icon'   => 'Özellik Kutusu 1 İkonu',
                        'feature-box1-title'  => 'Özellik Kutusu 1 Başlığı',
                        'feature-box2-desc'   => 'Özellik Kutusu 2 Açıklaması',
                        'feature-box2-icon'   => 'Özellik Kutusu 2 İkonu',
                        'feature-box2-title'  => 'Özellik Kutusu 2 Başlığı',
                        'feature-box3-desc'   => 'Özellik Kutusu 3 Açıklaması',
                        'feature-box3-icon'   => 'Özellik Kutusu 3 İkonu',
                        'feature-box3-title'  => 'Özellik Kutusu 3 Başlığı',
                        'feature-box4-desc'   => 'Özellik Kutusu 4 Açıklaması',
                        'feature-box4-icon'   => 'Özellik Kutusu 4 İkonu',
                        'feature-box4-title'  => 'Özellik Kutusu 4 Başlığı',
                        'feature-description' => 'Özellik Açıklaması',
                        'feature-image'       => 'Özellik Resmi',
                        'feature-title'       => 'Özellik Başlığı',
                        'journey-description' => 'Yolculuk Açıklaması',
                        'journey-image'       => 'Yolculuk Resmi',
                        'journey-step1-desc'  => 'Yolculuk Adım 1 Açıklaması',
                        'journey-step1-icon'  => 'Yolculuk Adım 1 İkonu',
                        'journey-step1-title' => 'Yolculuk Adım 1 Başlığı',
                        'journey-step2-desc'  => 'Yolculuk Adım 2 Açıklaması',
                        'journey-step2-icon'  => 'Yolculuk Adım 2 İkonu',
                        'journey-step2-title' => 'Yolculuk Adım 2 Başlığı',
                        'journey-step3-desc'  => 'Yolculuk Adım 3 Açıklaması',
                        'journey-step3-icon'  => 'Yolculuk Adım 3 İkonu',
                        'journey-step3-title' => 'Yolculuk Adım 3 Başlığı',
                        'journey-step4-desc'  => 'Yolculuk Adım 4 Açıklaması',
                        'journey-step4-icon'  => 'Yolculuk Adım 4 İkonu',
                        'journey-step4-title' => 'Yolculuk Adım 4 Başlığı',
                        'journey-step5-desc'  => 'Yolculuk Adım 5 Açıklaması',
                        'journey-step5-icon'  => 'Yolculuk Adım 5 İkonu',
                        'journey-step5-title' => 'Yolculuk Adım 5 Başlığı',
                        'journey-title'       => 'Yolculuk Başlığı',
                        'payment-duration'    => 'Ödeme Süresi',
                        'serviceable-pincode' => 'Hizmet Verilebilir Posta Kodu',
                        'title'               => 'İniş Sayfası',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Ürün Ata',
            'communications'    => 'İletişim',
            'create'            => 'Oluştur',
            'delete'            => 'Sil',
            'edit'              => 'Düzenle',
            'flag-reasons'      => 'Bildirme Sebepleri',
            'inventory-sources' => 'Envanter Kaynakları',
            'orders'            => 'Siparişler',
            'pay'               => 'Öde',
            'payment-request'   => 'Ödeme Talebi',
            'product-reviews'   => 'Ürün İncelemeleri',
            'products'          => 'Ürünler',
            'reviews'           => 'Satıcı İncelemeleri',
            'seller-categories' => 'Satıcı Kategorileri',
            'sellers'           => 'Satıcılar',
            'title'             => 'Pazar',
            'transactions'      => 'İşlemler',
            'view'              => 'Görüntüle',
        ],

        'menu' => [
            'communications'    => 'İletişim',
            'flag-reasons'      => 'Bayrak Nedenleri',
            'inventory-sources' => 'Envanter Kaynakları',
            'orders'            => 'Siparişler',
            'payment-requests'  => 'Ödeme Talepleri',
            'product-reviews'   => 'Ürün İncelemeleri',
            'products'          => 'Ürünler',
            'seller-categories' => 'Satıcı Kategorileri',
            'seller-reviews'    => 'Satıcı İncelemeleri',
            'sellers'           => 'Satıcılar',
            'title'             => 'Pazar Yeri',
            'transactions'      => 'İşlemler',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Satıcı Ekle',
                'delete-failed'      => 'Satıcı silme başarısız oldu!',
                'delete-success'     => 'Satıcı başarıyla silindi.',
                'incomplete-profile' => 'Satıcının eksik bir profili var!',
                'login-message'      => ':seller_name olarak giriş yaptınız',
                'pending-orders'     => 'Satıcıda bazı bekleyen siparişler var',
                'title'              => 'Satıcılar',
                'update-success'     => 'Satıcı başarıyla güncellendi!',

                'datagrid' => [
                    'add-product'     => 'Ekle',
                    'approved'        => 'Onaylandı',
                    'assign-product'  => 'Ürün Ata',
                    'created-at'      => 'Oluşturulma Tarihi',
                    'delete'          => 'Sil',
                    'disapproved'     => 'Onaylanmadı',
                    'edit'            => 'Düzenle',
                    'email'           => 'E-posta',
                    'flags'           => 'Bayraklar',
                    'id'              => 'Kimlik',
                    'login-as-seller' => 'Satıcı olarak giriş yap',
                    'seller-id'       => 'Kimlik - :seller_id',
                    'seller-name'     => 'Satıcı Adı',
                    'shop-url'        => 'Mağaza URL',
                    'status'          => 'Durum',
                    'suspended'       => 'Askıya Alındı',
                    'total-flags'     => 'Toplam Bayraklar: :count',
                    'update-status'   => 'Durumu Güncelle',
                ],

                'create'  => [
                    'address'        => 'Adres',
                    'city'           => 'Şehir',
                    'country'        => 'Ülke',
                    'email'          => 'E-posta',
                    'name'           => 'Ad',
                    'phone'          => 'Telefon Numarası',
                    'postcode'       => 'Posta Kodu',
                    'save-btn'       => 'Kaydet',
                    'select'         => 'Seç',
                    'shop-title'     => 'Mağaza Başlığı',
                    'shop-url'       => 'Mağaza URL\'si',
                    'state'          => 'Eyalet',
                    'street-address' => 'Sokak Adresi',
                    'success'        => 'Satıcı başarıyla oluşturuldu.',
                    'title'          => 'Satıcı Oluştur',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Satıcı Bayrakları',

                    'datagrid' => [
                        'id'             => 'Kimlik',
                        'customer-name'  => 'Müşteri Adı',
                        'customer-email' => 'Müşteri E-postası',
                        'date'           => 'Tarih',
                        'reason'         => 'Sebep',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Geri',
                'image-placeholder' => 'Ürün Resmi',
                'no-result'         => 'Sonuç bulunamadı!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Ürünleri Ara',
            ],

            'assign-product' => [
                'already-selling'     => 'Satıcı bu ürünü zaten satıyor',
                'assign-successfully' => 'Ürün başarıyla satıcıya atandı.',
                'back-btn'            => 'Geri',
                'condition'           => 'Durum',
                'description'         => 'Açıklama',
                'new'                 => 'Yeni',
                'old'                 => 'Eski',
                'price'               => 'Fiyat',
                'product-not-allowed' => 'Satıcıya :type türündeki ürünleri satma izni yok.',
                'quantities'          => 'Miktarlar',
                'save-btn'            => 'Kaydet',
                'select-condition'    => 'Durum Seçin',
                'title'               => 'Ürün Atama',

                'seller-details' => [
                    'additional-info' => 'Ek Bilgiler',
                    'approved'        => 'Onaylandı',
                    'disapproved'     => 'Reddedildi',
                    'no-of-products'  => 'Ürün Sayısı',
                    'status'          => 'Durum',
                    'suspended'       => 'Askıya Alındı',
                    'title'           => 'Satıcı Detayları',
                ],

                'product-details' => [
                    'active'            => 'Aktif',
                    'disable'           => 'Devre Dışı Bırak',
                    'title'             => 'Ürün Detayları',
                    'image-placeholder' => 'Ürün Görseli',
                ],

                'images' => [
                    'info'  => 'Resim çözünürlüğü 609 piksel X 560 piksel gibi olmalıdır',
                    'title' => 'Resimler',
                ],

                'videos' => [
                    'error' => 'Video :max kilobayttan büyük olamaz. Lütfen daha küçük bir dosya seçin.',
                    'info'  => 'Maksimum video boyutu :size gibi olmalıdır',
                    'title' => 'Videolar',
                ],

                'configurable' => [
                    'delete-btn'        => 'Sil',
                    'edit-btn'          => 'Düzenle',
                    'image-placeholder' => 'Ürün Resmi',
                    'qty'               => 'Adet - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Değişkenler',

                    'edit' => [
                        'images'     => 'Resimler',
                        'price'      => 'Fiyat',
                        'quantities' => 'Miktarlar',
                        'save-btn'   => 'Kaydet',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Bağlantı Ekle',
                        'delete-btn'  => 'Sil',
                        'edit-btn'    => 'Düzenle',
                        'empty-info'  => 'Hemen bağlantı oluşturmak için.',
                        'empty-title' => 'Bağlantı Ekle',
                        'file'        => 'Dosya: ',
                        'info'        => 'İndirilebilir ürün türü, e-kitaplar, yazılım uygulamaları, müzik, oyunlar vb. gibi dijital ürünleri satmanıza izin verir.',
                        'sample-file' => 'Örnek Dosya: ',
                        'sample-url'  => 'Örnek URL: ',
                        'title'       => 'İndirilebilir Bağlantılar',
                        'url'         => 'URL: ',

                        'update-create' => [
                            'downloads'   => 'İndirme İzni Var',
                            'file'        => 'Dosya',
                            'file-type'   => 'Dosya Türü',
                            'name'        => 'Başlık',
                            'price'       => 'Fiyat',
                            'sample'      => 'Örnek',
                            'sample-type' => 'Örnek Türü',
                            'save-btn'    => 'Kaydet',
                            'title'       => 'Bağlantı',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Örnek Ekle',
                        'delete-btn'  => 'Sil',
                        'edit-btn'    => 'Düzenle',
                        'empty-info'  => 'Hemen örnek oluşturmak için.',
                        'empty-title' => 'Örnek Ekle',
                        'file'        => 'Dosya: ',
                        'info'        => 'İndirilebilir ürün türü, e-kitaplar, yazılım uygulamaları, müzik, oyunlar vb. gibi dijital ürünleri satmanıza izin verir.',
                        'title'       => 'İndirilebilir Örnekler',
                        'url'         => 'URL: ',

                        'update-create' => [
                            'file'      => 'Dosya',
                            'file-type' => 'Dosya Türü',
                            'name'      => 'Başlık',
                            'save-btn'  => 'Kaydet',
                            'title'     => 'Bağlantı',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Geri',
                'suspended'      => 'Askıya Alındı',
                'title'          => 'Satıcıyı Düzenle',
                'update-btn'     => 'Satıcıyı Güncelle',
                'update-success' => 'Satıcı Başarıyla Güncellendi',

                'shop' => [
                    'address'          => 'Adres',
                    'city'             => 'Şehir',
                    'country'          => 'Ülke',
                    'description'      => 'Açıklama',
                    'email'            => 'E-posta',
                    'name'             => 'Ad',
                    'phone-number'     => 'Telefon Numarası',
                    'postcode'         => 'Posta Kodu',
                    'select'           => 'Seçim',
                    'shop-title'       => 'Mağaza Başlığı',
                    'state'            => 'Eyalet',
                    'street-address'   => 'Sokak Adresi',
                    'title'            => 'Mağaza Detayları',
                    'url'              => 'Mağaza URL',
                ],

                'profile' => [
                    'banner'       => 'Profil Banner\'ı',
                    'banner-size'  => 'Banner boyutu 300px X 200px gibi olmalıdır',
                    'logo'         => 'Profil Logosu',
                    'logo-size'    => 'Logo boyutu 125px X 125px gibi olmalıdır',
                    'social-links' => ':name Linki',
                    'title'        => 'Profil Detayları',
                ],

                'allowed-product' => [
                    'title' => 'İzin Verilen Ürün',
                ],

                'minimum-order-amount' => [
                    'title' => 'Minimum Sipariş Tutarı',
                ],

                'google-analytics-id' => [
                    'title' => 'Google Analytics Kimliği',
                ],

                'commission' => [
                    'percentage' => 'Yüzde',
                    'status'     => 'Durum',
                    'title'      => 'Satıcı Komisyonu',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Açıklama',
                    'meta-keyword'     => 'Meta Anahtar Kelime',
                    'meta-title'       => 'Meta Başlık',
                    'title'            => 'Meta Bilgisi',
                ],

                'policy' => [
                    'privacy'  => 'Gizlilik Politikası',
                    'return'   => 'İade Politikası',
                    'shipping' => 'Kargo Politikası',
                    'title'    => 'Politikalar',
                ],

                'channels' => [
                    'title' => 'Kanal',
                ],

                'users' => [
                    'email' => 'E-posta',
                    'id'    => 'Kimlik',
                    'name'  => 'Ad',
                    'phone' => 'Telefon',
                    'title' => 'Kullanıcılar',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Ürün Ekle',
                'delete-success' => 'Ürün başarıyla silindi.',
                'title'          => 'Ürünler',
                'update-success' => 'Ürün başarıyla güncellendi.',

                'datagrid' => [
                    'approved'       => 'Onaylandı',
                    'delete'         => 'Sil',
                    'disapproved'    => 'Onaylanmadı',
                    'flags'          => 'Bayraklar',
                    'id'             => 'ID',
                    'is-owner'       => 'Sahip',
                    'no'             => 'Hayır',
                    'out-of-stock'   => 'Stokta Yok',
                    'price'          => 'Fiyat',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Ürün Adı',
                    'product-number' => 'Ürün Numarası',
                    'product-type'   => 'Ürün Türü',
                    'quantity'       => 'Miktar',
                    'seller-name'    => 'Satıcı Adı',
                    'sku'            => 'SKU',
                    'status'         => 'Durum',
                    'total-flags'    => 'Toplam Bayraklar: :count',
                    'total-quantity' => ':quantity Mevcut',
                    'update-status'  => 'Durumu Güncelle',
                    'yes'            => 'Evet',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Ürün Bayrakları',

                    'datagrid' => [
                        'customer-email' => 'Müşteri E-postası',
                        'customer-name'  => 'Müşteri Adı',
                        'date'           => 'Tarih',
                        'id'             => 'ID',
                        'reason'         => 'Sebep',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'İnceleme Detayları',
                'title'          => 'Ürün İncelemeleri',

                'datagrid' => [
                    'approved'      => 'Onaylandı',
                    'comment'       => 'Yorum',
                    'customer-name' => 'Müşteri Adı',
                    'date'          => 'Tarih',
                    'disapproved'   => 'Onaylanmadı',
                    'id'            => 'ID',
                    'images'        => 'Resimler',
                    'pending'       => 'Beklemede',
                    'product'       => 'Ürün',
                    'product-name'  => 'Ürün Adı',
                    'rating'        => 'Puan',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Mağaza Başlığı',
                    'status'        => 'Durum',
                    'title'         => 'Başlık',
                    'update-status' => 'Güncelleme Durumu',
                    'view'          => 'Görüntüle',
                ],
            ],

            'update-success' => 'Ürün değerlendirmeleri başarıyla güncellendi',
            'delete-success' => 'Ürün değerlendirmeleri başarıyla silindi',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Satıcı Yorumları',

                'datagrid' => [
                    'approved'            => 'Onaylandı',
                    'comment'             => 'Yorum',
                    'customer-name'       => 'Müşteri Adı',
                    'date'                => 'Tarih',
                    'delete'              => 'Sil',
                    'disapproved'         => 'Reddedildi',
                    'id'                  => 'Kimlik',
                    'mass-delete-success' => 'Satıcı yorumları başarıyla silindi.',
                    'mass-update-success' => 'Satıcı yorumları başarıyla güncellendi.',
                    'pending'             => 'Beklemede',
                    'rating'              => 'Puan',
                    'review-id'           => 'Kimlik - :review_id',
                    'review-title'        => 'Yorum Başlığı',
                    'seller-name'         => 'Satıcı Adı',
                    'shop-title'          => 'Mağaza Başlığı',
                    'status'              => 'Durum',
                    'update-status'       => 'Durumu Güncelle',
                ],
            ],

            'delete-success' => 'Satıcı yorumu başarıyla silindi.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Siparişler',

                'datagrid' => [
                    'canceled'        => 'İptal Edildi',
                    'closed'          => 'Kapatıldı',
                    'commission'      => 'Komisyon',
                    'completed'       => 'Tamamlandı',
                    'customer'        => 'Müşteri',
                    'date'            => 'Tarih',
                    'discount'        => 'İndirim',
                    'email'           => 'E-posta',
                    'fraud'           => 'Dolandırıcılık',
                    'gross-amt'       => 'Toplam Tutar',
                    'id'              => 'ID',
                    'items'           => 'Ürünler',
                    'location'        => 'Konum',
                    'order-id'        => 'Sipariş ID - #:id',
                    'payment'         => 'Ödeme',
                    'pending'         => 'Beklemede',
                    'pending-payment' => 'Beklemede Ödeme',
                    'processing'      => 'İşleniyor',
                    'seller'          => 'Satıcı',
                    'seller-earn'     => 'Kazanç',
                    'shipment'        => 'Gönderi',
                    'shop'            => 'Mağaza',
                    'status'          => 'Durum',
                    'view'            => 'Görüntüle',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'İşlemler',

                'datagrid' => [
                    'base-total'     => 'Taban Toplam',
                    'comment'        => 'Yorum',
                    'customer-name'  => 'Müşteri Adı',
                    'id'             => 'ID',
                    'seller-id'      => 'Satıcı ID',
                    'seller-name'    => 'Satıcı Adı',
                    'transaction-id' => 'İşlem ID',
                    'view'           => 'Görüntüle',
                ],
            ],

            'view' => [
                'commission'        => 'Komisyon',
                'created-on'        => ':date tarihinde oluşturuldu',
                'name'              => 'Ad',
                'payment-method'    => ':method Ödeme',
                'price'             => 'Fiyat',
                'qty'               => 'Miktar',
                'seller-total'      => 'Satıcı Toplamı',
                'shipping-handling' => 'Kargo ve Taşıma',
                'subtotal'          => 'Ara Toplam',
                'tax'               => 'Vergi',
                'title'             => 'İşlemler #:transaction_id',
                'total'             => 'Toplam',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Neden Oluştur',
                'delete-success'      => 'Bayrak Nedeni başarıyla silindi.',
                'mass-delete-success' => 'Bayrak Nedenleri başarıyla silindi.',
                'mass-update-success' => 'Bayrak Nedenleri başarıyla güncellendi.',
                'title'               => 'Bayrak Nedenleri',

                'datagrid' => [
                    'delete'        => 'Sil',
                    'edit'          => 'Düzenle',
                    'id'            => 'Kimlik',
                    'name'          => 'Ad',
                    'update-status' => 'Durumu Güncelle',

                    'status' => [
                        'active'  => 'Aktif',
                        'disable' => 'Devre Dışı',
                        'title'   => 'Durum',
                    ],

                    'type' => [
                        'product' => 'Ürün',
                        'seller'  => 'Satıcı',
                        'title'   => 'Tür',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Yönetici',
                'back-btn' => 'Geri',
                'general'  => 'Genel',
                'label'    => 'Etiket',
                'product'  => 'Ürün',
                'save-btn' => 'Nedeni Kaydet',
                'seller'   => 'Satıcı',
                'status'   => 'Durum',
                'title'    => 'Neden Oluştur',
                'type'     => 'Tür',
            ],

            'edit' => [
                'admin'    => 'Yönetici',
                'back-btn' => 'Geri',
                'general'  => 'Genel',
                'label'    => 'Etiket',
                'product'  => 'Ürün',
                'save-btn' => 'Nedeni Kaydet',
                'seller'   => 'Satıcı',
                'status'   => 'Durum',
                'title'    => 'Nedeni Düzenle',
                'type'     => 'Tür',
            ],

            'create-success' => 'Bayrak Nedeni başarıyla oluşturuldu.',
            'update-success' => 'Bayrak Nedeni başarıyla güncellendi.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Kategori Ata',
                'create-success' => 'Kategori başarıyla atandı.',
                'delete-failed'  => 'Satıcı bayrak nedeni silme başarısız!',
                'delete-success' => 'Kategori Başarıyla Silindi.',
                'title'          => 'Satıcı Kategorileri',
                'update-success' => 'Kategori Başarıyla Güncellendi.',

                'datagrid' => [
                    'delete' => 'Sil',
                    'edit'   => 'Düzenle',
                    'id'     => 'ID',
                    'name'   => 'Adı',
                ],
            ],

            'create' => [
                'back-btn'      => 'Geri',
                'save-btn'      => 'Kategoriyi Kaydet',
                'select-seller' => 'Satıcı Seç',
                'seller'        => 'Satıcı',
                'title'         => 'Kategori Ata',
            ],

            'edit' => [
                'back-btn'   => 'Geri',
                'seller'     => 'Satıcı',
                'title'      => 'Kategoriyi Düzenle',
                'update-btn' => 'Kategoriyi Güncelle',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Yorum',
                'no-amount-remaining'  => 'Ödenecek tutar kalmadı!',
                'order-not-found'      => 'Sipariş Bulunamadı!',
                'pay-btn'              => 'Şimdi Öde',
                'pay-to-seller'        => 'Satıcıya Ödeme Yap',
                'payment-success'      => 'Satıcı başarıyla ödendi!',
                'something-went-wrong' => 'Bir şeyler yanlış gitti!',
                'title'                => 'Ödeme Talepleri',

                'datagrid' => [
                    'already-paid'          => 'Zaten Ödendi',
                    'canceled'              => 'İptal Edildi',
                    'closed'                => 'Kapalı',
                    'completed'             => 'Tamamlandı',
                    'customer-name'         => 'Müşteri Adı',
                    'date'                  => 'Tarih',
                    'email'                 => 'E-posta',
                    'fraud'                 => 'Sahtekarlık',
                    'gross-amt'             => 'Brüt Miktar',
                    'id'                    => 'Sipariş Kimliği',
                    'invoice-pending'       => 'Fatura Bekliyor',
                    'order-canceled'        => 'Sipariş İptal Edildi',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Ödeme',
                    'pending'               => 'Beklemede',
                    'pending-payment'       => 'Ödeme Bekliyor',
                    'processing'            => 'İşleniyor',
                    'refunded'              => 'İade Edildi',
                    'remaining-total'       => 'Kalan Toplam',
                    'request-payment'       => 'Ödeme Talebi',
                    'seller'                => 'Satıcı',
                    'seller-total-invoiced' => 'Satıcı Toplam Faturalandı',
                    'shop'                  => 'Mağaza',
                    'status'                => 'Durum',
                    'total-paid'            => 'Toplam Ödenen',
                    'view'                  => 'Görüntüle',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Satıcıyı Engelle',
                'block-success'        => 'Satıcı Başarıyla Engellendi!',
                'chat-history-cleared' => 'Sohbet Geçmişi Başarıyla Temizlendi!',
                'clear-chat-history'   => 'Sohbet Geçmişini Temizle',
                'exit'                 => 'Çıkış',
                'message-failed'       => 'Mesaj gönderimi başarısız oldu!',
                'message-sent'         => 'Mesaj başarıyla gönderildi!',
                'no-message'           => 'Mesaj Bulunamadı!',
                'search'               => 'Ara',
                'search-message'       => 'Mesaj Ara',
                'seller-blocked'       => 'Bu satıcıyı engellediniz. Bu satıcıya mesaj gönderemezsiniz.',
                'sellers'              => 'Satıcılar',
                'title'                => 'İletişim',
                'type-message'         => 'Mesajınızı buraya yazın...',
                'unblock-seller'       => 'Satıcının Engelini Kaldır',
                'unblock-success'      => 'Satıcının Engeli Başarıyla Kaldırıldı!',
                'welcome-message'      => 'Pazar Yeri İletişimine Hoş Geldiniz!',

                'filters' => [
                    'all-messages'      => 'Tüm Mesajlar',
                    'prev-fifteen-days' => 'Son 15 Gün',
                    'prev-seven-days'   => 'Son 7 Gün',
                    'prev-six-months'   => 'Son 6 Ay',
                    'prev-thirty-days'  => 'Son 30 Gün',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Envanter Kaynakları',

                'datagrid' => [
                    'active'      => 'Aktif',
                    'code'        => 'Kod',
                    'id'          => 'ID',
                    'inactive'    => 'Pasif',
                    'name'        => 'Adı',
                    'seller-name' => 'Satıcı Adı',
                    'shop-title'  => 'Mağaza Başlığı',
                    'status'      => 'Durum',
                ],

                'view' => [
                    'active'         => 'Aktif',
                    'address'        => 'Kaynak Adresi',
                    'city'           => 'Şehir',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-posta',
                    'contact-fax'    => 'Faks',
                    'contact-info'   => 'İletişim Bilgileri',
                    'contact-name'   => 'İsim',
                    'contact-number' => 'İletişim Numarası',
                    'country'        => 'Ülke',
                    'description'    => 'Açıklama',
                    'general-info'   => 'Genel Bilgiler',
                    'inactive'       => 'Pasif',
                    'latitude'       => 'Enlem',
                    'longitude'      => 'Boylam',
                    'name'           => 'Adı',
                    'postcode'       => 'Posta Kodu',
                    'priority'       => 'Öncelik',
                    'seller-info'    => 'Satıcı Bilgileri',
                    'seller-name'    => 'Satıcı Adı',
                    'settings'       => 'Ayarlar',
                    'shop-title'     => 'Mağaza Başlığı',
                    'state'          => 'Eyalet',
                    'street'         => 'Sokak',
                    'title'          => 'Envanter Kaynağı #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Marketplace paketini yükleyin.',
            'migrate'     => 'Tüm tablolar veritabanına taşınıyor (biraz zaman alabilir)...',
            'seed'        => 'Veritabanına veri ekleniyor...',
            'publish'     => 'Varlıklar ve yapılandırmalar yayınlanıyor...',
            'cache'       => 'Önbellek temizleniyor...',
            'finish'      => 'Marketplace paketi başarıyla yüklendi.',
        ],

        'version' => [
            'description' => 'Marketplace paketinin mevcut sürümünü görüntüler.',
            'comment'     => 'Marketplace Sürümü: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Sayın :customer_name',
        'dear-admin'  => 'Sayın Yönetici',
        'dear-seller' => 'Sayın satıcı',

        'seller' => [
            'registration' => [
                'date'        => 'Kayıt Tarihi:',
                'description' => 'Platformumuzda yeni bir satıcı kaydı hakkında sizi bilgilendirmekten mutluluk duyuyoruz. Lütfen bir anınızı ayırarak satıcıyı platformumuza hoş geldiniz demeye davet edin.',
                'details'     => 'İşte detaylar:',
                'email'       => 'E-posta Adresi:',
                'greeting'    => 'Umarım bu mesaj sizi iyi bulur.',
                'name'        => 'Satıcı Adı:',
                'shop'        => 'Mağaza URL\'si:',
                'subject'     => 'Yeni Satıcı Kaydı',
            ],

            'forgot-password' => [
                'description'    => 'Bu e-postayı alıyorsunuz çünkü hesabınız için bir şifre sıfırlama isteği aldık.',
                'greeting'       => 'Şifreyi unuttunuz!',
                'reset-password' => 'Şifreyi sıfırla',
                'subject'        => 'Şifre Sıfırlama E-postası',
            ],

            'welcome' => [
                'description' => 'Gemimize hoş geldiniz! Sizi ailemize katıldığınız için çok mutluyuz. Satıcı olarak varlığınız, platformumuza büyük bir değer katıyor ve başarılı bir iş ortaklığına dört gözle bekliyoruz.',
                'greeting'    => 'Hoş geldiniz ve bize kaydolduğunuz için teşekkür ederiz!',
                'subject'     => 'Satıcı Hoş Geldin Bildirimi',
            ],

            'approval' => [
                'approved'    => 'Satıcı olma talebiniz onaylandı.',
                'disapproved' => 'Satıcı olma talebiniz reddedildi.',
                'greeting'    => 'Hoş geldiniz ve bize kaydolduğunuz için teşekkür ederiz!',
                'subject'     => 'Satıcı Onay Bildirimi',
            ],

            'update' => [
                'description' => 'Profiliniz başarıyla güncellendi.',
                'greeting'    => 'Umarım bu mesaj sizi iyi bulur.',
                'subject'     => 'Satıcı Profil Güncelleme Bildirimi',
            ],

            'good-bye' => [
                'description' => 'Sizle çalışmak bir zevkti ve profesyonelliğiniz, özveriniz ve ürün/hizmetlerinizin yüksek kalitesi için gerçekten minnettarım. Müşteri memnuniyetini sağlama konusundaki taahhüdünüz fark edildi ve pozitif deneyimimizde önemli bir faktör oldu.',
                'greeting'    => 'Umarım bu mesaj sizi iyi bulur.',
                'subject'     => 'Satıcı Hoşça Kal Bildirimi',
            ],

            'product-approval' => [
                'approved'    => ':name ürününüz onaylandı.',
                'disapproved' => ':name ürününüz onaylanmadı.',
                'greeting'    => 'Hoş geldiniz ve bizimle kaydolduğunuz için teşekkür ederiz!',
                'subject'     => 'Satıcı Ürün Onay Bildirimi',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Yeni bir Siparişiniz var: :order_id, :created_at tarihinde alındı',
                    'subject'  => 'Yeni Sipariş Onayı',
                    'summary'  => 'Sipariş Özeti',
                    'title'    => 'Sipariş Onayı!',
                ],

                'canceled' => [
                    'greeting' => ':order_id numaralı sipariş iptal edildi',
                    'subject'  => 'Sipariş İptal Onayı',
                    'summary'  => 'Sipariş Özeti',
                    'title'    => 'Sipariş İptal Edildi!',
                ],

                'billing-address'   => 'Fatura Adresi',
                'contact'           => 'İletişim',
                'discount'          => 'İndirim',
                'grand-total'       => 'Toplam Tutar',
                'name'              => 'Ad',
                'payment'           => 'Ödeme',
                'price'             => 'Fiyat',
                'qty'               => 'Adet',
                'shipping'          => 'Kargo',
                'shipping-address'  => 'Teslimat Adresi',
                'shipping-handling' => 'Kargo İşlem Ücreti',
                'sku'               => 'Stok Kodu',
                'subtotal'          => 'Ara Toplam',
                'tax'               => 'Vergi',
            ],

            'payment-request' => [
                'greeting'  => 'Umarım bu mesaj sizi iyi bulur.',
                'paid'      => 'Merhaba.. :order_id siparişi için ödeme aldınız.',
                'requested' => ':seller_name Satıcısı, :order_id siparişinin ödemesi için talep ediliyor.',
                'subject'   => 'Satıcı Ödeme Talebi Bildirimi',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-posta:- :email',
            'greeting' => 'Umarım bu mesaj sizi iyi bulur.',
            'info'     => 'Merhaba, :name size bir soru sormuş. Lütfen aşağıdaki detayları kontrol edin.',
            'query'    => 'Sorgu: :query',
            'subject'  => 'Satıcı İletişim Bildirimi',
            'topic'    => 'Konu: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Merhaba, ":name", satıcı ":seller_name" ürün ":product_name" hakkında bir sorun bildirdi. Lütfen aşağıdaki ayrıntıları inceleyin.',
            'greeting'   => 'Umarım bu mesaj sizi iyi bulur.',
            'reason'     => 'Sebep:- :reason',
            'seller-msg' => 'Merhaba, ":name", ürününüz ":product_name" ile ilgili bir sorun bildirdi. Lütfen aşağıdaki ayrıntıları inceleyin.',
            'subject'    => 'Ürün Raporu Bildirimi',
        ],

        'report-seller' => [
            'admin-msg'  => 'Merhaba, :name size ilişkin bir sorun bildirdi. Lütfen aşağıdaki detayları kontrol edin.',
            'greeting'   => 'Umarım bu mesaj sizi iyi bulur.',
            'reason'     => 'Sebep: :reason',
            'seller-msg' => 'Merhaba, :name size ilişkin bir sorun bildirdi. Lütfen aşağıdaki detayları kontrol edin.',
            'subject'    => 'Satıcı Rapor Bildirimi',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Velocity Satıcı Hesabı Oluşturun',
            'banner-description'  => 'Velocity, Hindistan’daki yeni nesil işletmelere ürünlerinizi satmak için harika bir platform olabilir. Bu ipuçlarını izleyerek Velocity satıcısı olarak başarıya ulaşabilirsiniz!',
            'banner-btn-title'    => 'Mağaza Aç',
            'feature-title'       => 'Saticilar neden Velocity’de satışı seviyor?',
            'feature-description' => 'Satıcılar, Velocity gibi yüksek tempolu platformları daha fazla satış, daha iyi görünürlük ve iş büyümesine katkıda bulunabilecek verimli bir satış deneyimi sundukları için severler.',
            'feature-box1-title'  => 'Artan Satış Fırsatları',
            'feature-box1-desc'   => 'Satıcılar, Velocity gibi platformların daha fazla satış, daha iyi görünürlük ve verimli bir satış deneyimi sunma potansiyeli nedeniyle bu platformları tercih eder.',
            'feature-box2-title'  => 'Hızlı Satış Süreci',
            'feature-box2-desc'   => 'Bu tür platformlarda ürünler daha hızlı satılır, bu da daha hızlı stok devir hızı ve gelir elde edilmesini sağlar.',
            'feature-box3-title'  => 'Gelişmiş Görünürlük',
            'feature-box3-desc'   => 'Bu platformlar, satıcıların ürünlerine daha fazla görünürlük ve maruz kalma sağlar, bu da daha fazla görüntülenme ve potansiyel satış anlamına gelir.',
            'feature-box4-title'  => 'Verimlilik ve Kolaylık',
            'feature-box4-desc'   => 'Velocity gibi platformlar, satışı daha verimli hale getiren, satıcıların çevrimiçi işlerini yönetirken zaman ve çaba tasarrufu sağlayan, sorunsuz süreçler ve araçlar sunar.',
            'journey-title'       => 'Velocity ile Yolculuğunuza Başlayın',
            'journey-description' => 'Dünya çapında büyük müşterilerle, 7/24 satış yapmaya başlayın.',
            'journey-step1-title' => 'Satıcı Olun',
            'journey-step1-desc'  => 'Tüm temel bilgilerle mağazanızı kurun.',
            'journey-step2-title' => 'Ürün Listeleyin',
            'journey-step2-desc'  => 'Ürünleri mağazanıza ekleyin ve müşterilerin görüp satın almasını sağlayın.',
            'journey-step3-title' => 'Sipariş Alın',
            'journey-step3-desc'  => 'Dünya çapında geniş bir müşteri kitlesinden sipariş alın.',
            'journey-step4-title' => 'Ürün Teslimatı',
            'journey-step4-desc'  => 'Ürün teslim edildikten ve ödeme alındıktan sonra.',
            'journey-step5-title' => 'Ödeme',
            'journey-step5-desc'  => 'Komisyon kesildikten sonra ödeme talebinde bulunun ve ödemenizi alın.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Hasarlı ürün',
            'damaged-product-sold'      => 'Satıcı tarafından satılan hasarlı ürün',
            'duplicate-product'         => 'Çift ürün',
            'duplicate-product-sold'    => 'Satıcı tarafından satılan çift ürün',
            'missing-product-parts'     => 'Eksik ürün parçaları',
            'over-price-product'        => 'Aşırı fiyatlı ürün',
            'over-price-product-sold'   => 'Satıcı tarafından satılan aşırı fiyatlı ürün',
            'poor-product-quality'      => 'Düşük kaliteli ürün',
            'poor-product-quality-sold' => 'Satıcı tarafından satılan düşük kaliteli ürün',
            'receive-wrong-product'     => 'Yanlış ürün alındı',
            'wrong-product-sold'        => 'Satıcı tarafından satılan yanlış ürün',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'İndir',
                    'export'     => 'Dışa Aktar',
                    'no-records' => 'Dışa aktarılacak veri yok',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Ana Sayfa',
                    'logout'     => 'Çıkış yap',
                    'my-profile' => 'Profilim',
                    'visit-shop' => 'Mağazayı ziyaret et',

                    'mega-search' => [
                        'customers'                      => 'Müşteriler',
                        'explore-all-customers'          => 'Tüm müşterileri keşfet',
                        'explore-all-matching-customers' => '“:query” (:count) ile eşleşen tüm müşterileri keşfet',
                        'explore-all-matching-orders'    => '“:query” (:count) ile eşleşen tüm siparişleri keşfet',
                        'explore-all-matching-products'  => '“:query” (:count) ile eşleşen tüm ürünleri keşfet',
                        'explore-all-orders'             => 'Tüm siparişleri keşfet',
                        'explore-all-products'           => 'Tüm ürünleri keşfet',
                        'orders'                         => 'Siparişler',
                        'products'                       => 'Ürünler',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'Mega Arama',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Daralt',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Resim Ekle',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Sadece resim dosyalarına (.jpeg, .jpg, .png, ..) izin verilir.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Video Ekle',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Sadece video dosyalarına (.mp4, .mov, .ogg ..) izin verilir.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Belge Ekle',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Sadece belge dosyalarına (:types ..) izin verilir.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Ön',
                    'next'       => 'Sonraki',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Boyut',
                    'text'       => 'Metin',
                    'use-cases'  => 'Kullanım Durumları',
                    'word'       => 'Word',
                    'zoom'       => 'Yakınlaştır',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Rezervasyonlar',
            'communication'     => 'İletişim',
            'customers'         => 'Müşteriler',
            'dashboard'         => 'Panel',
            'extensions'        => 'Uzantılar',
            'general'           => 'Genel',
            'inventory-sources' => 'Envanter Kaynakları',
            'manage-profile'    => 'Profili Yönet',
            'orders'            => 'Siparişler',
            'product-reviews'   => 'Ürün İncelemeleri',
            'products'          => 'Ürünler',
            'reporting'         => 'Raporlama',
            'roles'             => 'Roller',
            'sales'             => 'Satışlar',
            'seller-reviews'    => 'Satıcı İncelemeleri',
            'settings'          => 'Ayarlar',
            'transaction'       => 'İşlem',
            'users'             => 'Kullanıcılar',
        ],

        'acl' => [
            'assign'            => 'Atama',
            'bookings'          => 'Rezervasyonlar',
            'cancel'            => 'İptal',
            'communication'     => 'İletişim',
            'create'            => 'Oluştur',
            'customers'         => 'Müşteriler',
            'dashboard'         => 'Gösterge Paneli',
            'delete'            => 'Sil',
            'edit'              => 'Düzenle',
            'extensions'        => 'Uzantılar',
            'general'           => 'Genel',
            'inventory-sources' => 'Envanter Kaynakları',
            'invoice'           => 'Fatura',
            'orders'            => 'Siparişler',
            'payment-request'   => 'Ödeme Talebi',
            'print'             => 'Yazdır',
            'print-invoice'     => 'Fatura Yazdır',
            'product-reviews'   => 'Ürün İncelemeleri',
            'products'          => 'Ürünler',
            'reporting'         => 'Raporlama',
            'sales'             => 'Satışlar',
            'seller-reviews'    => 'Satıcı İncelemeleri',
            'settings'          => 'Ayarlar',
            'shipment'          => 'Gönderi',
            'transactions'      => 'İşlemler',
            'view'              => 'Görüntüle',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Yeni Ürün Ekle',
            'assign'            => 'Ata',
            'bookings'          => 'Rezervasyonlar',
            'communication'     => 'İletişim',
            'create'            => 'Oluştur',
            'customers'         => 'Müşteriler',
            'dashboard'         => 'Panel',
            'edit'              => 'Düzenle',
            'extensions'        => 'Uzantılar',
            'general'           => 'Genel',
            'inventory-sources' => 'Envanter Kaynakları',
            'manage-profile'    => 'Profili Yönet',
            'orders'            => 'Siparişler',
            'product-reviews'   => 'Ürün İncelemeleri',
            'products'          => 'Ürünler',
            'reporting'         => 'Raporlama',
            'roles'             => 'Roller',
            'sales'             => 'Satışlar',
            'seller-reviews'    => 'Satıcı İncelemeleri',
            'settings'          => 'Ayarlar',
            'title'             => 'Profil',
            'transaction'       => 'İşlem',
            'users'             => 'Kullanıcılar',
            'view'              => 'Görüntüle',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Giriş Yap',
            'create-your-account' => 'Hesabınızı Oluşturun',
            'email'               => 'E-posta',
            'footer'              => '© Telif Hakkı 2010 - :current_year, Webkul Software (Hindistan\'da kayıtlı). Tüm hakları saklıdır.',
            'forgot-pass'         => 'Şifrenizi mi unuttunuz?',
            'form-login-text'     => 'Bir hesabınız varsa, e-posta adresinizle giriş yapın.',
            'invalid-credentials' => 'Kimlik bilgilerinizi kontrol edin ve tekrar deneyin.',
            'new-seller'          => 'Yeni satıcı mısınız?',
            'not-approved'        => 'Aktivasyonunuz admin onayı bekliyor',
            'page-title'          => 'Satıcı Girişi',
            'password'            => 'Şifre',
            'show-password'       => 'Şifreyi Göster',
            'suspended-message'   => 'Hesabınız askıya alındı. Sorularınız için yöneticiyle iletişime geçin.',
            'title'               => 'Giriş Yap',
        ],

        'signup' => [
            'account-exists'   => 'Zaten bir hesabınız mı var?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Kaydol',
            'confirm-pass'     => 'Şifreyi Onayla',
            'email'            => 'E-posta',
            'footer'           => '© Telif Hakkı 2010 - :current_year, Webkul Software (Hindistan\'da kayıtlı). Tüm hakları saklıdır.',
            'form-signup-text' => 'Mağazamıza yeniyseniz, sizi üye olarak görmekten mutluluk duyarız.',
            'name'             => 'Ad',
            'page-title'       => 'Satıcı Olun',
            'password'         => 'Şifre',
            'sign-in-button'   => 'Giriş Yap',
            'success'          => 'Hesap başarıyla oluşturuldu.',
            'url'              => 'Mağaza URL\'si',
        ],

        'forgot-password' => [
            'already-sent'         => 'Şifre sıfırlama bağlantısını zaten e-posta ile gönderdik.',
            'back'                 => 'Girişe geri dön?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-posta',
            'email-not-exist'      => 'Bu e-posta adresiyle bir kullanıcı bulunamıyor.',
            'footer'               => '© Telif Hakkı 2010 - :current_year, Webkul Software (Hindistan\'da kayıtlı). Tüm hakları saklıdır.',
            'forgot-password-text' => 'Şifrenizi unuttuysanız, e-posta adresinizi girerek kurtarın.',
            'page-title'           => 'Şifrenizi mi unuttunuz?',
            'reset-link-sent'      => 'Şifre sıfırlama bağlantınızı e-posta ile gönderdik.',
            'sign-in-button'       => 'Giriş Yap',
            'submit'               => 'Şifreyi Sıfırla',
            'title'                => 'Şifreyi Kurtar',
        ],

        'reset-password' => [
            'back-link-title'  => 'Girişe Geri Dön',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Şifreyi Onayla',
            'email'            => 'Kayıtlı E-posta',
            'footer'           => '© Telif Hakkı 2010 - :current_year, Webkul Software (Hindistan\'da kayıtlı). Tüm hakları saklıdır.',
            'password'         => 'Şifre',
            'submit-btn-title' => 'Şifreyi Sıfırla',
            'title'            => 'Şifreyi Sıfırla',
        ],

        'dashboard' => [
            'add-product'           => 'Ürün Ekle',
            'avg-order-sell'        => 'Ortalama Sipariş Satışı',
            'category-info'         => 'Seçilen aralık için kategori bulunamadı',
            'complete-profile-link' => 'Profilinizi Tamamlayın &rarr;',
            'completed-orders'      => 'Tamamlanan (:count)',
            'customer-info'         => 'Seçilen aralık için müşteri bulunamadı',
            'date-range'            => 'Tarih Aralığı',
            'empty-threshold'       => 'Boş Eşiği',
            'empty-threshold-desc'  => 'Hiç ürün bulunmamaktadır',
            'end-date'              => 'Bitiş Tarihi',
            'hi-comment'            => 'Mağazanızda neler olup bittiğini hızlıca gözden geçirin.',
            'hi-seller'             => 'Merhaba! :seller_name',
            'month'                 => 'Bu Ay',
            'no-category'           => 'Veri Bulunamadı',
            'no-customer'           => 'Veri Bulunamadı',
            'no-record-available'   => 'Kayıt bulunamadı.',
            'order-count'           => ':total Siparişler',
            'overall-details'       => 'Genel Detaylar',
            'pending-orders'        => 'Bekleyen (:count)',
            'per-unit'              => ':price/Birim',
            'processing-orders'     => 'İşlemde (:count)',
            'product-info'          => 'Yoldayken ilgili ürünleri ekleyin',
            'profile-score'         => 'Profil Puanı',
            'profile-score-desc'    => 'Profil bilgilerinizi eksiksiz tutarak görünürlüğünüzü en üst düzeye çıkarın.',
            'qty-stock'             => ':qty stokta',
            'refunded-orders'       => 'İade Edilen (:count)',
            'remaining-payout'      => 'Kalan Ödeme',
            'start-date'            => 'Başlangıç Tarihi',
            'stock-threshold'       => 'Stok Eşiği',
            'title'                 => 'Panel',
            'today'                 => 'Bugün',
            'top-categories'        => 'En İyi Kategoriler',
            'top-customers'         => 'En çok satış yapan müşteri',
            'top-products'          => 'En çok satan ürünler',
            'total-customers'       => 'Toplam Müşteri',
            'total-orders'          => 'Toplam Sipariş',
            'total-payout'          => 'Toplam Ödeme',
            'total-sale'            => 'Toplam Satış: :total',
            'total-sales'           => 'Toplam Satış',
            'view-all-btn'          => 'Hepsini Görüntüle',
            'visitor-count'         => 'Ziyaretçi - :count',
            'week'                  => 'Bu Hafta',
            'year'                  => 'Bu Yıl',
        ],

        'orders' => [
            'index' => [
                'title' => 'Siparişler',

                'datagrid' => [
                    'canceled'        => 'İptal Edildi',
                    'closed'          => 'Kapalı',
                    'commission'      => 'Komisyon',
                    'completed'       => 'Tamamlandı',
                    'customer'        => 'Müşteri',
                    'date'            => 'Tarih',
                    'discount'        => 'İndirim',
                    'email'           => 'E-posta',
                    'fraud'           => 'Dolandırıcılık',
                    'gross-amt'       => 'Brüt Tutar',
                    'id'              => 'ID',
                    'invoice-pending' => 'Fatura Bekliyor',
                    'items'           => 'Ürünler',
                    'location'        => 'Konum',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Ödenmiş',
                    'payment'         => 'Ödeme',
                    'payment-request' => 'Ödeme Talebi',
                    'pending'         => 'Beklemede',
                    'pending-payment' => 'Ödeme Bekliyor',
                    'processing'      => 'İşleniyor',
                    'refunded'        => 'İade Edildi',
                    'requested'       => 'Talep Edildi',
                    'seller-earn'     => 'Satıcı Kazancı',
                    'shipment'        => 'Kargo',
                    'status'          => 'Durum',
                    'transaction'     => 'İşlem',
                    'view'            => 'Görüntüle',
                ],

                'payment-req-success'  => 'Ödeme talebiniz başarıyla gönderildi',
                'something-went-wrong' => 'Bir şeyler yanlış gitti!',
            ],

            'view' => [
                'admin-commission'           => 'Yönetici Komisyonu',
                'billing-address'            => 'Fatura Adresi',
                'by-customer'                => 'Müşteri Tarafından - :name',
                'cancel-btn'                 => 'İptal Et',
                'cancel-confirm-msg'         => 'Bu siparişi iptal etmek istediğinizden emin misiniz?',
                'cancel-error-msg'           => 'Sipariş iptal edilemiyor',
                'cancel-success-msg'         => 'Sipariş iptal edildi',
                'canceled'                   => 'İptal Edildi',
                'closed'                     => 'Kapalı',
                'completed'                  => 'Tamamlandı',
                'discount'                   => 'İndirim',
                'fraud'                      => 'Dolandırıcılık',
                'grand-total'                => 'Genel Toplam',
                'info'                       => 'Bilgi',
                'item-canceled'              => 'İptal Edilen (:qty_canceled)',
                'item-invoice'               => 'Faturalandırılan (:qty_invoiced)',
                'item-ordered'               => 'Sipariş Edilen (:qty_ordered)',
                'item-refunded'              => 'İade Edilen (:qty_refunded)',
                'item-shipped'               => 'Gönderilen (:qty_shipped)',
                'item-status'                => 'Ürün Durumu',
                'payment-method'             => 'Ödeme Yöntemi',
                'pending'                    => 'Beklemede',
                'pending_payment'            => 'Ödeme Bekliyor',
                'permission-error'           => 'Siparişi iptal etme izniniz yok',
                'place-on'                   => ':date tarihinde yerleştirildi',
                'price'                      => 'Fiyat',
                'price-excl-tax'             => 'Fiyat (Vergi Hariç)',
                'price-incl-tax'             => 'Fiyat (Vergi Dahil)',
                'processing'                 => 'İşleniyor',
                'product'                    => 'Ürün',
                'shipping-address'           => 'Teslimat Adresi',
                'shipping-handling'          => 'Kargo & İşlem Ücreti',
                'shipping-handling-excl-tax' => 'Kargo & İşlem Ücreti (Vergi Hariç)',
                'shipping-handling-incl-tax' => 'Kargo & İşlem Ücreti (Vergi Dahil)',
                'shipping-method'            => 'Kargo Yöntemi',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Ara Toplam',
                'sub-total-excl-tax'         => 'Ara Toplam (Vergi Hariç)',
                'sub-total-incl-tax'         => 'Ara Toplam (Vergi Dahil)',
                'tax'                        => 'Vergi',
                'tax-amount'                 => 'Vergi Tutarı',
                'tax-percent'                => 'Vergi Oranı',
                'title'                      => 'Sipariş #:order_id',
                'total'                      => 'Toplam',
                'total-due'                  => 'Toplam Tutar',
                'total-paid'                 => 'Toplam Ödenen',
                'total-refunded'             => 'Toplam İade Edilen',
                'total-seller-amt'           => 'Toplam Satıcı Tutarı',

                'invoices' => [
                    'bank-details'               => 'Banka Bilgileri',
                    'bill-to'                    => 'Fatura Edilen',
                    'contact'                    => 'İletişim',
                    'contact-number'             => 'İletişim Numarası',
                    'created-on'                 => 'oluşturulma tarihi: :date_time',
                    'date'                       => 'Fatura Tarihi',
                    'discount'                   => 'İndirim',
                    'excl-tax'                   => 'Vergi Hariç:',
                    'grand-total'                => 'Genel Toplam',
                    'individual-invoice'         => 'Fatura #:invoice_id',
                    'invoice'                    => 'Fatura',
                    'invoice-id'                 => 'Fatura ID',
                    'name'                       => 'Ad',
                    'order-date'                 => 'Sipariş Tarihi',
                    'order-id'                   => 'Sipariş ID',
                    'payment-method'             => 'Ödeme Yöntemi',
                    'payment-terms'              => 'Ödeme Koşulları',
                    'price'                      => 'Fiyat',
                    'print'                      => 'Yazdır',
                    'product-name'               => 'Ürün Adı',
                    'qty'                        => 'Adet',
                    'ship-to'                    => 'Teslimat Adresi',
                    'shipping-handling'          => 'Kargo & İşlem Ücreti',
                    'shipping-handling-excl-tax' => 'Kargo & İşlem Ücreti (Vergi Hariç)',
                    'shipping-handling-incl-tax' => 'Kargo & İşlem Ücreti (Vergi Dahil)',
                    'shipping-method'            => 'Kargo Yöntemi',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Ara Toplam',
                    'sub-total-excl-tax'         => 'Ara Toplam (Vergi Hariç)',
                    'sub-total-incl-tax'         => 'Ara Toplam (Vergi Dahil)',
                    'tax'                        => 'Vergi',
                    'tax-amount'                 => 'Vergi Tutarı',
                    'title'                      => 'Faturalar',
                    'vat-number'                 => 'KDV Numarası',
                ],

                'shipments' => [
                    'carrier-title'       => 'Taşıyıcı Başlığı',
                    'created-on'          => 'oluşturulma tarihi: :date_time',
                    'individual-shipment' => 'Gönderim #:track_number',
                    'inventory-source'    => 'Envanter Kaynağı',
                    'name'                => 'Ad',
                    'qty'                 => 'Miktar',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Gönderimler',
                    'tracking-number'     => 'Takip Numarası',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Düzenleme Ücreti',
                    'adjustment-refund'          => 'Düzenleme İadesi',
                    'created-on'                 => 'oluşturulma tarihi: :date_time',
                    'discount'                   => 'İndirim',
                    'grand-total'                => 'Toplam',
                    'individual-refund'          => 'İade #:refund_id',
                    'no-result-found'            => 'Herhangi bir kayıt bulunamadı.',
                    'price'                      => 'Fiyat',
                    'product-name'               => 'Adı',
                    'qty'                        => 'Miktar',
                    'shipping-handling'          => 'Kargo & İşlem Ücreti',
                    'shipping-handling-excl-tax' => 'Kargo & İşlem Ücreti (Vergi Hariç)',
                    'shipping-handling-incl-tax' => 'Kargo & İşlem Ücreti (Vergi Dahil)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Ara Toplam (Vergi Hariç)',
                    'sub-total-incl-tax'         => 'Ara Toplam (Vergi Dahil)',
                    'subtotal'                   => 'Ara Toplam',
                    'tax'                        => 'Vergi',
                    'tax-amount'                 => 'Vergi Miktarı',
                    'title'                      => 'İadeler',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Fatura',
                'invoice-success'  => 'Fatura başarıyla oluşturuldu',
                'permission-error' => 'Sipariş faturası oluşturma izniniz yok',
                'price'            => 'Fiyat',
                'product-name'     => 'Ürün Adı',
                'qty'              => 'Miktar',
                'qty-error'        => 'İstenen miktar mevcut değil',
                'sub-total'        => 'Fatura <br> Ara Toplam',
                'title'            => 'Fatura Oluştur',
                'total'            => 'Toplam',
            ],

            'shipments' => [
                'avl-qty'          => 'Mevcut - :qty Miktar',
                'carrier-title'    => 'Taşıyıcı Başlığı',
                'create-btn'       => 'Gönder',
                'ordered-qty'      => 'Sipariş Edilen Miktar',
                'permission-error' => 'Gönderi oluşturma izniniz yok',
                'product-name'     => 'Ürün Adı',
                'qty'              => 'Miktar',
                'qty-error'        => 'İstenen miktar mevcut değil',
                'shipment-success' => 'Gönderi başarıyla oluşturuldu',
                'shipped-qty'      => 'Gönderilen Miktar',
                'sku'              => 'SKU - :sku',
                'source'           => 'Sipariş Edilen Ürün Kaynağı',
                'title'            => 'Gönderi Oluştur',
                'tracking-id'      => 'Takip Numarası',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Oluşturulma Tarihi',
                    'from'         => 'Başlangıç',
                    'id'           => 'Kimlik',
                    'order-id'     => 'Sipariş Kimliği',
                    'qty'          => 'Miktar',
                    'to'           => 'Bitiş',
                    'view'         => 'Görüntüle',
                ],

                'title'    => 'Rezervasyonlar',
            ],

            'calendar' => [
                'booking-date'     => 'Rezervasyon Tarihi',
                'booking-details'  => 'Rezervasyon Detayları',
                'canceled'         => 'İptal Edildi',
                'closed'           => 'Kapalı',
                'done'             => 'Tamamlandı',
                'order-id'         => 'Sipariş Kimliği',
                'pending'          => 'Beklemede',
                'price'            => 'Fiyat',
                'status'           => 'Durum',
                'time-slot'        => 'Zaman Dilimi:',
                'view-details'     => 'Detayları Görüntüle',
            ],

            'title' => 'Rezervasyon Ürünü',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Kalan Ödeme',
                'title'                  => 'İşlemler',
                'total-payout'           => 'Toplam Ödeme',
                'total-seller-sale'      => 'Toplam Satış (Satıcı)',
                'total-admin-commission' => 'Toplam Komisyon (Yönetici)',
                'total-sale-invoiced'    => 'Toplam Satış (Faturalandırılmış)',

                'datagrid' => [
                    'comment'        => 'Yorum',
                    'id'             => 'Kimlik',
                    'total'          => 'Toplam',
                    'transaction-id' => 'İşlem Kimliği',
                ],
            ],

            'view' => [
                'commission'        => 'Komisyon',
                'created-on'        => ':date tarihinde oluşturuldu',
                'date'              => 'Tarih',
                'id'                => 'İşlem Kimliği',
                'method'            => 'Yöntem',
                'name'              => 'Ad',
                'payment-method'    => ':method Ödeme',
                'price'             => 'Fiyat',
                'print'             => 'Yazdır',
                'qty'               => 'Miktar',
                'seller-total'      => 'Satıcı Toplamı',
                'shipping-handling' => 'Kargo ve Taşıma',
                'subtotal'          => 'Ara Toplam',
                'tax'               => 'Vergi',
                'title'             => 'İşlem',
                'total'             => 'Toplam',
                'transaction-id'    => 'İşlem No: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Yeni Ürün Ekle',
                'title'           => 'Ürünler',

                'datagrid' => [
                    'active'         => 'Aktif',
                    'approved'       => 'Onaylandı',
                    'category'       => 'Kategori',
                    'delete'         => 'Sil',
                    'disable'        => 'Devre Dışı',
                    'disapproved'    => 'Onaylanmadı',
                    'edit'           => 'Düzenle',
                    'id'             => 'Kimlik',
                    'image'          => 'Resim',
                    'is-approved'    => 'Onaylandı',
                    'name'           => 'Ad',
                    'out-of-stock'   => 'Stokta Yok',
                    'price'          => 'Fiyat',
                    'product-number' => 'Ürün Numarası',
                    'product_id'     => 'Kimlik - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Durum',
                    'stock'          => 'Stok',
                    'total-quantity' => ':quantity Mevcut',
                    'type'           => 'Tip',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Özellik Ailesi',
                'back'                      => 'Geri',
                'continue'                  => 'Devam Et',
                'create-new-product'        => 'Yeni Ürün Oluştur',
                'create-your-new-product'   => 'Eğer ürün mevcut değilse, kendi ürününüzü oluşturun',
                'disable-product-message'   => 'Yönetici ürün oluşturma veya atama işlevini devre dışı bıraktı.',
                'image-placeholder'         => 'Sizin Resminiz',
                'no-result'                 => 'Sonuç Bulunamadı',
                'not-allowed'               => 'Ürün oluşturmanıza izin verilmiyor',
                'or'                        => 'Ya da',
                'product-type'              => 'Ürün Türü',
                'search-product'            => 'Ürünleri Ara',
                'sell-admin-product-prices' => 'Yönetici ürününü kendi fiyatlarınızla satın.',
                'sell-as-yours'             => 'Kendi Ürününüz Olarak Sat',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Ürünü iki şekilde ekleyebilirsiniz, ya yönetici ürününden satın alarak veya kendi ürününüzü oluşturarak.',
                'title'                     => 'Yeni Ürün Ekle',
                'update-profile'            => 'Lütfen profil detaylarınızı güncelleyin',
            ],

            'edit' => [
                'back-btn'      => 'Geri',
                'preview'       => 'Önizleme',
                'remove'        => 'Kaldır',
                'save-btn'      => 'Ürünü Kaydet',
                'title'         => 'Ürünü Düzenle',
                'channels'      => 'Kanallar',
                'progress-info' => 'Ürününüzün çekiciliğini artırın ve tüm ürün detaylarının eksiksiz ve doğru olduğundan emin olarak müşteriler üzerinde kalıcı bir izlenim bırakın!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Grup Fiyatı Ekle',
                        'all-groups'                => 'Tüm Gruplar',
                        'create-btn'                => 'Yeni Ekle',
                        'discount-group-price-info' => ':qty Miktarında indirimli fiyat :price',
                        'edit-btn'                  => 'Düzenle',
                        'empty-info'                => 'Belirli bir gruba ait müşteriler için özel fiyatlandırma.',
                        'fixed-group-price-info'    => ':qty Miktarında sabit fiyat :price',
                        'title'                     => 'Müşteri Grubu Fiyatı',

                        'create' => [
                            'all-groups'     => 'Tüm Gruplar',
                            'create-title'   => 'Müşteri Grubu Fiyatı Oluştur',
                            'customer-group' => 'Müşteri Grubu',
                            'delete-btn'     => 'Sil',
                            'discount'       => 'İndirim',
                            'fixed'          => 'Sabit',
                            'price'          => 'Fiyat',
                            'price-type'     => 'Fiyat Türü',
                            'qty'            => 'Miktar',
                            'save-btn'       => 'Kaydet',
                            'update-title'   => 'Müşteri Grubu Fiyatını Güncelle',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Bekleyen Sipariş Miktarı: :qty',
                    'pending-ordered-qty-info' => 'Bekleyen sipariş miktarı, sevkiyat sonrası ilgili envanter kaynağından düşürülecektir. İptal durumunda bekleme miktarı satışa sunulacaktır.',
                    'title'                    => 'Envanterler',
                ],

                'categories' => [
                    'title' => 'Kategoriler',
                ],

                'images' => [
                    'info'  => 'Resim çözünürlüğü 609 piksel X 560 piksel gibi olmalıdır',
                    'title' => 'Resimler',
                ],

                'videos' => [
                    'error' => 'Video :max kilobayttan büyük olamaz. Lütfen daha küçük bir dosya seçin.',
                    'info'  => 'Maksimum video boyutu :size gibi olmalıdır',
                    'title' => 'Videolar',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Yoldayken ilgili ürünleri ekleyin.',
                        'info'       => 'Müşteri görüntülediği ürüne ek olarak ilişkili ürünlerle karşılaştırılır.',
                        'title'      => 'İlgili Ürünler',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Yoldayken satış ürünleri ekleyin.',
                        'info'       => 'Müşteri, şu anda görüntüledikleri ürünün bir alternatifi olarak hizmet eden üst satış ürünleriyle karşılaşır.',
                        'title'      => 'Üst Satış Ürünleri',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Yoldayken çapraz satış ürünleri ekleyin.',
                        'info'       => 'Alışveriş sepetine bitişik olarak, zaten sepetinize eklenen ürünleri tamamlamak için çapraz satış olarak konumlandırılan bu "dürtü alışverişi" ürünlerini bulacaksınız.',
                        'title'      => 'Çapraz Satış Ürünleri',
                    ],

                    'add-btn'           => 'Ürün Ekle',
                    'delete'            => 'Sil',
                    'empty-info'        => ':type ürünleri eklemek için.',
                    'empty-title'       => 'Ürün Ekle',
                    'image-placeholder' => 'Ürün Resmi',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Seçenek ekle',
                            'empty-info'        => 'Özelleştirilebilir seçenekler oluşturmak için.',
                            'empty-title'       => 'Seçenek ekle',
                            'info'              => 'Bu, basit ürünü özelleştirecektir.',
                            'title'             => 'Özelleştirilebilir Öğe',

                            'update-create' => [
                                'is-required'               => 'Gerekli mi',
                                'max-characters'            => 'Maksimum Karakter',
                                'name'                      => 'Başlık',
                                'no'                        => 'Hayır',
                                'price'                     => 'Fiyat',
                                'save-btn'                  => 'Kaydet',
                                'supported-file-extensions' => 'Desteklenen Dosya Uzantıları',
                                'title'                     => 'Seçenek',
                                'type'                      => 'Tür',
                                'yes'                       => 'Evet',
                            ],

                            'option' => [
                                'add-btn'     => 'Seçenek ekle',
                                'delete'      => 'Sil',
                                'delete-btn'  => 'Sil',
                                'edit-btn'    => 'Düzenle',
                                'empty-info'  => 'Çeşitli ürün kombinasyonları oluşturmak için.',
                                'empty-title' => 'Seçenek ekle',

                                'types' => [
                                    'text' => [
                                        'title' => 'Metin',
                                    ],

                                    'textarea' => [
                                        'title' => 'Metin Alanı',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Onay Kutusu',
                                    ],

                                    'radio' => [
                                        'title' => 'Radyo',
                                    ],

                                    'select' => [
                                        'title' => 'Seç',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Çoklu Seçim',
                                    ],

                                    'date' => [
                                        'title' => 'Tarih',
                                    ],

                                    'datetime' => [
                                        'title' => 'Tarih ve Saat',
                                    ],

                                    'time' => [
                                        'title' => 'Saat',
                                    ],

                                    'file' => [
                                        'title' => 'Dosya',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Etiket',
                                        'price'    => 'Fiyat',
                                        'save-btn' => 'Kaydet',
                                        'title'    => 'Seçenek',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'Bu ürün zaten başka bir ürünle ilişkilendirilmiş.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Çeşit Ekle',
                        'delete-btn'        => 'Sil',
                        'edit-btn'          => 'Düzenle',
                        'empty-info'        => 'Hızlı bir şekilde ürünün farklı kombinasyonlarını oluşturmak için.',
                        'empty-title'       => 'Çeşit Ekle',
                        'image-placeholder' => 'Ürün Resmi',
                        'info'              => 'Çeşit ürünleri, tüm olası özellik kombinasyonlarına dayanır.',
                        'qty'               => ':qty Adet',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Çeşitler',

                        'create'  => [
                            'description'            => 'Açıklama',
                            'name'                   => 'Ad',
                            'save-btn'               => 'Ekle',
                            'title'                  => 'Çeşit Ekle',
                            'variant-already-exists' => 'Bu çeşit zaten mevcut',
                        ],

                        'edit' => [
                            'disabled'        => 'Devre Dışı',
                            'edit-info'       => 'Ürün bilgilerini detaylı olarak güncellemek isterseniz,',
                            'edit-link-title' => 'Ürün Detayları Sayfasına Git',
                            'enabled'         => 'Etkin',
                            'images'          => 'Resimler',
                            'name'            => 'Ad',
                            'price'           => 'Fiyat',
                            'quantities'      => 'Miktarlar',
                            'save-btn'        => 'Kaydet',
                            'sku'             => 'SKU',
                            'status'          => 'Durum',
                            'title'           => 'Ürün',
                            'weight'          => 'Ağırlık',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Görselleri Ekle',
                            'apply-to-all-btn'    => 'Hepsine Uygula',
                            'apply-to-all-sku'    => 'Tüm SKU\'lara fiyat uygulayın.',
                            'edit-inventories'    => 'Stokları Düzenle',
                            'edit-prices'         => 'Fiyatları Düzenle',
                            'price'               => 'Fiyat',
                            'remove-images'       => 'Görselleri Kaldır',
                            'remove-variants'     => 'Varyantları Kaldır',
                            'select-action'       => 'Eylem Seç',
                            'select-variants'     => 'Varyantları Seç',
                            'edit-name'           => 'Adı Düzenle',
                            'name'                => 'Ad',
                            'edit-sku'            => 'SKU\'yu Düzenle',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Ağırlığı Düzenle',
                            'weight'              => 'Ağırlık',
                            'edit-status'         => 'Durumu Düzenle',
                            'status'              => 'Durum',
                            'apply-to-all-name'   => 'Tüm varyantlara bir isim uygulayın.',
                            'apply-to-all-weight' => 'Tüm varyantlara ağırlık uygulayın.',
                            'apply-to-all-status' => 'Tüm varyantlara durum uygulayın.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Ürün Ekle',
                        'default-qty'       => 'Varsayılan Miktar',
                        'delete'            => 'Sil',
                        'empty-info'        => 'Hızlı bir şekilde ürünün farklı kombinasyonlarını oluşturmak için.',
                        'empty-title'       => 'Ürün Ekle',
                        'image-placeholder' => 'Ürün Resmi',
                        'info'              => 'Gruplu bir ürün, bir takım olarak sunulan bağımsız ürünlerden oluşur ve müşterilere değer ve kolaylık sağlayan özel bir fiyatla birlikte satılır. Her ürün bireysel olarak veya gruba dahil olarak satın alınabilir.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Grup Ürünler',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Seçenek Ekle',
                        'empty-info'        => 'Hızlı bir şekilde paketleme seçenekleri oluşturmak için.',
                        'empty-title'       => 'Seçenek Ekle',
                        'image-placeholder' => 'Ürün Resmi',
                        'info'              => 'Bir paketleme ürünü, bir arada satılan birden fazla ürün veya hizmetin özel bir fiyatla sunulduğu bir pakettir ve müşterilere değer ve kolaylık sağlar.',
                        'title'             => 'Paketleme Ürünleri',

                        'update-create' => [
                            'checkbox'    => 'Onay Kutusu',
                            'is-required' => 'Gerekli mi?',
                            'multiselect' => 'Çoklu Seçim',
                            'name'        => 'Başlık',
                            'no'          => 'Hayır',
                            'radio'       => 'Radyo',
                            'save-btn'    => 'Kaydet',
                            'select'      => 'Seçim',
                            'title'       => 'Seçenek',
                            'type'        => 'Tür',
                            'yes'         => 'Evet',
                        ],

                        'option' => [
                            'add-btn'     => 'Ürün Ekle',
                            'default-qty' => 'Varsayılan Miktar',
                            'delete'      => 'Sil',
                            'delete-btn'  => 'Sil',
                            'edit-btn'    => 'Düzenle',
                            'empty-info'  => 'Hızlı bir şekilde ürünün farklı kombinasyonlarını oluşturmak için.',
                            'empty-title' => 'Ürün Ekle',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Onay kutusu kullanarak varsayılan ürünü ayarlayın',
                                    'title' => 'Onay Kutusu',
                                ],

                                'multiselect' => [
                                    'info'  => 'Çoklu seçim düğmesini kullanarak varsayılan ürünü ayarlayın',
                                    'title' => 'Çoklu Seçim',
                                ],

                                'radio' => [
                                    'info'  => 'Radyo düğmesini kullanarak varsayılan ürünü ayarlayın',
                                    'title' => 'Radyo',
                                ],

                                'select' => [
                                    'info'  => 'Radyo düğmesini kullanarak varsayılan ürünü ayarlayın',
                                    'title' => 'Seçim',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Mevcut Başlangıç',
                        'available-to'   => 'Mevcut Bitiş',
                        'location'       => 'Konum',
                        'qty'            => 'Miktar',
                        'title'          => 'Rezervasyon Türü',

                        'available-every-week' => [
                            'no'    => 'Hayır',
                            'title' => 'Her Hafta Mevcut',
                            'yes'   => 'Evet',
                        ],

                        'appointment' => [
                            'break-duration'         => 'Slotlar Arası Mola Süresi (Dakika)',
                            'slot-duration'          => 'Slot Süresi (Dakika)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Ekle',
                            'break-duration'   => 'Slotlar Arası Mola Süresi (Dakika)',
                            'close'            => 'Kapat',
                            'description'      => 'Rezervasyon Bilgisi',
                            'description-info' => 'Süre, slotlara göre oluşturulacak ve görüntülenecektir. Tüm slotlar arasında benzersiz olacak ve mağaza vitrinde görünecektir',
                            'edit'             => 'Düzenle',
                            'many'             => 'Bir Gün İçin Birden Fazla Rezervasyon',
                            'one'              => 'Birden Fazla Gün İçin Bir Rezervasyon',
                            'open'             => 'Açık',
                            'slot-add'         => 'Slot Ekle',
                            'slot-duration'    => 'Slot Süresi (Dakika)',
                            'slot-title'       => 'Slot Zaman Süresi',
                            'title'            => 'Varsayılan',
                            'unavailable'      => 'Mevcut Değil',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Slot Ekle',
                                    'close'      => 'Kapat',
                                    'day'        => 'Gün',
                                    'edit-title' => 'Slotları Düzenle',
                                    'friday'     => 'Cuma',
                                    'from'       => 'Başlangıç',
                                    'from-day'   => 'Başlangıç Günü',
                                    'from-time'  => 'Başlangıç Zamanı',
                                    'monday'     => 'Pazartesi',
                                    'open'       => 'Açık',
                                    'saturday'   => 'Cumartesi',
                                    'save'       => 'Kaydet',
                                    'select'     => 'Seç',
                                    'status'     => 'Durum',
                                    'sunday'     => 'Pazar',
                                    'thursday'   => 'Perşembe',
                                    'to'         => 'Bitiş',
                                    'to-day'     => 'Bitiş Günü',
                                    'to-time'    => 'Bitiş Zamanı',
                                    'tuesday'    => 'Salı',
                                    'wednesday'  => 'Çarşamba',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Bilet Ekle',
                            'delete'             => 'Sil',
                            'description'        => 'Açıklama',
                            'description-info'   => 'Mevcut bilet yok.',
                            'edit'               => 'Düzenle',
                            'name'               => 'Ad',
                            'price'              => 'Fiyat',
                            'qty'                => 'Miktar',
                            'special-price'      => 'Özel Fiyat',
                            'special-price-from' => 'Özel Fiyat Başlangıç',
                            'special-price-to'   => 'Özel Fiyat Bitiş',
                            'title'              => 'Biletler',
                            'valid-from'         => 'Geçerli Başlangıç',
                            'valid-until'        => 'Geçerli Bitiş',

                            'modal'              => [
                                'edit' => 'Biletleri Düzenle',
                                'save' => 'Kaydet',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Bilet Ekle',
                            ],

                            'slots'   => [
                                'add'         => 'Slot Ekle',
                                'description' => 'Zaman Süresi ile Mevcut Slotlar.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Günlük Bazda',
                            'daily-hourly'           => 'Her İkisi (Günlük ve Saatlik Bazda)',
                            'daily-price'            => 'Günlük Fiyat',
                            'hourly'                 => 'Saatlik Bazda',
                            'hourly-price'           => 'Saatlik Fiyat',
                            'title'                  => 'Kiralama Türü',

                            'same-slot-for-all-days' => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Slot Ekle',
                            'description-info' => 'Süre, slotlara göre oluşturulacak ve görüntülenecektir. Tüm slotlar arasında benzersiz olacak ve mağaza vitrinde görünecektir',
                            'save'             => 'Kaydet',
                            'title'            => 'Slot Zaman Süresi',
                            'unavailable'      => 'Mevcut Değil',

                            'action'           => [
                                'add' => 'Ekle',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Cuma',
                                    'from'       => 'Başlangıç',
                                    'monday'     => 'Pazartesi',
                                    'saturday'   => 'Cumartesi',
                                    'sunday'     => 'Pazar',
                                    'thursday'   => 'Perşembe',
                                    'to'         => 'Bitiş',
                                    'tuesday'    => 'Salı',
                                    'wednesday'  => 'Çarşamba',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Slotlar Arası Mola Süresi (Dakika)',
                            'guest-capacity'            => 'Misafir Kapasitesi',
                            'guest-limit'               => 'Masa Başına Misafir Limiti',
                            'prevent-scheduling-before' => 'Önceden Planlamayı Önle',
                            'slot-duration'             => 'Slot Süresi (Dakika)',

                            'charged-per'               => [
                                'guest'  => 'Misafir',
                                'table'  => 'Masa',
                                'title'  => 'Başına Ücret',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Hayır',
                                'title' => 'Tüm Günler İçin Aynı Slot',
                                'yes'   => 'Evet',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Randevu Rezervasyonu',
                            'default'     => 'Varsayılan Rezervasyon',
                            'event'       => 'Etkinlik Rezervasyonu',
                            'many'        => 'Birden Fazla',
                            'one'         => 'Bir',
                            'rental'      => 'Kiralama Rezervasyonu',
                            'table'       => 'Masa Rezervasyonu',
                            'title'       => 'Tür',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Bağlantı Ekle',
                            'delete-btn'  => 'Sil',
                            'edit-btn'    => 'Düzenle',
                            'empty-info'  => 'Hızlı bir şekilde bağlantı oluşturmak için.',
                            'empty-title' => 'Bağlantı Ekle',
                            'file'        => 'Dosya : ',
                            'info'        => 'İndirilebilir ürün türü, e-kitaplar, yazılım uygulamaları, müzik, oyunlar vb. gibi dijital ürünleri satmanıza olanak tanır.',
                            'sample-file' => 'Örnek Dosya : ',
                            'sample-url'  => 'Örnek URL : ',
                            'title'       => 'İndirilebilir Bağlantılar',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'İndirmeye İzin Verilen',
                                'file'        => 'Dosya',
                                'file-type'   => 'Dosya Türü',
                                'name'        => 'Başlık',
                                'price'       => 'Fiyat',
                                'sample'      => 'Örnek',
                                'sample-type' => 'Örnek Türü',
                                'save-btn'    => 'Kaydet',
                                'title'       => 'Bağlantı',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Örnek Ekle',
                            'delete-btn'  => 'Sil',
                            'edit-btn'    => 'Düzenle',
                            'empty-info'  => 'Hızlı bir şekilde örnek oluşturmak için.',
                            'empty-title' => 'Örnek Ekle',
                            'file'        => 'Dosya : ',
                            'info'        => 'İndirilebilir ürün türü, e-kitaplar, yazılım uygulamaları, müzik, oyunlar vb. gibi dijital ürünleri satmanıza olanak tanır.',
                            'title'       => 'İndirilebilir Örnekler',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'      => 'Dosya',
                                'file-type' => 'Dosya Türü',
                                'name'      => 'Başlık',
                                'save-btn'  => 'Kaydet',
                                'title'     => 'Bağlantı',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Ürün başarıyla oluşturuldu',
            'delete-failed'            => 'Ürün silme başarısız',
            'delete-success'           => 'Ürün başarıyla silindi',
            'product-type-not-allowed' => ':type ürünü satma izniniz yok',
            'saved-inventory-message'  => 'Ürün başarıyla kaydedildi',
            'update-success'           => 'Ürün başarıyla güncellendi',

            'assign' => [
                'already-selling'     => 'Bu ürünü zaten satıyorsunuz',
                'back-btn'            => 'Geri',
                'condition'           => 'Durum',
                'create-success'      => 'Ürün satıcıya başarıyla atandı',
                'description'         => 'Açıklama',
                'image-size'          => 'Görüntü çözünürlüğü 609px X 560px olmalıdır',
                'images'              => 'Görüntüler',
                'new'                 => 'Yeni',
                'not-allowed'         => 'Bu ürünü atamanıza izin verilmiyor',
                'old'                 => 'Eski',
                'price'               => 'Fiyat',
                'product-not-allowed' => ':type türünde ürün satmanıza izin verilmiyor',
                'quantities'          => 'Miktarlar',
                'save-btn'            => 'Kaydet',
                'title'               => 'Ürün Ata',
                'update-success'      => 'Atanan ürün başarıyla güncellendi',

                'product-details' => [
                    'active'            => 'Aktif',
                    'approved'          => 'Onaylandı',
                    'disable'           => 'Devre Dışı Bırak',
                    'disapproved'       => 'Reddedildi',
                    'image-placeholder' => 'Ürün Görseli',
                    'title'             => 'Ürün Detayları',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Ürün İncelemeleri',

                'datagrid' => [
                    'approved'      => 'Onaylandı',
                    'customer'      => 'Müşteri',
                    'date'          => 'Tarih',
                    'description'   => 'Açıklama',
                    'email'         => 'E-posta',
                    'pending'       => 'Beklemede',
                    'product'       => 'Ürün',
                    'rating'        => 'Değerlendirme',
                    'status'        => 'Durum',
                    'title'         => 'Başlık',
                    'unapproved'    => 'Onaylanmadı',
                    'update-status' => 'Güncelleme Durumu',
                ],
            ],

            'update-success' => 'Ürün değerlendirmeleri başarıyla güncellendi',
            'delete-success' => 'Ürün yorumları başarıyla silindi.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Müşteriler',

                'datagrid' => [
                    'active'      => 'Aktif',
                    'customer'    => 'Müşteri',
                    'email'       => 'E-posta',
                    'gender'      => 'Cinsiyet',
                    'group'       => 'Grup',
                    'inactive'    => 'Pasif',
                    'order-count' => 'Sipariş Sayısı',
                    'revenue'     => 'Gelir',
                    'status'      => 'Durum',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Profili Yönet',
                'edit-btn' => 'Profili Düzenle',

                'general' => [
                    'email'      => 'E-posta',
                    'name'       => 'Ad',
                    'phone'      => 'Telefon Numarası',
                    'shop-slug'  => 'Mağaza Slug',
                    'shop-title' => 'Mağaza Başlığı',
                    'title'      => 'Genel Bilgiler',
                ],

                'about-store' => [
                    'title' => 'Mağaza Hakkında',
                ],

                'meta' => [
                    'meta-description' => 'Meta Açıklama',
                    'meta-keywords'    => 'Meta Anahtar Kelimeler',
                    'meta-title'       => 'Meta Başlık',
                    'title'            => 'Meta Açıklama',
                ],

                'policy' => [
                    'privacy'  => 'Gizlilik Politikası',
                    'return'   => 'İade Politikası',
                    'shipping' => 'Kargo Politikası',
                    'title'    => 'Politikalar',
                ],

                'address' => [
                    'city'     => 'Şehir',
                    'country'  => 'Ülke',
                    'postcode' => 'Posta Kodu',
                    'state'    => 'Eyalet',
                    'title'    => 'Mağaza Adresi',
                    'address'  => 'Adres',
                ],

                'social' => [
                    'link'  => ':name Bağlantısı',
                    'title' => 'Sosyal Bağlantılar',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimum Sipariş Tutarı',
                ],

                'google-analytics' => [
                    'id'    => 'Analytics Kimliği',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Yönetici Komisyonu',
                    'admin-commission-value' => 'Yönetici Komisyonu :rate% toplam Faturalandırılmış Tutar',
                    'allowed-categories'     => 'İzin Verilen Kategoriler',
                    'no-categories'          => 'Mevcut Kategori Yok',
                    'allowed-product-types'  => 'İzin Verilen Ürün Türü',
                    'no-product-types'       => 'Mevcut Ürün Türü Yok',
                    'payment-methods'        => 'Ödeme Yöntemleri',
                    'no-payment-methods'     => 'Mevcut Ödeme Yöntemi Yok',
                    'shipping-methods'       => 'Kargo Yöntemleri',
                    'no-shipping-methods'    => 'Mevcut Kargo Yöntemi Yok',
                    'title'                  => 'Mağaza Bilgileri',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => '13:3 oranında banner yükleyin, yükseklik 375 Güvenli alan 375x250 Mobilde merkezde',
                'delete-banner'       => 'Banner\'ı Sil',
                'delete-logo'         => 'Logoyu Sil',
                'logo'                => 'Logo',
                'logo-description'    => '1:1 oranında logo yükleyin',
                'save-btn'            => 'Profili Kaydet',
                'title'               => 'Profili Yönet',
                'upload-new-banner'   => 'Yeni Banner Yükle',
                'upload-new-logo'     => 'Yeni Logo Yükle',

                'general' => [
                    'email'      => 'E-posta',
                    'name'       => 'Ad',
                    'phone'      => 'Telefon Numarası',
                    'shop-slug'  => 'Mağaza Slug',
                    'shop-title' => 'Mağaza Başlığı',
                    'title'      => 'Genel Bilgiler',
                ],

                'about-store' => [
                    'title' => 'Mağaza Hakkında',
                ],

                'meta' => [
                    'meta-description' => 'Meta Açıklama',
                    'meta-keywords'    => 'Meta Anahtar Kelimeler',
                    'meta-title'       => 'Meta Başlık',
                    'title'            => 'Meta Açıklama',
                ],

                'policy' => [
                    'privacy'  => 'Gizlilik Politikası',
                    'return'   => 'İade Politikası',
                    'shipping' => 'Kargo Politikası',
                    'title'    => 'Politikalar',
                ],

                'address' => [
                    'city'           => 'Şehir',
                    'country'        => 'Ülke',
                    'postcode'       => 'Posta Kodu',
                    'state'          => 'Eyalet',
                    'title'          => 'Mağaza Adresi',
                    'select-country' => 'Ülke Seç',
                    'select-state'   => 'Eyalet Seç',
                    'street-address' => 'Sokak Adresi',
                    'address'        => 'Adres',
                ],

                'social' => [
                    'link'  => ':name Bağlantısı',
                    'title' => 'Sosyal Bağlantılar',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Minimum Sipariş Tutarı',
                ],

                'google-analytics' => [
                    'id'    => 'Google Analytics Kimliği',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Profiliniz başarıyla güncellendi',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Satıcı İncelemeleri',

                'datagrid' => [
                    'approved'    => 'Onaylandı',
                    'customer'    => 'Müşteri',
                    'date'        => 'Tarih',
                    'description' => 'Açıklama',
                    'disapproved' => 'Onaylanmadı',
                    'email'       => 'E-posta',
                    'pending'     => 'Beklemede',
                    'rating'      => 'Değerlendirme',
                    'status'      => 'Durum',
                    'title'       => 'Başlık',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Kaydet',
                    'title'              => 'Genel',
                    'unmatched-password' => 'Mevcut şifre eşleşmiyor',
                    'update-success'     => 'Genel ayarlar başarıyla güncellendi',

                    'regional-setting' => [
                        'currency'      => 'Para Birimi',
                        'locale'        => 'Yerel Ayar',
                        'select-locale' => 'Yerel Ayar Seç',
                        'title'         => 'Bölgesel Ayarlar',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Şifreyi Onayla',
                        'current-password' => 'Mevcut Şifre',
                        'new-password'     => 'Yeni Şifre',
                        'title'            => 'Şifre Ayarları',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Rol Oluştur',
                    'title'      => 'Roller',

                    'datagrid' => [
                        'all'             => 'Tümü',
                        'custom'          => 'Özel',
                        'delete'          => 'Sil',
                        'edit'            => 'Düzenle',
                        'id'              => 'ID',
                        'name'            => 'İsim',
                        'permission-type' => 'İzin Türü',
                    ],
                ],

                'create' => [
                    'access-control' => 'Erişim Kontrolü',
                    'all'            => 'Tümü',
                    'back-btn'       => 'Geri',
                    'custom'         => 'Özel',
                    'description'    => 'Açıklama',
                    'general'        => 'Genel',
                    'name'           => 'İsim',
                    'permissions'    => 'İzinler',
                    'save-btn'       => 'Rolü Kaydet',
                    'title'          => 'Rol Oluştur',
                ],

                'edit' => [
                    'access-control' => 'Erişim Kontrolü',
                    'all'            => 'Tümü',
                    'back-btn'       => 'Geri',
                    'custom'         => 'Özel',
                    'description'    => 'Açıklama',
                    'general'        => 'Genel',
                    'name'           => 'İsim',
                    'permissions'    => 'İzinler',
                    'save-btn'       => 'Rolü Kaydet',
                    'title'          => 'Rolü Düzenle',
                ],

                'being-used'        => 'Bu rol bazı satıcılar tarafından kullanılıyor',
                'create-success'    => 'Rol başarıyla oluşturuldu',
                'delete-failed'     => 'Rol silinemedi',
                'delete-success'    => 'Rol başarıyla silindi',
                'last-delete-error' => 'En az bir rol gereklidir',
                'update-success'    => 'Rol başarıyla güncellendi',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Kullanıcı Oluştur',
                    'create-title'     => 'Kullanıcı Oluştur',
                    'edit-title'       => 'Kullanıcıyı Düzenle',
                    'email'            => 'E-posta',
                    'name'             => 'İsim',
                    'phone-number'     => 'Telefon Numarası',
                    'role'             => 'Rol',
                    'save-btn'         => 'Kullanıcıyı Kaydet',
                    'select-role'      => 'Rol Seçin',
                    'password'         => 'Şifre',
                    'confirm-password' => 'Şifreyi Onayla',
                    'status'           => 'Durum',
                    'title'            => 'Kullanıcılar',
                    'create-success'   => 'Kullanıcı başarıyla oluşturuldu',
                    'update-success'   => 'Kullanıcı başarıyla güncellendi',
                    'delete-success'   => 'Kullanıcı başarıyla silindi',
                    'delete-failed'    => 'Kullanıcı silme başarısız oldu',

                    'datagrid' => [
                        'delete'     => 'Sil',
                        'edit'       => 'Düzenle',
                        'email'      => 'E-posta',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'İsim',
                        'permission' => 'İzin',
                        'phone'      => 'Telefon',

                        'status' => [
                            'title' => 'Durum',

                            'options' => [
                                'active'    => 'Aktif',
                                'suspended' => 'Askıya Alındı',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Envanter Kaynağı Oluştur',
                    'title'      => 'Envanter Kaynakları',

                    'datagrid' => [
                        'active'   => 'Aktif',
                        'code'     => 'Kod',
                        'delete'   => 'Sil',
                        'edit'     => 'Düzenle',
                        'id'       => 'ID',
                        'inactive' => 'Pasif',
                        'name'     => 'Adı',
                        'priority' => 'Öncelik',
                        'status'   => 'Durum',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Envanter Kaynağı Ekle',
                    'address'        => 'Kaynak Adresi',
                    'back-btn'       => 'Geri',
                    'city'           => 'Şehir',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-posta',
                    'contact-fax'    => 'Faks',
                    'contact-info'   => 'İletişim Bilgileri',
                    'contact-name'   => 'Adı',
                    'contact-number' => 'İletişim Numarası',
                    'country'        => 'Ülke',
                    'description'    => 'Açıklama',
                    'general'        => 'Genel',
                    'latitude'       => 'Enlem',
                    'longitude'      => 'Boylam',
                    'name'           => 'Adı',
                    'postcode'       => 'Posta Kodu',
                    'priority'       => 'Öncelik',
                    'save-btn'       => 'Envanter Kaynaklarını Kaydet',
                    'select-country' => 'Ülke Seç',
                    'select-state'   => 'Eyalet Seç',
                    'settings'       => 'Ayarlar',
                    'state'          => 'Eyalet',
                    'status'         => 'Durum',
                    'street'         => 'Sokak',
                    'title'          => 'Envanter Kaynakları',
                ],

                'edit' => [
                    'back-btn'       => 'Geri',
                    'city'           => 'Şehir',
                    'code'           => 'Kod',
                    'contact-email'  => 'E-posta',
                    'contact-fax'    => 'Faks',
                    'contact-info'   => 'İletişim Bilgileri',
                    'contact-name'   => 'Adı',
                    'contact-number' => 'İletişim Numarası',
                    'country'        => 'Ülke',
                    'description'    => 'Açıklama',
                    'general'        => 'Genel',
                    'latitude'       => 'Enlem',
                    'longitude'      => 'Boylam',
                    'name'           => 'Adı',
                    'postcode'       => 'Posta Kodu',
                    'priority'       => 'Öncelik',
                    'save-btn'       => 'Envanter Kaynaklarını Kaydet',
                    'select-country' => 'Ülke Seç',
                    'select-state'   => 'Eyalet Seç',
                    'settings'       => 'Ayarlar',
                    'source-address' => 'Kaynak Adresi',
                    'state'          => 'Eyalet',
                    'status'         => 'Durum',
                    'street'         => 'Sokak',
                    'title'          => 'Envanter Kaynaklarını Düzenle',
                ],

                'create-success'    => 'Envanter Kaynağı Başarıyla Oluşturuldu',
                'delete-failed'     => 'Envanter Kaynakları Silme Başarısız',
                'delete-success'    => 'Envanter Kaynakları Başarıyla Silindi',
                'last-delete-error' => 'Son Envanter Kaynağı Silinemez',
                'update-success'    => 'Envanter Kaynakları Başarıyla Güncellendi',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Yönetici',
                'blocked-message'     => 'Yönetici tarafından engellendiniz',
                'message-failed'      => 'Mesaj gönderimi başarısız oldu',
                'message-placeholder' => 'Mesajınızı buraya yazın...',
                'message-sent'        => 'Mesaj başarıyla gönderildi',
                'no-message'          => 'Mesaj bulunamadı',
                'search-message'      => 'Mesajı ara...',
                'title'               => 'İletişim',

                'filters' => [
                    'all-messages'      => 'Tüm Mesajlar',
                    'prev-fifteen-days' => 'Son 15 Gün',
                    'prev-seven-days'   => 'Son 7 Gün',
                    'prev-six-months'   => 'Son 6 Ay',
                    'prev-thirty-days'  => 'Son 30 Gün',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Terkedilen Sepetler',
                    'abandoned-products'            => 'Terkedilen Ürünler',
                    'abandoned-rate'                => 'Terk Oranı',
                    'abandoned-revenue'             => 'Terk Edilen Gelir',
                    'added-to-cart'                 => 'Sepete Eklendi',
                    'added-to-cart-info'            => 'Sadece :progress ziyaretçisi ürünleri sepete ekledi',
                    'all-channels'                  => 'Tüm Kanallar',
                    'average-order-value-over-time' => 'Zaman İçinde Ortalama Sipariş Değeri',
                    'average-sales'                 => 'Ortalama Sipariş Değeri',
                    'commission'                    => 'Komisyon',
                    'commission-over-time'          => 'Zamanla Komisyon',
                    'count'                         => 'Sayı',
                    'end-date'                      => 'Bitiş Tarihi',
                    'id'                            => 'Kimlik',
                    'interval'                      => 'Aralık',
                    'name'                          => 'Ad',
                    'orders'                        => 'Siparişler',
                    'orders-over-time'              => 'Zaman İçinde Siparişler',
                    'payment-method'                => 'Ödeme Yöntemi',
                    'product-views'                 => 'Ürün Görünümleri',
                    'product-views-info'            => 'Sadece :progress ziyaretçisi ürünleri görüntülüyor',
                    'purchase-funnel'               => 'Satın Alma Hunisi',
                    'purchased'                     => 'Satın Alınan',
                    'purchased-info'                => 'Sadece :progress ziyaretçisi alışveriş yapıyor',
                    'refunds'                       => 'İadeler',
                    'refunds-over-time'             => 'Zaman İçinde İadeler',
                    'sales-over-time'               => 'Zaman İçinde Satışlar',
                    'start-date'                    => 'Başlangıç Tarihi',
                    'tax-collected'                 => 'Toplanan Vergi',
                    'tax-collected-over-time'       => 'Zaman İçinde Toplanan Vergi',
                    'title'                         => 'Satışlar',
                    'top-payment-methods'           => 'En İyi Ödeme Yöntemleri',
                    'top-tax-categories'            => 'En İyi Vergi Kategorileri',
                    'total'                         => 'Toplam',
                    'total-commission-paid'         => 'Ödenen Toplam Komisyon',
                    'total-orders'                  => 'Toplam Siparişler',
                    'total-sales'                   => 'Toplam Satışlar',
                    'total-visits'                  => 'Toplam ziyaretler',
                    'total-visits-info'             => 'Mağazada toplam ziyaretçi',
                    'view-details'                  => 'Detayları Görüntüle',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Tüm Kanallar',
                    'count'                       => 'Sayı',
                    'customers'                   => 'Müşteriler',
                    'customers-over-time'         => 'Zaman İçinde Müşteriler',
                    'customers-traffic'           => 'Müşteri Trafik',
                    'customers-with-most-orders'  => 'En Fazla Sipariş Veren Müşteriler',
                    'customers-with-most-reviews' => 'En Fazla İnceleme Yapan Müşteriler',
                    'customers-with-most-sales'   => 'En Fazla Satış Yapan Müşteriler',
                    'email'                       => 'E-posta',
                    'end-date'                    => 'Bitiş Tarihi',
                    'id'                          => 'Kimlik',
                    'interval'                    => 'Aralık',
                    'name'                        => 'Ad',
                    'orders'                      => 'Siparişler',
                    'reviews'                     => 'İncelemeler',
                    'start-date'                  => 'Başlangıç Tarihi',
                    'title'                       => 'Müşteriler',
                    'top-customer-groups'         => 'En İyi Müşteri Grupları',
                    'total'                       => 'Toplam',
                    'total-customers'             => 'Toplam Müşteriler',
                    'total-visitors'              => 'Toplam Ziyaretçiler',
                    'traffic-over-week'           => 'Haftalık Trafik',
                    'unique-visitors'             => 'Benzersiz Ziyaretçiler',
                    'view-details'                => 'Detayları Görüntüle',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Tüm Kanallar',
                    'channel'                          => 'Kanal',
                    'end-date'                         => 'Bitiş Tarihi',
                    'id'                               => 'Kimlik',
                    'interval'                         => 'Aralık',
                    'locale'                           => 'Bölge',
                    'name'                             => 'Ad',
                    'orders'                           => 'Siparişler',
                    'price'                            => 'Fiyat',
                    'products-added-over-time'         => 'Zaman İçinde Eklenen Ürünler',
                    'products-with-most-reviews'       => 'En Çok İnceleme Alan Ürünler',
                    'products-with-most-visits'        => 'En Çok Ziyaret Alan Ürünler',
                    'quantities'                       => 'Miktarlar',
                    'quantities-sold-over-time'        => 'Zaman İçinde Satılan Miktarlar',
                    'revenue'                          => 'Gelir',
                    'reviews'                          => 'İncelemeler',
                    'start-date'                       => 'Başlangıç Tarihi',
                    'title'                            => 'Ürünler',
                    'top-selling-products-by-quantity' => 'Miktarına Göre En Çok Satılan Ürünler',
                    'top-selling-products-by-revenue'  => 'Gelire Göre En Çok Satılan Ürünler',
                    'total'                            => 'Toplam',
                    'total-products-added-to-wishlist' => 'İstek Listesine Eklenen Ürünler',
                    'total-sold-quantities'            => 'Satılan Ürün Miktarı',
                    'view-details'                     => 'Detayları Görüntüle',
                    'visits'                           => 'Ziyaretler',
                ],
            ],

            'view' => [
                'all-channels'  => 'Tüm Kanallar',
                'day'           => 'Gün',
                'end-date'      => 'Bitiş Tarihi',
                'export-csv'    => 'CSV Olarak Dışa Aktar',
                'export-xls'    => 'XLS Olarak Dışa Aktar',
                'month'         => 'Ay',
                'not-available' => 'Kayıt bulunamadı.',
                'start-date'    => 'Başlangıç Tarihi',
                'year'          => 'Yıl',
            ],

            'empty' => [
                'info'  => 'Seçilen aralık için veri mevcut değil',
                'title' => 'Veri Mevcut Değil',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Devre Dışı',
                'enabled'   => 'Etkin',
                'info'      => 'Bagisto’nun özelleştirilebilir e-Ticaret eklentileriyle çevrimiçi mağazanızı oluşturun, yönetin ve ölçeklendirin.',
                'no-result' => 'Burada mevcut bir eklenti yok.',
                'title'     => 'Eklentiler',

                'filters' => [
                    'all-extensions' => 'Tüm Eklentiler',
                    'bulk_upload'    => 'Toplu Yükleme',
                    'gdpr'           => 'GDPR',
                    'marketplace'    => 'Pazar Yeri',
                    'payment'        => 'Ödeme',
                    'pos'            => 'POS',
                    'shipping'       => 'Kargo',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Satıcı Logosu',
                'switch-to-store' => 'Mağazayı yönetmeye geç',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => ':shop_title için minimum sipariş tutarı',
                'product-not-available' => 'Ürün mevcut değil',
                'sold-by'               => 'Satıldı',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Gün* Ödeme',
                'deals-in'            => 'Anlaşmalar',
                'featured-seller'     => 'Öne Çıkan Satıcılarımız',
                'online-business'     => 'Çevrimiçi İş',
                'reviews'             => ':count İncelemeler',
                'seller-community'    => 'Satıcı Topluluğu',
                'serviceable-pincode' => 'Hizmet Verilebilir Posta Kodu',
                'start-selling'       => 'Dünya çapında, günün her saati büyük müşterilere satış yapmaya başlayın.',
                'step'                => 'Adım :count',
                'visit-shop'          => 'Mağazayı ziyaret edin',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Sepete Ekle',
            'delivery-info' => 'Teslimat Bilgisi buraya gelir',
            'hide'          => 'Gizle',
            'more-info'     => 'Daha Fazla Bilgi',
            'seller-count'  => ':count daha fazla satıcı aynı ürünü satıyor',
            'seller-info'   => 'Satıcı Bilgisi',
            'sold-by'       => 'Satış Yapan',
            'top-selling'   => 'En Çok Satan',

            'flag' => [
                'alert'              => 'Uyarı',
                'already-reported'   => 'Bu ürünü zaten bildirdiniz',
                'create-success'     => 'Ürün başarıyla bildirildi',
                'guest-alert'        => 'Bu ürünü bildirmek için giriş yapmanız gerekiyor',
                'not-allowed'        => 'Sipariş vermeden bu ürünü bildiremezsiniz',
                'other-reason'       => 'Diğer Sebep',
                'reason'             => 'Sebep',
                'reason-placeholder' => 'Lütfen sebebi belirtin',
                'report-product'     => 'Ürünü Bildir',
                'select-reason'      => 'Sebep Seçin',
                'submit-btn'         => 'Gönder',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Satıcı henüz onaylanmadı',
                'products-count'  => 'Ürünler (:count)',
                'reviews-count'   => 'Yorumlar (:count)',
                'search-text'     => 'Ürünleri ara',

                'about' => [
                    'title'           => 'Hakkımızda',
                    'about-us'        => 'Hakkımızda',
                    'shipping-policy' => 'Kargo Politikası',
                    'privacy-policy'  => 'Gizlilik Politikası',
                    'return-policy'   => 'İade Politikası',
                ],

                'contact-form' => [
                    'title'          => 'İletişim',
                    'name'           => 'İsim',
                    'email'          => 'E-posta',
                    'subject'        => 'Konu',
                    'query'          => 'Sorgu',
                    'submit-btn'     => 'Gönder',
                    'create-success' => 'Sorgunuz başarıyla gönderildi',
                ],

                'share' => [
                    'title'     => 'Paylaş',
                    'share-on'  => 'Şurada paylaş',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Uyarı',
                    'already-reported'   => 'Bu satıcıyı zaten bildirdiniz',
                    'create-success'     => 'Satıcı başarıyla rapor edildi',
                    'guest-alert'        => 'Satıcıyı rapor etmek için giriş yapmalısınız',
                    'not-allowed'        => 'Sipariş olmadan satıcıyı rapor edemezsiniz',
                    'other-reason'       => 'Diğer Sebep',
                    'reason'             => 'Sebep',
                    'reason-placeholder' => 'Sebebi belirtin',
                    'select-reason'      => 'Sebep Seçin',
                    'submit-btn'         => 'Gönder',
                    'title'              => 'Sorunu Bildir',
                ],

                'reviews' => [
                    'alert'            => 'Uyarı',
                    'already-reviewed' => 'Bu satıcıyı zaten değerlendirdiniz',
                    'comment'          => 'Yorum',
                    'create-success'   => 'Satıcı başarıyla değerlendirildi',
                    'customer-review'  => ':count Müşteri Değerlendirmesi',
                    'customer-reviews' => 'Müşteri Değerlendirmeleri',
                    'guest-alert'      => 'Satıcıyı bildirebilmek için giriş yapmanız gerekiyor',
                    'rating'           => 'Puan',
                    'review-by'        => 'Değerlendiren',
                    'submit-btn'       => 'Gönder',
                    'title'            => 'Başlık',
                    'view-all'         => 'Tüm değerlendirmeleri gör',
                    'write-review'     => 'Bir değerlendirme yaz',
                ],

                'products' => [
                    'no-result' => 'Ürün bulunamadı',
                    'show'      => 'Göster',

                    'sort-by' => [
                        'title' => 'Sırala',

                        'options' => [
                            'cheapest-first'  => 'En ucuzdan başlayarak',
                            'expensive-first' => 'En pahalıdan başlayarak',
                            'from-a-z'        => 'A\'dan Z\'ye',
                            'from-z-a'        => 'Z\'den A\'ya',
                            'latest-first'    => 'En yeniler',
                            'oldest-first'    => 'En eskiler',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Tümünü Temizle',
                        'filter'      => 'Filtre',
                        'filters'     => 'Filtreler:',
                        'price-range' => 'Fiyat Aralığı',
                        'sort'        => 'Sırala',
                    ],
                ],
            ],
        ],
    ],
];
