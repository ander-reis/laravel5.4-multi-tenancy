<?php

return [
    'model' => \App\Models\Account::class,
    'field_name' => 'subdomain',
    'foreign_key' => 'account_id',
    'route_param' => 'account',
    'subdomains_except' => [
        'master'
    ]
];
