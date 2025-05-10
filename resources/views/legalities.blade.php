@extends('base.base')



@section('content')


<section class="bg-white">

    <div class="flex flex-col justify-center items-center min-h-screen">
        <h1 class="mt-2 text-4xl font-semibold text-black">Legalities</h1>

        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/legalities/menkumham-akte-perubahan-695x1024.jpg')}}" alt="Legal Document">
        </div>
        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/legalities/menkumham-akte-perubahan-2-susuan-pengurus-648x1024.jpg')}}" alt="Legal Document">

        </div>
        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/legalities/Surat-Tanda-Pendaftaran-Pemkot-Surabaya.jpg')}}" alt="Legal Document">
        </div>
        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/legalities/IMG-20210830-WA0043-724x1024.jpg')}}" alt="Legal Document">
        </div>
        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/legalities/NPWP.jpg')}}" alt="Legal Document">
        </div>
    </div>
</section>


@endsection