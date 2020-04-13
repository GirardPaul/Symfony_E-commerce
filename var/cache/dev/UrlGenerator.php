<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin_categories' => [[], ['_controller' => 'App\\Controller\\AdminCategoriesController::index'], [], [['text', '/admin/categories']], [], []],
    'creation_categories' => [[], ['_controller' => 'App\\Controller\\AdminCategoriesController::modification'], [], [['text', '/admin/categories/creation']], [], []],
    'modif_categories' => [['id'], ['_controller' => 'App\\Controller\\AdminCategoriesController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/categories']], [], []],
    'supp_categories' => [['id'], ['_controller' => 'App\\Controller\\AdminCategoriesController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/categories']], [], []],
    'admin_produits' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/produits']], [], []],
    'admin_produit' => [['id'], ['_controller' => 'App\\Controller\\AdminController::produit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produit']], [], []],
    'creation_produits' => [[], ['_controller' => 'App\\Controller\\AdminController::modification'], [], [['text', '/admin/produits/creation']], [], []],
    'modif_produits' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modification'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits']], [], []],
    'supp_produits' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppression'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/produits']], [], []],
    'espace_admin' => [[], ['_controller' => 'App\\Controller\\AdminController::espaceAdmin'], [], [['text', '/admin/utilisateurs']], [], []],
    'supp_utilisateur' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppressionUtilisateur'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/utilisateurs']], [], []],
    'espace_client' => [[], ['_controller' => 'App\\Controller\\AdminController::espaceClient'], [], [['text', '/client/espace']], [], []],
    'modif_client' => [['id'], ['_controller' => 'App\\Controller\\AdminController::modificationClient'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/espace/modification']], [], []],
    'supp_client' => [['id'], ['_controller' => 'App\\Controller\\AdminController::suppressionClient'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/espace/suppression']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::index'], [], [['text', '/inscription']], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::login'], [], [['text', '/login']], [], []],
    'deconnexion' => [[], ['_controller' => 'App\\Controller\\AdminSecuController::deconnexion'], [], [['text', '/logout']], [], []],
    'categories' => [[], ['_controller' => 'App\\Controller\\CategoriesController::index'], [], [['text', '/categories']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'produits' => [[], ['_controller' => 'App\\Controller\\ProduitsController::index'], [], [['text', '/client/produits']], [], []],
    'produit' => [['id'], ['_controller' => 'App\\Controller\\ProduitsController::produit'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/client/produit']], [], []],
];
