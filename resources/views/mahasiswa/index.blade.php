@extends('layouts.app')

@section('content')
    <h1>Kelola Mahasiswa</h1>
    <hr>
    <div style="margin-block: 20px;">
        <a href="{{ route('mahasiswa.create') }}" class="button">+ Tambah Mahasiswa</a>
    </div>

    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->program_studi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ ucfirst($mhs->status) }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="button">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="button edit">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data mahasiswa.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
