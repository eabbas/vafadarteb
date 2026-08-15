<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquary.js')}}"></script>
</head>
<body>
    <div class='w-full py-5 flex gap-1'>

        <form action="{{route('user.login')}}" method="post" class='w-4/12 mx-auto border-3 border-black bg-black/40 flex flex-col p-3 gap-4 items-center text-center'>
            @csrf
            <h3 class='p-5 font-bold border-2 border-red-300 rounded-xl'> صفحه ورود </h3>
            <input type="tell" name="phoneNumber" placeholder="phoneNumber" class='border-1 border-white rounded-xl bg-blue-200 p-2'>
            <input type="number" name="password" placeholder="password" class='border-1 border-white rounded-xl bg-orange-200 p-2'>
            <button class='p-5 font-bold border-2 border-green-300 rounded-xl'> ورود </button>
        </form>

        <form action="{{route('user.store')}}" method="post" class='w-4/12 mx-auto border-3 border-black bg-black/40 flex flex-col p-3 gap-4 items-center text-center'>
            @csrf
            <h3 class='p-5 font-bold border-2 border-red-300 rounded-xl'> صفحه ثبت نام </h3>
            <input type="text" name="name" placeholder="name" class='border-1 border-white rounded-xl bg-yellow-200 p-2'>
            <input type="text" name="family" placeholder="family" class='border-1 border-white rounded-xl bg-red-200 p-2'>
            <input type="tell" name="phoneNumber" placeholder="phoneNumber" class='border-1 border-white rounded-xl bg-blue-200 p-2'>
            <input type="text" name="email" placeholder="email" class='border-1 border-white rounded-xl bg-pink-200 p-2'>
            <input type="number" name="password" placeholder="password" class='border-1 border-white rounded-xl bg-orange-200 p-2'>
            <button class='p-5 font-bold border-2 border-green-300 rounded-xl'> ثبت نام </button>
        </form>
        
    </div>
</body>
</html>