<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Opration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3 text-center">
        <h4 class="text-white fw-bold ">Register</h4>
    </div>
    <div class="container">
        <div class="py-5">
            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf 
                        <div class="mb-3">
                            <label for="" class="form-label h6">Name</label>
                            <input type="text" class="form-control form-control-md" placeholder="Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Email</label>
                            <input type="email" class="form-control form-control-md" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Password</label>
                            <input type="password" class="form-control form-control-md" placeholder="Password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label h6">Confirm Password</label>
                            <input type="password" class="form-control form-control-md" placeholder="Confirm Password" name="password_confirmation">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-md btn-success">Register</button>
                        </div>
                    </form>
                </div>
    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>