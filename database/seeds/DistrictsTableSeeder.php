<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('districts')->delete();

		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '1101010',
					'regency_id' => '1101',
					'name'       => 'TEUPAH SELATAN',
				),
			1   =>
				array(
					'id'         => '1101020',
					'regency_id' => '1101',
					'name'       => 'SIMEULUE TIMUR',
				),
			2   =>
				array(
					'id'         => '1101021',
					'regency_id' => '1101',
					'name'       => 'TEUPAH BARAT',
				),
			3   =>
				array(
					'id'         => '1101022',
					'regency_id' => '1101',
					'name'       => 'TEUPAH TENGAH',
				),
			4   =>
				array(
					'id'         => '1101030',
					'regency_id' => '1101',
					'name'       => 'SIMEULUE TENGAH',
				),
			5   =>
				array(
					'id'         => '1101031',
					'regency_id' => '1101',
					'name'       => 'TELUK DALAM',
				),
			6   =>
				array(
					'id'         => '1101032',
					'regency_id' => '1101',
					'name'       => 'SIMEULUE CUT',
				),
			7   =>
				array(
					'id'         => '1101040',
					'regency_id' => '1101',
					'name'       => 'SALANG',
				),
			8   =>
				array(
					'id'         => '1101050',
					'regency_id' => '1101',
					'name'       => 'SIMEULUE BARAT',
				),
			9   =>
				array(
					'id'         => '1101051',
					'regency_id' => '1101',
					'name'       => 'ALAFAN',
				),
			10  =>
				array(
					'id'         => '1102010',
					'regency_id' => '1102',
					'name'       => 'PULAU BANYAK',
				),
			11  =>
				array(
					'id'         => '1102011',
					'regency_id' => '1102',
					'name'       => 'PULAU BANYAK BARAT',
				),
			12  =>
				array(
					'id'         => '1102020',
					'regency_id' => '1102',
					'name'       => 'SINGKIL',
				),
			13  =>
				array(
					'id'         => '1102021',
					'regency_id' => '1102',
					'name'       => 'SINGKIL UTARA',
				),
			14  =>
				array(
					'id'         => '1102022',
					'regency_id' => '1102',
					'name'       => 'KUALA BARU',
				),
			15  =>
				array(
					'id'         => '1102030',
					'regency_id' => '1102',
					'name'       => 'SIMPANG KANAN',
				),
			16  =>
				array(
					'id'         => '1102031',
					'regency_id' => '1102',
					'name'       => 'GUNUNG MERIAH',
				),
			17  =>
				array(
					'id'         => '1102032',
					'regency_id' => '1102',
					'name'       => 'DANAU PARIS',
				),
			18  =>
				array(
					'id'         => '1102033',
					'regency_id' => '1102',
					'name'       => 'SURO',
				),
			19  =>
				array(
					'id'         => '1102042',
					'regency_id' => '1102',
					'name'       => 'SINGKOHOR',
				),
			20  =>
				array(
					'id'         => '1102043',
					'regency_id' => '1102',
					'name'       => 'KOTA BAHARU',
				),
			21  =>
				array(
					'id'         => '1103010',
					'regency_id' => '1103',
					'name'       => 'TRUMON',
				),
			22  =>
				array(
					'id'         => '1103011',
					'regency_id' => '1103',
					'name'       => 'TRUMON TIMUR',
				),
			23  =>
				array(
					'id'         => '1103012',
					'regency_id' => '1103',
					'name'       => 'TRUMON TENGAH',
				),
			24  =>
				array(
					'id'         => '1103020',
					'regency_id' => '1103',
					'name'       => 'BAKONGAN',
				),
			25  =>
				array(
					'id'         => '1103021',
					'regency_id' => '1103',
					'name'       => 'BAKONGAN TIMUR',
				),
			26  =>
				array(
					'id'         => '1103022',
					'regency_id' => '1103',
					'name'       => 'KOTA BAHAGIA',
				),
			27  =>
				array(
					'id'         => '1103030',
					'regency_id' => '1103',
					'name'       => 'KLUET SELATAN',
				),
			28  =>
				array(
					'id'         => '1103031',
					'regency_id' => '1103',
					'name'       => 'KLUET TIMUR',
				),
			29  =>
				array(
					'id'         => '1103040',
					'regency_id' => '1103',
					'name'       => 'KLUET UTARA',
				),
			30  =>
				array(
					'id'         => '1103041',
					'regency_id' => '1103',
					'name'       => 'PASIE RAJA',
				),
			31  =>
				array(
					'id'         => '1103042',
					'regency_id' => '1103',
					'name'       => 'KLUET TENGAH',
				),
			32  =>
				array(
					'id'         => '1103050',
					'regency_id' => '1103',
					'name'       => 'TAPAK TUAN',
				),
			33  =>
				array(
					'id'         => '1103060',
					'regency_id' => '1103',
					'name'       => 'SAMA DUA',
				),
			34  =>
				array(
					'id'         => '1103070',
					'regency_id' => '1103',
					'name'       => 'SAWANG',
				),
			35  =>
				array(
					'id'         => '1103080',
					'regency_id' => '1103',
					'name'       => 'MEUKEK',
				),
			36  =>
				array(
					'id'         => '1103090',
					'regency_id' => '1103',
					'name'       => 'LABUHAN HAJI',
				),
			37  =>
				array(
					'id'         => '1103091',
					'regency_id' => '1103',
					'name'       => 'LABUHAN HAJI TIMUR',
				),
			38  =>
				array(
					'id'         => '1103092',
					'regency_id' => '1103',
					'name'       => 'LABUHAN HAJI BARAT',
				),
			39  =>
				array(
					'id'         => '1104010',
					'regency_id' => '1104',
					'name'       => 'LAWE ALAS',
				),
			40  =>
				array(
					'id'         => '1104011',
					'regency_id' => '1104',
					'name'       => 'BABUL RAHMAH',
				),
			41  =>
				array(
					'id'         => '1104012',
					'regency_id' => '1104',
					'name'       => 'TANOH ALAS',
				),
			42  =>
				array(
					'id'         => '1104020',
					'regency_id' => '1104',
					'name'       => 'LAWE SIGALA-GALA',
				),
			43  =>
				array(
					'id'         => '1104021',
					'regency_id' => '1104',
					'name'       => 'BABUL MAKMUR',
				),
			44  =>
				array(
					'id'         => '1104022',
					'regency_id' => '1104',
					'name'       => 'SEMADAM',
				),
			45  =>
				array(
					'id'         => '1104023',
					'regency_id' => '1104',
					'name'       => 'LEUSER',
				),
			46  =>
				array(
					'id'         => '1104030',
					'regency_id' => '1104',
					'name'       => 'BAMBEL',
				),
			47  =>
				array(
					'id'         => '1104031',
					'regency_id' => '1104',
					'name'       => 'BUKIT TUSAM',
				),
			48  =>
				array(
					'id'         => '1104032',
					'regency_id' => '1104',
					'name'       => 'LAWE SUMUR',
				),
			49  =>
				array(
					'id'         => '1104040',
					'regency_id' => '1104',
					'name'       => 'BABUSSALAM',
				),
			50  =>
				array(
					'id'         => '1104041',
					'regency_id' => '1104',
					'name'       => 'LAWE BULAN',
				),
			51  =>
				array(
					'id'         => '1104050',
					'regency_id' => '1104',
					'name'       => 'BADAR',
				),
			52  =>
				array(
					'id'         => '1104051',
					'regency_id' => '1104',
					'name'       => 'DARUL HASANAH',
				),
			53  =>
				array(
					'id'         => '1104052',
					'regency_id' => '1104',
					'name'       => 'KETAMBE',
				),
			54  =>
				array(
					'id'         => '1104053',
					'regency_id' => '1104',
					'name'       => 'DELENG POKHKISEN',
				),
			55  =>
				array(
					'id'         => '1105080',
					'regency_id' => '1105',
					'name'       => 'SERBA JADI',
				),
			56  =>
				array(
					'id'         => '1105081',
					'regency_id' => '1105',
					'name'       => 'SIMPANG JERNIH',
				),
			57  =>
				array(
					'id'         => '1105082',
					'regency_id' => '1105',
					'name'       => 'PEUNARON',
				),
			58  =>
				array(
					'id'         => '1105090',
					'regency_id' => '1105',
					'name'       => 'BIREM BAYEUN',
				),
			59  =>
				array(
					'id'         => '1105100',
					'regency_id' => '1105',
					'name'       => 'RANTAU SELAMAT',
				),
			60  =>
				array(
					'id'         => '1105101',
					'regency_id' => '1105',
					'name'       => 'SUNGAI RAYA',
				),
			61  =>
				array(
					'id'         => '1105110',
					'regency_id' => '1105',
					'name'       => 'PEUREULAK',
				),
			62  =>
				array(
					'id'         => '1105111',
					'regency_id' => '1105',
					'name'       => 'PEUREULAK TIMUR',
				),
			63  =>
				array(
					'id'         => '1105112',
					'regency_id' => '1105',
					'name'       => 'PEUREULAK BARAT',
				),
			64  =>
				array(
					'id'         => '1105120',
					'regency_id' => '1105',
					'name'       => 'RANTO PEUREULAK',
				),
			65  =>
				array(
					'id'         => '1105130',
					'regency_id' => '1105',
					'name'       => 'IDI RAYEUK',
				),
			66  =>
				array(
					'id'         => '1105131',
					'regency_id' => '1105',
					'name'       => 'PEUDAWA',
				),
			67  =>
				array(
					'id'         => '1105132',
					'regency_id' => '1105',
					'name'       => 'BANDA ALAM',
				),
			68  =>
				array(
					'id'         => '1105133',
					'regency_id' => '1105',
					'name'       => 'IDI TUNONG',
				),
			69  =>
				array(
					'id'         => '1105134',
					'regency_id' => '1105',
					'name'       => 'DARUL IHSAN',
				),
			70  =>
				array(
					'id'         => '1105135',
					'regency_id' => '1105',
					'name'       => 'IDI TIMUR',
				),
			71  =>
				array(
					'id'         => '1105140',
					'regency_id' => '1105',
					'name'       => 'DARUL AMAN',
				),
			72  =>
				array(
					'id'         => '1105150',
					'regency_id' => '1105',
					'name'       => 'NURUSSALAM',
				),
			73  =>
				array(
					'id'         => '1105151',
					'regency_id' => '1105',
					'name'       => 'DARUL FALAH',
				),
			74  =>
				array(
					'id'         => '1105160',
					'regency_id' => '1105',
					'name'       => 'JULOK',
				),
			75  =>
				array(
					'id'         => '1105161',
					'regency_id' => '1105',
					'name'       => 'INDRA MAKMUR',
				),
			76  =>
				array(
					'id'         => '1105170',
					'regency_id' => '1105',
					'name'       => 'PANTE BIDARI',
				),
			77  =>
				array(
					'id'         => '1105180',
					'regency_id' => '1105',
					'name'       => 'SIMPANG ULIM',
				),
			78  =>
				array(
					'id'         => '1105181',
					'regency_id' => '1105',
					'name'       => 'MADAT',
				),
			79  =>
				array(
					'id'         => '1106010',
					'regency_id' => '1106',
					'name'       => 'LINGE',
				),
			80  =>
				array(
					'id'         => '1106011',
					'regency_id' => '1106',
					'name'       => 'ATU LINTANG',
				),
			81  =>
				array(
					'id'         => '1106012',
					'regency_id' => '1106',
					'name'       => 'JAGONG JEGET',
				),
			82  =>
				array(
					'id'         => '1106020',
					'regency_id' => '1106',
					'name'       => 'BINTANG',
				),
			83  =>
				array(
					'id'         => '1106031',
					'regency_id' => '1106',
					'name'       => 'LUT TAWAR',
				),
			84  =>
				array(
					'id'         => '1106032',
					'regency_id' => '1106',
					'name'       => 'KEBAYAKAN',
				),
			85  =>
				array(
					'id'         => '1106040',
					'regency_id' => '1106',
					'name'       => 'PEGASING',
				),
			86  =>
				array(
					'id'         => '1106041',
					'regency_id' => '1106',
					'name'       => 'BIES',
				),
			87  =>
				array(
					'id'         => '1106050',
					'regency_id' => '1106',
					'name'       => 'BEBESEN',
				),
			88  =>
				array(
					'id'         => '1106051',
					'regency_id' => '1106',
					'name'       => 'KUTE PANANG',
				),
			89  =>
				array(
					'id'         => '1106060',
					'regency_id' => '1106',
					'name'       => 'SILIH NARA',
				),
			90  =>
				array(
					'id'         => '1106061',
					'regency_id' => '1106',
					'name'       => 'KETOL',
				),
			91  =>
				array(
					'id'         => '1106062',
					'regency_id' => '1106',
					'name'       => 'CELALA',
				),
			92  =>
				array(
					'id'         => '1106063',
					'regency_id' => '1106',
					'name'       => 'RUSIP ANTARA',
				),
			93  =>
				array(
					'id'         => '1107050',
					'regency_id' => '1107',
					'name'       => 'JOHAN PAHLAWAN',
				),
			94  =>
				array(
					'id'         => '1107060',
					'regency_id' => '1107',
					'name'       => 'SAMATIGA',
				),
			95  =>
				array(
					'id'         => '1107061',
					'regency_id' => '1107',
					'name'       => 'BUBON',
				),
			96  =>
				array(
					'id'         => '1107062',
					'regency_id' => '1107',
					'name'       => 'ARONGAN LAMBALEK',
				),
			97  =>
				array(
					'id'         => '1107070',
					'regency_id' => '1107',
					'name'       => 'WOYLA',
				),
			98  =>
				array(
					'id'         => '1107071',
					'regency_id' => '1107',
					'name'       => 'WOYLA BARAT',
				),
			99  =>
				array(
					'id'         => '1107072',
					'regency_id' => '1107',
					'name'       => 'WOYLA TIMUR',
				),
			100 =>
				array(
					'id'         => '1107080',
					'regency_id' => '1107',
					'name'       => 'KAWAY XVI',
				),
			101 =>
				array(
					'id'         => '1107081',
					'regency_id' => '1107',
					'name'       => 'MEUREUBO',
				),
			102 =>
				array(
					'id'         => '1107082',
					'regency_id' => '1107',
					'name'       => 'PANTAI CEUREMEN',
				),
			103 =>
				array(
					'id'         => '1107083',
					'regency_id' => '1107',
					'name'       => 'PANTON REU',
				),
			104 =>
				array(
					'id'         => '1107090',
					'regency_id' => '1107',
					'name'       => 'SUNGAI MAS',
				),
			105 =>
				array(
					'id'         => '1108010',
					'regency_id' => '1108',
					'name'       => 'LHOONG',
				),
			106 =>
				array(
					'id'         => '1108020',
					'regency_id' => '1108',
					'name'       => 'LHOKNGA',
				),
			107 =>
				array(
					'id'         => '1108021',
					'regency_id' => '1108',
					'name'       => 'LEUPUNG',
				),
			108 =>
				array(
					'id'         => '1108030',
					'regency_id' => '1108',
					'name'       => 'INDRAPURI',
				),
			109 =>
				array(
					'id'         => '1108031',
					'regency_id' => '1108',
					'name'       => 'KUTA COT GLIE',
				),
			110 =>
				array(
					'id'         => '1108040',
					'regency_id' => '1108',
					'name'       => 'SEULIMEUM',
				),
			111 =>
				array(
					'id'         => '1108041',
					'regency_id' => '1108',
					'name'       => 'KOTA JANTHO',
				),
			112 =>
				array(
					'id'         => '1108042',
					'regency_id' => '1108',
					'name'       => 'LEMBAH SEULAWAH',
				),
			113 =>
				array(
					'id'         => '1108050',
					'regency_id' => '1108',
					'name'       => 'MESJID RAYA',
				),
			114 =>
				array(
					'id'         => '1108060',
					'regency_id' => '1108',
					'name'       => 'DARUSSALAM',
				),
			115 =>
				array(
					'id'         => '1108061',
					'regency_id' => '1108',
					'name'       => 'BAITUSSALAM',
				),
			116 =>
				array(
					'id'         => '1108070',
					'regency_id' => '1108',
					'name'       => 'KUTA BARO',
				),
			117 =>
				array(
					'id'         => '1108080',
					'regency_id' => '1108',
					'name'       => 'MONTASIK',
				),
			118 =>
				array(
					'id'         => '1108081',
					'regency_id' => '1108',
					'name'       => 'BLANG BINTANG',
				),
			119 =>
				array(
					'id'         => '1108090',
					'regency_id' => '1108',
					'name'       => 'INGIN JAYA',
				),
			120 =>
				array(
					'id'         => '1108091',
					'regency_id' => '1108',
					'name'       => 'KRUENG BARONA JAYA',
				),
			121 =>
				array(
					'id'         => '1108100',
					'regency_id' => '1108',
					'name'       => 'SUKA MAKMUR',
				),
			122 =>
				array(
					'id'         => '1108101',
					'regency_id' => '1108',
					'name'       => 'KUTA MALAKA',
				),
			123 =>
				array(
					'id'         => '1108102',
					'regency_id' => '1108',
					'name'       => 'SIMPANG TIGA',
				),
			124 =>
				array(
					'id'         => '1108110',
					'regency_id' => '1108',
					'name'       => 'DARUL IMARAH',
				),
			125 =>
				array(
					'id'         => '1108111',
					'regency_id' => '1108',
					'name'       => 'DARUL KAMAL',
				),
			126 =>
				array(
					'id'         => '1108120',
					'regency_id' => '1108',
					'name'       => 'PEUKAN BADA',
				),
			127 =>
				array(
					'id'         => '1108130',
					'regency_id' => '1108',
					'name'       => 'PULO ACEH',
				),
			128 =>
				array(
					'id'         => '1109010',
					'regency_id' => '1109',
					'name'       => 'GEUMPANG',
				),
			129 =>
				array(
					'id'         => '1109011',
					'regency_id' => '1109',
					'name'       => 'MANE',
				),
			130 =>
				array(
					'id'         => '1109070',
					'regency_id' => '1109',
					'name'       => 'GLUMPANG TIGA',
				),
			131 =>
				array(
					'id'         => '1109071',
					'regency_id' => '1109',
					'name'       => 'GLUMPANG BARO',
				),
			132 =>
				array(
					'id'         => '1109080',
					'regency_id' => '1109',
					'name'       => 'MUTIARA',
				),
			133 =>
				array(
					'id'         => '1109081',
					'regency_id' => '1109',
					'name'       => 'MUTIARA TIMUR',
				),
			134 =>
				array(
					'id'         => '1109090',
					'regency_id' => '1109',
					'name'       => 'TIRO/TRUSEB',
				),
			135 =>
				array(
					'id'         => '1109100',
					'regency_id' => '1109',
					'name'       => 'TANGSE',
				),
			136 =>
				array(
					'id'         => '1109111',
					'regency_id' => '1109',
					'name'       => 'KEUMALA',
				),
			137 =>
				array(
					'id'         => '1109112',
					'regency_id' => '1109',
					'name'       => 'TITEUE',
				),
			138 =>
				array(
					'id'         => '1109120',
					'regency_id' => '1109',
					'name'       => 'SAKTI',
				),
			139 =>
				array(
					'id'         => '1109130',
					'regency_id' => '1109',
					'name'       => 'MILA',
				),
			140 =>
				array(
					'id'         => '1109140',
					'regency_id' => '1109',
					'name'       => 'PADANG TIJI',
				),
			141 =>
				array(
					'id'         => '1109150',
					'regency_id' => '1109',
					'name'       => 'DELIMA',
				),
			142 =>
				array(
					'id'         => '1109151',
					'regency_id' => '1109',
					'name'       => 'GRONG GRONG',
				),
			143 =>
				array(
					'id'         => '1109160',
					'regency_id' => '1109',
					'name'       => 'INDRAJAYA',
				),
			144 =>
				array(
					'id'         => '1109170',
					'regency_id' => '1109',
					'name'       => 'PEUKAN BARO',
				),
			145 =>
				array(
					'id'         => '1109180',
					'regency_id' => '1109',
					'name'       => 'KEMBANG TANJONG',
				),
			146 =>
				array(
					'id'         => '1109190',
					'regency_id' => '1109',
					'name'       => 'SIMPANG TIGA',
				),
			147 =>
				array(
					'id'         => '1109200',
					'regency_id' => '1109',
					'name'       => 'KOTA SIGLI',
				),
			148 =>
				array(
					'id'         => '1109210',
					'regency_id' => '1109',
					'name'       => 'PIDIE',
				),
			149 =>
				array(
					'id'         => '1109220',
					'regency_id' => '1109',
					'name'       => 'BATEE',
				),
			150 =>
				array(
					'id'         => '1109230',
					'regency_id' => '1109',
					'name'       => 'MUARA TIGA',
				),
			151 =>
				array(
					'id'         => '1110010',
					'regency_id' => '1110',
					'name'       => 'SAMALANGA',
				),
			152 =>
				array(
					'id'         => '1110011',
					'regency_id' => '1110',
					'name'       => 'SIMPANG MAMPLAM',
				),
			153 =>
				array(
					'id'         => '1110020',
					'regency_id' => '1110',
					'name'       => 'PANDRAH',
				),
			154 =>
				array(
					'id'         => '1110030',
					'regency_id' => '1110',
					'name'       => 'JEUNIEB',
				),
			155 =>
				array(
					'id'         => '1110031',
					'regency_id' => '1110',
					'name'       => 'PEULIMBANG',
				),
			156 =>
				array(
					'id'         => '1110040',
					'regency_id' => '1110',
					'name'       => 'PEUDADA',
				),
			157 =>
				array(
					'id'         => '1110050',
					'regency_id' => '1110',
					'name'       => 'JULI',
				),
			158 =>
				array(
					'id'         => '1110060',
					'regency_id' => '1110',
					'name'       => 'JEUMPA',
				),
			159 =>
				array(
					'id'         => '1110061',
					'regency_id' => '1110',
					'name'       => 'KOTA JUANG',
				),
			160 =>
				array(
					'id'         => '1110062',
					'regency_id' => '1110',
					'name'       => 'KUALA',
				),
			161 =>
				array(
					'id'         => '1110070',
					'regency_id' => '1110',
					'name'       => 'JANGKA',
				),
			162 =>
				array(
					'id'         => '1110080',
					'regency_id' => '1110',
					'name'       => 'PEUSANGAN',
				),
			163 =>
				array(
					'id'         => '1110081',
					'regency_id' => '1110',
					'name'       => 'PEUSANGAN SELATAN',
				),
			164 =>
				array(
					'id'         => '1110082',
					'regency_id' => '1110',
					'name'       => 'PEUSANGAN SIBLAH KRUENG',
				),
			165 =>
				array(
					'id'         => '1110090',
					'regency_id' => '1110',
					'name'       => 'MAKMUR',
				),
			166 =>
				array(
					'id'         => '1110100',
					'regency_id' => '1110',
					'name'       => 'GANDA PURA',
				),
			167 =>
				array(
					'id'         => '1110101',
					'regency_id' => '1110',
					'name'       => 'KUTA BLANG',
				),
			168 =>
				array(
					'id'         => '1111010',
					'regency_id' => '1111',
					'name'       => 'SAWANG',
				),
			169 =>
				array(
					'id'         => '1111020',
					'regency_id' => '1111',
					'name'       => 'NISAM',
				),
			170 =>
				array(
					'id'         => '1111021',
					'regency_id' => '1111',
					'name'       => 'NISAM ANTARA',
				),
			171 =>
				array(
					'id'         => '1111022',
					'regency_id' => '1111',
					'name'       => 'BANDA BARO',
				),
			172 =>
				array(
					'id'         => '1111030',
					'regency_id' => '1111',
					'name'       => 'KUTA MAKMUR',
				),
			173 =>
				array(
					'id'         => '1111031',
					'regency_id' => '1111',
					'name'       => 'SIMPANG KERAMAT',
				),
			174 =>
				array(
					'id'         => '1111040',
					'regency_id' => '1111',
					'name'       => 'SYAMTALIRA BAYU',
				),
			175 =>
				array(
					'id'         => '1111041',
					'regency_id' => '1111',
					'name'       => 'GEUREUDONG PASE',
				),
			176 =>
				array(
					'id'         => '1111050',
					'regency_id' => '1111',
					'name'       => 'MEURAH MULIA',
				),
			177 =>
				array(
					'id'         => '1111060',
					'regency_id' => '1111',
					'name'       => 'MATANGKULI',
				),
			178 =>
				array(
					'id'         => '1111061',
					'regency_id' => '1111',
					'name'       => 'PAYA BAKONG',
				),
			179 =>
				array(
					'id'         => '1111062',
					'regency_id' => '1111',
					'name'       => 'PIRAK TIMU',
				),
			180 =>
				array(
					'id'         => '1111070',
					'regency_id' => '1111',
					'name'       => 'COT GIREK',
				),
			181 =>
				array(
					'id'         => '1111080',
					'regency_id' => '1111',
					'name'       => 'TANAH JAMBO AYE',
				),
			182 =>
				array(
					'id'         => '1111081',
					'regency_id' => '1111',
					'name'       => 'LANGKAHAN',
				),
			183 =>
				array(
					'id'         => '1111090',
					'regency_id' => '1111',
					'name'       => 'SEUNUDDON',
				),
			184 =>
				array(
					'id'         => '1111100',
					'regency_id' => '1111',
					'name'       => 'BAKTIYA',
				),
			185 =>
				array(
					'id'         => '1111101',
					'regency_id' => '1111',
					'name'       => 'BAKTIYA BARAT',
				),
			186 =>
				array(
					'id'         => '1111110',
					'regency_id' => '1111',
					'name'       => 'LHOKSUKON',
				),
			187 =>
				array(
					'id'         => '1111120',
					'regency_id' => '1111',
					'name'       => 'TANAH LUAS',
				),
			188 =>
				array(
					'id'         => '1111121',
					'regency_id' => '1111',
					'name'       => 'NIBONG',
				),
			189 =>
				array(
					'id'         => '1111130',
					'regency_id' => '1111',
					'name'       => 'SAMUDERA',
				),
			190 =>
				array(
					'id'         => '1111140',
					'regency_id' => '1111',
					'name'       => 'SYAMTALIRA ARON',
				),
			191 =>
				array(
					'id'         => '1111150',
					'regency_id' => '1111',
					'name'       => 'TANAH PASIR',
				),
			192 =>
				array(
					'id'         => '1111151',
					'regency_id' => '1111',
					'name'       => 'LAPANG',
				),
			193 =>
				array(
					'id'         => '1111160',
					'regency_id' => '1111',
					'name'       => 'MUARA BATU',
				),
			194 =>
				array(
					'id'         => '1111170',
					'regency_id' => '1111',
					'name'       => 'DEWANTARA',
				),
			195 =>
				array(
					'id'         => '1112010',
					'regency_id' => '1112',
					'name'       => 'MANGGENG',
				),
			196 =>
				array(
					'id'         => '1112011',
					'regency_id' => '1112',
					'name'       => 'LEMBAH SABIL',
				),
			197 =>
				array(
					'id'         => '1112020',
					'regency_id' => '1112',
					'name'       => 'TANGAN-TANGAN',
				),
			198 =>
				array(
					'id'         => '1112021',
					'regency_id' => '1112',
					'name'       => 'SETIA',
				),
			199 =>
				array(
					'id'         => '1112030',
					'regency_id' => '1112',
					'name'       => 'BLANG PIDIE',
				),
			200 =>
				array(
					'id'         => '1112031',
					'regency_id' => '1112',
					'name'       => 'JEUMPA',
				),
			201 =>
				array(
					'id'         => '1112040',
					'regency_id' => '1112',
					'name'       => 'SUSOH',
				),
			202 =>
				array(
					'id'         => '1112050',
					'regency_id' => '1112',
					'name'       => 'KUALA BATEE',
				),
			203 =>
				array(
					'id'         => '1112060',
					'regency_id' => '1112',
					'name'       => 'BABAH ROT',
				),
			204 =>
				array(
					'id'         => '1113010',
					'regency_id' => '1113',
					'name'       => 'KUTA PANJANG',
				),
			205 =>
				array(
					'id'         => '1113011',
					'regency_id' => '1113',
					'name'       => 'BLANG JERANGO',
				),
			206 =>
				array(
					'id'         => '1113020',
					'regency_id' => '1113',
					'name'       => 'BLANGKEJEREN',
				),
			207 =>
				array(
					'id'         => '1113021',
					'regency_id' => '1113',
					'name'       => 'PUTRI BETUNG',
				),
			208 =>
				array(
					'id'         => '1113022',
					'regency_id' => '1113',
					'name'       => 'DABUN GELANG',
				),
			209 =>
				array(
					'id'         => '1113023',
					'regency_id' => '1113',
					'name'       => 'BLANG PEGAYON',
				),
			210 =>
				array(
					'id'         => '1113030',
					'regency_id' => '1113',
					'name'       => 'PINING',
				),
			211 =>
				array(
					'id'         => '1113040',
					'regency_id' => '1113',
					'name'       => 'RIKIT GAIB',
				),
			212 =>
				array(
					'id'         => '1113041',
					'regency_id' => '1113',
					'name'       => 'PANTAN CUACA',
				),
			213 =>
				array(
					'id'         => '1113050',
					'regency_id' => '1113',
					'name'       => 'TERANGUN',
				),
			214 =>
				array(
					'id'         => '1113051',
					'regency_id' => '1113',
					'name'       => 'TRIPE JAYA',
				),
			215 =>
				array(
					'id'         => '1114010',
					'regency_id' => '1114',
					'name'       => 'TAMIANG HULU',
				),
			216 =>
				array(
					'id'         => '1114011',
					'regency_id' => '1114',
					'name'       => 'BANDAR PUSAKA',
				),
			217 =>
				array(
					'id'         => '1114020',
					'regency_id' => '1114',
					'name'       => 'KEJURUAN MUDA',
				),
			218 =>
				array(
					'id'         => '1114021',
					'regency_id' => '1114',
					'name'       => 'TENGGULUN',
				),
			219 =>
				array(
					'id'         => '1114030',
					'regency_id' => '1114',
					'name'       => 'RANTAU',
				),
			220 =>
				array(
					'id'         => '1114040',
					'regency_id' => '1114',
					'name'       => 'KOTA KUALA SIMPANG',
				),
			221 =>
				array(
					'id'         => '1114050',
					'regency_id' => '1114',
					'name'       => 'SERUWAY',
				),
			222 =>
				array(
					'id'         => '1114060',
					'regency_id' => '1114',
					'name'       => 'BENDAHARA',
				),
			223 =>
				array(
					'id'         => '1114061',
					'regency_id' => '1114',
					'name'       => 'BANDA MULIA',
				),
			224 =>
				array(
					'id'         => '1114070',
					'regency_id' => '1114',
					'name'       => 'KARANG BARU',
				),
			225 =>
				array(
					'id'         => '1114071',
					'regency_id' => '1114',
					'name'       => 'SEKERAK',
				),
			226 =>
				array(
					'id'         => '1114080',
					'regency_id' => '1114',
					'name'       => 'MANYAK PAYED',
				),
			227 =>
				array(
					'id'         => '1115010',
					'regency_id' => '1115',
					'name'       => 'DARUL MAKMUR',
				),
			228 =>
				array(
					'id'         => '1115011',
					'regency_id' => '1115',
					'name'       => 'TRIPA MAKMUR',
				),
			229 =>
				array(
					'id'         => '1115020',
					'regency_id' => '1115',
					'name'       => 'KUALA',
				),
			230 =>
				array(
					'id'         => '1115021',
					'regency_id' => '1115',
					'name'       => 'KUALA PESISIR',
				),
			231 =>
				array(
					'id'         => '1115022',
					'regency_id' => '1115',
					'name'       => 'TADU RAYA',
				),
			232 =>
				array(
					'id'         => '1115030',
					'regency_id' => '1115',
					'name'       => 'BEUTONG',
				),
			233 =>
				array(
					'id'         => '1115031',
					'regency_id' => '1115',
					'name'       => 'BEUTONG ATEUH BANGGALANG',
				),
			234 =>
				array(
					'id'         => '1115040',
					'regency_id' => '1115',
					'name'       => 'SEUNAGAN',
				),
			235 =>
				array(
					'id'         => '1115041',
					'regency_id' => '1115',
					'name'       => 'SUKA MAKMUE',
				),
			236 =>
				array(
					'id'         => '1115050',
					'regency_id' => '1115',
					'name'       => 'SEUNAGAN TIMUR',
				),
			237 =>
				array(
					'id'         => '1116010',
					'regency_id' => '1116',
					'name'       => 'TEUNOM',
				),
			238 =>
				array(
					'id'         => '1116011',
					'regency_id' => '1116',
					'name'       => 'PASIE RAYA',
				),
			239 =>
				array(
					'id'         => '1116020',
					'regency_id' => '1116',
					'name'       => 'PANGA',
				),
			240 =>
				array(
					'id'         => '1116030',
					'regency_id' => '1116',
					'name'       => 'KRUENG SABEE',
				),
			241 =>
				array(
					'id'         => '1116040',
					'regency_id' => '1116',
					'name'       => 'SETIA BAKTI',
				),
			242 =>
				array(
					'id'         => '1116050',
					'regency_id' => '1116',
					'name'       => 'SAMPOINIET',
				),
			243 =>
				array(
					'id'         => '1116051',
					'regency_id' => '1116',
					'name'       => 'DARUL HIKMAH',
				),
			244 =>
				array(
					'id'         => '1116060',
					'regency_id' => '1116',
					'name'       => 'JAYA',
				),
			245 =>
				array(
					'id'         => '1116061',
					'regency_id' => '1116',
					'name'       => 'INDRA JAYA',
				),
			246 =>
				array(
					'id'         => '1117010',
					'regency_id' => '1117',
					'name'       => 'TIMANG GAJAH',
				),
			247 =>
				array(
					'id'         => '1117011',
					'regency_id' => '1117',
					'name'       => 'GAJAH PUTIH',
				),
			248 =>
				array(
					'id'         => '1117020',
					'regency_id' => '1117',
					'name'       => 'PINTU RIME GAYO',
				),
			249 =>
				array(
					'id'         => '1117030',
					'regency_id' => '1117',
					'name'       => 'BUKIT',
				),
			250 =>
				array(
					'id'         => '1117040',
					'regency_id' => '1117',
					'name'       => 'WIH PESAM',
				),
			251 =>
				array(
					'id'         => '1117050',
					'regency_id' => '1117',
					'name'       => 'BANDAR',
				),
			252 =>
				array(
					'id'         => '1117051',
					'regency_id' => '1117',
					'name'       => 'BENER KELIPAH',
				),
			253 =>
				array(
					'id'         => '1117060',
					'regency_id' => '1117',
					'name'       => 'SYIAH UTAMA',
				),
			254 =>
				array(
					'id'         => '1117061',
					'regency_id' => '1117',
					'name'       => 'MESIDAH',
				),
			255 =>
				array(
					'id'         => '1117070',
					'regency_id' => '1117',
					'name'       => 'PERMATA',
				),
			256 =>
				array(
					'id'         => '1118010',
					'regency_id' => '1118',
					'name'       => 'MEUREUDU',
				),
			257 =>
				array(
					'id'         => '1118020',
					'regency_id' => '1118',
					'name'       => 'MEURAH DUA',
				),
			258 =>
				array(
					'id'         => '1118030',
					'regency_id' => '1118',
					'name'       => 'BANDAR DUA',
				),
			259 =>
				array(
					'id'         => '1118040',
					'regency_id' => '1118',
					'name'       => 'JANGKA BUYA',
				),
			260 =>
				array(
					'id'         => '1118050',
					'regency_id' => '1118',
					'name'       => 'ULIM',
				),
			261 =>
				array(
					'id'         => '1118060',
					'regency_id' => '1118',
					'name'       => 'TRIENGGADENG',
				),
			262 =>
				array(
					'id'         => '1118070',
					'regency_id' => '1118',
					'name'       => 'PANTERAJA',
				),
			263 =>
				array(
					'id'         => '1118080',
					'regency_id' => '1118',
					'name'       => 'BANDAR BARU',
				),
			264 =>
				array(
					'id'         => '1171010',
					'regency_id' => '1171',
					'name'       => 'MEURAXA',
				),
			265 =>
				array(
					'id'         => '1171011',
					'regency_id' => '1171',
					'name'       => 'JAYA BARU',
				),
			266 =>
				array(
					'id'         => '1171012',
					'regency_id' => '1171',
					'name'       => 'BANDA RAYA',
				),
			267 =>
				array(
					'id'         => '1171020',
					'regency_id' => '1171',
					'name'       => 'BAITURRAHMAN',
				),
			268 =>
				array(
					'id'         => '1171021',
					'regency_id' => '1171',
					'name'       => 'LUENG BATA',
				),
			269 =>
				array(
					'id'         => '1171030',
					'regency_id' => '1171',
					'name'       => 'KUTA ALAM',
				),
			270 =>
				array(
					'id'         => '1171031',
					'regency_id' => '1171',
					'name'       => 'KUTA RAJA',
				),
			271 =>
				array(
					'id'         => '1171040',
					'regency_id' => '1171',
					'name'       => 'SYIAH KUALA',
				),
			272 =>
				array(
					'id'         => '1171041',
					'regency_id' => '1171',
					'name'       => 'ULEE KARENG',
				),
			273 =>
				array(
					'id'         => '1172010',
					'regency_id' => '1172',
					'name'       => 'SUKAJAYA',
				),
			274 =>
				array(
					'id'         => '1172020',
					'regency_id' => '1172',
					'name'       => 'SUKAKARYA',
				),
			275 =>
				array(
					'id'         => '1173010',
					'regency_id' => '1173',
					'name'       => 'LANGSA TIMUR',
				),
			276 =>
				array(
					'id'         => '1173011',
					'regency_id' => '1173',
					'name'       => 'LANGSA LAMA',
				),
			277 =>
				array(
					'id'         => '1173020',
					'regency_id' => '1173',
					'name'       => 'LANGSA BARAT',
				),
			278 =>
				array(
					'id'         => '1173021',
					'regency_id' => '1173',
					'name'       => 'LANGSA BARO',
				),
			279 =>
				array(
					'id'         => '1173030',
					'regency_id' => '1173',
					'name'       => 'LANGSA KOTA',
				),
			280 =>
				array(
					'id'         => '1174010',
					'regency_id' => '1174',
					'name'       => 'BLANG MANGAT',
				),
			281 =>
				array(
					'id'         => '1174020',
					'regency_id' => '1174',
					'name'       => 'MUARA DUA',
				),
			282 =>
				array(
					'id'         => '1174021',
					'regency_id' => '1174',
					'name'       => 'MUARA SATU',
				),
			283 =>
				array(
					'id'         => '1174030',
					'regency_id' => '1174',
					'name'       => 'BANDA SAKTI',
				),
			284 =>
				array(
					'id'         => '1175010',
					'regency_id' => '1175',
					'name'       => 'SIMPANG KIRI',
				),
			285 =>
				array(
					'id'         => '1175020',
					'regency_id' => '1175',
					'name'       => 'PENANGGALAN',
				),
			286 =>
				array(
					'id'         => '1175030',
					'regency_id' => '1175',
					'name'       => 'RUNDENG',
				),
			287 =>
				array(
					'id'         => '1175040',
					'regency_id' => '1175',
					'name'       => 'SULTAN DAULAT',
				),
			288 =>
				array(
					'id'         => '1175050',
					'regency_id' => '1175',
					'name'       => 'LONGKIB',
				),
			289 =>
				array(
					'id'         => '1201060',
					'regency_id' => '1201',
					'name'       => 'IDANO GAWO',
				),
			290 =>
				array(
					'id'         => '1201061',
					'regency_id' => '1201',
					'name'       => 'BAWOLATO',
				),
			291 =>
				array(
					'id'         => '1201062',
					'regency_id' => '1201',
					'name'       => 'ULUGAWO',
				),
			292 =>
				array(
					'id'         => '1201070',
					'regency_id' => '1201',
					'name'       => 'GIDO',
				),
			293 =>
				array(
					'id'         => '1201071',
					'regency_id' => '1201',
					'name'       => 'SOGAEADU',
				),
			294 =>
				array(
					'id'         => '1201081',
					'regency_id' => '1201',
					'name'       => 'MA U',
				),
			295 =>
				array(
					'id'         => '1201082',
					'regency_id' => '1201',
					'name'       => 'SOMOLO - MOLO',
				),
			296 =>
				array(
					'id'         => '1201130',
					'regency_id' => '1201',
					'name'       => 'HILIDUHO',
				),
			297 =>
				array(
					'id'         => '1201131',
					'regency_id' => '1201',
					'name'       => 'HILI SERANGKAI',
				),
			298 =>
				array(
					'id'         => '1201132',
					'regency_id' => '1201',
					'name'       => 'BOTOMUZOI',
				),
			299 =>
				array(
					'id'         => '1202010',
					'regency_id' => '1202',
					'name'       => 'BATAHAN',
				),
			300 =>
				array(
					'id'         => '1202011',
					'regency_id' => '1202',
					'name'       => 'SINUNUKAN',
				),
			301 =>
				array(
					'id'         => '1202020',
					'regency_id' => '1202',
					'name'       => 'BATANG NATAL',
				),
			302 =>
				array(
					'id'         => '1202021',
					'regency_id' => '1202',
					'name'       => 'LINGGA BAYU',
				),
			303 =>
				array(
					'id'         => '1202022',
					'regency_id' => '1202',
					'name'       => 'RANTO BAEK',
				),
			304 =>
				array(
					'id'         => '1202030',
					'regency_id' => '1202',
					'name'       => 'KOTANOPAN',
				),
			305 =>
				array(
					'id'         => '1202031',
					'regency_id' => '1202',
					'name'       => 'ULU PUNGKUT',
				),
			306 =>
				array(
					'id'         => '1202032',
					'regency_id' => '1202',
					'name'       => 'TAMBANGAN',
				),
			307 =>
				array(
					'id'         => '1202033',
					'regency_id' => '1202',
					'name'       => 'LEMBAH SORIK MARAPI',
				),
			308 =>
				array(
					'id'         => '1202034',
					'regency_id' => '1202',
					'name'       => 'PUNCAK SORIK MARAPI',
				),
			309 =>
				array(
					'id'         => '1202040',
					'regency_id' => '1202',
					'name'       => 'MUARA SIPONGI',
				),
			310 =>
				array(
					'id'         => '1202041',
					'regency_id' => '1202',
					'name'       => 'PAKANTAN',
				),
			311 =>
				array(
					'id'         => '1202050',
					'regency_id' => '1202',
					'name'       => 'PANYABUNGAN',
				),
			312 =>
				array(
					'id'         => '1202051',
					'regency_id' => '1202',
					'name'       => 'PANYABUNGAN SELATAN',
				),
			313 =>
				array(
					'id'         => '1202052',
					'regency_id' => '1202',
					'name'       => 'PANYABUNGAN BARAT',
				),
			314 =>
				array(
					'id'         => '1202053',
					'regency_id' => '1202',
					'name'       => 'PANYABUNGAN UTARA',
				),
			315 =>
				array(
					'id'         => '1202054',
					'regency_id' => '1202',
					'name'       => 'PANYABUNGAN TIMUR',
				),
			316 =>
				array(
					'id'         => '1202055',
					'regency_id' => '1202',
					'name'       => 'HUTA BARGOT',
				),
			317 =>
				array(
					'id'         => '1202060',
					'regency_id' => '1202',
					'name'       => 'NATAL',
				),
			318 =>
				array(
					'id'         => '1202070',
					'regency_id' => '1202',
					'name'       => 'MUARA BATANG GADIS',
				),
			319 =>
				array(
					'id'         => '1202080',
					'regency_id' => '1202',
					'name'       => 'SIABU',
				),
			320 =>
				array(
					'id'         => '1202081',
					'regency_id' => '1202',
					'name'       => 'BUKIT MALINTANG',
				),
			321 =>
				array(
					'id'         => '1202082',
					'regency_id' => '1202',
					'name'       => 'NAGA JUANG',
				),
			322 =>
				array(
					'id'         => '1203010',
					'regency_id' => '1203',
					'name'       => 'BATANG ANGKOLA',
				),
			323 =>
				array(
					'id'         => '1203011',
					'regency_id' => '1203',
					'name'       => 'SAYUR MATINGGI',
				),
			324 =>
				array(
					'id'         => '1203012',
					'regency_id' => '1203',
					'name'       => 'TANO TOMBANGAN ANGKOLA',
				),
			325 =>
				array(
					'id'         => '1203070',
					'regency_id' => '1203',
					'name'       => 'ANGKOLA TIMUR',
				),
			326 =>
				array(
					'id'         => '1203080',
					'regency_id' => '1203',
					'name'       => 'ANGKOLA SELATAN',
				),
			327 =>
				array(
					'id'         => '1203090',
					'regency_id' => '1203',
					'name'       => 'ANGKOLA  BARAT',
				),
			328 =>
				array(
					'id'         => '1203091',
					'regency_id' => '1203',
					'name'       => 'ANGKOLA SANGKUNUR',
				),
			329 =>
				array(
					'id'         => '1203100',
					'regency_id' => '1203',
					'name'       => 'BATANG TORU',
				),
			330 =>
				array(
					'id'         => '1203101',
					'regency_id' => '1203',
					'name'       => 'MARANCAR',
				),
			331 =>
				array(
					'id'         => '1203102',
					'regency_id' => '1203',
					'name'       => 'MUARA BATANG TORU',
				),
			332 =>
				array(
					'id'         => '1203110',
					'regency_id' => '1203',
					'name'       => 'SIPIROK',
				),
			333 =>
				array(
					'id'         => '1203120',
					'regency_id' => '1203',
					'name'       => 'ARSE',
				),
			334 =>
				array(
					'id'         => '1203160',
					'regency_id' => '1203',
					'name'       => 'SAIPAR DOLOK HOLE',
				),
			335 =>
				array(
					'id'         => '1203161',
					'regency_id' => '1203',
					'name'       => 'AEK BILAH',
				),
			336 =>
				array(
					'id'         => '1204010',
					'regency_id' => '1204',
					'name'       => 'PINANG SORI',
				),
			337 =>
				array(
					'id'         => '1204011',
					'regency_id' => '1204',
					'name'       => 'BADIRI',
				),
			338 =>
				array(
					'id'         => '1204020',
					'regency_id' => '1204',
					'name'       => 'SIBABANGUN',
				),
			339 =>
				array(
					'id'         => '1204021',
					'regency_id' => '1204',
					'name'       => 'LUMUT',
				),
			340 =>
				array(
					'id'         => '1204022',
					'regency_id' => '1204',
					'name'       => 'SUKABANGUN',
				),
			341 =>
				array(
					'id'         => '1204030',
					'regency_id' => '1204',
					'name'       => 'PANDAN',
				),
			342 =>
				array(
					'id'         => '1204031',
					'regency_id' => '1204',
					'name'       => 'TUKKA',
				),
			343 =>
				array(
					'id'         => '1204032',
					'regency_id' => '1204',
					'name'       => 'SARUDIK',
				),
			344 =>
				array(
					'id'         => '1204040',
					'regency_id' => '1204',
					'name'       => 'TAPIAN NAULI',
				),
			345 =>
				array(
					'id'         => '1204041',
					'regency_id' => '1204',
					'name'       => 'SITAHUIS',
				),
			346 =>
				array(
					'id'         => '1204050',
					'regency_id' => '1204',
					'name'       => 'KOLANG',
				),
			347 =>
				array(
					'id'         => '1204060',
					'regency_id' => '1204',
					'name'       => 'SORKAM',
				),
			348 =>
				array(
					'id'         => '1204061',
					'regency_id' => '1204',
					'name'       => 'SORKAM BARAT',
				),
			349 =>
				array(
					'id'         => '1204062',
					'regency_id' => '1204',
					'name'       => 'PASARIBU TOBING',
				),
			350 =>
				array(
					'id'         => '1204070',
					'regency_id' => '1204',
					'name'       => 'BARUS',
				),
			351 =>
				array(
					'id'         => '1204071',
					'regency_id' => '1204',
					'name'       => 'SOSOR GADONG',
				),
			352 =>
				array(
					'id'         => '1204072',
					'regency_id' => '1204',
					'name'       => 'ANDAM DEWI',
				),
			353 =>
				array(
					'id'         => '1204073',
					'regency_id' => '1204',
					'name'       => 'BARUS UTARA',
				),
			354 =>
				array(
					'id'         => '1204080',
					'regency_id' => '1204',
					'name'       => 'MANDUAMAS',
				),
			355 =>
				array(
					'id'         => '1204081',
					'regency_id' => '1204',
					'name'       => 'SIRANDORUNG',
				),
			356 =>
				array(
					'id'         => '1205030',
					'regency_id' => '1205',
					'name'       => 'PARMONANGAN',
				),
			357 =>
				array(
					'id'         => '1205040',
					'regency_id' => '1205',
					'name'       => 'ADIANKOTING',
				),
			358 =>
				array(
					'id'         => '1205050',
					'regency_id' => '1205',
					'name'       => 'SIPOHOLON',
				),
			359 =>
				array(
					'id'         => '1205060',
					'regency_id' => '1205',
					'name'       => 'TARUTUNG',
				),
			360 =>
				array(
					'id'         => '1205061',
					'regency_id' => '1205',
					'name'       => 'SIATAS BARITA',
				),
			361 =>
				array(
					'id'         => '1205070',
					'regency_id' => '1205',
					'name'       => 'PAHAE JULU',
				),
			362 =>
				array(
					'id'         => '1205080',
					'regency_id' => '1205',
					'name'       => 'PAHAE JAE',
				),
			363 =>
				array(
					'id'         => '1205081',
					'regency_id' => '1205',
					'name'       => 'PURBATUA',
				),
			364 =>
				array(
					'id'         => '1205082',
					'regency_id' => '1205',
					'name'       => 'SIMANGUMBAN',
				),
			365 =>
				array(
					'id'         => '1205090',
					'regency_id' => '1205',
					'name'       => 'PANGARIBUAN',
				),
			366 =>
				array(
					'id'         => '1205100',
					'regency_id' => '1205',
					'name'       => 'GAROGA',
				),
			367 =>
				array(
					'id'         => '1205110',
					'regency_id' => '1205',
					'name'       => 'SIPAHUTAR',
				),
			368 =>
				array(
					'id'         => '1205120',
					'regency_id' => '1205',
					'name'       => 'SIBORONGBORONG',
				),
			369 =>
				array(
					'id'         => '1205130',
					'regency_id' => '1205',
					'name'       => 'PAGARAN',
				),
			370 =>
				array(
					'id'         => '1205180',
					'regency_id' => '1205',
					'name'       => 'MUARA',
				),
			371 =>
				array(
					'id'         => '1206030',
					'regency_id' => '1206',
					'name'       => 'BALIGE',
				),
			372 =>
				array(
					'id'         => '1206031',
					'regency_id' => '1206',
					'name'       => 'TAMPAHAN',
				),
			373 =>
				array(
					'id'         => '1206040',
					'regency_id' => '1206',
					'name'       => 'LAGUBOTI',
				),
			374 =>
				array(
					'id'         => '1206050',
					'regency_id' => '1206',
					'name'       => 'HABINSARAN',
				),
			375 =>
				array(
					'id'         => '1206051',
					'regency_id' => '1206',
					'name'       => 'BORBOR',
				),
			376 =>
				array(
					'id'         => '1206052',
					'regency_id' => '1206',
					'name'       => 'NASSAU',
				),
			377 =>
				array(
					'id'         => '1206060',
					'regency_id' => '1206',
					'name'       => 'SILAEN',
				),
			378 =>
				array(
					'id'         => '1206061',
					'regency_id' => '1206',
					'name'       => 'SIGUMPAR',
				),
			379 =>
				array(
					'id'         => '1206070',
					'regency_id' => '1206',
					'name'       => 'PORSEA',
				),
			380 =>
				array(
					'id'         => '1206071',
					'regency_id' => '1206',
					'name'       => 'PINTU POHAN MERANTI',
				),
			381 =>
				array(
					'id'         => '1206072',
					'regency_id' => '1206',
					'name'       => 'SIANTAR NARUMONDA',
				),
			382 =>
				array(
					'id'         => '1206073',
					'regency_id' => '1206',
					'name'       => 'PARMAKSIAN',
				),
			383 =>
				array(
					'id'         => '1206080',
					'regency_id' => '1206',
					'name'       => 'LUMBAN JULU',
				),
			384 =>
				array(
					'id'         => '1206081',
					'regency_id' => '1206',
					'name'       => 'ULUAN',
				),
			385 =>
				array(
					'id'         => '1206082',
					'regency_id' => '1206',
					'name'       => 'AJIBATA',
				),
			386 =>
				array(
					'id'         => '1206083',
					'regency_id' => '1206',
					'name'       => 'BONATUA LUNASI',
				),
			387 =>
				array(
					'id'         => '1207050',
					'regency_id' => '1207',
					'name'       => 'BILAH HULU',
				),
			388 =>
				array(
					'id'         => '1207070',
					'regency_id' => '1207',
					'name'       => 'PANGKATAN',
				),
			389 =>
				array(
					'id'         => '1207080',
					'regency_id' => '1207',
					'name'       => 'BILAH BARAT',
				),
			390 =>
				array(
					'id'         => '1207130',
					'regency_id' => '1207',
					'name'       => 'BILAH HILIR',
				),
			391 =>
				array(
					'id'         => '1207140',
					'regency_id' => '1207',
					'name'       => 'PANAI HULU',
				),
			392 =>
				array(
					'id'         => '1207150',
					'regency_id' => '1207',
					'name'       => 'PANAI TENGAH',
				),
			393 =>
				array(
					'id'         => '1207160',
					'regency_id' => '1207',
					'name'       => 'PANAI HILIR',
				),
			394 =>
				array(
					'id'         => '1207210',
					'regency_id' => '1207',
					'name'       => 'RANTAU SELATAN',
				),
			395 =>
				array(
					'id'         => '1207220',
					'regency_id' => '1207',
					'name'       => 'RANTAU UTARA',
				),
			396 =>
				array(
					'id'         => '1208010',
					'regency_id' => '1208',
					'name'       => 'BANDAR PASIR MANDOGE',
				),
			397 =>
				array(
					'id'         => '1208020',
					'regency_id' => '1208',
					'name'       => 'BANDAR PULAU',
				),
			398 =>
				array(
					'id'         => '1208021',
					'regency_id' => '1208',
					'name'       => 'AEK SONGSONGAN',
				),
			399 =>
				array(
					'id'         => '1208022',
					'regency_id' => '1208',
					'name'       => 'RAHUNING',
				),
			400 =>
				array(
					'id'         => '1208030',
					'regency_id' => '1208',
					'name'       => 'PULAU RAKYAT',
				),
			401 =>
				array(
					'id'         => '1208031',
					'regency_id' => '1208',
					'name'       => 'AEK KUASAN',
				),
			402 =>
				array(
					'id'         => '1208032',
					'regency_id' => '1208',
					'name'       => 'AEK LEDONG',
				),
			403 =>
				array(
					'id'         => '1208040',
					'regency_id' => '1208',
					'name'       => 'SEI KEPAYANG',
				),
			404 =>
				array(
					'id'         => '1208041',
					'regency_id' => '1208',
					'name'       => 'SEI KEPAYANG BARAT',
				),
			405 =>
				array(
					'id'         => '1208042',
					'regency_id' => '1208',
					'name'       => 'SEI KEPAYANG TIMUR',
				),
			406 =>
				array(
					'id'         => '1208050',
					'regency_id' => '1208',
					'name'       => 'TANJUNG BALAI',
				),
			407 =>
				array(
					'id'         => '1208060',
					'regency_id' => '1208',
					'name'       => 'SIMPANG EMPAT',
				),
			408 =>
				array(
					'id'         => '1208061',
					'regency_id' => '1208',
					'name'       => 'TELUK DALAM',
				),
			409 =>
				array(
					'id'         => '1208070',
					'regency_id' => '1208',
					'name'       => 'AIR BATU',
				),
			410 =>
				array(
					'id'         => '1208071',
					'regency_id' => '1208',
					'name'       => 'SEI DADAP',
				),
			411 =>
				array(
					'id'         => '1208080',
					'regency_id' => '1208',
					'name'       => 'BUNTU PANE',
				),
			412 =>
				array(
					'id'         => '1208081',
					'regency_id' => '1208',
					'name'       => 'TINGGI RAJA',
				),
			413 =>
				array(
					'id'         => '1208082',
					'regency_id' => '1208',
					'name'       => 'SETIA JANJI',
				),
			414 =>
				array(
					'id'         => '1208090',
					'regency_id' => '1208',
					'name'       => 'MERANTI',
				),
			415 =>
				array(
					'id'         => '1208091',
					'regency_id' => '1208',
					'name'       => 'PULO BANDRING',
				),
			416 =>
				array(
					'id'         => '1208092',
					'regency_id' => '1208',
					'name'       => 'RAWANG PANCA ARGA',
				),
			417 =>
				array(
					'id'         => '1208100',
					'regency_id' => '1208',
					'name'       => 'AIR JOMAN',
				),
			418 =>
				array(
					'id'         => '1208101',
					'regency_id' => '1208',
					'name'       => 'SILAU LAUT',
				),
			419 =>
				array(
					'id'         => '1208160',
					'regency_id' => '1208',
					'name'       => 'KISARAN BARAT',
				),
			420 =>
				array(
					'id'         => '1208170',
					'regency_id' => '1208',
					'name'       => 'KISARAN TIMUR',
				),
			421 =>
				array(
					'id'         => '1209010',
					'regency_id' => '1209',
					'name'       => 'SILIMAKUTA',
				),
			422 =>
				array(
					'id'         => '1209011',
					'regency_id' => '1209',
					'name'       => 'PEMATANG SILIMAHUTA',
				),
			423 =>
				array(
					'id'         => '1209020',
					'regency_id' => '1209',
					'name'       => 'PURBA',
				),
			424 =>
				array(
					'id'         => '1209021',
					'regency_id' => '1209',
					'name'       => 'HARANGGAOL HORISON',
				),
			425 =>
				array(
					'id'         => '1209040',
					'regency_id' => '1209',
					'name'       => 'SIDAMANIK',
				),
			426 =>
				array(
					'id'         => '1209041',
					'regency_id' => '1209',
					'name'       => 'PEMATANG SIDAMANIK',
				),
			427 =>
				array(
					'id'         => '1209050',
					'regency_id' => '1209',
					'name'       => 'GIRSANG SIPANGAN BOLON',
				),
			428 =>
				array(
					'id'         => '1209060',
					'regency_id' => '1209',
					'name'       => 'TANAH JAWA',
				),
			429 =>
				array(
					'id'         => '1209061',
					'regency_id' => '1209',
					'name'       => 'HATONDUHAN',
				),
			430 =>
				array(
					'id'         => '1209070',
					'regency_id' => '1209',
					'name'       => 'DOLOK PANRIBUAN',
				),
			431 =>
				array(
					'id'         => '1209080',
					'regency_id' => '1209',
					'name'       => 'JORLANG HATARAN',
				),
			432 =>
				array(
					'id'         => '1209090',
					'regency_id' => '1209',
					'name'       => 'PANEI',
				),
			433 =>
				array(
					'id'         => '1209091',
					'regency_id' => '1209',
					'name'       => 'PANOMBEAN PANEI',
				),
			434 =>
				array(
					'id'         => '1209100',
					'regency_id' => '1209',
					'name'       => 'RAYA',
				),
			435 =>
				array(
					'id'         => '1209101',
					'regency_id' => '1209',
					'name'       => 'DOLOG MASAGAL',
				),
			436 =>
				array(
					'id'         => '1209110',
					'regency_id' => '1209',
					'name'       => 'DOLOK SILAU',
				),
			437 =>
				array(
					'id'         => '1209120',
					'regency_id' => '1209',
					'name'       => 'SILAU KAHEAN',
				),
			438 =>
				array(
					'id'         => '1209130',
					'regency_id' => '1209',
					'name'       => 'RAYA KAHEAN',
				),
			439 =>
				array(
					'id'         => '1209140',
					'regency_id' => '1209',
					'name'       => 'TAPIAN DOLOK',
				),
			440 =>
				array(
					'id'         => '1209150',
					'regency_id' => '1209',
					'name'       => 'DOLOK BATU NANGGAR',
				),
			441 =>
				array(
					'id'         => '1209160',
					'regency_id' => '1209',
					'name'       => 'SIANTAR',
				),
			442 =>
				array(
					'id'         => '1209161',
					'regency_id' => '1209',
					'name'       => 'GUNUNG MALELA',
				),
			443 =>
				array(
					'id'         => '1209162',
					'regency_id' => '1209',
					'name'       => 'GUNUNG MALIGAS',
				),
			444 =>
				array(
					'id'         => '1209170',
					'regency_id' => '1209',
					'name'       => 'HUTABAYU RAJA',
				),
			445 =>
				array(
					'id'         => '1209171',
					'regency_id' => '1209',
					'name'       => 'JAWA MARAJA BAH JAMBI',
				),
			446 =>
				array(
					'id'         => '1209180',
					'regency_id' => '1209',
					'name'       => 'PEMATANG BANDAR',
				),
			447 =>
				array(
					'id'         => '1209181',
					'regency_id' => '1209',
					'name'       => 'BANDAR HULUAN',
				),
			448 =>
				array(
					'id'         => '1209190',
					'regency_id' => '1209',
					'name'       => 'BANDAR',
				),
			449 =>
				array(
					'id'         => '1209191',
					'regency_id' => '1209',
					'name'       => 'BANDAR MASILAM',
				),
			450 =>
				array(
					'id'         => '1209200',
					'regency_id' => '1209',
					'name'       => 'BOSAR MALIGAS',
				),
			451 =>
				array(
					'id'         => '1209210',
					'regency_id' => '1209',
					'name'       => 'UJUNG PADANG',
				),
			452 =>
				array(
					'id'         => '1210030',
					'regency_id' => '1210',
					'name'       => 'SIDIKALANG',
				),
			453 =>
				array(
					'id'         => '1210031',
					'regency_id' => '1210',
					'name'       => 'BERAMPU',
				),
			454 =>
				array(
					'id'         => '1210032',
					'regency_id' => '1210',
					'name'       => 'SITINJO',
				),
			455 =>
				array(
					'id'         => '1210040',
					'regency_id' => '1210',
					'name'       => 'PARBULUAN',
				),
			456 =>
				array(
					'id'         => '1210050',
					'regency_id' => '1210',
					'name'       => 'SUMBUL',
				),
			457 =>
				array(
					'id'         => '1210051',
					'regency_id' => '1210',
					'name'       => 'SILAHISABUNGAN',
				),
			458 =>
				array(
					'id'         => '1210060',
					'regency_id' => '1210',
					'name'       => 'SILIMA PUNGGA-PUNGGA',
				),
			459 =>
				array(
					'id'         => '1210061',
					'regency_id' => '1210',
					'name'       => 'LAE PARIRA',
				),
			460 =>
				array(
					'id'         => '1210070',
					'regency_id' => '1210',
					'name'       => 'SIEMPAT NEMPU',
				),
			461 =>
				array(
					'id'         => '1210080',
					'regency_id' => '1210',
					'name'       => 'SIEMPAT NEMPU HULU',
				),
			462 =>
				array(
					'id'         => '1210090',
					'regency_id' => '1210',
					'name'       => 'SIEMPAT NEMPU HILIR',
				),
			463 =>
				array(
					'id'         => '1210100',
					'regency_id' => '1210',
					'name'       => 'TIGA LINGGA',
				),
			464 =>
				array(
					'id'         => '1210101',
					'regency_id' => '1210',
					'name'       => 'GUNUNG SITEMBER',
				),
			465 =>
				array(
					'id'         => '1210110',
					'regency_id' => '1210',
					'name'       => 'PEGAGAN HILIR',
				),
			466 =>
				array(
					'id'         => '1210120',
					'regency_id' => '1210',
					'name'       => 'TANAH PINEM',
				),
			467 =>
				array(
					'id'         => '1211010',
					'regency_id' => '1211',
					'name'       => 'MARDINGDING',
				),
			468 =>
				array(
					'id'         => '1211020',
					'regency_id' => '1211',
					'name'       => 'LAUBALENG',
				),
			469 =>
				array(
					'id'         => '1211030',
					'regency_id' => '1211',
					'name'       => 'TIGA BINANGA',
				),
			470 =>
				array(
					'id'         => '1211040',
					'regency_id' => '1211',
					'name'       => 'JUHAR',
				),
			471 =>
				array(
					'id'         => '1211050',
					'regency_id' => '1211',
					'name'       => 'MUNTE',
				),
			472 =>
				array(
					'id'         => '1211060',
					'regency_id' => '1211',
					'name'       => 'KUTA BULUH',
				),
			473 =>
				array(
					'id'         => '1211070',
					'regency_id' => '1211',
					'name'       => 'PAYUNG',
				),
			474 =>
				array(
					'id'         => '1211071',
					'regency_id' => '1211',
					'name'       => 'TIGANDERKET',
				),
			475 =>
				array(
					'id'         => '1211080',
					'regency_id' => '1211',
					'name'       => 'SIMPANG EMPAT',
				),
			476 =>
				array(
					'id'         => '1211081',
					'regency_id' => '1211',
					'name'       => 'NAMAN TERAN',
				),
			477 =>
				array(
					'id'         => '1211082',
					'regency_id' => '1211',
					'name'       => 'MERDEKA',
				),
			478 =>
				array(
					'id'         => '1211090',
					'regency_id' => '1211',
					'name'       => 'KABANJAHE',
				),
			479 =>
				array(
					'id'         => '1211100',
					'regency_id' => '1211',
					'name'       => 'BERASTAGI',
				),
			480 =>
				array(
					'id'         => '1211110',
					'regency_id' => '1211',
					'name'       => 'TIGAPANAH',
				),
			481 =>
				array(
					'id'         => '1211111',
					'regency_id' => '1211',
					'name'       => 'DOLAT RAYAT',
				),
			482 =>
				array(
					'id'         => '1211120',
					'regency_id' => '1211',
					'name'       => 'MEREK',
				),
			483 =>
				array(
					'id'         => '1211130',
					'regency_id' => '1211',
					'name'       => 'BARUSJAHE',
				),
			484 =>
				array(
					'id'         => '1212010',
					'regency_id' => '1212',
					'name'       => 'GUNUNG MERIAH',
				),
			485 =>
				array(
					'id'         => '1212020',
					'regency_id' => '1212',
					'name'       => 'SINEMBAH TANJUNG MUDA HULU',
				),
			486 =>
				array(
					'id'         => '1212030',
					'regency_id' => '1212',
					'name'       => 'SIBOLANGIT',
				),
			487 =>
				array(
					'id'         => '1212040',
					'regency_id' => '1212',
					'name'       => 'KUTALIMBARU',
				),
			488 =>
				array(
					'id'         => '1212050',
					'regency_id' => '1212',
					'name'       => 'PANCUR BATU',
				),
			489 =>
				array(
					'id'         => '1212060',
					'regency_id' => '1212',
					'name'       => 'NAMO RAMBE',
				),
			490 =>
				array(
					'id'         => '1212070',
					'regency_id' => '1212',
					'name'       => 'BIRU-BIRU',
				),
			491 =>
				array(
					'id'         => '1212080',
					'regency_id' => '1212',
					'name'       => 'SINEMBAH TANJUNG MUDA HILIR',
				),
			492 =>
				array(
					'id'         => '1212090',
					'regency_id' => '1212',
					'name'       => 'BANGUN PURBA',
				),
			493 =>
				array(
					'id'         => '1212190',
					'regency_id' => '1212',
					'name'       => 'GALANG',
				),
			494 =>
				array(
					'id'         => '1212200',
					'regency_id' => '1212',
					'name'       => 'TANJUNG MORAWA',
				),
			495 =>
				array(
					'id'         => '1212210',
					'regency_id' => '1212',
					'name'       => 'PATUMBAK',
				),
			496 =>
				array(
					'id'         => '1212220',
					'regency_id' => '1212',
					'name'       => 'DELI TUA',
				),
			497 =>
				array(
					'id'         => '1212230',
					'regency_id' => '1212',
					'name'       => 'SUNGGAL',
				),
			498 =>
				array(
					'id'         => '1212240',
					'regency_id' => '1212',
					'name'       => 'HAMPARAN PERAK',
				),
			499 =>
				array(
					'id'         => '1212250',
					'regency_id' => '1212',
					'name'       => 'LABUHAN DELI',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '1212260',
					'regency_id' => '1212',
					'name'       => 'PERCUT SEI TUAN',
				),
			1   =>
				array(
					'id'         => '1212270',
					'regency_id' => '1212',
					'name'       => 'BATANG KUIS',
				),
			2   =>
				array(
					'id'         => '1212280',
					'regency_id' => '1212',
					'name'       => 'PANTAI LABU',
				),
			3   =>
				array(
					'id'         => '1212290',
					'regency_id' => '1212',
					'name'       => 'BERINGIN',
				),
			4   =>
				array(
					'id'         => '1212300',
					'regency_id' => '1212',
					'name'       => 'LUBUK PAKAM',
				),
			5   =>
				array(
					'id'         => '1212310',
					'regency_id' => '1212',
					'name'       => 'PAGAR MERBAU',
				),
			6   =>
				array(
					'id'         => '1213010',
					'regency_id' => '1213',
					'name'       => 'BOHOROK',
				),
			7   =>
				array(
					'id'         => '1213011',
					'regency_id' => '1213',
					'name'       => 'SIRAPIT',
				),
			8   =>
				array(
					'id'         => '1213020',
					'regency_id' => '1213',
					'name'       => 'SALAPIAN',
				),
			9   =>
				array(
					'id'         => '1213021',
					'regency_id' => '1213',
					'name'       => 'KUTAMBARU',
				),
			10  =>
				array(
					'id'         => '1213030',
					'regency_id' => '1213',
					'name'       => 'SEI BINGAI',
				),
			11  =>
				array(
					'id'         => '1213040',
					'regency_id' => '1213',
					'name'       => 'KUALA',
				),
			12  =>
				array(
					'id'         => '1213050',
					'regency_id' => '1213',
					'name'       => 'SELESAI',
				),
			13  =>
				array(
					'id'         => '1213060',
					'regency_id' => '1213',
					'name'       => 'BINJAI',
				),
			14  =>
				array(
					'id'         => '1213070',
					'regency_id' => '1213',
					'name'       => 'STABAT',
				),
			15  =>
				array(
					'id'         => '1213080',
					'regency_id' => '1213',
					'name'       => 'WAMPU',
				),
			16  =>
				array(
					'id'         => '1213090',
					'regency_id' => '1213',
					'name'       => 'BATANG SERANGAN',
				),
			17  =>
				array(
					'id'         => '1213100',
					'regency_id' => '1213',
					'name'       => 'SAWIT SEBERANG',
				),
			18  =>
				array(
					'id'         => '1213110',
					'regency_id' => '1213',
					'name'       => 'PADANG TUALANG',
				),
			19  =>
				array(
					'id'         => '1213120',
					'regency_id' => '1213',
					'name'       => 'HINAI',
				),
			20  =>
				array(
					'id'         => '1213130',
					'regency_id' => '1213',
					'name'       => 'SECANGGANG',
				),
			21  =>
				array(
					'id'         => '1213140',
					'regency_id' => '1213',
					'name'       => 'TANJUNG PURA',
				),
			22  =>
				array(
					'id'         => '1213150',
					'regency_id' => '1213',
					'name'       => 'GEBANG',
				),
			23  =>
				array(
					'id'         => '1213160',
					'regency_id' => '1213',
					'name'       => 'BABALAN',
				),
			24  =>
				array(
					'id'         => '1213170',
					'regency_id' => '1213',
					'name'       => 'SEI LEPAN',
				),
			25  =>
				array(
					'id'         => '1213180',
					'regency_id' => '1213',
					'name'       => 'BRANDAN BARAT',
				),
			26  =>
				array(
					'id'         => '1213190',
					'regency_id' => '1213',
					'name'       => 'BESITANG',
				),
			27  =>
				array(
					'id'         => '1213200',
					'regency_id' => '1213',
					'name'       => 'PANGKALAN SUSU',
				),
			28  =>
				array(
					'id'         => '1213201',
					'regency_id' => '1213',
					'name'       => 'PEMATANG JAYA',
				),
			29  =>
				array(
					'id'         => '1214010',
					'regency_id' => '1214',
					'name'       => 'HIBALA',
				),
			30  =>
				array(
					'id'         => '1214011',
					'regency_id' => '1214',
					'name'       => 'TANAH MASA',
				),
			31  =>
				array(
					'id'         => '1214020',
					'regency_id' => '1214',
					'name'       => 'PULAU-PULAU BATU',
				),
			32  =>
				array(
					'id'         => '1214021',
					'regency_id' => '1214',
					'name'       => 'PULAU-PULAU BATU TIMUR',
				),
			33  =>
				array(
					'id'         => '1214022',
					'regency_id' => '1214',
					'name'       => 'SIMUK',
				),
			34  =>
				array(
					'id'         => '1214023',
					'regency_id' => '1214',
					'name'       => 'PULAU-PULAU BATU BARAT',
				),
			35  =>
				array(
					'id'         => '1214024',
					'regency_id' => '1214',
					'name'       => 'PULAU-PULAU BATU UTARA',
				),
			36  =>
				array(
					'id'         => '1214030',
					'regency_id' => '1214',
					'name'       => 'TELUK DALAM',
				),
			37  =>
				array(
					'id'         => '1214031',
					'regency_id' => '1214',
					'name'       => 'FANAYAMA',
				),
			38  =>
				array(
					'id'         => '1214032',
					'regency_id' => '1214',
					'name'       => 'TOMA',
				),
			39  =>
				array(
					'id'         => '1214033',
					'regency_id' => '1214',
					'name'       => 'MANIAMOLO',
				),
			40  =>
				array(
					'id'         => '1214034',
					'regency_id' => '1214',
					'name'       => 'MAZINO',
				),
			41  =>
				array(
					'id'         => '1214035',
					'regency_id' => '1214',
					'name'       => 'LUAHAGUNDRE MANIAMOLO',
				),
			42  =>
				array(
					'id'         => '1214036',
					'regency_id' => '1214',
					'name'       => 'ONOLALU',
				),
			43  =>
				array(
					'id'         => '1214040',
					'regency_id' => '1214',
					'name'       => 'AMANDRAYA',
				),
			44  =>
				array(
					'id'         => '1214041',
					'regency_id' => '1214',
					'name'       => 'ARAMO',
				),
			45  =>
				array(
					'id'         => '1214042',
					'regency_id' => '1214',
					'name'       => 'ULUSUSUA',
				),
			46  =>
				array(
					'id'         => '1214050',
					'regency_id' => '1214',
					'name'       => 'LAHUSA',
				),
			47  =>
				array(
					'id'         => '1214051',
					'regency_id' => '1214',
					'name'       => 'SIDUAORI',
				),
			48  =>
				array(
					'id'         => '1214052',
					'regency_id' => '1214',
					'name'       => 'SOMAMBAWA',
				),
			49  =>
				array(
					'id'         => '1214060',
					'regency_id' => '1214',
					'name'       => 'GOMO',
				),
			50  =>
				array(
					'id'         => '1214061',
					'regency_id' => '1214',
					'name'       => 'SUSUA',
				),
			51  =>
				array(
					'id'         => '1214062',
					'regency_id' => '1214',
					'name'       => 'MAZO',
				),
			52  =>
				array(
					'id'         => '1214063',
					'regency_id' => '1214',
					'name'       => 'UMBUNASI',
				),
			53  =>
				array(
					'id'         => '1214064',
					'regency_id' => '1214',
					'name'       => 'IDANOTAE',
				),
			54  =>
				array(
					'id'         => '1214065',
					'regency_id' => '1214',
					'name'       => 'ULUIDANOTAE',
				),
			55  =>
				array(
					'id'         => '1214066',
					'regency_id' => '1214',
					'name'       => 'BORONADU',
				),
			56  =>
				array(
					'id'         => '1214070',
					'regency_id' => '1214',
					'name'       => 'LOLOMATUA',
				),
			57  =>
				array(
					'id'         => '1214071',
					'regency_id' => '1214',
					'name'       => 'ULUNOYO',
				),
			58  =>
				array(
					'id'         => '1214072',
					'regency_id' => '1214',
					'name'       => 'HURUNA',
				),
			59  =>
				array(
					'id'         => '1214080',
					'regency_id' => '1214',
					'name'       => 'LOLOWA\'U',
				),
			60  =>
				array(
					'id'         => '1214081',
					'regency_id' => '1214',
					'name'       => 'HILIMEGAI',
				),
			61  =>
				array(
					'id'         => '1214082',
					'regency_id' => '1214',
					'name'       => 'OOU',
				),
			62  =>
				array(
					'id'         => '1214083',
					'regency_id' => '1214',
					'name'       => 'ONOHAZUMBA',
				),
			63  =>
				array(
					'id'         => '1214084',
					'regency_id' => '1214',
					'name'       => 'HILISALAWAAHE',
				),
			64  =>
				array(
					'id'         => '1215010',
					'regency_id' => '1215',
					'name'       => 'PAKKAT',
				),
			65  =>
				array(
					'id'         => '1215020',
					'regency_id' => '1215',
					'name'       => 'ONAN GANJANG',
				),
			66  =>
				array(
					'id'         => '1215030',
					'regency_id' => '1215',
					'name'       => 'SIJAMA POLANG',
				),
			67  =>
				array(
					'id'         => '1215040',
					'regency_id' => '1215',
					'name'       => 'DOLOK SANGGUL',
				),
			68  =>
				array(
					'id'         => '1215050',
					'regency_id' => '1215',
					'name'       => 'LINTONG NIHUTA',
				),
			69  =>
				array(
					'id'         => '1215060',
					'regency_id' => '1215',
					'name'       => 'PARANGINAN',
				),
			70  =>
				array(
					'id'         => '1215070',
					'regency_id' => '1215',
					'name'       => 'BAKTI RAJA',
				),
			71  =>
				array(
					'id'         => '1215080',
					'regency_id' => '1215',
					'name'       => 'POLLUNG',
				),
			72  =>
				array(
					'id'         => '1215090',
					'regency_id' => '1215',
					'name'       => 'PARLILITAN',
				),
			73  =>
				array(
					'id'         => '1215100',
					'regency_id' => '1215',
					'name'       => 'TARA BINTANG',
				),
			74  =>
				array(
					'id'         => '1216010',
					'regency_id' => '1216',
					'name'       => 'SALAK',
				),
			75  =>
				array(
					'id'         => '1216011',
					'regency_id' => '1216',
					'name'       => 'SITELLU TALI URANG JEHE',
				),
			76  =>
				array(
					'id'         => '1216012',
					'regency_id' => '1216',
					'name'       => 'PAGINDAR',
				),
			77  =>
				array(
					'id'         => '1216013',
					'regency_id' => '1216',
					'name'       => 'SITELLU TALI URANG JULU',
				),
			78  =>
				array(
					'id'         => '1216014',
					'regency_id' => '1216',
					'name'       => 'PERGETTENG-GETTENG SENGKUT',
				),
			79  =>
				array(
					'id'         => '1216020',
					'regency_id' => '1216',
					'name'       => 'KERAJAAN',
				),
			80  =>
				array(
					'id'         => '1216021',
					'regency_id' => '1216',
					'name'       => 'TINADA',
				),
			81  =>
				array(
					'id'         => '1216022',
					'regency_id' => '1216',
					'name'       => 'SIEMPAT RUBE',
				),
			82  =>
				array(
					'id'         => '1217010',
					'regency_id' => '1217',
					'name'       => 'SIANJUR MULA MULA',
				),
			83  =>
				array(
					'id'         => '1217020',
					'regency_id' => '1217',
					'name'       => 'HARIAN',
				),
			84  =>
				array(
					'id'         => '1217030',
					'regency_id' => '1217',
					'name'       => 'SITIO-TIO',
				),
			85  =>
				array(
					'id'         => '1217040',
					'regency_id' => '1217',
					'name'       => 'ONAN RUNGGU',
				),
			86  =>
				array(
					'id'         => '1217050',
					'regency_id' => '1217',
					'name'       => 'NAINGGOLAN',
				),
			87  =>
				array(
					'id'         => '1217060',
					'regency_id' => '1217',
					'name'       => 'PALIPI',
				),
			88  =>
				array(
					'id'         => '1217070',
					'regency_id' => '1217',
					'name'       => 'RONGGUR NIHUTA',
				),
			89  =>
				array(
					'id'         => '1217080',
					'regency_id' => '1217',
					'name'       => 'PANGURURAN',
				),
			90  =>
				array(
					'id'         => '1217090',
					'regency_id' => '1217',
					'name'       => 'SIMANINDO',
				),
			91  =>
				array(
					'id'         => '1218010',
					'regency_id' => '1218',
					'name'       => 'KOTARIH',
				),
			92  =>
				array(
					'id'         => '1218011',
					'regency_id' => '1218',
					'name'       => 'SILINDA',
				),
			93  =>
				array(
					'id'         => '1218012',
					'regency_id' => '1218',
					'name'       => 'BINTANG BAYU',
				),
			94  =>
				array(
					'id'         => '1218020',
					'regency_id' => '1218',
					'name'       => 'DOLOK MASIHUL',
				),
			95  =>
				array(
					'id'         => '1218021',
					'regency_id' => '1218',
					'name'       => 'SERBAJADI',
				),
			96  =>
				array(
					'id'         => '1218030',
					'regency_id' => '1218',
					'name'       => 'SIPISPIS',
				),
			97  =>
				array(
					'id'         => '1218040',
					'regency_id' => '1218',
					'name'       => 'DOLOK MERAWAN',
				),
			98  =>
				array(
					'id'         => '1218050',
					'regency_id' => '1218',
					'name'       => 'TEBINGTINGGI',
				),
			99  =>
				array(
					'id'         => '1218051',
					'regency_id' => '1218',
					'name'       => 'TEBING SYAHBANDAR',
				),
			100 =>
				array(
					'id'         => '1218060',
					'regency_id' => '1218',
					'name'       => 'BANDAR KHALIPAH',
				),
			101 =>
				array(
					'id'         => '1218070',
					'regency_id' => '1218',
					'name'       => 'TANJUNG BERINGIN',
				),
			102 =>
				array(
					'id'         => '1218080',
					'regency_id' => '1218',
					'name'       => 'SEI RAMPAH',
				),
			103 =>
				array(
					'id'         => '1218081',
					'regency_id' => '1218',
					'name'       => 'SEI BAMBAN',
				),
			104 =>
				array(
					'id'         => '1218090',
					'regency_id' => '1218',
					'name'       => 'TELUK MENGKUDU',
				),
			105 =>
				array(
					'id'         => '1218100',
					'regency_id' => '1218',
					'name'       => 'PERBAUNGAN',
				),
			106 =>
				array(
					'id'         => '1218101',
					'regency_id' => '1218',
					'name'       => 'PEGAJAHAN',
				),
			107 =>
				array(
					'id'         => '1218110',
					'regency_id' => '1218',
					'name'       => 'PANTAI CERMIN',
				),
			108 =>
				array(
					'id'         => '1219010',
					'regency_id' => '1219',
					'name'       => 'SEI BALAI',
				),
			109 =>
				array(
					'id'         => '1219020',
					'regency_id' => '1219',
					'name'       => 'TANJUNG TIRAM',
				),
			110 =>
				array(
					'id'         => '1219021',
					'regency_id' => '1219',
					'name'       => 'NIBUNG HANGUS',
				),
			111 =>
				array(
					'id'         => '1219030',
					'regency_id' => '1219',
					'name'       => 'TALAWI',
				),
			112 =>
				array(
					'id'         => '1219031',
					'regency_id' => '1219',
					'name'       => 'DATUK TANAH DATAR',
				),
			113 =>
				array(
					'id'         => '1219040',
					'regency_id' => '1219',
					'name'       => 'LIMAPULUH',
				),
			114 =>
				array(
					'id'         => '1219041',
					'regency_id' => '1219',
					'name'       => 'LIMA PULUH PESISIR',
				),
			115 =>
				array(
					'id'         => '1219042',
					'regency_id' => '1219',
					'name'       => 'DATUK LIMA PULUH',
				),
			116 =>
				array(
					'id'         => '1219050',
					'regency_id' => '1219',
					'name'       => 'AIR PUTIH',
				),
			117 =>
				array(
					'id'         => '1219060',
					'regency_id' => '1219',
					'name'       => 'SEI SUKA',
				),
			118 =>
				array(
					'id'         => '1219061',
					'regency_id' => '1219',
					'name'       => 'LAUT TADOR',
				),
			119 =>
				array(
					'id'         => '1219070',
					'regency_id' => '1219',
					'name'       => 'MEDANG DERAS',
				),
			120 =>
				array(
					'id'         => '1220010',
					'regency_id' => '1220',
					'name'       => 'BATANG ONANG',
				),
			121 =>
				array(
					'id'         => '1220020',
					'regency_id' => '1220',
					'name'       => 'PADANG BOLAK JULU',
				),
			122 =>
				array(
					'id'         => '1220030',
					'regency_id' => '1220',
					'name'       => 'PORTIBI',
				),
			123 =>
				array(
					'id'         => '1220040',
					'regency_id' => '1220',
					'name'       => 'PADANG BOLAK',
				),
			124 =>
				array(
					'id'         => '1220041',
					'regency_id' => '1220',
					'name'       => 'PADANG BOLAK TENGGARA',
				),
			125 =>
				array(
					'id'         => '1220050',
					'regency_id' => '1220',
					'name'       => 'SIMANGAMBAT',
				),
			126 =>
				array(
					'id'         => '1220051',
					'regency_id' => '1220',
					'name'       => 'UJUNG BATU',
				),
			127 =>
				array(
					'id'         => '1220060',
					'regency_id' => '1220',
					'name'       => 'HALONGONAN',
				),
			128 =>
				array(
					'id'         => '1220061',
					'regency_id' => '1220',
					'name'       => 'HALONGONAN TIMUR',
				),
			129 =>
				array(
					'id'         => '1220070',
					'regency_id' => '1220',
					'name'       => 'DOLOK',
				),
			130 =>
				array(
					'id'         => '1220080',
					'regency_id' => '1220',
					'name'       => 'DOLOK SIGOMPULON',
				),
			131 =>
				array(
					'id'         => '1220090',
					'regency_id' => '1220',
					'name'       => 'HULU SIHAPAS',
				),
			132 =>
				array(
					'id'         => '1221010',
					'regency_id' => '1221',
					'name'       => 'SOSOPAN',
				),
			133 =>
				array(
					'id'         => '1221020',
					'regency_id' => '1221',
					'name'       => 'ULU BARUMUN',
				),
			134 =>
				array(
					'id'         => '1221030',
					'regency_id' => '1221',
					'name'       => 'BARUMUN',
				),
			135 =>
				array(
					'id'         => '1221031',
					'regency_id' => '1221',
					'name'       => 'BARUMUN SELATAN',
				),
			136 =>
				array(
					'id'         => '1221040',
					'regency_id' => '1221',
					'name'       => 'LUBUK BARUMUN',
				),
			137 =>
				array(
					'id'         => '1221050',
					'regency_id' => '1221',
					'name'       => 'SOSA',
				),
			138 =>
				array(
					'id'         => '1221060',
					'regency_id' => '1221',
					'name'       => 'BATANG LUBU SUTAM',
				),
			139 =>
				array(
					'id'         => '1221070',
					'regency_id' => '1221',
					'name'       => 'HUTA RAJA TINGGI',
				),
			140 =>
				array(
					'id'         => '1221080',
					'regency_id' => '1221',
					'name'       => 'HURISTAK',
				),
			141 =>
				array(
					'id'         => '1221090',
					'regency_id' => '1221',
					'name'       => 'BARUMUN TENGAH',
				),
			142 =>
				array(
					'id'         => '1221091',
					'regency_id' => '1221',
					'name'       => 'AEK NABARA BARUMUN',
				),
			143 =>
				array(
					'id'         => '1221092',
					'regency_id' => '1221',
					'name'       => 'SIHAPAS BARUMUN',
				),
			144 =>
				array(
					'id'         => '1222010',
					'regency_id' => '1222',
					'name'       => 'SUNGAI KANAN',
				),
			145 =>
				array(
					'id'         => '1222020',
					'regency_id' => '1222',
					'name'       => 'TORGAMBA',
				),
			146 =>
				array(
					'id'         => '1222030',
					'regency_id' => '1222',
					'name'       => 'KOTA PINANG',
				),
			147 =>
				array(
					'id'         => '1222040',
					'regency_id' => '1222',
					'name'       => 'SILANGKITANG',
				),
			148 =>
				array(
					'id'         => '1222050',
					'regency_id' => '1222',
					'name'       => 'KAMPUNG RAKYAT',
				),
			149 =>
				array(
					'id'         => '1223010',
					'regency_id' => '1223',
					'name'       => 'NA IX-X',
				),
			150 =>
				array(
					'id'         => '1223020',
					'regency_id' => '1223',
					'name'       => 'MARBAU',
				),
			151 =>
				array(
					'id'         => '1223030',
					'regency_id' => '1223',
					'name'       => 'AEK KUO',
				),
			152 =>
				array(
					'id'         => '1223040',
					'regency_id' => '1223',
					'name'       => 'AEK NATAS',
				),
			153 =>
				array(
					'id'         => '1223050',
					'regency_id' => '1223',
					'name'       => 'KUALUH SELATAN',
				),
			154 =>
				array(
					'id'         => '1223060',
					'regency_id' => '1223',
					'name'       => 'KUALUH HILIR',
				),
			155 =>
				array(
					'id'         => '1223070',
					'regency_id' => '1223',
					'name'       => 'KUALUH HULU',
				),
			156 =>
				array(
					'id'         => '1223080',
					'regency_id' => '1223',
					'name'       => 'KUALUH LEIDONG',
				),
			157 =>
				array(
					'id'         => '1224010',
					'regency_id' => '1224',
					'name'       => 'TUGALA OYO',
				),
			158 =>
				array(
					'id'         => '1224020',
					'regency_id' => '1224',
					'name'       => 'ALASA',
				),
			159 =>
				array(
					'id'         => '1224030',
					'regency_id' => '1224',
					'name'       => 'ALASA TALU MUZOI',
				),
			160 =>
				array(
					'id'         => '1224040',
					'regency_id' => '1224',
					'name'       => 'NAMOHALU ESIWA',
				),
			161 =>
				array(
					'id'         => '1224050',
					'regency_id' => '1224',
					'name'       => 'SITOLU ORI',
				),
			162 =>
				array(
					'id'         => '1224060',
					'regency_id' => '1224',
					'name'       => 'TUHEMBERUA',
				),
			163 =>
				array(
					'id'         => '1224070',
					'regency_id' => '1224',
					'name'       => 'SAWO',
				),
			164 =>
				array(
					'id'         => '1224080',
					'regency_id' => '1224',
					'name'       => 'LOTU',
				),
			165 =>
				array(
					'id'         => '1224090',
					'regency_id' => '1224',
					'name'       => 'LAHEWA TIMUR',
				),
			166 =>
				array(
					'id'         => '1224100',
					'regency_id' => '1224',
					'name'       => 'AFULU',
				),
			167 =>
				array(
					'id'         => '1224110',
					'regency_id' => '1224',
					'name'       => 'LAHEWA',
				),
			168 =>
				array(
					'id'         => '1225010',
					'regency_id' => '1225',
					'name'       => 'SIROMBU',
				),
			169 =>
				array(
					'id'         => '1225020',
					'regency_id' => '1225',
					'name'       => 'LAHOMI',
				),
			170 =>
				array(
					'id'         => '1225030',
					'regency_id' => '1225',
					'name'       => 'ULU MORO O',
				),
			171 =>
				array(
					'id'         => '1225040',
					'regency_id' => '1225',
					'name'       => 'LOLOFITU MOI',
				),
			172 =>
				array(
					'id'         => '1225050',
					'regency_id' => '1225',
					'name'       => 'MANDREHE UTARA',
				),
			173 =>
				array(
					'id'         => '1225060',
					'regency_id' => '1225',
					'name'       => 'MANDREHE',
				),
			174 =>
				array(
					'id'         => '1225070',
					'regency_id' => '1225',
					'name'       => 'MANDREHE BARAT',
				),
			175 =>
				array(
					'id'         => '1225080',
					'regency_id' => '1225',
					'name'       => 'MORO O',
				),
			176 =>
				array(
					'id'         => '1271010',
					'regency_id' => '1271',
					'name'       => 'SIBOLGA UTARA',
				),
			177 =>
				array(
					'id'         => '1271020',
					'regency_id' => '1271',
					'name'       => 'SIBOLGA KOTA',
				),
			178 =>
				array(
					'id'         => '1271030',
					'regency_id' => '1271',
					'name'       => 'SIBOLGA SELATAN',
				),
			179 =>
				array(
					'id'         => '1271031',
					'regency_id' => '1271',
					'name'       => 'SIBOLGA SAMBAS',
				),
			180 =>
				array(
					'id'         => '1272010',
					'regency_id' => '1272',
					'name'       => 'DATUK BANDAR',
				),
			181 =>
				array(
					'id'         => '1272011',
					'regency_id' => '1272',
					'name'       => 'DATUK BANDAR TIMUR',
				),
			182 =>
				array(
					'id'         => '1272020',
					'regency_id' => '1272',
					'name'       => 'TANJUNG BALAI SELATAN',
				),
			183 =>
				array(
					'id'         => '1272030',
					'regency_id' => '1272',
					'name'       => 'TANJUNG BALAI UTARA',
				),
			184 =>
				array(
					'id'         => '1272040',
					'regency_id' => '1272',
					'name'       => 'SEI TUALANG RASO',
				),
			185 =>
				array(
					'id'         => '1272050',
					'regency_id' => '1272',
					'name'       => 'TELUK NIBUNG',
				),
			186 =>
				array(
					'id'         => '1273010',
					'regency_id' => '1273',
					'name'       => 'SIANTAR MARIHAT',
				),
			187 =>
				array(
					'id'         => '1273011',
					'regency_id' => '1273',
					'name'       => 'SIANTAR MARIMBUN',
				),
			188 =>
				array(
					'id'         => '1273020',
					'regency_id' => '1273',
					'name'       => 'SIANTAR SELATAN',
				),
			189 =>
				array(
					'id'         => '1273030',
					'regency_id' => '1273',
					'name'       => 'SIANTAR BARAT',
				),
			190 =>
				array(
					'id'         => '1273040',
					'regency_id' => '1273',
					'name'       => 'SIANTAR UTARA',
				),
			191 =>
				array(
					'id'         => '1273050',
					'regency_id' => '1273',
					'name'       => 'SIANTAR TIMUR',
				),
			192 =>
				array(
					'id'         => '1273060',
					'regency_id' => '1273',
					'name'       => 'SIANTAR MARTOBA',
				),
			193 =>
				array(
					'id'         => '1273061',
					'regency_id' => '1273',
					'name'       => 'SIANTAR SITALASARI',
				),
			194 =>
				array(
					'id'         => '1274010',
					'regency_id' => '1274',
					'name'       => 'PADANG HULU',
				),
			195 =>
				array(
					'id'         => '1274011',
					'regency_id' => '1274',
					'name'       => 'TEBING TINGGI KOTA',
				),
			196 =>
				array(
					'id'         => '1274020',
					'regency_id' => '1274',
					'name'       => 'RAMBUTAN',
				),
			197 =>
				array(
					'id'         => '1274021',
					'regency_id' => '1274',
					'name'       => 'BAJENIS',
				),
			198 =>
				array(
					'id'         => '1274030',
					'regency_id' => '1274',
					'name'       => 'PADANG HILIR',
				),
			199 =>
				array(
					'id'         => '1275010',
					'regency_id' => '1275',
					'name'       => 'MEDAN TUNTUNGAN',
				),
			200 =>
				array(
					'id'         => '1275020',
					'regency_id' => '1275',
					'name'       => 'MEDAN JOHOR',
				),
			201 =>
				array(
					'id'         => '1275030',
					'regency_id' => '1275',
					'name'       => 'MEDAN AMPLAS',
				),
			202 =>
				array(
					'id'         => '1275040',
					'regency_id' => '1275',
					'name'       => 'MEDAN DENAI',
				),
			203 =>
				array(
					'id'         => '1275050',
					'regency_id' => '1275',
					'name'       => 'MEDAN AREA',
				),
			204 =>
				array(
					'id'         => '1275060',
					'regency_id' => '1275',
					'name'       => 'MEDAN KOTA',
				),
			205 =>
				array(
					'id'         => '1275070',
					'regency_id' => '1275',
					'name'       => 'MEDAN MAIMUN',
				),
			206 =>
				array(
					'id'         => '1275080',
					'regency_id' => '1275',
					'name'       => 'MEDAN POLONIA',
				),
			207 =>
				array(
					'id'         => '1275090',
					'regency_id' => '1275',
					'name'       => 'MEDAN BARU',
				),
			208 =>
				array(
					'id'         => '1275100',
					'regency_id' => '1275',
					'name'       => 'MEDAN SELAYANG',
				),
			209 =>
				array(
					'id'         => '1275110',
					'regency_id' => '1275',
					'name'       => 'MEDAN SUNGGAL',
				),
			210 =>
				array(
					'id'         => '1275120',
					'regency_id' => '1275',
					'name'       => 'MEDAN HELVETIA',
				),
			211 =>
				array(
					'id'         => '1275130',
					'regency_id' => '1275',
					'name'       => 'MEDAN PETISAH',
				),
			212 =>
				array(
					'id'         => '1275140',
					'regency_id' => '1275',
					'name'       => 'MEDAN BARAT',
				),
			213 =>
				array(
					'id'         => '1275150',
					'regency_id' => '1275',
					'name'       => 'MEDAN TIMUR',
				),
			214 =>
				array(
					'id'         => '1275160',
					'regency_id' => '1275',
					'name'       => 'MEDAN PERJUANGAN',
				),
			215 =>
				array(
					'id'         => '1275170',
					'regency_id' => '1275',
					'name'       => 'MEDAN TEMBUNG',
				),
			216 =>
				array(
					'id'         => '1275180',
					'regency_id' => '1275',
					'name'       => 'MEDAN DELI',
				),
			217 =>
				array(
					'id'         => '1275190',
					'regency_id' => '1275',
					'name'       => 'MEDAN LABUHAN',
				),
			218 =>
				array(
					'id'         => '1275200',
					'regency_id' => '1275',
					'name'       => 'MEDAN MARELAN',
				),
			219 =>
				array(
					'id'         => '1275210',
					'regency_id' => '1275',
					'name'       => 'MEDAN BELAWAN',
				),
			220 =>
				array(
					'id'         => '1276010',
					'regency_id' => '1276',
					'name'       => 'BINJAI SELATAN',
				),
			221 =>
				array(
					'id'         => '1276020',
					'regency_id' => '1276',
					'name'       => 'BINJAI KOTA',
				),
			222 =>
				array(
					'id'         => '1276030',
					'regency_id' => '1276',
					'name'       => 'BINJAI TIMUR',
				),
			223 =>
				array(
					'id'         => '1276040',
					'regency_id' => '1276',
					'name'       => 'BINJAI UTARA',
				),
			224 =>
				array(
					'id'         => '1276050',
					'regency_id' => '1276',
					'name'       => 'BINJAI BARAT',
				),
			225 =>
				array(
					'id'         => '1277010',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN TENGGARA',
				),
			226 =>
				array(
					'id'         => '1277020',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN SELATAN',
				),
			227 =>
				array(
					'id'         => '1277030',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN BATUNADUA',
				),
			228 =>
				array(
					'id'         => '1277040',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN UTARA',
				),
			229 =>
				array(
					'id'         => '1277050',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN HUTAIMBARU',
				),
			230 =>
				array(
					'id'         => '1277051',
					'regency_id' => '1277',
					'name'       => 'PADANGSIDIMPUAN ANGKOLA JULU',
				),
			231 =>
				array(
					'id'         => '1278010',
					'regency_id' => '1278',
					'name'       => 'GUNUNGSITOLI IDANOI',
				),
			232 =>
				array(
					'id'         => '1278020',
					'regency_id' => '1278',
					'name'       => 'GUNUNGSITOLI SELATAN',
				),
			233 =>
				array(
					'id'         => '1278030',
					'regency_id' => '1278',
					'name'       => 'GUNUNGSITOLI BARAT',
				),
			234 =>
				array(
					'id'         => '1278040',
					'regency_id' => '1278',
					'name'       => 'GUNUNG SITOLI',
				),
			235 =>
				array(
					'id'         => '1278050',
					'regency_id' => '1278',
					'name'       => 'GUNUNGSITOLI ALO OA',
				),
			236 =>
				array(
					'id'         => '1278060',
					'regency_id' => '1278',
					'name'       => 'GUNUNGSITOLI UTARA',
				),
			237 =>
				array(
					'id'         => '1301011',
					'regency_id' => '1301',
					'name'       => 'PAGAI SELATAN',
				),
			238 =>
				array(
					'id'         => '1301012',
					'regency_id' => '1301',
					'name'       => 'SIKAKAP',
				),
			239 =>
				array(
					'id'         => '1301013',
					'regency_id' => '1301',
					'name'       => 'PAGAI UTARA',
				),
			240 =>
				array(
					'id'         => '1301021',
					'regency_id' => '1301',
					'name'       => 'SIPORA SELATAN',
				),
			241 =>
				array(
					'id'         => '1301022',
					'regency_id' => '1301',
					'name'       => 'SIPORA UTARA',
				),
			242 =>
				array(
					'id'         => '1301030',
					'regency_id' => '1301',
					'name'       => 'SIBERUT SELATAN',
				),
			243 =>
				array(
					'id'         => '1301031',
					'regency_id' => '1301',
					'name'       => 'SEBERUT BARAT DAYA',
				),
			244 =>
				array(
					'id'         => '1301032',
					'regency_id' => '1301',
					'name'       => 'SIBERUT TENGAH',
				),
			245 =>
				array(
					'id'         => '1301040',
					'regency_id' => '1301',
					'name'       => 'SIBERUT UTARA',
				),
			246 =>
				array(
					'id'         => '1301041',
					'regency_id' => '1301',
					'name'       => 'SIBERUT BARAT',
				),
			247 =>
				array(
					'id'         => '1302011',
					'regency_id' => '1302',
					'name'       => 'SILAUT',
				),
			248 =>
				array(
					'id'         => '1302012',
					'regency_id' => '1302',
					'name'       => 'LUNANG',
				),
			249 =>
				array(
					'id'         => '1302020',
					'regency_id' => '1302',
					'name'       => 'BASA AMPEK BALAI TAPAN',
				),
			250 =>
				array(
					'id'         => '1302021',
					'regency_id' => '1302',
					'name'       => 'RANAH AMPEK HULU TAPAN',
				),
			251 =>
				array(
					'id'         => '1302030',
					'regency_id' => '1302',
					'name'       => 'PANCUNG SOAL',
				),
			252 =>
				array(
					'id'         => '1302031',
					'regency_id' => '1302',
					'name'       => 'AIRPURA',
				),
			253 =>
				array(
					'id'         => '1302040',
					'regency_id' => '1302',
					'name'       => 'LINGGO SARI BAGANTI',
				),
			254 =>
				array(
					'id'         => '1302050',
					'regency_id' => '1302',
					'name'       => 'RANAH PESISIR',
				),
			255 =>
				array(
					'id'         => '1302060',
					'regency_id' => '1302',
					'name'       => 'LENGAYANG',
				),
			256 =>
				array(
					'id'         => '1302070',
					'regency_id' => '1302',
					'name'       => 'SUTERA',
				),
			257 =>
				array(
					'id'         => '1302080',
					'regency_id' => '1302',
					'name'       => 'BATANG KAPAS',
				),
			258 =>
				array(
					'id'         => '1302090',
					'regency_id' => '1302',
					'name'       => 'IV JURAI',
				),
			259 =>
				array(
					'id'         => '1302100',
					'regency_id' => '1302',
					'name'       => 'BAYANG',
				),
			260 =>
				array(
					'id'         => '1302101',
					'regency_id' => '1302',
					'name'       => 'IV  NAGARI BAYANG UTARA',
				),
			261 =>
				array(
					'id'         => '1302110',
					'regency_id' => '1302',
					'name'       => 'KOTO XI TARUSAN',
				),
			262 =>
				array(
					'id'         => '1303040',
					'regency_id' => '1303',
					'name'       => 'PANTAI CERMIN',
				),
			263 =>
				array(
					'id'         => '1303050',
					'regency_id' => '1303',
					'name'       => 'LEMBAH GUMANTI',
				),
			264 =>
				array(
					'id'         => '1303051',
					'regency_id' => '1303',
					'name'       => 'HILIRAN GUMANTI',
				),
			265 =>
				array(
					'id'         => '1303060',
					'regency_id' => '1303',
					'name'       => 'PAYUNG SEKAKI',
				),
			266 =>
				array(
					'id'         => '1303061',
					'regency_id' => '1303',
					'name'       => 'TIGO LURAH',
				),
			267 =>
				array(
					'id'         => '1303070',
					'regency_id' => '1303',
					'name'       => 'LEMBANG JAYA',
				),
			268 =>
				array(
					'id'         => '1303071',
					'regency_id' => '1303',
					'name'       => 'DANAU KEMBAR',
				),
			269 =>
				array(
					'id'         => '1303080',
					'regency_id' => '1303',
					'name'       => 'GUNUNG TALANG',
				),
			270 =>
				array(
					'id'         => '1303090',
					'regency_id' => '1303',
					'name'       => 'BUKIT SUNDI',
				),
			271 =>
				array(
					'id'         => '1303100',
					'regency_id' => '1303',
					'name'       => 'IX KOTO SUNGAI LASI',
				),
			272 =>
				array(
					'id'         => '1303110',
					'regency_id' => '1303',
					'name'       => 'KUBUNG',
				),
			273 =>
				array(
					'id'         => '1303120',
					'regency_id' => '1303',
					'name'       => 'X KOTO DIATAS',
				),
			274 =>
				array(
					'id'         => '1303130',
					'regency_id' => '1303',
					'name'       => 'X KOTO SINGKARAK',
				),
			275 =>
				array(
					'id'         => '1303140',
					'regency_id' => '1303',
					'name'       => 'JUNJUNG SIRIH',
				),
			276 =>
				array(
					'id'         => '1304050',
					'regency_id' => '1304',
					'name'       => 'KAMANG BARU',
				),
			277 =>
				array(
					'id'         => '1304060',
					'regency_id' => '1304',
					'name'       => 'TANJUNG GADANG',
				),
			278 =>
				array(
					'id'         => '1304070',
					'regency_id' => '1304',
					'name'       => 'SIJUNJUNG',
				),
			279 =>
				array(
					'id'         => '1304071',
					'regency_id' => '1304',
					'name'       => 'LUBUK TAROK',
				),
			280 =>
				array(
					'id'         => '1304080',
					'regency_id' => '1304',
					'name'       => 'IV NAGARI',
				),
			281 =>
				array(
					'id'         => '1304090',
					'regency_id' => '1304',
					'name'       => 'KUPITAN',
				),
			282 =>
				array(
					'id'         => '1304100',
					'regency_id' => '1304',
					'name'       => 'KOTO TUJUH',
				),
			283 =>
				array(
					'id'         => '1304110',
					'regency_id' => '1304',
					'name'       => 'SUMPUR KUDUS',
				),
			284 =>
				array(
					'id'         => '1305010',
					'regency_id' => '1305',
					'name'       => 'SEPULUH KOTO',
				),
			285 =>
				array(
					'id'         => '1305020',
					'regency_id' => '1305',
					'name'       => 'BATIPUH',
				),
			286 =>
				array(
					'id'         => '1305021',
					'regency_id' => '1305',
					'name'       => 'BATIPUH SELATAN',
				),
			287 =>
				array(
					'id'         => '1305030',
					'regency_id' => '1305',
					'name'       => 'PARIANGAN',
				),
			288 =>
				array(
					'id'         => '1305040',
					'regency_id' => '1305',
					'name'       => 'RAMBATAN',
				),
			289 =>
				array(
					'id'         => '1305050',
					'regency_id' => '1305',
					'name'       => 'LIMA KAUM',
				),
			290 =>
				array(
					'id'         => '1305060',
					'regency_id' => '1305',
					'name'       => 'TANJUNG EMAS',
				),
			291 =>
				array(
					'id'         => '1305070',
					'regency_id' => '1305',
					'name'       => 'PADANG GANTING',
				),
			292 =>
				array(
					'id'         => '1305080',
					'regency_id' => '1305',
					'name'       => 'LINTAU BUO',
				),
			293 =>
				array(
					'id'         => '1305081',
					'regency_id' => '1305',
					'name'       => 'LINTAU BUO UTARA',
				),
			294 =>
				array(
					'id'         => '1305090',
					'regency_id' => '1305',
					'name'       => 'SUNGAYANG',
				),
			295 =>
				array(
					'id'         => '1305100',
					'regency_id' => '1305',
					'name'       => 'SUNGAI TARAB',
				),
			296 =>
				array(
					'id'         => '1305110',
					'regency_id' => '1305',
					'name'       => 'SALIMPAUNG',
				),
			297 =>
				array(
					'id'         => '1305111',
					'regency_id' => '1305',
					'name'       => 'TANJUNG BARU',
				),
			298 =>
				array(
					'id'         => '1306010',
					'regency_id' => '1306',
					'name'       => 'BATANG ANAI',
				),
			299 =>
				array(
					'id'         => '1306020',
					'regency_id' => '1306',
					'name'       => 'LUBUK ALUNG',
				),
			300 =>
				array(
					'id'         => '1306021',
					'regency_id' => '1306',
					'name'       => 'SINTUK TOBOH GADANG',
				),
			301 =>
				array(
					'id'         => '1306030',
					'regency_id' => '1306',
					'name'       => 'ULAKAN TAPAKIS',
				),
			302 =>
				array(
					'id'         => '1306040',
					'regency_id' => '1306',
					'name'       => 'NAN SABARIS',
				),
			303 =>
				array(
					'id'         => '1306050',
					'regency_id' => '1306',
					'name'       => '2 X 11 ENAM LINGKUNG',
				),
			304 =>
				array(
					'id'         => '1306051',
					'regency_id' => '1306',
					'name'       => 'ENAM LINGKUNG',
				),
			305 =>
				array(
					'id'         => '1306052',
					'regency_id' => '1306',
					'name'       => '2 X 11 KAYU TANAM',
				),
			306 =>
				array(
					'id'         => '1306060',
					'regency_id' => '1306',
					'name'       => 'VII KOTO SUNGAI SARIAK',
				),
			307 =>
				array(
					'id'         => '1306061',
					'regency_id' => '1306',
					'name'       => 'PATAMUAN',
				),
			308 =>
				array(
					'id'         => '1306062',
					'regency_id' => '1306',
					'name'       => 'PADANG SAGO',
				),
			309 =>
				array(
					'id'         => '1306070',
					'regency_id' => '1306',
					'name'       => 'V KOTO KP DALAM',
				),
			310 =>
				array(
					'id'         => '1306071',
					'regency_id' => '1306',
					'name'       => 'V KOTO TIMUR',
				),
			311 =>
				array(
					'id'         => '1306080',
					'regency_id' => '1306',
					'name'       => 'SUNGAI LIMAU',
				),
			312 =>
				array(
					'id'         => '1306081',
					'regency_id' => '1306',
					'name'       => 'BATANG GASAN',
				),
			313 =>
				array(
					'id'         => '1306090',
					'regency_id' => '1306',
					'name'       => 'SUNGAI GERINGGING',
				),
			314 =>
				array(
					'id'         => '1306100',
					'regency_id' => '1306',
					'name'       => 'IV KOTO AUR MALINTANG',
				),
			315 =>
				array(
					'id'         => '1307010',
					'regency_id' => '1307',
					'name'       => 'TANJUNG MUTIARA',
				),
			316 =>
				array(
					'id'         => '1307020',
					'regency_id' => '1307',
					'name'       => 'LUBUK BASUNG',
				),
			317 =>
				array(
					'id'         => '1307021',
					'regency_id' => '1307',
					'name'       => 'AMPEK NAGARI',
				),
			318 =>
				array(
					'id'         => '1307030',
					'regency_id' => '1307',
					'name'       => 'TANJUNG RAYA',
				),
			319 =>
				array(
					'id'         => '1307040',
					'regency_id' => '1307',
					'name'       => 'MATUR',
				),
			320 =>
				array(
					'id'         => '1307050',
					'regency_id' => '1307',
					'name'       => 'IV KOTO',
				),
			321 =>
				array(
					'id'         => '1307051',
					'regency_id' => '1307',
					'name'       => 'MALALAK',
				),
			322 =>
				array(
					'id'         => '1307061',
					'regency_id' => '1307',
					'name'       => 'BANUHAMPU',
				),
			323 =>
				array(
					'id'         => '1307062',
					'regency_id' => '1307',
					'name'       => 'SUNGAI PUA',
				),
			324 =>
				array(
					'id'         => '1307070',
					'regency_id' => '1307',
					'name'       => 'AMPEK ANGKEK',
				),
			325 =>
				array(
					'id'         => '1307071',
					'regency_id' => '1307',
					'name'       => 'CANDUANG',
				),
			326 =>
				array(
					'id'         => '1307080',
					'regency_id' => '1307',
					'name'       => 'BASO',
				),
			327 =>
				array(
					'id'         => '1307090',
					'regency_id' => '1307',
					'name'       => 'TILATANG KAMANG',
				),
			328 =>
				array(
					'id'         => '1307091',
					'regency_id' => '1307',
					'name'       => 'KAMANG MAGEK',
				),
			329 =>
				array(
					'id'         => '1307100',
					'regency_id' => '1307',
					'name'       => 'PALEMBAYAN',
				),
			330 =>
				array(
					'id'         => '1307110',
					'regency_id' => '1307',
					'name'       => 'PALUPUH',
				),
			331 =>
				array(
					'id'         => '1308010',
					'regency_id' => '1308',
					'name'       => 'PAYAKUMBUH',
				),
			332 =>
				array(
					'id'         => '1308011',
					'regency_id' => '1308',
					'name'       => 'AKABILURU',
				),
			333 =>
				array(
					'id'         => '1308020',
					'regency_id' => '1308',
					'name'       => 'LUAK',
				),
			334 =>
				array(
					'id'         => '1308021',
					'regency_id' => '1308',
					'name'       => 'LAREH SAGO HALABAN',
				),
			335 =>
				array(
					'id'         => '1308022',
					'regency_id' => '1308',
					'name'       => 'SITUJUAH LIMO NAGARI',
				),
			336 =>
				array(
					'id'         => '1308030',
					'regency_id' => '1308',
					'name'       => 'HARAU',
				),
			337 =>
				array(
					'id'         => '1308040',
					'regency_id' => '1308',
					'name'       => 'GUGUAK',
				),
			338 =>
				array(
					'id'         => '1308041',
					'regency_id' => '1308',
					'name'       => 'MUNGKA',
				),
			339 =>
				array(
					'id'         => '1308050',
					'regency_id' => '1308',
					'name'       => 'SULIKI',
				),
			340 =>
				array(
					'id'         => '1308051',
					'regency_id' => '1308',
					'name'       => 'BUKIK BARISAN',
				),
			341 =>
				array(
					'id'         => '1308060',
					'regency_id' => '1308',
					'name'       => 'GUNUANG OMEH',
				),
			342 =>
				array(
					'id'         => '1308070',
					'regency_id' => '1308',
					'name'       => 'KAPUR IX',
				),
			343 =>
				array(
					'id'         => '1308080',
					'regency_id' => '1308',
					'name'       => 'PANGKALAN KOTO BARU',
				),
			344 =>
				array(
					'id'         => '1309070',
					'regency_id' => '1309',
					'name'       => 'BONJOL',
				),
			345 =>
				array(
					'id'         => '1309071',
					'regency_id' => '1309',
					'name'       => 'TIGO NAGARI',
				),
			346 =>
				array(
					'id'         => '1309072',
					'regency_id' => '1309',
					'name'       => 'SIMPANG ALAHAN MATI',
				),
			347 =>
				array(
					'id'         => '1309080',
					'regency_id' => '1309',
					'name'       => 'LUBUK SIKAPING',
				),
			348 =>
				array(
					'id'         => '1309100',
					'regency_id' => '1309',
					'name'       => 'DUA KOTO',
				),
			349 =>
				array(
					'id'         => '1309110',
					'regency_id' => '1309',
					'name'       => 'PANTI',
				),
			350 =>
				array(
					'id'         => '1309111',
					'regency_id' => '1309',
					'name'       => 'PADANG GELUGUR',
				),
			351 =>
				array(
					'id'         => '1309121',
					'regency_id' => '1309',
					'name'       => 'RAO',
				),
			352 =>
				array(
					'id'         => '1309122',
					'regency_id' => '1309',
					'name'       => 'MAPAT TUNGGUL',
				),
			353 =>
				array(
					'id'         => '1309123',
					'regency_id' => '1309',
					'name'       => 'MAPAT TUNGGUL SELATAN',
				),
			354 =>
				array(
					'id'         => '1309124',
					'regency_id' => '1309',
					'name'       => 'RAO SELATAN',
				),
			355 =>
				array(
					'id'         => '1309125',
					'regency_id' => '1309',
					'name'       => 'RAO UTARA',
				),
			356 =>
				array(
					'id'         => '1310010',
					'regency_id' => '1310',
					'name'       => 'SANGIR',
				),
			357 =>
				array(
					'id'         => '1310020',
					'regency_id' => '1310',
					'name'       => 'SANGIR JUJUAN',
				),
			358 =>
				array(
					'id'         => '1310021',
					'regency_id' => '1310',
					'name'       => 'SANGIR BALAI JANGGO',
				),
			359 =>
				array(
					'id'         => '1310030',
					'regency_id' => '1310',
					'name'       => 'SANGIR BATANG HARI',
				),
			360 =>
				array(
					'id'         => '1310040',
					'regency_id' => '1310',
					'name'       => 'SUNGAI PAGU',
				),
			361 =>
				array(
					'id'         => '1310041',
					'regency_id' => '1310',
					'name'       => 'PAUAH DUO',
				),
			362 =>
				array(
					'id'         => '1310050',
					'regency_id' => '1310',
					'name'       => 'KOTO PARIK GADANG DIATEH',
				),
			363 =>
				array(
					'id'         => '1311010',
					'regency_id' => '1311',
					'name'       => 'SUNGAI RUMBAI',
				),
			364 =>
				array(
					'id'         => '1311011',
					'regency_id' => '1311',
					'name'       => 'KOTO BESAR',
				),
			365 =>
				array(
					'id'         => '1311012',
					'regency_id' => '1311',
					'name'       => 'ASAM JUJUHAN',
				),
			366 =>
				array(
					'id'         => '1311020',
					'regency_id' => '1311',
					'name'       => 'KOTO BARU',
				),
			367 =>
				array(
					'id'         => '1311021',
					'regency_id' => '1311',
					'name'       => 'KOTO SALAK',
				),
			368 =>
				array(
					'id'         => '1311022',
					'regency_id' => '1311',
					'name'       => 'TIUMANG',
				),
			369 =>
				array(
					'id'         => '1311023',
					'regency_id' => '1311',
					'name'       => 'PADANG LAWEH',
				),
			370 =>
				array(
					'id'         => '1311030',
					'regency_id' => '1311',
					'name'       => 'SITIUNG',
				),
			371 =>
				array(
					'id'         => '1311031',
					'regency_id' => '1311',
					'name'       => 'TIMPEH',
				),
			372 =>
				array(
					'id'         => '1311040',
					'regency_id' => '1311',
					'name'       => 'PULAU PUNJUNG',
				),
			373 =>
				array(
					'id'         => '1311041',
					'regency_id' => '1311',
					'name'       => 'IX KOTO',
				),
			374 =>
				array(
					'id'         => '1312010',
					'regency_id' => '1312',
					'name'       => 'SUNGAI BEREMAS',
				),
			375 =>
				array(
					'id'         => '1312020',
					'regency_id' => '1312',
					'name'       => 'RANAH BATAHAN',
				),
			376 =>
				array(
					'id'         => '1312030',
					'regency_id' => '1312',
					'name'       => 'KOTO BALINGKA',
				),
			377 =>
				array(
					'id'         => '1312040',
					'regency_id' => '1312',
					'name'       => 'SUNGAI AUR',
				),
			378 =>
				array(
					'id'         => '1312050',
					'regency_id' => '1312',
					'name'       => 'LEMBAH MALINTANG',
				),
			379 =>
				array(
					'id'         => '1312060',
					'regency_id' => '1312',
					'name'       => 'GUNUNG TULEH',
				),
			380 =>
				array(
					'id'         => '1312070',
					'regency_id' => '1312',
					'name'       => 'TALAMAU',
				),
			381 =>
				array(
					'id'         => '1312080',
					'regency_id' => '1312',
					'name'       => 'PASAMAN',
				),
			382 =>
				array(
					'id'         => '1312090',
					'regency_id' => '1312',
					'name'       => 'LUHAK NAN DUO',
				),
			383 =>
				array(
					'id'         => '1312100',
					'regency_id' => '1312',
					'name'       => 'SASAK RANAH PASISIE',
				),
			384 =>
				array(
					'id'         => '1312110',
					'regency_id' => '1312',
					'name'       => 'KINALI',
				),
			385 =>
				array(
					'id'         => '1371010',
					'regency_id' => '1371',
					'name'       => 'BUNGUS TELUK KABUNG',
				),
			386 =>
				array(
					'id'         => '1371020',
					'regency_id' => '1371',
					'name'       => 'LUBUK KILANGAN',
				),
			387 =>
				array(
					'id'         => '1371030',
					'regency_id' => '1371',
					'name'       => 'LUBUK BEGALUNG',
				),
			388 =>
				array(
					'id'         => '1371040',
					'regency_id' => '1371',
					'name'       => 'PADANG SELATAN',
				),
			389 =>
				array(
					'id'         => '1371050',
					'regency_id' => '1371',
					'name'       => 'PADANG TIMUR',
				),
			390 =>
				array(
					'id'         => '1371060',
					'regency_id' => '1371',
					'name'       => 'PADANG BARAT',
				),
			391 =>
				array(
					'id'         => '1371070',
					'regency_id' => '1371',
					'name'       => 'PADANG UTARA',
				),
			392 =>
				array(
					'id'         => '1371080',
					'regency_id' => '1371',
					'name'       => 'NANGGALO',
				),
			393 =>
				array(
					'id'         => '1371090',
					'regency_id' => '1371',
					'name'       => 'KURANJI',
				),
			394 =>
				array(
					'id'         => '1371100',
					'regency_id' => '1371',
					'name'       => 'PAUH',
				),
			395 =>
				array(
					'id'         => '1371110',
					'regency_id' => '1371',
					'name'       => 'KOTO TANGAH',
				),
			396 =>
				array(
					'id'         => '1372010',
					'regency_id' => '1372',
					'name'       => 'LUBUK SIKARAH',
				),
			397 =>
				array(
					'id'         => '1372020',
					'regency_id' => '1372',
					'name'       => 'TANJUNG HARAPAN',
				),
			398 =>
				array(
					'id'         => '1373010',
					'regency_id' => '1373',
					'name'       => 'SILUNGKANG',
				),
			399 =>
				array(
					'id'         => '1373020',
					'regency_id' => '1373',
					'name'       => 'LEMBAH SEGAR',
				),
			400 =>
				array(
					'id'         => '1373030',
					'regency_id' => '1373',
					'name'       => 'BARANGIN',
				),
			401 =>
				array(
					'id'         => '1373040',
					'regency_id' => '1373',
					'name'       => 'TALAWI',
				),
			402 =>
				array(
					'id'         => '1374010',
					'regency_id' => '1374',
					'name'       => 'PADANG PANJANG BARAT',
				),
			403 =>
				array(
					'id'         => '1374020',
					'regency_id' => '1374',
					'name'       => 'PADANG PANJANG TIMUR',
				),
			404 =>
				array(
					'id'         => '1375010',
					'regency_id' => '1375',
					'name'       => 'GUGUK PANJANG',
				),
			405 =>
				array(
					'id'         => '1375020',
					'regency_id' => '1375',
					'name'       => 'MANDIANGIN KOTO SELAYAN',
				),
			406 =>
				array(
					'id'         => '1375030',
					'regency_id' => '1375',
					'name'       => 'AUR BIRUGO TIGO BALEH',
				),
			407 =>
				array(
					'id'         => '1376010',
					'regency_id' => '1376',
					'name'       => 'PAYAKUMBUH BARAT',
				),
			408 =>
				array(
					'id'         => '1376011',
					'regency_id' => '1376',
					'name'       => 'PAYAKUMBUH SELATAN',
				),
			409 =>
				array(
					'id'         => '1376020',
					'regency_id' => '1376',
					'name'       => 'PAYAKUMBUH TIMUR',
				),
			410 =>
				array(
					'id'         => '1376030',
					'regency_id' => '1376',
					'name'       => 'PAYAKUMBUH UTARA',
				),
			411 =>
				array(
					'id'         => '1376031',
					'regency_id' => '1376',
					'name'       => 'LAMPOSI TIGO NAGORI',
				),
			412 =>
				array(
					'id'         => '1377010',
					'regency_id' => '1377',
					'name'       => 'PARIAMAN SELATAN',
				),
			413 =>
				array(
					'id'         => '1377020',
					'regency_id' => '1377',
					'name'       => 'PARIAMAN TENGAH',
				),
			414 =>
				array(
					'id'         => '1377021',
					'regency_id' => '1377',
					'name'       => 'PARIAMAN TIMUR',
				),
			415 =>
				array(
					'id'         => '1377030',
					'regency_id' => '1377',
					'name'       => 'PARIAMAN UTARA',
				),
			416 =>
				array(
					'id'         => '1401010',
					'regency_id' => '1401',
					'name'       => 'KUANTAN MUDIK',
				),
			417 =>
				array(
					'id'         => '1401011',
					'regency_id' => '1401',
					'name'       => 'HULU KUANTAN',
				),
			418 =>
				array(
					'id'         => '1401012',
					'regency_id' => '1401',
					'name'       => 'GUNUNG TOAR',
				),
			419 =>
				array(
					'id'         => '1401013',
					'regency_id' => '1401',
					'name'       => 'PUCUK RANTAU',
				),
			420 =>
				array(
					'id'         => '1401020',
					'regency_id' => '1401',
					'name'       => 'SINGINGI',
				),
			421 =>
				array(
					'id'         => '1401021',
					'regency_id' => '1401',
					'name'       => 'SINGINGI HILIR',
				),
			422 =>
				array(
					'id'         => '1401030',
					'regency_id' => '1401',
					'name'       => 'KUANTAN TENGAH',
				),
			423 =>
				array(
					'id'         => '1401031',
					'regency_id' => '1401',
					'name'       => 'SENTAJO RAYA',
				),
			424 =>
				array(
					'id'         => '1401040',
					'regency_id' => '1401',
					'name'       => 'BENAI',
				),
			425 =>
				array(
					'id'         => '1401050',
					'regency_id' => '1401',
					'name'       => 'KUANTAN HILIR',
				),
			426 =>
				array(
					'id'         => '1401051',
					'regency_id' => '1401',
					'name'       => 'PANGEAN',
				),
			427 =>
				array(
					'id'         => '1401052',
					'regency_id' => '1401',
					'name'       => 'LOGAS TANAH DARAT',
				),
			428 =>
				array(
					'id'         => '1401053',
					'regency_id' => '1401',
					'name'       => 'KUANTAN HILIR SEBERANG',
				),
			429 =>
				array(
					'id'         => '1401060',
					'regency_id' => '1401',
					'name'       => 'CERENTI',
				),
			430 =>
				array(
					'id'         => '1401061',
					'regency_id' => '1401',
					'name'       => 'INUMAN',
				),
			431 =>
				array(
					'id'         => '1402010',
					'regency_id' => '1402',
					'name'       => 'PERANAP',
				),
			432 =>
				array(
					'id'         => '1402011',
					'regency_id' => '1402',
					'name'       => 'BATANG PERANAP',
				),
			433 =>
				array(
					'id'         => '1402020',
					'regency_id' => '1402',
					'name'       => 'SEBERIDA',
				),
			434 =>
				array(
					'id'         => '1402021',
					'regency_id' => '1402',
					'name'       => 'BATANG CENAKU',
				),
			435 =>
				array(
					'id'         => '1402022',
					'regency_id' => '1402',
					'name'       => 'BATANG GANSAL',
				),
			436 =>
				array(
					'id'         => '1402030',
					'regency_id' => '1402',
					'name'       => 'KELAYANG',
				),
			437 =>
				array(
					'id'         => '1402031',
					'regency_id' => '1402',
					'name'       => 'RAKIT KULIM',
				),
			438 =>
				array(
					'id'         => '1402040',
					'regency_id' => '1402',
					'name'       => 'PASIR PENYU',
				),
			439 =>
				array(
					'id'         => '1402041',
					'regency_id' => '1402',
					'name'       => 'LIRIK',
				),
			440 =>
				array(
					'id'         => '1402042',
					'regency_id' => '1402',
					'name'       => 'SUNGAI LALA',
				),
			441 =>
				array(
					'id'         => '1402043',
					'regency_id' => '1402',
					'name'       => 'LUBUK BATU JAYA',
				),
			442 =>
				array(
					'id'         => '1402050',
					'regency_id' => '1402',
					'name'       => 'RENGAT BARAT',
				),
			443 =>
				array(
					'id'         => '1402060',
					'regency_id' => '1402',
					'name'       => 'RENGAT',
				),
			444 =>
				array(
					'id'         => '1402061',
					'regency_id' => '1402',
					'name'       => 'KUALA CENAKU',
				),
			445 =>
				array(
					'id'         => '1403010',
					'regency_id' => '1403',
					'name'       => 'KERITANG',
				),
			446 =>
				array(
					'id'         => '1403011',
					'regency_id' => '1403',
					'name'       => 'KEMUNING',
				),
			447 =>
				array(
					'id'         => '1403020',
					'regency_id' => '1403',
					'name'       => 'RETEH',
				),
			448 =>
				array(
					'id'         => '1403021',
					'regency_id' => '1403',
					'name'       => 'SUNGAI BATANG',
				),
			449 =>
				array(
					'id'         => '1403030',
					'regency_id' => '1403',
					'name'       => 'ENOK',
				),
			450 =>
				array(
					'id'         => '1403040',
					'regency_id' => '1403',
					'name'       => 'TANAH MERAH',
				),
			451 =>
				array(
					'id'         => '1403050',
					'regency_id' => '1403',
					'name'       => 'KUALA INDRAGIRI',
				),
			452 =>
				array(
					'id'         => '1403051',
					'regency_id' => '1403',
					'name'       => 'CONCONG',
				),
			453 =>
				array(
					'id'         => '1403060',
					'regency_id' => '1403',
					'name'       => 'TEMBILAHAN',
				),
			454 =>
				array(
					'id'         => '1403061',
					'regency_id' => '1403',
					'name'       => 'TEMBILAHAN HULU',
				),
			455 =>
				array(
					'id'         => '1403070',
					'regency_id' => '1403',
					'name'       => 'TEMPULING',
				),
			456 =>
				array(
					'id'         => '1403071',
					'regency_id' => '1403',
					'name'       => 'KEMPAS',
				),
			457 =>
				array(
					'id'         => '1403080',
					'regency_id' => '1403',
					'name'       => 'BATANG TUAKA',
				),
			458 =>
				array(
					'id'         => '1403090',
					'regency_id' => '1403',
					'name'       => 'GAUNG ANAK SERKA',
				),
			459 =>
				array(
					'id'         => '1403100',
					'regency_id' => '1403',
					'name'       => 'GAUNG',
				),
			460 =>
				array(
					'id'         => '1403110',
					'regency_id' => '1403',
					'name'       => 'MANDAH',
				),
			461 =>
				array(
					'id'         => '1403120',
					'regency_id' => '1403',
					'name'       => 'KATEMAN',
				),
			462 =>
				array(
					'id'         => '1403121',
					'regency_id' => '1403',
					'name'       => 'PELANGIRAN',
				),
			463 =>
				array(
					'id'         => '1403122',
					'regency_id' => '1403',
					'name'       => 'TELUK BELENGKONG',
				),
			464 =>
				array(
					'id'         => '1403123',
					'regency_id' => '1403',
					'name'       => 'PULAU BURUNG',
				),
			465 =>
				array(
					'id'         => '1404010',
					'regency_id' => '1404',
					'name'       => 'LANGGAM',
				),
			466 =>
				array(
					'id'         => '1404011',
					'regency_id' => '1404',
					'name'       => 'PANGKALAN KERINCI',
				),
			467 =>
				array(
					'id'         => '1404012',
					'regency_id' => '1404',
					'name'       => 'BANDAR SEIKIJANG',
				),
			468 =>
				array(
					'id'         => '1404020',
					'regency_id' => '1404',
					'name'       => 'PANGKALAN KURAS',
				),
			469 =>
				array(
					'id'         => '1404021',
					'regency_id' => '1404',
					'name'       => 'UKUI',
				),
			470 =>
				array(
					'id'         => '1404022',
					'regency_id' => '1404',
					'name'       => 'PANGKALAN LESUNG',
				),
			471 =>
				array(
					'id'         => '1404030',
					'regency_id' => '1404',
					'name'       => 'BUNUT',
				),
			472 =>
				array(
					'id'         => '1404031',
					'regency_id' => '1404',
					'name'       => 'PELALAWAN',
				),
			473 =>
				array(
					'id'         => '1404032',
					'regency_id' => '1404',
					'name'       => 'BANDAR PETALANGAN',
				),
			474 =>
				array(
					'id'         => '1404040',
					'regency_id' => '1404',
					'name'       => 'KUALA KAMPAR',
				),
			475 =>
				array(
					'id'         => '1404041',
					'regency_id' => '1404',
					'name'       => 'KERUMUTAN',
				),
			476 =>
				array(
					'id'         => '1404042',
					'regency_id' => '1404',
					'name'       => 'TELUK MERANTI',
				),
			477 =>
				array(
					'id'         => '1405010',
					'regency_id' => '1405',
					'name'       => 'MINAS',
				),
			478 =>
				array(
					'id'         => '1405011',
					'regency_id' => '1405',
					'name'       => 'SUNGAI MANDAU',
				),
			479 =>
				array(
					'id'         => '1405012',
					'regency_id' => '1405',
					'name'       => 'KANDIS',
				),
			480 =>
				array(
					'id'         => '1405020',
					'regency_id' => '1405',
					'name'       => 'SIAK',
				),
			481 =>
				array(
					'id'         => '1405021',
					'regency_id' => '1405',
					'name'       => 'KERINCI KANAN',
				),
			482 =>
				array(
					'id'         => '1405022',
					'regency_id' => '1405',
					'name'       => 'TUALANG',
				),
			483 =>
				array(
					'id'         => '1405023',
					'regency_id' => '1405',
					'name'       => 'DAYUN',
				),
			484 =>
				array(
					'id'         => '1405024',
					'regency_id' => '1405',
					'name'       => 'LUBUK DALAM',
				),
			485 =>
				array(
					'id'         => '1405025',
					'regency_id' => '1405',
					'name'       => 'KOTO GASIB',
				),
			486 =>
				array(
					'id'         => '1405026',
					'regency_id' => '1405',
					'name'       => 'MEMPURA',
				),
			487 =>
				array(
					'id'         => '1405030',
					'regency_id' => '1405',
					'name'       => 'SUNGAI APIT',
				),
			488 =>
				array(
					'id'         => '1405031',
					'regency_id' => '1405',
					'name'       => 'BUNGA RAYA',
				),
			489 =>
				array(
					'id'         => '1405032',
					'regency_id' => '1405',
					'name'       => 'SABAK AUH',
				),
			490 =>
				array(
					'id'         => '1405033',
					'regency_id' => '1405',
					'name'       => 'PUSAKO',
				),
			491 =>
				array(
					'id'         => '1406010',
					'regency_id' => '1406',
					'name'       => 'KAMPAR KIRI',
				),
			492 =>
				array(
					'id'         => '1406011',
					'regency_id' => '1406',
					'name'       => 'KAMPAR KIRI HULU',
				),
			493 =>
				array(
					'id'         => '1406012',
					'regency_id' => '1406',
					'name'       => 'KAMPAR KIRI HILIR',
				),
			494 =>
				array(
					'id'         => '1406013',
					'regency_id' => '1406',
					'name'       => 'GUNUNG SAHILAN',
				),
			495 =>
				array(
					'id'         => '1406014',
					'regency_id' => '1406',
					'name'       => 'KAMPAR KIRI TENGAH',
				),
			496 =>
				array(
					'id'         => '1406020',
					'regency_id' => '1406',
					'name'       => 'XIII KOTO KAMPAR',
				),
			497 =>
				array(
					'id'         => '1406021',
					'regency_id' => '1406',
					'name'       => 'KOTO KAMPAR HULU',
				),
			498 =>
				array(
					'id'         => '1406030',
					'regency_id' => '1406',
					'name'       => 'KUOK',
				),
			499 =>
				array(
					'id'         => '1406031',
					'regency_id' => '1406',
					'name'       => 'SALO',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '1406040',
					'regency_id' => '1406',
					'name'       => 'TAPUNG',
				),
			1   =>
				array(
					'id'         => '1406041',
					'regency_id' => '1406',
					'name'       => 'TAPUNG HULU',
				),
			2   =>
				array(
					'id'         => '1406042',
					'regency_id' => '1406',
					'name'       => 'TAPUNG HILIR',
				),
			3   =>
				array(
					'id'         => '1406050',
					'regency_id' => '1406',
					'name'       => 'BANGKINANG KOTA',
				),
			4   =>
				array(
					'id'         => '1406051',
					'regency_id' => '1406',
					'name'       => 'BANGKINANG',
				),
			5   =>
				array(
					'id'         => '1406060',
					'regency_id' => '1406',
					'name'       => 'KAMPAR',
				),
			6   =>
				array(
					'id'         => '1406061',
					'regency_id' => '1406',
					'name'       => 'KAMPA',
				),
			7   =>
				array(
					'id'         => '1406062',
					'regency_id' => '1406',
					'name'       => 'RUMBIO JAYA',
				),
			8   =>
				array(
					'id'         => '1406063',
					'regency_id' => '1406',
					'name'       => 'KAMPAR UTARA',
				),
			9   =>
				array(
					'id'         => '1406070',
					'regency_id' => '1406',
					'name'       => 'TAMBANG',
				),
			10  =>
				array(
					'id'         => '1406080',
					'regency_id' => '1406',
					'name'       => 'SIAK HULU',
				),
			11  =>
				array(
					'id'         => '1406081',
					'regency_id' => '1406',
					'name'       => 'PERHENTIAN RAJA',
				),
			12  =>
				array(
					'id'         => '1407010',
					'regency_id' => '1407',
					'name'       => 'ROKAN IV KOTO',
				),
			13  =>
				array(
					'id'         => '1407011',
					'regency_id' => '1407',
					'name'       => 'PENDALIAN IV KOTO',
				),
			14  =>
				array(
					'id'         => '1407020',
					'regency_id' => '1407',
					'name'       => 'TANDUN',
				),
			15  =>
				array(
					'id'         => '1407021',
					'regency_id' => '1407',
					'name'       => 'KABUN',
				),
			16  =>
				array(
					'id'         => '1407022',
					'regency_id' => '1407',
					'name'       => 'UJUNG BATU',
				),
			17  =>
				array(
					'id'         => '1407030',
					'regency_id' => '1407',
					'name'       => 'RAMBAH SAMO',
				),
			18  =>
				array(
					'id'         => '1407040',
					'regency_id' => '1407',
					'name'       => 'RAMBAH',
				),
			19  =>
				array(
					'id'         => '1407041',
					'regency_id' => '1407',
					'name'       => 'RAMBAH HILIR',
				),
			20  =>
				array(
					'id'         => '1407042',
					'regency_id' => '1407',
					'name'       => 'BANGUN PURBA',
				),
			21  =>
				array(
					'id'         => '1407050',
					'regency_id' => '1407',
					'name'       => 'TAMBUSAI',
				),
			22  =>
				array(
					'id'         => '1407051',
					'regency_id' => '1407',
					'name'       => 'TAMBUSAI UTARA',
				),
			23  =>
				array(
					'id'         => '1407060',
					'regency_id' => '1407',
					'name'       => 'KEPENUHAN',
				),
			24  =>
				array(
					'id'         => '1407061',
					'regency_id' => '1407',
					'name'       => 'KEPENUHAN HULU',
				),
			25  =>
				array(
					'id'         => '1407070',
					'regency_id' => '1407',
					'name'       => 'KUNTO DARUSSALAM',
				),
			26  =>
				array(
					'id'         => '1407071',
					'regency_id' => '1407',
					'name'       => 'PAGARAN TAPAH DARUSSALAM',
				),
			27  =>
				array(
					'id'         => '1407072',
					'regency_id' => '1407',
					'name'       => 'BONAI DARUSSALAM',
				),
			28  =>
				array(
					'id'         => '1408010',
					'regency_id' => '1408',
					'name'       => 'MANDAU',
				),
			29  =>
				array(
					'id'         => '1408011',
					'regency_id' => '1408',
					'name'       => 'PINGGIR',
				),
			30  =>
				array(
					'id'         => '1408012',
					'regency_id' => '1408',
					'name'       => 'BATHIN SOLAPAN',
				),
			31  =>
				array(
					'id'         => '1408013',
					'regency_id' => '1408',
					'name'       => 'TALANG MUANDAU',
				),
			32  =>
				array(
					'id'         => '1408020',
					'regency_id' => '1408',
					'name'       => 'BUKIT BATU',
				),
			33  =>
				array(
					'id'         => '1408021',
					'regency_id' => '1408',
					'name'       => 'SIAK KECIL',
				),
			34  =>
				array(
					'id'         => '1408022',
					'regency_id' => '1408',
					'name'       => 'BANDAR LAKSAMANA',
				),
			35  =>
				array(
					'id'         => '1408030',
					'regency_id' => '1408',
					'name'       => 'RUPAT',
				),
			36  =>
				array(
					'id'         => '1408031',
					'regency_id' => '1408',
					'name'       => 'RUPAT UTARA',
				),
			37  =>
				array(
					'id'         => '1408040',
					'regency_id' => '1408',
					'name'       => 'BENGKALIS',
				),
			38  =>
				array(
					'id'         => '1408050',
					'regency_id' => '1408',
					'name'       => 'BANTAN',
				),
			39  =>
				array(
					'id'         => '1409010',
					'regency_id' => '1409',
					'name'       => 'TANAH PUTIH',
				),
			40  =>
				array(
					'id'         => '1409011',
					'regency_id' => '1409',
					'name'       => 'PUJUD',
				),
			41  =>
				array(
					'id'         => '1409012',
					'regency_id' => '1409',
					'name'       => 'TANAH PUTIH TANJUNG MELAWAN',
				),
			42  =>
				array(
					'id'         => '1409013',
					'regency_id' => '1409',
					'name'       => 'RANTAU KOPAR',
				),
			43  =>
				array(
					'id'         => '1409014',
					'regency_id' => '1409',
					'name'       => 'TANJUNG MEDAN',
				),
			44  =>
				array(
					'id'         => '1409020',
					'regency_id' => '1409',
					'name'       => 'BAGAN SINEMBAH',
				),
			45  =>
				array(
					'id'         => '1409021',
					'regency_id' => '1409',
					'name'       => 'SIMPANG KANAN',
				),
			46  =>
				array(
					'id'         => '1409022',
					'regency_id' => '1409',
					'name'       => 'BAGAN SINEMBAH RAYA',
				),
			47  =>
				array(
					'id'         => '1409023',
					'regency_id' => '1409',
					'name'       => 'BALAI JAYA',
				),
			48  =>
				array(
					'id'         => '1409030',
					'regency_id' => '1409',
					'name'       => 'KUBU',
				),
			49  =>
				array(
					'id'         => '1409031',
					'regency_id' => '1409',
					'name'       => 'PASIR LIMAU KAPAS',
				),
			50  =>
				array(
					'id'         => '1409032',
					'regency_id' => '1409',
					'name'       => 'KUBU BABUSSALAM',
				),
			51  =>
				array(
					'id'         => '1409040',
					'regency_id' => '1409',
					'name'       => 'BANGKO',
				),
			52  =>
				array(
					'id'         => '1409041',
					'regency_id' => '1409',
					'name'       => 'SINABOI',
				),
			53  =>
				array(
					'id'         => '1409042',
					'regency_id' => '1409',
					'name'       => 'BATU HAMPAR',
				),
			54  =>
				array(
					'id'         => '1409043',
					'regency_id' => '1409',
					'name'       => 'PEKAITAN',
				),
			55  =>
				array(
					'id'         => '1409050',
					'regency_id' => '1409',
					'name'       => 'RIMBA MELINTANG',
				),
			56  =>
				array(
					'id'         => '1409051',
					'regency_id' => '1409',
					'name'       => 'BANGKO PUSAKO',
				),
			57  =>
				array(
					'id'         => '1410010',
					'regency_id' => '1410',
					'name'       => 'TEBING TINGGI BARAT',
				),
			58  =>
				array(
					'id'         => '1410020',
					'regency_id' => '1410',
					'name'       => 'TEBING TINGGI',
				),
			59  =>
				array(
					'id'         => '1410021',
					'regency_id' => '1410',
					'name'       => 'TEBING TINGGI TIMUR',
				),
			60  =>
				array(
					'id'         => '1410030',
					'regency_id' => '1410',
					'name'       => 'RANGSANG',
				),
			61  =>
				array(
					'id'         => '1410031',
					'regency_id' => '1410',
					'name'       => 'RANGSANG PESISIR',
				),
			62  =>
				array(
					'id'         => '1410040',
					'regency_id' => '1410',
					'name'       => 'RANGSANG BARAT',
				),
			63  =>
				array(
					'id'         => '1410050',
					'regency_id' => '1410',
					'name'       => 'MERBAU',
				),
			64  =>
				array(
					'id'         => '1410051',
					'regency_id' => '1410',
					'name'       => 'PULAU MERBAU',
				),
			65  =>
				array(
					'id'         => '1410052',
					'regency_id' => '1410',
					'name'       => 'TASIK PUTRI PUYU',
				),
			66  =>
				array(
					'id'         => '1471010',
					'regency_id' => '1471',
					'name'       => 'TAMPAN',
				),
			67  =>
				array(
					'id'         => '1471011',
					'regency_id' => '1471',
					'name'       => 'PAYUNG SEKAKI',
				),
			68  =>
				array(
					'id'         => '1471020',
					'regency_id' => '1471',
					'name'       => 'BUKIT RAYA',
				),
			69  =>
				array(
					'id'         => '1471021',
					'regency_id' => '1471',
					'name'       => 'MARPOYAN DAMAI',
				),
			70  =>
				array(
					'id'         => '1471022',
					'regency_id' => '1471',
					'name'       => 'TENAYAN RAYA',
				),
			71  =>
				array(
					'id'         => '1471030',
					'regency_id' => '1471',
					'name'       => 'LIMAPULUH',
				),
			72  =>
				array(
					'id'         => '1471040',
					'regency_id' => '1471',
					'name'       => 'SAIL',
				),
			73  =>
				array(
					'id'         => '1471050',
					'regency_id' => '1471',
					'name'       => 'PEKANBARU KOTA',
				),
			74  =>
				array(
					'id'         => '1471060',
					'regency_id' => '1471',
					'name'       => 'SUKAJADI',
				),
			75  =>
				array(
					'id'         => '1471070',
					'regency_id' => '1471',
					'name'       => 'SENAPELAN',
				),
			76  =>
				array(
					'id'         => '1471080',
					'regency_id' => '1471',
					'name'       => 'RUMBAI',
				),
			77  =>
				array(
					'id'         => '1471081',
					'regency_id' => '1471',
					'name'       => 'RUMBAI PESISIR',
				),
			78  =>
				array(
					'id'         => '1473010',
					'regency_id' => '1473',
					'name'       => 'BUKIT KAPUR',
				),
			79  =>
				array(
					'id'         => '1473011',
					'regency_id' => '1473',
					'name'       => 'MEDANG KAMPAI',
				),
			80  =>
				array(
					'id'         => '1473012',
					'regency_id' => '1473',
					'name'       => 'SUNGAI SEMBILAN',
				),
			81  =>
				array(
					'id'         => '1473020',
					'regency_id' => '1473',
					'name'       => 'DUMAI BARAT',
				),
			82  =>
				array(
					'id'         => '1473021',
					'regency_id' => '1473',
					'name'       => 'DUMAI SELATAN',
				),
			83  =>
				array(
					'id'         => '1473030',
					'regency_id' => '1473',
					'name'       => 'DUMAI TIMUR',
				),
			84  =>
				array(
					'id'         => '1473031',
					'regency_id' => '1473',
					'name'       => 'DUMAI KOTA',
				),
			85  =>
				array(
					'id'         => '1501010',
					'regency_id' => '1501',
					'name'       => 'GUNUNG RAYA',
				),
			86  =>
				array(
					'id'         => '1501011',
					'regency_id' => '1501',
					'name'       => 'BUKIT KERMAN',
				),
			87  =>
				array(
					'id'         => '1501020',
					'regency_id' => '1501',
					'name'       => 'BATANG MERANGIN',
				),
			88  =>
				array(
					'id'         => '1501030',
					'regency_id' => '1501',
					'name'       => 'KELILING DANAU',
				),
			89  =>
				array(
					'id'         => '1501040',
					'regency_id' => '1501',
					'name'       => 'DANAU KERINCI',
				),
			90  =>
				array(
					'id'         => '1501050',
					'regency_id' => '1501',
					'name'       => 'SITINJAU LAUT',
				),
			91  =>
				array(
					'id'         => '1501070',
					'regency_id' => '1501',
					'name'       => 'AIR HANGAT',
				),
			92  =>
				array(
					'id'         => '1501071',
					'regency_id' => '1501',
					'name'       => 'AIR HANGAT TIMUR',
				),
			93  =>
				array(
					'id'         => '1501072',
					'regency_id' => '1501',
					'name'       => 'DEPATI VII',
				),
			94  =>
				array(
					'id'         => '1501073',
					'regency_id' => '1501',
					'name'       => 'AIR HANGAT BARAT',
				),
			95  =>
				array(
					'id'         => '1501080',
					'regency_id' => '1501',
					'name'       => 'GUNUNG KERINCI',
				),
			96  =>
				array(
					'id'         => '1501081',
					'regency_id' => '1501',
					'name'       => 'SIULAK',
				),
			97  =>
				array(
					'id'         => '1501082',
					'regency_id' => '1501',
					'name'       => 'SIULAK MUKAI',
				),
			98  =>
				array(
					'id'         => '1501090',
					'regency_id' => '1501',
					'name'       => 'KAYU ARO',
				),
			99  =>
				array(
					'id'         => '1501091',
					'regency_id' => '1501',
					'name'       => 'GUNUNG TUJUH',
				),
			100 =>
				array(
					'id'         => '1501092',
					'regency_id' => '1501',
					'name'       => 'KAYU ARO BARAT',
				),
			101 =>
				array(
					'id'         => '1502010',
					'regency_id' => '1502',
					'name'       => 'JANGKAT',
				),
			102 =>
				array(
					'id'         => '1502011',
					'regency_id' => '1502',
					'name'       => 'SUNGAI TENANG',
				),
			103 =>
				array(
					'id'         => '1502020',
					'regency_id' => '1502',
					'name'       => 'MUARA SIAU',
				),
			104 =>
				array(
					'id'         => '1502021',
					'regency_id' => '1502',
					'name'       => 'LEMBAH MASURAI',
				),
			105 =>
				array(
					'id'         => '1502022',
					'regency_id' => '1502',
					'name'       => 'TIANG PUMPUNG',
				),
			106 =>
				array(
					'id'         => '1502030',
					'regency_id' => '1502',
					'name'       => 'PAMENANG',
				),
			107 =>
				array(
					'id'         => '1502031',
					'regency_id' => '1502',
					'name'       => 'PAMENANG BARAT',
				),
			108 =>
				array(
					'id'         => '1502032',
					'regency_id' => '1502',
					'name'       => 'RENAH PAMENANG',
				),
			109 =>
				array(
					'id'         => '1502033',
					'regency_id' => '1502',
					'name'       => 'PAMENANG SELATAN',
				),
			110 =>
				array(
					'id'         => '1502040',
					'regency_id' => '1502',
					'name'       => 'BANGKO',
				),
			111 =>
				array(
					'id'         => '1502041',
					'regency_id' => '1502',
					'name'       => 'BANGKO BARAT',
				),
			112 =>
				array(
					'id'         => '1502042',
					'regency_id' => '1502',
					'name'       => 'NALO TANTAN',
				),
			113 =>
				array(
					'id'         => '1502043',
					'regency_id' => '1502',
					'name'       => 'BATANG MASUMAI',
				),
			114 =>
				array(
					'id'         => '1502050',
					'regency_id' => '1502',
					'name'       => 'SUNGAI MANAU',
				),
			115 =>
				array(
					'id'         => '1502051',
					'regency_id' => '1502',
					'name'       => 'RENAH PEMBARAP',
				),
			116 =>
				array(
					'id'         => '1502052',
					'regency_id' => '1502',
					'name'       => 'PANGKALAN JAMBU',
				),
			117 =>
				array(
					'id'         => '1502060',
					'regency_id' => '1502',
					'name'       => 'TABIR',
				),
			118 =>
				array(
					'id'         => '1502061',
					'regency_id' => '1502',
					'name'       => 'TABIR ULU',
				),
			119 =>
				array(
					'id'         => '1502062',
					'regency_id' => '1502',
					'name'       => 'TABIR SELATAN',
				),
			120 =>
				array(
					'id'         => '1502063',
					'regency_id' => '1502',
					'name'       => 'TABIR ILIR',
				),
			121 =>
				array(
					'id'         => '1502064',
					'regency_id' => '1502',
					'name'       => 'TABIR TIMUR',
				),
			122 =>
				array(
					'id'         => '1502065',
					'regency_id' => '1502',
					'name'       => 'TABIR LINTAS',
				),
			123 =>
				array(
					'id'         => '1502066',
					'regency_id' => '1502',
					'name'       => 'MARGO TABIR',
				),
			124 =>
				array(
					'id'         => '1502067',
					'regency_id' => '1502',
					'name'       => 'TABIR BARAT',
				),
			125 =>
				array(
					'id'         => '1503010',
					'regency_id' => '1503',
					'name'       => 'BATANG ASAI',
				),
			126 =>
				array(
					'id'         => '1503020',
					'regency_id' => '1503',
					'name'       => 'LIMUN',
				),
			127 =>
				array(
					'id'         => '1503021',
					'regency_id' => '1503',
					'name'       => 'CERMIN NAN GEDANG',
				),
			128 =>
				array(
					'id'         => '1503030',
					'regency_id' => '1503',
					'name'       => 'PELAWAN',
				),
			129 =>
				array(
					'id'         => '1503031',
					'regency_id' => '1503',
					'name'       => 'SINGKUT',
				),
			130 =>
				array(
					'id'         => '1503040',
					'regency_id' => '1503',
					'name'       => 'SAROLANGUN',
				),
			131 =>
				array(
					'id'         => '1503041',
					'regency_id' => '1503',
					'name'       => 'BATHIN VIII',
				),
			132 =>
				array(
					'id'         => '1503050',
					'regency_id' => '1503',
					'name'       => 'PAUH',
				),
			133 =>
				array(
					'id'         => '1503051',
					'regency_id' => '1503',
					'name'       => 'AIR HITAM',
				),
			134 =>
				array(
					'id'         => '1503060',
					'regency_id' => '1503',
					'name'       => 'MANDIANGIN',
				),
			135 =>
				array(
					'id'         => '1504010',
					'regency_id' => '1504',
					'name'       => 'MERSAM',
				),
			136 =>
				array(
					'id'         => '1504011',
					'regency_id' => '1504',
					'name'       => 'MARO SEBO ULU',
				),
			137 =>
				array(
					'id'         => '1504020',
					'regency_id' => '1504',
					'name'       => 'BATIN XXIV',
				),
			138 =>
				array(
					'id'         => '1504030',
					'regency_id' => '1504',
					'name'       => 'MUARA TEMBESI',
				),
			139 =>
				array(
					'id'         => '1504040',
					'regency_id' => '1504',
					'name'       => 'MUARA BULIAN',
				),
			140 =>
				array(
					'id'         => '1504041',
					'regency_id' => '1504',
					'name'       => 'BAJUBANG',
				),
			141 =>
				array(
					'id'         => '1504042',
					'regency_id' => '1504',
					'name'       => 'MARO SEBO ILIR',
				),
			142 =>
				array(
					'id'         => '1504050',
					'regency_id' => '1504',
					'name'       => 'PEMAYUNG',
				),
			143 =>
				array(
					'id'         => '1505010',
					'regency_id' => '1505',
					'name'       => 'MESTONG',
				),
			144 =>
				array(
					'id'         => '1505011',
					'regency_id' => '1505',
					'name'       => 'SUNGAI BAHAR',
				),
			145 =>
				array(
					'id'         => '1505012',
					'regency_id' => '1505',
					'name'       => 'BAHAR SELATAN',
				),
			146 =>
				array(
					'id'         => '1505013',
					'regency_id' => '1505',
					'name'       => 'BAHAR UTARA',
				),
			147 =>
				array(
					'id'         => '1505020',
					'regency_id' => '1505',
					'name'       => 'KUMPEH ULU',
				),
			148 =>
				array(
					'id'         => '1505021',
					'regency_id' => '1505',
					'name'       => 'SUNGAI GELAM',
				),
			149 =>
				array(
					'id'         => '1505030',
					'regency_id' => '1505',
					'name'       => 'KUMPEH',
				),
			150 =>
				array(
					'id'         => '1505040',
					'regency_id' => '1505',
					'name'       => 'MARO SEBO',
				),
			151 =>
				array(
					'id'         => '1505041',
					'regency_id' => '1505',
					'name'       => 'TAMAN RAJO',
				),
			152 =>
				array(
					'id'         => '1505050',
					'regency_id' => '1505',
					'name'       => 'JAMBI LUAR KOTA',
				),
			153 =>
				array(
					'id'         => '1505060',
					'regency_id' => '1505',
					'name'       => 'SEKERNAN',
				),
			154 =>
				array(
					'id'         => '1506010',
					'regency_id' => '1506',
					'name'       => 'MENDAHARA',
				),
			155 =>
				array(
					'id'         => '1506011',
					'regency_id' => '1506',
					'name'       => 'MENDAHARA ULU',
				),
			156 =>
				array(
					'id'         => '1506012',
					'regency_id' => '1506',
					'name'       => 'GERAGAI',
				),
			157 =>
				array(
					'id'         => '1506020',
					'regency_id' => '1506',
					'name'       => 'DENDANG',
				),
			158 =>
				array(
					'id'         => '1506031',
					'regency_id' => '1506',
					'name'       => 'MUARA SABAK BARAT',
				),
			159 =>
				array(
					'id'         => '1506032',
					'regency_id' => '1506',
					'name'       => 'MUARA SABAK TIMUR',
				),
			160 =>
				array(
					'id'         => '1506033',
					'regency_id' => '1506',
					'name'       => 'KUALA JAMBI',
				),
			161 =>
				array(
					'id'         => '1506040',
					'regency_id' => '1506',
					'name'       => 'RANTAU RASAU',
				),
			162 =>
				array(
					'id'         => '1506041',
					'regency_id' => '1506',
					'name'       => 'BERBAK',
				),
			163 =>
				array(
					'id'         => '1506050',
					'regency_id' => '1506',
					'name'       => 'NIPAH PANJANG',
				),
			164 =>
				array(
					'id'         => '1506060',
					'regency_id' => '1506',
					'name'       => 'SADU',
				),
			165 =>
				array(
					'id'         => '1507010',
					'regency_id' => '1507',
					'name'       => 'TUNGKAL ULU',
				),
			166 =>
				array(
					'id'         => '1507011',
					'regency_id' => '1507',
					'name'       => 'MERLUNG',
				),
			167 =>
				array(
					'id'         => '1507012',
					'regency_id' => '1507',
					'name'       => 'BATANG ASAM',
				),
			168 =>
				array(
					'id'         => '1507013',
					'regency_id' => '1507',
					'name'       => 'TEBING TINGGI',
				),
			169 =>
				array(
					'id'         => '1507014',
					'regency_id' => '1507',
					'name'       => 'RENAH MENDALUH',
				),
			170 =>
				array(
					'id'         => '1507015',
					'regency_id' => '1507',
					'name'       => 'MUARA PAPALIK',
				),
			171 =>
				array(
					'id'         => '1507020',
					'regency_id' => '1507',
					'name'       => 'PENGABUAN',
				),
			172 =>
				array(
					'id'         => '1507021',
					'regency_id' => '1507',
					'name'       => 'SENYERANG',
				),
			173 =>
				array(
					'id'         => '1507030',
					'regency_id' => '1507',
					'name'       => 'TUNGKAL ILIR',
				),
			174 =>
				array(
					'id'         => '1507031',
					'regency_id' => '1507',
					'name'       => 'BRAM ITAM',
				),
			175 =>
				array(
					'id'         => '1507032',
					'regency_id' => '1507',
					'name'       => 'SEBERANG KOTA',
				),
			176 =>
				array(
					'id'         => '1507040',
					'regency_id' => '1507',
					'name'       => 'BETARA',
				),
			177 =>
				array(
					'id'         => '1507041',
					'regency_id' => '1507',
					'name'       => 'KUALA BETARA',
				),
			178 =>
				array(
					'id'         => '1508010',
					'regency_id' => '1508',
					'name'       => 'TEBO ILIR',
				),
			179 =>
				array(
					'id'         => '1508011',
					'regency_id' => '1508',
					'name'       => 'MUARA TABIR',
				),
			180 =>
				array(
					'id'         => '1508020',
					'regency_id' => '1508',
					'name'       => 'TEBO TENGAH',
				),
			181 =>
				array(
					'id'         => '1508021',
					'regency_id' => '1508',
					'name'       => 'SUMAY',
				),
			182 =>
				array(
					'id'         => '1508022',
					'regency_id' => '1508',
					'name'       => 'TENGAH ILIR',
				),
			183 =>
				array(
					'id'         => '1508030',
					'regency_id' => '1508',
					'name'       => 'RIMBO BUJANG',
				),
			184 =>
				array(
					'id'         => '1508031',
					'regency_id' => '1508',
					'name'       => 'RIMBO ULU',
				),
			185 =>
				array(
					'id'         => '1508032',
					'regency_id' => '1508',
					'name'       => 'RIMBO ILIR',
				),
			186 =>
				array(
					'id'         => '1508040',
					'regency_id' => '1508',
					'name'       => 'TEBO ULU',
				),
			187 =>
				array(
					'id'         => '1508041',
					'regency_id' => '1508',
					'name'       => 'VII KOTO',
				),
			188 =>
				array(
					'id'         => '1508042',
					'regency_id' => '1508',
					'name'       => 'SERAI SERUMPUN',
				),
			189 =>
				array(
					'id'         => '1508043',
					'regency_id' => '1508',
					'name'       => 'VII KOTO ILIR',
				),
			190 =>
				array(
					'id'         => '1509010',
					'regency_id' => '1509',
					'name'       => 'PELEPAT',
				),
			191 =>
				array(
					'id'         => '1509011',
					'regency_id' => '1509',
					'name'       => 'PELEPAT ILIR',
				),
			192 =>
				array(
					'id'         => '1509021',
					'regency_id' => '1509',
					'name'       => 'BATHIN II BABEKO',
				),
			193 =>
				array(
					'id'         => '1509022',
					'regency_id' => '1509',
					'name'       => 'RIMBO TENGAH',
				),
			194 =>
				array(
					'id'         => '1509023',
					'regency_id' => '1509',
					'name'       => 'BUNGO DANI',
				),
			195 =>
				array(
					'id'         => '1509024',
					'regency_id' => '1509',
					'name'       => 'PASAR MUARA BUNGO',
				),
			196 =>
				array(
					'id'         => '1509025',
					'regency_id' => '1509',
					'name'       => 'BATHIN III',
				),
			197 =>
				array(
					'id'         => '1509030',
					'regency_id' => '1509',
					'name'       => 'RANTAU PANDAN',
				),
			198 =>
				array(
					'id'         => '1509031',
					'regency_id' => '1509',
					'name'       => 'MUKO-MUKO BATHIN VII',
				),
			199 =>
				array(
					'id'         => '1509032',
					'regency_id' => '1509',
					'name'       => 'BATHIN III ULU',
				),
			200 =>
				array(
					'id'         => '1509040',
					'regency_id' => '1509',
					'name'       => 'TANAH SEPENGGAL',
				),
			201 =>
				array(
					'id'         => '1509041',
					'regency_id' => '1509',
					'name'       => 'TANAH SEPENGGAL LINTAS',
				),
			202 =>
				array(
					'id'         => '1509050',
					'regency_id' => '1509',
					'name'       => 'TANAH TUMBUH',
				),
			203 =>
				array(
					'id'         => '1509051',
					'regency_id' => '1509',
					'name'       => 'LIMBUR LUBUK MENGKUANG',
				),
			204 =>
				array(
					'id'         => '1509052',
					'regency_id' => '1509',
					'name'       => 'BATHIN II PELAYANG',
				),
			205 =>
				array(
					'id'         => '1509060',
					'regency_id' => '1509',
					'name'       => 'JUJUHAN',
				),
			206 =>
				array(
					'id'         => '1509061',
					'regency_id' => '1509',
					'name'       => 'JUJUHAN ILIR',
				),
			207 =>
				array(
					'id'         => '1571010',
					'regency_id' => '1571',
					'name'       => 'KOTA BARU',
				),
			208 =>
				array(
					'id'         => '1571011',
					'regency_id' => '1571',
					'name'       => 'ALAM BARAJO',
				),
			209 =>
				array(
					'id'         => '1571020',
					'regency_id' => '1571',
					'name'       => 'JAMBI SELATAN',
				),
			210 =>
				array(
					'id'         => '1571021',
					'regency_id' => '1571',
					'name'       => 'PAAL MERAH',
				),
			211 =>
				array(
					'id'         => '1571030',
					'regency_id' => '1571',
					'name'       => 'JELUTUNG',
				),
			212 =>
				array(
					'id'         => '1571040',
					'regency_id' => '1571',
					'name'       => 'PASAR JAMBI',
				),
			213 =>
				array(
					'id'         => '1571050',
					'regency_id' => '1571',
					'name'       => 'TELANAIPURA',
				),
			214 =>
				array(
					'id'         => '1571051',
					'regency_id' => '1571',
					'name'       => 'DANAU SIPIN',
				),
			215 =>
				array(
					'id'         => '1571060',
					'regency_id' => '1571',
					'name'       => 'DANAU TELUK',
				),
			216 =>
				array(
					'id'         => '1571070',
					'regency_id' => '1571',
					'name'       => 'PELAYANGAN',
				),
			217 =>
				array(
					'id'         => '1571080',
					'regency_id' => '1571',
					'name'       => 'JAMBI TIMUR',
				),
			218 =>
				array(
					'id'         => '1572010',
					'regency_id' => '1572',
					'name'       => 'TANAH KAMPUNG',
				),
			219 =>
				array(
					'id'         => '1572020',
					'regency_id' => '1572',
					'name'       => 'KUMUN DEBAI',
				),
			220 =>
				array(
					'id'         => '1572030',
					'regency_id' => '1572',
					'name'       => 'SUNGAI PENUH',
				),
			221 =>
				array(
					'id'         => '1572031',
					'regency_id' => '1572',
					'name'       => 'PONDOK TINGGI',
				),
			222 =>
				array(
					'id'         => '1572032',
					'regency_id' => '1572',
					'name'       => 'SUNGAI BUNGKAL',
				),
			223 =>
				array(
					'id'         => '1572040',
					'regency_id' => '1572',
					'name'       => 'HAMPARAN RAWANG',
				),
			224 =>
				array(
					'id'         => '1572050',
					'regency_id' => '1572',
					'name'       => 'PESISIR BUKIT',
				),
			225 =>
				array(
					'id'         => '1572051',
					'regency_id' => '1572',
					'name'       => 'KOTO BARU',
				),
			226 =>
				array(
					'id'         => '1601052',
					'regency_id' => '1601',
					'name'       => 'LENGKITI',
				),
			227 =>
				array(
					'id'         => '1601070',
					'regency_id' => '1601',
					'name'       => 'SOSOH BUAY RAYAP',
				),
			228 =>
				array(
					'id'         => '1601080',
					'regency_id' => '1601',
					'name'       => 'PENGANDONAN',
				),
			229 =>
				array(
					'id'         => '1601081',
					'regency_id' => '1601',
					'name'       => 'SEMIDANG AJI',
				),
			230 =>
				array(
					'id'         => '1601082',
					'regency_id' => '1601',
					'name'       => 'ULU OGAN',
				),
			231 =>
				array(
					'id'         => '1601083',
					'regency_id' => '1601',
					'name'       => 'MUARA JAYA',
				),
			232 =>
				array(
					'id'         => '1601090',
					'regency_id' => '1601',
					'name'       => 'PENINJAUAN',
				),
			233 =>
				array(
					'id'         => '1601091',
					'regency_id' => '1601',
					'name'       => 'LUBUK BATANG',
				),
			234 =>
				array(
					'id'         => '1601092',
					'regency_id' => '1601',
					'name'       => 'SINAR PENINJAUAN',
				),
			235 =>
				array(
					'id'         => '1601093',
					'regency_id' => '1601',
					'name'       => 'KEDATON PENINJAUAN RAYA',
				),
			236 =>
				array(
					'id'         => '1601130',
					'regency_id' => '1601',
					'name'       => 'BATU RAJA TIMUR',
				),
			237 =>
				array(
					'id'         => '1601131',
					'regency_id' => '1601',
					'name'       => 'LUBUK RAJA',
				),
			238 =>
				array(
					'id'         => '1601140',
					'regency_id' => '1601',
					'name'       => 'BATU RAJA BARAT',
				),
			239 =>
				array(
					'id'         => '1602010',
					'regency_id' => '1602',
					'name'       => 'LEMPUING',
				),
			240 =>
				array(
					'id'         => '1602011',
					'regency_id' => '1602',
					'name'       => 'LEMPUING JAYA',
				),
			241 =>
				array(
					'id'         => '1602020',
					'regency_id' => '1602',
					'name'       => 'MESUJI',
				),
			242 =>
				array(
					'id'         => '1602021',
					'regency_id' => '1602',
					'name'       => 'SUNGAI MENANG',
				),
			243 =>
				array(
					'id'         => '1602022',
					'regency_id' => '1602',
					'name'       => 'MESUJI MAKMUR',
				),
			244 =>
				array(
					'id'         => '1602023',
					'regency_id' => '1602',
					'name'       => 'MESUJI RAYA',
				),
			245 =>
				array(
					'id'         => '1602030',
					'regency_id' => '1602',
					'name'       => 'TULUNG SELAPAN',
				),
			246 =>
				array(
					'id'         => '1602031',
					'regency_id' => '1602',
					'name'       => 'CENGAL',
				),
			247 =>
				array(
					'id'         => '1602040',
					'regency_id' => '1602',
					'name'       => 'PEDAMARAN',
				),
			248 =>
				array(
					'id'         => '1602041',
					'regency_id' => '1602',
					'name'       => 'PEDAMARAN TIMUR',
				),
			249 =>
				array(
					'id'         => '1602050',
					'regency_id' => '1602',
					'name'       => 'TANJUNG LUBUK',
				),
			250 =>
				array(
					'id'         => '1602051',
					'regency_id' => '1602',
					'name'       => 'TELUK GELAM',
				),
			251 =>
				array(
					'id'         => '1602060',
					'regency_id' => '1602',
					'name'       => 'KOTA KAYU AGUNG',
				),
			252 =>
				array(
					'id'         => '1602120',
					'regency_id' => '1602',
					'name'       => 'SIRAH PULAU PADANG',
				),
			253 =>
				array(
					'id'         => '1602121',
					'regency_id' => '1602',
					'name'       => 'JEJAWI',
				),
			254 =>
				array(
					'id'         => '1602130',
					'regency_id' => '1602',
					'name'       => 'PAMPANGAN',
				),
			255 =>
				array(
					'id'         => '1602131',
					'regency_id' => '1602',
					'name'       => 'PANGKALAN LAPAM',
				),
			256 =>
				array(
					'id'         => '1602140',
					'regency_id' => '1602',
					'name'       => 'AIR SUGIHAN',
				),
			257 =>
				array(
					'id'         => '1603010',
					'regency_id' => '1603',
					'name'       => 'SEMENDO DARAT LAUT',
				),
			258 =>
				array(
					'id'         => '1603011',
					'regency_id' => '1603',
					'name'       => 'SEMENDO DARAT ULU',
				),
			259 =>
				array(
					'id'         => '1603012',
					'regency_id' => '1603',
					'name'       => 'SEMENDO DARAT TENGAH',
				),
			260 =>
				array(
					'id'         => '1603020',
					'regency_id' => '1603',
					'name'       => 'TANJUNG AGUNG',
				),
			261 =>
				array(
					'id'         => '1603031',
					'regency_id' => '1603',
					'name'       => 'RAMBANG',
				),
			262 =>
				array(
					'id'         => '1603032',
					'regency_id' => '1603',
					'name'       => 'LUBAI',
				),
			263 =>
				array(
					'id'         => '1603033',
					'regency_id' => '1603',
					'name'       => 'LUBAI ULU',
				),
			264 =>
				array(
					'id'         => '1603040',
					'regency_id' => '1603',
					'name'       => 'LAWANG KIDUL',
				),
			265 =>
				array(
					'id'         => '1603050',
					'regency_id' => '1603',
					'name'       => 'MUARA ENIM',
				),
			266 =>
				array(
					'id'         => '1603051',
					'regency_id' => '1603',
					'name'       => 'UJAN MAS',
				),
			267 =>
				array(
					'id'         => '1603060',
					'regency_id' => '1603',
					'name'       => 'GUNUNG MEGANG',
				),
			268 =>
				array(
					'id'         => '1603061',
					'regency_id' => '1603',
					'name'       => 'BENAKAT',
				),
			269 =>
				array(
					'id'         => '1603062',
					'regency_id' => '1603',
					'name'       => 'BELIMBING',
				),
			270 =>
				array(
					'id'         => '1603070',
					'regency_id' => '1603',
					'name'       => 'RAMBANG DANGKU',
				),
			271 =>
				array(
					'id'         => '1603090',
					'regency_id' => '1603',
					'name'       => 'GELUMBANG',
				),
			272 =>
				array(
					'id'         => '1603091',
					'regency_id' => '1603',
					'name'       => 'LEMBAK',
				),
			273 =>
				array(
					'id'         => '1603092',
					'regency_id' => '1603',
					'name'       => 'SUNGAI ROTAN',
				),
			274 =>
				array(
					'id'         => '1603093',
					'regency_id' => '1603',
					'name'       => 'MUARA BELIDA',
				),
			275 =>
				array(
					'id'         => '1603094',
					'regency_id' => '1603',
					'name'       => 'KELEKAR',
				),
			276 =>
				array(
					'id'         => '1603095',
					'regency_id' => '1603',
					'name'       => 'BELIDA DARAT',
				),
			277 =>
				array(
					'id'         => '1604011',
					'regency_id' => '1604',
					'name'       => 'TANJUNG SAKTI PUMI',
				),
			278 =>
				array(
					'id'         => '1604012',
					'regency_id' => '1604',
					'name'       => 'TANJUNG SAKTI PUMU',
				),
			279 =>
				array(
					'id'         => '1604040',
					'regency_id' => '1604',
					'name'       => 'KOTA AGUNG',
				),
			280 =>
				array(
					'id'         => '1604041',
					'regency_id' => '1604',
					'name'       => 'MULAK ULU',
				),
			281 =>
				array(
					'id'         => '1604042',
					'regency_id' => '1604',
					'name'       => 'TANJUNG TEBAT',
				),
			282 =>
				array(
					'id'         => '1604043',
					'regency_id' => '1604',
					'name'       => 'MULAK SEBINGKAI',
				),
			283 =>
				array(
					'id'         => '1604050',
					'regency_id' => '1604',
					'name'       => 'PULAU PINANG',
				),
			284 =>
				array(
					'id'         => '1604051',
					'regency_id' => '1604',
					'name'       => 'PAGAR GUNUNG',
				),
			285 =>
				array(
					'id'         => '1604052',
					'regency_id' => '1604',
					'name'       => 'GUMAY ULU',
				),
			286 =>
				array(
					'id'         => '1604060',
					'regency_id' => '1604',
					'name'       => 'JARAI',
				),
			287 =>
				array(
					'id'         => '1604061',
					'regency_id' => '1604',
					'name'       => 'PAJAR BULAN',
				),
			288 =>
				array(
					'id'         => '1604062',
					'regency_id' => '1604',
					'name'       => 'MUARA PAYANG',
				),
			289 =>
				array(
					'id'         => '1604063',
					'regency_id' => '1604',
					'name'       => 'SUKAMERINDU',
				),
			290 =>
				array(
					'id'         => '1604111',
					'regency_id' => '1604',
					'name'       => 'KIKIM BARAT',
				),
			291 =>
				array(
					'id'         => '1604112',
					'regency_id' => '1604',
					'name'       => 'KIKIM TIMUR',
				),
			292 =>
				array(
					'id'         => '1604113',
					'regency_id' => '1604',
					'name'       => 'KIKIM SELATAN',
				),
			293 =>
				array(
					'id'         => '1604114',
					'regency_id' => '1604',
					'name'       => 'KIKIM TENGAH',
				),
			294 =>
				array(
					'id'         => '1604120',
					'regency_id' => '1604',
					'name'       => 'LAHAT',
				),
			295 =>
				array(
					'id'         => '1604121',
					'regency_id' => '1604',
					'name'       => 'GUMAY TALANG',
				),
			296 =>
				array(
					'id'         => '1604122',
					'regency_id' => '1604',
					'name'       => 'PSEKSU',
				),
			297 =>
				array(
					'id'         => '1604123',
					'regency_id' => '1604',
					'name'       => 'LAHAT SELATAN',
				),
			298 =>
				array(
					'id'         => '1604131',
					'regency_id' => '1604',
					'name'       => 'MERAPI BARAT',
				),
			299 =>
				array(
					'id'         => '1604132',
					'regency_id' => '1604',
					'name'       => 'MERAPI TIMUR',
				),
			300 =>
				array(
					'id'         => '1604133',
					'regency_id' => '1604',
					'name'       => 'MERAPI SELATAN',
				),
			301 =>
				array(
					'id'         => '1605030',
					'regency_id' => '1605',
					'name'       => 'SUKU TENGAH LAKITAN ULU',
				),
			302 =>
				array(
					'id'         => '1605031',
					'regency_id' => '1605',
					'name'       => 'SELANGIT',
				),
			303 =>
				array(
					'id'         => '1605032',
					'regency_id' => '1605',
					'name'       => 'SUMBER HARTA',
				),
			304 =>
				array(
					'id'         => '1605040',
					'regency_id' => '1605',
					'name'       => 'TUGUMULYO',
				),
			305 =>
				array(
					'id'         => '1605041',
					'regency_id' => '1605',
					'name'       => 'PURWODADI',
				),
			306 =>
				array(
					'id'         => '1605050',
					'regency_id' => '1605',
					'name'       => 'MUARA BELITI',
				),
			307 =>
				array(
					'id'         => '1605051',
					'regency_id' => '1605',
					'name'       => 'TIANG PUMPUNG KEPUNGUT',
				),
			308 =>
				array(
					'id'         => '1605060',
					'regency_id' => '1605',
					'name'       => 'JAYALOKA',
				),
			309 =>
				array(
					'id'         => '1605061',
					'regency_id' => '1605',
					'name'       => 'SUKA KARYA',
				),
			310 =>
				array(
					'id'         => '1605070',
					'regency_id' => '1605',
					'name'       => 'MUARA KELINGI',
				),
			311 =>
				array(
					'id'         => '1605071',
					'regency_id' => '1605',
					'name'       => 'BULANG TENGAH SUKU ULU',
				),
			312 =>
				array(
					'id'         => '1605072',
					'regency_id' => '1605',
					'name'       => 'TUAH NEGERI',
				),
			313 =>
				array(
					'id'         => '1605080',
					'regency_id' => '1605',
					'name'       => 'MUARA LAKITAN',
				),
			314 =>
				array(
					'id'         => '1605090',
					'regency_id' => '1605',
					'name'       => 'MEGANG SAKTI',
				),
			315 =>
				array(
					'id'         => '1606010',
					'regency_id' => '1606',
					'name'       => 'SANGA DESA',
				),
			316 =>
				array(
					'id'         => '1606020',
					'regency_id' => '1606',
					'name'       => 'BABAT TOMAN',
				),
			317 =>
				array(
					'id'         => '1606021',
					'regency_id' => '1606',
					'name'       => 'BATANGHARI LEKO',
				),
			318 =>
				array(
					'id'         => '1606022',
					'regency_id' => '1606',
					'name'       => 'PLAKAT TINGGI',
				),
			319 =>
				array(
					'id'         => '1606023',
					'regency_id' => '1606',
					'name'       => 'LAWANG WETAN',
				),
			320 =>
				array(
					'id'         => '1606030',
					'regency_id' => '1606',
					'name'       => 'SUNGAI KERUH',
				),
			321 =>
				array(
					'id'         => '1606040',
					'regency_id' => '1606',
					'name'       => 'SEKAYU',
				),
			322 =>
				array(
					'id'         => '1606041',
					'regency_id' => '1606',
					'name'       => 'LAIS',
				),
			323 =>
				array(
					'id'         => '1606090',
					'regency_id' => '1606',
					'name'       => 'SUNGAI LILIN',
				),
			324 =>
				array(
					'id'         => '1606091',
					'regency_id' => '1606',
					'name'       => 'KELUANG',
				),
			325 =>
				array(
					'id'         => '1606092',
					'regency_id' => '1606',
					'name'       => 'BABAT SUPAT',
				),
			326 =>
				array(
					'id'         => '1606100',
					'regency_id' => '1606',
					'name'       => 'BAYUNG LENCIR',
				),
			327 =>
				array(
					'id'         => '1606101',
					'regency_id' => '1606',
					'name'       => 'LALAN',
				),
			328 =>
				array(
					'id'         => '1606102',
					'regency_id' => '1606',
					'name'       => 'TUNGKAL JAYA',
				),
			329 =>
				array(
					'id'         => '1607010',
					'regency_id' => '1607',
					'name'       => 'RANTAU BAYUR',
				),
			330 =>
				array(
					'id'         => '1607020',
					'regency_id' => '1607',
					'name'       => 'BETUNG',
				),
			331 =>
				array(
					'id'         => '1607021',
					'regency_id' => '1607',
					'name'       => 'SUAK TAPEH',
				),
			332 =>
				array(
					'id'         => '1607030',
					'regency_id' => '1607',
					'name'       => 'PULAU RIMAU',
				),
			333 =>
				array(
					'id'         => '1607031',
					'regency_id' => '1607',
					'name'       => 'TUNGKAL ILIR',
				),
			334 =>
				array(
					'id'         => '1607040',
					'regency_id' => '1607',
					'name'       => 'BANYUASIN III',
				),
			335 =>
				array(
					'id'         => '1607041',
					'regency_id' => '1607',
					'name'       => 'SEMBAWA',
				),
			336 =>
				array(
					'id'         => '1607050',
					'regency_id' => '1607',
					'name'       => 'TALANG KELAPA',
				),
			337 =>
				array(
					'id'         => '1607051',
					'regency_id' => '1607',
					'name'       => 'TANJUNG LAGO',
				),
			338 =>
				array(
					'id'         => '1607060',
					'regency_id' => '1607',
					'name'       => 'BANYUASIN I',
				),
			339 =>
				array(
					'id'         => '1607061',
					'regency_id' => '1607',
					'name'       => 'AIR KUMBANG',
				),
			340 =>
				array(
					'id'         => '1607070',
					'regency_id' => '1607',
					'name'       => 'RAMBUTAN',
				),
			341 =>
				array(
					'id'         => '1607080',
					'regency_id' => '1607',
					'name'       => 'MUARA PADANG',
				),
			342 =>
				array(
					'id'         => '1607081',
					'regency_id' => '1607',
					'name'       => 'MUARA SUGIHAN',
				),
			343 =>
				array(
					'id'         => '1607090',
					'regency_id' => '1607',
					'name'       => 'MAKARTI JAYA',
				),
			344 =>
				array(
					'id'         => '1607091',
					'regency_id' => '1607',
					'name'       => 'AIR SALEH',
				),
			345 =>
				array(
					'id'         => '1607100',
					'regency_id' => '1607',
					'name'       => 'BANYUASIN II',
				),
			346 =>
				array(
					'id'         => '1607110',
					'regency_id' => '1607',
					'name'       => 'MUARA TELANG',
				),
			347 =>
				array(
					'id'         => '1607111',
					'regency_id' => '1607',
					'name'       => 'SUMBER MARGA TELANG',
				),
			348 =>
				array(
					'id'         => '1608010',
					'regency_id' => '1608',
					'name'       => 'MEKAKAU ILIR',
				),
			349 =>
				array(
					'id'         => '1608020',
					'regency_id' => '1608',
					'name'       => 'BANDING AGUNG',
				),
			350 =>
				array(
					'id'         => '1608021',
					'regency_id' => '1608',
					'name'       => 'WARKUK RANAU SELATAN',
				),
			351 =>
				array(
					'id'         => '1608022',
					'regency_id' => '1608',
					'name'       => 'BUAY PEMATANG RIBU RANAU TENGAH',
				),
			352 =>
				array(
					'id'         => '1608030',
					'regency_id' => '1608',
					'name'       => 'BUAY PEMACA',
				),
			353 =>
				array(
					'id'         => '1608040',
					'regency_id' => '1608',
					'name'       => 'SIMPANG',
				),
			354 =>
				array(
					'id'         => '1608041',
					'regency_id' => '1608',
					'name'       => 'BUANA PEMACA',
				),
			355 =>
				array(
					'id'         => '1608050',
					'regency_id' => '1608',
					'name'       => 'MUARADUA',
				),
			356 =>
				array(
					'id'         => '1608051',
					'regency_id' => '1608',
					'name'       => 'BUAY RAWAN',
				),
			357 =>
				array(
					'id'         => '1608060',
					'regency_id' => '1608',
					'name'       => 'BUAY SANDANG AJI',
				),
			358 =>
				array(
					'id'         => '1608061',
					'regency_id' => '1608',
					'name'       => 'TIGA DIHAJI',
				),
			359 =>
				array(
					'id'         => '1608070',
					'regency_id' => '1608',
					'name'       => 'BUAY RUNJUNG',
				),
			360 =>
				array(
					'id'         => '1608071',
					'regency_id' => '1608',
					'name'       => 'RUNJUNG AGUNG',
				),
			361 =>
				array(
					'id'         => '1608080',
					'regency_id' => '1608',
					'name'       => 'KISAM TINGGI',
				),
			362 =>
				array(
					'id'         => '1608090',
					'regency_id' => '1608',
					'name'       => 'MUARADUA KISAM',
				),
			363 =>
				array(
					'id'         => '1608091',
					'regency_id' => '1608',
					'name'       => 'KISAM ILIR',
				),
			364 =>
				array(
					'id'         => '1608100',
					'regency_id' => '1608',
					'name'       => 'PULAU BERINGIN',
				),
			365 =>
				array(
					'id'         => '1608101',
					'regency_id' => '1608',
					'name'       => 'SINDANG DANAU',
				),
			366 =>
				array(
					'id'         => '1608102',
					'regency_id' => '1608',
					'name'       => 'SUNGAI ARE',
				),
			367 =>
				array(
					'id'         => '1609010',
					'regency_id' => '1609',
					'name'       => 'MARTAPURA',
				),
			368 =>
				array(
					'id'         => '1609011',
					'regency_id' => '1609',
					'name'       => 'BUNGA MAYANG',
				),
			369 =>
				array(
					'id'         => '1609012',
					'regency_id' => '1609',
					'name'       => 'JAYA PURA',
				),
			370 =>
				array(
					'id'         => '1609020',
					'regency_id' => '1609',
					'name'       => 'BUAY PEMUKA PELIUNG',
				),
			371 =>
				array(
					'id'         => '1609030',
					'regency_id' => '1609',
					'name'       => 'BUAY MADANG',
				),
			372 =>
				array(
					'id'         => '1609031',
					'regency_id' => '1609',
					'name'       => 'BUAY MADANG TIMUR',
				),
			373 =>
				array(
					'id'         => '1609032',
					'regency_id' => '1609',
					'name'       => 'BUAY PEMUKA BANGSA RAJA',
				),
			374 =>
				array(
					'id'         => '1609040',
					'regency_id' => '1609',
					'name'       => 'MADANG SUKU II',
				),
			375 =>
				array(
					'id'         => '1609041',
					'regency_id' => '1609',
					'name'       => 'MADANG SUKU III',
				),
			376 =>
				array(
					'id'         => '1609050',
					'regency_id' => '1609',
					'name'       => 'MADANG SUKU I',
				),
			377 =>
				array(
					'id'         => '1609051',
					'regency_id' => '1609',
					'name'       => 'BELITANG MADANG RAYA',
				),
			378 =>
				array(
					'id'         => '1609060',
					'regency_id' => '1609',
					'name'       => 'BELITANG',
				),
			379 =>
				array(
					'id'         => '1609061',
					'regency_id' => '1609',
					'name'       => 'BELITANG JAYA',
				),
			380 =>
				array(
					'id'         => '1609070',
					'regency_id' => '1609',
					'name'       => 'BELITANG III',
				),
			381 =>
				array(
					'id'         => '1609080',
					'regency_id' => '1609',
					'name'       => 'BELITANG II',
				),
			382 =>
				array(
					'id'         => '1609081',
					'regency_id' => '1609',
					'name'       => 'BELITANG MULYA',
				),
			383 =>
				array(
					'id'         => '1609090',
					'regency_id' => '1609',
					'name'       => 'SEMENDAWAI SUKU III',
				),
			384 =>
				array(
					'id'         => '1609091',
					'regency_id' => '1609',
					'name'       => 'SEMENDAWAI TIMUR',
				),
			385 =>
				array(
					'id'         => '1609100',
					'regency_id' => '1609',
					'name'       => 'CEMPAKA',
				),
			386 =>
				array(
					'id'         => '1609101',
					'regency_id' => '1609',
					'name'       => 'SEMENDAWAI BARAT',
				),
			387 =>
				array(
					'id'         => '1610010',
					'regency_id' => '1610',
					'name'       => 'MUARA KUANG',
				),
			388 =>
				array(
					'id'         => '1610011',
					'regency_id' => '1610',
					'name'       => 'RAMBANG KUANG',
				),
			389 =>
				array(
					'id'         => '1610012',
					'regency_id' => '1610',
					'name'       => 'LUBUK KELIAT',
				),
			390 =>
				array(
					'id'         => '1610020',
					'regency_id' => '1610',
					'name'       => 'TANJUNG BATU',
				),
			391 =>
				array(
					'id'         => '1610021',
					'regency_id' => '1610',
					'name'       => 'PAYARAMAN',
				),
			392 =>
				array(
					'id'         => '1610030',
					'regency_id' => '1610',
					'name'       => 'RANTAU ALAI',
				),
			393 =>
				array(
					'id'         => '1610031',
					'regency_id' => '1610',
					'name'       => 'KANDIS',
				),
			394 =>
				array(
					'id'         => '1610040',
					'regency_id' => '1610',
					'name'       => 'TANJUNG RAJA',
				),
			395 =>
				array(
					'id'         => '1610041',
					'regency_id' => '1610',
					'name'       => 'RANTAU PANJANG',
				),
			396 =>
				array(
					'id'         => '1610042',
					'regency_id' => '1610',
					'name'       => 'SUNGAI PINANG',
				),
			397 =>
				array(
					'id'         => '1610050',
					'regency_id' => '1610',
					'name'       => 'PEMULUTAN',
				),
			398 =>
				array(
					'id'         => '1610051',
					'regency_id' => '1610',
					'name'       => 'PEMULUTAN SELATAN',
				),
			399 =>
				array(
					'id'         => '1610052',
					'regency_id' => '1610',
					'name'       => 'PEMULUTAN BARAT',
				),
			400 =>
				array(
					'id'         => '1610060',
					'regency_id' => '1610',
					'name'       => 'INDRALAYA',
				),
			401 =>
				array(
					'id'         => '1610061',
					'regency_id' => '1610',
					'name'       => 'INDRALAYA UTARA',
				),
			402 =>
				array(
					'id'         => '1610062',
					'regency_id' => '1610',
					'name'       => 'INDRALAYA SELATAN',
				),
			403 =>
				array(
					'id'         => '1611010',
					'regency_id' => '1611',
					'name'       => 'MUARA PINANG',
				),
			404 =>
				array(
					'id'         => '1611020',
					'regency_id' => '1611',
					'name'       => 'LINTANG KANAN',
				),
			405 =>
				array(
					'id'         => '1611030',
					'regency_id' => '1611',
					'name'       => 'PENDOPO',
				),
			406 =>
				array(
					'id'         => '1611031',
					'regency_id' => '1611',
					'name'       => 'PENDOPO BARAT',
				),
			407 =>
				array(
					'id'         => '1611040',
					'regency_id' => '1611',
					'name'       => 'PASEMAH AIR KERUH',
				),
			408 =>
				array(
					'id'         => '1611050',
					'regency_id' => '1611',
					'name'       => 'ULU MUSI',
				),
			409 =>
				array(
					'id'         => '1611051',
					'regency_id' => '1611',
					'name'       => 'SIKAP DALAM',
				),
			410 =>
				array(
					'id'         => '1611060',
					'regency_id' => '1611',
					'name'       => 'TALANG PADANG',
				),
			411 =>
				array(
					'id'         => '1611070',
					'regency_id' => '1611',
					'name'       => 'TEBING TINGGI',
				),
			412 =>
				array(
					'id'         => '1611071',
					'regency_id' => '1611',
					'name'       => 'SALING',
				),
			413 =>
				array(
					'id'         => '1612010',
					'regency_id' => '1612',
					'name'       => 'TALANG UBI',
				),
			414 =>
				array(
					'id'         => '1612020',
					'regency_id' => '1612',
					'name'       => 'TANAH ABANG',
				),
			415 =>
				array(
					'id'         => '1612030',
					'regency_id' => '1612',
					'name'       => 'ABAB',
				),
			416 =>
				array(
					'id'         => '1612040',
					'regency_id' => '1612',
					'name'       => 'PENUKAL',
				),
			417 =>
				array(
					'id'         => '1612050',
					'regency_id' => '1612',
					'name'       => 'PENUKAL UTARA',
				),
			418 =>
				array(
					'id'         => '1613010',
					'regency_id' => '1613',
					'name'       => 'ULU RAWAS',
				),
			419 =>
				array(
					'id'         => '1613020',
					'regency_id' => '1613',
					'name'       => 'KARANG JAYA',
				),
			420 =>
				array(
					'id'         => '1613030',
					'regency_id' => '1613',
					'name'       => 'RAWAS ULU',
				),
			421 =>
				array(
					'id'         => '1613040',
					'regency_id' => '1613',
					'name'       => 'RUPIT',
				),
			422 =>
				array(
					'id'         => '1613050',
					'regency_id' => '1613',
					'name'       => 'KARANG DAPO',
				),
			423 =>
				array(
					'id'         => '1613060',
					'regency_id' => '1613',
					'name'       => 'RAWAS ILIR',
				),
			424 =>
				array(
					'id'         => '1613070',
					'regency_id' => '1613',
					'name'       => 'NIBUNG',
				),
			425 =>
				array(
					'id'         => '1671010',
					'regency_id' => '1671',
					'name'       => 'ILIR BARAT II',
				),
			426 =>
				array(
					'id'         => '1671011',
					'regency_id' => '1671',
					'name'       => 'GANDUS',
				),
			427 =>
				array(
					'id'         => '1671020',
					'regency_id' => '1671',
					'name'       => 'SEBERANG ULU I',
				),
			428 =>
				array(
					'id'         => '1671021',
					'regency_id' => '1671',
					'name'       => 'KERTAPATI',
				),
			429 =>
				array(
					'id'         => '1671022',
					'regency_id' => '1671',
					'name'       => 'JAKABARING',
				),
			430 =>
				array(
					'id'         => '1671030',
					'regency_id' => '1671',
					'name'       => 'SEBERANG ULU II',
				),
			431 =>
				array(
					'id'         => '1671031',
					'regency_id' => '1671',
					'name'       => 'PLAJU',
				),
			432 =>
				array(
					'id'         => '1671040',
					'regency_id' => '1671',
					'name'       => 'ILIR BARAT I',
				),
			433 =>
				array(
					'id'         => '1671041',
					'regency_id' => '1671',
					'name'       => 'BUKIT KECIL',
				),
			434 =>
				array(
					'id'         => '1671050',
					'regency_id' => '1671',
					'name'       => 'ILIR TIMUR I',
				),
			435 =>
				array(
					'id'         => '1671051',
					'regency_id' => '1671',
					'name'       => 'KEMUNING',
				),
			436 =>
				array(
					'id'         => '1671060',
					'regency_id' => '1671',
					'name'       => 'ILIR TIMUR II',
				),
			437 =>
				array(
					'id'         => '1671061',
					'regency_id' => '1671',
					'name'       => 'KALIDONI',
				),
			438 =>
				array(
					'id'         => '1671062',
					'regency_id' => '1671',
					'name'       => 'ILIR TIMUR III',
				),
			439 =>
				array(
					'id'         => '1671070',
					'regency_id' => '1671',
					'name'       => 'SAKO',
				),
			440 =>
				array(
					'id'         => '1671071',
					'regency_id' => '1671',
					'name'       => 'SEMATANG BORANG',
				),
			441 =>
				array(
					'id'         => '1671080',
					'regency_id' => '1671',
					'name'       => 'SUKARAMI',
				),
			442 =>
				array(
					'id'         => '1671081',
					'regency_id' => '1671',
					'name'       => 'ALANG ALANG LEBAR',
				),
			443 =>
				array(
					'id'         => '1672010',
					'regency_id' => '1672',
					'name'       => 'RAMBANG KAPAK TENGAH',
				),
			444 =>
				array(
					'id'         => '1672020',
					'regency_id' => '1672',
					'name'       => 'PRABUMULIH TIMUR',
				),
			445 =>
				array(
					'id'         => '1672021',
					'regency_id' => '1672',
					'name'       => 'PRABUMULIH SELATAN',
				),
			446 =>
				array(
					'id'         => '1672030',
					'regency_id' => '1672',
					'name'       => 'PRABUMULIH BARAT',
				),
			447 =>
				array(
					'id'         => '1672031',
					'regency_id' => '1672',
					'name'       => 'PRABUMULIH UTARA',
				),
			448 =>
				array(
					'id'         => '1672040',
					'regency_id' => '1672',
					'name'       => 'CAMBAI',
				),
			449 =>
				array(
					'id'         => '1673010',
					'regency_id' => '1673',
					'name'       => 'DEMPO SELATAN',
				),
			450 =>
				array(
					'id'         => '1673011',
					'regency_id' => '1673',
					'name'       => 'DEMPO TENGAH',
				),
			451 =>
				array(
					'id'         => '1673020',
					'regency_id' => '1673',
					'name'       => 'DEMPO UTARA',
				),
			452 =>
				array(
					'id'         => '1673030',
					'regency_id' => '1673',
					'name'       => 'PAGAR ALAM SELATAN',
				),
			453 =>
				array(
					'id'         => '1673040',
					'regency_id' => '1673',
					'name'       => 'PAGAR ALAM UTARA',
				),
			454 =>
				array(
					'id'         => '1674011',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU BARAT I',
				),
			455 =>
				array(
					'id'         => '1674012',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU BARAT II',
				),
			456 =>
				array(
					'id'         => '1674021',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU SELATAN I',
				),
			457 =>
				array(
					'id'         => '1674022',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU SELATAN II',
				),
			458 =>
				array(
					'id'         => '1674031',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU TIMUR I',
				),
			459 =>
				array(
					'id'         => '1674032',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU TIMUR II',
				),
			460 =>
				array(
					'id'         => '1674041',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU UTARA I',
				),
			461 =>
				array(
					'id'         => '1674042',
					'regency_id' => '1674',
					'name'       => 'LUBUK LINGGAU UTARA II',
				),
			462 =>
				array(
					'id'         => '1701040',
					'regency_id' => '1701',
					'name'       => 'MANNA',
				),
			463 =>
				array(
					'id'         => '1701041',
					'regency_id' => '1701',
					'name'       => 'KOTA MANNA',
				),
			464 =>
				array(
					'id'         => '1701042',
					'regency_id' => '1701',
					'name'       => 'KEDURANG',
				),
			465 =>
				array(
					'id'         => '1701043',
					'regency_id' => '1701',
					'name'       => 'BUNGA MAS',
				),
			466 =>
				array(
					'id'         => '1701044',
					'regency_id' => '1701',
					'name'       => 'PASAR MANNA',
				),
			467 =>
				array(
					'id'         => '1701045',
					'regency_id' => '1701',
					'name'       => 'KEDURANG ILIR',
				),
			468 =>
				array(
					'id'         => '1701050',
					'regency_id' => '1701',
					'name'       => 'SEGINIM',
				),
			469 =>
				array(
					'id'         => '1701051',
					'regency_id' => '1701',
					'name'       => 'AIR NIPIS',
				),
			470 =>
				array(
					'id'         => '1701060',
					'regency_id' => '1701',
					'name'       => 'PINO',
				),
			471 =>
				array(
					'id'         => '1701061',
					'regency_id' => '1701',
					'name'       => 'PINORAYA',
				),
			472 =>
				array(
					'id'         => '1701062',
					'regency_id' => '1701',
					'name'       => 'ULU MANNA',
				),
			473 =>
				array(
					'id'         => '1702020',
					'regency_id' => '1702',
					'name'       => 'KOTA PADANG',
				),
			474 =>
				array(
					'id'         => '1702021',
					'regency_id' => '1702',
					'name'       => 'SINDANG BELITI ILIR',
				),
			475 =>
				array(
					'id'         => '1702030',
					'regency_id' => '1702',
					'name'       => 'PADANG ULAK TANDING',
				),
			476 =>
				array(
					'id'         => '1702031',
					'regency_id' => '1702',
					'name'       => 'SINDANG KELINGI',
				),
			477 =>
				array(
					'id'         => '1702032',
					'regency_id' => '1702',
					'name'       => 'BINDU RIANG',
				),
			478 =>
				array(
					'id'         => '1702033',
					'regency_id' => '1702',
					'name'       => 'SINDANG BELITI ULU',
				),
			479 =>
				array(
					'id'         => '1702034',
					'regency_id' => '1702',
					'name'       => 'SINDANG DATARAN',
				),
			480 =>
				array(
					'id'         => '1702040',
					'regency_id' => '1702',
					'name'       => 'CURUP',
				),
			481 =>
				array(
					'id'         => '1702041',
					'regency_id' => '1702',
					'name'       => 'BERMANI ULU',
				),
			482 =>
				array(
					'id'         => '1702042',
					'regency_id' => '1702',
					'name'       => 'SELUPU REJANG',
				),
			483 =>
				array(
					'id'         => '1702043',
					'regency_id' => '1702',
					'name'       => 'CURUP SELATAN',
				),
			484 =>
				array(
					'id'         => '1702044',
					'regency_id' => '1702',
					'name'       => 'CURUP TENGAH',
				),
			485 =>
				array(
					'id'         => '1702045',
					'regency_id' => '1702',
					'name'       => 'BERMANI ULU RAYA',
				),
			486 =>
				array(
					'id'         => '1702046',
					'regency_id' => '1702',
					'name'       => 'CURUP UTARA',
				),
			487 =>
				array(
					'id'         => '1702047',
					'regency_id' => '1702',
					'name'       => 'CURUP TIMUR',
				),
			488 =>
				array(
					'id'         => '1703010',
					'regency_id' => '1703',
					'name'       => 'ENGGANO',
				),
			489 =>
				array(
					'id'         => '1703050',
					'regency_id' => '1703',
					'name'       => 'KERKAP',
				),
			490 =>
				array(
					'id'         => '1703051',
					'regency_id' => '1703',
					'name'       => 'AIR NAPAL',
				),
			491 =>
				array(
					'id'         => '1703052',
					'regency_id' => '1703',
					'name'       => 'AIR BESI',
				),
			492 =>
				array(
					'id'         => '1703053',
					'regency_id' => '1703',
					'name'       => 'HULU PALIK',
				),
			493 =>
				array(
					'id'         => '1703054',
					'regency_id' => '1703',
					'name'       => 'TANJUNG AGUNG PALIK',
				),
			494 =>
				array(
					'id'         => '1703060',
					'regency_id' => '1703',
					'name'       => 'ARGA MAKMUR',
				),
			495 =>
				array(
					'id'         => '1703061',
					'regency_id' => '1703',
					'name'       => 'ARMA JAYA',
				),
			496 =>
				array(
					'id'         => '1703070',
					'regency_id' => '1703',
					'name'       => 'LAIS',
				),
			497 =>
				array(
					'id'         => '1703071',
					'regency_id' => '1703',
					'name'       => 'BATIK NAU',
				),
			498 =>
				array(
					'id'         => '1703072',
					'regency_id' => '1703',
					'name'       => 'GIRI MULYA',
				),
			499 =>
				array(
					'id'         => '1703073',
					'regency_id' => '1703',
					'name'       => 'AIR PADANG',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '1703080',
					'regency_id' => '1703',
					'name'       => 'PADANG JAYA',
				),
			1   =>
				array(
					'id'         => '1703090',
					'regency_id' => '1703',
					'name'       => 'KETAHUN',
				),
			2   =>
				array(
					'id'         => '1703091',
					'regency_id' => '1703',
					'name'       => 'NAPAL PUTIH',
				),
			3   =>
				array(
					'id'         => '1703092',
					'regency_id' => '1703',
					'name'       => 'ULOK KUPAI',
				),
			4   =>
				array(
					'id'         => '1703093',
					'regency_id' => '1703',
					'name'       => 'PINANG RAYA',
				),
			5   =>
				array(
					'id'         => '1703100',
					'regency_id' => '1703',
					'name'       => 'PUTRI HIJAU',
				),
			6   =>
				array(
					'id'         => '1703101',
					'regency_id' => '1703',
					'name'       => 'MARGA SAKTI SEBELAT',
				),
			7   =>
				array(
					'id'         => '1704010',
					'regency_id' => '1704',
					'name'       => 'NASAL',
				),
			8   =>
				array(
					'id'         => '1704020',
					'regency_id' => '1704',
					'name'       => 'MAJE',
				),
			9   =>
				array(
					'id'         => '1704030',
					'regency_id' => '1704',
					'name'       => 'KAUR SELATAN',
				),
			10  =>
				array(
					'id'         => '1704031',
					'regency_id' => '1704',
					'name'       => 'TETAP',
				),
			11  =>
				array(
					'id'         => '1704040',
					'regency_id' => '1704',
					'name'       => 'KAUR TENGAH',
				),
			12  =>
				array(
					'id'         => '1704041',
					'regency_id' => '1704',
					'name'       => 'LUAS',
				),
			13  =>
				array(
					'id'         => '1704042',
					'regency_id' => '1704',
					'name'       => 'MUARA SAHUNG',
				),
			14  =>
				array(
					'id'         => '1704050',
					'regency_id' => '1704',
					'name'       => 'KINAL',
				),
			15  =>
				array(
					'id'         => '1704051',
					'regency_id' => '1704',
					'name'       => 'SEMIDANG GUMAY',
				),
			16  =>
				array(
					'id'         => '1704060',
					'regency_id' => '1704',
					'name'       => 'TANJUNG KEMUNING',
				),
			17  =>
				array(
					'id'         => '1704061',
					'regency_id' => '1704',
					'name'       => 'KELAM TENGAH',
				),
			18  =>
				array(
					'id'         => '1704070',
					'regency_id' => '1704',
					'name'       => 'KAUR UTARA',
				),
			19  =>
				array(
					'id'         => '1704071',
					'regency_id' => '1704',
					'name'       => 'PADANG GUCI HILIR',
				),
			20  =>
				array(
					'id'         => '1704072',
					'regency_id' => '1704',
					'name'       => 'LUNGKANG KULE',
				),
			21  =>
				array(
					'id'         => '1704073',
					'regency_id' => '1704',
					'name'       => 'PADANG GUCI HULU',
				),
			22  =>
				array(
					'id'         => '1705010',
					'regency_id' => '1705',
					'name'       => 'SEMIDANG ALAS MARAS',
				),
			23  =>
				array(
					'id'         => '1705020',
					'regency_id' => '1705',
					'name'       => 'SEMIDANG ALAS',
				),
			24  =>
				array(
					'id'         => '1705030',
					'regency_id' => '1705',
					'name'       => 'TALO',
				),
			25  =>
				array(
					'id'         => '1705031',
					'regency_id' => '1705',
					'name'       => 'ILIR TALO',
				),
			26  =>
				array(
					'id'         => '1705032',
					'regency_id' => '1705',
					'name'       => 'TALO KECIL',
				),
			27  =>
				array(
					'id'         => '1705033',
					'regency_id' => '1705',
					'name'       => 'ULU TALO',
				),
			28  =>
				array(
					'id'         => '1705040',
					'regency_id' => '1705',
					'name'       => 'SELUMA',
				),
			29  =>
				array(
					'id'         => '1705041',
					'regency_id' => '1705',
					'name'       => 'SELUMA SELATAN',
				),
			30  =>
				array(
					'id'         => '1705042',
					'regency_id' => '1705',
					'name'       => 'SELUMA BARAT',
				),
			31  =>
				array(
					'id'         => '1705043',
					'regency_id' => '1705',
					'name'       => 'SELUMA TIMUR',
				),
			32  =>
				array(
					'id'         => '1705044',
					'regency_id' => '1705',
					'name'       => 'SELUMA UTARA',
				),
			33  =>
				array(
					'id'         => '1705050',
					'regency_id' => '1705',
					'name'       => 'SUKARAJA',
				),
			34  =>
				array(
					'id'         => '1705051',
					'regency_id' => '1705',
					'name'       => 'AIR PERIUKAN',
				),
			35  =>
				array(
					'id'         => '1705052',
					'regency_id' => '1705',
					'name'       => 'LUBUK SANDI',
				),
			36  =>
				array(
					'id'         => '1706010',
					'regency_id' => '1706',
					'name'       => 'IPUH',
				),
			37  =>
				array(
					'id'         => '1706011',
					'regency_id' => '1706',
					'name'       => 'AIR RAMI',
				),
			38  =>
				array(
					'id'         => '1706012',
					'regency_id' => '1706',
					'name'       => 'MALIN DEMAN',
				),
			39  =>
				array(
					'id'         => '1706020',
					'regency_id' => '1706',
					'name'       => 'PONDOK SUGUH',
				),
			40  =>
				array(
					'id'         => '1706021',
					'regency_id' => '1706',
					'name'       => 'SUNGAI RUMBAI',
				),
			41  =>
				array(
					'id'         => '1706022',
					'regency_id' => '1706',
					'name'       => 'TERAMANG JAYA',
				),
			42  =>
				array(
					'id'         => '1706030',
					'regency_id' => '1706',
					'name'       => 'TERAS TERUNJAM',
				),
			43  =>
				array(
					'id'         => '1706031',
					'regency_id' => '1706',
					'name'       => 'PENARIK',
				),
			44  =>
				array(
					'id'         => '1706032',
					'regency_id' => '1706',
					'name'       => 'SELAGAN RAYA',
				),
			45  =>
				array(
					'id'         => '1706040',
					'regency_id' => '1706',
					'name'       => 'KOTA MUKOMUKO',
				),
			46  =>
				array(
					'id'         => '1706041',
					'regency_id' => '1706',
					'name'       => 'AIR DIKIT',
				),
			47  =>
				array(
					'id'         => '1706042',
					'regency_id' => '1706',
					'name'       => 'XIV KOTO',
				),
			48  =>
				array(
					'id'         => '1706050',
					'regency_id' => '1706',
					'name'       => 'LUBUK PINANG',
				),
			49  =>
				array(
					'id'         => '1706051',
					'regency_id' => '1706',
					'name'       => 'AIR MANJUNTO',
				),
			50  =>
				array(
					'id'         => '1706052',
					'regency_id' => '1706',
					'name'       => 'V KOTO',
				),
			51  =>
				array(
					'id'         => '1707010',
					'regency_id' => '1707',
					'name'       => 'RIMBO PENGADANG',
				),
			52  =>
				array(
					'id'         => '1707011',
					'regency_id' => '1707',
					'name'       => 'TOPOS',
				),
			53  =>
				array(
					'id'         => '1707020',
					'regency_id' => '1707',
					'name'       => 'LEBONG SELATAN',
				),
			54  =>
				array(
					'id'         => '1707021',
					'regency_id' => '1707',
					'name'       => 'BINGIN KUNING',
				),
			55  =>
				array(
					'id'         => '1707030',
					'regency_id' => '1707',
					'name'       => 'LEBONG TENGAH',
				),
			56  =>
				array(
					'id'         => '1707031',
					'regency_id' => '1707',
					'name'       => 'LEBONG SAKTI',
				),
			57  =>
				array(
					'id'         => '1707040',
					'regency_id' => '1707',
					'name'       => 'LEBONG ATAS',
				),
			58  =>
				array(
					'id'         => '1707042',
					'regency_id' => '1707',
					'name'       => 'PELABAI',
				),
			59  =>
				array(
					'id'         => '1707050',
					'regency_id' => '1707',
					'name'       => 'LEBONG UTARA',
				),
			60  =>
				array(
					'id'         => '1707051',
					'regency_id' => '1707',
					'name'       => 'AMEN',
				),
			61  =>
				array(
					'id'         => '1707052',
					'regency_id' => '1707',
					'name'       => 'URAM JAYA',
				),
			62  =>
				array(
					'id'         => '1707053',
					'regency_id' => '1707',
					'name'       => 'PINANG BELAPIS',
				),
			63  =>
				array(
					'id'         => '1708010',
					'regency_id' => '1708',
					'name'       => 'MUARA KEMUMU',
				),
			64  =>
				array(
					'id'         => '1708020',
					'regency_id' => '1708',
					'name'       => 'BERMANI ILIR',
				),
			65  =>
				array(
					'id'         => '1708030',
					'regency_id' => '1708',
					'name'       => 'SEBERANG MUSI',
				),
			66  =>
				array(
					'id'         => '1708040',
					'regency_id' => '1708',
					'name'       => 'TEBAT KARAI',
				),
			67  =>
				array(
					'id'         => '1708050',
					'regency_id' => '1708',
					'name'       => 'KEPAHIANG',
				),
			68  =>
				array(
					'id'         => '1708060',
					'regency_id' => '1708',
					'name'       => 'KABA WETAN',
				),
			69  =>
				array(
					'id'         => '1708070',
					'regency_id' => '1708',
					'name'       => 'UJAN MAS',
				),
			70  =>
				array(
					'id'         => '1708080',
					'regency_id' => '1708',
					'name'       => 'MERIGI',
				),
			71  =>
				array(
					'id'         => '1709010',
					'regency_id' => '1709',
					'name'       => 'TALANG EMPAT',
				),
			72  =>
				array(
					'id'         => '1709020',
					'regency_id' => '1709',
					'name'       => 'KARANG TINGGI',
				),
			73  =>
				array(
					'id'         => '1709030',
					'regency_id' => '1709',
					'name'       => 'TABA PENANJUNG',
				),
			74  =>
				array(
					'id'         => '1709031',
					'regency_id' => '1709',
					'name'       => 'MERIGI KELINDANG',
				),
			75  =>
				array(
					'id'         => '1709040',
					'regency_id' => '1709',
					'name'       => 'PAGAR JATI',
				),
			76  =>
				array(
					'id'         => '1709041',
					'regency_id' => '1709',
					'name'       => 'MERIGI SAKTI',
				),
			77  =>
				array(
					'id'         => '1709050',
					'regency_id' => '1709',
					'name'       => 'PONDOK KELAPA',
				),
			78  =>
				array(
					'id'         => '1709051',
					'regency_id' => '1709',
					'name'       => 'PONDOK KUBANG',
				),
			79  =>
				array(
					'id'         => '1709060',
					'regency_id' => '1709',
					'name'       => 'PEMATANG TIGA',
				),
			80  =>
				array(
					'id'         => '1709061',
					'regency_id' => '1709',
					'name'       => 'BANG HAJI',
				),
			81  =>
				array(
					'id'         => '1771010',
					'regency_id' => '1771',
					'name'       => 'SELEBAR',
				),
			82  =>
				array(
					'id'         => '1771011',
					'regency_id' => '1771',
					'name'       => 'KAMPUNG MELAYU',
				),
			83  =>
				array(
					'id'         => '1771020',
					'regency_id' => '1771',
					'name'       => 'GADING CEMPAKA',
				),
			84  =>
				array(
					'id'         => '1771021',
					'regency_id' => '1771',
					'name'       => 'RATU AGUNG',
				),
			85  =>
				array(
					'id'         => '1771022',
					'regency_id' => '1771',
					'name'       => 'RATU SAMBAN',
				),
			86  =>
				array(
					'id'         => '1771023',
					'regency_id' => '1771',
					'name'       => 'SINGARAN PATI',
				),
			87  =>
				array(
					'id'         => '1771030',
					'regency_id' => '1771',
					'name'       => 'TELUK SEGARA',
				),
			88  =>
				array(
					'id'         => '1771031',
					'regency_id' => '1771',
					'name'       => 'SUNGAI SERUT',
				),
			89  =>
				array(
					'id'         => '1771040',
					'regency_id' => '1771',
					'name'       => 'MUARA BANGKA HULU',
				),
			90  =>
				array(
					'id'         => '1801040',
					'regency_id' => '1801',
					'name'       => 'BALIK BUKIT',
				),
			91  =>
				array(
					'id'         => '1801041',
					'regency_id' => '1801',
					'name'       => 'SUKAU',
				),
			92  =>
				array(
					'id'         => '1801042',
					'regency_id' => '1801',
					'name'       => 'LUMBOK SEMINUNG',
				),
			93  =>
				array(
					'id'         => '1801050',
					'regency_id' => '1801',
					'name'       => 'BELALAU',
				),
			94  =>
				array(
					'id'         => '1801051',
					'regency_id' => '1801',
					'name'       => 'SEKINCAU',
				),
			95  =>
				array(
					'id'         => '1801052',
					'regency_id' => '1801',
					'name'       => 'SUOH',
				),
			96  =>
				array(
					'id'         => '1801053',
					'regency_id' => '1801',
					'name'       => 'BATU BRAK',
				),
			97  =>
				array(
					'id'         => '1801054',
					'regency_id' => '1801',
					'name'       => 'PAGAR DEWA',
				),
			98  =>
				array(
					'id'         => '1801055',
					'regency_id' => '1801',
					'name'       => 'BATU KETULIS',
				),
			99  =>
				array(
					'id'         => '1801056',
					'regency_id' => '1801',
					'name'       => 'BANDAR NEGERI SUOH',
				),
			100 =>
				array(
					'id'         => '1801060',
					'regency_id' => '1801',
					'name'       => 'SUMBER JAYA',
				),
			101 =>
				array(
					'id'         => '1801061',
					'regency_id' => '1801',
					'name'       => 'WAY TENONG',
				),
			102 =>
				array(
					'id'         => '1801062',
					'regency_id' => '1801',
					'name'       => 'GEDUNG SURIAN',
				),
			103 =>
				array(
					'id'         => '1801063',
					'regency_id' => '1801',
					'name'       => 'KEBUN TEBU',
				),
			104 =>
				array(
					'id'         => '1801064',
					'regency_id' => '1801',
					'name'       => 'AIR HITAM',
				),
			105 =>
				array(
					'id'         => '1802010',
					'regency_id' => '1802',
					'name'       => 'WONOSOBO',
				),
			106 =>
				array(
					'id'         => '1802011',
					'regency_id' => '1802',
					'name'       => 'SEMAKA',
				),
			107 =>
				array(
					'id'         => '1802012',
					'regency_id' => '1802',
					'name'       => 'BANDAR NEGERI SEMUONG',
				),
			108 =>
				array(
					'id'         => '1802020',
					'regency_id' => '1802',
					'name'       => 'KOTA AGUNG',
				),
			109 =>
				array(
					'id'         => '1802021',
					'regency_id' => '1802',
					'name'       => 'PEMATANG SAWA',
				),
			110 =>
				array(
					'id'         => '1802022',
					'regency_id' => '1802',
					'name'       => 'KOTA AGUNG TIMUR',
				),
			111 =>
				array(
					'id'         => '1802023',
					'regency_id' => '1802',
					'name'       => 'KOTA AGUNG BARAT',
				),
			112 =>
				array(
					'id'         => '1802030',
					'regency_id' => '1802',
					'name'       => 'PULAU PANGGUNG',
				),
			113 =>
				array(
					'id'         => '1802031',
					'regency_id' => '1802',
					'name'       => 'ULUBELU',
				),
			114 =>
				array(
					'id'         => '1802032',
					'regency_id' => '1802',
					'name'       => 'AIR NANINGAN',
				),
			115 =>
				array(
					'id'         => '1802040',
					'regency_id' => '1802',
					'name'       => 'TALANG PADANG',
				),
			116 =>
				array(
					'id'         => '1802041',
					'regency_id' => '1802',
					'name'       => 'SUMBEREJO',
				),
			117 =>
				array(
					'id'         => '1802042',
					'regency_id' => '1802',
					'name'       => 'GISTING',
				),
			118 =>
				array(
					'id'         => '1802043',
					'regency_id' => '1802',
					'name'       => 'GUNUNG ALIP',
				),
			119 =>
				array(
					'id'         => '1802050',
					'regency_id' => '1802',
					'name'       => 'PUGUNG',
				),
			120 =>
				array(
					'id'         => '1802101',
					'regency_id' => '1802',
					'name'       => 'BULOK',
				),
			121 =>
				array(
					'id'         => '1802110',
					'regency_id' => '1802',
					'name'       => 'CUKUH BALAK',
				),
			122 =>
				array(
					'id'         => '1802111',
					'regency_id' => '1802',
					'name'       => 'KELUMBAYAN',
				),
			123 =>
				array(
					'id'         => '1802112',
					'regency_id' => '1802',
					'name'       => 'LIMAU',
				),
			124 =>
				array(
					'id'         => '1802113',
					'regency_id' => '1802',
					'name'       => 'KELUMBAYAN BARAT',
				),
			125 =>
				array(
					'id'         => '1803060',
					'regency_id' => '1803',
					'name'       => 'NATAR',
				),
			126 =>
				array(
					'id'         => '1803070',
					'regency_id' => '1803',
					'name'       => 'JATI AGUNG',
				),
			127 =>
				array(
					'id'         => '1803080',
					'regency_id' => '1803',
					'name'       => 'TANJUNG BINTANG',
				),
			128 =>
				array(
					'id'         => '1803081',
					'regency_id' => '1803',
					'name'       => 'TANJUNG SARI',
				),
			129 =>
				array(
					'id'         => '1803090',
					'regency_id' => '1803',
					'name'       => 'KATIBUNG',
				),
			130 =>
				array(
					'id'         => '1803091',
					'regency_id' => '1803',
					'name'       => 'MERBAU MATARAM',
				),
			131 =>
				array(
					'id'         => '1803092',
					'regency_id' => '1803',
					'name'       => 'WAY SULAN',
				),
			132 =>
				array(
					'id'         => '1803100',
					'regency_id' => '1803',
					'name'       => 'SIDOMULYO',
				),
			133 =>
				array(
					'id'         => '1803101',
					'regency_id' => '1803',
					'name'       => 'CANDIPURO',
				),
			134 =>
				array(
					'id'         => '1803102',
					'regency_id' => '1803',
					'name'       => 'WAY PANJI',
				),
			135 =>
				array(
					'id'         => '1803110',
					'regency_id' => '1803',
					'name'       => 'KALIANDA',
				),
			136 =>
				array(
					'id'         => '1803111',
					'regency_id' => '1803',
					'name'       => 'RAJABASA',
				),
			137 =>
				array(
					'id'         => '1803120',
					'regency_id' => '1803',
					'name'       => 'PALAS',
				),
			138 =>
				array(
					'id'         => '1803121',
					'regency_id' => '1803',
					'name'       => 'SRAGI',
				),
			139 =>
				array(
					'id'         => '1803130',
					'regency_id' => '1803',
					'name'       => 'PENENGAHAN',
				),
			140 =>
				array(
					'id'         => '1803131',
					'regency_id' => '1803',
					'name'       => 'KETAPANG',
				),
			141 =>
				array(
					'id'         => '1803132',
					'regency_id' => '1803',
					'name'       => 'BAKAUHENI',
				),
			142 =>
				array(
					'id'         => '1804010',
					'regency_id' => '1804',
					'name'       => 'METRO KIBANG',
				),
			143 =>
				array(
					'id'         => '1804020',
					'regency_id' => '1804',
					'name'       => 'BATANGHARI',
				),
			144 =>
				array(
					'id'         => '1804030',
					'regency_id' => '1804',
					'name'       => 'SEKAMPUNG',
				),
			145 =>
				array(
					'id'         => '1804040',
					'regency_id' => '1804',
					'name'       => 'MARGATIGA',
				),
			146 =>
				array(
					'id'         => '1804050',
					'regency_id' => '1804',
					'name'       => 'SEKAMPUNG UDIK',
				),
			147 =>
				array(
					'id'         => '1804060',
					'regency_id' => '1804',
					'name'       => 'JABUNG',
				),
			148 =>
				array(
					'id'         => '1804061',
					'regency_id' => '1804',
					'name'       => 'PASIR SAKTI',
				),
			149 =>
				array(
					'id'         => '1804062',
					'regency_id' => '1804',
					'name'       => 'WAWAY KARYA',
				),
			150 =>
				array(
					'id'         => '1804063',
					'regency_id' => '1804',
					'name'       => 'MARGA SEKAMPUNG',
				),
			151 =>
				array(
					'id'         => '1804070',
					'regency_id' => '1804',
					'name'       => 'LABUHAN MARINGGAI',
				),
			152 =>
				array(
					'id'         => '1804071',
					'regency_id' => '1804',
					'name'       => 'MATARAM BARU',
				),
			153 =>
				array(
					'id'         => '1804072',
					'regency_id' => '1804',
					'name'       => 'BANDAR SRIBAWONO',
				),
			154 =>
				array(
					'id'         => '1804073',
					'regency_id' => '1804',
					'name'       => 'MELINTING',
				),
			155 =>
				array(
					'id'         => '1804074',
					'regency_id' => '1804',
					'name'       => 'GUNUNG PELINDUNG',
				),
			156 =>
				array(
					'id'         => '1804080',
					'regency_id' => '1804',
					'name'       => 'WAY JEPARA',
				),
			157 =>
				array(
					'id'         => '1804081',
					'regency_id' => '1804',
					'name'       => 'BRAJA SLEBAH',
				),
			158 =>
				array(
					'id'         => '1804082',
					'regency_id' => '1804',
					'name'       => 'LABUHAN RATU',
				),
			159 =>
				array(
					'id'         => '1804090',
					'regency_id' => '1804',
					'name'       => 'SUKADANA',
				),
			160 =>
				array(
					'id'         => '1804091',
					'regency_id' => '1804',
					'name'       => 'BUMI AGUNG',
				),
			161 =>
				array(
					'id'         => '1804092',
					'regency_id' => '1804',
					'name'       => 'BATANGHARI NUBAN',
				),
			162 =>
				array(
					'id'         => '1804100',
					'regency_id' => '1804',
					'name'       => 'PEKALONGAN',
				),
			163 =>
				array(
					'id'         => '1804110',
					'regency_id' => '1804',
					'name'       => 'RAMAN UTARA',
				),
			164 =>
				array(
					'id'         => '1804120',
					'regency_id' => '1804',
					'name'       => 'PURBOLINGGO',
				),
			165 =>
				array(
					'id'         => '1804121',
					'regency_id' => '1804',
					'name'       => 'WAY BUNGUR',
				),
			166 =>
				array(
					'id'         => '1805010',
					'regency_id' => '1805',
					'name'       => 'PADANG RATU',
				),
			167 =>
				array(
					'id'         => '1805011',
					'regency_id' => '1805',
					'name'       => 'SELAGAI LINGGA',
				),
			168 =>
				array(
					'id'         => '1805012',
					'regency_id' => '1805',
					'name'       => 'PUBIAN',
				),
			169 =>
				array(
					'id'         => '1805013',
					'regency_id' => '1805',
					'name'       => 'ANAK TUHA',
				),
			170 =>
				array(
					'id'         => '1805014',
					'regency_id' => '1805',
					'name'       => 'ANAK RATU AJI',
				),
			171 =>
				array(
					'id'         => '1805020',
					'regency_id' => '1805',
					'name'       => 'KALIREJO',
				),
			172 =>
				array(
					'id'         => '1805021',
					'regency_id' => '1805',
					'name'       => 'SENDANG AGUNG',
				),
			173 =>
				array(
					'id'         => '1805030',
					'regency_id' => '1805',
					'name'       => 'BANGUNREJO',
				),
			174 =>
				array(
					'id'         => '1805040',
					'regency_id' => '1805',
					'name'       => 'GUNUNG SUGIH',
				),
			175 =>
				array(
					'id'         => '1805041',
					'regency_id' => '1805',
					'name'       => 'BEKRI',
				),
			176 =>
				array(
					'id'         => '1805042',
					'regency_id' => '1805',
					'name'       => 'BUMI RATU NUBAN',
				),
			177 =>
				array(
					'id'         => '1805050',
					'regency_id' => '1805',
					'name'       => 'TRIMURJO',
				),
			178 =>
				array(
					'id'         => '1805060',
					'regency_id' => '1805',
					'name'       => 'PUNGGUR',
				),
			179 =>
				array(
					'id'         => '1805061',
					'regency_id' => '1805',
					'name'       => 'KOTA GAJAH',
				),
			180 =>
				array(
					'id'         => '1805070',
					'regency_id' => '1805',
					'name'       => 'SEPUTIH RAMAN',
				),
			181 =>
				array(
					'id'         => '1805080',
					'regency_id' => '1805',
					'name'       => 'TERBANGGI BESAR',
				),
			182 =>
				array(
					'id'         => '1805081',
					'regency_id' => '1805',
					'name'       => 'SEPUTIH AGUNG',
				),
			183 =>
				array(
					'id'         => '1805082',
					'regency_id' => '1805',
					'name'       => 'WAY PENGUBUAN',
				),
			184 =>
				array(
					'id'         => '1805090',
					'regency_id' => '1805',
					'name'       => 'TERUSAN NUNYAI',
				),
			185 =>
				array(
					'id'         => '1805100',
					'regency_id' => '1805',
					'name'       => 'SEPUTIH MATARAM',
				),
			186 =>
				array(
					'id'         => '1805101',
					'regency_id' => '1805',
					'name'       => 'BANDAR MATARAM',
				),
			187 =>
				array(
					'id'         => '1805110',
					'regency_id' => '1805',
					'name'       => 'SEPUTIH BANYAK',
				),
			188 =>
				array(
					'id'         => '1805111',
					'regency_id' => '1805',
					'name'       => 'WAY SEPUTIH',
				),
			189 =>
				array(
					'id'         => '1805120',
					'regency_id' => '1805',
					'name'       => 'RUMBIA',
				),
			190 =>
				array(
					'id'         => '1805121',
					'regency_id' => '1805',
					'name'       => 'BUMI NABUNG',
				),
			191 =>
				array(
					'id'         => '1805122',
					'regency_id' => '1805',
					'name'       => 'PUTRA RUMBIA',
				),
			192 =>
				array(
					'id'         => '1805130',
					'regency_id' => '1805',
					'name'       => 'SEPUTIH SURABAYA',
				),
			193 =>
				array(
					'id'         => '1805131',
					'regency_id' => '1805',
					'name'       => 'BANDAR SURABAYA',
				),
			194 =>
				array(
					'id'         => '1806010',
					'regency_id' => '1806',
					'name'       => 'BUKIT KEMUNING',
				),
			195 =>
				array(
					'id'         => '1806011',
					'regency_id' => '1806',
					'name'       => 'ABUNG TINGGI',
				),
			196 =>
				array(
					'id'         => '1806020',
					'regency_id' => '1806',
					'name'       => 'TANJUNG RAJA',
				),
			197 =>
				array(
					'id'         => '1806030',
					'regency_id' => '1806',
					'name'       => 'ABUNG BARAT',
				),
			198 =>
				array(
					'id'         => '1806031',
					'regency_id' => '1806',
					'name'       => 'ABUNG TENGAH',
				),
			199 =>
				array(
					'id'         => '1806032',
					'regency_id' => '1806',
					'name'       => 'ABUNG  KUNANG',
				),
			200 =>
				array(
					'id'         => '1806033',
					'regency_id' => '1806',
					'name'       => 'ABUNG PEKURUN',
				),
			201 =>
				array(
					'id'         => '1806040',
					'regency_id' => '1806',
					'name'       => 'KOTABUMI',
				),
			202 =>
				array(
					'id'         => '1806041',
					'regency_id' => '1806',
					'name'       => 'KOTABUMI UTARA',
				),
			203 =>
				array(
					'id'         => '1806042',
					'regency_id' => '1806',
					'name'       => 'KOTABUMI SELATAN',
				),
			204 =>
				array(
					'id'         => '1806050',
					'regency_id' => '1806',
					'name'       => 'ABUNG SELATAN',
				),
			205 =>
				array(
					'id'         => '1806051',
					'regency_id' => '1806',
					'name'       => 'ABUNG SEMULI',
				),
			206 =>
				array(
					'id'         => '1806052',
					'regency_id' => '1806',
					'name'       => 'BLAMBANGAN PAGAR',
				),
			207 =>
				array(
					'id'         => '1806060',
					'regency_id' => '1806',
					'name'       => 'ABUNG TIMUR',
				),
			208 =>
				array(
					'id'         => '1806061',
					'regency_id' => '1806',
					'name'       => 'ABUNG SURAKARTA',
				),
			209 =>
				array(
					'id'         => '1806070',
					'regency_id' => '1806',
					'name'       => 'SUNGKAI SELATAN',
				),
			210 =>
				array(
					'id'         => '1806071',
					'regency_id' => '1806',
					'name'       => 'MUARA SUNGKAI',
				),
			211 =>
				array(
					'id'         => '1806072',
					'regency_id' => '1806',
					'name'       => 'BUNGA MAYANG',
				),
			212 =>
				array(
					'id'         => '1806073',
					'regency_id' => '1806',
					'name'       => 'SUNGKAI  BARAT',
				),
			213 =>
				array(
					'id'         => '1806074',
					'regency_id' => '1806',
					'name'       => 'SUNGKAI JAYA',
				),
			214 =>
				array(
					'id'         => '1806080',
					'regency_id' => '1806',
					'name'       => 'SUNGKAI UTARA',
				),
			215 =>
				array(
					'id'         => '1806081',
					'regency_id' => '1806',
					'name'       => 'HULUSUNGKAI',
				),
			216 =>
				array(
					'id'         => '1806082',
					'regency_id' => '1806',
					'name'       => 'SUNGKAI TENGAH',
				),
			217 =>
				array(
					'id'         => '1807010',
					'regency_id' => '1807',
					'name'       => 'BANJIT',
				),
			218 =>
				array(
					'id'         => '1807020',
					'regency_id' => '1807',
					'name'       => 'BARADATU',
				),
			219 =>
				array(
					'id'         => '1807021',
					'regency_id' => '1807',
					'name'       => 'GUNUNG LABUHAN',
				),
			220 =>
				array(
					'id'         => '1807030',
					'regency_id' => '1807',
					'name'       => 'KASUI',
				),
			221 =>
				array(
					'id'         => '1807031',
					'regency_id' => '1807',
					'name'       => 'REBANG TANGKAS',
				),
			222 =>
				array(
					'id'         => '1807040',
					'regency_id' => '1807',
					'name'       => 'BLAMBANGAN UMPU',
				),
			223 =>
				array(
					'id'         => '1807041',
					'regency_id' => '1807',
					'name'       => 'WAY TUBA',
				),
			224 =>
				array(
					'id'         => '1807042',
					'regency_id' => '1807',
					'name'       => 'NEGERI AGUNG',
				),
			225 =>
				array(
					'id'         => '1807050',
					'regency_id' => '1807',
					'name'       => 'BAHUGA',
				),
			226 =>
				array(
					'id'         => '1807051',
					'regency_id' => '1807',
					'name'       => 'BUAY  BAHUGA',
				),
			227 =>
				array(
					'id'         => '1807052',
					'regency_id' => '1807',
					'name'       => 'BUMI AGUNG',
				),
			228 =>
				array(
					'id'         => '1807060',
					'regency_id' => '1807',
					'name'       => 'PAKUAN RATU',
				),
			229 =>
				array(
					'id'         => '1807061',
					'regency_id' => '1807',
					'name'       => 'NEGARA BATIN',
				),
			230 =>
				array(
					'id'         => '1807062',
					'regency_id' => '1807',
					'name'       => 'NEGERI BESAR',
				),
			231 =>
				array(
					'id'         => '1808030',
					'regency_id' => '1808',
					'name'       => 'BANJAR AGUNG',
				),
			232 =>
				array(
					'id'         => '1808031',
					'regency_id' => '1808',
					'name'       => 'BANJAR MARGO',
				),
			233 =>
				array(
					'id'         => '1808032',
					'regency_id' => '1808',
					'name'       => 'BANJAR BARU',
				),
			234 =>
				array(
					'id'         => '1808040',
					'regency_id' => '1808',
					'name'       => 'GEDUNG AJI',
				),
			235 =>
				array(
					'id'         => '1808041',
					'regency_id' => '1808',
					'name'       => 'PENAWAR AJI',
				),
			236 =>
				array(
					'id'         => '1808042',
					'regency_id' => '1808',
					'name'       => 'MERAKSA AJI',
				),
			237 =>
				array(
					'id'         => '1808050',
					'regency_id' => '1808',
					'name'       => 'MENGGALA',
				),
			238 =>
				array(
					'id'         => '1808051',
					'regency_id' => '1808',
					'name'       => 'PENAWAR TAMA',
				),
			239 =>
				array(
					'id'         => '1808052',
					'regency_id' => '1808',
					'name'       => 'RAWAJITU SELATAN',
				),
			240 =>
				array(
					'id'         => '1808053',
					'regency_id' => '1808',
					'name'       => 'GEDUNG MENENG',
				),
			241 =>
				array(
					'id'         => '1808054',
					'regency_id' => '1808',
					'name'       => 'RAWAJITU TIMUR',
				),
			242 =>
				array(
					'id'         => '1808055',
					'regency_id' => '1808',
					'name'       => 'RAWA PITU',
				),
			243 =>
				array(
					'id'         => '1808056',
					'regency_id' => '1808',
					'name'       => 'GEDUNG AJI BARU',
				),
			244 =>
				array(
					'id'         => '1808057',
					'regency_id' => '1808',
					'name'       => 'DENTE TELADAS',
				),
			245 =>
				array(
					'id'         => '1808058',
					'regency_id' => '1808',
					'name'       => 'MENGGALA TIMUR',
				),
			246 =>
				array(
					'id'         => '1809010',
					'regency_id' => '1809',
					'name'       => 'PUNDUH PIDADA',
				),
			247 =>
				array(
					'id'         => '1809011',
					'regency_id' => '1809',
					'name'       => 'MARGA PUNDUH',
				),
			248 =>
				array(
					'id'         => '1809020',
					'regency_id' => '1809',
					'name'       => 'PADANG CERMIN',
				),
			249 =>
				array(
					'id'         => '1809021',
					'regency_id' => '1809',
					'name'       => 'TELUK PANDAN',
				),
			250 =>
				array(
					'id'         => '1809022',
					'regency_id' => '1809',
					'name'       => 'WAY RATAI',
				),
			251 =>
				array(
					'id'         => '1809030',
					'regency_id' => '1809',
					'name'       => 'KEDONDONG',
				),
			252 =>
				array(
					'id'         => '1809031',
					'regency_id' => '1809',
					'name'       => 'WAY KHILAU',
				),
			253 =>
				array(
					'id'         => '1809040',
					'regency_id' => '1809',
					'name'       => 'WAY LIMA',
				),
			254 =>
				array(
					'id'         => '1809050',
					'regency_id' => '1809',
					'name'       => 'GEDUNG TATAAN',
				),
			255 =>
				array(
					'id'         => '1809060',
					'regency_id' => '1809',
					'name'       => 'NEGERI KATON',
				),
			256 =>
				array(
					'id'         => '1809070',
					'regency_id' => '1809',
					'name'       => 'TEGINENENG',
				),
			257 =>
				array(
					'id'         => '1810010',
					'regency_id' => '1810',
					'name'       => 'PARDASUKA',
				),
			258 =>
				array(
					'id'         => '1810020',
					'regency_id' => '1810',
					'name'       => 'AMBARAWA',
				),
			259 =>
				array(
					'id'         => '1810030',
					'regency_id' => '1810',
					'name'       => 'PAGELARAN',
				),
			260 =>
				array(
					'id'         => '1810031',
					'regency_id' => '1810',
					'name'       => 'PAGELARAN UTARA',
				),
			261 =>
				array(
					'id'         => '1810040',
					'regency_id' => '1810',
					'name'       => 'PRINGSEWU',
				),
			262 =>
				array(
					'id'         => '1810050',
					'regency_id' => '1810',
					'name'       => 'GADING REJO',
				),
			263 =>
				array(
					'id'         => '1810060',
					'regency_id' => '1810',
					'name'       => 'SUKOHARJO',
				),
			264 =>
				array(
					'id'         => '1810070',
					'regency_id' => '1810',
					'name'       => 'BANYUMAS',
				),
			265 =>
				array(
					'id'         => '1810080',
					'regency_id' => '1810',
					'name'       => 'ADI LUWIH',
				),
			266 =>
				array(
					'id'         => '1811010',
					'regency_id' => '1811',
					'name'       => 'WAY SERDANG',
				),
			267 =>
				array(
					'id'         => '1811020',
					'regency_id' => '1811',
					'name'       => 'SIMPANG PEMATANG',
				),
			268 =>
				array(
					'id'         => '1811030',
					'regency_id' => '1811',
					'name'       => 'PANCA JAYA',
				),
			269 =>
				array(
					'id'         => '1811040',
					'regency_id' => '1811',
					'name'       => 'TANJUNG RAYA',
				),
			270 =>
				array(
					'id'         => '1811050',
					'regency_id' => '1811',
					'name'       => 'MESUJI',
				),
			271 =>
				array(
					'id'         => '1811060',
					'regency_id' => '1811',
					'name'       => 'MESUJI TIMUR',
				),
			272 =>
				array(
					'id'         => '1811070',
					'regency_id' => '1811',
					'name'       => 'RAWAJITU UTARA',
				),
			273 =>
				array(
					'id'         => '1812010',
					'regency_id' => '1812',
					'name'       => 'TULANG BAWANG UDIK',
				),
			274 =>
				array(
					'id'         => '1812020',
					'regency_id' => '1812',
					'name'       => 'TUMI JAJAR',
				),
			275 =>
				array(
					'id'         => '1812030',
					'regency_id' => '1812',
					'name'       => 'TULANG BAWANG TENGAH',
				),
			276 =>
				array(
					'id'         => '1812040',
					'regency_id' => '1812',
					'name'       => 'PAGAR DEWA',
				),
			277 =>
				array(
					'id'         => '1812050',
					'regency_id' => '1812',
					'name'       => 'LAMBU KIBANG',
				),
			278 =>
				array(
					'id'         => '1812060',
					'regency_id' => '1812',
					'name'       => 'GUNUNG TERANG',
				),
			279 =>
				array(
					'id'         => '1812061',
					'regency_id' => '1812',
					'name'       => 'BATU PUTIH',
				),
			280 =>
				array(
					'id'         => '1812070',
					'regency_id' => '1812',
					'name'       => 'GUNUNG AGUNG',
				),
			281 =>
				array(
					'id'         => '1812080',
					'regency_id' => '1812',
					'name'       => 'WAY KENANGA',
				),
			282 =>
				array(
					'id'         => '1813010',
					'regency_id' => '1813',
					'name'       => 'LEMONG',
				),
			283 =>
				array(
					'id'         => '1813020',
					'regency_id' => '1813',
					'name'       => 'PESISIR UTARA',
				),
			284 =>
				array(
					'id'         => '1813030',
					'regency_id' => '1813',
					'name'       => 'PULAU PISANG',
				),
			285 =>
				array(
					'id'         => '1813040',
					'regency_id' => '1813',
					'name'       => 'KARYA PENGGAWA',
				),
			286 =>
				array(
					'id'         => '1813050',
					'regency_id' => '1813',
					'name'       => 'WAY KRUI',
				),
			287 =>
				array(
					'id'         => '1813060',
					'regency_id' => '1813',
					'name'       => 'PESISIR TENGAH',
				),
			288 =>
				array(
					'id'         => '1813070',
					'regency_id' => '1813',
					'name'       => 'KRUI SELATAN',
				),
			289 =>
				array(
					'id'         => '1813080',
					'regency_id' => '1813',
					'name'       => 'PESISIR SELATAN',
				),
			290 =>
				array(
					'id'         => '1813090',
					'regency_id' => '1813',
					'name'       => 'NGAMBUR',
				),
			291 =>
				array(
					'id'         => '1813100',
					'regency_id' => '1813',
					'name'       => 'BENGKUNAT',
				),
			292 =>
				array(
					'id'         => '1813110',
					'regency_id' => '1813',
					'name'       => 'BENGKUNAT BELIMBING',
				),
			293 =>
				array(
					'id'         => '1871010',
					'regency_id' => '1871',
					'name'       => 'TELUK BETUNG BARAT',
				),
			294 =>
				array(
					'id'         => '1871011',
					'regency_id' => '1871',
					'name'       => 'TELUKBETUNG TIMUR',
				),
			295 =>
				array(
					'id'         => '1871020',
					'regency_id' => '1871',
					'name'       => 'TELUK BETUNG SELATAN',
				),
			296 =>
				array(
					'id'         => '1871021',
					'regency_id' => '1871',
					'name'       => 'BUMI WARAS',
				),
			297 =>
				array(
					'id'         => '1871030',
					'regency_id' => '1871',
					'name'       => 'PANJANG',
				),
			298 =>
				array(
					'id'         => '1871040',
					'regency_id' => '1871',
					'name'       => 'TANJUNG KARANG TIMUR',
				),
			299 =>
				array(
					'id'         => '1871041',
					'regency_id' => '1871',
					'name'       => 'KEDAMAIAN',
				),
			300 =>
				array(
					'id'         => '1871050',
					'regency_id' => '1871',
					'name'       => 'TELUK BETUNG UTARA',
				),
			301 =>
				array(
					'id'         => '1871060',
					'regency_id' => '1871',
					'name'       => 'TANJUNG KARANG PUSAT',
				),
			302 =>
				array(
					'id'         => '1871061',
					'regency_id' => '1871',
					'name'       => 'ENGGAL',
				),
			303 =>
				array(
					'id'         => '1871070',
					'regency_id' => '1871',
					'name'       => 'TANJUNG KARANG BARAT',
				),
			304 =>
				array(
					'id'         => '1871071',
					'regency_id' => '1871',
					'name'       => 'KEMILING',
				),
			305 =>
				array(
					'id'         => '1871072',
					'regency_id' => '1871',
					'name'       => 'LANGKAPURA',
				),
			306 =>
				array(
					'id'         => '1871080',
					'regency_id' => '1871',
					'name'       => 'KEDATON',
				),
			307 =>
				array(
					'id'         => '1871081',
					'regency_id' => '1871',
					'name'       => 'RAJABASA',
				),
			308 =>
				array(
					'id'         => '1871082',
					'regency_id' => '1871',
					'name'       => 'TANJUNG SENANG',
				),
			309 =>
				array(
					'id'         => '1871083',
					'regency_id' => '1871',
					'name'       => 'LABUHAN RATU',
				),
			310 =>
				array(
					'id'         => '1871090',
					'regency_id' => '1871',
					'name'       => 'SUKARAME',
				),
			311 =>
				array(
					'id'         => '1871091',
					'regency_id' => '1871',
					'name'       => 'SUKABUMI',
				),
			312 =>
				array(
					'id'         => '1871092',
					'regency_id' => '1871',
					'name'       => 'WAY HALIM',
				),
			313 =>
				array(
					'id'         => '1872011',
					'regency_id' => '1872',
					'name'       => 'METRO SELATAN',
				),
			314 =>
				array(
					'id'         => '1872012',
					'regency_id' => '1872',
					'name'       => 'METRO BARAT',
				),
			315 =>
				array(
					'id'         => '1872021',
					'regency_id' => '1872',
					'name'       => 'METRO TIMUR',
				),
			316 =>
				array(
					'id'         => '1872022',
					'regency_id' => '1872',
					'name'       => 'METRO PUSAT',
				),
			317 =>
				array(
					'id'         => '1872023',
					'regency_id' => '1872',
					'name'       => 'METRO UTARA',
				),
			318 =>
				array(
					'id'         => '1901070',
					'regency_id' => '1901',
					'name'       => 'MENDO BARAT',
				),
			319 =>
				array(
					'id'         => '1901080',
					'regency_id' => '1901',
					'name'       => 'MERAWANG',
				),
			320 =>
				array(
					'id'         => '1901081',
					'regency_id' => '1901',
					'name'       => 'PUDING BESAR',
				),
			321 =>
				array(
					'id'         => '1901090',
					'regency_id' => '1901',
					'name'       => 'SUNGAI LIAT',
				),
			322 =>
				array(
					'id'         => '1901091',
					'regency_id' => '1901',
					'name'       => 'PEMALI',
				),
			323 =>
				array(
					'id'         => '1901092',
					'regency_id' => '1901',
					'name'       => 'BAKAM',
				),
			324 =>
				array(
					'id'         => '1901130',
					'regency_id' => '1901',
					'name'       => 'BELINYU',
				),
			325 =>
				array(
					'id'         => '1901131',
					'regency_id' => '1901',
					'name'       => 'RIAU SILIP',
				),
			326 =>
				array(
					'id'         => '1902010',
					'regency_id' => '1902',
					'name'       => 'MEMBALONG',
				),
			327 =>
				array(
					'id'         => '1902060',
					'regency_id' => '1902',
					'name'       => 'TANJUNG PANDAN',
				),
			328 =>
				array(
					'id'         => '1902061',
					'regency_id' => '1902',
					'name'       => 'BADAU',
				),
			329 =>
				array(
					'id'         => '1902062',
					'regency_id' => '1902',
					'name'       => 'SIJUK',
				),
			330 =>
				array(
					'id'         => '1902063',
					'regency_id' => '1902',
					'name'       => 'SELAT NASIK',
				),
			331 =>
				array(
					'id'         => '1903010',
					'regency_id' => '1903',
					'name'       => 'KELAPA',
				),
			332 =>
				array(
					'id'         => '1903020',
					'regency_id' => '1903',
					'name'       => 'TEMPILANG',
				),
			333 =>
				array(
					'id'         => '1903030',
					'regency_id' => '1903',
					'name'       => 'MENTOK',
				),
			334 =>
				array(
					'id'         => '1903040',
					'regency_id' => '1903',
					'name'       => 'SIMPANG TERITIP',
				),
			335 =>
				array(
					'id'         => '1903050',
					'regency_id' => '1903',
					'name'       => 'JEBUS',
				),
			336 =>
				array(
					'id'         => '1903051',
					'regency_id' => '1903',
					'name'       => 'PARITTIGA',
				),
			337 =>
				array(
					'id'         => '1904010',
					'regency_id' => '1904',
					'name'       => 'KOBA',
				),
			338 =>
				array(
					'id'         => '1904011',
					'regency_id' => '1904',
					'name'       => 'LUBUK BESAR',
				),
			339 =>
				array(
					'id'         => '1904020',
					'regency_id' => '1904',
					'name'       => 'PANGKALAN BARU',
				),
			340 =>
				array(
					'id'         => '1904021',
					'regency_id' => '1904',
					'name'       => 'NAMANG',
				),
			341 =>
				array(
					'id'         => '1904030',
					'regency_id' => '1904',
					'name'       => 'SUNGAI SELAN',
				),
			342 =>
				array(
					'id'         => '1904040',
					'regency_id' => '1904',
					'name'       => 'SIMPANG KATIS',
				),
			343 =>
				array(
					'id'         => '1905010',
					'regency_id' => '1905',
					'name'       => 'PAYUNG',
				),
			344 =>
				array(
					'id'         => '1905011',
					'regency_id' => '1905',
					'name'       => 'PULAU BESAR',
				),
			345 =>
				array(
					'id'         => '1905020',
					'regency_id' => '1905',
					'name'       => 'SIMPANG RIMBA',
				),
			346 =>
				array(
					'id'         => '1905030',
					'regency_id' => '1905',
					'name'       => 'TOBOALI',
				),
			347 =>
				array(
					'id'         => '1905031',
					'regency_id' => '1905',
					'name'       => 'TUKAK SADAI',
				),
			348 =>
				array(
					'id'         => '1905040',
					'regency_id' => '1905',
					'name'       => 'AIR GEGAS',
				),
			349 =>
				array(
					'id'         => '1905050',
					'regency_id' => '1905',
					'name'       => 'LEPAR PONGOK',
				),
			350 =>
				array(
					'id'         => '1905051',
					'regency_id' => '1905',
					'name'       => 'KEPULAUAN PONGOK',
				),
			351 =>
				array(
					'id'         => '1906010',
					'regency_id' => '1906',
					'name'       => 'DENDANG',
				),
			352 =>
				array(
					'id'         => '1906011',
					'regency_id' => '1906',
					'name'       => 'SIMPANG PESAK',
				),
			353 =>
				array(
					'id'         => '1906020',
					'regency_id' => '1906',
					'name'       => 'GANTUNG',
				),
			354 =>
				array(
					'id'         => '1906021',
					'regency_id' => '1906',
					'name'       => 'SIMPANG RENGGIANG',
				),
			355 =>
				array(
					'id'         => '1906030',
					'regency_id' => '1906',
					'name'       => 'MANGGAR',
				),
			356 =>
				array(
					'id'         => '1906031',
					'regency_id' => '1906',
					'name'       => 'DAMAR',
				),
			357 =>
				array(
					'id'         => '1906040',
					'regency_id' => '1906',
					'name'       => 'KELAPA KAMPIT',
				),
			358 =>
				array(
					'id'         => '1971010',
					'regency_id' => '1971',
					'name'       => 'RANGKUI',
				),
			359 =>
				array(
					'id'         => '1971020',
					'regency_id' => '1971',
					'name'       => 'BUKIT INTAN',
				),
			360 =>
				array(
					'id'         => '1971021',
					'regency_id' => '1971',
					'name'       => 'GIRIMAYA',
				),
			361 =>
				array(
					'id'         => '1971030',
					'regency_id' => '1971',
					'name'       => 'PANGKAL BALAM',
				),
			362 =>
				array(
					'id'         => '1971031',
					'regency_id' => '1971',
					'name'       => 'GABEK',
				),
			363 =>
				array(
					'id'         => '1971040',
					'regency_id' => '1971',
					'name'       => 'TAMAN SARI',
				),
			364 =>
				array(
					'id'         => '1971041',
					'regency_id' => '1971',
					'name'       => 'GERUNGGANG',
				),
			365 =>
				array(
					'id'         => '2101010',
					'regency_id' => '2101',
					'name'       => 'MORO',
				),
			366 =>
				array(
					'id'         => '2101011',
					'regency_id' => '2101',
					'name'       => 'DURAI',
				),
			367 =>
				array(
					'id'         => '2101020',
					'regency_id' => '2101',
					'name'       => 'KUNDUR',
				),
			368 =>
				array(
					'id'         => '2101021',
					'regency_id' => '2101',
					'name'       => 'KUNDUR UTARA',
				),
			369 =>
				array(
					'id'         => '2101022',
					'regency_id' => '2101',
					'name'       => 'KUNDUR BARAT',
				),
			370 =>
				array(
					'id'         => '2101023',
					'regency_id' => '2101',
					'name'       => 'UNGAR',
				),
			371 =>
				array(
					'id'         => '2101024',
					'regency_id' => '2101',
					'name'       => 'BELAT',
				),
			372 =>
				array(
					'id'         => '2101030',
					'regency_id' => '2101',
					'name'       => 'KARIMUN',
				),
			373 =>
				array(
					'id'         => '2101031',
					'regency_id' => '2101',
					'name'       => 'BURU',
				),
			374 =>
				array(
					'id'         => '2101032',
					'regency_id' => '2101',
					'name'       => 'MERAL',
				),
			375 =>
				array(
					'id'         => '2101033',
					'regency_id' => '2101',
					'name'       => 'TEBING',
				),
			376 =>
				array(
					'id'         => '2101034',
					'regency_id' => '2101',
					'name'       => 'MERAL BARAT',
				),
			377 =>
				array(
					'id'         => '2102040',
					'regency_id' => '2102',
					'name'       => 'TELUK BINTAN',
				),
			378 =>
				array(
					'id'         => '2102050',
					'regency_id' => '2102',
					'name'       => 'BINTAN UTARA',
				),
			379 =>
				array(
					'id'         => '2102051',
					'regency_id' => '2102',
					'name'       => 'TELUK SEBONG',
				),
			380 =>
				array(
					'id'         => '2102052',
					'regency_id' => '2102',
					'name'       => 'SERI KUALA LOBAM',
				),
			381 =>
				array(
					'id'         => '2102060',
					'regency_id' => '2102',
					'name'       => 'BINTAN TIMUR',
				),
			382 =>
				array(
					'id'         => '2102061',
					'regency_id' => '2102',
					'name'       => 'GUNUNG KIJANG',
				),
			383 =>
				array(
					'id'         => '2102062',
					'regency_id' => '2102',
					'name'       => 'MANTANG',
				),
			384 =>
				array(
					'id'         => '2102063',
					'regency_id' => '2102',
					'name'       => 'BINTAN PESISIR',
				),
			385 =>
				array(
					'id'         => '2102064',
					'regency_id' => '2102',
					'name'       => 'TOAPAYA',
				),
			386 =>
				array(
					'id'         => '2102070',
					'regency_id' => '2102',
					'name'       => 'TAMBELAN',
				),
			387 =>
				array(
					'id'         => '2103030',
					'regency_id' => '2103',
					'name'       => 'MIDAI',
				),
			388 =>
				array(
					'id'         => '2103031',
					'regency_id' => '2103',
					'name'       => 'SUAK MIDAI',
				),
			389 =>
				array(
					'id'         => '2103040',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN BARAT',
				),
			390 =>
				array(
					'id'         => '2103041',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN UTARA',
				),
			391 =>
				array(
					'id'         => '2103042',
					'regency_id' => '2103',
					'name'       => 'PULAU LAUT',
				),
			392 =>
				array(
					'id'         => '2103043',
					'regency_id' => '2103',
					'name'       => 'PULAU TIGA',
				),
			393 =>
				array(
					'id'         => '2103044',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN BATUBI',
				),
			394 =>
				array(
					'id'         => '2103045',
					'regency_id' => '2103',
					'name'       => 'PULAU TIGA BARAT',
				),
			395 =>
				array(
					'id'         => '2103050',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN TIMUR',
				),
			396 =>
				array(
					'id'         => '2103051',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN TIMUR LAUT',
				),
			397 =>
				array(
					'id'         => '2103052',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN TENGAH',
				),
			398 =>
				array(
					'id'         => '2103053',
					'regency_id' => '2103',
					'name'       => 'BUNGURAN SELATAN',
				),
			399 =>
				array(
					'id'         => '2103060',
					'regency_id' => '2103',
					'name'       => 'SERASAN',
				),
			400 =>
				array(
					'id'         => '2103061',
					'regency_id' => '2103',
					'name'       => 'SUBI',
				),
			401 =>
				array(
					'id'         => '2103062',
					'regency_id' => '2103',
					'name'       => 'SERASAN TIMUR',
				),
			402 =>
				array(
					'id'         => '2104010',
					'regency_id' => '2104',
					'name'       => 'SINGKEP BARAT',
				),
			403 =>
				array(
					'id'         => '2104011',
					'regency_id' => '2104',
					'name'       => 'KEPULAUAN POSEK',
				),
			404 =>
				array(
					'id'         => '2104020',
					'regency_id' => '2104',
					'name'       => 'SINGKEP',
				),
			405 =>
				array(
					'id'         => '2104021',
					'regency_id' => '2104',
					'name'       => 'SINGKEP SELATAN',
				),
			406 =>
				array(
					'id'         => '2104022',
					'regency_id' => '2104',
					'name'       => 'SINGKEP PESISIR',
				),
			407 =>
				array(
					'id'         => '2104030',
					'regency_id' => '2104',
					'name'       => 'LINGGA',
				),
			408 =>
				array(
					'id'         => '2104031',
					'regency_id' => '2104',
					'name'       => 'SELAYAR',
				),
			409 =>
				array(
					'id'         => '2104032',
					'regency_id' => '2104',
					'name'       => 'LINGGA TIMUR',
				),
			410 =>
				array(
					'id'         => '2104040',
					'regency_id' => '2104',
					'name'       => 'LINGGA UTARA',
				),
			411 =>
				array(
					'id'         => '2104050',
					'regency_id' => '2104',
					'name'       => 'SENAYANG',
				),
			412 =>
				array(
					'id'         => '2105010',
					'regency_id' => '2105',
					'name'       => 'JEMAJA',
				),
			413 =>
				array(
					'id'         => '2105020',
					'regency_id' => '2105',
					'name'       => 'JEMAJA TIMUR',
				),
			414 =>
				array(
					'id'         => '2105030',
					'regency_id' => '2105',
					'name'       => 'SIANTAN SELATAN',
				),
			415 =>
				array(
					'id'         => '2105040',
					'regency_id' => '2105',
					'name'       => 'SIANTAN',
				),
			416 =>
				array(
					'id'         => '2105050',
					'regency_id' => '2105',
					'name'       => 'SIANTAN TIMUR',
				),
			417 =>
				array(
					'id'         => '2105060',
					'regency_id' => '2105',
					'name'       => 'SIANTAN TENGAH',
				),
			418 =>
				array(
					'id'         => '2105070',
					'regency_id' => '2105',
					'name'       => 'PALMATAK',
				),
			419 =>
				array(
					'id'         => '2171010',
					'regency_id' => '2171',
					'name'       => 'BELAKANG PADANG',
				),
			420 =>
				array(
					'id'         => '2171020',
					'regency_id' => '2171',
					'name'       => 'BULANG',
				),
			421 =>
				array(
					'id'         => '2171030',
					'regency_id' => '2171',
					'name'       => 'GALANG',
				),
			422 =>
				array(
					'id'         => '2171040',
					'regency_id' => '2171',
					'name'       => 'SEI BEDUK',
				),
			423 =>
				array(
					'id'         => '2171041',
					'regency_id' => '2171',
					'name'       => 'SAGULUNG',
				),
			424 =>
				array(
					'id'         => '2171050',
					'regency_id' => '2171',
					'name'       => 'NONGSA',
				),
			425 =>
				array(
					'id'         => '2171051',
					'regency_id' => '2171',
					'name'       => 'BATAM KOTA',
				),
			426 =>
				array(
					'id'         => '2171060',
					'regency_id' => '2171',
					'name'       => 'SEKUPANG',
				),
			427 =>
				array(
					'id'         => '2171061',
					'regency_id' => '2171',
					'name'       => 'BATU AJI',
				),
			428 =>
				array(
					'id'         => '2171070',
					'regency_id' => '2171',
					'name'       => 'LUBUK BAJA',
				),
			429 =>
				array(
					'id'         => '2171080',
					'regency_id' => '2171',
					'name'       => 'BATU AMPAR',
				),
			430 =>
				array(
					'id'         => '2171081',
					'regency_id' => '2171',
					'name'       => 'BENGKONG',
				),
			431 =>
				array(
					'id'         => '2172010',
					'regency_id' => '2172',
					'name'       => 'BUKIT BESTARI',
				),
			432 =>
				array(
					'id'         => '2172020',
					'regency_id' => '2172',
					'name'       => 'TANJUNGPINANG TIMUR',
				),
			433 =>
				array(
					'id'         => '2172030',
					'regency_id' => '2172',
					'name'       => 'TANJUNGPINANG KOTA',
				),
			434 =>
				array(
					'id'         => '2172040',
					'regency_id' => '2172',
					'name'       => 'TANJUNGPINANG BARAT',
				),
			435 =>
				array(
					'id'         => '3101010',
					'regency_id' => '3101',
					'name'       => 'KEPULAUAN SERIBU SELATAN',
				),
			436 =>
				array(
					'id'         => '3101020',
					'regency_id' => '3101',
					'name'       => 'KEPULAUAN SERIBU UTARA',
				),
			437 =>
				array(
					'id'         => '3171010',
					'regency_id' => '3171',
					'name'       => 'JAGAKARSA',
				),
			438 =>
				array(
					'id'         => '3171020',
					'regency_id' => '3171',
					'name'       => 'PASAR MINGGU',
				),
			439 =>
				array(
					'id'         => '3171030',
					'regency_id' => '3171',
					'name'       => 'CILANDAK',
				),
			440 =>
				array(
					'id'         => '3171040',
					'regency_id' => '3171',
					'name'       => 'PESANGGRAHAN',
				),
			441 =>
				array(
					'id'         => '3171050',
					'regency_id' => '3171',
					'name'       => 'KEBAYORAN LAMA',
				),
			442 =>
				array(
					'id'         => '3171060',
					'regency_id' => '3171',
					'name'       => 'KEBAYORAN BARU',
				),
			443 =>
				array(
					'id'         => '3171070',
					'regency_id' => '3171',
					'name'       => 'MAMPANG PRAPATAN',
				),
			444 =>
				array(
					'id'         => '3171080',
					'regency_id' => '3171',
					'name'       => 'PANCORAN',
				),
			445 =>
				array(
					'id'         => '3171090',
					'regency_id' => '3171',
					'name'       => 'TEBET',
				),
			446 =>
				array(
					'id'         => '3171100',
					'regency_id' => '3171',
					'name'       => 'SETIA BUDI',
				),
			447 =>
				array(
					'id'         => '3172010',
					'regency_id' => '3172',
					'name'       => 'PASAR REBO',
				),
			448 =>
				array(
					'id'         => '3172020',
					'regency_id' => '3172',
					'name'       => 'CIRACAS',
				),
			449 =>
				array(
					'id'         => '3172030',
					'regency_id' => '3172',
					'name'       => 'CIPAYUNG',
				),
			450 =>
				array(
					'id'         => '3172040',
					'regency_id' => '3172',
					'name'       => 'MAKASAR',
				),
			451 =>
				array(
					'id'         => '3172050',
					'regency_id' => '3172',
					'name'       => 'KRAMAT JATI',
				),
			452 =>
				array(
					'id'         => '3172060',
					'regency_id' => '3172',
					'name'       => 'JATINEGARA',
				),
			453 =>
				array(
					'id'         => '3172070',
					'regency_id' => '3172',
					'name'       => 'DUREN SAWIT',
				),
			454 =>
				array(
					'id'         => '3172080',
					'regency_id' => '3172',
					'name'       => 'CAKUNG',
				),
			455 =>
				array(
					'id'         => '3172090',
					'regency_id' => '3172',
					'name'       => 'PULO GADUNG',
				),
			456 =>
				array(
					'id'         => '3172100',
					'regency_id' => '3172',
					'name'       => 'MATRAMAN',
				),
			457 =>
				array(
					'id'         => '3173010',
					'regency_id' => '3173',
					'name'       => 'TANAH ABANG',
				),
			458 =>
				array(
					'id'         => '3173020',
					'regency_id' => '3173',
					'name'       => 'MENTENG',
				),
			459 =>
				array(
					'id'         => '3173030',
					'regency_id' => '3173',
					'name'       => 'SENEN',
				),
			460 =>
				array(
					'id'         => '3173040',
					'regency_id' => '3173',
					'name'       => 'JOHAR BARU',
				),
			461 =>
				array(
					'id'         => '3173050',
					'regency_id' => '3173',
					'name'       => 'CEMPAKA PUTIH',
				),
			462 =>
				array(
					'id'         => '3173060',
					'regency_id' => '3173',
					'name'       => 'KEMAYORAN',
				),
			463 =>
				array(
					'id'         => '3173070',
					'regency_id' => '3173',
					'name'       => 'SAWAH BESAR',
				),
			464 =>
				array(
					'id'         => '3173080',
					'regency_id' => '3173',
					'name'       => 'GAMBIR',
				),
			465 =>
				array(
					'id'         => '3174010',
					'regency_id' => '3174',
					'name'       => 'KEMBANGAN',
				),
			466 =>
				array(
					'id'         => '3174020',
					'regency_id' => '3174',
					'name'       => 'KEBON JERUK',
				),
			467 =>
				array(
					'id'         => '3174030',
					'regency_id' => '3174',
					'name'       => 'PALMERAH',
				),
			468 =>
				array(
					'id'         => '3174040',
					'regency_id' => '3174',
					'name'       => 'GROGOL PETAMBURAN',
				),
			469 =>
				array(
					'id'         => '3174050',
					'regency_id' => '3174',
					'name'       => 'TAMBORA',
				),
			470 =>
				array(
					'id'         => '3174060',
					'regency_id' => '3174',
					'name'       => 'TAMAN SARI',
				),
			471 =>
				array(
					'id'         => '3174070',
					'regency_id' => '3174',
					'name'       => 'CENGKARENG',
				),
			472 =>
				array(
					'id'         => '3174080',
					'regency_id' => '3174',
					'name'       => 'KALI DERES',
				),
			473 =>
				array(
					'id'         => '3175010',
					'regency_id' => '3175',
					'name'       => 'PENJARINGAN',
				),
			474 =>
				array(
					'id'         => '3175020',
					'regency_id' => '3175',
					'name'       => 'PADEMANGAN',
				),
			475 =>
				array(
					'id'         => '3175030',
					'regency_id' => '3175',
					'name'       => 'TANJUNG PRIOK',
				),
			476 =>
				array(
					'id'         => '3175040',
					'regency_id' => '3175',
					'name'       => 'KOJA',
				),
			477 =>
				array(
					'id'         => '3175050',
					'regency_id' => '3175',
					'name'       => 'KELAPA GADING',
				),
			478 =>
				array(
					'id'         => '3175060',
					'regency_id' => '3175',
					'name'       => 'CILINCING',
				),
			479 =>
				array(
					'id'         => '3201010',
					'regency_id' => '3201',
					'name'       => 'NANGGUNG',
				),
			480 =>
				array(
					'id'         => '3201020',
					'regency_id' => '3201',
					'name'       => 'LEUWILIANG',
				),
			481 =>
				array(
					'id'         => '3201021',
					'regency_id' => '3201',
					'name'       => 'LEUWISADENG',
				),
			482 =>
				array(
					'id'         => '3201030',
					'regency_id' => '3201',
					'name'       => 'PAMIJAHAN',
				),
			483 =>
				array(
					'id'         => '3201040',
					'regency_id' => '3201',
					'name'       => 'CIBUNGBULANG',
				),
			484 =>
				array(
					'id'         => '3201050',
					'regency_id' => '3201',
					'name'       => 'CIAMPEA',
				),
			485 =>
				array(
					'id'         => '3201051',
					'regency_id' => '3201',
					'name'       => 'TENJOLAYA',
				),
			486 =>
				array(
					'id'         => '3201060',
					'regency_id' => '3201',
					'name'       => 'DRAMAGA',
				),
			487 =>
				array(
					'id'         => '3201070',
					'regency_id' => '3201',
					'name'       => 'CIOMAS',
				),
			488 =>
				array(
					'id'         => '3201071',
					'regency_id' => '3201',
					'name'       => 'TAMANSARI',
				),
			489 =>
				array(
					'id'         => '3201080',
					'regency_id' => '3201',
					'name'       => 'CIJERUK',
				),
			490 =>
				array(
					'id'         => '3201081',
					'regency_id' => '3201',
					'name'       => 'CIGOMBONG',
				),
			491 =>
				array(
					'id'         => '3201090',
					'regency_id' => '3201',
					'name'       => 'CARINGIN',
				),
			492 =>
				array(
					'id'         => '3201100',
					'regency_id' => '3201',
					'name'       => 'CIAWI',
				),
			493 =>
				array(
					'id'         => '3201110',
					'regency_id' => '3201',
					'name'       => 'CISARUA',
				),
			494 =>
				array(
					'id'         => '3201120',
					'regency_id' => '3201',
					'name'       => 'MEGAMENDUNG',
				),
			495 =>
				array(
					'id'         => '3201130',
					'regency_id' => '3201',
					'name'       => 'SUKARAJA',
				),
			496 =>
				array(
					'id'         => '3201140',
					'regency_id' => '3201',
					'name'       => 'BABAKAN MADANG',
				),
			497 =>
				array(
					'id'         => '3201150',
					'regency_id' => '3201',
					'name'       => 'SUKAMAKMUR',
				),
			498 =>
				array(
					'id'         => '3201160',
					'regency_id' => '3201',
					'name'       => 'CARIU',
				),
			499 =>
				array(
					'id'         => '3201161',
					'regency_id' => '3201',
					'name'       => 'TANJUNGSARI',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '3201170',
					'regency_id' => '3201',
					'name'       => 'JONGGOL',
				),
			1   =>
				array(
					'id'         => '3201180',
					'regency_id' => '3201',
					'name'       => 'CILEUNGSI',
				),
			2   =>
				array(
					'id'         => '3201181',
					'regency_id' => '3201',
					'name'       => 'KELAPA NUNGGAL',
				),
			3   =>
				array(
					'id'         => '3201190',
					'regency_id' => '3201',
					'name'       => 'GUNUNG PUTRI',
				),
			4   =>
				array(
					'id'         => '3201200',
					'regency_id' => '3201',
					'name'       => 'CITEUREUP',
				),
			5   =>
				array(
					'id'         => '3201210',
					'regency_id' => '3201',
					'name'       => 'CIBINONG',
				),
			6   =>
				array(
					'id'         => '3201220',
					'regency_id' => '3201',
					'name'       => 'BOJONG GEDE',
				),
			7   =>
				array(
					'id'         => '3201221',
					'regency_id' => '3201',
					'name'       => 'TAJUR HALANG',
				),
			8   =>
				array(
					'id'         => '3201230',
					'regency_id' => '3201',
					'name'       => 'KEMANG',
				),
			9   =>
				array(
					'id'         => '3201231',
					'regency_id' => '3201',
					'name'       => 'RANCA BUNGUR',
				),
			10  =>
				array(
					'id'         => '3201240',
					'regency_id' => '3201',
					'name'       => 'PARUNG',
				),
			11  =>
				array(
					'id'         => '3201241',
					'regency_id' => '3201',
					'name'       => 'CISEENG',
				),
			12  =>
				array(
					'id'         => '3201250',
					'regency_id' => '3201',
					'name'       => 'GUNUNG SINDUR',
				),
			13  =>
				array(
					'id'         => '3201260',
					'regency_id' => '3201',
					'name'       => 'RUMPIN',
				),
			14  =>
				array(
					'id'         => '3201270',
					'regency_id' => '3201',
					'name'       => 'CIGUDEG',
				),
			15  =>
				array(
					'id'         => '3201271',
					'regency_id' => '3201',
					'name'       => 'SUKAJAYA',
				),
			16  =>
				array(
					'id'         => '3201280',
					'regency_id' => '3201',
					'name'       => 'JASINGA',
				),
			17  =>
				array(
					'id'         => '3201290',
					'regency_id' => '3201',
					'name'       => 'TENJO',
				),
			18  =>
				array(
					'id'         => '3201300',
					'regency_id' => '3201',
					'name'       => 'PARUNG PANJANG',
				),
			19  =>
				array(
					'id'         => '3202010',
					'regency_id' => '3202',
					'name'       => 'CIEMAS',
				),
			20  =>
				array(
					'id'         => '3202020',
					'regency_id' => '3202',
					'name'       => 'CIRACAP',
				),
			21  =>
				array(
					'id'         => '3202021',
					'regency_id' => '3202',
					'name'       => 'WALURAN',
				),
			22  =>
				array(
					'id'         => '3202030',
					'regency_id' => '3202',
					'name'       => 'SURADE',
				),
			23  =>
				array(
					'id'         => '3202031',
					'regency_id' => '3202',
					'name'       => 'CIBITUNG',
				),
			24  =>
				array(
					'id'         => '3202040',
					'regency_id' => '3202',
					'name'       => 'JAMPANG KULON',
				),
			25  =>
				array(
					'id'         => '3202041',
					'regency_id' => '3202',
					'name'       => 'CIMANGGU',
				),
			26  =>
				array(
					'id'         => '3202050',
					'regency_id' => '3202',
					'name'       => 'KALI BUNDER',
				),
			27  =>
				array(
					'id'         => '3202060',
					'regency_id' => '3202',
					'name'       => 'TEGAL BULEUD',
				),
			28  =>
				array(
					'id'         => '3202070',
					'regency_id' => '3202',
					'name'       => 'CIDOLOG',
				),
			29  =>
				array(
					'id'         => '3202080',
					'regency_id' => '3202',
					'name'       => 'SAGARANTEN',
				),
			30  =>
				array(
					'id'         => '3202081',
					'regency_id' => '3202',
					'name'       => 'CIDADAP',
				),
			31  =>
				array(
					'id'         => '3202082',
					'regency_id' => '3202',
					'name'       => 'CURUGKEMBAR',
				),
			32  =>
				array(
					'id'         => '3202090',
					'regency_id' => '3202',
					'name'       => 'PABUARAN',
				),
			33  =>
				array(
					'id'         => '3202100',
					'regency_id' => '3202',
					'name'       => 'LENGKONG',
				),
			34  =>
				array(
					'id'         => '3202110',
					'regency_id' => '3202',
					'name'       => 'PALABUHANRATU',
				),
			35  =>
				array(
					'id'         => '3202111',
					'regency_id' => '3202',
					'name'       => 'SIMPENAN',
				),
			36  =>
				array(
					'id'         => '3202120',
					'regency_id' => '3202',
					'name'       => 'WARUNG KIARA',
				),
			37  =>
				array(
					'id'         => '3202121',
					'regency_id' => '3202',
					'name'       => 'BANTARGADUNG',
				),
			38  =>
				array(
					'id'         => '3202130',
					'regency_id' => '3202',
					'name'       => 'JAMPANG TENGAH',
				),
			39  =>
				array(
					'id'         => '3202131',
					'regency_id' => '3202',
					'name'       => 'PURABAYA',
				),
			40  =>
				array(
					'id'         => '3202140',
					'regency_id' => '3202',
					'name'       => 'CIKEMBAR',
				),
			41  =>
				array(
					'id'         => '3202150',
					'regency_id' => '3202',
					'name'       => 'NYALINDUNG',
				),
			42  =>
				array(
					'id'         => '3202160',
					'regency_id' => '3202',
					'name'       => 'GEGER BITUNG',
				),
			43  =>
				array(
					'id'         => '3202170',
					'regency_id' => '3202',
					'name'       => 'SUKARAJA',
				),
			44  =>
				array(
					'id'         => '3202171',
					'regency_id' => '3202',
					'name'       => 'KEBONPEDES',
				),
			45  =>
				array(
					'id'         => '3202172',
					'regency_id' => '3202',
					'name'       => 'CIREUNGHAS',
				),
			46  =>
				array(
					'id'         => '3202173',
					'regency_id' => '3202',
					'name'       => 'SUKALARANG',
				),
			47  =>
				array(
					'id'         => '3202180',
					'regency_id' => '3202',
					'name'       => 'SUKABUMI',
				),
			48  =>
				array(
					'id'         => '3202190',
					'regency_id' => '3202',
					'name'       => 'KADUDAMPIT',
				),
			49  =>
				array(
					'id'         => '3202200',
					'regency_id' => '3202',
					'name'       => 'CISAAT',
				),
			50  =>
				array(
					'id'         => '3202201',
					'regency_id' => '3202',
					'name'       => 'GUNUNGGURUH',
				),
			51  =>
				array(
					'id'         => '3202210',
					'regency_id' => '3202',
					'name'       => 'CIBADAK',
				),
			52  =>
				array(
					'id'         => '3202211',
					'regency_id' => '3202',
					'name'       => 'CICANTAYAN',
				),
			53  =>
				array(
					'id'         => '3202212',
					'regency_id' => '3202',
					'name'       => 'CARINGIN',
				),
			54  =>
				array(
					'id'         => '3202220',
					'regency_id' => '3202',
					'name'       => 'NAGRAK',
				),
			55  =>
				array(
					'id'         => '3202221',
					'regency_id' => '3202',
					'name'       => 'CIAMBAR',
				),
			56  =>
				array(
					'id'         => '3202230',
					'regency_id' => '3202',
					'name'       => 'CICURUG',
				),
			57  =>
				array(
					'id'         => '3202240',
					'regency_id' => '3202',
					'name'       => 'CIDAHU',
				),
			58  =>
				array(
					'id'         => '3202250',
					'regency_id' => '3202',
					'name'       => 'PARAKAN SALAK',
				),
			59  =>
				array(
					'id'         => '3202260',
					'regency_id' => '3202',
					'name'       => 'PARUNG KUDA',
				),
			60  =>
				array(
					'id'         => '3202261',
					'regency_id' => '3202',
					'name'       => 'BOJONG GENTENG',
				),
			61  =>
				array(
					'id'         => '3202270',
					'regency_id' => '3202',
					'name'       => 'KALAPA NUNGGAL',
				),
			62  =>
				array(
					'id'         => '3202280',
					'regency_id' => '3202',
					'name'       => 'CIKIDANG',
				),
			63  =>
				array(
					'id'         => '3202290',
					'regency_id' => '3202',
					'name'       => 'CISOLOK',
				),
			64  =>
				array(
					'id'         => '3202291',
					'regency_id' => '3202',
					'name'       => 'CIKAKAK',
				),
			65  =>
				array(
					'id'         => '3202300',
					'regency_id' => '3202',
					'name'       => 'KABANDUNGAN',
				),
			66  =>
				array(
					'id'         => '3203010',
					'regency_id' => '3203',
					'name'       => 'AGRABINTA',
				),
			67  =>
				array(
					'id'         => '3203011',
					'regency_id' => '3203',
					'name'       => 'LELES',
				),
			68  =>
				array(
					'id'         => '3203020',
					'regency_id' => '3203',
					'name'       => 'SINDANGBARANG',
				),
			69  =>
				array(
					'id'         => '3203030',
					'regency_id' => '3203',
					'name'       => 'CIDAUN',
				),
			70  =>
				array(
					'id'         => '3203040',
					'regency_id' => '3203',
					'name'       => 'NARINGGUL',
				),
			71  =>
				array(
					'id'         => '3203050',
					'regency_id' => '3203',
					'name'       => 'CIBINONG',
				),
			72  =>
				array(
					'id'         => '3203051',
					'regency_id' => '3203',
					'name'       => 'CIKADU',
				),
			73  =>
				array(
					'id'         => '3203060',
					'regency_id' => '3203',
					'name'       => 'TANGGEUNG',
				),
			74  =>
				array(
					'id'         => '3203061',
					'regency_id' => '3203',
					'name'       => 'PASIRKUDA',
				),
			75  =>
				array(
					'id'         => '3203070',
					'regency_id' => '3203',
					'name'       => 'KADUPANDAK',
				),
			76  =>
				array(
					'id'         => '3203071',
					'regency_id' => '3203',
					'name'       => 'CIJATI',
				),
			77  =>
				array(
					'id'         => '3203080',
					'regency_id' => '3203',
					'name'       => 'TAKOKAK',
				),
			78  =>
				array(
					'id'         => '3203090',
					'regency_id' => '3203',
					'name'       => 'SUKANAGARA',
				),
			79  =>
				array(
					'id'         => '3203100',
					'regency_id' => '3203',
					'name'       => 'PAGELARAN',
				),
			80  =>
				array(
					'id'         => '3203110',
					'regency_id' => '3203',
					'name'       => 'CAMPAKA',
				),
			81  =>
				array(
					'id'         => '3203111',
					'regency_id' => '3203',
					'name'       => 'CAMPAKA MULYA',
				),
			82  =>
				array(
					'id'         => '3203120',
					'regency_id' => '3203',
					'name'       => 'CIBEBER',
				),
			83  =>
				array(
					'id'         => '3203130',
					'regency_id' => '3203',
					'name'       => 'WARUNGKONDANG',
				),
			84  =>
				array(
					'id'         => '3203131',
					'regency_id' => '3203',
					'name'       => 'GEKBRONG',
				),
			85  =>
				array(
					'id'         => '3203140',
					'regency_id' => '3203',
					'name'       => 'CILAKU',
				),
			86  =>
				array(
					'id'         => '3203150',
					'regency_id' => '3203',
					'name'       => 'SUKALUYU',
				),
			87  =>
				array(
					'id'         => '3203160',
					'regency_id' => '3203',
					'name'       => 'BOJONGPICUNG',
				),
			88  =>
				array(
					'id'         => '3203161',
					'regency_id' => '3203',
					'name'       => 'HAURWANGI',
				),
			89  =>
				array(
					'id'         => '3203170',
					'regency_id' => '3203',
					'name'       => 'CIRANJANG',
				),
			90  =>
				array(
					'id'         => '3203180',
					'regency_id' => '3203',
					'name'       => 'MANDE',
				),
			91  =>
				array(
					'id'         => '3203190',
					'regency_id' => '3203',
					'name'       => 'KARANGTENGAH',
				),
			92  =>
				array(
					'id'         => '3203200',
					'regency_id' => '3203',
					'name'       => 'CIANJUR',
				),
			93  =>
				array(
					'id'         => '3203210',
					'regency_id' => '3203',
					'name'       => 'CUGENANG',
				),
			94  =>
				array(
					'id'         => '3203220',
					'regency_id' => '3203',
					'name'       => 'PACET',
				),
			95  =>
				array(
					'id'         => '3203221',
					'regency_id' => '3203',
					'name'       => 'CIPANAS',
				),
			96  =>
				array(
					'id'         => '3203230',
					'regency_id' => '3203',
					'name'       => 'SUKARESMI',
				),
			97  =>
				array(
					'id'         => '3203240',
					'regency_id' => '3203',
					'name'       => 'CIKALONGKULON',
				),
			98  =>
				array(
					'id'         => '3204010',
					'regency_id' => '3204',
					'name'       => 'CIWIDEY',
				),
			99  =>
				array(
					'id'         => '3204011',
					'regency_id' => '3204',
					'name'       => 'RANCABALI',
				),
			100 =>
				array(
					'id'         => '3204020',
					'regency_id' => '3204',
					'name'       => 'PASIRJAMBU',
				),
			101 =>
				array(
					'id'         => '3204030',
					'regency_id' => '3204',
					'name'       => 'CIMAUNG',
				),
			102 =>
				array(
					'id'         => '3204040',
					'regency_id' => '3204',
					'name'       => 'PANGALENGAN',
				),
			103 =>
				array(
					'id'         => '3204050',
					'regency_id' => '3204',
					'name'       => 'KERTASARI',
				),
			104 =>
				array(
					'id'         => '3204060',
					'regency_id' => '3204',
					'name'       => 'PACET',
				),
			105 =>
				array(
					'id'         => '3204070',
					'regency_id' => '3204',
					'name'       => 'IBUN',
				),
			106 =>
				array(
					'id'         => '3204080',
					'regency_id' => '3204',
					'name'       => 'PASEH',
				),
			107 =>
				array(
					'id'         => '3204090',
					'regency_id' => '3204',
					'name'       => 'CIKANCUNG',
				),
			108 =>
				array(
					'id'         => '3204100',
					'regency_id' => '3204',
					'name'       => 'CICALENGKA',
				),
			109 =>
				array(
					'id'         => '3204101',
					'regency_id' => '3204',
					'name'       => 'NAGREG',
				),
			110 =>
				array(
					'id'         => '3204110',
					'regency_id' => '3204',
					'name'       => 'RANCAEKEK',
				),
			111 =>
				array(
					'id'         => '3204120',
					'regency_id' => '3204',
					'name'       => 'MAJALAYA',
				),
			112 =>
				array(
					'id'         => '3204121',
					'regency_id' => '3204',
					'name'       => 'SOLOKAN JERUK',
				),
			113 =>
				array(
					'id'         => '3204130',
					'regency_id' => '3204',
					'name'       => 'CIPARAY',
				),
			114 =>
				array(
					'id'         => '3204140',
					'regency_id' => '3204',
					'name'       => 'BALEENDAH',
				),
			115 =>
				array(
					'id'         => '3204150',
					'regency_id' => '3204',
					'name'       => 'ARJASARI',
				),
			116 =>
				array(
					'id'         => '3204160',
					'regency_id' => '3204',
					'name'       => 'BANJARAN',
				),
			117 =>
				array(
					'id'         => '3204161',
					'regency_id' => '3204',
					'name'       => 'CANGKUANG',
				),
			118 =>
				array(
					'id'         => '3204170',
					'regency_id' => '3204',
					'name'       => 'PAMEUNGPEUK',
				),
			119 =>
				array(
					'id'         => '3204180',
					'regency_id' => '3204',
					'name'       => 'KATAPANG',
				),
			120 =>
				array(
					'id'         => '3204190',
					'regency_id' => '3204',
					'name'       => 'SOREANG',
				),
			121 =>
				array(
					'id'         => '3204191',
					'regency_id' => '3204',
					'name'       => 'KUTAWARINGIN',
				),
			122 =>
				array(
					'id'         => '3204250',
					'regency_id' => '3204',
					'name'       => 'MARGAASIH',
				),
			123 =>
				array(
					'id'         => '3204260',
					'regency_id' => '3204',
					'name'       => 'MARGAHAYU',
				),
			124 =>
				array(
					'id'         => '3204270',
					'regency_id' => '3204',
					'name'       => 'DAYEUHKOLOT',
				),
			125 =>
				array(
					'id'         => '3204280',
					'regency_id' => '3204',
					'name'       => 'BOJONGSOANG',
				),
			126 =>
				array(
					'id'         => '3204290',
					'regency_id' => '3204',
					'name'       => 'CILEUNYI',
				),
			127 =>
				array(
					'id'         => '3204300',
					'regency_id' => '3204',
					'name'       => 'CILENGKRANG',
				),
			128 =>
				array(
					'id'         => '3204310',
					'regency_id' => '3204',
					'name'       => 'CIMENYAN',
				),
			129 =>
				array(
					'id'         => '3205010',
					'regency_id' => '3205',
					'name'       => 'CISEWU',
				),
			130 =>
				array(
					'id'         => '3205011',
					'regency_id' => '3205',
					'name'       => 'CARINGIN',
				),
			131 =>
				array(
					'id'         => '3205020',
					'regency_id' => '3205',
					'name'       => 'TALEGONG',
				),
			132 =>
				array(
					'id'         => '3205030',
					'regency_id' => '3205',
					'name'       => 'BUNGBULANG',
				),
			133 =>
				array(
					'id'         => '3205031',
					'regency_id' => '3205',
					'name'       => 'MEKARMUKTI',
				),
			134 =>
				array(
					'id'         => '3205040',
					'regency_id' => '3205',
					'name'       => 'PAMULIHAN',
				),
			135 =>
				array(
					'id'         => '3205050',
					'regency_id' => '3205',
					'name'       => 'PAKENJENG',
				),
			136 =>
				array(
					'id'         => '3205060',
					'regency_id' => '3205',
					'name'       => 'CIKELET',
				),
			137 =>
				array(
					'id'         => '3205070',
					'regency_id' => '3205',
					'name'       => 'PAMEUNGPEUK',
				),
			138 =>
				array(
					'id'         => '3205080',
					'regency_id' => '3205',
					'name'       => 'CIBALONG',
				),
			139 =>
				array(
					'id'         => '3205090',
					'regency_id' => '3205',
					'name'       => 'CISOMPET',
				),
			140 =>
				array(
					'id'         => '3205100',
					'regency_id' => '3205',
					'name'       => 'PEUNDEUY',
				),
			141 =>
				array(
					'id'         => '3205110',
					'regency_id' => '3205',
					'name'       => 'SINGAJAYA',
				),
			142 =>
				array(
					'id'         => '3205111',
					'regency_id' => '3205',
					'name'       => 'CIHURIP',
				),
			143 =>
				array(
					'id'         => '3205120',
					'regency_id' => '3205',
					'name'       => 'CIKAJANG',
				),
			144 =>
				array(
					'id'         => '3205130',
					'regency_id' => '3205',
					'name'       => 'BANJARWANGI',
				),
			145 =>
				array(
					'id'         => '3205140',
					'regency_id' => '3205',
					'name'       => 'CILAWU',
				),
			146 =>
				array(
					'id'         => '3205150',
					'regency_id' => '3205',
					'name'       => 'BAYONGBONG',
				),
			147 =>
				array(
					'id'         => '3205151',
					'regency_id' => '3205',
					'name'       => 'CIGEDUG',
				),
			148 =>
				array(
					'id'         => '3205160',
					'regency_id' => '3205',
					'name'       => 'CISURUPAN',
				),
			149 =>
				array(
					'id'         => '3205161',
					'regency_id' => '3205',
					'name'       => 'SUKARESMI',
				),
			150 =>
				array(
					'id'         => '3205170',
					'regency_id' => '3205',
					'name'       => 'SAMARANG',
				),
			151 =>
				array(
					'id'         => '3205171',
					'regency_id' => '3205',
					'name'       => 'PASIRWANGI',
				),
			152 =>
				array(
					'id'         => '3205181',
					'regency_id' => '3205',
					'name'       => 'TAROGONG KIDUL',
				),
			153 =>
				array(
					'id'         => '3205182',
					'regency_id' => '3205',
					'name'       => 'TAROGONG KALER',
				),
			154 =>
				array(
					'id'         => '3205190',
					'regency_id' => '3205',
					'name'       => 'GARUT KOTA',
				),
			155 =>
				array(
					'id'         => '3205200',
					'regency_id' => '3205',
					'name'       => 'KARANGPAWITAN',
				),
			156 =>
				array(
					'id'         => '3205210',
					'regency_id' => '3205',
					'name'       => 'WANARAJA',
				),
			157 =>
				array(
					'id'         => '3205211',
					'regency_id' => '3205',
					'name'       => 'SUCINARAJA',
				),
			158 =>
				array(
					'id'         => '3205212',
					'regency_id' => '3205',
					'name'       => 'PANGATIKAN',
				),
			159 =>
				array(
					'id'         => '3205220',
					'regency_id' => '3205',
					'name'       => 'SUKAWENING',
				),
			160 =>
				array(
					'id'         => '3205221',
					'regency_id' => '3205',
					'name'       => 'KARANGTENGAH',
				),
			161 =>
				array(
					'id'         => '3205230',
					'regency_id' => '3205',
					'name'       => 'BANYURESMI',
				),
			162 =>
				array(
					'id'         => '3205240',
					'regency_id' => '3205',
					'name'       => 'LELES',
				),
			163 =>
				array(
					'id'         => '3205250',
					'regency_id' => '3205',
					'name'       => 'LEUWIGOONG',
				),
			164 =>
				array(
					'id'         => '3205260',
					'regency_id' => '3205',
					'name'       => 'CIBATU',
				),
			165 =>
				array(
					'id'         => '3205261',
					'regency_id' => '3205',
					'name'       => 'KERSAMANAH',
				),
			166 =>
				array(
					'id'         => '3205270',
					'regency_id' => '3205',
					'name'       => 'CIBIUK',
				),
			167 =>
				array(
					'id'         => '3205280',
					'regency_id' => '3205',
					'name'       => 'KADUNGORA',
				),
			168 =>
				array(
					'id'         => '3205290',
					'regency_id' => '3205',
					'name'       => 'BLUBUR LIMBANGAN',
				),
			169 =>
				array(
					'id'         => '3205300',
					'regency_id' => '3205',
					'name'       => 'SELAAWI',
				),
			170 =>
				array(
					'id'         => '3205310',
					'regency_id' => '3205',
					'name'       => 'MALANGBONG',
				),
			171 =>
				array(
					'id'         => '3206010',
					'regency_id' => '3206',
					'name'       => 'CIPATUJAH',
				),
			172 =>
				array(
					'id'         => '3206020',
					'regency_id' => '3206',
					'name'       => 'KARANGNUNGGAL',
				),
			173 =>
				array(
					'id'         => '3206030',
					'regency_id' => '3206',
					'name'       => 'CIKALONG',
				),
			174 =>
				array(
					'id'         => '3206040',
					'regency_id' => '3206',
					'name'       => 'PANCATENGAH',
				),
			175 =>
				array(
					'id'         => '3206050',
					'regency_id' => '3206',
					'name'       => 'CIKATOMAS',
				),
			176 =>
				array(
					'id'         => '3206060',
					'regency_id' => '3206',
					'name'       => 'CIBALONG',
				),
			177 =>
				array(
					'id'         => '3206061',
					'regency_id' => '3206',
					'name'       => 'PARUNGPONTENG',
				),
			178 =>
				array(
					'id'         => '3206070',
					'regency_id' => '3206',
					'name'       => 'BANTARKALONG',
				),
			179 =>
				array(
					'id'         => '3206071',
					'regency_id' => '3206',
					'name'       => 'BOJONGASIH',
				),
			180 =>
				array(
					'id'         => '3206072',
					'regency_id' => '3206',
					'name'       => 'CULAMEGA',
				),
			181 =>
				array(
					'id'         => '3206080',
					'regency_id' => '3206',
					'name'       => 'BOJONGGAMBIR',
				),
			182 =>
				array(
					'id'         => '3206090',
					'regency_id' => '3206',
					'name'       => 'SODONGHILIR',
				),
			183 =>
				array(
					'id'         => '3206100',
					'regency_id' => '3206',
					'name'       => 'TARAJU',
				),
			184 =>
				array(
					'id'         => '3206110',
					'regency_id' => '3206',
					'name'       => 'SALAWU',
				),
			185 =>
				array(
					'id'         => '3206111',
					'regency_id' => '3206',
					'name'       => 'PUSPAHIANG',
				),
			186 =>
				array(
					'id'         => '3206120',
					'regency_id' => '3206',
					'name'       => 'TANJUNGJAYA',
				),
			187 =>
				array(
					'id'         => '3206130',
					'regency_id' => '3206',
					'name'       => 'SUKARAJA',
				),
			188 =>
				array(
					'id'         => '3206140',
					'regency_id' => '3206',
					'name'       => 'SALOPA',
				),
			189 =>
				array(
					'id'         => '3206141',
					'regency_id' => '3206',
					'name'       => 'JATIWARAS',
				),
			190 =>
				array(
					'id'         => '3206150',
					'regency_id' => '3206',
					'name'       => 'CINEAM',
				),
			191 =>
				array(
					'id'         => '3206151',
					'regency_id' => '3206',
					'name'       => 'KARANGJAYA',
				),
			192 =>
				array(
					'id'         => '3206160',
					'regency_id' => '3206',
					'name'       => 'MANONJAYA',
				),
			193 =>
				array(
					'id'         => '3206161',
					'regency_id' => '3206',
					'name'       => 'GUNUNGTANJUNG',
				),
			194 =>
				array(
					'id'         => '3206190',
					'regency_id' => '3206',
					'name'       => 'SINGAPARNA',
				),
			195 =>
				array(
					'id'         => '3206191',
					'regency_id' => '3206',
					'name'       => 'SUKARAME',
				),
			196 =>
				array(
					'id'         => '3206192',
					'regency_id' => '3206',
					'name'       => 'MANGUNREJA',
				),
			197 =>
				array(
					'id'         => '3206200',
					'regency_id' => '3206',
					'name'       => 'CIGALONTANG',
				),
			198 =>
				array(
					'id'         => '3206210',
					'regency_id' => '3206',
					'name'       => 'LEUWISARI',
				),
			199 =>
				array(
					'id'         => '3206211',
					'regency_id' => '3206',
					'name'       => 'SARIWANGI',
				),
			200 =>
				array(
					'id'         => '3206212',
					'regency_id' => '3206',
					'name'       => 'PADAKEMBANG',
				),
			201 =>
				array(
					'id'         => '3206221',
					'regency_id' => '3206',
					'name'       => 'SUKARATU',
				),
			202 =>
				array(
					'id'         => '3206230',
					'regency_id' => '3206',
					'name'       => 'CISAYONG',
				),
			203 =>
				array(
					'id'         => '3206231',
					'regency_id' => '3206',
					'name'       => 'SUKAHENING',
				),
			204 =>
				array(
					'id'         => '3206240',
					'regency_id' => '3206',
					'name'       => 'RAJAPOLAH',
				),
			205 =>
				array(
					'id'         => '3206250',
					'regency_id' => '3206',
					'name'       => 'JAMANIS',
				),
			206 =>
				array(
					'id'         => '3206260',
					'regency_id' => '3206',
					'name'       => 'CIAWI',
				),
			207 =>
				array(
					'id'         => '3206261',
					'regency_id' => '3206',
					'name'       => 'KADIPATEN',
				),
			208 =>
				array(
					'id'         => '3206270',
					'regency_id' => '3206',
					'name'       => 'PAGERAGEUNG',
				),
			209 =>
				array(
					'id'         => '3206271',
					'regency_id' => '3206',
					'name'       => 'SUKARESIK',
				),
			210 =>
				array(
					'id'         => '3207100',
					'regency_id' => '3207',
					'name'       => 'BANJARSARI',
				),
			211 =>
				array(
					'id'         => '3207101',
					'regency_id' => '3207',
					'name'       => 'BANJARANYAR',
				),
			212 =>
				array(
					'id'         => '3207110',
					'regency_id' => '3207',
					'name'       => 'LAKBOK',
				),
			213 =>
				array(
					'id'         => '3207111',
					'regency_id' => '3207',
					'name'       => 'PURWADADI',
				),
			214 =>
				array(
					'id'         => '3207120',
					'regency_id' => '3207',
					'name'       => 'PAMARICAN',
				),
			215 =>
				array(
					'id'         => '3207130',
					'regency_id' => '3207',
					'name'       => 'CIDOLOG',
				),
			216 =>
				array(
					'id'         => '3207140',
					'regency_id' => '3207',
					'name'       => 'CIMARAGAS',
				),
			217 =>
				array(
					'id'         => '3207150',
					'regency_id' => '3207',
					'name'       => 'CIJEUNGJING',
				),
			218 =>
				array(
					'id'         => '3207160',
					'regency_id' => '3207',
					'name'       => 'CISAGA',
				),
			219 =>
				array(
					'id'         => '3207170',
					'regency_id' => '3207',
					'name'       => 'TAMBAKSARI',
				),
			220 =>
				array(
					'id'         => '3207180',
					'regency_id' => '3207',
					'name'       => 'RANCAH',
				),
			221 =>
				array(
					'id'         => '3207190',
					'regency_id' => '3207',
					'name'       => 'RAJADESA',
				),
			222 =>
				array(
					'id'         => '3207200',
					'regency_id' => '3207',
					'name'       => 'SUKADANA',
				),
			223 =>
				array(
					'id'         => '3207210',
					'regency_id' => '3207',
					'name'       => 'CIAMIS',
				),
			224 =>
				array(
					'id'         => '3207211',
					'regency_id' => '3207',
					'name'       => 'BAREGBEG',
				),
			225 =>
				array(
					'id'         => '3207220',
					'regency_id' => '3207',
					'name'       => 'CIKONENG',
				),
			226 =>
				array(
					'id'         => '3207221',
					'regency_id' => '3207',
					'name'       => 'SINDANGKASIH',
				),
			227 =>
				array(
					'id'         => '3207230',
					'regency_id' => '3207',
					'name'       => 'CIHAURBEUTI',
				),
			228 =>
				array(
					'id'         => '3207240',
					'regency_id' => '3207',
					'name'       => 'SADANANYA',
				),
			229 =>
				array(
					'id'         => '3207250',
					'regency_id' => '3207',
					'name'       => 'CIPAKU',
				),
			230 =>
				array(
					'id'         => '3207260',
					'regency_id' => '3207',
					'name'       => 'JATINAGARA',
				),
			231 =>
				array(
					'id'         => '3207270',
					'regency_id' => '3207',
					'name'       => 'PANAWANGAN',
				),
			232 =>
				array(
					'id'         => '3207280',
					'regency_id' => '3207',
					'name'       => 'KAWALI',
				),
			233 =>
				array(
					'id'         => '3207281',
					'regency_id' => '3207',
					'name'       => 'LUMBUNG',
				),
			234 =>
				array(
					'id'         => '3207290',
					'regency_id' => '3207',
					'name'       => 'PANJALU',
				),
			235 =>
				array(
					'id'         => '3207291',
					'regency_id' => '3207',
					'name'       => 'SUKAMANTRI',
				),
			236 =>
				array(
					'id'         => '3207300',
					'regency_id' => '3207',
					'name'       => 'PANUMBANGAN',
				),
			237 =>
				array(
					'id'         => '3208010',
					'regency_id' => '3208',
					'name'       => 'DARMA',
				),
			238 =>
				array(
					'id'         => '3208020',
					'regency_id' => '3208',
					'name'       => 'KADUGEDE',
				),
			239 =>
				array(
					'id'         => '3208021',
					'regency_id' => '3208',
					'name'       => 'NUSAHERANG',
				),
			240 =>
				array(
					'id'         => '3208030',
					'regency_id' => '3208',
					'name'       => 'CINIRU',
				),
			241 =>
				array(
					'id'         => '3208031',
					'regency_id' => '3208',
					'name'       => 'HANTARA',
				),
			242 =>
				array(
					'id'         => '3208040',
					'regency_id' => '3208',
					'name'       => 'SELAJAMBE',
				),
			243 =>
				array(
					'id'         => '3208050',
					'regency_id' => '3208',
					'name'       => 'SUBANG',
				),
			244 =>
				array(
					'id'         => '3208051',
					'regency_id' => '3208',
					'name'       => 'CILEBAK',
				),
			245 =>
				array(
					'id'         => '3208060',
					'regency_id' => '3208',
					'name'       => 'CIWARU',
				),
			246 =>
				array(
					'id'         => '3208061',
					'regency_id' => '3208',
					'name'       => 'KARANGKANCANA',
				),
			247 =>
				array(
					'id'         => '3208070',
					'regency_id' => '3208',
					'name'       => 'CIBINGBIN',
				),
			248 =>
				array(
					'id'         => '3208071',
					'regency_id' => '3208',
					'name'       => 'CIBEUREUM',
				),
			249 =>
				array(
					'id'         => '3208080',
					'regency_id' => '3208',
					'name'       => 'LURAGUNG',
				),
			250 =>
				array(
					'id'         => '3208081',
					'regency_id' => '3208',
					'name'       => 'CIMAHI',
				),
			251 =>
				array(
					'id'         => '3208090',
					'regency_id' => '3208',
					'name'       => 'CIDAHU',
				),
			252 =>
				array(
					'id'         => '3208091',
					'regency_id' => '3208',
					'name'       => 'KALIMANGGIS',
				),
			253 =>
				array(
					'id'         => '3208100',
					'regency_id' => '3208',
					'name'       => 'CIAWIGEBANG',
				),
			254 =>
				array(
					'id'         => '3208101',
					'regency_id' => '3208',
					'name'       => 'CIPICUNG',
				),
			255 =>
				array(
					'id'         => '3208110',
					'regency_id' => '3208',
					'name'       => 'LEBAKWANGI',
				),
			256 =>
				array(
					'id'         => '3208111',
					'regency_id' => '3208',
					'name'       => 'MALEBER',
				),
			257 =>
				array(
					'id'         => '3208120',
					'regency_id' => '3208',
					'name'       => 'GARAWANGI',
				),
			258 =>
				array(
					'id'         => '3208121',
					'regency_id' => '3208',
					'name'       => 'SINDANGAGUNG',
				),
			259 =>
				array(
					'id'         => '3208130',
					'regency_id' => '3208',
					'name'       => 'KUNINGAN',
				),
			260 =>
				array(
					'id'         => '3208140',
					'regency_id' => '3208',
					'name'       => 'CIGUGUR',
				),
			261 =>
				array(
					'id'         => '3208150',
					'regency_id' => '3208',
					'name'       => 'KRAMATMULYA',
				),
			262 =>
				array(
					'id'         => '3208160',
					'regency_id' => '3208',
					'name'       => 'JALAKSANA',
				),
			263 =>
				array(
					'id'         => '3208161',
					'regency_id' => '3208',
					'name'       => 'JAPARA',
				),
			264 =>
				array(
					'id'         => '3208170',
					'regency_id' => '3208',
					'name'       => 'CILIMUS',
				),
			265 =>
				array(
					'id'         => '3208171',
					'regency_id' => '3208',
					'name'       => 'CIGANDAMEKAR',
				),
			266 =>
				array(
					'id'         => '3208180',
					'regency_id' => '3208',
					'name'       => 'MANDIRANCAN',
				),
			267 =>
				array(
					'id'         => '3208181',
					'regency_id' => '3208',
					'name'       => 'PANCALANG',
				),
			268 =>
				array(
					'id'         => '3208190',
					'regency_id' => '3208',
					'name'       => 'PASAWAHAN',
				),
			269 =>
				array(
					'id'         => '3209010',
					'regency_id' => '3209',
					'name'       => 'WALED',
				),
			270 =>
				array(
					'id'         => '3209011',
					'regency_id' => '3209',
					'name'       => 'PASALEMAN',
				),
			271 =>
				array(
					'id'         => '3209020',
					'regency_id' => '3209',
					'name'       => 'CILEDUG',
				),
			272 =>
				array(
					'id'         => '3209021',
					'regency_id' => '3209',
					'name'       => 'PABUARAN',
				),
			273 =>
				array(
					'id'         => '3209030',
					'regency_id' => '3209',
					'name'       => 'LOSARI',
				),
			274 =>
				array(
					'id'         => '3209031',
					'regency_id' => '3209',
					'name'       => 'PABEDILAN',
				),
			275 =>
				array(
					'id'         => '3209040',
					'regency_id' => '3209',
					'name'       => 'BABAKAN',
				),
			276 =>
				array(
					'id'         => '3209041',
					'regency_id' => '3209',
					'name'       => 'GEBANG',
				),
			277 =>
				array(
					'id'         => '3209050',
					'regency_id' => '3209',
					'name'       => 'KARANGSEMBUNG',
				),
			278 =>
				array(
					'id'         => '3209051',
					'regency_id' => '3209',
					'name'       => 'KARANGWARENG',
				),
			279 =>
				array(
					'id'         => '3209060',
					'regency_id' => '3209',
					'name'       => 'LEMAHABANG',
				),
			280 =>
				array(
					'id'         => '3209061',
					'regency_id' => '3209',
					'name'       => 'SUSUKANLEBAK',
				),
			281 =>
				array(
					'id'         => '3209070',
					'regency_id' => '3209',
					'name'       => 'SEDONG',
				),
			282 =>
				array(
					'id'         => '3209080',
					'regency_id' => '3209',
					'name'       => 'ASTANAJAPURA',
				),
			283 =>
				array(
					'id'         => '3209081',
					'regency_id' => '3209',
					'name'       => 'PANGENAN',
				),
			284 =>
				array(
					'id'         => '3209090',
					'regency_id' => '3209',
					'name'       => 'MUNDU',
				),
			285 =>
				array(
					'id'         => '3209100',
					'regency_id' => '3209',
					'name'       => 'BEBER',
				),
			286 =>
				array(
					'id'         => '3209101',
					'regency_id' => '3209',
					'name'       => 'GREGED',
				),
			287 =>
				array(
					'id'         => '3209111',
					'regency_id' => '3209',
					'name'       => 'TALUN',
				),
			288 =>
				array(
					'id'         => '3209120',
					'regency_id' => '3209',
					'name'       => 'SUMBER',
				),
			289 =>
				array(
					'id'         => '3209121',
					'regency_id' => '3209',
					'name'       => 'DUKUPUNTANG',
				),
			290 =>
				array(
					'id'         => '3209130',
					'regency_id' => '3209',
					'name'       => 'PALIMANAN',
				),
			291 =>
				array(
					'id'         => '3209140',
					'regency_id' => '3209',
					'name'       => 'PLUMBON',
				),
			292 =>
				array(
					'id'         => '3209141',
					'regency_id' => '3209',
					'name'       => 'DEPOK',
				),
			293 =>
				array(
					'id'         => '3209150',
					'regency_id' => '3209',
					'name'       => 'WERU',
				),
			294 =>
				array(
					'id'         => '3209151',
					'regency_id' => '3209',
					'name'       => 'PLERED',
				),
			295 =>
				array(
					'id'         => '3209161',
					'regency_id' => '3209',
					'name'       => 'TENGAH TANI',
				),
			296 =>
				array(
					'id'         => '3209162',
					'regency_id' => '3209',
					'name'       => 'KEDAWUNG',
				),
			297 =>
				array(
					'id'         => '3209171',
					'regency_id' => '3209',
					'name'       => 'GUNUNGJATI',
				),
			298 =>
				array(
					'id'         => '3209180',
					'regency_id' => '3209',
					'name'       => 'KAPETAKAN',
				),
			299 =>
				array(
					'id'         => '3209181',
					'regency_id' => '3209',
					'name'       => 'SURANENGGALA',
				),
			300 =>
				array(
					'id'         => '3209190',
					'regency_id' => '3209',
					'name'       => 'KLANGENAN',
				),
			301 =>
				array(
					'id'         => '3209191',
					'regency_id' => '3209',
					'name'       => 'JAMBLANG',
				),
			302 =>
				array(
					'id'         => '3209200',
					'regency_id' => '3209',
					'name'       => 'ARJAWINANGUN',
				),
			303 =>
				array(
					'id'         => '3209201',
					'regency_id' => '3209',
					'name'       => 'PANGURAGAN',
				),
			304 =>
				array(
					'id'         => '3209210',
					'regency_id' => '3209',
					'name'       => 'CIWARINGIN',
				),
			305 =>
				array(
					'id'         => '3209211',
					'regency_id' => '3209',
					'name'       => 'GEMPOL',
				),
			306 =>
				array(
					'id'         => '3209220',
					'regency_id' => '3209',
					'name'       => 'SUSUKAN',
				),
			307 =>
				array(
					'id'         => '3209230',
					'regency_id' => '3209',
					'name'       => 'GEGESIK',
				),
			308 =>
				array(
					'id'         => '3209231',
					'regency_id' => '3209',
					'name'       => 'KALIWEDI',
				),
			309 =>
				array(
					'id'         => '3210010',
					'regency_id' => '3210',
					'name'       => 'LEMAHSUGIH',
				),
			310 =>
				array(
					'id'         => '3210020',
					'regency_id' => '3210',
					'name'       => 'BANTARUJEG',
				),
			311 =>
				array(
					'id'         => '3210021',
					'regency_id' => '3210',
					'name'       => 'MALAUSMA',
				),
			312 =>
				array(
					'id'         => '3210030',
					'regency_id' => '3210',
					'name'       => 'CIKIJING',
				),
			313 =>
				array(
					'id'         => '3210031',
					'regency_id' => '3210',
					'name'       => 'CINGAMBUL',
				),
			314 =>
				array(
					'id'         => '3210040',
					'regency_id' => '3210',
					'name'       => 'TALAGA',
				),
			315 =>
				array(
					'id'         => '3210041',
					'regency_id' => '3210',
					'name'       => 'BANJARAN',
				),
			316 =>
				array(
					'id'         => '3210050',
					'regency_id' => '3210',
					'name'       => 'ARGAPURA',
				),
			317 =>
				array(
					'id'         => '3210060',
					'regency_id' => '3210',
					'name'       => 'MAJA',
				),
			318 =>
				array(
					'id'         => '3210070',
					'regency_id' => '3210',
					'name'       => 'MAJALENGKA',
				),
			319 =>
				array(
					'id'         => '3210080',
					'regency_id' => '3210',
					'name'       => 'CIGASONG',
				),
			320 =>
				array(
					'id'         => '3210090',
					'regency_id' => '3210',
					'name'       => 'SUKAHAJI',
				),
			321 =>
				array(
					'id'         => '3210091',
					'regency_id' => '3210',
					'name'       => 'SINDANG',
				),
			322 =>
				array(
					'id'         => '3210100',
					'regency_id' => '3210',
					'name'       => 'RAJAGALUH',
				),
			323 =>
				array(
					'id'         => '3210110',
					'regency_id' => '3210',
					'name'       => 'SINDANGWANGI',
				),
			324 =>
				array(
					'id'         => '3210120',
					'regency_id' => '3210',
					'name'       => 'LEUWIMUNDING',
				),
			325 =>
				array(
					'id'         => '3210130',
					'regency_id' => '3210',
					'name'       => 'PALASAH',
				),
			326 =>
				array(
					'id'         => '3210140',
					'regency_id' => '3210',
					'name'       => 'JATIWANGI',
				),
			327 =>
				array(
					'id'         => '3210150',
					'regency_id' => '3210',
					'name'       => 'DAWUAN',
				),
			328 =>
				array(
					'id'         => '3210151',
					'regency_id' => '3210',
					'name'       => 'KASOKANDEL',
				),
			329 =>
				array(
					'id'         => '3210160',
					'regency_id' => '3210',
					'name'       => 'PANYINGKIRAN',
				),
			330 =>
				array(
					'id'         => '3210170',
					'regency_id' => '3210',
					'name'       => 'KADIPATEN',
				),
			331 =>
				array(
					'id'         => '3210180',
					'regency_id' => '3210',
					'name'       => 'KERTAJATI',
				),
			332 =>
				array(
					'id'         => '3210190',
					'regency_id' => '3210',
					'name'       => 'JATITUJUH',
				),
			333 =>
				array(
					'id'         => '3210200',
					'regency_id' => '3210',
					'name'       => 'LIGUNG',
				),
			334 =>
				array(
					'id'         => '3210210',
					'regency_id' => '3210',
					'name'       => 'SUMBERJAYA',
				),
			335 =>
				array(
					'id'         => '3211010',
					'regency_id' => '3211',
					'name'       => 'JATINANGOR',
				),
			336 =>
				array(
					'id'         => '3211020',
					'regency_id' => '3211',
					'name'       => 'CIMANGGUNG',
				),
			337 =>
				array(
					'id'         => '3211030',
					'regency_id' => '3211',
					'name'       => 'TANJUNGSARI',
				),
			338 =>
				array(
					'id'         => '3211031',
					'regency_id' => '3211',
					'name'       => 'SUKASARI',
				),
			339 =>
				array(
					'id'         => '3211032',
					'regency_id' => '3211',
					'name'       => 'PAMULIHAN',
				),
			340 =>
				array(
					'id'         => '3211040',
					'regency_id' => '3211',
					'name'       => 'RANCAKALONG',
				),
			341 =>
				array(
					'id'         => '3211050',
					'regency_id' => '3211',
					'name'       => 'SUMEDANG SELATAN',
				),
			342 =>
				array(
					'id'         => '3211060',
					'regency_id' => '3211',
					'name'       => 'SUMEDANG UTARA',
				),
			343 =>
				array(
					'id'         => '3211061',
					'regency_id' => '3211',
					'name'       => 'GANEAS',
				),
			344 =>
				array(
					'id'         => '3211070',
					'regency_id' => '3211',
					'name'       => 'SITURAJA',
				),
			345 =>
				array(
					'id'         => '3211071',
					'regency_id' => '3211',
					'name'       => 'CISITU',
				),
			346 =>
				array(
					'id'         => '3211080',
					'regency_id' => '3211',
					'name'       => 'DARMARAJA',
				),
			347 =>
				array(
					'id'         => '3211090',
					'regency_id' => '3211',
					'name'       => 'CIBUGEL',
				),
			348 =>
				array(
					'id'         => '3211100',
					'regency_id' => '3211',
					'name'       => 'WADO',
				),
			349 =>
				array(
					'id'         => '3211101',
					'regency_id' => '3211',
					'name'       => 'JATINUNGGAL',
				),
			350 =>
				array(
					'id'         => '3211111',
					'regency_id' => '3211',
					'name'       => 'JATIGEDE',
				),
			351 =>
				array(
					'id'         => '3211120',
					'regency_id' => '3211',
					'name'       => 'TOMO',
				),
			352 =>
				array(
					'id'         => '3211130',
					'regency_id' => '3211',
					'name'       => 'UJUNG JAYA',
				),
			353 =>
				array(
					'id'         => '3211140',
					'regency_id' => '3211',
					'name'       => 'CONGGEANG',
				),
			354 =>
				array(
					'id'         => '3211150',
					'regency_id' => '3211',
					'name'       => 'PASEH',
				),
			355 =>
				array(
					'id'         => '3211160',
					'regency_id' => '3211',
					'name'       => 'CIMALAKA',
				),
			356 =>
				array(
					'id'         => '3211161',
					'regency_id' => '3211',
					'name'       => 'CISARUA',
				),
			357 =>
				array(
					'id'         => '3211170',
					'regency_id' => '3211',
					'name'       => 'TANJUNGKERTA',
				),
			358 =>
				array(
					'id'         => '3211171',
					'regency_id' => '3211',
					'name'       => 'TANJUNGMEDAR',
				),
			359 =>
				array(
					'id'         => '3211180',
					'regency_id' => '3211',
					'name'       => 'BUAHDUA',
				),
			360 =>
				array(
					'id'         => '3211181',
					'regency_id' => '3211',
					'name'       => 'SURIAN',
				),
			361 =>
				array(
					'id'         => '3212010',
					'regency_id' => '3212',
					'name'       => 'HAURGEULIS',
				),
			362 =>
				array(
					'id'         => '3212011',
					'regency_id' => '3212',
					'name'       => 'GANTAR',
				),
			363 =>
				array(
					'id'         => '3212020',
					'regency_id' => '3212',
					'name'       => 'KROYA',
				),
			364 =>
				array(
					'id'         => '3212030',
					'regency_id' => '3212',
					'name'       => 'GABUSWETAN',
				),
			365 =>
				array(
					'id'         => '3212040',
					'regency_id' => '3212',
					'name'       => 'CIKEDUNG',
				),
			366 =>
				array(
					'id'         => '3212041',
					'regency_id' => '3212',
					'name'       => 'TERISI',
				),
			367 =>
				array(
					'id'         => '3212050',
					'regency_id' => '3212',
					'name'       => 'LELEA',
				),
			368 =>
				array(
					'id'         => '3212060',
					'regency_id' => '3212',
					'name'       => 'BANGODUA',
				),
			369 =>
				array(
					'id'         => '3212061',
					'regency_id' => '3212',
					'name'       => 'TUKDANA',
				),
			370 =>
				array(
					'id'         => '3212070',
					'regency_id' => '3212',
					'name'       => 'WIDASARI',
				),
			371 =>
				array(
					'id'         => '3212080',
					'regency_id' => '3212',
					'name'       => 'KERTASEMAYA',
				),
			372 =>
				array(
					'id'         => '3212081',
					'regency_id' => '3212',
					'name'       => 'SUKAGUMIWANG',
				),
			373 =>
				array(
					'id'         => '3212090',
					'regency_id' => '3212',
					'name'       => 'KRANGKENG',
				),
			374 =>
				array(
					'id'         => '3212100',
					'regency_id' => '3212',
					'name'       => 'KARANGAMPEL',
				),
			375 =>
				array(
					'id'         => '3212101',
					'regency_id' => '3212',
					'name'       => 'KEDOKAN BUNDER',
				),
			376 =>
				array(
					'id'         => '3212110',
					'regency_id' => '3212',
					'name'       => 'JUNTINYUAT',
				),
			377 =>
				array(
					'id'         => '3212120',
					'regency_id' => '3212',
					'name'       => 'SLIYEG',
				),
			378 =>
				array(
					'id'         => '3212130',
					'regency_id' => '3212',
					'name'       => 'JATIBARANG',
				),
			379 =>
				array(
					'id'         => '3212140',
					'regency_id' => '3212',
					'name'       => 'BALONGAN',
				),
			380 =>
				array(
					'id'         => '3212150',
					'regency_id' => '3212',
					'name'       => 'INDRAMAYU',
				),
			381 =>
				array(
					'id'         => '3212160',
					'regency_id' => '3212',
					'name'       => 'SINDANG',
				),
			382 =>
				array(
					'id'         => '3212161',
					'regency_id' => '3212',
					'name'       => 'CANTIGI',
				),
			383 =>
				array(
					'id'         => '3212162',
					'regency_id' => '3212',
					'name'       => 'PASEKAN',
				),
			384 =>
				array(
					'id'         => '3212170',
					'regency_id' => '3212',
					'name'       => 'LOHBENER',
				),
			385 =>
				array(
					'id'         => '3212171',
					'regency_id' => '3212',
					'name'       => 'ARAHAN',
				),
			386 =>
				array(
					'id'         => '3212180',
					'regency_id' => '3212',
					'name'       => 'LOSARANG',
				),
			387 =>
				array(
					'id'         => '3212190',
					'regency_id' => '3212',
					'name'       => 'KANDANGHAUR',
				),
			388 =>
				array(
					'id'         => '3212200',
					'regency_id' => '3212',
					'name'       => 'BONGAS',
				),
			389 =>
				array(
					'id'         => '3212210',
					'regency_id' => '3212',
					'name'       => 'ANJATAN',
				),
			390 =>
				array(
					'id'         => '3212220',
					'regency_id' => '3212',
					'name'       => 'SUKRA',
				),
			391 =>
				array(
					'id'         => '3212221',
					'regency_id' => '3212',
					'name'       => 'PATROL',
				),
			392 =>
				array(
					'id'         => '3213010',
					'regency_id' => '3213',
					'name'       => 'SAGALAHERANG',
				),
			393 =>
				array(
					'id'         => '3213011',
					'regency_id' => '3213',
					'name'       => 'SERANGPANJANG',
				),
			394 =>
				array(
					'id'         => '3213020',
					'regency_id' => '3213',
					'name'       => 'JALANCAGAK',
				),
			395 =>
				array(
					'id'         => '3213021',
					'regency_id' => '3213',
					'name'       => 'CIATER',
				),
			396 =>
				array(
					'id'         => '3213030',
					'regency_id' => '3213',
					'name'       => 'CISALAK',
				),
			397 =>
				array(
					'id'         => '3213031',
					'regency_id' => '3213',
					'name'       => 'KASOMALANG',
				),
			398 =>
				array(
					'id'         => '3213040',
					'regency_id' => '3213',
					'name'       => 'TANJUNGSIANG',
				),
			399 =>
				array(
					'id'         => '3213050',
					'regency_id' => '3213',
					'name'       => 'CIJAMBE',
				),
			400 =>
				array(
					'id'         => '3213060',
					'regency_id' => '3213',
					'name'       => 'CIBOGO',
				),
			401 =>
				array(
					'id'         => '3213070',
					'regency_id' => '3213',
					'name'       => 'SUBANG',
				),
			402 =>
				array(
					'id'         => '3213080',
					'regency_id' => '3213',
					'name'       => 'KALIJATI',
				),
			403 =>
				array(
					'id'         => '3213081',
					'regency_id' => '3213',
					'name'       => 'DAWUAN',
				),
			404 =>
				array(
					'id'         => '3213090',
					'regency_id' => '3213',
					'name'       => 'CIPEUNDEUY',
				),
			405 =>
				array(
					'id'         => '3213100',
					'regency_id' => '3213',
					'name'       => 'PABUARAN',
				),
			406 =>
				array(
					'id'         => '3213110',
					'regency_id' => '3213',
					'name'       => 'PATOKBEUSI',
				),
			407 =>
				array(
					'id'         => '3213120',
					'regency_id' => '3213',
					'name'       => 'PURWADADI',
				),
			408 =>
				array(
					'id'         => '3213130',
					'regency_id' => '3213',
					'name'       => 'CIKAUM',
				),
			409 =>
				array(
					'id'         => '3213140',
					'regency_id' => '3213',
					'name'       => 'PAGADEN',
				),
			410 =>
				array(
					'id'         => '3213141',
					'regency_id' => '3213',
					'name'       => 'PAGADEN BARAT',
				),
			411 =>
				array(
					'id'         => '3213150',
					'regency_id' => '3213',
					'name'       => 'CIPUNAGARA',
				),
			412 =>
				array(
					'id'         => '3213160',
					'regency_id' => '3213',
					'name'       => 'COMPRENG',
				),
			413 =>
				array(
					'id'         => '3213170',
					'regency_id' => '3213',
					'name'       => 'BINONG',
				),
			414 =>
				array(
					'id'         => '3213171',
					'regency_id' => '3213',
					'name'       => 'TAMBAKDAHAN',
				),
			415 =>
				array(
					'id'         => '3213180',
					'regency_id' => '3213',
					'name'       => 'CIASEM',
				),
			416 =>
				array(
					'id'         => '3213190',
					'regency_id' => '3213',
					'name'       => 'PAMANUKAN',
				),
			417 =>
				array(
					'id'         => '3213191',
					'regency_id' => '3213',
					'name'       => 'SUKASARI',
				),
			418 =>
				array(
					'id'         => '3213200',
					'regency_id' => '3213',
					'name'       => 'PUSAKANAGARA',
				),
			419 =>
				array(
					'id'         => '3213201',
					'regency_id' => '3213',
					'name'       => 'PUSAKAJAYA',
				),
			420 =>
				array(
					'id'         => '3213210',
					'regency_id' => '3213',
					'name'       => 'LEGONKULON',
				),
			421 =>
				array(
					'id'         => '3213220',
					'regency_id' => '3213',
					'name'       => 'BLANAKAN',
				),
			422 =>
				array(
					'id'         => '3214010',
					'regency_id' => '3214',
					'name'       => 'JATILUHUR',
				),
			423 =>
				array(
					'id'         => '3214011',
					'regency_id' => '3214',
					'name'       => 'SUKASARI',
				),
			424 =>
				array(
					'id'         => '3214020',
					'regency_id' => '3214',
					'name'       => 'MANIIS',
				),
			425 =>
				array(
					'id'         => '3214030',
					'regency_id' => '3214',
					'name'       => 'TEGAL WARU',
				),
			426 =>
				array(
					'id'         => '3214040',
					'regency_id' => '3214',
					'name'       => 'PLERED',
				),
			427 =>
				array(
					'id'         => '3214050',
					'regency_id' => '3214',
					'name'       => 'SUKATANI',
				),
			428 =>
				array(
					'id'         => '3214060',
					'regency_id' => '3214',
					'name'       => 'DARANGDAN',
				),
			429 =>
				array(
					'id'         => '3214070',
					'regency_id' => '3214',
					'name'       => 'BOJONG',
				),
			430 =>
				array(
					'id'         => '3214080',
					'regency_id' => '3214',
					'name'       => 'WANAYASA',
				),
			431 =>
				array(
					'id'         => '3214081',
					'regency_id' => '3214',
					'name'       => 'KIARAPEDES',
				),
			432 =>
				array(
					'id'         => '3214090',
					'regency_id' => '3214',
					'name'       => 'PASAWAHAN',
				),
			433 =>
				array(
					'id'         => '3214091',
					'regency_id' => '3214',
					'name'       => 'PONDOK SALAM',
				),
			434 =>
				array(
					'id'         => '3214100',
					'regency_id' => '3214',
					'name'       => 'PURWAKARTA',
				),
			435 =>
				array(
					'id'         => '3214101',
					'regency_id' => '3214',
					'name'       => 'BABAKANCIKAO',
				),
			436 =>
				array(
					'id'         => '3214110',
					'regency_id' => '3214',
					'name'       => 'CAMPAKA',
				),
			437 =>
				array(
					'id'         => '3214111',
					'regency_id' => '3214',
					'name'       => 'CIBATU',
				),
			438 =>
				array(
					'id'         => '3214112',
					'regency_id' => '3214',
					'name'       => 'BUNGURSARI',
				),
			439 =>
				array(
					'id'         => '3215010',
					'regency_id' => '3215',
					'name'       => 'PANGKALAN',
				),
			440 =>
				array(
					'id'         => '3215011',
					'regency_id' => '3215',
					'name'       => 'TEGALWARU',
				),
			441 =>
				array(
					'id'         => '3215020',
					'regency_id' => '3215',
					'name'       => 'CIAMPEL',
				),
			442 =>
				array(
					'id'         => '3215031',
					'regency_id' => '3215',
					'name'       => 'TELUKJAMBE TIMUR',
				),
			443 =>
				array(
					'id'         => '3215032',
					'regency_id' => '3215',
					'name'       => 'TELUKJAMBE BARAT',
				),
			444 =>
				array(
					'id'         => '3215040',
					'regency_id' => '3215',
					'name'       => 'KLARI',
				),
			445 =>
				array(
					'id'         => '3215050',
					'regency_id' => '3215',
					'name'       => 'CIKAMPEK',
				),
			446 =>
				array(
					'id'         => '3215051',
					'regency_id' => '3215',
					'name'       => 'PURWASARI',
				),
			447 =>
				array(
					'id'         => '3215060',
					'regency_id' => '3215',
					'name'       => 'TIRTAMULYA',
				),
			448 =>
				array(
					'id'         => '3215070',
					'regency_id' => '3215',
					'name'       => 'JATISARI',
				),
			449 =>
				array(
					'id'         => '3215071',
					'regency_id' => '3215',
					'name'       => 'BANYUSARI',
				),
			450 =>
				array(
					'id'         => '3215072',
					'regency_id' => '3215',
					'name'       => 'KOTABARU',
				),
			451 =>
				array(
					'id'         => '3215081',
					'regency_id' => '3215',
					'name'       => 'CILAMAYA WETAN',
				),
			452 =>
				array(
					'id'         => '3215082',
					'regency_id' => '3215',
					'name'       => 'CILAMAYA KULON',
				),
			453 =>
				array(
					'id'         => '3215090',
					'regency_id' => '3215',
					'name'       => 'LEMAHABANG',
				),
			454 =>
				array(
					'id'         => '3215100',
					'regency_id' => '3215',
					'name'       => 'TALAGASARI',
				),
			455 =>
				array(
					'id'         => '3215111',
					'regency_id' => '3215',
					'name'       => 'MAJALAYA',
				),
			456 =>
				array(
					'id'         => '3215112',
					'regency_id' => '3215',
					'name'       => 'KARAWANG TIMUR',
				),
			457 =>
				array(
					'id'         => '3215113',
					'regency_id' => '3215',
					'name'       => 'KARAWANG BARAT',
				),
			458 =>
				array(
					'id'         => '3215120',
					'regency_id' => '3215',
					'name'       => 'RAWAMERTA',
				),
			459 =>
				array(
					'id'         => '3215130',
					'regency_id' => '3215',
					'name'       => 'TEMPURAN',
				),
			460 =>
				array(
					'id'         => '3215140',
					'regency_id' => '3215',
					'name'       => 'KUTAWALUYA',
				),
			461 =>
				array(
					'id'         => '3215150',
					'regency_id' => '3215',
					'name'       => 'RENGASDENGKLOK',
				),
			462 =>
				array(
					'id'         => '3215151',
					'regency_id' => '3215',
					'name'       => 'JAYAKERTA',
				),
			463 =>
				array(
					'id'         => '3215160',
					'regency_id' => '3215',
					'name'       => 'PEDES',
				),
			464 =>
				array(
					'id'         => '3215161',
					'regency_id' => '3215',
					'name'       => 'CILEBAR',
				),
			465 =>
				array(
					'id'         => '3215170',
					'regency_id' => '3215',
					'name'       => 'CIBUAYA',
				),
			466 =>
				array(
					'id'         => '3215180',
					'regency_id' => '3215',
					'name'       => 'TIRTAJAYA',
				),
			467 =>
				array(
					'id'         => '3215190',
					'regency_id' => '3215',
					'name'       => 'BATUJAYA',
				),
			468 =>
				array(
					'id'         => '3215200',
					'regency_id' => '3215',
					'name'       => 'PAKISJAYA',
				),
			469 =>
				array(
					'id'         => '3216010',
					'regency_id' => '3216',
					'name'       => 'SETU',
				),
			470 =>
				array(
					'id'         => '3216021',
					'regency_id' => '3216',
					'name'       => 'SERANG BARU',
				),
			471 =>
				array(
					'id'         => '3216022',
					'regency_id' => '3216',
					'name'       => 'CIKARANG PUSAT',
				),
			472 =>
				array(
					'id'         => '3216023',
					'regency_id' => '3216',
					'name'       => 'CIKARANG SELATAN',
				),
			473 =>
				array(
					'id'         => '3216030',
					'regency_id' => '3216',
					'name'       => 'CIBARUSAH',
				),
			474 =>
				array(
					'id'         => '3216031',
					'regency_id' => '3216',
					'name'       => 'BOJONGMANGU',
				),
			475 =>
				array(
					'id'         => '3216041',
					'regency_id' => '3216',
					'name'       => 'CIKARANG TIMUR',
				),
			476 =>
				array(
					'id'         => '3216050',
					'regency_id' => '3216',
					'name'       => 'KEDUNGWARINGIN',
				),
			477 =>
				array(
					'id'         => '3216061',
					'regency_id' => '3216',
					'name'       => 'CIKARANG UTARA',
				),
			478 =>
				array(
					'id'         => '3216062',
					'regency_id' => '3216',
					'name'       => 'KARANGBAHAGIA',
				),
			479 =>
				array(
					'id'         => '3216070',
					'regency_id' => '3216',
					'name'       => 'CIBITUNG',
				),
			480 =>
				array(
					'id'         => '3216071',
					'regency_id' => '3216',
					'name'       => 'CIKARANG BARAT',
				),
			481 =>
				array(
					'id'         => '3216081',
					'regency_id' => '3216',
					'name'       => 'TAMBUN SELATAN',
				),
			482 =>
				array(
					'id'         => '3216082',
					'regency_id' => '3216',
					'name'       => 'TAMBUN UTARA',
				),
			483 =>
				array(
					'id'         => '3216090',
					'regency_id' => '3216',
					'name'       => 'BABELAN',
				),
			484 =>
				array(
					'id'         => '3216100',
					'regency_id' => '3216',
					'name'       => 'TARUMAJAYA',
				),
			485 =>
				array(
					'id'         => '3216110',
					'regency_id' => '3216',
					'name'       => 'TAMBELANG',
				),
			486 =>
				array(
					'id'         => '3216111',
					'regency_id' => '3216',
					'name'       => 'SUKAWANGI',
				),
			487 =>
				array(
					'id'         => '3216120',
					'regency_id' => '3216',
					'name'       => 'SUKATANI',
				),
			488 =>
				array(
					'id'         => '3216121',
					'regency_id' => '3216',
					'name'       => 'SUKAKARYA',
				),
			489 =>
				array(
					'id'         => '3216130',
					'regency_id' => '3216',
					'name'       => 'PEBAYURAN',
				),
			490 =>
				array(
					'id'         => '3216140',
					'regency_id' => '3216',
					'name'       => 'CABANGBUNGIN',
				),
			491 =>
				array(
					'id'         => '3216150',
					'regency_id' => '3216',
					'name'       => 'MUARA GEMBONG',
				),
			492 =>
				array(
					'id'         => '3217010',
					'regency_id' => '3217',
					'name'       => 'RONGGA',
				),
			493 =>
				array(
					'id'         => '3217020',
					'regency_id' => '3217',
					'name'       => 'GUNUNGHALU',
				),
			494 =>
				array(
					'id'         => '3217030',
					'regency_id' => '3217',
					'name'       => 'SINDANGKERTA',
				),
			495 =>
				array(
					'id'         => '3217040',
					'regency_id' => '3217',
					'name'       => 'CILILIN',
				),
			496 =>
				array(
					'id'         => '3217050',
					'regency_id' => '3217',
					'name'       => 'CIHAMPELAS',
				),
			497 =>
				array(
					'id'         => '3217060',
					'regency_id' => '3217',
					'name'       => 'CIPONGKOR',
				),
			498 =>
				array(
					'id'         => '3217070',
					'regency_id' => '3217',
					'name'       => 'BATUJAJAR',
				),
			499 =>
				array(
					'id'         => '3217071',
					'regency_id' => '3217',
					'name'       => 'SAGULING',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '3217080',
					'regency_id' => '3217',
					'name'       => 'CIPATAT',
				),
			1   =>
				array(
					'id'         => '3217090',
					'regency_id' => '3217',
					'name'       => 'PADALARANG',
				),
			2   =>
				array(
					'id'         => '3217100',
					'regency_id' => '3217',
					'name'       => 'NGAMPRAH',
				),
			3   =>
				array(
					'id'         => '3217110',
					'regency_id' => '3217',
					'name'       => 'PARONGPONG',
				),
			4   =>
				array(
					'id'         => '3217120',
					'regency_id' => '3217',
					'name'       => 'LEMBANG',
				),
			5   =>
				array(
					'id'         => '3217130',
					'regency_id' => '3217',
					'name'       => 'CISARUA',
				),
			6   =>
				array(
					'id'         => '3217140',
					'regency_id' => '3217',
					'name'       => 'CIKALONG WETAN',
				),
			7   =>
				array(
					'id'         => '3217150',
					'regency_id' => '3217',
					'name'       => 'CIPEUNDEUY',
				),
			8   =>
				array(
					'id'         => '3218010',
					'regency_id' => '3218',
					'name'       => 'CIMERAK',
				),
			9   =>
				array(
					'id'         => '3218020',
					'regency_id' => '3218',
					'name'       => 'CIJULANG',
				),
			10  =>
				array(
					'id'         => '3218030',
					'regency_id' => '3218',
					'name'       => 'CIGUGUR',
				),
			11  =>
				array(
					'id'         => '3218040',
					'regency_id' => '3218',
					'name'       => 'LANGKAPLANCAR',
				),
			12  =>
				array(
					'id'         => '3218050',
					'regency_id' => '3218',
					'name'       => 'PARIGI',
				),
			13  =>
				array(
					'id'         => '3218060',
					'regency_id' => '3218',
					'name'       => 'SIDAMULIH',
				),
			14  =>
				array(
					'id'         => '3218070',
					'regency_id' => '3218',
					'name'       => 'PANGANDARAN',
				),
			15  =>
				array(
					'id'         => '3218080',
					'regency_id' => '3218',
					'name'       => 'KALIPUCANG',
				),
			16  =>
				array(
					'id'         => '3218090',
					'regency_id' => '3218',
					'name'       => 'PADAHERANG',
				),
			17  =>
				array(
					'id'         => '3218100',
					'regency_id' => '3218',
					'name'       => 'MANGUNJAYA',
				),
			18  =>
				array(
					'id'         => '3271010',
					'regency_id' => '3271',
					'name'       => 'BOGOR SELATAN',
				),
			19  =>
				array(
					'id'         => '3271020',
					'regency_id' => '3271',
					'name'       => 'BOGOR TIMUR',
				),
			20  =>
				array(
					'id'         => '3271030',
					'regency_id' => '3271',
					'name'       => 'BOGOR UTARA',
				),
			21  =>
				array(
					'id'         => '3271040',
					'regency_id' => '3271',
					'name'       => 'BOGOR TENGAH',
				),
			22  =>
				array(
					'id'         => '3271050',
					'regency_id' => '3271',
					'name'       => 'BOGOR BARAT',
				),
			23  =>
				array(
					'id'         => '3271060',
					'regency_id' => '3271',
					'name'       => 'TANAH SEREAL',
				),
			24  =>
				array(
					'id'         => '3272010',
					'regency_id' => '3272',
					'name'       => 'BAROS',
				),
			25  =>
				array(
					'id'         => '3272011',
					'regency_id' => '3272',
					'name'       => 'LEMBURSITU',
				),
			26  =>
				array(
					'id'         => '3272012',
					'regency_id' => '3272',
					'name'       => 'CIBEUREUM',
				),
			27  =>
				array(
					'id'         => '3272020',
					'regency_id' => '3272',
					'name'       => 'CITAMIANG',
				),
			28  =>
				array(
					'id'         => '3272030',
					'regency_id' => '3272',
					'name'       => 'WARUDOYONG',
				),
			29  =>
				array(
					'id'         => '3272040',
					'regency_id' => '3272',
					'name'       => 'GUNUNG PUYUH',
				),
			30  =>
				array(
					'id'         => '3272050',
					'regency_id' => '3272',
					'name'       => 'CIKOLE',
				),
			31  =>
				array(
					'id'         => '3273010',
					'regency_id' => '3273',
					'name'       => 'BANDUNG KULON',
				),
			32  =>
				array(
					'id'         => '3273020',
					'regency_id' => '3273',
					'name'       => 'BABAKAN CIPARAY',
				),
			33  =>
				array(
					'id'         => '3273030',
					'regency_id' => '3273',
					'name'       => 'BOJONGLOA KALER',
				),
			34  =>
				array(
					'id'         => '3273040',
					'regency_id' => '3273',
					'name'       => 'BOJONGLOA KIDUL',
				),
			35  =>
				array(
					'id'         => '3273050',
					'regency_id' => '3273',
					'name'       => 'ASTANAANYAR',
				),
			36  =>
				array(
					'id'         => '3273060',
					'regency_id' => '3273',
					'name'       => 'REGOL',
				),
			37  =>
				array(
					'id'         => '3273070',
					'regency_id' => '3273',
					'name'       => 'LENGKONG',
				),
			38  =>
				array(
					'id'         => '3273080',
					'regency_id' => '3273',
					'name'       => 'BANDUNG KIDUL',
				),
			39  =>
				array(
					'id'         => '3273090',
					'regency_id' => '3273',
					'name'       => 'BUAHBATU',
				),
			40  =>
				array(
					'id'         => '3273100',
					'regency_id' => '3273',
					'name'       => 'RANCASARI',
				),
			41  =>
				array(
					'id'         => '3273101',
					'regency_id' => '3273',
					'name'       => 'GEDEBAGE',
				),
			42  =>
				array(
					'id'         => '3273110',
					'regency_id' => '3273',
					'name'       => 'CIBIRU',
				),
			43  =>
				array(
					'id'         => '3273111',
					'regency_id' => '3273',
					'name'       => 'PANYILEUKAN',
				),
			44  =>
				array(
					'id'         => '3273120',
					'regency_id' => '3273',
					'name'       => 'UJUNG BERUNG',
				),
			45  =>
				array(
					'id'         => '3273121',
					'regency_id' => '3273',
					'name'       => 'CINAMBO',
				),
			46  =>
				array(
					'id'         => '3273130',
					'regency_id' => '3273',
					'name'       => 'ARCAMANIK',
				),
			47  =>
				array(
					'id'         => '3273141',
					'regency_id' => '3273',
					'name'       => 'ANTAPANI',
				),
			48  =>
				array(
					'id'         => '3273142',
					'regency_id' => '3273',
					'name'       => 'MANDALAJATI',
				),
			49  =>
				array(
					'id'         => '3273150',
					'regency_id' => '3273',
					'name'       => 'KIARACONDONG',
				),
			50  =>
				array(
					'id'         => '3273160',
					'regency_id' => '3273',
					'name'       => 'BATUNUNGGAL',
				),
			51  =>
				array(
					'id'         => '3273170',
					'regency_id' => '3273',
					'name'       => 'SUMUR BANDUNG',
				),
			52  =>
				array(
					'id'         => '3273180',
					'regency_id' => '3273',
					'name'       => 'ANDIR',
				),
			53  =>
				array(
					'id'         => '3273190',
					'regency_id' => '3273',
					'name'       => 'CICENDO',
				),
			54  =>
				array(
					'id'         => '3273200',
					'regency_id' => '3273',
					'name'       => 'BANDUNG WETAN',
				),
			55  =>
				array(
					'id'         => '3273210',
					'regency_id' => '3273',
					'name'       => 'CIBEUNYING KIDUL',
				),
			56  =>
				array(
					'id'         => '3273220',
					'regency_id' => '3273',
					'name'       => 'CIBEUNYING KALER',
				),
			57  =>
				array(
					'id'         => '3273230',
					'regency_id' => '3273',
					'name'       => 'COBLONG',
				),
			58  =>
				array(
					'id'         => '3273240',
					'regency_id' => '3273',
					'name'       => 'SUKAJADI',
				),
			59  =>
				array(
					'id'         => '3273250',
					'regency_id' => '3273',
					'name'       => 'SUKASARI',
				),
			60  =>
				array(
					'id'         => '3273260',
					'regency_id' => '3273',
					'name'       => 'CIDADAP',
				),
			61  =>
				array(
					'id'         => '3274010',
					'regency_id' => '3274',
					'name'       => 'HARJAMUKTI',
				),
			62  =>
				array(
					'id'         => '3274020',
					'regency_id' => '3274',
					'name'       => 'LEMAHWUNGKUK',
				),
			63  =>
				array(
					'id'         => '3274030',
					'regency_id' => '3274',
					'name'       => 'PEKALIPAN',
				),
			64  =>
				array(
					'id'         => '3274040',
					'regency_id' => '3274',
					'name'       => 'KESAMBI',
				),
			65  =>
				array(
					'id'         => '3274050',
					'regency_id' => '3274',
					'name'       => 'KEJAKSAN',
				),
			66  =>
				array(
					'id'         => '3275010',
					'regency_id' => '3275',
					'name'       => 'PONDOKGEDE',
				),
			67  =>
				array(
					'id'         => '3275011',
					'regency_id' => '3275',
					'name'       => 'JATISAMPURNA',
				),
			68  =>
				array(
					'id'         => '3275012',
					'regency_id' => '3275',
					'name'       => 'PONDOKMELATI',
				),
			69  =>
				array(
					'id'         => '3275020',
					'regency_id' => '3275',
					'name'       => 'JATIASIH',
				),
			70  =>
				array(
					'id'         => '3275030',
					'regency_id' => '3275',
					'name'       => 'BANTARGEBANG',
				),
			71  =>
				array(
					'id'         => '3275031',
					'regency_id' => '3275',
					'name'       => 'MUSTIKAJAYA',
				),
			72  =>
				array(
					'id'         => '3275040',
					'regency_id' => '3275',
					'name'       => 'BEKASI TIMUR',
				),
			73  =>
				array(
					'id'         => '3275041',
					'regency_id' => '3275',
					'name'       => 'RAWALUMBU',
				),
			74  =>
				array(
					'id'         => '3275050',
					'regency_id' => '3275',
					'name'       => 'BEKASI SELATAN',
				),
			75  =>
				array(
					'id'         => '3275060',
					'regency_id' => '3275',
					'name'       => 'BEKASI BARAT',
				),
			76  =>
				array(
					'id'         => '3275061',
					'regency_id' => '3275',
					'name'       => 'MEDAN SATRIA',
				),
			77  =>
				array(
					'id'         => '3275070',
					'regency_id' => '3275',
					'name'       => 'BEKASI UTARA',
				),
			78  =>
				array(
					'id'         => '3276010',
					'regency_id' => '3276',
					'name'       => 'SAWANGAN',
				),
			79  =>
				array(
					'id'         => '3276011',
					'regency_id' => '3276',
					'name'       => 'BOJONGSARI',
				),
			80  =>
				array(
					'id'         => '3276020',
					'regency_id' => '3276',
					'name'       => 'PANCORAN MAS',
				),
			81  =>
				array(
					'id'         => '3276021',
					'regency_id' => '3276',
					'name'       => 'CIPAYUNG',
				),
			82  =>
				array(
					'id'         => '3276030',
					'regency_id' => '3276',
					'name'       => 'SUKMA JAYA',
				),
			83  =>
				array(
					'id'         => '3276031',
					'regency_id' => '3276',
					'name'       => 'CILODONG',
				),
			84  =>
				array(
					'id'         => '3276040',
					'regency_id' => '3276',
					'name'       => 'CIMANGGIS',
				),
			85  =>
				array(
					'id'         => '3276041',
					'regency_id' => '3276',
					'name'       => 'TAPOS',
				),
			86  =>
				array(
					'id'         => '3276050',
					'regency_id' => '3276',
					'name'       => 'BEJI',
				),
			87  =>
				array(
					'id'         => '3276060',
					'regency_id' => '3276',
					'name'       => 'LIMO',
				),
			88  =>
				array(
					'id'         => '3276061',
					'regency_id' => '3276',
					'name'       => 'CINERE',
				),
			89  =>
				array(
					'id'         => '3277010',
					'regency_id' => '3277',
					'name'       => 'CIMAHI SELATAN',
				),
			90  =>
				array(
					'id'         => '3277020',
					'regency_id' => '3277',
					'name'       => 'CIMAHI TENGAH',
				),
			91  =>
				array(
					'id'         => '3277030',
					'regency_id' => '3277',
					'name'       => 'CIMAHI UTARA',
				),
			92  =>
				array(
					'id'         => '3278010',
					'regency_id' => '3278',
					'name'       => 'KAWALU',
				),
			93  =>
				array(
					'id'         => '3278020',
					'regency_id' => '3278',
					'name'       => 'TAMANSARI',
				),
			94  =>
				array(
					'id'         => '3278030',
					'regency_id' => '3278',
					'name'       => 'CIBEUREUM',
				),
			95  =>
				array(
					'id'         => '3278031',
					'regency_id' => '3278',
					'name'       => 'PURBARATU',
				),
			96  =>
				array(
					'id'         => '3278040',
					'regency_id' => '3278',
					'name'       => 'TAWANG',
				),
			97  =>
				array(
					'id'         => '3278050',
					'regency_id' => '3278',
					'name'       => 'CIHIDEUNG',
				),
			98  =>
				array(
					'id'         => '3278060',
					'regency_id' => '3278',
					'name'       => 'MANGKUBUMI',
				),
			99  =>
				array(
					'id'         => '3278070',
					'regency_id' => '3278',
					'name'       => 'INDIHIANG',
				),
			100 =>
				array(
					'id'         => '3278071',
					'regency_id' => '3278',
					'name'       => 'BUNGURSARI',
				),
			101 =>
				array(
					'id'         => '3278080',
					'regency_id' => '3278',
					'name'       => 'CIPEDES',
				),
			102 =>
				array(
					'id'         => '3279010',
					'regency_id' => '3279',
					'name'       => 'BANJAR',
				),
			103 =>
				array(
					'id'         => '3279020',
					'regency_id' => '3279',
					'name'       => 'PURWAHARJA',
				),
			104 =>
				array(
					'id'         => '3279030',
					'regency_id' => '3279',
					'name'       => 'PATARUMAN',
				),
			105 =>
				array(
					'id'         => '3279040',
					'regency_id' => '3279',
					'name'       => 'LANGENSARI',
				),
			106 =>
				array(
					'id'         => '3301010',
					'regency_id' => '3301',
					'name'       => 'DAYEUHLUHUR',
				),
			107 =>
				array(
					'id'         => '3301020',
					'regency_id' => '3301',
					'name'       => 'WANAREJA',
				),
			108 =>
				array(
					'id'         => '3301030',
					'regency_id' => '3301',
					'name'       => 'MAJENANG',
				),
			109 =>
				array(
					'id'         => '3301040',
					'regency_id' => '3301',
					'name'       => 'CIMANGGU',
				),
			110 =>
				array(
					'id'         => '3301050',
					'regency_id' => '3301',
					'name'       => 'KARANGPUCUNG',
				),
			111 =>
				array(
					'id'         => '3301060',
					'regency_id' => '3301',
					'name'       => 'CIPARI',
				),
			112 =>
				array(
					'id'         => '3301070',
					'regency_id' => '3301',
					'name'       => 'SIDAREJA',
				),
			113 =>
				array(
					'id'         => '3301080',
					'regency_id' => '3301',
					'name'       => 'KEDUNGREJA',
				),
			114 =>
				array(
					'id'         => '3301090',
					'regency_id' => '3301',
					'name'       => 'PATIMUAN',
				),
			115 =>
				array(
					'id'         => '3301100',
					'regency_id' => '3301',
					'name'       => 'GANDRUNGMANGU',
				),
			116 =>
				array(
					'id'         => '3301110',
					'regency_id' => '3301',
					'name'       => 'BANTARSARI',
				),
			117 =>
				array(
					'id'         => '3301120',
					'regency_id' => '3301',
					'name'       => 'KAWUNGANTEN',
				),
			118 =>
				array(
					'id'         => '3301121',
					'regency_id' => '3301',
					'name'       => 'KAMPUNG LAUT',
				),
			119 =>
				array(
					'id'         => '3301130',
					'regency_id' => '3301',
					'name'       => 'JERUKLEGI',
				),
			120 =>
				array(
					'id'         => '3301140',
					'regency_id' => '3301',
					'name'       => 'KESUGIHAN',
				),
			121 =>
				array(
					'id'         => '3301150',
					'regency_id' => '3301',
					'name'       => 'ADIPALA',
				),
			122 =>
				array(
					'id'         => '3301160',
					'regency_id' => '3301',
					'name'       => 'MAOS',
				),
			123 =>
				array(
					'id'         => '3301170',
					'regency_id' => '3301',
					'name'       => 'SAMPANG',
				),
			124 =>
				array(
					'id'         => '3301180',
					'regency_id' => '3301',
					'name'       => 'KROYA',
				),
			125 =>
				array(
					'id'         => '3301190',
					'regency_id' => '3301',
					'name'       => 'BINANGUN',
				),
			126 =>
				array(
					'id'         => '3301200',
					'regency_id' => '3301',
					'name'       => 'NUSAWUNGU',
				),
			127 =>
				array(
					'id'         => '3301710',
					'regency_id' => '3301',
					'name'       => 'CILACAP SELATAN',
				),
			128 =>
				array(
					'id'         => '3301720',
					'regency_id' => '3301',
					'name'       => 'CILACAP TENGAH',
				),
			129 =>
				array(
					'id'         => '3301730',
					'regency_id' => '3301',
					'name'       => 'CILACAP UTARA',
				),
			130 =>
				array(
					'id'         => '3302010',
					'regency_id' => '3302',
					'name'       => 'LUMBIR',
				),
			131 =>
				array(
					'id'         => '3302020',
					'regency_id' => '3302',
					'name'       => 'WANGON',
				),
			132 =>
				array(
					'id'         => '3302030',
					'regency_id' => '3302',
					'name'       => 'JATILAWANG',
				),
			133 =>
				array(
					'id'         => '3302040',
					'regency_id' => '3302',
					'name'       => 'RAWALO',
				),
			134 =>
				array(
					'id'         => '3302050',
					'regency_id' => '3302',
					'name'       => 'KEBASEN',
				),
			135 =>
				array(
					'id'         => '3302060',
					'regency_id' => '3302',
					'name'       => 'KEMRANJEN',
				),
			136 =>
				array(
					'id'         => '3302070',
					'regency_id' => '3302',
					'name'       => 'SUMPIUH',
				),
			137 =>
				array(
					'id'         => '3302080',
					'regency_id' => '3302',
					'name'       => 'TAMBAK',
				),
			138 =>
				array(
					'id'         => '3302090',
					'regency_id' => '3302',
					'name'       => 'SOMAGEDE',
				),
			139 =>
				array(
					'id'         => '3302100',
					'regency_id' => '3302',
					'name'       => 'KALIBAGOR',
				),
			140 =>
				array(
					'id'         => '3302110',
					'regency_id' => '3302',
					'name'       => 'BANYUMAS',
				),
			141 =>
				array(
					'id'         => '3302120',
					'regency_id' => '3302',
					'name'       => 'PATIKRAJA',
				),
			142 =>
				array(
					'id'         => '3302130',
					'regency_id' => '3302',
					'name'       => 'PURWOJATI',
				),
			143 =>
				array(
					'id'         => '3302140',
					'regency_id' => '3302',
					'name'       => 'AJIBARANG',
				),
			144 =>
				array(
					'id'         => '3302150',
					'regency_id' => '3302',
					'name'       => 'GUMELAR',
				),
			145 =>
				array(
					'id'         => '3302160',
					'regency_id' => '3302',
					'name'       => 'PEKUNCEN',
				),
			146 =>
				array(
					'id'         => '3302170',
					'regency_id' => '3302',
					'name'       => 'CILONGOK',
				),
			147 =>
				array(
					'id'         => '3302180',
					'regency_id' => '3302',
					'name'       => 'KARANGLEWAS',
				),
			148 =>
				array(
					'id'         => '3302190',
					'regency_id' => '3302',
					'name'       => 'KEDUNG BANTENG',
				),
			149 =>
				array(
					'id'         => '3302200',
					'regency_id' => '3302',
					'name'       => 'BATURRADEN',
				),
			150 =>
				array(
					'id'         => '3302210',
					'regency_id' => '3302',
					'name'       => 'SUMBANG',
				),
			151 =>
				array(
					'id'         => '3302220',
					'regency_id' => '3302',
					'name'       => 'KEMBARAN',
				),
			152 =>
				array(
					'id'         => '3302230',
					'regency_id' => '3302',
					'name'       => 'SOKARAJA',
				),
			153 =>
				array(
					'id'         => '3302710',
					'regency_id' => '3302',
					'name'       => 'PURWOKERTO SELATAN',
				),
			154 =>
				array(
					'id'         => '3302720',
					'regency_id' => '3302',
					'name'       => 'PURWOKERTO BARAT',
				),
			155 =>
				array(
					'id'         => '3302730',
					'regency_id' => '3302',
					'name'       => 'PURWOKERTO TIMUR',
				),
			156 =>
				array(
					'id'         => '3302740',
					'regency_id' => '3302',
					'name'       => 'PURWOKERTO UTARA',
				),
			157 =>
				array(
					'id'         => '3303010',
					'regency_id' => '3303',
					'name'       => 'KEMANGKON',
				),
			158 =>
				array(
					'id'         => '3303020',
					'regency_id' => '3303',
					'name'       => 'BUKATEJA',
				),
			159 =>
				array(
					'id'         => '3303030',
					'regency_id' => '3303',
					'name'       => 'KEJOBONG',
				),
			160 =>
				array(
					'id'         => '3303040',
					'regency_id' => '3303',
					'name'       => 'PENGADEGAN',
				),
			161 =>
				array(
					'id'         => '3303050',
					'regency_id' => '3303',
					'name'       => 'KALIGONDANG',
				),
			162 =>
				array(
					'id'         => '3303060',
					'regency_id' => '3303',
					'name'       => 'PURBALINGGA',
				),
			163 =>
				array(
					'id'         => '3303070',
					'regency_id' => '3303',
					'name'       => 'KALIMANAH',
				),
			164 =>
				array(
					'id'         => '3303080',
					'regency_id' => '3303',
					'name'       => 'PADAMARA',
				),
			165 =>
				array(
					'id'         => '3303090',
					'regency_id' => '3303',
					'name'       => 'KUTASARI',
				),
			166 =>
				array(
					'id'         => '3303100',
					'regency_id' => '3303',
					'name'       => 'BOJONGSARI',
				),
			167 =>
				array(
					'id'         => '3303110',
					'regency_id' => '3303',
					'name'       => 'MREBET',
				),
			168 =>
				array(
					'id'         => '3303120',
					'regency_id' => '3303',
					'name'       => 'BOBOTSARI',
				),
			169 =>
				array(
					'id'         => '3303130',
					'regency_id' => '3303',
					'name'       => 'KARANGREJA',
				),
			170 =>
				array(
					'id'         => '3303131',
					'regency_id' => '3303',
					'name'       => 'KARANGJAMBU',
				),
			171 =>
				array(
					'id'         => '3303140',
					'regency_id' => '3303',
					'name'       => 'KARANGANYAR',
				),
			172 =>
				array(
					'id'         => '3303141',
					'regency_id' => '3303',
					'name'       => 'KERTANEGARA',
				),
			173 =>
				array(
					'id'         => '3303150',
					'regency_id' => '3303',
					'name'       => 'KARANGMONCOL',
				),
			174 =>
				array(
					'id'         => '3303160',
					'regency_id' => '3303',
					'name'       => 'REMBANG',
				),
			175 =>
				array(
					'id'         => '3304010',
					'regency_id' => '3304',
					'name'       => 'SUSUKAN',
				),
			176 =>
				array(
					'id'         => '3304020',
					'regency_id' => '3304',
					'name'       => 'PURWAREJA KLAMPOK',
				),
			177 =>
				array(
					'id'         => '3304030',
					'regency_id' => '3304',
					'name'       => 'MANDIRAJA',
				),
			178 =>
				array(
					'id'         => '3304040',
					'regency_id' => '3304',
					'name'       => 'PURWANEGARA',
				),
			179 =>
				array(
					'id'         => '3304050',
					'regency_id' => '3304',
					'name'       => 'BAWANG',
				),
			180 =>
				array(
					'id'         => '3304060',
					'regency_id' => '3304',
					'name'       => 'BANJARNEGARA',
				),
			181 =>
				array(
					'id'         => '3304061',
					'regency_id' => '3304',
					'name'       => 'PAGEDONGAN',
				),
			182 =>
				array(
					'id'         => '3304070',
					'regency_id' => '3304',
					'name'       => 'SIGALUH',
				),
			183 =>
				array(
					'id'         => '3304080',
					'regency_id' => '3304',
					'name'       => 'MADUKARA',
				),
			184 =>
				array(
					'id'         => '3304090',
					'regency_id' => '3304',
					'name'       => 'BANJARMANGU',
				),
			185 =>
				array(
					'id'         => '3304100',
					'regency_id' => '3304',
					'name'       => 'WANADADI',
				),
			186 =>
				array(
					'id'         => '3304110',
					'regency_id' => '3304',
					'name'       => 'RAKIT',
				),
			187 =>
				array(
					'id'         => '3304120',
					'regency_id' => '3304',
					'name'       => 'PUNGGELAN',
				),
			188 =>
				array(
					'id'         => '3304130',
					'regency_id' => '3304',
					'name'       => 'KARANGKOBAR',
				),
			189 =>
				array(
					'id'         => '3304140',
					'regency_id' => '3304',
					'name'       => 'PAGENTAN',
				),
			190 =>
				array(
					'id'         => '3304150',
					'regency_id' => '3304',
					'name'       => 'PEJAWARAN',
				),
			191 =>
				array(
					'id'         => '3304160',
					'regency_id' => '3304',
					'name'       => 'BATUR',
				),
			192 =>
				array(
					'id'         => '3304170',
					'regency_id' => '3304',
					'name'       => 'WANAYASA',
				),
			193 =>
				array(
					'id'         => '3304180',
					'regency_id' => '3304',
					'name'       => 'KALIBENING',
				),
			194 =>
				array(
					'id'         => '3304181',
					'regency_id' => '3304',
					'name'       => 'PANDANARUM',
				),
			195 =>
				array(
					'id'         => '3305010',
					'regency_id' => '3305',
					'name'       => 'AYAH',
				),
			196 =>
				array(
					'id'         => '3305020',
					'regency_id' => '3305',
					'name'       => 'BUAYAN',
				),
			197 =>
				array(
					'id'         => '3305030',
					'regency_id' => '3305',
					'name'       => 'PURING',
				),
			198 =>
				array(
					'id'         => '3305040',
					'regency_id' => '3305',
					'name'       => 'PETANAHAN',
				),
			199 =>
				array(
					'id'         => '3305050',
					'regency_id' => '3305',
					'name'       => 'KLIRONG',
				),
			200 =>
				array(
					'id'         => '3305060',
					'regency_id' => '3305',
					'name'       => 'BULUSPESANTREN',
				),
			201 =>
				array(
					'id'         => '3305070',
					'regency_id' => '3305',
					'name'       => 'AMBAL',
				),
			202 =>
				array(
					'id'         => '3305080',
					'regency_id' => '3305',
					'name'       => 'MIRIT',
				),
			203 =>
				array(
					'id'         => '3305081',
					'regency_id' => '3305',
					'name'       => 'BONOROWO',
				),
			204 =>
				array(
					'id'         => '3305090',
					'regency_id' => '3305',
					'name'       => 'PREMBUN',
				),
			205 =>
				array(
					'id'         => '3305091',
					'regency_id' => '3305',
					'name'       => 'PADURESO',
				),
			206 =>
				array(
					'id'         => '3305100',
					'regency_id' => '3305',
					'name'       => 'KUTOWINANGUN',
				),
			207 =>
				array(
					'id'         => '3305110',
					'regency_id' => '3305',
					'name'       => 'ALIAN',
				),
			208 =>
				array(
					'id'         => '3305111',
					'regency_id' => '3305',
					'name'       => 'PONCOWARNO',
				),
			209 =>
				array(
					'id'         => '3305120',
					'regency_id' => '3305',
					'name'       => 'KEBUMEN',
				),
			210 =>
				array(
					'id'         => '3305130',
					'regency_id' => '3305',
					'name'       => 'PEJAGOAN',
				),
			211 =>
				array(
					'id'         => '3305140',
					'regency_id' => '3305',
					'name'       => 'SRUWENG',
				),
			212 =>
				array(
					'id'         => '3305150',
					'regency_id' => '3305',
					'name'       => 'ADIMULYO',
				),
			213 =>
				array(
					'id'         => '3305160',
					'regency_id' => '3305',
					'name'       => 'KUWARASAN',
				),
			214 =>
				array(
					'id'         => '3305170',
					'regency_id' => '3305',
					'name'       => 'ROWOKELE',
				),
			215 =>
				array(
					'id'         => '3305180',
					'regency_id' => '3305',
					'name'       => 'SEMPOR',
				),
			216 =>
				array(
					'id'         => '3305190',
					'regency_id' => '3305',
					'name'       => 'GOMBONG',
				),
			217 =>
				array(
					'id'         => '3305200',
					'regency_id' => '3305',
					'name'       => 'KARANGANYAR',
				),
			218 =>
				array(
					'id'         => '3305210',
					'regency_id' => '3305',
					'name'       => 'KARANGGAYAM',
				),
			219 =>
				array(
					'id'         => '3305220',
					'regency_id' => '3305',
					'name'       => 'SADANG',
				),
			220 =>
				array(
					'id'         => '3305221',
					'regency_id' => '3305',
					'name'       => 'KARANGSAMBUNG',
				),
			221 =>
				array(
					'id'         => '3306010',
					'regency_id' => '3306',
					'name'       => 'GRABAG',
				),
			222 =>
				array(
					'id'         => '3306020',
					'regency_id' => '3306',
					'name'       => 'NGOMBOL',
				),
			223 =>
				array(
					'id'         => '3306030',
					'regency_id' => '3306',
					'name'       => 'PURWODADI',
				),
			224 =>
				array(
					'id'         => '3306040',
					'regency_id' => '3306',
					'name'       => 'BAGELEN',
				),
			225 =>
				array(
					'id'         => '3306050',
					'regency_id' => '3306',
					'name'       => 'KALIGESING',
				),
			226 =>
				array(
					'id'         => '3306060',
					'regency_id' => '3306',
					'name'       => 'PURWOREJO',
				),
			227 =>
				array(
					'id'         => '3306070',
					'regency_id' => '3306',
					'name'       => 'BANYU URIP',
				),
			228 =>
				array(
					'id'         => '3306080',
					'regency_id' => '3306',
					'name'       => 'BAYAN',
				),
			229 =>
				array(
					'id'         => '3306090',
					'regency_id' => '3306',
					'name'       => 'KUTOARJO',
				),
			230 =>
				array(
					'id'         => '3306100',
					'regency_id' => '3306',
					'name'       => 'BUTUH',
				),
			231 =>
				array(
					'id'         => '3306110',
					'regency_id' => '3306',
					'name'       => 'PITURUH',
				),
			232 =>
				array(
					'id'         => '3306120',
					'regency_id' => '3306',
					'name'       => 'KEMIRI',
				),
			233 =>
				array(
					'id'         => '3306130',
					'regency_id' => '3306',
					'name'       => 'BRUNO',
				),
			234 =>
				array(
					'id'         => '3306140',
					'regency_id' => '3306',
					'name'       => 'GEBANG',
				),
			235 =>
				array(
					'id'         => '3306150',
					'regency_id' => '3306',
					'name'       => 'LOANO',
				),
			236 =>
				array(
					'id'         => '3306160',
					'regency_id' => '3306',
					'name'       => 'BENER',
				),
			237 =>
				array(
					'id'         => '3307010',
					'regency_id' => '3307',
					'name'       => 'WADASLINTANG',
				),
			238 =>
				array(
					'id'         => '3307020',
					'regency_id' => '3307',
					'name'       => 'KEPIL',
				),
			239 =>
				array(
					'id'         => '3307030',
					'regency_id' => '3307',
					'name'       => 'SAPURAN',
				),
			240 =>
				array(
					'id'         => '3307031',
					'regency_id' => '3307',
					'name'       => 'KALIBAWANG',
				),
			241 =>
				array(
					'id'         => '3307040',
					'regency_id' => '3307',
					'name'       => 'KALIWIRO',
				),
			242 =>
				array(
					'id'         => '3307050',
					'regency_id' => '3307',
					'name'       => 'LEKSONO',
				),
			243 =>
				array(
					'id'         => '3307051',
					'regency_id' => '3307',
					'name'       => 'SUKOHARJO',
				),
			244 =>
				array(
					'id'         => '3307060',
					'regency_id' => '3307',
					'name'       => 'SELOMERTO',
				),
			245 =>
				array(
					'id'         => '3307070',
					'regency_id' => '3307',
					'name'       => 'KALIKAJAR',
				),
			246 =>
				array(
					'id'         => '3307080',
					'regency_id' => '3307',
					'name'       => 'KERTEK',
				),
			247 =>
				array(
					'id'         => '3307090',
					'regency_id' => '3307',
					'name'       => 'WONOSOBO',
				),
			248 =>
				array(
					'id'         => '3307100',
					'regency_id' => '3307',
					'name'       => 'WATUMALANG',
				),
			249 =>
				array(
					'id'         => '3307110',
					'regency_id' => '3307',
					'name'       => 'MOJOTENGAH',
				),
			250 =>
				array(
					'id'         => '3307120',
					'regency_id' => '3307',
					'name'       => 'GARUNG',
				),
			251 =>
				array(
					'id'         => '3307130',
					'regency_id' => '3307',
					'name'       => 'KEJAJAR',
				),
			252 =>
				array(
					'id'         => '3308010',
					'regency_id' => '3308',
					'name'       => 'SALAMAN',
				),
			253 =>
				array(
					'id'         => '3308020',
					'regency_id' => '3308',
					'name'       => 'BOROBUDUR',
				),
			254 =>
				array(
					'id'         => '3308030',
					'regency_id' => '3308',
					'name'       => 'NGLUWAR',
				),
			255 =>
				array(
					'id'         => '3308040',
					'regency_id' => '3308',
					'name'       => 'SALAM',
				),
			256 =>
				array(
					'id'         => '3308050',
					'regency_id' => '3308',
					'name'       => 'SRUMBUNG',
				),
			257 =>
				array(
					'id'         => '3308060',
					'regency_id' => '3308',
					'name'       => 'DUKUN',
				),
			258 =>
				array(
					'id'         => '3308070',
					'regency_id' => '3308',
					'name'       => 'MUNTILAN',
				),
			259 =>
				array(
					'id'         => '3308080',
					'regency_id' => '3308',
					'name'       => 'MUNGKID',
				),
			260 =>
				array(
					'id'         => '3308090',
					'regency_id' => '3308',
					'name'       => 'SAWANGAN',
				),
			261 =>
				array(
					'id'         => '3308100',
					'regency_id' => '3308',
					'name'       => 'CANDIMULYO',
				),
			262 =>
				array(
					'id'         => '3308110',
					'regency_id' => '3308',
					'name'       => 'MERTOYUDAN',
				),
			263 =>
				array(
					'id'         => '3308120',
					'regency_id' => '3308',
					'name'       => 'TEMPURAN',
				),
			264 =>
				array(
					'id'         => '3308130',
					'regency_id' => '3308',
					'name'       => 'KAJORAN',
				),
			265 =>
				array(
					'id'         => '3308140',
					'regency_id' => '3308',
					'name'       => 'KALIANGKRIK',
				),
			266 =>
				array(
					'id'         => '3308150',
					'regency_id' => '3308',
					'name'       => 'BANDONGAN',
				),
			267 =>
				array(
					'id'         => '3308160',
					'regency_id' => '3308',
					'name'       => 'WINDUSARI',
				),
			268 =>
				array(
					'id'         => '3308170',
					'regency_id' => '3308',
					'name'       => 'SECANG',
				),
			269 =>
				array(
					'id'         => '3308180',
					'regency_id' => '3308',
					'name'       => 'TEGALREJO',
				),
			270 =>
				array(
					'id'         => '3308190',
					'regency_id' => '3308',
					'name'       => 'PAKIS',
				),
			271 =>
				array(
					'id'         => '3308200',
					'regency_id' => '3308',
					'name'       => 'GRABAG',
				),
			272 =>
				array(
					'id'         => '3308210',
					'regency_id' => '3308',
					'name'       => 'NGABLAK',
				),
			273 =>
				array(
					'id'         => '3309010',
					'regency_id' => '3309',
					'name'       => 'SELO',
				),
			274 =>
				array(
					'id'         => '3309020',
					'regency_id' => '3309',
					'name'       => 'AMPEL',
				),
			275 =>
				array(
					'id'         => '3309030',
					'regency_id' => '3309',
					'name'       => 'CEPOGO',
				),
			276 =>
				array(
					'id'         => '3309040',
					'regency_id' => '3309',
					'name'       => 'MUSUK',
				),
			277 =>
				array(
					'id'         => '3309050',
					'regency_id' => '3309',
					'name'       => 'BOYOLALI',
				),
			278 =>
				array(
					'id'         => '3309060',
					'regency_id' => '3309',
					'name'       => 'MOJOSONGO',
				),
			279 =>
				array(
					'id'         => '3309070',
					'regency_id' => '3309',
					'name'       => 'TERAS',
				),
			280 =>
				array(
					'id'         => '3309080',
					'regency_id' => '3309',
					'name'       => 'SAWIT',
				),
			281 =>
				array(
					'id'         => '3309090',
					'regency_id' => '3309',
					'name'       => 'BANYUDONO',
				),
			282 =>
				array(
					'id'         => '3309100',
					'regency_id' => '3309',
					'name'       => 'SAMBI',
				),
			283 =>
				array(
					'id'         => '3309110',
					'regency_id' => '3309',
					'name'       => 'NGEMPLAK',
				),
			284 =>
				array(
					'id'         => '3309120',
					'regency_id' => '3309',
					'name'       => 'NOGOSARI',
				),
			285 =>
				array(
					'id'         => '3309130',
					'regency_id' => '3309',
					'name'       => 'SIMO',
				),
			286 =>
				array(
					'id'         => '3309140',
					'regency_id' => '3309',
					'name'       => 'KARANGGEDE',
				),
			287 =>
				array(
					'id'         => '3309150',
					'regency_id' => '3309',
					'name'       => 'KLEGO',
				),
			288 =>
				array(
					'id'         => '3309160',
					'regency_id' => '3309',
					'name'       => 'ANDONG',
				),
			289 =>
				array(
					'id'         => '3309170',
					'regency_id' => '3309',
					'name'       => 'KEMUSU',
				),
			290 =>
				array(
					'id'         => '3309180',
					'regency_id' => '3309',
					'name'       => 'WONOSEGORO',
				),
			291 =>
				array(
					'id'         => '3309190',
					'regency_id' => '3309',
					'name'       => 'JUWANGI',
				),
			292 =>
				array(
					'id'         => '3310010',
					'regency_id' => '3310',
					'name'       => 'PRAMBANAN',
				),
			293 =>
				array(
					'id'         => '3310020',
					'regency_id' => '3310',
					'name'       => 'GANTIWARNO',
				),
			294 =>
				array(
					'id'         => '3310030',
					'regency_id' => '3310',
					'name'       => 'WEDI',
				),
			295 =>
				array(
					'id'         => '3310040',
					'regency_id' => '3310',
					'name'       => 'BAYAT',
				),
			296 =>
				array(
					'id'         => '3310050',
					'regency_id' => '3310',
					'name'       => 'CAWAS',
				),
			297 =>
				array(
					'id'         => '3310060',
					'regency_id' => '3310',
					'name'       => 'TRUCUK',
				),
			298 =>
				array(
					'id'         => '3310070',
					'regency_id' => '3310',
					'name'       => 'KALIKOTES',
				),
			299 =>
				array(
					'id'         => '3310080',
					'regency_id' => '3310',
					'name'       => 'KEBONARUM',
				),
			300 =>
				array(
					'id'         => '3310090',
					'regency_id' => '3310',
					'name'       => 'JOGONALAN',
				),
			301 =>
				array(
					'id'         => '3310100',
					'regency_id' => '3310',
					'name'       => 'MANISRENGGO',
				),
			302 =>
				array(
					'id'         => '3310110',
					'regency_id' => '3310',
					'name'       => 'KARANGNONGKO',
				),
			303 =>
				array(
					'id'         => '3310120',
					'regency_id' => '3310',
					'name'       => 'NGAWEN',
				),
			304 =>
				array(
					'id'         => '3310130',
					'regency_id' => '3310',
					'name'       => 'CEPER',
				),
			305 =>
				array(
					'id'         => '3310140',
					'regency_id' => '3310',
					'name'       => 'PEDAN',
				),
			306 =>
				array(
					'id'         => '3310150',
					'regency_id' => '3310',
					'name'       => 'KARANGDOWO',
				),
			307 =>
				array(
					'id'         => '3310160',
					'regency_id' => '3310',
					'name'       => 'JUWIRING',
				),
			308 =>
				array(
					'id'         => '3310170',
					'regency_id' => '3310',
					'name'       => 'WONOSARI',
				),
			309 =>
				array(
					'id'         => '3310180',
					'regency_id' => '3310',
					'name'       => 'DELANGGU',
				),
			310 =>
				array(
					'id'         => '3310190',
					'regency_id' => '3310',
					'name'       => 'POLANHARJO',
				),
			311 =>
				array(
					'id'         => '3310200',
					'regency_id' => '3310',
					'name'       => 'KARANGANOM',
				),
			312 =>
				array(
					'id'         => '3310210',
					'regency_id' => '3310',
					'name'       => 'TULUNG',
				),
			313 =>
				array(
					'id'         => '3310220',
					'regency_id' => '3310',
					'name'       => 'JATINOM',
				),
			314 =>
				array(
					'id'         => '3310230',
					'regency_id' => '3310',
					'name'       => 'KEMALANG',
				),
			315 =>
				array(
					'id'         => '3310710',
					'regency_id' => '3310',
					'name'       => 'KLATEN SELATAN',
				),
			316 =>
				array(
					'id'         => '3310720',
					'regency_id' => '3310',
					'name'       => 'KLATEN TENGAH',
				),
			317 =>
				array(
					'id'         => '3310730',
					'regency_id' => '3310',
					'name'       => 'KLATEN UTARA',
				),
			318 =>
				array(
					'id'         => '3311010',
					'regency_id' => '3311',
					'name'       => 'WERU',
				),
			319 =>
				array(
					'id'         => '3311020',
					'regency_id' => '3311',
					'name'       => 'BULU',
				),
			320 =>
				array(
					'id'         => '3311030',
					'regency_id' => '3311',
					'name'       => 'TAWANGSARI',
				),
			321 =>
				array(
					'id'         => '3311040',
					'regency_id' => '3311',
					'name'       => 'SUKOHARJO',
				),
			322 =>
				array(
					'id'         => '3311050',
					'regency_id' => '3311',
					'name'       => 'NGUTER',
				),
			323 =>
				array(
					'id'         => '3311060',
					'regency_id' => '3311',
					'name'       => 'BENDOSARI',
				),
			324 =>
				array(
					'id'         => '3311070',
					'regency_id' => '3311',
					'name'       => 'POLOKARTO',
				),
			325 =>
				array(
					'id'         => '3311080',
					'regency_id' => '3311',
					'name'       => 'MOJOLABAN',
				),
			326 =>
				array(
					'id'         => '3311090',
					'regency_id' => '3311',
					'name'       => 'GROGOL',
				),
			327 =>
				array(
					'id'         => '3311100',
					'regency_id' => '3311',
					'name'       => 'BAKI',
				),
			328 =>
				array(
					'id'         => '3311110',
					'regency_id' => '3311',
					'name'       => 'GATAK',
				),
			329 =>
				array(
					'id'         => '3311120',
					'regency_id' => '3311',
					'name'       => 'KARTASURA',
				),
			330 =>
				array(
					'id'         => '3312010',
					'regency_id' => '3312',
					'name'       => 'PRACIMANTORO',
				),
			331 =>
				array(
					'id'         => '3312020',
					'regency_id' => '3312',
					'name'       => 'PARANGGUPITO',
				),
			332 =>
				array(
					'id'         => '3312030',
					'regency_id' => '3312',
					'name'       => 'GIRITONTRO',
				),
			333 =>
				array(
					'id'         => '3312040',
					'regency_id' => '3312',
					'name'       => 'GIRIWOYO',
				),
			334 =>
				array(
					'id'         => '3312050',
					'regency_id' => '3312',
					'name'       => 'BATUWARNO',
				),
			335 =>
				array(
					'id'         => '3312060',
					'regency_id' => '3312',
					'name'       => 'KARANGTENGAH',
				),
			336 =>
				array(
					'id'         => '3312070',
					'regency_id' => '3312',
					'name'       => 'TIRTOMOYO',
				),
			337 =>
				array(
					'id'         => '3312080',
					'regency_id' => '3312',
					'name'       => 'NGUNTORONADI',
				),
			338 =>
				array(
					'id'         => '3312090',
					'regency_id' => '3312',
					'name'       => 'BATURETNO',
				),
			339 =>
				array(
					'id'         => '3312100',
					'regency_id' => '3312',
					'name'       => 'EROMOKO',
				),
			340 =>
				array(
					'id'         => '3312110',
					'regency_id' => '3312',
					'name'       => 'WURYANTORO',
				),
			341 =>
				array(
					'id'         => '3312120',
					'regency_id' => '3312',
					'name'       => 'MANYARAN',
				),
			342 =>
				array(
					'id'         => '3312130',
					'regency_id' => '3312',
					'name'       => 'SELOGIRI',
				),
			343 =>
				array(
					'id'         => '3312140',
					'regency_id' => '3312',
					'name'       => 'WONOGIRI',
				),
			344 =>
				array(
					'id'         => '3312150',
					'regency_id' => '3312',
					'name'       => 'NGADIROJO',
				),
			345 =>
				array(
					'id'         => '3312160',
					'regency_id' => '3312',
					'name'       => 'SIDOHARJO',
				),
			346 =>
				array(
					'id'         => '3312170',
					'regency_id' => '3312',
					'name'       => 'JATIROTO',
				),
			347 =>
				array(
					'id'         => '3312180',
					'regency_id' => '3312',
					'name'       => 'KISMANTORO',
				),
			348 =>
				array(
					'id'         => '3312190',
					'regency_id' => '3312',
					'name'       => 'PURWANTORO',
				),
			349 =>
				array(
					'id'         => '3312200',
					'regency_id' => '3312',
					'name'       => 'BULUKERTO',
				),
			350 =>
				array(
					'id'         => '3312201',
					'regency_id' => '3312',
					'name'       => 'PUHPELEM',
				),
			351 =>
				array(
					'id'         => '3312210',
					'regency_id' => '3312',
					'name'       => 'SLOGOHIMO',
				),
			352 =>
				array(
					'id'         => '3312220',
					'regency_id' => '3312',
					'name'       => 'JATISRONO',
				),
			353 =>
				array(
					'id'         => '3312230',
					'regency_id' => '3312',
					'name'       => 'JATIPURNO',
				),
			354 =>
				array(
					'id'         => '3312240',
					'regency_id' => '3312',
					'name'       => 'GIRIMARTO',
				),
			355 =>
				array(
					'id'         => '3313010',
					'regency_id' => '3313',
					'name'       => 'JATIPURO',
				),
			356 =>
				array(
					'id'         => '3313020',
					'regency_id' => '3313',
					'name'       => 'JATIYOSO',
				),
			357 =>
				array(
					'id'         => '3313030',
					'regency_id' => '3313',
					'name'       => 'JUMAPOLO',
				),
			358 =>
				array(
					'id'         => '3313040',
					'regency_id' => '3313',
					'name'       => 'JUMANTONO',
				),
			359 =>
				array(
					'id'         => '3313050',
					'regency_id' => '3313',
					'name'       => 'MATESIH',
				),
			360 =>
				array(
					'id'         => '3313060',
					'regency_id' => '3313',
					'name'       => 'TAWANGMANGU',
				),
			361 =>
				array(
					'id'         => '3313070',
					'regency_id' => '3313',
					'name'       => 'NGARGOYOSO',
				),
			362 =>
				array(
					'id'         => '3313080',
					'regency_id' => '3313',
					'name'       => 'KARANGPANDAN',
				),
			363 =>
				array(
					'id'         => '3313090',
					'regency_id' => '3313',
					'name'       => 'KARANGANYAR',
				),
			364 =>
				array(
					'id'         => '3313100',
					'regency_id' => '3313',
					'name'       => 'TASIKMADU',
				),
			365 =>
				array(
					'id'         => '3313110',
					'regency_id' => '3313',
					'name'       => 'JATEN',
				),
			366 =>
				array(
					'id'         => '3313120',
					'regency_id' => '3313',
					'name'       => 'COLOMADU',
				),
			367 =>
				array(
					'id'         => '3313130',
					'regency_id' => '3313',
					'name'       => 'GONDANGREJO',
				),
			368 =>
				array(
					'id'         => '3313140',
					'regency_id' => '3313',
					'name'       => 'KEBAKKRAMAT',
				),
			369 =>
				array(
					'id'         => '3313150',
					'regency_id' => '3313',
					'name'       => 'MOJOGEDANG',
				),
			370 =>
				array(
					'id'         => '3313160',
					'regency_id' => '3313',
					'name'       => 'KERJO',
				),
			371 =>
				array(
					'id'         => '3313170',
					'regency_id' => '3313',
					'name'       => 'JENAWI',
				),
			372 =>
				array(
					'id'         => '3314010',
					'regency_id' => '3314',
					'name'       => 'KALIJAMBE',
				),
			373 =>
				array(
					'id'         => '3314020',
					'regency_id' => '3314',
					'name'       => 'PLUPUH',
				),
			374 =>
				array(
					'id'         => '3314030',
					'regency_id' => '3314',
					'name'       => 'MASARAN',
				),
			375 =>
				array(
					'id'         => '3314040',
					'regency_id' => '3314',
					'name'       => 'KEDAWUNG',
				),
			376 =>
				array(
					'id'         => '3314050',
					'regency_id' => '3314',
					'name'       => 'SAMBIREJO',
				),
			377 =>
				array(
					'id'         => '3314060',
					'regency_id' => '3314',
					'name'       => 'GONDANG',
				),
			378 =>
				array(
					'id'         => '3314070',
					'regency_id' => '3314',
					'name'       => 'SAMBUNG MACAN',
				),
			379 =>
				array(
					'id'         => '3314080',
					'regency_id' => '3314',
					'name'       => 'NGRAMPAL',
				),
			380 =>
				array(
					'id'         => '3314090',
					'regency_id' => '3314',
					'name'       => 'KARANGMALANG',
				),
			381 =>
				array(
					'id'         => '3314100',
					'regency_id' => '3314',
					'name'       => 'SRAGEN',
				),
			382 =>
				array(
					'id'         => '3314110',
					'regency_id' => '3314',
					'name'       => 'SIDOHARJO',
				),
			383 =>
				array(
					'id'         => '3314120',
					'regency_id' => '3314',
					'name'       => 'TANON',
				),
			384 =>
				array(
					'id'         => '3314130',
					'regency_id' => '3314',
					'name'       => 'GEMOLONG',
				),
			385 =>
				array(
					'id'         => '3314140',
					'regency_id' => '3314',
					'name'       => 'MIRI',
				),
			386 =>
				array(
					'id'         => '3314150',
					'regency_id' => '3314',
					'name'       => 'SUMBERLAWANG',
				),
			387 =>
				array(
					'id'         => '3314160',
					'regency_id' => '3314',
					'name'       => 'MONDOKAN',
				),
			388 =>
				array(
					'id'         => '3314170',
					'regency_id' => '3314',
					'name'       => 'SUKODONO',
				),
			389 =>
				array(
					'id'         => '3314180',
					'regency_id' => '3314',
					'name'       => 'GESI',
				),
			390 =>
				array(
					'id'         => '3314190',
					'regency_id' => '3314',
					'name'       => 'TANGEN',
				),
			391 =>
				array(
					'id'         => '3314200',
					'regency_id' => '3314',
					'name'       => 'JENAR',
				),
			392 =>
				array(
					'id'         => '3315010',
					'regency_id' => '3315',
					'name'       => 'KEDUNGJATI',
				),
			393 =>
				array(
					'id'         => '3315020',
					'regency_id' => '3315',
					'name'       => 'KARANGRAYUNG',
				),
			394 =>
				array(
					'id'         => '3315030',
					'regency_id' => '3315',
					'name'       => 'PENAWANGAN',
				),
			395 =>
				array(
					'id'         => '3315040',
					'regency_id' => '3315',
					'name'       => 'TOROH',
				),
			396 =>
				array(
					'id'         => '3315050',
					'regency_id' => '3315',
					'name'       => 'GEYER',
				),
			397 =>
				array(
					'id'         => '3315060',
					'regency_id' => '3315',
					'name'       => 'PULOKULON',
				),
			398 =>
				array(
					'id'         => '3315070',
					'regency_id' => '3315',
					'name'       => 'KRADENAN',
				),
			399 =>
				array(
					'id'         => '3315080',
					'regency_id' => '3315',
					'name'       => 'GABUS',
				),
			400 =>
				array(
					'id'         => '3315090',
					'regency_id' => '3315',
					'name'       => 'NGARINGAN',
				),
			401 =>
				array(
					'id'         => '3315100',
					'regency_id' => '3315',
					'name'       => 'WIROSARI',
				),
			402 =>
				array(
					'id'         => '3315110',
					'regency_id' => '3315',
					'name'       => 'TAWANGHARJO',
				),
			403 =>
				array(
					'id'         => '3315120',
					'regency_id' => '3315',
					'name'       => 'GROBOGAN',
				),
			404 =>
				array(
					'id'         => '3315130',
					'regency_id' => '3315',
					'name'       => 'PURWODADI',
				),
			405 =>
				array(
					'id'         => '3315140',
					'regency_id' => '3315',
					'name'       => 'BRATI',
				),
			406 =>
				array(
					'id'         => '3315150',
					'regency_id' => '3315',
					'name'       => 'KLAMBU',
				),
			407 =>
				array(
					'id'         => '3315160',
					'regency_id' => '3315',
					'name'       => 'GODONG',
				),
			408 =>
				array(
					'id'         => '3315170',
					'regency_id' => '3315',
					'name'       => 'GUBUG',
				),
			409 =>
				array(
					'id'         => '3315180',
					'regency_id' => '3315',
					'name'       => 'TEGOWANU',
				),
			410 =>
				array(
					'id'         => '3315190',
					'regency_id' => '3315',
					'name'       => 'TANGGUNGHARJO',
				),
			411 =>
				array(
					'id'         => '3316010',
					'regency_id' => '3316',
					'name'       => 'JATI',
				),
			412 =>
				array(
					'id'         => '3316020',
					'regency_id' => '3316',
					'name'       => 'RANDUBLATUNG',
				),
			413 =>
				array(
					'id'         => '3316030',
					'regency_id' => '3316',
					'name'       => 'KRADENAN',
				),
			414 =>
				array(
					'id'         => '3316040',
					'regency_id' => '3316',
					'name'       => 'KEDUNGTUBAN',
				),
			415 =>
				array(
					'id'         => '3316050',
					'regency_id' => '3316',
					'name'       => 'CEPU',
				),
			416 =>
				array(
					'id'         => '3316060',
					'regency_id' => '3316',
					'name'       => 'SAMBONG',
				),
			417 =>
				array(
					'id'         => '3316070',
					'regency_id' => '3316',
					'name'       => 'JIKEN',
				),
			418 =>
				array(
					'id'         => '3316080',
					'regency_id' => '3316',
					'name'       => 'BOGOREJO',
				),
			419 =>
				array(
					'id'         => '3316090',
					'regency_id' => '3316',
					'name'       => 'JEPON',
				),
			420 =>
				array(
					'id'         => '3316100',
					'regency_id' => '3316',
					'name'       => 'KOTA BLORA',
				),
			421 =>
				array(
					'id'         => '3316110',
					'regency_id' => '3316',
					'name'       => 'BANJAREJO',
				),
			422 =>
				array(
					'id'         => '3316120',
					'regency_id' => '3316',
					'name'       => 'TUNJUNGAN',
				),
			423 =>
				array(
					'id'         => '3316130',
					'regency_id' => '3316',
					'name'       => 'JAPAH',
				),
			424 =>
				array(
					'id'         => '3316140',
					'regency_id' => '3316',
					'name'       => 'NGAWEN',
				),
			425 =>
				array(
					'id'         => '3316150',
					'regency_id' => '3316',
					'name'       => 'KUNDURAN',
				),
			426 =>
				array(
					'id'         => '3316160',
					'regency_id' => '3316',
					'name'       => 'TODANAN',
				),
			427 =>
				array(
					'id'         => '3317010',
					'regency_id' => '3317',
					'name'       => 'SUMBER',
				),
			428 =>
				array(
					'id'         => '3317020',
					'regency_id' => '3317',
					'name'       => 'BULU',
				),
			429 =>
				array(
					'id'         => '3317030',
					'regency_id' => '3317',
					'name'       => 'GUNEM',
				),
			430 =>
				array(
					'id'         => '3317040',
					'regency_id' => '3317',
					'name'       => 'SALE',
				),
			431 =>
				array(
					'id'         => '3317050',
					'regency_id' => '3317',
					'name'       => 'SARANG',
				),
			432 =>
				array(
					'id'         => '3317060',
					'regency_id' => '3317',
					'name'       => 'SEDAN',
				),
			433 =>
				array(
					'id'         => '3317070',
					'regency_id' => '3317',
					'name'       => 'PAMOTAN',
				),
			434 =>
				array(
					'id'         => '3317080',
					'regency_id' => '3317',
					'name'       => 'SULANG',
				),
			435 =>
				array(
					'id'         => '3317090',
					'regency_id' => '3317',
					'name'       => 'KALIORI',
				),
			436 =>
				array(
					'id'         => '3317100',
					'regency_id' => '3317',
					'name'       => 'REMBANG',
				),
			437 =>
				array(
					'id'         => '3317110',
					'regency_id' => '3317',
					'name'       => 'PANCUR',
				),
			438 =>
				array(
					'id'         => '3317120',
					'regency_id' => '3317',
					'name'       => 'KRAGAN',
				),
			439 =>
				array(
					'id'         => '3317130',
					'regency_id' => '3317',
					'name'       => 'SLUKE',
				),
			440 =>
				array(
					'id'         => '3317140',
					'regency_id' => '3317',
					'name'       => 'LASEM',
				),
			441 =>
				array(
					'id'         => '3318010',
					'regency_id' => '3318',
					'name'       => 'SUKOLILO',
				),
			442 =>
				array(
					'id'         => '3318020',
					'regency_id' => '3318',
					'name'       => 'KAYEN',
				),
			443 =>
				array(
					'id'         => '3318030',
					'regency_id' => '3318',
					'name'       => 'TAMBAKROMO',
				),
			444 =>
				array(
					'id'         => '3318040',
					'regency_id' => '3318',
					'name'       => 'WINONG',
				),
			445 =>
				array(
					'id'         => '3318050',
					'regency_id' => '3318',
					'name'       => 'PUCAKWANGI',
				),
			446 =>
				array(
					'id'         => '3318060',
					'regency_id' => '3318',
					'name'       => 'JAKEN',
				),
			447 =>
				array(
					'id'         => '3318070',
					'regency_id' => '3318',
					'name'       => 'BATANGAN',
				),
			448 =>
				array(
					'id'         => '3318080',
					'regency_id' => '3318',
					'name'       => 'JUWANA',
				),
			449 =>
				array(
					'id'         => '3318090',
					'regency_id' => '3318',
					'name'       => 'JAKENAN',
				),
			450 =>
				array(
					'id'         => '3318100',
					'regency_id' => '3318',
					'name'       => 'PATI',
				),
			451 =>
				array(
					'id'         => '3318110',
					'regency_id' => '3318',
					'name'       => 'GABUS',
				),
			452 =>
				array(
					'id'         => '3318120',
					'regency_id' => '3318',
					'name'       => 'MARGOREJO',
				),
			453 =>
				array(
					'id'         => '3318130',
					'regency_id' => '3318',
					'name'       => 'GEMBONG',
				),
			454 =>
				array(
					'id'         => '3318140',
					'regency_id' => '3318',
					'name'       => 'TLOGOWUNGU',
				),
			455 =>
				array(
					'id'         => '3318150',
					'regency_id' => '3318',
					'name'       => 'WEDARIJAKSA',
				),
			456 =>
				array(
					'id'         => '3318160',
					'regency_id' => '3318',
					'name'       => 'TRANGKIL',
				),
			457 =>
				array(
					'id'         => '3318170',
					'regency_id' => '3318',
					'name'       => 'MARGOYOSO',
				),
			458 =>
				array(
					'id'         => '3318180',
					'regency_id' => '3318',
					'name'       => 'GUNUNG WUNGKAL',
				),
			459 =>
				array(
					'id'         => '3318190',
					'regency_id' => '3318',
					'name'       => 'CLUWAK',
				),
			460 =>
				array(
					'id'         => '3318200',
					'regency_id' => '3318',
					'name'       => 'TAYU',
				),
			461 =>
				array(
					'id'         => '3318210',
					'regency_id' => '3318',
					'name'       => 'DUKUHSETI',
				),
			462 =>
				array(
					'id'         => '3319010',
					'regency_id' => '3319',
					'name'       => 'KALIWUNGU',
				),
			463 =>
				array(
					'id'         => '3319020',
					'regency_id' => '3319',
					'name'       => 'KOTA KUDUS',
				),
			464 =>
				array(
					'id'         => '3319030',
					'regency_id' => '3319',
					'name'       => 'JATI',
				),
			465 =>
				array(
					'id'         => '3319040',
					'regency_id' => '3319',
					'name'       => 'UNDAAN',
				),
			466 =>
				array(
					'id'         => '3319050',
					'regency_id' => '3319',
					'name'       => 'MEJOBO',
				),
			467 =>
				array(
					'id'         => '3319060',
					'regency_id' => '3319',
					'name'       => 'JEKULO',
				),
			468 =>
				array(
					'id'         => '3319070',
					'regency_id' => '3319',
					'name'       => 'BAE',
				),
			469 =>
				array(
					'id'         => '3319080',
					'regency_id' => '3319',
					'name'       => 'GEBOG',
				),
			470 =>
				array(
					'id'         => '3319090',
					'regency_id' => '3319',
					'name'       => 'DAWE',
				),
			471 =>
				array(
					'id'         => '3320010',
					'regency_id' => '3320',
					'name'       => 'KEDUNG',
				),
			472 =>
				array(
					'id'         => '3320020',
					'regency_id' => '3320',
					'name'       => 'PECANGAAN',
				),
			473 =>
				array(
					'id'         => '3320021',
					'regency_id' => '3320',
					'name'       => 'KALINYAMATAN',
				),
			474 =>
				array(
					'id'         => '3320030',
					'regency_id' => '3320',
					'name'       => 'WELAHAN',
				),
			475 =>
				array(
					'id'         => '3320040',
					'regency_id' => '3320',
					'name'       => 'MAYONG',
				),
			476 =>
				array(
					'id'         => '3320050',
					'regency_id' => '3320',
					'name'       => 'NALUMSARI',
				),
			477 =>
				array(
					'id'         => '3320060',
					'regency_id' => '3320',
					'name'       => 'BATEALIT',
				),
			478 =>
				array(
					'id'         => '3320070',
					'regency_id' => '3320',
					'name'       => 'TAHUNAN',
				),
			479 =>
				array(
					'id'         => '3320080',
					'regency_id' => '3320',
					'name'       => 'JEPARA',
				),
			480 =>
				array(
					'id'         => '3320090',
					'regency_id' => '3320',
					'name'       => 'MLONGGO',
				),
			481 =>
				array(
					'id'         => '3320091',
					'regency_id' => '3320',
					'name'       => 'PAKIS AJI',
				),
			482 =>
				array(
					'id'         => '3320100',
					'regency_id' => '3320',
					'name'       => 'BANGSRI',
				),
			483 =>
				array(
					'id'         => '3320101',
					'regency_id' => '3320',
					'name'       => 'KEMBANG',
				),
			484 =>
				array(
					'id'         => '3320110',
					'regency_id' => '3320',
					'name'       => 'KELING',
				),
			485 =>
				array(
					'id'         => '3320111',
					'regency_id' => '3320',
					'name'       => 'DONOROJO',
				),
			486 =>
				array(
					'id'         => '3320120',
					'regency_id' => '3320',
					'name'       => 'KARIMUNJAWA',
				),
			487 =>
				array(
					'id'         => '3321010',
					'regency_id' => '3321',
					'name'       => 'MRANGGEN',
				),
			488 =>
				array(
					'id'         => '3321020',
					'regency_id' => '3321',
					'name'       => 'KARANGAWEN',
				),
			489 =>
				array(
					'id'         => '3321030',
					'regency_id' => '3321',
					'name'       => 'GUNTUR',
				),
			490 =>
				array(
					'id'         => '3321040',
					'regency_id' => '3321',
					'name'       => 'SAYUNG',
				),
			491 =>
				array(
					'id'         => '3321050',
					'regency_id' => '3321',
					'name'       => 'KARANG TENGAH',
				),
			492 =>
				array(
					'id'         => '3321060',
					'regency_id' => '3321',
					'name'       => 'BONANG',
				),
			493 =>
				array(
					'id'         => '3321070',
					'regency_id' => '3321',
					'name'       => 'DEMAK',
				),
			494 =>
				array(
					'id'         => '3321080',
					'regency_id' => '3321',
					'name'       => 'WONOSALAM',
				),
			495 =>
				array(
					'id'         => '3321090',
					'regency_id' => '3321',
					'name'       => 'DEMPET',
				),
			496 =>
				array(
					'id'         => '3321091',
					'regency_id' => '3321',
					'name'       => 'KEBONAGUNG',
				),
			497 =>
				array(
					'id'         => '3321100',
					'regency_id' => '3321',
					'name'       => 'GAJAH',
				),
			498 =>
				array(
					'id'         => '3321110',
					'regency_id' => '3321',
					'name'       => 'KARANGANYAR',
				),
			499 =>
				array(
					'id'         => '3321120',
					'regency_id' => '3321',
					'name'       => 'MIJEN',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '3321130',
					'regency_id' => '3321',
					'name'       => 'WEDUNG',
				),
			1   =>
				array(
					'id'         => '3322010',
					'regency_id' => '3322',
					'name'       => 'GETASAN',
				),
			2   =>
				array(
					'id'         => '3322020',
					'regency_id' => '3322',
					'name'       => 'TENGARAN',
				),
			3   =>
				array(
					'id'         => '3322030',
					'regency_id' => '3322',
					'name'       => 'SUSUKAN',
				),
			4   =>
				array(
					'id'         => '3322031',
					'regency_id' => '3322',
					'name'       => 'KALIWUNGU',
				),
			5   =>
				array(
					'id'         => '3322040',
					'regency_id' => '3322',
					'name'       => 'SURUH',
				),
			6   =>
				array(
					'id'         => '3322050',
					'regency_id' => '3322',
					'name'       => 'PABELAN',
				),
			7   =>
				array(
					'id'         => '3322060',
					'regency_id' => '3322',
					'name'       => 'TUNTANG',
				),
			8   =>
				array(
					'id'         => '3322070',
					'regency_id' => '3322',
					'name'       => 'BANYUBIRU',
				),
			9   =>
				array(
					'id'         => '3322080',
					'regency_id' => '3322',
					'name'       => 'JAMBU',
				),
			10  =>
				array(
					'id'         => '3322090',
					'regency_id' => '3322',
					'name'       => 'SUMOWONO',
				),
			11  =>
				array(
					'id'         => '3322100',
					'regency_id' => '3322',
					'name'       => 'AMBARAWA',
				),
			12  =>
				array(
					'id'         => '3322101',
					'regency_id' => '3322',
					'name'       => 'BANDUNGAN',
				),
			13  =>
				array(
					'id'         => '3322110',
					'regency_id' => '3322',
					'name'       => 'BAWEN',
				),
			14  =>
				array(
					'id'         => '3322120',
					'regency_id' => '3322',
					'name'       => 'BRINGIN',
				),
			15  =>
				array(
					'id'         => '3322121',
					'regency_id' => '3322',
					'name'       => 'BANCAK',
				),
			16  =>
				array(
					'id'         => '3322130',
					'regency_id' => '3322',
					'name'       => 'PRINGAPUS',
				),
			17  =>
				array(
					'id'         => '3322140',
					'regency_id' => '3322',
					'name'       => 'BERGAS',
				),
			18  =>
				array(
					'id'         => '3322151',
					'regency_id' => '3322',
					'name'       => 'UNGARAN BARAT',
				),
			19  =>
				array(
					'id'         => '3322152',
					'regency_id' => '3322',
					'name'       => 'UNGARAN TIMUR',
				),
			20  =>
				array(
					'id'         => '3323010',
					'regency_id' => '3323',
					'name'       => 'PARAKAN',
				),
			21  =>
				array(
					'id'         => '3323011',
					'regency_id' => '3323',
					'name'       => 'KLEDUNG',
				),
			22  =>
				array(
					'id'         => '3323012',
					'regency_id' => '3323',
					'name'       => 'BANSARI',
				),
			23  =>
				array(
					'id'         => '3323020',
					'regency_id' => '3323',
					'name'       => 'BULU',
				),
			24  =>
				array(
					'id'         => '3323030',
					'regency_id' => '3323',
					'name'       => 'TEMANGGUNG',
				),
			25  =>
				array(
					'id'         => '3323031',
					'regency_id' => '3323',
					'name'       => 'TLOGOMULYO',
				),
			26  =>
				array(
					'id'         => '3323040',
					'regency_id' => '3323',
					'name'       => 'TEMBARAK',
				),
			27  =>
				array(
					'id'         => '3323041',
					'regency_id' => '3323',
					'name'       => 'SELOPAMPANG',
				),
			28  =>
				array(
					'id'         => '3323050',
					'regency_id' => '3323',
					'name'       => 'KRANGGAN',
				),
			29  =>
				array(
					'id'         => '3323060',
					'regency_id' => '3323',
					'name'       => 'PRINGSURAT',
				),
			30  =>
				array(
					'id'         => '3323070',
					'regency_id' => '3323',
					'name'       => 'KALORAN',
				),
			31  =>
				array(
					'id'         => '3323080',
					'regency_id' => '3323',
					'name'       => 'KANDANGAN',
				),
			32  =>
				array(
					'id'         => '3323090',
					'regency_id' => '3323',
					'name'       => 'KEDU',
				),
			33  =>
				array(
					'id'         => '3323100',
					'regency_id' => '3323',
					'name'       => 'NGADIREJO',
				),
			34  =>
				array(
					'id'         => '3323110',
					'regency_id' => '3323',
					'name'       => 'JUMO',
				),
			35  =>
				array(
					'id'         => '3323111',
					'regency_id' => '3323',
					'name'       => 'GEMAWANG',
				),
			36  =>
				array(
					'id'         => '3323120',
					'regency_id' => '3323',
					'name'       => 'CANDIROTO',
				),
			37  =>
				array(
					'id'         => '3323121',
					'regency_id' => '3323',
					'name'       => 'BEJEN',
				),
			38  =>
				array(
					'id'         => '3323130',
					'regency_id' => '3323',
					'name'       => 'TRETEP',
				),
			39  =>
				array(
					'id'         => '3323131',
					'regency_id' => '3323',
					'name'       => 'WONOBOYO',
				),
			40  =>
				array(
					'id'         => '3324010',
					'regency_id' => '3324',
					'name'       => 'PLANTUNGAN',
				),
			41  =>
				array(
					'id'         => '3324020',
					'regency_id' => '3324',
					'name'       => 'SUKOREJO',
				),
			42  =>
				array(
					'id'         => '3324030',
					'regency_id' => '3324',
					'name'       => 'PAGERRUYUNG',
				),
			43  =>
				array(
					'id'         => '3324040',
					'regency_id' => '3324',
					'name'       => 'PATEAN',
				),
			44  =>
				array(
					'id'         => '3324050',
					'regency_id' => '3324',
					'name'       => 'SINGOROJO',
				),
			45  =>
				array(
					'id'         => '3324060',
					'regency_id' => '3324',
					'name'       => 'LIMBANGAN',
				),
			46  =>
				array(
					'id'         => '3324070',
					'regency_id' => '3324',
					'name'       => 'BOJA',
				),
			47  =>
				array(
					'id'         => '3324080',
					'regency_id' => '3324',
					'name'       => 'KALIWUNGU',
				),
			48  =>
				array(
					'id'         => '3324081',
					'regency_id' => '3324',
					'name'       => 'KALIWUNGU SELATAN',
				),
			49  =>
				array(
					'id'         => '3324090',
					'regency_id' => '3324',
					'name'       => 'BRANGSONG',
				),
			50  =>
				array(
					'id'         => '3324100',
					'regency_id' => '3324',
					'name'       => 'PEGANDON',
				),
			51  =>
				array(
					'id'         => '3324101',
					'regency_id' => '3324',
					'name'       => 'NGAMPEL',
				),
			52  =>
				array(
					'id'         => '3324110',
					'regency_id' => '3324',
					'name'       => 'GEMUH',
				),
			53  =>
				array(
					'id'         => '3324111',
					'regency_id' => '3324',
					'name'       => 'RINGINARUM',
				),
			54  =>
				array(
					'id'         => '3324120',
					'regency_id' => '3324',
					'name'       => 'WELERI',
				),
			55  =>
				array(
					'id'         => '3324130',
					'regency_id' => '3324',
					'name'       => 'ROWOSARI',
				),
			56  =>
				array(
					'id'         => '3324140',
					'regency_id' => '3324',
					'name'       => 'KANGKUNG',
				),
			57  =>
				array(
					'id'         => '3324150',
					'regency_id' => '3324',
					'name'       => 'CEPIRING',
				),
			58  =>
				array(
					'id'         => '3324160',
					'regency_id' => '3324',
					'name'       => 'PATEBON',
				),
			59  =>
				array(
					'id'         => '3324170',
					'regency_id' => '3324',
					'name'       => 'KOTA KENDAL',
				),
			60  =>
				array(
					'id'         => '3325010',
					'regency_id' => '3325',
					'name'       => 'WONOTUNGGAL',
				),
			61  =>
				array(
					'id'         => '3325020',
					'regency_id' => '3325',
					'name'       => 'BANDAR',
				),
			62  =>
				array(
					'id'         => '3325030',
					'regency_id' => '3325',
					'name'       => 'BLADO',
				),
			63  =>
				array(
					'id'         => '3325040',
					'regency_id' => '3325',
					'name'       => 'REBAN',
				),
			64  =>
				array(
					'id'         => '3325050',
					'regency_id' => '3325',
					'name'       => 'BAWANG',
				),
			65  =>
				array(
					'id'         => '3325060',
					'regency_id' => '3325',
					'name'       => 'TERSONO',
				),
			66  =>
				array(
					'id'         => '3325070',
					'regency_id' => '3325',
					'name'       => 'GRINGSING',
				),
			67  =>
				array(
					'id'         => '3325080',
					'regency_id' => '3325',
					'name'       => 'LIMPUNG',
				),
			68  =>
				array(
					'id'         => '3325081',
					'regency_id' => '3325',
					'name'       => 'BANYUPUTIH',
				),
			69  =>
				array(
					'id'         => '3325090',
					'regency_id' => '3325',
					'name'       => 'SUBAH',
				),
			70  =>
				array(
					'id'         => '3325091',
					'regency_id' => '3325',
					'name'       => 'PECALUNGAN',
				),
			71  =>
				array(
					'id'         => '3325100',
					'regency_id' => '3325',
					'name'       => 'TULIS',
				),
			72  =>
				array(
					'id'         => '3325101',
					'regency_id' => '3325',
					'name'       => 'KANDEMAN',
				),
			73  =>
				array(
					'id'         => '3325110',
					'regency_id' => '3325',
					'name'       => 'BATANG',
				),
			74  =>
				array(
					'id'         => '3325120',
					'regency_id' => '3325',
					'name'       => 'WARUNG ASEM',
				),
			75  =>
				array(
					'id'         => '3326010',
					'regency_id' => '3326',
					'name'       => 'KANDANGSERANG',
				),
			76  =>
				array(
					'id'         => '3326020',
					'regency_id' => '3326',
					'name'       => 'PANINGGARAN',
				),
			77  =>
				array(
					'id'         => '3326030',
					'regency_id' => '3326',
					'name'       => 'LEBAKBARANG',
				),
			78  =>
				array(
					'id'         => '3326040',
					'regency_id' => '3326',
					'name'       => 'PETUNGKRIONO',
				),
			79  =>
				array(
					'id'         => '3326050',
					'regency_id' => '3326',
					'name'       => 'TALUN',
				),
			80  =>
				array(
					'id'         => '3326060',
					'regency_id' => '3326',
					'name'       => 'DORO',
				),
			81  =>
				array(
					'id'         => '3326070',
					'regency_id' => '3326',
					'name'       => 'KARANGANYAR',
				),
			82  =>
				array(
					'id'         => '3326080',
					'regency_id' => '3326',
					'name'       => 'KAJEN',
				),
			83  =>
				array(
					'id'         => '3326090',
					'regency_id' => '3326',
					'name'       => 'KESESI',
				),
			84  =>
				array(
					'id'         => '3326100',
					'regency_id' => '3326',
					'name'       => 'SRAGI',
				),
			85  =>
				array(
					'id'         => '3326101',
					'regency_id' => '3326',
					'name'       => 'SIWALAN',
				),
			86  =>
				array(
					'id'         => '3326110',
					'regency_id' => '3326',
					'name'       => 'BOJONG',
				),
			87  =>
				array(
					'id'         => '3326120',
					'regency_id' => '3326',
					'name'       => 'WONOPRINGGO',
				),
			88  =>
				array(
					'id'         => '3326130',
					'regency_id' => '3326',
					'name'       => 'KEDUNGWUNI',
				),
			89  =>
				array(
					'id'         => '3326131',
					'regency_id' => '3326',
					'name'       => 'KARANGDADAP',
				),
			90  =>
				array(
					'id'         => '3326140',
					'regency_id' => '3326',
					'name'       => 'BUARAN',
				),
			91  =>
				array(
					'id'         => '3326150',
					'regency_id' => '3326',
					'name'       => 'TIRTO',
				),
			92  =>
				array(
					'id'         => '3326160',
					'regency_id' => '3326',
					'name'       => 'WIRADESA',
				),
			93  =>
				array(
					'id'         => '3326161',
					'regency_id' => '3326',
					'name'       => 'WONOKERTO',
				),
			94  =>
				array(
					'id'         => '3327010',
					'regency_id' => '3327',
					'name'       => 'MOGA',
				),
			95  =>
				array(
					'id'         => '3327011',
					'regency_id' => '3327',
					'name'       => 'WARUNGPRING',
				),
			96  =>
				array(
					'id'         => '3327020',
					'regency_id' => '3327',
					'name'       => 'PULOSARI',
				),
			97  =>
				array(
					'id'         => '3327030',
					'regency_id' => '3327',
					'name'       => 'BELIK',
				),
			98  =>
				array(
					'id'         => '3327040',
					'regency_id' => '3327',
					'name'       => 'WATUKUMPUL',
				),
			99  =>
				array(
					'id'         => '3327050',
					'regency_id' => '3327',
					'name'       => 'BODEH',
				),
			100 =>
				array(
					'id'         => '3327060',
					'regency_id' => '3327',
					'name'       => 'BANTARBOLANG',
				),
			101 =>
				array(
					'id'         => '3327070',
					'regency_id' => '3327',
					'name'       => 'RANDUDONGKAL',
				),
			102 =>
				array(
					'id'         => '3327080',
					'regency_id' => '3327',
					'name'       => 'PEMALANG',
				),
			103 =>
				array(
					'id'         => '3327090',
					'regency_id' => '3327',
					'name'       => 'TAMAN',
				),
			104 =>
				array(
					'id'         => '3327100',
					'regency_id' => '3327',
					'name'       => 'PETARUKAN',
				),
			105 =>
				array(
					'id'         => '3327110',
					'regency_id' => '3327',
					'name'       => 'AMPELGADING',
				),
			106 =>
				array(
					'id'         => '3327120',
					'regency_id' => '3327',
					'name'       => 'COMAL',
				),
			107 =>
				array(
					'id'         => '3327130',
					'regency_id' => '3327',
					'name'       => 'ULUJAMI',
				),
			108 =>
				array(
					'id'         => '3328010',
					'regency_id' => '3328',
					'name'       => 'MARGASARI',
				),
			109 =>
				array(
					'id'         => '3328020',
					'regency_id' => '3328',
					'name'       => 'BUMIJAWA',
				),
			110 =>
				array(
					'id'         => '3328030',
					'regency_id' => '3328',
					'name'       => 'BOJONG',
				),
			111 =>
				array(
					'id'         => '3328040',
					'regency_id' => '3328',
					'name'       => 'BALAPULANG',
				),
			112 =>
				array(
					'id'         => '3328050',
					'regency_id' => '3328',
					'name'       => 'PAGERBARANG',
				),
			113 =>
				array(
					'id'         => '3328060',
					'regency_id' => '3328',
					'name'       => 'LEBAKSIU',
				),
			114 =>
				array(
					'id'         => '3328070',
					'regency_id' => '3328',
					'name'       => 'JATINEGARA',
				),
			115 =>
				array(
					'id'         => '3328080',
					'regency_id' => '3328',
					'name'       => 'KEDUNG BANTENG',
				),
			116 =>
				array(
					'id'         => '3328090',
					'regency_id' => '3328',
					'name'       => 'PANGKAH',
				),
			117 =>
				array(
					'id'         => '3328100',
					'regency_id' => '3328',
					'name'       => 'SLAWI',
				),
			118 =>
				array(
					'id'         => '3328110',
					'regency_id' => '3328',
					'name'       => 'DUKUHWARU',
				),
			119 =>
				array(
					'id'         => '3328120',
					'regency_id' => '3328',
					'name'       => 'ADIWERNA',
				),
			120 =>
				array(
					'id'         => '3328130',
					'regency_id' => '3328',
					'name'       => 'DUKUHTURI',
				),
			121 =>
				array(
					'id'         => '3328140',
					'regency_id' => '3328',
					'name'       => 'TALANG',
				),
			122 =>
				array(
					'id'         => '3328150',
					'regency_id' => '3328',
					'name'       => 'TARUB',
				),
			123 =>
				array(
					'id'         => '3328160',
					'regency_id' => '3328',
					'name'       => 'KRAMAT',
				),
			124 =>
				array(
					'id'         => '3328170',
					'regency_id' => '3328',
					'name'       => 'SURADADI',
				),
			125 =>
				array(
					'id'         => '3328180',
					'regency_id' => '3328',
					'name'       => 'WARUREJA',
				),
			126 =>
				array(
					'id'         => '3329010',
					'regency_id' => '3329',
					'name'       => 'SALEM',
				),
			127 =>
				array(
					'id'         => '3329020',
					'regency_id' => '3329',
					'name'       => 'BANTARKAWUNG',
				),
			128 =>
				array(
					'id'         => '3329030',
					'regency_id' => '3329',
					'name'       => 'BUMIAYU',
				),
			129 =>
				array(
					'id'         => '3329040',
					'regency_id' => '3329',
					'name'       => 'PAGUYANGAN',
				),
			130 =>
				array(
					'id'         => '3329050',
					'regency_id' => '3329',
					'name'       => 'SIRAMPOG',
				),
			131 =>
				array(
					'id'         => '3329060',
					'regency_id' => '3329',
					'name'       => 'TONJONG',
				),
			132 =>
				array(
					'id'         => '3329070',
					'regency_id' => '3329',
					'name'       => 'LARANGAN',
				),
			133 =>
				array(
					'id'         => '3329080',
					'regency_id' => '3329',
					'name'       => 'KETANGGUNGAN',
				),
			134 =>
				array(
					'id'         => '3329090',
					'regency_id' => '3329',
					'name'       => 'BANJARHARJO',
				),
			135 =>
				array(
					'id'         => '3329100',
					'regency_id' => '3329',
					'name'       => 'LOSARI',
				),
			136 =>
				array(
					'id'         => '3329110',
					'regency_id' => '3329',
					'name'       => 'TANJUNG',
				),
			137 =>
				array(
					'id'         => '3329120',
					'regency_id' => '3329',
					'name'       => 'KERSANA',
				),
			138 =>
				array(
					'id'         => '3329130',
					'regency_id' => '3329',
					'name'       => 'BULAKAMBA',
				),
			139 =>
				array(
					'id'         => '3329140',
					'regency_id' => '3329',
					'name'       => 'WANASARI',
				),
			140 =>
				array(
					'id'         => '3329150',
					'regency_id' => '3329',
					'name'       => 'SONGGOM',
				),
			141 =>
				array(
					'id'         => '3329160',
					'regency_id' => '3329',
					'name'       => 'JATIBARANG',
				),
			142 =>
				array(
					'id'         => '3329170',
					'regency_id' => '3329',
					'name'       => 'BREBES',
				),
			143 =>
				array(
					'id'         => '3371010',
					'regency_id' => '3371',
					'name'       => 'MAGELANG SELATAN',
				),
			144 =>
				array(
					'id'         => '3371011',
					'regency_id' => '3371',
					'name'       => 'MAGELANG TENGAH',
				),
			145 =>
				array(
					'id'         => '3371020',
					'regency_id' => '3371',
					'name'       => 'MAGELANG UTARA',
				),
			146 =>
				array(
					'id'         => '3372010',
					'regency_id' => '3372',
					'name'       => 'LAWEYAN',
				),
			147 =>
				array(
					'id'         => '3372020',
					'regency_id' => '3372',
					'name'       => 'SERENGAN',
				),
			148 =>
				array(
					'id'         => '3372030',
					'regency_id' => '3372',
					'name'       => 'PASAR KLIWON',
				),
			149 =>
				array(
					'id'         => '3372040',
					'regency_id' => '3372',
					'name'       => 'JEBRES',
				),
			150 =>
				array(
					'id'         => '3372050',
					'regency_id' => '3372',
					'name'       => 'BANJARSARI',
				),
			151 =>
				array(
					'id'         => '3373010',
					'regency_id' => '3373',
					'name'       => 'ARGOMULYO',
				),
			152 =>
				array(
					'id'         => '3373020',
					'regency_id' => '3373',
					'name'       => 'TINGKIR',
				),
			153 =>
				array(
					'id'         => '3373030',
					'regency_id' => '3373',
					'name'       => 'SIDOMUKTI',
				),
			154 =>
				array(
					'id'         => '3373040',
					'regency_id' => '3373',
					'name'       => 'SIDOREJO',
				),
			155 =>
				array(
					'id'         => '3374010',
					'regency_id' => '3374',
					'name'       => 'MIJEN',
				),
			156 =>
				array(
					'id'         => '3374020',
					'regency_id' => '3374',
					'name'       => 'GUNUNG PATI',
				),
			157 =>
				array(
					'id'         => '3374030',
					'regency_id' => '3374',
					'name'       => 'BANYUMANIK',
				),
			158 =>
				array(
					'id'         => '3374040',
					'regency_id' => '3374',
					'name'       => 'GAJAH MUNGKUR',
				),
			159 =>
				array(
					'id'         => '3374050',
					'regency_id' => '3374',
					'name'       => 'SEMARANG SELATAN',
				),
			160 =>
				array(
					'id'         => '3374060',
					'regency_id' => '3374',
					'name'       => 'CANDISARI',
				),
			161 =>
				array(
					'id'         => '3374070',
					'regency_id' => '3374',
					'name'       => 'TEMBALANG',
				),
			162 =>
				array(
					'id'         => '3374080',
					'regency_id' => '3374',
					'name'       => 'PEDURUNGAN',
				),
			163 =>
				array(
					'id'         => '3374090',
					'regency_id' => '3374',
					'name'       => 'GENUK',
				),
			164 =>
				array(
					'id'         => '3374100',
					'regency_id' => '3374',
					'name'       => 'GAYAMSARI',
				),
			165 =>
				array(
					'id'         => '3374110',
					'regency_id' => '3374',
					'name'       => 'SEMARANG TIMUR',
				),
			166 =>
				array(
					'id'         => '3374120',
					'regency_id' => '3374',
					'name'       => 'SEMARANG UTARA',
				),
			167 =>
				array(
					'id'         => '3374130',
					'regency_id' => '3374',
					'name'       => 'SEMARANG TENGAH',
				),
			168 =>
				array(
					'id'         => '3374140',
					'regency_id' => '3374',
					'name'       => 'SEMARANG BARAT',
				),
			169 =>
				array(
					'id'         => '3374150',
					'regency_id' => '3374',
					'name'       => 'TUGU',
				),
			170 =>
				array(
					'id'         => '3374160',
					'regency_id' => '3374',
					'name'       => 'NGALIYAN',
				),
			171 =>
				array(
					'id'         => '3375010',
					'regency_id' => '3375',
					'name'       => 'PEKALONGAN BARAT',
				),
			172 =>
				array(
					'id'         => '3375020',
					'regency_id' => '3375',
					'name'       => 'PEKALONGAN TIMUR',
				),
			173 =>
				array(
					'id'         => '3375030',
					'regency_id' => '3375',
					'name'       => 'PEKALONGAN SELATAN',
				),
			174 =>
				array(
					'id'         => '3375040',
					'regency_id' => '3375',
					'name'       => 'PEKALONGAN UTARA',
				),
			175 =>
				array(
					'id'         => '3376010',
					'regency_id' => '3376',
					'name'       => 'TEGAL SELATAN',
				),
			176 =>
				array(
					'id'         => '3376020',
					'regency_id' => '3376',
					'name'       => 'TEGAL TIMUR',
				),
			177 =>
				array(
					'id'         => '3376030',
					'regency_id' => '3376',
					'name'       => 'TEGAL BARAT',
				),
			178 =>
				array(
					'id'         => '3376040',
					'regency_id' => '3376',
					'name'       => 'MARGADANA',
				),
			179 =>
				array(
					'id'         => '3401010',
					'regency_id' => '3401',
					'name'       => 'TEMON',
				),
			180 =>
				array(
					'id'         => '3401020',
					'regency_id' => '3401',
					'name'       => 'WATES',
				),
			181 =>
				array(
					'id'         => '3401030',
					'regency_id' => '3401',
					'name'       => 'PANJATAN',
				),
			182 =>
				array(
					'id'         => '3401040',
					'regency_id' => '3401',
					'name'       => 'GALUR',
				),
			183 =>
				array(
					'id'         => '3401050',
					'regency_id' => '3401',
					'name'       => 'LENDAH',
				),
			184 =>
				array(
					'id'         => '3401060',
					'regency_id' => '3401',
					'name'       => 'SENTOLO',
				),
			185 =>
				array(
					'id'         => '3401070',
					'regency_id' => '3401',
					'name'       => 'PENGASIH',
				),
			186 =>
				array(
					'id'         => '3401080',
					'regency_id' => '3401',
					'name'       => 'KOKAP',
				),
			187 =>
				array(
					'id'         => '3401090',
					'regency_id' => '3401',
					'name'       => 'GIRIMULYO',
				),
			188 =>
				array(
					'id'         => '3401100',
					'regency_id' => '3401',
					'name'       => 'NANGGULAN',
				),
			189 =>
				array(
					'id'         => '3401110',
					'regency_id' => '3401',
					'name'       => 'KALIBAWANG',
				),
			190 =>
				array(
					'id'         => '3401120',
					'regency_id' => '3401',
					'name'       => 'SAMIGALUH',
				),
			191 =>
				array(
					'id'         => '3402010',
					'regency_id' => '3402',
					'name'       => 'SRANDAKAN',
				),
			192 =>
				array(
					'id'         => '3402020',
					'regency_id' => '3402',
					'name'       => 'SANDEN',
				),
			193 =>
				array(
					'id'         => '3402030',
					'regency_id' => '3402',
					'name'       => 'KRETEK',
				),
			194 =>
				array(
					'id'         => '3402040',
					'regency_id' => '3402',
					'name'       => 'PUNDONG',
				),
			195 =>
				array(
					'id'         => '3402050',
					'regency_id' => '3402',
					'name'       => 'BAMBANG LIPURO',
				),
			196 =>
				array(
					'id'         => '3402060',
					'regency_id' => '3402',
					'name'       => 'PANDAK',
				),
			197 =>
				array(
					'id'         => '3402070',
					'regency_id' => '3402',
					'name'       => 'BANTUL',
				),
			198 =>
				array(
					'id'         => '3402080',
					'regency_id' => '3402',
					'name'       => 'JETIS',
				),
			199 =>
				array(
					'id'         => '3402090',
					'regency_id' => '3402',
					'name'       => 'IMOGIRI',
				),
			200 =>
				array(
					'id'         => '3402100',
					'regency_id' => '3402',
					'name'       => 'DLINGO',
				),
			201 =>
				array(
					'id'         => '3402110',
					'regency_id' => '3402',
					'name'       => 'PLERET',
				),
			202 =>
				array(
					'id'         => '3402120',
					'regency_id' => '3402',
					'name'       => 'PIYUNGAN',
				),
			203 =>
				array(
					'id'         => '3402130',
					'regency_id' => '3402',
					'name'       => 'BANGUNTAPAN',
				),
			204 =>
				array(
					'id'         => '3402140',
					'regency_id' => '3402',
					'name'       => 'SEWON',
				),
			205 =>
				array(
					'id'         => '3402150',
					'regency_id' => '3402',
					'name'       => 'KASIHAN',
				),
			206 =>
				array(
					'id'         => '3402160',
					'regency_id' => '3402',
					'name'       => 'PAJANGAN',
				),
			207 =>
				array(
					'id'         => '3402170',
					'regency_id' => '3402',
					'name'       => 'SEDAYU',
				),
			208 =>
				array(
					'id'         => '3403010',
					'regency_id' => '3403',
					'name'       => 'PANGGANG',
				),
			209 =>
				array(
					'id'         => '3403011',
					'regency_id' => '3403',
					'name'       => 'PURWOSARI',
				),
			210 =>
				array(
					'id'         => '3403020',
					'regency_id' => '3403',
					'name'       => 'PALIYAN',
				),
			211 =>
				array(
					'id'         => '3403030',
					'regency_id' => '3403',
					'name'       => 'SAPTO SARI',
				),
			212 =>
				array(
					'id'         => '3403040',
					'regency_id' => '3403',
					'name'       => 'TEPUS',
				),
			213 =>
				array(
					'id'         => '3403041',
					'regency_id' => '3403',
					'name'       => 'TANJUNGSARI',
				),
			214 =>
				array(
					'id'         => '3403050',
					'regency_id' => '3403',
					'name'       => 'RONGKOP',
				),
			215 =>
				array(
					'id'         => '3403051',
					'regency_id' => '3403',
					'name'       => 'GIRISUBO',
				),
			216 =>
				array(
					'id'         => '3403060',
					'regency_id' => '3403',
					'name'       => 'SEMANU',
				),
			217 =>
				array(
					'id'         => '3403070',
					'regency_id' => '3403',
					'name'       => 'PONJONG',
				),
			218 =>
				array(
					'id'         => '3403080',
					'regency_id' => '3403',
					'name'       => 'KARANGMOJO',
				),
			219 =>
				array(
					'id'         => '3403090',
					'regency_id' => '3403',
					'name'       => 'WONOSARI',
				),
			220 =>
				array(
					'id'         => '3403100',
					'regency_id' => '3403',
					'name'       => 'PLAYEN',
				),
			221 =>
				array(
					'id'         => '3403110',
					'regency_id' => '3403',
					'name'       => 'PATUK',
				),
			222 =>
				array(
					'id'         => '3403120',
					'regency_id' => '3403',
					'name'       => 'GEDANG SARI',
				),
			223 =>
				array(
					'id'         => '3403130',
					'regency_id' => '3403',
					'name'       => 'NGLIPAR',
				),
			224 =>
				array(
					'id'         => '3403140',
					'regency_id' => '3403',
					'name'       => 'NGAWEN',
				),
			225 =>
				array(
					'id'         => '3403150',
					'regency_id' => '3403',
					'name'       => 'SEMIN',
				),
			226 =>
				array(
					'id'         => '3404010',
					'regency_id' => '3404',
					'name'       => 'MOYUDAN',
				),
			227 =>
				array(
					'id'         => '3404020',
					'regency_id' => '3404',
					'name'       => 'MINGGIR',
				),
			228 =>
				array(
					'id'         => '3404030',
					'regency_id' => '3404',
					'name'       => 'SEYEGAN',
				),
			229 =>
				array(
					'id'         => '3404040',
					'regency_id' => '3404',
					'name'       => 'GODEAN',
				),
			230 =>
				array(
					'id'         => '3404050',
					'regency_id' => '3404',
					'name'       => 'GAMPING',
				),
			231 =>
				array(
					'id'         => '3404060',
					'regency_id' => '3404',
					'name'       => 'MLATI',
				),
			232 =>
				array(
					'id'         => '3404070',
					'regency_id' => '3404',
					'name'       => 'DEPOK',
				),
			233 =>
				array(
					'id'         => '3404080',
					'regency_id' => '3404',
					'name'       => 'BERBAH',
				),
			234 =>
				array(
					'id'         => '3404090',
					'regency_id' => '3404',
					'name'       => 'PRAMBANAN',
				),
			235 =>
				array(
					'id'         => '3404100',
					'regency_id' => '3404',
					'name'       => 'KALASAN',
				),
			236 =>
				array(
					'id'         => '3404110',
					'regency_id' => '3404',
					'name'       => 'NGEMPLAK',
				),
			237 =>
				array(
					'id'         => '3404120',
					'regency_id' => '3404',
					'name'       => 'NGAGLIK',
				),
			238 =>
				array(
					'id'         => '3404130',
					'regency_id' => '3404',
					'name'       => 'SLEMAN',
				),
			239 =>
				array(
					'id'         => '3404140',
					'regency_id' => '3404',
					'name'       => 'TEMPEL',
				),
			240 =>
				array(
					'id'         => '3404150',
					'regency_id' => '3404',
					'name'       => 'TURI',
				),
			241 =>
				array(
					'id'         => '3404160',
					'regency_id' => '3404',
					'name'       => 'PAKEM',
				),
			242 =>
				array(
					'id'         => '3404170',
					'regency_id' => '3404',
					'name'       => 'CANGKRINGAN',
				),
			243 =>
				array(
					'id'         => '3471010',
					'regency_id' => '3471',
					'name'       => 'MANTRIJERON',
				),
			244 =>
				array(
					'id'         => '3471020',
					'regency_id' => '3471',
					'name'       => 'KRATON',
				),
			245 =>
				array(
					'id'         => '3471030',
					'regency_id' => '3471',
					'name'       => 'MERGANGSAN',
				),
			246 =>
				array(
					'id'         => '3471040',
					'regency_id' => '3471',
					'name'       => 'UMBULHARJO',
				),
			247 =>
				array(
					'id'         => '3471050',
					'regency_id' => '3471',
					'name'       => 'KOTAGEDE',
				),
			248 =>
				array(
					'id'         => '3471060',
					'regency_id' => '3471',
					'name'       => 'GONDOKUSUMAN',
				),
			249 =>
				array(
					'id'         => '3471070',
					'regency_id' => '3471',
					'name'       => 'DANUREJAN',
				),
			250 =>
				array(
					'id'         => '3471080',
					'regency_id' => '3471',
					'name'       => 'PAKUALAMAN',
				),
			251 =>
				array(
					'id'         => '3471090',
					'regency_id' => '3471',
					'name'       => 'GONDOMANAN',
				),
			252 =>
				array(
					'id'         => '3471100',
					'regency_id' => '3471',
					'name'       => 'NGAMPILAN',
				),
			253 =>
				array(
					'id'         => '3471110',
					'regency_id' => '3471',
					'name'       => 'WIROBRAJAN',
				),
			254 =>
				array(
					'id'         => '3471120',
					'regency_id' => '3471',
					'name'       => 'GEDONG TENGEN',
				),
			255 =>
				array(
					'id'         => '3471130',
					'regency_id' => '3471',
					'name'       => 'JETIS',
				),
			256 =>
				array(
					'id'         => '3471140',
					'regency_id' => '3471',
					'name'       => 'TEGALREJO',
				),
			257 =>
				array(
					'id'         => '3501010',
					'regency_id' => '3501',
					'name'       => 'DONOROJO',
				),
			258 =>
				array(
					'id'         => '3501020',
					'regency_id' => '3501',
					'name'       => 'PUNUNG',
				),
			259 =>
				array(
					'id'         => '3501030',
					'regency_id' => '3501',
					'name'       => 'PRINGKUKU',
				),
			260 =>
				array(
					'id'         => '3501040',
					'regency_id' => '3501',
					'name'       => 'PACITAN',
				),
			261 =>
				array(
					'id'         => '3501050',
					'regency_id' => '3501',
					'name'       => 'KEBONAGUNG',
				),
			262 =>
				array(
					'id'         => '3501060',
					'regency_id' => '3501',
					'name'       => 'ARJOSARI',
				),
			263 =>
				array(
					'id'         => '3501070',
					'regency_id' => '3501',
					'name'       => 'NAWANGAN',
				),
			264 =>
				array(
					'id'         => '3501080',
					'regency_id' => '3501',
					'name'       => 'BANDAR',
				),
			265 =>
				array(
					'id'         => '3501090',
					'regency_id' => '3501',
					'name'       => 'TEGALOMBO',
				),
			266 =>
				array(
					'id'         => '3501100',
					'regency_id' => '3501',
					'name'       => 'TULAKAN',
				),
			267 =>
				array(
					'id'         => '3501110',
					'regency_id' => '3501',
					'name'       => 'NGADIROJO',
				),
			268 =>
				array(
					'id'         => '3501120',
					'regency_id' => '3501',
					'name'       => 'SUDIMORO',
				),
			269 =>
				array(
					'id'         => '3502010',
					'regency_id' => '3502',
					'name'       => 'NGRAYUN',
				),
			270 =>
				array(
					'id'         => '3502020',
					'regency_id' => '3502',
					'name'       => 'SLAHUNG',
				),
			271 =>
				array(
					'id'         => '3502030',
					'regency_id' => '3502',
					'name'       => 'BUNGKAL',
				),
			272 =>
				array(
					'id'         => '3502040',
					'regency_id' => '3502',
					'name'       => 'SAMBIT',
				),
			273 =>
				array(
					'id'         => '3502050',
					'regency_id' => '3502',
					'name'       => 'SAWOO',
				),
			274 =>
				array(
					'id'         => '3502060',
					'regency_id' => '3502',
					'name'       => 'SOOKO',
				),
			275 =>
				array(
					'id'         => '3502061',
					'regency_id' => '3502',
					'name'       => 'PUDAK',
				),
			276 =>
				array(
					'id'         => '3502070',
					'regency_id' => '3502',
					'name'       => 'PULUNG',
				),
			277 =>
				array(
					'id'         => '3502080',
					'regency_id' => '3502',
					'name'       => 'MLARAK',
				),
			278 =>
				array(
					'id'         => '3502090',
					'regency_id' => '3502',
					'name'       => 'SIMAN',
				),
			279 =>
				array(
					'id'         => '3502100',
					'regency_id' => '3502',
					'name'       => 'JETIS',
				),
			280 =>
				array(
					'id'         => '3502110',
					'regency_id' => '3502',
					'name'       => 'BALONG',
				),
			281 =>
				array(
					'id'         => '3502120',
					'regency_id' => '3502',
					'name'       => 'KAUMAN',
				),
			282 =>
				array(
					'id'         => '3502130',
					'regency_id' => '3502',
					'name'       => 'JAMBON',
				),
			283 =>
				array(
					'id'         => '3502140',
					'regency_id' => '3502',
					'name'       => 'BADEGAN',
				),
			284 =>
				array(
					'id'         => '3502150',
					'regency_id' => '3502',
					'name'       => 'SAMPUNG',
				),
			285 =>
				array(
					'id'         => '3502160',
					'regency_id' => '3502',
					'name'       => 'SUKOREJO',
				),
			286 =>
				array(
					'id'         => '3502170',
					'regency_id' => '3502',
					'name'       => 'PONOROGO',
				),
			287 =>
				array(
					'id'         => '3502180',
					'regency_id' => '3502',
					'name'       => 'BABADAN',
				),
			288 =>
				array(
					'id'         => '3502190',
					'regency_id' => '3502',
					'name'       => 'JENANGAN',
				),
			289 =>
				array(
					'id'         => '3502200',
					'regency_id' => '3502',
					'name'       => 'NGEBEL',
				),
			290 =>
				array(
					'id'         => '3503010',
					'regency_id' => '3503',
					'name'       => 'PANGGUL',
				),
			291 =>
				array(
					'id'         => '3503020',
					'regency_id' => '3503',
					'name'       => 'MUNJUNGAN',
				),
			292 =>
				array(
					'id'         => '3503030',
					'regency_id' => '3503',
					'name'       => 'WATULIMO',
				),
			293 =>
				array(
					'id'         => '3503040',
					'regency_id' => '3503',
					'name'       => 'KAMPAK',
				),
			294 =>
				array(
					'id'         => '3503050',
					'regency_id' => '3503',
					'name'       => 'DONGKO',
				),
			295 =>
				array(
					'id'         => '3503060',
					'regency_id' => '3503',
					'name'       => 'PULE',
				),
			296 =>
				array(
					'id'         => '3503070',
					'regency_id' => '3503',
					'name'       => 'KARANGAN',
				),
			297 =>
				array(
					'id'         => '3503071',
					'regency_id' => '3503',
					'name'       => 'SURUH',
				),
			298 =>
				array(
					'id'         => '3503080',
					'regency_id' => '3503',
					'name'       => 'GANDUSARI',
				),
			299 =>
				array(
					'id'         => '3503090',
					'regency_id' => '3503',
					'name'       => 'DURENAN',
				),
			300 =>
				array(
					'id'         => '3503100',
					'regency_id' => '3503',
					'name'       => 'POGALAN',
				),
			301 =>
				array(
					'id'         => '3503110',
					'regency_id' => '3503',
					'name'       => 'TRENGGALEK',
				),
			302 =>
				array(
					'id'         => '3503120',
					'regency_id' => '3503',
					'name'       => 'TUGU',
				),
			303 =>
				array(
					'id'         => '3503130',
					'regency_id' => '3503',
					'name'       => 'BENDUNGAN',
				),
			304 =>
				array(
					'id'         => '3504010',
					'regency_id' => '3504',
					'name'       => 'BESUKI',
				),
			305 =>
				array(
					'id'         => '3504020',
					'regency_id' => '3504',
					'name'       => 'BANDUNG',
				),
			306 =>
				array(
					'id'         => '3504030',
					'regency_id' => '3504',
					'name'       => 'PAKEL',
				),
			307 =>
				array(
					'id'         => '3504040',
					'regency_id' => '3504',
					'name'       => 'CAMPUR DARAT',
				),
			308 =>
				array(
					'id'         => '3504050',
					'regency_id' => '3504',
					'name'       => 'TANGGUNG GUNUNG',
				),
			309 =>
				array(
					'id'         => '3504060',
					'regency_id' => '3504',
					'name'       => 'KALIDAWIR',
				),
			310 =>
				array(
					'id'         => '3504070',
					'regency_id' => '3504',
					'name'       => 'PUCANG LABAN',
				),
			311 =>
				array(
					'id'         => '3504080',
					'regency_id' => '3504',
					'name'       => 'REJOTANGAN',
				),
			312 =>
				array(
					'id'         => '3504090',
					'regency_id' => '3504',
					'name'       => 'NGUNUT',
				),
			313 =>
				array(
					'id'         => '3504100',
					'regency_id' => '3504',
					'name'       => 'SUMBERGEMPOL',
				),
			314 =>
				array(
					'id'         => '3504110',
					'regency_id' => '3504',
					'name'       => 'BOYOLANGU',
				),
			315 =>
				array(
					'id'         => '3504120',
					'regency_id' => '3504',
					'name'       => 'TULUNGAGUNG',
				),
			316 =>
				array(
					'id'         => '3504130',
					'regency_id' => '3504',
					'name'       => 'KEDUNGWARU',
				),
			317 =>
				array(
					'id'         => '3504140',
					'regency_id' => '3504',
					'name'       => 'NGANTRU',
				),
			318 =>
				array(
					'id'         => '3504150',
					'regency_id' => '3504',
					'name'       => 'KARANGREJO',
				),
			319 =>
				array(
					'id'         => '3504160',
					'regency_id' => '3504',
					'name'       => 'KAUMAN',
				),
			320 =>
				array(
					'id'         => '3504170',
					'regency_id' => '3504',
					'name'       => 'GONDANG',
				),
			321 =>
				array(
					'id'         => '3504180',
					'regency_id' => '3504',
					'name'       => 'PAGER WOJO',
				),
			322 =>
				array(
					'id'         => '3504190',
					'regency_id' => '3504',
					'name'       => 'SENDANG',
				),
			323 =>
				array(
					'id'         => '3505010',
					'regency_id' => '3505',
					'name'       => 'BAKUNG',
				),
			324 =>
				array(
					'id'         => '3505020',
					'regency_id' => '3505',
					'name'       => 'WONOTIRTO',
				),
			325 =>
				array(
					'id'         => '3505030',
					'regency_id' => '3505',
					'name'       => 'PANGGUNGREJO',
				),
			326 =>
				array(
					'id'         => '3505040',
					'regency_id' => '3505',
					'name'       => 'WATES',
				),
			327 =>
				array(
					'id'         => '3505050',
					'regency_id' => '3505',
					'name'       => 'BINANGUN',
				),
			328 =>
				array(
					'id'         => '3505060',
					'regency_id' => '3505',
					'name'       => 'SUTOJAYAN',
				),
			329 =>
				array(
					'id'         => '3505070',
					'regency_id' => '3505',
					'name'       => 'KADEMANGAN',
				),
			330 =>
				array(
					'id'         => '3505080',
					'regency_id' => '3505',
					'name'       => 'KANIGORO',
				),
			331 =>
				array(
					'id'         => '3505090',
					'regency_id' => '3505',
					'name'       => 'TALUN',
				),
			332 =>
				array(
					'id'         => '3505100',
					'regency_id' => '3505',
					'name'       => 'SELOPURO',
				),
			333 =>
				array(
					'id'         => '3505110',
					'regency_id' => '3505',
					'name'       => 'KESAMBEN',
				),
			334 =>
				array(
					'id'         => '3505120',
					'regency_id' => '3505',
					'name'       => 'SELOREJO',
				),
			335 =>
				array(
					'id'         => '3505130',
					'regency_id' => '3505',
					'name'       => 'DOKO',
				),
			336 =>
				array(
					'id'         => '3505140',
					'regency_id' => '3505',
					'name'       => 'WLINGI',
				),
			337 =>
				array(
					'id'         => '3505150',
					'regency_id' => '3505',
					'name'       => 'GANDUSARI',
				),
			338 =>
				array(
					'id'         => '3505160',
					'regency_id' => '3505',
					'name'       => 'GARUM',
				),
			339 =>
				array(
					'id'         => '3505170',
					'regency_id' => '3505',
					'name'       => 'NGLEGOK',
				),
			340 =>
				array(
					'id'         => '3505180',
					'regency_id' => '3505',
					'name'       => 'SANANKULON',
				),
			341 =>
				array(
					'id'         => '3505190',
					'regency_id' => '3505',
					'name'       => 'PONGGOK',
				),
			342 =>
				array(
					'id'         => '3505200',
					'regency_id' => '3505',
					'name'       => 'SRENGAT',
				),
			343 =>
				array(
					'id'         => '3505210',
					'regency_id' => '3505',
					'name'       => 'WONODADI',
				),
			344 =>
				array(
					'id'         => '3505220',
					'regency_id' => '3505',
					'name'       => 'UDANAWU',
				),
			345 =>
				array(
					'id'         => '3506010',
					'regency_id' => '3506',
					'name'       => 'MOJO',
				),
			346 =>
				array(
					'id'         => '3506020',
					'regency_id' => '3506',
					'name'       => 'SEMEN',
				),
			347 =>
				array(
					'id'         => '3506030',
					'regency_id' => '3506',
					'name'       => 'NGADILUWIH',
				),
			348 =>
				array(
					'id'         => '3506040',
					'regency_id' => '3506',
					'name'       => 'KRAS',
				),
			349 =>
				array(
					'id'         => '3506050',
					'regency_id' => '3506',
					'name'       => 'RINGINREJO',
				),
			350 =>
				array(
					'id'         => '3506060',
					'regency_id' => '3506',
					'name'       => 'KANDAT',
				),
			351 =>
				array(
					'id'         => '3506070',
					'regency_id' => '3506',
					'name'       => 'WATES',
				),
			352 =>
				array(
					'id'         => '3506080',
					'regency_id' => '3506',
					'name'       => 'NGANCAR',
				),
			353 =>
				array(
					'id'         => '3506090',
					'regency_id' => '3506',
					'name'       => 'PLOSOKLATEN',
				),
			354 =>
				array(
					'id'         => '3506100',
					'regency_id' => '3506',
					'name'       => 'GURAH',
				),
			355 =>
				array(
					'id'         => '3506110',
					'regency_id' => '3506',
					'name'       => 'PUNCU',
				),
			356 =>
				array(
					'id'         => '3506120',
					'regency_id' => '3506',
					'name'       => 'KEPUNG',
				),
			357 =>
				array(
					'id'         => '3506130',
					'regency_id' => '3506',
					'name'       => 'KANDANGAN',
				),
			358 =>
				array(
					'id'         => '3506140',
					'regency_id' => '3506',
					'name'       => 'PARE',
				),
			359 =>
				array(
					'id'         => '3506141',
					'regency_id' => '3506',
					'name'       => 'BADAS',
				),
			360 =>
				array(
					'id'         => '3506150',
					'regency_id' => '3506',
					'name'       => 'KUNJANG',
				),
			361 =>
				array(
					'id'         => '3506160',
					'regency_id' => '3506',
					'name'       => 'PLEMAHAN',
				),
			362 =>
				array(
					'id'         => '3506170',
					'regency_id' => '3506',
					'name'       => 'PURWOASRI',
				),
			363 =>
				array(
					'id'         => '3506180',
					'regency_id' => '3506',
					'name'       => 'PAPAR',
				),
			364 =>
				array(
					'id'         => '3506190',
					'regency_id' => '3506',
					'name'       => 'PAGU',
				),
			365 =>
				array(
					'id'         => '3506191',
					'regency_id' => '3506',
					'name'       => 'KAYEN KIDUL',
				),
			366 =>
				array(
					'id'         => '3506200',
					'regency_id' => '3506',
					'name'       => 'GAMPENGREJO',
				),
			367 =>
				array(
					'id'         => '3506201',
					'regency_id' => '3506',
					'name'       => 'NGASEM',
				),
			368 =>
				array(
					'id'         => '3506210',
					'regency_id' => '3506',
					'name'       => 'BANYAKAN',
				),
			369 =>
				array(
					'id'         => '3506220',
					'regency_id' => '3506',
					'name'       => 'GROGOL',
				),
			370 =>
				array(
					'id'         => '3506230',
					'regency_id' => '3506',
					'name'       => 'TAROKAN',
				),
			371 =>
				array(
					'id'         => '3507010',
					'regency_id' => '3507',
					'name'       => 'DONOMULYO',
				),
			372 =>
				array(
					'id'         => '3507020',
					'regency_id' => '3507',
					'name'       => 'KALIPARE',
				),
			373 =>
				array(
					'id'         => '3507030',
					'regency_id' => '3507',
					'name'       => 'PAGAK',
				),
			374 =>
				array(
					'id'         => '3507040',
					'regency_id' => '3507',
					'name'       => 'BANTUR',
				),
			375 =>
				array(
					'id'         => '3507050',
					'regency_id' => '3507',
					'name'       => 'GEDANGAN',
				),
			376 =>
				array(
					'id'         => '3507060',
					'regency_id' => '3507',
					'name'       => 'SUMBERMANJING',
				),
			377 =>
				array(
					'id'         => '3507070',
					'regency_id' => '3507',
					'name'       => 'DAMPIT',
				),
			378 =>
				array(
					'id'         => '3507080',
					'regency_id' => '3507',
					'name'       => 'TIRTO YUDO',
				),
			379 =>
				array(
					'id'         => '3507090',
					'regency_id' => '3507',
					'name'       => 'AMPELGADING',
				),
			380 =>
				array(
					'id'         => '3507100',
					'regency_id' => '3507',
					'name'       => 'PONCOKUSUMO',
				),
			381 =>
				array(
					'id'         => '3507110',
					'regency_id' => '3507',
					'name'       => 'WAJAK',
				),
			382 =>
				array(
					'id'         => '3507120',
					'regency_id' => '3507',
					'name'       => 'TUREN',
				),
			383 =>
				array(
					'id'         => '3507130',
					'regency_id' => '3507',
					'name'       => 'BULULAWANG',
				),
			384 =>
				array(
					'id'         => '3507140',
					'regency_id' => '3507',
					'name'       => 'GONDANGLEGI',
				),
			385 =>
				array(
					'id'         => '3507150',
					'regency_id' => '3507',
					'name'       => 'PAGELARAN',
				),
			386 =>
				array(
					'id'         => '3507160',
					'regency_id' => '3507',
					'name'       => 'KEPANJEN',
				),
			387 =>
				array(
					'id'         => '3507170',
					'regency_id' => '3507',
					'name'       => 'SUMBER PUCUNG',
				),
			388 =>
				array(
					'id'         => '3507180',
					'regency_id' => '3507',
					'name'       => 'KROMENGAN',
				),
			389 =>
				array(
					'id'         => '3507190',
					'regency_id' => '3507',
					'name'       => 'NGAJUM',
				),
			390 =>
				array(
					'id'         => '3507200',
					'regency_id' => '3507',
					'name'       => 'WONOSARI',
				),
			391 =>
				array(
					'id'         => '3507210',
					'regency_id' => '3507',
					'name'       => 'WAGIR',
				),
			392 =>
				array(
					'id'         => '3507220',
					'regency_id' => '3507',
					'name'       => 'PAKISAJI',
				),
			393 =>
				array(
					'id'         => '3507230',
					'regency_id' => '3507',
					'name'       => 'TAJINAN',
				),
			394 =>
				array(
					'id'         => '3507240',
					'regency_id' => '3507',
					'name'       => 'TUMPANG',
				),
			395 =>
				array(
					'id'         => '3507250',
					'regency_id' => '3507',
					'name'       => 'PAKIS',
				),
			396 =>
				array(
					'id'         => '3507260',
					'regency_id' => '3507',
					'name'       => 'JABUNG',
				),
			397 =>
				array(
					'id'         => '3507270',
					'regency_id' => '3507',
					'name'       => 'LAWANG',
				),
			398 =>
				array(
					'id'         => '3507280',
					'regency_id' => '3507',
					'name'       => 'SINGOSARI',
				),
			399 =>
				array(
					'id'         => '3507290',
					'regency_id' => '3507',
					'name'       => 'KARANGPLOSO',
				),
			400 =>
				array(
					'id'         => '3507300',
					'regency_id' => '3507',
					'name'       => 'DAU',
				),
			401 =>
				array(
					'id'         => '3507310',
					'regency_id' => '3507',
					'name'       => 'PUJON',
				),
			402 =>
				array(
					'id'         => '3507320',
					'regency_id' => '3507',
					'name'       => 'NGANTANG',
				),
			403 =>
				array(
					'id'         => '3507330',
					'regency_id' => '3507',
					'name'       => 'KASEMBON',
				),
			404 =>
				array(
					'id'         => '3508010',
					'regency_id' => '3508',
					'name'       => 'TEMPURSARI',
				),
			405 =>
				array(
					'id'         => '3508020',
					'regency_id' => '3508',
					'name'       => 'PRONOJIWO',
				),
			406 =>
				array(
					'id'         => '3508030',
					'regency_id' => '3508',
					'name'       => 'CANDIPURO',
				),
			407 =>
				array(
					'id'         => '3508040',
					'regency_id' => '3508',
					'name'       => 'PASIRIAN',
				),
			408 =>
				array(
					'id'         => '3508050',
					'regency_id' => '3508',
					'name'       => 'TEMPEH',
				),
			409 =>
				array(
					'id'         => '3508060',
					'regency_id' => '3508',
					'name'       => 'LUMAJANG',
				),
			410 =>
				array(
					'id'         => '3508061',
					'regency_id' => '3508',
					'name'       => 'SUMBERSUKO',
				),
			411 =>
				array(
					'id'         => '3508070',
					'regency_id' => '3508',
					'name'       => 'TEKUNG',
				),
			412 =>
				array(
					'id'         => '3508080',
					'regency_id' => '3508',
					'name'       => 'KUNIR',
				),
			413 =>
				array(
					'id'         => '3508090',
					'regency_id' => '3508',
					'name'       => 'YOSOWILANGUN',
				),
			414 =>
				array(
					'id'         => '3508100',
					'regency_id' => '3508',
					'name'       => 'ROWOKANGKUNG',
				),
			415 =>
				array(
					'id'         => '3508110',
					'regency_id' => '3508',
					'name'       => 'JATIROTO',
				),
			416 =>
				array(
					'id'         => '3508120',
					'regency_id' => '3508',
					'name'       => 'RANDUAGUNG',
				),
			417 =>
				array(
					'id'         => '3508130',
					'regency_id' => '3508',
					'name'       => 'SUKODONO',
				),
			418 =>
				array(
					'id'         => '3508140',
					'regency_id' => '3508',
					'name'       => 'PADANG',
				),
			419 =>
				array(
					'id'         => '3508150',
					'regency_id' => '3508',
					'name'       => 'PASRUJAMBE',
				),
			420 =>
				array(
					'id'         => '3508160',
					'regency_id' => '3508',
					'name'       => 'SENDURO',
				),
			421 =>
				array(
					'id'         => '3508170',
					'regency_id' => '3508',
					'name'       => 'GUCIALIT',
				),
			422 =>
				array(
					'id'         => '3508180',
					'regency_id' => '3508',
					'name'       => 'KEDUNGJAJANG',
				),
			423 =>
				array(
					'id'         => '3508190',
					'regency_id' => '3508',
					'name'       => 'KLAKAH',
				),
			424 =>
				array(
					'id'         => '3508200',
					'regency_id' => '3508',
					'name'       => 'RANUYOSO',
				),
			425 =>
				array(
					'id'         => '3509010',
					'regency_id' => '3509',
					'name'       => 'KENCONG',
				),
			426 =>
				array(
					'id'         => '3509020',
					'regency_id' => '3509',
					'name'       => 'GUMUK MAS',
				),
			427 =>
				array(
					'id'         => '3509030',
					'regency_id' => '3509',
					'name'       => 'PUGER',
				),
			428 =>
				array(
					'id'         => '3509040',
					'regency_id' => '3509',
					'name'       => 'WULUHAN',
				),
			429 =>
				array(
					'id'         => '3509050',
					'regency_id' => '3509',
					'name'       => 'AMBULU',
				),
			430 =>
				array(
					'id'         => '3509060',
					'regency_id' => '3509',
					'name'       => 'TEMPUREJO',
				),
			431 =>
				array(
					'id'         => '3509070',
					'regency_id' => '3509',
					'name'       => 'SILO',
				),
			432 =>
				array(
					'id'         => '3509080',
					'regency_id' => '3509',
					'name'       => 'MAYANG',
				),
			433 =>
				array(
					'id'         => '3509090',
					'regency_id' => '3509',
					'name'       => 'MUMBULSARI',
				),
			434 =>
				array(
					'id'         => '3509100',
					'regency_id' => '3509',
					'name'       => 'JENGGAWAH',
				),
			435 =>
				array(
					'id'         => '3509110',
					'regency_id' => '3509',
					'name'       => 'AJUNG',
				),
			436 =>
				array(
					'id'         => '3509120',
					'regency_id' => '3509',
					'name'       => 'RAMBIPUJI',
				),
			437 =>
				array(
					'id'         => '3509130',
					'regency_id' => '3509',
					'name'       => 'BALUNG',
				),
			438 =>
				array(
					'id'         => '3509140',
					'regency_id' => '3509',
					'name'       => 'UMBULSARI',
				),
			439 =>
				array(
					'id'         => '3509150',
					'regency_id' => '3509',
					'name'       => 'SEMBORO',
				),
			440 =>
				array(
					'id'         => '3509160',
					'regency_id' => '3509',
					'name'       => 'JOMBANG',
				),
			441 =>
				array(
					'id'         => '3509170',
					'regency_id' => '3509',
					'name'       => 'SUMBER BARU',
				),
			442 =>
				array(
					'id'         => '3509180',
					'regency_id' => '3509',
					'name'       => 'TANGGUL',
				),
			443 =>
				array(
					'id'         => '3509190',
					'regency_id' => '3509',
					'name'       => 'BANGSALSARI',
				),
			444 =>
				array(
					'id'         => '3509200',
					'regency_id' => '3509',
					'name'       => 'PANTI',
				),
			445 =>
				array(
					'id'         => '3509210',
					'regency_id' => '3509',
					'name'       => 'SUKORAMBI',
				),
			446 =>
				array(
					'id'         => '3509220',
					'regency_id' => '3509',
					'name'       => 'ARJASA',
				),
			447 =>
				array(
					'id'         => '3509230',
					'regency_id' => '3509',
					'name'       => 'PAKUSARI',
				),
			448 =>
				array(
					'id'         => '3509240',
					'regency_id' => '3509',
					'name'       => 'KALISAT',
				),
			449 =>
				array(
					'id'         => '3509250',
					'regency_id' => '3509',
					'name'       => 'LEDOKOMBO',
				),
			450 =>
				array(
					'id'         => '3509260',
					'regency_id' => '3509',
					'name'       => 'SUMBERJAMBE',
				),
			451 =>
				array(
					'id'         => '3509270',
					'regency_id' => '3509',
					'name'       => 'SUKOWONO',
				),
			452 =>
				array(
					'id'         => '3509280',
					'regency_id' => '3509',
					'name'       => 'JELBUK',
				),
			453 =>
				array(
					'id'         => '3509710',
					'regency_id' => '3509',
					'name'       => 'KALIWATES',
				),
			454 =>
				array(
					'id'         => '3509720',
					'regency_id' => '3509',
					'name'       => 'SUMBERSARI',
				),
			455 =>
				array(
					'id'         => '3509730',
					'regency_id' => '3509',
					'name'       => 'PATRANG',
				),
			456 =>
				array(
					'id'         => '3510010',
					'regency_id' => '3510',
					'name'       => 'PESANGGARAN',
				),
			457 =>
				array(
					'id'         => '3510011',
					'regency_id' => '3510',
					'name'       => 'SILIRAGUNG',
				),
			458 =>
				array(
					'id'         => '3510020',
					'regency_id' => '3510',
					'name'       => 'BANGOREJO',
				),
			459 =>
				array(
					'id'         => '3510030',
					'regency_id' => '3510',
					'name'       => 'PURWOHARJO',
				),
			460 =>
				array(
					'id'         => '3510040',
					'regency_id' => '3510',
					'name'       => 'TEGALDLIMO',
				),
			461 =>
				array(
					'id'         => '3510050',
					'regency_id' => '3510',
					'name'       => 'MUNCAR',
				),
			462 =>
				array(
					'id'         => '3510060',
					'regency_id' => '3510',
					'name'       => 'CLURING',
				),
			463 =>
				array(
					'id'         => '3510070',
					'regency_id' => '3510',
					'name'       => 'GAMBIRAN',
				),
			464 =>
				array(
					'id'         => '3510071',
					'regency_id' => '3510',
					'name'       => 'TEGALSARI',
				),
			465 =>
				array(
					'id'         => '3510080',
					'regency_id' => '3510',
					'name'       => 'GLENMORE',
				),
			466 =>
				array(
					'id'         => '3510090',
					'regency_id' => '3510',
					'name'       => 'KALIBARU',
				),
			467 =>
				array(
					'id'         => '3510100',
					'regency_id' => '3510',
					'name'       => 'GENTENG',
				),
			468 =>
				array(
					'id'         => '3510110',
					'regency_id' => '3510',
					'name'       => 'SRONO',
				),
			469 =>
				array(
					'id'         => '3510120',
					'regency_id' => '3510',
					'name'       => 'ROGOJAMPI',
				),
			470 =>
				array(
					'id'         => '3510121',
					'regency_id' => '3510',
					'name'       => 'BLIMBINGSARI',
				),
			471 =>
				array(
					'id'         => '3510130',
					'regency_id' => '3510',
					'name'       => 'KABAT',
				),
			472 =>
				array(
					'id'         => '3510140',
					'regency_id' => '3510',
					'name'       => 'SINGOJURUH',
				),
			473 =>
				array(
					'id'         => '3510150',
					'regency_id' => '3510',
					'name'       => 'SEMPU',
				),
			474 =>
				array(
					'id'         => '3510160',
					'regency_id' => '3510',
					'name'       => 'SONGGON',
				),
			475 =>
				array(
					'id'         => '3510170',
					'regency_id' => '3510',
					'name'       => 'GLAGAH',
				),
			476 =>
				array(
					'id'         => '3510171',
					'regency_id' => '3510',
					'name'       => 'LICIN',
				),
			477 =>
				array(
					'id'         => '3510180',
					'regency_id' => '3510',
					'name'       => 'BANYUWANGI',
				),
			478 =>
				array(
					'id'         => '3510190',
					'regency_id' => '3510',
					'name'       => 'GIRI',
				),
			479 =>
				array(
					'id'         => '3510200',
					'regency_id' => '3510',
					'name'       => 'KALIPURO',
				),
			480 =>
				array(
					'id'         => '3510210',
					'regency_id' => '3510',
					'name'       => 'WONGSOREJO',
				),
			481 =>
				array(
					'id'         => '3511010',
					'regency_id' => '3511',
					'name'       => 'MAESAN',
				),
			482 =>
				array(
					'id'         => '3511020',
					'regency_id' => '3511',
					'name'       => 'GRUJUGAN',
				),
			483 =>
				array(
					'id'         => '3511030',
					'regency_id' => '3511',
					'name'       => 'TAMANAN',
				),
			484 =>
				array(
					'id'         => '3511031',
					'regency_id' => '3511',
					'name'       => 'JAMBESARI DARUS SHOLAH',
				),
			485 =>
				array(
					'id'         => '3511040',
					'regency_id' => '3511',
					'name'       => 'PUJER',
				),
			486 =>
				array(
					'id'         => '3511050',
					'regency_id' => '3511',
					'name'       => 'TLOGOSARI',
				),
			487 =>
				array(
					'id'         => '3511060',
					'regency_id' => '3511',
					'name'       => 'SUKOSARI',
				),
			488 =>
				array(
					'id'         => '3511061',
					'regency_id' => '3511',
					'name'       => 'SUMBER WRINGIN',
				),
			489 =>
				array(
					'id'         => '3511070',
					'regency_id' => '3511',
					'name'       => 'TAPEN',
				),
			490 =>
				array(
					'id'         => '3511080',
					'regency_id' => '3511',
					'name'       => 'WONOSARI',
				),
			491 =>
				array(
					'id'         => '3511090',
					'regency_id' => '3511',
					'name'       => 'TENGGARANG',
				),
			492 =>
				array(
					'id'         => '3511100',
					'regency_id' => '3511',
					'name'       => 'BONDOWOSO',
				),
			493 =>
				array(
					'id'         => '3511110',
					'regency_id' => '3511',
					'name'       => 'CURAH DAMI',
				),
			494 =>
				array(
					'id'         => '3511111',
					'regency_id' => '3511',
					'name'       => 'BINAKAL',
				),
			495 =>
				array(
					'id'         => '3511120',
					'regency_id' => '3511',
					'name'       => 'PAKEM',
				),
			496 =>
				array(
					'id'         => '3511130',
					'regency_id' => '3511',
					'name'       => 'WRINGIN',
				),
			497 =>
				array(
					'id'         => '3511140',
					'regency_id' => '3511',
					'name'       => 'TEGALAMPEL',
				),
			498 =>
				array(
					'id'         => '3511141',
					'regency_id' => '3511',
					'name'       => 'TAMAN KROCOK',
				),
			499 =>
				array(
					'id'         => '3511150',
					'regency_id' => '3511',
					'name'       => 'KLABANG',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '3511151',
					'regency_id' => '3511',
					'name'       => 'IJEN',
				),
			1   =>
				array(
					'id'         => '3511152',
					'regency_id' => '3511',
					'name'       => 'BOTOLINGGO',
				),
			2   =>
				array(
					'id'         => '3511160',
					'regency_id' => '3511',
					'name'       => 'PRAJEKAN',
				),
			3   =>
				array(
					'id'         => '3511170',
					'regency_id' => '3511',
					'name'       => 'CERMEE',
				),
			4   =>
				array(
					'id'         => '3512010',
					'regency_id' => '3512',
					'name'       => 'SUMBERMALANG',
				),
			5   =>
				array(
					'id'         => '3512020',
					'regency_id' => '3512',
					'name'       => 'JATIBANTENG',
				),
			6   =>
				array(
					'id'         => '3512030',
					'regency_id' => '3512',
					'name'       => 'BANYUGLUGUR',
				),
			7   =>
				array(
					'id'         => '3512040',
					'regency_id' => '3512',
					'name'       => 'BESUKI',
				),
			8   =>
				array(
					'id'         => '3512050',
					'regency_id' => '3512',
					'name'       => 'SUBOH',
				),
			9   =>
				array(
					'id'         => '3512060',
					'regency_id' => '3512',
					'name'       => 'MLANDINGAN',
				),
			10  =>
				array(
					'id'         => '3512070',
					'regency_id' => '3512',
					'name'       => 'BUNGATAN',
				),
			11  =>
				array(
					'id'         => '3512080',
					'regency_id' => '3512',
					'name'       => 'KENDIT',
				),
			12  =>
				array(
					'id'         => '3512090',
					'regency_id' => '3512',
					'name'       => 'PANARUKAN',
				),
			13  =>
				array(
					'id'         => '3512100',
					'regency_id' => '3512',
					'name'       => 'SITUBONDO',
				),
			14  =>
				array(
					'id'         => '3512110',
					'regency_id' => '3512',
					'name'       => 'MANGARAN',
				),
			15  =>
				array(
					'id'         => '3512120',
					'regency_id' => '3512',
					'name'       => 'PANJI',
				),
			16  =>
				array(
					'id'         => '3512130',
					'regency_id' => '3512',
					'name'       => 'KAPONGAN',
				),
			17  =>
				array(
					'id'         => '3512140',
					'regency_id' => '3512',
					'name'       => 'ARJASA',
				),
			18  =>
				array(
					'id'         => '3512150',
					'regency_id' => '3512',
					'name'       => 'JANGKAR',
				),
			19  =>
				array(
					'id'         => '3512160',
					'regency_id' => '3512',
					'name'       => 'ASEMBAGUS',
				),
			20  =>
				array(
					'id'         => '3512170',
					'regency_id' => '3512',
					'name'       => 'BANYUPUTIH',
				),
			21  =>
				array(
					'id'         => '3513010',
					'regency_id' => '3513',
					'name'       => 'SUKAPURA',
				),
			22  =>
				array(
					'id'         => '3513020',
					'regency_id' => '3513',
					'name'       => 'SUMBER',
				),
			23  =>
				array(
					'id'         => '3513030',
					'regency_id' => '3513',
					'name'       => 'KURIPAN',
				),
			24  =>
				array(
					'id'         => '3513040',
					'regency_id' => '3513',
					'name'       => 'BANTARAN',
				),
			25  =>
				array(
					'id'         => '3513050',
					'regency_id' => '3513',
					'name'       => 'LECES',
				),
			26  =>
				array(
					'id'         => '3513060',
					'regency_id' => '3513',
					'name'       => 'TEGALSIWALAN',
				),
			27  =>
				array(
					'id'         => '3513070',
					'regency_id' => '3513',
					'name'       => 'BANYUANYAR',
				),
			28  =>
				array(
					'id'         => '3513080',
					'regency_id' => '3513',
					'name'       => 'TIRIS',
				),
			29  =>
				array(
					'id'         => '3513090',
					'regency_id' => '3513',
					'name'       => 'KRUCIL',
				),
			30  =>
				array(
					'id'         => '3513100',
					'regency_id' => '3513',
					'name'       => 'GADING',
				),
			31  =>
				array(
					'id'         => '3513110',
					'regency_id' => '3513',
					'name'       => 'PAKUNIRAN',
				),
			32  =>
				array(
					'id'         => '3513120',
					'regency_id' => '3513',
					'name'       => 'KOTAANYAR',
				),
			33  =>
				array(
					'id'         => '3513130',
					'regency_id' => '3513',
					'name'       => 'PAITON',
				),
			34  =>
				array(
					'id'         => '3513140',
					'regency_id' => '3513',
					'name'       => 'BESUK',
				),
			35  =>
				array(
					'id'         => '3513150',
					'regency_id' => '3513',
					'name'       => 'KRAKSAAN',
				),
			36  =>
				array(
					'id'         => '3513160',
					'regency_id' => '3513',
					'name'       => 'KREJENGAN',
				),
			37  =>
				array(
					'id'         => '3513170',
					'regency_id' => '3513',
					'name'       => 'PAJARAKAN',
				),
			38  =>
				array(
					'id'         => '3513180',
					'regency_id' => '3513',
					'name'       => 'MARON',
				),
			39  =>
				array(
					'id'         => '3513190',
					'regency_id' => '3513',
					'name'       => 'GENDING',
				),
			40  =>
				array(
					'id'         => '3513200',
					'regency_id' => '3513',
					'name'       => 'DRINGU',
				),
			41  =>
				array(
					'id'         => '3513210',
					'regency_id' => '3513',
					'name'       => 'WONOMERTO',
				),
			42  =>
				array(
					'id'         => '3513220',
					'regency_id' => '3513',
					'name'       => 'LUMBANG',
				),
			43  =>
				array(
					'id'         => '3513230',
					'regency_id' => '3513',
					'name'       => 'TONGAS',
				),
			44  =>
				array(
					'id'         => '3513240',
					'regency_id' => '3513',
					'name'       => 'SUMBERASIH',
				),
			45  =>
				array(
					'id'         => '3514010',
					'regency_id' => '3514',
					'name'       => 'PURWODADI',
				),
			46  =>
				array(
					'id'         => '3514020',
					'regency_id' => '3514',
					'name'       => 'TUTUR',
				),
			47  =>
				array(
					'id'         => '3514030',
					'regency_id' => '3514',
					'name'       => 'PUSPO',
				),
			48  =>
				array(
					'id'         => '3514040',
					'regency_id' => '3514',
					'name'       => 'TOSARI',
				),
			49  =>
				array(
					'id'         => '3514050',
					'regency_id' => '3514',
					'name'       => 'LUMBANG',
				),
			50  =>
				array(
					'id'         => '3514060',
					'regency_id' => '3514',
					'name'       => 'PASREPAN',
				),
			51  =>
				array(
					'id'         => '3514070',
					'regency_id' => '3514',
					'name'       => 'KEJAYAN',
				),
			52  =>
				array(
					'id'         => '3514080',
					'regency_id' => '3514',
					'name'       => 'WONOREJO',
				),
			53  =>
				array(
					'id'         => '3514090',
					'regency_id' => '3514',
					'name'       => 'PURWOSARI',
				),
			54  =>
				array(
					'id'         => '3514100',
					'regency_id' => '3514',
					'name'       => 'PRIGEN',
				),
			55  =>
				array(
					'id'         => '3514110',
					'regency_id' => '3514',
					'name'       => 'SUKOREJO',
				),
			56  =>
				array(
					'id'         => '3514120',
					'regency_id' => '3514',
					'name'       => 'PANDAAN',
				),
			57  =>
				array(
					'id'         => '3514130',
					'regency_id' => '3514',
					'name'       => 'GEMPOL',
				),
			58  =>
				array(
					'id'         => '3514140',
					'regency_id' => '3514',
					'name'       => 'BEJI',
				),
			59  =>
				array(
					'id'         => '3514150',
					'regency_id' => '3514',
					'name'       => 'BANGIL',
				),
			60  =>
				array(
					'id'         => '3514160',
					'regency_id' => '3514',
					'name'       => 'REMBANG',
				),
			61  =>
				array(
					'id'         => '3514170',
					'regency_id' => '3514',
					'name'       => 'KRATON',
				),
			62  =>
				array(
					'id'         => '3514180',
					'regency_id' => '3514',
					'name'       => 'POHJENTREK',
				),
			63  =>
				array(
					'id'         => '3514190',
					'regency_id' => '3514',
					'name'       => 'GONDANG WETAN',
				),
			64  =>
				array(
					'id'         => '3514200',
					'regency_id' => '3514',
					'name'       => 'REJOSO',
				),
			65  =>
				array(
					'id'         => '3514210',
					'regency_id' => '3514',
					'name'       => 'WINONGAN',
				),
			66  =>
				array(
					'id'         => '3514220',
					'regency_id' => '3514',
					'name'       => 'GRATI',
				),
			67  =>
				array(
					'id'         => '3514230',
					'regency_id' => '3514',
					'name'       => 'LEKOK',
				),
			68  =>
				array(
					'id'         => '3514240',
					'regency_id' => '3514',
					'name'       => 'NGULING',
				),
			69  =>
				array(
					'id'         => '3515010',
					'regency_id' => '3515',
					'name'       => 'TARIK',
				),
			70  =>
				array(
					'id'         => '3515020',
					'regency_id' => '3515',
					'name'       => 'PRAMBON',
				),
			71  =>
				array(
					'id'         => '3515030',
					'regency_id' => '3515',
					'name'       => 'KREMBUNG',
				),
			72  =>
				array(
					'id'         => '3515040',
					'regency_id' => '3515',
					'name'       => 'PORONG',
				),
			73  =>
				array(
					'id'         => '3515050',
					'regency_id' => '3515',
					'name'       => 'JABON',
				),
			74  =>
				array(
					'id'         => '3515060',
					'regency_id' => '3515',
					'name'       => 'TANGGULANGIN',
				),
			75  =>
				array(
					'id'         => '3515070',
					'regency_id' => '3515',
					'name'       => 'CANDI',
				),
			76  =>
				array(
					'id'         => '3515080',
					'regency_id' => '3515',
					'name'       => 'TULANGAN',
				),
			77  =>
				array(
					'id'         => '3515090',
					'regency_id' => '3515',
					'name'       => 'WONOAYU',
				),
			78  =>
				array(
					'id'         => '3515100',
					'regency_id' => '3515',
					'name'       => 'SUKODONO',
				),
			79  =>
				array(
					'id'         => '3515110',
					'regency_id' => '3515',
					'name'       => 'SIDOARJO',
				),
			80  =>
				array(
					'id'         => '3515120',
					'regency_id' => '3515',
					'name'       => 'BUDURAN',
				),
			81  =>
				array(
					'id'         => '3515130',
					'regency_id' => '3515',
					'name'       => 'SEDATI',
				),
			82  =>
				array(
					'id'         => '3515140',
					'regency_id' => '3515',
					'name'       => 'WARU',
				),
			83  =>
				array(
					'id'         => '3515150',
					'regency_id' => '3515',
					'name'       => 'GEDANGAN',
				),
			84  =>
				array(
					'id'         => '3515160',
					'regency_id' => '3515',
					'name'       => 'TAMAN',
				),
			85  =>
				array(
					'id'         => '3515170',
					'regency_id' => '3515',
					'name'       => 'KRIAN',
				),
			86  =>
				array(
					'id'         => '3515180',
					'regency_id' => '3515',
					'name'       => 'BALONG BENDO',
				),
			87  =>
				array(
					'id'         => '3516010',
					'regency_id' => '3516',
					'name'       => 'JATIREJO',
				),
			88  =>
				array(
					'id'         => '3516020',
					'regency_id' => '3516',
					'name'       => 'GONDANG',
				),
			89  =>
				array(
					'id'         => '3516030',
					'regency_id' => '3516',
					'name'       => 'PACET',
				),
			90  =>
				array(
					'id'         => '3516040',
					'regency_id' => '3516',
					'name'       => 'TRAWAS',
				),
			91  =>
				array(
					'id'         => '3516050',
					'regency_id' => '3516',
					'name'       => 'NGORO',
				),
			92  =>
				array(
					'id'         => '3516060',
					'regency_id' => '3516',
					'name'       => 'PUNGGING',
				),
			93  =>
				array(
					'id'         => '3516070',
					'regency_id' => '3516',
					'name'       => 'KUTOREJO',
				),
			94  =>
				array(
					'id'         => '3516080',
					'regency_id' => '3516',
					'name'       => 'MOJOSARI',
				),
			95  =>
				array(
					'id'         => '3516090',
					'regency_id' => '3516',
					'name'       => 'BANGSAL',
				),
			96  =>
				array(
					'id'         => '3516091',
					'regency_id' => '3516',
					'name'       => 'MOJOANYAR',
				),
			97  =>
				array(
					'id'         => '3516100',
					'regency_id' => '3516',
					'name'       => 'DLANGGU',
				),
			98  =>
				array(
					'id'         => '3516110',
					'regency_id' => '3516',
					'name'       => 'PURI',
				),
			99  =>
				array(
					'id'         => '3516120',
					'regency_id' => '3516',
					'name'       => 'TROWULAN',
				),
			100 =>
				array(
					'id'         => '3516130',
					'regency_id' => '3516',
					'name'       => 'SOOKO',
				),
			101 =>
				array(
					'id'         => '3516140',
					'regency_id' => '3516',
					'name'       => 'GEDEK',
				),
			102 =>
				array(
					'id'         => '3516150',
					'regency_id' => '3516',
					'name'       => 'KEMLAGI',
				),
			103 =>
				array(
					'id'         => '3516160',
					'regency_id' => '3516',
					'name'       => 'JETIS',
				),
			104 =>
				array(
					'id'         => '3516170',
					'regency_id' => '3516',
					'name'       => 'DAWAR BLANDONG',
				),
			105 =>
				array(
					'id'         => '3517010',
					'regency_id' => '3517',
					'name'       => 'BANDAR KEDUNG MULYO',
				),
			106 =>
				array(
					'id'         => '3517020',
					'regency_id' => '3517',
					'name'       => 'PERAK',
				),
			107 =>
				array(
					'id'         => '3517030',
					'regency_id' => '3517',
					'name'       => 'GUDO',
				),
			108 =>
				array(
					'id'         => '3517040',
					'regency_id' => '3517',
					'name'       => 'DIWEK',
				),
			109 =>
				array(
					'id'         => '3517050',
					'regency_id' => '3517',
					'name'       => 'NGORO',
				),
			110 =>
				array(
					'id'         => '3517060',
					'regency_id' => '3517',
					'name'       => 'MOJOWARNO',
				),
			111 =>
				array(
					'id'         => '3517070',
					'regency_id' => '3517',
					'name'       => 'BARENG',
				),
			112 =>
				array(
					'id'         => '3517080',
					'regency_id' => '3517',
					'name'       => 'WONOSALAM',
				),
			113 =>
				array(
					'id'         => '3517090',
					'regency_id' => '3517',
					'name'       => 'MOJOAGUNG',
				),
			114 =>
				array(
					'id'         => '3517100',
					'regency_id' => '3517',
					'name'       => 'SUMOBITO',
				),
			115 =>
				array(
					'id'         => '3517110',
					'regency_id' => '3517',
					'name'       => 'JOGO ROTO',
				),
			116 =>
				array(
					'id'         => '3517120',
					'regency_id' => '3517',
					'name'       => 'PETERONGAN',
				),
			117 =>
				array(
					'id'         => '3517130',
					'regency_id' => '3517',
					'name'       => 'JOMBANG',
				),
			118 =>
				array(
					'id'         => '3517140',
					'regency_id' => '3517',
					'name'       => 'MEGALUH',
				),
			119 =>
				array(
					'id'         => '3517150',
					'regency_id' => '3517',
					'name'       => 'TEMBELANG',
				),
			120 =>
				array(
					'id'         => '3517160',
					'regency_id' => '3517',
					'name'       => 'KESAMBEN',
				),
			121 =>
				array(
					'id'         => '3517170',
					'regency_id' => '3517',
					'name'       => 'KUDU',
				),
			122 =>
				array(
					'id'         => '3517171',
					'regency_id' => '3517',
					'name'       => 'NGUSIKAN',
				),
			123 =>
				array(
					'id'         => '3517180',
					'regency_id' => '3517',
					'name'       => 'PLOSO',
				),
			124 =>
				array(
					'id'         => '3517190',
					'regency_id' => '3517',
					'name'       => 'KABUH',
				),
			125 =>
				array(
					'id'         => '3517200',
					'regency_id' => '3517',
					'name'       => 'PLANDAAN',
				),
			126 =>
				array(
					'id'         => '3518010',
					'regency_id' => '3518',
					'name'       => 'SAWAHAN',
				),
			127 =>
				array(
					'id'         => '3518020',
					'regency_id' => '3518',
					'name'       => 'NGETOS',
				),
			128 =>
				array(
					'id'         => '3518030',
					'regency_id' => '3518',
					'name'       => 'BERBEK',
				),
			129 =>
				array(
					'id'         => '3518040',
					'regency_id' => '3518',
					'name'       => 'LOCERET',
				),
			130 =>
				array(
					'id'         => '3518050',
					'regency_id' => '3518',
					'name'       => 'PACE',
				),
			131 =>
				array(
					'id'         => '3518060',
					'regency_id' => '3518',
					'name'       => 'TANJUNGANOM',
				),
			132 =>
				array(
					'id'         => '3518070',
					'regency_id' => '3518',
					'name'       => 'PRAMBON',
				),
			133 =>
				array(
					'id'         => '3518080',
					'regency_id' => '3518',
					'name'       => 'NGRONGGOT',
				),
			134 =>
				array(
					'id'         => '3518090',
					'regency_id' => '3518',
					'name'       => 'KERTOSONO',
				),
			135 =>
				array(
					'id'         => '3518100',
					'regency_id' => '3518',
					'name'       => 'PATIANROWO',
				),
			136 =>
				array(
					'id'         => '3518110',
					'regency_id' => '3518',
					'name'       => 'BARON',
				),
			137 =>
				array(
					'id'         => '3518120',
					'regency_id' => '3518',
					'name'       => 'GONDANG',
				),
			138 =>
				array(
					'id'         => '3518130',
					'regency_id' => '3518',
					'name'       => 'SUKOMORO',
				),
			139 =>
				array(
					'id'         => '3518140',
					'regency_id' => '3518',
					'name'       => 'NGANJUK',
				),
			140 =>
				array(
					'id'         => '3518150',
					'regency_id' => '3518',
					'name'       => 'BAGOR',
				),
			141 =>
				array(
					'id'         => '3518160',
					'regency_id' => '3518',
					'name'       => 'WILANGAN',
				),
			142 =>
				array(
					'id'         => '3518170',
					'regency_id' => '3518',
					'name'       => 'REJOSO',
				),
			143 =>
				array(
					'id'         => '3518180',
					'regency_id' => '3518',
					'name'       => 'NGLUYU',
				),
			144 =>
				array(
					'id'         => '3518190',
					'regency_id' => '3518',
					'name'       => 'LENGKONG',
				),
			145 =>
				array(
					'id'         => '3518200',
					'regency_id' => '3518',
					'name'       => 'JATIKALEN',
				),
			146 =>
				array(
					'id'         => '3519010',
					'regency_id' => '3519',
					'name'       => 'KEBONSARI',
				),
			147 =>
				array(
					'id'         => '3519020',
					'regency_id' => '3519',
					'name'       => 'GEGER',
				),
			148 =>
				array(
					'id'         => '3519030',
					'regency_id' => '3519',
					'name'       => 'DOLOPO',
				),
			149 =>
				array(
					'id'         => '3519040',
					'regency_id' => '3519',
					'name'       => 'DAGANGAN',
				),
			150 =>
				array(
					'id'         => '3519050',
					'regency_id' => '3519',
					'name'       => 'WUNGU',
				),
			151 =>
				array(
					'id'         => '3519060',
					'regency_id' => '3519',
					'name'       => 'KARE',
				),
			152 =>
				array(
					'id'         => '3519070',
					'regency_id' => '3519',
					'name'       => 'GEMARANG',
				),
			153 =>
				array(
					'id'         => '3519080',
					'regency_id' => '3519',
					'name'       => 'SARADAN',
				),
			154 =>
				array(
					'id'         => '3519090',
					'regency_id' => '3519',
					'name'       => 'PILANGKENCENG',
				),
			155 =>
				array(
					'id'         => '3519100',
					'regency_id' => '3519',
					'name'       => 'MEJAYAN',
				),
			156 =>
				array(
					'id'         => '3519110',
					'regency_id' => '3519',
					'name'       => 'WONOASRI',
				),
			157 =>
				array(
					'id'         => '3519120',
					'regency_id' => '3519',
					'name'       => 'BALEREJO',
				),
			158 =>
				array(
					'id'         => '3519130',
					'regency_id' => '3519',
					'name'       => 'MADIUN',
				),
			159 =>
				array(
					'id'         => '3519140',
					'regency_id' => '3519',
					'name'       => 'SAWAHAN',
				),
			160 =>
				array(
					'id'         => '3519150',
					'regency_id' => '3519',
					'name'       => 'JIWAN',
				),
			161 =>
				array(
					'id'         => '3520010',
					'regency_id' => '3520',
					'name'       => 'PONCOL',
				),
			162 =>
				array(
					'id'         => '3520020',
					'regency_id' => '3520',
					'name'       => 'PARANG',
				),
			163 =>
				array(
					'id'         => '3520030',
					'regency_id' => '3520',
					'name'       => 'LEMBEYAN',
				),
			164 =>
				array(
					'id'         => '3520040',
					'regency_id' => '3520',
					'name'       => 'TAKERAN',
				),
			165 =>
				array(
					'id'         => '3520041',
					'regency_id' => '3520',
					'name'       => 'NGUNTORONADI',
				),
			166 =>
				array(
					'id'         => '3520050',
					'regency_id' => '3520',
					'name'       => 'KAWEDANAN',
				),
			167 =>
				array(
					'id'         => '3520060',
					'regency_id' => '3520',
					'name'       => 'MAGETAN',
				),
			168 =>
				array(
					'id'         => '3520061',
					'regency_id' => '3520',
					'name'       => 'NGARIBOYO',
				),
			169 =>
				array(
					'id'         => '3520070',
					'regency_id' => '3520',
					'name'       => 'PLAOSAN',
				),
			170 =>
				array(
					'id'         => '3520071',
					'regency_id' => '3520',
					'name'       => 'SIDOREJO',
				),
			171 =>
				array(
					'id'         => '3520080',
					'regency_id' => '3520',
					'name'       => 'PANEKAN',
				),
			172 =>
				array(
					'id'         => '3520090',
					'regency_id' => '3520',
					'name'       => 'SUKOMORO',
				),
			173 =>
				array(
					'id'         => '3520100',
					'regency_id' => '3520',
					'name'       => 'BENDO',
				),
			174 =>
				array(
					'id'         => '3520110',
					'regency_id' => '3520',
					'name'       => 'MAOSPATI',
				),
			175 =>
				array(
					'id'         => '3520120',
					'regency_id' => '3520',
					'name'       => 'KARANGREJO',
				),
			176 =>
				array(
					'id'         => '3520121',
					'regency_id' => '3520',
					'name'       => 'KARAS',
				),
			177 =>
				array(
					'id'         => '3520130',
					'regency_id' => '3520',
					'name'       => 'BARAT',
				),
			178 =>
				array(
					'id'         => '3520131',
					'regency_id' => '3520',
					'name'       => 'KARTOHARJO',
				),
			179 =>
				array(
					'id'         => '3521010',
					'regency_id' => '3521',
					'name'       => 'SINE',
				),
			180 =>
				array(
					'id'         => '3521020',
					'regency_id' => '3521',
					'name'       => 'NGRAMBE',
				),
			181 =>
				array(
					'id'         => '3521030',
					'regency_id' => '3521',
					'name'       => 'JOGOROGO',
				),
			182 =>
				array(
					'id'         => '3521040',
					'regency_id' => '3521',
					'name'       => 'KENDAL',
				),
			183 =>
				array(
					'id'         => '3521050',
					'regency_id' => '3521',
					'name'       => 'GENENG',
				),
			184 =>
				array(
					'id'         => '3521051',
					'regency_id' => '3521',
					'name'       => 'GERIH',
				),
			185 =>
				array(
					'id'         => '3521060',
					'regency_id' => '3521',
					'name'       => 'KWADUNGAN',
				),
			186 =>
				array(
					'id'         => '3521070',
					'regency_id' => '3521',
					'name'       => 'PANGKUR',
				),
			187 =>
				array(
					'id'         => '3521080',
					'regency_id' => '3521',
					'name'       => 'KARANGJATI',
				),
			188 =>
				array(
					'id'         => '3521090',
					'regency_id' => '3521',
					'name'       => 'BRINGIN',
				),
			189 =>
				array(
					'id'         => '3521100',
					'regency_id' => '3521',
					'name'       => 'PADAS',
				),
			190 =>
				array(
					'id'         => '3521101',
					'regency_id' => '3521',
					'name'       => 'KASREMAN',
				),
			191 =>
				array(
					'id'         => '3521110',
					'regency_id' => '3521',
					'name'       => 'NGAWI',
				),
			192 =>
				array(
					'id'         => '3521120',
					'regency_id' => '3521',
					'name'       => 'PARON',
				),
			193 =>
				array(
					'id'         => '3521130',
					'regency_id' => '3521',
					'name'       => 'KEDUNGGALAR',
				),
			194 =>
				array(
					'id'         => '3521140',
					'regency_id' => '3521',
					'name'       => 'PITU',
				),
			195 =>
				array(
					'id'         => '3521150',
					'regency_id' => '3521',
					'name'       => 'WIDODAREN',
				),
			196 =>
				array(
					'id'         => '3521160',
					'regency_id' => '3521',
					'name'       => 'MANTINGAN',
				),
			197 =>
				array(
					'id'         => '3521170',
					'regency_id' => '3521',
					'name'       => 'KARANGANYAR',
				),
			198 =>
				array(
					'id'         => '3522010',
					'regency_id' => '3522',
					'name'       => 'MARGOMULYO',
				),
			199 =>
				array(
					'id'         => '3522020',
					'regency_id' => '3522',
					'name'       => 'NGRAHO',
				),
			200 =>
				array(
					'id'         => '3522030',
					'regency_id' => '3522',
					'name'       => 'TAMBAKREJO',
				),
			201 =>
				array(
					'id'         => '3522040',
					'regency_id' => '3522',
					'name'       => 'NGAMBON',
				),
			202 =>
				array(
					'id'         => '3522041',
					'regency_id' => '3522',
					'name'       => 'SEKAR',
				),
			203 =>
				array(
					'id'         => '3522050',
					'regency_id' => '3522',
					'name'       => 'BUBULAN',
				),
			204 =>
				array(
					'id'         => '3522051',
					'regency_id' => '3522',
					'name'       => 'GONDANG',
				),
			205 =>
				array(
					'id'         => '3522060',
					'regency_id' => '3522',
					'name'       => 'TEMAYANG',
				),
			206 =>
				array(
					'id'         => '3522070',
					'regency_id' => '3522',
					'name'       => 'SUGIHWARAS',
				),
			207 =>
				array(
					'id'         => '3522080',
					'regency_id' => '3522',
					'name'       => 'KEDUNGADEM',
				),
			208 =>
				array(
					'id'         => '3522090',
					'regency_id' => '3522',
					'name'       => 'KEPOH BARU',
				),
			209 =>
				array(
					'id'         => '3522100',
					'regency_id' => '3522',
					'name'       => 'BAURENO',
				),
			210 =>
				array(
					'id'         => '3522110',
					'regency_id' => '3522',
					'name'       => 'KANOR',
				),
			211 =>
				array(
					'id'         => '3522120',
					'regency_id' => '3522',
					'name'       => 'SUMBEREJO',
				),
			212 =>
				array(
					'id'         => '3522130',
					'regency_id' => '3522',
					'name'       => 'BALEN',
				),
			213 =>
				array(
					'id'         => '3522140',
					'regency_id' => '3522',
					'name'       => 'SUKOSEWU',
				),
			214 =>
				array(
					'id'         => '3522150',
					'regency_id' => '3522',
					'name'       => 'KAPAS',
				),
			215 =>
				array(
					'id'         => '3522160',
					'regency_id' => '3522',
					'name'       => 'BOJONEGORO',
				),
			216 =>
				array(
					'id'         => '3522170',
					'regency_id' => '3522',
					'name'       => 'TRUCUK',
				),
			217 =>
				array(
					'id'         => '3522180',
					'regency_id' => '3522',
					'name'       => 'DANDER',
				),
			218 =>
				array(
					'id'         => '3522190',
					'regency_id' => '3522',
					'name'       => 'NGASEM',
				),
			219 =>
				array(
					'id'         => '3522191',
					'regency_id' => '3522',
					'name'       => 'GAYAM',
				),
			220 =>
				array(
					'id'         => '3522200',
					'regency_id' => '3522',
					'name'       => 'KALITIDU',
				),
			221 =>
				array(
					'id'         => '3522210',
					'regency_id' => '3522',
					'name'       => 'MALO',
				),
			222 =>
				array(
					'id'         => '3522220',
					'regency_id' => '3522',
					'name'       => 'PURWOSARI',
				),
			223 =>
				array(
					'id'         => '3522230',
					'regency_id' => '3522',
					'name'       => 'PADANGAN',
				),
			224 =>
				array(
					'id'         => '3522240',
					'regency_id' => '3522',
					'name'       => 'KASIMAN',
				),
			225 =>
				array(
					'id'         => '3522241',
					'regency_id' => '3522',
					'name'       => 'KEDEWAN',
				),
			226 =>
				array(
					'id'         => '3523010',
					'regency_id' => '3523',
					'name'       => 'KENDURUAN',
				),
			227 =>
				array(
					'id'         => '3523020',
					'regency_id' => '3523',
					'name'       => 'BANGILAN',
				),
			228 =>
				array(
					'id'         => '3523030',
					'regency_id' => '3523',
					'name'       => 'SENORI',
				),
			229 =>
				array(
					'id'         => '3523040',
					'regency_id' => '3523',
					'name'       => 'SINGGAHAN',
				),
			230 =>
				array(
					'id'         => '3523050',
					'regency_id' => '3523',
					'name'       => 'MONTONG',
				),
			231 =>
				array(
					'id'         => '3523060',
					'regency_id' => '3523',
					'name'       => 'PARENGAN',
				),
			232 =>
				array(
					'id'         => '3523070',
					'regency_id' => '3523',
					'name'       => 'SOKO',
				),
			233 =>
				array(
					'id'         => '3523080',
					'regency_id' => '3523',
					'name'       => 'RENGEL',
				),
			234 =>
				array(
					'id'         => '3523081',
					'regency_id' => '3523',
					'name'       => 'GRABAGAN',
				),
			235 =>
				array(
					'id'         => '3523090',
					'regency_id' => '3523',
					'name'       => 'PLUMPANG',
				),
			236 =>
				array(
					'id'         => '3523100',
					'regency_id' => '3523',
					'name'       => 'WIDANG',
				),
			237 =>
				array(
					'id'         => '3523110',
					'regency_id' => '3523',
					'name'       => 'PALANG',
				),
			238 =>
				array(
					'id'         => '3523120',
					'regency_id' => '3523',
					'name'       => 'SEMANDING',
				),
			239 =>
				array(
					'id'         => '3523130',
					'regency_id' => '3523',
					'name'       => 'TUBAN',
				),
			240 =>
				array(
					'id'         => '3523140',
					'regency_id' => '3523',
					'name'       => 'JENU',
				),
			241 =>
				array(
					'id'         => '3523150',
					'regency_id' => '3523',
					'name'       => 'MERAKURAK',
				),
			242 =>
				array(
					'id'         => '3523160',
					'regency_id' => '3523',
					'name'       => 'KEREK',
				),
			243 =>
				array(
					'id'         => '3523170',
					'regency_id' => '3523',
					'name'       => 'TAMBAKBOYO',
				),
			244 =>
				array(
					'id'         => '3523180',
					'regency_id' => '3523',
					'name'       => 'JATIROGO',
				),
			245 =>
				array(
					'id'         => '3523190',
					'regency_id' => '3523',
					'name'       => 'BANCAR',
				),
			246 =>
				array(
					'id'         => '3524010',
					'regency_id' => '3524',
					'name'       => 'SUKORAME',
				),
			247 =>
				array(
					'id'         => '3524020',
					'regency_id' => '3524',
					'name'       => 'BLULUK',
				),
			248 =>
				array(
					'id'         => '3524030',
					'regency_id' => '3524',
					'name'       => 'NGIMBANG',
				),
			249 =>
				array(
					'id'         => '3524040',
					'regency_id' => '3524',
					'name'       => 'SAMBENG',
				),
			250 =>
				array(
					'id'         => '3524050',
					'regency_id' => '3524',
					'name'       => 'MANTUP',
				),
			251 =>
				array(
					'id'         => '3524060',
					'regency_id' => '3524',
					'name'       => 'KEMBANGBAHU',
				),
			252 =>
				array(
					'id'         => '3524070',
					'regency_id' => '3524',
					'name'       => 'SUGIO',
				),
			253 =>
				array(
					'id'         => '3524080',
					'regency_id' => '3524',
					'name'       => 'KEDUNGPRING',
				),
			254 =>
				array(
					'id'         => '3524090',
					'regency_id' => '3524',
					'name'       => 'MODO',
				),
			255 =>
				array(
					'id'         => '3524100',
					'regency_id' => '3524',
					'name'       => 'BABAT',
				),
			256 =>
				array(
					'id'         => '3524110',
					'regency_id' => '3524',
					'name'       => 'PUCUK',
				),
			257 =>
				array(
					'id'         => '3524120',
					'regency_id' => '3524',
					'name'       => 'SUKODADI',
				),
			258 =>
				array(
					'id'         => '3524130',
					'regency_id' => '3524',
					'name'       => 'LAMONGAN',
				),
			259 =>
				array(
					'id'         => '3524140',
					'regency_id' => '3524',
					'name'       => 'TIKUNG',
				),
			260 =>
				array(
					'id'         => '3524141',
					'regency_id' => '3524',
					'name'       => 'SARIREJO',
				),
			261 =>
				array(
					'id'         => '3524150',
					'regency_id' => '3524',
					'name'       => 'DEKET',
				),
			262 =>
				array(
					'id'         => '3524160',
					'regency_id' => '3524',
					'name'       => 'GLAGAH',
				),
			263 =>
				array(
					'id'         => '3524170',
					'regency_id' => '3524',
					'name'       => 'KARANGBINANGUN',
				),
			264 =>
				array(
					'id'         => '3524180',
					'regency_id' => '3524',
					'name'       => 'TURI',
				),
			265 =>
				array(
					'id'         => '3524190',
					'regency_id' => '3524',
					'name'       => 'KALITENGAH',
				),
			266 =>
				array(
					'id'         => '3524200',
					'regency_id' => '3524',
					'name'       => 'KARANG GENENG',
				),
			267 =>
				array(
					'id'         => '3524210',
					'regency_id' => '3524',
					'name'       => 'SEKARAN',
				),
			268 =>
				array(
					'id'         => '3524220',
					'regency_id' => '3524',
					'name'       => 'MADURAN',
				),
			269 =>
				array(
					'id'         => '3524230',
					'regency_id' => '3524',
					'name'       => 'LAREN',
				),
			270 =>
				array(
					'id'         => '3524240',
					'regency_id' => '3524',
					'name'       => 'SOLOKURO',
				),
			271 =>
				array(
					'id'         => '3524250',
					'regency_id' => '3524',
					'name'       => 'PACIRAN',
				),
			272 =>
				array(
					'id'         => '3524260',
					'regency_id' => '3524',
					'name'       => 'BRONDONG',
				),
			273 =>
				array(
					'id'         => '3525010',
					'regency_id' => '3525',
					'name'       => 'WRINGINANOM',
				),
			274 =>
				array(
					'id'         => '3525020',
					'regency_id' => '3525',
					'name'       => 'DRIYOREJO',
				),
			275 =>
				array(
					'id'         => '3525030',
					'regency_id' => '3525',
					'name'       => 'KEDAMEAN',
				),
			276 =>
				array(
					'id'         => '3525040',
					'regency_id' => '3525',
					'name'       => 'MENGANTI',
				),
			277 =>
				array(
					'id'         => '3525050',
					'regency_id' => '3525',
					'name'       => 'CERME',
				),
			278 =>
				array(
					'id'         => '3525060',
					'regency_id' => '3525',
					'name'       => 'BENJENG',
				),
			279 =>
				array(
					'id'         => '3525070',
					'regency_id' => '3525',
					'name'       => 'BALONGPANGGANG',
				),
			280 =>
				array(
					'id'         => '3525080',
					'regency_id' => '3525',
					'name'       => 'DUDUKSAMPEYAN',
				),
			281 =>
				array(
					'id'         => '3525090',
					'regency_id' => '3525',
					'name'       => 'KEBOMAS',
				),
			282 =>
				array(
					'id'         => '3525100',
					'regency_id' => '3525',
					'name'       => 'GRESIK',
				),
			283 =>
				array(
					'id'         => '3525110',
					'regency_id' => '3525',
					'name'       => 'MANYAR',
				),
			284 =>
				array(
					'id'         => '3525120',
					'regency_id' => '3525',
					'name'       => 'BUNGAH',
				),
			285 =>
				array(
					'id'         => '3525130',
					'regency_id' => '3525',
					'name'       => 'SIDAYU',
				),
			286 =>
				array(
					'id'         => '3525140',
					'regency_id' => '3525',
					'name'       => 'DUKUN',
				),
			287 =>
				array(
					'id'         => '3525150',
					'regency_id' => '3525',
					'name'       => 'PANCENG',
				),
			288 =>
				array(
					'id'         => '3525160',
					'regency_id' => '3525',
					'name'       => 'UJUNGPANGKAH',
				),
			289 =>
				array(
					'id'         => '3525170',
					'regency_id' => '3525',
					'name'       => 'SANGKAPURA',
				),
			290 =>
				array(
					'id'         => '3525180',
					'regency_id' => '3525',
					'name'       => 'TAMBAK',
				),
			291 =>
				array(
					'id'         => '3526010',
					'regency_id' => '3526',
					'name'       => 'KAMAL',
				),
			292 =>
				array(
					'id'         => '3526020',
					'regency_id' => '3526',
					'name'       => 'LABANG',
				),
			293 =>
				array(
					'id'         => '3526030',
					'regency_id' => '3526',
					'name'       => 'KWANYAR',
				),
			294 =>
				array(
					'id'         => '3526040',
					'regency_id' => '3526',
					'name'       => 'MODUNG',
				),
			295 =>
				array(
					'id'         => '3526050',
					'regency_id' => '3526',
					'name'       => 'BLEGA',
				),
			296 =>
				array(
					'id'         => '3526060',
					'regency_id' => '3526',
					'name'       => 'KONANG',
				),
			297 =>
				array(
					'id'         => '3526070',
					'regency_id' => '3526',
					'name'       => 'GALIS',
				),
			298 =>
				array(
					'id'         => '3526080',
					'regency_id' => '3526',
					'name'       => 'TANAH MERAH',
				),
			299 =>
				array(
					'id'         => '3526090',
					'regency_id' => '3526',
					'name'       => 'TRAGAH',
				),
			300 =>
				array(
					'id'         => '3526100',
					'regency_id' => '3526',
					'name'       => 'SOCAH',
				),
			301 =>
				array(
					'id'         => '3526110',
					'regency_id' => '3526',
					'name'       => 'BANGKALAN',
				),
			302 =>
				array(
					'id'         => '3526120',
					'regency_id' => '3526',
					'name'       => 'BURNEH',
				),
			303 =>
				array(
					'id'         => '3526130',
					'regency_id' => '3526',
					'name'       => 'AROSBAYA',
				),
			304 =>
				array(
					'id'         => '3526140',
					'regency_id' => '3526',
					'name'       => 'GEGER',
				),
			305 =>
				array(
					'id'         => '3526150',
					'regency_id' => '3526',
					'name'       => 'KOKOP',
				),
			306 =>
				array(
					'id'         => '3526160',
					'regency_id' => '3526',
					'name'       => 'TANJUNGBUMI',
				),
			307 =>
				array(
					'id'         => '3526170',
					'regency_id' => '3526',
					'name'       => 'SEPULU',
				),
			308 =>
				array(
					'id'         => '3526180',
					'regency_id' => '3526',
					'name'       => 'KLAMPIS',
				),
			309 =>
				array(
					'id'         => '3527010',
					'regency_id' => '3527',
					'name'       => 'SRESEH',
				),
			310 =>
				array(
					'id'         => '3527020',
					'regency_id' => '3527',
					'name'       => 'TORJUN',
				),
			311 =>
				array(
					'id'         => '3527021',
					'regency_id' => '3527',
					'name'       => 'PANGARENGAN',
				),
			312 =>
				array(
					'id'         => '3527030',
					'regency_id' => '3527',
					'name'       => 'SAMPANG',
				),
			313 =>
				array(
					'id'         => '3527040',
					'regency_id' => '3527',
					'name'       => 'CAMPLONG',
				),
			314 =>
				array(
					'id'         => '3527050',
					'regency_id' => '3527',
					'name'       => 'OMBEN',
				),
			315 =>
				array(
					'id'         => '3527060',
					'regency_id' => '3527',
					'name'       => 'KEDUNGDUNG',
				),
			316 =>
				array(
					'id'         => '3527070',
					'regency_id' => '3527',
					'name'       => 'JRENGIK',
				),
			317 =>
				array(
					'id'         => '3527080',
					'regency_id' => '3527',
					'name'       => 'TAMBELANGAN',
				),
			318 =>
				array(
					'id'         => '3527090',
					'regency_id' => '3527',
					'name'       => 'BANYUATES',
				),
			319 =>
				array(
					'id'         => '3527100',
					'regency_id' => '3527',
					'name'       => 'ROBATAL',
				),
			320 =>
				array(
					'id'         => '3527101',
					'regency_id' => '3527',
					'name'       => 'KARANG PENANG',
				),
			321 =>
				array(
					'id'         => '3527110',
					'regency_id' => '3527',
					'name'       => 'KETAPANG',
				),
			322 =>
				array(
					'id'         => '3527120',
					'regency_id' => '3527',
					'name'       => 'SOKOBANAH',
				),
			323 =>
				array(
					'id'         => '3528010',
					'regency_id' => '3528',
					'name'       => 'TLANAKAN',
				),
			324 =>
				array(
					'id'         => '3528020',
					'regency_id' => '3528',
					'name'       => 'PADEMAWU',
				),
			325 =>
				array(
					'id'         => '3528030',
					'regency_id' => '3528',
					'name'       => 'GALIS',
				),
			326 =>
				array(
					'id'         => '3528040',
					'regency_id' => '3528',
					'name'       => 'LARANGAN',
				),
			327 =>
				array(
					'id'         => '3528050',
					'regency_id' => '3528',
					'name'       => 'PAMEKASAN',
				),
			328 =>
				array(
					'id'         => '3528060',
					'regency_id' => '3528',
					'name'       => 'PROPPO',
				),
			329 =>
				array(
					'id'         => '3528070',
					'regency_id' => '3528',
					'name'       => 'PALENGAAN',
				),
			330 =>
				array(
					'id'         => '3528080',
					'regency_id' => '3528',
					'name'       => 'PEGANTENAN',
				),
			331 =>
				array(
					'id'         => '3528090',
					'regency_id' => '3528',
					'name'       => 'KADUR',
				),
			332 =>
				array(
					'id'         => '3528100',
					'regency_id' => '3528',
					'name'       => 'PAKONG',
				),
			333 =>
				array(
					'id'         => '3528110',
					'regency_id' => '3528',
					'name'       => 'WARU',
				),
			334 =>
				array(
					'id'         => '3528120',
					'regency_id' => '3528',
					'name'       => 'BATU MARMAR',
				),
			335 =>
				array(
					'id'         => '3528130',
					'regency_id' => '3528',
					'name'       => 'PASEAN',
				),
			336 =>
				array(
					'id'         => '3529010',
					'regency_id' => '3529',
					'name'       => 'PRAGAAN',
				),
			337 =>
				array(
					'id'         => '3529020',
					'regency_id' => '3529',
					'name'       => 'BLUTO',
				),
			338 =>
				array(
					'id'         => '3529030',
					'regency_id' => '3529',
					'name'       => 'SARONGGI',
				),
			339 =>
				array(
					'id'         => '3529040',
					'regency_id' => '3529',
					'name'       => 'GILIGENTENG',
				),
			340 =>
				array(
					'id'         => '3529050',
					'regency_id' => '3529',
					'name'       => 'TALANGO',
				),
			341 =>
				array(
					'id'         => '3529060',
					'regency_id' => '3529',
					'name'       => 'KALIANGET',
				),
			342 =>
				array(
					'id'         => '3529070',
					'regency_id' => '3529',
					'name'       => 'KOTA SUMENEP',
				),
			343 =>
				array(
					'id'         => '3529071',
					'regency_id' => '3529',
					'name'       => 'BATUAN',
				),
			344 =>
				array(
					'id'         => '3529080',
					'regency_id' => '3529',
					'name'       => 'LENTENG',
				),
			345 =>
				array(
					'id'         => '3529090',
					'regency_id' => '3529',
					'name'       => 'GANDING',
				),
			346 =>
				array(
					'id'         => '3529100',
					'regency_id' => '3529',
					'name'       => 'GULUK GULUK',
				),
			347 =>
				array(
					'id'         => '3529110',
					'regency_id' => '3529',
					'name'       => 'PASONGSONGAN',
				),
			348 =>
				array(
					'id'         => '3529120',
					'regency_id' => '3529',
					'name'       => 'AMBUNTEN',
				),
			349 =>
				array(
					'id'         => '3529130',
					'regency_id' => '3529',
					'name'       => 'RUBARU',
				),
			350 =>
				array(
					'id'         => '3529140',
					'regency_id' => '3529',
					'name'       => 'DASUK',
				),
			351 =>
				array(
					'id'         => '3529150',
					'regency_id' => '3529',
					'name'       => 'MANDING',
				),
			352 =>
				array(
					'id'         => '3529160',
					'regency_id' => '3529',
					'name'       => 'BATUPUTIH',
				),
			353 =>
				array(
					'id'         => '3529170',
					'regency_id' => '3529',
					'name'       => 'GAPURA',
				),
			354 =>
				array(
					'id'         => '3529180',
					'regency_id' => '3529',
					'name'       => 'BATANG BATANG',
				),
			355 =>
				array(
					'id'         => '3529190',
					'regency_id' => '3529',
					'name'       => 'DUNGKEK',
				),
			356 =>
				array(
					'id'         => '3529200',
					'regency_id' => '3529',
					'name'       => 'NONGGUNONG',
				),
			357 =>
				array(
					'id'         => '3529210',
					'regency_id' => '3529',
					'name'       => 'GAYAM',
				),
			358 =>
				array(
					'id'         => '3529220',
					'regency_id' => '3529',
					'name'       => 'RAAS',
				),
			359 =>
				array(
					'id'         => '3529230',
					'regency_id' => '3529',
					'name'       => 'SAPEKEN',
				),
			360 =>
				array(
					'id'         => '3529240',
					'regency_id' => '3529',
					'name'       => 'ARJASA',
				),
			361 =>
				array(
					'id'         => '3529241',
					'regency_id' => '3529',
					'name'       => 'KANGAYAN',
				),
			362 =>
				array(
					'id'         => '3529250',
					'regency_id' => '3529',
					'name'       => 'MASALEMBU',
				),
			363 =>
				array(
					'id'         => '3571010',
					'regency_id' => '3571',
					'name'       => 'MOJOROTO',
				),
			364 =>
				array(
					'id'         => '3571020',
					'regency_id' => '3571',
					'name'       => 'KOTA KEDIRI',
				),
			365 =>
				array(
					'id'         => '3571030',
					'regency_id' => '3571',
					'name'       => 'PESANTREN',
				),
			366 =>
				array(
					'id'         => '3572010',
					'regency_id' => '3572',
					'name'       => 'SUKOREJO',
				),
			367 =>
				array(
					'id'         => '3572020',
					'regency_id' => '3572',
					'name'       => 'KEPANJENKIDUL',
				),
			368 =>
				array(
					'id'         => '3572030',
					'regency_id' => '3572',
					'name'       => 'SANANWETAN',
				),
			369 =>
				array(
					'id'         => '3573010',
					'regency_id' => '3573',
					'name'       => 'KEDUNGKANDANG',
				),
			370 =>
				array(
					'id'         => '3573020',
					'regency_id' => '3573',
					'name'       => 'SUKUN',
				),
			371 =>
				array(
					'id'         => '3573030',
					'regency_id' => '3573',
					'name'       => 'KLOJEN',
				),
			372 =>
				array(
					'id'         => '3573040',
					'regency_id' => '3573',
					'name'       => 'BLIMBING',
				),
			373 =>
				array(
					'id'         => '3573050',
					'regency_id' => '3573',
					'name'       => 'LOWOKWARU',
				),
			374 =>
				array(
					'id'         => '3574010',
					'regency_id' => '3574',
					'name'       => 'KADEMANGAN',
				),
			375 =>
				array(
					'id'         => '3574011',
					'regency_id' => '3574',
					'name'       => 'KEDOPOK',
				),
			376 =>
				array(
					'id'         => '3574020',
					'regency_id' => '3574',
					'name'       => 'WONOASIH',
				),
			377 =>
				array(
					'id'         => '3574030',
					'regency_id' => '3574',
					'name'       => 'MAYANGAN',
				),
			378 =>
				array(
					'id'         => '3574031',
					'regency_id' => '3574',
					'name'       => 'KANIGARAN',
				),
			379 =>
				array(
					'id'         => '3575010',
					'regency_id' => '3575',
					'name'       => 'GADINGREJO',
				),
			380 =>
				array(
					'id'         => '3575020',
					'regency_id' => '3575',
					'name'       => 'PURWOREJO',
				),
			381 =>
				array(
					'id'         => '3575030',
					'regency_id' => '3575',
					'name'       => 'BUGULKIDUL',
				),
			382 =>
				array(
					'id'         => '3575031',
					'regency_id' => '3575',
					'name'       => 'PANGGUNGREJO',
				),
			383 =>
				array(
					'id'         => '3576010',
					'regency_id' => '3576',
					'name'       => 'PRAJURIT KULON',
				),
			384 =>
				array(
					'id'         => '3576020',
					'regency_id' => '3576',
					'name'       => 'MAGERSARI',
				),
			385 =>
				array(
					'id'         => '3576021',
					'regency_id' => '3576',
					'name'       => 'KRANGGAN',
				),
			386 =>
				array(
					'id'         => '3577010',
					'regency_id' => '3577',
					'name'       => 'MANGU HARJO',
				),
			387 =>
				array(
					'id'         => '3577020',
					'regency_id' => '3577',
					'name'       => 'TAMAN',
				),
			388 =>
				array(
					'id'         => '3577030',
					'regency_id' => '3577',
					'name'       => 'KARTOHARJO',
				),
			389 =>
				array(
					'id'         => '3578010',
					'regency_id' => '3578',
					'name'       => 'KARANG PILANG',
				),
			390 =>
				array(
					'id'         => '3578020',
					'regency_id' => '3578',
					'name'       => 'JAMBANGAN',
				),
			391 =>
				array(
					'id'         => '3578030',
					'regency_id' => '3578',
					'name'       => 'GAYUNGAN',
				),
			392 =>
				array(
					'id'         => '3578040',
					'regency_id' => '3578',
					'name'       => 'WONOCOLO',
				),
			393 =>
				array(
					'id'         => '3578050',
					'regency_id' => '3578',
					'name'       => 'TENGGILIS MEJOYO',
				),
			394 =>
				array(
					'id'         => '3578060',
					'regency_id' => '3578',
					'name'       => 'GUNUNG ANYAR',
				),
			395 =>
				array(
					'id'         => '3578070',
					'regency_id' => '3578',
					'name'       => 'RUNGKUT',
				),
			396 =>
				array(
					'id'         => '3578080',
					'regency_id' => '3578',
					'name'       => 'SUKOLILO',
				),
			397 =>
				array(
					'id'         => '3578090',
					'regency_id' => '3578',
					'name'       => 'MULYOREJO',
				),
			398 =>
				array(
					'id'         => '3578100',
					'regency_id' => '3578',
					'name'       => 'GUBENG',
				),
			399 =>
				array(
					'id'         => '3578110',
					'regency_id' => '3578',
					'name'       => 'WONOKROMO',
				),
			400 =>
				array(
					'id'         => '3578120',
					'regency_id' => '3578',
					'name'       => 'DUKUH PAKIS',
				),
			401 =>
				array(
					'id'         => '3578130',
					'regency_id' => '3578',
					'name'       => 'WIYUNG',
				),
			402 =>
				array(
					'id'         => '3578140',
					'regency_id' => '3578',
					'name'       => 'LAKARSANTRI',
				),
			403 =>
				array(
					'id'         => '3578141',
					'regency_id' => '3578',
					'name'       => 'SAMBIKEREP',
				),
			404 =>
				array(
					'id'         => '3578150',
					'regency_id' => '3578',
					'name'       => 'TANDES',
				),
			405 =>
				array(
					'id'         => '3578160',
					'regency_id' => '3578',
					'name'       => 'SUKO MANUNGGAL',
				),
			406 =>
				array(
					'id'         => '3578170',
					'regency_id' => '3578',
					'name'       => 'SAWAHAN',
				),
			407 =>
				array(
					'id'         => '3578180',
					'regency_id' => '3578',
					'name'       => 'TEGALSARI',
				),
			408 =>
				array(
					'id'         => '3578190',
					'regency_id' => '3578',
					'name'       => 'GENTENG',
				),
			409 =>
				array(
					'id'         => '3578200',
					'regency_id' => '3578',
					'name'       => 'TAMBAKSARI',
				),
			410 =>
				array(
					'id'         => '3578210',
					'regency_id' => '3578',
					'name'       => 'KENJERAN',
				),
			411 =>
				array(
					'id'         => '3578211',
					'regency_id' => '3578',
					'name'       => 'BULAK',
				),
			412 =>
				array(
					'id'         => '3578220',
					'regency_id' => '3578',
					'name'       => 'SIMOKERTO',
				),
			413 =>
				array(
					'id'         => '3578230',
					'regency_id' => '3578',
					'name'       => 'SEMAMPIR',
				),
			414 =>
				array(
					'id'         => '3578240',
					'regency_id' => '3578',
					'name'       => 'PABEAN CANTIAN',
				),
			415 =>
				array(
					'id'         => '3578250',
					'regency_id' => '3578',
					'name'       => 'BUBUTAN',
				),
			416 =>
				array(
					'id'         => '3578260',
					'regency_id' => '3578',
					'name'       => 'KREMBANGAN',
				),
			417 =>
				array(
					'id'         => '3578270',
					'regency_id' => '3578',
					'name'       => 'ASEMROWO',
				),
			418 =>
				array(
					'id'         => '3578280',
					'regency_id' => '3578',
					'name'       => 'BENOWO',
				),
			419 =>
				array(
					'id'         => '3578281',
					'regency_id' => '3578',
					'name'       => 'PAKAL',
				),
			420 =>
				array(
					'id'         => '3579010',
					'regency_id' => '3579',
					'name'       => 'BATU',
				),
			421 =>
				array(
					'id'         => '3579020',
					'regency_id' => '3579',
					'name'       => 'JUNREJO',
				),
			422 =>
				array(
					'id'         => '3579030',
					'regency_id' => '3579',
					'name'       => 'BUMIAJI',
				),
			423 =>
				array(
					'id'         => '3601010',
					'regency_id' => '3601',
					'name'       => 'SUMUR',
				),
			424 =>
				array(
					'id'         => '3601020',
					'regency_id' => '3601',
					'name'       => 'CIMANGGU',
				),
			425 =>
				array(
					'id'         => '3601030',
					'regency_id' => '3601',
					'name'       => 'CIBALIUNG',
				),
			426 =>
				array(
					'id'         => '3601031',
					'regency_id' => '3601',
					'name'       => 'CIBITUNG',
				),
			427 =>
				array(
					'id'         => '3601040',
					'regency_id' => '3601',
					'name'       => 'CIKEUSIK',
				),
			428 =>
				array(
					'id'         => '3601050',
					'regency_id' => '3601',
					'name'       => 'CIGEULIS',
				),
			429 =>
				array(
					'id'         => '3601060',
					'regency_id' => '3601',
					'name'       => 'PANIMBANG',
				),
			430 =>
				array(
					'id'         => '3601061',
					'regency_id' => '3601',
					'name'       => 'SOBANG',
				),
			431 =>
				array(
					'id'         => '3601070',
					'regency_id' => '3601',
					'name'       => 'MUNJUL',
				),
			432 =>
				array(
					'id'         => '3601071',
					'regency_id' => '3601',
					'name'       => 'ANGSANA',
				),
			433 =>
				array(
					'id'         => '3601072',
					'regency_id' => '3601',
					'name'       => 'SINDANGRESMI',
				),
			434 =>
				array(
					'id'         => '3601080',
					'regency_id' => '3601',
					'name'       => 'PICUNG',
				),
			435 =>
				array(
					'id'         => '3601090',
					'regency_id' => '3601',
					'name'       => 'BOJONG',
				),
			436 =>
				array(
					'id'         => '3601100',
					'regency_id' => '3601',
					'name'       => 'SAKETI',
				),
			437 =>
				array(
					'id'         => '3601101',
					'regency_id' => '3601',
					'name'       => 'CISATA',
				),
			438 =>
				array(
					'id'         => '3601110',
					'regency_id' => '3601',
					'name'       => 'PAGELARAN',
				),
			439 =>
				array(
					'id'         => '3601111',
					'regency_id' => '3601',
					'name'       => 'PATIA',
				),
			440 =>
				array(
					'id'         => '3601112',
					'regency_id' => '3601',
					'name'       => 'SUKARESMI',
				),
			441 =>
				array(
					'id'         => '3601120',
					'regency_id' => '3601',
					'name'       => 'LABUAN',
				),
			442 =>
				array(
					'id'         => '3601121',
					'regency_id' => '3601',
					'name'       => 'CARITA',
				),
			443 =>
				array(
					'id'         => '3601130',
					'regency_id' => '3601',
					'name'       => 'JIPUT',
				),
			444 =>
				array(
					'id'         => '3601131',
					'regency_id' => '3601',
					'name'       => 'CIKEDAL',
				),
			445 =>
				array(
					'id'         => '3601140',
					'regency_id' => '3601',
					'name'       => 'MENES',
				),
			446 =>
				array(
					'id'         => '3601141',
					'regency_id' => '3601',
					'name'       => 'PULOSARI',
				),
			447 =>
				array(
					'id'         => '3601150',
					'regency_id' => '3601',
					'name'       => 'MANDALAWANGI',
				),
			448 =>
				array(
					'id'         => '3601160',
					'regency_id' => '3601',
					'name'       => 'CIMANUK',
				),
			449 =>
				array(
					'id'         => '3601161',
					'regency_id' => '3601',
					'name'       => 'CIPEUCANG',
				),
			450 =>
				array(
					'id'         => '3601170',
					'regency_id' => '3601',
					'name'       => 'BANJAR',
				),
			451 =>
				array(
					'id'         => '3601171',
					'regency_id' => '3601',
					'name'       => 'KADUHEJO',
				),
			452 =>
				array(
					'id'         => '3601172',
					'regency_id' => '3601',
					'name'       => 'MEKARJAYA',
				),
			453 =>
				array(
					'id'         => '3601180',
					'regency_id' => '3601',
					'name'       => 'PANDEGLANG',
				),
			454 =>
				array(
					'id'         => '3601181',
					'regency_id' => '3601',
					'name'       => 'MAJASARI',
				),
			455 =>
				array(
					'id'         => '3601190',
					'regency_id' => '3601',
					'name'       => 'CADASARI',
				),
			456 =>
				array(
					'id'         => '3601191',
					'regency_id' => '3601',
					'name'       => 'KARANGTANJUNG',
				),
			457 =>
				array(
					'id'         => '3601192',
					'regency_id' => '3601',
					'name'       => 'KORONCONG',
				),
			458 =>
				array(
					'id'         => '3602010',
					'regency_id' => '3602',
					'name'       => 'MALINGPING',
				),
			459 =>
				array(
					'id'         => '3602011',
					'regency_id' => '3602',
					'name'       => 'WANASALAM',
				),
			460 =>
				array(
					'id'         => '3602020',
					'regency_id' => '3602',
					'name'       => 'PANGGARANGAN',
				),
			461 =>
				array(
					'id'         => '3602021',
					'regency_id' => '3602',
					'name'       => 'CIHARA',
				),
			462 =>
				array(
					'id'         => '3602030',
					'regency_id' => '3602',
					'name'       => 'BAYAH',
				),
			463 =>
				array(
					'id'         => '3602031',
					'regency_id' => '3602',
					'name'       => 'CILOGRANG',
				),
			464 =>
				array(
					'id'         => '3602040',
					'regency_id' => '3602',
					'name'       => 'CIBEBER',
				),
			465 =>
				array(
					'id'         => '3602050',
					'regency_id' => '3602',
					'name'       => 'CIJAKU',
				),
			466 =>
				array(
					'id'         => '3602051',
					'regency_id' => '3602',
					'name'       => 'CIGEMBLONG',
				),
			467 =>
				array(
					'id'         => '3602060',
					'regency_id' => '3602',
					'name'       => 'BANJARSARI',
				),
			468 =>
				array(
					'id'         => '3602070',
					'regency_id' => '3602',
					'name'       => 'CILELES',
				),
			469 =>
				array(
					'id'         => '3602080',
					'regency_id' => '3602',
					'name'       => 'GUNUNG KENCANA',
				),
			470 =>
				array(
					'id'         => '3602090',
					'regency_id' => '3602',
					'name'       => 'BOJONGMANIK',
				),
			471 =>
				array(
					'id'         => '3602091',
					'regency_id' => '3602',
					'name'       => 'CIRINTEN',
				),
			472 =>
				array(
					'id'         => '3602100',
					'regency_id' => '3602',
					'name'       => 'LEUWIDAMAR',
				),
			473 =>
				array(
					'id'         => '3602110',
					'regency_id' => '3602',
					'name'       => 'MUNCANG',
				),
			474 =>
				array(
					'id'         => '3602111',
					'regency_id' => '3602',
					'name'       => 'SOBANG',
				),
			475 =>
				array(
					'id'         => '3602120',
					'regency_id' => '3602',
					'name'       => 'CIPANAS',
				),
			476 =>
				array(
					'id'         => '3602121',
					'regency_id' => '3602',
					'name'       => 'LEBAKGEDONG',
				),
			477 =>
				array(
					'id'         => '3602130',
					'regency_id' => '3602',
					'name'       => 'SAJIRA',
				),
			478 =>
				array(
					'id'         => '3602140',
					'regency_id' => '3602',
					'name'       => 'CIMARGA',
				),
			479 =>
				array(
					'id'         => '3602150',
					'regency_id' => '3602',
					'name'       => 'CIKULUR',
				),
			480 =>
				array(
					'id'         => '3602160',
					'regency_id' => '3602',
					'name'       => 'WARUNGGUNUNG',
				),
			481 =>
				array(
					'id'         => '3602170',
					'regency_id' => '3602',
					'name'       => 'CIBADAK',
				),
			482 =>
				array(
					'id'         => '3602180',
					'regency_id' => '3602',
					'name'       => 'RANGKASBITUNG',
				),
			483 =>
				array(
					'id'         => '3602181',
					'regency_id' => '3602',
					'name'       => 'KALANGANYAR',
				),
			484 =>
				array(
					'id'         => '3602190',
					'regency_id' => '3602',
					'name'       => 'MAJA',
				),
			485 =>
				array(
					'id'         => '3602191',
					'regency_id' => '3602',
					'name'       => 'CURUGBITUNG',
				),
			486 =>
				array(
					'id'         => '3603010',
					'regency_id' => '3603',
					'name'       => 'CISOKA',
				),
			487 =>
				array(
					'id'         => '3603011',
					'regency_id' => '3603',
					'name'       => 'SOLEAR',
				),
			488 =>
				array(
					'id'         => '3603020',
					'regency_id' => '3603',
					'name'       => 'TIGARAKSA',
				),
			489 =>
				array(
					'id'         => '3603021',
					'regency_id' => '3603',
					'name'       => 'JAMBE',
				),
			490 =>
				array(
					'id'         => '3603030',
					'regency_id' => '3603',
					'name'       => 'CIKUPA',
				),
			491 =>
				array(
					'id'         => '3603040',
					'regency_id' => '3603',
					'name'       => 'PANONGAN',
				),
			492 =>
				array(
					'id'         => '3603050',
					'regency_id' => '3603',
					'name'       => 'CURUG',
				),
			493 =>
				array(
					'id'         => '3603051',
					'regency_id' => '3603',
					'name'       => 'KELAPA DUA',
				),
			494 =>
				array(
					'id'         => '3603060',
					'regency_id' => '3603',
					'name'       => 'LEGOK',
				),
			495 =>
				array(
					'id'         => '3603070',
					'regency_id' => '3603',
					'name'       => 'PAGEDANGAN',
				),
			496 =>
				array(
					'id'         => '3603081',
					'regency_id' => '3603',
					'name'       => 'CISAUK',
				),
			497 =>
				array(
					'id'         => '3603120',
					'regency_id' => '3603',
					'name'       => 'PASARKEMIS',
				),
			498 =>
				array(
					'id'         => '3603121',
					'regency_id' => '3603',
					'name'       => 'SINDANG JAYA',
				),
			499 =>
				array(
					'id'         => '3603130',
					'regency_id' => '3603',
					'name'       => 'BALARAJA',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '3603131',
					'regency_id' => '3603',
					'name'       => 'JAYANTI',
				),
			1   =>
				array(
					'id'         => '3603132',
					'regency_id' => '3603',
					'name'       => 'SUKAMULYA',
				),
			2   =>
				array(
					'id'         => '3603140',
					'regency_id' => '3603',
					'name'       => 'KRESEK',
				),
			3   =>
				array(
					'id'         => '3603141',
					'regency_id' => '3603',
					'name'       => 'GUNUNG KALER',
				),
			4   =>
				array(
					'id'         => '3603150',
					'regency_id' => '3603',
					'name'       => 'KRONJO',
				),
			5   =>
				array(
					'id'         => '3603151',
					'regency_id' => '3603',
					'name'       => 'MEKAR BARU',
				),
			6   =>
				array(
					'id'         => '3603160',
					'regency_id' => '3603',
					'name'       => 'MAUK',
				),
			7   =>
				array(
					'id'         => '3603161',
					'regency_id' => '3603',
					'name'       => 'KEMIRI',
				),
			8   =>
				array(
					'id'         => '3603162',
					'regency_id' => '3603',
					'name'       => 'SUKADIRI',
				),
			9   =>
				array(
					'id'         => '3603170',
					'regency_id' => '3603',
					'name'       => 'RAJEG',
				),
			10  =>
				array(
					'id'         => '3603180',
					'regency_id' => '3603',
					'name'       => 'SEPATAN',
				),
			11  =>
				array(
					'id'         => '3603181',
					'regency_id' => '3603',
					'name'       => 'SEPATAN TIMUR',
				),
			12  =>
				array(
					'id'         => '3603190',
					'regency_id' => '3603',
					'name'       => 'PAKUHAJI',
				),
			13  =>
				array(
					'id'         => '3603200',
					'regency_id' => '3603',
					'name'       => 'TELUKNAGA',
				),
			14  =>
				array(
					'id'         => '3603210',
					'regency_id' => '3603',
					'name'       => 'KOSAMBI',
				),
			15  =>
				array(
					'id'         => '3604010',
					'regency_id' => '3604',
					'name'       => 'CINANGKA',
				),
			16  =>
				array(
					'id'         => '3604020',
					'regency_id' => '3604',
					'name'       => 'PADARINCANG',
				),
			17  =>
				array(
					'id'         => '3604030',
					'regency_id' => '3604',
					'name'       => 'CIOMAS',
				),
			18  =>
				array(
					'id'         => '3604040',
					'regency_id' => '3604',
					'name'       => 'PABUARAN',
				),
			19  =>
				array(
					'id'         => '3604041',
					'regency_id' => '3604',
					'name'       => 'GUNUNG SARI',
				),
			20  =>
				array(
					'id'         => '3604050',
					'regency_id' => '3604',
					'name'       => 'BAROS',
				),
			21  =>
				array(
					'id'         => '3604060',
					'regency_id' => '3604',
					'name'       => 'PETIR',
				),
			22  =>
				array(
					'id'         => '3604061',
					'regency_id' => '3604',
					'name'       => 'TUNJUNG TEJA',
				),
			23  =>
				array(
					'id'         => '3604080',
					'regency_id' => '3604',
					'name'       => 'CIKEUSAL',
				),
			24  =>
				array(
					'id'         => '3604090',
					'regency_id' => '3604',
					'name'       => 'PAMARAYAN',
				),
			25  =>
				array(
					'id'         => '3604091',
					'regency_id' => '3604',
					'name'       => 'BANDUNG',
				),
			26  =>
				array(
					'id'         => '3604100',
					'regency_id' => '3604',
					'name'       => 'JAWILAN',
				),
			27  =>
				array(
					'id'         => '3604110',
					'regency_id' => '3604',
					'name'       => 'KOPO',
				),
			28  =>
				array(
					'id'         => '3604120',
					'regency_id' => '3604',
					'name'       => 'CIKANDE',
				),
			29  =>
				array(
					'id'         => '3604121',
					'regency_id' => '3604',
					'name'       => 'KIBIN',
				),
			30  =>
				array(
					'id'         => '3604130',
					'regency_id' => '3604',
					'name'       => 'KRAGILAN',
				),
			31  =>
				array(
					'id'         => '3604180',
					'regency_id' => '3604',
					'name'       => 'WARINGINKURUNG',
				),
			32  =>
				array(
					'id'         => '3604190',
					'regency_id' => '3604',
					'name'       => 'MANCAK',
				),
			33  =>
				array(
					'id'         => '3604200',
					'regency_id' => '3604',
					'name'       => 'ANYAR',
				),
			34  =>
				array(
					'id'         => '3604210',
					'regency_id' => '3604',
					'name'       => 'BOJONEGARA',
				),
			35  =>
				array(
					'id'         => '3604211',
					'regency_id' => '3604',
					'name'       => 'PULO AMPEL',
				),
			36  =>
				array(
					'id'         => '3604220',
					'regency_id' => '3604',
					'name'       => 'KRAMATWATU',
				),
			37  =>
				array(
					'id'         => '3604240',
					'regency_id' => '3604',
					'name'       => 'CIRUAS',
				),
			38  =>
				array(
					'id'         => '3604250',
					'regency_id' => '3604',
					'name'       => 'PONTANG',
				),
			39  =>
				array(
					'id'         => '3604251',
					'regency_id' => '3604',
					'name'       => 'LEBAK WANGI',
				),
			40  =>
				array(
					'id'         => '3604260',
					'regency_id' => '3604',
					'name'       => 'CARENANG',
				),
			41  =>
				array(
					'id'         => '3604261',
					'regency_id' => '3604',
					'name'       => 'BINUANG',
				),
			42  =>
				array(
					'id'         => '3604270',
					'regency_id' => '3604',
					'name'       => 'TIRTAYASA',
				),
			43  =>
				array(
					'id'         => '3604271',
					'regency_id' => '3604',
					'name'       => 'TANARA',
				),
			44  =>
				array(
					'id'         => '3671010',
					'regency_id' => '3671',
					'name'       => 'CILEDUG',
				),
			45  =>
				array(
					'id'         => '3671011',
					'regency_id' => '3671',
					'name'       => 'LARANGAN',
				),
			46  =>
				array(
					'id'         => '3671012',
					'regency_id' => '3671',
					'name'       => 'KARANG TENGAH',
				),
			47  =>
				array(
					'id'         => '3671020',
					'regency_id' => '3671',
					'name'       => 'CIPONDOH',
				),
			48  =>
				array(
					'id'         => '3671021',
					'regency_id' => '3671',
					'name'       => 'PINANG',
				),
			49  =>
				array(
					'id'         => '3671030',
					'regency_id' => '3671',
					'name'       => 'TANGERANG',
				),
			50  =>
				array(
					'id'         => '3671031',
					'regency_id' => '3671',
					'name'       => 'KARAWACI',
				),
			51  =>
				array(
					'id'         => '3671040',
					'regency_id' => '3671',
					'name'       => 'JATI UWUNG',
				),
			52  =>
				array(
					'id'         => '3671041',
					'regency_id' => '3671',
					'name'       => 'CIBODAS',
				),
			53  =>
				array(
					'id'         => '3671042',
					'regency_id' => '3671',
					'name'       => 'PERIUK',
				),
			54  =>
				array(
					'id'         => '3671050',
					'regency_id' => '3671',
					'name'       => 'BATUCEPER',
				),
			55  =>
				array(
					'id'         => '3671051',
					'regency_id' => '3671',
					'name'       => 'NEGLASARI',
				),
			56  =>
				array(
					'id'         => '3671060',
					'regency_id' => '3671',
					'name'       => 'BENDA',
				),
			57  =>
				array(
					'id'         => '3672010',
					'regency_id' => '3672',
					'name'       => 'CIWANDAN',
				),
			58  =>
				array(
					'id'         => '3672011',
					'regency_id' => '3672',
					'name'       => 'CITANGKIL',
				),
			59  =>
				array(
					'id'         => '3672020',
					'regency_id' => '3672',
					'name'       => 'PULOMERAK',
				),
			60  =>
				array(
					'id'         => '3672021',
					'regency_id' => '3672',
					'name'       => 'PURWAKARTA',
				),
			61  =>
				array(
					'id'         => '3672022',
					'regency_id' => '3672',
					'name'       => 'GROGOL',
				),
			62  =>
				array(
					'id'         => '3672030',
					'regency_id' => '3672',
					'name'       => 'CILEGON',
				),
			63  =>
				array(
					'id'         => '3672031',
					'regency_id' => '3672',
					'name'       => 'JOMBANG',
				),
			64  =>
				array(
					'id'         => '3672040',
					'regency_id' => '3672',
					'name'       => 'CIBEBER',
				),
			65  =>
				array(
					'id'         => '3673010',
					'regency_id' => '3673',
					'name'       => 'CURUG',
				),
			66  =>
				array(
					'id'         => '3673020',
					'regency_id' => '3673',
					'name'       => 'WALANTAKA',
				),
			67  =>
				array(
					'id'         => '3673030',
					'regency_id' => '3673',
					'name'       => 'CIPOCOK JAYA',
				),
			68  =>
				array(
					'id'         => '3673040',
					'regency_id' => '3673',
					'name'       => 'SERANG',
				),
			69  =>
				array(
					'id'         => '3673050',
					'regency_id' => '3673',
					'name'       => 'TAKTAKAN',
				),
			70  =>
				array(
					'id'         => '3673060',
					'regency_id' => '3673',
					'name'       => 'KASEMEN',
				),
			71  =>
				array(
					'id'         => '3674010',
					'regency_id' => '3674',
					'name'       => 'SETU',
				),
			72  =>
				array(
					'id'         => '3674020',
					'regency_id' => '3674',
					'name'       => 'SERPONG',
				),
			73  =>
				array(
					'id'         => '3674030',
					'regency_id' => '3674',
					'name'       => 'PAMULANG',
				),
			74  =>
				array(
					'id'         => '3674040',
					'regency_id' => '3674',
					'name'       => 'CIPUTAT',
				),
			75  =>
				array(
					'id'         => '3674050',
					'regency_id' => '3674',
					'name'       => 'CIPUTAT TIMUR',
				),
			76  =>
				array(
					'id'         => '3674060',
					'regency_id' => '3674',
					'name'       => 'PONDOK AREN',
				),
			77  =>
				array(
					'id'         => '3674070',
					'regency_id' => '3674',
					'name'       => 'SERPONG UTARA',
				),
			78  =>
				array(
					'id'         => '5101010',
					'regency_id' => '5101',
					'name'       => 'MELAYA',
				),
			79  =>
				array(
					'id'         => '5101020',
					'regency_id' => '5101',
					'name'       => 'NEGARA',
				),
			80  =>
				array(
					'id'         => '5101021',
					'regency_id' => '5101',
					'name'       => 'JEMBRANA',
				),
			81  =>
				array(
					'id'         => '5101030',
					'regency_id' => '5101',
					'name'       => 'MENDOYO',
				),
			82  =>
				array(
					'id'         => '5101040',
					'regency_id' => '5101',
					'name'       => 'PEKUTATAN',
				),
			83  =>
				array(
					'id'         => '5102010',
					'regency_id' => '5102',
					'name'       => 'SELEMADEG',
				),
			84  =>
				array(
					'id'         => '5102011',
					'regency_id' => '5102',
					'name'       => 'SELEMADEG TIMUR',
				),
			85  =>
				array(
					'id'         => '5102012',
					'regency_id' => '5102',
					'name'       => 'SELEMADEG BARAT',
				),
			86  =>
				array(
					'id'         => '5102020',
					'regency_id' => '5102',
					'name'       => 'KERAMBITAN',
				),
			87  =>
				array(
					'id'         => '5102030',
					'regency_id' => '5102',
					'name'       => 'TABANAN',
				),
			88  =>
				array(
					'id'         => '5102040',
					'regency_id' => '5102',
					'name'       => 'KEDIRI',
				),
			89  =>
				array(
					'id'         => '5102050',
					'regency_id' => '5102',
					'name'       => 'MARGA',
				),
			90  =>
				array(
					'id'         => '5102060',
					'regency_id' => '5102',
					'name'       => 'BATURITI',
				),
			91  =>
				array(
					'id'         => '5102070',
					'regency_id' => '5102',
					'name'       => 'PENEBEL',
				),
			92  =>
				array(
					'id'         => '5102080',
					'regency_id' => '5102',
					'name'       => 'PUPUAN',
				),
			93  =>
				array(
					'id'         => '5103010',
					'regency_id' => '5103',
					'name'       => 'KUTA SELATAN',
				),
			94  =>
				array(
					'id'         => '5103020',
					'regency_id' => '5103',
					'name'       => 'KUTA',
				),
			95  =>
				array(
					'id'         => '5103030',
					'regency_id' => '5103',
					'name'       => 'KUTA UTARA',
				),
			96  =>
				array(
					'id'         => '5103040',
					'regency_id' => '5103',
					'name'       => 'MENGWI',
				),
			97  =>
				array(
					'id'         => '5103050',
					'regency_id' => '5103',
					'name'       => 'ABIANSEMAL',
				),
			98  =>
				array(
					'id'         => '5103060',
					'regency_id' => '5103',
					'name'       => 'PETANG',
				),
			99  =>
				array(
					'id'         => '5104010',
					'regency_id' => '5104',
					'name'       => 'SUKAWATI',
				),
			100 =>
				array(
					'id'         => '5104020',
					'regency_id' => '5104',
					'name'       => 'BLAHBATUH',
				),
			101 =>
				array(
					'id'         => '5104030',
					'regency_id' => '5104',
					'name'       => 'GIANYAR',
				),
			102 =>
				array(
					'id'         => '5104040',
					'regency_id' => '5104',
					'name'       => 'TAMPAKSIRING',
				),
			103 =>
				array(
					'id'         => '5104050',
					'regency_id' => '5104',
					'name'       => 'UBUD',
				),
			104 =>
				array(
					'id'         => '5104060',
					'regency_id' => '5104',
					'name'       => 'TEGALLALANG',
				),
			105 =>
				array(
					'id'         => '5104070',
					'regency_id' => '5104',
					'name'       => 'PAYANGAN',
				),
			106 =>
				array(
					'id'         => '5105010',
					'regency_id' => '5105',
					'name'       => 'NUSAPENIDA',
				),
			107 =>
				array(
					'id'         => '5105020',
					'regency_id' => '5105',
					'name'       => 'BANJARANGKAN',
				),
			108 =>
				array(
					'id'         => '5105030',
					'regency_id' => '5105',
					'name'       => 'KLUNGKUNG',
				),
			109 =>
				array(
					'id'         => '5105040',
					'regency_id' => '5105',
					'name'       => 'DAWAN',
				),
			110 =>
				array(
					'id'         => '5106010',
					'regency_id' => '5106',
					'name'       => 'SUSUT',
				),
			111 =>
				array(
					'id'         => '5106020',
					'regency_id' => '5106',
					'name'       => 'BANGLI',
				),
			112 =>
				array(
					'id'         => '5106030',
					'regency_id' => '5106',
					'name'       => 'TEMBUKU',
				),
			113 =>
				array(
					'id'         => '5106040',
					'regency_id' => '5106',
					'name'       => 'KINTAMANI',
				),
			114 =>
				array(
					'id'         => '5107010',
					'regency_id' => '5107',
					'name'       => 'RENDANG',
				),
			115 =>
				array(
					'id'         => '5107020',
					'regency_id' => '5107',
					'name'       => 'SIDEMEN',
				),
			116 =>
				array(
					'id'         => '5107030',
					'regency_id' => '5107',
					'name'       => 'MANGGIS',
				),
			117 =>
				array(
					'id'         => '5107040',
					'regency_id' => '5107',
					'name'       => 'KARANGASEM',
				),
			118 =>
				array(
					'id'         => '5107050',
					'regency_id' => '5107',
					'name'       => 'ABANG',
				),
			119 =>
				array(
					'id'         => '5107060',
					'regency_id' => '5107',
					'name'       => 'BEBANDEM',
				),
			120 =>
				array(
					'id'         => '5107070',
					'regency_id' => '5107',
					'name'       => 'SELAT',
				),
			121 =>
				array(
					'id'         => '5107080',
					'regency_id' => '5107',
					'name'       => 'KUBU',
				),
			122 =>
				array(
					'id'         => '5108010',
					'regency_id' => '5108',
					'name'       => 'GEROKGAK',
				),
			123 =>
				array(
					'id'         => '5108020',
					'regency_id' => '5108',
					'name'       => 'SERIRIT',
				),
			124 =>
				array(
					'id'         => '5108030',
					'regency_id' => '5108',
					'name'       => 'BUSUNGBIU',
				),
			125 =>
				array(
					'id'         => '5108040',
					'regency_id' => '5108',
					'name'       => 'BANJAR',
				),
			126 =>
				array(
					'id'         => '5108050',
					'regency_id' => '5108',
					'name'       => 'SUKASADA',
				),
			127 =>
				array(
					'id'         => '5108060',
					'regency_id' => '5108',
					'name'       => 'BULELENG',
				),
			128 =>
				array(
					'id'         => '5108070',
					'regency_id' => '5108',
					'name'       => 'SAWAN',
				),
			129 =>
				array(
					'id'         => '5108080',
					'regency_id' => '5108',
					'name'       => 'KUBUTAMBAHAN',
				),
			130 =>
				array(
					'id'         => '5108090',
					'regency_id' => '5108',
					'name'       => 'TEJAKULA',
				),
			131 =>
				array(
					'id'         => '5171010',
					'regency_id' => '5171',
					'name'       => 'DENPASAR SELATAN',
				),
			132 =>
				array(
					'id'         => '5171020',
					'regency_id' => '5171',
					'name'       => 'DENPASAR TIMUR',
				),
			133 =>
				array(
					'id'         => '5171030',
					'regency_id' => '5171',
					'name'       => 'DENPASAR BARAT',
				),
			134 =>
				array(
					'id'         => '5171031',
					'regency_id' => '5171',
					'name'       => 'DENPASAR UTARA',
				),
			135 =>
				array(
					'id'         => '5201010',
					'regency_id' => '5201',
					'name'       => 'SEKOTONG',
				),
			136 =>
				array(
					'id'         => '5201011',
					'regency_id' => '5201',
					'name'       => 'LEMBAR',
				),
			137 =>
				array(
					'id'         => '5201020',
					'regency_id' => '5201',
					'name'       => 'GERUNG',
				),
			138 =>
				array(
					'id'         => '5201030',
					'regency_id' => '5201',
					'name'       => 'LABU API',
				),
			139 =>
				array(
					'id'         => '5201040',
					'regency_id' => '5201',
					'name'       => 'KEDIRI',
				),
			140 =>
				array(
					'id'         => '5201041',
					'regency_id' => '5201',
					'name'       => 'KURIPAN',
				),
			141 =>
				array(
					'id'         => '5201050',
					'regency_id' => '5201',
					'name'       => 'NARMADA',
				),
			142 =>
				array(
					'id'         => '5201051',
					'regency_id' => '5201',
					'name'       => 'LINGSAR',
				),
			143 =>
				array(
					'id'         => '5201060',
					'regency_id' => '5201',
					'name'       => 'GUNUNG SARI',
				),
			144 =>
				array(
					'id'         => '5201061',
					'regency_id' => '5201',
					'name'       => 'BATU LAYAR',
				),
			145 =>
				array(
					'id'         => '5202010',
					'regency_id' => '5202',
					'name'       => 'PRAYA BARAT',
				),
			146 =>
				array(
					'id'         => '5202011',
					'regency_id' => '5202',
					'name'       => 'PRAYA BARAT DAYA',
				),
			147 =>
				array(
					'id'         => '5202020',
					'regency_id' => '5202',
					'name'       => 'PUJUT',
				),
			148 =>
				array(
					'id'         => '5202030',
					'regency_id' => '5202',
					'name'       => 'PRAYA TIMUR',
				),
			149 =>
				array(
					'id'         => '5202040',
					'regency_id' => '5202',
					'name'       => 'JANAPRIA',
				),
			150 =>
				array(
					'id'         => '5202050',
					'regency_id' => '5202',
					'name'       => 'KOPANG',
				),
			151 =>
				array(
					'id'         => '5202060',
					'regency_id' => '5202',
					'name'       => 'PRAYA',
				),
			152 =>
				array(
					'id'         => '5202061',
					'regency_id' => '5202',
					'name'       => 'PRAYA TENGAH',
				),
			153 =>
				array(
					'id'         => '5202070',
					'regency_id' => '5202',
					'name'       => 'JONGGAT',
				),
			154 =>
				array(
					'id'         => '5202080',
					'regency_id' => '5202',
					'name'       => 'PRINGGARATA',
				),
			155 =>
				array(
					'id'         => '5202090',
					'regency_id' => '5202',
					'name'       => 'BATUKLIANG',
				),
			156 =>
				array(
					'id'         => '5202091',
					'regency_id' => '5202',
					'name'       => 'BATUKLIANG UTARA',
				),
			157 =>
				array(
					'id'         => '5203010',
					'regency_id' => '5203',
					'name'       => 'KERUAK',
				),
			158 =>
				array(
					'id'         => '5203011',
					'regency_id' => '5203',
					'name'       => 'JEROWARU',
				),
			159 =>
				array(
					'id'         => '5203020',
					'regency_id' => '5203',
					'name'       => 'SAKRA',
				),
			160 =>
				array(
					'id'         => '5203021',
					'regency_id' => '5203',
					'name'       => 'SAKRA BARAT',
				),
			161 =>
				array(
					'id'         => '5203022',
					'regency_id' => '5203',
					'name'       => 'SAKRA TIMUR',
				),
			162 =>
				array(
					'id'         => '5203030',
					'regency_id' => '5203',
					'name'       => 'TERARA',
				),
			163 =>
				array(
					'id'         => '5203031',
					'regency_id' => '5203',
					'name'       => 'MONTONG GADING',
				),
			164 =>
				array(
					'id'         => '5203040',
					'regency_id' => '5203',
					'name'       => 'SIKUR',
				),
			165 =>
				array(
					'id'         => '5203050',
					'regency_id' => '5203',
					'name'       => 'MASBAGIK',
				),
			166 =>
				array(
					'id'         => '5203051',
					'regency_id' => '5203',
					'name'       => 'PRINGGASELA',
				),
			167 =>
				array(
					'id'         => '5203060',
					'regency_id' => '5203',
					'name'       => 'SUKAMULIA',
				),
			168 =>
				array(
					'id'         => '5203061',
					'regency_id' => '5203',
					'name'       => 'SURALAGA',
				),
			169 =>
				array(
					'id'         => '5203070',
					'regency_id' => '5203',
					'name'       => 'SELONG',
				),
			170 =>
				array(
					'id'         => '5203071',
					'regency_id' => '5203',
					'name'       => 'LABUHAN HAJI',
				),
			171 =>
				array(
					'id'         => '5203080',
					'regency_id' => '5203',
					'name'       => 'PRINGGABAYA',
				),
			172 =>
				array(
					'id'         => '5203081',
					'regency_id' => '5203',
					'name'       => 'SUELA',
				),
			173 =>
				array(
					'id'         => '5203090',
					'regency_id' => '5203',
					'name'       => 'AIKMEL',
				),
			174 =>
				array(
					'id'         => '5203091',
					'regency_id' => '5203',
					'name'       => 'WANASABA',
				),
			175 =>
				array(
					'id'         => '5203092',
					'regency_id' => '5203',
					'name'       => 'SEMBALUN',
				),
			176 =>
				array(
					'id'         => '5203100',
					'regency_id' => '5203',
					'name'       => 'SAMBELIA',
				),
			177 =>
				array(
					'id'         => '5204020',
					'regency_id' => '5204',
					'name'       => 'LUNYUK',
				),
			178 =>
				array(
					'id'         => '5204021',
					'regency_id' => '5204',
					'name'       => 'ORONG TELU',
				),
			179 =>
				array(
					'id'         => '5204050',
					'regency_id' => '5204',
					'name'       => 'ALAS',
				),
			180 =>
				array(
					'id'         => '5204051',
					'regency_id' => '5204',
					'name'       => 'ALAS BARAT',
				),
			181 =>
				array(
					'id'         => '5204052',
					'regency_id' => '5204',
					'name'       => 'BUER',
				),
			182 =>
				array(
					'id'         => '5204061',
					'regency_id' => '5204',
					'name'       => 'UTAN',
				),
			183 =>
				array(
					'id'         => '5204062',
					'regency_id' => '5204',
					'name'       => 'RHEE',
				),
			184 =>
				array(
					'id'         => '5204070',
					'regency_id' => '5204',
					'name'       => 'BATULANTEH',
				),
			185 =>
				array(
					'id'         => '5204080',
					'regency_id' => '5204',
					'name'       => 'SUMBAWA',
				),
			186 =>
				array(
					'id'         => '5204081',
					'regency_id' => '5204',
					'name'       => 'LABUHAN BADAS',
				),
			187 =>
				array(
					'id'         => '5204082',
					'regency_id' => '5204',
					'name'       => 'UNTER IWES',
				),
			188 =>
				array(
					'id'         => '5204090',
					'regency_id' => '5204',
					'name'       => 'MOYOHILIR',
				),
			189 =>
				array(
					'id'         => '5204091',
					'regency_id' => '5204',
					'name'       => 'MOYO UTARA',
				),
			190 =>
				array(
					'id'         => '5204100',
					'regency_id' => '5204',
					'name'       => 'MOYOHULU',
				),
			191 =>
				array(
					'id'         => '5204110',
					'regency_id' => '5204',
					'name'       => 'ROPANG',
				),
			192 =>
				array(
					'id'         => '5204111',
					'regency_id' => '5204',
					'name'       => 'LENANGGUAR',
				),
			193 =>
				array(
					'id'         => '5204112',
					'regency_id' => '5204',
					'name'       => 'LANTUNG',
				),
			194 =>
				array(
					'id'         => '5204121',
					'regency_id' => '5204',
					'name'       => 'LAPE',
				),
			195 =>
				array(
					'id'         => '5204122',
					'regency_id' => '5204',
					'name'       => 'LOPOK',
				),
			196 =>
				array(
					'id'         => '5204130',
					'regency_id' => '5204',
					'name'       => 'PLAMPANG',
				),
			197 =>
				array(
					'id'         => '5204131',
					'regency_id' => '5204',
					'name'       => 'LABANGKA',
				),
			198 =>
				array(
					'id'         => '5204132',
					'regency_id' => '5204',
					'name'       => 'MARONGE',
				),
			199 =>
				array(
					'id'         => '5204140',
					'regency_id' => '5204',
					'name'       => 'EMPANG',
				),
			200 =>
				array(
					'id'         => '5204141',
					'regency_id' => '5204',
					'name'       => 'TARANO',
				),
			201 =>
				array(
					'id'         => '5205010',
					'regency_id' => '5205',
					'name'       => 'HU\'U',
				),
			202 =>
				array(
					'id'         => '5205011',
					'regency_id' => '5205',
					'name'       => 'PAJO',
				),
			203 =>
				array(
					'id'         => '5205020',
					'regency_id' => '5205',
					'name'       => 'DOMPU',
				),
			204 =>
				array(
					'id'         => '5205030',
					'regency_id' => '5205',
					'name'       => 'WOJA',
				),
			205 =>
				array(
					'id'         => '5205040',
					'regency_id' => '5205',
					'name'       => 'KILO',
				),
			206 =>
				array(
					'id'         => '5205050',
					'regency_id' => '5205',
					'name'       => 'KEMPO',
				),
			207 =>
				array(
					'id'         => '5205051',
					'regency_id' => '5205',
					'name'       => 'MANGGALEWA',
				),
			208 =>
				array(
					'id'         => '5205060',
					'regency_id' => '5205',
					'name'       => 'PEKAT',
				),
			209 =>
				array(
					'id'         => '5206010',
					'regency_id' => '5206',
					'name'       => 'MONTA',
				),
			210 =>
				array(
					'id'         => '5206011',
					'regency_id' => '5206',
					'name'       => 'PARADO',
				),
			211 =>
				array(
					'id'         => '5206020',
					'regency_id' => '5206',
					'name'       => 'BOLO',
				),
			212 =>
				array(
					'id'         => '5206021',
					'regency_id' => '5206',
					'name'       => 'MADA PANGGA',
				),
			213 =>
				array(
					'id'         => '5206030',
					'regency_id' => '5206',
					'name'       => 'WOHA',
				),
			214 =>
				array(
					'id'         => '5206040',
					'regency_id' => '5206',
					'name'       => 'BELO',
				),
			215 =>
				array(
					'id'         => '5206041',
					'regency_id' => '5206',
					'name'       => 'PALIBELO',
				),
			216 =>
				array(
					'id'         => '5206050',
					'regency_id' => '5206',
					'name'       => 'WAWO',
				),
			217 =>
				array(
					'id'         => '5206051',
					'regency_id' => '5206',
					'name'       => 'LANGGUDU',
				),
			218 =>
				array(
					'id'         => '5206052',
					'regency_id' => '5206',
					'name'       => 'LAMBITU',
				),
			219 =>
				array(
					'id'         => '5206060',
					'regency_id' => '5206',
					'name'       => 'SAPE',
				),
			220 =>
				array(
					'id'         => '5206061',
					'regency_id' => '5206',
					'name'       => 'LAMBU',
				),
			221 =>
				array(
					'id'         => '5206070',
					'regency_id' => '5206',
					'name'       => 'WERA',
				),
			222 =>
				array(
					'id'         => '5206071',
					'regency_id' => '5206',
					'name'       => 'AMBALAWI',
				),
			223 =>
				array(
					'id'         => '5206080',
					'regency_id' => '5206',
					'name'       => 'DONGGO',
				),
			224 =>
				array(
					'id'         => '5206081',
					'regency_id' => '5206',
					'name'       => 'SOROMANDI',
				),
			225 =>
				array(
					'id'         => '5206090',
					'regency_id' => '5206',
					'name'       => 'SANGGAR',
				),
			226 =>
				array(
					'id'         => '5206091',
					'regency_id' => '5206',
					'name'       => 'TAMBORA',
				),
			227 =>
				array(
					'id'         => '5207010',
					'regency_id' => '5207',
					'name'       => 'SEKONGKANG',
				),
			228 =>
				array(
					'id'         => '5207020',
					'regency_id' => '5207',
					'name'       => 'JEREWEH',
				),
			229 =>
				array(
					'id'         => '5207021',
					'regency_id' => '5207',
					'name'       => 'MALUK',
				),
			230 =>
				array(
					'id'         => '5207030',
					'regency_id' => '5207',
					'name'       => 'TALIWANG',
				),
			231 =>
				array(
					'id'         => '5207031',
					'regency_id' => '5207',
					'name'       => 'BRANG ENE',
				),
			232 =>
				array(
					'id'         => '5207040',
					'regency_id' => '5207',
					'name'       => 'BRANG REA',
				),
			233 =>
				array(
					'id'         => '5207050',
					'regency_id' => '5207',
					'name'       => 'SETELUK',
				),
			234 =>
				array(
					'id'         => '5207051',
					'regency_id' => '5207',
					'name'       => 'POTO TANO',
				),
			235 =>
				array(
					'id'         => '5208010',
					'regency_id' => '5208',
					'name'       => 'PEMENANG',
				),
			236 =>
				array(
					'id'         => '5208020',
					'regency_id' => '5208',
					'name'       => 'TANJUNG',
				),
			237 =>
				array(
					'id'         => '5208030',
					'regency_id' => '5208',
					'name'       => 'GANGGA',
				),
			238 =>
				array(
					'id'         => '5208040',
					'regency_id' => '5208',
					'name'       => 'KAYANGAN',
				),
			239 =>
				array(
					'id'         => '5208050',
					'regency_id' => '5208',
					'name'       => 'BAYAN',
				),
			240 =>
				array(
					'id'         => '5271010',
					'regency_id' => '5271',
					'name'       => 'AMPENAN',
				),
			241 =>
				array(
					'id'         => '5271011',
					'regency_id' => '5271',
					'name'       => 'SEKARBELA',
				),
			242 =>
				array(
					'id'         => '5271020',
					'regency_id' => '5271',
					'name'       => 'MATARAM',
				),
			243 =>
				array(
					'id'         => '5271021',
					'regency_id' => '5271',
					'name'       => 'SELAPARANG',
				),
			244 =>
				array(
					'id'         => '5271030',
					'regency_id' => '5271',
					'name'       => 'CAKRANEGARA',
				),
			245 =>
				array(
					'id'         => '5271031',
					'regency_id' => '5271',
					'name'       => 'SANDUBAYA',
				),
			246 =>
				array(
					'id'         => '5272010',
					'regency_id' => '5272',
					'name'       => 'RASANAE BARAT',
				),
			247 =>
				array(
					'id'         => '5272011',
					'regency_id' => '5272',
					'name'       => 'MPUNDA',
				),
			248 =>
				array(
					'id'         => '5272020',
					'regency_id' => '5272',
					'name'       => 'RASANAE TIMUR',
				),
			249 =>
				array(
					'id'         => '5272021',
					'regency_id' => '5272',
					'name'       => 'RABA',
				),
			250 =>
				array(
					'id'         => '5272030',
					'regency_id' => '5272',
					'name'       => 'ASAKOTA',
				),
			251 =>
				array(
					'id'         => '5301021',
					'regency_id' => '5301',
					'name'       => 'LAMBOYA',
				),
			252 =>
				array(
					'id'         => '5301022',
					'regency_id' => '5301',
					'name'       => 'WANOKAKA',
				),
			253 =>
				array(
					'id'         => '5301023',
					'regency_id' => '5301',
					'name'       => 'LABOYA BARAT',
				),
			254 =>
				array(
					'id'         => '5301050',
					'regency_id' => '5301',
					'name'       => 'LOLI',
				),
			255 =>
				array(
					'id'         => '5301060',
					'regency_id' => '5301',
					'name'       => 'KOTA WAIKABUBAK',
				),
			256 =>
				array(
					'id'         => '5301072',
					'regency_id' => '5301',
					'name'       => 'TANA RIGHU',
				),
			257 =>
				array(
					'id'         => '5302010',
					'regency_id' => '5302',
					'name'       => 'LEWA',
				),
			258 =>
				array(
					'id'         => '5302011',
					'regency_id' => '5302',
					'name'       => 'NGGAHA ORIANGU',
				),
			259 =>
				array(
					'id'         => '5302012',
					'regency_id' => '5302',
					'name'       => 'LEWA TIDAHU',
				),
			260 =>
				array(
					'id'         => '5302013',
					'regency_id' => '5302',
					'name'       => 'KATALA HAMU LINGU',
				),
			261 =>
				array(
					'id'         => '5302020',
					'regency_id' => '5302',
					'name'       => 'TABUNDUNG',
				),
			262 =>
				array(
					'id'         => '5302021',
					'regency_id' => '5302',
					'name'       => 'PINUPAHAR',
				),
			263 =>
				array(
					'id'         => '5302030',
					'regency_id' => '5302',
					'name'       => 'PABERIWAI',
				),
			264 =>
				array(
					'id'         => '5302031',
					'regency_id' => '5302',
					'name'       => 'KARERA',
				),
			265 =>
				array(
					'id'         => '5302032',
					'regency_id' => '5302',
					'name'       => 'MATAWAI LA PAWU',
				),
			266 =>
				array(
					'id'         => '5302033',
					'regency_id' => '5302',
					'name'       => 'KAHAUNGU ETI',
				),
			267 =>
				array(
					'id'         => '5302034',
					'regency_id' => '5302',
					'name'       => 'MAHU',
				),
			268 =>
				array(
					'id'         => '5302035',
					'regency_id' => '5302',
					'name'       => 'NGADU NGALA',
				),
			269 =>
				array(
					'id'         => '5302040',
					'regency_id' => '5302',
					'name'       => 'PAHUNGA LODU',
				),
			270 =>
				array(
					'id'         => '5302041',
					'regency_id' => '5302',
					'name'       => 'WULA WAIJELU',
				),
			271 =>
				array(
					'id'         => '5302051',
					'regency_id' => '5302',
					'name'       => 'RINDI',
				),
			272 =>
				array(
					'id'         => '5302052',
					'regency_id' => '5302',
					'name'       => 'UMALULU',
				),
			273 =>
				array(
					'id'         => '5302060',
					'regency_id' => '5302',
					'name'       => 'PANDAWAI',
				),
			274 =>
				array(
					'id'         => '5302061',
					'regency_id' => '5302',
					'name'       => 'KAMBATA MAPAMBUHANG',
				),
			275 =>
				array(
					'id'         => '5302070',
					'regency_id' => '5302',
					'name'       => 'KOTA WAINGAPU',
				),
			276 =>
				array(
					'id'         => '5302071',
					'regency_id' => '5302',
					'name'       => 'KAMBERA',
				),
			277 =>
				array(
					'id'         => '5302080',
					'regency_id' => '5302',
					'name'       => 'HAHARU',
				),
			278 =>
				array(
					'id'         => '5302081',
					'regency_id' => '5302',
					'name'       => 'KANATANG',
				),
			279 =>
				array(
					'id'         => '5303100',
					'regency_id' => '5303',
					'name'       => 'SEMAU',
				),
			280 =>
				array(
					'id'         => '5303101',
					'regency_id' => '5303',
					'name'       => 'SEMAU SELATAN',
				),
			281 =>
				array(
					'id'         => '5303110',
					'regency_id' => '5303',
					'name'       => 'KUPANG BARAT',
				),
			282 =>
				array(
					'id'         => '5303111',
					'regency_id' => '5303',
					'name'       => 'NEKAMESE',
				),
			283 =>
				array(
					'id'         => '5303120',
					'regency_id' => '5303',
					'name'       => 'KUPANG TENGAH',
				),
			284 =>
				array(
					'id'         => '5303121',
					'regency_id' => '5303',
					'name'       => 'TAEBENU',
				),
			285 =>
				array(
					'id'         => '5303130',
					'regency_id' => '5303',
					'name'       => 'AMARASI',
				),
			286 =>
				array(
					'id'         => '5303131',
					'regency_id' => '5303',
					'name'       => 'AMARASI BARAT',
				),
			287 =>
				array(
					'id'         => '5303132',
					'regency_id' => '5303',
					'name'       => 'AMARASI SELATAN',
				),
			288 =>
				array(
					'id'         => '5303133',
					'regency_id' => '5303',
					'name'       => 'AMARASI TIMUR',
				),
			289 =>
				array(
					'id'         => '5303140',
					'regency_id' => '5303',
					'name'       => 'KUPANG TIMUR',
				),
			290 =>
				array(
					'id'         => '5303141',
					'regency_id' => '5303',
					'name'       => 'AMABI OEFETO TIMUR',
				),
			291 =>
				array(
					'id'         => '5303142',
					'regency_id' => '5303',
					'name'       => 'AMABI OEFETO',
				),
			292 =>
				array(
					'id'         => '5303150',
					'regency_id' => '5303',
					'name'       => 'SULAMU',
				),
			293 =>
				array(
					'id'         => '5303160',
					'regency_id' => '5303',
					'name'       => 'FATULEU',
				),
			294 =>
				array(
					'id'         => '5303161',
					'regency_id' => '5303',
					'name'       => 'FATULEU TENGAH',
				),
			295 =>
				array(
					'id'         => '5303162',
					'regency_id' => '5303',
					'name'       => 'FATULEU BARAT',
				),
			296 =>
				array(
					'id'         => '5303170',
					'regency_id' => '5303',
					'name'       => 'TAKARI',
				),
			297 =>
				array(
					'id'         => '5303180',
					'regency_id' => '5303',
					'name'       => 'AMFOANG SELATAN',
				),
			298 =>
				array(
					'id'         => '5303181',
					'regency_id' => '5303',
					'name'       => 'AMFOANG BARAT DAYA',
				),
			299 =>
				array(
					'id'         => '5303182',
					'regency_id' => '5303',
					'name'       => 'AMFOANG TENGAH',
				),
			300 =>
				array(
					'id'         => '5303190',
					'regency_id' => '5303',
					'name'       => 'AMFOANG UTARA',
				),
			301 =>
				array(
					'id'         => '5303191',
					'regency_id' => '5303',
					'name'       => 'AMFOANG BARAT LAUT',
				),
			302 =>
				array(
					'id'         => '5303192',
					'regency_id' => '5303',
					'name'       => 'AMFOANG TIMUR',
				),
			303 =>
				array(
					'id'         => '5304010',
					'regency_id' => '5304',
					'name'       => 'MOLLO UTARA',
				),
			304 =>
				array(
					'id'         => '5304011',
					'regency_id' => '5304',
					'name'       => 'FATUMNASI',
				),
			305 =>
				array(
					'id'         => '5304012',
					'regency_id' => '5304',
					'name'       => 'TOBU',
				),
			306 =>
				array(
					'id'         => '5304013',
					'regency_id' => '5304',
					'name'       => 'NUNBENA',
				),
			307 =>
				array(
					'id'         => '5304020',
					'regency_id' => '5304',
					'name'       => 'MOLLO SELATAN',
				),
			308 =>
				array(
					'id'         => '5304021',
					'regency_id' => '5304',
					'name'       => 'POLEN',
				),
			309 =>
				array(
					'id'         => '5304022',
					'regency_id' => '5304',
					'name'       => 'MOLLO BARAT',
				),
			310 =>
				array(
					'id'         => '5304023',
					'regency_id' => '5304',
					'name'       => 'MOLLO TENGAH',
				),
			311 =>
				array(
					'id'         => '5304030',
					'regency_id' => '5304',
					'name'       => 'KOTA SOE',
				),
			312 =>
				array(
					'id'         => '5304040',
					'regency_id' => '5304',
					'name'       => 'AMANUBAN BARAT',
				),
			313 =>
				array(
					'id'         => '5304041',
					'regency_id' => '5304',
					'name'       => 'BATU PUTIH',
				),
			314 =>
				array(
					'id'         => '5304042',
					'regency_id' => '5304',
					'name'       => 'KUATNANA',
				),
			315 =>
				array(
					'id'         => '5304050',
					'regency_id' => '5304',
					'name'       => 'AMANUBAN SELATAN',
				),
			316 =>
				array(
					'id'         => '5304051',
					'regency_id' => '5304',
					'name'       => 'NOEBEBA',
				),
			317 =>
				array(
					'id'         => '5304060',
					'regency_id' => '5304',
					'name'       => 'KUAN FATU',
				),
			318 =>
				array(
					'id'         => '5304061',
					'regency_id' => '5304',
					'name'       => 'KUALIN',
				),
			319 =>
				array(
					'id'         => '5304070',
					'regency_id' => '5304',
					'name'       => 'AMANUBAN TENGAH',
				),
			320 =>
				array(
					'id'         => '5304071',
					'regency_id' => '5304',
					'name'       => 'KOLBANO',
				),
			321 =>
				array(
					'id'         => '5304072',
					'regency_id' => '5304',
					'name'       => 'OENINO',
				),
			322 =>
				array(
					'id'         => '5304080',
					'regency_id' => '5304',
					'name'       => 'AMANUBAN TIMUR',
				),
			323 =>
				array(
					'id'         => '5304081',
					'regency_id' => '5304',
					'name'       => 'FAUTMOLO',
				),
			324 =>
				array(
					'id'         => '5304082',
					'regency_id' => '5304',
					'name'       => 'FATUKOPA',
				),
			325 =>
				array(
					'id'         => '5304090',
					'regency_id' => '5304',
					'name'       => 'KIE',
				),
			326 =>
				array(
					'id'         => '5304091',
					'regency_id' => '5304',
					'name'       => 'KOT\'OLIN',
				),
			327 =>
				array(
					'id'         => '5304100',
					'regency_id' => '5304',
					'name'       => 'AMANATUN SELATAN',
				),
			328 =>
				array(
					'id'         => '5304101',
					'regency_id' => '5304',
					'name'       => 'BOKING',
				),
			329 =>
				array(
					'id'         => '5304102',
					'regency_id' => '5304',
					'name'       => 'NUNKOLO',
				),
			330 =>
				array(
					'id'         => '5304103',
					'regency_id' => '5304',
					'name'       => 'NOEBANA',
				),
			331 =>
				array(
					'id'         => '5304104',
					'regency_id' => '5304',
					'name'       => 'SANTIAN',
				),
			332 =>
				array(
					'id'         => '5304110',
					'regency_id' => '5304',
					'name'       => 'AMANATUN UTARA',
				),
			333 =>
				array(
					'id'         => '5304111',
					'regency_id' => '5304',
					'name'       => 'TOIANAS',
				),
			334 =>
				array(
					'id'         => '5304112',
					'regency_id' => '5304',
					'name'       => 'KOKBAUN',
				),
			335 =>
				array(
					'id'         => '5305010',
					'regency_id' => '5305',
					'name'       => 'MIOMAFFO BARAT',
				),
			336 =>
				array(
					'id'         => '5305011',
					'regency_id' => '5305',
					'name'       => 'MIOMAFFO TENGAH',
				),
			337 =>
				array(
					'id'         => '5305012',
					'regency_id' => '5305',
					'name'       => 'MUSI',
				),
			338 =>
				array(
					'id'         => '5305013',
					'regency_id' => '5305',
					'name'       => 'MUTIS',
				),
			339 =>
				array(
					'id'         => '5305020',
					'regency_id' => '5305',
					'name'       => 'MIOMAFFO TIMUR',
				),
			340 =>
				array(
					'id'         => '5305021',
					'regency_id' => '5305',
					'name'       => 'NOEMUTI',
				),
			341 =>
				array(
					'id'         => '5305022',
					'regency_id' => '5305',
					'name'       => 'BIKOMI SELATAN',
				),
			342 =>
				array(
					'id'         => '5305023',
					'regency_id' => '5305',
					'name'       => 'BIKOMI TENGAH',
				),
			343 =>
				array(
					'id'         => '5305024',
					'regency_id' => '5305',
					'name'       => 'BIKOMI NILULAT',
				),
			344 =>
				array(
					'id'         => '5305025',
					'regency_id' => '5305',
					'name'       => 'BIKOMI UTARA',
				),
			345 =>
				array(
					'id'         => '5305026',
					'regency_id' => '5305',
					'name'       => 'NAIBENU',
				),
			346 =>
				array(
					'id'         => '5305027',
					'regency_id' => '5305',
					'name'       => 'NOEMUTI TIMUR',
				),
			347 =>
				array(
					'id'         => '5305030',
					'regency_id' => '5305',
					'name'       => 'KOTA KEFAMENANU',
				),
			348 =>
				array(
					'id'         => '5305040',
					'regency_id' => '5305',
					'name'       => 'INSANA',
				),
			349 =>
				array(
					'id'         => '5305041',
					'regency_id' => '5305',
					'name'       => 'INSANA UTARA',
				),
			350 =>
				array(
					'id'         => '5305042',
					'regency_id' => '5305',
					'name'       => 'INSANA BARAT',
				),
			351 =>
				array(
					'id'         => '5305043',
					'regency_id' => '5305',
					'name'       => 'INSANA TENGAH',
				),
			352 =>
				array(
					'id'         => '5305044',
					'regency_id' => '5305',
					'name'       => 'INSANA FAFINESU',
				),
			353 =>
				array(
					'id'         => '5305050',
					'regency_id' => '5305',
					'name'       => 'BIBOKI SELATAN',
				),
			354 =>
				array(
					'id'         => '5305051',
					'regency_id' => '5305',
					'name'       => 'BIBOKI TANPAH',
				),
			355 =>
				array(
					'id'         => '5305052',
					'regency_id' => '5305',
					'name'       => 'BIBOKI MOENLEU',
				),
			356 =>
				array(
					'id'         => '5305060',
					'regency_id' => '5305',
					'name'       => 'BIBOKI UTARA',
				),
			357 =>
				array(
					'id'         => '5305061',
					'regency_id' => '5305',
					'name'       => 'BIBOKI ANLEU',
				),
			358 =>
				array(
					'id'         => '5305062',
					'regency_id' => '5305',
					'name'       => 'BIBOKI FEOTLEU',
				),
			359 =>
				array(
					'id'         => '5306032',
					'regency_id' => '5306',
					'name'       => 'RAI MANUK',
				),
			360 =>
				array(
					'id'         => '5306050',
					'regency_id' => '5306',
					'name'       => 'TASIFETO BARAT',
				),
			361 =>
				array(
					'id'         => '5306051',
					'regency_id' => '5306',
					'name'       => 'KAKULUK MESAK',
				),
			362 =>
				array(
					'id'         => '5306052',
					'regency_id' => '5306',
					'name'       => 'NANAET DUBESI',
				),
			363 =>
				array(
					'id'         => '5306060',
					'regency_id' => '5306',
					'name'       => 'ATAMBUA',
				),
			364 =>
				array(
					'id'         => '5306061',
					'regency_id' => '5306',
					'name'       => 'ATAMBUA BARAT',
				),
			365 =>
				array(
					'id'         => '5306062',
					'regency_id' => '5306',
					'name'       => 'ATAMBUA SELATAN',
				),
			366 =>
				array(
					'id'         => '5306070',
					'regency_id' => '5306',
					'name'       => 'TASIFETO TIMUR',
				),
			367 =>
				array(
					'id'         => '5306071',
					'regency_id' => '5306',
					'name'       => 'RAIHAT',
				),
			368 =>
				array(
					'id'         => '5306072',
					'regency_id' => '5306',
					'name'       => 'LASIOLAT',
				),
			369 =>
				array(
					'id'         => '5306080',
					'regency_id' => '5306',
					'name'       => 'LAMAKNEN',
				),
			370 =>
				array(
					'id'         => '5306081',
					'regency_id' => '5306',
					'name'       => 'LAMAKNEN SELATAN',
				),
			371 =>
				array(
					'id'         => '5307010',
					'regency_id' => '5307',
					'name'       => 'PANTAR',
				),
			372 =>
				array(
					'id'         => '5307011',
					'regency_id' => '5307',
					'name'       => 'PANTAR BARAT',
				),
			373 =>
				array(
					'id'         => '5307012',
					'regency_id' => '5307',
					'name'       => 'PANTAR TIMUR',
				),
			374 =>
				array(
					'id'         => '5307013',
					'regency_id' => '5307',
					'name'       => 'PANTAR BARAT LAUT',
				),
			375 =>
				array(
					'id'         => '5307014',
					'regency_id' => '5307',
					'name'       => 'PANTAR TENGAH',
				),
			376 =>
				array(
					'id'         => '5307020',
					'regency_id' => '5307',
					'name'       => 'ALOR BARAT DAYA',
				),
			377 =>
				array(
					'id'         => '5307021',
					'regency_id' => '5307',
					'name'       => 'MATARU',
				),
			378 =>
				array(
					'id'         => '5307030',
					'regency_id' => '5307',
					'name'       => 'ALOR SELATAN',
				),
			379 =>
				array(
					'id'         => '5307040',
					'regency_id' => '5307',
					'name'       => 'ALOR TIMUR',
				),
			380 =>
				array(
					'id'         => '5307041',
					'regency_id' => '5307',
					'name'       => 'ALOR TIMUR LAUT',
				),
			381 =>
				array(
					'id'         => '5307042',
					'regency_id' => '5307',
					'name'       => 'PUREMAN',
				),
			382 =>
				array(
					'id'         => '5307050',
					'regency_id' => '5307',
					'name'       => 'TELUK MUTIARA',
				),
			383 =>
				array(
					'id'         => '5307051',
					'regency_id' => '5307',
					'name'       => 'KABOLA',
				),
			384 =>
				array(
					'id'         => '5307060',
					'regency_id' => '5307',
					'name'       => 'ALOR BARAT LAUT',
				),
			385 =>
				array(
					'id'         => '5307061',
					'regency_id' => '5307',
					'name'       => 'ALOR TENGAH UTARA',
				),
			386 =>
				array(
					'id'         => '5307062',
					'regency_id' => '5307',
					'name'       => 'PULAU PURA',
				),
			387 =>
				array(
					'id'         => '5307063',
					'regency_id' => '5307',
					'name'       => 'LEMBUR',
				),
			388 =>
				array(
					'id'         => '5308010',
					'regency_id' => '5308',
					'name'       => 'NAGAWUTUNG',
				),
			389 =>
				array(
					'id'         => '5308011',
					'regency_id' => '5308',
					'name'       => 'WULANDONI',
				),
			390 =>
				array(
					'id'         => '5308020',
					'regency_id' => '5308',
					'name'       => 'ATADEI',
				),
			391 =>
				array(
					'id'         => '5308030',
					'regency_id' => '5308',
					'name'       => 'ILE APE',
				),
			392 =>
				array(
					'id'         => '5308031',
					'regency_id' => '5308',
					'name'       => 'ILE APE TIMUR',
				),
			393 =>
				array(
					'id'         => '5308040',
					'regency_id' => '5308',
					'name'       => 'LEBATUKAN',
				),
			394 =>
				array(
					'id'         => '5308050',
					'regency_id' => '5308',
					'name'       => 'NUBATUKAN',
				),
			395 =>
				array(
					'id'         => '5308060',
					'regency_id' => '5308',
					'name'       => 'OMESURI',
				),
			396 =>
				array(
					'id'         => '5308070',
					'regency_id' => '5308',
					'name'       => 'BUYASARI',
				),
			397 =>
				array(
					'id'         => '5309010',
					'regency_id' => '5309',
					'name'       => 'WULANGGITANG',
				),
			398 =>
				array(
					'id'         => '5309011',
					'regency_id' => '5309',
					'name'       => 'TITEHENA',
				),
			399 =>
				array(
					'id'         => '5309012',
					'regency_id' => '5309',
					'name'       => 'ILEBURA',
				),
			400 =>
				array(
					'id'         => '5309020',
					'regency_id' => '5309',
					'name'       => 'TANJUNG BUNGA',
				),
			401 =>
				array(
					'id'         => '5309021',
					'regency_id' => '5309',
					'name'       => 'LEWO LEMA',
				),
			402 =>
				array(
					'id'         => '5309030',
					'regency_id' => '5309',
					'name'       => 'LARANTUKA',
				),
			403 =>
				array(
					'id'         => '5309031',
					'regency_id' => '5309',
					'name'       => 'ILE MANDIRI',
				),
			404 =>
				array(
					'id'         => '5309032',
					'regency_id' => '5309',
					'name'       => 'DEMON PAGONG',
				),
			405 =>
				array(
					'id'         => '5309040',
					'regency_id' => '5309',
					'name'       => 'SOLOR BARAT',
				),
			406 =>
				array(
					'id'         => '5309041',
					'regency_id' => '5309',
					'name'       => 'SOLOR SELATAN',
				),
			407 =>
				array(
					'id'         => '5309050',
					'regency_id' => '5309',
					'name'       => 'SOLOR TIMUR',
				),
			408 =>
				array(
					'id'         => '5309060',
					'regency_id' => '5309',
					'name'       => 'ADONARA BARAT',
				),
			409 =>
				array(
					'id'         => '5309061',
					'regency_id' => '5309',
					'name'       => 'WOTAN ULU MADO',
				),
			410 =>
				array(
					'id'         => '5309062',
					'regency_id' => '5309',
					'name'       => 'ADONARA TENGAH',
				),
			411 =>
				array(
					'id'         => '5309070',
					'regency_id' => '5309',
					'name'       => 'ADONARA TIMUR',
				),
			412 =>
				array(
					'id'         => '5309071',
					'regency_id' => '5309',
					'name'       => 'ILE BOLENG',
				),
			413 =>
				array(
					'id'         => '5309072',
					'regency_id' => '5309',
					'name'       => 'WITIHAMA',
				),
			414 =>
				array(
					'id'         => '5309073',
					'regency_id' => '5309',
					'name'       => 'KELUBAGOLIT',
				),
			415 =>
				array(
					'id'         => '5309074',
					'regency_id' => '5309',
					'name'       => 'ADONARA',
				),
			416 =>
				array(
					'id'         => '5310010',
					'regency_id' => '5310',
					'name'       => 'PAGA',
				),
			417 =>
				array(
					'id'         => '5310011',
					'regency_id' => '5310',
					'name'       => 'MEGO',
				),
			418 =>
				array(
					'id'         => '5310012',
					'regency_id' => '5310',
					'name'       => 'TANA WAWO',
				),
			419 =>
				array(
					'id'         => '5310020',
					'regency_id' => '5310',
					'name'       => 'LELA',
				),
			420 =>
				array(
					'id'         => '5310030',
					'regency_id' => '5310',
					'name'       => 'BOLA',
				),
			421 =>
				array(
					'id'         => '5310031',
					'regency_id' => '5310',
					'name'       => 'DORENG',
				),
			422 =>
				array(
					'id'         => '5310032',
					'regency_id' => '5310',
					'name'       => 'MAPITARA',
				),
			423 =>
				array(
					'id'         => '5310040',
					'regency_id' => '5310',
					'name'       => 'TALIBURA',
				),
			424 =>
				array(
					'id'         => '5310041',
					'regency_id' => '5310',
					'name'       => 'WAIGETE',
				),
			425 =>
				array(
					'id'         => '5310042',
					'regency_id' => '5310',
					'name'       => 'WAIBLAMA',
				),
			426 =>
				array(
					'id'         => '5310050',
					'regency_id' => '5310',
					'name'       => 'KEWAPANTE',
				),
			427 =>
				array(
					'id'         => '5310051',
					'regency_id' => '5310',
					'name'       => 'HEWOKLOANG',
				),
			428 =>
				array(
					'id'         => '5310052',
					'regency_id' => '5310',
					'name'       => 'KANGAE',
				),
			429 =>
				array(
					'id'         => '5310061',
					'regency_id' => '5310',
					'name'       => 'PALUE',
				),
			430 =>
				array(
					'id'         => '5310062',
					'regency_id' => '5310',
					'name'       => 'KOTING',
				),
			431 =>
				array(
					'id'         => '5310063',
					'regency_id' => '5310',
					'name'       => 'NELLE',
				),
			432 =>
				array(
					'id'         => '5310070',
					'regency_id' => '5310',
					'name'       => 'NITA',
				),
			433 =>
				array(
					'id'         => '5310071',
					'regency_id' => '5310',
					'name'       => 'MAGEPANDA',
				),
			434 =>
				array(
					'id'         => '5310080',
					'regency_id' => '5310',
					'name'       => 'ALOK',
				),
			435 =>
				array(
					'id'         => '5310081',
					'regency_id' => '5310',
					'name'       => 'ALOK BARAT',
				),
			436 =>
				array(
					'id'         => '5310082',
					'regency_id' => '5310',
					'name'       => 'ALOK TIMUR',
				),
			437 =>
				array(
					'id'         => '5311010',
					'regency_id' => '5311',
					'name'       => 'NANGAPANDA',
				),
			438 =>
				array(
					'id'         => '5311011',
					'regency_id' => '5311',
					'name'       => 'PULAU ENDE',
				),
			439 =>
				array(
					'id'         => '5311012',
					'regency_id' => '5311',
					'name'       => 'MAUKARO',
				),
			440 =>
				array(
					'id'         => '5311020',
					'regency_id' => '5311',
					'name'       => 'ENDE',
				),
			441 =>
				array(
					'id'         => '5311030',
					'regency_id' => '5311',
					'name'       => 'ENDE SELATAN',
				),
			442 =>
				array(
					'id'         => '5311031',
					'regency_id' => '5311',
					'name'       => 'ENDE TIMUR',
				),
			443 =>
				array(
					'id'         => '5311032',
					'regency_id' => '5311',
					'name'       => 'ENDE TENGAH',
				),
			444 =>
				array(
					'id'         => '5311033',
					'regency_id' => '5311',
					'name'       => 'ENDE UTARA',
				),
			445 =>
				array(
					'id'         => '5311040',
					'regency_id' => '5311',
					'name'       => 'NDONA',
				),
			446 =>
				array(
					'id'         => '5311041',
					'regency_id' => '5311',
					'name'       => 'NDONA TIMUR',
				),
			447 =>
				array(
					'id'         => '5311050',
					'regency_id' => '5311',
					'name'       => 'WOLOWARU',
				),
			448 =>
				array(
					'id'         => '5311051',
					'regency_id' => '5311',
					'name'       => 'WOLOJITA',
				),
			449 =>
				array(
					'id'         => '5311052',
					'regency_id' => '5311',
					'name'       => 'LIO TIMUR',
				),
			450 =>
				array(
					'id'         => '5311053',
					'regency_id' => '5311',
					'name'       => 'KELIMUTU',
				),
			451 =>
				array(
					'id'         => '5311054',
					'regency_id' => '5311',
					'name'       => 'NDORI',
				),
			452 =>
				array(
					'id'         => '5311060',
					'regency_id' => '5311',
					'name'       => 'MAUROLE',
				),
			453 =>
				array(
					'id'         => '5311061',
					'regency_id' => '5311',
					'name'       => 'KOTABARU',
				),
			454 =>
				array(
					'id'         => '5311062',
					'regency_id' => '5311',
					'name'       => 'DETUKELI',
				),
			455 =>
				array(
					'id'         => '5311063',
					'regency_id' => '5311',
					'name'       => 'LEPEMBUSU KELISOKE',
				),
			456 =>
				array(
					'id'         => '5311070',
					'regency_id' => '5311',
					'name'       => 'DETUSOKO',
				),
			457 =>
				array(
					'id'         => '5311071',
					'regency_id' => '5311',
					'name'       => 'WEWARIA',
				),
			458 =>
				array(
					'id'         => '5312010',
					'regency_id' => '5312',
					'name'       => 'AIMERE',
				),
			459 =>
				array(
					'id'         => '5312011',
					'regency_id' => '5312',
					'name'       => 'JEREBUU',
				),
			460 =>
				array(
					'id'         => '5312012',
					'regency_id' => '5312',
					'name'       => 'INERIE',
				),
			461 =>
				array(
					'id'         => '5312020',
					'regency_id' => '5312',
					'name'       => 'BAJAWA',
				),
			462 =>
				array(
					'id'         => '5312030',
					'regency_id' => '5312',
					'name'       => 'GOLEWA',
				),
			463 =>
				array(
					'id'         => '5312031',
					'regency_id' => '5312',
					'name'       => 'GOLEWA SELATAN',
				),
			464 =>
				array(
					'id'         => '5312032',
					'regency_id' => '5312',
					'name'       => 'GOLEWA BARAT',
				),
			465 =>
				array(
					'id'         => '5312070',
					'regency_id' => '5312',
					'name'       => 'BAJAWA UTARA',
				),
			466 =>
				array(
					'id'         => '5312071',
					'regency_id' => '5312',
					'name'       => 'SOA',
				),
			467 =>
				array(
					'id'         => '5312080',
					'regency_id' => '5312',
					'name'       => 'RIUNG',
				),
			468 =>
				array(
					'id'         => '5312081',
					'regency_id' => '5312',
					'name'       => 'RIUNG BARAT',
				),
			469 =>
				array(
					'id'         => '5312082',
					'regency_id' => '5312',
					'name'       => 'WOLOMEZE',
				),
			470 =>
				array(
					'id'         => '5313040',
					'regency_id' => '5313',
					'name'       => 'SATAR MESE',
				),
			471 =>
				array(
					'id'         => '5313041',
					'regency_id' => '5313',
					'name'       => 'SATAR MESE BARAT',
				),
			472 =>
				array(
					'id'         => '5313042',
					'regency_id' => '5313',
					'name'       => 'SATAR MESE UTARA',
				),
			473 =>
				array(
					'id'         => '5313110',
					'regency_id' => '5313',
					'name'       => 'LANGKE REMBONG',
				),
			474 =>
				array(
					'id'         => '5313120',
					'regency_id' => '5313',
					'name'       => 'RUTENG',
				),
			475 =>
				array(
					'id'         => '5313121',
					'regency_id' => '5313',
					'name'       => 'WAE RII',
				),
			476 =>
				array(
					'id'         => '5313122',
					'regency_id' => '5313',
					'name'       => 'LELAK',
				),
			477 =>
				array(
					'id'         => '5313123',
					'regency_id' => '5313',
					'name'       => 'RAHONG UTARA',
				),
			478 =>
				array(
					'id'         => '5313130',
					'regency_id' => '5313',
					'name'       => 'CIBAL',
				),
			479 =>
				array(
					'id'         => '5313131',
					'regency_id' => '5313',
					'name'       => 'CIBAL BARAT',
				),
			480 =>
				array(
					'id'         => '5313140',
					'regency_id' => '5313',
					'name'       => 'REOK',
				),
			481 =>
				array(
					'id'         => '5313141',
					'regency_id' => '5313',
					'name'       => 'REOK BARAT',
				),
			482 =>
				array(
					'id'         => '5314010',
					'regency_id' => '5314',
					'name'       => 'ROTE BARAT DAYA',
				),
			483 =>
				array(
					'id'         => '5314020',
					'regency_id' => '5314',
					'name'       => 'ROTE BARAT LAUT',
				),
			484 =>
				array(
					'id'         => '5314030',
					'regency_id' => '5314',
					'name'       => 'LOBALAIN',
				),
			485 =>
				array(
					'id'         => '5314040',
					'regency_id' => '5314',
					'name'       => 'ROTE TENGAH',
				),
			486 =>
				array(
					'id'         => '5314041',
					'regency_id' => '5314',
					'name'       => 'ROTE SELATAN',
				),
			487 =>
				array(
					'id'         => '5314050',
					'regency_id' => '5314',
					'name'       => 'PANTAI BARU',
				),
			488 =>
				array(
					'id'         => '5314060',
					'regency_id' => '5314',
					'name'       => 'ROTE TIMUR',
				),
			489 =>
				array(
					'id'         => '5314061',
					'regency_id' => '5314',
					'name'       => 'LANDU LEKO',
				),
			490 =>
				array(
					'id'         => '5314070',
					'regency_id' => '5314',
					'name'       => 'ROTE BARAT',
				),
			491 =>
				array(
					'id'         => '5314071',
					'regency_id' => '5314',
					'name'       => 'NDAO NUSE',
				),
			492 =>
				array(
					'id'         => '5315010',
					'regency_id' => '5315',
					'name'       => 'KOMODO',
				),
			493 =>
				array(
					'id'         => '5315011',
					'regency_id' => '5315',
					'name'       => 'BOLENG',
				),
			494 =>
				array(
					'id'         => '5315020',
					'regency_id' => '5315',
					'name'       => 'SANO NGGOANG',
				),
			495 =>
				array(
					'id'         => '5315021',
					'regency_id' => '5315',
					'name'       => 'MBELILING',
				),
			496 =>
				array(
					'id'         => '5315030',
					'regency_id' => '5315',
					'name'       => 'LEMBOR',
				),
			497 =>
				array(
					'id'         => '5315031',
					'regency_id' => '5315',
					'name'       => 'WELAK',
				),
			498 =>
				array(
					'id'         => '5315032',
					'regency_id' => '5315',
					'name'       => 'LEMBOR SELATAN',
				),
			499 =>
				array(
					'id'         => '5315040',
					'regency_id' => '5315',
					'name'       => 'KUWUS',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '5315041',
					'regency_id' => '5315',
					'name'       => 'NDOSO',
				),
			1   =>
				array(
					'id'         => '5315050',
					'regency_id' => '5315',
					'name'       => 'MACANG PACAR',
				),
			2   =>
				array(
					'id'         => '5316010',
					'regency_id' => '5316',
					'name'       => 'KATIKUTANA',
				),
			3   =>
				array(
					'id'         => '5316011',
					'regency_id' => '5316',
					'name'       => 'KATIKUTANA SELATAN',
				),
			4   =>
				array(
					'id'         => '5316020',
					'regency_id' => '5316',
					'name'       => 'UMBU RATU NGGAY BARAT',
				),
			5   =>
				array(
					'id'         => '5316030',
					'regency_id' => '5316',
					'name'       => 'UMBU RATU NGGAY',
				),
			6   =>
				array(
					'id'         => '5316040',
					'regency_id' => '5316',
					'name'       => 'MAMBORO',
				),
			7   =>
				array(
					'id'         => '5317010',
					'regency_id' => '5317',
					'name'       => 'KODI BANGEDO',
				),
			8   =>
				array(
					'id'         => '5317011',
					'regency_id' => '5317',
					'name'       => 'KODI BALAGHAR',
				),
			9   =>
				array(
					'id'         => '5317020',
					'regency_id' => '5317',
					'name'       => 'KODI',
				),
			10  =>
				array(
					'id'         => '5317030',
					'regency_id' => '5317',
					'name'       => 'KODI UTARA',
				),
			11  =>
				array(
					'id'         => '5317040',
					'regency_id' => '5317',
					'name'       => 'WEWEWA SELATAN',
				),
			12  =>
				array(
					'id'         => '5317050',
					'regency_id' => '5317',
					'name'       => 'WEWEWA BARAT',
				),
			13  =>
				array(
					'id'         => '5317060',
					'regency_id' => '5317',
					'name'       => 'WEWEWA TIMUR',
				),
			14  =>
				array(
					'id'         => '5317061',
					'regency_id' => '5317',
					'name'       => 'WEWEWA TENGAH',
				),
			15  =>
				array(
					'id'         => '5317070',
					'regency_id' => '5317',
					'name'       => 'WEWEWA UTARA',
				),
			16  =>
				array(
					'id'         => '5317080',
					'regency_id' => '5317',
					'name'       => 'LOURA',
				),
			17  =>
				array(
					'id'         => '5317081',
					'regency_id' => '5317',
					'name'       => 'KOTA TAMBOLAKA',
				),
			18  =>
				array(
					'id'         => '5318010',
					'regency_id' => '5318',
					'name'       => 'MAUPONGGO',
				),
			19  =>
				array(
					'id'         => '5318020',
					'regency_id' => '5318',
					'name'       => 'KEO TENGAH',
				),
			20  =>
				array(
					'id'         => '5318030',
					'regency_id' => '5318',
					'name'       => 'NANGARORO',
				),
			21  =>
				array(
					'id'         => '5318040',
					'regency_id' => '5318',
					'name'       => 'BOAWAE',
				),
			22  =>
				array(
					'id'         => '5318050',
					'regency_id' => '5318',
					'name'       => 'AESESA SELATAN',
				),
			23  =>
				array(
					'id'         => '5318060',
					'regency_id' => '5318',
					'name'       => 'AESESA',
				),
			24  =>
				array(
					'id'         => '5318070',
					'regency_id' => '5318',
					'name'       => 'WOLOWAE',
				),
			25  =>
				array(
					'id'         => '5319010',
					'regency_id' => '5319',
					'name'       => 'BORONG',
				),
			26  =>
				array(
					'id'         => '5319011',
					'regency_id' => '5319',
					'name'       => 'RANA MESE',
				),
			27  =>
				array(
					'id'         => '5319020',
					'regency_id' => '5319',
					'name'       => 'KOTA KOMBA',
				),
			28  =>
				array(
					'id'         => '5319030',
					'regency_id' => '5319',
					'name'       => 'ELAR',
				),
			29  =>
				array(
					'id'         => '5319031',
					'regency_id' => '5319',
					'name'       => 'ELAR SELATAN',
				),
			30  =>
				array(
					'id'         => '5319040',
					'regency_id' => '5319',
					'name'       => 'SAMBI RAMPAS',
				),
			31  =>
				array(
					'id'         => '5319050',
					'regency_id' => '5319',
					'name'       => 'POCO RANAKA',
				),
			32  =>
				array(
					'id'         => '5319051',
					'regency_id' => '5319',
					'name'       => 'POCO RANAKA TIMUR',
				),
			33  =>
				array(
					'id'         => '5319060',
					'regency_id' => '5319',
					'name'       => 'LAMBA LEDA',
				),
			34  =>
				array(
					'id'         => '5320010',
					'regency_id' => '5320',
					'name'       => 'RAIJUA',
				),
			35  =>
				array(
					'id'         => '5320020',
					'regency_id' => '5320',
					'name'       => 'HAWU MEHARA',
				),
			36  =>
				array(
					'id'         => '5320030',
					'regency_id' => '5320',
					'name'       => 'SABU LIAE',
				),
			37  =>
				array(
					'id'         => '5320040',
					'regency_id' => '5320',
					'name'       => 'SABU BARAT',
				),
			38  =>
				array(
					'id'         => '5320050',
					'regency_id' => '5320',
					'name'       => 'SABU TENGAH',
				),
			39  =>
				array(
					'id'         => '5320060',
					'regency_id' => '5320',
					'name'       => 'SABU TIMUR',
				),
			40  =>
				array(
					'id'         => '5321010',
					'regency_id' => '5321',
					'name'       => 'WEWIKU',
				),
			41  =>
				array(
					'id'         => '5321020',
					'regency_id' => '5321',
					'name'       => 'MALAKA BARAT',
				),
			42  =>
				array(
					'id'         => '5321030',
					'regency_id' => '5321',
					'name'       => 'WELIMAN',
				),
			43  =>
				array(
					'id'         => '5321040',
					'regency_id' => '5321',
					'name'       => 'RINHAT',
				),
			44  =>
				array(
					'id'         => '5321050',
					'regency_id' => '5321',
					'name'       => 'IO KUFEU',
				),
			45  =>
				array(
					'id'         => '5321060',
					'regency_id' => '5321',
					'name'       => 'SASITA MEAN',
				),
			46  =>
				array(
					'id'         => '5321070',
					'regency_id' => '5321',
					'name'       => 'MALAKA TENGAH',
				),
			47  =>
				array(
					'id'         => '5321080',
					'regency_id' => '5321',
					'name'       => 'BOTIN LEOBELE',
				),
			48  =>
				array(
					'id'         => '5321090',
					'regency_id' => '5321',
					'name'       => 'LAEN MANEN',
				),
			49  =>
				array(
					'id'         => '5321100',
					'regency_id' => '5321',
					'name'       => 'MALAKA TIMUR',
				),
			50  =>
				array(
					'id'         => '5321110',
					'regency_id' => '5321',
					'name'       => 'KOBALIMA',
				),
			51  =>
				array(
					'id'         => '5321120',
					'regency_id' => '5321',
					'name'       => 'KOBALIMA TIMUR',
				),
			52  =>
				array(
					'id'         => '5371010',
					'regency_id' => '5371',
					'name'       => 'ALAK',
				),
			53  =>
				array(
					'id'         => '5371020',
					'regency_id' => '5371',
					'name'       => 'MAULAFA',
				),
			54  =>
				array(
					'id'         => '5371030',
					'regency_id' => '5371',
					'name'       => 'OEBOBO',
				),
			55  =>
				array(
					'id'         => '5371031',
					'regency_id' => '5371',
					'name'       => 'KOTA RAJA',
				),
			56  =>
				array(
					'id'         => '5371040',
					'regency_id' => '5371',
					'name'       => 'KELAPA LIMA',
				),
			57  =>
				array(
					'id'         => '5371041',
					'regency_id' => '5371',
					'name'       => 'KOTA LAMA',
				),
			58  =>
				array(
					'id'         => '6101010',
					'regency_id' => '6101',
					'name'       => 'SELAKAU',
				),
			59  =>
				array(
					'id'         => '6101011',
					'regency_id' => '6101',
					'name'       => 'SELAKAU TIMUR',
				),
			60  =>
				array(
					'id'         => '6101020',
					'regency_id' => '6101',
					'name'       => 'PEMANGKAT',
				),
			61  =>
				array(
					'id'         => '6101021',
					'regency_id' => '6101',
					'name'       => 'SEMPARUK',
				),
			62  =>
				array(
					'id'         => '6101022',
					'regency_id' => '6101',
					'name'       => 'SALATIGA',
				),
			63  =>
				array(
					'id'         => '6101030',
					'regency_id' => '6101',
					'name'       => 'TEBAS',
				),
			64  =>
				array(
					'id'         => '6101031',
					'regency_id' => '6101',
					'name'       => 'TEKARANG',
				),
			65  =>
				array(
					'id'         => '6101040',
					'regency_id' => '6101',
					'name'       => 'SAMBAS',
				),
			66  =>
				array(
					'id'         => '6101041',
					'regency_id' => '6101',
					'name'       => 'SUBAH',
				),
			67  =>
				array(
					'id'         => '6101042',
					'regency_id' => '6101',
					'name'       => 'SEBAWI',
				),
			68  =>
				array(
					'id'         => '6101043',
					'regency_id' => '6101',
					'name'       => 'SAJAD',
				),
			69  =>
				array(
					'id'         => '6101050',
					'regency_id' => '6101',
					'name'       => 'JAWAI',
				),
			70  =>
				array(
					'id'         => '6101051',
					'regency_id' => '6101',
					'name'       => 'JAWAI SELATAN',
				),
			71  =>
				array(
					'id'         => '6101060',
					'regency_id' => '6101',
					'name'       => 'TELUK KERAMAT',
				),
			72  =>
				array(
					'id'         => '6101061',
					'regency_id' => '6101',
					'name'       => 'GALING',
				),
			73  =>
				array(
					'id'         => '6101062',
					'regency_id' => '6101',
					'name'       => 'TANGARAN',
				),
			74  =>
				array(
					'id'         => '6101070',
					'regency_id' => '6101',
					'name'       => 'SEJANGKUNG',
				),
			75  =>
				array(
					'id'         => '6101080',
					'regency_id' => '6101',
					'name'       => 'SAJINGAN BESAR',
				),
			76  =>
				array(
					'id'         => '6101090',
					'regency_id' => '6101',
					'name'       => 'PALOH',
				),
			77  =>
				array(
					'id'         => '6102010',
					'regency_id' => '6102',
					'name'       => 'SUNGAI RAYA',
				),
			78  =>
				array(
					'id'         => '6102011',
					'regency_id' => '6102',
					'name'       => 'CAPKALA',
				),
			79  =>
				array(
					'id'         => '6102012',
					'regency_id' => '6102',
					'name'       => 'SUNGAI RAYA KEPULAUAN',
				),
			80  =>
				array(
					'id'         => '6102030',
					'regency_id' => '6102',
					'name'       => 'SAMALANTAN',
				),
			81  =>
				array(
					'id'         => '6102031',
					'regency_id' => '6102',
					'name'       => 'MONTERADO',
				),
			82  =>
				array(
					'id'         => '6102032',
					'regency_id' => '6102',
					'name'       => 'LEMBAH BAWANG',
				),
			83  =>
				array(
					'id'         => '6102040',
					'regency_id' => '6102',
					'name'       => 'BENGKAYANG',
				),
			84  =>
				array(
					'id'         => '6102041',
					'regency_id' => '6102',
					'name'       => 'TERIAK',
				),
			85  =>
				array(
					'id'         => '6102042',
					'regency_id' => '6102',
					'name'       => 'SUNGAI BETUNG',
				),
			86  =>
				array(
					'id'         => '6102050',
					'regency_id' => '6102',
					'name'       => 'LEDO',
				),
			87  =>
				array(
					'id'         => '6102051',
					'regency_id' => '6102',
					'name'       => 'SUTI SEMARANG',
				),
			88  =>
				array(
					'id'         => '6102052',
					'regency_id' => '6102',
					'name'       => 'LUMAR',
				),
			89  =>
				array(
					'id'         => '6102060',
					'regency_id' => '6102',
					'name'       => 'SANGGAU LEDO',
				),
			90  =>
				array(
					'id'         => '6102061',
					'regency_id' => '6102',
					'name'       => 'TUJUHBELAS',
				),
			91  =>
				array(
					'id'         => '6102070',
					'regency_id' => '6102',
					'name'       => 'SELUAS',
				),
			92  =>
				array(
					'id'         => '6102080',
					'regency_id' => '6102',
					'name'       => 'JAGOI BABANG',
				),
			93  =>
				array(
					'id'         => '6102081',
					'regency_id' => '6102',
					'name'       => 'SIDING',
				),
			94  =>
				array(
					'id'         => '6103020',
					'regency_id' => '6103',
					'name'       => 'SEBANGKI',
				),
			95  =>
				array(
					'id'         => '6103030',
					'regency_id' => '6103',
					'name'       => 'NGABANG',
				),
			96  =>
				array(
					'id'         => '6103031',
					'regency_id' => '6103',
					'name'       => 'JELIMPO',
				),
			97  =>
				array(
					'id'         => '6103040',
					'regency_id' => '6103',
					'name'       => 'SENGAH TEMILA',
				),
			98  =>
				array(
					'id'         => '6103050',
					'regency_id' => '6103',
					'name'       => 'MANDOR',
				),
			99  =>
				array(
					'id'         => '6103060',
					'regency_id' => '6103',
					'name'       => 'MENJALIN',
				),
			100 =>
				array(
					'id'         => '6103070',
					'regency_id' => '6103',
					'name'       => 'MEMPAWAH HULU',
				),
			101 =>
				array(
					'id'         => '6103071',
					'regency_id' => '6103',
					'name'       => 'SOMPAK',
				),
			102 =>
				array(
					'id'         => '6103080',
					'regency_id' => '6103',
					'name'       => 'MENYUKE',
				),
			103 =>
				array(
					'id'         => '6103081',
					'regency_id' => '6103',
					'name'       => 'BANYUKE HULU',
				),
			104 =>
				array(
					'id'         => '6103090',
					'regency_id' => '6103',
					'name'       => 'MERANTI',
				),
			105 =>
				array(
					'id'         => '6103100',
					'regency_id' => '6103',
					'name'       => 'KUALA BEHE',
				),
			106 =>
				array(
					'id'         => '6103110',
					'regency_id' => '6103',
					'name'       => 'AIR BESAR',
				),
			107 =>
				array(
					'id'         => '6104080',
					'regency_id' => '6104',
					'name'       => 'SIANTAN',
				),
			108 =>
				array(
					'id'         => '6104081',
					'regency_id' => '6104',
					'name'       => 'SEGEDONG',
				),
			109 =>
				array(
					'id'         => '6104090',
					'regency_id' => '6104',
					'name'       => 'SUNGAI PINYUH',
				),
			110 =>
				array(
					'id'         => '6104091',
					'regency_id' => '6104',
					'name'       => 'ANJONGAN',
				),
			111 =>
				array(
					'id'         => '6104100',
					'regency_id' => '6104',
					'name'       => 'MEMPAWAH HILIR',
				),
			112 =>
				array(
					'id'         => '6104101',
					'regency_id' => '6104',
					'name'       => 'MEMPAWAH TIMUR',
				),
			113 =>
				array(
					'id'         => '6104110',
					'regency_id' => '6104',
					'name'       => 'SUNGAI KUNYIT',
				),
			114 =>
				array(
					'id'         => '6104120',
					'regency_id' => '6104',
					'name'       => 'TOHO',
				),
			115 =>
				array(
					'id'         => '6104121',
					'regency_id' => '6104',
					'name'       => 'SADANIANG',
				),
			116 =>
				array(
					'id'         => '6105010',
					'regency_id' => '6105',
					'name'       => 'TOBA',
				),
			117 =>
				array(
					'id'         => '6105020',
					'regency_id' => '6105',
					'name'       => 'MELIAU',
				),
			118 =>
				array(
					'id'         => '6105060',
					'regency_id' => '6105',
					'name'       => 'KAPUAS',
				),
			119 =>
				array(
					'id'         => '6105070',
					'regency_id' => '6105',
					'name'       => 'MUKOK',
				),
			120 =>
				array(
					'id'         => '6105120',
					'regency_id' => '6105',
					'name'       => 'JANGKANG',
				),
			121 =>
				array(
					'id'         => '6105130',
					'regency_id' => '6105',
					'name'       => 'BONTI',
				),
			122 =>
				array(
					'id'         => '6105140',
					'regency_id' => '6105',
					'name'       => 'PARINDU',
				),
			123 =>
				array(
					'id'         => '6105150',
					'regency_id' => '6105',
					'name'       => 'TAYAN HILIR',
				),
			124 =>
				array(
					'id'         => '6105160',
					'regency_id' => '6105',
					'name'       => 'BALAI',
				),
			125 =>
				array(
					'id'         => '6105170',
					'regency_id' => '6105',
					'name'       => 'TAYAN HULU',
				),
			126 =>
				array(
					'id'         => '6105180',
					'regency_id' => '6105',
					'name'       => 'KEMBAYAN',
				),
			127 =>
				array(
					'id'         => '6105190',
					'regency_id' => '6105',
					'name'       => 'BEDUWAI',
				),
			128 =>
				array(
					'id'         => '6105200',
					'regency_id' => '6105',
					'name'       => 'NOYAN',
				),
			129 =>
				array(
					'id'         => '6105210',
					'regency_id' => '6105',
					'name'       => 'SEKAYAM',
				),
			130 =>
				array(
					'id'         => '6105220',
					'regency_id' => '6105',
					'name'       => 'ENTIKONG',
				),
			131 =>
				array(
					'id'         => '6106010',
					'regency_id' => '6106',
					'name'       => 'KENDAWANGAN',
				),
			132 =>
				array(
					'id'         => '6106020',
					'regency_id' => '6106',
					'name'       => 'MANIS MATA',
				),
			133 =>
				array(
					'id'         => '6106030',
					'regency_id' => '6106',
					'name'       => 'MARAU',
				),
			134 =>
				array(
					'id'         => '6106031',
					'regency_id' => '6106',
					'name'       => 'SINGKUP',
				),
			135 =>
				array(
					'id'         => '6106032',
					'regency_id' => '6106',
					'name'       => 'AIR UPAS',
				),
			136 =>
				array(
					'id'         => '6106040',
					'regency_id' => '6106',
					'name'       => 'JELAI HULU',
				),
			137 =>
				array(
					'id'         => '6106050',
					'regency_id' => '6106',
					'name'       => 'TUMBANG TITI',
				),
			138 =>
				array(
					'id'         => '6106051',
					'regency_id' => '6106',
					'name'       => 'PEMAHAN',
				),
			139 =>
				array(
					'id'         => '6106052',
					'regency_id' => '6106',
					'name'       => 'SUNGAI MELAYU RAYAK',
				),
			140 =>
				array(
					'id'         => '6106060',
					'regency_id' => '6106',
					'name'       => 'MATAN HILIR SELATAN',
				),
			141 =>
				array(
					'id'         => '6106061',
					'regency_id' => '6106',
					'name'       => 'BENUA KAYONG',
				),
			142 =>
				array(
					'id'         => '6106070',
					'regency_id' => '6106',
					'name'       => 'MATAN HILIR UTARA',
				),
			143 =>
				array(
					'id'         => '6106071',
					'regency_id' => '6106',
					'name'       => 'DELTA PAWAN',
				),
			144 =>
				array(
					'id'         => '6106072',
					'regency_id' => '6106',
					'name'       => 'MUARA PAWAN',
				),
			145 =>
				array(
					'id'         => '6106090',
					'regency_id' => '6106',
					'name'       => 'NANGA TAYAP',
				),
			146 =>
				array(
					'id'         => '6106100',
					'regency_id' => '6106',
					'name'       => 'SANDAI',
				),
			147 =>
				array(
					'id'         => '6106101',
					'regency_id' => '6106',
					'name'       => 'HULU SUNGAI',
				),
			148 =>
				array(
					'id'         => '6106110',
					'regency_id' => '6106',
					'name'       => 'SUNGAI LAUR',
				),
			149 =>
				array(
					'id'         => '6106120',
					'regency_id' => '6106',
					'name'       => 'SIMPANG HULU',
				),
			150 =>
				array(
					'id'         => '6106121',
					'regency_id' => '6106',
					'name'       => 'SIMPANG DUA',
				),
			151 =>
				array(
					'id'         => '6107060',
					'regency_id' => '6107',
					'name'       => 'SERAWAI',
				),
			152 =>
				array(
					'id'         => '6107070',
					'regency_id' => '6107',
					'name'       => 'AMBALAU',
				),
			153 =>
				array(
					'id'         => '6107080',
					'regency_id' => '6107',
					'name'       => 'KAYAN HULU',
				),
			154 =>
				array(
					'id'         => '6107110',
					'regency_id' => '6107',
					'name'       => 'SEPAUK',
				),
			155 =>
				array(
					'id'         => '6107120',
					'regency_id' => '6107',
					'name'       => 'TEMPUNAK',
				),
			156 =>
				array(
					'id'         => '6107130',
					'regency_id' => '6107',
					'name'       => 'SUNGAI TEBELIAN',
				),
			157 =>
				array(
					'id'         => '6107140',
					'regency_id' => '6107',
					'name'       => 'SINTANG',
				),
			158 =>
				array(
					'id'         => '6107150',
					'regency_id' => '6107',
					'name'       => 'DEDAI',
				),
			159 =>
				array(
					'id'         => '6107160',
					'regency_id' => '6107',
					'name'       => 'KAYAN HILIR',
				),
			160 =>
				array(
					'id'         => '6107170',
					'regency_id' => '6107',
					'name'       => 'KELAM PERMAI',
				),
			161 =>
				array(
					'id'         => '6107180',
					'regency_id' => '6107',
					'name'       => 'BINJAI HULU',
				),
			162 =>
				array(
					'id'         => '6107190',
					'regency_id' => '6107',
					'name'       => 'KETUNGAU HILIR',
				),
			163 =>
				array(
					'id'         => '6107200',
					'regency_id' => '6107',
					'name'       => 'KETUNGAU TENGAH',
				),
			164 =>
				array(
					'id'         => '6107210',
					'regency_id' => '6107',
					'name'       => 'KETUNGAU HULU',
				),
			165 =>
				array(
					'id'         => '6108010',
					'regency_id' => '6108',
					'name'       => 'SILAT HILIR',
				),
			166 =>
				array(
					'id'         => '6108020',
					'regency_id' => '6108',
					'name'       => 'SILAT HULU',
				),
			167 =>
				array(
					'id'         => '6108030',
					'regency_id' => '6108',
					'name'       => 'HULU GURUNG',
				),
			168 =>
				array(
					'id'         => '6108040',
					'regency_id' => '6108',
					'name'       => 'BUNUT HULU',
				),
			169 =>
				array(
					'id'         => '6108050',
					'regency_id' => '6108',
					'name'       => 'MENTEBAH',
				),
			170 =>
				array(
					'id'         => '6108060',
					'regency_id' => '6108',
					'name'       => 'BIKA',
				),
			171 =>
				array(
					'id'         => '6108070',
					'regency_id' => '6108',
					'name'       => 'KALIS',
				),
			172 =>
				array(
					'id'         => '6108080',
					'regency_id' => '6108',
					'name'       => 'PUTUSSIBAU SELATAN',
				),
			173 =>
				array(
					'id'         => '6108090',
					'regency_id' => '6108',
					'name'       => 'EMBALOH HILIR',
				),
			174 =>
				array(
					'id'         => '6108100',
					'regency_id' => '6108',
					'name'       => 'BUNUT HILIR',
				),
			175 =>
				array(
					'id'         => '6108110',
					'regency_id' => '6108',
					'name'       => 'BOYAN TANJUNG',
				),
			176 =>
				array(
					'id'         => '6108120',
					'regency_id' => '6108',
					'name'       => 'PENGKADAN',
				),
			177 =>
				array(
					'id'         => '6108130',
					'regency_id' => '6108',
					'name'       => 'JONGKONG',
				),
			178 =>
				array(
					'id'         => '6108140',
					'regency_id' => '6108',
					'name'       => 'SELIMBAU',
				),
			179 =>
				array(
					'id'         => '6108150',
					'regency_id' => '6108',
					'name'       => 'SUHAID',
				),
			180 =>
				array(
					'id'         => '6108160',
					'regency_id' => '6108',
					'name'       => 'SEBERUANG',
				),
			181 =>
				array(
					'id'         => '6108170',
					'regency_id' => '6108',
					'name'       => 'SEMITAU',
				),
			182 =>
				array(
					'id'         => '6108180',
					'regency_id' => '6108',
					'name'       => 'EMPANANG',
				),
			183 =>
				array(
					'id'         => '6108190',
					'regency_id' => '6108',
					'name'       => 'PURING KENCANA',
				),
			184 =>
				array(
					'id'         => '6108200',
					'regency_id' => '6108',
					'name'       => 'BADAU',
				),
			185 =>
				array(
					'id'         => '6108210',
					'regency_id' => '6108',
					'name'       => 'BATANG LUPAR',
				),
			186 =>
				array(
					'id'         => '6108220',
					'regency_id' => '6108',
					'name'       => 'EMBALOH HULU',
				),
			187 =>
				array(
					'id'         => '6108230',
					'regency_id' => '6108',
					'name'       => 'PUTUSSIBAU UTARA',
				),
			188 =>
				array(
					'id'         => '6109010',
					'regency_id' => '6109',
					'name'       => 'NANGA MAHAP',
				),
			189 =>
				array(
					'id'         => '6109020',
					'regency_id' => '6109',
					'name'       => 'NANGA TAMAN',
				),
			190 =>
				array(
					'id'         => '6109030',
					'regency_id' => '6109',
					'name'       => 'SEKADAU HULU',
				),
			191 =>
				array(
					'id'         => '6109040',
					'regency_id' => '6109',
					'name'       => 'SEKADAU HILIR',
				),
			192 =>
				array(
					'id'         => '6109050',
					'regency_id' => '6109',
					'name'       => 'BELITANG HILIR',
				),
			193 =>
				array(
					'id'         => '6109060',
					'regency_id' => '6109',
					'name'       => 'BELITANG',
				),
			194 =>
				array(
					'id'         => '6109070',
					'regency_id' => '6109',
					'name'       => 'BELITANG HULU',
				),
			195 =>
				array(
					'id'         => '6110010',
					'regency_id' => '6110',
					'name'       => 'SOKAN',
				),
			196 =>
				array(
					'id'         => '6110020',
					'regency_id' => '6110',
					'name'       => 'TANAH PINOH',
				),
			197 =>
				array(
					'id'         => '6110021',
					'regency_id' => '6110',
					'name'       => 'TANAH PINOH BARAT',
				),
			198 =>
				array(
					'id'         => '6110030',
					'regency_id' => '6110',
					'name'       => 'SAYAN',
				),
			199 =>
				array(
					'id'         => '6110040',
					'regency_id' => '6110',
					'name'       => 'BELIMBING',
				),
			200 =>
				array(
					'id'         => '6110041',
					'regency_id' => '6110',
					'name'       => 'BELIMBING HULU',
				),
			201 =>
				array(
					'id'         => '6110050',
					'regency_id' => '6110',
					'name'       => 'NANGA PINOH',
				),
			202 =>
				array(
					'id'         => '6110051',
					'regency_id' => '6110',
					'name'       => 'PINOH SELATAN',
				),
			203 =>
				array(
					'id'         => '6110052',
					'regency_id' => '6110',
					'name'       => 'PINOH UTARA',
				),
			204 =>
				array(
					'id'         => '6110060',
					'regency_id' => '6110',
					'name'       => 'ELLA HILIR',
				),
			205 =>
				array(
					'id'         => '6110070',
					'regency_id' => '6110',
					'name'       => 'MENUKUNG',
				),
			206 =>
				array(
					'id'         => '6111010',
					'regency_id' => '6111',
					'name'       => 'PULAU MAYA',
				),
			207 =>
				array(
					'id'         => '6111011',
					'regency_id' => '6111',
					'name'       => 'KEPULAUAN KARIMATA',
				),
			208 =>
				array(
					'id'         => '6111020',
					'regency_id' => '6111',
					'name'       => 'SUKADANA',
				),
			209 =>
				array(
					'id'         => '6111030',
					'regency_id' => '6111',
					'name'       => 'SIMPANG HILIR',
				),
			210 =>
				array(
					'id'         => '6111040',
					'regency_id' => '6111',
					'name'       => 'TELUK BATANG',
				),
			211 =>
				array(
					'id'         => '6111050',
					'regency_id' => '6111',
					'name'       => 'SEPONTI',
				),
			212 =>
				array(
					'id'         => '6112010',
					'regency_id' => '6112',
					'name'       => 'BATU AMPAR',
				),
			213 =>
				array(
					'id'         => '6112020',
					'regency_id' => '6112',
					'name'       => 'TERENTANG',
				),
			214 =>
				array(
					'id'         => '6112030',
					'regency_id' => '6112',
					'name'       => 'KUBU',
				),
			215 =>
				array(
					'id'         => '6112040',
					'regency_id' => '6112',
					'name'       => 'TELOK PA\'KEDAI',
				),
			216 =>
				array(
					'id'         => '6112050',
					'regency_id' => '6112',
					'name'       => 'SUNGAI KAKAP',
				),
			217 =>
				array(
					'id'         => '6112060',
					'regency_id' => '6112',
					'name'       => 'RASAU JAYA',
				),
			218 =>
				array(
					'id'         => '6112070',
					'regency_id' => '6112',
					'name'       => 'SUNGAI RAYA',
				),
			219 =>
				array(
					'id'         => '6112080',
					'regency_id' => '6112',
					'name'       => 'SUNGAI AMBAWANG',
				),
			220 =>
				array(
					'id'         => '6112090',
					'regency_id' => '6112',
					'name'       => 'KUALA MANDOR-B',
				),
			221 =>
				array(
					'id'         => '6171010',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK SELATAN',
				),
			222 =>
				array(
					'id'         => '6171011',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK TENGGARA',
				),
			223 =>
				array(
					'id'         => '6171020',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK TIMUR',
				),
			224 =>
				array(
					'id'         => '6171030',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK BARAT',
				),
			225 =>
				array(
					'id'         => '6171031',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK KOTA',
				),
			226 =>
				array(
					'id'         => '6171040',
					'regency_id' => '6171',
					'name'       => 'PONTIANAK UTARA',
				),
			227 =>
				array(
					'id'         => '6172010',
					'regency_id' => '6172',
					'name'       => 'SINGKAWANG SELATAN',
				),
			228 =>
				array(
					'id'         => '6172020',
					'regency_id' => '6172',
					'name'       => 'SINGKAWANG TIMUR',
				),
			229 =>
				array(
					'id'         => '6172030',
					'regency_id' => '6172',
					'name'       => 'SINGKAWANG UTARA',
				),
			230 =>
				array(
					'id'         => '6172040',
					'regency_id' => '6172',
					'name'       => 'SINGKAWANG BARAT',
				),
			231 =>
				array(
					'id'         => '6172050',
					'regency_id' => '6172',
					'name'       => 'SINGKAWANG TENGAH',
				),
			232 =>
				array(
					'id'         => '6201040',
					'regency_id' => '6201',
					'name'       => 'KOTAWARINGIN LAMA',
				),
			233 =>
				array(
					'id'         => '6201050',
					'regency_id' => '6201',
					'name'       => 'ARUT SELATAN',
				),
			234 =>
				array(
					'id'         => '6201060',
					'regency_id' => '6201',
					'name'       => 'KUMAI',
				),
			235 =>
				array(
					'id'         => '6201061',
					'regency_id' => '6201',
					'name'       => 'PANGKALAN BANTENG',
				),
			236 =>
				array(
					'id'         => '6201062',
					'regency_id' => '6201',
					'name'       => 'PANGKALAN LADA',
				),
			237 =>
				array(
					'id'         => '6201070',
					'regency_id' => '6201',
					'name'       => 'ARUT UTARA',
				),
			238 =>
				array(
					'id'         => '6202020',
					'regency_id' => '6202',
					'name'       => 'MENTAYA HILIR SELATAN',
				),
			239 =>
				array(
					'id'         => '6202021',
					'regency_id' => '6202',
					'name'       => 'TELUK SAMPIT',
				),
			240 =>
				array(
					'id'         => '6202050',
					'regency_id' => '6202',
					'name'       => 'PULAU HANAUT',
				),
			241 =>
				array(
					'id'         => '6202060',
					'regency_id' => '6202',
					'name'       => 'MENTAWA BARU/KETAPANG',
				),
			242 =>
				array(
					'id'         => '6202061',
					'regency_id' => '6202',
					'name'       => 'SERANAU',
				),
			243 =>
				array(
					'id'         => '6202070',
					'regency_id' => '6202',
					'name'       => 'MENTAYA HILIR UTARA',
				),
			244 =>
				array(
					'id'         => '6202110',
					'regency_id' => '6202',
					'name'       => 'KOTA BESI',
				),
			245 =>
				array(
					'id'         => '6202111',
					'regency_id' => '6202',
					'name'       => 'TELAWANG',
				),
			246 =>
				array(
					'id'         => '6202120',
					'regency_id' => '6202',
					'name'       => 'BAAMANG',
				),
			247 =>
				array(
					'id'         => '6202190',
					'regency_id' => '6202',
					'name'       => 'CEMPAGA',
				),
			248 =>
				array(
					'id'         => '6202191',
					'regency_id' => '6202',
					'name'       => 'CEMPAGA HULU',
				),
			249 =>
				array(
					'id'         => '6202200',
					'regency_id' => '6202',
					'name'       => 'PARENGGEAN',
				),
			250 =>
				array(
					'id'         => '6202201',
					'regency_id' => '6202',
					'name'       => 'TUALAN HULU',
				),
			251 =>
				array(
					'id'         => '6202210',
					'regency_id' => '6202',
					'name'       => 'MENTAYA HULU',
				),
			252 =>
				array(
					'id'         => '6202211',
					'regency_id' => '6202',
					'name'       => 'BUKIT SANTUAI',
				),
			253 =>
				array(
					'id'         => '6202230',
					'regency_id' => '6202',
					'name'       => 'ANTANG KALANG',
				),
			254 =>
				array(
					'id'         => '6202231',
					'regency_id' => '6202',
					'name'       => 'TELAGA ANTANG',
				),
			255 =>
				array(
					'id'         => '6203020',
					'regency_id' => '6203',
					'name'       => 'KAPUAS KUALA',
				),
			256 =>
				array(
					'id'         => '6203021',
					'regency_id' => '6203',
					'name'       => 'TAMBAN CATUR',
				),
			257 =>
				array(
					'id'         => '6203030',
					'regency_id' => '6203',
					'name'       => 'KAPUAS TIMUR',
				),
			258 =>
				array(
					'id'         => '6203040',
					'regency_id' => '6203',
					'name'       => 'SELAT',
				),
			259 =>
				array(
					'id'         => '6203041',
					'regency_id' => '6203',
					'name'       => 'BATAGUH',
				),
			260 =>
				array(
					'id'         => '6203070',
					'regency_id' => '6203',
					'name'       => 'BASARANG',
				),
			261 =>
				array(
					'id'         => '6203080',
					'regency_id' => '6203',
					'name'       => 'KAPUAS HILIR',
				),
			262 =>
				array(
					'id'         => '6203090',
					'regency_id' => '6203',
					'name'       => 'PULAU PETAK',
				),
			263 =>
				array(
					'id'         => '6203100',
					'regency_id' => '6203',
					'name'       => 'KAPUAS MURUNG',
				),
			264 =>
				array(
					'id'         => '6203101',
					'regency_id' => '6203',
					'name'       => 'DADAHUP',
				),
			265 =>
				array(
					'id'         => '6203110',
					'regency_id' => '6203',
					'name'       => 'KAPUAS BARAT',
				),
			266 =>
				array(
					'id'         => '6203150',
					'regency_id' => '6203',
					'name'       => 'MANTANGAI',
				),
			267 =>
				array(
					'id'         => '6203160',
					'regency_id' => '6203',
					'name'       => 'TIMPAH',
				),
			268 =>
				array(
					'id'         => '6203170',
					'regency_id' => '6203',
					'name'       => 'KAPUAS TENGAH',
				),
			269 =>
				array(
					'id'         => '6203171',
					'regency_id' => '6203',
					'name'       => 'PASAK TALAWANG',
				),
			270 =>
				array(
					'id'         => '6203180',
					'regency_id' => '6203',
					'name'       => 'KAPUAS HULU',
				),
			271 =>
				array(
					'id'         => '6203181',
					'regency_id' => '6203',
					'name'       => 'MANDAU TALAWANG',
				),
			272 =>
				array(
					'id'         => '6204010',
					'regency_id' => '6204',
					'name'       => 'JENAMAS',
				),
			273 =>
				array(
					'id'         => '6204020',
					'regency_id' => '6204',
					'name'       => 'DUSUN HILIR',
				),
			274 =>
				array(
					'id'         => '6204030',
					'regency_id' => '6204',
					'name'       => 'KARAU KUALA',
				),
			275 =>
				array(
					'id'         => '6204040',
					'regency_id' => '6204',
					'name'       => 'DUSUN SELATAN',
				),
			276 =>
				array(
					'id'         => '6204050',
					'regency_id' => '6204',
					'name'       => 'DUSUN UTARA',
				),
			277 =>
				array(
					'id'         => '6204060',
					'regency_id' => '6204',
					'name'       => 'GUNUNG BINTANG AWAI',
				),
			278 =>
				array(
					'id'         => '6205010',
					'regency_id' => '6205',
					'name'       => 'MONTALLAT',
				),
			279 =>
				array(
					'id'         => '6205020',
					'regency_id' => '6205',
					'name'       => 'GUNUNG TIMANG',
				),
			280 =>
				array(
					'id'         => '6205030',
					'regency_id' => '6205',
					'name'       => 'GUNUNG PUREI',
				),
			281 =>
				array(
					'id'         => '6205040',
					'regency_id' => '6205',
					'name'       => 'TEWEH TIMUR',
				),
			282 =>
				array(
					'id'         => '6205050',
					'regency_id' => '6205',
					'name'       => 'TEWEH TENGAH',
				),
			283 =>
				array(
					'id'         => '6205051',
					'regency_id' => '6205',
					'name'       => 'TEWEH  BARU',
				),
			284 =>
				array(
					'id'         => '6205052',
					'regency_id' => '6205',
					'name'       => 'TEWEH SELATAN',
				),
			285 =>
				array(
					'id'         => '6205060',
					'regency_id' => '6205',
					'name'       => 'LAHEI',
				),
			286 =>
				array(
					'id'         => '6205061',
					'regency_id' => '6205',
					'name'       => 'LAHEI BARAT',
				),
			287 =>
				array(
					'id'         => '6206010',
					'regency_id' => '6206',
					'name'       => 'JELAI',
				),
			288 =>
				array(
					'id'         => '6206011',
					'regency_id' => '6206',
					'name'       => 'PANTAI LUNCI',
				),
			289 =>
				array(
					'id'         => '6206020',
					'regency_id' => '6206',
					'name'       => 'SUKAMARA',
				),
			290 =>
				array(
					'id'         => '6206030',
					'regency_id' => '6206',
					'name'       => 'BALAI RIAM',
				),
			291 =>
				array(
					'id'         => '6206031',
					'regency_id' => '6206',
					'name'       => 'PERMATA KECUBUNG',
				),
			292 =>
				array(
					'id'         => '6207010',
					'regency_id' => '6207',
					'name'       => 'BULIK',
				),
			293 =>
				array(
					'id'         => '6207011',
					'regency_id' => '6207',
					'name'       => 'SEMATU JAYA',
				),
			294 =>
				array(
					'id'         => '6207012',
					'regency_id' => '6207',
					'name'       => 'MENTHOBI RAYA',
				),
			295 =>
				array(
					'id'         => '6207013',
					'regency_id' => '6207',
					'name'       => 'BULIK TIMUR',
				),
			296 =>
				array(
					'id'         => '6207020',
					'regency_id' => '6207',
					'name'       => 'LAMANDAU',
				),
			297 =>
				array(
					'id'         => '6207021',
					'regency_id' => '6207',
					'name'       => 'BELANTIKAN RAYA',
				),
			298 =>
				array(
					'id'         => '6207030',
					'regency_id' => '6207',
					'name'       => 'DELANG',
				),
			299 =>
				array(
					'id'         => '6207031',
					'regency_id' => '6207',
					'name'       => 'BATANGKAWA',
				),
			300 =>
				array(
					'id'         => '6208010',
					'regency_id' => '6208',
					'name'       => 'SERUYAN HILIR',
				),
			301 =>
				array(
					'id'         => '6208011',
					'regency_id' => '6208',
					'name'       => 'SERUYAN HILIR TIMUR',
				),
			302 =>
				array(
					'id'         => '6208020',
					'regency_id' => '6208',
					'name'       => 'DANAU SEMBULUH',
				),
			303 =>
				array(
					'id'         => '6208021',
					'regency_id' => '6208',
					'name'       => 'SERUYAN RAYA',
				),
			304 =>
				array(
					'id'         => '6208030',
					'regency_id' => '6208',
					'name'       => 'HANAU',
				),
			305 =>
				array(
					'id'         => '6208031',
					'regency_id' => '6208',
					'name'       => 'DANAU SELULUK',
				),
			306 =>
				array(
					'id'         => '6208040',
					'regency_id' => '6208',
					'name'       => 'SERUYAN TENGAH',
				),
			307 =>
				array(
					'id'         => '6208041',
					'regency_id' => '6208',
					'name'       => 'BATU AMPAR',
				),
			308 =>
				array(
					'id'         => '6208050',
					'regency_id' => '6208',
					'name'       => 'SERUYAN HULU',
				),
			309 =>
				array(
					'id'         => '6208051',
					'regency_id' => '6208',
					'name'       => 'SULING TAMBUN',
				),
			310 =>
				array(
					'id'         => '6209010',
					'regency_id' => '6209',
					'name'       => 'KATINGAN KUALA',
				),
			311 =>
				array(
					'id'         => '6209020',
					'regency_id' => '6209',
					'name'       => 'MENDAWAI',
				),
			312 =>
				array(
					'id'         => '6209030',
					'regency_id' => '6209',
					'name'       => 'KAMIPANG',
				),
			313 =>
				array(
					'id'         => '6209040',
					'regency_id' => '6209',
					'name'       => 'TASIK PAYAWAN',
				),
			314 =>
				array(
					'id'         => '6209050',
					'regency_id' => '6209',
					'name'       => 'KATINGAN HILIR',
				),
			315 =>
				array(
					'id'         => '6209060',
					'regency_id' => '6209',
					'name'       => 'TEWANG SANGALANG GARING',
				),
			316 =>
				array(
					'id'         => '6209070',
					'regency_id' => '6209',
					'name'       => 'PULAU MALAN',
				),
			317 =>
				array(
					'id'         => '6209080',
					'regency_id' => '6209',
					'name'       => 'KATINGAN TENGAH',
				),
			318 =>
				array(
					'id'         => '6209090',
					'regency_id' => '6209',
					'name'       => 'SANAMAN MANTIKEI',
				),
			319 =>
				array(
					'id'         => '6209091',
					'regency_id' => '6209',
					'name'       => 'PETAK MALAI',
				),
			320 =>
				array(
					'id'         => '6209100',
					'regency_id' => '6209',
					'name'       => 'MARIKIT',
				),
			321 =>
				array(
					'id'         => '6209110',
					'regency_id' => '6209',
					'name'       => 'KATINGAN HULU',
				),
			322 =>
				array(
					'id'         => '6209111',
					'regency_id' => '6209',
					'name'       => 'BUKIT RAYA',
				),
			323 =>
				array(
					'id'         => '6210010',
					'regency_id' => '6210',
					'name'       => 'KAHAYAN KUALA',
				),
			324 =>
				array(
					'id'         => '6210011',
					'regency_id' => '6210',
					'name'       => 'SEBANGAU KUALA',
				),
			325 =>
				array(
					'id'         => '6210020',
					'regency_id' => '6210',
					'name'       => 'PANDIH BATU',
				),
			326 =>
				array(
					'id'         => '6210030',
					'regency_id' => '6210',
					'name'       => 'MALIKU',
				),
			327 =>
				array(
					'id'         => '6210040',
					'regency_id' => '6210',
					'name'       => 'KAHAYAN HILIR',
				),
			328 =>
				array(
					'id'         => '6210041',
					'regency_id' => '6210',
					'name'       => 'JABIREN RAYA',
				),
			329 =>
				array(
					'id'         => '6210050',
					'regency_id' => '6210',
					'name'       => 'KAHAYAN TENGAH',
				),
			330 =>
				array(
					'id'         => '6210060',
					'regency_id' => '6210',
					'name'       => 'BANAMA TINGANG',
				),
			331 =>
				array(
					'id'         => '6211010',
					'regency_id' => '6211',
					'name'       => 'MANUHING',
				),
			332 =>
				array(
					'id'         => '6211011',
					'regency_id' => '6211',
					'name'       => 'MANUHING RAYA',
				),
			333 =>
				array(
					'id'         => '6211020',
					'regency_id' => '6211',
					'name'       => 'RUNGAN',
				),
			334 =>
				array(
					'id'         => '6211021',
					'regency_id' => '6211',
					'name'       => 'RUNGAN HULU',
				),
			335 =>
				array(
					'id'         => '6211022',
					'regency_id' => '6211',
					'name'       => 'RUNGAN BARAT',
				),
			336 =>
				array(
					'id'         => '6211030',
					'regency_id' => '6211',
					'name'       => 'SEPANG',
				),
			337 =>
				array(
					'id'         => '6211031',
					'regency_id' => '6211',
					'name'       => 'MIHING RAYA',
				),
			338 =>
				array(
					'id'         => '6211040',
					'regency_id' => '6211',
					'name'       => 'KURUN',
				),
			339 =>
				array(
					'id'         => '6211050',
					'regency_id' => '6211',
					'name'       => 'TEWAH',
				),
			340 =>
				array(
					'id'         => '6211060',
					'regency_id' => '6211',
					'name'       => 'KAHAYAN HULU UTARA',
				),
			341 =>
				array(
					'id'         => '6211061',
					'regency_id' => '6211',
					'name'       => 'DAMANG BATU',
				),
			342 =>
				array(
					'id'         => '6211062',
					'regency_id' => '6211',
					'name'       => 'MIRI MANASA',
				),
			343 =>
				array(
					'id'         => '6212010',
					'regency_id' => '6212',
					'name'       => 'BENUA LIMA',
				),
			344 =>
				array(
					'id'         => '6212020',
					'regency_id' => '6212',
					'name'       => 'DUSUN TIMUR',
				),
			345 =>
				array(
					'id'         => '6212021',
					'regency_id' => '6212',
					'name'       => 'PAJU EPAT',
				),
			346 =>
				array(
					'id'         => '6212030',
					'regency_id' => '6212',
					'name'       => 'AWANG',
				),
			347 =>
				array(
					'id'         => '6212040',
					'regency_id' => '6212',
					'name'       => 'PATANGKEP TUTUI',
				),
			348 =>
				array(
					'id'         => '6212050',
					'regency_id' => '6212',
					'name'       => 'DUSUN TENGAH',
				),
			349 =>
				array(
					'id'         => '6212051',
					'regency_id' => '6212',
					'name'       => 'RAREN BATUAH',
				),
			350 =>
				array(
					'id'         => '6212052',
					'regency_id' => '6212',
					'name'       => 'PAKU',
				),
			351 =>
				array(
					'id'         => '6212053',
					'regency_id' => '6212',
					'name'       => 'KARUSEN JANANG',
				),
			352 =>
				array(
					'id'         => '6212060',
					'regency_id' => '6212',
					'name'       => 'PEMATANG KARAU',
				),
			353 =>
				array(
					'id'         => '6213010',
					'regency_id' => '6213',
					'name'       => 'PERMATA INTAN',
				),
			354 =>
				array(
					'id'         => '6213011',
					'regency_id' => '6213',
					'name'       => 'SUNGAI BABUAT',
				),
			355 =>
				array(
					'id'         => '6213020',
					'regency_id' => '6213',
					'name'       => 'MURUNG',
				),
			356 =>
				array(
					'id'         => '6213030',
					'regency_id' => '6213',
					'name'       => 'LAUNG TUHUP',
				),
			357 =>
				array(
					'id'         => '6213031',
					'regency_id' => '6213',
					'name'       => 'BARITO TUHUP RAYA',
				),
			358 =>
				array(
					'id'         => '6213040',
					'regency_id' => '6213',
					'name'       => 'TANAH SIANG',
				),
			359 =>
				array(
					'id'         => '6213041',
					'regency_id' => '6213',
					'name'       => 'TANAH SIANG SELATAN',
				),
			360 =>
				array(
					'id'         => '6213050',
					'regency_id' => '6213',
					'name'       => 'SUMBER BARITO',
				),
			361 =>
				array(
					'id'         => '6213051',
					'regency_id' => '6213',
					'name'       => 'SERIBU RIAM',
				),
			362 =>
				array(
					'id'         => '6213052',
					'regency_id' => '6213',
					'name'       => 'UUT MURUNG',
				),
			363 =>
				array(
					'id'         => '6271010',
					'regency_id' => '6271',
					'name'       => 'PAHANDUT',
				),
			364 =>
				array(
					'id'         => '6271011',
					'regency_id' => '6271',
					'name'       => 'SABANGAU',
				),
			365 =>
				array(
					'id'         => '6271012',
					'regency_id' => '6271',
					'name'       => 'JEKAN RAYA',
				),
			366 =>
				array(
					'id'         => '6271020',
					'regency_id' => '6271',
					'name'       => 'BUKIT BATU',
				),
			367 =>
				array(
					'id'         => '6271021',
					'regency_id' => '6271',
					'name'       => 'RAKUMPIT',
				),
			368 =>
				array(
					'id'         => '6301010',
					'regency_id' => '6301',
					'name'       => 'PANYIPATAN',
				),
			369 =>
				array(
					'id'         => '6301020',
					'regency_id' => '6301',
					'name'       => 'TAKISUNG',
				),
			370 =>
				array(
					'id'         => '6301030',
					'regency_id' => '6301',
					'name'       => 'KURAU',
				),
			371 =>
				array(
					'id'         => '6301031',
					'regency_id' => '6301',
					'name'       => 'BUMI MAKMUR',
				),
			372 =>
				array(
					'id'         => '6301040',
					'regency_id' => '6301',
					'name'       => 'BATI - BATI',
				),
			373 =>
				array(
					'id'         => '6301050',
					'regency_id' => '6301',
					'name'       => 'TAMBANG ULANG',
				),
			374 =>
				array(
					'id'         => '6301060',
					'regency_id' => '6301',
					'name'       => 'PELAIHARI',
				),
			375 =>
				array(
					'id'         => '6301061',
					'regency_id' => '6301',
					'name'       => 'BAJUIN',
				),
			376 =>
				array(
					'id'         => '6301070',
					'regency_id' => '6301',
					'name'       => 'BATU AMPAR',
				),
			377 =>
				array(
					'id'         => '6301080',
					'regency_id' => '6301',
					'name'       => 'JORONG',
				),
			378 =>
				array(
					'id'         => '6301090',
					'regency_id' => '6301',
					'name'       => 'KINTAP',
				),
			379 =>
				array(
					'id'         => '6302010',
					'regency_id' => '6302',
					'name'       => 'PULAU SEMBILAN',
				),
			380 =>
				array(
					'id'         => '6302020',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT BARAT',
				),
			381 =>
				array(
					'id'         => '6302021',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT TANJUNG SELAYAR',
				),
			382 =>
				array(
					'id'         => '6302030',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT SELATAN',
				),
			383 =>
				array(
					'id'         => '6302031',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT KEPULAUAN',
				),
			384 =>
				array(
					'id'         => '6302040',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT TIMUR',
				),
			385 =>
				array(
					'id'         => '6302050',
					'regency_id' => '6302',
					'name'       => 'PULAU SEBUKU',
				),
			386 =>
				array(
					'id'         => '6302060',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT UTARA',
				),
			387 =>
				array(
					'id'         => '6302061',
					'regency_id' => '6302',
					'name'       => 'PULAU LAUT TENGAH',
				),
			388 =>
				array(
					'id'         => '6302120',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG SELATAN',
				),
			389 =>
				array(
					'id'         => '6302121',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG HILIR',
				),
			390 =>
				array(
					'id'         => '6302130',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG HULU',
				),
			391 =>
				array(
					'id'         => '6302140',
					'regency_id' => '6302',
					'name'       => 'HAMPANG',
				),
			392 =>
				array(
					'id'         => '6302150',
					'regency_id' => '6302',
					'name'       => 'SUNGAI DURIAN',
				),
			393 =>
				array(
					'id'         => '6302160',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG TENGAH',
				),
			394 =>
				array(
					'id'         => '6302161',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG BARAT',
				),
			395 =>
				array(
					'id'         => '6302170',
					'regency_id' => '6302',
					'name'       => 'KELUMPANG UTARA',
				),
			396 =>
				array(
					'id'         => '6302180',
					'regency_id' => '6302',
					'name'       => 'PAMUKAN SELATAN',
				),
			397 =>
				array(
					'id'         => '6302190',
					'regency_id' => '6302',
					'name'       => 'SAMPANAHAN',
				),
			398 =>
				array(
					'id'         => '6302200',
					'regency_id' => '6302',
					'name'       => 'PAMUKAN UTARA',
				),
			399 =>
				array(
					'id'         => '6302201',
					'regency_id' => '6302',
					'name'       => 'PAMUKAN BARAT',
				),
			400 =>
				array(
					'id'         => '6303010',
					'regency_id' => '6303',
					'name'       => 'ALUH - ALUH',
				),
			401 =>
				array(
					'id'         => '6303011',
					'regency_id' => '6303',
					'name'       => 'BERUNTUNG BARU',
				),
			402 =>
				array(
					'id'         => '6303020',
					'regency_id' => '6303',
					'name'       => 'GAMBUT',
				),
			403 =>
				array(
					'id'         => '6303030',
					'regency_id' => '6303',
					'name'       => 'KERTAK HANYAR',
				),
			404 =>
				array(
					'id'         => '6303031',
					'regency_id' => '6303',
					'name'       => 'TATAH MAKMUR',
				),
			405 =>
				array(
					'id'         => '6303040',
					'regency_id' => '6303',
					'name'       => 'SUNGAI TABUK',
				),
			406 =>
				array(
					'id'         => '6303050',
					'regency_id' => '6303',
					'name'       => 'MARTAPURA',
				),
			407 =>
				array(
					'id'         => '6303051',
					'regency_id' => '6303',
					'name'       => 'MARTAPURA TIMUR',
				),
			408 =>
				array(
					'id'         => '6303052',
					'regency_id' => '6303',
					'name'       => 'MARTAPURA BARAT',
				),
			409 =>
				array(
					'id'         => '6303060',
					'regency_id' => '6303',
					'name'       => 'ASTAMBUL',
				),
			410 =>
				array(
					'id'         => '6303070',
					'regency_id' => '6303',
					'name'       => 'KARANG INTAN',
				),
			411 =>
				array(
					'id'         => '6303080',
					'regency_id' => '6303',
					'name'       => 'ARANIO',
				),
			412 =>
				array(
					'id'         => '6303090',
					'regency_id' => '6303',
					'name'       => 'SUNGAI PINANG',
				),
			413 =>
				array(
					'id'         => '6303091',
					'regency_id' => '6303',
					'name'       => 'PARAMASAN',
				),
			414 =>
				array(
					'id'         => '6303100',
					'regency_id' => '6303',
					'name'       => 'PENGARON',
				),
			415 =>
				array(
					'id'         => '6303101',
					'regency_id' => '6303',
					'name'       => 'SAMBUNG MAKMUR',
				),
			416 =>
				array(
					'id'         => '6303110',
					'regency_id' => '6303',
					'name'       => 'MATARAMAN',
				),
			417 =>
				array(
					'id'         => '6303120',
					'regency_id' => '6303',
					'name'       => 'SIMPANG EMPAT',
				),
			418 =>
				array(
					'id'         => '6303121',
					'regency_id' => '6303',
					'name'       => 'TELAGA BAUNTUNG',
				),
			419 =>
				array(
					'id'         => '6304010',
					'regency_id' => '6304',
					'name'       => 'TABUNGANEN',
				),
			420 =>
				array(
					'id'         => '6304020',
					'regency_id' => '6304',
					'name'       => 'TAMBAN',
				),
			421 =>
				array(
					'id'         => '6304030',
					'regency_id' => '6304',
					'name'       => 'MEKAR SARI',
				),
			422 =>
				array(
					'id'         => '6304040',
					'regency_id' => '6304',
					'name'       => 'ANJIR PASAR',
				),
			423 =>
				array(
					'id'         => '6304050',
					'regency_id' => '6304',
					'name'       => 'ANJIR MUARA',
				),
			424 =>
				array(
					'id'         => '6304060',
					'regency_id' => '6304',
					'name'       => 'ALALAK',
				),
			425 =>
				array(
					'id'         => '6304070',
					'regency_id' => '6304',
					'name'       => 'MANDASTANA',
				),
			426 =>
				array(
					'id'         => '6304071',
					'regency_id' => '6304',
					'name'       => 'JEJANGKIT',
				),
			427 =>
				array(
					'id'         => '6304080',
					'regency_id' => '6304',
					'name'       => 'BELAWANG',
				),
			428 =>
				array(
					'id'         => '6304090',
					'regency_id' => '6304',
					'name'       => 'WANARAYA',
				),
			429 =>
				array(
					'id'         => '6304100',
					'regency_id' => '6304',
					'name'       => 'BARAMBAI',
				),
			430 =>
				array(
					'id'         => '6304110',
					'regency_id' => '6304',
					'name'       => 'RANTAU BADAUH',
				),
			431 =>
				array(
					'id'         => '6304120',
					'regency_id' => '6304',
					'name'       => 'CERBON',
				),
			432 =>
				array(
					'id'         => '6304130',
					'regency_id' => '6304',
					'name'       => 'BAKUMPAI',
				),
			433 =>
				array(
					'id'         => '6304140',
					'regency_id' => '6304',
					'name'       => 'MARABAHAN',
				),
			434 =>
				array(
					'id'         => '6304150',
					'regency_id' => '6304',
					'name'       => 'TABUKAN',
				),
			435 =>
				array(
					'id'         => '6304160',
					'regency_id' => '6304',
					'name'       => 'KURIPAN',
				),
			436 =>
				array(
					'id'         => '6305010',
					'regency_id' => '6305',
					'name'       => 'BINUANG',
				),
			437 =>
				array(
					'id'         => '6305011',
					'regency_id' => '6305',
					'name'       => 'HATUNGUN',
				),
			438 =>
				array(
					'id'         => '6305020',
					'regency_id' => '6305',
					'name'       => 'TAPIN SELATAN',
				),
			439 =>
				array(
					'id'         => '6305021',
					'regency_id' => '6305',
					'name'       => 'SALAM BABARIS',
				),
			440 =>
				array(
					'id'         => '6305030',
					'regency_id' => '6305',
					'name'       => 'TAPIN TENGAH',
				),
			441 =>
				array(
					'id'         => '6305040',
					'regency_id' => '6305',
					'name'       => 'BUNGUR',
				),
			442 =>
				array(
					'id'         => '6305050',
					'regency_id' => '6305',
					'name'       => 'PIANI',
				),
			443 =>
				array(
					'id'         => '6305060',
					'regency_id' => '6305',
					'name'       => 'LOKPAIKAT',
				),
			444 =>
				array(
					'id'         => '6305070',
					'regency_id' => '6305',
					'name'       => 'TAPIN UTARA',
				),
			445 =>
				array(
					'id'         => '6305080',
					'regency_id' => '6305',
					'name'       => 'BAKARANGAN',
				),
			446 =>
				array(
					'id'         => '6305090',
					'regency_id' => '6305',
					'name'       => 'CANDI LARAS SELATAN',
				),
			447 =>
				array(
					'id'         => '6305100',
					'regency_id' => '6305',
					'name'       => 'CANDI LARAS UTARA',
				),
			448 =>
				array(
					'id'         => '6306010',
					'regency_id' => '6306',
					'name'       => 'PADANG BATUNG',
				),
			449 =>
				array(
					'id'         => '6306020',
					'regency_id' => '6306',
					'name'       => 'LOKSADO',
				),
			450 =>
				array(
					'id'         => '6306030',
					'regency_id' => '6306',
					'name'       => 'TELAGA LANGSAT',
				),
			451 =>
				array(
					'id'         => '6306040',
					'regency_id' => '6306',
					'name'       => 'ANGKINANG',
				),
			452 =>
				array(
					'id'         => '6306050',
					'regency_id' => '6306',
					'name'       => 'KANDANGAN',
				),
			453 =>
				array(
					'id'         => '6306060',
					'regency_id' => '6306',
					'name'       => 'SUNGAI RAYA',
				),
			454 =>
				array(
					'id'         => '6306070',
					'regency_id' => '6306',
					'name'       => 'SIMPUR',
				),
			455 =>
				array(
					'id'         => '6306080',
					'regency_id' => '6306',
					'name'       => 'KALUMPANG',
				),
			456 =>
				array(
					'id'         => '6306090',
					'regency_id' => '6306',
					'name'       => 'DAHA SELATAN',
				),
			457 =>
				array(
					'id'         => '6306091',
					'regency_id' => '6306',
					'name'       => 'DAHA BARAT',
				),
			458 =>
				array(
					'id'         => '6306100',
					'regency_id' => '6306',
					'name'       => 'DAHA UTARA',
				),
			459 =>
				array(
					'id'         => '6307010',
					'regency_id' => '6307',
					'name'       => 'HARUYAN',
				),
			460 =>
				array(
					'id'         => '6307020',
					'regency_id' => '6307',
					'name'       => 'BATU BENAWA',
				),
			461 =>
				array(
					'id'         => '6307030',
					'regency_id' => '6307',
					'name'       => 'HANTAKAN',
				),
			462 =>
				array(
					'id'         => '6307040',
					'regency_id' => '6307',
					'name'       => 'BATANG ALAI SELATAN',
				),
			463 =>
				array(
					'id'         => '6307041',
					'regency_id' => '6307',
					'name'       => 'BATANG ALAI TIMUR',
				),
			464 =>
				array(
					'id'         => '6307050',
					'regency_id' => '6307',
					'name'       => 'BARABAI',
				),
			465 =>
				array(
					'id'         => '6307060',
					'regency_id' => '6307',
					'name'       => 'LABUAN AMAS SELATAN',
				),
			466 =>
				array(
					'id'         => '6307070',
					'regency_id' => '6307',
					'name'       => 'LABUAN AMAS UTARA',
				),
			467 =>
				array(
					'id'         => '6307080',
					'regency_id' => '6307',
					'name'       => 'PANDAWAN',
				),
			468 =>
				array(
					'id'         => '6307090',
					'regency_id' => '6307',
					'name'       => 'BATANG ALAI UTARA',
				),
			469 =>
				array(
					'id'         => '6307091',
					'regency_id' => '6307',
					'name'       => 'LIMPASU',
				),
			470 =>
				array(
					'id'         => '6308010',
					'regency_id' => '6308',
					'name'       => 'DANAU PANGGANG',
				),
			471 =>
				array(
					'id'         => '6308011',
					'regency_id' => '6308',
					'name'       => 'PAMINGGIR',
				),
			472 =>
				array(
					'id'         => '6308020',
					'regency_id' => '6308',
					'name'       => 'BABIRIK',
				),
			473 =>
				array(
					'id'         => '6308030',
					'regency_id' => '6308',
					'name'       => 'SUNGAI PANDAN',
				),
			474 =>
				array(
					'id'         => '6308031',
					'regency_id' => '6308',
					'name'       => 'SUNGAI TABUKAN',
				),
			475 =>
				array(
					'id'         => '6308040',
					'regency_id' => '6308',
					'name'       => 'AMUNTAI SELATAN',
				),
			476 =>
				array(
					'id'         => '6308050',
					'regency_id' => '6308',
					'name'       => 'AMUNTAI TENGAH',
				),
			477 =>
				array(
					'id'         => '6308060',
					'regency_id' => '6308',
					'name'       => 'BANJANG',
				),
			478 =>
				array(
					'id'         => '6308070',
					'regency_id' => '6308',
					'name'       => 'AMUNTAI UTARA',
				),
			479 =>
				array(
					'id'         => '6308071',
					'regency_id' => '6308',
					'name'       => 'HAUR GADING',
				),
			480 =>
				array(
					'id'         => '6309010',
					'regency_id' => '6309',
					'name'       => 'BANUA LAWAS',
				),
			481 =>
				array(
					'id'         => '6309020',
					'regency_id' => '6309',
					'name'       => 'PUGAAN',
				),
			482 =>
				array(
					'id'         => '6309030',
					'regency_id' => '6309',
					'name'       => 'KELUA',
				),
			483 =>
				array(
					'id'         => '6309040',
					'regency_id' => '6309',
					'name'       => 'MUARA HARUS',
				),
			484 =>
				array(
					'id'         => '6309050',
					'regency_id' => '6309',
					'name'       => 'TANTA',
				),
			485 =>
				array(
					'id'         => '6309060',
					'regency_id' => '6309',
					'name'       => 'TANJUNG',
				),
			486 =>
				array(
					'id'         => '6309070',
					'regency_id' => '6309',
					'name'       => 'MURUNG PUDAK',
				),
			487 =>
				array(
					'id'         => '6309080',
					'regency_id' => '6309',
					'name'       => 'HARUAI',
				),
			488 =>
				array(
					'id'         => '6309081',
					'regency_id' => '6309',
					'name'       => 'BINTANG ARA',
				),
			489 =>
				array(
					'id'         => '6309090',
					'regency_id' => '6309',
					'name'       => 'UPAU',
				),
			490 =>
				array(
					'id'         => '6309100',
					'regency_id' => '6309',
					'name'       => 'MUARA UYA',
				),
			491 =>
				array(
					'id'         => '6309110',
					'regency_id' => '6309',
					'name'       => 'JARO',
				),
			492 =>
				array(
					'id'         => '6310010',
					'regency_id' => '6310',
					'name'       => 'KUSAN HILIR',
				),
			493 =>
				array(
					'id'         => '6310020',
					'regency_id' => '6310',
					'name'       => 'SUNGAI LOBAN',
				),
			494 =>
				array(
					'id'         => '6310030',
					'regency_id' => '6310',
					'name'       => 'SATUI',
				),
			495 =>
				array(
					'id'         => '6310031',
					'regency_id' => '6310',
					'name'       => 'ANGSANA',
				),
			496 =>
				array(
					'id'         => '6310040',
					'regency_id' => '6310',
					'name'       => 'KUSAN HULU',
				),
			497 =>
				array(
					'id'         => '6310041',
					'regency_id' => '6310',
					'name'       => 'KURANJI',
				),
			498 =>
				array(
					'id'         => '6310050',
					'regency_id' => '6310',
					'name'       => 'BATU LICIN',
				),
			499 =>
				array(
					'id'         => '6310051',
					'regency_id' => '6310',
					'name'       => 'KARANG BINTANG',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '6310052',
					'regency_id' => '6310',
					'name'       => 'SIMPANG EMPAT',
				),
			1   =>
				array(
					'id'         => '6310053',
					'regency_id' => '6310',
					'name'       => 'MANTEWE',
				),
			2   =>
				array(
					'id'         => '6311010',
					'regency_id' => '6311',
					'name'       => 'LAMPIHONG',
				),
			3   =>
				array(
					'id'         => '6311020',
					'regency_id' => '6311',
					'name'       => 'BATU MANDI',
				),
			4   =>
				array(
					'id'         => '6311030',
					'regency_id' => '6311',
					'name'       => 'AWAYAN',
				),
			5   =>
				array(
					'id'         => '6311031',
					'regency_id' => '6311',
					'name'       => 'TEBING TINGGI',
				),
			6   =>
				array(
					'id'         => '6311040',
					'regency_id' => '6311',
					'name'       => 'PARINGIN',
				),
			7   =>
				array(
					'id'         => '6311041',
					'regency_id' => '6311',
					'name'       => 'PARINGIN SELATAN',
				),
			8   =>
				array(
					'id'         => '6311050',
					'regency_id' => '6311',
					'name'       => 'JUAI',
				),
			9   =>
				array(
					'id'         => '6311060',
					'regency_id' => '6311',
					'name'       => 'HALONG',
				),
			10  =>
				array(
					'id'         => '6371010',
					'regency_id' => '6371',
					'name'       => 'BANJARMASIN SELATAN',
				),
			11  =>
				array(
					'id'         => '6371020',
					'regency_id' => '6371',
					'name'       => 'BANJARMASIN TIMUR',
				),
			12  =>
				array(
					'id'         => '6371030',
					'regency_id' => '6371',
					'name'       => 'BANJARMASIN BARAT',
				),
			13  =>
				array(
					'id'         => '6371031',
					'regency_id' => '6371',
					'name'       => 'BANJARMASIN TENGAH',
				),
			14  =>
				array(
					'id'         => '6371040',
					'regency_id' => '6371',
					'name'       => 'BANJARMASIN UTARA',
				),
			15  =>
				array(
					'id'         => '6372010',
					'regency_id' => '6372',
					'name'       => 'LANDASAN ULIN',
				),
			16  =>
				array(
					'id'         => '6372011',
					'regency_id' => '6372',
					'name'       => 'LIANG ANGGANG',
				),
			17  =>
				array(
					'id'         => '6372020',
					'regency_id' => '6372',
					'name'       => 'CEMPAKA',
				),
			18  =>
				array(
					'id'         => '6372031',
					'regency_id' => '6372',
					'name'       => 'BANJAR BARU UTARA',
				),
			19  =>
				array(
					'id'         => '6372032',
					'regency_id' => '6372',
					'name'       => 'BANJAR BARU SELATAN',
				),
			20  =>
				array(
					'id'         => '6401010',
					'regency_id' => '6401',
					'name'       => 'BATU SOPANG',
				),
			21  =>
				array(
					'id'         => '6401011',
					'regency_id' => '6401',
					'name'       => 'MUARA SAMU',
				),
			22  =>
				array(
					'id'         => '6401021',
					'regency_id' => '6401',
					'name'       => 'BATU ENGAU',
				),
			23  =>
				array(
					'id'         => '6401022',
					'regency_id' => '6401',
					'name'       => 'TANJUNG HARAPAN',
				),
			24  =>
				array(
					'id'         => '6401030',
					'regency_id' => '6401',
					'name'       => 'PASIR BELENGKONG',
				),
			25  =>
				array(
					'id'         => '6401040',
					'regency_id' => '6401',
					'name'       => 'TANAH GROGOT',
				),
			26  =>
				array(
					'id'         => '6401050',
					'regency_id' => '6401',
					'name'       => 'KUARO',
				),
			27  =>
				array(
					'id'         => '6401060',
					'regency_id' => '6401',
					'name'       => 'LONG IKIS',
				),
			28  =>
				array(
					'id'         => '6401070',
					'regency_id' => '6401',
					'name'       => 'MUARA KOMAM',
				),
			29  =>
				array(
					'id'         => '6401080',
					'regency_id' => '6401',
					'name'       => 'LONG KALI',
				),
			30  =>
				array(
					'id'         => '6402010',
					'regency_id' => '6402',
					'name'       => 'BONGAN',
				),
			31  =>
				array(
					'id'         => '6402020',
					'regency_id' => '6402',
					'name'       => 'JEMPANG',
				),
			32  =>
				array(
					'id'         => '6402030',
					'regency_id' => '6402',
					'name'       => 'PENYINGGAHAN',
				),
			33  =>
				array(
					'id'         => '6402040',
					'regency_id' => '6402',
					'name'       => 'MUARA PAHU',
				),
			34  =>
				array(
					'id'         => '6402041',
					'regency_id' => '6402',
					'name'       => 'SILUQ NGURAI',
				),
			35  =>
				array(
					'id'         => '6402050',
					'regency_id' => '6402',
					'name'       => 'MUARA LAWA',
				),
			36  =>
				array(
					'id'         => '6402051',
					'regency_id' => '6402',
					'name'       => 'BENTIAN BESAR',
				),
			37  =>
				array(
					'id'         => '6402060',
					'regency_id' => '6402',
					'name'       => 'DAMAI',
				),
			38  =>
				array(
					'id'         => '6402061',
					'regency_id' => '6402',
					'name'       => 'NYUATAN',
				),
			39  =>
				array(
					'id'         => '6402070',
					'regency_id' => '6402',
					'name'       => 'BARONG TONGKOK',
				),
			40  =>
				array(
					'id'         => '6402071',
					'regency_id' => '6402',
					'name'       => 'LINGGANG BIGUNG',
				),
			41  =>
				array(
					'id'         => '6402080',
					'regency_id' => '6402',
					'name'       => 'MELAK',
				),
			42  =>
				array(
					'id'         => '6402081',
					'regency_id' => '6402',
					'name'       => 'SEKOLAQ DARAT',
				),
			43  =>
				array(
					'id'         => '6402082',
					'regency_id' => '6402',
					'name'       => 'MANOR BULATN',
				),
			44  =>
				array(
					'id'         => '6402090',
					'regency_id' => '6402',
					'name'       => 'LONG IRAM',
				),
			45  =>
				array(
					'id'         => '6402091',
					'regency_id' => '6402',
					'name'       => 'TERING',
				),
			46  =>
				array(
					'id'         => '6403010',
					'regency_id' => '6403',
					'name'       => 'SEMBOJA',
				),
			47  =>
				array(
					'id'         => '6403020',
					'regency_id' => '6403',
					'name'       => 'MUARA JAWA',
				),
			48  =>
				array(
					'id'         => '6403030',
					'regency_id' => '6403',
					'name'       => 'SANGA-SANGA',
				),
			49  =>
				array(
					'id'         => '6403040',
					'regency_id' => '6403',
					'name'       => 'LOA JANAN',
				),
			50  =>
				array(
					'id'         => '6403050',
					'regency_id' => '6403',
					'name'       => 'LOA KULU',
				),
			51  =>
				array(
					'id'         => '6403060',
					'regency_id' => '6403',
					'name'       => 'MUARA MUNTAI',
				),
			52  =>
				array(
					'id'         => '6403070',
					'regency_id' => '6403',
					'name'       => 'MUARA WIS',
				),
			53  =>
				array(
					'id'         => '6403080',
					'regency_id' => '6403',
					'name'       => 'KOTABANGUN',
				),
			54  =>
				array(
					'id'         => '6403090',
					'regency_id' => '6403',
					'name'       => 'TENGGARONG',
				),
			55  =>
				array(
					'id'         => '6403100',
					'regency_id' => '6403',
					'name'       => 'SEBULU',
				),
			56  =>
				array(
					'id'         => '6403110',
					'regency_id' => '6403',
					'name'       => 'TENGGARONG SEBERANG',
				),
			57  =>
				array(
					'id'         => '6403120',
					'regency_id' => '6403',
					'name'       => 'ANGGANA',
				),
			58  =>
				array(
					'id'         => '6403130',
					'regency_id' => '6403',
					'name'       => 'MUARA BADAK',
				),
			59  =>
				array(
					'id'         => '6403140',
					'regency_id' => '6403',
					'name'       => 'MARANG KAYU',
				),
			60  =>
				array(
					'id'         => '6403150',
					'regency_id' => '6403',
					'name'       => 'MUARA KAMAN',
				),
			61  =>
				array(
					'id'         => '6403160',
					'regency_id' => '6403',
					'name'       => 'KENOHAN',
				),
			62  =>
				array(
					'id'         => '6403170',
					'regency_id' => '6403',
					'name'       => 'KEMBANG JANGGUT',
				),
			63  =>
				array(
					'id'         => '6403180',
					'regency_id' => '6403',
					'name'       => 'TABANG',
				),
			64  =>
				array(
					'id'         => '6404010',
					'regency_id' => '6404',
					'name'       => 'MUARA ANCALONG',
				),
			65  =>
				array(
					'id'         => '6404011',
					'regency_id' => '6404',
					'name'       => 'BUSANG',
				),
			66  =>
				array(
					'id'         => '6404012',
					'regency_id' => '6404',
					'name'       => 'LONG MESANGAT',
				),
			67  =>
				array(
					'id'         => '6404020',
					'regency_id' => '6404',
					'name'       => 'MUARA WAHAU',
				),
			68  =>
				array(
					'id'         => '6404021',
					'regency_id' => '6404',
					'name'       => 'TELEN',
				),
			69  =>
				array(
					'id'         => '6404022',
					'regency_id' => '6404',
					'name'       => 'KONGBENG',
				),
			70  =>
				array(
					'id'         => '6404030',
					'regency_id' => '6404',
					'name'       => 'MUARA BENGKAL',
				),
			71  =>
				array(
					'id'         => '6404031',
					'regency_id' => '6404',
					'name'       => 'BATU AMPAR',
				),
			72  =>
				array(
					'id'         => '6404040',
					'regency_id' => '6404',
					'name'       => 'SANGATTA UTARA',
				),
			73  =>
				array(
					'id'         => '6404041',
					'regency_id' => '6404',
					'name'       => 'BENGALON',
				),
			74  =>
				array(
					'id'         => '6404042',
					'regency_id' => '6404',
					'name'       => 'TELUK PANDAN',
				),
			75  =>
				array(
					'id'         => '6404043',
					'regency_id' => '6404',
					'name'       => 'SANGATTA SELATAN',
				),
			76  =>
				array(
					'id'         => '6404044',
					'regency_id' => '6404',
					'name'       => 'RANTAU PULUNG',
				),
			77  =>
				array(
					'id'         => '6404050',
					'regency_id' => '6404',
					'name'       => 'SANGKULIRANG',
				),
			78  =>
				array(
					'id'         => '6404051',
					'regency_id' => '6404',
					'name'       => 'KALIORANG',
				),
			79  =>
				array(
					'id'         => '6404052',
					'regency_id' => '6404',
					'name'       => 'SANDARAN',
				),
			80  =>
				array(
					'id'         => '6404053',
					'regency_id' => '6404',
					'name'       => 'KAUBUN',
				),
			81  =>
				array(
					'id'         => '6404054',
					'regency_id' => '6404',
					'name'       => 'KARANGAN',
				),
			82  =>
				array(
					'id'         => '6405010',
					'regency_id' => '6405',
					'name'       => 'KELAY',
				),
			83  =>
				array(
					'id'         => '6405020',
					'regency_id' => '6405',
					'name'       => 'TALISAYAN',
				),
			84  =>
				array(
					'id'         => '6405021',
					'regency_id' => '6405',
					'name'       => 'TABALAR',
				),
			85  =>
				array(
					'id'         => '6405030',
					'regency_id' => '6405',
					'name'       => 'BIDUK BIDUK',
				),
			86  =>
				array(
					'id'         => '6405040',
					'regency_id' => '6405',
					'name'       => 'PULAU DERAWAN',
				),
			87  =>
				array(
					'id'         => '6405041',
					'regency_id' => '6405',
					'name'       => 'MARATUA',
				),
			88  =>
				array(
					'id'         => '6405050',
					'regency_id' => '6405',
					'name'       => 'SAMBALIUNG',
				),
			89  =>
				array(
					'id'         => '6405060',
					'regency_id' => '6405',
					'name'       => 'TANJUNG REDEB',
				),
			90  =>
				array(
					'id'         => '6405070',
					'regency_id' => '6405',
					'name'       => 'GUNUNG TABUR',
				),
			91  =>
				array(
					'id'         => '6405080',
					'regency_id' => '6405',
					'name'       => 'SEGAH',
				),
			92  =>
				array(
					'id'         => '6405090',
					'regency_id' => '6405',
					'name'       => 'TELUK BAYUR',
				),
			93  =>
				array(
					'id'         => '6405100',
					'regency_id' => '6405',
					'name'       => 'BATU PUTIH',
				),
			94  =>
				array(
					'id'         => '6405110',
					'regency_id' => '6405',
					'name'       => 'BIATAN',
				),
			95  =>
				array(
					'id'         => '6409010',
					'regency_id' => '6409',
					'name'       => 'BABULU',
				),
			96  =>
				array(
					'id'         => '6409020',
					'regency_id' => '6409',
					'name'       => 'WARU',
				),
			97  =>
				array(
					'id'         => '6409030',
					'regency_id' => '6409',
					'name'       => 'PENAJAM',
				),
			98  =>
				array(
					'id'         => '6409040',
					'regency_id' => '6409',
					'name'       => 'SEPAKU',
				),
			99  =>
				array(
					'id'         => '6411010',
					'regency_id' => '6411',
					'name'       => 'LAHAM',
				),
			100 =>
				array(
					'id'         => '6411020',
					'regency_id' => '6411',
					'name'       => 'LONG HUBUNG',
				),
			101 =>
				array(
					'id'         => '6411030',
					'regency_id' => '6411',
					'name'       => 'LONG BAGUN',
				),
			102 =>
				array(
					'id'         => '6411040',
					'regency_id' => '6411',
					'name'       => 'LONG PAHANGAI',
				),
			103 =>
				array(
					'id'         => '6411050',
					'regency_id' => '6411',
					'name'       => 'LONG APARI',
				),
			104 =>
				array(
					'id'         => '6471010',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN SELATAN',
				),
			105 =>
				array(
					'id'         => '6471011',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN KOTA',
				),
			106 =>
				array(
					'id'         => '6471020',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN TIMUR',
				),
			107 =>
				array(
					'id'         => '6471030',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN UTARA',
				),
			108 =>
				array(
					'id'         => '6471040',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN TENGAH',
				),
			109 =>
				array(
					'id'         => '6471050',
					'regency_id' => '6471',
					'name'       => 'BALIKPAPAN BARAT',
				),
			110 =>
				array(
					'id'         => '6472010',
					'regency_id' => '6472',
					'name'       => 'PALARAN',
				),
			111 =>
				array(
					'id'         => '6472020',
					'regency_id' => '6472',
					'name'       => 'SAMARINDA ILIR',
				),
			112 =>
				array(
					'id'         => '6472021',
					'regency_id' => '6472',
					'name'       => 'SAMARINDA KOTA',
				),
			113 =>
				array(
					'id'         => '6472022',
					'regency_id' => '6472',
					'name'       => 'SAMBUTAN',
				),
			114 =>
				array(
					'id'         => '6472030',
					'regency_id' => '6472',
					'name'       => 'SAMARINDA SEBERANG',
				),
			115 =>
				array(
					'id'         => '6472031',
					'regency_id' => '6472',
					'name'       => 'LOA JANAN ILIR',
				),
			116 =>
				array(
					'id'         => '6472040',
					'regency_id' => '6472',
					'name'       => 'SUNGAI KUNJANG',
				),
			117 =>
				array(
					'id'         => '6472050',
					'regency_id' => '6472',
					'name'       => 'SAMARINDA ULU',
				),
			118 =>
				array(
					'id'         => '6472060',
					'regency_id' => '6472',
					'name'       => 'SAMARINDA UTARA',
				),
			119 =>
				array(
					'id'         => '6472061',
					'regency_id' => '6472',
					'name'       => 'SUNGAI PINANG',
				),
			120 =>
				array(
					'id'         => '6474010',
					'regency_id' => '6474',
					'name'       => 'BONTANG SELATAN',
				),
			121 =>
				array(
					'id'         => '6474020',
					'regency_id' => '6474',
					'name'       => 'BONTANG UTARA',
				),
			122 =>
				array(
					'id'         => '6474030',
					'regency_id' => '6474',
					'name'       => 'BONTANG BARAT',
				),
			123 =>
				array(
					'id'         => '6501010',
					'regency_id' => '6501',
					'name'       => 'SUNGAI BOH',
				),
			124 =>
				array(
					'id'         => '6501020',
					'regency_id' => '6501',
					'name'       => 'KAYAN SELATAN',
				),
			125 =>
				array(
					'id'         => '6501030',
					'regency_id' => '6501',
					'name'       => 'KAYAN HULU',
				),
			126 =>
				array(
					'id'         => '6501040',
					'regency_id' => '6501',
					'name'       => 'KAYAN HILIR',
				),
			127 =>
				array(
					'id'         => '6501050',
					'regency_id' => '6501',
					'name'       => 'PUJUNGAN',
				),
			128 =>
				array(
					'id'         => '6501060',
					'regency_id' => '6501',
					'name'       => 'BAHAU HULU',
				),
			129 =>
				array(
					'id'         => '6501070',
					'regency_id' => '6501',
					'name'       => 'SUNGAI TUBU',
				),
			130 =>
				array(
					'id'         => '6501080',
					'regency_id' => '6501',
					'name'       => 'MALINAU SELATAN HULU',
				),
			131 =>
				array(
					'id'         => '6501090',
					'regency_id' => '6501',
					'name'       => 'MALINAU SELATAN',
				),
			132 =>
				array(
					'id'         => '6501100',
					'regency_id' => '6501',
					'name'       => 'MALINAU SELATAN HILIR',
				),
			133 =>
				array(
					'id'         => '6501110',
					'regency_id' => '6501',
					'name'       => 'MENTARANG',
				),
			134 =>
				array(
					'id'         => '6501120',
					'regency_id' => '6501',
					'name'       => 'MENTARANG HULU',
				),
			135 =>
				array(
					'id'         => '6501130',
					'regency_id' => '6501',
					'name'       => 'MALINAU UTARA',
				),
			136 =>
				array(
					'id'         => '6501140',
					'regency_id' => '6501',
					'name'       => 'MALINAU BARAT',
				),
			137 =>
				array(
					'id'         => '6501150',
					'regency_id' => '6501',
					'name'       => 'MALINAU KOTA',
				),
			138 =>
				array(
					'id'         => '6502010',
					'regency_id' => '6502',
					'name'       => 'PESO',
				),
			139 =>
				array(
					'id'         => '6502020',
					'regency_id' => '6502',
					'name'       => 'PESO HILIR',
				),
			140 =>
				array(
					'id'         => '6502030',
					'regency_id' => '6502',
					'name'       => 'TANJUNG PALAS BARAT',
				),
			141 =>
				array(
					'id'         => '6502040',
					'regency_id' => '6502',
					'name'       => 'TANJUNG PALAS',
				),
			142 =>
				array(
					'id'         => '6502050',
					'regency_id' => '6502',
					'name'       => 'TANJUNG SELOR',
				),
			143 =>
				array(
					'id'         => '6502060',
					'regency_id' => '6502',
					'name'       => 'TANJUNG PALAS TIMUR',
				),
			144 =>
				array(
					'id'         => '6502070',
					'regency_id' => '6502',
					'name'       => 'TANJUNG PALAS TENGAH',
				),
			145 =>
				array(
					'id'         => '6502080',
					'regency_id' => '6502',
					'name'       => 'TANJUNG PALAS UTARA',
				),
			146 =>
				array(
					'id'         => '6502090',
					'regency_id' => '6502',
					'name'       => 'SEKATAK',
				),
			147 =>
				array(
					'id'         => '6502100',
					'regency_id' => '6502',
					'name'       => 'BUNYU',
				),
			148 =>
				array(
					'id'         => '6503010',
					'regency_id' => '6503',
					'name'       => 'MURUK RIAN',
				),
			149 =>
				array(
					'id'         => '6503020',
					'regency_id' => '6503',
					'name'       => 'SESAYAP',
				),
			150 =>
				array(
					'id'         => '6503030',
					'regency_id' => '6503',
					'name'       => 'BETAYAU',
				),
			151 =>
				array(
					'id'         => '6503040',
					'regency_id' => '6503',
					'name'       => 'SESAYAP HILIR',
				),
			152 =>
				array(
					'id'         => '6503050',
					'regency_id' => '6503',
					'name'       => 'TANA LIA',
				),
			153 =>
				array(
					'id'         => '6504010',
					'regency_id' => '6504',
					'name'       => 'KRAYAN SELATAN',
				),
			154 =>
				array(
					'id'         => '6504011',
					'regency_id' => '6504',
					'name'       => 'KRAYAN TENGAH',
				),
			155 =>
				array(
					'id'         => '6504020',
					'regency_id' => '6504',
					'name'       => 'KRAYAN',
				),
			156 =>
				array(
					'id'         => '6504021',
					'regency_id' => '6504',
					'name'       => 'KRAYAN TIMUR',
				),
			157 =>
				array(
					'id'         => '6504022',
					'regency_id' => '6504',
					'name'       => 'KRAYAN BARAT',
				),
			158 =>
				array(
					'id'         => '6504030',
					'regency_id' => '6504',
					'name'       => 'LUMBIS OGONG',
				),
			159 =>
				array(
					'id'         => '6504040',
					'regency_id' => '6504',
					'name'       => 'LUMBIS',
				),
			160 =>
				array(
					'id'         => '6504050',
					'regency_id' => '6504',
					'name'       => 'SEMBAKUNG ATULAI',
				),
			161 =>
				array(
					'id'         => '6504060',
					'regency_id' => '6504',
					'name'       => 'SEMBAKUNG',
				),
			162 =>
				array(
					'id'         => '6504070',
					'regency_id' => '6504',
					'name'       => 'SEBUKU',
				),
			163 =>
				array(
					'id'         => '6504080',
					'regency_id' => '6504',
					'name'       => 'TULIN ONSOI',
				),
			164 =>
				array(
					'id'         => '6504090',
					'regency_id' => '6504',
					'name'       => 'SEI MENGGARIS',
				),
			165 =>
				array(
					'id'         => '6504100',
					'regency_id' => '6504',
					'name'       => 'NUNUKAN',
				),
			166 =>
				array(
					'id'         => '6504110',
					'regency_id' => '6504',
					'name'       => 'NUNUKAN SELATAN',
				),
			167 =>
				array(
					'id'         => '6504120',
					'regency_id' => '6504',
					'name'       => 'SEBATIK BARAT',
				),
			168 =>
				array(
					'id'         => '6504130',
					'regency_id' => '6504',
					'name'       => 'SEBATIK',
				),
			169 =>
				array(
					'id'         => '6504140',
					'regency_id' => '6504',
					'name'       => 'SEBATIK TIMUR',
				),
			170 =>
				array(
					'id'         => '6504150',
					'regency_id' => '6504',
					'name'       => 'SEBATIK TENGAH',
				),
			171 =>
				array(
					'id'         => '6504160',
					'regency_id' => '6504',
					'name'       => 'SEBATIK UTARA',
				),
			172 =>
				array(
					'id'         => '6571010',
					'regency_id' => '6571',
					'name'       => 'TARAKAN TIMUR',
				),
			173 =>
				array(
					'id'         => '6571020',
					'regency_id' => '6571',
					'name'       => 'TARAKAN TENGAH',
				),
			174 =>
				array(
					'id'         => '6571030',
					'regency_id' => '6571',
					'name'       => 'TARAKAN BARAT',
				),
			175 =>
				array(
					'id'         => '6571040',
					'regency_id' => '6571',
					'name'       => 'TARAKAN UTARA',
				),
			176 =>
				array(
					'id'         => '7101021',
					'regency_id' => '7101',
					'name'       => 'DUMOGA BARAT',
				),
			177 =>
				array(
					'id'         => '7101022',
					'regency_id' => '7101',
					'name'       => 'DUMOGA UTARA',
				),
			178 =>
				array(
					'id'         => '7101023',
					'regency_id' => '7101',
					'name'       => 'DUMOGA TIMUR',
				),
			179 =>
				array(
					'id'         => '7101024',
					'regency_id' => '7101',
					'name'       => 'DUMOGA TENGAH',
				),
			180 =>
				array(
					'id'         => '7101025',
					'regency_id' => '7101',
					'name'       => 'DUMOGA TENGGARA',
				),
			181 =>
				array(
					'id'         => '7101026',
					'regency_id' => '7101',
					'name'       => 'DUMOGA',
				),
			182 =>
				array(
					'id'         => '7101060',
					'regency_id' => '7101',
					'name'       => 'LOLAYAN',
				),
			183 =>
				array(
					'id'         => '7101081',
					'regency_id' => '7101',
					'name'       => 'PASSI BARAT',
				),
			184 =>
				array(
					'id'         => '7101082',
					'regency_id' => '7101',
					'name'       => 'PASSI TIMUR',
				),
			185 =>
				array(
					'id'         => '7101083',
					'regency_id' => '7101',
					'name'       => 'BILALANG',
				),
			186 =>
				array(
					'id'         => '7101090',
					'regency_id' => '7101',
					'name'       => 'POIGAR',
				),
			187 =>
				array(
					'id'         => '7101100',
					'regency_id' => '7101',
					'name'       => 'BOLAANG',
				),
			188 =>
				array(
					'id'         => '7101101',
					'regency_id' => '7101',
					'name'       => 'BOLAANG TIMUR',
				),
			189 =>
				array(
					'id'         => '7101110',
					'regency_id' => '7101',
					'name'       => 'LOLAK',
				),
			190 =>
				array(
					'id'         => '7101120',
					'regency_id' => '7101',
					'name'       => 'SANGTOMBOLANG',
				),
			191 =>
				array(
					'id'         => '7102091',
					'regency_id' => '7102',
					'name'       => 'LANGOWAN TIMUR',
				),
			192 =>
				array(
					'id'         => '7102092',
					'regency_id' => '7102',
					'name'       => 'LANGOWAN BARAT',
				),
			193 =>
				array(
					'id'         => '7102093',
					'regency_id' => '7102',
					'name'       => 'LANGOWAN SELATAN',
				),
			194 =>
				array(
					'id'         => '7102094',
					'regency_id' => '7102',
					'name'       => 'LANGOWAN UTARA',
				),
			195 =>
				array(
					'id'         => '7102110',
					'regency_id' => '7102',
					'name'       => 'TOMPASO',
				),
			196 =>
				array(
					'id'         => '7102111',
					'regency_id' => '7102',
					'name'       => 'TOMPASO BARAT',
				),
			197 =>
				array(
					'id'         => '7102120',
					'regency_id' => '7102',
					'name'       => 'KAWANGKOAN',
				),
			198 =>
				array(
					'id'         => '7102121',
					'regency_id' => '7102',
					'name'       => 'KAWANGKOAN BARAT',
				),
			199 =>
				array(
					'id'         => '7102122',
					'regency_id' => '7102',
					'name'       => 'KAWANGKOAN UTARA',
				),
			200 =>
				array(
					'id'         => '7102130',
					'regency_id' => '7102',
					'name'       => 'SONDER',
				),
			201 =>
				array(
					'id'         => '7102160',
					'regency_id' => '7102',
					'name'       => 'TOMBARIRI',
				),
			202 =>
				array(
					'id'         => '7102161',
					'regency_id' => '7102',
					'name'       => 'TOMBARIRI TIMUR',
				),
			203 =>
				array(
					'id'         => '7102170',
					'regency_id' => '7102',
					'name'       => 'PINELENG',
				),
			204 =>
				array(
					'id'         => '7102171',
					'regency_id' => '7102',
					'name'       => 'TOMBULU',
				),
			205 =>
				array(
					'id'         => '7102172',
					'regency_id' => '7102',
					'name'       => 'MANDOLANG',
				),
			206 =>
				array(
					'id'         => '7102190',
					'regency_id' => '7102',
					'name'       => 'TONDANO BARAT',
				),
			207 =>
				array(
					'id'         => '7102191',
					'regency_id' => '7102',
					'name'       => 'TONDANO SELATAN',
				),
			208 =>
				array(
					'id'         => '7102200',
					'regency_id' => '7102',
					'name'       => 'REMBOKEN',
				),
			209 =>
				array(
					'id'         => '7102210',
					'regency_id' => '7102',
					'name'       => 'KAKAS',
				),
			210 =>
				array(
					'id'         => '7102211',
					'regency_id' => '7102',
					'name'       => 'KAKAS BARAT',
				),
			211 =>
				array(
					'id'         => '7102220',
					'regency_id' => '7102',
					'name'       => 'LEMBEAN TIMUR',
				),
			212 =>
				array(
					'id'         => '7102230',
					'regency_id' => '7102',
					'name'       => 'ERIS',
				),
			213 =>
				array(
					'id'         => '7102240',
					'regency_id' => '7102',
					'name'       => 'KOMBI',
				),
			214 =>
				array(
					'id'         => '7102250',
					'regency_id' => '7102',
					'name'       => 'TONDANO TIMUR',
				),
			215 =>
				array(
					'id'         => '7102251',
					'regency_id' => '7102',
					'name'       => 'TONDANO UTARA',
				),
			216 =>
				array(
					'id'         => '7103040',
					'regency_id' => '7103',
					'name'       => 'MANGANITU SELATAN',
				),
			217 =>
				array(
					'id'         => '7103041',
					'regency_id' => '7103',
					'name'       => 'TATOARENG',
				),
			218 =>
				array(
					'id'         => '7103050',
					'regency_id' => '7103',
					'name'       => 'TAMAKO',
				),
			219 =>
				array(
					'id'         => '7103060',
					'regency_id' => '7103',
					'name'       => 'TABUKAN SELATAN',
				),
			220 =>
				array(
					'id'         => '7103061',
					'regency_id' => '7103',
					'name'       => 'TABUKAN SELATAN TENGAH',
				),
			221 =>
				array(
					'id'         => '7103062',
					'regency_id' => '7103',
					'name'       => 'TABUKAN SELATAN TENGGARA',
				),
			222 =>
				array(
					'id'         => '7103070',
					'regency_id' => '7103',
					'name'       => 'TABUKAN TENGAH',
				),
			223 =>
				array(
					'id'         => '7103080',
					'regency_id' => '7103',
					'name'       => 'MANGANITU',
				),
			224 =>
				array(
					'id'         => '7103090',
					'regency_id' => '7103',
					'name'       => 'TAHUNA',
				),
			225 =>
				array(
					'id'         => '7103091',
					'regency_id' => '7103',
					'name'       => 'TAHUNA TIMUR',
				),
			226 =>
				array(
					'id'         => '7103092',
					'regency_id' => '7103',
					'name'       => 'TAHUNA BARAT',
				),
			227 =>
				array(
					'id'         => '7103100',
					'regency_id' => '7103',
					'name'       => 'TABUKAN UTARA',
				),
			228 =>
				array(
					'id'         => '7103101',
					'regency_id' => '7103',
					'name'       => 'NUSA TABUKAN',
				),
			229 =>
				array(
					'id'         => '7103102',
					'regency_id' => '7103',
					'name'       => 'KEPULAUAN MARORE',
				),
			230 =>
				array(
					'id'         => '7103110',
					'regency_id' => '7103',
					'name'       => 'KENDAHE',
				),
			231 =>
				array(
					'id'         => '7104010',
					'regency_id' => '7104',
					'name'       => 'KABARUAN',
				),
			232 =>
				array(
					'id'         => '7104011',
					'regency_id' => '7104',
					'name'       => 'DAMAU',
				),
			233 =>
				array(
					'id'         => '7104020',
					'regency_id' => '7104',
					'name'       => 'LIRUNG',
				),
			234 =>
				array(
					'id'         => '7104021',
					'regency_id' => '7104',
					'name'       => 'SALIBABU',
				),
			235 =>
				array(
					'id'         => '7104022',
					'regency_id' => '7104',
					'name'       => 'KALONGAN',
				),
			236 =>
				array(
					'id'         => '7104023',
					'regency_id' => '7104',
					'name'       => 'MORONGE',
				),
			237 =>
				array(
					'id'         => '7104030',
					'regency_id' => '7104',
					'name'       => 'MELONGUANE',
				),
			238 =>
				array(
					'id'         => '7104031',
					'regency_id' => '7104',
					'name'       => 'MELONGUANE TIMUR',
				),
			239 =>
				array(
					'id'         => '7104040',
					'regency_id' => '7104',
					'name'       => 'BEO',
				),
			240 =>
				array(
					'id'         => '7104041',
					'regency_id' => '7104',
					'name'       => 'BEO UTARA',
				),
			241 =>
				array(
					'id'         => '7104042',
					'regency_id' => '7104',
					'name'       => 'BEO SELATAN',
				),
			242 =>
				array(
					'id'         => '7104050',
					'regency_id' => '7104',
					'name'       => 'RAINIS',
				),
			243 =>
				array(
					'id'         => '7104051',
					'regency_id' => '7104',
					'name'       => 'TAMPA NA\'MMA',
				),
			244 =>
				array(
					'id'         => '7104052',
					'regency_id' => '7104',
					'name'       => 'PULUTAN',
				),
			245 =>
				array(
					'id'         => '7104060',
					'regency_id' => '7104',
					'name'       => 'ESSANG',
				),
			246 =>
				array(
					'id'         => '7104061',
					'regency_id' => '7104',
					'name'       => 'ESSANG SELATAN',
				),
			247 =>
				array(
					'id'         => '7104070',
					'regency_id' => '7104',
					'name'       => 'GEMEH',
				),
			248 =>
				array(
					'id'         => '7104080',
					'regency_id' => '7104',
					'name'       => 'NANUSA',
				),
			249 =>
				array(
					'id'         => '7104081',
					'regency_id' => '7104',
					'name'       => 'MIANGAS',
				),
			250 =>
				array(
					'id'         => '7105010',
					'regency_id' => '7105',
					'name'       => 'MODOINDING',
				),
			251 =>
				array(
					'id'         => '7105020',
					'regency_id' => '7105',
					'name'       => 'TOMPASO BARU',
				),
			252 =>
				array(
					'id'         => '7105021',
					'regency_id' => '7105',
					'name'       => 'MAESAAN',
				),
			253 =>
				array(
					'id'         => '7105070',
					'regency_id' => '7105',
					'name'       => 'RANOYAPO',
				),
			254 =>
				array(
					'id'         => '7105080',
					'regency_id' => '7105',
					'name'       => 'MOTOLING',
				),
			255 =>
				array(
					'id'         => '7105081',
					'regency_id' => '7105',
					'name'       => 'KUMELEMBUAI',
				),
			256 =>
				array(
					'id'         => '7105082',
					'regency_id' => '7105',
					'name'       => 'MOTOLING BARAT',
				),
			257 =>
				array(
					'id'         => '7105083',
					'regency_id' => '7105',
					'name'       => 'MOTOLING TIMUR',
				),
			258 =>
				array(
					'id'         => '7105090',
					'regency_id' => '7105',
					'name'       => 'SINONSAYANG',
				),
			259 =>
				array(
					'id'         => '7105100',
					'regency_id' => '7105',
					'name'       => 'TENGA',
				),
			260 =>
				array(
					'id'         => '7105111',
					'regency_id' => '7105',
					'name'       => 'AMURANG',
				),
			261 =>
				array(
					'id'         => '7105112',
					'regency_id' => '7105',
					'name'       => 'AMURANG BARAT',
				),
			262 =>
				array(
					'id'         => '7105113',
					'regency_id' => '7105',
					'name'       => 'AMURANG TIMUR',
				),
			263 =>
				array(
					'id'         => '7105120',
					'regency_id' => '7105',
					'name'       => 'TARERAN',
				),
			264 =>
				array(
					'id'         => '7105121',
					'regency_id' => '7105',
					'name'       => 'SULTA',
				),
			265 =>
				array(
					'id'         => '7105130',
					'regency_id' => '7105',
					'name'       => 'TUMPAAN',
				),
			266 =>
				array(
					'id'         => '7105131',
					'regency_id' => '7105',
					'name'       => 'TATAPAAN',
				),
			267 =>
				array(
					'id'         => '7106010',
					'regency_id' => '7106',
					'name'       => 'KEMA',
				),
			268 =>
				array(
					'id'         => '7106020',
					'regency_id' => '7106',
					'name'       => 'KAUDITAN',
				),
			269 =>
				array(
					'id'         => '7106030',
					'regency_id' => '7106',
					'name'       => 'AIRMADIDI',
				),
			270 =>
				array(
					'id'         => '7106040',
					'regency_id' => '7106',
					'name'       => 'KALAWAT',
				),
			271 =>
				array(
					'id'         => '7106050',
					'regency_id' => '7106',
					'name'       => 'DIMEMBE',
				),
			272 =>
				array(
					'id'         => '7106051',
					'regency_id' => '7106',
					'name'       => 'TALAWAAN',
				),
			273 =>
				array(
					'id'         => '7106060',
					'regency_id' => '7106',
					'name'       => 'WORI',
				),
			274 =>
				array(
					'id'         => '7106070',
					'regency_id' => '7106',
					'name'       => 'LIKUPANG BARAT',
				),
			275 =>
				array(
					'id'         => '7106080',
					'regency_id' => '7106',
					'name'       => 'LIKUPANG TIMUR',
				),
			276 =>
				array(
					'id'         => '7106081',
					'regency_id' => '7106',
					'name'       => 'LIKUPANG SELATAN',
				),
			277 =>
				array(
					'id'         => '7107010',
					'regency_id' => '7107',
					'name'       => 'SANGKUB',
				),
			278 =>
				array(
					'id'         => '7107020',
					'regency_id' => '7107',
					'name'       => 'BINTAUNA',
				),
			279 =>
				array(
					'id'         => '7107030',
					'regency_id' => '7107',
					'name'       => 'BOLANG ITANG TIMUR',
				),
			280 =>
				array(
					'id'         => '7107040',
					'regency_id' => '7107',
					'name'       => 'BOLANG ITANG BARAT',
				),
			281 =>
				array(
					'id'         => '7107050',
					'regency_id' => '7107',
					'name'       => 'KAIDIPANG',
				),
			282 =>
				array(
					'id'         => '7107060',
					'regency_id' => '7107',
					'name'       => 'PINOGALUMAN',
				),
			283 =>
				array(
					'id'         => '7108010',
					'regency_id' => '7108',
					'name'       => 'BIARO',
				),
			284 =>
				array(
					'id'         => '7108020',
					'regency_id' => '7108',
					'name'       => 'TAGULANDANG SELATAN',
				),
			285 =>
				array(
					'id'         => '7108030',
					'regency_id' => '7108',
					'name'       => 'TAGULANDANG',
				),
			286 =>
				array(
					'id'         => '7108040',
					'regency_id' => '7108',
					'name'       => 'TAGULANDANG UTARA',
				),
			287 =>
				array(
					'id'         => '7108050',
					'regency_id' => '7108',
					'name'       => 'SIAU BARAT SELATAN',
				),
			288 =>
				array(
					'id'         => '7108060',
					'regency_id' => '7108',
					'name'       => 'SIAU TIMUR SELATAN',
				),
			289 =>
				array(
					'id'         => '7108070',
					'regency_id' => '7108',
					'name'       => 'SIAU BARAT',
				),
			290 =>
				array(
					'id'         => '7108080',
					'regency_id' => '7108',
					'name'       => 'SIAU TENGAH',
				),
			291 =>
				array(
					'id'         => '7108090',
					'regency_id' => '7108',
					'name'       => 'SIAU TIMUR',
				),
			292 =>
				array(
					'id'         => '7108100',
					'regency_id' => '7108',
					'name'       => 'SIAU BARAT UTARA',
				),
			293 =>
				array(
					'id'         => '7109010',
					'regency_id' => '7109',
					'name'       => 'RATATOTOK',
				),
			294 =>
				array(
					'id'         => '7109020',
					'regency_id' => '7109',
					'name'       => 'PUSOMAEN',
				),
			295 =>
				array(
					'id'         => '7109030',
					'regency_id' => '7109',
					'name'       => 'BELANG',
				),
			296 =>
				array(
					'id'         => '7109040',
					'regency_id' => '7109',
					'name'       => 'RATAHAN',
				),
			297 =>
				array(
					'id'         => '7109041',
					'regency_id' => '7109',
					'name'       => 'PASAN',
				),
			298 =>
				array(
					'id'         => '7109042',
					'regency_id' => '7109',
					'name'       => 'RATAHAN TIMUR',
				),
			299 =>
				array(
					'id'         => '7109050',
					'regency_id' => '7109',
					'name'       => 'TOMBATU',
				),
			300 =>
				array(
					'id'         => '7109051',
					'regency_id' => '7109',
					'name'       => 'TOMBATU TIMUR',
				),
			301 =>
				array(
					'id'         => '7109052',
					'regency_id' => '7109',
					'name'       => 'TOMBATU UTARA',
				),
			302 =>
				array(
					'id'         => '7109060',
					'regency_id' => '7109',
					'name'       => 'TOULUAAN',
				),
			303 =>
				array(
					'id'         => '7109061',
					'regency_id' => '7109',
					'name'       => 'TOULUAAN SELATAN',
				),
			304 =>
				array(
					'id'         => '7109062',
					'regency_id' => '7109',
					'name'       => 'SILIAN RAYA',
				),
			305 =>
				array(
					'id'         => '7110010',
					'regency_id' => '7110',
					'name'       => 'POSIGADAN',
				),
			306 =>
				array(
					'id'         => '7110011',
					'regency_id' => '7110',
					'name'       => 'TOMINI',
				),
			307 =>
				array(
					'id'         => '7110020',
					'regency_id' => '7110',
					'name'       => 'BOLANG UKI',
				),
			308 =>
				array(
					'id'         => '7110021',
					'regency_id' => '7110',
					'name'       => 'HELUMO',
				),
			309 =>
				array(
					'id'         => '7110030',
					'regency_id' => '7110',
					'name'       => 'PINOLOSIAN',
				),
			310 =>
				array(
					'id'         => '7110040',
					'regency_id' => '7110',
					'name'       => 'PINOLOSIAN TENGAH',
				),
			311 =>
				array(
					'id'         => '7110050',
					'regency_id' => '7110',
					'name'       => 'PINOLOSIAN TIMUR',
				),
			312 =>
				array(
					'id'         => '7111010',
					'regency_id' => '7111',
					'name'       => 'NUANGAN',
				),
			313 =>
				array(
					'id'         => '7111011',
					'regency_id' => '7111',
					'name'       => 'MOTONGKAD',
				),
			314 =>
				array(
					'id'         => '7111020',
					'regency_id' => '7111',
					'name'       => 'TUTUYAN',
				),
			315 =>
				array(
					'id'         => '7111030',
					'regency_id' => '7111',
					'name'       => 'KOTABUNAN',
				),
			316 =>
				array(
					'id'         => '7111040',
					'regency_id' => '7111',
					'name'       => 'MODAYAG',
				),
			317 =>
				array(
					'id'         => '7111041',
					'regency_id' => '7111',
					'name'       => 'MOOAT',
				),
			318 =>
				array(
					'id'         => '7111050',
					'regency_id' => '7111',
					'name'       => 'MODAYAG BARAT',
				),
			319 =>
				array(
					'id'         => '7171010',
					'regency_id' => '7171',
					'name'       => 'MALALAYANG',
				),
			320 =>
				array(
					'id'         => '7171020',
					'regency_id' => '7171',
					'name'       => 'SARIO',
				),
			321 =>
				array(
					'id'         => '7171021',
					'regency_id' => '7171',
					'name'       => 'WANEA',
				),
			322 =>
				array(
					'id'         => '7171030',
					'regency_id' => '7171',
					'name'       => 'WENANG',
				),
			323 =>
				array(
					'id'         => '7171031',
					'regency_id' => '7171',
					'name'       => 'TIKALA',
				),
			324 =>
				array(
					'id'         => '7171032',
					'regency_id' => '7171',
					'name'       => 'PAAL DUA',
				),
			325 =>
				array(
					'id'         => '7171040',
					'regency_id' => '7171',
					'name'       => 'MAPANGET',
				),
			326 =>
				array(
					'id'         => '7171051',
					'regency_id' => '7171',
					'name'       => 'SINGKIL',
				),
			327 =>
				array(
					'id'         => '7171052',
					'regency_id' => '7171',
					'name'       => 'TUMINTING',
				),
			328 =>
				array(
					'id'         => '7171053',
					'regency_id' => '7171',
					'name'       => 'BUNAKEN',
				),
			329 =>
				array(
					'id'         => '7171054',
					'regency_id' => '7171',
					'name'       => 'BUNAKEN KEPULAUAN',
				),
			330 =>
				array(
					'id'         => '7172010',
					'regency_id' => '7172',
					'name'       => 'MADIDIR',
				),
			331 =>
				array(
					'id'         => '7172011',
					'regency_id' => '7172',
					'name'       => 'MATUARI',
				),
			332 =>
				array(
					'id'         => '7172012',
					'regency_id' => '7172',
					'name'       => 'GIRIAN',
				),
			333 =>
				array(
					'id'         => '7172021',
					'regency_id' => '7172',
					'name'       => 'LEMBEH SELATAN',
				),
			334 =>
				array(
					'id'         => '7172022',
					'regency_id' => '7172',
					'name'       => 'LEMBEH UTARA',
				),
			335 =>
				array(
					'id'         => '7172030',
					'regency_id' => '7172',
					'name'       => 'AERTEMBAGA',
				),
			336 =>
				array(
					'id'         => '7172031',
					'regency_id' => '7172',
					'name'       => 'MAESA',
				),
			337 =>
				array(
					'id'         => '7172040',
					'regency_id' => '7172',
					'name'       => 'RANOWULU',
				),
			338 =>
				array(
					'id'         => '7173010',
					'regency_id' => '7173',
					'name'       => 'TOMOHON SELATAN',
				),
			339 =>
				array(
					'id'         => '7173020',
					'regency_id' => '7173',
					'name'       => 'TOMOHON TENGAH',
				),
			340 =>
				array(
					'id'         => '7173021',
					'regency_id' => '7173',
					'name'       => 'TOMOHON TIMUR',
				),
			341 =>
				array(
					'id'         => '7173022',
					'regency_id' => '7173',
					'name'       => 'TOMOHON BARAT',
				),
			342 =>
				array(
					'id'         => '7173030',
					'regency_id' => '7173',
					'name'       => 'TOMOHON UTARA',
				),
			343 =>
				array(
					'id'         => '7174010',
					'regency_id' => '7174',
					'name'       => 'KOTAMOBAGU SELATAN',
				),
			344 =>
				array(
					'id'         => '7174020',
					'regency_id' => '7174',
					'name'       => 'KOTAMOBAGU TIMUR',
				),
			345 =>
				array(
					'id'         => '7174030',
					'regency_id' => '7174',
					'name'       => 'KOTAMOBAGU BARAT',
				),
			346 =>
				array(
					'id'         => '7174040',
					'regency_id' => '7174',
					'name'       => 'KOTAMOBAGU UTARA',
				),
			347 =>
				array(
					'id'         => '7201030',
					'regency_id' => '7201',
					'name'       => 'TOTIKUM',
				),
			348 =>
				array(
					'id'         => '7201031',
					'regency_id' => '7201',
					'name'       => 'TOTIKUM SELATAN',
				),
			349 =>
				array(
					'id'         => '7201040',
					'regency_id' => '7201',
					'name'       => 'TINANGKUNG',
				),
			350 =>
				array(
					'id'         => '7201041',
					'regency_id' => '7201',
					'name'       => 'TINANGKUNG SELATAN',
				),
			351 =>
				array(
					'id'         => '7201042',
					'regency_id' => '7201',
					'name'       => 'TINANGKUNG UTARA',
				),
			352 =>
				array(
					'id'         => '7201050',
					'regency_id' => '7201',
					'name'       => 'LIANG',
				),
			353 =>
				array(
					'id'         => '7201051',
					'regency_id' => '7201',
					'name'       => 'PELING TENGAH',
				),
			354 =>
				array(
					'id'         => '7201060',
					'regency_id' => '7201',
					'name'       => 'BULAGI',
				),
			355 =>
				array(
					'id'         => '7201061',
					'regency_id' => '7201',
					'name'       => 'BULAGI SELATAN',
				),
			356 =>
				array(
					'id'         => '7201062',
					'regency_id' => '7201',
					'name'       => 'BULAGI UTARA',
				),
			357 =>
				array(
					'id'         => '7201070',
					'regency_id' => '7201',
					'name'       => 'BUKO',
				),
			358 =>
				array(
					'id'         => '7201071',
					'regency_id' => '7201',
					'name'       => 'BUKO SELATAN',
				),
			359 =>
				array(
					'id'         => '7202010',
					'regency_id' => '7202',
					'name'       => 'TOILI',
				),
			360 =>
				array(
					'id'         => '7202011',
					'regency_id' => '7202',
					'name'       => 'TOILI BARAT',
				),
			361 =>
				array(
					'id'         => '7202012',
					'regency_id' => '7202',
					'name'       => 'MOILONG',
				),
			362 =>
				array(
					'id'         => '7202020',
					'regency_id' => '7202',
					'name'       => 'BATUI',
				),
			363 =>
				array(
					'id'         => '7202021',
					'regency_id' => '7202',
					'name'       => 'BATUI SELATAN',
				),
			364 =>
				array(
					'id'         => '7202030',
					'regency_id' => '7202',
					'name'       => 'BUNTA',
				),
			365 =>
				array(
					'id'         => '7202031',
					'regency_id' => '7202',
					'name'       => 'NUHON',
				),
			366 =>
				array(
					'id'         => '7202032',
					'regency_id' => '7202',
					'name'       => 'SIMPANG RAYA',
				),
			367 =>
				array(
					'id'         => '7202040',
					'regency_id' => '7202',
					'name'       => 'KINTOM',
				),
			368 =>
				array(
					'id'         => '7202050',
					'regency_id' => '7202',
					'name'       => 'LUWUK',
				),
			369 =>
				array(
					'id'         => '7202051',
					'regency_id' => '7202',
					'name'       => 'LUWUK TIMUR',
				),
			370 =>
				array(
					'id'         => '7202052',
					'regency_id' => '7202',
					'name'       => 'LUWUK UTARA',
				),
			371 =>
				array(
					'id'         => '7202053',
					'regency_id' => '7202',
					'name'       => 'LUWUK SELATAN',
				),
			372 =>
				array(
					'id'         => '7202054',
					'regency_id' => '7202',
					'name'       => 'NAMBO',
				),
			373 =>
				array(
					'id'         => '7202060',
					'regency_id' => '7202',
					'name'       => 'PAGIMANA',
				),
			374 =>
				array(
					'id'         => '7202061',
					'regency_id' => '7202',
					'name'       => 'BUALEMO',
				),
			375 =>
				array(
					'id'         => '7202062',
					'regency_id' => '7202',
					'name'       => 'LOBU',
				),
			376 =>
				array(
					'id'         => '7202070',
					'regency_id' => '7202',
					'name'       => 'LAMALA',
				),
			377 =>
				array(
					'id'         => '7202071',
					'regency_id' => '7202',
					'name'       => 'MASAMA',
				),
			378 =>
				array(
					'id'         => '7202072',
					'regency_id' => '7202',
					'name'       => 'MANTOH',
				),
			379 =>
				array(
					'id'         => '7202080',
					'regency_id' => '7202',
					'name'       => 'BALANTAK',
				),
			380 =>
				array(
					'id'         => '7202081',
					'regency_id' => '7202',
					'name'       => 'BALANTAK SELATAN',
				),
			381 =>
				array(
					'id'         => '7202082',
					'regency_id' => '7202',
					'name'       => 'BALANTAK UTARA',
				),
			382 =>
				array(
					'id'         => '7203010',
					'regency_id' => '7203',
					'name'       => 'MENUI KEPULAUAN',
				),
			383 =>
				array(
					'id'         => '7203020',
					'regency_id' => '7203',
					'name'       => 'BUNGKU SELATAN',
				),
			384 =>
				array(
					'id'         => '7203021',
					'regency_id' => '7203',
					'name'       => 'BAHODOPI',
				),
			385 =>
				array(
					'id'         => '7203022',
					'regency_id' => '7203',
					'name'       => 'BUNGKU PESISIR',
				),
			386 =>
				array(
					'id'         => '7203030',
					'regency_id' => '7203',
					'name'       => 'BUNGKU TENGAH',
				),
			387 =>
				array(
					'id'         => '7203031',
					'regency_id' => '7203',
					'name'       => 'BUNGKU TIMUR',
				),
			388 =>
				array(
					'id'         => '7203040',
					'regency_id' => '7203',
					'name'       => 'BUNGKU BARAT',
				),
			389 =>
				array(
					'id'         => '7203041',
					'regency_id' => '7203',
					'name'       => 'BUMI RAYA',
				),
			390 =>
				array(
					'id'         => '7203042',
					'regency_id' => '7203',
					'name'       => 'WITA PONDA',
				),
			391 =>
				array(
					'id'         => '7204010',
					'regency_id' => '7204',
					'name'       => 'PAMONA SELATAN',
				),
			392 =>
				array(
					'id'         => '7204011',
					'regency_id' => '7204',
					'name'       => 'PAMONA BARAT',
				),
			393 =>
				array(
					'id'         => '7204012',
					'regency_id' => '7204',
					'name'       => 'PAMONA TENGGARA',
				),
			394 =>
				array(
					'id'         => '7204020',
					'regency_id' => '7204',
					'name'       => 'LORE SELATAN',
				),
			395 =>
				array(
					'id'         => '7204021',
					'regency_id' => '7204',
					'name'       => 'LORE BARAT',
				),
			396 =>
				array(
					'id'         => '7204030',
					'regency_id' => '7204',
					'name'       => 'PAMONA PUSALEMBA',
				),
			397 =>
				array(
					'id'         => '7204031',
					'regency_id' => '7204',
					'name'       => 'PAMONA TIMUR',
				),
			398 =>
				array(
					'id'         => '7204032',
					'regency_id' => '7204',
					'name'       => 'PAMONA UTARA',
				),
			399 =>
				array(
					'id'         => '7204040',
					'regency_id' => '7204',
					'name'       => 'LORE UTARA',
				),
			400 =>
				array(
					'id'         => '7204041',
					'regency_id' => '7204',
					'name'       => 'LORE TENGAH',
				),
			401 =>
				array(
					'id'         => '7204042',
					'regency_id' => '7204',
					'name'       => 'LORE TIMUR',
				),
			402 =>
				array(
					'id'         => '7204043',
					'regency_id' => '7204',
					'name'       => 'LORE PEORE',
				),
			403 =>
				array(
					'id'         => '7204050',
					'regency_id' => '7204',
					'name'       => 'POSO PESISIR',
				),
			404 =>
				array(
					'id'         => '7204051',
					'regency_id' => '7204',
					'name'       => 'POSO PESISIR SELATAN',
				),
			405 =>
				array(
					'id'         => '7204052',
					'regency_id' => '7204',
					'name'       => 'POSO PESISIR UTARA',
				),
			406 =>
				array(
					'id'         => '7204060',
					'regency_id' => '7204',
					'name'       => 'LAGE',
				),
			407 =>
				array(
					'id'         => '7204070',
					'regency_id' => '7204',
					'name'       => 'POSO KOTA',
				),
			408 =>
				array(
					'id'         => '7204071',
					'regency_id' => '7204',
					'name'       => 'POSO KOTA UTARA',
				),
			409 =>
				array(
					'id'         => '7204072',
					'regency_id' => '7204',
					'name'       => 'POSO KOTA SELATAN',
				),
			410 =>
				array(
					'id'         => '7205041',
					'regency_id' => '7205',
					'name'       => 'RIO PAKAVA',
				),
			411 =>
				array(
					'id'         => '7205051',
					'regency_id' => '7205',
					'name'       => 'PINEMBANI',
				),
			412 =>
				array(
					'id'         => '7205080',
					'regency_id' => '7205',
					'name'       => 'BANAWA',
				),
			413 =>
				array(
					'id'         => '7205081',
					'regency_id' => '7205',
					'name'       => 'BANAWA SELATAN',
				),
			414 =>
				array(
					'id'         => '7205082',
					'regency_id' => '7205',
					'name'       => 'BANAWA TENGAH',
				),
			415 =>
				array(
					'id'         => '7205090',
					'regency_id' => '7205',
					'name'       => 'LABUAN',
				),
			416 =>
				array(
					'id'         => '7205091',
					'regency_id' => '7205',
					'name'       => 'TANANTOVEA',
				),
			417 =>
				array(
					'id'         => '7205100',
					'regency_id' => '7205',
					'name'       => 'SINDUE',
				),
			418 =>
				array(
					'id'         => '7205101',
					'regency_id' => '7205',
					'name'       => 'SINDUE TOMBUSABORA',
				),
			419 =>
				array(
					'id'         => '7205102',
					'regency_id' => '7205',
					'name'       => 'SINDUE TOBATA',
				),
			420 =>
				array(
					'id'         => '7205120',
					'regency_id' => '7205',
					'name'       => 'SIRENJA',
				),
			421 =>
				array(
					'id'         => '7205130',
					'regency_id' => '7205',
					'name'       => 'BALAESANG',
				),
			422 =>
				array(
					'id'         => '7205131',
					'regency_id' => '7205',
					'name'       => 'BALAESANG TANJUNG',
				),
			423 =>
				array(
					'id'         => '7205140',
					'regency_id' => '7205',
					'name'       => 'DAMPELAS',
				),
			424 =>
				array(
					'id'         => '7205160',
					'regency_id' => '7205',
					'name'       => 'SOJOL',
				),
			425 =>
				array(
					'id'         => '7205161',
					'regency_id' => '7205',
					'name'       => 'SOJOL UTARA',
				),
			426 =>
				array(
					'id'         => '7206010',
					'regency_id' => '7206',
					'name'       => 'DAMPAL SELATAN',
				),
			427 =>
				array(
					'id'         => '7206020',
					'regency_id' => '7206',
					'name'       => 'DAMPAL UTARA',
				),
			428 =>
				array(
					'id'         => '7206030',
					'regency_id' => '7206',
					'name'       => 'DONDO',
				),
			429 =>
				array(
					'id'         => '7206031',
					'regency_id' => '7206',
					'name'       => 'OGODEIDE',
				),
			430 =>
				array(
					'id'         => '7206032',
					'regency_id' => '7206',
					'name'       => 'BASIDONDO',
				),
			431 =>
				array(
					'id'         => '7206040',
					'regency_id' => '7206',
					'name'       => 'BAOLAN',
				),
			432 =>
				array(
					'id'         => '7206041',
					'regency_id' => '7206',
					'name'       => 'LAMPASIO',
				),
			433 =>
				array(
					'id'         => '7206050',
					'regency_id' => '7206',
					'name'       => 'GALANG',
				),
			434 =>
				array(
					'id'         => '7206060',
					'regency_id' => '7206',
					'name'       => 'TOLITOLI UTARA',
				),
			435 =>
				array(
					'id'         => '7206061',
					'regency_id' => '7206',
					'name'       => 'DAKO PAMEAN',
				),
			436 =>
				array(
					'id'         => '7207010',
					'regency_id' => '7207',
					'name'       => 'LAKEA',
				),
			437 =>
				array(
					'id'         => '7207011',
					'regency_id' => '7207',
					'name'       => 'BIAU',
				),
			438 =>
				array(
					'id'         => '7207012',
					'regency_id' => '7207',
					'name'       => 'KARAMAT',
				),
			439 =>
				array(
					'id'         => '7207020',
					'regency_id' => '7207',
					'name'       => 'MOMUNU',
				),
			440 =>
				array(
					'id'         => '7207021',
					'regency_id' => '7207',
					'name'       => 'TILOAN',
				),
			441 =>
				array(
					'id'         => '7207030',
					'regency_id' => '7207',
					'name'       => 'BOKAT',
				),
			442 =>
				array(
					'id'         => '7207031',
					'regency_id' => '7207',
					'name'       => 'BUKAL',
				),
			443 =>
				array(
					'id'         => '7207040',
					'regency_id' => '7207',
					'name'       => 'BUNOBOGU',
				),
			444 =>
				array(
					'id'         => '7207041',
					'regency_id' => '7207',
					'name'       => 'GADUNG',
				),
			445 =>
				array(
					'id'         => '7207050',
					'regency_id' => '7207',
					'name'       => 'PALELEH',
				),
			446 =>
				array(
					'id'         => '7207051',
					'regency_id' => '7207',
					'name'       => 'PALELEH BARAT',
				),
			447 =>
				array(
					'id'         => '7208010',
					'regency_id' => '7208',
					'name'       => 'SAUSU',
				),
			448 =>
				array(
					'id'         => '7208011',
					'regency_id' => '7208',
					'name'       => 'TORUE',
				),
			449 =>
				array(
					'id'         => '7208012',
					'regency_id' => '7208',
					'name'       => 'BALINGGI',
				),
			450 =>
				array(
					'id'         => '7208020',
					'regency_id' => '7208',
					'name'       => 'PARIGI',
				),
			451 =>
				array(
					'id'         => '7208021',
					'regency_id' => '7208',
					'name'       => 'PARIGI SELATAN',
				),
			452 =>
				array(
					'id'         => '7208022',
					'regency_id' => '7208',
					'name'       => 'PARIGI BARAT',
				),
			453 =>
				array(
					'id'         => '7208023',
					'regency_id' => '7208',
					'name'       => 'PARIGI UTARA',
				),
			454 =>
				array(
					'id'         => '7208024',
					'regency_id' => '7208',
					'name'       => 'PARIGI TENGAH',
				),
			455 =>
				array(
					'id'         => '7208030',
					'regency_id' => '7208',
					'name'       => 'AMPIBABO',
				),
			456 =>
				array(
					'id'         => '7208031',
					'regency_id' => '7208',
					'name'       => 'KASIMBAR',
				),
			457 =>
				array(
					'id'         => '7208032',
					'regency_id' => '7208',
					'name'       => 'TORIBULU',
				),
			458 =>
				array(
					'id'         => '7208033',
					'regency_id' => '7208',
					'name'       => 'SINIU',
				),
			459 =>
				array(
					'id'         => '7208040',
					'regency_id' => '7208',
					'name'       => 'TINOMBO',
				),
			460 =>
				array(
					'id'         => '7208041',
					'regency_id' => '7208',
					'name'       => 'TINOMBO SELATAN',
				),
			461 =>
				array(
					'id'         => '7208042',
					'regency_id' => '7208',
					'name'       => 'SIDOAN',
				),
			462 =>
				array(
					'id'         => '7208050',
					'regency_id' => '7208',
					'name'       => 'TOMINI',
				),
			463 =>
				array(
					'id'         => '7208051',
					'regency_id' => '7208',
					'name'       => 'MEPANGA',
				),
			464 =>
				array(
					'id'         => '7208052',
					'regency_id' => '7208',
					'name'       => 'PALASA',
				),
			465 =>
				array(
					'id'         => '7208060',
					'regency_id' => '7208',
					'name'       => 'MOUTONG',
				),
			466 =>
				array(
					'id'         => '7208061',
					'regency_id' => '7208',
					'name'       => 'BOLANO LAMBUNU',
				),
			467 =>
				array(
					'id'         => '7208062',
					'regency_id' => '7208',
					'name'       => 'TAOPA',
				),
			468 =>
				array(
					'id'         => '7208063',
					'regency_id' => '7208',
					'name'       => 'BOLANO',
				),
			469 =>
				array(
					'id'         => '7208064',
					'regency_id' => '7208',
					'name'       => 'ONGKA MALINO',
				),
			470 =>
				array(
					'id'         => '7209010',
					'regency_id' => '7209',
					'name'       => 'TOJO BARAT',
				),
			471 =>
				array(
					'id'         => '7209020',
					'regency_id' => '7209',
					'name'       => 'TOJO',
				),
			472 =>
				array(
					'id'         => '7209030',
					'regency_id' => '7209',
					'name'       => 'ULUBONGKA',
				),
			473 =>
				array(
					'id'         => '7209040',
					'regency_id' => '7209',
					'name'       => 'AMPANA TETE',
				),
			474 =>
				array(
					'id'         => '7209050',
					'regency_id' => '7209',
					'name'       => 'AMPANA KOTA',
				),
			475 =>
				array(
					'id'         => '7209051',
					'regency_id' => '7209',
					'name'       => 'RATOLINDO',
				),
			476 =>
				array(
					'id'         => '7209060',
					'regency_id' => '7209',
					'name'       => 'UNA - UNA',
				),
			477 =>
				array(
					'id'         => '7209061',
					'regency_id' => '7209',
					'name'       => 'BATUDAKA',
				),
			478 =>
				array(
					'id'         => '7209070',
					'regency_id' => '7209',
					'name'       => 'TOGEAN',
				),
			479 =>
				array(
					'id'         => '7209080',
					'regency_id' => '7209',
					'name'       => 'WALEA KEPULAUAN',
				),
			480 =>
				array(
					'id'         => '7209081',
					'regency_id' => '7209',
					'name'       => 'WALEA BESAR',
				),
			481 =>
				array(
					'id'         => '7209082',
					'regency_id' => '7209',
					'name'       => 'TALATAKO',
				),
			482 =>
				array(
					'id'         => '7210010',
					'regency_id' => '7210',
					'name'       => 'PIPIKORO',
				),
			483 =>
				array(
					'id'         => '7210020',
					'regency_id' => '7210',
					'name'       => 'KULAWI SELATAN',
				),
			484 =>
				array(
					'id'         => '7210030',
					'regency_id' => '7210',
					'name'       => 'KULAWI',
				),
			485 =>
				array(
					'id'         => '7210040',
					'regency_id' => '7210',
					'name'       => 'LINDU',
				),
			486 =>
				array(
					'id'         => '7210050',
					'regency_id' => '7210',
					'name'       => 'NOKILALAKI',
				),
			487 =>
				array(
					'id'         => '7210060',
					'regency_id' => '7210',
					'name'       => 'PALOLO',
				),
			488 =>
				array(
					'id'         => '7210070',
					'regency_id' => '7210',
					'name'       => 'GUMBASA',
				),
			489 =>
				array(
					'id'         => '7210080',
					'regency_id' => '7210',
					'name'       => 'DOLO SELATAN',
				),
			490 =>
				array(
					'id'         => '7210090',
					'regency_id' => '7210',
					'name'       => 'DOLO BARAT',
				),
			491 =>
				array(
					'id'         => '7210100',
					'regency_id' => '7210',
					'name'       => 'TANAMBULAVA',
				),
			492 =>
				array(
					'id'         => '7210110',
					'regency_id' => '7210',
					'name'       => 'DOLO',
				),
			493 =>
				array(
					'id'         => '7210120',
					'regency_id' => '7210',
					'name'       => 'SIGI BIROMARU',
				),
			494 =>
				array(
					'id'         => '7210130',
					'regency_id' => '7210',
					'name'       => 'MARAWOLA',
				),
			495 =>
				array(
					'id'         => '7210140',
					'regency_id' => '7210',
					'name'       => 'MARAWOLA BARAT',
				),
			496 =>
				array(
					'id'         => '7210150',
					'regency_id' => '7210',
					'name'       => 'KINOVARO',
				),
			497 =>
				array(
					'id'         => '7211010',
					'regency_id' => '7211',
					'name'       => 'BANGKURUNG',
				),
			498 =>
				array(
					'id'         => '7211020',
					'regency_id' => '7211',
					'name'       => 'LABOBO',
				),
			499 =>
				array(
					'id'         => '7211030',
					'regency_id' => '7211',
					'name'       => 'BANGGAI UTARA',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '7211040',
					'regency_id' => '7211',
					'name'       => 'BANGGAI',
				),
			1   =>
				array(
					'id'         => '7211050',
					'regency_id' => '7211',
					'name'       => 'BANGGAI TENGAH',
				),
			2   =>
				array(
					'id'         => '7211060',
					'regency_id' => '7211',
					'name'       => 'BANGGAI SELATAN',
				),
			3   =>
				array(
					'id'         => '7211070',
					'regency_id' => '7211',
					'name'       => 'BOKAN KEPULAUAN',
				),
			4   =>
				array(
					'id'         => '7212010',
					'regency_id' => '7212',
					'name'       => 'MORI ATAS',
				),
			5   =>
				array(
					'id'         => '7212020',
					'regency_id' => '7212',
					'name'       => 'LEMBO',
				),
			6   =>
				array(
					'id'         => '7212030',
					'regency_id' => '7212',
					'name'       => 'LEMBO RAYA',
				),
			7   =>
				array(
					'id'         => '7212040',
					'regency_id' => '7212',
					'name'       => 'PETASIA TIMUR',
				),
			8   =>
				array(
					'id'         => '7212050',
					'regency_id' => '7212',
					'name'       => 'PETASIA',
				),
			9   =>
				array(
					'id'         => '7212060',
					'regency_id' => '7212',
					'name'       => 'PETASIA BARAT',
				),
			10  =>
				array(
					'id'         => '7212070',
					'regency_id' => '7212',
					'name'       => 'MORI UTARA',
				),
			11  =>
				array(
					'id'         => '7212080',
					'regency_id' => '7212',
					'name'       => 'SOYO JAYA',
				),
			12  =>
				array(
					'id'         => '7212090',
					'regency_id' => '7212',
					'name'       => 'BUNGKU UTARA',
				),
			13  =>
				array(
					'id'         => '7212100',
					'regency_id' => '7212',
					'name'       => 'MAMOSALATO',
				),
			14  =>
				array(
					'id'         => '7271010',
					'regency_id' => '7271',
					'name'       => 'PALU BARAT',
				),
			15  =>
				array(
					'id'         => '7271011',
					'regency_id' => '7271',
					'name'       => 'TATANGA',
				),
			16  =>
				array(
					'id'         => '7271012',
					'regency_id' => '7271',
					'name'       => 'ULUJADI',
				),
			17  =>
				array(
					'id'         => '7271020',
					'regency_id' => '7271',
					'name'       => 'PALU SELATAN',
				),
			18  =>
				array(
					'id'         => '7271030',
					'regency_id' => '7271',
					'name'       => 'PALU TIMUR',
				),
			19  =>
				array(
					'id'         => '7271031',
					'regency_id' => '7271',
					'name'       => 'MANTIKULORE',
				),
			20  =>
				array(
					'id'         => '7271040',
					'regency_id' => '7271',
					'name'       => 'PALU UTARA',
				),
			21  =>
				array(
					'id'         => '7271041',
					'regency_id' => '7271',
					'name'       => 'TAWAELI',
				),
			22  =>
				array(
					'id'         => '7301010',
					'regency_id' => '7301',
					'name'       => 'PASIMARANNU',
				),
			23  =>
				array(
					'id'         => '7301011',
					'regency_id' => '7301',
					'name'       => 'PASILAMBENA',
				),
			24  =>
				array(
					'id'         => '7301020',
					'regency_id' => '7301',
					'name'       => 'PASIMASSUNGGU',
				),
			25  =>
				array(
					'id'         => '7301021',
					'regency_id' => '7301',
					'name'       => 'TAKABONERATE',
				),
			26  =>
				array(
					'id'         => '7301022',
					'regency_id' => '7301',
					'name'       => 'PASIMASSUNGGU TIMUR',
				),
			27  =>
				array(
					'id'         => '7301030',
					'regency_id' => '7301',
					'name'       => 'BONTOSIKUYU',
				),
			28  =>
				array(
					'id'         => '7301040',
					'regency_id' => '7301',
					'name'       => 'BONTOHARU',
				),
			29  =>
				array(
					'id'         => '7301041',
					'regency_id' => '7301',
					'name'       => 'BENTENG',
				),
			30  =>
				array(
					'id'         => '7301042',
					'regency_id' => '7301',
					'name'       => 'BONTOMANAI',
				),
			31  =>
				array(
					'id'         => '7301050',
					'regency_id' => '7301',
					'name'       => 'BONTOMATENE',
				),
			32  =>
				array(
					'id'         => '7301051',
					'regency_id' => '7301',
					'name'       => 'BUKI',
				),
			33  =>
				array(
					'id'         => '7302010',
					'regency_id' => '7302',
					'name'       => 'GANTARANG',
				),
			34  =>
				array(
					'id'         => '7302020',
					'regency_id' => '7302',
					'name'       => 'UJUNG BULU',
				),
			35  =>
				array(
					'id'         => '7302021',
					'regency_id' => '7302',
					'name'       => 'UJUNG LOE',
				),
			36  =>
				array(
					'id'         => '7302030',
					'regency_id' => '7302',
					'name'       => 'BONTO BAHARI',
				),
			37  =>
				array(
					'id'         => '7302040',
					'regency_id' => '7302',
					'name'       => 'BONTOTIRO',
				),
			38  =>
				array(
					'id'         => '7302050',
					'regency_id' => '7302',
					'name'       => 'HERO LANGE-LANGE',
				),
			39  =>
				array(
					'id'         => '7302060',
					'regency_id' => '7302',
					'name'       => 'KAJANG',
				),
			40  =>
				array(
					'id'         => '7302070',
					'regency_id' => '7302',
					'name'       => 'BULUKUMPA',
				),
			41  =>
				array(
					'id'         => '7302080',
					'regency_id' => '7302',
					'name'       => 'RILAU ALE',
				),
			42  =>
				array(
					'id'         => '7302090',
					'regency_id' => '7302',
					'name'       => 'KINDANG',
				),
			43  =>
				array(
					'id'         => '7303010',
					'regency_id' => '7303',
					'name'       => 'BISSAPPU',
				),
			44  =>
				array(
					'id'         => '7303011',
					'regency_id' => '7303',
					'name'       => 'ULUERE',
				),
			45  =>
				array(
					'id'         => '7303012',
					'regency_id' => '7303',
					'name'       => 'SINOA',
				),
			46  =>
				array(
					'id'         => '7303020',
					'regency_id' => '7303',
					'name'       => 'BANTAENG',
				),
			47  =>
				array(
					'id'         => '7303021',
					'regency_id' => '7303',
					'name'       => 'EREMERASA',
				),
			48  =>
				array(
					'id'         => '7303030',
					'regency_id' => '7303',
					'name'       => 'TOMPOBULU',
				),
			49  =>
				array(
					'id'         => '7303031',
					'regency_id' => '7303',
					'name'       => 'PA\'JUKUKANG',
				),
			50  =>
				array(
					'id'         => '7303032',
					'regency_id' => '7303',
					'name'       => 'GANTARANGKEKE',
				),
			51  =>
				array(
					'id'         => '7304010',
					'regency_id' => '7304',
					'name'       => 'BANGKALA',
				),
			52  =>
				array(
					'id'         => '7304011',
					'regency_id' => '7304',
					'name'       => 'BANGKALA BARAT',
				),
			53  =>
				array(
					'id'         => '7304020',
					'regency_id' => '7304',
					'name'       => 'TAMALATEA',
				),
			54  =>
				array(
					'id'         => '7304021',
					'regency_id' => '7304',
					'name'       => 'BONTORAMBA',
				),
			55  =>
				array(
					'id'         => '7304030',
					'regency_id' => '7304',
					'name'       => 'BINAMU',
				),
			56  =>
				array(
					'id'         => '7304031',
					'regency_id' => '7304',
					'name'       => 'TURATEA',
				),
			57  =>
				array(
					'id'         => '7304040',
					'regency_id' => '7304',
					'name'       => 'BATANG',
				),
			58  =>
				array(
					'id'         => '7304041',
					'regency_id' => '7304',
					'name'       => 'ARUNGKEKE',
				),
			59  =>
				array(
					'id'         => '7304042',
					'regency_id' => '7304',
					'name'       => 'TAROWANG',
				),
			60  =>
				array(
					'id'         => '7304050',
					'regency_id' => '7304',
					'name'       => 'KELARA',
				),
			61  =>
				array(
					'id'         => '7304051',
					'regency_id' => '7304',
					'name'       => 'RUMBIA',
				),
			62  =>
				array(
					'id'         => '7305010',
					'regency_id' => '7305',
					'name'       => 'MANGARA BOMBANG',
				),
			63  =>
				array(
					'id'         => '7305020',
					'regency_id' => '7305',
					'name'       => 'MAPPAKASUNGGU',
				),
			64  =>
				array(
					'id'         => '7305021',
					'regency_id' => '7305',
					'name'       => 'SANROBONE',
				),
			65  =>
				array(
					'id'         => '7305030',
					'regency_id' => '7305',
					'name'       => 'POLOMBANGKENG SELATAN',
				),
			66  =>
				array(
					'id'         => '7305031',
					'regency_id' => '7305',
					'name'       => 'PATTALLASSANG',
				),
			67  =>
				array(
					'id'         => '7305040',
					'regency_id' => '7305',
					'name'       => 'POLOMBANGKENG UTARA',
				),
			68  =>
				array(
					'id'         => '7305050',
					'regency_id' => '7305',
					'name'       => 'GALESONG SELATAN',
				),
			69  =>
				array(
					'id'         => '7305051',
					'regency_id' => '7305',
					'name'       => 'GALESONG',
				),
			70  =>
				array(
					'id'         => '7305060',
					'regency_id' => '7305',
					'name'       => 'GALESONG UTARA',
				),
			71  =>
				array(
					'id'         => '7306010',
					'regency_id' => '7306',
					'name'       => 'BONTONOMPO',
				),
			72  =>
				array(
					'id'         => '7306011',
					'regency_id' => '7306',
					'name'       => 'BONTONOMPO SELATAN',
				),
			73  =>
				array(
					'id'         => '7306020',
					'regency_id' => '7306',
					'name'       => 'BAJENG',
				),
			74  =>
				array(
					'id'         => '7306021',
					'regency_id' => '7306',
					'name'       => 'BAJENG BARAT',
				),
			75  =>
				array(
					'id'         => '7306030',
					'regency_id' => '7306',
					'name'       => 'PALLANGGA',
				),
			76  =>
				array(
					'id'         => '7306031',
					'regency_id' => '7306',
					'name'       => 'BAROMBONG',
				),
			77  =>
				array(
					'id'         => '7306040',
					'regency_id' => '7306',
					'name'       => 'SOMBA OPU',
				),
			78  =>
				array(
					'id'         => '7306050',
					'regency_id' => '7306',
					'name'       => 'BONTOMARANNU',
				),
			79  =>
				array(
					'id'         => '7306051',
					'regency_id' => '7306',
					'name'       => 'PATTALLASSANG',
				),
			80  =>
				array(
					'id'         => '7306060',
					'regency_id' => '7306',
					'name'       => 'PARANGLOE',
				),
			81  =>
				array(
					'id'         => '7306061',
					'regency_id' => '7306',
					'name'       => 'MANUJU',
				),
			82  =>
				array(
					'id'         => '7306070',
					'regency_id' => '7306',
					'name'       => 'TINGGIMONCONG',
				),
			83  =>
				array(
					'id'         => '7306071',
					'regency_id' => '7306',
					'name'       => 'TOMBOLO PAO',
				),
			84  =>
				array(
					'id'         => '7306072',
					'regency_id' => '7306',
					'name'       => 'PARIGI',
				),
			85  =>
				array(
					'id'         => '7306080',
					'regency_id' => '7306',
					'name'       => 'BUNGAYA',
				),
			86  =>
				array(
					'id'         => '7306081',
					'regency_id' => '7306',
					'name'       => 'BONTOLEMPANGAN',
				),
			87  =>
				array(
					'id'         => '7306090',
					'regency_id' => '7306',
					'name'       => 'TOMPOBULU',
				),
			88  =>
				array(
					'id'         => '7306091',
					'regency_id' => '7306',
					'name'       => 'BIRINGBULU',
				),
			89  =>
				array(
					'id'         => '7307010',
					'regency_id' => '7307',
					'name'       => 'SINJAI BARAT',
				),
			90  =>
				array(
					'id'         => '7307020',
					'regency_id' => '7307',
					'name'       => 'SINJAI BORONG',
				),
			91  =>
				array(
					'id'         => '7307030',
					'regency_id' => '7307',
					'name'       => 'SINJAI SELATAN',
				),
			92  =>
				array(
					'id'         => '7307040',
					'regency_id' => '7307',
					'name'       => 'TELLU LIMPOE',
				),
			93  =>
				array(
					'id'         => '7307050',
					'regency_id' => '7307',
					'name'       => 'SINJAI TIMUR',
				),
			94  =>
				array(
					'id'         => '7307060',
					'regency_id' => '7307',
					'name'       => 'SINJAI TENGAH',
				),
			95  =>
				array(
					'id'         => '7307070',
					'regency_id' => '7307',
					'name'       => 'SINJAI UTARA',
				),
			96  =>
				array(
					'id'         => '7307080',
					'regency_id' => '7307',
					'name'       => 'BULUPODDO',
				),
			97  =>
				array(
					'id'         => '7307090',
					'regency_id' => '7307',
					'name'       => 'PULAU SEMBILAN',
				),
			98  =>
				array(
					'id'         => '7308010',
					'regency_id' => '7308',
					'name'       => 'MANDAI',
				),
			99  =>
				array(
					'id'         => '7308011',
					'regency_id' => '7308',
					'name'       => 'MONCONGLOE',
				),
			100 =>
				array(
					'id'         => '7308020',
					'regency_id' => '7308',
					'name'       => 'MAROS BARU',
				),
			101 =>
				array(
					'id'         => '7308021',
					'regency_id' => '7308',
					'name'       => 'MARUSU',
				),
			102 =>
				array(
					'id'         => '7308022',
					'regency_id' => '7308',
					'name'       => 'TURIKALE',
				),
			103 =>
				array(
					'id'         => '7308023',
					'regency_id' => '7308',
					'name'       => 'LAU',
				),
			104 =>
				array(
					'id'         => '7308030',
					'regency_id' => '7308',
					'name'       => 'BONTOA',
				),
			105 =>
				array(
					'id'         => '7308040',
					'regency_id' => '7308',
					'name'       => 'BANTIMURUNG',
				),
			106 =>
				array(
					'id'         => '7308041',
					'regency_id' => '7308',
					'name'       => 'SIMBANG',
				),
			107 =>
				array(
					'id'         => '7308050',
					'regency_id' => '7308',
					'name'       => 'TANRALILI',
				),
			108 =>
				array(
					'id'         => '7308051',
					'regency_id' => '7308',
					'name'       => 'TOMPU BULU',
				),
			109 =>
				array(
					'id'         => '7308060',
					'regency_id' => '7308',
					'name'       => 'CAMBA',
				),
			110 =>
				array(
					'id'         => '7308061',
					'regency_id' => '7308',
					'name'       => 'CENRANA',
				),
			111 =>
				array(
					'id'         => '7308070',
					'regency_id' => '7308',
					'name'       => 'MALLAWA',
				),
			112 =>
				array(
					'id'         => '7309010',
					'regency_id' => '7309',
					'name'       => 'LIUKANG TANGAYA',
				),
			113 =>
				array(
					'id'         => '7309020',
					'regency_id' => '7309',
					'name'       => 'LIUKANG KALMAS',
				),
			114 =>
				array(
					'id'         => '7309030',
					'regency_id' => '7309',
					'name'       => 'LIUKANG TUPABBIRING',
				),
			115 =>
				array(
					'id'         => '7309031',
					'regency_id' => '7309',
					'name'       => 'LIUKANG TUPABBIRING UTARA',
				),
			116 =>
				array(
					'id'         => '7309040',
					'regency_id' => '7309',
					'name'       => 'PANGKAJENE',
				),
			117 =>
				array(
					'id'         => '7309041',
					'regency_id' => '7309',
					'name'       => 'MINASATENE',
				),
			118 =>
				array(
					'id'         => '7309050',
					'regency_id' => '7309',
					'name'       => 'BALOCCI',
				),
			119 =>
				array(
					'id'         => '7309051',
					'regency_id' => '7309',
					'name'       => 'TONDONG TALLASA',
				),
			120 =>
				array(
					'id'         => '7309060',
					'regency_id' => '7309',
					'name'       => 'BUNGORO',
				),
			121 =>
				array(
					'id'         => '7309070',
					'regency_id' => '7309',
					'name'       => 'LABAKKANG',
				),
			122 =>
				array(
					'id'         => '7309080',
					'regency_id' => '7309',
					'name'       => 'MA\'RANG',
				),
			123 =>
				array(
					'id'         => '7309091',
					'regency_id' => '7309',
					'name'       => 'SEGERI',
				),
			124 =>
				array(
					'id'         => '7309092',
					'regency_id' => '7309',
					'name'       => 'MANDALLE',
				),
			125 =>
				array(
					'id'         => '7310010',
					'regency_id' => '7310',
					'name'       => 'TANETE RIAJA',
				),
			126 =>
				array(
					'id'         => '7310011',
					'regency_id' => '7310',
					'name'       => 'PUJANANTING',
				),
			127 =>
				array(
					'id'         => '7310020',
					'regency_id' => '7310',
					'name'       => 'TANETE RILAU',
				),
			128 =>
				array(
					'id'         => '7310030',
					'regency_id' => '7310',
					'name'       => 'BARRU',
				),
			129 =>
				array(
					'id'         => '7310040',
					'regency_id' => '7310',
					'name'       => 'SOPPENG RIAJA',
				),
			130 =>
				array(
					'id'         => '7310041',
					'regency_id' => '7310',
					'name'       => 'BALUSU',
				),
			131 =>
				array(
					'id'         => '7310050',
					'regency_id' => '7310',
					'name'       => 'MALLUSETASI',
				),
			132 =>
				array(
					'id'         => '7311010',
					'regency_id' => '7311',
					'name'       => 'BONTOCANI',
				),
			133 =>
				array(
					'id'         => '7311020',
					'regency_id' => '7311',
					'name'       => 'KAHU',
				),
			134 =>
				array(
					'id'         => '7311030',
					'regency_id' => '7311',
					'name'       => 'KAJUARA',
				),
			135 =>
				array(
					'id'         => '7311040',
					'regency_id' => '7311',
					'name'       => 'SALOMEKKO',
				),
			136 =>
				array(
					'id'         => '7311050',
					'regency_id' => '7311',
					'name'       => 'TONRA',
				),
			137 =>
				array(
					'id'         => '7311060',
					'regency_id' => '7311',
					'name'       => 'PATIMPENG',
				),
			138 =>
				array(
					'id'         => '7311070',
					'regency_id' => '7311',
					'name'       => 'LIBURENG',
				),
			139 =>
				array(
					'id'         => '7311080',
					'regency_id' => '7311',
					'name'       => 'MARE',
				),
			140 =>
				array(
					'id'         => '7311090',
					'regency_id' => '7311',
					'name'       => 'SIBULUE',
				),
			141 =>
				array(
					'id'         => '7311100',
					'regency_id' => '7311',
					'name'       => 'CINA',
				),
			142 =>
				array(
					'id'         => '7311110',
					'regency_id' => '7311',
					'name'       => 'BAREBBO',
				),
			143 =>
				array(
					'id'         => '7311120',
					'regency_id' => '7311',
					'name'       => 'PONRE',
				),
			144 =>
				array(
					'id'         => '7311130',
					'regency_id' => '7311',
					'name'       => 'LAPPARIAJA',
				),
			145 =>
				array(
					'id'         => '7311140',
					'regency_id' => '7311',
					'name'       => 'LAMURU',
				),
			146 =>
				array(
					'id'         => '7311141',
					'regency_id' => '7311',
					'name'       => 'TELLU LIMPOE',
				),
			147 =>
				array(
					'id'         => '7311150',
					'regency_id' => '7311',
					'name'       => 'BENGO',
				),
			148 =>
				array(
					'id'         => '7311160',
					'regency_id' => '7311',
					'name'       => 'ULAWENG',
				),
			149 =>
				array(
					'id'         => '7311170',
					'regency_id' => '7311',
					'name'       => 'PALAKKA',
				),
			150 =>
				array(
					'id'         => '7311180',
					'regency_id' => '7311',
					'name'       => 'AWANGPONE',
				),
			151 =>
				array(
					'id'         => '7311190',
					'regency_id' => '7311',
					'name'       => 'TELLU SIATTINGE',
				),
			152 =>
				array(
					'id'         => '7311200',
					'regency_id' => '7311',
					'name'       => 'AMALI',
				),
			153 =>
				array(
					'id'         => '7311210',
					'regency_id' => '7311',
					'name'       => 'AJANGALE',
				),
			154 =>
				array(
					'id'         => '7311220',
					'regency_id' => '7311',
					'name'       => 'DUA BOCCOE',
				),
			155 =>
				array(
					'id'         => '7311230',
					'regency_id' => '7311',
					'name'       => 'CENRANA',
				),
			156 =>
				array(
					'id'         => '7311710',
					'regency_id' => '7311',
					'name'       => 'TANETE RIATTANG BARAT',
				),
			157 =>
				array(
					'id'         => '7311720',
					'regency_id' => '7311',
					'name'       => 'TANETE RIATTANG',
				),
			158 =>
				array(
					'id'         => '7311730',
					'regency_id' => '7311',
					'name'       => 'TANETE RIATTANG TIMUR',
				),
			159 =>
				array(
					'id'         => '7312010',
					'regency_id' => '7312',
					'name'       => 'MARIO RIWAWO',
				),
			160 =>
				array(
					'id'         => '7312020',
					'regency_id' => '7312',
					'name'       => 'LALABATA',
				),
			161 =>
				array(
					'id'         => '7312030',
					'regency_id' => '7312',
					'name'       => 'LILI RIAJA',
				),
			162 =>
				array(
					'id'         => '7312031',
					'regency_id' => '7312',
					'name'       => 'GANRA',
				),
			163 =>
				array(
					'id'         => '7312032',
					'regency_id' => '7312',
					'name'       => 'CITTA',
				),
			164 =>
				array(
					'id'         => '7312040',
					'regency_id' => '7312',
					'name'       => 'LILI RILAU',
				),
			165 =>
				array(
					'id'         => '7312050',
					'regency_id' => '7312',
					'name'       => 'DONRI DONRI',
				),
			166 =>
				array(
					'id'         => '7312060',
					'regency_id' => '7312',
					'name'       => 'MARIO RIAWA',
				),
			167 =>
				array(
					'id'         => '7313010',
					'regency_id' => '7313',
					'name'       => 'SABBANG PARU',
				),
			168 =>
				array(
					'id'         => '7313020',
					'regency_id' => '7313',
					'name'       => 'TEMPE',
				),
			169 =>
				array(
					'id'         => '7313030',
					'regency_id' => '7313',
					'name'       => 'PAMMANA',
				),
			170 =>
				array(
					'id'         => '7313040',
					'regency_id' => '7313',
					'name'       => 'BOLA',
				),
			171 =>
				array(
					'id'         => '7313050',
					'regency_id' => '7313',
					'name'       => 'TAKKALALLA',
				),
			172 =>
				array(
					'id'         => '7313060',
					'regency_id' => '7313',
					'name'       => 'SAJOANGING',
				),
			173 =>
				array(
					'id'         => '7313061',
					'regency_id' => '7313',
					'name'       => 'PENRANG',
				),
			174 =>
				array(
					'id'         => '7313070',
					'regency_id' => '7313',
					'name'       => 'MAJAULENG',
				),
			175 =>
				array(
					'id'         => '7313080',
					'regency_id' => '7313',
					'name'       => 'TANA SITOLO',
				),
			176 =>
				array(
					'id'         => '7313090',
					'regency_id' => '7313',
					'name'       => 'BELAWA',
				),
			177 =>
				array(
					'id'         => '7313100',
					'regency_id' => '7313',
					'name'       => 'MANIANG PAJO',
				),
			178 =>
				array(
					'id'         => '7313101',
					'regency_id' => '7313',
					'name'       => 'GILIRENG',
				),
			179 =>
				array(
					'id'         => '7313110',
					'regency_id' => '7313',
					'name'       => 'KEERA',
				),
			180 =>
				array(
					'id'         => '7313120',
					'regency_id' => '7313',
					'name'       => 'PITUMPANUA',
				),
			181 =>
				array(
					'id'         => '7314010',
					'regency_id' => '7314',
					'name'       => 'PANCA LAUTANG',
				),
			182 =>
				array(
					'id'         => '7314020',
					'regency_id' => '7314',
					'name'       => 'TELLULIMPO E',
				),
			183 =>
				array(
					'id'         => '7314030',
					'regency_id' => '7314',
					'name'       => 'WATANG PULU',
				),
			184 =>
				array(
					'id'         => '7314040',
					'regency_id' => '7314',
					'name'       => 'BARANTI',
				),
			185 =>
				array(
					'id'         => '7314050',
					'regency_id' => '7314',
					'name'       => 'PANCA RIJANG',
				),
			186 =>
				array(
					'id'         => '7314051',
					'regency_id' => '7314',
					'name'       => 'KULO',
				),
			187 =>
				array(
					'id'         => '7314060',
					'regency_id' => '7314',
					'name'       => 'MARITENGNGAE',
				),
			188 =>
				array(
					'id'         => '7314061',
					'regency_id' => '7314',
					'name'       => 'WATANG SIDENRENG',
				),
			189 =>
				array(
					'id'         => '7314070',
					'regency_id' => '7314',
					'name'       => 'PITU RIAWA',
				),
			190 =>
				array(
					'id'         => '7314080',
					'regency_id' => '7314',
					'name'       => 'DUAPITUE',
				),
			191 =>
				array(
					'id'         => '7314081',
					'regency_id' => '7314',
					'name'       => 'PITU RIASE',
				),
			192 =>
				array(
					'id'         => '7315010',
					'regency_id' => '7315',
					'name'       => 'SUPPA',
				),
			193 =>
				array(
					'id'         => '7315020',
					'regency_id' => '7315',
					'name'       => 'MATTIROSOMPE',
				),
			194 =>
				array(
					'id'         => '7315021',
					'regency_id' => '7315',
					'name'       => 'LANRISANG',
				),
			195 =>
				array(
					'id'         => '7315030',
					'regency_id' => '7315',
					'name'       => 'MATTIRO BULU',
				),
			196 =>
				array(
					'id'         => '7315040',
					'regency_id' => '7315',
					'name'       => 'WATANG SAWITTO',
				),
			197 =>
				array(
					'id'         => '7315041',
					'regency_id' => '7315',
					'name'       => 'PALETEANG',
				),
			198 =>
				array(
					'id'         => '7315042',
					'regency_id' => '7315',
					'name'       => 'TIROANG',
				),
			199 =>
				array(
					'id'         => '7315050',
					'regency_id' => '7315',
					'name'       => 'PATAMPANUA',
				),
			200 =>
				array(
					'id'         => '7315060',
					'regency_id' => '7315',
					'name'       => 'CEMPA',
				),
			201 =>
				array(
					'id'         => '7315070',
					'regency_id' => '7315',
					'name'       => 'DUAMPANUA',
				),
			202 =>
				array(
					'id'         => '7315071',
					'regency_id' => '7315',
					'name'       => 'BATULAPPA',
				),
			203 =>
				array(
					'id'         => '7315080',
					'regency_id' => '7315',
					'name'       => 'LEMBANG',
				),
			204 =>
				array(
					'id'         => '7316010',
					'regency_id' => '7316',
					'name'       => 'MAIWA',
				),
			205 =>
				array(
					'id'         => '7316011',
					'regency_id' => '7316',
					'name'       => 'BUNGIN',
				),
			206 =>
				array(
					'id'         => '7316020',
					'regency_id' => '7316',
					'name'       => 'ENREKANG',
				),
			207 =>
				array(
					'id'         => '7316021',
					'regency_id' => '7316',
					'name'       => 'CENDANA',
				),
			208 =>
				array(
					'id'         => '7316030',
					'regency_id' => '7316',
					'name'       => 'BARAKA',
				),
			209 =>
				array(
					'id'         => '7316031',
					'regency_id' => '7316',
					'name'       => 'BUNTU BATU',
				),
			210 =>
				array(
					'id'         => '7316040',
					'regency_id' => '7316',
					'name'       => 'ANGGERAJA',
				),
			211 =>
				array(
					'id'         => '7316041',
					'regency_id' => '7316',
					'name'       => 'MALUA',
				),
			212 =>
				array(
					'id'         => '7316050',
					'regency_id' => '7316',
					'name'       => 'ALLA',
				),
			213 =>
				array(
					'id'         => '7316051',
					'regency_id' => '7316',
					'name'       => 'CURIO',
				),
			214 =>
				array(
					'id'         => '7316052',
					'regency_id' => '7316',
					'name'       => 'MASALLE',
				),
			215 =>
				array(
					'id'         => '7316053',
					'regency_id' => '7316',
					'name'       => 'BAROKO',
				),
			216 =>
				array(
					'id'         => '7317010',
					'regency_id' => '7317',
					'name'       => 'LAROMPONG',
				),
			217 =>
				array(
					'id'         => '7317011',
					'regency_id' => '7317',
					'name'       => 'LAROMPONG SELATAN',
				),
			218 =>
				array(
					'id'         => '7317020',
					'regency_id' => '7317',
					'name'       => 'SULI',
				),
			219 =>
				array(
					'id'         => '7317021',
					'regency_id' => '7317',
					'name'       => 'SULI BARAT',
				),
			220 =>
				array(
					'id'         => '7317030',
					'regency_id' => '7317',
					'name'       => 'BELOPA',
				),
			221 =>
				array(
					'id'         => '7317031',
					'regency_id' => '7317',
					'name'       => 'KAMANRE',
				),
			222 =>
				array(
					'id'         => '7317032',
					'regency_id' => '7317',
					'name'       => 'BELOPA UTARA',
				),
			223 =>
				array(
					'id'         => '7317040',
					'regency_id' => '7317',
					'name'       => 'BAJO',
				),
			224 =>
				array(
					'id'         => '7317041',
					'regency_id' => '7317',
					'name'       => 'BAJO BARAT',
				),
			225 =>
				array(
					'id'         => '7317050',
					'regency_id' => '7317',
					'name'       => 'BASSESANGTEMPE',
				),
			226 =>
				array(
					'id'         => '7317051',
					'regency_id' => '7317',
					'name'       => 'LATIMOJONG',
				),
			227 =>
				array(
					'id'         => '7317052',
					'regency_id' => '7317',
					'name'       => 'BASSESANGTEMPE UTARA',
				),
			228 =>
				array(
					'id'         => '7317060',
					'regency_id' => '7317',
					'name'       => 'BUPON',
				),
			229 =>
				array(
					'id'         => '7317061',
					'regency_id' => '7317',
					'name'       => 'PONRANG',
				),
			230 =>
				array(
					'id'         => '7317062',
					'regency_id' => '7317',
					'name'       => 'PONRANG SELATAN',
				),
			231 =>
				array(
					'id'         => '7317070',
					'regency_id' => '7317',
					'name'       => 'BUA',
				),
			232 =>
				array(
					'id'         => '7317080',
					'regency_id' => '7317',
					'name'       => 'WALENRANG',
				),
			233 =>
				array(
					'id'         => '7317081',
					'regency_id' => '7317',
					'name'       => 'WALENRANG TIMUR',
				),
			234 =>
				array(
					'id'         => '7317090',
					'regency_id' => '7317',
					'name'       => 'LAMASI',
				),
			235 =>
				array(
					'id'         => '7317091',
					'regency_id' => '7317',
					'name'       => 'WALENRANG UTARA',
				),
			236 =>
				array(
					'id'         => '7317092',
					'regency_id' => '7317',
					'name'       => 'WALENRANG BARAT',
				),
			237 =>
				array(
					'id'         => '7317093',
					'regency_id' => '7317',
					'name'       => 'LAMASI TIMUR',
				),
			238 =>
				array(
					'id'         => '7318010',
					'regency_id' => '7318',
					'name'       => 'BONGGAKARADENG',
				),
			239 =>
				array(
					'id'         => '7318011',
					'regency_id' => '7318',
					'name'       => 'SIMBUANG',
				),
			240 =>
				array(
					'id'         => '7318012',
					'regency_id' => '7318',
					'name'       => 'RANO',
				),
			241 =>
				array(
					'id'         => '7318013',
					'regency_id' => '7318',
					'name'       => 'MAPPAK',
				),
			242 =>
				array(
					'id'         => '7318020',
					'regency_id' => '7318',
					'name'       => 'MENGKENDEK',
				),
			243 =>
				array(
					'id'         => '7318021',
					'regency_id' => '7318',
					'name'       => 'GANDANG BATU SILANAN',
				),
			244 =>
				array(
					'id'         => '7318030',
					'regency_id' => '7318',
					'name'       => 'SANGALLA',
				),
			245 =>
				array(
					'id'         => '7318031',
					'regency_id' => '7318',
					'name'       => 'SANGALA SELATAN',
				),
			246 =>
				array(
					'id'         => '7318032',
					'regency_id' => '7318',
					'name'       => 'SANGALLA UTARA',
				),
			247 =>
				array(
					'id'         => '7318040',
					'regency_id' => '7318',
					'name'       => 'MAKALE',
				),
			248 =>
				array(
					'id'         => '7318041',
					'regency_id' => '7318',
					'name'       => 'MAKALE SELATAN',
				),
			249 =>
				array(
					'id'         => '7318042',
					'regency_id' => '7318',
					'name'       => 'MAKALE UTARA',
				),
			250 =>
				array(
					'id'         => '7318050',
					'regency_id' => '7318',
					'name'       => 'SALUPUTTI',
				),
			251 =>
				array(
					'id'         => '7318051',
					'regency_id' => '7318',
					'name'       => 'BITTUANG',
				),
			252 =>
				array(
					'id'         => '7318052',
					'regency_id' => '7318',
					'name'       => 'REMBON',
				),
			253 =>
				array(
					'id'         => '7318053',
					'regency_id' => '7318',
					'name'       => 'MASANDA',
				),
			254 =>
				array(
					'id'         => '7318054',
					'regency_id' => '7318',
					'name'       => 'MALIMBONG BALEPE',
				),
			255 =>
				array(
					'id'         => '7318061',
					'regency_id' => '7318',
					'name'       => 'RANTETAYO',
				),
			256 =>
				array(
					'id'         => '7318067',
					'regency_id' => '7318',
					'name'       => 'KURRA',
				),
			257 =>
				array(
					'id'         => '7322010',
					'regency_id' => '7322',
					'name'       => 'SABBANG',
				),
			258 =>
				array(
					'id'         => '7322020',
					'regency_id' => '7322',
					'name'       => 'BAEBUNTA',
				),
			259 =>
				array(
					'id'         => '7322030',
					'regency_id' => '7322',
					'name'       => 'MALANGKE',
				),
			260 =>
				array(
					'id'         => '7322031',
					'regency_id' => '7322',
					'name'       => 'MALANGKE BARAT',
				),
			261 =>
				array(
					'id'         => '7322040',
					'regency_id' => '7322',
					'name'       => 'SUKAMAJU',
				),
			262 =>
				array(
					'id'         => '7322050',
					'regency_id' => '7322',
					'name'       => 'BONE-BONE',
				),
			263 =>
				array(
					'id'         => '7322051',
					'regency_id' => '7322',
					'name'       => 'TANA LILI',
				),
			264 =>
				array(
					'id'         => '7322120',
					'regency_id' => '7322',
					'name'       => 'MASAMBA',
				),
			265 =>
				array(
					'id'         => '7322121',
					'regency_id' => '7322',
					'name'       => 'MAPPEDECENG',
				),
			266 =>
				array(
					'id'         => '7322122',
					'regency_id' => '7322',
					'name'       => 'RAMPI',
				),
			267 =>
				array(
					'id'         => '7322130',
					'regency_id' => '7322',
					'name'       => 'LIMBONG',
				),
			268 =>
				array(
					'id'         => '7322131',
					'regency_id' => '7322',
					'name'       => 'SEKO',
				),
			269 =>
				array(
					'id'         => '7325010',
					'regency_id' => '7325',
					'name'       => 'BURAU',
				),
			270 =>
				array(
					'id'         => '7325020',
					'regency_id' => '7325',
					'name'       => 'WOTU',
				),
			271 =>
				array(
					'id'         => '7325030',
					'regency_id' => '7325',
					'name'       => 'TOMONI',
				),
			272 =>
				array(
					'id'         => '7325031',
					'regency_id' => '7325',
					'name'       => 'TOMONI TIMUR',
				),
			273 =>
				array(
					'id'         => '7325040',
					'regency_id' => '7325',
					'name'       => 'ANGKONA',
				),
			274 =>
				array(
					'id'         => '7325050',
					'regency_id' => '7325',
					'name'       => 'MALILI',
				),
			275 =>
				array(
					'id'         => '7325060',
					'regency_id' => '7325',
					'name'       => 'TOWUTI',
				),
			276 =>
				array(
					'id'         => '7325070',
					'regency_id' => '7325',
					'name'       => 'NUHA',
				),
			277 =>
				array(
					'id'         => '7325071',
					'regency_id' => '7325',
					'name'       => 'WASUPONDA',
				),
			278 =>
				array(
					'id'         => '7325080',
					'regency_id' => '7325',
					'name'       => 'MANGKUTANA',
				),
			279 =>
				array(
					'id'         => '7325081',
					'regency_id' => '7325',
					'name'       => 'KALAENA',
				),
			280 =>
				array(
					'id'         => '7326010',
					'regency_id' => '7326',
					'name'       => 'SOPAI',
				),
			281 =>
				array(
					'id'         => '7326020',
					'regency_id' => '7326',
					'name'       => 'KESU',
				),
			282 =>
				array(
					'id'         => '7326030',
					'regency_id' => '7326',
					'name'       => 'SANGGALANGI',
				),
			283 =>
				array(
					'id'         => '7326040',
					'regency_id' => '7326',
					'name'       => 'BUNTAO',
				),
			284 =>
				array(
					'id'         => '7326050',
					'regency_id' => '7326',
					'name'       => 'RANTEBUA',
				),
			285 =>
				array(
					'id'         => '7326060',
					'regency_id' => '7326',
					'name'       => 'NANGGALA',
				),
			286 =>
				array(
					'id'         => '7326070',
					'regency_id' => '7326',
					'name'       => 'TONDON',
				),
			287 =>
				array(
					'id'         => '7326080',
					'regency_id' => '7326',
					'name'       => 'TALLUNGLIPU',
				),
			288 =>
				array(
					'id'         => '7326090',
					'regency_id' => '7326',
					'name'       => 'RANTEPAO',
				),
			289 =>
				array(
					'id'         => '7326100',
					'regency_id' => '7326',
					'name'       => 'TIKALA',
				),
			290 =>
				array(
					'id'         => '7326110',
					'regency_id' => '7326',
					'name'       => 'SESEAN',
				),
			291 =>
				array(
					'id'         => '7326120',
					'regency_id' => '7326',
					'name'       => 'BALUSU',
				),
			292 =>
				array(
					'id'         => '7326130',
					'regency_id' => '7326',
					'name'       => 'SA\'DAN',
				),
			293 =>
				array(
					'id'         => '7326140',
					'regency_id' => '7326',
					'name'       => 'BENGKELEKILA',
				),
			294 =>
				array(
					'id'         => '7326150',
					'regency_id' => '7326',
					'name'       => 'SESEAN SULOARA',
				),
			295 =>
				array(
					'id'         => '7326160',
					'regency_id' => '7326',
					'name'       => 'KAPALA PITU',
				),
			296 =>
				array(
					'id'         => '7326170',
					'regency_id' => '7326',
					'name'       => 'DENDE PIONGAN NAPO',
				),
			297 =>
				array(
					'id'         => '7326180',
					'regency_id' => '7326',
					'name'       => 'AWAN RANTE KARUA',
				),
			298 =>
				array(
					'id'         => '7326190',
					'regency_id' => '7326',
					'name'       => 'RINDINGALO',
				),
			299 =>
				array(
					'id'         => '7326200',
					'regency_id' => '7326',
					'name'       => 'BUNTU PEPASAN',
				),
			300 =>
				array(
					'id'         => '7326210',
					'regency_id' => '7326',
					'name'       => 'BARUPPU',
				),
			301 =>
				array(
					'id'         => '7371010',
					'regency_id' => '7371',
					'name'       => 'MARISO',
				),
			302 =>
				array(
					'id'         => '7371020',
					'regency_id' => '7371',
					'name'       => 'MAMAJANG',
				),
			303 =>
				array(
					'id'         => '7371030',
					'regency_id' => '7371',
					'name'       => 'TAMALATE',
				),
			304 =>
				array(
					'id'         => '7371031',
					'regency_id' => '7371',
					'name'       => 'RAPPOCINI',
				),
			305 =>
				array(
					'id'         => '7371040',
					'regency_id' => '7371',
					'name'       => 'MAKASSAR',
				),
			306 =>
				array(
					'id'         => '7371050',
					'regency_id' => '7371',
					'name'       => 'UJUNG PANDANG',
				),
			307 =>
				array(
					'id'         => '7371060',
					'regency_id' => '7371',
					'name'       => 'WAJO',
				),
			308 =>
				array(
					'id'         => '7371070',
					'regency_id' => '7371',
					'name'       => 'BONTOALA',
				),
			309 =>
				array(
					'id'         => '7371080',
					'regency_id' => '7371',
					'name'       => 'UJUNG TANAH',
				),
			310 =>
				array(
					'id'         => '7371081',
					'regency_id' => '7371',
					'name'       => 'KEPULAUAN SANGKARRANG',
				),
			311 =>
				array(
					'id'         => '7371090',
					'regency_id' => '7371',
					'name'       => 'TALLO',
				),
			312 =>
				array(
					'id'         => '7371100',
					'regency_id' => '7371',
					'name'       => 'PANAKKUKANG',
				),
			313 =>
				array(
					'id'         => '7371101',
					'regency_id' => '7371',
					'name'       => 'MANGGALA',
				),
			314 =>
				array(
					'id'         => '7371110',
					'regency_id' => '7371',
					'name'       => 'BIRING KANAYA',
				),
			315 =>
				array(
					'id'         => '7371111',
					'regency_id' => '7371',
					'name'       => 'TAMALANREA',
				),
			316 =>
				array(
					'id'         => '7372010',
					'regency_id' => '7372',
					'name'       => 'BACUKIKI',
				),
			317 =>
				array(
					'id'         => '7372011',
					'regency_id' => '7372',
					'name'       => 'BACUKIKI BARAT',
				),
			318 =>
				array(
					'id'         => '7372020',
					'regency_id' => '7372',
					'name'       => 'UJUNG',
				),
			319 =>
				array(
					'id'         => '7372030',
					'regency_id' => '7372',
					'name'       => 'SOREANG',
				),
			320 =>
				array(
					'id'         => '7373010',
					'regency_id' => '7373',
					'name'       => 'WARA SELATAN',
				),
			321 =>
				array(
					'id'         => '7373011',
					'regency_id' => '7373',
					'name'       => 'SENDANA',
				),
			322 =>
				array(
					'id'         => '7373020',
					'regency_id' => '7373',
					'name'       => 'WARA',
				),
			323 =>
				array(
					'id'         => '7373021',
					'regency_id' => '7373',
					'name'       => 'WARA TIMUR',
				),
			324 =>
				array(
					'id'         => '7373022',
					'regency_id' => '7373',
					'name'       => 'MUNGKAJANG',
				),
			325 =>
				array(
					'id'         => '7373030',
					'regency_id' => '7373',
					'name'       => 'WARA UTARA',
				),
			326 =>
				array(
					'id'         => '7373031',
					'regency_id' => '7373',
					'name'       => 'BARA',
				),
			327 =>
				array(
					'id'         => '7373040',
					'regency_id' => '7373',
					'name'       => 'TELLUWANUA',
				),
			328 =>
				array(
					'id'         => '7373041',
					'regency_id' => '7373',
					'name'       => 'WARA BARAT',
				),
			329 =>
				array(
					'id'         => '7401050',
					'regency_id' => '7401',
					'name'       => 'LASALIMU',
				),
			330 =>
				array(
					'id'         => '7401051',
					'regency_id' => '7401',
					'name'       => 'LASALIMU SELATAN',
				),
			331 =>
				array(
					'id'         => '7401052',
					'regency_id' => '7401',
					'name'       => 'SIONTAPINA',
				),
			332 =>
				array(
					'id'         => '7401060',
					'regency_id' => '7401',
					'name'       => 'PASAR WAJO',
				),
			333 =>
				array(
					'id'         => '7401061',
					'regency_id' => '7401',
					'name'       => 'WOLOWA',
				),
			334 =>
				array(
					'id'         => '7401062',
					'regency_id' => '7401',
					'name'       => 'WABULA',
				),
			335 =>
				array(
					'id'         => '7401110',
					'regency_id' => '7401',
					'name'       => 'KAPONTORI',
				),
			336 =>
				array(
					'id'         => '7402010',
					'regency_id' => '7402',
					'name'       => 'TONGKUNO',
				),
			337 =>
				array(
					'id'         => '7402011',
					'regency_id' => '7402',
					'name'       => 'TONGKUNO SELATAN',
				),
			338 =>
				array(
					'id'         => '7402020',
					'regency_id' => '7402',
					'name'       => 'PARIGI',
				),
			339 =>
				array(
					'id'         => '7402021',
					'regency_id' => '7402',
					'name'       => 'BONE',
				),
			340 =>
				array(
					'id'         => '7402022',
					'regency_id' => '7402',
					'name'       => 'MAROBO',
				),
			341 =>
				array(
					'id'         => '7402030',
					'regency_id' => '7402',
					'name'       => 'KABAWO',
				),
			342 =>
				array(
					'id'         => '7402031',
					'regency_id' => '7402',
					'name'       => 'KABANGKA',
				),
			343 =>
				array(
					'id'         => '7402032',
					'regency_id' => '7402',
					'name'       => 'KONTUKOWUNA',
				),
			344 =>
				array(
					'id'         => '7402061',
					'regency_id' => '7402',
					'name'       => 'KONTUNAGA',
				),
			345 =>
				array(
					'id'         => '7402062',
					'regency_id' => '7402',
					'name'       => 'WATOPUTE',
				),
			346 =>
				array(
					'id'         => '7402070',
					'regency_id' => '7402',
					'name'       => 'KATOBU',
				),
			347 =>
				array(
					'id'         => '7402071',
					'regency_id' => '7402',
					'name'       => 'LOHIA',
				),
			348 =>
				array(
					'id'         => '7402072',
					'regency_id' => '7402',
					'name'       => 'DURUKA',
				),
			349 =>
				array(
					'id'         => '7402073',
					'regency_id' => '7402',
					'name'       => 'BATALAIWORU',
				),
			350 =>
				array(
					'id'         => '7402080',
					'regency_id' => '7402',
					'name'       => 'NAPABALANO',
				),
			351 =>
				array(
					'id'         => '7402081',
					'regency_id' => '7402',
					'name'       => 'LASALEPA',
				),
			352 =>
				array(
					'id'         => '7402083',
					'regency_id' => '7402',
					'name'       => 'TOWEA',
				),
			353 =>
				array(
					'id'         => '7402090',
					'regency_id' => '7402',
					'name'       => 'WAKORUMBA SELATAN',
				),
			354 =>
				array(
					'id'         => '7402091',
					'regency_id' => '7402',
					'name'       => 'PASIR PUTIH',
				),
			355 =>
				array(
					'id'         => '7402092',
					'regency_id' => '7402',
					'name'       => 'PASI KOLAGA',
				),
			356 =>
				array(
					'id'         => '7402111',
					'regency_id' => '7402',
					'name'       => 'MALIGANO',
				),
			357 =>
				array(
					'id'         => '7402112',
					'regency_id' => '7402',
					'name'       => 'BATUKARA',
				),
			358 =>
				array(
					'id'         => '7403090',
					'regency_id' => '7403',
					'name'       => 'SOROPIA',
				),
			359 =>
				array(
					'id'         => '7403091',
					'regency_id' => '7403',
					'name'       => 'LALONGGASUMEETO',
				),
			360 =>
				array(
					'id'         => '7403100',
					'regency_id' => '7403',
					'name'       => 'SAMPARA',
				),
			361 =>
				array(
					'id'         => '7403101',
					'regency_id' => '7403',
					'name'       => 'BONDOALA',
				),
			362 =>
				array(
					'id'         => '7403102',
					'regency_id' => '7403',
					'name'       => 'BESULUTU',
				),
			363 =>
				array(
					'id'         => '7403103',
					'regency_id' => '7403',
					'name'       => 'KAPOIALA',
				),
			364 =>
				array(
					'id'         => '7403104',
					'regency_id' => '7403',
					'name'       => 'ANGGALOMOARE',
				),
			365 =>
				array(
					'id'         => '7403105',
					'regency_id' => '7403',
					'name'       => 'MOROSI',
				),
			366 =>
				array(
					'id'         => '7403130',
					'regency_id' => '7403',
					'name'       => 'LAMBUYA',
				),
			367 =>
				array(
					'id'         => '7403131',
					'regency_id' => '7403',
					'name'       => 'UEPAI',
				),
			368 =>
				array(
					'id'         => '7403132',
					'regency_id' => '7403',
					'name'       => 'PURIALA',
				),
			369 =>
				array(
					'id'         => '7403133',
					'regency_id' => '7403',
					'name'       => 'ONEMBUTE',
				),
			370 =>
				array(
					'id'         => '7403140',
					'regency_id' => '7403',
					'name'       => 'PONDIDAHA',
				),
			371 =>
				array(
					'id'         => '7403141',
					'regency_id' => '7403',
					'name'       => 'WONGGEDUKU',
				),
			372 =>
				array(
					'id'         => '7403142',
					'regency_id' => '7403',
					'name'       => 'AMONGGEDO',
				),
			373 =>
				array(
					'id'         => '7403143',
					'regency_id' => '7403',
					'name'       => 'WONGGEDUKU BARAT',
				),
			374 =>
				array(
					'id'         => '7403150',
					'regency_id' => '7403',
					'name'       => 'WAWOTOBI',
				),
			375 =>
				array(
					'id'         => '7403151',
					'regency_id' => '7403',
					'name'       => 'MELUHU',
				),
			376 =>
				array(
					'id'         => '7403152',
					'regency_id' => '7403',
					'name'       => 'KONAWE',
				),
			377 =>
				array(
					'id'         => '7403153',
					'regency_id' => '7403',
					'name'       => 'ANGGOTOA',
				),
			378 =>
				array(
					'id'         => '7403170',
					'regency_id' => '7403',
					'name'       => 'UNAAHA',
				),
			379 =>
				array(
					'id'         => '7403171',
					'regency_id' => '7403',
					'name'       => 'ANGGABERI',
				),
			380 =>
				array(
					'id'         => '7403180',
					'regency_id' => '7403',
					'name'       => 'ABUKI',
				),
			381 =>
				array(
					'id'         => '7403181',
					'regency_id' => '7403',
					'name'       => 'LATOMA',
				),
			382 =>
				array(
					'id'         => '7403182',
					'regency_id' => '7403',
					'name'       => 'TONGAUNA',
				),
			383 =>
				array(
					'id'         => '7403183',
					'regency_id' => '7403',
					'name'       => 'ASINUA',
				),
			384 =>
				array(
					'id'         => '7403184',
					'regency_id' => '7403',
					'name'       => 'PADANGGUNI',
				),
			385 =>
				array(
					'id'         => '7403185',
					'regency_id' => '7403',
					'name'       => 'TONGAUNA UTARA',
				),
			386 =>
				array(
					'id'         => '7403193',
					'regency_id' => '7403',
					'name'       => 'ROUTA',
				),
			387 =>
				array(
					'id'         => '7404010',
					'regency_id' => '7404',
					'name'       => 'WATUBANGGA',
				),
			388 =>
				array(
					'id'         => '7404011',
					'regency_id' => '7404',
					'name'       => 'TANGGETADA',
				),
			389 =>
				array(
					'id'         => '7404012',
					'regency_id' => '7404',
					'name'       => 'TOARI',
				),
			390 =>
				array(
					'id'         => '7404013',
					'regency_id' => '7404',
					'name'       => 'POLINGGONA',
				),
			391 =>
				array(
					'id'         => '7404020',
					'regency_id' => '7404',
					'name'       => 'POMALAA',
				),
			392 =>
				array(
					'id'         => '7404030',
					'regency_id' => '7404',
					'name'       => 'WUNDULAKO',
				),
			393 =>
				array(
					'id'         => '7404031',
					'regency_id' => '7404',
					'name'       => 'BAULA',
				),
			394 =>
				array(
					'id'         => '7404060',
					'regency_id' => '7404',
					'name'       => 'KOLAKA',
				),
			395 =>
				array(
					'id'         => '7404061',
					'regency_id' => '7404',
					'name'       => 'LATAMBAGA',
				),
			396 =>
				array(
					'id'         => '7404070',
					'regency_id' => '7404',
					'name'       => 'WOLO',
				),
			397 =>
				array(
					'id'         => '7404071',
					'regency_id' => '7404',
					'name'       => 'SAMATURU',
				),
			398 =>
				array(
					'id'         => '7404072',
					'regency_id' => '7404',
					'name'       => 'IWOIMENDAA',
				),
			399 =>
				array(
					'id'         => '7405010',
					'regency_id' => '7405',
					'name'       => 'TINANGGEA',
				),
			400 =>
				array(
					'id'         => '7405011',
					'regency_id' => '7405',
					'name'       => 'LALEMBUU',
				),
			401 =>
				array(
					'id'         => '7405020',
					'regency_id' => '7405',
					'name'       => 'ANDOOLO',
				),
			402 =>
				array(
					'id'         => '7405021',
					'regency_id' => '7405',
					'name'       => 'BUKE',
				),
			403 =>
				array(
					'id'         => '7405022',
					'regency_id' => '7405',
					'name'       => 'ANDOOLO BARAT',
				),
			404 =>
				array(
					'id'         => '7405030',
					'regency_id' => '7405',
					'name'       => 'PALANGGA',
				),
			405 =>
				array(
					'id'         => '7405031',
					'regency_id' => '7405',
					'name'       => 'PALANGGA SELATAN',
				),
			406 =>
				array(
					'id'         => '7405032',
					'regency_id' => '7405',
					'name'       => 'BAITO',
				),
			407 =>
				array(
					'id'         => '7405040',
					'regency_id' => '7405',
					'name'       => 'LAINEA',
				),
			408 =>
				array(
					'id'         => '7405041',
					'regency_id' => '7405',
					'name'       => 'LAEYA',
				),
			409 =>
				array(
					'id'         => '7405050',
					'regency_id' => '7405',
					'name'       => 'KOLONO',
				),
			410 =>
				array(
					'id'         => '7405051',
					'regency_id' => '7405',
					'name'       => 'KOLONO TIMUR',
				),
			411 =>
				array(
					'id'         => '7405060',
					'regency_id' => '7405',
					'name'       => 'LAONTI',
				),
			412 =>
				array(
					'id'         => '7405070',
					'regency_id' => '7405',
					'name'       => 'MORAMO',
				),
			413 =>
				array(
					'id'         => '7405071',
					'regency_id' => '7405',
					'name'       => 'MORAMO UTARA',
				),
			414 =>
				array(
					'id'         => '7405080',
					'regency_id' => '7405',
					'name'       => 'KONDA',
				),
			415 =>
				array(
					'id'         => '7405081',
					'regency_id' => '7405',
					'name'       => 'WOLASI',
				),
			416 =>
				array(
					'id'         => '7405090',
					'regency_id' => '7405',
					'name'       => 'RANOMEETO',
				),
			417 =>
				array(
					'id'         => '7405091',
					'regency_id' => '7405',
					'name'       => 'RANOMEETO BARAT',
				),
			418 =>
				array(
					'id'         => '7405100',
					'regency_id' => '7405',
					'name'       => 'LANDONO',
				),
			419 =>
				array(
					'id'         => '7405101',
					'regency_id' => '7405',
					'name'       => 'MOWILA',
				),
			420 =>
				array(
					'id'         => '7405102',
					'regency_id' => '7405',
					'name'       => 'SABULAKOA',
				),
			421 =>
				array(
					'id'         => '7405110',
					'regency_id' => '7405',
					'name'       => 'ANGATA',
				),
			422 =>
				array(
					'id'         => '7405111',
					'regency_id' => '7405',
					'name'       => 'BENUA',
				),
			423 =>
				array(
					'id'         => '7405112',
					'regency_id' => '7405',
					'name'       => 'BASALA',
				),
			424 =>
				array(
					'id'         => '7406010',
					'regency_id' => '7406',
					'name'       => 'KABAENA',
				),
			425 =>
				array(
					'id'         => '7406011',
					'regency_id' => '7406',
					'name'       => 'KABAENA UTARA',
				),
			426 =>
				array(
					'id'         => '7406012',
					'regency_id' => '7406',
					'name'       => 'KABAENA SELATAN',
				),
			427 =>
				array(
					'id'         => '7406013',
					'regency_id' => '7406',
					'name'       => 'KABAENA BARAT',
				),
			428 =>
				array(
					'id'         => '7406020',
					'regency_id' => '7406',
					'name'       => 'KABAENA TIMUR',
				),
			429 =>
				array(
					'id'         => '7406021',
					'regency_id' => '7406',
					'name'       => 'KABAENA TENGAH',
				),
			430 =>
				array(
					'id'         => '7406030',
					'regency_id' => '7406',
					'name'       => 'RUMBIA',
				),
			431 =>
				array(
					'id'         => '7406031',
					'regency_id' => '7406',
					'name'       => 'MATA OLEO',
				),
			432 =>
				array(
					'id'         => '7406032',
					'regency_id' => '7406',
					'name'       => 'KEP. MASALOKA RAYA',
				),
			433 =>
				array(
					'id'         => '7406033',
					'regency_id' => '7406',
					'name'       => 'RUMBIA TENGAH',
				),
			434 =>
				array(
					'id'         => '7406040',
					'regency_id' => '7406',
					'name'       => 'RAROWATU',
				),
			435 =>
				array(
					'id'         => '7406041',
					'regency_id' => '7406',
					'name'       => 'RAROWATU UTARA',
				),
			436 =>
				array(
					'id'         => '7406042',
					'regency_id' => '7406',
					'name'       => 'MATA USU',
				),
			437 =>
				array(
					'id'         => '7406043',
					'regency_id' => '7406',
					'name'       => 'LANTARI JAYA',
				),
			438 =>
				array(
					'id'         => '7406050',
					'regency_id' => '7406',
					'name'       => 'POLEANG TIMUR',
				),
			439 =>
				array(
					'id'         => '7406051',
					'regency_id' => '7406',
					'name'       => 'POLEANG UTARA',
				),
			440 =>
				array(
					'id'         => '7406052',
					'regency_id' => '7406',
					'name'       => 'POLEANG SELATAN',
				),
			441 =>
				array(
					'id'         => '7406053',
					'regency_id' => '7406',
					'name'       => 'POLEANG TENGGARA',
				),
			442 =>
				array(
					'id'         => '7406060',
					'regency_id' => '7406',
					'name'       => 'POLEANG',
				),
			443 =>
				array(
					'id'         => '7406061',
					'regency_id' => '7406',
					'name'       => 'POLEANG BARAT',
				),
			444 =>
				array(
					'id'         => '7406062',
					'regency_id' => '7406',
					'name'       => 'TONTONUNU',
				),
			445 =>
				array(
					'id'         => '7406063',
					'regency_id' => '7406',
					'name'       => 'POLEANG TENGAH',
				),
			446 =>
				array(
					'id'         => '7407010',
					'regency_id' => '7407',
					'name'       => 'BINONGKO',
				),
			447 =>
				array(
					'id'         => '7407011',
					'regency_id' => '7407',
					'name'       => 'TOGO BINONGKO',
				),
			448 =>
				array(
					'id'         => '7407020',
					'regency_id' => '7407',
					'name'       => 'TOMIA',
				),
			449 =>
				array(
					'id'         => '7407021',
					'regency_id' => '7407',
					'name'       => 'TOMIA TIMUR',
				),
			450 =>
				array(
					'id'         => '7407030',
					'regency_id' => '7407',
					'name'       => 'KALEDUPA',
				),
			451 =>
				array(
					'id'         => '7407031',
					'regency_id' => '7407',
					'name'       => 'KALEDUPA SELATAN',
				),
			452 =>
				array(
					'id'         => '7407040',
					'regency_id' => '7407',
					'name'       => 'WANGI-WANGI',
				),
			453 =>
				array(
					'id'         => '7407050',
					'regency_id' => '7407',
					'name'       => 'WANGI-WANGI SELATAN',
				),
			454 =>
				array(
					'id'         => '7408010',
					'regency_id' => '7408',
					'name'       => 'RANTEANGIN',
				),
			455 =>
				array(
					'id'         => '7408011',
					'regency_id' => '7408',
					'name'       => 'LAMBAI',
				),
			456 =>
				array(
					'id'         => '7408012',
					'regency_id' => '7408',
					'name'       => 'WAWO',
				),
			457 =>
				array(
					'id'         => '7408020',
					'regency_id' => '7408',
					'name'       => 'LASUSUA',
				),
			458 =>
				array(
					'id'         => '7408021',
					'regency_id' => '7408',
					'name'       => 'KATOI',
				),
			459 =>
				array(
					'id'         => '7408030',
					'regency_id' => '7408',
					'name'       => 'KODEOHA',
				),
			460 =>
				array(
					'id'         => '7408031',
					'regency_id' => '7408',
					'name'       => 'TIWU',
				),
			461 =>
				array(
					'id'         => '7408040',
					'regency_id' => '7408',
					'name'       => 'NGAPA',
				),
			462 =>
				array(
					'id'         => '7408041',
					'regency_id' => '7408',
					'name'       => 'WATUNOHU',
				),
			463 =>
				array(
					'id'         => '7408050',
					'regency_id' => '7408',
					'name'       => 'PAKUE',
				),
			464 =>
				array(
					'id'         => '7408051',
					'regency_id' => '7408',
					'name'       => 'PAKUE UTARA',
				),
			465 =>
				array(
					'id'         => '7408052',
					'regency_id' => '7408',
					'name'       => 'PAKUE TENGAH',
				),
			466 =>
				array(
					'id'         => '7408060',
					'regency_id' => '7408',
					'name'       => 'BATU PUTIH',
				),
			467 =>
				array(
					'id'         => '7408061',
					'regency_id' => '7408',
					'name'       => 'POREHU',
				),
			468 =>
				array(
					'id'         => '7408062',
					'regency_id' => '7408',
					'name'       => 'TOLALA',
				),
			469 =>
				array(
					'id'         => '7409100',
					'regency_id' => '7409',
					'name'       => 'BONEGUNU',
				),
			470 =>
				array(
					'id'         => '7409101',
					'regency_id' => '7409',
					'name'       => 'KAMBOWA',
				),
			471 =>
				array(
					'id'         => '7409110',
					'regency_id' => '7409',
					'name'       => 'WAKORUMBA',
				),
			472 =>
				array(
					'id'         => '7409120',
					'regency_id' => '7409',
					'name'       => 'KULISUSU',
				),
			473 =>
				array(
					'id'         => '7409121',
					'regency_id' => '7409',
					'name'       => 'KULISUSU BARAT',
				),
			474 =>
				array(
					'id'         => '7409122',
					'regency_id' => '7409',
					'name'       => 'KULISUSU UTARA',
				),
			475 =>
				array(
					'id'         => '7410010',
					'regency_id' => '7410',
					'name'       => 'SAWA',
				),
			476 =>
				array(
					'id'         => '7410011',
					'regency_id' => '7410',
					'name'       => 'MOTUI',
				),
			477 =>
				array(
					'id'         => '7410020',
					'regency_id' => '7410',
					'name'       => 'LEMBO',
				),
			478 =>
				array(
					'id'         => '7410030',
					'regency_id' => '7410',
					'name'       => 'LASOLO',
				),
			479 =>
				array(
					'id'         => '7410031',
					'regency_id' => '7410',
					'name'       => 'WAWOLESEA',
				),
			480 =>
				array(
					'id'         => '7410032',
					'regency_id' => '7410',
					'name'       => 'LASOLO KEPULAUAN',
				),
			481 =>
				array(
					'id'         => '7410040',
					'regency_id' => '7410',
					'name'       => 'MOLAWE',
				),
			482 =>
				array(
					'id'         => '7410050',
					'regency_id' => '7410',
					'name'       => 'ASERA',
				),
			483 =>
				array(
					'id'         => '7410051',
					'regency_id' => '7410',
					'name'       => 'ANDOWIA',
				),
			484 =>
				array(
					'id'         => '7410052',
					'regency_id' => '7410',
					'name'       => 'OHEO',
				),
			485 =>
				array(
					'id'         => '7410060',
					'regency_id' => '7410',
					'name'       => 'LANGGIKIMA',
				),
			486 =>
				array(
					'id'         => '7410070',
					'regency_id' => '7410',
					'name'       => 'WIWIRANO',
				),
			487 =>
				array(
					'id'         => '7410071',
					'regency_id' => '7410',
					'name'       => 'LANDAWE',
				),
			488 =>
				array(
					'id'         => '7411010',
					'regency_id' => '7411',
					'name'       => 'AERE',
				),
			489 =>
				array(
					'id'         => '7411020',
					'regency_id' => '7411',
					'name'       => 'LAMBANDIA',
				),
			490 =>
				array(
					'id'         => '7411030',
					'regency_id' => '7411',
					'name'       => 'POLI-POLIA',
				),
			491 =>
				array(
					'id'         => '7411040',
					'regency_id' => '7411',
					'name'       => 'DANGIA',
				),
			492 =>
				array(
					'id'         => '7411050',
					'regency_id' => '7411',
					'name'       => 'LADONGI',
				),
			493 =>
				array(
					'id'         => '7411060',
					'regency_id' => '7411',
					'name'       => 'LOEA',
				),
			494 =>
				array(
					'id'         => '7411070',
					'regency_id' => '7411',
					'name'       => 'TIRAWUTA',
				),
			495 =>
				array(
					'id'         => '7411080',
					'regency_id' => '7411',
					'name'       => 'LALOLAE',
				),
			496 =>
				array(
					'id'         => '7411090',
					'regency_id' => '7411',
					'name'       => 'MOWEWE',
				),
			497 =>
				array(
					'id'         => '7411100',
					'regency_id' => '7411',
					'name'       => 'TINONDO',
				),
			498 =>
				array(
					'id'         => '7411110',
					'regency_id' => '7411',
					'name'       => 'ULUIWOI',
				),
			499 =>
				array(
					'id'         => '7411120',
					'regency_id' => '7411',
					'name'       => 'UEESI',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '7412010',
					'regency_id' => '7412',
					'name'       => 'WAWONII TENGGARA',
				),
			1   =>
				array(
					'id'         => '7412020',
					'regency_id' => '7412',
					'name'       => 'WAWONII TIMUR',
				),
			2   =>
				array(
					'id'         => '7412030',
					'regency_id' => '7412',
					'name'       => 'WAWONII TIMUR LAUT',
				),
			3   =>
				array(
					'id'         => '7412040',
					'regency_id' => '7412',
					'name'       => 'WAWONII UTARA',
				),
			4   =>
				array(
					'id'         => '7412050',
					'regency_id' => '7412',
					'name'       => 'WAWONII SELATAN',
				),
			5   =>
				array(
					'id'         => '7412060',
					'regency_id' => '7412',
					'name'       => 'WAWONII TENGAH',
				),
			6   =>
				array(
					'id'         => '7412070',
					'regency_id' => '7412',
					'name'       => 'WAWONII BARAT',
				),
			7   =>
				array(
					'id'         => '7413010',
					'regency_id' => '7413',
					'name'       => 'TIWORO KEPULAUAN',
				),
			8   =>
				array(
					'id'         => '7413020',
					'regency_id' => '7413',
					'name'       => 'MAGINTI',
				),
			9   =>
				array(
					'id'         => '7413030',
					'regency_id' => '7413',
					'name'       => 'TIWORO TENGAH',
				),
			10  =>
				array(
					'id'         => '7413040',
					'regency_id' => '7413',
					'name'       => 'TIWORO SELATAN',
				),
			11  =>
				array(
					'id'         => '7413050',
					'regency_id' => '7413',
					'name'       => 'TIWORO UTARA',
				),
			12  =>
				array(
					'id'         => '7413060',
					'regency_id' => '7413',
					'name'       => 'LAWA',
				),
			13  =>
				array(
					'id'         => '7413070',
					'regency_id' => '7413',
					'name'       => 'SAWERIGADI',
				),
			14  =>
				array(
					'id'         => '7413080',
					'regency_id' => '7413',
					'name'       => 'BARANGKA',
				),
			15  =>
				array(
					'id'         => '7413090',
					'regency_id' => '7413',
					'name'       => 'WA DAGA',
				),
			16  =>
				array(
					'id'         => '7413100',
					'regency_id' => '7413',
					'name'       => 'KUSAMBI',
				),
			17  =>
				array(
					'id'         => '7413110',
					'regency_id' => '7413',
					'name'       => 'NAPANO KUSAMBI',
				),
			18  =>
				array(
					'id'         => '7414010',
					'regency_id' => '7414',
					'name'       => 'TALAGA RAYA',
				),
			19  =>
				array(
					'id'         => '7414020',
					'regency_id' => '7414',
					'name'       => 'MAWASANGKA',
				),
			20  =>
				array(
					'id'         => '7414030',
					'regency_id' => '7414',
					'name'       => 'MAWASANGKA TENGAH',
				),
			21  =>
				array(
					'id'         => '7414040',
					'regency_id' => '7414',
					'name'       => 'MAWASANGKA TIMUR',
				),
			22  =>
				array(
					'id'         => '7414050',
					'regency_id' => '7414',
					'name'       => 'LAKUDO',
				),
			23  =>
				array(
					'id'         => '7414060',
					'regency_id' => '7414',
					'name'       => 'GU',
				),
			24  =>
				array(
					'id'         => '7414070',
					'regency_id' => '7414',
					'name'       => 'SANGIA WAMBULU',
				),
			25  =>
				array(
					'id'         => '7415010',
					'regency_id' => '7415',
					'name'       => 'BATU ATAS',
				),
			26  =>
				array(
					'id'         => '7415020',
					'regency_id' => '7415',
					'name'       => 'LAPANDEWA',
				),
			27  =>
				array(
					'id'         => '7415030',
					'regency_id' => '7415',
					'name'       => 'SAMPOLAWA',
				),
			28  =>
				array(
					'id'         => '7415040',
					'regency_id' => '7415',
					'name'       => 'BATAUGA',
				),
			29  =>
				array(
					'id'         => '7415050',
					'regency_id' => '7415',
					'name'       => 'SIOMPU BARAT',
				),
			30  =>
				array(
					'id'         => '7415060',
					'regency_id' => '7415',
					'name'       => 'SIOMPU',
				),
			31  =>
				array(
					'id'         => '7415070',
					'regency_id' => '7415',
					'name'       => 'KADATUA',
				),
			32  =>
				array(
					'id'         => '7471010',
					'regency_id' => '7471',
					'name'       => 'MANDONGA',
				),
			33  =>
				array(
					'id'         => '7471011',
					'regency_id' => '7471',
					'name'       => 'BARUGA',
				),
			34  =>
				array(
					'id'         => '7471012',
					'regency_id' => '7471',
					'name'       => 'PUUWATU',
				),
			35  =>
				array(
					'id'         => '7471013',
					'regency_id' => '7471',
					'name'       => 'KADIA',
				),
			36  =>
				array(
					'id'         => '7471014',
					'regency_id' => '7471',
					'name'       => 'WUA-WUA',
				),
			37  =>
				array(
					'id'         => '7471020',
					'regency_id' => '7471',
					'name'       => 'POASIA',
				),
			38  =>
				array(
					'id'         => '7471021',
					'regency_id' => '7471',
					'name'       => 'ABELI',
				),
			39  =>
				array(
					'id'         => '7471022',
					'regency_id' => '7471',
					'name'       => 'KAMBU',
				),
			40  =>
				array(
					'id'         => '7471023',
					'regency_id' => '7471',
					'name'       => 'NAMBO',
				),
			41  =>
				array(
					'id'         => '7471030',
					'regency_id' => '7471',
					'name'       => 'KENDARI',
				),
			42  =>
				array(
					'id'         => '7471031',
					'regency_id' => '7471',
					'name'       => 'KENDARI BARAT',
				),
			43  =>
				array(
					'id'         => '7472010',
					'regency_id' => '7472',
					'name'       => 'BETOAMBARI',
				),
			44  =>
				array(
					'id'         => '7472011',
					'regency_id' => '7472',
					'name'       => 'MURHUM',
				),
			45  =>
				array(
					'id'         => '7472012',
					'regency_id' => '7472',
					'name'       => 'BATUPOARO',
				),
			46  =>
				array(
					'id'         => '7472020',
					'regency_id' => '7472',
					'name'       => 'WOLIO',
				),
			47  =>
				array(
					'id'         => '7472021',
					'regency_id' => '7472',
					'name'       => 'KOKALUKUNA',
				),
			48  =>
				array(
					'id'         => '7472030',
					'regency_id' => '7472',
					'name'       => 'SORAWOLIO',
				),
			49  =>
				array(
					'id'         => '7472040',
					'regency_id' => '7472',
					'name'       => 'BUNGI',
				),
			50  =>
				array(
					'id'         => '7472041',
					'regency_id' => '7472',
					'name'       => 'LEA-LEA',
				),
			51  =>
				array(
					'id'         => '7501031',
					'regency_id' => '7501',
					'name'       => 'MANANGGU',
				),
			52  =>
				array(
					'id'         => '7501040',
					'regency_id' => '7501',
					'name'       => 'TILAMUTA',
				),
			53  =>
				array(
					'id'         => '7501041',
					'regency_id' => '7501',
					'name'       => 'DULUPI',
				),
			54  =>
				array(
					'id'         => '7501042',
					'regency_id' => '7501',
					'name'       => 'BOTUMOITO',
				),
			55  =>
				array(
					'id'         => '7501050',
					'regency_id' => '7501',
					'name'       => 'PAGUYAMAN',
				),
			56  =>
				array(
					'id'         => '7501051',
					'regency_id' => '7501',
					'name'       => 'WONOSARI',
				),
			57  =>
				array(
					'id'         => '7501052',
					'regency_id' => '7501',
					'name'       => 'PAGUYAMAN PANTAI',
				),
			58  =>
				array(
					'id'         => '7502010',
					'regency_id' => '7502',
					'name'       => 'BATUDAA PANTAI',
				),
			59  =>
				array(
					'id'         => '7502011',
					'regency_id' => '7502',
					'name'       => 'BILUHU',
				),
			60  =>
				array(
					'id'         => '7502020',
					'regency_id' => '7502',
					'name'       => 'BATUDAA',
				),
			61  =>
				array(
					'id'         => '7502021',
					'regency_id' => '7502',
					'name'       => 'BONGOMEME',
				),
			62  =>
				array(
					'id'         => '7502022',
					'regency_id' => '7502',
					'name'       => 'TABONGO',
				),
			63  =>
				array(
					'id'         => '7502023',
					'regency_id' => '7502',
					'name'       => 'DUNGALIYO',
				),
			64  =>
				array(
					'id'         => '7502030',
					'regency_id' => '7502',
					'name'       => 'TIBAWA',
				),
			65  =>
				array(
					'id'         => '7502031',
					'regency_id' => '7502',
					'name'       => 'PULUBALA',
				),
			66  =>
				array(
					'id'         => '7502040',
					'regency_id' => '7502',
					'name'       => 'BOLIYOHUTO',
				),
			67  =>
				array(
					'id'         => '7502041',
					'regency_id' => '7502',
					'name'       => 'MOOTILANGO',
				),
			68  =>
				array(
					'id'         => '7502042',
					'regency_id' => '7502',
					'name'       => 'TOLANGOHULA',
				),
			69  =>
				array(
					'id'         => '7502043',
					'regency_id' => '7502',
					'name'       => 'ASPARAGA',
				),
			70  =>
				array(
					'id'         => '7502044',
					'regency_id' => '7502',
					'name'       => 'BILATO',
				),
			71  =>
				array(
					'id'         => '7502070',
					'regency_id' => '7502',
					'name'       => 'LIMBOTO',
				),
			72  =>
				array(
					'id'         => '7502071',
					'regency_id' => '7502',
					'name'       => 'LIMBOTO BARAT',
				),
			73  =>
				array(
					'id'         => '7502080',
					'regency_id' => '7502',
					'name'       => 'TELAGA',
				),
			74  =>
				array(
					'id'         => '7502081',
					'regency_id' => '7502',
					'name'       => 'TELAGA BIRU',
				),
			75  =>
				array(
					'id'         => '7502082',
					'regency_id' => '7502',
					'name'       => 'TILANGO',
				),
			76  =>
				array(
					'id'         => '7502083',
					'regency_id' => '7502',
					'name'       => 'TELAGA JAYA',
				),
			77  =>
				array(
					'id'         => '7503010',
					'regency_id' => '7503',
					'name'       => 'POPAYATO',
				),
			78  =>
				array(
					'id'         => '7503011',
					'regency_id' => '7503',
					'name'       => 'POPAYATO BARAT',
				),
			79  =>
				array(
					'id'         => '7503012',
					'regency_id' => '7503',
					'name'       => 'POPAYATO TIMUR',
				),
			80  =>
				array(
					'id'         => '7503020',
					'regency_id' => '7503',
					'name'       => 'LEMITO',
				),
			81  =>
				array(
					'id'         => '7503021',
					'regency_id' => '7503',
					'name'       => 'WANGGARASI',
				),
			82  =>
				array(
					'id'         => '7503030',
					'regency_id' => '7503',
					'name'       => 'MARISA',
				),
			83  =>
				array(
					'id'         => '7503031',
					'regency_id' => '7503',
					'name'       => 'PATILANGGIO',
				),
			84  =>
				array(
					'id'         => '7503032',
					'regency_id' => '7503',
					'name'       => 'BUNTULIA',
				),
			85  =>
				array(
					'id'         => '7503033',
					'regency_id' => '7503',
					'name'       => 'DUHIADAA',
				),
			86  =>
				array(
					'id'         => '7503040',
					'regency_id' => '7503',
					'name'       => 'RANDANGAN',
				),
			87  =>
				array(
					'id'         => '7503041',
					'regency_id' => '7503',
					'name'       => 'TALUDITI',
				),
			88  =>
				array(
					'id'         => '7503050',
					'regency_id' => '7503',
					'name'       => 'PAGUAT',
				),
			89  =>
				array(
					'id'         => '7503051',
					'regency_id' => '7503',
					'name'       => 'DENGILO',
				),
			90  =>
				array(
					'id'         => '7504010',
					'regency_id' => '7504',
					'name'       => 'TAPA',
				),
			91  =>
				array(
					'id'         => '7504011',
					'regency_id' => '7504',
					'name'       => 'BULANGO UTARA',
				),
			92  =>
				array(
					'id'         => '7504012',
					'regency_id' => '7504',
					'name'       => 'BULANGO SELATAN',
				),
			93  =>
				array(
					'id'         => '7504013',
					'regency_id' => '7504',
					'name'       => 'BULANGO TIMUR',
				),
			94  =>
				array(
					'id'         => '7504014',
					'regency_id' => '7504',
					'name'       => 'BULANGO ULU',
				),
			95  =>
				array(
					'id'         => '7504020',
					'regency_id' => '7504',
					'name'       => 'KABILA',
				),
			96  =>
				array(
					'id'         => '7504021',
					'regency_id' => '7504',
					'name'       => 'BOTU PINGGE',
				),
			97  =>
				array(
					'id'         => '7504022',
					'regency_id' => '7504',
					'name'       => 'TILONGKABILA',
				),
			98  =>
				array(
					'id'         => '7504030',
					'regency_id' => '7504',
					'name'       => 'SUWAWA',
				),
			99  =>
				array(
					'id'         => '7504031',
					'regency_id' => '7504',
					'name'       => 'SUWAWA SELATAN',
				),
			100 =>
				array(
					'id'         => '7504032',
					'regency_id' => '7504',
					'name'       => 'SUWAWA TIMUR',
				),
			101 =>
				array(
					'id'         => '7504033',
					'regency_id' => '7504',
					'name'       => 'SUWAWA TENGAH',
				),
			102 =>
				array(
					'id'         => '7504034',
					'regency_id' => '7504',
					'name'       => 'PINOGU',
				),
			103 =>
				array(
					'id'         => '7504040',
					'regency_id' => '7504',
					'name'       => 'BONEPANTAI',
				),
			104 =>
				array(
					'id'         => '7504041',
					'regency_id' => '7504',
					'name'       => 'KABILA BONE',
				),
			105 =>
				array(
					'id'         => '7504042',
					'regency_id' => '7504',
					'name'       => 'BONE RAYA',
				),
			106 =>
				array(
					'id'         => '7504043',
					'regency_id' => '7504',
					'name'       => 'BONE',
				),
			107 =>
				array(
					'id'         => '7504044',
					'regency_id' => '7504',
					'name'       => 'BULAWA',
				),
			108 =>
				array(
					'id'         => '7505010',
					'regency_id' => '7505',
					'name'       => 'ATINGGOLA',
				),
			109 =>
				array(
					'id'         => '7505011',
					'regency_id' => '7505',
					'name'       => 'GENTUMA RAYA',
				),
			110 =>
				array(
					'id'         => '7505020',
					'regency_id' => '7505',
					'name'       => 'KWANDANG',
				),
			111 =>
				array(
					'id'         => '7505021',
					'regency_id' => '7505',
					'name'       => 'TOMILITO',
				),
			112 =>
				array(
					'id'         => '7505022',
					'regency_id' => '7505',
					'name'       => 'PONELO KEPULAUAN',
				),
			113 =>
				array(
					'id'         => '7505030',
					'regency_id' => '7505',
					'name'       => 'ANGGREK',
				),
			114 =>
				array(
					'id'         => '7505031',
					'regency_id' => '7505',
					'name'       => 'MONANO',
				),
			115 =>
				array(
					'id'         => '7505040',
					'regency_id' => '7505',
					'name'       => 'SUMALATA',
				),
			116 =>
				array(
					'id'         => '7505041',
					'regency_id' => '7505',
					'name'       => 'SUMALATA TIMUR',
				),
			117 =>
				array(
					'id'         => '7505050',
					'regency_id' => '7505',
					'name'       => 'TOLINGGULA',
				),
			118 =>
				array(
					'id'         => '7505051',
					'regency_id' => '7505',
					'name'       => 'BIAU',
				),
			119 =>
				array(
					'id'         => '7571010',
					'regency_id' => '7571',
					'name'       => 'KOTA BARAT',
				),
			120 =>
				array(
					'id'         => '7571011',
					'regency_id' => '7571',
					'name'       => 'DUNGINGI',
				),
			121 =>
				array(
					'id'         => '7571020',
					'regency_id' => '7571',
					'name'       => 'KOTA SELATAN',
				),
			122 =>
				array(
					'id'         => '7571021',
					'regency_id' => '7571',
					'name'       => 'KOTA TIMUR',
				),
			123 =>
				array(
					'id'         => '7571022',
					'regency_id' => '7571',
					'name'       => 'HULONTHALANGI',
				),
			124 =>
				array(
					'id'         => '7571023',
					'regency_id' => '7571',
					'name'       => 'DUMBO RAYA',
				),
			125 =>
				array(
					'id'         => '7571030',
					'regency_id' => '7571',
					'name'       => 'KOTA UTARA',
				),
			126 =>
				array(
					'id'         => '7571031',
					'regency_id' => '7571',
					'name'       => 'KOTA TENGAH',
				),
			127 =>
				array(
					'id'         => '7571032',
					'regency_id' => '7571',
					'name'       => 'SIPATANA',
				),
			128 =>
				array(
					'id'         => '7601010',
					'regency_id' => '7601',
					'name'       => 'BANGGAE',
				),
			129 =>
				array(
					'id'         => '7601011',
					'regency_id' => '7601',
					'name'       => 'BANGGAE TIMUR',
				),
			130 =>
				array(
					'id'         => '7601020',
					'regency_id' => '7601',
					'name'       => 'PAMBOANG',
				),
			131 =>
				array(
					'id'         => '7601030',
					'regency_id' => '7601',
					'name'       => 'SENDANA',
				),
			132 =>
				array(
					'id'         => '7601031',
					'regency_id' => '7601',
					'name'       => 'TAMMERODO',
				),
			133 =>
				array(
					'id'         => '7601033',
					'regency_id' => '7601',
					'name'       => 'TUBO SENDANA',
				),
			134 =>
				array(
					'id'         => '7601040',
					'regency_id' => '7601',
					'name'       => 'MALUNDA',
				),
			135 =>
				array(
					'id'         => '7601041',
					'regency_id' => '7601',
					'name'       => 'ULUMANDA',
				),
			136 =>
				array(
					'id'         => '7602010',
					'regency_id' => '7602',
					'name'       => 'TINAMBUNG',
				),
			137 =>
				array(
					'id'         => '7602011',
					'regency_id' => '7602',
					'name'       => 'BALANIPA',
				),
			138 =>
				array(
					'id'         => '7602012',
					'regency_id' => '7602',
					'name'       => 'LIMBORO',
				),
			139 =>
				array(
					'id'         => '7602020',
					'regency_id' => '7602',
					'name'       => 'TUBBI TARAMANU',
				),
			140 =>
				array(
					'id'         => '7602021',
					'regency_id' => '7602',
					'name'       => 'ALU',
				),
			141 =>
				array(
					'id'         => '7602030',
					'regency_id' => '7602',
					'name'       => 'CAMPALAGIAN',
				),
			142 =>
				array(
					'id'         => '7602031',
					'regency_id' => '7602',
					'name'       => 'LUYO',
				),
			143 =>
				array(
					'id'         => '7602040',
					'regency_id' => '7602',
					'name'       => 'WONOMULYO',
				),
			144 =>
				array(
					'id'         => '7602041',
					'regency_id' => '7602',
					'name'       => 'MAPILLI',
				),
			145 =>
				array(
					'id'         => '7602042',
					'regency_id' => '7602',
					'name'       => 'TAPANGO',
				),
			146 =>
				array(
					'id'         => '7602043',
					'regency_id' => '7602',
					'name'       => 'MATAKALI',
				),
			147 =>
				array(
					'id'         => '7602044',
					'regency_id' => '7602',
					'name'       => 'B U L O',
				),
			148 =>
				array(
					'id'         => '7602050',
					'regency_id' => '7602',
					'name'       => 'POLEWALI',
				),
			149 =>
				array(
					'id'         => '7602051',
					'regency_id' => '7602',
					'name'       => 'BINUANG',
				),
			150 =>
				array(
					'id'         => '7602052',
					'regency_id' => '7602',
					'name'       => 'ANREAPI',
				),
			151 =>
				array(
					'id'         => '7602061',
					'regency_id' => '7602',
					'name'       => 'MATANGNGA',
				),
			152 =>
				array(
					'id'         => '7603010',
					'regency_id' => '7603',
					'name'       => 'SUMARORONG',
				),
			153 =>
				array(
					'id'         => '7603020',
					'regency_id' => '7603',
					'name'       => 'MESSAWA',
				),
			154 =>
				array(
					'id'         => '7603030',
					'regency_id' => '7603',
					'name'       => 'PANA',
				),
			155 =>
				array(
					'id'         => '7603031',
					'regency_id' => '7603',
					'name'       => 'NOSU',
				),
			156 =>
				array(
					'id'         => '7603040',
					'regency_id' => '7603',
					'name'       => 'TABANG',
				),
			157 =>
				array(
					'id'         => '7603050',
					'regency_id' => '7603',
					'name'       => 'MAMASA',
				),
			158 =>
				array(
					'id'         => '7603060',
					'regency_id' => '7603',
					'name'       => 'TANDUK KALUA',
				),
			159 =>
				array(
					'id'         => '7603061',
					'regency_id' => '7603',
					'name'       => 'BALLA',
				),
			160 =>
				array(
					'id'         => '7603070',
					'regency_id' => '7603',
					'name'       => 'SESENAPADANG',
				),
			161 =>
				array(
					'id'         => '7603071',
					'regency_id' => '7603',
					'name'       => 'TAWALIAN',
				),
			162 =>
				array(
					'id'         => '7603080',
					'regency_id' => '7603',
					'name'       => 'MAMBI',
				),
			163 =>
				array(
					'id'         => '7603081',
					'regency_id' => '7603',
					'name'       => 'BAMBANG',
				),
			164 =>
				array(
					'id'         => '7603082',
					'regency_id' => '7603',
					'name'       => 'RANTEBULAHAN TIMUR',
				),
			165 =>
				array(
					'id'         => '7603083',
					'regency_id' => '7603',
					'name'       => 'MEHALAAN',
				),
			166 =>
				array(
					'id'         => '7603090',
					'regency_id' => '7603',
					'name'       => 'ARALLE',
				),
			167 =>
				array(
					'id'         => '7603091',
					'regency_id' => '7603',
					'name'       => 'BUNTU MALANGKA',
				),
			168 =>
				array(
					'id'         => '7603100',
					'regency_id' => '7603',
					'name'       => 'TABULAHAN',
				),
			169 =>
				array(
					'id'         => '7604010',
					'regency_id' => '7604',
					'name'       => 'TAPALANG',
				),
			170 =>
				array(
					'id'         => '7604011',
					'regency_id' => '7604',
					'name'       => 'TAPALANG BARAT',
				),
			171 =>
				array(
					'id'         => '7604020',
					'regency_id' => '7604',
					'name'       => 'MAMUJU',
				),
			172 =>
				array(
					'id'         => '7604022',
					'regency_id' => '7604',
					'name'       => 'SIMBORO',
				),
			173 =>
				array(
					'id'         => '7604023',
					'regency_id' => '7604',
					'name'       => 'BALABALAKANG',
				),
			174 =>
				array(
					'id'         => '7604030',
					'regency_id' => '7604',
					'name'       => 'KALUKKU',
				),
			175 =>
				array(
					'id'         => '7604031',
					'regency_id' => '7604',
					'name'       => 'PAPALANG',
				),
			176 =>
				array(
					'id'         => '7604032',
					'regency_id' => '7604',
					'name'       => 'SAMPAGA',
				),
			177 =>
				array(
					'id'         => '7604033',
					'regency_id' => '7604',
					'name'       => 'TOMMO',
				),
			178 =>
				array(
					'id'         => '7604040',
					'regency_id' => '7604',
					'name'       => 'KALUMPANG',
				),
			179 =>
				array(
					'id'         => '7604041',
					'regency_id' => '7604',
					'name'       => 'BONEHAU',
				),
			180 =>
				array(
					'id'         => '7605010',
					'regency_id' => '7605',
					'name'       => 'SARUDU',
				),
			181 =>
				array(
					'id'         => '7605011',
					'regency_id' => '7605',
					'name'       => 'DAPURANG',
				),
			182 =>
				array(
					'id'         => '7605012',
					'regency_id' => '7605',
					'name'       => 'DURIPOKU',
				),
			183 =>
				array(
					'id'         => '7605020',
					'regency_id' => '7605',
					'name'       => 'BARAS',
				),
			184 =>
				array(
					'id'         => '7605021',
					'regency_id' => '7605',
					'name'       => 'BULU TABA',
				),
			185 =>
				array(
					'id'         => '7605022',
					'regency_id' => '7605',
					'name'       => 'LARIANG',
				),
			186 =>
				array(
					'id'         => '7605030',
					'regency_id' => '7605',
					'name'       => 'PASANGKAYU',
				),
			187 =>
				array(
					'id'         => '7605031',
					'regency_id' => '7605',
					'name'       => 'TIKKE RAYA',
				),
			188 =>
				array(
					'id'         => '7605032',
					'regency_id' => '7605',
					'name'       => 'PEDONGGA',
				),
			189 =>
				array(
					'id'         => '7605040',
					'regency_id' => '7605',
					'name'       => 'BAMBALAMOTU',
				),
			190 =>
				array(
					'id'         => '7605041',
					'regency_id' => '7605',
					'name'       => 'BAMBAIRA',
				),
			191 =>
				array(
					'id'         => '7605042',
					'regency_id' => '7605',
					'name'       => 'SARJO',
				),
			192 =>
				array(
					'id'         => '7606010',
					'regency_id' => '7606',
					'name'       => 'PANGALE',
				),
			193 =>
				array(
					'id'         => '7606020',
					'regency_id' => '7606',
					'name'       => 'BUDONG-BUDONG',
				),
			194 =>
				array(
					'id'         => '7606030',
					'regency_id' => '7606',
					'name'       => 'TOBADAK',
				),
			195 =>
				array(
					'id'         => '7606040',
					'regency_id' => '7606',
					'name'       => 'TOPOYO',
				),
			196 =>
				array(
					'id'         => '7606050',
					'regency_id' => '7606',
					'name'       => 'KAROSSA',
				),
			197 =>
				array(
					'id'         => '8101040',
					'regency_id' => '8101',
					'name'       => 'TANIMBAR SELATAN',
				),
			198 =>
				array(
					'id'         => '8101041',
					'regency_id' => '8101',
					'name'       => 'WER TAMRIAN',
				),
			199 =>
				array(
					'id'         => '8101042',
					'regency_id' => '8101',
					'name'       => 'WER MAKTIAN',
				),
			200 =>
				array(
					'id'         => '8101043',
					'regency_id' => '8101',
					'name'       => 'SELARU',
				),
			201 =>
				array(
					'id'         => '8101050',
					'regency_id' => '8101',
					'name'       => 'TANIMBAR UTARA',
				),
			202 =>
				array(
					'id'         => '8101051',
					'regency_id' => '8101',
					'name'       => 'YARU',
				),
			203 =>
				array(
					'id'         => '8101052',
					'regency_id' => '8101',
					'name'       => 'WUAR LABOBAR',
				),
			204 =>
				array(
					'id'         => '8101053',
					'regency_id' => '8101',
					'name'       => 'NIRUNMAS',
				),
			205 =>
				array(
					'id'         => '8101054',
					'regency_id' => '8101',
					'name'       => 'KORMOMOLIN',
				),
			206 =>
				array(
					'id'         => '8101055',
					'regency_id' => '8101',
					'name'       => 'MOLU MARU',
				),
			207 =>
				array(
					'id'         => '8102010',
					'regency_id' => '8102',
					'name'       => 'KEI KECIL',
				),
			208 =>
				array(
					'id'         => '8102012',
					'regency_id' => '8102',
					'name'       => 'KEI KECIL BARAT',
				),
			209 =>
				array(
					'id'         => '8102013',
					'regency_id' => '8102',
					'name'       => 'KEI KECIL TIMUR',
				),
			210 =>
				array(
					'id'         => '8102014',
					'regency_id' => '8102',
					'name'       => 'HOAT SORBAY',
				),
			211 =>
				array(
					'id'         => '8102015',
					'regency_id' => '8102',
					'name'       => 'MANYEUW',
				),
			212 =>
				array(
					'id'         => '8102016',
					'regency_id' => '8102',
					'name'       => 'KEI KECIL TIMUR SELATAN',
				),
			213 =>
				array(
					'id'         => '8102020',
					'regency_id' => '8102',
					'name'       => 'KEI BESAR',
				),
			214 =>
				array(
					'id'         => '8102021',
					'regency_id' => '8102',
					'name'       => 'KEI BESAR UTARA TIMUR',
				),
			215 =>
				array(
					'id'         => '8102022',
					'regency_id' => '8102',
					'name'       => 'KEI BESAR SELATAN',
				),
			216 =>
				array(
					'id'         => '8102023',
					'regency_id' => '8102',
					'name'       => 'KEI BESAR UTARA BARAT',
				),
			217 =>
				array(
					'id'         => '8102024',
					'regency_id' => '8102',
					'name'       => 'KEI BESAR SELATAN BARAT',
				),
			218 =>
				array(
					'id'         => '8103010',
					'regency_id' => '8103',
					'name'       => 'BANDA',
				),
			219 =>
				array(
					'id'         => '8103040',
					'regency_id' => '8103',
					'name'       => 'TEHORU',
				),
			220 =>
				array(
					'id'         => '8103041',
					'regency_id' => '8103',
					'name'       => 'TELUTIH',
				),
			221 =>
				array(
					'id'         => '8103050',
					'regency_id' => '8103',
					'name'       => 'AMAHAI',
				),
			222 =>
				array(
					'id'         => '8103051',
					'regency_id' => '8103',
					'name'       => 'KOTA MASOHI',
				),
			223 =>
				array(
					'id'         => '8103052',
					'regency_id' => '8103',
					'name'       => 'TELUK ELPAPUTIH',
				),
			224 =>
				array(
					'id'         => '8103060',
					'regency_id' => '8103',
					'name'       => 'TEON NILA SERUA',
				),
			225 =>
				array(
					'id'         => '8103080',
					'regency_id' => '8103',
					'name'       => 'SAPARUA',
				),
			226 =>
				array(
					'id'         => '8103081',
					'regency_id' => '8103',
					'name'       => 'NUSALAUT',
				),
			227 =>
				array(
					'id'         => '8103082',
					'regency_id' => '8103',
					'name'       => 'SAPARUA TIMUR',
				),
			228 =>
				array(
					'id'         => '8103090',
					'regency_id' => '8103',
					'name'       => 'P. HARUKU',
				),
			229 =>
				array(
					'id'         => '8103100',
					'regency_id' => '8103',
					'name'       => 'SALAHUTU',
				),
			230 =>
				array(
					'id'         => '8103110',
					'regency_id' => '8103',
					'name'       => 'LEIHITU',
				),
			231 =>
				array(
					'id'         => '8103111',
					'regency_id' => '8103',
					'name'       => 'LEIHITU BARAT',
				),
			232 =>
				array(
					'id'         => '8103140',
					'regency_id' => '8103',
					'name'       => 'SERAM UTARA',
				),
			233 =>
				array(
					'id'         => '8103141',
					'regency_id' => '8103',
					'name'       => 'SERAM UTARA BARAT',
				),
			234 =>
				array(
					'id'         => '8103142',
					'regency_id' => '8103',
					'name'       => 'SERAM UTARA TIMUR KOBI',
				),
			235 =>
				array(
					'id'         => '8103143',
					'regency_id' => '8103',
					'name'       => 'SERAM UTARA TIMUR SETI',
				),
			236 =>
				array(
					'id'         => '8104020',
					'regency_id' => '8104',
					'name'       => 'NAMLEA',
				),
			237 =>
				array(
					'id'         => '8104021',
					'regency_id' => '8104',
					'name'       => 'WAEAPO',
				),
			238 =>
				array(
					'id'         => '8104022',
					'regency_id' => '8104',
					'name'       => 'WAPLAU',
				),
			239 =>
				array(
					'id'         => '8104023',
					'regency_id' => '8104',
					'name'       => 'BATA BUAL',
				),
			240 =>
				array(
					'id'         => '8104024',
					'regency_id' => '8104',
					'name'       => 'TELUK KAIELY',
				),
			241 =>
				array(
					'id'         => '8104025',
					'regency_id' => '8104',
					'name'       => 'WAELATA',
				),
			242 =>
				array(
					'id'         => '8104026',
					'regency_id' => '8104',
					'name'       => 'LOLONG GUBA',
				),
			243 =>
				array(
					'id'         => '8104027',
					'regency_id' => '8104',
					'name'       => 'LILIALY',
				),
			244 =>
				array(
					'id'         => '8104030',
					'regency_id' => '8104',
					'name'       => 'AIR BUAYA',
				),
			245 =>
				array(
					'id'         => '8104031',
					'regency_id' => '8104',
					'name'       => 'FENA LEISELA',
				),
			246 =>
				array(
					'id'         => '8105010',
					'regency_id' => '8105',
					'name'       => 'ARU SELATAN',
				),
			247 =>
				array(
					'id'         => '8105011',
					'regency_id' => '8105',
					'name'       => 'ARU SELATAN TIMUR',
				),
			248 =>
				array(
					'id'         => '8105012',
					'regency_id' => '8105',
					'name'       => 'ARU SELATAN UTARA',
				),
			249 =>
				array(
					'id'         => '8105020',
					'regency_id' => '8105',
					'name'       => 'ARU TENGAH',
				),
			250 =>
				array(
					'id'         => '8105021',
					'regency_id' => '8105',
					'name'       => 'ARU TENGAH TIMUR',
				),
			251 =>
				array(
					'id'         => '8105022',
					'regency_id' => '8105',
					'name'       => 'ARU TENGAH SELATAN',
				),
			252 =>
				array(
					'id'         => '8105030',
					'regency_id' => '8105',
					'name'       => 'PULAU-PULAU ARU',
				),
			253 =>
				array(
					'id'         => '8105031',
					'regency_id' => '8105',
					'name'       => 'ARU UTARA',
				),
			254 =>
				array(
					'id'         => '8105032',
					'regency_id' => '8105',
					'name'       => 'ARU UTARA TIMUR BATULEY',
				),
			255 =>
				array(
					'id'         => '8105033',
					'regency_id' => '8105',
					'name'       => 'SIR-SIR',
				),
			256 =>
				array(
					'id'         => '8106010',
					'regency_id' => '8106',
					'name'       => 'HUAMUAL BELAKANG',
				),
			257 =>
				array(
					'id'         => '8106011',
					'regency_id' => '8106',
					'name'       => 'KEPULAUAN MANIPA',
				),
			258 =>
				array(
					'id'         => '8106020',
					'regency_id' => '8106',
					'name'       => 'SERAM BARAT',
				),
			259 =>
				array(
					'id'         => '8106021',
					'regency_id' => '8106',
					'name'       => 'HUAMUAL',
				),
			260 =>
				array(
					'id'         => '8106030',
					'regency_id' => '8106',
					'name'       => 'KAIRATU',
				),
			261 =>
				array(
					'id'         => '8106031',
					'regency_id' => '8106',
					'name'       => 'KAIRATU BARAT',
				),
			262 =>
				array(
					'id'         => '8106032',
					'regency_id' => '8106',
					'name'       => 'INAMOSOL',
				),
			263 =>
				array(
					'id'         => '8106033',
					'regency_id' => '8106',
					'name'       => 'AMALATU',
				),
			264 =>
				array(
					'id'         => '8106034',
					'regency_id' => '8106',
					'name'       => 'ELPAPUTIH',
				),
			265 =>
				array(
					'id'         => '8106040',
					'regency_id' => '8106',
					'name'       => 'TANIWEL',
				),
			266 =>
				array(
					'id'         => '8106041',
					'regency_id' => '8106',
					'name'       => 'TANIWEL TIMUR',
				),
			267 =>
				array(
					'id'         => '8107010',
					'regency_id' => '8107',
					'name'       => 'PULAU GOROM',
				),
			268 =>
				array(
					'id'         => '8107011',
					'regency_id' => '8107',
					'name'       => 'WAKATE',
				),
			269 =>
				array(
					'id'         => '8107012',
					'regency_id' => '8107',
					'name'       => 'TEOR',
				),
			270 =>
				array(
					'id'         => '8107013',
					'regency_id' => '8107',
					'name'       => 'GOROM TIMUR',
				),
			271 =>
				array(
					'id'         => '8107014',
					'regency_id' => '8107',
					'name'       => 'PULAU PANJANG',
				),
			272 =>
				array(
					'id'         => '8107020',
					'regency_id' => '8107',
					'name'       => 'SERAM TIMUR',
				),
			273 =>
				array(
					'id'         => '8107021',
					'regency_id' => '8107',
					'name'       => 'TUTUK TOLU',
				),
			274 =>
				array(
					'id'         => '8107022',
					'regency_id' => '8107',
					'name'       => 'KILMURY',
				),
			275 =>
				array(
					'id'         => '8107023',
					'regency_id' => '8107',
					'name'       => 'LIAN VITU',
				),
			276 =>
				array(
					'id'         => '8107024',
					'regency_id' => '8107',
					'name'       => 'KIAN DARAT',
				),
			277 =>
				array(
					'id'         => '8107030',
					'regency_id' => '8107',
					'name'       => 'WERINAMA',
				),
			278 =>
				array(
					'id'         => '8107031',
					'regency_id' => '8107',
					'name'       => 'SIWALALAT',
				),
			279 =>
				array(
					'id'         => '8107040',
					'regency_id' => '8107',
					'name'       => 'BULA',
				),
			280 =>
				array(
					'id'         => '8107041',
					'regency_id' => '8107',
					'name'       => 'BULA BARAT',
				),
			281 =>
				array(
					'id'         => '8107042',
					'regency_id' => '8107',
					'name'       => 'TELUK WARU',
				),
			282 =>
				array(
					'id'         => '8108010',
					'regency_id' => '8108',
					'name'       => 'WETAR',
				),
			283 =>
				array(
					'id'         => '8108011',
					'regency_id' => '8108',
					'name'       => 'WETAR BARAT',
				),
			284 =>
				array(
					'id'         => '8108012',
					'regency_id' => '8108',
					'name'       => 'WETAR UTARA',
				),
			285 =>
				array(
					'id'         => '8108013',
					'regency_id' => '8108',
					'name'       => 'WETAR TIMUR',
				),
			286 =>
				array(
					'id'         => '8108020',
					'regency_id' => '8108',
					'name'       => 'PP. TERSELATAN',
				),
			287 =>
				array(
					'id'         => '8108021',
					'regency_id' => '8108',
					'name'       => 'KISAR UTARA',
				),
			288 =>
				array(
					'id'         => '8108022',
					'regency_id' => '8108',
					'name'       => 'KEPULAUAN ROMANG',
				),
			289 =>
				array(
					'id'         => '8108030',
					'regency_id' => '8108',
					'name'       => 'LETTI',
				),
			290 =>
				array(
					'id'         => '8108041',
					'regency_id' => '8108',
					'name'       => 'MOA',
				),
			291 =>
				array(
					'id'         => '8108042',
					'regency_id' => '8108',
					'name'       => 'LAKOR',
				),
			292 =>
				array(
					'id'         => '8108050',
					'regency_id' => '8108',
					'name'       => 'DAMER',
				),
			293 =>
				array(
					'id'         => '8108060',
					'regency_id' => '8108',
					'name'       => 'MDONA HIERA',
				),
			294 =>
				array(
					'id'         => '8108070',
					'regency_id' => '8108',
					'name'       => 'PP. BABAR',
				),
			295 =>
				array(
					'id'         => '8108071',
					'regency_id' => '8108',
					'name'       => 'PULAU WETANG',
				),
			296 =>
				array(
					'id'         => '8108080',
					'regency_id' => '8108',
					'name'       => 'BABAR TIMUR',
				),
			297 =>
				array(
					'id'         => '8108081',
					'regency_id' => '8108',
					'name'       => 'PULAU MASELA',
				),
			298 =>
				array(
					'id'         => '8108082',
					'regency_id' => '8108',
					'name'       => 'DAWELOR DAWERA',
				),
			299 =>
				array(
					'id'         => '8109010',
					'regency_id' => '8109',
					'name'       => 'KEPALA MADAN',
				),
			300 =>
				array(
					'id'         => '8109020',
					'regency_id' => '8109',
					'name'       => 'LEKSULA',
				),
			301 =>
				array(
					'id'         => '8109021',
					'regency_id' => '8109',
					'name'       => 'FENA FAFAN',
				),
			302 =>
				array(
					'id'         => '8109030',
					'regency_id' => '8109',
					'name'       => 'NAMROLE',
				),
			303 =>
				array(
					'id'         => '8109040',
					'regency_id' => '8109',
					'name'       => 'WAISAMA',
				),
			304 =>
				array(
					'id'         => '8109050',
					'regency_id' => '8109',
					'name'       => 'AMBALAU',
				),
			305 =>
				array(
					'id'         => '8171010',
					'regency_id' => '8171',
					'name'       => 'NUSANIWE',
				),
			306 =>
				array(
					'id'         => '8171020',
					'regency_id' => '8171',
					'name'       => 'SIRIMAU',
				),
			307 =>
				array(
					'id'         => '8171021',
					'regency_id' => '8171',
					'name'       => 'LEITIMUR SELATAN',
				),
			308 =>
				array(
					'id'         => '8171030',
					'regency_id' => '8171',
					'name'       => 'TELUK AMBON BAGUALA',
				),
			309 =>
				array(
					'id'         => '8171031',
					'regency_id' => '8171',
					'name'       => 'TELUK AMBON',
				),
			310 =>
				array(
					'id'         => '8172010',
					'regency_id' => '8172',
					'name'       => 'PP. KUR',
				),
			311 =>
				array(
					'id'         => '8172011',
					'regency_id' => '8172',
					'name'       => 'KUR SELATAN',
				),
			312 =>
				array(
					'id'         => '8172020',
					'regency_id' => '8172',
					'name'       => 'TAYANDO TAM',
				),
			313 =>
				array(
					'id'         => '8172030',
					'regency_id' => '8172',
					'name'       => 'PULAU DULLAH UTARA',
				),
			314 =>
				array(
					'id'         => '8172040',
					'regency_id' => '8172',
					'name'       => 'PULAU DULLAH SELATAN',
				),
			315 =>
				array(
					'id'         => '8201090',
					'regency_id' => '8201',
					'name'       => 'JAILOLO',
				),
			316 =>
				array(
					'id'         => '8201091',
					'regency_id' => '8201',
					'name'       => 'JAILOLO SELATAN',
				),
			317 =>
				array(
					'id'         => '8201100',
					'regency_id' => '8201',
					'name'       => 'SAHU',
				),
			318 =>
				array(
					'id'         => '8201101',
					'regency_id' => '8201',
					'name'       => 'SAHU TIMUR',
				),
			319 =>
				array(
					'id'         => '8201130',
					'regency_id' => '8201',
					'name'       => 'IBU',
				),
			320 =>
				array(
					'id'         => '8201131',
					'regency_id' => '8201',
					'name'       => 'IBU SELATAN',
				),
			321 =>
				array(
					'id'         => '8201132',
					'regency_id' => '8201',
					'name'       => 'TABARU',
				),
			322 =>
				array(
					'id'         => '8201140',
					'regency_id' => '8201',
					'name'       => 'LOLODA',
				),
			323 =>
				array(
					'id'         => '8202030',
					'regency_id' => '8202',
					'name'       => 'WEDA',
				),
			324 =>
				array(
					'id'         => '8202031',
					'regency_id' => '8202',
					'name'       => 'WEDA SELATAN',
				),
			325 =>
				array(
					'id'         => '8202032',
					'regency_id' => '8202',
					'name'       => 'WEDA UTARA',
				),
			326 =>
				array(
					'id'         => '8202033',
					'regency_id' => '8202',
					'name'       => 'WEDA TENGAH',
				),
			327 =>
				array(
					'id'         => '8202034',
					'regency_id' => '8202',
					'name'       => 'WEDA TIMUR',
				),
			328 =>
				array(
					'id'         => '8202041',
					'regency_id' => '8202',
					'name'       => 'PULAU GEBE',
				),
			329 =>
				array(
					'id'         => '8202042',
					'regency_id' => '8202',
					'name'       => 'PATANI',
				),
			330 =>
				array(
					'id'         => '8202043',
					'regency_id' => '8202',
					'name'       => 'PATANI UTARA',
				),
			331 =>
				array(
					'id'         => '8202044',
					'regency_id' => '8202',
					'name'       => 'PATANI BARAT',
				),
			332 =>
				array(
					'id'         => '8202045',
					'regency_id' => '8202',
					'name'       => 'PATANI TIMUR',
				),
			333 =>
				array(
					'id'         => '8203010',
					'regency_id' => '8203',
					'name'       => 'SULA BESI BARAT',
				),
			334 =>
				array(
					'id'         => '8203011',
					'regency_id' => '8203',
					'name'       => 'SULABESI SELATAN',
				),
			335 =>
				array(
					'id'         => '8203020',
					'regency_id' => '8203',
					'name'       => 'SANANA',
				),
			336 =>
				array(
					'id'         => '8203021',
					'regency_id' => '8203',
					'name'       => 'SULA BESI TENGAH',
				),
			337 =>
				array(
					'id'         => '8203022',
					'regency_id' => '8203',
					'name'       => 'SULABESI TIMUR',
				),
			338 =>
				array(
					'id'         => '8203023',
					'regency_id' => '8203',
					'name'       => 'SANANA UTARA',
				),
			339 =>
				array(
					'id'         => '8203030',
					'regency_id' => '8203',
					'name'       => 'MANGOLI TIMUR',
				),
			340 =>
				array(
					'id'         => '8203031',
					'regency_id' => '8203',
					'name'       => 'MANGOLI TENGAH',
				),
			341 =>
				array(
					'id'         => '8203032',
					'regency_id' => '8203',
					'name'       => 'MANGOLI UTARA TIMUR',
				),
			342 =>
				array(
					'id'         => '8203040',
					'regency_id' => '8203',
					'name'       => 'MANGOLI BARAT',
				),
			343 =>
				array(
					'id'         => '8203041',
					'regency_id' => '8203',
					'name'       => 'MANGOLI UTARA',
				),
			344 =>
				array(
					'id'         => '8203042',
					'regency_id' => '8203',
					'name'       => 'MANGOLI SELATAN',
				),
			345 =>
				array(
					'id'         => '8204010',
					'regency_id' => '8204',
					'name'       => 'OBI SELATAN',
				),
			346 =>
				array(
					'id'         => '8204020',
					'regency_id' => '8204',
					'name'       => 'OBI',
				),
			347 =>
				array(
					'id'         => '8204021',
					'regency_id' => '8204',
					'name'       => 'OBI BARAT',
				),
			348 =>
				array(
					'id'         => '8204022',
					'regency_id' => '8204',
					'name'       => 'OBI TIMUR',
				),
			349 =>
				array(
					'id'         => '8204023',
					'regency_id' => '8204',
					'name'       => 'OBI UTARA',
				),
			350 =>
				array(
					'id'         => '8204030',
					'regency_id' => '8204',
					'name'       => 'BACAN',
				),
			351 =>
				array(
					'id'         => '8204031',
					'regency_id' => '8204',
					'name'       => 'MANDIOLI SELATAN',
				),
			352 =>
				array(
					'id'         => '8204032',
					'regency_id' => '8204',
					'name'       => 'MANDIOLI UTARA',
				),
			353 =>
				array(
					'id'         => '8204033',
					'regency_id' => '8204',
					'name'       => 'BACAN SELATAN',
				),
			354 =>
				array(
					'id'         => '8204034',
					'regency_id' => '8204',
					'name'       => 'BATANG LOMANG',
				),
			355 =>
				array(
					'id'         => '8204040',
					'regency_id' => '8204',
					'name'       => 'BACAN TIMUR',
				),
			356 =>
				array(
					'id'         => '8204041',
					'regency_id' => '8204',
					'name'       => 'BACAN TIMUR SELATAN',
				),
			357 =>
				array(
					'id'         => '8204042',
					'regency_id' => '8204',
					'name'       => 'BACAN TIMUR TENGAH',
				),
			358 =>
				array(
					'id'         => '8204050',
					'regency_id' => '8204',
					'name'       => 'BACAN BARAT',
				),
			359 =>
				array(
					'id'         => '8204051',
					'regency_id' => '8204',
					'name'       => 'KASIRUTA BARAT',
				),
			360 =>
				array(
					'id'         => '8204052',
					'regency_id' => '8204',
					'name'       => 'KASIRUTA TIMUR',
				),
			361 =>
				array(
					'id'         => '8204053',
					'regency_id' => '8204',
					'name'       => 'BACAN BARAT UTARA',
				),
			362 =>
				array(
					'id'         => '8204060',
					'regency_id' => '8204',
					'name'       => 'KAYOA',
				),
			363 =>
				array(
					'id'         => '8204061',
					'regency_id' => '8204',
					'name'       => 'KAYOA BARAT',
				),
			364 =>
				array(
					'id'         => '8204062',
					'regency_id' => '8204',
					'name'       => 'KAYOA SELATAN',
				),
			365 =>
				array(
					'id'         => '8204063',
					'regency_id' => '8204',
					'name'       => 'KAYOA UTARA',
				),
			366 =>
				array(
					'id'         => '8204070',
					'regency_id' => '8204',
					'name'       => 'PULAU MAKIAN',
				),
			367 =>
				array(
					'id'         => '8204071',
					'regency_id' => '8204',
					'name'       => 'MAKIAN BARAT',
				),
			368 =>
				array(
					'id'         => '8204080',
					'regency_id' => '8204',
					'name'       => 'GANE BARAT',
				),
			369 =>
				array(
					'id'         => '8204081',
					'regency_id' => '8204',
					'name'       => 'GANE BARAT SELATAN',
				),
			370 =>
				array(
					'id'         => '8204082',
					'regency_id' => '8204',
					'name'       => 'GANE BARAT UTARA',
				),
			371 =>
				array(
					'id'         => '8204083',
					'regency_id' => '8204',
					'name'       => 'KEPULAUAN JORONGA',
				),
			372 =>
				array(
					'id'         => '8204090',
					'regency_id' => '8204',
					'name'       => 'GANE TIMUR',
				),
			373 =>
				array(
					'id'         => '8204091',
					'regency_id' => '8204',
					'name'       => 'GANE TIMUR TENGAH',
				),
			374 =>
				array(
					'id'         => '8204092',
					'regency_id' => '8204',
					'name'       => 'GANE TIMUR SELATAN',
				),
			375 =>
				array(
					'id'         => '8205010',
					'regency_id' => '8205',
					'name'       => 'MALIFUT',
				),
			376 =>
				array(
					'id'         => '8205011',
					'regency_id' => '8205',
					'name'       => 'KAO TELUK',
				),
			377 =>
				array(
					'id'         => '8205020',
					'regency_id' => '8205',
					'name'       => 'KAO',
				),
			378 =>
				array(
					'id'         => '8205021',
					'regency_id' => '8205',
					'name'       => 'KAO BARAT',
				),
			379 =>
				array(
					'id'         => '8205022',
					'regency_id' => '8205',
					'name'       => 'KAO UTARA',
				),
			380 =>
				array(
					'id'         => '8205030',
					'regency_id' => '8205',
					'name'       => 'TOBELO SELATAN',
				),
			381 =>
				array(
					'id'         => '8205031',
					'regency_id' => '8205',
					'name'       => 'TOBELO BARAT',
				),
			382 =>
				array(
					'id'         => '8205032',
					'regency_id' => '8205',
					'name'       => 'TOBELO TIMUR',
				),
			383 =>
				array(
					'id'         => '8205040',
					'regency_id' => '8205',
					'name'       => 'TOBELO',
				),
			384 =>
				array(
					'id'         => '8205041',
					'regency_id' => '8205',
					'name'       => 'TOBELO TENGAH',
				),
			385 =>
				array(
					'id'         => '8205042',
					'regency_id' => '8205',
					'name'       => 'TOBELO UTARA',
				),
			386 =>
				array(
					'id'         => '8205050',
					'regency_id' => '8205',
					'name'       => 'GALELA',
				),
			387 =>
				array(
					'id'         => '8205051',
					'regency_id' => '8205',
					'name'       => 'GALELA SELATAN',
				),
			388 =>
				array(
					'id'         => '8205052',
					'regency_id' => '8205',
					'name'       => 'GALELA BARAT',
				),
			389 =>
				array(
					'id'         => '8205053',
					'regency_id' => '8205',
					'name'       => 'GALELA UTARA',
				),
			390 =>
				array(
					'id'         => '8205060',
					'regency_id' => '8205',
					'name'       => 'LOLODA UTARA',
				),
			391 =>
				array(
					'id'         => '8205061',
					'regency_id' => '8205',
					'name'       => 'LOLODA KEPULAUAN',
				),
			392 =>
				array(
					'id'         => '8206010',
					'regency_id' => '8206',
					'name'       => 'MABA SELATAN',
				),
			393 =>
				array(
					'id'         => '8206011',
					'regency_id' => '8206',
					'name'       => 'KOTA MABA',
				),
			394 =>
				array(
					'id'         => '8206020',
					'regency_id' => '8206',
					'name'       => 'WASILE SELATAN',
				),
			395 =>
				array(
					'id'         => '8206030',
					'regency_id' => '8206',
					'name'       => 'WASILE',
				),
			396 =>
				array(
					'id'         => '8206031',
					'regency_id' => '8206',
					'name'       => 'WASILE TIMUR',
				),
			397 =>
				array(
					'id'         => '8206032',
					'regency_id' => '8206',
					'name'       => 'WASILE TENGAH',
				),
			398 =>
				array(
					'id'         => '8206033',
					'regency_id' => '8206',
					'name'       => 'WASILE UTARA',
				),
			399 =>
				array(
					'id'         => '8206040',
					'regency_id' => '8206',
					'name'       => 'MABA',
				),
			400 =>
				array(
					'id'         => '8206041',
					'regency_id' => '8206',
					'name'       => 'MABA TENGAH',
				),
			401 =>
				array(
					'id'         => '8206042',
					'regency_id' => '8206',
					'name'       => 'MABA UTARA',
				),
			402 =>
				array(
					'id'         => '8207010',
					'regency_id' => '8207',
					'name'       => 'MOROTAI SELATAN',
				),
			403 =>
				array(
					'id'         => '8207020',
					'regency_id' => '8207',
					'name'       => 'MOROTAI TIMUR',
				),
			404 =>
				array(
					'id'         => '8207030',
					'regency_id' => '8207',
					'name'       => 'MOROTAI SELATAN BARAT',
				),
			405 =>
				array(
					'id'         => '8207040',
					'regency_id' => '8207',
					'name'       => 'MOROTAI JAYA',
				),
			406 =>
				array(
					'id'         => '8207050',
					'regency_id' => '8207',
					'name'       => 'MOROTAI UTARA',
				),
			407 =>
				array(
					'id'         => '8208010',
					'regency_id' => '8208',
					'name'       => 'TALIABU BARAT',
				),
			408 =>
				array(
					'id'         => '8208020',
					'regency_id' => '8208',
					'name'       => 'TALIABU SELATAN',
				),
			409 =>
				array(
					'id'         => '8208030',
					'regency_id' => '8208',
					'name'       => 'TABONA',
				),
			410 =>
				array(
					'id'         => '8208040',
					'regency_id' => '8208',
					'name'       => 'TALIABU TIMUR SELATAN',
				),
			411 =>
				array(
					'id'         => '8208050',
					'regency_id' => '8208',
					'name'       => 'TALIABU TIMUR',
				),
			412 =>
				array(
					'id'         => '8208060',
					'regency_id' => '8208',
					'name'       => 'TALIABU UTARA',
				),
			413 =>
				array(
					'id'         => '8208070',
					'regency_id' => '8208',
					'name'       => 'LEDE',
				),
			414 =>
				array(
					'id'         => '8208080',
					'regency_id' => '8208',
					'name'       => 'TALIABU BARAT LAUT',
				),
			415 =>
				array(
					'id'         => '8271010',
					'regency_id' => '8271',
					'name'       => 'PULAU TERNATE',
				),
			416 =>
				array(
					'id'         => '8271011',
					'regency_id' => '8271',
					'name'       => 'MOTI',
				),
			417 =>
				array(
					'id'         => '8271012',
					'regency_id' => '8271',
					'name'       => 'PULAU BATANG DUA',
				),
			418 =>
				array(
					'id'         => '8271013',
					'regency_id' => '8271',
					'name'       => 'PULAU HIRI',
				),
			419 =>
				array(
					'id'         => '8271014',
					'regency_id' => '8271',
					'name'       => 'TERNATE BARAT',
				),
			420 =>
				array(
					'id'         => '8271020',
					'regency_id' => '8271',
					'name'       => 'TERNATE SELATAN',
				),
			421 =>
				array(
					'id'         => '8271021',
					'regency_id' => '8271',
					'name'       => 'TERNATE TENGAH',
				),
			422 =>
				array(
					'id'         => '8271030',
					'regency_id' => '8271',
					'name'       => 'TERNATE UTARA',
				),
			423 =>
				array(
					'id'         => '8272010',
					'regency_id' => '8272',
					'name'       => 'TIDORE SELATAN',
				),
			424 =>
				array(
					'id'         => '8272020',
					'regency_id' => '8272',
					'name'       => 'TIDORE UTARA',
				),
			425 =>
				array(
					'id'         => '8272030',
					'regency_id' => '8272',
					'name'       => 'TIDORE',
				),
			426 =>
				array(
					'id'         => '8272031',
					'regency_id' => '8272',
					'name'       => 'TIDORE TIMUR',
				),
			427 =>
				array(
					'id'         => '8272040',
					'regency_id' => '8272',
					'name'       => 'OBA',
				),
			428 =>
				array(
					'id'         => '8272041',
					'regency_id' => '8272',
					'name'       => 'OBA SELATAN',
				),
			429 =>
				array(
					'id'         => '8272050',
					'regency_id' => '8272',
					'name'       => 'OBA UTARA',
				),
			430 =>
				array(
					'id'         => '8272051',
					'regency_id' => '8272',
					'name'       => 'OBA TENGAH',
				),
			431 =>
				array(
					'id'         => '9101050',
					'regency_id' => '9101',
					'name'       => 'FAKFAK TIMUR',
				),
			432 =>
				array(
					'id'         => '9101051',
					'regency_id' => '9101',
					'name'       => 'KARAS',
				),
			433 =>
				array(
					'id'         => '9101052',
					'regency_id' => '9101',
					'name'       => 'FAKFAK TIMUR TENGAH',
				),
			434 =>
				array(
					'id'         => '9101060',
					'regency_id' => '9101',
					'name'       => 'FAKFAK',
				),
			435 =>
				array(
					'id'         => '9101061',
					'regency_id' => '9101',
					'name'       => 'FAKFAK TENGAH',
				),
			436 =>
				array(
					'id'         => '9101062',
					'regency_id' => '9101',
					'name'       => 'PARIWARI',
				),
			437 =>
				array(
					'id'         => '9101070',
					'regency_id' => '9101',
					'name'       => 'FAKFAK BARAT',
				),
			438 =>
				array(
					'id'         => '9101071',
					'regency_id' => '9101',
					'name'       => 'WARTUTIN',
				),
			439 =>
				array(
					'id'         => '9101080',
					'regency_id' => '9101',
					'name'       => 'KOKAS',
				),
			440 =>
				array(
					'id'         => '9101081',
					'regency_id' => '9101',
					'name'       => 'TELUK PATIPI',
				),
			441 =>
				array(
					'id'         => '9101082',
					'regency_id' => '9101',
					'name'       => 'KRAMONGMONGGA',
				),
			442 =>
				array(
					'id'         => '9101083',
					'regency_id' => '9101',
					'name'       => 'BOMBERAY',
				),
			443 =>
				array(
					'id'         => '9101084',
					'regency_id' => '9101',
					'name'       => 'ARGUNI',
				),
			444 =>
				array(
					'id'         => '9101085',
					'regency_id' => '9101',
					'name'       => 'MBAHAMDANDARA',
				),
			445 =>
				array(
					'id'         => '9101086',
					'regency_id' => '9101',
					'name'       => 'FURWAGI',
				),
			446 =>
				array(
					'id'         => '9101087',
					'regency_id' => '9101',
					'name'       => 'KAYAUNI',
				),
			447 =>
				array(
					'id'         => '9101088',
					'regency_id' => '9101',
					'name'       => 'TOMAGE',
				),
			448 =>
				array(
					'id'         => '9102010',
					'regency_id' => '9102',
					'name'       => 'BURUWAY',
				),
			449 =>
				array(
					'id'         => '9102020',
					'regency_id' => '9102',
					'name'       => 'TELUK ARGUNI',
				),
			450 =>
				array(
					'id'         => '9102021',
					'regency_id' => '9102',
					'name'       => 'TELUK ARGUNI BAWAH',
				),
			451 =>
				array(
					'id'         => '9102030',
					'regency_id' => '9102',
					'name'       => 'KAIMANA',
				),
			452 =>
				array(
					'id'         => '9102031',
					'regency_id' => '9102',
					'name'       => 'KAMBRAU',
				),
			453 =>
				array(
					'id'         => '9102040',
					'regency_id' => '9102',
					'name'       => 'TELUK ETNA',
				),
			454 =>
				array(
					'id'         => '9102041',
					'regency_id' => '9102',
					'name'       => 'YAMOR',
				),
			455 =>
				array(
					'id'         => '9103010',
					'regency_id' => '9103',
					'name'       => 'NAIKERE',
				),
			456 =>
				array(
					'id'         => '9103020',
					'regency_id' => '9103',
					'name'       => 'WONDIBOY',
				),
			457 =>
				array(
					'id'         => '9103021',
					'regency_id' => '9103',
					'name'       => 'RASIEY',
				),
			458 =>
				array(
					'id'         => '9103022',
					'regency_id' => '9103',
					'name'       => 'KURI WAMESA',
				),
			459 =>
				array(
					'id'         => '9103030',
					'regency_id' => '9103',
					'name'       => 'WASIOR',
				),
			460 =>
				array(
					'id'         => '9103040',
					'regency_id' => '9103',
					'name'       => 'DUAIRI',
				),
			461 =>
				array(
					'id'         => '9103041',
					'regency_id' => '9103',
					'name'       => 'ROON',
				),
			462 =>
				array(
					'id'         => '9103050',
					'regency_id' => '9103',
					'name'       => 'WINDESI',
				),
			463 =>
				array(
					'id'         => '9103051',
					'regency_id' => '9103',
					'name'       => 'NIKIWAR',
				),
			464 =>
				array(
					'id'         => '9103060',
					'regency_id' => '9103',
					'name'       => 'WAMESA',
				),
			465 =>
				array(
					'id'         => '9103061',
					'regency_id' => '9103',
					'name'       => 'ROSWAR',
				),
			466 =>
				array(
					'id'         => '9103070',
					'regency_id' => '9103',
					'name'       => 'RUMBERPON',
				),
			467 =>
				array(
					'id'         => '9103071',
					'regency_id' => '9103',
					'name'       => 'SOUG JAYA',
				),
			468 =>
				array(
					'id'         => '9104010',
					'regency_id' => '9104',
					'name'       => 'FAFURWAR',
				),
			469 =>
				array(
					'id'         => '9104020',
					'regency_id' => '9104',
					'name'       => 'BABO',
				),
			470 =>
				array(
					'id'         => '9104021',
					'regency_id' => '9104',
					'name'       => 'SUMURI',
				),
			471 =>
				array(
					'id'         => '9104022',
					'regency_id' => '9104',
					'name'       => 'AROBA',
				),
			472 =>
				array(
					'id'         => '9104023',
					'regency_id' => '9104',
					'name'       => 'KAITARO',
				),
			473 =>
				array(
					'id'         => '9104030',
					'regency_id' => '9104',
					'name'       => 'KURI',
				),
			474 =>
				array(
					'id'         => '9104040',
					'regency_id' => '9104',
					'name'       => 'WAMESA',
				),
			475 =>
				array(
					'id'         => '9104050',
					'regency_id' => '9104',
					'name'       => 'BINTUNI',
				),
			476 =>
				array(
					'id'         => '9104051',
					'regency_id' => '9104',
					'name'       => 'MANIMERI',
				),
			477 =>
				array(
					'id'         => '9104052',
					'regency_id' => '9104',
					'name'       => 'TUHIBA',
				),
			478 =>
				array(
					'id'         => '9104053',
					'regency_id' => '9104',
					'name'       => 'DATARAN BEIMES',
				),
			479 =>
				array(
					'id'         => '9104060',
					'regency_id' => '9104',
					'name'       => 'TEMBUNI',
				),
			480 =>
				array(
					'id'         => '9104070',
					'regency_id' => '9104',
					'name'       => 'ARANDAY',
				),
			481 =>
				array(
					'id'         => '9104071',
					'regency_id' => '9104',
					'name'       => 'KAMUNDAN',
				),
			482 =>
				array(
					'id'         => '9104072',
					'regency_id' => '9104',
					'name'       => 'TOMU',
				),
			483 =>
				array(
					'id'         => '9104073',
					'regency_id' => '9104',
					'name'       => 'WERIAGAR',
				),
			484 =>
				array(
					'id'         => '9104080',
					'regency_id' => '9104',
					'name'       => 'MOSKONA SELATAN',
				),
			485 =>
				array(
					'id'         => '9104081',
					'regency_id' => '9104',
					'name'       => 'MEYADO',
				),
			486 =>
				array(
					'id'         => '9104082',
					'regency_id' => '9104',
					'name'       => 'MOSKONA BARAT',
				),
			487 =>
				array(
					'id'         => '9104090',
					'regency_id' => '9104',
					'name'       => 'MERDEY',
				),
			488 =>
				array(
					'id'         => '9104091',
					'regency_id' => '9104',
					'name'       => 'BISCOOP',
				),
			489 =>
				array(
					'id'         => '9104092',
					'regency_id' => '9104',
					'name'       => 'MASYETA',
				),
			490 =>
				array(
					'id'         => '9104100',
					'regency_id' => '9104',
					'name'       => 'MOSKONA UTARA',
				),
			491 =>
				array(
					'id'         => '9104101',
					'regency_id' => '9104',
					'name'       => 'MOSKONA TIMUR',
				),
			492 =>
				array(
					'id'         => '9105110',
					'regency_id' => '9105',
					'name'       => 'WARMARE',
				),
			493 =>
				array(
					'id'         => '9105120',
					'regency_id' => '9105',
					'name'       => 'PRAFI',
				),
			494 =>
				array(
					'id'         => '9105141',
					'regency_id' => '9105',
					'name'       => 'MANOKWARI BARAT',
				),
			495 =>
				array(
					'id'         => '9105142',
					'regency_id' => '9105',
					'name'       => 'MANOKWARI TIMUR',
				),
			496 =>
				array(
					'id'         => '9105143',
					'regency_id' => '9105',
					'name'       => 'MANOKWARI UTARA',
				),
			497 =>
				array(
					'id'         => '9105144',
					'regency_id' => '9105',
					'name'       => 'MANOKWARI SELATAN',
				),
			498 =>
				array(
					'id'         => '9105146',
					'regency_id' => '9105',
					'name'       => 'TANAH RUBU',
				),
			499 =>
				array(
					'id'         => '9105170',
					'regency_id' => '9105',
					'name'       => 'MASNI',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '9105171',
					'regency_id' => '9105',
					'name'       => 'SIDEY',
				),
			1   =>
				array(
					'id'         => '9106010',
					'regency_id' => '9106',
					'name'       => 'INANWATAN',
				),
			2   =>
				array(
					'id'         => '9106011',
					'regency_id' => '9106',
					'name'       => 'METEMANI',
				),
			3   =>
				array(
					'id'         => '9106020',
					'regency_id' => '9106',
					'name'       => 'KOKODA',
				),
			4   =>
				array(
					'id'         => '9106021',
					'regency_id' => '9106',
					'name'       => 'KAIS',
				),
			5   =>
				array(
					'id'         => '9106022',
					'regency_id' => '9106',
					'name'       => 'KOKODA UTARA',
				),
			6   =>
				array(
					'id'         => '9106023',
					'regency_id' => '9106',
					'name'       => 'KAIS DARAT',
				),
			7   =>
				array(
					'id'         => '9106060',
					'regency_id' => '9106',
					'name'       => 'MOSWAREN',
				),
			8   =>
				array(
					'id'         => '9106070',
					'regency_id' => '9106',
					'name'       => 'TEMINABUAN',
				),
			9   =>
				array(
					'id'         => '9106071',
					'regency_id' => '9106',
					'name'       => 'SEREMUK',
				),
			10  =>
				array(
					'id'         => '9106072',
					'regency_id' => '9106',
					'name'       => 'WAYER',
				),
			11  =>
				array(
					'id'         => '9106073',
					'regency_id' => '9106',
					'name'       => 'KONDA',
				),
			12  =>
				array(
					'id'         => '9106074',
					'regency_id' => '9106',
					'name'       => 'SAIFI',
				),
			13  =>
				array(
					'id'         => '9106080',
					'regency_id' => '9106',
					'name'       => 'SAWIAT',
				),
			14  =>
				array(
					'id'         => '9106081',
					'regency_id' => '9106',
					'name'       => 'FOKOUR',
				),
			15  =>
				array(
					'id'         => '9106082',
					'regency_id' => '9106',
					'name'       => 'SALKMA',
				),
			16  =>
				array(
					'id'         => '9107061',
					'regency_id' => '9107',
					'name'       => 'KLASO',
				),
			17  =>
				array(
					'id'         => '9107062',
					'regency_id' => '9107',
					'name'       => 'SAENGKEDUK',
				),
			18  =>
				array(
					'id'         => '9107100',
					'regency_id' => '9107',
					'name'       => 'MAKBON',
				),
			19  =>
				array(
					'id'         => '9107101',
					'regency_id' => '9107',
					'name'       => 'KLAYILI',
				),
			20  =>
				array(
					'id'         => '9107110',
					'regency_id' => '9107',
					'name'       => 'BERAUR',
				),
			21  =>
				array(
					'id'         => '9107111',
					'regency_id' => '9107',
					'name'       => 'KLAMONO',
				),
			22  =>
				array(
					'id'         => '9107112',
					'regency_id' => '9107',
					'name'       => 'KLABOT',
				),
			23  =>
				array(
					'id'         => '9107113',
					'regency_id' => '9107',
					'name'       => 'KLAWAK',
				),
			24  =>
				array(
					'id'         => '9107114',
					'regency_id' => '9107',
					'name'       => 'BAGUN',
				),
			25  =>
				array(
					'id'         => '9107115',
					'regency_id' => '9107',
					'name'       => 'KLASAFET',
				),
			26  =>
				array(
					'id'         => '9107116',
					'regency_id' => '9107',
					'name'       => 'MALABOTOM',
				),
			27  =>
				array(
					'id'         => '9107118',
					'regency_id' => '9107',
					'name'       => 'BOTAIN',
				),
			28  =>
				array(
					'id'         => '9107119',
					'regency_id' => '9107',
					'name'       => 'KONHIR',
				),
			29  =>
				array(
					'id'         => '9107120',
					'regency_id' => '9107',
					'name'       => 'SALAWATI',
				),
			30  =>
				array(
					'id'         => '9107121',
					'regency_id' => '9107',
					'name'       => 'MAYAMUK',
				),
			31  =>
				array(
					'id'         => '9107122',
					'regency_id' => '9107',
					'name'       => 'SALAWATI TIMUR',
				),
			32  =>
				array(
					'id'         => '9107123',
					'regency_id' => '9107',
					'name'       => 'HOBARD',
				),
			33  =>
				array(
					'id'         => '9107124',
					'regency_id' => '9107',
					'name'       => 'BUK',
				),
			34  =>
				array(
					'id'         => '9107130',
					'regency_id' => '9107',
					'name'       => 'SEGET',
				),
			35  =>
				array(
					'id'         => '9107131',
					'regency_id' => '9107',
					'name'       => 'SEGUN',
				),
			36  =>
				array(
					'id'         => '9107132',
					'regency_id' => '9107',
					'name'       => 'SALAWATI SELATAN',
				),
			37  =>
				array(
					'id'         => '9107133',
					'regency_id' => '9107',
					'name'       => 'SALAWATI TENGAH',
				),
			38  =>
				array(
					'id'         => '9107170',
					'regency_id' => '9107',
					'name'       => 'AIMAS',
				),
			39  =>
				array(
					'id'         => '9107171',
					'regency_id' => '9107',
					'name'       => 'MARIAT',
				),
			40  =>
				array(
					'id'         => '9107172',
					'regency_id' => '9107',
					'name'       => 'SORONG',
				),
			41  =>
				array(
					'id'         => '9107180',
					'regency_id' => '9107',
					'name'       => 'SAYOSA',
				),
			42  =>
				array(
					'id'         => '9107181',
					'regency_id' => '9107',
					'name'       => 'MAUDUS',
				),
			43  =>
				array(
					'id'         => '9107182',
					'regency_id' => '9107',
					'name'       => 'WEMAK',
				),
			44  =>
				array(
					'id'         => '9107183',
					'regency_id' => '9107',
					'name'       => 'SAYOSA TIMUR',
				),
			45  =>
				array(
					'id'         => '9107184',
					'regency_id' => '9107',
					'name'       => 'SUNOOK',
				),
			46  =>
				array(
					'id'         => '9108011',
					'regency_id' => '9108',
					'name'       => 'MISOOL SELATAN',
				),
			47  =>
				array(
					'id'         => '9108012',
					'regency_id' => '9108',
					'name'       => 'MISOOL BARAT',
				),
			48  =>
				array(
					'id'         => '9108020',
					'regency_id' => '9108',
					'name'       => 'MISOOL',
				),
			49  =>
				array(
					'id'         => '9108021',
					'regency_id' => '9108',
					'name'       => 'KOFIAU',
				),
			50  =>
				array(
					'id'         => '9108022',
					'regency_id' => '9108',
					'name'       => 'MISOOL TIMUR',
				),
			51  =>
				array(
					'id'         => '9108023',
					'regency_id' => '9108',
					'name'       => 'KEPULAUAN SEMBILAN',
				),
			52  =>
				array(
					'id'         => '9108031',
					'regency_id' => '9108',
					'name'       => 'SALAWATI UTARA',
				),
			53  =>
				array(
					'id'         => '9108033',
					'regency_id' => '9108',
					'name'       => 'SALAWATI TENGAH',
				),
			54  =>
				array(
					'id'         => '9108034',
					'regency_id' => '9108',
					'name'       => 'SALAWATI BARAT',
				),
			55  =>
				array(
					'id'         => '9108035',
					'regency_id' => '9108',
					'name'       => 'BATANTA SELATAN',
				),
			56  =>
				array(
					'id'         => '9108036',
					'regency_id' => '9108',
					'name'       => 'BATANTA UTARA',
				),
			57  =>
				array(
					'id'         => '9108040',
					'regency_id' => '9108',
					'name'       => 'WAIGEO SELATAN',
				),
			58  =>
				array(
					'id'         => '9108041',
					'regency_id' => '9108',
					'name'       => 'TELUK MAYALIBIT',
				),
			59  =>
				array(
					'id'         => '9108042',
					'regency_id' => '9108',
					'name'       => 'MEOS MANSAR',
				),
			60  =>
				array(
					'id'         => '9108043',
					'regency_id' => '9108',
					'name'       => 'KOTA WAISAI',
				),
			61  =>
				array(
					'id'         => '9108044',
					'regency_id' => '9108',
					'name'       => 'TIPLOL MAYALIBIT',
				),
			62  =>
				array(
					'id'         => '9108050',
					'regency_id' => '9108',
					'name'       => 'WAIGEO BARAT',
				),
			63  =>
				array(
					'id'         => '9108051',
					'regency_id' => '9108',
					'name'       => 'WAIGEO BARAT KEPULAUAN',
				),
			64  =>
				array(
					'id'         => '9108060',
					'regency_id' => '9108',
					'name'       => 'WAIGEO UTARA',
				),
			65  =>
				array(
					'id'         => '9108061',
					'regency_id' => '9108',
					'name'       => 'WARWARBOMI',
				),
			66  =>
				array(
					'id'         => '9108062',
					'regency_id' => '9108',
					'name'       => 'SUPNIN',
				),
			67  =>
				array(
					'id'         => '9108070',
					'regency_id' => '9108',
					'name'       => 'KEPULAUAN AYAU',
				),
			68  =>
				array(
					'id'         => '9108071',
					'regency_id' => '9108',
					'name'       => 'AYAU',
				),
			69  =>
				array(
					'id'         => '9108080',
					'regency_id' => '9108',
					'name'       => 'WAIGEO TIMUR',
				),
			70  =>
				array(
					'id'         => '9109010',
					'regency_id' => '9109',
					'name'       => 'FEF',
				),
			71  =>
				array(
					'id'         => '9109011',
					'regency_id' => '9109',
					'name'       => 'SYUJAK',
				),
			72  =>
				array(
					'id'         => '9109012',
					'regency_id' => '9109',
					'name'       => 'ASES',
				),
			73  =>
				array(
					'id'         => '9109013',
					'regency_id' => '9109',
					'name'       => 'TINGGOUW',
				),
			74  =>
				array(
					'id'         => '9109020',
					'regency_id' => '9109',
					'name'       => 'MIYAH',
				),
			75  =>
				array(
					'id'         => '9109021',
					'regency_id' => '9109',
					'name'       => 'MIYAH SELATAN',
				),
			76  =>
				array(
					'id'         => '9109022',
					'regency_id' => '9109',
					'name'       => 'IRERES',
				),
			77  =>
				array(
					'id'         => '9109023',
					'regency_id' => '9109',
					'name'       => 'WILHEM ROUMBOUTS',
				),
			78  =>
				array(
					'id'         => '9109030',
					'regency_id' => '9109',
					'name'       => 'ABUN',
				),
			79  =>
				array(
					'id'         => '9109040',
					'regency_id' => '9109',
					'name'       => 'KWOOR',
				),
			80  =>
				array(
					'id'         => '9109041',
					'regency_id' => '9109',
					'name'       => 'TOBOUW',
				),
			81  =>
				array(
					'id'         => '9109042',
					'regency_id' => '9109',
					'name'       => 'KWESEFO',
				),
			82  =>
				array(
					'id'         => '9109050',
					'regency_id' => '9109',
					'name'       => 'SAUSAPOR',
				),
			83  =>
				array(
					'id'         => '9109051',
					'regency_id' => '9109',
					'name'       => 'BIKAR',
				),
			84  =>
				array(
					'id'         => '9109060',
					'regency_id' => '9109',
					'name'       => 'YEMBUN',
				),
			85  =>
				array(
					'id'         => '9109061',
					'regency_id' => '9109',
					'name'       => 'BAMUSBAMA',
				),
			86  =>
				array(
					'id'         => '9109070',
					'regency_id' => '9109',
					'name'       => 'KEBAR',
				),
			87  =>
				array(
					'id'         => '9109071',
					'regency_id' => '9109',
					'name'       => 'KEBAR TIMUR',
				),
			88  =>
				array(
					'id'         => '9109072',
					'regency_id' => '9109',
					'name'       => 'KEBAR SELATAN',
				),
			89  =>
				array(
					'id'         => '9109073',
					'regency_id' => '9109',
					'name'       => 'MANEKAR',
				),
			90  =>
				array(
					'id'         => '9109080',
					'regency_id' => '9109',
					'name'       => 'SENOPI',
				),
			91  =>
				array(
					'id'         => '9109081',
					'regency_id' => '9109',
					'name'       => 'MAWABUAN',
				),
			92  =>
				array(
					'id'         => '9109090',
					'regency_id' => '9109',
					'name'       => 'AMBERBAKEN',
				),
			93  =>
				array(
					'id'         => '9109091',
					'regency_id' => '9109',
					'name'       => 'MPUR',
				),
			94  =>
				array(
					'id'         => '9109092',
					'regency_id' => '9109',
					'name'       => 'AMBERBAKEN BARAT',
				),
			95  =>
				array(
					'id'         => '9109100',
					'regency_id' => '9109',
					'name'       => 'MUBARNI / ARFU',
				),
			96  =>
				array(
					'id'         => '9109110',
					'regency_id' => '9109',
					'name'       => 'MORAID',
				),
			97  =>
				array(
					'id'         => '9109111',
					'regency_id' => '9109',
					'name'       => 'SELEMKAI',
				),
			98  =>
				array(
					'id'         => '9110010',
					'regency_id' => '9110',
					'name'       => 'AITINYO BARAT/ATHABU',
				),
			99  =>
				array(
					'id'         => '9110011',
					'regency_id' => '9110',
					'name'       => 'AYAMARU SELATAN JAYA',
				),
			100 =>
				array(
					'id'         => '9110020',
					'regency_id' => '9110',
					'name'       => 'AITINYO',
				),
			101 =>
				array(
					'id'         => '9110021',
					'regency_id' => '9110',
					'name'       => 'AITINYO TENGAH',
				),
			102 =>
				array(
					'id'         => '9110030',
					'regency_id' => '9110',
					'name'       => 'AIFAT SELATAN',
				),
			103 =>
				array(
					'id'         => '9110031',
					'regency_id' => '9110',
					'name'       => 'AIFAT TIMUR SELATAN',
				),
			104 =>
				array(
					'id'         => '9110040',
					'regency_id' => '9110',
					'name'       => 'AIFAT',
				),
			105 =>
				array(
					'id'         => '9110050',
					'regency_id' => '9110',
					'name'       => 'AITINYO UTARA',
				),
			106 =>
				array(
					'id'         => '9110051',
					'regency_id' => '9110',
					'name'       => 'AITINYO RAYA',
				),
			107 =>
				array(
					'id'         => '9110060',
					'regency_id' => '9110',
					'name'       => 'AYAMARU TIMUR',
				),
			108 =>
				array(
					'id'         => '9110061',
					'regency_id' => '9110',
					'name'       => 'AYAMARU TIMUR SELATAN',
				),
			109 =>
				array(
					'id'         => '9110070',
					'regency_id' => '9110',
					'name'       => 'AYAMARU',
				),
			110 =>
				array(
					'id'         => '9110071',
					'regency_id' => '9110',
					'name'       => 'AYAMARU SELATAN',
				),
			111 =>
				array(
					'id'         => '9110072',
					'regency_id' => '9110',
					'name'       => 'AYAMARU JAYA',
				),
			112 =>
				array(
					'id'         => '9110073',
					'regency_id' => '9110',
					'name'       => 'AYAMARU TENGAH',
				),
			113 =>
				array(
					'id'         => '9110074',
					'regency_id' => '9110',
					'name'       => 'AYAMARU BARAT',
				),
			114 =>
				array(
					'id'         => '9110080',
					'regency_id' => '9110',
					'name'       => 'AYAMARU UTARA',
				),
			115 =>
				array(
					'id'         => '9110081',
					'regency_id' => '9110',
					'name'       => 'AYAMARU UTARA TIMUR',
				),
			116 =>
				array(
					'id'         => '9110090',
					'regency_id' => '9110',
					'name'       => 'MARE',
				),
			117 =>
				array(
					'id'         => '9110091',
					'regency_id' => '9110',
					'name'       => 'MARE SELATAN',
				),
			118 =>
				array(
					'id'         => '9110100',
					'regency_id' => '9110',
					'name'       => 'AIFAT UTARA',
				),
			119 =>
				array(
					'id'         => '9110110',
					'regency_id' => '9110',
					'name'       => 'AIFAT TIMUR',
				),
			120 =>
				array(
					'id'         => '9110111',
					'regency_id' => '9110',
					'name'       => 'AIFAT TIMUR TENGAH',
				),
			121 =>
				array(
					'id'         => '9110112',
					'regency_id' => '9110',
					'name'       => 'AIFAT TIMUR JAUH',
				),
			122 =>
				array(
					'id'         => '9111010',
					'regency_id' => '9111',
					'name'       => 'TAHOTA',
				),
			123 =>
				array(
					'id'         => '9111020',
					'regency_id' => '9111',
					'name'       => 'DATARAN ISIM',
				),
			124 =>
				array(
					'id'         => '9111030',
					'regency_id' => '9111',
					'name'       => 'NENEI',
				),
			125 =>
				array(
					'id'         => '9111040',
					'regency_id' => '9111',
					'name'       => 'MOMI WAREN',
				),
			126 =>
				array(
					'id'         => '9111050',
					'regency_id' => '9111',
					'name'       => 'RANSIKI',
				),
			127 =>
				array(
					'id'         => '9111060',
					'regency_id' => '9111',
					'name'       => 'ORANSBARI',
				),
			128 =>
				array(
					'id'         => '9112010',
					'regency_id' => '9112',
					'name'       => 'DIDOHU',
				),
			129 =>
				array(
					'id'         => '9112020',
					'regency_id' => '9112',
					'name'       => 'SURUREY',
				),
			130 =>
				array(
					'id'         => '9112030',
					'regency_id' => '9112',
					'name'       => 'ANGGI GIDA',
				),
			131 =>
				array(
					'id'         => '9112040',
					'regency_id' => '9112',
					'name'       => 'MEMBEY',
				),
			132 =>
				array(
					'id'         => '9112050',
					'regency_id' => '9112',
					'name'       => 'ANGGI',
				),
			133 =>
				array(
					'id'         => '9112060',
					'regency_id' => '9112',
					'name'       => 'TAIGE',
				),
			134 =>
				array(
					'id'         => '9112070',
					'regency_id' => '9112',
					'name'       => 'HINGK',
				),
			135 =>
				array(
					'id'         => '9112080',
					'regency_id' => '9112',
					'name'       => 'MENYAMBOUW',
				),
			136 =>
				array(
					'id'         => '9112090',
					'regency_id' => '9112',
					'name'       => 'CATUBOUW',
				),
			137 =>
				array(
					'id'         => '9112100',
					'regency_id' => '9112',
					'name'       => 'TESTEGA',
				),
			138 =>
				array(
					'id'         => '9171010',
					'regency_id' => '9171',
					'name'       => 'SORONG BARAT',
				),
			139 =>
				array(
					'id'         => '9171011',
					'regency_id' => '9171',
					'name'       => 'SORONG KEPULAUAN',
				),
			140 =>
				array(
					'id'         => '9171012',
					'regency_id' => '9171',
					'name'       => 'MALADUM MES',
				),
			141 =>
				array(
					'id'         => '9171020',
					'regency_id' => '9171',
					'name'       => 'SORONG TIMUR',
				),
			142 =>
				array(
					'id'         => '9171021',
					'regency_id' => '9171',
					'name'       => 'SORONG UTARA',
				),
			143 =>
				array(
					'id'         => '9171022',
					'regency_id' => '9171',
					'name'       => 'SORONG',
				),
			144 =>
				array(
					'id'         => '9171023',
					'regency_id' => '9171',
					'name'       => 'SORONG MANOI',
				),
			145 =>
				array(
					'id'         => '9171024',
					'regency_id' => '9171',
					'name'       => 'KLAURUNG',
				),
			146 =>
				array(
					'id'         => '9171025',
					'regency_id' => '9171',
					'name'       => 'MALAIMSIMSA',
				),
			147 =>
				array(
					'id'         => '9171026',
					'regency_id' => '9171',
					'name'       => 'SORONG KOTA',
				),
			148 =>
				array(
					'id'         => '9401010',
					'regency_id' => '9401',
					'name'       => 'KIMAAM',
				),
			149 =>
				array(
					'id'         => '9401011',
					'regency_id' => '9401',
					'name'       => 'WAAN',
				),
			150 =>
				array(
					'id'         => '9401012',
					'regency_id' => '9401',
					'name'       => 'TABONJI',
				),
			151 =>
				array(
					'id'         => '9401013',
					'regency_id' => '9401',
					'name'       => 'ILWAYAB',
				),
			152 =>
				array(
					'id'         => '9401020',
					'regency_id' => '9401',
					'name'       => 'OKABA',
				),
			153 =>
				array(
					'id'         => '9401021',
					'regency_id' => '9401',
					'name'       => 'TUBANG',
				),
			154 =>
				array(
					'id'         => '9401022',
					'regency_id' => '9401',
					'name'       => 'NGGUTI',
				),
			155 =>
				array(
					'id'         => '9401023',
					'regency_id' => '9401',
					'name'       => 'KAPTEL',
				),
			156 =>
				array(
					'id'         => '9401030',
					'regency_id' => '9401',
					'name'       => 'KURIK',
				),
			157 =>
				array(
					'id'         => '9401031',
					'regency_id' => '9401',
					'name'       => 'MALIND',
				),
			158 =>
				array(
					'id'         => '9401032',
					'regency_id' => '9401',
					'name'       => 'ANIMHA',
				),
			159 =>
				array(
					'id'         => '9401040',
					'regency_id' => '9401',
					'name'       => 'MERAUKE',
				),
			160 =>
				array(
					'id'         => '9401041',
					'regency_id' => '9401',
					'name'       => 'SEMANGGA',
				),
			161 =>
				array(
					'id'         => '9401042',
					'regency_id' => '9401',
					'name'       => 'TANAH MIRING',
				),
			162 =>
				array(
					'id'         => '9401043',
					'regency_id' => '9401',
					'name'       => 'JAGEBOB',
				),
			163 =>
				array(
					'id'         => '9401044',
					'regency_id' => '9401',
					'name'       => 'SOTA',
				),
			164 =>
				array(
					'id'         => '9401045',
					'regency_id' => '9401',
					'name'       => 'NAUKENJERAI',
				),
			165 =>
				array(
					'id'         => '9401050',
					'regency_id' => '9401',
					'name'       => 'MUTING',
				),
			166 =>
				array(
					'id'         => '9401051',
					'regency_id' => '9401',
					'name'       => 'ELIGOBEL',
				),
			167 =>
				array(
					'id'         => '9401052',
					'regency_id' => '9401',
					'name'       => 'ULILIN',
				),
			168 =>
				array(
					'id'         => '9402110',
					'regency_id' => '9402',
					'name'       => 'WAMENA',
				),
			169 =>
				array(
					'id'         => '9402111',
					'regency_id' => '9402',
					'name'       => 'ASOLOKOBAL',
				),
			170 =>
				array(
					'id'         => '9402112',
					'regency_id' => '9402',
					'name'       => 'WALELAGAMA',
				),
			171 =>
				array(
					'id'         => '9402113',
					'regency_id' => '9402',
					'name'       => 'TRIKORA',
				),
			172 =>
				array(
					'id'         => '9402114',
					'regency_id' => '9402',
					'name'       => 'NAPUA',
				),
			173 =>
				array(
					'id'         => '9402115',
					'regency_id' => '9402',
					'name'       => 'WALAIK',
				),
			174 =>
				array(
					'id'         => '9402116',
					'regency_id' => '9402',
					'name'       => 'WOUMA',
				),
			175 =>
				array(
					'id'         => '9402117',
					'regency_id' => '9402',
					'name'       => 'WALESI',
				),
			176 =>
				array(
					'id'         => '9402118',
					'regency_id' => '9402',
					'name'       => 'ASOTIPO',
				),
			177 =>
				array(
					'id'         => '9402119',
					'regency_id' => '9402',
					'name'       => 'MAIMA',
				),
			178 =>
				array(
					'id'         => '9402120',
					'regency_id' => '9402',
					'name'       => 'HUBIKOSI',
				),
			179 =>
				array(
					'id'         => '9402121',
					'regency_id' => '9402',
					'name'       => 'PELEBAGA',
				),
			180 =>
				array(
					'id'         => '9402122',
					'regency_id' => '9402',
					'name'       => 'IBELE',
				),
			181 =>
				array(
					'id'         => '9402123',
					'regency_id' => '9402',
					'name'       => 'TAILAREK',
				),
			182 =>
				array(
					'id'         => '9402124',
					'regency_id' => '9402',
					'name'       => 'HUBIKIAK',
				),
			183 =>
				array(
					'id'         => '9402180',
					'regency_id' => '9402',
					'name'       => 'ASOLOGAIMA',
				),
			184 =>
				array(
					'id'         => '9402181',
					'regency_id' => '9402',
					'name'       => 'MUSATFAK',
				),
			185 =>
				array(
					'id'         => '9402182',
					'regency_id' => '9402',
					'name'       => 'SILO KARNO DOGA',
				),
			186 =>
				array(
					'id'         => '9402183',
					'regency_id' => '9402',
					'name'       => 'PYRAMID',
				),
			187 =>
				array(
					'id'         => '9402184',
					'regency_id' => '9402',
					'name'       => 'MULIAMA',
				),
			188 =>
				array(
					'id'         => '9402185',
					'regency_id' => '9402',
					'name'       => 'WAME',
				),
			189 =>
				array(
					'id'         => '9402190',
					'regency_id' => '9402',
					'name'       => 'KURULU',
				),
			190 =>
				array(
					'id'         => '9402191',
					'regency_id' => '9402',
					'name'       => 'USILIMO',
				),
			191 =>
				array(
					'id'         => '9402192',
					'regency_id' => '9402',
					'name'       => 'WITA WAYA',
				),
			192 =>
				array(
					'id'         => '9402193',
					'regency_id' => '9402',
					'name'       => 'LIBAREK',
				),
			193 =>
				array(
					'id'         => '9402194',
					'regency_id' => '9402',
					'name'       => 'WADANGKU',
				),
			194 =>
				array(
					'id'         => '9402195',
					'regency_id' => '9402',
					'name'       => 'PISUGI',
				),
			195 =>
				array(
					'id'         => '9402220',
					'regency_id' => '9402',
					'name'       => 'BOLAKME',
				),
			196 =>
				array(
					'id'         => '9402221',
					'regency_id' => '9402',
					'name'       => 'WOLLO',
				),
			197 =>
				array(
					'id'         => '9402222',
					'regency_id' => '9402',
					'name'       => 'YALENGGA',
				),
			198 =>
				array(
					'id'         => '9402223',
					'regency_id' => '9402',
					'name'       => 'TAGIME',
				),
			199 =>
				array(
					'id'         => '9402224',
					'regency_id' => '9402',
					'name'       => 'MOLAGALOME',
				),
			200 =>
				array(
					'id'         => '9402225',
					'regency_id' => '9402',
					'name'       => 'TAGINERI',
				),
			201 =>
				array(
					'id'         => '9402226',
					'regency_id' => '9402',
					'name'       => 'BUGI',
				),
			202 =>
				array(
					'id'         => '9402227',
					'regency_id' => '9402',
					'name'       => 'BPIRI',
				),
			203 =>
				array(
					'id'         => '9402228',
					'regency_id' => '9402',
					'name'       => 'KORAGI',
				),
			204 =>
				array(
					'id'         => '9402611',
					'regency_id' => '9402',
					'name'       => 'ITLAY HASIGE',
				),
			205 =>
				array(
					'id'         => '9402612',
					'regency_id' => '9402',
					'name'       => 'SIEPKOSI',
				),
			206 =>
				array(
					'id'         => '9402614',
					'regency_id' => '9402',
					'name'       => 'POPUGOBA',
				),
			207 =>
				array(
					'id'         => '9403080',
					'regency_id' => '9403',
					'name'       => 'KAUREH',
				),
			208 =>
				array(
					'id'         => '9403081',
					'regency_id' => '9403',
					'name'       => 'AIRU',
				),
			209 =>
				array(
					'id'         => '9403082',
					'regency_id' => '9403',
					'name'       => 'YAPSI',
				),
			210 =>
				array(
					'id'         => '9403140',
					'regency_id' => '9403',
					'name'       => 'KEMTUK',
				),
			211 =>
				array(
					'id'         => '9403150',
					'regency_id' => '9403',
					'name'       => 'KEMTUK GRESI',
				),
			212 =>
				array(
					'id'         => '9403151',
					'regency_id' => '9403',
					'name'       => 'GRESI SELATAN',
				),
			213 =>
				array(
					'id'         => '9403160',
					'regency_id' => '9403',
					'name'       => 'NIMBORAN',
				),
			214 =>
				array(
					'id'         => '9403161',
					'regency_id' => '9403',
					'name'       => 'NIMBORAN TIMUR / NAMBLONG',
				),
			215 =>
				array(
					'id'         => '9403170',
					'regency_id' => '9403',
					'name'       => 'NIMBOKRANG',
				),
			216 =>
				array(
					'id'         => '9403180',
					'regency_id' => '9403',
					'name'       => 'UNURUM GUAY',
				),
			217 =>
				array(
					'id'         => '9403200',
					'regency_id' => '9403',
					'name'       => 'DEMTA',
				),
			218 =>
				array(
					'id'         => '9403201',
					'regency_id' => '9403',
					'name'       => 'YOKARI',
				),
			219 =>
				array(
					'id'         => '9403210',
					'regency_id' => '9403',
					'name'       => 'DEPAPRE',
				),
			220 =>
				array(
					'id'         => '9403211',
					'regency_id' => '9403',
					'name'       => 'RAVENIRARA',
				),
			221 =>
				array(
					'id'         => '9403220',
					'regency_id' => '9403',
					'name'       => 'SENTANI BARAT',
				),
			222 =>
				array(
					'id'         => '9403221',
					'regency_id' => '9403',
					'name'       => 'WAIBU',
				),
			223 =>
				array(
					'id'         => '9403230',
					'regency_id' => '9403',
					'name'       => 'SENTANI',
				),
			224 =>
				array(
					'id'         => '9403231',
					'regency_id' => '9403',
					'name'       => 'EBUNGFAU',
				),
			225 =>
				array(
					'id'         => '9403240',
					'regency_id' => '9403',
					'name'       => 'SENTANI TIMUR',
				),
			226 =>
				array(
					'id'         => '9404050',
					'regency_id' => '9404',
					'name'       => 'UWAPA',
				),
			227 =>
				array(
					'id'         => '9404051',
					'regency_id' => '9404',
					'name'       => 'MENOU',
				),
			228 =>
				array(
					'id'         => '9404052',
					'regency_id' => '9404',
					'name'       => 'DIPA',
				),
			229 =>
				array(
					'id'         => '9404060',
					'regency_id' => '9404',
					'name'       => 'YAUR',
				),
			230 =>
				array(
					'id'         => '9404061',
					'regency_id' => '9404',
					'name'       => 'TELUK UMAR',
				),
			231 =>
				array(
					'id'         => '9404070',
					'regency_id' => '9404',
					'name'       => 'WANGGAR',
				),
			232 =>
				array(
					'id'         => '9404071',
					'regency_id' => '9404',
					'name'       => 'NABIRE BARAT',
				),
			233 =>
				array(
					'id'         => '9404080',
					'regency_id' => '9404',
					'name'       => 'NABIRE',
				),
			234 =>
				array(
					'id'         => '9404081',
					'regency_id' => '9404',
					'name'       => 'TELUK KIMI',
				),
			235 =>
				array(
					'id'         => '9404090',
					'regency_id' => '9404',
					'name'       => 'NAPAN',
				),
			236 =>
				array(
					'id'         => '9404091',
					'regency_id' => '9404',
					'name'       => 'MAKIMI',
				),
			237 =>
				array(
					'id'         => '9404092',
					'regency_id' => '9404',
					'name'       => 'WAPOGA',
				),
			238 =>
				array(
					'id'         => '9404093',
					'regency_id' => '9404',
					'name'       => 'KEPULAUAN MOORA',
				),
			239 =>
				array(
					'id'         => '9404100',
					'regency_id' => '9404',
					'name'       => 'SIRIWO',
				),
			240 =>
				array(
					'id'         => '9404110',
					'regency_id' => '9404',
					'name'       => 'YARO',
				),
			241 =>
				array(
					'id'         => '9408040',
					'regency_id' => '9408',
					'name'       => 'YAPEN TIMUR',
				),
			242 =>
				array(
					'id'         => '9408041',
					'regency_id' => '9408',
					'name'       => 'PANTURA YAPEN',
				),
			243 =>
				array(
					'id'         => '9408042',
					'regency_id' => '9408',
					'name'       => 'TELUK AMPIMOI',
				),
			244 =>
				array(
					'id'         => '9408043',
					'regency_id' => '9408',
					'name'       => 'RAIMBAWI',
				),
			245 =>
				array(
					'id'         => '9408044',
					'regency_id' => '9408',
					'name'       => 'PULAU KURUDU',
				),
			246 =>
				array(
					'id'         => '9408050',
					'regency_id' => '9408',
					'name'       => 'ANGKAISERA',
				),
			247 =>
				array(
					'id'         => '9408051',
					'regency_id' => '9408',
					'name'       => 'KEP. AMBAI',
				),
			248 =>
				array(
					'id'         => '9408052',
					'regency_id' => '9408',
					'name'       => 'YAWAKUKAT',
				),
			249 =>
				array(
					'id'         => '9408060',
					'regency_id' => '9408',
					'name'       => 'YAPEN SELATAN',
				),
			250 =>
				array(
					'id'         => '9408061',
					'regency_id' => '9408',
					'name'       => 'KOSIWO',
				),
			251 =>
				array(
					'id'         => '9408062',
					'regency_id' => '9408',
					'name'       => 'ANATAUREI',
				),
			252 =>
				array(
					'id'         => '9408070',
					'regency_id' => '9408',
					'name'       => 'YAPEN BARAT',
				),
			253 =>
				array(
					'id'         => '9408071',
					'regency_id' => '9408',
					'name'       => 'WONAWA',
				),
			254 =>
				array(
					'id'         => '9408072',
					'regency_id' => '9408',
					'name'       => 'PULAU YERUI',
				),
			255 =>
				array(
					'id'         => '9408080',
					'regency_id' => '9408',
					'name'       => 'POOM',
				),
			256 =>
				array(
					'id'         => '9408081',
					'regency_id' => '9408',
					'name'       => 'WINDESI',
				),
			257 =>
				array(
					'id'         => '9409010',
					'regency_id' => '9409',
					'name'       => 'NUMFOR BARAT',
				),
			258 =>
				array(
					'id'         => '9409011',
					'regency_id' => '9409',
					'name'       => 'ORKERI',
				),
			259 =>
				array(
					'id'         => '9409020',
					'regency_id' => '9409',
					'name'       => 'NUMFOR TIMUR',
				),
			260 =>
				array(
					'id'         => '9409021',
					'regency_id' => '9409',
					'name'       => 'BRUYADORI',
				),
			261 =>
				array(
					'id'         => '9409022',
					'regency_id' => '9409',
					'name'       => 'POIRU',
				),
			262 =>
				array(
					'id'         => '9409030',
					'regency_id' => '9409',
					'name'       => 'PADAIDO',
				),
			263 =>
				array(
					'id'         => '9409031',
					'regency_id' => '9409',
					'name'       => 'AIMANDO PADAIDO',
				),
			264 =>
				array(
					'id'         => '9409040',
					'regency_id' => '9409',
					'name'       => 'BIAK TIMUR',
				),
			265 =>
				array(
					'id'         => '9409041',
					'regency_id' => '9409',
					'name'       => 'ORIDEK',
				),
			266 =>
				array(
					'id'         => '9409050',
					'regency_id' => '9409',
					'name'       => 'BIAK KOTA',
				),
			267 =>
				array(
					'id'         => '9409060',
					'regency_id' => '9409',
					'name'       => 'SAMOFA',
				),
			268 =>
				array(
					'id'         => '9409070',
					'regency_id' => '9409',
					'name'       => 'YENDIDORI',
				),
			269 =>
				array(
					'id'         => '9409080',
					'regency_id' => '9409',
					'name'       => 'BIAK UTARA',
				),
			270 =>
				array(
					'id'         => '9409081',
					'regency_id' => '9409',
					'name'       => 'ANDEY',
				),
			271 =>
				array(
					'id'         => '9409090',
					'regency_id' => '9409',
					'name'       => 'WARSA',
				),
			272 =>
				array(
					'id'         => '9409091',
					'regency_id' => '9409',
					'name'       => 'YAWOSI',
				),
			273 =>
				array(
					'id'         => '9409092',
					'regency_id' => '9409',
					'name'       => 'BONDIFUAR',
				),
			274 =>
				array(
					'id'         => '9409100',
					'regency_id' => '9409',
					'name'       => 'BIAK BARAT',
				),
			275 =>
				array(
					'id'         => '9409101',
					'regency_id' => '9409',
					'name'       => 'SWANDIWE',
				),
			276 =>
				array(
					'id'         => '9410030',
					'regency_id' => '9410',
					'name'       => 'PANIAI TIMUR',
				),
			277 =>
				array(
					'id'         => '9410031',
					'regency_id' => '9410',
					'name'       => 'YATAMO',
				),
			278 =>
				array(
					'id'         => '9410032',
					'regency_id' => '9410',
					'name'       => 'KEBO',
				),
			279 =>
				array(
					'id'         => '9410033',
					'regency_id' => '9410',
					'name'       => 'PUGO DAGI',
				),
			280 =>
				array(
					'id'         => '9410034',
					'regency_id' => '9410',
					'name'       => 'WEGE MUKA',
				),
			281 =>
				array(
					'id'         => '9410035',
					'regency_id' => '9410',
					'name'       => 'WEGEE BINO',
				),
			282 =>
				array(
					'id'         => '9410036',
					'regency_id' => '9410',
					'name'       => 'YAGAI',
				),
			283 =>
				array(
					'id'         => '9410040',
					'regency_id' => '9410',
					'name'       => 'BIBIDA',
				),
			284 =>
				array(
					'id'         => '9410041',
					'regency_id' => '9410',
					'name'       => 'DUMADAMA',
				),
			285 =>
				array(
					'id'         => '9410070',
					'regency_id' => '9410',
					'name'       => 'ARADIDE',
				),
			286 =>
				array(
					'id'         => '9410071',
					'regency_id' => '9410',
					'name'       => 'EKADIDE',
				),
			287 =>
				array(
					'id'         => '9410072',
					'regency_id' => '9410',
					'name'       => 'AWEIDA',
				),
			288 =>
				array(
					'id'         => '9410073',
					'regency_id' => '9410',
					'name'       => 'FAJAR TIMUR',
				),
			289 =>
				array(
					'id'         => '9410074',
					'regency_id' => '9410',
					'name'       => 'TOPIYAI',
				),
			290 =>
				array(
					'id'         => '9410080',
					'regency_id' => '9410',
					'name'       => 'PANIAI BARAT',
				),
			291 =>
				array(
					'id'         => '9410081',
					'regency_id' => '9410',
					'name'       => 'SIRIWO',
				),
			292 =>
				array(
					'id'         => '9410082',
					'regency_id' => '9410',
					'name'       => 'MUYE',
				),
			293 =>
				array(
					'id'         => '9410083',
					'regency_id' => '9410',
					'name'       => 'NAKAMA',
				),
			294 =>
				array(
					'id'         => '9410084',
					'regency_id' => '9410',
					'name'       => 'TELUK DEYA',
				),
			295 =>
				array(
					'id'         => '9410090',
					'regency_id' => '9410',
					'name'       => 'BOGOBAIDA',
				),
			296 =>
				array(
					'id'         => '9411040',
					'regency_id' => '9411',
					'name'       => 'FAWI',
				),
			297 =>
				array(
					'id'         => '9411041',
					'regency_id' => '9411',
					'name'       => 'DAGAI',
				),
			298 =>
				array(
					'id'         => '9411042',
					'regency_id' => '9411',
					'name'       => 'KIYAGE',
				),
			299 =>
				array(
					'id'         => '9411050',
					'regency_id' => '9411',
					'name'       => 'MULIA',
				),
			300 =>
				array(
					'id'         => '9411053',
					'regency_id' => '9411',
					'name'       => 'YAMBI',
				),
			301 =>
				array(
					'id'         => '9411054',
					'regency_id' => '9411',
					'name'       => 'ILAMBURAWI',
				),
			302 =>
				array(
					'id'         => '9411055',
					'regency_id' => '9411',
					'name'       => 'MUARA',
				),
			303 =>
				array(
					'id'         => '9411056',
					'regency_id' => '9411',
					'name'       => 'PAGALEME',
				),
			304 =>
				array(
					'id'         => '9411057',
					'regency_id' => '9411',
					'name'       => 'GURAGE',
				),
			305 =>
				array(
					'id'         => '9411058',
					'regency_id' => '9411',
					'name'       => 'IRIMULI',
				),
			306 =>
				array(
					'id'         => '9411060',
					'regency_id' => '9411',
					'name'       => 'ILU',
				),
			307 =>
				array(
					'id'         => '9411061',
					'regency_id' => '9411',
					'name'       => 'TORERE',
				),
			308 =>
				array(
					'id'         => '9411063',
					'regency_id' => '9411',
					'name'       => 'YAMONERI',
				),
			309 =>
				array(
					'id'         => '9411064',
					'regency_id' => '9411',
					'name'       => 'WAEGI',
				),
			310 =>
				array(
					'id'         => '9411065',
					'regency_id' => '9411',
					'name'       => 'NUME',
				),
			311 =>
				array(
					'id'         => '9411066',
					'regency_id' => '9411',
					'name'       => 'NIOGA',
				),
			312 =>
				array(
					'id'         => '9411067',
					'regency_id' => '9411',
					'name'       => 'GUBUME',
				),
			313 =>
				array(
					'id'         => '9411068',
					'regency_id' => '9411',
					'name'       => 'TAGANOMBAK',
				),
			314 =>
				array(
					'id'         => '9411070',
					'regency_id' => '9411',
					'name'       => 'TINGGINAMBUT',
				),
			315 =>
				array(
					'id'         => '9411071',
					'regency_id' => '9411',
					'name'       => 'KALOME',
				),
			316 =>
				array(
					'id'         => '9411072',
					'regency_id' => '9411',
					'name'       => 'WANWI',
				),
			317 =>
				array(
					'id'         => '9411080',
					'regency_id' => '9411',
					'name'       => 'MEWOLUK',
				),
			318 =>
				array(
					'id'         => '9411081',
					'regency_id' => '9411',
					'name'       => 'LUMO',
				),
			319 =>
				array(
					'id'         => '9411082',
					'regency_id' => '9411',
					'name'       => 'MOLANIKIME',
				),
			320 =>
				array(
					'id'         => '9411090',
					'regency_id' => '9411',
					'name'       => 'YAMO',
				),
			321 =>
				array(
					'id'         => '9411091',
					'regency_id' => '9411',
					'name'       => 'DOKOME',
				),
			322 =>
				array(
					'id'         => '9412010',
					'regency_id' => '9412',
					'name'       => 'MIMIKA BARAT',
				),
			323 =>
				array(
					'id'         => '9412011',
					'regency_id' => '9412',
					'name'       => 'MIMIKA BARAT JAUH',
				),
			324 =>
				array(
					'id'         => '9412012',
					'regency_id' => '9412',
					'name'       => 'MIMIKA BARAT TENGAH',
				),
			325 =>
				array(
					'id'         => '9412013',
					'regency_id' => '9412',
					'name'       => 'AMAR',
				),
			326 =>
				array(
					'id'         => '9412020',
					'regency_id' => '9412',
					'name'       => 'MIMIKA TIMUR',
				),
			327 =>
				array(
					'id'         => '9412021',
					'regency_id' => '9412',
					'name'       => 'MIMIKA TENGAH',
				),
			328 =>
				array(
					'id'         => '9412022',
					'regency_id' => '9412',
					'name'       => 'MIMIKA TIMUR JAUH',
				),
			329 =>
				array(
					'id'         => '9412030',
					'regency_id' => '9412',
					'name'       => 'MIMIKA BARU',
				),
			330 =>
				array(
					'id'         => '9412031',
					'regency_id' => '9412',
					'name'       => 'KUALA KENCANA',
				),
			331 =>
				array(
					'id'         => '9412032',
					'regency_id' => '9412',
					'name'       => 'TEMBAGAPURA',
				),
			332 =>
				array(
					'id'         => '9412033',
					'regency_id' => '9412',
					'name'       => 'WANIA',
				),
			333 =>
				array(
					'id'         => '9412034',
					'regency_id' => '9412',
					'name'       => 'IWAKA',
				),
			334 =>
				array(
					'id'         => '9412035',
					'regency_id' => '9412',
					'name'       => 'KWAMKI NARAMA',
				),
			335 =>
				array(
					'id'         => '9412040',
					'regency_id' => '9412',
					'name'       => 'AGIMUGA',
				),
			336 =>
				array(
					'id'         => '9412041',
					'regency_id' => '9412',
					'name'       => 'JILA',
				),
			337 =>
				array(
					'id'         => '9412042',
					'regency_id' => '9412',
					'name'       => 'JITA',
				),
			338 =>
				array(
					'id'         => '9412043',
					'regency_id' => '9412',
					'name'       => 'ALAMA',
				),
			339 =>
				array(
					'id'         => '9412044',
					'regency_id' => '9412',
					'name'       => 'HOYA',
				),
			340 =>
				array(
					'id'         => '9413010',
					'regency_id' => '9413',
					'name'       => 'JAIR',
				),
			341 =>
				array(
					'id'         => '9413011',
					'regency_id' => '9413',
					'name'       => 'SUBUR',
				),
			342 =>
				array(
					'id'         => '9413013',
					'regency_id' => '9413',
					'name'       => 'KIA',
				),
			343 =>
				array(
					'id'         => '9413020',
					'regency_id' => '9413',
					'name'       => 'MINDIPTANA',
				),
			344 =>
				array(
					'id'         => '9413021',
					'regency_id' => '9413',
					'name'       => 'INIYANDIT',
				),
			345 =>
				array(
					'id'         => '9413022',
					'regency_id' => '9413',
					'name'       => 'KOMBUT',
				),
			346 =>
				array(
					'id'         => '9413023',
					'regency_id' => '9413',
					'name'       => 'SESNUK',
				),
			347 =>
				array(
					'id'         => '9413030',
					'regency_id' => '9413',
					'name'       => 'MANDOBO',
				),
			348 =>
				array(
					'id'         => '9413031',
					'regency_id' => '9413',
					'name'       => 'FOFI',
				),
			349 =>
				array(
					'id'         => '9413032',
					'regency_id' => '9413',
					'name'       => 'ARIMOP',
				),
			350 =>
				array(
					'id'         => '9413040',
					'regency_id' => '9413',
					'name'       => 'KOUH',
				),
			351 =>
				array(
					'id'         => '9413041',
					'regency_id' => '9413',
					'name'       => 'BOMAKIA',
				),
			352 =>
				array(
					'id'         => '9413042',
					'regency_id' => '9413',
					'name'       => 'FIRIWAGE',
				),
			353 =>
				array(
					'id'         => '9413043',
					'regency_id' => '9413',
					'name'       => 'MANGGELUM',
				),
			354 =>
				array(
					'id'         => '9413044',
					'regency_id' => '9413',
					'name'       => 'YANIRUMA',
				),
			355 =>
				array(
					'id'         => '9413045',
					'regency_id' => '9413',
					'name'       => 'KAWAGIT',
				),
			356 =>
				array(
					'id'         => '9413046',
					'regency_id' => '9413',
					'name'       => 'KOMBAY',
				),
			357 =>
				array(
					'id'         => '9413050',
					'regency_id' => '9413',
					'name'       => 'WAROPKO',
				),
			358 =>
				array(
					'id'         => '9413051',
					'regency_id' => '9413',
					'name'       => 'AMBATKWI',
				),
			359 =>
				array(
					'id'         => '9413052',
					'regency_id' => '9413',
					'name'       => 'NINATI',
				),
			360 =>
				array(
					'id'         => '9414010',
					'regency_id' => '9414',
					'name'       => 'NAMBIOMAN BAPAI',
				),
			361 =>
				array(
					'id'         => '9414011',
					'regency_id' => '9414',
					'name'       => 'MINYAMUR',
				),
			362 =>
				array(
					'id'         => '9414020',
					'regency_id' => '9414',
					'name'       => 'EDERA',
				),
			363 =>
				array(
					'id'         => '9414021',
					'regency_id' => '9414',
					'name'       => 'VENAHA',
				),
			364 =>
				array(
					'id'         => '9414022',
					'regency_id' => '9414',
					'name'       => 'SYAHCAME',
				),
			365 =>
				array(
					'id'         => '9414023',
					'regency_id' => '9414',
					'name'       => 'BAMGI',
				),
			366 =>
				array(
					'id'         => '9414024',
					'regency_id' => '9414',
					'name'       => 'YAKOMI',
				),
			367 =>
				array(
					'id'         => '9414030',
					'regency_id' => '9414',
					'name'       => 'OBAA',
				),
			368 =>
				array(
					'id'         => '9414031',
					'regency_id' => '9414',
					'name'       => 'PASSUE',
				),
			369 =>
				array(
					'id'         => '9414040',
					'regency_id' => '9414',
					'name'       => 'HAJU',
				),
			370 =>
				array(
					'id'         => '9414050',
					'regency_id' => '9414',
					'name'       => 'ASSUE',
				),
			371 =>
				array(
					'id'         => '9414060',
					'regency_id' => '9414',
					'name'       => 'CITAKMITAK',
				),
			372 =>
				array(
					'id'         => '9414061',
					'regency_id' => '9414',
					'name'       => 'KAIBAR',
				),
			373 =>
				array(
					'id'         => '9414062',
					'regency_id' => '9414',
					'name'       => 'PASSUE BAWAH',
				),
			374 =>
				array(
					'id'         => '9414063',
					'regency_id' => '9414',
					'name'       => 'TI-ZAIN',
				),
			375 =>
				array(
					'id'         => '9415010',
					'regency_id' => '9415',
					'name'       => 'PANTAI KASUARI',
				),
			376 =>
				array(
					'id'         => '9415011',
					'regency_id' => '9415',
					'name'       => 'KOPAY',
				),
			377 =>
				array(
					'id'         => '9415012',
					'regency_id' => '9415',
					'name'       => 'DER KOUMUR',
				),
			378 =>
				array(
					'id'         => '9415013',
					'regency_id' => '9415',
					'name'       => 'SAFAN',
				),
			379 =>
				array(
					'id'         => '9415014',
					'regency_id' => '9415',
					'name'       => 'AWYU',
				),
			380 =>
				array(
					'id'         => '9415020',
					'regency_id' => '9415',
					'name'       => 'FAYIT',
				),
			381 =>
				array(
					'id'         => '9415021',
					'regency_id' => '9415',
					'name'       => 'ASWI',
				),
			382 =>
				array(
					'id'         => '9415030',
					'regency_id' => '9415',
					'name'       => 'ATSY',
				),
			383 =>
				array(
					'id'         => '9415031',
					'regency_id' => '9415',
					'name'       => 'SIRETS',
				),
			384 =>
				array(
					'id'         => '9415032',
					'regency_id' => '9415',
					'name'       => 'AYIP',
				),
			385 =>
				array(
					'id'         => '9415033',
					'regency_id' => '9415',
					'name'       => 'BECTBAMU',
				),
			386 =>
				array(
					'id'         => '9415040',
					'regency_id' => '9415',
					'name'       => 'SUATOR',
				),
			387 =>
				array(
					'id'         => '9415041',
					'regency_id' => '9415',
					'name'       => 'KOLF BRAZA',
				),
			388 =>
				array(
					'id'         => '9415042',
					'regency_id' => '9415',
					'name'       => 'JOUTU',
				),
			389 =>
				array(
					'id'         => '9415043',
					'regency_id' => '9415',
					'name'       => 'KOROWAY BULUANOP',
				),
			390 =>
				array(
					'id'         => '9415050',
					'regency_id' => '9415',
					'name'       => 'AKAT',
				),
			391 =>
				array(
					'id'         => '9415051',
					'regency_id' => '9415',
					'name'       => 'JETSY',
				),
			392 =>
				array(
					'id'         => '9415060',
					'regency_id' => '9415',
					'name'       => 'AGATS',
				),
			393 =>
				array(
					'id'         => '9415070',
					'regency_id' => '9415',
					'name'       => 'SAWA ERMA',
				),
			394 =>
				array(
					'id'         => '9415071',
					'regency_id' => '9415',
					'name'       => 'SURU-SURU',
				),
			395 =>
				array(
					'id'         => '9415072',
					'regency_id' => '9415',
					'name'       => 'UNIR SIRAU',
				),
			396 =>
				array(
					'id'         => '9415073',
					'regency_id' => '9415',
					'name'       => 'JOERAT',
				),
			397 =>
				array(
					'id'         => '9415074',
					'regency_id' => '9415',
					'name'       => 'PULAU TIGA',
				),
			398 =>
				array(
					'id'         => '9416010',
					'regency_id' => '9416',
					'name'       => 'KURIMA',
				),
			399 =>
				array(
					'id'         => '9416011',
					'regency_id' => '9416',
					'name'       => 'MUSAIK',
				),
			400 =>
				array(
					'id'         => '9416013',
					'regency_id' => '9416',
					'name'       => 'DEKAI',
				),
			401 =>
				array(
					'id'         => '9416014',
					'regency_id' => '9416',
					'name'       => 'OBIO',
				),
			402 =>
				array(
					'id'         => '9416015',
					'regency_id' => '9416',
					'name'       => 'PASEMA',
				),
			403 =>
				array(
					'id'         => '9416016',
					'regency_id' => '9416',
					'name'       => 'AMUMA',
				),
			404 =>
				array(
					'id'         => '9416017',
					'regency_id' => '9416',
					'name'       => 'SURU-SURU',
				),
			405 =>
				array(
					'id'         => '9416018',
					'regency_id' => '9416',
					'name'       => 'WUSAMA',
				),
			406 =>
				array(
					'id'         => '9416019',
					'regency_id' => '9416',
					'name'       => 'SILIMO',
				),
			407 =>
				array(
					'id'         => '9416020',
					'regency_id' => '9416',
					'name'       => 'NINIA',
				),
			408 =>
				array(
					'id'         => '9416021',
					'regency_id' => '9416',
					'name'       => 'HOLUWON',
				),
			409 =>
				array(
					'id'         => '9416022',
					'regency_id' => '9416',
					'name'       => 'LOLAT',
				),
			410 =>
				array(
					'id'         => '9416023',
					'regency_id' => '9416',
					'name'       => 'LANGDA',
				),
			411 =>
				array(
					'id'         => '9416024',
					'regency_id' => '9416',
					'name'       => 'BOMELA',
				),
			412 =>
				array(
					'id'         => '9416025',
					'regency_id' => '9416',
					'name'       => 'SUNTAMON',
				),
			413 =>
				array(
					'id'         => '9416026',
					'regency_id' => '9416',
					'name'       => 'SOBAHAM',
				),
			414 =>
				array(
					'id'         => '9416027',
					'regency_id' => '9416',
					'name'       => 'KORUPUN',
				),
			415 =>
				array(
					'id'         => '9416028',
					'regency_id' => '9416',
					'name'       => 'SELA',
				),
			416 =>
				array(
					'id'         => '9416029',
					'regency_id' => '9416',
					'name'       => 'KWELAMDUA',
				),
			417 =>
				array(
					'id'         => '9416030',
					'regency_id' => '9416',
					'name'       => 'ANGGRUK',
				),
			418 =>
				array(
					'id'         => '9416031',
					'regency_id' => '9416',
					'name'       => 'PANGGEMA',
				),
			419 =>
				array(
					'id'         => '9416032',
					'regency_id' => '9416',
					'name'       => 'WALMA',
				),
			420 =>
				array(
					'id'         => '9416033',
					'regency_id' => '9416',
					'name'       => 'KOSAREK',
				),
			421 =>
				array(
					'id'         => '9416034',
					'regency_id' => '9416',
					'name'       => 'UBAHAK',
				),
			422 =>
				array(
					'id'         => '9416035',
					'regency_id' => '9416',
					'name'       => 'NALCA',
				),
			423 =>
				array(
					'id'         => '9416036',
					'regency_id' => '9416',
					'name'       => 'PULDAMA',
				),
			424 =>
				array(
					'id'         => '9416037',
					'regency_id' => '9416',
					'name'       => 'NIPSAN',
				),
			425 =>
				array(
					'id'         => '9416041',
					'regency_id' => '9416',
					'name'       => 'SAMENAGE',
				),
			426 =>
				array(
					'id'         => '9416042',
					'regency_id' => '9416',
					'name'       => 'TANGMA',
				),
			427 =>
				array(
					'id'         => '9416043',
					'regency_id' => '9416',
					'name'       => 'SOBA',
				),
			428 =>
				array(
					'id'         => '9416044',
					'regency_id' => '9416',
					'name'       => 'MUGI',
				),
			429 =>
				array(
					'id'         => '9416045',
					'regency_id' => '9416',
					'name'       => 'YOGOSEM',
				),
			430 =>
				array(
					'id'         => '9416046',
					'regency_id' => '9416',
					'name'       => 'KAYO',
				),
			431 =>
				array(
					'id'         => '9416047',
					'regency_id' => '9416',
					'name'       => 'SUMO',
				),
			432 =>
				array(
					'id'         => '9416048',
					'regency_id' => '9416',
					'name'       => 'HOGIO',
				),
			433 =>
				array(
					'id'         => '9416049',
					'regency_id' => '9416',
					'name'       => 'UKHA',
				),
			434 =>
				array(
					'id'         => '9416051',
					'regency_id' => '9416',
					'name'       => 'WERIMA',
				),
			435 =>
				array(
					'id'         => '9416052',
					'regency_id' => '9416',
					'name'       => 'SOLOIKMA',
				),
			436 =>
				array(
					'id'         => '9416053',
					'regency_id' => '9416',
					'name'       => 'SERADALA',
				),
			437 =>
				array(
					'id'         => '9416054',
					'regency_id' => '9416',
					'name'       => 'KABIANGGAMA',
				),
			438 =>
				array(
					'id'         => '9416055',
					'regency_id' => '9416',
					'name'       => 'KWIKMA',
				),
			439 =>
				array(
					'id'         => '9416056',
					'regency_id' => '9416',
					'name'       => 'HILIPUK',
				),
			440 =>
				array(
					'id'         => '9416057',
					'regency_id' => '9416',
					'name'       => 'YAHULIAMBUT',
				),
			441 =>
				array(
					'id'         => '9416058',
					'regency_id' => '9416',
					'name'       => 'HEREAPINI',
				),
			442 =>
				array(
					'id'         => '9416059',
					'regency_id' => '9416',
					'name'       => 'UBALIHI',
				),
			443 =>
				array(
					'id'         => '9416061',
					'regency_id' => '9416',
					'name'       => 'TALAMBO',
				),
			444 =>
				array(
					'id'         => '9416062',
					'regency_id' => '9416',
					'name'       => 'PRONGGOLI',
				),
			445 =>
				array(
					'id'         => '9416063',
					'regency_id' => '9416',
					'name'       => 'ENDOMEN',
				),
			446 =>
				array(
					'id'         => '9416065',
					'regency_id' => '9416',
					'name'       => 'KONA',
				),
			447 =>
				array(
					'id'         => '9416066',
					'regency_id' => '9416',
					'name'       => 'DURAM',
				),
			448 =>
				array(
					'id'         => '9416067',
					'regency_id' => '9416',
					'name'       => 'DIRWEMNA',
				),
			449 =>
				array(
					'id'         => '9417010',
					'regency_id' => '9417',
					'name'       => 'IWUR',
				),
			450 =>
				array(
					'id'         => '9417011',
					'regency_id' => '9417',
					'name'       => 'KAWOR',
				),
			451 =>
				array(
					'id'         => '9417012',
					'regency_id' => '9417',
					'name'       => 'TARUP',
				),
			452 =>
				array(
					'id'         => '9417013',
					'regency_id' => '9417',
					'name'       => 'AWINBON',
				),
			453 =>
				array(
					'id'         => '9417020',
					'regency_id' => '9417',
					'name'       => 'OKSIBIL',
				),
			454 =>
				array(
					'id'         => '9417021',
					'regency_id' => '9417',
					'name'       => 'PEPERA',
				),
			455 =>
				array(
					'id'         => '9417022',
					'regency_id' => '9417',
					'name'       => 'ALEMSOM',
				),
			456 =>
				array(
					'id'         => '9417023',
					'regency_id' => '9417',
					'name'       => 'SERAMBAKON',
				),
			457 =>
				array(
					'id'         => '9417024',
					'regency_id' => '9417',
					'name'       => 'KOLOMDOL',
				),
			458 =>
				array(
					'id'         => '9417025',
					'regency_id' => '9417',
					'name'       => 'OKSOP',
				),
			459 =>
				array(
					'id'         => '9417026',
					'regency_id' => '9417',
					'name'       => 'OK BAPE',
				),
			460 =>
				array(
					'id'         => '9417027',
					'regency_id' => '9417',
					'name'       => 'OK AON',
				),
			461 =>
				array(
					'id'         => '9417030',
					'regency_id' => '9417',
					'name'       => 'BORME',
				),
			462 =>
				array(
					'id'         => '9417031',
					'regency_id' => '9417',
					'name'       => 'BIME',
				),
			463 =>
				array(
					'id'         => '9417032',
					'regency_id' => '9417',
					'name'       => 'EPUMEK',
				),
			464 =>
				array(
					'id'         => '9417033',
					'regency_id' => '9417',
					'name'       => 'WEIME',
				),
			465 =>
				array(
					'id'         => '9417034',
					'regency_id' => '9417',
					'name'       => 'PAMEK',
				),
			466 =>
				array(
					'id'         => '9417035',
					'regency_id' => '9417',
					'name'       => 'NONGME',
				),
			467 =>
				array(
					'id'         => '9417036',
					'regency_id' => '9417',
					'name'       => 'BATANI',
				),
			468 =>
				array(
					'id'         => '9417040',
					'regency_id' => '9417',
					'name'       => 'OKBI',
				),
			469 =>
				array(
					'id'         => '9417041',
					'regency_id' => '9417',
					'name'       => 'ABOY',
				),
			470 =>
				array(
					'id'         => '9417042',
					'regency_id' => '9417',
					'name'       => 'OKBAB',
				),
			471 =>
				array(
					'id'         => '9417043',
					'regency_id' => '9417',
					'name'       => 'TEIRAPLU',
				),
			472 =>
				array(
					'id'         => '9417044',
					'regency_id' => '9417',
					'name'       => 'YEFTA',
				),
			473 =>
				array(
					'id'         => '9417050',
					'regency_id' => '9417',
					'name'       => 'KIWIROK',
				),
			474 =>
				array(
					'id'         => '9417051',
					'regency_id' => '9417',
					'name'       => 'KIWIROK TIMUR',
				),
			475 =>
				array(
					'id'         => '9417052',
					'regency_id' => '9417',
					'name'       => 'OKSEBANG',
				),
			476 =>
				array(
					'id'         => '9417053',
					'regency_id' => '9417',
					'name'       => 'OKHIKA',
				),
			477 =>
				array(
					'id'         => '9417054',
					'regency_id' => '9417',
					'name'       => 'OKLIP',
				),
			478 =>
				array(
					'id'         => '9417055',
					'regency_id' => '9417',
					'name'       => 'OKSAMOL',
				),
			479 =>
				array(
					'id'         => '9417056',
					'regency_id' => '9417',
					'name'       => 'OKBEMTA',
				),
			480 =>
				array(
					'id'         => '9417060',
					'regency_id' => '9417',
					'name'       => 'BATOM',
				),
			481 =>
				array(
					'id'         => '9417061',
					'regency_id' => '9417',
					'name'       => 'MURKIM',
				),
			482 =>
				array(
					'id'         => '9417062',
					'regency_id' => '9417',
					'name'       => 'MOFINOP',
				),
			483 =>
				array(
					'id'         => '9418010',
					'regency_id' => '9418',
					'name'       => 'KANGGIME',
				),
			484 =>
				array(
					'id'         => '9418011',
					'regency_id' => '9418',
					'name'       => 'WONIKI',
				),
			485 =>
				array(
					'id'         => '9418012',
					'regency_id' => '9418',
					'name'       => 'NABUNAGE',
				),
			486 =>
				array(
					'id'         => '9418013',
					'regency_id' => '9418',
					'name'       => 'GILUBANDU',
				),
			487 =>
				array(
					'id'         => '9418014',
					'regency_id' => '9418',
					'name'       => 'WAKUO',
				),
			488 =>
				array(
					'id'         => '9418015',
					'regency_id' => '9418',
					'name'       => 'AWEKU',
				),
			489 =>
				array(
					'id'         => '9418016',
					'regency_id' => '9418',
					'name'       => 'BOGONUK',
				),
			490 =>
				array(
					'id'         => '9418020',
					'regency_id' => '9418',
					'name'       => 'KARUBAGA',
				),
			491 =>
				array(
					'id'         => '9418021',
					'regency_id' => '9418',
					'name'       => 'GOYAGE',
				),
			492 =>
				array(
					'id'         => '9418022',
					'regency_id' => '9418',
					'name'       => 'WUNIN',
				),
			493 =>
				array(
					'id'         => '9418023',
					'regency_id' => '9418',
					'name'       => 'KONDAGA',
				),
			494 =>
				array(
					'id'         => '9418024',
					'regency_id' => '9418',
					'name'       => 'NELAWI',
				),
			495 =>
				array(
					'id'         => '9418025',
					'regency_id' => '9418',
					'name'       => 'KUARI',
				),
			496 =>
				array(
					'id'         => '9418026',
					'regency_id' => '9418',
					'name'       => 'LIANOGOMA',
				),
			497 =>
				array(
					'id'         => '9418027',
					'regency_id' => '9418',
					'name'       => 'BIUK',
				),
			498 =>
				array(
					'id'         => '9418030',
					'regency_id' => '9418',
					'name'       => 'BOKONDINI',
				),
			499 =>
				array(
					'id'         => '9418031',
					'regency_id' => '9418',
					'name'       => 'BOKONERI',
				),
		));
		\DB::table('districts')->insert(array(
			0   =>
				array(
					'id'         => '9418032',
					'regency_id' => '9418',
					'name'       => 'BEWANI',
				),
			1   =>
				array(
					'id'         => '9418040',
					'regency_id' => '9418',
					'name'       => 'KEMBU',
				),
			2   =>
				array(
					'id'         => '9418041',
					'regency_id' => '9418',
					'name'       => 'WINA',
				),
			3   =>
				array(
					'id'         => '9418042',
					'regency_id' => '9418',
					'name'       => 'UMAGI',
				),
			4   =>
				array(
					'id'         => '9418043',
					'regency_id' => '9418',
					'name'       => 'PANAGA',
				),
			5   =>
				array(
					'id'         => '9418044',
					'regency_id' => '9418',
					'name'       => 'POGANERI',
				),
			6   =>
				array(
					'id'         => '9418045',
					'regency_id' => '9418',
					'name'       => 'KAMBONERI',
				),
			7   =>
				array(
					'id'         => '9418046',
					'regency_id' => '9418',
					'name'       => 'AIR GARAM',
				),
			8   =>
				array(
					'id'         => '9418047',
					'regency_id' => '9418',
					'name'       => 'DOW',
				),
			9   =>
				array(
					'id'         => '9418048',
					'regency_id' => '9418',
					'name'       => 'WARI / TAIYEVE',
				),
			10  =>
				array(
					'id'         => '9418049',
					'regency_id' => '9418',
					'name'       => 'EGIAM',
				),
			11  =>
				array(
					'id'         => '9418051',
					'regency_id' => '9418',
					'name'       => 'NUNGGAWI',
				),
			12  =>
				array(
					'id'         => '9418060',
					'regency_id' => '9418',
					'name'       => 'KUBU',
				),
			13  =>
				array(
					'id'         => '9418061',
					'regency_id' => '9418',
					'name'       => 'ANAWI',
				),
			14  =>
				array(
					'id'         => '9418062',
					'regency_id' => '9418',
					'name'       => 'WUGI',
				),
			15  =>
				array(
					'id'         => '9418070',
					'regency_id' => '9418',
					'name'       => 'GEYA',
				),
			16  =>
				array(
					'id'         => '9418071',
					'regency_id' => '9418',
					'name'       => 'WENAM',
				),
			17  =>
				array(
					'id'         => '9418080',
					'regency_id' => '9418',
					'name'       => 'NUMBA',
				),
			18  =>
				array(
					'id'         => '9418081',
					'regency_id' => '9418',
					'name'       => 'KAI',
				),
			19  =>
				array(
					'id'         => '9418090',
					'regency_id' => '9418',
					'name'       => 'DUNDU',
				),
			20  =>
				array(
					'id'         => '9418100',
					'regency_id' => '9418',
					'name'       => 'GUNDAGI',
				),
			21  =>
				array(
					'id'         => '9418110',
					'regency_id' => '9418',
					'name'       => 'TIMORI',
				),
			22  =>
				array(
					'id'         => '9418121',
					'regency_id' => '9418',
					'name'       => 'YUNERI',
				),
			23  =>
				array(
					'id'         => '9418125',
					'regency_id' => '9418',
					'name'       => 'TAGIME',
				),
			24  =>
				array(
					'id'         => '9418126',
					'regency_id' => '9418',
					'name'       => 'DANIME',
				),
			25  =>
				array(
					'id'         => '9418127',
					'regency_id' => '9418',
					'name'       => 'YUKO',
				),
			26  =>
				array(
					'id'         => '9418541',
					'regency_id' => '9418',
					'name'       => 'TELENGGEME',
				),
			27  =>
				array(
					'id'         => '9418542',
					'regency_id' => '9418',
					'name'       => 'GIKA',
				),
			28  =>
				array(
					'id'         => '9418543',
					'regency_id' => '9418',
					'name'       => 'TAGINERI',
				),
			29  =>
				array(
					'id'         => '9419021',
					'regency_id' => '9419',
					'name'       => 'PANTAI TIMUR BAGIAN BARAT',
				),
			30  =>
				array(
					'id'         => '9419022',
					'regency_id' => '9419',
					'name'       => 'PANTAI TIMUR',
				),
			31  =>
				array(
					'id'         => '9419024',
					'regency_id' => '9419',
					'name'       => 'SUNGAI BIRI',
				),
			32  =>
				array(
					'id'         => '9419025',
					'regency_id' => '9419',
					'name'       => 'VEEN',
				),
			33  =>
				array(
					'id'         => '9419031',
					'regency_id' => '9419',
					'name'       => 'BONGGO',
				),
			34  =>
				array(
					'id'         => '9419032',
					'regency_id' => '9419',
					'name'       => 'BONGGO TIMUR',
				),
			35  =>
				array(
					'id'         => '9419033',
					'regency_id' => '9419',
					'name'       => 'BONGGO BARAT',
				),
			36  =>
				array(
					'id'         => '9419040',
					'regency_id' => '9419',
					'name'       => 'TOR ATAS',
				),
			37  =>
				array(
					'id'         => '9419041',
					'regency_id' => '9419',
					'name'       => 'ISMARI',
				),
			38  =>
				array(
					'id'         => '9419050',
					'regency_id' => '9419',
					'name'       => 'SARMI',
				),
			39  =>
				array(
					'id'         => '9419051',
					'regency_id' => '9419',
					'name'       => 'SARMI TIMUR',
				),
			40  =>
				array(
					'id'         => '9419052',
					'regency_id' => '9419',
					'name'       => 'SARMI SELATAN',
				),
			41  =>
				array(
					'id'         => '9419053',
					'regency_id' => '9419',
					'name'       => 'SOBEY',
				),
			42  =>
				array(
					'id'         => '9419054',
					'regency_id' => '9419',
					'name'       => 'MUARA TOR',
				),
			43  =>
				array(
					'id'         => '9419055',
					'regency_id' => '9419',
					'name'       => 'VERKAM',
				),
			44  =>
				array(
					'id'         => '9419060',
					'regency_id' => '9419',
					'name'       => 'PANTAI BARAT',
				),
			45  =>
				array(
					'id'         => '9419061',
					'regency_id' => '9419',
					'name'       => 'APAWER HULU',
				),
			46  =>
				array(
					'id'         => '9419062',
					'regency_id' => '9419',
					'name'       => 'APAWER HILIR',
				),
			47  =>
				array(
					'id'         => '9419063',
					'regency_id' => '9419',
					'name'       => 'APAWER TENGAH',
				),
			48  =>
				array(
					'id'         => '9420010',
					'regency_id' => '9420',
					'name'       => 'WEB',
				),
			49  =>
				array(
					'id'         => '9420011',
					'regency_id' => '9420',
					'name'       => 'TOWE',
				),
			50  =>
				array(
					'id'         => '9420012',
					'regency_id' => '9420',
					'name'       => 'YAFFI',
				),
			51  =>
				array(
					'id'         => '9420020',
					'regency_id' => '9420',
					'name'       => 'SENGGI',
				),
			52  =>
				array(
					'id'         => '9420021',
					'regency_id' => '9420',
					'name'       => 'KAISENAR',
				),
			53  =>
				array(
					'id'         => '9420030',
					'regency_id' => '9420',
					'name'       => 'WARIS',
				),
			54  =>
				array(
					'id'         => '9420040',
					'regency_id' => '9420',
					'name'       => 'ARSO',
				),
			55  =>
				array(
					'id'         => '9420041',
					'regency_id' => '9420',
					'name'       => 'ARSO TIMUR',
				),
			56  =>
				array(
					'id'         => '9420042',
					'regency_id' => '9420',
					'name'       => 'ARSO BARAT',
				),
			57  =>
				array(
					'id'         => '9420043',
					'regency_id' => '9420',
					'name'       => 'MANNEM',
				),
			58  =>
				array(
					'id'         => '9420050',
					'regency_id' => '9420',
					'name'       => 'SKANTO',
				),
			59  =>
				array(
					'id'         => '9426010',
					'regency_id' => '9426',
					'name'       => 'WAROPEN BAWAH',
				),
			60  =>
				array(
					'id'         => '9426011',
					'regency_id' => '9426',
					'name'       => 'INGGERUS',
				),
			61  =>
				array(
					'id'         => '9426012',
					'regency_id' => '9426',
					'name'       => 'UREI FAISEI',
				),
			62  =>
				array(
					'id'         => '9426013',
					'regency_id' => '9426',
					'name'       => 'OUDATE',
				),
			63  =>
				array(
					'id'         => '9426014',
					'regency_id' => '9426',
					'name'       => 'WAPOGA',
				),
			64  =>
				array(
					'id'         => '9426020',
					'regency_id' => '9426',
					'name'       => 'MASIREI',
				),
			65  =>
				array(
					'id'         => '9426021',
					'regency_id' => '9426',
					'name'       => 'RISEI SAYATI',
				),
			66  =>
				array(
					'id'         => '9426022',
					'regency_id' => '9426',
					'name'       => 'DEMBA',
				),
			67  =>
				array(
					'id'         => '9426023',
					'regency_id' => '9426',
					'name'       => 'SOYOI MAMBAI',
				),
			68  =>
				array(
					'id'         => '9426024',
					'regency_id' => '9426',
					'name'       => 'WONTI',
				),
			69  =>
				array(
					'id'         => '9426030',
					'regency_id' => '9426',
					'name'       => 'WALANI',
				),
			70  =>
				array(
					'id'         => '9426040',
					'regency_id' => '9426',
					'name'       => 'KIRIHI',
				),
			71  =>
				array(
					'id'         => '9427010',
					'regency_id' => '9427',
					'name'       => 'SUPIORI SELATAN',
				),
			72  =>
				array(
					'id'         => '9427011',
					'regency_id' => '9427',
					'name'       => 'KEPULAUAN ARURI',
				),
			73  =>
				array(
					'id'         => '9427020',
					'regency_id' => '9427',
					'name'       => 'SUPIORI UTARA',
				),
			74  =>
				array(
					'id'         => '9427021',
					'regency_id' => '9427',
					'name'       => 'SUPIORI BARAT',
				),
			75  =>
				array(
					'id'         => '9427030',
					'regency_id' => '9427',
					'name'       => 'SUPIORI TIMUR',
				),
			76  =>
				array(
					'id'         => '9428030',
					'regency_id' => '9428',
					'name'       => 'WAROPEN ATAS',
				),
			77  =>
				array(
					'id'         => '9428031',
					'regency_id' => '9428',
					'name'       => 'BENUKI',
				),
			78  =>
				array(
					'id'         => '9428032',
					'regency_id' => '9428',
					'name'       => 'SAWAI',
				),
			79  =>
				array(
					'id'         => '9428040',
					'regency_id' => '9428',
					'name'       => 'MAMBERAMO ILIR',
				),
			80  =>
				array(
					'id'         => '9428050',
					'regency_id' => '9428',
					'name'       => 'MAMBERAMO TENGAH',
				),
			81  =>
				array(
					'id'         => '9428051',
					'regency_id' => '9428',
					'name'       => 'IWASO',
				),
			82  =>
				array(
					'id'         => '9428060',
					'regency_id' => '9428',
					'name'       => 'MAMBERAMO TENGAH TIMUR',
				),
			83  =>
				array(
					'id'         => '9428070',
					'regency_id' => '9428',
					'name'       => 'ROFAER',
				),
			84  =>
				array(
					'id'         => '9428080',
					'regency_id' => '9428',
					'name'       => 'MAMBERAMO ULU',
				),
			85  =>
				array(
					'id'         => '9429010',
					'regency_id' => '9429',
					'name'       => 'WOSAK',
				),
			86  =>
				array(
					'id'         => '9429011',
					'regency_id' => '9429',
					'name'       => 'MOBA',
				),
			87  =>
				array(
					'id'         => '9429012',
					'regency_id' => '9429',
					'name'       => 'PIJA',
				),
			88  =>
				array(
					'id'         => '9429013',
					'regency_id' => '9429',
					'name'       => 'KORA',
				),
			89  =>
				array(
					'id'         => '9429020',
					'regency_id' => '9429',
					'name'       => 'KENYAM',
				),
			90  =>
				array(
					'id'         => '9429021',
					'regency_id' => '9429',
					'name'       => 'MBUWA TENGAH',
				),
			91  =>
				array(
					'id'         => '9429022',
					'regency_id' => '9429',
					'name'       => 'KREPKURI',
				),
			92  =>
				array(
					'id'         => '9429023',
					'regency_id' => '9429',
					'name'       => 'EMBETPEM',
				),
			93  =>
				array(
					'id'         => '9429030',
					'regency_id' => '9429',
					'name'       => 'GESELMA',
				),
			94  =>
				array(
					'id'         => '9429031',
					'regency_id' => '9429',
					'name'       => 'KILMID',
				),
			95  =>
				array(
					'id'         => '9429032',
					'regency_id' => '9429',
					'name'       => 'YENGGELO',
				),
			96  =>
				array(
					'id'         => '9429033',
					'regency_id' => '9429',
					'name'       => 'ALAMA',
				),
			97  =>
				array(
					'id'         => '9429034',
					'regency_id' => '9429',
					'name'       => 'MEBOROK',
				),
			98  =>
				array(
					'id'         => '9429040',
					'regency_id' => '9429',
					'name'       => 'MAPENDUMA',
				),
			99  =>
				array(
					'id'         => '9429041',
					'regency_id' => '9429',
					'name'       => 'KROPTAK',
				),
			100 =>
				array(
					'id'         => '9429042',
					'regency_id' => '9429',
					'name'       => 'PARO',
				),
			101 =>
				array(
					'id'         => '9429043',
					'regency_id' => '9429',
					'name'       => 'KEGAYEM',
				),
			102 =>
				array(
					'id'         => '9429050',
					'regency_id' => '9429',
					'name'       => 'MUGI',
				),
			103 =>
				array(
					'id'         => '9429051',
					'regency_id' => '9429',
					'name'       => 'YAL',
				),
			104 =>
				array(
					'id'         => '9429052',
					'regency_id' => '9429',
					'name'       => 'MAM',
				),
			105 =>
				array(
					'id'         => '9429060',
					'regency_id' => '9429',
					'name'       => 'YIGI',
				),
			106 =>
				array(
					'id'         => '9429061',
					'regency_id' => '9429',
					'name'       => 'DAL',
				),
			107 =>
				array(
					'id'         => '9429062',
					'regency_id' => '9429',
					'name'       => 'NIRKURI',
				),
			108 =>
				array(
					'id'         => '9429063',
					'regency_id' => '9429',
					'name'       => 'INIKGAL',
				),
			109 =>
				array(
					'id'         => '9429070',
					'regency_id' => '9429',
					'name'       => 'MBUWA',
				),
			110 =>
				array(
					'id'         => '9429071',
					'regency_id' => '9429',
					'name'       => 'INIYE',
				),
			111 =>
				array(
					'id'         => '9429072',
					'regency_id' => '9429',
					'name'       => 'WUTPAGA',
				),
			112 =>
				array(
					'id'         => '9429073',
					'regency_id' => '9429',
					'name'       => 'NENGGEANGIN',
				),
			113 =>
				array(
					'id'         => '9429074',
					'regency_id' => '9429',
					'name'       => 'MBULMU YALMA',
				),
			114 =>
				array(
					'id'         => '9429080',
					'regency_id' => '9429',
					'name'       => 'GEAREK',
				),
			115 =>
				array(
					'id'         => '9429081',
					'regency_id' => '9429',
					'name'       => 'PASIR PUTIH',
				),
			116 =>
				array(
					'id'         => '9429082',
					'regency_id' => '9429',
					'name'       => 'WUSI',
				),
			117 =>
				array(
					'id'         => '9430010',
					'regency_id' => '9430',
					'name'       => 'MAKKI',
				),
			118 =>
				array(
					'id'         => '9430011',
					'regency_id' => '9430',
					'name'       => 'GUPURA',
				),
			119 =>
				array(
					'id'         => '9430012',
					'regency_id' => '9430',
					'name'       => 'KOLAWA',
				),
			120 =>
				array(
					'id'         => '9430013',
					'regency_id' => '9430',
					'name'       => 'GELOK BEAM',
				),
			121 =>
				array(
					'id'         => '9430014',
					'regency_id' => '9430',
					'name'       => 'AWINA',
				),
			122 =>
				array(
					'id'         => '9430020',
					'regency_id' => '9430',
					'name'       => 'PIRIME',
				),
			123 =>
				array(
					'id'         => '9430021',
					'regency_id' => '9430',
					'name'       => 'BUGUK GONA',
				),
			124 =>
				array(
					'id'         => '9430022',
					'regency_id' => '9430',
					'name'       => 'MILIMBO',
				),
			125 =>
				array(
					'id'         => '9430023',
					'regency_id' => '9430',
					'name'       => 'GOLLO',
				),
			126 =>
				array(
					'id'         => '9430024',
					'regency_id' => '9430',
					'name'       => 'WIRINGGABUT',
				),
			127 =>
				array(
					'id'         => '9430030',
					'regency_id' => '9430',
					'name'       => 'TIOM',
				),
			128 =>
				array(
					'id'         => '9430031',
					'regency_id' => '9430',
					'name'       => 'NOGI',
				),
			129 =>
				array(
					'id'         => '9430032',
					'regency_id' => '9430',
					'name'       => 'MOKONI',
				),
			130 =>
				array(
					'id'         => '9430033',
					'regency_id' => '9430',
					'name'       => 'NINAME',
				),
			131 =>
				array(
					'id'         => '9430034',
					'regency_id' => '9430',
					'name'       => 'YIGINUA',
				),
			132 =>
				array(
					'id'         => '9430035',
					'regency_id' => '9430',
					'name'       => 'TIOM OLLO',
				),
			133 =>
				array(
					'id'         => '9430036',
					'regency_id' => '9430',
					'name'       => 'YUGUNWI',
				),
			134 =>
				array(
					'id'         => '9430037',
					'regency_id' => '9430',
					'name'       => 'LANNYNA',
				),
			135 =>
				array(
					'id'         => '9430040',
					'regency_id' => '9430',
					'name'       => 'BALINGGA',
				),
			136 =>
				array(
					'id'         => '9430041',
					'regency_id' => '9430',
					'name'       => 'BALINGGA BARAT',
				),
			137 =>
				array(
					'id'         => '9430042',
					'regency_id' => '9430',
					'name'       => 'BRUWA',
				),
			138 =>
				array(
					'id'         => '9430043',
					'regency_id' => '9430',
					'name'       => 'AYUMNATI',
				),
			139 =>
				array(
					'id'         => '9430050',
					'regency_id' => '9430',
					'name'       => 'KUYAWAGE',
				),
			140 =>
				array(
					'id'         => '9430051',
					'regency_id' => '9430',
					'name'       => 'WANO BARAT',
				),
			141 =>
				array(
					'id'         => '9430060',
					'regency_id' => '9430',
					'name'       => 'MALAGAINERI',
				),
			142 =>
				array(
					'id'         => '9430061',
					'regency_id' => '9430',
					'name'       => 'MELAGAI',
				),
			143 =>
				array(
					'id'         => '9430070',
					'regency_id' => '9430',
					'name'       => 'TIOMNERI',
				),
			144 =>
				array(
					'id'         => '9430071',
					'regency_id' => '9430',
					'name'       => 'WEREKA',
				),
			145 =>
				array(
					'id'         => '9430080',
					'regency_id' => '9430',
					'name'       => 'DIMBA',
				),
			146 =>
				array(
					'id'         => '9430081',
					'regency_id' => '9430',
					'name'       => 'KELULOME',
				),
			147 =>
				array(
					'id'         => '9430082',
					'regency_id' => '9430',
					'name'       => 'NIKOGWE',
				),
			148 =>
				array(
					'id'         => '9430090',
					'regency_id' => '9430',
					'name'       => 'GAMELIA',
				),
			149 =>
				array(
					'id'         => '9430091',
					'regency_id' => '9430',
					'name'       => 'KARU',
				),
			150 =>
				array(
					'id'         => '9430092',
					'regency_id' => '9430',
					'name'       => 'YILUK',
				),
			151 =>
				array(
					'id'         => '9430093',
					'regency_id' => '9430',
					'name'       => 'GUNA',
				),
			152 =>
				array(
					'id'         => '9430100',
					'regency_id' => '9430',
					'name'       => 'POGA',
				),
			153 =>
				array(
					'id'         => '9430101',
					'regency_id' => '9430',
					'name'       => 'MUARA',
				),
			154 =>
				array(
					'id'         => '9431010',
					'regency_id' => '9431',
					'name'       => 'KOBAKMA',
				),
			155 =>
				array(
					'id'         => '9431020',
					'regency_id' => '9431',
					'name'       => 'ILUGWA',
				),
			156 =>
				array(
					'id'         => '9431030',
					'regency_id' => '9431',
					'name'       => 'KELILA',
				),
			157 =>
				array(
					'id'         => '9431040',
					'regency_id' => '9431',
					'name'       => 'ERAGAYAM',
				),
			158 =>
				array(
					'id'         => '9431050',
					'regency_id' => '9431',
					'name'       => 'MEGAMBILIS',
				),
			159 =>
				array(
					'id'         => '9432010',
					'regency_id' => '9432',
					'name'       => 'WELAREK',
				),
			160 =>
				array(
					'id'         => '9432020',
					'regency_id' => '9432',
					'name'       => 'APALAPSILI',
				),
			161 =>
				array(
					'id'         => '9432030',
					'regency_id' => '9432',
					'name'       => 'ABENAHO',
				),
			162 =>
				array(
					'id'         => '9432040',
					'regency_id' => '9432',
					'name'       => 'ELELIM',
				),
			163 =>
				array(
					'id'         => '9432050',
					'regency_id' => '9432',
					'name'       => 'BENAWA',
				),
			164 =>
				array(
					'id'         => '9433010',
					'regency_id' => '9433',
					'name'       => 'AGADUGUME',
				),
			165 =>
				array(
					'id'         => '9433011',
					'regency_id' => '9433',
					'name'       => 'LAMBEWI',
				),
			166 =>
				array(
					'id'         => '9433012',
					'regency_id' => '9433',
					'name'       => 'ONERI',
				),
			167 =>
				array(
					'id'         => '9433020',
					'regency_id' => '9433',
					'name'       => 'GOME',
				),
			168 =>
				array(
					'id'         => '9433021',
					'regency_id' => '9433',
					'name'       => 'AMUNGKALPIA',
				),
			169 =>
				array(
					'id'         => '9433022',
					'regency_id' => '9433',
					'name'       => 'GOME UTARA',
				),
			170 =>
				array(
					'id'         => '9433023',
					'regency_id' => '9433',
					'name'       => 'ERELMAKAWIA',
				),
			171 =>
				array(
					'id'         => '9433030',
					'regency_id' => '9433',
					'name'       => 'ILAGA',
				),
			172 =>
				array(
					'id'         => '9433031',
					'regency_id' => '9433',
					'name'       => 'ILAGA UTARA',
				),
			173 =>
				array(
					'id'         => '9433032',
					'regency_id' => '9433',
					'name'       => 'MABUGI',
				),
			174 =>
				array(
					'id'         => '9433033',
					'regency_id' => '9433',
					'name'       => 'OMUKIA',
				),
			175 =>
				array(
					'id'         => '9433040',
					'regency_id' => '9433',
					'name'       => 'SINAK',
				),
			176 =>
				array(
					'id'         => '9433041',
					'regency_id' => '9433',
					'name'       => 'SINAK BARAT',
				),
			177 =>
				array(
					'id'         => '9433042',
					'regency_id' => '9433',
					'name'       => 'MAGEÁBUME',
				),
			178 =>
				array(
					'id'         => '9433043',
					'regency_id' => '9433',
					'name'       => 'YUGUMUAK',
				),
			179 =>
				array(
					'id'         => '9433050',
					'regency_id' => '9433',
					'name'       => 'POGOMA',
				),
			180 =>
				array(
					'id'         => '9433051',
					'regency_id' => '9433',
					'name'       => 'KEMBRU',
				),
			181 =>
				array(
					'id'         => '9433052',
					'regency_id' => '9433',
					'name'       => 'BINA',
				),
			182 =>
				array(
					'id'         => '9433060',
					'regency_id' => '9433',
					'name'       => 'WANGBE',
				),
			183 =>
				array(
					'id'         => '9433061',
					'regency_id' => '9433',
					'name'       => 'OGAMANIM',
				),
			184 =>
				array(
					'id'         => '9433070',
					'regency_id' => '9433',
					'name'       => 'BEOGA',
				),
			185 =>
				array(
					'id'         => '9433071',
					'regency_id' => '9433',
					'name'       => 'BEOGA BARAT',
				),
			186 =>
				array(
					'id'         => '9433072',
					'regency_id' => '9433',
					'name'       => 'BEOGA TIMUR',
				),
			187 =>
				array(
					'id'         => '9433080',
					'regency_id' => '9433',
					'name'       => 'DOUFO',
				),
			188 =>
				array(
					'id'         => '9433081',
					'regency_id' => '9433',
					'name'       => 'DERVOS',
				),
			189 =>
				array(
					'id'         => '9434010',
					'regency_id' => '9434',
					'name'       => 'SUKIKAI SELATAN',
				),
			190 =>
				array(
					'id'         => '9434020',
					'regency_id' => '9434',
					'name'       => 'PIYAIYE',
				),
			191 =>
				array(
					'id'         => '9434030',
					'regency_id' => '9434',
					'name'       => 'MAPIA BARAT',
				),
			192 =>
				array(
					'id'         => '9434040',
					'regency_id' => '9434',
					'name'       => 'MAPIA TENGAH',
				),
			193 =>
				array(
					'id'         => '9434050',
					'regency_id' => '9434',
					'name'       => 'MAPIA',
				),
			194 =>
				array(
					'id'         => '9434060',
					'regency_id' => '9434',
					'name'       => 'DOGIYAI',
				),
			195 =>
				array(
					'id'         => '9434070',
					'regency_id' => '9434',
					'name'       => 'KAMU SELATAN',
				),
			196 =>
				array(
					'id'         => '9434080',
					'regency_id' => '9434',
					'name'       => 'KAMU',
				),
			197 =>
				array(
					'id'         => '9434090',
					'regency_id' => '9434',
					'name'       => 'KAMU TIMUR',
				),
			198 =>
				array(
					'id'         => '9434100',
					'regency_id' => '9434',
					'name'       => 'KAMU UTARA',
				),
			199 =>
				array(
					'id'         => '9435010',
					'regency_id' => '9435',
					'name'       => 'HOMEYO',
				),
			200 =>
				array(
					'id'         => '9435020',
					'regency_id' => '9435',
					'name'       => 'SUGAPA',
				),
			201 =>
				array(
					'id'         => '9435030',
					'regency_id' => '9435',
					'name'       => 'HITADIPA',
				),
			202 =>
				array(
					'id'         => '9435040',
					'regency_id' => '9435',
					'name'       => 'AGISIGA',
				),
			203 =>
				array(
					'id'         => '9435050',
					'regency_id' => '9435',
					'name'       => 'BIANDOGA',
				),
			204 =>
				array(
					'id'         => '9435060',
					'regency_id' => '9435',
					'name'       => 'WANDAI',
				),
			205 =>
				array(
					'id'         => '9436010',
					'regency_id' => '9436',
					'name'       => 'KAPIRAYA',
				),
			206 =>
				array(
					'id'         => '9436020',
					'regency_id' => '9436',
					'name'       => 'TIGI BARAT',
				),
			207 =>
				array(
					'id'         => '9436030',
					'regency_id' => '9436',
					'name'       => 'TIGI',
				),
			208 =>
				array(
					'id'         => '9436040',
					'regency_id' => '9436',
					'name'       => 'TIGI TIMUR',
				),
			209 =>
				array(
					'id'         => '9436050',
					'regency_id' => '9436',
					'name'       => 'BOWOBADO',
				),
			210 =>
				array(
					'id'         => '9471010',
					'regency_id' => '9471',
					'name'       => 'MUARA TAMI',
				),
			211 =>
				array(
					'id'         => '9471020',
					'regency_id' => '9471',
					'name'       => 'ABEPURA',
				),
			212 =>
				array(
					'id'         => '9471021',
					'regency_id' => '9471',
					'name'       => 'HERAM',
				),
			213 =>
				array(
					'id'         => '9471030',
					'regency_id' => '9471',
					'name'       => 'JAYAPURA SELATAN',
				),
			214 =>
				array(
					'id'         => '9471040',
					'regency_id' => '9471',
					'name'       => 'JAYAPURA UTARA',
				),
		));


	}
}