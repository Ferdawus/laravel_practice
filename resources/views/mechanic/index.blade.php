<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Laravel Model</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mechanic</th>
                            <th scope="col">Car Model</th>
                            <th scope="col">Car Owner</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($mechanics as $value)
                            <tr>
                                <th>{{ $value->name }}</th>
                                <td>{{ $value->car->model }}</td>
                                <td>{{ $value->carWaner->name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>

</html>
