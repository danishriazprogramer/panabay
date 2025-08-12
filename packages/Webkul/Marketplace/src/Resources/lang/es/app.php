<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Mercado',
                    'info'  => 'Administrar el mercado',

                    'module-info' => [
                        'title'       => 'Información del módulo',
                        'info'        => 'Proporciona información relacionada con la versión de la aplicación.',
                        'app-version' => 'Versión de la aplicación: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Porcentaje de comisión del administrador',
                        'description'                  => 'Administre la configuración general del mercado como estado, comisión, etc.',
                        'lines-in-street-address'      => 'Líneas en la dirección de la calle',
                        'lines-in-street-address-info' => 'Establezca el número de líneas en la dirección de la calle. El valor predeterminado es una línea.',
                        'status'                       => 'Estado',
                        'title'                        => 'General',
                    ],

                    'product' => [
                        'approval-required'         => 'Aprobación requerida',
                        'description'               => 'Administre la configuración de productos del mercado como aprobaciones, banderas, etc.',
                        'enable-flag'               => 'Habilitar bandera',
                        'seller-can-assign-product' => 'El vendedor puede asignar producto',
                        'seller-can-create-product' => 'El vendedor puede crear producto',
                        'show-progress-bar'         => 'Mostrar barra de progreso',
                        'title'                     => 'Producto',
                    ],

                    'seller' => [
                        'approval-required'           => 'Aprobación requerida',
                        'can-cancel-order'            => 'Puede cancelar pedido',
                        'can-create-invoice'          => 'Puede crear factura',
                        'can-create-shipment'         => 'Puede crear envío',
                        'description'                 => 'Administre la configuración del vendedor del mercado, como aprobación, banderas, etc.',
                        'enable-flag'                 => 'Habilitar bandera',
                        'enable-minimum-order-amount' => 'Habilitar monto mínimo de pedido',
                        'enable-seller-flag'          => 'Habilitar bandera del vendedor',
                        'red-flag-limit'              => 'Límite de bandera roja',
                        'red-flag-limit-info'         => 'Si el vendedor supera este límite, se mostrará la bandera roja en el perfil del vendedor.',
                        'show-red-flag'               => 'Mostrar bandera roja en el perfil si se supera el límite',
                        'title'                       => 'Vendedor',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Límite de cantidad',
                        'description' => 'Gestiona los vendedores destacados del mercado.',
                        'status'      => 'Estado',
                        'title'       => 'Vendedores Destacados',

                        'popularity-criteria' => [
                            'all'              => 'Todos',
                            'maximum-orders'   => 'Máximos Pedidos',
                            'maximum-products' => 'Máximos Productos',
                            'maximum-rating'   => 'Calificación máxima',
                            'maximum-sale'     => 'Máxima Venta',
                            'title'            => 'Criterios de Popularidad',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Título del Botón del Banner',
                        'banner-description'  => 'Descripción del Banner',
                        'banner-image'        => 'Imagen del Banner',
                        'banner-title'        => 'Título del Banner',
                        'business-hour'       => 'Horario Comercial',
                        'community-count'     => 'Recuento de Comunidad',
                        'description'         => 'Personaliza la página de inicio del mercado, agregando iconos, banners y descripciones para un aspecto fresco.',
                        'feature-box1-desc'   => 'Descripción de la Caja de la Característica 1',
                        'feature-box1-icon'   => 'Icono de la Caja de la Característica 1',
                        'feature-box1-title'  => 'Título de la Caja de la Característica 1',
                        'feature-box2-desc'   => 'Descripción de la Caja de la Característica 2',
                        'feature-box2-icon'   => 'Icono de la Caja de la Característica 2',
                        'feature-box2-title'  => 'Título de la Caja de la Característica 2',
                        'feature-box3-desc'   => 'Descripción de la Caja de la Característica 3',
                        'feature-box3-icon'   => 'Icono de la Caja de la Característica 3',
                        'feature-box3-title'  => 'Título de la Caja de la Característica 3',
                        'feature-box4-desc'   => 'Descripción de la Caja de la Característica 4',
                        'feature-box4-icon'   => 'Icono de la Caja de la Característica 4',
                        'feature-box4-title'  => 'Título de la Caja de la Característica 4',
                        'feature-description' => 'Descripción de la Característica',
                        'feature-image'       => 'Imagen de la Característica',
                        'feature-title'       => 'Título de la Característica',
                        'journey-description' => 'Descripción del Viaje',
                        'journey-image'       => 'Imagen del Viaje',
                        'journey-step1-desc'  => 'Descripción del Paso 1 del Viaje',
                        'journey-step1-icon'  => 'Icono del Paso 1 del Viaje',
                        'journey-step1-title' => 'Título del Paso 1 del Viaje',
                        'journey-step2-desc'  => 'Descripción del Paso 2 del Viaje',
                        'journey-step2-icon'  => 'Icono del Paso 2 del Viaje',
                        'journey-step2-title' => 'Título del Paso 2 del Viaje',
                        'journey-step3-desc'  => 'Descripción del Paso 3 del Viaje',
                        'journey-step3-icon'  => 'Icono del Paso 3 del Viaje',
                        'journey-step3-title' => 'Título del Paso 3 del Viaje',
                        'journey-step4-desc'  => 'Descripción del Paso 4 del Viaje',
                        'journey-step4-icon'  => 'Icono del Paso 4 del Viaje',
                        'journey-step4-title' => 'Título del Paso 4 del Viaje',
                        'journey-step5-desc'  => 'Descripción del Paso 5 del Viaje',
                        'journey-step5-icon'  => 'Icono del Paso 5 del Viaje',
                        'journey-step5-title' => 'Título del Paso 5 del Viaje',
                        'journey-title'       => 'Título del Viaje',
                        'payment-duration'    => 'Duración del Pago',
                        'serviceable-pincode' => 'Código Postal Servicable',
                        'title'               => 'Página de Aterrizaje',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Asignar Producto',
            'communications'    => 'Comunicaciones',
            'create'            => 'Crear',
            'delete'            => 'Eliminar',
            'edit'              => 'Editar',
            'flag-reasons'      => 'Razones de denuncia',
            'inventory-sources' => 'Fuentes de Inventario',
            'orders'            => 'Pedidos',
            'pay'               => 'Pagar',
            'payment-request'   => 'Solicitud de Pago',
            'product-reviews'   => 'Reseñas de productos',
            'products'          => 'Productos',
            'reviews'           => 'Reseñas de vendedores',
            'seller-categories' => 'Categorías de vendedores',
            'sellers'           => 'Vendedores',
            'title'             => 'Mercado',
            'transactions'      => 'Transacciones',
            'view'              => 'Ver',
        ],

        'menu' => [
            'communications'    => 'Comunicaciones',
            'flag-reasons'      => 'Razones de Marca',
            'inventory-sources' => 'Fuentes de Inventario',
            'orders'            => 'Pedidos',
            'payment-requests'  => 'Solicitudes de Pago',
            'product-reviews'   => 'Reseñas del Producto',
            'products'          => 'Productos',
            'seller-categories' => 'Categorías de vendedores',
            'seller-reviews'    => 'Reseñas del Vendedor',
            'sellers'           => 'Vendedores',
            'title'             => 'Mercado',
            'transactions'      => 'Transacciones',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Agregar Vendedores',
                'delete-failed'      => 'Error al eliminar el vendedor.',
                'delete-success'     => 'Vendedor eliminado exitosamente.',
                'incomplete-profile' => '¡El vendedor tiene un perfil incompleto!',
                'login-message'      => 'Has iniciado sesión como :seller_name',
                'pending-orders'     => 'El vendedor tiene algunas órdenes pendientes',
                'title'              => 'Vendedores',
                'update-success'     => 'Vendedor actualizado exitosamente.',

                'datagrid' => [
                    'add-product'     => 'Agregar',
                    'approved'        => 'Aprobado',
                    'assign-product'  => 'Asignar producto',
                    'created-at'      => 'Creado en',
                    'delete'          => 'Eliminar',
                    'disapproved'     => 'Desaprobado',
                    'edit'            => 'Editar',
                    'email'           => 'Correo electrónico',
                    'flags'           => 'Banderas',
                    'id'              => 'ID',
                    'login-as-seller' => 'Iniciar sesión como vendedor',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Nombre del vendedor',
                    'shop-url'        => 'URL de la tienda',
                    'status'          => 'Estado',
                    'suspended'       => 'Suspendido',
                    'total-flags'     => 'Total de banderas: :count',
                    'update-status'   => 'Actualizar estado',
                ],

                'create'  => [
                    'address'        => 'Dirección',
                    'street-address' => 'Dirección de la Calle',
                    'city'           => 'Ciudad',
                    'country'        => 'País',
                    'email'          => 'Correo electrónico',
                    'name'           => 'Nombre',
                    'phone'          => 'Número de teléfono',
                    'postcode'       => 'Código postal',
                    'save-btn'       => 'Guardar',
                    'select'         => 'Seleccionar',
                    'shop-title'     => 'Título de la tienda',
                    'shop-url'       => 'URL de la tienda',
                    'state'          => 'Estado',
                    'success'        => 'Vendedor creado exitosamente.',
                    'title'          => 'Crear vendedor',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Banderas del vendedor',

                    'datagrid' => [
                        'id'             => 'Id',
                        'customer-name'  => 'Nombre del cliente',
                        'customer-email' => 'Correo electrónico del cliente',
                        'date'           => 'Fecha',
                        'reason'         => 'Razón',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Volver',
                'image-placeholder' => 'Imagen del Producto',
                'no-result'         => '¡No se encontraron resultados!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Buscar Productos',
            ],

            'assign-product' => [
                'already-selling'     => 'El vendedor ya está vendiendo este producto',
                'assign-successfully' => 'Producto asignado con éxito al vendedor.',
                'back-btn'            => 'Atrás',
                'condition'           => 'Condición',
                'description'         => 'Descripción',
                'new'                 => 'Nuevo',
                'old'                 => 'Viejo',
                'price'               => 'Precio',
                'product-not-allowed' => 'El vendedor no tiene permitido vender productos de tipo :type.',
                'quantities'          => 'Cantidades',
                'save-btn'            => 'Guardar',
                'select-condition'    => 'Seleccionar condición',
                'title'               => 'Asignar Producto',

                'seller-details' => [
                    'additional-info' => 'Información adicional',
                    'approved'        => 'Aprobado',
                    'disapproved'     => 'Desaprobado',
                    'no-of-products'  => 'N.º de productos',
                    'status'          => 'Estado',
                    'suspended'       => 'Suspendido',
                    'title'           => 'Detalles del vendedor',
                ],

                'product-details' => [
                    'active'            => 'Activo',
                    'disable'           => 'Deshabilitar',
                    'title'             => 'Detalles del producto',
                    'image-placeholder' => 'Imagen del producto',
                ],

                'images' => [
                    'info'  => 'La resolución de la imagen debe ser de aproximadamente 609px x 560px',
                    'title' => 'Imágenes',
                ],

                'videos' => [
                    'error' => 'El video no puede ser mayor de :max kilobytes. Por favor, elija un archivo más pequeño.',
                    'info'  => 'El tamaño máximo del video debe ser de aproximadamente :size',
                    'title' => 'Videos',
                ],

                'configurable' => [
                    'delete-btn'        => 'Eliminar',
                    'edit-btn'          => 'Editar',
                    'image-placeholder' => 'Imagen del Producto',
                    'qty'               => 'Cant. - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Variaciones',

                    'edit' => [
                        'images'     => 'Imágenes',
                        'price'      => 'Precio',
                        'quantities' => 'Cantidades',
                        'save-btn'   => 'Guardar',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Agregar Enlace',
                        'delete-btn'  => 'Eliminar',
                        'edit-btn'    => 'Editar',
                        'empty-info'  => 'Para crear un enlace sobre la marcha.',
                        'empty-title' => 'Agregar Enlace',
                        'file'        => 'Archivo : ',
                        'info'        => 'El tipo de producto descargable permite vender productos digitales, como libros electrónicos, aplicaciones de software, música, juegos, etc.',
                        'sample-file' => 'Archivo de Muestra : ',
                        'sample-url'  => 'URL de Muestra : ',
                        'title'       => 'Enlaces Descargables',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Descarga Permitida',
                            'file'        => 'Archivo',
                            'file-type'   => 'Tipo de Archivo',
                            'name'        => 'Título',
                            'price'       => 'Precio',
                            'sample'      => 'Muestra',
                            'sample-type' => 'Tipo de Muestra',
                            'save-btn'    => 'Guardar',
                            'title'       => 'Enlace',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Agregar Muestra',
                        'delete-btn'  => 'Eliminar',
                        'edit-btn'    => 'Editar',
                        'empty-info'  => 'Para crear una muestra sobre la marcha.',
                        'empty-title' => 'Agregar Muestra',
                        'file'        => 'Archivo : ',
                        'info'        => 'El tipo de producto descargable permite vender productos digitales, como libros electrónicos, aplicaciones de software, música, juegos, etc.',
                        'title'       => 'Muestras Descargables',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'Archivo',
                            'file-type' => 'Tipo de Archivo',
                            'name'      => 'Título',
                            'save-btn'  => 'Guardar',
                            'title'     => 'Enlace',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Volver',
                'suspended'      => 'Suspendido',
                'title'          => 'Editar Vendedor',
                'update-btn'     => 'Actualizar Vendedor',
                'update-success' => 'Vendedor actualizado exitosamente.',

                'shop' => [
                    'address'          => 'Dirección',
                    'street-address'   => 'Dirección de la Calle',
                    'city'             => 'Ciudad',
                    'country'          => 'País',
                    'description'      => 'Descripción',
                    'email'            => 'Correo electrónico',
                    'name'             => 'Nombre',
                    'phone-number'     => 'Número de teléfono',
                    'postcode'         => 'Código postal',
                    'select'           => 'Seleccionar',
                    'shop-title'       => 'Título de la tienda',
                    'state'            => 'Estado',
                    'title'            => 'Detalles de la tienda',
                    'url'              => 'URL de la tienda',
                ],

                'profile' => [
                    'banner'       => 'Banner del Perfil',
                    'banner-size'  => 'El tamaño del banner debe ser de 300px x 200px',
                    'logo'         => 'Logo del Perfil',
                    'logo-size'    => 'El tamaño del logo debe ser de 125px x 125px',
                    'social-links' => 'Enlace de :name',
                    'title'        => 'Detalles del Perfil',
                ],

                'allowed-product' => [
                    'title'  => 'Productos Permitidos',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Monto Mínimo del Pedido',
                ],

                'google-analytics-id' => [
                    'title'  => 'ID de Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Porcentaje',
                    'status'     => 'Estado',
                    'title'      => 'Comisión del Vendedor',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Descripción',
                    'meta-keyword'     => 'Meta Palabra Clave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Información Meta',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidad',
                    'return'   => 'Política de Devolución',
                    'shipping' => 'Política de Envío',
                    'title'    => 'Políticas',
                ],

                'channels' => [
                    'title' => 'Canal',
                ],

                'users' => [
                    'email' => 'Correo electrónico',
                    'id'    => 'ID',
                    'name'  => 'Nombre',
                    'phone' => 'Teléfono',
                    'title' => 'Usuarios',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Agregar productos',
                'delete-success' => 'Producto eliminado exitosamente.',
                'title'          => 'Productos',
                'update-success' => 'Producto actualizado exitosamente.',

                'datagrid' => [
                    'approved'       => 'Aprobado',
                    'delete'         => 'Eliminar',
                    'disapproved'    => 'Desaprobado',
                    'flags'          => 'Banderas',
                    'id'             => 'ID',
                    'is-owner'       => 'Es propietario',
                    'no'             => 'No',
                    'out-of-stock'   => 'Agotado',
                    'price'          => 'Precio',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Nombre del producto',
                    'product-number' => 'Número de producto',
                    'product-type'   => 'Tipo de producto',
                    'quantity'       => 'Cantidad',
                    'seller-name'    => 'Nombre del vendedor',
                    'sku'            => 'SKU',
                    'status'         => 'Estado',
                    'total-flags'    => 'Total de banderas: :count',
                    'total-quantity' => ':quantity Disponible',
                    'update-status'  => 'Actualizar estado',
                    'yes'            => 'Sí',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Banderas de Producto',

                    'datagrid' => [
                        'customer-email' => 'Correo Electrónico del Cliente',
                        'customer-name'  => 'Nombre del Cliente',
                        'date'           => 'Fecha',
                        'id'             => 'ID',
                        'reason'         => 'Razón',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Detalles de la reseña',
                'title'          => 'Reseñas de productos',

                'datagrid' => [
                    'approved'      => 'Aprobado',
                    'comment'       => 'Comentario',
                    'customer-name' => 'Nombre del cliente',
                    'date'          => 'Fecha',
                    'disapproved'   => 'Desaprobado',
                    'id'            => 'ID',
                    'images'        => 'Imágenes',
                    'pending'       => 'Pendiente',
                    'product'       => 'Producto',
                    'product-name'  => 'Nombre del producto',
                    'rating'        => 'Calificación',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Título de la tienda',
                    'status'        => 'Estado',
                    'title'         => 'Título',
                    'update-status' => 'Estado de actualización',
                    'view'          => 'Ver',
                ],
            ],

            'update-success' => 'Las revisiones de producto se han actualizado correctamente',
            'delete-success' => 'Reseñas de productos eliminadas con éxito.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Reseñas del vendedor',

                'datagrid' => [
                    'approved'            => 'Aprobado',
                    'comment'             => 'Comentario',
                    'customer-name'       => 'Nombre del cliente',
                    'date'                => 'Fecha',
                    'delete'              => 'Eliminar',
                    'disapproved'         => 'Desaprobado',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Reseñas del vendedor eliminadas con éxito.',
                    'mass-update-success' => 'Reseñas del vendedor actualizadas con éxito.',
                    'pending'             => 'Pendiente',
                    'rating'              => 'Calificación',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Título de la reseña',
                    'seller-name'         => 'Nombre del vendedor',
                    'shop-title'          => 'Título de la tienda',
                    'status'              => 'Estado',
                    'update-status'       => 'Actualizar estado',
                ],
            ],

            'delete-success' => 'Reseña del vendedor eliminada con éxito.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Órdenes',

                'datagrid' => [
                    'canceled'        => 'Cancelado',
                    'closed'          => 'Cerrado',
                    'commission'      => 'Comisión',
                    'completed'       => 'Completado',
                    'customer'        => 'Cliente',
                    'date'            => 'Fecha',
                    'discount'        => 'Descuento',
                    'email'           => 'Correo Electrónico',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Monto Bruto',
                    'id'              => 'ID',
                    'items'           => 'Artículos',
                    'location'        => 'Ubicación',
                    'order-id'        => 'ID del Pedido - #:id',
                    'payment'         => 'Pago',
                    'pending'         => 'Pendiente',
                    'pending-payment' => 'Pago Pendiente',
                    'processing'      => 'Procesando',
                    'seller'          => 'Vendedor',
                    'seller-earn'     => 'Ganancia',
                    'shipment'        => 'Envío',
                    'shop'            => 'Tienda',
                    'status'          => 'Estado',
                    'view'            => 'Ver',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transacciones',

                'datagrid' => [
                    'base-total'     => 'Total base',
                    'comment'        => 'Comentario',
                    'customer-name'  => 'Nombre del cliente',
                    'id'             => 'ID',
                    'seller-id'      => 'ID del vendedor',
                    'seller-name'    => 'Nombre del vendedor',
                    'transaction-id' => 'ID de transacción',
                    'view'           => 'Ver',
                ],
            ],

            'view' => [
                'commission'        => 'Comisión',
                'created-on'        => 'creado el :date,',
                'name'              => 'Nombre',
                'payment-method'    => 'Pago con :method',
                'price'             => 'Precio',
                'qty'               => 'Cant.',
                'seller-total'      => 'Total del vendedor',
                'shipping-handling' => 'Envío y manipulación',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Impuesto',
                'title'             => 'Transacción #:transaction_id',
                'total'             => 'Total',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Crear Razón',
                'delete-success'      => 'Razón de Marca eliminada con éxito.',
                'mass-delete-success' => 'Razones de Marca eliminadas con éxito.',
                'mass-update-success' => 'Razones de Marca actualizadas con éxito.',
                'title'               => 'Razones de Marca',

                'datagrid' => [
                    'delete'        => 'Eliminar',
                    'edit'          => 'Editar',
                    'id'            => 'Id',
                    'name'          => 'Nombre',
                    'update-status' => 'Actualizar Estado',

                    'status' => [
                        'active'  => 'Activo',
                        'disable' => 'Desactivar',
                        'title'   => 'Estado',
                    ],

                    'type' => [
                        'product' => 'Producto',
                        'seller'  => 'Vendedor',
                        'title'   => 'Tipo',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Atrás',
                'general'  => 'General',
                'label'    => 'Etiqueta',
                'product'  => 'Producto',
                'save-btn' => 'Guardar Razón',
                'seller'   => 'Vendedor',
                'status'   => 'Estado',
                'title'    => 'Crear Razón',
                'type'     => 'Tipo',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Atrás',
                'general'  => 'General',
                'label'    => 'Etiqueta',
                'product'  => 'Producto',
                'save-btn' => 'Guardar Razón',
                'seller'   => 'Vendedor',
                'status'   => 'Estado',
                'title'    => 'Editar Razón',
                'type'     => 'Tipo',
            ],

            'create-success' => 'Razón de Marca creada con éxito.',
            'update-success' => 'Razón de Marca actualizada con éxito.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Asignar Categoría',
                'create-success' => 'Categoría asignada exitosamente.',
                'delete-failed'  => '¡Error al eliminar la categoría!',
                'delete-success' => 'Categoría eliminada con éxito.',
                'title'          => 'Categorías de Vendedor',
                'update-success' => 'Categoría actualizada con éxito.',

                'datagrid' => [
                    'delete' => 'Eliminar',
                    'edit'   => 'Editar',
                    'id'     => 'ID',
                    'name'   => 'Nombre',
                ],
            ],

            'create' => [
                'back-btn'      => 'Atrás',
                'save-btn'      => 'Guardar categoría',
                'select-seller' => 'Seleccionar vendedor',
                'seller'        => 'Vendedor',
                'title'         => 'Asignar Categoría',
            ],

            'edit' => [
                'back-btn'   => 'Atrás',
                'seller'     => 'Vendedor',
                'title'      => 'Editar categoría',
                'update-btn' => 'Actualizar categoría',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Comentario',
                'no-amount-remaining'  => '¡No queda cantidad por pagar!',
                'order-not-found'      => '¡Orden no encontrada!',
                'pay-btn'              => 'Pagar ahora',
                'pay-to-seller'        => 'Pago al vendedor',
                'payment-success'      => '¡El pago al vendedor se realizó con éxito!',
                'something-went-wrong' => '¡Algo salió mal!',
                'title'                => 'Solicitud de pago',

                'datagrid' => [
                    'already-paid'          => 'Ya pagado',
                    'canceled'              => 'Cancelada',
                    'closed'                => 'Cerrada',
                    'completed'             => 'Completada',
                    'customer-name'         => 'Nombre del cliente',
                    'date'                  => 'Fecha',
                    'email'                 => 'Correo electrónico',
                    'fraud'                 => 'Fraude',
                    'gross-amt'             => 'Monto bruto',
                    'id'                    => 'ID de orden',
                    'invoice-pending'       => 'Factura pendiente',
                    'order-canceled'        => 'Orden cancelada',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Pagar',
                    'pending'               => 'Pendiente',
                    'pending-payment'       => 'Pago pendiente',
                    'processing'            => 'Procesando',
                    'refunded'              => 'Reembolsado',
                    'remaining-total'       => 'Total restante',
                    'request-payment'       => 'Solicitar pago',
                    'seller'                => 'Vendedor',
                    'seller-total-invoiced' => 'Total facturado al vendedor',
                    'shop'                  => 'Tienda',
                    'status'                => 'Estado',
                    'total-paid'            => 'Total pagado',
                    'view'                  => 'Ver',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Bloquear Vendedor',
                'block-success'        => '¡Vendedor bloqueado con éxito!',
                'chat-history-cleared' => '¡Historial de chat borrado con éxito!',
                'clear-chat-history'   => 'Borrar historial de chat',
                'exit'                 => 'Salir',
                'message-failed'       => '¡Error al enviar el mensaje!',
                'message-sent'         => '¡Mensaje enviado con éxito!',
                'no-message'           => '¡No se encontraron mensajes!',
                'search'               => 'Buscar',
                'search-message'       => 'Buscar mensaje',
                'seller-blocked'       => 'Has bloqueado a este vendedor. No puedes enviar mensajes a este vendedor.',
                'sellers'              => 'Vendedores',
                'title'                => 'Comunicaciones',
                'type-message'         => 'Escribe tu mensaje aquí...',
                'unblock-seller'       => 'Desbloquear Vendedor',
                'unblock-success'      => '¡Vendedor desbloqueado con éxito!',
                'welcome-message'      => '¡Bienvenido a la Comunicación del Marketplace!',

                'filters' => [
                    'all-messages'      => 'Todos los mensajes',
                    'prev-fifteen-days' => 'Últimos 15 días',
                    'prev-seven-days'   => 'Últimos 7 días',
                    'prev-six-months'   => 'Últimos 6 meses',
                    'prev-thirty-days'  => 'Últimos 30 días',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Fuentes de Inventario',

                'datagrid' => [
                    'active'      => 'Activo',
                    'code'        => 'Código',
                    'id'          => 'ID',
                    'inactive'    => 'Inactivo',
                    'name'        => 'Nombre',
                    'seller-name' => 'Nombre del vendedor',
                    'shop-title'  => 'Título de la tienda',
                    'status'      => 'Estado',
                ],

                'view' => [
                    'active'         => 'Activo',
                    'address'        => 'Dirección de la fuente',
                    'city'           => 'Ciudad',
                    'code'           => 'Código',
                    'contact-email'  => 'Correo electrónico',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Información de contacto',
                    'contact-name'   => 'Nombre',
                    'contact-number' => 'Número de contacto',
                    'country'        => 'País',
                    'description'    => 'Descripción',
                    'general-info'   => 'Información general',
                    'inactive'       => 'Inactivo',
                    'latitude'       => 'Latitud',
                    'longitude'      => 'Longitud',
                    'name'           => 'Nombre',
                    'postcode'       => 'Código postal',
                    'priority'       => 'Prioridad',
                    'seller-info'    => 'Información del vendedor',
                    'seller-name'    => 'Nombre del vendedor',
                    'settings'       => 'Configuraciones',
                    'shop-title'     => 'Título de la tienda',
                    'state'          => 'Estado',
                    'street'         => 'Calle',
                    'title'          => 'Fuente de Inventario #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Instalar el paquete de Marketplace.',
            'migrate'     => 'Migrando todas las tablas a la base de datos (esto tomará un tiempo)...',
            'seed'        => 'Insertando datos en la base de datos...',
            'publish'     => 'Publicando recursos y configuraciones...',
            'cache'       => 'Limpiando la caché...',
            'finish'      => 'Paquete de Marketplace instalado con éxito.',
        ],

        'version' => [
            'description' => 'Muestra la versión actual del paquete de Marketplace.',
            'comment'     => 'Versión de Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Estimado/a :customer_name',
        'dear-admin'  => 'Estimado/a Administrador/a',
        'dear-seller' => 'Estimado vendedor',

        'seller' => [
            'registration' => [
                'date'        => 'Fecha de Registro:',
                'description' => 'Nos complace informarle sobre un nuevo registro de vendedor en nuestra plataforma. Por favor, tómese un momento para dar la bienvenida al vendedor a nuestra plataforma.',
                'details'     => 'Aquí están los detalles:',
                'email'       => 'Dirección de Correo Electrónico:',
                'greeting'    => 'Espero que esta mensaje le encuentre bien.',
                'name'        => 'Nombre del Vendedor:',
                'shop'        => 'URL de la Tienda:',
                'subject'     => 'Nuevo Registro de Vendedor',
            ],

            'forgot-password' => [
                'description'    => 'Recibes este correo electrónico porque hemos recibido una solicitud para restablecer la contraseña de tu cuenta.',
                'greeting'       => '¡Olvidaste la contraseña!',
                'reset-password' => 'Restablecer contraseña',
                'subject'        => 'Correo electrónico de restablecimiento de contraseña',
            ],

            'welcome' => [
                'description' => '¡Bienvenido/a! Estamos emocionados de tenerte en la familia. Tu presencia como vendedor/a agrega un valor inmenso a nuestra plataforma, y esperamos una asociación exitosa.',
                'greeting'    => '¡Bienvenido/a y gracias por registrarte con nosotros!',
                'subject'     => 'Notificación de Bienvenida al Vendedor',
            ],

            'approval' => [
                'approved'    => 'Su solicitud para convertirse en vendedor ha sido aprobada.',
                'disapproved' => 'Su solicitud para convertirse en vendedor ha sido rechazada.',
                'greeting'    => '¡Bienvenido/a y gracias por registrarte con nosotros!',
                'subject'     => 'Notificación de Aprobación del Vendedor',
            ],

            'update' => [
                'description' => 'Tu perfil ha sido actualizado exitosamente.',
                'greeting'    => 'Espero que esta mensaje le encuentre bien.',
                'subject'     => 'Notificación de Actualización del Perfil del Vendedor',
            ],

            'good-bye' => [
                'description' => 'Trabajar contigo ha sido un placer, y estoy realmente agradecido por tu profesionalismo, dedicación y la alta calidad de tus productos/servicios. Tu compromiso con garantizar la satisfacción del cliente no ha pasado desapercibido, y ha sido un factor clave en nuestra experiencia positiva.',
                'greeting'    => 'Confío en que este mensaje le encuentre bien.',
                'subject'     => 'Notificación de Despedida del Vendedor',
            ],

            'product-approval' => [
                'approved'    => 'Tu producto :name ha sido aprobado.',
                'disapproved' => 'Tu producto :name ha sido desaprobado.',
                'greeting'    => '¡Bienvenido y gracias por registrarte con nosotros!',
                'subject'     => 'Notificación de Aprobación de Producto del Vendedor',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Tienes un nuevo pedido :order_id realizado el :created_at',
                    'subject'  => 'Confirmación de Nuevo Pedido',
                    'summary'  => 'Resumen del Pedido',
                    'title'    => '¡Confirmación de Pedido!',
                ],

                'canceled' => [
                    'greeting' => 'El pedido :order_id ha sido cancelado',
                    'subject'  => 'Confirmación de cancelación de pedido',
                    'summary'  => 'Resumen del pedido',
                    'title'    => '¡Pedido cancelado!',
                ],

                'billing-address'   => 'Dirección de Facturación',
                'contact'           => 'Contacto',
                'discount'          => 'Descuento',
                'grand-total'       => 'Total General',
                'name'              => 'Nombre',
                'payment'           => 'Pago',
                'price'             => 'Precio',
                'qty'               => 'Cantidad',
                'shipping'          => 'Envío',
                'shipping-address'  => 'Dirección de Envío',
                'shipping-handling' => 'Envío y Manipulación',
                'sku'               => 'SKU',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Impuesto',
            ],

            'payment-request' => [
                'greeting'  => 'Espero que este mensaje te encuentre bien.',
                'paid'      => 'Hola.. Has recibido el pago por el pedido :order_id.',
                'requested' => 'El vendedor :seller_name está solicitado para el pago del pedido :order_id.',
                'subject'   => 'Notificación de solicitud de pago al vendedor',
            ],
        ],

        'contact-seller' => [
            'email'    => 'Correo electrónico:- :email',
            'greeting' => 'Espero que este mensaje te encuentre bien.',
            'info'     => 'Hola, :name tiene una pregunta para ti. Por favor, revisa los detalles a continuación.',
            'query'    => 'Consulta: :query',
            'subject'  => 'Notificación de contacto al vendedor',
            'topic'    => 'Asunto: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Hola, ":name" ha informado de un problema con el producto ":product_name" del vendedor ":seller_name". Por favor, revise los detalles a continuación.',
            'greeting'   => 'Espero que este mensaje le encuentre bien.',
            'reason'     => 'Razón:- :reason',
            'seller-msg' => 'Hola, ":name" ha informado de un problema con su producto ":product_name". Por favor, revise los detalles a continuación.',
            'subject'    => 'Notificación de informe de producto',
        ],

        'report-seller' => [
            'admin-msg'  => 'Hola, :name ha informado un problema contra :seller_name. Por favor, revisa los detalles a continuación.',
            'greeting'   => 'Espero que este mensaje te encuentre bien.',
            'reason'     => 'Motivo: :reason',
            'seller-msg' => 'Hola, :name ha informado un problema que te concierne. Por favor, revisa los detalles a continuación.',
            'subject'    => 'Notificación de informe al vendedor',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Crea una cuenta de vendedor en Velocity',
            'banner-description'  => 'Velocity puede ser una gran plataforma para vender tus productos a negocios de nueva era en India. Siguiendo estos consejos, puedes prepararte para el éxito como vendedor en Velocity!',
            'banner-btn-title'    => 'Abrir Tienda',
            'feature-title'       => '¿Por qué los vendedores aman vender en Velocity?',
            'feature-description' => 'Los vendedores aman las plataformas de alta velocidad porque ofrecen el potencial de aumentar las ventas, mejor exposición y una experiencia de venta eficiente que puede contribuir al crecimiento y éxito del negocio.',
            'feature-box1-title'  => 'Oportunidades de Ventas Aumentadas',
            'feature-box1-desc'   => 'Los vendedores aman las plataformas de alta velocidad porque ofrecen el potencial de aumentar las ventas, mejor exposición y una experiencia de venta eficiente que puede contribuir al crecimiento y éxito del negocio.',
            'feature-box2-title'  => 'Tiempo de Respuesta Rápido',
            'feature-box2-desc'   => 'Los productos tienden a venderse más rápidamente en plataformas de alta velocidad, lo que lleva a una rotación de inventario más rápida y generación de ingresos para los vendedores.',
            'feature-box3-title'  => 'Visibilidad Mejorada',
            'feature-box3-desc'   => 'Estas plataformas ofrecen mayor visibilidad y exposición para los productos del vendedor, resultando en más vistas y ventas potenciales.',
            'feature-box4-title'  => 'Eficiencia y Conveniencia',
            'feature-box4-desc'   => 'Las plataformas de alta velocidad a menudo tienen procesos y herramientas optimizadas que hacen que la venta sea más eficiente, ahorrando tiempo y esfuerzo a los vendedores en la gestión de sus negocios en línea.',
            'journey-title'       => 'Comienza tu viaje en Velocity',
            'journey-description' => 'Comienza a vender con grandes clientes de todo el mundo, las 24 horas del día.',
            'journey-step1-title' => 'Conviértete en Vendedor',
            'journey-step1-desc'  => 'Configura tu tienda, con toda la información básica.',
            'journey-step2-title' => 'Lista de Productos',
            'journey-step2-desc'  => 'Lista los productos en la tienda para que los clientes los vean y compren.',
            'journey-step3-title' => 'Recibe Pedido',
            'journey-step3-desc'  => 'Recibe pedidos de una amplia gama de clientes de todo el mundo.',
            'journey-step4-title' => 'Entrega del Producto',
            'journey-step4-desc'  => 'Una vez que el producto es entregado y el pago recibido.',
            'journey-step5-title' => 'Pago',
            'journey-step5-desc'  => 'Solicitud de pago, recibe el pago después de la deducción de la comisión.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Producto dañado',
            'damaged-product-sold'      => 'Producto dañado vendido por el vendedor',
            'duplicate-product'         => 'Producto duplicado',
            'duplicate-product-sold'    => 'Producto duplicado vendido por el vendedor',
            'missing-product-parts'     => 'Faltan partes del producto',
            'over-price-product'        => 'Producto sobrevalorado',
            'over-price-product-sold'   => 'Producto sobrevalorado vendido por el vendedor',
            'poor-product-quality'      => 'Calidad del producto deficiente',
            'poor-product-quality-sold' => 'Calidad del producto deficiente vendido por el vendedor',
            'receive-wrong-product'     => 'Recibir producto equivocado',
            'wrong-product-sold'        => 'Producto equivocado vendido por el vendedor',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Descargar',
                    'export'     => 'Exportar',
                    'no-records' => 'Nada para exportar',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Página de inicio',
                    'logout'     => 'Cerrar sesión',
                    'my-profile' => 'Mi perfil',
                    'visit-shop' => 'Visitar tienda',

                    'mega-search' => [
                        'customers'                       => 'Clientes',
                        'explore-all-customers'           => 'Explorar todos los clientes',
                        'explore-all-matching-customers'  => 'Explorar todos los clientes que coinciden con “:query” (:count)',
                        'explore-all-matching-orders'     => 'Explorar todas las órdenes que coinciden con “:query” (:count)',
                        'explore-all-matching-products'   => 'Explorar todos los productos que coinciden con “:query” (:count)',
                        'explore-all-orders'              => 'Explorar todas las órdenes',
                        'explore-all-products'            => 'Explorar todos los productos',
                        'orders'                          => 'Órdenes',
                        'products'                        => 'Productos',
                        'sku'                             => 'SKU: :sku',
                        'title'                           => 'Búsqueda Mega',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Contraer',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Añadir imagen',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Solo se permiten archivos de imagen (.jpeg, .jpg, .png, ..).',
                ],

                'videos' => [
                    'add-video-btn'     => 'Añadir vídeo',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Solo se permiten archivos de vídeo (.mp4, .mov, .ogg ..).',
                ],

                'documents' => [
                    'add-document-btn'  => 'Añadir documento',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Solo se permiten archivos de documentos (:types ..).',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Frente',
                    'next'       => 'Siguiente',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Tamaño',
                    'text'       => 'Texto',
                    'use-cases'  => 'Casos de uso',
                    'word'       => 'Word',
                    'zoom'       => 'Zoom',
                ],
            ],
        ],
    ],

    'seller' => [
        'menu' => [
            'bookings'          => 'Reservas',
            'communication'     => 'Comunicación',
            'customers'         => 'Clientes',
            'dashboard'         => 'Panel de control',
            'extensions'        => 'Extensiones',
            'general'           => 'General',
            'inventory-sources' => 'Fuentes de Inventario',
            'manage-profile'    => 'Administrar perfil',
            'orders'            => 'Órdenes',
            'product-reviews'   => 'Reseñas de productos',
            'products'          => 'Productos',
            'reporting'         => 'Informes',
            'roles'             => 'Roles',
            'sales'             => 'Ventas',
            'seller-reviews'    => 'Reseñas de vendedores',
            'settings'          => 'Configuraciones',
            'transaction'       => 'Transacción',
            'users'             => 'Usuarios',
        ],

        'acl' => [
            'assign'            => 'Asignar',
            'bookings'          => 'Reservas',
            'cancel'            => 'Cancelar',
            'communication'     => 'Comunicación',
            'create'            => 'Crear',
            'customers'         => 'Clientes',
            'dashboard'         => 'Panel',
            'delete'            => 'Eliminar',
            'edit'              => 'Editar',
            'extensions'        => 'Extensiones',
            'general'           => 'General',
            'inventory-sources' => 'Fuentes de Inventario',
            'invoice'           => 'Factura',
            'orders'            => 'Pedidos',
            'payment-request'   => 'Solicitud de pago',
            'print'             => 'Imprimir',
            'print-invoice'     => 'Imprimir factura',
            'product-reviews'   => 'Reseñas de productos',
            'products'          => 'Productos',
            'reporting'         => 'Informes',
            'sales'             => 'Ventas',
            'seller-reviews'    => 'Reseñas de vendedores',
            'settings'          => 'Configuración',
            'shipment'          => 'Envío',
            'transactions'      => 'Transacciones',
            'view'              => 'Ver',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Agregar nuevo producto',
            'assign'            => 'Asignar',
            'bookings'          => 'Reservas',
            'communication'     => 'Comunicación',
            'create'            => 'Crear',
            'customers'         => 'Clientes',
            'dashboard'         => 'Panel de control',
            'edit'              => 'Editar',
            'extensions'        => 'Extensiones',
            'general'           => 'General',
            'inventory-sources' => 'Fuentes de Inventario',
            'manage-profile'    => 'Administrar perfil',
            'orders'            => 'Órdenes',
            'product-reviews'   => 'Reseñas de productos',
            'products'          => 'Productos',
            'reporting'         => 'Informes',
            'roles'             => 'Roles',
            'sales'             => 'Ventas',
            'seller-reviews'    => 'Reseñas de vendedores',
            'settings'          => 'Configuraciones',
            'title'             => 'Perfil',
            'transaction'       => 'Transacción',
            'users'             => 'Usuarios',
            'view'              => 'Ver',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Iniciar sesión',
            'create-your-account' => 'Crea tu cuenta',
            'email'               => 'Correo electrónico',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (registrado en India). Todos los derechos reservados.',
            'forgot-pass'         => '¿Olvidaste tu contraseña?',
            'form-login-text'     => 'Si tienes una cuenta, inicia sesión con tu dirección de correo electrónico.',
            'invalid-credentials' => 'Por favor, verifica tus credenciales e inténtalo de nuevo.',
            'new-seller'          => '¿Nuevo vendedor?',
            'not-approved'        => 'Tu activación requiere la aprobación del administrador',
            'page-title'          => 'Inicio de sesión del vendedor',
            'password'            => 'Contraseña',
            'show-password'       => 'Mostrar contraseña',
            'suspended-message'   => 'Tu cuenta ha sido suspendida. Contacta al administrador para cualquier consulta.',
            'title'               => 'Iniciar sesión',
        ],

        'signup' => [
            'account-exists'   => '¿Ya tienes una cuenta?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Registrarse',
            'confirm-pass'     => 'Confirmar contraseña',
            'email'            => 'Correo electrónico',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (registrado en India). Todos los derechos reservados.',
            'form-signup-text' => 'Si eres nuevo en nuestra tienda, nos alegra tenerte como miembro.',
            'name'             => 'Nombre',
            'page-title'       => 'Conviértete en vendedor',
            'password'         => 'Contraseña',
            'sign-in-button'   => 'Iniciar sesión',
            'success'          => 'Cuenta creada exitosamente.',
            'url'              => 'URL de la tienda',
        ],

        'forgot-password' => [
            'already-sent'         => 'Ya hemos enviado el enlace para restablecer la contraseña a tu correo electrónico.',
            'back'                 => '¿Volver a iniciar sesión?',
            'bagisto'              => 'Bagisto',
            'email'                => 'Correo electrónico',
            'email-not-exist'      => 'No podemos encontrar un usuario con esa dirección de correo electrónico.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (registrado en India). Todos los derechos reservados.',
            'forgot-password-text' => 'Si olvidaste tu contraseña, recupérala ingresando tu dirección de correo electrónico.',
            'page-title'           => '¿Olvidaste tu contraseña?',
            'reset-link-sent'      => 'Hemos enviado por correo electrónico tu enlace de restablecimiento de contraseña.',
            'sign-in-button'       => 'Iniciar sesión',
            'submit'               => 'Restablecer contraseña',
            'title'                => 'Recuperar contraseña',
        ],

        'reset-password' => [
            'back-link-title'  => 'Volver a Iniciar sesión',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Confirmar contraseña',
            'email'            => 'Correo electrónico registrado',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Registrado en India). Todos los derechos reservados.',
            'password'         => 'Contraseña',
            'submit-btn-title' => 'Restablecer contraseña',
            'title'            => 'Restablecer contraseña',
        ],

        'dashboard' => [
            'add-product'           => 'Agregar producto',
            'avg-order-sell'        => 'Venta promedio por orden',
            'category-info'         => 'No se encontró ninguna categoría para el intervalo seleccionado',
            'complete-profile-link' => 'Completa tu perfil &rarr;',
            'completed-orders'      => 'Completadas (:count)',
            'customer-info'         => 'No se encontraron clientes para el intervalo seleccionado',
            'date-range'            => 'Rango de fechas',
            'empty-threshold'       => 'Umbral vacío',
            'empty-threshold-desc'  => 'No hay productos disponibles',
            'end-date'              => 'Fecha de fin',
            'hi-comment'            => 'Revisa rápidamente lo que está sucediendo en tu tienda.',
            'hi-seller'             => '¡Hola! :seller_name',
            'month'                 => 'Este mes',
            'no-category'           => 'No hay datos disponibles',
            'no-customer'           => 'No hay datos disponibles',
            'no-record-available'   => 'No hay registros disponibles.',
            'order-count'           => ':total Pedidos',
            'overall-details'       => 'Detalles generales',
            'pending-orders'        => 'Pendientes (:count)',
            'per-unit'              => ':precio/Unidad',
            'processing-orders'     => 'En proceso (:count)',
            'product-info'          => 'Agrega productos relacionados sobre la marcha',
            'profile-score'         => 'Puntuación de perfil',
            'profile-score-desc'    => 'Maximiza tu visibilidad manteniendo completa la información de tu perfil.',
            'qty-stock'             => ':qty en stock',
            'refunded-orders'       => 'Reembolsadas (:count)',
            'remaining-payout'      => 'Pago pendiente',
            'start-date'            => 'Fecha de inicio',
            'stock-threshold'       => 'Umbral de stock',
            'title'                 => 'Panel de control',
            'today'                 => 'Hoy',
            'top-categories'        => 'Categorías principales',
            'top-customers'         => 'Cliente con más ventas',
            'top-products'          => 'Productos más vendidos',
            'total-customers'       => 'Total de clientes',
            'total-orders'          => 'Total de órdenes',
            'total-payout'          => 'Pago total',
            'total-sale'            => 'Venta total: :total',
            'total-sales'           => 'Ventas totales',
            'view-all-btn'          => 'Ver todo',
            'visitor-count'         => 'Visitantes - :count',
            'week'                  => 'Esta semana',
            'year'                  => 'Este año',
        ],

        'orders' => [
            'index' => [
                'title' => 'Órdenes',

                'datagrid' => [
                    'canceled'        => 'Cancelada',
                    'closed'          => 'Cerrada',
                    'commission'      => 'Comisión',
                    'completed'       => 'Completada',
                    'customer'        => 'Cliente',
                    'date'            => 'Fecha',
                    'discount'        => 'Descuento',
                    'email'           => 'Correo electrónico',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Monto bruto',
                    'id'              => 'Id',
                    'invoice-pending' => 'Factura pendiente',
                    'items'           => 'Artículos',
                    'location'        => 'Ubicación',
                    'order-id'        => 'ID - #:id',
                    'paid'            => 'Pagado',
                    'payment'         => 'Pago',
                    'payment-request' => 'Solicitud de pago',
                    'pending'         => 'Pendiente',
                    'pending-payment' => 'Pago pendiente',
                    'processing'      => 'Procesando',
                    'refunded'        => 'Reembolsada',
                    'requested'       => 'Solicitada',
                    'seller-earn'     => 'Ganancia del vendedor',
                    'shipment'        => 'Envío',
                    'status'          => 'Estado',
                    'transaction'     => 'Transacción',
                    'view'            => 'Ver',
                ],

                'payment-req-success'  => 'Tu solicitud de pago se ha enviado correctamente',
                'something-went-wrong' => 'Algo salió mal',
            ],

            'view' => [
                'admin-commission'           => 'Comisión del administrador',
                'billing-address'            => 'Dirección de facturación',
                'by-customer'                => 'Por cliente - :name',
                'cancel-btn'                 => 'Cancelar',
                'cancel-confirm-msg'         => '¿Estás seguro de que quieres cancelar esta orden?',
                'cancel-error-msg'           => 'La orden no puede ser cancelada',
                'cancel-success-msg'         => 'La orden ha sido cancelada',
                'canceled'                   => 'Cancelada',
                'closed'                     => 'Cerrada',
                'completed'                  => 'Completada',
                'discount'                   => 'Descuento',
                'fraud'                      => 'Fraude',
                'grand-total'                => 'Total general',
                'info'                       => 'Información',
                'item-canceled'              => 'Cancelado (:qty_canceled)',
                'item-invoice'               => 'Facturado (:qty_invoiced)',
                'item-ordered'               => 'Pedido (:qty_ordered)',
                'item-refunded'              => 'Reembolsado (:qty_refunded)',
                'item-shipped'               => 'Enviado (:qty_shipped)',
                'item-status'                => 'Estado del artículo',
                'payment-method'             => 'Método de pago',
                'pending'                    => 'Pendiente',
                'pending_payment'            => 'Pago pendiente',
                'permission-error'           => 'No tienes permiso para cancelar la orden',
                'place-on'                   => 'Fecha del pedido: :date',
                'price'                      => 'Precio',
                'price-excl-tax'             => 'Precio (sin impuestos)',
                'price-incl-tax'             => 'Precio (con impuestos)',
                'processing'                 => 'Procesando',
                'product'                    => 'Producto',
                'shipping-address'           => 'Dirección de envío',
                'shipping-handling'          => 'Envío y manejo',
                'shipping-method'            => 'Método de envío',
                'shipping-handling-excl-tax' => 'Envío y Manejo (Excl. IVA)',
                'shipping-handling-incl-tax' => 'Envío y Manejo (Incl. IVA)',
                'sub-total-excl-tax'         => 'Subtotal (Excl. IVA)',
                'sub-total-incl-tax'         => 'Subtotal (Incl. IVA)',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Subtotal',
                'tax'                        => 'Impuestos',
                'tax-amount'                 => 'Monto de impuestos',
                'tax-percent'                => 'Porcentaje de impuestos',
                'title'                      => 'Orden #:order_id',
                'total'                      => 'Total',
                'total-due'                  => 'Total pendiente',
                'total-paid'                 => 'Total pagado',
                'total-refunded'             => 'Total reembolsado',
                'total-seller-amt'           => 'Monto total del vendedor',

                'invoices' => [
                    'bank-details'               => 'Detalles Bancarios',
                    'bill-to'                    => 'Facturar a',
                    'contact'                    => 'Contacto',
                    'contact-number'             => 'Número de Contacto',
                    'created-on'                 => 'creado el: :date_time',
                    'date'                       => 'Fecha de la Factura',
                    'discount'                   => 'Descuento',
                    'excl-tax'                   => 'Excl. Impuestos:',
                    'grand-total'                => 'Total General',
                    'individual-invoice'         => 'Factura #:invoice_id',
                    'invoice'                    => 'Factura',
                    'invoice-id'                 => 'ID de Factura',
                    'name'                       => 'Nombre',
                    'order-date'                 => 'Fecha del Pedido',
                    'order-id'                   => 'ID del Pedido',
                    'payment-method'             => 'Método de Pago',
                    'payment-terms'              => 'Términos de Pago',
                    'price'                      => 'Precio',
                    'print'                      => 'Imprimir',
                    'product-name'               => 'Nombre del Producto',
                    'qty'                        => 'Cant.',
                    'ship-to'                    => 'Enviar a',
                    'shipping-handling'          => 'Envío y Manipulación',
                    'shipping-handling-excl-tax' => 'Envío y Manipulación (Excl. Impuestos)',
                    'shipping-handling-incl-tax' => 'Envío y Manipulación (Incl. Impuestos)',
                    'shipping-method'            => 'Método de Envío',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotal',
                    'sub-total-excl-tax'         => 'Subtotal (Excl. Impuestos)',
                    'sub-total-incl-tax'         => 'Subtotal (Incl. Impuestos)',
                    'tax'                        => 'Impuestos',
                    'tax-amount'                 => 'Monto de Impuestos',
                    'title'                      => 'Facturas',
                    'vat-number'                 => 'Número de IVA',
                ],

                'shipments' => [
                    'carrier-title'       => 'Título del transportista',
                    'created-on'          => 'Creado el :date_time',
                    'individual-shipment' => 'Envío #:track_number',
                    'inventory-source'    => 'Fuente de inventario',
                    'name'                => 'Nombre',
                    'qty'                 => 'Cantidad',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Envíos',
                    'tracking-number'     => 'Número de seguimiento',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Tarifa de Ajuste',
                    'adjustment-refund'          => 'Reembolso de Ajuste',
                    'created-on'                 => 'Creado el :date_time',
                    'discount'                   => 'Descuento',
                    'grand-total'                => 'Total General',
                    'individual-refund'          => 'Reembolso #:refund_id',
                    'no-result-found'            => 'No pudimos encontrar ningún registro.',
                    'price'                      => 'Precio',
                    'product-name'               => 'Nombre',
                    'qty'                        => 'Cantidad',
                    'shipping-handling'          => 'Envío & Manejo',
                    'shipping-handling-excl-tax' => 'Envío y Manejo (Excl. IVA)',
                    'shipping-handling-incl-tax' => 'Envío y Manejo (Incl. IVA)',
                    'sub-total-excl-tax'         => 'Subtotal (Excl. IVA)',
                    'sub-total-incl-tax'         => 'Subtotal (Incl. IVA)',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotal',
                    'tax'                        => 'Impuesto',
                    'tax-amount'                 => 'Cantidad de Impuesto',
                    'title'                      => 'Reembolsos',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Factura',
                'invoice-success'  => 'Factura creada exitosamente',
                'permission-error' => 'No tienes permiso para crear la factura de la orden',
                'price'            => 'Precio',
                'product-name'     => 'Nombre del producto',
                'qty'              => 'Cantidad',
                'qty-error'        => 'La cantidad solicitada no está disponible',
                'sub-total'        => 'Subtotal de la factura',
                'title'            => 'Crear factura',
                'total'            => 'Total',
            ],

            'shipments' => [
                'avl-qty'          => 'Disponible - :qty Cantidad',
                'carrier-title'    => 'Título del transportista',
                'create-btn'       => 'Enviar',
                'ordered-qty'      => 'Cantidad solicitada',
                'permission-error' => 'No tienes permiso para crear el envío',
                'product-name'     => 'Nombre del producto',
                'qty'              => 'Cantidad',
                'qty-error'        => 'La cantidad solicitada no está disponible',
                'shipment-success' => 'Envío creado exitosamente',
                'shipped-qty'      => 'Cantidad enviada',
                'sku'              => 'SKU - :sku',
                'source'           => 'Fuente del producto solicitado',
                'title'            => 'Crear envío',
                'tracking-id'      => 'ID de seguimiento',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Fecha de Creación',
                    'from'         => 'Desde',
                    'id'           => 'ID',
                    'order-id'     => 'ID de Pedido',
                    'qty'          => 'Cantidad',
                    'to'           => 'Hasta',
                    'view'         => 'Ver',
                ],

                'title'    => 'Reservas',
            ],

            'calendar' => [
                'booking-date'     => 'Fecha de Reserva',
                'booking-details'  => 'Detalles de la Reserva',
                'canceled'         => 'Cancelado',
                'closed'           => 'Cerrado',
                'done'             => 'Hecho',
                'order-id'         => 'ID de Pedido',
                'pending'          => 'Pendiente',
                'price'            => 'Precio',
                'status'           => 'Estado',
                'time-slot'        => 'Franja Horaria:',
                'view-details'     => 'Ver Detalles',
            ],

            'title' => 'Producto de Reservas',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Pago Pendiente',
                'title'                  => 'Transacciones',
                'total-payout'           => 'Pago Total',
                'total-seller-sale'      => 'Venta total (Vendedor)',
                'total-admin-commission' => 'Comisión total (Administrador)',
                'total-sale-invoiced'    => 'Venta total (Facturada)',

                'datagrid' => [
                    'comment'        => 'Comentario',
                    'id'             => 'Id',
                    'total'          => 'Total',
                    'transaction-id' => 'Id de Transacción',
                ],
            ],

            'view' => [
                'commission'        => 'Comisión',
                'created-on'        => 'creado el :date,',
                'date'              => 'Fecha',
                'id'                => 'Id de Transacción',
                'method'            => 'Método',
                'name'              => 'Nombre',
                'payment-method'    => 'Pago con :method',
                'price'             => 'Precio',
                'print'             => 'Imprimir',
                'qty'               => 'Cantidad',
                'seller-total'      => 'Total del Vendedor',
                'shipping-handling' => 'Envío y Manejo',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Impuestos',
                'title'             => 'Transacción',
                'total'             => 'Total',
                'transaction-id'    => 'Transacción n.º :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product'   => 'Agregar Nuevo Producto',
                'title'             => 'Productos',

                'datagrid' => [
                    'active'         => 'Activo',
                    'approved'       => 'Aprobado',
                    'category'       => 'Categoría',
                    'delete'         => 'Eliminar',
                    'disable'        => 'Desactivar',
                    'disapproved'    => 'No aprobado',
                    'edit'           => 'Editar',
                    'id'             => 'ID',
                    'image'          => 'Imagen',
                    'is-approved'    => 'Aprobado',
                    'name'           => 'Nombre',
                    'out-of-stock'   => 'Agotado',
                    'price'          => 'Precio',
                    'product-number' => 'Número de Producto',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Estado',
                    'stock'          => 'Inventario',
                    'total-quantity' => ':quantity Disponible',
                    'type'           => 'Tipo',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Familia de Atributos',
                'back'                      => 'Volver',
                'continue'                  => 'Continuar',
                'create-new-product'        => 'Crear Nuevos Productos',
                'create-your-new-product'   => 'Si el producto no existe, crea tu propio producto nuevo',
                'disable-product-message'   => 'El administrador ha desactivado la funcionalidad para crear o asignar productos.',
                'image-placeholder'         => 'Tu Imagen',
                'no-result'                 => 'Sin Resultados',
                'not-allowed'               => 'No tienes permiso para crear un producto',
                'or'                        => 'O',
                'product-type'              => 'Tipo de Producto',
                'search-product'            => 'Buscar Productos',
                'sell-admin-product-prices' => 'Vende el producto del administrador a tus precios.',
                'sell-as-yours'             => 'Vender como Propio',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Puedes agregar un producto de 2 maneras, ya sea desde el producto del administrador o crear el tuyo propio.',
                'title'                     => 'Agregar Nuevo Producto',
                'update-profile'            => 'Por favor, actualice los detalles de su perfil',
            ],

            'edit' => [
                'back-btn'      => 'Volver',
                'preview'       => 'Vista previa',
                'remove'        => 'Eliminar',
                'save-btn'      => 'Guardar producto',
                'title'         => 'Editar producto',
                'channels'      => 'Canales',
                'progress-info' => '¡Mejora el atractivo de tu producto y deja una impresión duradera en los clientes asegurándote de que todos los detalles del producto sean completos y precisos!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Agregar precio de grupo',
                        'all-groups'                => 'Todas las categorías',
                        'create-btn'                => 'Agregar nuevo',
                        'discount-group-price-info' => 'Para qty Cantidad con un descuento de :price',
                        'edit-btn'                  => 'Editar',
                        'empty-info'                => 'Precios especiales para clientes que pertenecen a un grupo específico.',
                        'fixed-group-price-info'    => 'Para qty Cantidad a un precio fijo de :price',
                        'title'                     => 'Precio de grupo de cliente',

                        'create' => [
                            'all-groups'     => 'Todas las categorías',
                            'create-title'   => 'Crear precio de grupo de cliente',
                            'customer-group' => 'Grupo de cliente',
                            'delete-btn'     => 'Eliminar',
                            'discount'       => 'Descuento',
                            'fixed'          => 'Fijo',
                            'price'          => 'Precio',
                            'price-type'     => 'Tipo de precio',
                            'qty'            => 'Cantidad',
                            'save-btn'       => 'Guardar',
                            'update-title'   => 'Actualizar precio de grupo de cliente',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Cantidad pendiente de pedido: :qty',
                    'pending-ordered-qty-info' => 'La cantidad pendiente de pedido se deducirá de la fuente de inventario respectiva después del envío. En caso de cancelación, la cantidad pendiente estará disponible para la venta.',
                    'title'                    => 'Inventarios',
                ],

                'categories' => [
                    'title' => 'Categorías',
                ],

                'images' => [
                    'info'  => 'La resolución de la imagen debe ser de aproximadamente 609px x 560px',
                    'title' => 'Imágenes',
                ],

                'videos' => [
                    'error' => 'El video no puede ser mayor de :max kilobytes. Por favor, elija un archivo más pequeño.',
                    'info'  => 'El tamaño máximo del video debe ser de aproximadamente :size',
                    'title' => 'Videos',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Agregar productos relacionados sobre la marcha.',
                        'info'       => 'Además del producto que está viendo el cliente, se le presentan productos relacionados.',
                        'title'      => 'Productos relacionados',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Agregar productos para upsell sobre la marcha.',
                        'info'       => 'Se presenta al cliente productos de upsell, que sirven como una alternativa premium o de mayor calidad al producto que está viendo actualmente.',
                        'title'      => 'Productos de upsell',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Agregar productos de venta cruzada sobre la marcha.',
                        'info'       => 'Junto al carrito de compras, encontrará estos productos de "compra impulsiva" posicionados como productos de venta cruzada para complementar los artículos que ya ha agregado a su carrito.',
                        'title'      => 'Productos de venta cruzada',
                    ],

                    'add-btn'           => 'Agregar producto',
                    'delete'            => 'Eliminar',
                    'empty-info'        => 'Para agregar productos :type sobre la marcha.',
                    'empty-title'       => 'Agregar producto',
                    'image-placeholder' => 'Imagen del producto',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Agregar opción',
                            'empty-info'        => 'Para crear opciones personalizables al instante.',
                            'empty-title'       => 'Agregar opción',
                            'info'              => 'Esto personalizará el producto simple.',
                            'title'             => 'Elemento personalizable',

                            'update-create' => [
                                'is-required'               => 'Es obligatorio',
                                'max-characters'            => 'Máximo de caracteres',
                                'name'                      => 'Título',
                                'no'                        => 'No',
                                'price'                     => 'Precio',
                                'save-btn'                  => 'Guardar',
                                'supported-file-extensions' => 'Extensiones de archivo admitidas',
                                'title'                     => 'Opción',
                                'type'                      => 'Tipo',
                                'yes'                       => 'Sí',
                            ],

                            'option' => [
                                'add-btn'     => 'Agregar opción',
                                'delete'      => 'Eliminar',
                                'delete-btn'  => 'Eliminar',
                                'edit-btn'    => 'Editar',
                                'empty-info'  => 'Para crear varias combinaciones de productos al instante.',
                                'empty-title' => 'Agregar opción',

                                'types' => [
                                    'text' => [
                                        'title' => 'Texto',
                                    ],

                                    'textarea' => [
                                        'title' => 'Área de texto',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Casilla de verificación',
                                    ],

                                    'radio' => [
                                        'title' => 'Botón de opción',
                                    ],

                                    'select' => [
                                        'title' => 'Seleccionar',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Selección múltiple',
                                    ],

                                    'date' => [
                                        'title' => 'Fecha',
                                    ],

                                    'datetime' => [
                                        'title' => 'Fecha y hora',
                                    ],

                                    'time' => [
                                        'title' => 'Hora',
                                    ],

                                    'file' => [
                                        'title' => 'Archivo',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Etiqueta',
                                        'price'    => 'Precio',
                                        'save-btn' => 'Guardar',
                                        'title'    => 'Opción',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'El producto ya está asociado con un producto configurable, agrupado o en paquete.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Agregar variante',
                        'delete-btn'        => 'Eliminar',
                        'edit-btn'          => 'Editar',
                        'empty-info'        => 'Para crear varias combinaciones de productos sobre la marcha.',
                        'empty-title'       => 'Agregar variante',
                        'image-placeholder' => ':qty Cantidad',
                        'info'              => 'Los productos de variación dependen de todas las posibles combinaciones de atributos.',
                        'qty'               => ':qty Cantidad',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Variantes',

                        'create'  => [
                            'description'            => 'Descripción',
                            'name'                   => 'Nombre',
                            'save-btn'               => 'Agregar',
                            'title'                  => 'Agregar variante',
                            'variant-already-exists' => 'Esta variante ya existe',
                        ],

                        'edit' => [
                            'disabled'         => 'Deshabilitado',
                            'edit-info'        => 'Si desea actualizar la información del producto en detalle, vaya a la',
                            'edit-link-title'  => 'Página de detalles del producto',
                            'enabled'          => 'Habilitado',
                            'images'           => 'Imágenes',
                            'name'             => 'Nombre',
                            'price'            => 'Precio',
                            'quantities'       => 'Cantidades',
                            'save-btn'         => 'Guardar',
                            'sku'              => 'SKU',
                            'status'           => 'Estado',
                            'title'            => 'Producto',
                            'weight'           => 'Peso',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Agregar imágenes',
                            'apply-to-all-btn'    => 'Aplicar a todos',
                            'apply-to-all-sku'    => 'Aplicar un precio a todos los SKU.',
                            'edit-inventories'    => 'Editar inventarios',
                            'edit-prices'         => 'Editar precios',
                            'price'               => 'Precio',
                            'remove-images'       => 'Eliminar imágenes',
                            'remove-variants'     => 'Eliminar variantes',
                            'select-action'       => 'Seleccionar acción',
                            'select-variants'     => 'Seleccionar variantes',
                            'edit-name'           => 'Editar nombre',
                            'name'                => 'Nombre',
                            'edit-sku'            => 'Editar SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Editar peso',
                            'weight'              => 'Peso',
                            'edit-status'         => 'Editar estado',
                            'status'              => 'Estado',
                            'apply-to-all-name'   => 'Aplicar un nombre a todas las variantes.',
                            'apply-to-all-weight' => 'Aplicar un peso a todas las variantes.',
                            'apply-to-all-status' => 'Aplicar un estado a todas las variantes.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Agregar producto',
                        'default-qty'       => 'Cantidad predeterminada',
                        'delete'            => 'Eliminar',
                        'empty-info'        => 'Para crear varias combinaciones de productos sobre la marcha.',
                        'empty-title'       => 'Agregar producto',
                        'image-placeholder' => 'Imagen del producto',
                        'info'              => 'Un producto agrupado consta de artículos independientes presentados como un conjunto, lo que permite variaciones o coordinación por temporada o tema. Cada producto se puede comprar individualmente o como parte del grupo.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Productos agrupados',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Agregar opción',
                        'empty-info'        => 'Para crear opciones de paquete sobre la marcha.',
                        'empty-title'       => 'Agregar opción',
                        'image-placeholder' => 'Imagen del producto',
                        'info'              => 'Un producto de paquete es un paquete de varios artículos o servicios que se venden juntos a un precio especial, ofreciendo valor y comodidad a los clientes.',
                        'title'             => 'Ítems de paquete',

                        'update-create' => [
                            'checkbox'    => 'Casilla de verificación',
                            'is-required' => 'Es requerido',
                            'multiselect' => 'Selección múltiple',
                            'name'        => 'Título',
                            'no'          => 'No',
                            'radio'       => 'Radio',
                            'save-btn'    => 'Guardar',
                            'select'      => 'Seleccionar',
                            'title'       => 'Opción',
                            'type'        => 'Tipo',
                            'yes'         => 'Sí',
                        ],

                        'option' => [
                            'add-btn'     => 'Agregar producto',
                            'default-qty' => 'Cantidad predeterminada',
                            'delete'      => 'Eliminar',
                            'delete-btn'  => 'Eliminar',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para crear varias combinaciones de productos sobre la marcha.',
                            'empty-title' => 'Agregar producto',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Establezca el producto predeterminado utilizando una casilla de verificación.',
                                    'title' => 'Casilla de verificación',
                                ],

                                'multiselect' => [
                                    'info'  => 'Establezca el producto predeterminado utilizando un botón de casilla de verificación múltiple.',
                                    'title' => 'Selección múltiple',
                                ],

                                'radio' => [
                                    'info'  => 'Establezca el producto predeterminado utilizando un botón de radio.',
                                    'title' => 'Radio',
                                ],

                                'select' => [
                                    'info'  => 'Establezca el producto predeterminado utilizando un botón de selección.',
                                    'title' => 'Seleccionar',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Disponible Desde',
                        'available-to'   => 'Disponible Hasta',
                        'location'       => 'Ubicación',
                        'qty'            => 'Cantidad',
                        'title'          => 'Tipo de Reserva',

                        'available-every-week' => [
                            'no'    => 'No',
                            'title' => 'Disponible Cada Semana',
                            'yes'   => 'Sí',
                        ],

                        'appointment' => [
                            'break-duration'         => 'Tiempo de Descanso entre Slots (Minutos)',
                            'slot-duration'          => 'Duración del Slot (Minutos)',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Mismo Slot Para Todos los Días',
                                'yes'   => 'Sí',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Agregar',
                            'break-duration'   => 'Tiempo de Descanso entre Slots (Minutos)',
                            'close'            => 'Cerrar',
                            'description'      => 'Información de la Reserva',
                            'description-info' => 'De acuerdo con las franjas horarias, se creará y se mostrará la duración del tiempo. Será única en todos los slots y será visible en la tienda en línea',
                            'edit'             => 'Editar',
                            'many'             => 'Muchas Reservas Para Un Día',
                            'one'              => 'Una Reserva Para Muchos Días',
                            'open'             => 'Abrir',
                            'slot-add'         => 'Agregar Slots',
                            'slot-duration'    => 'Duración del Slot (Minutos)',
                            'slot-title'       => 'Duración del Tiempo de los Slots',
                            'title'            => 'Predeterminado',
                            'unavailable'      => 'No Disponible',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Agregar Slots',
                                    'close'      => 'Cerrar',
                                    'day'        => 'Día',
                                    'edit-title' => 'Editar Slots',
                                    'friday'     => 'Viernes',
                                    'from'       => 'Desde',
                                    'from-day'   => 'Desde el Día',
                                    'from-time'  => 'Desde la Hora',
                                    'monday'     => 'Lunes',
                                    'open'       => 'Abrir',
                                    'saturday'   => 'Sábado',
                                    'save'       => 'Guardar',
                                    'select'     => 'Seleccionar',
                                    'status'     => 'Estado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Jueves',
                                    'to'         => 'Hasta',
                                    'to-day'     => 'Hasta el Día',
                                    'to-time'    => 'Hasta la Hora',
                                    'tuesday'    => 'Martes',
                                    'wednesday'  => 'Miércoles',
                                    'week'       => ':día',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Agregar Entradas',
                            'delete'             => 'Eliminar',
                            'description'        => 'Descripción',
                            'description-info'   => 'No hay entradas disponibles.',
                            'edit'               => 'Editar',
                            'name'               => 'Nombre',
                            'price'              => 'Precio',
                            'qty'                => 'Cantidad',
                            'special-price'      => 'Precio Especial',
                            'special-price-from' => 'Precio Especial Desde',
                            'special-price-to'   => 'Precio Especial Hasta',
                            'title'              => 'Entradas',
                            'valid-from'         => 'Válido Desde',
                            'valid-until'        => 'Válido Hasta',

                            'modal'              => [
                                'edit' => 'Editar Entradas',
                                'save' => 'Guardar',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Agregar Entradas',
                            ],

                            'slots'   => [
                                'add'         => 'Agregar Slots',
                                'description' => 'Slots Disponibles con Duración de Tiempo.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Base Diaria',
                            'daily-hourly'           => 'Ambos (Base Diaria y por Hora)',
                            'daily-price'            => 'Precio Diario',
                            'hourly'                 => 'Base por Hora',
                            'hourly-price'           => 'Precio por Hora',
                            'title'                  => 'Tipo de Alquiler',

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Mismo Slot Para Todos los Días',
                                'yes'   => 'Sí',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Agregar Slots',
                            'description-info' => 'De acuerdo con las franjas horarias, se creará y se mostrará la duración del tiempo. Será única en todos los slots y será visible en la tienda en línea',
                            'save'             => 'Guardar',
                            'title'            => 'Duración del Tiempo de los Slots',
                            'unavailable'      => 'No Disponible',

                            'action' => [
                                'add' => 'Agregar',
                            ],

                            'modal' => [
                                'slot' => [
                                    'friday'     => 'Viernes',
                                    'from'       => 'Desde',
                                    'monday'     => 'Lunes',
                                    'saturday'   => 'Sábado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Jueves',
                                    'to'         => 'Hasta',
                                    'tuesday'    => 'Martes',
                                    'wednesday'  => 'Miércoles',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Tiempo de Descanso entre Slots (Minutos)',
                            'guest-capacity'            => 'Capacidad de Huéspedes',
                            'guest-limit'               => 'Límite de Huéspedes por Mesa',
                            'prevent-scheduling-before' => 'Prevenir Programación Antes de',
                            'slot-duration'             => 'Duración del Slot (Minutos)',

                            'charged-per' => [
                                'guest'  => 'Huésped',
                                'table'  => 'Mesa',
                                'title'  => 'Cobrado Por',
                            ],

                            'same-slot-for-all-days' => [
                                'no'    => 'No',
                                'title' => 'Mismo Slot Para Todos los Días',
                                'yes'   => 'Sí',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Reserva de Cita',
                            'default'     => 'Reserva Predeterminada',
                            'event'       => 'Reserva de Evento',
                            'many'        => 'Muchas',
                            'one'         => 'Una',
                            'rental'      => 'Reserva de Alquiler',
                            'table'       => 'Reserva de Mesa',
                            'title'       => 'Tipo',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Agregar enlace',
                            'delete-btn'  => 'Eliminar',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para crear un enlace sobre la marcha.',
                            'empty-title' => 'Agregar enlace',
                            'file'        => 'Archivo: ',
                            'info'        => 'El tipo de producto descargable permite vender productos digitales como libros electrónicos, aplicaciones de software, música, juegos, etc.',
                            'sample-file' => 'Archivo de ejemplo: ',
                            'sample-url'  => 'URL de ejemplo: ',
                            'title'       => 'Enlaces descargables',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'downloads'   => 'Descarga permitida',
                                'file'        => 'Archivo',
                                'file-type'   => 'Tipo de archivo',
                                'name'        => 'Título',
                                'price'       => 'Precio',
                                'sample'      => 'Muestra',
                                'sample-type' => 'Tipo de muestra',
                                'save-btn'    => 'Guardar',
                                'title'       => 'Enlace',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Agregar muestra',
                            'delete-btn'  => 'Eliminar',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para crear una muestra sobre la marcha.',
                            'empty-title' => 'Agregar muestra',
                            'file'        => 'Archivo: ',
                            'info'        => 'El tipo de producto descargable permite vender productos digitales como libros electrónicos, aplicaciones de software, música, juegos, etc.',
                            'title'       => 'Muestras descargables',
                            'url'         => 'URL: ',

                            'update-create' => [
                                'file'      => 'Archivo',
                                'file-type' => 'Tipo de archivo',
                                'name'      => 'Título',
                                'save-btn'  => 'Guardar',
                                'title'     => 'Enlace',
                                'url'       => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Producto creado exitosamente',
            'delete-failed'            => 'Falló la eliminación del producto',
            'delete-success'           => 'Producto eliminado exitosamente',
            'product-type-not-allowed' => 'No tienes permitido vender productos de tipo :type',
            'saved-inventory-message'  => 'Producto guardado exitosamente',
            'update-success'           => 'Producto actualizado exitosamente',

            'assign' => [
                'already-selling'     => 'Ya estás vendiendo este producto',
                'back-btn'            => 'Atrás',
                'condition'           => 'Condición',
                'create-success'      => 'Producto asignado con éxito al vendedor',
                'description'         => 'Descripción',
                'image-size'          => 'La resolución de la imagen debe ser 609px X 560px',
                'images'              => 'Imágenes',
                'new'                 => 'Nuevo',
                'not-allowed'         => 'No tienes permiso para asignar este producto',
                'old'                 => 'Viejo',
                'price'               => 'Precio',
                'product-not-allowed' => 'No tienes permiso para vender un producto de tipo :type',
                'quantities'          => 'Cantidades',
                'save-btn'            => 'Guardar',
                'title'               => 'Asignar Producto',
                'update-success'      => 'Producto asignado actualizado con éxito',

                'product-details' => [
                    'active'            => 'Activo',
                    'approved'          => 'Aprobado',
                    'disable'           => 'Deshabilitar',
                    'disapproved'       => 'Desaprobado',
                    'image-placeholder' => 'Imagen del Producto',
                    'title'             => 'Detalles del Producto',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Reseñas de Productos',

                'datagrid' => [
                    'approved'      => 'Aprobado',
                    'customer'      => 'Cliente',
                    'date'          => 'Fecha',
                    'description'   => 'Descripción',
                    'email'         => 'Correo Electrónico',
                    'pending'       => 'Pendiente',
                    'product'       => 'Producto',
                    'rating'        => 'Calificación',
                    'status'        => 'Estado',
                    'title'         => 'Título',
                    'unapproved'    => 'No Aprobado',
                    'update-status' => 'Estado de actualización',
                ],
            ],

            'update-success' => 'Las revisiones de producto se han actualizado correctamente',
            'delete-success' => 'Reseñas de productos eliminadas con éxito.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Clientes',

                'datagrid' => [
                    'active'      => 'Activo',
                    'customer'    => 'Cliente',
                    'email'       => 'Correo Electrónico',
                    'gender'      => 'Género',
                    'group'       => 'Grupo',
                    'inactive'    => 'Inactivo',
                    'order-count' => 'Cantidad de Pedidos',
                    'revenue'     => 'Ingresos',
                    'status'      => 'Estado',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Administrar Perfil',
                'edit-btn' => 'Editar Perfil',

                'general' => [
                    'email'      => 'Correo Electrónico',
                    'name'       => 'Nombre',
                    'phone'      => 'Número de Teléfono',
                    'shop-slug'  => 'Slug de la Tienda',
                    'shop-title' => 'Título de la Tienda',
                    'title'      => 'Información General',
                ],

                'about-store' => [
                    'title' => 'Acerca de la Tienda',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descripción',
                    'meta-keywords'    => 'Meta Palabras Clave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Meta Descripción',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidad',
                    'return'   => 'Política de Devoluciones',
                    'shipping' => 'Política de Envío',
                    'title'    => 'Políticas',
                ],

                'address' => [
                    'city'     => 'Ciudad',
                    'country'  => 'País',
                    'postcode' => 'Código Postal',
                    'state'    => 'Estado',
                    'title'    => 'Dirección de la Tienda',
                    'address'  => 'Dirección',
                ],

                'social' => [
                    'link'  => 'Enlace de :name',
                    'title' => 'Enlaces Sociales',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Monto Mínimo de Pedido',
                ],

                'google-analytics' => [
                    'id'    => 'ID de Google Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Comisión del Administrador',
                    'admin-commission-value' => 'Comisión del Administrador :rate% del monto total facturado',
                    'allowed-categories'     => 'Categorías Permitidas',
                    'no-categories'          => 'No hay Categorías Disponibles',
                    'allowed-product-types'  => 'Tipos de Producto Permitidos',
                    'no-product-types'       => 'No hay Tipos de Producto Disponibles',
                    'payment-methods'        => 'Métodos de Pago',
                    'no-payment-methods'     => 'No hay Métodos de Pago Disponibles',
                    'shipping-methods'       => 'Métodos de Envío',
                    'no-shipping-methods'    => 'No hay Métodos de Envío Disponibles',
                    'title'                  => 'Información de la Tienda',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Sube un banner con una proporción de 13:3, altura 375, área segura 375x250 centrada en móvil',
                'delete-banner'       => 'Eliminar Banner',
                'delete-logo'         => 'Eliminar Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Sube un logo con una proporción de 1:1',
                'save-btn'            => 'Guardar Perfil',
                'title'               => 'Administrar Perfil',
                'upload-new-banner'   => 'Subir Nuevo Banner',
                'upload-new-logo'     => 'Subir Nuevo Logo',

                'general' => [
                    'email'      => 'Correo Electrónico',
                    'name'       => 'Nombre',
                    'phone'      => 'Número de Teléfono',
                    'shop-slug'  => 'Slug de la Tienda',
                    'shop-title' => 'Título de la Tienda',
                    'title'      => 'Información General',
                ],

                'about-store' => [
                    'title' => 'Acerca de la Tienda',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descripción',
                    'meta-keywords'    => 'Meta Palabras Clave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Meta Descripción',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidad',
                    'return'   => 'Política de Devoluciones',
                    'shipping' => 'Política de Envío',
                    'title'    => 'Políticas',
                ],

                'address' => [
                    'city'           => 'Ciudad',
                    'country'        => 'País',
                    'postcode'       => 'Código Postal',
                    'state'          => 'Estado',
                    'title'          => 'Dirección de la Tienda',
                    'select-country' => 'Seleccionar País',
                    'select-state'   => 'Seleccionar Estado',
                    'street-address' => 'Dirección de la Calle',
                    'address'        => 'Dirección',
                ],

                'social' => [
                    'link'  => 'Enlace de :name',
                    'title' => 'Enlaces Sociales',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Monto Mínimo de Pedido',
                ],

                'google-analytics' => [
                    'id'    => 'ID de Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Tu perfil ha sido actualizado exitosamente',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Reseñas del Vendedor',

                'datagrid' => [
                    'approved'    => 'Aprobada',
                    'customer'    => 'Cliente',
                    'date'        => 'Fecha',
                    'description' => 'Descripción',
                    'disapproved' => 'No aprobado',
                    'email'       => 'Correo Electrónico',
                    'pending'     => 'Pendiente',
                    'rating'      => 'Calificación',
                    'status'      => 'Estado',
                    'title'       => 'Título',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Guardar',
                    'title'              => 'General',
                    'unmatched-password' => 'La contraseña actual no coincide',
                    'update-success'     => 'Configuraciones generales actualizadas con éxito',

                    'regional-setting' => [
                        'currency'      => 'Moneda',
                        'locale'        => 'Localidad',
                        'select-locale' => 'Seleccionar localidad',
                        'title'         => 'Configuración regional',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Confirmar contraseña',
                        'current-password' => 'Contraseña actual',
                        'new-password'     => 'Nueva contraseña',
                        'title'            => 'Configuración de contraseña',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Crear Rol',
                    'title'      => 'Roles',

                    'datagrid' => [
                        'all'             => 'Todos',
                        'custom'          => 'Personalizado',
                        'delete'          => 'Eliminar',
                        'edit'            => 'Editar',
                        'id'              => 'ID',
                        'name'            => 'Nombre',
                        'permission-type' => 'Tipo de Permiso',
                    ],
                ],

                'create' => [
                    'access-control' => 'Control de Acceso',
                    'all'            => 'Todos',
                    'back-btn'       => 'Atrás',
                    'custom'         => 'Personalizado',
                    'description'    => 'Descripción',
                    'general'        => 'General',
                    'name'           => 'Nombre',
                    'permissions'    => 'Permisos',
                    'save-btn'       => 'Guardar Rol',
                    'title'          => 'Crear Rol',
                ],

                'edit' => [
                    'access-control' => 'Control de Acceso',
                    'all'            => 'Todos',
                    'back-btn'       => 'Atrás',
                    'custom'         => 'Personalizado',
                    'description'    => 'Descripción',
                    'general'        => 'General',
                    'name'           => 'Nombre',
                    'permissions'    => 'Permisos',
                    'save-btn'       => 'Guardar Rol',
                    'title'          => 'Editar Rol',
                ],

                'being-used'        => 'El rol está siendo utilizado por un vendedor',
                'create-success'    => 'Rol creado con éxito',
                'delete-failed'     => 'Error al eliminar el rol',
                'delete-success'    => 'Rol eliminado con éxito',
                'last-delete-error' => 'Se requiere al menos un rol',
                'update-success'    => 'Rol actualizado con éxito',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Crear Usuario',
                    'create-title'     => 'Crear Usuario',
                    'edit-title'       => 'Editar Usuario',
                    'email'            => 'Correo Electrónico',
                    'name'             => 'Nombre',
                    'phone-number'     => 'Número de Teléfono',
                    'role'             => 'Rol',
                    'save-btn'         => 'Guardar Usuario',
                    'select-role'      => 'Seleccionar Rol',
                    'password'         => 'Contraseña',
                    'confirm-password' => 'Confirmar Contraseña',
                    'status'           => 'Estado',
                    'title'            => 'Usuarios',
                    'create-success'   => 'Usuario creado con éxito',
                    'update-success'   => 'Usuario actualizado con éxito',
                    'delete-success'   => 'Usuario eliminado con éxito',
                    'delete-failed'    => 'Fallo al eliminar el usuario',

                    'datagrid' => [
                        'delete'     => 'Eliminar',
                        'edit'       => 'Editar',
                        'email'      => 'Correo Electrónico',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Nombre',
                        'permission' => 'Permiso',
                        'phone'      => 'Teléfono',

                        'status' => [
                            'title' => 'Estado',

                            'options' => [
                                'active'    => 'Activo',
                                'suspended' => 'Suspendido',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index'  => [
                    'create-btn' => 'Crear fuente de inventario',
                    'title'      => 'Fuentes de Inventario',

                    'datagrid' => [
                        'active'   => 'Activo',
                        'code'     => 'Código',
                        'delete'   => 'Eliminar',
                        'edit'     => 'Editar',
                        'id'       => 'ID',
                        'inactive' => 'Inactivo',
                        'name'     => 'Nombre',
                        'priority' => 'Prioridad',
                        'status'   => 'Estado',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Agregar Fuente de Inventario',
                    'address'        => 'Dirección de la Fuente',
                    'back-btn'       => 'Volver',
                    'city'           => 'Ciudad',
                    'code'           => 'Código',
                    'contact-email'  => 'Email',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Información de Contacto',
                    'contact-name'   => 'Nombre',
                    'contact-number' => 'Número de Contacto',
                    'country'        => 'País',
                    'description'    => 'Descripción',
                    'general'        => 'General',
                    'latitude'       => 'Latitud',
                    'longitude'      => 'Longitud',
                    'name'           => 'Nombre',
                    'postcode'       => 'Código Postal',
                    'priority'       => 'Prioridad',
                    'save-btn'       => 'Guardar Fuente de Inventario',
                    'select-country' => 'Seleccionar País',
                    'select-state'   => 'Seleccionar Estado',
                    'settings'       => 'Configuración',
                    'state'          => 'Estado',
                    'status'         => 'Estado',
                    'street'         => 'Calle',
                    'title'          => 'Fuentes de Inventario',
                ],

                'edit' => [
                    'back-btn'          => 'Volver',
                    'city'              => 'Ciudad',
                    'code'              => 'Código',
                    'contact-email'     => 'Email',
                    'contact-fax'       => 'Fax',
                    'contact-info'      => 'Información de Contacto',
                    'contact-name'      => 'Nombre',
                    'contact-number'    => 'Número de Contacto',
                    'country'           => 'País',
                    'description'       => 'Descripción',
                    'general'           => 'General',
                    'latitude'          => 'Latitud',
                    'longitude'         => 'Longitud',
                    'name'              => 'Nombre',
                    'postcode'          => 'Código Postal',
                    'priority'          => 'Prioridad',
                    'save-btn'          => 'Guardar Fuentes de Inventario',
                    'select-country'    => 'Seleccionar País',
                    'select-state'      => 'Seleccionar Estado',
                    'settings'          => 'Configuración',
                    'source-address'    => 'Dirección de la Fuente',
                    'state'             => 'Estado',
                    'status'            => 'Estado',
                    'street'            => 'Calle',
                    'title'             => 'Editar Fuentes de Inventario',
                ],

                'create-success'    => 'Fuente de Inventario creada exitosamente',
                'delete-failed'     => 'Error al eliminar Fuentes de Inventario',
                'delete-success'    => 'Fuentes de Inventario eliminadas exitosamente',
                'last-delete-error' => 'No se pueden eliminar las últimas Fuentes de Inventario',
                'update-success'    => 'Fuentes de Inventario actualizadas exitosamente',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Administrador',
                'blocked-message'     => 'Estás bloqueado por el administrador',
                'message-failed'      => 'Error al enviar el mensaje',
                'message-placeholder' => 'Escribe tu mensaje aquí...',
                'message-sent'        => 'Mensaje enviado con éxito',
                'no-message'          => 'No se encontró ningún mensaje',
                'search-message'      => 'Buscar mensaje...',
                'title'               => 'Comunicación',

                'filters' => [
                    'all-messages'      => 'Todos los mensajes',
                    'prev-fifteen-days' => 'Últimos 15 días',
                    'prev-seven-days'   => 'Últimos 7 días',
                    'prev-six-months'   => 'Últimos 6 meses',
                    'prev-thirty-days'  => 'Últimos 30 días',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Carros Abandonados',
                    'abandoned-products'            => 'Productos Abandonados',
                    'abandoned-rate'                => 'Tasa de Abandono',
                    'abandoned-revenue'             => 'Ingresos Abandonados',
                    'added-to-cart'                 => 'Añadido al Carro',
                    'added-to-cart-info'            => 'Solo :progress visitantes añadieron productos al carrito',
                    'all-channels'                  => 'Todos los Canales',
                    'average-order-value-over-time' => 'Valor Promedio del Pedido a lo largo del Tiempo',
                    'average-sales'                 => 'Valor Promedio del Pedido',
                    'commission'                    => 'Comisión',
                    'commission-over-time'          => 'Comisión a lo largo del tiempo',
                    'count'                         => 'Conteo',
                    'end-date'                      => 'Fecha de Finalización',
                    'id'                            => 'ID',
                    'interval'                      => 'Intervalo',
                    'name'                          => 'Nombre',
                    'orders'                        => 'Órdenes',
                    'orders-over-time'              => 'Órdenes a lo largo del Tiempo',
                    'payment-method'                => 'Método de Pago',
                    'product-views'                 => 'Vistas de Producto',
                    'product-views-info'            => 'Solo :progress visitantes ven productos',
                    'purchase-funnel'               => 'Embudo de Compra',
                    'purchased'                     => 'Comprado',
                    'purchased-info'                => 'Solo :progress visitantes realizan compras',
                    'refunds'                       => 'Reembolsos',
                    'refunds-over-time'             => 'Reembolsos a lo largo del Tiempo',
                    'sales-over-time'               => 'Ventas a lo largo del Tiempo',
                    'start-date'                    => 'Fecha de Inicio',
                    'tax-collected'                 => 'Impuestos Recaudados',
                    'tax-collected-over-time'       => 'Impuestos Recaudados a lo largo del Tiempo',
                    'title'                         => 'Ventas',
                    'top-payment-methods'           => 'Métodos de Pago Principales',
                    'top-tax-categories'            => 'Categorías de Impuestos Principales',
                    'total'                         => 'Total',
                    'total-commission-paid'         => 'Comisión total pagada',
                    'total-orders'                  => 'Total de Órdenes',
                    'total-sales'                   => 'Total de Ventas',
                    'total-visits'                  => 'Total de visitas',
                    'total-visits-info'             => 'Total de visitantes en la tienda',
                    'view-details'                  => 'Ver Detalles',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Todos los Canales',
                    'count'                       => 'Conteo',
                    'customers'                   => 'Clientes',
                    'customers-over-time'         => 'Clientes a lo largo del Tiempo',
                    'customers-traffic'           => 'Tráfico de Clientes',
                    'customers-with-most-orders'  => 'Clientes con Más Órdenes',
                    'customers-with-most-reviews' => 'Clientes con Más Reseñas',
                    'customers-with-most-sales'   => 'Clientes con Más Ventas',
                    'email'                       => 'Correo Electrónico',
                    'end-date'                    => 'Fecha de Finalización',
                    'id'                          => 'ID',
                    'interval'                    => 'Intervalo',
                    'name'                        => 'Nombre',
                    'orders'                      => 'Órdenes',
                    'reviews'                     => 'Reseñas',
                    'start-date'                  => 'Fecha de Inicio',
                    'title'                       => 'Clientes',
                    'top-customer-groups'         => 'Grupos de Clientes Principales',
                    'total'                       => 'Total',
                    'total-customers'             => 'Total de Clientes',
                    'total-visitors'              => 'Total de Visitantes',
                    'traffic-over-week'           => 'Tráfico a lo largo de la Semana',
                    'unique-visitors'             => 'Visitantes Únicos',
                    'view-details'                => 'Ver Detalles',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Todos los Canales',
                    'channel'                          => 'Canal',
                    'end-date'                         => 'Fecha de Finalización',
                    'id'                               => 'ID',
                    'interval'                         => 'Intervalo',
                    'locale'                           => 'Configuración regional',
                    'name'                             => 'Nombre',
                    'orders'                           => 'Órdenes',
                    'price'                            => 'Precio',
                    'products-added-over-time'         => 'Productos Agregados a lo largo del Tiempo',
                    'products-with-most-reviews'       => 'Productos con Más Reseñas',
                    'products-with-most-visits'        => 'Productos con Más Visitas',
                    'quantities'                       => 'Cantidades',
                    'quantities-sold-over-time'        => 'Cantidades Vendidas a lo largo del Tiempo',
                    'revenue'                          => 'Ingresos',
                    'reviews'                          => 'Reseñas',
                    'start-date'                       => 'Fecha de Inicio',
                    'title'                            => 'Productos',
                    'top-selling-products-by-quantity' => 'Productos Más Vendidos por Cantidad',
                    'top-selling-products-by-revenue'  => 'Productos Más Vendidos por Ingresos',
                    'total'                            => 'Total',
                    'total-products-added-to-wishlist' => 'Productos Agregados a la Lista de Deseos',
                    'total-sold-quantities'            => 'Cantidad de Productos Vendidos',
                    'view-details'                     => 'Ver Detalles',
                    'visits'                           => 'Visitas',
                ],
            ],

            'view' => [
                'all-channels'  => 'Todos los Canales',
                'day'           => 'Día',
                'end-date'      => 'Fecha de Finalización',
                'export-csv'    => 'Exportar CSV',
                'export-xls'    => 'Exportar XLS',
                'month'         => 'Mes',
                'not-available' => 'o hay registros disponibles.',
                'start-date'    => 'Fecha de Inicio',
                'year'          => 'Año',
            ],

            'empty' => [
                'info'  => 'No hay datos disponibles para el intervalo seleccionado',
                'title' => 'No hay datos disponibles',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Desactivado',
                'enabled'   => 'Activado',
                'info'      => 'Cree, gestione y escale su tienda en línea con las extensiones de comercio electrónico personalizables de Bagisto.',
                'no-result' => 'No hay extensiones disponibles aquí.',
                'title'     => 'Extensiones',

                'filters' => [
                    'all-extensions' => 'Todas las extensiones',
                    'bulk_upload'    => 'Carga masiva',
                    'gdpr'           => 'RGPD',
                    'marketplace'    => 'Mercado',
                    'payment'        => 'Pago',
                    'pos'            => 'POS',
                    'shipping'       => 'Envío',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Logotipo del vendedor',
                'switch-to-store' => 'Cambiar para gestionar la tienda',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'El monto mínimo de pedido para :shop_title es',
                'product-not-available' => 'El producto no está disponible',
                'sold-by'               => 'Vendido por',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Pago en :days días',
                'deals-in'            => 'Negocios en',
                'featured-seller'     => 'Nuestros Vendedores Destacados',
                'online-business'     => 'Negocio en Línea',
                'reviews'             => ':count Reseñas',
                'seller-community'    => 'Comunidad de Vendedores',
                'serviceable-pincode' => 'Código postal Servicable',
                'start-selling'       => 'Comienza a vender con grandes clientes de todo el mundo, las 24 horas del día.',
                'step'                => 'Paso :count',
                'visit-shop'          => 'Visitar tienda',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Agregar al carrito',
            'delivery-info' => 'La información de entrega aparece aquí',
            'hide'          => 'Ocultar',
            'more-info'     => 'Más información',
            'seller-count'  => ':count vendedores más vendiendo el mismo producto',
            'seller-info'   => 'Información del vendedor',
            'sold-by'       => 'Vendido por',
            'top-selling'   => 'Más vendido',

            'flag' => [
                'alert'              => 'Alerta',
                'already-reported'   => 'Ya has reportado este producto',
                'create-success'     => 'Producto reportado con éxito',
                'guest-alert'        => 'Necesitas iniciar sesión para reportar este producto',
                'not-allowed'        => 'No puedes reportar este producto sin realizar un pedido',
                'other-reason'       => 'Otra razón',
                'reason'             => 'Razón',
                'reason-placeholder' => 'Por favor especifica la razón',
                'report-product'     => 'Reportar producto',
                'select-reason'      => 'Seleccionar razón',
                'submit-btn'         => 'Enviar',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'El vendedor aún no está aprobado',
                'products-count'  => 'Productos (:count)',
                'reviews-count'   => 'Reseñas (:count)',
                'search-text'     => 'Buscar productos',

                'about' => [
                    'title'           => 'Acerca de',
                    'about-us'        => 'Sobre nosotros',
                    'shipping-policy' => 'Política de envío',
                    'privacy-policy'  => 'Política de privacidad',
                    'return-policy'   => 'Política de devoluciones',
                ],

                'contact-form' => [
                    'title'          => 'Contacto',
                    'name'           => 'Nombre',
                    'email'          => 'Correo electrónico',
                    'subject'        => 'Asunto',
                    'query'          => 'Consulta',
                    'submit-btn'     => 'Enviar',
                    'create-success' => 'Su consulta ha sido enviada con éxito',
                ],

                'share' => [
                    'title'     => 'Compartir',
                    'share-on'  => 'Compartir en',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Alerta',
                    'already-reported'   => 'Ya ha reportado a este vendedor',
                    'create-success'     => 'Vendedor reportado con éxito',
                    'guest-alert'        => 'Debe iniciar sesión para reportar al vendedor',
                    'not-allowed'        => 'No puede reportar a este vendedor sin realizar un pedido',
                    'other-reason'       => 'Otro motivo',
                    'reason'             => 'Motivo',
                    'reason-placeholder' => 'Por favor especifique el motivo',
                    'select-reason'      => 'Seleccione un motivo',
                    'submit-btn'         => 'Enviar',
                    'title'              => 'Reportar problema',
                ],

                'reviews' => [
                    'alert'            => 'Alerta',
                    'already-reviewed' => 'Ya has revisado a este vendedor',
                    'comment'          => 'Comentario',
                    'create-success'   => 'Vendedor evaluado con éxito',
                    'customer-review'  => ':count Reseña de clientes',
                    'customer-reviews' => 'Reseñas de clientes',
                    'guest-alert'      => 'Necesitas iniciar sesión para reportar al vendedor',
                    'rating'           => 'Calificación',
                    'review-by'        => 'Reseña de',
                    'submit-btn'       => 'Enviar',
                    'title'            => 'Título',
                    'view-all'         => 'Ver todas las reseñas',
                    'write-review'     => 'Escribir una reseña',
                ],

                'products' => [
                    'no-result' => 'No hay productos disponibles aquí',
                    'show'      => 'Mostrar',

                    'sort-by' => [
                        'title' => 'Ordenar por',

                        'options' => [
                            'cheapest-first'  => 'Más baratos primero',
                            'expensive-first' => 'Más caros primero',
                            'from-a-z'        => 'De A-Z',
                            'from-z-a'        => 'De Z-A',
                            'latest-first'    => 'Más recientes primero',
                            'oldest-first'    => 'Más antiguos primero',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Borrar todo',
                        'filter'      => 'Filtrar',
                        'filters'     => 'Filtros:',
                        'price-range' => 'Rango de precios',
                        'sort'        => 'Ordenar',
                    ],
                ],
            ],
        ],
    ],
];
