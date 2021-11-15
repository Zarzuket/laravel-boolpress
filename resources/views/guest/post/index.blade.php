<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Tutti i post</h1>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12">
                    <a href="{{route("post.show", $post["slug"])}}"><h5 style="color: red">{{$post->title}}</h5> </a>
                    
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>