<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome2');
});

// membuat route /student untuk memanggil function index
// di StudentController
Route::get('/student', [StudentController::class, 'index']);

//memanggil class
Route::get('/class', [ClassController::class, 'index']);

// memanggil function latihan
Route::get('/latihan', [StudentController::class, 'latihan']);


// memanggil tampilan contact
Route::get('/contact', function () {
    return view('contact', [
        'nama_siswa' => 'Dwi',
        'kelas' => '12 RPL C',
        'alamat' => 'Bandung',
        'telp' => '0812313123'
    ]);
});

// Route::get('product/{id}', function ($id) {
//     return 'Ini produk dengan ID Produk : '.$id;
// });

// Route::get('product/{id}', function ($id) {
//     return view('product.detail', [
//         'id' => $id
//     ]);
// });
Route::get('product/{id}', function ($id) {
    $produk = [
        [
            'id' => 1,
            'nama_produk' => 'Apple 15 Pro',
            'harga' => 20000000,
            'stok' => 20
        ],
        [
            'id' => 2,
            'nama_produk' => 'Samsung 15 Pro',
            'harga' => 18000000,
            'stok' => 30
        ],
        [
            'id' => 3,
            'nama_produk' => 'Asus 15 Pro',
            'harga' => 15000000,
            'stok' => 40
        ]
    ];
    // select * from produk where id = $id
    $cari_produk = collect($produk)->where('id',$id)->first();
    return view('product.detail', [
        'data' => $cari_produk
    ]);
    // dd($cari_produk);
    // die;
});

// admin/profile
Route::prefix('admin')->group(function () {
    Route::get('/profile', function () {
        return 'Profile Admin';
    });
    Route::get('/contact', function () {
        return 'Contact Admin';
    });
    Route::get('/biodata', function () {
        return 'Biodata Admin';
    });
    Route::get('/home', function () {
        return 'Home Admin';
    });
});

Route::prefix('siswa')->group(function () {
    Route::get('/profile', function () {
        return 'Profile Siswa';
    });
    Route::get('/contact', function () {
        return 'Contact Siswa';
    });
    Route::get('/biodata', function () {
        return 'Biodata Siswa';
    });
    Route::get('/home', function () {
        return 'Home Siswa';
    });
});


Route::get('siswa/{nis}', function ($nis) {
    $siswa = [
        [
            'nis' => 111,
            'nama_siswa' => 'richard',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'futsal'
        ],
        [
            'nis' => 112,
            'nama_siswa' => 'kevin',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'basket'
        ],
        [
            'nis' => 113,
            'nama_siswa' => 'dika',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'voli'
        ],
        [
            'nis' => 114,
            'nama_siswa' => 'derek',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'voli'
        ],
        [
            'nis' => 115,
            'nama_siswa' => 'sakai',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'karate'
        ],
    ];
    $cari_siswa = collect($siswa)->where('nis',$nis)->first();
    return view('siswa.siswa', [
        'data' => $cari_siswa
    ]);

});

Route::get('/home', function () {
    $siswa = [
        [
            'nis' => 111,
            'nama_siswa' => 'richard',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'futsal'
        ],
        [
            'nis' => 112,
            'nama_siswa' => 'kevin',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'basket'
        ],
        [
            'nis' => 113,
            'nama_siswa' => 'dika',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'voli'
        ],
        [
            'nis' => 114,
            'nama_siswa' => 'derek',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'voli'
        ],
        [
            'nis' => 115,
            'nama_siswa' => 'sakai',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul' => 'karate'
        ],
    ];
        return view('home',[
            'nama' => 'Kevin Sanjaya',
            'role' => 'admin',
            'data' => $siswa
    ]);
});
