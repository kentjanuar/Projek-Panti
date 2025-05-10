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

<section class="bg-white">
    <div class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="text-5xl mt-20 font-extrabold font-serif w-full text-center">Gallery</h1>

        <button onclick="toggleModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mt-5">Add image</button>

        <div id="modal" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg max-w-sm w-full">
                <h2 class="text-2xl font-bold mb-4">Upload New Image</h2>
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700">Title</label>
                        <input type="text" name="title" class="border rounded-lg px-4 py-2 w-full" placeholder="Enter image title" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Choose Image</label>
                        <input type="file" name="src" class="border rounded-lg px-4 py-2 w-full" value="{{ old('src') }}">
                        @error('src')
                            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <button type="button" onclick="toggleModal()" class="bg-gray-500 text-white px-4 py-2 rounded mr-2">Cancel</button>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10 mx-10">
            @foreach ($gallery as $index => $row)
            <div class="flex flex-col items-center bg-white p-4 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-300">
                <img src="{{URL::asset('images/gallery/' . $row['src'])}}" alt="Gallery Image" class="w-full h-64 object-cover mb-4 rounded-lg shadow-md">

                <h2 class="text-xl font-semibold text-gray-900 mt-2 text-center leading-tight">
                    #{{ $index + 1 }} - {{ $row['title'] }}
                </h2>

                <form action="{{ route('gallery.destroy', $row['id']) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this image?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function toggleModal() {
        const modal = document.getElementById('modal');
        modal.classList.toggle('hidden');
    }
</script>

@endsection
