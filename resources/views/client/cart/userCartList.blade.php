@extends('dashboard')
@section('content')
    <div class='w-full py-20'>
        <div class='w-full min-h-100 mx-auto bg-green-300 flex flex-col p-2 gap-5'>
            <div class='w-full h-40 bg-blue-600 flex flex-col'>

                @foreach($user->address as $address)
                    <div class='flex gap-2'>
                        <label for=""> {{$address->location}}  |  {{$address->city}} </label>
                        <input name="address" type="radio" value="{{$address->id}}">
                    </div>
                @endforeach
                <a href="{{route('address.create')}}" class='w-40 p-2 bg-yellow-300 text-black font-bold'> افزودن آدرس جدید </a>
            </div>
            <div class='w-full min-h-60 bg-white flex flex-col gap-2 p-2'>
                <?php
                    $total_price=0;
                ?>
                @foreach($user->carts as $cart)
                    <?php
                        $total_price+=$cart->product->price * $cart->quantity;
                    ?>
                    <div class='parent_cart w-1/3 h-30 flex justify-between border-2 gap-4'>
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
                            <div class='flex justify-between px-4'>
                                <div class='grid grid-cols-3 w-20 border-1 overflow-hidden rounded-full items-center text-center'>
                                    <div onclick="updateCart(this,{{$cart->id}},'plus')" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></div>
                                    <div class='p-2 text-center items-center flex justify-center '><input type="number" class='w-10 font-bold outline-none text-center items-center text-black' readonly value="{{$cart->quantity}}"></div>
                                    @if($cart->quantity==1)
                                        <div onclick="trash(this,{{$cart->id}} , {{$cart->product->id}})" class='p-2 text-center items-center flex justify-center cursor-pointer bg-gray-300 h-full'><svg class='fill-rose-600' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z"/></svg></div>
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
            <div class='w-40 p-4 bg-red-500 rounded-2xl text-center flex items-center justify-center text-white cursor-pointer' onclick="createOrder()"> ثبت نهایی </div>
        </div>
    </div>


    <script>
        function createOrder(){
            console.log('OK');
        }
    </script>
@endsection