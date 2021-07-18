<?php

return [

    'developer_mode' => false,

    'title' => 'SDF Admin',

    'meta_description' => 'SDF web Application',
    'meta_author' => 'Atef OUERGHI',
    'meta_keyword' => 'SDF web Application',

    'admin_url' => 'admin',
    'speed_admin_assets_path' => 'vendor/speed-admin/',

    'languages' => [
        ['name' => 'English', 'locale' => 'en', 'rtl' => false],
        ['name' => 'French', 'locale' => 'fr', 'rtl' => false],
    ],

    'footer_right_html' => 'Powered by&nbsp;<a href="#">Speed Admin</a>',
    'footer_left_html' => '<a href="#">CoreUI</a> © Speed Admin.',

    'user_primary_key_type' => 'integer',    // 'integer' or 'uuid'

    'enable_tenant_organization_feature' => false,

    'default_model_locale' => 'en',
    'additional_model_locales' => [
        ['name' => 'Urdu', 'locale' => 'ur'],
        ['name' => 'Arabic', 'locale' => 'ar'],
    ]
];
