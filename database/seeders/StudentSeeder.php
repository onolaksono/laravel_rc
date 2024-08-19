<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        //mengosongkan isi table
        Student::truncate();
        //enable foreignkey
        Schema::enableForeignKeyConstraints();
        $data = [
            [
                'name' => 'Anggi 1',
            ],
            [
                'name' => 'Anggi 2',
            ],
            [
                'name' => 'Anggi 3',
            ],
            [
                'name' => 'Anggi 4',
            ],
            [
                'name' => 'Anggi 5',
            ],

        ];

        foreach ($data as $siswa) {
            Student::insert([
                'nama_siswa' => $siswa['name'],
                // import = use Illuminate\Support\Arr;
                'gender' => Arr::random(['L', 'P']),
                'nis' => mt_rand(0000001, 9999999),
                'class_id' => Arr::random([1, 2, 3]),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
