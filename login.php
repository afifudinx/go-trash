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

    .form-signin input[type="text"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        border-radius: 0;
        margin-bottom: -1px;
    }

    .form-select {
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="./services/login_service.php">
            <!-- <img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
            <h1 class="h3 mb-3 fw-normal">GoTrash</h1>
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="your username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <select class="form-select mb-3 py-3" id="role" name="role">
                <option selected>Login sebagai</option>
                <option value="user">User</option>
                <option value="kurir">Kurir</option>
                <option value="admin">Admin</option>
            </select>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Belum punya akun? <a href="./index.php">Buat akun</a></p>
            <p class="mt-5 mb-3 text-muted">© 2017–2022</p>

        </form>
    </main>
</body>
<?php
require('./components/footer.php')
?>