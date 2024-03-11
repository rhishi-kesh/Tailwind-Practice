<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
    <div class="max-w-sm mx-auto p-8 bg-white rounded-xl shadow-md space-y-2">
        <div>
            <img src="{{ asset('me.jpg') }}" alt="" class="h-24 mx-auto rounded-full ring-4 ring-green-400">
        </div>
        <div class="text-center space-y-2">
            <div class="space-y-0.5">
                <p class="text-lg font-black font-semibold">Rhishi Kesh Bhowmik</p>
                <p class="text-gray-500 font-medium">Junior Web Developer</p>
            </div>
            <div>
                <a href="https://github.com/rhishi-kesh" class="px-4 py-1 border border-purple-200 rounded-full text-sm text-purple-600 font-semibold">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>
