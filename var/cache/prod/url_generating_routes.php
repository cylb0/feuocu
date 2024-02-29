<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[^/]++', 'hash', true], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path', true], ['variable', '/', '[A-z0-9_-]*', 'filter', true], ['text', '/media/cache/resolve']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], [], []],
    'app_brand_index' => [[], ['_controller' => 'App\\Controller\\BrandController::index'], [], [['text', '/admin/brand/']], [], [], []],
    'app_brand_new' => [[], ['_controller' => 'App\\Controller\\BrandController::new'], [], [['text', '/admin/brand/new']], [], [], []],
    'app_brand_show' => [['id'], ['_controller' => 'App\\Controller\\BrandController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/brand']], [], [], []],
    'app_brand_edit' => [['id'], ['_controller' => 'App\\Controller\\BrandController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/brand']], [], [], []],
    'app_brand_delete' => [['id'], ['_controller' => 'App\\Controller\\BrandController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/brand']], [], [], []],
    'app_cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/cart']], [], [], []],
    'app_cart_add' => [[], ['_controller' => 'App\\Controller\\CartController::addToCart'], [], [['text', '/cart/add']], [], [], []],
    'app_cart_count' => [[], ['_controller' => 'App\\Controller\\CartController::getCartCount'], [], [['text', '/cart/count']], [], [], []],
    'app_cart_update' => [[], ['_controller' => 'App\\Controller\\CartController::updateQuantity'], [], [['text', '/cart/update']], [], [], []],
    'app_cart_item_delete' => [['variantId'], ['_controller' => 'App\\Controller\\CartController::deleteItem'], [], [['variable', '/', '[^/]++', 'variantId', true], ['text', '/cart/delete']], [], [], []],
    'app_category_index' => [[], ['_controller' => 'App\\Controller\\CategoryController::index'], [], [['text', '/admin/category/']], [], [], []],
    'app_category_new' => [[], ['_controller' => 'App\\Controller\\CategoryController::new'], [], [['text', '/admin/category/new']], [], [], []],
    'app_category_show' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_category_edit' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_category_delete' => [['id'], ['_controller' => 'App\\Controller\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/category']], [], [], []],
    'app_discount_index' => [[], ['_controller' => 'App\\Controller\\DiscountController::index'], [], [['text', '/admin/discount/']], [], [], []],
    'app_discount_new' => [[], ['_controller' => 'App\\Controller\\DiscountController::new'], [], [['text', '/admin/discount/new']], [], [], []],
    'app_discount_show' => [['id'], ['_controller' => 'App\\Controller\\DiscountController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discount']], [], [], []],
    'app_discount_edit' => [['id'], ['_controller' => 'App\\Controller\\DiscountController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discount']], [], [], []],
    'app_discount_delete' => [['id'], ['_controller' => 'App\\Controller\\DiscountController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/discount']], [], [], []],
    'app_feature_index' => [[], ['_controller' => 'App\\Controller\\FeatureController::index'], [], [['text', '/admin/feature/']], [], [], []],
    'app_feature_new' => [[], ['_controller' => 'App\\Controller\\FeatureController::new'], [], [['text', '/admin/feature/new']], [], [], []],
    'app_feature_show' => [['id'], ['_controller' => 'App\\Controller\\FeatureController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/feature']], [], [], []],
    'app_feature_edit' => [['id'], ['_controller' => 'App\\Controller\\FeatureController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/feature']], [], [], []],
    'app_feature_delete' => [['id'], ['_controller' => 'App\\Controller\\FeatureController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/feature']], [], [], []],
    'app_hero_index' => [[], ['_controller' => 'App\\Controller\\HeroController::index'], [], [['text', '/admin/hero/']], [], [], []],
    'app_hero_new' => [[], ['_controller' => 'App\\Controller\\HeroController::new'], [], [['text', '/admin/hero/new']], [], [], []],
    'app_hero_show' => [['id'], ['_controller' => 'App\\Controller\\HeroController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/hero']], [], [], []],
    'app_hero_edit' => [['id'], ['_controller' => 'App\\Controller\\HeroController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/hero']], [], [], []],
    'app_hero_delete' => [['id'], ['_controller' => 'App\\Controller\\HeroController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/hero']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], [], []],
    'app_delivery' => [[], ['_controller' => 'App\\Controller\\PagesController::delivery'], [], [['text', '/delivery']], [], [], []],
    'app_return' => [[], ['_controller' => 'App\\Controller\\PagesController::return'], [], [['text', '/return']], [], [], []],
    'app_payments' => [[], ['_controller' => 'App\\Controller\\PagesController::payments'], [], [['text', '/payments']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\PagesController::about'], [], [['text', '/about']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\PagesController::contact'], [], [['text', '/contact']], [], [], []],
    'app_rgpd' => [[], ['_controller' => 'App\\Controller\\PagesController::rgpd'], [], [['text', '/rgpd']], [], [], []],
    'app_gift' => [[], ['_controller' => 'App\\Controller\\PagesController::gift'], [], [['text', '/gift']], [], [], []],
    'app_cgu' => [[], ['_controller' => 'App\\Controller\\PagesController::cgu'], [], [['text', '/cgu']], [], [], []],
    'app_faq' => [[], ['_controller' => 'App\\Controller\\PagesController::faq'], [], [['text', '/faq']], [], [], []],
    'app_product_index' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/admin/product/']], [], [], []],
    'app_product_new' => [[], ['_controller' => 'App\\Controller\\ProductController::new'], [], [['text', '/admin/product/new']], [], [], []],
    'app_product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_variants' => [['id'], ['_controller' => 'App\\Controller\\ProductController::variants'], [], [['text', '/variants'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_delete_variant' => [['id', 'variantId'], ['_controller' => 'App\\Controller\\ProductController::deleteVariant'], [], [['variable', '/', '[^/]++', 'variantId', true], ['text', '/delete-variant'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product']], [], [], []],
    'app_product_update_variant_quantity' => [[], ['_controller' => 'App\\Controller\\ProductController::updateQuantityVariant'], [], [['text', '/admin/product/variant/update/stock']], [], [], []],
    'app_product_update_variant_price' => [[], ['_controller' => 'App\\Controller\\ProductController::updatePriceVariant'], [], [['text', '/admin/product/variant/update/price']], [], [], []],
    'app_product_stock_variant' => [['id', 'variantId'], ['_controller' => 'App\\Controller\\ProductController::getStock'], [], [['variable', '/', '[^/]++', 'variantId', true], ['text', '/variants/stock'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product(']], [], [], []],
    'app_product_remove_image' => [[], ['_controller' => 'App\\Controller\\ProductController::removeImage'], [], [['text', '/admin/product/image/remove']], [], [], []],
    'app_product_option_index' => [[], ['_controller' => 'App\\Controller\\ProductOptionController::index'], [], [['text', '/admin/product-option/']], [], [], []],
    'app_product_option_new' => [[], ['_controller' => 'App\\Controller\\ProductOptionController::new'], [], [['text', '/admin/product-option/new']], [], [], []],
    'app_product_option_show' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option']], [], [], []],
    'app_product_option_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option']], [], [], []],
    'app_product_option_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option']], [], [], []],
    'app_product_option_value_index' => [[], ['_controller' => 'App\\Controller\\ProductOptionValueController::index'], [], [['text', '/admin/product-option-value/']], [], [], []],
    'app_product_option_value_new' => [[], ['_controller' => 'App\\Controller\\ProductOptionValueController::new'], [], [['text', '/admin/product-option-value/new']], [], [], []],
    'app_product_option_value_show' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionValueController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option-value']], [], [], []],
    'app_product_option_value_edit' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionValueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option-value']], [], [], []],
    'app_product_option_value_delete' => [['id'], ['_controller' => 'App\\Controller\\ProductOptionValueController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/product-option-value']], [], [], []],
    'app_profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profile/']], [], [], []],
    'app_change_profile' => [[], ['_controller' => 'App\\Controller\\ProfileController::changeAccount'], [], [['text', '/profile/changeProfile']], [], [], []],
    'app_change_password' => [[], ['_controller' => 'App\\Controller\\ProfileController::changePassword'], [], [['text', '/profile/changePassword']], [], [], []],
    'app_registration' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registration']], [], [], []],
    'app_verify_user' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    'show_product' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\ShopController::showProduct'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/shop/product']], [], [], []],
    'get_product_options' => [['id'], ['_controller' => 'App\\Controller\\ShopController::getOptions'], [], [['text', '/options'], ['variable', '/', '[^/]++', 'id', true], ['text', '/shop/product']], [], [], []],
    'show_category' => [['slug', 'sort'], ['slug' => null, 'sort' => null, '_controller' => 'App\\Controller\\ShopController::showCategory'], ['sort' => 'popularity|price_ascending|price_descending|new'], [['variable', '/', 'popularity|price_ascending|price_descending|new', 'sort', true], ['variable', '/', '[^/]++', 'slug', true], ['text', '/shop/category']], [], [], []],
    'show_brand' => [['slug', 'sort'], ['slug' => null, 'sort' => null, '_controller' => 'App\\Controller\\ShopController::showBrand'], ['sort' => 'popularity|best_sellers|price_ascending|price_descending|new'], [['variable', '/', 'popularity|best_sellers|price_ascending|price_descending|new', 'sort', true], ['variable', '/', '[^/]++', 'slug', true], ['text', '/shop/brand']], [], [], []],
    'search_products' => [[], ['_controller' => 'App\\Controller\\ShopController::searchProducts'], [], [['text', '/shop/search']], [], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/user/']], [], [], []],
    'app_user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/admin/user/new']], [], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/user']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
];
