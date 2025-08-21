<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - My Application</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        
        .container {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 28rem;
            padding: 2rem;
        }
        
        .header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
        }
        
        .header p {
            color: #6b7280;
            margin-top: 0.5rem;
            font-size: 0.875rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.625rem 0.875rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            font-size: 1rem;
            transition: border-color 0.15s ease;
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .error-message {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        
        .remember-forgot {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
        }
        
        .remember {
            display: flex;
            align-items: center;
        }
        
        .remember input {
            margin-right: 0.5rem;
        }
        
        .forgot-password {
            color: #4f46e5;
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .forgot-password:hover {
            text-decoration: underline;
        }
        
        button {
            width: 100%;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 0.375rem;
            padding: 0.75rem 1rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.15s ease;
        }
        
        button:hover {
            background-color: #4338ca;
        }
        
        .footer {
            text-align: center;
            margin-top: 2rem;
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .footer a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
        }
        
        .footer a:hover {
            text-decoration: underline;
        }
        
        .alert {
            padding: 0.75rem 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }
        
        .alert-success {
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
        }
        
        .alert-error {
            background-color: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome back</h1>
            <p>Sign in to your account to continue</p>
        </div>

        <!-- Session Status -->
        <div class="alert alert-success" style="display: none;" id="sessionStatus">
            <!-- Status message will be inserted here by JavaScript -->
        </div>

        <form method="POST" action="/login" id="loginForm">
            <!-- CSRF Token (simulated for demonstration) -->
            <input type="hidden" name="_token" value="simulated_csrf_token">

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required autofocus autocomplete="email">
                <div class="error-message" id="email-error"></div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
                <div class="error-message" id="password-error"></div>
            </div>

            <!-- Remember Me -->
            <div class="remember-forgot">
                <div class="remember">
                    <input type="checkbox" id="remember_me" name="remember">
                    <label for="remember_me" style="display: inline; font-size: 0.875rem;">Remember me</label>
                </div>
                <a href="/forgot-password" class="forgot-password">Forgot password?</a>
            </div>

            <button type="submit">Log in</button>
        </form>

        <div class="footer">
            Don't have an account? <a href="/register">Sign up</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');
            const sessionStatus = document.getElementById('sessionStatus');
            
            // Simulate session status (for demonstration)
            const simulateSessionStatus = () => {
                const status = "Login successful!"; // This would come from the server
                if (status) {
                    sessionStatus.textContent = status;
                    sessionStatus.style.display = 'block';
                    
                    // Hide after 5 seconds
                    setTimeout(() => {
                        sessionStatus.style.display = 'none';
                    }, 5000);
                }
            };
            
            // Simulate form submission
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Reset errors
                emailError.textContent = '';
                passwordError.textContent = '';
                
                // Simple validation
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                
                let isValid = true;
                
                if (!email) {
                    emailError.textContent = 'Email is required.';
                    isValid = false;
                } else if (!/\S+@\S+\.\S+/.test(email)) {
                    emailError.textContent = 'Email is invalid.';
                    isValid = false;
                }
                
                if (!password) {
                    passwordError.textContent = 'Password is required.';
                    isValid = false;
                } else if (password.length < 8) {
                    passwordError.textContent = 'Password must be at least 8 characters.';
                    isValid = false;
                }
                
                if (isValid) {
                    // In a real application, this would submit to the server
                    console.log('Form submitted with:', { email, password });
                    
                    // Simulate successful login
                    simulateSessionStatus();
                    
                    // Redirect to dashboard after successful login (simulated)
                    // setTimeout(() => {
                    //     window.location.href = '/dashboard';
                    // }, 1000);
                }
            });
        });
    </script>
</body>
</html>