<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- links --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0-10/css/all.css" integrity="sha512-Dj9pt3sZROOuTTs9S89ykGZeu1XQgWKg3DVpu5tZALApsrWdd3tnVjTclUuVONaHM4O8GgCnjSbHlTKXrd2OWg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body{
            padding: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8"></div>
            <h5>Post Lists</h5> 
            <a href="{{url('/posts/create')}}">
                <button class="btn btn-primary btn-sm float-right mb-2"><i class="fa fa-plus-circle">Add New</i></button>
            </a>
            @if(Session('successAlert'))
                <div class="alert alert-success alert-dismissible show fade">
                    <strong>{{Session('successAlert')}}</strong>
                    <button class="close" data-dismiss="alert">&times;</button>
                </div>
            @endif
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                       
                        <td>
                            <form action="{{url('posts/'.$post->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{url('posts/'.$post->id.'/edit')}}">
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit">Edit</i> 
                                    </button>
                                </a>                        
                                <button type="submit" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"> Delete </i>
                                </button>
                            </form>                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links('pagination::bootstrap-5')
            }}
        </div>
    </div>
    {{-- BOOTSTRAP JS --}}


</body>
</html>