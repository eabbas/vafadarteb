<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تجهیزات پزشکی</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>

<body>


    <header class="relative min-h-screen">
        <!-- عکس پس زمینه -->
        <img src="{{asset('asstes\img\header\13.jpg')}}" alt=""
            class="absolute w-full h-full object-cover">
        <!-- لای تیره -->
        <div class="absolute w-full flex justify-center">
            <div class="flex w-19/20 bg-[#ffffff]/70 justify-center py-5 mt-5 head">
                <div class="w-19/20 flex justify-between">
                    <div class="flex items-center gap-10">
                        <img src="{{asset('asstes\img\header\logo.png')}}" alt=""
                            class="w-25 sm:w-30 md:w-40">
                        <ul class="flex gap-7 xl:gap-9 max-lg:hidden h-full items-center">
                            <li class="lable-1">
                                <a href="">
                                    <span class="text-[#03a297] font-bold text-[16px]">خانه</span>
                                </a>
                                <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                    <div class="w-full h-2 bg-green-400"></div>
                                    <ul class="w-full h-38 flex flex-col items-center justify-center">
                                        <li>خانه</li>
                                        <li>خانه</li>
                                        <li>خانه</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lable-1">
                                <a href="">
                                    <span class="text-[#023350] text-[16px] font-bold">درباره ما</span>
                                </a>
                                <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                    <div class="w-full h-2 bg-green-400"></div>
                                    <ul class="w-full h-38 flex flex-col items-center justify-center">
                                        <li>درباره ما</li>
                                        <li>درباره ما</li>
                                        <li>درباره ما</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lable-1">
                                <a href="">
                                    <span class="text-[#023350] text-[16px] font-bold">محصولات</span>
                                </a>
                                <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                    <div class="w-full h-2 bg-green-400"></div>
                                    <ul class="w-full h-38 flex flex-col items-center justify-center">
                                        <li>محصولات</li>
                                        <li>محصولات</li>
                                        <li>محصولات</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lable-1">
                                <a href="">
                                    <span class="text-[#023350] text-[16px] font-bold">برند ها</span>
                                </a>
                                <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                    <div class="w-full h-2 bg-green-400"></div>
                                    <ul class="w-full h-38 flex flex-col items-center justify-center">
                                        <li>خانه</li>
                                        <li>خانه</li>
                                        <li>خانه</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="lable-1">
                                <a href="">
                                    <span class="text-[#023350] text-[16px] font-bold">اخبار و مقالات</span>
                                </a>
                                <div class="lable-1-1 w-56 h-40 bg-white absolute mt-4">
                                    <div class="w-full h-2 bg-green-400"></div>
                                    <ul class="w-full h-38 flex flex-col items-center justify-center">
                                        <li>خانه</li>
                                        <li>خانه</li>
                                        <li>خانه</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="">
                                    <span class="text-[#023350] text-[16px] font-bold">تماس با ما</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex gap-7 xl:gap-11">
                        <div class="flex gap-3 sm:gap-5 h-full items-center">
                            <div class="flex h-full items-center">
                                <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>ّ
                            </div>
                            <div class="w-25 h-10 bg-[#c2c2c2]/70 rounded-lg max-lg:hidden head">
                                <a href="" class="flex justify-center h-full items-center">
                                    <span>خرید انلاین</span>
                                </a>
                            </div>
                            <div class="flex h-full items-center">
                                <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" viewBox="0 0 24 24">
                                    <circle cx="9" cy="21" r="1" />
                                    <circle cx="20" cy="21" r="1" />
                                    <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" />
                                </svg>
                            </div>
                            <div onclick="hambarger_menue('open')">
                                <svg class="w-6 h-8 hidden max-lg:block" xmlns="http://www.w3.org/2000/svg" width="10"
                                    height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round">
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <line x1="3" y1="12" x2="21" y2="12" />
                                    <line x1="3" y1="18" x2="21" y2="18" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- محتوای هدر -->
        <div class="absolute top-1/4 sm:left-20 left-10 translate-y-1/4 z-10 max-w-xl flex flex-col items-center">
            <h1 class="mt-6 text-2xl sm:text-3xl md:text-4xl lg:text-5xl lg:leading-15 text-center font-bold">
                تجهیزات پزشکی
                <br>
                با کیفیت برای مراکز درمانی
            </h1>
            <p
                class="mt-6 text-[11px] sm:text-[13px] md:text-[15px] lg:text-[21px] xl:text-[20px] text-center font-bold">
                از فشارسنج. اکسیژن ساز . ویلچر . نیولایزر. دستگاه قندخون.
                <br>
                و صد‌ها محصولات دیگر با بهترین قیمت
            </p>
            <a href="prodact.html">
                <button class="py-3 px-4 bg-[#0a9a73] mt-19 rounded-lg flex gap-5 head">
                    <span>مشاهده محصولات</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-4 transition-all duration-200 delay-100 fill-[#04C37F] group-hover:fill-[#FFFFFF]"
                        viewBox="0 0 448 512">
                        <path
                            d="M7.4 273.4C2.7 268.8 0 262.6 0 256s2.7-12.8 7.4-17.4l176-168c9.6-9.2 24.8-8.8 33.9 .8s8.8 24.8-.8 33.9L83.9 232 424 232c13.3 0 24 10.7 24 24s-10.7 24-24 24L83.9 280 216.6 406.6c9.6 9.2 9.9 24.3 .8 33.9s-24.3 9.9-33.9 .8l-176-168z" />
                    </svg>
                </button>
            </a>
        </div>
    </header>
    <!-- منوهنبرگر -->
    <section>
        <div class="w-full h-[100vh] fixed top-0 right-0 bg-white/40 overflow-hidden z-100 hidden " id="naser">
            <div class="w-[300px] h-full top-0 right-0 bg-white z-200 flex flex-col gap-15">
                <div class="w-full h-25 flex border-b justify-between items-center">
                    <div>
                        <img src="{{asset('asstes/img/header/logo.png')}}" alt="" class="w-30 h-full">
                    </div>
                    <div onclick="hambarger_menue('close')">
                        <svg width="45px" height="45px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 13.4142L16.9497 18.364L18.364 16.9498L13.4142 12L18.364 7.05026L16.9497 5.63605L12 10.5858L7.05025 5.63605L5.63604 7.05026L10.5858 12L5.63604 16.9498L7.05025 18.364L12 13.4142Z"
                                fill="#000000" />
                        </svg>
                    </div>
                </div>
                <div class="w-19/20 mx-auto h-auto">
                    <ul class="flex flex-col gap-5">
                        <li class="flex justify-between">
                            <div>
                                <span>خانه</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>خانه</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>درباره ما</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>صفحات</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>حساب</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>دسته بندی</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>فروشگاه</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>وبلاگ</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                        <li class="flex justify-between">
                            <div>
                                <span>تماس</span>
                            </div>
                            <div>
                                <svg width="20px" height="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: none;
                                                stroke: #000000;
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 2px;
                                            }
                                        </style>
                                    </defs>
                                    <title />
                                    <g id="chevron-bottom">
                                        <line class="cls-1" x1="16" x2="7" y1="20.5" y2="11.5" />
                                        <line class="cls-1" x1="25" x2="16" y1="11.5" y2="20.5" />
                                    </g>
                                </svg>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full h-full" onclick="hambarger_menue('close')"></div>
        </div>
    </section>
    <!-- سلایدر -->
    <section>
        <div class="w-11/12 h-30 bg-white mx-auto flex overflow-x-auto mt-20">
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M272.2 696.2m-59.3 0a59.3 59.3 0 1 0 118.6 0 59.3 59.3 0 1 0-118.6 0Z"
                            fill="#F9C0C0" />
                        <path
                            d="M392.1 485.4l-62.5-253v-0.1c-0.6-3-1.4-6.3-2.2-9.8-7.2-31.8-18.1-79.8 7.2-111.5 15.8-19.7 43.3-29.7 81.9-29.7v15c-33.8 0-57.4 8.1-70.2 24.1-20.8 26.1-10.9 69.8-4.3 98.8 0.8 3.5 1.6 6.8 2.2 9.9l62.4 252.8-14.5 3.5zM731.5 485.1l-14.6-3.6 62.4-252.4c0.9-4.6 2-9.5 3.1-14.6 6.6-29.7 15.6-70.4-3.8-94.6-12.6-15.7-36.6-23.7-71.5-23.7v-15c40.2 0 67.4 9.6 83.2 29.3 23.9 29.8 14 74.5 6.8 107.2-1.1 5.2-2.2 10-3.1 14.4l-0.1 0.4-62.4 252.6zM645.6 952.4c-22.4 0-44.1-7.9-61.5-22.6-21.3-18.1-33.6-44.6-33.6-72.6l0.5-254.6h21.5l-0.2 84.8h188.1c20.1 0 38.4 8.4 51.4 23.8 12.4 14.5 19.3 34.1 19.5 55 0.4 39.7-20.4 82.6-58.6 120.8-33.8 33.8-76.6 58.4-111.7 64.1-5.1 0.9-10.2 1.3-15.4 1.3zM559 610.6l-0.4 246.6c0 25.6 11.2 49.9 30.7 66.5s45.2 23.7 70.5 19.6c33.5-5.5 74.7-29.2 107.4-61.9 36.7-36.7 56.7-77.5 56.3-115-0.2-19.1-6.5-36.8-17.6-49.9-11.7-13.7-27.4-21-45.3-21H572.4v5.5h180.8c40.8 0 63.4 24.3 63.7 68.4 0.2 33.1-18.8 71.6-51.9 105.7-30.2 31-68.7 54.6-100.5 61.5-26.1 5.7-50.6 0.5-69.1-14.4-19.9-16-31.2-42.4-31.2-72.3l0.4-239.3H559z m13.4 98.4l-0.3 140.9c0 27.5 10.3 51.5 28.2 66 16.6 13.4 38.7 17.9 62.3 12.8 30.4-6.6 67.4-29.3 96.5-59.2 31.7-32.6 49.8-69.1 49.7-100.1-0.1-27.6-9.9-60.4-55.7-60.4H572.4z"
                            fill="#999999" />
                        <path
                            d="M557.3 709h-216v-21.5h215.8v8H349.3v5.5h208zM272.2 728.3c-17.7 0-32.1-14.4-32.1-32.1 0-17.7 14.4-32.1 32.1-32.1s32.1 14.4 32.1 32.1c0.1 17.7-14.3 32.1-32.1 32.1z m0-56.3c-13.3 0-24.1 10.8-24.1 24.1s10.8 24.1 24.1 24.1 24.1-10.8 24.1-24.1c0.1-13.2-10.8-24.1-24.1-24.1z"
                            fill="#999999" />
                        <path
                            d="M272.2 780.7c-46.6 0-84.5-37.9-84.5-84.5s37.9-84.5 84.5-84.5 84.5 37.9 84.5 84.5c0.1 46.6-37.8 84.5-84.5 84.5z m0-154.1c-38.3 0-69.5 31.2-69.5 69.5s31.2 69.5 69.5 69.5 69.5-31.2 69.5-69.5-31.1-69.5-69.5-69.5z"
                            fill="#999999" />
                        <path d="M581.4 615.7h-38.9v-52.5h38.9v52.5z m-24-15h8.9v-22.5h-8.9v22.5z" fill="#CE0202" />
                        <path
                            d="M657.1 570H466.4c-37.2 0-63.8-25-78.9-74.3v-0.2l-2-7.9c-0.6-2.4-0.1-4.9 1.4-6.9s3.8-3.1 6.3-3.1h14.5c3 0 5.6 2 6.4 4.8 11 37.9 24.6 59.8 62 59.8h171.5c36.6 0 49.2-19.3 62.3-59.9 0.9-2.8 3.5-4.7 6.4-4.7h14.4c2.5 0 4.8 1.1 6.3 3.1s2 4.5 1.4 6.9l-2 7.6c-14.1 48.3-42.2 74.8-79.3 74.8z m-261.9-76.5c14.2 46.1 37.5 68.6 71.2 68.6h190.7c18 0 33.6-6.9 46.3-20.6 10.7-11.6 19.5-28.3 25.3-48.3l1.9-7.4h-13.5c-13.9 42.8-28.6 64.5-69.6 64.5H476.1c-41.7 0-58-25.8-69.4-64.5h-13.6l2.1 7.7zM494.2 86.6V91h-72v-4.4h72m3-15h-78c-6.6 0-12 5.4-12 12V94c0 6.6 5.4 12 12 12h78c6.6 0 12-5.4 12-12V83.6c0-6.6-5.4-12-12-12zM702.4 86.6V91h-72v-4.4h72m3-15h-78c-6.6 0-12 5.4-12 12V94c0 6.6 5.4 12 12 12h78c6.6 0 12-5.4 12-12V83.6c0-6.6-5.4-12-12-12z"
                            fill="#CE0202" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M764.6 341.5c0 127.9-221.5 343.7-221.5 343.7S321.7 469.4 321.7 341.5 420.9 110 543.2 110c122.3-0.1 221.4 103.6 221.4 231.5z"
                            fill="#F9C0C0" />
                        <path
                            d="M554 282v-16.9c0-2.9-2.4-5.3-5.3-5.3h-51.3c-2.9 0-5.3 2.4-5.3 5.3v27.3c0 9.8-8 17.8-17.8 17.8h-26.4c-2.9 0-5.3 2.4-5.3 5.3v51.3c0 2.9 2.4 5.3 5.3 5.3h15.5c4.7 0 12 3.8 12 8.4l0.9 35.1c0 8.7 2.6 15.7 11.3 15.7h11.1c3.8 0 7.2 1.3 9.9-0.9h37.6c4.4 0 8-3.6 8-8v-33.7c0-9.2 7.5-16.7 16.7-16.7h34.6c2.9 0 5.3-2.4 5.3-5.3v-60c0-6.5-5.2-11.7-11.7-11.7h-31.7c-7.5 0.2-13.4-5.7-13.4-13z"
                            fill="#FFFFFF" />
                        <path
                            d="M543 439.2h-55.6c-4.2 0-8.2-1.7-11.2-4.7s-4.7-7-4.7-11.2v-35.7c0-2.1-0.8-4.1-2.3-5.6s-3.5-2.3-5.6-2.3h-35.7c-8.8 0-15.9-7.1-15.9-15.9v-55.6c0-4.2 1.7-8.2 4.7-11.2s7-4.7 11.2-4.7h0.7v8h-0.7c-2.1 0-4.1 0.8-5.6 2.3s-2.3 3.5-2.3 5.6v55.6c0 4.4 3.5 7.9 7.9 7.9h35.7c4.3 0 8.2 1.7 11.3 4.7 3 3 4.7 7 4.7 11.3v35.7c0 4.4 3.5 7.9 7.9 7.9h55.6c4.4 0 7.9-3.5 7.9-7.9v-35.7c0-4.3 1.7-8.2 4.7-11.3 3-3 7-4.7 11.3-4.7h35.7c2.1 0 4.1-0.8 5.6-2.3s2.3-3.5 2.3-5.6v-55.6c0-4.4-3.5-7.9-7.9-7.9H567c-8.8 0-15.9-7.1-15.9-15.9v-35.7c0-4.4-3.5-7.9-7.9-7.9h-55.6c-4.4 0-7.9 3.5-7.9 7.9v35.7c0 4.3-1.7 8.2-4.7 11.3-3 3-7 4.7-11.3 4.7h-8.9v-8h8.9c2.1 0 4.1-0.8 5.6-2.3s2.3-3.5 2.3-5.6v-35.7c0-8.8 7.1-15.9 15.9-15.9h55.6c8.8 0 15.9 7.1 15.9 15.9v35.7c0 4.4 3.6 7.9 7.9 7.9h35.7c8.8 0 15.9 7.1 15.9 15.9v55.6c0 4.2-1.7 8.2-4.7 11.2s-7 4.7-11.2 4.7h-35.7c-2.1 0-4.1 0.8-5.6 2.3s-2.3 3.5-2.3 5.6v35.7c-0.1 8.6-7.3 15.8-16 15.8z"
                            fill="#CE0202" />
                        <path
                            d="M516.4 713l-5.1-4.8c-0.6-0.6-63.1-59-124.8-133.5C303.1 473.8 260.7 393 260.7 334.3c0-68.3 26.6-132.5 74.9-180.8s112.5-74.9 180.8-74.9c68.3 0 132.5 26.6 180.8 74.9s74.9 112.5 74.9 180.8c0 58.6-42.3 139.5-125.8 240.4-61.6 74.5-124.1 132.9-124.8 133.5l-5.1 4.8z m0-619.4c-64.3 0-124.7 25-170.2 70.5S275.7 270 275.7 334.3c0 68.5 66.5 163.3 122.3 230.7 50.9 61.5 102.3 112 118.4 127.4C532.5 677 584 626.5 634.9 565c55.8-67.4 122.3-162.2 122.3-230.7 0-64.3-25-124.7-70.5-170.2s-106-70.5-170.3-70.5z"
                            fill="#999999" />
                        <path
                            d="M516 943.8l-224.9-56.6-219.7 15.5 145.2-250.9 120.4-16 2 14.9-113.1 15-127.4 220 193.9-13.6 223.5 56.2 207.3-56.2 201.3 12-122.1-218.4-110.6-15 2-14.9 118.1 16L951 900.7l-226.3-13.5z"
                            fill="#999999" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M557.523 500.875l12.665-29.713 56.666 24.153-12.665 29.713z" fill="#F9C0C0" />
                        <path
                            d="M628.1 496.8l-53.7-22.9c-6.1-2.6-8.9-9.7-6.3-15.7l105.6-247.8c2.6-6.1 9.7-8.9 15.7-6.3l65.3 27.8c6.1 2.6 8.9 9.7 6.3 15.7L660.4 483.8c-5.3 12.4-19.8 18.3-32.3 13z"
                            fill="#F9C0C0" />
                        <path
                            d="M712.2 691.8H472.1c-5.5 0-10-4.5-10-10v-16.4c0-5.5 4.5-10 10-10h240.1c5.5 0 10 4.5 10 10v16.4c0 5.6-4.5 10-10 10z m-240.1-28.3c-1.1 0-2 0.9-2 2v16.4c0 1.1 0.9 2 2 2h240.1c1.1 0 2-0.9 2-2v-16.4c0-1.1-0.9-2-2-2H472.1z"
                            fill="#CE0202" />
                        <path d="M563.872 418.964l3.161-7.349 101.322 43.58-3.161 7.349z" fill="#FFFFFF" />
                        <path d="M563.307 469.962l3.137-7.359 64.025 27.29-3.136 7.36z" fill="#999999" />
                        <path
                            d="M683.8 937.4H358.2c-9.9 0-18-8.1-18-18v-4l42.2-28.3c2.9-2.9 6.8-4.6 10.9-4.6h84.4V782h-9.1c-63.7-0.1-123.7-25.1-169-70.5s-70.3-105.4-70.3-169.1 25-123.9 70.4-169.2 105.5-70.4 169.2-70.4h132.5l44.9-108c8.4-19.9 31.3-29.2 51.1-20.8l48.4 20.4c19.8 8.4 29.2 31.3 20.8 51.1l-98.5 235.4c-6.1 14.4-20.2 23.7-35.5 23.9L618 539.4l-78.5-33.1 14.8-35.2c-9.7-11.1-12.4-26.9-6.6-40.8l11-26.2h-80.5c-36.8 0-71.5 14.4-97.7 40.7-26.2 26.2-40.7 60.9-40.7 97.7v0.3c0 36.8 14.4 71.5 40.7 97.7 26.2 26.2 60.9 40.7 97.7 40.7h241.7c27.3 0 50.4 22.8 50.4 49.8v1.8c0 27.3-22.2 49.5-49.5 49.5H564.2v100.5h84.4c4.1 0 8 1.6 10.9 4.6l42.3 28.3v4c0 9.7-8.1 17.7-18 17.7zM357 922.2c0.4 0.2 0.8 0.2 1.2 0.2h325.6c0.4 0 0.8-0.1 1.2-0.2l-35.4-23.8-0.7-0.8c0-0.1-0.1-0.1-0.2-0.1h-99.4V767H721c19 0 34.5-15.5 34.5-34.5v-1.8c0-18.9-16.2-34.8-35.4-34.8H478.4c-40.8 0-79.3-16-108.3-45s-45-67.5-45-108.3v-0.3c0-40.8 16-79.3 45-108.3s67.5-45 108.3-45h103.1l-19.8 47c-4.1 9.6-1.4 20.7 6.5 27.6l4.1 3.6-13.1 31.1 50.9 21.4 13-30.9 5.7 0.8c10.8 1.5 21.3-4.4 25.5-14.4l98.5-235.4c2.5-5.9 2.5-12.4 0.1-18.4s-7-10.6-12.9-13.1l-48.4-20.4c-5.9-2.5-12.4-2.5-18.4-0.1s-10.6 7-13.1 12.9L611.4 318H469.1c-59.7 0-116.1 23.4-158.6 66s-66 98.9-66 158.6 23.4 116 65.9 158.5 98.8 66 158.5 66.1h24v130.5h-99.4c-0.1 0-0.2 0-0.3 0.1l-0.7 0.8-35.5 23.6z"
                            fill="#999999" />
                        <path
                            d="M756.4 211.6l-73.1-31 20.3-48 8.7 3.7 14.8-35c3.1-7.4 11.6-10.8 19-7.7l29 12.3c3.6 1.5 6.3 4.3 7.8 7.9s1.4 7.5-0.1 11.1l-14.8 35 8.7 3.7-20.3 48z m-62.6-35.2l58.4 24.7 14.1-33.3-8.7-3.7 18-42.4c0.7-1.6 0.7-3.4 0-5s-1.9-2.9-3.5-3.5l-29-12.3c-3.3-1.4-7.1 0.1-8.5 3.5l-17.9 42.4-8.7-3.7-14.2 33.3z"
                            fill="#999999" />
                        <path
                            d="M712.951 145.293l3.121-7.366 6.814 2.886-3.12 7.367zM732.23 153.49l3.12-7.366 28.085 11.898-3.12 7.366z"
                            fill="#999999" />
                        <path d="M477.7 672.1H714v8.4H477.7z" fill="#F9C0C0" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M143.8 500.4h156.5l58.4-120.3 92.9 363.1L494.7 497h48.9l34 86.1 43.6-181.7 59.5 246.5 38.6-154.1h191.9s40.5-167.7-48.9-244.1c-107.7-92.1-204.5-56.6-298.3 38l-50.1 53.5-45.4-46.7S389.1 190 292.6 204.6c-89.1 13.5-205 120.5-148.8 295.8z"
                            fill="#F9C0C0" />
                        <path
                            d="M513.7 903.1l-4.3-2.5c-0.3-0.2-39.2-22.4-95.8-63.6-52.2-37.9-130.6-100.3-208-181.8-35.2-37-62.3-75.9-80.7-115.5l13.6-6.3c17.7 38.1 43.9 75.7 77.9 111.5 134.9 142 274.5 227.4 297.2 240.8 22.9-13.6 162.5-99 297.2-240.8 36.7-38.7 64.3-79.2 81.9-120.5 15.8-36.8 23.7-74.3 23.5-111.3-0.2-62.8-24.4-124.2-66.4-168.4-35.9-37.8-83.7-58.6-134.7-58.6s-98.9 20.8-134.7 58.6l-66.8 70.4-66.8-70.4c-35.9-37.8-83.7-58.6-134.7-58.6s-98.9 20.8-134.7 58.6c-25.5 26.8-44.8 60.4-55.8 97.1-12.7 42.3-14 86.3-3.9 131l-14.6 3.3c-10.7-47.2-9.3-93.8 4.2-138.6 11.7-39 32.2-74.6 59.3-103.1 38.7-40.8 90.4-63.2 145.6-63.2s106.9 22.5 145.6 63.2l55.9 58.9 55.9-58.9c38.7-40.8 90.4-63.2 145.6-63.2s106.9 22.5 145.6 63.2c44.5 46.9 70.2 112 70.5 178.6 0.1 39.1-8.2 78.6-24.7 117.3-18.4 42.9-46.9 84.9-84.9 124.9-77.4 81.5-155.9 143.9-208 181.8-56.6 41.2-95.5 63.4-95.9 63.6l-4.1 2.5z"
                            fill="#999999" />
                        <path
                            d="M454.1 769.3l-96.6-377.4-54.7 116.5H76.6v-8h221.1l62.1-132.1 92.6 362L491.3 493h54.9l30.4 76.8 44.5-185.6 59.6 246.9 35.4-141.3h235v8H722.3l-41.8 166.8-59.4-246.2-42.6 177.9-37.7-95.3H498z"
                            fill="#CE0202" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M404.1 666.5m-215.3 0a215.3 215.3 0 1 0 430.6 0 215.3 215.3 0 1 0-430.6 0Z"
                            fill="#F9C0C0" />
                        <path
                            d="M395.3 888.2c-61.5 0-119.3-23.9-162.7-67.4-43.5-43.5-67.4-101.3-67.4-162.7s23.9-119.3 67.4-162.7c43.5-43.5 101.3-67.4 162.7-67.4s119.3 23.9 162.7 67.4c43.5 43.5 67.4 101.3 67.4 162.7S601.5 777.4 558 820.8c-43.4 43.5-101.2 67.4-162.7 67.4z m0-452.3c-59.3 0-115.1 23.1-157.1 65.1s-65.1 97.7-65.1 157.1 23.1 115.1 65.1 157.1 97.7 65.1 157.1 65.1 115.1-23.1 157.1-65.1 65.1-97.7 65.1-157.1S594.4 543 552.4 501c-41.9-42-97.7-65.1-157.1-65.1z"
                            fill="#999999" />
                        <path d="M395.3 658.1m-41.1 0a41.1 41.1 0 1 0 82.2 0 41.1 41.1 0 1 0-82.2 0Z" fill="#F2F2F2" />
                        <path
                            d="M395.3 703.2c-24.9 0-45.1-20.2-45.1-45.1s20.2-45.1 45.1-45.1 45.1 20.2 45.1 45.1-20.2 45.1-45.1 45.1z m0-82.2c-20.5 0-37.1 16.7-37.1 37.1s16.7 37.1 37.1 37.1 37.1-16.7 37.1-37.1-16.6-37.1-37.1-37.1zM402.5 382.3h-15V264.1L306 114.4h-82.3v-15h91.2l87.6 160.9z"
                            fill="#999999" />
                        <path
                            d="M727.4 495.9H598.2v-15h129.2c3.4 0 6.2-2.8 6.2-6.2V342.2c0-3.4-2.8-6.2-6.2-6.2H408.7c-3.4 0-6.2 2.8-6.2 6.2v51.4h-15v-51.4c0-11.7 9.5-21.2 21.2-21.2h318.7c11.7 0 21.2 9.5 21.2 21.2v132.5c0 11.6-9.5 21.2-21.2 21.2z"
                            fill="#999999" />
                        <path
                            d="M837 655.8H659.3v-15H837c3.4 0 6.2-2.8 6.2-6.2V502.1c0-3.4-2.8-6.2-6.2-6.2H598.2v-15H837c11.7 0 21.2 9.5 21.2 21.2v132.5c0 11.7-9.5 21.2-21.2 21.2z"
                            fill="#999999" />
                        <path
                            d="M843.2 537.5h15v269.6h-15zM230.51 817.465l40.37-40.382 5.657 5.656-40.37 40.381zM514.84 533.233l40.375-40.375 5.657 5.657-40.375 40.375zM231.08 499.356l5.657-5.656 37.97 37.97-5.656 5.658zM516.172 784.453l5.657-5.656 37.971 37.97-5.657 5.658zM395.3 685.2c-14.9 0-27.1-12.1-27.1-27.1 0-14.9 12.1-27.1 27.1-27.1s27.1 12.1 27.1 27.1c0 14.9-12.1 27.1-27.1 27.1z m0-46.2c-10.5 0-19.1 8.6-19.1 19.1s8.6 19.1 19.1 19.1 19.1-8.6 19.1-19.1-8.5-19.1-19.1-19.1z"
                            fill="#999999" />
                        <path
                            d="M850.3 927.9c-35.6 0-64.6-29-64.6-64.6s29-64.6 64.6-64.6 64.6 29 64.6 64.6c0 35.6-29 64.6-64.6 64.6z m0-114.2c-27.4 0-49.6 22.3-49.6 49.6s22.3 49.6 49.6 49.6 49.6-22.3 49.6-49.6-22.3-49.6-49.6-49.6z"
                            fill="#999999" />
                        <path
                            d="M850.3 889c-14.2 0-25.8-11.6-25.8-25.8s11.6-25.8 25.8-25.8 25.8 11.6 25.8 25.8c-0.1 14.3-11.6 25.8-25.8 25.8z m0-43.5c-9.8 0-17.8 8-17.8 17.8s8 17.8 17.8 17.8 17.8-8 17.8-17.8c-0.1-9.8-8-17.8-17.8-17.8z"
                            fill="#999999" />
                        <path
                            d="M395.3 929.4c-72.5 0-140.6-28.2-191.9-79.5-51.2-51.2-79.4-119.3-79.4-191.8s28.2-140.6 79.5-191.9 119.4-79.5 191.9-79.5S536 415 587.2 466.2c51.3 51.3 79.5 119.4 79.5 191.9S638.5 798.7 587.2 850c-51.2 51.2-119.4 79.4-191.9 79.4z m0-527.7c-68.5 0-132.8 26.7-181.3 75.1-48.3 48.4-75 112.8-75 181.3s26.7 132.8 75.1 181.3c48.4 48.4 112.8 75.1 181.3 75.1s132.8-26.7 181.3-75.1c48.4-48.4 75.1-112.8 75.1-181.3s-26.7-132.8-75.1-181.3c-48.5-48.4-112.9-75.1-181.4-75.1z"
                            fill="#CE0202" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M731.5 870.1c-34.6 0-69.2-13.2-95.6-39.5L499.7 694.3l191.2-191.2 136.2 136.2c25.4 25.4 39.4 59.4 39.4 95.6s-14 70.2-39.4 95.6c-26.4 26.4-61 39.6-95.6 39.6zM520.9 694.3l125.6 125.6c46.9 46.9 123.1 46.9 170 0 22.6-22.6 35.1-52.8 35.1-85s-12.4-62.4-35.1-85L690.9 524.3l-170 170zM329.7 524.3L193.4 388.1C168 362.6 154 328.7 154 292.5s14-70.2 39.4-95.6 59.4-39.4 95.6-39.4 70.2 14 95.6 39.4l136.2 136.2-191.1 191.2z m-40.7-352c-30.8 0-61.6 11.7-85 35.1-46.9 46.9-46.9 123.1 0 170L329.6 503l170-170L374 207.5c-23.4-23.4-54.2-35.2-85-35.2z"
                            fill="#999999" />
                        <path d="M352.96 519.352l161.713-161.714 151.108 151.107L504.067 670.46z" fill="#F9C0C0" />
                        <path
                            d="M289.2 873c-34.1 0-66.2-13.2-90.2-37.2l-10.9-10.9c-49.7-49.7-49.7-130.6 0-180.3l453.3-453.3c24-24 56-37.2 90.2-37.2s66.2 13.2 90.2 37.2l10.9 10.9c24 24 37.2 56 37.2 90.2s-13.2 66.2-37.2 90.2L379.4 835.8c-24 24-56 37.2-90.2 37.2z m442.5-703.9c-30.1 0-58.4 11.6-79.5 32.8L198.8 655.2c-43.9 43.9-43.9 115.2 0 159.1l10.9 10.9c21.2 21.2 49.4 32.8 79.5 32.8s58.4-11.7 79.5-32.8L822 371.9c21.2-21.2 32.8-49.4 32.8-79.5S843.1 234 822 212.9L811.1 202c-21-21.3-49.3-32.9-79.4-32.9z"
                            fill="#CE0202" />
                        <path
                            d="M502.063946 427.935843a12.8 12.8 0 1 0 4.101338-25.26933 12.8 12.8 0 1 0-4.101338 25.26933Z"
                            fill="#FFFFFF" />
                        <path
                            d="M504.1 432.1c-4.3 0-8.6-1.6-11.9-4.9-6.5-6.5-6.5-17.2 0-23.7 3.2-3.2 7.4-4.9 11.9-4.9s8.7 1.7 11.9 4.9c6.5 6.5 6.5 17.2 0 23.7-3.4 3.2-7.6 4.9-11.9 4.9z m0-25.5c-2.3 0-4.5 0.9-6.2 2.6-3.4 3.4-3.4 9 0 12.4s9 3.4 12.4 0c3.4-3.4 3.4-9 0-12.4-1.7-1.7-3.9-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M556.4 467.6m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M556.4 484.4c-4.3 0-8.6-1.6-11.9-4.9-6.5-6.5-6.5-17.2 0-23.7s17.2-6.5 23.7 0 6.5 17.2 0 23.7c-3.3 3.2-7.6 4.9-11.8 4.9z m0-25.5c-2.2 0-4.5 0.9-6.2 2.6-3.4 3.4-3.4 9 0 12.4s9 3.4 12.4 0 3.4-9 0-12.4c-1.8-1.8-4-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M608.6 519.9m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M608.6 536.7c-4.3 0-8.6-1.6-11.9-4.9-3.2-3.2-4.9-7.4-4.9-11.9s1.7-8.7 4.9-11.9c3.2-3.2 7.4-4.9 11.9-4.9s8.7 1.7 11.9 4.9c3.2 3.2 4.9 7.4 4.9 11.9s-1.7 8.7-4.9 11.9c-3.3 3.2-7.6 4.9-11.9 4.9z m0-25.6c-2.3 0-4.5 0.9-6.2 2.6s-2.6 3.9-2.6 6.2 0.9 4.5 2.6 6.2c3.4 3.4 9 3.4 12.4 0 1.7-1.7 2.6-3.9 2.6-6.2s-0.9-4.5-2.6-6.2c-1.6-1.6-3.8-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M458.2 461.2m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M458.2 478c-4.3 0-8.6-1.6-11.9-4.9-3.2-3.2-4.9-7.4-4.9-11.9s1.7-8.7 4.9-11.9c6.5-6.5 17.2-6.5 23.7 0 3.2 3.2 4.9 7.4 4.9 11.9s-1.7 8.7-4.9 11.9c-3.3 3.2-7.5 4.9-11.8 4.9z m0-25.5c-2.2 0-4.5 0.9-6.2 2.6s-2.6 3.9-2.6 6.2c0 2.3 0.9 4.5 2.6 6.2 3.4 3.4 9 3.4 12.4 0 1.7-1.7 2.6-3.9 2.6-6.2 0-2.3-0.9-4.5-2.6-6.2-1.8-1.8-4-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M510.5 513.5m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M510.5 530.3c-4.5 0-8.7-1.7-11.9-4.9-3.2-3.2-4.9-7.4-4.9-11.9s1.7-8.7 4.9-11.9c6.5-6.5 17.2-6.5 23.7 0 3.2 3.2 4.9 7.4 4.9 11.9s-1.7 8.7-4.9 11.9c-3.2 3.1-7.4 4.9-11.8 4.9z m0-25.5c-2.2 0-4.5 0.9-6.2 2.6s-2.6 3.9-2.6 6.2 0.9 4.5 2.6 6.2 3.9 2.6 6.2 2.6c2.3 0 4.5-0.9 6.2-2.6 1.7-1.7 2.6-3.9 2.6-6.2s-0.9-4.5-2.6-6.2c-1.8-1.8-4-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M562.7 565.8m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M562.7 582.6c-4.3 0-8.6-1.6-11.9-4.9-6.5-6.5-6.5-17.2 0-23.7s17.2-6.5 23.7 0 6.5 17.2 0 23.7c-3.2 3.2-7.5 4.9-11.8 4.9z m0-25.6c-2.2 0-4.5 0.9-6.2 2.6-3.4 3.4-3.4 9 0 12.4s9 3.4 12.4 0 3.4-9 0-12.4c-1.7-1.7-3.9-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M412.3 507.1m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M412.3 523.9c-4.5 0-8.7-1.7-11.9-4.9-3.2-3.2-4.9-7.4-4.9-11.9s1.7-8.7 4.9-11.9c3.2-3.2 7.4-4.9 11.9-4.9s8.7 1.7 11.9 4.9c6.5 6.5 6.5 17.2 0 23.7-3.3 3.2-7.5 5-11.9 5z m0-25.5c-2.3 0-4.5 0.9-6.2 2.6s-2.6 3.9-2.6 6.2c0 2.3 0.9 4.5 2.6 6.2s3.9 2.6 6.2 2.6c2.3 0 4.5-0.9 6.2-2.6 3.4-3.4 3.4-9 0-12.4-1.7-1.7-3.9-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M464.6 559.4m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M464.6 576.2c-4.5 0-8.7-1.7-11.9-4.9-3.2-3.2-4.9-7.4-4.9-11.9s1.7-8.7 4.9-11.9c3.2-3.2 7.4-4.9 11.9-4.9s8.7 1.7 11.9 4.9c3.2 3.2 4.9 7.4 4.9 11.9s-1.7 8.7-4.9 11.9c-3.3 3.1-7.5 4.9-11.9 4.9z m0-25.6c-2.3 0-4.5 0.9-6.2 2.6-1.7 1.7-2.6 3.9-2.6 6.2s0.9 4.5 2.6 6.2 3.9 2.6 6.2 2.6c2.3 0 4.5-0.9 6.2-2.6 1.7-1.7 2.6-3.9 2.6-6.2s-0.9-4.5-2.6-6.2c-1.7-1.6-3.9-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path d="M516.8 611.7m-12.8 0a12.8 12.8 0 1 0 25.6 0 12.8 12.8 0 1 0-25.6 0Z" fill="#FFFFFF" />
                        <path
                            d="M516.8 628.5c-4.3 0-8.6-1.6-11.9-4.9-6.5-6.5-6.5-17.2 0-23.7 3.2-3.2 7.4-4.9 11.9-4.9s8.7 1.7 11.9 4.9c6.5 6.5 6.5 17.2 0 23.7-3.3 3.2-7.6 4.9-11.9 4.9z m0-25.6c-2.3 0-4.5 0.9-6.2 2.6-3.4 3.4-3.4 9 0 12.4 3.4 3.4 9 3.4 12.4 0s3.4-9 0-12.4c-1.6-1.6-3.8-2.6-6.2-2.6z"
                            fill="#999999" />
                        <path
                            d="M339.01 535.543l5.656-5.657 152.168 152.168-5.657 5.657zM523.102 348.24l5.657-5.656 152.168 152.168-5.657 5.657z"
                            fill="#999999" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M724.5 615.6L546.6 437.8c-3.4-3.4-3.4-9 0-12.5l143.6-143.6c50.5-50.4 133-50.4 183.5 0 54.2 54.2 54.2 142.9 0 197.1L736.9 615.6c-3.4 3.4-9 3.4-12.4 0z"
                            fill="#F9C0C0" />
                        <path
                            d="M238.2 222.1c37.2 0 72.1 14.4 98.2 40.5l149 149.1L289 608 140 458.9c-26.1-26.1-40.5-61-40.5-98.2s14.4-72.1 40.5-98.2 61-40.4 98.2-40.4m0-15c-39.4 0-78.9 15-108.8 44.9-59.8 59.8-59.8 157.7 0 217.6L289 629.2l217.6-217.6L347 252c-29.9-30-69.3-44.9-108.8-44.9z"
                            fill="#999999" />
                        <path
                            d="M784.5 222.1c37.2 0 72.1 14.4 98.2 40.5 26.1 26.1 40.5 61 40.5 98.2s-14.4 72.1-40.5 98.2L733.6 608 537.2 411.6l149.1-149c26.1-26.1 61-40.5 98.2-40.5m0-15c-39.4 0-78.9 15-108.8 44.8L516 411.6l217.6 217.6 159.7-159.6c59.9-59.8 59.9-157.8 0-217.6-30-29.9-69.4-44.9-108.8-44.9zM570.6 623.7c6.4 0 11.6 5.2 11.6 11.6 0 6.4-5.2 11.6-11.6 11.6-3.1 0-6-1.2-8.2-3.4s-3.4-5.1-3.4-8.2c0-6.4 5.2-11.6 11.6-11.6m0.1-15c-14.7 0-26.6 11.9-26.6 26.6s11.9 26.6 26.6 26.6c14.7 0 26.6-11.9 26.6-26.6 0-14.7-11.9-26.6-26.6-26.6z"
                            fill="#CE0202" />
                        <path
                            d="M454.8 622.6c6.4 0 11.6 5.2 11.6 11.6s-5.2 11.6-11.6 11.6c-3.1 0-6-1.2-8.2-3.4s-3.4-5.1-3.4-8.2c0-3.1 1.2-6 3.4-8.2s5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6c0.1-14.7-11.9-26.6-26.6-26.6zM569.3 757.7c3.1 0 6 1.2 8.2 3.4s3.4 5.1 3.4 8.2c0 3.1-1.2 6-3.4 8.2s-5.1 3.4-8.2 3.4-6-1.2-8.2-3.4-3.4-5.1-3.4-8.2c0-3.1 1.2-6 3.4-8.2 2.2-2.1 5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6c0.1-14.6-11.9-26.6-26.6-26.6zM453.5 756.6c3.1 0 6 1.2 8.2 3.4s3.4 5.1 3.4 8.2c0 3.1-1.2 6-3.4 8.2-2.2 2.2-5.1 3.4-8.2 3.4-6.4 0-11.6-5.2-11.6-11.6 0-6.4 5.2-11.6 11.6-11.6m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6-11.9-26.6-26.6-26.6zM622.1 698.8c3.1 0 6 1.2 8.2 3.4s3.4 5.1 3.4 8.2c0 3.1-1.2 6-3.4 8.2s-5.1 3.4-8.2 3.4c-3.1 0-6-1.2-8.2-3.4s-3.4-5.1-3.4-8.2c0-3.1 1.2-6 3.4-8.2s5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6s11.9 26.6 26.6 26.6c14.7 0 26.6-11.9 26.6-26.6 0.1-14.7-11.9-26.6-26.6-26.6zM396.9 693.9c6.4 0 11.6 5.2 11.6 11.6 0 6.4-5.2 11.6-11.6 11.6s-11.6-5.2-11.6-11.6c0-3.1 1.2-6 3.4-8.2 2.2-2.1 5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6c0-14.6-11.9-26.6-26.6-26.6zM510.2 689.9c6.4 0 11.6 5.2 11.6 11.6 0 6.4-5.2 11.6-11.6 11.6s-11.6-5.2-11.6-11.6c0-3.1 1.2-6 3.4-8.2s5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6-11.9-26.6-26.6-26.6zM511.5 557.8c6.4 0 11.6 5.2 11.6 11.6 0 6.4-5.2 11.6-11.6 11.6-3.1 0-6-1.2-8.2-3.4s-3.4-5.1-3.4-8.2c0-3.1 1.2-6 3.4-8.2 2.2-2.2 5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6s26.6-11.9 26.6-26.6c0.1-14.7-11.9-26.6-26.6-26.6zM508.9 823.7c6.4 0 11.6 5.2 11.6 11.6 0 3.1-1.2 6-3.4 8.2s-5.1 3.4-8.2 3.4c-6.4 0-11.6-5.2-11.6-11.6 0-3.1 1.2-6 3.4-8.2s5.1-3.4 8.2-3.4m0-15c-14.7 0-26.6 11.9-26.6 26.6 0 14.7 11.9 26.6 26.6 26.6 14.7 0 26.6-11.9 26.6-26.6 0-14.7-11.9-26.6-26.6-26.6z"
                            fill="#999999" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M434.9 605.9L318.4 489.4l158.9-194.8L623.7 441z" fill="#F9C0C0" />
                        <path
                            d="M449.4 623.4L310.2 484.2 488 263.7l174.8 174.8-213.4 184.9zM321 483.6l128.9 128.9L651 438.1 488.6 275.7 321 483.6z"
                            fill="#999999" />
                        <path d="M207.907 619.254l26.233-26.233 193.463 193.462-26.233 26.234z" fill="#F9C0C0" />
                        <path
                            d="M508.9 444.3l15-15c1.5-1.5 1.5-3.8 0-5.3l-25.5-25.5c-1.5-1.5-3.8-1.5-5.3 0l-13.6 13.6c-4.9 4.9-12.8 4.9-17.7 0L448.6 399c-1.5-1.5-3.8-1.5-5.3 0l-25.5 25.5c-1.5 1.5-1.5 3.8 0 5.3l7.7 7.7c2.3 2.3 4.1 7.8 1.8 10.1l-17 17.9c-4.3 4.3-6.5 9.1-2.2 13.4l5.5 5.5c1.9 1.9 2.9 4.2 5.4 4.5l18.7 18.7c2.2 2.2 5.7 2.2 7.9 0l16.8-16.8c4.6-4.6 12-4.6 16.6 0l17.2 17.2c1.5 1.5 3.8 1.5 5.3 0l11.4-11.4 14.1-14.1 4.3-4.3c3.2-3.2 3.2-8.4 0-11.6l-22.4-22.3z"
                            fill="#FFFFFF" />
                        <path
                            d="M499 513.8c-3.3 0-6.3-1.3-8.6-3.6L473 492.9c-0.8-0.8-1.9-1.2-3-1.2s-2.2 0.4-3 1.2l-17.4 17.4c-2.3 2.3-5.4 3.6-8.6 3.6s-6.3-1.3-8.6-3.6l-27.1-27.1c-4.8-4.8-4.8-12.5 0-17.3l17.4-17.4c1.6-1.6 1.6-4.3 0-5.9l-17.4-17.4c-4.8-4.8-4.8-12.5 0-17.3l27.1-27.1c4.8-4.8 12.5-4.8 17.3 0l0.3 0.3-5.7 5.7-0.3-0.3c-0.8-0.8-1.8-1.2-3-1.2s-2.2 0.4-3 1.2l-27.1 27.1c-0.8 0.8-1.2 1.8-1.2 3s0.4 2.2 1.2 3l17.4 17.4c4.8 4.8 4.8 12.5 0 17.3l-17.4 17.4c-0.8 0.8-1.2 1.8-1.2 3 0 1.1 0.4 2.2 1.2 3l27.1 27.1c0.8 0.8 1.8 1.2 3 1.2s2.2-0.4 3-1.2l17.4-17.4c2.3-2.3 5.4-3.6 8.6-3.6 3.3 0 6.3 1.3 8.6 3.6l17.4 17.4c0.8 0.8 1.8 1.2 3 1.2 1.1 0 2.2-0.4 3-1.2l27.1-27.1c1.6-1.6 1.6-4.3 0-6l-17.4-17.4c-4.8-4.8-4.8-12.5 0-17.3l17.4-17.4c1.6-1.6 1.6-4.3 0-6L502 386.5c-0.8-0.8-1.8-1.2-3-1.2-1.1 0-2.2 0.4-3 1.2l-17.4 17.4c-4.8 4.8-12.5 4.8-17.3 0l-4.4-4.4 5.7-5.7 4.4 4.4c1.6 1.6 4.3 1.6 6 0l17.4-17.4c4.8-4.8 12.5-4.8 17.3 0l27.1 27.1c4.8 4.8 4.8 12.5 0 17.3l-17.4 17.4c-1.6 1.6-1.6 4.3 0 5.9l17.4 17.4c4.8 4.8 4.8 12.5 0 17.3l-27.1 27.1c-2.3 2.3-5.4 3.5-8.7 3.5z"
                            fill="#CE0202" />
                        <path
                            d="M621.7 120.3l278.6 278.6-21.6 21.6-3.6 0.2-3.8 3.1-503.7 407.3L189.5 653l407.3-503.6 3.1-3.8 0.2-3.6 21.6-21.7m0-16.4c-3 0-6 1.1-8.3 3.4l-24.9 24.9c-2.1 2.1-3.2 4.9-3.4 7.7l-408.4 505c-4.6 4.6-4.6 12 0 16.6l182.4 182.4c2.3 2.3 5.3 3.4 8.3 3.4s6-1.1 8.3-3.4l505-408.4c2.8-0.1 5.6-1.3 7.7-3.4l24.9-24.9c4.6-4.6 4.6-12 0-16.6L630 107.3c-2.3-2.2-5.3-3.4-8.3-3.4z"
                            fill="#999999" />
                        <path
                            d="M232.7 717.9l70 70-28.2 28.2-93.7 73.1-0.7 0.6-0.7 0.7c-1.5 1.5-3.4 2.4-5.3 2.4-1.2 0-2.1-0.3-2.8-1L129.4 850c-1.6-1.6-1.4-5.3 1.4-8l0.7-0.7 0.6-0.8 72.4-94.3 28.2-28.3m0-21.2l-40.1 40.1 0.1 0.1-72.5 94.5c-8.5 8.5-9.1 21.6-1.4 29.3l41.9 41.9c3.6 3.6 8.4 5.4 13.4 5.4 5.6 0 11.4-2.3 15.9-6.8l93.8-73.2 0.1 0.1L324 788l-91.3-91.3zM593.248 148.234l5.657-5.657 42.85 42.85-5.657 5.657zM667.164 222.158l5.657-5.657 205.2 205.2-5.656 5.657z"
                            fill="#999999" />
                        <path d="M200.115 747.78l5.657-5.657 71.841 71.841-5.657 5.657z" fill="#999999" />
                        <path
                            d="M211.229 752.498l31.108-31.117 5.658 5.656-31.108 31.117zM223.974 765.227l31.108-31.117 5.658 5.656-31.108 31.117zM236.79 778.026l31.108-31.117 5.657 5.656-31.108 31.117zM249.535 790.938l31.108-31.117 5.657 5.656-31.108 31.117zM262.35 803.738l31.108-31.117 5.658 5.656-31.108 31.117z"
                            fill="#999999" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
            <a href="" class="min-w-50 h-auto flex flex-col gap-5 items-center">
                <div>
                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->

                    <svg width="50px" height="50px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M558.4 511.9v-31.2c0-4.7-3.8-8.5-8.5-8.5h-56.4c-4.7 0-8.5 3.8-8.5 8.5v27.9c0 12.9-10.5 23.4-23.4 23.4h-26.9c-4.7 0-8.5 3.8-8.5 8.5v56.4c0 4.7 3.8 8.5 8.5 8.5h16.1c5.5 0 14.2 4.5 14.2 10l1 41.7c0 10.3 3.1 18.6 13.4 18.6h13.1c4.2 0 8.1 1.4 11.2-0.6 0.4-0.2 0.8-0.4 1.2-0.4h41.7c6.4 0 11.7-5.2 11.7-11.7v-35.6c0-12.2 9.8-22 22-22H617c4.7 0 8.5-3.8 8.5-8.5v-66.8c0-8.9-7.2-16.1-16.1-16.1h-48.8c-1.2 0.1-2.2-0.9-2.2-2.1z"
                            fill="#F9C0C0" />
                        <path
                            d="M855.4 289.3c15.1 0 29.4 6 40.2 16.8s16.8 25.1 16.8 40.2V750c0 15.1-6 29.4-16.8 40.2-10.7 10.8-25 16.8-40.2 16.8H170c-15.1 0-29.4-6-40.2-16.8S113 765.1 113 750V346.3c0-15.1 6-29.4 16.8-40.2 10.8-10.8 25.1-16.8 40.2-16.8h685.4m0-15H170c-39.6 0-72 32.4-72 72V750c0 39.6 32.4 72 72 72h685.4c39.6 0 72-32.4 72-72V346.3c0-39.6-32.4-72-72-72z"
                            fill="#999999" />
                        <path
                            d="M630.7 213.3v98.8h-236v-98.8h236m3-15h-242c-6.6 0-12 5.4-12 12v104.8c0 6.6 5.4 12 12 12h242c6.6 0 12-5.4 12-12V210.3c0-6.6-5.4-12-12-12zM275.3 259.3V274h-61.7v-14.7h61.7m3-15h-67.7c-6.6 0-12 5.4-12 12V277c0 6.6 5.4 12 12 12h67.7c6.6 0 12-5.4 12-12v-20.7c0-6.6-5.4-12-12-12zM811.8 259.3V274h-61.7v-14.7h61.7m3-15h-67.7c-6.6 0-12 5.4-12 12V277c0 6.6 5.4 12 12 12h67.7c6.6 0 12-5.4 12-12v-20.7c0-6.6-5.4-12-12-12zM513.3 409.4c40.8 0 79.1 15.9 108 44.7 28.8 28.8 44.7 67.2 44.7 108s-15.9 79.1-44.7 108c-28.8 28.8-67.2 44.7-108 44.7s-79.1-15.9-108-44.7c-28.8-28.8-44.7-67.2-44.7-108s15.9-79.1 44.7-108c28.9-28.8 67.2-44.7 108-44.7m0-15c-92.6 0-167.7 75.1-167.7 167.7s75.1 167.7 167.7 167.7S681 654.7 681 562.1s-75.1-167.7-167.7-167.7z"
                            fill="#999999" />
                        <path d="M198.6 289h91.7v518h-91.7zM735.2 289h91.7v518h-91.7z" fill="#F9C0C0" />
                    </svg>
                </div>
                <div>
                    <span>All Products</span>
                </div>
            </a>
        </div>
    </section>
    <!-- بنر-->
    <section>
        <div class="w-11/12 mx-auto flex justify-center mt-20">
            <h1 class="font-bold text-[6vw] sm:text-[5vw] md:text-[4vw] lg:text-[3vw]">Featured Products</h1>
        </div>
        <div class="w-19/20 h-auto mx-auto flex flex-wrap gap-5 justify-center items-center mt-8 md:mt-12 lg:mt-10">
            <div class="max-sm:w-85 max-md:w-3/4 min-md:w-80 lg:w-2/7 h-full flex justify-end relative">
                <img src="{{asset('asstes/img/baner/img3.webp')}}" alt="" class="rounded-lg">
                <div class="absolute w-1/2 h-full flex gap-3 flex-col justify-center items-center">
                    <p class="py-1 px-5 bg-green-400 rounded-2xl">Sanitizer</p>
                    <h3 class="text-center font-bold text-[1.2rem] sm:text-[3.5vw] md:text-[1.9vw] lg:text-[1.8vw]">
                        Hand Sanitizer
                        <br>
                        Collectons
                    </h3>
                    <a href="" class="border-b-1 border-red-500">
                        <span class="text-[1.2rem]">artanv</span>
                    </a>
                </div>
            </div>
            <div class="max-sm:w-85 max-md:w-3/4 min-md:w-80 lg:w-2/7 h-full flex justify-end relative">
                <img src="{{asset('asstes/img/baner/img1.webp')}}" alt="" class="rounded-lg">
                <div class="absolute w-1/2 h-full flex gap-3 flex-col justify-center items-center">
                    <p class="py-1 px-5 bg-green-400 rounded-2xl">Sanitizer</p>
                    <h3 class="text-center font-bold text-[1.2rem] sm:text-[3.5vw] md:text-[1.9vw] lg:text-[1.8vw]">
                        Hand Sanitizer
                        <br>
                        Collectons
                    </h3>
                    <a href="" class="border-b-1 border-red-500">
                        <span class="text-[1.2rem]">artanv</span>
                    </a>
                </div>
            </div>
            <div class="max-sm:w-85 max-md:w-3/4 min-md:w-80 lg:w-2/7 h-full flex justify-end relative">
                <img src="{{asset('asstes/img/baner/img2.webp')}}" alt="" class="rounded-lg">
                <div class="absolute w-1/2 h-full flex gap-3 flex-col justify-center items-center">
                    <p class="py-1 px-5 bg-green-400 rounded-2xl">Sanitizer</p>
                    <h3 class="text-center font-bold text-[1.2rem] sm:text-[3.5vw] md:text-[1.9vw] lg:text-[1.8vw]">
                        Hand Sanitizer
                        <br>
                        Collectons
                    </h3>
                    <a href="" class="border-b-1 border-red-500">
                        <span class="text-[1.2rem]">artanv</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- محصولات مهم -->
    <section>
        <div class="w-full h-auto flex justify-center mt-20">
            <h3 class="font-bold text-[6vw] sm:text-[5vw] md:text-[4vw] lg:text-[3vw]">Trending Items</h3>
        </div>
        <div class="w-11/12 mx-auto h-95 flex gap-5 overflow-x-auto mt-10">
            <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/01.webp')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
           <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/03.webp')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/03.webp')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-w-65 h-55 relative group">
                <div
                    class="absolute bottom-0 w-full h-1/3 bg-[#ebf8f7]/90 -z-50 group-hover:h-2/3 transition-all duration-300">
                </div>
                <div
                    class="absolute w-2/3 h-10 rounded-b-2xl bottom-5 right-1/6 z-50 hidden group-hover:block transition-all duration-400">
                    <div class="flex gap-4 justify-center items-center">
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                        <div class="p-2 bg-green-400 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 5H9a5 5 0 0 0-5 5" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 19h12a5 5 0 0 0 5-5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <a href="" class="flex justify-center">
                    <img src="{{asset('asstes/img/silyder.producte/01.webp')}}" alt="" class="w-50 h-auto object-cover">
                </a>
                <div class="absolute w-full mx-autoh-auto bg-[#ebf8f7] rounded-b-2xl overflow-hidden">
                    <div class="w-18/20 mx-auto py-6 bg-[#ebf8f7] flex justify-between gap-3 items-end">  
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                            <span class="text-[#fd6a6a]">100.000 تومان</span>
                        </div> 
                        <div>
                            <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- خدمات -->
    <section>
        <div class="w-11/12 mx-auto bg-[#023350] py-10 flex gap-5 flex-wrap rounded-3xl mt-20">
            <div
                class="w-full md:w-4/9 lg:w-10/43 h-auto flex flex-row-reverse justify-center items-center gap-5 ">
                <div>
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M1 4h11v9H1z" />
                        <path d="M12 7h4l3 3v3h-7" />
                        <circle cx="6" cy="17" r="1.5" />
                        <circle cx="17" cy="17" r="1.5" />
                        <path d="M3 8h4" />
                        <path d="M3 11h6" />
                    </svg>
                </div>
                <div class="text-white flex flex-col gap-3">
                    <h4 class="font-bold text-lg">#023350</h4>
                    <p class="text-md">Orders Over $120</p>
                </div>
            </div>
            <div
                class="w-full md:w-4/9 lg:w-10/43 h-auto flex flex-row-reverse justify-center items-center gap-5 ">
                <div>
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M6 8V4L2 8l4 4V8" />
                        <path d="M18 16v4l4-4-4-4v4" />
                        <path d="M6 8a7 7 0 0112-2" />
                        <path d="M18 16a7 7 0 01-12 2" />
                    </svg>

                </div>
                <div class="text-white flex flex-col gap-3">
                    <h4 class="font-bold text-lg">#023350</h4>
                    <p class="text-md">Orders Over $120</p>
                </div>
            </div>
            <div
                class="w-full md:w-4/9 lg:w-10/43 h-auto flex flex-row-reverse justify-center items-center gap-5 ">
                <div>
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M3 7a2 2 0 012-2h13a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                        <path d="M15 12h4" />
                        <circle cx="16.8" cy="12" r=".6" fill="currentColor" />
                    </svg>
                </div>
                <div class="text-white flex flex-col gap-3">
                    <h4 class="font-bold text-lg">#023350</h4>
                    <p class="text-md">Orders Over $120</p>
                </div>
            </div>
            <div
                class="w-full md:w-4/9 lg:w-10/43 h-auto flex flex-row-reverse justify-center items-center gap-5">
                <div>
                    <svg class="fill-green-500" xmlns="http://www.w3.org/2000/svg" width="70" height="70"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12a7 7 0 0114 0" />
                        <rect x="3" y="11" width="3" height="6" rx="1.5" />
                        <rect x="18" y="11" width="3" height="6" rx="1.5" />
                        <path d="M12 19v2" />
                        <path d="M10 21h4" />
                        <path d="M12 19a2 2 0 002-2" />
                    </svg>
                </div>
                <div class="text-white flex flex-col gap-3">
                    <h4 class="font-bold text-lg">#023350</h4>
                    <p class="text-md">Orders Over $120</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Items -->
    <section>
        <div class="w-11/12 mx-auto h-auto flex gap-2 mt-20">
            <div class="w-5/20 max-xl:hidden flex items-end">
                <img src="{{asset('assets/img/banner/product-banner.jpg')}}" alt=""
                    class="h-140 overflow-hidden rounded-2xl object-cover">
            </div>
            <div class="w-full flex flex-col">
                <div class="w-11/12 mx-auto flex justify-between py-5">
                    <a href=""
                        class="flex flex-row-reverse gap-2 fill-[#54ab9a] text-[#54ab9a] hover:text-[#fd6a6a] hover:fill-[#fd6a6a] transition-all duration-300">
                        <span class="">All Products </span>
                        <!DOCTYPE svg
                            PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                        <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve">
                            <g>
                                <polygon points="33,66 0,66 66,148 0,231 33,231 99,148 	" />
                                <polygon points="83,66 50,66 116,148 50,231 83,231 149,148 	" />
                                <polygon points="133,66 100,66 166,148 100,231 133,231 199,148 	" />
                                <polygon points="231,66 149,66 215,148 149,231 231,231 297,148 	" />
                            </g>
                        </svg>
                    </a>
                    <span class="text-[17px] md:text-[25px] font-bold text-[#023350]">Popular Items</span>
                </div>
                <div class="flex flex-wrap gap-4 justify-center mb-15">
                    <button class="px-9 py-3 rounded-4xl bg-green-400">Baby & Mom Care</button>
                    <button class="px-9 py-3 rounded-4xl bg-green-400">Medical Equipments</button>
                    <button class="px-9 py-3 rounded-4xl bg-green-400">Medicine</button>
                    <button class="px-9 py-3 rounded-4xl bg-green-400">تجهیزات</button>
                    <button class="px-9 py-3 rounded-4xl bg-green-400">Medicine</button>
                </div>
                <div class="w-full flex flex-wrap gap-2 justify-center mt-5">
                    <div class="w-80 sm:w-5/11 lg:w-3/13 h-100 group overflow-hidden rounded-2xl relative">
                        <img src="{{asset('asstes/img/silyder.producte/03.webp')}}" alt=""
                            class="absolute h-2/3 w-full z-60 object-top">
                        <div class="absolute w-full h-25 bg-[#ebf8f7] bottom-0 flex justify-between">
                            <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2">
                                <div class="flex flex-col gap-2">
                                    <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                        عالی قطره فلورا</span>
                                    <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                                <div class="flex justify-between ">
                                    <span class="text-[#fd6a6a]">100.000 تومان</span>
                                    <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-3/5 bg-[#ebf8f7] group-hover:h-4/5 -z-50 transition-all duration-300 flex gap-2 items-center justify-center ">
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-4/5 hidden group-hover:block transition-all duration-300 z-100">
                            <div class="w-full h-full flex items-center justify-center gap-2">
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-80 sm:w-5/11 lg:w-3/13 h-100 group overflow-hidden rounded-2xl relative">
                        <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                            class="absolute h-2/3 w-full z-60 object-top">
                        <div class="absolute w-full h-25 bg-[#ebf8f7] bottom-0 flex justify-between">
                            <div class="w-11/12 mx-auto flex">
                                <div class="flex h-11/12 flex-col mx-auto gap-1">
                                    <span class="font-bold text-[16px] group-hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                                    <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                                    <span class="pt-4 text-[17px] font-bold text-[#fd6a6a]">100.000 تومان</span>
                                </div>
                                <div class="h-11/12 flex items-end">
                                    <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-3/5 bg-[#ebf8f7] group-hover:h-4/5 -z-50 transition-all duration-300 flex gap-2 items-center justify-center ">
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-4/5 hidden group-hover:block transition-all duration-300 z-100">
                            <div class="w-full h-full flex items-center justify-center gap-2">
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-80 sm:w-5/11 lg:w-3/13 h-100 group overflow-hidden rounded-2xl relative">
                        <img src="{{asset('asstes/img/silyder.producte/03.webp')}}" alt=""
                            class="absolute h-2/3 w-full z-60 object-top">
                        <div class="absolute w-full h-25 bg-[#ebf8f7] bottom-0 flex justify-between">
                            <div class="w-11/12 mx-auto flex">
                                <div class="flex h-11/12 flex-col mx-auto gap-1">
                                    <span class="font-bold text-[16px] group-hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                                    <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                                    <span class="pt-4 text-[17px] font-bold text-[#fd6a6a]">100.000 تومان</span>
                                </div>
                                <div class="h-11/12 flex items-end">
                                    <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-3/5 bg-[#ebf8f7] group-hover:h-4/5 -z-50 transition-all duration-300 flex gap-2 items-center justify-center ">
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-4/5 hidden group-hover:block transition-all duration-300 z-100">
                            <div class="w-full h-full flex items-center justify-center gap-2">
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-80 sm:w-5/11 lg:w-3/13 h-100 group overflow-hidden rounded-2xl relative">
                        <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                            class="absolute h-2/3 w-full z-60 object-top">
                        <div class="absolute w-full h-25 bg-[#ebf8f7] bottom-0 flex justify-between">
                            <div class="w-11/12 mx-auto flex">
                                <div class="flex h-11/12 flex-col mx-auto gap-1">
                                    <span class="font-bold text-[16px] group-hover:text-[#03a297]">ایرانی و عالی قطره فلورا</span>
                                    <ul class="flex gap-1">
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                        <li>
                                            <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                    stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </li>
                                    </ul>
                                    <span class="pt-4 text-[17px] font-bold text-[#fd6a6a]">100.000 تومان</span>
                                </div>
                                <div class="h-11/12 flex items-end">
                                    <svg class="w-13 h-9" fill="#000000" viewBox="0 0 32 32"
                                        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                        version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <g transform="matrix(1,0,0,1,-432,0)">
                                                <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                    <path
                                                        d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                        style="fill:#03a297;"></path>
                                                </g>
                                                <path
                                                    d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                    style="fill:#03a297;"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-3/5 bg-[#ebf8f7] group-hover:h-4/5 -z-50 transition-all duration-300 flex gap-2 items-center justify-center ">
                        </div>
                        <div
                            class="absolute bottom-0 w-full h-4/5 hidden group-hover:block transition-all duration-300 z-100">
                            <div class="w-full h-full flex items-center justify-center gap-2">
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                                <div class="p-2 bg-green-400 rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 1l4 4-4 4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 5H9a5 5 0 0 0-5 5" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 23l-4-4 4-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 19h12a5 5 0 0 0 5-5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-11/12 mx-auto h-30 md:h-50 hidden max-xl:block my-8">
            <img src="{{asset('asstes/img/logo/IMG_20260730_170917_821.jpg')}}" alt="" class="w-full h-30 md:h-50 rounded-2xl">
        </div>
    </section>
    <!-- بنر2 -->
    <section>
        <div class="w-11/12 mx-auto h-85 mt-25 relative">
            <img src="{{asset('asstes/img/baner/big-banner.webp')}}" alt="" class="w-full h-full rounded-2xl object-cover">
            <div class="absolute w-full h-full top-0 flex flex-col justify-center items-center gap-2">
                <h6 class="text-[25px] text-[#023350]">Mega Collections</h6>
                <h2 class="text-[#023350] text-[40px] lg:text-[45px] font-bold text-center">Huge Sale Up To
                    <span>40%</span>
                    Off
                </h2>
                <p class="text-[18px] px-4 py-1 border-b border-t my-6">at our outlet stores</p>
                <div class="px-4 py-2 bg-[#03a297] rounded-4xl">
                    artan vafadar
                </div>
            </div>
        </div>
    </section>
    <!-- برندها -->
    <section>
        <div class="w-11/12 mx-auto flex justify-between pt-30">
            <a href=""
                class="flex flex-row-reverse gap-2 fill-[#54ab9a] text-[#54ab9a] hover:text-[#fd6a6a] hover:fill-[#fd6a6a] transition-all duration-300">
                <span class="">All Products </span>
                <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
                <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297 297" xml:space="preserve">
                    <g>
                        <polygon points="33,66 0,66 66,148 0,231 33,231 99,148 	" />
                        <polygon points="83,66 50,66 116,148 50,231 83,231 149,148 	" />
                        <polygon points="133,66 100,66 166,148 100,231 133,231 199,148 	" />
                        <polygon points="231,66 149,66 215,148 149,231 231,231 297,148 	" />
                    </g>
                </svg>
            </a>
            <span class="text-[17px] md:text-[25px] font-bold text-[#023350]">Popular Items</span>
        </div>
        <div class="py-8 bg-white">
            <div class="w-11/12 mx-auto mb-10">
                <!-- Brands -->
                <div class="flex gap-8 items-center h-30 overflow-x-auto">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                    <img src="{{asset('assets/img/brand/03.png')}}"
                        class="h-20 min-w-40 opacity-60 hover:opacity-100 transition duration-300">
                </div>
            </div>
        </div>
        <!-- <div class="w-11/12 h-auto mx-auto overflow-x-auto flex gap-1 pb-4 my-5">
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/04.png" alt="" class="w-full h-full">
            </div>
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/05.png" alt="" class="w-full h-full">
            </div>
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/01.png" alt="" class="w-full h-full">
            </div>
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/02.png" alt="" class="w-full h-full">
            </div>
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/06.png" alt="" class="w-full h-full">
            </div>
            <div class="min-w-1/2 md:min-w-40 border-2 rounded-2xl">
                <img src="https://live.themewild.com/medion/assets/img/brand/03.png" alt="" class="w-full h-full">
            </div>
        </div> -->
    </section>
    <!-- بهترین محصولات -->
    <section>
        <div class="w-11/12 mx-auto">
            <img src="{{asset('asstes/img/logo/IMG_20260730_170917_821.jpg')}}" alt="" class="w-full h-60 lg:h-80 object-cover rounded-2xl">
            <div class="relative -top-20 w-full flex justify-center">
                <div class="w-11/12 flex flex-wrap justify-center gap-10 lg:gap-5">
                    <div class="w-10/11 sm:w-2/3 md:w-5/11 xl:w-5/16 h-130 flex flex-col gap-5 bg-white rounded-2xl">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full py-3">
                                <span class="text-[30px] pb-3 border-b-3 items-end">تجهیزات</span>
                            </div>
                            <div class="w-full border-b-1"></div>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-10/11 sm:w-2/3 md:w-5/11 xl:w-5/16 h-130 flex flex-col gap-5 bg-white rounded-2xl">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full py-3">
                                <span class="text-[30px] pb-3 border-b-3 items-end">تجهیزات</span>
                            </div>
                            <div class="w-full border-b-1"></div>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-10/11 sm:w-2/3 md:w-5/11 xl:w-5/16 h-130 flex flex-col gap-5 bg-white rounded-2xl">
                        <div class="w-11/12 mx-auto">
                            <div class="w-full py-3">
                                <span class="text-[30px] pb-3 border-b-3 items-end">تجهیزات</span>
                            </div>
                            <div class="w-full border-b-1"></div>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                            <div
                                class="w-11/12 mx-auto h-auto flex gap-2 justify-between p-[10px] bg-[#ebf8f7] rounded-lg">
                                <div class="w-6/10 flex items-center justify-end relative">
                                    <div class="flex flex-col gap-2 items-end">
                                        <h2 class="text-[16px] font-bold text-center">تجهیزات پزشکی</h2>
                                        <ul class="flex">
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                            <li>
                                                <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                                        stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </li>
                                        </ul>
                                        <div class="pt-2 flex gap-3">
                                            <span class=" font-bold">$40.00</span>
                                        </div>
                                    </div>
                                    <div class="absolute bottom-0 right-1 ">
                                        <svg class="w-12 h-8" fill="#000000" viewBox="0 0 32 32"
                                            style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:serif="http://www.serif.com/"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <g transform="matrix(1,0,0,1,-432,0)">
                                                    <g transform="matrix(1.125,0,0,1,375.898,0)">
                                                        <path
                                                            d="M71.196,10.9C71.148,9.836 70.367,9 69.42,9C66.684,9 61.316,9 58.58,9C57.633,9 56.852,9.836 56.804,10.9C56.638,14.653 56.267,22.991 56.093,26.9C56.069,27.447 56.245,27.982 56.581,28.378C56.916,28.775 57.382,29 57.869,29C60.948,29 67.052,29 70.131,29C70.618,29 71.084,28.775 71.419,28.378C71.755,27.982 71.931,27.447 71.907,26.9C71.733,22.991 71.362,14.653 71.196,10.9Z"
                                                            style="fill:#1fe564;"></path>
                                                    </g>
                                                    <path
                                                        d="M442.898,8L441.8,8C440.201,8 438.884,9.254 438.804,10.85C438.616,14.603 438.199,22.941 438.004,26.85C437.963,27.671 438.26,28.472 438.826,29.068C439.393,29.663 440.178,30 441,30L454.795,30C455.617,30 456.402,29.663 456.969,29.068C457.535,28.472 457.832,27.671 457.791,26.85L456.991,10.85C456.911,9.254 455.594,8 453.995,8L452.898,8L452.898,6C452.898,3.24 450.657,1 447.898,1C445.138,1 442.898,3.24 442.898,6L442.898,8ZM455.746,26L455.794,26.95C455.807,27.224 455.708,27.491 455.52,27.689C455.331,27.888 455.069,28 454.795,28C454.795,28 441,28 441,28C440.726,28 440.464,27.888 440.275,27.689C440.087,27.491 439.988,27.224 440.001,26.95L440.049,26L455.746,26ZM452.898,10L452.898,13C452.898,13.552 452.449,14 451.898,14C451.346,14 450.898,13.552 450.898,13L450.898,10L444.898,10L444.898,13C444.898,13.552 444.449,14 443.898,14C443.346,14 442.898,13.552 442.898,13L442.898,10L441.8,10C441.267,10 440.828,10.418 440.801,10.95L440.149,24L455.646,24L454.994,10.95C454.967,10.418 454.528,10 453.995,10L452.898,10ZM450.898,8L450.898,6C450.898,4.344 449.553,3 447.898,3C446.242,3 444.898,4.344 444.898,6L444.898,8L450.898,8Z"
                                                        style="fill:#92d398;"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="w-4/10 h-25 flex justify-end">
                                    <img src="{{asset('asstes/img/silyder.producte/01.png')}}" alt=""
                                        class="full h-full object-top rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- بنرها -->
    <section>
        <div class="w-11/12 mx-auto flex flex-col justify-center items-center">
            <h1 class="text-[30px] font-bold">Let's Check Our Photo Gallery</h1>
            <h5 class="text-[20px]">Our Gallery</h5>
        </div>
        <div class="max-w-7xl mx-auto py-10">
            <div class="grid grid-cols-12 gap-5">
                <!-- تصویر بزرگ -->
                <div class="col-span-12 lg:col-span-6 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/06.webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <!-- دو تصویر بالا -->
                <div class="col-span-6 lg:col-span-3 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/02.webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <div class="col-span-6 lg:col-span-3 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/05.webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <!-- پایین چپ -->
                <div class="col-span-6 lg:col-span-3 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/03.webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <!-- پایین وسط -->
                <div class="col-span-6 lg:col-span-3 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/04.webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
                <!-- پایین راست -->
                <div class="col-span-12 lg:col-span-6 h-[180px] rounded-[28px] overflow-hidden group">
                    <img src="{{asset('asstes/img/baner/gallery/01 (1).webp')}}"
                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                </div>
            </div>
        </div>
    </section>
    <!-- finish -->
    <section>
        <div class="w-full bg-[#023350] mt-20">
            <div class="pt-20">
                <h2 class="text-center text-4xl font-bold text-white">
                    نظرات
                    <span class="text-emerald-500">مشتریان</span>
                </h2>
            </div>
            <div class="w-full bg-[#023350] flex gap-4 justify-center items-center overflow-x-auto">
                <div class="py-20">
                    <div class="min-w-80 px-3">
                        <div class="flex">
                            <!-- Card -->
                            <div class="">
                                <div class="bg-[#FFF8F1] rounded-[40px] p-6 relative h-[430px]">
                                    <div class="bg-[#172230] rounded-full flex items-center gap-4 p-3">
                                        <img src="{{asset('asstes/img/baner/gallery/01 (1).webp')}}"
                                            class="w-16 h-16 rounded-full object-cover">
                                        <div>
                                            <h3 class="text-white font-bold text-xl">
                                                محمد احمدی
                                            </h3>
                                            <p class="text-emerald-500">
                                                مشتری
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 leading-9 mt-8">
                                        از کیفیت محصولات و سرعت ارسال کاملاً راضی بودم.
                                        پشتیبانی سایت نیز بسیار حرفه‌ای و پاسخگو بود.
                                        قطعاً خرید بعدی خود را نیز از این مجموعه انجام می‌دهم.
                                    </p>
                                    <div class="flex gap-1 text-emerald-500 mt-8 text-2xl">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20">
                    <div class="min-w-80 px-3">
                        <div class="flex">
                            <!-- Card -->
                            <div class="">
                                <div class="bg-[#FFF8F1] rounded-[40px] p-6 relative h-[430px]">
                                    <div class="bg-[#172230] rounded-full flex items-center gap-4 p-3">
                                        <img src="{{asset('asstes/img/baner/gallery/02.webp')}}"
                                            class="w-16 h-16 rounded-full object-cover">
                                        <div>
                                            <h3 class="text-white font-bold text-xl">
                                                محمد احمدی
                                            </h3>
                                            <p class="text-emerald-500">
                                                مشتری
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 leading-9 mt-8">
                                        از کیفیت محصولات و سرعت ارسال کاملاً راضی بودم.
                                        پشتیبانی سایت نیز بسیار حرفه‌ای و پاسخگو بود.
                                        قطعاً خرید بعدی خود را نیز از این مجموعه انجام می‌دهم.
                                    </p>
                                    <div class="flex gap-1 text-emerald-500 mt-8 text-2xl">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20">
                    <div class="min-w-80 px-3">
                        <div class="flex">
                            <!-- Card -->
                            <div class="">
                                <div class="bg-[#FFF8F1] rounded-[40px] p-6 relative h-[430px]">
                                    <div class="bg-[#172230] rounded-full flex items-center gap-4 p-3">
                                        <img src="{{asset('asstes/img/baner/gallery/03.webp')}}"
                                            class="w-16 h-16 rounded-full object-cover">
                                        <div>
                                            <h3 class="text-white font-bold text-xl">
                                                محمد احمدی
                                            </h3>
                                            <p class="text-emerald-500">
                                                مشتری
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 leading-9 mt-8">
                                        از کیفیت محصولات و سرعت ارسال کاملاً راضی بودم.
                                        پشتیبانی سایت نیز بسیار حرفه‌ای و پاسخگو بود.
                                        قطعاً خرید بعدی خود را نیز از این مجموعه انجام می‌دهم.
                                    </p>
                                    <div class="flex gap-1 text-emerald-500 mt-8 text-2xl">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-20">
                    <div class="min-w-80 px-3">
                        <div class="flex">
                            <!-- Card -->
                            <div class="">
                                <div class="bg-[#FFF8F1] rounded-[40px] p-6 relative h-[430px]">
                                    <div class="bg-[#172230] rounded-full flex items-center gap-4 p-3">
                                        <img src="{{asset('asstes/img/baner/gallery/04.webp')}}"
                                            class="w-16 h-16 rounded-full object-cover">
                                        <div>
                                            <h3 class="text-white font-bold text-xl">
                                                محمد احمدی
                                            </h3>
                                            <p class="text-emerald-500">
                                                مشتری
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600 leading-9 mt-8">
                                        از کیفیت محصولات و سرعت ارسال کاملاً راضی بودم.
                                        پشتیبانی سایت نیز بسیار حرفه‌ای و پاسخگو بود.
                                        قطعاً خرید بعدی خود را نیز از این مجموعه انجام می‌دهم.
                                    </p>
                                    <div class="flex gap-1 text-emerald-500 mt-8 text-2xl">
                                        ★★★★★
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- js -->
    <!-- js -->
    <!-- js -->
    <!-- js -->
    <script>
        let hambarger_menuew = document.getElementById('naser')
        function hambarger_menue(satare) {
            if (satare == 'close') {
                hambarger_menuew.classList.remove('black')
                hambarger_menuew.classList.add('hidden')
                hambarger_menuew.classList.remove('flex')
            }
            if (satare == 'open') {
                hambarger_menuew.classList.remove('hidden')
                hambarger_menuew.classList.remove('flex')
                hambarger_menuew.classList.add('black')
            }

        }
    </script>
</body>

</html>