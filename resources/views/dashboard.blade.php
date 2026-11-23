<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1.13/dist/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body class="font-sans">
    <div class="flex h-screen bg-[#f3f4f6]">
        <!-- Dark Green Sidebar -->
        <aside class="w-56 bg-[#09412f] text-white flex flex-col justify-between p-4 flex-shrink-0">
            <div>
                <!-- HydroSmart Brand Logo -->
                <div class="flex items-center space-x-2.5 px-2 py-3 mb-6">
                    <div class="w-9 h-9 rounded-full bg-[#136148] flex items-center justify-center p-1.5">
                        <img src="assets/HydroSmart.png" alt="HydroSmart Logo" /> 
                    </div>
                    <span class="font-bold text-lg tracking-tight text-white">HydroSmart</span>
                </div>

                <!-- Navigation Menu Links -->
                <nav class="space-y-1.5">
                    <a href="dashboard.html" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="/analytics" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                        <span>Analytics</span>
                    </a>
                    <a href="/alerts" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span>Alerts</span>
                    </a>
                    <a href="/control" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 010 4m-6 8a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4" />
                        </svg>
                        <span>System Control</span>
                    </a>
                    <a href="/settings" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        </svg>
                        <span>Settings</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Option -->
            <div class="pt-4 border-t border-[#136148]">
                <a href="/" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs text-gray-300 hover:bg-[#136148]/60 hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content Container -->
        <div class="flex-1 flex flex-col overflow-y-auto">
            <!-- Top Bar Header -->
            <header class="bg-white border-b border-gray-100 px-8 py-5 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Dashboard Overview</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Monitor your hydroponic system in real time</p>
                </div>

                <!-- User Profile Pill -->
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">
                        EC
                    </div>
                    <span class="text-xs font-semibold text-gray-800">Eullaine C.</span>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 p-8 flex flex-col gap-6 bg-gray-100 font-sans text-gray-800">
                <!-- Metric Cards Grid -->
                <section class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-500 text-sm font-medium">pH Level</span>
                            </div>
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div>
                            <div class="flex items-baseline gap-1.5 mt-3 mb-2">
                                <span class="text-3xl font-bold leading-none">6.2</span>
                                <span class="text-gray-500 text-sm">pH</span>
                            </div>
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">
                                Optimal
                            </span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-500 text-sm font-medium">Nutrient (EC/TDS)</span>
                            </div>
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div>
                            <div class="flex items-baseline gap-1.5 mt-3 mb-2">
                                <span class="text-3xl font-bold leading-none">1.4</span>
                                <span class="text-gray-500 text-sm">mS/cm</span>
                            </div>
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">
                                Optimal
                            </span>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-2">
                                <span class="text-gray-500 text-sm font-medium">Temperature</span>
                            </div>
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        </div>
                        <div>
                            <div class="flex items-baseline gap-1.5 mt-3 mb-2">
                                <span class="text-3xl font-bold leading-none">26.5</span>
                                <span class="text-gray-500 text-sm">°C</span>
                            </div>
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">
                                Normal
                            </span>
                        </div>
                    </div>
                </section>

                <!-- Live Parameter Trends Chart Section -->
                <section class="bg-white rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="mb-4">
                        <h2 class="text-base font-bold m-0">Live Parameter Trends</h2>
                        <p class="text-gray-400 text-xs mt-0.5">Last 6 hours · Updated just now</p>
                    </div>
                    <div class="h-56 relative">
                        <canvas id="trendsChart"></canvas>
                    </div>
                </section>

                <!-- Bottom Grid Section -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <!-- Recent Alerts Log -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex justify-between items-center">
                            <h2 class="text-base font-bold m-0">Recent Alerts Log</h2>
                            <a href="alerts.html" class="text-emerald-500 text-sm font-medium hover:underline">View all</a>
                        </div>
                        <ul class="list-none p-0 mt-4 mb-0 flex flex-col gap-3">
                            <li class="flex items-center gap-2.5 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 flex-shrink-0"></span>
                                <span class="text-gray-400 text-xs w-16 flex-shrink-0">10:42 AM</span>
                                <span class="text-gray-700 font-medium">pH stable at 6.2</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 flex-shrink-0"></span>
                                <span class="text-gray-400 text-xs w-16 flex-shrink-0">08:15 AM</span>
                                <span class="text-gray-700 font-medium">Temp peaked at 27°C</span>
                            </li>
                            <li class="flex items-center gap-2.5 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 flex-shrink-0"></span>
                                <span class="text-gray-400 text-xs w-16 flex-shrink-0">06:30 AM</span>
                                <span class="text-gray-700 font-medium">EC dropped to 1.2</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Automated Dosing Status -->
                    <div class="bg-white rounded-xl p-6 shadow-sm">
                        <div class="flex justify-between items-center">
                            <h2 class="text-base font-bold m-0">Automated Dosing System Status</h2>
                            <span class="inline-block px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">
                                Enabled
                            </span>
                        </div>
                        <div class="mt-4">
                            <p class="text-gray-400 text-xs m-0">Pumps Inactive</p>
                            <p class="text-sm font-semibold mt-0.5 mb-3">Next check 3:00 PM</p>
                            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                <div class="h-full bg-emerald-500 rounded-full w-[45%]"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('trendsChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00'],
                datasets: [
                    {
                        label: 'pH',
                        borderColor: '#38bdf8',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.45,
                        pointRadius: 0,
                        data: [6.0, 6.4, 6.7, 6.1, 6.5, 6.6, 6.3]
                    },
                    {
                        label: 'EC',
                        borderColor: '#34d399',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.45,
                        pointRadius: 0,
                        data: [6.2, 5.9, 6.1, 6.4, 6.2, 6.6, 6.5]
                    },
                    {
                        label: 'Temp',
                        borderColor: '#f87171',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.45,
                        pointRadius: 0,
                        data: [6.0, 6.0, 6.0, 6.2, 6.5, 6.6, 6.7]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'end',
                        labels: {
                            usePointStyle: true,
                            boxWidth: 8,
                            font: { size: 12 },
                            color: '#64748b'
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                },
                scales: {
                    x: {
                        grid: { display: false },
                        ticks: { color: '#94a3b8', font: { size: 11 } }
                    },
                    y: {
                        display: false,
                        grid: { display: true, color: '#f1f5f9' },
                        min: 5.5,
                        max: 7.0
                    }
                }
            }
        });
    </script>
</body>
</html>
