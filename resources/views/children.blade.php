@extends('base.base')

@section('content')

<div class="flex flex-col justify-center items-center min-h-screen bg-gray-100 py-12 px-6 md:px-12">
    <h1 class="mt-12 mb-8 text-4xl font-serif font-semibold text-black text-center">Children</h1>
    @foreach($nama_panti as $orphanages)
        <div class="flex flex-col justify-center items-center w-full mb-10">
            <h3 class="text-2xl font-bold mt-6 text-black text-center">{{ $orphanages['nama'] }}</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-5 w-full max-w-6xl px-4">
                @forelse($orphanages->children as $children)
                    <div class="flex flex-col items-center bg-white p-6 rounded-lg shadow-md relative w-full max-w-xs">
                        <img src="{{ URL::asset('images/children/' . $children['photo'])}}"
                            alt="Foto Anak" class="w-32 h-32 object-cover rounded-md mb-4">

                        <p class="text-center text-black font-semibold">Nama: {{ $children['nama'] }}</p>
                        <p class="text-center text-black font-semibold">Usia: {{ $children['umur'] }}</p>
                        <p class="text-center text-black font-semibold">Tempat, tanggal lahir: {{ $children['tempat_tgl_lahir'] }}</p>
                        <p class="text-center text-black font-semibold">Jenis Kelamin: {{ $children['jenis_kelamin'] }}</p>
                        <p class="text-center text-black font-semibold">Jenjang: {{ $children['jenjang'] }}</p>
                        <p class="text-center text-black font-semibold">Kelas/Semester: {{ $children['kelas'] }}</p>
                    </div>
                @empty
                    <p class="text-center text-gray-500 col-span-3">Belum ada data anak di panti asuhan ini.</p>
                @endforelse
            </div>
        </div>
    @endforeach
</div>
@endsection
