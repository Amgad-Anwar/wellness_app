<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('currencies')->delete();

        \DB::table('currencies')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'US Dollar',
                    'code' => 'USD',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'British Pound',
                    'code' => 'GBP',
                    'symbol' => '£',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Euro',
                    'code' => 'EUR',
                    'symbol' => '€',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'South African Rand',
                    'code' => 'ZAR',
                    'symbol' => 'R',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Danish Krone',
                    'code' => 'DKK',
                    'symbol' => 'kr',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Israeli Shekel',
                    'code' => 'ILS',
                    'symbol' => 'NIS ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Swedish Krona',
                    'code' => 'SEK',
                    'symbol' => 'kr',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Kenyan Shilling',
                    'code' => 'KES',
                    'symbol' => 'KSh ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'Kuwaiti Dinar',
                    'code' => 'KWD',
                    'symbol' => 'KWD ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'Canadian Dollar',
                    'code' => 'CAD',
                    'symbol' => 'C$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'Philippine Peso',
                    'code' => 'PHP',
                    'symbol' => 'P ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'Indian Rupee',
                    'code' => 'INR',
                    'symbol' => '₹',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'Australian Dollar',
                    'code' => 'AUD',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'Singapore Dollar',
                    'code' => 'SGD',
                    'symbol' => 'S$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'Norske Kroner',
                    'code' => 'NOK',
                    'symbol' => 'kr',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'New Zealand Dollar',
                    'code' => 'NZD',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'Vietnamese Dong',
                    'code' => 'VND',
                    'symbol' => '₫',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'Swiss Franc',
                    'code' => 'CHF',
                    'symbol' => 'Fr.',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'Guatemalan Quetzal',
                    'code' => 'GTQ',
                    'symbol' => 'Q',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'Malaysian Ringgit',
                    'code' => 'MYR',
                    'symbol' => 'RM',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'Brazilian Real',
                    'code' => 'BRL',
                    'symbol' => 'R$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'Thai Baht',
                    'code' => 'THB',
                    'symbol' => '฿',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'Nigerian Naira',
                    'code' => 'NGN',
                    'symbol' => '₦',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'Argentine Peso',
                    'code' => 'ARS',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'Bangladeshi Taka',
                    'code' => 'BDT',
                    'symbol' => 'Tk',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'United Arab Emirates Dirham',
                    'code' => 'AED',
                    'symbol' => 'DH ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'Hong Kong Dollar',
                    'code' => 'HKD',
                    'symbol' => 'HK$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'Indonesian Rupiah',
                    'code' => 'IDR',
                    'symbol' => 'Rp',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'Mexican Peso',
                    'code' => 'MXN',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'Egyptian Pound',
                    'code' => 'EGP',
                    'symbol' => 'E£',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'Colombian Peso',
                    'code' => 'COP',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            31 =>
                array (
                    'id' => 32,
                    'name' => 'West African Franc',
                    'code' => 'XOF',
                    'symbol' => 'CFA ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            32 =>
                array (
                    'id' => 33,
                    'name' => 'Chinese Renminbi',
                    'code' => 'CNY',
                    'symbol' => 'RMB ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            33 =>
                array (
                    'id' => 34,
                    'name' => 'Rwandan Franc',
                    'code' => 'RWF',
                    'symbol' => 'RF ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            34 =>
                array (
                    'id' => 35,
                    'name' => 'Tanzanian Shilling',
                    'code' => 'TZS',
                    'symbol' => 'TSh ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            35 =>
                array (
                    'id' => 36,
                    'name' => 'Netherlands Antillean Guilder',
                    'code' => 'ANG',
                    'symbol' => 'NAƒ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            36 =>
                array (
                    'id' => 37,
                    'name' => 'Trinidad and Tobago Dollar',
                    'code' => 'TTD',
                    'symbol' => 'TT$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            37 =>
                array (
                    'id' => 38,
                    'name' => 'East Caribbean Dollar',
                    'code' => 'XCD',
                    'symbol' => 'EC$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            38 =>
                array (
                    'id' => 39,
                    'name' => 'Ghanaian Cedi',
                    'code' => 'GHS',
                    'symbol' => '‎GH₵',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            39 =>
                array (
                    'id' => 40,
                    'name' => 'Bulgarian Lev',
                    'code' => 'BGN',
                    'symbol' => 'Лв.',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            40 =>
                array (
                    'id' => 41,
                    'name' => 'Aruban Florin',
                    'code' => 'AWG',
                    'symbol' => 'Afl. ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            41 =>
                array (
                    'id' => 42,
                    'name' => 'Turkish Lira',
                    'code' => 'TRY',
                    'symbol' => 'TL ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            42 =>
                array (
                    'id' => 43,
                    'name' => 'Romanian New Leu',
                    'code' => 'RON',
                    'symbol' => 'RON',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            43 =>
                array (
                    'id' => 44,
                    'name' => 'Croatian Kuna',
                    'code' => 'HRK',
                    'symbol' => 'kn',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            44 =>
                array (
                    'id' => 45,
                    'name' => 'Saudi Riyal',
                    'code' => 'SAR',
                    'symbol' => '‎SِAR',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            45 =>
                array (
                    'id' => 46,
                    'name' => 'Japanese Yen',
                    'code' => 'JPY',
                    'symbol' => '¥',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            46 =>
                array (
                    'id' => 47,
                    'name' => 'Maldivian Rufiyaa',
                    'code' => 'MVR',
                    'symbol' => 'Rf',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            47 =>
                array (
                    'id' => 48,
                    'name' => 'Costa Rican Colón',
                    'code' => 'CRC',
                    'symbol' => '₡',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            48 =>
                array (
                    'id' => 49,
                    'name' => 'Pakistani Rupee',
                    'code' => 'PKR',
                    'symbol' => 'Rs ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            49 =>
                array (
                    'id' => 50,
                    'name' => 'Polish Zloty',
                    'code' => 'PLN',
                    'symbol' => 'zł',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            50 =>
                array (
                    'id' => 51,
                    'name' => 'Sri Lankan Rupee',
                    'code' => 'LKR',
                    'symbol' => 'LKR',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            51 =>
                array (
                    'id' => 52,
                    'name' => 'Czech Koruna',
                    'code' => 'CZK',
                    'symbol' => 'Kč',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            52 =>
                array (
                    'id' => 53,
                    'name' => 'Uruguayan Peso',
                    'code' => 'UYU',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            53 =>
                array (
                    'id' => 54,
                    'name' => 'Namibian Dollar',
                    'code' => 'NAD',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            54 =>
                array (
                    'id' => 55,
                    'name' => 'Tunisian Dinar',
                    'code' => 'TND',
                    'symbol' => '‎د.ت',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            55 =>
                array (
                    'id' => 56,
                    'name' => 'Russian Ruble',
                    'code' => 'RUB',
                    'symbol' => '₽',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            56 =>
                array (
                    'id' => 57,
                    'name' => 'Mozambican Metical',
                    'code' => 'MZN',
                    'symbol' => 'MT',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            57 =>
                array (
                    'id' => 58,
                    'name' => 'Omani Rial',
                    'code' => 'OMR',
                    'symbol' => 'ر.ع.',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            58 =>
                array (
                    'id' => 59,
                    'name' => 'Ukrainian Hryvnia',
                    'code' => 'UAH',
                    'symbol' => '₴',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            59 =>
                array (
                    'id' => 60,
                    'name' => 'Macanese Pataca',
                    'code' => 'MOP',
                    'symbol' => 'MOP$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            60 =>
                array (
                    'id' => 61,
                    'name' => 'Taiwan New Dollar',
                    'code' => 'TWD',
                    'symbol' => 'NT$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            61 =>
                array (
                    'id' => 62,
                    'name' => 'Dominican Peso',
                    'code' => 'DOP',
                    'symbol' => 'RD$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            62 =>
                array (
                    'id' => 63,
                    'name' => 'Chilean Peso',
                    'code' => 'CLP',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            63 =>
                array (
                    'id' => 64,
                    'name' => 'Serbian Dinar',
                    'code' => 'RSD',
                    'symbol' => 'RSD',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            64 =>
                array (
                    'id' => 65,
                    'name' => 'Kyrgyzstani som',
                    'code' => 'KGS',
                    'symbol' => 'С̲ ',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            65 =>
                array (
                    'id' => 66,
                    'name' => 'Iraqi Dinar',
                    'code' => 'IQD',
                    'symbol' => 'ع.د',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            66 =>
                array (
                    'id' => 67,
                    'name' => 'Peruvian Soles',
                    'code' => 'PEN',
                    'symbol' => 'S/',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            67 =>
                array (
                    'id' => 68,
                    'name' => 'Moroccan Dirham',
                    'code' => 'MAD',
                    'symbol' => 'DH',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
            68 =>
                array (
                    'id' => 69,
                    'name' => 'Jamaican Dollar',
                    'code' => 'JMD',
                    'symbol' => '$',
                    'default' => 0,
                    'rate' => '1.00',
                    'created_at' => '2022-04-02 16:41:52',
                    'updated_at' => '2022-04-02 16:41:52',
                    'deleted_at' => NULL,
                ),
        ));
        \DB::table('currencies')->update(['active'=>1]);
        \DB::table('currencies')->where('id',1)->update(['default'=>1]);
    }
}
