<?php

return [
    'title' => 'Iscriviti alla newsletter',
    'submit' => 'Sottoscrivi',
    'confirm' => 'Ora sei iscritto alla nostra newsletter. Arrivederci !',

    'fields' => [
        'email' => 'Indirizzo email',
        'terms' => 'Inviando questo modulo, accetto che le informazioni inserite possano essere utilizzate per inviarmi la newsletter e le e-mail. Informativa sulla privacy',
    ],

    'validators' => [
        'email' => [
            'required' => 'Il campo dell\'indirizzo email è obbligatorio.',
            'email' => 'L\'indirizzo email non è valido',
        ],
        'terms' => [
            'required' => 'Devi accettare i termini di utilizzo.'
        ]
    ]
];
