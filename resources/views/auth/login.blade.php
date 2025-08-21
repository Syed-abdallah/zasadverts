{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Modern App</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-container {
            width: 100%;
            max-width: 440px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            animation: fadeIn 0.6s ease-out;
        }
        
        .login-header {
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        
        .login-header h1 {
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 8px;
        }
        
        .login-header p {
            opacity: 0.9;
        }
        
        .login-form {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
            font-size: 14px;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e5e7eb;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .input-error {
            border-color: #ef4444;
        }
        
        .error-message {
            color: #ef4444;
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            align-items: center;
        }
        
        .error-message::before {
            content: "!";
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 16px;
            height: 16px;
            background-color: #ef4444;
            color: white;
            border-radius: 50%;
            font-size: 12px;
            margin-right: 6px;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember {
            display: flex;
            align-items: center;
        }
        
        .remember input {
            margin-right: 8px;
            width: 16px;
            height: 16px;
        }
        
        .forgot-link {
            color: #4f46e5;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s;
        }
        
        .forgot-link:hover {
            color: #7c3aed;
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 14px;
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.3);
        }
        
        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(79, 70, 229, 0.4);
        }
        
        .login-button:active {
            transform: translateY(0);
        }
        
        .status-message {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
            font-size: 14px;
            display: none;
        }
        
        .status-success {
            background-color: #dcfce7;
            color: #166534;
            display: block;
        }
        
        .status-error {
            background-color: #fee2e2;
            color: #b91c1c;
            display: block;
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @media (max-width: 480px) {
            .login-container {
                max-width: 100%;
            }
            
            .login-form {
                padding: 20px;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h1>Welcome Back</h1>
            <p>Sign in to continue to your account</p>
        </div>
        
        <div class="login-form">
            <!-- Session Status -->
            <div class="status-message status-success">
                Status message will appear here
            </div>
            
            <form method="POST" action="#">
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-input" type="email" name="email" required autofocus autocomplete="username" placeholder="Enter your email">
                    <div class="error-message">Error message for email</div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    <div class="error-message">Error message for password</div>
                </div>

                <!-- Remember Me -->
                <div class="remember-forgot">
                    <div class="remember">
                        <input id="remember_me" type="checkbox" name="remember">
                        <label for="remember_me">Remember me</label>
                    </div>
                    
                    <a href="#" class="forgot-link">Forgot your password?</a>
                </div>

                <button type="submit" class="login-button">Log in</button>
            </form>
        </div>
    </div>

    <script>
        // Simple animation and form handling for demonstration
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            
            // Add focus animations
            const inputs = document.querySelectorAll('.form-input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
            
            // Simple form validation for demo
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;
                
                // Reset errors
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                });
                document.querySelectorAll('.form-input').forEach(el => {
                    el.classList.remove('input-error');
                });
                
                // Validate email
                if (!emailInput.value || !/\S+@\S+\.\S+/.test(emailInput.value)) {
                    emailInput.classList.add('input-error');
                    emailInput.nextElementSibling.textContent = 'Please enter a valid email address';
                    emailInput.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                // Validate password
                if (!passwordInput.value) {
                    passwordInput.classList.add('input-error');
                    passwordInput.nextElementSibling.textContent = 'Please enter your password';
                    passwordInput.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                if (isValid) {
                    // In a real application, this would submit the form
                    console.log('Form is valid. Would submit now.');
                    // Show success message
                    document.querySelector('.status-message').textContent = 'Login successful! Redirecting...';
                    document.querySelector('.status-message').className = 'status-message status-success';
                    
                    // Simulate redirect
                    setTimeout(() => {
                        alert('Login successful! (This is just a demo)');
                    }, 1000);
                }
            });
        });
    </script>
</body>
</html>