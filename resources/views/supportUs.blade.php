@extends('base.base')

@section('content')

<section class="bg-white py-12 mb-12">
    <div class="container mx-auto text-center flex flex-col justify-center items-center px-6 md:px-12">
        <h1 class="text-5xl my-10 font-extrabold font-serif text-center">How To Support Us?</h1>
        <p class="text-md text-black mb-10 text-center max-w-3xl mx-auto">
            The following is an overview of the monthly living needs of the 4 orphanage units under the auspices of Yayasan Rumah Bersinar:
        </p>

        <h2 class="text-2xl font-semibold text-black mb-8">Estimated Monthly Needs:</h2>

        <div class="overflow-x-auto w-full">
            <table class="table-auto mx-auto mb-10 w-full md:w-4/5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Need's Classification</th>
                        <th class="px-4 py-2 border">Monthly Expenses (IDR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Educational Needs: Tuition fees, books, uniforms, etc. (IDR 400,000 x 48 children)</td>
                        <td class="border px-4 py-2">IDR 19,200,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">Honor for 8 Caretakers and 2 Admins (IDR 4,000,000 each)</td>
                        <td class="border px-4 py-2">IDR 40,000,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">Food and snacks for 56 people (IDR 25,000 x 56 people x 30 days)</td>
                        <td class="border px-4 py-2">IDR 42,000,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">
                            Electricity bills, average @500,000 IDR x 4 houses = 2,000,000 IDR<br>
                            Water @500,000 IDR x 4 houses = 2,000,000 IDR<br>
                            Internet @200,000 IDR x 4 houses = 800,000 IDR<br>
                            LPG @80,000 IDR x 4 houses = 320,000 IDR<br>
                            Refill Drinking Water @300,000 IDR x 4 houses = 1,200,000 IDR<br>
                            Fuel @400,000 IDR x 4 houses = 1,600,000 IDR<br>
                            Community Fees @350,000 IDR x 4 houses = 1,400,000 IDR
                        </td>
                        <td class="border px-4 py-2">IDR 9,320,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">5</td>
                        <td class="border px-4 py-2">
                            Daily necessities: <br>
                            Detergent @6,000 IDR x 56 people = 336,000 IDR<br>
                            Soap @4,000 IDR x 56 people = 224,000 IDR<br>
                            Shampoo @5,000 IDR x 56 people = 280,000 IDR<br>
                            Floor cleaner @30,000 IDR x 4 houses = 120,000 IDR<br>
                            Dish soap @40,000 IDR x 4 houses = 160,000 IDR<br>
                            Pocket money for children @50,000 IDR x 48 children = 2,400,000 IDR<br>
                            Unforeseen daily needs: Buying medicine, sewing torn clothes, shoe repairs, buying a water faucet, futsal shoes, socks, eating utensils, futsal/football league fees, taekwondo grading tests, etc. @1,000,000 IDR x 4 houses = 4,000,000 IDR<br>
                            Futsal fees for 26 children @50,000 IDR = 1,300,000 IDR<br>
                            Taekwondo for 2 children @100,000 IDR = 200,000 IDR<br>
                            Recreation @50,000 IDR x 54 people = 2,700,000 IDR
                        </td>
                        <td class="border px-4 py-2">IDR 11,720,000</td>
                    </tr>
                    <tr>
                        <td class="border px-4 py-2">6</td>
                        <td class="border px-4 py-2">House Rent & Building Maintenance (IDR 3,000,000 x 4 houses)</td>
                        <td class="border px-4 py-2">IDR 12,000,000</td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border px-4 py-2 font-bold" colspan="2">Estimated Total Cost Per Month</td>
                        <td class="border px-4 py-2 font-bold">IDR 134,240,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="text-md text-black mb-6 text-left max-w-3xl mx-auto">
            Thus, the estimated monthly needs for the life of 48 children and 8 caretakers in 4 orphanage houses under Yayasan Rumah Bersinar are approximately IDR 134,240,000 (USD$ 8,443). Due to our reliance on inconsistent donations, meeting the educational and living needs of the Orphanage children highly depends on the availability of funds. If the needs are unmet, certain items may be reduced or postponed, significantly affecting the children's quality of life and education.
        </p>
      
        <p class="text-md text-black font-semibold mb-6 text-left max-w-3xl mx-auto">
            We need your support to help us maximize the quality of life and education for these children. Please consider making a donation to support the future dreams of children from 3T areas (Frontier, Outermost, and Underdeveloped) in Indonesia.
        </p>

        <h2 class="text-2xl font-semibold text-black mb-4">Donation Information</h2>
        <p class="text-lg text-black mb-4 text-center max-w-3xl mx-auto">
            For donations, you can contact us at:
        </p>
        <p class="text-md text-black mb-4 text-center">
            Email: <a href="mailto:rumahbersinarsby@gmail.com" class="text-blue-500 underline">rumahbersinarsby@gmail.com</a>
        </p>
        <p class="text-lg text-black mb-6 text-center">
            Bank: <strong>Bank Central Asia (BCA)</strong> <br> Yayasan Rumah Bersinar
            <br> 1024677888
        </p>
        <p class="text-lg text-black mb-6 text-center">
            Bank: <strong>Bank Rakyat Indonesia (BRI)</strong> <br> Yayasan Rumah Bersinar
            <br> 202901000346563
        </p>
        
        <p class="text-md text-black mb-6 text-center">Or donate via PayPal:</p>

        <a href="https://www.paypal.me/andriwisnu" class="bg-blue-500 text-white px-6 py-3 rounded mb-3 inline-block">Donate via PayPal</a>
    </div>
</section>

@endsection
