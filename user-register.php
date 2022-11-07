<?php
require('./components/header.php')
?>
<style>
    html,
    body {
        height: 100%;
    }

    body {
        display: flex;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin #username {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input:not(#username):not(#address) {
        border-radius: 0;
        margin-bottom: -1px;
    }

    .form-signin #address {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="./services/user_registration_service.php">
            <h1 class="h3 mb-3 fw-normal">GoTrash</h1>
            <h1 class="h3 mb-3 fw-normal">User Registration</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="your username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="your password">
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="your firtname">
                <label for="firstname">First Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="your lastname">
                <label for="lastname">Last Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="yourmail@domain.com">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08XX">
                <label for="nohp">No HP</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="address" id="address" placeholder="your address">
                <label for="address">Address</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">Sudah punya akun? <a href="./login.php">Login</a></p>
            <p class="mt-5 mb-3 text-muted">© 2017–2022</p>

        </form>
    </main>
</body>
<?php
require('./components/footer.php')
?>