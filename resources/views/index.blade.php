<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration</title>
</head>
<body>
    <div class="container card" style="width:50%;">
        <h2>Registration</h2>
        <form method="POST" action="{{route('post-register')}}">
        @csrf
            
            <!-- Name input -->
            <div class="form-outline mb-4">
                <input type="text" name="name" id="name" class="form-control" />
                <label class="form-label" for="form2Example2">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- Date of birth -->
            <div class="form-outline mb-4">
                <input type="text" name="date_of_birth" id="dateOfBirth" class="form-control" />
                <label class="form-label" for="form2Example2">Date of birth</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" >Register</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="#!">Register</a></p>
            </div>
        </form>
    <div>
    






</body>
</html>