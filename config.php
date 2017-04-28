<?php

/*
 * @copyright  Copyright (c) 2016, Net Inventors GmbH
 * @category   Shopware
 * @author     Net Inventors GmbH
 *
 */

return [
    'redmine' => [
        'projectID' => '000000-012-447',
        'contact'   => 'hr@netinventors.de',

    ],
    'form'    => [
        [
            'boolean',
            'listingProperties',
            [
                'de_DE' => 'Artikeleigenschaften im Listing zu Verfügung stellen',
                'en_GB' => 'Add product properties to listing products',
            ],
            [
                'de_DE' => 'Fügt dem sArticle-Array die Property-Sets hinzu, wie sie auf der Detailseite verfügbar sind.',
                'en_GB' => 'Adds the Property sets to the sArticle array in the frontend listing, the same way they are available on the Detail page.',
            ],
            false,
            Shopware\Models\Config\Element::SCOPE_SHOP,
        ],
        [
            'boolean',
            'globalUserData',
            [
                'de_DE' => '$netiUserData global bereitstellen',
                'en_GB' => 'provide $netiUserData globally',
            ],
            [],
            true,
            Shopware\Models\Config\Element::SCOPE_SHOP,
        ],
        [
            'boolean',
            'globalUserAttributeData',
            [
                'de_DE' => '$netiUserData global mit attributes bereitstellen',
                'en_GB' => 'provide $netiUserData with attributes globally',
            ],
            [],
            false,
            Shopware\Models\Config\Element::SCOPE_SHOP,
        ],

    ],
];
