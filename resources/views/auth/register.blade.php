<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Create Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .register-container {
            width: 100%;
            max-width: 460px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }
        
        .register-header {
            background: linear-gradient(to right, #4f46e5, #7c3aed);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .register-header h1 {
            font-weight: 600;
            font-size: 28px;
            margin-bottom: 8px;
        }
        
        .register-header p {
            opacity: 0.9;
            font-size: 16px;
        }
        
        .register-form {
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
        
        .input-with-icon {
            position: relative;
        }
        
        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }
        
        .form-input {
            width: 100%;
            padding: 14px 14px 14px 45px;
            border: 1.5px solid #e5e7eb;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #4f46e5;
            box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
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
        
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
        }
        
        .terms {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            font-size: 14px;
            color: #6b7280;
        }
        
        .terms input {
            margin-right: 10px;
            margin-top: 3px;
        }
        
        .terms a {
            color: #4f46e5;
            text-decoration: none;
        }
        
        .terms a:hover {
            text-decoration: underline;
        }
        
        .register-button {
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
            box-shadow: 0 4px 6px rgba(79, 70, 229, 0.2);
        }
        
        .register-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(79, 70, 229, 0.3);
        }
        
        .register-button:active {
            transform: translateY(0);
        }
        
        .login-link {
            text-align: center;
            margin-top: 25px;
            font-size: 15px;
            color: #6b7280;
        }
        
        .login-link a {
            color: #4f46e5;
            text-decoration: none;
            font-weight: 500;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
        
        .password-strength {
            height: 5px;
            background: #e5e7eb;
            border-radius: 3px;
            margin-top: 8px;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0%;
            border-radius: 3px;
            transition: width 0.3s;
        }
        
        .password-strength-weak {
            background: #ef4444;
            width: 33%;
        }
        
        .password-strength-medium {
            background: #f59e0b;
            width: 66%;
        }
        
        .password-strength-strong {
            background: #10b981;
            width: 100%;
        }
        
        .password-hints {
            font-size: 13px;
            color: #6b7280;
            margin-top: 5px;
        }
        
        @media (max-width: 480px) {
            .register-container {
                max-width: 100%;
            }
            
            .register-form {
                padding: 25px 20px;
            }
            
            .register-header {
                padding: 25px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Create Account</h1>
            <p>Join us and get started today</p>
        </div>
        
        <div class="register-form">
            <form method="POST" action="#">
                <!-- Name -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-with-icon">
                        <i class="fas fa-user"></i>
                        <input id="name" class="form-input" type="text" name="name" required autofocus autocomplete="name" placeholder="Enter your full name">
                    </div>
                    <div class="error-message">Error message for name</div>
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-with-icon">
                        <i class="fas fa-envelope"></i>
                        <input id="email" class="form-input" type="email" name="email" required autocomplete="email" placeholder="Enter your email address">
                    </div>
                    <div class="error-message">Error message for email</div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" placeholder="Create a password">
                        <span class="password-toggle" id="password-toggle">
                            <i class="far fa-eye"></i>
                        </span>
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="password-strength-bar"></div>
                    </div>
                    <div class="password-hints">Use at least 8 characters with a mix of letters, numbers & symbols</div>
                    <div class="error-message">Error message for password</div>
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="input-with-icon">
                        <i class="fas fa-lock"></i>
                        <input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password">
                        <span class="password-toggle" id="confirm-password-toggle">
                            <i class="far fa-eye"></i>
                        </span>
                    </div>
                    <div class="error-message">Error message for password confirmation</div>
                </div>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                </div>

                <button type="submit" class="register-button">
                    Create Account
                </button>
            </form>
            
            <div class="login-link">
                Already have an account? <a href="#">Sign in</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const passwordInput = document.getElementById('password');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const passwordToggle = document.getElementById('password-toggle');
            const confirmPasswordToggle = document.getElementById('confirm-password-toggle');
            const passwordStrengthBar = document.getElementById('password-strength-bar');
            
            // Password visibility toggle
            passwordToggle.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordToggle.innerHTML = '<i class="far fa-eye-slash"></i>';
                } else {
                    passwordInput.type = 'password';
                    passwordToggle.innerHTML = '<i class="far fa-eye"></i>';
                }
            });
            
            // Confirm password visibility toggle
            confirmPasswordToggle.addEventListener('click', function() {
                if (confirmPasswordInput.type === 'password') {
                    confirmPasswordInput.type = 'text';
                    confirmPasswordToggle.innerHTML = '<i class="far fa-eye-slash"></i>';
                } else {
                    confirmPasswordInput.type = 'password';
                    confirmPasswordToggle.innerHTML = '<i class="far fa-eye"></i>';
                }
            });
            
            // Password strength indicator
            passwordInput.addEventListener('input', function() {
                const password = passwordInput.value;
                let strength = 0;
                
                // Check password length
                if (password.length >= 8) strength += 1;
                
                // Check for uppercase letters
                if (password.match(/[A-Z]/)) strength += 1;
                
                // Check for numbers
                if (password.match(/[0-9]/)) strength += 1;
                
                // Check for special characters
                if (password.match(/[^A-Za-z0-9]/)) strength += 1;
                
                // Update strength bar
                passwordStrengthBar.classList.remove('password-strength-weak', 'password-strength-medium', 'password-strength-strong');
                
                if (strength <= 1) {
                    passwordStrengthBar.classList.add('password-strength-weak');
                } else if (strength <= 3) {
                    passwordStrengthBar.classList.add('password-strength-medium');
                } else {
                    passwordStrengthBar.classList.add('password-strength-strong');
                }
            });
            
            // Form validation
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
                
                // Validate name
                const nameInput = document.getElementById('name');
                if (!nameInput.value.trim()) {
                    nameInput.classList.add('input-error');
                    nameInput.nextElementSibling.textContent = 'Please enter your name';
                    nameInput.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                // Validate email
                const emailInput = document.getElementById('email');
                if (!emailInput.value || !/\S+@\S+\.\S+/.test(emailInput.value)) {
                    emailInput.classList.add('input-error');
                    emailInput.nextElementSibling.textContent = 'Please enter a valid email address';
                    emailInput.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                // Validate password
                if (!passwordInput.value || passwordInput.value.length < 8) {
                    passwordInput.classList.add('input-error');
                    passwordInput.parentElement.nextElementSibling.nextElementSibling.textContent = 'Password must be at least 8 characters';
                    passwordInput.parentElement.nextElementSibling.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                // Validate password confirmation
                if (passwordInput.value !== confirmPasswordInput.value) {
                    confirmPasswordInput.classList.add('input-error');
                    confirmPasswordInput.nextElementSibling.textContent = 'Passwords do not match';
                    confirmPasswordInput.nextElementSibling.style.display = 'flex';
                    isValid = false;
                }
                
                // Validate terms
                const termsCheckbox = document.getElementById('terms');
                if (!termsCheckbox.checked) {
                    termsCheckbox.parentElement.style.outline = '2px solid #ef4444';
                    termsCheckbox.parentElement.style.outlineOffset = '2px';
                    isValid = false;
                }
                
                if (isValid) {
                    // In a real application, this would submit the form
                    console.log('Form is valid. Would submit now.');
                    
                    // Show success state
                    const button = document.querySelector('.register-button');
                    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Creating Account...';
                    button.disabled = true;
                    
                    // Simulate API call
                    setTimeout(() => {
                        alert('Account created successfully! (This is just a demo)');
                        button.innerHTML = 'Create Account';
                        button.disabled = false;
                    }, 1500);
                }
            });
        });
    </script>
</body>
</html>