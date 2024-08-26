<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Eloquent ORM rekomendasi
        //Query Builder masih bisa digunakan
        //RAW   tidak disarankan
        //memanggil list student
        //select * from students'

        // dd($student);
        // die();

        // $student = Student::all();
        // return view('student', [
        //     'siswa' => $student,
        // ]);
        //menampilkan data dari table
        // eloquent
        $data['siswa'] = Student::all();
        return view('student', $data);

        //query builder
        // $data['siswa'] = DB::table('students')->get();
        // dd($data);

        // menambahkan data
        // query builder
        // DB::table('students')->insert([
        //     'nama_siswa' => 'Kevin',
        //     'gender' => 'L',
        //     'nis' => '123456',
        //     'class_id' => 2
        // ]);

        // eloquent
        // Student::create([
        //     'nama_siswa' => 'Eloquent ORM',
        //     'gender' => 'L',
        //     'nis' => '999111',
        //     'class_id' => 1
        // ]);

        // UPDATE DATA
        // query builder dimana id=1
        // DB::table('students')->where('id',1)->update([
        //     'nama_siswa' => 'Query Builder Update',
        //     'class_id' => 1
        // ]);

        // eloquent update
        // $query = Student::find(10)->update([
        //     'nama_siswa' => 'ini update',
        // ]);
        // hapus data
        // query builder
        // $query = DB::table('students')
        //             ->where('id',19)
        //             ->delete();

        // Eloquent
        // $query = Student::find(3)->delete();
        // dd($query);
    }

    public function latihan(){
        $nilai = [9,8,7,6,4,8,9,1,10, 3,9, 7,1, 5, 3,9];
        //contains = cek apakah sebuah array memiliki sesuatu
        $test = collect($nilai)->contains(3);

        dd($test);

        // php biasa
        // 1 . hitung jumlah nilai
        // 2. hitung berapa banyak nilai
        // 3. hitung nilai rata rata = total nilai / count nilai

        $banyakNilai = count($nilai);
        $totalNilai = array_sum($nilai);
        $rataRata = $totalNilai / $banyakNilai; //6.1875

        $nilaiRataRata = collect($nilai)->avg();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
