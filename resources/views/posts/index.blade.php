<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($posts as $post)
        <div class="row pt-5">
            {{$post->caption}}
            <img src="/storage/{{ $post->image }}">
        </div>
    
    
    
    {{-- {{$post->caption}}
        {{$post->image}} --}}
    @endforeach

</body>
</html>