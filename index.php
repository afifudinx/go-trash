<?php
require('./components/header.php')
?>

<body>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark px-2 active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark px-2">Pesan</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark px-2">Riwayat</a>
                </li>
            </ul>
            <ul class="nav">
                <li class="nav-item">
                    <a href="./login.php" class="nav-link link-dark px-2">Login</a>
                </li>
                <li class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sign Up
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./user-register.php">User</a></li>
                        <li><a class="dropdown-item" href="./driver-register.php">Driver</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container">
            <a class="px-2 text-dark text-decoration-none">
                <span class="fs-4">GoTrash</span>
            </a>
        </div>
    </header>
</body>

<?php
require('./components/footer.php')
?>