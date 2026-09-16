@extends('dashboard')
@section('content')
    <form action="{{route('address.store')}}" method="POST" class='bg-blue-300 p-2 border-1 shadow-xl'>
        @csrf
        <textarea name="location" id="" class='border-3 p-1' placeholder='location'></textarea>
        <select class='border-1 p-1' name="province_id" id="provinces" onchange="getCities()">
            @foreach($provinces as $province)
                <option value="{{$province->id}}">{{$province->title}}</option>
            @endforeach
        </select>
        <select class='border-1 p-1' name="city_id" id="cities">
            @foreach($cities as $city)
                <option value="{{$city->id}}">{{$city->title}}</option>
            @endforeach
        </select>
        <button class='bg-red-300 p-1 rounded-xl cursor-pointer'> ثبت </button>
    </form>


    <script>
        let province=document.getElementById('provinces');
        let cities=document.getElementById('cities');
        function getCities(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            })
            $.ajax({
                url: "{{route('address.getCities')}}",
                type: "post",
                dataType: "json",
                data:{
                    'province_id':province.value,
                },
                success: function(data) {
                    console.log('xxxxxxxxx');
                    cities.innerHTML='';
                    data.forEach(city => {
                        cities.innerHTML+=
                        `  <option value="${city.id}">${city.title}</option>  `;
                    });
                },
                error: function() {
                    console.log('☢')
                }
            })
            console.log(province.value);
        }
    </script>
@endsection
