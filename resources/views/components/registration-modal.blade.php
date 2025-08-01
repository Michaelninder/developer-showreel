<div id="registration-modal" class="auth-modal">
    <div class="auth-modal-backdrop"></div>
    <div class="auth-modal-content">
        <div class="auth-modal-header">
            <button class="close-modal-btn">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="auth-modal-body">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="auth-form-group">
                    <label for="register-username">Username</label>
                    <input type="text" id="register-username" name="username" required>
                </div>
                <div class="auth-form-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="auth-form-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <div class="auth-form-group">
                    <label for="register-password-confirmation">Confirm Password</label>
                    <input type="password" id="register-password-confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="auth-submit-btn">Register</button>
            </form>
        </div>
    </div>
</div>
