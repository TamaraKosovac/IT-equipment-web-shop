<?php

return [
    'importers' => [
        'customers' => [
            'title' => 'Kupci',

            'validation' => [
                'errors' => [
                    'duplicate-email'        => 'Email : \'%s\' se pojavljuje više puta u fajlu za uvoz.',
                    'duplicate-phone'        => 'Telefon : \'%s\' se pojavljuje više puta u fajlu za uvoz.',
                    'email-not-found'        => 'Email : \'%s\' nije pronađen u sistemu.',
                    'invalid-customer-group' => 'Grupa kupaca je nevažeća ili nije podržana',
                ],
            ],
        ],

        'products' => [
            'title' => 'Proizvodi',

            'validation' => [
                'errors' => [
                    'duplicate-url-key'         => 'URL ključ: \'%s\' je već generisan za stavku sa SKU: \'%s\'.',
                    'invalid-attribute-family'  => 'Nevažeća vrijednost u koloni porodice atributa (porodica atributa ne postoji?)',
                    'invalid-type'              => 'Tip proizvoda je nevažeći ili nije podržan',
                    'sku-not-found'             => 'Proizvod sa navedenim SKU nije pronađen',
                    'super-attribute-not-found' => 'Super atribut sa kodom: \'%s\' nije pronađen ili ne pripada porodici atributa: \'%s\'',
                ],
            ],
        ],

        'tax-rates' => [
            'title' => 'Poreske stope',

            'validation' => [
                'errors' => [
                    'duplicate-identifier' => 'Identifikator : \'%s\' se pojavljuje više puta u fajlu za uvoz.',
                    'identifier-not-found' => 'Identifikator : \'%s\' nije pronađen u sistemu.',
                ],
            ],
        ],
    ],

    'validation' => [
        'errors' => [
            'column-empty-headers' => 'Kolone broj "%s" imaju prazne zaglavlja.',
            'column-name-invalid'  => 'Nevažeći nazivi kolona: "%s".',
            'column-not-found'     => 'Potrebne kolone nisu pronađene: %s.',
            'column-numbers'       => 'Broj kolona se ne poklapa sa brojem redova u zaglavlju.',
            'invalid-attribute'    => 'Zaglavlje sadrži nevažeći atribut(e): "%s".',
            'system'               => 'Došlo je do neočekivane sistemske greške.',
            'wrong-quotes'         => 'Koriste se uvijeni navodnici umjesto ravnih navodnika.',
        ],
    ],
];
