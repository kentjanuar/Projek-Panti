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

<div class="flex flex-col justify-center items-center min-h-screen px-4">
    <h1 class="mt-10 mb-8 text-4xl font-serif font-semibold text-black">Children</h1>

    @foreach($nama_panti as $orphanages)
        <div class="w-full max-w-4xl mb-8">
            <h3 class="text-2xl font-bold text-black text-center">{{ $orphanages['nama'] }}</h3>
            <div class="flex justify-center items-center mt-4">
                <a href="{{ route('children.create', $orphanages['id']) }}" class="text-2xl font-bold text-green-500 hover:text-green-700">+ Tambah Anak</a>
            </div>
            <table class="min-w-full bg-white border border-gray-300 rounded-md mt-5 mx-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Foto</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Nama</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Usia</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Tempat,<br>Tanggal Lahir</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Jenis Kelamin</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Jenjang</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Kelas/Semester</th>
                        <th class="px-5 py-4 text-center text-gray-600 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($orphanages->children as $children)
                        <tr class="text-center">
                            <td class="px-6 py-8 border-b border-gray-300" style="width: 150px;">
                                <img src="{{ asset('images/children/' . $children['photo'])}}"
                                     alt="Foto Anak" class="w-24 h-24 object-cover rounded-md">
                            </td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['nama'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['umur'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['tempat_tgl_lahir'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['jenis_kelamin'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['jenjang'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">{{ $children['kelas'] }}</td>
                            <td class="px-6 py-8 border-b border-gray-300 text-black font-semibold">
                                <div class="flex justify-center items-center space-x-2">
                                    <a href="{{ route('children.edit', ['orphanage' => $children['orphanage_id'], 'child' => $children['id']]) }}" class="text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('children.destroy', $children['id']) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="px-6 py-4 text-center text-gray-500">Belum ada data anak di panti asuhan ini.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endforeach
</div>

@endsection
