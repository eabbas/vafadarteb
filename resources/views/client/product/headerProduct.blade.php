<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
</head>
<body>



    <div class='w-full h-30 bg-green-500 flex justify-between p-5 items-center text-center'>
        <div class='relative bg-white p-2 w-30' onclick="showCart(this)">
            <svg class='size-10 hover:fill-red-600 transition-all duration-300 ' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M16 0C7.2 0 0 7.2 0 16s7.2 16 16 16H53.9c7.6 0 14.2 5.3 15.7 12.8l58.9 288c6.1 29.8 32.3 51.2 62.7 51.2H496c8.8 0 16-7.2 16-16s-7.2-16-16-16H191.2c-15.2 0-28.3-10.7-31.4-25.6L152 288H466.5c29.4 0 55-20 62.1-48.5L570.6 71.8c5-20.2-10.2-39.8-31-39.8H99.1C92.5 13 74.4 0 53.9 0H16zm90.1 64H539.5L497.6 231.8C494 246 481.2 256 466.5 256H145.4L106.1 64zM168 456a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0zm200-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112z"/></svg>
            <div class='cart_list hidden bottom-0 border-3 rounded-xl min-size-30'>
                <div class='absolute top-0 right-3bg-red-600 p-2' onclick="hiddenCart(this)"></div>
                @if(Auth::check())
                    <div class='w-full h-40'>
                        <div class='w-full h-30 overflow-y-auto flex flex-col gap-2 p-1'>
                            @foreach($cart)
                        </div>
                        <div class='grid grid-cols-2 items-center text-center p-1'>
                            <div class='bg-green-200'> ثبت نهایی </div>
                            <div class='bg-red-200'> حذف همه </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <h3 class='text-3xl font-bold'> هدر محصول </h3>
        <h3 class='text-xl font-bold text-white'>{{Auth::user()->name}} </h3>
    </div>

    @yield('content')
