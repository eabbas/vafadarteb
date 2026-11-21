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
    <section class="w-full h-100 bg-[#F2FAFD] flex justify-center items-center">
        <div class="w-11/12 h-full flex justify-between items-center gap-2">
            <div class="w-1/2 h-full flex justify-center items-center">
                <img src="{{asset('assets/img/about_my_hero.webp')}}" alt="" class="max-w-full max-h-full">
            </div>
            <div class="w-1/2 h-full flex flex-col justify-center items-center gap-2">
                <h2 class="text-(--title) text-7xl font-bold">درباره ما</h2>
                <p class="text-lg font-bold text-[#777984]">سلامتی شما انگیزه ماست</p>
            </div>
        </div>
    </section>
</body>
</html>