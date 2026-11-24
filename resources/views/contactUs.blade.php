    @extends('header')
    @section('content')

    <div class="w-full flex flex-col gap-8 items-center mt-13">
        <!-- بخش هیرو (Hero Section) -->
        <section class="bg-[#F2FAFD] relative w-full py-4">
            <div class="w-11/12 mx-auto px-4 lg:px-8">
                <div class="flex flex-col lg:flex-row items-center justify-between gap-12">

                    <!-- تصویر سمت چپ -->
                    <div class="w-full h-full lg:w-1/2 flex justify-center relative">
                        <!-- تصویر ماسک (جایگزین با عکس خودتان) -->
                        <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="ماسک KN95" class="min-w-8/12 min-h-8/12 max-w-full sm:max-h-90 max-h-60 relative z-10 mask-shadow">
                    </div>

                    <!-- متن سمت راست -->
                    <div class="w-full lg:w-1/2 text-center lg:text-center z-10">
                        <h1 class="sm:text-4xl text-3xl lg:text-5xl font-extrabold text-brand-dark mb-4">تماس با وفادارطب</h1>
                        <h2 class="text-xl lg:text-2xl font-semibold text-brand-gray mb-6">همیشه در کنار شما هستیم</h2>
                        <div class="w-24 h-1 bg-brand-green rounded-full mb-6 mx-auto "></div>
                        <p class="text-brand-gray leading-relaxed sm:text-lg lg:text-xl mx-auto">
                            در صورت داشتن هرگونه سوال، پیشنهاد یا مشکل، از طریق راه‌های ارتباطی زیر با ما در تماس باشید.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- اطلاعات ارتباط مستقیم -->
        <section class="w-11/12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- کارت ۱: قیمت مناسب -->
            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-full fill-green-700">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">آدرس ما</h3>
                <p class="xl:text-sm text-xs text-brand-gray">آذربایجان شرقی ،بناب ،میدان معلم</p>
            </div>

            <!-- کارت ۲: تضمین اصالت کالا -->

            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2.5 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-full fill-green-700">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">شماره تماس </h3>
                <p class="xl:text-sm text-xs text-brand-gray">041-1212-3232</p>
            </div>

            <!-- کارت ۳: پشتیبانی حرفه‌ای -->


            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="size-full fill-green-700">
                        <path d="M8.1,21.21q-1.82-0.79-3.17-2.14Q3.58,17.73 2.79,15.9T2,12Q2,9.92 2.79,8.1Q3.58,6.27 4.93,4.93Q6.28,3.57 8.1,2.79Q9.93,2 12,2t3.9,0.79t3.17,2.14q1.35,1.35 2.14,3.17Q22,9.92 22,12t-0.79,3.9t-2.14,3.17q-1.35,1.35-3.17,2.14T12,22q-2.07,0-3.9-0.79ZM6.33,17.68L12,12V4Q8.65,4 6.33,6.32T4,12q0,1.6 0.6,3.07t1.72,2.6Z" />
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncte">ساعات کاری</h3>
                <p class="xl:text-sm text-xs text-brand-gray">هر رو از 8 صبح تا 10 شب</p>
            </div>

            <!-- کارت ۴: کیفیت تضمینی -->

            <div class="w-full p-4 bg-white rounded-2xl text-center border border-gray-100 shadow-sm hover-lift flex flex-col items-center">
                <div class="size-12 p-2 bg-(--primary_color)/40 rounded-full flex items-center justify-center mb-3 text-brand-green">
                    <!-- <svg class="size-full text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg> -->

                    <svg class="size-full fill-green-700 text-[#9BF2C7]" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-bold xl:text-lg mb-2 text-(--title) max-w-full truncate">ایمیل ما</h3>
                <p class="xl:text-sm text-xs text-brand-gray">vafadarteb@gmail.com</p>
            </div>

        </section>
        <!-- فرم ارتباط -->
        <section class="w-11/12 ">
            <!-- <div class="container mx-auto px-4 lg:px-8"> -->
            <div class=" rounded-3xl flex  gap-3">

                <!-- تصویر فرم -->
                <div class="w-full lg:w-4/12 min-h-full bg-brand-lightGreen flex items-center justify-center max-lg:hidden">
                    <!-- المان‌های تزئینی -->
                    <!-- <div class="absolute top-0 right-0 w-64 h-64 bg-brand-green opacity-10 rounded-full blur-3xl"></div> -->
                    <!-- تصویر (جایگزین با عکس خودتان شود) -->
                    <img src="{{asset('assets/img/call_my.webp')}}" alt="تماس با وفادار طب" class="lg:min-w-full min-w-5/12 min-h-full max-w-full lg:max-h-100 max-h-80 rounded-2xl">
                </div>
                <!-- فرم تماس -->
                <div class="w-full min-h-full lg:w-8/12 bg-white shadow-[0_0_10px_1px] shadow-zinc-200 p-5 rounded-xl">
                    <h2 class="lg:text-2xl sm:text-xl text-lg font-bold text-brand-dark mb-2">با ما در ارتباط باشید</h2>
                    <p class="text-brand-gray sm:text-sm text-xs mb-8">پیام خود را برای ما ارسال کنید. در کوتاه‌ترین زمان پاسخ می‌دهیم.</p>

                    <form class="space-y-4">
                        <div class="flex flex-col sm:grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- نام -->
                            <div class="w-full flex items-center gap-3 border border-zinc-200 bg-white rounded-xl h-11 px-2.5">
                                <span class=" text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                                <input type="text" placeholder="نام و نام خانوادگی *" class="custom-input w-full outline-none text-(--title) max-xl:text-sm">
                            </div>
                            <!-- شماره تماس -->
                            <div class="w-full flex items-center gap-3 border border-zinc-200 bg-white rounded-xl h-11 px-2.5">
                                <span class=" text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </span>
                                <input type="number" placeholder="شماره تماس*" class="custom-input w-full outline-none text-(--title) max-xl:text-sm">
                            </div>
                            <!-- موضوع -->
                            <div class="w-full flex items-center gap-3 border border-zinc-200 bg-white rounded-xl h-11 px-2.5 col-span-2">
                                <span class=" text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </span>
                                <input type="text" placeholder="موضوع پیام *" class="custom-input w-full outline-none text-(--title) max-xl:text-sm">
                            </div>
                            <!-- متن  پیام  -->
                            <div class="w-full flex gap-3 border border-zinc-200 bg-white rounded-xl py-2 px-2.5 col-span-2">
                                <span class=" text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </span>
                                <textarea name="" id="" placeholder="متن پیام *" class="custom-input w-full outline-none text-(--title) max-xl:text-sm" rows="5"></textarea>
                            </div>

                            <!-- شماره تماس
                            <div class="relative">
                                <span class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </span>
                                <input type="tel" placeholder="شماره تماس *" class="custom-input pr-10 pl-4">
                            </div> -->
                        </div>

                        <button class="w-full py-2 flex justify-center items-center gap-2 rounded-full bg-green-600 hover:bg-green-700 transition_normal text-white">
                            <svg class="size-5 rotate-40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            <span>ارسال پیام</span>
                        </button>

                    </form>
                </div>
            </div>
            <!-- </div> -->
        </section>
        <!-- ادرس -->
        <section class="w-11/12 flex max-md:flex-col gap-4">
            <div class="md:w-5/12 w-full min-h-full  flex flex-col gap-2 justify-center">
                <h5 class="xl:text-4xl lg:text-3xl sm:text-2xl text-xl text-(--title) font-bold ">آدرس ما</h5>
                <p class="lg:text-lg font-bold text-zinc-500 mb-2">ما مفتخریم در کنار شما هستیم</p>
                <div class="flex gap-2 items-center mb-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-5 fill-green-700">
                            <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"></path>
                        </svg>
                    </div>
                    <p class="text-zinc-500 font-bold max-lg:text-sm">آذربایجان شرقی ،بناب ،میدان معلم</p>
                </div>
                <a href="" class="lg:w-1/3 w-1/2 py-2 rounded-full flex justify-center items-center gap-2 bg-(--product)">
                    <span class="text-sm text-green-800 font-bold">مشاهده در نقشه</span>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="xl:size-4 size-3.5 rotate-180 fill-green-600">
                            <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"></path>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="md:w-7/12 w-full">
                <img src="{{asset('assets/img/location_contactUs.webp')}}" alt="" class="md:w-full max-w-full lg:max-h-72 max-h-40">
            </div>
        </section>

        <!-- سکشن سوالات متداول -->
        <section class="w-11/12 bg-[#F0FAFC] rounded-xl flex justify-between p-4">

            <!-- کانتینر اصلی با پس‌زمینه گرادیانت -->
            <!-- <div class="w-full rounded-[2.5rem] p-6 md:p-10 lg:p-12 relative overflow-hidden flex flex-col lg:flex-row items-center gap-10"> -->

            <!-- المان‌های تزئینی پس‌زمینه (دایره‌های محو) -->
            <!-- <div class="absolute top-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl opacity-40 -translate-y-1/2 translate-x-1/3 pointer-events-none"></div> -->
            <!-- <div class="absolute bottom-0 left-0 w-80 h-80 bg-[#10b981] rounded-full blur-3xl opacity-10 translate-y-1/3 -translate-x-1/4 pointer-events-none"></div> -->
            <div class="md:w-4/12 h-full flex justify-center items-center max-md:hidden">
                <img src="{{asset('assets/img/img_question.webp')}}" alt="" class="min-w-full lg:min-h-50 min-h-35 max-w-full lg:max-h-70 max-h-50">
            </div>
            <!-- بخش محتوا (سوالات) -->
            <div class="w-full md:w-8/12 h-full flex flex-col">

                <!-- هدر سکشن -->
                <div class="text-center lg:text-right mb-3 relative">
                    <!-- برگ تزئینی بالای عنوان -->
                    <!-- <img src="https://api.iconify.design/flat-color-icons:leaf.svg?color=%2310b981" alt="leaf" class="absolute -top-6 right-0 w-8 h-8 opacity-60 -rotate-45 hidden lg:block"> -->

                    <h2 class="sm:text-2xl text-xl lg:text-3xl font-bold text-[#0f172a] mb-2">
                        سوالات متداول
                        <!-- خط سبز زیر عنوان -->
                        <!-- <span class="absolute -bottom-2 right-0 w-1/2 h-1 bg-[#10b981] rounded-full"></span> -->
                    </h2>
                    <p class="text-gray-600 mt-4 text-sm  md:text-base">پاسخ سوالات رایج شما درباره محصولات و خدمات ما</p>
                </div>

                <!-- لیست آکاردئون‌ها -->
                <div class="flex flex-col items-center gap-2">

                    <div class="w-full max-h-10 overflow-y-hidden flex flex-col gap-2 items-center transition_slow bg-white rounded-xl">
                        <div class="w-full h-12 flex justify-between items-center px-4 py-2 border-b-2 border-zinc-200 frequently_question_button">
                            <span class="text-(--title) font-bold min-[370px]:text-sm sm:text-base text-xs">مدت زمان ارسال چقدر است ؟</span>
                            <div>
                                <svg class="size-4 fill-(--title) transition_normal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full lg:max-h-40 max-h-30 pr-7 py-3 font-bold max-lg:text-sm max-sm:text-xs text-zinc-500 overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-thumb]:bg-(--primary_color) [&::-webkit-scrollbar-thumb]:rounded-full">
                            از دو روز کاری تا 10 روز کاری به دست شما میرسد
                        </div>
                    </div>
                    <div class="w-full max-h-10 overflow-y-hidden flex flex-col gap-2 items-center transition_slow bg-white rounded-xl">
                        <div class="w-full h-12 flex justify-between items-center px-4 py-2 border-b-2 border-zinc-200 frequently_question_button">
                            <span class="text-(--title) font-bold min-[370px]:text-sm sm:text-base text-xs">روش های پرداخت به چه صورت است ؟</span>
                            <div>
                                <svg class="size-4 fill-(--title) transition_normal" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="w-full lg:max-h-40 max-h-30 pr-7 py-3 font-bold max-lg:text-sm max-sm:text-xs text-zinc-500 overflow-y-auto [&::-webkit-scrollbar]:w-1.5 [&::-webkit-scrollbar-thumb]:bg-(--primary_color) [&::-webkit-scrollbar-thumb]:rounded-full">
                            نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط ر نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط نقد و اقساط
                        </div>
                    </div>



                </div>
            </div>



            <!-- </div> -->

        </section>

        <!-- سکشن ارتباط با ما (شبکه‌های اجتماعی) -->
        <section class="w-11/12 bg-[#f8fafc] font-sans antialiased flex max-sm:flex-col max-sm:gap-5 sm:justify-between items-center max-md:p-5">
            <!-- <div class="container mx-auto max-w-6xl"> -->

            <!-- کانتینر اصلی بنر -->
            <!-- <div class="relative w-full bg-gradient-to-l from-[#ccfbf1] to-[#e0f2fe] rounded-[2rem] overflow-hidden flex flex-col md:flex-row items-center justify-between p-8 lg:px-16 py-10 md:py-12 shadow-[0_8px_30px_rgb(0,0,0,0.04)] border border-white/50"> -->

            <!-- المان‌های تزئینی پس‌زمینه (دایره‌های محو) -->
            <!-- <div class="absolute top-0 right-0 w-64 h-64 bg-[#10b981] rounded-full blur-3xl opacity-[0.07] -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-[#10b981] rounded-full blur-3xl opacity-[0.05] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div> -->

            <!-- بخش تصویر (راست) -->
            <div class="w-1/4 h-full flex justify-center items-center max-md:hidden">
                <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="" class="min-w-8/12 max-w-full min-h-20 max-h-45">
            </div>
            <!-- بخش متن (وسط) -->
            <div class="w-full sm:w-2/3 md:w-2/4 md:text-center max-sm:text-center flex flex-col justify-center md:items-center max-sm:items-center">
                <h2 class="lg:text-2xl xl:text-3xl sm:text-xl text-lg font-extrabold text-[#0f172a] mb-3">همیشه در کنار شما هستیم!</h2>
                <p class="text-[#475569] text-sm lg:text-base leading-relaxed">برای ارتباط سریع‌تر، از شبکه‌های اجتماعی ما نیز با ما در تماس باشید.</p>
            </div>


            <!-- بخش آیکون‌های شبکه‌های اجتماعی (چپ) -->
            <div class="w-full sm:w-1/3 md:w-1/4 flex gap-3 justify-center items-center">

                <!-- تلگرام -->
                <a href="#" class="group w-10 h-10 lg:size-12 p-2.5 bg-[#10b981] rounded-full flex items-center justify-center text-white hover:bg-[#059669] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-[#10b981]/30">
                    <svg class="size-full" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                    </svg>
                </a>
                <a href="#" class="group w-10 h-10 lg:size-12 p-2.5 bg-[#10b981] rounded-full flex items-center justify-center text-white hover:bg-[#059669] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-[#10b981]/30">
                    <svg class="size-full" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>
                <a href="#" class="group w-10 h-10 lg:size-12 p-2.5 bg-[#10b981] rounded-full flex items-center justify-center text-white hover:bg-[#059669] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-[#10b981]/30">
                    <svg class="size-full" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </a>

                <!-- اینستاگرام -->
                <!-- <a href="#" class="group w-12 h-12 lg:w-14 lg:h-14 bg-[#10b981] rounded-full flex items-center justify-center text-white hover:bg-[#059669] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-[#10b981]/30">
                            <svg class="w-6 h-6 lg:w-7 lg:h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </a> -->

                <!-- وب‌سایت / ایمیل -->
                <!-- <a href="#" class="group w-12 h-12 lg:w-14 lg:h-14 bg-[#10b981] rounded-full flex items-center justify-center text-white hover:bg-[#059669] transition-all duration-300 hover:-translate-y-1 shadow-lg shadow-[#10b981]/30">
                            <svg class="w-6 h-6 lg:w-7 lg:h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                        </a> -->

            </div>

            <!-- </div> -->
            <!-- </div> -->
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


    <script>
        frequently_question_button = document.querySelectorAll('.frequently_question_button')
        frequently_question_button.forEach((element) => {
            element.addEventListener('click', function() {
                if (element.parentElement.classList.contains('max-h-9')) {
                    console.log('lsjdflsjdfls')
                    frequently_question_button.forEach((item) => {
                        item.parentElement.classList.add('max-h-9')
                        item.parentElement.classList.remove('max-h-500')

                    })
                }
                element.parentElement.classList.toggle('max-h-9')
                element.parentElement.classList.toggle('max-h-500')
            })
        });
    </script>

    @endsection;