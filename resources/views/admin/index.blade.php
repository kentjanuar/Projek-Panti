@extends('base.baseAdmin')

@section('content')

@can('show-admin')
<div class="max-w-6xl mx-auto my-10 grid grid-cols-1 md:grid-cols-3 gap-6">
    <a href="/admin/editAdmin" class="bg-orange-200 border border-orange-300 rounded-lg shadow-lg p-6 hover:bg-orange-300 transition-all text-center">
        <h2 class="text-black text-xl font-bold mb-4">List Admin</h2>
        <p class="text-gray-700">Lihat dan Atur semua Admin</p>
    </a>
    <a href="/admin/children" class="bg-orange-200 border border-orange-300 rounded-lg shadow-lg p-6 hover:bg-orange-300 transition-all text-center">
        <h2 class="text-black text-xl font-bold mb-4">List Anak</h2>
        <p class="text-gray-700">Lihat dan Atur semua Anak</p>
    </a>
    <a href="/admin/gallery" class="bg-orange-200 border border-orange-300 rounded-lg shadow-lg p-6 hover:bg-orange-300 transition-all text-center">
        <h2 class="text-black text-xl font-bold mb-4">List Gallery</h2>
        <p class="text-gray-700">Lihat dan Atur Gallery</p>
    </a>
</div>
@else
<div class="max-w-6xl mx-auto my-10 grid grid-cols-1 md:grid-cols-2 gap-6">
    <a href="/admin/children" class="bg-orange-200 border border-orange-300 rounded-lg shadow-lg p-6 hover:bg-orange-300 transition-all text-center">
        <h2 class="text-black text-xl font-bold mb-4">List Anak</h2>
        <p class="text-gray-700">Lihat dan Atur semua Anak</p>
    </a>
    <a href="/admin/gallery" class="bg-orange-200 border border-orange-300 rounded-lg shadow-lg p-6 hover:bg-orange-300 transition-all text-center">
        <h2 class="text-black text-xl font-bold mb-4">List Gallery</h2>
        <p class="text-gray-700">Lihat dan Atur Gallery</p>
    </a>
</div>
@endcan





@endsection