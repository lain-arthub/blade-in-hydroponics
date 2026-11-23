<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - System Control</title>
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
                    <a href="/alerts" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>
                        <span>Alerts</span>
                    </a>
                    <a href="/control" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">System Control</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Manage system components</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">EC</div>
                    <span class="text-xs font-semibold text-gray-800">Eullaine C.</span>
                </div>
            </header>
            <main class="flex-1 p-8 flex flex-col gap-6 bg-gray-100 font-sans text-gray-800">
                <!-- Master System Mode Card -->
                <div class="bg-white rounded-xl p-5 shadow-sm flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-gray-800">Master System Mode:</span>
                        <span id="modeText" class="text-xs font-bold text-emerald-600 tracking-wide uppercase">ACTIVE</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span id="autoPilotText" class="text-xs font-bold text-emerald-600">Auto-Pilot [ON]</span>
                        <button onclick="toggleAutoPilot()" type="button" id="autoPilotBtn" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-emerald-600 focus:outline-none">
                            <span id="autoPilotToggle" class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5"></span>
                        </button>
                    </div>
                </div>

                <!-- Top Grid: Dosing Pumps -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2.5 mb-4">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L5.6 15.12a2 2 0 00-1.144.12l-1.07.535A2 2 0 002.267 17.4l.213 1.066A2 2 0 004.442 20h15.116a2 2 0 001.962-1.534l.213-1.066a2 2 0 00-1.305-1.972z" /></svg>
                                </div>
                                <h2 class="text-base font-bold text-gray-900 m-0">pH Correction Pumps</h2>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-xs"><span class="text-gray-600 font-medium">Pump 1 pH Up</span><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">READY</span></div>
                                <div class="flex justify-between items-center text-xs"><span class="text-gray-600 font-medium">Pump 2 pH Down</span><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">READY</span></div>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button onclick="triggerPhTest()" class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Test Dosing Cycle</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2.5 mb-4">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L5.6 15.12a2 2 0 00-1.144.12l-1.07.535A2 2 0 002.267 17.4l.213 1.066A2 2 0 004.442 20h15.116a2 2 0 001.962-1.534l.213-1.066a2 2 0 00-1.305-1.972z" /></svg>
                                </div>
                                <h2 class="text-base font-bold text-gray-900 m-0">Nutrient (EC) Dosing</h2>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center text-xs"><span class="text-gray-600 font-medium">Pump 3 Solution A</span><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">READY</span></div>
                                <div class="flex justify-between items-center text-xs"><span class="text-gray-600 font-medium">Pump 4 Solution B</span><span class="px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">READY</span></div>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button onclick="triggerNutrientTest()" class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Test Dosing Cycle</button>
                        </div>
                    </div>
                </section>

                <!-- Middle Grid -->
                <section class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2.5 mb-4">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /></svg>
                                </div>
                                <h2 class="text-base font-bold text-gray-900 m-0">Solenoid Valves & Water Flow</h2>
                            </div>
                            <div class="text-xs">
                                <span class="text-gray-600 font-medium">Fresh Water Inlet Valve: </span>
                                <span id="waterValveText" class="font-bold text-emerald-600">[CLOSED]</span>
                            </div>
                        </div>
                        <div class="mt-6 flex justify-start">
                            <button onclick="toggleWaterValve()" id="waterValveBtn" class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Manual Open</button>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-2.5 mb-4">
                                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" /></svg>
                                </div>
                                <h2 class="text-base font-bold text-gray-900 m-0">Water & Nutrient Circulation</h2>
                            </div>
                            <div class="space-y-2 text-xs">
                                <div>
                                    <span class="text-gray-600 font-medium">Fresh Water Inlet Valve: </span>
                                    <span id="waterValveText2" class="font-bold text-emerald-600">[CLOSED]</span>
                                </div>
                                <div>
                                    <button onclick="toggleWaterValve()" class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-3 py-1 rounded shadow-sm transition-colors my-1" id="waterValveBtn2">Manual Open</button>
                                </div>
                                <div class="pt-1">
                                    <span class="text-gray-600 font-medium">Nutrient Mixing Circulation: </span>
                                    <span id="circulationText" class="font-bold text-emerald-600">[ACTIVE]</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 flex justify-start">
                            <button onclick="toggleCirculation()" id="circulationBtn" class="border border-gray-200 hover:bg-gray-50 text-gray-700 text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Stop Flow</button>
                        </div>
                    </div>
                </section>

                <!-- Bottom Activity Logs -->
                <section class="bg-white rounded-xl p-6 shadow-sm">
                    <div class="flex items-center gap-2.5 mb-4">
                        <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h2 class="text-base font-bold text-gray-900 m-0">Recent Actuator Activity Logs</h2>
                    </div>
                    <ul id="actuatorLogs" class="list-disc list-inside space-y-2 text-xs text-gray-500 font-medium pl-1">
                        <li>[11:15 AM] pH Down pump injected 5ml</li>
                        <li>[09:30 AM] Solution A dosing cycle completed</li>
                        <li>[08:45 AM] Fresh water inlet valve closed</li>
                    </ul>
                </section>
            </main>
        </div>
    </div>

    <script>
        let isAutoPilotOn = true;
        let freshWaterInletClosed = true;
        let circulationActive = true;
        const logs = [
            '[11:15 AM] pH Down pump injected 5ml',
            '[09:30 AM] Solution A dosing cycle completed',
            '[08:45 AM] Fresh water inlet valve closed'
        ];

        function updateLogs() {
            const ul = document.getElementById('actuatorLogs');
            ul.innerHTML = '';
            logs.slice(0, 10).forEach(log => {
                const li = document.createElement('li');
                li.textContent = log;
                ul.appendChild(li);
            });
        }

        function getTime() {
            return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
        }

        function toggleAutoPilot() {
            isAutoPilotOn = !isAutoPilotOn;
            document.getElementById('modeText').textContent = isAutoPilotOn ? 'ACTIVE' : 'INACTIVE';
            document.getElementById('autoPilotText').textContent = `Auto-Pilot [${isAutoPilotOn ? 'ON' : 'OFF'}]`;
            const btn = document.getElementById('autoPilotBtn');
            const toggle = document.getElementById('autoPilotToggle');
            if (isAutoPilotOn) {
                btn.classList.remove('bg-gray-300');
                btn.classList.add('bg-emerald-600');
                toggle.classList.remove('translate-x-0');
                toggle.classList.add('translate-x-5');
            } else {
                btn.classList.remove('bg-emerald-600');
                btn.classList.add('bg-gray-300');
                toggle.classList.remove('translate-x-5');
                toggle.classList.add('translate-x-0');
            }
        }

        function triggerPhTest() {
            logs.unshift(`[${getTime()}] pH test dosing cycle initiated`);
            updateLogs();
        }

        function triggerNutrientTest() {
            logs.unshift(`[${getTime()}] Nutrient test dosing cycle initiated`);
            updateLogs();
        }

        function toggleWaterValve() {
            freshWaterInletClosed = !freshWaterInletClosed;
            const statusText = freshWaterInletClosed ? 'CLOSED' : 'OPEN';
            document.getElementById('waterValveText').textContent = `[${statusText}]`;
            document.getElementById('waterValveText2').textContent = `[${statusText}]`;
            document.getElementById('waterValveBtn').textContent = freshWaterInletClosed ? 'Manual Open' : 'Manual Close';
            document.getElementById('waterValveBtn2').textContent = freshWaterInletClosed ? 'Manual Open' : 'Manual Close';
            logs.unshift(`[${getTime()}] Fresh water inlet valve ${freshWaterInletClosed ? 'closed' : 'opened'}`);
            updateLogs();
        }

        function toggleCirculation() {
            circulationActive = !circulationActive;
            document.getElementById('circulationText').textContent = `[${circulationActive ? 'ACTIVE' : 'INACTIVE'}]`;
            document.getElementById('circulationBtn').textContent = circulationActive ? 'Stop Flow' : 'Start Flow';
            logs.unshift(`[${getTime()}] Nutrient mixing circulation ${circulationActive ? 'started' : 'stopped'}`);
            updateLogs();
        }
        updateLogs();
    </script>
</body>
</html>
