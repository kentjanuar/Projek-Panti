@extends('base.baseAdmin')

@section('content')

@if(session('error'))
    <div id="error-alert" class="fixed top-0 left-1/2 transform -translate-x-1/2 mt-8 w-4/5 sm:w-1/3 bg-red-100 border-t-4 border-red-500 text-red-700 px-6 py-4 rounded-lg shadow-md animate__animated animate__fadeIn">
        <div class="flex justify-between items-center">
            <span class="text-lg font-semibold">{{ session('error') }}</span>
            <button onclick="document.getElementById('error-alert').style.display='none'" class="text-red-700 hover:text-red-900 font-bold ml-4">
                &times;
            </button>
        </div>
    </div>
@endif

<div class="my-20 flex flex-col justify-center items-center min-h-screen">
    <h1 class="text-2xl font-bold mb-5">
        {{ isset($child) ? 'Edit Child' : 'Add New Child' }}
    </h1>

    <form action="{{ isset($child) ? route('children.update', ['orphanage' => $orphanage->id, 'child' => $child->id]) : route('children.store', $orphanage->id) }}"
        method="POST" enctype="multipart/form-data" class="w-full max-w-lg bg-white p-8 rounded shadow-md">
        @csrf
        @if(isset($child))
        @method('PUT')
        @endif

        <div class="mb-4">
            <label for="photo" class="block text-gray-700 font-bold mb-2">Photo</label>
            <input type="file" name="photo" id="photo" class="w-full p-2 border rounded">
            @error('photo')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="orphanage_name" class="block text-gray-700 font-bold mb-2">Orphanage Name</label>
            <input type="text" name="orphanage_name" id="orphanage_name" class="w-full p-2 border rounded"
            value="{{ old('orphanage_name', $orphanage->nama ?? '') }}" required readonly>
            @error('orphanage_name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-bold mb-2">Nama</label>
            <input type="text" name="nama" id="nama" class="w-full p-2 border rounded"
                value="{{ old('nama', $child->nama ?? '') }}" required>
            @error('nama')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="tempat_tgl_lahir" class="block text-gray-700 font-bold mb-2">Tempat, Tanggal Lahir</label>
            <input type="text" name="tempat_tgl_lahir" id="tempat_tgl_lahir" class="w-full p-2 border rounded"
                value="{{ old('tempat_tgl_lahir', $child->tempat_tgl_lahir ?? '') }}" required>
            @error('tempat_tgl_lahir')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="umur" class="block text-gray-700 font-bold mb-2">Umur</label>
            <input type="text" name="umur" id="umur" class="w-full p-2 border rounded"
                value="{{ old('umur', $child->umur ?? '') }}" required>
            @error('umur')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="jenis_kelamin" class="block text-gray-700 font-bold mb-2">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="w-full p-2 border rounded" required>
                <option value="Laki-laki" {{ old('jenis_kelamin', $child->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $child->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="jenjang" class="block text-gray-700 font-bold mb-2">Jenjang</label>
            <select name="jenjang" id="jenjang" class="w-full p-2 border rounded" required>
                <option value="" disabled selected>Pilih Jenjang</option>
                <option value="Pra-Sekolah" {{ old('jenjang', $child->jenjang ?? '') == 'Pra-Sekolah' ? 'selected' : '' }}>Pra-Sekolah</option>
                <option value="SD" {{ old('jenjang', $child->jenjang ?? '') == 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ old('jenjang', $child->jenjang ?? '') == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA" {{ old('jenjang', $child->jenjang ?? '') == 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="SMK" {{ old('jenjang', $child->jenjang ?? '') == 'SMK' ? 'selected' : '' }}>SMK</option>
                <option value="Kuliah/Perguruan Tinggi" {{ old('jenjang', $child->jenjang ?? '') == 'Kuliah/Perguruan Tinggi' ? 'selected' : '' }}>Kuliah/Perguruan Tinggi</option>
            </select>
            @error('jenjang')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="kelas" class="block text-gray-700 font-bold mb-2">Kelas</label>
            <select name="kelas" id="kelas" class="w-full p-2 border rounded" required>
                <option value="" disabled selected>Pilih Kelas</option>
            </select>
            @error('kelas')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white font-bold py-2 px-4 rounded">
                {{ isset($child) ? 'Update' : 'Save' }}
            </button>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const jenjangSelect = document.getElementById('jenjang');
        const kelasSelect = document.getElementById('kelas');

        function populateKelasDropdown(jenjangValue) {
            let kelasOptions = [];

            if (jenjangValue === 'SD') {
                kelasOptions = [1, 2, 3, 4, 5, 6];
            } else if (jenjangValue === 'SMP') {
                kelasOptions = [7, 8, 9];
            } else if (jenjangValue === 'SMA' || jenjangValue === 'SMK') {
                kelasOptions = [10, 11, 12];
            } else if (jenjangValue === 'Kuliah/Perguruan Tinggi') {
                kelasOptions = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
            } else if (jenjangValue === 'Pra-Sekolah') {
                kelasOptions = [""];
            }

            kelasSelect.innerHTML = `<option value="" disabled selected>Pilih Kelas</option>`;

            kelasOptions.forEach(option => {
                const opt = document.createElement('option');
                opt.value = option;

                if (option === "") {
                    opt.textContent = '-';
                } else {
                    opt.textContent = option;
                }

                if (option == '{{ old('kelas', $child->kelas ?? '') }}') {
                    opt.selected = true;
                }

                kelasSelect.appendChild(opt);
            });
        }

        jenjangSelect.addEventListener('change', function () {
            populateKelasDropdown(jenjangSelect.value);
        });

        if (jenjangSelect.value) {
            populateKelasDropdown(jenjangSelect.value);
        }
    });
</script>

@endsection
