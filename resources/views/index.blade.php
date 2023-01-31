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
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                      </tr>
                    </thead>
                    <tbody>
                       
                      {{-- @php
                           echo "<pre>";
                                print_r($students);
                            echo "</pre>";
                      @endphp --}}
                      @foreach ($students as $value)
                      <tr>
                        <th>{{ $value->name }}</th>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->phone }}</td>
                        
                      </tr>
                        
                      @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</body>
</html>