<?php

return [
    'title' => 'Subscribe to the newsletter',
    'submit' => 'Subscribe',
    'confirm' => 'You are now subscribed to our newsletter. See you soon !',

    'fields' => [
        'email' => 'E-mail address',
        'terms' => 'By submitting this form, I accept that the information entered in it may be used to send me the newsletter and marketing emails.',
    ],

    'validators' => [
        'email' => [
            'required' => 'The e-mail address field is required.',
            'email' => 'The email address is not valid.',
        ],
        'terms' => [
            'required' => 'You must accept the terms of use.'
        ]
    ]
];
