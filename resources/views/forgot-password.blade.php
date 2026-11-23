<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Forgot Password</title>
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
                Reset Password
            </h1>
            <p class="text-xs text-gray-400 text-center mb-6 leading-relaxed px-2">
                Enter your email address and we'll send you a link to reset your password.
            </p>

            <!-- Form -->
            <form onsubmit="handleReset(event)" class="w-full space-y-4">
                <!-- Email Input -->
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

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full rounded-md bg-emerald-600 hover:bg-emerald-700 py-2.5 text-white font-medium text-xs transition duration-150 ease-in-out mt-2"
                >
                    Send Reset Link
                </button>

                <!-- Back to Sign In Link -->
                <div class="text-center pt-2">
                    <a class="text-xs text-emerald-600 hover:underline font-medium" href="/">Back to Sign In</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function handleReset(e) {
            e.preventDefault();
            alert('Password reset link sent to your email!');
            window.location.href = '/';
        }
    </script>
</body>
</html>
