<?php
include 'includes/header.php';
?>
<link rel="stylesheet" href="signin.css">
<main class="form-signin">
    <form class="text-center">

        <br><br>
        <br><br>
        <h1 class="h3 mb-3 fw-normal">Sign in and LetsGo!</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <br>
        <br>

        <p>New user? <a href="#">Sign up!</a></p>
        <p class="mt-5 mb-3 text-muted">&copy; GavinMendonza</p>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>