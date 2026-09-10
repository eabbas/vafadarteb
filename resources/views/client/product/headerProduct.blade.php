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
        <div class='relative bg-white p-2 w-30'>
            <svg class='size-10 hover:fill-red-600 transition-all duration-100' onclick="showCart(this)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M16 0C7.2 0 0 7.2 0 16s7.2 16 16 16H53.9c7.6 0 14.2 5.3 15.7 12.8l58.9 288c6.1 29.8 32.3 51.2 62.7 51.2H496c8.8 0 16-7.2 16-16s-7.2-16-16-16H191.2c-15.2 0-28.3-10.7-31.4-25.6L152 288H466.5c29.4 0 55-20 62.1-48.5L570.6 71.8c5-20.2-10.2-39.8-31-39.8H99.1C92.5 13 74.4 0 53.9 0H16zm90.1 64H539.5L497.6 231.8C494 246 481.2 256 466.5 256H145.4L106.1 64zM168 456a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0zm200-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112z"/></svg>
            <div id='cart' class='absolute hidden  border-3 rounded-xl w-120 h-80 bg-white'>
                <div class='absolute -top-2 -right-2 bg-red-600 px-2 py-1 rounded-full cursor-pointer' onclick="hiddenCart(this)">x</div>
                <?php
                    $count=0;
                ?>
                @if(Auth::check())
                    <div class='w-full h-full'>
                        <div id='cart_list' class='w-full h-70 overflow-y-auto flex flex-col gap-2 p-5'>
                            @foreach($user->carts as $cart)
                                <?php
                                    $count++;
                                ?>
                                <div class=' w-full flex justify-between border-2 gap-4'>
                                    <div class='w-1/5 p-2'>
                                        @if(count($cart->product->medias)>0)
                                            <img class='w-full h-20 rounded-xl' src="{{asset('storage/product_medias/'.$cart->product->path)}}" alt="">
                                        @else
                                            <div> 🖼 </div>
                                        @endif
                                    </div>
                                    <div class='w-4/5 flex flex-col justify-evenly '>
                                        <div class='text-xl text-center items-center'>
                                            <span> {{$cart->product->title}} </span>
                                        </div>
                                        <div class='flex gap-5 justify-between px-4'>
                                            <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                                <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                                <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-5 outline-none text-center items-center' readonly value="{{$cart->quantity}}"></div>
                                                @if($cart->quantity==1)
                                                    <div onclick="trash(this,{{$cart->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
                                                @else
                                                    <div onclick="updateCart(this,{{$cart->id}},'minus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z"/></svg></div>
                                                @endif
                                            </div>
                                            
                                            <div class='text-black text-xl'> {{$cart->product->price}} </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class='grid grid-cols-2 items-center text-center p-1 gap-2 '>
                            <div class='bg-green-200 p-[2px] rounded-xl'> ثبت نهایی </div>
                            <div class='bg-red-200 p-[2px] rounded-xl'> حذف همه </div>
                        </div>
                    </div>
                @endif
            </div>
            <div id="cart_counter" class='absolute -top-2 -left-2 bg-green-800 px-3 py-1 rounded-full cursor-pointer text-white'>{{$count}}</div>
        </div>
        <h3 class='text-3xl font-bold'> هدر محصول </h3>
        <h3 class='text-xl font-bold text-white'>{{Auth::user()->name}} </h3>
    </div>

    @yield('content')



    <script>
        let cart = document.getElementById('cart');
        let cart_list = document.getElementById('cart_list');
        let cart_counter = document.getElementById('cart_counter');
        let pro_cart_parent_div = document.getElementById('pro_cart_parent_div');

        function showCart(el){
            cart.classList.remove('hidden');
            cart.classList.add('flex');
        }
        function hiddenCart(el){
            cart.classList.add('hidden');
            cart.classList.remove('flex');

        }








        let flag = true
        // let count = 0
        let test = document.getElementById('test')
        let quantity=0;
        let plus_icon='';
        function updateCart(el,id,state) {
            // let value=0;
            // count++

            plus_icon=el.parentElement.children[0].children.innerHTML;
            el.parentElement.children[0].children.innerHTML =
            `
            <div class="size-4 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            
            `;
            el.parentElement.children[0].removeAttribute('onclick');

            el.parentElement.children[2].children.innerHTML =
            `
            <div class="size-4 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
            
            `;
            el.parentElement.children[2].removeAttribute('onclick');
            quantity = el.parentElement.children[1].children.value;
            if(state=='plus'){
                quantity++;
            }else{
                quantity--;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{url('cart/update/cart')}}"+"/"+id,
                type: "post",
                dataType:"json",
                data:{
                    'quantity':quantity,
                },
                success: function(data) {
                    el.parentElement.children[1].children.value = data.quantity
                    el.parentElement.children[0].children.innerHTML=plus_icon;
                    el.parentElement.children[0].setAttribute('onclick',`updateCart(this,${data.cartId},'plus')'`)

                    if(data.quantity==1){
                        el.parentElement.children[2].children.innerHTML=
                        `
                            <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                        
                        `;
                        el.parentElement.children[2].children.innerHTML =
                        `
                        <svg class='size-5 fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg>
                        `
                        // el.parentElement.children[2].children.removeAttribute('onclick');
                        el.parentElement.children[2].setAttribute('onclick',`trash(this,${data.cartId})`);
                    }
                    if(data.quantity>1){
                        el.parentElement.children[2].children.innerHTML=
                        `
                            <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>
                        
                        `;
                        el.parentElement.children[2].setAttribute('onclick',`'updateCart(this,${data.cartId},'minus')'`)
                        el.parentElement.children[2].children.innerHTML =
                        `
                            <svg class='size-3 fill-black' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M432 256c0 13.3-10.7 24-24 24L40 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l368 0c13.3 0 24 10.7 24 24z"/></svg>
                        `

                    }
                },
                error: function() {
                    console.log('☢')
                }
            })

        }

        function trash(el,id) {
            let trash_icon='';
            // console.log(entry)
            trash_icon=el.children[2].innerHTML;
            el.children[2].innerHTML =
            `
                <div class="size-7 border-4 border-(--border) border-t-(--primary_color) rounded-full animate-spin"></div>

            `
            $.ajax({
                url: "{{url('cart/delete/cart')}}"+"/" + id,
                type: "get",
                dataType: "json",
                success: function(data) {
                    el.classList.remove('flex')
                    el.classList.add('hidden')
                    entry_cart_submit.forEach(entry => {
                        entry.classList.remove('bg-yellow-200')
                        entry.classList.remove('hover:bg-yellow-300')
                        entry.classList.add('bg-green-200')
                        entry.classList.add('hover:bg-green-300')
                        entry.classList.setAttribute('onclick',"entry_cart(this)");
                        entry.innerHTML = 'افزودن به سبد خرید'
                    });
    
    
                },
                error: function() {
                    console.log('☢')
                }
            })
            // console.log(entry)
            el.children[2].innerHTML =trash_icon
        }





    </script>