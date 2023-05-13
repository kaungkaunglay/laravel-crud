<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body{
            padding: 100px;
        }
    </style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{url('posts')}}" method="POST">
                    {{ csrf_field() }}
                    <h5>Create Post</h5>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input name="title" id="title" type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Post Title">
                    @error('title')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div> <br>
                    <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" id="content" cols="30" rows="3" placeholder="Enter Content..." class="form-control @error('content') is-invalid @enderror">{{old('content')}}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                    </div><br>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>