<?php

namespace Bezhanov\Faker\Provider;

use Faker\Provider\Base;

class Demographic extends Base
{
    const UNIT_TYPE_METRIC = 'metric';
    const UNIT_TYPE_IMPERIAL = 'imperial';

    protected static $race = ["American Indian or Alaska Native", "Asian", "Black or African American", "Native Hawaiian or Other Pacific Islander", "White"];
    protected static $sex = ["Male", "Female"];
    protected static $demonym = ["Afghan", "Albanian", "Algerian", "American", "Andorran", "Angolan", "Argentine", "Armenian", "Aromanian", "Aruban", "Australian", "Austrian", "Azerbaijani", "Bahamian", "Bahraini", "Bangladeshi", "Barbadian", "Basotho", "Basque", "Belarusian", "Belgian", "Belizean", "Bermudian", "Bissau-Guinean", "Boer", "Bosniak", "Brazilian", "Breton", "Briton", "British Virgin Islander", "Bruneian", "Bulgarian", "Burkinabè", "Burundian", "Cambodian", "Cameroonian", "Canadian", "Catalan", "Cape Verdean", "Chadian", "Chilean", "Chinese", "Colombian", "Comorian", "Congolese", "Croatian", "Cuban", "Cypriot", "Czech", "Dane", "Dominican", "Dutch", "East Timorese", "Ecuadorian", "Egyptian", "Emirati", "English", "Eritrean", "Estonian", "Ethiopian", "Falkland Islander", "Faroese", "Finn", "Fijian", "Filipino", "French", "Georgian", "German", "Ghanaian", "Gibraltar", "Greek", "Grenadian", "Guatemalan", "French Guianan", "Guinean", "Guyanese", "Haitian", "Honduran", "Hong Konger", "Hungarian", "Icelander", "I-Kiribati", "Indian", "Indonesian", "Iranian", "Iraqi", "Irish", "Israeli", "Italian", "Ivoirian", "Jamaican", "Japanese", "Jordanian", "Kazakh", "Kenyan", "Korean", "Kosovar", "Kurd", "Kuwaiti", "Kyrgyz", "Lao", "Latvian", "Lebanese", "Liberian", "Libyan", "Liechtensteiner", "Lithuanian", "Luxembourger", "Macanese", "Macedonian", "Malagasy", "Malaysian", "Malawian", "Maldivian", "Malian", "Maltese", "Manx", "Mauritian", "Mexican", "Moldovan", "Moroccan", "Mongolian", "Montenegrin", "Namibian", "Nepalese", "New Zealander", "Nicaraguan", "Nigerien", "Nigerian", "Norwegian", "Pakistani", "Palauan", "Palestinian", "Panamanian", "Papua New Guinean", "Paraguayan", "Peruvian", "Pole", "Portuguese", "Puerto Rican", "Quebecer", "Romanian", "Russian", "Rwandan", "Salvadoran", "São Toméan", "Saudi", "Scottish", "Senegalese", "Serb", "Sierra Leonean", "Singaporean", "Sindhian", "Slovak", "Slovene", "Somali", "Somalilander", "South African", "Spaniard", "Sri Lankan", "St Lucian", "Sudanese", "Surinamese", "Swede", "Swiss", "Syriac", "Syrian", "Tajik", "Taiwanese", "Tanzanian", "Thai", "Tibetan", "Tobagonian", "Trinidadian", "Tunisian", "Turk", "Tuvaluan", "Ugandan", "Ukrainian", "Uruguayan", "Uzbek", "Vanuatuan", "Venezuelan", "Vietnamese", "Welsh", "Yemeni", "Zambian", "Zimbabwean"];
    protected static $language = ['ab' => 'Abkhazian', 'aa' => 'Afar', 'af' => 'Afrikaans', 'ak' => 'Akan', 'sq' => 'Albanian', 'am' => 'Amharic', 'ar' => 'Arabic', 'an' => 'Aragonese', 'hy' => 'Armenian', 'as' => 'Assamese', 'av' => 'Avaric', 'ae' => 'Avestan', 'ay' => 'Aymara', 'az' => 'Azerbaijani', 'bm' => 'Bambara', 'ba' => 'Bashkir', 'eu' => 'Basque', 'be' => 'Belarusian', 'bn' => 'Bengali', 'bh' => 'Bihari languages', 'bi' => 'Bislama', 'bs' => 'Bosnian', 'br' => 'Breton', 'bg' => 'Bulgarian', 'my' => 'Burmese', 'ca' => 'Catalan, Valencian', 'km' => 'Central Khmer', 'ch' => 'Chamorro', 'ce' => 'Chechen', 'ny' => 'Chichewa, Chewa, Nyanja', 'zh' => 'Chinese', 'cu' => 'Church Slavonic, Old Bulgarian, Old Church Slavonic', 'cv' => 'Chuvash', 'kw' => 'Cornish', 'co' => 'Corsican', 'cr' => 'Cree', 'hr' => 'Croatian', 'cs' => 'Czech', 'da' => 'Danish', 'dv' => 'Divehi, Dhivehi, Maldivian', 'nl' => 'Dutch, Flemish', 'dz' => 'Dzongkha', 'en' => 'English', 'eo' => 'Esperanto', 'et' => 'Estonian', 'ee' => 'Ewe', 'fo' => 'Faroese', 'fj' => 'Fijian', 'fi' => 'Finnish', 'fr' => 'French', 'ff' => 'Fulah', 'gd' => 'Gaelic, Scottish Gaelic', 'gl' => 'Galician', 'lg' => 'Ganda', 'ka' => 'Georgian', 'de' => 'German', 'ki' => 'Gikuyu, Kikuyu', 'el' => 'Greek (Modern)', 'kl' => 'Greenlandic, Kalaallisut', 'gn' => 'Guarani', 'gu' => 'Gujarati', 'ht' => 'Haitian, Haitian Creole', 'ha' => 'Hausa', 'he' => 'Hebrew', 'hz' => 'Herero', 'hi' => 'Hindi', 'ho' => 'Hiri Motu', 'hu' => 'Hungarian', 'is' => 'Icelandic', 'io' => 'Ido', 'ig' => 'Igbo', 'id' => 'Indonesian', 'ia' => 'Interlingua (International Auxiliary Language Association)', 'ie' => 'Interlingue', 'iu' => 'Inuktitut', 'ik' => 'Inupiaq', 'ga' => 'Irish', 'it' => 'Italian', 'ja' => 'Japanese', 'jv' => 'Javanese', 'kn' => 'Kannada', 'kr' => 'Kanuri', 'ks' => 'Kashmiri', 'kk' => 'Kazakh', 'rw' => 'Kinyarwanda', 'kv' => 'Komi', 'kg' => 'Kongo', 'ko' => 'Korean', 'kj' => 'Kwanyama, Kuanyama', 'ku' => 'Kurdish', 'ky' => 'Kyrgyz', 'lo' => 'Lao', 'la' => 'Latin', 'lv' => 'Latvian', 'lb' => 'Letzeburgesch, Luxembourgish', 'li' => 'Limburgish, Limburgan, Limburger', 'ln' => 'Lingala', 'lt' => 'Lithuanian', 'lu' => 'Luba-Katanga', 'mk' => 'Macedonian', 'mg' => 'Malagasy', 'ms' => 'Malay', 'ml' => 'Malayalam', 'mt' => 'Maltese', 'gv' => 'Manx', 'mi' => 'Maori', 'mr' => 'Marathi', 'mh' => 'Marshallese', 'ro' => 'Moldovan, Moldavian, Romanian', 'mn' => 'Mongolian', 'na' => 'Nauru', 'nv' => 'Navajo, Navaho', 'nd' => 'Northern Ndebele', 'ng' => 'Ndonga', 'ne' => 'Nepali', 'se' => 'Northern Sami', 'no' => 'Norwegian', 'nb' => 'Norwegian Bokmål', 'nn' => 'Norwegian Nynorsk', 'ii' => 'Nuosu, Sichuan Yi', 'oc' => 'Occitan (post 1500)', 'oj' => 'Ojibwa', 'or' => 'Oriya', 'om' => 'Oromo', 'os' => 'Ossetian, Ossetic', 'pi' => 'Pali', 'pa' => 'Panjabi, Punjabi', 'ps' => 'Pashto, Pushto', 'fa' => 'Persian', 'pl' => 'Polish', 'pt' => 'Portuguese', 'qu' => 'Quechua', 'rm' => 'Romansh', 'rn' => 'Rundi', 'ru' => 'Russian', 'sm' => 'Samoan', 'sg' => 'Sango', 'sa' => 'Sanskrit', 'sc' => 'Sardinian', 'sr' => 'Serbian', 'sn' => 'Shona', 'sd' => 'Sindhi', 'si' => 'Sinhala, Sinhalese', 'sk' => 'Slovak', 'sl' => 'Slovenian', 'so' => 'Somali', 'st' => 'Sotho, Southern', 'nr' => 'South Ndebele', 'es' => 'Spanish, Castilian', 'su' => 'Sundanese', 'sw' => 'Swahili', 'ss' => 'Swati', 'sv' => 'Swedish', 'tl' => 'Tagalog', 'ty' => 'Tahitian', 'tg' => 'Tajik', 'ta' => 'Tamil', 'tt' => 'Tatar', 'te' => 'Telugu', 'th' => 'Thai', 'bo' => 'Tibetan', 'ti' => 'Tigrinya', 'to' => 'Tonga (Tonga Islands)', 'ts' => 'Tsonga', 'tn' => 'Tswana', 'tr' => 'Turkish', 'tk' => 'Turkmen', 'tw' => 'Twi', 'ug' => 'Uighur, Uyghur', 'uk' => 'Ukrainian', 'ur' => 'Urdu', 'uz' => 'Uzbek', 've' => 'Venda', 'vi' => 'Vietnamese', 'vo' => 'Volap_k', 'wa' => 'Walloon', 'cy' => 'Welsh', 'fy' => 'Western Frisian', 'wo' => 'Wolof', 'xh' => 'Xhosa', 'yi' => 'Yiddish', 'yo' => 'Yoruba', 'za' => 'Zhuang, Chuang', 'zu' => 'Zulu'];
    protected static $educationalAttainment = ["No schooling completed", "Nursery school", "Kindergarten", "Grade 1 through 11", "12th grade - No Diploma", "Regular high school diploma", "GED or alternative credential", "Some college", "Associate's degree", "Bachelor's degree", "Master's degree", "Professional degree", "Doctorate degree"];
    protected static $maritalStatus = ["Married", "Widowed", "Divorced", "Separated", "Never married"];

    public function race(): string
    {
        return static::randomElement(static::$race);
    }

    public function educationalAttainment(): string
    {
        return static::randomElement(static::$educationalAttainment);
    }

    public function demonym(): string
    {
        return static::randomElement(static::$demonym);
    }

    public function language($getIsoCode = false): string
    {
        return $getIsoCode ? static::randomElement(array_keys(static::$language)) : static::randomElement(static::$language);
    }

    public function maritalStatus(): string
    {
        return static::randomElement(static::$maritalStatus);
    }

    public function gender(): string
    {
        return static::randomElement(static::$sex);
    }

    public function height(string $unit = self::UNIT_TYPE_METRIC): string
    {
        switch ($unit) {
            case self::UNIT_TYPE_IMPERIAL:
                $inches = mt_rand(57, 86);
                return sprintf('%d ft, %d in', $inches / 12, $inches % 12);
            case self::UNIT_TYPE_METRIC:
            default:
                return sprintf('%s', mt_rand(145, 213) / 100);
        }
    }
}
