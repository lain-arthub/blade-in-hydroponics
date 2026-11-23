<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Admin Audit Logs</title>
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
                    <a href="/admin/audit-logs" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Audit Logs</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Recent history of administrative activity</p>
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
                            <h2 class="text-base font-bold text-gray-900 m-0">Audit Logs</h2>
                            <p class="text-gray-400 text-xs mt-0.5">Recent history of administrative activity</p>
                        </div>
                        <button onclick="alert('Exporting audit logs...')" class="flex items-center gap-1.5 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm transition-colors">
                            <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                            Export Logs
                        </button>
                    </div>
                    <div class="divide-y divide-gray-100">
                        <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Administrative Action (entered)</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Eullaine P. signed in to the administration portal</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">7 hours ago</span>
                        </div>
                        <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Administrative Action (disabled)</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Super Admin suspended access for Caraga Nursery</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">7 hours ago</span>
                        </div>
                        <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Farm Configuration (updated)</span>
                                    <span class="text-[11px] text-gray-400 mt-0.5">Super Admin updated Madrid Setup 1 device settings</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-gray-400 font-medium flex-shrink-0 ml-4">8 hours ago</span>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-gray-100 flex justify-between items-center text-[11px]">
                        <span class="text-gray-400">Activity retained for the last 30 days</span>
                        <button onclick="alert('Viewing all history...')" class="font-semibold text-emerald-600 hover:underline">View all history</button>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
