<?php

return [
    'Quick Start' =>[
        'url' => '/docs/getting-started#quick-start'
        ],
    'Getting Started' => [
        'url' => '/docs/getting-started#overview',
        'children' => [
            'Overview' => '/docs/getting-started#overview',
            'Payment Methods' =>'/docs/getting-started#payment-method',
            'Features'=>'/docs/getting-started#features',
        ],
    ],
    'Accept Payments' => [
        'url' => '/docs/getting-started#accept',
        'children' =>[
            'Payment pages' =>'/docs/getting-started#payment-page',
            'Integrations' =>'/docs/getting-started#integrations'
        ]
    ],
    'Transfer / Disburse Payments'=>'/docs/getting-started#payments',
    'Webhooks'=>'/docs/getting-started#webhooks',
    'API reference'=>'/docs/getting-started#api',
    'Account Management'=>'/docs/getting-started#account',
    
];
