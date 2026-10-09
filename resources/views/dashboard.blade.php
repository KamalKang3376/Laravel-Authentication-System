<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    @if (session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                My Dashboard
            </a>

            <form action="/logout" method="POST" class="d-inline">
                @csrf

                <button type="submit" class="btn btn-outline-light">
                    Logout
                </button>
            </form>

        </div>
    </nav>
    <div class="container">

        <div class="row justify-content-center mt-5">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow border-0">

                    <div class="card-body text-center p-5">

                        <h1 class="mb-3">
                            Welcome, {{ auth()->user()->name }}!
                        </h1>

                        <p class="text-muted mb-4">
                            You have successfully logged in to your dashboard.
                        </p>

                        <div class="bg-light rounded p-4 mb-4">

                            <h5 class="mb-3">
                                User Information
                            </h5>

                            <p class="mb-2">
                                <strong>Name:</strong>
                                {{ auth()->user()->name }}
                            </p>

                            <p class="mb-0">
                                <strong>Email:</strong>
                                {{ auth()->user()->email }}
                            </p>

                        </div>
                    
                        <form action="/logout" method="POST">

                            @csrf

                            <button type="submit" class="btn btn-danger px-4">
                                Logout
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
