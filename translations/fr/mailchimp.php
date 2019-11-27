<?php

return [
    'title' => 'Abonnez-vous à la newsletter',
    'submit' => 'Souscrire',
    'confirm' => 'Vous êtes maintenant inscrit à notre Newsletter. A très vite !',

    'fields' => [
        'email' => 'Adresse e-mail',
        'terms' => 'En soumettant ce formulaire, j\'accepte que les informations saisies soient utilisées pour m\'envoyer la newsletter et les emails commerciaux de la marque. Politique de confidentialité',
    ],

    'validators' => [
        'email' => [
            'required' => 'Le champ d\'adresse email est obligatoire.',
            'email' => 'L\'adresse e-mail n\'est pas valide.',
        ],
        'terms' => [
            'required' => 'Vous devez accepter les conditions d\'utilisation.'
        ]
    ]
];
