<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('states')->delete();

        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Andaman and Nicobar Islands',
                'country_id' => 101,
                'arab_name' => 'Andaman and Nicobar Islands',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Andhra Pradesh',
                'country_id' => 101,
                'arab_name' => 'Andhra Pradesh',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Arunachal Pradesh',
                'country_id' => 101,
                'arab_name' => 'Arunachal Pradesh',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Assam',
                'country_id' => 101,
                'arab_name' => 'Assam',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Bihar',
                'country_id' => 101,
                'arab_name' => 'Bihar',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Chandigarh',
                'country_id' => 101,
                'arab_name' => 'Chandigarh',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Chhattisgarh',
                'country_id' => 101,
                'arab_name' => 'Chhattisgarh',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Dadra and Nagar Haveli',
                'country_id' => 101,
                'arab_name' => 'Dadra and Nagar Haveli',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Daman and Diu',
                'country_id' => 101,
                'arab_name' => 'Daman and Diu',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Delhi',
                'country_id' => 101,
                'arab_name' => 'Delhi',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'Goa',
                'country_id' => 101,
                'arab_name' => 'Goa',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'Gujarat',
                'country_id' => 101,
                'arab_name' => 'Gujarat',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'Haryana',
                'country_id' => 101,
                'arab_name' => 'Haryana',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'Himachal Pradesh',
                'country_id' => 101,
                'arab_name' => 'Himachal Pradesh',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'Jammu and Kashmir',
                'country_id' => 101,
                'arab_name' => 'Jammu and Kashmir',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'Jharkhand',
                'country_id' => 101,
                'arab_name' => 'Jharkhand',
            ),
            16 =>
            array (
                'id' => 17,
                'name' => 'Karnataka',
                'country_id' => 101,
                'arab_name' => 'Karnataka',
            ),
            17 =>
            array (
                'id' => 18,
                'name' => 'Kenmore',
                'country_id' => 101,
                'arab_name' => 'Kenmore',
            ),
            18 =>
            array (
                'id' => 19,
                'name' => 'Kerala',
                'country_id' => 101,
                'arab_name' => 'Kerala',
            ),
            19 =>
            array (
                'id' => 20,
                'name' => 'Lakshadweep',
                'country_id' => 101,
                'arab_name' => 'Lakshadweep',
            ),
            20 =>
            array (
                'id' => 21,
                'name' => 'Madhya Pradesh',
                'country_id' => 101,
                'arab_name' => 'Madhya Pradesh',
            ),
            21 =>
            array (
                'id' => 22,
                'name' => 'Maharashtra',
                'country_id' => 101,
                'arab_name' => 'Maharashtra',
            ),
            22 =>
            array (
                'id' => 23,
                'name' => 'Manipur',
                'country_id' => 101,
                'arab_name' => 'Manipur',
            ),
            23 =>
            array (
                'id' => 24,
                'name' => 'Meghalaya',
                'country_id' => 101,
                'arab_name' => 'Meghalaya',
            ),
            24 =>
            array (
                'id' => 25,
                'name' => 'Mizoram',
                'country_id' => 101,
                'arab_name' => 'Mizoram',
            ),
            25 =>
            array (
                'id' => 26,
                'name' => 'Nagaland',
                'country_id' => 101,
                'arab_name' => 'Nagaland',
            ),
            26 =>
            array (
                'id' => 27,
                'name' => 'Narora',
                'country_id' => 101,
                'arab_name' => 'Narora',
            ),
            27 =>
            array (
                'id' => 28,
                'name' => 'Natwar',
                'country_id' => 101,
                'arab_name' => 'Natwar',
            ),
            28 =>
            array (
                'id' => 29,
                'name' => 'Odisha',
                'country_id' => 101,
                'arab_name' => 'Odisha',
            ),
            29 =>
            array (
                'id' => 30,
                'name' => 'Paschim Medinipur',
                'country_id' => 101,
                'arab_name' => 'Paschim Medinipur',
            ),
            30 =>
            array (
                'id' => 31,
                'name' => 'Pondicherry',
                'country_id' => 101,
                'arab_name' => 'Pondicherry',
            ),
            31 =>
            array (
                'id' => 32,
                'name' => 'Punjab',
                'country_id' => 101,
                'arab_name' => 'Punjab',
            ),
            32 =>
            array (
                'id' => 33,
                'name' => 'Rajasthan',
                'country_id' => 101,
                'arab_name' => 'Rajasthan',
            ),
            33 =>
            array (
                'id' => 34,
                'name' => 'Sikkim',
                'country_id' => 101,
                'arab_name' => 'Sikkim',
            ),
            34 =>
            array (
                'id' => 35,
                'name' => 'Tamil Nadu',
                'country_id' => 101,
                'arab_name' => 'Tamil Nadu',
            ),
            35 =>
            array (
                'id' => 36,
                'name' => 'Telangana',
                'country_id' => 101,
                'arab_name' => 'Telangana',
            ),
            36 =>
            array (
                'id' => 37,
                'name' => 'Tripura',
                'country_id' => 101,
                'arab_name' => 'Tripura',
            ),
            37 =>
            array (
                'id' => 38,
                'name' => 'Uttar Pradesh',
                'country_id' => 101,
                'arab_name' => 'Uttar Pradesh',
            ),
            38 =>
            array (
                'id' => 39,
                'name' => 'Uttarakhand',
                'country_id' => 101,
                'arab_name' => 'Uttarakhand',
            ),
            39 =>
            array (
                'id' => 40,
                'name' => 'Vaishali',
                'country_id' => 101,
                'arab_name' => 'Vaishali',
            ),
            40 =>
            array (
                'id' => 41,
                'name' => 'West Bengal',
                'country_id' => 101,
                'arab_name' => 'West Bengal',
            ),
            41 =>
            array (
                'id' => 42,
                'name' => 'Badakhshan',
                'country_id' => 1,
                'arab_name' => 'Badakhshan',
            ),
            42 =>
            array (
                'id' => 43,
                'name' => 'Badgis',
                'country_id' => 1,
                'arab_name' => 'Badgis',
            ),
            43 =>
            array (
                'id' => 44,
                'name' => 'Baglan',
                'country_id' => 1,
                'arab_name' => 'Baglan',
            ),
            44 =>
            array (
                'id' => 45,
                'name' => 'Balkh',
                'country_id' => 1,
                'arab_name' => 'Balkh',
            ),
            45 =>
            array (
                'id' => 46,
                'name' => 'Bamiyan',
                'country_id' => 1,
                'arab_name' => 'Bamiyan',
            ),
            46 =>
            array (
                'id' => 47,
                'name' => 'Farah',
                'country_id' => 1,
                'arab_name' => 'Farah',
            ),
            47 =>
            array (
                'id' => 48,
                'name' => 'Faryab',
                'country_id' => 1,
                'arab_name' => 'Faryab',
            ),
            48 =>
            array (
                'id' => 49,
                'name' => 'Gawr',
                'country_id' => 1,
                'arab_name' => 'Gawr',
            ),
            49 =>
            array (
                'id' => 50,
                'name' => 'Gazni',
                'country_id' => 1,
                'arab_name' => 'Gazni',
            ),
            50 =>
            array (
                'id' => 51,
                'name' => 'Herat',
                'country_id' => 1,
                'arab_name' => 'Herat',
            ),
            51 =>
            array (
                'id' => 52,
                'name' => 'Hilmand',
                'country_id' => 1,
                'arab_name' => 'Hilmand',
            ),
            52 =>
            array (
                'id' => 53,
                'name' => 'Jawzjan',
                'country_id' => 1,
                'arab_name' => 'Jawzjan',
            ),
            53 =>
            array (
                'id' => 54,
                'name' => 'Kabul',
                'country_id' => 1,
                'arab_name' => 'Kabul',
            ),
            54 =>
            array (
                'id' => 55,
                'name' => 'Kapisa',
                'country_id' => 1,
                'arab_name' => 'Kapisa',
            ),
            55 =>
            array (
                'id' => 56,
                'name' => 'Khawst',
                'country_id' => 1,
                'arab_name' => 'Khawst',
            ),
            56 =>
            array (
                'id' => 57,
                'name' => 'Kunar',
                'country_id' => 1,
                'arab_name' => 'Kunar',
            ),
            57 =>
            array (
                'id' => 58,
                'name' => 'Lagman',
                'country_id' => 1,
                'arab_name' => 'Lagman',
            ),
            58 =>
            array (
                'id' => 59,
                'name' => 'Lawghar',
                'country_id' => 1,
                'arab_name' => 'Lawghar',
            ),
            59 =>
            array (
                'id' => 60,
                'name' => 'Nangarhar',
                'country_id' => 1,
                'arab_name' => 'Nangarhar',
            ),
            60 =>
            array (
                'id' => 61,
                'name' => 'Nimruz',
                'country_id' => 1,
                'arab_name' => 'Nimruz',
            ),
            61 =>
            array (
                'id' => 62,
                'name' => 'Nuristan',
                'country_id' => 1,
                'arab_name' => 'Nuristan',
            ),
            62 =>
            array (
                'id' => 63,
                'name' => 'Paktika',
                'country_id' => 1,
                'arab_name' => 'Paktika',
            ),
            63 =>
            array (
                'id' => 64,
                'name' => 'Paktiya',
                'country_id' => 1,
                'arab_name' => 'Paktiya',
            ),
            64 =>
            array (
                'id' => 65,
                'name' => 'Parwan',
                'country_id' => 1,
                'arab_name' => 'Parwan',
            ),
            65 =>
            array (
                'id' => 66,
                'name' => 'Qandahar',
                'country_id' => 1,
                'arab_name' => 'Qandahar',
            ),
            66 =>
            array (
                'id' => 67,
                'name' => 'Qunduz',
                'country_id' => 1,
                'arab_name' => 'Qunduz',
            ),
            67 =>
            array (
                'id' => 68,
                'name' => 'Samangan',
                'country_id' => 1,
                'arab_name' => 'Samangan',
            ),
            68 =>
            array (
                'id' => 69,
                'name' => 'Sar-e Pul',
                'country_id' => 1,
                'arab_name' => 'Sar-e Pul',
            ),
            69 =>
            array (
                'id' => 70,
                'name' => 'Takhar',
                'country_id' => 1,
                'arab_name' => 'Takhar',
            ),
            70 =>
            array (
                'id' => 71,
                'name' => 'Uruzgan',
                'country_id' => 1,
                'arab_name' => 'Uruzgan',
            ),
            71 =>
            array (
                'id' => 72,
                'name' => 'Wardag',
                'country_id' => 1,
                'arab_name' => 'Wardag',
            ),
            72 =>
            array (
                'id' => 73,
                'name' => 'Zabul',
                'country_id' => 1,
                'arab_name' => 'Zabul',
            ),
            73 =>
            array (
                'id' => 74,
                'name' => 'Berat',
                'country_id' => 2,
                'arab_name' => 'Berat',
            ),
            74 =>
            array (
                'id' => 75,
                'name' => 'Bulqize',
                'country_id' => 2,
                'arab_name' => 'Bulqize',
            ),
            75 =>
            array (
                'id' => 76,
                'name' => 'Delvine',
                'country_id' => 2,
                'arab_name' => 'Delvine',
            ),
            76 =>
            array (
                'id' => 77,
                'name' => 'Devoll',
                'country_id' => 2,
                'arab_name' => 'Devoll',
            ),
            77 =>
            array (
                'id' => 78,
                'name' => 'Dibre',
                'country_id' => 2,
                'arab_name' => 'Dibre',
            ),
            78 =>
            array (
                'id' => 79,
                'name' => 'Durres',
                'country_id' => 2,
                'arab_name' => 'Durres',
            ),
            79 =>
            array (
                'id' => 80,
                'name' => 'Elbasan',
                'country_id' => 2,
                'arab_name' => 'Elbasan',
            ),
            80 =>
            array (
                'id' => 81,
                'name' => 'Fier',
                'country_id' => 2,
                'arab_name' => 'Fier',
            ),
            81 =>
            array (
                'id' => 82,
                'name' => 'Gjirokaster',
                'country_id' => 2,
                'arab_name' => 'Gjirokaster',
            ),
            82 =>
            array (
                'id' => 83,
                'name' => 'Gramsh',
                'country_id' => 2,
                'arab_name' => 'Gramsh',
            ),
            83 =>
            array (
                'id' => 84,
                'name' => 'Has',
                'country_id' => 2,
                'arab_name' => 'Has',
            ),
            84 =>
            array (
                'id' => 85,
                'name' => 'Kavaje',
                'country_id' => 2,
                'arab_name' => 'Kavaje',
            ),
            85 =>
            array (
                'id' => 86,
                'name' => 'Kolonje',
                'country_id' => 2,
                'arab_name' => 'Kolonje',
            ),
            86 =>
            array (
                'id' => 87,
                'name' => 'Korce',
                'country_id' => 2,
                'arab_name' => 'Korce',
            ),
            87 =>
            array (
                'id' => 88,
                'name' => 'Kruje',
                'country_id' => 2,
                'arab_name' => 'Kruje',
            ),
            88 =>
            array (
                'id' => 89,
                'name' => 'Kucove',
                'country_id' => 2,
                'arab_name' => 'Kucove',
            ),
            89 =>
            array (
                'id' => 90,
                'name' => 'Kukes',
                'country_id' => 2,
                'arab_name' => 'Kukes',
            ),
            90 =>
            array (
                'id' => 91,
                'name' => 'Kurbin',
                'country_id' => 2,
                'arab_name' => 'Kurbin',
            ),
            91 =>
            array (
                'id' => 92,
                'name' => 'Lezhe',
                'country_id' => 2,
                'arab_name' => 'Lezhe',
            ),
            92 =>
            array (
                'id' => 93,
                'name' => 'Librazhd',
                'country_id' => 2,
                'arab_name' => 'Librazhd',
            ),
            93 =>
            array (
                'id' => 94,
                'name' => 'Lushnje',
                'country_id' => 2,
                'arab_name' => 'Lushnje',
            ),
            94 =>
            array (
                'id' => 95,
                'name' => 'Mallakaster',
                'country_id' => 2,
                'arab_name' => 'Mallakaster',
            ),
            95 =>
            array (
                'id' => 96,
                'name' => 'Malsi e Madhe',
                'country_id' => 2,
                'arab_name' => 'Malsi e Madhe',
            ),
            96 =>
            array (
                'id' => 97,
                'name' => 'Mat',
                'country_id' => 2,
                'arab_name' => 'Mat',
            ),
            97 =>
            array (
                'id' => 98,
                'name' => 'Mirdite',
                'country_id' => 2,
                'arab_name' => 'Mirdite',
            ),
            98 =>
            array (
                'id' => 99,
                'name' => 'Peqin',
                'country_id' => 2,
                'arab_name' => 'Peqin',
            ),
            99 =>
            array (
                'id' => 100,
                'name' => 'Permet',
                'country_id' => 2,
                'arab_name' => 'Permet',
            ),
            100 =>
            array (
                'id' => 101,
                'name' => 'Pogradec',
                'country_id' => 2,
                'arab_name' => 'Pogradec',
            ),
            101 =>
            array (
                'id' => 102,
                'name' => 'Puke',
                'country_id' => 2,
                'arab_name' => 'Puke',
            ),
            102 =>
            array (
                'id' => 103,
                'name' => 'Sarande',
                'country_id' => 2,
                'arab_name' => 'Sarande',
            ),
            103 =>
            array (
                'id' => 104,
                'name' => 'Shkoder',
                'country_id' => 2,
                'arab_name' => 'Shkoder',
            ),
            104 =>
            array (
                'id' => 105,
                'name' => 'Skrapar',
                'country_id' => 2,
                'arab_name' => 'Skrapar',
            ),
            105 =>
            array (
                'id' => 106,
                'name' => 'Tepelene',
                'country_id' => 2,
                'arab_name' => 'Tepelene',
            ),
            106 =>
            array (
                'id' => 107,
                'name' => 'Tirane',
                'country_id' => 2,
                'arab_name' => 'Tirane',
            ),
            107 =>
            array (
                'id' => 108,
                'name' => 'Tropoje',
                'country_id' => 2,
                'arab_name' => 'Tropoje',
            ),
            108 =>
            array (
                'id' => 109,
                'name' => 'Vlore',
                'country_id' => 2,
                'arab_name' => 'Vlore',
            ),
            109 =>
            array (
                'id' => 110,
                'name' => '\'Ayn Daflah',
                'country_id' => 3,
                'arab_name' => '\'Ayn Daflah',
            ),
            110 =>
            array (
                'id' => 111,
                'name' => '\'Ayn Tamushanat',
                'country_id' => 3,
                'arab_name' => '\'Ayn Tamushanat',
            ),
            111 =>
            array (
                'id' => 112,
                'name' => 'Adrar',
                'country_id' => 3,
                'arab_name' => 'Adrar',
            ),
            112 =>
            array (
                'id' => 113,
                'name' => 'Algiers',
                'country_id' => 3,
                'arab_name' => 'Algiers',
            ),
            113 =>
            array (
                'id' => 114,
                'name' => 'Annabah',
                'country_id' => 3,
                'arab_name' => 'Annabah',
            ),
            114 =>
            array (
                'id' => 115,
                'name' => 'Bashshar',
                'country_id' => 3,
                'arab_name' => 'Bashshar',
            ),
            115 =>
            array (
                'id' => 116,
                'name' => 'Batnah',
                'country_id' => 3,
                'arab_name' => 'Batnah',
            ),
            116 =>
            array (
                'id' => 117,
                'name' => 'Bijayah',
                'country_id' => 3,
                'arab_name' => 'Bijayah',
            ),
            117 =>
            array (
                'id' => 118,
                'name' => 'Biskrah',
                'country_id' => 3,
                'arab_name' => 'Biskrah',
            ),
            118 =>
            array (
                'id' => 119,
                'name' => 'Blidah',
                'country_id' => 3,
                'arab_name' => 'Blidah',
            ),
            119 =>
            array (
                'id' => 120,
                'name' => 'Buirah',
                'country_id' => 3,
                'arab_name' => 'Buirah',
            ),
            120 =>
            array (
                'id' => 121,
                'name' => 'Bumardas',
                'country_id' => 3,
                'arab_name' => 'Bumardas',
            ),
            121 =>
            array (
                'id' => 122,
                'name' => 'Burj Bu Arririj',
                'country_id' => 3,
                'arab_name' => 'Burj Bu Arririj',
            ),
            122 =>
            array (
                'id' => 123,
                'name' => 'Ghalizan',
                'country_id' => 3,
                'arab_name' => 'Ghalizan',
            ),
            123 =>
            array (
                'id' => 124,
                'name' => 'Ghardayah',
                'country_id' => 3,
                'arab_name' => 'Ghardayah',
            ),
            124 =>
            array (
                'id' => 125,
                'name' => 'Ilizi',
                'country_id' => 3,
                'arab_name' => 'Ilizi',
            ),
            125 =>
            array (
                'id' => 126,
                'name' => 'Jijili',
                'country_id' => 3,
                'arab_name' => 'Jijili',
            ),
            126 =>
            array (
                'id' => 127,
                'name' => 'Jilfah',
                'country_id' => 3,
                'arab_name' => 'Jilfah',
            ),
            127 =>
            array (
                'id' => 128,
                'name' => 'Khanshalah',
                'country_id' => 3,
                'arab_name' => 'Khanshalah',
            ),
            128 =>
            array (
                'id' => 129,
                'name' => 'Masilah',
                'country_id' => 3,
                'arab_name' => 'Masilah',
            ),
            129 =>
            array (
                'id' => 130,
                'name' => 'Midyah',
                'country_id' => 3,
                'arab_name' => 'Midyah',
            ),
            130 =>
            array (
                'id' => 131,
                'name' => 'Milah',
                'country_id' => 3,
                'arab_name' => 'Milah',
            ),
            131 =>
            array (
                'id' => 132,
                'name' => 'Muaskar',
                'country_id' => 3,
                'arab_name' => 'Muaskar',
            ),
            132 =>
            array (
                'id' => 133,
                'name' => 'Mustaghanam',
                'country_id' => 3,
                'arab_name' => 'Mustaghanam',
            ),
            133 =>
            array (
                'id' => 134,
                'name' => 'Naama',
                'country_id' => 3,
                'arab_name' => 'Naama',
            ),
            134 =>
            array (
                'id' => 135,
                'name' => 'Oran',
                'country_id' => 3,
                'arab_name' => 'Oran',
            ),
            135 =>
            array (
                'id' => 136,
                'name' => 'Ouargla',
                'country_id' => 3,
                'arab_name' => 'Ouargla',
            ),
            136 =>
            array (
                'id' => 137,
                'name' => 'Qalmah',
                'country_id' => 3,
                'arab_name' => 'Qalmah',
            ),
            137 =>
            array (
                'id' => 138,
                'name' => 'Qustantinah',
                'country_id' => 3,
                'arab_name' => 'Qustantinah',
            ),
            138 =>
            array (
                'id' => 139,
                'name' => 'Sakikdah',
                'country_id' => 3,
                'arab_name' => 'Sakikdah',
            ),
            139 =>
            array (
                'id' => 140,
                'name' => 'Satif',
                'country_id' => 3,
                'arab_name' => 'Satif',
            ),
            140 =>
            array (
                'id' => 141,
                'name' => 'Sayda\'',
                'country_id' => 3,
                'arab_name' => 'Sayda\'',
            ),
            141 =>
            array (
                'id' => 142,
                'name' => 'Sidi ban-al-\'Abbas',
                'country_id' => 3,
                'arab_name' => 'Sidi ban-al-\'Abbas',
            ),
            142 =>
            array (
                'id' => 143,
                'name' => 'Suq Ahras',
                'country_id' => 3,
                'arab_name' => 'Suq Ahras',
            ),
            143 =>
            array (
                'id' => 144,
                'name' => 'Tamanghasat',
                'country_id' => 3,
                'arab_name' => 'Tamanghasat',
            ),
            144 =>
            array (
                'id' => 145,
                'name' => 'Tibazah',
                'country_id' => 3,
                'arab_name' => 'Tibazah',
            ),
            145 =>
            array (
                'id' => 146,
                'name' => 'Tibissah',
                'country_id' => 3,
                'arab_name' => 'Tibissah',
            ),
            146 =>
            array (
                'id' => 147,
                'name' => 'Tilimsan',
                'country_id' => 3,
                'arab_name' => 'Tilimsan',
            ),
            147 =>
            array (
                'id' => 148,
                'name' => 'Tinduf',
                'country_id' => 3,
                'arab_name' => 'Tinduf',
            ),
            148 =>
            array (
                'id' => 149,
                'name' => 'Tisamsilt',
                'country_id' => 3,
                'arab_name' => 'Tisamsilt',
            ),
            149 =>
            array (
                'id' => 150,
                'name' => 'Tiyarat',
                'country_id' => 3,
                'arab_name' => 'Tiyarat',
            ),
            150 =>
            array (
                'id' => 151,
                'name' => 'Tizi Wazu',
                'country_id' => 3,
                'arab_name' => 'Tizi Wazu',
            ),
            151 =>
            array (
                'id' => 152,
                'name' => 'Umm-al-Bawaghi',
                'country_id' => 3,
                'arab_name' => 'Umm-al-Bawaghi',
            ),
            152 =>
            array (
                'id' => 153,
                'name' => 'Wahran',
                'country_id' => 3,
                'arab_name' => 'Wahran',
            ),
            153 =>
            array (
                'id' => 154,
                'name' => 'Warqla',
                'country_id' => 3,
                'arab_name' => 'Warqla',
            ),
            154 =>
            array (
                'id' => 155,
                'name' => 'Wilaya d Alger',
                'country_id' => 3,
                'arab_name' => 'Wilaya d Alger',
            ),
            155 =>
            array (
                'id' => 156,
                'name' => 'Wilaya de Bejaia',
                'country_id' => 3,
                'arab_name' => 'Wilaya de Bejaia',
            ),
            156 =>
            array (
                'id' => 157,
                'name' => 'Wilaya de Constantine',
                'country_id' => 3,
                'arab_name' => 'Wilaya de Constantine',
            ),
            157 =>
            array (
                'id' => 158,
                'name' => 'al-Aghwat',
                'country_id' => 3,
                'arab_name' => 'al-Aghwat',
            ),
            158 =>
            array (
                'id' => 159,
                'name' => 'al-Bayadh',
                'country_id' => 3,
                'arab_name' => 'al-Bayadh',
            ),
            159 =>
            array (
                'id' => 160,
                'name' => 'al-Jaza\'ir',
                'country_id' => 3,
                'arab_name' => 'al-Jaza\'ir',
            ),
            160 =>
            array (
                'id' => 161,
                'name' => 'al-Wad',
                'country_id' => 3,
                'arab_name' => 'al-Wad',
            ),
            161 =>
            array (
                'id' => 162,
                'name' => 'ash-Shalif',
                'country_id' => 3,
                'arab_name' => 'ash-Shalif',
            ),
            162 =>
            array (
                'id' => 163,
                'name' => 'at-Tarif',
                'country_id' => 3,
                'arab_name' => 'at-Tarif',
            ),
            163 =>
            array (
                'id' => 164,
                'name' => 'Eastern',
                'country_id' => 4,
                'arab_name' => 'Eastern',
            ),
            164 =>
            array (
                'id' => 165,
                'name' => 'Manu\'a',
                'country_id' => 4,
                'arab_name' => 'Manu\'a',
            ),
            165 =>
            array (
                'id' => 166,
                'name' => 'Swains Island',
                'country_id' => 4,
                'arab_name' => 'Swains Island',
            ),
            166 =>
            array (
                'id' => 167,
                'name' => 'Western',
                'country_id' => 4,
                'arab_name' => 'Western',
            ),
            167 =>
            array (
                'id' => 168,
                'name' => 'Andorra la Vella',
                'country_id' => 5,
                'arab_name' => 'Andorra la Vella',
            ),
            168 =>
            array (
                'id' => 169,
                'name' => 'Canillo',
                'country_id' => 5,
                'arab_name' => 'Canillo',
            ),
            169 =>
            array (
                'id' => 170,
                'name' => 'Encamp',
                'country_id' => 5,
                'arab_name' => 'Encamp',
            ),
            170 =>
            array (
                'id' => 171,
                'name' => 'La Massana',
                'country_id' => 5,
                'arab_name' => 'La Massana',
            ),
            171 =>
            array (
                'id' => 172,
                'name' => 'Les Escaldes',
                'country_id' => 5,
                'arab_name' => 'Les Escaldes',
            ),
            172 =>
            array (
                'id' => 173,
                'name' => 'Ordino',
                'country_id' => 5,
                'arab_name' => 'Ordino',
            ),
            173 =>
            array (
                'id' => 174,
                'name' => 'Sant Julia de Loria',
                'country_id' => 5,
                'arab_name' => 'Sant Julia de Loria',
            ),
            174 =>
            array (
                'id' => 175,
                'name' => 'Bengo',
                'country_id' => 6,
                'arab_name' => 'Bengo',
            ),
            175 =>
            array (
                'id' => 176,
                'name' => 'Benguela',
                'country_id' => 6,
                'arab_name' => 'Benguela',
            ),
            176 =>
            array (
                'id' => 177,
                'name' => 'Bie',
                'country_id' => 6,
                'arab_name' => 'Bie',
            ),
            177 =>
            array (
                'id' => 178,
                'name' => 'Cabinda',
                'country_id' => 6,
                'arab_name' => 'Cabinda',
            ),
            178 =>
            array (
                'id' => 179,
                'name' => 'Cunene',
                'country_id' => 6,
                'arab_name' => 'Cunene',
            ),
            179 =>
            array (
                'id' => 180,
                'name' => 'Huambo',
                'country_id' => 6,
                'arab_name' => 'Huambo',
            ),
            180 =>
            array (
                'id' => 181,
                'name' => 'Huila',
                'country_id' => 6,
                'arab_name' => 'Huila',
            ),
            181 =>
            array (
                'id' => 182,
                'name' => 'Kuando-Kubango',
                'country_id' => 6,
                'arab_name' => 'Kuando-Kubango',
            ),
            182 =>
            array (
                'id' => 183,
                'name' => 'Kwanza Norte',
                'country_id' => 6,
                'arab_name' => 'Kwanza Norte',
            ),
            183 =>
            array (
                'id' => 184,
                'name' => 'Kwanza Sul',
                'country_id' => 6,
                'arab_name' => 'Kwanza Sul',
            ),
            184 =>
            array (
                'id' => 185,
                'name' => 'Luanda',
                'country_id' => 6,
                'arab_name' => 'Luanda',
            ),
            185 =>
            array (
                'id' => 186,
                'name' => 'Lunda Norte',
                'country_id' => 6,
                'arab_name' => 'Lunda Norte',
            ),
            186 =>
            array (
                'id' => 187,
                'name' => 'Lunda Sul',
                'country_id' => 6,
                'arab_name' => 'Lunda Sul',
            ),
            187 =>
            array (
                'id' => 188,
                'name' => 'Malanje',
                'country_id' => 6,
                'arab_name' => 'Malanje',
            ),
            188 =>
            array (
                'id' => 189,
                'name' => 'Moxico',
                'country_id' => 6,
                'arab_name' => 'Moxico',
            ),
            189 =>
            array (
                'id' => 190,
                'name' => 'Namibe',
                'country_id' => 6,
                'arab_name' => 'Namibe',
            ),
            190 =>
            array (
                'id' => 191,
                'name' => 'Uige',
                'country_id' => 6,
                'arab_name' => 'Uige',
            ),
            191 =>
            array (
                'id' => 192,
                'name' => 'Zaire',
                'country_id' => 6,
                'arab_name' => 'Zaire',
            ),
            192 =>
            array (
                'id' => 193,
                'name' => 'Other Provinces',
                'country_id' => 7,
                'arab_name' => 'Other Provinces',
            ),
            193 =>
            array (
                'id' => 194,
                'name' => 'Sector claimed by Argentina/Ch',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by Argentina/Ch',
            ),
            194 =>
            array (
                'id' => 195,
                'name' => 'Sector claimed by Argentina/UK',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by Argentina/UK',
            ),
            195 =>
            array (
                'id' => 196,
                'name' => 'Sector claimed by Australia',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by Australia',
            ),
            196 =>
            array (
                'id' => 197,
                'name' => 'Sector claimed by France',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by France',
            ),
            197 =>
            array (
                'id' => 198,
                'name' => 'Sector claimed by New Zealand',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by New Zealand',
            ),
            198 =>
            array (
                'id' => 199,
                'name' => 'Sector claimed by Norway',
                'country_id' => 8,
                'arab_name' => 'Sector claimed by Norway',
            ),
            199 =>
            array (
                'id' => 200,
                'name' => 'Unclaimed Sector',
                'country_id' => 8,
                'arab_name' => 'Unclaimed Sector',
            ),
            200 =>
            array (
                'id' => 201,
                'name' => 'Barbuda',
                'country_id' => 9,
                'arab_name' => 'Barbuda',
            ),
            201 =>
            array (
                'id' => 202,
                'name' => 'Saint George',
                'country_id' => 9,
                'arab_name' => 'Saint George',
            ),
            202 =>
            array (
                'id' => 203,
                'name' => 'Saint John',
                'country_id' => 9,
                'arab_name' => 'Saint John',
            ),
            203 =>
            array (
                'id' => 204,
                'name' => 'Saint Mary',
                'country_id' => 9,
                'arab_name' => 'Saint Mary',
            ),
            204 =>
            array (
                'id' => 205,
                'name' => 'Saint Paul',
                'country_id' => 9,
                'arab_name' => 'Saint Paul',
            ),
            205 =>
            array (
                'id' => 206,
                'name' => 'Saint Peter',
                'country_id' => 9,
                'arab_name' => 'Saint Peter',
            ),
            206 =>
            array (
                'id' => 207,
                'name' => 'Saint Philip',
                'country_id' => 9,
                'arab_name' => 'Saint Philip',
            ),
            207 =>
            array (
                'id' => 208,
                'name' => 'Buenos Aires',
                'country_id' => 10,
                'arab_name' => 'Buenos Aires',
            ),
            208 =>
            array (
                'id' => 209,
                'name' => 'Catamarca',
                'country_id' => 10,
                'arab_name' => 'Catamarca',
            ),
            209 =>
            array (
                'id' => 210,
                'name' => 'Chaco',
                'country_id' => 10,
                'arab_name' => 'Chaco',
            ),
            210 =>
            array (
                'id' => 211,
                'name' => 'Chubut',
                'country_id' => 10,
                'arab_name' => 'Chubut',
            ),
            211 =>
            array (
                'id' => 212,
                'name' => 'Cordoba',
                'country_id' => 10,
                'arab_name' => 'Cordoba',
            ),
            212 =>
            array (
                'id' => 213,
                'name' => 'Corrientes',
                'country_id' => 10,
                'arab_name' => 'Corrientes',
            ),
            213 =>
            array (
                'id' => 214,
                'name' => 'Distrito Federal',
                'country_id' => 10,
                'arab_name' => 'Distrito Federal',
            ),
            214 =>
            array (
                'id' => 215,
                'name' => 'Entre Rios',
                'country_id' => 10,
                'arab_name' => 'Entre Rios',
            ),
            215 =>
            array (
                'id' => 216,
                'name' => 'Formosa',
                'country_id' => 10,
                'arab_name' => 'Formosa',
            ),
            216 =>
            array (
                'id' => 217,
                'name' => 'Jujuy',
                'country_id' => 10,
                'arab_name' => 'Jujuy',
            ),
            217 =>
            array (
                'id' => 218,
                'name' => 'La Pampa',
                'country_id' => 10,
                'arab_name' => 'La Pampa',
            ),
            218 =>
            array (
                'id' => 219,
                'name' => 'La Rioja',
                'country_id' => 10,
                'arab_name' => 'La Rioja',
            ),
            219 =>
            array (
                'id' => 220,
                'name' => 'Mendoza',
                'country_id' => 10,
                'arab_name' => 'Mendoza',
            ),
            220 =>
            array (
                'id' => 221,
                'name' => 'Misiones',
                'country_id' => 10,
                'arab_name' => 'Misiones',
            ),
            221 =>
            array (
                'id' => 222,
                'name' => 'Neuquen',
                'country_id' => 10,
                'arab_name' => 'Neuquen',
            ),
            222 =>
            array (
                'id' => 223,
                'name' => 'Rio Negro',
                'country_id' => 10,
                'arab_name' => 'Rio Negro',
            ),
            223 =>
            array (
                'id' => 224,
                'name' => 'Salta',
                'country_id' => 10,
                'arab_name' => 'Salta',
            ),
            224 =>
            array (
                'id' => 225,
                'name' => 'San Juan',
                'country_id' => 10,
                'arab_name' => 'San Juan',
            ),
            225 =>
            array (
                'id' => 226,
                'name' => 'San Luis',
                'country_id' => 10,
                'arab_name' => 'San Luis',
            ),
            226 =>
            array (
                'id' => 227,
                'name' => 'Santa Cruz',
                'country_id' => 10,
                'arab_name' => 'Santa Cruz',
            ),
            227 =>
            array (
                'id' => 228,
                'name' => 'Santa Fe',
                'country_id' => 10,
                'arab_name' => 'Santa Fe',
            ),
            228 =>
            array (
                'id' => 229,
                'name' => 'Santiago del Estero',
                'country_id' => 10,
                'arab_name' => 'Santiago del Estero',
            ),
            229 =>
            array (
                'id' => 230,
                'name' => 'Tierra del Fuego',
                'country_id' => 10,
                'arab_name' => 'Tierra del Fuego',
            ),
            230 =>
            array (
                'id' => 231,
                'name' => 'Tucuman',
                'country_id' => 10,
                'arab_name' => 'Tucuman',
            ),
            231 =>
            array (
                'id' => 232,
                'name' => 'Aragatsotn',
                'country_id' => 11,
                'arab_name' => 'Aragatsotn',
            ),
            232 =>
            array (
                'id' => 233,
                'name' => 'Ararat',
                'country_id' => 11,
                'arab_name' => 'Ararat',
            ),
            233 =>
            array (
                'id' => 234,
                'name' => 'Armavir',
                'country_id' => 11,
                'arab_name' => 'Armavir',
            ),
            234 =>
            array (
                'id' => 235,
                'name' => 'Gegharkunik',
                'country_id' => 11,
                'arab_name' => 'Gegharkunik',
            ),
            235 =>
            array (
                'id' => 236,
                'name' => 'Kotaik',
                'country_id' => 11,
                'arab_name' => 'Kotaik',
            ),
            236 =>
            array (
                'id' => 237,
                'name' => 'Lori',
                'country_id' => 11,
                'arab_name' => 'Lori',
            ),
            237 =>
            array (
                'id' => 238,
                'name' => 'Shirak',
                'country_id' => 11,
                'arab_name' => 'Shirak',
            ),
            238 =>
            array (
                'id' => 239,
                'name' => 'Stepanakert',
                'country_id' => 11,
                'arab_name' => 'Stepanakert',
            ),
            239 =>
            array (
                'id' => 240,
                'name' => 'Syunik',
                'country_id' => 11,
                'arab_name' => 'Syunik',
            ),
            240 =>
            array (
                'id' => 241,
                'name' => 'Tavush',
                'country_id' => 11,
                'arab_name' => 'Tavush',
            ),
            241 =>
            array (
                'id' => 242,
                'name' => 'Vayots Dzor',
                'country_id' => 11,
                'arab_name' => 'Vayots Dzor',
            ),
            242 =>
            array (
                'id' => 243,
                'name' => 'Yerevan',
                'country_id' => 11,
                'arab_name' => 'Yerevan',
            ),
            243 =>
            array (
                'id' => 244,
                'name' => 'Aruba',
                'country_id' => 12,
                'arab_name' => 'Aruba',
            ),
            244 =>
            array (
                'id' => 245,
                'name' => 'Auckland',
                'country_id' => 13,
                'arab_name' => 'Auckland',
            ),
            245 =>
            array (
                'id' => 246,
                'name' => 'Australian Capital Territory',
                'country_id' => 13,
                'arab_name' => 'Australian Capital Territory',
            ),
            246 =>
            array (
                'id' => 247,
                'name' => 'Balgowlah',
                'country_id' => 13,
                'arab_name' => 'Balgowlah',
            ),
            247 =>
            array (
                'id' => 248,
                'name' => 'Balmain',
                'country_id' => 13,
                'arab_name' => 'Balmain',
            ),
            248 =>
            array (
                'id' => 249,
                'name' => 'Bankstown',
                'country_id' => 13,
                'arab_name' => 'Bankstown',
            ),
            249 =>
            array (
                'id' => 250,
                'name' => 'Baulkham Hills',
                'country_id' => 13,
                'arab_name' => 'Baulkham Hills',
            ),
            250 =>
            array (
                'id' => 251,
                'name' => 'Bonnet Bay',
                'country_id' => 13,
                'arab_name' => 'Bonnet Bay',
            ),
            251 =>
            array (
                'id' => 252,
                'name' => 'Camberwell',
                'country_id' => 13,
                'arab_name' => 'Camberwell',
            ),
            252 =>
            array (
                'id' => 253,
                'name' => 'Carole Park',
                'country_id' => 13,
                'arab_name' => 'Carole Park',
            ),
            253 =>
            array (
                'id' => 254,
                'name' => 'Castle Hill',
                'country_id' => 13,
                'arab_name' => 'Castle Hill',
            ),
            254 =>
            array (
                'id' => 255,
                'name' => 'Caulfield',
                'country_id' => 13,
                'arab_name' => 'Caulfield',
            ),
            255 =>
            array (
                'id' => 256,
                'name' => 'Chatswood',
                'country_id' => 13,
                'arab_name' => 'Chatswood',
            ),
            256 =>
            array (
                'id' => 257,
                'name' => 'Cheltenham',
                'country_id' => 13,
                'arab_name' => 'Cheltenham',
            ),
            257 =>
            array (
                'id' => 258,
                'name' => 'Cherrybrook',
                'country_id' => 13,
                'arab_name' => 'Cherrybrook',
            ),
            258 =>
            array (
                'id' => 259,
                'name' => 'Clayton',
                'country_id' => 13,
                'arab_name' => 'Clayton',
            ),
            259 =>
            array (
                'id' => 260,
                'name' => 'Collingwood',
                'country_id' => 13,
                'arab_name' => 'Collingwood',
            ),
            260 =>
            array (
                'id' => 261,
                'name' => 'Frenchs Forest',
                'country_id' => 13,
                'arab_name' => 'Frenchs Forest',
            ),
            261 =>
            array (
                'id' => 262,
                'name' => 'Hawthorn',
                'country_id' => 13,
                'arab_name' => 'Hawthorn',
            ),
            262 =>
            array (
                'id' => 263,
                'name' => 'Jannnali',
                'country_id' => 13,
                'arab_name' => 'Jannnali',
            ),
            263 =>
            array (
                'id' => 264,
                'name' => 'Knoxfield',
                'country_id' => 13,
                'arab_name' => 'Knoxfield',
            ),
            264 =>
            array (
                'id' => 265,
                'name' => 'Melbourne',
                'country_id' => 13,
                'arab_name' => 'Melbourne',
            ),
            265 =>
            array (
                'id' => 266,
                'name' => 'New South Wales',
                'country_id' => 13,
                'arab_name' => 'New South Wales',
            ),
            266 =>
            array (
                'id' => 267,
                'name' => 'Northern Territory',
                'country_id' => 13,
                'arab_name' => 'Northern Territory',
            ),
            267 =>
            array (
                'id' => 268,
                'name' => 'Perth',
                'country_id' => 13,
                'arab_name' => 'Perth',
            ),
            268 =>
            array (
                'id' => 269,
                'name' => 'Queensland',
                'country_id' => 13,
                'arab_name' => 'Queensland',
            ),
            269 =>
            array (
                'id' => 270,
                'name' => 'South Australia',
                'country_id' => 13,
                'arab_name' => 'South Australia',
            ),
            270 =>
            array (
                'id' => 271,
                'name' => 'Tasmania',
                'country_id' => 13,
                'arab_name' => 'Tasmania',
            ),
            271 =>
            array (
                'id' => 272,
                'name' => 'Templestowe',
                'country_id' => 13,
                'arab_name' => 'Templestowe',
            ),
            272 =>
            array (
                'id' => 273,
                'name' => 'Victoria',
                'country_id' => 13,
                'arab_name' => 'Victoria',
            ),
            273 =>
            array (
                'id' => 274,
                'name' => 'Werribee south',
                'country_id' => 13,
                'arab_name' => 'Werribee south',
            ),
            274 =>
            array (
                'id' => 275,
                'name' => 'Western Australia',
                'country_id' => 13,
                'arab_name' => 'Western Australia',
            ),
            275 =>
            array (
                'id' => 276,
                'name' => 'Wheeler',
                'country_id' => 13,
                'arab_name' => 'Wheeler',
            ),
            276 =>
            array (
                'id' => 277,
                'name' => 'Bundesland Salzburg',
                'country_id' => 14,
                'arab_name' => 'Bundesland Salzburg',
            ),
            277 =>
            array (
                'id' => 278,
                'name' => 'Bundesland Steiermark',
                'country_id' => 14,
                'arab_name' => 'Bundesland Steiermark',
            ),
            278 =>
            array (
                'id' => 279,
                'name' => 'Bundesland Tirol',
                'country_id' => 14,
                'arab_name' => 'Bundesland Tirol',
            ),
            279 =>
            array (
                'id' => 280,
                'name' => 'Burgenland',
                'country_id' => 14,
                'arab_name' => 'Burgenland',
            ),
            280 =>
            array (
                'id' => 281,
                'name' => 'Carinthia',
                'country_id' => 14,
                'arab_name' => 'Carinthia',
            ),
            281 =>
            array (
                'id' => 282,
                'name' => 'Karnten',
                'country_id' => 14,
                'arab_name' => 'Karnten',
            ),
            282 =>
            array (
                'id' => 283,
                'name' => 'Liezen',
                'country_id' => 14,
                'arab_name' => 'Liezen',
            ),
            283 =>
            array (
                'id' => 284,
                'name' => 'Lower Austria',
                'country_id' => 14,
                'arab_name' => 'Lower Austria',
            ),
            284 =>
            array (
                'id' => 285,
                'name' => 'Niederosterreich',
                'country_id' => 14,
                'arab_name' => 'Niederosterreich',
            ),
            285 =>
            array (
                'id' => 286,
                'name' => 'Oberosterreich',
                'country_id' => 14,
                'arab_name' => 'Oberosterreich',
            ),
            286 =>
            array (
                'id' => 287,
                'name' => 'Salzburg',
                'country_id' => 14,
                'arab_name' => 'Salzburg',
            ),
            287 =>
            array (
                'id' => 288,
                'name' => 'Schleswig-Holstein',
                'country_id' => 14,
                'arab_name' => 'Schleswig-Holstein',
            ),
            288 =>
            array (
                'id' => 289,
                'name' => 'Steiermark',
                'country_id' => 14,
                'arab_name' => 'Steiermark',
            ),
            289 =>
            array (
                'id' => 290,
                'name' => 'Styria',
                'country_id' => 14,
                'arab_name' => 'Styria',
            ),
            290 =>
            array (
                'id' => 291,
                'name' => 'Tirol',
                'country_id' => 14,
                'arab_name' => 'Tirol',
            ),
            291 =>
            array (
                'id' => 292,
                'name' => 'Upper Austria',
                'country_id' => 14,
                'arab_name' => 'Upper Austria',
            ),
            292 =>
            array (
                'id' => 293,
                'name' => 'Vorarlberg',
                'country_id' => 14,
                'arab_name' => 'Vorarlberg',
            ),
            293 =>
            array (
                'id' => 294,
                'name' => 'Wien',
                'country_id' => 14,
                'arab_name' => 'Wien',
            ),
            294 =>
            array (
                'id' => 295,
                'name' => 'Abseron',
                'country_id' => 15,
                'arab_name' => 'Abseron',
            ),
            295 =>
            array (
                'id' => 296,
                'name' => 'Baki Sahari',
                'country_id' => 15,
                'arab_name' => 'Baki Sahari',
            ),
            296 =>
            array (
                'id' => 297,
                'name' => 'Ganca',
                'country_id' => 15,
                'arab_name' => 'Ganca',
            ),
            297 =>
            array (
                'id' => 298,
                'name' => 'Ganja',
                'country_id' => 15,
                'arab_name' => 'Ganja',
            ),
            298 =>
            array (
                'id' => 299,
                'name' => 'Kalbacar',
                'country_id' => 15,
                'arab_name' => 'Kalbacar',
            ),
            299 =>
            array (
                'id' => 300,
                'name' => 'Lankaran',
                'country_id' => 15,
                'arab_name' => 'Lankaran',
            ),
            300 =>
            array (
                'id' => 301,
                'name' => 'Mil-Qarabax',
                'country_id' => 15,
                'arab_name' => 'Mil-Qarabax',
            ),
            301 =>
            array (
                'id' => 302,
                'name' => 'Mugan-Salyan',
                'country_id' => 15,
                'arab_name' => 'Mugan-Salyan',
            ),
            302 =>
            array (
                'id' => 303,
                'name' => 'Nagorni-Qarabax',
                'country_id' => 15,
                'arab_name' => 'Nagorni-Qarabax',
            ),
            303 =>
            array (
                'id' => 304,
                'name' => 'Naxcivan',
                'country_id' => 15,
                'arab_name' => 'Naxcivan',
            ),
            304 =>
            array (
                'id' => 305,
                'name' => 'Priaraks',
                'country_id' => 15,
                'arab_name' => 'Priaraks',
            ),
            305 =>
            array (
                'id' => 306,
                'name' => 'Qazax',
                'country_id' => 15,
                'arab_name' => 'Qazax',
            ),
            306 =>
            array (
                'id' => 307,
                'name' => 'Saki',
                'country_id' => 15,
                'arab_name' => 'Saki',
            ),
            307 =>
            array (
                'id' => 308,
                'name' => 'Sirvan',
                'country_id' => 15,
                'arab_name' => 'Sirvan',
            ),
            308 =>
            array (
                'id' => 309,
                'name' => 'Xacmaz',
                'country_id' => 15,
                'arab_name' => 'Xacmaz',
            ),
            309 =>
            array (
                'id' => 310,
                'name' => 'Abaco',
                'country_id' => 16,
                'arab_name' => 'Abaco',
            ),
            310 =>
            array (
                'id' => 311,
                'name' => 'Acklins Island',
                'country_id' => 16,
                'arab_name' => 'Acklins Island',
            ),
            311 =>
            array (
                'id' => 312,
                'name' => 'Andros',
                'country_id' => 16,
                'arab_name' => 'Andros',
            ),
            312 =>
            array (
                'id' => 313,
                'name' => 'Berry Islands',
                'country_id' => 16,
                'arab_name' => 'Berry Islands',
            ),
            313 =>
            array (
                'id' => 314,
                'name' => 'Biminis',
                'country_id' => 16,
                'arab_name' => 'Biminis',
            ),
            314 =>
            array (
                'id' => 315,
                'name' => 'Cat Island',
                'country_id' => 16,
                'arab_name' => 'Cat Island',
            ),
            315 =>
            array (
                'id' => 316,
                'name' => 'Crooked Island',
                'country_id' => 16,
                'arab_name' => 'Crooked Island',
            ),
            316 =>
            array (
                'id' => 317,
                'name' => 'Eleuthera',
                'country_id' => 16,
                'arab_name' => 'Eleuthera',
            ),
            317 =>
            array (
                'id' => 318,
                'name' => 'Exuma and Cays',
                'country_id' => 16,
                'arab_name' => 'Exuma and Cays',
            ),
            318 =>
            array (
                'id' => 319,
                'name' => 'Grand Bahama',
                'country_id' => 16,
                'arab_name' => 'Grand Bahama',
            ),
            319 =>
            array (
                'id' => 320,
                'name' => 'Inagua Islands',
                'country_id' => 16,
                'arab_name' => 'Inagua Islands',
            ),
            320 =>
            array (
                'id' => 321,
                'name' => 'Long Island',
                'country_id' => 16,
                'arab_name' => 'Long Island',
            ),
            321 =>
            array (
                'id' => 322,
                'name' => 'Mayaguana',
                'country_id' => 16,
                'arab_name' => 'Mayaguana',
            ),
            322 =>
            array (
                'id' => 323,
                'name' => 'New Providence',
                'country_id' => 16,
                'arab_name' => 'New Providence',
            ),
            323 =>
            array (
                'id' => 324,
                'name' => 'Ragged Island',
                'country_id' => 16,
                'arab_name' => 'Ragged Island',
            ),
            324 =>
            array (
                'id' => 325,
                'name' => 'Rum Cay',
                'country_id' => 16,
                'arab_name' => 'Rum Cay',
            ),
            325 =>
            array (
                'id' => 326,
                'name' => 'San Salvador',
                'country_id' => 16,
                'arab_name' => 'San Salvador',
            ),
            326 =>
            array (
                'id' => 327,
                'name' => '\'Isa',
                'country_id' => 17,
                'arab_name' => '\'Isa',
            ),
            327 =>
            array (
                'id' => 328,
                'name' => 'Badiyah',
                'country_id' => 17,
                'arab_name' => 'Badiyah',
            ),
            328 =>
            array (
                'id' => 329,
                'name' => 'Hidd',
                'country_id' => 17,
                'arab_name' => 'Hidd',
            ),
            329 =>
            array (
                'id' => 330,
                'name' => 'Jidd Hafs',
                'country_id' => 17,
                'arab_name' => 'Jidd Hafs',
            ),
            330 =>
            array (
                'id' => 331,
                'name' => 'Mahama',
                'country_id' => 17,
                'arab_name' => 'Mahama',
            ),
            331 =>
            array (
                'id' => 332,
                'name' => 'Manama',
                'country_id' => 17,
                'arab_name' => 'Manama',
            ),
            332 =>
            array (
                'id' => 333,
                'name' => 'Sitrah',
                'country_id' => 17,
                'arab_name' => 'Sitrah',
            ),
            333 =>
            array (
                'id' => 334,
                'name' => 'al-Manamah',
                'country_id' => 17,
                'arab_name' => 'al-Manamah',
            ),
            334 =>
            array (
                'id' => 335,
                'name' => 'al-Muharraq',
                'country_id' => 17,
                'arab_name' => 'al-Muharraq',
            ),
            335 =>
            array (
                'id' => 336,
                'name' => 'ar-Rifa\'a',
                'country_id' => 17,
                'arab_name' => 'ar-Rifa\'a',
            ),
            336 =>
            array (
                'id' => 337,
                'name' => 'Bagar Hat',
                'country_id' => 18,
                'arab_name' => 'Bagar Hat',
            ),
            337 =>
            array (
                'id' => 338,
                'name' => 'Bandarban',
                'country_id' => 18,
                'arab_name' => 'Bandarban',
            ),
            338 =>
            array (
                'id' => 339,
                'name' => 'Barguna',
                'country_id' => 18,
                'arab_name' => 'Barguna',
            ),
            339 =>
            array (
                'id' => 340,
                'name' => 'Barisal',
                'country_id' => 18,
                'arab_name' => 'Barisal',
            ),
            340 =>
            array (
                'id' => 341,
                'name' => 'Bhola',
                'country_id' => 18,
                'arab_name' => 'Bhola',
            ),
            341 =>
            array (
                'id' => 342,
                'name' => 'Bogora',
                'country_id' => 18,
                'arab_name' => 'Bogora',
            ),
            342 =>
            array (
                'id' => 343,
                'name' => 'Brahman Bariya',
                'country_id' => 18,
                'arab_name' => 'Brahman Bariya',
            ),
            343 =>
            array (
                'id' => 344,
                'name' => 'Chandpur',
                'country_id' => 18,
                'arab_name' => 'Chandpur',
            ),
            344 =>
            array (
                'id' => 345,
                'name' => 'Chattagam',
                'country_id' => 18,
                'arab_name' => 'Chattagam',
            ),
            345 =>
            array (
                'id' => 346,
                'name' => 'Chittagong Division',
                'country_id' => 18,
                'arab_name' => 'Chittagong Division',
            ),
            346 =>
            array (
                'id' => 347,
                'name' => 'Chuadanga',
                'country_id' => 18,
                'arab_name' => 'Chuadanga',
            ),
            347 =>
            array (
                'id' => 348,
                'name' => 'Dhaka',
                'country_id' => 18,
                'arab_name' => 'Dhaka',
            ),
            348 =>
            array (
                'id' => 349,
                'name' => 'Dinajpur',
                'country_id' => 18,
                'arab_name' => 'Dinajpur',
            ),
            349 =>
            array (
                'id' => 350,
                'name' => 'Faridpur',
                'country_id' => 18,
                'arab_name' => 'Faridpur',
            ),
            350 =>
            array (
                'id' => 351,
                'name' => 'Feni',
                'country_id' => 18,
                'arab_name' => 'Feni',
            ),
            351 =>
            array (
                'id' => 352,
                'name' => 'Gaybanda',
                'country_id' => 18,
                'arab_name' => 'Gaybanda',
            ),
            352 =>
            array (
                'id' => 353,
                'name' => 'Gazipur',
                'country_id' => 18,
                'arab_name' => 'Gazipur',
            ),
            353 =>
            array (
                'id' => 354,
                'name' => 'Gopalganj',
                'country_id' => 18,
                'arab_name' => 'Gopalganj',
            ),
            354 =>
            array (
                'id' => 355,
                'name' => 'Habiganj',
                'country_id' => 18,
                'arab_name' => 'Habiganj',
            ),
            355 =>
            array (
                'id' => 356,
                'name' => 'Jaipur Hat',
                'country_id' => 18,
                'arab_name' => 'Jaipur Hat',
            ),
            356 =>
            array (
                'id' => 357,
                'name' => 'Jamalpur',
                'country_id' => 18,
                'arab_name' => 'Jamalpur',
            ),
            357 =>
            array (
                'id' => 358,
                'name' => 'Jessor',
                'country_id' => 18,
                'arab_name' => 'Jessor',
            ),
            358 =>
            array (
                'id' => 359,
                'name' => 'Jhalakati',
                'country_id' => 18,
                'arab_name' => 'Jhalakati',
            ),
            359 =>
            array (
                'id' => 360,
                'name' => 'Jhanaydah',
                'country_id' => 18,
                'arab_name' => 'Jhanaydah',
            ),
            360 =>
            array (
                'id' => 361,
                'name' => 'Khagrachhari',
                'country_id' => 18,
                'arab_name' => 'Khagrachhari',
            ),
            361 =>
            array (
                'id' => 362,
                'name' => 'Khulna',
                'country_id' => 18,
                'arab_name' => 'Khulna',
            ),
            362 =>
            array (
                'id' => 363,
                'name' => 'Kishorganj',
                'country_id' => 18,
                'arab_name' => 'Kishorganj',
            ),
            363 =>
            array (
                'id' => 364,
                'name' => 'Koks Bazar',
                'country_id' => 18,
                'arab_name' => 'Koks Bazar',
            ),
            364 =>
            array (
                'id' => 365,
                'name' => 'Komilla',
                'country_id' => 18,
                'arab_name' => 'Komilla',
            ),
            365 =>
            array (
                'id' => 366,
                'name' => 'Kurigram',
                'country_id' => 18,
                'arab_name' => 'Kurigram',
            ),
            366 =>
            array (
                'id' => 367,
                'name' => 'Kushtiya',
                'country_id' => 18,
                'arab_name' => 'Kushtiya',
            ),
            367 =>
            array (
                'id' => 368,
                'name' => 'Lakshmipur',
                'country_id' => 18,
                'arab_name' => 'Lakshmipur',
            ),
            368 =>
            array (
                'id' => 369,
                'name' => 'Lalmanir Hat',
                'country_id' => 18,
                'arab_name' => 'Lalmanir Hat',
            ),
            369 =>
            array (
                'id' => 370,
                'name' => 'Madaripur',
                'country_id' => 18,
                'arab_name' => 'Madaripur',
            ),
            370 =>
            array (
                'id' => 371,
                'name' => 'Magura',
                'country_id' => 18,
                'arab_name' => 'Magura',
            ),
            371 =>
            array (
                'id' => 372,
                'name' => 'Maimansingh',
                'country_id' => 18,
                'arab_name' => 'Maimansingh',
            ),
            372 =>
            array (
                'id' => 373,
                'name' => 'Manikganj',
                'country_id' => 18,
                'arab_name' => 'Manikganj',
            ),
            373 =>
            array (
                'id' => 374,
                'name' => 'Maulvi Bazar',
                'country_id' => 18,
                'arab_name' => 'Maulvi Bazar',
            ),
            374 =>
            array (
                'id' => 375,
                'name' => 'Meherpur',
                'country_id' => 18,
                'arab_name' => 'Meherpur',
            ),
            375 =>
            array (
                'id' => 376,
                'name' => 'Munshiganj',
                'country_id' => 18,
                'arab_name' => 'Munshiganj',
            ),
            376 =>
            array (
                'id' => 377,
                'name' => 'Naral',
                'country_id' => 18,
                'arab_name' => 'Naral',
            ),
            377 =>
            array (
                'id' => 378,
                'name' => 'Narayanganj',
                'country_id' => 18,
                'arab_name' => 'Narayanganj',
            ),
            378 =>
            array (
                'id' => 379,
                'name' => 'Narsingdi',
                'country_id' => 18,
                'arab_name' => 'Narsingdi',
            ),
            379 =>
            array (
                'id' => 380,
                'name' => 'Nator',
                'country_id' => 18,
                'arab_name' => 'Nator',
            ),
            380 =>
            array (
                'id' => 381,
                'name' => 'Naugaon',
                'country_id' => 18,
                'arab_name' => 'Naugaon',
            ),
            381 =>
            array (
                'id' => 382,
                'name' => 'Nawabganj',
                'country_id' => 18,
                'arab_name' => 'Nawabganj',
            ),
            382 =>
            array (
                'id' => 383,
                'name' => 'Netrakona',
                'country_id' => 18,
                'arab_name' => 'Netrakona',
            ),
            383 =>
            array (
                'id' => 384,
                'name' => 'Nilphamari',
                'country_id' => 18,
                'arab_name' => 'Nilphamari',
            ),
            384 =>
            array (
                'id' => 385,
                'name' => 'Noakhali',
                'country_id' => 18,
                'arab_name' => 'Noakhali',
            ),
            385 =>
            array (
                'id' => 386,
                'name' => 'Pabna',
                'country_id' => 18,
                'arab_name' => 'Pabna',
            ),
            386 =>
            array (
                'id' => 387,
                'name' => 'Panchagarh',
                'country_id' => 18,
                'arab_name' => 'Panchagarh',
            ),
            387 =>
            array (
                'id' => 388,
                'name' => 'Patuakhali',
                'country_id' => 18,
                'arab_name' => 'Patuakhali',
            ),
            388 =>
            array (
                'id' => 389,
                'name' => 'Pirojpur',
                'country_id' => 18,
                'arab_name' => 'Pirojpur',
            ),
            389 =>
            array (
                'id' => 390,
                'name' => 'Rajbari',
                'country_id' => 18,
                'arab_name' => 'Rajbari',
            ),
            390 =>
            array (
                'id' => 391,
                'name' => 'Rajshahi',
                'country_id' => 18,
                'arab_name' => 'Rajshahi',
            ),
            391 =>
            array (
                'id' => 392,
                'name' => 'Rangamati',
                'country_id' => 18,
                'arab_name' => 'Rangamati',
            ),
            392 =>
            array (
                'id' => 393,
                'name' => 'Rangpur',
                'country_id' => 18,
                'arab_name' => 'Rangpur',
            ),
            393 =>
            array (
                'id' => 394,
                'name' => 'Satkhira',
                'country_id' => 18,
                'arab_name' => 'Satkhira',
            ),
            394 =>
            array (
                'id' => 395,
                'name' => 'Shariatpur',
                'country_id' => 18,
                'arab_name' => 'Shariatpur',
            ),
            395 =>
            array (
                'id' => 396,
                'name' => 'Sherpur',
                'country_id' => 18,
                'arab_name' => 'Sherpur',
            ),
            396 =>
            array (
                'id' => 397,
                'name' => 'Silhat',
                'country_id' => 18,
                'arab_name' => 'Silhat',
            ),
            397 =>
            array (
                'id' => 398,
                'name' => 'Sirajganj',
                'country_id' => 18,
                'arab_name' => 'Sirajganj',
            ),
            398 =>
            array (
                'id' => 399,
                'name' => 'Sunamganj',
                'country_id' => 18,
                'arab_name' => 'Sunamganj',
            ),
            399 =>
            array (
                'id' => 400,
                'name' => 'Tangayal',
                'country_id' => 18,
                'arab_name' => 'Tangayal',
            ),
            400 =>
            array (
                'id' => 401,
                'name' => 'Thakurgaon',
                'country_id' => 18,
                'arab_name' => 'Thakurgaon',
            ),
            401 =>
            array (
                'id' => 402,
                'name' => 'Christ Church',
                'country_id' => 19,
                'arab_name' => 'Christ Church',
            ),
            402 =>
            array (
                'id' => 403,
                'name' => 'Saint Andrew',
                'country_id' => 19,
                'arab_name' => 'Saint Andrew',
            ),
            403 =>
            array (
                'id' => 404,
                'name' => 'Saint George',
                'country_id' => 19,
                'arab_name' => 'Saint George',
            ),
            404 =>
            array (
                'id' => 405,
                'name' => 'Saint James',
                'country_id' => 19,
                'arab_name' => 'Saint James',
            ),
            405 =>
            array (
                'id' => 406,
                'name' => 'Saint John',
                'country_id' => 19,
                'arab_name' => 'Saint John',
            ),
            406 =>
            array (
                'id' => 407,
                'name' => 'Saint Joseph',
                'country_id' => 19,
                'arab_name' => 'Saint Joseph',
            ),
            407 =>
            array (
                'id' => 408,
                'name' => 'Saint Lucy',
                'country_id' => 19,
                'arab_name' => 'Saint Lucy',
            ),
            408 =>
            array (
                'id' => 409,
                'name' => 'Saint Michael',
                'country_id' => 19,
                'arab_name' => 'Saint Michael',
            ),
            409 =>
            array (
                'id' => 410,
                'name' => 'Saint Peter',
                'country_id' => 19,
                'arab_name' => 'Saint Peter',
            ),
            410 =>
            array (
                'id' => 411,
                'name' => 'Saint Philip',
                'country_id' => 19,
                'arab_name' => 'Saint Philip',
            ),
            411 =>
            array (
                'id' => 412,
                'name' => 'Saint Thomas',
                'country_id' => 19,
                'arab_name' => 'Saint Thomas',
            ),
            412 =>
            array (
                'id' => 413,
                'name' => 'Brest',
                'country_id' => 20,
                'arab_name' => 'Brest',
            ),
            413 =>
            array (
                'id' => 414,
                'name' => 'Homjel\'',
                'country_id' => 20,
                'arab_name' => 'Homjel\'',
            ),
            414 =>
            array (
                'id' => 415,
                'name' => 'Hrodna',
                'country_id' => 20,
                'arab_name' => 'Hrodna',
            ),
            415 =>
            array (
                'id' => 416,
                'name' => 'Mahiljow',
                'country_id' => 20,
                'arab_name' => 'Mahiljow',
            ),
            416 =>
            array (
                'id' => 417,
                'name' => 'Mahilyowskaya Voblasts',
                'country_id' => 20,
                'arab_name' => 'Mahilyowskaya Voblasts',
            ),
            417 =>
            array (
                'id' => 418,
                'name' => 'Minsk',
                'country_id' => 20,
                'arab_name' => 'Minsk',
            ),
            418 =>
            array (
                'id' => 419,
                'name' => 'Minskaja Voblasts\'',
                'country_id' => 20,
                'arab_name' => 'Minskaja Voblasts\'',
            ),
            419 =>
            array (
                'id' => 420,
                'name' => 'Petrik',
                'country_id' => 20,
                'arab_name' => 'Petrik',
            ),
            420 =>
            array (
                'id' => 421,
                'name' => 'Vicebsk',
                'country_id' => 20,
                'arab_name' => 'Vicebsk',
            ),
            421 =>
            array (
                'id' => 422,
                'name' => 'Antwerpen',
                'country_id' => 21,
                'arab_name' => 'Antwerpen',
            ),
            422 =>
            array (
                'id' => 423,
                'name' => 'Berchem',
                'country_id' => 21,
                'arab_name' => 'Berchem',
            ),
            423 =>
            array (
                'id' => 424,
                'name' => 'Brabant',
                'country_id' => 21,
                'arab_name' => 'Brabant',
            ),
            424 =>
            array (
                'id' => 425,
                'name' => 'Brabant Wallon',
                'country_id' => 21,
                'arab_name' => 'Brabant Wallon',
            ),
            425 =>
            array (
                'id' => 426,
                'name' => 'Brussel',
                'country_id' => 21,
                'arab_name' => 'Brussel',
            ),
            426 =>
            array (
                'id' => 427,
                'name' => 'East Flanders',
                'country_id' => 21,
                'arab_name' => 'East Flanders',
            ),
            427 =>
            array (
                'id' => 428,
                'name' => 'Hainaut',
                'country_id' => 21,
                'arab_name' => 'Hainaut',
            ),
            428 =>
            array (
                'id' => 429,
                'name' => 'Liege',
                'country_id' => 21,
                'arab_name' => 'Liege',
            ),
            429 =>
            array (
                'id' => 430,
                'name' => 'Limburg',
                'country_id' => 21,
                'arab_name' => 'Limburg',
            ),
            430 =>
            array (
                'id' => 431,
                'name' => 'Luxembourg',
                'country_id' => 21,
                'arab_name' => 'Luxembourg',
            ),
            431 =>
            array (
                'id' => 432,
                'name' => 'Namur',
                'country_id' => 21,
                'arab_name' => 'Namur',
            ),
            432 =>
            array (
                'id' => 433,
                'name' => 'Ontario',
                'country_id' => 21,
                'arab_name' => 'Ontario',
            ),
            433 =>
            array (
                'id' => 434,
                'name' => 'Oost-Vlaanderen',
                'country_id' => 21,
                'arab_name' => 'Oost-Vlaanderen',
            ),
            434 =>
            array (
                'id' => 435,
                'name' => 'Provincie Brabant',
                'country_id' => 21,
                'arab_name' => 'Provincie Brabant',
            ),
            435 =>
            array (
                'id' => 436,
                'name' => 'Vlaams-Brabant',
                'country_id' => 21,
                'arab_name' => 'Vlaams-Brabant',
            ),
            436 =>
            array (
                'id' => 437,
                'name' => 'Wallonne',
                'country_id' => 21,
                'arab_name' => 'Wallonne',
            ),
            437 =>
            array (
                'id' => 438,
                'name' => 'West-Vlaanderen',
                'country_id' => 21,
                'arab_name' => 'West-Vlaanderen',
            ),
            438 =>
            array (
                'id' => 439,
                'name' => 'Belize',
                'country_id' => 22,
                'arab_name' => 'Belize',
            ),
            439 =>
            array (
                'id' => 440,
                'name' => 'Cayo',
                'country_id' => 22,
                'arab_name' => 'Cayo',
            ),
            440 =>
            array (
                'id' => 441,
                'name' => 'Corozal',
                'country_id' => 22,
                'arab_name' => 'Corozal',
            ),
            441 =>
            array (
                'id' => 442,
                'name' => 'Orange Walk',
                'country_id' => 22,
                'arab_name' => 'Orange Walk',
            ),
            442 =>
            array (
                'id' => 443,
                'name' => 'Stann Creek',
                'country_id' => 22,
                'arab_name' => 'Stann Creek',
            ),
            443 =>
            array (
                'id' => 444,
                'name' => 'Toledo',
                'country_id' => 22,
                'arab_name' => 'Toledo',
            ),
            444 =>
            array (
                'id' => 445,
                'name' => 'Alibori',
                'country_id' => 23,
                'arab_name' => 'Alibori',
            ),
            445 =>
            array (
                'id' => 446,
                'name' => 'Atacora',
                'country_id' => 23,
                'arab_name' => 'Atacora',
            ),
            446 =>
            array (
                'id' => 447,
                'name' => 'Atlantique',
                'country_id' => 23,
                'arab_name' => 'Atlantique',
            ),
            447 =>
            array (
                'id' => 448,
                'name' => 'Borgou',
                'country_id' => 23,
                'arab_name' => 'Borgou',
            ),
            448 =>
            array (
                'id' => 449,
                'name' => 'Collines',
                'country_id' => 23,
                'arab_name' => 'Collines',
            ),
            449 =>
            array (
                'id' => 450,
                'name' => 'Couffo',
                'country_id' => 23,
                'arab_name' => 'Couffo',
            ),
            450 =>
            array (
                'id' => 451,
                'name' => 'Donga',
                'country_id' => 23,
                'arab_name' => 'Donga',
            ),
            451 =>
            array (
                'id' => 452,
                'name' => 'Littoral',
                'country_id' => 23,
                'arab_name' => 'Littoral',
            ),
            452 =>
            array (
                'id' => 453,
                'name' => 'Mono',
                'country_id' => 23,
                'arab_name' => 'Mono',
            ),
            453 =>
            array (
                'id' => 454,
                'name' => 'Oueme',
                'country_id' => 23,
                'arab_name' => 'Oueme',
            ),
            454 =>
            array (
                'id' => 455,
                'name' => 'Plateau',
                'country_id' => 23,
                'arab_name' => 'Plateau',
            ),
            455 =>
            array (
                'id' => 456,
                'name' => 'Zou',
                'country_id' => 23,
                'arab_name' => 'Zou',
            ),
            456 =>
            array (
                'id' => 457,
                'name' => 'Hamilton',
                'country_id' => 24,
                'arab_name' => 'Hamilton',
            ),
            457 =>
            array (
                'id' => 458,
                'name' => 'Saint George',
                'country_id' => 24,
                'arab_name' => 'Saint George',
            ),
            458 =>
            array (
                'id' => 459,
                'name' => 'Bumthang',
                'country_id' => 25,
                'arab_name' => 'Bumthang',
            ),
            459 =>
            array (
                'id' => 460,
                'name' => 'Chhukha',
                'country_id' => 25,
                'arab_name' => 'Chhukha',
            ),
            460 =>
            array (
                'id' => 461,
                'name' => 'Chirang',
                'country_id' => 25,
                'arab_name' => 'Chirang',
            ),
            461 =>
            array (
                'id' => 462,
                'name' => 'Daga',
                'country_id' => 25,
                'arab_name' => 'Daga',
            ),
            462 =>
            array (
                'id' => 463,
                'name' => 'Geylegphug',
                'country_id' => 25,
                'arab_name' => 'Geylegphug',
            ),
            463 =>
            array (
                'id' => 464,
                'name' => 'Ha',
                'country_id' => 25,
                'arab_name' => 'Ha',
            ),
            464 =>
            array (
                'id' => 465,
                'name' => 'Lhuntshi',
                'country_id' => 25,
                'arab_name' => 'Lhuntshi',
            ),
            465 =>
            array (
                'id' => 466,
                'name' => 'Mongar',
                'country_id' => 25,
                'arab_name' => 'Mongar',
            ),
            466 =>
            array (
                'id' => 467,
                'name' => 'Pemagatsel',
                'country_id' => 25,
                'arab_name' => 'Pemagatsel',
            ),
            467 =>
            array (
                'id' => 468,
                'name' => 'Punakha',
                'country_id' => 25,
                'arab_name' => 'Punakha',
            ),
            468 =>
            array (
                'id' => 469,
                'name' => 'Rinpung',
                'country_id' => 25,
                'arab_name' => 'Rinpung',
            ),
            469 =>
            array (
                'id' => 470,
                'name' => 'Samchi',
                'country_id' => 25,
                'arab_name' => 'Samchi',
            ),
            470 =>
            array (
                'id' => 471,
                'name' => 'Samdrup Jongkhar',
                'country_id' => 25,
                'arab_name' => 'Samdrup Jongkhar',
            ),
            471 =>
            array (
                'id' => 472,
                'name' => 'Shemgang',
                'country_id' => 25,
                'arab_name' => 'Shemgang',
            ),
            472 =>
            array (
                'id' => 473,
                'name' => 'Tashigang',
                'country_id' => 25,
                'arab_name' => 'Tashigang',
            ),
            473 =>
            array (
                'id' => 474,
                'name' => 'Timphu',
                'country_id' => 25,
                'arab_name' => 'Timphu',
            ),
            474 =>
            array (
                'id' => 475,
                'name' => 'Tongsa',
                'country_id' => 25,
                'arab_name' => 'Tongsa',
            ),
            475 =>
            array (
                'id' => 476,
                'name' => 'Wangdiphodrang',
                'country_id' => 25,
                'arab_name' => 'Wangdiphodrang',
            ),
            476 =>
            array (
                'id' => 477,
                'name' => 'Beni',
                'country_id' => 26,
                'arab_name' => 'Beni',
            ),
            477 =>
            array (
                'id' => 478,
                'name' => 'Chuquisaca',
                'country_id' => 26,
                'arab_name' => 'Chuquisaca',
            ),
            478 =>
            array (
                'id' => 479,
                'name' => 'Cochabamba',
                'country_id' => 26,
                'arab_name' => 'Cochabamba',
            ),
            479 =>
            array (
                'id' => 480,
                'name' => 'La Paz',
                'country_id' => 26,
                'arab_name' => 'La Paz',
            ),
            480 =>
            array (
                'id' => 481,
                'name' => 'Oruro',
                'country_id' => 26,
                'arab_name' => 'Oruro',
            ),
            481 =>
            array (
                'id' => 482,
                'name' => 'Pando',
                'country_id' => 26,
                'arab_name' => 'Pando',
            ),
            482 =>
            array (
                'id' => 483,
                'name' => 'Potosi',
                'country_id' => 26,
                'arab_name' => 'Potosi',
            ),
            483 =>
            array (
                'id' => 484,
                'name' => 'Santa Cruz',
                'country_id' => 26,
                'arab_name' => 'Santa Cruz',
            ),
            484 =>
            array (
                'id' => 485,
                'name' => 'Tarija',
                'country_id' => 26,
                'arab_name' => 'Tarija',
            ),
            485 =>
            array (
                'id' => 486,
                'name' => 'Federacija Bosna i Hercegovina',
                'country_id' => 27,
                'arab_name' => 'Federacija Bosna i Hercegovina',
            ),
            486 =>
            array (
                'id' => 487,
                'name' => 'Republika Srpska',
                'country_id' => 27,
                'arab_name' => 'Republika Srpska',
            ),
            487 =>
            array (
                'id' => 488,
                'name' => 'Central Bobonong',
                'country_id' => 28,
                'arab_name' => 'Central Bobonong',
            ),
            488 =>
            array (
                'id' => 489,
                'name' => 'Central Boteti',
                'country_id' => 28,
                'arab_name' => 'Central Boteti',
            ),
            489 =>
            array (
                'id' => 490,
                'name' => 'Central Mahalapye',
                'country_id' => 28,
                'arab_name' => 'Central Mahalapye',
            ),
            490 =>
            array (
                'id' => 491,
                'name' => 'Central Serowe-Palapye',
                'country_id' => 28,
                'arab_name' => 'Central Serowe-Palapye',
            ),
            491 =>
            array (
                'id' => 492,
                'name' => 'Central Tutume',
                'country_id' => 28,
                'arab_name' => 'Central Tutume',
            ),
            492 =>
            array (
                'id' => 493,
                'name' => 'Chobe',
                'country_id' => 28,
                'arab_name' => 'Chobe',
            ),
            493 =>
            array (
                'id' => 494,
                'name' => 'Francistown',
                'country_id' => 28,
                'arab_name' => 'Francistown',
            ),
            494 =>
            array (
                'id' => 495,
                'name' => 'Gaborone',
                'country_id' => 28,
                'arab_name' => 'Gaborone',
            ),
            495 =>
            array (
                'id' => 496,
                'name' => 'Ghanzi',
                'country_id' => 28,
                'arab_name' => 'Ghanzi',
            ),
            496 =>
            array (
                'id' => 497,
                'name' => 'Jwaneng',
                'country_id' => 28,
                'arab_name' => 'Jwaneng',
            ),
            497 =>
            array (
                'id' => 498,
                'name' => 'Kgalagadi North',
                'country_id' => 28,
                'arab_name' => 'Kgalagadi North',
            ),
            498 =>
            array (
                'id' => 499,
                'name' => 'Kgalagadi South',
                'country_id' => 28,
                'arab_name' => 'Kgalagadi South',
            ),
            499 =>
            array (
                'id' => 500,
                'name' => 'Kgatleng',
                'country_id' => 28,
                'arab_name' => 'Kgatleng',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 501,
                'name' => 'Kweneng',
                'country_id' => 28,
                'arab_name' => 'Kweneng',
            ),
            1 =>
            array (
                'id' => 502,
                'name' => 'Lobatse',
                'country_id' => 28,
                'arab_name' => 'Lobatse',
            ),
            2 =>
            array (
                'id' => 503,
                'name' => 'Ngamiland',
                'country_id' => 28,
                'arab_name' => 'Ngamiland',
            ),
            3 =>
            array (
                'id' => 504,
                'name' => 'Ngwaketse',
                'country_id' => 28,
                'arab_name' => 'Ngwaketse',
            ),
            4 =>
            array (
                'id' => 505,
                'name' => 'North East',
                'country_id' => 28,
                'arab_name' => 'North East',
            ),
            5 =>
            array (
                'id' => 506,
                'name' => 'Okavango',
                'country_id' => 28,
                'arab_name' => 'Okavango',
            ),
            6 =>
            array (
                'id' => 507,
                'name' => 'Orapa',
                'country_id' => 28,
                'arab_name' => 'Orapa',
            ),
            7 =>
            array (
                'id' => 508,
                'name' => 'Selibe Phikwe',
                'country_id' => 28,
                'arab_name' => 'Selibe Phikwe',
            ),
            8 =>
            array (
                'id' => 509,
                'name' => 'South East',
                'country_id' => 28,
                'arab_name' => 'South East',
            ),
            9 =>
            array (
                'id' => 510,
                'name' => 'Sowa',
                'country_id' => 28,
                'arab_name' => 'Sowa',
            ),
            10 =>
            array (
                'id' => 511,
                'name' => 'Bouvet Island',
                'country_id' => 29,
                'arab_name' => 'Bouvet Island',
            ),
            11 =>
            array (
                'id' => 512,
                'name' => 'Acre',
                'country_id' => 30,
                'arab_name' => 'Acre',
            ),
            12 =>
            array (
                'id' => 513,
                'name' => 'Alagoas',
                'country_id' => 30,
                'arab_name' => 'Alagoas',
            ),
            13 =>
            array (
                'id' => 514,
                'name' => 'Amapa',
                'country_id' => 30,
                'arab_name' => 'Amapa',
            ),
            14 =>
            array (
                'id' => 515,
                'name' => 'Amazonas',
                'country_id' => 30,
                'arab_name' => 'Amazonas',
            ),
            15 =>
            array (
                'id' => 516,
                'name' => 'Bahia',
                'country_id' => 30,
                'arab_name' => 'Bahia',
            ),
            16 =>
            array (
                'id' => 517,
                'name' => 'Ceara',
                'country_id' => 30,
                'arab_name' => 'Ceara',
            ),
            17 =>
            array (
                'id' => 518,
                'name' => 'Distrito Federal',
                'country_id' => 30,
                'arab_name' => 'Distrito Federal',
            ),
            18 =>
            array (
                'id' => 519,
                'name' => 'Espirito Santo',
                'country_id' => 30,
                'arab_name' => 'Espirito Santo',
            ),
            19 =>
            array (
                'id' => 520,
                'name' => 'Estado de Sao Paulo',
                'country_id' => 30,
                'arab_name' => 'Estado de Sao Paulo',
            ),
            20 =>
            array (
                'id' => 521,
                'name' => 'Goias',
                'country_id' => 30,
                'arab_name' => 'Goias',
            ),
            21 =>
            array (
                'id' => 522,
                'name' => 'Maranhao',
                'country_id' => 30,
                'arab_name' => 'Maranhao',
            ),
            22 =>
            array (
                'id' => 523,
                'name' => 'Mato Grosso',
                'country_id' => 30,
                'arab_name' => 'Mato Grosso',
            ),
            23 =>
            array (
                'id' => 524,
                'name' => 'Mato Grosso do Sul',
                'country_id' => 30,
                'arab_name' => 'Mato Grosso do Sul',
            ),
            24 =>
            array (
                'id' => 525,
                'name' => 'Minas Gerais',
                'country_id' => 30,
                'arab_name' => 'Minas Gerais',
            ),
            25 =>
            array (
                'id' => 526,
                'name' => 'Para',
                'country_id' => 30,
                'arab_name' => 'Para',
            ),
            26 =>
            array (
                'id' => 527,
                'name' => 'Paraiba',
                'country_id' => 30,
                'arab_name' => 'Paraiba',
            ),
            27 =>
            array (
                'id' => 528,
                'name' => 'Parana',
                'country_id' => 30,
                'arab_name' => 'Parana',
            ),
            28 =>
            array (
                'id' => 529,
                'name' => 'Pernambuco',
                'country_id' => 30,
                'arab_name' => 'Pernambuco',
            ),
            29 =>
            array (
                'id' => 530,
                'name' => 'Piaui',
                'country_id' => 30,
                'arab_name' => 'Piaui',
            ),
            30 =>
            array (
                'id' => 531,
                'name' => 'Rio Grande do Norte',
                'country_id' => 30,
                'arab_name' => 'Rio Grande do Norte',
            ),
            31 =>
            array (
                'id' => 532,
                'name' => 'Rio Grande do Sul',
                'country_id' => 30,
                'arab_name' => 'Rio Grande do Sul',
            ),
            32 =>
            array (
                'id' => 533,
                'name' => 'Rio de Janeiro',
                'country_id' => 30,
                'arab_name' => 'Rio de Janeiro',
            ),
            33 =>
            array (
                'id' => 534,
                'name' => 'Rondonia',
                'country_id' => 30,
                'arab_name' => 'Rondonia',
            ),
            34 =>
            array (
                'id' => 535,
                'name' => 'Roraima',
                'country_id' => 30,
                'arab_name' => 'Roraima',
            ),
            35 =>
            array (
                'id' => 536,
                'name' => 'Santa Catarina',
                'country_id' => 30,
                'arab_name' => 'Santa Catarina',
            ),
            36 =>
            array (
                'id' => 537,
                'name' => 'Sao Paulo',
                'country_id' => 30,
                'arab_name' => 'Sao Paulo',
            ),
            37 =>
            array (
                'id' => 538,
                'name' => 'Sergipe',
                'country_id' => 30,
                'arab_name' => 'Sergipe',
            ),
            38 =>
            array (
                'id' => 539,
                'name' => 'Tocantins',
                'country_id' => 30,
                'arab_name' => 'Tocantins',
            ),
            39 =>
            array (
                'id' => 540,
                'name' => 'British Indian Ocean Territory',
                'country_id' => 31,
                'arab_name' => 'British Indian Ocean Territory',
            ),
            40 =>
            array (
                'id' => 541,
                'name' => 'Belait',
                'country_id' => 32,
                'arab_name' => 'Belait',
            ),
            41 =>
            array (
                'id' => 542,
                'name' => 'Brunei-Muara',
                'country_id' => 32,
                'arab_name' => 'Brunei-Muara',
            ),
            42 =>
            array (
                'id' => 543,
                'name' => 'Temburong',
                'country_id' => 32,
                'arab_name' => 'Temburong',
            ),
            43 =>
            array (
                'id' => 544,
                'name' => 'Tutong',
                'country_id' => 32,
                'arab_name' => 'Tutong',
            ),
            44 =>
            array (
                'id' => 545,
                'name' => 'Blagoevgrad',
                'country_id' => 33,
                'arab_name' => 'Blagoevgrad',
            ),
            45 =>
            array (
                'id' => 546,
                'name' => 'Burgas',
                'country_id' => 33,
                'arab_name' => 'Burgas',
            ),
            46 =>
            array (
                'id' => 547,
                'name' => 'Dobrich',
                'country_id' => 33,
                'arab_name' => 'Dobrich',
            ),
            47 =>
            array (
                'id' => 548,
                'name' => 'Gabrovo',
                'country_id' => 33,
                'arab_name' => 'Gabrovo',
            ),
            48 =>
            array (
                'id' => 549,
                'name' => 'Haskovo',
                'country_id' => 33,
                'arab_name' => 'Haskovo',
            ),
            49 =>
            array (
                'id' => 550,
                'name' => 'Jambol',
                'country_id' => 33,
                'arab_name' => 'Jambol',
            ),
            50 =>
            array (
                'id' => 551,
                'name' => 'Kardzhali',
                'country_id' => 33,
                'arab_name' => 'Kardzhali',
            ),
            51 =>
            array (
                'id' => 552,
                'name' => 'Kjustendil',
                'country_id' => 33,
                'arab_name' => 'Kjustendil',
            ),
            52 =>
            array (
                'id' => 553,
                'name' => 'Lovech',
                'country_id' => 33,
                'arab_name' => 'Lovech',
            ),
            53 =>
            array (
                'id' => 554,
                'name' => 'Montana',
                'country_id' => 33,
                'arab_name' => 'Montana',
            ),
            54 =>
            array (
                'id' => 555,
                'name' => 'Oblast Sofiya-Grad',
                'country_id' => 33,
                'arab_name' => 'Oblast Sofiya-Grad',
            ),
            55 =>
            array (
                'id' => 556,
                'name' => 'Pazardzhik',
                'country_id' => 33,
                'arab_name' => 'Pazardzhik',
            ),
            56 =>
            array (
                'id' => 557,
                'name' => 'Pernik',
                'country_id' => 33,
                'arab_name' => 'Pernik',
            ),
            57 =>
            array (
                'id' => 558,
                'name' => 'Pleven',
                'country_id' => 33,
                'arab_name' => 'Pleven',
            ),
            58 =>
            array (
                'id' => 559,
                'name' => 'Plovdiv',
                'country_id' => 33,
                'arab_name' => 'Plovdiv',
            ),
            59 =>
            array (
                'id' => 560,
                'name' => 'Razgrad',
                'country_id' => 33,
                'arab_name' => 'Razgrad',
            ),
            60 =>
            array (
                'id' => 561,
                'name' => 'Ruse',
                'country_id' => 33,
                'arab_name' => 'Ruse',
            ),
            61 =>
            array (
                'id' => 562,
                'name' => 'Shumen',
                'country_id' => 33,
                'arab_name' => 'Shumen',
            ),
            62 =>
            array (
                'id' => 563,
                'name' => 'Silistra',
                'country_id' => 33,
                'arab_name' => 'Silistra',
            ),
            63 =>
            array (
                'id' => 564,
                'name' => 'Sliven',
                'country_id' => 33,
                'arab_name' => 'Sliven',
            ),
            64 =>
            array (
                'id' => 565,
                'name' => 'Smoljan',
                'country_id' => 33,
                'arab_name' => 'Smoljan',
            ),
            65 =>
            array (
                'id' => 566,
                'name' => 'Sofija grad',
                'country_id' => 33,
                'arab_name' => 'Sofija grad',
            ),
            66 =>
            array (
                'id' => 567,
                'name' => 'Sofijska oblast',
                'country_id' => 33,
                'arab_name' => 'Sofijska oblast',
            ),
            67 =>
            array (
                'id' => 568,
                'name' => 'Stara Zagora',
                'country_id' => 33,
                'arab_name' => 'Stara Zagora',
            ),
            68 =>
            array (
                'id' => 569,
                'name' => 'Targovishte',
                'country_id' => 33,
                'arab_name' => 'Targovishte',
            ),
            69 =>
            array (
                'id' => 570,
                'name' => 'Varna',
                'country_id' => 33,
                'arab_name' => 'Varna',
            ),
            70 =>
            array (
                'id' => 571,
                'name' => 'Veliko Tarnovo',
                'country_id' => 33,
                'arab_name' => 'Veliko Tarnovo',
            ),
            71 =>
            array (
                'id' => 572,
                'name' => 'Vidin',
                'country_id' => 33,
                'arab_name' => 'Vidin',
            ),
            72 =>
            array (
                'id' => 573,
                'name' => 'Vraca',
                'country_id' => 33,
                'arab_name' => 'Vraca',
            ),
            73 =>
            array (
                'id' => 574,
                'name' => 'Yablaniza',
                'country_id' => 33,
                'arab_name' => 'Yablaniza',
            ),
            74 =>
            array (
                'id' => 575,
                'name' => 'Bale',
                'country_id' => 34,
                'arab_name' => 'Bale',
            ),
            75 =>
            array (
                'id' => 576,
                'name' => 'Bam',
                'country_id' => 34,
                'arab_name' => 'Bam',
            ),
            76 =>
            array (
                'id' => 577,
                'name' => 'Bazega',
                'country_id' => 34,
                'arab_name' => 'Bazega',
            ),
            77 =>
            array (
                'id' => 578,
                'name' => 'Bougouriba',
                'country_id' => 34,
                'arab_name' => 'Bougouriba',
            ),
            78 =>
            array (
                'id' => 579,
                'name' => 'Boulgou',
                'country_id' => 34,
                'arab_name' => 'Boulgou',
            ),
            79 =>
            array (
                'id' => 580,
                'name' => 'Boulkiemde',
                'country_id' => 34,
                'arab_name' => 'Boulkiemde',
            ),
            80 =>
            array (
                'id' => 581,
                'name' => 'Comoe',
                'country_id' => 34,
                'arab_name' => 'Comoe',
            ),
            81 =>
            array (
                'id' => 582,
                'name' => 'Ganzourgou',
                'country_id' => 34,
                'arab_name' => 'Ganzourgou',
            ),
            82 =>
            array (
                'id' => 583,
                'name' => 'Gnagna',
                'country_id' => 34,
                'arab_name' => 'Gnagna',
            ),
            83 =>
            array (
                'id' => 584,
                'name' => 'Gourma',
                'country_id' => 34,
                'arab_name' => 'Gourma',
            ),
            84 =>
            array (
                'id' => 585,
                'name' => 'Houet',
                'country_id' => 34,
                'arab_name' => 'Houet',
            ),
            85 =>
            array (
                'id' => 586,
                'name' => 'Ioba',
                'country_id' => 34,
                'arab_name' => 'Ioba',
            ),
            86 =>
            array (
                'id' => 587,
                'name' => 'Kadiogo',
                'country_id' => 34,
                'arab_name' => 'Kadiogo',
            ),
            87 =>
            array (
                'id' => 588,
                'name' => 'Kenedougou',
                'country_id' => 34,
                'arab_name' => 'Kenedougou',
            ),
            88 =>
            array (
                'id' => 589,
                'name' => 'Komandjari',
                'country_id' => 34,
                'arab_name' => 'Komandjari',
            ),
            89 =>
            array (
                'id' => 590,
                'name' => 'Kompienga',
                'country_id' => 34,
                'arab_name' => 'Kompienga',
            ),
            90 =>
            array (
                'id' => 591,
                'name' => 'Kossi',
                'country_id' => 34,
                'arab_name' => 'Kossi',
            ),
            91 =>
            array (
                'id' => 592,
                'name' => 'Kouritenga',
                'country_id' => 34,
                'arab_name' => 'Kouritenga',
            ),
            92 =>
            array (
                'id' => 593,
                'name' => 'Kourweogo',
                'country_id' => 34,
                'arab_name' => 'Kourweogo',
            ),
            93 =>
            array (
                'id' => 594,
                'name' => 'Leraba',
                'country_id' => 34,
                'arab_name' => 'Leraba',
            ),
            94 =>
            array (
                'id' => 595,
                'name' => 'Mouhoun',
                'country_id' => 34,
                'arab_name' => 'Mouhoun',
            ),
            95 =>
            array (
                'id' => 596,
                'name' => 'Nahouri',
                'country_id' => 34,
                'arab_name' => 'Nahouri',
            ),
            96 =>
            array (
                'id' => 597,
                'name' => 'Namentenga',
                'country_id' => 34,
                'arab_name' => 'Namentenga',
            ),
            97 =>
            array (
                'id' => 598,
                'name' => 'Noumbiel',
                'country_id' => 34,
                'arab_name' => 'Noumbiel',
            ),
            98 =>
            array (
                'id' => 599,
                'name' => 'Oubritenga',
                'country_id' => 34,
                'arab_name' => 'Oubritenga',
            ),
            99 =>
            array (
                'id' => 600,
                'name' => 'Oudalan',
                'country_id' => 34,
                'arab_name' => 'Oudalan',
            ),
            100 =>
            array (
                'id' => 601,
                'name' => 'Passore',
                'country_id' => 34,
                'arab_name' => 'Passore',
            ),
            101 =>
            array (
                'id' => 602,
                'name' => 'Poni',
                'country_id' => 34,
                'arab_name' => 'Poni',
            ),
            102 =>
            array (
                'id' => 603,
                'name' => 'Sanguie',
                'country_id' => 34,
                'arab_name' => 'Sanguie',
            ),
            103 =>
            array (
                'id' => 604,
                'name' => 'Sanmatenga',
                'country_id' => 34,
                'arab_name' => 'Sanmatenga',
            ),
            104 =>
            array (
                'id' => 605,
                'name' => 'Seno',
                'country_id' => 34,
                'arab_name' => 'Seno',
            ),
            105 =>
            array (
                'id' => 606,
                'name' => 'Sissili',
                'country_id' => 34,
                'arab_name' => 'Sissili',
            ),
            106 =>
            array (
                'id' => 607,
                'name' => 'Soum',
                'country_id' => 34,
                'arab_name' => 'Soum',
            ),
            107 =>
            array (
                'id' => 608,
                'name' => 'Sourou',
                'country_id' => 34,
                'arab_name' => 'Sourou',
            ),
            108 =>
            array (
                'id' => 609,
                'name' => 'Tapoa',
                'country_id' => 34,
                'arab_name' => 'Tapoa',
            ),
            109 =>
            array (
                'id' => 610,
                'name' => 'Tuy',
                'country_id' => 34,
                'arab_name' => 'Tuy',
            ),
            110 =>
            array (
                'id' => 611,
                'name' => 'Yatenga',
                'country_id' => 34,
                'arab_name' => 'Yatenga',
            ),
            111 =>
            array (
                'id' => 612,
                'name' => 'Zondoma',
                'country_id' => 34,
                'arab_name' => 'Zondoma',
            ),
            112 =>
            array (
                'id' => 613,
                'name' => 'Zoundweogo',
                'country_id' => 34,
                'arab_name' => 'Zoundweogo',
            ),
            113 =>
            array (
                'id' => 614,
                'name' => 'Bubanza',
                'country_id' => 35,
                'arab_name' => 'Bubanza',
            ),
            114 =>
            array (
                'id' => 615,
                'name' => 'Bujumbura',
                'country_id' => 35,
                'arab_name' => 'Bujumbura',
            ),
            115 =>
            array (
                'id' => 616,
                'name' => 'Bururi',
                'country_id' => 35,
                'arab_name' => 'Bururi',
            ),
            116 =>
            array (
                'id' => 617,
                'name' => 'Cankuzo',
                'country_id' => 35,
                'arab_name' => 'Cankuzo',
            ),
            117 =>
            array (
                'id' => 618,
                'name' => 'Cibitoke',
                'country_id' => 35,
                'arab_name' => 'Cibitoke',
            ),
            118 =>
            array (
                'id' => 619,
                'name' => 'Gitega',
                'country_id' => 35,
                'arab_name' => 'Gitega',
            ),
            119 =>
            array (
                'id' => 620,
                'name' => 'Karuzi',
                'country_id' => 35,
                'arab_name' => 'Karuzi',
            ),
            120 =>
            array (
                'id' => 621,
                'name' => 'Kayanza',
                'country_id' => 35,
                'arab_name' => 'Kayanza',
            ),
            121 =>
            array (
                'id' => 622,
                'name' => 'Kirundo',
                'country_id' => 35,
                'arab_name' => 'Kirundo',
            ),
            122 =>
            array (
                'id' => 623,
                'name' => 'Makamba',
                'country_id' => 35,
                'arab_name' => 'Makamba',
            ),
            123 =>
            array (
                'id' => 624,
                'name' => 'Muramvya',
                'country_id' => 35,
                'arab_name' => 'Muramvya',
            ),
            124 =>
            array (
                'id' => 625,
                'name' => 'Muyinga',
                'country_id' => 35,
                'arab_name' => 'Muyinga',
            ),
            125 =>
            array (
                'id' => 626,
                'name' => 'Ngozi',
                'country_id' => 35,
                'arab_name' => 'Ngozi',
            ),
            126 =>
            array (
                'id' => 627,
                'name' => 'Rutana',
                'country_id' => 35,
                'arab_name' => 'Rutana',
            ),
            127 =>
            array (
                'id' => 628,
                'name' => 'Ruyigi',
                'country_id' => 35,
                'arab_name' => 'Ruyigi',
            ),
            128 =>
            array (
                'id' => 629,
                'name' => 'Banteay Mean Chey',
                'country_id' => 36,
                'arab_name' => 'Banteay Mean Chey',
            ),
            129 =>
            array (
                'id' => 630,
                'name' => 'Bat Dambang',
                'country_id' => 36,
                'arab_name' => 'Bat Dambang',
            ),
            130 =>
            array (
                'id' => 631,
                'name' => 'Kampong Cham',
                'country_id' => 36,
                'arab_name' => 'Kampong Cham',
            ),
            131 =>
            array (
                'id' => 632,
                'name' => 'Kampong Chhnang',
                'country_id' => 36,
                'arab_name' => 'Kampong Chhnang',
            ),
            132 =>
            array (
                'id' => 633,
                'name' => 'Kampong Spoeu',
                'country_id' => 36,
                'arab_name' => 'Kampong Spoeu',
            ),
            133 =>
            array (
                'id' => 634,
                'name' => 'Kampong Thum',
                'country_id' => 36,
                'arab_name' => 'Kampong Thum',
            ),
            134 =>
            array (
                'id' => 635,
                'name' => 'Kampot',
                'country_id' => 36,
                'arab_name' => 'Kampot',
            ),
            135 =>
            array (
                'id' => 636,
                'name' => 'Kandal',
                'country_id' => 36,
                'arab_name' => 'Kandal',
            ),
            136 =>
            array (
                'id' => 637,
                'name' => 'Kaoh Kong',
                'country_id' => 36,
                'arab_name' => 'Kaoh Kong',
            ),
            137 =>
            array (
                'id' => 638,
                'name' => 'Kracheh',
                'country_id' => 36,
                'arab_name' => 'Kracheh',
            ),
            138 =>
            array (
                'id' => 639,
                'name' => 'Krong Kaeb',
                'country_id' => 36,
                'arab_name' => 'Krong Kaeb',
            ),
            139 =>
            array (
                'id' => 640,
                'name' => 'Krong Pailin',
                'country_id' => 36,
                'arab_name' => 'Krong Pailin',
            ),
            140 =>
            array (
                'id' => 641,
                'name' => 'Krong Preah Sihanouk',
                'country_id' => 36,
                'arab_name' => 'Krong Preah Sihanouk',
            ),
            141 =>
            array (
                'id' => 642,
                'name' => 'Mondol Kiri',
                'country_id' => 36,
                'arab_name' => 'Mondol Kiri',
            ),
            142 =>
            array (
                'id' => 643,
                'name' => 'Otdar Mean Chey',
                'country_id' => 36,
                'arab_name' => 'Otdar Mean Chey',
            ),
            143 =>
            array (
                'id' => 644,
                'name' => 'Phnum Penh',
                'country_id' => 36,
                'arab_name' => 'Phnum Penh',
            ),
            144 =>
            array (
                'id' => 645,
                'name' => 'Pousat',
                'country_id' => 36,
                'arab_name' => 'Pousat',
            ),
            145 =>
            array (
                'id' => 646,
                'name' => 'Preah Vihear',
                'country_id' => 36,
                'arab_name' => 'Preah Vihear',
            ),
            146 =>
            array (
                'id' => 647,
                'name' => 'Prey Veaeng',
                'country_id' => 36,
                'arab_name' => 'Prey Veaeng',
            ),
            147 =>
            array (
                'id' => 648,
                'name' => 'Rotanak Kiri',
                'country_id' => 36,
                'arab_name' => 'Rotanak Kiri',
            ),
            148 =>
            array (
                'id' => 649,
                'name' => 'Siem Reab',
                'country_id' => 36,
                'arab_name' => 'Siem Reab',
            ),
            149 =>
            array (
                'id' => 650,
                'name' => 'Stueng Traeng',
                'country_id' => 36,
                'arab_name' => 'Stueng Traeng',
            ),
            150 =>
            array (
                'id' => 651,
                'name' => 'Svay Rieng',
                'country_id' => 36,
                'arab_name' => 'Svay Rieng',
            ),
            151 =>
            array (
                'id' => 652,
                'name' => 'Takaev',
                'country_id' => 36,
                'arab_name' => 'Takaev',
            ),
            152 =>
            array (
                'id' => 653,
                'name' => 'Adamaoua',
                'country_id' => 37,
                'arab_name' => 'Adamaoua',
            ),
            153 =>
            array (
                'id' => 654,
                'name' => 'Centre',
                'country_id' => 37,
                'arab_name' => 'Centre',
            ),
            154 =>
            array (
                'id' => 655,
                'name' => 'Est',
                'country_id' => 37,
                'arab_name' => 'Est',
            ),
            155 =>
            array (
                'id' => 656,
                'name' => 'Littoral',
                'country_id' => 37,
                'arab_name' => 'Littoral',
            ),
            156 =>
            array (
                'id' => 657,
                'name' => 'Nord',
                'country_id' => 37,
                'arab_name' => 'Nord',
            ),
            157 =>
            array (
                'id' => 658,
                'name' => 'Nord Extreme',
                'country_id' => 37,
                'arab_name' => 'Nord Extreme',
            ),
            158 =>
            array (
                'id' => 659,
                'name' => 'Nordouest',
                'country_id' => 37,
                'arab_name' => 'Nordouest',
            ),
            159 =>
            array (
                'id' => 660,
                'name' => 'Ouest',
                'country_id' => 37,
                'arab_name' => 'Ouest',
            ),
            160 =>
            array (
                'id' => 661,
                'name' => 'Sud',
                'country_id' => 37,
                'arab_name' => 'Sud',
            ),
            161 =>
            array (
                'id' => 662,
                'name' => 'Sudouest',
                'country_id' => 37,
                'arab_name' => 'Sudouest',
            ),
            162 =>
            array (
                'id' => 663,
                'name' => 'Alberta',
                'country_id' => 38,
                'arab_name' => 'Alberta',
            ),
            163 =>
            array (
                'id' => 664,
                'name' => 'British Columbia',
                'country_id' => 38,
                'arab_name' => 'British Columbia',
            ),
            164 =>
            array (
                'id' => 665,
                'name' => 'Manitoba',
                'country_id' => 38,
                'arab_name' => 'Manitoba',
            ),
            165 =>
            array (
                'id' => 666,
                'name' => 'New Brunswick',
                'country_id' => 38,
                'arab_name' => 'New Brunswick',
            ),
            166 =>
            array (
                'id' => 667,
                'name' => 'Newfoundland and Labrador',
                'country_id' => 38,
                'arab_name' => 'Newfoundland and Labrador',
            ),
            167 =>
            array (
                'id' => 668,
                'name' => 'Northwest Territories',
                'country_id' => 38,
                'arab_name' => 'Northwest Territories',
            ),
            168 =>
            array (
                'id' => 669,
                'name' => 'Nova Scotia',
                'country_id' => 38,
                'arab_name' => 'Nova Scotia',
            ),
            169 =>
            array (
                'id' => 670,
                'name' => 'Nunavut',
                'country_id' => 38,
                'arab_name' => 'Nunavut',
            ),
            170 =>
            array (
                'id' => 671,
                'name' => 'Ontario',
                'country_id' => 38,
                'arab_name' => 'Ontario',
            ),
            171 =>
            array (
                'id' => 672,
                'name' => 'Prince Edward Island',
                'country_id' => 38,
                'arab_name' => 'Prince Edward Island',
            ),
            172 =>
            array (
                'id' => 673,
                'name' => 'Quebec',
                'country_id' => 38,
                'arab_name' => 'Quebec',
            ),
            173 =>
            array (
                'id' => 674,
                'name' => 'Saskatchewan',
                'country_id' => 38,
                'arab_name' => 'Saskatchewan',
            ),
            174 =>
            array (
                'id' => 675,
                'name' => 'Yukon',
                'country_id' => 38,
                'arab_name' => 'Yukon',
            ),
            175 =>
            array (
                'id' => 676,
                'name' => 'Boavista',
                'country_id' => 39,
                'arab_name' => 'Boavista',
            ),
            176 =>
            array (
                'id' => 677,
                'name' => 'Brava',
                'country_id' => 39,
                'arab_name' => 'Brava',
            ),
            177 =>
            array (
                'id' => 678,
                'name' => 'Fogo',
                'country_id' => 39,
                'arab_name' => 'Fogo',
            ),
            178 =>
            array (
                'id' => 679,
                'name' => 'Maio',
                'country_id' => 39,
                'arab_name' => 'Maio',
            ),
            179 =>
            array (
                'id' => 680,
                'name' => 'Sal',
                'country_id' => 39,
                'arab_name' => 'Sal',
            ),
            180 =>
            array (
                'id' => 681,
                'name' => 'Santo Antao',
                'country_id' => 39,
                'arab_name' => 'Santo Antao',
            ),
            181 =>
            array (
                'id' => 682,
                'name' => 'Sao Nicolau',
                'country_id' => 39,
                'arab_name' => 'Sao Nicolau',
            ),
            182 =>
            array (
                'id' => 683,
                'name' => 'Sao Tiago',
                'country_id' => 39,
                'arab_name' => 'Sao Tiago',
            ),
            183 =>
            array (
                'id' => 684,
                'name' => 'Sao Vicente',
                'country_id' => 39,
                'arab_name' => 'Sao Vicente',
            ),
            184 =>
            array (
                'id' => 685,
                'name' => 'Grand Cayman',
                'country_id' => 40,
                'arab_name' => 'Grand Cayman',
            ),
            185 =>
            array (
                'id' => 686,
                'name' => 'Bamingui-Bangoran',
                'country_id' => 41,
                'arab_name' => 'Bamingui-Bangoran',
            ),
            186 =>
            array (
                'id' => 687,
                'name' => 'Bangui',
                'country_id' => 41,
                'arab_name' => 'Bangui',
            ),
            187 =>
            array (
                'id' => 688,
                'name' => 'Basse-Kotto',
                'country_id' => 41,
                'arab_name' => 'Basse-Kotto',
            ),
            188 =>
            array (
                'id' => 689,
                'name' => 'Haut-Mbomou',
                'country_id' => 41,
                'arab_name' => 'Haut-Mbomou',
            ),
            189 =>
            array (
                'id' => 690,
                'name' => 'Haute-Kotto',
                'country_id' => 41,
                'arab_name' => 'Haute-Kotto',
            ),
            190 =>
            array (
                'id' => 691,
                'name' => 'Kemo',
                'country_id' => 41,
                'arab_name' => 'Kemo',
            ),
            191 =>
            array (
                'id' => 692,
                'name' => 'Lobaye',
                'country_id' => 41,
                'arab_name' => 'Lobaye',
            ),
            192 =>
            array (
                'id' => 693,
                'name' => 'Mambere-Kadei',
                'country_id' => 41,
                'arab_name' => 'Mambere-Kadei',
            ),
            193 =>
            array (
                'id' => 694,
                'name' => 'Mbomou',
                'country_id' => 41,
                'arab_name' => 'Mbomou',
            ),
            194 =>
            array (
                'id' => 695,
                'name' => 'Nana-Gribizi',
                'country_id' => 41,
                'arab_name' => 'Nana-Gribizi',
            ),
            195 =>
            array (
                'id' => 696,
                'name' => 'Nana-Mambere',
                'country_id' => 41,
                'arab_name' => 'Nana-Mambere',
            ),
            196 =>
            array (
                'id' => 697,
                'name' => 'Ombella Mpoko',
                'country_id' => 41,
                'arab_name' => 'Ombella Mpoko',
            ),
            197 =>
            array (
                'id' => 698,
                'name' => 'Ouaka',
                'country_id' => 41,
                'arab_name' => 'Ouaka',
            ),
            198 =>
            array (
                'id' => 699,
                'name' => 'Ouham',
                'country_id' => 41,
                'arab_name' => 'Ouham',
            ),
            199 =>
            array (
                'id' => 700,
                'name' => 'Ouham-Pende',
                'country_id' => 41,
                'arab_name' => 'Ouham-Pende',
            ),
            200 =>
            array (
                'id' => 701,
                'name' => 'Sangha-Mbaere',
                'country_id' => 41,
                'arab_name' => 'Sangha-Mbaere',
            ),
            201 =>
            array (
                'id' => 702,
                'name' => 'Vakaga',
                'country_id' => 41,
                'arab_name' => 'Vakaga',
            ),
            202 =>
            array (
                'id' => 703,
                'name' => 'Batha',
                'country_id' => 42,
                'arab_name' => 'Batha',
            ),
            203 =>
            array (
                'id' => 704,
                'name' => 'Biltine',
                'country_id' => 42,
                'arab_name' => 'Biltine',
            ),
            204 =>
            array (
                'id' => 705,
                'name' => 'Bourkou-Ennedi-Tibesti',
                'country_id' => 42,
                'arab_name' => 'Bourkou-Ennedi-Tibesti',
            ),
            205 =>
            array (
                'id' => 706,
                'name' => 'Chari-Baguirmi',
                'country_id' => 42,
                'arab_name' => 'Chari-Baguirmi',
            ),
            206 =>
            array (
                'id' => 707,
                'name' => 'Guera',
                'country_id' => 42,
                'arab_name' => 'Guera',
            ),
            207 =>
            array (
                'id' => 708,
                'name' => 'Kanem',
                'country_id' => 42,
                'arab_name' => 'Kanem',
            ),
            208 =>
            array (
                'id' => 709,
                'name' => 'Lac',
                'country_id' => 42,
                'arab_name' => 'Lac',
            ),
            209 =>
            array (
                'id' => 710,
                'name' => 'Logone Occidental',
                'country_id' => 42,
                'arab_name' => 'Logone Occidental',
            ),
            210 =>
            array (
                'id' => 711,
                'name' => 'Logone Oriental',
                'country_id' => 42,
                'arab_name' => 'Logone Oriental',
            ),
            211 =>
            array (
                'id' => 712,
                'name' => 'Mayo-Kebbi',
                'country_id' => 42,
                'arab_name' => 'Mayo-Kebbi',
            ),
            212 =>
            array (
                'id' => 713,
                'name' => 'Moyen-Chari',
                'country_id' => 42,
                'arab_name' => 'Moyen-Chari',
            ),
            213 =>
            array (
                'id' => 714,
                'name' => 'Ouaddai',
                'country_id' => 42,
                'arab_name' => 'Ouaddai',
            ),
            214 =>
            array (
                'id' => 715,
                'name' => 'Salamat',
                'country_id' => 42,
                'arab_name' => 'Salamat',
            ),
            215 =>
            array (
                'id' => 716,
                'name' => 'Tandjile',
                'country_id' => 42,
                'arab_name' => 'Tandjile',
            ),
            216 =>
            array (
                'id' => 717,
                'name' => 'Aisen',
                'country_id' => 43,
                'arab_name' => 'Aisen',
            ),
            217 =>
            array (
                'id' => 718,
                'name' => 'Antofagasta',
                'country_id' => 43,
                'arab_name' => 'Antofagasta',
            ),
            218 =>
            array (
                'id' => 719,
                'name' => 'Araucania',
                'country_id' => 43,
                'arab_name' => 'Araucania',
            ),
            219 =>
            array (
                'id' => 720,
                'name' => 'Atacama',
                'country_id' => 43,
                'arab_name' => 'Atacama',
            ),
            220 =>
            array (
                'id' => 721,
                'name' => 'Bio Bio',
                'country_id' => 43,
                'arab_name' => 'Bio Bio',
            ),
            221 =>
            array (
                'id' => 722,
                'name' => 'Coquimbo',
                'country_id' => 43,
                'arab_name' => 'Coquimbo',
            ),
            222 =>
            array (
                'id' => 723,
                'name' => 'Libertador General Bernardo O\'',
                'country_id' => 43,
                'arab_name' => 'Libertador General Bernardo O\'',
            ),
            223 =>
            array (
                'id' => 724,
                'name' => 'Los Lagos',
                'country_id' => 43,
                'arab_name' => 'Los Lagos',
            ),
            224 =>
            array (
                'id' => 725,
                'name' => 'Magellanes',
                'country_id' => 43,
                'arab_name' => 'Magellanes',
            ),
            225 =>
            array (
                'id' => 726,
                'name' => 'Maule',
                'country_id' => 43,
                'arab_name' => 'Maule',
            ),
            226 =>
            array (
                'id' => 727,
                'name' => 'Metropolitana',
                'country_id' => 43,
                'arab_name' => 'Metropolitana',
            ),
            227 =>
            array (
                'id' => 728,
                'name' => 'Metropolitana de Santiago',
                'country_id' => 43,
                'arab_name' => 'Metropolitana de Santiago',
            ),
            228 =>
            array (
                'id' => 729,
                'name' => 'Tarapaca',
                'country_id' => 43,
                'arab_name' => 'Tarapaca',
            ),
            229 =>
            array (
                'id' => 730,
                'name' => 'Valparaiso',
                'country_id' => 43,
                'arab_name' => 'Valparaiso',
            ),
            230 =>
            array (
                'id' => 731,
                'name' => 'Anhui',
                'country_id' => 44,
                'arab_name' => 'Anhui',
            ),
            231 =>
            array (
                'id' => 732,
                'name' => 'Anhui Province',
                'country_id' => 44,
                'arab_name' => 'Anhui Province',
            ),
            232 =>
            array (
                'id' => 733,
                'name' => 'Anhui Sheng',
                'country_id' => 44,
                'arab_name' => 'Anhui Sheng',
            ),
            233 =>
            array (
                'id' => 734,
                'name' => 'Aomen',
                'country_id' => 44,
                'arab_name' => 'Aomen',
            ),
            234 =>
            array (
                'id' => 735,
                'name' => 'Beijing',
                'country_id' => 44,
                'arab_name' => 'Beijing',
            ),
            235 =>
            array (
                'id' => 736,
                'name' => 'Beijing Shi',
                'country_id' => 44,
                'arab_name' => 'Beijing Shi',
            ),
            236 =>
            array (
                'id' => 737,
                'name' => 'Chongqing',
                'country_id' => 44,
                'arab_name' => 'Chongqing',
            ),
            237 =>
            array (
                'id' => 738,
                'name' => 'Fujian',
                'country_id' => 44,
                'arab_name' => 'Fujian',
            ),
            238 =>
            array (
                'id' => 739,
                'name' => 'Fujian Sheng',
                'country_id' => 44,
                'arab_name' => 'Fujian Sheng',
            ),
            239 =>
            array (
                'id' => 740,
                'name' => 'Gansu',
                'country_id' => 44,
                'arab_name' => 'Gansu',
            ),
            240 =>
            array (
                'id' => 741,
                'name' => 'Guangdong',
                'country_id' => 44,
                'arab_name' => 'Guangdong',
            ),
            241 =>
            array (
                'id' => 742,
                'name' => 'Guangdong Sheng',
                'country_id' => 44,
                'arab_name' => 'Guangdong Sheng',
            ),
            242 =>
            array (
                'id' => 743,
                'name' => 'Guangxi',
                'country_id' => 44,
                'arab_name' => 'Guangxi',
            ),
            243 =>
            array (
                'id' => 744,
                'name' => 'Guizhou',
                'country_id' => 44,
                'arab_name' => 'Guizhou',
            ),
            244 =>
            array (
                'id' => 745,
                'name' => 'Hainan',
                'country_id' => 44,
                'arab_name' => 'Hainan',
            ),
            245 =>
            array (
                'id' => 746,
                'name' => 'Hebei',
                'country_id' => 44,
                'arab_name' => 'Hebei',
            ),
            246 =>
            array (
                'id' => 747,
                'name' => 'Heilongjiang',
                'country_id' => 44,
                'arab_name' => 'Heilongjiang',
            ),
            247 =>
            array (
                'id' => 748,
                'name' => 'Henan',
                'country_id' => 44,
                'arab_name' => 'Henan',
            ),
            248 =>
            array (
                'id' => 749,
                'name' => 'Hubei',
                'country_id' => 44,
                'arab_name' => 'Hubei',
            ),
            249 =>
            array (
                'id' => 750,
                'name' => 'Hunan',
                'country_id' => 44,
                'arab_name' => 'Hunan',
            ),
            250 =>
            array (
                'id' => 751,
                'name' => 'Jiangsu',
                'country_id' => 44,
                'arab_name' => 'Jiangsu',
            ),
            251 =>
            array (
                'id' => 752,
                'name' => 'Jiangsu Sheng',
                'country_id' => 44,
                'arab_name' => 'Jiangsu Sheng',
            ),
            252 =>
            array (
                'id' => 753,
                'name' => 'Jiangxi',
                'country_id' => 44,
                'arab_name' => 'Jiangxi',
            ),
            253 =>
            array (
                'id' => 754,
                'name' => 'Jilin',
                'country_id' => 44,
                'arab_name' => 'Jilin',
            ),
            254 =>
            array (
                'id' => 755,
                'name' => 'Liaoning',
                'country_id' => 44,
                'arab_name' => 'Liaoning',
            ),
            255 =>
            array (
                'id' => 756,
                'name' => 'Liaoning Sheng',
                'country_id' => 44,
                'arab_name' => 'Liaoning Sheng',
            ),
            256 =>
            array (
                'id' => 757,
                'name' => 'Nei Monggol',
                'country_id' => 44,
                'arab_name' => 'Nei Monggol',
            ),
            257 =>
            array (
                'id' => 758,
                'name' => 'Ningxia Hui',
                'country_id' => 44,
                'arab_name' => 'Ningxia Hui',
            ),
            258 =>
            array (
                'id' => 759,
                'name' => 'Qinghai',
                'country_id' => 44,
                'arab_name' => 'Qinghai',
            ),
            259 =>
            array (
                'id' => 760,
                'name' => 'Shaanxi',
                'country_id' => 44,
                'arab_name' => 'Shaanxi',
            ),
            260 =>
            array (
                'id' => 761,
                'name' => 'Shandong',
                'country_id' => 44,
                'arab_name' => 'Shandong',
            ),
            261 =>
            array (
                'id' => 762,
                'name' => 'Shandong Sheng',
                'country_id' => 44,
                'arab_name' => 'Shandong Sheng',
            ),
            262 =>
            array (
                'id' => 763,
                'name' => 'Shanghai',
                'country_id' => 44,
                'arab_name' => 'Shanghai',
            ),
            263 =>
            array (
                'id' => 764,
                'name' => 'Shanxi',
                'country_id' => 44,
                'arab_name' => 'Shanxi',
            ),
            264 =>
            array (
                'id' => 765,
                'name' => 'Sichuan',
                'country_id' => 44,
                'arab_name' => 'Sichuan',
            ),
            265 =>
            array (
                'id' => 766,
                'name' => 'Tianjin',
                'country_id' => 44,
                'arab_name' => 'Tianjin',
            ),
            266 =>
            array (
                'id' => 767,
                'name' => 'Xianggang',
                'country_id' => 44,
                'arab_name' => 'Xianggang',
            ),
            267 =>
            array (
                'id' => 768,
                'name' => 'Xinjiang',
                'country_id' => 44,
                'arab_name' => 'Xinjiang',
            ),
            268 =>
            array (
                'id' => 769,
                'name' => 'Xizang',
                'country_id' => 44,
                'arab_name' => 'Xizang',
            ),
            269 =>
            array (
                'id' => 770,
                'name' => 'Yunnan',
                'country_id' => 44,
                'arab_name' => 'Yunnan',
            ),
            270 =>
            array (
                'id' => 771,
                'name' => 'Zhejiang',
                'country_id' => 44,
                'arab_name' => 'Zhejiang',
            ),
            271 =>
            array (
                'id' => 772,
                'name' => 'Zhejiang Sheng',
                'country_id' => 44,
                'arab_name' => 'Zhejiang Sheng',
            ),
            272 =>
            array (
                'id' => 773,
                'name' => 'Christmas Island',
                'country_id' => 45,
                'arab_name' => 'Christmas Island',
            ),
            273 =>
            array (
                'id' => 774,
            'name' => 'Cocos (Keeling) Islands',
                'country_id' => 46,
            'arab_name' => 'Cocos (Keeling) Islands',
            ),
            274 =>
            array (
                'id' => 775,
                'name' => 'Amazonas',
                'country_id' => 47,
                'arab_name' => 'Amazonas',
            ),
            275 =>
            array (
                'id' => 776,
                'name' => 'Antioquia',
                'country_id' => 47,
                'arab_name' => 'Antioquia',
            ),
            276 =>
            array (
                'id' => 777,
                'name' => 'Arauca',
                'country_id' => 47,
                'arab_name' => 'Arauca',
            ),
            277 =>
            array (
                'id' => 778,
                'name' => 'Atlantico',
                'country_id' => 47,
                'arab_name' => 'Atlantico',
            ),
            278 =>
            array (
                'id' => 779,
                'name' => 'Bogota',
                'country_id' => 47,
                'arab_name' => 'Bogota',
            ),
            279 =>
            array (
                'id' => 780,
                'name' => 'Bolivar',
                'country_id' => 47,
                'arab_name' => 'Bolivar',
            ),
            280 =>
            array (
                'id' => 781,
                'name' => 'Boyaca',
                'country_id' => 47,
                'arab_name' => 'Boyaca',
            ),
            281 =>
            array (
                'id' => 782,
                'name' => 'Caldas',
                'country_id' => 47,
                'arab_name' => 'Caldas',
            ),
            282 =>
            array (
                'id' => 783,
                'name' => 'Caqueta',
                'country_id' => 47,
                'arab_name' => 'Caqueta',
            ),
            283 =>
            array (
                'id' => 784,
                'name' => 'Casanare',
                'country_id' => 47,
                'arab_name' => 'Casanare',
            ),
            284 =>
            array (
                'id' => 785,
                'name' => 'Cauca',
                'country_id' => 47,
                'arab_name' => 'Cauca',
            ),
            285 =>
            array (
                'id' => 786,
                'name' => 'Cesar',
                'country_id' => 47,
                'arab_name' => 'Cesar',
            ),
            286 =>
            array (
                'id' => 787,
                'name' => 'Choco',
                'country_id' => 47,
                'arab_name' => 'Choco',
            ),
            287 =>
            array (
                'id' => 788,
                'name' => 'Cordoba',
                'country_id' => 47,
                'arab_name' => 'Cordoba',
            ),
            288 =>
            array (
                'id' => 789,
                'name' => 'Cundinamarca',
                'country_id' => 47,
                'arab_name' => 'Cundinamarca',
            ),
            289 =>
            array (
                'id' => 790,
                'name' => 'Guainia',
                'country_id' => 47,
                'arab_name' => 'Guainia',
            ),
            290 =>
            array (
                'id' => 791,
                'name' => 'Guaviare',
                'country_id' => 47,
                'arab_name' => 'Guaviare',
            ),
            291 =>
            array (
                'id' => 792,
                'name' => 'Huila',
                'country_id' => 47,
                'arab_name' => 'Huila',
            ),
            292 =>
            array (
                'id' => 793,
                'name' => 'La Guajira',
                'country_id' => 47,
                'arab_name' => 'La Guajira',
            ),
            293 =>
            array (
                'id' => 794,
                'name' => 'Magdalena',
                'country_id' => 47,
                'arab_name' => 'Magdalena',
            ),
            294 =>
            array (
                'id' => 795,
                'name' => 'Meta',
                'country_id' => 47,
                'arab_name' => 'Meta',
            ),
            295 =>
            array (
                'id' => 796,
                'name' => 'Narino',
                'country_id' => 47,
                'arab_name' => 'Narino',
            ),
            296 =>
            array (
                'id' => 797,
                'name' => 'Norte de Santander',
                'country_id' => 47,
                'arab_name' => 'Norte de Santander',
            ),
            297 =>
            array (
                'id' => 798,
                'name' => 'Putumayo',
                'country_id' => 47,
                'arab_name' => 'Putumayo',
            ),
            298 =>
            array (
                'id' => 799,
                'name' => 'Quindio',
                'country_id' => 47,
                'arab_name' => 'Quindio',
            ),
            299 =>
            array (
                'id' => 800,
                'name' => 'Risaralda',
                'country_id' => 47,
                'arab_name' => 'Risaralda',
            ),
            300 =>
            array (
                'id' => 801,
                'name' => 'San Andres y Providencia',
                'country_id' => 47,
                'arab_name' => 'San Andres y Providencia',
            ),
            301 =>
            array (
                'id' => 802,
                'name' => 'Santander',
                'country_id' => 47,
                'arab_name' => 'Santander',
            ),
            302 =>
            array (
                'id' => 803,
                'name' => 'Sucre',
                'country_id' => 47,
                'arab_name' => 'Sucre',
            ),
            303 =>
            array (
                'id' => 804,
                'name' => 'Tolima',
                'country_id' => 47,
                'arab_name' => 'Tolima',
            ),
            304 =>
            array (
                'id' => 805,
                'name' => 'Valle del Cauca',
                'country_id' => 47,
                'arab_name' => 'Valle del Cauca',
            ),
            305 =>
            array (
                'id' => 806,
                'name' => 'Vaupes',
                'country_id' => 47,
                'arab_name' => 'Vaupes',
            ),
            306 =>
            array (
                'id' => 807,
                'name' => 'Vichada',
                'country_id' => 47,
                'arab_name' => 'Vichada',
            ),
            307 =>
            array (
                'id' => 808,
                'name' => 'Mwali',
                'country_id' => 48,
                'arab_name' => 'Mwali',
            ),
            308 =>
            array (
                'id' => 809,
                'name' => 'Njazidja',
                'country_id' => 48,
                'arab_name' => 'Njazidja',
            ),
            309 =>
            array (
                'id' => 810,
                'name' => 'Nzwani',
                'country_id' => 48,
                'arab_name' => 'Nzwani',
            ),
            310 =>
            array (
                'id' => 811,
                'name' => 'Bouenza',
                'country_id' => 49,
                'arab_name' => 'Bouenza',
            ),
            311 =>
            array (
                'id' => 812,
                'name' => 'Brazzaville',
                'country_id' => 49,
                'arab_name' => 'Brazzaville',
            ),
            312 =>
            array (
                'id' => 813,
                'name' => 'Cuvette',
                'country_id' => 49,
                'arab_name' => 'Cuvette',
            ),
            313 =>
            array (
                'id' => 814,
                'name' => 'Kouilou',
                'country_id' => 49,
                'arab_name' => 'Kouilou',
            ),
            314 =>
            array (
                'id' => 815,
                'name' => 'Lekoumou',
                'country_id' => 49,
                'arab_name' => 'Lekoumou',
            ),
            315 =>
            array (
                'id' => 816,
                'name' => 'Likouala',
                'country_id' => 49,
                'arab_name' => 'Likouala',
            ),
            316 =>
            array (
                'id' => 817,
                'name' => 'Niari',
                'country_id' => 49,
                'arab_name' => 'Niari',
            ),
            317 =>
            array (
                'id' => 818,
                'name' => 'Plateaux',
                'country_id' => 49,
                'arab_name' => 'Plateaux',
            ),
            318 =>
            array (
                'id' => 819,
                'name' => 'Pool',
                'country_id' => 49,
                'arab_name' => 'Pool',
            ),
            319 =>
            array (
                'id' => 820,
                'name' => 'Sangha',
                'country_id' => 49,
                'arab_name' => 'Sangha',
            ),
            320 =>
            array (
                'id' => 821,
                'name' => 'Bandundu',
                'country_id' => 50,
                'arab_name' => 'Bandundu',
            ),
            321 =>
            array (
                'id' => 822,
                'name' => 'Bas-Congo',
                'country_id' => 50,
                'arab_name' => 'Bas-Congo',
            ),
            322 =>
            array (
                'id' => 823,
                'name' => 'Equateur',
                'country_id' => 50,
                'arab_name' => 'Equateur',
            ),
            323 =>
            array (
                'id' => 824,
                'name' => 'Haut-Congo',
                'country_id' => 50,
                'arab_name' => 'Haut-Congo',
            ),
            324 =>
            array (
                'id' => 825,
                'name' => 'Kasai-Occidental',
                'country_id' => 50,
                'arab_name' => 'Kasai-Occidental',
            ),
            325 =>
            array (
                'id' => 826,
                'name' => 'Kasai-Oriental',
                'country_id' => 50,
                'arab_name' => 'Kasai-Oriental',
            ),
            326 =>
            array (
                'id' => 827,
                'name' => 'Katanga',
                'country_id' => 50,
                'arab_name' => 'Katanga',
            ),
            327 =>
            array (
                'id' => 828,
                'name' => 'Kinshasa',
                'country_id' => 50,
                'arab_name' => 'Kinshasa',
            ),
            328 =>
            array (
                'id' => 829,
                'name' => 'Maniema',
                'country_id' => 50,
                'arab_name' => 'Maniema',
            ),
            329 =>
            array (
                'id' => 830,
                'name' => 'Nord-Kivu',
                'country_id' => 50,
                'arab_name' => 'Nord-Kivu',
            ),
            330 =>
            array (
                'id' => 831,
                'name' => 'Sud-Kivu',
                'country_id' => 50,
                'arab_name' => 'Sud-Kivu',
            ),
            331 =>
            array (
                'id' => 832,
                'name' => 'Aitutaki',
                'country_id' => 51,
                'arab_name' => 'Aitutaki',
            ),
            332 =>
            array (
                'id' => 833,
                'name' => 'Atiu',
                'country_id' => 51,
                'arab_name' => 'Atiu',
            ),
            333 =>
            array (
                'id' => 834,
                'name' => 'Mangaia',
                'country_id' => 51,
                'arab_name' => 'Mangaia',
            ),
            334 =>
            array (
                'id' => 835,
                'name' => 'Manihiki',
                'country_id' => 51,
                'arab_name' => 'Manihiki',
            ),
            335 =>
            array (
                'id' => 836,
                'name' => 'Mauke',
                'country_id' => 51,
                'arab_name' => 'Mauke',
            ),
            336 =>
            array (
                'id' => 837,
                'name' => 'Mitiaro',
                'country_id' => 51,
                'arab_name' => 'Mitiaro',
            ),
            337 =>
            array (
                'id' => 838,
                'name' => 'Nassau',
                'country_id' => 51,
                'arab_name' => 'Nassau',
            ),
            338 =>
            array (
                'id' => 839,
                'name' => 'Pukapuka',
                'country_id' => 51,
                'arab_name' => 'Pukapuka',
            ),
            339 =>
            array (
                'id' => 840,
                'name' => 'Rakahanga',
                'country_id' => 51,
                'arab_name' => 'Rakahanga',
            ),
            340 =>
            array (
                'id' => 841,
                'name' => 'Rarotonga',
                'country_id' => 51,
                'arab_name' => 'Rarotonga',
            ),
            341 =>
            array (
                'id' => 842,
                'name' => 'Tongareva',
                'country_id' => 51,
                'arab_name' => 'Tongareva',
            ),
            342 =>
            array (
                'id' => 843,
                'name' => 'Alajuela',
                'country_id' => 52,
                'arab_name' => 'Alajuela',
            ),
            343 =>
            array (
                'id' => 844,
                'name' => 'Cartago',
                'country_id' => 52,
                'arab_name' => 'Cartago',
            ),
            344 =>
            array (
                'id' => 845,
                'name' => 'Guanacaste',
                'country_id' => 52,
                'arab_name' => 'Guanacaste',
            ),
            345 =>
            array (
                'id' => 846,
                'name' => 'Heredia',
                'country_id' => 52,
                'arab_name' => 'Heredia',
            ),
            346 =>
            array (
                'id' => 847,
                'name' => 'Limon',
                'country_id' => 52,
                'arab_name' => 'Limon',
            ),
            347 =>
            array (
                'id' => 848,
                'name' => 'Puntarenas',
                'country_id' => 52,
                'arab_name' => 'Puntarenas',
            ),
            348 =>
            array (
                'id' => 849,
                'name' => 'San Jose',
                'country_id' => 52,
                'arab_name' => 'San Jose',
            ),
            349 =>
            array (
                'id' => 850,
                'name' => 'Abidjan',
                'country_id' => 53,
                'arab_name' => 'Abidjan',
            ),
            350 =>
            array (
                'id' => 851,
                'name' => 'Agneby',
                'country_id' => 53,
                'arab_name' => 'Agneby',
            ),
            351 =>
            array (
                'id' => 852,
                'name' => 'Bafing',
                'country_id' => 53,
                'arab_name' => 'Bafing',
            ),
            352 =>
            array (
                'id' => 853,
                'name' => 'Denguele',
                'country_id' => 53,
                'arab_name' => 'Denguele',
            ),
            353 =>
            array (
                'id' => 854,
                'name' => 'Dix-huit Montagnes',
                'country_id' => 53,
                'arab_name' => 'Dix-huit Montagnes',
            ),
            354 =>
            array (
                'id' => 855,
                'name' => 'Fromager',
                'country_id' => 53,
                'arab_name' => 'Fromager',
            ),
            355 =>
            array (
                'id' => 856,
                'name' => 'Haut-Sassandra',
                'country_id' => 53,
                'arab_name' => 'Haut-Sassandra',
            ),
            356 =>
            array (
                'id' => 857,
                'name' => 'Lacs',
                'country_id' => 53,
                'arab_name' => 'Lacs',
            ),
            357 =>
            array (
                'id' => 858,
                'name' => 'Lagunes',
                'country_id' => 53,
                'arab_name' => 'Lagunes',
            ),
            358 =>
            array (
                'id' => 859,
                'name' => 'Marahoue',
                'country_id' => 53,
                'arab_name' => 'Marahoue',
            ),
            359 =>
            array (
                'id' => 860,
                'name' => 'Moyen-Cavally',
                'country_id' => 53,
                'arab_name' => 'Moyen-Cavally',
            ),
            360 =>
            array (
                'id' => 861,
                'name' => 'Moyen-Comoe',
                'country_id' => 53,
                'arab_name' => 'Moyen-Comoe',
            ),
            361 =>
            array (
                'id' => 862,
                'name' => 'N\'zi-Comoe',
                'country_id' => 53,
                'arab_name' => 'N\'zi-Comoe',
            ),
            362 =>
            array (
                'id' => 863,
                'name' => 'Sassandra',
                'country_id' => 53,
                'arab_name' => 'Sassandra',
            ),
            363 =>
            array (
                'id' => 864,
                'name' => 'Savanes',
                'country_id' => 53,
                'arab_name' => 'Savanes',
            ),
            364 =>
            array (
                'id' => 865,
                'name' => 'Sud-Bandama',
                'country_id' => 53,
                'arab_name' => 'Sud-Bandama',
            ),
            365 =>
            array (
                'id' => 866,
                'name' => 'Sud-Comoe',
                'country_id' => 53,
                'arab_name' => 'Sud-Comoe',
            ),
            366 =>
            array (
                'id' => 867,
                'name' => 'Vallee du Bandama',
                'country_id' => 53,
                'arab_name' => 'Vallee du Bandama',
            ),
            367 =>
            array (
                'id' => 868,
                'name' => 'Worodougou',
                'country_id' => 53,
                'arab_name' => 'Worodougou',
            ),
            368 =>
            array (
                'id' => 869,
                'name' => 'Zanzan',
                'country_id' => 53,
                'arab_name' => 'Zanzan',
            ),
            369 =>
            array (
                'id' => 870,
                'name' => 'Bjelovar-Bilogora',
                'country_id' => 54,
                'arab_name' => 'Bjelovar-Bilogora',
            ),
            370 =>
            array (
                'id' => 871,
                'name' => 'Dubrovnik-Neretva',
                'country_id' => 54,
                'arab_name' => 'Dubrovnik-Neretva',
            ),
            371 =>
            array (
                'id' => 872,
                'name' => 'Grad Zagreb',
                'country_id' => 54,
                'arab_name' => 'Grad Zagreb',
            ),
            372 =>
            array (
                'id' => 873,
                'name' => 'Istra',
                'country_id' => 54,
                'arab_name' => 'Istra',
            ),
            373 =>
            array (
                'id' => 874,
                'name' => 'Karlovac',
                'country_id' => 54,
                'arab_name' => 'Karlovac',
            ),
            374 =>
            array (
                'id' => 875,
                'name' => 'Koprivnica-Krizhevci',
                'country_id' => 54,
                'arab_name' => 'Koprivnica-Krizhevci',
            ),
            375 =>
            array (
                'id' => 876,
                'name' => 'Krapina-Zagorje',
                'country_id' => 54,
                'arab_name' => 'Krapina-Zagorje',
            ),
            376 =>
            array (
                'id' => 877,
                'name' => 'Lika-Senj',
                'country_id' => 54,
                'arab_name' => 'Lika-Senj',
            ),
            377 =>
            array (
                'id' => 878,
                'name' => 'Medhimurje',
                'country_id' => 54,
                'arab_name' => 'Medhimurje',
            ),
            378 =>
            array (
                'id' => 879,
                'name' => 'Medimurska Zupanija',
                'country_id' => 54,
                'arab_name' => 'Medimurska Zupanija',
            ),
            379 =>
            array (
                'id' => 880,
                'name' => 'Osijek-Baranja',
                'country_id' => 54,
                'arab_name' => 'Osijek-Baranja',
            ),
            380 =>
            array (
                'id' => 881,
                'name' => 'Osjecko-Baranjska Zupanija',
                'country_id' => 54,
                'arab_name' => 'Osjecko-Baranjska Zupanija',
            ),
            381 =>
            array (
                'id' => 882,
                'name' => 'Pozhega-Slavonija',
                'country_id' => 54,
                'arab_name' => 'Pozhega-Slavonija',
            ),
            382 =>
            array (
                'id' => 883,
                'name' => 'Primorje-Gorski Kotar',
                'country_id' => 54,
                'arab_name' => 'Primorje-Gorski Kotar',
            ),
            383 =>
            array (
                'id' => 884,
                'name' => 'Shibenik-Knin',
                'country_id' => 54,
                'arab_name' => 'Shibenik-Knin',
            ),
            384 =>
            array (
                'id' => 885,
                'name' => 'Sisak-Moslavina',
                'country_id' => 54,
                'arab_name' => 'Sisak-Moslavina',
            ),
            385 =>
            array (
                'id' => 886,
                'name' => 'Slavonski Brod-Posavina',
                'country_id' => 54,
                'arab_name' => 'Slavonski Brod-Posavina',
            ),
            386 =>
            array (
                'id' => 887,
                'name' => 'Split-Dalmacija',
                'country_id' => 54,
                'arab_name' => 'Split-Dalmacija',
            ),
            387 =>
            array (
                'id' => 888,
                'name' => 'Varazhdin',
                'country_id' => 54,
                'arab_name' => 'Varazhdin',
            ),
            388 =>
            array (
                'id' => 889,
                'name' => 'Virovitica-Podravina',
                'country_id' => 54,
                'arab_name' => 'Virovitica-Podravina',
            ),
            389 =>
            array (
                'id' => 890,
                'name' => 'Vukovar-Srijem',
                'country_id' => 54,
                'arab_name' => 'Vukovar-Srijem',
            ),
            390 =>
            array (
                'id' => 891,
                'name' => 'Zadar',
                'country_id' => 54,
                'arab_name' => 'Zadar',
            ),
            391 =>
            array (
                'id' => 892,
                'name' => 'Zagreb',
                'country_id' => 54,
                'arab_name' => 'Zagreb',
            ),
            392 =>
            array (
                'id' => 893,
                'name' => 'Camaguey',
                'country_id' => 55,
                'arab_name' => 'Camaguey',
            ),
            393 =>
            array (
                'id' => 894,
                'name' => 'Ciego de Avila',
                'country_id' => 55,
                'arab_name' => 'Ciego de Avila',
            ),
            394 =>
            array (
                'id' => 895,
                'name' => 'Cienfuegos',
                'country_id' => 55,
                'arab_name' => 'Cienfuegos',
            ),
            395 =>
            array (
                'id' => 896,
                'name' => 'Ciudad de la Habana',
                'country_id' => 55,
                'arab_name' => 'Ciudad de la Habana',
            ),
            396 =>
            array (
                'id' => 897,
                'name' => 'Granma',
                'country_id' => 55,
                'arab_name' => 'Granma',
            ),
            397 =>
            array (
                'id' => 898,
                'name' => 'Guantanamo',
                'country_id' => 55,
                'arab_name' => 'Guantanamo',
            ),
            398 =>
            array (
                'id' => 899,
                'name' => 'Habana',
                'country_id' => 55,
                'arab_name' => 'Habana',
            ),
            399 =>
            array (
                'id' => 900,
                'name' => 'Holguin',
                'country_id' => 55,
                'arab_name' => 'Holguin',
            ),
            400 =>
            array (
                'id' => 901,
                'name' => 'Isla de la Juventud',
                'country_id' => 55,
                'arab_name' => 'Isla de la Juventud',
            ),
            401 =>
            array (
                'id' => 902,
                'name' => 'La Habana',
                'country_id' => 55,
                'arab_name' => 'La Habana',
            ),
            402 =>
            array (
                'id' => 903,
                'name' => 'Las Tunas',
                'country_id' => 55,
                'arab_name' => 'Las Tunas',
            ),
            403 =>
            array (
                'id' => 904,
                'name' => 'Matanzas',
                'country_id' => 55,
                'arab_name' => 'Matanzas',
            ),
            404 =>
            array (
                'id' => 905,
                'name' => 'Pinar del Rio',
                'country_id' => 55,
                'arab_name' => 'Pinar del Rio',
            ),
            405 =>
            array (
                'id' => 906,
                'name' => 'Sancti Spiritus',
                'country_id' => 55,
                'arab_name' => 'Sancti Spiritus',
            ),
            406 =>
            array (
                'id' => 907,
                'name' => 'Santiago de Cuba',
                'country_id' => 55,
                'arab_name' => 'Santiago de Cuba',
            ),
            407 =>
            array (
                'id' => 908,
                'name' => 'Villa Clara',
                'country_id' => 55,
                'arab_name' => 'Villa Clara',
            ),
            408 =>
            array (
                'id' => 909,
                'name' => 'Government controlled area',
                'country_id' => 56,
                'arab_name' => 'Government controlled area',
            ),
            409 =>
            array (
                'id' => 910,
                'name' => 'Limassol',
                'country_id' => 56,
                'arab_name' => 'Limassol',
            ),
            410 =>
            array (
                'id' => 911,
                'name' => 'Nicosia District',
                'country_id' => 56,
                'arab_name' => 'Nicosia District',
            ),
            411 =>
            array (
                'id' => 912,
                'name' => 'Paphos',
                'country_id' => 56,
                'arab_name' => 'Paphos',
            ),
            412 =>
            array (
                'id' => 913,
                'name' => 'Turkish controlled area',
                'country_id' => 56,
                'arab_name' => 'Turkish controlled area',
            ),
            413 =>
            array (
                'id' => 914,
                'name' => 'Central Bohemian',
                'country_id' => 57,
                'arab_name' => 'Central Bohemian',
            ),
            414 =>
            array (
                'id' => 915,
                'name' => 'Frycovice',
                'country_id' => 57,
                'arab_name' => 'Frycovice',
            ),
            415 =>
            array (
                'id' => 916,
                'name' => 'Jihocesky Kraj',
                'country_id' => 57,
                'arab_name' => 'Jihocesky Kraj',
            ),
            416 =>
            array (
                'id' => 917,
                'name' => 'Jihochesky',
                'country_id' => 57,
                'arab_name' => 'Jihochesky',
            ),
            417 =>
            array (
                'id' => 918,
                'name' => 'Jihomoravsky',
                'country_id' => 57,
                'arab_name' => 'Jihomoravsky',
            ),
            418 =>
            array (
                'id' => 919,
                'name' => 'Karlovarsky',
                'country_id' => 57,
                'arab_name' => 'Karlovarsky',
            ),
            419 =>
            array (
                'id' => 920,
                'name' => 'Klecany',
                'country_id' => 57,
                'arab_name' => 'Klecany',
            ),
            420 =>
            array (
                'id' => 921,
                'name' => 'Kralovehradecky',
                'country_id' => 57,
                'arab_name' => 'Kralovehradecky',
            ),
            421 =>
            array (
                'id' => 922,
                'name' => 'Liberecky',
                'country_id' => 57,
                'arab_name' => 'Liberecky',
            ),
            422 =>
            array (
                'id' => 923,
                'name' => 'Lipov',
                'country_id' => 57,
                'arab_name' => 'Lipov',
            ),
            423 =>
            array (
                'id' => 924,
                'name' => 'Moravskoslezsky',
                'country_id' => 57,
                'arab_name' => 'Moravskoslezsky',
            ),
            424 =>
            array (
                'id' => 925,
                'name' => 'Olomoucky',
                'country_id' => 57,
                'arab_name' => 'Olomoucky',
            ),
            425 =>
            array (
                'id' => 926,
                'name' => 'Olomoucky Kraj',
                'country_id' => 57,
                'arab_name' => 'Olomoucky Kraj',
            ),
            426 =>
            array (
                'id' => 927,
                'name' => 'Pardubicky',
                'country_id' => 57,
                'arab_name' => 'Pardubicky',
            ),
            427 =>
            array (
                'id' => 928,
                'name' => 'Plzensky',
                'country_id' => 57,
                'arab_name' => 'Plzensky',
            ),
            428 =>
            array (
                'id' => 929,
                'name' => 'Praha',
                'country_id' => 57,
                'arab_name' => 'Praha',
            ),
            429 =>
            array (
                'id' => 930,
                'name' => 'Rajhrad',
                'country_id' => 57,
                'arab_name' => 'Rajhrad',
            ),
            430 =>
            array (
                'id' => 931,
                'name' => 'Smirice',
                'country_id' => 57,
                'arab_name' => 'Smirice',
            ),
            431 =>
            array (
                'id' => 932,
                'name' => 'South Moravian',
                'country_id' => 57,
                'arab_name' => 'South Moravian',
            ),
            432 =>
            array (
                'id' => 933,
                'name' => 'Straz nad Nisou',
                'country_id' => 57,
                'arab_name' => 'Straz nad Nisou',
            ),
            433 =>
            array (
                'id' => 934,
                'name' => 'Stredochesky',
                'country_id' => 57,
                'arab_name' => 'Stredochesky',
            ),
            434 =>
            array (
                'id' => 935,
                'name' => 'Unicov',
                'country_id' => 57,
                'arab_name' => 'Unicov',
            ),
            435 =>
            array (
                'id' => 936,
                'name' => 'Ustecky',
                'country_id' => 57,
                'arab_name' => 'Ustecky',
            ),
            436 =>
            array (
                'id' => 937,
                'name' => 'Valletta',
                'country_id' => 57,
                'arab_name' => 'Valletta',
            ),
            437 =>
            array (
                'id' => 938,
                'name' => 'Velesin',
                'country_id' => 57,
                'arab_name' => 'Velesin',
            ),
            438 =>
            array (
                'id' => 939,
                'name' => 'Vysochina',
                'country_id' => 57,
                'arab_name' => 'Vysochina',
            ),
            439 =>
            array (
                'id' => 940,
                'name' => 'Zlinsky',
                'country_id' => 57,
                'arab_name' => 'Zlinsky',
            ),
            440 =>
            array (
                'id' => 941,
                'name' => 'Arhus',
                'country_id' => 58,
                'arab_name' => 'Arhus',
            ),
            441 =>
            array (
                'id' => 942,
                'name' => 'Bornholm',
                'country_id' => 58,
                'arab_name' => 'Bornholm',
            ),
            442 =>
            array (
                'id' => 943,
                'name' => 'Frederiksborg',
                'country_id' => 58,
                'arab_name' => 'Frederiksborg',
            ),
            443 =>
            array (
                'id' => 944,
                'name' => 'Fyn',
                'country_id' => 58,
                'arab_name' => 'Fyn',
            ),
            444 =>
            array (
                'id' => 945,
                'name' => 'Hovedstaden',
                'country_id' => 58,
                'arab_name' => 'Hovedstaden',
            ),
            445 =>
            array (
                'id' => 946,
                'name' => 'Kobenhavn',
                'country_id' => 58,
                'arab_name' => 'Kobenhavn',
            ),
            446 =>
            array (
                'id' => 947,
                'name' => 'Kobenhavns Amt',
                'country_id' => 58,
                'arab_name' => 'Kobenhavns Amt',
            ),
            447 =>
            array (
                'id' => 948,
                'name' => 'Kobenhavns Kommune',
                'country_id' => 58,
                'arab_name' => 'Kobenhavns Kommune',
            ),
            448 =>
            array (
                'id' => 949,
                'name' => 'Nordjylland',
                'country_id' => 58,
                'arab_name' => 'Nordjylland',
            ),
            449 =>
            array (
                'id' => 950,
                'name' => 'Ribe',
                'country_id' => 58,
                'arab_name' => 'Ribe',
            ),
            450 =>
            array (
                'id' => 951,
                'name' => 'Ringkobing',
                'country_id' => 58,
                'arab_name' => 'Ringkobing',
            ),
            451 =>
            array (
                'id' => 952,
                'name' => 'Roervig',
                'country_id' => 58,
                'arab_name' => 'Roervig',
            ),
            452 =>
            array (
                'id' => 953,
                'name' => 'Roskilde',
                'country_id' => 58,
                'arab_name' => 'Roskilde',
            ),
            453 =>
            array (
                'id' => 954,
                'name' => 'Roslev',
                'country_id' => 58,
                'arab_name' => 'Roslev',
            ),
            454 =>
            array (
                'id' => 955,
                'name' => 'Sjaelland',
                'country_id' => 58,
                'arab_name' => 'Sjaelland',
            ),
            455 =>
            array (
                'id' => 956,
                'name' => 'Soeborg',
                'country_id' => 58,
                'arab_name' => 'Soeborg',
            ),
            456 =>
            array (
                'id' => 957,
                'name' => 'Sonderjylland',
                'country_id' => 58,
                'arab_name' => 'Sonderjylland',
            ),
            457 =>
            array (
                'id' => 958,
                'name' => 'Storstrom',
                'country_id' => 58,
                'arab_name' => 'Storstrom',
            ),
            458 =>
            array (
                'id' => 959,
                'name' => 'Syddanmark',
                'country_id' => 58,
                'arab_name' => 'Syddanmark',
            ),
            459 =>
            array (
                'id' => 960,
                'name' => 'Toelloese',
                'country_id' => 58,
                'arab_name' => 'Toelloese',
            ),
            460 =>
            array (
                'id' => 961,
                'name' => 'Vejle',
                'country_id' => 58,
                'arab_name' => 'Vejle',
            ),
            461 =>
            array (
                'id' => 962,
                'name' => 'Vestsjalland',
                'country_id' => 58,
                'arab_name' => 'Vestsjalland',
            ),
            462 =>
            array (
                'id' => 963,
                'name' => 'Viborg',
                'country_id' => 58,
                'arab_name' => 'Viborg',
            ),
            463 =>
            array (
                'id' => 964,
                'name' => '\'Ali Sabih',
                'country_id' => 59,
                'arab_name' => '\'Ali Sabih',
            ),
            464 =>
            array (
                'id' => 965,
                'name' => 'Dikhil',
                'country_id' => 59,
                'arab_name' => 'Dikhil',
            ),
            465 =>
            array (
                'id' => 966,
                'name' => 'Jibuti',
                'country_id' => 59,
                'arab_name' => 'Jibuti',
            ),
            466 =>
            array (
                'id' => 967,
                'name' => 'Tajurah',
                'country_id' => 59,
                'arab_name' => 'Tajurah',
            ),
            467 =>
            array (
                'id' => 968,
                'name' => 'Ubuk',
                'country_id' => 59,
                'arab_name' => 'Ubuk',
            ),
            468 =>
            array (
                'id' => 969,
                'name' => 'Saint Andrew',
                'country_id' => 60,
                'arab_name' => 'Saint Andrew',
            ),
            469 =>
            array (
                'id' => 970,
                'name' => 'Saint David',
                'country_id' => 60,
                'arab_name' => 'Saint David',
            ),
            470 =>
            array (
                'id' => 971,
                'name' => 'Saint George',
                'country_id' => 60,
                'arab_name' => 'Saint George',
            ),
            471 =>
            array (
                'id' => 972,
                'name' => 'Saint John',
                'country_id' => 60,
                'arab_name' => 'Saint John',
            ),
            472 =>
            array (
                'id' => 973,
                'name' => 'Saint Joseph',
                'country_id' => 60,
                'arab_name' => 'Saint Joseph',
            ),
            473 =>
            array (
                'id' => 974,
                'name' => 'Saint Luke',
                'country_id' => 60,
                'arab_name' => 'Saint Luke',
            ),
            474 =>
            array (
                'id' => 975,
                'name' => 'Saint Mark',
                'country_id' => 60,
                'arab_name' => 'Saint Mark',
            ),
            475 =>
            array (
                'id' => 976,
                'name' => 'Saint Patrick',
                'country_id' => 60,
                'arab_name' => 'Saint Patrick',
            ),
            476 =>
            array (
                'id' => 977,
                'name' => 'Saint Paul',
                'country_id' => 60,
                'arab_name' => 'Saint Paul',
            ),
            477 =>
            array (
                'id' => 978,
                'name' => 'Saint Peter',
                'country_id' => 60,
                'arab_name' => 'Saint Peter',
            ),
            478 =>
            array (
                'id' => 979,
                'name' => 'Azua',
                'country_id' => 61,
                'arab_name' => 'Azua',
            ),
            479 =>
            array (
                'id' => 980,
                'name' => 'Bahoruco',
                'country_id' => 61,
                'arab_name' => 'Bahoruco',
            ),
            480 =>
            array (
                'id' => 981,
                'name' => 'Barahona',
                'country_id' => 61,
                'arab_name' => 'Barahona',
            ),
            481 =>
            array (
                'id' => 982,
                'name' => 'Dajabon',
                'country_id' => 61,
                'arab_name' => 'Dajabon',
            ),
            482 =>
            array (
                'id' => 983,
                'name' => 'Distrito Nacional',
                'country_id' => 61,
                'arab_name' => 'Distrito Nacional',
            ),
            483 =>
            array (
                'id' => 984,
                'name' => 'Duarte',
                'country_id' => 61,
                'arab_name' => 'Duarte',
            ),
            484 =>
            array (
                'id' => 985,
                'name' => 'El Seybo',
                'country_id' => 61,
                'arab_name' => 'El Seybo',
            ),
            485 =>
            array (
                'id' => 986,
                'name' => 'Elias Pina',
                'country_id' => 61,
                'arab_name' => 'Elias Pina',
            ),
            486 =>
            array (
                'id' => 987,
                'name' => 'Espaillat',
                'country_id' => 61,
                'arab_name' => 'Espaillat',
            ),
            487 =>
            array (
                'id' => 988,
                'name' => 'Hato Mayor',
                'country_id' => 61,
                'arab_name' => 'Hato Mayor',
            ),
            488 =>
            array (
                'id' => 989,
                'name' => 'Independencia',
                'country_id' => 61,
                'arab_name' => 'Independencia',
            ),
            489 =>
            array (
                'id' => 990,
                'name' => 'La Altagracia',
                'country_id' => 61,
                'arab_name' => 'La Altagracia',
            ),
            490 =>
            array (
                'id' => 991,
                'name' => 'La Romana',
                'country_id' => 61,
                'arab_name' => 'La Romana',
            ),
            491 =>
            array (
                'id' => 992,
                'name' => 'La Vega',
                'country_id' => 61,
                'arab_name' => 'La Vega',
            ),
            492 =>
            array (
                'id' => 993,
                'name' => 'Maria Trinidad Sanchez',
                'country_id' => 61,
                'arab_name' => 'Maria Trinidad Sanchez',
            ),
            493 =>
            array (
                'id' => 994,
                'name' => 'Monsenor Nouel',
                'country_id' => 61,
                'arab_name' => 'Monsenor Nouel',
            ),
            494 =>
            array (
                'id' => 995,
                'name' => 'Monte Cristi',
                'country_id' => 61,
                'arab_name' => 'Monte Cristi',
            ),
            495 =>
            array (
                'id' => 996,
                'name' => 'Monte Plata',
                'country_id' => 61,
                'arab_name' => 'Monte Plata',
            ),
            496 =>
            array (
                'id' => 997,
                'name' => 'Pedernales',
                'country_id' => 61,
                'arab_name' => 'Pedernales',
            ),
            497 =>
            array (
                'id' => 998,
                'name' => 'Peravia',
                'country_id' => 61,
                'arab_name' => 'Peravia',
            ),
            498 =>
            array (
                'id' => 999,
                'name' => 'Puerto Plata',
                'country_id' => 61,
                'arab_name' => 'Puerto Plata',
            ),
            499 =>
            array (
                'id' => 1000,
                'name' => 'Salcedo',
                'country_id' => 61,
                'arab_name' => 'Salcedo',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'name' => 'Samana',
                'country_id' => 61,
                'arab_name' => 'Samana',
            ),
            1 =>
            array (
                'id' => 1002,
                'name' => 'San Cristobal',
                'country_id' => 61,
                'arab_name' => 'San Cristobal',
            ),
            2 =>
            array (
                'id' => 1003,
                'name' => 'San Juan',
                'country_id' => 61,
                'arab_name' => 'San Juan',
            ),
            3 =>
            array (
                'id' => 1004,
                'name' => 'San Pedro de Macoris',
                'country_id' => 61,
                'arab_name' => 'San Pedro de Macoris',
            ),
            4 =>
            array (
                'id' => 1005,
                'name' => 'Sanchez Ramirez',
                'country_id' => 61,
                'arab_name' => 'Sanchez Ramirez',
            ),
            5 =>
            array (
                'id' => 1006,
                'name' => 'Santiago',
                'country_id' => 61,
                'arab_name' => 'Santiago',
            ),
            6 =>
            array (
                'id' => 1007,
                'name' => 'Santiago Rodriguez',
                'country_id' => 61,
                'arab_name' => 'Santiago Rodriguez',
            ),
            7 =>
            array (
                'id' => 1008,
                'name' => 'Valverde',
                'country_id' => 61,
                'arab_name' => 'Valverde',
            ),
            8 =>
            array (
                'id' => 1009,
                'name' => 'Aileu',
                'country_id' => 62,
                'arab_name' => 'Aileu',
            ),
            9 =>
            array (
                'id' => 1010,
                'name' => 'Ainaro',
                'country_id' => 62,
                'arab_name' => 'Ainaro',
            ),
            10 =>
            array (
                'id' => 1011,
                'name' => 'Ambeno',
                'country_id' => 62,
                'arab_name' => 'Ambeno',
            ),
            11 =>
            array (
                'id' => 1012,
                'name' => 'Baucau',
                'country_id' => 62,
                'arab_name' => 'Baucau',
            ),
            12 =>
            array (
                'id' => 1013,
                'name' => 'Bobonaro',
                'country_id' => 62,
                'arab_name' => 'Bobonaro',
            ),
            13 =>
            array (
                'id' => 1014,
                'name' => 'Cova Lima',
                'country_id' => 62,
                'arab_name' => 'Cova Lima',
            ),
            14 =>
            array (
                'id' => 1015,
                'name' => 'Dili',
                'country_id' => 62,
                'arab_name' => 'Dili',
            ),
            15 =>
            array (
                'id' => 1016,
                'name' => 'Ermera',
                'country_id' => 62,
                'arab_name' => 'Ermera',
            ),
            16 =>
            array (
                'id' => 1017,
                'name' => 'Lautem',
                'country_id' => 62,
                'arab_name' => 'Lautem',
            ),
            17 =>
            array (
                'id' => 1018,
                'name' => 'Liquica',
                'country_id' => 62,
                'arab_name' => 'Liquica',
            ),
            18 =>
            array (
                'id' => 1019,
                'name' => 'Manatuto',
                'country_id' => 62,
                'arab_name' => 'Manatuto',
            ),
            19 =>
            array (
                'id' => 1020,
                'name' => 'Manufahi',
                'country_id' => 62,
                'arab_name' => 'Manufahi',
            ),
            20 =>
            array (
                'id' => 1021,
                'name' => 'Viqueque',
                'country_id' => 62,
                'arab_name' => 'Viqueque',
            ),
            21 =>
            array (
                'id' => 1022,
                'name' => 'Azuay',
                'country_id' => 63,
                'arab_name' => 'Azuay',
            ),
            22 =>
            array (
                'id' => 1023,
                'name' => 'Bolivar',
                'country_id' => 63,
                'arab_name' => 'Bolivar',
            ),
            23 =>
            array (
                'id' => 1024,
                'name' => 'Canar',
                'country_id' => 63,
                'arab_name' => 'Canar',
            ),
            24 =>
            array (
                'id' => 1025,
                'name' => 'Carchi',
                'country_id' => 63,
                'arab_name' => 'Carchi',
            ),
            25 =>
            array (
                'id' => 1026,
                'name' => 'Chimborazo',
                'country_id' => 63,
                'arab_name' => 'Chimborazo',
            ),
            26 =>
            array (
                'id' => 1027,
                'name' => 'Cotopaxi',
                'country_id' => 63,
                'arab_name' => 'Cotopaxi',
            ),
            27 =>
            array (
                'id' => 1028,
                'name' => 'El Oro',
                'country_id' => 63,
                'arab_name' => 'El Oro',
            ),
            28 =>
            array (
                'id' => 1029,
                'name' => 'Esmeraldas',
                'country_id' => 63,
                'arab_name' => 'Esmeraldas',
            ),
            29 =>
            array (
                'id' => 1030,
                'name' => 'Galapagos',
                'country_id' => 63,
                'arab_name' => 'Galapagos',
            ),
            30 =>
            array (
                'id' => 1031,
                'name' => 'Guayas',
                'country_id' => 63,
                'arab_name' => 'Guayas',
            ),
            31 =>
            array (
                'id' => 1032,
                'name' => 'Imbabura',
                'country_id' => 63,
                'arab_name' => 'Imbabura',
            ),
            32 =>
            array (
                'id' => 1033,
                'name' => 'Loja',
                'country_id' => 63,
                'arab_name' => 'Loja',
            ),
            33 =>
            array (
                'id' => 1034,
                'name' => 'Los Rios',
                'country_id' => 63,
                'arab_name' => 'Los Rios',
            ),
            34 =>
            array (
                'id' => 1035,
                'name' => 'Manabi',
                'country_id' => 63,
                'arab_name' => 'Manabi',
            ),
            35 =>
            array (
                'id' => 1036,
                'name' => 'Morona Santiago',
                'country_id' => 63,
                'arab_name' => 'Morona Santiago',
            ),
            36 =>
            array (
                'id' => 1037,
                'name' => 'Napo',
                'country_id' => 63,
                'arab_name' => 'Napo',
            ),
            37 =>
            array (
                'id' => 1038,
                'name' => 'Orellana',
                'country_id' => 63,
                'arab_name' => 'Orellana',
            ),
            38 =>
            array (
                'id' => 1039,
                'name' => 'Pastaza',
                'country_id' => 63,
                'arab_name' => 'Pastaza',
            ),
            39 =>
            array (
                'id' => 1040,
                'name' => 'Pichincha',
                'country_id' => 63,
                'arab_name' => 'Pichincha',
            ),
            40 =>
            array (
                'id' => 1041,
                'name' => 'Sucumbios',
                'country_id' => 63,
                'arab_name' => 'Sucumbios',
            ),
            41 =>
            array (
                'id' => 1042,
                'name' => 'Tungurahua',
                'country_id' => 63,
                'arab_name' => 'Tungurahua',
            ),
            42 =>
            array (
                'id' => 1043,
                'name' => 'Zamora Chinchipe',
                'country_id' => 63,
                'arab_name' => 'Zamora Chinchipe',
            ),
            43 =>
            array (
                'id' => 1044,
                'name' => 'Aswan',
                'country_id' => 64,
                'arab_name' => 'أسوان',
            ),
            44 =>
            array (
                'id' => 1045,
                'name' => 'Asyut',
                'country_id' => 64,
                'arab_name' => 'أسيوط',
            ),
            45 =>
            array (
                'id' => 1046,
                'name' => 'Bani Suwayf',
                'country_id' => 64,
                'arab_name' => 'بنى سويف',
            ),
            46 =>
            array (
                'id' => 1047,
                'name' => 'Bur Sa\'id',
                'country_id' => 64,
                'arab_name' => 'بورسعيد',
            ),
            47 =>
            array (
                'id' => 1048,
                'name' => 'Cairo',
                'country_id' => 64,
                'arab_name' => 'القاهرة',
            ),
            48 =>
            array (
                'id' => 1049,
                'name' => 'Dumyat',
                'country_id' => 64,
                'arab_name' => 'دمياط',
            ),
            49 =>
            array (
                'id' => 1050,
                'name' => 'Kafr-ash-Shaykh',
                'country_id' => 64,
                'arab_name' => 'كفر الشيخ',
            ),
            50 =>
            array (
                'id' => 1051,
                'name' => 'Matruh',
                'country_id' => 64,
                'arab_name' => 'مطروح',
            ),
            51 =>
            array (
                'id' => 1057,
                'name' => 'Qina',
                'country_id' => 64,
                'arab_name' => 'قنا',
            ),
            52 =>
            array (
                'id' => 1058,
                'name' => 'Sawhaj',
                'country_id' => 64,
                'arab_name' => 'سوهاج',
            ),
            53 =>
            array (
                'id' => 1059,
                'name' => 'Sina al-Janubiyah',
                'country_id' => 64,
                'arab_name' => 'جنوب سيناء',
            ),
            54 =>
            array (
                'id' => 1060,
                'name' => 'Sina ash-Shamaliyah',
                'country_id' => 64,
                'arab_name' => 'شمال سيناء',
            ),
            55 =>
            array (
                'id' => 1061,
                'name' => 'ad-Daqahliyah',
                'country_id' => 64,
                'arab_name' => 'الدقهلية',
            ),
            56 =>
            array (
                'id' => 1062,
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 64,
                'arab_name' => 'البحر الأحمر',
            ),
            57 =>
            array (
                'id' => 1063,
                'name' => 'al-Buhayrah',
                'country_id' => 64,
                'arab_name' => 'البحيرة',
            ),
            58 =>
            array (
                'id' => 1064,
                'name' => 'al-Fayyum',
                'country_id' => 64,
                'arab_name' => 'الفيوم',
            ),
            59 =>
            array (
                'id' => 1065,
                'name' => 'al-Gharbiyah',
                'country_id' => 64,
                'arab_name' => 'الغربية',
            ),
            60 =>
            array (
                'id' => 1066,
                'name' => 'al-Iskandariyah',
                'country_id' => 64,
                'arab_name' => 'الأسكندرية',
            ),
            61 =>
            array (
                'id' => 1067,
                'name' => 'al-Ismailiyah',
                'country_id' => 64,
                'arab_name' => 'الإسماعيلية',
            ),
            62 =>
            array (
                'id' => 1068,
                'name' => 'al-Jizah',
                'country_id' => 64,
                'arab_name' => 'الجيزة',
            ),
            63 =>
            array (
                'id' => 1069,
                'name' => 'al-Minufiyah',
                'country_id' => 64,
                'arab_name' => 'المنوفية',
            ),
            64 =>
            array (
                'id' => 1070,
                'name' => 'al-Minya',
                'country_id' => 64,
                'arab_name' => 'المنيا',
            ),
            65 =>
            array (
                'id' => 1072,
                'name' => 'al-Qalyubiyah',
                'country_id' => 64,
                'arab_name' => 'القليوبية',
            ),
            66 =>
            array (
                'id' => 1073,
                'name' => 'al-Uqsur',
                'country_id' => 64,
                'arab_name' => 'الأقصر',
            ),
            67 =>
            array (
                'id' => 1074,
                'name' => 'al-Wadi al-Jadid',
                'country_id' => 64,
                'arab_name' => 'الواداى الجديد',
            ),
            68 =>
            array (
                'id' => 1075,
                'name' => 'as-Suways',
                'country_id' => 64,
                'arab_name' => 'السويس',
            ),
            69 =>
            array (
                'id' => 1076,
                'name' => 'ash-Sharqiyah',
                'country_id' => 64,
                'arab_name' => 'الشرقية',
            ),
            70 =>
            array (
                'id' => 1077,
                'name' => 'Ahuachapan',
                'country_id' => 65,
                'arab_name' => 'Ahuachapan',
            ),
            71 =>
            array (
                'id' => 1078,
                'name' => 'Cabanas',
                'country_id' => 65,
                'arab_name' => 'Cabanas',
            ),
            72 =>
            array (
                'id' => 1079,
                'name' => 'Chalatenango',
                'country_id' => 65,
                'arab_name' => 'Chalatenango',
            ),
            73 =>
            array (
                'id' => 1080,
                'name' => 'Cuscatlan',
                'country_id' => 65,
                'arab_name' => 'Cuscatlan',
            ),
            74 =>
            array (
                'id' => 1081,
                'name' => 'La Libertad',
                'country_id' => 65,
                'arab_name' => 'La Libertad',
            ),
            75 =>
            array (
                'id' => 1082,
                'name' => 'La Paz',
                'country_id' => 65,
                'arab_name' => 'La Paz',
            ),
            76 =>
            array (
                'id' => 1083,
                'name' => 'La Union',
                'country_id' => 65,
                'arab_name' => 'La Union',
            ),
            77 =>
            array (
                'id' => 1084,
                'name' => 'Morazan',
                'country_id' => 65,
                'arab_name' => 'Morazan',
            ),
            78 =>
            array (
                'id' => 1085,
                'name' => 'San Miguel',
                'country_id' => 65,
                'arab_name' => 'San Miguel',
            ),
            79 =>
            array (
                'id' => 1086,
                'name' => 'San Salvador',
                'country_id' => 65,
                'arab_name' => 'San Salvador',
            ),
            80 =>
            array (
                'id' => 1087,
                'name' => 'San Vicente',
                'country_id' => 65,
                'arab_name' => 'San Vicente',
            ),
            81 =>
            array (
                'id' => 1088,
                'name' => 'Santa Ana',
                'country_id' => 65,
                'arab_name' => 'Santa Ana',
            ),
            82 =>
            array (
                'id' => 1089,
                'name' => 'Sonsonate',
                'country_id' => 65,
                'arab_name' => 'Sonsonate',
            ),
            83 =>
            array (
                'id' => 1090,
                'name' => 'Usulutan',
                'country_id' => 65,
                'arab_name' => 'Usulutan',
            ),
            84 =>
            array (
                'id' => 1091,
                'name' => 'Annobon',
                'country_id' => 66,
                'arab_name' => 'Annobon',
            ),
            85 =>
            array (
                'id' => 1092,
                'name' => 'Bioko Norte',
                'country_id' => 66,
                'arab_name' => 'Bioko Norte',
            ),
            86 =>
            array (
                'id' => 1093,
                'name' => 'Bioko Sur',
                'country_id' => 66,
                'arab_name' => 'Bioko Sur',
            ),
            87 =>
            array (
                'id' => 1094,
                'name' => 'Centro Sur',
                'country_id' => 66,
                'arab_name' => 'Centro Sur',
            ),
            88 =>
            array (
                'id' => 1095,
                'name' => 'Kie-Ntem',
                'country_id' => 66,
                'arab_name' => 'Kie-Ntem',
            ),
            89 =>
            array (
                'id' => 1096,
                'name' => 'Litoral',
                'country_id' => 66,
                'arab_name' => 'Litoral',
            ),
            90 =>
            array (
                'id' => 1097,
                'name' => 'Wele-Nzas',
                'country_id' => 66,
                'arab_name' => 'Wele-Nzas',
            ),
            91 =>
            array (
                'id' => 1098,
                'name' => 'Anseba',
                'country_id' => 67,
                'arab_name' => 'Anseba',
            ),
            92 =>
            array (
                'id' => 1099,
                'name' => 'Debub',
                'country_id' => 67,
                'arab_name' => 'Debub',
            ),
            93 =>
            array (
                'id' => 1100,
                'name' => 'Debub-Keih-Bahri',
                'country_id' => 67,
                'arab_name' => 'Debub-Keih-Bahri',
            ),
            94 =>
            array (
                'id' => 1101,
                'name' => 'Gash-Barka',
                'country_id' => 67,
                'arab_name' => 'Gash-Barka',
            ),
            95 =>
            array (
                'id' => 1102,
                'name' => 'Maekel',
                'country_id' => 67,
                'arab_name' => 'Maekel',
            ),
            96 =>
            array (
                'id' => 1103,
                'name' => 'Semien-Keih-Bahri',
                'country_id' => 67,
                'arab_name' => 'Semien-Keih-Bahri',
            ),
            97 =>
            array (
                'id' => 1104,
                'name' => 'Harju',
                'country_id' => 68,
                'arab_name' => 'Harju',
            ),
            98 =>
            array (
                'id' => 1105,
                'name' => 'Hiiu',
                'country_id' => 68,
                'arab_name' => 'Hiiu',
            ),
            99 =>
            array (
                'id' => 1106,
                'name' => 'Ida-Viru',
                'country_id' => 68,
                'arab_name' => 'Ida-Viru',
            ),
            100 =>
            array (
                'id' => 1107,
                'name' => 'Jarva',
                'country_id' => 68,
                'arab_name' => 'Jarva',
            ),
            101 =>
            array (
                'id' => 1108,
                'name' => 'Jogeva',
                'country_id' => 68,
                'arab_name' => 'Jogeva',
            ),
            102 =>
            array (
                'id' => 1109,
                'name' => 'Laane',
                'country_id' => 68,
                'arab_name' => 'Laane',
            ),
            103 =>
            array (
                'id' => 1110,
                'name' => 'Laane-Viru',
                'country_id' => 68,
                'arab_name' => 'Laane-Viru',
            ),
            104 =>
            array (
                'id' => 1111,
                'name' => 'Parnu',
                'country_id' => 68,
                'arab_name' => 'Parnu',
            ),
            105 =>
            array (
                'id' => 1112,
                'name' => 'Polva',
                'country_id' => 68,
                'arab_name' => 'Polva',
            ),
            106 =>
            array (
                'id' => 1113,
                'name' => 'Rapla',
                'country_id' => 68,
                'arab_name' => 'Rapla',
            ),
            107 =>
            array (
                'id' => 1114,
                'name' => 'Saare',
                'country_id' => 68,
                'arab_name' => 'Saare',
            ),
            108 =>
            array (
                'id' => 1115,
                'name' => 'Tartu',
                'country_id' => 68,
                'arab_name' => 'Tartu',
            ),
            109 =>
            array (
                'id' => 1116,
                'name' => 'Valga',
                'country_id' => 68,
                'arab_name' => 'Valga',
            ),
            110 =>
            array (
                'id' => 1117,
                'name' => 'Viljandi',
                'country_id' => 68,
                'arab_name' => 'Viljandi',
            ),
            111 =>
            array (
                'id' => 1118,
                'name' => 'Voru',
                'country_id' => 68,
                'arab_name' => 'Voru',
            ),
            112 =>
            array (
                'id' => 1119,
                'name' => 'Addis Abeba',
                'country_id' => 69,
                'arab_name' => 'Addis Abeba',
            ),
            113 =>
            array (
                'id' => 1120,
                'name' => 'Afar',
                'country_id' => 69,
                'arab_name' => 'Afar',
            ),
            114 =>
            array (
                'id' => 1121,
                'name' => 'Amhara',
                'country_id' => 69,
                'arab_name' => 'Amhara',
            ),
            115 =>
            array (
                'id' => 1122,
                'name' => 'Benishangul',
                'country_id' => 69,
                'arab_name' => 'Benishangul',
            ),
            116 =>
            array (
                'id' => 1123,
                'name' => 'Diredawa',
                'country_id' => 69,
                'arab_name' => 'Diredawa',
            ),
            117 =>
            array (
                'id' => 1124,
                'name' => 'Gambella',
                'country_id' => 69,
                'arab_name' => 'Gambella',
            ),
            118 =>
            array (
                'id' => 1125,
                'name' => 'Harar',
                'country_id' => 69,
                'arab_name' => 'Harar',
            ),
            119 =>
            array (
                'id' => 1126,
                'name' => 'Jigjiga',
                'country_id' => 69,
                'arab_name' => 'Jigjiga',
            ),
            120 =>
            array (
                'id' => 1127,
                'name' => 'Mekele',
                'country_id' => 69,
                'arab_name' => 'Mekele',
            ),
            121 =>
            array (
                'id' => 1128,
                'name' => 'Oromia',
                'country_id' => 69,
                'arab_name' => 'Oromia',
            ),
            122 =>
            array (
                'id' => 1129,
                'name' => 'Somali',
                'country_id' => 69,
                'arab_name' => 'Somali',
            ),
            123 =>
            array (
                'id' => 1130,
                'name' => 'Southern',
                'country_id' => 69,
                'arab_name' => 'Southern',
            ),
            124 =>
            array (
                'id' => 1131,
                'name' => 'Tigray',
                'country_id' => 69,
                'arab_name' => 'Tigray',
            ),
            125 =>
            array (
                'id' => 1132,
                'name' => 'Christmas Island',
                'country_id' => 70,
                'arab_name' => 'Christmas Island',
            ),
            126 =>
            array (
                'id' => 1133,
                'name' => 'Cocos Islands',
                'country_id' => 70,
                'arab_name' => 'Cocos Islands',
            ),
            127 =>
            array (
                'id' => 1134,
                'name' => 'Coral Sea Islands',
                'country_id' => 70,
                'arab_name' => 'Coral Sea Islands',
            ),
            128 =>
            array (
                'id' => 1135,
                'name' => 'Falkland Islands',
                'country_id' => 71,
                'arab_name' => 'Falkland Islands',
            ),
            129 =>
            array (
                'id' => 1136,
                'name' => 'South Georgia',
                'country_id' => 71,
                'arab_name' => 'South Georgia',
            ),
            130 =>
            array (
                'id' => 1137,
                'name' => 'Klaksvik',
                'country_id' => 72,
                'arab_name' => 'Klaksvik',
            ),
            131 =>
            array (
                'id' => 1138,
                'name' => 'Nor ara Eysturoy',
                'country_id' => 72,
                'arab_name' => 'Nor ara Eysturoy',
            ),
            132 =>
            array (
                'id' => 1139,
                'name' => 'Nor oy',
                'country_id' => 72,
                'arab_name' => 'Nor oy',
            ),
            133 =>
            array (
                'id' => 1140,
                'name' => 'Sandoy',
                'country_id' => 72,
                'arab_name' => 'Sandoy',
            ),
            134 =>
            array (
                'id' => 1141,
                'name' => 'Streymoy',
                'country_id' => 72,
                'arab_name' => 'Streymoy',
            ),
            135 =>
            array (
                'id' => 1142,
                'name' => 'Su uroy',
                'country_id' => 72,
                'arab_name' => 'Su uroy',
            ),
            136 =>
            array (
                'id' => 1143,
                'name' => 'Sy ra Eysturoy',
                'country_id' => 72,
                'arab_name' => 'Sy ra Eysturoy',
            ),
            137 =>
            array (
                'id' => 1144,
                'name' => 'Torshavn',
                'country_id' => 72,
                'arab_name' => 'Torshavn',
            ),
            138 =>
            array (
                'id' => 1145,
                'name' => 'Vaga',
                'country_id' => 72,
                'arab_name' => 'Vaga',
            ),
            139 =>
            array (
                'id' => 1146,
                'name' => 'Central',
                'country_id' => 73,
                'arab_name' => 'Central',
            ),
            140 =>
            array (
                'id' => 1147,
                'name' => 'Eastern',
                'country_id' => 73,
                'arab_name' => 'Eastern',
            ),
            141 =>
            array (
                'id' => 1148,
                'name' => 'Northern',
                'country_id' => 73,
                'arab_name' => 'Northern',
            ),
            142 =>
            array (
                'id' => 1149,
                'name' => 'South Pacific',
                'country_id' => 73,
                'arab_name' => 'South Pacific',
            ),
            143 =>
            array (
                'id' => 1150,
                'name' => 'Western',
                'country_id' => 73,
                'arab_name' => 'Western',
            ),
            144 =>
            array (
                'id' => 1151,
                'name' => 'Ahvenanmaa',
                'country_id' => 74,
                'arab_name' => 'Ahvenanmaa',
            ),
            145 =>
            array (
                'id' => 1152,
                'name' => 'Etela-Karjala',
                'country_id' => 74,
                'arab_name' => 'Etela-Karjala',
            ),
            146 =>
            array (
                'id' => 1153,
                'name' => 'Etela-Pohjanmaa',
                'country_id' => 74,
                'arab_name' => 'Etela-Pohjanmaa',
            ),
            147 =>
            array (
                'id' => 1154,
                'name' => 'Etela-Savo',
                'country_id' => 74,
                'arab_name' => 'Etela-Savo',
            ),
            148 =>
            array (
                'id' => 1155,
                'name' => 'Etela-Suomen Laani',
                'country_id' => 74,
                'arab_name' => 'Etela-Suomen Laani',
            ),
            149 =>
            array (
                'id' => 1156,
                'name' => 'Ita-Suomen Laani',
                'country_id' => 74,
                'arab_name' => 'Ita-Suomen Laani',
            ),
            150 =>
            array (
                'id' => 1157,
                'name' => 'Ita-Uusimaa',
                'country_id' => 74,
                'arab_name' => 'Ita-Uusimaa',
            ),
            151 =>
            array (
                'id' => 1158,
                'name' => 'Kainuu',
                'country_id' => 74,
                'arab_name' => 'Kainuu',
            ),
            152 =>
            array (
                'id' => 1159,
                'name' => 'Kanta-Hame',
                'country_id' => 74,
                'arab_name' => 'Kanta-Hame',
            ),
            153 =>
            array (
                'id' => 1160,
                'name' => 'Keski-Pohjanmaa',
                'country_id' => 74,
                'arab_name' => 'Keski-Pohjanmaa',
            ),
            154 =>
            array (
                'id' => 1161,
                'name' => 'Keski-Suomi',
                'country_id' => 74,
                'arab_name' => 'Keski-Suomi',
            ),
            155 =>
            array (
                'id' => 1162,
                'name' => 'Kymenlaakso',
                'country_id' => 74,
                'arab_name' => 'Kymenlaakso',
            ),
            156 =>
            array (
                'id' => 1163,
                'name' => 'Lansi-Suomen Laani',
                'country_id' => 74,
                'arab_name' => 'Lansi-Suomen Laani',
            ),
            157 =>
            array (
                'id' => 1164,
                'name' => 'Lappi',
                'country_id' => 74,
                'arab_name' => 'Lappi',
            ),
            158 =>
            array (
                'id' => 1165,
                'name' => 'Northern Savonia',
                'country_id' => 74,
                'arab_name' => 'Northern Savonia',
            ),
            159 =>
            array (
                'id' => 1166,
                'name' => 'Ostrobothnia',
                'country_id' => 74,
                'arab_name' => 'Ostrobothnia',
            ),
            160 =>
            array (
                'id' => 1167,
                'name' => 'Oulun Laani',
                'country_id' => 74,
                'arab_name' => 'Oulun Laani',
            ),
            161 =>
            array (
                'id' => 1168,
                'name' => 'Paijat-Hame',
                'country_id' => 74,
                'arab_name' => 'Paijat-Hame',
            ),
            162 =>
            array (
                'id' => 1169,
                'name' => 'Pirkanmaa',
                'country_id' => 74,
                'arab_name' => 'Pirkanmaa',
            ),
            163 =>
            array (
                'id' => 1170,
                'name' => 'Pohjanmaa',
                'country_id' => 74,
                'arab_name' => 'Pohjanmaa',
            ),
            164 =>
            array (
                'id' => 1171,
                'name' => 'Pohjois-Karjala',
                'country_id' => 74,
                'arab_name' => 'Pohjois-Karjala',
            ),
            165 =>
            array (
                'id' => 1172,
                'name' => 'Pohjois-Pohjanmaa',
                'country_id' => 74,
                'arab_name' => 'Pohjois-Pohjanmaa',
            ),
            166 =>
            array (
                'id' => 1173,
                'name' => 'Pohjois-Savo',
                'country_id' => 74,
                'arab_name' => 'Pohjois-Savo',
            ),
            167 =>
            array (
                'id' => 1174,
                'name' => 'Saarijarvi',
                'country_id' => 74,
                'arab_name' => 'Saarijarvi',
            ),
            168 =>
            array (
                'id' => 1175,
                'name' => 'Satakunta',
                'country_id' => 74,
                'arab_name' => 'Satakunta',
            ),
            169 =>
            array (
                'id' => 1176,
                'name' => 'Southern Savonia',
                'country_id' => 74,
                'arab_name' => 'Southern Savonia',
            ),
            170 =>
            array (
                'id' => 1177,
                'name' => 'Tavastia Proper',
                'country_id' => 74,
                'arab_name' => 'Tavastia Proper',
            ),
            171 =>
            array (
                'id' => 1178,
                'name' => 'Uleaborgs Lan',
                'country_id' => 74,
                'arab_name' => 'Uleaborgs Lan',
            ),
            172 =>
            array (
                'id' => 1179,
                'name' => 'Uusimaa',
                'country_id' => 74,
                'arab_name' => 'Uusimaa',
            ),
            173 =>
            array (
                'id' => 1180,
                'name' => 'Varsinais-Suomi',
                'country_id' => 74,
                'arab_name' => 'Varsinais-Suomi',
            ),
            174 =>
            array (
                'id' => 1181,
                'name' => 'Ain',
                'country_id' => 75,
                'arab_name' => 'Ain',
            ),
            175 =>
            array (
                'id' => 1182,
                'name' => 'Aisne',
                'country_id' => 75,
                'arab_name' => 'Aisne',
            ),
            176 =>
            array (
                'id' => 1183,
                'name' => 'Albi Le Sequestre',
                'country_id' => 75,
                'arab_name' => 'Albi Le Sequestre',
            ),
            177 =>
            array (
                'id' => 1184,
                'name' => 'Allier',
                'country_id' => 75,
                'arab_name' => 'Allier',
            ),
            178 =>
            array (
                'id' => 1185,
                'name' => 'Alpes-Cote dAzur',
                'country_id' => 75,
                'arab_name' => 'Alpes-Cote dAzur',
            ),
            179 =>
            array (
                'id' => 1186,
                'name' => 'Alpes-Maritimes',
                'country_id' => 75,
                'arab_name' => 'Alpes-Maritimes',
            ),
            180 =>
            array (
                'id' => 1187,
                'name' => 'Alpes-de-Haute-Provence',
                'country_id' => 75,
                'arab_name' => 'Alpes-de-Haute-Provence',
            ),
            181 =>
            array (
                'id' => 1188,
                'name' => 'Alsace',
                'country_id' => 75,
                'arab_name' => 'Alsace',
            ),
            182 =>
            array (
                'id' => 1189,
                'name' => 'Aquitaine',
                'country_id' => 75,
                'arab_name' => 'Aquitaine',
            ),
            183 =>
            array (
                'id' => 1190,
                'name' => 'Ardeche',
                'country_id' => 75,
                'arab_name' => 'Ardeche',
            ),
            184 =>
            array (
                'id' => 1191,
                'name' => 'Ardennes',
                'country_id' => 75,
                'arab_name' => 'Ardennes',
            ),
            185 =>
            array (
                'id' => 1192,
                'name' => 'Ariege',
                'country_id' => 75,
                'arab_name' => 'Ariege',
            ),
            186 =>
            array (
                'id' => 1193,
                'name' => 'Aube',
                'country_id' => 75,
                'arab_name' => 'Aube',
            ),
            187 =>
            array (
                'id' => 1194,
                'name' => 'Aude',
                'country_id' => 75,
                'arab_name' => 'Aude',
            ),
            188 =>
            array (
                'id' => 1195,
                'name' => 'Auvergne',
                'country_id' => 75,
                'arab_name' => 'Auvergne',
            ),
            189 =>
            array (
                'id' => 1196,
                'name' => 'Aveyron',
                'country_id' => 75,
                'arab_name' => 'Aveyron',
            ),
            190 =>
            array (
                'id' => 1197,
                'name' => 'Bas-Rhin',
                'country_id' => 75,
                'arab_name' => 'Bas-Rhin',
            ),
            191 =>
            array (
                'id' => 1198,
                'name' => 'Basse-Normandie',
                'country_id' => 75,
                'arab_name' => 'Basse-Normandie',
            ),
            192 =>
            array (
                'id' => 1199,
                'name' => 'Bouches-du-Rhone',
                'country_id' => 75,
                'arab_name' => 'Bouches-du-Rhone',
            ),
            193 =>
            array (
                'id' => 1200,
                'name' => 'Bourgogne',
                'country_id' => 75,
                'arab_name' => 'Bourgogne',
            ),
            194 =>
            array (
                'id' => 1201,
                'name' => 'Bretagne',
                'country_id' => 75,
                'arab_name' => 'Bretagne',
            ),
            195 =>
            array (
                'id' => 1202,
                'name' => 'Brittany',
                'country_id' => 75,
                'arab_name' => 'Brittany',
            ),
            196 =>
            array (
                'id' => 1203,
                'name' => 'Burgundy',
                'country_id' => 75,
                'arab_name' => 'Burgundy',
            ),
            197 =>
            array (
                'id' => 1204,
                'name' => 'Calvados',
                'country_id' => 75,
                'arab_name' => 'Calvados',
            ),
            198 =>
            array (
                'id' => 1205,
                'name' => 'Cantal',
                'country_id' => 75,
                'arab_name' => 'Cantal',
            ),
            199 =>
            array (
                'id' => 1206,
                'name' => 'Cedex',
                'country_id' => 75,
                'arab_name' => 'Cedex',
            ),
            200 =>
            array (
                'id' => 1207,
                'name' => 'Centre',
                'country_id' => 75,
                'arab_name' => 'Centre',
            ),
            201 =>
            array (
                'id' => 1208,
                'name' => 'Charente',
                'country_id' => 75,
                'arab_name' => 'Charente',
            ),
            202 =>
            array (
                'id' => 1209,
                'name' => 'Charente-Maritime',
                'country_id' => 75,
                'arab_name' => 'Charente-Maritime',
            ),
            203 =>
            array (
                'id' => 1210,
                'name' => 'Cher',
                'country_id' => 75,
                'arab_name' => 'Cher',
            ),
            204 =>
            array (
                'id' => 1211,
                'name' => 'Correze',
                'country_id' => 75,
                'arab_name' => 'Correze',
            ),
            205 =>
            array (
                'id' => 1212,
                'name' => 'Corse-du-Sud',
                'country_id' => 75,
                'arab_name' => 'Corse-du-Sud',
            ),
            206 =>
            array (
                'id' => 1213,
                'name' => 'Cote-d\'Or',
                'country_id' => 75,
                'arab_name' => 'Cote-d\'Or',
            ),
            207 =>
            array (
                'id' => 1214,
                'name' => 'Cotes-d\'Armor',
                'country_id' => 75,
                'arab_name' => 'Cotes-d\'Armor',
            ),
            208 =>
            array (
                'id' => 1215,
                'name' => 'Creuse',
                'country_id' => 75,
                'arab_name' => 'Creuse',
            ),
            209 =>
            array (
                'id' => 1216,
                'name' => 'Crolles',
                'country_id' => 75,
                'arab_name' => 'Crolles',
            ),
            210 =>
            array (
                'id' => 1217,
                'name' => 'Deux-Sevres',
                'country_id' => 75,
                'arab_name' => 'Deux-Sevres',
            ),
            211 =>
            array (
                'id' => 1218,
                'name' => 'Dordogne',
                'country_id' => 75,
                'arab_name' => 'Dordogne',
            ),
            212 =>
            array (
                'id' => 1219,
                'name' => 'Doubs',
                'country_id' => 75,
                'arab_name' => 'Doubs',
            ),
            213 =>
            array (
                'id' => 1220,
                'name' => 'Drome',
                'country_id' => 75,
                'arab_name' => 'Drome',
            ),
            214 =>
            array (
                'id' => 1221,
                'name' => 'Essonne',
                'country_id' => 75,
                'arab_name' => 'Essonne',
            ),
            215 =>
            array (
                'id' => 1222,
                'name' => 'Eure',
                'country_id' => 75,
                'arab_name' => 'Eure',
            ),
            216 =>
            array (
                'id' => 1223,
                'name' => 'Eure-et-Loir',
                'country_id' => 75,
                'arab_name' => 'Eure-et-Loir',
            ),
            217 =>
            array (
                'id' => 1224,
                'name' => 'Feucherolles',
                'country_id' => 75,
                'arab_name' => 'Feucherolles',
            ),
            218 =>
            array (
                'id' => 1225,
                'name' => 'Finistere',
                'country_id' => 75,
                'arab_name' => 'Finistere',
            ),
            219 =>
            array (
                'id' => 1226,
                'name' => 'Franche-Comte',
                'country_id' => 75,
                'arab_name' => 'Franche-Comte',
            ),
            220 =>
            array (
                'id' => 1227,
                'name' => 'Gard',
                'country_id' => 75,
                'arab_name' => 'Gard',
            ),
            221 =>
            array (
                'id' => 1228,
                'name' => 'Gers',
                'country_id' => 75,
                'arab_name' => 'Gers',
            ),
            222 =>
            array (
                'id' => 1229,
                'name' => 'Gironde',
                'country_id' => 75,
                'arab_name' => 'Gironde',
            ),
            223 =>
            array (
                'id' => 1230,
                'name' => 'Haut-Rhin',
                'country_id' => 75,
                'arab_name' => 'Haut-Rhin',
            ),
            224 =>
            array (
                'id' => 1231,
                'name' => 'Haute-Corse',
                'country_id' => 75,
                'arab_name' => 'Haute-Corse',
            ),
            225 =>
            array (
                'id' => 1232,
                'name' => 'Haute-Garonne',
                'country_id' => 75,
                'arab_name' => 'Haute-Garonne',
            ),
            226 =>
            array (
                'id' => 1233,
                'name' => 'Haute-Loire',
                'country_id' => 75,
                'arab_name' => 'Haute-Loire',
            ),
            227 =>
            array (
                'id' => 1234,
                'name' => 'Haute-Marne',
                'country_id' => 75,
                'arab_name' => 'Haute-Marne',
            ),
            228 =>
            array (
                'id' => 1235,
                'name' => 'Haute-Saone',
                'country_id' => 75,
                'arab_name' => 'Haute-Saone',
            ),
            229 =>
            array (
                'id' => 1236,
                'name' => 'Haute-Savoie',
                'country_id' => 75,
                'arab_name' => 'Haute-Savoie',
            ),
            230 =>
            array (
                'id' => 1237,
                'name' => 'Haute-Vienne',
                'country_id' => 75,
                'arab_name' => 'Haute-Vienne',
            ),
            231 =>
            array (
                'id' => 1238,
                'name' => 'Hautes-Alpes',
                'country_id' => 75,
                'arab_name' => 'Hautes-Alpes',
            ),
            232 =>
            array (
                'id' => 1239,
                'name' => 'Hautes-Pyrenees',
                'country_id' => 75,
                'arab_name' => 'Hautes-Pyrenees',
            ),
            233 =>
            array (
                'id' => 1240,
                'name' => 'Hauts-de-Seine',
                'country_id' => 75,
                'arab_name' => 'Hauts-de-Seine',
            ),
            234 =>
            array (
                'id' => 1241,
                'name' => 'Herault',
                'country_id' => 75,
                'arab_name' => 'Herault',
            ),
            235 =>
            array (
                'id' => 1242,
                'name' => 'Ile-de-France',
                'country_id' => 75,
                'arab_name' => 'Ile-de-France',
            ),
            236 =>
            array (
                'id' => 1243,
                'name' => 'Ille-et-Vilaine',
                'country_id' => 75,
                'arab_name' => 'Ille-et-Vilaine',
            ),
            237 =>
            array (
                'id' => 1244,
                'name' => 'Indre',
                'country_id' => 75,
                'arab_name' => 'Indre',
            ),
            238 =>
            array (
                'id' => 1245,
                'name' => 'Indre-et-Loire',
                'country_id' => 75,
                'arab_name' => 'Indre-et-Loire',
            ),
            239 =>
            array (
                'id' => 1246,
                'name' => 'Isere',
                'country_id' => 75,
                'arab_name' => 'Isere',
            ),
            240 =>
            array (
                'id' => 1247,
                'name' => 'Jura',
                'country_id' => 75,
                'arab_name' => 'Jura',
            ),
            241 =>
            array (
                'id' => 1248,
                'name' => 'Klagenfurt',
                'country_id' => 75,
                'arab_name' => 'Klagenfurt',
            ),
            242 =>
            array (
                'id' => 1249,
                'name' => 'Landes',
                'country_id' => 75,
                'arab_name' => 'Landes',
            ),
            243 =>
            array (
                'id' => 1250,
                'name' => 'Languedoc-Roussillon',
                'country_id' => 75,
                'arab_name' => 'Languedoc-Roussillon',
            ),
            244 =>
            array (
                'id' => 1251,
                'name' => 'Larcay',
                'country_id' => 75,
                'arab_name' => 'Larcay',
            ),
            245 =>
            array (
                'id' => 1252,
                'name' => 'Le Castellet',
                'country_id' => 75,
                'arab_name' => 'Le Castellet',
            ),
            246 =>
            array (
                'id' => 1253,
                'name' => 'Le Creusot',
                'country_id' => 75,
                'arab_name' => 'Le Creusot',
            ),
            247 =>
            array (
                'id' => 1254,
                'name' => 'Limousin',
                'country_id' => 75,
                'arab_name' => 'Limousin',
            ),
            248 =>
            array (
                'id' => 1255,
                'name' => 'Loir-et-Cher',
                'country_id' => 75,
                'arab_name' => 'Loir-et-Cher',
            ),
            249 =>
            array (
                'id' => 1256,
                'name' => 'Loire',
                'country_id' => 75,
                'arab_name' => 'Loire',
            ),
            250 =>
            array (
                'id' => 1257,
                'name' => 'Loire-Atlantique',
                'country_id' => 75,
                'arab_name' => 'Loire-Atlantique',
            ),
            251 =>
            array (
                'id' => 1258,
                'name' => 'Loiret',
                'country_id' => 75,
                'arab_name' => 'Loiret',
            ),
            252 =>
            array (
                'id' => 1259,
                'name' => 'Lorraine',
                'country_id' => 75,
                'arab_name' => 'Lorraine',
            ),
            253 =>
            array (
                'id' => 1260,
                'name' => 'Lot',
                'country_id' => 75,
                'arab_name' => 'Lot',
            ),
            254 =>
            array (
                'id' => 1261,
                'name' => 'Lot-et-Garonne',
                'country_id' => 75,
                'arab_name' => 'Lot-et-Garonne',
            ),
            255 =>
            array (
                'id' => 1262,
                'name' => 'Lower Normandy',
                'country_id' => 75,
                'arab_name' => 'Lower Normandy',
            ),
            256 =>
            array (
                'id' => 1263,
                'name' => 'Lozere',
                'country_id' => 75,
                'arab_name' => 'Lozere',
            ),
            257 =>
            array (
                'id' => 1264,
                'name' => 'Maine-et-Loire',
                'country_id' => 75,
                'arab_name' => 'Maine-et-Loire',
            ),
            258 =>
            array (
                'id' => 1265,
                'name' => 'Manche',
                'country_id' => 75,
                'arab_name' => 'Manche',
            ),
            259 =>
            array (
                'id' => 1266,
                'name' => 'Marne',
                'country_id' => 75,
                'arab_name' => 'Marne',
            ),
            260 =>
            array (
                'id' => 1267,
                'name' => 'Mayenne',
                'country_id' => 75,
                'arab_name' => 'Mayenne',
            ),
            261 =>
            array (
                'id' => 1268,
                'name' => 'Meurthe-et-Moselle',
                'country_id' => 75,
                'arab_name' => 'Meurthe-et-Moselle',
            ),
            262 =>
            array (
                'id' => 1269,
                'name' => 'Meuse',
                'country_id' => 75,
                'arab_name' => 'Meuse',
            ),
            263 =>
            array (
                'id' => 1270,
                'name' => 'Midi-Pyrenees',
                'country_id' => 75,
                'arab_name' => 'Midi-Pyrenees',
            ),
            264 =>
            array (
                'id' => 1271,
                'name' => 'Morbihan',
                'country_id' => 75,
                'arab_name' => 'Morbihan',
            ),
            265 =>
            array (
                'id' => 1272,
                'name' => 'Moselle',
                'country_id' => 75,
                'arab_name' => 'Moselle',
            ),
            266 =>
            array (
                'id' => 1273,
                'name' => 'Nievre',
                'country_id' => 75,
                'arab_name' => 'Nievre',
            ),
            267 =>
            array (
                'id' => 1274,
                'name' => 'Nord',
                'country_id' => 75,
                'arab_name' => 'Nord',
            ),
            268 =>
            array (
                'id' => 1275,
                'name' => 'Nord-Pas-de-Calais',
                'country_id' => 75,
                'arab_name' => 'Nord-Pas-de-Calais',
            ),
            269 =>
            array (
                'id' => 1276,
                'name' => 'Oise',
                'country_id' => 75,
                'arab_name' => 'Oise',
            ),
            270 =>
            array (
                'id' => 1277,
                'name' => 'Orne',
                'country_id' => 75,
                'arab_name' => 'Orne',
            ),
            271 =>
            array (
                'id' => 1278,
                'name' => 'Paris',
                'country_id' => 75,
                'arab_name' => 'Paris',
            ),
            272 =>
            array (
                'id' => 1279,
                'name' => 'Pas-de-Calais',
                'country_id' => 75,
                'arab_name' => 'Pas-de-Calais',
            ),
            273 =>
            array (
                'id' => 1280,
                'name' => 'Pays de la Loire',
                'country_id' => 75,
                'arab_name' => 'Pays de la Loire',
            ),
            274 =>
            array (
                'id' => 1281,
                'name' => 'Pays-de-la-Loire',
                'country_id' => 75,
                'arab_name' => 'Pays-de-la-Loire',
            ),
            275 =>
            array (
                'id' => 1282,
                'name' => 'Picardy',
                'country_id' => 75,
                'arab_name' => 'Picardy',
            ),
            276 =>
            array (
                'id' => 1283,
                'name' => 'Puy-de-Dome',
                'country_id' => 75,
                'arab_name' => 'Puy-de-Dome',
            ),
            277 =>
            array (
                'id' => 1284,
                'name' => 'Pyrenees-Atlantiques',
                'country_id' => 75,
                'arab_name' => 'Pyrenees-Atlantiques',
            ),
            278 =>
            array (
                'id' => 1285,
                'name' => 'Pyrenees-Orientales',
                'country_id' => 75,
                'arab_name' => 'Pyrenees-Orientales',
            ),
            279 =>
            array (
                'id' => 1286,
                'name' => 'Quelmes',
                'country_id' => 75,
                'arab_name' => 'Quelmes',
            ),
            280 =>
            array (
                'id' => 1287,
                'name' => 'Rhone',
                'country_id' => 75,
                'arab_name' => 'Rhone',
            ),
            281 =>
            array (
                'id' => 1288,
                'name' => 'Rhone-Alpes',
                'country_id' => 75,
                'arab_name' => 'Rhone-Alpes',
            ),
            282 =>
            array (
                'id' => 1289,
                'name' => 'Saint Ouen',
                'country_id' => 75,
                'arab_name' => 'Saint Ouen',
            ),
            283 =>
            array (
                'id' => 1290,
                'name' => 'Saint Viatre',
                'country_id' => 75,
                'arab_name' => 'Saint Viatre',
            ),
            284 =>
            array (
                'id' => 1291,
                'name' => 'Saone-et-Loire',
                'country_id' => 75,
                'arab_name' => 'Saone-et-Loire',
            ),
            285 =>
            array (
                'id' => 1292,
                'name' => 'Sarthe',
                'country_id' => 75,
                'arab_name' => 'Sarthe',
            ),
            286 =>
            array (
                'id' => 1293,
                'name' => 'Savoie',
                'country_id' => 75,
                'arab_name' => 'Savoie',
            ),
            287 =>
            array (
                'id' => 1294,
                'name' => 'Seine-Maritime',
                'country_id' => 75,
                'arab_name' => 'Seine-Maritime',
            ),
            288 =>
            array (
                'id' => 1295,
                'name' => 'Seine-Saint-Denis',
                'country_id' => 75,
                'arab_name' => 'Seine-Saint-Denis',
            ),
            289 =>
            array (
                'id' => 1296,
                'name' => 'Seine-et-Marne',
                'country_id' => 75,
                'arab_name' => 'Seine-et-Marne',
            ),
            290 =>
            array (
                'id' => 1297,
                'name' => 'Somme',
                'country_id' => 75,
                'arab_name' => 'Somme',
            ),
            291 =>
            array (
                'id' => 1298,
                'name' => 'Sophia Antipolis',
                'country_id' => 75,
                'arab_name' => 'Sophia Antipolis',
            ),
            292 =>
            array (
                'id' => 1299,
                'name' => 'Souvans',
                'country_id' => 75,
                'arab_name' => 'Souvans',
            ),
            293 =>
            array (
                'id' => 1300,
                'name' => 'Tarn',
                'country_id' => 75,
                'arab_name' => 'Tarn',
            ),
            294 =>
            array (
                'id' => 1301,
                'name' => 'Tarn-et-Garonne',
                'country_id' => 75,
                'arab_name' => 'Tarn-et-Garonne',
            ),
            295 =>
            array (
                'id' => 1302,
                'name' => 'Territoire de Belfort',
                'country_id' => 75,
                'arab_name' => 'Territoire de Belfort',
            ),
            296 =>
            array (
                'id' => 1303,
                'name' => 'Treignac',
                'country_id' => 75,
                'arab_name' => 'Treignac',
            ),
            297 =>
            array (
                'id' => 1304,
                'name' => 'Upper Normandy',
                'country_id' => 75,
                'arab_name' => 'Upper Normandy',
            ),
            298 =>
            array (
                'id' => 1305,
                'name' => 'Val-d\'Oise',
                'country_id' => 75,
                'arab_name' => 'Val-d\'Oise',
            ),
            299 =>
            array (
                'id' => 1306,
                'name' => 'Val-de-Marne',
                'country_id' => 75,
                'arab_name' => 'Val-de-Marne',
            ),
            300 =>
            array (
                'id' => 1307,
                'name' => 'Var',
                'country_id' => 75,
                'arab_name' => 'Var',
            ),
            301 =>
            array (
                'id' => 1308,
                'name' => 'Vaucluse',
                'country_id' => 75,
                'arab_name' => 'Vaucluse',
            ),
            302 =>
            array (
                'id' => 1309,
                'name' => 'Vellise',
                'country_id' => 75,
                'arab_name' => 'Vellise',
            ),
            303 =>
            array (
                'id' => 1310,
                'name' => 'Vendee',
                'country_id' => 75,
                'arab_name' => 'Vendee',
            ),
            304 =>
            array (
                'id' => 1311,
                'name' => 'Vienne',
                'country_id' => 75,
                'arab_name' => 'Vienne',
            ),
            305 =>
            array (
                'id' => 1312,
                'name' => 'Vosges',
                'country_id' => 75,
                'arab_name' => 'Vosges',
            ),
            306 =>
            array (
                'id' => 1313,
                'name' => 'Yonne',
                'country_id' => 75,
                'arab_name' => 'Yonne',
            ),
            307 =>
            array (
                'id' => 1314,
                'name' => 'Yvelines',
                'country_id' => 75,
                'arab_name' => 'Yvelines',
            ),
            308 =>
            array (
                'id' => 1315,
                'name' => 'Cayenne',
                'country_id' => 76,
                'arab_name' => 'Cayenne',
            ),
            309 =>
            array (
                'id' => 1316,
                'name' => 'Saint-Laurent-du-Maroni',
                'country_id' => 76,
                'arab_name' => 'Saint-Laurent-du-Maroni',
            ),
            310 =>
            array (
                'id' => 1317,
                'name' => 'Iles du Vent',
                'country_id' => 77,
                'arab_name' => 'Iles du Vent',
            ),
            311 =>
            array (
                'id' => 1318,
                'name' => 'Iles sous le Vent',
                'country_id' => 77,
                'arab_name' => 'Iles sous le Vent',
            ),
            312 =>
            array (
                'id' => 1319,
                'name' => 'Marquesas',
                'country_id' => 77,
                'arab_name' => 'Marquesas',
            ),
            313 =>
            array (
                'id' => 1320,
                'name' => 'Tuamotu',
                'country_id' => 77,
                'arab_name' => 'Tuamotu',
            ),
            314 =>
            array (
                'id' => 1321,
                'name' => 'Tubuai',
                'country_id' => 77,
                'arab_name' => 'Tubuai',
            ),
            315 =>
            array (
                'id' => 1322,
                'name' => 'Amsterdam',
                'country_id' => 78,
                'arab_name' => 'Amsterdam',
            ),
            316 =>
            array (
                'id' => 1323,
                'name' => 'Crozet Islands',
                'country_id' => 78,
                'arab_name' => 'Crozet Islands',
            ),
            317 =>
            array (
                'id' => 1324,
                'name' => 'Kerguelen',
                'country_id' => 78,
                'arab_name' => 'Kerguelen',
            ),
            318 =>
            array (
                'id' => 1325,
                'name' => 'Estuaire',
                'country_id' => 79,
                'arab_name' => 'Estuaire',
            ),
            319 =>
            array (
                'id' => 1326,
                'name' => 'Haut-Ogooue',
                'country_id' => 79,
                'arab_name' => 'Haut-Ogooue',
            ),
            320 =>
            array (
                'id' => 1327,
                'name' => 'Moyen-Ogooue',
                'country_id' => 79,
                'arab_name' => 'Moyen-Ogooue',
            ),
            321 =>
            array (
                'id' => 1328,
                'name' => 'Ngounie',
                'country_id' => 79,
                'arab_name' => 'Ngounie',
            ),
            322 =>
            array (
                'id' => 1329,
                'name' => 'Nyanga',
                'country_id' => 79,
                'arab_name' => 'Nyanga',
            ),
            323 =>
            array (
                'id' => 1330,
                'name' => 'Ogooue-Ivindo',
                'country_id' => 79,
                'arab_name' => 'Ogooue-Ivindo',
            ),
            324 =>
            array (
                'id' => 1331,
                'name' => 'Ogooue-Lolo',
                'country_id' => 79,
                'arab_name' => 'Ogooue-Lolo',
            ),
            325 =>
            array (
                'id' => 1332,
                'name' => 'Ogooue-Maritime',
                'country_id' => 79,
                'arab_name' => 'Ogooue-Maritime',
            ),
            326 =>
            array (
                'id' => 1333,
                'name' => 'Woleu-Ntem',
                'country_id' => 79,
                'arab_name' => 'Woleu-Ntem',
            ),
            327 =>
            array (
                'id' => 1334,
                'name' => 'Banjul',
                'country_id' => 80,
                'arab_name' => 'Banjul',
            ),
            328 =>
            array (
                'id' => 1335,
                'name' => 'Basse',
                'country_id' => 80,
                'arab_name' => 'Basse',
            ),
            329 =>
            array (
                'id' => 1336,
                'name' => 'Brikama',
                'country_id' => 80,
                'arab_name' => 'Brikama',
            ),
            330 =>
            array (
                'id' => 1337,
                'name' => 'Janjanbureh',
                'country_id' => 80,
                'arab_name' => 'Janjanbureh',
            ),
            331 =>
            array (
                'id' => 1338,
                'name' => 'Kanifing',
                'country_id' => 80,
                'arab_name' => 'Kanifing',
            ),
            332 =>
            array (
                'id' => 1339,
                'name' => 'Kerewan',
                'country_id' => 80,
                'arab_name' => 'Kerewan',
            ),
            333 =>
            array (
                'id' => 1340,
                'name' => 'Kuntaur',
                'country_id' => 80,
                'arab_name' => 'Kuntaur',
            ),
            334 =>
            array (
                'id' => 1341,
                'name' => 'Mansakonko',
                'country_id' => 80,
                'arab_name' => 'Mansakonko',
            ),
            335 =>
            array (
                'id' => 1342,
                'name' => 'Abhasia',
                'country_id' => 81,
                'arab_name' => 'Abhasia',
            ),
            336 =>
            array (
                'id' => 1343,
                'name' => 'Ajaria',
                'country_id' => 81,
                'arab_name' => 'Ajaria',
            ),
            337 =>
            array (
                'id' => 1344,
                'name' => 'Guria',
                'country_id' => 81,
                'arab_name' => 'Guria',
            ),
            338 =>
            array (
                'id' => 1345,
                'name' => 'Imereti',
                'country_id' => 81,
                'arab_name' => 'Imereti',
            ),
            339 =>
            array (
                'id' => 1346,
                'name' => 'Kaheti',
                'country_id' => 81,
                'arab_name' => 'Kaheti',
            ),
            340 =>
            array (
                'id' => 1347,
                'name' => 'Kvemo Kartli',
                'country_id' => 81,
                'arab_name' => 'Kvemo Kartli',
            ),
            341 =>
            array (
                'id' => 1348,
                'name' => 'Mcheta-Mtianeti',
                'country_id' => 81,
                'arab_name' => 'Mcheta-Mtianeti',
            ),
            342 =>
            array (
                'id' => 1349,
                'name' => 'Racha',
                'country_id' => 81,
                'arab_name' => 'Racha',
            ),
            343 =>
            array (
                'id' => 1350,
                'name' => 'Samagrelo-Zemo Svaneti',
                'country_id' => 81,
                'arab_name' => 'Samagrelo-Zemo Svaneti',
            ),
            344 =>
            array (
                'id' => 1351,
                'name' => 'Samche-Zhavaheti',
                'country_id' => 81,
                'arab_name' => 'Samche-Zhavaheti',
            ),
            345 =>
            array (
                'id' => 1352,
                'name' => 'Shida Kartli',
                'country_id' => 81,
                'arab_name' => 'Shida Kartli',
            ),
            346 =>
            array (
                'id' => 1353,
                'name' => 'Tbilisi',
                'country_id' => 81,
                'arab_name' => 'Tbilisi',
            ),
            347 =>
            array (
                'id' => 1354,
                'name' => 'Auvergne',
                'country_id' => 82,
                'arab_name' => 'Auvergne',
            ),
            348 =>
            array (
                'id' => 1355,
                'name' => 'Baden-Wurttemberg',
                'country_id' => 82,
                'arab_name' => 'Baden-Wurttemberg',
            ),
            349 =>
            array (
                'id' => 1356,
                'name' => 'Bavaria',
                'country_id' => 82,
                'arab_name' => 'Bavaria',
            ),
            350 =>
            array (
                'id' => 1357,
                'name' => 'Bayern',
                'country_id' => 82,
                'arab_name' => 'Bayern',
            ),
            351 =>
            array (
                'id' => 1358,
                'name' => 'Beilstein Wurtt',
                'country_id' => 82,
                'arab_name' => 'Beilstein Wurtt',
            ),
            352 =>
            array (
                'id' => 1359,
                'name' => 'Berlin',
                'country_id' => 82,
                'arab_name' => 'Berlin',
            ),
            353 =>
            array (
                'id' => 1360,
                'name' => 'Brandenburg',
                'country_id' => 82,
                'arab_name' => 'Brandenburg',
            ),
            354 =>
            array (
                'id' => 1361,
                'name' => 'Bremen',
                'country_id' => 82,
                'arab_name' => 'Bremen',
            ),
            355 =>
            array (
                'id' => 1362,
                'name' => 'Dreisbach',
                'country_id' => 82,
                'arab_name' => 'Dreisbach',
            ),
            356 =>
            array (
                'id' => 1363,
                'name' => 'Freistaat Bayern',
                'country_id' => 82,
                'arab_name' => 'Freistaat Bayern',
            ),
            357 =>
            array (
                'id' => 1364,
                'name' => 'Hamburg',
                'country_id' => 82,
                'arab_name' => 'Hamburg',
            ),
            358 =>
            array (
                'id' => 1365,
                'name' => 'Hannover',
                'country_id' => 82,
                'arab_name' => 'Hannover',
            ),
            359 =>
            array (
                'id' => 1366,
                'name' => 'Heroldstatt',
                'country_id' => 82,
                'arab_name' => 'Heroldstatt',
            ),
            360 =>
            array (
                'id' => 1367,
                'name' => 'Hessen',
                'country_id' => 82,
                'arab_name' => 'Hessen',
            ),
            361 =>
            array (
                'id' => 1368,
                'name' => 'Kortenberg',
                'country_id' => 82,
                'arab_name' => 'Kortenberg',
            ),
            362 =>
            array (
                'id' => 1369,
                'name' => 'Laasdorf',
                'country_id' => 82,
                'arab_name' => 'Laasdorf',
            ),
            363 =>
            array (
                'id' => 1370,
                'name' => 'Land Baden-Wurttemberg',
                'country_id' => 82,
                'arab_name' => 'Land Baden-Wurttemberg',
            ),
            364 =>
            array (
                'id' => 1371,
                'name' => 'Land Bayern',
                'country_id' => 82,
                'arab_name' => 'Land Bayern',
            ),
            365 =>
            array (
                'id' => 1372,
                'name' => 'Land Brandenburg',
                'country_id' => 82,
                'arab_name' => 'Land Brandenburg',
            ),
            366 =>
            array (
                'id' => 1373,
                'name' => 'Land Hessen',
                'country_id' => 82,
                'arab_name' => 'Land Hessen',
            ),
            367 =>
            array (
                'id' => 1374,
                'name' => 'Land Mecklenburg-Vorpommern',
                'country_id' => 82,
                'arab_name' => 'Land Mecklenburg-Vorpommern',
            ),
            368 =>
            array (
                'id' => 1375,
                'name' => 'Land Nordrhein-Westfalen',
                'country_id' => 82,
                'arab_name' => 'Land Nordrhein-Westfalen',
            ),
            369 =>
            array (
                'id' => 1376,
                'name' => 'Land Rheinland-Pfalz',
                'country_id' => 82,
                'arab_name' => 'Land Rheinland-Pfalz',
            ),
            370 =>
            array (
                'id' => 1377,
                'name' => 'Land Sachsen',
                'country_id' => 82,
                'arab_name' => 'Land Sachsen',
            ),
            371 =>
            array (
                'id' => 1378,
                'name' => 'Land Sachsen-Anhalt',
                'country_id' => 82,
                'arab_name' => 'Land Sachsen-Anhalt',
            ),
            372 =>
            array (
                'id' => 1379,
                'name' => 'Land Thuringen',
                'country_id' => 82,
                'arab_name' => 'Land Thuringen',
            ),
            373 =>
            array (
                'id' => 1380,
                'name' => 'Lower Saxony',
                'country_id' => 82,
                'arab_name' => 'Lower Saxony',
            ),
            374 =>
            array (
                'id' => 1381,
                'name' => 'Mecklenburg-Vorpommern',
                'country_id' => 82,
                'arab_name' => 'Mecklenburg-Vorpommern',
            ),
            375 =>
            array (
                'id' => 1382,
                'name' => 'Mulfingen',
                'country_id' => 82,
                'arab_name' => 'Mulfingen',
            ),
            376 =>
            array (
                'id' => 1383,
                'name' => 'Munich',
                'country_id' => 82,
                'arab_name' => 'Munich',
            ),
            377 =>
            array (
                'id' => 1384,
                'name' => 'Neubeuern',
                'country_id' => 82,
                'arab_name' => 'Neubeuern',
            ),
            378 =>
            array (
                'id' => 1385,
                'name' => 'Niedersachsen',
                'country_id' => 82,
                'arab_name' => 'Niedersachsen',
            ),
            379 =>
            array (
                'id' => 1386,
                'name' => 'Noord-Holland',
                'country_id' => 82,
                'arab_name' => 'Noord-Holland',
            ),
            380 =>
            array (
                'id' => 1387,
                'name' => 'Nordrhein-Westfalen',
                'country_id' => 82,
                'arab_name' => 'Nordrhein-Westfalen',
            ),
            381 =>
            array (
                'id' => 1388,
                'name' => 'North Rhine-Westphalia',
                'country_id' => 82,
                'arab_name' => 'North Rhine-Westphalia',
            ),
            382 =>
            array (
                'id' => 1389,
                'name' => 'Osterode',
                'country_id' => 82,
                'arab_name' => 'Osterode',
            ),
            383 =>
            array (
                'id' => 1390,
                'name' => 'Rheinland-Pfalz',
                'country_id' => 82,
                'arab_name' => 'Rheinland-Pfalz',
            ),
            384 =>
            array (
                'id' => 1391,
                'name' => 'Rhineland-Palatinate',
                'country_id' => 82,
                'arab_name' => 'Rhineland-Palatinate',
            ),
            385 =>
            array (
                'id' => 1392,
                'name' => 'Saarland',
                'country_id' => 82,
                'arab_name' => 'Saarland',
            ),
            386 =>
            array (
                'id' => 1393,
                'name' => 'Sachsen',
                'country_id' => 82,
                'arab_name' => 'Sachsen',
            ),
            387 =>
            array (
                'id' => 1394,
                'name' => 'Sachsen-Anhalt',
                'country_id' => 82,
                'arab_name' => 'Sachsen-Anhalt',
            ),
            388 =>
            array (
                'id' => 1395,
                'name' => 'Saxony',
                'country_id' => 82,
                'arab_name' => 'Saxony',
            ),
            389 =>
            array (
                'id' => 1396,
                'name' => 'Schleswig-Holstein',
                'country_id' => 82,
                'arab_name' => 'Schleswig-Holstein',
            ),
            390 =>
            array (
                'id' => 1397,
                'name' => 'Thuringia',
                'country_id' => 82,
                'arab_name' => 'Thuringia',
            ),
            391 =>
            array (
                'id' => 1398,
                'name' => 'Webling',
                'country_id' => 82,
                'arab_name' => 'Webling',
            ),
            392 =>
            array (
                'id' => 1399,
                'name' => 'Weinstrabe',
                'country_id' => 82,
                'arab_name' => 'Weinstrabe',
            ),
            393 =>
            array (
                'id' => 1400,
                'name' => 'schlobborn',
                'country_id' => 82,
                'arab_name' => 'schlobborn',
            ),
            394 =>
            array (
                'id' => 1401,
                'name' => 'Ashanti',
                'country_id' => 83,
                'arab_name' => 'Ashanti',
            ),
            395 =>
            array (
                'id' => 1402,
                'name' => 'Brong-Ahafo',
                'country_id' => 83,
                'arab_name' => 'Brong-Ahafo',
            ),
            396 =>
            array (
                'id' => 1403,
                'name' => 'Central',
                'country_id' => 83,
                'arab_name' => 'Central',
            ),
            397 =>
            array (
                'id' => 1404,
                'name' => 'Eastern',
                'country_id' => 83,
                'arab_name' => 'Eastern',
            ),
            398 =>
            array (
                'id' => 1405,
                'name' => 'Greater Accra',
                'country_id' => 83,
                'arab_name' => 'Greater Accra',
            ),
            399 =>
            array (
                'id' => 1406,
                'name' => 'Northern',
                'country_id' => 83,
                'arab_name' => 'Northern',
            ),
            400 =>
            array (
                'id' => 1407,
                'name' => 'Upper East',
                'country_id' => 83,
                'arab_name' => 'Upper East',
            ),
            401 =>
            array (
                'id' => 1408,
                'name' => 'Upper West',
                'country_id' => 83,
                'arab_name' => 'Upper West',
            ),
            402 =>
            array (
                'id' => 1409,
                'name' => 'Volta',
                'country_id' => 83,
                'arab_name' => 'Volta',
            ),
            403 =>
            array (
                'id' => 1410,
                'name' => 'Western',
                'country_id' => 83,
                'arab_name' => 'Western',
            ),
            404 =>
            array (
                'id' => 1411,
                'name' => 'Gibraltar',
                'country_id' => 84,
                'arab_name' => 'Gibraltar',
            ),
            405 =>
            array (
                'id' => 1412,
                'name' => 'Acharnes',
                'country_id' => 85,
                'arab_name' => 'Acharnes',
            ),
            406 =>
            array (
                'id' => 1413,
                'name' => 'Ahaia',
                'country_id' => 85,
                'arab_name' => 'Ahaia',
            ),
            407 =>
            array (
                'id' => 1414,
                'name' => 'Aitolia kai Akarnania',
                'country_id' => 85,
                'arab_name' => 'Aitolia kai Akarnania',
            ),
            408 =>
            array (
                'id' => 1415,
                'name' => 'Argolis',
                'country_id' => 85,
                'arab_name' => 'Argolis',
            ),
            409 =>
            array (
                'id' => 1416,
                'name' => 'Arkadia',
                'country_id' => 85,
                'arab_name' => 'Arkadia',
            ),
            410 =>
            array (
                'id' => 1417,
                'name' => 'Arta',
                'country_id' => 85,
                'arab_name' => 'Arta',
            ),
            411 =>
            array (
                'id' => 1418,
                'name' => 'Attica',
                'country_id' => 85,
                'arab_name' => 'Attica',
            ),
            412 =>
            array (
                'id' => 1419,
                'name' => 'Attiki',
                'country_id' => 85,
                'arab_name' => 'Attiki',
            ),
            413 =>
            array (
                'id' => 1420,
                'name' => 'Ayion Oros',
                'country_id' => 85,
                'arab_name' => 'Ayion Oros',
            ),
            414 =>
            array (
                'id' => 1421,
                'name' => 'Crete',
                'country_id' => 85,
                'arab_name' => 'Crete',
            ),
            415 =>
            array (
                'id' => 1422,
                'name' => 'Dodekanisos',
                'country_id' => 85,
                'arab_name' => 'Dodekanisos',
            ),
            416 =>
            array (
                'id' => 1423,
                'name' => 'Drama',
                'country_id' => 85,
                'arab_name' => 'Drama',
            ),
            417 =>
            array (
                'id' => 1424,
                'name' => 'Evia',
                'country_id' => 85,
                'arab_name' => 'Evia',
            ),
            418 =>
            array (
                'id' => 1425,
                'name' => 'Evritania',
                'country_id' => 85,
                'arab_name' => 'Evritania',
            ),
            419 =>
            array (
                'id' => 1426,
                'name' => 'Evros',
                'country_id' => 85,
                'arab_name' => 'Evros',
            ),
            420 =>
            array (
                'id' => 1427,
                'name' => 'Evvoia',
                'country_id' => 85,
                'arab_name' => 'Evvoia',
            ),
            421 =>
            array (
                'id' => 1428,
                'name' => 'Florina',
                'country_id' => 85,
                'arab_name' => 'Florina',
            ),
            422 =>
            array (
                'id' => 1429,
                'name' => 'Fokis',
                'country_id' => 85,
                'arab_name' => 'Fokis',
            ),
            423 =>
            array (
                'id' => 1430,
                'name' => 'Fthiotis',
                'country_id' => 85,
                'arab_name' => 'Fthiotis',
            ),
            424 =>
            array (
                'id' => 1431,
                'name' => 'Grevena',
                'country_id' => 85,
                'arab_name' => 'Grevena',
            ),
            425 =>
            array (
                'id' => 1432,
                'name' => 'Halandri',
                'country_id' => 85,
                'arab_name' => 'Halandri',
            ),
            426 =>
            array (
                'id' => 1433,
                'name' => 'Halkidiki',
                'country_id' => 85,
                'arab_name' => 'Halkidiki',
            ),
            427 =>
            array (
                'id' => 1434,
                'name' => 'Hania',
                'country_id' => 85,
                'arab_name' => 'Hania',
            ),
            428 =>
            array (
                'id' => 1435,
                'name' => 'Heraklion',
                'country_id' => 85,
                'arab_name' => 'Heraklion',
            ),
            429 =>
            array (
                'id' => 1436,
                'name' => 'Hios',
                'country_id' => 85,
                'arab_name' => 'Hios',
            ),
            430 =>
            array (
                'id' => 1437,
                'name' => 'Ilia',
                'country_id' => 85,
                'arab_name' => 'Ilia',
            ),
            431 =>
            array (
                'id' => 1438,
                'name' => 'Imathia',
                'country_id' => 85,
                'arab_name' => 'Imathia',
            ),
            432 =>
            array (
                'id' => 1439,
                'name' => 'Ioannina',
                'country_id' => 85,
                'arab_name' => 'Ioannina',
            ),
            433 =>
            array (
                'id' => 1440,
                'name' => 'Iraklion',
                'country_id' => 85,
                'arab_name' => 'Iraklion',
            ),
            434 =>
            array (
                'id' => 1441,
                'name' => 'Karditsa',
                'country_id' => 85,
                'arab_name' => 'Karditsa',
            ),
            435 =>
            array (
                'id' => 1442,
                'name' => 'Kastoria',
                'country_id' => 85,
                'arab_name' => 'Kastoria',
            ),
            436 =>
            array (
                'id' => 1443,
                'name' => 'Kavala',
                'country_id' => 85,
                'arab_name' => 'Kavala',
            ),
            437 =>
            array (
                'id' => 1444,
                'name' => 'Kefallinia',
                'country_id' => 85,
                'arab_name' => 'Kefallinia',
            ),
            438 =>
            array (
                'id' => 1445,
                'name' => 'Kerkira',
                'country_id' => 85,
                'arab_name' => 'Kerkira',
            ),
            439 =>
            array (
                'id' => 1446,
                'name' => 'Kiklades',
                'country_id' => 85,
                'arab_name' => 'Kiklades',
            ),
            440 =>
            array (
                'id' => 1447,
                'name' => 'Kilkis',
                'country_id' => 85,
                'arab_name' => 'Kilkis',
            ),
            441 =>
            array (
                'id' => 1448,
                'name' => 'Korinthia',
                'country_id' => 85,
                'arab_name' => 'Korinthia',
            ),
            442 =>
            array (
                'id' => 1449,
                'name' => 'Kozani',
                'country_id' => 85,
                'arab_name' => 'Kozani',
            ),
            443 =>
            array (
                'id' => 1450,
                'name' => 'Lakonia',
                'country_id' => 85,
                'arab_name' => 'Lakonia',
            ),
            444 =>
            array (
                'id' => 1451,
                'name' => 'Larisa',
                'country_id' => 85,
                'arab_name' => 'Larisa',
            ),
            445 =>
            array (
                'id' => 1452,
                'name' => 'Lasithi',
                'country_id' => 85,
                'arab_name' => 'Lasithi',
            ),
            446 =>
            array (
                'id' => 1453,
                'name' => 'Lesvos',
                'country_id' => 85,
                'arab_name' => 'Lesvos',
            ),
            447 =>
            array (
                'id' => 1454,
                'name' => 'Levkas',
                'country_id' => 85,
                'arab_name' => 'Levkas',
            ),
            448 =>
            array (
                'id' => 1455,
                'name' => 'Magnisia',
                'country_id' => 85,
                'arab_name' => 'Magnisia',
            ),
            449 =>
            array (
                'id' => 1456,
                'name' => 'Messinia',
                'country_id' => 85,
                'arab_name' => 'Messinia',
            ),
            450 =>
            array (
                'id' => 1457,
                'name' => 'Nomos Attikis',
                'country_id' => 85,
                'arab_name' => 'Nomos Attikis',
            ),
            451 =>
            array (
                'id' => 1458,
                'name' => 'Nomos Zakynthou',
                'country_id' => 85,
                'arab_name' => 'Nomos Zakynthou',
            ),
            452 =>
            array (
                'id' => 1459,
                'name' => 'Pella',
                'country_id' => 85,
                'arab_name' => 'Pella',
            ),
            453 =>
            array (
                'id' => 1460,
                'name' => 'Pieria',
                'country_id' => 85,
                'arab_name' => 'Pieria',
            ),
            454 =>
            array (
                'id' => 1461,
                'name' => 'Piraios',
                'country_id' => 85,
                'arab_name' => 'Piraios',
            ),
            455 =>
            array (
                'id' => 1462,
                'name' => 'Preveza',
                'country_id' => 85,
                'arab_name' => 'Preveza',
            ),
            456 =>
            array (
                'id' => 1463,
                'name' => 'Rethimni',
                'country_id' => 85,
                'arab_name' => 'Rethimni',
            ),
            457 =>
            array (
                'id' => 1464,
                'name' => 'Rodopi',
                'country_id' => 85,
                'arab_name' => 'Rodopi',
            ),
            458 =>
            array (
                'id' => 1465,
                'name' => 'Samos',
                'country_id' => 85,
                'arab_name' => 'Samos',
            ),
            459 =>
            array (
                'id' => 1466,
                'name' => 'Serrai',
                'country_id' => 85,
                'arab_name' => 'Serrai',
            ),
            460 =>
            array (
                'id' => 1467,
                'name' => 'Thesprotia',
                'country_id' => 85,
                'arab_name' => 'Thesprotia',
            ),
            461 =>
            array (
                'id' => 1468,
                'name' => 'Thessaloniki',
                'country_id' => 85,
                'arab_name' => 'Thessaloniki',
            ),
            462 =>
            array (
                'id' => 1469,
                'name' => 'Trikala',
                'country_id' => 85,
                'arab_name' => 'Trikala',
            ),
            463 =>
            array (
                'id' => 1470,
                'name' => 'Voiotia',
                'country_id' => 85,
                'arab_name' => 'Voiotia',
            ),
            464 =>
            array (
                'id' => 1471,
                'name' => 'West Greece',
                'country_id' => 85,
                'arab_name' => 'West Greece',
            ),
            465 =>
            array (
                'id' => 1472,
                'name' => 'Xanthi',
                'country_id' => 85,
                'arab_name' => 'Xanthi',
            ),
            466 =>
            array (
                'id' => 1473,
                'name' => 'Zakinthos',
                'country_id' => 85,
                'arab_name' => 'Zakinthos',
            ),
            467 =>
            array (
                'id' => 1474,
                'name' => 'Aasiaat',
                'country_id' => 86,
                'arab_name' => 'Aasiaat',
            ),
            468 =>
            array (
                'id' => 1475,
                'name' => 'Ammassalik',
                'country_id' => 86,
                'arab_name' => 'Ammassalik',
            ),
            469 =>
            array (
                'id' => 1476,
                'name' => 'Illoqqortoormiut',
                'country_id' => 86,
                'arab_name' => 'Illoqqortoormiut',
            ),
            470 =>
            array (
                'id' => 1477,
                'name' => 'Ilulissat',
                'country_id' => 86,
                'arab_name' => 'Ilulissat',
            ),
            471 =>
            array (
                'id' => 1478,
                'name' => 'Ivittuut',
                'country_id' => 86,
                'arab_name' => 'Ivittuut',
            ),
            472 =>
            array (
                'id' => 1479,
                'name' => 'Kangaatsiaq',
                'country_id' => 86,
                'arab_name' => 'Kangaatsiaq',
            ),
            473 =>
            array (
                'id' => 1480,
                'name' => 'Maniitsoq',
                'country_id' => 86,
                'arab_name' => 'Maniitsoq',
            ),
            474 =>
            array (
                'id' => 1481,
                'name' => 'Nanortalik',
                'country_id' => 86,
                'arab_name' => 'Nanortalik',
            ),
            475 =>
            array (
                'id' => 1482,
                'name' => 'Narsaq',
                'country_id' => 86,
                'arab_name' => 'Narsaq',
            ),
            476 =>
            array (
                'id' => 1483,
                'name' => 'Nuuk',
                'country_id' => 86,
                'arab_name' => 'Nuuk',
            ),
            477 =>
            array (
                'id' => 1484,
                'name' => 'Paamiut',
                'country_id' => 86,
                'arab_name' => 'Paamiut',
            ),
            478 =>
            array (
                'id' => 1485,
                'name' => 'Qaanaaq',
                'country_id' => 86,
                'arab_name' => 'Qaanaaq',
            ),
            479 =>
            array (
                'id' => 1486,
                'name' => 'Qaqortoq',
                'country_id' => 86,
                'arab_name' => 'Qaqortoq',
            ),
            480 =>
            array (
                'id' => 1487,
                'name' => 'Qasigiannguit',
                'country_id' => 86,
                'arab_name' => 'Qasigiannguit',
            ),
            481 =>
            array (
                'id' => 1488,
                'name' => 'Qeqertarsuaq',
                'country_id' => 86,
                'arab_name' => 'Qeqertarsuaq',
            ),
            482 =>
            array (
                'id' => 1489,
                'name' => 'Sisimiut',
                'country_id' => 86,
                'arab_name' => 'Sisimiut',
            ),
            483 =>
            array (
                'id' => 1490,
                'name' => 'Udenfor kommunal inddeling',
                'country_id' => 86,
                'arab_name' => 'Udenfor kommunal inddeling',
            ),
            484 =>
            array (
                'id' => 1491,
                'name' => 'Upernavik',
                'country_id' => 86,
                'arab_name' => 'Upernavik',
            ),
            485 =>
            array (
                'id' => 1492,
                'name' => 'Uummannaq',
                'country_id' => 86,
                'arab_name' => 'Uummannaq',
            ),
            486 =>
            array (
                'id' => 1493,
                'name' => 'Carriacou-Petite Martinique',
                'country_id' => 87,
                'arab_name' => 'Carriacou-Petite Martinique',
            ),
            487 =>
            array (
                'id' => 1494,
                'name' => 'Saint Andrew',
                'country_id' => 87,
                'arab_name' => 'Saint Andrew',
            ),
            488 =>
            array (
                'id' => 1495,
                'name' => 'Saint Davids',
                'country_id' => 87,
                'arab_name' => 'Saint Davids',
            ),
            489 =>
            array (
                'id' => 1496,
                'name' => 'Saint George\'s',
                'country_id' => 87,
                'arab_name' => 'Saint George\'s',
            ),
            490 =>
            array (
                'id' => 1497,
                'name' => 'Saint John',
                'country_id' => 87,
                'arab_name' => 'Saint John',
            ),
            491 =>
            array (
                'id' => 1498,
                'name' => 'Saint Mark',
                'country_id' => 87,
                'arab_name' => 'Saint Mark',
            ),
            492 =>
            array (
                'id' => 1499,
                'name' => 'Saint Patrick',
                'country_id' => 87,
                'arab_name' => 'Saint Patrick',
            ),
            493 =>
            array (
                'id' => 1500,
                'name' => 'Basse-Terre',
                'country_id' => 88,
                'arab_name' => 'Basse-Terre',
            ),
            494 =>
            array (
                'id' => 1501,
                'name' => 'Grande-Terre',
                'country_id' => 88,
                'arab_name' => 'Grande-Terre',
            ),
            495 =>
            array (
                'id' => 1502,
                'name' => 'Iles des Saintes',
                'country_id' => 88,
                'arab_name' => 'Iles des Saintes',
            ),
            496 =>
            array (
                'id' => 1503,
                'name' => 'La Desirade',
                'country_id' => 88,
                'arab_name' => 'La Desirade',
            ),
            497 =>
            array (
                'id' => 1504,
                'name' => 'Marie-Galante',
                'country_id' => 88,
                'arab_name' => 'Marie-Galante',
            ),
            498 =>
            array (
                'id' => 1505,
                'name' => 'Saint Barthelemy',
                'country_id' => 88,
                'arab_name' => 'Saint Barthelemy',
            ),
            499 =>
            array (
                'id' => 1506,
                'name' => 'Saint Martin',
                'country_id' => 88,
                'arab_name' => 'Saint Martin',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 1507,
                'name' => 'Agana Heights',
                'country_id' => 89,
                'arab_name' => 'Agana Heights',
            ),
            1 =>
            array (
                'id' => 1508,
                'name' => 'Agat',
                'country_id' => 89,
                'arab_name' => 'Agat',
            ),
            2 =>
            array (
                'id' => 1509,
                'name' => 'Barrigada',
                'country_id' => 89,
                'arab_name' => 'Barrigada',
            ),
            3 =>
            array (
                'id' => 1510,
                'name' => 'Chalan-Pago-Ordot',
                'country_id' => 89,
                'arab_name' => 'Chalan-Pago-Ordot',
            ),
            4 =>
            array (
                'id' => 1511,
                'name' => 'Dededo',
                'country_id' => 89,
                'arab_name' => 'Dededo',
            ),
            5 =>
            array (
                'id' => 1512,
                'name' => 'Hagatna',
                'country_id' => 89,
                'arab_name' => 'Hagatna',
            ),
            6 =>
            array (
                'id' => 1513,
                'name' => 'Inarajan',
                'country_id' => 89,
                'arab_name' => 'Inarajan',
            ),
            7 =>
            array (
                'id' => 1514,
                'name' => 'Mangilao',
                'country_id' => 89,
                'arab_name' => 'Mangilao',
            ),
            8 =>
            array (
                'id' => 1515,
                'name' => 'Merizo',
                'country_id' => 89,
                'arab_name' => 'Merizo',
            ),
            9 =>
            array (
                'id' => 1516,
                'name' => 'Mongmong-Toto-Maite',
                'country_id' => 89,
                'arab_name' => 'Mongmong-Toto-Maite',
            ),
            10 =>
            array (
                'id' => 1517,
                'name' => 'Santa Rita',
                'country_id' => 89,
                'arab_name' => 'Santa Rita',
            ),
            11 =>
            array (
                'id' => 1518,
                'name' => 'Sinajana',
                'country_id' => 89,
                'arab_name' => 'Sinajana',
            ),
            12 =>
            array (
                'id' => 1519,
                'name' => 'Talofofo',
                'country_id' => 89,
                'arab_name' => 'Talofofo',
            ),
            13 =>
            array (
                'id' => 1520,
                'name' => 'Tamuning',
                'country_id' => 89,
                'arab_name' => 'Tamuning',
            ),
            14 =>
            array (
                'id' => 1521,
                'name' => 'Yigo',
                'country_id' => 89,
                'arab_name' => 'Yigo',
            ),
            15 =>
            array (
                'id' => 1522,
                'name' => 'Yona',
                'country_id' => 89,
                'arab_name' => 'Yona',
            ),
            16 =>
            array (
                'id' => 1523,
                'name' => 'Alta Verapaz',
                'country_id' => 90,
                'arab_name' => 'Alta Verapaz',
            ),
            17 =>
            array (
                'id' => 1524,
                'name' => 'Baja Verapaz',
                'country_id' => 90,
                'arab_name' => 'Baja Verapaz',
            ),
            18 =>
            array (
                'id' => 1525,
                'name' => 'Chimaltenango',
                'country_id' => 90,
                'arab_name' => 'Chimaltenango',
            ),
            19 =>
            array (
                'id' => 1526,
                'name' => 'Chiquimula',
                'country_id' => 90,
                'arab_name' => 'Chiquimula',
            ),
            20 =>
            array (
                'id' => 1527,
                'name' => 'El Progreso',
                'country_id' => 90,
                'arab_name' => 'El Progreso',
            ),
            21 =>
            array (
                'id' => 1528,
                'name' => 'Escuintla',
                'country_id' => 90,
                'arab_name' => 'Escuintla',
            ),
            22 =>
            array (
                'id' => 1529,
                'name' => 'Guatemala',
                'country_id' => 90,
                'arab_name' => 'Guatemala',
            ),
            23 =>
            array (
                'id' => 1530,
                'name' => 'Huehuetenango',
                'country_id' => 90,
                'arab_name' => 'Huehuetenango',
            ),
            24 =>
            array (
                'id' => 1531,
                'name' => 'Izabal',
                'country_id' => 90,
                'arab_name' => 'Izabal',
            ),
            25 =>
            array (
                'id' => 1532,
                'name' => 'Jalapa',
                'country_id' => 90,
                'arab_name' => 'Jalapa',
            ),
            26 =>
            array (
                'id' => 1533,
                'name' => 'Jutiapa',
                'country_id' => 90,
                'arab_name' => 'Jutiapa',
            ),
            27 =>
            array (
                'id' => 1534,
                'name' => 'Peten',
                'country_id' => 90,
                'arab_name' => 'Peten',
            ),
            28 =>
            array (
                'id' => 1535,
                'name' => 'Quezaltenango',
                'country_id' => 90,
                'arab_name' => 'Quezaltenango',
            ),
            29 =>
            array (
                'id' => 1536,
                'name' => 'Quiche',
                'country_id' => 90,
                'arab_name' => 'Quiche',
            ),
            30 =>
            array (
                'id' => 1537,
                'name' => 'Retalhuleu',
                'country_id' => 90,
                'arab_name' => 'Retalhuleu',
            ),
            31 =>
            array (
                'id' => 1538,
                'name' => 'Sacatepequez',
                'country_id' => 90,
                'arab_name' => 'Sacatepequez',
            ),
            32 =>
            array (
                'id' => 1539,
                'name' => 'San Marcos',
                'country_id' => 90,
                'arab_name' => 'San Marcos',
            ),
            33 =>
            array (
                'id' => 1540,
                'name' => 'Santa Rosa',
                'country_id' => 90,
                'arab_name' => 'Santa Rosa',
            ),
            34 =>
            array (
                'id' => 1541,
                'name' => 'Solola',
                'country_id' => 90,
                'arab_name' => 'Solola',
            ),
            35 =>
            array (
                'id' => 1542,
                'name' => 'Suchitepequez',
                'country_id' => 90,
                'arab_name' => 'Suchitepequez',
            ),
            36 =>
            array (
                'id' => 1543,
                'name' => 'Totonicapan',
                'country_id' => 90,
                'arab_name' => 'Totonicapan',
            ),
            37 =>
            array (
                'id' => 1544,
                'name' => 'Zacapa',
                'country_id' => 90,
                'arab_name' => 'Zacapa',
            ),
            38 =>
            array (
                'id' => 1545,
                'name' => 'Alderney',
                'country_id' => 91,
                'arab_name' => 'Alderney',
            ),
            39 =>
            array (
                'id' => 1546,
                'name' => 'Castel',
                'country_id' => 91,
                'arab_name' => 'Castel',
            ),
            40 =>
            array (
                'id' => 1547,
                'name' => 'Forest',
                'country_id' => 91,
                'arab_name' => 'Forest',
            ),
            41 =>
            array (
                'id' => 1548,
                'name' => 'Saint Andrew',
                'country_id' => 91,
                'arab_name' => 'Saint Andrew',
            ),
            42 =>
            array (
                'id' => 1549,
                'name' => 'Saint Martin',
                'country_id' => 91,
                'arab_name' => 'Saint Martin',
            ),
            43 =>
            array (
                'id' => 1550,
                'name' => 'Saint Peter Port',
                'country_id' => 91,
                'arab_name' => 'Saint Peter Port',
            ),
            44 =>
            array (
                'id' => 1551,
                'name' => 'Saint Pierre du Bois',
                'country_id' => 91,
                'arab_name' => 'Saint Pierre du Bois',
            ),
            45 =>
            array (
                'id' => 1552,
                'name' => 'Saint Sampson',
                'country_id' => 91,
                'arab_name' => 'Saint Sampson',
            ),
            46 =>
            array (
                'id' => 1553,
                'name' => 'Saint Saviour',
                'country_id' => 91,
                'arab_name' => 'Saint Saviour',
            ),
            47 =>
            array (
                'id' => 1554,
                'name' => 'Sark',
                'country_id' => 91,
                'arab_name' => 'Sark',
            ),
            48 =>
            array (
                'id' => 1555,
                'name' => 'Torteval',
                'country_id' => 91,
                'arab_name' => 'Torteval',
            ),
            49 =>
            array (
                'id' => 1556,
                'name' => 'Vale',
                'country_id' => 91,
                'arab_name' => 'Vale',
            ),
            50 =>
            array (
                'id' => 1557,
                'name' => 'Beyla',
                'country_id' => 92,
                'arab_name' => 'Beyla',
            ),
            51 =>
            array (
                'id' => 1558,
                'name' => 'Boffa',
                'country_id' => 92,
                'arab_name' => 'Boffa',
            ),
            52 =>
            array (
                'id' => 1559,
                'name' => 'Boke',
                'country_id' => 92,
                'arab_name' => 'Boke',
            ),
            53 =>
            array (
                'id' => 1560,
                'name' => 'Conakry',
                'country_id' => 92,
                'arab_name' => 'Conakry',
            ),
            54 =>
            array (
                'id' => 1561,
                'name' => 'Coyah',
                'country_id' => 92,
                'arab_name' => 'Coyah',
            ),
            55 =>
            array (
                'id' => 1562,
                'name' => 'Dabola',
                'country_id' => 92,
                'arab_name' => 'Dabola',
            ),
            56 =>
            array (
                'id' => 1563,
                'name' => 'Dalaba',
                'country_id' => 92,
                'arab_name' => 'Dalaba',
            ),
            57 =>
            array (
                'id' => 1564,
                'name' => 'Dinguiraye',
                'country_id' => 92,
                'arab_name' => 'Dinguiraye',
            ),
            58 =>
            array (
                'id' => 1565,
                'name' => 'Faranah',
                'country_id' => 92,
                'arab_name' => 'Faranah',
            ),
            59 =>
            array (
                'id' => 1566,
                'name' => 'Forecariah',
                'country_id' => 92,
                'arab_name' => 'Forecariah',
            ),
            60 =>
            array (
                'id' => 1567,
                'name' => 'Fria',
                'country_id' => 92,
                'arab_name' => 'Fria',
            ),
            61 =>
            array (
                'id' => 1568,
                'name' => 'Gaoual',
                'country_id' => 92,
                'arab_name' => 'Gaoual',
            ),
            62 =>
            array (
                'id' => 1569,
                'name' => 'Gueckedou',
                'country_id' => 92,
                'arab_name' => 'Gueckedou',
            ),
            63 =>
            array (
                'id' => 1570,
                'name' => 'Kankan',
                'country_id' => 92,
                'arab_name' => 'Kankan',
            ),
            64 =>
            array (
                'id' => 1571,
                'name' => 'Kerouane',
                'country_id' => 92,
                'arab_name' => 'Kerouane',
            ),
            65 =>
            array (
                'id' => 1572,
                'name' => 'Kindia',
                'country_id' => 92,
                'arab_name' => 'Kindia',
            ),
            66 =>
            array (
                'id' => 1573,
                'name' => 'Kissidougou',
                'country_id' => 92,
                'arab_name' => 'Kissidougou',
            ),
            67 =>
            array (
                'id' => 1574,
                'name' => 'Koubia',
                'country_id' => 92,
                'arab_name' => 'Koubia',
            ),
            68 =>
            array (
                'id' => 1575,
                'name' => 'Koundara',
                'country_id' => 92,
                'arab_name' => 'Koundara',
            ),
            69 =>
            array (
                'id' => 1576,
                'name' => 'Kouroussa',
                'country_id' => 92,
                'arab_name' => 'Kouroussa',
            ),
            70 =>
            array (
                'id' => 1577,
                'name' => 'Labe',
                'country_id' => 92,
                'arab_name' => 'Labe',
            ),
            71 =>
            array (
                'id' => 1578,
                'name' => 'Lola',
                'country_id' => 92,
                'arab_name' => 'Lola',
            ),
            72 =>
            array (
                'id' => 1579,
                'name' => 'Macenta',
                'country_id' => 92,
                'arab_name' => 'Macenta',
            ),
            73 =>
            array (
                'id' => 1580,
                'name' => 'Mali',
                'country_id' => 92,
                'arab_name' => 'Mali',
            ),
            74 =>
            array (
                'id' => 1581,
                'name' => 'Mamou',
                'country_id' => 92,
                'arab_name' => 'Mamou',
            ),
            75 =>
            array (
                'id' => 1582,
                'name' => 'Mandiana',
                'country_id' => 92,
                'arab_name' => 'Mandiana',
            ),
            76 =>
            array (
                'id' => 1583,
                'name' => 'Nzerekore',
                'country_id' => 92,
                'arab_name' => 'Nzerekore',
            ),
            77 =>
            array (
                'id' => 1584,
                'name' => 'Pita',
                'country_id' => 92,
                'arab_name' => 'Pita',
            ),
            78 =>
            array (
                'id' => 1585,
                'name' => 'Siguiri',
                'country_id' => 92,
                'arab_name' => 'Siguiri',
            ),
            79 =>
            array (
                'id' => 1586,
                'name' => 'Telimele',
                'country_id' => 92,
                'arab_name' => 'Telimele',
            ),
            80 =>
            array (
                'id' => 1587,
                'name' => 'Tougue',
                'country_id' => 92,
                'arab_name' => 'Tougue',
            ),
            81 =>
            array (
                'id' => 1588,
                'name' => 'Yomou',
                'country_id' => 92,
                'arab_name' => 'Yomou',
            ),
            82 =>
            array (
                'id' => 1589,
                'name' => 'Bafata',
                'country_id' => 93,
                'arab_name' => 'Bafata',
            ),
            83 =>
            array (
                'id' => 1590,
                'name' => 'Bissau',
                'country_id' => 93,
                'arab_name' => 'Bissau',
            ),
            84 =>
            array (
                'id' => 1591,
                'name' => 'Bolama',
                'country_id' => 93,
                'arab_name' => 'Bolama',
            ),
            85 =>
            array (
                'id' => 1592,
                'name' => 'Cacheu',
                'country_id' => 93,
                'arab_name' => 'Cacheu',
            ),
            86 =>
            array (
                'id' => 1593,
                'name' => 'Gabu',
                'country_id' => 93,
                'arab_name' => 'Gabu',
            ),
            87 =>
            array (
                'id' => 1594,
                'name' => 'Oio',
                'country_id' => 93,
                'arab_name' => 'Oio',
            ),
            88 =>
            array (
                'id' => 1595,
                'name' => 'Quinara',
                'country_id' => 93,
                'arab_name' => 'Quinara',
            ),
            89 =>
            array (
                'id' => 1596,
                'name' => 'Tombali',
                'country_id' => 93,
                'arab_name' => 'Tombali',
            ),
            90 =>
            array (
                'id' => 1597,
                'name' => 'Barima-Waini',
                'country_id' => 94,
                'arab_name' => 'Barima-Waini',
            ),
            91 =>
            array (
                'id' => 1598,
                'name' => 'Cuyuni-Mazaruni',
                'country_id' => 94,
                'arab_name' => 'Cuyuni-Mazaruni',
            ),
            92 =>
            array (
                'id' => 1599,
                'name' => 'Demerara-Mahaica',
                'country_id' => 94,
                'arab_name' => 'Demerara-Mahaica',
            ),
            93 =>
            array (
                'id' => 1600,
                'name' => 'East Berbice-Corentyne',
                'country_id' => 94,
                'arab_name' => 'East Berbice-Corentyne',
            ),
            94 =>
            array (
                'id' => 1601,
                'name' => 'Essequibo Islands-West Demerar',
                'country_id' => 94,
                'arab_name' => 'Essequibo Islands-West Demerar',
            ),
            95 =>
            array (
                'id' => 1602,
                'name' => 'Mahaica-Berbice',
                'country_id' => 94,
                'arab_name' => 'Mahaica-Berbice',
            ),
            96 =>
            array (
                'id' => 1603,
                'name' => 'Pomeroon-Supenaam',
                'country_id' => 94,
                'arab_name' => 'Pomeroon-Supenaam',
            ),
            97 =>
            array (
                'id' => 1604,
                'name' => 'Potaro-Siparuni',
                'country_id' => 94,
                'arab_name' => 'Potaro-Siparuni',
            ),
            98 =>
            array (
                'id' => 1605,
                'name' => 'Upper Demerara-Berbice',
                'country_id' => 94,
                'arab_name' => 'Upper Demerara-Berbice',
            ),
            99 =>
            array (
                'id' => 1606,
                'name' => 'Upper Takutu-Upper Essequibo',
                'country_id' => 94,
                'arab_name' => 'Upper Takutu-Upper Essequibo',
            ),
            100 =>
            array (
                'id' => 1607,
                'name' => 'Artibonite',
                'country_id' => 95,
                'arab_name' => 'Artibonite',
            ),
            101 =>
            array (
                'id' => 1608,
                'name' => 'Centre',
                'country_id' => 95,
                'arab_name' => 'Centre',
            ),
            102 =>
            array (
                'id' => 1609,
                'name' => 'Grand\'Anse',
                'country_id' => 95,
                'arab_name' => 'Grand\'Anse',
            ),
            103 =>
            array (
                'id' => 1610,
                'name' => 'Nord',
                'country_id' => 95,
                'arab_name' => 'Nord',
            ),
            104 =>
            array (
                'id' => 1611,
                'name' => 'Nord-Est',
                'country_id' => 95,
                'arab_name' => 'Nord-Est',
            ),
            105 =>
            array (
                'id' => 1612,
                'name' => 'Nord-Ouest',
                'country_id' => 95,
                'arab_name' => 'Nord-Ouest',
            ),
            106 =>
            array (
                'id' => 1613,
                'name' => 'Ouest',
                'country_id' => 95,
                'arab_name' => 'Ouest',
            ),
            107 =>
            array (
                'id' => 1614,
                'name' => 'Sud',
                'country_id' => 95,
                'arab_name' => 'Sud',
            ),
            108 =>
            array (
                'id' => 1615,
                'name' => 'Sud-Est',
                'country_id' => 95,
                'arab_name' => 'Sud-Est',
            ),
            109 =>
            array (
                'id' => 1616,
                'name' => 'Heard and McDonald Islands',
                'country_id' => 96,
                'arab_name' => 'Heard and McDonald Islands',
            ),
            110 =>
            array (
                'id' => 1617,
                'name' => 'Atlantida',
                'country_id' => 97,
                'arab_name' => 'Atlantida',
            ),
            111 =>
            array (
                'id' => 1618,
                'name' => 'Choluteca',
                'country_id' => 97,
                'arab_name' => 'Choluteca',
            ),
            112 =>
            array (
                'id' => 1619,
                'name' => 'Colon',
                'country_id' => 97,
                'arab_name' => 'Colon',
            ),
            113 =>
            array (
                'id' => 1620,
                'name' => 'Comayagua',
                'country_id' => 97,
                'arab_name' => 'Comayagua',
            ),
            114 =>
            array (
                'id' => 1621,
                'name' => 'Copan',
                'country_id' => 97,
                'arab_name' => 'Copan',
            ),
            115 =>
            array (
                'id' => 1622,
                'name' => 'Cortes',
                'country_id' => 97,
                'arab_name' => 'Cortes',
            ),
            116 =>
            array (
                'id' => 1623,
                'name' => 'Distrito Central',
                'country_id' => 97,
                'arab_name' => 'Distrito Central',
            ),
            117 =>
            array (
                'id' => 1624,
                'name' => 'El Paraiso',
                'country_id' => 97,
                'arab_name' => 'El Paraiso',
            ),
            118 =>
            array (
                'id' => 1625,
                'name' => 'Francisco Morazan',
                'country_id' => 97,
                'arab_name' => 'Francisco Morazan',
            ),
            119 =>
            array (
                'id' => 1626,
                'name' => 'Gracias a Dios',
                'country_id' => 97,
                'arab_name' => 'Gracias a Dios',
            ),
            120 =>
            array (
                'id' => 1627,
                'name' => 'Intibuca',
                'country_id' => 97,
                'arab_name' => 'Intibuca',
            ),
            121 =>
            array (
                'id' => 1628,
                'name' => 'Islas de la Bahia',
                'country_id' => 97,
                'arab_name' => 'Islas de la Bahia',
            ),
            122 =>
            array (
                'id' => 1629,
                'name' => 'La Paz',
                'country_id' => 97,
                'arab_name' => 'La Paz',
            ),
            123 =>
            array (
                'id' => 1630,
                'name' => 'Lempira',
                'country_id' => 97,
                'arab_name' => 'Lempira',
            ),
            124 =>
            array (
                'id' => 1631,
                'name' => 'Ocotepeque',
                'country_id' => 97,
                'arab_name' => 'Ocotepeque',
            ),
            125 =>
            array (
                'id' => 1632,
                'name' => 'Olancho',
                'country_id' => 97,
                'arab_name' => 'Olancho',
            ),
            126 =>
            array (
                'id' => 1633,
                'name' => 'Santa Barbara',
                'country_id' => 97,
                'arab_name' => 'Santa Barbara',
            ),
            127 =>
            array (
                'id' => 1634,
                'name' => 'Valle',
                'country_id' => 97,
                'arab_name' => 'Valle',
            ),
            128 =>
            array (
                'id' => 1635,
                'name' => 'Yoro',
                'country_id' => 97,
                'arab_name' => 'Yoro',
            ),
            129 =>
            array (
                'id' => 1636,
                'name' => 'Hong Kong',
                'country_id' => 98,
                'arab_name' => 'Hong Kong',
            ),
            130 =>
            array (
                'id' => 1637,
                'name' => 'Bacs-Kiskun',
                'country_id' => 99,
                'arab_name' => 'Bacs-Kiskun',
            ),
            131 =>
            array (
                'id' => 1638,
                'name' => 'Baranya',
                'country_id' => 99,
                'arab_name' => 'Baranya',
            ),
            132 =>
            array (
                'id' => 1639,
                'name' => 'Bekes',
                'country_id' => 99,
                'arab_name' => 'Bekes',
            ),
            133 =>
            array (
                'id' => 1640,
                'name' => 'Borsod-Abauj-Zemplen',
                'country_id' => 99,
                'arab_name' => 'Borsod-Abauj-Zemplen',
            ),
            134 =>
            array (
                'id' => 1641,
                'name' => 'Budapest',
                'country_id' => 99,
                'arab_name' => 'Budapest',
            ),
            135 =>
            array (
                'id' => 1642,
                'name' => 'Csongrad',
                'country_id' => 99,
                'arab_name' => 'Csongrad',
            ),
            136 =>
            array (
                'id' => 1643,
                'name' => 'Fejer',
                'country_id' => 99,
                'arab_name' => 'Fejer',
            ),
            137 =>
            array (
                'id' => 1644,
                'name' => 'Gyor-Moson-Sopron',
                'country_id' => 99,
                'arab_name' => 'Gyor-Moson-Sopron',
            ),
            138 =>
            array (
                'id' => 1645,
                'name' => 'Hajdu-Bihar',
                'country_id' => 99,
                'arab_name' => 'Hajdu-Bihar',
            ),
            139 =>
            array (
                'id' => 1646,
                'name' => 'Heves',
                'country_id' => 99,
                'arab_name' => 'Heves',
            ),
            140 =>
            array (
                'id' => 1647,
                'name' => 'Jasz-Nagykun-Szolnok',
                'country_id' => 99,
                'arab_name' => 'Jasz-Nagykun-Szolnok',
            ),
            141 =>
            array (
                'id' => 1648,
                'name' => 'Komarom-Esztergom',
                'country_id' => 99,
                'arab_name' => 'Komarom-Esztergom',
            ),
            142 =>
            array (
                'id' => 1649,
                'name' => 'Nograd',
                'country_id' => 99,
                'arab_name' => 'Nograd',
            ),
            143 =>
            array (
                'id' => 1650,
                'name' => 'Pest',
                'country_id' => 99,
                'arab_name' => 'Pest',
            ),
            144 =>
            array (
                'id' => 1651,
                'name' => 'Somogy',
                'country_id' => 99,
                'arab_name' => 'Somogy',
            ),
            145 =>
            array (
                'id' => 1652,
                'name' => 'Szabolcs-Szatmar-Bereg',
                'country_id' => 99,
                'arab_name' => 'Szabolcs-Szatmar-Bereg',
            ),
            146 =>
            array (
                'id' => 1653,
                'name' => 'Tolna',
                'country_id' => 99,
                'arab_name' => 'Tolna',
            ),
            147 =>
            array (
                'id' => 1654,
                'name' => 'Vas',
                'country_id' => 99,
                'arab_name' => 'Vas',
            ),
            148 =>
            array (
                'id' => 1655,
                'name' => 'Veszprem',
                'country_id' => 99,
                'arab_name' => 'Veszprem',
            ),
            149 =>
            array (
                'id' => 1656,
                'name' => 'Zala',
                'country_id' => 99,
                'arab_name' => 'Zala',
            ),
            150 =>
            array (
                'id' => 1657,
                'name' => 'Austurland',
                'country_id' => 100,
                'arab_name' => 'Austurland',
            ),
            151 =>
            array (
                'id' => 1658,
                'name' => 'Gullbringusysla',
                'country_id' => 100,
                'arab_name' => 'Gullbringusysla',
            ),
            152 =>
            array (
                'id' => 1659,
                'name' => 'Hofu borgarsva i',
                'country_id' => 100,
                'arab_name' => 'Hofu borgarsva i',
            ),
            153 =>
            array (
                'id' => 1660,
                'name' => 'Nor urland eystra',
                'country_id' => 100,
                'arab_name' => 'Nor urland eystra',
            ),
            154 =>
            array (
                'id' => 1661,
                'name' => 'Nor urland vestra',
                'country_id' => 100,
                'arab_name' => 'Nor urland vestra',
            ),
            155 =>
            array (
                'id' => 1662,
                'name' => 'Su urland',
                'country_id' => 100,
                'arab_name' => 'Su urland',
            ),
            156 =>
            array (
                'id' => 1663,
                'name' => 'Su urnes',
                'country_id' => 100,
                'arab_name' => 'Su urnes',
            ),
            157 =>
            array (
                'id' => 1664,
                'name' => 'Vestfir ir',
                'country_id' => 100,
                'arab_name' => 'Vestfir ir',
            ),
            158 =>
            array (
                'id' => 1665,
                'name' => 'Vesturland',
                'country_id' => 100,
                'arab_name' => 'Vesturland',
            ),
            159 =>
            array (
                'id' => 1666,
                'name' => 'Aceh',
                'country_id' => 102,
                'arab_name' => 'Aceh',
            ),
            160 =>
            array (
                'id' => 1667,
                'name' => 'Bali',
                'country_id' => 102,
                'arab_name' => 'Bali',
            ),
            161 =>
            array (
                'id' => 1668,
                'name' => 'Bangka-Belitung',
                'country_id' => 102,
                'arab_name' => 'Bangka-Belitung',
            ),
            162 =>
            array (
                'id' => 1669,
                'name' => 'Banten',
                'country_id' => 102,
                'arab_name' => 'Banten',
            ),
            163 =>
            array (
                'id' => 1670,
                'name' => 'Bengkulu',
                'country_id' => 102,
                'arab_name' => 'Bengkulu',
            ),
            164 =>
            array (
                'id' => 1671,
                'name' => 'Gandaria',
                'country_id' => 102,
                'arab_name' => 'Gandaria',
            ),
            165 =>
            array (
                'id' => 1672,
                'name' => 'Gorontalo',
                'country_id' => 102,
                'arab_name' => 'Gorontalo',
            ),
            166 =>
            array (
                'id' => 1673,
                'name' => 'Jakarta',
                'country_id' => 102,
                'arab_name' => 'Jakarta',
            ),
            167 =>
            array (
                'id' => 1674,
                'name' => 'Jambi',
                'country_id' => 102,
                'arab_name' => 'Jambi',
            ),
            168 =>
            array (
                'id' => 1675,
                'name' => 'Jawa Barat',
                'country_id' => 102,
                'arab_name' => 'Jawa Barat',
            ),
            169 =>
            array (
                'id' => 1676,
                'name' => 'Jawa Tengah',
                'country_id' => 102,
                'arab_name' => 'Jawa Tengah',
            ),
            170 =>
            array (
                'id' => 1677,
                'name' => 'Jawa Timur',
                'country_id' => 102,
                'arab_name' => 'Jawa Timur',
            ),
            171 =>
            array (
                'id' => 1678,
                'name' => 'Kalimantan Barat',
                'country_id' => 102,
                'arab_name' => 'Kalimantan Barat',
            ),
            172 =>
            array (
                'id' => 1679,
                'name' => 'Kalimantan Selatan',
                'country_id' => 102,
                'arab_name' => 'Kalimantan Selatan',
            ),
            173 =>
            array (
                'id' => 1680,
                'name' => 'Kalimantan Tengah',
                'country_id' => 102,
                'arab_name' => 'Kalimantan Tengah',
            ),
            174 =>
            array (
                'id' => 1681,
                'name' => 'Kalimantan Timur',
                'country_id' => 102,
                'arab_name' => 'Kalimantan Timur',
            ),
            175 =>
            array (
                'id' => 1682,
                'name' => 'Kendal',
                'country_id' => 102,
                'arab_name' => 'Kendal',
            ),
            176 =>
            array (
                'id' => 1683,
                'name' => 'Lampung',
                'country_id' => 102,
                'arab_name' => 'Lampung',
            ),
            177 =>
            array (
                'id' => 1684,
                'name' => 'Maluku',
                'country_id' => 102,
                'arab_name' => 'Maluku',
            ),
            178 =>
            array (
                'id' => 1685,
                'name' => 'Maluku Utara',
                'country_id' => 102,
                'arab_name' => 'Maluku Utara',
            ),
            179 =>
            array (
                'id' => 1686,
                'name' => 'Nusa Tenggara Barat',
                'country_id' => 102,
                'arab_name' => 'Nusa Tenggara Barat',
            ),
            180 =>
            array (
                'id' => 1687,
                'name' => 'Nusa Tenggara Timur',
                'country_id' => 102,
                'arab_name' => 'Nusa Tenggara Timur',
            ),
            181 =>
            array (
                'id' => 1688,
                'name' => 'Papua',
                'country_id' => 102,
                'arab_name' => 'Papua',
            ),
            182 =>
            array (
                'id' => 1689,
                'name' => 'Riau',
                'country_id' => 102,
                'arab_name' => 'Riau',
            ),
            183 =>
            array (
                'id' => 1690,
                'name' => 'Riau Kepulauan',
                'country_id' => 102,
                'arab_name' => 'Riau Kepulauan',
            ),
            184 =>
            array (
                'id' => 1691,
                'name' => 'Solo',
                'country_id' => 102,
                'arab_name' => 'Solo',
            ),
            185 =>
            array (
                'id' => 1692,
                'name' => 'Sulawesi Selatan',
                'country_id' => 102,
                'arab_name' => 'Sulawesi Selatan',
            ),
            186 =>
            array (
                'id' => 1693,
                'name' => 'Sulawesi Tengah',
                'country_id' => 102,
                'arab_name' => 'Sulawesi Tengah',
            ),
            187 =>
            array (
                'id' => 1694,
                'name' => 'Sulawesi Tenggara',
                'country_id' => 102,
                'arab_name' => 'Sulawesi Tenggara',
            ),
            188 =>
            array (
                'id' => 1695,
                'name' => 'Sulawesi Utara',
                'country_id' => 102,
                'arab_name' => 'Sulawesi Utara',
            ),
            189 =>
            array (
                'id' => 1696,
                'name' => 'Sumatera Barat',
                'country_id' => 102,
                'arab_name' => 'Sumatera Barat',
            ),
            190 =>
            array (
                'id' => 1697,
                'name' => 'Sumatera Selatan',
                'country_id' => 102,
                'arab_name' => 'Sumatera Selatan',
            ),
            191 =>
            array (
                'id' => 1698,
                'name' => 'Sumatera Utara',
                'country_id' => 102,
                'arab_name' => 'Sumatera Utara',
            ),
            192 =>
            array (
                'id' => 1699,
                'name' => 'Yogyakarta',
                'country_id' => 102,
                'arab_name' => 'Yogyakarta',
            ),
            193 =>
            array (
                'id' => 1700,
                'name' => 'Ardabil',
                'country_id' => 103,
                'arab_name' => 'Ardabil',
            ),
            194 =>
            array (
                'id' => 1701,
                'name' => 'Azarbayjan-e Bakhtari',
                'country_id' => 103,
                'arab_name' => 'Azarbayjan-e Bakhtari',
            ),
            195 =>
            array (
                'id' => 1702,
                'name' => 'Azarbayjan-e Khavari',
                'country_id' => 103,
                'arab_name' => 'Azarbayjan-e Khavari',
            ),
            196 =>
            array (
                'id' => 1703,
                'name' => 'Bushehr',
                'country_id' => 103,
                'arab_name' => 'Bushehr',
            ),
            197 =>
            array (
                'id' => 1704,
                'name' => 'Chahar Mahal-e Bakhtiari',
                'country_id' => 103,
                'arab_name' => 'Chahar Mahal-e Bakhtiari',
            ),
            198 =>
            array (
                'id' => 1705,
                'name' => 'Esfahan',
                'country_id' => 103,
                'arab_name' => 'Esfahan',
            ),
            199 =>
            array (
                'id' => 1706,
                'name' => 'Fars',
                'country_id' => 103,
                'arab_name' => 'Fars',
            ),
            200 =>
            array (
                'id' => 1707,
                'name' => 'Gilan',
                'country_id' => 103,
                'arab_name' => 'Gilan',
            ),
            201 =>
            array (
                'id' => 1708,
                'name' => 'Golestan',
                'country_id' => 103,
                'arab_name' => 'Golestan',
            ),
            202 =>
            array (
                'id' => 1709,
                'name' => 'Hamadan',
                'country_id' => 103,
                'arab_name' => 'Hamadan',
            ),
            203 =>
            array (
                'id' => 1710,
                'name' => 'Hormozgan',
                'country_id' => 103,
                'arab_name' => 'Hormozgan',
            ),
            204 =>
            array (
                'id' => 1711,
                'name' => 'Ilam',
                'country_id' => 103,
                'arab_name' => 'Ilam',
            ),
            205 =>
            array (
                'id' => 1712,
                'name' => 'Kerman',
                'country_id' => 103,
                'arab_name' => 'Kerman',
            ),
            206 =>
            array (
                'id' => 1713,
                'name' => 'Kermanshah',
                'country_id' => 103,
                'arab_name' => 'Kermanshah',
            ),
            207 =>
            array (
                'id' => 1714,
                'name' => 'Khorasan',
                'country_id' => 103,
                'arab_name' => 'Khorasan',
            ),
            208 =>
            array (
                'id' => 1715,
                'name' => 'Khuzestan',
                'country_id' => 103,
                'arab_name' => 'Khuzestan',
            ),
            209 =>
            array (
                'id' => 1716,
                'name' => 'Kohgiluyeh-e Boyerahmad',
                'country_id' => 103,
                'arab_name' => 'Kohgiluyeh-e Boyerahmad',
            ),
            210 =>
            array (
                'id' => 1717,
                'name' => 'Kordestan',
                'country_id' => 103,
                'arab_name' => 'Kordestan',
            ),
            211 =>
            array (
                'id' => 1718,
                'name' => 'Lorestan',
                'country_id' => 103,
                'arab_name' => 'Lorestan',
            ),
            212 =>
            array (
                'id' => 1719,
                'name' => 'Markazi',
                'country_id' => 103,
                'arab_name' => 'Markazi',
            ),
            213 =>
            array (
                'id' => 1720,
                'name' => 'Mazandaran',
                'country_id' => 103,
                'arab_name' => 'Mazandaran',
            ),
            214 =>
            array (
                'id' => 1721,
                'name' => 'Ostan-e Esfahan',
                'country_id' => 103,
                'arab_name' => 'Ostan-e Esfahan',
            ),
            215 =>
            array (
                'id' => 1722,
                'name' => 'Qazvin',
                'country_id' => 103,
                'arab_name' => 'Qazvin',
            ),
            216 =>
            array (
                'id' => 1723,
                'name' => 'Qom',
                'country_id' => 103,
                'arab_name' => 'Qom',
            ),
            217 =>
            array (
                'id' => 1724,
                'name' => 'Semnan',
                'country_id' => 103,
                'arab_name' => 'Semnan',
            ),
            218 =>
            array (
                'id' => 1725,
                'name' => 'Sistan-e Baluchestan',
                'country_id' => 103,
                'arab_name' => 'Sistan-e Baluchestan',
            ),
            219 =>
            array (
                'id' => 1726,
                'name' => 'Tehran',
                'country_id' => 103,
                'arab_name' => 'Tehran',
            ),
            220 =>
            array (
                'id' => 1727,
                'name' => 'Yazd',
                'country_id' => 103,
                'arab_name' => 'Yazd',
            ),
            221 =>
            array (
                'id' => 1728,
                'name' => 'Zanjan',
                'country_id' => 103,
                'arab_name' => 'Zanjan',
            ),
            222 =>
            array (
                'id' => 1729,
                'name' => 'Babil',
                'country_id' => 104,
                'arab_name' => 'Babil',
            ),
            223 =>
            array (
                'id' => 1730,
                'name' => 'Baghdad',
                'country_id' => 104,
                'arab_name' => 'Baghdad',
            ),
            224 =>
            array (
                'id' => 1731,
                'name' => 'Dahuk',
                'country_id' => 104,
                'arab_name' => 'Dahuk',
            ),
            225 =>
            array (
                'id' => 1732,
                'name' => 'Dhi Qar',
                'country_id' => 104,
                'arab_name' => 'Dhi Qar',
            ),
            226 =>
            array (
                'id' => 1733,
                'name' => 'Diyala',
                'country_id' => 104,
                'arab_name' => 'Diyala',
            ),
            227 =>
            array (
                'id' => 1734,
                'name' => 'Erbil',
                'country_id' => 104,
                'arab_name' => 'Erbil',
            ),
            228 =>
            array (
                'id' => 1735,
                'name' => 'Irbil',
                'country_id' => 104,
                'arab_name' => 'Irbil',
            ),
            229 =>
            array (
                'id' => 1736,
                'name' => 'Karbala',
                'country_id' => 104,
                'arab_name' => 'Karbala',
            ),
            230 =>
            array (
                'id' => 1737,
                'name' => 'Kurdistan',
                'country_id' => 104,
                'arab_name' => 'Kurdistan',
            ),
            231 =>
            array (
                'id' => 1738,
                'name' => 'Maysan',
                'country_id' => 104,
                'arab_name' => 'Maysan',
            ),
            232 =>
            array (
                'id' => 1739,
                'name' => 'Ninawa',
                'country_id' => 104,
                'arab_name' => 'Ninawa',
            ),
            233 =>
            array (
                'id' => 1740,
                'name' => 'Salah-ad-Din',
                'country_id' => 104,
                'arab_name' => 'Salah-ad-Din',
            ),
            234 =>
            array (
                'id' => 1741,
                'name' => 'Wasit',
                'country_id' => 104,
                'arab_name' => 'Wasit',
            ),
            235 =>
            array (
                'id' => 1742,
                'name' => 'al-Anbar',
                'country_id' => 104,
                'arab_name' => 'al-Anbar',
            ),
            236 =>
            array (
                'id' => 1743,
                'name' => 'al-Basrah',
                'country_id' => 104,
                'arab_name' => 'al-Basrah',
            ),
            237 =>
            array (
                'id' => 1744,
                'name' => 'al-Muthanna',
                'country_id' => 104,
                'arab_name' => 'al-Muthanna',
            ),
            238 =>
            array (
                'id' => 1745,
                'name' => 'al-Qadisiyah',
                'country_id' => 104,
                'arab_name' => 'al-Qadisiyah',
            ),
            239 =>
            array (
                'id' => 1746,
                'name' => 'an-Najaf',
                'country_id' => 104,
                'arab_name' => 'an-Najaf',
            ),
            240 =>
            array (
                'id' => 1747,
                'name' => 'as-Sulaymaniyah',
                'country_id' => 104,
                'arab_name' => 'as-Sulaymaniyah',
            ),
            241 =>
            array (
                'id' => 1748,
                'name' => 'at-Ta\'mim',
                'country_id' => 104,
                'arab_name' => 'at-Ta\'mim',
            ),
            242 =>
            array (
                'id' => 1749,
                'name' => 'Armagh',
                'country_id' => 105,
                'arab_name' => 'Armagh',
            ),
            243 =>
            array (
                'id' => 1750,
                'name' => 'Carlow',
                'country_id' => 105,
                'arab_name' => 'Carlow',
            ),
            244 =>
            array (
                'id' => 1751,
                'name' => 'Cavan',
                'country_id' => 105,
                'arab_name' => 'Cavan',
            ),
            245 =>
            array (
                'id' => 1752,
                'name' => 'Clare',
                'country_id' => 105,
                'arab_name' => 'Clare',
            ),
            246 =>
            array (
                'id' => 1753,
                'name' => 'Cork',
                'country_id' => 105,
                'arab_name' => 'Cork',
            ),
            247 =>
            array (
                'id' => 1754,
                'name' => 'Donegal',
                'country_id' => 105,
                'arab_name' => 'Donegal',
            ),
            248 =>
            array (
                'id' => 1755,
                'name' => 'Dublin',
                'country_id' => 105,
                'arab_name' => 'Dublin',
            ),
            249 =>
            array (
                'id' => 1756,
                'name' => 'Galway',
                'country_id' => 105,
                'arab_name' => 'Galway',
            ),
            250 =>
            array (
                'id' => 1757,
                'name' => 'Kerry',
                'country_id' => 105,
                'arab_name' => 'Kerry',
            ),
            251 =>
            array (
                'id' => 1758,
                'name' => 'Kildare',
                'country_id' => 105,
                'arab_name' => 'Kildare',
            ),
            252 =>
            array (
                'id' => 1759,
                'name' => 'Kilkenny',
                'country_id' => 105,
                'arab_name' => 'Kilkenny',
            ),
            253 =>
            array (
                'id' => 1760,
                'name' => 'Laois',
                'country_id' => 105,
                'arab_name' => 'Laois',
            ),
            254 =>
            array (
                'id' => 1761,
                'name' => 'Leinster',
                'country_id' => 105,
                'arab_name' => 'Leinster',
            ),
            255 =>
            array (
                'id' => 1762,
                'name' => 'Leitrim',
                'country_id' => 105,
                'arab_name' => 'Leitrim',
            ),
            256 =>
            array (
                'id' => 1763,
                'name' => 'Limerick',
                'country_id' => 105,
                'arab_name' => 'Limerick',
            ),
            257 =>
            array (
                'id' => 1764,
                'name' => 'Loch Garman',
                'country_id' => 105,
                'arab_name' => 'Loch Garman',
            ),
            258 =>
            array (
                'id' => 1765,
                'name' => 'Longford',
                'country_id' => 105,
                'arab_name' => 'Longford',
            ),
            259 =>
            array (
                'id' => 1766,
                'name' => 'Louth',
                'country_id' => 105,
                'arab_name' => 'Louth',
            ),
            260 =>
            array (
                'id' => 1767,
                'name' => 'Mayo',
                'country_id' => 105,
                'arab_name' => 'Mayo',
            ),
            261 =>
            array (
                'id' => 1768,
                'name' => 'Meath',
                'country_id' => 105,
                'arab_name' => 'Meath',
            ),
            262 =>
            array (
                'id' => 1769,
                'name' => 'Monaghan',
                'country_id' => 105,
                'arab_name' => 'Monaghan',
            ),
            263 =>
            array (
                'id' => 1770,
                'name' => 'Offaly',
                'country_id' => 105,
                'arab_name' => 'Offaly',
            ),
            264 =>
            array (
                'id' => 1771,
                'name' => 'Roscommon',
                'country_id' => 105,
                'arab_name' => 'Roscommon',
            ),
            265 =>
            array (
                'id' => 1772,
                'name' => 'Sligo',
                'country_id' => 105,
                'arab_name' => 'Sligo',
            ),
            266 =>
            array (
                'id' => 1773,
                'name' => 'Tipperary North Riding',
                'country_id' => 105,
                'arab_name' => 'Tipperary North Riding',
            ),
            267 =>
            array (
                'id' => 1774,
                'name' => 'Tipperary South Riding',
                'country_id' => 105,
                'arab_name' => 'Tipperary South Riding',
            ),
            268 =>
            array (
                'id' => 1775,
                'name' => 'Ulster',
                'country_id' => 105,
                'arab_name' => 'Ulster',
            ),
            269 =>
            array (
                'id' => 1776,
                'name' => 'Waterford',
                'country_id' => 105,
                'arab_name' => 'Waterford',
            ),
            270 =>
            array (
                'id' => 1777,
                'name' => 'Westmeath',
                'country_id' => 105,
                'arab_name' => 'Westmeath',
            ),
            271 =>
            array (
                'id' => 1778,
                'name' => 'Wexford',
                'country_id' => 105,
                'arab_name' => 'Wexford',
            ),
            272 =>
            array (
                'id' => 1779,
                'name' => 'Wicklow',
                'country_id' => 105,
                'arab_name' => 'Wicklow',
            ),
            273 =>
            array (
                'id' => 1780,
                'name' => 'Beit Hanania',
                'country_id' => 106,
                'arab_name' => 'Beit Hanania',
            ),
            274 =>
            array (
                'id' => 1781,
                'name' => 'Ben Gurion Airport',
                'country_id' => 106,
                'arab_name' => 'Ben Gurion Airport',
            ),
            275 =>
            array (
                'id' => 1782,
                'name' => 'Bethlehem',
                'country_id' => 106,
                'arab_name' => 'Bethlehem',
            ),
            276 =>
            array (
                'id' => 1783,
                'name' => 'Caesarea',
                'country_id' => 106,
                'arab_name' => 'Caesarea',
            ),
            277 =>
            array (
                'id' => 1784,
                'name' => 'Centre',
                'country_id' => 106,
                'arab_name' => 'Centre',
            ),
            278 =>
            array (
                'id' => 1785,
                'name' => 'Gaza',
                'country_id' => 106,
                'arab_name' => 'Gaza',
            ),
            279 =>
            array (
                'id' => 1786,
                'name' => 'Hadaron',
                'country_id' => 106,
                'arab_name' => 'Hadaron',
            ),
            280 =>
            array (
                'id' => 1787,
                'name' => 'Haifa District',
                'country_id' => 106,
                'arab_name' => 'Haifa District',
            ),
            281 =>
            array (
                'id' => 1788,
                'name' => 'Hamerkaz',
                'country_id' => 106,
                'arab_name' => 'Hamerkaz',
            ),
            282 =>
            array (
                'id' => 1789,
                'name' => 'Hazafon',
                'country_id' => 106,
                'arab_name' => 'Hazafon',
            ),
            283 =>
            array (
                'id' => 1790,
                'name' => 'Hebron',
                'country_id' => 106,
                'arab_name' => 'Hebron',
            ),
            284 =>
            array (
                'id' => 1791,
                'name' => 'Jaffa',
                'country_id' => 106,
                'arab_name' => 'Jaffa',
            ),
            285 =>
            array (
                'id' => 1792,
                'name' => 'Jerusalem',
                'country_id' => 106,
                'arab_name' => 'Jerusalem',
            ),
            286 =>
            array (
                'id' => 1793,
                'name' => 'Khefa',
                'country_id' => 106,
                'arab_name' => 'Khefa',
            ),
            287 =>
            array (
                'id' => 1794,
                'name' => 'Kiryat Yam',
                'country_id' => 106,
                'arab_name' => 'Kiryat Yam',
            ),
            288 =>
            array (
                'id' => 1795,
                'name' => 'Lower Galilee',
                'country_id' => 106,
                'arab_name' => 'Lower Galilee',
            ),
            289 =>
            array (
                'id' => 1796,
                'name' => 'Qalqilya',
                'country_id' => 106,
                'arab_name' => 'Qalqilya',
            ),
            290 =>
            array (
                'id' => 1797,
                'name' => 'Talme Elazar',
                'country_id' => 106,
                'arab_name' => 'Talme Elazar',
            ),
            291 =>
            array (
                'id' => 1798,
                'name' => 'Tel Aviv',
                'country_id' => 106,
                'arab_name' => 'Tel Aviv',
            ),
            292 =>
            array (
                'id' => 1799,
                'name' => 'Tsafon',
                'country_id' => 106,
                'arab_name' => 'Tsafon',
            ),
            293 =>
            array (
                'id' => 1800,
                'name' => 'Umm El Fahem',
                'country_id' => 106,
                'arab_name' => 'Umm El Fahem',
            ),
            294 =>
            array (
                'id' => 1801,
                'name' => 'Yerushalayim',
                'country_id' => 106,
                'arab_name' => 'Yerushalayim',
            ),
            295 =>
            array (
                'id' => 1802,
                'name' => 'Abruzzi',
                'country_id' => 107,
                'arab_name' => 'Abruzzi',
            ),
            296 =>
            array (
                'id' => 1803,
                'name' => 'Abruzzo',
                'country_id' => 107,
                'arab_name' => 'Abruzzo',
            ),
            297 =>
            array (
                'id' => 1804,
                'name' => 'Agrigento',
                'country_id' => 107,
                'arab_name' => 'Agrigento',
            ),
            298 =>
            array (
                'id' => 1805,
                'name' => 'Alessandria',
                'country_id' => 107,
                'arab_name' => 'Alessandria',
            ),
            299 =>
            array (
                'id' => 1806,
                'name' => 'Ancona',
                'country_id' => 107,
                'arab_name' => 'Ancona',
            ),
            300 =>
            array (
                'id' => 1807,
                'name' => 'Arezzo',
                'country_id' => 107,
                'arab_name' => 'Arezzo',
            ),
            301 =>
            array (
                'id' => 1808,
                'name' => 'Ascoli Piceno',
                'country_id' => 107,
                'arab_name' => 'Ascoli Piceno',
            ),
            302 =>
            array (
                'id' => 1809,
                'name' => 'Asti',
                'country_id' => 107,
                'arab_name' => 'Asti',
            ),
            303 =>
            array (
                'id' => 1810,
                'name' => 'Avellino',
                'country_id' => 107,
                'arab_name' => 'Avellino',
            ),
            304 =>
            array (
                'id' => 1811,
                'name' => 'Bari',
                'country_id' => 107,
                'arab_name' => 'Bari',
            ),
            305 =>
            array (
                'id' => 1812,
                'name' => 'Basilicata',
                'country_id' => 107,
                'arab_name' => 'Basilicata',
            ),
            306 =>
            array (
                'id' => 1813,
                'name' => 'Belluno',
                'country_id' => 107,
                'arab_name' => 'Belluno',
            ),
            307 =>
            array (
                'id' => 1814,
                'name' => 'Benevento',
                'country_id' => 107,
                'arab_name' => 'Benevento',
            ),
            308 =>
            array (
                'id' => 1815,
                'name' => 'Bergamo',
                'country_id' => 107,
                'arab_name' => 'Bergamo',
            ),
            309 =>
            array (
                'id' => 1816,
                'name' => 'Biella',
                'country_id' => 107,
                'arab_name' => 'Biella',
            ),
            310 =>
            array (
                'id' => 1817,
                'name' => 'Bologna',
                'country_id' => 107,
                'arab_name' => 'Bologna',
            ),
            311 =>
            array (
                'id' => 1818,
                'name' => 'Bolzano',
                'country_id' => 107,
                'arab_name' => 'Bolzano',
            ),
            312 =>
            array (
                'id' => 1819,
                'name' => 'Brescia',
                'country_id' => 107,
                'arab_name' => 'Brescia',
            ),
            313 =>
            array (
                'id' => 1820,
                'name' => 'Brindisi',
                'country_id' => 107,
                'arab_name' => 'Brindisi',
            ),
            314 =>
            array (
                'id' => 1821,
                'name' => 'Calabria',
                'country_id' => 107,
                'arab_name' => 'Calabria',
            ),
            315 =>
            array (
                'id' => 1822,
                'name' => 'Campania',
                'country_id' => 107,
                'arab_name' => 'Campania',
            ),
            316 =>
            array (
                'id' => 1823,
                'name' => 'Cartoceto',
                'country_id' => 107,
                'arab_name' => 'Cartoceto',
            ),
            317 =>
            array (
                'id' => 1824,
                'name' => 'Caserta',
                'country_id' => 107,
                'arab_name' => 'Caserta',
            ),
            318 =>
            array (
                'id' => 1825,
                'name' => 'Catania',
                'country_id' => 107,
                'arab_name' => 'Catania',
            ),
            319 =>
            array (
                'id' => 1826,
                'name' => 'Chieti',
                'country_id' => 107,
                'arab_name' => 'Chieti',
            ),
            320 =>
            array (
                'id' => 1827,
                'name' => 'Como',
                'country_id' => 107,
                'arab_name' => 'Como',
            ),
            321 =>
            array (
                'id' => 1828,
                'name' => 'Cosenza',
                'country_id' => 107,
                'arab_name' => 'Cosenza',
            ),
            322 =>
            array (
                'id' => 1829,
                'name' => 'Cremona',
                'country_id' => 107,
                'arab_name' => 'Cremona',
            ),
            323 =>
            array (
                'id' => 1830,
                'name' => 'Cuneo',
                'country_id' => 107,
                'arab_name' => 'Cuneo',
            ),
            324 =>
            array (
                'id' => 1831,
                'name' => 'Emilia-Romagna',
                'country_id' => 107,
                'arab_name' => 'Emilia-Romagna',
            ),
            325 =>
            array (
                'id' => 1832,
                'name' => 'Ferrara',
                'country_id' => 107,
                'arab_name' => 'Ferrara',
            ),
            326 =>
            array (
                'id' => 1833,
                'name' => 'Firenze',
                'country_id' => 107,
                'arab_name' => 'Firenze',
            ),
            327 =>
            array (
                'id' => 1834,
                'name' => 'Florence',
                'country_id' => 107,
                'arab_name' => 'Florence',
            ),
            328 =>
            array (
                'id' => 1835,
                'name' => 'Forli-Cesena ',
                'country_id' => 107,
                'arab_name' => 'Forli-Cesena ',
            ),
            329 =>
            array (
                'id' => 1836,
                'name' => 'Friuli-Venezia Giulia',
                'country_id' => 107,
                'arab_name' => 'Friuli-Venezia Giulia',
            ),
            330 =>
            array (
                'id' => 1837,
                'name' => 'Frosinone',
                'country_id' => 107,
                'arab_name' => 'Frosinone',
            ),
            331 =>
            array (
                'id' => 1838,
                'name' => 'Genoa',
                'country_id' => 107,
                'arab_name' => 'Genoa',
            ),
            332 =>
            array (
                'id' => 1839,
                'name' => 'Gorizia',
                'country_id' => 107,
                'arab_name' => 'Gorizia',
            ),
            333 =>
            array (
                'id' => 1840,
                'name' => 'L\'Aquila',
                'country_id' => 107,
                'arab_name' => 'L\'Aquila',
            ),
            334 =>
            array (
                'id' => 1841,
                'name' => 'Lazio',
                'country_id' => 107,
                'arab_name' => 'Lazio',
            ),
            335 =>
            array (
                'id' => 1842,
                'name' => 'Lecce',
                'country_id' => 107,
                'arab_name' => 'Lecce',
            ),
            336 =>
            array (
                'id' => 1843,
                'name' => 'Lecco',
                'country_id' => 107,
                'arab_name' => 'Lecco',
            ),
            337 =>
            array (
                'id' => 1844,
                'name' => 'Lecco Province',
                'country_id' => 107,
                'arab_name' => 'Lecco Province',
            ),
            338 =>
            array (
                'id' => 1845,
                'name' => 'Liguria',
                'country_id' => 107,
                'arab_name' => 'Liguria',
            ),
            339 =>
            array (
                'id' => 1846,
                'name' => 'Lodi',
                'country_id' => 107,
                'arab_name' => 'Lodi',
            ),
            340 =>
            array (
                'id' => 1847,
                'name' => 'Lombardia',
                'country_id' => 107,
                'arab_name' => 'Lombardia',
            ),
            341 =>
            array (
                'id' => 1848,
                'name' => 'Lombardy',
                'country_id' => 107,
                'arab_name' => 'Lombardy',
            ),
            342 =>
            array (
                'id' => 1849,
                'name' => 'Macerata',
                'country_id' => 107,
                'arab_name' => 'Macerata',
            ),
            343 =>
            array (
                'id' => 1850,
                'name' => 'Mantova',
                'country_id' => 107,
                'arab_name' => 'Mantova',
            ),
            344 =>
            array (
                'id' => 1851,
                'name' => 'Marche',
                'country_id' => 107,
                'arab_name' => 'Marche',
            ),
            345 =>
            array (
                'id' => 1852,
                'name' => 'Messina',
                'country_id' => 107,
                'arab_name' => 'Messina',
            ),
            346 =>
            array (
                'id' => 1853,
                'name' => 'Milan',
                'country_id' => 107,
                'arab_name' => 'Milan',
            ),
            347 =>
            array (
                'id' => 1854,
                'name' => 'Modena',
                'country_id' => 107,
                'arab_name' => 'Modena',
            ),
            348 =>
            array (
                'id' => 1855,
                'name' => 'Molise',
                'country_id' => 107,
                'arab_name' => 'Molise',
            ),
            349 =>
            array (
                'id' => 1856,
                'name' => 'Molteno',
                'country_id' => 107,
                'arab_name' => 'Molteno',
            ),
            350 =>
            array (
                'id' => 1857,
                'name' => 'Montenegro',
                'country_id' => 107,
                'arab_name' => 'Montenegro',
            ),
            351 =>
            array (
                'id' => 1858,
                'name' => 'Monza and Brianza',
                'country_id' => 107,
                'arab_name' => 'Monza and Brianza',
            ),
            352 =>
            array (
                'id' => 1859,
                'name' => 'Naples',
                'country_id' => 107,
                'arab_name' => 'Naples',
            ),
            353 =>
            array (
                'id' => 1860,
                'name' => 'Novara',
                'country_id' => 107,
                'arab_name' => 'Novara',
            ),
            354 =>
            array (
                'id' => 1861,
                'name' => 'Padova',
                'country_id' => 107,
                'arab_name' => 'Padova',
            ),
            355 =>
            array (
                'id' => 1862,
                'name' => 'Parma',
                'country_id' => 107,
                'arab_name' => 'Parma',
            ),
            356 =>
            array (
                'id' => 1863,
                'name' => 'Pavia',
                'country_id' => 107,
                'arab_name' => 'Pavia',
            ),
            357 =>
            array (
                'id' => 1864,
                'name' => 'Perugia',
                'country_id' => 107,
                'arab_name' => 'Perugia',
            ),
            358 =>
            array (
                'id' => 1865,
                'name' => 'Pesaro-Urbino',
                'country_id' => 107,
                'arab_name' => 'Pesaro-Urbino',
            ),
            359 =>
            array (
                'id' => 1866,
                'name' => 'Piacenza',
                'country_id' => 107,
                'arab_name' => 'Piacenza',
            ),
            360 =>
            array (
                'id' => 1867,
                'name' => 'Piedmont',
                'country_id' => 107,
                'arab_name' => 'Piedmont',
            ),
            361 =>
            array (
                'id' => 1868,
                'name' => 'Piemonte',
                'country_id' => 107,
                'arab_name' => 'Piemonte',
            ),
            362 =>
            array (
                'id' => 1869,
                'name' => 'Pisa',
                'country_id' => 107,
                'arab_name' => 'Pisa',
            ),
            363 =>
            array (
                'id' => 1870,
                'name' => 'Pordenone',
                'country_id' => 107,
                'arab_name' => 'Pordenone',
            ),
            364 =>
            array (
                'id' => 1871,
                'name' => 'Potenza',
                'country_id' => 107,
                'arab_name' => 'Potenza',
            ),
            365 =>
            array (
                'id' => 1872,
                'name' => 'Puglia',
                'country_id' => 107,
                'arab_name' => 'Puglia',
            ),
            366 =>
            array (
                'id' => 1873,
                'name' => 'Reggio Emilia',
                'country_id' => 107,
                'arab_name' => 'Reggio Emilia',
            ),
            367 =>
            array (
                'id' => 1874,
                'name' => 'Rimini',
                'country_id' => 107,
                'arab_name' => 'Rimini',
            ),
            368 =>
            array (
                'id' => 1875,
                'name' => 'Roma',
                'country_id' => 107,
                'arab_name' => 'Roma',
            ),
            369 =>
            array (
                'id' => 1876,
                'name' => 'Salerno',
                'country_id' => 107,
                'arab_name' => 'Salerno',
            ),
            370 =>
            array (
                'id' => 1877,
                'name' => 'Sardegna',
                'country_id' => 107,
                'arab_name' => 'Sardegna',
            ),
            371 =>
            array (
                'id' => 1878,
                'name' => 'Sassari',
                'country_id' => 107,
                'arab_name' => 'Sassari',
            ),
            372 =>
            array (
                'id' => 1879,
                'name' => 'Savona',
                'country_id' => 107,
                'arab_name' => 'Savona',
            ),
            373 =>
            array (
                'id' => 1880,
                'name' => 'Sicilia',
                'country_id' => 107,
                'arab_name' => 'Sicilia',
            ),
            374 =>
            array (
                'id' => 1881,
                'name' => 'Siena',
                'country_id' => 107,
                'arab_name' => 'Siena',
            ),
            375 =>
            array (
                'id' => 1882,
                'name' => 'Sondrio',
                'country_id' => 107,
                'arab_name' => 'Sondrio',
            ),
            376 =>
            array (
                'id' => 1883,
                'name' => 'South Tyrol',
                'country_id' => 107,
                'arab_name' => 'South Tyrol',
            ),
            377 =>
            array (
                'id' => 1884,
                'name' => 'Taranto',
                'country_id' => 107,
                'arab_name' => 'Taranto',
            ),
            378 =>
            array (
                'id' => 1885,
                'name' => 'Teramo',
                'country_id' => 107,
                'arab_name' => 'Teramo',
            ),
            379 =>
            array (
                'id' => 1886,
                'name' => 'Torino',
                'country_id' => 107,
                'arab_name' => 'Torino',
            ),
            380 =>
            array (
                'id' => 1887,
                'name' => 'Toscana',
                'country_id' => 107,
                'arab_name' => 'Toscana',
            ),
            381 =>
            array (
                'id' => 1888,
                'name' => 'Trapani',
                'country_id' => 107,
                'arab_name' => 'Trapani',
            ),
            382 =>
            array (
                'id' => 1889,
                'name' => 'Trentino-Alto Adige',
                'country_id' => 107,
                'arab_name' => 'Trentino-Alto Adige',
            ),
            383 =>
            array (
                'id' => 1890,
                'name' => 'Trento',
                'country_id' => 107,
                'arab_name' => 'Trento',
            ),
            384 =>
            array (
                'id' => 1891,
                'name' => 'Treviso',
                'country_id' => 107,
                'arab_name' => 'Treviso',
            ),
            385 =>
            array (
                'id' => 1892,
                'name' => 'Udine',
                'country_id' => 107,
                'arab_name' => 'Udine',
            ),
            386 =>
            array (
                'id' => 1893,
                'name' => 'Umbria',
                'country_id' => 107,
                'arab_name' => 'Umbria',
            ),
            387 =>
            array (
                'id' => 1894,
                'name' => 'Valle d\'Aosta',
                'country_id' => 107,
                'arab_name' => 'Valle d\'Aosta',
            ),
            388 =>
            array (
                'id' => 1895,
                'name' => 'Varese',
                'country_id' => 107,
                'arab_name' => 'Varese',
            ),
            389 =>
            array (
                'id' => 1896,
                'name' => 'Veneto',
                'country_id' => 107,
                'arab_name' => 'Veneto',
            ),
            390 =>
            array (
                'id' => 1897,
                'name' => 'Venezia',
                'country_id' => 107,
                'arab_name' => 'Venezia',
            ),
            391 =>
            array (
                'id' => 1898,
                'name' => 'Verbano-Cusio-Ossola',
                'country_id' => 107,
                'arab_name' => 'Verbano-Cusio-Ossola',
            ),
            392 =>
            array (
                'id' => 1899,
                'name' => 'Vercelli',
                'country_id' => 107,
                'arab_name' => 'Vercelli',
            ),
            393 =>
            array (
                'id' => 1900,
                'name' => 'Verona',
                'country_id' => 107,
                'arab_name' => 'Verona',
            ),
            394 =>
            array (
                'id' => 1901,
                'name' => 'Vicenza',
                'country_id' => 107,
                'arab_name' => 'Vicenza',
            ),
            395 =>
            array (
                'id' => 1902,
                'name' => 'Viterbo',
                'country_id' => 107,
                'arab_name' => 'Viterbo',
            ),
            396 =>
            array (
                'id' => 1903,
                'name' => 'Buxoro Viloyati',
                'country_id' => 108,
                'arab_name' => 'Buxoro Viloyati',
            ),
            397 =>
            array (
                'id' => 1904,
                'name' => 'Clarendon',
                'country_id' => 108,
                'arab_name' => 'Clarendon',
            ),
            398 =>
            array (
                'id' => 1905,
                'name' => 'Hanover',
                'country_id' => 108,
                'arab_name' => 'Hanover',
            ),
            399 =>
            array (
                'id' => 1906,
                'name' => 'Kingston',
                'country_id' => 108,
                'arab_name' => 'Kingston',
            ),
            400 =>
            array (
                'id' => 1907,
                'name' => 'Manchester',
                'country_id' => 108,
                'arab_name' => 'Manchester',
            ),
            401 =>
            array (
                'id' => 1908,
                'name' => 'Portland',
                'country_id' => 108,
                'arab_name' => 'Portland',
            ),
            402 =>
            array (
                'id' => 1909,
                'name' => 'Saint Andrews',
                'country_id' => 108,
                'arab_name' => 'Saint Andrews',
            ),
            403 =>
            array (
                'id' => 1910,
                'name' => 'Saint Ann',
                'country_id' => 108,
                'arab_name' => 'Saint Ann',
            ),
            404 =>
            array (
                'id' => 1911,
                'name' => 'Saint Catherine',
                'country_id' => 108,
                'arab_name' => 'Saint Catherine',
            ),
            405 =>
            array (
                'id' => 1912,
                'name' => 'Saint Elizabeth',
                'country_id' => 108,
                'arab_name' => 'Saint Elizabeth',
            ),
            406 =>
            array (
                'id' => 1913,
                'name' => 'Saint James',
                'country_id' => 108,
                'arab_name' => 'Saint James',
            ),
            407 =>
            array (
                'id' => 1914,
                'name' => 'Saint Mary',
                'country_id' => 108,
                'arab_name' => 'Saint Mary',
            ),
            408 =>
            array (
                'id' => 1915,
                'name' => 'Saint Thomas',
                'country_id' => 108,
                'arab_name' => 'Saint Thomas',
            ),
            409 =>
            array (
                'id' => 1916,
                'name' => 'Trelawney',
                'country_id' => 108,
                'arab_name' => 'Trelawney',
            ),
            410 =>
            array (
                'id' => 1917,
                'name' => 'Westmoreland',
                'country_id' => 108,
                'arab_name' => 'Westmoreland',
            ),
            411 =>
            array (
                'id' => 1918,
                'name' => 'Aichi',
                'country_id' => 109,
                'arab_name' => 'Aichi',
            ),
            412 =>
            array (
                'id' => 1919,
                'name' => 'Akita',
                'country_id' => 109,
                'arab_name' => 'Akita',
            ),
            413 =>
            array (
                'id' => 1920,
                'name' => 'Aomori',
                'country_id' => 109,
                'arab_name' => 'Aomori',
            ),
            414 =>
            array (
                'id' => 1921,
                'name' => 'Chiba',
                'country_id' => 109,
                'arab_name' => 'Chiba',
            ),
            415 =>
            array (
                'id' => 1922,
                'name' => 'Ehime',
                'country_id' => 109,
                'arab_name' => 'Ehime',
            ),
            416 =>
            array (
                'id' => 1923,
                'name' => 'Fukui',
                'country_id' => 109,
                'arab_name' => 'Fukui',
            ),
            417 =>
            array (
                'id' => 1924,
                'name' => 'Fukuoka',
                'country_id' => 109,
                'arab_name' => 'Fukuoka',
            ),
            418 =>
            array (
                'id' => 1925,
                'name' => 'Fukushima',
                'country_id' => 109,
                'arab_name' => 'Fukushima',
            ),
            419 =>
            array (
                'id' => 1926,
                'name' => 'Gifu',
                'country_id' => 109,
                'arab_name' => 'Gifu',
            ),
            420 =>
            array (
                'id' => 1927,
                'name' => 'Gumma',
                'country_id' => 109,
                'arab_name' => 'Gumma',
            ),
            421 =>
            array (
                'id' => 1928,
                'name' => 'Hiroshima',
                'country_id' => 109,
                'arab_name' => 'Hiroshima',
            ),
            422 =>
            array (
                'id' => 1929,
                'name' => 'Hokkaido',
                'country_id' => 109,
                'arab_name' => 'Hokkaido',
            ),
            423 =>
            array (
                'id' => 1930,
                'name' => 'Hyogo',
                'country_id' => 109,
                'arab_name' => 'Hyogo',
            ),
            424 =>
            array (
                'id' => 1931,
                'name' => 'Ibaraki',
                'country_id' => 109,
                'arab_name' => 'Ibaraki',
            ),
            425 =>
            array (
                'id' => 1932,
                'name' => 'Ishikawa',
                'country_id' => 109,
                'arab_name' => 'Ishikawa',
            ),
            426 =>
            array (
                'id' => 1933,
                'name' => 'Iwate',
                'country_id' => 109,
                'arab_name' => 'Iwate',
            ),
            427 =>
            array (
                'id' => 1934,
                'name' => 'Kagawa',
                'country_id' => 109,
                'arab_name' => 'Kagawa',
            ),
            428 =>
            array (
                'id' => 1935,
                'name' => 'Kagoshima',
                'country_id' => 109,
                'arab_name' => 'Kagoshima',
            ),
            429 =>
            array (
                'id' => 1936,
                'name' => 'Kanagawa',
                'country_id' => 109,
                'arab_name' => 'Kanagawa',
            ),
            430 =>
            array (
                'id' => 1937,
                'name' => 'Kanto',
                'country_id' => 109,
                'arab_name' => 'Kanto',
            ),
            431 =>
            array (
                'id' => 1938,
                'name' => 'Kochi',
                'country_id' => 109,
                'arab_name' => 'Kochi',
            ),
            432 =>
            array (
                'id' => 1939,
                'name' => 'Kumamoto',
                'country_id' => 109,
                'arab_name' => 'Kumamoto',
            ),
            433 =>
            array (
                'id' => 1940,
                'name' => 'Kyoto',
                'country_id' => 109,
                'arab_name' => 'Kyoto',
            ),
            434 =>
            array (
                'id' => 1941,
                'name' => 'Mie',
                'country_id' => 109,
                'arab_name' => 'Mie',
            ),
            435 =>
            array (
                'id' => 1942,
                'name' => 'Miyagi',
                'country_id' => 109,
                'arab_name' => 'Miyagi',
            ),
            436 =>
            array (
                'id' => 1943,
                'name' => 'Miyazaki',
                'country_id' => 109,
                'arab_name' => 'Miyazaki',
            ),
            437 =>
            array (
                'id' => 1944,
                'name' => 'Nagano',
                'country_id' => 109,
                'arab_name' => 'Nagano',
            ),
            438 =>
            array (
                'id' => 1945,
                'name' => 'Nagasaki',
                'country_id' => 109,
                'arab_name' => 'Nagasaki',
            ),
            439 =>
            array (
                'id' => 1946,
                'name' => 'Nara',
                'country_id' => 109,
                'arab_name' => 'Nara',
            ),
            440 =>
            array (
                'id' => 1947,
                'name' => 'Niigata',
                'country_id' => 109,
                'arab_name' => 'Niigata',
            ),
            441 =>
            array (
                'id' => 1948,
                'name' => 'Oita',
                'country_id' => 109,
                'arab_name' => 'Oita',
            ),
            442 =>
            array (
                'id' => 1949,
                'name' => 'Okayama',
                'country_id' => 109,
                'arab_name' => 'Okayama',
            ),
            443 =>
            array (
                'id' => 1950,
                'name' => 'Okinawa',
                'country_id' => 109,
                'arab_name' => 'Okinawa',
            ),
            444 =>
            array (
                'id' => 1951,
                'name' => 'Osaka',
                'country_id' => 109,
                'arab_name' => 'Osaka',
            ),
            445 =>
            array (
                'id' => 1952,
                'name' => 'Saga',
                'country_id' => 109,
                'arab_name' => 'Saga',
            ),
            446 =>
            array (
                'id' => 1953,
                'name' => 'Saitama',
                'country_id' => 109,
                'arab_name' => 'Saitama',
            ),
            447 =>
            array (
                'id' => 1954,
                'name' => 'Shiga',
                'country_id' => 109,
                'arab_name' => 'Shiga',
            ),
            448 =>
            array (
                'id' => 1955,
                'name' => 'Shimane',
                'country_id' => 109,
                'arab_name' => 'Shimane',
            ),
            449 =>
            array (
                'id' => 1956,
                'name' => 'Shizuoka',
                'country_id' => 109,
                'arab_name' => 'Shizuoka',
            ),
            450 =>
            array (
                'id' => 1957,
                'name' => 'Tochigi',
                'country_id' => 109,
                'arab_name' => 'Tochigi',
            ),
            451 =>
            array (
                'id' => 1958,
                'name' => 'Tokushima',
                'country_id' => 109,
                'arab_name' => 'Tokushima',
            ),
            452 =>
            array (
                'id' => 1959,
                'name' => 'Tokyo',
                'country_id' => 109,
                'arab_name' => 'Tokyo',
            ),
            453 =>
            array (
                'id' => 1960,
                'name' => 'Tottori',
                'country_id' => 109,
                'arab_name' => 'Tottori',
            ),
            454 =>
            array (
                'id' => 1961,
                'name' => 'Toyama',
                'country_id' => 109,
                'arab_name' => 'Toyama',
            ),
            455 =>
            array (
                'id' => 1962,
                'name' => 'Wakayama',
                'country_id' => 109,
                'arab_name' => 'Wakayama',
            ),
            456 =>
            array (
                'id' => 1963,
                'name' => 'Yamagata',
                'country_id' => 109,
                'arab_name' => 'Yamagata',
            ),
            457 =>
            array (
                'id' => 1964,
                'name' => 'Yamaguchi',
                'country_id' => 109,
                'arab_name' => 'Yamaguchi',
            ),
            458 =>
            array (
                'id' => 1965,
                'name' => 'Yamanashi',
                'country_id' => 109,
                'arab_name' => 'Yamanashi',
            ),
            459 =>
            array (
                'id' => 1966,
                'name' => 'Grouville',
                'country_id' => 110,
                'arab_name' => 'Grouville',
            ),
            460 =>
            array (
                'id' => 1967,
                'name' => 'Saint Brelade',
                'country_id' => 110,
                'arab_name' => 'Saint Brelade',
            ),
            461 =>
            array (
                'id' => 1968,
                'name' => 'Saint Clement',
                'country_id' => 110,
                'arab_name' => 'Saint Clement',
            ),
            462 =>
            array (
                'id' => 1969,
                'name' => 'Saint Helier',
                'country_id' => 110,
                'arab_name' => 'Saint Helier',
            ),
            463 =>
            array (
                'id' => 1970,
                'name' => 'Saint John',
                'country_id' => 110,
                'arab_name' => 'Saint John',
            ),
            464 =>
            array (
                'id' => 1971,
                'name' => 'Saint Lawrence',
                'country_id' => 110,
                'arab_name' => 'Saint Lawrence',
            ),
            465 =>
            array (
                'id' => 1972,
                'name' => 'Saint Martin',
                'country_id' => 110,
                'arab_name' => 'Saint Martin',
            ),
            466 =>
            array (
                'id' => 1973,
                'name' => 'Saint Mary',
                'country_id' => 110,
                'arab_name' => 'Saint Mary',
            ),
            467 =>
            array (
                'id' => 1974,
                'name' => 'Saint Peter',
                'country_id' => 110,
                'arab_name' => 'Saint Peter',
            ),
            468 =>
            array (
                'id' => 1975,
                'name' => 'Saint Saviour',
                'country_id' => 110,
                'arab_name' => 'Saint Saviour',
            ),
            469 =>
            array (
                'id' => 1976,
                'name' => 'Trinity',
                'country_id' => 110,
                'arab_name' => 'Trinity',
            ),
            470 =>
            array (
                'id' => 1977,
                'name' => '\'Ajlun',
                'country_id' => 111,
                'arab_name' => '\'Ajlun',
            ),
            471 =>
            array (
                'id' => 1978,
                'name' => 'Amman',
                'country_id' => 111,
                'arab_name' => 'Amman',
            ),
            472 =>
            array (
                'id' => 1979,
                'name' => 'Irbid',
                'country_id' => 111,
                'arab_name' => 'Irbid',
            ),
            473 =>
            array (
                'id' => 1980,
                'name' => 'Jarash',
                'country_id' => 111,
                'arab_name' => 'Jarash',
            ),
            474 =>
            array (
                'id' => 1981,
                'name' => 'Ma\'an',
                'country_id' => 111,
                'arab_name' => 'Ma\'an',
            ),
            475 =>
            array (
                'id' => 1982,
                'name' => 'Madaba',
                'country_id' => 111,
                'arab_name' => 'Madaba',
            ),
            476 =>
            array (
                'id' => 1983,
                'name' => 'al-\'Aqabah',
                'country_id' => 111,
                'arab_name' => 'al-\'Aqabah',
            ),
            477 =>
            array (
                'id' => 1984,
                'name' => 'al-Balqa\'',
                'country_id' => 111,
                'arab_name' => 'al-Balqa\'',
            ),
            478 =>
            array (
                'id' => 1985,
                'name' => 'al-Karak',
                'country_id' => 111,
                'arab_name' => 'al-Karak',
            ),
            479 =>
            array (
                'id' => 1986,
                'name' => 'al-Mafraq',
                'country_id' => 111,
                'arab_name' => 'al-Mafraq',
            ),
            480 =>
            array (
                'id' => 1987,
                'name' => 'at-Tafilah',
                'country_id' => 111,
                'arab_name' => 'at-Tafilah',
            ),
            481 =>
            array (
                'id' => 1988,
                'name' => 'az-Zarqa\'',
                'country_id' => 111,
                'arab_name' => 'az-Zarqa\'',
            ),
            482 =>
            array (
                'id' => 1989,
                'name' => 'Akmecet',
                'country_id' => 112,
                'arab_name' => 'Akmecet',
            ),
            483 =>
            array (
                'id' => 1990,
                'name' => 'Akmola',
                'country_id' => 112,
                'arab_name' => 'Akmola',
            ),
            484 =>
            array (
                'id' => 1991,
                'name' => 'Aktobe',
                'country_id' => 112,
                'arab_name' => 'Aktobe',
            ),
            485 =>
            array (
                'id' => 1992,
                'name' => 'Almati',
                'country_id' => 112,
                'arab_name' => 'Almati',
            ),
            486 =>
            array (
                'id' => 1993,
                'name' => 'Atirau',
                'country_id' => 112,
                'arab_name' => 'Atirau',
            ),
            487 =>
            array (
                'id' => 1994,
                'name' => 'Batis Kazakstan',
                'country_id' => 112,
                'arab_name' => 'Batis Kazakstan',
            ),
            488 =>
            array (
                'id' => 1995,
                'name' => 'Burlinsky Region',
                'country_id' => 112,
                'arab_name' => 'Burlinsky Region',
            ),
            489 =>
            array (
                'id' => 1996,
                'name' => 'Karagandi',
                'country_id' => 112,
                'arab_name' => 'Karagandi',
            ),
            490 =>
            array (
                'id' => 1997,
                'name' => 'Kostanay',
                'country_id' => 112,
                'arab_name' => 'Kostanay',
            ),
            491 =>
            array (
                'id' => 1998,
                'name' => 'Mankistau',
                'country_id' => 112,
                'arab_name' => 'Mankistau',
            ),
            492 =>
            array (
                'id' => 1999,
                'name' => 'Ontustik Kazakstan',
                'country_id' => 112,
                'arab_name' => 'Ontustik Kazakstan',
            ),
            493 =>
            array (
                'id' => 2000,
                'name' => 'Pavlodar',
                'country_id' => 112,
                'arab_name' => 'Pavlodar',
            ),
            494 =>
            array (
                'id' => 2001,
                'name' => 'Sigis Kazakstan',
                'country_id' => 112,
                'arab_name' => 'Sigis Kazakstan',
            ),
            495 =>
            array (
                'id' => 2002,
                'name' => 'Soltustik Kazakstan',
                'country_id' => 112,
                'arab_name' => 'Soltustik Kazakstan',
            ),
            496 =>
            array (
                'id' => 2003,
                'name' => 'Taraz',
                'country_id' => 112,
                'arab_name' => 'Taraz',
            ),
            497 =>
            array (
                'id' => 2004,
                'name' => 'Central',
                'country_id' => 113,
                'arab_name' => 'Central',
            ),
            498 =>
            array (
                'id' => 2005,
                'name' => 'Coast',
                'country_id' => 113,
                'arab_name' => 'Coast',
            ),
            499 =>
            array (
                'id' => 2006,
                'name' => 'Eastern',
                'country_id' => 113,
                'arab_name' => 'Eastern',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 2007,
                'name' => 'Nairobi',
                'country_id' => 113,
                'arab_name' => 'Nairobi',
            ),
            1 =>
            array (
                'id' => 2008,
                'name' => 'North Eastern',
                'country_id' => 113,
                'arab_name' => 'North Eastern',
            ),
            2 =>
            array (
                'id' => 2009,
                'name' => 'Nyanza',
                'country_id' => 113,
                'arab_name' => 'Nyanza',
            ),
            3 =>
            array (
                'id' => 2010,
                'name' => 'Rift Valley',
                'country_id' => 113,
                'arab_name' => 'Rift Valley',
            ),
            4 =>
            array (
                'id' => 2011,
                'name' => 'Western',
                'country_id' => 113,
                'arab_name' => 'Western',
            ),
            5 =>
            array (
                'id' => 2012,
                'name' => 'Abaiang',
                'country_id' => 114,
                'arab_name' => 'Abaiang',
            ),
            6 =>
            array (
                'id' => 2013,
                'name' => 'Abemana',
                'country_id' => 114,
                'arab_name' => 'Abemana',
            ),
            7 =>
            array (
                'id' => 2014,
                'name' => 'Aranuka',
                'country_id' => 114,
                'arab_name' => 'Aranuka',
            ),
            8 =>
            array (
                'id' => 2015,
                'name' => 'Arorae',
                'country_id' => 114,
                'arab_name' => 'Arorae',
            ),
            9 =>
            array (
                'id' => 2016,
                'name' => 'Banaba',
                'country_id' => 114,
                'arab_name' => 'Banaba',
            ),
            10 =>
            array (
                'id' => 2017,
                'name' => 'Beru',
                'country_id' => 114,
                'arab_name' => 'Beru',
            ),
            11 =>
            array (
                'id' => 2018,
                'name' => 'Butaritari',
                'country_id' => 114,
                'arab_name' => 'Butaritari',
            ),
            12 =>
            array (
                'id' => 2019,
                'name' => 'Kiritimati',
                'country_id' => 114,
                'arab_name' => 'Kiritimati',
            ),
            13 =>
            array (
                'id' => 2020,
                'name' => 'Kuria',
                'country_id' => 114,
                'arab_name' => 'Kuria',
            ),
            14 =>
            array (
                'id' => 2021,
                'name' => 'Maiana',
                'country_id' => 114,
                'arab_name' => 'Maiana',
            ),
            15 =>
            array (
                'id' => 2022,
                'name' => 'Makin',
                'country_id' => 114,
                'arab_name' => 'Makin',
            ),
            16 =>
            array (
                'id' => 2023,
                'name' => 'Marakei',
                'country_id' => 114,
                'arab_name' => 'Marakei',
            ),
            17 =>
            array (
                'id' => 2024,
                'name' => 'Nikunau',
                'country_id' => 114,
                'arab_name' => 'Nikunau',
            ),
            18 =>
            array (
                'id' => 2025,
                'name' => 'Nonouti',
                'country_id' => 114,
                'arab_name' => 'Nonouti',
            ),
            19 =>
            array (
                'id' => 2026,
                'name' => 'Onotoa',
                'country_id' => 114,
                'arab_name' => 'Onotoa',
            ),
            20 =>
            array (
                'id' => 2027,
                'name' => 'Phoenix Islands',
                'country_id' => 114,
                'arab_name' => 'Phoenix Islands',
            ),
            21 =>
            array (
                'id' => 2028,
                'name' => 'Tabiteuea North',
                'country_id' => 114,
                'arab_name' => 'Tabiteuea North',
            ),
            22 =>
            array (
                'id' => 2029,
                'name' => 'Tabiteuea South',
                'country_id' => 114,
                'arab_name' => 'Tabiteuea South',
            ),
            23 =>
            array (
                'id' => 2030,
                'name' => 'Tabuaeran',
                'country_id' => 114,
                'arab_name' => 'Tabuaeran',
            ),
            24 =>
            array (
                'id' => 2031,
                'name' => 'Tamana',
                'country_id' => 114,
                'arab_name' => 'Tamana',
            ),
            25 =>
            array (
                'id' => 2032,
                'name' => 'Tarawa North',
                'country_id' => 114,
                'arab_name' => 'Tarawa North',
            ),
            26 =>
            array (
                'id' => 2033,
                'name' => 'Tarawa South',
                'country_id' => 114,
                'arab_name' => 'Tarawa South',
            ),
            27 =>
            array (
                'id' => 2034,
                'name' => 'Teraina',
                'country_id' => 114,
                'arab_name' => 'Teraina',
            ),
            28 =>
            array (
                'id' => 2035,
                'name' => 'Chagangdo',
                'country_id' => 115,
                'arab_name' => 'Chagangdo',
            ),
            29 =>
            array (
                'id' => 2036,
                'name' => 'Hamgyeongbukto',
                'country_id' => 115,
                'arab_name' => 'Hamgyeongbukto',
            ),
            30 =>
            array (
                'id' => 2037,
                'name' => 'Hamgyeongnamdo',
                'country_id' => 115,
                'arab_name' => 'Hamgyeongnamdo',
            ),
            31 =>
            array (
                'id' => 2038,
                'name' => 'Hwanghaebukto',
                'country_id' => 115,
                'arab_name' => 'Hwanghaebukto',
            ),
            32 =>
            array (
                'id' => 2039,
                'name' => 'Hwanghaenamdo',
                'country_id' => 115,
                'arab_name' => 'Hwanghaenamdo',
            ),
            33 =>
            array (
                'id' => 2040,
                'name' => 'Kaeseong',
                'country_id' => 115,
                'arab_name' => 'Kaeseong',
            ),
            34 =>
            array (
                'id' => 2041,
                'name' => 'Kangweon',
                'country_id' => 115,
                'arab_name' => 'Kangweon',
            ),
            35 =>
            array (
                'id' => 2042,
                'name' => 'Nampo',
                'country_id' => 115,
                'arab_name' => 'Nampo',
            ),
            36 =>
            array (
                'id' => 2043,
                'name' => 'Pyeonganbukto',
                'country_id' => 115,
                'arab_name' => 'Pyeonganbukto',
            ),
            37 =>
            array (
                'id' => 2044,
                'name' => 'Pyeongannamdo',
                'country_id' => 115,
                'arab_name' => 'Pyeongannamdo',
            ),
            38 =>
            array (
                'id' => 2045,
                'name' => 'Pyeongyang',
                'country_id' => 115,
                'arab_name' => 'Pyeongyang',
            ),
            39 =>
            array (
                'id' => 2046,
                'name' => 'Yanggang',
                'country_id' => 115,
                'arab_name' => 'Yanggang',
            ),
            40 =>
            array (
                'id' => 2047,
                'name' => 'Busan',
                'country_id' => 116,
                'arab_name' => 'Busan',
            ),
            41 =>
            array (
                'id' => 2048,
                'name' => 'Cheju',
                'country_id' => 116,
                'arab_name' => 'Cheju',
            ),
            42 =>
            array (
                'id' => 2049,
                'name' => 'Chollabuk',
                'country_id' => 116,
                'arab_name' => 'Chollabuk',
            ),
            43 =>
            array (
                'id' => 2050,
                'name' => 'Chollanam',
                'country_id' => 116,
                'arab_name' => 'Chollanam',
            ),
            44 =>
            array (
                'id' => 2051,
                'name' => 'Chungbuk',
                'country_id' => 116,
                'arab_name' => 'Chungbuk',
            ),
            45 =>
            array (
                'id' => 2052,
                'name' => 'Chungcheongbuk',
                'country_id' => 116,
                'arab_name' => 'Chungcheongbuk',
            ),
            46 =>
            array (
                'id' => 2053,
                'name' => 'Chungcheongnam',
                'country_id' => 116,
                'arab_name' => 'Chungcheongnam',
            ),
            47 =>
            array (
                'id' => 2054,
                'name' => 'Chungnam',
                'country_id' => 116,
                'arab_name' => 'Chungnam',
            ),
            48 =>
            array (
                'id' => 2055,
                'name' => 'Daegu',
                'country_id' => 116,
                'arab_name' => 'Daegu',
            ),
            49 =>
            array (
                'id' => 2056,
                'name' => 'Gangwon-do',
                'country_id' => 116,
                'arab_name' => 'Gangwon-do',
            ),
            50 =>
            array (
                'id' => 2057,
                'name' => 'Goyang-si',
                'country_id' => 116,
                'arab_name' => 'Goyang-si',
            ),
            51 =>
            array (
                'id' => 2058,
                'name' => 'Gyeonggi-do',
                'country_id' => 116,
                'arab_name' => 'Gyeonggi-do',
            ),
            52 =>
            array (
                'id' => 2059,
                'name' => 'Gyeongsang ',
                'country_id' => 116,
                'arab_name' => 'Gyeongsang ',
            ),
            53 =>
            array (
                'id' => 2060,
                'name' => 'Gyeongsangnam-do',
                'country_id' => 116,
                'arab_name' => 'Gyeongsangnam-do',
            ),
            54 =>
            array (
                'id' => 2061,
                'name' => 'Incheon',
                'country_id' => 116,
                'arab_name' => 'Incheon',
            ),
            55 =>
            array (
                'id' => 2062,
                'name' => 'Jeju-Si',
                'country_id' => 116,
                'arab_name' => 'Jeju-Si',
            ),
            56 =>
            array (
                'id' => 2063,
                'name' => 'Jeonbuk',
                'country_id' => 116,
                'arab_name' => 'Jeonbuk',
            ),
            57 =>
            array (
                'id' => 2064,
                'name' => 'Kangweon',
                'country_id' => 116,
                'arab_name' => 'Kangweon',
            ),
            58 =>
            array (
                'id' => 2065,
                'name' => 'Kwangju',
                'country_id' => 116,
                'arab_name' => 'Kwangju',
            ),
            59 =>
            array (
                'id' => 2066,
                'name' => 'Kyeonggi',
                'country_id' => 116,
                'arab_name' => 'Kyeonggi',
            ),
            60 =>
            array (
                'id' => 2067,
                'name' => 'Kyeongsangbuk',
                'country_id' => 116,
                'arab_name' => 'Kyeongsangbuk',
            ),
            61 =>
            array (
                'id' => 2068,
                'name' => 'Kyeongsangnam',
                'country_id' => 116,
                'arab_name' => 'Kyeongsangnam',
            ),
            62 =>
            array (
                'id' => 2069,
                'name' => 'Kyonggi-do',
                'country_id' => 116,
                'arab_name' => 'Kyonggi-do',
            ),
            63 =>
            array (
                'id' => 2070,
                'name' => 'Kyungbuk-Do',
                'country_id' => 116,
                'arab_name' => 'Kyungbuk-Do',
            ),
            64 =>
            array (
                'id' => 2071,
                'name' => 'Kyunggi-Do',
                'country_id' => 116,
                'arab_name' => 'Kyunggi-Do',
            ),
            65 =>
            array (
                'id' => 2072,
                'name' => 'Kyunggi-do',
                'country_id' => 116,
                'arab_name' => 'Kyunggi-do',
            ),
            66 =>
            array (
                'id' => 2073,
                'name' => 'Pusan',
                'country_id' => 116,
                'arab_name' => 'Pusan',
            ),
            67 =>
            array (
                'id' => 2074,
                'name' => 'Seoul',
                'country_id' => 116,
                'arab_name' => 'Seoul',
            ),
            68 =>
            array (
                'id' => 2075,
                'name' => 'Sudogwon',
                'country_id' => 116,
                'arab_name' => 'Sudogwon',
            ),
            69 =>
            array (
                'id' => 2076,
                'name' => 'Taegu',
                'country_id' => 116,
                'arab_name' => 'Taegu',
            ),
            70 =>
            array (
                'id' => 2077,
                'name' => 'Taejeon',
                'country_id' => 116,
                'arab_name' => 'Taejeon',
            ),
            71 =>
            array (
                'id' => 2078,
                'name' => 'Taejon-gwangyoksi',
                'country_id' => 116,
                'arab_name' => 'Taejon-gwangyoksi',
            ),
            72 =>
            array (
                'id' => 2079,
                'name' => 'Ulsan',
                'country_id' => 116,
                'arab_name' => 'Ulsan',
            ),
            73 =>
            array (
                'id' => 2080,
                'name' => 'Wonju',
                'country_id' => 116,
                'arab_name' => 'Wonju',
            ),
            74 =>
            array (
                'id' => 2081,
                'name' => 'gwangyoksi',
                'country_id' => 116,
                'arab_name' => 'gwangyoksi',
            ),
            75 =>
            array (
                'id' => 2082,
                'name' => 'Al Asimah',
                'country_id' => 117,
                'arab_name' => 'Al Asimah',
            ),
            76 =>
            array (
                'id' => 2083,
                'name' => 'Hawalli',
                'country_id' => 117,
                'arab_name' => 'Hawalli',
            ),
            77 =>
            array (
                'id' => 2084,
                'name' => 'Mishref',
                'country_id' => 117,
                'arab_name' => 'Mishref',
            ),
            78 =>
            array (
                'id' => 2085,
                'name' => 'Qadesiya',
                'country_id' => 117,
                'arab_name' => 'Qadesiya',
            ),
            79 =>
            array (
                'id' => 2086,
                'name' => 'Safat',
                'country_id' => 117,
                'arab_name' => 'Safat',
            ),
            80 =>
            array (
                'id' => 2087,
                'name' => 'Salmiya',
                'country_id' => 117,
                'arab_name' => 'Salmiya',
            ),
            81 =>
            array (
                'id' => 2088,
                'name' => 'al-Ahmadi',
                'country_id' => 117,
                'arab_name' => 'al-Ahmadi',
            ),
            82 =>
            array (
                'id' => 2089,
                'name' => 'al-Farwaniyah',
                'country_id' => 117,
                'arab_name' => 'al-Farwaniyah',
            ),
            83 =>
            array (
                'id' => 2090,
                'name' => 'al-Jahra',
                'country_id' => 117,
                'arab_name' => 'al-Jahra',
            ),
            84 =>
            array (
                'id' => 2091,
                'name' => 'al-Kuwayt',
                'country_id' => 117,
                'arab_name' => 'al-Kuwayt',
            ),
            85 =>
            array (
                'id' => 2092,
                'name' => 'Batken',
                'country_id' => 118,
                'arab_name' => 'Batken',
            ),
            86 =>
            array (
                'id' => 2093,
                'name' => 'Bishkek',
                'country_id' => 118,
                'arab_name' => 'Bishkek',
            ),
            87 =>
            array (
                'id' => 2094,
                'name' => 'Chui',
                'country_id' => 118,
                'arab_name' => 'Chui',
            ),
            88 =>
            array (
                'id' => 2095,
                'name' => 'Issyk-Kul',
                'country_id' => 118,
                'arab_name' => 'Issyk-Kul',
            ),
            89 =>
            array (
                'id' => 2096,
                'name' => 'Jalal-Abad',
                'country_id' => 118,
                'arab_name' => 'Jalal-Abad',
            ),
            90 =>
            array (
                'id' => 2097,
                'name' => 'Naryn',
                'country_id' => 118,
                'arab_name' => 'Naryn',
            ),
            91 =>
            array (
                'id' => 2098,
                'name' => 'Osh',
                'country_id' => 118,
                'arab_name' => 'Osh',
            ),
            92 =>
            array (
                'id' => 2099,
                'name' => 'Talas',
                'country_id' => 118,
                'arab_name' => 'Talas',
            ),
            93 =>
            array (
                'id' => 2100,
                'name' => 'Attopu',
                'country_id' => 119,
                'arab_name' => 'Attopu',
            ),
            94 =>
            array (
                'id' => 2101,
                'name' => 'Bokeo',
                'country_id' => 119,
                'arab_name' => 'Bokeo',
            ),
            95 =>
            array (
                'id' => 2102,
                'name' => 'Bolikhamsay',
                'country_id' => 119,
                'arab_name' => 'Bolikhamsay',
            ),
            96 =>
            array (
                'id' => 2103,
                'name' => 'Champasak',
                'country_id' => 119,
                'arab_name' => 'Champasak',
            ),
            97 =>
            array (
                'id' => 2104,
                'name' => 'Houaphanh',
                'country_id' => 119,
                'arab_name' => 'Houaphanh',
            ),
            98 =>
            array (
                'id' => 2105,
                'name' => 'Khammouane',
                'country_id' => 119,
                'arab_name' => 'Khammouane',
            ),
            99 =>
            array (
                'id' => 2106,
                'name' => 'Luang Nam Tha',
                'country_id' => 119,
                'arab_name' => 'Luang Nam Tha',
            ),
            100 =>
            array (
                'id' => 2107,
                'name' => 'Luang Prabang',
                'country_id' => 119,
                'arab_name' => 'Luang Prabang',
            ),
            101 =>
            array (
                'id' => 2108,
                'name' => 'Oudomxay',
                'country_id' => 119,
                'arab_name' => 'Oudomxay',
            ),
            102 =>
            array (
                'id' => 2109,
                'name' => 'Phongsaly',
                'country_id' => 119,
                'arab_name' => 'Phongsaly',
            ),
            103 =>
            array (
                'id' => 2110,
                'name' => 'Saravan',
                'country_id' => 119,
                'arab_name' => 'Saravan',
            ),
            104 =>
            array (
                'id' => 2111,
                'name' => 'Savannakhet',
                'country_id' => 119,
                'arab_name' => 'Savannakhet',
            ),
            105 =>
            array (
                'id' => 2112,
                'name' => 'Sekong',
                'country_id' => 119,
                'arab_name' => 'Sekong',
            ),
            106 =>
            array (
                'id' => 2113,
                'name' => 'Viangchan Prefecture',
                'country_id' => 119,
                'arab_name' => 'Viangchan Prefecture',
            ),
            107 =>
            array (
                'id' => 2114,
                'name' => 'Viangchan Province',
                'country_id' => 119,
                'arab_name' => 'Viangchan Province',
            ),
            108 =>
            array (
                'id' => 2115,
                'name' => 'Xaignabury',
                'country_id' => 119,
                'arab_name' => 'Xaignabury',
            ),
            109 =>
            array (
                'id' => 2116,
                'name' => 'Xiang Khuang',
                'country_id' => 119,
                'arab_name' => 'Xiang Khuang',
            ),
            110 =>
            array (
                'id' => 2117,
                'name' => 'Aizkraukles',
                'country_id' => 120,
                'arab_name' => 'Aizkraukles',
            ),
            111 =>
            array (
                'id' => 2118,
                'name' => 'Aluksnes',
                'country_id' => 120,
                'arab_name' => 'Aluksnes',
            ),
            112 =>
            array (
                'id' => 2119,
                'name' => 'Balvu',
                'country_id' => 120,
                'arab_name' => 'Balvu',
            ),
            113 =>
            array (
                'id' => 2120,
                'name' => 'Bauskas',
                'country_id' => 120,
                'arab_name' => 'Bauskas',
            ),
            114 =>
            array (
                'id' => 2121,
                'name' => 'Cesu',
                'country_id' => 120,
                'arab_name' => 'Cesu',
            ),
            115 =>
            array (
                'id' => 2122,
                'name' => 'Daugavpils',
                'country_id' => 120,
                'arab_name' => 'Daugavpils',
            ),
            116 =>
            array (
                'id' => 2123,
                'name' => 'Daugavpils City',
                'country_id' => 120,
                'arab_name' => 'Daugavpils City',
            ),
            117 =>
            array (
                'id' => 2124,
                'name' => 'Dobeles',
                'country_id' => 120,
                'arab_name' => 'Dobeles',
            ),
            118 =>
            array (
                'id' => 2125,
                'name' => 'Gulbenes',
                'country_id' => 120,
                'arab_name' => 'Gulbenes',
            ),
            119 =>
            array (
                'id' => 2126,
                'name' => 'Jekabspils',
                'country_id' => 120,
                'arab_name' => 'Jekabspils',
            ),
            120 =>
            array (
                'id' => 2127,
                'name' => 'Jelgava',
                'country_id' => 120,
                'arab_name' => 'Jelgava',
            ),
            121 =>
            array (
                'id' => 2128,
                'name' => 'Jelgavas',
                'country_id' => 120,
                'arab_name' => 'Jelgavas',
            ),
            122 =>
            array (
                'id' => 2129,
                'name' => 'Jurmala City',
                'country_id' => 120,
                'arab_name' => 'Jurmala City',
            ),
            123 =>
            array (
                'id' => 2130,
                'name' => 'Kraslavas',
                'country_id' => 120,
                'arab_name' => 'Kraslavas',
            ),
            124 =>
            array (
                'id' => 2131,
                'name' => 'Kuldigas',
                'country_id' => 120,
                'arab_name' => 'Kuldigas',
            ),
            125 =>
            array (
                'id' => 2132,
                'name' => 'Liepaja',
                'country_id' => 120,
                'arab_name' => 'Liepaja',
            ),
            126 =>
            array (
                'id' => 2133,
                'name' => 'Liepajas',
                'country_id' => 120,
                'arab_name' => 'Liepajas',
            ),
            127 =>
            array (
                'id' => 2134,
                'name' => 'Limbazhu',
                'country_id' => 120,
                'arab_name' => 'Limbazhu',
            ),
            128 =>
            array (
                'id' => 2135,
                'name' => 'Ludzas',
                'country_id' => 120,
                'arab_name' => 'Ludzas',
            ),
            129 =>
            array (
                'id' => 2136,
                'name' => 'Madonas',
                'country_id' => 120,
                'arab_name' => 'Madonas',
            ),
            130 =>
            array (
                'id' => 2137,
                'name' => 'Ogres',
                'country_id' => 120,
                'arab_name' => 'Ogres',
            ),
            131 =>
            array (
                'id' => 2138,
                'name' => 'Preilu',
                'country_id' => 120,
                'arab_name' => 'Preilu',
            ),
            132 =>
            array (
                'id' => 2139,
                'name' => 'Rezekne',
                'country_id' => 120,
                'arab_name' => 'Rezekne',
            ),
            133 =>
            array (
                'id' => 2140,
                'name' => 'Rezeknes',
                'country_id' => 120,
                'arab_name' => 'Rezeknes',
            ),
            134 =>
            array (
                'id' => 2141,
                'name' => 'Riga',
                'country_id' => 120,
                'arab_name' => 'Riga',
            ),
            135 =>
            array (
                'id' => 2142,
                'name' => 'Rigas',
                'country_id' => 120,
                'arab_name' => 'Rigas',
            ),
            136 =>
            array (
                'id' => 2143,
                'name' => 'Saldus',
                'country_id' => 120,
                'arab_name' => 'Saldus',
            ),
            137 =>
            array (
                'id' => 2144,
                'name' => 'Talsu',
                'country_id' => 120,
                'arab_name' => 'Talsu',
            ),
            138 =>
            array (
                'id' => 2145,
                'name' => 'Tukuma',
                'country_id' => 120,
                'arab_name' => 'Tukuma',
            ),
            139 =>
            array (
                'id' => 2146,
                'name' => 'Valkas',
                'country_id' => 120,
                'arab_name' => 'Valkas',
            ),
            140 =>
            array (
                'id' => 2147,
                'name' => 'Valmieras',
                'country_id' => 120,
                'arab_name' => 'Valmieras',
            ),
            141 =>
            array (
                'id' => 2148,
                'name' => 'Ventspils',
                'country_id' => 120,
                'arab_name' => 'Ventspils',
            ),
            142 =>
            array (
                'id' => 2149,
                'name' => 'Ventspils City',
                'country_id' => 120,
                'arab_name' => 'Ventspils City',
            ),
            143 =>
            array (
                'id' => 2150,
                'name' => 'Beirut',
                'country_id' => 121,
                'arab_name' => 'Beirut',
            ),
            144 =>
            array (
                'id' => 2151,
                'name' => 'Jabal Lubnan',
                'country_id' => 121,
                'arab_name' => 'Jabal Lubnan',
            ),
            145 =>
            array (
                'id' => 2152,
                'name' => 'Mohafazat Liban-Nord',
                'country_id' => 121,
                'arab_name' => 'Mohafazat Liban-Nord',
            ),
            146 =>
            array (
                'id' => 2153,
                'name' => 'Mohafazat Mont-Liban',
                'country_id' => 121,
                'arab_name' => 'Mohafazat Mont-Liban',
            ),
            147 =>
            array (
                'id' => 2154,
                'name' => 'Sidon',
                'country_id' => 121,
                'arab_name' => 'Sidon',
            ),
            148 =>
            array (
                'id' => 2155,
                'name' => 'al-Biqa',
                'country_id' => 121,
                'arab_name' => 'al-Biqa',
            ),
            149 =>
            array (
                'id' => 2156,
                'name' => 'al-Janub',
                'country_id' => 121,
                'arab_name' => 'al-Janub',
            ),
            150 =>
            array (
                'id' => 2157,
                'name' => 'an-Nabatiyah',
                'country_id' => 121,
                'arab_name' => 'an-Nabatiyah',
            ),
            151 =>
            array (
                'id' => 2158,
                'name' => 'ash-Shamal',
                'country_id' => 121,
                'arab_name' => 'ash-Shamal',
            ),
            152 =>
            array (
                'id' => 2159,
                'name' => 'Berea',
                'country_id' => 122,
                'arab_name' => 'Berea',
            ),
            153 =>
            array (
                'id' => 2160,
                'name' => 'Butha-Buthe',
                'country_id' => 122,
                'arab_name' => 'Butha-Buthe',
            ),
            154 =>
            array (
                'id' => 2161,
                'name' => 'Leribe',
                'country_id' => 122,
                'arab_name' => 'Leribe',
            ),
            155 =>
            array (
                'id' => 2162,
                'name' => 'Mafeteng',
                'country_id' => 122,
                'arab_name' => 'Mafeteng',
            ),
            156 =>
            array (
                'id' => 2163,
                'name' => 'Maseru',
                'country_id' => 122,
                'arab_name' => 'Maseru',
            ),
            157 =>
            array (
                'id' => 2164,
                'name' => 'Mohale\'s Hoek',
                'country_id' => 122,
                'arab_name' => 'Mohale\'s Hoek',
            ),
            158 =>
            array (
                'id' => 2165,
                'name' => 'Mokhotlong',
                'country_id' => 122,
                'arab_name' => 'Mokhotlong',
            ),
            159 =>
            array (
                'id' => 2166,
                'name' => 'Qacha\'s Nek',
                'country_id' => 122,
                'arab_name' => 'Qacha\'s Nek',
            ),
            160 =>
            array (
                'id' => 2167,
                'name' => 'Quthing',
                'country_id' => 122,
                'arab_name' => 'Quthing',
            ),
            161 =>
            array (
                'id' => 2168,
                'name' => 'Thaba-Tseka',
                'country_id' => 122,
                'arab_name' => 'Thaba-Tseka',
            ),
            162 =>
            array (
                'id' => 2169,
                'name' => 'Bomi',
                'country_id' => 123,
                'arab_name' => 'Bomi',
            ),
            163 =>
            array (
                'id' => 2170,
                'name' => 'Bong',
                'country_id' => 123,
                'arab_name' => 'Bong',
            ),
            164 =>
            array (
                'id' => 2171,
                'name' => 'Grand Bassa',
                'country_id' => 123,
                'arab_name' => 'Grand Bassa',
            ),
            165 =>
            array (
                'id' => 2172,
                'name' => 'Grand Cape Mount',
                'country_id' => 123,
                'arab_name' => 'Grand Cape Mount',
            ),
            166 =>
            array (
                'id' => 2173,
                'name' => 'Grand Gedeh',
                'country_id' => 123,
                'arab_name' => 'Grand Gedeh',
            ),
            167 =>
            array (
                'id' => 2174,
                'name' => 'Loffa',
                'country_id' => 123,
                'arab_name' => 'Loffa',
            ),
            168 =>
            array (
                'id' => 2175,
                'name' => 'Margibi',
                'country_id' => 123,
                'arab_name' => 'Margibi',
            ),
            169 =>
            array (
                'id' => 2176,
                'name' => 'Maryland and Grand Kru',
                'country_id' => 123,
                'arab_name' => 'Maryland and Grand Kru',
            ),
            170 =>
            array (
                'id' => 2177,
                'name' => 'Montserrado',
                'country_id' => 123,
                'arab_name' => 'Montserrado',
            ),
            171 =>
            array (
                'id' => 2178,
                'name' => 'Nimba',
                'country_id' => 123,
                'arab_name' => 'Nimba',
            ),
            172 =>
            array (
                'id' => 2179,
                'name' => 'Rivercess',
                'country_id' => 123,
                'arab_name' => 'Rivercess',
            ),
            173 =>
            array (
                'id' => 2180,
                'name' => 'Sinoe',
                'country_id' => 123,
                'arab_name' => 'Sinoe',
            ),
            174 =>
            array (
                'id' => 2181,
                'name' => 'Ajdabiya',
                'country_id' => 124,
                'arab_name' => 'Ajdabiya',
            ),
            175 =>
            array (
                'id' => 2182,
                'name' => 'Fezzan',
                'country_id' => 124,
                'arab_name' => 'Fezzan',
            ),
            176 =>
            array (
                'id' => 2183,
                'name' => 'Banghazi',
                'country_id' => 124,
                'arab_name' => 'Banghazi',
            ),
            177 =>
            array (
                'id' => 2184,
                'name' => 'Darnah',
                'country_id' => 124,
                'arab_name' => 'Darnah',
            ),
            178 =>
            array (
                'id' => 2185,
                'name' => 'Ghadamis',
                'country_id' => 124,
                'arab_name' => 'Ghadamis',
            ),
            179 =>
            array (
                'id' => 2186,
                'name' => 'Gharyan',
                'country_id' => 124,
                'arab_name' => 'Gharyan',
            ),
            180 =>
            array (
                'id' => 2187,
                'name' => 'Misratah',
                'country_id' => 124,
                'arab_name' => 'Misratah',
            ),
            181 =>
            array (
                'id' => 2188,
                'name' => 'Murzuq',
                'country_id' => 124,
                'arab_name' => 'Murzuq',
            ),
            182 =>
            array (
                'id' => 2189,
                'name' => 'Sabha',
                'country_id' => 124,
                'arab_name' => 'Sabha',
            ),
            183 =>
            array (
                'id' => 2190,
                'name' => 'Sawfajjin',
                'country_id' => 124,
                'arab_name' => 'Sawfajjin',
            ),
            184 =>
            array (
                'id' => 2191,
                'name' => 'Surt',
                'country_id' => 124,
                'arab_name' => 'Surt',
            ),
            185 =>
            array (
                'id' => 2192,
                'name' => 'Tarabulus',
                'country_id' => 124,
                'arab_name' => 'Tarabulus',
            ),
            186 =>
            array (
                'id' => 2193,
                'name' => 'Tarhunah',
                'country_id' => 124,
                'arab_name' => 'Tarhunah',
            ),
            187 =>
            array (
                'id' => 2194,
                'name' => 'Tripolitania',
                'country_id' => 124,
                'arab_name' => 'Tripolitania',
            ),
            188 =>
            array (
                'id' => 2195,
                'name' => 'Tubruq',
                'country_id' => 124,
                'arab_name' => 'Tubruq',
            ),
            189 =>
            array (
                'id' => 2196,
                'name' => 'Yafran',
                'country_id' => 124,
                'arab_name' => 'Yafran',
            ),
            190 =>
            array (
                'id' => 2197,
                'name' => 'Zlitan',
                'country_id' => 124,
                'arab_name' => 'Zlitan',
            ),
            191 =>
            array (
                'id' => 2198,
                'name' => 'al-\'Aziziyah',
                'country_id' => 124,
                'arab_name' => 'al-\'Aziziyah',
            ),
            192 =>
            array (
                'id' => 2199,
                'name' => 'al-Fatih',
                'country_id' => 124,
                'arab_name' => 'al-Fatih',
            ),
            193 =>
            array (
                'id' => 2200,
                'name' => 'al-Jabal al Akhdar',
                'country_id' => 124,
                'arab_name' => 'al-Jabal al Akhdar',
            ),
            194 =>
            array (
                'id' => 2201,
                'name' => 'al-Jufrah',
                'country_id' => 124,
                'arab_name' => 'al-Jufrah',
            ),
            195 =>
            array (
                'id' => 2202,
                'name' => 'al-Khums',
                'country_id' => 124,
                'arab_name' => 'al-Khums',
            ),
            196 =>
            array (
                'id' => 2203,
                'name' => 'al-Kufrah',
                'country_id' => 124,
                'arab_name' => 'al-Kufrah',
            ),
            197 =>
            array (
                'id' => 2204,
                'name' => 'an-Nuqat al-Khams',
                'country_id' => 124,
                'arab_name' => 'an-Nuqat al-Khams',
            ),
            198 =>
            array (
                'id' => 2205,
                'name' => 'ash-Shati\'',
                'country_id' => 124,
                'arab_name' => 'ash-Shati\'',
            ),
            199 =>
            array (
                'id' => 2206,
                'name' => 'az-Zawiyah',
                'country_id' => 124,
                'arab_name' => 'az-Zawiyah',
            ),
            200 =>
            array (
                'id' => 2207,
                'name' => 'Balzers',
                'country_id' => 125,
                'arab_name' => 'Balzers',
            ),
            201 =>
            array (
                'id' => 2208,
                'name' => 'Eschen',
                'country_id' => 125,
                'arab_name' => 'Eschen',
            ),
            202 =>
            array (
                'id' => 2209,
                'name' => 'Gamprin',
                'country_id' => 125,
                'arab_name' => 'Gamprin',
            ),
            203 =>
            array (
                'id' => 2210,
                'name' => 'Mauren',
                'country_id' => 125,
                'arab_name' => 'Mauren',
            ),
            204 =>
            array (
                'id' => 2211,
                'name' => 'Planken',
                'country_id' => 125,
                'arab_name' => 'Planken',
            ),
            205 =>
            array (
                'id' => 2212,
                'name' => 'Ruggell',
                'country_id' => 125,
                'arab_name' => 'Ruggell',
            ),
            206 =>
            array (
                'id' => 2213,
                'name' => 'Schaan',
                'country_id' => 125,
                'arab_name' => 'Schaan',
            ),
            207 =>
            array (
                'id' => 2214,
                'name' => 'Schellenberg',
                'country_id' => 125,
                'arab_name' => 'Schellenberg',
            ),
            208 =>
            array (
                'id' => 2215,
                'name' => 'Triesen',
                'country_id' => 125,
                'arab_name' => 'Triesen',
            ),
            209 =>
            array (
                'id' => 2216,
                'name' => 'Triesenberg',
                'country_id' => 125,
                'arab_name' => 'Triesenberg',
            ),
            210 =>
            array (
                'id' => 2217,
                'name' => 'Vaduz',
                'country_id' => 125,
                'arab_name' => 'Vaduz',
            ),
            211 =>
            array (
                'id' => 2218,
                'name' => 'Alytaus',
                'country_id' => 126,
                'arab_name' => 'Alytaus',
            ),
            212 =>
            array (
                'id' => 2219,
                'name' => 'Anyksciai',
                'country_id' => 126,
                'arab_name' => 'Anyksciai',
            ),
            213 =>
            array (
                'id' => 2220,
                'name' => 'Kauno',
                'country_id' => 126,
                'arab_name' => 'Kauno',
            ),
            214 =>
            array (
                'id' => 2221,
                'name' => 'Klaipedos',
                'country_id' => 126,
                'arab_name' => 'Klaipedos',
            ),
            215 =>
            array (
                'id' => 2222,
                'name' => 'Marijampoles',
                'country_id' => 126,
                'arab_name' => 'Marijampoles',
            ),
            216 =>
            array (
                'id' => 2223,
                'name' => 'Panevezhio',
                'country_id' => 126,
                'arab_name' => 'Panevezhio',
            ),
            217 =>
            array (
                'id' => 2224,
                'name' => 'Panevezys',
                'country_id' => 126,
                'arab_name' => 'Panevezys',
            ),
            218 =>
            array (
                'id' => 2225,
                'name' => 'Shiauliu',
                'country_id' => 126,
                'arab_name' => 'Shiauliu',
            ),
            219 =>
            array (
                'id' => 2226,
                'name' => 'Taurages',
                'country_id' => 126,
                'arab_name' => 'Taurages',
            ),
            220 =>
            array (
                'id' => 2227,
                'name' => 'Telshiu',
                'country_id' => 126,
                'arab_name' => 'Telshiu',
            ),
            221 =>
            array (
                'id' => 2228,
                'name' => 'Telsiai',
                'country_id' => 126,
                'arab_name' => 'Telsiai',
            ),
            222 =>
            array (
                'id' => 2229,
                'name' => 'Utenos',
                'country_id' => 126,
                'arab_name' => 'Utenos',
            ),
            223 =>
            array (
                'id' => 2230,
                'name' => 'Vilniaus',
                'country_id' => 126,
                'arab_name' => 'Vilniaus',
            ),
            224 =>
            array (
                'id' => 2231,
                'name' => 'Capellen',
                'country_id' => 127,
                'arab_name' => 'Capellen',
            ),
            225 =>
            array (
                'id' => 2232,
                'name' => 'Clervaux',
                'country_id' => 127,
                'arab_name' => 'Clervaux',
            ),
            226 =>
            array (
                'id' => 2233,
                'name' => 'Diekirch',
                'country_id' => 127,
                'arab_name' => 'Diekirch',
            ),
            227 =>
            array (
                'id' => 2234,
                'name' => 'Echternach',
                'country_id' => 127,
                'arab_name' => 'Echternach',
            ),
            228 =>
            array (
                'id' => 2235,
                'name' => 'Esch-sur-Alzette',
                'country_id' => 127,
                'arab_name' => 'Esch-sur-Alzette',
            ),
            229 =>
            array (
                'id' => 2236,
                'name' => 'Grevenmacher',
                'country_id' => 127,
                'arab_name' => 'Grevenmacher',
            ),
            230 =>
            array (
                'id' => 2237,
                'name' => 'Luxembourg',
                'country_id' => 127,
                'arab_name' => 'Luxembourg',
            ),
            231 =>
            array (
                'id' => 2238,
                'name' => 'Mersch',
                'country_id' => 127,
                'arab_name' => 'Mersch',
            ),
            232 =>
            array (
                'id' => 2239,
                'name' => 'Redange',
                'country_id' => 127,
                'arab_name' => 'Redange',
            ),
            233 =>
            array (
                'id' => 2240,
                'name' => 'Remich',
                'country_id' => 127,
                'arab_name' => 'Remich',
            ),
            234 =>
            array (
                'id' => 2241,
                'name' => 'Vianden',
                'country_id' => 127,
                'arab_name' => 'Vianden',
            ),
            235 =>
            array (
                'id' => 2242,
                'name' => 'Wiltz',
                'country_id' => 127,
                'arab_name' => 'Wiltz',
            ),
            236 =>
            array (
                'id' => 2243,
                'name' => 'Macau',
                'country_id' => 128,
                'arab_name' => 'Macau',
            ),
            237 =>
            array (
                'id' => 2244,
                'name' => 'Berovo',
                'country_id' => 129,
                'arab_name' => 'Berovo',
            ),
            238 =>
            array (
                'id' => 2245,
                'name' => 'Bitola',
                'country_id' => 129,
                'arab_name' => 'Bitola',
            ),
            239 =>
            array (
                'id' => 2246,
                'name' => 'Brod',
                'country_id' => 129,
                'arab_name' => 'Brod',
            ),
            240 =>
            array (
                'id' => 2247,
                'name' => 'Debar',
                'country_id' => 129,
                'arab_name' => 'Debar',
            ),
            241 =>
            array (
                'id' => 2248,
                'name' => 'Delchevo',
                'country_id' => 129,
                'arab_name' => 'Delchevo',
            ),
            242 =>
            array (
                'id' => 2249,
                'name' => 'Demir Hisar',
                'country_id' => 129,
                'arab_name' => 'Demir Hisar',
            ),
            243 =>
            array (
                'id' => 2250,
                'name' => 'Gevgelija',
                'country_id' => 129,
                'arab_name' => 'Gevgelija',
            ),
            244 =>
            array (
                'id' => 2251,
                'name' => 'Gostivar',
                'country_id' => 129,
                'arab_name' => 'Gostivar',
            ),
            245 =>
            array (
                'id' => 2252,
                'name' => 'Kavadarci',
                'country_id' => 129,
                'arab_name' => 'Kavadarci',
            ),
            246 =>
            array (
                'id' => 2253,
                'name' => 'Kichevo',
                'country_id' => 129,
                'arab_name' => 'Kichevo',
            ),
            247 =>
            array (
                'id' => 2254,
                'name' => 'Kochani',
                'country_id' => 129,
                'arab_name' => 'Kochani',
            ),
            248 =>
            array (
                'id' => 2255,
                'name' => 'Kratovo',
                'country_id' => 129,
                'arab_name' => 'Kratovo',
            ),
            249 =>
            array (
                'id' => 2256,
                'name' => 'Kriva Palanka',
                'country_id' => 129,
                'arab_name' => 'Kriva Palanka',
            ),
            250 =>
            array (
                'id' => 2257,
                'name' => 'Krushevo',
                'country_id' => 129,
                'arab_name' => 'Krushevo',
            ),
            251 =>
            array (
                'id' => 2258,
                'name' => 'Kumanovo',
                'country_id' => 129,
                'arab_name' => 'Kumanovo',
            ),
            252 =>
            array (
                'id' => 2259,
                'name' => 'Negotino',
                'country_id' => 129,
                'arab_name' => 'Negotino',
            ),
            253 =>
            array (
                'id' => 2260,
                'name' => 'Ohrid',
                'country_id' => 129,
                'arab_name' => 'Ohrid',
            ),
            254 =>
            array (
                'id' => 2261,
                'name' => 'Prilep',
                'country_id' => 129,
                'arab_name' => 'Prilep',
            ),
            255 =>
            array (
                'id' => 2262,
                'name' => 'Probishtip',
                'country_id' => 129,
                'arab_name' => 'Probishtip',
            ),
            256 =>
            array (
                'id' => 2263,
                'name' => 'Radovish',
                'country_id' => 129,
                'arab_name' => 'Radovish',
            ),
            257 =>
            array (
                'id' => 2264,
                'name' => 'Resen',
                'country_id' => 129,
                'arab_name' => 'Resen',
            ),
            258 =>
            array (
                'id' => 2265,
                'name' => 'Shtip',
                'country_id' => 129,
                'arab_name' => 'Shtip',
            ),
            259 =>
            array (
                'id' => 2266,
                'name' => 'Skopje',
                'country_id' => 129,
                'arab_name' => 'Skopje',
            ),
            260 =>
            array (
                'id' => 2267,
                'name' => 'Struga',
                'country_id' => 129,
                'arab_name' => 'Struga',
            ),
            261 =>
            array (
                'id' => 2268,
                'name' => 'Strumica',
                'country_id' => 129,
                'arab_name' => 'Strumica',
            ),
            262 =>
            array (
                'id' => 2269,
                'name' => 'Sveti Nikole',
                'country_id' => 129,
                'arab_name' => 'Sveti Nikole',
            ),
            263 =>
            array (
                'id' => 2270,
                'name' => 'Tetovo',
                'country_id' => 129,
                'arab_name' => 'Tetovo',
            ),
            264 =>
            array (
                'id' => 2271,
                'name' => 'Valandovo',
                'country_id' => 129,
                'arab_name' => 'Valandovo',
            ),
            265 =>
            array (
                'id' => 2272,
                'name' => 'Veles',
                'country_id' => 129,
                'arab_name' => 'Veles',
            ),
            266 =>
            array (
                'id' => 2273,
                'name' => 'Vinica',
                'country_id' => 129,
                'arab_name' => 'Vinica',
            ),
            267 =>
            array (
                'id' => 2274,
                'name' => 'Antananarivo',
                'country_id' => 130,
                'arab_name' => 'Antananarivo',
            ),
            268 =>
            array (
                'id' => 2275,
                'name' => 'Antsiranana',
                'country_id' => 130,
                'arab_name' => 'Antsiranana',
            ),
            269 =>
            array (
                'id' => 2276,
                'name' => 'Fianarantsoa',
                'country_id' => 130,
                'arab_name' => 'Fianarantsoa',
            ),
            270 =>
            array (
                'id' => 2277,
                'name' => 'Mahajanga',
                'country_id' => 130,
                'arab_name' => 'Mahajanga',
            ),
            271 =>
            array (
                'id' => 2278,
                'name' => 'Toamasina',
                'country_id' => 130,
                'arab_name' => 'Toamasina',
            ),
            272 =>
            array (
                'id' => 2279,
                'name' => 'Toliary',
                'country_id' => 130,
                'arab_name' => 'Toliary',
            ),
            273 =>
            array (
                'id' => 2280,
                'name' => 'Balaka',
                'country_id' => 131,
                'arab_name' => 'Balaka',
            ),
            274 =>
            array (
                'id' => 2281,
                'name' => 'Blantyre City',
                'country_id' => 131,
                'arab_name' => 'Blantyre City',
            ),
            275 =>
            array (
                'id' => 2282,
                'name' => 'Chikwawa',
                'country_id' => 131,
                'arab_name' => 'Chikwawa',
            ),
            276 =>
            array (
                'id' => 2283,
                'name' => 'Chiradzulu',
                'country_id' => 131,
                'arab_name' => 'Chiradzulu',
            ),
            277 =>
            array (
                'id' => 2284,
                'name' => 'Chitipa',
                'country_id' => 131,
                'arab_name' => 'Chitipa',
            ),
            278 =>
            array (
                'id' => 2285,
                'name' => 'Dedza',
                'country_id' => 131,
                'arab_name' => 'Dedza',
            ),
            279 =>
            array (
                'id' => 2286,
                'name' => 'Dowa',
                'country_id' => 131,
                'arab_name' => 'Dowa',
            ),
            280 =>
            array (
                'id' => 2287,
                'name' => 'Karonga',
                'country_id' => 131,
                'arab_name' => 'Karonga',
            ),
            281 =>
            array (
                'id' => 2288,
                'name' => 'Kasungu',
                'country_id' => 131,
                'arab_name' => 'Kasungu',
            ),
            282 =>
            array (
                'id' => 2289,
                'name' => 'Lilongwe City',
                'country_id' => 131,
                'arab_name' => 'Lilongwe City',
            ),
            283 =>
            array (
                'id' => 2290,
                'name' => 'Machinga',
                'country_id' => 131,
                'arab_name' => 'Machinga',
            ),
            284 =>
            array (
                'id' => 2291,
                'name' => 'Mangochi',
                'country_id' => 131,
                'arab_name' => 'Mangochi',
            ),
            285 =>
            array (
                'id' => 2292,
                'name' => 'Mchinji',
                'country_id' => 131,
                'arab_name' => 'Mchinji',
            ),
            286 =>
            array (
                'id' => 2293,
                'name' => 'Mulanje',
                'country_id' => 131,
                'arab_name' => 'Mulanje',
            ),
            287 =>
            array (
                'id' => 2294,
                'name' => 'Mwanza',
                'country_id' => 131,
                'arab_name' => 'Mwanza',
            ),
            288 =>
            array (
                'id' => 2295,
                'name' => 'Mzimba',
                'country_id' => 131,
                'arab_name' => 'Mzimba',
            ),
            289 =>
            array (
                'id' => 2296,
                'name' => 'Mzuzu City',
                'country_id' => 131,
                'arab_name' => 'Mzuzu City',
            ),
            290 =>
            array (
                'id' => 2297,
                'name' => 'Nkhata Bay',
                'country_id' => 131,
                'arab_name' => 'Nkhata Bay',
            ),
            291 =>
            array (
                'id' => 2298,
                'name' => 'Nkhotakota',
                'country_id' => 131,
                'arab_name' => 'Nkhotakota',
            ),
            292 =>
            array (
                'id' => 2299,
                'name' => 'Nsanje',
                'country_id' => 131,
                'arab_name' => 'Nsanje',
            ),
            293 =>
            array (
                'id' => 2300,
                'name' => 'Ntcheu',
                'country_id' => 131,
                'arab_name' => 'Ntcheu',
            ),
            294 =>
            array (
                'id' => 2301,
                'name' => 'Ntchisi',
                'country_id' => 131,
                'arab_name' => 'Ntchisi',
            ),
            295 =>
            array (
                'id' => 2302,
                'name' => 'Phalombe',
                'country_id' => 131,
                'arab_name' => 'Phalombe',
            ),
            296 =>
            array (
                'id' => 2303,
                'name' => 'Rumphi',
                'country_id' => 131,
                'arab_name' => 'Rumphi',
            ),
            297 =>
            array (
                'id' => 2304,
                'name' => 'Salima',
                'country_id' => 131,
                'arab_name' => 'Salima',
            ),
            298 =>
            array (
                'id' => 2305,
                'name' => 'Thyolo',
                'country_id' => 131,
                'arab_name' => 'Thyolo',
            ),
            299 =>
            array (
                'id' => 2306,
                'name' => 'Zomba Municipality',
                'country_id' => 131,
                'arab_name' => 'Zomba Municipality',
            ),
            300 =>
            array (
                'id' => 2307,
                'name' => 'Johor',
                'country_id' => 132,
                'arab_name' => 'Johor',
            ),
            301 =>
            array (
                'id' => 2308,
                'name' => 'Kedah',
                'country_id' => 132,
                'arab_name' => 'Kedah',
            ),
            302 =>
            array (
                'id' => 2309,
                'name' => 'Kelantan',
                'country_id' => 132,
                'arab_name' => 'Kelantan',
            ),
            303 =>
            array (
                'id' => 2310,
                'name' => 'Kuala Lumpur',
                'country_id' => 132,
                'arab_name' => 'Kuala Lumpur',
            ),
            304 =>
            array (
                'id' => 2311,
                'name' => 'Labuan',
                'country_id' => 132,
                'arab_name' => 'Labuan',
            ),
            305 =>
            array (
                'id' => 2312,
                'name' => 'Melaka',
                'country_id' => 132,
                'arab_name' => 'Melaka',
            ),
            306 =>
            array (
                'id' => 2313,
                'name' => 'Negeri Johor',
                'country_id' => 132,
                'arab_name' => 'Negeri Johor',
            ),
            307 =>
            array (
                'id' => 2314,
                'name' => 'Negeri Sembilan',
                'country_id' => 132,
                'arab_name' => 'Negeri Sembilan',
            ),
            308 =>
            array (
                'id' => 2315,
                'name' => 'Pahang',
                'country_id' => 132,
                'arab_name' => 'Pahang',
            ),
            309 =>
            array (
                'id' => 2316,
                'name' => 'Penang',
                'country_id' => 132,
                'arab_name' => 'Penang',
            ),
            310 =>
            array (
                'id' => 2317,
                'name' => 'Perak',
                'country_id' => 132,
                'arab_name' => 'Perak',
            ),
            311 =>
            array (
                'id' => 2318,
                'name' => 'Perlis',
                'country_id' => 132,
                'arab_name' => 'Perlis',
            ),
            312 =>
            array (
                'id' => 2319,
                'name' => 'Pulau Pinang',
                'country_id' => 132,
                'arab_name' => 'Pulau Pinang',
            ),
            313 =>
            array (
                'id' => 2320,
                'name' => 'Sabah',
                'country_id' => 132,
                'arab_name' => 'Sabah',
            ),
            314 =>
            array (
                'id' => 2321,
                'name' => 'Sarawak',
                'country_id' => 132,
                'arab_name' => 'Sarawak',
            ),
            315 =>
            array (
                'id' => 2322,
                'name' => 'Selangor',
                'country_id' => 132,
                'arab_name' => 'Selangor',
            ),
            316 =>
            array (
                'id' => 2323,
                'name' => 'Sembilan',
                'country_id' => 132,
                'arab_name' => 'Sembilan',
            ),
            317 =>
            array (
                'id' => 2324,
                'name' => 'Terengganu',
                'country_id' => 132,
                'arab_name' => 'Terengganu',
            ),
            318 =>
            array (
                'id' => 2325,
                'name' => 'Alif Alif',
                'country_id' => 133,
                'arab_name' => 'Alif Alif',
            ),
            319 =>
            array (
                'id' => 2326,
                'name' => 'Alif Dhaal',
                'country_id' => 133,
                'arab_name' => 'Alif Dhaal',
            ),
            320 =>
            array (
                'id' => 2327,
                'name' => 'Baa',
                'country_id' => 133,
                'arab_name' => 'Baa',
            ),
            321 =>
            array (
                'id' => 2328,
                'name' => 'Dhaal',
                'country_id' => 133,
                'arab_name' => 'Dhaal',
            ),
            322 =>
            array (
                'id' => 2329,
                'name' => 'Faaf',
                'country_id' => 133,
                'arab_name' => 'Faaf',
            ),
            323 =>
            array (
                'id' => 2330,
                'name' => 'Gaaf Alif',
                'country_id' => 133,
                'arab_name' => 'Gaaf Alif',
            ),
            324 =>
            array (
                'id' => 2331,
                'name' => 'Gaaf Dhaal',
                'country_id' => 133,
                'arab_name' => 'Gaaf Dhaal',
            ),
            325 =>
            array (
                'id' => 2332,
                'name' => 'Ghaviyani',
                'country_id' => 133,
                'arab_name' => 'Ghaviyani',
            ),
            326 =>
            array (
                'id' => 2333,
                'name' => 'Haa Alif',
                'country_id' => 133,
                'arab_name' => 'Haa Alif',
            ),
            327 =>
            array (
                'id' => 2334,
                'name' => 'Haa Dhaal',
                'country_id' => 133,
                'arab_name' => 'Haa Dhaal',
            ),
            328 =>
            array (
                'id' => 2335,
                'name' => 'Kaaf',
                'country_id' => 133,
                'arab_name' => 'Kaaf',
            ),
            329 =>
            array (
                'id' => 2336,
                'name' => 'Laam',
                'country_id' => 133,
                'arab_name' => 'Laam',
            ),
            330 =>
            array (
                'id' => 2337,
                'name' => 'Lhaviyani',
                'country_id' => 133,
                'arab_name' => 'Lhaviyani',
            ),
            331 =>
            array (
                'id' => 2338,
                'name' => 'Male',
                'country_id' => 133,
                'arab_name' => 'Male',
            ),
            332 =>
            array (
                'id' => 2339,
                'name' => 'Miim',
                'country_id' => 133,
                'arab_name' => 'Miim',
            ),
            333 =>
            array (
                'id' => 2340,
                'name' => 'Nuun',
                'country_id' => 133,
                'arab_name' => 'Nuun',
            ),
            334 =>
            array (
                'id' => 2341,
                'name' => 'Raa',
                'country_id' => 133,
                'arab_name' => 'Raa',
            ),
            335 =>
            array (
                'id' => 2342,
                'name' => 'Shaviyani',
                'country_id' => 133,
                'arab_name' => 'Shaviyani',
            ),
            336 =>
            array (
                'id' => 2343,
                'name' => 'Siin',
                'country_id' => 133,
                'arab_name' => 'Siin',
            ),
            337 =>
            array (
                'id' => 2344,
                'name' => 'Thaa',
                'country_id' => 133,
                'arab_name' => 'Thaa',
            ),
            338 =>
            array (
                'id' => 2345,
                'name' => 'Vaav',
                'country_id' => 133,
                'arab_name' => 'Vaav',
            ),
            339 =>
            array (
                'id' => 2346,
                'name' => 'Bamako',
                'country_id' => 134,
                'arab_name' => 'Bamako',
            ),
            340 =>
            array (
                'id' => 2347,
                'name' => 'Gao',
                'country_id' => 134,
                'arab_name' => 'Gao',
            ),
            341 =>
            array (
                'id' => 2348,
                'name' => 'Kayes',
                'country_id' => 134,
                'arab_name' => 'Kayes',
            ),
            342 =>
            array (
                'id' => 2349,
                'name' => 'Kidal',
                'country_id' => 134,
                'arab_name' => 'Kidal',
            ),
            343 =>
            array (
                'id' => 2350,
                'name' => 'Koulikoro',
                'country_id' => 134,
                'arab_name' => 'Koulikoro',
            ),
            344 =>
            array (
                'id' => 2351,
                'name' => 'Mopti',
                'country_id' => 134,
                'arab_name' => 'Mopti',
            ),
            345 =>
            array (
                'id' => 2352,
                'name' => 'Segou',
                'country_id' => 134,
                'arab_name' => 'Segou',
            ),
            346 =>
            array (
                'id' => 2353,
                'name' => 'Sikasso',
                'country_id' => 134,
                'arab_name' => 'Sikasso',
            ),
            347 =>
            array (
                'id' => 2354,
                'name' => 'Tombouctou',
                'country_id' => 134,
                'arab_name' => 'Tombouctou',
            ),
            348 =>
            array (
                'id' => 2355,
                'name' => 'Gozo and Comino',
                'country_id' => 135,
                'arab_name' => 'Gozo and Comino',
            ),
            349 =>
            array (
                'id' => 2356,
                'name' => 'Inner Harbour',
                'country_id' => 135,
                'arab_name' => 'Inner Harbour',
            ),
            350 =>
            array (
                'id' => 2357,
                'name' => 'Northern',
                'country_id' => 135,
                'arab_name' => 'Northern',
            ),
            351 =>
            array (
                'id' => 2358,
                'name' => 'Outer Harbour',
                'country_id' => 135,
                'arab_name' => 'Outer Harbour',
            ),
            352 =>
            array (
                'id' => 2359,
                'name' => 'South Eastern',
                'country_id' => 135,
                'arab_name' => 'South Eastern',
            ),
            353 =>
            array (
                'id' => 2360,
                'name' => 'Valletta',
                'country_id' => 135,
                'arab_name' => 'Valletta',
            ),
            354 =>
            array (
                'id' => 2361,
                'name' => 'Western',
                'country_id' => 135,
                'arab_name' => 'Western',
            ),
            355 =>
            array (
                'id' => 2362,
                'name' => 'Castletown',
                'country_id' => 136,
                'arab_name' => 'Castletown',
            ),
            356 =>
            array (
                'id' => 2363,
                'name' => 'Douglas',
                'country_id' => 136,
                'arab_name' => 'Douglas',
            ),
            357 =>
            array (
                'id' => 2364,
                'name' => 'Laxey',
                'country_id' => 136,
                'arab_name' => 'Laxey',
            ),
            358 =>
            array (
                'id' => 2365,
                'name' => 'Onchan',
                'country_id' => 136,
                'arab_name' => 'Onchan',
            ),
            359 =>
            array (
                'id' => 2366,
                'name' => 'Peel',
                'country_id' => 136,
                'arab_name' => 'Peel',
            ),
            360 =>
            array (
                'id' => 2367,
                'name' => 'Port Erin',
                'country_id' => 136,
                'arab_name' => 'Port Erin',
            ),
            361 =>
            array (
                'id' => 2368,
                'name' => 'Port Saint Mary',
                'country_id' => 136,
                'arab_name' => 'Port Saint Mary',
            ),
            362 =>
            array (
                'id' => 2369,
                'name' => 'Ramsey',
                'country_id' => 136,
                'arab_name' => 'Ramsey',
            ),
            363 =>
            array (
                'id' => 2370,
                'name' => 'Ailinlaplap',
                'country_id' => 137,
                'arab_name' => 'Ailinlaplap',
            ),
            364 =>
            array (
                'id' => 2371,
                'name' => 'Ailuk',
                'country_id' => 137,
                'arab_name' => 'Ailuk',
            ),
            365 =>
            array (
                'id' => 2372,
                'name' => 'Arno',
                'country_id' => 137,
                'arab_name' => 'Arno',
            ),
            366 =>
            array (
                'id' => 2373,
                'name' => 'Aur',
                'country_id' => 137,
                'arab_name' => 'Aur',
            ),
            367 =>
            array (
                'id' => 2374,
                'name' => 'Bikini',
                'country_id' => 137,
                'arab_name' => 'Bikini',
            ),
            368 =>
            array (
                'id' => 2375,
                'name' => 'Ebon',
                'country_id' => 137,
                'arab_name' => 'Ebon',
            ),
            369 =>
            array (
                'id' => 2376,
                'name' => 'Enewetak',
                'country_id' => 137,
                'arab_name' => 'Enewetak',
            ),
            370 =>
            array (
                'id' => 2377,
                'name' => 'Jabat',
                'country_id' => 137,
                'arab_name' => 'Jabat',
            ),
            371 =>
            array (
                'id' => 2378,
                'name' => 'Jaluit',
                'country_id' => 137,
                'arab_name' => 'Jaluit',
            ),
            372 =>
            array (
                'id' => 2379,
                'name' => 'Kili',
                'country_id' => 137,
                'arab_name' => 'Kili',
            ),
            373 =>
            array (
                'id' => 2380,
                'name' => 'Kwajalein',
                'country_id' => 137,
                'arab_name' => 'Kwajalein',
            ),
            374 =>
            array (
                'id' => 2381,
                'name' => 'Lae',
                'country_id' => 137,
                'arab_name' => 'Lae',
            ),
            375 =>
            array (
                'id' => 2382,
                'name' => 'Lib',
                'country_id' => 137,
                'arab_name' => 'Lib',
            ),
            376 =>
            array (
                'id' => 2383,
                'name' => 'Likiep',
                'country_id' => 137,
                'arab_name' => 'Likiep',
            ),
            377 =>
            array (
                'id' => 2384,
                'name' => 'Majuro',
                'country_id' => 137,
                'arab_name' => 'Majuro',
            ),
            378 =>
            array (
                'id' => 2385,
                'name' => 'Maloelap',
                'country_id' => 137,
                'arab_name' => 'Maloelap',
            ),
            379 =>
            array (
                'id' => 2386,
                'name' => 'Mejit',
                'country_id' => 137,
                'arab_name' => 'Mejit',
            ),
            380 =>
            array (
                'id' => 2387,
                'name' => 'Mili',
                'country_id' => 137,
                'arab_name' => 'Mili',
            ),
            381 =>
            array (
                'id' => 2388,
                'name' => 'Namorik',
                'country_id' => 137,
                'arab_name' => 'Namorik',
            ),
            382 =>
            array (
                'id' => 2389,
                'name' => 'Namu',
                'country_id' => 137,
                'arab_name' => 'Namu',
            ),
            383 =>
            array (
                'id' => 2390,
                'name' => 'Rongelap',
                'country_id' => 137,
                'arab_name' => 'Rongelap',
            ),
            384 =>
            array (
                'id' => 2391,
                'name' => 'Ujae',
                'country_id' => 137,
                'arab_name' => 'Ujae',
            ),
            385 =>
            array (
                'id' => 2392,
                'name' => 'Utrik',
                'country_id' => 137,
                'arab_name' => 'Utrik',
            ),
            386 =>
            array (
                'id' => 2393,
                'name' => 'Wotho',
                'country_id' => 137,
                'arab_name' => 'Wotho',
            ),
            387 =>
            array (
                'id' => 2394,
                'name' => 'Wotje',
                'country_id' => 137,
                'arab_name' => 'Wotje',
            ),
            388 =>
            array (
                'id' => 2395,
                'name' => 'Fort-de-France',
                'country_id' => 138,
                'arab_name' => 'Fort-de-France',
            ),
            389 =>
            array (
                'id' => 2396,
                'name' => 'La Trinite',
                'country_id' => 138,
                'arab_name' => 'La Trinite',
            ),
            390 =>
            array (
                'id' => 2397,
                'name' => 'Le Marin',
                'country_id' => 138,
                'arab_name' => 'Le Marin',
            ),
            391 =>
            array (
                'id' => 2398,
                'name' => 'Saint-Pierre',
                'country_id' => 138,
                'arab_name' => 'Saint-Pierre',
            ),
            392 =>
            array (
                'id' => 2399,
                'name' => 'Adrar',
                'country_id' => 139,
                'arab_name' => 'Adrar',
            ),
            393 =>
            array (
                'id' => 2400,
                'name' => 'Assaba',
                'country_id' => 139,
                'arab_name' => 'Assaba',
            ),
            394 =>
            array (
                'id' => 2401,
                'name' => 'Brakna',
                'country_id' => 139,
                'arab_name' => 'Brakna',
            ),
            395 =>
            array (
                'id' => 2402,
                'name' => 'Dhakhlat Nawadibu',
                'country_id' => 139,
                'arab_name' => 'Dhakhlat Nawadibu',
            ),
            396 =>
            array (
                'id' => 2403,
                'name' => 'Hudh-al-Gharbi',
                'country_id' => 139,
                'arab_name' => 'Hudh-al-Gharbi',
            ),
            397 =>
            array (
                'id' => 2404,
                'name' => 'Hudh-ash-Sharqi',
                'country_id' => 139,
                'arab_name' => 'Hudh-ash-Sharqi',
            ),
            398 =>
            array (
                'id' => 2405,
                'name' => 'Inshiri',
                'country_id' => 139,
                'arab_name' => 'Inshiri',
            ),
            399 =>
            array (
                'id' => 2406,
                'name' => 'Nawakshut',
                'country_id' => 139,
                'arab_name' => 'Nawakshut',
            ),
            400 =>
            array (
                'id' => 2407,
                'name' => 'Qidimagha',
                'country_id' => 139,
                'arab_name' => 'Qidimagha',
            ),
            401 =>
            array (
                'id' => 2408,
                'name' => 'Qurqul',
                'country_id' => 139,
                'arab_name' => 'Qurqul',
            ),
            402 =>
            array (
                'id' => 2409,
                'name' => 'Taqant',
                'country_id' => 139,
                'arab_name' => 'Taqant',
            ),
            403 =>
            array (
                'id' => 2410,
                'name' => 'Tiris Zammur',
                'country_id' => 139,
                'arab_name' => 'Tiris Zammur',
            ),
            404 =>
            array (
                'id' => 2411,
                'name' => 'Trarza',
                'country_id' => 139,
                'arab_name' => 'Trarza',
            ),
            405 =>
            array (
                'id' => 2412,
                'name' => 'Black River',
                'country_id' => 140,
                'arab_name' => 'Black River',
            ),
            406 =>
            array (
                'id' => 2413,
                'name' => 'Eau Coulee',
                'country_id' => 140,
                'arab_name' => 'Eau Coulee',
            ),
            407 =>
            array (
                'id' => 2414,
                'name' => 'Flacq',
                'country_id' => 140,
                'arab_name' => 'Flacq',
            ),
            408 =>
            array (
                'id' => 2415,
                'name' => 'Floreal',
                'country_id' => 140,
                'arab_name' => 'Floreal',
            ),
            409 =>
            array (
                'id' => 2416,
                'name' => 'Grand Port',
                'country_id' => 140,
                'arab_name' => 'Grand Port',
            ),
            410 =>
            array (
                'id' => 2417,
                'name' => 'Moka',
                'country_id' => 140,
                'arab_name' => 'Moka',
            ),
            411 =>
            array (
                'id' => 2418,
                'name' => 'Pamplempousses',
                'country_id' => 140,
                'arab_name' => 'Pamplempousses',
            ),
            412 =>
            array (
                'id' => 2419,
                'name' => 'Plaines Wilhelm',
                'country_id' => 140,
                'arab_name' => 'Plaines Wilhelm',
            ),
            413 =>
            array (
                'id' => 2420,
                'name' => 'Port Louis',
                'country_id' => 140,
                'arab_name' => 'Port Louis',
            ),
            414 =>
            array (
                'id' => 2421,
                'name' => 'Riviere du Rempart',
                'country_id' => 140,
                'arab_name' => 'Riviere du Rempart',
            ),
            415 =>
            array (
                'id' => 2422,
                'name' => 'Rodrigues',
                'country_id' => 140,
                'arab_name' => 'Rodrigues',
            ),
            416 =>
            array (
                'id' => 2423,
                'name' => 'Rose Hill',
                'country_id' => 140,
                'arab_name' => 'Rose Hill',
            ),
            417 =>
            array (
                'id' => 2424,
                'name' => 'Savanne',
                'country_id' => 140,
                'arab_name' => 'Savanne',
            ),
            418 =>
            array (
                'id' => 2425,
                'name' => 'Mayotte',
                'country_id' => 141,
                'arab_name' => 'Mayotte',
            ),
            419 =>
            array (
                'id' => 2426,
                'name' => 'Pamanzi',
                'country_id' => 141,
                'arab_name' => 'Pamanzi',
            ),
            420 =>
            array (
                'id' => 2427,
                'name' => 'Aguascalientes',
                'country_id' => 142,
                'arab_name' => 'Aguascalientes',
            ),
            421 =>
            array (
                'id' => 2428,
                'name' => 'Baja California',
                'country_id' => 142,
                'arab_name' => 'Baja California',
            ),
            422 =>
            array (
                'id' => 2429,
                'name' => 'Baja California Sur',
                'country_id' => 142,
                'arab_name' => 'Baja California Sur',
            ),
            423 =>
            array (
                'id' => 2430,
                'name' => 'Campeche',
                'country_id' => 142,
                'arab_name' => 'Campeche',
            ),
            424 =>
            array (
                'id' => 2431,
                'name' => 'Chiapas',
                'country_id' => 142,
                'arab_name' => 'Chiapas',
            ),
            425 =>
            array (
                'id' => 2432,
                'name' => 'Chihuahua',
                'country_id' => 142,
                'arab_name' => 'Chihuahua',
            ),
            426 =>
            array (
                'id' => 2433,
                'name' => 'Coahuila',
                'country_id' => 142,
                'arab_name' => 'Coahuila',
            ),
            427 =>
            array (
                'id' => 2434,
                'name' => 'Colima',
                'country_id' => 142,
                'arab_name' => 'Colima',
            ),
            428 =>
            array (
                'id' => 2435,
                'name' => 'Distrito Federal',
                'country_id' => 142,
                'arab_name' => 'Distrito Federal',
            ),
            429 =>
            array (
                'id' => 2436,
                'name' => 'Durango',
                'country_id' => 142,
                'arab_name' => 'Durango',
            ),
            430 =>
            array (
                'id' => 2437,
                'name' => 'Estado de Mexico',
                'country_id' => 142,
                'arab_name' => 'Estado de Mexico',
            ),
            431 =>
            array (
                'id' => 2438,
                'name' => 'Guanajuato',
                'country_id' => 142,
                'arab_name' => 'Guanajuato',
            ),
            432 =>
            array (
                'id' => 2439,
                'name' => 'Guerrero',
                'country_id' => 142,
                'arab_name' => 'Guerrero',
            ),
            433 =>
            array (
                'id' => 2440,
                'name' => 'Hidalgo',
                'country_id' => 142,
                'arab_name' => 'Hidalgo',
            ),
            434 =>
            array (
                'id' => 2441,
                'name' => 'Jalisco',
                'country_id' => 142,
                'arab_name' => 'Jalisco',
            ),
            435 =>
            array (
                'id' => 2442,
                'name' => 'Mexico',
                'country_id' => 142,
                'arab_name' => 'Mexico',
            ),
            436 =>
            array (
                'id' => 2443,
                'name' => 'Michoacan',
                'country_id' => 142,
                'arab_name' => 'Michoacan',
            ),
            437 =>
            array (
                'id' => 2444,
                'name' => 'Morelos',
                'country_id' => 142,
                'arab_name' => 'Morelos',
            ),
            438 =>
            array (
                'id' => 2445,
                'name' => 'Nayarit',
                'country_id' => 142,
                'arab_name' => 'Nayarit',
            ),
            439 =>
            array (
                'id' => 2446,
                'name' => 'Nuevo Leon',
                'country_id' => 142,
                'arab_name' => 'Nuevo Leon',
            ),
            440 =>
            array (
                'id' => 2447,
                'name' => 'Oaxaca',
                'country_id' => 142,
                'arab_name' => 'Oaxaca',
            ),
            441 =>
            array (
                'id' => 2448,
                'name' => 'Puebla',
                'country_id' => 142,
                'arab_name' => 'Puebla',
            ),
            442 =>
            array (
                'id' => 2449,
                'name' => 'Queretaro',
                'country_id' => 142,
                'arab_name' => 'Queretaro',
            ),
            443 =>
            array (
                'id' => 2450,
                'name' => 'Quintana Roo',
                'country_id' => 142,
                'arab_name' => 'Quintana Roo',
            ),
            444 =>
            array (
                'id' => 2451,
                'name' => 'San Luis Potosi',
                'country_id' => 142,
                'arab_name' => 'San Luis Potosi',
            ),
            445 =>
            array (
                'id' => 2452,
                'name' => 'Sinaloa',
                'country_id' => 142,
                'arab_name' => 'Sinaloa',
            ),
            446 =>
            array (
                'id' => 2453,
                'name' => 'Sonora',
                'country_id' => 142,
                'arab_name' => 'Sonora',
            ),
            447 =>
            array (
                'id' => 2454,
                'name' => 'Tabasco',
                'country_id' => 142,
                'arab_name' => 'Tabasco',
            ),
            448 =>
            array (
                'id' => 2455,
                'name' => 'Tamaulipas',
                'country_id' => 142,
                'arab_name' => 'Tamaulipas',
            ),
            449 =>
            array (
                'id' => 2456,
                'name' => 'Tlaxcala',
                'country_id' => 142,
                'arab_name' => 'Tlaxcala',
            ),
            450 =>
            array (
                'id' => 2457,
                'name' => 'Veracruz',
                'country_id' => 142,
                'arab_name' => 'Veracruz',
            ),
            451 =>
            array (
                'id' => 2458,
                'name' => 'Yucatan',
                'country_id' => 142,
                'arab_name' => 'Yucatan',
            ),
            452 =>
            array (
                'id' => 2459,
                'name' => 'Zacatecas',
                'country_id' => 142,
                'arab_name' => 'Zacatecas',
            ),
            453 =>
            array (
                'id' => 2460,
                'name' => 'Chuuk',
                'country_id' => 143,
                'arab_name' => 'Chuuk',
            ),
            454 =>
            array (
                'id' => 2461,
                'name' => 'Kusaie',
                'country_id' => 143,
                'arab_name' => 'Kusaie',
            ),
            455 =>
            array (
                'id' => 2462,
                'name' => 'Pohnpei',
                'country_id' => 143,
                'arab_name' => 'Pohnpei',
            ),
            456 =>
            array (
                'id' => 2463,
                'name' => 'Yap',
                'country_id' => 143,
                'arab_name' => 'Yap',
            ),
            457 =>
            array (
                'id' => 2464,
                'name' => 'Balti',
                'country_id' => 144,
                'arab_name' => 'Balti',
            ),
            458 =>
            array (
                'id' => 2465,
                'name' => 'Cahul',
                'country_id' => 144,
                'arab_name' => 'Cahul',
            ),
            459 =>
            array (
                'id' => 2466,
                'name' => 'Chisinau',
                'country_id' => 144,
                'arab_name' => 'Chisinau',
            ),
            460 =>
            array (
                'id' => 2467,
                'name' => 'Chisinau Oras',
                'country_id' => 144,
                'arab_name' => 'Chisinau Oras',
            ),
            461 =>
            array (
                'id' => 2468,
                'name' => 'Edinet',
                'country_id' => 144,
                'arab_name' => 'Edinet',
            ),
            462 =>
            array (
                'id' => 2469,
                'name' => 'Gagauzia',
                'country_id' => 144,
                'arab_name' => 'Gagauzia',
            ),
            463 =>
            array (
                'id' => 2470,
                'name' => 'Lapusna',
                'country_id' => 144,
                'arab_name' => 'Lapusna',
            ),
            464 =>
            array (
                'id' => 2471,
                'name' => 'Orhei',
                'country_id' => 144,
                'arab_name' => 'Orhei',
            ),
            465 =>
            array (
                'id' => 2472,
                'name' => 'Soroca',
                'country_id' => 144,
                'arab_name' => 'Soroca',
            ),
            466 =>
            array (
                'id' => 2473,
                'name' => 'Taraclia',
                'country_id' => 144,
                'arab_name' => 'Taraclia',
            ),
            467 =>
            array (
                'id' => 2474,
                'name' => 'Tighina',
                'country_id' => 144,
                'arab_name' => 'Tighina',
            ),
            468 =>
            array (
                'id' => 2475,
                'name' => 'Transnistria',
                'country_id' => 144,
                'arab_name' => 'Transnistria',
            ),
            469 =>
            array (
                'id' => 2476,
                'name' => 'Ungheni',
                'country_id' => 144,
                'arab_name' => 'Ungheni',
            ),
            470 =>
            array (
                'id' => 2477,
                'name' => 'Fontvieille',
                'country_id' => 145,
                'arab_name' => 'Fontvieille',
            ),
            471 =>
            array (
                'id' => 2478,
                'name' => 'La Condamine',
                'country_id' => 145,
                'arab_name' => 'La Condamine',
            ),
            472 =>
            array (
                'id' => 2479,
                'name' => 'Monaco-Ville',
                'country_id' => 145,
                'arab_name' => 'Monaco-Ville',
            ),
            473 =>
            array (
                'id' => 2480,
                'name' => 'Monte Carlo',
                'country_id' => 145,
                'arab_name' => 'Monte Carlo',
            ),
            474 =>
            array (
                'id' => 2481,
                'name' => 'Arhangaj',
                'country_id' => 146,
                'arab_name' => 'Arhangaj',
            ),
            475 =>
            array (
                'id' => 2482,
                'name' => 'Bajan-Olgij',
                'country_id' => 146,
                'arab_name' => 'Bajan-Olgij',
            ),
            476 =>
            array (
                'id' => 2483,
                'name' => 'Bajanhongor',
                'country_id' => 146,
                'arab_name' => 'Bajanhongor',
            ),
            477 =>
            array (
                'id' => 2484,
                'name' => 'Bulgan',
                'country_id' => 146,
                'arab_name' => 'Bulgan',
            ),
            478 =>
            array (
                'id' => 2485,
                'name' => 'Darhan-Uul',
                'country_id' => 146,
                'arab_name' => 'Darhan-Uul',
            ),
            479 =>
            array (
                'id' => 2486,
                'name' => 'Dornod',
                'country_id' => 146,
                'arab_name' => 'Dornod',
            ),
            480 =>
            array (
                'id' => 2487,
                'name' => 'Dornogovi',
                'country_id' => 146,
                'arab_name' => 'Dornogovi',
            ),
            481 =>
            array (
                'id' => 2488,
                'name' => 'Dundgovi',
                'country_id' => 146,
                'arab_name' => 'Dundgovi',
            ),
            482 =>
            array (
                'id' => 2489,
                'name' => 'Govi-Altaj',
                'country_id' => 146,
                'arab_name' => 'Govi-Altaj',
            ),
            483 =>
            array (
                'id' => 2490,
                'name' => 'Govisumber',
                'country_id' => 146,
                'arab_name' => 'Govisumber',
            ),
            484 =>
            array (
                'id' => 2491,
                'name' => 'Hentij',
                'country_id' => 146,
                'arab_name' => 'Hentij',
            ),
            485 =>
            array (
                'id' => 2492,
                'name' => 'Hovd',
                'country_id' => 146,
                'arab_name' => 'Hovd',
            ),
            486 =>
            array (
                'id' => 2493,
                'name' => 'Hovsgol',
                'country_id' => 146,
                'arab_name' => 'Hovsgol',
            ),
            487 =>
            array (
                'id' => 2494,
                'name' => 'Omnogovi',
                'country_id' => 146,
                'arab_name' => 'Omnogovi',
            ),
            488 =>
            array (
                'id' => 2495,
                'name' => 'Orhon',
                'country_id' => 146,
                'arab_name' => 'Orhon',
            ),
            489 =>
            array (
                'id' => 2496,
                'name' => 'Ovorhangaj',
                'country_id' => 146,
                'arab_name' => 'Ovorhangaj',
            ),
            490 =>
            array (
                'id' => 2497,
                'name' => 'Selenge',
                'country_id' => 146,
                'arab_name' => 'Selenge',
            ),
            491 =>
            array (
                'id' => 2498,
                'name' => 'Suhbaatar',
                'country_id' => 146,
                'arab_name' => 'Suhbaatar',
            ),
            492 =>
            array (
                'id' => 2499,
                'name' => 'Tov',
                'country_id' => 146,
                'arab_name' => 'Tov',
            ),
            493 =>
            array (
                'id' => 2500,
                'name' => 'Ulaanbaatar',
                'country_id' => 146,
                'arab_name' => 'Ulaanbaatar',
            ),
            494 =>
            array (
                'id' => 2501,
                'name' => 'Uvs',
                'country_id' => 146,
                'arab_name' => 'Uvs',
            ),
            495 =>
            array (
                'id' => 2502,
                'name' => 'Zavhan',
                'country_id' => 146,
                'arab_name' => 'Zavhan',
            ),
            496 =>
            array (
                'id' => 2503,
                'name' => 'Montserrat',
                'country_id' => 147,
                'arab_name' => 'Montserrat',
            ),
            497 =>
            array (
                'id' => 2504,
                'name' => 'Agadir',
                'country_id' => 148,
                'arab_name' => 'Agadir',
            ),
            498 =>
            array (
                'id' => 2505,
                'name' => 'Casablanca',
                'country_id' => 148,
                'arab_name' => 'Casablanca',
            ),
            499 =>
            array (
                'id' => 2506,
                'name' => 'Chaouia-Ouardigha',
                'country_id' => 148,
                'arab_name' => 'Chaouia-Ouardigha',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 2507,
                'name' => 'Doukkala-Abda',
                'country_id' => 148,
                'arab_name' => 'Doukkala-Abda',
            ),
            1 =>
            array (
                'id' => 2508,
                'name' => 'Fes-Boulemane',
                'country_id' => 148,
                'arab_name' => 'Fes-Boulemane',
            ),
            2 =>
            array (
                'id' => 2509,
                'name' => 'Gharb-Chrarda-Beni Hssen',
                'country_id' => 148,
                'arab_name' => 'Gharb-Chrarda-Beni Hssen',
            ),
            3 =>
            array (
                'id' => 2510,
                'name' => 'Guelmim',
                'country_id' => 148,
                'arab_name' => 'Guelmim',
            ),
            4 =>
            array (
                'id' => 2511,
                'name' => 'Kenitra',
                'country_id' => 148,
                'arab_name' => 'Kenitra',
            ),
            5 =>
            array (
                'id' => 2512,
                'name' => 'Marrakech-Tensift-Al Haouz',
                'country_id' => 148,
                'arab_name' => 'Marrakech-Tensift-Al Haouz',
            ),
            6 =>
            array (
                'id' => 2513,
                'name' => 'Meknes-Tafilalet',
                'country_id' => 148,
                'arab_name' => 'Meknes-Tafilalet',
            ),
            7 =>
            array (
                'id' => 2514,
                'name' => 'Oriental',
                'country_id' => 148,
                'arab_name' => 'Oriental',
            ),
            8 =>
            array (
                'id' => 2515,
                'name' => 'Oujda',
                'country_id' => 148,
                'arab_name' => 'Oujda',
            ),
            9 =>
            array (
                'id' => 2516,
                'name' => 'Province de Tanger',
                'country_id' => 148,
                'arab_name' => 'Province de Tanger',
            ),
            10 =>
            array (
                'id' => 2517,
                'name' => 'Rabat-Sale-Zammour-Zaer',
                'country_id' => 148,
                'arab_name' => 'Rabat-Sale-Zammour-Zaer',
            ),
            11 =>
            array (
                'id' => 2518,
                'name' => 'Sala Al Jadida',
                'country_id' => 148,
                'arab_name' => 'Sala Al Jadida',
            ),
            12 =>
            array (
                'id' => 2519,
                'name' => 'Settat',
                'country_id' => 148,
                'arab_name' => 'Settat',
            ),
            13 =>
            array (
                'id' => 2520,
                'name' => 'Souss Massa-Draa',
                'country_id' => 148,
                'arab_name' => 'Souss Massa-Draa',
            ),
            14 =>
            array (
                'id' => 2521,
                'name' => 'Tadla-Azilal',
                'country_id' => 148,
                'arab_name' => 'Tadla-Azilal',
            ),
            15 =>
            array (
                'id' => 2522,
                'name' => 'Tangier-Tetouan',
                'country_id' => 148,
                'arab_name' => 'Tangier-Tetouan',
            ),
            16 =>
            array (
                'id' => 2523,
                'name' => 'Taza-Al Hoceima-Taounate',
                'country_id' => 148,
                'arab_name' => 'Taza-Al Hoceima-Taounate',
            ),
            17 =>
            array (
                'id' => 2524,
                'name' => 'Wilaya de Casablanca',
                'country_id' => 148,
                'arab_name' => 'Wilaya de Casablanca',
            ),
            18 =>
            array (
                'id' => 2525,
                'name' => 'Wilaya de Rabat-Sale',
                'country_id' => 148,
                'arab_name' => 'Wilaya de Rabat-Sale',
            ),
            19 =>
            array (
                'id' => 2526,
                'name' => 'Cabo Delgado',
                'country_id' => 149,
                'arab_name' => 'Cabo Delgado',
            ),
            20 =>
            array (
                'id' => 2527,
                'name' => 'Gaza',
                'country_id' => 149,
                'arab_name' => 'Gaza',
            ),
            21 =>
            array (
                'id' => 2528,
                'name' => 'Inhambane',
                'country_id' => 149,
                'arab_name' => 'Inhambane',
            ),
            22 =>
            array (
                'id' => 2529,
                'name' => 'Manica',
                'country_id' => 149,
                'arab_name' => 'Manica',
            ),
            23 =>
            array (
                'id' => 2530,
                'name' => 'Maputo',
                'country_id' => 149,
                'arab_name' => 'Maputo',
            ),
            24 =>
            array (
                'id' => 2531,
                'name' => 'Maputo Provincia',
                'country_id' => 149,
                'arab_name' => 'Maputo Provincia',
            ),
            25 =>
            array (
                'id' => 2532,
                'name' => 'Nampula',
                'country_id' => 149,
                'arab_name' => 'Nampula',
            ),
            26 =>
            array (
                'id' => 2533,
                'name' => 'Niassa',
                'country_id' => 149,
                'arab_name' => 'Niassa',
            ),
            27 =>
            array (
                'id' => 2534,
                'name' => 'Sofala',
                'country_id' => 149,
                'arab_name' => 'Sofala',
            ),
            28 =>
            array (
                'id' => 2535,
                'name' => 'Tete',
                'country_id' => 149,
                'arab_name' => 'Tete',
            ),
            29 =>
            array (
                'id' => 2536,
                'name' => 'Zambezia',
                'country_id' => 149,
                'arab_name' => 'Zambezia',
            ),
            30 =>
            array (
                'id' => 2537,
                'name' => 'Ayeyarwady',
                'country_id' => 150,
                'arab_name' => 'Ayeyarwady',
            ),
            31 =>
            array (
                'id' => 2538,
                'name' => 'Bago',
                'country_id' => 150,
                'arab_name' => 'Bago',
            ),
            32 =>
            array (
                'id' => 2539,
                'name' => 'Chin',
                'country_id' => 150,
                'arab_name' => 'Chin',
            ),
            33 =>
            array (
                'id' => 2540,
                'name' => 'Kachin',
                'country_id' => 150,
                'arab_name' => 'Kachin',
            ),
            34 =>
            array (
                'id' => 2541,
                'name' => 'Kayah',
                'country_id' => 150,
                'arab_name' => 'Kayah',
            ),
            35 =>
            array (
                'id' => 2542,
                'name' => 'Kayin',
                'country_id' => 150,
                'arab_name' => 'Kayin',
            ),
            36 =>
            array (
                'id' => 2543,
                'name' => 'Magway',
                'country_id' => 150,
                'arab_name' => 'Magway',
            ),
            37 =>
            array (
                'id' => 2544,
                'name' => 'Mandalay',
                'country_id' => 150,
                'arab_name' => 'Mandalay',
            ),
            38 =>
            array (
                'id' => 2545,
                'name' => 'Mon',
                'country_id' => 150,
                'arab_name' => 'Mon',
            ),
            39 =>
            array (
                'id' => 2546,
                'name' => 'Nay Pyi Taw',
                'country_id' => 150,
                'arab_name' => 'Nay Pyi Taw',
            ),
            40 =>
            array (
                'id' => 2547,
                'name' => 'Rakhine',
                'country_id' => 150,
                'arab_name' => 'Rakhine',
            ),
            41 =>
            array (
                'id' => 2548,
                'name' => 'Sagaing',
                'country_id' => 150,
                'arab_name' => 'Sagaing',
            ),
            42 =>
            array (
                'id' => 2549,
                'name' => 'Shan',
                'country_id' => 150,
                'arab_name' => 'Shan',
            ),
            43 =>
            array (
                'id' => 2550,
                'name' => 'Tanintharyi',
                'country_id' => 150,
                'arab_name' => 'Tanintharyi',
            ),
            44 =>
            array (
                'id' => 2551,
                'name' => 'Yangon',
                'country_id' => 150,
                'arab_name' => 'Yangon',
            ),
            45 =>
            array (
                'id' => 2552,
                'name' => 'Caprivi',
                'country_id' => 151,
                'arab_name' => 'Caprivi',
            ),
            46 =>
            array (
                'id' => 2553,
                'name' => 'Erongo',
                'country_id' => 151,
                'arab_name' => 'Erongo',
            ),
            47 =>
            array (
                'id' => 2554,
                'name' => 'Hardap',
                'country_id' => 151,
                'arab_name' => 'Hardap',
            ),
            48 =>
            array (
                'id' => 2555,
                'name' => 'Karas',
                'country_id' => 151,
                'arab_name' => 'Karas',
            ),
            49 =>
            array (
                'id' => 2556,
                'name' => 'Kavango',
                'country_id' => 151,
                'arab_name' => 'Kavango',
            ),
            50 =>
            array (
                'id' => 2557,
                'name' => 'Khomas',
                'country_id' => 151,
                'arab_name' => 'Khomas',
            ),
            51 =>
            array (
                'id' => 2558,
                'name' => 'Kunene',
                'country_id' => 151,
                'arab_name' => 'Kunene',
            ),
            52 =>
            array (
                'id' => 2559,
                'name' => 'Ohangwena',
                'country_id' => 151,
                'arab_name' => 'Ohangwena',
            ),
            53 =>
            array (
                'id' => 2560,
                'name' => 'Omaheke',
                'country_id' => 151,
                'arab_name' => 'Omaheke',
            ),
            54 =>
            array (
                'id' => 2561,
                'name' => 'Omusati',
                'country_id' => 151,
                'arab_name' => 'Omusati',
            ),
            55 =>
            array (
                'id' => 2562,
                'name' => 'Oshana',
                'country_id' => 151,
                'arab_name' => 'Oshana',
            ),
            56 =>
            array (
                'id' => 2563,
                'name' => 'Oshikoto',
                'country_id' => 151,
                'arab_name' => 'Oshikoto',
            ),
            57 =>
            array (
                'id' => 2564,
                'name' => 'Otjozondjupa',
                'country_id' => 151,
                'arab_name' => 'Otjozondjupa',
            ),
            58 =>
            array (
                'id' => 2565,
                'name' => 'Yaren',
                'country_id' => 152,
                'arab_name' => 'Yaren',
            ),
            59 =>
            array (
                'id' => 2566,
                'name' => 'Bagmati',
                'country_id' => 153,
                'arab_name' => 'Bagmati',
            ),
            60 =>
            array (
                'id' => 2567,
                'name' => 'Bheri',
                'country_id' => 153,
                'arab_name' => 'Bheri',
            ),
            61 =>
            array (
                'id' => 2568,
                'name' => 'Dhawalagiri',
                'country_id' => 153,
                'arab_name' => 'Dhawalagiri',
            ),
            62 =>
            array (
                'id' => 2569,
                'name' => 'Gandaki',
                'country_id' => 153,
                'arab_name' => 'Gandaki',
            ),
            63 =>
            array (
                'id' => 2570,
                'name' => 'Janakpur',
                'country_id' => 153,
                'arab_name' => 'Janakpur',
            ),
            64 =>
            array (
                'id' => 2571,
                'name' => 'Karnali',
                'country_id' => 153,
                'arab_name' => 'Karnali',
            ),
            65 =>
            array (
                'id' => 2572,
                'name' => 'Koshi',
                'country_id' => 153,
                'arab_name' => 'Koshi',
            ),
            66 =>
            array (
                'id' => 2573,
                'name' => 'Lumbini',
                'country_id' => 153,
                'arab_name' => 'Lumbini',
            ),
            67 =>
            array (
                'id' => 2574,
                'name' => 'Mahakali',
                'country_id' => 153,
                'arab_name' => 'Mahakali',
            ),
            68 =>
            array (
                'id' => 2575,
                'name' => 'Mechi',
                'country_id' => 153,
                'arab_name' => 'Mechi',
            ),
            69 =>
            array (
                'id' => 2576,
                'name' => 'Narayani',
                'country_id' => 153,
                'arab_name' => 'Narayani',
            ),
            70 =>
            array (
                'id' => 2577,
                'name' => 'Rapti',
                'country_id' => 153,
                'arab_name' => 'Rapti',
            ),
            71 =>
            array (
                'id' => 2578,
                'name' => 'Sagarmatha',
                'country_id' => 153,
                'arab_name' => 'Sagarmatha',
            ),
            72 =>
            array (
                'id' => 2579,
                'name' => 'Seti',
                'country_id' => 153,
                'arab_name' => 'Seti',
            ),
            73 =>
            array (
                'id' => 2580,
                'name' => 'Bonaire',
                'country_id' => 154,
                'arab_name' => 'Bonaire',
            ),
            74 =>
            array (
                'id' => 2581,
                'name' => 'Curacao',
                'country_id' => 154,
                'arab_name' => 'Curacao',
            ),
            75 =>
            array (
                'id' => 2582,
                'name' => 'Saba',
                'country_id' => 154,
                'arab_name' => 'Saba',
            ),
            76 =>
            array (
                'id' => 2583,
                'name' => 'Sint Eustatius',
                'country_id' => 154,
                'arab_name' => 'Sint Eustatius',
            ),
            77 =>
            array (
                'id' => 2584,
                'name' => 'Sint Maarten',
                'country_id' => 154,
                'arab_name' => 'Sint Maarten',
            ),
            78 =>
            array (
                'id' => 2585,
                'name' => 'Amsterdam',
                'country_id' => 155,
                'arab_name' => 'Amsterdam',
            ),
            79 =>
            array (
                'id' => 2586,
                'name' => 'Benelux',
                'country_id' => 155,
                'arab_name' => 'Benelux',
            ),
            80 =>
            array (
                'id' => 2587,
                'name' => 'Drenthe',
                'country_id' => 155,
                'arab_name' => 'Drenthe',
            ),
            81 =>
            array (
                'id' => 2588,
                'name' => 'Flevoland',
                'country_id' => 155,
                'arab_name' => 'Flevoland',
            ),
            82 =>
            array (
                'id' => 2589,
                'name' => 'Friesland',
                'country_id' => 155,
                'arab_name' => 'Friesland',
            ),
            83 =>
            array (
                'id' => 2590,
                'name' => 'Gelderland',
                'country_id' => 155,
                'arab_name' => 'Gelderland',
            ),
            84 =>
            array (
                'id' => 2591,
                'name' => 'Groningen',
                'country_id' => 155,
                'arab_name' => 'Groningen',
            ),
            85 =>
            array (
                'id' => 2592,
                'name' => 'Limburg',
                'country_id' => 155,
                'arab_name' => 'Limburg',
            ),
            86 =>
            array (
                'id' => 2593,
                'name' => 'Noord-Brabant',
                'country_id' => 155,
                'arab_name' => 'Noord-Brabant',
            ),
            87 =>
            array (
                'id' => 2594,
                'name' => 'Noord-Holland',
                'country_id' => 155,
                'arab_name' => 'Noord-Holland',
            ),
            88 =>
            array (
                'id' => 2595,
                'name' => 'Overijssel',
                'country_id' => 155,
                'arab_name' => 'Overijssel',
            ),
            89 =>
            array (
                'id' => 2596,
                'name' => 'South Holland',
                'country_id' => 155,
                'arab_name' => 'South Holland',
            ),
            90 =>
            array (
                'id' => 2597,
                'name' => 'Utrecht',
                'country_id' => 155,
                'arab_name' => 'Utrecht',
            ),
            91 =>
            array (
                'id' => 2598,
                'name' => 'Zeeland',
                'country_id' => 155,
                'arab_name' => 'Zeeland',
            ),
            92 =>
            array (
                'id' => 2599,
                'name' => 'Zuid-Holland',
                'country_id' => 155,
                'arab_name' => 'Zuid-Holland',
            ),
            93 =>
            array (
                'id' => 2600,
                'name' => 'Iles',
                'country_id' => 156,
                'arab_name' => 'Iles',
            ),
            94 =>
            array (
                'id' => 2601,
                'name' => 'Nord',
                'country_id' => 156,
                'arab_name' => 'Nord',
            ),
            95 =>
            array (
                'id' => 2602,
                'name' => 'Sud',
                'country_id' => 156,
                'arab_name' => 'Sud',
            ),
            96 =>
            array (
                'id' => 2603,
                'name' => 'Area Outside Region',
                'country_id' => 157,
                'arab_name' => 'Area Outside Region',
            ),
            97 =>
            array (
                'id' => 2604,
                'name' => 'Auckland',
                'country_id' => 157,
                'arab_name' => 'Auckland',
            ),
            98 =>
            array (
                'id' => 2605,
                'name' => 'Bay of Plenty',
                'country_id' => 157,
                'arab_name' => 'Bay of Plenty',
            ),
            99 =>
            array (
                'id' => 2606,
                'name' => 'Canterbury',
                'country_id' => 157,
                'arab_name' => 'Canterbury',
            ),
            100 =>
            array (
                'id' => 2607,
                'name' => 'Christchurch',
                'country_id' => 157,
                'arab_name' => 'Christchurch',
            ),
            101 =>
            array (
                'id' => 2608,
                'name' => 'Gisborne',
                'country_id' => 157,
                'arab_name' => 'Gisborne',
            ),
            102 =>
            array (
                'id' => 2609,
                'name' => 'Hawke\'s Bay',
                'country_id' => 157,
                'arab_name' => 'Hawke\'s Bay',
            ),
            103 =>
            array (
                'id' => 2610,
                'name' => 'Manawatu-Wanganui',
                'country_id' => 157,
                'arab_name' => 'Manawatu-Wanganui',
            ),
            104 =>
            array (
                'id' => 2611,
                'name' => 'Marlborough',
                'country_id' => 157,
                'arab_name' => 'Marlborough',
            ),
            105 =>
            array (
                'id' => 2612,
                'name' => 'Nelson',
                'country_id' => 157,
                'arab_name' => 'Nelson',
            ),
            106 =>
            array (
                'id' => 2613,
                'name' => 'Northland',
                'country_id' => 157,
                'arab_name' => 'Northland',
            ),
            107 =>
            array (
                'id' => 2614,
                'name' => 'Otago',
                'country_id' => 157,
                'arab_name' => 'Otago',
            ),
            108 =>
            array (
                'id' => 2615,
                'name' => 'Rodney',
                'country_id' => 157,
                'arab_name' => 'Rodney',
            ),
            109 =>
            array (
                'id' => 2616,
                'name' => 'Southland',
                'country_id' => 157,
                'arab_name' => 'Southland',
            ),
            110 =>
            array (
                'id' => 2617,
                'name' => 'Taranaki',
                'country_id' => 157,
                'arab_name' => 'Taranaki',
            ),
            111 =>
            array (
                'id' => 2618,
                'name' => 'Tasman',
                'country_id' => 157,
                'arab_name' => 'Tasman',
            ),
            112 =>
            array (
                'id' => 2619,
                'name' => 'Waikato',
                'country_id' => 157,
                'arab_name' => 'Waikato',
            ),
            113 =>
            array (
                'id' => 2620,
                'name' => 'Wellington',
                'country_id' => 157,
                'arab_name' => 'Wellington',
            ),
            114 =>
            array (
                'id' => 2621,
                'name' => 'West Coast',
                'country_id' => 157,
                'arab_name' => 'West Coast',
            ),
            115 =>
            array (
                'id' => 2622,
                'name' => 'Atlantico Norte',
                'country_id' => 158,
                'arab_name' => 'Atlantico Norte',
            ),
            116 =>
            array (
                'id' => 2623,
                'name' => 'Atlantico Sur',
                'country_id' => 158,
                'arab_name' => 'Atlantico Sur',
            ),
            117 =>
            array (
                'id' => 2624,
                'name' => 'Boaco',
                'country_id' => 158,
                'arab_name' => 'Boaco',
            ),
            118 =>
            array (
                'id' => 2625,
                'name' => 'Carazo',
                'country_id' => 158,
                'arab_name' => 'Carazo',
            ),
            119 =>
            array (
                'id' => 2626,
                'name' => 'Chinandega',
                'country_id' => 158,
                'arab_name' => 'Chinandega',
            ),
            120 =>
            array (
                'id' => 2627,
                'name' => 'Chontales',
                'country_id' => 158,
                'arab_name' => 'Chontales',
            ),
            121 =>
            array (
                'id' => 2628,
                'name' => 'Esteli',
                'country_id' => 158,
                'arab_name' => 'Esteli',
            ),
            122 =>
            array (
                'id' => 2629,
                'name' => 'Granada',
                'country_id' => 158,
                'arab_name' => 'Granada',
            ),
            123 =>
            array (
                'id' => 2630,
                'name' => 'Jinotega',
                'country_id' => 158,
                'arab_name' => 'Jinotega',
            ),
            124 =>
            array (
                'id' => 2631,
                'name' => 'Leon',
                'country_id' => 158,
                'arab_name' => 'Leon',
            ),
            125 =>
            array (
                'id' => 2632,
                'name' => 'Madriz',
                'country_id' => 158,
                'arab_name' => 'Madriz',
            ),
            126 =>
            array (
                'id' => 2633,
                'name' => 'Managua',
                'country_id' => 158,
                'arab_name' => 'Managua',
            ),
            127 =>
            array (
                'id' => 2634,
                'name' => 'Masaya',
                'country_id' => 158,
                'arab_name' => 'Masaya',
            ),
            128 =>
            array (
                'id' => 2635,
                'name' => 'Matagalpa',
                'country_id' => 158,
                'arab_name' => 'Matagalpa',
            ),
            129 =>
            array (
                'id' => 2636,
                'name' => 'Nueva Segovia',
                'country_id' => 158,
                'arab_name' => 'Nueva Segovia',
            ),
            130 =>
            array (
                'id' => 2637,
                'name' => 'Rio San Juan',
                'country_id' => 158,
                'arab_name' => 'Rio San Juan',
            ),
            131 =>
            array (
                'id' => 2638,
                'name' => 'Rivas',
                'country_id' => 158,
                'arab_name' => 'Rivas',
            ),
            132 =>
            array (
                'id' => 2639,
                'name' => 'Agadez',
                'country_id' => 159,
                'arab_name' => 'Agadez',
            ),
            133 =>
            array (
                'id' => 2640,
                'name' => 'Diffa',
                'country_id' => 159,
                'arab_name' => 'Diffa',
            ),
            134 =>
            array (
                'id' => 2641,
                'name' => 'Dosso',
                'country_id' => 159,
                'arab_name' => 'Dosso',
            ),
            135 =>
            array (
                'id' => 2642,
                'name' => 'Maradi',
                'country_id' => 159,
                'arab_name' => 'Maradi',
            ),
            136 =>
            array (
                'id' => 2643,
                'name' => 'Niamey',
                'country_id' => 159,
                'arab_name' => 'Niamey',
            ),
            137 =>
            array (
                'id' => 2644,
                'name' => 'Tahoua',
                'country_id' => 159,
                'arab_name' => 'Tahoua',
            ),
            138 =>
            array (
                'id' => 2645,
                'name' => 'Tillabery',
                'country_id' => 159,
                'arab_name' => 'Tillabery',
            ),
            139 =>
            array (
                'id' => 2646,
                'name' => 'Zinder',
                'country_id' => 159,
                'arab_name' => 'Zinder',
            ),
            140 =>
            array (
                'id' => 2647,
                'name' => 'Abia',
                'country_id' => 160,
                'arab_name' => 'Abia',
            ),
            141 =>
            array (
                'id' => 2648,
                'name' => 'Abuja Federal Capital Territor',
                'country_id' => 160,
                'arab_name' => 'Abuja Federal Capital Territor',
            ),
            142 =>
            array (
                'id' => 2649,
                'name' => 'Adamawa',
                'country_id' => 160,
                'arab_name' => 'Adamawa',
            ),
            143 =>
            array (
                'id' => 2650,
                'name' => 'Akwa Ibom',
                'country_id' => 160,
                'arab_name' => 'Akwa Ibom',
            ),
            144 =>
            array (
                'id' => 2651,
                'name' => 'Anambra',
                'country_id' => 160,
                'arab_name' => 'Anambra',
            ),
            145 =>
            array (
                'id' => 2652,
                'name' => 'Bauchi',
                'country_id' => 160,
                'arab_name' => 'Bauchi',
            ),
            146 =>
            array (
                'id' => 2653,
                'name' => 'Bayelsa',
                'country_id' => 160,
                'arab_name' => 'Bayelsa',
            ),
            147 =>
            array (
                'id' => 2654,
                'name' => 'Benue',
                'country_id' => 160,
                'arab_name' => 'Benue',
            ),
            148 =>
            array (
                'id' => 2655,
                'name' => 'Borno',
                'country_id' => 160,
                'arab_name' => 'Borno',
            ),
            149 =>
            array (
                'id' => 2656,
                'name' => 'Cross River',
                'country_id' => 160,
                'arab_name' => 'Cross River',
            ),
            150 =>
            array (
                'id' => 2657,
                'name' => 'Delta',
                'country_id' => 160,
                'arab_name' => 'Delta',
            ),
            151 =>
            array (
                'id' => 2658,
                'name' => 'Ebonyi',
                'country_id' => 160,
                'arab_name' => 'Ebonyi',
            ),
            152 =>
            array (
                'id' => 2659,
                'name' => 'Edo',
                'country_id' => 160,
                'arab_name' => 'Edo',
            ),
            153 =>
            array (
                'id' => 2660,
                'name' => 'Ekiti',
                'country_id' => 160,
                'arab_name' => 'Ekiti',
            ),
            154 =>
            array (
                'id' => 2661,
                'name' => 'Enugu',
                'country_id' => 160,
                'arab_name' => 'Enugu',
            ),
            155 =>
            array (
                'id' => 2662,
                'name' => 'Gombe',
                'country_id' => 160,
                'arab_name' => 'Gombe',
            ),
            156 =>
            array (
                'id' => 2663,
                'name' => 'Imo',
                'country_id' => 160,
                'arab_name' => 'Imo',
            ),
            157 =>
            array (
                'id' => 2664,
                'name' => 'Jigawa',
                'country_id' => 160,
                'arab_name' => 'Jigawa',
            ),
            158 =>
            array (
                'id' => 2665,
                'name' => 'Kaduna',
                'country_id' => 160,
                'arab_name' => 'Kaduna',
            ),
            159 =>
            array (
                'id' => 2666,
                'name' => 'Kano',
                'country_id' => 160,
                'arab_name' => 'Kano',
            ),
            160 =>
            array (
                'id' => 2667,
                'name' => 'Katsina',
                'country_id' => 160,
                'arab_name' => 'Katsina',
            ),
            161 =>
            array (
                'id' => 2668,
                'name' => 'Kebbi',
                'country_id' => 160,
                'arab_name' => 'Kebbi',
            ),
            162 =>
            array (
                'id' => 2669,
                'name' => 'Kogi',
                'country_id' => 160,
                'arab_name' => 'Kogi',
            ),
            163 =>
            array (
                'id' => 2670,
                'name' => 'Kwara',
                'country_id' => 160,
                'arab_name' => 'Kwara',
            ),
            164 =>
            array (
                'id' => 2671,
                'name' => 'Lagos',
                'country_id' => 160,
                'arab_name' => 'Lagos',
            ),
            165 =>
            array (
                'id' => 2672,
                'name' => 'Nassarawa',
                'country_id' => 160,
                'arab_name' => 'Nassarawa',
            ),
            166 =>
            array (
                'id' => 2673,
                'name' => 'Niger',
                'country_id' => 160,
                'arab_name' => 'Niger',
            ),
            167 =>
            array (
                'id' => 2674,
                'name' => 'Ogun',
                'country_id' => 160,
                'arab_name' => 'Ogun',
            ),
            168 =>
            array (
                'id' => 2675,
                'name' => 'Ondo',
                'country_id' => 160,
                'arab_name' => 'Ondo',
            ),
            169 =>
            array (
                'id' => 2676,
                'name' => 'Osun',
                'country_id' => 160,
                'arab_name' => 'Osun',
            ),
            170 =>
            array (
                'id' => 2677,
                'name' => 'Oyo',
                'country_id' => 160,
                'arab_name' => 'Oyo',
            ),
            171 =>
            array (
                'id' => 2678,
                'name' => 'Plateau',
                'country_id' => 160,
                'arab_name' => 'Plateau',
            ),
            172 =>
            array (
                'id' => 2679,
                'name' => 'Rivers',
                'country_id' => 160,
                'arab_name' => 'Rivers',
            ),
            173 =>
            array (
                'id' => 2680,
                'name' => 'Sokoto',
                'country_id' => 160,
                'arab_name' => 'Sokoto',
            ),
            174 =>
            array (
                'id' => 2681,
                'name' => 'Taraba',
                'country_id' => 160,
                'arab_name' => 'Taraba',
            ),
            175 =>
            array (
                'id' => 2682,
                'name' => 'Yobe',
                'country_id' => 160,
                'arab_name' => 'Yobe',
            ),
            176 =>
            array (
                'id' => 2683,
                'name' => 'Zamfara',
                'country_id' => 160,
                'arab_name' => 'Zamfara',
            ),
            177 =>
            array (
                'id' => 2684,
                'name' => 'Niue',
                'country_id' => 161,
                'arab_name' => 'Niue',
            ),
            178 =>
            array (
                'id' => 2685,
                'name' => 'Norfolk Island',
                'country_id' => 162,
                'arab_name' => 'Norfolk Island',
            ),
            179 =>
            array (
                'id' => 2686,
                'name' => 'Northern Islands',
                'country_id' => 163,
                'arab_name' => 'Northern Islands',
            ),
            180 =>
            array (
                'id' => 2687,
                'name' => 'Rota',
                'country_id' => 163,
                'arab_name' => 'Rota',
            ),
            181 =>
            array (
                'id' => 2688,
                'name' => 'Saipan',
                'country_id' => 163,
                'arab_name' => 'Saipan',
            ),
            182 =>
            array (
                'id' => 2689,
                'name' => 'Tinian',
                'country_id' => 163,
                'arab_name' => 'Tinian',
            ),
            183 =>
            array (
                'id' => 2690,
                'name' => 'Akershus',
                'country_id' => 164,
                'arab_name' => 'Akershus',
            ),
            184 =>
            array (
                'id' => 2691,
                'name' => 'Aust Agder',
                'country_id' => 164,
                'arab_name' => 'Aust Agder',
            ),
            185 =>
            array (
                'id' => 2692,
                'name' => 'Bergen',
                'country_id' => 164,
                'arab_name' => 'Bergen',
            ),
            186 =>
            array (
                'id' => 2693,
                'name' => 'Buskerud',
                'country_id' => 164,
                'arab_name' => 'Buskerud',
            ),
            187 =>
            array (
                'id' => 2694,
                'name' => 'Finnmark',
                'country_id' => 164,
                'arab_name' => 'Finnmark',
            ),
            188 =>
            array (
                'id' => 2695,
                'name' => 'Hedmark',
                'country_id' => 164,
                'arab_name' => 'Hedmark',
            ),
            189 =>
            array (
                'id' => 2696,
                'name' => 'Hordaland',
                'country_id' => 164,
                'arab_name' => 'Hordaland',
            ),
            190 =>
            array (
                'id' => 2697,
                'name' => 'Moere og Romsdal',
                'country_id' => 164,
                'arab_name' => 'Moere og Romsdal',
            ),
            191 =>
            array (
                'id' => 2698,
                'name' => 'Nord Trondelag',
                'country_id' => 164,
                'arab_name' => 'Nord Trondelag',
            ),
            192 =>
            array (
                'id' => 2699,
                'name' => 'Nordland',
                'country_id' => 164,
                'arab_name' => 'Nordland',
            ),
            193 =>
            array (
                'id' => 2700,
                'name' => 'Oestfold',
                'country_id' => 164,
                'arab_name' => 'Oestfold',
            ),
            194 =>
            array (
                'id' => 2701,
                'name' => 'Oppland',
                'country_id' => 164,
                'arab_name' => 'Oppland',
            ),
            195 =>
            array (
                'id' => 2702,
                'name' => 'Oslo',
                'country_id' => 164,
                'arab_name' => 'Oslo',
            ),
            196 =>
            array (
                'id' => 2703,
                'name' => 'Rogaland',
                'country_id' => 164,
                'arab_name' => 'Rogaland',
            ),
            197 =>
            array (
                'id' => 2704,
                'name' => 'Soer Troendelag',
                'country_id' => 164,
                'arab_name' => 'Soer Troendelag',
            ),
            198 =>
            array (
                'id' => 2705,
                'name' => 'Sogn og Fjordane',
                'country_id' => 164,
                'arab_name' => 'Sogn og Fjordane',
            ),
            199 =>
            array (
                'id' => 2706,
                'name' => 'Stavern',
                'country_id' => 164,
                'arab_name' => 'Stavern',
            ),
            200 =>
            array (
                'id' => 2707,
                'name' => 'Sykkylven',
                'country_id' => 164,
                'arab_name' => 'Sykkylven',
            ),
            201 =>
            array (
                'id' => 2708,
                'name' => 'Telemark',
                'country_id' => 164,
                'arab_name' => 'Telemark',
            ),
            202 =>
            array (
                'id' => 2709,
                'name' => 'Troms',
                'country_id' => 164,
                'arab_name' => 'Troms',
            ),
            203 =>
            array (
                'id' => 2710,
                'name' => 'Vest Agder',
                'country_id' => 164,
                'arab_name' => 'Vest Agder',
            ),
            204 =>
            array (
                'id' => 2711,
                'name' => 'Vestfold',
                'country_id' => 164,
                'arab_name' => 'Vestfold',
            ),
            205 =>
            array (
                'id' => 2712,
                'name' => 'ÃƒÂ˜stfold',
                'country_id' => 164,
                'arab_name' => 'ÃƒÂ˜stfold',
            ),
            206 =>
            array (
                'id' => 2713,
                'name' => 'Al Buraimi',
                'country_id' => 165,
                'arab_name' => 'Al Buraimi',
            ),
            207 =>
            array (
                'id' => 2714,
                'name' => 'Dhufar',
                'country_id' => 165,
                'arab_name' => 'Dhufar',
            ),
            208 =>
            array (
                'id' => 2715,
                'name' => 'Masqat',
                'country_id' => 165,
                'arab_name' => 'Masqat',
            ),
            209 =>
            array (
                'id' => 2716,
                'name' => 'Musandam',
                'country_id' => 165,
                'arab_name' => 'Musandam',
            ),
            210 =>
            array (
                'id' => 2717,
                'name' => 'Rusayl',
                'country_id' => 165,
                'arab_name' => 'Rusayl',
            ),
            211 =>
            array (
                'id' => 2718,
                'name' => 'Wadi Kabir',
                'country_id' => 165,
                'arab_name' => 'Wadi Kabir',
            ),
            212 =>
            array (
                'id' => 2719,
                'name' => 'ad-Dakhiliyah',
                'country_id' => 165,
                'arab_name' => 'ad-Dakhiliyah',
            ),
            213 =>
            array (
                'id' => 2720,
                'name' => 'adh-Dhahirah',
                'country_id' => 165,
                'arab_name' => 'adh-Dhahirah',
            ),
            214 =>
            array (
                'id' => 2721,
                'name' => 'al-Batinah',
                'country_id' => 165,
                'arab_name' => 'al-Batinah',
            ),
            215 =>
            array (
                'id' => 2722,
                'name' => 'ash-Sharqiyah',
                'country_id' => 165,
                'arab_name' => 'ash-Sharqiyah',
            ),
            216 =>
            array (
                'id' => 2723,
                'name' => 'Baluchistan',
                'country_id' => 166,
                'arab_name' => 'Baluchistan',
            ),
            217 =>
            array (
                'id' => 2724,
                'name' => 'Federal Capital Area',
                'country_id' => 166,
                'arab_name' => 'Federal Capital Area',
            ),
            218 =>
            array (
                'id' => 2725,
                'name' => 'Federally administered Tribal ',
                'country_id' => 166,
                'arab_name' => 'Federally administered Tribal ',
            ),
            219 =>
            array (
                'id' => 2726,
                'name' => 'North-West Frontier',
                'country_id' => 166,
                'arab_name' => 'North-West Frontier',
            ),
            220 =>
            array (
                'id' => 2727,
                'name' => 'Northern Areas',
                'country_id' => 166,
                'arab_name' => 'Northern Areas',
            ),
            221 =>
            array (
                'id' => 2728,
                'name' => 'Punjab',
                'country_id' => 166,
                'arab_name' => 'Punjab',
            ),
            222 =>
            array (
                'id' => 2729,
                'name' => 'Sind',
                'country_id' => 166,
                'arab_name' => 'Sind',
            ),
            223 =>
            array (
                'id' => 2730,
                'name' => 'Aimeliik',
                'country_id' => 167,
                'arab_name' => 'Aimeliik',
            ),
            224 =>
            array (
                'id' => 2731,
                'name' => 'Airai',
                'country_id' => 167,
                'arab_name' => 'Airai',
            ),
            225 =>
            array (
                'id' => 2732,
                'name' => 'Angaur',
                'country_id' => 167,
                'arab_name' => 'Angaur',
            ),
            226 =>
            array (
                'id' => 2733,
                'name' => 'Hatobohei',
                'country_id' => 167,
                'arab_name' => 'Hatobohei',
            ),
            227 =>
            array (
                'id' => 2734,
                'name' => 'Kayangel',
                'country_id' => 167,
                'arab_name' => 'Kayangel',
            ),
            228 =>
            array (
                'id' => 2735,
                'name' => 'Koror',
                'country_id' => 167,
                'arab_name' => 'Koror',
            ),
            229 =>
            array (
                'id' => 2736,
                'name' => 'Melekeok',
                'country_id' => 167,
                'arab_name' => 'Melekeok',
            ),
            230 =>
            array (
                'id' => 2737,
                'name' => 'Ngaraard',
                'country_id' => 167,
                'arab_name' => 'Ngaraard',
            ),
            231 =>
            array (
                'id' => 2738,
                'name' => 'Ngardmau',
                'country_id' => 167,
                'arab_name' => 'Ngardmau',
            ),
            232 =>
            array (
                'id' => 2739,
                'name' => 'Ngaremlengui',
                'country_id' => 167,
                'arab_name' => 'Ngaremlengui',
            ),
            233 =>
            array (
                'id' => 2740,
                'name' => 'Ngatpang',
                'country_id' => 167,
                'arab_name' => 'Ngatpang',
            ),
            234 =>
            array (
                'id' => 2741,
                'name' => 'Ngchesar',
                'country_id' => 167,
                'arab_name' => 'Ngchesar',
            ),
            235 =>
            array (
                'id' => 2742,
                'name' => 'Ngerchelong',
                'country_id' => 167,
                'arab_name' => 'Ngerchelong',
            ),
            236 =>
            array (
                'id' => 2743,
                'name' => 'Ngiwal',
                'country_id' => 167,
                'arab_name' => 'Ngiwal',
            ),
            237 =>
            array (
                'id' => 2744,
                'name' => 'Peleliu',
                'country_id' => 167,
                'arab_name' => 'Peleliu',
            ),
            238 =>
            array (
                'id' => 2745,
                'name' => 'Sonsorol',
                'country_id' => 167,
                'arab_name' => 'Sonsorol',
            ),
            239 =>
            array (
                'id' => 2746,
                'name' => 'Ariha',
                'country_id' => 168,
                'arab_name' => 'Ariha',
            ),
            240 =>
            array (
                'id' => 2747,
                'name' => 'Bayt Lahm',
                'country_id' => 168,
                'arab_name' => 'Bayt Lahm',
            ),
            241 =>
            array (
                'id' => 2748,
                'name' => 'Bethlehem',
                'country_id' => 168,
                'arab_name' => 'Bethlehem',
            ),
            242 =>
            array (
                'id' => 2749,
                'name' => 'Dayr-al-Balah',
                'country_id' => 168,
                'arab_name' => 'Dayr-al-Balah',
            ),
            243 =>
            array (
                'id' => 2750,
                'name' => 'Ghazzah',
                'country_id' => 168,
                'arab_name' => 'Ghazzah',
            ),
            244 =>
            array (
                'id' => 2751,
                'name' => 'Ghazzah ash-Shamaliyah',
                'country_id' => 168,
                'arab_name' => 'Ghazzah ash-Shamaliyah',
            ),
            245 =>
            array (
                'id' => 2752,
                'name' => 'Janin',
                'country_id' => 168,
                'arab_name' => 'Janin',
            ),
            246 =>
            array (
                'id' => 2753,
                'name' => 'Khan Yunis',
                'country_id' => 168,
                'arab_name' => 'Khan Yunis',
            ),
            247 =>
            array (
                'id' => 2754,
                'name' => 'Nabulus',
                'country_id' => 168,
                'arab_name' => 'Nabulus',
            ),
            248 =>
            array (
                'id' => 2755,
                'name' => 'Qalqilyah',
                'country_id' => 168,
                'arab_name' => 'Qalqilyah',
            ),
            249 =>
            array (
                'id' => 2756,
                'name' => 'Rafah',
                'country_id' => 168,
                'arab_name' => 'Rafah',
            ),
            250 =>
            array (
                'id' => 2757,
                'name' => 'Ram Allah wal-Birah',
                'country_id' => 168,
                'arab_name' => 'Ram Allah wal-Birah',
            ),
            251 =>
            array (
                'id' => 2758,
                'name' => 'Salfit',
                'country_id' => 168,
                'arab_name' => 'Salfit',
            ),
            252 =>
            array (
                'id' => 2759,
                'name' => 'Tubas',
                'country_id' => 168,
                'arab_name' => 'Tubas',
            ),
            253 =>
            array (
                'id' => 2760,
                'name' => 'Tulkarm',
                'country_id' => 168,
                'arab_name' => 'Tulkarm',
            ),
            254 =>
            array (
                'id' => 2761,
                'name' => 'al-Khalil',
                'country_id' => 168,
                'arab_name' => 'al-Khalil',
            ),
            255 =>
            array (
                'id' => 2762,
                'name' => 'al-Quds',
                'country_id' => 168,
                'arab_name' => 'al-Quds',
            ),
            256 =>
            array (
                'id' => 2763,
                'name' => 'Bocas del Toro',
                'country_id' => 169,
                'arab_name' => 'Bocas del Toro',
            ),
            257 =>
            array (
                'id' => 2764,
                'name' => 'Chiriqui',
                'country_id' => 169,
                'arab_name' => 'Chiriqui',
            ),
            258 =>
            array (
                'id' => 2765,
                'name' => 'Cocle',
                'country_id' => 169,
                'arab_name' => 'Cocle',
            ),
            259 =>
            array (
                'id' => 2766,
                'name' => 'Colon',
                'country_id' => 169,
                'arab_name' => 'Colon',
            ),
            260 =>
            array (
                'id' => 2767,
                'name' => 'Darien',
                'country_id' => 169,
                'arab_name' => 'Darien',
            ),
            261 =>
            array (
                'id' => 2768,
                'name' => 'Embera',
                'country_id' => 169,
                'arab_name' => 'Embera',
            ),
            262 =>
            array (
                'id' => 2769,
                'name' => 'Herrera',
                'country_id' => 169,
                'arab_name' => 'Herrera',
            ),
            263 =>
            array (
                'id' => 2770,
                'name' => 'Kuna Yala',
                'country_id' => 169,
                'arab_name' => 'Kuna Yala',
            ),
            264 =>
            array (
                'id' => 2771,
                'name' => 'Los Santos',
                'country_id' => 169,
                'arab_name' => 'Los Santos',
            ),
            265 =>
            array (
                'id' => 2772,
                'name' => 'Ngobe Bugle',
                'country_id' => 169,
                'arab_name' => 'Ngobe Bugle',
            ),
            266 =>
            array (
                'id' => 2773,
                'name' => 'Panama',
                'country_id' => 169,
                'arab_name' => 'Panama',
            ),
            267 =>
            array (
                'id' => 2774,
                'name' => 'Veraguas',
                'country_id' => 169,
                'arab_name' => 'Veraguas',
            ),
            268 =>
            array (
                'id' => 2775,
                'name' => 'East New Britain',
                'country_id' => 170,
                'arab_name' => 'East New Britain',
            ),
            269 =>
            array (
                'id' => 2776,
                'name' => 'East Sepik',
                'country_id' => 170,
                'arab_name' => 'East Sepik',
            ),
            270 =>
            array (
                'id' => 2777,
                'name' => 'Eastern Highlands',
                'country_id' => 170,
                'arab_name' => 'Eastern Highlands',
            ),
            271 =>
            array (
                'id' => 2778,
                'name' => 'Enga',
                'country_id' => 170,
                'arab_name' => 'Enga',
            ),
            272 =>
            array (
                'id' => 2779,
                'name' => 'Fly River',
                'country_id' => 170,
                'arab_name' => 'Fly River',
            ),
            273 =>
            array (
                'id' => 2780,
                'name' => 'Gulf',
                'country_id' => 170,
                'arab_name' => 'Gulf',
            ),
            274 =>
            array (
                'id' => 2781,
                'name' => 'Madang',
                'country_id' => 170,
                'arab_name' => 'Madang',
            ),
            275 =>
            array (
                'id' => 2782,
                'name' => 'Manus',
                'country_id' => 170,
                'arab_name' => 'Manus',
            ),
            276 =>
            array (
                'id' => 2783,
                'name' => 'Milne Bay',
                'country_id' => 170,
                'arab_name' => 'Milne Bay',
            ),
            277 =>
            array (
                'id' => 2784,
                'name' => 'Morobe',
                'country_id' => 170,
                'arab_name' => 'Morobe',
            ),
            278 =>
            array (
                'id' => 2785,
                'name' => 'National Capital District',
                'country_id' => 170,
                'arab_name' => 'National Capital District',
            ),
            279 =>
            array (
                'id' => 2786,
                'name' => 'New Ireland',
                'country_id' => 170,
                'arab_name' => 'New Ireland',
            ),
            280 =>
            array (
                'id' => 2787,
                'name' => 'North Solomons',
                'country_id' => 170,
                'arab_name' => 'North Solomons',
            ),
            281 =>
            array (
                'id' => 2788,
                'name' => 'Oro',
                'country_id' => 170,
                'arab_name' => 'Oro',
            ),
            282 =>
            array (
                'id' => 2789,
                'name' => 'Sandaun',
                'country_id' => 170,
                'arab_name' => 'Sandaun',
            ),
            283 =>
            array (
                'id' => 2790,
                'name' => 'Simbu',
                'country_id' => 170,
                'arab_name' => 'Simbu',
            ),
            284 =>
            array (
                'id' => 2791,
                'name' => 'Southern Highlands',
                'country_id' => 170,
                'arab_name' => 'Southern Highlands',
            ),
            285 =>
            array (
                'id' => 2792,
                'name' => 'West New Britain',
                'country_id' => 170,
                'arab_name' => 'West New Britain',
            ),
            286 =>
            array (
                'id' => 2793,
                'name' => 'Western Highlands',
                'country_id' => 170,
                'arab_name' => 'Western Highlands',
            ),
            287 =>
            array (
                'id' => 2794,
                'name' => 'Alto Paraguay',
                'country_id' => 171,
                'arab_name' => 'Alto Paraguay',
            ),
            288 =>
            array (
                'id' => 2795,
                'name' => 'Alto Parana',
                'country_id' => 171,
                'arab_name' => 'Alto Parana',
            ),
            289 =>
            array (
                'id' => 2796,
                'name' => 'Amambay',
                'country_id' => 171,
                'arab_name' => 'Amambay',
            ),
            290 =>
            array (
                'id' => 2797,
                'name' => 'Asuncion',
                'country_id' => 171,
                'arab_name' => 'Asuncion',
            ),
            291 =>
            array (
                'id' => 2798,
                'name' => 'Boqueron',
                'country_id' => 171,
                'arab_name' => 'Boqueron',
            ),
            292 =>
            array (
                'id' => 2799,
                'name' => 'Caaguazu',
                'country_id' => 171,
                'arab_name' => 'Caaguazu',
            ),
            293 =>
            array (
                'id' => 2800,
                'name' => 'Caazapa',
                'country_id' => 171,
                'arab_name' => 'Caazapa',
            ),
            294 =>
            array (
                'id' => 2801,
                'name' => 'Canendiyu',
                'country_id' => 171,
                'arab_name' => 'Canendiyu',
            ),
            295 =>
            array (
                'id' => 2802,
                'name' => 'Central',
                'country_id' => 171,
                'arab_name' => 'Central',
            ),
            296 =>
            array (
                'id' => 2803,
                'name' => 'Concepcion',
                'country_id' => 171,
                'arab_name' => 'Concepcion',
            ),
            297 =>
            array (
                'id' => 2804,
                'name' => 'Cordillera',
                'country_id' => 171,
                'arab_name' => 'Cordillera',
            ),
            298 =>
            array (
                'id' => 2805,
                'name' => 'Guaira',
                'country_id' => 171,
                'arab_name' => 'Guaira',
            ),
            299 =>
            array (
                'id' => 2806,
                'name' => 'Itapua',
                'country_id' => 171,
                'arab_name' => 'Itapua',
            ),
            300 =>
            array (
                'id' => 2807,
                'name' => 'Misiones',
                'country_id' => 171,
                'arab_name' => 'Misiones',
            ),
            301 =>
            array (
                'id' => 2808,
                'name' => 'Neembucu',
                'country_id' => 171,
                'arab_name' => 'Neembucu',
            ),
            302 =>
            array (
                'id' => 2809,
                'name' => 'Paraguari',
                'country_id' => 171,
                'arab_name' => 'Paraguari',
            ),
            303 =>
            array (
                'id' => 2810,
                'name' => 'Presidente Hayes',
                'country_id' => 171,
                'arab_name' => 'Presidente Hayes',
            ),
            304 =>
            array (
                'id' => 2811,
                'name' => 'San Pedro',
                'country_id' => 171,
                'arab_name' => 'San Pedro',
            ),
            305 =>
            array (
                'id' => 2812,
                'name' => 'Amazonas',
                'country_id' => 172,
                'arab_name' => 'Amazonas',
            ),
            306 =>
            array (
                'id' => 2813,
                'name' => 'Ancash',
                'country_id' => 172,
                'arab_name' => 'Ancash',
            ),
            307 =>
            array (
                'id' => 2814,
                'name' => 'Apurimac',
                'country_id' => 172,
                'arab_name' => 'Apurimac',
            ),
            308 =>
            array (
                'id' => 2815,
                'name' => 'Arequipa',
                'country_id' => 172,
                'arab_name' => 'Arequipa',
            ),
            309 =>
            array (
                'id' => 2816,
                'name' => 'Ayacucho',
                'country_id' => 172,
                'arab_name' => 'Ayacucho',
            ),
            310 =>
            array (
                'id' => 2817,
                'name' => 'Cajamarca',
                'country_id' => 172,
                'arab_name' => 'Cajamarca',
            ),
            311 =>
            array (
                'id' => 2818,
                'name' => 'Cusco',
                'country_id' => 172,
                'arab_name' => 'Cusco',
            ),
            312 =>
            array (
                'id' => 2819,
                'name' => 'Huancavelica',
                'country_id' => 172,
                'arab_name' => 'Huancavelica',
            ),
            313 =>
            array (
                'id' => 2820,
                'name' => 'Huanuco',
                'country_id' => 172,
                'arab_name' => 'Huanuco',
            ),
            314 =>
            array (
                'id' => 2821,
                'name' => 'Ica',
                'country_id' => 172,
                'arab_name' => 'Ica',
            ),
            315 =>
            array (
                'id' => 2822,
                'name' => 'Junin',
                'country_id' => 172,
                'arab_name' => 'Junin',
            ),
            316 =>
            array (
                'id' => 2823,
                'name' => 'La Libertad',
                'country_id' => 172,
                'arab_name' => 'La Libertad',
            ),
            317 =>
            array (
                'id' => 2824,
                'name' => 'Lambayeque',
                'country_id' => 172,
                'arab_name' => 'Lambayeque',
            ),
            318 =>
            array (
                'id' => 2825,
                'name' => 'Lima y Callao',
                'country_id' => 172,
                'arab_name' => 'Lima y Callao',
            ),
            319 =>
            array (
                'id' => 2826,
                'name' => 'Loreto',
                'country_id' => 172,
                'arab_name' => 'Loreto',
            ),
            320 =>
            array (
                'id' => 2827,
                'name' => 'Madre de Dios',
                'country_id' => 172,
                'arab_name' => 'Madre de Dios',
            ),
            321 =>
            array (
                'id' => 2828,
                'name' => 'Moquegua',
                'country_id' => 172,
                'arab_name' => 'Moquegua',
            ),
            322 =>
            array (
                'id' => 2829,
                'name' => 'Pasco',
                'country_id' => 172,
                'arab_name' => 'Pasco',
            ),
            323 =>
            array (
                'id' => 2830,
                'name' => 'Piura',
                'country_id' => 172,
                'arab_name' => 'Piura',
            ),
            324 =>
            array (
                'id' => 2831,
                'name' => 'Puno',
                'country_id' => 172,
                'arab_name' => 'Puno',
            ),
            325 =>
            array (
                'id' => 2832,
                'name' => 'San Martin',
                'country_id' => 172,
                'arab_name' => 'San Martin',
            ),
            326 =>
            array (
                'id' => 2833,
                'name' => 'Tacna',
                'country_id' => 172,
                'arab_name' => 'Tacna',
            ),
            327 =>
            array (
                'id' => 2834,
                'name' => 'Tumbes',
                'country_id' => 172,
                'arab_name' => 'Tumbes',
            ),
            328 =>
            array (
                'id' => 2835,
                'name' => 'Ucayali',
                'country_id' => 172,
                'arab_name' => 'Ucayali',
            ),
            329 =>
            array (
                'id' => 2836,
                'name' => 'Batangas',
                'country_id' => 173,
                'arab_name' => 'Batangas',
            ),
            330 =>
            array (
                'id' => 2837,
                'name' => 'Bicol',
                'country_id' => 173,
                'arab_name' => 'Bicol',
            ),
            331 =>
            array (
                'id' => 2838,
                'name' => 'Bulacan',
                'country_id' => 173,
                'arab_name' => 'Bulacan',
            ),
            332 =>
            array (
                'id' => 2839,
                'name' => 'Cagayan',
                'country_id' => 173,
                'arab_name' => 'Cagayan',
            ),
            333 =>
            array (
                'id' => 2840,
                'name' => 'Caraga',
                'country_id' => 173,
                'arab_name' => 'Caraga',
            ),
            334 =>
            array (
                'id' => 2841,
                'name' => 'Central Luzon',
                'country_id' => 173,
                'arab_name' => 'Central Luzon',
            ),
            335 =>
            array (
                'id' => 2842,
                'name' => 'Central Mindanao',
                'country_id' => 173,
                'arab_name' => 'Central Mindanao',
            ),
            336 =>
            array (
                'id' => 2843,
                'name' => 'Central Visayas',
                'country_id' => 173,
                'arab_name' => 'Central Visayas',
            ),
            337 =>
            array (
                'id' => 2844,
                'name' => 'Cordillera',
                'country_id' => 173,
                'arab_name' => 'Cordillera',
            ),
            338 =>
            array (
                'id' => 2845,
                'name' => 'Davao',
                'country_id' => 173,
                'arab_name' => 'Davao',
            ),
            339 =>
            array (
                'id' => 2846,
                'name' => 'Eastern Visayas',
                'country_id' => 173,
                'arab_name' => 'Eastern Visayas',
            ),
            340 =>
            array (
                'id' => 2847,
                'name' => 'Greater Metropolitan Area',
                'country_id' => 173,
                'arab_name' => 'Greater Metropolitan Area',
            ),
            341 =>
            array (
                'id' => 2848,
                'name' => 'Ilocos',
                'country_id' => 173,
                'arab_name' => 'Ilocos',
            ),
            342 =>
            array (
                'id' => 2849,
                'name' => 'Laguna',
                'country_id' => 173,
                'arab_name' => 'Laguna',
            ),
            343 =>
            array (
                'id' => 2850,
                'name' => 'Luzon',
                'country_id' => 173,
                'arab_name' => 'Luzon',
            ),
            344 =>
            array (
                'id' => 2851,
                'name' => 'Mactan',
                'country_id' => 173,
                'arab_name' => 'Mactan',
            ),
            345 =>
            array (
                'id' => 2852,
                'name' => 'Metropolitan Manila Area',
                'country_id' => 173,
                'arab_name' => 'Metropolitan Manila Area',
            ),
            346 =>
            array (
                'id' => 2853,
                'name' => 'Muslim Mindanao',
                'country_id' => 173,
                'arab_name' => 'Muslim Mindanao',
            ),
            347 =>
            array (
                'id' => 2854,
                'name' => 'Northern Mindanao',
                'country_id' => 173,
                'arab_name' => 'Northern Mindanao',
            ),
            348 =>
            array (
                'id' => 2855,
                'name' => 'Southern Mindanao',
                'country_id' => 173,
                'arab_name' => 'Southern Mindanao',
            ),
            349 =>
            array (
                'id' => 2856,
                'name' => 'Southern Tagalog',
                'country_id' => 173,
                'arab_name' => 'Southern Tagalog',
            ),
            350 =>
            array (
                'id' => 2857,
                'name' => 'Western Mindanao',
                'country_id' => 173,
                'arab_name' => 'Western Mindanao',
            ),
            351 =>
            array (
                'id' => 2858,
                'name' => 'Western Visayas',
                'country_id' => 173,
                'arab_name' => 'Western Visayas',
            ),
            352 =>
            array (
                'id' => 2859,
                'name' => 'Pitcairn Island',
                'country_id' => 174,
                'arab_name' => 'Pitcairn Island',
            ),
            353 =>
            array (
                'id' => 2860,
                'name' => 'Biale Blota',
                'country_id' => 175,
                'arab_name' => 'Biale Blota',
            ),
            354 =>
            array (
                'id' => 2861,
                'name' => 'Dobroszyce',
                'country_id' => 175,
                'arab_name' => 'Dobroszyce',
            ),
            355 =>
            array (
                'id' => 2862,
                'name' => 'Dolnoslaskie',
                'country_id' => 175,
                'arab_name' => 'Dolnoslaskie',
            ),
            356 =>
            array (
                'id' => 2863,
                'name' => 'Dziekanow Lesny',
                'country_id' => 175,
                'arab_name' => 'Dziekanow Lesny',
            ),
            357 =>
            array (
                'id' => 2864,
                'name' => 'Hopowo',
                'country_id' => 175,
                'arab_name' => 'Hopowo',
            ),
            358 =>
            array (
                'id' => 2865,
                'name' => 'Kartuzy',
                'country_id' => 175,
                'arab_name' => 'Kartuzy',
            ),
            359 =>
            array (
                'id' => 2866,
                'name' => 'Koscian',
                'country_id' => 175,
                'arab_name' => 'Koscian',
            ),
            360 =>
            array (
                'id' => 2867,
                'name' => 'Krakow',
                'country_id' => 175,
                'arab_name' => 'Krakow',
            ),
            361 =>
            array (
                'id' => 2868,
                'name' => 'Kujawsko-Pomorskie',
                'country_id' => 175,
                'arab_name' => 'Kujawsko-Pomorskie',
            ),
            362 =>
            array (
                'id' => 2869,
                'name' => 'Lodzkie',
                'country_id' => 175,
                'arab_name' => 'Lodzkie',
            ),
            363 =>
            array (
                'id' => 2870,
                'name' => 'Lubelskie',
                'country_id' => 175,
                'arab_name' => 'Lubelskie',
            ),
            364 =>
            array (
                'id' => 2871,
                'name' => 'Lubuskie',
                'country_id' => 175,
                'arab_name' => 'Lubuskie',
            ),
            365 =>
            array (
                'id' => 2872,
                'name' => 'Malomice',
                'country_id' => 175,
                'arab_name' => 'Malomice',
            ),
            366 =>
            array (
                'id' => 2873,
                'name' => 'Malopolskie',
                'country_id' => 175,
                'arab_name' => 'Malopolskie',
            ),
            367 =>
            array (
                'id' => 2874,
                'name' => 'Mazowieckie',
                'country_id' => 175,
                'arab_name' => 'Mazowieckie',
            ),
            368 =>
            array (
                'id' => 2875,
                'name' => 'Mirkow',
                'country_id' => 175,
                'arab_name' => 'Mirkow',
            ),
            369 =>
            array (
                'id' => 2876,
                'name' => 'Opolskie',
                'country_id' => 175,
                'arab_name' => 'Opolskie',
            ),
            370 =>
            array (
                'id' => 2877,
                'name' => 'Ostrowiec',
                'country_id' => 175,
                'arab_name' => 'Ostrowiec',
            ),
            371 =>
            array (
                'id' => 2878,
                'name' => 'Podkarpackie',
                'country_id' => 175,
                'arab_name' => 'Podkarpackie',
            ),
            372 =>
            array (
                'id' => 2879,
                'name' => 'Podlaskie',
                'country_id' => 175,
                'arab_name' => 'Podlaskie',
            ),
            373 =>
            array (
                'id' => 2880,
                'name' => 'Polska',
                'country_id' => 175,
                'arab_name' => 'Polska',
            ),
            374 =>
            array (
                'id' => 2881,
                'name' => 'Pomorskie',
                'country_id' => 175,
                'arab_name' => 'Pomorskie',
            ),
            375 =>
            array (
                'id' => 2882,
                'name' => 'Poznan',
                'country_id' => 175,
                'arab_name' => 'Poznan',
            ),
            376 =>
            array (
                'id' => 2883,
                'name' => 'Pruszkow',
                'country_id' => 175,
                'arab_name' => 'Pruszkow',
            ),
            377 =>
            array (
                'id' => 2884,
                'name' => 'Rymanowska',
                'country_id' => 175,
                'arab_name' => 'Rymanowska',
            ),
            378 =>
            array (
                'id' => 2885,
                'name' => 'Rzeszow',
                'country_id' => 175,
                'arab_name' => 'Rzeszow',
            ),
            379 =>
            array (
                'id' => 2886,
                'name' => 'Slaskie',
                'country_id' => 175,
                'arab_name' => 'Slaskie',
            ),
            380 =>
            array (
                'id' => 2887,
                'name' => 'Stare Pole',
                'country_id' => 175,
                'arab_name' => 'Stare Pole',
            ),
            381 =>
            array (
                'id' => 2888,
                'name' => 'Swietokrzyskie',
                'country_id' => 175,
                'arab_name' => 'Swietokrzyskie',
            ),
            382 =>
            array (
                'id' => 2889,
                'name' => 'Warminsko-Mazurskie',
                'country_id' => 175,
                'arab_name' => 'Warminsko-Mazurskie',
            ),
            383 =>
            array (
                'id' => 2890,
                'name' => 'Warsaw',
                'country_id' => 175,
                'arab_name' => 'Warsaw',
            ),
            384 =>
            array (
                'id' => 2891,
                'name' => 'Wejherowo',
                'country_id' => 175,
                'arab_name' => 'Wejherowo',
            ),
            385 =>
            array (
                'id' => 2892,
                'name' => 'Wielkopolskie',
                'country_id' => 175,
                'arab_name' => 'Wielkopolskie',
            ),
            386 =>
            array (
                'id' => 2893,
                'name' => 'Wroclaw',
                'country_id' => 175,
                'arab_name' => 'Wroclaw',
            ),
            387 =>
            array (
                'id' => 2894,
                'name' => 'Zachodnio-Pomorskie',
                'country_id' => 175,
                'arab_name' => 'Zachodnio-Pomorskie',
            ),
            388 =>
            array (
                'id' => 2895,
                'name' => 'Zukowo',
                'country_id' => 175,
                'arab_name' => 'Zukowo',
            ),
            389 =>
            array (
                'id' => 2896,
                'name' => 'Abrantes',
                'country_id' => 176,
                'arab_name' => 'Abrantes',
            ),
            390 =>
            array (
                'id' => 2897,
                'name' => 'Acores',
                'country_id' => 176,
                'arab_name' => 'Acores',
            ),
            391 =>
            array (
                'id' => 2898,
                'name' => 'Alentejo',
                'country_id' => 176,
                'arab_name' => 'Alentejo',
            ),
            392 =>
            array (
                'id' => 2899,
                'name' => 'Algarve',
                'country_id' => 176,
                'arab_name' => 'Algarve',
            ),
            393 =>
            array (
                'id' => 2900,
                'name' => 'Braga',
                'country_id' => 176,
                'arab_name' => 'Braga',
            ),
            394 =>
            array (
                'id' => 2901,
                'name' => 'Centro',
                'country_id' => 176,
                'arab_name' => 'Centro',
            ),
            395 =>
            array (
                'id' => 2902,
                'name' => 'Distrito de Leiria',
                'country_id' => 176,
                'arab_name' => 'Distrito de Leiria',
            ),
            396 =>
            array (
                'id' => 2903,
                'name' => 'Distrito de Viana do Castelo',
                'country_id' => 176,
                'arab_name' => 'Distrito de Viana do Castelo',
            ),
            397 =>
            array (
                'id' => 2904,
                'name' => 'Distrito de Vila Real',
                'country_id' => 176,
                'arab_name' => 'Distrito de Vila Real',
            ),
            398 =>
            array (
                'id' => 2905,
                'name' => 'Distrito do Porto',
                'country_id' => 176,
                'arab_name' => 'Distrito do Porto',
            ),
            399 =>
            array (
                'id' => 2906,
                'name' => 'Lisboa e Vale do Tejo',
                'country_id' => 176,
                'arab_name' => 'Lisboa e Vale do Tejo',
            ),
            400 =>
            array (
                'id' => 2907,
                'name' => 'Madeira',
                'country_id' => 176,
                'arab_name' => 'Madeira',
            ),
            401 =>
            array (
                'id' => 2908,
                'name' => 'Norte',
                'country_id' => 176,
                'arab_name' => 'Norte',
            ),
            402 =>
            array (
                'id' => 2909,
                'name' => 'Paivas',
                'country_id' => 176,
                'arab_name' => 'Paivas',
            ),
            403 =>
            array (
                'id' => 2910,
                'name' => 'Arecibo',
                'country_id' => 177,
                'arab_name' => 'Arecibo',
            ),
            404 =>
            array (
                'id' => 2911,
                'name' => 'Bayamon',
                'country_id' => 177,
                'arab_name' => 'Bayamon',
            ),
            405 =>
            array (
                'id' => 2912,
                'name' => 'Carolina',
                'country_id' => 177,
                'arab_name' => 'Carolina',
            ),
            406 =>
            array (
                'id' => 2913,
                'name' => 'Florida',
                'country_id' => 177,
                'arab_name' => 'Florida',
            ),
            407 =>
            array (
                'id' => 2914,
                'name' => 'Guayama',
                'country_id' => 177,
                'arab_name' => 'Guayama',
            ),
            408 =>
            array (
                'id' => 2915,
                'name' => 'Humacao',
                'country_id' => 177,
                'arab_name' => 'Humacao',
            ),
            409 =>
            array (
                'id' => 2916,
                'name' => 'Mayaguez-Aguadilla',
                'country_id' => 177,
                'arab_name' => 'Mayaguez-Aguadilla',
            ),
            410 =>
            array (
                'id' => 2917,
                'name' => 'Ponce',
                'country_id' => 177,
                'arab_name' => 'Ponce',
            ),
            411 =>
            array (
                'id' => 2918,
                'name' => 'Salinas',
                'country_id' => 177,
                'arab_name' => 'Salinas',
            ),
            412 =>
            array (
                'id' => 2919,
                'name' => 'San Juan',
                'country_id' => 177,
                'arab_name' => 'San Juan',
            ),
            413 =>
            array (
                'id' => 2920,
                'name' => 'Doha',
                'country_id' => 178,
                'arab_name' => 'Doha',
            ),
            414 =>
            array (
                'id' => 2921,
                'name' => 'Jarian-al-Batnah',
                'country_id' => 178,
                'arab_name' => 'Jarian-al-Batnah',
            ),
            415 =>
            array (
                'id' => 2922,
                'name' => 'Umm Salal',
                'country_id' => 178,
                'arab_name' => 'Umm Salal',
            ),
            416 =>
            array (
                'id' => 2923,
                'name' => 'ad-Dawhah',
                'country_id' => 178,
                'arab_name' => 'ad-Dawhah',
            ),
            417 =>
            array (
                'id' => 2924,
                'name' => 'al-Ghuwayriyah',
                'country_id' => 178,
                'arab_name' => 'al-Ghuwayriyah',
            ),
            418 =>
            array (
                'id' => 2925,
                'name' => 'al-Jumayliyah',
                'country_id' => 178,
                'arab_name' => 'al-Jumayliyah',
            ),
            419 =>
            array (
                'id' => 2926,
                'name' => 'al-Khawr',
                'country_id' => 178,
                'arab_name' => 'al-Khawr',
            ),
            420 =>
            array (
                'id' => 2927,
                'name' => 'al-Wakrah',
                'country_id' => 178,
                'arab_name' => 'al-Wakrah',
            ),
            421 =>
            array (
                'id' => 2928,
                'name' => 'ar-Rayyan',
                'country_id' => 178,
                'arab_name' => 'ar-Rayyan',
            ),
            422 =>
            array (
                'id' => 2929,
                'name' => 'ash-Shamal',
                'country_id' => 178,
                'arab_name' => 'ash-Shamal',
            ),
            423 =>
            array (
                'id' => 2930,
                'name' => 'Saint-Benoit',
                'country_id' => 179,
                'arab_name' => 'Saint-Benoit',
            ),
            424 =>
            array (
                'id' => 2931,
                'name' => 'Saint-Denis',
                'country_id' => 179,
                'arab_name' => 'Saint-Denis',
            ),
            425 =>
            array (
                'id' => 2932,
                'name' => 'Saint-Paul',
                'country_id' => 179,
                'arab_name' => 'Saint-Paul',
            ),
            426 =>
            array (
                'id' => 2933,
                'name' => 'Saint-Pierre',
                'country_id' => 179,
                'arab_name' => 'Saint-Pierre',
            ),
            427 =>
            array (
                'id' => 2934,
                'name' => 'Alba',
                'country_id' => 180,
                'arab_name' => 'Alba',
            ),
            428 =>
            array (
                'id' => 2935,
                'name' => 'Arad',
                'country_id' => 180,
                'arab_name' => 'Arad',
            ),
            429 =>
            array (
                'id' => 2936,
                'name' => 'Arges',
                'country_id' => 180,
                'arab_name' => 'Arges',
            ),
            430 =>
            array (
                'id' => 2937,
                'name' => 'Bacau',
                'country_id' => 180,
                'arab_name' => 'Bacau',
            ),
            431 =>
            array (
                'id' => 2938,
                'name' => 'Bihor',
                'country_id' => 180,
                'arab_name' => 'Bihor',
            ),
            432 =>
            array (
                'id' => 2939,
                'name' => 'Bistrita-Nasaud',
                'country_id' => 180,
                'arab_name' => 'Bistrita-Nasaud',
            ),
            433 =>
            array (
                'id' => 2940,
                'name' => 'Botosani',
                'country_id' => 180,
                'arab_name' => 'Botosani',
            ),
            434 =>
            array (
                'id' => 2941,
                'name' => 'Braila',
                'country_id' => 180,
                'arab_name' => 'Braila',
            ),
            435 =>
            array (
                'id' => 2942,
                'name' => 'Brasov',
                'country_id' => 180,
                'arab_name' => 'Brasov',
            ),
            436 =>
            array (
                'id' => 2943,
                'name' => 'Bucuresti',
                'country_id' => 180,
                'arab_name' => 'Bucuresti',
            ),
            437 =>
            array (
                'id' => 2944,
                'name' => 'Buzau',
                'country_id' => 180,
                'arab_name' => 'Buzau',
            ),
            438 =>
            array (
                'id' => 2945,
                'name' => 'Calarasi',
                'country_id' => 180,
                'arab_name' => 'Calarasi',
            ),
            439 =>
            array (
                'id' => 2946,
                'name' => 'Caras-Severin',
                'country_id' => 180,
                'arab_name' => 'Caras-Severin',
            ),
            440 =>
            array (
                'id' => 2947,
                'name' => 'Cluj',
                'country_id' => 180,
                'arab_name' => 'Cluj',
            ),
            441 =>
            array (
                'id' => 2948,
                'name' => 'Constanta',
                'country_id' => 180,
                'arab_name' => 'Constanta',
            ),
            442 =>
            array (
                'id' => 2949,
                'name' => 'Covasna',
                'country_id' => 180,
                'arab_name' => 'Covasna',
            ),
            443 =>
            array (
                'id' => 2950,
                'name' => 'Dambovita',
                'country_id' => 180,
                'arab_name' => 'Dambovita',
            ),
            444 =>
            array (
                'id' => 2951,
                'name' => 'Dolj',
                'country_id' => 180,
                'arab_name' => 'Dolj',
            ),
            445 =>
            array (
                'id' => 2952,
                'name' => 'Galati',
                'country_id' => 180,
                'arab_name' => 'Galati',
            ),
            446 =>
            array (
                'id' => 2953,
                'name' => 'Giurgiu',
                'country_id' => 180,
                'arab_name' => 'Giurgiu',
            ),
            447 =>
            array (
                'id' => 2954,
                'name' => 'Gorj',
                'country_id' => 180,
                'arab_name' => 'Gorj',
            ),
            448 =>
            array (
                'id' => 2955,
                'name' => 'Harghita',
                'country_id' => 180,
                'arab_name' => 'Harghita',
            ),
            449 =>
            array (
                'id' => 2956,
                'name' => 'Hunedoara',
                'country_id' => 180,
                'arab_name' => 'Hunedoara',
            ),
            450 =>
            array (
                'id' => 2957,
                'name' => 'Ialomita',
                'country_id' => 180,
                'arab_name' => 'Ialomita',
            ),
            451 =>
            array (
                'id' => 2958,
                'name' => 'Iasi',
                'country_id' => 180,
                'arab_name' => 'Iasi',
            ),
            452 =>
            array (
                'id' => 2959,
                'name' => 'Ilfov',
                'country_id' => 180,
                'arab_name' => 'Ilfov',
            ),
            453 =>
            array (
                'id' => 2960,
                'name' => 'Maramures',
                'country_id' => 180,
                'arab_name' => 'Maramures',
            ),
            454 =>
            array (
                'id' => 2961,
                'name' => 'Mehedinti',
                'country_id' => 180,
                'arab_name' => 'Mehedinti',
            ),
            455 =>
            array (
                'id' => 2962,
                'name' => 'Mures',
                'country_id' => 180,
                'arab_name' => 'Mures',
            ),
            456 =>
            array (
                'id' => 2963,
                'name' => 'Neamt',
                'country_id' => 180,
                'arab_name' => 'Neamt',
            ),
            457 =>
            array (
                'id' => 2964,
                'name' => 'Olt',
                'country_id' => 180,
                'arab_name' => 'Olt',
            ),
            458 =>
            array (
                'id' => 2965,
                'name' => 'Prahova',
                'country_id' => 180,
                'arab_name' => 'Prahova',
            ),
            459 =>
            array (
                'id' => 2966,
                'name' => 'Salaj',
                'country_id' => 180,
                'arab_name' => 'Salaj',
            ),
            460 =>
            array (
                'id' => 2967,
                'name' => 'Satu Mare',
                'country_id' => 180,
                'arab_name' => 'Satu Mare',
            ),
            461 =>
            array (
                'id' => 2968,
                'name' => 'Sibiu',
                'country_id' => 180,
                'arab_name' => 'Sibiu',
            ),
            462 =>
            array (
                'id' => 2969,
                'name' => 'Sondelor',
                'country_id' => 180,
                'arab_name' => 'Sondelor',
            ),
            463 =>
            array (
                'id' => 2970,
                'name' => 'Suceava',
                'country_id' => 180,
                'arab_name' => 'Suceava',
            ),
            464 =>
            array (
                'id' => 2971,
                'name' => 'Teleorman',
                'country_id' => 180,
                'arab_name' => 'Teleorman',
            ),
            465 =>
            array (
                'id' => 2972,
                'name' => 'Timis',
                'country_id' => 180,
                'arab_name' => 'Timis',
            ),
            466 =>
            array (
                'id' => 2973,
                'name' => 'Tulcea',
                'country_id' => 180,
                'arab_name' => 'Tulcea',
            ),
            467 =>
            array (
                'id' => 2974,
                'name' => 'Valcea',
                'country_id' => 180,
                'arab_name' => 'Valcea',
            ),
            468 =>
            array (
                'id' => 2975,
                'name' => 'Vaslui',
                'country_id' => 180,
                'arab_name' => 'Vaslui',
            ),
            469 =>
            array (
                'id' => 2976,
                'name' => 'Vrancea',
                'country_id' => 180,
                'arab_name' => 'Vrancea',
            ),
            470 =>
            array (
                'id' => 2977,
                'name' => 'Adygeja',
                'country_id' => 181,
                'arab_name' => 'Adygeja',
            ),
            471 =>
            array (
                'id' => 2978,
                'name' => 'Aga',
                'country_id' => 181,
                'arab_name' => 'Aga',
            ),
            472 =>
            array (
                'id' => 2979,
                'name' => 'Alanija',
                'country_id' => 181,
                'arab_name' => 'Alanija',
            ),
            473 =>
            array (
                'id' => 2980,
                'name' => 'Altaj',
                'country_id' => 181,
                'arab_name' => 'Altaj',
            ),
            474 =>
            array (
                'id' => 2981,
                'name' => 'Amur',
                'country_id' => 181,
                'arab_name' => 'Amur',
            ),
            475 =>
            array (
                'id' => 2982,
                'name' => 'Arhangelsk',
                'country_id' => 181,
                'arab_name' => 'Arhangelsk',
            ),
            476 =>
            array (
                'id' => 2983,
                'name' => 'Astrahan',
                'country_id' => 181,
                'arab_name' => 'Astrahan',
            ),
            477 =>
            array (
                'id' => 2984,
                'name' => 'Bashkortostan',
                'country_id' => 181,
                'arab_name' => 'Bashkortostan',
            ),
            478 =>
            array (
                'id' => 2985,
                'name' => 'Belgorod',
                'country_id' => 181,
                'arab_name' => 'Belgorod',
            ),
            479 =>
            array (
                'id' => 2986,
                'name' => 'Brjansk',
                'country_id' => 181,
                'arab_name' => 'Brjansk',
            ),
            480 =>
            array (
                'id' => 2987,
                'name' => 'Burjatija',
                'country_id' => 181,
                'arab_name' => 'Burjatija',
            ),
            481 =>
            array (
                'id' => 2988,
                'name' => 'Chechenija',
                'country_id' => 181,
                'arab_name' => 'Chechenija',
            ),
            482 =>
            array (
                'id' => 2989,
                'name' => 'Cheljabinsk',
                'country_id' => 181,
                'arab_name' => 'Cheljabinsk',
            ),
            483 =>
            array (
                'id' => 2990,
                'name' => 'Chita',
                'country_id' => 181,
                'arab_name' => 'Chita',
            ),
            484 =>
            array (
                'id' => 2991,
                'name' => 'Chukotka',
                'country_id' => 181,
                'arab_name' => 'Chukotka',
            ),
            485 =>
            array (
                'id' => 2992,
                'name' => 'Chuvashija',
                'country_id' => 181,
                'arab_name' => 'Chuvashija',
            ),
            486 =>
            array (
                'id' => 2993,
                'name' => 'Dagestan',
                'country_id' => 181,
                'arab_name' => 'Dagestan',
            ),
            487 =>
            array (
                'id' => 2994,
                'name' => 'Evenkija',
                'country_id' => 181,
                'arab_name' => 'Evenkija',
            ),
            488 =>
            array (
                'id' => 2995,
                'name' => 'Gorno-Altaj',
                'country_id' => 181,
                'arab_name' => 'Gorno-Altaj',
            ),
            489 =>
            array (
                'id' => 2996,
                'name' => 'Habarovsk',
                'country_id' => 181,
                'arab_name' => 'Habarovsk',
            ),
            490 =>
            array (
                'id' => 2997,
                'name' => 'Hakasija',
                'country_id' => 181,
                'arab_name' => 'Hakasija',
            ),
            491 =>
            array (
                'id' => 2998,
                'name' => 'Hanty-Mansija',
                'country_id' => 181,
                'arab_name' => 'Hanty-Mansija',
            ),
            492 =>
            array (
                'id' => 2999,
                'name' => 'Ingusetija',
                'country_id' => 181,
                'arab_name' => 'Ingusetija',
            ),
            493 =>
            array (
                'id' => 3000,
                'name' => 'Irkutsk',
                'country_id' => 181,
                'arab_name' => 'Irkutsk',
            ),
            494 =>
            array (
                'id' => 3001,
                'name' => 'Ivanovo',
                'country_id' => 181,
                'arab_name' => 'Ivanovo',
            ),
            495 =>
            array (
                'id' => 3002,
                'name' => 'Jamalo-Nenets',
                'country_id' => 181,
                'arab_name' => 'Jamalo-Nenets',
            ),
            496 =>
            array (
                'id' => 3003,
                'name' => 'Jaroslavl',
                'country_id' => 181,
                'arab_name' => 'Jaroslavl',
            ),
            497 =>
            array (
                'id' => 3004,
                'name' => 'Jevrej',
                'country_id' => 181,
                'arab_name' => 'Jevrej',
            ),
            498 =>
            array (
                'id' => 3005,
                'name' => 'Kabardino-Balkarija',
                'country_id' => 181,
                'arab_name' => 'Kabardino-Balkarija',
            ),
            499 =>
            array (
                'id' => 3006,
                'name' => 'Kaliningrad',
                'country_id' => 181,
                'arab_name' => 'Kaliningrad',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 3007,
                'name' => 'Kalmykija',
                'country_id' => 181,
                'arab_name' => 'Kalmykija',
            ),
            1 =>
            array (
                'id' => 3008,
                'name' => 'Kaluga',
                'country_id' => 181,
                'arab_name' => 'Kaluga',
            ),
            2 =>
            array (
                'id' => 3009,
                'name' => 'Kamchatka',
                'country_id' => 181,
                'arab_name' => 'Kamchatka',
            ),
            3 =>
            array (
                'id' => 3010,
                'name' => 'Karachaj-Cherkessija',
                'country_id' => 181,
                'arab_name' => 'Karachaj-Cherkessija',
            ),
            4 =>
            array (
                'id' => 3011,
                'name' => 'Karelija',
                'country_id' => 181,
                'arab_name' => 'Karelija',
            ),
            5 =>
            array (
                'id' => 3012,
                'name' => 'Kemerovo',
                'country_id' => 181,
                'arab_name' => 'Kemerovo',
            ),
            6 =>
            array (
                'id' => 3013,
                'name' => 'Khabarovskiy Kray',
                'country_id' => 181,
                'arab_name' => 'Khabarovskiy Kray',
            ),
            7 =>
            array (
                'id' => 3014,
                'name' => 'Kirov',
                'country_id' => 181,
                'arab_name' => 'Kirov',
            ),
            8 =>
            array (
                'id' => 3015,
                'name' => 'Komi',
                'country_id' => 181,
                'arab_name' => 'Komi',
            ),
            9 =>
            array (
                'id' => 3016,
                'name' => 'Komi-Permjakija',
                'country_id' => 181,
                'arab_name' => 'Komi-Permjakija',
            ),
            10 =>
            array (
                'id' => 3017,
                'name' => 'Korjakija',
                'country_id' => 181,
                'arab_name' => 'Korjakija',
            ),
            11 =>
            array (
                'id' => 3018,
                'name' => 'Kostroma',
                'country_id' => 181,
                'arab_name' => 'Kostroma',
            ),
            12 =>
            array (
                'id' => 3019,
                'name' => 'Krasnodar',
                'country_id' => 181,
                'arab_name' => 'Krasnodar',
            ),
            13 =>
            array (
                'id' => 3020,
                'name' => 'Krasnojarsk',
                'country_id' => 181,
                'arab_name' => 'Krasnojarsk',
            ),
            14 =>
            array (
                'id' => 3021,
                'name' => 'Krasnoyarskiy Kray',
                'country_id' => 181,
                'arab_name' => 'Krasnoyarskiy Kray',
            ),
            15 =>
            array (
                'id' => 3022,
                'name' => 'Kurgan',
                'country_id' => 181,
                'arab_name' => 'Kurgan',
            ),
            16 =>
            array (
                'id' => 3023,
                'name' => 'Kursk',
                'country_id' => 181,
                'arab_name' => 'Kursk',
            ),
            17 =>
            array (
                'id' => 3024,
                'name' => 'Leningrad',
                'country_id' => 181,
                'arab_name' => 'Leningrad',
            ),
            18 =>
            array (
                'id' => 3025,
                'name' => 'Lipeck',
                'country_id' => 181,
                'arab_name' => 'Lipeck',
            ),
            19 =>
            array (
                'id' => 3026,
                'name' => 'Magadan',
                'country_id' => 181,
                'arab_name' => 'Magadan',
            ),
            20 =>
            array (
                'id' => 3027,
                'name' => 'Marij El',
                'country_id' => 181,
                'arab_name' => 'Marij El',
            ),
            21 =>
            array (
                'id' => 3028,
                'name' => 'Mordovija',
                'country_id' => 181,
                'arab_name' => 'Mordovija',
            ),
            22 =>
            array (
                'id' => 3029,
                'name' => 'Moscow',
                'country_id' => 181,
                'arab_name' => 'Moscow',
            ),
            23 =>
            array (
                'id' => 3030,
                'name' => 'Moskovskaja Oblast',
                'country_id' => 181,
                'arab_name' => 'Moskovskaja Oblast',
            ),
            24 =>
            array (
                'id' => 3031,
                'name' => 'Moskovskaya Oblast',
                'country_id' => 181,
                'arab_name' => 'Moskovskaya Oblast',
            ),
            25 =>
            array (
                'id' => 3032,
                'name' => 'Moskva',
                'country_id' => 181,
                'arab_name' => 'Moskva',
            ),
            26 =>
            array (
                'id' => 3033,
                'name' => 'Murmansk',
                'country_id' => 181,
                'arab_name' => 'Murmansk',
            ),
            27 =>
            array (
                'id' => 3034,
                'name' => 'Nenets',
                'country_id' => 181,
                'arab_name' => 'Nenets',
            ),
            28 =>
            array (
                'id' => 3035,
                'name' => 'Nizhnij Novgorod',
                'country_id' => 181,
                'arab_name' => 'Nizhnij Novgorod',
            ),
            29 =>
            array (
                'id' => 3036,
                'name' => 'Novgorod',
                'country_id' => 181,
                'arab_name' => 'Novgorod',
            ),
            30 =>
            array (
                'id' => 3037,
                'name' => 'Novokusnezk',
                'country_id' => 181,
                'arab_name' => 'Novokusnezk',
            ),
            31 =>
            array (
                'id' => 3038,
                'name' => 'Novosibirsk',
                'country_id' => 181,
                'arab_name' => 'Novosibirsk',
            ),
            32 =>
            array (
                'id' => 3039,
                'name' => 'Omsk',
                'country_id' => 181,
                'arab_name' => 'Omsk',
            ),
            33 =>
            array (
                'id' => 3040,
                'name' => 'Orenburg',
                'country_id' => 181,
                'arab_name' => 'Orenburg',
            ),
            34 =>
            array (
                'id' => 3041,
                'name' => 'Orjol',
                'country_id' => 181,
                'arab_name' => 'Orjol',
            ),
            35 =>
            array (
                'id' => 3042,
                'name' => 'Penza',
                'country_id' => 181,
                'arab_name' => 'Penza',
            ),
            36 =>
            array (
                'id' => 3043,
                'name' => 'Perm',
                'country_id' => 181,
                'arab_name' => 'Perm',
            ),
            37 =>
            array (
                'id' => 3044,
                'name' => 'Primorje',
                'country_id' => 181,
                'arab_name' => 'Primorje',
            ),
            38 =>
            array (
                'id' => 3045,
                'name' => 'Pskov',
                'country_id' => 181,
                'arab_name' => 'Pskov',
            ),
            39 =>
            array (
                'id' => 3046,
                'name' => 'Pskovskaya Oblast',
                'country_id' => 181,
                'arab_name' => 'Pskovskaya Oblast',
            ),
            40 =>
            array (
                'id' => 3047,
                'name' => 'Rjazan',
                'country_id' => 181,
                'arab_name' => 'Rjazan',
            ),
            41 =>
            array (
                'id' => 3048,
                'name' => 'Rostov',
                'country_id' => 181,
                'arab_name' => 'Rostov',
            ),
            42 =>
            array (
                'id' => 3049,
                'name' => 'Saha',
                'country_id' => 181,
                'arab_name' => 'Saha',
            ),
            43 =>
            array (
                'id' => 3050,
                'name' => 'Sahalin',
                'country_id' => 181,
                'arab_name' => 'Sahalin',
            ),
            44 =>
            array (
                'id' => 3051,
                'name' => 'Samara',
                'country_id' => 181,
                'arab_name' => 'Samara',
            ),
            45 =>
            array (
                'id' => 3052,
                'name' => 'Samarskaya',
                'country_id' => 181,
                'arab_name' => 'Samarskaya',
            ),
            46 =>
            array (
                'id' => 3053,
                'name' => 'Sankt-Peterburg',
                'country_id' => 181,
                'arab_name' => 'Sankt-Peterburg',
            ),
            47 =>
            array (
                'id' => 3054,
                'name' => 'Saratov',
                'country_id' => 181,
                'arab_name' => 'Saratov',
            ),
            48 =>
            array (
                'id' => 3055,
                'name' => 'Smolensk',
                'country_id' => 181,
                'arab_name' => 'Smolensk',
            ),
            49 =>
            array (
                'id' => 3056,
                'name' => 'Stavropol',
                'country_id' => 181,
                'arab_name' => 'Stavropol',
            ),
            50 =>
            array (
                'id' => 3057,
                'name' => 'Sverdlovsk',
                'country_id' => 181,
                'arab_name' => 'Sverdlovsk',
            ),
            51 =>
            array (
                'id' => 3058,
                'name' => 'Tajmyrija',
                'country_id' => 181,
                'arab_name' => 'Tajmyrija',
            ),
            52 =>
            array (
                'id' => 3059,
                'name' => 'Tambov',
                'country_id' => 181,
                'arab_name' => 'Tambov',
            ),
            53 =>
            array (
                'id' => 3060,
                'name' => 'Tatarstan',
                'country_id' => 181,
                'arab_name' => 'Tatarstan',
            ),
            54 =>
            array (
                'id' => 3061,
                'name' => 'Tjumen',
                'country_id' => 181,
                'arab_name' => 'Tjumen',
            ),
            55 =>
            array (
                'id' => 3062,
                'name' => 'Tomsk',
                'country_id' => 181,
                'arab_name' => 'Tomsk',
            ),
            56 =>
            array (
                'id' => 3063,
                'name' => 'Tula',
                'country_id' => 181,
                'arab_name' => 'Tula',
            ),
            57 =>
            array (
                'id' => 3064,
                'name' => 'Tver',
                'country_id' => 181,
                'arab_name' => 'Tver',
            ),
            58 =>
            array (
                'id' => 3065,
                'name' => 'Tyva',
                'country_id' => 181,
                'arab_name' => 'Tyva',
            ),
            59 =>
            array (
                'id' => 3066,
                'name' => 'Udmurtija',
                'country_id' => 181,
                'arab_name' => 'Udmurtija',
            ),
            60 =>
            array (
                'id' => 3067,
                'name' => 'Uljanovsk',
                'country_id' => 181,
                'arab_name' => 'Uljanovsk',
            ),
            61 =>
            array (
                'id' => 3068,
                'name' => 'Ulyanovskaya Oblast',
                'country_id' => 181,
                'arab_name' => 'Ulyanovskaya Oblast',
            ),
            62 =>
            array (
                'id' => 3069,
                'name' => 'Ust-Orda',
                'country_id' => 181,
                'arab_name' => 'Ust-Orda',
            ),
            63 =>
            array (
                'id' => 3070,
                'name' => 'Vladimir',
                'country_id' => 181,
                'arab_name' => 'Vladimir',
            ),
            64 =>
            array (
                'id' => 3071,
                'name' => 'Volgograd',
                'country_id' => 181,
                'arab_name' => 'Volgograd',
            ),
            65 =>
            array (
                'id' => 3072,
                'name' => 'Vologda',
                'country_id' => 181,
                'arab_name' => 'Vologda',
            ),
            66 =>
            array (
                'id' => 3073,
                'name' => 'Voronezh',
                'country_id' => 181,
                'arab_name' => 'Voronezh',
            ),
            67 =>
            array (
                'id' => 3074,
                'name' => 'Butare',
                'country_id' => 182,
                'arab_name' => 'Butare',
            ),
            68 =>
            array (
                'id' => 3075,
                'name' => 'Byumba',
                'country_id' => 182,
                'arab_name' => 'Byumba',
            ),
            69 =>
            array (
                'id' => 3076,
                'name' => 'Cyangugu',
                'country_id' => 182,
                'arab_name' => 'Cyangugu',
            ),
            70 =>
            array (
                'id' => 3077,
                'name' => 'Gikongoro',
                'country_id' => 182,
                'arab_name' => 'Gikongoro',
            ),
            71 =>
            array (
                'id' => 3078,
                'name' => 'Gisenyi',
                'country_id' => 182,
                'arab_name' => 'Gisenyi',
            ),
            72 =>
            array (
                'id' => 3079,
                'name' => 'Gitarama',
                'country_id' => 182,
                'arab_name' => 'Gitarama',
            ),
            73 =>
            array (
                'id' => 3080,
                'name' => 'Kibungo',
                'country_id' => 182,
                'arab_name' => 'Kibungo',
            ),
            74 =>
            array (
                'id' => 3081,
                'name' => 'Kibuye',
                'country_id' => 182,
                'arab_name' => 'Kibuye',
            ),
            75 =>
            array (
                'id' => 3082,
                'name' => 'Kigali-ngali',
                'country_id' => 182,
                'arab_name' => 'Kigali-ngali',
            ),
            76 =>
            array (
                'id' => 3083,
                'name' => 'Ruhengeri',
                'country_id' => 182,
                'arab_name' => 'Ruhengeri',
            ),
            77 =>
            array (
                'id' => 3084,
                'name' => 'Ascension',
                'country_id' => 183,
                'arab_name' => 'Ascension',
            ),
            78 =>
            array (
                'id' => 3085,
                'name' => 'Gough Island',
                'country_id' => 183,
                'arab_name' => 'Gough Island',
            ),
            79 =>
            array (
                'id' => 3086,
                'name' => 'Saint Helena',
                'country_id' => 183,
                'arab_name' => 'Saint Helena',
            ),
            80 =>
            array (
                'id' => 3087,
                'name' => 'Tristan da Cunha',
                'country_id' => 183,
                'arab_name' => 'Tristan da Cunha',
            ),
            81 =>
            array (
                'id' => 3088,
                'name' => 'Christ Church Nichola Town',
                'country_id' => 184,
                'arab_name' => 'Christ Church Nichola Town',
            ),
            82 =>
            array (
                'id' => 3089,
                'name' => 'Saint Anne Sandy Point',
                'country_id' => 184,
                'arab_name' => 'Saint Anne Sandy Point',
            ),
            83 =>
            array (
                'id' => 3090,
                'name' => 'Saint George Basseterre',
                'country_id' => 184,
                'arab_name' => 'Saint George Basseterre',
            ),
            84 =>
            array (
                'id' => 3091,
                'name' => 'Saint George Gingerland',
                'country_id' => 184,
                'arab_name' => 'Saint George Gingerland',
            ),
            85 =>
            array (
                'id' => 3092,
                'name' => 'Saint James Windward',
                'country_id' => 184,
                'arab_name' => 'Saint James Windward',
            ),
            86 =>
            array (
                'id' => 3093,
                'name' => 'Saint John Capesterre',
                'country_id' => 184,
                'arab_name' => 'Saint John Capesterre',
            ),
            87 =>
            array (
                'id' => 3094,
                'name' => 'Saint John Figtree',
                'country_id' => 184,
                'arab_name' => 'Saint John Figtree',
            ),
            88 =>
            array (
                'id' => 3095,
                'name' => 'Saint Mary Cayon',
                'country_id' => 184,
                'arab_name' => 'Saint Mary Cayon',
            ),
            89 =>
            array (
                'id' => 3096,
                'name' => 'Saint Paul Capesterre',
                'country_id' => 184,
                'arab_name' => 'Saint Paul Capesterre',
            ),
            90 =>
            array (
                'id' => 3097,
                'name' => 'Saint Paul Charlestown',
                'country_id' => 184,
                'arab_name' => 'Saint Paul Charlestown',
            ),
            91 =>
            array (
                'id' => 3098,
                'name' => 'Saint Peter Basseterre',
                'country_id' => 184,
                'arab_name' => 'Saint Peter Basseterre',
            ),
            92 =>
            array (
                'id' => 3099,
                'name' => 'Saint Thomas Lowland',
                'country_id' => 184,
                'arab_name' => 'Saint Thomas Lowland',
            ),
            93 =>
            array (
                'id' => 3100,
                'name' => 'Saint Thomas Middle Island',
                'country_id' => 184,
                'arab_name' => 'Saint Thomas Middle Island',
            ),
            94 =>
            array (
                'id' => 3101,
                'name' => 'Trinity Palmetto Point',
                'country_id' => 184,
                'arab_name' => 'Trinity Palmetto Point',
            ),
            95 =>
            array (
                'id' => 3102,
                'name' => 'Anse-la-Raye',
                'country_id' => 185,
                'arab_name' => 'Anse-la-Raye',
            ),
            96 =>
            array (
                'id' => 3103,
                'name' => 'Canaries',
                'country_id' => 185,
                'arab_name' => 'Canaries',
            ),
            97 =>
            array (
                'id' => 3104,
                'name' => 'Castries',
                'country_id' => 185,
                'arab_name' => 'Castries',
            ),
            98 =>
            array (
                'id' => 3105,
                'name' => 'Choiseul',
                'country_id' => 185,
                'arab_name' => 'Choiseul',
            ),
            99 =>
            array (
                'id' => 3106,
                'name' => 'Dennery',
                'country_id' => 185,
                'arab_name' => 'Dennery',
            ),
            100 =>
            array (
                'id' => 3107,
                'name' => 'Gros Inlet',
                'country_id' => 185,
                'arab_name' => 'Gros Inlet',
            ),
            101 =>
            array (
                'id' => 3108,
                'name' => 'Laborie',
                'country_id' => 185,
                'arab_name' => 'Laborie',
            ),
            102 =>
            array (
                'id' => 3109,
                'name' => 'Micoud',
                'country_id' => 185,
                'arab_name' => 'Micoud',
            ),
            103 =>
            array (
                'id' => 3110,
                'name' => 'Soufriere',
                'country_id' => 185,
                'arab_name' => 'Soufriere',
            ),
            104 =>
            array (
                'id' => 3111,
                'name' => 'Vieux Fort',
                'country_id' => 185,
                'arab_name' => 'Vieux Fort',
            ),
            105 =>
            array (
                'id' => 3112,
                'name' => 'Miquelon-Langlade',
                'country_id' => 186,
                'arab_name' => 'Miquelon-Langlade',
            ),
            106 =>
            array (
                'id' => 3113,
                'name' => 'Saint-Pierre',
                'country_id' => 186,
                'arab_name' => 'Saint-Pierre',
            ),
            107 =>
            array (
                'id' => 3114,
                'name' => 'Charlotte',
                'country_id' => 187,
                'arab_name' => 'Charlotte',
            ),
            108 =>
            array (
                'id' => 3115,
                'name' => 'Grenadines',
                'country_id' => 187,
                'arab_name' => 'Grenadines',
            ),
            109 =>
            array (
                'id' => 3116,
                'name' => 'Saint Andrew',
                'country_id' => 187,
                'arab_name' => 'Saint Andrew',
            ),
            110 =>
            array (
                'id' => 3117,
                'name' => 'Saint David',
                'country_id' => 187,
                'arab_name' => 'Saint David',
            ),
            111 =>
            array (
                'id' => 3118,
                'name' => 'Saint George',
                'country_id' => 187,
                'arab_name' => 'Saint George',
            ),
            112 =>
            array (
                'id' => 3119,
                'name' => 'Saint Patrick',
                'country_id' => 187,
                'arab_name' => 'Saint Patrick',
            ),
            113 =>
            array (
                'id' => 3120,
                'name' => 'A\'ana',
                'country_id' => 188,
                'arab_name' => 'A\'ana',
            ),
            114 =>
            array (
                'id' => 3121,
                'name' => 'Aiga-i-le-Tai',
                'country_id' => 188,
                'arab_name' => 'Aiga-i-le-Tai',
            ),
            115 =>
            array (
                'id' => 3122,
                'name' => 'Atua',
                'country_id' => 188,
                'arab_name' => 'Atua',
            ),
            116 =>
            array (
                'id' => 3123,
                'name' => 'Fa\'asaleleaga',
                'country_id' => 188,
                'arab_name' => 'Fa\'asaleleaga',
            ),
            117 =>
            array (
                'id' => 3124,
                'name' => 'Gaga\'emauga',
                'country_id' => 188,
                'arab_name' => 'Gaga\'emauga',
            ),
            118 =>
            array (
                'id' => 3125,
                'name' => 'Gagaifomauga',
                'country_id' => 188,
                'arab_name' => 'Gagaifomauga',
            ),
            119 =>
            array (
                'id' => 3126,
                'name' => 'Palauli',
                'country_id' => 188,
                'arab_name' => 'Palauli',
            ),
            120 =>
            array (
                'id' => 3127,
                'name' => 'Satupa\'itea',
                'country_id' => 188,
                'arab_name' => 'Satupa\'itea',
            ),
            121 =>
            array (
                'id' => 3128,
                'name' => 'Tuamasaga',
                'country_id' => 188,
                'arab_name' => 'Tuamasaga',
            ),
            122 =>
            array (
                'id' => 3129,
                'name' => 'Va\'a-o-Fonoti',
                'country_id' => 188,
                'arab_name' => 'Va\'a-o-Fonoti',
            ),
            123 =>
            array (
                'id' => 3130,
                'name' => 'Vaisigano',
                'country_id' => 188,
                'arab_name' => 'Vaisigano',
            ),
            124 =>
            array (
                'id' => 3131,
                'name' => 'Acquaviva',
                'country_id' => 189,
                'arab_name' => 'Acquaviva',
            ),
            125 =>
            array (
                'id' => 3132,
                'name' => 'Borgo Maggiore',
                'country_id' => 189,
                'arab_name' => 'Borgo Maggiore',
            ),
            126 =>
            array (
                'id' => 3133,
                'name' => 'Chiesanuova',
                'country_id' => 189,
                'arab_name' => 'Chiesanuova',
            ),
            127 =>
            array (
                'id' => 3134,
                'name' => 'Domagnano',
                'country_id' => 189,
                'arab_name' => 'Domagnano',
            ),
            128 =>
            array (
                'id' => 3135,
                'name' => 'Faetano',
                'country_id' => 189,
                'arab_name' => 'Faetano',
            ),
            129 =>
            array (
                'id' => 3136,
                'name' => 'Fiorentino',
                'country_id' => 189,
                'arab_name' => 'Fiorentino',
            ),
            130 =>
            array (
                'id' => 3137,
                'name' => 'Montegiardino',
                'country_id' => 189,
                'arab_name' => 'Montegiardino',
            ),
            131 =>
            array (
                'id' => 3138,
                'name' => 'San Marino',
                'country_id' => 189,
                'arab_name' => 'San Marino',
            ),
            132 =>
            array (
                'id' => 3139,
                'name' => 'Serravalle',
                'country_id' => 189,
                'arab_name' => 'Serravalle',
            ),
            133 =>
            array (
                'id' => 3140,
                'name' => 'Agua Grande',
                'country_id' => 190,
                'arab_name' => 'Agua Grande',
            ),
            134 =>
            array (
                'id' => 3141,
                'name' => 'Cantagalo',
                'country_id' => 190,
                'arab_name' => 'Cantagalo',
            ),
            135 =>
            array (
                'id' => 3142,
                'name' => 'Lemba',
                'country_id' => 190,
                'arab_name' => 'Lemba',
            ),
            136 =>
            array (
                'id' => 3143,
                'name' => 'Lobata',
                'country_id' => 190,
                'arab_name' => 'Lobata',
            ),
            137 =>
            array (
                'id' => 3144,
                'name' => 'Me-Zochi',
                'country_id' => 190,
                'arab_name' => 'Me-Zochi',
            ),
            138 =>
            array (
                'id' => 3145,
                'name' => 'Pague',
                'country_id' => 190,
                'arab_name' => 'Pague',
            ),
            139 =>
            array (
                'id' => 3146,
                'name' => 'Al Khobar',
                'country_id' => 191,
                'arab_name' => 'Al Khobar',
            ),
            140 =>
            array (
                'id' => 3147,
                'name' => 'Aseer',
                'country_id' => 191,
                'arab_name' => 'Aseer',
            ),
            141 =>
            array (
                'id' => 3148,
                'name' => 'Ash Sharqiyah',
                'country_id' => 191,
                'arab_name' => 'Ash Sharqiyah',
            ),
            142 =>
            array (
                'id' => 3149,
                'name' => 'Asir',
                'country_id' => 191,
                'arab_name' => 'Asir',
            ),
            143 =>
            array (
                'id' => 3150,
                'name' => 'Central Province',
                'country_id' => 191,
                'arab_name' => 'Central Province',
            ),
            144 =>
            array (
                'id' => 3151,
                'name' => 'Eastern Province',
                'country_id' => 191,
                'arab_name' => 'Eastern Province',
            ),
            145 =>
            array (
                'id' => 3152,
                'name' => 'Ha\'il',
                'country_id' => 191,
                'arab_name' => 'Ha\'il',
            ),
            146 =>
            array (
                'id' => 3153,
                'name' => 'Jawf',
                'country_id' => 191,
                'arab_name' => 'Jawf',
            ),
            147 =>
            array (
                'id' => 3154,
                'name' => 'Jizan',
                'country_id' => 191,
                'arab_name' => 'Jizan',
            ),
            148 =>
            array (
                'id' => 3155,
                'name' => 'Makkah',
                'country_id' => 191,
                'arab_name' => 'Makkah',
            ),
            149 =>
            array (
                'id' => 3156,
                'name' => 'Najran',
                'country_id' => 191,
                'arab_name' => 'Najran',
            ),
            150 =>
            array (
                'id' => 3157,
                'name' => 'Qasim',
                'country_id' => 191,
                'arab_name' => 'Qasim',
            ),
            151 =>
            array (
                'id' => 3158,
                'name' => 'Tabuk',
                'country_id' => 191,
                'arab_name' => 'Tabuk',
            ),
            152 =>
            array (
                'id' => 3159,
                'name' => 'Western Province',
                'country_id' => 191,
                'arab_name' => 'Western Province',
            ),
            153 =>
            array (
                'id' => 3160,
                'name' => 'al-Bahah',
                'country_id' => 191,
                'arab_name' => 'al-Bahah',
            ),
            154 =>
            array (
                'id' => 3161,
                'name' => 'al-Hudud-ash-Shamaliyah',
                'country_id' => 191,
                'arab_name' => 'al-Hudud-ash-Shamaliyah',
            ),
            155 =>
            array (
                'id' => 3162,
                'name' => 'al-Madinah',
                'country_id' => 191,
                'arab_name' => 'al-Madinah',
            ),
            156 =>
            array (
                'id' => 3163,
                'name' => 'ar-Riyad',
                'country_id' => 191,
                'arab_name' => 'ar-Riyad',
            ),
            157 =>
            array (
                'id' => 3164,
                'name' => 'Dakar',
                'country_id' => 192,
                'arab_name' => 'Dakar',
            ),
            158 =>
            array (
                'id' => 3165,
                'name' => 'Diourbel',
                'country_id' => 192,
                'arab_name' => 'Diourbel',
            ),
            159 =>
            array (
                'id' => 3166,
                'name' => 'Fatick',
                'country_id' => 192,
                'arab_name' => 'Fatick',
            ),
            160 =>
            array (
                'id' => 3167,
                'name' => 'Kaolack',
                'country_id' => 192,
                'arab_name' => 'Kaolack',
            ),
            161 =>
            array (
                'id' => 3168,
                'name' => 'Kolda',
                'country_id' => 192,
                'arab_name' => 'Kolda',
            ),
            162 =>
            array (
                'id' => 3169,
                'name' => 'Louga',
                'country_id' => 192,
                'arab_name' => 'Louga',
            ),
            163 =>
            array (
                'id' => 3170,
                'name' => 'Saint-Louis',
                'country_id' => 192,
                'arab_name' => 'Saint-Louis',
            ),
            164 =>
            array (
                'id' => 3171,
                'name' => 'Tambacounda',
                'country_id' => 192,
                'arab_name' => 'Tambacounda',
            ),
            165 =>
            array (
                'id' => 3172,
                'name' => 'Thies',
                'country_id' => 192,
                'arab_name' => 'Thies',
            ),
            166 =>
            array (
                'id' => 3173,
                'name' => 'Ziguinchor',
                'country_id' => 192,
                'arab_name' => 'Ziguinchor',
            ),
            167 =>
            array (
                'id' => 3174,
                'name' => 'Central Serbia',
                'country_id' => 193,
                'arab_name' => 'Central Serbia',
            ),
            168 =>
            array (
                'id' => 3175,
                'name' => 'Kosovo and Metohija',
                'country_id' => 193,
                'arab_name' => 'Kosovo and Metohija',
            ),
            169 =>
            array (
                'id' => 3176,
                'name' => 'Vojvodina',
                'country_id' => 193,
                'arab_name' => 'Vojvodina',
            ),
            170 =>
            array (
                'id' => 3177,
                'name' => 'Anse Boileau',
                'country_id' => 194,
                'arab_name' => 'Anse Boileau',
            ),
            171 =>
            array (
                'id' => 3178,
                'name' => 'Anse Royale',
                'country_id' => 194,
                'arab_name' => 'Anse Royale',
            ),
            172 =>
            array (
                'id' => 3179,
                'name' => 'Cascade',
                'country_id' => 194,
                'arab_name' => 'Cascade',
            ),
            173 =>
            array (
                'id' => 3180,
                'name' => 'Takamaka',
                'country_id' => 194,
                'arab_name' => 'Takamaka',
            ),
            174 =>
            array (
                'id' => 3181,
                'name' => 'Victoria',
                'country_id' => 194,
                'arab_name' => 'Victoria',
            ),
            175 =>
            array (
                'id' => 3182,
                'name' => 'Eastern',
                'country_id' => 195,
                'arab_name' => 'Eastern',
            ),
            176 =>
            array (
                'id' => 3183,
                'name' => 'Northern',
                'country_id' => 195,
                'arab_name' => 'Northern',
            ),
            177 =>
            array (
                'id' => 3184,
                'name' => 'Southern',
                'country_id' => 195,
                'arab_name' => 'Southern',
            ),
            178 =>
            array (
                'id' => 3185,
                'name' => 'Western',
                'country_id' => 195,
                'arab_name' => 'Western',
            ),
            179 =>
            array (
                'id' => 3186,
                'name' => 'Singapore',
                'country_id' => 196,
                'arab_name' => 'Singapore',
            ),
            180 =>
            array (
                'id' => 3187,
                'name' => 'Banskobystricky',
                'country_id' => 197,
                'arab_name' => 'Banskobystricky',
            ),
            181 =>
            array (
                'id' => 3188,
                'name' => 'Bratislavsky',
                'country_id' => 197,
                'arab_name' => 'Bratislavsky',
            ),
            182 =>
            array (
                'id' => 3189,
                'name' => 'Kosicky',
                'country_id' => 197,
                'arab_name' => 'Kosicky',
            ),
            183 =>
            array (
                'id' => 3190,
                'name' => 'Nitriansky',
                'country_id' => 197,
                'arab_name' => 'Nitriansky',
            ),
            184 =>
            array (
                'id' => 3191,
                'name' => 'Presovsky',
                'country_id' => 197,
                'arab_name' => 'Presovsky',
            ),
            185 =>
            array (
                'id' => 3192,
                'name' => 'Trenciansky',
                'country_id' => 197,
                'arab_name' => 'Trenciansky',
            ),
            186 =>
            array (
                'id' => 3193,
                'name' => 'Trnavsky',
                'country_id' => 197,
                'arab_name' => 'Trnavsky',
            ),
            187 =>
            array (
                'id' => 3194,
                'name' => 'Zilinsky',
                'country_id' => 197,
                'arab_name' => 'Zilinsky',
            ),
            188 =>
            array (
                'id' => 3195,
                'name' => 'Benedikt',
                'country_id' => 198,
                'arab_name' => 'Benedikt',
            ),
            189 =>
            array (
                'id' => 3196,
                'name' => 'Gorenjska',
                'country_id' => 198,
                'arab_name' => 'Gorenjska',
            ),
            190 =>
            array (
                'id' => 3197,
                'name' => 'Gorishka',
                'country_id' => 198,
                'arab_name' => 'Gorishka',
            ),
            191 =>
            array (
                'id' => 3198,
                'name' => 'Jugovzhodna Slovenija',
                'country_id' => 198,
                'arab_name' => 'Jugovzhodna Slovenija',
            ),
            192 =>
            array (
                'id' => 3199,
                'name' => 'Koroshka',
                'country_id' => 198,
                'arab_name' => 'Koroshka',
            ),
            193 =>
            array (
                'id' => 3200,
                'name' => 'Notranjsko-krashka',
                'country_id' => 198,
                'arab_name' => 'Notranjsko-krashka',
            ),
            194 =>
            array (
                'id' => 3201,
                'name' => 'Obalno-krashka',
                'country_id' => 198,
                'arab_name' => 'Obalno-krashka',
            ),
            195 =>
            array (
                'id' => 3202,
                'name' => 'Obcina Domzale',
                'country_id' => 198,
                'arab_name' => 'Obcina Domzale',
            ),
            196 =>
            array (
                'id' => 3203,
                'name' => 'Obcina Vitanje',
                'country_id' => 198,
                'arab_name' => 'Obcina Vitanje',
            ),
            197 =>
            array (
                'id' => 3204,
                'name' => 'Osrednjeslovenska',
                'country_id' => 198,
                'arab_name' => 'Osrednjeslovenska',
            ),
            198 =>
            array (
                'id' => 3205,
                'name' => 'Podravska',
                'country_id' => 198,
                'arab_name' => 'Podravska',
            ),
            199 =>
            array (
                'id' => 3206,
                'name' => 'Pomurska',
                'country_id' => 198,
                'arab_name' => 'Pomurska',
            ),
            200 =>
            array (
                'id' => 3207,
                'name' => 'Savinjska',
                'country_id' => 198,
                'arab_name' => 'Savinjska',
            ),
            201 =>
            array (
                'id' => 3208,
                'name' => 'Slovenian Littoral',
                'country_id' => 198,
                'arab_name' => 'Slovenian Littoral',
            ),
            202 =>
            array (
                'id' => 3209,
                'name' => 'Spodnjeposavska',
                'country_id' => 198,
                'arab_name' => 'Spodnjeposavska',
            ),
            203 =>
            array (
                'id' => 3210,
                'name' => 'Zasavska',
                'country_id' => 198,
                'arab_name' => 'Zasavska',
            ),
            204 =>
            array (
                'id' => 3211,
                'name' => 'Pitcairn',
                'country_id' => 199,
                'arab_name' => 'Pitcairn',
            ),
            205 =>
            array (
                'id' => 3212,
                'name' => 'Central',
                'country_id' => 200,
                'arab_name' => 'Central',
            ),
            206 =>
            array (
                'id' => 3213,
                'name' => 'Choiseul',
                'country_id' => 200,
                'arab_name' => 'Choiseul',
            ),
            207 =>
            array (
                'id' => 3214,
                'name' => 'Guadalcanal',
                'country_id' => 200,
                'arab_name' => 'Guadalcanal',
            ),
            208 =>
            array (
                'id' => 3215,
                'name' => 'Isabel',
                'country_id' => 200,
                'arab_name' => 'Isabel',
            ),
            209 =>
            array (
                'id' => 3216,
                'name' => 'Makira and Ulawa',
                'country_id' => 200,
                'arab_name' => 'Makira and Ulawa',
            ),
            210 =>
            array (
                'id' => 3217,
                'name' => 'Malaita',
                'country_id' => 200,
                'arab_name' => 'Malaita',
            ),
            211 =>
            array (
                'id' => 3218,
                'name' => 'Rennell and Bellona',
                'country_id' => 200,
                'arab_name' => 'Rennell and Bellona',
            ),
            212 =>
            array (
                'id' => 3219,
                'name' => 'Temotu',
                'country_id' => 200,
                'arab_name' => 'Temotu',
            ),
            213 =>
            array (
                'id' => 3220,
                'name' => 'Western',
                'country_id' => 200,
                'arab_name' => 'Western',
            ),
            214 =>
            array (
                'id' => 3221,
                'name' => 'Awdal',
                'country_id' => 201,
                'arab_name' => 'Awdal',
            ),
            215 =>
            array (
                'id' => 3222,
                'name' => 'Bakol',
                'country_id' => 201,
                'arab_name' => 'Bakol',
            ),
            216 =>
            array (
                'id' => 3223,
                'name' => 'Banadir',
                'country_id' => 201,
                'arab_name' => 'Banadir',
            ),
            217 =>
            array (
                'id' => 3224,
                'name' => 'Bari',
                'country_id' => 201,
                'arab_name' => 'Bari',
            ),
            218 =>
            array (
                'id' => 3225,
                'name' => 'Bay',
                'country_id' => 201,
                'arab_name' => 'Bay',
            ),
            219 =>
            array (
                'id' => 3226,
                'name' => 'Galgudug',
                'country_id' => 201,
                'arab_name' => 'Galgudug',
            ),
            220 =>
            array (
                'id' => 3227,
                'name' => 'Gedo',
                'country_id' => 201,
                'arab_name' => 'Gedo',
            ),
            221 =>
            array (
                'id' => 3228,
                'name' => 'Hiran',
                'country_id' => 201,
                'arab_name' => 'Hiran',
            ),
            222 =>
            array (
                'id' => 3229,
                'name' => 'Jubbada Hose',
                'country_id' => 201,
                'arab_name' => 'Jubbada Hose',
            ),
            223 =>
            array (
                'id' => 3230,
                'name' => 'Jubbadha Dexe',
                'country_id' => 201,
                'arab_name' => 'Jubbadha Dexe',
            ),
            224 =>
            array (
                'id' => 3231,
                'name' => 'Mudug',
                'country_id' => 201,
                'arab_name' => 'Mudug',
            ),
            225 =>
            array (
                'id' => 3232,
                'name' => 'Nugal',
                'country_id' => 201,
                'arab_name' => 'Nugal',
            ),
            226 =>
            array (
                'id' => 3233,
                'name' => 'Sanag',
                'country_id' => 201,
                'arab_name' => 'Sanag',
            ),
            227 =>
            array (
                'id' => 3234,
                'name' => 'Shabellaha Dhexe',
                'country_id' => 201,
                'arab_name' => 'Shabellaha Dhexe',
            ),
            228 =>
            array (
                'id' => 3235,
                'name' => 'Shabellaha Hose',
                'country_id' => 201,
                'arab_name' => 'Shabellaha Hose',
            ),
            229 =>
            array (
                'id' => 3236,
                'name' => 'Togdher',
                'country_id' => 201,
                'arab_name' => 'Togdher',
            ),
            230 =>
            array (
                'id' => 3237,
                'name' => 'Woqoyi Galbed',
                'country_id' => 201,
                'arab_name' => 'Woqoyi Galbed',
            ),
            231 =>
            array (
                'id' => 3238,
                'name' => 'Eastern Cape',
                'country_id' => 202,
                'arab_name' => 'Eastern Cape',
            ),
            232 =>
            array (
                'id' => 3239,
                'name' => 'Free State',
                'country_id' => 202,
                'arab_name' => 'Free State',
            ),
            233 =>
            array (
                'id' => 3240,
                'name' => 'Gauteng',
                'country_id' => 202,
                'arab_name' => 'Gauteng',
            ),
            234 =>
            array (
                'id' => 3241,
                'name' => 'Kempton Park',
                'country_id' => 202,
                'arab_name' => 'Kempton Park',
            ),
            235 =>
            array (
                'id' => 3242,
                'name' => 'Kramerville',
                'country_id' => 202,
                'arab_name' => 'Kramerville',
            ),
            236 =>
            array (
                'id' => 3243,
                'name' => 'KwaZulu Natal',
                'country_id' => 202,
                'arab_name' => 'KwaZulu Natal',
            ),
            237 =>
            array (
                'id' => 3244,
                'name' => 'Limpopo',
                'country_id' => 202,
                'arab_name' => 'Limpopo',
            ),
            238 =>
            array (
                'id' => 3245,
                'name' => 'Mpumalanga',
                'country_id' => 202,
                'arab_name' => 'Mpumalanga',
            ),
            239 =>
            array (
                'id' => 3246,
                'name' => 'North West',
                'country_id' => 202,
                'arab_name' => 'North West',
            ),
            240 =>
            array (
                'id' => 3247,
                'name' => 'Northern Cape',
                'country_id' => 202,
                'arab_name' => 'Northern Cape',
            ),
            241 =>
            array (
                'id' => 3248,
                'name' => 'Parow',
                'country_id' => 202,
                'arab_name' => 'Parow',
            ),
            242 =>
            array (
                'id' => 3249,
                'name' => 'Table View',
                'country_id' => 202,
                'arab_name' => 'Table View',
            ),
            243 =>
            array (
                'id' => 3250,
                'name' => 'Umtentweni',
                'country_id' => 202,
                'arab_name' => 'Umtentweni',
            ),
            244 =>
            array (
                'id' => 3251,
                'name' => 'Western Cape',
                'country_id' => 202,
                'arab_name' => 'Western Cape',
            ),
            245 =>
            array (
                'id' => 3252,
                'name' => 'South Georgia',
                'country_id' => 203,
                'arab_name' => 'South Georgia',
            ),
            246 =>
            array (
                'id' => 3253,
                'name' => 'Central Equatoria',
                'country_id' => 204,
                'arab_name' => 'Central Equatoria',
            ),
            247 =>
            array (
                'id' => 3254,
                'name' => 'A Coruna',
                'country_id' => 205,
                'arab_name' => 'A Coruna',
            ),
            248 =>
            array (
                'id' => 3255,
                'name' => 'Alacant',
                'country_id' => 205,
                'arab_name' => 'Alacant',
            ),
            249 =>
            array (
                'id' => 3256,
                'name' => 'Alava',
                'country_id' => 205,
                'arab_name' => 'Alava',
            ),
            250 =>
            array (
                'id' => 3257,
                'name' => 'Albacete',
                'country_id' => 205,
                'arab_name' => 'Albacete',
            ),
            251 =>
            array (
                'id' => 3258,
                'name' => 'Almeria',
                'country_id' => 205,
                'arab_name' => 'Almeria',
            ),
            252 =>
            array (
                'id' => 3259,
                'name' => 'Andalucia',
                'country_id' => 205,
                'arab_name' => 'Andalucia',
            ),
            253 =>
            array (
                'id' => 3260,
                'name' => 'Asturias',
                'country_id' => 205,
                'arab_name' => 'Asturias',
            ),
            254 =>
            array (
                'id' => 3261,
                'name' => 'Avila',
                'country_id' => 205,
                'arab_name' => 'Avila',
            ),
            255 =>
            array (
                'id' => 3262,
                'name' => 'Badajoz',
                'country_id' => 205,
                'arab_name' => 'Badajoz',
            ),
            256 =>
            array (
                'id' => 3263,
                'name' => 'Balears',
                'country_id' => 205,
                'arab_name' => 'Balears',
            ),
            257 =>
            array (
                'id' => 3264,
                'name' => 'Barcelona',
                'country_id' => 205,
                'arab_name' => 'Barcelona',
            ),
            258 =>
            array (
                'id' => 3265,
                'name' => 'Bertamirans',
                'country_id' => 205,
                'arab_name' => 'Bertamirans',
            ),
            259 =>
            array (
                'id' => 3266,
                'name' => 'Biscay',
                'country_id' => 205,
                'arab_name' => 'Biscay',
            ),
            260 =>
            array (
                'id' => 3267,
                'name' => 'Burgos',
                'country_id' => 205,
                'arab_name' => 'Burgos',
            ),
            261 =>
            array (
                'id' => 3268,
                'name' => 'Caceres',
                'country_id' => 205,
                'arab_name' => 'Caceres',
            ),
            262 =>
            array (
                'id' => 3269,
                'name' => 'Cadiz',
                'country_id' => 205,
                'arab_name' => 'Cadiz',
            ),
            263 =>
            array (
                'id' => 3270,
                'name' => 'Cantabria',
                'country_id' => 205,
                'arab_name' => 'Cantabria',
            ),
            264 =>
            array (
                'id' => 3271,
                'name' => 'Castello',
                'country_id' => 205,
                'arab_name' => 'Castello',
            ),
            265 =>
            array (
                'id' => 3272,
                'name' => 'Catalunya',
                'country_id' => 205,
                'arab_name' => 'Catalunya',
            ),
            266 =>
            array (
                'id' => 3273,
                'name' => 'Ceuta',
                'country_id' => 205,
                'arab_name' => 'Ceuta',
            ),
            267 =>
            array (
                'id' => 3274,
                'name' => 'Ciudad Real',
                'country_id' => 205,
                'arab_name' => 'Ciudad Real',
            ),
            268 =>
            array (
                'id' => 3275,
                'name' => 'Comunidad Autonoma de Canarias',
                'country_id' => 205,
                'arab_name' => 'Comunidad Autonoma de Canarias',
            ),
            269 =>
            array (
                'id' => 3276,
                'name' => 'Comunidad Autonoma de Cataluna',
                'country_id' => 205,
                'arab_name' => 'Comunidad Autonoma de Cataluna',
            ),
            270 =>
            array (
                'id' => 3277,
                'name' => 'Comunidad Autonoma de Galicia',
                'country_id' => 205,
                'arab_name' => 'Comunidad Autonoma de Galicia',
            ),
            271 =>
            array (
                'id' => 3278,
                'name' => 'Comunidad Autonoma de las Isla',
                'country_id' => 205,
                'arab_name' => 'Comunidad Autonoma de las Isla',
            ),
            272 =>
            array (
                'id' => 3279,
                'name' => 'Comunidad Autonoma del Princip',
                'country_id' => 205,
                'arab_name' => 'Comunidad Autonoma del Princip',
            ),
            273 =>
            array (
                'id' => 3280,
                'name' => 'Comunidad Valenciana',
                'country_id' => 205,
                'arab_name' => 'Comunidad Valenciana',
            ),
            274 =>
            array (
                'id' => 3281,
                'name' => 'Cordoba',
                'country_id' => 205,
                'arab_name' => 'Cordoba',
            ),
            275 =>
            array (
                'id' => 3282,
                'name' => 'Cuenca',
                'country_id' => 205,
                'arab_name' => 'Cuenca',
            ),
            276 =>
            array (
                'id' => 3283,
                'name' => 'Gipuzkoa',
                'country_id' => 205,
                'arab_name' => 'Gipuzkoa',
            ),
            277 =>
            array (
                'id' => 3284,
                'name' => 'Girona',
                'country_id' => 205,
                'arab_name' => 'Girona',
            ),
            278 =>
            array (
                'id' => 3285,
                'name' => 'Granada',
                'country_id' => 205,
                'arab_name' => 'Granada',
            ),
            279 =>
            array (
                'id' => 3286,
                'name' => 'Guadalajara',
                'country_id' => 205,
                'arab_name' => 'Guadalajara',
            ),
            280 =>
            array (
                'id' => 3287,
                'name' => 'Guipuzcoa',
                'country_id' => 205,
                'arab_name' => 'Guipuzcoa',
            ),
            281 =>
            array (
                'id' => 3288,
                'name' => 'Huelva',
                'country_id' => 205,
                'arab_name' => 'Huelva',
            ),
            282 =>
            array (
                'id' => 3289,
                'name' => 'Huesca',
                'country_id' => 205,
                'arab_name' => 'Huesca',
            ),
            283 =>
            array (
                'id' => 3290,
                'name' => 'Jaen',
                'country_id' => 205,
                'arab_name' => 'Jaen',
            ),
            284 =>
            array (
                'id' => 3291,
                'name' => 'La Rioja',
                'country_id' => 205,
                'arab_name' => 'La Rioja',
            ),
            285 =>
            array (
                'id' => 3292,
                'name' => 'Las Palmas',
                'country_id' => 205,
                'arab_name' => 'Las Palmas',
            ),
            286 =>
            array (
                'id' => 3293,
                'name' => 'Leon',
                'country_id' => 205,
                'arab_name' => 'Leon',
            ),
            287 =>
            array (
                'id' => 3294,
                'name' => 'Lerida',
                'country_id' => 205,
                'arab_name' => 'Lerida',
            ),
            288 =>
            array (
                'id' => 3295,
                'name' => 'Lleida',
                'country_id' => 205,
                'arab_name' => 'Lleida',
            ),
            289 =>
            array (
                'id' => 3296,
                'name' => 'Lugo',
                'country_id' => 205,
                'arab_name' => 'Lugo',
            ),
            290 =>
            array (
                'id' => 3297,
                'name' => 'Madrid',
                'country_id' => 205,
                'arab_name' => 'Madrid',
            ),
            291 =>
            array (
                'id' => 3298,
                'name' => 'Malaga',
                'country_id' => 205,
                'arab_name' => 'Malaga',
            ),
            292 =>
            array (
                'id' => 3299,
                'name' => 'Melilla',
                'country_id' => 205,
                'arab_name' => 'Melilla',
            ),
            293 =>
            array (
                'id' => 3300,
                'name' => 'Murcia',
                'country_id' => 205,
                'arab_name' => 'Murcia',
            ),
            294 =>
            array (
                'id' => 3301,
                'name' => 'Navarra',
                'country_id' => 205,
                'arab_name' => 'Navarra',
            ),
            295 =>
            array (
                'id' => 3302,
                'name' => 'Ourense',
                'country_id' => 205,
                'arab_name' => 'Ourense',
            ),
            296 =>
            array (
                'id' => 3303,
                'name' => 'Pais Vasco',
                'country_id' => 205,
                'arab_name' => 'Pais Vasco',
            ),
            297 =>
            array (
                'id' => 3304,
                'name' => 'Palencia',
                'country_id' => 205,
                'arab_name' => 'Palencia',
            ),
            298 =>
            array (
                'id' => 3305,
                'name' => 'Pontevedra',
                'country_id' => 205,
                'arab_name' => 'Pontevedra',
            ),
            299 =>
            array (
                'id' => 3306,
                'name' => 'Salamanca',
                'country_id' => 205,
                'arab_name' => 'Salamanca',
            ),
            300 =>
            array (
                'id' => 3307,
                'name' => 'Santa Cruz de Tenerife',
                'country_id' => 205,
                'arab_name' => 'Santa Cruz de Tenerife',
            ),
            301 =>
            array (
                'id' => 3308,
                'name' => 'Segovia',
                'country_id' => 205,
                'arab_name' => 'Segovia',
            ),
            302 =>
            array (
                'id' => 3309,
                'name' => 'Sevilla',
                'country_id' => 205,
                'arab_name' => 'Sevilla',
            ),
            303 =>
            array (
                'id' => 3310,
                'name' => 'Soria',
                'country_id' => 205,
                'arab_name' => 'Soria',
            ),
            304 =>
            array (
                'id' => 3311,
                'name' => 'Tarragona',
                'country_id' => 205,
                'arab_name' => 'Tarragona',
            ),
            305 =>
            array (
                'id' => 3312,
                'name' => 'Tenerife',
                'country_id' => 205,
                'arab_name' => 'Tenerife',
            ),
            306 =>
            array (
                'id' => 3313,
                'name' => 'Teruel',
                'country_id' => 205,
                'arab_name' => 'Teruel',
            ),
            307 =>
            array (
                'id' => 3314,
                'name' => 'Toledo',
                'country_id' => 205,
                'arab_name' => 'Toledo',
            ),
            308 =>
            array (
                'id' => 3315,
                'name' => 'Valencia',
                'country_id' => 205,
                'arab_name' => 'Valencia',
            ),
            309 =>
            array (
                'id' => 3316,
                'name' => 'Valladolid',
                'country_id' => 205,
                'arab_name' => 'Valladolid',
            ),
            310 =>
            array (
                'id' => 3317,
                'name' => 'Vizcaya',
                'country_id' => 205,
                'arab_name' => 'Vizcaya',
            ),
            311 =>
            array (
                'id' => 3318,
                'name' => 'Zamora',
                'country_id' => 205,
                'arab_name' => 'Zamora',
            ),
            312 =>
            array (
                'id' => 3319,
                'name' => 'Zaragoza',
                'country_id' => 205,
                'arab_name' => 'Zaragoza',
            ),
            313 =>
            array (
                'id' => 3320,
                'name' => 'Amparai',
                'country_id' => 206,
                'arab_name' => 'Amparai',
            ),
            314 =>
            array (
                'id' => 3321,
                'name' => 'Anuradhapuraya',
                'country_id' => 206,
                'arab_name' => 'Anuradhapuraya',
            ),
            315 =>
            array (
                'id' => 3322,
                'name' => 'Badulla',
                'country_id' => 206,
                'arab_name' => 'Badulla',
            ),
            316 =>
            array (
                'id' => 3323,
                'name' => 'Boralesgamuwa',
                'country_id' => 206,
                'arab_name' => 'Boralesgamuwa',
            ),
            317 =>
            array (
                'id' => 3324,
                'name' => 'Colombo',
                'country_id' => 206,
                'arab_name' => 'Colombo',
            ),
            318 =>
            array (
                'id' => 3325,
                'name' => 'Galla',
                'country_id' => 206,
                'arab_name' => 'Galla',
            ),
            319 =>
            array (
                'id' => 3326,
                'name' => 'Gampaha',
                'country_id' => 206,
                'arab_name' => 'Gampaha',
            ),
            320 =>
            array (
                'id' => 3327,
                'name' => 'Hambantota',
                'country_id' => 206,
                'arab_name' => 'Hambantota',
            ),
            321 =>
            array (
                'id' => 3328,
                'name' => 'Kalatura',
                'country_id' => 206,
                'arab_name' => 'Kalatura',
            ),
            322 =>
            array (
                'id' => 3329,
                'name' => 'Kegalla',
                'country_id' => 206,
                'arab_name' => 'Kegalla',
            ),
            323 =>
            array (
                'id' => 3330,
                'name' => 'Kilinochchi',
                'country_id' => 206,
                'arab_name' => 'Kilinochchi',
            ),
            324 =>
            array (
                'id' => 3331,
                'name' => 'Kurunegala',
                'country_id' => 206,
                'arab_name' => 'Kurunegala',
            ),
            325 =>
            array (
                'id' => 3332,
                'name' => 'Madakalpuwa',
                'country_id' => 206,
                'arab_name' => 'Madakalpuwa',
            ),
            326 =>
            array (
                'id' => 3333,
                'name' => 'Maha Nuwara',
                'country_id' => 206,
                'arab_name' => 'Maha Nuwara',
            ),
            327 =>
            array (
                'id' => 3334,
                'name' => 'Malwana',
                'country_id' => 206,
                'arab_name' => 'Malwana',
            ),
            328 =>
            array (
                'id' => 3335,
                'name' => 'Mannarama',
                'country_id' => 206,
                'arab_name' => 'Mannarama',
            ),
            329 =>
            array (
                'id' => 3336,
                'name' => 'Matale',
                'country_id' => 206,
                'arab_name' => 'Matale',
            ),
            330 =>
            array (
                'id' => 3337,
                'name' => 'Matara',
                'country_id' => 206,
                'arab_name' => 'Matara',
            ),
            331 =>
            array (
                'id' => 3338,
                'name' => 'Monaragala',
                'country_id' => 206,
                'arab_name' => 'Monaragala',
            ),
            332 =>
            array (
                'id' => 3339,
                'name' => 'Mullaitivu',
                'country_id' => 206,
                'arab_name' => 'Mullaitivu',
            ),
            333 =>
            array (
                'id' => 3340,
                'name' => 'North Eastern Province',
                'country_id' => 206,
                'arab_name' => 'North Eastern Province',
            ),
            334 =>
            array (
                'id' => 3341,
                'name' => 'North Western Province',
                'country_id' => 206,
                'arab_name' => 'North Western Province',
            ),
            335 =>
            array (
                'id' => 3342,
                'name' => 'Nuwara Eliya',
                'country_id' => 206,
                'arab_name' => 'Nuwara Eliya',
            ),
            336 =>
            array (
                'id' => 3343,
                'name' => 'Polonnaruwa',
                'country_id' => 206,
                'arab_name' => 'Polonnaruwa',
            ),
            337 =>
            array (
                'id' => 3344,
                'name' => 'Puttalama',
                'country_id' => 206,
                'arab_name' => 'Puttalama',
            ),
            338 =>
            array (
                'id' => 3345,
                'name' => 'Ratnapuraya',
                'country_id' => 206,
                'arab_name' => 'Ratnapuraya',
            ),
            339 =>
            array (
                'id' => 3346,
                'name' => 'Southern Province',
                'country_id' => 206,
                'arab_name' => 'Southern Province',
            ),
            340 =>
            array (
                'id' => 3347,
                'name' => 'Tirikunamalaya',
                'country_id' => 206,
                'arab_name' => 'Tirikunamalaya',
            ),
            341 =>
            array (
                'id' => 3348,
                'name' => 'Tuscany',
                'country_id' => 206,
                'arab_name' => 'Tuscany',
            ),
            342 =>
            array (
                'id' => 3349,
                'name' => 'Vavuniyawa',
                'country_id' => 206,
                'arab_name' => 'Vavuniyawa',
            ),
            343 =>
            array (
                'id' => 3350,
                'name' => 'Western Province',
                'country_id' => 206,
                'arab_name' => 'Western Province',
            ),
            344 =>
            array (
                'id' => 3351,
                'name' => 'Yapanaya',
                'country_id' => 206,
                'arab_name' => 'Yapanaya',
            ),
            345 =>
            array (
                'id' => 3352,
                'name' => 'kadawatha',
                'country_id' => 206,
                'arab_name' => 'kadawatha',
            ),
            346 =>
            array (
                'id' => 3353,
                'name' => 'A\'ali-an-Nil',
                'country_id' => 207,
                'arab_name' => 'A\'ali-an-Nil',
            ),
            347 =>
            array (
                'id' => 3354,
                'name' => 'Bahr-al-Jabal',
                'country_id' => 207,
                'arab_name' => 'Bahr-al-Jabal',
            ),
            348 =>
            array (
                'id' => 3355,
                'name' => 'Central Equatoria',
                'country_id' => 207,
                'arab_name' => 'Central Equatoria',
            ),
            349 =>
            array (
                'id' => 3356,
                'name' => 'Gharb Bahr-al-Ghazal',
                'country_id' => 207,
                'arab_name' => 'Gharb Bahr-al-Ghazal',
            ),
            350 =>
            array (
                'id' => 3357,
                'name' => 'Gharb Darfur',
                'country_id' => 207,
                'arab_name' => 'Gharb Darfur',
            ),
            351 =>
            array (
                'id' => 3358,
                'name' => 'Gharb Kurdufan',
                'country_id' => 207,
                'arab_name' => 'Gharb Kurdufan',
            ),
            352 =>
            array (
                'id' => 3359,
                'name' => 'Gharb-al-Istiwa\'iyah',
                'country_id' => 207,
                'arab_name' => 'Gharb-al-Istiwa\'iyah',
            ),
            353 =>
            array (
                'id' => 3360,
                'name' => 'Janub Darfur',
                'country_id' => 207,
                'arab_name' => 'Janub Darfur',
            ),
            354 =>
            array (
                'id' => 3361,
                'name' => 'Janub Kurdufan',
                'country_id' => 207,
                'arab_name' => 'Janub Kurdufan',
            ),
            355 =>
            array (
                'id' => 3362,
                'name' => 'Junqali',
                'country_id' => 207,
                'arab_name' => 'Junqali',
            ),
            356 =>
            array (
                'id' => 3363,
                'name' => 'Kassala',
                'country_id' => 207,
                'arab_name' => 'Kassala',
            ),
            357 =>
            array (
                'id' => 3364,
                'name' => 'Nahr-an-Nil',
                'country_id' => 207,
                'arab_name' => 'Nahr-an-Nil',
            ),
            358 =>
            array (
                'id' => 3365,
                'name' => 'Shamal Bahr-al-Ghazal',
                'country_id' => 207,
                'arab_name' => 'Shamal Bahr-al-Ghazal',
            ),
            359 =>
            array (
                'id' => 3366,
                'name' => 'Shamal Darfur',
                'country_id' => 207,
                'arab_name' => 'Shamal Darfur',
            ),
            360 =>
            array (
                'id' => 3367,
                'name' => 'Shamal Kurdufan',
                'country_id' => 207,
                'arab_name' => 'Shamal Kurdufan',
            ),
            361 =>
            array (
                'id' => 3368,
                'name' => 'Sharq-al-Istiwa\'iyah',
                'country_id' => 207,
                'arab_name' => 'Sharq-al-Istiwa\'iyah',
            ),
            362 =>
            array (
                'id' => 3369,
                'name' => 'Sinnar',
                'country_id' => 207,
                'arab_name' => 'Sinnar',
            ),
            363 =>
            array (
                'id' => 3370,
                'name' => 'Warab',
                'country_id' => 207,
                'arab_name' => 'Warab',
            ),
            364 =>
            array (
                'id' => 3371,
                'name' => 'Wilayat al Khartum',
                'country_id' => 207,
                'arab_name' => 'Wilayat al Khartum',
            ),
            365 =>
            array (
                'id' => 3372,
                'name' => 'al-Bahr-al-Ahmar',
                'country_id' => 207,
                'arab_name' => 'al-Bahr-al-Ahmar',
            ),
            366 =>
            array (
                'id' => 3373,
                'name' => 'al-Buhayrat',
                'country_id' => 207,
                'arab_name' => 'al-Buhayrat',
            ),
            367 =>
            array (
                'id' => 3374,
                'name' => 'al-Jazirah',
                'country_id' => 207,
                'arab_name' => 'al-Jazirah',
            ),
            368 =>
            array (
                'id' => 3375,
                'name' => 'al-Khartum',
                'country_id' => 207,
                'arab_name' => 'al-Khartum',
            ),
            369 =>
            array (
                'id' => 3376,
                'name' => 'al-Qadarif',
                'country_id' => 207,
                'arab_name' => 'al-Qadarif',
            ),
            370 =>
            array (
                'id' => 3377,
                'name' => 'al-Wahdah',
                'country_id' => 207,
                'arab_name' => 'al-Wahdah',
            ),
            371 =>
            array (
                'id' => 3378,
                'name' => 'an-Nil-al-Abyad',
                'country_id' => 207,
                'arab_name' => 'an-Nil-al-Abyad',
            ),
            372 =>
            array (
                'id' => 3379,
                'name' => 'an-Nil-al-Azraq',
                'country_id' => 207,
                'arab_name' => 'an-Nil-al-Azraq',
            ),
            373 =>
            array (
                'id' => 3380,
                'name' => 'ash-Shamaliyah',
                'country_id' => 207,
                'arab_name' => 'ash-Shamaliyah',
            ),
            374 =>
            array (
                'id' => 3381,
                'name' => 'Brokopondo',
                'country_id' => 208,
                'arab_name' => 'Brokopondo',
            ),
            375 =>
            array (
                'id' => 3382,
                'name' => 'Commewijne',
                'country_id' => 208,
                'arab_name' => 'Commewijne',
            ),
            376 =>
            array (
                'id' => 3383,
                'name' => 'Coronie',
                'country_id' => 208,
                'arab_name' => 'Coronie',
            ),
            377 =>
            array (
                'id' => 3384,
                'name' => 'Marowijne',
                'country_id' => 208,
                'arab_name' => 'Marowijne',
            ),
            378 =>
            array (
                'id' => 3385,
                'name' => 'Nickerie',
                'country_id' => 208,
                'arab_name' => 'Nickerie',
            ),
            379 =>
            array (
                'id' => 3386,
                'name' => 'Para',
                'country_id' => 208,
                'arab_name' => 'Para',
            ),
            380 =>
            array (
                'id' => 3387,
                'name' => 'Paramaribo',
                'country_id' => 208,
                'arab_name' => 'Paramaribo',
            ),
            381 =>
            array (
                'id' => 3388,
                'name' => 'Saramacca',
                'country_id' => 208,
                'arab_name' => 'Saramacca',
            ),
            382 =>
            array (
                'id' => 3389,
                'name' => 'Wanica',
                'country_id' => 208,
                'arab_name' => 'Wanica',
            ),
            383 =>
            array (
                'id' => 3390,
                'name' => 'Svalbard',
                'country_id' => 209,
                'arab_name' => 'Svalbard',
            ),
            384 =>
            array (
                'id' => 3391,
                'name' => 'Hhohho',
                'country_id' => 210,
                'arab_name' => 'Hhohho',
            ),
            385 =>
            array (
                'id' => 3392,
                'name' => 'Lubombo',
                'country_id' => 210,
                'arab_name' => 'Lubombo',
            ),
            386 =>
            array (
                'id' => 3393,
                'name' => 'Manzini',
                'country_id' => 210,
                'arab_name' => 'Manzini',
            ),
            387 =>
            array (
                'id' => 3394,
                'name' => 'Shiselweni',
                'country_id' => 210,
                'arab_name' => 'Shiselweni',
            ),
            388 =>
            array (
                'id' => 3395,
                'name' => 'Alvsborgs Lan',
                'country_id' => 211,
                'arab_name' => 'Alvsborgs Lan',
            ),
            389 =>
            array (
                'id' => 3396,
                'name' => 'Angermanland',
                'country_id' => 211,
                'arab_name' => 'Angermanland',
            ),
            390 =>
            array (
                'id' => 3397,
                'name' => 'Blekinge',
                'country_id' => 211,
                'arab_name' => 'Blekinge',
            ),
            391 =>
            array (
                'id' => 3398,
                'name' => 'Bohuslan',
                'country_id' => 211,
                'arab_name' => 'Bohuslan',
            ),
            392 =>
            array (
                'id' => 3399,
                'name' => 'Dalarna',
                'country_id' => 211,
                'arab_name' => 'Dalarna',
            ),
            393 =>
            array (
                'id' => 3400,
                'name' => 'Gavleborg',
                'country_id' => 211,
                'arab_name' => 'Gavleborg',
            ),
            394 =>
            array (
                'id' => 3401,
                'name' => 'Gaza',
                'country_id' => 211,
                'arab_name' => 'Gaza',
            ),
            395 =>
            array (
                'id' => 3402,
                'name' => 'Gotland',
                'country_id' => 211,
                'arab_name' => 'Gotland',
            ),
            396 =>
            array (
                'id' => 3403,
                'name' => 'Halland',
                'country_id' => 211,
                'arab_name' => 'Halland',
            ),
            397 =>
            array (
                'id' => 3404,
                'name' => 'Jamtland',
                'country_id' => 211,
                'arab_name' => 'Jamtland',
            ),
            398 =>
            array (
                'id' => 3405,
                'name' => 'Jonkoping',
                'country_id' => 211,
                'arab_name' => 'Jonkoping',
            ),
            399 =>
            array (
                'id' => 3406,
                'name' => 'Kalmar',
                'country_id' => 211,
                'arab_name' => 'Kalmar',
            ),
            400 =>
            array (
                'id' => 3407,
                'name' => 'Kristianstads',
                'country_id' => 211,
                'arab_name' => 'Kristianstads',
            ),
            401 =>
            array (
                'id' => 3408,
                'name' => 'Kronoberg',
                'country_id' => 211,
                'arab_name' => 'Kronoberg',
            ),
            402 =>
            array (
                'id' => 3409,
                'name' => 'Norrbotten',
                'country_id' => 211,
                'arab_name' => 'Norrbotten',
            ),
            403 =>
            array (
                'id' => 3410,
                'name' => 'Orebro',
                'country_id' => 211,
                'arab_name' => 'Orebro',
            ),
            404 =>
            array (
                'id' => 3411,
                'name' => 'Ostergotland',
                'country_id' => 211,
                'arab_name' => 'Ostergotland',
            ),
            405 =>
            array (
                'id' => 3412,
                'name' => 'Saltsjo-Boo',
                'country_id' => 211,
                'arab_name' => 'Saltsjo-Boo',
            ),
            406 =>
            array (
                'id' => 3413,
                'name' => 'Skane',
                'country_id' => 211,
                'arab_name' => 'Skane',
            ),
            407 =>
            array (
                'id' => 3414,
                'name' => 'Smaland',
                'country_id' => 211,
                'arab_name' => 'Smaland',
            ),
            408 =>
            array (
                'id' => 3415,
                'name' => 'Sodermanland',
                'country_id' => 211,
                'arab_name' => 'Sodermanland',
            ),
            409 =>
            array (
                'id' => 3416,
                'name' => 'Stockholm',
                'country_id' => 211,
                'arab_name' => 'Stockholm',
            ),
            410 =>
            array (
                'id' => 3417,
                'name' => 'Uppsala',
                'country_id' => 211,
                'arab_name' => 'Uppsala',
            ),
            411 =>
            array (
                'id' => 3418,
                'name' => 'Varmland',
                'country_id' => 211,
                'arab_name' => 'Varmland',
            ),
            412 =>
            array (
                'id' => 3419,
                'name' => 'Vasterbotten',
                'country_id' => 211,
                'arab_name' => 'Vasterbotten',
            ),
            413 =>
            array (
                'id' => 3420,
                'name' => 'Vastergotland',
                'country_id' => 211,
                'arab_name' => 'Vastergotland',
            ),
            414 =>
            array (
                'id' => 3421,
                'name' => 'Vasternorrland',
                'country_id' => 211,
                'arab_name' => 'Vasternorrland',
            ),
            415 =>
            array (
                'id' => 3422,
                'name' => 'Vastmanland',
                'country_id' => 211,
                'arab_name' => 'Vastmanland',
            ),
            416 =>
            array (
                'id' => 3423,
                'name' => 'Vastra Gotaland',
                'country_id' => 211,
                'arab_name' => 'Vastra Gotaland',
            ),
            417 =>
            array (
                'id' => 3424,
                'name' => 'Aargau',
                'country_id' => 212,
                'arab_name' => 'Aargau',
            ),
            418 =>
            array (
                'id' => 3425,
                'name' => 'Appenzell Inner-Rhoden',
                'country_id' => 212,
                'arab_name' => 'Appenzell Inner-Rhoden',
            ),
            419 =>
            array (
                'id' => 3426,
                'name' => 'Appenzell-Ausser Rhoden',
                'country_id' => 212,
                'arab_name' => 'Appenzell-Ausser Rhoden',
            ),
            420 =>
            array (
                'id' => 3427,
                'name' => 'Basel-Landschaft',
                'country_id' => 212,
                'arab_name' => 'Basel-Landschaft',
            ),
            421 =>
            array (
                'id' => 3428,
                'name' => 'Basel-Stadt',
                'country_id' => 212,
                'arab_name' => 'Basel-Stadt',
            ),
            422 =>
            array (
                'id' => 3429,
                'name' => 'Bern',
                'country_id' => 212,
                'arab_name' => 'Bern',
            ),
            423 =>
            array (
                'id' => 3430,
                'name' => 'Canton Ticino',
                'country_id' => 212,
                'arab_name' => 'Canton Ticino',
            ),
            424 =>
            array (
                'id' => 3431,
                'name' => 'Fribourg',
                'country_id' => 212,
                'arab_name' => 'Fribourg',
            ),
            425 =>
            array (
                'id' => 3432,
                'name' => 'Geneve',
                'country_id' => 212,
                'arab_name' => 'Geneve',
            ),
            426 =>
            array (
                'id' => 3433,
                'name' => 'Glarus',
                'country_id' => 212,
                'arab_name' => 'Glarus',
            ),
            427 =>
            array (
                'id' => 3434,
                'name' => 'Graubunden',
                'country_id' => 212,
                'arab_name' => 'Graubunden',
            ),
            428 =>
            array (
                'id' => 3435,
                'name' => 'Heerbrugg',
                'country_id' => 212,
                'arab_name' => 'Heerbrugg',
            ),
            429 =>
            array (
                'id' => 3436,
                'name' => 'Jura',
                'country_id' => 212,
                'arab_name' => 'Jura',
            ),
            430 =>
            array (
                'id' => 3437,
                'name' => 'Kanton Aargau',
                'country_id' => 212,
                'arab_name' => 'Kanton Aargau',
            ),
            431 =>
            array (
                'id' => 3438,
                'name' => 'Luzern',
                'country_id' => 212,
                'arab_name' => 'Luzern',
            ),
            432 =>
            array (
                'id' => 3439,
                'name' => 'Morbio Inferiore',
                'country_id' => 212,
                'arab_name' => 'Morbio Inferiore',
            ),
            433 =>
            array (
                'id' => 3440,
                'name' => 'Muhen',
                'country_id' => 212,
                'arab_name' => 'Muhen',
            ),
            434 =>
            array (
                'id' => 3441,
                'name' => 'Neuchatel',
                'country_id' => 212,
                'arab_name' => 'Neuchatel',
            ),
            435 =>
            array (
                'id' => 3442,
                'name' => 'Nidwalden',
                'country_id' => 212,
                'arab_name' => 'Nidwalden',
            ),
            436 =>
            array (
                'id' => 3443,
                'name' => 'Obwalden',
                'country_id' => 212,
                'arab_name' => 'Obwalden',
            ),
            437 =>
            array (
                'id' => 3444,
                'name' => 'Sankt Gallen',
                'country_id' => 212,
                'arab_name' => 'Sankt Gallen',
            ),
            438 =>
            array (
                'id' => 3445,
                'name' => 'Schaffhausen',
                'country_id' => 212,
                'arab_name' => 'Schaffhausen',
            ),
            439 =>
            array (
                'id' => 3446,
                'name' => 'Schwyz',
                'country_id' => 212,
                'arab_name' => 'Schwyz',
            ),
            440 =>
            array (
                'id' => 3447,
                'name' => 'Solothurn',
                'country_id' => 212,
                'arab_name' => 'Solothurn',
            ),
            441 =>
            array (
                'id' => 3448,
                'name' => 'Thurgau',
                'country_id' => 212,
                'arab_name' => 'Thurgau',
            ),
            442 =>
            array (
                'id' => 3449,
                'name' => 'Ticino',
                'country_id' => 212,
                'arab_name' => 'Ticino',
            ),
            443 =>
            array (
                'id' => 3450,
                'name' => 'Uri',
                'country_id' => 212,
                'arab_name' => 'Uri',
            ),
            444 =>
            array (
                'id' => 3451,
                'name' => 'Valais',
                'country_id' => 212,
                'arab_name' => 'Valais',
            ),
            445 =>
            array (
                'id' => 3452,
                'name' => 'Vaud',
                'country_id' => 212,
                'arab_name' => 'Vaud',
            ),
            446 =>
            array (
                'id' => 3453,
                'name' => 'Vauffelin',
                'country_id' => 212,
                'arab_name' => 'Vauffelin',
            ),
            447 =>
            array (
                'id' => 3454,
                'name' => 'Zug',
                'country_id' => 212,
                'arab_name' => 'Zug',
            ),
            448 =>
            array (
                'id' => 3455,
                'name' => 'Zurich',
                'country_id' => 212,
                'arab_name' => 'Zurich',
            ),
            449 =>
            array (
                'id' => 3456,
                'name' => 'Aleppo',
                'country_id' => 213,
                'arab_name' => 'Aleppo',
            ),
            450 =>
            array (
                'id' => 3457,
                'name' => 'Dar\'a',
                'country_id' => 213,
                'arab_name' => 'Dar\'a',
            ),
            451 =>
            array (
                'id' => 3458,
                'name' => 'Dayr-az-Zawr',
                'country_id' => 213,
                'arab_name' => 'Dayr-az-Zawr',
            ),
            452 =>
            array (
                'id' => 3459,
                'name' => 'Dimashq',
                'country_id' => 213,
                'arab_name' => 'Dimashq',
            ),
            453 =>
            array (
                'id' => 3460,
                'name' => 'Halab',
                'country_id' => 213,
                'arab_name' => 'Halab',
            ),
            454 =>
            array (
                'id' => 3461,
                'name' => 'Hamah',
                'country_id' => 213,
                'arab_name' => 'Hamah',
            ),
            455 =>
            array (
                'id' => 3462,
                'name' => 'Hims',
                'country_id' => 213,
                'arab_name' => 'Hims',
            ),
            456 =>
            array (
                'id' => 3463,
                'name' => 'Idlib',
                'country_id' => 213,
                'arab_name' => 'Idlib',
            ),
            457 =>
            array (
                'id' => 3464,
                'name' => 'Madinat Dimashq',
                'country_id' => 213,
                'arab_name' => 'Madinat Dimashq',
            ),
            458 =>
            array (
                'id' => 3465,
                'name' => 'Tartus',
                'country_id' => 213,
                'arab_name' => 'Tartus',
            ),
            459 =>
            array (
                'id' => 3466,
                'name' => 'al-Hasakah',
                'country_id' => 213,
                'arab_name' => 'al-Hasakah',
            ),
            460 =>
            array (
                'id' => 3467,
                'name' => 'al-Ladhiqiyah',
                'country_id' => 213,
                'arab_name' => 'al-Ladhiqiyah',
            ),
            461 =>
            array (
                'id' => 3468,
                'name' => 'al-Qunaytirah',
                'country_id' => 213,
                'arab_name' => 'al-Qunaytirah',
            ),
            462 =>
            array (
                'id' => 3469,
                'name' => 'ar-Raqqah',
                'country_id' => 213,
                'arab_name' => 'ar-Raqqah',
            ),
            463 =>
            array (
                'id' => 3470,
                'name' => 'as-Suwayda',
                'country_id' => 213,
                'arab_name' => 'as-Suwayda',
            ),
            464 =>
            array (
                'id' => 3471,
                'name' => 'Changhwa',
                'country_id' => 214,
                'arab_name' => 'Changhwa',
            ),
            465 =>
            array (
                'id' => 3472,
                'name' => 'Chiayi Hsien',
                'country_id' => 214,
                'arab_name' => 'Chiayi Hsien',
            ),
            466 =>
            array (
                'id' => 3473,
                'name' => 'Chiayi Shih',
                'country_id' => 214,
                'arab_name' => 'Chiayi Shih',
            ),
            467 =>
            array (
                'id' => 3474,
                'name' => 'Eastern Taipei',
                'country_id' => 214,
                'arab_name' => 'Eastern Taipei',
            ),
            468 =>
            array (
                'id' => 3475,
                'name' => 'Hsinchu Hsien',
                'country_id' => 214,
                'arab_name' => 'Hsinchu Hsien',
            ),
            469 =>
            array (
                'id' => 3476,
                'name' => 'Hsinchu Shih',
                'country_id' => 214,
                'arab_name' => 'Hsinchu Shih',
            ),
            470 =>
            array (
                'id' => 3477,
                'name' => 'Hualien',
                'country_id' => 214,
                'arab_name' => 'Hualien',
            ),
            471 =>
            array (
                'id' => 3478,
                'name' => 'Ilan',
                'country_id' => 214,
                'arab_name' => 'Ilan',
            ),
            472 =>
            array (
                'id' => 3479,
                'name' => 'Kaohsiung Hsien',
                'country_id' => 214,
                'arab_name' => 'Kaohsiung Hsien',
            ),
            473 =>
            array (
                'id' => 3480,
                'name' => 'Kaohsiung Shih',
                'country_id' => 214,
                'arab_name' => 'Kaohsiung Shih',
            ),
            474 =>
            array (
                'id' => 3481,
                'name' => 'Keelung Shih',
                'country_id' => 214,
                'arab_name' => 'Keelung Shih',
            ),
            475 =>
            array (
                'id' => 3482,
                'name' => 'Kinmen',
                'country_id' => 214,
                'arab_name' => 'Kinmen',
            ),
            476 =>
            array (
                'id' => 3483,
                'name' => 'Miaoli',
                'country_id' => 214,
                'arab_name' => 'Miaoli',
            ),
            477 =>
            array (
                'id' => 3484,
                'name' => 'Nantou',
                'country_id' => 214,
                'arab_name' => 'Nantou',
            ),
            478 =>
            array (
                'id' => 3485,
                'name' => 'Northern Taiwan',
                'country_id' => 214,
                'arab_name' => 'Northern Taiwan',
            ),
            479 =>
            array (
                'id' => 3486,
                'name' => 'Penghu',
                'country_id' => 214,
                'arab_name' => 'Penghu',
            ),
            480 =>
            array (
                'id' => 3487,
                'name' => 'Pingtung',
                'country_id' => 214,
                'arab_name' => 'Pingtung',
            ),
            481 =>
            array (
                'id' => 3488,
                'name' => 'Taichung',
                'country_id' => 214,
                'arab_name' => 'Taichung',
            ),
            482 =>
            array (
                'id' => 3489,
                'name' => 'Taichung Hsien',
                'country_id' => 214,
                'arab_name' => 'Taichung Hsien',
            ),
            483 =>
            array (
                'id' => 3490,
                'name' => 'Taichung Shih',
                'country_id' => 214,
                'arab_name' => 'Taichung Shih',
            ),
            484 =>
            array (
                'id' => 3491,
                'name' => 'Tainan Hsien',
                'country_id' => 214,
                'arab_name' => 'Tainan Hsien',
            ),
            485 =>
            array (
                'id' => 3492,
                'name' => 'Tainan Shih',
                'country_id' => 214,
                'arab_name' => 'Tainan Shih',
            ),
            486 =>
            array (
                'id' => 3493,
                'name' => 'Taipei Hsien',
                'country_id' => 214,
                'arab_name' => 'Taipei Hsien',
            ),
            487 =>
            array (
                'id' => 3494,
                'name' => 'Taipei Shih / Taipei Hsien',
                'country_id' => 214,
                'arab_name' => 'Taipei Shih / Taipei Hsien',
            ),
            488 =>
            array (
                'id' => 3495,
                'name' => 'Taitung',
                'country_id' => 214,
                'arab_name' => 'Taitung',
            ),
            489 =>
            array (
                'id' => 3496,
                'name' => 'Taoyuan',
                'country_id' => 214,
                'arab_name' => 'Taoyuan',
            ),
            490 =>
            array (
                'id' => 3497,
                'name' => 'Yilan',
                'country_id' => 214,
                'arab_name' => 'Yilan',
            ),
            491 =>
            array (
                'id' => 3498,
                'name' => 'Yun-Lin Hsien',
                'country_id' => 214,
                'arab_name' => 'Yun-Lin Hsien',
            ),
            492 =>
            array (
                'id' => 3499,
                'name' => 'Yunlin',
                'country_id' => 214,
                'arab_name' => 'Yunlin',
            ),
            493 =>
            array (
                'id' => 3500,
                'name' => 'Dushanbe',
                'country_id' => 215,
                'arab_name' => 'Dushanbe',
            ),
            494 =>
            array (
                'id' => 3501,
                'name' => 'Gorno-Badakhshan',
                'country_id' => 215,
                'arab_name' => 'Gorno-Badakhshan',
            ),
            495 =>
            array (
                'id' => 3502,
                'name' => 'Karotegin',
                'country_id' => 215,
                'arab_name' => 'Karotegin',
            ),
            496 =>
            array (
                'id' => 3503,
                'name' => 'Khatlon',
                'country_id' => 215,
                'arab_name' => 'Khatlon',
            ),
            497 =>
            array (
                'id' => 3504,
                'name' => 'Sughd',
                'country_id' => 215,
                'arab_name' => 'Sughd',
            ),
            498 =>
            array (
                'id' => 3505,
                'name' => 'Arusha',
                'country_id' => 216,
                'arab_name' => 'Arusha',
            ),
            499 =>
            array (
                'id' => 3506,
                'name' => 'Dar es Salaam',
                'country_id' => 216,
                'arab_name' => 'Dar es Salaam',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 3507,
                'name' => 'Dodoma',
                'country_id' => 216,
                'arab_name' => 'Dodoma',
            ),
            1 =>
            array (
                'id' => 3508,
                'name' => 'Iringa',
                'country_id' => 216,
                'arab_name' => 'Iringa',
            ),
            2 =>
            array (
                'id' => 3509,
                'name' => 'Kagera',
                'country_id' => 216,
                'arab_name' => 'Kagera',
            ),
            3 =>
            array (
                'id' => 3510,
                'name' => 'Kigoma',
                'country_id' => 216,
                'arab_name' => 'Kigoma',
            ),
            4 =>
            array (
                'id' => 3511,
                'name' => 'Kilimanjaro',
                'country_id' => 216,
                'arab_name' => 'Kilimanjaro',
            ),
            5 =>
            array (
                'id' => 3512,
                'name' => 'Lindi',
                'country_id' => 216,
                'arab_name' => 'Lindi',
            ),
            6 =>
            array (
                'id' => 3513,
                'name' => 'Mara',
                'country_id' => 216,
                'arab_name' => 'Mara',
            ),
            7 =>
            array (
                'id' => 3514,
                'name' => 'Mbeya',
                'country_id' => 216,
                'arab_name' => 'Mbeya',
            ),
            8 =>
            array (
                'id' => 3515,
                'name' => 'Morogoro',
                'country_id' => 216,
                'arab_name' => 'Morogoro',
            ),
            9 =>
            array (
                'id' => 3516,
                'name' => 'Mtwara',
                'country_id' => 216,
                'arab_name' => 'Mtwara',
            ),
            10 =>
            array (
                'id' => 3517,
                'name' => 'Mwanza',
                'country_id' => 216,
                'arab_name' => 'Mwanza',
            ),
            11 =>
            array (
                'id' => 3518,
                'name' => 'Pwani',
                'country_id' => 216,
                'arab_name' => 'Pwani',
            ),
            12 =>
            array (
                'id' => 3519,
                'name' => 'Rukwa',
                'country_id' => 216,
                'arab_name' => 'Rukwa',
            ),
            13 =>
            array (
                'id' => 3520,
                'name' => 'Ruvuma',
                'country_id' => 216,
                'arab_name' => 'Ruvuma',
            ),
            14 =>
            array (
                'id' => 3521,
                'name' => 'Shinyanga',
                'country_id' => 216,
                'arab_name' => 'Shinyanga',
            ),
            15 =>
            array (
                'id' => 3522,
                'name' => 'Singida',
                'country_id' => 216,
                'arab_name' => 'Singida',
            ),
            16 =>
            array (
                'id' => 3523,
                'name' => 'Tabora',
                'country_id' => 216,
                'arab_name' => 'Tabora',
            ),
            17 =>
            array (
                'id' => 3524,
                'name' => 'Tanga',
                'country_id' => 216,
                'arab_name' => 'Tanga',
            ),
            18 =>
            array (
                'id' => 3525,
                'name' => 'Zanzibar and Pemba',
                'country_id' => 216,
                'arab_name' => 'Zanzibar and Pemba',
            ),
            19 =>
            array (
                'id' => 3526,
                'name' => 'Amnat Charoen',
                'country_id' => 217,
                'arab_name' => 'Amnat Charoen',
            ),
            20 =>
            array (
                'id' => 3527,
                'name' => 'Ang Thong',
                'country_id' => 217,
                'arab_name' => 'Ang Thong',
            ),
            21 =>
            array (
                'id' => 3528,
                'name' => 'Bangkok',
                'country_id' => 217,
                'arab_name' => 'Bangkok',
            ),
            22 =>
            array (
                'id' => 3529,
                'name' => 'Buri Ram',
                'country_id' => 217,
                'arab_name' => 'Buri Ram',
            ),
            23 =>
            array (
                'id' => 3530,
                'name' => 'Chachoengsao',
                'country_id' => 217,
                'arab_name' => 'Chachoengsao',
            ),
            24 =>
            array (
                'id' => 3531,
                'name' => 'Chai Nat',
                'country_id' => 217,
                'arab_name' => 'Chai Nat',
            ),
            25 =>
            array (
                'id' => 3532,
                'name' => 'Chaiyaphum',
                'country_id' => 217,
                'arab_name' => 'Chaiyaphum',
            ),
            26 =>
            array (
                'id' => 3533,
                'name' => 'Changwat Chaiyaphum',
                'country_id' => 217,
                'arab_name' => 'Changwat Chaiyaphum',
            ),
            27 =>
            array (
                'id' => 3534,
                'name' => 'Chanthaburi',
                'country_id' => 217,
                'arab_name' => 'Chanthaburi',
            ),
            28 =>
            array (
                'id' => 3535,
                'name' => 'Chiang Mai',
                'country_id' => 217,
                'arab_name' => 'Chiang Mai',
            ),
            29 =>
            array (
                'id' => 3536,
                'name' => 'Chiang Rai',
                'country_id' => 217,
                'arab_name' => 'Chiang Rai',
            ),
            30 =>
            array (
                'id' => 3537,
                'name' => 'Chon Buri',
                'country_id' => 217,
                'arab_name' => 'Chon Buri',
            ),
            31 =>
            array (
                'id' => 3538,
                'name' => 'Chumphon',
                'country_id' => 217,
                'arab_name' => 'Chumphon',
            ),
            32 =>
            array (
                'id' => 3539,
                'name' => 'Kalasin',
                'country_id' => 217,
                'arab_name' => 'Kalasin',
            ),
            33 =>
            array (
                'id' => 3540,
                'name' => 'Kamphaeng Phet',
                'country_id' => 217,
                'arab_name' => 'Kamphaeng Phet',
            ),
            34 =>
            array (
                'id' => 3541,
                'name' => 'Kanchanaburi',
                'country_id' => 217,
                'arab_name' => 'Kanchanaburi',
            ),
            35 =>
            array (
                'id' => 3542,
                'name' => 'Khon Kaen',
                'country_id' => 217,
                'arab_name' => 'Khon Kaen',
            ),
            36 =>
            array (
                'id' => 3543,
                'name' => 'Krabi',
                'country_id' => 217,
                'arab_name' => 'Krabi',
            ),
            37 =>
            array (
                'id' => 3544,
                'name' => 'Krung Thep',
                'country_id' => 217,
                'arab_name' => 'Krung Thep',
            ),
            38 =>
            array (
                'id' => 3545,
                'name' => 'Lampang',
                'country_id' => 217,
                'arab_name' => 'Lampang',
            ),
            39 =>
            array (
                'id' => 3546,
                'name' => 'Lamphun',
                'country_id' => 217,
                'arab_name' => 'Lamphun',
            ),
            40 =>
            array (
                'id' => 3547,
                'name' => 'Loei',
                'country_id' => 217,
                'arab_name' => 'Loei',
            ),
            41 =>
            array (
                'id' => 3548,
                'name' => 'Lop Buri',
                'country_id' => 217,
                'arab_name' => 'Lop Buri',
            ),
            42 =>
            array (
                'id' => 3549,
                'name' => 'Mae Hong Son',
                'country_id' => 217,
                'arab_name' => 'Mae Hong Son',
            ),
            43 =>
            array (
                'id' => 3550,
                'name' => 'Maha Sarakham',
                'country_id' => 217,
                'arab_name' => 'Maha Sarakham',
            ),
            44 =>
            array (
                'id' => 3551,
                'name' => 'Mukdahan',
                'country_id' => 217,
                'arab_name' => 'Mukdahan',
            ),
            45 =>
            array (
                'id' => 3552,
                'name' => 'Nakhon Nayok',
                'country_id' => 217,
                'arab_name' => 'Nakhon Nayok',
            ),
            46 =>
            array (
                'id' => 3553,
                'name' => 'Nakhon Pathom',
                'country_id' => 217,
                'arab_name' => 'Nakhon Pathom',
            ),
            47 =>
            array (
                'id' => 3554,
                'name' => 'Nakhon Phanom',
                'country_id' => 217,
                'arab_name' => 'Nakhon Phanom',
            ),
            48 =>
            array (
                'id' => 3555,
                'name' => 'Nakhon Ratchasima',
                'country_id' => 217,
                'arab_name' => 'Nakhon Ratchasima',
            ),
            49 =>
            array (
                'id' => 3556,
                'name' => 'Nakhon Sawan',
                'country_id' => 217,
                'arab_name' => 'Nakhon Sawan',
            ),
            50 =>
            array (
                'id' => 3557,
                'name' => 'Nakhon Si Thammarat',
                'country_id' => 217,
                'arab_name' => 'Nakhon Si Thammarat',
            ),
            51 =>
            array (
                'id' => 3558,
                'name' => 'Nan',
                'country_id' => 217,
                'arab_name' => 'Nan',
            ),
            52 =>
            array (
                'id' => 3559,
                'name' => 'Narathiwat',
                'country_id' => 217,
                'arab_name' => 'Narathiwat',
            ),
            53 =>
            array (
                'id' => 3560,
                'name' => 'Nong Bua Lam Phu',
                'country_id' => 217,
                'arab_name' => 'Nong Bua Lam Phu',
            ),
            54 =>
            array (
                'id' => 3561,
                'name' => 'Nong Khai',
                'country_id' => 217,
                'arab_name' => 'Nong Khai',
            ),
            55 =>
            array (
                'id' => 3562,
                'name' => 'Nonthaburi',
                'country_id' => 217,
                'arab_name' => 'Nonthaburi',
            ),
            56 =>
            array (
                'id' => 3563,
                'name' => 'Pathum Thani',
                'country_id' => 217,
                'arab_name' => 'Pathum Thani',
            ),
            57 =>
            array (
                'id' => 3564,
                'name' => 'Pattani',
                'country_id' => 217,
                'arab_name' => 'Pattani',
            ),
            58 =>
            array (
                'id' => 3565,
                'name' => 'Phangnga',
                'country_id' => 217,
                'arab_name' => 'Phangnga',
            ),
            59 =>
            array (
                'id' => 3566,
                'name' => 'Phatthalung',
                'country_id' => 217,
                'arab_name' => 'Phatthalung',
            ),
            60 =>
            array (
                'id' => 3567,
                'name' => 'Phayao',
                'country_id' => 217,
                'arab_name' => 'Phayao',
            ),
            61 =>
            array (
                'id' => 3568,
                'name' => 'Phetchabun',
                'country_id' => 217,
                'arab_name' => 'Phetchabun',
            ),
            62 =>
            array (
                'id' => 3569,
                'name' => 'Phetchaburi',
                'country_id' => 217,
                'arab_name' => 'Phetchaburi',
            ),
            63 =>
            array (
                'id' => 3570,
                'name' => 'Phichit',
                'country_id' => 217,
                'arab_name' => 'Phichit',
            ),
            64 =>
            array (
                'id' => 3571,
                'name' => 'Phitsanulok',
                'country_id' => 217,
                'arab_name' => 'Phitsanulok',
            ),
            65 =>
            array (
                'id' => 3572,
                'name' => 'Phra Nakhon Si Ayutthaya',
                'country_id' => 217,
                'arab_name' => 'Phra Nakhon Si Ayutthaya',
            ),
            66 =>
            array (
                'id' => 3573,
                'name' => 'Phrae',
                'country_id' => 217,
                'arab_name' => 'Phrae',
            ),
            67 =>
            array (
                'id' => 3574,
                'name' => 'Phuket',
                'country_id' => 217,
                'arab_name' => 'Phuket',
            ),
            68 =>
            array (
                'id' => 3575,
                'name' => 'Prachin Buri',
                'country_id' => 217,
                'arab_name' => 'Prachin Buri',
            ),
            69 =>
            array (
                'id' => 3576,
                'name' => 'Prachuap Khiri Khan',
                'country_id' => 217,
                'arab_name' => 'Prachuap Khiri Khan',
            ),
            70 =>
            array (
                'id' => 3577,
                'name' => 'Ranong',
                'country_id' => 217,
                'arab_name' => 'Ranong',
            ),
            71 =>
            array (
                'id' => 3578,
                'name' => 'Ratchaburi',
                'country_id' => 217,
                'arab_name' => 'Ratchaburi',
            ),
            72 =>
            array (
                'id' => 3579,
                'name' => 'Rayong',
                'country_id' => 217,
                'arab_name' => 'Rayong',
            ),
            73 =>
            array (
                'id' => 3580,
                'name' => 'Roi Et',
                'country_id' => 217,
                'arab_name' => 'Roi Et',
            ),
            74 =>
            array (
                'id' => 3581,
                'name' => 'Sa Kaeo',
                'country_id' => 217,
                'arab_name' => 'Sa Kaeo',
            ),
            75 =>
            array (
                'id' => 3582,
                'name' => 'Sakon Nakhon',
                'country_id' => 217,
                'arab_name' => 'Sakon Nakhon',
            ),
            76 =>
            array (
                'id' => 3583,
                'name' => 'Samut Prakan',
                'country_id' => 217,
                'arab_name' => 'Samut Prakan',
            ),
            77 =>
            array (
                'id' => 3584,
                'name' => 'Samut Sakhon',
                'country_id' => 217,
                'arab_name' => 'Samut Sakhon',
            ),
            78 =>
            array (
                'id' => 3585,
                'name' => 'Samut Songkhran',
                'country_id' => 217,
                'arab_name' => 'Samut Songkhran',
            ),
            79 =>
            array (
                'id' => 3586,
                'name' => 'Saraburi',
                'country_id' => 217,
                'arab_name' => 'Saraburi',
            ),
            80 =>
            array (
                'id' => 3587,
                'name' => 'Satun',
                'country_id' => 217,
                'arab_name' => 'Satun',
            ),
            81 =>
            array (
                'id' => 3588,
                'name' => 'Si Sa Ket',
                'country_id' => 217,
                'arab_name' => 'Si Sa Ket',
            ),
            82 =>
            array (
                'id' => 3589,
                'name' => 'Sing Buri',
                'country_id' => 217,
                'arab_name' => 'Sing Buri',
            ),
            83 =>
            array (
                'id' => 3590,
                'name' => 'Songkhla',
                'country_id' => 217,
                'arab_name' => 'Songkhla',
            ),
            84 =>
            array (
                'id' => 3591,
                'name' => 'Sukhothai',
                'country_id' => 217,
                'arab_name' => 'Sukhothai',
            ),
            85 =>
            array (
                'id' => 3592,
                'name' => 'Suphan Buri',
                'country_id' => 217,
                'arab_name' => 'Suphan Buri',
            ),
            86 =>
            array (
                'id' => 3593,
                'name' => 'Surat Thani',
                'country_id' => 217,
                'arab_name' => 'Surat Thani',
            ),
            87 =>
            array (
                'id' => 3594,
                'name' => 'Surin',
                'country_id' => 217,
                'arab_name' => 'Surin',
            ),
            88 =>
            array (
                'id' => 3595,
                'name' => 'Tak',
                'country_id' => 217,
                'arab_name' => 'Tak',
            ),
            89 =>
            array (
                'id' => 3596,
                'name' => 'Trang',
                'country_id' => 217,
                'arab_name' => 'Trang',
            ),
            90 =>
            array (
                'id' => 3597,
                'name' => 'Trat',
                'country_id' => 217,
                'arab_name' => 'Trat',
            ),
            91 =>
            array (
                'id' => 3598,
                'name' => 'Ubon Ratchathani',
                'country_id' => 217,
                'arab_name' => 'Ubon Ratchathani',
            ),
            92 =>
            array (
                'id' => 3599,
                'name' => 'Udon Thani',
                'country_id' => 217,
                'arab_name' => 'Udon Thani',
            ),
            93 =>
            array (
                'id' => 3600,
                'name' => 'Uthai Thani',
                'country_id' => 217,
                'arab_name' => 'Uthai Thani',
            ),
            94 =>
            array (
                'id' => 3601,
                'name' => 'Uttaradit',
                'country_id' => 217,
                'arab_name' => 'Uttaradit',
            ),
            95 =>
            array (
                'id' => 3602,
                'name' => 'Yala',
                'country_id' => 217,
                'arab_name' => 'Yala',
            ),
            96 =>
            array (
                'id' => 3603,
                'name' => 'Yasothon',
                'country_id' => 217,
                'arab_name' => 'Yasothon',
            ),
            97 =>
            array (
                'id' => 3604,
                'name' => 'Centre',
                'country_id' => 218,
                'arab_name' => 'Centre',
            ),
            98 =>
            array (
                'id' => 3605,
                'name' => 'Kara',
                'country_id' => 218,
                'arab_name' => 'Kara',
            ),
            99 =>
            array (
                'id' => 3606,
                'name' => 'Maritime',
                'country_id' => 218,
                'arab_name' => 'Maritime',
            ),
            100 =>
            array (
                'id' => 3607,
                'name' => 'Plateaux',
                'country_id' => 218,
                'arab_name' => 'Plateaux',
            ),
            101 =>
            array (
                'id' => 3608,
                'name' => 'Savanes',
                'country_id' => 218,
                'arab_name' => 'Savanes',
            ),
            102 =>
            array (
                'id' => 3609,
                'name' => 'Atafu',
                'country_id' => 219,
                'arab_name' => 'Atafu',
            ),
            103 =>
            array (
                'id' => 3610,
                'name' => 'Fakaofo',
                'country_id' => 219,
                'arab_name' => 'Fakaofo',
            ),
            104 =>
            array (
                'id' => 3611,
                'name' => 'Nukunonu',
                'country_id' => 219,
                'arab_name' => 'Nukunonu',
            ),
            105 =>
            array (
                'id' => 3612,
                'name' => 'Eua',
                'country_id' => 220,
                'arab_name' => 'Eua',
            ),
            106 =>
            array (
                'id' => 3613,
                'name' => 'Ha\'apai',
                'country_id' => 220,
                'arab_name' => 'Ha\'apai',
            ),
            107 =>
            array (
                'id' => 3614,
                'name' => 'Niuas',
                'country_id' => 220,
                'arab_name' => 'Niuas',
            ),
            108 =>
            array (
                'id' => 3615,
                'name' => 'Tongatapu',
                'country_id' => 220,
                'arab_name' => 'Tongatapu',
            ),
            109 =>
            array (
                'id' => 3616,
                'name' => 'Vava\'u',
                'country_id' => 220,
                'arab_name' => 'Vava\'u',
            ),
            110 =>
            array (
                'id' => 3617,
                'name' => 'Arima-Tunapuna-Piarco',
                'country_id' => 221,
                'arab_name' => 'Arima-Tunapuna-Piarco',
            ),
            111 =>
            array (
                'id' => 3618,
                'name' => 'Caroni',
                'country_id' => 221,
                'arab_name' => 'Caroni',
            ),
            112 =>
            array (
                'id' => 3619,
                'name' => 'Chaguanas',
                'country_id' => 221,
                'arab_name' => 'Chaguanas',
            ),
            113 =>
            array (
                'id' => 3620,
                'name' => 'Couva-Tabaquite-Talparo',
                'country_id' => 221,
                'arab_name' => 'Couva-Tabaquite-Talparo',
            ),
            114 =>
            array (
                'id' => 3621,
                'name' => 'Diego Martin',
                'country_id' => 221,
                'arab_name' => 'Diego Martin',
            ),
            115 =>
            array (
                'id' => 3622,
                'name' => 'Glencoe',
                'country_id' => 221,
                'arab_name' => 'Glencoe',
            ),
            116 =>
            array (
                'id' => 3623,
                'name' => 'Penal Debe',
                'country_id' => 221,
                'arab_name' => 'Penal Debe',
            ),
            117 =>
            array (
                'id' => 3624,
                'name' => 'Point Fortin',
                'country_id' => 221,
                'arab_name' => 'Point Fortin',
            ),
            118 =>
            array (
                'id' => 3625,
                'name' => 'Port of Spain',
                'country_id' => 221,
                'arab_name' => 'Port of Spain',
            ),
            119 =>
            array (
                'id' => 3626,
                'name' => 'Princes Town',
                'country_id' => 221,
                'arab_name' => 'Princes Town',
            ),
            120 =>
            array (
                'id' => 3627,
                'name' => 'Saint George',
                'country_id' => 221,
                'arab_name' => 'Saint George',
            ),
            121 =>
            array (
                'id' => 3628,
                'name' => 'San Fernando',
                'country_id' => 221,
                'arab_name' => 'San Fernando',
            ),
            122 =>
            array (
                'id' => 3629,
                'name' => 'San Juan',
                'country_id' => 221,
                'arab_name' => 'San Juan',
            ),
            123 =>
            array (
                'id' => 3630,
                'name' => 'Sangre Grande',
                'country_id' => 221,
                'arab_name' => 'Sangre Grande',
            ),
            124 =>
            array (
                'id' => 3631,
                'name' => 'Siparia',
                'country_id' => 221,
                'arab_name' => 'Siparia',
            ),
            125 =>
            array (
                'id' => 3632,
                'name' => 'Tobago',
                'country_id' => 221,
                'arab_name' => 'Tobago',
            ),
            126 =>
            array (
                'id' => 3633,
                'name' => 'Aryanah',
                'country_id' => 222,
                'arab_name' => 'Aryanah',
            ),
            127 =>
            array (
                'id' => 3634,
                'name' => 'Bajah',
                'country_id' => 222,
                'arab_name' => 'Bajah',
            ),
            128 =>
            array (
                'id' => 3635,
                'name' => 'Bin \'Arus',
                'country_id' => 222,
                'arab_name' => 'Bin \'Arus',
            ),
            129 =>
            array (
                'id' => 3636,
                'name' => 'Binzart',
                'country_id' => 222,
                'arab_name' => 'Binzart',
            ),
            130 =>
            array (
                'id' => 3637,
                'name' => 'Gouvernorat de Ariana',
                'country_id' => 222,
                'arab_name' => 'Gouvernorat de Ariana',
            ),
            131 =>
            array (
                'id' => 3638,
                'name' => 'Gouvernorat de Nabeul',
                'country_id' => 222,
                'arab_name' => 'Gouvernorat de Nabeul',
            ),
            132 =>
            array (
                'id' => 3639,
                'name' => 'Gouvernorat de Sousse',
                'country_id' => 222,
                'arab_name' => 'Gouvernorat de Sousse',
            ),
            133 =>
            array (
                'id' => 3640,
                'name' => 'Hammamet Yasmine',
                'country_id' => 222,
                'arab_name' => 'Hammamet Yasmine',
            ),
            134 =>
            array (
                'id' => 3641,
                'name' => 'Jundubah',
                'country_id' => 222,
                'arab_name' => 'Jundubah',
            ),
            135 =>
            array (
                'id' => 3642,
                'name' => 'Madaniyin',
                'country_id' => 222,
                'arab_name' => 'Madaniyin',
            ),
            136 =>
            array (
                'id' => 3643,
                'name' => 'Manubah',
                'country_id' => 222,
                'arab_name' => 'Manubah',
            ),
            137 =>
            array (
                'id' => 3644,
                'name' => 'Monastir',
                'country_id' => 222,
                'arab_name' => 'Monastir',
            ),
            138 =>
            array (
                'id' => 3645,
                'name' => 'Nabul',
                'country_id' => 222,
                'arab_name' => 'Nabul',
            ),
            139 =>
            array (
                'id' => 3646,
                'name' => 'Qabis',
                'country_id' => 222,
                'arab_name' => 'Qabis',
            ),
            140 =>
            array (
                'id' => 3647,
                'name' => 'Qafsah',
                'country_id' => 222,
                'arab_name' => 'Qafsah',
            ),
            141 =>
            array (
                'id' => 3648,
                'name' => 'Qibili',
                'country_id' => 222,
                'arab_name' => 'Qibili',
            ),
            142 =>
            array (
                'id' => 3649,
                'name' => 'Safaqis',
                'country_id' => 222,
                'arab_name' => 'Safaqis',
            ),
            143 =>
            array (
                'id' => 3650,
                'name' => 'Sfax',
                'country_id' => 222,
                'arab_name' => 'Sfax',
            ),
            144 =>
            array (
                'id' => 3651,
                'name' => 'Sidi Bu Zayd',
                'country_id' => 222,
                'arab_name' => 'Sidi Bu Zayd',
            ),
            145 =>
            array (
                'id' => 3652,
                'name' => 'Silyanah',
                'country_id' => 222,
                'arab_name' => 'Silyanah',
            ),
            146 =>
            array (
                'id' => 3653,
                'name' => 'Susah',
                'country_id' => 222,
                'arab_name' => 'Susah',
            ),
            147 =>
            array (
                'id' => 3654,
                'name' => 'Tatawin',
                'country_id' => 222,
                'arab_name' => 'Tatawin',
            ),
            148 =>
            array (
                'id' => 3655,
                'name' => 'Tawzar',
                'country_id' => 222,
                'arab_name' => 'Tawzar',
            ),
            149 =>
            array (
                'id' => 3656,
                'name' => 'Tunis',
                'country_id' => 222,
                'arab_name' => 'Tunis',
            ),
            150 =>
            array (
                'id' => 3657,
                'name' => 'Zaghwan',
                'country_id' => 222,
                'arab_name' => 'Zaghwan',
            ),
            151 =>
            array (
                'id' => 3658,
                'name' => 'al-Kaf',
                'country_id' => 222,
                'arab_name' => 'al-Kaf',
            ),
            152 =>
            array (
                'id' => 3659,
                'name' => 'al-Mahdiyah',
                'country_id' => 222,
                'arab_name' => 'al-Mahdiyah',
            ),
            153 =>
            array (
                'id' => 3660,
                'name' => 'al-Munastir',
                'country_id' => 222,
                'arab_name' => 'al-Munastir',
            ),
            154 =>
            array (
                'id' => 3661,
                'name' => 'al-Qasrayn',
                'country_id' => 222,
                'arab_name' => 'al-Qasrayn',
            ),
            155 =>
            array (
                'id' => 3662,
                'name' => 'al-Qayrawan',
                'country_id' => 222,
                'arab_name' => 'al-Qayrawan',
            ),
            156 =>
            array (
                'id' => 3663,
                'name' => 'Adana',
                'country_id' => 223,
                'arab_name' => 'Adana',
            ),
            157 =>
            array (
                'id' => 3664,
                'name' => 'Adiyaman',
                'country_id' => 223,
                'arab_name' => 'Adiyaman',
            ),
            158 =>
            array (
                'id' => 3665,
                'name' => 'Afyon',
                'country_id' => 223,
                'arab_name' => 'Afyon',
            ),
            159 =>
            array (
                'id' => 3666,
                'name' => 'Agri',
                'country_id' => 223,
                'arab_name' => 'Agri',
            ),
            160 =>
            array (
                'id' => 3667,
                'name' => 'Aksaray',
                'country_id' => 223,
                'arab_name' => 'Aksaray',
            ),
            161 =>
            array (
                'id' => 3668,
                'name' => 'Amasya',
                'country_id' => 223,
                'arab_name' => 'Amasya',
            ),
            162 =>
            array (
                'id' => 3669,
                'name' => 'Ankara',
                'country_id' => 223,
                'arab_name' => 'Ankara',
            ),
            163 =>
            array (
                'id' => 3670,
                'name' => 'Antalya',
                'country_id' => 223,
                'arab_name' => 'Antalya',
            ),
            164 =>
            array (
                'id' => 3671,
                'name' => 'Ardahan',
                'country_id' => 223,
                'arab_name' => 'Ardahan',
            ),
            165 =>
            array (
                'id' => 3672,
                'name' => 'Artvin',
                'country_id' => 223,
                'arab_name' => 'Artvin',
            ),
            166 =>
            array (
                'id' => 3673,
                'name' => 'Aydin',
                'country_id' => 223,
                'arab_name' => 'Aydin',
            ),
            167 =>
            array (
                'id' => 3674,
                'name' => 'Balikesir',
                'country_id' => 223,
                'arab_name' => 'Balikesir',
            ),
            168 =>
            array (
                'id' => 3675,
                'name' => 'Bartin',
                'country_id' => 223,
                'arab_name' => 'Bartin',
            ),
            169 =>
            array (
                'id' => 3676,
                'name' => 'Batman',
                'country_id' => 223,
                'arab_name' => 'Batman',
            ),
            170 =>
            array (
                'id' => 3677,
                'name' => 'Bayburt',
                'country_id' => 223,
                'arab_name' => 'Bayburt',
            ),
            171 =>
            array (
                'id' => 3678,
                'name' => 'Bilecik',
                'country_id' => 223,
                'arab_name' => 'Bilecik',
            ),
            172 =>
            array (
                'id' => 3679,
                'name' => 'Bingol',
                'country_id' => 223,
                'arab_name' => 'Bingol',
            ),
            173 =>
            array (
                'id' => 3680,
                'name' => 'Bitlis',
                'country_id' => 223,
                'arab_name' => 'Bitlis',
            ),
            174 =>
            array (
                'id' => 3681,
                'name' => 'Bolu',
                'country_id' => 223,
                'arab_name' => 'Bolu',
            ),
            175 =>
            array (
                'id' => 3682,
                'name' => 'Burdur',
                'country_id' => 223,
                'arab_name' => 'Burdur',
            ),
            176 =>
            array (
                'id' => 3683,
                'name' => 'Bursa',
                'country_id' => 223,
                'arab_name' => 'Bursa',
            ),
            177 =>
            array (
                'id' => 3684,
                'name' => 'Canakkale',
                'country_id' => 223,
                'arab_name' => 'Canakkale',
            ),
            178 =>
            array (
                'id' => 3685,
                'name' => 'Cankiri',
                'country_id' => 223,
                'arab_name' => 'Cankiri',
            ),
            179 =>
            array (
                'id' => 3686,
                'name' => 'Corum',
                'country_id' => 223,
                'arab_name' => 'Corum',
            ),
            180 =>
            array (
                'id' => 3687,
                'name' => 'Denizli',
                'country_id' => 223,
                'arab_name' => 'Denizli',
            ),
            181 =>
            array (
                'id' => 3688,
                'name' => 'Diyarbakir',
                'country_id' => 223,
                'arab_name' => 'Diyarbakir',
            ),
            182 =>
            array (
                'id' => 3689,
                'name' => 'Duzce',
                'country_id' => 223,
                'arab_name' => 'Duzce',
            ),
            183 =>
            array (
                'id' => 3690,
                'name' => 'Edirne',
                'country_id' => 223,
                'arab_name' => 'Edirne',
            ),
            184 =>
            array (
                'id' => 3691,
                'name' => 'Elazig',
                'country_id' => 223,
                'arab_name' => 'Elazig',
            ),
            185 =>
            array (
                'id' => 3692,
                'name' => 'Erzincan',
                'country_id' => 223,
                'arab_name' => 'Erzincan',
            ),
            186 =>
            array (
                'id' => 3693,
                'name' => 'Erzurum',
                'country_id' => 223,
                'arab_name' => 'Erzurum',
            ),
            187 =>
            array (
                'id' => 3694,
                'name' => 'Eskisehir',
                'country_id' => 223,
                'arab_name' => 'Eskisehir',
            ),
            188 =>
            array (
                'id' => 3695,
                'name' => 'Gaziantep',
                'country_id' => 223,
                'arab_name' => 'Gaziantep',
            ),
            189 =>
            array (
                'id' => 3696,
                'name' => 'Giresun',
                'country_id' => 223,
                'arab_name' => 'Giresun',
            ),
            190 =>
            array (
                'id' => 3697,
                'name' => 'Gumushane',
                'country_id' => 223,
                'arab_name' => 'Gumushane',
            ),
            191 =>
            array (
                'id' => 3698,
                'name' => 'Hakkari',
                'country_id' => 223,
                'arab_name' => 'Hakkari',
            ),
            192 =>
            array (
                'id' => 3699,
                'name' => 'Hatay',
                'country_id' => 223,
                'arab_name' => 'Hatay',
            ),
            193 =>
            array (
                'id' => 3700,
                'name' => 'Icel',
                'country_id' => 223,
                'arab_name' => 'Icel',
            ),
            194 =>
            array (
                'id' => 3701,
                'name' => 'Igdir',
                'country_id' => 223,
                'arab_name' => 'Igdir',
            ),
            195 =>
            array (
                'id' => 3702,
                'name' => 'Isparta',
                'country_id' => 223,
                'arab_name' => 'Isparta',
            ),
            196 =>
            array (
                'id' => 3703,
                'name' => 'Istanbul',
                'country_id' => 223,
                'arab_name' => 'Istanbul',
            ),
            197 =>
            array (
                'id' => 3704,
                'name' => 'Izmir',
                'country_id' => 223,
                'arab_name' => 'Izmir',
            ),
            198 =>
            array (
                'id' => 3705,
                'name' => 'Kahramanmaras',
                'country_id' => 223,
                'arab_name' => 'Kahramanmaras',
            ),
            199 =>
            array (
                'id' => 3706,
                'name' => 'Karabuk',
                'country_id' => 223,
                'arab_name' => 'Karabuk',
            ),
            200 =>
            array (
                'id' => 3707,
                'name' => 'Karaman',
                'country_id' => 223,
                'arab_name' => 'Karaman',
            ),
            201 =>
            array (
                'id' => 3708,
                'name' => 'Kars',
                'country_id' => 223,
                'arab_name' => 'Kars',
            ),
            202 =>
            array (
                'id' => 3709,
                'name' => 'Karsiyaka',
                'country_id' => 223,
                'arab_name' => 'Karsiyaka',
            ),
            203 =>
            array (
                'id' => 3710,
                'name' => 'Kastamonu',
                'country_id' => 223,
                'arab_name' => 'Kastamonu',
            ),
            204 =>
            array (
                'id' => 3711,
                'name' => 'Kayseri',
                'country_id' => 223,
                'arab_name' => 'Kayseri',
            ),
            205 =>
            array (
                'id' => 3712,
                'name' => 'Kilis',
                'country_id' => 223,
                'arab_name' => 'Kilis',
            ),
            206 =>
            array (
                'id' => 3713,
                'name' => 'Kirikkale',
                'country_id' => 223,
                'arab_name' => 'Kirikkale',
            ),
            207 =>
            array (
                'id' => 3714,
                'name' => 'Kirklareli',
                'country_id' => 223,
                'arab_name' => 'Kirklareli',
            ),
            208 =>
            array (
                'id' => 3715,
                'name' => 'Kirsehir',
                'country_id' => 223,
                'arab_name' => 'Kirsehir',
            ),
            209 =>
            array (
                'id' => 3716,
                'name' => 'Kocaeli',
                'country_id' => 223,
                'arab_name' => 'Kocaeli',
            ),
            210 =>
            array (
                'id' => 3717,
                'name' => 'Konya',
                'country_id' => 223,
                'arab_name' => 'Konya',
            ),
            211 =>
            array (
                'id' => 3718,
                'name' => 'Kutahya',
                'country_id' => 223,
                'arab_name' => 'Kutahya',
            ),
            212 =>
            array (
                'id' => 3719,
                'name' => 'Lefkosa',
                'country_id' => 223,
                'arab_name' => 'Lefkosa',
            ),
            213 =>
            array (
                'id' => 3720,
                'name' => 'Malatya',
                'country_id' => 223,
                'arab_name' => 'Malatya',
            ),
            214 =>
            array (
                'id' => 3721,
                'name' => 'Manisa',
                'country_id' => 223,
                'arab_name' => 'Manisa',
            ),
            215 =>
            array (
                'id' => 3722,
                'name' => 'Mardin',
                'country_id' => 223,
                'arab_name' => 'Mardin',
            ),
            216 =>
            array (
                'id' => 3723,
                'name' => 'Mugla',
                'country_id' => 223,
                'arab_name' => 'Mugla',
            ),
            217 =>
            array (
                'id' => 3724,
                'name' => 'Mus',
                'country_id' => 223,
                'arab_name' => 'Mus',
            ),
            218 =>
            array (
                'id' => 3725,
                'name' => 'Nevsehir',
                'country_id' => 223,
                'arab_name' => 'Nevsehir',
            ),
            219 =>
            array (
                'id' => 3726,
                'name' => 'Nigde',
                'country_id' => 223,
                'arab_name' => 'Nigde',
            ),
            220 =>
            array (
                'id' => 3727,
                'name' => 'Ordu',
                'country_id' => 223,
                'arab_name' => 'Ordu',
            ),
            221 =>
            array (
                'id' => 3728,
                'name' => 'Osmaniye',
                'country_id' => 223,
                'arab_name' => 'Osmaniye',
            ),
            222 =>
            array (
                'id' => 3729,
                'name' => 'Rize',
                'country_id' => 223,
                'arab_name' => 'Rize',
            ),
            223 =>
            array (
                'id' => 3730,
                'name' => 'Sakarya',
                'country_id' => 223,
                'arab_name' => 'Sakarya',
            ),
            224 =>
            array (
                'id' => 3731,
                'name' => 'Samsun',
                'country_id' => 223,
                'arab_name' => 'Samsun',
            ),
            225 =>
            array (
                'id' => 3732,
                'name' => 'Sanliurfa',
                'country_id' => 223,
                'arab_name' => 'Sanliurfa',
            ),
            226 =>
            array (
                'id' => 3733,
                'name' => 'Siirt',
                'country_id' => 223,
                'arab_name' => 'Siirt',
            ),
            227 =>
            array (
                'id' => 3734,
                'name' => 'Sinop',
                'country_id' => 223,
                'arab_name' => 'Sinop',
            ),
            228 =>
            array (
                'id' => 3735,
                'name' => 'Sirnak',
                'country_id' => 223,
                'arab_name' => 'Sirnak',
            ),
            229 =>
            array (
                'id' => 3736,
                'name' => 'Sivas',
                'country_id' => 223,
                'arab_name' => 'Sivas',
            ),
            230 =>
            array (
                'id' => 3737,
                'name' => 'Tekirdag',
                'country_id' => 223,
                'arab_name' => 'Tekirdag',
            ),
            231 =>
            array (
                'id' => 3738,
                'name' => 'Tokat',
                'country_id' => 223,
                'arab_name' => 'Tokat',
            ),
            232 =>
            array (
                'id' => 3739,
                'name' => 'Trabzon',
                'country_id' => 223,
                'arab_name' => 'Trabzon',
            ),
            233 =>
            array (
                'id' => 3740,
                'name' => 'Tunceli',
                'country_id' => 223,
                'arab_name' => 'Tunceli',
            ),
            234 =>
            array (
                'id' => 3741,
                'name' => 'Usak',
                'country_id' => 223,
                'arab_name' => 'Usak',
            ),
            235 =>
            array (
                'id' => 3742,
                'name' => 'Van',
                'country_id' => 223,
                'arab_name' => 'Van',
            ),
            236 =>
            array (
                'id' => 3743,
                'name' => 'Yalova',
                'country_id' => 223,
                'arab_name' => 'Yalova',
            ),
            237 =>
            array (
                'id' => 3744,
                'name' => 'Yozgat',
                'country_id' => 223,
                'arab_name' => 'Yozgat',
            ),
            238 =>
            array (
                'id' => 3745,
                'name' => 'Zonguldak',
                'country_id' => 223,
                'arab_name' => 'Zonguldak',
            ),
            239 =>
            array (
                'id' => 3746,
                'name' => 'Ahal',
                'country_id' => 224,
                'arab_name' => 'Ahal',
            ),
            240 =>
            array (
                'id' => 3747,
                'name' => 'Asgabat',
                'country_id' => 224,
                'arab_name' => 'Asgabat',
            ),
            241 =>
            array (
                'id' => 3748,
                'name' => 'Balkan',
                'country_id' => 224,
                'arab_name' => 'Balkan',
            ),
            242 =>
            array (
                'id' => 3749,
                'name' => 'Dasoguz',
                'country_id' => 224,
                'arab_name' => 'Dasoguz',
            ),
            243 =>
            array (
                'id' => 3750,
                'name' => 'Lebap',
                'country_id' => 224,
                'arab_name' => 'Lebap',
            ),
            244 =>
            array (
                'id' => 3751,
                'name' => 'Mari',
                'country_id' => 224,
                'arab_name' => 'Mari',
            ),
            245 =>
            array (
                'id' => 3752,
                'name' => 'Grand Turk',
                'country_id' => 225,
                'arab_name' => 'Grand Turk',
            ),
            246 =>
            array (
                'id' => 3753,
                'name' => 'South Caicos and East Caicos',
                'country_id' => 225,
                'arab_name' => 'South Caicos and East Caicos',
            ),
            247 =>
            array (
                'id' => 3754,
                'name' => 'Funafuti',
                'country_id' => 226,
                'arab_name' => 'Funafuti',
            ),
            248 =>
            array (
                'id' => 3755,
                'name' => 'Nanumanga',
                'country_id' => 226,
                'arab_name' => 'Nanumanga',
            ),
            249 =>
            array (
                'id' => 3756,
                'name' => 'Nanumea',
                'country_id' => 226,
                'arab_name' => 'Nanumea',
            ),
            250 =>
            array (
                'id' => 3757,
                'name' => 'Niutao',
                'country_id' => 226,
                'arab_name' => 'Niutao',
            ),
            251 =>
            array (
                'id' => 3758,
                'name' => 'Nui',
                'country_id' => 226,
                'arab_name' => 'Nui',
            ),
            252 =>
            array (
                'id' => 3759,
                'name' => 'Nukufetau',
                'country_id' => 226,
                'arab_name' => 'Nukufetau',
            ),
            253 =>
            array (
                'id' => 3760,
                'name' => 'Nukulaelae',
                'country_id' => 226,
                'arab_name' => 'Nukulaelae',
            ),
            254 =>
            array (
                'id' => 3761,
                'name' => 'Vaitupu',
                'country_id' => 226,
                'arab_name' => 'Vaitupu',
            ),
            255 =>
            array (
                'id' => 3762,
                'name' => 'Central',
                'country_id' => 227,
                'arab_name' => 'Central',
            ),
            256 =>
            array (
                'id' => 3763,
                'name' => 'Eastern',
                'country_id' => 227,
                'arab_name' => 'Eastern',
            ),
            257 =>
            array (
                'id' => 3764,
                'name' => 'Northern',
                'country_id' => 227,
                'arab_name' => 'Northern',
            ),
            258 =>
            array (
                'id' => 3765,
                'name' => 'Western',
                'country_id' => 227,
                'arab_name' => 'Western',
            ),
            259 =>
            array (
                'id' => 3766,
                'name' => 'Cherkas\'ka',
                'country_id' => 228,
                'arab_name' => 'Cherkas\'ka',
            ),
            260 =>
            array (
                'id' => 3767,
                'name' => 'Chernihivs\'ka',
                'country_id' => 228,
                'arab_name' => 'Chernihivs\'ka',
            ),
            261 =>
            array (
                'id' => 3768,
                'name' => 'Chernivets\'ka',
                'country_id' => 228,
                'arab_name' => 'Chernivets\'ka',
            ),
            262 =>
            array (
                'id' => 3769,
                'name' => 'Crimea',
                'country_id' => 228,
                'arab_name' => 'Crimea',
            ),
            263 =>
            array (
                'id' => 3770,
                'name' => 'Dnipropetrovska',
                'country_id' => 228,
                'arab_name' => 'Dnipropetrovska',
            ),
            264 =>
            array (
                'id' => 3771,
                'name' => 'Donets\'ka',
                'country_id' => 228,
                'arab_name' => 'Donets\'ka',
            ),
            265 =>
            array (
                'id' => 3772,
                'name' => 'Ivano-Frankivs\'ka',
                'country_id' => 228,
                'arab_name' => 'Ivano-Frankivs\'ka',
            ),
            266 =>
            array (
                'id' => 3773,
                'name' => 'Kharkiv',
                'country_id' => 228,
                'arab_name' => 'Kharkiv',
            ),
            267 =>
            array (
                'id' => 3774,
                'name' => 'Kharkov',
                'country_id' => 228,
                'arab_name' => 'Kharkov',
            ),
            268 =>
            array (
                'id' => 3775,
                'name' => 'Khersonska',
                'country_id' => 228,
                'arab_name' => 'Khersonska',
            ),
            269 =>
            array (
                'id' => 3776,
                'name' => 'Khmel\'nyts\'ka',
                'country_id' => 228,
                'arab_name' => 'Khmel\'nyts\'ka',
            ),
            270 =>
            array (
                'id' => 3777,
                'name' => 'Kirovohrad',
                'country_id' => 228,
                'arab_name' => 'Kirovohrad',
            ),
            271 =>
            array (
                'id' => 3778,
                'name' => 'Krym',
                'country_id' => 228,
                'arab_name' => 'Krym',
            ),
            272 =>
            array (
                'id' => 3779,
                'name' => 'Kyyiv',
                'country_id' => 228,
                'arab_name' => 'Kyyiv',
            ),
            273 =>
            array (
                'id' => 3780,
                'name' => 'Kyyivs\'ka',
                'country_id' => 228,
                'arab_name' => 'Kyyivs\'ka',
            ),
            274 =>
            array (
                'id' => 3781,
                'name' => 'L\'vivs\'ka',
                'country_id' => 228,
                'arab_name' => 'L\'vivs\'ka',
            ),
            275 =>
            array (
                'id' => 3782,
                'name' => 'Luhans\'ka',
                'country_id' => 228,
                'arab_name' => 'Luhans\'ka',
            ),
            276 =>
            array (
                'id' => 3783,
                'name' => 'Mykolayivs\'ka',
                'country_id' => 228,
                'arab_name' => 'Mykolayivs\'ka',
            ),
            277 =>
            array (
                'id' => 3784,
                'name' => 'Odes\'ka',
                'country_id' => 228,
                'arab_name' => 'Odes\'ka',
            ),
            278 =>
            array (
                'id' => 3785,
                'name' => 'Odessa',
                'country_id' => 228,
                'arab_name' => 'Odessa',
            ),
            279 =>
            array (
                'id' => 3786,
                'name' => 'Poltavs\'ka',
                'country_id' => 228,
                'arab_name' => 'Poltavs\'ka',
            ),
            280 =>
            array (
                'id' => 3787,
                'name' => 'Rivnens\'ka',
                'country_id' => 228,
                'arab_name' => 'Rivnens\'ka',
            ),
            281 =>
            array (
                'id' => 3788,
                'name' => 'Sevastopol\'',
                'country_id' => 228,
                'arab_name' => 'Sevastopol\'',
            ),
            282 =>
            array (
                'id' => 3789,
                'name' => 'Sums\'ka',
                'country_id' => 228,
                'arab_name' => 'Sums\'ka',
            ),
            283 =>
            array (
                'id' => 3790,
                'name' => 'Ternopil\'s\'ka',
                'country_id' => 228,
                'arab_name' => 'Ternopil\'s\'ka',
            ),
            284 =>
            array (
                'id' => 3791,
                'name' => 'Volyns\'ka',
                'country_id' => 228,
                'arab_name' => 'Volyns\'ka',
            ),
            285 =>
            array (
                'id' => 3792,
                'name' => 'Vynnyts\'ka',
                'country_id' => 228,
                'arab_name' => 'Vynnyts\'ka',
            ),
            286 =>
            array (
                'id' => 3793,
                'name' => 'Zakarpats\'ka',
                'country_id' => 228,
                'arab_name' => 'Zakarpats\'ka',
            ),
            287 =>
            array (
                'id' => 3794,
                'name' => 'Zaporizhia',
                'country_id' => 228,
                'arab_name' => 'Zaporizhia',
            ),
            288 =>
            array (
                'id' => 3795,
                'name' => 'Zhytomyrs\'ka',
                'country_id' => 228,
                'arab_name' => 'Zhytomyrs\'ka',
            ),
            289 =>
            array (
                'id' => 3796,
                'name' => 'Abu Zabi',
                'country_id' => 229,
                'arab_name' => 'Abu Zabi',
            ),
            290 =>
            array (
                'id' => 3797,
                'name' => 'Ajman',
                'country_id' => 229,
                'arab_name' => 'Ajman',
            ),
            291 =>
            array (
                'id' => 3798,
                'name' => 'Dubai',
                'country_id' => 229,
                'arab_name' => 'Dubai',
            ),
            292 =>
            array (
                'id' => 3799,
                'name' => 'Ras al-Khaymah',
                'country_id' => 229,
                'arab_name' => 'Ras al-Khaymah',
            ),
            293 =>
            array (
                'id' => 3800,
                'name' => 'Sharjah',
                'country_id' => 229,
                'arab_name' => 'Sharjah',
            ),
            294 =>
            array (
                'id' => 3801,
                'name' => 'Sharjha',
                'country_id' => 229,
                'arab_name' => 'Sharjha',
            ),
            295 =>
            array (
                'id' => 3802,
                'name' => 'Umm al Qaywayn',
                'country_id' => 229,
                'arab_name' => 'Umm al Qaywayn',
            ),
            296 =>
            array (
                'id' => 3803,
                'name' => 'al-Fujayrah',
                'country_id' => 229,
                'arab_name' => 'al-Fujayrah',
            ),
            297 =>
            array (
                'id' => 3804,
                'name' => 'ash-Shariqah',
                'country_id' => 229,
                'arab_name' => 'ash-Shariqah',
            ),
            298 =>
            array (
                'id' => 3805,
                'name' => 'Aberdeen',
                'country_id' => 230,
                'arab_name' => 'Aberdeen',
            ),
            299 =>
            array (
                'id' => 3806,
                'name' => 'Aberdeenshire',
                'country_id' => 230,
                'arab_name' => 'Aberdeenshire',
            ),
            300 =>
            array (
                'id' => 3807,
                'name' => 'Argyll',
                'country_id' => 230,
                'arab_name' => 'Argyll',
            ),
            301 =>
            array (
                'id' => 3808,
                'name' => 'Armagh',
                'country_id' => 230,
                'arab_name' => 'Armagh',
            ),
            302 =>
            array (
                'id' => 3809,
                'name' => 'Bedfordshire',
                'country_id' => 230,
                'arab_name' => 'Bedfordshire',
            ),
            303 =>
            array (
                'id' => 3810,
                'name' => 'Belfast',
                'country_id' => 230,
                'arab_name' => 'Belfast',
            ),
            304 =>
            array (
                'id' => 3811,
                'name' => 'Berkshire',
                'country_id' => 230,
                'arab_name' => 'Berkshire',
            ),
            305 =>
            array (
                'id' => 3812,
                'name' => 'Birmingham',
                'country_id' => 230,
                'arab_name' => 'Birmingham',
            ),
            306 =>
            array (
                'id' => 3813,
                'name' => 'Brechin',
                'country_id' => 230,
                'arab_name' => 'Brechin',
            ),
            307 =>
            array (
                'id' => 3814,
                'name' => 'Bridgnorth',
                'country_id' => 230,
                'arab_name' => 'Bridgnorth',
            ),
            308 =>
            array (
                'id' => 3815,
                'name' => 'Bristol',
                'country_id' => 230,
                'arab_name' => 'Bristol',
            ),
            309 =>
            array (
                'id' => 3816,
                'name' => 'Buckinghamshire',
                'country_id' => 230,
                'arab_name' => 'Buckinghamshire',
            ),
            310 =>
            array (
                'id' => 3817,
                'name' => 'Cambridge',
                'country_id' => 230,
                'arab_name' => 'Cambridge',
            ),
            311 =>
            array (
                'id' => 3818,
                'name' => 'Cambridgeshire',
                'country_id' => 230,
                'arab_name' => 'Cambridgeshire',
            ),
            312 =>
            array (
                'id' => 3819,
                'name' => 'Channel Islands',
                'country_id' => 230,
                'arab_name' => 'Channel Islands',
            ),
            313 =>
            array (
                'id' => 3820,
                'name' => 'Cheshire',
                'country_id' => 230,
                'arab_name' => 'Cheshire',
            ),
            314 =>
            array (
                'id' => 3821,
                'name' => 'Cleveland',
                'country_id' => 230,
                'arab_name' => 'Cleveland',
            ),
            315 =>
            array (
                'id' => 3822,
                'name' => 'Co Fermanagh',
                'country_id' => 230,
                'arab_name' => 'Co Fermanagh',
            ),
            316 =>
            array (
                'id' => 3823,
                'name' => 'Conwy',
                'country_id' => 230,
                'arab_name' => 'Conwy',
            ),
            317 =>
            array (
                'id' => 3824,
                'name' => 'Cornwall',
                'country_id' => 230,
                'arab_name' => 'Cornwall',
            ),
            318 =>
            array (
                'id' => 3825,
                'name' => 'Coventry',
                'country_id' => 230,
                'arab_name' => 'Coventry',
            ),
            319 =>
            array (
                'id' => 3826,
                'name' => 'Craven Arms',
                'country_id' => 230,
                'arab_name' => 'Craven Arms',
            ),
            320 =>
            array (
                'id' => 3827,
                'name' => 'Cumbria',
                'country_id' => 230,
                'arab_name' => 'Cumbria',
            ),
            321 =>
            array (
                'id' => 3828,
                'name' => 'Denbighshire',
                'country_id' => 230,
                'arab_name' => 'Denbighshire',
            ),
            322 =>
            array (
                'id' => 3829,
                'name' => 'Derby',
                'country_id' => 230,
                'arab_name' => 'Derby',
            ),
            323 =>
            array (
                'id' => 3830,
                'name' => 'Derbyshire',
                'country_id' => 230,
                'arab_name' => 'Derbyshire',
            ),
            324 =>
            array (
                'id' => 3831,
                'name' => 'Devon',
                'country_id' => 230,
                'arab_name' => 'Devon',
            ),
            325 =>
            array (
                'id' => 3832,
                'name' => 'Dial Code Dungannon',
                'country_id' => 230,
                'arab_name' => 'Dial Code Dungannon',
            ),
            326 =>
            array (
                'id' => 3833,
                'name' => 'Didcot',
                'country_id' => 230,
                'arab_name' => 'Didcot',
            ),
            327 =>
            array (
                'id' => 3834,
                'name' => 'Dorset',
                'country_id' => 230,
                'arab_name' => 'Dorset',
            ),
            328 =>
            array (
                'id' => 3835,
                'name' => 'Dunbartonshire',
                'country_id' => 230,
                'arab_name' => 'Dunbartonshire',
            ),
            329 =>
            array (
                'id' => 3836,
                'name' => 'Durham',
                'country_id' => 230,
                'arab_name' => 'Durham',
            ),
            330 =>
            array (
                'id' => 3837,
                'name' => 'East Dunbartonshire',
                'country_id' => 230,
                'arab_name' => 'East Dunbartonshire',
            ),
            331 =>
            array (
                'id' => 3838,
                'name' => 'East Lothian',
                'country_id' => 230,
                'arab_name' => 'East Lothian',
            ),
            332 =>
            array (
                'id' => 3839,
                'name' => 'East Midlands',
                'country_id' => 230,
                'arab_name' => 'East Midlands',
            ),
            333 =>
            array (
                'id' => 3840,
                'name' => 'East Sussex',
                'country_id' => 230,
                'arab_name' => 'East Sussex',
            ),
            334 =>
            array (
                'id' => 3841,
                'name' => 'East Yorkshire',
                'country_id' => 230,
                'arab_name' => 'East Yorkshire',
            ),
            335 =>
            array (
                'id' => 3842,
                'name' => 'England',
                'country_id' => 230,
                'arab_name' => 'England',
            ),
            336 =>
            array (
                'id' => 3843,
                'name' => 'Essex',
                'country_id' => 230,
                'arab_name' => 'Essex',
            ),
            337 =>
            array (
                'id' => 3844,
                'name' => 'Fermanagh',
                'country_id' => 230,
                'arab_name' => 'Fermanagh',
            ),
            338 =>
            array (
                'id' => 3845,
                'name' => 'Fife',
                'country_id' => 230,
                'arab_name' => 'Fife',
            ),
            339 =>
            array (
                'id' => 3846,
                'name' => 'Flintshire',
                'country_id' => 230,
                'arab_name' => 'Flintshire',
            ),
            340 =>
            array (
                'id' => 3847,
                'name' => 'Fulham',
                'country_id' => 230,
                'arab_name' => 'Fulham',
            ),
            341 =>
            array (
                'id' => 3848,
                'name' => 'Gainsborough',
                'country_id' => 230,
                'arab_name' => 'Gainsborough',
            ),
            342 =>
            array (
                'id' => 3849,
                'name' => 'Glocestershire',
                'country_id' => 230,
                'arab_name' => 'Glocestershire',
            ),
            343 =>
            array (
                'id' => 3850,
                'name' => 'Gwent',
                'country_id' => 230,
                'arab_name' => 'Gwent',
            ),
            344 =>
            array (
                'id' => 3851,
                'name' => 'Hampshire',
                'country_id' => 230,
                'arab_name' => 'Hampshire',
            ),
            345 =>
            array (
                'id' => 3852,
                'name' => 'Hants',
                'country_id' => 230,
                'arab_name' => 'Hants',
            ),
            346 =>
            array (
                'id' => 3853,
                'name' => 'Herefordshire',
                'country_id' => 230,
                'arab_name' => 'Herefordshire',
            ),
            347 =>
            array (
                'id' => 3854,
                'name' => 'Hertfordshire',
                'country_id' => 230,
                'arab_name' => 'Hertfordshire',
            ),
            348 =>
            array (
                'id' => 3855,
                'name' => 'Ireland',
                'country_id' => 230,
                'arab_name' => 'Ireland',
            ),
            349 =>
            array (
                'id' => 3856,
                'name' => 'Isle Of Man',
                'country_id' => 230,
                'arab_name' => 'Isle Of Man',
            ),
            350 =>
            array (
                'id' => 3857,
                'name' => 'Isle of Wight',
                'country_id' => 230,
                'arab_name' => 'Isle of Wight',
            ),
            351 =>
            array (
                'id' => 3858,
                'name' => 'Kenford',
                'country_id' => 230,
                'arab_name' => 'Kenford',
            ),
            352 =>
            array (
                'id' => 3859,
                'name' => 'Kent',
                'country_id' => 230,
                'arab_name' => 'Kent',
            ),
            353 =>
            array (
                'id' => 3860,
                'name' => 'Kilmarnock',
                'country_id' => 230,
                'arab_name' => 'Kilmarnock',
            ),
            354 =>
            array (
                'id' => 3861,
                'name' => 'Lanarkshire',
                'country_id' => 230,
                'arab_name' => 'Lanarkshire',
            ),
            355 =>
            array (
                'id' => 3862,
                'name' => 'Lancashire',
                'country_id' => 230,
                'arab_name' => 'Lancashire',
            ),
            356 =>
            array (
                'id' => 3863,
                'name' => 'Leicestershire',
                'country_id' => 230,
                'arab_name' => 'Leicestershire',
            ),
            357 =>
            array (
                'id' => 3864,
                'name' => 'Lincolnshire',
                'country_id' => 230,
                'arab_name' => 'Lincolnshire',
            ),
            358 =>
            array (
                'id' => 3865,
                'name' => 'Llanymynech',
                'country_id' => 230,
                'arab_name' => 'Llanymynech',
            ),
            359 =>
            array (
                'id' => 3866,
                'name' => 'London',
                'country_id' => 230,
                'arab_name' => 'London',
            ),
            360 =>
            array (
                'id' => 3867,
                'name' => 'Ludlow',
                'country_id' => 230,
                'arab_name' => 'Ludlow',
            ),
            361 =>
            array (
                'id' => 3868,
                'name' => 'Manchester',
                'country_id' => 230,
                'arab_name' => 'Manchester',
            ),
            362 =>
            array (
                'id' => 3869,
                'name' => 'Mayfair',
                'country_id' => 230,
                'arab_name' => 'Mayfair',
            ),
            363 =>
            array (
                'id' => 3870,
                'name' => 'Merseyside',
                'country_id' => 230,
                'arab_name' => 'Merseyside',
            ),
            364 =>
            array (
                'id' => 3871,
                'name' => 'Mid Glamorgan',
                'country_id' => 230,
                'arab_name' => 'Mid Glamorgan',
            ),
            365 =>
            array (
                'id' => 3872,
                'name' => 'Middlesex',
                'country_id' => 230,
                'arab_name' => 'Middlesex',
            ),
            366 =>
            array (
                'id' => 3873,
                'name' => 'Mildenhall',
                'country_id' => 230,
                'arab_name' => 'Mildenhall',
            ),
            367 =>
            array (
                'id' => 3874,
                'name' => 'Monmouthshire',
                'country_id' => 230,
                'arab_name' => 'Monmouthshire',
            ),
            368 =>
            array (
                'id' => 3875,
                'name' => 'Newton Stewart',
                'country_id' => 230,
                'arab_name' => 'Newton Stewart',
            ),
            369 =>
            array (
                'id' => 3876,
                'name' => 'Norfolk',
                'country_id' => 230,
                'arab_name' => 'Norfolk',
            ),
            370 =>
            array (
                'id' => 3877,
                'name' => 'North Humberside',
                'country_id' => 230,
                'arab_name' => 'North Humberside',
            ),
            371 =>
            array (
                'id' => 3878,
                'name' => 'North Yorkshire',
                'country_id' => 230,
                'arab_name' => 'North Yorkshire',
            ),
            372 =>
            array (
                'id' => 3879,
                'name' => 'Northamptonshire',
                'country_id' => 230,
                'arab_name' => 'Northamptonshire',
            ),
            373 =>
            array (
                'id' => 3880,
                'name' => 'Northants',
                'country_id' => 230,
                'arab_name' => 'Northants',
            ),
            374 =>
            array (
                'id' => 3881,
                'name' => 'Northern Ireland',
                'country_id' => 230,
                'arab_name' => 'Northern Ireland',
            ),
            375 =>
            array (
                'id' => 3882,
                'name' => 'Northumberland',
                'country_id' => 230,
                'arab_name' => 'Northumberland',
            ),
            376 =>
            array (
                'id' => 3883,
                'name' => 'Nottinghamshire',
                'country_id' => 230,
                'arab_name' => 'Nottinghamshire',
            ),
            377 =>
            array (
                'id' => 3884,
                'name' => 'Oxford',
                'country_id' => 230,
                'arab_name' => 'Oxford',
            ),
            378 =>
            array (
                'id' => 3885,
                'name' => 'Powys',
                'country_id' => 230,
                'arab_name' => 'Powys',
            ),
            379 =>
            array (
                'id' => 3886,
                'name' => 'Roos-shire',
                'country_id' => 230,
                'arab_name' => 'Roos-shire',
            ),
            380 =>
            array (
                'id' => 3887,
                'name' => 'SUSSEX',
                'country_id' => 230,
                'arab_name' => 'SUSSEX',
            ),
            381 =>
            array (
                'id' => 3888,
                'name' => 'Sark',
                'country_id' => 230,
                'arab_name' => 'Sark',
            ),
            382 =>
            array (
                'id' => 3889,
                'name' => 'Scotland',
                'country_id' => 230,
                'arab_name' => 'Scotland',
            ),
            383 =>
            array (
                'id' => 3890,
                'name' => 'Scottish Borders',
                'country_id' => 230,
                'arab_name' => 'Scottish Borders',
            ),
            384 =>
            array (
                'id' => 3891,
                'name' => 'Shropshire',
                'country_id' => 230,
                'arab_name' => 'Shropshire',
            ),
            385 =>
            array (
                'id' => 3892,
                'name' => 'Somerset',
                'country_id' => 230,
                'arab_name' => 'Somerset',
            ),
            386 =>
            array (
                'id' => 3893,
                'name' => 'South Glamorgan',
                'country_id' => 230,
                'arab_name' => 'South Glamorgan',
            ),
            387 =>
            array (
                'id' => 3894,
                'name' => 'South Wales',
                'country_id' => 230,
                'arab_name' => 'South Wales',
            ),
            388 =>
            array (
                'id' => 3895,
                'name' => 'South Yorkshire',
                'country_id' => 230,
                'arab_name' => 'South Yorkshire',
            ),
            389 =>
            array (
                'id' => 3896,
                'name' => 'Southwell',
                'country_id' => 230,
                'arab_name' => 'Southwell',
            ),
            390 =>
            array (
                'id' => 3897,
                'name' => 'Staffordshire',
                'country_id' => 230,
                'arab_name' => 'Staffordshire',
            ),
            391 =>
            array (
                'id' => 3898,
                'name' => 'Strabane',
                'country_id' => 230,
                'arab_name' => 'Strabane',
            ),
            392 =>
            array (
                'id' => 3899,
                'name' => 'Suffolk',
                'country_id' => 230,
                'arab_name' => 'Suffolk',
            ),
            393 =>
            array (
                'id' => 3900,
                'name' => 'Surrey',
                'country_id' => 230,
                'arab_name' => 'Surrey',
            ),
            394 =>
            array (
                'id' => 3901,
                'name' => 'Sussex',
                'country_id' => 230,
                'arab_name' => 'Sussex',
            ),
            395 =>
            array (
                'id' => 3902,
                'name' => 'Twickenham',
                'country_id' => 230,
                'arab_name' => 'Twickenham',
            ),
            396 =>
            array (
                'id' => 3903,
                'name' => 'Tyne and Wear',
                'country_id' => 230,
                'arab_name' => 'Tyne and Wear',
            ),
            397 =>
            array (
                'id' => 3904,
                'name' => 'Tyrone',
                'country_id' => 230,
                'arab_name' => 'Tyrone',
            ),
            398 =>
            array (
                'id' => 3905,
                'name' => 'Utah',
                'country_id' => 230,
                'arab_name' => 'Utah',
            ),
            399 =>
            array (
                'id' => 3906,
                'name' => 'Wales',
                'country_id' => 230,
                'arab_name' => 'Wales',
            ),
            400 =>
            array (
                'id' => 3907,
                'name' => 'Warwickshire',
                'country_id' => 230,
                'arab_name' => 'Warwickshire',
            ),
            401 =>
            array (
                'id' => 3908,
                'name' => 'West Lothian',
                'country_id' => 230,
                'arab_name' => 'West Lothian',
            ),
            402 =>
            array (
                'id' => 3909,
                'name' => 'West Midlands',
                'country_id' => 230,
                'arab_name' => 'West Midlands',
            ),
            403 =>
            array (
                'id' => 3910,
                'name' => 'West Sussex',
                'country_id' => 230,
                'arab_name' => 'West Sussex',
            ),
            404 =>
            array (
                'id' => 3911,
                'name' => 'West Yorkshire',
                'country_id' => 230,
                'arab_name' => 'West Yorkshire',
            ),
            405 =>
            array (
                'id' => 3912,
                'name' => 'Whissendine',
                'country_id' => 230,
                'arab_name' => 'Whissendine',
            ),
            406 =>
            array (
                'id' => 3913,
                'name' => 'Wiltshire',
                'country_id' => 230,
                'arab_name' => 'Wiltshire',
            ),
            407 =>
            array (
                'id' => 3914,
                'name' => 'Wokingham',
                'country_id' => 230,
                'arab_name' => 'Wokingham',
            ),
            408 =>
            array (
                'id' => 3915,
                'name' => 'Worcestershire',
                'country_id' => 230,
                'arab_name' => 'Worcestershire',
            ),
            409 =>
            array (
                'id' => 3916,
                'name' => 'Wrexham',
                'country_id' => 230,
                'arab_name' => 'Wrexham',
            ),
            410 =>
            array (
                'id' => 3917,
                'name' => 'Wurttemberg',
                'country_id' => 230,
                'arab_name' => 'Wurttemberg',
            ),
            411 =>
            array (
                'id' => 3918,
                'name' => 'Yorkshire',
                'country_id' => 230,
                'arab_name' => 'Yorkshire',
            ),
            412 =>
            array (
                'id' => 3919,
                'name' => 'Alabama',
                'country_id' => 231,
                'arab_name' => 'Alabama',
            ),
            413 =>
            array (
                'id' => 3920,
                'name' => 'Alaska',
                'country_id' => 231,
                'arab_name' => 'Alaska',
            ),
            414 =>
            array (
                'id' => 3921,
                'name' => 'Arizona',
                'country_id' => 231,
                'arab_name' => 'Arizona',
            ),
            415 =>
            array (
                'id' => 3922,
                'name' => 'Arkansas',
                'country_id' => 231,
                'arab_name' => 'Arkansas',
            ),
            416 =>
            array (
                'id' => 3923,
                'name' => 'Byram',
                'country_id' => 231,
                'arab_name' => 'Byram',
            ),
            417 =>
            array (
                'id' => 3924,
                'name' => 'California',
                'country_id' => 231,
                'arab_name' => 'California',
            ),
            418 =>
            array (
                'id' => 3925,
                'name' => 'Cokato',
                'country_id' => 231,
                'arab_name' => 'Cokato',
            ),
            419 =>
            array (
                'id' => 3926,
                'name' => 'Colorado',
                'country_id' => 231,
                'arab_name' => 'Colorado',
            ),
            420 =>
            array (
                'id' => 3927,
                'name' => 'Connecticut',
                'country_id' => 231,
                'arab_name' => 'Connecticut',
            ),
            421 =>
            array (
                'id' => 3928,
                'name' => 'Delaware',
                'country_id' => 231,
                'arab_name' => 'Delaware',
            ),
            422 =>
            array (
                'id' => 3929,
                'name' => 'District of Columbia',
                'country_id' => 231,
                'arab_name' => 'District of Columbia',
            ),
            423 =>
            array (
                'id' => 3930,
                'name' => 'Florida',
                'country_id' => 231,
                'arab_name' => 'Florida',
            ),
            424 =>
            array (
                'id' => 3931,
                'name' => 'Georgia',
                'country_id' => 231,
                'arab_name' => 'Georgia',
            ),
            425 =>
            array (
                'id' => 3932,
                'name' => 'Hawaii',
                'country_id' => 231,
                'arab_name' => 'Hawaii',
            ),
            426 =>
            array (
                'id' => 3933,
                'name' => 'Idaho',
                'country_id' => 231,
                'arab_name' => 'Idaho',
            ),
            427 =>
            array (
                'id' => 3934,
                'name' => 'Illinois',
                'country_id' => 231,
                'arab_name' => 'Illinois',
            ),
            428 =>
            array (
                'id' => 3935,
                'name' => 'Indiana',
                'country_id' => 231,
                'arab_name' => 'Indiana',
            ),
            429 =>
            array (
                'id' => 3936,
                'name' => 'Iowa',
                'country_id' => 231,
                'arab_name' => 'Iowa',
            ),
            430 =>
            array (
                'id' => 3937,
                'name' => 'Kansas',
                'country_id' => 231,
                'arab_name' => 'Kansas',
            ),
            431 =>
            array (
                'id' => 3938,
                'name' => 'Kentucky',
                'country_id' => 231,
                'arab_name' => 'Kentucky',
            ),
            432 =>
            array (
                'id' => 3939,
                'name' => 'Louisiana',
                'country_id' => 231,
                'arab_name' => 'Louisiana',
            ),
            433 =>
            array (
                'id' => 3940,
                'name' => 'Lowa',
                'country_id' => 231,
                'arab_name' => 'Lowa',
            ),
            434 =>
            array (
                'id' => 3941,
                'name' => 'Maine',
                'country_id' => 231,
                'arab_name' => 'Maine',
            ),
            435 =>
            array (
                'id' => 3942,
                'name' => 'Maryland',
                'country_id' => 231,
                'arab_name' => 'Maryland',
            ),
            436 =>
            array (
                'id' => 3943,
                'name' => 'Massachusetts',
                'country_id' => 231,
                'arab_name' => 'Massachusetts',
            ),
            437 =>
            array (
                'id' => 3944,
                'name' => 'Medfield',
                'country_id' => 231,
                'arab_name' => 'Medfield',
            ),
            438 =>
            array (
                'id' => 3945,
                'name' => 'Michigan',
                'country_id' => 231,
                'arab_name' => 'Michigan',
            ),
            439 =>
            array (
                'id' => 3946,
                'name' => 'Minnesota',
                'country_id' => 231,
                'arab_name' => 'Minnesota',
            ),
            440 =>
            array (
                'id' => 3947,
                'name' => 'Mississippi',
                'country_id' => 231,
                'arab_name' => 'Mississippi',
            ),
            441 =>
            array (
                'id' => 3948,
                'name' => 'Missouri',
                'country_id' => 231,
                'arab_name' => 'Missouri',
            ),
            442 =>
            array (
                'id' => 3949,
                'name' => 'Montana',
                'country_id' => 231,
                'arab_name' => 'Montana',
            ),
            443 =>
            array (
                'id' => 3950,
                'name' => 'Nebraska',
                'country_id' => 231,
                'arab_name' => 'Nebraska',
            ),
            444 =>
            array (
                'id' => 3951,
                'name' => 'Nevada',
                'country_id' => 231,
                'arab_name' => 'Nevada',
            ),
            445 =>
            array (
                'id' => 3952,
                'name' => 'New Hampshire',
                'country_id' => 231,
                'arab_name' => 'New Hampshire',
            ),
            446 =>
            array (
                'id' => 3953,
                'name' => 'New Jersey',
                'country_id' => 231,
                'arab_name' => 'New Jersey',
            ),
            447 =>
            array (
                'id' => 3954,
                'name' => 'New Jersy',
                'country_id' => 231,
                'arab_name' => 'New Jersy',
            ),
            448 =>
            array (
                'id' => 3955,
                'name' => 'New Mexico',
                'country_id' => 231,
                'arab_name' => 'New Mexico',
            ),
            449 =>
            array (
                'id' => 3956,
                'name' => 'New York',
                'country_id' => 231,
                'arab_name' => 'New York',
            ),
            450 =>
            array (
                'id' => 3957,
                'name' => 'North Carolina',
                'country_id' => 231,
                'arab_name' => 'North Carolina',
            ),
            451 =>
            array (
                'id' => 3958,
                'name' => 'North Dakota',
                'country_id' => 231,
                'arab_name' => 'North Dakota',
            ),
            452 =>
            array (
                'id' => 3959,
                'name' => 'Ohio',
                'country_id' => 231,
                'arab_name' => 'Ohio',
            ),
            453 =>
            array (
                'id' => 3960,
                'name' => 'Oklahoma',
                'country_id' => 231,
                'arab_name' => 'Oklahoma',
            ),
            454 =>
            array (
                'id' => 3961,
                'name' => 'Ontario',
                'country_id' => 231,
                'arab_name' => 'Ontario',
            ),
            455 =>
            array (
                'id' => 3962,
                'name' => 'Oregon',
                'country_id' => 231,
                'arab_name' => 'Oregon',
            ),
            456 =>
            array (
                'id' => 3963,
                'name' => 'Pennsylvania',
                'country_id' => 231,
                'arab_name' => 'Pennsylvania',
            ),
            457 =>
            array (
                'id' => 3964,
                'name' => 'Ramey',
                'country_id' => 231,
                'arab_name' => 'Ramey',
            ),
            458 =>
            array (
                'id' => 3965,
                'name' => 'Rhode Island',
                'country_id' => 231,
                'arab_name' => 'Rhode Island',
            ),
            459 =>
            array (
                'id' => 3966,
                'name' => 'South Carolina',
                'country_id' => 231,
                'arab_name' => 'South Carolina',
            ),
            460 =>
            array (
                'id' => 3967,
                'name' => 'South Dakota',
                'country_id' => 231,
                'arab_name' => 'South Dakota',
            ),
            461 =>
            array (
                'id' => 3968,
                'name' => 'Sublimity',
                'country_id' => 231,
                'arab_name' => 'Sublimity',
            ),
            462 =>
            array (
                'id' => 3969,
                'name' => 'Tennessee',
                'country_id' => 231,
                'arab_name' => 'Tennessee',
            ),
            463 =>
            array (
                'id' => 3970,
                'name' => 'Texas',
                'country_id' => 231,
                'arab_name' => 'Texas',
            ),
            464 =>
            array (
                'id' => 3971,
                'name' => 'Trimble',
                'country_id' => 231,
                'arab_name' => 'Trimble',
            ),
            465 =>
            array (
                'id' => 3972,
                'name' => 'Utah',
                'country_id' => 231,
                'arab_name' => 'Utah',
            ),
            466 =>
            array (
                'id' => 3973,
                'name' => 'Vermont',
                'country_id' => 231,
                'arab_name' => 'Vermont',
            ),
            467 =>
            array (
                'id' => 3974,
                'name' => 'Virginia',
                'country_id' => 231,
                'arab_name' => 'Virginia',
            ),
            468 =>
            array (
                'id' => 3975,
                'name' => 'Washington',
                'country_id' => 231,
                'arab_name' => 'Washington',
            ),
            469 =>
            array (
                'id' => 3976,
                'name' => 'West Virginia',
                'country_id' => 231,
                'arab_name' => 'West Virginia',
            ),
            470 =>
            array (
                'id' => 3977,
                'name' => 'Wisconsin',
                'country_id' => 231,
                'arab_name' => 'Wisconsin',
            ),
            471 =>
            array (
                'id' => 3978,
                'name' => 'Wyoming',
                'country_id' => 231,
                'arab_name' => 'Wyoming',
            ),
            472 =>
            array (
                'id' => 3979,
                'name' => 'United States Minor Outlying I',
                'country_id' => 232,
                'arab_name' => 'United States Minor Outlying I',
            ),
            473 =>
            array (
                'id' => 3980,
                'name' => 'Artigas',
                'country_id' => 233,
                'arab_name' => 'Artigas',
            ),
            474 =>
            array (
                'id' => 3981,
                'name' => 'Canelones',
                'country_id' => 233,
                'arab_name' => 'Canelones',
            ),
            475 =>
            array (
                'id' => 3982,
                'name' => 'Cerro Largo',
                'country_id' => 233,
                'arab_name' => 'Cerro Largo',
            ),
            476 =>
            array (
                'id' => 3983,
                'name' => 'Colonia',
                'country_id' => 233,
                'arab_name' => 'Colonia',
            ),
            477 =>
            array (
                'id' => 3984,
                'name' => 'Durazno',
                'country_id' => 233,
                'arab_name' => 'Durazno',
            ),
            478 =>
            array (
                'id' => 3985,
                'name' => 'FLorida',
                'country_id' => 233,
                'arab_name' => 'FLorida',
            ),
            479 =>
            array (
                'id' => 3986,
                'name' => 'Flores',
                'country_id' => 233,
                'arab_name' => 'Flores',
            ),
            480 =>
            array (
                'id' => 3987,
                'name' => 'Lavalleja',
                'country_id' => 233,
                'arab_name' => 'Lavalleja',
            ),
            481 =>
            array (
                'id' => 3988,
                'name' => 'Maldonado',
                'country_id' => 233,
                'arab_name' => 'Maldonado',
            ),
            482 =>
            array (
                'id' => 3989,
                'name' => 'Montevideo',
                'country_id' => 233,
                'arab_name' => 'Montevideo',
            ),
            483 =>
            array (
                'id' => 3990,
                'name' => 'Paysandu',
                'country_id' => 233,
                'arab_name' => 'Paysandu',
            ),
            484 =>
            array (
                'id' => 3991,
                'name' => 'Rio Negro',
                'country_id' => 233,
                'arab_name' => 'Rio Negro',
            ),
            485 =>
            array (
                'id' => 3992,
                'name' => 'Rivera',
                'country_id' => 233,
                'arab_name' => 'Rivera',
            ),
            486 =>
            array (
                'id' => 3993,
                'name' => 'Rocha',
                'country_id' => 233,
                'arab_name' => 'Rocha',
            ),
            487 =>
            array (
                'id' => 3994,
                'name' => 'Salto',
                'country_id' => 233,
                'arab_name' => 'Salto',
            ),
            488 =>
            array (
                'id' => 3995,
                'name' => 'San Jose',
                'country_id' => 233,
                'arab_name' => 'San Jose',
            ),
            489 =>
            array (
                'id' => 3996,
                'name' => 'Soriano',
                'country_id' => 233,
                'arab_name' => 'Soriano',
            ),
            490 =>
            array (
                'id' => 3997,
                'name' => 'Tacuarembo',
                'country_id' => 233,
                'arab_name' => 'Tacuarembo',
            ),
            491 =>
            array (
                'id' => 3998,
                'name' => 'Treinta y Tres',
                'country_id' => 233,
                'arab_name' => 'Treinta y Tres',
            ),
            492 =>
            array (
                'id' => 3999,
                'name' => 'Andijon',
                'country_id' => 234,
                'arab_name' => 'Andijon',
            ),
            493 =>
            array (
                'id' => 4000,
                'name' => 'Buhoro',
                'country_id' => 234,
                'arab_name' => 'Buhoro',
            ),
            494 =>
            array (
                'id' => 4001,
                'name' => 'Buxoro Viloyati',
                'country_id' => 234,
                'arab_name' => 'Buxoro Viloyati',
            ),
            495 =>
            array (
                'id' => 4002,
                'name' => 'Cizah',
                'country_id' => 234,
                'arab_name' => 'Cizah',
            ),
            496 =>
            array (
                'id' => 4003,
                'name' => 'Fargona',
                'country_id' => 234,
                'arab_name' => 'Fargona',
            ),
            497 =>
            array (
                'id' => 4004,
                'name' => 'Horazm',
                'country_id' => 234,
                'arab_name' => 'Horazm',
            ),
            498 =>
            array (
                'id' => 4005,
                'name' => 'Kaskadar',
                'country_id' => 234,
                'arab_name' => 'Kaskadar',
            ),
            499 =>
            array (
                'id' => 4006,
                'name' => 'Korakalpogiston',
                'country_id' => 234,
                'arab_name' => 'Korakalpogiston',
            ),
        ));
        \DB::table('states')->insert(array (
            0 =>
            array (
                'id' => 4007,
                'name' => 'Namangan',
                'country_id' => 234,
                'arab_name' => 'Namangan',
            ),
            1 =>
            array (
                'id' => 4008,
                'name' => 'Navoi',
                'country_id' => 234,
                'arab_name' => 'Navoi',
            ),
            2 =>
            array (
                'id' => 4009,
                'name' => 'Samarkand',
                'country_id' => 234,
                'arab_name' => 'Samarkand',
            ),
            3 =>
            array (
                'id' => 4010,
                'name' => 'Sirdare',
                'country_id' => 234,
                'arab_name' => 'Sirdare',
            ),
            4 =>
            array (
                'id' => 4011,
                'name' => 'Surhondar',
                'country_id' => 234,
                'arab_name' => 'Surhondar',
            ),
            5 =>
            array (
                'id' => 4012,
                'name' => 'Toskent',
                'country_id' => 234,
                'arab_name' => 'Toskent',
            ),
            6 =>
            array (
                'id' => 4013,
                'name' => 'Malampa',
                'country_id' => 235,
                'arab_name' => 'Malampa',
            ),
            7 =>
            array (
                'id' => 4014,
                'name' => 'Penama',
                'country_id' => 235,
                'arab_name' => 'Penama',
            ),
            8 =>
            array (
                'id' => 4015,
                'name' => 'Sanma',
                'country_id' => 235,
                'arab_name' => 'Sanma',
            ),
            9 =>
            array (
                'id' => 4016,
                'name' => 'Shefa',
                'country_id' => 235,
                'arab_name' => 'Shefa',
            ),
            10 =>
            array (
                'id' => 4017,
                'name' => 'Tafea',
                'country_id' => 235,
                'arab_name' => 'Tafea',
            ),
            11 =>
            array (
                'id' => 4018,
                'name' => 'Torba',
                'country_id' => 235,
                'arab_name' => 'Torba',
            ),
            12 =>
            array (
                'id' => 4019,
            'name' => 'Vatican City State (Holy See)',
                'country_id' => 236,
            'arab_name' => 'Vatican City State (Holy See)',
            ),
            13 =>
            array (
                'id' => 4020,
                'name' => 'Amazonas',
                'country_id' => 237,
                'arab_name' => 'Amazonas',
            ),
            14 =>
            array (
                'id' => 4021,
                'name' => 'Anzoategui',
                'country_id' => 237,
                'arab_name' => 'Anzoategui',
            ),
            15 =>
            array (
                'id' => 4022,
                'name' => 'Apure',
                'country_id' => 237,
                'arab_name' => 'Apure',
            ),
            16 =>
            array (
                'id' => 4023,
                'name' => 'Aragua',
                'country_id' => 237,
                'arab_name' => 'Aragua',
            ),
            17 =>
            array (
                'id' => 4024,
                'name' => 'Barinas',
                'country_id' => 237,
                'arab_name' => 'Barinas',
            ),
            18 =>
            array (
                'id' => 4025,
                'name' => 'Bolivar',
                'country_id' => 237,
                'arab_name' => 'Bolivar',
            ),
            19 =>
            array (
                'id' => 4026,
                'name' => 'Carabobo',
                'country_id' => 237,
                'arab_name' => 'Carabobo',
            ),
            20 =>
            array (
                'id' => 4027,
                'name' => 'Cojedes',
                'country_id' => 237,
                'arab_name' => 'Cojedes',
            ),
            21 =>
            array (
                'id' => 4028,
                'name' => 'Delta Amacuro',
                'country_id' => 237,
                'arab_name' => 'Delta Amacuro',
            ),
            22 =>
            array (
                'id' => 4029,
                'name' => 'Distrito Federal',
                'country_id' => 237,
                'arab_name' => 'Distrito Federal',
            ),
            23 =>
            array (
                'id' => 4030,
                'name' => 'Falcon',
                'country_id' => 237,
                'arab_name' => 'Falcon',
            ),
            24 =>
            array (
                'id' => 4031,
                'name' => 'Guarico',
                'country_id' => 237,
                'arab_name' => 'Guarico',
            ),
            25 =>
            array (
                'id' => 4032,
                'name' => 'Lara',
                'country_id' => 237,
                'arab_name' => 'Lara',
            ),
            26 =>
            array (
                'id' => 4033,
                'name' => 'Merida',
                'country_id' => 237,
                'arab_name' => 'Merida',
            ),
            27 =>
            array (
                'id' => 4034,
                'name' => 'Miranda',
                'country_id' => 237,
                'arab_name' => 'Miranda',
            ),
            28 =>
            array (
                'id' => 4035,
                'name' => 'Monagas',
                'country_id' => 237,
                'arab_name' => 'Monagas',
            ),
            29 =>
            array (
                'id' => 4036,
                'name' => 'Nueva Esparta',
                'country_id' => 237,
                'arab_name' => 'Nueva Esparta',
            ),
            30 =>
            array (
                'id' => 4037,
                'name' => 'Portuguesa',
                'country_id' => 237,
                'arab_name' => 'Portuguesa',
            ),
            31 =>
            array (
                'id' => 4038,
                'name' => 'Sucre',
                'country_id' => 237,
                'arab_name' => 'Sucre',
            ),
            32 =>
            array (
                'id' => 4039,
                'name' => 'Tachira',
                'country_id' => 237,
                'arab_name' => 'Tachira',
            ),
            33 =>
            array (
                'id' => 4040,
                'name' => 'Trujillo',
                'country_id' => 237,
                'arab_name' => 'Trujillo',
            ),
            34 =>
            array (
                'id' => 4041,
                'name' => 'Vargas',
                'country_id' => 237,
                'arab_name' => 'Vargas',
            ),
            35 =>
            array (
                'id' => 4042,
                'name' => 'Yaracuy',
                'country_id' => 237,
                'arab_name' => 'Yaracuy',
            ),
            36 =>
            array (
                'id' => 4043,
                'name' => 'Zulia',
                'country_id' => 237,
                'arab_name' => 'Zulia',
            ),
            37 =>
            array (
                'id' => 4044,
                'name' => 'Bac Giang',
                'country_id' => 238,
                'arab_name' => 'Bac Giang',
            ),
            38 =>
            array (
                'id' => 4045,
                'name' => 'Binh Dinh',
                'country_id' => 238,
                'arab_name' => 'Binh Dinh',
            ),
            39 =>
            array (
                'id' => 4046,
                'name' => 'Binh Duong',
                'country_id' => 238,
                'arab_name' => 'Binh Duong',
            ),
            40 =>
            array (
                'id' => 4047,
                'name' => 'Da Nang',
                'country_id' => 238,
                'arab_name' => 'Da Nang',
            ),
            41 =>
            array (
                'id' => 4048,
                'name' => 'Dong Bang Song Cuu Long',
                'country_id' => 238,
                'arab_name' => 'Dong Bang Song Cuu Long',
            ),
            42 =>
            array (
                'id' => 4049,
                'name' => 'Dong Bang Song Hong',
                'country_id' => 238,
                'arab_name' => 'Dong Bang Song Hong',
            ),
            43 =>
            array (
                'id' => 4050,
                'name' => 'Dong Nai',
                'country_id' => 238,
                'arab_name' => 'Dong Nai',
            ),
            44 =>
            array (
                'id' => 4051,
                'name' => 'Dong Nam Bo',
                'country_id' => 238,
                'arab_name' => 'Dong Nam Bo',
            ),
            45 =>
            array (
                'id' => 4052,
                'name' => 'Duyen Hai Mien Trung',
                'country_id' => 238,
                'arab_name' => 'Duyen Hai Mien Trung',
            ),
            46 =>
            array (
                'id' => 4053,
                'name' => 'Hanoi',
                'country_id' => 238,
                'arab_name' => 'Hanoi',
            ),
            47 =>
            array (
                'id' => 4054,
                'name' => 'Hung Yen',
                'country_id' => 238,
                'arab_name' => 'Hung Yen',
            ),
            48 =>
            array (
                'id' => 4055,
                'name' => 'Khu Bon Cu',
                'country_id' => 238,
                'arab_name' => 'Khu Bon Cu',
            ),
            49 =>
            array (
                'id' => 4056,
                'name' => 'Long An',
                'country_id' => 238,
                'arab_name' => 'Long An',
            ),
            50 =>
            array (
                'id' => 4057,
                'name' => 'Mien Nui Va Trung Du',
                'country_id' => 238,
                'arab_name' => 'Mien Nui Va Trung Du',
            ),
            51 =>
            array (
                'id' => 4058,
                'name' => 'Thai Nguyen',
                'country_id' => 238,
                'arab_name' => 'Thai Nguyen',
            ),
            52 =>
            array (
                'id' => 4059,
                'name' => 'Thanh Pho Ho Chi Minh',
                'country_id' => 238,
                'arab_name' => 'Thanh Pho Ho Chi Minh',
            ),
            53 =>
            array (
                'id' => 4060,
                'name' => 'Thu Do Ha Noi',
                'country_id' => 238,
                'arab_name' => 'Thu Do Ha Noi',
            ),
            54 =>
            array (
                'id' => 4061,
                'name' => 'Tinh Can Tho',
                'country_id' => 238,
                'arab_name' => 'Tinh Can Tho',
            ),
            55 =>
            array (
                'id' => 4062,
                'name' => 'Tinh Da Nang',
                'country_id' => 238,
                'arab_name' => 'Tinh Da Nang',
            ),
            56 =>
            array (
                'id' => 4063,
                'name' => 'Tinh Gia Lai',
                'country_id' => 238,
                'arab_name' => 'Tinh Gia Lai',
            ),
            57 =>
            array (
                'id' => 4064,
                'name' => 'Anegada',
                'country_id' => 239,
                'arab_name' => 'Anegada',
            ),
            58 =>
            array (
                'id' => 4065,
                'name' => 'Jost van Dyke',
                'country_id' => 239,
                'arab_name' => 'Jost van Dyke',
            ),
            59 =>
            array (
                'id' => 4066,
                'name' => 'Tortola',
                'country_id' => 239,
                'arab_name' => 'Tortola',
            ),
            60 =>
            array (
                'id' => 4067,
                'name' => 'Saint Croix',
                'country_id' => 240,
                'arab_name' => 'Saint Croix',
            ),
            61 =>
            array (
                'id' => 4068,
                'name' => 'Saint John',
                'country_id' => 240,
                'arab_name' => 'Saint John',
            ),
            62 =>
            array (
                'id' => 4069,
                'name' => 'Saint Thomas',
                'country_id' => 240,
                'arab_name' => 'Saint Thomas',
            ),
            63 =>
            array (
                'id' => 4070,
                'name' => 'Alo',
                'country_id' => 241,
                'arab_name' => 'Alo',
            ),
            64 =>
            array (
                'id' => 4071,
                'name' => 'Singave',
                'country_id' => 241,
                'arab_name' => 'Singave',
            ),
            65 =>
            array (
                'id' => 4072,
                'name' => 'Wallis',
                'country_id' => 241,
                'arab_name' => 'Wallis',
            ),
            66 =>
            array (
                'id' => 4073,
                'name' => 'Bu Jaydur',
                'country_id' => 242,
                'arab_name' => 'Bu Jaydur',
            ),
            67 =>
            array (
                'id' => 4074,
                'name' => 'Wad-adh-Dhahab',
                'country_id' => 242,
                'arab_name' => 'Wad-adh-Dhahab',
            ),
            68 =>
            array (
                'id' => 4075,
                'name' => 'al-\'Ayun',
                'country_id' => 242,
                'arab_name' => 'al-\'Ayun',
            ),
            69 =>
            array (
                'id' => 4076,
                'name' => 'as-Samarah',
                'country_id' => 242,
                'arab_name' => 'as-Samarah',
            ),
            70 =>
            array (
                'id' => 4077,
                'name' => '\'Adan',
                'country_id' => 243,
                'arab_name' => '\'Adan',
            ),
            71 =>
            array (
                'id' => 4078,
                'name' => 'Abyan',
                'country_id' => 243,
                'arab_name' => 'Abyan',
            ),
            72 =>
            array (
                'id' => 4079,
                'name' => 'Dhamar',
                'country_id' => 243,
                'arab_name' => 'Dhamar',
            ),
            73 =>
            array (
                'id' => 4080,
                'name' => 'Hadramaut',
                'country_id' => 243,
                'arab_name' => 'Hadramaut',
            ),
            74 =>
            array (
                'id' => 4081,
                'name' => 'Hajjah',
                'country_id' => 243,
                'arab_name' => 'Hajjah',
            ),
            75 =>
            array (
                'id' => 4082,
                'name' => 'Hudaydah',
                'country_id' => 243,
                'arab_name' => 'Hudaydah',
            ),
            76 =>
            array (
                'id' => 4083,
                'name' => 'Ibb',
                'country_id' => 243,
                'arab_name' => 'Ibb',
            ),
            77 =>
            array (
                'id' => 4084,
                'name' => 'Lahij',
                'country_id' => 243,
                'arab_name' => 'Lahij',
            ),
            78 =>
            array (
                'id' => 4085,
                'name' => 'Ma\'rib',
                'country_id' => 243,
                'arab_name' => 'Ma\'rib',
            ),
            79 =>
            array (
                'id' => 4086,
                'name' => 'Madinat San\'a',
                'country_id' => 243,
                'arab_name' => 'Madinat San\'a',
            ),
            80 =>
            array (
                'id' => 4087,
                'name' => 'Sa\'dah',
                'country_id' => 243,
                'arab_name' => 'Sa\'dah',
            ),
            81 =>
            array (
                'id' => 4088,
                'name' => 'Sana',
                'country_id' => 243,
                'arab_name' => 'Sana',
            ),
            82 =>
            array (
                'id' => 4089,
                'name' => 'Shabwah',
                'country_id' => 243,
                'arab_name' => 'Shabwah',
            ),
            83 =>
            array (
                'id' => 4090,
                'name' => 'Ta\'izz',
                'country_id' => 243,
                'arab_name' => 'Ta\'izz',
            ),
            84 =>
            array (
                'id' => 4091,
                'name' => 'al-Bayda',
                'country_id' => 243,
                'arab_name' => 'al-Bayda',
            ),
            85 =>
            array (
                'id' => 4092,
                'name' => 'al-Hudaydah',
                'country_id' => 243,
                'arab_name' => 'al-Hudaydah',
            ),
            86 =>
            array (
                'id' => 4093,
                'name' => 'al-Jawf',
                'country_id' => 243,
                'arab_name' => 'al-Jawf',
            ),
            87 =>
            array (
                'id' => 4094,
                'name' => 'al-Mahrah',
                'country_id' => 243,
                'arab_name' => 'al-Mahrah',
            ),
            88 =>
            array (
                'id' => 4095,
                'name' => 'al-Mahwit',
                'country_id' => 243,
                'arab_name' => 'al-Mahwit',
            ),
            89 =>
            array (
                'id' => 4096,
                'name' => 'Central Serbia',
                'country_id' => 244,
                'arab_name' => 'Central Serbia',
            ),
            90 =>
            array (
                'id' => 4097,
                'name' => 'Kosovo and Metohija',
                'country_id' => 244,
                'arab_name' => 'Kosovo and Metohija',
            ),
            91 =>
            array (
                'id' => 4098,
                'name' => 'Montenegro',
                'country_id' => 244,
                'arab_name' => 'Montenegro',
            ),
            92 =>
            array (
                'id' => 4099,
                'name' => 'Republic of Serbia',
                'country_id' => 244,
                'arab_name' => 'Republic of Serbia',
            ),
            93 =>
            array (
                'id' => 4100,
                'name' => 'Serbia',
                'country_id' => 244,
                'arab_name' => 'Serbia',
            ),
            94 =>
            array (
                'id' => 4101,
                'name' => 'Vojvodina',
                'country_id' => 244,
                'arab_name' => 'Vojvodina',
            ),
            95 =>
            array (
                'id' => 4102,
                'name' => 'Central',
                'country_id' => 245,
                'arab_name' => 'Central',
            ),
            96 =>
            array (
                'id' => 4103,
                'name' => 'Copperbelt',
                'country_id' => 245,
                'arab_name' => 'Copperbelt',
            ),
            97 =>
            array (
                'id' => 4104,
                'name' => 'Eastern',
                'country_id' => 245,
                'arab_name' => 'Eastern',
            ),
            98 =>
            array (
                'id' => 4105,
                'name' => 'Luapala',
                'country_id' => 245,
                'arab_name' => 'Luapala',
            ),
            99 =>
            array (
                'id' => 4106,
                'name' => 'Lusaka',
                'country_id' => 245,
                'arab_name' => 'Lusaka',
            ),
            100 =>
            array (
                'id' => 4107,
                'name' => 'North-Western',
                'country_id' => 245,
                'arab_name' => 'North-Western',
            ),
            101 =>
            array (
                'id' => 4108,
                'name' => 'Northern',
                'country_id' => 245,
                'arab_name' => 'Northern',
            ),
            102 =>
            array (
                'id' => 4109,
                'name' => 'Southern',
                'country_id' => 245,
                'arab_name' => 'Southern',
            ),
            103 =>
            array (
                'id' => 4110,
                'name' => 'Western',
                'country_id' => 245,
                'arab_name' => 'Western',
            ),
            104 =>
            array (
                'id' => 4111,
                'name' => 'Bulawayo',
                'country_id' => 246,
                'arab_name' => 'Bulawayo',
            ),
            105 =>
            array (
                'id' => 4112,
                'name' => 'Harare',
                'country_id' => 246,
                'arab_name' => 'Harare',
            ),
            106 =>
            array (
                'id' => 4113,
                'name' => 'Manicaland',
                'country_id' => 246,
                'arab_name' => 'Manicaland',
            ),
            107 =>
            array (
                'id' => 4114,
                'name' => 'Mashonaland Central',
                'country_id' => 246,
                'arab_name' => 'Mashonaland Central',
            ),
            108 =>
            array (
                'id' => 4115,
                'name' => 'Mashonaland East',
                'country_id' => 246,
                'arab_name' => 'Mashonaland East',
            ),
            109 =>
            array (
                'id' => 4116,
                'name' => 'Mashonaland West',
                'country_id' => 246,
                'arab_name' => 'Mashonaland West',
            ),
            110 =>
            array (
                'id' => 4117,
                'name' => 'Masvingo',
                'country_id' => 246,
                'arab_name' => 'Masvingo',
            ),
            111 =>
            array (
                'id' => 4118,
                'name' => 'Matabeleland North',
                'country_id' => 246,
                'arab_name' => 'Matabeleland North',
            ),
            112 =>
            array (
                'id' => 4119,
                'name' => 'Matabeleland South',
                'country_id' => 246,
                'arab_name' => 'Matabeleland South',
            ),
            113 =>
            array (
                'id' => 4120,
                'name' => 'Midlands',
                'country_id' => 246,
                'arab_name' => 'Midlands',
            ),
        ));


    }
}
