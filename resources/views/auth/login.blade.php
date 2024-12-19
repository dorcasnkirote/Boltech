<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Boltech Item Requisition System</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* General page styling */
        .navbar-nav .nav-link {
            font-size: 0.9rem;
        }

        .modal-content {
            background: linear-gradient(135deg, #004085, #007bff); /* Boltech colors */
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        /* Input field styling */
        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-submit {
            background-color: #004085;
            color: white;
            border: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #007bff;
            color: white;
        }

        .background-image-container {
            position: relative;
            background-image: url('/images/boltech-bg.jpg'); /* Replace with Boltech's background */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .background-image-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body class="h-screen bg-gray-100 flex items-center justify-center">

<div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
    <!-- Logo -->
    <div class="text-center">
        <a href="/">
            <img class="mx-auto h-14 w-auto" src="/images/boltech-logo.png" alt="Boltech Logo">
        </a>
        <h2 class="mt-6 text-3xl font-extrabold text-gray-800">Sign in to Boltech</h2>
        <p class="mt-2 text-sm text-gray-600">Welcome back! Please enter your details to continue.</p>
    </div>

    <!-- Login Form -->
    <form class="mt-8 space-y-6" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Field -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" autocomplete="email" required
                       class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Password Field -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="mt-2 relative">
                <input id="password" name="password" type="password" autocomplete="current-password" required
                       class="block w-full rounded-lg border-gray-300 shadow-sm py-2 px-3 text-gray-900 focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 flex items-center px-3 text-sm text-gray-500">
                    <i id="passwordToggleIcon" class="fa fa-eye"></i>
                </button>
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input id="remember_me" name="remember" type="checkbox"
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember_me" class="ml-2 block text-sm text-gray-700">Remember me</label>
            </div>

            <div>
            <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                </a>
            </div>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-75">
                Sign In
            </button>
        </div>
    </form>
</div>

<!-- Password Toggle Script -->
<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const passwordToggleIcon = document.getElementById('passwordToggleIcon');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        passwordToggleIcon.classList.toggle('fa-eye');
        passwordToggleIcon.classList.toggle('fa-eye-slash');
    });
</script>

</body>
</html>
