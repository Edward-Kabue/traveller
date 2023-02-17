<?php
include_once ('includes/pdo.php');
?>
<nav class="bg-gray-800">
    <div class="mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex">
                <a href="#" class="flex items-center py-4 px-2 text-white hover:text-gray-400">
                    <svg class="h-6 w-6 mr-1" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                        <path fill-rule="evenodd" d="M10 3a8 8 0 100 16 8 8 0 000-16zM2 10a8 8 0 1116 0 8 8 0 01-16 0z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-bold">My CMS</span>
                </a>

                <a href="#" class="py-4 px-2 text-white hover:text-gray-400">Home</a>
                <a href="#" class="py-4 px-2 text-white hover:text-gray-400">Articles</a>
            </div>

            <div class="flex">
                <a href="#" class="py-4 px-2 text-white hover:text-gray-400" onclick="showLoginForm()">Login</a>
                <a href="#" class="py-2 px-4 bg-white text-gray-800 rounded hover:bg-gray-100 hover:text-gray-600" onclick="showSignupForm()">Sign Up</a>
            </div>
        </div>
        <div id="login-form" class="hidden">
            <form action="login.php" method="POST" class="flex items-center flex-wrap">
                <label>
                    <input type="text" name="username" placeholder="Username" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <label>
                    <input type="password" name="password" placeholder="Password" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full lg:w-auto">Log In</button>
            </form>
        </div>

        <div id="signup-form" class="hidden">
            <form action="signup.php" method="POST" class="flex items-center flex-wrap">
                <label>
                    <input type="text" name="username" placeholder="Username" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <label>
                    <input type="email" name="email" placeholder="Email" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <label>
                    <input type="password" name="password" placeholder="Password" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <label>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" class="p-2 border border-gray-300 mb-2 mr-2 w-full lg:w-auto">
                </label>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 w-full lg:w-auto">Sign Up</button>
            </form>
        </div>
    </div>
</nav>

<script>
    function showLoginForm() {
        var loginForm = document.getElementById("login-form");
        if (loginForm.classList.contains("hidden")) {
            loginForm.classList.remove("hidden");
        } else {
            loginForm.classList.add("hidden");
        }
    }
    function showSignupForm() {
        var signupForm = document.getElementById("signup-form");
        if (signupForm.classList.contains("hidden")) {
            signupForm.classList.remove("hidden");
        } else {
            signupForm.classList.add("hidden");
        }
    }
</script>

<script src="https://cdn.tailwindcss.com"></script>