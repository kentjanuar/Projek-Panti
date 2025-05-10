@extends('base.base')

@section('content')



<section class="bg-white">

    <div class="flex flex-col justify-center items-center min-h-screen ">
    <h1 class="text-5xl mt-20 font-extrabold font-serif w-full text-center">Gallery</h1>

        <p class="mt-5 text-md text-black text-center">
            Photos of various activities and events at the orphanages <br> under the Rumah Bersinar Foundation, namely: Rumah Bersinar Orphanage, Saluran<br> Berkat Orphanage,Tuhan Baik Orphanage, andSaluran Kasih Orphanage.
        </p>


        @foreach ($gallery as $row)
        
        <div class="max-w-xl my-10 mx-10 items-start justify-center">
            <img src="{{URL::asset('images/gallery/' . $row['src'])}}" alt="Legal Document">
            <p class="text-center mt-5 text-md text-black">{{ $row['title'] }}</p>
        </div>

        @endforeach

    </div>

   

</section>




@endsection