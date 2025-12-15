<?php
require '../config/dbcon.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login-admin.php");
    exit();
}

// Mock data for dashboard stats
$totalInstitutes = 10;
$totalSports = 15;
$totalMedals = 45;
$pendingResults = 3;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - BASC Sports</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .sidebar {
            transition: transform 0.3s ease;
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }
        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
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
                    <a href="#" class="flex items-center p-3 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white shadow-md">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="add-winners.php" class="flex items-center p-3 rounded-xl text-gray-700 hover:bg-amber-50 hover:text-amber-700 transition duration-200">
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
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Dashboard Overview</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-gradient-to-br from-white to-amber-50 p-6 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Total Institutes</h3>
                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-school text-white text-lg"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-blue-600 mb-2"><?php echo $totalInstitutes; ?></p>
                    <p class="text-gray-600 text-sm">Participating institutes</p>
                </div>

                <div class="bg-gradient-to-br from-white to-amber-50 p-6 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Total Sports</h3>
                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-emerald-500 to-emerald-600 flex items-center justify-center">
                            <i class="fas fa-baseball-bat-ball text-white text-lg"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-emerald-600 mb-2"><?php echo $totalSports; ?></p>
                    <p class="text-gray-600 text-sm">Competition categories</p>
                </div>

                <div class="bg-gradient-to-br from-white to-amber-50 p-6 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Total Medals</h3>
                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-yellow-500 to-yellow-600 flex items-center justify-center">
                            <i class="fas fa-medal text-white text-lg"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-yellow-600 mb-2"><?php echo $totalMedals; ?></p>
                    <p class="text-gray-600 text-sm">Awarded medals</p>
                </div>

                <div class="bg-gradient-to-br from-white to-amber-50 p-6 rounded-2xl shadow-md border border-amber-100 hover:shadow-lg transition duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-bold text-gray-800">Pending Results</h3>
                        <div class="h-12 w-12 rounded-full bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center">
                            <i class="fas fa-clock text-white text-lg"></i>
                        </div>
                    </div>
                    <p class="text-3xl font-bold text-red-600 mb-2"><?php echo $pendingResults; ?></p>
                    <p class="text-gray-600 text-sm">Awaiting entry</p>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 mb-8">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-gray-800">Recent Activities</h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-amber-50 to-amber-100">
                            <tr>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Date & Time</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Activity</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Category</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-amber-50 transition duration-150">
                                <td class="py-4 px-6">Today, 10:30 AM</td>
                                <td class="py-4 px-6">Added Basketball Winners</td>
                                <td class="py-4 px-6">Ball Sports</td>
                                <td class="py-4 px-6"><span class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Completed</span></td>
                            </tr>
                            <tr class="hover:bg-amber-50 transition duration-150">
                                <td class="py-4 px-6">Yesterday, 3:45 PM</td>
                                <td class="py-4 px-6">Updated Badminton Schedule</td>
                                <td class="py-4 px-6">Racket Sports</td>
                                <td class="py-4 px-6"><span class="px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 text-emerald-800">Completed</span></td>
                            </tr>
                            <tr class="hover:bg-amber-50 transition duration-150">
                                <td class="py-4 px-6">Yesterday, 11:20 AM</td>
                                <td class="py-4 px-6">Added Chess Participants</td>
                                <td class="py-4 px-6">Mind & E-Sports</td>
                                <td class="py-4 px-6"><span class="px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6 border-b border-gray-100">
                    <h3 class="text-xl font-bold text-gray-800">Quick Actions</h3>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <a href="add-winners.php" class="bg-gradient-to-r from-amber-50 to-amber-100 p-6 rounded-xl border border-amber-200 hover:border-amber-300 hover:shadow-md transition duration-200 text-center">
                            <div class="h-16 w-16 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-trophy text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Add Winners</h4>
                            <p class="text-gray-600 text-sm">Record competition results</p>
                        </a>
                        
                        <a href="#" class="bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-xl border border-blue-200 hover:border-blue-300 hover:shadow-md transition duration-200 text-center">
                            <div class="h-16 w-16 rounded-full bg-gradient-to-r from-blue-500 to-blue-600 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-users text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Add Participants</h4>
                            <p class="text-gray-600 text-sm">Register team participants</p>
                        </a>
                        
                        <a href="#" class="bg-gradient-to-r from-emerald-50 to-emerald-100 p-6 rounded-xl border border-emerald-200 hover:border-emerald-300 hover:shadow-md transition duration-200 text-center">
                            <div class="h-16 w-16 rounded-full bg-gradient-to-r from-emerald-500 to-emerald-600 flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-calendar-alt text-white text-2xl"></i>
                            </div>
                            <h4 class="font-bold text-gray-800 mb-2">Manage Schedule</h4>
                            <p class="text-gray-600 text-sm">Update competition schedule</p>
                        </a>
                    </div>
                </div>
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
    </script>
</body>
</html>