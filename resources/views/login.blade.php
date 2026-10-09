<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif

    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-md-6 col-lg-4">

                <div class="card shadow border-0">

                    <div class="card-body p-4">

                        <h2 class="text-center mb-4">Login</h2>

                        <form action="/login" method="POST">

                            @csrf

                            
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="form-control"
                                    placeholder="Enter your email"
                                    required
                                >
                            </div>

                            
                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    Password
                                </label>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control"
                                    placeholder="Enter your password"
                                    required
                                >
                            </div>

                        
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>

                        </form>

                        <div class="text-center mt-4">
                            <span class="text-muted">
                                Don't have an account?
                            </span>

                            <a href="/register" class="text-decoration-none">
                                Create an account
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html>
```
