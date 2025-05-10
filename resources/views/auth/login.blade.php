<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-orange-200">

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

<div class="mt-40">
    <div class="container mx-auto my-10 max-w-lg px-6 py-8 bg-white shadow-lg rounded-lg">
    <a href="/">
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Rumah Bersinar Foundation</h2>
    </a>
    <form action="{{ route('login_post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            <div>
                <label for="username" class="ml-3 block text-sm font-semibold text-gray-700">Username</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}" 
                    class="@error('username') is-invalid @enderror px-3 py-3 mt-2 block w-full rounded-md border-gray-300 focus:ring-orange-500 focus:border-orange-500 shadow-sm sm:text-sm" 
                    placeholder="Enter your username" required>
            </div>
            <div>
                <label for="password" class="ml-3 block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password" id="password" 
                    class="@error('password') is-invalid @enderror px-3 py-3 mt-2 block w-full rounded-md border-gray-300 focus:ring-orange-500 focus:border-orange-500 shadow-sm sm:text-sm" 
                    placeholder="Enter your password" required>
            </div>
        </div>
        <div class="mt-6">
            <button type="submit" 
                class="w-full flex justify-center rounded-md bg-orange-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                Login
            </button>
        </div>
    </form>
</div>
</div>



</body>
</html>