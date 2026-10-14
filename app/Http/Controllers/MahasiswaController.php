<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Muhammad Dzakwan Rozaan Althoof';
        $nim = '242520091';
        $prodi = 'Teknologi Informasi';
        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
    public function daftar()
    {
        $mahasiswa = [
            ['nim' => '242520091', 'nama' => 'Dzakwan', 'ipk' => 3.70],
            ['nim' => '242520001', 'nama' => 'Robert', 'ipk' => 3.55],
            ['nim' => '242520025', 'nama' => 'Nakula', 'ipk' => 3.80],
            ['nim' => '242520050', 'nama' => 'Fiionsa', 'ipk' => 3.70],
            ['nim' => '242520075', 'nama' => 'Gatot', 'ipk' => 1.92],
        ];
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }
    public function show($nim)
    {
        $dataMahasiswa = [
            '242520091' => ['nama' => 'Dzakwan', 'nim' => '242520091', 'ipk' => 3.70, 'prodi' => 'Teknologi Informasi'],
            '242520001' => ['nama' => 'Robert', 'nim' => '242520001', 'ipk' => 3.55, 'prodi' => 'Teknologi Informasi'],
            '242520025' => ['nama' => 'Nakula', 'nim' => '242520025', 'ipk' => 3.80, 'prodi' => 'Teknologi Informasi'],
            '242520050' => ['nama' => 'Fiionsa', 'nim' => '242520050', 'ipk' => 3.70, 'prodi' => 'Teknologi Informasi'],
            '242520075' => ['nama' => 'Gatot', 'nim' => '242520075', 'ipk' => 1.92, 'prodi' => 'Teknologi Informasi'],
        ];
        abort_unless(isset($dataMahasiswa[$nim]), 404);
        $mhs = $dataMahasiswa[$nim];
        return view('mahasiswa.detail', compact('mhs'));
    }
}