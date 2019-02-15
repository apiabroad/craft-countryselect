<?php

namespace lukeyouell\countryselect\fields;

use Craft;
use craft\fields\BaseOptionsField;

abstract class CountrySelectBaseOptions extends BaseOptionsField
{
    // Public Methods
    // =========================================================================

    public function getSettingsHtml()
    {
        if (empty($this->options)) {
            // Give it a default row
            $this->options = $this->countries();
        }

        return Craft::$app->getView()->renderTemplateMacro('_includes/forms', 'editableTableField',
            [
                [
                    'label' => $this->optionsSettingLabel(),
                    'instructions' => Craft::t('country-select', 'Define the available countries.'),
                    'id' => 'options',
                    'name' => 'options',
                    'addRowLabel' => Craft::t('app', 'Add an option'),
                    'cols' => [
                        'label' => [
                            'heading' => Craft::t('app', 'Option Label'),
                            'type' => 'singleline',
                            'autopopulate' => 'value'
                        ],
                        'value' => [
                            'heading' => Craft::t('app', 'Value'),
                            'type' => 'singleline',
                            'class' => 'code'
                        ],
                        'default' => [
                            'heading' => Craft::t('app', 'Default?'),
                            'type' => 'checkbox',
                            'radioMode' => !$this->multi,
                            'class' => 'thin'
                        ],
                    ],
                    'rows' => $this->options
                ]
            ]);
    }

    // Protected Methods
    // =========================================================================

    protected function countries()
    {
        $options = [
            ['value' => 'AF', 'label' => Craft::t('country-select', 'Afghanistan')],
            ['value' => 'AX', 'label' => Craft::t('country-select', 'Åland Islands')],
            ['value' => 'AL', 'label' => Craft::t('country-select', 'Albania')],
            ['value' => 'DZ', 'label' => Craft::t('country-select', 'Algeria')],
            ['value' => 'AS', 'label' => Craft::t('country-select', 'American Samoa')],
            ['value' => 'AD', 'label' => Craft::t('country-select', 'Andorra')],
            ['value' => 'AO', 'label' => Craft::t('country-select', 'Angola')],
            ['value' => 'AI', 'label' => Craft::t('country-select', 'Anguilla')],
            ['value' => 'AQ', 'label' => Craft::t('country-select', 'Antarctica')],
            ['value' => 'AG', 'label' => Craft::t('country-select', 'Antigua & Barbuda')],
            ['value' => 'AR', 'label' => Craft::t('country-select', 'Argentina')],
            ['value' => 'AM', 'label' => Craft::t('country-select', 'Armenia')],
            ['value' => 'AW', 'label' => Craft::t('country-select', 'Aruba')],
            ['value' => 'AC', 'label' => Craft::t('country-select', 'Ascension Island')],
            ['value' => 'AU', 'label' => Craft::t('country-select', 'Australia')],
            ['value' => 'AT', 'label' => Craft::t('country-select', 'Austria')],
            ['value' => 'AZ', 'label' => Craft::t('country-select', 'Azerbaijan')],
            ['value' => 'BS', 'label' => Craft::t('country-select', 'Bahamas')],
            ['value' => 'BH', 'label' => Craft::t('country-select', 'Bahrain')],
            ['value' => 'BD', 'label' => Craft::t('country-select', 'Bangladesh')],
            ['value' => 'BB', 'label' => Craft::t('country-select', 'Barbados')],
            ['value' => 'BY', 'label' => Craft::t('country-select', 'Belarus')],
            ['value' => 'BE', 'label' => Craft::t('country-select', 'Belgium')],
            ['value' => 'BZ', 'label' => Craft::t('country-select', 'Belize')],
            ['value' => 'BJ', 'label' => Craft::t('country-select', 'Benin')],
            ['value' => 'BM', 'label' => Craft::t('country-select', 'Bermuda')],
            ['value' => 'BT', 'label' => Craft::t('country-select', 'Bhutan')],
            ['value' => 'BO', 'label' => Craft::t('country-select', 'Bolivia')],
            ['value' => 'BA', 'label' => Craft::t('country-select', 'Bosnia & Herzegovina')],
            ['value' => 'BW', 'label' => Craft::t('country-select', 'Botswana')],
            ['value' => 'BR', 'label' => Craft::t('country-select', 'Brazil')],
            ['value' => 'IO', 'label' => Craft::t('country-select', 'British Indian Ocean Territory')],
            ['value' => 'VG', 'label' => Craft::t('country-select', 'British Virgin Islands')],
            ['value' => 'BN', 'label' => Craft::t('country-select', 'Brunei')],
            ['value' => 'BG', 'label' => Craft::t('country-select', 'Bulgaria')],
            ['value' => 'BF', 'label' => Craft::t('country-select', 'Burkina Faso')],
            ['value' => 'BI', 'label' => Craft::t('country-select', 'Burundi')],
            ['value' => 'KH', 'label' => Craft::t('country-select', 'Cambodia')],
            ['value' => 'CM', 'label' => Craft::t('country-select', 'Cameroon')],
            ['value' => 'CA', 'label' => Craft::t('country-select', 'Canada')],
            ['value' => 'IC', 'label' => Craft::t('country-select', 'Canary Islands')],
            ['value' => 'CV', 'label' => Craft::t('country-select', 'Cape Verde')],
            ['value' => 'BQ', 'label' => Craft::t('country-select', 'Caribbean Netherlands')],
            ['value' => 'KY', 'label' => Craft::t('country-select', 'Cayman Islands')],
            ['value' => 'CF', 'label' => Craft::t('country-select', 'Central African Republic')],
            ['value' => 'EA', 'label' => Craft::t('country-select', 'Ceuta & Melilla')],
            ['value' => 'TD', 'label' => Craft::t('country-select', 'Chad')],
            ['value' => 'CL', 'label' => Craft::t('country-select', 'Chile')],
            ['value' => 'CN', 'label' => Craft::t('country-select', 'China')],
            ['value' => 'CX', 'label' => Craft::t('country-select', 'Christmas Island')],
            ['value' => 'CC', 'label' => Craft::t('country-select', 'Cocos (Keeling) Islands')],
            ['value' => 'CO', 'label' => Craft::t('country-select', 'Colombia')],
            ['value' => 'KM', 'label' => Craft::t('country-select', 'Comoros')],
            ['value' => 'CG', 'label' => Craft::t('country-select', 'Congo - Brazzaville')],
            ['value' => 'CD', 'label' => Craft::t('country-select', 'Congo - Kinshasa')],
            ['value' => 'CK', 'label' => Craft::t('country-select', 'Cook Islands')],
            ['value' => 'CR', 'label' => Craft::t('country-select', 'Costa Rica')],
            ['value' => 'CI', 'label' => Craft::t('country-select', 'Côte d’Ivoire')],
            ['value' => 'HR', 'label' => Craft::t('country-select', 'Croatia')],
            ['value' => 'CU', 'label' => Craft::t('country-select', 'Cuba')],
            ['value' => 'CW', 'label' => Craft::t('country-select', 'Curaçao')],
            ['value' => 'CY', 'label' => Craft::t('country-select', 'Cyprus')],
            ['value' => 'CZ', 'label' => Craft::t('country-select', 'Czechia')],
            ['value' => 'DK', 'label' => Craft::t('country-select', 'Denmark')],
            ['value' => 'DG', 'label' => Craft::t('country-select', 'Diego Garcia')],
            ['value' => 'DJ', 'label' => Craft::t('country-select', 'Djibouti')],
            ['value' => 'DM', 'label' => Craft::t('country-select', 'Dominica')],
            ['value' => 'DO', 'label' => Craft::t('country-select', 'Dominican Republic')],
            ['value' => 'EC', 'label' => Craft::t('country-select', 'Ecuador')],
            ['value' => 'EG', 'label' => Craft::t('country-select', 'Egypt')],
            ['value' => 'SV', 'label' => Craft::t('country-select', 'El Salvador')],
            ['value' => 'GQ', 'label' => Craft::t('country-select', 'Equatorial Guinea')],
            ['value' => 'ER', 'label' => Craft::t('country-select', 'Eritrea')],
            ['value' => 'EE', 'label' => Craft::t('country-select', 'Estonia')],
            ['value' => 'ET', 'label' => Craft::t('country-select', 'Ethiopia')],
            ['value' => 'EZ', 'label' => Craft::t('country-select', 'Eurozone')],
            ['value' => 'FK', 'label' => Craft::t('country-select', 'Falkland Islands')],
            ['value' => 'FO', 'label' => Craft::t('country-select', 'Faroe Islands')],
            ['value' => 'FJ', 'label' => Craft::t('country-select', 'Fiji')],
            ['value' => 'FI', 'label' => Craft::t('country-select', 'Finland')],
            ['value' => 'FR', 'label' => Craft::t('country-select', 'France')],
            ['value' => 'GF', 'label' => Craft::t('country-select', 'French Guiana')],
            ['value' => 'PF', 'label' => Craft::t('country-select', 'French Polynesia')],
            ['value' => 'TF', 'label' => Craft::t('country-select', 'French Southern Territories')],
            ['value' => 'GA', 'label' => Craft::t('country-select', 'Gabon')],
            ['value' => 'GM', 'label' => Craft::t('country-select', 'Gambia')],
            ['value' => 'GE', 'label' => Craft::t('country-select', 'Georgia')],
            ['value' => 'DE', 'label' => Craft::t('country-select', 'Germany')],
            ['value' => 'GH', 'label' => Craft::t('country-select', 'Ghana')],
            ['value' => 'GI', 'label' => Craft::t('country-select', 'Gibraltar')],
            ['value' => 'GR', 'label' => Craft::t('country-select', 'Greece')],
            ['value' => 'GL', 'label' => Craft::t('country-select', 'Greenland')],
            ['value' => 'GD', 'label' => Craft::t('country-select', 'Grenada')],
            ['value' => 'GP', 'label' => Craft::t('country-select', 'Guadeloupe')],
            ['value' => 'GU', 'label' => Craft::t('country-select', 'Guam')],
            ['value' => 'GT', 'label' => Craft::t('country-select', 'Guatemala')],
            ['value' => 'GG', 'label' => Craft::t('country-select', 'Guernsey')],
            ['value' => 'GN', 'label' => Craft::t('country-select', 'Guinea')],
            ['value' => 'GW', 'label' => Craft::t('country-select', 'Guinea-Bissau')],
            ['value' => 'GY', 'label' => Craft::t('country-select', 'Guyana')],
            ['value' => 'HT', 'label' => Craft::t('country-select', 'Haiti')],
            ['value' => 'HN', 'label' => Craft::t('country-select', 'Honduras')],
            ['value' => 'HK', 'label' => Craft::t('country-select', 'Hong Kong SAR China')],
            ['value' => 'HU', 'label' => Craft::t('country-select', 'Hungary')],
            ['value' => 'IS', 'label' => Craft::t('country-select', 'Iceland')],
            ['value' => 'IN', 'label' => Craft::t('country-select', 'India')],
            ['value' => 'ID', 'label' => Craft::t('country-select', 'Indonesia')],
            ['value' => 'IR', 'label' => Craft::t('country-select', 'Iran')],
            ['value' => 'IQ', 'label' => Craft::t('country-select', 'Iraq')],
            ['value' => 'IE', 'label' => Craft::t('country-select', 'Ireland')],
            ['value' => 'IM', 'label' => Craft::t('country-select', 'Isle of Man')],
            ['value' => 'IL', 'label' => Craft::t('country-select', 'Israel')],
            ['value' => 'IT', 'label' => Craft::t('country-select', 'Italy')],
            ['value' => 'JM', 'label' => Craft::t('country-select', 'Jamaica')],
            ['value' => 'JP', 'label' => Craft::t('country-select', 'Japan')],
            ['value' => 'JE', 'label' => Craft::t('country-select', 'Jersey')],
            ['value' => 'JO', 'label' => Craft::t('country-select', 'Jordan')],
            ['value' => 'KZ', 'label' => Craft::t('country-select', 'Kazakhstan')],
            ['value' => 'KE', 'label' => Craft::t('country-select', 'Kenya')],
            ['value' => 'KI', 'label' => Craft::t('country-select', 'Kiribati')],
            ['value' => 'XK', 'label' => Craft::t('country-select', 'Kosovo')],
            ['value' => 'KW', 'label' => Craft::t('country-select', 'Kuwait')],
            ['value' => 'KG', 'label' => Craft::t('country-select', 'Kyrgyzstan')],
            ['value' => 'LA', 'label' => Craft::t('country-select', 'Laos')],
            ['value' => 'LV', 'label' => Craft::t('country-select', 'Latvia')],
            ['value' => 'LB', 'label' => Craft::t('country-select', 'Lebanon')],
            ['value' => 'LS', 'label' => Craft::t('country-select', 'Lesotho')],
            ['value' => 'LR', 'label' => Craft::t('country-select', 'Liberia')],
            ['value' => 'LY', 'label' => Craft::t('country-select', 'Libya')],
            ['value' => 'LI', 'label' => Craft::t('country-select', 'Liechtenstein')],
            ['value' => 'LT', 'label' => Craft::t('country-select', 'Lithuania')],
            ['value' => 'LU', 'label' => Craft::t('country-select', 'Luxembourg')],
            ['value' => 'MO', 'label' => Craft::t('country-select', 'Macau SAR China')],
            ['value' => 'MK', 'label' => Craft::t('country-select', 'Macedonia')],
            ['value' => 'MG', 'label' => Craft::t('country-select', 'Madagascar')],
            ['value' => 'MW', 'label' => Craft::t('country-select', 'Malawi')],
            ['value' => 'MY', 'label' => Craft::t('country-select', 'Malaysia')],
            ['value' => 'MV', 'label' => Craft::t('country-select', 'Maldives')],
            ['value' => 'ML', 'label' => Craft::t('country-select', 'Mali')],
            ['value' => 'MT', 'label' => Craft::t('country-select', 'Malta')],
            ['value' => 'MH', 'label' => Craft::t('country-select', 'Marshall Islands')],
            ['value' => 'MQ', 'label' => Craft::t('country-select', 'Martinique')],
            ['value' => 'MR', 'label' => Craft::t('country-select', 'Mauritania')],
            ['value' => 'MU', 'label' => Craft::t('country-select', 'Mauritius')],
            ['value' => 'YT', 'label' => Craft::t('country-select', 'Mayotte')],
            ['value' => 'MX', 'label' => Craft::t('country-select', 'Mexico')],
            ['value' => 'FM', 'label' => Craft::t('country-select', 'Micronesia')],
            ['value' => 'MD', 'label' => Craft::t('country-select', 'Moldova')],
            ['value' => 'MC', 'label' => Craft::t('country-select', 'Monaco')],
            ['value' => 'MN', 'label' => Craft::t('country-select', 'Mongolia')],
            ['value' => 'ME', 'label' => Craft::t('country-select', 'Montenegro')],
            ['value' => 'MS', 'label' => Craft::t('country-select', 'Montserrat')],
            ['value' => 'MA', 'label' => Craft::t('country-select', 'Morocco')],
            ['value' => 'MZ', 'label' => Craft::t('country-select', 'Mozambique')],
            ['value' => 'MM', 'label' => Craft::t('country-select', 'Myanmar (Burma)')],
            ['value' => 'NA', 'label' => Craft::t('country-select', 'Namibia')],
            ['value' => 'NR', 'label' => Craft::t('country-select', 'Nauru')],
            ['value' => 'NP', 'label' => Craft::t('country-select', 'Nepal')],
            ['value' => 'NL', 'label' => Craft::t('country-select', 'Netherlands')],
            ['value' => 'NC', 'label' => Craft::t('country-select', 'New Caledonia')],
            ['value' => 'NZ', 'label' => Craft::t('country-select', 'New Zealand')],
            ['value' => 'NI', 'label' => Craft::t('country-select', 'Nicaragua')],
            ['value' => 'NE', 'label' => Craft::t('country-select', 'Niger')],
            ['value' => 'NG', 'label' => Craft::t('country-select', 'Nigeria')],
            ['value' => 'NU', 'label' => Craft::t('country-select', 'Niue')],
            ['value' => 'NF', 'label' => Craft::t('country-select', 'Norfolk Island')],
            ['value' => 'KP', 'label' => Craft::t('country-select', 'North Korea')],
            ['value' => 'MP', 'label' => Craft::t('country-select', 'Northern Mariana Islands')],
            ['value' => 'NO', 'label' => Craft::t('country-select', 'Norway')],
            ['value' => 'OM', 'label' => Craft::t('country-select', 'Oman')],
            ['value' => 'PK', 'label' => Craft::t('country-select', 'Pakistan')],
            ['value' => 'PW', 'label' => Craft::t('country-select', 'Palau')],
            ['value' => 'PS', 'label' => Craft::t('country-select', 'Palestinian Territories')],
            ['value' => 'PA', 'label' => Craft::t('country-select', 'Panama')],
            ['value' => 'PG', 'label' => Craft::t('country-select', 'Papua New Guinea')],
            ['value' => 'PY', 'label' => Craft::t('country-select', 'Paraguay')],
            ['value' => 'PE', 'label' => Craft::t('country-select', 'Peru')],
            ['value' => 'PH', 'label' => Craft::t('country-select', 'Philippines')],
            ['value' => 'PN', 'label' => Craft::t('country-select', 'Pitcairn Islands')],
            ['value' => 'PL', 'label' => Craft::t('country-select', 'Poland')],
            ['value' => 'PT', 'label' => Craft::t('country-select', 'Portugal')],
            ['value' => 'PR', 'label' => Craft::t('country-select', 'Puerto Rico')],
            ['value' => 'QA', 'label' => Craft::t('country-select', 'Qatar')],
            ['value' => 'RE', 'label' => Craft::t('country-select', 'Réunion')],
            ['value' => 'RO', 'label' => Craft::t('country-select', 'Romania')],
            ['value' => 'RU', 'label' => Craft::t('country-select', 'Russia')],
            ['value' => 'RW', 'label' => Craft::t('country-select', 'Rwanda')],
            ['value' => 'WS', 'label' => Craft::t('country-select', 'Samoa')],
            ['value' => 'SM', 'label' => Craft::t('country-select', 'San Marino')],
            ['value' => 'ST', 'label' => Craft::t('country-select', 'São Tomé & Príncipe')],
            ['value' => 'SA', 'label' => Craft::t('country-select', 'Saudi Arabia')],
            ['value' => 'SN', 'label' => Craft::t('country-select', 'Senegal')],
            ['value' => 'RS', 'label' => Craft::t('country-select', 'Serbia')],
            ['value' => 'SC', 'label' => Craft::t('country-select', 'Seychelles')],
            ['value' => 'SL', 'label' => Craft::t('country-select', 'Sierra Leone')],
            ['value' => 'SG', 'label' => Craft::t('country-select', 'Singapore')],
            ['value' => 'SX', 'label' => Craft::t('country-select', 'Sint Maarten')],
            ['value' => 'SK', 'label' => Craft::t('country-select', 'Slovakia')],
            ['value' => 'SI', 'label' => Craft::t('country-select', 'Slovenia')],
            ['value' => 'SB', 'label' => Craft::t('country-select', 'Solomon Islands')],
            ['value' => 'SO', 'label' => Craft::t('country-select', 'Somalia')],
            ['value' => 'ZA', 'label' => Craft::t('country-select', 'South Africa')],
            ['value' => 'GS', 'label' => Craft::t('country-select', 'South Georgia & South Sandwich Islands')],
            ['value' => 'KR', 'label' => Craft::t('country-select', 'South Korea')],
            ['value' => 'SS', 'label' => Craft::t('country-select', 'South Sudan')],
            ['value' => 'ES', 'label' => Craft::t('country-select', 'Spain')],
            ['value' => 'LK', 'label' => Craft::t('country-select', 'Sri Lanka')],
            ['value' => 'BL', 'label' => Craft::t('country-select', 'St. Barthélemy')],
            ['value' => 'SH', 'label' => Craft::t('country-select', 'St. Helena')],
            ['value' => 'KN', 'label' => Craft::t('country-select', 'St. Kitts & Nevis')],
            ['value' => 'LC', 'label' => Craft::t('country-select', 'St. Lucia')],
            ['value' => 'MF', 'label' => Craft::t('country-select', 'St. Martin')],
            ['value' => 'PM', 'label' => Craft::t('country-select', 'St. Pierre & Miquelon')],
            ['value' => 'VC', 'label' => Craft::t('country-select', 'St. Vincent & Grenadines')],
            ['value' => 'SD', 'label' => Craft::t('country-select', 'Sudan')],
            ['value' => 'SR', 'label' => Craft::t('country-select', 'Suriname')],
            ['value' => 'SJ', 'label' => Craft::t('country-select', 'Svalbard & Jan Mayen')],
            ['value' => 'SZ', 'label' => Craft::t('country-select', 'Swaziland')],
            ['value' => 'SE', 'label' => Craft::t('country-select', 'Sweden')],
            ['value' => 'CH', 'label' => Craft::t('country-select', 'Switzerland')],
            ['value' => 'SY', 'label' => Craft::t('country-select', 'Syria')],
            ['value' => 'TW', 'label' => Craft::t('country-select', 'Taiwan')],
            ['value' => 'TJ', 'label' => Craft::t('country-select', 'Tajikistan')],
            ['value' => 'TZ', 'label' => Craft::t('country-select', 'Tanzania')],
            ['value' => 'TH', 'label' => Craft::t('country-select', 'Thailand')],
            ['value' => 'TL', 'label' => Craft::t('country-select', 'Timor-Leste')],
            ['value' => 'TG', 'label' => Craft::t('country-select', 'Togo')],
            ['value' => 'TK', 'label' => Craft::t('country-select', 'Tokelau')],
            ['value' => 'TO', 'label' => Craft::t('country-select', 'Tonga')],
            ['value' => 'TT', 'label' => Craft::t('country-select', 'Trinidad & Tobago')],
            ['value' => 'TA', 'label' => Craft::t('country-select', 'Tristan da Cunha')],
            ['value' => 'TN', 'label' => Craft::t('country-select', 'Tunisia')],
            ['value' => 'TR', 'label' => Craft::t('country-select', 'Turkey')],
            ['value' => 'TM', 'label' => Craft::t('country-select', 'Turkmenistan')],
            ['value' => 'TC', 'label' => Craft::t('country-select', 'Turks & Caicos Islands')],
            ['value' => 'TV', 'label' => Craft::t('country-select', 'Tuvalu')],
            ['value' => 'UM', 'label' => Craft::t('country-select', 'U.S. Outlying Islands')],
            ['value' => 'VI', 'label' => Craft::t('country-select', 'U.S. Virgin Islands')],
            ['value' => 'UG', 'label' => Craft::t('country-select', 'Uganda')],
            ['value' => 'UA', 'label' => Craft::t('country-select', 'Ukraine')],
            ['value' => 'AE', 'label' => Craft::t('country-select', 'United Arab Emirates')],
            ['value' => 'GB', 'label' => Craft::t('country-select', 'United Kingdom')],
            ['value' => 'UN', 'label' => Craft::t('country-select', 'United Nations')],
            ['value' => 'US', 'label' => Craft::t('country-select', 'United States')],
            ['value' => 'UY', 'label' => Craft::t('country-select', 'Uruguay')],
            ['value' => 'UZ', 'label' => Craft::t('country-select', 'Uzbekistan')],
            ['value' => 'VU', 'label' => Craft::t('country-select', 'Vanuatu')],
            ['value' => 'VA', 'label' => Craft::t('country-select', 'Vatican City')],
            ['value' => 'VE', 'label' => Craft::t('country-select', 'Venezuela')],
            ['value' => 'VN', 'label' => Craft::t('country-select', 'Vietnam')],
            ['value' => 'WF', 'label' => Craft::t('country-select', 'Wallis & Futuna')],
            ['value' => 'EH', 'label' => Craft::t('country-select', 'Western Sahara')],
            ['value' => 'YE', 'label' => Craft::t('country-select', 'Yemen')],
            ['value' => 'ZM', 'label' => Craft::t('country-select', 'Zambia')],
            ['value' => 'ZW', 'label' => Craft::t('country-select', 'Zimbabwe')],
        ];

        return $options;
    }
}
