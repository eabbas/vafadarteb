<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
</head>

<body>
    <div class="w-full bg-[#071A2F]">
        <div class="max-md:w-90/100 min-md:w-98/100 mx-auto py-6 flex justify-between">
            <div class="flex items-center justify-center ">
                <img src="asstes/img/header/logo.png" alt="" class="w-30 sm:w-30 md:w-40 text-[#FFFFFF]">
            </div>
            <div class="w-6/10 h-11 bg-white rounded-4xl flex gap-3 items-center max-md:hidden">
                <svg class="size-7 flex" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="search" class="w-full flex items-center justify-center outline-none ">
            </div>
            <div class="flex gap-2 items-center justify-end">
                <div class="max-md:hidden flex gap-5">
                    <svg class="w-5 h-7 max-lg:h-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#FFFFFF"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="9" cy="21" r="1" />
                        <circle cx="20" cy="21" r="1" />
                        <path d="M1 1h4l2.68 13.39A2 2 0 0 0 9.64 16H19a2 2 0 0 0 2-1.72L23 6H6" />
                    </svg>
                    <svg class="w-5 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#FFFFFF"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>ّ
                </div>
                <div class="min-md:hidden">
                    <svg class="w-6 h-8 hidden max-lg:block" xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                        viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round">
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <line x1="3" y1="12" x2="21" y2="12" />
                        <line x1="3" y1="18" x2="21" y2="18" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="w-full h-auto py-6 min-md:hidden">
            <div class="w-11/12 mx-auto h-12 bg-white rounded-2xl flex gap-3 items-center">
                <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <input type="search" class="w-full flex items-center justify-center outline-none ">
            </div>
        </div>
    </div>
    <div class="w-full h-15 border-b-1">
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
    <section class="w-15/16 mx-auto h-auto flex justify-between gap-3 mt-8">
        <div class="min-w-70 h-auto bg-[#F8FAFC] border-1 rounded-xl max-lg:hidden">
            <div class="w-65 mx-auto h-auto flex flex-col pt-6">
                <div class="flex gap-3">
                    <?xml version="1.0" encoding="UTF-8"?>
                    <svg class="size-6" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>Filter</title>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Filter">
                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24">

                                </rect>
                                <line x1="4" y1="5" x2="16" y2="5" id="Path" stroke="#0C0310" stroke-width="2"
                                    stroke-linecap="round">

                                </line>
                                <line x1="4" y1="12" x2="10" y2="12" id="Path" stroke="#0C0310" stroke-width="2"
                                    stroke-linecap="round">

                                </line>
                                <line x1="14" y1="12" x2="20" y2="12" id="Path" stroke="#0C0310" stroke-width="2"
                                    stroke-linecap="round">

                                </line>
                                <line x1="8" y1="19" x2="20" y2="19" id="Path" stroke="#0C0310" stroke-width="2"
                                    stroke-linecap="round">

                                </line>
                                <circle id="Oval" stroke="#0C0310" stroke-width="2" stroke-linecap="round" cx="18"
                                    cy="5" r="2">

                                </circle>
                                <circle id="Oval" stroke="#0C0310" stroke-width="2" stroke-linecap="round" cx="12"
                                    cy="12" r="2">

                                </circle>
                                <circle id="Oval" stroke="#0C0310" stroke-width="2" stroke-linecap="round" cx="6"
                                    cy="19" r="2">

                                </circle>
                            </g>
                        </g>
                    </svg>
                    <span class="size-7 font-bold">فیلتر</span>
                </div>
                <div class="w-full pt-6 pb-3">
                    <div class="w-full flex justify-between ">
                        <span class="font-bold">دسته بندی</span>
                        <?xml version="1.0" ?>
                        <svg class="size-7" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="w-9/10 mx-auto border-1 mt-4"></div>
                    <div class="w-full h-auto">
                        <div class="rounded-2xl overflow-hidden">
                            <div class="flex flex-col gap-2 py-3">
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">درحال حراج</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">موجود در انبار</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">ناموجود</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">تخفیف</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto">
                    <div class="w-full flex justify-between pb-4">
                        <span class="font-bold">برند</span>
                        <?xml version="1.0" ?>
                        <svg class="size-7" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="w-full pt-1 pb-2">
                        <input type="search" name="" id="" placeholder="حستجوی برندها"
                            class="w-full h-8 bg-white border-1 rounded-lg">
                    </div>
                    <div class="w-full h-auto">
                        <div class="rounded-2xl overflow-hidden">
                            <div class="flex flex-col gap-2 py-3">
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">درحال حراج</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">موجود در انبار</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">ناموجود</span>
                                </label>
                                <label for="" class="flex gap-5 w-11/12 mx-auto">
                                    <input type="checkbox">
                                    <span class="text-lg text-[#757f95]">تخفیف</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="w-9/10 mx-auto border-1 mt-3"></div>
                    <div class="w-19/20 mx-auto flex flex-col py-5">
                        <div class="flex">
                            <input type="range" class="w-1/2" dir="ltr">
                            <input type="range" class="w-1/2">
                        </div>
                        <div class="flex justify-around py-6">
                            <div class="flex flex-col px-5 py-1 border-1 rounded-lg">
                                <div class="border-b-1 flex items-center justify-center">
                                    <span>از</span>
                                </div>
                                <div>
                                    <span>1.000.000</span>
                                </div>
                            </div>
                            <div class="flex flex-col px-5 py-1 border-1 rounded-lg">
                                <div class="border-b-1 flex items-center justify-center">
                                    <span>تا</span>
                                </div>
                                <div>
                                    <span>10.000.000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-20 flex flex-col">
            <div class="w-full flex justify-between max-lg:justify-center">
                <div class="h-auto">
                    <h1 class="text-[5vw] sm:text-[4vw] md:text-[3vw] lg:text-[2.1vw] font-bold">نتایج جستجو برای
                        "فشارسنج دیجیتال"</h1>
                    <span class="">فشار سنج عقربه ای</span>
                </div>
                <div class="max-lg:hidden">
                    <div class="px-6 py-3 bg-[#F8FAFC] border-1 rounded-lg">
                        <h3>ظاهراً دنبال این هستید</h3>
                        <span class="text-[#6bc1e7]">تعداد ۴۸ محصول یافت شد</span>
                    </div>
                </div>
            </div>
            <div
                class="w-full h-auto flex gap-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 justify-around mt-8">
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                <div class="w-full h-90 bg-white rounded-xl overflow-hidden group ">
                    <div class="w-full h-2/3 flex justify-center items-end overflow-hidden relative">
                        <img src="{{asset('assets/img/silyder.producte/03.webp')}}" alt=""
                            class="w-11/12 h-11/12 object-inset pt-2 absolute bootom-0">
                        <div class=" opacity-0 group-hover:opacity-100">
                            <div
                                class="flex gap-2 translate-y-20 group-hover:-translate-y-5 transition-all duration-500">
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
                    <div class="w-11/12 mx-auto h-1/3 flex flex-col justify-between py-2 relative">
                        <div class="flex flex-col gap-2">
                            <span class="font-bold text-lg text-[#023350] group-hover:text-[#03a297]"> ایرانی و
                                عالی قطره فلورا</span>
                            <ul class="flex gap-1">
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="fill-[#fba707]" width="16px" height="16px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                    <svg class="" width="16px" height="16px" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                                            stroke="#fba707" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </li>
                                <li>
                                    <?xml version="1.0" encoding="utf-8"?>
                                    <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
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
                
            </div>
            <!-- <section>
                <div class="w-11/12 mx-auto bg-[#023350] py-10 flex justify-center gap-5 flex-wrap rounded-3xl ">
                    <div
                        class="w-60 xl:w-80 h-auto flex flex-row-reverse justify-center items-center gap-5 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="48" fill="#EDE0D7"/>
                                <path d="M25 55V42C25 22 38 12 50 12C62 12 75 22 75 42V55"
                                        fill="none"
                                        stroke="#0A131D"
                                        stroke-width="7"
                                        stroke-linecap="round"/>
                                <rect x="20" y="50" width="13" height="28" rx="6" fill="#0A131D"/>
                                <rect x="67" y="50" width="13" height="28" rx="6" fill="#0A131D"/>
                                <path d="M36 37H64C69 37 73 41 73 46V55C73 60 69 64 64 64H54L46 70L48 63H44C39 63 35 59 35 54V46C35 41 39 37 44 37Z"
                                        fill="#EA8332"/>
                                <circle cx="45" cy="51" r="2.5" fill="#FFFFFF"/>
                                <circle cx="54" cy="51" r="2.5" fill="#FFFFFF"/>
                                <circle cx="63" cy="51" r="2.5" fill="#FFFFFF"/>
                            </svg>
                        </div>
                        <div class="text-white flex flex-col gap-3">
                            <h4 class="font-bold text-lg">با ما سماس بگیرین</h4>
                            <p class="text-md">پشتیبانی 24 ساعته</p>
                        </div>
                    </div>
                    <div
                        class="w-60 xl:w-80 h-auto flex flex-row-reverse justify-center items-center gap-5 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="48" fill="#EDE0D7"/>
                                <path d="M24 35C30 18 55 12 70 25"
                                        fill="none"
                                        stroke="#EA8332"
                                        stroke-width="6"
                                        stroke-linecap="round"/>
                                <path d="M66 17L74 27L62 30Z" fill="#EA8332"/>
                                <rect x="18" y="48" width="64" height="32" rx="6" fill="#0A131D"/>
                                <path d="M18 53C18 47 24 43 31 44L82 55V80H18Z"
                                        fill="#0A131D"/>
                                <rect x="68" y="59" width="18" height="12" rx="3" fill="#85512F"/>
                                <circle cx="77" cy="65" r="3" fill="#C8AD9A"/>
                                <path d="M32 28L66 37L60 56L26 47Z"
                                        fill="#C8AD9A"/>
                                <circle cx="46" cy="42" r="7" fill="#EA8332"/>
                                <path d="M43 42H49M46 39V45"
                                        stroke="#FFFFFF"
                                        stroke-width="2"
                                        stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="text-white flex flex-col gap-3">
                            <h4 class="font-bold text-lg">پرداخت امن</h4>
                            <p class="text-md">پرداخت %100 امن</p>
                        </div>
                    </div>
                    <div
                        class="w-60 xl:w-80 h-auto flex flex-row-reverse justify-center items-center gap-5 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="48" fill="#EDE0D7"/>
                            <rect x="15" y="35" width="48" height="32" rx="5" fill="#0A131D"/>
                            <rect x="15" y="43" width="48" height="6" fill="#85512F"/>
                            <rect x="22" y="55" width="18" height="5" rx="2" fill="#C8AD9A"/>
                            <path d="M68 24L88 32V52C88 68 79 79 68 84C57 79 48 68 48 52V32Z"
                                    fill="#EA8332"/>
                            <rect x="59" y="50" width="18" height="16" rx="3" fill="#FFFFFF"/>
                            <path d="M62 50V44C62 36 74 36 74 44V50"
                                    fill="none"
                                    stroke="#FFFFFF"
                                    stroke-width="4"
                                    stroke-linecap="round"/>
                            <path d="M63 58L67 62L74 54"
                                    fill="none"
                                    stroke="#EA8332"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text-white flex flex-col gap-3">
                            <h4 class="font-bold text-lg">باز پرداخت</h4>
                            <p class="text-md">بازگشت کالا ظرف یک هفته</p>
                        </div>
                    </div>
                    <div
                        class="w-60 xl:w-80 h-auto flex flex-row-reverse justify-center items-center gap-5 items-center">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="48" fill="#EDE0D7"/>
                                <path d="M15 38H58V68H15Z" fill="#0A131D"/>
                                <path d="M58 45H72L84 57V68H58Z" fill="#EA8332"/>
                                <path d="M62 48H70L77 57H62Z" fill="#FFFFFF"/>
                                <circle cx="30" cy="70" r="9" fill="#3A2D26"/>
                                <circle cx="30" cy="70" r="4" fill="#EDE0D7"/>
                                <circle cx="70" cy="70" r="9" fill="#3A2D26"/>
                                <circle cx="70" cy="70" r="4" fill="#EDE0D7"/>
                                <path d="M18 30H35M12 36H32M20 42H35"
                                        fill="none"
                                        stroke="#EA8332"
                                        stroke-width="4"
                                        stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="text-white flex flex-col gap-3">
                            <h4 class="font-bold text-lg">ارسال رایگان</h4>
                            <p class="text-md">سفارش های بالای 120دلار</p>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
    </section>
</body>

</html>