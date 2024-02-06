<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card shadow-lg">
                    <div class="card-header">Admin Login</div>
                    <div class="card-body">
                        <form action="{{ url('/admin/login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Enter Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="">Enter Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
