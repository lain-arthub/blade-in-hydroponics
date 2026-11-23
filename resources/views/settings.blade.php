<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Settings</title>
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
                    <a href="/control" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 text-gray-300 hover:bg-[#136148]/60 hover:text-white">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 010 4m-6 8a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 010-4m0 4v2m0-6V4" /></svg>
                        <span>System Control</span>
                    </a>
                    <a href="/settings" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Settings</h1>
                    <p class="text-xs text-gray-400 mt-0.5">System configuration</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">EC</div>
                    <span class="text-xs font-semibold text-gray-800">Eullaine C.</span>
                </div>
            </header>
            <main class="flex-1 p-8 flex flex-col gap-6 bg-gray-100 font-sans text-gray-800">
                <!-- Top Tab Navigation Controls -->
                <div class="flex items-center gap-2">
                    <button onclick="setTab('General')" id="tab-General" class="px-4 py-1.5 text-xs font-semibold rounded-lg transition-colors bg-emerald-100 text-emerald-800 border border-emerald-300">General</button>
                    <button onclick="setTab('Sensor Calibration')" id="tab-Sensor Calibration" class="px-4 py-1.5 text-xs font-semibold rounded-lg transition-colors bg-white text-gray-600 hover:bg-gray-50 border border-transparent shadow-sm">Sensor Calibration</button>
                    <button onclick="setTab('Notifications')" id="tab-Notifications" class="px-4 py-1.5 text-xs font-semibold rounded-lg transition-colors bg-white text-gray-600 hover:bg-gray-50 border border-transparent shadow-sm">Notifications</button>
                </div>

                <!-- General Tab Content -->
                <div id="content-General">
                    <section class="bg-white rounded-xl p-6 shadow-sm flex flex-col gap-5 mb-6">
                        <h2 class="text-sm font-bold text-gray-900 m-0">Farm Information</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">Farm Name</label>
                                <input id="farmName" type="text" value="Madrid Setup 1" class="border border-gray-200 rounded-lg px-3.5 py-2 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">Location</label>
                                <input id="location" type="text" value="Madrid, Surigao del Sur" class="border border-gray-200 rounded-lg px-3.5 py-2 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">Operator Name</label>
                                <input id="operatorName" type="text" value="Eullaine P. Caballero" class="border border-gray-200 rounded-lg px-3.5 py-2 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm" />
                            </div>
                        </div>
                        <div class="flex justify-end mt-1">
                            <button onclick="saveFarmInfo()" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Save Farm Info</button>
                        </div>
                    </section>
                    <section class="bg-white rounded-xl p-6 shadow-sm flex flex-col gap-5">
                        <h2 class="text-sm font-bold text-gray-900 m-0">System Preferences</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">Timezone</label>
                                <div class="relative">
                                    <select id="timezone" class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-3.5 py-2 pr-8 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm cursor-pointer">
                                        <option value="PST, UTC+8">PST, UTC+8</option>
                                        <option value="EST, UTC-5">EST, UTC-5</option>
                                        <option value="UTC">UTC</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">Temperature Unit</label>
                                <div class="relative">
                                    <select id="tempUnit" class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-3.5 py-2 pr-8 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm cursor-pointer">
                                        <option value="°C">°C</option>
                                        <option value="°F">°F</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="text-xs font-medium text-gray-500">EC/TDS Unit</label>
                                <div class="relative">
                                    <select id="ecUnit" class="w-full appearance-none bg-white border border-gray-200 rounded-lg px-3.5 py-2 pr-8 text-sm text-gray-800 font-medium focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm cursor-pointer">
                                        <option value="mS/cm">mS/cm</option>
                                        <option value="PPM">PPM</option>
                                        <option value="µS/cm">µS/cm</option>
                                    </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-1">
                            <button onclick="savePreferences()" class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Save Preferences</button>
                        </div>
                    </section>
                </div>

                <!-- Sensor Calibration Tab -->
                <div id="content-Sensor Calibration" style="display:none">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
                        <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between gap-4">
                            <div>
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-sm font-bold text-gray-900 m-0">pH Sensor Calibration</h2>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        SENSORS OK
                                    </span>
                                </div>
                                <div class="grid grid-cols-3 gap-3 mb-3">
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">Current Raw Voltage</label>
                                        <div class="relative">
                                            <input type="text" value="412.8" readonly class="w-full border border-gray-200 bg-gray-50/50 rounded-lg pl-3 pr-8 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none" />
                                            <span class="absolute right-2.5 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">mV</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">Live pH Value</label>
                                        <div class="relative">
                                            <input type="text" value="6.82" readonly class="w-full border border-gray-200 bg-gray-50/50 rounded-lg pl-3 pr-8 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none" />
                                            <span class="absolute right-2.5 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">pH</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">Calibration Buffer Point</label>
                                        <div class="relative">
                                            <select class="w-full appearance-none border border-gray-200 bg-white rounded-lg pl-3 pr-7 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                                <option>pH 7.00 (Neutral)</option>
                                                <option>pH 4.01 (Acidic)</option>
                                                <option>pH 10.01 (Alkaline)</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-[11px] text-gray-400 leading-tight">Ensure the electrode is fully submerged in the selected reference buffer fluid before starting.</p>
                            </div>
                            <div class="flex justify-end pt-2">
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Calibrate pH Point</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between gap-4">
                            <div>
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-sm font-bold text-gray-900 m-0">EC Sensor Calibration</h2>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        SENSORS OK
                                    </span>
                                </div>
                                <div class="grid grid-cols-3 gap-3 mb-3">
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">K-Factor Constant</label>
                                        <input type="text" value="1.024" class="w-full border border-gray-200 rounded-lg px-3 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">Current EC Reading</label>
                                        <div class="relative">
                                            <input type="text" value="1.42" readonly class="w-full border border-gray-200 bg-gray-50/50 rounded-lg pl-3 pr-11 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none" />
                                            <span class="absolute right-2 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">mS/cm</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">Reference Solution</label>
                                        <div class="relative">
                                            <select class="w-full appearance-none border border-gray-200 bg-white rounded-lg pl-3 pr-7 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                                <option>1.413 mS/cm</option>
                                                <option>12.88 mS/cm</option>
                                            </select>
                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-[11px] text-gray-400 leading-tight">K-Factor represents the physical geometry constant of the probe electrodes.</p>
                            </div>
                            <div class="flex justify-end pt-2">
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Calibrate EC Probe</button>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-sm font-bold text-gray-900 m-0">Recent Calibration History</h2>
                            <button class="text-emerald-600 hover:underline text-xs font-semibold">Export Calibration Log (CSV)</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-50/70 text-gray-400 text-[11px] font-semibold border-b border-gray-100">
                                        <th class="py-2.5 px-4">Calibration Target</th>
                                        <th class="py-2.5 px-4">Reference Fluid</th>
                                        <th class="py-2.5 px-4">Measured Value</th>
                                        <th class="py-2.5 px-4">Adjusted Offset</th>
                                        <th class="py-2.5 px-4">Date & Operator</th>
                                        <th class="py-2.5 px-4 text-right">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-100 text-xs">
                                    <tr class="hover:bg-gray-50/50">
                                        <td class="py-3 px-4 font-bold text-gray-900">pH Electrode (Probe A1)</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">pH 7.00 Buffer</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">6.91 pH</td>
                                        <td class="py-3 px-4 font-semibold text-emerald-600">+0.09 pH</td>
                                        <td class="py-3 px-4 text-gray-400">Today, 08:32 AM · Eullaine P.</td>
                                        <td class="py-3 px-4 text-right"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">SUCCESS</span></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50">
                                        <td class="py-3 px-4 font-bold text-gray-900">pH Electrode (Probe A1)</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">pH 4.01 Buffer</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">4.06 pH</td>
                                        <td class="py-3 px-4 font-semibold text-red-500">-0.05 pH</td>
                                        <td class="py-3 px-4 text-gray-400">Today, 08:24 AM · Eullaine P.</td>
                                        <td class="py-3 px-4 text-right"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">SUCCESS</span></td>
                                    </tr>
                                    <tr class="hover:bg-gray-50/50">
                                        <td class="py-3 px-4 font-bold text-gray-900">EC Sensor (TDS Probe)</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">1.413 mS/cm Solution</td>
                                        <td class="py-3 px-4 text-gray-600 font-medium">1.401 mS/cm</td>
                                        <td class="py-3 px-4 font-semibold text-emerald-600">+0.012 mS/cm</td>
                                        <td class="py-3 px-4 text-gray-400">Jan 12, 2026 · Eullaine P.</td>
                                        <td class="py-3 px-4 text-right"><span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-700">SUCCESS</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Notifications Tab -->
                <div id="content-Notifications" style="display:none">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div class="md:col-span-2 bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between gap-6">
                            <div>
                                <div class="flex justify-between items-center mb-4">
                                    <h2 class="text-sm font-bold text-gray-900 m-0">Alert Delivery Channels</h2>
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                        CHANNELS CONFIGURABLE
                                    </span>
                                </div>
                                <div class="divide-y divide-gray-100">
                                    <div class="py-4 flex justify-between items-center gap-4 first:pt-0">
                                        <div class="flex flex-col gap-0.5">
                                            <span class="text-xs font-bold text-gray-900">System Outage & Hardware Offline</span>
                                            <span class="text-[11px] text-gray-400">Receive instant alerts if any telemetry controllers lose connection for more than 5 minutes.</span>
                                        </div>
                                        <button onclick="toggleChannel(this)" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-emerald-600 focus:outline-none">
                                            <span class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5"></span>
                                        </button>
                                    </div>
                                    <div class="py-4 flex justify-between items-center gap-4">
                                        <div class="flex flex-col gap-0.5">
                                            <span class="text-xs font-bold text-gray-900">pH Critical Deviation</span>
                                            <span class="text-[11px] text-gray-400">Notify operator immediately when pH parameters drift outside recommended crop thresholds.</span>
                                        </div>
                                        <button onclick="toggleChannel(this)" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-emerald-600 focus:outline-none">
                                            <span class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5"></span>
                                        </button>
                                    </div>
                                    <div class="py-4 flex justify-between items-center gap-4">
                                        <div class="flex flex-col gap-0.5">
                                            <span class="text-xs font-bold text-gray-900">EC Level Tolerance Alert</span>
                                            <span class="text-[11px] text-gray-400">Send warnings if Electrical Conductivity values stray below ideal nutrient levels.</span>
                                        </div>
                                        <button onclick="toggleChannel(this)" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-gray-200 focus:outline-none">
                                            <span class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-0"></span>
                                        </button>
                                    </div>
                                    <div class="py-4 flex justify-between items-center gap-4 last:pb-0">
                                        <div class="flex flex-col gap-0.5">
                                            <span class="text-xs font-bold text-gray-900">Weekly Digest Reports</span>
                                            <span class="text-[11px] text-gray-400">Weekly summary of telemetry sensor charts, trends, and diagnostic logs delivered every Sunday.</span>
                                        </div>
                                        <button onclick="toggleChannel(this)" class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-emerald-600 focus:outline-none">
                                            <span class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out translate-x-5"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Save Preferences</button>
                            </div>
                        </div>
                        <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col justify-between gap-6">
                            <div class="flex flex-col gap-4">
                                <h2 class="text-sm font-bold text-gray-900 m-0">Trigger Threshold Rules</h2>
                                <div class="flex flex-col gap-1">
                                    <label class="text-[11px] font-medium text-gray-500">pH Critical Deviation Alert</label>
                                    <div class="relative">
                                        <input type="text" value="0.5" class="w-full border border-gray-200 rounded-lg pl-3 pr-24 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                        <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">pH Unit Drift</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">EC Warning Min</label>
                                        <div class="relative">
                                            <input type="text" value="1.0" class="w-full border border-gray-200 rounded-lg pl-3 pr-11 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                            <span class="absolute right-2.5 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">mS/cm</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="text-[11px] font-medium text-gray-500">EC Warning Max</label>
                                        <div class="relative">
                                            <input type="text" value="2.0" class="w-full border border-gray-200 rounded-lg pl-3 pr-11 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                            <span class="absolute right-2.5 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">mS/cm</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="text-[11px] font-medium text-gray-500">Temperature Warning Window</label>
                                    <div class="relative">
                                        <input type="text" value="3.0" class="w-full border border-gray-200 rounded-lg pl-3 pr-24 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500" />
                                        <span class="absolute right-3 top-1/2 -translate-y-1/2 text-[10px] text-gray-400 font-medium">°C Deviation</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <label class="text-[11px] font-medium text-gray-500">Alert Delivery Quiet Hours</label>
                                    <div class="relative">
                                        <select class="w-full appearance-none border border-gray-200 bg-white rounded-lg pl-3 pr-8 py-1.5 text-xs font-semibold text-gray-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 cursor-pointer">
                                            <option>10:00 PM – 06:00 AM (PST)</option>
                                            <option>11:00 PM – 07:00 AM (PST)</option>
                                            <option>Disabled</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-gray-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-4 py-2 rounded-lg shadow-sm transition-colors">Save Trigger Rules</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        function setTab(tab) {
            ['General', 'Sensor Calibration', 'Notifications'].forEach(t => {
                document.getElementById('content-' + t).style.display = (t === tab) ? 'block' : 'none';
                const btn = document.getElementById('tab-' + t);
                if (t === tab) {
                    btn.className = 'px-4 py-1.5 text-xs font-semibold rounded-lg transition-colors bg-emerald-100 text-emerald-800 border border-emerald-300';
                } else {
                    btn.className = 'px-4 py-1.5 text-xs font-semibold rounded-lg transition-colors bg-white text-gray-600 hover:bg-gray-50 border border-transparent shadow-sm';
                }
            });
        }

        function saveFarmInfo() {
            alert('Farm information saved successfully!');
        }

        function savePreferences() {
            alert('Preferences saved successfully!');
        }

        function toggleChannel(btn) {
            const span = btn.querySelector('span');
            if (btn.classList.contains('bg-emerald-600')) {
                btn.classList.remove('bg-emerald-600');
                btn.classList.add('bg-gray-200');
                span.classList.remove('translate-x-5');
                span.classList.add('translate-x-0');
            } else {
                btn.classList.remove('bg-gray-200');
                btn.classList.add('bg-emerald-600');
                span.classList.remove('translate-x-0');
                span.classList.add('translate-x-5');
            }
        }
    </script>
</body>
</html>
