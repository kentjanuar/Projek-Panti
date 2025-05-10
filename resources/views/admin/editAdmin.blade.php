@extends('base.baseAdmin')

@section('content')

@if(session('success'))
    <div id="success-alert" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-8 w-4/5 sm:w-1/3 bg-green-100 border-t-4 border-green-500 text-green-700 px-6 py-4 rounded-lg shadow-md animate__animated animate__fadeIn">
        <div class="flex justify-between items-center">
            <span class="text-lg font-semibold">{{ session('success') }}</span>
            <button onclick="document.getElementById('success-alert').style.display='none'" class="text-green-700 hover:text-green-900 font-bold ml-4">
                &times;
            </button>
        </div>
    </div>
@endif

<h1 class="mt-10 mb-8 text-center text-4xl font-serif font-semibold text-black">List Admin</h1>

<div class="container mx-auto px-4 py-6">
    <div class="flex justify-start mb-4">
        <a href="{{ route('admin.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">
            Tambah Data
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-gray-200">
                    <th class="px-4 py-2 text-center">No</th>
                    <th class="px-4 py-2 text-center">Nama</th>
                    <th class="px-4 py-2 text-center">username</th>
                    <th class="px-4 py-2 text-center">Ubah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admin as $row)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2 text-center">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 text-center">{{ $row->name }}</td>
                    <td class="px-4 py-2 text-center">{{ $row->username }}</td>
                    <td class="px-4 py-2 text-center">
                        <div class="flex justify-center space-x-2">
                            <a href="{{ route('admin.edit', $row) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition duration-200">Edit</a>
                            <form method="POST" action="{{ route('admin.delete', $row) }}" onsubmit="return confirm('Hapus data ini?')" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition duration-200">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
