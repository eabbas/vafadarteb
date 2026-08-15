<!DOCTYPE html >
<html lang="fa" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    
</head>
<body>
    
<div class='w-full flex'>

    <div class='w-2/12 h-dvh bg-black flex flex-col justify-between'>
        <div>

            <div class='w-11/12 mx-auto flex flex-col text-center items-center gap-4 mt-4'>
                <a href="#" class='w-full text-white font-bold text-2xl flex text-center items-center justify-center'>
                    <span>medical equipment </span>
                </a>
                <div class='w-full bg-[#FFA76D] h-[2px] my-2'></div>    
            </div>

            <div class='w-11/12 mx-auto flex flex-col gap-3'>

                <a href='{{route("user.profile")}}' class=' flex w-full gap-1 items-center text-center cursor-pointer'>
                    <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
                    <span class='text-white text-base'> صفحه اول </span>
                </a>
                <a href='{{route("user.profile")}}' class=' flex w-full gap-1 items-center text-center cursor-pointer'>
                        <svg class="size-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                    <span class='text-white text-base'> اطلاعات حساب کاربری </span>
                </a>
                <!-- <div class=' flex w-full gap-1 items-center text-center cursor-pointer'>
                    <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                    <span class='text-white text-xs'> سبد خرید </span>
                </div> -->
                @php

                $array=['admin1','admin2'];
                
                @endphp

                @can('admin_dashboard',$array)
                    <div class='element'>
                        <div class=' flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='text-white text-base'> بخش کاربران  </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('user.create')}}">  ایجاد کاربر جدید  </a>
                            </div>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                    <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                    <a href="{{route('user.list')}}"> لیست کاربران  </a>
                            </div>
                            @can('role_permision',['admin1'])
                                <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                        <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                        <a href="{{route('role.create')}}"> ایجاد نقش </a>
                                </div>
                                <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                        <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                        <a href="{{route('role.list')}}"> لیست نقش ها </a>
                                </div>
                                <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                        <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                        <a href="{{route('permision.create')}}"> ایجاد دسترسی </a>
                                </div>
                                <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                        <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                        <a href="{{route('permision.list')}}"> لیست دسترسی ها </a>
                                </div>
                            @endcan
                        </div>
                    </div>
                    <div class='element'>
                        <div class=' flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='text-white text-base'> بخش محصولات  </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('product.create')}}">  ایجاد محصول جدید  </a>
                        </div>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('product.list')}}"> لیست محصولات  </a>
                        </div>
                        </div>
                    </div>
                    <div class='element'>
                        <div class=' flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='text-white text-base'> بخش دسته بندی  </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('category.create')}}">  ایجاد دسته بندی جدید  </a>
                        </div>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('category.list')}}"> لیست دسته بندی ها  </a>
                        </div>
                        </div>
                    </div>
                    <div class='element'>
                        <div class=' flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='text-white text-base'> بخش برند  </div>
                            <svg class='size-4 fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/></svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('brand.create')}}">  ایجاد برند جدید  </a>
                        </div>
                            <div class='w-12/12 justify-start border-1  border-black text-white flex  p-1 text-base gap-1'>
                                <svg class='size-4 fill-white' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M447.3 34.6l30.1 30.1L404.1 160H352V107.9l95.3-73.3zM342.7 192c.4 0 .9 0 1.3 0h64c7.5 0 14.5-3.5 19-9.4l80-104c7.4-9.6 6.5-23.1-2.1-31.6L465 7c-8.5-8.5-22-9.4-31.6-2.1l-104 80c-5.9 4.5-9.4 11.6-9.4 19v64c0 .4 0 .9 0 1.3l-78.9 78.9c4.2 3.2 8.3 6.6 12.1 10.5s7.3 7.9 10.5 12.1L342.7 192zM208 304c17.7 17.7 17.7 46.3 0 64L96 480 32 416 144 304c17.7-17.7 46.3-17.7 64 0zm-86.6-22.6l-112 112c-12.5 12.5-12.5 32.8 0 45.3l64 64c12.5 12.5 32.8 12.5 45.3 0l112-112c30.2-30.2 30.2-79.1 0-109.3s-79.1-30.2-109.3 0z"/></svg>
                                <a href="{{route('brand.list')}}"> لیست برند ها  </a>
                        </div>
                        </div>
                    </div>
                @endcan

            </div>
        </div>

        <div class='w-11/12 mx-auto flex flex-col text-center items-center gap-4 py-5'>
            <a href="{{route('user.logOut')}}" class='w-full text-rose-400 font-bold text-xs flex text-center items-center justify-center'>
                <span > خروج از حساب </span>
            </a>
        </div>

    </div>

    <div class='w-10/12 h-dvh overflow-y-auto'>
        <div class='w-full p-2 flex justify-between mt-1 mb-5 items-center sticky top-0'>
            <div class='w-1/2 text-slate-500 '> داشبورد</div>
            
            <div class='w-10 rounded-xl overflow-hidden'> 
                @if(Auth::user()->path!=null)
                    <img src="{{asset('storage/image/'.Auth::user()->path)}}" alt="">
                @else
                    <div class='w-10 rounded-full border-1 overflow-hidden'><a href="#"><img class='w-full rounded-full' src="{{asset('assets/img/person.png`')}}" alt=""></a></div>
                @endif
            </div>

        </div>
        <div class='w-11/12 bg-white mx-auto '>
            @yield('content')
        </div>
    </div>


</div>





<script>

let element=document.querySelectorAll('.element');
console.log(element)
    element.forEach((el) =>{
        el.children[0].addEventListener('click',()=>{
            if(el.children[1].classList.contains('max-h-0')){
                el.children[1].classList.remove('max-h-0')
                el.children[1].classList.add('max-h-[250px]')
                el.children[0].children[1].classList.remove('rotate-0')
                el.children[0].children[1].classList.add('rotate-180')

            }else{
                el.children[1].classList.remove('max-h-[250px]')
                el.children[1].classList.add('max-h-0')
                el.children[0].children[1].classList.remove('rotate-180')
                el.children[0].children[1].classList.add('rotate-0')
            }
        })
    })


</script>

</body>
</html>