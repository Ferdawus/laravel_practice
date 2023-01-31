<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel Model</title>
</head>
<body>
    <h1 class="text-center">Laravel ORM </h1>
    <h3 class="text-center">One To One Realation Ship </h3>

    <div class="container">
       <h4 class="text-center">User To Phone Realation</h4>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                      {{-- @php
                           echo "<pre>";
                                print_r($students);
                            echo "</pre>";
                      @endphp --}}
                      @foreach ($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone->name }}</td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
        <h4 class="text-center mt-5">Phone To User Realation</h4>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Phone</th>
                        <th scope="col">User</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                      {{-- @php
                           echo "<pre>";
                                print_r($students);
                            echo "</pre>";
                      @endphp --}}
                      @foreach ($phones as $phone)
                      <tr>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->user->name }}</td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
        <h3 class="text-center">One To Many  Realation Ship </h3>
        <div class="row">
          <div class="col-md-12">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Comment</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                    @foreach ($posts as $post)
                    <tr>
                      <td>{{ $post->title }}</td>
                      <td>
                        @foreach ($post->comments as $comment)
                            {{ $comment->message }}
                        @endforeach
                      </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Comment</th>
                      <th scope="col">Post Title</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($comments as $comment)
                    <tr>
                      <td>{{ $comment->message }}</td>
                      <td>{{ $comment->post->title }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
        </div>
        </div>
</body>
</html>
