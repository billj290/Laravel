<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>index</h1>
    <a href="{{ url('first_floor') }}">一樓</a>
    <a href="{{ url('second_floor') }}">二樓</a>
    <a href="{{ route('student.third') }}">三樓</a>
    <a href="{{ route('student.penthouse') }}">頂樓</a>
    
    <?php
    // dd($data);
    ?>
    {{-- 這個寫法也可以 
        {{dd($data)}}  --}}

    <h1>hellow, {{ $data['name'] }} </h1>
    <h3>{{ $data['name'] }}-{{ $data['age'] }} </h3>

    {{-- 陣列中有陣列 還有foreach用法 --}}
    @foreach($data2 as $item)
    <p> {{$item['name']}} - {{$item['mobile']}} </p>
    @endforeach

    The current UNIX timestamp is {{ time() }}.

    <a href="{{route('student.child')}}">child page</a>
</body>

</html>
