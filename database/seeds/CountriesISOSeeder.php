<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CountriesISOSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iso_list=   array([
            'ISO'=> 'AF',
            'Country' =>'Afghanistan',
        ],
        [
            'ISO'=> 'AX',
            'Country' =>'Åland Islands',
        ],
        [
            'ISO'=> 'AL',
            'Country' =>'Albania',
        ],
        [
            'ISO'=> 'DZ',
            'Country' =>'Algeria',
        ],
        [
            'ISO'=> 'AS',
            'Country' =>'American Samoa',
        ],
        [
            'ISO'=> 'AD',
            'Country' =>'Andorra',
        ],
        [
            'ISO'=> 'AO',
            'Country' =>'Angola',
        ],
        [
            'ISO'=> 'AI',
            'Country' =>'Anguilla',
        ],
        [
            'ISO'=> 'AQ',
            'Country' =>'Antarctica',
        ],
        [
            'ISO'=> 'AG',
            'Country' =>'Antigua and Barbuda',
        ],
        [
            'ISO'=> 'AR',
            'Country' =>'Argentina',
        ],
        [
            'ISO'=> 'AM',
            'Country' =>'Armenia',
        ],
        [
            'ISO'=> 'AW',
            'Country' =>'Aruba',
        ],
        [
            'ISO'=> 'AU',
            'Country' =>'Australia',
        ],
        [
            'ISO'=> 'AT',
            'Country' =>'Austria',
        ],
        [
            'ISO'=> 'AZ',
            'Country' =>'Azerbaijan',
        ],
        [
            'ISO'=> 'BS',
            'Country' =>'Bahamas',
        ],
        [
            'ISO'=> 'BH',
            'Country' =>'Bahrain',
        ],
        [
            'ISO'=> 'BD',
            'Country' =>'Bangladesh',
        ],
        [
            'ISO'=> 'BB',
            'Country' =>'Barbados',
        ],
        [
            'ISO'=> 'BY',
            'Country' =>'Belarus',
        ],

        [
            'ISO'=> 'BE',
            'Country' =>'Belgium',
        ],
        [
            'ISO'=> 'BZ',
            'Country' =>'Belize',
        ],
        [
            'ISO'=> 'BJ',
            'Country' =>'Benin',
        ],
        [
            'ISO'=> 'BM',
            'Country' =>'Bermuda',
        ],
        [
            'ISO'=> 'BT',
            'Country' =>'Bhutan',
        ],
        [
            'ISO'=> 'BO',
            'Country' =>'Bolivia',
        ],
        [
            'ISO'=> 'BQ',
            'Country' =>'Bonaire, Sint Eustatius and Saba',
        ],
        [
            'ISO'=> 'BA',
            'Country' =>'Bosnia and Herzegovina',
        ],
        [
            'ISO'=> 'BW',
            'Country' =>'Botswana',
        ],
        [
            'ISO'=> 'BR',
            'Country' =>'Brazil',
        ],
        [
            'ISO'=> 'IO',
            'Country' =>'British Indian Ocean Territory',
        ],
        [
            'ISO'=> 'BN',
            'Country' =>'Brunei Darussalam',
        ],
        [
            'ISO'=> 'BG',
            'Country' =>'Bulgaria',
        ],
        [
            'ISO'=> 'BF',
            'Country' =>'Burkina Faso',
        ],
        [
            'ISO'=> 'BI',
            'Country' =>'Burundi',
        ],
        [
            'ISO'=> 'KH',
            'Country' =>'Cambodia',
        ],
        [
            'ISO'=> 'CM',
            'Country' =>'Cameroon',
        ],
        [
            'ISO'=> 'CA',
            'Country' =>'Canada',
        ],
        [
            'ISO'=> 'CV',
            'Country' =>'Cape Verde',
        ],
        [
            'ISO'=> 'KY',
            'Country' =>'Cayman Islands',
        ],
        [
            'ISO'=> 'CF',
            'Country' =>'Central African Republic',
        ],
        [
            'ISO'=> 'TD',
            'Country' =>'Chad',
        ],
        [
            'ISO'=> 'CL',
            'Country' =>'Chile',
        ],
        [
            'ISO'=> 'CN',
            'Country' =>'China',
        ],
        [
            'ISO'=> 'CX',
            'Country' =>'Christmas Islands',
        ],
        [
            'ISO'=> 'CC',
            'Country' =>'Cocos (Keeling) Islands',
        ],
        [
            'ISO'=> 'CO',
            'Country' =>'Colombia',
        ],
         [
            'ISO'=> 'KM',
            'Country' =>'Comoros',
        ],
         [
            'ISO'=> 'CG',
            'Country' =>'Congo',
        ],
         [
            'ISO'=> 'CD',
            'Country' =>'Congo, The Democratic Republic of the',
        ],
         [
            'ISO'=> 'CK',
            'Country' =>'Cook Islands',
        ],
        [
            'ISO'=> 'CR',
            'Country' =>'Costa Rica',
        ],
        [
            'ISO'=> 'CI',
            'Country' =>'Côte d\'Ivoire',
        ],
        [
            'ISO'=> 'HR',
            'Country' =>'Croatia',
        ],
        [
            'ISO'=> 'CU',
            'Country' =>'Cuba',
        ],
        [
            'ISO'=> 'CW',
            'Country' =>'Curaçao',
        ],
        [
            'ISO'=> 'CY',
            'Country' =>'Cyprus',
        ],
        [
            'ISO'=> 'CZ',
            'Country' =>'Czechia',
        ],
        [
            'ISO'=> 'DK',
            'Country' =>'Denmark',
        ],
        [
            'ISO'=> 'DJ',
            'Country' =>'Djibouti',
        ],
        [
            'ISO'=> 'DM',
            'Country' =>'Dominica',
        ],
        [
            'ISO'=> 'DO',
            'Country' =>'Dominican Republic',
        ],
        [
            'ISO'=> 'EC',
            'Country' =>'Ecuador',
        ],
        [
            'ISO'=> 'EG',
            'Country' =>'Egypt',
        ],
        [
            'ISO'=> 'SV',
            'Country' =>'El Salvador',
        ],
        [
            'ISO'=> 'GQ',
            'Country' =>'Equatorial Guinea',
        ],
        [
            'ISO'=> 'ER',
            'Country' =>'Eritrea',
        ],
        [
            'ISO'=> 'EE',
            'Country' =>'Estonia',
        ],
        [
            'ISO'=> 'SZ',
            'Country' =>'Eswatini',
        ],
        [
            'ISO'=> 'ET',
            'Country' =>'Ethiopia',
        ],
        [
            'ISO'=> 'FK',
            'Country' =>'Falkland Islands (Malvinas)',
        ],
        [
            'ISO'=> 'FO',
            'Country' =>'Faroe Islands',
        ],
        [
            'ISO'=> 'FJ',
            'Country' =>'Fiji',
        ],
        [
            'ISO'=> 'FI',
            'Country' =>'Finland',
        ],
        [
            'ISO'=> 'FR',
            'Country' =>'France',
        ],
        [
            'ISO'=> 'GF',
            'Country' =>'French Guiana',
        ],
        [
            'ISO'=> 'PF',
            'Country' =>'French Polynesia',
        ],
        [
            'ISO'=> 'TF',
            'Country' =>'French Southern Territories',
        ],
        [
            'ISO'=> 'GA',
            'Country' =>'Gabon',
        ],
        [
            'ISO'=> 'GM',
            'Country' =>'Gambia',
        ],
        [
            'ISO'=> 'GE',
            'Country' =>'Georgia',
        ],
        [
            'ISO'=> 'DE',
            'Country' =>'Germany',
        ],
        [
            'ISO'=> 'GH',
            'Country' =>'Ghana',
        ],
        [
            'ISO'=> 'GI',
            'Country' =>'Gibraltar',
        ],
        [
            'ISO'=> 'GR',
            'Country' =>'Greece',
        ],
        [
            'ISO'=> 'GL',
            'Country' =>'Greenland',
        ],
        [
            'ISO'=> 'GD',
            'Country' =>'Grenada',
        ],
        [
            'ISO'=> 'GP',
            'Country' =>'Guadeloupe',
        ],
        [
            'ISO'=> 'GU',
            'Country' =>'Guam',
        ],
        [
            'ISO'=> 'GT',
            'Country' =>'Guatemala',
        ],
        [
            'ISO'=> 'GG',
            'Country' =>'Guernsey',
        ],
        [
            'ISO'=> 'GN',
            'Country' =>'Guinea',
        ],
        [
            'ISO'=> 'GW',
            'Country' =>'Guinea-Bissau',
        ],
        [
            'ISO'=> 'GY',
            'Country' =>'Guyana',
        ],
        [
            'ISO'=> 'HT',
            'Country' =>'Haiti',
        ],
        [
            'ISO'=> 'HM',
            'Country' =>'Heard Island and McDonald Islands',
        ],
        [
            'ISO'=> 'VA',
            'Country' =>'Holy See (Vatican City State)',
        ],
        [
            'ISO'=> 'HN',
            'Country' =>'Honduras',
        ],
        [
            'ISO'=> 'HK',
            'Country' =>'Hong Kong',
        ],
        [
            'ISO'=> 'HU',
            'Country' =>'Hungary',
        ],
        [
            'ISO'=> 'IS',
            'Country' =>'Iceland',
        ],
        [
            'ISO'=> 'IN',
            'Country' =>'India',
        ],
        [
            'ISO'=> 'ID',
            'Country' =>'Indonesia',
        ],
        [
            'ISO'=> 'XZ',
            'Country' =>'	Installations in International Waters',
        ],
        [
            'ISO'=> 'IR',
            'Country' =>'Iran, Islamic Republic of',
        ],
        [
            'ISO'=> 'IQ',
            'Country' =>'Iraq',
        ],
        [
            'ISO'=> 'IE',
            'Country' =>'Ireland',
        ],
        [
            'ISO'=> 'IM',
            'Country' =>'Isle of Man',
        ],
        [
            'ISO'=> 'IL',
            'Country' =>'Israel',
        ],
        [
            'ISO'=> 'IT',
            'Country' =>'Italy',
        ],
        [
            'ISO'=> 'JM',
            'Country' =>'Jamaica',
        ],
        [
            'ISO'=> 'JP',
            'Country' =>'Japan',
        ],
        [
            'ISO'=> 'JE',
            'Country' =>'Jersey',
        ],
        [
            'ISO'=> 'JO',
            'Country' =>'Jordan',
        ],
        [
            'ISO'=> 'KZ',
            'Country' =>'Kazakhstan',
        ],
        [
            'ISO'=> 'KE',
            'Country' =>'Kenya',
        ],
        [
            'ISO'=> 'KI',
            'Country' =>'Kiribati',
        ],
        [
            'ISO'=> 'KP',
            'Country' =>'Korea, Democratic People\'s Republic of',
        ],
        [
            'ISO'=> 'KR',
            'Country' =>'Korea, Republic of',
        ],

        [
            'ISO'=> 'KW',
            'Country' =>'Kuwait',
        ],
        [
            'ISO'=> 'KG',
            'Country' =>'Kyrgyzstan',
        ],[
            'ISO'=> 'LA',
            'Country' =>'Lao People\'s Democratic Republic',
        ],
        [
            'ISO'=> 'LV',
            'Country' =>'Latvia',
        ],
        [
            'ISO'=> 'LB',
            'Country' =>'Lebanon',
        ],
        [
            'ISO'=> 'LS',
            'Country' =>'Lesotho',
        ],
        [
            'ISO'=> 'LR',
            'Country' =>'Liberia',
        ],
        [
            'ISO'=> 'LY',
            'Country' =>'Libya',
        ],
        [
            'ISO'=> 'LI',
            'Country' =>'Liechtenstein',
        ],
        [
            'ISO'=> 'LT',
            'Country' =>'Lithuania',
        ],
        [
            'ISO'=> 'LU',
            'Country' =>'Luxembourg',
        ],
        [
            'ISO'=> 'MO',
            'Country' =>'Macao',
        ],
        [
            'ISO'=> 'MK',
            'Country' =>'Macedonia, The former Yugoslav Republic of',
        ],
        [
            'ISO'=> 'MG',
            'Country' =>'Madagascar',
        ],
        [
            'ISO'=> 'MW',
            'Country' =>'Malawi',
        ],
        [
            'ISO'=> 'MY',
            'Country' =>'Malaysia',
        ],
        [
            'ISO'=> 'MV',
            'Country' =>'Maldives',
        ],
        [
            'ISO'=> 'ML',
            'Country' =>'Mali',
        ],
        [
            'ISO'=> 'MT',
            'Country' =>'Malta',
        ],
        [
            'ISO'=> 'MH',
            'Country' =>'Marshall Islands',
        ],
        [
            'ISO'=> 'MQ',
            'Country' =>'Martinique',
        ],
        [
            'ISO'=> 'MR',
            'Country' =>'Mauritania',
        ],
        [
            'ISO'=> 'MU	',
            'Country' =>'Mauritius',
        ],
        [
            'ISO'=> 'YT',
            'Country' =>'Mayotte',
        ],
        [
            'ISO'=> 'MX',
            'Country' =>'Mexico',
        ],
        [
            'ISO'=> 'FM',
            'Country' =>'Micronesia, Federated States of',
        ],
        [
            'ISO'=> 'MD',
            'Country' =>'Moldova, Republic of',
        ],
        [
            'ISO'=> 'MC',
            'Country' =>'Monaco',
        ],
        [
            'ISO'=> 'MN',
            'Country' =>'Mongolia',
        ],
        [
            'ISO'=> 'ME',
            'Country' =>'Montenegro',
        ],
        [
            'ISO'=> 'MS',
            'Country' =>'Montserrat',
        ],

        [
            'ISO'=> 'MA',
            'Country' =>'Morocco',
        ],
        [
            'ISO'=> 'MZ',
            'Country' =>'Mozambique',
        ],
        [
            'ISO'=> 'MM',
            'Country' =>'Myanmar',
        ],
        [
            'ISO'=> 'NA',
            'Country' =>'Namibia',
        ],
        [
            'ISO'=> 'NR',
            'Country' =>'Nauru',
        ],
        [
            'ISO'=> 'NP',
            'Country' =>'Nepal',
        ],
        [
            'ISO'=> 'NL',
            'Country' =>'Netherlands',
        ],
        [
            'ISO'=> 'NC',
            'Country' =>'New Caledonia',
        ],
        [
            'ISO'=> 'NZ',
            'Country' =>'New Zealand',
        ],
        [
            'ISO'=> 'NI',
            'Country' =>'Nicaragua',
        ],
        [
            'ISO'=> 'NE',
            'Country' =>'Niger',
        ],
        [
            'ISO'=> 'NG',
            'Country' =>'Nigeria',
        ],
        [
            'ISO'=> 'NU',
            'Country' =>'Niue',
        ],

        [
            'ISO'=> 'NF',
            'Country' =>'Norfolk Island',
        ],
         [
            'ISO'=> 'MP',
            'Country' =>'Northern Mariana Islands',
        ],
         [
            'ISO'=> 'NO',
            'Country' =>'Norway',
        ],
        [
            'ISO'=> 'OM',
            'Country' =>'Oman',
        ],
        [
            'ISO'=> 'PK',
            'Country' =>'Pakistan',
        ],

        [
            'ISO'=> 'PW',
            'Country' =>'Palau',
        ],
        [
            'ISO'=> 'PS',
            'Country' =>'Palestine, State of',
        ],
        [
            'ISO'=> 'PA',
            'Country' =>'Panama',
        ],
        [
            'ISO'=> 'PG',
            'Country' =>'Papua New Guinea',
        ],
        [
            'ISO'=> 'PY',
            'Country' =>'Paraguay',
        ],
        [
            'ISO'=> 'PE',
            'Country' =>'Peru',
        ],
        [
            'ISO'=> 'PH',
            'Country' =>'Philippines',
        ],

        [
            'ISO'=> 'PN',
            'Country' =>'Pitcairn',
        ],
        [
            'ISO'=> 'PL',
            'Country' =>'Poland',
        ],
        [
            'ISO'=> 'PT',
            'Country' =>'Portugal',
        ],
        [
            'ISO'=> 'PR',
            'Country' =>'Puerto Rico',
        ],

         [
            'ISO'=> 'QA',
            'Country' =>'Qatar',
        ],
         [
            'ISO'=> 'RE',
            'Country' =>'Reunion',
        ],
        [
            'ISO'=> 'RO',
            'Country' =>'Romania',
        ],
         [
            'ISO'=> 'RU',
            'Country' =>'Russian Federation',
        ], [
            'ISO'=> 'RW',
            'Country' =>'Rwanda',
        ],
        [
            'ISO'=> 'BL',
            'Country' =>'Saint Barthélemy',
        ],
        [
            'ISO'=> 'SH',
            'Country' =>'Saint Helena, Ascension and Tristan Da Cunha',
        ],
        [
            'ISO'=> 'KN',
            'Country' =>'Saint Kitts and Nevis',
        ],
        [
            'ISO'=> 'LC',
            'Country' =>'Saint Lucia',
        ],

        [
            'ISO'=> 'MF',
            'Country' =>'Saint Martin (French Part)',
        ],
        [
            'ISO'=> 'PM',
            'Country' =>'Saint Pierre and Miquelon',
        ],
        [
            'ISO'=> 'VC',
            'Country' =>'Saint Vincent and the Grenadines',
        ],
        [
            'ISO'=> 'WS',
            'Country' =>'Samoa',
        ],
        [
            'ISO'=> 'SM',
            'Country' =>'San Marino',
        ],
        [
            'ISO'=> 'ST',
            'Country' =>'Sao Tome and Principe',
        ],
        [
            'ISO'=> 'SA',
            'Country' =>'Saudi Arabia',
        ],
        [
            'ISO'=> 'SN',
            'Country' =>'Senegal',
        ],
        [
            'ISO'=> 'RS',
            'Country' =>'Serbia',
        ],
        [
            'ISO'=> 'SC',
            'Country' =>'Seychelles',
        ],
        [
            'ISO'=> 'SL',
            'Country' =>'Sierra Leone',
        ],
        [
            'ISO'=> 'SG',
            'Country' =>'Singapore',
        ],
        [
            'ISO'=> 'SX',
            'Country' =>'Sint Maarten (Dutch Part)',
        ],
        [
            'ISO'=> 'SK	',
            'Country' =>'Slovakia',
        ],
        [
            'ISO'=> 'SI',
            'Country' =>'Slovenia',
        ],
        [
            'ISO'=> 'SB',
            'Country' =>'Solomon Islands',
        ],
        [
            'ISO'=> 'SO',
            'Country' =>'Somalia',
        ],
        [
            'ISO'=> 'ZA',
            'Country' =>'South Africa',
        ],
        [
            'ISO'=> 'GS',
            'Country' =>'South Georgia and the South Sandwich Islands',
        ],
        [
            'ISO'=> 'SS',
            'Country' =>'South Sudan',
        ],
        [
            'ISO'=> 'ES',
            'Country' =>'Spain',
        ],
        [
            'ISO'=> 'LK',
            'Country' =>'Sri Lanka',
        ],
        [
            'ISO'=> 'SD',
            'Country' =>'Sudan',
        ],
        [
            'ISO'=> 'SR',
            'Country' =>'Suriname',
        ],
        [
            'ISO'=> 'SJ',
            'Country' =>'Svalbard and Jan Mayen',
        ],
        [
            'ISO'=> 'SE',
            'Country' =>'Sweden',
        ],
        [
            'ISO'=> 'CH',
            'Country' =>'Switzerland',
        ],
        [
            'ISO'=> 'SY',
            'Country' =>'Syrian Arab Republic',
        ],
        [
            'ISO'=> 'TW',
            'Country' =>'Taiwan, Province of China',
        ],
        [
            'ISO'=> 'TJ',
            'Country' =>'Tajikistan',
        ],
        [
            'ISO'=> 'TZ',
            'Country' =>'Tanzania, United Republic of',
        ],
        [
            'ISO'=> 'TH',
            'Country' =>'Thailand',
        ],
        [
            'ISO'=> 'TL',
            'Country' =>'Timor-Leste',
        ],
        [
            'ISO'=> 'TG',
            'Country' =>'Togo',
        ],
        [
            'ISO'=> 'TK',
            'Country' =>'Tokelau',
        ],
        [
            'ISO'=> 'TO',
            'Country' =>'Tonga',
        ],
        [
            'ISO'=> 'TT',
            'Country' =>'Trinidad and Tobago',
        ],
        [
            'ISO'=> 'TN',
            'Country' =>'Tunisia',
        ],
        [
            'ISO'=> 'TR',
            'Country' =>'Turkey',
        ],
        [
            'ISO'=> 'TM',
            'Country' =>'Turkmenistan',
        ],
        [
            'ISO'=> 'TC',
            'Country' =>'Turks and Caicos Islands',
        ],
        [
            'ISO'=> 'TV',
            'Country' =>'Tuvalu',
        ],
        [
            'ISO'=> 'UG',
            'Country' =>'Uganda',
        ],
        [
            'ISO'=> 'UA',
            'Country' =>'Ukraine',
        ],
        [
            'ISO'=> 'AE',
            'Country' =>'United Arab Emirates',
        ],
        [
            'ISO'=> 'GB',
            'Country' =>'United Kingdom',
        ],
        [
            'ISO'=> 'US',
            'Country' =>'United States    [A to E]    [F to J]    [K to O]    [P to T]    [U to Z]',
        ],
        [
            'ISO'=> 'UM',
            'Country' =>'United States Minor Outlying Islands',
        ],
        [
            'ISO'=> 'UY',
            'Country' =>'Uruguay',
        ],
        [
            'ISO'=> 'UZ',
            'Country' =>'Uzbekistan',
        ],
        [
            'ISO'=> 'VU',
            'Country' =>'Vanuatu',
        ],
        [
            'ISO'=> 'VE',
            'Country' =>'Venezuela',
        ],
        [
            'ISO'=> 'VN',
            'Country' =>'Viet Nam',
        ],
        [
            'ISO'=> 'VG',
            'Country' =>'Virgin Islands, British',
        ],
        [
            'ISO'=> 'VI',
            'Country' =>'Virgin Islands, U.S.',
        ],
        [
            'ISO'=> 'WF',
            'Country' =>'Wallis and Futuna',
        ],
        [
            'ISO'=> 'EH',
            'Country' =>'Western Sahara',
        ],
        [
            'ISO'=> 'YE',
            'Country' =>'Yemen',
        ],
        [
            'ISO'=> 'ZM',
            'Country' =>'Zambia',
        ],
        [
            'ISO'=> 'ZW',
            'Country' =>'Zimbabwe',
        ],









    );


        DB::table('countries_iso')->insert($iso_list);
    }
}
