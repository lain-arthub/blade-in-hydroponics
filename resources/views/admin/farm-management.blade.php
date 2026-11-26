<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HydroSmart - Admin Farm Management</title>
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
                    <a href="/admin/farm-management" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-xs transition-colors duration-150 bg-white text-[#09412f] font-semibold">
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
                    <h1 class="text-xl font-bold text-gray-900 leading-tight">Farm Management</h1>
                    <p class="text-xs text-gray-400 mt-0.5">Connected farms and device settings</p>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-7 h-7 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold flex items-center justify-center">AD</div>
                    <span class="text-xs font-semibold text-gray-800">Admin</span>
                </div>
            </header>
            <main class="flex-1 p-8 flex flex-col bg-gray-100 font-sans text-gray-800">
                <div class="bg-white rounded-xl p-6 shadow-sm flex flex-col gap-5">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-base font-bold text-gray-900 m-0">Farm Management</h2>
                            <p class="text-gray-400 text-xs mt-0.5">Connected farms and device settings</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button onclick="openAddFarmModal()" class="flex items-center gap-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm transition-colors">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                                Add Farm
                            </button>
                            
                        </div>
                    </div>
                    
                    <div class="divide-y divide-gray-100">
                        <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Madrid Setup 1</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-xs font-bold text-gray-900 leading-tight">Caraga Nursery</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="pt-2 border-t border-gray-100 text-[11px] text-gray-400">
                        All devices synced · Last checked just now
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Add Farm Modal -->
<div id="addFarmModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/40 backdrop-blur-sm" onclick="closeAddFarmModal(event)">
    <div class="bg-white rounded-xl p-6 w-full max-w-md mx-4 shadow-xl" onclick="event.stopPropagation()">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold text-gray-900">Add New Farm</h3>
            <button onclick="closeAddFarmModal()" class="text-gray-400 hover:text-gray-600 text-xl leading-none">&times;</button>
        </div>
        <form id="addFarmForm" class="space-y-4" onsubmit="handleAddFarm(event)">
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1">Farm Name</label>
                <input type="text" name="name" required placeholder="e.g., Green Valley Farm" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1">Location</label>
                <input type="text" name="location" required placeholder="e.g., Madrid, Spain" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-xs font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3" placeholder="Optional description" class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent resize-none"></textarea>
            </div>
            <div class="flex justify-end gap-2 pt-2">
                <button type="button" onclick="closeAddFarmModal()" class="px-4 py-2 border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors">Cancel</button>
                <button type="submit" class="px-4 py-2 bg-emerald-600 text-white text-sm font-medium rounded-lg hover:bg-emerald-700 transition-colors">Add Farm</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openAddFarmModal() {
        document.getElementById('addFarmModal').classList.remove('hidden');
        document.getElementById('addFarmModal').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeAddFarmModal(event) {
        if (event && event.target !== event.currentTarget) return;
        document.getElementById('addFarmModal').classList.add('hidden');
        document.getElementById('addFarmModal').classList.remove('flex');
        document.body.style.overflow = '';
        document.getElementById('addFarmForm').reset();
    }

    function handleAddFarm(event) {
        event.preventDefault();
        const formData = new FormData(event.target);
        const farmData = Object.fromEntries(formData.entries());
        
        // Frontend-only: Show success and add to list visually
        console.log('Add Farm (frontend only):', farmData);
        alert('Farm added successfully! (Frontend demo - no backend)');
        
        // Optionally add to the list visually
        addFarmToList(farmData);
        closeAddFarmModal();
    }

    function addFarmToList(farm) {
        const farmList = document.querySelector('.divide-y.divide-gray-100');
        const farmHtml = `
            <div class="py-3.5 flex items-center justify-between first:pt-0 last:pb-0">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-lg bg-emerald-100/70 text-emerald-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xs font-bold text-gray-900 leading-tight">${farm.name}</span>
                        <span class="text-[11px] text-gray-400 mt-0.5">${farm.location}</span>
                    </div>
                </div>
                <button onclick="alert('Opening farm config...')" class="flex items-center gap-1.5 border border-gray-200 bg-white hover:bg-gray-50 text-gray-700 text-xs font-semibold px-3 py-1.5 rounded-lg shadow-sm transition-colors">
                    <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                    Farm Config
                </button>
            </div>
        `;
        farmList.insertAdjacentHTML('beforeend', farmHtml);
        
        // Update farm count
        const countBadge = document.querySelector('.bg-emerald-100.text-emerald-700');
        if (countBadge) {
            const currentCount = parseInt(countBadge.textContent.match(/\d+/)?.[0] || '0');
            countBadge.textContent = `${currentCount + 1} farms connected`;
        }
    }

    // Close modal on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeAddFarmModal();
    });
</script>
</body>
</html>
