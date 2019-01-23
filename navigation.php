<?php

return [
    'Quick Start' =>[
        'url' => 'docs/getting-started'
        ],
    'Getting Started' => [
        'url' => 'docs/getting-started',
        'children' => [
            'Overview' => 'docs/getting-started/setup',
            'Payment Methods' =>'docs/getting-started/create',
            'Features'=>'docs/getting-started/make-payment',
        ],
    ],
    'Accept Payments' => [
        'url' => 'docs/getting-started',
        'children' =>[
            'Payment pages' =>'docs/getting-started/payment-page',
            'Integrations' =>'docs/getting-started/integrations'
        ]
    ],
    'Transfer / Disburse Payments'=>'docs/developers',
    'Webhooks'=>'docs/developers',
    'API reference'=>'docs/getting-started/dashboard',
    'Account Management'=>'docs/getting-started/account',
    
];
