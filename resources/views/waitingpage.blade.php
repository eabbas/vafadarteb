<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سفارش شما ثبت شد | وفادارطب</title>
    <script src="{{asset('assets/js/tailwind.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <style>
        @keyframes cardIn {
            from { opacity: 0; transform: translateY(16px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes popIn {
            from { transform: scale(0); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        @keyframes drawCheck {
            to { stroke-dashoffset: 0; }
        }
        @keyframes pulseAmber {
            0%, 100% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.35); }
            50% { box-shadow: 0 0 0 6px rgba(245, 158, 11, 0); }
        }
        .animate-card-in { animation: cardIn 0.5s cubic-bezier(0.16, 1, 0.3, 1); }
        .animate-pop-in { animation: popIn 0.55s cubic-bezier(0.34, 1.56, 0.64, 1) 0.15s both; }
        .animate-draw-check {
            stroke-dasharray: 40;
            stroke-dashoffset: 40;
            animation: drawCheck 0.5s ease-out 0.55s forwards;
        }
        .animate-pulse-amber { animation: pulseAmber 2s ease-in-out infinite; }
    </style>
</head>
<body class="font-[Vazirmatn,system-ui,sans-serif] bg-[#f4f6fa] text-[#121926] leading-relaxed antialiased w-full h-dvh overflow-hidden relative">

    <!-- پس‌زمینه ظریف -->
    <div class="fixed inset-0 pointer-events-none" style="background: radial-gradient(600px 300px at 100% 0%, rgba(10,110,189,0.06), transparent 70%), radial-gradient(500px 300px at 0% 100%, rgba(0,168,157,0.06), transparent 70%);"></div>

    <!-- کارت اصلی - تمام صفحه -->
    <div class="relative z-10 w-full h-dvh bg-white flex flex-col overflow-hidden animate-card-in">

        <!-- محتوای مرکزی -->
        <div class="flex-1 flex flex-col w-11/12 mx-auto overflow-y-auto overflow-x-hidden [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-thumb]:bg-[#e8edf3] [&::-webkit-scrollbar-thumb]:rounded-full">

            <!-- ═══ هدر ═══ -->
            <header class="relative shrink-0 text-center px-6 pt-10 pb-8 overflow-hidden" style="background: linear-gradient(135deg, #0a6ebd 0%, #00a89d 100%);">

                <!-- الگوهای دایره‌ای -->
                <div class="absolute w-[220px] h-[220px] rounded-full bg-white/7 -top-[110px] -right-[60px]"></div>
                <div class="absolute w-[140px] h-[140px] rounded-full bg-white/6 -bottom-[80px] -left-[40px]"></div>

                <!-- برند وفادارطب -->
                <div class="relative z-10 inline-flex items-center gap-1.5 text-white text-[0.8rem] font-extrabold bg-white/18 px-3.5 py-1.5 rounded-full border border-white/25 mb-3.5 tracking-wide backdrop-blur-sm">
                    <svg viewBox="0 0 24 24" class="w-3.5 h-3.5 stroke-white stroke-[2.5] fill-none">
                        <path d="M12 2v20M2 12h20"/>
                    </svg>
                    وفادارطب
                </div>

                <!-- آیکن چک -->
                <div class="relative z-10 w-[76px] h-[76px] mx-auto mb-4 rounded-full flex items-center justify-center bg-white/18 border-2 border-white/40 backdrop-blur-sm animate-pop-in">
                    <svg viewBox="0 0 24 24" class="w-10 h-10 stroke-white stroke-[2.8] fill-none [stroke-linecap:round] [stroke-linejoin:round] animate-draw-check">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                </div>

                <h1 class="relative z-10 text-white text-2xl font-extrabold tracking-tight mb-1.5">
                    سفارش شما ثبت شد
                </h1>
                <p class="relative z-10 text-white/88 text-[0.9rem] font-normal">
                    از خرید شما سپاسگزاریم 🌿
                </p>
            </header>

            <!-- ═══ بدنه ═══ -->
            <div class="flex-1 px-6 pt-6 pb-6">

                <!-- شماره سفارش -->
                <div class="flex items-center justify-between bg-[#f4f6fa] border border-[#e8edf3] rounded-[14px] px-4 py-3.5 mb-5">
                    <span class="text-[0.8rem] text-[#5c6b7a] font-medium">کد پیگیری سفارش</span>
                    <span class="text-[0.9rem] font-extrabold text-[#121926] tracking-wider [direction:ltr] [font-feature-settings:'tnum']">VF-{{$code}}</span>
                </div>

                <!-- تایم‌لاین -->
                <div class="flex flex-col mb-5">

                    <!-- مرحله ۱: ثبت شد -->
                    <div class="relative flex gap-3.5 pb-5">
                        <!-- خط اتصال -->
                        <div class="absolute top-[34px] right-4 w-0.5 h-[calc(100%-26px)] rounded-full" style="background: linear-gradient(to bottom, #16a34a, #e8edf3);"></div>

                        <div class="shrink-0 w-[34px] h-[34px] rounded-full flex items-center justify-center bg-[#eafaf0] border-2 border-[#16a34a] relative z-10">
                            <svg viewBox="0 0 24 24" class="w-[17px] h-[17px] fill-none stroke-[#16a34a] stroke-[2.5] [stroke-linecap:round] [stroke-linejoin:round]">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                        </div>
                        <div class="flex-1 pt-1">
                            <div class="text-[0.92rem] font-bold text-[#16a34a] mb-0.5">سفارش ثبت شد</div>
                            <div class="text-[0.8rem] text-[#5c6b7a] leading-relaxed">سفارش شما با موفقیت در سیستم وفادارطب ثبت گردید.</div>
                            <div class="text-[0.72rem] text-[#98a4b3] mt-0.5 font-medium">همین الان</div>
                        </div>
                    </div>

                    <!-- مرحله ۲: در انتظار تایید -->
                    <div class="relative flex gap-3.5 pb-5">
                        <!-- خط اتصال -->
                        <div class="absolute top-[34px] right-4 w-0.5 h-[calc(100%-26px)] rounded-full bg-[#e8edf3]"></div>

                        <div class="shrink-0 w-[34px] h-[34px] rounded-full flex items-center justify-center bg-[#fef6e6] border-2 border-[#f59e0b] relative z-10 animate-pulse-amber">
                            <svg viewBox="0 0 24 24" class="w-[17px] h-[17px] fill-none stroke-[#f59e0b] stroke-[2.5] [stroke-linecap:round] [stroke-linejoin:round]">
                                <circle cx="12" cy="12" r="9"/>
                                <polyline points="12 7 12 12 15 14"/>
                            </svg>
                        </div>
                        <div class="flex-1 pt-1">
                            <div class="text-[0.92rem] font-bold text-[#f59e0b] mb-0.5">در انتظار تایید فروشنده</div>
                            <div class="text-[0.8rem] text-[#5c6b7a] leading-relaxed">پس از بررسی اصالت کالا و موجودی، سفارش تایید می‌شود.</div>
                            <div class="text-[0.72rem] text-[#98a4b3] mt-0.5 font-medium">حداکثر تا ۲۴ ساعت</div>
                        </div>
                    </div>

                    <!-- مرحله ۳: ارسال -->
                    <div class="flex gap-3.5">
                        <div class="shrink-0 w-[34px] h-[34px] rounded-full flex items-center justify-center bg-[#f4f6fa] border-2 border-[#e8edf3] relative z-10">
                            <svg viewBox="0 0 24 24" class="w-[17px] h-[17px] fill-none stroke-[#98a4b3] stroke-[2.5] [stroke-linecap:round] [stroke-linejoin:round]">
                                <rect x="1" y="3" width="15" height="13" rx="1"/>
                                <path d="M16 8h4l3 3v5h-7V8z"/>
                                <circle cx="5.5" cy="18.5" r="2.5"/>
                                <circle cx="18.5" cy="18.5" r="2.5"/>
                            </svg>
                        </div>
                        <div class="flex-1 pt-1">
                            <div class="text-[0.92rem] font-bold text-[#98a4b3] mb-0.5">آماده‌سازی و ارسال</div>
                            <div class="text-[0.8rem] text-[#5c6b7a] leading-relaxed">پس از تایید، سفارش بسته‌بندی و برای شما ارسال می‌شود.</div>
                        </div>
                    </div>
                </div>

                <!-- اطلاعیه -->
                <div class="flex gap-3 bg-[#e6f7f6] border border-[#00a89d]/18 rounded-[14px] px-4 py-3.5 mb-5 items-start">
                    <svg viewBox="0 0 24 24" class="w-5 h-5 shrink-0 mt-px stroke-[#00a89d] stroke-2 fill-none [stroke-linecap:round] [stroke-linejoin:round]">
                        <circle cx="12" cy="12" r="10"/>
                        <line x1="12" y1="16" x2="12" y2="12"/>
                        <line x1="12" y1="8" x2="12.01" y2="8"/>
                    </svg>
                    <p class="text-[0.8rem] text-[#0b5c57] leading-relaxed font-medium">
                        <strong class="font-extrabold">لطفاً توجه کنید:</strong> پس از تایید فروشنده، سفارش شما آماده و ارسال می‌شود. کد رهگیری از طریق پیامک برای شما ارسال خواهد شد.
                    </p>
                </div>

                <!-- دکمه‌ها -->
                <div class="flex gap-3 max-[480px]:flex-col">
                    <a href="https://vafadarteb.com" class="flex-1 inline-flex items-center justify-center gap-1.5 px-4 py-3 rounded-xl text-[0.85rem] font-bold text-[#121926] bg-[#f4f6fa] border border-[#e8edf3] transition-all duration-200 hover:bg-[#d1dfe1] hover:border-[#d5dde7]">
                        <svg viewBox="0 0 24 24" class="w-4 h-4 stroke-[#5c6b7a] stroke-[2.2] fill-none [stroke-linecap:round] [stroke-linejoin:round]">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                            <polyline points="9 22 9 12 15 12 15 22"/>
                        </svg>
                        بازگشت به فروشگاه
                    </a>
                </div>
            </div>
        </div>

        <!-- ═══ فوتر ═══ -->
        <footer class="shrink-0 flex items-center justify-center gap-6 px-6 py-4 bg-[#fafbfc] border-t border-[#e8edf3] max-[480px]:gap-4 max-[480px]:px-4 max-[480px]:py-3">
            <div class="flex items-center gap-1.5 text-[0.75rem] text-[#5c6b7a] font-semibold max-[480px]:text-[0.68rem] max-[480px]:gap-1">
                <svg viewBox="0 0 24 24" class="w-[15px] h-[15px] stroke-[#00a89d] stroke-2 fill-none [stroke-linecap:round] [stroke-linejoin:round] max-[480px]:w-[13px] max-[480px]:h-[13px]">
                    <path d="M9 12l2 2 4-4"/>
                    <circle cx="12" cy="12" r="10"/>
                </svg>
                اصالت کالا
            </div>
            <div class="flex items-center gap-1.5 text-[0.75rem] text-[#5c6b7a] font-semibold max-[480px]:text-[0.68rem] max-[480px]:gap-1">
                <svg viewBox="0 0 24 24" class="w-[15px] h-[15px] stroke-[#00a89d] stroke-2 fill-none [stroke-linecap:round] [stroke-linejoin:round] max-[480px]:w-[13px] max-[480px]:h-[13px]">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
                ضمانت سلامت
            </div>
            <div class="flex items-center gap-1.5 text-[0.75rem] text-[#5c6b7a] font-semibold max-[480px]:text-[0.68rem] max-[480px]:gap-1">
                <svg viewBox="0 0 24 24" class="w-[15px] h-[15px] stroke-[#00a89d] stroke-2 fill-none [stroke-linecap:round] [stroke-linejoin:round] max-[480px]:w-[13px] max-[480px]:h-[13px]">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                </svg>
                پشتیبانی ۲۴/۷
            </div>
        </footer>
    </div>
</body>
</html>