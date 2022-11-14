<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Rent  book | register</title>
    <style>
        .main{
            height: 100vh;
            box-sizing: border-box;
        }
        .register-box{
            width: 500px;
            border: solid 2px;
            padding: 30px;
            border-radius: 10px;
        }
        form div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if ($errors->any())
            <div class="alert alert-danger" style="width: 500px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success" style="width: 500px;">
                {{ session('message') }}
            </div>
        @endif

        <div class="register-box">
            <form action="" method="POST">
                @csrf
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" >
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" >
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" >
                </div>
                <div>
                    <label for="address" class="form-label">address</label>
                    <textarea name="address" id="address" cols="47" rows="2" class="form-controll"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control" >Register</button>
                </div>
                <div>
                    Your have account? <a href="login">sing in</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>