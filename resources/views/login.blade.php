<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1.13/dist/index.global.min.js"></script>
</head>
<body>
    <div class="min-h-screen bg-slate-100 flex items-center justify-center p-4">
        <div class="bg-white rounded-xl p-8 shadow-md w-full max-w-sm flex flex-col items-center">
            <!-- Logo Header -->
            <div class="flex items-center space-x-2 mb-6">
                <div class="w-12 h-12 rounded-full border border-gray-200 p-1 flex items-center justify-center">
                    <img src="assets/HydroSmart.png" alt="HydroSmart Logo" /> 
                </div>
                <span class="font-bold text-xl text-gray-900 tracking-tight">HydroSmart</span>
            </div>

            <!-- Title -->
            <h1 class="font-bold text-xl text-gray-900 mb-6 text-center">
                Sign in to your account
            </h1>

            <!-- Form -->
            <form method="POST" action="{{ url('/login') }}" class="w-full space-y-4">
                <!-- Email Input -->
                <div class="flex flex-col space-y-1">
                    <label class="font-bold text-xs text-gray-700">Email Address</label>
                    <input 
                        id="email"
                        type="email"
                        name="email"
                        placeholder="name@example.com" 
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                </div>

                <!-- Password Input -->
                <div class="flex flex-col space-y-1">
                    <div class="flex justify-between items-center">
                        <label class="font-bold text-xs text-gray-700">Password</label>
                        <a href="/forgot-password" class="text-xs text-green-600 hover:underline font-medium">Forgot password?</a>
                    </div>
                    <input 
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••••••" 
                        class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                </div>

                <!-- Submit Button -->
                <button
                    type="submit"
                    class="w-full rounded-md bg-emerald-600 hover:bg-emerald-700 py-2.5 text-white font-medium text-xs transition duration-150 ease-in-out mt-2"
                >
                    Login
                </button>
                
                <button
                    type="button"
                    onclick="window.location.href='/admin/user-management'"
                    class="w-full rounded-md bg-emerald-600 hover:bg-emerald-700 py-2.5 text-white font-medium text-xs transition duration-150 ease-in-out mt-2"
                >
                    Admin Login
                </button>

                <!-- Create Account Link -->
                <div class="text-center pt-2">
                    <a class="text-xs text-emerald-600 hover:underline font-medium" href="/create-account">Create Account</a>
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>
