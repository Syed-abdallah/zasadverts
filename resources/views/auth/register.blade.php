<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background: #f7fafc;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .register-container {
            width: 100%;
            max-width: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 25px;
        }
        
        .logo h1 {
            font-size: 24px;
            color: #2d3748;
            font-weight: 600;
        }
        
        .logo p {
            color: #718096;
            margin-top: 8px;
            font-size: 15px;
        }
        
        .form-group {
            margin-bottom: 18px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 6px;
            color: #4a5568;
            font-weight: 500;
            font-size: 14px;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.2s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #4299e1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
        }
        
        .error-message {
            color: #e53e3e;
            font-size: 14px;
            margin-top: 5px;
            display: none;
        }
        
        .register-button {
            width: 100%;
            padding: 12px;
            background: #4299e1;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 10px;
        }
        
        .register-button:hover {
            background: #3182ce;
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            font-size: 15px;
            color: #718096;
        }
        
        .login-link a {
            color: #4299e1;
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 480px) {
            .register-container {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo">
            <h1>Create Account</h1>
            <p>Get started with our service</p>
        </div>
        
        <form>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" class="form-input" placeholder="Enter your name" required>
                <div class="error-message">Please enter your name</div>
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-input" placeholder="Enter your email" required>
                <div class="error-message">Please enter a valid email</div>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-input" placeholder="Create a password" required>
                <div class="error-message">Password must be at least 8 characters</div>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" id="confirm-password" class="form-input" placeholder="Confirm your password" required>
                <div class="error-message">Passwords don't match</div>
            </div>
            
            <button type="submit" class="register-button">Register</button>
        </form>
        
        <div class="login-link">
            Already have an account? <a href="#">Sign in</a>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('confirm-password');
            
            // Simple form validation
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;
                
                // Reset error messages
                document.querySelectorAll('.error-message').forEach(el => {
                    el.style.display = 'none';
                });
                
                // Validate name
                if (!nameInput.value.trim()) {
                    nameInput.nextElementSibling.style.display = 'block';
                    isValid = false;
                }
                
                // Validate email
                if (!emailInput.value || !/\S+@\S+\.\S+/.test(emailInput.value)) {
                    emailInput.nextElementSibling.style.display = 'block';
                    isValid = false;
                }
                
                // Validate password
                if (!passwordInput.value || passwordInput.value.length < 8) {
                    passwordInput.nextElementSibling.style.display = 'block';
                    isValid = false;
                }
                
                // Validate password confirmation
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.nextElementSibling.style.display = 'block';
                    isValid = false;
                }
                
                if (isValid) {
                    // Show loading state
                    const button = document.querySelector('.register-button');
                    button.textContent = 'Creating Account...';
                    button.disabled = true;
                    
                    // Simulate registration process
                    setTimeout(() => {
                        alert('Account created successfully!');
                        button.textContent = 'Register';
                        button.disabled = false;
                    }, 1500);
                }
            });
        });
    </script>
</body>
</html>