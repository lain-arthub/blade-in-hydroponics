<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Analytics</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1.13/dist/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body class="font-sans">
    <div class="flex h-screen bg-[#f3f4f6]">
        <!-- Dark Green Sidebar -->
        <aside class="w-56 bg-[#09412f] text-white flex flex-col justify-between p-4 flex-shrink-0">
            <div>
                <div class="flex items-center space-x-2.5 px-2 py-3 mb-6">
                    <div class="w-9 h-9 rounded-full bg-[#136148] flex items-center justify-center p-1.5">
                        <img src="assets/HydroSmart.png" alt="HydroSmart Logo" /> 
                    </div>
                    <span class="font-bold text-lg tracking-tight text-white">HydroSmart</span>
                </div>

                <nav class="space-y-1.5">
                    <a href="/dashboard" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="/analytics" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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

            <div class="pt-4 border-t border-[#136148]">
                <a href="/" class="flex items-center space-x-3 px-3 py-2 rounded-lg text-xs text-gray-300 hover:bg-[#136148]/60 hover:text-white transition-colors duration-150">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <div class="flex-1 flex flex-col overflow-y-auto">
            <header class="bg-white border-b border-gray-100 px-8 py-5 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Analytics</h1>
                    <p class="text-xs text-gray-400 mt-0.5">System performance history</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">
                        EC
                    </div>
                    <span class="text-xs font-semibold text-gray-800">Eullaine C.</span>
                </div>
            </header>

            <main class="flex-1 p-8 flex flex-col gap-6 bg-gray-100 font-sans text-gray-800">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-gray-500 font-medium">System performance history</span>
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <select class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 text-sm font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                <option>Past 7 Days</option>
                                <option>Past 30 Days</option>
                                <option>Past 90 Days</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                        <button class="flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                            </svg>
                            Export Report
                        </button>
                    </div>
                </div>

                <section class="bg-white rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="mb-4">
                        <h2 class="text-base font-bold m-0">Multi-Parameter Trend Over Time</h2>
                        <p class="text-gray-400 text-xs mt-0.5">pH, EC and water temperature · Oct 18-25, 2026</p>
                    </div>
                    <div class="h-64 relative">
                        <canvas id="trendChart"></canvas>
                    </div>
                </section>

                <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-base font-bold m-0">Nutrient (EC) Concentration Summary</h3>
                                <p class="text-gray-400 text-xs mt-0.5">Daily average · mS/cm</p>
                            </div>
                            <span class="text-xs font-semibold text-emerald-600">Avg 1.42</span>
                        </div>
                        <div class="h-36 relative">
                            <canvas id="nutrientChart"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="text-base font-bold m-0">pH Level Distribution</h3>
                                <p class="text-gray-400 text-xs mt-0.5">Readings grouped by range</p>
                            </div>
                            <span class="px-2 py-0.5 rounded-full text-xs font-semibold bg-emerald-100 text-emerald-700">
                                82% optimal
                            </span>
                        </div>
                        <div class="h-36 relative">
                            <canvas id="phChart"></canvas>
                        </div>
                    </div>
                </section>

                <section class="bg-white rounded-xl p-6 shadow-sm">
                    <h2 class="text-base font-bold m-0 mb-4">Recent Historical Log</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="border-b border-gray-200">
                                    <th class="text-left py-3 px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Timestamp</th>
                                    <th class="text-left py-3 px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">pH</th>
                                    <th class="text-left py-3 px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">EC (mS/cm)</th>
                                    <th class="text-left py-3 px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Temperature</th>
                                    <th class="text-left py-3 px-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 px-4 text-gray-700">Oct 25, 09:30 AM</td>
                                    <td class="py-3 px-4 text-gray-700">6.3</td>
                                    <td class="py-3 px-4 text-gray-700">1.4</td>
                                    <td class="py-3 px-4 text-gray-700">24.6 °C</td>
                                    <td class="py-3 px-4"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Optimal</span></td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 px-4 text-gray-700">Oct 25, 09:00 AM</td>
                                    <td class="py-3 px-4 text-gray-700">6.2</td>
                                    <td class="py-3 px-4 text-gray-700">1.4</td>
                                    <td class="py-3 px-4 text-gray-700">24.4 °C</td>
                                    <td class="py-3 px-4"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Optimal</span></td>
                                </tr>
                                <tr class="border-b border-gray-100">
                                    <td class="py-3 px-4 text-gray-700">Oct 25, 08:30 AM</td>
                                    <td class="py-3 px-4 text-gray-700">6.2</td>
                                    <td class="py-3 px-4 text-gray-700">1.3</td>
                                    <td class="py-3 px-4 text-gray-700">24.1 °C</td>
                                    <td class="py-3 px-4"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Optimal</span></td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 text-gray-700">Oct 25, 08:00 AM</td>
                                    <td class="py-3 px-4 text-gray-700">6.1</td>
                                    <td class="py-3 px-4 text-gray-700">1.4</td>
                                    <td class="py-3 px-4 text-gray-700">23.9 °C</td>
                                    <td class="py-3 px-4"><span class="px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-100 text-emerald-700">Optimal</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script>
        // Trend Chart
        new Chart(document.getElementById('trendChart'), {
            type: 'line',
            data: {
                labels: ['Oct 18', 'Oct 19', 'Oct 20', 'Oct 21', 'Oct 22', 'Oct 23', 'Oct 24', 'Oct 25'],
                datasets: [
                    {
                        label: 'pH',
                        borderColor: '#2DD4BF',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0,
                        data: [6.2, 6.3, 6.8, 6.7, 6.4, 6.5, 6.8, 7.2]
                    },
                    {
                        label: 'EC',
                        borderColor: '#4ADE80',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0,
                        data: [6.0, 6.2, 6.4, 6.3, 6.1, 6.2, 6.5, 6.6]
                    },
                    {
                        label: 'Temperature',
                        borderColor: '#F87171',
                        backgroundColor: 'transparent',
                        borderWidth: 2,
                        tension: 0.4,
                        pointRadius: 0,
                        data: [6.1, 6.1, 6.3, 6.2, 6.0, 6.1, 6.3, 6.4]
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top', align: 'end', labels: { usePointStyle: true, boxWidth: 6, font: { size: 12 }, color: '#64748B' } },
                    tooltip: { mode: 'index', intersect: false }
                },
                scales: {
                    x: { grid: { display: false }, ticks: { color: '#94A3B8', font: { size: 11 } } },
                    y: { grid: { color: '#F1F5F9' }, ticks: { display: false }, border: { display: false } }
                }
            }
        });

        // Nutrient Chart
        new Chart(document.getElementById('nutrientChart'), {
            type: 'bar',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                datasets: [{
                    label: 'EC Level',
                    borderRadius: 4,
                    data: [1.2, 1.5, 1.3, 1.7, 1.5, 1.8, 1.6, 1.5, 1.9, 1.4, 1.3, 1.5],
                    backgroundColor: ['#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#3B82F6', '#4ADE80', '#4ADE80', '#4ADE80']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { x: { display: false }, y: { display: false } }
            }
        });

        // pH Chart
        new Chart(document.getElementById('phChart'), {
            type: 'bar',
            data: {
                labels: ['<5.5', '5.5-5.8', '5.8-6.0', '6.0-6.5', '6.5-6.8', '6.8-7.0', '7.0-7.2', '>7.2'],
                datasets: [{
                    label: 'Readings',
                    borderRadius: 4,
                    data: [2, 3, 7, 11, 8, 6, 2, 1],
                    backgroundColor: ['#DCFCE7', '#DCFCE7', '#14B8A6', '#14B8A6', '#14B8A6', '#14B8A6', '#DCFCE7', '#DCFCE7']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: { x: { display: false }, y: { display: false } }
            }
        });
    </script>
</body>
</html>
