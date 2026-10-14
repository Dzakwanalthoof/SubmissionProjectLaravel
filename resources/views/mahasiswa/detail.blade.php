@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <ul>
        <li><strong>NIM:</strong> {{ $mhs['nim'] }}</li>
        <li><strong>Nama:</strong> {{ $mhs['nama'] }}</li>
        <li><strong>IPK:</strong> {{ $mhs['ipk'] }}</li>
        <li><strong>Program Studi:</strong> {{ $mhs['prodi'] }}</li>
    </ul>

    <br>
    <a href="{{ route('mahasiswa.daftar') }}">← Kembali ke Daftar Mahasiswa</a>
@endsection