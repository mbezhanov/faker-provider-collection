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
