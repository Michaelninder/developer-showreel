<div id="auth-modal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50">
    <div class="rounded-lg bg-white p-8 shadow-lg dark:bg-gray-800">
        <div class="flex justify-end">
            <button id="close-modal" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div x-data="{ type: 'login' }">
            <div class="mb-4 flex">
                <button @click="type = 'login'" :class="{ 'bg-blue-500 text-white': type === 'login' }" class="w-1/2 rounded-l-lg px-4 py-2">Login</button>
                <button @click="type = 'register'" :class="{ 'bg-blue-500 text-white': type === 'register' }" class="w-1/2 rounded-r-lg px-4 py-2">Register</button>
            </div>

            <div x-show="type === 'login'">
                <h2 class="mb-4 text-2xl font-bold">Login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="login-email" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="login-email" name="email" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <div class="mb-4">
                        <label for="login-password" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" id="login-password" name="password" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <button type="submit" class="w-full rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Login</button>
                </form>
            </div>

            <div x-show="type === 'register'">
                <h2 class="mb-4 text-2xl font-bold">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="register-name" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <input type="text" id="register-name" name="name" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-email" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <input type="email" id="register-email" name="email" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-password" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Password</label>
                        <input type="password" id="register-password" name="password" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <div class="mb-4">
                        <label for="register-password-confirmation" class="mb-2 block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                        <input type="password" id="register-password-confirmation" name="password_confirmation" class="w-full rounded-lg border border-gray-300 p-2.5 dark:border-gray-600 dark:bg-gray-700" required>
                    </div>
                    <button type="submit" class="w-full rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
