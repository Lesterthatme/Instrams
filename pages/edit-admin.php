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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/output.css">
    <title>Edit Winners - BASC Sports Admin</title>
    <script src="../assets/js/edit-admin.js" defer></script>
    <script src="../assets/js/sidebar.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50 min-h-screen flex flex-col select-none">
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
            <a href="admin-dashboard.php" class="nav-item flex items-center p-3 rounded-xl text-gray-700 hover:bg-[#ffd7b2] transition duration-200 mb-2">
                <i class="fas fa-tachometer-alt w-5 text-center"></i>
                <span class="nav-text pl-3">Dashboard</span>
            </a>
            <a href="add-winners.php" class="nav-item flex items-center p-3 rounded-xl text-gray-700 hover:bg-[#ffd7b2] transition duration-200 mb-2">
                <i class="fas fa-trophy w-5 text-center"></i>
                <span class="nav-text pl-3">Add Winners</span>
            </a>
            <a href="edit-admin.php" class="nav-item flex items-center p-3 rounded-xl bg-gradient-to-r from-amber-500 to-amber-600 text-white shadow-md mb-2">
                <i class="fas fa-medal w-5  text-center"></i>
                <span class="nav-text pl-3">Results</span>
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
                <h1 class="text-2xl font-bold text-gray-800 mb-2">Results Management</h1>
                <p class="text-gray-600">View, edit, and delete competition results</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                <div class="p-6 border-b border-gray-100">
                    <h2 class="text-xl font-bold text-gray-800">Tally Master Table</h2>
                </div>
                
                <div class="overflow-auto rounded-lg">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-amber-50 to-amber-100">
                            <tr>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Sport</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Category</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Gender</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Winners</th>
                                <th class="py-4 px-6 text-left font-bold text-gray-700">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="bg-white hover:bg-amber-50 transition duration-150">
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <span class="px-3 py-1 text-xs font-medium text-white bg-blue-400 rounded-full hover:bg-blue-600 cursor-pointer transition duration-200">Men</span>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-yellow-600 font-medium">1st: CA</span>
                                        <span class="text-gray-500 font-medium">2nd: CA</span>
                                        <span class="text-amber-700 font-medium">3rd: CA & ICS</span>
                                    </div>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap flex gap-2">
                                    <button class="update-btn p-2 text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl cursor-pointer hover:from-blue-600 hover:to-blue-700 transition duration-200 shadow-md hover:shadow-lg" title="Edit">
                                        <i class="fas fa-edit text-sm"></i>
                                    </button>
                                    <button class="delete-btn p-2 text-white bg-gradient-to-r from-red-500 to-red-600 rounded-xl cursor-pointer hover:from-red-600 hover:to-red-700 transition duration-200 shadow-md hover:shadow-lg" title="Delete">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-gray-50 hover:bg-amber-50 transition duration-150">
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Ball Games</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Basketball</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <span class="px-3 py-1 text-xs font-medium text-white bg-pink-400 rounded-full hover:bg-pink-600 cursor-pointer transition duration-200">Women</span>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-yellow-600 font-medium">1st: CA</span>
                                        <span class="text-gray-500 font-medium">2nd: CA</span>
                                        <span class="text-amber-700 font-medium">3rd: CA & ICS</span>
                                    </div>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap flex gap-2">
                                    <button class="update-btn p-2 text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl cursor-pointer hover:from-blue-600 hover:to-blue-700 transition duration-200 shadow-md hover:shadow-lg" title="Edit">
                                        <i class="fas fa-edit text-sm"></i>
                                    </button>
                                    <button class="delete-btn p-2 text-white bg-gradient-to-r from-red-500 to-red-600 rounded-xl cursor-pointer hover:from-red-600 hover:to-red-700 transition duration-200 shadow-md hover:shadow-lg" title="Delete">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="bg-white hover:bg-amber-50 transition duration-150">
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Racket Sports</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Badminton</td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <span class="px-3 py-1 text-xs font-medium text-white bg-blue-400 rounded-full hover:bg-blue-600 cursor-pointer transition duration-200">Men</span>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                    <div class="flex flex-col gap-1">
                                        <span class="text-yellow-600 font-medium">1st: COED</span>
                                        <span class="text-gray-500 font-medium">2nd: CET</span>
                                        <span class="text-amber-700 font-medium">3rd: ICS</span>
                                    </div>
                                </td>
                                <td class="p-3 text-sm text-gray-700 whitespace-nowrap flex gap-2">
                                    <button class="update-btn p-2 text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded-xl cursor-pointer hover:from-blue-600 hover:to-blue-700 transition duration-200 shadow-md hover:shadow-lg" title="Edit">
                                        <i class="fas fa-edit text-sm"></i>
                                    </button>
                                    <button class="delete-btn p-2 text-white bg-gradient-to-r from-red-500 to-red-600 rounded-xl cursor-pointer hover:from-red-600 hover:to-red-700 transition duration-200 shadow-md hover:shadow-lg" title="Delete">
                                        <i class="fas fa-trash text-sm"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
                        <span>Click the <i class="fas fa-edit text-blue-500 mx-1"></i> button to edit winners for a specific sport category</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>Click the <i class="fas fa-trash text-red-500 mx-1"></i> button to delete a competition result</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-circle text-xs text-amber-500 mt-1 mr-2"></i>
                        <span>All changes are permanent and will affect the public results display</span>
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

    <div class="fixed inset-0 bg-black/50 justify-center items-end transition-opacity duration-300 sm:items-center hidden z-50" id="dialog" onclick="hideModal()">
        <div class="bg-white rounded-2xl shadow-xl flex flex-col w-full sm:w-lg md:w-2xl lg:w-4xl max-h-[90vh] overflow-hidden mx-4" onclick="event.stopImmediatePropagation()">
            <div class="flex p-8 gap-6 border-b border-gray-200">
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-full text-blue-600 w-12 h-12 min-w-[48px] min-h-[48px] flex justify-center items-center">
                    <i class="fas fa-trophy text-xl"></i>
                </div>

                <div class="grow">
                    <h1 class="font-bold text-xl mb-2 text-gray-800">Update Winners</h1>
                    <p class="text-gray-600">Edit the winners for this competition</p>
                </div>
                <button onclick="hideModal()" class="text-gray-500 hover:text-gray-700 transition duration-200">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div class="p-8 overflow-y-auto flex-1">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div class="flex gap-2 items-center">
                        <h3 class="text-gray-700 font-medium">Sport:</h3>
                        <span class="text-gray-800 font-semibold uppercase">Basketball</span> 
                    </div>
                    <div class="flex gap-2 items-center">
                        <h3 class="text-gray-700 font-medium">Category:</h3>
                        <span class="text-gray-800 font-semibold uppercase">Ball Games</span> 
                    </div>
                    <div class="flex gap-2 items-center">
                        <h3 class="text-gray-700 font-medium">Gender:</h3>
                        <span class="px-3 py-1 text-xs font-medium text-white bg-pink-400 rounded-full">Women</span>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="border-t border-gray-200 pt-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-medal text-yellow-500 mr-2"></i>
                            Gold Winner (1st Place)
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="gold-winner" class="block text-gray-700 font-medium mb-2">Institute</label>
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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

                    <div class="border-t border-gray-200 pt-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-medal text-gray-400 mr-2"></i>
                            Silver Winner (2nd Place)
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="silver-winner" class="block text-gray-700 font-medium mb-2">Institute</label>
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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

                    <div class="border-t border-gray-200 pt-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-medal text-amber-700 mr-2"></i>
                            Bronze Winner (3rd Place)
                        </h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="bronze-winner" class="block text-gray-700 font-medium mb-2">Institute</label>
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
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
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
            </div>

            <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-6 border-t border-gray-200 flex justify-end gap-4">
                <button class="px-6 py-3 border border-gray-300 text-gray-700 font-medium rounded-xl hover:bg-gray-50 transition duration-200 shadow-sm hover:shadow-md" onclick="hideModal()">
                    Cancel
                </button>
                <button class="px-8 py-3 bg-gradient-to-r from-emerald-500 to-emerald-600 text-white font-medium rounded-xl hover:from-emerald-600 hover:to-emerald-700 transition duration-200 shadow-md hover:shadow-lg flex items-center" id="save-btn">
                    <i class="fas fa-save mr-2"></i>Update Winners
                </button>
            </div>
        </div>
    </div>
</body>
</html>