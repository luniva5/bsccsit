<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This came from controller {{$result}}</p>
    <p>This came from controller {{$third}}</p>
    
    <!--@isset($result) if jastae ho tara kunai variable cha ki chaina check garcha @endisset-->
    @if($result == 3)
        <form action="/req/pos" method="POST">
        @csrf
        <input type="text" name="id">
        <input type="submit">
        </form>
    @else
        <div>Instead of form</div>
    @endif

    @for($i=0; $i<10;$i++)
        <p>Here {{$i}}</p>
    @endfor
    
    @foreach($arr as $item)
        <p>{{$item}}</p>
    @endforeach
</body>
</html>