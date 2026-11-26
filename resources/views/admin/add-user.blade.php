<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Add User</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1.13/dist/index.global.min.js"></script>
</head>
<body class="font-sans">
    <div class="flex h-screen bg-[#f3f4f6]">
        <aside class="w-56 bg-[#09412f] text-white flex flex-col justify-between p-4 flex-shrink-0">
            <div>
                <div class="flex items-center space-x-2.5 px-2 py-3 mb-6">
                    <div class="w-9 h-9 rounded-full bg-[#136148] flex items-center justify-center p-1.5">
                        <img src="../assets/HydroSmart.png" alt="HydroSmart Logo" /> 
                    </div>
                    <span class="font-bold text-lg tracking-tight text-white">HydroSmart</span>
                </div>
                <nav class="space-y-1.5">
                    <a href="/admin/user-management" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        <span>User Management</span>
                    </a>
                    <a href="/admin/farm-management" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        <span>Farm Management</span>
                    </a>
                    <a href="/admin/audit-logs" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span>Audit Logs</span>
                    </a>
                    <a href="/admin/system-alerts" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 010 4m-6 8a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4" /></svg>
                        <span>System Alerts & Configuration</span>
                    </a>
                </nav>
            </div>
            <div class="pt-4 border-t border-[#136148]">
                <a href="/" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs text-gray-300 hover:bg-[#136148]/60 hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-gray-100 px-8 py-5 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Add User</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Create new user account</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">AD</div>
                    <span class="text-xs font-semibold text-gray-800">Admin</span>
                </div>
            </header>
            <main class="flex-1 p-8">
                <div class="bg-white rounded-xl p-6 shadow-sm max-w-md">
                    <h2 class="text-base font-bold m-0 mb-4">Add New User</h2>

                    @if (session('msg'))
                        <div class="w-full mb-5 p-4 bg-red-50 border border-red-300 text-green-800 rounded-md flex items-center gap-3"
                            role="alert">
                            <svg class="w-5 h-5 text-green-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-center">{{ session('msg') }}</span>
                        </div>
                    @endif
                    
                    @if (session('error'))
                        <div class="w-full mb-5 p-4 bg-red-50 border border-red-300 text-red-800 rounded-md flex items-center gap-3"
                            role="alert">
                            <svg class="w-5 h-5 text-red-600 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm font-medium text-center">{{ session('error') }}</span>
                        </div>
                    @endif


                    <form method="POST" action="{{ url('/create-account') }}"  class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">First Name</label>
                            <input name="fname" type="text" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600" required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Middle Name</label>
                            <input name="mname" type="text" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600"  />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Last Name</label>
                            <input name="lname" type="text"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600"
                                required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Email</label>
                            <input name="email" type="email" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600" required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Password</label>
                            <input name="password" type="text"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600"
                                required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Confirm Password</label>
                            <input name="password_confirmation" type="text"
                                class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600"
                                required />
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-gray-700 mb-1">Role</label>
                            <select name="role" class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:outline-none focus:ring-1 focus:ring-green-600">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="flex gap-2 pt-2">
                            <button type="submit" class="flex-1 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium py-2 rounded-lg">Add User</button>
                            <a href="/admin/user-management" class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium py-2 rounded-lg text-center">Cancel</a>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    
</body>
</html>
