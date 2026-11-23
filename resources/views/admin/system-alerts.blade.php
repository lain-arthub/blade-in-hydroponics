<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Admin System Alerts & Configuration</title>
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
                    <a href="/admin/user-management" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
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
                    <a href="/admin/system-alerts" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">System Alerts & Configuration</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Monitor issues across all connected farms</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">AD</div>
                    <span class="text-xs font-semibold text-gray-800">Admin</span>
                </div>
            </header>
            <main class="flex-1 p-8 flex flex-col bg-gray-100 font-sans text-gray-800">
                <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col gap-5 max-w-5xl">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-base font-bold text-gray-900 m-0">System Alerts & Configuration</h2>
                            <p class="text-gray-400 text-xs mt-0.5">Monitor issues across all connected farms</p>
                        </div>
                        <span class="w-6 h-6 rounded-full bg-red-100 text-red-500 font-bold text-xs flex items-center justify-center flex-shrink-0">4</span>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <div class="py-3 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-orange-50 text-orange-400 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m-12.728 0a9 9 0 010-12.728m12.728 0L17 7m1.364-1.364l-1.414 1.414M5.636 5.636L7 7m-1.364-1.364L7 7" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Cloud Sync Delayed</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Madrid Setup 1 · Sync delayed by 5 minutes</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">10:42 AM</span>
                        </div>
                        <div class="py-3 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-orange-50 text-orange-400 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Database Full</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Caraga Nursery · Storage at 95% capacity</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">10:30 AM</span>
                        </div>
                        <div class="py-3 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-orange-50 text-orange-400 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Database Full</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Madrid Setup 1 · Archive older sensor data</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">09:48 AM</span>
                        </div>
                        <div class="py-3 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-orange-50 text-orange-400 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m-12.728 0a9 9 0 010-12.728m12.728 0L17 7m1.364-1.364l-1.414 1.414M5.636 5.636L7 7m-1.364-1.364L7 7" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Cloud Sync Delayed</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Caraga Nursery · Check gateway connection</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">09:15 AM</span>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-xl p-4 flex justify-between items-center mt-1">
                        <div class="flex flex-col">
                            <span class="text-xs font-bold text-gray-900 leading-tight">System alert notifications</span>
                            <span class="text-[11px] text-gray-400 mt-0.5">Email administrators when an issue occurs</span>
                        </div>
                        <button onclick="toggleNotif(this)" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-emerald-600 focus:outline-none">
                            <span class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5"></span>
                        </button>
                    </div>
                    <div class="flex justify-between items-center pt-2">
                        <button onclick="alert('Viewing all alerts...')" class="text-xs font-semibold text-emerald-600 hover:underline">View all alerts</button>
                        <button onclick="alert('Opening system configuration...')" class="flex items-center gap-1.5 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm transition-colors">
                            <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            System Configuration
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        function toggleNotif(btn) {
            const span = btn.querySelector('span');
            if (btn.classList.contains('bg-emerald-600')) {
                btn.classList.remove('bg-emerald-600');
                btn.classList.add('bg-gray-300');
                span.classList.remove('translate-x-5');
                span.classList.add('translate-x-0');
            } else {
                btn.classList.remove('bg-gray-300');
                btn.classList.add('bg-emerald-600');
                span.classList.remove('translate-x-0');
                span.classList.add('translate-x-5');
            }
        }
    </script>
</body>
</html>
