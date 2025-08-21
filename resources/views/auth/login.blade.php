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
    <title>Simple Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background: #f5f8ff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .login-container {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            padding: 30px;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .logo i {
            font-size: 42px;
            color: #4a6cf7;
            background: #f0f4ff;
            padding: 15px;
            border-radius: 50%;
        }
        
        .logo h1 {
            font-size: 24px;
            color: #333;
            margin-top: 15px;
            font-weight: 600;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 500;
            font-size: 14px;
        }
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.2s;
            color: #333;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #4a6cf7;
            box-shadow: 0 0 0 3px rgba(74, 108, 247, 0.15);
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .remember {
            display: flex;
            align-items: center;
        }
        
        .remember input {
            margin-right: 8px;
        }
        
        .forgot-link {
            color: #4a6cf7;
            text-decoration: none;
        }
        
        .forgot-link:hover {
            text-decoration: underline;
        }
        
        .login-button {
            width: 100%;
            padding: 14px;
            background: #4a6cf7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        
        .login-button:hover {
            background: #345bc9;
        }
        
        .divider {
            height: 1px;
            background: #e2e8f0;
            margin: 25px 0;
            position: relative;
            text-align: center;
        }
        
        .divider span {
            position: relative;
            top: -10px;
            background: white;
            padding: 0 15px;
            color: #777;
            font-size: 14px;
        }
        
        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8faff;
            border: 1px solid #e2e8f0;
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .social-btn:hover {
            background: #f0f4ff;
            transform: translateY(-2px);
        }
        
        .social-btn i {
            color: #4a6cf7;
            font-size: 18px;
        }
        
        .signup-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        
        .signup-link a {
            color: #4a6cf7;
            text-decoration: none;
            font-weight: 500;
        }
        
        .signup-link a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 25px 20px;
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
        <div class="logo">
            <i class="fas fa-lock"></i>
            <h1>Welcome Back</h1>
        </div>
        
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-with-icon">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" class="form-input" placeholder="Enter your email" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-with-icon">
                    <i class="fas fa-key"></i>
                    <input type="password" id="password" class="form-input" placeholder="Enter your password" required>
                </div>
            </div>
            
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label>
                </div>
                <a href="#" class="forgot-link">Forgot password?</a>
            </div>
            
            <button type="submit" class="login-button">Log In</button>
        </form>
        
        <div class="divider">
            <span>Or continue with</span>
        </div>
        
        <div class="social-login">
            <div class="social-btn">
                <i class="fab fa-google"></i>
            </div>
            <div class="social-btn">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="social-btn">
                <i class="fab fa-github"></i>
            </div>
        </div>
        
        <div class="signup-link">
            Don't have an account? <a href="#">Sign up</a>
        </div>
    </div>

    <script>
        // Simple form interaction
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const inputs = document.querySelectorAll('.form-input');
            
            // Add focus effect to inputs
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('focused');
                });
            });
            
            // Form submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get input values
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                // Simple validation
                if (email && password) {
                    // In a real application, this would submit the form
                    console.log('Login attempted with:', email, password);
                    
                    // Show loading state
                    const button = document.querySelector('.login-button');
                    button.textContent = 'Logging in...';
                    button.disabled = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        alert('Login successful! (This is just a demo)');
                        button.textContent = 'Log In';
                        button.disabled = false;
                    }, 1500);
                }
            });
        });
    </script>
</body>
</html>