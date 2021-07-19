<?php

return [
    
    'boolean' => [
        0 => 'No',
        1 => 'Yes',
    ],

    'role' => [
        ''=> 'Silahkan Pilih Role',
        1 => 'Mahasiswa',
        11 => 'Tendik Jurusan',
        10 => 'Tendik Akademik',
        4 => 'Unit Kerja',
        5 => 'Arsiparis',
        6 => 'Sekretariat',
        7 => 'Wakil Rektor',
        8 => 'Rektor',
        100 => 'Admin',
    ],

    'prodi' => [
        'Fisika' => 'Fisika',
        'Matematika' => 'Matematika',
        'Teknik Mesin' => 'Teknik Mesin',
        'Teknik Elektro' => 'Teknik Elektro',
        'Teknik Kimia' => 'Teknik Kimia',
        'Teknik Material dan Metalurgi' => 'Teknik Material dan Metalurgi',
        'Teknik Sipil' => 'Teknik Sipil',
        'Perencanaan Wilayah dan Tata Kota' => 'Perencanaan Wilayah dan Tata Kota',
        'Teknik Perkapalan' => 'Teknik Perkapalan',
        'Sistem Informasi' => 'Sistem Informasi',
        'Informatika' => 'Informatika',
        'Teknik Industri ' => 'Teknik Industri ',
        'Teknik Lingkungan' => 'Teknik Lingkungan',
        'Teknik Kelautan' => 'Teknik Kelautan',
        'Statistika' => 'Statistika',
        'Ilmu Aktuaria' => 'Ilmu Aktuaria',
        'Arsitektur' => 'Arsitektur',
        'Teknologi Pangan' => 'Teknologi Pangan',
        'Rekayasa Keselamatan' => 'Rekayasa Keselamatan',
        'Bisnis Digital' => 'Bisnis Digital',
    ],

    'jurusan' => [
        'JMTI' => 'JMTI',
        'JTIP' => 'JTIP',
        'JIKL' => 'JIKL',
        'JSTPK' => 'JSTPK',
        'JTSP' => 'JTSP',
    ],
    
    'status' => [
        1 => 'Active',
        0 => 'Inactive',
    ],

    'semester' => [
        'Ganjil' => 'GANJIL',
        'Genap' => 'GENAP',
    ],

    'ukt' => [
        'Golongan I' => 'Golongan I / Rp. 500.000,-',
        'Golongan II' => 'Golongan II / Rp. 1.000.000,-',
        'Golongan III' => 'Golongan III / Rp. 2.000.000,-',
        'Golongan IV' => 'Golongan IV / Rp. 4.000.000,-',
        'Golongan V' => 'Golongan V / Rp. 6.000.000,-',
        'Golongan VI' => 'Golongan VI / Rp. 8.000.000,-',
        'Golongan VII' => 'Golongan VII / Rp. 9.000.000,-',
        'Golongan VIII-1' => 'Golongan VIII / Rp. 9.500.000,-',
        'Golongan VIII-2' => 'Golongan VIII / Rp. 10.000.000,-',
        'Golongan VIII-3' => 'Golongan VIII / Rp. 12.000.000,-',
    ],

    'avatar' => [
        'public' => '/storage/avatar/',
        'folder' => 'avatar',
        
        'width'  => 400,
        'height' => 400,
    ],

    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
    */
    'APP_ADMIN' => 'admin',
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),
    'WITH_FAKER' => env('WITH_FAKER', false),
];