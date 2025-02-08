<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Search App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    

    <style>
.dark-mode {
    background-color: #121212;
    color: white;
}
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Movie Search App</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @auth
                        <!-- Show favorites link for logged-in users -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/favorites') }}">Favorites</a>
                        </li>
                        <!-- Logout button -->
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link">Logout</button>
                            </form>
                        </li>
                    @else
                        <!-- Show login/register -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
            <!-- Theme toggle switch -->
        <div class="form-check form-switch ms-auto">
            <input class="form-check-input" type="checkbox" id="themeToggle" style="border:2px solid black;">
        </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script>
       document.addEventListener("DOMContentLoaded", function () {
        const themeToggle = document.getElementById("themeToggle"); 
            // Check local storage for theme preference
        if (localStorage.getItem("theme") === "dark") {
            document.body.classList.add("dark-mode");
            themeToggle.checked = true;
        }

        // Toggle theme on switch change
        themeToggle.addEventListener("change", function () {
            if (this.checked) {
                document.body.classList.add("dark-mode");
                localStorage.setItem("theme", "dark");
            } else {
                document.body.classList.remove("dark-mode");
                localStorage.setItem("theme", "light");
            }
        });
    });
    </script>
</body>
</html>
