<?php

return [
    'title' => 'Suscríbase al boletín',
    'submit' => 'Suscribir',
    'confirm' => 'Ahora está suscrito a nuestro boletín. Te veo pronto !',

    'fields' => [
        'email' => 'Dirección de correo electrónico',
        'terms' => 'Al enviar este formulario, acepto que la información proporcionada se pueda utilizar para enviarme boletines y correos electrónicos publicitarios. Política de confidencialidad.',
    ],

    'validators' => [
        'email' => [
            'required' => 'El campo de dirección de correo electrónico es obligatorio.',
            'email' => 'La dirección de correo electrónico no es válida.',
        ],
        'terms' => [
            'required' => 'Debes aceptar los términos de uso.'
        ]
    ]
];
