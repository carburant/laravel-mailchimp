<?php

return [
    'title' => 'Abonnieren Sie den Newsletter',
    'submit' => 'Abonnieren',
    'confirm' => 'Sie haben jetzt unseren Newsletter abonniert. Bis bald !',

    'fields' => [
        'email' => 'E-Mail-Addresse',
        'terms' => 'Mit dem Absenden dieses Formulars erkläre ich mich damit einverstanden, dass die darin eingegebenen Daten verwendet werden können, um mir den Marketing-E-Mails zuzusenden. Datenschutzrichtlinie',
    ],

    'validators' => [
        'email' => [
            'required' => 'Das Feld für die E-Mail-Adresse ist erforderlich.',
            'email' => 'Die E-Mail-adresse ist nicht gültig.',
        ],
        'terms' => [
            'required' => 'Sie müssen die Nutzungsbedingungen akzeptieren.'
        ]
    ]
];
