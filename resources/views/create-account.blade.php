<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Create Account</title>
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

            <!-- Title & Subtitle -->
            <h1 class="font-bold text-xl text-gray-900 mb-1 text-center">
                Create your account
            </h1>
            <p class="text-xs text-gray-400 text-center mb-6 leading-relaxed px-2">
                Get started with HydroSmart to monitor and manage your hydroponic system.
            </p>

            <!-- Form -->
            <form onsubmit="handleCreateAccount(event)" class="w-full space-y-4">
                <!-- Full Name Input -->
                <div class="flex flex-col space-y-1">
                    <label class="font-bold text-xs text-gray-700">Full Name</label>
                    <input 
                        id="fullName"
                        type="text" 
                        placeholder="Enter your full name" 
                        class="w-full rounded-md border border-gray-200 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                </div>

                <!-- Email Address Input -->
                <div class="flex flex-col space-y-1">
                    <label class="font-bold text-xs text-gray-700">Email Address</label>
                    <input 
                        id="email"
                        type="email" 
                        placeholder="name@example.com" 
                        class="w-full rounded-md border border-gray-200 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                </div>

                <!-- Password Input -->
                <div class="flex flex-col space-y-1">
                    <label class="font-bold text-xs text-gray-700">Password</label>
                    <input 
                        id="password"
                        type="password" 
                        placeholder="Create a password" 
                        class="w-full rounded-md border border-gray-200 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                    <span class="text-[10px] text-gray-400 mt-0.5">
                        Use at least 8 characters with a letter and a number.
                    </span>
                </div>

                <!-- Confirm Password Input -->
                <div class="flex flex-col space-y-1">
                    <label class="font-bold text-xs text-gray-700">Confirm Password</label>
                    <input 
                        id="confirmPassword"
                        type="password" 
                        placeholder="Re-enter your password" 
                        class="w-full rounded-md border border-gray-200 px-3 py-2 text-xs focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-green-600 placeholder-gray-400"
                        required
                    />
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full rounded-md bg-emerald-600 hover:bg-emerald-700 py-2.5 text-white font-medium text-xs transition duration-150 ease-in-out mt-2"
                >
                    Create Account
                </button>

                <!-- Back to Sign In Link -->
                <div class="text-center pt-2">
                    <a class="text-xs text-emerald-600 hover:underline font-medium" href="/">Back to Sign In</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function handleCreateAccount(e) {
            e.preventDefault();
            alert('Account created successfully!');
            window.location.href = '/';
        }
    </script>
</body>
</html>
