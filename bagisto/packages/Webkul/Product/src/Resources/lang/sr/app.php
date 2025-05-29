<?php

return [
    'checkout' => [
        'cart' => [
            'integrity' => [
                'qty-missing' => 'Najmanje jedan proizvod mora imati količinu veću od 1.',
            ],

            'inventory-warning'        => 'Tražena količina nije dostupna, pokušajte ponovo kasnije.',
            'missing-links'            => 'Nedostaju linkovi za preuzimanje za ovaj proizvod.',
            'missing-options'          => 'Nedostaju opcije za ovaj proizvod.',
            'selected-products-simple' => 'Izabrani proizvodi moraju biti jednostavnog tipa.',
        ],
    ],

    'datagrid' => [
        'copy-of-slug'                  => 'kopija-:value',
        'copy-of'                       => 'Kopija :value',
        'variant-already-exist-message' => 'Varijanta sa istim atributima već postoji.',
    ],

    'response' => [
        'product-can-not-be-copied' => 'Proizvodi tipa :type ne mogu se kopirati.',
    ],

    'sort-by' => [
        'options' => [
            'cheapest-first'  => 'Najjeftinije prvo',
            'expensive-first' => 'Najskuplje prvo',
            'from-a-z'        => 'Od A do Š',
            'from-z-a'        => 'Od Š do A',
            'latest-first'    => 'Najnovije prvo',
            'oldest-first'    => 'Najstarije prvo',
        ],
    ],

    'type' => [
        'abstract' => [
            'offers' => 'Kupite :qty za :price po komadu i uštedite :discount',
        ],

        'bundle'       => 'Paket',
        'configurable' => 'Konfigurisani',
        'downloadable' => 'Za preuzimanje',
        'grouped'      => 'Grupisani',
        'simple'       => 'Jednostavni',
        'virtual'      => 'Virtuelni',
    ],
];
