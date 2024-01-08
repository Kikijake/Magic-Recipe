<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 offset-4 text-center border shadow-sm rounded" style="margin-top: 200px;height:300px">
                <div class="row mt-5">
                    <h1>Magic Recipe</h1>
                </div>
                <div class="row mt-5">
                    <div class="col-4 offset-4">
                        <div class=" w-100">
                            <a class="btn btn-warning w-100" href="{{route('loginPage')}}">Login</a>
                        </div>
                        <div class=" w-100 mt-2">
                            <a class="btn btn-warning w-100" href="{{route('registerPage')}}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
