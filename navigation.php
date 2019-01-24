<?php

return [
    'Quick Start' =>[
        'url' => '#quick-start'
        ],
    'Getting Started' => [
        'url' => '#overview',
        'children' => [
            'Overview' => '#overview',
            'Payment Methods' =>'#payment-method',
            'Features'=>'#features',
        ],
    ],
    'Accept Payments' => [
        'url' => '#accept',
        'children' =>[
            'Payment pages' =>'#payment-page',
            'Integrations' =>'#integrations'
        ]
    ],
    'Transfer / Disburse Payments'=>'#payments',
    'Webhooks'=>'#webhooks',
    'API reference'=>'#api',
    'Account Management'=>'account',
    
];
