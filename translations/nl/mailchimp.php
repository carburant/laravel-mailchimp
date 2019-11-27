<?php

return [
    'title' => 'Abonneer u op de nieuwsbrief',
    'submit' => 'Abonneren',
    'confirm' => 'U bent nu ingeschreven voor onze nieuwsbrief. Tot ziens !',

    'fields' => [
        'email' => 'E-mailadres',
        'terms' => 'Door dit formulier in te dienen, accepteer ik dat de ingevoerde informatie kan worden gebruikt om mij de nieuwsbrief en marketing-e-mails te sturen.',
    ],

    'validators' => [
        'email' => [
            'required' => 'Het e-mailadres veld is verplicht.',
            'email' => 'Het e-mailadres is niet geldig.',
        ],
        'terms' => [
            'required' => 'U moet de gebruiksvoorwaarden accepteren.'
        ]
    ]
];
