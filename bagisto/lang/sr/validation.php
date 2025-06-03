<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'        => ':attribute mora biti prihvaćen.',
    'accepted_if'     => ':attribute mora biti prihvaćen kada je :other :value.',
    'active_url'      => ':attribute mora biti ispravan URL.',
    'after'           => ':attribute mora biti datum poslije :date.',
    'after_or_equal'  => ':attribute mora biti datum poslije ili jednak :date.',
    'alpha'           => ':attribute smije sadržavati samo slova.',
    'alpha_dash'      => ':attribute smije sadržavati samo slova, brojeve, crte i donje crte.',
    'alpha_num'       => ':attribute smije sadržavati samo slova i brojeve.',
    'array'           => ':attribute mora biti niz.',
    'ascii'           => ':attribute smije sadržavati samo ASCII znakove i simbole.',
    'before'          => ':attribute mora biti datum prije :date.',
    'before_or_equal' => ':attribute mora biti datum prije ili jednak :date.',

    'between' => [
        'array'   => ':attribute mora imati između :min i :max stavki.',
        'file'    => ':attribute mora biti između :min i :max kilobajta.',
        'numeric' => ':attribute mora biti između :min i :max.',
        'string'  => ':attribute mora imati između :min i :max karaktera.',
    ],

    'boolean'           => ':attribute mora biti tačno ili netačno.',
    'can'               => ':attribute sadrži nedozvoljenu vrijednost.',
    'confirmed'         => 'Potvrda za :attribute se ne poklapa.',
    'current_password'  => 'Lozinka nije tačna.',
    'date'              => ':attribute mora biti ispravan datum.',
    'date_equals'       => ':attribute mora biti datum jednak :date.',
    'date_format'       => ':attribute ne odgovara formatu :format.',
    'decimal'           => ':attribute mora imati :decimal decimalna mjesta.',
    'declined'          => ':attribute mora biti odbijen.',
    'declined_if'       => ':attribute mora biti odbijen kada je :other :value.',
    'different'         => ':attribute i :other moraju biti različiti.',
    'digits'            => ':attribute mora imati :digits cifara.',
    'digits_between'    => ':attribute mora imati između :min i :max cifara.',
    'dimensions'        => ':attribute ima neispravne dimenzije slike.',
    'distinct'          => ':attribute ima dupliranu vrijednost.',
    'doesnt_end_with'   => ':attribute ne smije da se završava sa: :values.',
    'doesnt_start_with' => ':attribute ne smije da počinje sa: :values.',
    'email'             => ':attribute mora biti ispravna email adresa.',
    'ends_with'         => ':attribute mora da se završava sa: :values.',
    'enum'              => 'Odabrani :attribute nije ispravan.',
    'exists'            => 'Odabrani :attribute nije ispravan.',
    'extensions'        => ':attribute mora imati jednu od sljedećih ekstenzija: :values.',
    'file'              => ':attribute mora biti fajl.',
    'filled'            => ':attribute mora imati neku vrijednost.',

    'gt' => [
        'array'   => ':attribute mora imati više od :value stavki.',
        'file'    => ':attribute mora biti veći od :value kilobajta.',
        'numeric' => ':attribute mora biti veći od :value.',
        'string'  => ':attribute mora imati više od :value karaktera.',
    ],

    'gte' => [
        'array'   => ':attribute mora imati :value stavki ili više.',
        'file'    => ':attribute mora biti veći ili jednak :value kilobajta.',
        'numeric' => ':attribute mora biti veći ili jednak :value.',
        'string'  => ':attribute mora imati najmanje :value karaktera.',
    ],

    'hex_color' => ':attribute mora biti ispravna heksadecimalna boja.',
    'image'     => ':attribute mora biti slika.',
    'in'        => 'Odabrani :attribute nije ispravan.',
    'in_array'  => ':attribute mora postojati u :other.',
    'integer'   => ':attribute mora biti cijeli broj.',
    'ip'        => ':attribute mora biti ispravna IP adresa.',
    'ipv4'      => ':attribute mora biti ispravna IPv4 adresa.',
    'ipv6'      => ':attribute mora biti ispravna IPv6 adresa.',
    'json'      => ':attribute mora biti ispravan JSON string.',
    'lowercase' => ':attribute mora biti malim slovima.',

    'lt' => [
        'array'   => ':attribute mora imati manje od :value stavki.',
        'file'    => ':attribute mora biti manji od :value kilobajta.',
        'numeric' => ':attribute mora biti manji od :value.',
        'string'  => ':attribute mora imati manje od :value karaktera.',
    ],

    'lte' => [
        'array'   => ':attribute ne smije imati više od :value stavki.',
        'file'    => ':attribute mora biti manji ili jednak :value kilobajta.',
        'numeric' => ':attribute mora biti manji ili jednak :value.',
        'string'  => ':attribute mora imati najviše :value karaktera.',
    ],

    'mac_address' => ':attribute mora biti ispravna MAC adresa.',

    'max' => [
        'array'   => ':attribute ne smije imati više od :max stavki.',
        'file'    => ':attribute ne smije biti veći od :max kilobajta.',
        'numeric' => ':attribute ne smije biti veći od :max.',
        'string'  => ':attribute ne smije imati više od :max karaktera.',
    ],

    'max_digits' => ':attribute ne smije imati više od :max cifara.',
    'mimes'      => ':attribute mora biti fajl tipa: :values.',
    'mimetypes'  => ':attribute mora biti fajl tipa: :values.',

    'min' => [
        'array'   => ':attribute mora imati najmanje :min stavki.',
        'file'    => ':attribute mora biti najmanje :min kilobajta.',
        'numeric' => ':attribute mora biti najmanje :min.',
        'string'  => ':attribute mora imati najmanje :min karaktera.',
    ],

    'min_digits'       => ':attribute mora imati najmanje :min cifara.',
    'missing'          => ':attribute mora nedostajati.',
    'missing_if'       => ':attribute mora nedostajati kada je :other :value.',
    'missing_unless'   => ':attribute mora nedostajati osim ako :other nije :value.',
    'missing_with'     => ':attribute mora nedostajati kada je prisutno :values.',
    'missing_with_all' => ':attribute mora nedostajati kada su prisutni: :values.',
    'multiple_of'      => ':attribute mora imati veći broj ponudjenih opcija broja :value.',
    'not_in'           => 'Odabrani :attribute nije ispravan.',
    'not_regex'        => 'Format polja :attribute nije ispravan.',
    'numeric'          => ':attribute mora biti broj.',

    'password' => [
        'letters'       => ':attribute mora sadržavati najmanje jedno slovo.',
        'mixed'         => ':attribute mora sadržavati najmanje jedno veliko i jedno malo slovo.',
        'numbers'       => ':attribute mora sadržavati najmanje jedan broj.',
        'symbols'       => ':attribute mora sadržavati najmanje jedan simbol.',
        'uncompromised' => 'Uneseni :attribute se pojavio u curenju podataka. Molimo izaberite drugi.',
    ],

    'present'              => ':attribute mora biti prisutan.',
    'present_if'           => ':attribute mora biti prisutan kada je :other :value.',
    'present_unless'       => ':attribute mora biti prisutan osim ako :other nije :value.',
    'present_with'         => ':attribute mora biti prisutan kada je :values prisutan.',
    'present_with_all'     => ':attribute mora biti prisutan kada su :values prisutni.',
    'prohibited'           => ':attribute je zabranjeno.',
    'prohibited_if'        => ':attribute je zabranjeno kada je :other :value.',
    'prohibited_unless'    => ':attribute je zabranjeno osim ako :other nije u :values.',
    'prohibits'            => ':attribute zabranjuje prisustvo :other.',
    'regex'                => 'Format polja :attribute nije ispravan.',
    'required'             => ':attribute je obavezno.',
    'required_array_keys'  => ':attribute mora sadržavati unose za: :values.',
    'required_if'          => ':attribute je obavezno kada je :other :value.',
    'required_if_accepted' => ':attribute je obavezno kada je :other prihvaćeno.',
    'required_unless'      => ':attribute je obavezno osim ako :other nije u :values.',
    'required_with'        => ':attribute je obavezno kada je :values prisutno.',
    'required_with_all'    => ':attribute je obavezno kada su :values prisutni.',
    'required_without'     => ':attribute je obavezno kada :values nije prisutno.',
    'required_without_all' => ':attribute je obavezno kada nijedna od :values nije prisutna.',
    'same'                 => ':attribute mora odgovarati :other.',

    'size' => [
        'array'   => ':attribute mora sadržavati :size stavki.',
        'file'    => ':attribute mora imati :size kilobajta.',
        'numeric' => ':attribute mora biti :size.',
        'string'  => ':attribute mora imati :size karaktera.',
    ],

    'starts_with' => ':attribute mora počinjati sa: :values.',
    'string'      => ':attribute mora biti tekst.',
    'timezone'    => ':attribute mora biti ispravna vremenska zona.',
    'unique'      => ':attribute je već iskorišten.',
    'uploaded'    => 'Neuspješno otpremanje :attribute.',
    'uppercase'   => ':attribute mora biti velikim slovima.',
    'url'         => ':attribute mora biti ispravan URL.',
    'ulid'        => ':attribute mora biti ispravan ULID.',
    'uuid'        => ':attribute mora biti ispravan UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'prilagođena poruka',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
