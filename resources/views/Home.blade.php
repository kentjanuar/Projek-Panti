@extends('base.base')

@section('content')

<section class="bg-white dark:bg-gray-900">
    <div class="text-center lg:py-16 lg:px-12 mb-10">
        <br>
        <br>
        <h1 class="mb-4 mt-10 text-4xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">A commitment to empowerment and humanity</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Engaged in social welfare to improve the quality of life and education of children from 3T areas (Underdeveloped, Frontier, and Outermost) in Indonesia by establishing orphanages with a foster care system</p>
        <div class="flex justify-center">
            <img class="my-10 rounded-2xl w-3/4" src="{{URL::asset('images/YRB.jpg')}}" alt="">
        </div>
    </div>
    <div class="bg-gray-100 text-center lg:py-16 lg:px-12 my-10">
        <h1 class="mb-4 mt-20 text-4xl tracking-tight leading-none text-gray-900 md:text-3xl lg:text-4xl dark:text-white">4 orphanages under Rumah Bersinar Foundation</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">“We adopt a foster care system by grouping our foster children into family-like clusters of about 12 to 13 children under the care of a husband-wife couple who live with them 24 hours a day.”</p>
        <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 px-6">
    @foreach ($panti_list as $panti)
    <div class="bg-white shadow-lg rounded-lg p-6">
        <h3 class="mt-3 text-lg font-semibold text-gray-800">{{ $panti['nama'] }}</h3>
        <p class="mt-3 text-sm text-gray-600">{{ $panti['alamat'] }}</p>
        <div class="mt-5">
            <iframe 
                src="{{ $panti['google_maps'] }}" 
                width="100%" 
                height="250" 
                style="border:0; border-radius: 8px;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
    @endforeach
</div>
</section>

@endsection