<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Alerts</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4.1.13/dist/index.global.min.js"></script>
</head>
<body class="font-sans">
    <div class="flex h-screen bg-[#f3f4f6]">
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
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="/analytics" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
                        <span>Analytics</span>
                    </a>
                    <a href="/alerts" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span>Alerts</span>
                    </a>
                    <a href="/control" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 010 4m-6 8a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4" /></svg>
                        <span>System Control</span>
                    </a>
                    <a href="/settings" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /></svg>
                        <span>Settings</span>
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Alerts</h1>
                    <p class="text-xs text-gray-400 mt-0.5">System alerts and notifications</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">EC</div>
                    <span class="text-xs font-semibold text-gray-800">Eullaine C.</span>
                </div>
            </header>
            <main class="flex-1 p-8 flex flex-col gap-6 bg-gray-100 font-sans text-gray-800">
                <!-- Action Controls Bar -->
                <div class="flex justify-between items-center">
                    <!-- Filter Controls Group -->
                    <div class="flex items-center gap-3">
                        <div class="relative">
                            <select id="severityFilter" onchange="filterAlerts()" class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 text-sm font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                <option value="All">Severity</option>
                                <option value="CRITICAL">Critical</option>
                                <option value="WARNING">Warning</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>
                        <div class="relative">
                            <select id="statusFilter" onchange="filterAlerts()" class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 text-sm font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                <option value="All">Status</option>
                                <option value="Unacknowledged">Unacknowledged</option>
                                <option value="Acknowledged">Acknowledged</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>
                        <div class="relative">
                            <select class="appearance-none bg-white border border-gray-200 rounded-lg px-4 py-2 pr-8 text-sm font-medium text-gray-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                <option value="All">Date Range</option>
                                <option value="Today">Today</option>
                                <option value="7days">Past 7 Days</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </div>
                    </div>
                    <button class="flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-medium px-4 py-2 rounded-lg shadow-sm transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        Alert Configuration
                    </button>
                </div>

                <!-- Alerts List -->
                <div id="alertsList" class="flex flex-col gap-4">
                    <!-- Alerts will be rendered by JS -->
                </div>
            </main>
        </div>
    </div>

    <script>
        const alerts = [
            { id: 1, timestamp: 'Oct 25, 11:15 AM', title: 'Critical pH Level Drift: 5.5', details: 'Details: Root zone acidity has dropped below safe margin (Target: 6.0 - 6.5)', severity: 'CRITICAL', status: 'unacknowledged' },
            { id: 2, timestamp: 'Oct 25, 11:08 AM', title: 'Nutrient Concentration Low: 1.2 EC', details: 'Details: EC content detected below threshold. Dosing solution formulation scheduled.', severity: 'WARNING', status: 'unacknowledged' },
            { id: 3, timestamp: 'Oct 25, 10:45 AM', title: 'High Temperature Warning: 28.5 °C', details: 'Details: Water temp exceeds maximum safe threshold in secondary tank reservoir.', severity: 'WARNING', status: 'unacknowledged' },
            { id: 4, timestamp: 'Oct 25, 08:30 AM', title: 'Water Level Low: Chamber 3', details: 'Details: Liquid sensors registered level drop. Sump cycle automation triggered.', severity: 'WARNING', status: 'unacknowledged' }
        ];

        function acknowledgeAlert(id) {
            const alert = alerts.find(a => a.id === id);
            if (alert && alert.status === 'unacknowledged') {
                alert.status = 'acknowledged';
                filterAlerts();
            }
        }

        function filterAlerts() {
            const severity = document.getElementById('severityFilter').value;
            const status = document.getElementById('statusFilter').value;
            const list = document.getElementById('alertsList');
            list.innerHTML = '';
            
            alerts.filter(alert => {
                const matchesSeverity = severity === 'All' || alert.severity === severity;
                const matchesStatus = status === 'All' || alert.status === status.toLowerCase();
                return matchesSeverity && matchesStatus;
            }).forEach(alert => {
                const div = document.createElement('div');
                div.className = `bg-white rounded-xl p-5 shadow-sm flex items-center justify-between transition-opacity ${alert.status === 'acknowledged' ? 'opacity-60' : ''}`;
                div.innerHTML = `
                    <div class="flex items-center gap-6">
                        <span class="text-xs text-gray-400 font-medium w-28 flex-shrink-0">${alert.timestamp}</span>
                        <div class="w-9 h-9 rounded-full flex items-center justify-center flex-shrink-0 ${alert.severity === 'CRITICAL' ? 'bg-red-100 text-red-500' : 'bg-amber-100 text-amber-500'}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        </div>
                        <div class="flex flex-col gap-0.5">
                            <h3 class="text-sm font-bold text-gray-900 m-0 leading-tight">${alert.title}</h3>
                            <div class="flex items-center gap-1 text-xs text-emerald-600 font-medium">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                <span>${alert.details}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 flex-shrink-0">
                        <span class="px-2.5 py-0.5 rounded-full text-[11px] font-bold tracking-wide ${alert.severity === 'CRITICAL' ? 'bg-red-100 text-red-500' : 'bg-amber-100 text-amber-600'}">• ${alert.severity}</span>
                        <button onclick="acknowledgeAlert(${alert.id})" ${alert.status === 'acknowledged' ? 'disabled' : ''} class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-3.5 py-1.5 rounded-lg shadow-sm transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                            ${alert.status === 'acknowledged' ? 'Acknowledged' : 'Acknowledge'}
                        </button>
                    </div>
                `;
                list.appendChild(div);
            });
        }
        filterAlerts();
    </script>
</body>
</html>
