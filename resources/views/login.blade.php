<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>login</title>
</head>
<body>
    <div class="container card" style="width:50%;">
        <h2>Login</h2>
        <form method="POST" action="{{route('post-login')}}">
        @csrf

        <!-- Email input -->
        <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" >Login</button>

        </form>

    </div>
    
</body>
</html>