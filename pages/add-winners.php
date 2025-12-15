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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }
        @media (min-width: 768px) {
            .sidebar-collapsed {
                transform: translateX(-100%);
            }
            .sidebar-expanded {
                transform: translateX(0);
            }
            .admin-main-expanded {
                margin-left: 16rem;
            }
            .admin-main-collapsed {
                margin-left: 0;
            }
        }
        @media (max-width: 767px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar-mobile-open {
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <div id="sidebar" class="sidebar fixed top-0 left-0 h-screen w-64 bg-gradient-to-b from-amber-50 to-amber-100 shadow-xl z-30 md:translate-x-0">
        <div class="p-6 border-b border-amber-200">
            <h2 class="text-xl font-bold text-gray-800">Admin Panel</h2>
            <p class="text-gray-600 text-sm">Sports Development Office</p>
        </div>
        
        <nav class="p-4">
            <ul class="space-y-2">
                <li>
                    <a href="admin-dashboard.php" class="flex items-center p-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition duration-200">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="add-winners.php" class="flex items-center p-3 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white shadow-md">
                        <i class="fas fa-trophy mr-3"></i>
                        <span>Add Winners</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition duration-200">
                        <i class="fas fa-users mr-3"></i>
                        <span>Add Participants</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition duration-200">
                        <i class="fas fa-calendar-alt mr-3"></i>
                        <span>Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition duration-200">
                        <i class="fas fa-medal mr-3"></i>
                        <span>Results</span>
                    </a>
                </li>
            </ul>
        </nav>
        
        <div class="absolute bottom-0 w-full p-4 border-t border-amber-200">
            <button id="logout-btn" class="w-full flex items-center justify-center p-3 rounded-xl bg-gradient-to-r from-red-500 to-red-600 text-white shadow-md hover:from-red-600 hover:to-red-700 transition duration-200">
                <i class="fas fa-sign-out-alt mr-3"></i>
                <span>Logout</span>
            </button>
        </div>
    </div>

    <div id="main-content" class="admin-main-expanded flex-1 min-h-screen md:ml-64">
        <nav class="admin-nav px-6 py-4 shadow-lg sticky top-0 z-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <button id="sidebar-toggle" class="p-2 rounded-lg bg-amber-200 hover:bg-amber-300 transition duration-200 md:hidden">
                        <i class="fas fa-bars text-gray-700"></i>
                    </button>
                    <div class="flex items-center">
                        <img class="h-10 w-10 rounded-full border-2 border-amber-300 shadow-sm" src="../assets/img/BASC_sports_development_office.png" alt="BASC Logo">
                        <h1 class="ml-3 text-lg font-bold text-gray-800 hidden md:block">BASC Sports Development Office</h1>
                        <h1 class="ml-3 text-lg font-bold text-gray-800 md:hidden">BASC Sports</h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600 text-sm hidden md:block">Welcome, Admin</span>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 flex items-center justify-center">
                        <i class="fas fa-user text-white text-sm"></i>
                    </div>
                </div>
            </div>
        </nav>

        <div class="px-6 py-8">
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

        <footer class="bg-gradient-to-r from-amber-50 to-amber-100 border-t border-amber-200 py-6 px-6 mt-8">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <div class="flex sm:flex-row flex-col items-center mb-4 md:mb-0">
                    <div class="flex flex-row sm:gap-0 gap-1 mb-1 sm:mb-0">
                        <img class="h-10 w-10 mr-0 sm:mr-2 rounded-full border border-amber-300" src="../assets/img/BASC_sports_development_office.png" alt="BASC Logo">
                        <img class="h-10 w-10 mr-0 sm:mr-3 rounded-full border border-amber-300" src="../assets/img/BASC_Logo.svg" alt="BASC Logo">
                    </div>
                    <div class="flex flex-col sm:text-start text-center">
                        <span class="text-gray-700 font-bold block">BASC Sports Development Office</span>
                        <span class="text-gray-600 text-sm">Promoting Sports Excellence</span>
                    </div>
                </div>
                <div class="text-gray-600 text-sm text-center md:text-right">
                    <p>&copy; 2025 BSAU Sportsfest. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const mainContent = document.getElementById('main-content');
        
        let isSidebarOpen = window.innerWidth >= 768;
        
        function updateSidebarState() {
            const isMobile = window.innerWidth < 768;
            
            if (isMobile) {
                if (isSidebarOpen) {
                    sidebar.classList.add('sidebar-mobile-open');
                    sidebar.classList.remove('sidebar-collapsed');
                } else {
                    sidebar.classList.remove('sidebar-mobile-open');
                    sidebar.classList.add('sidebar-collapsed');
                }
                mainContent.classList.remove('admin-main-expanded', 'admin-main-collapsed');
            } else {
                if (isSidebarOpen) {
                    sidebar.classList.remove('sidebar-collapsed');
                    sidebar.classList.add('sidebar-expanded');
                    mainContent.classList.remove('admin-main-collapsed');
                    mainContent.classList.add('admin-main-expanded');
                } else {
                    sidebar.classList.add('sidebar-collapsed');
                    sidebar.classList.remove('sidebar-expanded');
                    mainContent.classList.remove('admin-main-expanded');
                    mainContent.classList.add('admin-main-collapsed');
                }
            }
        }
        
        updateSidebarState();
        
        sidebarToggle.addEventListener('click', () => {
            isSidebarOpen = !isSidebarOpen;
            updateSidebarState();
        });
        
        window.addEventListener('resize', updateSidebarState);
        
        document.addEventListener('click', (e) => {
            const isMobile = window.innerWidth < 768;
            if (isMobile && isSidebarOpen && 
                !sidebar.contains(e.target) && 
                !sidebarToggle.contains(e.target)) {
                isSidebarOpen = false;
                updateSidebarState();
            }
        });
        
        // Logout
        document.getElementById('logout-btn').addEventListener('click', () => {
            if (confirm('Are you sure you want to logout?')) {
                window.location.href = '../function/admin/destroyer.php';
            }
        });
        
        // Reset Form
        document.getElementById('reset-btn').addEventListener('click', () => {
            if (confirm('Are you sure you want to reset the form? All entered data will be lost.')) {
                // Reset all form elements
                document.getElementById('type').selectedIndex = 0;
                document.getElementById('category-div').classList.add('hidden');
                document.getElementById('winners-div').classList.add('hidden');
                
                if (document.getElementById('category')) {
                    document.getElementById('category').selectedIndex = 0;
                }
                
                // Reset all winner selects
                const winnerSelects = ['gold-winner', 'silver-winner', 'bronze-winner', 'bronze-winner2'];
                winnerSelects.forEach(id => {
                    const element = document.getElementById(id);
                    if (element) element.selectedIndex = 0;
                });
                
                // Reset all participant inputs
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
                
                // Reset additional bronze section
                const additionalSilver = document.getElementById('additional-silver');
                if (additionalSilver) {
                    additionalSilver.classList.add('hidden');
                    additionalSilver.innerHTML = '';
                }
                
                // Reset buttons
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