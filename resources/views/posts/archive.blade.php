<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ITI Blog Post</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="#">Archive list</a>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="text-center">

        <h2>Archive list</h2>
        

        <a  class="mt-4 btn btn-info"href="{{route('posts.index')}}">Tables</a>

      
    </div>
    <table class="table mt-4">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">post_creator</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
                  
            {{-- {{dd($post)}} --}}
            @foreach ($post as $post)
                
           
    
           
        
        <tr>
            <td scope="col">{{$post["id"]}}</td>
            <td scope="col">{{$post["title"]}}</td>
            <td scope="col">{{$post["description"]}}</td>
            <td scope="col">{{$post["post_creator"]}}</td>
            <td scope="col">{{$post["created_at"]}}</td>
            {{-- {{ $user->from_date->format('Y') }} --}}

            
               
            <td>  
                {{-- <a href="{{route('posts.show',$post['id'])}}" class="btn btn-info">View</a> --}}
                <a href="{{route('posts.restore',$post['id'])}}" class="btn btn-success">Restore</a>
                              
                {{-- <a href="{{route('posts.destroy',$post['id'])}}" class="btn btn-danger" onclick="return confirm('Are you sure?')" >Delete</a> --}}
            
            </td>
        </tr>
        @endforeach

      
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="/resources/js/delete.js">
</script>
</body>
</html>