@extends('header')
@section('content')

<!-- <section class="w-full h-100 bg-[#F2FAFD] flex justify-center items-center">
        <div class="w-11/12 h-full flex justify-between items-center gap-2">
            <div class="w-1/2 h-full flex justify-center items-center">
                <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="" class="max-w-full max-h-full">
            </div>
            <div class="w-1/2 h-full flex flex-col justify-center items-center gap-2">
                <h2 class="text-(--title) text-7xl font-bold">درباره ما</h2>
                <p class="text-lg font-bold text-[#777984]">سلامتی شما انگیزه ماست</p>
            </div>
        </div>
    </section> -->

<style>
    /* تنظیمات برای انیمیشن‌های ملایم */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
    }
</style>
</head>


<div class="w-full flex flex-col gap-8 items-center mt-14">

    <!-- بخش هیرو (Hero Section) -->
    <section class="bg-[#F2FAFD] relative w-full">
        <div class="w-11/12 mx-auto px-4 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                <!-- تصویر سمت چپ -->
                <div class="w-full h-full lg:w-1/2 flex justify-center relative">
                    <!-- تصویر ماسک (جایگزین با عکس خودتان) -->
                    <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="ماسک KN95" class="min-w-8/12 min-h-8/12 max-w-full sm:max-h-90 max-h-60 relative z-10 mask-shadow">
                </div>

                <!-- متن سمت راست -->
                <div class="w-full lg:w-1/2 text-center lg:text-center z-10">
                    <h1 class="text-4xl lg:text-6xl font-extrabold text-brand-dark mb-4">درباره ما</h1>
                    <h2 class="text-xl lg:text-2xl font-semibold text-brand-gray mb-6">سلامتی شما، انگیزه‌ی ماست</h2>
                    <div class="w-24 h-1 bg-brand-green rounded-full mb-6 mx-auto "></div>
                    <p class="text-brand-gray leading-relaxed sm:text-lg lg:text-xl mx-auto">
                        ما در فروشگاه وفادارطب با هدف تأمین محصولات بهداشتی باکیفیت و قیمت مناسب، در کنار شما هستیم.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش داستان ما (Story Section) -->
    <section class="w-11/12">

        <div class="w-full h-full bg-white rounded-3xl shadow-xl overflow-hidden border border-gray-50 flex flex-col md:flex-row items-stretch hover-lift p-7 gap-3">



            <!-- متن سمت چپ -->
            <div class="w-full md:w-1/2  flex flex-col gap-4 justify-center max-md:items-center">
                <h2 class="text-3xl font-bold text-(--title) ">داستان ما</h2>
                <div class="w-16 h-1 bg-(--product) rounded-full mb-6"></div>
                <p class="text-zinc-500 font-bold leading-loose text-justify lg:text-right text-base lg:text-lg max-md:text-center">
                    فروشگاه ویکودین از دل دغدغه‌ای ساده اما مهم متولد شد: دغدغه‌ی دسترسی آسان به محصولات بهداشتی با کیفیت و مطمئن. <br>ما باور داریم که سلامت، بزرگترین سرمایه هر فرد و جامعه است و به همین دلیل، تمام تلاش خود را می‌کنیم تا بهترین محصولات را با مناسب‌ترین قیمت در اختیار شما قرار دهیم
                </p>
                <!-- <p class="text-zinc-500 font-bold leading-loose text-justify lg:text-right text-base lg:text-lg">ما باور داریم که سلامت، بزرگترین سرمایه هر فرد و جامعه است و به همین دلیل، تمام تلاش خود را می‌کنیم تا بهترین محصولات را با مناسب‌ترین قیمت در اختیار شما قرار دهی</p> -->
            </div>

            <!-- تصویر سمت راست -->
            <div class="w-full md:w-1/2 relative flex items-center justify-center">
                <!-- تصویر ماسک و ضدعفونی (جایگزین با عکس خودتان) -->
                <img src="{{asset('assets/img/abotmy_my_history.webp')}}" alt="داستان ما" class="min-w-8/12 lg:min-h-60 max-w-full w-full sm:max-h-90 max-h-70 object-fit rounded-xl">
                <!-- دایره‌های تزئینی -->
                <!-- <div class="absolute top-10 right-10 w-40 h-40 bg-brand-green rounded-full opacity-10"></div> -->
            </div>
        </div>

    </section>

    <!-- بخش ارزش‌های ما (Values Section) -->
    <section class="w-11/12 bg-white flex flex-col justify-center gap-4 p-5 rounded-xl">


        <div class="text-center">
            <h2 class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl font-bold text-brand-dark mb-4">ارزش‌های ما</h2>
            <p class="text-zinc-400 font-bold max-lg:text-sm max-sm:text-xs">آنچه ما را متفاوت می‌کند</p>
            <div class="w-16 h-1 bg-brand-green rounded-full mx-auto mt-4"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- کارت ۱: قیمت مناسب -->
            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">قیمت مناسب</h3>
                <p class="xl:text-sm text-xs text-brand-gray">سلامتی با هزینه معقول</p>
            </div>

            <!-- کارت ۲: تضمین اصالت کالا -->

            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">تضمین اصالت کالا</h3>
                <p class="xl:text-sm text-xs text-brand-gray">خریدی مطمئن و آرام</p>
            </div>

            <!-- کارت ۳: پشتیبانی حرفه‌ای -->


            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">پشتیبانی حرفه‌ای</h3>
                <p class="xl:text-sm text-xs text-brand-gray">همیشه همراه شما هستیم</p>
            </div>

            <!-- کارت ۴: کیفیت تضمینی -->

            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncate">کیفیت تضمینی</h3>
                <p class="xl:text-sm text-xs text-brand-gray">محصولات اورجینال و باکیفیت</p>
            </div>

        </div>

    </section>

    <!-- بخش آمار (Stats Bar) -->
    <section class="w-11/12">
        <div class="bg-[#EAF8F9] rounded-2xl flex flex-col sm:flex-row items-center justify-between gap-8 py-5 lg:px-17 px-5"><!-- آمار ۱ -->
            <div class="flex max-md:flex-col max-sm:flex-row items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="sm:size-10 size-9 fill-green-600">
                        <path d="M248.8 309.7c-27.6-30.3-65.5-101-71.8-261.7H399.1c-6.4 160.7-44.3 231.4-71.8 261.7c-13.7 15.1-25.9 21.4-33.1 24.1c-2.6 1-4.7 1.5-6.1 1.9c-1.4-.3-3.5-.9-6.1-1.9c-7.2-2.7-19.4-9-33.1-24.1zM400 0H176c-26.5 0-48.1 21.8-47.1 48.2c.2 5.3 .4 10.6 .7 15.8H24C10.7 64 0 74.7 0 88C0 196.5 45.9 265.7 101.5 308.6c53.9 41.7 115.7 57.6 149.5 63.7c4.7 2.5 9.1 4.5 13.1 6.1V464H184c-13.3 0-24 10.7-24 24s10.7 24 24 24H288 392c13.3 0 24-10.7 24-24s-10.7-24-24-24H312V378.4c4-1.6 8.4-3.6 13.1-6.1c33.8-6 95.5-22 149.5-63.7C530.1 265.7 576 196.5 576 88c0-13.3-10.7-24-24-24H446.4c.3-5.2 .5-10.4 .7-15.8C448.1 21.8 426.5 0 400 0zm42.7 112h84.4c-6 78.4-41.3 127.3-81.9 158.6c-17.5 13.6-36.3 24-54.4 32c22.7-40.3 42.8-100.5 51.9-190.6zM185.2 302.6c-18.1-8-36.8-18.4-54.4-32C90.2 239.3 54.9 190.4 48.9 112h84.4c9.1 90.1 29.2 150.3 51.9 190.6z" />
                    </svg>
                </div>
                <div class="text-brand-dark flex flex-col max-md:items-center max-sm:items-start">
                    <span class="block lg:text-3xl sm:text-2xl text-2xl font-bold">۳ سال</span>
                    <span class="text-zinc-500 max-lg:text-sm font-bold">سابقه فعالیت</span>
                </div>
            </div>

            <div class="hidden sm:block w-0.5 h-12 bg-zinc-200"></div>

            <!-- آمار ۲ -->


            <div class="flex max-md:flex-col max-sm:flex-row items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="">
                    <svg class="sm:size-10 size-9 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
                <div class="text-brand-dark flex flex-col max-md:items-center max-sm:items-start">
                    <span class="block lg:text-3xl sm:text-2xl text-2xl font-bold">+100</span>
                    <span class="text-zinc-500 max-lg:text-sm font-bold">محصول متنوع</span>
                </div>
            </div>

            <div class="hidden sm:block w-0.5 h-12 bg-zinc-200"></div>

            <!-- آمار ۳ -->

            <div class="flex max-md:flex-col max-sm:flex-row items-center gap-4 w-full md:w-auto justify-center md:justify-start">
                <div class="">
                    <svg class="sm:size-10 size-9 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="text-brand-dark flex flex-col max-md:items-center max-sm:items-start">
                    <span class="block lg:text-3xl sm:text-2xl text-2xl font-bold">+500</span>
                    <span class="text-zinc-500 max-lg:text-sm font-bold">مشتری راضی</span>
                </div>
            </div>

        </div>
    </section>

    <!-- بخش فوتر/Banner (CTA Section) -->
    <section class="w-11/12 hidden">
        <div class="bg-gradient-to-l from-[#e0f2fe] to-[#ccfbf1] rounded-3xl p-6 relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">

            <!-- متن و دکمه -->
            <div class="w-full md:w-1/2 text-center md:text-right z-10">
                <h2 class="lg:text-3xl xl:text-4xl sm:text-2xl text-xl font-bold text-(--title) mb-4">با ویکودین در کنار سلامت باشید</h2>
                <p class="text-zinc-500 font-bold leading-relaxed mb-8 text-base xl:text-lg max-lg:text-sm">
                    ما متعهد هستیم تا با ارائه محصولات باکیفیت و خدمات بهتر، سلامتی و آرامش را برای شما و خانواده‌تان فراهم کنیم.
                </p>
                <button class="bg-(--primary_color) hover:bg-emerald-600 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg shadow-brand-green/30 flex items-center gap-2 mx-auto md:mx-0">
                    <span>همین حالا خرید کنید</span>
                    <svg class="w-5 h-5 rtl:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>

            <!-- تصاویر -->
            <div class="w-full md:w-1/2 flex justify-center items-center relative">
                <!-- <div class="absolute inset-0 bg-white/40 rounded-full blur-2xl transform scale-75"></div> -->
                <!-- تصاویر محصولات (جایگزین با عکس خودتان) -->
                <img src="{{asset('assets/img/aboutmy_product.webp') }}" alt="محصولات ویکودین" class="min-w-8/12 sm:min-h-60 min-h-40 max-w-full sm:max-h-90 max-h-50 drop-shadow-2xl">
            </div>
        </div>
    </section>

    <section class="w-11/12 bg-[#EAF8F9] rounded-xl p-5">

        <!-- بخش بالایی (هدر و تصویر) -->
        <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12 mb-16 relative">

            <!-- برگ‌های تزئینی (بالا) -->
            <!-- <img src="https://api.iconify.design/flat-color-icons:leaf.svg?color=%2310b981" alt="leaf" class="absolute top-0 left-1/4 w-8 h-8 opacity-60 rotate-45 hidden lg:block leaf-anim"> -->
            <!-- <img src="https://api.iconify.design/flat-color-icons:leaf.svg?color=%2310b981" alt="leaf" class="absolute bottom-10 right-10 w-10 h-10 opacity-50 -rotate-12 hidden lg:block leaf-anim" style="animation-delay: 1s;"> -->

            <!-- متن سمت راست -->
            <div class="w-full lg:w-5/12 text-center lg:text-right z-10 max-lg:order-2">
                <div class="w-full flex items-center gap-4 justify-center lg:justify-start mb-4">
                    <h1 class="lg:text-3xl xl:text-4xl sm:text-2xl text-xl font-extrabold text-brand-dark">خدمات ما</h1>
                    <!-- <div class="w-16 h-1.5 bg-brand-green rounded-full mt-2"></div> -->
                </div>
                <p class="lg:text-lg max-sm:text-sm text-brand-text leading-relaxed max-w-lg mx-auto lg:mx-0">
                    عرضه‌ی بهترین محصولات پزشکی با کیفیت تضمینی عرضه‌ی بهترین محصولات پزشکی و بهداشتی با کیفیت تضمینی
                </p>
            </div>

            <!-- تصویر سمت چپ -->
            <!-- <div class="w-full lg:w-1/2 flex justify-center relative"> -->
                <!-- دایره پس‌زمینه -->
                <!-- <div class="absolute inset-0 bg-brand-lightGreen rounded-full w-64 h-64 lg:w-80 lg:h-80 mx-auto top-1/2 -translate-y-1/2 opacity-60"></div> -->

                <!-- تصویر تجهیزات (جایگزین با عکس خودتان) -->
                <!-- <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="تجهیزات پزشکی" class="min-w-8/12 sm:min-h-40 min-h-20 max-w-full sm:max-h-70 max-h-30 drop-shadow-2xl"> -->
                <!-- گرید کارت‌های خدمات -->
                
        
            <!-- </div> -->
            <div class="lg:w-7/12 w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 max-lg:order-1">
    
                <!-- کارت ۱: قیمت مناسب -->
                <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                    <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                        
    
                        <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 14v3h-3v3h-3v-3H8v-3H5v-3h3V8h3V5h3v3h3v3h3v3z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 20h18"></path>
                        </svg>
    
                    </div>
                    <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">>تجهیزات پزشکی</h3>
                    <p class="xl:text-sm text-xs text-brand-gray">انواع تجهیزات و دستگاه‌های پزشکی پیشرفته</p>
                </div>
    
                <!-- کارت ۲: تضمین اصالت کالا -->
    
                <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                    <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                      
                        <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
    
                    </div>
                    <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">وسایل بهداشتی</h3>
                    <p class="xl:text-sm text-xs text-brand-gray">ماسک، دستکش و لوازم بهداشتی استاندارد</p>
                </div>
    
                <!-- کارت ۳: پشتیبانی حرفه‌ای -->
    
    
                <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                    <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                        <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 10v2m-3-2v2m6-2v2"></path>
                        </svg>
    
                    </div>
                    <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">دستگاه‌های پزشکی</h3>
                    <p class="xl:text-sm text-xs text-brand-gray">تجهیزات تشخیصی و مراقبتی با کیفیت بالا</p>
                </div>
    
                <!-- کارت ۴: کیفیت تضمینی -->
    
                <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                    <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                        
    
                        <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4v16m8-8H4"></path>
                        </svg>
    
                    </div>
                    <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncate">لوازم کمک‌های اولیه</h3>
                    <p class="xl:text-sm text-xs text-brand-gray">تجهیزات ضروری برای مراقبت‌های اولیه</p>
                </div>
    
            </div>
        </div>


        <!-- بخش پایینی (دکمه مشاهده همه خدمات) -->
        <div class="w-full bg-[#9BF2C7] flex max-sm:flex-col items-center justify-between gap-4 relative overflow-hidden mt-5 p-3 rounded-full">

            <!-- المان تزئینی برگ سمت چپ -->
            <!-- <img src="https://api.iconify.design/flat-color-icons:leaf.svg?color=%2310b981" alt="leaf" class="absolute -bottom-2 -left-2 w-16 h-16 opacity-30 -rotate-45"> -->

            <!-- آیکون و متن سلامت -->
            
            <!-- دکمه مشاهده همه -->
            <a href="#" class="flex items-center sm:gap-2 hover:gap-3 gap-1 transition_normal font-bold text-brand-dark hover:text-brand-green transition-colors duration-300 lg:text-lg max-sm:text-sm z-10 group text-zinc-600 font-bold">
                <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
                <span>مشاهده همه خدمات</span>
            </a>
            <div class="flex items-center sm:gap-3 gap-1 z-10 text-brand-green max-sm:hidden">
                <span class="font-bold text-zinc-600 lg:text-lg max-sm:text-sm">سلامتی، حق شماست</span>
                <svg class="w-8 h-8 text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4"></path>
                </svg>
            </div>
        </div>

    </section>



    <footer class="w-full bg-[url({{asset('assets/img/baner/gallery/06.webp')}})] bg-cover bg-center mt-7 flex justify-center items-start relative">
        <div class="w-full h-full absolute top-0 right-0 bg-(--greey_section)/90"></div>
        <div class="w-11/12 h-full z-1 flex max-md:flex-col max-md:gap-8 justify-between items-start py-7">
            <div class="md:w-3/12 w-full flex">
                <div class="w-full h-full flex flex-col lg:gap-6 gap-4 justify-start max-lg:items-center items-start">
                    <div class="lw-full flex flex-col lg:gap-6 gap-4 justify-start items-center ">
                        <div class="w-7/12 max-h-20 flex justify-center items-center">
                            <img src="{{asset('assets/img/header/logo.png')}}" alt="" class="min-w-8/12 min-h-8/12 max-w-10/12 max-h-10/12">
                        </div>
                        <p class="w-full xl:text-sm lg:text-xs text-[11px] font-bold text-[#f4f1ff] max-lg:text-center ">
                            مجموعه برسو طراحی اختصاصی سایت که شما همیشه میخواستی با مشاوره کسب کار و اجرای ایده های
                            شما در سایت کسب و کار خود</p>
                        <div class="w-full flex items-center justify-center xl:gap-8 gap-6">
                            <a href="" class="p-1.5 bg-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-4 fill-(--gold-primary)">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z">
                                    </path>
                                </svg>
                            </a>
                            <a href="" class="p-1.5 bg-white rounded-full">
                                <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg" class="xl:size-5 size-4 fill-(--gold-primary)">
                                    <path d="M1764 11q33 24 27 64l-256 1536q-5 29-32 45-14 8-31 8-11 0-24-5l-527-215-298 327q-18 21-47 21-14 0-23-4-19-7-30-23.5t-11-36.5v-452l-472-193q-37-14-40-55-3-39 32-59l1664-960q35-21 68 2zm-342 1499l221-1323-1434 827 336 137 863-639-478 797z">
                                    </path>
                                </svg>
                            </a>
                            <a href="" class="p-1.5 bg-white rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-5 size-4 fill-(--gold-primary)">
                                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="md:w-8/12 w-full h-full flex flex-col gap-4 justify-start items-start">
                <div class="w-full flex justify-start items-start">
                    <div class="w-1/3 flex flex-col gap-2 justify-start md:items-start items-center">
                        <h4 class="lg:text-lg max-md:text-sm text-white font-bold">دسترسی سریع</h4>
                        <ul class="max-lg:text-sm max-md:text-xs flex flex-col gap-1 justify-start md:items-start items-center text-(--secondary-text) font-bold">
                            <li>تعمییرات</li>
                            <li>تعمییرات</li>
                            <li>شستشو</li>
                            <li>تعمییرات</li>
                        </ul>
                    </div>
                    <div class="w-1/3 flex flex-col gap-2 justify-start md:items-start items-center">
                        <h4 class="lg:text-lg text-white font-bold">خدمات ما</h4>
                        <ul class="max-lg:text-sm flex flex-col gap-1 justify-start md:items-start items-center text-(--secondary-text) font-bold">
                            <li>تعمییرات</li>
                            <li>تعمییرات</li>
                            <li>شستشو</li>
                            <li>تعمییرات</li>
                        </ul>
                    </div>
                    <div class="w-1/3 flex flex-col gap-2 justify-start md:items-start items-center">
                        <h4 class="lg:text-lg text-white font-bold">کمک</h4>
                        <ul class="max-lg:text-sm flex flex-col gap-1 justify-start md:items-start items-center text-(--secondary-text) font-bold">
                            <li>تعمییرات</li>
                            <li>تعمییرات</li>
                            <li>شستشو</li>
                            <li>تعمییرات</li>
                        </ul>
                    </div>

                </div>
                <span class="w-full h-0.5 bg-white/50 rounded-full"></span>
                <div class="w-full flex max-sm:flex-col max-md:gap-2 justify-between items-center max-lg:text-sm max-md:text-xs">
                    <p class="text-(--secondary-text)">طراحی و توسعه شرکت اندیشه گران طراحان دیجیتال <span class="text-white font-bold">(فائوس)</span></p>
                    <span class=" text-white font-bold">09147794595</span>
                </div>
            </div>
        </div>
    </footer>
</div>





@endsection;