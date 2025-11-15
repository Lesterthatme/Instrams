<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - BASC Sports and Development</title>
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <nav class="bg-gradient-to-r from-amber-50 to-amber-100 px-[5%] py-3 shadow-lg sticky top-0 z-10">
        <div class="w-full flex justify-between items-center">
            <div class="flex items-center justify-center font-bold gap-3">
                <div class="relative">
                    <img class="h-11 w-11 sm:h-14 sm:w-14 rounded-full border-2 border-amber-300 shadow-sm" src="../assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                </div>
                <h1 class="titles title hidden sm:block"><a href="../index.php">BASC Sports Development Office</a></h1>
                <h1 class="titles title sm:hidden"><a href="../index.php">BASC Sports</a></h1>
            </div>
            <div class="hidden sm:block">
                <ul class="flex space-x-7 lg:space-x-10">
                    <li class="hover-nav"><a href="../index.php" class="flex items-center gap-2"><i class="fas fa-home text-sm"></i> Home</a></li>
                    <li class="hover-nav"><a href="./schedule.php" class="flex items-center gap-2"><i class="fas fa-calendar-alt text-sm"></i> Schedule</a></li>
                    <li class="hover-nav active-nav"><a href="./results.php" class="flex items-center gap-2"><i class="fas fa-trophy text-sm"></i> Results</a></li>
                </ul>
            </div>
            <div class="sm:hidden">
                <button id="mobile-menu-button" class="p-2 rounded-lg bg-amber-200 hover:bg-amber-300 transition duration-200">
                    <i class="fas fa-bars text-gray-700"></i>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden sm:hidden bg-white mt-3 rounded-lg shadow-lg border-amber-200 py-2">
            <ul class="space-y-1">
                <li><a href="../index.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-home mr-3"></i> Home</a></li>
                <li><a href="./schedule.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text"><i class="fas fa-calendar-alt mr-3"></i>Schedule</a></li>
                <li><a href="./results.php" class="block px-4 py-2 hover-nav hover:bg-amber-50 nav-text active-nav"><i class="fas fa-trophy mr-3"></i>Results</a></li>
            </ul>
        </div>
    </nav>

    <div class="md:px-[8%] sm:px-[5%] px-[3%] min-h-screen py-6">
        <div class="sm:hidden block">
            <div class="flex items-center justify-center mb-1">
                <div class="flex items-center justify-center h-40 w-100"><img src="../assets/img/BSAU_Sportsfest.svg" alt="BSAU_Sportsfest"></div>
            </div>
        </div>
        <div class="items-center justify-start sm:block hidden">
            <h1 class="text-gray-800 text-2xl xs:text-3xl font-bold tracking-tight">BSAU Sportsfest 2025</h1>
        </div>

        <div class="sm:mt-5 mt-0 grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Total Events</h3>
                        <p class="text-3xl font-bold text-amber-700 mt-2">87</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-amber-100 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-amber-600 text-xl"></i>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Participating Institutes</h3>
                        <p class="text-3xl font-bold text-amber-700 mt-2">10</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-amber-100 flex items-center justify-center">
                        <i class="fas fa-university text-amber-600 text-xl"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-3 flex flex-col md:flex-row justify-between items-start md:items-center mb-6 bg-gradient-to-r from-white to-amber-50 rounded-2xl p-5 shadow-sm border border-amber-100">
            <div class="flex flex-col items-start mb-4 md:mb-0">
                <span class="text-amber-700 text-sm xs:text-xl font-medium mt-1 bg-amber-100 px-3 py-1 rounded-full">Competition Results</span>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <div class="relative">
                    <input type="text" id="search-results" placeholder="Search sport or athlete..." class="pl-10 pr-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full text-sm xs:text-base shadow-sm">
                    <i class="fas fa-search absolute left-3 top-3.5 text-gray-400"></i>
                </div>
                <select id="sport-filter" class="px-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto text-sm xs:text-base shadow-sm bg-white">
                    <option value="all">All Sports</option>
                    <option value="arnis">Arnis</option>
                    <option value="badminton">Badminton</option>
                    <option value="basketball">Basketball</option>
                    <option value="beach-volleyball">Beach Volleyball</option>
                    <option value="chess">Chess</option>
                    <option value="lawn-tennis">Lawn Tennis</option>
                    <option value="mobile-legends">Mobile Legends</option>
                    <option value="sepak-takraw">Sepak Takraw</option>
                    <option value="taekwondo">Taekwondo</option>
                    <option value="volleyball">Volleyball</option>
                    <option value="table-tennis">Table Tennis</option>
                </select>
                <select id="gender-filter" class="px-4 py-2.5 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-amber-500 focus:border-transparent w-full md:w-auto text-sm xs:text-base shadow-sm bg-white">
                    <option value="all">All Genders</option>
                    <option value="men">Men</option>
                    <option value="women">Women</option>
                    <option value="mixed">Mixed</option>
                </select>
            </div>
        </div>
        
        <section class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100 mb-8">
            <div class="p-5 border-b border-gray-200">
                <h2 class="text-xl font-bold text-gray-800">Competition Results</h2>
                <p class="text-gray-600 mt-1">Click on each sport to view detailed results</p>
            </div>
            
            <div class="divide-y divide-gray-100" id="results-accordion">
                <div class="sport-section" data-sport="arnis">
                    <button class="sport-header w-full text-left p-5 hover:bg-amber-50 transition duration-150">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-red-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-user-ninja text-red-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800">Arnis</h3>
                                    <p class="text-gray-600 text-xs">19 weight categories</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium mr-3">19 Events</span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </button>
                    <div class="sport-content hidden">
                        <div class="p-4 bg-gray-50 border-t border-gray-200">
                            <div class="mb-6">
                                <h4 class="font-bold text-gray-700 mb-3 text-lg border-b pb-2">Arnis - Men</h4>
                                <div class="overflow-x-auto -mx-2">
                                    <div class="min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-amber-100">
                                                    <tr>
                                                        <th class="py-3 px-3 text-left font-bold text-gray-700 text-xs sm:text-sm">Category</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Gold</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Silver</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Bronze</th>
                                                    </tr>
                                                </thead>
                                                <!-- Pili ka na lang kung alin mas maganda sa draw -->
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    <tr class="hover:bg-amber-50 transition duration-150">
                                                        <td class="py-3 px-3 font-medium text-xs sm:text-sm">Fin (50 kg below)</td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center mb-1">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 ca round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                    <span class="text-xs">CA</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 cet round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                    <span class="text-xs">CET</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center coed rounded-[8px] mb-3 py-1 px-3">
                                                                <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                    <span class="text-xs">COED</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-col items-center text-center cet rounded-[8px] py-1 px-3">
                                                                    <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                    <span class="text-xs">CET</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="hover:bg-amber-50 transition duration-150">
                                                        <td class="py-3 px-3 font-medium text-xs sm:text-sm">Bantam (51-55 kg)</td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 drt round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/DRT_Logo.svg" alt="DRT">
                                                                    <span class="text-xs">DRT</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 btvc round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/BTVC_Logo.svg" alt="BTVC">
                                                                    <span class="text-xs">BTVC</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center mb-3 border-1 border-[#c5c5c5] py-1 px-3 rounded-md">
                                                                <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 ivm round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/IVM_Logo.svg" alt="IVM">
                                                                    <span class="text-xs">IVM</span>
                                                                </div>
                                                            </div>
                                                            <div class="flex flex-col items-center text-center border-1 border-[#c5c5c5] py-1 px-3 rounded-md">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 ics round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/ICS_Logo.svg" alt="ICS">
                                                                    <span class="text-xs">ICS</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-6">
                                <h4 class="font-bold text-gray-700 mb-3 text-lg border-b pb-2">Arnis - Women</h4>
                                <div class="overflow-x-auto -mx-2">
                                    <div class="min-w-full inline-block align-middle">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-amber-100">
                                                    <tr>
                                                        <th class="py-3 px-3 text-left font-bold text-gray-700 text-xs sm:text-sm">Category</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Gold</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Silver</th>
                                                        <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Bronze</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="divide-y divide-gray-200 bg-white">
                                                    <tr class="hover:bg-amber-50 transition duration-150">
                                                        <td class="py-3 px-3 font-medium text-xs sm:text-sm">Fin (40 kg below)</td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 coed round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                    <span class="text-xs">COED</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 ca round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                    <span class="text-xs">CA</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="py-3 px-3">
                                                            <div class="flex flex-col items-center text-center">
                                                                <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                                <div class="flex items-center justify-center mb-1 cet round">
                                                                    <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                    <span class="text-xs">CET</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sport-section" data-sport="badminton">
                    <button class="sport-header w-full text-left p-5 hover:bg-amber-50 transition duration-150">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-table-tennis text-blue-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800">Badminton</h3>
                                    <p class="text-gray-600 text-xs">5 events</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium mr-3">5 Events</span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </button>
                    <div class="sport-content hidden">
                        <div class="p-4 bg-gray-50 border-t border-gray-200">
                            <div class="overflow-x-auto -mx-2">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <h4 class="font-bold text-gray-700 mb-3 text-lg border-b pb-2">Badminton - Men</h4>
                                        <table class="min-w-full divide-y divide-gray-200 mb-6">
                                            <thead class="bg-amber-100">
                                                <tr>
                                                    <th class="py-3 px-3 text-left font-bold text-gray-700 text-xs sm:text-sm">Category</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Gold</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Silver</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Bronze</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr class="hover:bg-amber-50 transition duration-150">
                                                    <td class="py-3 px-3 font-medium text-xs sm:text-sm">Men's Singles</td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 cet round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                <span class="text-xs">CET</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 ca round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                <span class="text-xs">CA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 coed round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                <span class="text-xs">COED</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-amber-50 transition duration-150">
                                                    <td class="py-3 px-3 font-medium text-xs sm:text-sm">Men's Doubles</td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 ca round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                <span class="text-xs">CA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 cet round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                <span class="text-xs">CET</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 coed round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                <span class="text-xs">COED</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                        <h4 class="font-bold text-gray-700 mb-3 text-lg border-b pb-2">Badminton - Women</h4>
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-amber-100">
                                                <tr>
                                                    <th class="py-3 px-3 text-left font-bold text-gray-700 text-xs sm:text-sm">Category</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Gold</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Silver</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Bronze</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr class="hover:bg-amber-50 transition duration-150">
                                                    <td class="py-3 px-3 font-medium text-xs sm:text-sm">Women's Singles</td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-bold text-yellow-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 cet round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                <span class="text-xs">CET</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-gray-600 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 ca round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                <span class="text-xs">CA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <span class="font-medium text-amber-700 text-xs sm:text-sm">FName LName</span>
                                                            <div class="flex items-center justify-center mb-1 coed round">
                                                                <img class="h-5 w-5 sm:h-6 sm:w-6 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                <span class="text-xs">COED</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="sport-section" data-sport="basketball">
                    <button class="sport-header w-full text-left p-5 hover:bg-amber-50 transition duration-150">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <div class="h-10 w-10 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                                    <i class="fas fa-basketball-ball text-orange-600"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-lg text-gray-800">Basketball</h3>
                                    <p class="text-gray-600 text-xs">2 team events</p>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <span class="bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium mr-3">2 Events</span>
                                <i class="fas fa-chevron-down text-gray-400 transition-transform duration-300"></i>
                            </div>
                        </div>
                    </button>
                    <div class="sport-content hidden">
                        <div class="p-4 bg-gray-50 border-t border-gray-200">
                            <div class="overflow-x-auto -mx-2">
                                <div class="min-w-full inline-block align-middle">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-amber-100">
                                                <tr>
                                                    <th class="py-3 px-3 text-left font-bold text-gray-700 text-xs sm:text-sm">Category</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Gold</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Silver</th>
                                                    <th class="py-3 px-3 text-center font-bold text-gray-700 text-xs sm:text-sm">Bronze</th>
                                                </tr>
                                            </thead>
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr class="hover:bg-amber-50 transition duration-150">
                                                    <td class="py-3 px-3 font-medium text-xs sm:text-sm">Men's Basketball</td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">CET</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                <span class="font-medium text-gray-600 text-xs sm:text-sm">CA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                <span class="font-medium text-amber-700 text-xs sm:text-sm">COED</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="hover:bg-amber-50 transition duration-150">
                                                    <td class="py-3 px-3 font-medium text-xs sm:text-sm">Women's Basketball</td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/CA_Logo.svg" alt="CA">
                                                                <span class="font-bold text-yellow-600 text-xs sm:text-sm">CA</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/COED_Logo.svg" alt="COED">
                                                                <span class="font-medium text-gray-600 text-xs sm:text-sm">COED</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-3">
                                                        <div class="flex flex-col items-center text-center">
                                                            <div class="flex items-center justify-center mb-1">
                                                                <img class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-1 sm:mr-2" src="../assets/img/CET_Logo.svg" alt="CET">
                                                                <span class="font-medium text-amber-700 text-xs sm:text-sm">CET</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
    
    <footer class="bg-gradient-to-r from-amber-50 to-amber-100 border-t border-amber-200 py-6 px-[5%] mt-12">
        <div class="flex flex-col sm:flex-row justify-between items-center">
            <div class="flex sm:flex-row flex-col items-center mb-4 md:mb-0">
                <div class="flex flex-row sm:gap-0 gap-1 mb-1 sm:mb-0">
                    <img class="h-10 w-10 mr-0 sm:mr-2 rounded-full border border-amber-300" src="../assets/img/BASC_sports_development_office.png" alt="BASC_sports_development_office_LOGO">
                    <img class="h-10 w-10 mr-0 sm:mr-3 rounded-full border border-amber-300" src="../assets/img/BASC_Logo.svg" alt="BASC_LOGO">
                </div>
                <div class="flex flex-col sm:text-start text-center">
                    <span class="text-gray-700 font-bold block">BASC Sports Development Office</span>
                    <span class="text-gray-600 text-sm">Promoting Sports Excellence</span>
                </div>
            </div>
            <div class="flex space-x-4 mb-4 md:mb-0">
                <a href="https://www.facebook.com/profile.php?id=100075441057933" class="h-10 w-10 rounded-full bg-amber-200 flex items-center justify-center hover:bg-amber-300 transition duration-200">
                    <i class="fab fa-facebook-f text-gray-700"></i>
                </a>
            </div>
            <div class="text-gray-600 text-sm text-center md:text-right">
                <p>&copy; 2025 BSAU Sportsfest. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="../assets/js/menu.js"></script>
    <script src="../assets/js/results.js"></script>
</body>
</html>