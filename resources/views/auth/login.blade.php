<!-- Start of Selection -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tokoonline</title>
    <link rel="stylesheet" href="{{ asset('backend/dist/css/style.min.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/icon_univ_bsi.png') }}">
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Login to Tokoonline</h4>
                    </div>
                    <div class="card-body">
                        @if(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session('error') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <form action="{{ route('backend.login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-success">Login</button>
                                <a href="#" id="to-recover" class="text-decoration-none">Forgot password?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="recoverform" class="mt-3" style="display: none;">
                    <div class="card shadow-lg">
                        <div class="card-header text-center bg-warning text-white">
                            <h4>Recover Password</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-center">Enter your email address below and we'll send you instructions to reset your password.</p>
                            <form action="index.html">
                                <div class="mb-3">
                                    <label for="recover-email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="recover-email" placeholder="Enter your email">
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" id="to-login" class="text-decoration-none">Back to Login</a>
                                    <button type="button" class="btn btn-info">Recover</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#to-recover').click(function() {
                $('.card').hide();
                $('#recoverform').show();
            });
            $('#to-login').click(function() {
                $('#recoverform').hide();
                $('.card').show();
            });
        });
    </script>
</body>

</html>
<!-- End of Selection -->