@extends('layouts.app')

@section('content')
  <h2>Detail Mahasiswa</h2>
  <hr>

  <div class="detail-box">
    <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
    <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $mahasiswa->tanggal_lahir }}</p>
    <p><strong>Jenis Kelamin:</strong> {{ $mahasiswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
    <p><strong>Alamat:</strong> {{ $mahasiswa->alamat }}</p>
    <p><strong>No Telepon:</strong> {{ $mahasiswa->no_telepon ?? '-' }}</p>
    <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
    <p><strong>Program Studi:</strong> {{ $mahasiswa->program_studi }}</p>
    <p><strong>Status:</strong> {{ ucfirst($mahasiswa->status) }}</p>
  </div>

  <a href="{{ route('mahasiswa.index') }}" class="button">← Kembali</a>
@endsection
