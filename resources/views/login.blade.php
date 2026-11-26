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
            @if (session('msg'))
                <div class="w-full mb-5 p-4 bg-red-50 border border-red-300 text-red-800 rounded-md flex items-center gap-3"
                    role="alert">
                    <svg class="w-5 h-5 text-red-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-sm font-medium text-center">{{ session('msg') }}</span>
                </div>
            @endif
            
            <!-- Form -->
            <form method="POST" action="{{ url('/login') }}" class="w-full space-y-4">
                @csrf
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
                
              
            </form>
        </div>
    </div>

    
</body>
</html>
