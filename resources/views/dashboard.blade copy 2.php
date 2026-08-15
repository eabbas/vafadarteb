<!DOCTYPE html >
<html lang="fa" dir='rtl'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
       
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* ===== پالت رنگی تجهیزات پزشکی ===== */
        :root {
            --medical-blue: #0EA5E9;
            --medical-teal: #14B8A6;
            --medical-bg: #F8FAFC;
            --medical-white: #FFFFFF;
            --medical-text-dark: #0F172A;
            --medical-text-light: #64748B;
            --medical-success: #22C55E;
            --medical-warning: #F59E0B;
            --medical-danger: #EF4444;
            --medical-border: #E2E8F0;
        }

        * {
            font-family: 'Vazirmatn', 'Tahoma', sans-serif;
        }
        
        .transition-all {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .stat-card {
            transition: all 0.3s ease;
            border-right: 4px solid transparent;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
        }
        
        .stat-card.blue {
            border-right-color: var(--medical-blue);
        }
        .stat-card.orange {
            border-right-color: var(--medical-warning);
        }
        .stat-card.red {
            border-right-color: var(--medical-danger);
        }
        .stat-card.green {
            border-right-color: var(--medical-success);
        }
        
        .dark .stat-card {
            border-right-color: transparent !important;
        }
        
        .dark .stat-card.blue {
            border-right-color: #38BDF8 !important;
        }
        .dark .stat-card.orange {
            border-right-color: #FCD34D !important;
        }
        .dark .stat-card.red {
            border-right-color: #F87171 !important;
        }
        .dark .stat-card.green {
            border-right-color: #34D399 !important;
        }
        
        .sidebar-link {
            position: relative;
            overflow: hidden;
        }
        
        .sidebar-link::before {
            content: '';
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 3px;
            background: linear-gradient(to bottom, var(--medical-blue), #38BDF8);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }
        
        .sidebar-link:hover::before,
        .sidebar-link.active::before {
            transform: scaleY(1);
        }
        
        .sidebar-link.active {
            background: rgba(14, 165, 233, 0.08);
            color: var(--medical-blue);
        }
        
        .dark .sidebar-link.active {
            background: rgba(56, 189, 248, 0.12);
            color: #38BDF8;
        }
        
        .status-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .medical-icon {
            background: linear-gradient(135deg, #E0F2FE, #BAE6FD);
        }
        
        .dark .medical-icon {
            background: linear-gradient(135deg, #1E3A5F, #0C4A6E);
        }
        
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--medical-blue);
            border-radius: 10px;
        }
        
        .section-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }
        
        .dark .section-icon {
            filter: brightness(0) invert(1);
        }
        
        @media (max-width: 1024px) {
            .sidebar {
                transform: translateX(100%);
                position: fixed;
                top: 0;
                right: 0;
                height: 100vh;
                z-index: 1000;
                width: 280px;
                transition: transform 0.3s ease;
            }
            .sidebar.open {
                transform: translateX(0);
            }

            .overlay {
                display: none;
                position: fixed;
                inset: 0;
                background: rgba(0,0,0,0.5);
                z-index: 998;
            }
            .overlay.active {
                display: block;
            }
        }
        
        @media (min-width: 1024px) {
            .sidebar {
                transform: translateX(0) !important;
                position: sticky !important;
                top: 0;
                height: 100vh;
            }
            .mobile-menu-btn {
                display: none !important;
            }
        }
        
        .item-hover:hover {
            background: rgba(14, 165, 233, 0.04);
        }
        
        .dark .item-hover:hover {
            background: rgba(56, 189, 248, 0.06);
        }
    </style>
    
    @stack('styles')
</head>
<body>

    <div class="w-12/12 flex min-h-screen bg-[#F8FAFC] dark:bg-gray-900 transition-all">
        
        <!-- ===== اوورلی ===== -->
        <div id="overlay" class="overlay" onclick="closeSidebar()"></div>

        <!-- ============================================================ -->
        <!-- ===== سایدبار ===== -->
        <!-- ============================================================ -->
        <aside id="sidebar" class="w-2/12 sidebar fixed top-0 right-0 h-full bg-white dark:bg-gray-800 shadow-2xl dark:shadow-2xl border-l border-[#E2E8F0] dark:border-gray-700 transition-all z-999 overflow-y-auto">
            
            <!-- لوگو -->
            <div class="flex items-center gap-3 px-6 py-6 border-b border-[#E2E8F0] dark:border-gray-700">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-[#0EA5E9] to-[#14B8A6] flex items-center justify-center text-white text-xl shadow-lg shadow-[#0EA5E9]/30">
                    <i class="fas fa-heartbeat"></i>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-[#0F172A] dark:text-white">وفادار طب</h1>
                    <p class="text-xs text-[#64748B] dark:text-gray-400">تجهیزات پزشکی و طبی</p>
                </div>
            </div>

            <!-- منو -->
            <nav class="px-4 py-6">
                <p class="text-xs font-semibold text-[#64748B] dark:text-gray-500 uppercase tracking-wider px-3 mb-4">منوی اصلی</p>
                @can('admin_dashboard',['admin1','admin2'])

                    <!-- =====  محصولات ===== -->
                    <div class='element flex flex-col items-center gap-3 px-4 py-3 rounded-xl text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/5 dark:hover:bg-[#38BDF8]/10 transition-all mb-1'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-[#0F172A] dark:text-white text-base'>
                                <!-- SVG آیکون محصولات -->
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" fill="#0EA5E9">
                                    <path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/>
                                </svg>
                                 محصولات
                            </div>
                            <svg class='size-4 fill-[#0F172A] dark:fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="{{route('product.create')}}">ایجاد محصول جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="{{route('product.list')}}">لیست محصولات</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  دسته بندی ها ===== -->
                    <div class='element flex flex-col items-center gap-3 px-4 py-3 rounded-xl text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/5 dark:hover:bg-[#38BDF8]/10 transition-all mb-1'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-[#0F172A] dark:text-white text-base'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#14B8A6">
                                    <path d="M184.1 59.8c-7.7-9.4-19.5-11.7-29.9-5.4L8.6 132.8c-8 5.1-13.3 14.3-13.3 24.5v198.2c0 10.2 5.3 19.4 13.3 24.5l145.6 78.3c10.4 6.3 22.2 3.9 29.9-5.4L306.7 256 184.1 59.8zM344 349.8L366.5 304H472V208H366.5L344 162.2 472 80V48H344.4L296 16 247.6 48H128v32h64.4L344 128v221.8zM306.7 256L418.5 460.2c7.7 9.4 19.5 11.7 29.9 5.4l145.6-78.3c8-5.1 13.3-14.3 13.3-24.5V164.5c0-10.2-5.3-19.4-13.3-24.5L448.4 61.8c-10.4-6.3-22.2-3.9-29.9 5.4L306.7 256z"/>
                                </svg>
                                 دسته بندی ها
                            </div>
                            <svg class='size-4 fill-[#0F172A] dark:fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="{{route('category.create')}}">ایجاد دسته بندی جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="{{route('category.list')}}">لیست دسته بندی ها</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  برند ===== -->
                    <div class='element flex flex-col items-center gap-3 px-4 py-3 rounded-xl text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/5 dark:hover:bg-[#38BDF8]/10 transition-all mb-1'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-[#0F172A] dark:text-white text-base'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#F59E0B">
                                    <path d="M499.1 6.3c-8.1-6-12.9-17.1-11.1-27.1L496 0c-44.3 0-80 35.7-80 80c0 14.3 3.8 27.7 10.4 39.3L352 193.4l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0l-56.6 56.6c-12.5 12.5-12.5 32.8 0 45.3l22.6 22.6-56.6 56.6-22.6-22.6c-12.5-12.5-32.8-12.5-45.3 0L88.1 368c-12.5 12.5-12.5 32.8 0 45.3l13.7 13.7L64 464l48 48 36.9-36.9 13.7 13.7c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6 22.6 22.6c12.5 12.5 32.8 12.5 45.3 0l56.6-56.6c12.5-12.5 12.5-32.8 0-45.3l-25.4-25.4L405.3 206c11.6 6.6 25 10.4 38.7 10.4c44.3 0 80-35.7 80-80c0-4.9-.4-9.7-1.2-14.4L505.7 15.4c1.5-7.8-1.8-15.9-6.6-19.1z"/>
                                </svg>
                                 برند
                            </div>
                            <svg class='size-4 fill-[#0F172A] dark:fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="{{route('brand.create')}}">ایجاد برند جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="{{route('brand.list')}}">لیست برند</a>
                            </div>
                        </div>
                    </div>

                    <!-- =====  کاربر ===== -->
                    <div class='element flex flex-col items-center gap-3 px-4 py-3 rounded-xl text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/5 dark:hover:bg-[#38BDF8]/10 transition-all mb-1'>
                        <div class='flex w-full justify-between items-center text-center cursor-pointer'>
                            <div class='flex items-center gap-2 text-[#0F172A] dark:text-white text-base'>
                                <svg class='section-icon' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#22C55E">
                                    <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/>
                                </svg>
                                 کاربر
                            </div>
                            <svg class='size-4 fill-[#0F172A] dark:fill-white transition-all duration-700 rotate-0' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M241 337c-9.4 9.4-24.6 9.4-33.9 0L47 177c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l143 143L367 143c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L241 337z"/>
                            </svg>
                        </div>
                        <div class='w-full grid grid-cols-1 text-end max-h-0 overflow-hidden transition-all duration-500'>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                </svg>
                                <a href="{{route('user.create')}}">ایجاد کاربر جدید</a>
                            </div>
                            <div class='w-12/12 justify-start text-[#0F172A] dark:text-white flex p-1 text-base gap-1'>
                                <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                </svg>
                                <a href="{{route('user.list')}}">لیست کاربر</a>
                            </div>
                            @can('role_permision',['admin1'])
                                <span class='text-xs text-[#64748B] text-start mt-2'>  نقش </span>
                                <div class='w-12/12 justify-start text-[#0F172A] mr-3 dark:text-white flex p-1 text-base gap-1'>
                                    <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="{{route('role.create')}}">ایجاد نقش </a>
                                </div>
                                <div class='w-12/12 justify-start text-[#0F172A] mr-3 dark:text-white flex p-1 text-base gap-1'>
                                    <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="{{route('role.list')}}">لیست نقش ها</a>
                                </div>
                                <span class='text-xs text-[#64748B] text-start mt-2'>  دسترسی </span>
                                <div class='w-12/12 justify-start text-[#0F172A] mr-3 dark:text-white flex p-1 text-base gap-1'>
                                    <svg class='size-4 fill-[#22C55E]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                                    </svg>
                                    <a href="{{route('permision.create')}}">ایجاد دسترسی </a>
                                </div>
                                <div class='w-12/12 justify-start text-[#0F172A] mr-3 dark:text-white flex p-1 text-base gap-1'>
                                    <svg class='size-4 fill-[#0EA5E9]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                                    </svg>
                                    <a href="{{route('permision.list')}}">لیست دسترسی ها</a>
                                </div>
                            @endcan
                        </div>
                    </div>
                @endcan

                <!-- ===== دکمه خروج ===== -->
                <div class="mt-6 pt-4 border-t border-[#E2E8F0] dark:border-gray-700">
                    <a href="{{ route('user.logOut')}}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-[#EF4444] hover:bg-red-50 dark:hover:bg-red-900/20 transition-all">
                        <svg class='size-5 fill-[#EF4444]' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
                        </svg>
                        <span class="font-medium">خروج از حساب</span>
                    </a>
                </div>
                
            </nav>
        </aside>

        <!-- ============================================================ -->
        <!-- =====  اصلی ===== -->
        <!-- ============================================================ -->
        <main class="main-content w-full lg:w-10/12 transition-all bg-[#F2F2F2]">

            <!-- ===== هدر ===== -->
            <header class="w-full bg-white dark:bg-gray-800 shadow-sm dark:shadow-gray-700/20 sticky top-0 z-40 transition-all border-b border-[#E2E8F0] dark:border-gray-700">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
                    
                    <!-- دکمه منو موبایل -->
                    <button onclick="toggleSidebar()" class="mobile-menu-btn p-2.5 rounded-xl bg-[#F8FAFC] dark:bg-gray-700 text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/10 dark:hover:bg-[#38BDF8]/20 transition-all lg:hidden">
                        <i class="fas fa-bars text-xl"></i>
                    </button>

                    <!-- جستجو -->
                    <div class="flex items-center gap-3 sm:gap-4 flex-1 max-w-xs sm:max-w-md mx-2 sm:mx-4">
                        <div class="relative flex-1">
                            <i class="fas fa-search absolute right-3 sm:right-4 top-1/2 -translate-y-1/2 text-[#64748B] dark:text-gray-500 text-xs sm:text-sm"></i>
                            <input type="text" placeholder="جستجوی محصولات پزشکی..." class="w-full pr-9 sm:pr-11 pl-3 sm:pl-4 py-2 sm:py-2.5 rounded-xl bg-[#F8FAFC] dark:bg-gray-700 border border-[#E2E8F0] dark:border-gray-600 text-[#0F172A] dark:text-white placeholder-[#64748B] dark:placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#0EA5E9] focus:border-transparent transition-all text-xs sm:text-sm">
                        </div>
                        <button class="hidden sm:flex p-2.5 rounded-xl bg-[#F8FAFC] dark:bg-gray-700 text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/10 dark:hover:bg-[#38BDF8]/20 transition-all">
                            <i class="fas fa-sliders-h"></i>
                        </button>
                    </div>

                    <!-- راست هدر -->
                    <div class="flex items-center gap-2 sm:gap-4">
                        
                        <!-- دکمه تم -->
                        <button id="themeToggle" class="p-2 sm:p-2.5 rounded-xl bg-[#F8FAFC] dark:bg-gray-700 text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/10 dark:hover:bg-[#38BDF8]/20 transition-all">
                            <i class="fas fa-moon dark:hidden text-sm sm:text-base"></i>
                            <i class="fas fa-sun hidden dark:inline text-sm sm:text-base"></i>
                        </button>

                        <!-- اعلان -->
                        <button class="relative p-2 sm:p-2.5 rounded-xl bg-[#F8FAFC] dark:bg-gray-700 text-[#64748B] dark:text-gray-300 hover:bg-[#0EA5E9]/10 dark:hover:bg-[#38BDF8]/20 transition-all">
                            <i class="fas fa-bell text-sm sm:text-base"></i>
                            <span class="absolute top-1 left-1 w-2 h-2 bg-[#EF4444] rounded-full status-badge"></span>
                        </button>

                        <!-- پروفایل -->
                        <div class="flex items-center gap-2 sm:gap-3 pr-2 sm:pr-4 border-r border-[#E2E8F0] dark:border-gray-700">
                            <div class="text-left hidden sm:block">
                                <p class="text-xs sm:text-sm font-semibold text-[#0F172A] dark:text-white"> {{Auth::user()->name}} </p>
                                <p class="text-[10px] sm:text-xs text-[#64748B] dark:text-gray-400"> {{Auth::user()->roles[0]->fa_title}} </p>
                            </div>
                            <a href="{{route('user.profile')}}" id="header_avatar" class="w-9 h-9 sm:w-11 sm:h-11 rounded-full bg-gradient-to-br from-[#0EA5E9] to-[#14B8A6] flex items-center justify-center text-white font-bold shadow-lg shadow-[#0EA5E9]/30 cursor-pointer hover:scale-105 transition-all text-sm sm:text-base overflow-hidden p-1">
                                @if(Auth::user()->path!=null)
                                    <img class='rounded-full w-full h-full object-cover' src="{{asset('storage/user_medias/'.Auth::user()->path)}}" alt="">
                                @else
                                    {{Auth::user()->name[0]}}
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ===== محتوای داشبورد ===== -->
            <div class="p-3 sm:p-5 lg:p-8 ">
                @yield('content')
            </div>
            
            <!-- ===== فوتر ===== -->
            <div class="px-3 sm:px-5 lg:px-8 pb-4 sm:pb-6 mt-10 ">
                <div class="text-center text-[10px] sm:text-xs text-[#64748B] dark:text-gray-500 border-t border-[#E2E8F0] dark:border-gray-700 pt-4 sm:pt-6">
                    <p>© ۱۴۰۳ تمامی حقوق محفوظ است | وفادار - پنل مدیریت تجهیزات پزشکی</p>
                </div>
            </div>
            
        </main>
    </div>

    <!-- ============================================================ -->
    <!-- ===== Scripts ===== -->
    <!-- ============================================================ -->
    <script>
        // =====================================
        // 1. تغییر تم
        // =====================================
        const themeToggle = document.getElementById('themeToggle');
        const html = document.documentElement;

        if (localStorage.getItem('theme') === 'dark') {
            html.classList.add('dark');
        }

        themeToggle?.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
        });

        // =====================================
        // 2. منو موبایل
        // =====================================
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.toggle('open');
            overlay?.classList.toggle('active');
        }

        function closeSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('overlay');
            sidebar?.classList.remove('open');
            overlay?.classList.remove('active');
        }

        // =====================================
        // 3. اکتیو کردن منو
        // =====================================
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', function(e) {
                if (!this.getAttribute('href') || this.getAttribute('href') === '#') {
                    e.preventDefault();
                }
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove('active'));
                this.classList.add('active');
                if (window.innerWidth < 1024) {
                    closeSidebar();
                }
            });
        });

        // =====================================
        // 4. ریسایز
        // =====================================
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) {
                closeSidebar();
            }
        });

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
    
    @stack('scripts')

</body>
</html>