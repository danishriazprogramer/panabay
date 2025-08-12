<?php

return [
    'admin' => [
        'configuration' => [
            'index' => [
                'marketplace' => [
                    'title' => 'Marketplace',
                    'info'  => 'Gerenciar Marketplace',

                    'module-info' => [
                        'title'       => 'Informações do Módulo',
                        'info'        => 'Fornece informações relacionadas à versão do aplicativo.',
                        'app-version' => 'Versão do Aplicativo: v2.3.0',
                    ],

                    'general' => [
                        'admin-commission-percentage'  => 'Porcentagem de Comissão do Admin',
                        'description'                  => 'Gerencie as configurações gerais do marketplace, como status, comissão, etc.',
                        'lines-in-street-address'      => 'Linhas no Endereço',
                        'lines-in-street-address-info' => 'Defina o número de linhas no endereço. Padrão é uma linha.',
                        'status'                       => 'Status',
                        'title'                        => 'Geral',
                    ],

                    'product' => [
                        'approval-required'         => 'Aprovação Necessária',
                        'description'               => 'Gerencie as configurações de produtos do marketplace, como aprovações, flags, etc.',
                        'enable-flag'               => 'Ativar Flag',
                        'seller-can-assign-product' => 'Vendedor Pode Atribuir Produto',
                        'seller-can-create-product' => 'Vendedor Pode Criar Produto',
                        'show-progress-bar'         => 'Mostrar barra de progresso',
                        'title'                     => 'Produto',
                    ],

                    'seller' => [
                        'approval-required'           => 'Aprovação necessária',
                        'can-cancel-order'            => 'Pode cancelar pedido',
                        'can-create-invoice'          => 'Pode criar fatura',
                        'can-create-shipment'         => 'Pode criar remessa',
                        'description'                 => 'Gerencie as configurações do vendedor no mercado, como aprovações, bandeiras, etc.',
                        'enable-flag'                 => 'Ativar bandeira',
                        'enable-minimum-order-amount' => 'Ativar valor mínimo de pedido',
                        'enable-seller-flag'          => 'Ativar bandeira do vendedor',
                        'red-flag-limit'              => 'Limite de bandeira vermelha',
                        'red-flag-limit-info'         => 'Se o vendedor exceder este limite, a bandeira vermelha será exibida no perfil do vendedor.',
                        'show-red-flag'               => 'Mostrar bandeira vermelha no perfil se o limite for excedido',
                        'title'                       => 'Vendedor',
                    ],

                    'featured-sellers' => [
                        'limit-count' => 'Contagem de Limite',
                        'description' => 'Gerencie os vendedores em destaque do mercado.',
                        'status'      => 'Status',
                        'title'       => 'Vendedores em Destaque',

                        'popularity-criteria' => [
                            'all'              => 'Todos',
                            'maximum-orders'   => 'Máximos Pedidos',
                            'maximum-products' => 'Máximos Produtos',
                            'maximum-rating'   => 'Classificação máxima',
                            'maximum-sale'     => 'Máxima Venda',
                            'title'            => 'Critérios de Popularidade',
                        ],
                    ],

                    'landing-page' => [
                        'banner-btn-title'    => 'Título do Botão do Banner',
                        'banner-description'  => 'Descrição do Banner',
                        'banner-image'        => 'Imagem do Banner',
                        'banner-title'        => 'Título do Banner',
                        'business-hour'       => 'Horário Comercial',
                        'community-count'     => 'Contagem da Comunidade',
                        'description'         => 'Personalize a página inicial do Marketplace, adicionando ícones, banners e descrições para um visual renovado.',
                        'feature-box1-desc'   => 'Descrição da Caixa de Característica 1',
                        'feature-box1-icon'   => 'Ícone da Caixa de Característica 1',
                        'feature-box1-title'  => 'Título da Caixa de Característica 1',
                        'feature-box2-desc'   => 'Descrição da Caixa de Característica 2',
                        'feature-box2-icon'   => 'Ícone da Caixa de Característica 2',
                        'feature-box2-title'  => 'Título da Caixa de Característica 2',
                        'feature-box3-desc'   => 'Descrição da Caixa de Característica 3',
                        'feature-box3-icon'   => 'Ícone da Caixa de Característica 3',
                        'feature-box3-title'  => 'Título da Caixa de Característica 3',
                        'feature-box4-desc'   => 'Descrição da Caixa de Característica 4',
                        'feature-box4-icon'   => 'Ícone da Caixa de Característica 4',
                        'feature-box4-title'  => 'Título da Caixa de Característica 4',
                        'feature-description' => 'Descrição da Característica',
                        'feature-image'       => 'Imagem da Característica',
                        'feature-title'       => 'Título da Característica',
                        'journey-description' => 'Descrição da Jornada',
                        'journey-image'       => 'Imagem da Jornada',
                        'journey-step1-desc'  => 'Descrição da Etapa 1 da Jornada',
                        'journey-step1-icon'  => 'Ícone da Etapa 1 da Jornada',
                        'journey-step1-title' => 'Título da Etapa 1 da Jornada',
                        'journey-step2-desc'  => 'Descrição da Etapa 2 da Jornada',
                        'journey-step2-icon'  => 'Ícone da Etapa 2 da Jornada',
                        'journey-step2-title' => 'Título da Etapa 2 da Jornada',
                        'journey-step3-desc'  => 'Descrição da Etapa 3 da Jornada',
                        'journey-step3-icon'  => 'Ícone da Etapa 3 da Jornada',
                        'journey-step3-title' => 'Título da Etapa 3 da Jornada',
                        'journey-step4-desc'  => 'Descrição da Etapa 4 da Jornada',
                        'journey-step4-icon'  => 'Ícone da Etapa 4 da Jornada',
                        'journey-step4-title' => 'Título da Etapa 4 da Jornada',
                        'journey-step5-desc'  => 'Descrição da Etapa 5 da Jornada',
                        'journey-step5-icon'  => 'Ícone da Etapa 5 da Jornada',
                        'journey-step5-title' => 'Título da Etapa 5 da Jornada',
                        'journey-title'       => 'Título da Jornada',
                        'payment-duration'    => 'Duração do Pagamento',
                        'serviceable-pincode' => 'Código Postal Atendido',
                        'title'               => 'Página de Destino',
                    ],
                ],
            ],
        ],

        'acl' => [
            'assign-product'    => 'Atribuir Produto',
            'communications'    => 'Comunicações',
            'create'            => 'Criar',
            'delete'            => 'Excluir',
            'edit'              => 'Editar',
            'flag-reasons'      => 'Razões para Sinalização',
            'inventory-sources' => 'Fontes de Inventário',
            'orders'            => 'Pedidos',
            'pay'               => 'Pagar',
            'payment-request'   => 'Solicitação de Pagamento',
            'product-reviews'   => 'Avaliações de Produtos',
            'products'          => 'Produtos',
            'reviews'           => 'Avaliações de Vendedores',
            'seller-categories' => 'Categorias de Vendedores',
            'sellers'           => 'Vendedores',
            'title'             => 'Mercado',
            'transactions'      => 'Transações',
            'view'              => 'Visualizar',
        ],

        'menu' => [
            'communications'    => 'Comunicações',
            'flag-reasons'      => 'Motivos de Sinalização',
            'inventory-sources' => 'Fontes de Inventário',
            'orders'            => 'Pedidos',
            'payment-requests'  => 'Pedidos de Pagamento',
            'product-reviews'   => 'Avaliações de Produtos',
            'products'          => 'Produtos',
            'seller-categories' => 'Categorias de vendedores',
            'seller-reviews'    => 'Avaliações de Vendedores',
            'sellers'           => 'Vendedores',
            'title'             => 'Mercado',
            'transactions'      => 'Transações',
        ],

        'sellers' => [
            'index' => [
                'add-btn'            => 'Adicionar Vendedores',
                'delete-failed'      => 'Falha na exclusão do vendedor!',
                'delete-success'     => 'Vendedor excluído com sucesso.',
                'incomplete-profile' => 'O vendedor tem um perfil incompleto!',
                'login-message'      => 'Você está logado como :seller_name',
                'pending-orders'     => 'O vendedor tem alguns pedidos pendentes',
                'title'              => 'Vendedores',
                'update-success'     => 'Vendedor atualizado com sucesso!',

                'datagrid' => [
                    'add-product'     => 'Adicionar',
                    'approved'        => 'Aprovado',
                    'assign-product'  => 'Atribuir Produto',
                    'created-at'      => 'Criado em',
                    'delete'          => 'Excluir',
                    'disapproved'     => 'Desaprovado',
                    'edit'            => 'Editar',
                    'email'           => 'E-mail',
                    'flags'           => 'Bandeiras',
                    'id'              => 'ID',
                    'login-as-seller' => 'Entrar como vendedor',
                    'seller-id'       => 'ID - :seller_id',
                    'seller-name'     => 'Nome do vendedor',
                    'shop-url'        => 'URL da loja',
                    'status'          => 'Status',
                    'suspended'       => 'Suspenso',
                    'total-flags'     => 'Total de Bandeiras: :count',
                    'update-status'   => 'Atualizar Status',
                ],

                'create'  => [
                    'address'        => 'Endereço',
                    'city'           => 'Cidade',
                    'country'        => 'País',
                    'email'          => 'E-mail',
                    'name'           => 'Nome',
                    'phone'          => 'Número de telefone',
                    'postcode'       => 'Código postal',
                    'save-btn'       => 'Salvar',
                    'select'         => 'Selecionar',
                    'shop-title'     => 'Título da loja',
                    'shop-url'       => 'URL da loja',
                    'state'          => 'Estado',
                    'street-address' => 'Endereço da Rua',
                    'success'        => 'Vendedor criado com sucesso.',
                    'title'          => 'Criar vendedor',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Bandeiras do vendedor',

                    'datagrid' => [
                        'id'             => 'Id',
                        'customer-name'  => 'Nome do cliente',
                        'customer-email' => 'E-mail do cliente',
                        'date'           => 'Data',
                        'reason'         => 'Motivo',
                    ],
                ],
            ],

            'search' => [
                'back-btn'          => 'Voltar',
                'image-placeholder' => 'Imagem do Produto',
                'no-result'         => 'Nenhum resultado encontrado!',
                'sku'               => 'SKU - :sku',
                'title'             => 'Buscar Produtos',
            ],

            'assign-product' => [
                'already-selling'     => 'O vendedor já está vendendo este produto',
                'assign-successfully' => 'Produto atribuído com sucesso ao vendedor.',
                'back-btn'            => 'Voltar',
                'condition'           => 'Condição',
                'description'         => 'Descrição',
                'new'                 => 'Novo',
                'old'                 => 'Velho',
                'price'               => 'Preço',
                'product-not-allowed' => 'O vendedor não tem permissão para vender produtos do tipo :type.',
                'quantities'          => 'Quantidades',
                'save-btn'            => 'Salvar',
                'select-condition'    => 'Selecionar condição',
                'title'               => 'Atribuir Produto',

                'seller-details' => [
                    'additional-info' => 'Informação adicional',
                    'approved'        => 'Aprovado',
                    'disapproved'     => 'Reprovado',
                    'no-of-products'  => 'N.º de produtos',
                    'status'          => 'Estado',
                    'suspended'       => 'Suspenso',
                    'title'           => 'Detalhes do vendedor',
                ],

                'product-details' => [
                    'active'            => 'Ativo',
                    'disable'           => 'Desativar',
                    'title'             => 'Detalhes do produto',
                    'image-placeholder' => 'Imagem do produto',
                ],

                'images' => [
                    'info'  => 'A resolução da imagem deve ser como 609px X 560px',
                    'title' => 'Imagens',
                ],

                'videos' => [
                    'error' => 'O vídeo não pode ser maior que :max kilobytes. Por favor, escolha um arquivo menor.',
                    'info'  => 'O tamanho máximo do vídeo deve ser como :size',
                    'title' => 'Vídeos',
                ],

                'configurable' => [
                    'delete-btn'        => 'Excluir',
                    'edit-btn'          => 'Editar',
                    'image-placeholder' => 'Imagem do Produto',
                    'qty'               => 'Qty - :qty',
                    'sku'               => 'SKU - :sku',
                    'title'             => 'Variações',

                    'edit' => [
                        'images'     => 'Imagens',
                        'price'      => 'Preço',
                        'quantities' => 'Quantidades',
                        'save-btn'   => 'Salvar',
                    ],
                ],

                'downloadable' => [
                    'links' => [
                        'add-btn'     => 'Adicionar Link',
                        'delete-btn'  => 'Excluir',
                        'edit-btn'    => 'Editar',
                        'empty-info'  => 'Para criar um link rapidamente.',
                        'empty-title' => 'Adicionar Link',
                        'file'        => 'Arquivo : ',
                        'info'        => 'O tipo de produto baixável permite vender produtos digitais, como eBooks, aplicativos de software, música, jogos, etc.',
                        'sample-file' => 'Arquivo de Amostra : ',
                        'sample-url'  => 'URL de Amostra : ',
                        'title'       => 'Links para Download',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'downloads'   => 'Download Permitido',
                            'file'        => 'Arquivo',
                            'file-type'   => 'Tipo de Arquivo',
                            'name'        => 'Título',
                            'price'       => 'Preço',
                            'sample'      => 'Amostra',
                            'sample-type' => 'Tipo de Amostra',
                            'save-btn'    => 'Salvar',
                            'title'       => 'Link',
                            'url'         => 'URL',
                        ],
                    ],

                    'samples' => [
                        'add-btn'     => 'Adicionar Amostra',
                        'delete-btn'  => 'Excluir',
                        'edit-btn'    => 'Editar',
                        'empty-info'  => 'Para criar uma amostra rapidamente.',
                        'empty-title' => 'Adicionar Amostra',
                        'file'        => 'Arquivo : ',
                        'info'        => 'O tipo de produto baixável permite vender produtos digitais, como eBooks, aplicativos de software, música, jogos, etc.',
                        'title'       => 'Amostras para Download',
                        'url'         => 'URL : ',

                        'update-create' => [
                            'file'      => 'Arquivo',
                            'file-type' => 'Tipo de Arquivo',
                            'name'      => 'Título',
                            'save-btn'  => 'Salvar',
                            'title'     => 'Link',
                            'url'       => 'URL',
                        ],
                    ],
                ],
            ],

            'edit' => [
                'back-btn'       => 'Voltar',
                'suspended'      => 'Suspenso',
                'title'          => 'Editar Vendedor',
                'update-btn'     => 'Atualizar Vendedor',
                'update-success' => 'Vendedor Atualizado com Sucesso.',

                'shop' => [
                    'address'          => 'Endereço',
                    'city'             => 'Cidade',
                    'country'          => 'País',
                    'description'      => 'Descrição',
                    'email'            => 'E-mail',
                    'name'             => 'Nome',
                    'phone-number'     => 'Número de telefone',
                    'postcode'         => 'Código postal',
                    'select'           => 'Selecionar',
                    'shop-title'       => 'Título da loja',
                    'state'            => 'Estado',
                    'street-address'   => 'Endereço da Rua',
                    'title'            => 'Detalhes da loja',
                    'url'              => 'URL da loja',
                ],

                'profile' => [
                    'banner'       => 'Banner do Perfil',
                    'banner-size'  => 'O tamanho do banner deve ser de 300px X 200px',
                    'logo'         => 'Logo do Perfil',
                    'logo-size'    => 'O tamanho do logo deve ser de 125px X 125px',
                    'social-links' => 'Link :name',
                    'title'        => 'Detalhes do Perfil',
                ],

                'allowed-product' => [
                    'title' => 'Produto Permitido',
                ],

                'minimum-order-amount' => [
                    'title' => 'Valor Mínimo do Pedido',
                ],

                'google-analytics-id' => [
                    'title' => 'ID do Google Analytics',
                ],

                'commission' => [
                    'percentage' => 'Porcentagem',
                    'status'     => 'Status',
                    'title'      => 'Comissão do Vendedor',
                ],

                'meta-info' => [
                    'meta-description' => 'Meta Descrição',
                    'meta-keyword'     => 'Meta Palavras-chave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Informações Meta',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidade',
                    'return'   => 'Política de Devolução',
                    'shipping' => 'Política de Envio',
                    'title'    => 'Políticas',
                ],

                'channels' => [
                    'title' => 'Canal',
                ],

                'users' => [
                    'email' => 'Email',
                    'id'    => 'ID',
                    'name'  => 'Nome',
                    'phone' => 'Telefone',
                    'title' => 'Usuários',
                ],
            ],
        ],

        'products' => [
            'index' => [
                'add-btn'        => 'Adicionar Produtos',
                'delete-success' => 'Produto excluído com sucesso.',
                'title'          => 'Produtos',
                'update-success' => 'Produto atualizado com sucesso.',

                'datagrid' => [
                    'approved'       => 'Aprovado',
                    'delete'         => 'Excluir',
                    'disapproved'    => 'Reprovado',
                    'flags'          => 'Bandeiras',
                    'id'             => 'ID',
                    'is-owner'       => 'É Proprietário',
                    'no'             => 'Não',
                    'out-of-stock'   => 'Sem estoque',
                    'price'          => 'Preço',
                    'product-id'     => 'ID - :product_id',
                    'product-name'   => 'Nome do Produto',
                    'product-number' => 'Número do Produto',
                    'product-type'   => 'Tipo de Produto',
                    'quantity'       => 'Quantidade',
                    'seller-name'    => 'Nome do Vendedor',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'total-flags'    => 'Total de Bandeiras: :count',
                    'total-quantity' => ':quantity Disponível',
                    'update-status'  => 'Atualizar Status',
                    'yes'            => 'Sim',
                ],
            ],

            'flags' => [
                'index' => [
                    'title' => 'Bandeiras de Produto',

                    'datagrid' => [
                        'customer-email' => 'Email do Cliente',
                        'customer-name'  => 'Nome do Cliente',
                        'date'           => 'Data',
                        'id'             => 'ID',
                        'reason'         => 'Razão',
                    ],
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'review-details' => 'Detalhes da Avaliação',
                'title'          => 'Avaliações de Produtos',

                'datagrid' => [
                    'approved'      => 'Aprovado',
                    'comment'       => 'Comentário',
                    'customer-name' => 'Nome do Cliente',
                    'date'          => 'Data',
                    'disapproved'   => 'Desaprovado',
                    'id'            => 'ID',
                    'images'        => 'Imagens',
                    'pending'       => 'Pendente',
                    'product'       => 'Produto',
                    'product-name'  => 'Nome do Produto',
                    'rating'        => 'Avaliação',
                    'review-id'     => 'ID - :review_id',
                    'shop-title'    => 'Título da Loja',
                    'status'        => 'Status',
                    'title'         => 'Título',
                    'update-status' => 'Status de atualização',
                    'view'          => 'Visualizar',
                ],
            ],

            'update-success' => 'Avaliações do produto atualizadas com sucesso',
            'delete-success' => 'Avaliações de produtos deletadas com sucesso.',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Avaliações de Vendedores',

                'datagrid' => [
                    'approved'            => 'Aprovado',
                    'comment'             => 'Comentário',
                    'customer-name'       => 'Nome do Cliente',
                    'date'                => 'Data',
                    'delete'              => 'Excluir',
                    'disapproved'         => 'Reprovado',
                    'id'                  => 'ID',
                    'mass-delete-success' => 'Avaliações de vendedores excluídas com sucesso.',
                    'mass-update-success' => 'Avaliações de vendedores atualizadas com sucesso.',
                    'pending'             => 'Pendente',
                    'rating'              => 'Avaliação',
                    'review-id'           => 'ID - :review_id',
                    'review-title'        => 'Título da Avaliação',
                    'seller-name'         => 'Nome do Vendedor',
                    'shop-title'          => 'Nome da Loja',
                    'status'              => 'Status',
                    'update-status'       => 'Atualizar Status',
                ],
            ],

            'delete-success' => 'Avaliação de vendedor excluída com sucesso.',
        ],

        'orders' => [
            'index' => [
                'title' => 'Pedidos',

                'datagrid' => [
                    'canceled'        => 'Cancelado',
                    'closed'          => 'Fechado',
                    'commission'      => 'Comissão',
                    'completed'       => 'Concluído',
                    'customer'        => 'Cliente',
                    'date'            => 'Data',
                    'discount'        => 'Desconto',
                    'email'           => 'E-mail',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Valor Bruto',
                    'id'              => 'ID',
                    'items'           => 'Itens',
                    'location'        => 'Localização',
                    'order-id'        => 'ID do Pedido - #:id',
                    'payment'         => 'Pagamento',
                    'pending'         => 'Pendente',
                    'pending-payment' => 'Aguardando Pagamento',
                    'processing'      => 'Processando',
                    'seller'          => 'Vendedor',
                    'seller-earn'     => 'Ganho',
                    'shipment'        => 'Remessa',
                    'shop'            => 'Loja',
                    'status'          => 'Status',
                    'view'            => 'Visualizar',
                ],
            ],
        ],

        'transactions' => [
            'index' => [
                'title' => 'Transações',

                'datagrid' => [
                    'base-total'     => 'Total Base',
                    'comment'        => 'Comentário',
                    'customer-name'  => 'Nome do Cliente',
                    'id'             => 'ID',
                    'seller-id'      => 'ID do Vendedor',
                    'seller-name'    => 'Nome do Vendedor',
                    'transaction-id' => 'ID da Transação',
                    'view'           => 'Visualizar',
                ],
            ],

            'view' => [
                'commission'        => 'Comissão',
                'created-on'        => 'criado em :date,',
                'name'              => 'Nome',
                'payment-method'    => 'Pagamento via :method',
                'price'             => 'Preço',
                'qty'               => 'Quantidade',
                'seller-total'      => 'Total do Vendedor',
                'shipping-handling' => 'Envio e Manuseio',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Imposto',
                'title'             => 'Transações #:transaction_id',
                'total'             => 'Total',
            ],
        ],

        'flag-reasons' => [
            'index' => [
                'create-btn'          => 'Criar Motivo',
                'delete-success'      => 'Motivo de Sinalização excluído com sucesso.',
                'mass-delete-success' => 'Motivos de Sinalização excluídos com sucesso.',
                'mass-update-success' => 'Motivos de Sinalização atualizados com sucesso.',
                'title'               => 'Motivos de Sinalização',

                'datagrid' => [
                    'delete'        => 'Excluir',
                    'edit'          => 'Editar',
                    'id'            => 'Id',
                    'name'          => 'Nome',
                    'update-status' => 'Atualizar Status',

                    'status' => [
                        'active'  => 'Ativo',
                        'disable' => 'Desativar',
                        'title'   => 'Status',
                    ],

                    'type' => [
                        'product' => 'Produto',
                        'seller'  => 'Vendedor',
                        'title'   => 'Tipo',
                    ],
                ],
            ],

            'create' => [
                'admin'    => 'Admin',
                'back-btn' => 'Voltar',
                'general'  => 'Geral',
                'label'    => 'Rótulo',
                'product'  => 'Produto',
                'save-btn' => 'Salvar Motivo',
                'seller'   => 'Vendedor',
                'status'   => 'Status',
                'title'    => 'Criar Motivo',
                'type'     => 'Tipo',
            ],

            'edit' => [
                'admin'    => 'Admin',
                'back-btn' => 'Voltar',
                'general'  => 'Geral',
                'label'    => 'Rótulo',
                'product'  => 'Produto',
                'save-btn' => 'Salvar Motivo',
                'seller'   => 'Vendedor',
                'status'   => 'Status',
                'title'    => 'Editar Motivo',
                'type'     => 'Tipo',
            ],

            'create-success' => 'Motivo de Sinalização criado com sucesso.',
            'update-success' => 'Motivo de Sinalização atualizado com sucesso.',
        ],

        'seller-categories' => [
            'index' => [
                'create-btn'     => 'Atribuir Categoria',
                'create-success' => 'Categoria atribuída com sucesso.',
                'delete-failed'  => 'Falha na exclusão da categoria!',
                'delete-success' => 'Categoria excluída com sucesso.',
                'title'          => 'Categorias de Vendedores',
                'update-success' => 'Categoria atualizada com sucesso.',

                'datagrid' => [
                    'delete' => 'Excluir',
                    'edit'   => 'Editar',
                    'id'     => 'ID',
                    'name'   => 'Nome',
                ],
            ],

            'create' => [
                'back-btn'      => 'Voltar',
                'save-btn'      => 'Salvar Categoria',
                'select-seller' => 'Selecionar Vendedor',
                'seller'        => 'Vendedor',
                'title'         => 'Atribuir Categoria',
            ],

            'edit' => [
                'back-btn'   => 'Voltar',
                'seller'     => 'Vendedor',
                'title'      => 'Editar Categoria',
                'update-btn' => 'Atualizar Categoria',
            ],
        ],

        'payment-request' => [
            'index' => [
                'comment'              => 'Comentário',
                'no-amount-remaining'  => 'Nenhum valor restante para pagar!',
                'order-not-found'      => 'Pedido não encontrado!',
                'pay-btn'              => 'Pagar Agora',
                'pay-to-seller'        => 'Pagamento ao Vendedor',
                'payment-success'      => 'Vendedor foi pago com sucesso!',
                'something-went-wrong' => 'Algo deu errado!',
                'title'                => 'Pedido de Pagamento',

                'datagrid' => [
                    'already-paid'          => 'Já Pago',
                    'canceled'              => 'Cancelado',
                    'closed'                => 'Fechado',
                    'completed'             => 'Concluído',
                    'customer-name'         => 'Nome do Cliente',
                    'date'                  => 'Data',
                    'email'                 => 'E-mail',
                    'fraud'                 => 'Fraude',
                    'gross-amt'             => 'Valor bruto',
                    'id'                    => 'ID do pedido',
                    'invoice-pending'       => 'Fatura Pendente',
                    'order-canceled'        => 'Pedido Cancelado',
                    'order-id'              => 'ID #:id',
                    'pay'                   => 'Pagar',
                    'pending'               => 'Pendente',
                    'pending_payment'       => 'Pagamento Pendente',
                    'processing'            => 'Processando',
                    'refunded'              => 'Reembolsado',
                    'remaining-total'       => 'Total Restante',
                    'request-payment'       => 'Solicitar Pagamento',
                    'seller'                => 'Vendedor',
                    'seller-total-invoiced' => 'Total do Vendedor Faturado',
                    'shop'                  => 'Loja',
                    'status'                => 'Status',
                    'total-paid'            => 'Total Pago',
                    'view'                  => 'Visualizar',
                ],
            ],
        ],

        'communications' => [
            'index' => [
                'block-seller'         => 'Bloquear Vendedor',
                'block-success'        => 'Vendedor Bloqueado com Sucesso!',
                'chat-history-cleared' => 'Histórico de Chat Limpo com Sucesso!',
                'clear-chat-history'   => 'Limpar Histórico de Chat',
                'exit'                 => 'Sair',
                'message-failed'       => 'Falha ao enviar mensagem!',
                'message-sent'         => 'Mensagem enviada com sucesso!',
                'no-message'           => 'Nenhuma Mensagem Encontrada!',
                'search'               => 'Pesquisar',
                'search-message'       => 'Pesquisar Mensagem',
                'seller-blocked'       => 'Você bloqueou este vendedor. Você não pode enviar mensagem para este vendedor.',
                'sellers'              => 'Vendedores',
                'title'                => 'Comunicações',
                'type-message'         => 'Digite sua mensagem aqui...',
                'unblock-seller'       => 'Desbloquear Vendedor',
                'unblock-success'      => 'Vendedor Desbloqueado com Sucesso!',
                'welcome-message'      => 'Bem-vindo à Comunicação do Marketplace!',

                'filters' => [
                    'all-messages'      => 'Todas as mensagens',
                    'prev-fifteen-days' => 'Últimos 15 dias',
                    'prev-seven-days'   => 'Últimos 7 dias',
                    'prev-six-months'   => 'Últimos 6 meses',
                    'prev-thirty-days'  => 'Últimos 30 dias',
                ],
            ],
        ],

        'inventory-sources' => [
            'index' => [
                'title' => 'Fontes de Inventário',

                'datagrid' => [
                    'active'      => 'Ativo',
                    'code'        => 'Código',
                    'id'          => 'Id',
                    'inactive'    => 'Inativo',
                    'name'        => 'Nome',
                    'seller-name' => 'Nome do Vendedor',
                    'shop-title'  => 'Título da Loja',
                    'status'      => 'Status',
                ],

                'view' => [
                    'active'         => 'Ativo',
                    'address'        => 'Endereço da Fonte',
                    'city'           => 'Cidade',
                    'code'           => 'Código',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informações de Contato',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Número de Contato',
                    'country'        => 'País',
                    'description'    => 'Descrição',
                    'general-info'   => 'Informações Gerais',
                    'inactive'       => 'Inativo',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nome',
                    'postcode'       => 'Código Postal',
                    'priority'       => 'Prioridade',
                    'seller-info'    => 'Informações do Vendedor',
                    'seller-name'    => 'Nome do Vendedor',
                    'settings'       => 'Configurações',
                    'shop-title'     => 'Título da Loja',
                    'state'          => 'Estado',
                    'street'         => 'Rua',
                    'title'          => 'Fonte de Inventário #:id',
                ],
            ],
        ],
    ],

    'commands' => [
        'install' => [
            'description' => 'Instalar o pacote Marketplace.',
            'migrate'     => 'Migrando todas as tabelas para o banco de dados (isso pode demorar um pouco)...',
            'seed'        => 'Inserindo dados no banco de dados...',
            'publish'     => 'Publicando ativos e configurações...',
            'cache'       => 'Limpando o cache...',
            'finish'      => 'Pacote Marketplace instalado com sucesso.',
        ],

        'version' => [
            'description' => 'Exibe a versão atual do pacote Marketplace.',
            'comment'     => 'Versão do Marketplace: :version',
        ],
    ],

    'emails' => [
        'dear'        => 'Prezado/a :customer_name',
        'dear-admin'  => 'Prezado/a Administrador/a',
        'dear-seller' => 'Caro vendedor',

        'seller' => [
            'registration' => [
                'date'        => 'Data de Cadastro:',
                'description' => 'Estamos empolgados em informar sobre um novo cadastro de vendedor em nossa plataforma. Por favor, reserve um momento para dar as boas-vindas ao vendedor em nossa plataforma.',
                'details'     => 'Aqui estão os detalhes:',
                'email'       => 'Endereço de E-mail:',
                'greeting'    => 'Espero que esta mensagem o encontre bem.',
                'name'        => 'Nome do Vendedor:',
                'shop'        => 'URL da Loja:',
                'subject'     => 'Novo Cadastro de Vendedor',
            ],

            'forgot-password' => [
                'description'    => 'Você está recebendo este e-mail porque recebemos uma solicitação de redefinição de senha para sua conta.',
                'greeting'       => 'Esqueceu a senha!',
                'reset-password' => 'Redefinir senha',
                'subject'        => 'E-mail de redefinição de senha',
            ],

            'welcome' => [
                'description' => 'Bem-vindo a bordo! Estamos empolgados por tê-lo na família. Sua presença como vendedor adiciona um valor imenso à nossa plataforma, e esperamos uma parceria bem-sucedida.',
                'greeting'    => 'Bem-vindo e obrigado por se cadastrar conosco!',
                'subject'     => 'Notificação de Boas-Vindas ao Vendedor',
            ],

            'approval' => [
                'approved'    => 'Seu pedido para se tornar um vendedor foi aceito.',
                'disapproved' => 'Seu pedido para se tornar um vendedor foi rejeitado.',
                'greeting'    => 'Bem-vindo e obrigado por se cadastrar conosco!',
                'subject'     => 'Notificação de Aprovação do Vendedor',
            ],

            'update' => [
                'description' => 'Seu perfil foi atualizado com sucesso.',
                'greeting'    => 'Espero que esta mensagem o encontre bem.',
                'subject'     => 'Notificação de Atualização do Perfil do Vendedor',
            ],

            'good-bye' => [
                'description' => 'Trabalhar com você foi um prazer, e sou verdadeiramente grato pela sua profissionalismo, dedicação e pela alta qualidade de seus produtos/serviços. Seu compromisso em garantir a satisfação do cliente não passou despercebido, sendo um fator chave em nossa experiência positiva.',
                'greeting'    => 'Espero que esta mensagem o encontre bem.',
                'subject'     => 'Notificação de Despedida do Vendedor',
            ],

            'product-approval' => [
                'approved'    => 'Seu produto :name foi aprovado.',
                'disapproved' => 'Seu produto :name foi reprovado.',
                'greeting'    => 'Bem-vindo e obrigado por se registrar conosco!',
                'subject'     => 'Notificação de Aprovação de Produto do Vendedor',
            ],

            'orders' => [
                'created' => [
                    'greeting' => 'Você tem um novo pedido :order_id feito em :created_at',
                    'subject'  => 'Confirmação de Novo Pedido',
                    'summary'  => 'Resumo do Pedido',
                    'title'    => 'Confirmação de Pedido!',
                ],

                'canceled' => [
                    'greeting' => 'O pedido :order_id foi cancelado',
                    'subject'  => 'Confirmação de cancelamento do pedido',
                    'summary'  => 'Resumo do pedido',
                    'title'    => 'Pedido cancelado!',
                ],

                'billing-address'   => 'Endereço de Faturamento',
                'contact'           => 'Contato',
                'discount'          => 'Desconto',
                'grand-total'       => 'Total Geral',
                'name'              => 'Nome',
                'payment'           => 'Pagamento',
                'price'             => 'Preço',
                'qty'               => 'Quantidade',
                'shipping'          => 'Envio',
                'shipping-address'  => 'Endereço de Envio',
                'shipping-handling' => 'Envio e Manuseio',
                'sku'               => 'SKU',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Imposto',
            ],

            'payment-request' => [
                'greeting'  => 'Espero que esta mensagem o encontre bem.',
                'paid'      => 'Oi.. Você recebeu pagamento pelo pedido :order_id.',
                'requested' => 'O vendedor :seller_name está solicitado para o pagamento do pedido :order_id.',
                'subject'   => 'Notificação de solicitação de pagamento do vendedor',
            ],
        ],

        'contact-seller' => [
            'email'    => 'E-mail:- :email',
            'greeting' => 'Espero que esta mensagem o encontre bem.',
            'info'     => 'Olá, :name tem uma pergunta para você. Por favor, reveja os detalhes abaixo.',
            'query'    => 'Pergunta: :query',
            'subject'  => 'Notificação de Contato com Vendedor',
            'topic'    => 'Assunto: :subject',
        ],

        'report-product' => [
            'admin-msg'  => 'Olá, ":name" relatou um problema com o produto ":product_name" do vendedor ":seller_name". Por favor, reveja os detalhes abaixo.',
            'greeting'   => 'Espero que esta mensagem o encontre bem.',
            'reason'     => 'Motivo:- :reason',
            'seller-msg' => 'Olá, ":name" relatou um problema com seu produto ":product_name". Por favor, reveja os detalhes abaixo.',
            'subject'    => 'Notificação de Relatório de Produto',
        ],

        'report-seller' => [
            'admin-msg'  => 'Olá, :name relatou um problema contra :seller_name. Por favor, reveja os detalhes abaixo.',
            'greeting'   => 'Espero que esta mensagem o encontre bem.',
            'reason'     => 'Motivo: :reason',
            'seller-msg' => 'Olá, :name relatou um problema relacionado a você. Por favor, reveja os detalhes abaixo.',
            'subject'    => 'Notificação de Relatório do Vendedor',
        ],
    ],

    'seeders' => [
        'configurations' => [
            'banner-title'        => 'Crie uma conta de vendedor Velocity',
            'banner-description'  => 'Velocity pode ser uma ótima plataforma para vender seus produtos para empresas modernas na Índia. Seguindo essas dicas, você pode se preparar para o sucesso como um vendedor Velocity!',
            'banner-btn-title'    => 'Abrir Loja',
            'feature-title'       => 'Por que os vendedores adoram vender na Velocity?',
            'feature-description' => 'Os vendedores adoram plataformas de alta velocidade porque oferecem potencial para aumento de vendas, melhor exposição e uma experiência de venda eficiente que pode contribuir para o crescimento e sucesso do negócio.',
            'feature-box1-title'  => 'Oportunidades Aumentadas de Vendas',
            'feature-box1-desc'   => 'Os vendedores adoram plataformas de alta velocidade porque oferecem potencial para aumento de vendas, melhor exposição e uma experiência de venda eficiente que pode contribuir para o crescimento e sucesso do negócio.',
            'feature-box2-title'  => 'Giro Rápido',
            'feature-box2-desc'   => 'Os produtos tendem a vender mais rapidamente em plataformas de alta velocidade, levando a um giro de estoque mais rápido e geração de receita para os vendedores.',
            'feature-box3-title'  => 'Visibilidade Aprimorada',
            'feature-box3-desc'   => 'Essas plataformas oferecem maior visibilidade e exposição para os produtos dos vendedores, resultando em mais visualizações e vendas potenciais.',
            'feature-box4-title'  => 'Eficiência e Conveniência',
            'feature-box4-desc'   => 'As plataformas de alta velocidade geralmente possuem processos e ferramentas simplificados que tornam a venda mais eficiente, economizando tempo e esforço dos vendedores na gestão de seus negócios online.',
            'journey-title'       => 'Comece sua jornada na Velocity',
            'journey-description' => 'Comece a vender para grandes clientes ao redor do mundo, 24 horas por dia.',
            'journey-step1-title' => 'Torne-se Vendedor',
            'journey-step1-desc'  => 'Configure sua loja, com todas as informações básicas.',
            'journey-step2-title' => 'Liste Produtos',
            'journey-step2-desc'  => 'Liste os produtos na loja para que os clientes possam visualizar e comprar.',
            'journey-step3-title' => 'Receba Pedidos',
            'journey-step3-desc'  => 'Receba pedidos de uma ampla gama de clientes ao redor do mundo.',
            'journey-step4-title' => 'Entrega do Produto',
            'journey-step4-desc'  => 'Uma vez que o produto é entregue e o pagamento recebido.',
            'journey-step5-title' => 'Pagamento',
            'journey-step5-desc'  => 'Solicitação de pagamento, receba o pagamento após o corte da comissão.',
        ],

        'flag-reasons' => [
            'damaged-product'           => 'Produto danificado',
            'damaged-product-sold'      => 'Produto danificado vendido pelo vendedor',
            'duplicate-product'         => 'Produto duplicado',
            'duplicate-product-sold'    => 'Produto duplicado vendido pelo vendedor',
            'missing-product-parts'     => 'Peças do produto ausentes',
            'over-price-product'        => 'Produto com preço excessivo',
            'over-price-product-sold'   => 'Produto com preço excessivo vendido pelo vendedor',
            'poor-product-quality'      => 'Qualidade do produto ruim',
            'poor-product-quality-sold' => 'Produto de qualidade ruim vendido pelo vendedor',
            'receive-wrong-product'     => 'Receber produto errado',
            'wrong-product-sold'        => 'Produto errado vendido pelo vendedor',
        ],
    ],

    'components' => [
        'seller' => [
            'datagrid' => [
                'export' => [
                    'csv'        => 'CSV',
                    'download'   => 'Baixar',
                    'export'     => 'Exportar',
                    'no-records' => 'Nada para exportar',
                    'xls'        => 'XLS',
                    'xlsx'       => 'XLSX',
                ],
            ],

            'layouts' => [
                'header' => [
                    'home-page'  => 'Página inicial',
                    'logout'     => 'Sair',
                    'my-profile' => 'Meu perfil',
                    'visit-shop' => 'Visitar loja',

                    'mega-search' => [
                        'customers'                      => 'Clientes',
                        'explore-all-customers'          => 'Explorar todos os clientes',
                        'explore-all-matching-customers' => 'Explorar todos os clientes que correspondem a “:query” (:count)',
                        'explore-all-matching-orders'    => 'Explorar todas as ordens que correspondem a “:query” (:count)',
                        'explore-all-matching-products'  => 'Explorar todos os produtos que correspondem a “:query” (:count)',
                        'explore-all-orders'             => 'Explorar todas as ordens',
                        'explore-all-products'           => 'Explorar todos os produtos',
                        'orders'                         => 'Ordens',
                        'products'                       => 'Produtos',
                        'sku'                            => 'SKU: :sku',
                        'title'                          => 'Mega Pesquisa',
                    ],
                ],

                'sidebar' => [
                    'collapse' => 'Recolher',
                ],
            ],

            'media' => [
                'images' => [
                    'add-image-btn'     => 'Adicionar Imagem',
                    'allowed-types'     => 'png, jpeg, jpg',
                    'not-allowed-error' => 'Apenas arquivos de imagem (.jpeg, .jpg, .png, ..) são permitidos.',
                ],

                'videos' => [
                    'add-video-btn'     => 'Adicionar Vídeo',
                    'allowed-types'     => 'mp4, webm, mkv',
                    'not-allowed-error' => 'Apenas arquivos de vídeo (.mp4, .mov, .ogg ..) são permitidos.',
                ],

                'documents' => [
                    'add-document-btn'  => 'Adicionar Documento',
                    'allowed-types'     => ':types',
                    'not-allowed-error' => 'Apenas arquivos de documentos (:types ..) são permitidos.',
                ],

                'placeholders' => [
                    'csv'        => 'CSV',
                    'excel'      => 'Excel',
                    'front'      => 'Frente',
                    'next'       => 'Próximo',
                    'pdf'        => 'PDF',
                    'powerpoint' => 'PowerPoint',
                    'size'       => 'Tamanho',
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
            'communication'     => 'Comunicação',
            'customers'         => 'Clientes',
            'dashboard'         => 'Painel de Controle',
            'extensions'        => 'Extensões',
            'general'           => 'Geral',
            'inventory-sources' => 'Fontes de Inventário',
            'manage-profile'    => 'Gerenciar Perfil',
            'orders'            => 'Pedidos',
            'product-reviews'   => 'Avaliações de Produtos',
            'products'          => 'Produtos',
            'reporting'         => 'Relatórios',
            'roles'             => 'Funções',
            'sales'             => 'Vendas',
            'seller-reviews'    => 'Avaliações de Vendedores',
            'settings'          => 'Configurações',
            'transaction'       => 'Transações',
            'users'             => 'Usuários',
        ],

        'acl' => [
            'assign'            => 'Atribuir',
            'bookings'          => 'Reservas',
            'cancel'            => 'Cancelar',
            'communication'     => 'Comunicação',
            'create'            => 'Criar',
            'customers'         => 'Clientes',
            'dashboard'         => 'Painel',
            'delete'            => 'Excluir',
            'edit'              => 'Editar',
            'extensions'        => 'Extensões',
            'general'           => 'Geral',
            'inventory-sources' => 'Fontes de Inventário',
            'invoice'           => 'Fatura',
            'orders'            => 'Pedidos',
            'payment-request'   => 'Solicitação de Pagamento',
            'print'             => 'Imprimir',
            'print-invoice'     => 'Imprimir Fatura',
            'product-reviews'   => 'Avaliações de Produtos',
            'products'          => 'Produtos',
            'reporting'         => 'Relatórios',
            'sales'             => 'Vendas',
            'seller-reviews'    => 'Avaliações de Vendedores',
            'settings'          => 'Configurações',
            'shipment'          => 'Envio',
            'transactions'      => 'Transações',
            'view'              => 'Visualizar',
        ],

        'breadcrumb' => [
            'add-new-product'   => 'Adicionar Novo Produto',
            'assign'            => 'Atribuir',
            'bookings'          => 'Reservas',
            'communication'     => 'Comunicação',
            'create'            => 'Criar',
            'customers'         => 'Clientes',
            'dashboard'         => 'Painel de Controle',
            'edit'              => 'Editar',
            'extensions'        => 'Extensões',
            'general'           => 'Geral',
            'inventory-sources' => 'Fontes de Inventário',
            'manage-profile'    => 'Gerenciar Perfil',
            'orders'            => 'Pedidos',
            'product-reviews'   => 'Avaliações de Produtos',
            'products'          => 'Produtos',
            'reporting'         => 'Relatórios',
            'roles'             => 'Funções',
            'sales'             => 'Vendas',
            'seller-reviews'    => 'Avaliações de Vendedores',
            'settings'          => 'Configurações',
            'title'             => 'Perfil',
            'transaction'       => 'Transações',
            'users'             => 'Usuários',
            'view'              => 'Visualizar',
        ],

        'login' => [
            'bagisto'             => 'Bagisto',
            'button-title'        => 'Entrar',
            'create-your-account' => 'Crie sua conta',
            'email'               => 'E-mail',
            'footer'              => '© Copyright 2010 - :current_year, Webkul Software (Registrado na Índia). Todos os direitos reservados.',
            'forgot-pass'         => 'Esqueceu a senha?',
            'form-login-text'     => 'Se você já possui uma conta, faça login com seu endereço de e-mail.',
            'invalid-credentials' => 'Verifique suas credenciais e tente novamente.',
            'new-seller'          => 'Novo vendedor?',
            'not-approved'        => 'Sua ativação aguarda aprovação do administrador',
            'page-title'          => 'Login do Vendedor',
            'password'            => 'Senha',
            'show-password'       => 'Mostrar Senha',
            'suspended-message'   => 'Sua conta foi suspensa. Entre em contato com o administrador para mais informações.',
            'title'               => 'Entrar',
        ],

        'signup' => [
            'account-exists'   => 'Já tem uma conta?',
            'bagisto'          => 'Bagisto',
            'button-title'     => 'Registrar',
            'confirm-pass'     => 'Confirmar Senha',
            'email'            => 'E-mail',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Registrado na Índia). Todos os direitos reservados.',
            'form-signup-text' => 'Se é novo em nossa loja, ficamos felizes em tê-lo como membro.',
            'name'             => 'Nome',
            'page-title'       => 'Torne-se Vendedor',
            'password'         => 'Senha',
            'sign-in-button'   => 'Entrar',
            'success'          => 'Conta criada com sucesso.',
            'url'              => 'URL da loja',
        ],

        'forgot-password' => [
            'already-sent'         => 'Já enviamos o link de redefinição de senha para seu e-mail.',
            'back'                 => 'Voltar para entrar?',
            'bagisto'              => 'Bagisto',
            'email'                => 'E-mail',
            'email-not-exist'      => 'Não conseguimos encontrar um usuário com esse endereço de e-mail.',
            'footer'               => '© Copyright 2010 - :current_year, Webkul Software (Registrado na Índia). Todos os direitos reservados.',
            'forgot-password-text' => 'Se esqueceu sua senha, recupere-a inserindo seu endereço de e-mail.',
            'page-title'           => 'Esqueceu sua senha?',
            'reset-link-sent'      => 'Enviamos o link para redefinir sua senha por e-mail.',
            'sign-in-button'       => 'Entrar',
            'submit'               => 'Redefinir Senha',
            'title'                => 'Recuperar Senha',
        ],

        'reset-password' => [
            'back-link-title'  => 'Voltar para entrar',
            'bagisto'          => 'Bagisto',
            'confirm-password' => 'Confirmar Senha',
            'email'            => 'E-mail registrado',
            'footer'           => '© Copyright 2010 - :current_year, Webkul Software (Registrado na Índia). Todos os direitos reservados.',
            'password'         => 'Senha',
            'submit-btn-title' => 'Redefinir Senha',
            'title'            => 'Redefinir Senha',
        ],

        'dashboard' => [
            'add-product'           => 'Adicionar Produto',
            'avg-order-sell'        => 'Média de Vendas por Pedido',
            'category-info'         => 'Nenhuma categoria encontrada para o intervalo selecionado',
            'complete-profile-link' => 'Complete seu perfil &rarr;',
            'completed-orders'      => 'Concluídos (:count)',
            'customer-info'         => 'Nenhum cliente encontrado para o intervalo selecionado',
            'date-range'            => 'Intervalo de Datas',
            'empty-threshold'       => 'Limite Vazio',
            'empty-threshold-desc'  => 'Não há produto disponível',
            'end-date'              => 'Data Final',
            'hi-comment'            => 'Analise rapidamente o que está acontecendo em sua loja.',
            'hi-seller'             => 'Oi, :seller_name',
            'month'                 => 'Este Mês',
            'no-category'           => 'Nenhum dado disponível',
            'no-customer'           => 'Nenhum dado disponível',
            'no-record-available'   => 'Nenhum registro disponível.',
            'order-count'           => ':total Pedidos',
            'overall-details'       => 'Detalhes Gerais',
            'pending-orders'        => 'Pendentes (:count)',
            'per-unit'              => ':price/Unidade',
            'processing-orders'     => 'Processando (:count)',
            'product-info'          => 'Adicione produtos relacionados em movimento',
            'profile-score'         => 'Pontuação do Perfil',
            'profile-score-desc'    => 'Maximize sua visibilidade mantendo as informações do seu perfil completas.',
            'qty-stock'             => ':qty em estoque',
            'refunded-orders'       => 'Reembolsados (:count)',
            'remaining-payout'      => 'Pagamento Pendente',
            'start-date'            => 'Data Inicial',
            'stock-threshold'       => 'Limite de Estoque',
            'title'                 => 'Dashboard',
            'today'                 => 'Hoje',
            'top-categories'        => 'Principais Categorias',
            'top-customers'         => 'Cliente com mais vendas',
            'top-products'          => 'Produtos mais vendidos',
            'total-customers'       => 'Total de Clientes',
            'total-orders'          => 'Total de Pedidos',
            'total-payout'          => 'Pagamento Total',
            'total-sale'            => 'Venda Total: :total',
            'total-sales'           => 'Vendas Totais',
            'view-all-btn'          => 'Ver Todos',
            'visitor-count'         => 'Visitantes - :count',
            'week'                  => 'Esta Semana',
            'year'                  => 'Este Ano',
        ],

        'orders' => [
            'index' => [
                'title' => 'Pedidos',

                'datagrid' => [
                    'canceled'        => 'Cancelado',
                    'closed'          => 'Fechado',
                    'commission'      => 'Comissão',
                    'completed'       => 'Concluído',
                    'customer'        => 'Cliente',
                    'date'            => 'Data',
                    'discount'        => 'Desconto',
                    'email'           => 'Email',
                    'fraud'           => 'Fraude',
                    'gross-amt'       => 'Total Bruto',
                    'id'              => 'ID',
                    'invoice-pending' => 'Fatura Pendente',
                    'items'           => 'Itens',
                    'location'        => 'Localização',
                    'order-id'        => 'ID do Pedido - #:id',
                    'paid'            => 'Pago',
                    'payment'         => 'Pagamento',
                    'payment-request' => 'Solicitação de Pagamento',
                    'pending'         => 'Pendente',
                    'pending-payment' => 'Pagamento Pendente',
                    'processing'      => 'Processando',
                    'refunded'        => 'Reembolsado',
                    'requested'       => 'Solicitado',
                    'seller-earn'     => 'Ganhos do Vendedor',
                    'shipment'        => 'Envio',
                    'status'          => 'Status',
                    'transaction'     => 'Transação',
                    'view'            => 'Ver',
                ],

                'payment-req-success'  => 'Sua solicitação de pagamento foi enviada com sucesso',
                'something-went-wrong' => 'Algo deu errado!',
            ],

            'view' => [
                'admin-commission'           => 'Comissão do Admin',
                'billing-address'            => 'Endereço de Cobrança',
                'by-customer'                => 'Por Cliente - :name',
                'cancel-btn'                 => 'Cancelar',
                'cancel-confirm-msg'         => 'Tem certeza de que deseja cancelar este pedido?',
                'cancel-error-msg'           => 'O pedido não pode ser cancelado',
                'cancel-success-msg'         => 'O pedido foi cancelado',
                'canceled'                   => 'Cancelado',
                'closed'                     => 'Fechado',
                'completed'                  => 'Concluído',
                'discount'                   => 'Desconto',
                'fraud'                      => 'Fraude',
                'grand-total'                => 'Total Geral',
                'info'                       => 'Informações',
                'item-canceled'              => 'Cancelado (:qty_canceled)',
                'item-invoice'               => 'Faturado (:qty_invoiced)',
                'item-ordered'               => 'Encomendado (:qty_ordered)',
                'item-refunded'              => 'Reembolsado (:qty_refunded)',
                'item-shipped'               => 'Enviado (:qty_shipped)',
                'item-status'                => 'Status do Item',
                'payment-method'             => 'Método de Pagamento',
                'pending'                    => 'Pendente',
                'pending_payment'            => 'Pagamento Pendente',
                'permission-error'           => 'Você não tem permissão para cancelar o pedido',
                'place-on'                   => 'Colocado em : :date',
                'price'                      => 'Preço',
                'price-excl-tax'             => 'Preço (sem impostos)',
                'price-incl-tax'             => 'Preço (com impostos)',
                'processing'                 => 'Processando',
                'product'                    => 'Produto',
                'shipping-address'           => 'Endereço de Envio',
                'shipping-handling'          => 'Envio e Manuseio',
                'shipping-handling-excl-tax' => 'Envio e Manuseio (Excl. Imposto)',
                'shipping-handling-incl-tax' => 'Envio e Manuseio (Incl. Imposto)',
                'shipping-method'            => 'Método de Envio',
                'sku'                        => 'SKU - :sku',
                'sub-total'                  => 'Subtotal',
                'sub-total-excl-tax'         => 'Subtotal (Excl. Imposto)',
                'sub-total-incl-tax'         => 'Subtotal (Incl. Imposto)',
                'tax'                        => 'Imposto',
                'tax-amount'                 => 'Valor do Imposto',
                'tax-percent'                => 'Percentual de Imposto',
                'title'                      => 'Pedido #:order_id',
                'total'                      => 'Total',
                'total-due'                  => 'Total Devido',
                'total-paid'                 => 'Total Pago',
                'total-refunded'             => 'Total Reembolsado',
                'total-seller-amt'           => 'Total do Vendedor',

                'invoices' => [
                    'bank-details'               => 'Detalhes Bancários',
                    'bill-to'                    => 'Faturar para',
                    'contact'                    => 'Contato',
                    'contact-number'             => 'Número de Contato',
                    'created-on'                 => 'criado em: :date_time',
                    'date'                       => 'Data da Fatura',
                    'discount'                   => 'Desconto',
                    'excl-tax'                   => 'Excl. Imposto:',
                    'grand-total'                => 'Total Geral',
                    'individual-invoice'         => 'Fatura #:invoice_id',
                    'invoice'                    => 'Fatura',
                    'invoice-id'                 => 'ID da Fatura',
                    'name'                       => 'Nome',
                    'order-date'                 => 'Data do Pedido',
                    'order-id'                   => 'ID do Pedido',
                    'payment-method'             => 'Método de Pagamento',
                    'payment-terms'              => 'Termos de Pagamento',
                    'price'                      => 'Preço',
                    'print'                      => 'Imprimir',
                    'product-name'               => 'Nome do Produto',
                    'qty'                        => 'Qtd',
                    'ship-to'                    => 'Enviar para',
                    'shipping-handling'          => 'Envio e Manuseio',
                    'shipping-handling-excl-tax' => 'Envio e Manuseio (Excl. Imposto)',
                    'shipping-handling-incl-tax' => 'Envio e Manuseio (Incl. Imposto)',
                    'shipping-method'            => 'Método de Envio',
                    'sku'                        => 'SKU - :sku',
                    'subtotal'                   => 'Subtotal',
                    'sub-total-excl-tax'         => 'Subtotal (Excl. Imposto)',
                    'sub-total-incl-tax'         => 'Subtotal (Incl. Imposto)',
                    'tax'                        => 'Imposto',
                    'tax-amount'                 => 'Valor do Imposto',
                    'title'                      => 'Faturas',
                    'vat-number'                 => 'Número de IVA',
                ],

                'shipments' => [
                    'carrier-title'       => 'Título do Transportador',
                    'created-on'          => 'criado em :date_time',
                    'individual-shipment' => 'Envio #:track_number',
                    'inventory-source'    => 'Fonte de Inventário',
                    'name'                => 'Nome',
                    'qty'                 => 'Qtde',
                    'sku'                 => 'SKU - :sku',
                    'title'               => 'Envios',
                    'tracking-number'     => 'Número de Rastreamento',
                ],

                'refunds' => [
                    'adjustment-fee'             => 'Taxa de Ajuste',
                    'adjustment-refund'          => 'Reembolso de Ajuste',
                    'created-on'                 => 'criado em :date_time',
                    'discount'                   => 'Desconto',
                    'grand-total'                => 'Total Geral',
                    'individual-refund'          => 'Reembolso #:refund_id',
                    'no-result-found'            => 'Não conseguimos encontrar nenhum registro.',
                    'price'                      => 'Preço',
                    'product-name'               => 'Nome',
                    'qty'                        => 'Qty',
                    'shipping-handling'          => 'Envio e Manipulação',
                    'shipping-handling-excl-tax' => 'Envio e Manuseio (Excl. Imposto)',
                    'shipping-handling-incl-tax' => 'Envio e Manuseio (Incl. Imposto)',
                    'sku'                        => 'SKU - :sku',
                    'sub-total-excl-tax'         => 'Subtotal (Excl. Imposto)',
                    'sub-total-incl-tax'         => 'Subtotal (Incl. Imposto)',
                    'subtotal'                   => 'Subtotal',
                    'tax'                        => 'Imposto',
                    'tax-amount'                 => 'Valor do Imposto',
                    'title'                      => 'Reembolsos',
                ],
            ],

            'invoices' => [
                'create-btn'       => 'Fatura',
                'invoice-success'  => 'Fatura criada com sucesso',
                'permission-error' => 'Você não tem permissão para criar uma fatura de pedido',
                'price'            => 'Preço',
                'product-name'     => 'Nome do Produto',
                'qty'              => 'Qtde',
                'qty-error'        => 'A quantidade solicitada não está disponível',
                'sub-total'        => 'Fatura <br> Subtotal',
                'title'            => 'Criar Fatura',
                'total'            => 'Total',
            ],

            'shipments' => [
                'avl-qty'          => 'Disponível - :qty Qty',
                'carrier-title'    => 'Título do Transportador',
                'create-btn'       => 'Enviar',
                'ordered-qty'      => 'Qtde Pedido',
                'permission-error' => 'Você não tem permissão para criar um envio',
                'product-name'     => 'Nome do Produto',
                'qty'              => 'Qtde',
                'qty-error'        => 'A quantidade solicitada não está disponível',
                'shipment-success' => 'Envio criado com sucesso',
                'shipped-qty'      => 'Qtde Enviada',
                'sku'              => 'SKU - :sku',
                'source'           => 'Fonte do Produto Pedido',
                'title'            => 'Criar Envio',
                'tracking-id'      => 'ID de Rastreamento',
            ],
        ],

        'bookings' => [
            'index' => [
                'datagrid' => [
                    'created-date' => 'Data de Criação',
                    'from'         => 'De',
                    'id'           => 'ID',
                    'order-id'     => 'ID do Pedido',
                    'qty'          => 'Quantidade',
                    'to'           => 'Para',
                    'view'         => 'Visualizar',
                ],

                'title'    => 'Reservas',
            ],

            'calendar' => [
                'booking-date'     => 'Data da Reserva',
                'booking-details'  => 'Detalhes da Reserva',
                'canceled'         => 'Cancelado',
                'closed'           => 'Fechado',
                'done'             => 'Concluído',
                'order-id'         => 'ID do Pedido',
                'pending'          => 'Pendente',
                'price'            => 'Preço',
                'status'           => 'Status',
                'time-slot'        => 'Horário:',
                'view-details'     => 'Ver Detalhes',
            ],

            'title' => 'Produto de Reservas',
        ],

        'transactions' => [
            'index' => [
                'remaining-payout'       => 'Pagamento Pendente',
                'title'                  => 'Transações',
                'total-payout'           => 'Pagamento Total',
                'total-seller-sale'      => 'Venda Total (Vendedor)',
                'total-admin-commission' => 'Comissão Total (Admin)',
                'total-sale-invoiced'    => 'Venda Total (Faturada)',

                'datagrid' => [
                    'comment'          => 'Comentário',
                    'id'               => 'Id',
                    'total'            => 'Total',
                    'transaction-id'   => 'ID da Transação',
                ],
            ],

            'view' => [
                'commission'        => 'Comissão',
                'created-on'        => 'criado em :date',
                'date'              => 'Data',
                'id'                => 'ID da Transação',
                'method'            => 'Método',
                'name'              => 'Nome',
                'payment-method'    => 'Pagamento via :method',
                'price'             => 'Preço',
                'print'             => 'Imprimir',
                'qty'               => 'Qtde',
                'seller-total'      => 'Total do Vendedor',
                'shipping-handling' => 'Envio & Manuseio',
                'subtotal'          => 'Subtotal',
                'tax'               => 'Imposto',
                'title'             => 'Transação',
                'total'             => 'Total',
                'transaction-id'    => 'Transação nº: :transaction_id',
            ],
        ],

        'products' => [
            'index' => [
                'add-new-product' => 'Adicionar Novo Produto',
                'title'           => 'Produtos',

                'datagrid' => [
                    'active'         => 'Ativo',
                    'approved'       => 'Aprovado',
                    'category'       => 'Categoria',
                    'delete'         => 'Excluir',
                    'disable'        => 'Desativar',
                    'disapproved'    => 'Não aprovado',
                    'edit'           => 'Editar',
                    'id'             => 'ID',
                    'image'          => 'Imagem',
                    'is-approved'    => 'Aprovado',
                    'name'           => 'Nome',
                    'out-of-stock'   => 'Sem estoque',
                    'price'          => 'Preço',
                    'product-number' => 'Número do Produto',
                    'product_id'     => 'ID - :product_id',
                    'sku'            => 'SKU',
                    'status'         => 'Status',
                    'stock'          => 'Estoque',
                    'total-quantity' => ':quantity Disponível',
                    'type'           => 'Tipo',
                ],
            ],

            'create' => [
                'attribute-family'          => 'Família de Atributos',
                'back'                      => 'Voltar',
                'continue'                  => 'Continuar',
                'create-new-product'        => 'Criar Novos Produtos',
                'create-your-new-product'   => 'Se o produto não existir, crie o seu novo produto',
                'disable-product-message'   => 'O administrador desativou a funcionalidade de criar ou atribuir produtos.',
                'image-placeholder'         => 'Sua Imagem',
                'no-result'                 => 'Nenhum Resultado',
                'not-allowed'               => 'Você não tem permissão para criar um produto',
                'or'                        => 'Ou',
                'product-type'              => 'Tipo de Produto',
                'search-product'            => 'Buscar Produtos',
                'sell-admin-product-prices' => 'Vender produtos do administrador com seus preços.',
                'sell-as-yours'             => 'Vender como Seu',
                'sku'                       => 'SKU',
                'sub-title'                 => 'Você pode adicionar produtos de duas maneiras, seja a partir do produto do administrador ou criar o seu próprio.',
                'title'                     => 'Adicionar Novo Produto',
                'update-profile'            => 'Por favor, atualize os detalhes do seu perfil',
            ],

            'edit' => [
                'back-btn'      => 'Voltar',
                'preview'       => 'Visualizar',
                'remove'        => 'Remover',
                'save-btn'      => 'Salvar Produto',
                'title'         => 'Editar Produto',
                'channels'      => 'Canais',
                'progress-info' => 'Melhore o apelo do seu produto e deixe uma impressão duradoura nos clientes, garantindo que todos os detalhes do produto estejam completos e precisos!',

                'price' => [
                    'group' => [
                        'add-group-price'           => 'Adicionar Preço de Grupo',
                        'all-groups'                => 'Todos os grupos',
                        'create-btn'                => 'Adicionar Novo',
                        'discount-group-price-info' => 'Para :qty Quantidade com desconto de :price',
                        'edit-btn'                  => 'Editar',
                        'empty-info'                => 'Preços especiais para clientes que pertencem a um grupo específico.',
                        'fixed-group-price-info'    => 'Para :qty Quantidade a preço fixo de :price',
                        'title'                     => 'Preço do Grupo de Clientes',

                        'create' => [
                            'all-groups'     => 'Todos os grupos',
                            'create-title'   => 'Criar Preço do Grupo de Clientes',
                            'customer-group' => 'Grupo de Clientes',
                            'delete-btn'     => 'Excluir',
                            'discount'       => 'Desconto',
                            'fixed'          => 'Fixo',
                            'price'          => 'Preço',
                            'price-type'     => 'Tipo de Preço',
                            'qty'            => 'Quantidade',
                            'save-btn'       => 'Salvar',
                            'update-title'   => 'Atualizar Preço do Grupo de Clientes',
                        ],
                    ],
                ],

                'inventories' => [
                    'pending-ordered-qty'      => 'Quantidade Pendente Encomendada: :qty',
                    'pending-ordered-qty-info' => 'A quantidade pendente encomendada será deduzida da fonte de inventário correspondente após o envio. Em caso de cancelamento, a quantidade pendente estará disponível para venda.',
                    'title'                    => 'Inventários',
                ],

                'categories' => [
                    'title' => 'Categorias',
                ],

                'images' => [
                    'title' => 'Imagens',
                    'info'  => 'A resolução da imagem deve ser como 609px X 560px',
                ],

                'videos' => [
                    'error' => 'O vídeo não pode ser maior que :max kilobytes. Por favor, escolha um arquivo menor.',
                    'info'  => 'O tamanho máximo do vídeo deve ser como :size',
                    'title' => 'Vídeos',
                ],

                'links' => [
                    'related-products' => [
                        'empty-info' => 'Adicione produtos relacionados enquanto está em movimento.',
                        'info'       => 'Além do produto que o cliente está visualizando, são apresentados produtos relacionados.',
                        'title'      => 'Produtos Relacionados',
                    ],

                    'up-sells' => [
                        'empty-info' => 'Adicione produtos de venda adicional enquanto estiver em movimento.',
                        'info'       => 'O cliente é apresentado com produtos para venda cruzada, que servem como uma alternativa premium ou de maior qualidade ao produto que estão visualizando atualmente.',
                        'title'      => 'Produtos para Venda Cruzada',
                    ],

                    'cross-sells' => [
                        'empty-info' => 'Adicione produtos de venda cruzada enquanto está em movimento.',
                        'info'       => 'Ao lado do carrinho de compras, você encontrará esses produtos de "compra por impulso" posicionados como vendas cruzadas para complementar os itens já adicionados ao seu carrinho.',
                        'title'      => 'Produtos de Venda Cruzada',
                    ],

                    'add-btn'           => 'Adicionar Produto',
                    'delete'            => 'Excluir',
                    'empty-info'        => 'Para adicionar produtos :type rapidamente.',
                    'empty-title'       => 'Adicionar Produto',
                    'image-placeholder' => 'Imagem do Produto',
                    'sku'               => 'SKU - :sku',
                ],

                'types' => [
                    'simple' => [
                        'customizable-options' => [
                            'add-btn'           => 'Adicionar opção',
                            'empty-info'        => 'Para criar opções personalizáveis rapidamente.',
                            'empty-title'       => 'Adicionar opção',
                            'info'              => 'Isso personalizará o produto simples.',
                            'title'             => 'Item personalizável',

                            'update-create' => [
                                'is-required'               => 'É obrigatório',
                                'max-characters'            => 'Máximo de caracteres',
                                'name'                      => 'Título',
                                'no'                        => 'Não',
                                'price'                     => 'Preço',
                                'save-btn'                  => 'Salvar',
                                'supported-file-extensions' => 'Extensões de arquivo suportadas',
                                'title'                     => 'Opção',
                                'type'                      => 'Tipo',
                                'yes'                       => 'Sim',
                            ],

                            'option' => [
                                'add-btn'     => 'Adicionar opção',
                                'delete'      => 'Excluir',
                                'delete-btn'  => 'Excluir',
                                'edit-btn'    => 'Editar',
                                'empty-info'  => 'Para criar várias combinações de produtos rapidamente.',
                                'empty-title' => 'Adicionar opção',

                                'types' => [
                                    'text' => [
                                        'title' => 'Texto',
                                    ],

                                    'textarea' => [
                                        'title' => 'Área de texto',
                                    ],

                                    'checkbox' => [
                                        'title' => 'Caixa de seleção',
                                    ],

                                    'radio' => [
                                        'title' => 'Rádio',
                                    ],

                                    'select' => [
                                        'title' => 'Selecionar',
                                    ],

                                    'multiselect' => [
                                        'title' => 'Seleção múltipla',
                                    ],

                                    'date' => [
                                        'title' => 'Data',
                                    ],

                                    'datetime' => [
                                        'title' => 'Data e hora',
                                    ],

                                    'time' => [
                                        'title' => 'Hora',
                                    ],

                                    'file' => [
                                        'title' => 'Arquivo',
                                    ],
                                ],

                                'items' => [
                                    'update-create' => [
                                        'label'    => 'Etiqueta',
                                        'price'    => 'Preço',
                                        'save-btn' => 'Salvar',
                                        'title'    => 'Opção',
                                    ],
                                ],
                            ],

                            'validations' => [
                                'associated-product' => 'O produto já está associado a um produto configurável, agrupado ou em pacote.',
                            ],
                        ],
                    ],

                    'configurable' => [
                        'add-btn'           => 'Adicionar Variante',
                        'delete-btn'        => 'Excluir',
                        'edit-btn'          => 'Editar',
                        'empty-info'        => 'Para criar várias combinações de produtos rapidamente.',
                        'empty-title'       => 'Adicionar Variante',
                        'image-placeholder' => 'Imagem do Produto',
                        'info'              => 'Produtos de variação dependem de todas as possíveis combinações de atributos.',
                        'qty'               => ':qty Quantidade',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Variantes',

                        'create'  => [
                            'description'            => 'Descrição',
                            'name'                   => 'Nome',
                            'save-btn'               => 'Adicionar',
                            'title'                  => 'Adicionar Variante',
                            'variant-already-exists' => 'Esta variante já existe',
                        ],

                        'edit' => [
                            'disabled'        => 'Desativado',
                            'edit-info'       => 'Se você deseja atualizar as informações do produto em detalhes, vá para a',
                            'edit-link-title' => 'Página de Detalhes do Produto',
                            'enabled'         => 'Ativado',
                            'images'          => 'Imagens',
                            'name'            => 'Nome',
                            'price'           => 'Preço',
                            'quantities'      => 'Quantidades',
                            'save-btn'        => 'Salvar',
                            'sku'             => 'SKU',
                            'status'          => 'Status',
                            'title'           => 'Produto',
                            'weight'          => 'Peso',
                        ],

                        'mass-edit' => [
                            'add-images'          => 'Adicionar Imagens',
                            'apply-to-all-btn'    => 'Aplicar a todos',
                            'apply-to-all-sku'    => 'Aplicar um preço a todos os SKU.',
                            'edit-inventories'    => 'Editar inventários',
                            'edit-prices'         => 'Editar preços',
                            'price'               => 'Preço',
                            'remove-images'       => 'Remover imagens',
                            'remove-variants'     => 'Remover variantes',
                            'select-action'       => 'Selecionar ação',
                            'select-variants'     => 'Selecionar variantes',
                            'edit-name'           => 'Editar nome',
                            'name'                => 'Nome',
                            'edit-sku'            => 'Editar SKU',
                            'sku'                 => 'SKU',
                            'edit-weight'         => 'Editar peso',
                            'weight'              => 'Peso',
                            'edit-status'         => 'Editar status',
                            'status'              => 'Status',
                            'apply-to-all-name'   => 'Aplicar um nome a todas as variantes.',
                            'apply-to-all-weight' => 'Aplicar peso a todas as variantes.',
                            'apply-to-all-status' => 'Aplicar status a todas as variantes.',
                        ],
                    ],

                    'grouped' => [
                        'add-btn'           => 'Adicionar Produto',
                        'default-qty'       => 'Quantidade Padrão',
                        'delete'            => 'Excluir',
                        'empty-info'        => 'Para criar várias combinações de produtos rapidamente.',
                        'empty-title'       => 'Adicionar Produto',
                        'image-placeholder' => 'Imagem do Produto',
                        'info'              => 'Um produto agrupado consiste em itens independentes apresentados como um conjunto, permitindo variações ou coordenação por temporada ou tema. Cada produto pode ser comprado individualmente ou como parte do grupo.',
                        'sku'               => 'SKU - :sku',
                        'title'             => 'Produtos Agrupados',
                    ],

                    'bundle' => [
                        'add-btn'           => 'Adicionar Opção',
                        'empty-info'        => 'Para criar opções de pacotes rapidamente.',
                        'empty-title'       => 'Adicionar Opção',
                        'image-placeholder' => 'Imagem do Produto',
                        'info'              => 'Um produto de pacote é um pacote de vários itens ou serviços vendidos juntos a um preço especial, proporcionando valor e conveniência aos clientes.',
                        'title'             => 'Itens de Pacote',

                        'update-create' => [
                            'checkbox'    => 'Caixa de Seleção',
                            'is-required' => 'Obrigatório',
                            'multiselect' => 'Seleção Múltipla',
                            'name'        => 'Título',
                            'no'          => 'Não',
                            'radio'       => 'Botão de Rádio',
                            'save-btn'    => 'Salvar',
                            'select'      => 'Selecionar',
                            'title'       => 'Opção',
                            'type'        => 'Tipo',
                            'yes'         => 'Sim',
                        ],

                        'option' => [
                            'add-btn'     => 'Adicionar Produto',
                            'default-qty' => 'Quantidade Padrão',
                            'delete'      => 'Excluir',
                            'delete-btn'  => 'Excluir',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para criar várias combinações de produtos rapidamente.',
                            'empty-title' => 'Adicionar Produto',
                            'sku'         => 'SKU - :sku',

                            'types' => [
                                'checkbox' => [
                                    'info'  => 'Defina o produto padrão usando caixa de seleção',
                                    'title' => 'Caixa de Seleção',
                                ],

                                'multiselect' => [
                                    'info'  => 'Defina o produto padrão usando o botão de caixa de seleção',
                                    'title' => 'Seleção Múltipla',
                                ],

                                'radio' => [
                                    'info'  => 'Defina o produto padrão usando o botão de rádio',
                                    'title' => 'Botão de Rádio',
                                ],

                                'select' => [
                                    'info'  => 'Defina o produto padrão usando o botão de rádio',
                                    'title' => 'Selecionar',
                                ],
                            ],
                        ],
                    ],

                    'booking' => [
                        'available-from' => 'Disponível a partir de',
                        'available-to'   => 'Disponível até',
                        'location'       => 'Localização',
                        'qty'            => 'Quantidade',
                        'title'          => 'Tipo de Reserva',

                        'available-every-week' => [
                            'no'    => 'Não',
                            'title' => 'Disponível Toda Semana',
                            'yes'   => 'Sim',
                        ],

                        'appointment' => [
                            'break-duration' => 'Tempo de Intervalo entre Slots (Minutos)',
                            'slot-duration'  => 'Duração do Slot (Minutos)',

                            'same-slot-for-all-days' => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot para Todos os Dias',
                                'yes'   => 'Sim',
                            ],
                        ],

                        'default' => [
                            'add'              => 'Adicionar',
                            'break-duration'   => 'Tempo de Intervalo entre Slots (Minutos)',
                            'close'            => 'Fechar',
                            'description'      => 'Informações de Reserva',
                            'description-info' => 'A duração do tempo será criada e exibida de acordo com os slots. Será única em todos os slots e visível na vitrine da loja.',
                            'edit'             => 'Editar',
                            'many'             => 'Muitas Reservas para Um Dia',
                            'one'              => 'Uma Reserva para Muitos Dias',
                            'open'             => 'Abrir',
                            'slot-add'         => 'Adicionar Slots',
                            'slot-duration'    => 'Duração do Slot (Minutos)',
                            'slot-title'       => 'Duração do Tempo dos Slots',
                            'title'            => 'Padrão',
                            'unavailable'      => 'Indisponível',

                            'modal'            => [
                                'slot' => [
                                    'add-title'  => 'Adicionar Slots',
                                    'close'      => 'Fechar',
                                    'day'        => 'Dia',
                                    'edit-title' => 'Editar Slots',
                                    'friday'     => 'Sexta-feira',
                                    'from'       => 'De',
                                    'from-day'   => 'Do Dia',
                                    'from-time'  => 'Do Horário',
                                    'monday'     => 'Segunda-feira',
                                    'open'       => 'Abrir',
                                    'saturday'   => 'Sábado',
                                    'save'       => 'Salvar',
                                    'select'     => 'Selecionar',
                                    'status'     => 'Status',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Quinta-feira',
                                    'to'         => 'Para',
                                    'to-day'     => 'Para o Dia',
                                    'to-time'    => 'Para o Horário',
                                    'tuesday'    => 'Terça-feira',
                                    'wednesday'  => 'Quarta-feira',
                                    'week'       => ':day',
                                ],
                            ],
                        ],

                        'event' => [
                            'add'                => 'Adicionar Ingressos',
                            'delete'             => 'Excluir',
                            'description'        => 'Descrição',
                            'description-info'   => 'Não há ingressos disponíveis.',
                            'edit'               => 'Editar',
                            'name'               => 'Nome',
                            'price'              => 'Preço',
                            'qty'                => 'Quantidade',
                            'special-price'      => 'Preço Especial',
                            'special-price-from' => 'Preço Especial de',
                            'special-price-to'   => 'Preço Especial até',
                            'title'              => 'Ingressos',
                            'valid-from'         => 'Válido de',
                            'valid-until'        => 'Válido até',

                            'modal'              => [
                                'edit' => 'Editar Ingressos',
                                'save' => 'Salvar',
                            ],
                        ],

                        'empty-info' => [
                            'tickets' => [
                                'add' => 'Adicionar Ingressos',
                            ],

                            'slots'   => [
                                'add'         => 'Adicionar Slots',
                                'description' => 'Slots Disponíveis com Duração de Tempo.',
                            ],
                        ],

                        'rental' => [
                            'daily'                  => 'Base Diária',
                            'daily-hourly'           => 'Ambos (Base Diária e Horária)',
                            'daily-price'            => 'Preço Diário',
                            'hourly'                 => 'Base Horária',
                            'hourly-price'           => 'Preço por Hora',
                            'title'                  => 'Tipo de Aluguel',

                            'same-slot-for-all-days' => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot para Todos os Dias',
                                'yes'   => 'Sim',
                            ],
                        ],

                        'slots' => [
                            'add'              => 'Adicionar Slots',
                            'description-info' => 'A duração do tempo será criada e exibida de acordo com os slots. Será única em todos os slots e visível na vitrine da loja.',
                            'save'             => 'Salvar',
                            'title'            => 'Duração do Tempo dos Slots',
                            'unavailable'      => 'Indisponível',

                            'action'           => [
                                'add' => 'Adicionar',
                            ],

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'Sexta-feira',
                                    'from'       => 'De',
                                    'monday'     => 'Segunda-feira',
                                    'saturday'   => 'Sábado',
                                    'sunday'     => 'Domingo',
                                    'thursday'   => 'Quinta-feira',
                                    'to'         => 'Para',
                                    'tuesday'    => 'Terça-feira',
                                    'wednesday'  => 'Quarta-feira',
                                ],
                            ],
                        ],

                        'table' => [
                            'break-duration'            => 'Tempo de Intervalo entre Slots (Minutos)',
                            'guest-capacity'            => 'Capacidade de Convidados',
                            'guest-limit'               => 'Limite de Convidados por Mesa',
                            'prevent-scheduling-before' => 'Prevenir Agendamento Antes de',
                            'slot-duration'             => 'Duração do Slot (Minutos)',

                            'charged-per'               => [
                                'guest'  => 'Convidado',
                                'table'  => 'Mesa',
                                'title'  => 'Cobrado por',
                            ],

                            'same-slot-for-all-days'    => [
                                'no'    => 'Não',
                                'title' => 'Mesmo Slot para Todos os Dias',
                                'yes'   => 'Sim',
                            ],
                        ],

                        'type' => [
                            'appointment' => 'Reserva de Consulta',
                            'default'     => 'Reserva Padrão',
                            'event'       => 'Reserva de Evento',
                            'many'        => 'Muitos',
                            'one'         => 'Um',
                            'rental'      => 'Reserva de Aluguel',
                            'table'       => 'Reserva de Mesa',
                            'title'       => 'Tipo',
                        ],
                    ],

                    'downloadable' => [
                        'links' => [
                            'add-btn'     => 'Adicionar Link',
                            'delete-btn'  => 'Excluir',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para criar um link rapidamente.',
                            'empty-title' => 'Adicionar Link',
                            'file'        => 'Arquivo : ',
                            'info'        => 'O tipo de produto para download permite vender produtos digitais, como eBooks, aplicativos de software, música, jogos, etc.',
                            'sample-file' => 'Arquivo de Amostra : ',
                            'sample-url'  => 'URL de Amostra : ',
                            'title'       => 'Links para Downloads',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'downloads'   => 'Download Permitido',
                                'file'        => 'Arquivo',
                                'file-type'   => 'Tipo de Arquivo',
                                'name'        => 'Título',
                                'price'       => 'Preço',
                                'sample'      => 'Amostra',
                                'sample-type' => 'Tipo de Amostra',
                                'save-btn'    => 'Salvar',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],

                        'samples' => [
                            'add-btn'     => 'Adicionar Amostra',
                            'delete-btn'  => 'Excluir',
                            'edit-btn'    => 'Editar',
                            'empty-info'  => 'Para criar uma amostra rapidamente.',
                            'empty-title' => 'Adicionar Amostra',
                            'file'        => 'Arquivo : ',
                            'info'        => 'O tipo de produto para download permite vender produtos digitais, como eBooks, aplicativos de software, música, jogos, etc.',
                            'title'       => 'Amostras para Download',
                            'url'         => 'URL : ',

                            'update-create' => [
                                'file'        => 'Arquivo',
                                'file-type'   => 'Tipo de Arquivo',
                                'name'        => 'Título',
                                'save-btn'    => 'Salvar',
                                'title'       => 'Link',
                                'url'         => 'URL',
                            ],
                        ],
                    ],
                ],
            ],

            'create-success'           => 'Produto criado com sucesso',
            'delete-failed'            => 'Falha na exclusão do produto',
            'delete-success'           => 'Produto excluído com sucesso',
            'product-type-not-allowed' => 'Você não tem permissão para vender produtos do tipo :type',
            'saved-inventory-message'  => 'Produto salvo com sucesso',
            'update-success'           => 'Produto atualizado com sucesso',

            'assign' => [
                'already-selling'     => 'Você já está vendendo este produto',
                'back-btn'            => 'Voltar',
                'condition'           => 'Condição',
                'create-success'      => 'Produto atribuído com sucesso ao vendedor',
                'description'         => 'Descrição',
                'image-size'          => 'A resolução da imagem deve ser 609px X 560px',
                'images'              => 'Imagens',
                'new'                 => 'Novo',
                'not-allowed'         => 'Você não tem permissão para atribuir este produto',
                'old'                 => 'Antigo',
                'price'               => 'Preço',
                'product-not-allowed' => 'Você não tem permissão para vender o produto do tipo :type',
                'quantities'          => 'Quantidades',
                'save-btn'            => 'Salvar',
                'title'               => 'Atribuir Produto',
                'update-success'      => 'Produto atribuído atualizado com sucesso',

                'product-details' => [
                    'active'            => 'Ativo',
                    'approved'          => 'Aprovado',
                    'disable'           => 'Desativar',
                    'disapproved'       => 'Reprovado',
                    'image-placeholder' => 'Imagem do Produto',
                    'title'             => 'Detalhes do Produto',
                ],
            ],
        ],

        'product-reviews' => [
            'index' => [
                'title' => 'Avaliações de Produtos',

                'datagrid' => [
                    'approved'      => 'Aprovado',
                    'customer'      => 'Cliente',
                    'date'          => 'Data',
                    'description'   => 'Descrição',
                    'email'         => 'Email',
                    'pending'       => 'Pendente',
                    'product'       => 'Produto',
                    'rating'        => 'Avaliação',
                    'status'        => 'Status',
                    'title'         => 'Título',
                    'unapproved'    => 'Não Aprovado',
                    'update-status' => 'Status de atualização',
                ],
            ],

            'update-success' => 'Avaliações do produto atualizadas com sucesso',
            'delete-success' => 'Avaliações de produtos deletadas com sucesso.',
        ],

        'customers' => [
            'index' => [
                'title' => 'Clientes',

                'datagrid' => [
                    'active'      => 'Ativo',
                    'customer'    => 'Cliente',
                    'email'       => 'Email',
                    'gender'      => 'Gênero',
                    'group'       => 'Grupo',
                    'inactive'    => 'Inativo',
                    'order-count' => 'Contagem de Pedidos',
                    'revenue'     => 'Receita',
                    'status'      => 'Status',
                ],
            ],
        ],

        'profile' => [
            'index' => [
                'title'    => 'Gerenciar Perfil',
                'edit-btn' => 'Editar Perfil',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Nome',
                    'phone'      => 'Número de Telefone',
                    'shop-slug'  => 'Slug da Loja',
                    'shop-title' => 'Título da Loja',
                    'title'      => 'Informações Gerais',
                ],

                'about-store' => [
                    'title' => 'Sobre a Loja',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descrição',
                    'meta-keywords'    => 'Meta Palavras-chave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Meta Descrição',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidade',
                    'return'   => 'Política de Devolução',
                    'shipping' => 'Política de Envio',
                    'title'    => 'Políticas',
                ],

                'address' => [
                    'city'     => 'Cidade',
                    'country'  => 'País',
                    'postcode' => 'Código Postal',
                    'state'    => 'Estado',
                    'title'    => 'Endereço da Loja',
                    'address'  => 'Endereço',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Links Sociais',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Valor Mínimo do Pedido',
                ],

                'google-analytics' => [
                    'id'    => 'ID do Google Analytics',
                    'title' => 'Google Analytics',
                ],

                'shop-information' => [
                    'admin-commission'       => 'Comissão do Admin',
                    'admin-commission-value' => 'Comissão do Admin :rate% do valor total faturado',
                    'allowed-categories'     => 'Categorias Permitidas',
                    'no-categories'          => 'Nenhuma Categoria Disponível',
                    'allowed-product-types'  => 'Tipos de Produto Permitidos',
                    'no-product-types'       => 'Nenhum Tipo de Produto Disponível',
                    'payment-methods'        => 'Métodos de Pagamento',
                    'no-payment-methods'     => 'Nenhum Método de Pagamento Disponível',
                    'shipping-methods'       => 'Métodos de Envio',
                    'no-shipping-methods'    => 'Nenhum Método de Envio Disponível',
                    'title'                  => 'Informações da Loja',
                ],
            ],

            'edit' => [
                'banner'              => 'Banner',
                'banner-description'  => 'Envie o banner na proporção de 13:3, altura 375, área segura 375x250 Centro no celular',
                'delete-banner'       => 'Excluir Banner',
                'delete-logo'         => 'Excluir Logo',
                'logo'                => 'Logo',
                'logo-description'    => 'Envie o logo na proporção de 1:1',
                'save-btn'            => 'Salvar Perfil',
                'title'               => 'Gerenciar Perfil',
                'upload-new-banner'   => 'Enviar Novo Banner',
                'upload-new-logo'     => 'Enviar Novo Logo',

                'general' => [
                    'email'      => 'E-mail',
                    'name'       => 'Nome',
                    'phone'      => 'Número de Telefone',
                    'shop-slug'  => 'Slug da Loja',
                    'shop-title' => 'Título da Loja',
                    'title'      => 'Informações Gerais',
                ],

                'about-store' => [
                    'title' => 'Sobre a Loja',
                ],

                'meta' => [
                    'meta-description' => 'Meta Descrição',
                    'meta-keywords'    => 'Meta Palavras-chave',
                    'meta-title'       => 'Meta Título',
                    'title'            => 'Meta Descrição',
                ],

                'policy' => [
                    'privacy'  => 'Política de Privacidade',
                    'return'   => 'Política de Devolução',
                    'shipping' => 'Política de Envio',
                    'title'    => 'Políticas',
                ],

                'address' => [
                    'city'           => 'Cidade',
                    'country'        => 'País',
                    'postcode'       => 'Código Postal',
                    'state'          => 'Estado',
                    'title'          => 'Endereço da Loja',
                    'select-country' => 'Selecionar País',
                    'select-state'   => 'Selecionar Estado',
                    'street-address' => 'Endereço',
                    'address'        => 'Endereço',
                ],

                'social' => [
                    'link'  => 'Link :name',
                    'title' => 'Links Sociais',
                ],

                'minimum-order-amount' => [
                    'title'  => 'Valor Mínimo do Pedido',
                ],

                'google-analytics' => [
                    'id'    => 'ID do Google Analytics',
                    'title' => 'Google Analytics',
                ],
            ],

            'update-success' => 'Seu perfil foi atualizado com sucesso',
        ],

        'seller-reviews' => [
            'index' => [
                'title' => 'Avaliações do Vendedor',

                'datagrid' => [
                    'approved'    => 'Aprovado',
                    'customer'    => 'Cliente',
                    'date'        => 'Data',
                    'description' => 'Descrição',
                    'disapproved' => 'Não aprovado',
                    'email'       => 'Email',
                    'pending'     => 'Pendente',
                    'rating'      => 'Avaliação',
                    'status'      => 'Status',
                    'title'       => 'Título',
                ],
            ],
        ],

        'settings' => [
            'general' => [
                'index' => [
                    'save-btn'           => 'Salvar',
                    'title'              => 'Geral',
                    'unmatched-password' => 'A senha atual não corresponde',
                    'update-success'     => 'Configurações gerais atualizadas com sucesso',

                    'regional-setting' => [
                        'currency'      => 'Moeda',
                        'locale'        => 'Localidade',
                        'select-locale' => 'Selecionar localidade',
                        'title'         => 'Configurações Regionais',
                    ],

                    'password-setting' => [
                        'confirm-password' => 'Confirmar senha',
                        'current-password' => 'Senha atual',
                        'new-password'     => 'Nova senha',
                        'title'            => 'Configurações de senha',
                    ],
                ],
            ],

            'roles' => [
                'index' => [
                    'create-btn' => 'Criar Função',
                    'title'      => 'Funções',

                    'datagrid' => [
                        'all'             => 'Todos',
                        'custom'          => 'Personalizado',
                        'delete'          => 'Excluir',
                        'edit'            => 'Editar',
                        'id'              => 'ID',
                        'name'            => 'Nome',
                        'permission-type' => 'Tipo de Permissão',
                    ],
                ],

                'create' => [
                    'access-control' => 'Controle de Acesso',
                    'all'            => 'Todos',
                    'back-btn'       => 'Voltar',
                    'custom'         => 'Personalizado',
                    'description'    => 'Descrição',
                    'general'        => 'Geral',
                    'name'           => 'Nome',
                    'permissions'    => 'Permissões',
                    'save-btn'       => 'Salvar Função',
                    'title'          => 'Criar Função',
                ],

                'edit' => [
                    'access-control' => 'Controle de Acesso',
                    'all'            => 'Todos',
                    'back-btn'       => 'Voltar',
                    'custom'         => 'Personalizado',
                    'description'    => 'Descrição',
                    'general'        => 'Geral',
                    'name'           => 'Nome',
                    'permissions'    => 'Permissões',
                    'save-btn'       => 'Salvar Função',
                    'title'          => 'Editar Função',
                ],

                'being-used'        => 'A função está sendo usada por algum vendedor',
                'create-success'    => 'Função criada com sucesso',
                'delete-failed'     => 'Falha ao excluir a função',
                'delete-success'    => 'Função excluída com sucesso',
                'last-delete-error' => 'É necessário pelo menos uma função',
                'update-success'    => 'Função atualizada com sucesso',
            ],

            'users' => [
                'index' => [
                    'create-btn'       => 'Criar Usuário',
                    'create-title'     => 'Criar Usuário',
                    'edit-title'       => 'Editar Usuário',
                    'email'            => 'Email',
                    'name'             => 'Nome',
                    'phone-number'     => 'Número de Telefone',
                    'role'             => 'Função',
                    'save-btn'         => 'Salvar Usuário',
                    'select-role'      => 'Selecionar Função',
                    'password'         => 'Senha',
                    'confirm-password' => 'Confirmar Senha',
                    'status'           => 'Status',
                    'title'            => 'Usuários',
                    'create-success'   => 'Usuário criado com sucesso',
                    'update-success'   => 'Usuário atualizado com sucesso',
                    'delete-success'   => 'Usuário excluído com sucesso',
                    'delete-failed'    => 'Falha ao excluir usuário',

                    'datagrid' => [
                        'delete'     => 'Excluir',
                        'edit'       => 'Editar',
                        'email'      => 'Email',
                        'id'         => 'ID',
                        'id-value'   => 'ID - :id',
                        'name'       => 'Nome',
                        'permission' => 'Permissão',
                        'phone'      => 'Telefone',

                        'status' => [
                            'title' => 'Status',

                            'options' => [
                                'active'    => 'Ativo',
                                'suspended' => 'Suspenso',
                            ],
                        ],
                    ],
                ],
            ],

            'inventory-sources' => [
                'index' => [
                    'create-btn' => 'Criar fonte de inventário',
                    'title'      => 'Fontes de Inventário',

                    'datagrid' => [
                        'active'   => 'Ativo',
                        'code'     => 'Código',
                        'delete'   => 'Excluir',
                        'edit'     => 'Editar',
                        'id'       => 'ID',
                        'inactive' => 'Inativo',
                        'name'     => 'Nome',
                        'priority' => 'Prioridade',
                        'status'   => 'Status',
                    ],
                ],

                'create' => [
                    'add-title'      => 'Adicionar Fonte de Inventário',
                    'address'        => 'Endereço da Fonte',
                    'back-btn'       => 'Voltar',
                    'city'           => 'Cidade',
                    'code'           => 'Código',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informações de Contato',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Número de Contato',
                    'country'        => 'País',
                    'description'    => 'Descrição',
                    'general'        => 'Geral',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nome',
                    'postcode'       => 'Código Postal',
                    'priority'       => 'Prioridade',
                    'save-btn'       => 'Salvar Fontes de Inventário',
                    'select-country' => 'Selecionar País',
                    'select-state'   => 'Selecionar Estado',
                    'settings'       => 'Configurações',
                    'state'          => 'Estado',
                    'status'         => 'Status',
                    'street'         => 'Rua',
                    'title'          => 'Fontes de Inventário',
                ],

                'edit' => [
                    'back-btn'       => 'Voltar',
                    'city'           => 'Cidade',
                    'code'           => 'Código',
                    'contact-email'  => 'E-mail',
                    'contact-fax'    => 'Fax',
                    'contact-info'   => 'Informações de Contato',
                    'contact-name'   => 'Nome',
                    'contact-number' => 'Número de Contato',
                    'country'        => 'País',
                    'description'    => 'Descrição',
                    'general'        => 'Geral',
                    'latitude'       => 'Latitude',
                    'longitude'      => 'Longitude',
                    'name'           => 'Nome',
                    'postcode'       => 'Código Postal',
                    'priority'       => 'Prioridade',
                    'save-btn'       => 'Salvar Fontes de Inventário',
                    'select-country' => 'Selecionar País',
                    'select-state'   => 'Selecionar Estado',
                    'settings'       => 'Configurações',
                    'source-address' => 'Endereço da Fonte',
                    'state'          => 'Estado',
                    'status'         => 'Status',
                    'street'         => 'Rua',
                    'title'          => 'Editar Fontes de Inventário',
                ],

                'create-success'    => 'Fonte de Inventário criada com sucesso',
                'delete-failed'     => 'Falha ao excluir as Fontes de Inventário',
                'delete-success'    => 'Fontes de Inventário excluídas com sucesso',
                'last-delete-error' => 'Não é possível excluir as últimas Fontes de Inventário',
                'update-success'    => 'Fontes de Inventário atualizadas com sucesso',
            ],
        ],

        'communication' => [
            'index' => [
                'admin'               => 'Administrador',
                'blocked-message'     => 'Você foi bloqueado pelo administrador',
                'message-failed'      => 'Falha ao enviar a mensagem',
                'message-placeholder' => 'Digite sua mensagem aqui...',
                'message-sent'        => 'Mensagem enviada com sucesso',
                'no-message'          => 'Nenhuma mensagem encontrada',
                'search-message'      => 'Pesquisar mensagem...',
                'title'               => 'Comunicação',

                'filters' => [
                    'all-messages'      => 'Todas as mensagens',
                    'prev-fifteen-days' => 'Últimos 15 dias',
                    'prev-seven-days'   => 'Últimos 7 dias',
                    'prev-six-months'   => 'Últimos 6 meses',
                    'prev-thirty-days'  => 'Últimos 30 dias',
                ],
            ],
        ],

        'reporting' => [
            'sales' => [
                'index' => [
                    'abandoned-carts'               => 'Carrinhos Abandonados',
                    'abandoned-products'            => 'Produtos Abandonados',
                    'abandoned-rate'                => 'Taxa de Abandono',
                    'abandoned-revenue'             => 'Receita de Abandono',
                    'added-to-cart'                 => 'Adicionados ao Carrinho',
                    'added-to-cart-info'            => 'Apenas :progress visitantes adicionaram produtos ao carrinho',
                    'all-channels'                  => 'Todos os Canais',
                    'average-order-value-over-time' => 'Valor Médio de Pedido ao Longo do Tempo',
                    'average-sales'                 => 'Valor Médio de Venda',
                    'commission'                    => 'Comissão',
                    'commission-over-time'          => 'Comissão ao longo do tempo',
                    'count'                         => 'Contagem',
                    'end-date'                      => 'Data de Término',
                    'id'                            => 'ID',
                    'interval'                      => 'Intervalo',
                    'name'                          => 'Nome',
                    'orders'                        => 'Pedidos',
                    'orders-over-time'              => 'Pedidos ao Longo do Tempo',
                    'payment-method'                => 'Método de Pagamento',
                    'product-views'                 => 'Visualizações de Produtos',
                    'product-views-info'            => 'Apenas :progress visitantes visualizaram produtos',
                    'purchase-funnel'               => 'Funil de Compra',
                    'purchased'                     => 'Comprados',
                    'purchased-info'                => 'Apenas :progress visitantes fizeram a compra',
                    'refunds'                       => 'Reembolsos',
                    'refunds-over-time'             => 'Reembolsos ao Longo do Tempo',
                    'sales-over-time'               => 'Vendas ao Longo do Tempo',
                    'start-date'                    => 'Data de Início',
                    'tax-collected'                 => 'Cobrança de Impostos',
                    'tax-collected-over-time'       => 'Cobrança de Impostos ao Longo do Tempo',
                    'title'                         => 'Vendas',
                    'top-payment-methods'           => 'Principais Métodos de Pagamento',
                    'top-tax-categories'            => 'Principais Categorias de Impostos',
                    'total'                         => 'Total',
                    'total-commission-paid'         => 'Total de comissão paga',
                    'total-orders'                  => 'Total de Pedidos',
                    'total-sales'                   => 'Total de Vendas',
                    'total-visits'                  => 'Total de visitas',
                    'total-visits-info'             => 'Total de visitantes na loja',
                    'view-details'                  => 'Ver Detalhes',
                ],
            ],

            'customers' => [
                'index' => [
                    'all-channels'                => 'Todos os Canais',
                    'count'                       => 'Contagem',
                    'customers'                   => 'Clientes',
                    'customers-over-time'         => 'Clientes ao Longo do Tempo',
                    'customers-traffic'           => 'Tráfego de Clientes',
                    'customers-with-most-orders'  => 'Clientes com Mais Pedidos',
                    'customers-with-most-reviews' => 'Clientes com Mais Avaliações',
                    'customers-with-most-sales'   => 'Clientes com Mais Vendas',
                    'email'                       => 'E-mail',
                    'end-date'                    => 'Data de Término',
                    'id'                          => 'ID',
                    'interval'                    => 'Intervalo',
                    'name'                        => 'Nome',
                    'orders'                      => 'Pedidos',
                    'reviews'                     => 'Avaliações',
                    'start-date'                  => 'Data de Início',
                    'title'                       => 'Clientes',
                    'top-customer-groups'         => 'Principais Grupos de Clientes',
                    'total'                       => 'Total',
                    'total-customers'             => 'Total de Clientes',
                    'total-visitors'              => 'Total de Visitantes',
                    'traffic-over-week'           => 'Tráfego ao Longo da Semana',
                    'unique-visitors'             => 'Visitantes Únicos',
                    'view-details'                => 'Ver Detalhes',
                ],
            ],

            'products' => [
                'index' => [
                    'all-channels'                     => 'Todos os Canais',
                    'channel'                          => 'Canal',
                    'end-date'                         => 'Data de Término',
                    'id'                               => 'ID',
                    'interval'                         => 'Intervalo',
                    'locale'                           => 'Região',
                    'name'                             => 'Nome',
                    'orders'                           => 'Pedidos',
                    'price'                            => 'Preço',
                    'products-added-over-time'         => 'Produtos Adicionados ao Longo do Tempo',
                    'products-with-most-reviews'       => 'Produtos com Mais Avaliações',
                    'products-with-most-visits'        => 'Produtos com Mais Visitas',
                    'quantities'                       => 'Quantidades',
                    'quantities-sold-over-time'        => 'Quantidades Vendidas ao Longo do Tempo',
                    'revenue'                          => 'Receita',
                    'reviews'                          => 'Avaliações',
                    'start-date'                       => 'Data de Início',
                    'title'                            => 'Produtos',
                    'top-selling-products-by-quantity' => 'Produtos Mais Vendidos por Quantidade',
                    'top-selling-products-by-revenue'  => 'Produtos Mais Vendidos por Receita',
                    'total'                            => 'Total',
                    'total-products-added-to-wishlist' => 'Produtos Adicionados à Lista de Desejos',
                    'total-sold-quantities'            => 'Quantidades Vendidas no Total',
                    'view-details'                     => 'Ver Detalhes',
                    'visits'                           => 'Visitas',
                ],
            ],

            'view' => [
                'all-channels'  => 'Todos os Canais',
                'day'           => 'Dia',
                'end-date'      => 'Data de Término',
                'export-csv'    => 'Exportar para CSV',
                'export-xls'    => 'Exportar para XLS',
                'month'         => 'Mês',
                'not-available' => 'Nenhum registro disponível.',
                'start-date'    => 'Data de Início',
                'year'          => 'Ano',
            ],

            'empty' => [
                'info'  => 'Nenhum dado disponível para o intervalo selecionado',
                'title' => 'Nenhum dado disponível',
            ],
        ],

        'extensions' => [
            'index' => [
                'disabled'  => 'Desativado',
                'enabled'   => 'Ativado',
                'info'      => 'Crie, gerencie e escale sua loja online com as extensões de eCommerce personalizáveis do Bagisto.',
                'no-result' => 'Nenhuma extensão disponível aqui.',
                'title'     => 'Extensões',

                'filters' => [
                    'all-extensions' => 'Todas as extensões',
                    'bulk_upload'    => 'Envio em massa',
                    'gdpr'           => 'RGPD',
                    'marketplace'    => 'Marketplace',
                    'payment'        => 'Pagamento',
                    'pos'            => 'POS',
                    'shipping'       => 'Envio',
                ],
            ],
        ],
    ],

    'shop' => [
        'layout' => [
            'header' => [
                'seller-logo'     => 'Logotipo do vendedor',
                'switch-to-store' => 'Mudar para gerenciar a loja',
            ],
        ],

        'checkout' => [
            'cart' => [
                'minimum-order-message' => 'O valor mínimo do pedido para :shop_title é',
                'product-not-available' => 'Produto não está disponível',
                'sold-by'               => 'Vendido por',
            ],
        ],

        'marketplace' => [
            'index' => [
                'days-payment'        => 'Dias* de Pagamento',
                'deals-in'            => 'Negocia em',
                'featured-seller'     => 'Nossos Vendedores em Destaque',
                'online-business'     => 'Negócio Online',
                'reviews'             => ':count Avaliações',
                'seller-community'    => 'Comunidade de Vendedores',
                'serviceable-pincode' => 'Código Postal Atendido',
                'start-selling'       => 'Comece a vender para grandes clientes ao redor do mundo, 24 horas por dia.',
                'step'                => 'Passo :count',
                'visit-shop'          => 'Visite a loja',
            ],
        ],

        'products' => [
            'add-to-cart'   => 'Adicionar ao Carrinho',
            'delivery-info' => 'As informações de entrega estão aqui',
            'hide'          => 'Ocultar',
            'more-info'     => 'Mais Informações',
            'seller-count'  => ':count vendedores adicionais estão vendendo o mesmo produto',
            'seller-info'   => 'Informações do Vendedor',
            'sold-by'       => 'Vendido Por',
            'top-selling'   => 'Mais vendido',

            'flag' => [
                'alert'              => 'Alerta',
                'already-reported'   => 'Você já relatou este produto',
                'create-success'     => 'Produto relatado com sucesso',
                'guest-alert'        => 'Você precisa fazer login para relatar este produto',
                'not-allowed'        => 'Você não pode relatar este produto sem fazer um pedido',
                'other-reason'       => 'Outro motivo',
                'reason'             => 'Motivo',
                'reason-placeholder' => 'Por favor, especifique o motivo',
                'report-product'     => 'Relatar Produto',
                'select-reason'      => 'Selecione o Motivo',
                'submit-btn'         => 'Enviar',
            ],
        ],

        'sellers' => [
            'profile' => [
                'not-approved'    => 'Vendedor ainda não foi aprovado',
                'products-count'  => 'Produtos (:count)',
                'reviews-count'   => 'Avaliações (:count)',
                'search-text'     => 'Buscar por produtos',

                'about' => [
                    'title'           => 'Sobre',
                    'about-us'        => 'Sobre nós',
                    'shipping-policy' => 'Política de Envio',
                    'privacy-policy'  => 'Política de Privacidade',
                    'return-policy'   => 'Política de Devolução',
                ],

                'contact-form' => [
                    'title'          => 'Contato',
                    'name'           => 'Nome',
                    'email'          => 'E-mail',
                    'subject'        => 'Assunto',
                    'query'          => 'Consulta',
                    'submit-btn'     => 'Enviar',
                    'create-success' => 'Sua consulta foi enviada com sucesso',
                ],

                'share' => [
                    'title'     => 'Compartilhar',
                    'share-on'  => 'Compartilhar em',
                    'facebook'  => 'Facebook',
                    'linkedin'  => 'LinkedIn',
                    'twitter'   => 'Twitter',
                    'pinterest' => 'Pinterest',
                ],

                'report-form' => [
                    'alert'              => 'Alerta',
                    'already-reported'   => 'Você já reportou este vendedor',
                    'create-success'     => 'Vendedor reportado com sucesso',
                    'guest-alert'        => 'Você precisa fazer login para reportar o vendedor',
                    'not-allowed'        => 'Você não pode reportar este vendedor sem fazer um pedido',
                    'other-reason'       => 'Outro motivo',
                    'reason'             => 'Motivo',
                    'reason-placeholder' => 'Por favor, especifique o motivo',
                    'select-reason'      => 'Selecione o motivo',
                    'submit-btn'         => 'Enviar',
                    'title'              => 'Reportar Problema',
                ],

                'reviews' => [
                    'alert'            => 'Alerta',
                    'already-reviewed' => 'Você já avaliou este vendedor',
                    'comment'          => 'Comentário',
                    'create-success'   => 'Vendedor avaliado com sucesso',
                    'customer-review'  => ':count Avaliação de cliente',
                    'customer-reviews' => 'Avaliações de clientes',
                    'guest-alert'      => 'Você precisa fazer login para denunciar o vendedor',
                    'rating'           => 'Classificação',
                    'review-by'        => 'Avaliação por',
                    'submit-btn'       => 'Enviar',
                    'title'            => 'Título',
                    'view-all'         => 'Ver todas as avaliações',
                    'write-review'     => 'Escrever uma avaliação',
                ],

                'products' => [
                    'no-result' => 'Nenhum produto disponível',
                    'show'      => 'Mostrar',

                    'sort-by' => [
                        'title' => 'Ordenar por',

                        'options' => [
                            'cheapest-first'  => 'Mais barato primeiro',
                            'expensive-first' => 'Mais caro primeiro',
                            'from-a-z'        => 'De A-Z',
                            'from-z-a'        => 'De Z-A',
                            'latest-first'    => 'Mais recentes primeiro',
                            'oldest-first'    => 'Mais antigos primeiro',
                        ],
                    ],

                    'filters' => [
                        'clear-all'   => 'Limpar tudo',
                        'filter'      => 'Filtrar',
                        'filters'     => 'Filtros:',
                        'price-range' => 'Faixa de preço',
                        'sort'        => 'Ordenar',
                    ],
                ],
            ],
        ],
    ],
];
