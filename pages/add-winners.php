<?php
require '../config/dbcon.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login-admin.php");
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Winners - BASC Sports Admin</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <script defer src="../assets/js/admin-dashboard.js"></script>
    <script src="../assets/js/sidebar.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="header bg-amber-50 p-4 fixed top-0 left-0 right-0 z-50 h-[70px] flex justify-between items-center">
        <div class="flex items-center gap-4">
            <button class="menu-toggle p-2 rounded-lg md:hidden hover:bg-[#ffd7b2]" id="menuToggle">
                <i class="fas fa-bars text-gray-700"></i>
            </button>
            <button class="sidebar-toggle p-2 rounded-lg hidden md:block hover:bg-[#ffd7b2]" id="sidebarToggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#2b2b2bff">
                    <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm240-80h400v-480H400v480Zm-80 0v-480H160v480h160Zm-160 0v-480 480Zm160 0h80-80Zm0-480h80-80Z"/>
                </svg>
            </button>
            
            <div class="logo flex items-center gap-3">
                <img class="h-12 w-12 rounded-full object-cover" src="../assets/img/BASC_sports_development_office.png" alt="BASC Logo">
                <span class="logo-text font-bold text-gray-800 whitespace-nowrap hidden md:block">BASC Sports Development Office</span>
                <span class="logo-text font-bold text-gray-800 whitespace-nowrap md:hidden">BASC Sports</span>
            </div>
        </div>
        
        <div class="flex items-center gap-4">
            <div class="user-info hidden md:flex items-center gap-3">
                <span class="user-name font-semibold text-gray-800">Admin</span>
                <div class="user-avatar h-9 w-9 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 flex items-center justify-center text-white font-semibold">
                    <i class="fas fa-user text-sm"></i>
                </div>
            </div>
        </div>
    </header>

    <nav class="sidebar fixed left-0 top-0 h-screen bg-gradient-to-b from-amber-50 to-amber-100 z-40 pt-[70px] transition-all duration-350 ease-in-out w-64 overflow-hidden whitespace-nowrap flex flex-col" id="sidebar">
        <div class="nav-menu p-4 flex-1 overflow-y-auto">
            <a href="admin-dashboard.php" class="nav-item flex items-center gap-3 p-3 rounded-xl text-gray-700 hover:bg-[#ffd7b2] transition duration-200 mb-2">
                <i class="fas fa-tachometer-alt w-5 text-center"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            <a href="add-winners.php" class="nav-item flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white shadow-md mb-2">
                <i class="fas fa-trophy w-5 text-center"></i>
                <span class="nav-text">Add Winners</span>
            </a>
            <a href="edit-admin.php" class="nav-item flex items-center gap-3 p-3 rounded-xl text-gray-700 hover:bg-[#ffd7b2] transition duration-200 mb-2">
                <i class="fas fa-medal w-5 text-center"></i>
                <span class="nav-text">Results</span>
            </a>
        </div>
        
        <div class="p-4 mt-auto">
            <a href="../function/admin/destroyer.php" class="logout-btn-full flex items-center justify-center gap-3 p-3 rounded-xl bg-gradient-to-r from-red-500 to-red-600 text-white shadow-md hover:from-red-600 hover:to-red-700 transition duration-200">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-text">Logout</span>
            </a>
            
            <a href="../function/admin/destroyer.php" class="logout-btn-icon hidden items-center justify-center p-3 rounded-xl bg-gradient-to-r from-red-500 to-red-600 text-white shadow-md hover:from-red-600 hover:to-red-700 transition duration-200">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </nav>

    <div class="overlay fixed inset-0 bg-black/50 z-30" id="overlay"></div>

    <main class="main-content flex-1 pt-[70px] md:pl-64 transition-all duration-350 ease-in-out min-h-screen flex flex-col" id="mainContent">
        <div class="px-6 py-8 flex-1">
            <div class="mb-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Add Winners</h2>
                <p class="text-gray-600">Select a sport category and input the winners for each position</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-gray-800">Winners Entry Form</h3>
                    <p class="text-gray-600 mt-1">Fill in all required fields marked with <span class="text-red-500">*</span></p>
                </div>
                
                <div class="p-6">
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="type" class="block text-gray-700 font-medium mb-2">
                                    Type of Sports <span class="text-red-500">*</span>
                                </label>
                                <select id="type" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
                                    <option value="none" selected disabled>Select A Sport</option>
                                    <option value="Combat">Combat Sports</option>
                                    <option value="Racket">Racket Sports</option>
                                    <option value="Ball">Ball Sports</option>
                                    <option value="Mind">Mind & E-Sports</option>
                                </select>
                            </div>

                            <div id="category-div" class="hidden">
                                <label for="category" class="block text-gray-700 font-medium mb-2">
                                    Category <span class="text-red-500">*</span>
                                </label>
                                <select id="category" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
                                    <option value="none" selected disabled>Select A Category</option>
                                </select>
                            </div>
                        </div>

                        <div id="winners-div" class="hidden space-y-8">
                            <div class="border-t border-gray-200 pt-8">
                                <div class="space-y-4">
                                    <h4 class="text-lg font-bold text-gray-800 flex items-center">
                                        <i class="fas fa-medal text-yellow-500 mr-2"></i>
                                        Gold Winner <span class="text-red-500 ml-1">*</span>
                                    </h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="gold-winner" class="block text-gray-700 font-medium mb-2">1st Place Institute</label>
                                            <select id="gold-winner" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
                                                <option value="none" selected disabled>Select Winner</option>
                                                <option value="1">CA</option>
                                                <option value="2">COED</option>
                                                <option value="3">CET</option>
                                                <option value="4">CM</option>
                                                <option value="5">DRT</option>
                                                <option value="6">BTVC</option>
                                                <option value="7">FFHNAS</option>
                                                <option value="8">IAS</option>
                                                <option value="9">ICS</option>
                                                <option value="10">IVM</option>
                                            </select>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="gold-participant1" class="block text-gray-700 font-medium mb-2">Participant 1 (Optional)</label>
                                                <input type="text" id="gold-participant1" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                            <div>
                                                <label for="gold-participant2" class="block text-gray-700 font-medium mb-2">Participant 2 (Optional)</label>
                                                <input type="text" id="gold-participant2" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-8">
                                <div class="space-y-4">
                                    <h4 class="text-lg font-bold text-gray-800 flex items-center">
                                        <i class="fas fa-medal text-gray-400 mr-2"></i>
                                        Silver Winner <span class="text-red-500 ml-1">*</span>
                                    </h4>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="silver-winner" class="block text-gray-700 font-medium mb-2">2nd Place Institute</label>
                                            <select id="silver-winner" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
                                                <option value="none" selected disabled>Select Winner</option>
                                                <option value="1">CA</option>
                                                <option value="2">COED</option>
                                                <option value="3">CET</option>
                                                <option value="4">CM</option>
                                                <option value="5">DRT</option>
                                                <option value="6">BTVC</option>
                                                <option value="7">FFHNAS</option>
                                                <option value="8">IAS</option>
                                                <option value="9">ICS</option>
                                                <option value="10">IVM</option>
                                            </select>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="silver-participant1" class="block text-gray-700 font-medium mb-2">Participant 1 (Optional)</label>
                                                <input type="text" id="silver-participant1" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                            <div>
                                                <label for="silver-participant2" class="block text-gray-700 font-medium mb-2">Participant 2 (Optional)</label>
                                                <input type="text" id="silver-participant2" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 pt-8">
                                <div class="space-y-4">
                                    <div class="flex justify-between items-center">
                                        <h4 class="text-lg font-bold text-gray-800 flex items-center">
                                            <i class="fas fa-medal text-amber-700 mr-2"></i>
                                            Bronze Winner
                                        </h4>
                                        <div class="space-x-2">
                                            <button id="add-another-silver" class="px-4 py-2 bg-emerald-500 text-white rounded-xl hover:bg-emerald-600 transition duration-200">
                                                <i class="fas fa-plus mr-2"></i>Add Another Bronze
                                            </button>
                                            <button id="remove-another-silver" class="px-4 py-2 bg-gray-500 text-white rounded-xl hover:bg-gray-600 transition duration-200 hidden">
                                                <i class="fas fa-minus mr-2"></i>Remove Bronze
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div>
                                            <label for="bronze-winner" class="block text-gray-700 font-medium mb-2">3rd Place Institute</label>
                                            <select id="bronze-winner" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200 bg-white">
                                                <option value="none" selected disabled>Select Winner</option>
                                                <option value="1">CA</option>
                                                <option value="2">COED</option>
                                                <option value="3">CET</option>
                                                <option value="4">CM</option>
                                                <option value="5">DRT</option>
                                                <option value="6">BTVC</option>
                                                <option value="7">FFHNAS</option>
                                                <option value="8">IAS</option>
                                                <option value="9">ICS</option>
                                                <option value="10">IVM</option>
                                            </select>
                                        </div>
                                        
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            <div>
                                                <label for="bronze-participant1" class="block text-gray-700 font-medium mb-2">Participant 1 (Optional)</label>
                                                <input type="text" id="bronze-participant1" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                            <div>
                                                <label for="bronze-participant2" class="block text-gray-700 font-medium mb-2">Participant 2 (Optional)</label>
                                                <input type="text" id="bronze-participant2" placeholder="Enter participant name" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent transition duration-200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="additional-silver" class="hidden"></div>

                            <div class="border-t border-gray-200 pt-8">
                                <div class="flex justify-end space-x-4">
                                    <button type="button" id="reset-btn" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-xl hover:bg-gray-50 transition duration-200">
                                        Reset Form
                                    </button>
                                    <button id="save-btn" class="px-8 py-3 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium rounded-xl hover:from-emerald-600 hover:to-emerald-700 transition duration-200 shadow-md hover:shadow-lg flex items-center">
                                        <i class="fas fa-save mr-2"></i>Save Winners
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 bg-amber-50 border border-amber-200 rounded-xl p-6">
                <h4 class="text-lg font-bold text-gray-800 mb-3 flex items-center">
                    <i class="fas fa-info-circle text-amber-600 mr-2"></i>
                    Instructions
                </h4>
                <ul class="space-y-2 text-gray-600">
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>Select the type of sport first, then the specific category will appear</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>Fields marked with <span class="text-red-500">*</span> are required</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>Participant names are optional for individual/team sports</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>Use "Add Another Bronze" for sports with multiple 3rd place winners</span>
                    </li>
                </ul>
            </div>
        </div>

        <footer class="bg-gradient-to-r from-amber-50 to-amber-100 border-t border-amber-200 py-4 px-6 mt-auto">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="flex sm:flex-row flex-col items-center mb-2 sm:mb-0">
                    <div class="flex gap-2 mb-1 sm:mb-0">
                        <img class="h-8 w-8 rounded-full border border-amber-300" src="../assets/img/BASC_sports_development_office.png" alt="BASC Logo">
                        <img class="h-8 w-8 rounded-full border border-amber-300" src="../assets/img/BASC_Logo.svg" alt="BASC Logo">
                    </div>
                    <div class="text-center sm:text-left sm:ml-3">
                        <span class="text-gray-700 font-bold text-sm">BASC Sports Development Office</span>
                        <span class="text-gray-600 text-xs block">Promoting Sports Excellence</span>
                    </div>
                </div>
                <div class="text-gray-600 text-xs text-center sm:text-right">
                    <p>&copy; 2025 BSAU Sportsfest. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </main>

    <script>
        // Form functionality
        document.getElementById('reset-btn').addEventListener('click', () => {
            if (confirm('Are you sure you want to reset the form? All entered data will be lost.')) {
                document.getElementById('type').selectedIndex = 0;
                document.getElementById('category-div').classList.add('hidden');
                document.getElementById('winners-div').classList.add('hidden');
                
                if (document.getElementById('category')) {
                    document.getElementById('category').selectedIndex = 0;
                }
                
                const winnerSelects = ['gold-winner', 'silver-winner', 'bronze-winner', 'bronze-winner2'];
                winnerSelects.forEach(id => {
                    const element = document.getElementById(id);
                    if (element) element.selectedIndex = 0;
                });
                
                const participantInputs = [
                    'gold-participant1', 'gold-participant2',
                    'silver-participant1', 'silver-participant2',
                    'bronze-participant1', 'bronze-participant2',
                    'bronze-participant11', 'bronze-participant22'
                ];
                participantInputs.forEach(id => {
                    const element = document.getElementById(id);
                    if (element) element.value = '';
                });
                
                const additionalSilver = document.getElementById('additional-silver');
                if (additionalSilver) {
                    additionalSilver.classList.add('hidden');
                    additionalSilver.innerHTML = '';
                }
                
                document.getElementById('remove-another-silver').classList.add('hidden');
                document.getElementById('add-another-silver').classList.remove('hidden');
                
                alert('Form has been reset.');
            }
        });

        // DEBUG: Check if elements exist
        console.log('type element:', document.getElementById('type'));
        console.log('category-div element:', document.getElementById('category-div'));
        console.log('winners-div element:', document.getElementById('winners-div'));
    </script>
</body>
</html>