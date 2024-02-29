<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/brand' => [[['_route' => 'app_brand_index', '_controller' => 'App\\Controller\\BrandController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/brand/new' => [[['_route' => 'app_brand_new', '_controller' => 'App\\Controller\\BrandController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'app_cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/add' => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::addToCart'], null, ['POST' => 0], null, false, false, null]],
        '/cart/count' => [[['_route' => 'app_cart_count', '_controller' => 'App\\Controller\\CartController::getCartCount'], null, ['GET' => 0], null, false, false, null]],
        '/cart/update' => [[['_route' => 'app_cart_update', '_controller' => 'App\\Controller\\CartController::updateQuantity'], null, ['POST' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'app_category_index', '_controller' => 'App\\Controller\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'app_category_new', '_controller' => 'App\\Controller\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/discount' => [[['_route' => 'app_discount_index', '_controller' => 'App\\Controller\\DiscountController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/discount/new' => [[['_route' => 'app_discount_new', '_controller' => 'App\\Controller\\DiscountController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/feature' => [[['_route' => 'app_feature_index', '_controller' => 'App\\Controller\\FeatureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/feature/new' => [[['_route' => 'app_feature_new', '_controller' => 'App\\Controller\\FeatureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hero' => [[['_route' => 'app_hero_index', '_controller' => 'App\\Controller\\HeroController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/hero/new' => [[['_route' => 'app_hero_new', '_controller' => 'App\\Controller\\HeroController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/delivery' => [[['_route' => 'app_delivery', '_controller' => 'App\\Controller\\PagesController::delivery'], null, null, null, false, false, null]],
        '/return' => [[['_route' => 'app_return', '_controller' => 'App\\Controller\\PagesController::return'], null, null, null, false, false, null]],
        '/payments' => [[['_route' => 'app_payments', '_controller' => 'App\\Controller\\PagesController::payments'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PagesController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PagesController::contact'], null, null, null, false, false, null]],
        '/rgpd' => [[['_route' => 'app_rgpd', '_controller' => 'App\\Controller\\PagesController::rgpd'], null, null, null, false, false, null]],
        '/gift' => [[['_route' => 'app_gift', '_controller' => 'App\\Controller\\PagesController::gift'], null, null, null, false, false, null]],
        '/cgu' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\PagesController::cgu'], null, null, null, false, false, null]],
        '/faq' => [[['_route' => 'app_faq', '_controller' => 'App\\Controller\\PagesController::faq'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'app_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'app_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product/variant/update/stock' => [[['_route' => 'app_product_update_variant_quantity', '_controller' => 'App\\Controller\\ProductController::updateQuantityVariant'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/variant/update/price' => [[['_route' => 'app_product_update_variant_price', '_controller' => 'App\\Controller\\ProductController::updatePriceVariant'], null, ['POST' => 0], null, false, false, null]],
        '/admin/product/image/remove' => [[['_route' => 'app_product_remove_image', '_controller' => 'App\\Controller\\ProductController::removeImage'], null, ['DELETE' => 0], null, false, false, null]],
        '/admin/product-option' => [[['_route' => 'app_product_option_index', '_controller' => 'App\\Controller\\ProductOptionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-option/new' => [[['_route' => 'app_product_option_new', '_controller' => 'App\\Controller\\ProductOptionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product-option-value' => [[['_route' => 'app_product_option_value_index', '_controller' => 'App\\Controller\\ProductOptionValueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product-option-value/new' => [[['_route' => 'app_product_option_value_new', '_controller' => 'App\\Controller\\ProductOptionValueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/changeProfile' => [[['_route' => 'app_change_profile', '_controller' => 'App\\Controller\\ProfileController::changeAccount'], null, null, null, false, false, null]],
        '/profile/changePassword' => [[['_route' => 'app_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify' => [[['_route' => 'app_verify_user', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/shop/search' => [[['_route' => 'search_products', '_controller' => 'App\\Controller\\ShopController::searchProducts'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:61)'
                    .'|([A-z0-9_-]*)/(.+)(*:86)'
                .')'
                .'|/admin/(?'
                    .'|brand/([^/]++)(?'
                        .'|(*:121)'
                        .'|/edit(*:134)'
                        .'|(*:142)'
                    .')'
                    .'|category/([^/]++)(?'
                        .'|(*:171)'
                        .'|/edit(*:184)'
                        .'|(*:192)'
                    .')'
                    .'|discount/([^/]++)(?'
                        .'|(*:221)'
                        .'|/edit(*:234)'
                        .'|(*:242)'
                    .')'
                    .'|feature/([^/]++)(?'
                        .'|(*:270)'
                        .'|/edit(*:283)'
                        .'|(*:291)'
                    .')'
                    .'|hero/([^/]++)(?'
                        .'|(*:316)'
                        .'|/edit(*:329)'
                        .'|(*:337)'
                    .')'
                    .'|product(?'
                        .'|/([^/]++)(?'
                            .'|(*:368)'
                            .'|/(?'
                                .'|edit(*:384)'
                                .'|variants(*:400)'
                                .'|delete\\-variant/([^/]++)(*:432)'
                            .')'
                            .'|(*:441)'
                        .')'
                        .'|\\(/([^/]++)/variants/stock/([^/]++)(*:485)'
                        .'|\\-option(?'
                            .'|/([^/]++)(?'
                                .'|(*:516)'
                                .'|/edit(*:529)'
                                .'|(*:537)'
                            .')'
                            .'|\\-value/([^/]++)(?'
                                .'|(*:565)'
                                .'|/edit(*:578)'
                                .'|(*:586)'
                            .')'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:613)'
                        .'|/edit(*:626)'
                        .'|(*:634)'
                    .')'
                .')'
                .'|/cart/delete/([^/]++)(*:665)'
                .'|/shop/(?'
                    .'|product(?'
                        .'|(?:/([^/]++))?(*:706)'
                        .'|/([^/]++)/options(*:731)'
                    .')'
                    .'|category(?:/([^/]++)(?:/(popularity|price_ascending|price_descending|new))?)?(*:817)'
                    .'|brand(?:/([^/]++)(?:/(popularity|best_sellers|price_ascending|price_descending|new))?)?(*:912)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        121 => [[['_route' => 'app_brand_show', '_controller' => 'App\\Controller\\BrandController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_brand_edit', '_controller' => 'App\\Controller\\BrandController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        142 => [[['_route' => 'app_brand_delete', '_controller' => 'App\\Controller\\BrandController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_category_show', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        192 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        221 => [[['_route' => 'app_discount_show', '_controller' => 'App\\Controller\\DiscountController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_discount_edit', '_controller' => 'App\\Controller\\DiscountController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_discount_delete', '_controller' => 'App\\Controller\\DiscountController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        270 => [[['_route' => 'app_feature_show', '_controller' => 'App\\Controller\\FeatureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        283 => [[['_route' => 'app_feature_edit', '_controller' => 'App\\Controller\\FeatureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        291 => [[['_route' => 'app_feature_delete', '_controller' => 'App\\Controller\\FeatureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_hero_show', '_controller' => 'App\\Controller\\HeroController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_hero_edit', '_controller' => 'App\\Controller\\HeroController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'app_hero_delete', '_controller' => 'App\\Controller\\HeroController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        368 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        384 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        400 => [[['_route' => 'app_product_variants', '_controller' => 'App\\Controller\\ProductController::variants'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        432 => [[['_route' => 'app_product_delete_variant', '_controller' => 'App\\Controller\\ProductController::deleteVariant'], ['id', 'variantId'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        441 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        485 => [[['_route' => 'app_product_stock_variant', '_controller' => 'App\\Controller\\ProductController::getStock'], ['id', 'variantId'], ['GET' => 0], null, false, true, null]],
        516 => [[['_route' => 'app_product_option_show', '_controller' => 'App\\Controller\\ProductOptionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_product_option_edit', '_controller' => 'App\\Controller\\ProductOptionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        537 => [[['_route' => 'app_product_option_delete', '_controller' => 'App\\Controller\\ProductOptionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_product_option_value_show', '_controller' => 'App\\Controller\\ProductOptionValueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_product_option_value_edit', '_controller' => 'App\\Controller\\ProductOptionValueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'app_product_option_value_delete', '_controller' => 'App\\Controller\\ProductOptionValueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        613 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        634 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_cart_item_delete', '_controller' => 'App\\Controller\\CartController::deleteItem'], ['variantId'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        706 => [[['_route' => 'show_product', 'slug' => null, '_controller' => 'App\\Controller\\ShopController::showProduct'], ['slug'], null, null, false, true, null]],
        731 => [[['_route' => 'get_product_options', '_controller' => 'App\\Controller\\ShopController::getOptions'], ['id'], null, null, false, false, null]],
        817 => [[['_route' => 'show_category', 'slug' => null, 'sort' => null, '_controller' => 'App\\Controller\\ShopController::showCategory'], ['slug', 'sort'], null, null, false, true, null]],
        912 => [
            [['_route' => 'show_brand', 'slug' => null, 'sort' => null, '_controller' => 'App\\Controller\\ShopController::showBrand'], ['slug', 'sort'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
