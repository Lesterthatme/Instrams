<?php
require '../config/dbcon.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login-admin.php");
    exit();
}

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
            <a href="admin-dashboard.php" class="nav-item flex items-center gap-3 p-3 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white shadow-md mb-2">
                <i class="fas fa-tachometer-alt w-5 text-center"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            <a href="add-winners.php" class="nav-item flex items-center gap-3 p-3 rounded-xl text-gray-700 hover:bg-[#ffd7b2] transition duration-200 mb-2">
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
</body>
</html>