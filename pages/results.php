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

    <script src="../assets/js/menu.js" defer></script>
    <script src="../assets/js/results.js" defer></script>
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

    <div class="md:px-[8%] sm:px-[4%] px-[1%] min-h-screen py-6">
        <div class="sm:hidden block">
            <div class="flex items-center justify-center mb-1">
                <div class="flex items-center justify-center h-40 w-100"><img src="../assets/img/BSAU_Sportsfest.svg" alt="BSAU_Sportsfest"></div>
            </div>
        </div>
        <div class="items-center justify-start sm:block hidden">
            <h1 class="text-gray-800 text-2xl xs:text-3xl font-bold tracking-tight">BSAU Sportsfest 2025</h1>
        </div>
        
        <div class="mt-0 mb-2 relative overflow-hidden">
            <div class="absolute left-0 top-0 bottom-0 w-20 bg-gradient-to-r from-gray-50 to-transparent z-10"></div>
            <div class="absolute right-0 top-0 bottom-0 w-20 bg-gradient-to-l from-gray-50 to-transparent z-10"></div>
            
            <div class="carousel-container flex space-x-8 py-2">
                <div class="carousel-track flex space-x-8">
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ca.svg" alt="CA Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/coed.svg" alt="COED Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/cet.svg" alt="CET Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/cm.svg" alt="CM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/drt.svg" alt="DRT Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/btvc.svg" alt="BTVC Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ffhnas.svg" alt="FFHNAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ias.svg" alt="IAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ics.svg" alt="ICS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ivm.svg" alt="IVM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
                
                <div class="carousel-track flex space-x-8">
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ca.svg" alt="CA Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/coed.svg" alt="COED Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/cet.svg" alt="CET Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/cm.svg" alt="CM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/drt.svg" alt="DRT Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/btvc.svg" alt="BTVC Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ffhnas.svg" alt="FFHNAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ias.svg" alt="IAS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ics.svg" alt="ICS Logo" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="flex-shrink-0 w-24 h-24 flex items-center justify-center">
                        <img src="../assets/img/ivm.svg" alt="IVM Logo" class="max-w-full max-h-full object-contain">
                    </div>
                </div>
            </div>
        </div>

        <div class="sm:mt-5 mt-0 grid grid-cols-1 md:grid-cols-2 gap-5 mb-6">
            <div class="bg-gradient-to-br from-white to-amber-50 p-5 rounded-2xl shadow-md border border-amber-100">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-800">Total Events</h3>
                        <p class="text-3xl font-bold text-amber-700 mt-2" id="tot-events">0</p>
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
            <div class="p-6 border-b border-gray-200 bg-gradient-to-r from-amber-50 to-white">
                <h2 class="text-lg font-bold text-gray-800">Competition Results</h2>
                <p class="text-gray-600 mt-2 text-xs">Click on each sport category to view detailed medalists</p>
            </div>

            <div id="results-accordion" class="divide-y divide-gray-200">

                <div class="sport-section" data-sport="combat">
                    <button class="sport-header w-full text-left px-6 py-5 flex items-center justify-between hover:bg-amber-50 transition-all duration-300 focus:outline-none">
                        <div class="flex items-center gap-5">
                            <div class="h-14 w-14 rounded-full bg-red-100 flex items-center justify-center flex-shrink-0 shadow-md">
                                <i class="fas fa-user-ninja text-red-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800">Combat Sports</h3>
                                <p class="text-gray-600 text-xs mt-1">Arnis • Taekwondo</p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down text-gray-500 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="sport-content hidden bg-gray-50">
                        <div class="p-[2%] space-y-4">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-red-200 inline-block">Arnis</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Bronze</th>
                                            </tr>
                                        </thead>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="arnis-men" class="bg-white divide-y divide-gray-200">


                                        </tbody>


                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="arnis-women" class="bg-white divide-y divide-gray-200">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-red-200 inline-block">Taekwondo</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase tracking-wider">Bronze</th>
                                            </tr>
                                        </thead>


                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="taekwondo-men" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="taekwondo-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sport-section" data-sport="racket">
                    <button class="sport-header w-full text-left px-6 py-5 flex items-center justify-between hover:bg-amber-50 transition-all duration-300">
                        <div class="flex items-center gap-5">
                            <div class="h-14 w-14 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 shadow-md">
                                <i class="fas fa-table-tennis text-blue-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800">Racket Sports</h3>
                                <p class="text-gray-600 text-xs mt-1">Badminton • Table Tennis • Lawn Tennis</p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down text-gray-500 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="sport-content hidden bg-gray-50">
                        <div class="p-[2%] space-y-4">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-blue-200 inline-block">Badminton</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="Badminton-men" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="Badminton-women" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Mixed</td>
                                        </tr>
                                        <tbody id="Badminton-mixed" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-blue-200 inline-block">Table Tennis</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="TableTennis-men" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="TableTennis-women" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Mixed</td>
                                        </tr>
                                        <tbody id="TableTennis-mixed" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-blue-200 inline-block">Lawn Tennis</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="LawnTennis-men" class="bg-white divide-y divide-gray-200"></tbody>

                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="LawnTennis-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sport-section" data-sport="ball">
                    <button class="sport-header w-full text-left px-6 py-5 flex items-center justify-between hover:bg-amber-50 transition-all duration-300">
                        <div class="flex items-center gap-5">
                            <div class="h-14 w-14 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0 shadow-md">
                                <i class="fas fa-basketball-ball text-orange-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800">Ball Sports</h3>
                                <p class="text-gray-600 text-xs mt-1">Basketball • Volleyball • Beach Volleyball • Sepak Takraw</p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down text-gray-500 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="sport-content hidden bg-gray-50">
                        <div class="p-[2%] space-y-4">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-orange-200 inline-block">Basketball</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="Basketball-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="Basketball-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-orange-200 inline-block">Volleyball</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="Volleyball-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="Volleyball-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-orange-200 inline-block">Beach Volleyball</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="BeachVolleyball-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="BeachVolleyball-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-orange-200 inline-block">Sepak Takraw</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="SepakTakraw-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="SepakTakraw-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sport-section" data-sport="mind">
                    <button class="sport-header w-full text-left px-6 py-5 flex items-center justify-between hover:bg-amber-50 transition-all duration-300">
                        <div class="flex items-center gap-5">
                            <div class="h-14 w-14 rounded-full bg-purple-100 flex items-center justify-center flex-shrink-0 shadow-md">
                                <i class="fas fa-chess-knight text-purple-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800">Mind & E-Sports</h3>
                                <p class="text-gray-600 text-xs mt-1">Chess • Mobile Legends</p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down text-gray-500 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="sport-content hidden bg-gray-50">
                        <div class="p-[2%] space-y-4">
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-purple-200 inline-block">Chess</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="Chess-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="Chess-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
                                </div>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-gray-800 mb-2 pb-2 border-b-4 border-purple-200 inline-block">Mobile Legends</h4>
                                <div class="overflow-x-auto rounded-xl shadow-md border border-gray-200">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gradient-to-r from-amber-100 to-amber-50">
                                            <tr>
                                                <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase">Category</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Gold</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Silver</th>
                                                <th class="px-6 py-4 text-center text-xs font-bold text-gray-700 uppercase">Bronze</th>
                                            </tr>
                                        </thead>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Men</td>
                                        </tr>
                                        <tbody id="MobileLegends-men" class="bg-white divide-y divide-gray-200"></tbody>
                                        
                                        <tr class="bg-gray-50">
                                            <td colspan="4" class="py-2 px-4 font-bold text-gray-800 text-sm">Women</td>
                                        </tr>
                                        <tbody id="MobileLegends-women" class="bg-white divide-y divide-gray-200"></tbody>
                                    </table>
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


</body>

</html>