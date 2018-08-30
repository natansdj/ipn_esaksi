<?php

use Illuminate\Database\Seeder;

class RegenciesTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('regencies')->delete();

		\DB::table('regencies')->insert(array(
			0   =>
				array(
					'id'          => '1101',
					'province_id' => '11',
					'name'        => 'KABUPATEN SIMEULUE',
				),
			1   =>
				array(
					'id'          => '1102',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH SINGKIL',
				),
			2   =>
				array(
					'id'          => '1103',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH SELATAN',
				),
			3   =>
				array(
					'id'          => '1104',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH TENGGARA',
				),
			4   =>
				array(
					'id'          => '1105',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH TIMUR',
				),
			5   =>
				array(
					'id'          => '1106',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH TENGAH',
				),
			6   =>
				array(
					'id'          => '1107',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH BARAT',
				),
			7   =>
				array(
					'id'          => '1108',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH BESAR',
				),
			8   =>
				array(
					'id'          => '1109',
					'province_id' => '11',
					'name'        => 'KABUPATEN PIDIE',
				),
			9   =>
				array(
					'id'          => '1110',
					'province_id' => '11',
					'name'        => 'KABUPATEN BIREUEN',
				),
			10  =>
				array(
					'id'          => '1111',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH UTARA',
				),
			11  =>
				array(
					'id'          => '1112',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH BARAT DAYA',
				),
			12  =>
				array(
					'id'          => '1113',
					'province_id' => '11',
					'name'        => 'KABUPATEN GAYO LUES',
				),
			13  =>
				array(
					'id'          => '1114',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH TAMIANG',
				),
			14  =>
				array(
					'id'          => '1115',
					'province_id' => '11',
					'name'        => 'KABUPATEN NAGAN RAYA',
				),
			15  =>
				array(
					'id'          => '1116',
					'province_id' => '11',
					'name'        => 'KABUPATEN ACEH JAYA',
				),
			16  =>
				array(
					'id'          => '1117',
					'province_id' => '11',
					'name'        => 'KABUPATEN BENER MERIAH',
				),
			17  =>
				array(
					'id'          => '1118',
					'province_id' => '11',
					'name'        => 'KABUPATEN PIDIE JAYA',
				),
			18  =>
				array(
					'id'          => '1171',
					'province_id' => '11',
					'name'        => 'KOTA BANDA ACEH',
				),
			19  =>
				array(
					'id'          => '1172',
					'province_id' => '11',
					'name'        => 'KOTA SABANG',
				),
			20  =>
				array(
					'id'          => '1173',
					'province_id' => '11',
					'name'        => 'KOTA LANGSA',
				),
			21  =>
				array(
					'id'          => '1174',
					'province_id' => '11',
					'name'        => 'KOTA LHOKSEUMAWE',
				),
			22  =>
				array(
					'id'          => '1175',
					'province_id' => '11',
					'name'        => 'KOTA SUBULUSSALAM',
				),
			23  =>
				array(
					'id'          => '1201',
					'province_id' => '12',
					'name'        => 'KABUPATEN NIAS',
				),
			24  =>
				array(
					'id'          => '1202',
					'province_id' => '12',
					'name'        => 'KABUPATEN MANDAILING NATAL',
				),
			25  =>
				array(
					'id'          => '1203',
					'province_id' => '12',
					'name'        => 'KABUPATEN TAPANULI SELATAN',
				),
			26  =>
				array(
					'id'          => '1204',
					'province_id' => '12',
					'name'        => 'KABUPATEN TAPANULI TENGAH',
				),
			27  =>
				array(
					'id'          => '1205',
					'province_id' => '12',
					'name'        => 'KABUPATEN TAPANULI UTARA',
				),
			28  =>
				array(
					'id'          => '1206',
					'province_id' => '12',
					'name'        => 'KABUPATEN TOBA SAMOSIR',
				),
			29  =>
				array(
					'id'          => '1207',
					'province_id' => '12',
					'name'        => 'KABUPATEN LABUHAN BATU',
				),
			30  =>
				array(
					'id'          => '1208',
					'province_id' => '12',
					'name'        => 'KABUPATEN ASAHAN',
				),
			31  =>
				array(
					'id'          => '1209',
					'province_id' => '12',
					'name'        => 'KABUPATEN SIMALUNGUN',
				),
			32  =>
				array(
					'id'          => '1210',
					'province_id' => '12',
					'name'        => 'KABUPATEN DAIRI',
				),
			33  =>
				array(
					'id'          => '1211',
					'province_id' => '12',
					'name'        => 'KABUPATEN KARO',
				),
			34  =>
				array(
					'id'          => '1212',
					'province_id' => '12',
					'name'        => 'KABUPATEN DELI SERDANG',
				),
			35  =>
				array(
					'id'          => '1213',
					'province_id' => '12',
					'name'        => 'KABUPATEN LANGKAT',
				),
			36  =>
				array(
					'id'          => '1214',
					'province_id' => '12',
					'name'        => 'KABUPATEN NIAS SELATAN',
				),
			37  =>
				array(
					'id'          => '1215',
					'province_id' => '12',
					'name'        => 'KABUPATEN HUMBANG HASUNDUTAN',
				),
			38  =>
				array(
					'id'          => '1216',
					'province_id' => '12',
					'name'        => 'KABUPATEN PAKPAK BHARAT',
				),
			39  =>
				array(
					'id'          => '1217',
					'province_id' => '12',
					'name'        => 'KABUPATEN SAMOSIR',
				),
			40  =>
				array(
					'id'          => '1218',
					'province_id' => '12',
					'name'        => 'KABUPATEN SERDANG BEDAGAI',
				),
			41  =>
				array(
					'id'          => '1219',
					'province_id' => '12',
					'name'        => 'KABUPATEN BATU BARA',
				),
			42  =>
				array(
					'id'          => '1220',
					'province_id' => '12',
					'name'        => 'KABUPATEN PADANG LAWAS UTARA',
				),
			43  =>
				array(
					'id'          => '1221',
					'province_id' => '12',
					'name'        => 'KABUPATEN PADANG LAWAS',
				),
			44  =>
				array(
					'id'          => '1222',
					'province_id' => '12',
					'name'        => 'KABUPATEN LABUHAN BATU SELATAN',
				),
			45  =>
				array(
					'id'          => '1223',
					'province_id' => '12',
					'name'        => 'KABUPATEN LABUHAN BATU UTARA',
				),
			46  =>
				array(
					'id'          => '1224',
					'province_id' => '12',
					'name'        => 'KABUPATEN NIAS UTARA',
				),
			47  =>
				array(
					'id'          => '1225',
					'province_id' => '12',
					'name'        => 'KABUPATEN NIAS BARAT',
				),
			48  =>
				array(
					'id'          => '1271',
					'province_id' => '12',
					'name'        => 'KOTA SIBOLGA',
				),
			49  =>
				array(
					'id'          => '1272',
					'province_id' => '12',
					'name'        => 'KOTA TANJUNG BALAI',
				),
			50  =>
				array(
					'id'          => '1273',
					'province_id' => '12',
					'name'        => 'KOTA PEMATANG SIANTAR',
				),
			51  =>
				array(
					'id'          => '1274',
					'province_id' => '12',
					'name'        => 'KOTA TEBING TINGGI',
				),
			52  =>
				array(
					'id'          => '1275',
					'province_id' => '12',
					'name'        => 'KOTA MEDAN',
				),
			53  =>
				array(
					'id'          => '1276',
					'province_id' => '12',
					'name'        => 'KOTA BINJAI',
				),
			54  =>
				array(
					'id'          => '1277',
					'province_id' => '12',
					'name'        => 'KOTA PADANGSIDIMPUAN',
				),
			55  =>
				array(
					'id'          => '1278',
					'province_id' => '12',
					'name'        => 'KOTA GUNUNGSITOLI',
				),
			56  =>
				array(
					'id'          => '1301',
					'province_id' => '13',
					'name'        => 'KABUPATEN KEPULAUAN MENTAWAI',
				),
			57  =>
				array(
					'id'          => '1302',
					'province_id' => '13',
					'name'        => 'KABUPATEN PESISIR SELATAN',
				),
			58  =>
				array(
					'id'          => '1303',
					'province_id' => '13',
					'name'        => 'KABUPATEN SOLOK',
				),
			59  =>
				array(
					'id'          => '1304',
					'province_id' => '13',
					'name'        => 'KABUPATEN SIJUNJUNG',
				),
			60  =>
				array(
					'id'          => '1305',
					'province_id' => '13',
					'name'        => 'KABUPATEN TANAH DATAR',
				),
			61  =>
				array(
					'id'          => '1306',
					'province_id' => '13',
					'name'        => 'KABUPATEN PADANG PARIAMAN',
				),
			62  =>
				array(
					'id'          => '1307',
					'province_id' => '13',
					'name'        => 'KABUPATEN AGAM',
				),
			63  =>
				array(
					'id'          => '1308',
					'province_id' => '13',
					'name'        => 'KABUPATEN LIMA PULUH KOTA',
				),
			64  =>
				array(
					'id'          => '1309',
					'province_id' => '13',
					'name'        => 'KABUPATEN PASAMAN',
				),
			65  =>
				array(
					'id'          => '1310',
					'province_id' => '13',
					'name'        => 'KABUPATEN SOLOK SELATAN',
				),
			66  =>
				array(
					'id'          => '1311',
					'province_id' => '13',
					'name'        => 'KABUPATEN DHARMASRAYA',
				),
			67  =>
				array(
					'id'          => '1312',
					'province_id' => '13',
					'name'        => 'KABUPATEN PASAMAN BARAT',
				),
			68  =>
				array(
					'id'          => '1371',
					'province_id' => '13',
					'name'        => 'KOTA PADANG',
				),
			69  =>
				array(
					'id'          => '1372',
					'province_id' => '13',
					'name'        => 'KOTA SOLOK',
				),
			70  =>
				array(
					'id'          => '1373',
					'province_id' => '13',
					'name'        => 'KOTA SAWAH LUNTO',
				),
			71  =>
				array(
					'id'          => '1374',
					'province_id' => '13',
					'name'        => 'KOTA PADANG PANJANG',
				),
			72  =>
				array(
					'id'          => '1375',
					'province_id' => '13',
					'name'        => 'KOTA BUKITTINGGI',
				),
			73  =>
				array(
					'id'          => '1376',
					'province_id' => '13',
					'name'        => 'KOTA PAYAKUMBUH',
				),
			74  =>
				array(
					'id'          => '1377',
					'province_id' => '13',
					'name'        => 'KOTA PARIAMAN',
				),
			75  =>
				array(
					'id'          => '1401',
					'province_id' => '14',
					'name'        => 'KABUPATEN KUANTAN SINGINGI',
				),
			76  =>
				array(
					'id'          => '1402',
					'province_id' => '14',
					'name'        => 'KABUPATEN INDRAGIRI HULU',
				),
			77  =>
				array(
					'id'          => '1403',
					'province_id' => '14',
					'name'        => 'KABUPATEN INDRAGIRI HILIR',
				),
			78  =>
				array(
					'id'          => '1404',
					'province_id' => '14',
					'name'        => 'KABUPATEN PELALAWAN',
				),
			79  =>
				array(
					'id'          => '1405',
					'province_id' => '14',
					'name'        => 'KABUPATEN S I A K',
				),
			80  =>
				array(
					'id'          => '1406',
					'province_id' => '14',
					'name'        => 'KABUPATEN KAMPAR',
				),
			81  =>
				array(
					'id'          => '1407',
					'province_id' => '14',
					'name'        => 'KABUPATEN ROKAN HULU',
				),
			82  =>
				array(
					'id'          => '1408',
					'province_id' => '14',
					'name'        => 'KABUPATEN BENGKALIS',
				),
			83  =>
				array(
					'id'          => '1409',
					'province_id' => '14',
					'name'        => 'KABUPATEN ROKAN HILIR',
				),
			84  =>
				array(
					'id'          => '1410',
					'province_id' => '14',
					'name'        => 'KABUPATEN KEPULAUAN MERANTI',
				),
			85  =>
				array(
					'id'          => '1471',
					'province_id' => '14',
					'name'        => 'KOTA PEKANBARU',
				),
			86  =>
				array(
					'id'          => '1473',
					'province_id' => '14',
					'name'        => 'KOTA D U M A I',
				),
			87  =>
				array(
					'id'          => '1501',
					'province_id' => '15',
					'name'        => 'KABUPATEN KERINCI',
				),
			88  =>
				array(
					'id'          => '1502',
					'province_id' => '15',
					'name'        => 'KABUPATEN MERANGIN',
				),
			89  =>
				array(
					'id'          => '1503',
					'province_id' => '15',
					'name'        => 'KABUPATEN SAROLANGUN',
				),
			90  =>
				array(
					'id'          => '1504',
					'province_id' => '15',
					'name'        => 'KABUPATEN BATANG HARI',
				),
			91  =>
				array(
					'id'          => '1505',
					'province_id' => '15',
					'name'        => 'KABUPATEN MUARO JAMBI',
				),
			92  =>
				array(
					'id'          => '1506',
					'province_id' => '15',
					'name'        => 'KABUPATEN TANJUNG JABUNG TIMUR',
				),
			93  =>
				array(
					'id'          => '1507',
					'province_id' => '15',
					'name'        => 'KABUPATEN TANJUNG JABUNG BARAT',
				),
			94  =>
				array(
					'id'          => '1508',
					'province_id' => '15',
					'name'        => 'KABUPATEN TEBO',
				),
			95  =>
				array(
					'id'          => '1509',
					'province_id' => '15',
					'name'        => 'KABUPATEN BUNGO',
				),
			96  =>
				array(
					'id'          => '1571',
					'province_id' => '15',
					'name'        => 'KOTA JAMBI',
				),
			97  =>
				array(
					'id'          => '1572',
					'province_id' => '15',
					'name'        => 'KOTA SUNGAI PENUH',
				),
			98  =>
				array(
					'id'          => '1601',
					'province_id' => '16',
					'name'        => 'KABUPATEN OGAN KOMERING ULU',
				),
			99  =>
				array(
					'id'          => '1602',
					'province_id' => '16',
					'name'        => 'KABUPATEN OGAN KOMERING ILIR',
				),
			100 =>
				array(
					'id'          => '1603',
					'province_id' => '16',
					'name'        => 'KABUPATEN MUARA ENIM',
				),
			101 =>
				array(
					'id'          => '1604',
					'province_id' => '16',
					'name'        => 'KABUPATEN LAHAT',
				),
			102 =>
				array(
					'id'          => '1605',
					'province_id' => '16',
					'name'        => 'KABUPATEN MUSI RAWAS',
				),
			103 =>
				array(
					'id'          => '1606',
					'province_id' => '16',
					'name'        => 'KABUPATEN MUSI BANYUASIN',
				),
			104 =>
				array(
					'id'          => '1607',
					'province_id' => '16',
					'name'        => 'KABUPATEN BANYU ASIN',
				),
			105 =>
				array(
					'id'          => '1608',
					'province_id' => '16',
					'name'        => 'KABUPATEN OGAN KOMERING ULU SELATAN',
				),
			106 =>
				array(
					'id'          => '1609',
					'province_id' => '16',
					'name'        => 'KABUPATEN OGAN KOMERING ULU TIMUR',
				),
			107 =>
				array(
					'id'          => '1610',
					'province_id' => '16',
					'name'        => 'KABUPATEN OGAN ILIR',
				),
			108 =>
				array(
					'id'          => '1611',
					'province_id' => '16',
					'name'        => 'KABUPATEN EMPAT LAWANG',
				),
			109 =>
				array(
					'id'          => '1612',
					'province_id' => '16',
					'name'        => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR',
				),
			110 =>
				array(
					'id'          => '1613',
					'province_id' => '16',
					'name'        => 'KABUPATEN MUSI RAWAS UTARA',
				),
			111 =>
				array(
					'id'          => '1671',
					'province_id' => '16',
					'name'        => 'KOTA PALEMBANG',
				),
			112 =>
				array(
					'id'          => '1672',
					'province_id' => '16',
					'name'        => 'KOTA PRABUMULIH',
				),
			113 =>
				array(
					'id'          => '1673',
					'province_id' => '16',
					'name'        => 'KOTA PAGAR ALAM',
				),
			114 =>
				array(
					'id'          => '1674',
					'province_id' => '16',
					'name'        => 'KOTA LUBUKLINGGAU',
				),
			115 =>
				array(
					'id'          => '1701',
					'province_id' => '17',
					'name'        => 'KABUPATEN BENGKULU SELATAN',
				),
			116 =>
				array(
					'id'          => '1702',
					'province_id' => '17',
					'name'        => 'KABUPATEN REJANG LEBONG',
				),
			117 =>
				array(
					'id'          => '1703',
					'province_id' => '17',
					'name'        => 'KABUPATEN BENGKULU UTARA',
				),
			118 =>
				array(
					'id'          => '1704',
					'province_id' => '17',
					'name'        => 'KABUPATEN KAUR',
				),
			119 =>
				array(
					'id'          => '1705',
					'province_id' => '17',
					'name'        => 'KABUPATEN SELUMA',
				),
			120 =>
				array(
					'id'          => '1706',
					'province_id' => '17',
					'name'        => 'KABUPATEN MUKOMUKO',
				),
			121 =>
				array(
					'id'          => '1707',
					'province_id' => '17',
					'name'        => 'KABUPATEN LEBONG',
				),
			122 =>
				array(
					'id'          => '1708',
					'province_id' => '17',
					'name'        => 'KABUPATEN KEPAHIANG',
				),
			123 =>
				array(
					'id'          => '1709',
					'province_id' => '17',
					'name'        => 'KABUPATEN BENGKULU TENGAH',
				),
			124 =>
				array(
					'id'          => '1771',
					'province_id' => '17',
					'name'        => 'KOTA BENGKULU',
				),
			125 =>
				array(
					'id'          => '1801',
					'province_id' => '18',
					'name'        => 'KABUPATEN LAMPUNG BARAT',
				),
			126 =>
				array(
					'id'          => '1802',
					'province_id' => '18',
					'name'        => 'KABUPATEN TANGGAMUS',
				),
			127 =>
				array(
					'id'          => '1803',
					'province_id' => '18',
					'name'        => 'KABUPATEN LAMPUNG SELATAN',
				),
			128 =>
				array(
					'id'          => '1804',
					'province_id' => '18',
					'name'        => 'KABUPATEN LAMPUNG TIMUR',
				),
			129 =>
				array(
					'id'          => '1805',
					'province_id' => '18',
					'name'        => 'KABUPATEN LAMPUNG TENGAH',
				),
			130 =>
				array(
					'id'          => '1806',
					'province_id' => '18',
					'name'        => 'KABUPATEN LAMPUNG UTARA',
				),
			131 =>
				array(
					'id'          => '1807',
					'province_id' => '18',
					'name'        => 'KABUPATEN WAY KANAN',
				),
			132 =>
				array(
					'id'          => '1808',
					'province_id' => '18',
					'name'        => 'KABUPATEN TULANGBAWANG',
				),
			133 =>
				array(
					'id'          => '1809',
					'province_id' => '18',
					'name'        => 'KABUPATEN PESAWARAN',
				),
			134 =>
				array(
					'id'          => '1810',
					'province_id' => '18',
					'name'        => 'KABUPATEN PRINGSEWU',
				),
			135 =>
				array(
					'id'          => '1811',
					'province_id' => '18',
					'name'        => 'KABUPATEN MESUJI',
				),
			136 =>
				array(
					'id'          => '1812',
					'province_id' => '18',
					'name'        => 'KABUPATEN TULANG BAWANG BARAT',
				),
			137 =>
				array(
					'id'          => '1813',
					'province_id' => '18',
					'name'        => 'KABUPATEN PESISIR BARAT',
				),
			138 =>
				array(
					'id'          => '1871',
					'province_id' => '18',
					'name'        => 'KOTA BANDAR LAMPUNG',
				),
			139 =>
				array(
					'id'          => '1872',
					'province_id' => '18',
					'name'        => 'KOTA METRO',
				),
			140 =>
				array(
					'id'          => '1901',
					'province_id' => '19',
					'name'        => 'KABUPATEN BANGKA',
				),
			141 =>
				array(
					'id'          => '1902',
					'province_id' => '19',
					'name'        => 'KABUPATEN BELITUNG',
				),
			142 =>
				array(
					'id'          => '1903',
					'province_id' => '19',
					'name'        => 'KABUPATEN BANGKA BARAT',
				),
			143 =>
				array(
					'id'          => '1904',
					'province_id' => '19',
					'name'        => 'KABUPATEN BANGKA TENGAH',
				),
			144 =>
				array(
					'id'          => '1905',
					'province_id' => '19',
					'name'        => 'KABUPATEN BANGKA SELATAN',
				),
			145 =>
				array(
					'id'          => '1906',
					'province_id' => '19',
					'name'        => 'KABUPATEN BELITUNG TIMUR',
				),
			146 =>
				array(
					'id'          => '1971',
					'province_id' => '19',
					'name'        => 'KOTA PANGKAL PINANG',
				),
			147 =>
				array(
					'id'          => '2101',
					'province_id' => '21',
					'name'        => 'KABUPATEN KARIMUN',
				),
			148 =>
				array(
					'id'          => '2102',
					'province_id' => '21',
					'name'        => 'KABUPATEN BINTAN',
				),
			149 =>
				array(
					'id'          => '2103',
					'province_id' => '21',
					'name'        => 'KABUPATEN NATUNA',
				),
			150 =>
				array(
					'id'          => '2104',
					'province_id' => '21',
					'name'        => 'KABUPATEN LINGGA',
				),
			151 =>
				array(
					'id'          => '2105',
					'province_id' => '21',
					'name'        => 'KABUPATEN KEPULAUAN ANAMBAS',
				),
			152 =>
				array(
					'id'          => '2171',
					'province_id' => '21',
					'name'        => 'KOTA B A T A M',
				),
			153 =>
				array(
					'id'          => '2172',
					'province_id' => '21',
					'name'        => 'KOTA TANJUNG PINANG',
				),
			154 =>
				array(
					'id'          => '3101',
					'province_id' => '31',
					'name'        => 'KABUPATEN KEPULAUAN SERIBU',
				),
			155 =>
				array(
					'id'          => '3171',
					'province_id' => '31',
					'name'        => 'KOTA JAKARTA SELATAN',
				),
			156 =>
				array(
					'id'          => '3172',
					'province_id' => '31',
					'name'        => 'KOTA JAKARTA TIMUR',
				),
			157 =>
				array(
					'id'          => '3173',
					'province_id' => '31',
					'name'        => 'KOTA JAKARTA PUSAT',
				),
			158 =>
				array(
					'id'          => '3174',
					'province_id' => '31',
					'name'        => 'KOTA JAKARTA BARAT',
				),
			159 =>
				array(
					'id'          => '3175',
					'province_id' => '31',
					'name'        => 'KOTA JAKARTA UTARA',
				),
			160 =>
				array(
					'id'          => '3201',
					'province_id' => '32',
					'name'        => 'KABUPATEN BOGOR',
				),
			161 =>
				array(
					'id'          => '3202',
					'province_id' => '32',
					'name'        => 'KABUPATEN SUKABUMI',
				),
			162 =>
				array(
					'id'          => '3203',
					'province_id' => '32',
					'name'        => 'KABUPATEN CIANJUR',
				),
			163 =>
				array(
					'id'          => '3204',
					'province_id' => '32',
					'name'        => 'KABUPATEN BANDUNG',
				),
			164 =>
				array(
					'id'          => '3205',
					'province_id' => '32',
					'name'        => 'KABUPATEN GARUT',
				),
			165 =>
				array(
					'id'          => '3206',
					'province_id' => '32',
					'name'        => 'KABUPATEN TASIKMALAYA',
				),
			166 =>
				array(
					'id'          => '3207',
					'province_id' => '32',
					'name'        => 'KABUPATEN CIAMIS',
				),
			167 =>
				array(
					'id'          => '3208',
					'province_id' => '32',
					'name'        => 'KABUPATEN KUNINGAN',
				),
			168 =>
				array(
					'id'          => '3209',
					'province_id' => '32',
					'name'        => 'KABUPATEN CIREBON',
				),
			169 =>
				array(
					'id'          => '3210',
					'province_id' => '32',
					'name'        => 'KABUPATEN MAJALENGKA',
				),
			170 =>
				array(
					'id'          => '3211',
					'province_id' => '32',
					'name'        => 'KABUPATEN SUMEDANG',
				),
			171 =>
				array(
					'id'          => '3212',
					'province_id' => '32',
					'name'        => 'KABUPATEN INDRAMAYU',
				),
			172 =>
				array(
					'id'          => '3213',
					'province_id' => '32',
					'name'        => 'KABUPATEN SUBANG',
				),
			173 =>
				array(
					'id'          => '3214',
					'province_id' => '32',
					'name'        => 'KABUPATEN PURWAKARTA',
				),
			174 =>
				array(
					'id'          => '3215',
					'province_id' => '32',
					'name'        => 'KABUPATEN KARAWANG',
				),
			175 =>
				array(
					'id'          => '3216',
					'province_id' => '32',
					'name'        => 'KABUPATEN BEKASI',
				),
			176 =>
				array(
					'id'          => '3217',
					'province_id' => '32',
					'name'        => 'KABUPATEN BANDUNG BARAT',
				),
			177 =>
				array(
					'id'          => '3218',
					'province_id' => '32',
					'name'        => 'KABUPATEN PANGANDARAN',
				),
			178 =>
				array(
					'id'          => '3271',
					'province_id' => '32',
					'name'        => 'KOTA BOGOR',
				),
			179 =>
				array(
					'id'          => '3272',
					'province_id' => '32',
					'name'        => 'KOTA SUKABUMI',
				),
			180 =>
				array(
					'id'          => '3273',
					'province_id' => '32',
					'name'        => 'KOTA BANDUNG',
				),
			181 =>
				array(
					'id'          => '3274',
					'province_id' => '32',
					'name'        => 'KOTA CIREBON',
				),
			182 =>
				array(
					'id'          => '3275',
					'province_id' => '32',
					'name'        => 'KOTA BEKASI',
				),
			183 =>
				array(
					'id'          => '3276',
					'province_id' => '32',
					'name'        => 'KOTA DEPOK',
				),
			184 =>
				array(
					'id'          => '3277',
					'province_id' => '32',
					'name'        => 'KOTA CIMAHI',
				),
			185 =>
				array(
					'id'          => '3278',
					'province_id' => '32',
					'name'        => 'KOTA TASIKMALAYA',
				),
			186 =>
				array(
					'id'          => '3279',
					'province_id' => '32',
					'name'        => 'KOTA BANJAR',
				),
			187 =>
				array(
					'id'          => '3301',
					'province_id' => '33',
					'name'        => 'KABUPATEN CILACAP',
				),
			188 =>
				array(
					'id'          => '3302',
					'province_id' => '33',
					'name'        => 'KABUPATEN BANYUMAS',
				),
			189 =>
				array(
					'id'          => '3303',
					'province_id' => '33',
					'name'        => 'KABUPATEN PURBALINGGA',
				),
			190 =>
				array(
					'id'          => '3304',
					'province_id' => '33',
					'name'        => 'KABUPATEN BANJARNEGARA',
				),
			191 =>
				array(
					'id'          => '3305',
					'province_id' => '33',
					'name'        => 'KABUPATEN KEBUMEN',
				),
			192 =>
				array(
					'id'          => '3306',
					'province_id' => '33',
					'name'        => 'KABUPATEN PURWOREJO',
				),
			193 =>
				array(
					'id'          => '3307',
					'province_id' => '33',
					'name'        => 'KABUPATEN WONOSOBO',
				),
			194 =>
				array(
					'id'          => '3308',
					'province_id' => '33',
					'name'        => 'KABUPATEN MAGELANG',
				),
			195 =>
				array(
					'id'          => '3309',
					'province_id' => '33',
					'name'        => 'KABUPATEN BOYOLALI',
				),
			196 =>
				array(
					'id'          => '3310',
					'province_id' => '33',
					'name'        => 'KABUPATEN KLATEN',
				),
			197 =>
				array(
					'id'          => '3311',
					'province_id' => '33',
					'name'        => 'KABUPATEN SUKOHARJO',
				),
			198 =>
				array(
					'id'          => '3312',
					'province_id' => '33',
					'name'        => 'KABUPATEN WONOGIRI',
				),
			199 =>
				array(
					'id'          => '3313',
					'province_id' => '33',
					'name'        => 'KABUPATEN KARANGANYAR',
				),
			200 =>
				array(
					'id'          => '3314',
					'province_id' => '33',
					'name'        => 'KABUPATEN SRAGEN',
				),
			201 =>
				array(
					'id'          => '3315',
					'province_id' => '33',
					'name'        => 'KABUPATEN GROBOGAN',
				),
			202 =>
				array(
					'id'          => '3316',
					'province_id' => '33',
					'name'        => 'KABUPATEN BLORA',
				),
			203 =>
				array(
					'id'          => '3317',
					'province_id' => '33',
					'name'        => 'KABUPATEN REMBANG',
				),
			204 =>
				array(
					'id'          => '3318',
					'province_id' => '33',
					'name'        => 'KABUPATEN PATI',
				),
			205 =>
				array(
					'id'          => '3319',
					'province_id' => '33',
					'name'        => 'KABUPATEN KUDUS',
				),
			206 =>
				array(
					'id'          => '3320',
					'province_id' => '33',
					'name'        => 'KABUPATEN JEPARA',
				),
			207 =>
				array(
					'id'          => '3321',
					'province_id' => '33',
					'name'        => 'KABUPATEN DEMAK',
				),
			208 =>
				array(
					'id'          => '3322',
					'province_id' => '33',
					'name'        => 'KABUPATEN SEMARANG',
				),
			209 =>
				array(
					'id'          => '3323',
					'province_id' => '33',
					'name'        => 'KABUPATEN TEMANGGUNG',
				),
			210 =>
				array(
					'id'          => '3324',
					'province_id' => '33',
					'name'        => 'KABUPATEN KENDAL',
				),
			211 =>
				array(
					'id'          => '3325',
					'province_id' => '33',
					'name'        => 'KABUPATEN BATANG',
				),
			212 =>
				array(
					'id'          => '3326',
					'province_id' => '33',
					'name'        => 'KABUPATEN PEKALONGAN',
				),
			213 =>
				array(
					'id'          => '3327',
					'province_id' => '33',
					'name'        => 'KABUPATEN PEMALANG',
				),
			214 =>
				array(
					'id'          => '3328',
					'province_id' => '33',
					'name'        => 'KABUPATEN TEGAL',
				),
			215 =>
				array(
					'id'          => '3329',
					'province_id' => '33',
					'name'        => 'KABUPATEN BREBES',
				),
			216 =>
				array(
					'id'          => '3371',
					'province_id' => '33',
					'name'        => 'KOTA MAGELANG',
				),
			217 =>
				array(
					'id'          => '3372',
					'province_id' => '33',
					'name'        => 'KOTA SURAKARTA',
				),
			218 =>
				array(
					'id'          => '3373',
					'province_id' => '33',
					'name'        => 'KOTA SALATIGA',
				),
			219 =>
				array(
					'id'          => '3374',
					'province_id' => '33',
					'name'        => 'KOTA SEMARANG',
				),
			220 =>
				array(
					'id'          => '3375',
					'province_id' => '33',
					'name'        => 'KOTA PEKALONGAN',
				),
			221 =>
				array(
					'id'          => '3376',
					'province_id' => '33',
					'name'        => 'KOTA TEGAL',
				),
			222 =>
				array(
					'id'          => '3401',
					'province_id' => '34',
					'name'        => 'KABUPATEN KULON PROGO',
				),
			223 =>
				array(
					'id'          => '3402',
					'province_id' => '34',
					'name'        => 'KABUPATEN BANTUL',
				),
			224 =>
				array(
					'id'          => '3403',
					'province_id' => '34',
					'name'        => 'KABUPATEN GUNUNG KIDUL',
				),
			225 =>
				array(
					'id'          => '3404',
					'province_id' => '34',
					'name'        => 'KABUPATEN SLEMAN',
				),
			226 =>
				array(
					'id'          => '3471',
					'province_id' => '34',
					'name'        => 'KOTA YOGYAKARTA',
				),
			227 =>
				array(
					'id'          => '3501',
					'province_id' => '35',
					'name'        => 'KABUPATEN PACITAN',
				),
			228 =>
				array(
					'id'          => '3502',
					'province_id' => '35',
					'name'        => 'KABUPATEN PONOROGO',
				),
			229 =>
				array(
					'id'          => '3503',
					'province_id' => '35',
					'name'        => 'KABUPATEN TRENGGALEK',
				),
			230 =>
				array(
					'id'          => '3504',
					'province_id' => '35',
					'name'        => 'KABUPATEN TULUNGAGUNG',
				),
			231 =>
				array(
					'id'          => '3505',
					'province_id' => '35',
					'name'        => 'KABUPATEN BLITAR',
				),
			232 =>
				array(
					'id'          => '3506',
					'province_id' => '35',
					'name'        => 'KABUPATEN KEDIRI',
				),
			233 =>
				array(
					'id'          => '3507',
					'province_id' => '35',
					'name'        => 'KABUPATEN MALANG',
				),
			234 =>
				array(
					'id'          => '3508',
					'province_id' => '35',
					'name'        => 'KABUPATEN LUMAJANG',
				),
			235 =>
				array(
					'id'          => '3509',
					'province_id' => '35',
					'name'        => 'KABUPATEN JEMBER',
				),
			236 =>
				array(
					'id'          => '3510',
					'province_id' => '35',
					'name'        => 'KABUPATEN BANYUWANGI',
				),
			237 =>
				array(
					'id'          => '3511',
					'province_id' => '35',
					'name'        => 'KABUPATEN BONDOWOSO',
				),
			238 =>
				array(
					'id'          => '3512',
					'province_id' => '35',
					'name'        => 'KABUPATEN SITUBONDO',
				),
			239 =>
				array(
					'id'          => '3513',
					'province_id' => '35',
					'name'        => 'KABUPATEN PROBOLINGGO',
				),
			240 =>
				array(
					'id'          => '3514',
					'province_id' => '35',
					'name'        => 'KABUPATEN PASURUAN',
				),
			241 =>
				array(
					'id'          => '3515',
					'province_id' => '35',
					'name'        => 'KABUPATEN SIDOARJO',
				),
			242 =>
				array(
					'id'          => '3516',
					'province_id' => '35',
					'name'        => 'KABUPATEN MOJOKERTO',
				),
			243 =>
				array(
					'id'          => '3517',
					'province_id' => '35',
					'name'        => 'KABUPATEN JOMBANG',
				),
			244 =>
				array(
					'id'          => '3518',
					'province_id' => '35',
					'name'        => 'KABUPATEN NGANJUK',
				),
			245 =>
				array(
					'id'          => '3519',
					'province_id' => '35',
					'name'        => 'KABUPATEN MADIUN',
				),
			246 =>
				array(
					'id'          => '3520',
					'province_id' => '35',
					'name'        => 'KABUPATEN MAGETAN',
				),
			247 =>
				array(
					'id'          => '3521',
					'province_id' => '35',
					'name'        => 'KABUPATEN NGAWI',
				),
			248 =>
				array(
					'id'          => '3522',
					'province_id' => '35',
					'name'        => 'KABUPATEN BOJONEGORO',
				),
			249 =>
				array(
					'id'          => '3523',
					'province_id' => '35',
					'name'        => 'KABUPATEN TUBAN',
				),
			250 =>
				array(
					'id'          => '3524',
					'province_id' => '35',
					'name'        => 'KABUPATEN LAMONGAN',
				),
			251 =>
				array(
					'id'          => '3525',
					'province_id' => '35',
					'name'        => 'KABUPATEN GRESIK',
				),
			252 =>
				array(
					'id'          => '3526',
					'province_id' => '35',
					'name'        => 'KABUPATEN BANGKALAN',
				),
			253 =>
				array(
					'id'          => '3527',
					'province_id' => '35',
					'name'        => 'KABUPATEN SAMPANG',
				),
			254 =>
				array(
					'id'          => '3528',
					'province_id' => '35',
					'name'        => 'KABUPATEN PAMEKASAN',
				),
			255 =>
				array(
					'id'          => '3529',
					'province_id' => '35',
					'name'        => 'KABUPATEN SUMENEP',
				),
			256 =>
				array(
					'id'          => '3571',
					'province_id' => '35',
					'name'        => 'KOTA KEDIRI',
				),
			257 =>
				array(
					'id'          => '3572',
					'province_id' => '35',
					'name'        => 'KOTA BLITAR',
				),
			258 =>
				array(
					'id'          => '3573',
					'province_id' => '35',
					'name'        => 'KOTA MALANG',
				),
			259 =>
				array(
					'id'          => '3574',
					'province_id' => '35',
					'name'        => 'KOTA PROBOLINGGO',
				),
			260 =>
				array(
					'id'          => '3575',
					'province_id' => '35',
					'name'        => 'KOTA PASURUAN',
				),
			261 =>
				array(
					'id'          => '3576',
					'province_id' => '35',
					'name'        => 'KOTA MOJOKERTO',
				),
			262 =>
				array(
					'id'          => '3577',
					'province_id' => '35',
					'name'        => 'KOTA MADIUN',
				),
			263 =>
				array(
					'id'          => '3578',
					'province_id' => '35',
					'name'        => 'KOTA SURABAYA',
				),
			264 =>
				array(
					'id'          => '3579',
					'province_id' => '35',
					'name'        => 'KOTA BATU',
				),
			265 =>
				array(
					'id'          => '3601',
					'province_id' => '36',
					'name'        => 'KABUPATEN PANDEGLANG',
				),
			266 =>
				array(
					'id'          => '3602',
					'province_id' => '36',
					'name'        => 'KABUPATEN LEBAK',
				),
			267 =>
				array(
					'id'          => '3603',
					'province_id' => '36',
					'name'        => 'KABUPATEN TANGERANG',
				),
			268 =>
				array(
					'id'          => '3604',
					'province_id' => '36',
					'name'        => 'KABUPATEN SERANG',
				),
			269 =>
				array(
					'id'          => '3671',
					'province_id' => '36',
					'name'        => 'KOTA TANGERANG',
				),
			270 =>
				array(
					'id'          => '3672',
					'province_id' => '36',
					'name'        => 'KOTA CILEGON',
				),
			271 =>
				array(
					'id'          => '3673',
					'province_id' => '36',
					'name'        => 'KOTA SERANG',
				),
			272 =>
				array(
					'id'          => '3674',
					'province_id' => '36',
					'name'        => 'KOTA TANGERANG SELATAN',
				),
			273 =>
				array(
					'id'          => '5101',
					'province_id' => '51',
					'name'        => 'KABUPATEN JEMBRANA',
				),
			274 =>
				array(
					'id'          => '5102',
					'province_id' => '51',
					'name'        => 'KABUPATEN TABANAN',
				),
			275 =>
				array(
					'id'          => '5103',
					'province_id' => '51',
					'name'        => 'KABUPATEN BADUNG',
				),
			276 =>
				array(
					'id'          => '5104',
					'province_id' => '51',
					'name'        => 'KABUPATEN GIANYAR',
				),
			277 =>
				array(
					'id'          => '5105',
					'province_id' => '51',
					'name'        => 'KABUPATEN KLUNGKUNG',
				),
			278 =>
				array(
					'id'          => '5106',
					'province_id' => '51',
					'name'        => 'KABUPATEN BANGLI',
				),
			279 =>
				array(
					'id'          => '5107',
					'province_id' => '51',
					'name'        => 'KABUPATEN KARANG ASEM',
				),
			280 =>
				array(
					'id'          => '5108',
					'province_id' => '51',
					'name'        => 'KABUPATEN BULELENG',
				),
			281 =>
				array(
					'id'          => '5171',
					'province_id' => '51',
					'name'        => 'KOTA DENPASAR',
				),
			282 =>
				array(
					'id'          => '5201',
					'province_id' => '52',
					'name'        => 'KABUPATEN LOMBOK BARAT',
				),
			283 =>
				array(
					'id'          => '5202',
					'province_id' => '52',
					'name'        => 'KABUPATEN LOMBOK TENGAH',
				),
			284 =>
				array(
					'id'          => '5203',
					'province_id' => '52',
					'name'        => 'KABUPATEN LOMBOK TIMUR',
				),
			285 =>
				array(
					'id'          => '5204',
					'province_id' => '52',
					'name'        => 'KABUPATEN SUMBAWA',
				),
			286 =>
				array(
					'id'          => '5205',
					'province_id' => '52',
					'name'        => 'KABUPATEN DOMPU',
				),
			287 =>
				array(
					'id'          => '5206',
					'province_id' => '52',
					'name'        => 'KABUPATEN BIMA',
				),
			288 =>
				array(
					'id'          => '5207',
					'province_id' => '52',
					'name'        => 'KABUPATEN SUMBAWA BARAT',
				),
			289 =>
				array(
					'id'          => '5208',
					'province_id' => '52',
					'name'        => 'KABUPATEN LOMBOK UTARA',
				),
			290 =>
				array(
					'id'          => '5271',
					'province_id' => '52',
					'name'        => 'KOTA MATARAM',
				),
			291 =>
				array(
					'id'          => '5272',
					'province_id' => '52',
					'name'        => 'KOTA BIMA',
				),
			292 =>
				array(
					'id'          => '5301',
					'province_id' => '53',
					'name'        => 'KABUPATEN SUMBA BARAT',
				),
			293 =>
				array(
					'id'          => '5302',
					'province_id' => '53',
					'name'        => 'KABUPATEN SUMBA TIMUR',
				),
			294 =>
				array(
					'id'          => '5303',
					'province_id' => '53',
					'name'        => 'KABUPATEN KUPANG',
				),
			295 =>
				array(
					'id'          => '5304',
					'province_id' => '53',
					'name'        => 'KABUPATEN TIMOR TENGAH SELATAN',
				),
			296 =>
				array(
					'id'          => '5305',
					'province_id' => '53',
					'name'        => 'KABUPATEN TIMOR TENGAH UTARA',
				),
			297 =>
				array(
					'id'          => '5306',
					'province_id' => '53',
					'name'        => 'KABUPATEN BELU',
				),
			298 =>
				array(
					'id'          => '5307',
					'province_id' => '53',
					'name'        => 'KABUPATEN ALOR',
				),
			299 =>
				array(
					'id'          => '5308',
					'province_id' => '53',
					'name'        => 'KABUPATEN LEMBATA',
				),
			300 =>
				array(
					'id'          => '5309',
					'province_id' => '53',
					'name'        => 'KABUPATEN FLORES TIMUR',
				),
			301 =>
				array(
					'id'          => '5310',
					'province_id' => '53',
					'name'        => 'KABUPATEN SIKKA',
				),
			302 =>
				array(
					'id'          => '5311',
					'province_id' => '53',
					'name'        => 'KABUPATEN ENDE',
				),
			303 =>
				array(
					'id'          => '5312',
					'province_id' => '53',
					'name'        => 'KABUPATEN NGADA',
				),
			304 =>
				array(
					'id'          => '5313',
					'province_id' => '53',
					'name'        => 'KABUPATEN MANGGARAI',
				),
			305 =>
				array(
					'id'          => '5314',
					'province_id' => '53',
					'name'        => 'KABUPATEN ROTE NDAO',
				),
			306 =>
				array(
					'id'          => '5315',
					'province_id' => '53',
					'name'        => 'KABUPATEN MANGGARAI BARAT',
				),
			307 =>
				array(
					'id'          => '5316',
					'province_id' => '53',
					'name'        => 'KABUPATEN SUMBA TENGAH',
				),
			308 =>
				array(
					'id'          => '5317',
					'province_id' => '53',
					'name'        => 'KABUPATEN SUMBA BARAT DAYA',
				),
			309 =>
				array(
					'id'          => '5318',
					'province_id' => '53',
					'name'        => 'KABUPATEN NAGEKEO',
				),
			310 =>
				array(
					'id'          => '5319',
					'province_id' => '53',
					'name'        => 'KABUPATEN MANGGARAI TIMUR',
				),
			311 =>
				array(
					'id'          => '5320',
					'province_id' => '53',
					'name'        => 'KABUPATEN SABU RAIJUA',
				),
			312 =>
				array(
					'id'          => '5321',
					'province_id' => '53',
					'name'        => 'KABUPATEN MALAKA',
				),
			313 =>
				array(
					'id'          => '5371',
					'province_id' => '53',
					'name'        => 'KOTA KUPANG',
				),
			314 =>
				array(
					'id'          => '6101',
					'province_id' => '61',
					'name'        => 'KABUPATEN SAMBAS',
				),
			315 =>
				array(
					'id'          => '6102',
					'province_id' => '61',
					'name'        => 'KABUPATEN BENGKAYANG',
				),
			316 =>
				array(
					'id'          => '6103',
					'province_id' => '61',
					'name'        => 'KABUPATEN LANDAK',
				),
			317 =>
				array(
					'id'          => '6104',
					'province_id' => '61',
					'name'        => 'KABUPATEN MEMPAWAH',
				),
			318 =>
				array(
					'id'          => '6105',
					'province_id' => '61',
					'name'        => 'KABUPATEN SANGGAU',
				),
			319 =>
				array(
					'id'          => '6106',
					'province_id' => '61',
					'name'        => 'KABUPATEN KETAPANG',
				),
			320 =>
				array(
					'id'          => '6107',
					'province_id' => '61',
					'name'        => 'KABUPATEN SINTANG',
				),
			321 =>
				array(
					'id'          => '6108',
					'province_id' => '61',
					'name'        => 'KABUPATEN KAPUAS HULU',
				),
			322 =>
				array(
					'id'          => '6109',
					'province_id' => '61',
					'name'        => 'KABUPATEN SEKADAU',
				),
			323 =>
				array(
					'id'          => '6110',
					'province_id' => '61',
					'name'        => 'KABUPATEN MELAWI',
				),
			324 =>
				array(
					'id'          => '6111',
					'province_id' => '61',
					'name'        => 'KABUPATEN KAYONG UTARA',
				),
			325 =>
				array(
					'id'          => '6112',
					'province_id' => '61',
					'name'        => 'KABUPATEN KUBU RAYA',
				),
			326 =>
				array(
					'id'          => '6171',
					'province_id' => '61',
					'name'        => 'KOTA PONTIANAK',
				),
			327 =>
				array(
					'id'          => '6172',
					'province_id' => '61',
					'name'        => 'KOTA SINGKAWANG',
				),
			328 =>
				array(
					'id'          => '6201',
					'province_id' => '62',
					'name'        => 'KABUPATEN KOTAWARINGIN BARAT',
				),
			329 =>
				array(
					'id'          => '6202',
					'province_id' => '62',
					'name'        => 'KABUPATEN KOTAWARINGIN TIMUR',
				),
			330 =>
				array(
					'id'          => '6203',
					'province_id' => '62',
					'name'        => 'KABUPATEN KAPUAS',
				),
			331 =>
				array(
					'id'          => '6204',
					'province_id' => '62',
					'name'        => 'KABUPATEN BARITO SELATAN',
				),
			332 =>
				array(
					'id'          => '6205',
					'province_id' => '62',
					'name'        => 'KABUPATEN BARITO UTARA',
				),
			333 =>
				array(
					'id'          => '6206',
					'province_id' => '62',
					'name'        => 'KABUPATEN SUKAMARA',
				),
			334 =>
				array(
					'id'          => '6207',
					'province_id' => '62',
					'name'        => 'KABUPATEN LAMANDAU',
				),
			335 =>
				array(
					'id'          => '6208',
					'province_id' => '62',
					'name'        => 'KABUPATEN SERUYAN',
				),
			336 =>
				array(
					'id'          => '6209',
					'province_id' => '62',
					'name'        => 'KABUPATEN KATINGAN',
				),
			337 =>
				array(
					'id'          => '6210',
					'province_id' => '62',
					'name'        => 'KABUPATEN PULANG PISAU',
				),
			338 =>
				array(
					'id'          => '6211',
					'province_id' => '62',
					'name'        => 'KABUPATEN GUNUNG MAS',
				),
			339 =>
				array(
					'id'          => '6212',
					'province_id' => '62',
					'name'        => 'KABUPATEN BARITO TIMUR',
				),
			340 =>
				array(
					'id'          => '6213',
					'province_id' => '62',
					'name'        => 'KABUPATEN MURUNG RAYA',
				),
			341 =>
				array(
					'id'          => '6271',
					'province_id' => '62',
					'name'        => 'KOTA PALANGKA RAYA',
				),
			342 =>
				array(
					'id'          => '6301',
					'province_id' => '63',
					'name'        => 'KABUPATEN TANAH LAUT',
				),
			343 =>
				array(
					'id'          => '6302',
					'province_id' => '63',
					'name'        => 'KABUPATEN KOTA BARU',
				),
			344 =>
				array(
					'id'          => '6303',
					'province_id' => '63',
					'name'        => 'KABUPATEN BANJAR',
				),
			345 =>
				array(
					'id'          => '6304',
					'province_id' => '63',
					'name'        => 'KABUPATEN BARITO KUALA',
				),
			346 =>
				array(
					'id'          => '6305',
					'province_id' => '63',
					'name'        => 'KABUPATEN TAPIN',
				),
			347 =>
				array(
					'id'          => '6306',
					'province_id' => '63',
					'name'        => 'KABUPATEN HULU SUNGAI SELATAN',
				),
			348 =>
				array(
					'id'          => '6307',
					'province_id' => '63',
					'name'        => 'KABUPATEN HULU SUNGAI TENGAH',
				),
			349 =>
				array(
					'id'          => '6308',
					'province_id' => '63',
					'name'        => 'KABUPATEN HULU SUNGAI UTARA',
				),
			350 =>
				array(
					'id'          => '6309',
					'province_id' => '63',
					'name'        => 'KABUPATEN TABALONG',
				),
			351 =>
				array(
					'id'          => '6310',
					'province_id' => '63',
					'name'        => 'KABUPATEN TANAH BUMBU',
				),
			352 =>
				array(
					'id'          => '6311',
					'province_id' => '63',
					'name'        => 'KABUPATEN BALANGAN',
				),
			353 =>
				array(
					'id'          => '6371',
					'province_id' => '63',
					'name'        => 'KOTA BANJARMASIN',
				),
			354 =>
				array(
					'id'          => '6372',
					'province_id' => '63',
					'name'        => 'KOTA BANJAR BARU',
				),
			355 =>
				array(
					'id'          => '6401',
					'province_id' => '64',
					'name'        => 'KABUPATEN PASER',
				),
			356 =>
				array(
					'id'          => '6402',
					'province_id' => '64',
					'name'        => 'KABUPATEN KUTAI BARAT',
				),
			357 =>
				array(
					'id'          => '6403',
					'province_id' => '64',
					'name'        => 'KABUPATEN KUTAI KARTANEGARA',
				),
			358 =>
				array(
					'id'          => '6404',
					'province_id' => '64',
					'name'        => 'KABUPATEN KUTAI TIMUR',
				),
			359 =>
				array(
					'id'          => '6405',
					'province_id' => '64',
					'name'        => 'KABUPATEN BERAU',
				),
			360 =>
				array(
					'id'          => '6409',
					'province_id' => '64',
					'name'        => 'KABUPATEN PENAJAM PASER UTARA',
				),
			361 =>
				array(
					'id'          => '6411',
					'province_id' => '64',
					'name'        => 'KABUPATEN MAHAKAM HULU',
				),
			362 =>
				array(
					'id'          => '6471',
					'province_id' => '64',
					'name'        => 'KOTA BALIKPAPAN',
				),
			363 =>
				array(
					'id'          => '6472',
					'province_id' => '64',
					'name'        => 'KOTA SAMARINDA',
				),
			364 =>
				array(
					'id'          => '6474',
					'province_id' => '64',
					'name'        => 'KOTA BONTANG',
				),
			365 =>
				array(
					'id'          => '6501',
					'province_id' => '65',
					'name'        => 'KABUPATEN MALINAU',
				),
			366 =>
				array(
					'id'          => '6502',
					'province_id' => '65',
					'name'        => 'KABUPATEN BULUNGAN',
				),
			367 =>
				array(
					'id'          => '6503',
					'province_id' => '65',
					'name'        => 'KABUPATEN TANA TIDUNG',
				),
			368 =>
				array(
					'id'          => '6504',
					'province_id' => '65',
					'name'        => 'KABUPATEN NUNUKAN',
				),
			369 =>
				array(
					'id'          => '6571',
					'province_id' => '65',
					'name'        => 'KOTA TARAKAN',
				),
			370 =>
				array(
					'id'          => '7101',
					'province_id' => '71',
					'name'        => 'KABUPATEN BOLAANG MONGONDOW',
				),
			371 =>
				array(
					'id'          => '7102',
					'province_id' => '71',
					'name'        => 'KABUPATEN MINAHASA',
				),
			372 =>
				array(
					'id'          => '7103',
					'province_id' => '71',
					'name'        => 'KABUPATEN KEPULAUAN SANGIHE',
				),
			373 =>
				array(
					'id'          => '7104',
					'province_id' => '71',
					'name'        => 'KABUPATEN KEPULAUAN TALAUD',
				),
			374 =>
				array(
					'id'          => '7105',
					'province_id' => '71',
					'name'        => 'KABUPATEN MINAHASA SELATAN',
				),
			375 =>
				array(
					'id'          => '7106',
					'province_id' => '71',
					'name'        => 'KABUPATEN MINAHASA UTARA',
				),
			376 =>
				array(
					'id'          => '7107',
					'province_id' => '71',
					'name'        => 'KABUPATEN BOLAANG MONGONDOW UTARA',
				),
			377 =>
				array(
					'id'          => '7108',
					'province_id' => '71',
					'name'        => 'KABUPATEN SIAU TAGULANDANG BIARO',
				),
			378 =>
				array(
					'id'          => '7109',
					'province_id' => '71',
					'name'        => 'KABUPATEN MINAHASA TENGGARA',
				),
			379 =>
				array(
					'id'          => '7110',
					'province_id' => '71',
					'name'        => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
				),
			380 =>
				array(
					'id'          => '7111',
					'province_id' => '71',
					'name'        => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
				),
			381 =>
				array(
					'id'          => '7171',
					'province_id' => '71',
					'name'        => 'KOTA MANADO',
				),
			382 =>
				array(
					'id'          => '7172',
					'province_id' => '71',
					'name'        => 'KOTA BITUNG',
				),
			383 =>
				array(
					'id'          => '7173',
					'province_id' => '71',
					'name'        => 'KOTA TOMOHON',
				),
			384 =>
				array(
					'id'          => '7174',
					'province_id' => '71',
					'name'        => 'KOTA KOTAMOBAGU',
				),
			385 =>
				array(
					'id'          => '7201',
					'province_id' => '72',
					'name'        => 'KABUPATEN BANGGAI KEPULAUAN',
				),
			386 =>
				array(
					'id'          => '7202',
					'province_id' => '72',
					'name'        => 'KABUPATEN BANGGAI',
				),
			387 =>
				array(
					'id'          => '7203',
					'province_id' => '72',
					'name'        => 'KABUPATEN MOROWALI',
				),
			388 =>
				array(
					'id'          => '7204',
					'province_id' => '72',
					'name'        => 'KABUPATEN POSO',
				),
			389 =>
				array(
					'id'          => '7205',
					'province_id' => '72',
					'name'        => 'KABUPATEN DONGGALA',
				),
			390 =>
				array(
					'id'          => '7206',
					'province_id' => '72',
					'name'        => 'KABUPATEN TOLI-TOLI',
				),
			391 =>
				array(
					'id'          => '7207',
					'province_id' => '72',
					'name'        => 'KABUPATEN BUOL',
				),
			392 =>
				array(
					'id'          => '7208',
					'province_id' => '72',
					'name'        => 'KABUPATEN PARIGI MOUTONG',
				),
			393 =>
				array(
					'id'          => '7209',
					'province_id' => '72',
					'name'        => 'KABUPATEN TOJO UNA-UNA',
				),
			394 =>
				array(
					'id'          => '7210',
					'province_id' => '72',
					'name'        => 'KABUPATEN SIGI',
				),
			395 =>
				array(
					'id'          => '7211',
					'province_id' => '72',
					'name'        => 'KABUPATEN BANGGAI LAUT',
				),
			396 =>
				array(
					'id'          => '7212',
					'province_id' => '72',
					'name'        => 'KABUPATEN MOROWALI UTARA',
				),
			397 =>
				array(
					'id'          => '7271',
					'province_id' => '72',
					'name'        => 'KOTA PALU',
				),
			398 =>
				array(
					'id'          => '7301',
					'province_id' => '73',
					'name'        => 'KABUPATEN KEPULAUAN SELAYAR',
				),
			399 =>
				array(
					'id'          => '7302',
					'province_id' => '73',
					'name'        => 'KABUPATEN BULUKUMBA',
				),
			400 =>
				array(
					'id'          => '7303',
					'province_id' => '73',
					'name'        => 'KABUPATEN BANTAENG',
				),
			401 =>
				array(
					'id'          => '7304',
					'province_id' => '73',
					'name'        => 'KABUPATEN JENEPONTO',
				),
			402 =>
				array(
					'id'          => '7305',
					'province_id' => '73',
					'name'        => 'KABUPATEN TAKALAR',
				),
			403 =>
				array(
					'id'          => '7306',
					'province_id' => '73',
					'name'        => 'KABUPATEN GOWA',
				),
			404 =>
				array(
					'id'          => '7307',
					'province_id' => '73',
					'name'        => 'KABUPATEN SINJAI',
				),
			405 =>
				array(
					'id'          => '7308',
					'province_id' => '73',
					'name'        => 'KABUPATEN MAROS',
				),
			406 =>
				array(
					'id'          => '7309',
					'province_id' => '73',
					'name'        => 'KABUPATEN PANGKAJENE DAN KEPULAUAN',
				),
			407 =>
				array(
					'id'          => '7310',
					'province_id' => '73',
					'name'        => 'KABUPATEN BARRU',
				),
			408 =>
				array(
					'id'          => '7311',
					'province_id' => '73',
					'name'        => 'KABUPATEN BONE',
				),
			409 =>
				array(
					'id'          => '7312',
					'province_id' => '73',
					'name'        => 'KABUPATEN SOPPENG',
				),
			410 =>
				array(
					'id'          => '7313',
					'province_id' => '73',
					'name'        => 'KABUPATEN WAJO',
				),
			411 =>
				array(
					'id'          => '7314',
					'province_id' => '73',
					'name'        => 'KABUPATEN SIDENRENG RAPPANG',
				),
			412 =>
				array(
					'id'          => '7315',
					'province_id' => '73',
					'name'        => 'KABUPATEN PINRANG',
				),
			413 =>
				array(
					'id'          => '7316',
					'province_id' => '73',
					'name'        => 'KABUPATEN ENREKANG',
				),
			414 =>
				array(
					'id'          => '7317',
					'province_id' => '73',
					'name'        => 'KABUPATEN LUWU',
				),
			415 =>
				array(
					'id'          => '7318',
					'province_id' => '73',
					'name'        => 'KABUPATEN TANA TORAJA',
				),
			416 =>
				array(
					'id'          => '7322',
					'province_id' => '73',
					'name'        => 'KABUPATEN LUWU UTARA',
				),
			417 =>
				array(
					'id'          => '7325',
					'province_id' => '73',
					'name'        => 'KABUPATEN LUWU TIMUR',
				),
			418 =>
				array(
					'id'          => '7326',
					'province_id' => '73',
					'name'        => 'KABUPATEN TORAJA UTARA',
				),
			419 =>
				array(
					'id'          => '7371',
					'province_id' => '73',
					'name'        => 'KOTA MAKASSAR',
				),
			420 =>
				array(
					'id'          => '7372',
					'province_id' => '73',
					'name'        => 'KOTA PAREPARE',
				),
			421 =>
				array(
					'id'          => '7373',
					'province_id' => '73',
					'name'        => 'KOTA PALOPO',
				),
			422 =>
				array(
					'id'          => '7401',
					'province_id' => '74',
					'name'        => 'KABUPATEN BUTON',
				),
			423 =>
				array(
					'id'          => '7402',
					'province_id' => '74',
					'name'        => 'KABUPATEN MUNA',
				),
			424 =>
				array(
					'id'          => '7403',
					'province_id' => '74',
					'name'        => 'KABUPATEN KONAWE',
				),
			425 =>
				array(
					'id'          => '7404',
					'province_id' => '74',
					'name'        => 'KABUPATEN KOLAKA',
				),
			426 =>
				array(
					'id'          => '7405',
					'province_id' => '74',
					'name'        => 'KABUPATEN KONAWE SELATAN',
				),
			427 =>
				array(
					'id'          => '7406',
					'province_id' => '74',
					'name'        => 'KABUPATEN BOMBANA',
				),
			428 =>
				array(
					'id'          => '7407',
					'province_id' => '74',
					'name'        => 'KABUPATEN WAKATOBI',
				),
			429 =>
				array(
					'id'          => '7408',
					'province_id' => '74',
					'name'        => 'KABUPATEN KOLAKA UTARA',
				),
			430 =>
				array(
					'id'          => '7409',
					'province_id' => '74',
					'name'        => 'KABUPATEN BUTON UTARA',
				),
			431 =>
				array(
					'id'          => '7410',
					'province_id' => '74',
					'name'        => 'KABUPATEN KONAWE UTARA',
				),
			432 =>
				array(
					'id'          => '7411',
					'province_id' => '74',
					'name'        => 'KABUPATEN KOLAKA TIMUR',
				),
			433 =>
				array(
					'id'          => '7412',
					'province_id' => '74',
					'name'        => 'KABUPATEN KONAWE KEPULAUAN',
				),
			434 =>
				array(
					'id'          => '7413',
					'province_id' => '74',
					'name'        => 'KABUPATEN MUNA BARAT',
				),
			435 =>
				array(
					'id'          => '7414',
					'province_id' => '74',
					'name'        => 'KABUPATEN BUTON TENGAH',
				),
			436 =>
				array(
					'id'          => '7415',
					'province_id' => '74',
					'name'        => 'KABUPATEN BUTON SELATAN',
				),
			437 =>
				array(
					'id'          => '7471',
					'province_id' => '74',
					'name'        => 'KOTA KENDARI',
				),
			438 =>
				array(
					'id'          => '7472',
					'province_id' => '74',
					'name'        => 'KOTA BAUBAU',
				),
			439 =>
				array(
					'id'          => '7501',
					'province_id' => '75',
					'name'        => 'KABUPATEN BOALEMO',
				),
			440 =>
				array(
					'id'          => '7502',
					'province_id' => '75',
					'name'        => 'KABUPATEN GORONTALO',
				),
			441 =>
				array(
					'id'          => '7503',
					'province_id' => '75',
					'name'        => 'KABUPATEN POHUWATO',
				),
			442 =>
				array(
					'id'          => '7504',
					'province_id' => '75',
					'name'        => 'KABUPATEN BONE BOLANGO',
				),
			443 =>
				array(
					'id'          => '7505',
					'province_id' => '75',
					'name'        => 'KABUPATEN GORONTALO UTARA',
				),
			444 =>
				array(
					'id'          => '7571',
					'province_id' => '75',
					'name'        => 'KOTA GORONTALO',
				),
			445 =>
				array(
					'id'          => '7601',
					'province_id' => '76',
					'name'        => 'KABUPATEN MAJENE',
				),
			446 =>
				array(
					'id'          => '7602',
					'province_id' => '76',
					'name'        => 'KABUPATEN POLEWALI MANDAR',
				),
			447 =>
				array(
					'id'          => '7603',
					'province_id' => '76',
					'name'        => 'KABUPATEN MAMASA',
				),
			448 =>
				array(
					'id'          => '7604',
					'province_id' => '76',
					'name'        => 'KABUPATEN MAMUJU',
				),
			449 =>
				array(
					'id'          => '7605',
					'province_id' => '76',
					'name'        => 'KABUPATEN MAMUJU UTARA',
				),
			450 =>
				array(
					'id'          => '7606',
					'province_id' => '76',
					'name'        => 'KABUPATEN MAMUJU TENGAH',
				),
			451 =>
				array(
					'id'          => '8101',
					'province_id' => '81',
					'name'        => 'KABUPATEN MALUKU TENGGARA BARAT',
				),
			452 =>
				array(
					'id'          => '8102',
					'province_id' => '81',
					'name'        => 'KABUPATEN MALUKU TENGGARA',
				),
			453 =>
				array(
					'id'          => '8103',
					'province_id' => '81',
					'name'        => 'KABUPATEN MALUKU TENGAH',
				),
			454 =>
				array(
					'id'          => '8104',
					'province_id' => '81',
					'name'        => 'KABUPATEN BURU',
				),
			455 =>
				array(
					'id'          => '8105',
					'province_id' => '81',
					'name'        => 'KABUPATEN KEPULAUAN ARU',
				),
			456 =>
				array(
					'id'          => '8106',
					'province_id' => '81',
					'name'        => 'KABUPATEN SERAM BAGIAN BARAT',
				),
			457 =>
				array(
					'id'          => '8107',
					'province_id' => '81',
					'name'        => 'KABUPATEN SERAM BAGIAN TIMUR',
				),
			458 =>
				array(
					'id'          => '8108',
					'province_id' => '81',
					'name'        => 'KABUPATEN MALUKU BARAT DAYA',
				),
			459 =>
				array(
					'id'          => '8109',
					'province_id' => '81',
					'name'        => 'KABUPATEN BURU SELATAN',
				),
			460 =>
				array(
					'id'          => '8171',
					'province_id' => '81',
					'name'        => 'KOTA AMBON',
				),
			461 =>
				array(
					'id'          => '8172',
					'province_id' => '81',
					'name'        => 'KOTA TUAL',
				),
			462 =>
				array(
					'id'          => '8201',
					'province_id' => '82',
					'name'        => 'KABUPATEN HALMAHERA BARAT',
				),
			463 =>
				array(
					'id'          => '8202',
					'province_id' => '82',
					'name'        => 'KABUPATEN HALMAHERA TENGAH',
				),
			464 =>
				array(
					'id'          => '8203',
					'province_id' => '82',
					'name'        => 'KABUPATEN KEPULAUAN SULA',
				),
			465 =>
				array(
					'id'          => '8204',
					'province_id' => '82',
					'name'        => 'KABUPATEN HALMAHERA SELATAN',
				),
			466 =>
				array(
					'id'          => '8205',
					'province_id' => '82',
					'name'        => 'KABUPATEN HALMAHERA UTARA',
				),
			467 =>
				array(
					'id'          => '8206',
					'province_id' => '82',
					'name'        => 'KABUPATEN HALMAHERA TIMUR',
				),
			468 =>
				array(
					'id'          => '8207',
					'province_id' => '82',
					'name'        => 'KABUPATEN PULAU MOROTAI',
				),
			469 =>
				array(
					'id'          => '8208',
					'province_id' => '82',
					'name'        => 'KABUPATEN PULAU TALIABU',
				),
			470 =>
				array(
					'id'          => '8271',
					'province_id' => '82',
					'name'        => 'KOTA TERNATE',
				),
			471 =>
				array(
					'id'          => '8272',
					'province_id' => '82',
					'name'        => 'KOTA TIDORE KEPULAUAN',
				),
			472 =>
				array(
					'id'          => '9101',
					'province_id' => '91',
					'name'        => 'KABUPATEN FAKFAK',
				),
			473 =>
				array(
					'id'          => '9102',
					'province_id' => '91',
					'name'        => 'KABUPATEN KAIMANA',
				),
			474 =>
				array(
					'id'          => '9103',
					'province_id' => '91',
					'name'        => 'KABUPATEN TELUK WONDAMA',
				),
			475 =>
				array(
					'id'          => '9104',
					'province_id' => '91',
					'name'        => 'KABUPATEN TELUK BINTUNI',
				),
			476 =>
				array(
					'id'          => '9105',
					'province_id' => '91',
					'name'        => 'KABUPATEN MANOKWARI',
				),
			477 =>
				array(
					'id'          => '9106',
					'province_id' => '91',
					'name'        => 'KABUPATEN SORONG SELATAN',
				),
			478 =>
				array(
					'id'          => '9107',
					'province_id' => '91',
					'name'        => 'KABUPATEN SORONG',
				),
			479 =>
				array(
					'id'          => '9108',
					'province_id' => '91',
					'name'        => 'KABUPATEN RAJA AMPAT',
				),
			480 =>
				array(
					'id'          => '9109',
					'province_id' => '91',
					'name'        => 'KABUPATEN TAMBRAUW',
				),
			481 =>
				array(
					'id'          => '9110',
					'province_id' => '91',
					'name'        => 'KABUPATEN MAYBRAT',
				),
			482 =>
				array(
					'id'          => '9111',
					'province_id' => '91',
					'name'        => 'KABUPATEN MANOKWARI SELATAN',
				),
			483 =>
				array(
					'id'          => '9112',
					'province_id' => '91',
					'name'        => 'KABUPATEN PEGUNUNGAN ARFAK',
				),
			484 =>
				array(
					'id'          => '9171',
					'province_id' => '91',
					'name'        => 'KOTA SORONG',
				),
			485 =>
				array(
					'id'          => '9401',
					'province_id' => '94',
					'name'        => 'KABUPATEN MERAUKE',
				),
			486 =>
				array(
					'id'          => '9402',
					'province_id' => '94',
					'name'        => 'KABUPATEN JAYAWIJAYA',
				),
			487 =>
				array(
					'id'          => '9403',
					'province_id' => '94',
					'name'        => 'KABUPATEN JAYAPURA',
				),
			488 =>
				array(
					'id'          => '9404',
					'province_id' => '94',
					'name'        => 'KABUPATEN NABIRE',
				),
			489 =>
				array(
					'id'          => '9408',
					'province_id' => '94',
					'name'        => 'KABUPATEN KEPULAUAN YAPEN',
				),
			490 =>
				array(
					'id'          => '9409',
					'province_id' => '94',
					'name'        => 'KABUPATEN BIAK NUMFOR',
				),
			491 =>
				array(
					'id'          => '9410',
					'province_id' => '94',
					'name'        => 'KABUPATEN PANIAI',
				),
			492 =>
				array(
					'id'          => '9411',
					'province_id' => '94',
					'name'        => 'KABUPATEN PUNCAK JAYA',
				),
			493 =>
				array(
					'id'          => '9412',
					'province_id' => '94',
					'name'        => 'KABUPATEN MIMIKA',
				),
			494 =>
				array(
					'id'          => '9413',
					'province_id' => '94',
					'name'        => 'KABUPATEN BOVEN DIGOEL',
				),
			495 =>
				array(
					'id'          => '9414',
					'province_id' => '94',
					'name'        => 'KABUPATEN MAPPI',
				),
			496 =>
				array(
					'id'          => '9415',
					'province_id' => '94',
					'name'        => 'KABUPATEN ASMAT',
				),
			497 =>
				array(
					'id'          => '9416',
					'province_id' => '94',
					'name'        => 'KABUPATEN YAHUKIMO',
				),
			498 =>
				array(
					'id'          => '9417',
					'province_id' => '94',
					'name'        => 'KABUPATEN PEGUNUNGAN BINTANG',
				),
			499 =>
				array(
					'id'          => '9418',
					'province_id' => '94',
					'name'        => 'KABUPATEN TOLIKARA',
				),
		));
		\DB::table('regencies')->insert(array(
			0  =>
				array(
					'id'          => '9419',
					'province_id' => '94',
					'name'        => 'KABUPATEN SARMI',
				),
			1  =>
				array(
					'id'          => '9420',
					'province_id' => '94',
					'name'        => 'KABUPATEN KEEROM',
				),
			2  =>
				array(
					'id'          => '9426',
					'province_id' => '94',
					'name'        => 'KABUPATEN WAROPEN',
				),
			3  =>
				array(
					'id'          => '9427',
					'province_id' => '94',
					'name'        => 'KABUPATEN SUPIORI',
				),
			4  =>
				array(
					'id'          => '9428',
					'province_id' => '94',
					'name'        => 'KABUPATEN MAMBERAMO RAYA',
				),
			5  =>
				array(
					'id'          => '9429',
					'province_id' => '94',
					'name'        => 'KABUPATEN NDUGA',
				),
			6  =>
				array(
					'id'          => '9430',
					'province_id' => '94',
					'name'        => 'KABUPATEN LANNY JAYA',
				),
			7  =>
				array(
					'id'          => '9431',
					'province_id' => '94',
					'name'        => 'KABUPATEN MAMBERAMO TENGAH',
				),
			8  =>
				array(
					'id'          => '9432',
					'province_id' => '94',
					'name'        => 'KABUPATEN YALIMO',
				),
			9  =>
				array(
					'id'          => '9433',
					'province_id' => '94',
					'name'        => 'KABUPATEN PUNCAK',
				),
			10 =>
				array(
					'id'          => '9434',
					'province_id' => '94',
					'name'        => 'KABUPATEN DOGIYAI',
				),
			11 =>
				array(
					'id'          => '9435',
					'province_id' => '94',
					'name'        => 'KABUPATEN INTAN JAYA',
				),
			12 =>
				array(
					'id'          => '9436',
					'province_id' => '94',
					'name'        => 'KABUPATEN DEIYAI',
				),
			13 =>
				array(
					'id'          => '9471',
					'province_id' => '94',
					'name'        => 'KOTA JAYAPURA',
				),
		));


	}
}